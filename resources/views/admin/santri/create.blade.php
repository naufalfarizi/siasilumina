@extends('layouts.admin')

@section('main-content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">{{ __('Santri') }}</h1>
<div class="col">

    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Santri</h6>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('santri.store') }}" autocomplete="off">
                @csrf
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col">
                            <div class="form-group focused">
                                <label class="form-control-label" for="nama">Nama Santri
                                    <span class="small text-danger">*</span>
                                </label>
                                <input type="text" id="nama" class="form-control" name="nama" placeholder="Nama santri">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="username">Nomor Induk Santri
                                    <span class="small text-danger">*</span>
                                    <input type="text" id="username" class="form-control" name="username"
                                        placeholder="NIS">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="email">Email Santri
                                    <span class="small text-danger">*</span>
                                </label>
                                <input type="email" id="email" class="form-control" name="email"
                                    placeholder="Email santri">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="password">Password Santri
                                    <span class="small text-danger">*</span>
                                </label>
                                <input type="password" id="password" class="form-control" name="password"
                                    placeholder="Password santri">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="password_confirmation">Confirmation Password
                                    <span class="small text-danger">*</span>
                                </label>
                                <input type="password" id="password_confirmation" class="form-control"
                                    name="password_confirmation" placeholder="Password santri">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="kelas">Kelas
                                    <span class="small text-danger">*</span>
                                </label>
                                <input type="text" id="kelas" class="form-control" name="kelas" placeholder="Kelas">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="semester">Semester
                                    <span class="small text-danger">*</span>
                                </label>
                                <input type="text" id="semester" class="form-control" name="semester"
                                    placeholder="Semester">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="tahun_ajaran">Tahun Ajaran
                                    <span class="small text-danger">*</span>
                                </label>
                                <input type="text" id="tahun_ajaran" class="form-control" name="tahun_ajaran"
                                    placeholder="Tahun ajaran">
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
