<!DOCTYPE html>
<html>
<head>
    <title>Thêm sản phẩm mới</title>
</head>
<body>
    <h1>Thêm sản phẩm mới</h1>
    <form method="POST" action="{{ route('products.store') }}">
        @csrf
        <label>Loại sản phẩm:</label>
        <input type="text" name="product_type" value="{{ old('product_type') }}">
        @error('product_type')
            <div>{{ $message }}</div>
        @enderror
        <br>

        <label>Mã sản phẩm:</label>
        <input type="text" name="product_code" value="{{ old('product_code') }}">
        @error('product_code')
            <div>{{ $message }}</div>
        @enderror
        <br>

        <label>Tên:</label>
        <input type="text" name="name" value="{{ old('name') }}">
        @error('name')
            <div>{{ $message }}</div>
        @enderror
        <br>

        <label>Mô tả:</label>
        <textarea name="description">{{ old('description') }}</textarea>
        @error('description')
            <div>{{ $message }}</div>
        @enderror
        <br>

        <label>Số lượng:</label>
        <input type="number" name="quantity" value="{{ old('quantity') }}">
        @error('quantity')
            <div>{{ $message }}</div>
        @enderror
        <br>

        <button type="submit">Thêm sản phẩm</button>
    </form>
</body>
</html>
