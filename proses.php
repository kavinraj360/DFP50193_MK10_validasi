<?php
session_start();

// ambil data
$_SESSION['nama'] = trim($_POST['nama'] ?? '');
$_SESSION['tel'] = trim($_POST['tel'] ?? '');
$_SESSION['tarikh'] = trim($_POST['tarikh'] ?? '');
$_SESSION['program'] = trim($_POST['program'] ?? '');
$_SESSION['jantina'] = trim($_POST['jantina'] ?? '');
$_SESSION['alasan'] = trim($_POST['alasan'] ?? '');
$_SESSION['pengesahan'] = trim($_POST['pengesahan'] ?? '');

// VALIDATION (1 chain sahaja)
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    $_SESSION['error'] = "Sila hantar borang dahulu";

} elseif ($_SESSION['nama'] == '') {
    $_SESSION['error'] = "Nama tidak diisi";

} elseif ($_SESSION['tel'] == '') {
    $_SESSION['error'] = "No telefon tidak diisi";

} elseif ($_SESSION['tarikh'] == '') {
    $_SESSION['error'] = "Tarikh tidak diisi";

} elseif ($_SESSION['program'] == '') {
    $_SESSION['error'] = "Program tidak dipilih";

} elseif ($_SESSION['jantina'] == '') {
    $_SESSION['error'] = "Jantina tidak dipilih";

} elseif ($_SESSION['pengesahan'] == '') {
    $_SESSION['error'] = "Sila tandakan pengesahan";

} elseif ($_SESSION['alasan'] == '') {
    $_SESSION['error'] = "Alasan tidak diisi";

} elseif (strlen($_SESSION['alasan']) < 25) {
    $_SESSION['error'] = "Alasan mesti lebih 25 aksara";

} else {
    $_SESSION['success'] = "Permohonan berjaya!";
}

// redirect ke view
header("Location: result.php");
exit;