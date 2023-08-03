@extends('layouts.app');

@section('title', 'Dashboard - Lelayu App')
    
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12" data-aos="fade-down">
                <h1 class="text-center">Edit Data Lelayu {{ $invitation->rip_name }}</h1>
            </div>
            <div data-aos="fade-up">
                <div class="col-12 d-flex justify-content-between">
                    <a href="{{ route('dashboard.index')}}" class="btn btn-success btn-sm">Kembali</a>
                    <a class="btn btn-danger btn-sm" href="{{ route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout')}}" method="post" style="display: none">
                        @csrf
                    </form>
                </div>
                <div class="col-12 mt-4">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    {{-- <form action="{{ route('dashboard.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label for=""></label>
                    </form> --}}
                    <div class="card">
                        <div class="card-body px-4 py-4">
                            <form action="{{ route('dashboard.update', $invitation->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <input type="hidden" name="users_id" value="{{ Auth::user()->id }}">
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <label class="mb-2">Nama Orang yang meninggal</label>
                                            <input type="text" name="rip_name" value="{{ $invitation->rip_name }}" class="form-control" autofocus required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <label class="mb-2">Umur Orang yang meninggal</label>
                                            <input type="number" name="rip_age" value="{{ $invitation->rip_age }}" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <label class="mb-2">Tanggal Kematian</label>
                                            <input type="date" name="rip_date" value="{{ $invitation->rip_date }}" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <label class="mb-2">Waktu Kematian</label>
                                            <input type="time" name="rip_time" value="{{ $invitation->rip_time }}" class="form-control" placeholder="23:59" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <label class="mb-2">Tempat terjadinya Kematian</label>
                                            <input type="text" name="rip_place" value="{{ $invitation->rip_place }}" class="form-control" placeholder="Rumah Sakit PKU Muhammadiyah Delanggu" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <label class="mb-2">Tanggal Pemakaman</label>
                                            <input type="text" name="burial_date" value="{{ $invitation->burial_date }}" class="form-control" placeholder="Ahad, 12 Mei 2023" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <label class="mb-2">Waktu Pemakaman</label>
                                            <input type="time" name="burial_time" value="{{ $invitation->burial_time }}" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <label class="mb-2">Tempat Pemakaman</label>
                                            <input type="text" name="burial_place" value="{{ $invitation->burial_place }}" class="form-control" placeholder="Makam ..." required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <label class="mb-2">Berangkat dari rumah duka</label>
                                            <input type="text" name="burial_start_from" value="{{ $invitation->burial_start_from }}" class="form-control" placeholder="Dk. Kliteh RT.05/RW.01, Jatirejo, Sawit, Boyolali" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <label class="mb-2">Berangkat dari rumah duka</label>
                                            <input type="text" name="abandoned_family" value="{{ $invitation->abandoned_family }}" class="form-control" placeholder="Nama Istri/Suami (Istri//Suami), Nama Anak 1 (Anak), .." required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12 text-right">
                                        <button type="submit" class="btn btn-success px-5">
                                            Update Data
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection