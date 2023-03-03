@extends('admin.layouts.layout')

@section('container')
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        @include('admin.layouts.navbar')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Tabel Pengaduan Pelayanan</h1>
            <p class="mb-4">Silahkan di isi</p>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Pengaduan Pelayanan yang Masuk</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataPP" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Pengadu</th>
                                    <th>Aduan</th>
                                    <th>Gambar Pendukung</th>
                                    <th>Keterangan</th>
                                    <!-- <th>Action</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1
                                @endphp
                                @foreach ($pengaduanPelayanan as $aduan)
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