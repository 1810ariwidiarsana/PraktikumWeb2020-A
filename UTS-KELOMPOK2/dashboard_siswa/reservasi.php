<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <?php include 'cssnya.php' ?>
    <title>Reservasi</title>
</head>

<body>
    <div class="mb-4" style="background-color: #17a2b8; width: 100%;">
        <br>
        <h2 class="text-center mt-3 text-white">RESERVASI TUTOR</h2>
        <br><br>
    </div>
    <div class="container">
        <form>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Pilih Durasi Belajar :</label>
                        <select type="number" class="form-control">
                            <option>Durasi belajar</option>
                            <option>90 menit</option>
                            <option>120 menit</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Pilih Mata Pelajaran :</label>
                        <select type="number" class="form-control">
                            <option>Mata pelajaran</option>
                            <option>IPA</option>
                            <option>IPS</option>
                            <option>Matematika</option>
                            <option>Bahasa Inggris</option>
                            <option>Fisika</option>
                            <option>Kimia</option>
                            <option>Biologi</option>
                            <option>Geografi</option>
                            <option>Sosiologi</option>
                            <option>Ekonomi</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Lokasi Belajar</label>
                        <textarea class="form-control" placeholder="Masukkan lokasi belajar"></textarea>
                    </div>
                </div>
            </div>
        </form>
        <br>
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
                        Apakah Anda sudah yakin dengan data Anda?<br>Jika sudah, klik SIMPAN. Jika belum, klik BATAL.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">BATAL</button>
                        <a href="index.php"><button type="button" class="btn btn-primary">SIMPAN</button></a>
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