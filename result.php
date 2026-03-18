<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <title>Keputusan Permohonan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="result-page">

<div class="wrapper">
    <div class="result-card">
        <h1>Keputusan Permohonan</h1>

        <?php
        if (isset($_SESSION['errors'])) {
            foreach ($_SESSION['errors'] as $error) {
                echo "<div class='error-box'>$error</div>";
            }
            unset($_SESSION['errors']);
        } elseif (isset($_SESSION['success']) && $_SESSION['success'] == true) {
            echo "<div class='success-box'>Permohonan berjaya dihantar untuk semakan!</div>";

            echo "<div class='info-box'>";
            echo "<p><strong>Nama Penuh:</strong> " . htmlspecialchars($_SESSION['nama']) . "</p>";
            echo "<p><strong>Umur:</strong> " . htmlspecialchars($_SESSION['umur']) . "</p>";
            echo "<p><strong>Tarikh Mohon:</strong> " . htmlspecialchars($_SESSION['tarikh']) . "</p>";
            echo "<p><strong>Jabatan:</strong> " . htmlspecialchars($_SESSION['jabatan']) . "</p>";
            echo "<p><strong>Spesifikasi Diperlukan:</strong> " . htmlspecialchars($_SESSION['specs']) . "</p>";

            echo "<p><strong>Peranti Tambahan:</strong> ";
            if (!empty($_SESSION['extra'])) {
                echo htmlspecialchars(implode(", ", $_SESSION['extra']));
            } else {
                echo "Tiada";
            }
            echo "</p>";

            echo "<p><strong>Alasan Sokongan:</strong> " . htmlspecialchars($_SESSION['alasan']) . "</p>";
            echo "</div>";

            unset($_SESSION['nama']);
            unset($_SESSION['umur']);
            unset($_SESSION['tarikh']);
            unset($_SESSION['jabatan']);
            unset($_SESSION['specs']);
            unset($_SESSION['extra']);
            unset($_SESSION['alasan']);
            unset($_SESSION['success']);
        } else {
            echo "<div class='error-box'>Tiada data permohonan ditemui.</div>";
        }
        ?>

        <a href="borang.php" class="back-btn">← Kembali ke Borang</a>
    </div>
</div>

</body>
</html>