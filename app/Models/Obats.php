<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;
    protected $table = 'obats';

    // protected $guarded = 'id';
    // protected $status_way = ['aktif', 'tidak_aktif'];

    protected $fillable =[
        'nama_obat',
        'expired'
    ];

    public function user(){
        return $this->hasMany(User::class);
    }
    public function internet(){
        return $this->belongsTo(Internet::class);
    }
}
