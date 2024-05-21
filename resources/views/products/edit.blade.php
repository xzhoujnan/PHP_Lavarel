<!DOCTYPE html>
<html>
<head>
    <title>Chỉnh sửa sản phẩm</title>
</head>
<body>
    <h1>Chỉnh sửa sản phẩm</h1>
    <form method="POST" action="{{ route('products.update', $product) }}">
        @csrf
        @method('PUT')
        <label>Loại sản phẩm:</label>
        <input type="text" name="product_type" value="{{ old('product_type', $product->product_type) }}">
        @error('product_type')
            <div>{{ $message }}</div>
        @enderror
        <br>

        <label>Mã sản phẩm:</label>
        <input type="text" name="product_code" value="{{ old('product_code', $product->product_code) }}">
        @error('product_code')
            <div>{{ $message }}</div>
        @enderror
        <br>

        <label>Tên:</label>
        <input type="text" name="name" value="{{ old('name', $product->name) }}">
        @error('name')
            <div>{{ $message }}</div>
        @enderror
        <br>

        <label>Mô tả:</label>
        <textarea name="description">{{ old('description', $product->description) }}</textarea>
        @error('description')
            <div>{{ $message }}</div>
        @enderror
        <br>

        <label>Số lượng:</label>
        <input type="number" name="quantity" value="{{ old('quantity', $product->quantity) }}">
        @error('quantity')
            <div>{{ $message }}</div>
        @enderror
        <br>