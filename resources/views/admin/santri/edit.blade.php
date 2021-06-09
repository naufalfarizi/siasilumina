@extends('layouts.admin')

@section('main-content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">{{ __('Santri') }}</h1>
<div class="col">
    @if (session('success'))
    <div class="success alert-success border-left-success" role="success">
        <span class="pl-4  py-4">
            {{ session('success') }}
        </span>
    </div>
    @endif
    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Santri</h6>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('santri.update', $santri->id) }}" autocomplete="off">
                @csrf
                @method('PUT')
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col">
                            <div class="form-group focused">
                                <label class="form-control-label" for="nama">Nama Santri
                                    <span class="small text-danger">*</span>
                                </label>
                                <input type="text" id="nama" class="form-control" name="nama" placeholder="Nama santri"
                                    value={{ $santri->name }}>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="username">Nomor Induk Santri
                                    <span class="small text-danger">*</span>
                                </label>
                                <input type="text" id="username" class="form-control" name="username" placeholder="NIS"
                                    value={{ $santri->username }}>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="email">Email Santri
                                    <span class="small text-danger">*</span>
                                </label>
                                <input type="email" id="email" class="form-control" name="email"
                                    placeholder="Email santri" value={{ $santri->email }}>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="kelas">Kelas
                                    <span class="small text-danger">*</span>
                                </label>
                                <input type="text" id="kelas" class="form-control" name="kelas" placeholder="Kelas"
                                    value={{ $santriProfile->kelas }}>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="semester">Semester
                                    <span class="small text-danger">*</span>
                                </label>
                                <input type="text" id="semester" class="form-control" name="semester"
                                    placeholder="Semester" value={{ $santriProfile->semester }}>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="tahun_ajaran">Tahun Ajaran
                                    <span class="small text-danger">*</span>
                                </label>
                                <input type="text" id="tahun_ajaran" class="form-control" name="tahun_ajaran"
                                    placeholder="Tahun ajaran" value={{ $santriProfile->tahun_ajaran }}>
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
