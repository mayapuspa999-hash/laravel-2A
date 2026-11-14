@extends('layout')

@section('title', $judul)

@section('content')
<h1 class="judul-halaman text-center">{{ $judul }}</h1>
<p class="sub-judul">Hitung luas segitiga dari alas dan tinggi</p>

<div class="row justify-content-center">
    <div class="col-md-6 col-lg-5">
        <div class="card kartu">
            <div class="card-body p-4">

                <div class="ikon-segitiga"></div>
                <p class="catatan-rumus">Rumus: Luas = &frac12; &times; alas &times; tinggi</p>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form method="post" action="{{ url('/kalkulator/segitiga') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="alas" class="form-label">Alas</label>
                        <input type="number" step="any" class="form-control" id="alas"
                               name="alas" value="{{ old('alas', $alas) }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="tinggi" class="form-label">Tinggi</label>
                        <input type="number" step="any" class="form-control" id="tinggi"
                               name="tinggi" value="{{ old('tinggi', $tinggi) }}" required>
                    </div>
                    <button type="submit" class="btn btn-pastel w-100">HITUNG</button>
                </form>

                @if ($hasil !== null)
                <div class="alert alert-success hasil mt-4 mb-0">
                    Luas = &frac12; &times; {{ $alas }} &times; {{ $tinggi }}
                    = <strong>{{ $hasil }}</strong>
                </div>
                @endif

            </div>
        </div>
    </div>
</div>
@endsection