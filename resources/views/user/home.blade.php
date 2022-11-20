@extends('layouts.main')

@section('conten_home')
<div class="container-xxl bg-primary hero-header">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="text-white mb-4 animated slideInDown">Selamat Datang
                </h1>
                <p class="text-white pb-3 animated slideInDown">Selamat menikmati akses layanan online
                    untuk masyarakat yang dibuat oleh
                    Dinas Dukcapil Kota Pekalongan demi mensejahterakan dan mempermudah masyarakat dalam
                    mengakses
                    layanan yang disediakan oleh Dinas Dukcapil Kota Pekalongan
                </p>

            </div>
            <div class="col-lg-6 text-center text-lg-start">
                <img class="img-fluid rounded animated zoomIn" src="img/pekalongan.png" alt="">
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container">
    <div class="row text-center">
        <h1 class="display-3 fw-bold">Layanan</h1>
        <div class="heading-line"></div>
        <p class="lead">Dibawah ini beberapa layanan yang perlu anda ketahui</p>
    </div>
</div>

<div class="mb-5" data-aos="fade-up">
    <div class="owl-carousel testimonial-carousel">
        <div class="item">
            <a href="fkelahiran"> <img src="img/akta.png" alt="slider"></a>
        </div>
        <div class="item">
            <a href="fkematian"><img src="img/Kematian.png" alt="slider"></a>
        </div>
        <div class="item">
            <a href="fkia"><img src="img/KIA.png" alt="slider"></a>
        </div>
        <div class="item">
            <a href="fpindah"><img src="img/Perpindahan.png" alt="slider"></a>
        </div>
        <div class="item">
            <a href="flayanankk"><img src="img/KK.png" alt="slider"></a>
        </div>
        <div class="item">
            <a href="fkonsolidasi"><img src="img/Kon NIK.png" alt="slider"></a>
        </div>
    </div>
</div>
@endsection