@extends('layouts.app')

@section('title', 'Danh sách thực phẩm')

@section('content')
    <h1>Danh sách thực phẩm</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Tên món ăn</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Danh mục</th>
            </tr>
        </thead>
        <tbody>
            @foreach($foods as $food)
                <tr>
                    <td>{{ $food->id }}</td>
                    <td>{{ $food->name }}</td>
                    <td>{{ $food->price }} VND</td>
                    <td>{{ $food->quantity }}</td>
                    <td>{{ $food->category->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
