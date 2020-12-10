<?php
require_once 'db.php';
session_start();

if (!isset($_SESSION['username']))
    header('Location: login.php');

if (isset($_POST['tambahdata'])) {
    $nim = amankan($_POST['nim']);
    $nama = amankan($_POST['nama']);
    $alamat = amankan($_POST['alamat']);
    $sql = "INSERT INTO mahasiswa (nim, nama, alamat) VALUES (?, ?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->bind_param('sss', $nim, $nama, $alamat);
    if ($stmt->execute()) {
        echo '<script> alert("Berhasil nambah data") </script>';
    } else {
        echo '<script> alert("Gagal nambah data karena ' . $stmt->error . '") </script>';
    }
    $stmt->close();
}

$s = "SELECT * FROM mahasiswa";
$data = $db->query($s)->fetch_all(MYSQLI_ASSOC);

function amankan($data)
{
    $data = trim($data); //hapus spasi kanan kiri
    $data = stripslashes($data); //hapus tanda \
    $data = htmlspecialchars($data); //ilangin tag html
    return $data;
}
?>

<!-- Tugas Praktikum Oleh Ari Widiarsana 1808561010 -->
<!-- Sintaks HTML 5 -->
<!DOCTYPE html>
<!-- Bahasa yg dipakai dan tag html-->
<html lang="en">
<!-- tag head -->

<head>
    <!--pengkodean dengan ketentuan charset UTF 8-->
    <meta charset="UTF-8" />
    <!--Untuk responsive dari html-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- untuk memuat icon yang ada di title  -->
    <link rel="icon" href="img/icon.png">
    <!-- untuk memanggil css di eksternal -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Untuk titile atau judul web -->
    <title>Tugas Pertemuan 11 | PHP CRUD</title>
</head>

<body>
    <div class="container my-4">
        <div class="card shadow mx-auto w-75">
            <div class="card-header text-center">
                <h3>DATA MAHASISWA</h3>
            </div>
            <div class="card-body">
                <p>Selamat datang <?= $_SESSION['username'] ?></p>
                <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambahdata">+ Tambah Data</button>
                <table class="table table-bordered mt-4">
                    <thead>
                        <tr>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th colspan="2" class="text-center">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($data) : foreach ($data as $d) : ?>
                                <tr>
                                    <td><?= $d['nim'] ?></td>
                                    <td><?= $d['nama'] ?></td>
                                    <td><?= $d['alamat'] ?></td>
                                    <td>
                                        <a href="edit.php?id=<?= $d['id'] ?>" class="editdata">Edit</a>
                                    </td>
                                    <?php if ($_SESSION['role'] == 1) : ?>
                                        <td>
                                            <a href="hapus.php?id=<?= $d['id'] ?>" class="hapusdata">Delete</a>
                                        </td>
                                    <?php endif; ?>
                                </tr>
                        <?php endforeach;
                        endif; ?>
                    </tbody>
                </table>
            </div>
            <hr>
            <div class="card-footer">
                <a href="logout.php" class="logout">
                    <button class="btn btn-info">Logout</button>
                </a>
            </div>
        </div>
        <!-- modal -->
        <div class="modal fade" id="tambahdata" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" method="post">
                        <div class="modal-body">
                            <div class="form-group mb-3">
                                <label for="">NIM</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="nim" name="nim" required>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Nama</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="nama" name="nama" required>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Alamat</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="alamat" name="alamat" required>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="tambahdata" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="editdata" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="edit.php" method="post">
                        <div class="modal-body isiannya">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="editdata" class="btn btn-primary">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jsnya.js"></script>
</body>

</html>