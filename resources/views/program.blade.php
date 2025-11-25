@extends('layouts.app')

@section('title', 'Program & Produk')

@section('content')
    <!-- Header Section -->
    <section class="py-5 bg-primary text-white">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1>Program & Produk Kami</h1>
                    <p class="lead">Berbagai pilihan amplang dengan kualitas terbaik</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Produk -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col text-center">
                    <h2>Produk Amplang Kami</h2>
                    <p class="text-muted">Pilih varian amplang favorit Anda</p>
                </div>
            </div>

            <div class="row">

                {{-- Mulai Looping Data dari Controller --}}
                @foreach ($products as $product)
                    <div class="col-md-4 mb-4">
                        <div class="card product-card shadow-sm h-100">
                            {{-- Mengambil URL Gambar dari database --}}
                            <img src="{{ asset('images/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}"
                                width="400" height="400">

                            <div class="card-body">
                                {{-- Mengambil Nama Produk dari database --}}
                                <h5 class="card-title">{{ $product->name }}</h5>

                                {{-- Mengambil Deskripsi dari database --}}
                                {{-- JIKA MUNCUL ERROR, GANTI DENGAN $product->description saja --}}
                                <p class="card-text">{{ Str::limit($product->description, 100) }}</p>

                                <div class="d-flex justify-content-between align-items-center">
                                    {{-- Mengambil Harga dari database dan memformatnya --}}
                                    <span class="fw-bold text-primary">Rp
                                        {{ number_format($product->price, 0, ',', '.') }}</span>

                                    {{-- Link ke detail produk --}}
                                    <a href="{{ route('program.show', $product->id) }}" class="btn btn-sm btn-primary">Beli
                                        Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- Akhir Looping --}}

            </div>
            {{-- Jika tidak ada produk sama sekali --}}
            @if ($products->isEmpty())
                <div class="row">
                    <div class="col text-center">
                        <p class="lead">Maaf, saat ini belum ada produk yang tersedia.</p>
                    </div>
                </div>
            @endif

        </div>
    </section>

    <!-- Program -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row mb-4">
                <div class="col text-center">
                    <h2>Program Khusus</h2>
                    <p class="text-muted">Berbagai program menarik untuk pelanggan setia kami</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <i class="fas fa-gift fa-3x text-primary mb-3"></i>
                            <h4>Program Reseller</h4>
                            <p>Dapatkan keuntungan lebih dengan menjadi reseller amplang kami. Diskon khusus untuk pembelian
                                dalam jumlah besar.</p>
                            <button class="btn btn-outline-primary mt-3">Daftar Sekarang</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <i class="fas fa-box-open fa-3x text-primary mb-3"></i>
                            <h4>Langganan Bulanan</h4>
                            <p>Dapatkan amplang favorit Anda setiap bulan dengan harga khusus dan prioritas pengiriman.</p>
                            <button class="btn btn-outline-primary mt-3">Info Selengkapnya</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <i class="fas fa-hand-holding-usd fa-3x text-primary mb-3"></i>
                            <h4>Program Kemitraan</h4>
                            <p>Buka peluang usaha dengan menjadi mitra kami. Dukungan penuh untuk pemasaran dan operasional.
                            </p>
                            <button class="btn btn-outline-primary mt-3">Hubungi Kami</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection