@extends('layouts.layouts')
@section('content')
<section class="py-5" style="margin-top: 100px">
    <div class="container col-xxl-8">
        <h3 class="fw-bold mb-2">
            Halaman sarana Kegiatan
        </h3>

        <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahsaranas" style="background-color: #144171; color: white;">Tambah sarana</a>
        <a href="{{ url('dashboard') }}" class="btn btn-danger btn-sm float-left">Kembali</a>

        <!-- Pesan Sukses -->
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade-show" role="alert">
            <strong>Informasi</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if (count($errors) > 0)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error  }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="table-responsive py-3">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Judul</th>
                        <th>desc</th>
                        <th>sarana</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp

                    @foreach ($saranas as $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>
                            {{ $item->judul }}
                        </td>
                        <td>
                            {{ $item->desc }}
                        </td>
                        <td>
                            <img src="{{ asset('storage/saranas/' . $item->image) }}" height="150" alt="">
                        </td>
                        <td>
                            <a href="#" class="btn btn-warning" data-bs-target="#editsarana{{ $item->id }}" data-bs-toggle="modal">Edit</a>
                            <form action="{{ route('saranas.destroy', $item->id) }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" onclick="alert('Yakin di hapus nih ?')" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Edit Modal -->
@foreach ($saranas as $item)
<!-- Edit Modal -->
<div class="modal fade" id="editsarana{{ $item->id }}" tabindex="-1" aria-labelledby="editsaranaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editsaranaLabel">Modal Edit</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('saranas.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="id_saranas" value="{{ $item->id }}">

                    <div class="form-group mb-3">
                        <label for="">Judul</label>
                        <input type="text" name="judul" class="form-control" value="{{ $item->judul }}">
                    </div>

                    <div class="form-group mb-3">
                        <label for="">Deskripsi</label>
                        <input type="text" name="desc" class="form-control" value="{{ $item->desc }}">
                    </div>


                    <div class="form-group mb-3">
                        <label for="">pilih Photo</label>
                        <div class="col-lg-4">
                            <img src="{{ asset('storage/saranas/' . $item->image) }}" height="150" alt="">
                        </div>
                        <input type="hidden" name="old_image" value="{{ $item->image }}">
                        <input type="file" name="image" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endforeach


<!-- Modal -->
<div class="modal fade" id="tambahsaranas" tabindex="-1" aria-labelledby="tambahsaranasLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="tambahsaranasLabel">Modal sarana</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('saranas.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="">Judul</label>
                        <input type="text" name="judul" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Desc</label>
                        <input type="text" name="desc" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">pilih Photo</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection