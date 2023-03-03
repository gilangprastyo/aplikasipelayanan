<section id="form" class="form">
  <div class="container" data-aos="fade-down">
    <div class="section-title p-0">
      <h2>Form</h2>
      <h3>Form Pengaduan<span> dan Pengajuan </span></h3>
      <p>SILAHKAN ISI</p>
    </div>
    <ul class="nav nav-tabs mt-0" id="myTab">
      <li class="nav-item">
        <a href="#pp" class="nav-link active">Pengaduan Pelayanan atau Hasil Standarisasi</a>
      </li>
      <li class="nav-item">
        <a href="#ps" class="nav-link">Pengajuan Standarisasi</a>
      </li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane fade show active" id="pp">
        <form action="{{ route('pengaduans.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <h3 class="mt-5">Form Pengaduan Pelayanan atau Hasil Standarisasi</h3>
          <div class="mb-3 row">
            <label for="nama" class="form-label">Nama</label>
            <div class="col-sm-6">
              <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama">

              @error('nama')
              <div class="alert alert-danger mt-2">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="mb-3 row">
            <label for="kontak" class="form-label">Kontak</label>
            <div class="col-sm-6">
              <input type="text" name="kontak" class="form-control @error('kontak') is-invalid @enderror" id="kontak">

              @error('kontak')
              <div class="alert alert-danger mt-2">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="mb-3 row">
            <label for="alamat" class="form-label">Alamat</label>
            <div class="col-sm-6">
              <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="alamat">

              @error('alamat')
              <div class="alert alert-danger mt-2">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="mb-3 row">
            <label for="isiAduan" class="form-label">Isi Aduan</label>
            <div class="col-sm-8">
              <textarea class="form-control @error('isi_aduan') is-invalid @enderror" id="isi_aduan" rows="6" name="isi_aduan"></textarea>
              @error('isi_aduan')
              <div class="alert alert-danger mt-2">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="mb-3 row">
            <label for="kategori" class="form-label">Kategori Pengaduan</label>
            <div class="col-sm-8">
              <select class="form-select @error('kategori') is-invalid @enderror" id="kategori" name="kategori">
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
          <div class="mb-3 row">
            <label for="gambar">Upload Gambar Pendukung</label>
            <img id="blah" class="img-fluid d-none" src="#" style="object-fit: contain;" alt="&nbsp;" />
            <div class="col-sm-6">
              <input type='file' class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar" onchange="readURL(this);" />
              @error('gambar')
              <div class="alert alert-danger mt-2">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="mb-3 d-flex">
            <div class="col-sm-7 align-self-baseline">
              <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah anda yakin ingin mengirim data?')">Kirim</button>
            </div>
          </div>
        </form>
      </div>
      <div class="tab-pane fade" id="ps">
        <form action="{{ route('pengajuans.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <h3 class="mt-5">Form Pengajuan Standarisasi</h3>
          <div class="mb-3 row">
            <label for="nama" class="form-label">Nama</label>
            <div class="col-sm-6">
              <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama">

              @error('nama')
              <div class="alert alert-danger mt-2">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="mb-3 row">
            <label for="kontak" class="form-label">Kontak</label>
            <div class="col-sm-6">
              <input type="text" name="kontak" class="form-control @error('kontak') is-invalid @enderror" id="kontak">

              @error('kontak')
              <div class="alert alert-danger mt-2">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="mb-3 row">
            <label for="alamat" class="form-label">Alamat</label>
            <div class="col-sm-6">
              <input type="text" name="alamat" class="form-control @error('alamat')
                is-invalid
              @enderror" id="alamat">
              @error('alamat')
              <div class="alert alert-danger mt-2">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="mb-3 row">
            <label for="isiAjuan" class="form-label">Isi Ajuan</label>
            <div class="col-sm-8">
              <textarea class="form-control @error('isi_ajuan')
                is-invalid
              @enderror" name="isi_ajuan" id="isiAjuan" rows="7"></textarea>
              @error('isi_ajuan')
              <div class="alert alert-danger mt-2">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="mb-3 d-flex">
            <div class="col-sm-7 align-self-baseline">
              <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah anda yakin ingin mengirim data?')">Kirim</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>