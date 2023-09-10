@extends('layout.main')
@section('container')

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Daftar Daerah Irigasi P3-TGAI</h5>
            <div class="card">
                <div class="card-body">
                    <form method="post" action="/dashboard/create" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="DaerahIrigasi" class="form-label">Daerah Irigasi</label>
                            <input type="text" class="form-control" id="DaerahIrigasi" name="DaerahIrigasi" placeholder="Daerah Irigasi"
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="IrigasiDesaTerbangun" class="form-label">Total Saluran Irigasi Tersier & Irigasi
                                Desa Terbangun</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="IrigasiDesaTerbangun" name="IrigasiDesaTerbangun"
                                    placeholder="Total Saluran Irigasi Tersier & Irigasi Desa Terbangun" required>
                                <span class="input-group-text">M<sup>2</sup></span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="IrigasiDesaBelumTerbangun" class="form-label">Total Saluran Irigasi Tersier &
                                Irigasi Desa Belum Terbangun</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="IrigasiDesaBelumTerbangun" name="IrigasiDesaBelumTerbangun"
                                    placeholder="Total Saluran Irigasi Tersier & Irigasi Desa Belum Terbangun" required>
                                <span class="input-group-text">M<sup>2</sup></span>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="PolaTanamSaatIni" class="form-label">Pola Tanam Saat Ini</label>
                            <input type="text" class="form-control" id="PolaTanamSaatIni" name="PolaTanamSaatIni"
                                placeholder="Pola Tanam Saat Ini" required>
                        </div>

                        <div class="mb-3">
                            <label for="JenisVegetasi" class="form-label">Jenis Vegetasi</label>
                            <input type="text" class="form-control" id="JenisVegetasi" name="JenisVegetasi" placeholder="Jenis Vegetasi"
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="MendapatkanP4-ISDA" class="form-label">Mendapatkan P4-ISDA/P3-TGAI</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="MendapatkanP4-ISDA" name="MendapatkanP4-ISDA"
                                    placeholder="Mendapatkan P4-ISDA/P3-TGAI" required>
                                <span class="input-group-text">Kali</sup></span>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="TahunMendapatkan" class="form-label">Tahun Mendapatkan</label>
                            <input type="text" class="form-control" id="TahunMendapatkan" name="TahunMendapatkan"
                                placeholder="Tahun Mendapatkan" required>
                        </div>

                        <div class="mt-3 mb-3">
                            <label for="names">Nama P3A/GP3A</label>
                            <div id="nama-container">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="names[]" placeholder="Nama P3A/GP3A"
                                        required>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button"
                                            onclick="addNamaField()">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-3 mb-3">
                            <label for="peta_pdf">Peta Desa</label>
                            <input type="file" class="form-control @error('peta_pdf') is-invalid @enderror"
                                id="peta_pdf" name="peta_pdf" accept="application/pdf" >
                            <h6>PDF Max 1 MB</h6>

                        </div>

                        <div class="mt-3 mb-3">
                            <label for="pdf">Skema jaringan Irigasi</label>
                            <input type="file" class="form-control @error('jaringan_pdf') is-invalid @enderror"
                                id="jaringan_pdf" name="jaringan_pdf" accept="application/pdf" >
                            <div class="form-text">PDF Max 5 MB
                            </div>

                        </div>

                        <div class="mt-3 mb-3">
                            <label for="pdf">Dokumentasi Saluran Irigasi Tersier</label>
                            <input type="file" class="form-control @error('dokumentasi_pdf') is-invalid @enderror"
                                id="dokumentasi_pdf" name="dokumentasi_pdf" accept="application/pdf" >
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