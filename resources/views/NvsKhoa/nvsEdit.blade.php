<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NVS - Thông tin chi tiết khoa cần sửa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <form action="{{route('nvskhoa.nvsEditSubmit')}}" method="post"></form>
        @csrf
            <div class="card">
                <div class="card-header">
                    <h3>Thông tin chi tiết khoa cần sửa</h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-3 row">
                            <label for="NVSMAKH" class="form-label">Mã Khoa</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control" 
                                        id="NVSMAKH" name="NVSMAKH"
                                        value="{{$khoa->NVSMAKH}}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="NVSTENKH" class="form-label">Tên Khoa</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" 
                                        id="NVSTENKH" name="NVSTENKH"
                                        value="{{$khoa->NVSTENKH}}">
                            </div>
                        </div>
                    </div>
                <div class="card-footer">
                    <button class="btn btn-primary mx-2">Submit</button>
                    <a href="/khoas" class="btn btn-primary">Back</a>
                </div>
            </div>
        </form>
    </section>
</body>
</html>
