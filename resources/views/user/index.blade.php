<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Portal Pelayanan</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('userAssets/img/favicon.png')}}" rel="icon">
    <link href="{{ asset('userAssets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('userAssets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('userAssets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('userAssets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{ asset('userAssets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('userAssets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{ asset('userAssets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/rowreorder/1.3.1/css/rowReorder.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.dataTables.min.css" rel="stylesheet">


    <!-- Template Main CSS File -->
    <link href="{{ asset('userAssets/css/style.css')}}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.js"
        integrity="sha512-nO7wgHUoWPYGCNriyGzcFwPSF+bPDOR+NvtOYy2wMcWkrnCNPKBcFEkU80XIN14UVja0Gdnff9EmydyLlOL7mQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/rowreorder/1.3.1/js/dataTables.rowReorder.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
    <!-- =======================================================
  * Template Name: BizLand - v3.10.0
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
======================================================== -->

    <style>
        table tbody td {
            vertical-align: top;
        }
    </style>
</head>

<body>
    <!-- ======= Header ======= -->
    @include('user/layouts/navbar')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1>BSPJI <span>Banjarbaru</span></h1>
            <h2>Balai Standardisasi dan Pelayanan Jasa Industri Banjarbaru</h2>
            <div class="d-flex">
                <a href="#form" class="btn-get-started scrollto">Isi Aduan atau Ajuan</a>
                {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i
                        class="bi bi-play-circle"></i><span>Tutor WPU</span></a> --}}
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= Featured Services Section ======= -->
        <!-- End Featured Services Section -->

        @include('user/layouts/featured')
        @include('user/layouts/form')
        @include('user/layouts/tabel')

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">

                <div class="row d-flex justify-content-center">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <span> {{ $countPP }} </span>
                            <p>Total Pengaduan Layanan Masuk</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext"></i>
                            <span> {{ $countPHS }} </span>
                            <p>Total Pengaduan Hasil Standarisasi Masuk</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-headset"></i>
                            <span> {{ $countPS }} </span>
                            <p>Total Pengajuan Standarisasi Masuk</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- ======= Contact Section ======= -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <section id="footer">

        <div class="container mt-5">

            <div class="row d-flex justify-content-evenly">

                <!-- <div class="col-lg-3 col-md-6 footer-links"> -->
                <div class="col-lg-5 ">
                    <h3>Lokasi</h3>
                    <iframe class="mb-4 mb-lg-0"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.63536788178!2d114.82966610000001!3d-3.438569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de681746741ecb1%3A0xdff9438a55959d9!2sBalai%20Standardisasi%20dan%20Pelayanan%20Jasa%20Industri%20(BSPJI)%20Banjarbaru!5e0!3m2!1sid!2sid!4v1672914965008!5m2!1sid!2sid"
                        frameborder="0" style="border:0; width: 100%; height: 250px;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <!-- </div> -->
                <div class="col-lg-5 col-md-6 footer-contact">
                    <h3>Alamat</h3>
                    <p style="font-size: 14pt;">
                        Jl. Panglima Batur Barat No. 2 Banjarbaru - 70711 Kalimantan Selatan
                        <br>
                    </p>
                    <h3>Email:</h3>
                    <p style="font-size: 14pt;">
                        bspji.banjarbaru@gmail.com<br>
                    </p>

                    <h3>Whats App:</h3>
                    <p style="font-size: 14pt;">
                        0811 5164 008
                    </p>
                    <br>
                </div>
            </div>

        </div>
    </section>
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <script>
        $(document).ready(function() {
            var table = $('#tabelPP').DataTable({
                rowReorder: {
                    selector: 'td:nth-child(2)'
                },
                responsive: true,
                "columns": [
                    null,
                    null,
                    {
                        "width": "50%"
                    },
                    null, null
                ]
            });
        });
        $(document).ready(function() {
            var table = $('#tabelPHS').DataTable({
                rowReorder: {
                    selector: 'td:nth-child(2)'
                },
                responsive: true,
                "columns": [
                    null,
                    null,
                    {
                        "width": "50%"
                    },
                    null, null
                ]
            });
        });
        $(document).ready(function() {
            var table = $('#tabelPS').DataTable({
                rowReorder: {
                    selector: 'td:nth-child(2)'
                },
                responsive: true,
                "columns": [
                    null,
                    {
                        "width": "10%"
                    },
                    null,
                    {
                        "width": "70%"
                    }, null
                ]
            });
        });
        $(document).ready(function() {
            $("#myTab a").click(function(e) {
                e.preventDefault();
                $(this).tab("show");
            });
        });

        
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                document.getElementById("blah").className = "d-block";

                reader.onload = function(e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <!-- Vendor JS Files -->
    <script src="{{ asset('userAssets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script src="{{ asset('userAssets/vendor/aos/aos.js')}}"></script>
    <script src="{{ asset('userAssets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('userAssets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{ asset('userAssets/vendor/isotope-isot/layoutsope.pkgd.min.js')}}"></script>
    <script src="{{ asset('userAssets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{ asset('userAssets/vendor/waypoints/noframework.waypoints.js')}}"></script>
    <script src="{{ asset('userAssets/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>

    <script src="{{ asset('userAssets/js/main.js')}}"></script>

</body>

</html>