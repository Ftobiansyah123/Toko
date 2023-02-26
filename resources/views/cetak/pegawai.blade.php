<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
  <title>Laporan Pegawai</title>
  <link rel="stylesheet" href="/resources/css/bootstrap.min.css">
    <style>
        /* Add your custom CSS styles here */
    </style>
</head>
<body>
    <div class="page-header"></div>
    <h3 class="page-title">Laporan Data Pegawai</h1>
    <br>
    <div class="row">
        <div class="col-md-12">
        <div class="card-body">
        <div class="table-responsive">
                 
                <table class="display table table-striped table-hover" >
                    <thead>
                        <tr>
                        <th>ID</th>
                                            <th>Nama Pegawai</th>
                                            <th>Bagian</th>
                                            <th>Nomor Telepon</th>
                                            <th>Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php
                        $id = 1;
                    @endphp
                        @foreach($pegawai as $pg)
                            <tr>
                            <td>{{ $id++ }}</td>
                            <td>{{ $pg->user->name }}</td>
                            <td>{{ $pg->bagian }}</td>
                            <td>{{ $pg->nomortelepon }}</td>
                            <td>{{ $pg->alamat }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>       
        </div>
</body>
</html>