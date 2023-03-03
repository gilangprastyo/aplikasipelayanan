<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pengaduan;
use App\Models\Pengajuan;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function index()
    {
        $dataPengaduan = $this->getCount(2023, 1);
        // $pengaduan = Pengaduan::where('category_id', '1')->get();

        // $pengaduanPerBulan = $pengaduan->groupBy([function($aduan) {
        //     return Carbon::parse($aduan->created_at)->format('m');
        // }], '');
        // dd($dataPengaduan);

        $dataPP = [];
        $dataPHS = [];
        $dataPS = [];

        for ($i = 1; $i <= 12; $i++) {
            $countPP = DB::table('pengaduans')->where('category_id', '1')
                ->whereMonth('created_at', $i)
                ->whereYear('created_at', date('Y'))
                ->count();
            $countPHS = DB::table('pengaduans')->where('category_id', '2')
                ->whereMonth('created_at', $i)
                ->whereYear('created_at', date('Y'))
                ->count();
            $countPS = DB::table('pengajuans')
                ->whereMonth('created_at', $i)
                ->whereYear('created_at', date('Y'))
                ->count();

            $dataPP[] = $countPP;
            $dataPHS[] = $countPHS;
            $dataPS[] = $countPS;
        }
        return view('admin.index', compact('dataPP', 'dataPHS','dataPS'));
    }

    public function dataPP()
    {
        $dataPP = [];
        $dataPHS = [];
        $dataPS = [];
        $pengaduanPelayanan = Pengguna::whereRelation('pengaduans', 'category_id', '1')->get();
        return view('admin.pages.datapp', compact('pengaduanPelayanan', 'dataPP', 'dataPHS','dataPS'));
    }
    public function dataPHS()
    {
        $dataPP = [];
        $dataPHS = [];
        $dataPS = [];
        $pengaduanHasil = Pengguna::whereRelation('pengaduans', 'category_id', '2')->get();
        return view('admin.pages.dataphs', compact('pengaduanHasil', 'dataPP', 'dataPHS','dataPS'));
    }
    public function dataPS()
    {
        $dataPP = [];
        $dataPHS = [];
        $dataPS = [];
        $pengajuan = Pengajuan::with('pengguna')->get();
        return view('admin.pages.dataps', compact('pengajuan', 'dataPP', 'dataPHS','dataPS'));
    }

    private function getCount($year, $category)
    {
        return DB::table('pengaduans')
            ->selectRaw("MONTH(pengaduans.created_at) AS bulan, COUNT(*) AS jumlah")
            ->join('category__aduans', 'pengaduans.category_id', '=', 'category__aduans.id')
            ->whereRaw("pengaduans.created_at BETWEEN ? AND ? AND category_id = ?", ["$year-01-01", "$year-12-31", $category])
            ->groupBy('bulan')
            ->get();
    }

    public function countBulan()
    {
        $pengaduan = Pengaduan::all();

        $pengaduanPerBulan = $pengaduan->groupBy(function ($aduan) {
            return Carbon::parse($aduan->created_at)->format('m');
        });
    }
}