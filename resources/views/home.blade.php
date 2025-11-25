@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<!-- Hero Section Minimalis -->
<section class="hero-section text-center text-white bg-dark py-5">
    <div class="container py-5">
        <h1 class="display-5 fw-bold mb-3">Amplang Khas Kalimantan</h1>
        <p class="lead mb-4">Rasa autentik yang membawa kenangan pulang ke Kalimantan</p>
        <a href="{{ route('program.index') }}" class="btn btn-primary btn-lg">Lihat Produk Kami</a>
    </div>
</section>

<!-- Produk Unggulan -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row mb-4">
            <div class="col text-center">
                <h2 class="fw-bold">Produk Unggulan Kami</h2>
                <p class="text-muted">Pilihan terbaik amplang dengan cita rasa khas Kalimantan</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <img src="{{ asset('images/amplang7.jpeg') }}" class="card-img-top" alt="Amplang Original" width=400 height=400>
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Amplang reguler</h5>
                        <p class="card-text text-muted">Amplang dengan rasa original yang gurih dan renyah, dibuat dari ikan tenggiri pilihan.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-primary">Rp 12.500</span>
                            <button class="btn btn-outline-primary btn-sm">Beli Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <img src="{{ asset('images/amplang3.jpeg') }}" class="card-img-top" alt="Amplang Pedas" width=400 height=400>
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Amplang 180 gr</h5>
                        <p class="card-text text-muted">Amplang dengan rasa original yang gurih dan renyah, dibuat dari ikan tenggiri pilihan. dengan ukuran lebih besar.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-primary">Rp 30.000</span>
                            <button class="btn btn-outline-primary btn-sm">Beli Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <img src="{{ asset('images/amplang4.jpeg') }}" class="card-img-top" alt="Amplang Balado" width=400 height=400>
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Amplang 1000 gr</h5>
                        <p class="card-text text-muted">Amplang dengan rasa original yang gurih dan renyah, dibuat dari ikan tenggiri pilihan. dengan ukuran jumbo</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-primary">Rp 150.000</span>
                            <button class="btn btn-outline-primary btn-sm">Beli Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimoni -->
<section class="py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col text-center">
                <h2 class="fw-bold">Apa Kata Pelanggan Kami</h2>
                <p class="text-muted">Testimoni dari mereka yang telah mencicipi kelezatan amplang kami</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card border-0 h-100">
                    <div class="card-body text-center">
                        <img src="https://randomuser.me/api/portraits/women/32.jpg" class="rounded-circle mb-3" width="80" alt="Testimoni 1">
                        <h5 class="card-title">Sari Dewi</h5>
                        <p class="card-text text-muted">"Rasanya autentik sekali, persis seperti amplang yang saya beli langsung di Kalimantan. Keluarga saya sangat menyukainya!"</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0 h-100">
                    <div class="card-body text-center">
                        <img src="https://randomuser.me/api/portraits/men/54.jpg" class="rounded-circle mb-3" width="80" alt="Testimoni 2">
                        <h5 class="card-title">Budi Santoso</h5>
                        <p class="card-text text-muted">"Pengiriman cepat, packaging rapi, dan yang paling penting amplangnya masih renyah saat sampai. Recommended banget!"</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0 h-100">
                    <div class="card-body text-center">
                        <img src="https://randomuser.me/api/portraits/women/68.jpg" class="rounded-circle mb-3" width="80" alt="Testimoni 3">
                        <h5 class="card-title">Maya Sari</h5>
                        <p class="card-text text-muted">"Saya selalu stock amplang dari sini untuk oleh-oleh tamu. Mereka selalu memuji dan menanyakan di mana belinya."</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection