<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <?php include 'cssnya.php' ?>

    <title>Dashboard Siswa</title>
</head>

<body>
    <!--navbar-->
    <?php include 'navbar.php' ?>
    <!--end navbar-->


    <!--bagian sisi kanan-->
    <br><br><br><br><br>

    <div class="row">
        <div class="col">
            <h1 class="display-4 text-info text-center">Pilih Tutormu di sini!</h1>
            <hr>
        </div>
    </div>
    <br>
    <section class="search-bar">
        <div class="container">
            <div class="row">
                <div class="mx-auto d-block">
                    <form>
                        <div>
                            <div class="input-group" style="width: 600px;">
                                <input type="search" placeholder="Cari Mata Pelajaran" class="form-control">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-link"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="mx-auto d-block">
                    <form>
                        <div>
                            <div class="input-group" style="width: 600px;">
                                <input type="search" placeholder="Cari Wilayah" class="form-control">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-link"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <br><br>
    <section>
        <div class="container">
            <div class="tutor-tutor">
                <blockquote class="blockquote text-center">
                    <p class="mb-0">The capacity to learn is a gift; the ability to learn is a skill; the willingness to learn is a choice.</p>
                    <footer class="blockquote-footer">Brian Herbert, <cite title="Source Title">author</cite></footer>
                </blockquote>
                <br>
                <div class="grid">
                    <div class="row mt-4">
                        <div class="col-md-3 col-sm-12 mb-3">
                            <div class="card shadow p-3 mb-5 bg-white rounded">
                                <img src="../assets/img/orang.jpg" class="card-img-top">
                                <div class="card-body ">
                                    <div class="card-title text">
                                        <h4>CANDRA ARI</h4>
                                    </div>
                                    Halo! Saya Candra. Saya adalah mahasiswa aktif Program Studi Kimia Universitas Udayana. Suatu kebanggaan bagi saya jika dapat menjadi tutor adik-adik sekalian!
                                    <a href="" data-toggle="modal" data-target="#modalprofilTutor">
                                        <p class="card-text text-info">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-3">
                            <div class="card shadow p-3 mb-5 bg-white rounded">
                                <img src="../assets/img/orang.jpg" class="card-img-top mt-2" alt="...">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h4>ANANDA</h4>
                                    </div>
                                    Halo! Saya Ananda. Saya adalah mahasiswa aktif Program Studi Biologi Universitas Udayana. Suatu kebanggaan bagi saya jika dapat menjadi tutor adik-adik sekalian!
                                    <a href="" data-toggle="modal" data-target="#modalprofilTutor">
                                        <p class="card-text text-info">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 mb-3 ">
                            <div class="card shadow p-3 mb-5 bg-white rounded">
                                <img src="../assets/img/orang.jpg" class="card-img-top mt-2" alt="...">

                                <div class="card-body">
                                    <div class="card-title">
                                        <h4>DEVANO</h4>
                                    </div>
                                    Halo! Saya Devano. Saya adalah mahasiswa aktif Program Studi Fisika Universitas Udayana. Suatu kebanggaan bagi saya jika dapat menjadi tutor adik-adik sekalian!
                                    <a href="" data-toggle="modal" data-target="#modalprofilTutor">
                                        <p class="card-text text-info">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 mb-3">
                            <div class="card shadow p-3 mb-5 bg-white rounded">
                                <img src="../assets/img/orang.jpg" class="card-img-top mt-2" alt="...">

                                <div class="card-body">
                                    <div class="card-title">
                                        <h4>ARIS SATYA</h4>
                                    </div>
                                    Halo! Saya Aris. Saya adalah mahasiswa aktif Program Studi Farmasi Universitas Udayana. Suatu kebanggaan bagi saya jika dapat menjadi tutor adik-adik sekalian!
                                    <a href="" data-toggle="modal" data-target="#modalprofilTutor">
                                        <p class="card-text text-info">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--pop up-->
    <div class="modal fade" id="modalprofilTutor" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
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
                                <td>Indah Sari Putri</td>
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
                                <td><i>- 90 menit</i></td>
                                <td>:</td>
                                <td>75000</td>
                            </tr>
                            <tr>
                                <td><i>- 120 menit</i></td>
                                <td>:</td>
                                <td>95000</td>
                            </tr>
                        </table>
                        <br>
                        <div class="text">
                            <h5><i class="fas fa-book mr-2"></i>Pengalaman Mengajar</h5>
                            <p>Saya sudah pernah mengajar di salah satu bimbingan belajar di Bali dalam kurun waktu tiga tahun terakhir.
                                Satu tahun terakhir saya bergabung menjadi tutor di Tutorin Aja!</p>
                        </div>
                        <div class="text">
                            <h5><i class="fas fa-medal mr-2"></i>Prestasi</h5>
                            <p>1. Juara 3 Lomba Esai Nasional 2018<br>2. Juara 2 Lomba Karya Tulis Ilmiah Nasional 2019</p>
                        </div>
                        <div class="text">
                            <h5><i class="fas fa-chalkboard-teacher mr-2"></i>Metode Mengajar</h5>
                            <p>1. Siswa akan diberikan modul pembelajaran setiap topik<br>2. Modul akan dibahas pada saat pertemuan<br>3. Evaluasi pembelajaran di akhir sesi pertemuan</p>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="reservasi.php"><button type="submit" class="btn btn-info">RESERVASI</button></a>
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