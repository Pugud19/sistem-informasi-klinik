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
        'internet_id',
        'nama',
        'email',
        'nomor_hp',
    ];

    // public function internet(){
    //     return $this->belongsTo(Internet::class);
    // }
    public function masaAktif(){
        return $this->hasOne(MasaAktif::class);
    }
}
