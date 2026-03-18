<!DOCTYPE html>
<html lang="ms">

<head>
    <meta charset="UTF-8">
    <title>Status Pemprosesan Permohonan</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="page-body">

    <div class="form-container">
        <h2 class="page-title">Semakan Permohonan</h2>

        <?php

        // Ambil input
        $nama = trim($_POST['nama'] ?? '');
        $tel = trim($_POST['tel'] ?? '');
        $tarikh = trim($_POST['tarikh'] ?? '');
        $program = trim($_POST['program'] ?? '');
        $jantina = trim($_POST['jantina'] ?? '');
        $alasan = trim($_POST['alasan'] ?? '');
        $pengesahan = trim($_POST['pengesahan'] ?? '');

        // SATU chain sahaja
        if ($_SERVER["REQUEST_METHOD"] != "POST") {
            echo "<p class='error-box'>Sila hantar borang permohonan terlebih dahulu.</p>";

        } elseif ($nama == '') {
            echo "<div class='error-box'>Nama Penuh mesti diisi.</div>";

        } elseif ($tel == '') {
            echo "<div class='error-box'>No. Telephone mesti diisi.</div>";

        } elseif ($tarikh == '') {
            echo "<div class='error-box'>Tarikh Permohonan mesti diisi.</div>";

        } elseif ($program == '') {
            echo "<div class='error-box'>Program Pengajian mesti dipilih.</div>";

        } elseif ($jantina == '') {
            echo "<div class='error-box'>Jantina mesti dipilih.</div>";

        } elseif ($pengesahan == '') {
            echo "<div class='error-box'>Anda mesti menanda kotak pengesahan.</div>";

        } elseif ($alasan == '') {
            echo "<div class='error-box'>Alasan Sokongan mesti diisi.</div>";

        } elseif (strlen($alasan) < 25) {
            echo "<div class='error-box'>Alasan mestilah sekurang-kurangnya 25 aksara.</div>";

        } else {
            echo "<div class='success-box'>";
            echo "<strong>Permohonan Berjaya Disemak!</strong><br><br>";
            echo "Terima kasih, <strong>" . htmlspecialchars($nama) . "</strong>. Permohonan anda akan disemak oleh pengurusan.";
            echo "</div>";
        }

        ?>

        <br>
        <a href="index.php" class="back-link">&laquo; Kembali ke Halaman Permohonan</a>
    </div>

</body>

</html>