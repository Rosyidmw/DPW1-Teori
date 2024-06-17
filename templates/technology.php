<?php include "component/header.php"; ?>

<?php include "config/koneksi.php"; ?>

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="./assets/img/telkom.jpg" class="d-block w-100" alt="Image 1">
        </div>
        <div class="carousel-item">
            <img src="./assets/img/biznet.jpg" class="d-block w-100" alt="Image 2">
        </div>
        <div class="carousel-item">
            <img src="./assets/img/myrep.jpg" class="d-block w-100" alt="Image 3">
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
        <div class="col-md-6">
            <h2>Perkembangan Teknologi yang Sangat Pesat!</h2>
            <p>Halo sobat Banyumasan, makin penasaran sama Kabupaten Banyumas kan? Simak terus pembahasan berikut ini ya!
            </p>
            <p>Kalian tau gak siih, kalau di Purwokerto udah banyak lohh provider Internet yang tersedia. Mulai dari plat merah, biru, ungu, dan lain-lain. Itu artinya, perkembangan teknologi di Purwokerto semakin merata. Jadi, jangan khawatir yaa kalau mau tinggal di Purwokerto!</p>

        </div>
        <div class="col-md-6">
            <?php
            // Pastikan koneksi database berhasil
            if (!$koneksi) {
                die("Koneksi gagal: " . mysqli_connect_error());
            }

            // Query untuk mengambil berita dengan kategori 'technology'
            $sql = "SELECT judul, isi_berita, gambar FROM tbl_berita WHERE kategori='technology'";
            $result = mysqli_query($koneksi, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<h3>" . htmlspecialchars($row["judul"]) . "</h3>";
                    if (!empty($row["gambar"])) {
                        echo "<img src='assets/img/" . htmlspecialchars($row["gambar"]) . "' alt='" . htmlspecialchars($row["judul"]) . "' style='width:400px;height:200px;'>";
                    }
                    echo "<p>" . htmlspecialchars($row["isi_berita"]) . "</p>";
                }
            } else {
                echo "Tidak ada berita di kategori teknologi.";
            }
            ?>
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