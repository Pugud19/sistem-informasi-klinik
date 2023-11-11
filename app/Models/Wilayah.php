<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WWilayah extends Model
{
    use HasFactory;
    protected $table = 'wilayahs';
    protected $guarded = ['id'];

    protected $fillabe = [
        'nama_wilayah'
    ];

    public function masaAktif(){
        return $this->hasMany(MasaAktif::class);
    }
    public function pengguna(){
        return $this->hasMany(Pengguna::class);
    }
}
