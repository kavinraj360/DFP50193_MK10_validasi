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
            // Menetapkan input kepada pemboleh ubah spesifik
            $nama = isset($_POST['nama']) ? trim($_POST['nama']) : '';
            $tel = isset($_POST['tel']) ? trim($_POST['tel']) : '';
            $tarikh = isset($_POST['tarikh']) ? trim($_POST['tarikh']) : '';
            $program = isset($_POST['program']) ? trim($_POST['program']) : '';
            $jantina = isset($_POST['jantina']) ? trim($_POST['jantina']) : '';
            $alasan = isset($_POST['alasan']) ? trim($_POST['alasan']) : '';
            $pengesahan = isset($_POST['pengesahan']) ? trim($_POST['pengesahan']) : '';

            $ralat = [];

            // Memeriksa jika ada input yang dibiarkan kosong
            if (empty($nama)) { $ralat[] = "Nama Penuh mesti diisi."; }
            if (empty($tel)) { $ralat[] = "No. Telephone mesti diisi."; }
            if (empty($tarikh)) { $ralat[] = "Tarikh Permohonan mesti diisi."; }
            if (empty($program)) { $ralat[] = "Program Pengajian mesti dipilih."; }
            if (empty($jantina)) { $ralat[] = "Jantina mesti dipilih."; }
            if (empty($pengesahan)) { $ralat[] = "Anda mesti menanda kotak pengesahan."; }

            // Memeriksa alasan (kosong dan had aksara)
            if (empty($alasan)) {
                $ralat[] = "Alasan Sokongan mesti diisi.";
            } elseif (strlen($alasan) < 25) {
                $ralat[] = "Alasan permohonan mestilah sekurang-kurangnya 25 aksara.";
            }

            // Paparan Keputusan
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
                echo "Terima kasih, <strong>" . htmlspecialchars($nama) . "</strong>. Permohonan anda akan disemak oleh pengurusan.";
                echo "</div>";
            }
        } else {
            echo "<p class='error-box'>Sila hantar borang permohonan terlebih dahulu.</p>";
        }
        ?>

        <a href="index.php" class="back-link">&laquo; Kembali ke Halaman Permohonan</a>
    </div>
</body>
</html>