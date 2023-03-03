<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ auth()->user()->role }} - Dashboard</title>


    <!-- Custom fonts for this template-->
    <link href="{{ asset('adminAssets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="{{ asset('adminAssets/vendor/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('adminAssets/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('adminAssets/css/print.css') }}" rel="stylesheet" media="print">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    {{--
    <link href="{{ asset('adminAssets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet"> --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/v/bs4-4.6.0/jqc-1.12.4/dt-1.13.1/datatables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css" rel="stylesheet">
    <!-- Custom styles for this template-->

</head>
<style>
    .tooltips {
        position: relative;
        display: inline;
    }

    .tooltips span {
        font: 300 12px 'Open Sans', sans-serif;
        position: absolute;
        color: #FFFFFF;
        background: #000000;
        padding: 5px 10px;
        width: 80px;
        text-align: center;
        visibility: hidden;
        opacity: 0;
        filter: alpha(opacity=0);
        transition: transform .3s, opacity .6s, margin-left .2s, margin-top .2s;
    }

    .tooltips>span img {
        max-width: 80px;
    }

    .tooltips[tooltip-position="top"] span {
        margin-left: 10px;
        -ms-transform: rotate(30deg);
        -webkit-transform: rotate(30deg);
        transform: rotate(30deg);
    }

    .tooltips span:after {
        content: '';
        position: absolute;
        width: 0;
        height: 0;
    }

    .tooltips[tooltip-position="top"] span:after {
        top: 100%;
        left: 50%;
        margin-left: -8px;
        border-top: 8px solid black;
        border-right: 8px solid transparent;
        border-left: 8px solid transparent;
    }

    .tooltips:hover span {
        visibility: visible;
        opacity: 1;
        z-index: 999;
        -ms-transform: rotate(0deg);
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
        filter: alpha(opacity=100);
    }

    .tooltips[tooltip-position="top"]:hover span {
        bottom: 30px;
        left: 50%;
        margin-left: -40px;
    }

    .tooltips[tooltip-type="success"]>span {
        background-color: #27ae60;
    }

    .tooltips[tooltip-type="success"][tooltip-position="top"]>span:after {
        border-top: 8px solid #27ae60;
    }

    .tooltips[tooltip-type="success"][tooltip-position="bottom"]>span:after {
        border-bottom: 8px solid #27ae60;
    }

    .tooltips[tooltip-type="success"][tooltip-position="left"]>span:after {
        border-left: 8px solid #27ae60;
    }

    .tooltips[tooltip-type="success"][tooltip-position="right"]>span:after {
        border-right: 8px solid #27ae60;
    }

    .tooltips[tooltip-type="danger"]>span {
        background-color: #c0392b;
    }

    .tooltips[tooltip-type="danger"][tooltip-position="top"]>span:after {
        border-top: 8px solid #c0392b;
    }

    .tooltips[tooltip-type="danger"][tooltip-position="bottom"]>span:after {
        border-bottom: 8px solid #c0392b;
    }

    .tooltips[tooltip-type="danger"][tooltip-position="left"]>span:after {
        border-left: 8px solid #c0392b;
    }

    .tooltips[tooltip-type="danger"][tooltip-position="right"]>span:after {
        border-right: 8px solid #c0392b;
    }
</style>

<body id="page-top">
    <div id="wrapper">
        @include('admin/layouts/sidebar')
        @yield('container')
    </div>

</body>

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('adminAssets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('adminAssets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('adminAssets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
{{-- <script src="{{ asset('adminAssets/vendor/datatables/jquery.dataTables.min.js') }}"></script> --}}

<!-- Custom scripts for all pages-->
<script src="{{ asset('adminAssets/js/sb-admin-2.min.js') }}"></script>

<!-- Page level plugins -->
<script src="{{ asset('adminAssets/vendor/chart.js/Chart.min.js') }}"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.6.0/dt-1.13.1/datatables.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js">
</script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jspdf@1.5.3/dist/jspdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.5.0/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.62/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.62/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
<!-- Page level custom scripts -->
{{-- <script src="{{ asset('adminAssets/js/demo/chart-area-demo.js') }}"></script>
<script src="{{ asset('adminAssets/js/demo/chart-bar-demo.js') }}"></script>
<script src="{{ asset('adminAssets/js/demo/chart-pie-demo.js') }}"></script> --}}
<script src="{{ asset('adminAssets/js/demo/datatables-demo.js') }}"></script>

<script type="">

    $(document).ready(function() {
        $('#dataPHS').DataTable({
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'print',
                    text: 'PDF',
                    exportOptions: {
                        columns: ':visible',
                        stripHtml: false
                    }
                },
                // {
                //     extend: 'excel',
                //     text: 'Export to Excel',
                //     filename: 'nama-file'
                // }
            ],
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true,
            "columns": [{
                    "width": "10%"
                },
                null,
                {
                    "width": "60%"
                },
                null,
                null
            ]
        });
    });
    $(document).ready(function() {
        $('#dataPP').DataTable({
            dom: 'Bfrtip',
            // buttons: [
            //     'excel', 'pdf',
            // ],
            buttons: [
                {
                    extend: 'print',
                    text: 'PDF',
                    exportOptions: {
                        columns: ':visible',
                        stripHtml: false
                    }
                },
                // {
                //     extend: 'excel',
                //     text: 'Export to Excel',
                //     filename: 'nama-file'
                // }
            ],
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true,
            "columns": [{
                    "width": "10%"
                },
                null,
                {
                    "width": "60%"
                },
                null,
                null
            ]
        });
    });
    $(document).ready(function() {
        $('#dataPS').DataTable({
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'print',
                    text: 'PDF',
                    exportOptions: {
                        columns: ':visible',
                        stripHtml: false
                    }
                },
                // {
                //     extend: 'excel',
                //     text: 'Export to Excel',
                //     filename: 'nama-file'
                // }
            ],
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true,
            "columns": [{
                    "width": "10%"
                },
                null,
                {
                    "width": "75%"
                },
                null
            ]
        });
    });
    $('.tooltips').append("<span></span>");
    $('.tooltips:not([tooltip-position])').attr('tooltip-position', 'bottom');


    $(".tooltips").mouseenter(function() {
        $(this).find('span').empty().append($(this).attr('tooltip'));
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    window.onbeforeprint = (ev) => {
        for (var id in Chart.instances) {
            let instance = Chart.instances[id];
            let b64 = instance.toBase64Image();
            let i = new Image();
            //Instead of the below, you could save something on the
            //chart that decides what to change this to. This worked for me
            //however:
            i.style.maxWidth = "115vw";
            i.style.minHeight = "60vw";
            i.src = b64;
            let parent = instance.canvas.parentNode;
            instance.tempImage = i;
            instance.oldDisplay = instance.canvas.style.display;
            instance.canvas.style.display = "none";
            parent.appendChild(i);
        }
    };

    window.onafterprint = (ev) => {
        for (var id in Chart.instances) {
            let instance = Chart.instances[id];
            if (instance.tempImage) {
                let parent = instance.canvas.parentNode;
                parent.removeChild(instance.tempImage);
                instance.canvas.style.display = instance.oldDisplay;
                delete instance.oldDisplay;
                delete instance.tempImage;
            }
        }
    };

    var ctxPP = document.getElementById("chartPP");
    var ctxPHS = document.getElementById("chartPHS");
    var ctxPS = document.getElementById("chartPS");
    var chartPP = new Chart(ctxPP, {
        type: 'bar',
        data: {
            labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", " November", "Desember"],
            datasets: [{
                    label: "Pengaduan Pelayanan",
                    backgroundColor: "#3e95cd",
                    borderColor: "#3e95cd",
                    data: @json($dataPP),
                    minBarLength: 5,
                }

            ],

        },
        options: {
            title: {
            display: true,
            text: 'Data Pengaduan Pelayanan',
            fontSize: 18
        },
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 0,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: true
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#6e707e',
                titleFontSize: 14,
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function(tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                        return datasetLabel + ': ' + tooltipItem.yLabel;
                    }
                }
            },
        }
    });
    var chartPHS = new Chart(ctxPHS, {
        type: 'bar',
        data: {
            labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", " November", "Desember"],
            datasets: [{
                    label: "Pengaduan Hasil Standarisasi",
                    backgroundColor: "#4e73df",
                    borderColor: "#4e73df",
                    data: @json($dataPHS),
                    minBarLength: 5,
                }

            ],

        },
        options: {
            title: {
            display: true,
            text: 'Data Pengaduan Hasil Standarisasi',
            fontSize: 18
        },
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 0,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: true
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#6e707e',
                titleFontSize: 14,
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function(tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                        return datasetLabel + ': ' + tooltipItem.yLabel;
                    }
                }
            },
        }
    });
    var chartPS = new Chart(ctxPS, {
        type: 'bar',
        data: {
            labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", " November", "Desember"],
            datasets: [{
                    label: "Pengajuan Standarisasi",
                    backgroundColor: "#8e5ea2",
                    borderColor: "#8e5ea2",
                    data: @json($dataPS),
                    minBarLength: 5,
                }

            ],

        },
        options: {
            title: {
            display: true,
            text: 'Data Pengajuan Standarisasi',
            fontSize: 18
        },
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 0,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: true
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#6e707e',
                titleFontSize: 14,
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function(tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                        return datasetLabel + ': ' + tooltipItem.yLabel;
                    }
                }
            },
        }
    });

    function printPDF(id) {
        var canvas = document.querySelector(id);
        var canvas_img = canvas.toDataURL("image/png",1.0); //JPEG will not match background color
        var pdf = new jsPDF('landscape','in', 'letter'); 
        // alert(pdf);//orientation, units, page size
        pdf.addImage(canvas_img, 'png', .5, 1.75, 10, 5); //image, type, padding left, padding top, width, height
        pdf.autoPrint(); //print window automatically opened with pdf
        var blob = pdf.output("bloburl");
        window.open(blob);
    };
</script>

</html>