@extends('layout.main')
@section('container')

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Daftar Daerah Irigasi P3-TGAI</h5>
            <form action="/dashboard/daerah-irigasi">
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
            <div class="mt-2 mb-2">
                <a href="/dashboard/create" class="btn btn-info">Tambah Daerah Irigasi</a>
            </div>
            <div class="card">
                <div class="card-body">
                    {{-- <form method="post" action="/dashboard/item" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="DaerahIrigasi" class="form-label">Daerah Irigasi</label>
                            <input type="text" class="form-control" id="DaerahIrigasi" placeholder="Daerah Irigasi"
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="DaerahIrigasi" class="form-label">Total Saluran Irigasi Tersier & Irigasi Desa
                                Terbangun</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="DaerahIrigasi" placeholder="Daerah Irigasi"
                                    required>
                                <span class="input-group-text">M<sup>2</sup></span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="DaerahIrigasi" class="form-label">Total Saluran Irigasi Tersier & Irigasi Desa
                                Belum
                                Terbangun</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="DaerahIrigasi" placeholder="Daerah Irigasi"
                                    required>
                                <span class="input-group-text">M<sup>2</sup></span>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="DaerahIrigasi" class="form-label">Pola Tanam Saat Ini</label>
                            <input type="text" class="form-control" id="DaerahIrigasi" placeholder="Daerah Irigasi"
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="DaerahIrigasi" class="form-label">Jenis Vegetasi</label>
                            <input type="text" class="form-control" id="DaerahIrigasi" placeholder="Daerah Irigasi"
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="DaerahIrigasi" class="form-label">Mendapatkan P4-ISDA/P3-TGAI</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="DaerahIrigasi" placeholder="Daerah Irigasi"
                                    required>
                                <span class="input-group-text">Kali</sup></span>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="DaerahIrigasi" class="form-label">Tahun Mendapatkan</label>
                            <input type="text" class="form-control" id="DaerahIrigasi" placeholder="Daerah Irigasi"
                                required>
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
                                id="peta_pdf" name="peta_pdf" accept="application/pdf" required>
                            <h6>PDF Max 1 MB</h6>

                            @if ($errors->has('peta_pdf'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('peta_pdf') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="mt-3 mb-3">
                            <label for="pdf">Skema jaringan Irigasi</label>
                            <input type="file" class="form-control @error('jaringan_pdf') is-invalid @enderror"
                                id="jaringan_pdf" name="jaringan_pdf" accept="application/pdf" required>
                            <div class="form-text">PDF Max 5 MB
                            </div>

                            @if ($errors->has('jaringan_pdf'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('jaringan_pdf') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="mt-3 mb-3">
                            <label for="pdf">Dokumentasi Saluran Irigasi Tersier</label>
                            <input type="file" class="form-control @error('dokumentasi_pdf') is-invalid @enderror"
                                id="dokumentasi_pdf" name="dokumentasi_pdf" accept="application/pdf" required>
                            <div class="form-text">PDF Max 5 MB
                            </div>

                            @if ($errors->has('jaringan_pdf'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('jaringan_pdf') }}</strong>
                            </span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection