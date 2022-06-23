<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internet extends Model
{
    use HasFactory;
    protected $table = 'internets';
    protected $guarded = ['id'];

    protected $fillabe = [
        'paket',
        'kecepatan',
        'lama_penggunaan',
        'harga',
    ];
}
