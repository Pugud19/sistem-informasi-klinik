<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasaAktif extends Model
{
    use HasFactory;
    protected $table = 'penggunas';

    protected $fillable =[
        'pengguna_id',
        'nama',
        'nama_paket',
        'awal_paket',
        'akhir_paket',
        'status',
    ];
    public function pengguna(){
        return $this->belongsTo(pengguna::class);
    }
    public function internet(){
        return $this->belongsTo(Internet::class);
    }
}
