<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tindakan extends Model
{
    use HasFactory;
    protected $table = 'tindakans';
    protected $guarded = ['id'];

    protected $fillabe = [
        'user_id',
        'deskripsi_tindakan',
        'obat_id',
        'tanggal',
    ];

    public function penggunaData(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function obatData(){
        return $this->belongsTo(Obat::class, 'obat_id');
    }
}
