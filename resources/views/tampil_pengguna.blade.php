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
        <h2>Data Tabel Pengguna</h2>
    <table border="1">
        <tr>
            <th>No</th>
            <th>id</th>
            <th>nama</th>
         </tr>
         @php $no=1; @endphp
         @foreach ($pengguna as $data )
             
        
         <tr>
            <td>{{$no++}}</td>
            <td>{{$data->id}}</td>
            <td>{{$data->nama}}</td>
         </tr>
         @endforeach
    </table>
    </center>  
</body>
</html>