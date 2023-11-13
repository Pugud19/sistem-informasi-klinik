<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tagihan extends Model
{
    use HasFactory;

    protected $table = 'tagihans';
    protected $guarded = 'id';

    protected $fillable = [
        'user_id',
        'tindakan_id',
        'total_biaya'
    ];


    public function penggunaData(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function tindakanData(){
        return $this->belongsTo(Tindakan::class, 'tindakan_id');
    }
}
