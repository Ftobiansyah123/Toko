@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('Tambah Stock') }}
                    <a href="#" class="btn btn-sm btn-primary float-end">Simpan</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-sm-center">
                            <tr>
                               
                                <th>Nomor Barang</th>
                                <th>Nama barang</th>
                                <th>Merek</th>
                                <th>Satuan</th>
                                <th>Harga</th>
                                <th>Deskripsi</th>
                                <th>Stok</th>
                               
                            </tr>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 