<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/fontawesome/css/all.min.css">
    <title>Formulir Siswa</title>
</head>

<body>
    <div class="mb-4" style="background-color: #17a2b8; width: 100%;">
        <br>
        <h2 class="text-center mt-3 text-white">Data Profil Siswa</h2>
        <br><br>
    </div>
    <div class="container">
        <form>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Orang Tua/Wali</label>
                        <input type="text" class="form-control" placeholder="Masukkan nama orang tua/wali">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>No. Telepon Orang Tua</label>
                        <input type="number" class="form-control" placeholder="Masukkan no. telepon orang tua">
                    </div>
                </div>
            </div>
            <div>
                <p>Alamat</p>
            </div>
            <div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Kabupaten/Kota</label>
                            <input type="text" class="form-control" placeholder="Masukkan kabupaten/kota">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Kecamatan</label>
                            <input type="text" class="form-control" placeholder="Masukkan kecamatan">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Detail Alamat</label>
                            <textarea class="form-control" placeholder="Masukkan detail alamat"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Upload foto</label>
                    <input type="file" class="form-control-file">
                </div>
                <br>
        </form>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            SELESAI
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">KONFIRMASI DATA</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Apakah Anda sudah yakin dengan data Anda? <br>Jika sudah, klik SIMPAN. Jika belum, klik BATAL.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">BATAL</button>
                        <a href="../"><button type="button" class="btn btn-primary">SIMPAN</button></a>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.bundle.js"></script>
</body>

</html>