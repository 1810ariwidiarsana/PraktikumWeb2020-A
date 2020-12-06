<?php
require_once 'db.php';

session_start();
if (!isset($_SESSION['username']))
    header('Location: login.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM mahasiswa WHERE id = '$id'";
    $db->query($sql);
    echo '<script> alert("Berhasil hapus data"); window.location.href = "index.php"; </script>';
}
