<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'alamat',
        'kontak'
    ];

    public function pengaduans(){
        return $this->hasMany(Pengaduan::class);
    }

    public function pengajuans(){
        return $this->hasMany(Pengajuan::class);
    }
}
