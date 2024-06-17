<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Better Banyumas Bootstrap</title>
    <link rel="stylesheet" href="./assets/css/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: sans-serif;
        }

        .carousel-inner img {
            height: 400px;
        }

        main {
            padding-top: 50px;
            padding-bottom: 50px;
        }

        @keyframes rotate {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        main img {
            height: 200px;
            width: 400px;
            /* animation: rotate 2s linear infinite; */
        }

        .hidden {
            display: none;
        }
    </style>
</head>

<body>
    <header class="bg-info text-white d-flex justify-content-start p-3">
        <img src="./assets/img/logo_better_banyumas.png" alt="" style="height: 50px;">
        <h1 class="ms-3">Better Banyumas</h1>
    </header>

    <nav class="navbar navbar-expand-lg bg-info-subtle">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!-- <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="?mod=home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?mod=otomotif">Otomotif</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?mod=education">Education</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?mod=lifestyle">Lifestyle</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?mod=sport">Sport</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?mod=technology">Technology</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?mod=login">Login</a>
                    </li> -->

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="otomotif">Otomotif</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="education">Education</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="lifestyle">Lifestyle</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sport">Sport</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="technology">Technology</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>