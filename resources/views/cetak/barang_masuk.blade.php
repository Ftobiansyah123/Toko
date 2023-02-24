<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
  <title>Laporan Barang Masuk</title>
    <style>
        /* Add your custom CSS styles here */
    </style>
</head>
<body>
    <div class="page-header"></div>
    <h3 class="page-title">Laporan Data Barang Masuk</h1>
    <br>
    <div class="row">
        <div class="col-md-12">
        <div class="card-body">
        <div class="table-responsive">
                 
                <table class="display table table-striped table-hover" border="0.5" >
                    <thead>
                    <tr>
                                <th>ID</th>
                                <th>Nama Supplier</th>
                                <th>Nama Barang</th>
                                <th>Stok</th>
                                <th>Satuan</th>
                                <th>Tanggal Masuk</th>
                                <th>Nama Pegawai Penerima</th>
                                <th>Keterangan</th>
                               
                               
                            </tr>
                    </thead>
                    <tbody>
                    @php
                        $id = 1;
                    @endphp
                    @foreach ($barangmasuk as $bm)
                            <tr>
                                <td>{{ $id++ }}</td>
                                <td>{{ $bm->supplier->namasupplier }}</td>
                                <td>{{ $bm->stock->namabarang }}</td>
                                <td>{{ $bm->stok }}</td>
                                <td>{{ $bm->stock->satuan }}</td>
                                <td>{{ $bm->tanggalmasuk }}</td>
                                <td>{{ $bm->user->name }}</td>
                                <td>{{ $bm->keterangan }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>       
        </div>
</body>
</html>