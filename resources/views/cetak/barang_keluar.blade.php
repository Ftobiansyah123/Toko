<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
  <title>Laporan Barang Keluar</title>
    <style>
        /* Add your custom CSS styles here */
    </style>
</head>
<body>
    <div class="page-header"></div>
    <h3 class="page-title">Laporan Data Barang Keluar</h1>
    <br>
    <div class="row">
        <div class="col-md-12">
        <div class="card-body">
        <div class="table-responsive">
                 
                <table class="display table table-striped table-hover" border="0.5" >
                    <thead>
                    <tr>
                                <th>ID</th>
                                <th>Nama Barang</th>
                                <th>Stok</th>
                                <th>Tanggal Masuk</th>
                                <th>Nama Penerima</th>
                             
                               
                            </tr>
                    </thead>
                    <tbody>
                    @php
                        $id = 1;
                    @endphp
                    @foreach ($barangkeluar as $bk)
                            <tr>
                                <td>{{ $id++ }}</td>
                                <td>{{ $bk->stock->namabarang }}</td>
                                <td>{{ $bk->stok }}</td>
                                <td>{{ $bk->tanggalkeluar }}</td>
                                <td>{{ $bk->penerima }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>       
        </div>
</body>
</html>