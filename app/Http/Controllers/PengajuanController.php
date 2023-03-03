<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use App\Models\Pengajuan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PengajuanController extends Controller
{
    public function store(Request $request)
    {

        // dd($request);
        //validate form
        $this->validate($request, [
            'nama'     => 'required|min:3',
            'alamat'   => 'required|min:10',
            'isi_ajuan'   => 'required|min:10',
            'kontak' => 'required|min:10'
        ]);
        // 'kategori' => 'required',
        // 'gambar'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        $pengguna = Pengguna::create([
            'nama'     => $request->nama,
            'alamat'   => $request->alamat,
            'kontak' => $request->kontak
        ])->id;

        //upload image
        // $image = $request->file('gambar');
        // $image->storeAs('public/pengaduans', $image->hashName());

        //create post
        // 'gambar'     => $image->hashName(),
        // 'category_id' => $request->kategori,
        Pengajuan::create([
            'isi_ajuan' => $request->isi_ajuan,
            'pengguna_id' => $pengguna,
            'keterangan' => ''
        ]);

        //redirect to index
        return redirect()->route('user.index');
    }

    public function update(Request $request, Pengajuan $pengajuan)
    {
        $pengajuan->update([
            'keterangan' => $request->keterangan
        ]);
        return redirect()->route('staff.dataPS')->with(['success' => 'Data Berhasil Diubah!']);
    }
}
