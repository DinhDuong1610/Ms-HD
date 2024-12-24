@extends('admin.layout.dashadmin');
@section('title', 'Quản Lý Khối');
@section('main')

    <div class="design_cauhoi">
        <button id="btnShowForm" data-toggle="modal" data-target="#modal_form_horizontal2" class="btn btnthem">Thêm
        </button>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h6 class="panel-title"><i class="fas fa-chalkboard-teacher"></i>DANH SÁCH KHỐI</h6>
        </div>
        <div class="datatable">

            <table class="table tbl" style="font-size: 12px">

                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên khối</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($grades as $index => $grade)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $grade->name }}</td>
                            <td>
                                <a href="{{ route('admin.grade.edit', $grade->id) }}">
                                    <button class="btn btnsuach">Sửa</button>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('admin.grade.destroy', $grade->id) }}" method="POST"
                                    onsubmit="return confirm('Bạn có chắc chắn muốn xóa không?');">
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
    <div id="addGradeModal" class="modal" style="display: none;">
        <div class="modal-content">
            <span id="btnCloseForm" class="close">&times;</span>
            <h3>Thêm Khối Mới</h3>
            <form id="addGradeForm" action="{{ route('admin.grade.store') }}" method="POST">
                @csrf
                <label for="gradeName">Tên Khối:</label>
                <input type="text" id="gradeName" name="name" required>
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
        document.addEventListener('DOMContentLoaded', function() {
            const btnShowForm = document.getElementById('btnShowForm');
            const btnCloseForm = document.getElementById('btnCloseForm');
            const modal = document.getElementById('addGradeModal');

            btnShowForm.addEventListener('click', function() {
                modal.style.display = 'block';
            });

            btnCloseForm.addEventListener('click', function() {
                modal.style.display = 'none';
            });

            window.addEventListener('click', function(event) {
                if (event.target === modal) {
                    modal.style.display = 'none';
                }
            });
        });
    </script>
@endsection
