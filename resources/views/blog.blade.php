<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog</title>
</head>
<body>
    <h2>Tampilkan Data</h2>
    <ul>
        @foreach ($data as $data2)
        id : {{ $data2['id'] }}<br>
        title : {{ $data2['title'] }}<br>
        content : {{ $data2['content'] }}<br>
        <hr>
        @endforeach
</ul>
</body>
</html>