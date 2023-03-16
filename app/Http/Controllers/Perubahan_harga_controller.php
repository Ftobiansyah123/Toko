<?php

namespace App\Http\Controllers;

use App\Models\Perubahan_harga;
use App\Models\Stock;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Perubahan_harga_controller extends Controller
{
    public function index(){
        $perubahan_harga = Perubahan_harga::with(['stock'])->get();
        return view('perubahan_harga.index', compact('perubahan_harga'));
    }

    public function create() {
        $stock = Stock::all();                
       
        return view('perubahan_harga.create', compact('stock'));
    }
   

    public function store(Request $request) {
        $request->validate([
            
            'idbarang' => 'required',
            'tgl' => 'required',
            'harga_lama' => 'required',
            'harga_baru' => 'required',
        ]);

        $hargabaru = $request->input('harga_baru');
        $namaBarang = $request->input('idbarang');
        $ambilharga = Stock::where('id', $namaBarang)->first();

        // $harganew = $ambilharga->harga == $hargabaru;
        
        // Stock::where('id', $namaBarang)->update(['harga' => $hargabaru]);
        
        Perubahan_harga::create($request->all());
        $ambilharga->update(['harga' => $hargabaru]);
       

        
        
        alert()->success('Sukses','Data sudah tersimpan.');
        return redirect()->route('perubahan_harga');
    
    }

    public function edit($id){
        $stock = Stock::all();
      
        $perubahan_harga =Perubahan_harga::find($id);
        Return view('perubahan_harga.edit', compact('perubahan_harga', 'stock'));
    }

    public function update(Request $request, $id){
        
        $perubahan_harga =Perubahan_harga::find($id);
        $perubahan_harga->update($request->all());
        alert()->success('Sukses','Data sudah update.');
        return redirect()->route('perubahan_harga');
    }

    public function destroy($id){
        $perubahan_harga =Perubahan_harga::find($id);
        $perubahan_harga->delete();
        toast('data berhasil dihapus','success');
        return redirect()->route('perubahan_harga');
    }
    public function cetak_pdf()
{
    $today = Carbon::now()->isoFormat('DD MMMM Y');
    $perubahan_harga = Perubahan_harga::with(['stock'])->get(); // replace with your own data

        $pdf = Pdf::loadView('cetak.perubahan_harga', compact('perubahan_harga', 'today') );
     
        return $pdf->stream('cetak_perubahan_harga.pdf');

    
        
}


    
        

}
