<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SIGEMOY</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets') }}/css/style.css" rel="stylesheet">

    {{-- DATA TABLE --}}
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap5.css" />

    {{-- LEAFLET --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/leaflet.fullscreen.css'
        rel='stylesheet' />

    <!-- =======================================================
  * Template Name: OnePage
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="index.html">SIGEMOY</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">Spatial</a></li>
                    <li><a class="nav-link scrollto" href="#services">Tabular</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 text-center">
                    <h1>Sistem Informasi Geografis Boalemo</h1>
                    <h2>SIGEMOY Merupakan Sebuah Sistem Yang Memuat Data dan Informasi Geografis Kabupaten Boalemo Dalam
                        Bentuk Spasial dan Tabular</h2>
                </div>
            </div>
            <div class="text-center d-flex gap-5 justify-content-center">
                <a href="#about" class="btn-get-started scrollto">Data Spatial</a>
                <a href="#services" class="btn-get-started scrollto">Data Tabular</a>
            </div>

        </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Data Spatial</h2>
                </div>

                <div id="maps" style="height: 500px"></div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Data Tabular</h2>
                </div>

                <table class="table table-striped" id="myTable">
                    <thead id="myTableHead">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Objek</th>
                            <th scope="col">Wilayah Administrasi</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Sumber Data</th>
                            <th scope="col">Kabupaten</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                        <!-- Baris akan diisi oleh JavaScript -->
                    </tbody>
                </table>

            </div>
        </section><!-- End Sevices Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>Kelompok Boalemo</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/ -->
                    Designed by <a href="https://bootstrapmade.com/">Dhnzz</a>
                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    {{-- DATA TABLE --}}
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap5.js"></script>
    <script>
        new DataTable('#myTable');
    </script>

    {{-- LEAFLET --}}
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/Leaflet.fullscreen.min.js'></script>

    <script>
        var map = L.map('maps').setView([0.5351126, 122.338338], 12);
        map.addControl(new L.Control.Fullscreen());

        googleTerrain = L.tileLayer('http://{s}.google.com/vt?lyrs=s,h&x={x}&y={y}&z={z}', {
            zoom: 20,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
        }).addTo(map);

        map.createPane('panePolygons');
        map.getPane('panePolygons').style.zIndex = 400;

        function getRandomColor(){
            var letters = '0123456789ABCDEF';
            var color = '#';
            for(var i = 0; i < 6; i++){
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }
        console.log(getRandomColor())

        var wadmkcColors = {}
        function addGeoJsonData(geoJsonData, datasetName) {
            L.geoJSON(geoJsonData, {
                pane: datasetName === "Boalemo" ? "panePolygons" : "overlayPane",
                style: function (feature){
                    if(datasetName === "Irigasi"){
                        return {
                            color : 'blue',
                            weight: 3
                        }
                    }else if(datasetName === "Boalemo"){
                        if(!wadmkcColors[feature.properties.WADMKC]){
                            wadmkcColors[feature.properties.WADMKC] = getRandomColor();
                        }
                        return {
                            color : 'black',
                            weight: 2,
                            fillColor: wadmkcColors[feature.properties.WADMKC],
                            fillOpacity: 0.5
                        }
                    }
                },
                onEachFeature: function (feature, layer) {
                    var popupContent = "Dataset: " + datasetName + "<br>";
                    if (feature.properties && feature.properties.WADMKC) {
                        popupContent += "Name: " + feature.properties.WADMKC;
                    }
                    layer.bindPopup(popupContent);
                }
            }).addTo(map);
        }
         fetch('assets/BOALEMO.json')
            .then(function(response) {
                return response.json();
            })
            .then(function(json) {
                addGeoJsonData(json, "Boalemo");
            })
            .catch(function(err) {
                console.error('Error memuat data GeoJSON: ' + err);
            });


        // Memuat data GeoJSON dari file lokal
        fetch('assets/IRIGASI_BOALEMO.json')
            .then(function(response) {
                return response.json();
            })
            .then(function(json) {
                addGeoJsonData(json, "Irigasi");
            })
            .catch(function(err) {
                console.error('Error memuat data GeoJSON: ' + err);
            });

        // Memuat data GeoJSON dari file lokal
        
    </script>

    <script src="{{ asset('assets/js/irigasiDataHandler.js') }}"></script>
</body>

</html>
