@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('Tambah Data Barang Masuk') }}
                    
                </div>

                <div class="card-body bg-secondary text-white">
                    <form action="{{ route('simpan.barang_masuk') }}" method="post">
                        @csrf
                        <div class="from-group">
                            
                    
                        <div class="col">
                            <label for="iduser" class="form-label">Nama Barang</label>
                            <select name="idbarang" id="idbarang" class="form-control" >
                                <option value="" disabled selected>--Pilih User--</option>
                                @foreach ( $stock as $st)
                                <option value="{{ $st->id }}">{{ $st->namabarang }}</option>
                                @endforeach
                                
                            </select>
                            
                        </div>
                        <div class="mb-3">
                            <label for="date" class="col-1 col-form-label">Date</label>
                            <input type="date" name="tanggalmasuk" class="form-control" placeholder="masukan tanggal" >
                        </div>
                        <div class="col">
                            <label for="iduser" class="form-label">Nama Barang</label>
                            <select name="iduser" id="iduser" class="form-control" >
                                <option value="" disabled selected>--Pilih User--</option>
                                @foreach ( $user as $u)
                                <option value="{{ $u->id }}">{{ $u->name }}</option>
                                @endforeach
                                
                            </select>
                            
                        </div>
                        
                        <div class="mb-3">
                                <label for="alamat" class="form-label">Keterangan</label>
                                <textarea class="form-control" name="keterangan" id="desk" cols="2" rows="3" style="resize: none" ></textarea>
                        </div>
                       
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col float-end">
                                <button type="submit" class="btn btn-md btn-primary">Submit</button>
                                <a href="{{'barang_masuk'}}" class="btn btn-md btn-danger">Batal</a>
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
 