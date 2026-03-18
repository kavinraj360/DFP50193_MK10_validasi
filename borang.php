<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <title>Skim Pinjaman Komputer Riba</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="form-page">

<div class="wrapper">
    <div class="form-card">
        <h1>Skim Pinjaman Komputer Riba</h1>

        <form action="proses.php" method="POST">

            <div class="form-group">
                <label>Nama Penuh</label>
                <input type="text" name="nama" required>
            </div>

            <div class="form-group">
                <label>Umur</label>
                <input type="number" name="umur" required>
            </div>

            <div class="form-group">
                <label>Tarikh Mohon</label>
                <input type="date" name="tarikh" required>
            </div>

            <div class="form-group">
                <label>Jabatan</label>
                <select name="jabatan" required>
                    <option value="">-- Sila Pilih --</option>
                    <option value="JTMK">JTMK</option>
                    <option value="JKE">JKE</option>
                    <option value="JKM">JKM</option>
                </select>
            </div>

            <div class="form-group">
                <label>Spesifikasi Diperlukan</label>
                <div class="option-row">
                    <label class="inline-option">
                        <input type="radio" name="specs" value="Basic" required> Basic
                    </label>
                    <label class="inline-option">
                        <input type="radio" name="specs" value="High-End"> High-End
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label>Peranti Tambahan</label>
                <div class="option-row">
                    <label class="inline-option">
                        <input type="checkbox" name="extra[]" value="Tetikus"> Tetikus
                    </label>
                    <label class="inline-option">
                        <input type="checkbox" name="extra[]" value="Beg Laptop"> Beg Laptop
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label>Alasan Sokongan (Min 25 aksara)</label>
                <textarea name="alasan" rows="4" required></textarea>
            </div>

            <div class="button-group">
                <button type="submit" name="hantar" class="btn btn-submit">Hantar Permohonan</button>
                <button type="reset" class="btn btn-reset">Tetap Semula</button>
            </div>

        </form>
    </div>
</div>

</body>
</html>