@extends('layouts.app')
@section('breadcrumb')
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('siswa.index') }}">Data Siswa</a></li>
        <li class="breadcrumb-item"><a href="">Edit Data Siswa</a></li>
    </ol>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">NIS</div>
                    <div class="card-body">
                        <form class="form-horizontal" action="{{ route('siswa.update') }}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">NIS</label>
                                <div class="col-md-9">
                                    <input class="form-control @error('nis') is-invalid @enderror" id="nis" type="number" name="nis"
                                        placeholder="@error('nis') {{ $message }} @enderror" value="{{ $siswa->nis }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Nama Siswa</label>
                                <div class="col-md-9">
                                    <input class="form-control @error('nama_siswa') is-invalid @enderror" id="nama_siswa" type="text" name="nama_siswa"
                                        placeholder="@error('nama_siswa') {{ $message }} @enderror" value="{{ $siswa->nama_siswa }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Rombel</label>
                                <div class="col-md-9">
                                    <input class="form-control @error('rombel') is-invalid @enderror" id="rombel" type="text" name="rombel"
                                        placeholder="@error('rombel') {{ $message }} @enderror" value="{{ $siswa->rombel }}">
                                </div>
                            </div>

                            {{-- Nunggu table lain selesai, data relasi --}}

                            {{-- <div class="form-group row">
                                <label class="col-md-3 col-form-label">Jurusan</label>
                                <div class="col-md-9">
                                    <input class="form-control" id="jurusan_id" type="number" name="jurusan_id"
                                        placeholder="Masukkan jurusan siswa..">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="hf-password">Rayon</label>
                                <div class="col-md-9">
                                    <input class="form-control" id="rayon_id" type="number" name="rayon_id"
                                        placeholder="Masukkan rayon siswa..">
                                </div>
                            </div> --}}

                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Simpan Data</button>
                                <button class="btn btn-secondary" type="reset">Reset</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
