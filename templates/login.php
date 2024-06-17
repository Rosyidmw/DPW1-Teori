<?php include "config/koneksi.php";
session_start();
if (isset($_POST['login'])) {
    $query = "select * from user_account where email = '" . $_POST['email'] . "'
            and password = '" . md5($_POST['password']) . "'";
    $data = mysqli_query($koneksi, $query);

    while ($r = mysqli_fetch_array($data)) {
        $_SESSION['iduser'] = $r['iduser'];  // Tambahkan ini
        $_SESSION['fullname'] = $r['fullname'];
        $_SESSION['email'] = $r['email'];
        $_SESSION['role'] = $r['role'];

        if ($r['role'] === 'admin') {
            header('Location: admin/page.php?mod=pengguna');
        } else if ($r['role'] === 'reporter') {
            header('Location: admin/page.php?mod=lihat');
        } else if ($r['role'] === 'user') {
            header('Location: index.php');
        }
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekomendasi Tempat Wisata di Banyumas</title>
    <link rel="stylesheet" href="login.css">
    <style>
        * {
            padding: 0;
            margin: 0;
            scroll-behavior: smooth;
            box-sizing: border-box;
        }

        header {
            background-color: #3081D0;
            display: flex;
            flex-direction: row;
            align-items: center;
            height: 100px;
            padding-left: 10px;
        }

        header img {
            height: 50px;
        }

        header h1 {
            margin-left: 30px;
        }

        nav {
            background-color: #00A9FF;
            display: flex;
            gap: 2rem;
            height: 30px;
            flex-direction: row;
            align-items: center;
            padding-left: 10px;
        }

        nav a {
            text-decoration: none;
            color: white;
            font-size: 18px;
            font-weight: 400;
        }

        nav a:hover {
            font-weight: bold;
            font-size: 17px;
        }


        main {
            display: flex;
            margin-top: 50px;
            padding: 10px;
        }


        footer {
            padding: 20px;
            color: #fff;
            background-color: #3081D0;
            text-align: center;
        }


        /* Login Form */
        .login {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            min-height: 100vh;
        }

        .card {
            width: 100%;
            max-width: 670px;
            padding: 32px;
            align-items: center;
            justify-content: center;
        }

        .card img {
            height: 75px;
        }

        .login-input {
            padding: 32px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            overflow: auto;
        }

        .login-input input {
            display: block;
            width: 100%;
            font-size: 16px;
            padding: 8px;
            margin: 8px 0 16px 0;
            border: 1px solid #a0a0a0;
            border-radius: 8px;
        }

        .login-input button {
            margin-top: 32px;
            padding: 8px 32px;
            background-color: #F3F4F6;
            border: 0;
            border-radius: 8px;
            font-size: 16px;
            color: #000000;
            font-weight: normal;
            text-transform: uppercase;
            cursor: pointer;
        }

        .btn {
            display: flex;
            flex-direction: row;
            justify-content: center;
            gap: 5rem;
        }

        /* Register */

        .jenis_kelamin {
            margin-top: 10px;
        }

        .jenis_kelamin {
            display: flex;
        }

        .jenis_kelamin input {
            margin-right: 10px;
        }

        .hobi {
            display: flex;
        }

        select {
            width: 200px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"],
        select {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
        }
    </style>
</head>

<body>
    <header>
        <img src="img/logo_better_banyumas.png" alt="Logo Better Banyumas">
        <h1>Better Banyumas</h1>
    </header>

    <nav>
        <a href="?mod=home">Home</a>
    </nav>

    <div class="login">
        <div class="card">
            <img src="img/logo_better_banyumas.png" alt="">
            <form id="loginForm" class="login-input" action="" method="POST">
                <label for="inputEmail">Username</label>
                <input id="inputEmail" type="email" required placeholder="Email" name="email">
                <label for="inputPassword">Password</label>
                <input id="inputPassword" type="password" placeholder="Password" name="password" required>
                <div class="btn">
                    <button id="buttonLogin" type="submit">Forgot</button>
                    <button name="login" id="buttonLogin" type="submit">Login</button>
                </div>
            </form>
        </div>

    </div>

    <footer>
        <p>Copyright &copf; Rosyid Mukti Wibowo - 2211104076</p>
    </footer>
</body>

</html>