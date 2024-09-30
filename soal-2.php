<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Kompensasi</title>
</head>
<body>
    <h1>LEMBUR</h1>
    <form method="post" action="">
        <label for="jamMulaiKerja">Jam Mulai Kerja:</label>
        <input type="number" id="jamMulaiKerja" name="jamMulaiKerja" required>
        <br><br>
        <label for="jamPulangKerja">Jam Pulang Kerja:</label>
        <input type="number" id="jamPulangKerja" name="jamPulangKerja" required>
        <br><br>
        <input type="submit" value="Hitung Kompensasi">
    </form>

    <?php
    function hitungKompensasi($jamMulaiKerja, $jamPulangKerja) {
        $totalJamKerja = $jamPulangKerja - $jamMulaiKerja;

        $jamKerjaNormal = 8;

        $kompensasi = 0;

        if ($totalJamKerja > $jamKerjaNormal) {
            $kelebihanJam = $totalJamKerja - $jamKerjaNormal ;

            $kompensasi += 50000;

            if ($kelebihanJam > 1) {
                $kompensasi += ($kelebihanJam - 1) * 25000;
            }
        }

        return $kompensasi;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jamMulaiKerja = intval($_POST['jamMulaiKerja']);
        $jamPulangKerja = intval($_POST['jamPulangKerja']);

        if ($jamMulaiKerja >= 0 && $jamMulaiKerja <= 24 && $jamPulangKerja >= 0 && $jamPulangKerja <= 24) {
            $kompensasi = hitungKompensasi($jamMulaiKerja, $jamPulangKerja);
            echo "Kompensasi yang diterima: Rp. " . number_format($kompensasi, 0, ',', '.') . "";
        } else {
            echo "hanya sampai 24 jam !!!";
        }
    }
    ?>
</body>
</html>