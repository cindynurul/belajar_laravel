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
        <th>varian</th>
        <th>harga_jual</th>
        <th>harga_beli</th>
        <tr>
@foreach ($brg as $data)
<td>{{ $data['id'] }}</td>
<td>{{ $data['nama'] }} </td>
<td>{{ $data['varian'] }} </td>
<td>{{ $data['harga_jual'] }} </td>
<td>{{ $data['harga_beli'] }} </td>
</tr>
@endforeach
</table>
    </center>
</body>
</html>



