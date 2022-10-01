<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Type\Integer;

class Pengguna extends Model
{
    use HasFactory;
    protected $table = 'penggunas';
    protected $guarded = 'id';

    protected $fillable = [
        'costumer_id',
        'teknisi',
        'paket',
        'nama',
        'router',
        'tempat',
        'tagihan',
        'status_tagihan',
        'nomor_hp',
        'keterangan',
    ];

    // public function internet(){
    //     return $this->belongsTo(Internet::class);
    // }
    public function masaAktif(){
        return $this->hasOne(MasaAktif::class);
    }
}
