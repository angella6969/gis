@extends('layout.main')
@section('container')
    <style>
        .table {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            /* Atur bayangan tabel */
            transition: box-shadow 0.3s ease;
            /* Efek transisi saat bayangan berubah */
        }

        .table:hover {
            box-shadow: 0 8px 12px rgba(230, 138, 38, 0.9);
            /* Bayangan saat cursor dihover */
        }

        .table th,
        .table td {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 250px;
            vertical-align: top;
            padding: 5px;
        }

        .card {
            max-width: 100%;
            overflow-x: auto;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.);
            transition: box-shadow 0.3s ease;
        }

        .card:hover {
            box-shadow: 0 8px 12px rgba(230, 138, 38, 1);
        }

        .button1:hover {
            box-shadow: 0 8px 12px rgba(92, 133, 251, 1);
        }

        .input-group:hover input[type="text"] {
            /* border-color: #93fa0c; */
            /* Warna border saat dihover */
            /* box-shadow: 0 0 5px rgba(230, 138, 38, 1); */
            /* Efek bayangan saat dihover */
        }
    </style>

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Daftar Penerima P3-TGAI</h5>
                <form action="/dashboard/daerah-irigasi">
                    <div class="row">
                        <div class="col-6 col-sm-12">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control " placeholder="Pencarian Berdasarkan Daerah Irigasi"
                                    name="search" value="{{ request('search') }}">
                                <button class="btn btn-primary " type="submit" id="basic-addon2">Search</button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="mt-2 mb-2">
                    <a href="/dashboard/daerah-irigasi/create" class="btn btn-info">Tambah Data</a>

                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive-sm">
                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th scope="col">No</th>
                                        <th scope="col">Daerah Irigasi </th>
                                        <th scope="col">Nama P3A/GP3A</th>
                                        {{-- <th scope="col">Total Irigasi Desa Terbangun</th>
                                    <th scope="col">Total Irigasi Desa Belum Terbangun</th>
                                    <th scope="col">Pola Tanam Saat Ini </th>
                                    <th scope="col">Jenis Vegetasi </th>
                                    <th scope="col">Mendapatkan P4-ISDA/P3-TGAI</th>
                                    <th scope="col">Tahun Mendapatkan</th> --}}
                                        <th scope="col">Kabupaten</th>
                                        <th scope="col">Kecamatan </th>
                                        <th scope="col">Desa</th>
                                        <th scope="col">Aksi</th>
                                        {{-- <th scope="col">Peta Desa </th> --}}
                                        {{-- <th scope="col">Skema Jaringan Irigasi </th>
                                    <th scope="col">Dokumentasi Saluran Irigasi Tersier</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($penerimas as $penerima)
                                        <tr style="text-align: center;">
                                            <td> {{ $loop->iteration }}</td>
                                            <td> {{ $penerima->daerahIrigasi->nama }}</td>
                                            <td> {{ $penerima->names }}</td>
                                            <td> {{ $penerima->Kabupaten }}</td>
                                            <td> {{ $penerima->Kecamatan }}</td>
                                            <td> {{ $penerima->Desa }}</td>
                                            <td>
                                                <button class="btn badge bg-info border-0 show-DI-modal"
                                                    data-id="{{ $penerima->id }}"
                                                    data-daerah_irigasi_id="{{ $penerima->daerahIrigasi->nama }}"
                                                    data-kabupaten="{{ $penerima->Kabupaten }}"
                                                    data-kecamatan="{{ $penerima->Kecamatan }}"
                                                    data-desa="{{ $penerima->Desa }}" data-names="{{ $penerima->names }}"
                                                    data-IrigasiDesaTerbangun="{{ $penerima->IrigasiDesaTerbangun }}"
                                                    data-irigasiDesaBelumTerbangun="{{ $penerima->IrigasiDesaBelumTerbangun }}"
                                                    data-polaTanamSaatIni="{{ $penerima->PolaTanamSaatIni }}"
                                                    data-jenisVegetasi="{{ $penerima->JenisVegetasi }}"
                                                    data-mendapatkanP4_ISDA="{{ $penerima->MendapatkanP4_ISDA }}"
                                                    data-tahunMendapatkan="{{ $penerima->TahunMendapatkan }}">
                                                    <span data-feather="eye">
                                                </button>
                                                <a href="/dashboard/update/perkembangan-daerah-irigasi/{{ $penerima->id }}"
                                                    class="btn btn-info">Progres</a>
                                                <a href="/dashboard/daerah-irigasi/{{ $penerima->id }}/edit"
                                                    class="badge bg-warning border-0 "><span data-feather="edit">
                                                    </span>Edit</a>

                                                {{-- <form action="/dashboard/daerah-irigasi/{{ $penerima->id }}"
                                                    class="d-inline" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="badge bg-danger border-0"
                                                        onclick="return confirm('Yakin Ingin Menghapus Data yang berhubungan dengan? {{ $penerima->DaerahIrigasi }}')"><span
                                                            data-feather="file-minus"></span></button>
                                                </form> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="progresModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Daerah Irigasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="progresModalBody">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Ketika tombol "Tampilkan Data" di klik
            $('.show-DI-modal').on('click', function() {
                // Ambil data dari atribut data
                var id = $(this).data('id');
                var daerah_irigasi_id = $(this).data('daerah_irigasi_id');
                var Kabupaten = $(this).data('kabupaten');
                var Kecamatan = $(this).data('kecamatan');
                var Desa = $(this).data('desa');
                var irigasiDesaTerbangun = $(this).data('IrigasiDesaTerbangun');
                var IrigasiDesaBelumTerbangun = $(this).data('irigasiDesaBelumTerbangun');
                var PolaTanamSaatIni = $(this).data('polaTanamSaatIni');
                var JenisVegetasi = $(this).data('jenisVegetasi');
                var MendapatkanP4_ISDA = $(this).data('mendapatkanP4_ISDA');
                var TahunMendapatkan = $(this).data('tahunMendapatkan');

                console.log(daerah_irigasi_id);
                console.log(id);
                console.log(Kabupaten);
                console.log(Kecamatan);
                console.log(Desa);
                console.log(irigasiDesaTerbangun);

                // Tampilkan data dalam modal dengan tabel horizontal
                $('#progresModalBody').html(`
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <td>${id}</td>
                        </tr>
                        <tr>
                            <th>Daerah Irigasi</th>
                            <td>${daerah_irigasi_id}</td>
                        </tr>
                        <tr>
                            <th>Kabupaten</th>
                            <td>${Kabupaten}</td>
                        </tr>
                        <tr>
                            <th>Kecamatan</th>
                            <td>${Kecamatan}</td>
                        </tr>
                        <tr>
                            <th>Desa</th>
                            <td>${Desa}</td>
                        </tr>
                        <tr>
                            <th>Irigasi Desa Terbangun</th>
                            <td>${irigasiDesaTerbangun}</td>
                        </tr>
                        <tr>
                            <th>Irigasi Desa Belum Terbangun</th>
                            <td>${IrigasiDesaBelumTerbangun}</td>
                        </tr>
                        <tr>
                            <th>Pola Tanam Saat Ini</th>
                            <td>${PolaTanamSaatIni}</td>
                        </tr>
                        <tr>
                            <th>Jenis Vegetasi</th>
                            <td>${JenisVegetasi}</td>
                        </tr>
                        <tr>
                            <th>Mendapatkan P4_ISDA</th>
                            <td>${MendapatkanP4_ISDA}</td>
                        </tr>
                        <tr>
                            <th>Tahun Mendapatkan</th>
                            <td>${TahunMendapatkan}</td>
                        </tr>
                    </table>
                `);

                // Tampilkan modal
                $('#progresModal').modal('show');
            });
        });
    </script>
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
@endsection
