@extends('layouts.app');

@section('title', 'Dashboard - Lelayu App')
    
@section('content')
    <div class="container">
        <section class="px-4 py-4" style="border: 2px solid black; height:1000px">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center" style="font-size: 36px"><b>LELAYU</b></h1>
                </div>
                <div class="col-12">
                    <h4 class="text-center" style="font-weight: 500; font-size: 16px">INNA LILLAHI WA INNA ILAIHI RAJI”UN</h4>
                </div>
                <div class="col-12 mt-4">
                    <h5 class="text-center" style="font-weight: 300; font-size: 16px"><i>Assalaamu’alaikum warahmatullahi wabarakaatuh</i></h5>
                </div>
                <div class="col-12 mt-4">
                    <p class="text-center" style="font-weight: 400; font-size:14px; ">
                        Sampun kapundhut wangsul dhumateng ngarsanipun Gusti Allah SWT kanthi tentrem jalaran gerah sakwetawis wekdhal panjenenganipun  :
                    </p>
                </div>
                <div class="col-12 mt-4">
                    <h2 class="text-center font-size: 24px;" >
                        Alm. {{ $invitation->rip_name }}
                    </h2>
                    <center>
                        <h2 class="text-center" style=" font-size: 24px; border-top: 3px solid black; width: 50%">
                            Dumugi yuswo {{ $invitation->rip_age }} tahun
                        </h2>
                    </center>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-4" style="padding-left: 20px">
                    <h5 style="font-size: 14px">
                        Rikala dinten
                    </h5>
                </div>
                <div class="col-8">
                    <h5 style="font-size: 14px">
                        : {{ $rip_day }}
                    </h5>
                </div>
                <div class="col-4"  style="padding-left: 20px">
                    <h5 style="font-size: 14px">
                        Surya kaping
                    </h5>
                </div>
                <div class="col-8">
                    <h5 style="font-size: 14px">
                        : {{ $rip_date }}
                        
                    </h5>
                </div>
                <div class="col-4"  style="padding-left: 20px">
                    <h5 style="font-size: 14px">
                        Wanci tabuh
                    </h5>
                </div>
                <div class="col-8">
                    <h5 style="font-size: 14px">
                        : {{ $ripTime }} WIB
                    </h5>
                </div>
                <div class="col-4"  style="padding-left: 20px">
                    <h5 style="font-size: 14px">
                        Wonten ing
                    </h5>
                </div>
                <div class="col-8">
                    <h5 style="font-size: 14px">
                        : {{ $invitation->rip_place}}
                    </h5>
                </div>
            </div>
            <div class="row mt-4">
                <h5 style="font-weight: 700;padding-left: 16px">Jenazah badhe kasareaken kaangkah  :</h5>    
            </div>
            <div class="row mt-4">
                <div class="col-4" style="padding-left: 20px">
                    <h5 style="font-size: 14px">
                        Dinten
                    </h5>
                </div>
                <div class="col-8">
                    <h5 style="font-size: 14px">
                        : {{ $invitation->burial_date }}
                    </h5>
                </div>
                <div class="col-4"  style="padding-left: 20px">
                    <h5 style="font-size: 14px">
                        Wanci tabuh	
                    </h5>
                </div>
                <div class="col-8">
                    <h5 style="font-size: 14px">
                        : {{ $burialTime }} WIB
                    </h5>
                </div>
                <div class="col-4"  style="padding-left: 20px">
                    <h5 style="font-size: 14px">
                        Wonten ing
                    </h5>
                </div>
                <div class="col-8">
                    <h5 style="font-size: 14px">
                        : {{ $invitation->burial_place}}
                    </h5>
                </div>
                <div class="col-4"  style="padding-left: 20px">
                    <h5 style="font-size: 14px">
                        Bidal saking griya dhukito
                    </h5>
                </div>
                <div class="col-8">
                    <h5 style="font-size: 14px">
                        : {{ $invitation->burial_start_from }}
                    </h5>
                </div>
                <div class="col-12 mt-4" style="padding-left: 20px">
                    <p class="" style="font-weight: 400; font-size:14px;">
                        Ing mbok bilih Almarhum rikolo sugengipun hanggadhahi kalepatan dhumateng panjenengan sedaya, Keluarga nyuwunaken agunging pangapunten 
                    </p>
                </div>
                <div class="col-12 mt-4">
                    <h5 class="text-center" style="font-weight: 300; font-size: 16px;"><i>Wassalaamu’alaikum warahmatullahi wabarakaatuh</i></h5>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12" style="padding-left: 20px">
                    <h5 style="font-size: 14px">
                        Ingkang nandhang dhukito :
                    </h5>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12" style="padding-left: 20px">
                    @foreach ($families as $family)
                        <h5 style="font-size: 14px">- {{ $family }}</h5>
                    @endforeach
                    {{-- <h5 style="font-size: 14px">
                        - Muhammad Arief Ardyansyah (Putra)
                    </h5>
                    <h5 style="font-size: 14px">
                        - Erick Yusuf Ardiyanto (Putra)
                    </h5>
                    <h5 style="font-size: 14px">
                        - Ichsan Ghofur Oktafianto (Putra)
                    </h5> --}}
                    {{-- <h6 style="font-size: 17px">
                        - Erick Yusuf Ardiyanto (Putra)
                    </h5>
                    <h6 style="font-size: 17px">
                        - Ichsan Ghofur Oktafianto (Putra)
                    </h5> --}}
                </div>
            </div>
            <div class="col-12 text-left d-print-none">
                <a href="" onclick="window.print()" class="btn btn-primary btn-md mt-4"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>Print PDF</a>
            </div>
        </section>
    </div>
@endsection