@extends('layout.main')
@section('container')

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Progres Perkembangan Irigasi P3-TGAI</h5>
            <form action="/dashboard/update/perkembangan-daerah-irigasi">
                <div class="row">
                    <div class="col-6 col-sm-12">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Pencarian Berdasarkan Daerah Irigasi"
                                name="search" value="{{ request('search') }}">
                            <button class="btn btn-primary" type="submit" id="basic-addon2">Search</button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="card">
                <div class="card-body">
                    <form method="post" action="/dashboard/update/perkembangan-daerah-irigasi"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="DaerahIrigasi" class="form-label">Daerah Irigasi</label>
                            <input type="text" class="form-control" id="DaerahIrigasi" placeholder="Daerah Irigasi"
                                disabled>
                        </div>

                        <div class="mt-3 mb-3">
                            <label for="names" class="form-label">Nama P3A/GP3A</label>
                            <div id="nama-container">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="names[]" placeholder="Nama P3A/GP3A"
                                        disabled>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button"
                                            onclick="addNamaField()">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-3 mb-3">
                            <label for="jenisPekerjaan" class="form-label">Jenis Pekerjaan</label>
                            <select class="form-select" id="jenisPekerjaan" required>
                                <option value="">Pilih salah satu opsi</option>
                                <option value="Rehabilitasi">Rehabilitasi</option>
                                <option value="Peningkatan">Peningkatan</option>
                                <option value="Pembangunan">Pembangunan</option>
                            </select>
                        </div>
                        <div class="mt-3 mb-3">
                            <label for="langsirMaterial" class="form-label">Langsir Material</label>
                            <select class="form-select" id="langsirMaterial" required>
                                <option value="">Pilih salah satu opsi</option>
                                <option value="Ada">Ada</option>
                                <option value="Tidak Ada">Tidak Ada</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="jarakLangsir" class="form-label">Jarak Langsir</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="jarakLangsir" placeholder="jarak Langsir"
                                    required>
                                <span class="input-group-text">M<sub>1</sup></span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="Beda Tinggi Langsir" class="form-label">Jarak Langsir</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="Beda Langsir"
                                    placeholder="Beda Tinggi Langsir" required>
                                <span class="input-group-text">M<sub>1</sup></span>
                            </div>
                        </div>
                        <div class="mt-3 mb-3">
                            <label for="metodeLangsir" class="form-label">Metode Langsir</label>
                            <select class="form-select" id="metodeLangsir" name="metodeLangsir" required>
                                <option value="">Pilih salah satu opsi</option>
                                <option value="Tenaga Manusia Dengan Ember/Pikulan/Karung">Tenaga Manusia Dengan
                                    Ember/Pikulan/Karung</option>
                                <option value="Tenaga Manusia Dengan Angkong">Tenaga Manusia Dengan Angkong</option>
                                <option value="Menggunakan Sepeda Motor">Menggunakan Sepeda Motor</option>
                                <option value="Menggunakan Talang">Menggunakan Talang</option>
                                <option value="Menggunakan Perahu">Menggunakan Perahu</option>
                                <option value="Menggunakan Seling">Menggunakan Seling</option>
                                <option value="lainnya">Pilihan Lainnya</option>
                            </select>
                        </div>

                        <div id="inputLainnyaMetode" style="display: none;">
                            <label for="pilihanLainnyaMetode">Pilihan Lainnya:</label>
                            <input type="text" class="form-control" id="pilihanLainnyaMetode"
                                name="pilihanLainnyaMetode">
                        </div>

                        <div class="mt-3 mb-3">
                            <label for="KondisiLokasiPekerjaan" class="form-label">Kondisi Lokasi Pekerjaan</label>
                            <select class="form-select" id="KondisiLokasiPekerjaan" name="KondisiLokasiPekerjaan"
                                required>
                                <option value="">Pilih salah satu opsi</option>
                                <option value="Datar">Datar</option>
                                <option value="Sebagian Datar Sebagian Terjal">Sebagian Datar Sebagian Terjal</option>
                                <option value="Melewati Saluran">Melewati Saluran</option>
                                <option value="Melewati Jalan">Melewati Jalan</option>
                                <option value="Ada Galian Tebing">Ada Galian Tebing</option>
                                <option value="Ada Timbunan">Ada Timbunan</option>
                                <option value="lainnya">Lainnya</option>
                            </select>
                        </div>

                        <div id="inputLainnyaKondisiLokasiPekerjaan" style="display: none;">
                            <label for="pilihanLainnyaKondisiLokasiPekerjaan">Pilihan Lainnya:</label>
                            <input type="text" class="form-control" id="pilihanLainnyaKondisiLokasiPekerjaan"
                                name="pilihanLainnyaKondisiLokasiPekerjaan">
                        </div>

                        <div class="mt-3 mb-3">
                            <label for="KondisiTanahLokasiPekerjaan" class="form-label">Kondisi Tanah Lokasi
                                Pekerjaan</label>
                            <select class="form-select" id="KondisiTanahLokasiPekerjaan"
                                name="KondisiTanahLokasiPekerjaan" required>
                                <option value="">Pilih salah satu opsi</option>
                                <option value="Kering">Kering</option>
                                <option value="Berair">Berair</option>
                                <option value="Daya dukung kuat atau bagus">Daya dukung kuat atau bagus</option>
                                <option value="Daya dukung rendah (mudah ambles)">Daya dukung rendah (mudah ambles)
                                </option>
                                <option value="lainnya">Lainnya</option>
                            </select>
                        </div>

                        <div id="inputLainnyaKondisiTanahLokasiPekerjaan" style="display: none;">
                            <label for="pilihanLainnyaKondisiTanahLokasiPekerjaan">Pilihan Lainnya:</label>
                            <input type="text" class="form-control" id="pilihanLainnyaKondisiTanahLokasiPekerjaan"
                                name="pilihanLainnyaKondisiTanahLokasiPekerjaan">
                        </div>

                        <div class="mt-3 mb-3">
                            <label for="PotensiMasalahSosial" class="form-label">Potensi Masalah Sosial</label>
                            <select class="form-select" id="PotensiMasalahSosial" name="PotensiMasalahSosial" required>
                                <option value="">Pilih salah satu opsi</option>
                                <option value="Tidak Ada">Tidak Ada</option>
                                <option value="Saat Musim Panen tenaga kerja tidak ada">Saat Musim Panen tenaga kerja
                                    tidak ada</option>
                                <option value="Tenaga Kerja Upah Tinggi">Tenaga Kerja Upah Tinggi</option>
                                <option value="Sering libur krn kearifan lokal">Sering libur krn kearifan lokal</option>
                                <option value="Antara Desa dan P3A kurang harmonis">Antara Desa dan P3A kurang harmonis
                                </option>
                                <option value="Kondisi internal P3A kurang solid">Kondisi internal P3A kurang solid
                                </option>
                                <option value="Kepala Desa sangat dominan">Kepala Desa sangat dominan</option>
                                <option value="Ada tokoh masyarakat yang sangat dominan">Ada tokoh masyarakat yang
                                    sangat dominan</option>
                                <option value="lainnya">Lainnya</option>
                            </select>
                        </div>

                        <div id="inputLainnyaPotensiMasalahSosial" style="display: none;">
                            <label for="pilihanLainnyaPotensiMasalahSosial">Pilihan Lainnya:</label>
                            <input type="text" class="form-control" id="pilihanLainnyaPotensiMasalahSosial"
                                name="pilihanLainnyaPotensiMasalahSosial">
                        </div>

                        <div class="mt-3 mb-3">
                            <label for="TerlampirAktePendirian">Terlampir Akte Pendirian</label>
                            <input type="file"
                                class="form-control @error('TerlampirAktePendirian') is-invalid @enderror"
                                id="TerlampirAktePendirian" name="TerlampirAktePendirian" accept="application/pdf"
                                required>
                            <h6>PDF Max 1 MB</h6>

                        </div>

                        <div class="mt-3 mb-3">
                            <label for="TerlampirNPWP">Terlampir NPWP</label>
                            <input type="file" class="form-control @error('jaringan_pdf') is-invalid @enderror"
                                id="TerlampirNPWP" name="TerlampirNPWP" accept="application/pdf" required>
                            <div class="form-text">PDF Max 5 MB
                            </div>

                        </div>

                        <div class="mt-3 mb-3">
                            <label for="TerlampirBukuRekening">Terlampir Buku Rekening</label>
                            <input type="file" class="form-control @error('TerlampirBukuRekening') is-invalid @enderror"
                                id="TerlampirBukuRekening" name="TerlampirBukuRekening" accept="application/pdf"
                                required>
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

