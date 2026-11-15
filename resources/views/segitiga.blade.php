@extends('layout')

@section('title', $judul)

@section('content')
<h1 class="judul-halaman text-center">{{ $judul }}</h1>
<p class="sub-judul">Hitung luas segitiga dari alas dan tinggi</p>

<div class="row justify-content-center">
    <div class="col-lg-9">
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

                <form action="{{ url('/kalkulator/segitiga') }}" method="post">
                    @csrf

                    <div class="rumus-baris">
                        <span class="tanda">&frac12; &times;</span>

                        <div class="kolom-input">
                            <input type="number" step="any" class="form-control" name="alas"
                                   value="{{ old('alas', $alas) }}" required>
                            <small>Alas</small>
                        </div>

                        <span class="tanda">&times;</span>

                        <div class="kolom-input">
                            <input type="number" step="any" class="form-control" name="tinggi"
                                   value="{{ old('tinggi', $tinggi) }}" required>
                            <small>Tinggi</small>
                        </div>

                        <span class="tanda">=</span>

                        <div class="kolom-input">
                            <div class="hasil-bulat">{{ $hasil }}</div>
                            <small>Luas</small>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-pastel px-5">HITUNG</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection