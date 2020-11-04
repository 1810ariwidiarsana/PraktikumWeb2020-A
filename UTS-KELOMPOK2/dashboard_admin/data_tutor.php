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
            <h3><i class="fas fa-address-card mr-2"></i></i>DATA TUTOR</h3>
            <hr>
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th scope="col">No.</th>
                        <th scope="col">Nama tutor</th>
                        <th scope="col">Perguruan Tinggi</th>
                        <th scope="col">Program Studi</th>
                        <th scope="col">Foto</th>
                        <th scope="col">File Ijazah/Transkrip Nilai</th>
                        <th scope="col">Detail</th>
                        <th scope="col">Status</th>
                        <th scope="col">Bukti Pembayaran</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Ananda</td>
                        <td>Universitas Udayana</td>
                        <td>Biologi</td>
                        <td><u class="text-info">image1.jpg</u></td>
                        <td><u class="text-info">transkrip.pdf</u></td>
                        <td><a class="btn btn-secondary btn-sm" href="#" role="button" data-toggle="modal" data-target="#profiltutor">Lihat</a></td>
                        <td><button type="button" class="btn btn-success btn-sm"><i class="fas fa-check"></i></button></td>
                        <td><u class="text-info">bayar.jpg</u></td>
                        <td><button type="button" class="btn btn-danger btn-sm"><i class="fas fa-times"></i></button></td>

                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Universitas Udayana</td>
                        <td>Matematika</td>
                        <td><u class="text-info">image2.jpg</u></td>
                        <td><u class="text-info">transkrip.pdf</u></td>
                        <td><a class="btn btn-secondary btn-sm" href="#" role="button" data-toggle="modal" data-target="#profiltutor">Lihat</a></td>
                        <td><button type="button" class="btn btn-danger btn-sm"><i class="fas fa-times"></i></button></td>
                        <td>-</td>
                        <td><button type="button" class="btn btn-danger btn-sm"><i class="fas fa-times"></i></button></td>
                    </tr>

                </tbody>
            </table>

        </div>

    </div>
    </div>

    <!--pop up-->

    <div class="modal fade" id="profiltutor" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">PROFIL TUTOR</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" style="width: 1000px" class="posisi" ;>
                        <table style="width: 980px;">
                            <tr>
                                <td rowspan="15" width="250px">
                                    <img src="../assets/img/orang.jpg" width="220px" height="220px" />
                                </td>
                            </tr>
                            <tr>
                                <td><b>Nama Lengkap</b></td>
                                <td>:</td>
                                <td>Ananda Putri</td>
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
                                <td>8 Oktober 2010</td>
                            </tr>
                            <tr>
                                <td><b>No. Telepon</b></td>
                                <td>:</td>
                                <td>081xxxxxxxxx</td>
                            </tr>
                            <tr>
                                <td><b>Alamat</b></td>
                                <td>:</td>
                                <td>Jalan Gatot Subroto</td>
                            </tr>
                            <tr>
                                <td><b>Perguruan Tinggi</b></td>
                                <td>:</td>
                                <td>Universitas Udayana</td>
                            </tr>
                            <tr>
                                <td><b>Program Studi</b></td>
                                <td>:</td>
                                <td>Biologi</td>
                            </tr>
                            <tr>
                                <td><b>Minat Mengajar</b></td>
                                <td>:</td>
                                <td>Biologi</td>
                            </tr>
                            <tr>
                                <td><b>Biaya per sesi</b></td>
                            </tr>
                            <tr>
                                <td><i>90 menit</i></td>
                                <td>:</td>
                                <td>75000</td>
                            </tr>
                            <tr>
                                <td><i>120 menit</i></td>
                                <td>:</td>
                                <td>95000</td>
                            </tr>
                        </table>

                        <div class="text">
                            <h5>Pengalaman Mengajar</h5>
                            <p>Saya sudah pernah mengajar di salah satu bimbingan belajar di Bali dalam kurun waktu tiga tahun terakhir.
                                Satu tahun terakhir saya bergabung menjadi tutor di Tutorin Aja!</p>
                        </div>
                        <div class="text">
                            <h5>Prestasi</h5>
                            <p>1. Juara 3 Lomba Esai Nasional 2018<br>2. Juara 2 Lomba Karya Tulis Ilmiah Nasional 2019</p>
                        </div>
                        <div class="text">
                            <h5>Metode Mengajar</h5>
                            <p>1. Siswa akan diberikan modul pembelajaran setiap topik<br>2. Modul akan dibahas pada saat pertemuan<br>3. Evaluasi pembelajaran di akhir sesi pertemuan</p>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info">Edit Profil</button>
                </div>

            </div>
        </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <?php include 'jsnya.php' ?>
</body>

</html>