<script>
    const metodeLangsir = document.getElementById('metodeLangsir');
    const inputLainnyaMetode = document.getElementById('inputLainnyaMetode');
    const pilihanLainnyaMetode = document.getElementById('pilihanLainnyaMetode');

    metodeLangsir.addEventListener('change', function () {
        if (metodeLangsir.value === 'lainnya') {
            inputLainnyaMetode.style.display = 'block';
            pilihanLainnyaMetode.required = true;
        } else {
            inputLainnyaMetode.style.display = 'none';
            pilihanLainnyaMetode.required = false;
        }
    });

    const kondisiLokasiPekerjaan = document.getElementById('KondisiLokasiPekerjaan');
    const inputLainnyaKondisiLokasiPekerjaan = document.getElementById('inputLainnyaKondisiLokasiPekerjaan');
    const pilihanLainnyaKondisiLokasiPekerjaan = document.getElementById('pilihanLainnyaKondisiLokasiPekerjaan');

    kondisiLokasiPekerjaan.addEventListener('change', function () {
        if (kondisiLokasiPekerjaan.value === 'lainnya') {
            inputLainnyaKondisiLokasiPekerjaan.style.display = 'block';
            pilihanLainnyaKondisiLokasiPekerjaan.required = true;
        } else {
            inputLainnyaKondisiLokasiPekerjaan.style.display = 'none';
            pilihanLainnyaKondisiLokasiPekerjaan.required = false;
        }
    });

    const kondisiTanahLokasiPekerjaan = document.getElementById('KondisiTanahLokasiPekerjaan');
    const inputLainnyaKondisiTanahLokasiPekerjaan = document.getElementById('inputLainnyaKondisiTanahLokasiPekerjaan');
    const pilihanLainnyaKondisiTanahLokasiPekerjaan = document.getElementById('pilihanLainnyaKondisiTanahLokasiPekerjaan');

    kondisiTanahLokasiPekerjaan.addEventListener('change', function () {
        if (kondisiTanahLokasiPekerjaan.value === 'lainnya') {
            inputLainnyaKondisiTanahLokasiPekerjaan.style.display = 'block';
            pilihanLainnyaKondisiTanahLokasiPekerjaan.required = true;
        } else {
            inputLainnyaKondisiTanahLokasiPekerjaan.style.display = 'none';
            pilihanLainnyaKondisiTanahLokasiPekerjaan.required = false;
        }
    });

    const potensiMasalahSosial = document.getElementById('PotensiMasalahSosial');
    const inputLainnyaPotensiMasalahSosial = document.getElementById('inputLainnyaPotensiMasalahSosial');
    const pilihanLainnyaPotensiMasalahSosial = document.getElementById('pilihanLainnyaPotensiMasalahSosial');

    potensiMasalahSosial.addEventListener('change', function () {
        if (potensiMasalahSosial.value === 'lainnya') {
            inputLainnyaPotensiMasalahSosial.style.display = 'block';
            pilihanLainnyaPotensiMasalahSosial.required = true;
        } else {
            inputLainnyaPotensiMasalahSosial.style.display = 'none';
            pilihanLainnyaPotensiMasalahSosial.required = false;
        }
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

@endsection