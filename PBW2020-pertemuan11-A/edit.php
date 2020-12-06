<?php

require_once 'db.php';
function amankan($data)
{
    $data = trim($data); //hapus spasi kanan kiri
    $data = stripslashes($data); //hapus tanda \
    $data = htmlspecialchars($data); //ilangin tag html
    return $data;
}
if (!isset($_SESSION['username']))
    header('Location: login.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM mahasiswa WHERE id = '$id'";
    $data = $db->query($sql)->fetch_assoc();
    if ($data) {
        $pesan = '
        <div class="form-group mb-3">
            <label for="">NIM</label>
            <div class="input-group">
                <input type="text" class="form-control" id="nim" name="nim" value="' . $data['nim'] . '" required>
            </div>
        </div>
        <input type="hidden" name="id" value="' . $data['id'] . '" >
        <div class="form-group mb-3">
            <label for="">Nama</label>
            <div class="input-group">
                <input type="text" class="form-control" id="nama" name="nama" value="' . $data['nama'] . '"  required>
            </div>
        </div>
        <div class="form-group mb-3">
            <label for="">Alamat</label>
            <div class="input-group">
                <input type="text" class="form-control" id="alamat" name="alamat" value="' . $data['alamat'] . '"  required>
            </div>
        </div>';
    }
    echo $pesan;
}

if (isset($_POST['editdata'])) {
    $nim = amankan($_POST['nim']);
    $nama = amankan($_POST['nama']);
    $alamat = amankan($_POST['alamat']);
    $id = $_POST['id'];
    $sql = "UPDATE mahasiswa SET nim = ?, nama = ?, alamat = ? WHERE id = '$id'";
    $stmt = $db->prepare($sql);
    $stmt->bind_param('sss', $nim, $nama, $alamat);
    if ($stmt->execute()) {
        echo '<script> alert("Berhasil Edit data"); window.location.href = "index.php"; </script>';
    } else {
        echo '<script> alert("Gagal edit data"); window.location.href = "index.php"; </script>';
    }
}
