@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('Data Barang Masuk') }}
                    <a href={{ route('barang_masuk.create') }} class="btn btn-sm btn-primary float-end">Tambah Data</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-sm-right">
                            <tr>
                                <th>ID</th>
                                <th>Nama Barang</th>
                                <th>Tanggal Masuk</th>
                                <th>Nama Pegawai Penerima</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                               
                            </tr>
                            @php
                            $id = 1;
                            @endphp
                            @foreach ($barangmasuk as $bm)
                            <tr>
                                <td>{{ $id++ }}</td>
                                <td>{{ $bm->stock->namabarang }}</td>
                                <td>{{ $bm->tanggalmasuk }}</td>
                                <td>{{ $bm->user->name }}</td>
                                <td>{{ $bm->keterangan }}</td>
                                
                                <td>
                                <a href={{ route('barang_masuk.edit', $bm->id) }} class="btn btn-sm btn-warning">EDIT</a>
                                <a href={{ route('barang_masuk.hapus', $bm->id) }} class="btn btn-sm btn-danger">HAPUS</a>

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
 