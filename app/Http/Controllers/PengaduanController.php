<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Pengguna;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function store(Request $request)
    {
        // dd($request);
        //validate form
        $this->validate($request, [
            'nama'     => 'required|min:3',
            'alamat'   => 'required|min:10',
            'isi_aduan'   => 'required|min:10',
            'kategori' => 'required',
            'gambar'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'kontak' => 'required|min:10'
        ]);

        $pengguna = Pengguna::create([
            'nama'     => $request->nama,
            'alamat'   => $request->alamat,
            'kontak' => $request->kontak
        ])->id;

        $input = [
            'isi_aduan' => $request->isi_aduan,
            'gambar'     => $request->gambar,
            'category_id' => $request->kategori,
            'pengguna_id' => $pengguna,
            'keterangan' => ''
        ];
        //upload image
        if ($image = $request->file('gambar')) {
            $destinationPath = 'gambarBukti/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['gambar'] = "$profileImage";
        }

        // $image = $request->file('gambar');
        // $image->storeAs('public/pengaduans', $image->hashName());

        //create post
        // Pengaduan::create([
        //     'isi_aduan' => $request->isi_aduan,
        //     'gambar'     => $image,
        //     'category_id' => $request->kategori,
        //     'pengguna_id' => $pengguna,
        // ]);

        Pengaduan::create($input);
        //redirect to index
        return redirect()->route('user.index');
    }

    public function update(Request $request, Pengaduan $pengaduan)
    {
        $pengaduan->update([
            'keterangan' => $request->keterangan
        ]);
        return redirect()->route('staff.dataPP')->with(['success' => 'Data Berhasil Diubah!']);
    }
}
