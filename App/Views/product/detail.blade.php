<!-- Kế thừa lại layout master -->
@extends('layouts.master')

<!-- Truyền giá trị cho những phần thay đổi -->
<!-- yield(tên)  ~ section(tên, giá trị) -->
@section('title', 'Chi tiết sản phẩm')

<!-- yield(tên) ~ section(tên) nội dung endsection -->
@section('content-title', 'Chi tiết sản phẩm')
@section('content')

<h3>Name: {{$name}}</h3>
<p>Giá {{$price}}</p>
<p>Màu {{$color}}</p>
<p>Con chip {{$chip}}</p>
<p>Ram {{$ram}}</p>
<p>Rom {{$rom}}</p>
<a href="?url=products">Back</a>
@endsection
