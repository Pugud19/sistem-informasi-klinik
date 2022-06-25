<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;
    protected $table = 'penggunas';

    protected $fillable = [
        'user_id',
        'nama',
        'email',
        'nomor_hp',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
