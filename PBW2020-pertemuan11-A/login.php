<?php

require_once 'db.php';
session_start();

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE user = '$username'";
    $hasil = $db->query($sql)->fetch_assoc();
    if ($hasil) {
        if (strcmp($password, $hasil['password']) == 0) {
            $_SESSION['role'] = $hasil['role'];
            $_SESSION['username'] = $hasil['user'];
            header('Location: index.php');
        }
    } else {
        $pesanerror = "Data anda tidak terdapat di database";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <div class="container" style="margin-top: 90px;">
        <div class="card shadow w-50 mx-auto">
            <div class="card-header text-center">
                <h3>Halaman Login</h3>
                <?php if (isset($pesanerror)) : ?>
                    <div class="alert alert-danger">
                        <?= $pesanerror ?>
                    </div>
                <?php endif ?>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group mb-3">
                        <label for="">Username</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                    </div>
                    <hr>
                    <button class="btn btn-primary btn-block" type="submit" name="submit">Log In</button>
                </form>
            </div>
        </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>