<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <style>
        /* CSS untuk container peta */
        #map-container {
            width: 100%;
            /* Lebar 100% */
            height: 100vh;
            /* Tinggi 100% dari tinggi viewport */
        }

        /* CSS untuk iframe peta */
        iframe {
            width: 100%;
            /* Lebar 100% */
            height: 100%;
            /* Tinggi 100% dari tinggi container */
        }

        /* Media query untuk perubahan gaya saat layar menjadi lebih kecil */
        @media (max-width: 768px) {
            #map-container {
                height: 50vh;
                /* Misalnya, tinggi 50% dari tinggi viewport saat layar kecil */
            }
        }
    </style>

    <div id="map-container">
        <!-- Sertakan konten HTML peta qgis2web di sini -->
        <iframe src="{{ asset('qgis2web/qgis2web_2023_09_08-11_14_50_809512/index.html') }}" frameborder="0"></iframe>
    </div>
</body>

</html>
