<?php
if (isset($_POST['daftar'])) {
    $nama = amankan($_POST['nama']);
    $nim = amankan($_POST['nim']);
    $nilai1 = intval(amankan($_POST['nilai1']));
    $nilai2 = intval(amankan($_POST['nilai2']));
    if ($nilai1 > 100 || $nilai1 < 0) {
        echo "<script>alert('Silahkan masukkan nilai 1 antara 0-100'); window.history.back(); </script>";
        die;
    }
    if ($nilai2 > 100 || $nilai2 < 0) {
        echo "<script>alert('Silahkan masukkan nilai 2 antara 0-100'); window.history.back(); </script>";
        die;
    }
    $jumlahnilai = $nilai1 + $nilai2;
    $rerata = $jumlahnilai / 2;
    $nims = [];
    $namas = [];
    $nilai1s = [];
    $nilai2s = [];
    $jumlahnilais = [];
    $reratas = [];
    if (isset($_POST['nims'])) {
        $tmpnim = $_POST['nims'];
        $tmpnama = $_POST['namas'];
        $tmpn1 = $_POST['nilai1s'];
        $tmpn2 = $_POST['nilai2s'];
        $tmpj = $_POST['jumlahnilais'];
        $tmpr = $_POST['reratas'];
        for ($i = 0; $i < count($tmpnim); $i++) {
            array_push($nims, $tmpnim[$i]);
            array_push($namas, $tmpnama[$i]);
            array_push($nilai1s, $tmpn1[$i]);
            array_push($nilai2s, $tmpn2[$i]);
            array_push($jumlahnilais, $tmpj[$i]);
            array_push($reratas, $tmpr[$i]);
        }
    }
    if (in_array($nim, $nims)) {
        echo "<script>alert('NIM sudah ada silahkan input NIM yang lain'); window.history.back(); </script>";
        die;
    }
    array_push($nims, $nim);
    array_push($namas, $nama);
    array_push($nilai1s, $nilai1);
    array_push($nilai2s, $nilai2);
    array_push($jumlahnilais, $jumlahnilai);
    array_push($reratas, $rerata);
    $list = '<div class="baris" style="margin-top: 10px;">';
    for ($i = 0; $i < count($nims); $i++) {
        if ($i % 3 == 0) {
            $list = $list . '</div><div class="baris" style="margin-top: 10px;">';
        }
        $list =  $list . '<div class="kolom" style="margin-right: 5px; background-color: #d2cbcb; border-radius: 23px;">
        <p>NIM : ' . $nims[$i]
            . '</p><p>Nama: ' . $namas[$i] . '</p>
            <p>Nilai 1: ' . $nilai1s[$i] . ' </p>
            <p>Nilai 2: ' . $nilai2s[$i] . ' </p>
            <p>Jumlah Nilai: ' . $jumlahnilais[$i] . ' </p>
            <p>Rata-rata: ' . $reratas[$i] . ' </p>
        </div>';
    }
    $list = $list . '</div>';
}

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
    <link rel="stylesheet" href="style.css">
    <!-- Untuk titile atau judul web -->
    <title>Tugas Pertemuan 10 | PHP</title>
</head>

<body>
    <!-- membuat section isi -->
    <div class="isi" style="margin-top: 100px;">
        <form action="" method="post" class="iniform">
            <div class="baris">
                <div class="kolom">
                    <input type="number" class="isi-form" name="nim" placeholder="Nim..." required>
                    <input type="text" class="isi-form" name="nama" placeholder="Nama..." required>
                    <input type="number" class="isi-form" name="nilai1" placeholder="Nilai 1..." required>
                    <input type="number" class="isi-form" name="nilai2" placeholder="Nilai 2..." required>
                </div>
                <div class="kolom"></div>
            </div>
            <?php if (isset($_POST['daftar'])) : ?>
                <?php for ($i = 0; $i < count($nims); $i++) : ?>
                    <input type="hidden" name="nims[<?= $i ?>]" class="siapkan" value="<?= $nims[$i] ?>">
                    <input type="hidden" name="namas[<?= $i ?>]" class="siapkan" value="<?= $namas[$i] ?>">
                    <input type="hidden" name="nilai1s[<?= $i ?>]" class="siapkan" value="<?= $nilai1s[$i] ?>">
                    <input type="hidden" name="nilai2s[<?= $i ?>]" class="siapkan" value="<?= $nilai2s[$i] ?>">
                    <input type="hidden" name="jumlahnilais[<?= $i ?>]" class="siapkan" value="<?= $jumlahnilais[$i] ?>">
                    <input type="hidden" name="reratas[<?= $i ?>]" class="siapkan" value="<?= $reratas[$i] ?>">
                <?php endfor; ?>
            <?php endif; ?>
            <button type="submit" class="tombol" name="daftar">Submit</button>
        </form>
        <?php if (isset($list)) : ?>
            <input type="hidden" class="listed" value='<?= $list ?>'>
        <?php endif; ?>
        <div class="list" style="margin-top: 10px;">

        </div>
    </div>
    <script src="jquery.js"></script>
    <script>
        $(document).ready(function() {
            $(".list").append($(".listed").val());
        });
    </script>
</body>

</html>