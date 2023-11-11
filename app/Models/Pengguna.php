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
        'user_id',
        'nama',
        'wilayah_id',
        'nomor_hp',
    ];

    // public function internet(){
    //     return $this->belongsTo(Internet::class);
    // }
    public function userData(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function wilayahData(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
