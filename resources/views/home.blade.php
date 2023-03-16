@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                <center><h1>Selamat Datang</h1></center>
                <br>
                <br>
                <div>
                    <h3>Aplikasi Gudang - Toko UD. Fahreza</h3>
                    <p>Aplikasi sistem gudang guna memudahkan pengolahan barang</p>
                </div>
                <br>
                <br>
                <br>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
