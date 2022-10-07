<!-- Kế thừa lại layout master -->
@extends('layouts.master')

<!-- Truyền giá trị cho những phần thay đổi -->
<!-- yield(tên)  ~ section(tên, giá trị) -->
@section('title', 'Danh sách sản phẩm')

<!-- yield(tên) ~ section(tên) nội dung endsection -->
@section('content-title', 'Danh sách sản phẩm')
@section('content')

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Giá</th>
                <th>Action</th>
                <th>Chi tiết sản phẩm</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1</td>
                <td>{{ $name }}</td>
                <td>{{ $price }}</td>
                <td>
                    <a href="?url=products/create">Thêm</a>
                    <a href="">Sửa</a>
                </td>
                <td><a href="?url=products/detail/3">Chi tiết</a></td>
            </tr>
        </tbody>
    </table>


    <!-- Với blade -->

@endsection
