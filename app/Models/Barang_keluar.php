<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang_keluar extends Model
{
    protected $table        = 'barangkeluar';
    protected $fillable     = ['tanggalkeluar', 'penerima'];
    public $timestamp       = 'false';
}
