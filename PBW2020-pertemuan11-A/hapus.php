<?php
require_once 'db.php';

session_start();
if (!isset($_SESSION['username']))
    header('Location: login.php');
else if (isset($_SESSION['role']))
    if ($_SESSION['role'] != 1) {
        echo '<script> alert("Tindakan anda dilarang"); window.location.href = "index.php"; </script>';
        die;
    }
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM mahasiswa WHERE id = '$id'";
    if ($db->query($sql))
        if ($db->affected_rows > 0)
            echo '<script> alert("Berhasil hapus data"); window.location.href = "index.php"; </script>';
        else
            echo '<script> alert("Data tidak ada"); window.location.href = "index.php"; </script>';
    else
        echo '<script> alert("Gagal hapus data karena ' . $db->error .  '"); window.location.href = "index.php"; </script>';
}
