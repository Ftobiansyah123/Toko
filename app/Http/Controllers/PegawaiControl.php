<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\User;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use FontLib\Font;
use Illuminate\Support\Facades\App;

class PegawaiControl extends Controller
{
    public function index(){
        $pegawai = Pegawai::with(['user'])->get();
        return view('pegawai.index', compact('pegawai'));
    }
 
    public function create() {
        $user = User::all();
        return view('pegawai.create', compact('user'));
    }

    public function store(Request $request) {

         $request->validate([
            'iduser' => 'required',
            'bagian' => 'required',
            'nomortelepon' => 'required',
            'alamat' => 'required',
           


        ]);
        Pegawai::create($request->all());
        alert()->success('Sukses','Data sudah tersimpan.');
        return redirect()->route('pegawai');
    }

    public function edit($id){
        $user = User::all();
        $pegawai =Pegawai::find($id);
        Return view('pegawai.edit', compact('pegawai', 'user'));
    }

    public function update(Request $request, $id){
        $pegawai =Pegawai::find($id);
        $pegawai->update($request->all());
        alert()->success('Sukses','Data sudah update.');
        return redirect()->route('pegawai');
    }

    public function destroy($id){
        $pegawai =Pegawai::find($id);
        $pegawai->delete();
        toast('data berhasil dihapus','success');
        return redirect()->route('pegawai');
    }

    public function cetak_pdf()
    {
        $pegawai = pegawai::all(); // replace with your own data

        $pdf = Pdf::loadView('cetak.pegawai', ['pegawai' =>$pegawai])->setPaper('A4', 'portrait');
     
        return $pdf->stream('cetak_pegawai.pdf');

    
        
}
}
