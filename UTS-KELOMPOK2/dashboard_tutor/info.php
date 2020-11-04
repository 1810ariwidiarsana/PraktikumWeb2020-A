<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <?php include 'cssnya.php' ?>



    <title>Dashboard Tutor</title>
</head>

<body>
    <!--navbar-->
    <?php include 'navbar.php' ?>
    <!--end navbar-->

    <div class="row no-gutters mt-5 h-100">
        <!--bagian sisi kiri-->
        <?php include 'sidebar.php' ?>

        <!--bagian sisi kanan-->
        <div class="col-md-10 p-5 pt-2" style="height: 620px;">
            <h3><i class="fas fa-bell mr-2"></i>INFO</h3>
            <hr>

            <div class="card mb-3 shadow p-3 mb-5 bg-white rounded" style="max-width: 940px; height: 500px;">
                <div class="row no-gutters">
                    <div class="col-md-4 mt-4">
                        <img src="../assets/img/info.png" class="card-img pl-4 mx-auto d-block" alt="gambar" style="width: 260px; margin-top: 40px;">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <div>
                                <p>Status Berkas Anda : </p>
                                <button type="button" class="btn btn-danger">BELUM DIVALIDASI</button>

                            </div>
                            <br>
                            <p class="text-body" id="text-info">Proses validasi berkas dilakukan oleh admin selama kurang lebih 2x24 jam. Jika berkas Anda sudah divalidasi,
                                maka Anda sudah dapat melakukan pembayaran.
                            </p>
                            <div>
                                <p>Status Akun Anda : </p>
                                <button type="button" class="btn btn-danger">BELUM AKTIF</button>

                            </div>
                            <br>
                            <p class="text-body" id="text-info">Untuk mengaktifkan akun pada website Tutorin Aja!, Anda dikenakan biaya sebesar 50.000/bulan.
                                Proses validasi bukti pembayaran dilakukan oleh admin selama kurang lebih 1x24 jam.</p>
                            <label>Bukti Pembayaran dapat diunggah di bawah ini :</label><br>
                            <input type="file" name="" id="">
                        </div>
                    </div>
                </div>
            </div>



        </div>

    </div>
    </div>



    <!--end couse-->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <?php include 'jsnya.php' ?>
</body>

</html>