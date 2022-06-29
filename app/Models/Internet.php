<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internet extends Model
{
    use HasFactory;
    protected $table = 'internets';
    protected $guarded = ['id'];

    protected $fillabe = [
        'paket',
        'kecepatan',
        'lama_penggunaan',
        'harga',
    ];

    public function masaAktif(){
        return $this->hasMany(MasaAktif::class);
    }
    public function pengguna(){
        return $this->hasMany(Pengguna::class);
    }
}
