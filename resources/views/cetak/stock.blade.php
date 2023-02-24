<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
  <title>Laporan Stok</title>
    <style>
        /* Add your custom CSS styles here */
    </style>
</head>
<body>
    <div class="page-header"></div>
    <h3 class="page-title">Laporan Stock</h1>
    <br>
    <div class="row">
        <div class="col-md-12">
        <div class="card-body">
        <div class="table-responsive">
                 
                <table class="display table table-striped table-hover" border="0.5" >
                    <thead>
                        <tr>
                        <th>ID</th>
                                <th>Nomor Barang</th>
                                <th>Nama barang</th>
                                <th>Merek</th>
                                <th>Satuan</th>
                                <th>Harga</th>
                                <th>Deskripsi</th>
                                <th>Stok</th>
                               
                        </tr>
                    </thead>
                    <tbody>
                    @php
                        $id = 1;
                    @endphp
                       
                            <tr>
                            @foreach ($stock as $st)
                            <tr>
                                <td>{{ $id++ }}</td>
                                <td>{{ $st->nomorbarang }}</td>
                                <td>{{ $st->namabarang }}</td>
                                <td>{{ $st->Merek }}</td>
                                <td>{{ $st->satuan }}</td>
                                <td>{{ $st->harga }}</td>
                                <td>{{ $st->deskripsi }}</td>
                                <td>{{ $st->stok }}</td>
                                
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>       
        </div>
</body>
</html>