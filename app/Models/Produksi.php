<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lokasi;

class Produksi extends Model
{
    use HasFactory;
    protected $table = 'tb_produksi';
    protected $primaryKey = 'id';
    protected $fillable = [
        'urutan',
        'id_lokasi',
        'kode_produksi',
        'tgl_mulai_produksi',
        'tgl_selesai_produksi',
        'catatan',
        'status',
        'status_finish_date',
        'publish',
        'publish_date',
        'finish',
    ];
    public function lokasi()
    {
        return $this->belongsTo(Lokasi::class, 'id_lokasi');
    }
}



