<!DOCTYPE html>
<html>

<head>
    <title>Daftar Mobil</title>
</head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>Project Semantic Web</title>
<link rel="stylesheet" href="../style2.css">
<link rel="stylesheet" href="../navbar/navbar.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

<body>
    <!--Style Untuk Navbar -->
    <section class="h-100 w-100" style="box-sizing: border-box; background-color: #55b1f2">
        <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

        .navbar-1-3.navbar-dark .navbar-nav .nav-link {
            color: #fff;
        }

        .navbar-1-3 .bg-purple .navbar-nav .nav-link.active {
            color: #ffdda9;
            font-weight: 500;
        }

        .navbar-1-3 .bg-purple {
            background-color: wheat;
            transition: 0.3s;
        }

        .navbar-1-3 .btn-get-started {
            border-radius: 20px;
            padding: 12px 30px;
            font-weight: 500;
        }

        .navbar-1-3 .btn-get-started-yellow {
            background-color: #ffdda9;
            color: #372642;
            transition: 0.3s;
        }

        .navbar-1-3 .btn-get-started-yellow:hover {
            background-color: #fcd396;
            color: #372642;
            transition: 0.3s;
        }
        </style>
        <!--Style Untuk Navbar -->

        <!--Navbar -->
        <nav class="navbar-1-3 navbar navbar-expand-lg navbar-dark p-4 px-md-4 mb-3 bg-">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M3.5 15.75C3.5 8.98451 8.98451 3.5 15.75 3.5H29.75C30.7165 3.5 31.5 4.2835 31.5 5.25C31.5 6.21649 30.7165 7 29.75 7H15.75C10.9175 7 7 10.9175 7 15.75V29.75C7 30.7165 6.2165 31.5 5.25 31.5C4.2835 31.5 3.5 30.7165 3.5 29.75V15.75Z"
                            fill="white" />
                        <path
                            d="M10.5 17.5C10.5 13.634 13.634 10.5 17.5 10.5H31.5C35.366 10.5 38.5 13.634 38.5 17.5V31.5C38.5 35.366 35.366 38.5 31.5 38.5H17.5C13.634 38.5 10.5 35.366 10.5 31.5V17.5Z"
                            fill="white" />
                    </svg>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link px-md-4 active" aria-current="page"
                                href="../halaman_index/indexutama.php">Index</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-md-4" href="../halaman_index/IndexKelompokLain.php">RDF Kelompok
                                11</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <a class="btn btn-get-started btn-get-started-yellow" href="../landing-page/">Home</a>
                    </div>
                </div>
            </div>
        </nav>
    </section>

    <!--Navbar -->



    <!--Awal Card Tabel -->
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Tabel Daftar Mobil
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr class="">
                            <th>Tipe Mobil</th>
                            <th>Kapasitas Mesin</th>
                            <th>Tahun</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <?php require_once("../endpoint/endpoint2.php"); ?>
                    <?php for ($i=0; $i<count($type); $i++) : ?>
                    <tr class="data-row">
                        <td><?= $type[$i]; ?></td>
                        <td><?= $ccar[$i]; ?></td>
                        <td><?= $date[$i]; ?></td>
                        <td><?= $price[$i]; ?></td>
                    </tr>
                    <?php endfor; ?>
                </table>

            </div>
        </div>
    </div>
    <!--Akhir Card Tabel -->

    <script src="../navbar/navbar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>
<script src="../navbar/navbar.js"></script>

</html>