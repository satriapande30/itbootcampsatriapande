<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    use HasFactory;
    protected $table = 'tb_lokasi';
    protected $primaryKey = 'id';
    protected $fillable = [
        'kode_lokasi',
        'lokasi',
        'tipe',
        'pic',
        'alamat',
        'telp',
        'potongan',
    ];
}
