<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>San Pham Dich Vu</title>
</head>
<body>
    <h1>day la trang san pham dich vu ki thuat</h1>
    
    <ul>
        <p>Ten dich vu ki thuat: </p>
        @foreach ($pro as $p)
            <li>{{$p->ten_san_pham}}</li>
        @endforeach
        <p>Chi phi: </p>
        @foreach ($pro  as $p)
            <li>{{$p->chi_phi}}</li>
        @endforeach
        <p>Mo ta:</p>
        @foreach ($pro as $p)
            <li>{{$p->mo_ta}}</li>
        @endforeach
    </ul>
    <a>quay ve trang chu</a>
</body>
</html>