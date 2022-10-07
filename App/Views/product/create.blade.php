<!-- Kế thừa lại layout master -->
@extends('layouts.master')

<!-- Truyền giá trị cho những phần thay đổi -->
<!-- yield(tên)  ~ section(tên, giá trị) -->
@section('title', 'Tạo mới sản phẩm')

<!-- yield(tên) ~ section(tên) nội dung endsection -->
@section('content-title', 'Tạo mới sản phẩm')
@section('content')


Name <input type="text"><br>
Giá <input type="number"><br>
Màu <input type="text"><br>
Chip <input type="text"><br>
Ram <input type="text"><br>
Rom <input type="text"><br>
<input type="submit"><br>
<a href="?url=products">Danh sách sản phẩm</a>


@endsection
