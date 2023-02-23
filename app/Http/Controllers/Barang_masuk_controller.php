<?php

namespace App\Http\Controllers;

use App\Models\Barang_masuk;
use App\Models\Pegawai;
use App\Models\Stock;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Auth\AuthManager;

class Barang_masuk_controller extends Controller
{
    public function index(){
        $barangmasuk = Barang_masuk::with(['stock', 'user', 'supplier'])->get();
        return view('barang_masuk.index', compact('barangmasuk'));
    }

    public function create() {
        $stock = Stock::all();
        $user = User::all();
        $supplier = Supplier::all();
        return view('Barang_masuk.create', compact('stock', 'user', 'supplier'));
    }

    public function store(Request $request) {
        $stockMasuk = $request->input('stok');
        $namaBarang = $request->input('idbarang');
        $ambiStok = Stock::where('id', $namaBarang)->first();

        $jumlahStok = $ambiStok->stok + $stockMasuk;
       
       
        Barang_masuk::create($request->all());
        $ambiStok->update(['stok' => $jumlahStok]);

        
        
        alert()->success('Sukses','Data sudah tersimpan.');
        return redirect()->route('barang_masuk');
    
    }

    public function edit($id){
        $stock = Stock::all();
        $user = User::all();
        $supplier = Supplier::all();
        $barangmasuk =Barang_masuk::find($id);
        Return view('barang_masuk.edit', compact('barangmasuk', 'stock', 'user', 'supplier'));
    }

    public function update(Request $request, $id){
        $barangmasuk =Barang_masuk::find($id);
        $barangmasuk->update($request->all());
        alert()->success('Sukses','Data sudah update.');
        return redirect()->route('barang_masuk');
    }

    public function destroy($id){
        $barangmasuk =Barang_masuk::find($id);
        $barangmasuk->delete();
        toast('data berhasil dihapus','success');
        return redirect()->route('barang_masuk');
    }
}
