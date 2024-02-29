@extends('layouts.layouts')
@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card" style="margin-top: 150px ;">
                <div class="card-header">
                    <h4>Slider
                        <a href="{{ url('add-slider') }}" class="btn btn-primary btn-sm float-right">Tambah Slider</a>
                        <a href="{{ url('dashboard') }}" class="btn btn-danger btn-sm float-left">Kembali</a>
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Heading</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($slider as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->heading }}</td>
                                <td>
                                    <img src="{{ asset('uploads/slider/'.$item->image) }}" width="100px" alt="Slider Image">
                                </td>
                                <td>
                                    @if ($item->status == '1')
                                    hidden
                                    @else
                                    visible
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ url('edit-slider/'. $item->id) }}" class="btn btn-success btn-sm">Edit</a>
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

@endsection