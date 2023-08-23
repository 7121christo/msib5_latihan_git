<!-- DIBUAT OLEH CHRISTOPHORUS ADYATMA WAHYU SETYA NAYOTTAMA -->
<!-- UNIVERSITAS KRISTEN DUTA WACANA PRODI INFORMATIKA -->

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom Theme CSS -->
    <link rel="stylesheet" href="style.css">

    <title>Hello, world!</title>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">CHRadyatma | Web Developer</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Hobby</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- Navigation -->

    <!-- Profil -->
    <?php
    $nama="Christophorus Adyatma";
    $role="Duta Wacana Christian University's Undergraduate Student";
    $about="I am an undergraduate student of Information Technology at Duta Wacana Christian University. I am interested in front-end development. I am committed to forging a connection between the realms of computation and innovation, drawing upon my programming skills and my fervor for technological advancements. My unwavering pursuit of knowledge empowers me to excel within the dynamic landscape of computer science, where rapid evolution is the norm.";
    ?>

    <section class="jumbotron text-center">
        <img src="img/profilepic.png" alt="Christphorus Nayottama" width="200" />
        <h1 class="display-4 " style="color:#FBFBFF"><b><?php echo $nama ?></b></h1>
        <p class="lead fs-5" style="color:#FBFBFF"><b><?php echo $role ?></b></p>
        <br>
        <br>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1"
                d="M0,96L0,32L36.9,32L36.9,64L73.8,64L73.8,288L110.8,288L110.8,192L147.7,192L147.7,224L184.6,224L184.6,32L221.5,32L221.5,64L258.5,64L258.5,32L295.4,32L295.4,320L332.3,320L332.3,224L369.2,224L369.2,288L406.2,288L406.2,288L443.1,288L443.1,32L480,32L480,64L516.9,64L516.9,256L553.8,256L553.8,64L590.8,64L590.8,160L627.7,160L627.7,224L664.6,224L664.6,224L701.5,224L701.5,192L738.5,192L738.5,320L775.4,320L775.4,128L812.3,128L812.3,256L849.2,256L849.2,320L886.2,320L886.2,128L923.1,128L923.1,288L960,288L960,288L996.9,288L996.9,64L1033.8,64L1033.8,64L1070.8,64L1070.8,320L1107.7,320L1107.7,256L1144.6,256L1144.6,224L1181.5,224L1181.5,0L1218.5,0L1218.5,160L1255.4,160L1255.4,192L1292.3,192L1292.3,320L1329.2,320L1329.2,320L1366.2,320L1366.2,0L1403.1,0L1403.1,32L1440,32L1440,320L1403.1,320L1403.1,320L1366.2,320L1366.2,320L1329.2,320L1329.2,320L1292.3,320L1292.3,320L1255.4,320L1255.4,320L1218.5,320L1218.5,320L1181.5,320L1181.5,320L1144.6,320L1144.6,320L1107.7,320L1107.7,320L1070.8,320L1070.8,320L1033.8,320L1033.8,320L996.9,320L996.9,320L960,320L960,320L923.1,320L923.1,320L886.2,320L886.2,320L849.2,320L849.2,320L812.3,320L812.3,320L775.4,320L775.4,320L738.5,320L738.5,320L701.5,320L701.5,320L664.6,320L664.6,320L627.7,320L627.7,320L590.8,320L590.8,320L553.8,320L553.8,320L516.9,320L516.9,320L480,320L480,320L443.1,320L443.1,320L406.2,320L406.2,320L369.2,320L369.2,320L332.3,320L332.3,320L295.4,320L295.4,320L258.5,320L258.5,320L221.5,320L221.5,320L184.6,320L184.6,320L147.7,320L147.7,320L110.8,320L110.8,320L73.8,320L73.8,320L36.9,320L36.9,320L0,320L0,320Z">
            </path>
        </svg>
    </section>

    <!-- About -->
    <section id="about">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <br><br>
                    <h1>About Me</h1>
                </div>
                <div class="row fs-5">
                    <div class="col">
                        <p><?php echo $about ?></p>
                    </div>

                </div>
            </div>

        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#b80c09" fill-opacity="1"
                d="M0,128L0,288L36.9,288L36.9,32L73.8,32L73.8,288L110.8,288L110.8,64L147.7,64L147.7,288L184.6,288L184.6,64L221.5,64L221.5,128L258.5,128L258.5,32L295.4,32L295.4,160L332.3,160L332.3,96L369.2,96L369.2,224L406.2,224L406.2,256L443.1,256L443.1,224L480,224L480,192L516.9,192L516.9,192L553.8,192L553.8,192L590.8,192L590.8,256L627.7,256L627.7,160L664.6,160L664.6,288L701.5,288L701.5,160L738.5,160L738.5,256L775.4,256L775.4,64L812.3,64L812.3,128L849.2,128L849.2,160L886.2,160L886.2,160L923.1,160L923.1,96L960,96L960,128L996.9,128L996.9,160L1033.8,160L1033.8,288L1070.8,288L1070.8,320L1107.7,320L1107.7,224L1144.6,224L1144.6,256L1181.5,256L1181.5,160L1218.5,160L1218.5,288L1255.4,288L1255.4,192L1292.3,192L1292.3,224L1329.2,224L1329.2,256L1366.2,256L1366.2,128L1403.1,128L1403.1,96L1440,96L1440,320L1403.1,320L1403.1,320L1366.2,320L1366.2,320L1329.2,320L1329.2,320L1292.3,320L1292.3,320L1255.4,320L1255.4,320L1218.5,320L1218.5,320L1181.5,320L1181.5,320L1144.6,320L1144.6,320L1107.7,320L1107.7,320L1070.8,320L1070.8,320L1033.8,320L1033.8,320L996.9,320L996.9,320L960,320L960,320L923.1,320L923.1,320L886.2,320L886.2,320L849.2,320L849.2,320L812.3,320L812.3,320L775.4,320L775.4,320L738.5,320L738.5,320L701.5,320L701.5,320L664.6,320L664.6,320L627.7,320L627.7,320L590.8,320L590.8,320L553.8,320L553.8,320L516.9,320L516.9,320L480,320L480,320L443.1,320L443.1,320L406.2,320L406.2,320L369.2,320L369.2,320L332.3,320L332.3,320L295.4,320L295.4,320L258.5,320L258.5,320L221.5,320L221.5,320L184.6,320L184.6,320L147.7,320L147.7,320L110.8,320L110.8,320L73.8,320L73.8,320L36.9,320L36.9,320L0,320L0,320Z">
            </path>
        </svg>
    </section>

    <!-- Hobby -->

    <?php
    $bukucapt="I love to read books, and it opens my eyes to a world of knowledge and escapades, enriching my mind with every turn of page. Reading books gives me peace, inspiration, and unending opportunities to broaden my horizon.";
    $gamecapt="I enjoy immersing myself in the world of video games since it enables me to go on exhilarating virtual journeys, overcome obstacles, and discover new interactive entertainment worlds.";
    $watchcapt="I enjoy watching movies because it brings me to different stories, emotions, and cinematic landscapes, providing a delightful escape from the routine. Through films, I explore different cultures, stories, and characters, all from the comfortable confines of my screen.";
    ?>
    <section id="projects">
        <div class="container">
            <div class="row">
                <div class="col">
                    <br>
                    <br>
                    <h1 style="color:#FBFBFF;text-align:center">My Hobbies</h1>
                    <br>
                    <br>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4 mb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/buku.png" class="card-img-top" alt="buku">
                        <div class="card-body">
                            <h5 class="card-title">Reading Books</h5>
                            <p class="card-text"><?php echo $bukucapt ?></p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/game.png" class="card-img-top" alt="buku">
                        <div class="card-body">
                            <h5 class="card-title">Playing Video Games</h5>
                            <p class="card-text"><?php echo $gamecapt ?></p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/film.png" class="card-img-top" alt="buku">
                        <div class="card-body">
                            <h5 class="card-title">Watching Movies</h5>
                            <p class="card-text"><?php echo $watchcapt ?></p>

                        </div>
                    </div>
                </div>
            </div>



        </div>



        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1"
                d="M0,128L0,128L36.9,128L36.9,64L73.8,64L73.8,32L110.8,32L110.8,288L147.7,288L147.7,0L184.6,0L184.6,0L221.5,0L221.5,192L258.5,192L258.5,224L295.4,224L295.4,160L332.3,160L332.3,256L369.2,256L369.2,32L406.2,32L406.2,32L443.1,32L443.1,256L480,256L480,320L516.9,320L516.9,32L553.8,32L553.8,64L590.8,64L590.8,128L627.7,128L627.7,96L664.6,96L664.6,288L701.5,288L701.5,32L738.5,32L738.5,224L775.4,224L775.4,64L812.3,64L812.3,160L849.2,160L849.2,256L886.2,256L886.2,256L923.1,256L923.1,96L960,96L960,192L996.9,192L996.9,32L1033.8,32L1033.8,320L1070.8,320L1070.8,288L1107.7,288L1107.7,224L1144.6,224L1144.6,96L1181.5,96L1181.5,288L1218.5,288L1218.5,64L1255.4,64L1255.4,64L1292.3,64L1292.3,32L1329.2,32L1329.2,96L1366.2,96L1366.2,256L1403.1,256L1403.1,32L1440,32L1440,320L1403.1,320L1403.1,320L1366.2,320L1366.2,320L1329.2,320L1329.2,320L1292.3,320L1292.3,320L1255.4,320L1255.4,320L1218.5,320L1218.5,320L1181.5,320L1181.5,320L1144.6,320L1144.6,320L1107.7,320L1107.7,320L1070.8,320L1070.8,320L1033.8,320L1033.8,320L996.9,320L996.9,320L960,320L960,320L923.1,320L923.1,320L886.2,320L886.2,320L849.2,320L849.2,320L812.3,320L812.3,320L775.4,320L775.4,320L738.5,320L738.5,320L701.5,320L701.5,320L664.6,320L664.6,320L627.7,320L627.7,320L590.8,320L590.8,320L553.8,320L553.8,320L516.9,320L516.9,320L480,320L480,320L443.1,320L443.1,320L406.2,320L406.2,320L369.2,320L369.2,320L332.3,320L332.3,320L295.4,320L295.4,320L258.5,320L258.5,320L221.5,320L221.5,320L184.6,320L184.6,320L147.7,320L147.7,320L110.8,320L110.8,320L73.8,320L73.8,320L36.9,320L36.9,320L0,320L0,320Z">
            </path>
        </svg>
    </section>

    <!-- Footer -->
    <footer>
        <br><br>
        <p class="fw-bold text-center">Created with <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                fill="currentColor" class="bi bi-heart-fill text-danger" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
            </svg> by <a href="https://www.instagram.com/chr.adyatma/">Christophorus Nayottama</a></p>
        <br><br>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>