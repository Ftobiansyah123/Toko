@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('Data Stock') }}
                    <a href={{ url('/stock-create') }} class="btn btn-sm btn-primary float-end">Tambah Data</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-sm-center">
                            <tr>
                                <th>ID</th>
                                <th>Nomor Barang</th>
                                <th>Nama barang</th>
                                <th>Merek</th>
                                <th>Satuan</th>
                                <th>Harga</th>
                                <th>Deskripsi</th>
                                <th>Stok</th>
                                <th>Aksi</th>
                            </tr>
                            @foreach ($stock as $st)
                            <tr>
                                <td>{{ $st->idbarang }}</td>
                                <td>{{ $st->nomorbarang }}</td>
                                <td>{{ $st->namabarang }}</td>
                                <td>{{ $st->Merek }}</td>
                                <td>{{ $st->satuan }}</td>
                                <td>{{ $st->harga }}</td>
                                <td>{{ $st->deskripsi }}</td>
                                <td>{{ $st->stok }}</td>
                                <td>
                                <a href="#" class="btn btn-sm btn-warning">EDIT</a>
                                <a href="#" class="btn btn-sm btn-danger">HAPUS</a>

                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 