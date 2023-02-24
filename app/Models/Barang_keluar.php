<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang_keluar extends Model
{
    protected $table        = 'barangkeluar';
    protected $fillable     = ['idbarang', 'stok', 'tanggalkeluar', 'penerima'];
    public $timestamps       = false;


    public function stock() {
        return $this->belongsTo(Stock::class, 'idbarang', 'id');
        }
}
