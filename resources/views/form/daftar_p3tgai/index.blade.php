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
                <h5 class="card-title fw-semibold mb-4">Daftar Daerah Irigasi Penerima P3-TGAI</h5>
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
                    <a href="/dashboard/daerah-irigasi/create" class="btn btn-info">Tambah Daerah Irigasi</a>

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
                                            <td>{{ $loop->iteration }}</td>
                                            <td> {{ $penerima->DaerahIrigasi }}</td>
                                            <td> {{ $penerima->names }}</td>
                                            <td> {{ $penerima->Kabupaten }}</td>
                                            <td> {{ $penerima->Kecamatan }}</td>
                                            <td> {{ $penerima->Desa }}</td>
                                            <td>
                                                {{-- <a href="/dashboard/daerah-irigasi/{{$penerima->id}}/edit" class="badge bg-success border-0 "><span
                                                data-feather="eye"></span></a> --}}
                                                {{-- <button> modal</button> --}}
                                                {{-- <a href="/dashboard/update/perkembangan-daerah-irigasi/create/{{ $penerima->id }}"
                                                    class="btn btn-info">Progres</a> --}}
                                                <a href="/dashboard/update/perkembangan-daerah-irigasi/{{ $penerima->id }}"
                                                    class="btn btn-info">Progres</a>
                                                <a href="/dashboard/daerah-irigasi/{{ $penerima->id }}/edit"
                                                    class="badge bg-warning border-0 "><span data-feather="edit"></span></a>
                                                
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
