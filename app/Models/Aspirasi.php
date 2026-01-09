<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aspirasi extends Model
{
    protected $table = 'aspirasi';
    protected $primaryKey = 'aspirasi_id';
    public $timestamps = true;
    public $incrementing = true;
    protected $fillable = [
        'siswa_id',
        'kategori_id',
        'lokasi',
        'keterangan',
        'status',
        'umpan_balik'
    ];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    public function siswa(){
        return $this->belongsTo(Siswa::class, 'siswa_id');
    }
    public function kategori(){
        return $this->belongsTo(Aspirasi::class, 'kategori_id');
    }
}
