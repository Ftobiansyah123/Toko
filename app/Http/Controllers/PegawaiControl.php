<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\User;
use Illuminate\Http\Request;

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
}
