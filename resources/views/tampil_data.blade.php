@extends('dashboard')

@section('content')
<h1>{{ $judul }}</h1>

<p><a href="/employe/create"><button>Tambah Data</button></a></p>

<table border="1" align="center">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Gender</th>
        <th>Gaji</th>
        <th>Aksi</th>
    </tr>
    @forelse ($employes as $row)
    <tr>
        <td>{{ $row->id }}</td>
        <td>{{ $row->nama }}</td>
        <td>{{ $row->alamat }}</td>
        <td>{{ $row->gender }}</td>
        <td>{{ $row->gaji }}</td>
        <td>
            <a href="/employe/edit/{{ $row->id }}"><button>Edit</button></a>

            <form method="post" action="/employe/{{ $row->id }}" style="display: inline-block;"
                  onsubmit="return confirm('Yakin nih?')">
                @method('delete')
                @csrf
                <button>Delete</button>
            </form>
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="6" align="center">Belum ada data.</td>
    </tr>
    @endforelse
</table>
@endsection