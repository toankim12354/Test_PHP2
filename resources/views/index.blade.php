{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="add" method="post">
            @csrf
            <input type="text" name="name"> <br>
            <input type="text" name="email"><br>
            <button type="submit"> gui</button>
        </form>
    </div>
</body>
</html> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quản lý khách hàng</title>
</head>
<body>
    <a href="{{url('/customer/create')}}">Thêm Khách Hàng</a>
    <br>
    <a href="{{url('/customer')}}">Danh Sách Khách Hàng</a>
</body>
</html>