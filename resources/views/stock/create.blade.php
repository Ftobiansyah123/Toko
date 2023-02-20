@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('Tambah Stock') }}
                    
                </div>

                <div class="card-body bg-secondary text-white">
                    <form action="{{ route('simpan.stock') }}" method="post">
                        @csrf
                        <div class="from-group">
                            
                    
                        <div class="mb-3">
                            <label for="nomorbarang" class="form-label">Nomor Barang</label>
                            <input type="number" name="nomorbarang" class="form-control" placeholder="nomorbarang" >
                            
                        </div>
                        <div class="mb-3">
                                <label for="namabarang" class="form-label">Nama Barang</label>
                                <input type="text" name="namabarang" class="form-control" placeholder="masukan nama barang">
                        </div>
                        <div class="mb-3">
                            <label for="Merek" class="form-label">Merek</label>
                            <input type="text" name="Merek" class="form-control" placeholder="Merek brand" >
                           
                        </div>
                        <div class="mb-3">
                                <label for="satuan" class="form-label">Satuan</label>
                                <input type="text" name="satuan" class="form-control" placeholder="masukan satuan">
                        </div><div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="number" name="harga" class="form-control" placeholder="masukan harga" >
                            
                        </div>
                        <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" id="desk" cols="30" rows="10"></textarea>
                        </div>
                        <div class="mb-3">
                                <label for="stok" class="form-label">Stok</label>
                                <input type="number" name="stok" class="form-control" placeholder="masukan stok">
                        </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col float-end">
                                <button type="submit" class="btn btn-md btn-primary">Submit</button>
                                <a href="{{'stock'}}" class="btn btn-md btn-danger">Batal</a>
                                </div>
                              
                            </div>
                            
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 