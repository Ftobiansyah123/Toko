<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index(){
        return view('stock.index');
    }

    public function create() {
        return " saya makul konroler dari metode created";
    }

}
