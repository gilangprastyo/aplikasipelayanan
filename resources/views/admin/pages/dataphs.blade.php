@extends('admin.layouts.layout')

@section('container')
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        @include('admin.layouts.navbar')
        <!-- End of Topbar -->
        <div class="modal fade" id="edit" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editLabel">Form Update Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body justify-self-center">
                        <form action="{{ route('pengaduans.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 mx-3 row">
                                <div class="col-6">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama">

                                    @error('nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 mx-3 row">
                                <div class="col-6">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="alamat">

                                    @error('alamat')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 mx-3 row">
                                <div class="col-9">
                                    <label for="isiAduan" class="form-label">Isi Aduan</label>
                                    <textarea class="form-control @error('isi_aduan') is-invalid @enderror" id="isi_aduan" rows="5" name="isi_aduan"></textarea>

                                    @error('isi_aduan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 mx-3 row">
                                <div class="col-6">
                                    <label for="kategori" class="form-label">Kategori Pengaduan</label>
                                    <select class="form-select form-control @error('kategori') is-invalid @enderror" id="kategori" name="kategori">
                                        <option value="1">Pelayanan</option>
                                        <option value="2">Hasil Standarisasi</option>
                                    </select>

                                    @error('kategori')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 mx-3 row">
                                <img id="blah" class="img-fluid" src="#" alt=" " />
                                <div class="col-6">
                                    <label for="gambar">Gambar</label>
                                    <input type='file' class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar" onchange="readURL(this);" />

                                    @error('gambar')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 ml-3">
                                <div class="col">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Tabel Pengaduan Hasil Standarisasi</h1>
            <p class="mb-4"></p>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Pengaduan Hasil Standarisasi yang Masuk</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataPHS" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Aduan</th>
                                    <th>Gambar Pendukung</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no=1
                                @endphp
                                @foreach ($pengaduanHasil as $aduan)
                                <tr>
                                    <td> {{ $no++ }} </td>
                                    <td>
                                        <p>
                                            <b>Nama:</b>
                                            {{ $aduan->nama }}
                                        </p>
                                        <p>
                                            <b>Alamat:</b>
                                            {{ $aduan->alamat  }}
                                        </p>
                                        <p>
                                            <b>CP:</b>
                                            {{ $aduan->kontak }}
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            <b>Isi Aduan: </b>
                                            @foreach ($aduan->pengaduans()->get() as $isi)
                                            <!-- <div style="word-wrap: break-word; overflow-x: hidden; max-height: 6rem; min-width:40rem;"> -->
                                            @foreach(explode("\n", $isi->isi_aduan) as $p )
                                            {{ $p}}
                                            @endforeach
                                            <!-- </div> -->
                                            @endforeach
                                        </p>
                                        <p>
                                            <b>Tanggal Masuk: </b>
                                            {{ $aduan->created_at->format('d M Y') }}
                                        </p>
                                    </td>
                                    <td>
                                        @foreach ($aduan->pengaduans()->get() as $gambar)
                                        <img class="img-fluid" src="/gambarBukti/{{ $gambar->gambar }}" width="100px">
                                        @endforeach
                                    </td>
                                    <td>
                                        <b>
                                            @foreach ($aduan->pengaduans()->get() as $ket)
                                        </b>
                                        @auth
                                        @if (auth()->user()->role == "staff")
                                        @if ($ket->keterangan == "diproses")
                                        <b>
                                            {{ $ket->keterangan }}
                                        </b>
                                        @else
                                        <form action="{{ route('pengaduans.update', $ket->id) }}" method="POST" class="d-flex">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="diproses" id="flexCheckChecked" name="keterangan">
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    (Ceklis Jika Sudah Ditindak Lanjuti)
                                                </label>
                                            </div>
                                            <br>
                                            <button type="submit" class="btn btn-success">Simpan</button>
                                        </form>
                                        @endif
                                        @else
                                        @if ($ket->keterangan == "")
                                        <b>
                                            Laporan Diterima
                                        </b>
                                        @else
                                        <b>Laporan Diproses</b>
                                        @endif
                                        @endif
                                        @endauth
                                        @endforeach
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <!-- <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Your Website 2020</span>
            </div>
        </div>
    </footer> -->
    <!-- End of Footer -->

</div>

@endsection