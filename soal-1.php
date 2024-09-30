<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <label for="text">Masukkan Teks:</label><br>
        <input type="text" name="text"><br>
        <input type="submit" value="Proses">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        $text = $_POST['text'];

        $result = preg_replace('/[^0-9]/', '', $text); //buat mencari dan menyaring karakter non-numerik dari input

        if ($result) {
            $array = str_split($result, 1); //jika inputnya adalah "123", maka akan menjadi array ['1', '2', '3'].
            echo "Nilai yang ada adalah: " . implode(',', $array); // ['1', '2', '3'] akan menjadi "1,2,3".
        } else {
            echo "Tidak ada nilai";
        }
    }
    ?>
</body>
</html>