<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $fillable = [
        'isi_aduan',
        'gambar',
        'category_id',
        'pengguna_id',
        'keterangan'
    ];

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class);
    }
    public function category()
    {
        return $this->belongsTo(Category_Aduan::class);
    }

    // public function getCount($year, $catId){
    //     $data = $this->get()
    // }
}
