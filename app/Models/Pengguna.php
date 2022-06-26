<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;
    protected $table = 'penggunas';
    protected $guarded = 'id';

    protected $fillable = [
        'user_id',
        'nama',
        'email',
        'nomor_hp',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function masaAktif(){
        return $this->hasOne(MasaAktif::class);
    }
}
