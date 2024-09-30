<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SELISIH HURUF</title>
</head>
<body>
    <h1>SELISIH HURUF</h1>
    
    <form method="POST">
        <label for="nama1">Nama 1:</label>
        <input type="text" id="nama1" name="nama1" required>
        <br>
        <label for="nama2">Nama 2:</label>
        <input type="text" id="nama2" name="nama2" required>
        <br><br>
        <input type="submit" value="Bandingkan">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama1 = $_POST['nama1'];
            $nama2 = $_POST['nama2'];

            function bandingkanNama($nama1, $nama2) {
                $panjangNama1 = strlen($nama1); // menghitung jumlah kata dalam string
                $panjangNama2 = strlen($nama2);

                echo "Jumlah karakter dari nama '$nama1' adalah: $panjangNama1 karakter<br>";
                echo "Jumlah karakter dari nama '$nama2' adalah: $panjangNama2 karakter<br>";

                if ($panjangNama1 > $panjangNama2) {
                    $selisih = $panjangNama1 - $panjangNama2;
                    echo "Nama yang memiliki karakter lebih banyak adalah: '$nama1' dengan selisih $selisih karakter<br>";
                } elseif ($panjangNama2 > $panjangNama1) {
                    $selisih = $panjangNama2 - $panjangNama1;
                    echo "Nama yang memiliki karakter lebih banyak adalah: '$nama2' dengan selisih $selisih karakter<br>";
                } else {
                    echo "JUMLAH KARAKTER SAMA!!!<br>";
                }
            }

            bandingkanNama($nama1, $nama2);
        }
    ?>
</body>
</html>