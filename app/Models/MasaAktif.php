<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasaAktif extends Model
{
    use HasFactory;
    protected $table = 'masa_aktifs';

    // protected $guarded = 'id';
    // protected $status_way = ['aktif', 'tidak_aktif'];

    protected $fillable =[
        'user_id',
        'internet_id',
        'nama',
        'awal_paket',
        'akhir_paket',
        'status',
    ];

    public function user(){
        return $this->hasMany(User::class);
    }
    public function internet(){
        return $this->belongsTo(Internet::class);
    }
}
