<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $table        = 'stock';
    
    protected $fillable     = ['nomorbarang', 'namabarang', 'Merek', 'satuan', 'harga', 'deskripsi', 'stok'];
    public $timestamps = false;

    public function barang_masuk() {
        return $this->hasOne(Barang_masuk::class, 'idbarang', 'id');
    }
}
