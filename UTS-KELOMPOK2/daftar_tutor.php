<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/fontawesome/css/all.min.css">
    <title>Daftar Tutor</title>
</head>

<body>
    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand font-weight-bold text-white" href="#"></a>
            <a class="navbar-brand font-weight-bold text-white" href="index.php"><i class="fab fa-accusoft mr-2"></i>Tutorin Aja!</a>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-5">
                <br><br><br><br>
                <br>
                <h4 class="text-center">DAFTAR SEBAGAI TUTOR</h4>
                <br>
                <img src="assets/img/product_manager.png" class="rounded mx-auto d-block" height="200px" width="250px">
                <br>
                <form>
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" placeholder="Masukkan nama lengkap anda">
                    </div>
                    <div class="form-group">
                        <label>No. Telepon</label>
                        <input type="number" class="form-control" placeholder="Masukkan no. telepon anda">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Masukkan email anda">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" id="txtPassword" class="form-control" placeholder="Masukkan password anda">
                    </div>
                    <div class="form-group">
                        <label>Konfirmasi Password</label>
                        <input type="password" id="txtKonfirmasiPassword" class="form-control" placeholder="Ulangi password anda">
                    </div>
                </form>
                <a href="profile/tutor.php"><button type="submit" id="btnSubmit" class="btn btn-primary">SUBMIT</button><br></a>
            </div>
            <div class="col-6">
                <br><br><br><br><br>
                <img src="assets/img/business_conference_.png" width="950px" height="auto" class="ml-5">
            </div>
        </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script type="text/javascript">
        $(function() {
            $("#btnSubmit").click(function() {
                var password = $("#txtPassword").val();
                var confirmPassword = $("#txtKonfirmasiPassword").val();
                if (password != confirmPassword) {
                    alert("Password do not match");
                    return false;
                }
                return true;
            });
        });
    </script>
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>