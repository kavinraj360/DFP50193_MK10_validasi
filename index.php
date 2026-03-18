<!DOCTYPE html>
<html lang="ms">

<head>
    <meta charset="UTF-8">
    <title>Borang Permohonan</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <h2 class="header-title">Borang Permohonan Laptop</h2>

        <form action="proses.php" method="POST">

            <label>Nama:</label>
            <input type="text" name="nama" class="input-control">

            <label>No Telefon:</label>
            <input type="text" name="tel" class="input-control">

            <label>Tarikh:</label>
            <input type="date" name="tarikh" class="input-control">

            <label>Program:</label>
            <select name="program" class="input-control">
                <option value="">Pilih</option>
                <option value="IT">IT</option>
                <option value="Business">Business</option>
            </select>

            <label>Jantina:</label>
            <input type="radio" name="jantina" value="Lelaki"> Lelaki
            <input type="radio" name="jantina" value="Perempuan"> Perempuan

            <label>Alasan:</label>
            <textarea name="alasan" class="input-control"></textarea>

            <label>
                <input type="checkbox" name="pengesahan" value="yes">
                Saya setuju
            </label>

            <br><br>
            <button type="submit" class="btn-submit">Hantar</button>

        </form>
    </div>

</body>

</html>