    @extends('layouts.layouts')
    @section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="margin-top: 150px ;">
                    @if (session('status'))
                    <h5 class="alert alert-success">{{ session('status') }}
                    </h5>
                    @endif
                    <div class="card-header">
                        <h4>Tambah Sarana
                            <a href="{{ url('home-slider') }}" class="btn btn-danger btn-sm float-right">Kembali</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <form action="{{ url('saranas') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="">judul</label>
                                <input type="text" name="judul" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea name="desc" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Slider Image Upload</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection