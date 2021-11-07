<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata2</title>
</head>
<body>
    <h2>Tampilkan Data</h2>
    <ul>
        @foreach ($data as $data2)
        nis : {{ $data2['nis'] }}<br>
        nama : {{ $data2['nama'] }}<br>
        jenis kelamin : {{ $data2['jk'] }}<br>
        kelas : {{ $data2['kelas'] }}<br>
        alamat : {{ $data2['alamat'] }}<br>
        <hr>
        @endforeach
</ul>
</body>
</html>