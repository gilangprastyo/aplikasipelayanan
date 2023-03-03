@extends('admin.layouts.layout')

@section('container')
<!-- Page Wrapper -->

<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        @include('admin.layouts.navbar')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            {{-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard Data Masuk</h1>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i> Buat
                    Laporan</a>
            </div> --}}

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4 h1">
                <h1 class="h3 mb-0 text-gray-800">Dashboard Data Masuk</h1>
                <a onclick="window.print()" href="#"
                    class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i> Buat Laporan</a>
            </div>


            <div class="row">

                <!-- Area Chart -->
                <div class="col">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Visualisasi Data Pengaduan Pelayanan</h6>
                            <a onclick="printPDF('#chartPP')" href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> PDF</a>
                        </div>
                        <div class="card-body">
                            <div class="chart-area">
                                <canvas id="chartPP"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="PHS">

                <!-- Area Chart -->
                <div class="col">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Visualisasi Data Pengaduan Hasil Standarisasi
                            </h6>
                            <a onclick="printPDF('#chartPHS')" href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> PDF</a>
                        </div>
                        <div class="card-body">
                            <div class="chart-area">
                                <canvas id="chartPHS"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="content"></div>
            <div class="row" id="pengajuanStandar">

                <!-- Area Chart -->
                <div class="col">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Visualisasi Data Pengajuan Standarisasi</h6>
                            <a onclick="printPDF('#chartPS')" href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> PDF</a>
                        </div>
                        <div class="card-body">
                            <div class="chart-area">
                                <canvas id="chartPS"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
<script>


</script>

@endsection