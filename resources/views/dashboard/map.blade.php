@extends('layout.main')
@section('container')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <style>
        #map {
            height: 550px;
            top: 0;
            left: 0;
            z-index: 1;
        }


        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            /* Atur z-index ke angka yang lebih tinggi */
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.7);
        }

        table {
            margin: 0 auto;
            width: 60%;
            border-collapse: collapse;
            /* Membuat tabel menjadi rata tengah horizontal */
        }

        .table-hover {
            background-color: rgba(255, 255, 255, 0.5);
        }

        th,
        td {
            padding: 8px;
            text-align: center;
            /* Membuat isi sel tabel menjadi rata tengah horizontal */
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 60%;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 mt-3 mb-3">

                <div class="col-sm-12">
                    <div id='map'></div>
                </div>
            </div>
            <div class="col-md-4 mt-3 mb-3">
                <div class="card h-100">
                    <Label class="d-flex justify-content-center mt-3">Maps Daerah Irigasi Penerima P3-TGAI</Label>
                    <div class="card-body">
                        <table class="table table-striped table-sm table-responsive">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Lokasi</th>
                                    <th scope="col">Desa</th>
                                    <th scope="col">Daerah Irigasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $totalRows = count($dataA);
                                    $rowCounter = 0;
                                @endphp
                                @foreach ($dataA as $index => $a)
                                    <tr>
                                        <td>{{ ++$rowCounter }}</td>

                                        <td><a href="#" id="linkToMarker{{ $index }}"
                                                data-lat="{{ $a->yAx }}" data-long="{{ $a->xAx }}"><i
                                                    class="ti ti-pin"></i></a>
                                            {{-- {{ $a->yAx }} ,{{ $a->xAx }} --}}
                                        </td>
                                        <td>{{ $a->Desa }}</td>
                                        <td>{{ $a->DaerahIrigasi->nama }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            {{ $dataA->links() }}
                        </ul>
                    </nav>

                </div>
            </div>

        </div>
        {{-- <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Maps Daerah Irigasi Penerima P3-TGAI</h5>
                <div class="card">




                    <table class="table table-striped table-sm table-responsive">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataA as $index => $a)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><a href="#" id="linkToMarker{{ $index }}"
                                            data-lat="{{ $a->yAx }}" data-long="{{ $a->xAx }}">Tuju ke Titik</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card">
                    <div class="card-body">
                    </div>
                </div>

            </div>
        </div> --}}
    </div>


    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <table class="table table-hover ">
                <th colspan="3" class="table-active">Detail Informasi</th>
                <tr>
                    <td>Latitude</td>
                    <td><span id="modalLatitude"></span></td>
                </tr>
                <tr>
                    <td>Longitude</td>
                    <td><span id="modalLongitude"></span></td>
                </tr>
                <tr>
                    <td>Info</td>
                    <td><span id="modalInfo"></span></td>
                </tr>
            </table>
        </div>
    </div>
    </div>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    {{-- <script type="text/javascript">
        var dataJSON = {!! $dataJSON !!}; // Memasukkan data JSON ke dalam variabel JavaScript
        var map = L.map('map').setView([-7.7816627178899, 110.40877100159], 10);

        // Tambahkan peta tile
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);


        // Membuat objek marker dan menambahkannya ke peta
        for (var i = 0; i < dataJSON.length; i++) {
            var data = dataJSON[i];
            var latitude = data[0];
            var longitude = data[1];
            var info = data[2];

            // Membuat penutupan (closure) untuk menyimpan nilai-nilai
            (function(lat, long, inf) {
                var marker = L.marker([lat, long], ).addTo(map);

                // Menampilkan modal saat marker diklik
                marker.on('click', function() {
                    document.getElementById('modalLatitude').textContent = lat;
                    document.getElementById('modalLongitude').textContent = long;
                    document.getElementById('modalInfo').textContent = inf;
                    document.getElementById('myModal').style.display = 'block';
                });
            })(latitude, longitude, info);
        }

        // Menutup modal saat tombol close diklik
        var closeModal = document.getElementsByClassName('close')[0];
        closeModal.onclick = function() {
            document.getElementById('myModal').style.display = 'none';
        }

        // Menutup modal saat mengklik di luar modal
        window.onclick = function(event) {
            if (event.target == document.getElementById('myModal')) {
                document.getElementById('myModal').style.display = 'none';
            }
        }



        // Membuat layer-layer
        var titikLayer = L.layerGroup([
            L.marker([-7.7816627178899, 110.40877100159]).bindPopup('Ini adalah titik'),
            // Tambahkan marker lain jika diperlukan
        ]);

        var poligonLayer = L.layerGroup([
            L.polygon([
                [-7.7816627178899, 110.40877100159],
                [-7.7815627178899, 110.40977100159],
                [-7.7826627178899, 110.40977100159],
            ]).bindPopup('Ini adalah poligon'),
            // Tambahkan poligon lain jika diperlukan
        ]);

        var garisLayer = L.layerGroup([
            L.polyline([
                [-7.7816627178899, 110.40877100159],
                [-7.7815627178899, 110.40977100159],
                [-7.7826627178899, 110.40977100159],
            ]).bindPopup('Ini adalah garis'),
            // Tambahkan garis lain jika diperlukan
        ]);

        // Membuat layer gabungan (Semua Layer)
        var semuaLayer = L.layerGroup([titikLayer, poligonLayer, garisLayer]);

        // Inisialisasi peta
        var map = L.map('map').setView([-7.7816627178899, 110.40877100159], 15);

        // Tambahkan peta tile
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

        // Tambahkan semua layer ke peta
        semuaLayer.addTo(map);

        // Buat objek Layer Control
        var layerControl = L.control.layers({
            'Titik': titikLayer,
            'Poligon': poligonLayer,
            'Garis': garisLayer,
            'Semua': semuaLayer // Menambahkan pilihan "Semua"
        }).addTo(map);

        // Tampilkan Layer Control di sudut kanan atas
        layerControl.setPosition('topright');
    </script> --}}

    <script type="text/javascript">
        // Contoh data JSON, pastikan variabel $dataJSON telah diisi dengan data yang benar
        var dataJSON = {!! $dataJSON !!};

        var map = L.map('map').setView([-7.7816627178899, 110.40877100159], 13);

        // Tambahkan peta tile
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

        var markers = []; // Array untuk menyimpan marker
        var autoSelectMarker = null; // Marker yang akan otomatis dipilih

        dataJSON.forEach(function(data) {
            var latitude = data[0];
            var longitude = data[1];
            var info = data[2];

            var marker = L.marker([latitude, longitude]);
            marker.bindPopup(info);
            markers.push(marker);

            // Set marker yang akan otomatis dipilih (misalnya, marker pertama)
            if (autoSelectMarker === null) {
                autoSelectMarker = marker;
            }
        });

        // Menutup modal saat tombol close diklik
        var closeModal = document.getElementsByClassName('close')[0];
        closeModal.onclick = function() {
            document.getElementById('myModal').style.display = 'none';
        }

        // Menutup modal saat mengklik di luar modal
        window.onclick = function(event) {
            if (event.target == document.getElementById('myModal')) {
                document.getElementById('myModal').style.display = 'none';
            }
        }

        // Membuat layer-layer
        var titikLayer = L.layerGroup(markers);

        // Buat objek Layer Control
        var layerControl = L.control.layers({
            'Titik (Point)': titikLayer,
            'Garis (Line)': L.layerGroup([]), // Anda dapat menambahkan layer garis jika diperlukan
            'Poligon (Polygon)': L.layerGroup([]), // Anda dapat menambahkan layer poligon jika diperlukan
        }).addTo(map);

        // Tampilkan Layer Control di sudut kanan atas
        layerControl.setPosition('topright');

        // Auto-select marker pertama
        autoSelectMarker.openPopup();
    </script>
    <script>
        @foreach ($dataA as $index => $a)
            document.getElementById('linkToMarker{{ $index }}').addEventListener('click', function(e) {
                e.preventDefault(); // Mencegah aksi default link

                // Mendapatkan nilai latitude dan longitude dari atribut data
                var lat = parseFloat(this.getAttribute('data-lat'));
                var long = parseFloat(this.getAttribute('data-long'));

                // Memindahkan peta ke titik yang ditentukan
                map.setView([lat, long], 13);

                // Menampilkan modal atau info lainnya (jika perlu)
                // Anda dapat menambahkan kode di sini untuk menampilkan info yang sesuai dengan titik yang dipilih.
            });
        @endforeach
    </script>
@endsection
