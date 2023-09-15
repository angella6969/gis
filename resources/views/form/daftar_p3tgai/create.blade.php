@extends('layout.main')
@section('container')
    <style>
        .card {
            max-width: 100%;
            overflow-x: auto;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.);
            transition: box-shadow 0.3s ease;
        }

        .card:hover {
            box-shadow: 0 8px 12px rgba(230, 138, 38, 1);
        }
    </style>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Daftar Calon Daerah Irigasi Penerima P3-TGAI</h5>
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="/dashboard/daerah-irigasi/create" enctype="multipart/form-data">
                            @csrf
                            {{-- <div class="mb-3">
                                <label for="DaerahIrigasi" class="form-label">Daerah Irigasi</label>
                                <input type="text" class="form-control @error('DaerahIrigasi') is-invalid @enderror"
                                    id="DaerahIrigasi" name="DaerahIrigasi" value="{{ old('DaerahIrigasi') }}"
                                    placeholder="Daerah Irigasi" required>
                                @error('DaerahIrigasi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div> --}}

                            <div class="mt-3 mb-3">
                                <label for="DaerahIrigasi" class="form-label">Daerah Irigasi</label>
                                <select class="form-select" id="DaerahIrigasi" name="DaerahIrigasi" required>
                                    <option value="">Pilih salah satu opsi</option>
                                    <option value="Tajum" {{ old('DaerahIrigasi') == 'Tajum' ? 'selected' : '' }}>Tajum
                                    </option>
                                    <option value="Progo Manggis"
                                        {{ old('DaerahIrigasi') == 'Progo Manggis' ? 'selected' : '' }}>Progo Manggis
                                    </option>
                                    <option value="Sempor" {{ old('DaerahIrigasi') == 'Sempor' ? 'selected' : '' }}>Sempor
                                    </option>
                                    <option value="Mataram" {{ old('DaerahIrigasi') == 'Mataram' ? 'selected' : '' }}>
                                        Mataram
                                    </option>
                                    <option value="Kalibawang" {{ old('DaerahIrigasi') == 'Kalibawang' ? 'selected' : '' }}>
                                        Kalibawang
                                    </option>
                                    <option value="Kedungputri"
                                        {{ old('DaerahIrigasi') == 'Kedungputri' ? 'selected' : '' }}>Kedungputri
                                    </option>
                                    <option value="Serayu" {{ old('DaerahIrigasi') == 'Serayu' ? 'selected' : '' }}>Serayu
                                    </option>
                                    <option value="Boro" {{ old('DaerahIrigasi') == 'Boro' ? 'selected' : '' }}>Boro
                                    </option>
                                    <option value="Wadaslintang"
                                        {{ old('DaerahIrigasi') == 'Wadaslintang' ? 'selected' : '' }}>Wadaslintang
                                    </option>
                                    <option value="Banjarcahyana"
                                        {{ old('DaerahIrigasi') == 'Banjarcahyana' ? 'selected' : '' }}>Banjarcahyana
                                    </option>
                                    <option value="Tuk Kuning"
                                        {{ old('DaerahIrigasi') == 'Tuk Kuning' ? 'selected' : '' }}>Tuk Kuning
                                    </option>
                                    <option value="Singomerto"
                                        {{ old('DaerahIrigasi') == 'Singomerto' ? 'selected' : '' }}>Singomerto
                                    </option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="Kecamatan" class="form-label">Provinsi</label>
                                <select class="form-control" id="provinsi" name="provinsi" onchange="updateKabupaten()"
                                    required>
                                    <option value="">Pilih Provinsi</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="Kabupaten" class="form-label">Kota/Kabupaten</label>
                                <select class="form-control" id="Kabupaten" name="Kabupaten" onchange="updateKecamatan()"
                                    required>
                                    <option value="">Pilih Kabupaten/Kota</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="Kecamatan" class="form-label">Kecamatan</label>
                                <select class="form-control" id="Kecamatan" name="Kecamatan" onchange="updateDesa()"
                                    required>
                                    <option value="">Pilih Kecamatan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="Desa" class="form-label">Desa</label>
                                <input type="text" class="form-control" id="Desa" name="Desa"
                                    value="{{ old('Desa') }}" placeholder="Desa" required>
                            </div>
                            {{-- <h1>Pilih Provinsi:</h1>
                            <select class="form-control" id="provinsi" name="provinsi" onchange="updateKabupaten()"
                                required>
                                <option value="">Pilih Provinsi</option>
                            </select> --}}

                            {{-- <h1>Pilih Kabupaten/Kota:</h1>
                            <select class="form-control" id="Kabupaten" name="Kabupaten" onchange="updateKecamatan()"
                                required>
                                <option value="">Pilih Kabupaten/Kota</option>
                            </select> --}}


                            {{-- <h1>Pilih Kecamatan:</h1>
                            <select class="form-control" id="Kecamatan" name="Kecamatan" onchange="updateDesa()">
                                <option value="">Pilih Kecamatan</option>
                            </select> --}}

                            {{-- 
                            <h1>Pilih Desa/Kelurahan:</h1>
                            <select id="desa">
                                <option value="">Pilih Desa/Kelurahan</option>
                            </select> --}}

                            {{-- <div class="mb-3">
                                <label for="Kabupaten" class="form-label">Kota/Kabupaten</label>
                                <input type="text" class="form-control" id="Kabupaten" name="Kabupaten"
                                    value="{{ old('Kabupaten') }}" placeholder="Kabupaten" required>
                            </div> --}}
                            {{-- <div class="mt-3 mb-3">
                                <label for="Kabupaten" class="form-label">Daerah Irigasi</label>
                                <select class="form-select" id="Kabupaten" name="Kabupaten" required>
                                    <option value="">Pilih salah satu opsi</option>
                                    <option value="Sleman" {{ old('Kabupaten') == 'Sleman' ? 'selected' : '' }}>Sleman
                                    </option>
                                    <option value="Bantul" {{ old('Kabupaten') == 'Bantul' ? 'selected' : '' }}>Bantul
                                    </option>
                                    <option value="Gunungkidul" {{ old('Kabupaten') == 'Gunungkidul' ? 'selected' : '' }}>
                                        Gunungkidul
                                    </option>
                                    <option value="Kulon Progo" {{ old('Kabupaten') == 'Kulon Progo' ? 'selected' : '' }}>
                                        Kulon Progo
                                    </option>
                                    <option value="Kota Yogyakarta"
                                        {{ old('Kabupaten') == 'Kota Yogyakarta' ? 'selected' : '' }}>
                                        Kota Yogyakarta
                                    </option>
                                    <option value="Purbalingga" {{ old('Kabupaten') == 'Purbalingga' ? 'selected' : '' }}>
                                        Purbalingga
                                    </option>
                                    <option value="Kebumen" {{ old('Kabupaten') == 'Kebumen' ? 'selected' : '' }}>Kebumen
                                    </option>
                                    <option value="Magelang" {{ old('Kabupaten') == 'Magelang' ? 'selected' : '' }}>
                                        Magelang
                                    </option>
                                    <option value="Cilacap" {{ old('Kabupaten') == 'Cilacap' ? 'selected' : '' }}>Cilacap
                                    </option>
                                    <option value="Banjarnegara"
                                        {{ old('Kabupaten') == 'Banjarnegara' ? 'selected' : '' }}>Banjarnegara
                                    </option>
                                    <option value="Banyumas" {{ old('Kabupaten') == 'Banyumas' ? 'selected' : '' }}>
                                        Banyumas
                                    </option>
                                    <option value="Purworejo" {{ old('Kabupaten') == 'Purworejo' ? 'selected' : '' }}>
                                        Purworejo
                                    </option>
                                    <option value="Pemalang" {{ old('Kabupaten') == 'Pemalang' ? 'selected' : '' }}>
                                        Pemalang
                                    </option>
                                    <option value="Temanggung" {{ old('Kabupaten') == 'Temanggung' ? 'selected' : '' }}>
                                        Temanggung
                                    </option>
                                    <option value="Klaten" {{ old('Kabupaten') == 'Klaten' ? 'selected' : '' }}>
                                        Klaten
                                    </option>
                                    <option value="Wonogiri" {{ old('Kabupaten') == 'Wonogiri' ? 'selected' : '' }}>
                                        Wonogiri
                                    </option>
                                    <option value="Semarang" {{ old('Kabupaten') == 'Semarang' ? 'selected' : '' }}>
                                        Semarang
                                    </option>
                                    <option value="Kendal" {{ old('Kabupaten') == 'Kendal' ? 'selected' : '' }}>
                                        Kendal
                                    </option>
                                    <option value="Pekalongan" {{ old('Kabupaten') == 'Pekalongan' ? 'selected' : '' }}>
                                        Pekalongan
                                    </option>
                                    <option value="Boyolali" {{ old('Kabupaten') == 'Boyolali' ? 'selected' : '' }}>
                                        Boyolali
                                    </option>
                                    <option value="Brebes" {{ old('Kabupaten') == 'Brebes' ? 'selected' : '' }}>
                                        Brebes
                                    </option>
                                    <option value="Sukoharjo" {{ old('Kabupaten') == 'Sukoharjo' ? 'selected' : '' }}>
                                        Sukoharjo
                                    </option>
                                    <option value="Batang" {{ old('Kabupaten') == 'Batang' ? 'selected' : '' }}>
                                        Batang
                                    </option>
                                    <option value="Kota Magelang"
                                        {{ old('Kabupaten') == 'Kota Magelang' ? 'selected' : '' }}>
                                        Kota Magelang
                                    </option>
                                </select>
                            </div> --}}

                            {{-- <div class="mb-3">
                                <label for="Kecamatan" class="form-label">Kecamatan</label>
                                <input type="text" class="form-control" id="Kecamatan" name="Kecamatan"
                                    value="{{ old('Kecamatan') }}" placeholder="Kecamatan" required>
                            </div> --}}



                            <div class="mb-3">
                                <label for="IrigasiDesaTerbangun" class="form-label">Total Saluran Irigasi Tersier &
                                    Irigasi
                                    Desa Terbangun</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="IrigasiDesaTerbangun"
                                        name="IrigasiDesaTerbangun" value="{{ old('IrigasiDesaTerbangun') }}"
                                        placeholder="Hanya Menerima Masukan Angka Saja" required>
                                    <span class="input-group-text">KM</sup></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="IrigasiDesaBelumTerbangun" class="form-label">Total Saluran Irigasi Tersier &
                                    Irigasi Desa Belum Terbangun</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="IrigasiDesaBelumTerbangun"
                                        name="IrigasiDesaBelumTerbangun" value="{{ old('IrigasiDesaBelumTerbangun') }}"
                                        placeholder="Hanya Menerima Masukan Angka Saja" required>
                                    <span class="input-group-text">KM</sup></span>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="PolaTanamSaatIni" class="form-label">Pola Tanam Saat Ini</label>
                                <input type="text" class="form-control" id="PolaTanamSaatIni" name="PolaTanamSaatIni"
                                    value="{{ old('PolaTanamSaatIni') }}" placeholder="Pola Tanam Saat Ini" required>
                            </div>

                            <div class="mb-3">
                                <label for="JenisVegetasi" class="form-label">Jenis Vegetasi</label>
                                <input type="text" class="form-control" id="JenisVegetasi" name="JenisVegetasi"
                                    value="{{ old('JenisVegetasi') }}" placeholder="Jenis Vegetasi" required>
                            </div>

                            <div class="mb-3">
                                <label for="MendapatkanP4_ISDA" class="form-label">Mendapatkan P4-ISDA/P3-TGAI</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="MendapatkanP4_ISDA"
                                        name="MendapatkanP4_ISDA" value="{{ old('MendapatkanP4_ISDA') }}"
                                        placeholder="Hanya Menerima Masukan Angka Saja" required>
                                    <span class="input-group-text">Kali</sup></span>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="TahunMendapatkan" class="form-label">Tahun Mendapatkan</label>
                                <input type="text" class="form-control" id="TahunMendapatkan" name="TahunMendapatkan"
                                    value="{{ old('TahunMendapatkan') }}" placeholder="Tahun Mendapatkan" required>
                            </div>
                            <div class="mb-3">
                                <label for="names" class="form-label">Nama P3A/GP3A</label>
                                <input type="text" class="form-control" id="names" name="names"
                                    value="{{ old('names') }}" placeholder="Nama P3A/GP3A" required>
                            </div>

                            {{-- <div class="mt-3 mb-3">
                                <label for="names">Nama P3A/GP3A</label>
                                <div id="nama-container">
                                    @if (is_array(old('names')))
                                        @foreach (old('names') as $name)
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="names[]"
                                                    placeholder="Nama P3A/GP3A" required value="{{ $name }}">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-secondary" type="button"
                                                        onclick="addNamaField()">+</button>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="names[]"
                                                placeholder="Nama P3A/GP3A" required value="">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button"
                                                    onclick="addNamaField()">+</button>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div> --}}







                            <div class="mt-3 mb-3">
                                <label for="peta_pdf">Peta Desa</label>
                                <input type="file" class="form-control " id="peta_pdf" name="peta_pdf"
                                    accept="application/pdf">
                                <h6>PDF Max 1 MB</h6>

                            </div>

                            <div class="mt-3 mb-3">
                                <label for="pdf">Skema jaringan Irigasi</label>
                                <input type="file" class="form-control " id="jaringan_pdf" name="jaringan_pdf"
                                    accept="application/pdf">
                                <div class="form-text">PDF Max 5 MB
                                </div>

                            </div>

                            <div class="mt-3 mb-3">
                                <label for="pdf">Dokumentasi Saluran Irigasi Tersier</label>
                                <input type="file" class="form-control" id="dokumentasi_pdf" name="dokumentasi_pdf"
                                    accept="application/pdf">
                                <div class="form-text">PDF Max 5 MB
                                </div>
                            </div>


                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>





    {{--  --}}

    {{--  --}}

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @if (Session::has('success'))
                iziToast.success({
                    title: 'Success',
                    message: '{{ Session::get('success') }}',
                    position: 'topRight',
                });
            @endif
            @if (Session::has('fail'))
                iziToast.warning({
                    title: 'Warning',
                    message: '{{ Session::get('fail') }}',
                    position: 'topRight',
                });
            @endif
        });
    </script>

    <script>
        function addNamaField() {
            var namaContainer = document.getElementById('nama-container');
            var inputGroup = document.createElement('div');
            inputGroup.className = 'input-group mb-3';

            var input = document.createElement('input');
            input.type = 'text';
            input.className = 'form-control';
            input.name = 'names[]';
            input.placeholder = 'Nama';

            var appendDiv = document.createElement('div');
            appendDiv.className = 'input-group-append';

            var removeButton = document.createElement('button');
            removeButton.className = 'btn btn-outline-secondary';
            removeButton.type = 'button';
            removeButton.textContent = '-';
            removeButton.onclick = function() {
                namaContainer.removeChild(inputGroup);
            };

            appendDiv.appendChild(removeButton);
            inputGroup.appendChild(input);
            inputGroup.appendChild(appendDiv);
            namaContainer.appendChild(inputGroup);
        }
    </script>

    <script>
        // Data wilayah dalam format JSON
        var dataWilayah = {
            "Jawa Tengah": {
                "Banjarnegara": {
                    "Banjarnegara": [],
                    "Batur": [],
                    "Binangun": [],
                    "Kalibening": [],
                    "Karangkobar": [],
                    "Mandiraja": [],
                    "Pagedongan": [],
                    "Pagentan": [],
                    "Pekajangan": [],
                    "Purwanegara": [],
                    "Punggelan": [],
                    "Sigaluh": [],
                    "Susukan": [],
                    "Wanadadi": [],
                    "Wanayasa": []

                },
                "Banyumas": {
                    "Ajibarang": [],
                    "Banyumas": [],
                    "Baturaden": [],
                    "Cilongok": [],
                    "Gumelar": [],
                    "Jatilawang": [],
                    "Kalibagor": [],
                    "Karanglewas": [],
                    "Kembaran": [],
                    "Kebasen": [],
                    "Kedung Banteng": [],
                    "Kemranjen": [],
                    "Lumbir": [],
                    "Patikraja": [],
                    "Purwojati": [],
                    "Purwokerto Barat": [],
                    "Purwokerto Selatan": [],
                    "Purwokerto Timur": [],
                    "Purwokerto Utara": [],
                    "Rawsinkambing": [],
                    "Sumpiuh": [],
                    "Tambak": [],
                    "Wangon": []

                },
                "Batang": {
                    "Batang": [],
                    "Gringsing": [],
                    "Limpung": [],
                    "Tersono": [],
                    "Warungasem": [],
                    "Kandeman": [],
                    "Subah": [],
                    "Bawang": [],
                    "Tulis": [],
                    "Blado": [],
                    "Reban": [],
                    "Pecalungan": []


                },
                "Blora": {
                    "Blora": [],
                    "Cepu": [],
                    "Jiken": [],
                    "Kunduran": [],
                    "Ngawen": [],
                    "Randublatung": [],
                    "Sambong": [],
                    "Todanan": [],
                    "Tunjungan": [],
                    "Jepon": [],
                    "Juwana": [],
                    "Kedungtuban": [],
                    "Kradenan": [],
                    "Mejobo": [],
                    "Bojongsari": [],
                    "Jepara": [],
                    "Kunir": [],
                    "Malangbong": [],
                    "Sumber": [],
                    "Binangun": [],
                    "Wonosobo": [],
                    "Banjarejo": [],
                    "Jati": [],
                    "Jatipuro": [],
                    "Kedungjati": [],
                    "Keling": [],
                    "Kutorejo": [],
                    "Madukara": [],
                    "Mlati": [],
                    "Pelor": [],
                    "Randugunting": [],
                    "Sikumpul": [],
                    "Tembarak": []

                },
                "Boyolali": {
                    "Boyolali": [],
                    "Mojosongo": [],
                    "Musuk": [],
                    "Selo": [],
                    "Teras": [],
                    "Sawit": [],
                    "Banyudono": [],
                    "Sambi": [],
                    "Ngemplak": [],
                    "Kalitidu": [],
                    "Kemusu": [],
                    "Selo": [],
                    "Sawit": [],
                    "Simbo": [],
                    "Karanggede": []

                },
                "Brebes": {
                    "Banasari": [],
                    "Beji": [],
                    "Blogo": [],
                    "Bumiayu": [],
                    "Jatibarang": [],
                    "Kalangbret": [],
                    "Kembaran": [],
                    "Kersana": [],
                    "Ketanggungan": [],
                    "Larangan": [],
                    "Losari": [],
                    "Paguyangan": [],
                    "Salem": [],
                    "Salem": [],
                    "Sirampog": [],
                    "Songsong": [],
                    "Sokaraja": [],
                    "Tanjung": [],
                    "Tonjong": [],
                    "Wanasari": [],
                    "Warungpring": []

                },
                "Cilacap": {
                    "Adipala": [],
                    "Bantarsari": [],
                    "Binangun": [],
                    "Cilacap Selatan": [],
                    "Cilacap Tengah": [],
                    "Cilacap Utara": [],
                    "Dukuhseti": [],
                    "Gandrungmangu": [],
                    "Jeruklegi": [],
                    "Kampung Laut": [],
                    "Karangpucung": [],
                    "Kawunganten": [],
                    "Kedungreja": [],
                    "Kesugihan": [],
                    "Kroya": [],
                    "Majenang": [],
                    "Maos": [],
                    "Nusawungu": [],
                    "Pangandaran": [],
                    "Patimuan": [],
                    "Sampang": [],
                    "Sidareja": [],
                    "Wanareja": [],

                },
                "Demak": {
                    "Bonang": [],
                    "Demak": [],
                    "Dempet": [],
                    "Gajah": [],
                    "Guntur": [],
                    "Karang Tengah": [],
                    "Karanganyar": [],
                    "Karangawen": [],
                    "Karangjati": [],
                    "Karanganyar": [],
                    "Kebonagung": [],
                    "Kemusu": [],
                    "Mijen": [],
                    "Mranggen": [],
                    "Pagedangan": [],
                    "Sayung": [],
                    "Wedung": []

                },
                "Grobogan": {
                    "Brati": [],
                    "Batealit": [],
                    "Gabus": [],
                    "Gabuswetan": [],
                    "Geyer": [],
                    "Godong": [],
                    "Grokgak": [],
                    "Kaedanan": [],
                    "Kartasura": [],
                    "Karangrayung": [],
                    "Karangsempu": [],
                    "Karangtengah": [],
                    "Kedungjati": [],
                    "Klagen": [],
                    "Kradenan": [],
                    "Ngaringan": [],
                    "Penawangan": [],
                    "Pulokulon": [],
                    "Rowosari": [],
                    "Toroh": []

                },
                "Jepara": {
                    "Bangsri": [],
                    "Batealit": [],
                    "Donorojo": [],
                    "Jepara": [],
                    "Kalinyamatan": [],
                    "Karimunjawa": [],
                    "Kedung": [],
                    "Keling": [],
                    "Kembang": [],
                    "Keling": [],
                    "Kembang": [],
                    "Mayong": [],
                    "Mlonggo": [],
                    "Pakis Aji": [],
                    "Pecangaan": [],
                    "Tahunan": []

                },
                "Karanganyar": {
                    "Colomadu": [],
                    "Gondangrejo": [],
                    "Jaten": [],
                    "Jatipuro": [],
                    "Jatiyoso": [],
                    "Jenawi": [],
                    "Jumapolo": [],
                    "Jumantono": [],
                    "Karanganyar": [],
                    "Karangpandan": [],
                    "Kebakkramat": [],
                    "Kerjo": [],
                    "Klambu": [],
                    "Klaten Utara": [],
                    "Klaten Tengah": [],
                    "Klaten Selatan": [],
                    "Masaran": [],
                    "Ngargoyoso": [],
                    "Tasikmadu": [],
                    "Tawangmangu": []

                },
                "Kebumen": {
                    "Andong": [],
                    "Bagelen": [],
                    "Baturaden": [],
                    "Buayan": [],
                    "Buluspesantren": [],
                    "Gombong": [],
                    "Karanganyar": [],
                    "Karanggayam": [],
                    "Karangpari": [],
                    "Kebumen": [],
                    "Klirong": [],
                    "Kutowinangun": [],
                    "Kuwarasan": [],
                    "Prembun": [],
                    "Pejagoan": [],
                    "Petanahan": [],
                    "Poncowarno": [],
                    "Puring": [],
                    "Rowokele": [],
                    "Sadang": [],
                    "Sempor": [],
                    "Srumbung": [],
                    "Somagede": [],
                    "Somagede": [],
                    "Klirong": [],
                    "Alian": [],
                    "Karangbolong": [],
                    "Karanggayam": [],
                    "Karangsambung": [],
                    "Karangsembung": [],
                    "Karangpari": [],
                    "Karanggayam": [],
                    "Kawak": [],
                    "Buluspesantren": [],
                    "Kutowinangun": [],
                    "Karanggayam": [],
                    "Sadang": [],
                    "Karangsambung": [],
                    "Kebumen": [],
                    "Alian": [],
                },
                "Kendal": {
                    "Boja": [],
                    "Brangsong": [],
                    "Cepiring": [],
                    "Gabus": [],
                    "Kaliwungu": [],
                    "Kangkung": [],
                    "Kendal": [],
                    "Kendal": [],
                    "Kwadungan": [],
                    "Kaliwungu Selatan": [],
                    "Kaliwungu Tengah": [],
                    "Kaliwungu Utara": [],
                    "Limbangan": [],
                    "Ngampel": [],
                    "Pagerruyung": [],
                    "Patean": [],
                    "Patebon": [],
                    "Pegandon": [],
                    "Plantungan": [],
                    "Punggelan": [],
                    "Rowosari": [],
                    "Sukorejo": [],
                    "Singorojo": [],
                    "Slawi": [],
                    "Tambakrejo": [],
                    "Weleri": []

                },
                "Klaten": {
                    "Bayat": [],
                    "Bener": [],
                    "Boja": [],
                    "Cawas": [],
                    "Delanggu": [],
                    "Gantiwarno": [],
                    "Jatinom": [],
                    "Jogonalan": [],
                    "Juwiring": [],
                    "Kalikotes": [],
                    "Karanganom": [],
                    "Kebonarum": [],
                    "Kemalang": [],
                    "Klaten Selatan": [],
                    "Klaten Tengah": [],
                    "Klaten Utara": [],
                    "Manisrenggo": [],
                    "Ngawen": [],
                    "Pedan": [],
                    "Polanharjo": [],
                    "Prambanan": [],
                    "Trucuk": [],
                    "Tulung": [],
                    "Wedi": []

                },
                "Kudus": {
                    "Dawe": [],
                    "Getasan": [],
                    "Jati": [],
                    "Jekulo": [],
                    "Kaliwungu": [],
                    "Kudus": [],
                    "Mejobo": [],
                    "Undaan": [],

                },
                "Magelang": {
                    "Bandongan": [],
                    "Borobudur": [],
                    "Candimulyo": [],
                    "Dukun": [],
                    "Grabag": [],
                    "Kajoran": [],
                    "Kaliangkrik": [],
                    "Kemalang": [],
                    "Kepil": [],
                    "Kota Mungkid": [],
                    "Magelang Selatan": [],
                    "Magelang Tengah": [],
                    "Magelang Utara": [],
                    "Mertoyudan": [],
                    "Mungkid": [],
                    "Ngablak": [],
                    "Ngadiharjo": [],
                    "Pagak": [],
                    "Pakis": [],
                    "Salaman": [],
                    "Sawangan": [],
                    "Secang": [],
                    "Tegalrejo": [],
                    "Tempuran": [],

                },
                "Pati": {
                    "Batangan": [],
                    "Cluwak": [],
                    "Dukuhseti": [],
                    "Gabus": [],
                    "Gembong": [],
                    "Gunungwungkal": [],
                    "Jaken": [],
                    "Jakenan": [],
                    "Juwana": [],
                    "Kayen": [],
                    "Margorejo": [],
                    "Margoyoso": [],
                    "Ngawen": [],
                    "Pati": [],
                    "Patikraja": [],
                    "Sukolilo": [],
                    "Tambakromo": [],
                    "Wedarijaksa": [],
                    "Winong": []

                },
                "Pekalongan": {
                    "Ambarawa": [],
                    "Babadan": [],
                    "Bajong": [],
                    "Belik": [],
                    "Bodeh": [],
                    "Comal": [],
                    "Moga": [],
                    "Ngampel": [],
                    "Pekalongan Barat": [],
                    "Pekalongan Selatan": [],
                    "Pekalongan Timur": [],
                    "Pekalongan Utara": [],
                    "Pulosari": [],
                    "Warungpring": []

                },
                "Pemalang": {
                    "Belik": [],
                    "Bodeh": [],
                    "Comal": [],
                    "Moga": [],
                    "Pemalang": [],
                    "Pulosari": [],
                    "Taman": [],
                    "Ulujami": [],

                },
                "Purbalingga": {
                    "Babakan": [],
                    "Banyumas": [],
                    "Candradimuka": [],
                    "Karanganyar": [],
                    "Karangmoncol": [],
                    "Karangreja": [],
                    "Kejobong": [],
                    "Kemangkon": [],
                    "Kertanegara": [],
                    "Kutasari": [],
                    "Mrebet": [],
                    "Padamara": [],
                    "Purbalingga": [],
                    "Rembang": [],
                    "Warungpring": []

                },
                "Purworejo": {
                    "Banyuurip": [],
                    "Bener": [],
                    "Binangun": [],
                    "Brondong": [],
                    "Giriwoyo": [],
                    "Kaligesing": [],
                    "Kebonarum": [],
                    "Kemiri": [],
                    "Kutoarjo": [],
                    "Loano": [],
                    "Pituruh": [],
                    "Purwodadi": [],
                    "Purworejo": [],
                    "Roban": [],
                    "Selomerto": [],
                    "Kaligesing": [],
                    "Sukoharjo": [],
                    "Wangon": []

                },
                "Rembang": {
                    "Bulu": [],
                    "Grobogan": [],
                    "Gunem": [],
                    "Kradenan": [],
                    "Lasem": [],
                    "Pamotan": [],
                    "Pancur": [],
                    "Rembang": [],
                    "Sedan": [],
                    "Sulang": [],

                },
                "Semarang": {
                    "Ambarawa": [],
                    "Bandungan": [],
                    "Banyubiru": [],
                    "Bawen": [],
                    "Bringin": [],
                    "Getasan": [],
                    "Jambu": [],
                    "Kaliwungu": [],
                    "Karangawen": [],
                    "Kendal": [],
                    "Klampok": [],
                    "Langon": [],
                    "Ngablak": [],
                    "Pabelan": [],
                    "Pagentan": [],
                    "Pringapus": [],
                    "Sumowono": [],
                    "Tengaran": [],
                    "Tuntang": [],
                    "Ungaran Barat": [],
                    "Ungaran Timur": []

                },
                "Sragen": {
                    "Binodadi": [],
                    "Bumiayu": [],
                    "Jenar": [],
                    "Jumiang": [],
                    "Kedawung": [],
                    "Masaran": [],
                    "Miri": [],
                    "Mondokan": [],
                    "Ngaringan": [],
                    "Plupuh": [],
                    "Sambirejo": [],
                    "Somagede": [],
                    "Sragen": [],
                    "Sukodono": [],
                    "Sumberlawang": [],
                    "Tangen": [],
                    "Tanon": [],

                },
                "Sukoharjo": {
                    "Baki": [],
                    "Banjaran": [],
                    "Bulakamba": [],
                    "Colomadu": [],
                    "Grogol": [],
                    "Karanganyar": [],
                    "Kartasura": [],
                    "Mojolaban": [],
                    "Nguter": [],
                    "Polokarto": [],
                    "Tawangsari": [],
                    "Weru": []

                },
                "Tegal": {
                    "Adiwerna": [],
                    "Bumiayu": [],
                    "Dukuhwaru": [],
                    "Jatinegara": [],
                    "Kedungbanteng": [],
                    "Kramat": [],
                    "Lebaksiu": [],
                    "Margaasih": [],
                    "Pangkah": [],
                    "Slawi": [],
                    "Surodadi": [],
                    "Talang": [],
                    "Tarub": [],
                    "Warureja": [],

                },
                "Temanggung": {
                    "Bancak": [],
                    "Bejen": [],
                    "Boja": [],
                    "Bulu": [],
                    "Candiroto": [],
                    "Gembong": [],
                    "Karanganyar": [],
                    "Kedu": [],
                    "Kledung": [],
                    "Kranggan": [],
                    "Ngadirejo": [],
                    "Parakan": [],
                    "Prambanan": [],
                    "Pringsurat": [],
                    "Selopampang": [],
                    "Temanggung": [],
                    "Tembarak": [],
                    "Tlogomulyo": [],
                    "Tremes": [],

                },
                "Wonogiri": {
                    "Baturetno": [],
                    "Binangun": [],
                    "Bulukerto": [],
                    "Eromoko": [],
                    "Girimarto": [],
                    "Giritontro": [],
                    "Giriwoyo": [],
                    "Jatipurno": [],
                    "Jatisrono": [],
                    "Karangtengah": [],
                    "Kismantoro": [],
                    "Manyaran": [],
                    "Ngadirojo": [],
                    "Purwantoro": [],
                    "Slogohimo": [],
                    "Tirtomoyo": [],
                    "Wuryantoro": [],

                },
                "Wonosobo": {
                    "Kaliwiro": [],
                    "Kalibawang": [],
                    "Kejajar": [],
                    "Kepil": [],
                    "Kertek": [],
                    "Leksono": [],
                    "Mojotengah": [],
                    "Sapuran": [],
                    "Selomerto": [],
                    "Sukoharjo": [],
                    "Wadaslintang": [],
                    "Watumalang": [],
                    "Wonosobo": [],

                }
            },
            "DI.Yogyakarta": {
                "Kab. Bantul": {
                    "Bambanglipuro": [],
                    "Banguntapan": [],
                    "Bantul": [],
                    "Dlingo": [],
                    "Imogiri": [],
                    "Jetis": [],
                    "Kasihan": [],
                    "Kretek": [],
                    "Pandak": [],
                    "Pajangan": [],
                    "Pleret": [],
                    "Piyungan": [],
                    "Pundong": [],
                    "Sanden": [],
                    "Sedayu": [],
                    "Srandakan": []


                },
                "Kab. Gunungkidul": {
                    "Gedangsari": [],
                    "Girisubo": [],
                    "KarangMojo": [],
                    "Nglipar": [],
                    "Ngawen": [],
                    "Paliyan": [],
                    "Panggang": [],
                    "Patuk": [],
                    "Ponjong": [],
                    "Playen": [],
                    "Purwosari": [],
                    "Rongkop": [],
                    "Saptosari": [],
                    "Semin": [],
                    "Semanu": [],
                    "Tanjungsari": [],
                    "Tepus": [],
                    "Wonosari": []

                },
                "Kab. Kulon Progo": {
                    "Galur": [],
                    "Girimulyo": [],
                    "Kalibawang": [],
                    "Kokap": [],
                    "Lendah": [],
                    "Nanggulan": [],
                    "Panjatan": [],
                    "Pengasih": [],
                    "Samigaluh": [],
                    "Sentolo": [],
                    "Temon": [],
                    "Wates": []

                },
                "Kab. Sleman": {
                    "Gamping": [],
                    "Godean": [],
                    "Kalasan": [],
                    "Minggir": [],
                    "Mlati": [],
                    "Moyudan": [],
                    "Ngaglik": [],
                    "Ngemplak": [],
                    "Pakem": [],
                    "Prambanan": [],
                    "Seyegan": [],
                    "Sleman": [],
                    "Tempel": [],
                    "Turi": []

                },
                "Kota Yogyakarta": {
                    "Baciro": [],
                    "Danurejan": [],
                    "Gedong Tengen": [],
                    "Gondokusuman": [],
                    "Gondomanan": [],
                    "Jetis": [],
                    "Kotabaru": [],
                    "Kotagede": [],
                    "Kraton": [],
                    "Mantrijeron": [],
                    "Mergangsan": [],
                    "Ngampilan": [],
                    "Pakualaman": [],
                    "Prawirodirjan": [],
                    "Purwokerto": [],
                    "Suryatmajan": [],
                    "Tegalrejo": [],
                    "Wirobrajan": []

                }
            }
            // Tambahkan lebih banyak data wilayah sesuai kebutuhan Anda
        };

        var provinsiSelect = document.getElementById("provinsi");
        var kabupatenSelect = document.getElementById("Kabupaten");
        var kecamatanSelect = document.getElementById("Kecamatan");
        var desaSelect = document.getElementById("Desa");

        // Mengisi dropdown provinsi saat halaman dimuat
        for (var provinsi in dataWilayah) {
            var option = document.createElement("option");
            option.value = provinsi;
            option.text = provinsi;
            provinsiSelect.add(option);
        }

        function updateKabupaten() {
            // Mengisi dropdown kabupaten/kota berdasarkan provinsi yang dipilih
            var provinsi = provinsiSelect.value;
            kabupatenSelect.innerHTML = "<option value=''>Pilih Kabupaten/Kota</option>";
            kecamatanSelect.innerHTML = "<option value=''>Pilih Kecamatan</option>";
            desaSelect.innerHTML = "<option value=''>Pilih Desa/Kelurahan</option>";

            if (provinsi in dataWilayah) {
                for (var kabupaten in dataWilayah[provinsi]) {
                    var option = document.createElement("option");
                    option.value = kabupaten;
                    option.text = kabupaten;
                    kabupatenSelect.add(option);
                }
            }
        }

        function updateKecamatan() {
            // Mengisi dropdown kecamatan berdasarkan kabupaten/kota yang dipilih
            var provinsi = provinsiSelect.value;
            var kabupaten = kabupatenSelect.value;
            kecamatanSelect.innerHTML = "<option value=''>Pilih Kecamatan</option>";
            desaSelect.innerHTML = "<option value=''>Pilih Desa/Kelurahan</option>";

            if (provinsi in dataWilayah && kabupaten in dataWilayah[provinsi]) {
                for (var kecamatan in dataWilayah[provinsi][kabupaten]) {
                    var option = document.createElement("option");
                    option.value = kecamatan;
                    option.text = kecamatan;
                    kecamatanSelect.add(option);
                }
            }
        }

        // function updateDesa() {
        //     // Mengisi dropdown desa/kelurahan berdasarkan kecamatan yang dipilih
        //     var provinsi = provinsiSelect.value;
        //     var kabupaten = kabupatenSelect.value;
        //     var kecamatan = kecamatanSelect.value;
        //     desaSelect.innerHTML = "<option value=''>Pilih Desa/Kelurahan</option>";

        //     if (provinsi in dataWilayah && kabupaten in dataWilayah[provinsi] && kecamatan in dataWilayah[provinsi][
        //             kabupaten
        //         ]) {
        //         var desaOptions = dataWilayah[provinsi][kabupaten][kecamatan];
        //         for (var i = 0; i < desaOptions.length; i++) {
        //             var option = document.createElement("option");
        //             option.value = desaOptions[i];
        //             option.text = desaOptions[i];
        //             desaSelect.add(option);
        //         }
        //     }
        // }
    </script>
@endsection
