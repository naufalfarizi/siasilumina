@extends('layouts.admin')

@section('main-content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">{{ __('Mata Pelajaran') }}</h1>
<div class="col">

    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Mata Pelajaran</h6>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('mapel.store') }}" autocomplete="off">
                @csrf
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col">
                            <div class="form-group focused">
                                <label class="form-control-label" for="nama">Nama Mata Pelajaran
                                    <span class="small text-danger">*</span>
                                </label>
                                <input type="text" id="nama" class="form-control" name="nama" placeholder="Nama Mapel">
                            </div>
                        </div>
                    </div>
                    <!-- Button -->
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col text-center">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>

</div>
@endsection
