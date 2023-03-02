<?php

namespace App\Http\Controllers;

use App\Models\Barang_keluar;
use App\Models\Stock;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Barang_keluar_controller extends Controller
{
    public function index(){
        $barangkeluar = Barang_keluar::with(['stock'])->get();
        return view('barang_keluar.index', compact('barangkeluar'));
    }

    public function create() {
        $stock = Stock::all();
       
        return view('Barang_keluar.create', compact('stock'));
    }

    public function store(Request $request) {
        $request->validate([
            
            'idbarang' => 'required',
            'stok' => 'required',
            'tanggalkeluar' => 'required',
            'penerima' => 'required',
            
            
           


        ]);

        $stockKeluar = $request->input('stok');
        $namaBarang = $request->input('idbarang');
        $ambiStok = Stock::where('id', $namaBarang)->first();

        $jumlahStok = $ambiStok->stok - $stockKeluar;
       
       
        Barang_keluar::create($request->all());
        $ambiStok->update(['stok' => $jumlahStok]);

        
        
        alert()->success('Sukses','Data sudah tersimpan.');
        return redirect()->route('barang_keluar');
    
    }

    public function edit($id){
        $stock = Stock::all();
        
        $barangkeluar =Barang_keluar::find($id);
        Return view('barang_keluar.edit', compact('barangmasuk', 'stock', 'user', 'supplier'));
    }

    public function update(Request $request, $id){
        $barangkeluar =Barang_keluar::find($id);
        $barangkeluar->update($request->all());
        alert()->success('Sukses','Data sudah update.');
        return redirect()->route('barang_keluar');
    }

    public function destroy($id){
        $barangkeluar =Barang_keluar::find($id);
        $barangkeluar->delete();
        toast('data berhasil dihapus','success');
        return redirect()->route('barang_keluar');
    }
    public function cetak_pdf()
    {
        $today = Carbon::now()->isoFormat('DD MMMM Y');
        $barangkeluar = Barang_keluar::all(); // replace with your own data

        $pdf = Pdf::loadView('cetak.barang_keluar',compact('barangkeluar', 'today') );
     
        return $pdf->stream('cetak_barang_keluar.pdf');

    
        
}
}
