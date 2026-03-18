<!DOCTYPE html>
<html lang="ms">

<head>
    <meta charset="UTF-8">
    <title>Status Pemprosesan Permohonan</title>
    <link rel="stylesheet" href="style.css" class="css-link">
</head>

<body class="page-body">
    <div class="form-container">
        <h2 class="page-title">Semakan Permohonan</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // Ambil input
            $nama = trim($_POST['nama'] ?? '');
            $tel = trim($_POST['tel'] ?? '');
            $tarikh = trim($_POST['tarikh'] ?? '');
            $program = trim($_POST['program'] ?? '');
            $jantina = trim($_POST['jantina'] ?? '');
            $alasan = trim($_POST['alasan'] ?? '');
            $pengesahan = trim($_POST['pengesahan'] ?? '');

            $ralat = [];

            // Validation guna if + elseif
            if ($nama == '') {
                $ralat[] = "Nama Penuh mesti diisi.";
            }

            if ($tel == '') {
                $ralat[] = "No. Telephone mesti diisi.";
            }

            if ($tarikh == '') {
                $ralat[] = "Tarikh Permohonan mesti diisi.";
            }

            if ($program == '') {
                $ralat[] = "Program Pengajian mesti dipilih.";
            }

            if ($jantina == '') {
                $ralat[] = "Jantina mesti dipilih.";
            }

            if ($pengesahan == '') {
                $ralat[] = "Anda mesti menanda kotak pengesahan.";
            }

            // Alasan (guna elseif sebab berkait)
            if ($alasan == '') {
                $ralat[] = "Alasan Sokongan mesti diisi.";
            } elseif (strlen($alasan) < 25) {
                $ralat[] = "Alasan mestilah sekurang-kurangnya 25 aksara.";
            }

            // Output
            if (!empty($ralat)) {
                echo "<div class='error-box'>";
                echo "<strong>Permohonan Tidak Berjaya:</strong><br><br>";

                foreach ($ralat as $mesej) {
                    echo "- " . htmlspecialchars($mesej) . "<br>";
                }

                echo "</div>";
            } else {
                echo "<div class='success-box'>";
                echo "<strong>Permohonan Berjaya Disemak!</strong><br><br>";
                echo "Terima kasih, <strong>" . htmlspecialchars($nama) . "</strong>. Permohonan anda akan disemak.";
                echo "</div>";
            }

        } else {
            echo "<p class='error-box'>Sila hantar borang terlebih dahulu.</p>";
        }
    
        ?>

        <a href="index.php" class="back-link">&laquo; Kembali ke Halaman Permohonan</a>
    </div>
</body>

</html>