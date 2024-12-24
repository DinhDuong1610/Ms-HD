@extends('admin.layout.dashadmin');
@section('title', 'Quản Lý Khối');
@section('main')

    <div class="panel panel-default khungbang">
        <div class="panel-heading">
            <h6 class="panel-title"><i class="fas fa-chalkboard-teacher"></i><b class="tbl">NHẬP THÔNG TIN KHỐI</b></h6>
        </div>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                @foreach ($errors->all() as $err)
                    <span class="glyphicon glyphicon-remove icon-remove"></span> {{ $err }} <br>
                @endforeach
            </div>
        @endif

        @if (session('thongbao'))
            <div class="alert alert-success">
                <span class="glyphicon glyphicon-ok icon-oke"></span> {{ session('thongbao') }}
            </div>
        @endif

        <form action="{{ route('admin.grade.update', $grade->id) }}" method="POST">
            @csrf
            @method('PUT')
            <table class="table">

                <tr class="tbl">
                    <td class="style_row"><i class="fa fa-edit"></i> &nbsp; &nbsp;Tên Khối</td>
                    <td><input type="text" class="from-control nhaploai" value="{{ $grade->name }}"
                            placeholder="  Nhập tên khối" name="name" onblur="ktra()" id="txtTen" />

                    </td>
                </tr>


                <tr>
                    <td class="style_row tbl-row2" colspan="2">
                        <button type="submit" class="btn btnsuach12">Sửa</button>
                        <a href="{{route('admin.grade.index')}}">
                            <div class="thoat">Thoát</div>
                        </a>

                    </td>
                </tr>
            </table>
        </form>
    </div>
@endsection
