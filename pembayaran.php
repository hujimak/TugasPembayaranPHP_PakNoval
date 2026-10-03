<?php
// Mengambil data dari formulir pembayaran dan penginputan data
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];
        $totalharga = $harga * $jumlah;

// Mengecek apakah tombol submit berhasil menggunakan isset
        if (isset($_POST['kirim'])) {
            echo "==============================";
            echo "<h1>Hasil Pembayaran</h1>";
            echo "==============================";
            echo "<br>";
            echo "Nama Barang: " . $nama;
            echo "<br>";
            echo "Harga Satuan: Rp" . $harga;
            echo "<br>";
            echo "Jumlah Pembelian: " . $jumlah;
            echo "<br>";
            echo "==============================";
        }
        
// Menggunakan percabangan untuk menentukan diskon
        if ($totalharga >= 500000) {
            $diskon = $totalharga * 0.2;
            $totalBayar = $totalharga - $diskon;
            echo "<br>";
            echo "Diskon: Rp" . $diskon;
            echo "<br>";
            echo "Total Pembayaran: Rp" . $totalharga - $diskon;
            echo "<br>";
            echo "==============================";
            echo "<br>";
            echo "Terimakasih Telah Berbelanja🙏";
            echo "<br>";
            echo "==============================";
        } elseif ($totalharga >= 250000 && $totalharga < 500000) {
            $diskon = $totalharga * 0.1;
            $totalBayar = $totalharga - $diskon;
            echo "<br>";
            echo "Diskon: Rp" . $diskon;
            echo "<br>";
            echo "Total Pembayaran: Rp" . $totalharga - $diskon;
            echo "<br>";
            echo "==============================";
            echo "<br>";
            echo "Terimakasih Telah Berbelanja🙏";
            echo "<br>";
            echo "==============================";
        } elseif ($totalharga <= 250000) {
            $diskon = 0;
            $totalBayar = $totalharga - $diskon;
            echo "<br>";
            echo "Diskon: Rp" . $diskon;
            echo "<br>";
            echo "Total Pembayaran: Rp" . $totalharga - $diskon;
            echo "==============================";
            echo "<br>";
            echo "Terimakasih Telah Berbelanja🙏";
            echo "<br>";
            echo "==============================";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <hr>
    <!-- Formulir Pembayaran serta Penginputan Data -->
    <form action="" method="POST">
        <label>Nama Barang :</label>
        <input type="text" name="nama" required>
        <br>
        <label>Harga Satuan :</label>
        <input type="number" name="harga" min="0" required>
        <br>
        <label>Jumlah Pembelian :</label>
        <input type="number" name="jumlah" min="0" required>
        <br>
        <button type="submit" name="kirim">Submit</button>
    </form>
</body>
</html>