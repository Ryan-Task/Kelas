<?php 
for ($i=0; $i <=10 ; $i++) { 
    echo $i;
}
echo "<br>";
for ($i=10; $i >=0 ; $i--) { 
    echo $i;
}
echo "<br>";
$ganjil = 5%2;
echo $ganjil;

echo "<br>";
for ($i=1; $i < 100 ; $i++) { 
    $ganjil = $i % 2;
    // echo $ganjil;
    if ($ganjil == 0) {
        echo $i;
    }
    // jika memakai 1 maka keluar ganjil
}
echo "<br>";
$kkm = 80;
$nilai = 75;
if ($nilai > $kkm) {
    echo "lulus";
} else {
    echo "tidak lulus";
}

echo "<br>";
$status = "tidak lulus";
if ($nilai > $kkm) {
    $status = "lulus";
}

echo $status;
echo "<br>";

$raport = 0;
$tugas = 1;

if ($tugas == 1) {
    $raport = 80;     
}
echo $raport;
echo "<br>";

$bulan = 1;
$tanggal = 25;
$keterangan = "salah";

if ($bulan > 0 && $bulan < 13) {
    // $keterangan = "benar";
    // zodiak
    if ($tanggal > 0 && $tanggal < 32) {
        $keterangan = "benar";
        if ($bulan == 1 && $tanggal <= 20) {
            $keterangan = "aquarius";
        }
        if ($bulan == 2 && $tanggal <= 20) {
            $keterangan = "niggarius";
        }
        if ($bulan == 3 && $tanggal <= 20) {
            $keterangan = "fairus";
        }
        if ($bulan == 4 && $tanggal <= 20) {
            $keterangan = "kairus";
        }
        if ($bulan == 5 && $tanggal <= 20) {
            $keterangan = "rexus";
        }
        if ($bulan == 6 && $tanggal <= 20) {
            $keterangan = "darus";
        }
        if ($bulan == 7 && $tanggal <= 20) {
            $keterangan = "asus";
        }
        if ($bulan == 8 && $tanggal <= 20) {
            $keterangan = "atrus";
        }
        if ($bulan == 9 && $tanggal <= 20) {
            $keterangan = "kontrus";
        }
        if ($bulan == 10 && $tanggal <= 20) {
            $keterangan = "mekrus";
        }
        if ($bulan == 11 && $tanggal <= 20) {
            $keterangan = "jemrus";
        }
        if ($bulan == 12 && $tanggal <= 20) {
            $keterangan = "surus";
        }
        if ($bulan == 1 && $tanggal > 20 && $tanggal <= 31) {
            $keterangan = "pisces";
        }
        if ($bulan == 2 && $tanggal > 20 && $tanggal <= 29) {
            $keterangan = "orus";
        }
        if ($bulan == 3 && $tanggal > 20 && $tanggal <= 31) {
            $keterangan = "araxus";
        }
        if ($bulan == 4 && $tanggal > 20 && $tanggal <= 30) {
            $keterangan = "petrus";
        }
        if ($bulan == 5 && $tanggal > 20 && $tanggal <= 31) {
            $keterangan = "aksus";
        }
        if ($bulan == 6 && $tanggal > 20 && $tanggal <= 30) {
            $keterangan = "daus";
        }
        if ($bulan == 7 && $tanggal > 20 && $tanggal <= 31) {
            $keterangan = "rakus";
        }
        if ($bulan == 8 && $tanggal > 20 && $tanggal <= 31) {
            $keterangan = "papus";
        }
        if ($bulan == 9 && $tanggal > 20 && $tanggal <= 30) {
            $keterangan = "libra";
        }
        if ($bulan == 10 && $tanggal > 20 && $tanggal <= 31) {
            $keterangan = "leo";
        }
        if ($bulan == 11 && $tanggal > 20 && $tanggal <= 30) {
            $keterangan = "arus";
        }
        if ($bulan == 12 && $tanggal > 20 && $tanggal <= 31) {
            $keterangan = "apikas";
        }
    }
}

echo $keterangan;
?>
