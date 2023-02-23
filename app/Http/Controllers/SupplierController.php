<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index(){
        $supplier =Supplier::all();
        return view('supplier.index', compact('supplier'));
    }

    public function create() {
        return view('supplier.create');
    }

    public function store(Request $request) {
        
        Supplier::create($request->all());
        alert()->success('Sukses','Data sudah tersimpan.');
        return redirect()->route('supplier');
    }

    public function edit($id){
        $supplier =Supplier::find($id);
        Return view('supplier.edit', compact('supplier'));
    }

    public function update(Request $request, $id){
        $supplier =Supplier::find($id);
        $supplier->update($request->all());
        toast('data berhasil diupdate','success');
        return redirect()->route('supplier');
    }

    public function destroy($id){
        $supplier =Supplier::find($id);
        $supplier->delete();
        alert()->success('Sukses','Data sudah Hapus.');
        return redirect()->route('supplier');
    }
}
