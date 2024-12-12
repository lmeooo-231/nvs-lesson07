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
    <section class="container my-3">
        <div class="card">
            <div class="card-header">
                <h1>danh sách môn học</h1>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>mã môn học</th>
                            <th>tên môn học</th>
                            <th>số tiết</th>
                            <th>chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($collection as $item)
                            <tr>
                                <td>1</td>
                                <td>{{$item->NVSMANH}}</td>
                                <td>{{$item->NVSTENNH}}</td>
                                <td>{{$item->NVSSOTIET}}</td>
                                <td>
                                    view / edit / delete
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="5">
                                <h3>tổng số môn học: {{$nvsMonHocs->count()}}</h3>
                            </th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </section>
</body>
</html>