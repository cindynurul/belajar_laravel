<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center><h2>Tampilkan Data</h2>
<table border=1>
        <th>Id</th>
        <th>Nama</th>
        <th>Alamat </th>
        <th>Kode Pos</th>
        <th>Kota</th>
        <tr>
@foreach ($spl as $data)
<td>{{ $data['id'] }}</td>
<td>{{ $data['nama'] }} </td>
<td>{{ $data['alamat'] }} </td>
<td>{{ $data['kode_pos'] }} </td>
<td>{{ $data['kota'] }} </td>
<tr>
@endforeach
</table>
    </center>
</body>
</html>