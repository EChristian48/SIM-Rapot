@extends('layouts.app')
@section('breadcrumb')
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('upd.index') }}">Data upd</a></li>
    </ol>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">Data upd
                        <a href="{{ route('upd.create') }}" class="btn btn-sm btn-primary float-right">Tambah</a>
                    </div>
                    <div class="card-body">
                        <table id="table" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Siswa ID</th>
                                    <th>Nama UPD</th>
                                    <th>Nilai</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($upd as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->siswa_id }}</td>
                                    <td>{{ $item->nama_upd }}</td>
                                    <td>{{ $item->nilai_upd }}</td>
                                    <td>
                                        <form action="{{route('upd.destroy',[$item->id])}}" method="post">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                            <button class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin ingin menghapus upd: {{$item->siswa_id}}')">Hapus</button>
                                            <a href="{{route('upd.edit',[$item->id])}}" class="btn btn-warning btn-sm">Ubah</a>
                                        </td>
                                            
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $upd->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection