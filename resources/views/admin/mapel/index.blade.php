@extends('layouts.admin')

@section('main-content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">{{ __('Mata Pelajaran') }}</h1>
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">List Mata Pelajaran</h6>
        <a href="{{ route('mapel.create') }}" class="btn btn-sm btn-primary">+ Tambah Mata Pelajaran</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-bordered dataTable" id="dataTable" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $mapel as $pelajaran)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $pelajaran->nama }}</td>
                                <td>
                                    <button class="btn btn-sm btn-danger"
                                        onclick="return confirm('Yakin menghapus Mata Pelajaran?')">
                                        <i class="fa fa-trash"></i>
                                    </button>
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
