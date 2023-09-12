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
            padding: 10px;
            text-align: center;
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
                <h5 class="card-title fw-semibold mb-4">Progres Perkembangan Irigasi P3-TGAI</h5>
                {{-- <form action="/dashboard/daerah-irigasi">
                    <div class="row">
                        <div class="col-6 col-sm-12">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control " placeholder="Pencarian Berdasarkan Daerah Irigasi"
                                    name="search" value="{{ request('search') }}">
                                <button class="btn btn-primary " type="submit" id="basic-addon2">Search</button>
                            </div>
                        </div>
                    </div>
                </form> --}}


                <div class="card">
                    <div class="card-body">
                        <div class="mt-2 mb-2">
                            <a href="/dashboard/update/perkembangan-daerah-irigasi/create/{{ $penerimas->id }}"
                                class="btn btn-info">Tambah Progres</a>

                        </div>
                        <h1 style="text-align: center;">Data Utama</h1>
                        <div class="table-responsive-sm">
                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr style="text-align: center; background-color: lightblue;">
                                        <th scope="col">Daerah Irigasi </th>
                                        <th scope="col">Nama P3A/GP3A</th>
                                        <th scope="col">Kabupaten</th>
                                        <th scope="col">Kecamatan </th>
                                        <th scope="col">Desa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $totalRows = 1; // Satu baris data
                                        $rowCounter = 1; // Nomor urutan (jika hanya satu baris)
                                    @endphp
                                    <tr>
                                        {{-- <td>{{ $rowCounter }}</td> --}}
                                        <td>{{ $penerimas->DaerahIrigasi }}</td>
                                        <td>{{ $penerimas->names }}</td>
                                        <td>{{ $penerimas->Kabupaten }}</td>
                                        <td>{{ $penerimas->Kecamatan }}</td>
                                        <td>{{ $penerimas->Desa }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-body">
                        <h1 style="text-align: center; ">Progres Tahunan</h1>
                        <div class="table-responsive-sm">
                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr style="text-align: center; background-color: lightblue;">
                                        {{-- <th scope="col">No</th> --}}
                                        <th scope="col">Tahun Pengerjaan </th>
                                        <th scope="col">jenis Pekerjaan</th>
                                        <th scope="col">langsir Material</th>
                                        <th scope="col">jarak Langsir</th>
                                        <th scope="col">Beda Langsir</th>
                                        <th scope="col">Jenis Vegetasi </th>
                                        <th scope="col">Metode Langsir</th>
                                        <th scope="col">Kondisi Lokasi Pekerjaan</th>
                                        <th scope="col">Kondisi Tanah Lokasi Pekerjaan</th>
                                        <th scope="col">Potensi Masalah Sosial </th>
                                        <th scope="col">Aksi </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($progress as $progres)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td> {{ $progres->TahunPengerjaan }}</td>
                                            <td> {{ $progres->jenisPekerjaan }}</td>
                                            <td> {{ $progres->langsirMaterial }}</td>
                                            <td> {{ $progres->jarakLangsir }}</td>
                                            <td> {{ $progres->bedaLangsir }}</td>
                                            <td> {{ $progres->metodeLangsir }}</td>
                                            <td> {{ $progres->KondisiLokasiPekerjaan }}</td>
                                            <td> {{ $progres->KondisiTanahLokasiPekerjaan }}</td>
                                            <td> {{ $progres->PotensiMasalahSosial }}</td>
                                            <td>
                                                <a href="#" class="badge bg-warning border-0 "><span
                                                        data-feather="edit"></span></a>

                                                <form action="#" class="d-inline" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="badge bg-danger border-0"
                                                        onclick="return confirm('Yakin Ingin Menghapus Data yang berhubungan dengan? {{ $progres->DaerahIrigasi }}')"><span
                                                            data-feather="file-minus"></span></button>
                                                </form>
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

    <script>
        @if (Session::has('success'))
            iziToast.success({
                title: 'success',
                message: '{{ Session::get('success') }}',
                position: 'topRight',
            });
        @endif
    </script>
@endsection
