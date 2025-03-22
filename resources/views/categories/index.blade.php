@extends('layouts.app')

@section('title', 'Danh mục thực phẩm')

@section('content')
    <h1>Danh mục thực phẩm</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Tên danh mục</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
