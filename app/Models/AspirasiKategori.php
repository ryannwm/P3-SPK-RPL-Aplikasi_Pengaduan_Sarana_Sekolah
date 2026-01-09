<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AspirasiKategori extends Model
{
    protected $table = 'aspirasi_kategori';
    protected $primaryKey = 'kategori_id';
    public $timestamps = true;
    public $incrementing = true;
    protected $fillable = [
        'namaKategori'
    ];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    public function aspirasi(){
        return $this->hasMany(Aspirasi::class, 'kategori_id');
    }
}
