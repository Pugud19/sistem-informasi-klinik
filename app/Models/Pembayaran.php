<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $table = 'pembayarans';
    protected $guarded = ['id'];

    protected $fillabe = [
        'nama',
        'alamat',
        'no_hp',
        'tanggal',
        'tipe_pembayaran',
        'nama_paket',
    ];

    public function internet(){
        return $this->belongsTo(MasaAktif::class);
    }
}
