@extends('layout.main')
@section('container')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <style>
        #map {
            height: 550px;
            /* position: absolute; */
            top: 0;
            left: 0;
            z-index: 1;
        }

        /* #map-container {
                                                    position: relative;
                                                    z-index: 2;
                                                } */

        /* CSS untuk modal */
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
        {{-- <div id="map-container"> --}}
        <div id="map"></div> 
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

    <script type="text/javascript">
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


            var customIcon = L.icon({
                iconUrl:  'images/LOGO_SISDA.png', // URL gambar ikon penanda
                iconSize: [32, 32], // Ukuran ikon [panjang, lebar]
                iconAnchor: [16, 32], // Anchor point ikon
                popupAnchor: [0, -32] // Anchor point untuk popup
            });

            var marker = L.marker([latitude, longitude], {
                icon: customIcon
            }).addTo(map);

            // Menampilkan modal saat marker diklik
            marker.on('click', function() {
                document.getElementById('modalLatitude').textContent = latitude;
                document.getElementById('modalLongitude').textContent = longitude;
                document.getElementById('modalInfo').textContent = info;
                document.getElementById('myModal').style.display = 'block';
            });
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
    </script>
@endsection
