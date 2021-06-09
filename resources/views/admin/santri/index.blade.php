@extends('layouts.admin')

@section('main-content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">{{ __('Santri') }}</h1>
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">List Santri</h6>
        <a href="{{ route('santri.create') }}" class="btn btn-sm btn-primary">+ Tambah Santri</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-bordered dataTable" id="dataTable" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>NIS</th>
                                <th>Kelas</th>
                                <th>Semester</th>
                                <th>Tahun Ajaran</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $santris as $santri)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $santri->name }}</td>
                                <td>{{ $santri->username }}</td>
                                <td>{{ $santri->userprofile->kelas }}</td>
                                <td>{{ $santri->userprofile->semester }}</td>
                                <td>{{ $santri->userprofile->tahun_ajaran }}</td>
                                <td>
                                    <a href="{{ route('nilai-pelajaran.edit', $santri->id) }}"
                                        class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top"
                                        title="Nilai">
                                        <i class="fa fa-book"></i>
                                    </a>
                                    <a href="{{ route('santri.edit', $santri->id) }}" class="btn btn-sm btn-primary"
                                        data-toggle="tooltip" data-placement="top" title="Edit Santri">
                                        <i class="fa fa-user-edit"></i>
                                    </a>
                                    <button class="btn btn-sm btn-danger"
                                        onclick="return confirm('Yakin menghapus Santri?')">
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
