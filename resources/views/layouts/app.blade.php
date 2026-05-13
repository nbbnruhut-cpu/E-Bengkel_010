<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Bengkel - UTS</title>
    
    <!-- Link Bootstrap 5 CDN (Instruksi No. 3) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Navbar Statis di bagian atas (Instruksi No. 3) -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <!-- Judul Navbar: Sistem E-Bengkel -->
            <a class="navbar-brand" href="#">Sistem E-Bengkel</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <!-- Tautan menu menuju halaman Daftar Servis -->
                        <a class="nav-link" href="{{ route('kendaraan.index') }}">Daftar Servis</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Konten Utama (Dynamic Content) -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Script Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>