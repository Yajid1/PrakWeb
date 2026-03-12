<?php
session_start();

// Proteksi halaman - redirect ke login jika belum login
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.html");
    exit();
}

// Ambil username dari session
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cibaduyut SHOES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
</head>
<body class="d-flex flex-column min-vh-100">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid px-4">
<<<<<<< HEAD
        <a class="navbar-brand fw-bold" href="#">YAjid Salman</a>
=======
        <a class="navbar-brand fw-bold" href="#">CIBADUYUT SHOES</a>
>>>>>>> efbc6ed36f2459acaa768473605552a68c6f70ce

        <div class="d-flex align-items-center gap-2 ms-auto">
            <!-- Tampilkan username yang sedang login -->
            <span class="text-white-50 small me-1">
                👤 <?= htmlspecialchars($username) ?>
            </span>
            <button id="btn-theme" class="btn btn-outline-light btn-sm">Mode Gelap</button>
            <a href="controler/logout.php" class="btn btn-danger btn-sm fw-bold px-3"
               onclick="return confirm('Yakin ingin logout?')">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                     fill="none" stroke="currentColor" stroke-width="2.5"
                     style="margin-right:5px;vertical-align:middle;margin-top:-2px">
                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
                    <polyline points="16 17 21 12 16 7"/>
                    <line x1="21" y1="12" x2="9" y2="12"/>
                </svg>
                Logout
            </a>
        </div>
    </div>
</nav>

<<<<<<< HEAD

<!-- Hero -->
<section class="hero text-white">
    <div class="container text-center">
        <h2></h2>
        <p class="lead mb-4"></p>
=======
<!-- Hero -->
<section class="hero text-white">
    <div class="container text-center">
        <h2>Sistem Manajemen Sepatu</h2>
        <p class="lead mb-4">Sepatu impian dari koleksi eksklusif</p>
>>>>>>> efbc6ed36f2459acaa768473605552a68c6f70ce
    </div>
</section>

<!-- Content -->
<div class="container my-4">

    <!-- Statistik -->
    <div class="row text-center mb-4">
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h6 class="text-muted">Total Produk</h6>
                    <h3>12</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h6 class="text-muted">Stok Tersedia</h6>
                    <h3>85</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h6 class="text-muted">Kategori</h6>
                    <h3>3</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Judul -->
    <h4 class="mb-3">Daftar Sepatu</h4>
<<<<<<< HEAD
    <div class="container mt-5">
    <h3 class="mb-4">Daftar Sepatu</h3>

    <div class="row" id="container-barang">
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                
                <img src="assets/NIKE_P_6000.jpg" class="card-img-top">

                <div class="card-body">
                    <h5 class="card-title">Nike P-6000</h5>

                    <p class="card-text harga-text">
                        Harga: Rp 1429000
                    </p>

                    <p class="card-text stok-text">
                        Stok: 10
                    </p>

                    <div class="d-flex justify-content-between">
                        <button class="btn btn-primary btn-detail w-50 me-2">
                            Beli
                        </button>

                        <button class="btn btn-outline-danger btn-wishlist w-50">
                            ❤️ Wishlist
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="wishlistModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Daftar Wishlist Saya</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <ul class="list-group" id="daftar-wishlist">
                </ul>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    Tutup
                </button>

                <button type="button" class="btn btn-danger" onclick="hapusWishlist()">
                    Kosongkan
                </button>
            </div>

        </div>
    </div>
</div>
=======
>>>>>>> efbc6ed36f2459acaa768473605552a68c6f70ce

    <!-- Card Produk -->
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100">
                <img src="images/NIKE_P_6000.jpg" class="card-img-top" alt="Sepatu">
                <div class="card-body">
                    <h6 class="card-title">Nike P-6000</h6>
                    <p class="mb-1">Harga: Rp 1.299.000</p>
                    <p class="text-muted">Stok: 10</p>
                    <a href="#" class="btn btn-primary btn-sm">Detail</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100">
                <img src="images/AIR_FORCE_1.jpg" class="card-img-top" alt="Sepatu">
                <div class="card-body">
                    <h6 class="card-title">Nike Air Force 1</h6>
                    <p class="mb-1">Harga: Rp 1.599.000</p>
                    <p class="text-muted">Stok: 7</p>
                    <a href="#" class="btn btn-primary btn-sm">Detail</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100">
                <img src="images/AIR_JORDAN_1_LOW.jpg" class="card-img-top" alt="Sepatu">
                <div class="card-body">
                    <h6 class="card-title">Nike Air Jordan 1 Low</h6>
                    <p class="mb-1">Harga: Rp 1.799.000</p>
                    <p class="text-muted">Stok: 19</p>
                    <a href="#" class="btn btn-primary btn-sm">Detail</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3 mt-auto border-top">
    <small>© 2026 Cibaduyut Shoes</small>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const btnTheme = document.getElementById('btn-theme');
    btnTheme.addEventListener('click', () => {
        document.body.classList.toggle('dark-mode');
        btnTheme.textContent = document.body.classList.contains('dark-mode')
            ? 'Mode Terang' : 'Mode Gelap';
    });
</script>

</body>
</html>