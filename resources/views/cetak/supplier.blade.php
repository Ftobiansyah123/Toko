<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
  <title>Laporan Supplier</title>
    <style>
        /* Add your custom CSS styles here */
    </style>
</head>
<body>
    <div class="page-header"></div>
    <h3 class="page-title">Laporan Data Supplier</h1>
    <br>
    <div class="row">
        <div class="col-md-12">
        <div class="card-body">
        <div class="table-responsive">
                 
                <table class="display table table-striped table-hover" border="0.5" >
                    <thead>
                    <tr>
                                <th>ID</th>
                                <th>Nama barang</th>
                                <th>Nomor Telepon</th>
                                <th>Alamat</th>
                               
                            </tr>
                    </thead>
                    <tbody>
                    @php
                        $id = 1;
                    @endphp
                    
                    @foreach ($supplier as $sp)
                            <tr>
                                <td>{{ $id++ }}</td>
                                <td>{{ $sp->namasupplier }}</td>
                                <td>{{ $sp->no_telepon }}</td>
                                <td>{{ $sp->Alamat }}</td>
                              
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>       
        </div>
</body>
</html>