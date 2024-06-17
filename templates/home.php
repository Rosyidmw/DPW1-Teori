<?php include "component/header.php"; ?>

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="./assets/img/curug_3.png" class="d-block w-100" alt="Image 1">
        </div>
        <div class="carousel-item">
            <img src="./assets/img/limpakuwus.jpg" class="d-block w-100" alt="Image 2">
        </div>
        <div class="carousel-item">
            <img src="./assets/img/menara_pandang.png" class="d-block w-100" alt="Image 3">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<main class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <h2>Wisata di Kabupaten Banyumas</h2>
            <p>Kabupaten Banyumas atau yang lebih dikenal dengan Kota Mendoan adalah sebuah kabupaten yang
                berada di Jawa Tengah.
                Untuk beberapa orang sendiri lebih mengenal Kabupaten Banyumas dengan nama Kota Purwokerto.
            </p>
            <p>Pada Kabupaten Banyumas, terdapat banyak tempat wisata yang bisa dikunjungi bersama keluarga,
                lohh. Penasaran? Lihat 4 tempat wisata yang wajib kamu datangi ketika berkunjung ke
                Kabupaten Banyumas!.</p>
        </div>
        <div class="col-md-4">
            <h3>Mendoan Makanan Khas Banyumas</h3>
            <a id="toggleLink" onclick="toggleContent()" style="cursor: pointer;">Tampilkan Mendoan</a>
            <div id="content" class="hidden">
                <img src="./assets/img/mendoan.png" alt="">
            </div>
        </div>
    </div>
</main>

<section class="bg-light mt-5">
    <div class="container">
        <h2>Iklan</h2>
        <div class="row">
            <div class="col-md-4">
                <img src="./assets/img/cara-berjualan-di-lazada.png" class="img-fluid" alt="Advertisement 1">
            </div>
            <div class="col-md-4">
                <img src="./assets/img/cara-berjualan-di-lazada.png" class="img-fluid" alt="Advertisement 2">
            </div>
            <div class="col-md-4">
                <img src="./assets/img/cara-berjualan-di-lazada.png" class="img-fluid" alt="Advertisement 3">
            </div>
        </div>
    </div>
</section>

<?php include "component/footer.php"; ?>