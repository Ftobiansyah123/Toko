<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table        = 'pegawai';
    protected $fillable     = ['iduser', 'bagian', 'nomortelepon', 'alamat'];
    public $timestamps       = false;


    public function user() {
        return $this->belongsTo(User::class, 'iduser', 'id');
    }
    
}
