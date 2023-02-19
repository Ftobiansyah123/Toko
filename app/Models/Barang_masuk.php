<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang_masuk extends Model
{
    protected $table        = 'barangmasuk';
    protected $fillable     = ['tanggalmasuk', 'keterangan'];
    public $timestamp       = 'false';
}
