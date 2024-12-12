<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NVS - danh sách khoa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
</head>
<body>
    <section class="container border my-3">
        <h1>danh sách khoa</h1>
        <table class="table table-bordered">
            <thead>
                <th>#</th>
                <th>Mã Khoa</th>
                <th>Tên Khoa</th>
                <th>Chức Năng</th>
            </thead>
            <tbody>
                @php
                    $stt=0
                @endphp
                @foreach ($nvsKhoas as $item)
                    @php
                        $stt++;
                    @endphp
                    <tr>
                        <td>{{$stt}}</td>
                        <td>{{$item->NVSMAKH}}</td>
                        <td>{{$item->NVSTENKH}}</td>
                        <td>
                            <a href="/khoas/detail/{{$item->NVSMAKH}}" class="btn btn-success">
                                chi tiết</a>
                            <a href="/khoas/edit/{{$item->NVSMAKH}}" class="btn btn-primary">
                                sửa
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <a href="/khoas/delete/{{$item->NVSMAKH}}" class="btn btn-danger">
                                delete</a>
                            <a href="/khoas/delete/{{$item->NVSMAKH}}" class="btn btn-danger"
                                onclick="return (confirm('bạn có chắc muốn xóa không')"
                                >
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </td>
                    </tr>
            </tbody>
        </table>
        <a href="/khoas/insert" class="btn btn-primary">Thêm mới</a>
    </section>
</body>
</html>