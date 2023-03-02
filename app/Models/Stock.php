<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Stmt\Return_;

class Stock extends Model
{
    protected $table        = 'stock';
    
    protected $fillable     = ['nomorbarang', 'namabarang', 'Merek', 'satuan', 'harga', 'deskripsi', 'stok'];
    public $timestamps = false;

    public function barang_masuk() {
        return $this->hasOne(Barang_masuk::class, 'idbarang', 'id');
    }

    public function barang_keluar() {
        return $this->hasOne(Barang_keluar::class, 'idbarang', 'id');
    }
    public function perubahan_harga(){
        return $this->hasOne(Perubahan_harga::class, 'idbarang', 'id');
    } 
}
