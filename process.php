<?php
session_start();

if (isset($_POST['hantar'])) {

    $nama = trim($_POST['nama'] ?? '');
    $umur = trim($_POST['umur'] ?? '');
    $tarikh = trim($_POST['tarikh'] ?? '');
    $jabatan = trim($_POST['jabatan'] ?? '');
    $specs = trim($_POST['specs'] ?? '');
    $extra = $_POST['extra'] ?? [];
    $alasan = trim($_POST['alasan'] ?? '');

    $errors = [];

    if ($nama == '') {
        $errors[] = "Nama penuh tidak boleh kosong.";
    }

    if ($umur == '') {
        $errors[] = "Umur tidak boleh kosong.";
    }

    if ($tarikh == '') {
        $errors[] = "Tarikh mohon tidak boleh kosong.";
    }

    if ($jabatan == '') {
        $errors[] = "Sila pilih jabatan.";
    }

    if ($specs == '') {
        $errors[] = "Sila pilih spesifikasi diperlukan.";
    }

    if ($alasan == '') {
        $errors[] = "Alasan sokongan tidak boleh kosong.";
    } elseif (strlen($alasan) < 25) {
        $errors[] = "Alasan sokongan mestilah sekurang-kurangnya 25 aksara.";
    }

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        header("Location: result.php");
        exit();
    }

    $_SESSION['nama'] = $nama;
    $_SESSION['umur'] = $umur;
    $_SESSION['tarikh'] = $tarikh;
    $_SESSION['jabatan'] = $jabatan;
    $_SESSION['specs'] = $specs;
    $_SESSION['extra'] = $extra;
    $_SESSION['alasan'] = $alasan;
    $_SESSION['success'] = true;

    header("Location: result.php");
    exit();

} else {
    header("Location: borang.php");
    exit();
}
?>