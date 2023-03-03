<?php

namespace App\Http\Controllers\User;

use App\Models\Category_Aduan;
use App\Models\Pengaduan;
use App\Models\Pengajuan;
use App\Models\Pengguna;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // $pengaduans = Pengaduan::all();
        $penggunas1 = Pengguna::whereRelation('pengaduans', 'category_id', '1')->get();
        $countPP = Pengguna::whereRelation('pengaduans', 'category_id', '1')->get()->count('count');
        $penggunas2 = Pengguna::whereRelation('pengaduans', 'category_id', '2')->get();
        $countPHS = Pengguna::whereRelation('pengaduans', 'category_id', '2')->get()->count('count');
        $penggunas3 = Pengajuan::with('pengguna')->get();
        $countPS = Pengajuan::with('pengguna')->get()->count('count');
        return view('user.index', compact('penggunas1', 'penggunas2', 'penggunas3', 'countPP', 'countPHS', 'countPS'));
    }
}
