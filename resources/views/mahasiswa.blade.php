@extends('layout')

@section('title', $judul)

@section('content')
<h1 class="judul-halaman text-center">{{ $judul }}</h1>
<p class="sub-judul">Total {{ count($mahasiswa) }} mahasiswa terdaftar</p>

<div class="card kartu">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-striped table-hover tabel-pastel align-middle mb-0">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Gender</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($mahasiswa as $mhs)
                    <tr>
                        <td class="fw-semibold">{{ $mhs['nama'] }}</td>
                        <td>{{ $mhs['alamat'] }}</td>
                        <td class="text-center">
                            <span class="badge-gender {{ $mhs['gender'] === 'L' ? 'badge-l' : 'badge-p' }}">
                                {{ $mhs['gender'] }}
                            </span>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="text-center">Belum ada data.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection