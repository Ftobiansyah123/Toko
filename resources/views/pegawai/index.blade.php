@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('Data Pegawai') }}
                    <a href={{ route('pegawai.create') }} class="btn btn-sm btn-primary float-end">Tambah Data</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-sm-right">
                            <tr>
                                <th>ID</th>
                                <th>Nama Pegawai</th>
                                <th>Bagian</th>
                                <th>Nomor Telepon</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                               
                            </tr>
                            @php
                            $id = 1;
                            @endphp
                            @foreach ($pegawai as $pg)
                            <tr>
                                <td>{{ $id++ }}</td>
                                <td>{{ $pg->user->name }}</td>
                                <td>{{ $pg->bagian }}</td>
                                <td>{{ $pg->nomortelepon }}</td>
                                <td>{{ $pg->alamat }}</td>
                                
                                <td>
                                <a href={{ route('pegawai.edit', $pg->id) }} class="btn btn-sm btn-warning">EDIT</a>
                                <a href={{ route('pegawai.hapus', $pg->id) }} class="btn btn-sm btn-danger">HAPUS</a>

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
 