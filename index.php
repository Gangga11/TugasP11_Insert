<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        html, body {
            height: 100%;
        }
    </style>
</head>
<body class="container d-flex flex-column h-100">

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
            <div class="container">
                <a class="navbar-brand" href="#">Pemrograman Web: 2101020008_I Komang Yoga Gangga Putra</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=kategori">Kategori</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=produk">Produk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=pesanan">Pesanan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container flex-grow-1" id="content">
        <div class="row h-100">
            <div class="col-md-2 p-3 collapse" id="collapseExample">
                <div class="p-3 text-white bg-dark border border-dark">
                    <a class="text-white" href="index.php?page=kategori">Kategori</a>
                </div>
                <div class="p-3 text-white bg-dark border border-dark mt-2">
                    <a class="text-white" href="index.php?page=produk">Produk</a>
                </div>
                <div class="p-3 text-white bg-dark border border-dark mt-2">
                    <a class="text-white" href="index.php?page=pesanan">Pesanan</a>
                </div>
            </div>

            <div class="col p-3 h-100">
                <?php
                include "sql.php";
                $halaman = isset($_GET['page']) ? $_GET['page'] : 'produk';

                switch ($halaman) {
                    case 'kategori':
                        include 'kategori.php';
                        break;
                    case 'pesanan':
                        include 'pesanan.php';
                        break;
                    case 'pesanan-del':
                        include 'pesanan-del.php';
                        break;
                    case 'produk-add':
                        include 'produk-add.php';
                        break;
                    case 'produk-edt':
                        include 'produk-edt.php';
                        break;
                    case 'produk-del':
                        include 'produk-del.php';
                        break;
                    case 'kategori-add':
                        include 'kategori-add.php';
                        break;
                    case 'kategori-edt':
                        include 'kategori-edt.php';
                        break;
                    case 'kategori-del':
                        include 'kategori-del.php';
                        break;
                    default:
                        include 'produk.php';
                        break;
                }
                ?>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white p-3">
        <div class="container">
            <p>&copy; 2023</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTN