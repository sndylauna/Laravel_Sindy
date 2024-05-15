<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
        <h2>Data Tabel Barang</h2>
    <table border="1">
        <tr>
            <th>No</th>
            <th>id</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
        
         </tr>
         @php $no=1; @endphp
         @foreach ($barangdua as $data )
             
        
         <tr>
            <td>{{$no++}}</td>
            <td>{{$data->id}}</td>
            <td>{{$data->nama_barang}}</td>
            <td>{{$data->harga}}</td>
            <td>{{$data->stok}}</td>

         </tr>
         @endforeach
    </table>
    </center>
</body>
</html>