<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Amplang Kalimantan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .navbar-brand {
            font-weight: bold;
        }
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('{{ asset('images/amplang7.jpeg') }}');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
        }
        .product-card {
            transition: transform 0.3s;
        }
        .product-card:hover {
            transform: translateY(-5px);
        }
        footer {
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <i class="fas fa-fish"></i> Amplang Kalimantan
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('program.index') }}">Program</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ourteam') }}">Tim Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contactus') }}">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Konten Halaman -->
    @yield('content')

    <!-- Footer -->
    <footer class="py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Amplang Kalimantan</h5>
                    <p>Oleh-oleh khas Kalimantan yang lezat dan berkualitas.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p>&copy; 2023 Amplang Kalimantan. All rights reserved.</p>
                    <div class="social-links">
                        <a href="https://www.instagram.com/tifannyamplang_ptk?igsh=aHZyeDgzZWM5MWxw" class="text-dark me-2"><i class="fab fa-instagram"></i></a>
                        <a href="https://api.whatsapp.com/send?phone=6281883424016" class="text-dark""><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>