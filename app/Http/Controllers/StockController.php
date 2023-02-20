<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
Use Alert;


class StockController extends Controller
{
    public function index(){
        $stock =Stock::all();
        return view('stock.index', compact('stock'));
    }

    public function create() {
        return view('stock.create');
    }

    public function store(Request $request) {
        Stock::create($request->all());
        alert()->success('Sukses','Data sudah tersimpan.');
        return redirect()->route('stock');
    }

    public function edit($id){
        $stock =Stock::find($id);
        Return view('stock.edit', compact('stock'));
    }

    public function update(Request $request, $id){
        $stock =Stock::find($id);
        $stock->update($request->all());
        alert()->success('Sukses','Data sudah update.');
        return redirect()->route('stock');
    }

    public function destroy($id){
        $stock =Stock::find($id);
        $stock->delete();
        toast('data berhasil dihapus','success');
        return redirect()->route('stock');
    }
}
