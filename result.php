<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ms">

<head>
    <meta charset="UTF-8">
    <title>Keputusan</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">

        <h2 class="header-title">Keputusan Permohonan</h2>

        <?php if (isset($_SESSION['error'])): ?>
            <div class="error-msg">
                <?php echo $_SESSION['error']; ?>
            </div>

        <?php elseif (isset($_SESSION['success'])): ?>
            <div class="success-msg">
                <?php echo $_SESSION['success']; ?><br><br>
                Nama: <b>
                    <?php echo $_SESSION['nama']; ?>
                </b>
            </div>
        <?php endif; ?>

        <div class="nav-link">
            <a href="index.php" class="link-back">Kembali</a>
        </div>

    </div>

</body>

</html>