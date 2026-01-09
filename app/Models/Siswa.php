<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $primaryKey = 'siswa_id';
    public $timestamps = true;
    public $incrementing = true;
    protected $fillable = [
        'user_id',
        'nis',
        'kelas'
    ];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function aspirasi(){
        return $this->hasMany(Aspirasi::class, 'siswa_id');
    }


}
