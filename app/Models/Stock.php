<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $table        = 'stock';
    protected $fillable     = ['nomorbarang', 'namabarang', 'satuan', 'harga', 'deskripsi', 'stok'];
    public $timestamp       = 'false';
}
