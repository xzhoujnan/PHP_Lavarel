<!DOCTYPE html>
<html>
<head>
    <title>Danh sách sản phẩm</title>
</head>
<body>
    <h1>Danh sách sản phẩm</h1>
    <a href="{{ route('products.create') }}">Thêm sản phẩm mới</a>
    <table>
        <thead>
            <tr>
                <th>Loại sản phẩm</th>
                <th>Mã sản phẩm</th>
                <th>Tên</th>
                <th>Mô tả</th>
                <th>Số lượng</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->product_type }}</td>
                    <td>{{ $product->product_code }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>
                        <a href="{{ route('products.edit', $product) }}">Chỉnh sửa</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
