@extends('admin.layout.dashadmin')
@section('title', 'Quản Lý Kỳ Thi')
@section('main')

    <div class="design_cauhoi">
        <button id="btnShowForm" class="btn btnthem">Thêm</button>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h6 class="panel-title"><i class="fas fa-chalkboard-teacher"></i>DANH SÁCH KỲ THI</h6>
        </div>
        <div class="datatable">
            <table class="table tbl" style="font-size: 12px">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên Kỳ Thi</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($exams as $index => $exam)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $exam->name }}</td>
                            <td>
                                <a href="{{ route('admin.exam.edit', $exam->id) }}">
                                    <button class="btn btnsuach">Sửa</button>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('admin.exam.destroy', $exam->id) }}" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn xóa không?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btnxoach">Xóa</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal Form -->
    <div id="addExamModal" class="modal" style="display: none;">
        <div class="modal-content">
            <span id="btnCloseForm" class="close">&times;</span>
            <h3>Thêm Kỳ Thi Mới</h3>
            <form id="addExamForm" action="{{ route('admin.exam.store') }}" method="POST">
                @csrf
                <label for="examName">Tên Kỳ Thi:</label>
                <input type="text" id="examName" name="name" required>
                <button type="submit" class="btn btnthem">Lưu</button>
            </form>
        </div>
    </div>

    <style>
        .modal {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 300px;
            background-color: white;
            border: 1px solid #ddd;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            z-index: 1000;
            display: none;
        }

        .modal-content {
            text-align: center;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            font-size: 20px;
        }

        #btnShowForm,
        .btn {
            margin: 10px 0;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const btnShowForm = document.getElementById('btnShowForm');
            const btnCloseForm = document.getElementById('btnCloseForm');
            const modal = document.getElementById('addExamModal');

            // Hiển thị modal khi nhấn nút "Thêm"
            btnShowForm.addEventListener('click', function () {
                modal.style.display = 'block';
            });

            // Đóng modal khi nhấn nút "X"
            btnCloseForm.addEventListener('click', function () {
                modal.style.display = 'none';
            });

            // Đóng modal khi nhấn bên ngoài modal
            window.addEventListener('click', function (event) {
                if (event.target === modal) {
                    modal.style.display = 'none';
                }
            });
        });
    </script>
@endsection
