<section id="tabel" class="about section-bg">

    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Tampilan Data Tersimpan</h2>
            <h3>Tabel Pengaduan dan <span>Pengajuan</span></h3>
            <p>Balai Standarisasi dan Pelayanan Jasa Industri Banjarbaru</p>
        </div>
        <ul class="nav nav-tabs mt-0" id="myTab">
            <li class="nav-item">
                <a href="#tpp" class="nav-link active" id="ctpp">Data Pengaduan Pelayanan</a>
            </li>
            <li class="nav-item">
                <a href="#tphs" class="nav-link" id="ctphs">Data Pengaduan Hasil Standarisasi</a>
            </li>
            <li class="nav-item">
                <a href="#tps" class="nav-link" id="ctps">Data Pengajuan Standarisasi</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active mt-5" id="tpp">
                <table id="tabelPP" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Pengaduan</th>
                            <th>Tanggal</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $nomor = 1
                        @endphp
                        @foreach ($penggunas1 as $pengaduan)
                        <tr>
                            <td> {{ $nomor++ }}</td>
                            <td> {{ $pengaduan->nama }} </td>
                            <td>
                                @foreach ($pengaduan->pengaduans()->get() as $aduan)
                                <div style="word-wrap: break-word; overflow-x: hidden; max-height: 6rem; min-width:25rem;">
                                    @foreach(explode("\n", $aduan->isi_aduan) as $p )
                                    {{ $p}}
                                    <br>
                                    @endforeach
                                    {{-- {{$aduan->isi_aduan }} --}}
                                </div>
                                @endforeach
                            </td>
                            <td>
                                @foreach ($pengaduan->pengaduans()->get() as $tanggal)
                                {{ $tanggal->created_at->format('d M Y') }}
                                @endforeach
                            </td>
                            <td>

                                @foreach ($pengaduan->pengaduans()->get() as $ket)

                                @if($ket->keterangan == "diproses")
                                <b>Laporan Diproses, silahkan tunggu panggilan.</b>
                                @else
                                <b>Laporan diterima.</b>
                                @endif
                                @endforeach
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade mt-5" id="tphs">
                <table id="tabelPHS" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Pengaduan</th>
                            <th>Tanggal</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no = 1
                        @endphp
                        @foreach ($penggunas2 as $pengaduan)
                        <tr>
                            <td> {{ $no++ }} </td>
                            <td> {{ $pengaduan->nama }} </td>
                            <td>
                                @foreach ($pengaduan->pengaduans()->get() as $aduan)
                                <div style="word-wrap: break-word; overflow-x: hidden; max-height: 6rem; min-width:25rem;">
                                    @foreach(explode("\n", $aduan->isi_aduan) as $p )
                                    {{ $p}}
                                    <br>
                                    @endforeach
                                </div>
                                @endforeach
                            </td>
                            <td>
                                @foreach ($pengaduan->pengaduans()->get() as $tanggal)
                                {{ $tanggal->created_at->format('d M Y') }}
                                @endforeach
                            </td>
                            <td>
                                @foreach ($pengaduan->pengaduans()->get() as $ket)

                                @if($ket->keterangan == "diproses")
                                <b>Laporan Diproses, silahkan tunggu panggilan.</b>
                                @else
                                <b>Laporan diterima.</b>
                                @endif
                                @endforeach
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade mt-5" id="tps">
                <table id="tabelPS" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Pengajuan</th>
                            <th>Tanggal</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no =1
                        @endphp

                        @foreach ($penggunas3 as $pengajuan )
                        <tr>
                            <td> {{ $no++ }} </td>
                            <td> {{ $pengajuan->pengguna->nama }} </td>
                            <td>
                                <div style="word-wrap: break-word; overflow-x: hidden; max-height: 6rem; min-width:70vh;">
                                    @foreach(explode("\n", $pengajuan->isi_ajuan) as $p )
                                    {{ $p}}
                                    <br>
                                    @endforeach
                                </div>
                            </td>
                            <td> {{ $pengajuan->created_at->format('d M Y') }} </td>
                            <td>

                                @if($pengajuan->keterangan == "diproses")
                                <b>Laporan Diproses, silahkan tunggu panggilan.</b>
                                @else
                                <b>Laporan diterima.</b>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</section>