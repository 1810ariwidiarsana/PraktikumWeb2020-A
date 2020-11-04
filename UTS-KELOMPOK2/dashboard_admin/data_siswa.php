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
            <h3><i class="fas fa-address-card mr-2"></i></i>DATA SISWA</h3>
            <hr>
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th scope="col">No.</th>
                        <th scope="col">Nama siswa</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Mata Pelajaran</th>
                        <th scope="col">Durasi yang dipilih</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Nama Tutor</th>
                        <th scope="col">Detail</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Indah Sari</td>
                        <td>6 SD</td>
                        <td>Matematika</td>
                        <td>120 menit</td>
                        <td>Jalan Gatot Subroto</td>
                        <td>Ananda</td>
                        <td><a class="btn btn-secondary btn-sm" href="#" role="button" data-toggle="modal" data-target="#profilsiswa">Lihat</a></td>
                        <td><button type="button" class="btn btn-success btn-sm"><i class="fas fa-check"></i></button></td>


                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Indah Sari</td>
                        <td>6 SD</td>
                        <td>Matematika</td>
                        <td>120 menit</td>
                        <td>Jalan Gatot Subroto</td>
                        <td>Ananda</td>
                        <td><a class="btn btn-secondary btn-sm" href="#" role="button" data-toggle="modal" data-target="#profilsiswa">Lihat</a></td>
                        <td><button type="button" class="btn btn-success btn-sm"><i class="fas fa-check"></i></button></td>

                    </tr>

                </tbody>
            </table>

        </div>

    </div>
    </div>

    <!--pop up-->
    <div class="modal fade" id="profilsiswa" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">PROFIL SISWA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" style="width: 1000px" class="posisi" ;>
                        <table style="width: 980px;">
                            <tr>
                                <td rowspan="15" width="250px">
                                    <img src="../assets/img/foto-ex.png" width="200px" height="200px" />
                                </td>
                            </tr>
                            <tr>
                                <td><b>Nama Lengkap</b></td>
                                <td>:</td>
                                <td>Indah Sari</td>
                            </tr>
                            <tr>
                                <td><b>Jenis Kelamin</b></td>
                                <td>:</td>
                                <td>Perempuan</td>
                            </tr>
                            <tr>
                                <td><b>Tempat Lahir</b></td>
                                <td>:</td>
                                <td>Denpasar</td>
                            </tr>
                            <tr>
                                <td><b>Tanggal Lahir</b></td>
                                <td>:</td>
                                <td>13 Oktober 2005</td>
                            </tr>
                            <tr>
                                <td><b>No. Telepon</b></td>
                                <td>:</td>
                                <td>081xxxxxxxxx</td>
                            </tr>
                            <tr>
                                <td><b>Nama Orang Tua</b></td>
                                <td>:</td>
                                <td>Andin Dewi</td>
                            </tr>
                            <tr>
                                <td><b>No. Telepon Orang Tua</b></td>
                                <td>:</td>
                                <td>081xxxxxxxxx</td>
                            </tr>
                            <tr>
                                <td><b>Alamat</b></td>
                                <td>:</td>
                                <td>Jalan Gatot Subroto</td>
                            </tr>
                            <tr>
                                <td><b>Kelas</b></td>
                                <td>:</td>
                                <td>6 SD</td>
                            </tr>
                            <tr>
                                <td><b>Sekolah</b></td>
                                <td>:</td>
                                <td>SD 1 Denpasar</td>
                            </tr>
                            <tr>
                                <td><b>Mata Pelajaran</b></td>
                                <td>:</td>
                                <td>Matematika</td>
                            </tr>
                            <tr>
                                <td><b>Durasi yang dipilih</b></td>
                                <td>:</td>
                                <td>120 menit</td>
                            </tr>
                            <tr>
                            </tr>
                        </table>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info">Edit Profil</button>
                </div>
            </div>
        </div>
    </div>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <?php include 'jsnya.php' ?>
</body>

</html>