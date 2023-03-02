<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perubahan_harga extends Model
{
    protected $table ='perubahan_harga';
    protected $fillable = ['idbarang', 'tgl', 'harga_lama', 'harga_baru'];
    public $timestamps = false;

    public function stock() {
return $this->belongsTo(Stock::class, 'idbarang', 'id');

    }
}
