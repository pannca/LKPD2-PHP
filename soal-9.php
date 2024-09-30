<?php
function hitungPecahanRupiah($jumlah) {
    $pecahan = [
        100000 => 'Rp. 100.000',
        50000  => 'Rp. 50.000',
        20000  => 'Rp. 20.000',
        10000  => 'Rp. 10.000',
        5000   => 'Rp. 5.000',
        2000   => 'Rp. 2.000',
        1000   => 'Rp. 1.000',
        500    => 'Rp. 500',
    ];

    // ngitung hasil pecahan
    $hasil = [];

    foreach ($pecahan as $nilai => $nama) {
        if ($jumlah >= $nilai) {
            $jumlahLembar = floor($jumlah / $nilai);
            $hasil[$nama] = $jumlahLembar;
            $jumlah -= $jumlahLembar * $nilai;
        }
    }

    return $hasil;
}

$jumlahUang = 140500;
$pecahan = hitungPecahanRupiah($jumlahUang);

echo "Uang : Rp. " . number_format($jumlahUang, 0, ',', '.') . "<br>" ." " . "<br>";
echo "Lembar Rupiah:" . "<br>";
foreach ($pecahan as $pecahanUang => $jumlahLembar) {
    echo "<br>" . " - " . $pecahanUang . " : " . $jumlahLembar . "<br>";
}
?>