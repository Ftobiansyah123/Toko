<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang_masuk extends Model
{
    protected $table        = 'barangmasuk';
    protected $fillable     = ['idbarang', 'tanggalmasuk', 'iduser', 'keterangan'];
    public $timestamps       = false;
    public function stock() {
    return $this->belongsTo(Stock::class, 'idbarang', 'id');
    }
    
    public function user() {
        return $this->belongsTo(User::class, 'iduser', 'id');
    }
}
