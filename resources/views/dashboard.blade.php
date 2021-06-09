@extends('layouts.admin')

@section('main-content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">{{ __('Dashboard') }}</h1>

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Nilai</h6>
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
                                <th>Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $allNilai as $nilai)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $nilai->mata_pelajaran->nama }}</td>
                                <td>
                                    {{ $nilai->nilai }}
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
