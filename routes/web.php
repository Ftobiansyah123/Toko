<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//stock routing
Route::get('/stock', [App\Http\Controllers\StockController::class, 'index'])->name('stock');
Route::get('/stock-create', [App\Http\Controllers\StockController::class, 'create'])->name('stock.create');
Route::post('/simpan-stock', [App\Http\Controllers\StockController::class, 'store'])->name('simpan.stock');
Route::get('edit-stock/{id}', [App\Http\Controllers\StockController::class, 'edit'])->name('stock.edit');
Route::post('/update-stock/{id}', [App\Http\Controllers\StockController::class, 'update'])->name('stock.update');
Route::get('hapus-stock/{id}', [App\Http\Controllers\StockController::class, 'destroy'])->name('stock.hapus');
Route::get('stock-cetak', [App\Http\Controllers\StockController::class, 'cetak_pdf'])->name('cetak_stock.pdf'); 


//pegawai routing
Route::get('/pegawai', [App\Http\Controllers\PegawaiControl::class, 'index'])->name('pegawai');
Route::get('/pegawai-create', [App\Http\Controllers\PegawaiControl::class, 'create'])->name('pegawai.create');
Route::post('/simpan-pegawai', [App\Http\Controllers\PegawaiControl::class, 'store'])->name('simpan.pegawai');
Route::get('edit-pegawai/{id}', [App\Http\Controllers\PegawaiControl::class, 'edit'])->name('pegawai.edit');
Route::post('/update-pegawai/{id}', [App\Http\Controllers\PegawaiControl::class, 'update'])->name('pegawai.update');
Route::get('hapus-pegawai/{id}', [App\Http\Controllers\PegawaiControl::class, 'destroy'])->name('pegawai.hapus');
Route::get('pegawai-cetak', [App\Http\Controllers\PegawaiControl::class, 'cetak_pdf'])->name('cetak_pegawai.pdf');    


//barang masuk routing
Route::get('/barang_masuk', [App\Http\Controllers\Barang_masuk_controller::class, 'index'])->name('barang_masuk');
Route::get('/Barang_masuk-create', [App\Http\Controllers\Barang_masuk_controller::class, 'create'])->name('barang_masuk.create');
Route::post('/simpan-barang_masuk', [App\Http\Controllers\Barang_masuk_controller::class, 'store'])->name('simpan.barang_masuk');
Route::get('edit-barang_masuk/{id}', [App\Http\Controllers\Barang_masuk_controller::class, 'edit'])->name('barang_masuk.edit');
Route::post('/update-barang_masuk/{id}', [App\Http\Controllers\Barang_masuk_controller::class, 'update'])->name('barang_masuk.update');
Route::get('hapus-barang_masuk/{id}', [App\Http\Controllers\Barang_masuk_controller::class, 'destroy'])->name('barang_masuk.hapus');
Route::get('barang_masuk-cetak', [App\Http\Controllers\Barang_masuk_controller::class, 'cetak_pdf'])->name('cetak_barang_masuk.pdf'); 

//supplier routing
Route::get('/supplier', [App\Http\Controllers\SupplierController::class, 'index'])->name('supplier');
Route::get('/supplier-create', [App\Http\Controllers\SupplierController::class, 'create'])->name('supplier.create');
Route::post('/simpan-supplier', [App\Http\Controllers\SupplierController::class, 'store'])->name('simpan.supplier');
Route::get('edit-supplier/{id}', [App\Http\Controllers\SupplierController::class, 'edit'])->name('supplier.edit');
Route::post('/update-supplier/{id}', [App\Http\Controllers\SupplierController::class, 'update'])->name('supplier.update');
Route::get('hapus-supplier/{id}', [App\Http\Controllers\SupplierController::class, 'destroy'])->name('supplier.hapus');
Route::get('supplier-cetak', [App\Http\Controllers\SupplierController::class, 'cetak_pdf'])->name('cetak_supplier.pdf'); 

//barang masuk routing
Route::get('/barang_keluar', [App\Http\Controllers\Barang_keluar_controller::class, 'index'])->name('barang_keluar');
Route::get('/Barang_keluar-create', [App\Http\Controllers\Barang_keluar_controller::class, 'create'])->name('barang_keluar.create');
Route::post('/simpan-barang_keluar', [App\Http\Controllers\Barang_keluar_controller::class, 'store'])->name('simpan.barang_keluar');
Route::get('edit-barang_keluar/{id}', [App\Http\Controllers\Barang_keluar_controller::class, 'edit'])->name('barang_keluar.edit');
Route::post('/update-barang_keluar/{id}', [App\Http\Controllers\Barang_keluar_controller::class, 'update'])->name('barang_keluar.update');
Route::get('hapus-barang_keluar/{id}', [App\Http\Controllers\Barang_keluar_controller::class,'destroy'])->name('barang_keluar.hapus');
Route::get('barang_keluar-cetak', [App\Http\Controllers\Barang_keluar_controller::class, 'cetak_pdf'])->name('cetak_barang_keluar.pdf'); 
    