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
        <th>Nama Barang</th>
        <th>Nama Suplier</th>
        <th>Qty</th>
        <th>Tanggal</th>
        <tr>
@foreach ($pmb as $data)
<td>{{ $data['id'] }}</td>
<td>{{ $data['nama_barang'] }} </td>
<td>{{ $data['nama_suplier'] }} </td>
<td>{{ $data['qty'] }} </td>
<td>{{ $data['tgl'] }} </td>
</tr>
@endforeach
</table>
    </center>
</body>
</html>