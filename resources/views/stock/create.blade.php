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

                <div class="card-body bg-secondary text-white">
                    <form>
                        <div class="mb-3">
                            <label for="nomorbarang" class="form-label">Nomor Barang</label>
                            <input type="number" class="form-control" id="nomorbarang" >
                            
                        </div>
                        <div class="mb-3">
                                <label for="namabarang" class="form-label">Nama Barang</label>
                                <input type="text" class="form-control" id="namabarang">
                        </div>
                        <div class="mb-3">
                            <label for="Merek" class="form-label">Merek</label>
                            <input type="text" class="form-control" id="Merek" >
                           
                        </div>
                        <div class="mb-3">
                                <label for="satuan" class="form-label">Satuan</label>
                                <input type="text" class="form-control" id="satuan">
                        </div><div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="number" class="form-control" id="harga" >
                            
                        </div>
                        <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" id="desk" cols="30" rows="10"></textarea>
                        </div>
                        <div class="mb-3">
                                <label for="stok" class="form-label">Stok</label>
                                <input type="number" class="form-control" id="stok">
                        </div>

                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 