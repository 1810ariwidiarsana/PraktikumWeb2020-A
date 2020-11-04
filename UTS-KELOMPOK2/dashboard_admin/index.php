<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <?php include 'cssnya.php' ?>

    <title>Dashboard Admin</title>
</head>

<body>
    <!--navbar-->
    <?php include 'navbar.php' ?>
    <!--end navbar-->

    <div class="row no-gutters mt-5">
        <!--bagian sisi kiri-->
        <?php include 'sidebar.html' ?>

        <!--bagian sisi kanan-->
        <div class="col-md-10 p-5 pt-2">
            <h3><i class="fas fa-chalkboard-teacher mr-2"></i>DASHBOARD</h3>
            <hr>

            <div class="card mb-3 shadow p-3 mb-5 bg-white rounded" style="max-width: 940px; max-height: 240px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="../assets/img/tiga.png" class="card-img pl-4" alt="gambar" style="width: 230px;">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h1 class="card-title display text-muted">DATA TUTOR</h1>
                            <p class="text-body" id="murid"> 2 Tutor</p>
                            <a href="data_tutor.php">
                                <p class="card-text text-info">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="card mb-3 shadow p-3 mb-5 bg-white rounded" style="max-width: 940px; max-height: 240px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="../assets/img/tiga.png" class="card-img pl-4" alt="gambar" style="width: 230px;">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h1 class="card-title display text-muted">DATA SISWA</h1>
                            <p class="text-body" id="murid"> 2 Siswa</p>
                            <a href="data_siswa.php">
                                <p class="card-text text-info">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <?php include 'jsnya.php' ?>
</body>

</html>