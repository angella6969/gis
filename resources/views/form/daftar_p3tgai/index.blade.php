@extends('layout.main')
@section('container')

<style>
    .table th,
    .table td {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        /* Menyisipkan elipsis (...) jika teks terlalu panjang */
        max-width: 250px;
        /* Atur lebar maksimum sesuai kebutuhan Anda */
        vertical-align: top;
        padding: 5px;
    }

    .card {
        max-width: 100%;
        /* Atur lebar maksimum kartu sesuai kebutuhan */
        overflow-x: auto;
        /* Aktifkan scroll horizontal jika tabel melebihi lebar kartu */
    }
</style>

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
                <a href="/dashboard/update/perkembangan-daerah-irigasi" class="btn btn-info">Update Progres Daerah
                    Irigasi</a>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive-sm">
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Daerah Irigasi </th>
                                    <th scope="col">Nama P3A/GP3A</th>
                                    <th scope="col">Total Irigasi Desa Terbangun</th>
                                    <th scope="col">Total Irigasi Desa Belum Terbangun</th>
                                    <th scope="col">Pola Tanam Saat Ini </th>
                                    <th scope="col">Jenis Vegetasi </th>
                                    <th scope="col">Mendapatkan P4-ISDA/P3-TGAI</th>
                                    <th scope="col">Tahun Mendapatkan</th>
                                    <th scope="col">Kabupaten</th>
                                    <th scope="col">Kecamatan </th>
                                    <th scope="col">Desa</th>
                                    <th scope="col">Peta Desa </th>
                                    <th scope="col">Skema Jaringan Irigasi </th>
                                    <th scope="col">Dokumentasi Saluran Irigasi Tersier</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($a as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        @if ($item->image)
                                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}"
                                            width="100">
                                        @endif
                                    </td>
                                    <td> {{ $item->name }}</td>
                                    <td> {{ $item->total }}</td>
                                    <td> {{ $item->brand }}</td>
                                    <td>
                                        <a href="/dashboard/item/detail/{{ $item->name }}/{{ $item->category_id }}"
                                            class="badge bg-success border-0 "><span data-feather="eye"></span></a>

                                        <a href="/dashboard/item/update/{{ $item->name }}/{{ $item->category_id }}"
                                            class="badge bg-warning border-0 "><span data-feather="edit"></span></a>

                                        <form action="/dashboard/item/{{ $item->name }}/{{ $item->category_id }}"
                                            class="d-inline" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="badge bg-danger border-0"
                                                onclick="return confirm('Yakin Ingin Menghapus Data yang berhubungan dengan? {{ $item->name }}')"><span
                                                    data-feather="file-minus"></span></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection