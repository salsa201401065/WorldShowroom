<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Project Semantic Web</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="icon" href="icon.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<!--Awal CSS Navbar -->
<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

.navbar-1-2.navbar-light .navbar-nav .nav-link {
    color: #092a33;
    transition: 0.3s;
}

.navbar-1-2.navbar-light .navbar-nav .nav-link.active {
    font-weight: 500;
}

.navbar-1-2 .btn-get-started {
    border-radius: 20px;
    padding: 12px 30px;
    font-weight: 500;
}

.navbar-1-2 .btn-get-started-yellow {
    background-color: #ffdda9;
    color: #372642;
    transition: 0.3s;
}

.navbar-1-2 .btn-get-started-yellow:hover {
    background-color: #fcd396;
    color: #372642;
    transition: 0.3s;
}
</style>
<!--Akhir CSS Navbar -->


<body>
    <!--Awal Navbar -->
    <section class="h-60 w-60 bg-white" style="box-sizing: border-box"></section>
    <nav class="navbar-1-2 navbar navbar-expand-lg navbar-light p-4 px-md-4 mb-3 bg-body"
        style="font-family: Poppins, sans-serif">
        <div class="container">
            <a class="navbar-brand" href="#">
                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M3.5 15.75C3.5 8.98451 8.98451 3.5 15.75 3.5H29.75C30.7165 3.5 31.5 4.2835 31.5 5.25C31.5 6.2165 30.7165 7 29.75 7H15.75C10.9175 7 7 10.9175 7 15.75V29.75C7 30.7165 6.2165 31.5 5.25 31.5C4.2835 31.5 3.5 30.7165 3.5 29.75V15.75Z"
                        fill="#391484" />
                    <path
                        d="M10.5 17.5C10.5 13.634 13.634 10.5 17.5 10.5H31.5C35.366 10.5 38.5 13.634 38.5 17.5V31.5C38.5 35.366 35.366 38.5 31.5 38.5H17.5C13.634 38.5 10.5 35.366 10.5 31.5V17.5Z"
                        fill="#391484" />
                </svg>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link px-md-4" href="../halaman_index/DaftarMobil.php">Showroom Mobil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-md-4" href="../halaman_index/IndexKelompokLain.php">RDF Kelompok 11</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a class="btn btn-get-started btn-get-started-yellow" href="../landing-page/">Home</a>
                </div>
            </div>
        </div>
    </nav>
    </section>
    <!--Akhir  Navbar -->

    <!--Awal Carousel-->
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../image/pc2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Welcome to website Our amazing showroom</h5>
                    <p>We are all over the world!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../image/pc3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../image/pc1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>

    <!--Awal Carousel-->

    <!--Video Youtube-->
    <div class="kosong">
        <br>
        <br>
    </div>
    <div class="box">
        <div style="text-align: center;"> <iframe width="600" height="350"
                src="https://www.youtube.com/embed/okMhacEp9k4" title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe></div>
    </div>
    <!--Video Youtube-->


    <!--Tampilan Card-->

    <div class="container-full-bg jumbotron row mt-5">
        <?php require_once ("../endpoint/endpoint1.php"); ?>
        <?php for ($i=0; $i<count($title); $i++) : ?>


        <div class='col-sm mt-5'>
            <div class='card' style='width: 16rem; padding:22px;'>
                <img src='<?= $img[$i]; ?> ' class='card-img-top' alt='...'>
                <div class='card-body'>
                    <h5 class='card-title'><?= $compname[$i]; ?></h5>
                    <h6 class='card-text'>Founder : <?= $compFouded[$i]; ?></h6>
                    <h6 class='card-text'>Country : <?= $coverage[$i]; ?></h6>
                    <p class='card-text'><?= $description[$i]; ?></p>
                    <a href='../halaman_index/DaftarMobil.php' class="btn btn-primary">Check Here!</a>

                </div>
            </div>

        </div>


        <br>
        <br>
        <br>
        <?php endfor; ?>
        <!--Akhir Tampilan Card-->

        <!--Awal Spasi-->

        <div class="kosong">
            <br>
            <br>
            <br>
            <br> <br>
        </div>
        <!--Akhir Spasi-->

        <!--Awal Tabel-->
        <table border="3" class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">List Tugas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>John Putra Sihombing</td>
                    <td>201401045</td>
                    <td>Menyambungkan endpoint ke halaman web, merapikan laporan, menghias website</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Salsabila Humairah</td>
                    <td>201401065</td>
                    <td>Mengquery data, membuat html, membuat laporan</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Thoriq Aufar Nubli</td>
                    <td>201401070</td>
                    <td>mengquery data, membuat laporan</td>
                </tr>
            </tbody>
        </table>
        <!--Akhir Tabel-->

</body>

</html>