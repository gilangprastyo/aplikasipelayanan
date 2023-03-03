<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_Aduan extends Model
{
    use HasFactory;

    protected $fillable =[
        'kategori'
    ];

    public function pengaduans(){
        return $this->hasMany(Pengaduan::class);
    }
}
