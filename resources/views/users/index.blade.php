@extends('layouts.app');

@section('title', 'Dashboard - Lelayu App')
    
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12" data-aos="fade-down">
                <h1 class="text-center">Lelayu App</h1>
            </div>
            <div data-aos="fade-up">
                <div class="col-12 d-flex justify-content-between">
                    <a href="{{ route('dashboard.create')}}" class="btn btn-success btn-sm">Buat Lelayu</a>
                    <div class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                    <a href="{{ route('dashboard.index')}}" class="nav-link {{ (request()->is('/dashboard'))}}" aria-current="page">Dashboard Saya</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('dashboard.account')}}" class="btn btn-sm">Akun Saya</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link disabled">Disabled</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a href="{{ route('dashboard.index')}}" class="btn btn-sm">Dashboard Lelayu</a>
                    <a href="{{ route('dashboard.account')}}" class="btn btn-sm">Akun Saya</a>
                    <a class="btn btn-danger btn-sm" href="{{ route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout')}}" method="post" style="display: none">
                        @csrf
                    </form>
                </div>
                <div class="col-12 mt-4">
                    <div class="table-responsive">
                        <table class="table align-middle">
                        <thead class="text-center">
                            <tr>
                                <th>#</th>
                                <th>Nama Orang Meninggal</th>
                                <th>Usia</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                @php
                                    $i = 0;
                                @endphp
                                @forelse ($invitations as $invitation)    
                                    <th>{{ $i += 1 }}</th>
                                    <th>{{ $invitation->rip_name }}</th>
                                    <th>{{ $invitation->rip_age }} Th</th>
                                    <th>{{ $invitation->burial_start_from }}</th>
                                    <th class="d-flex justify-content-between">
                                        <div class="col-md-4">
                                            <a href="{{ route('dashboard.show', $invitation->id) }}" class="btn btn-sm btn-primary">Lihat</a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="{{ route('dashboard.edit', $invitation->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                        </div>
                                        <form action="{{ route('dashboard.destroy', $invitation->id) }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                        </form> 
                                    </th>
                                @empty
                                    {{-- <th>1</th>
                                    <th>Edy Wuryanto</th>
                                    <th>65 Th</th>
                                    <th>Dk. Kliteh RT.05/RW.01,Jatirejo,Sawit,Boyolali</th>
                                    <th class="d-flex justify-content-between">
                                        <a href="#" class="btn btn-sm btn-primary">Lihat</a>
                                        <a href="#" class="btn btn-sm  btn-warning">Edit</a>
                                        <a href="#" class="btn btn-sm  btn-danger">Hapus</a>
                                    </th> --}}
                                    <td colspan="5" class="text-danger">Maaf Anda belum pernah membuat Lelayu sebelumnya.. Silahkan buat Lelayu dengan klik tombol Buat di pojok kiri atas..</td>
                                @endforelse
                            </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection