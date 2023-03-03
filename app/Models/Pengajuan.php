<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;

    protected $fillable = [
        'isi_ajuan',
        'pengguna_id',
        'keterangan'
    ];

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class);
    }
}
