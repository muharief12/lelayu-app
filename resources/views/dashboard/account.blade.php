@extends('layouts.app');

@section('title', 'Dashboard - Lelayu App')
    
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12" data-aos="fade-down">
                <h1 class="text-center">Lelayu App</h1>
            </div>
            <div data-aos="fade-up">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid justify-content-between">
                        <div class="navbar-brand">
                            <a href="{{ route('dashboard.create')}}" class="btn btn-sm btn-success">Buat Lelayu</a>
                        </div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center justify-content-between">
                                <li class="nav-item">
                                    <a href="{{ route('dashboard.index')}}" class="nav-link {{ (request()->is('dashboard*')) ? 'active' : ''}}" aria-current="page">Dashboard Saya</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('account')}}" class="nav-link {{ (request()->is('account*')) ? 'active' : ''}}" aria-current="page">Akun Saya</a>
                                </li>
                                <li class="nav-item">
                                    <a class="btn btn-danger btn-sm" href="{{ route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                    <form id="logout-form" action="{{ route('logout')}}" method="post" style="display: none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                            
                        </div>
                        {{-- <div class="d-flex">
                            
                        </div> --}}
                    </div>
                </nav>
            </div>
                
                <div class="col-12 mt-4">
                    
                </div>
            </div>
        </div>
    </div>
@endsection