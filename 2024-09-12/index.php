<form action="" method="post">
    <input type="text" name="nama" placeholder="Masukkan nama">
    <input type="text" name="alamat" placeholder="Masukkan alamat">
    <input type="email" name="email" placeholder="Masukkan email">
    <input type="password" name="password" placeholder="Masukkan password">
    <input type="submit" value="Kirim" name="tombol">
</form>

<form action="" method="post">
    <input type="number" name="bulan" placeholder="Masukkan bulan">
    <input type="number" name="tanggal" placeholder="Masukkan tanggal">
    <input type="submit" value="Kirim" name="simpan">
</form>

<?php 

    if (isset($_POST["tombol"])) {
        $nama = $_POST["nama"];
        $alamat = $_POST["alamat"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        echo "Nama=$nama<br>";
        echo "Alamat=$alamat<br>";
        echo "Email=$email<br>";
        echo "Password=$password<br>";
    }


    if (isset($_POST["simpan"])) {
        $bulan = $_POST["bulan"];
        $tanggal = $_POST["tanggal"];

        echo "Bulan: $bulan<br>";
        echo "Tanggal: $tanggal<br>";


        $keterangan = "salah";

        if ($bulan > 0 && $bulan < 13 && $tanggal > 0 && $tanggal < 32) {
            if ($bulan == 1) {
                if ($tanggal > 0 && $tanggal < 20) {
                    $keterangan = "Capricorn";
                } elseif ($tanggal >= 20 && $tanggal < 32) {
                    $keterangan = "Aquarius";
                }
            }
            if ($bulan == 2) {
                if ($tanggal > 0 && $tanggal < 20) {
                    $keterangan = "cit";
                } elseif ($tanggal >= 20 && $tanggal < 32) {
                    $keterangan = "assss";
                }
            }
            if ($bulan == 3) {
                if ($tanggal > 0 && $tanggal < 20) {
                    $keterangan = "brok";
                } elseif ($tanggal >= 20 && $tanggal < 32) {
                    $keterangan = "res";
                }
            }
            if ($bulan == 4) {
                if ($tanggal > 0 && $tanggal < 20) {
                    $keterangan = "hitam";
                } elseif ($tanggal >= 20 && $tanggal < 32) {
                    $keterangan = "putih";
                }
            }
            if ($bulan == 5) {
                if ($tanggal > 0 && $tanggal < 20) {
                    $keterangan = "kocak";
                } elseif ($tanggal >= 20 && $tanggal < 32) {
                    $keterangan = "aing maung";
                }
            }
            if ($bulan == 6) {
                if ($tanggal > 0 && $tanggal < 20) {
                    $keterangan = "xixixix";
                } elseif ($tanggal >= 20 && $tanggal < 32) {
                    $keterangan = "hahaahah";
                }
            }
            if ($bulan == 7) {
                if ($tanggal > 0 && $tanggal < 20) {
                    $keterangan = "aaxys";
                } elseif ($tanggal >= 20 && $tanggal < 32) {
                    $keterangan = "anjay";
                }
            }
            if ($bulan == 8) {
                if ($tanggal > 0 && $tanggal < 20) {
                    $keterangan = "mino";
                } elseif ($tanggal >= 20 && $tanggal < 32) {
                    $keterangan = "martis";
                }
            }
            if ($bulan == 9) {
                if ($tanggal > 0 && $tanggal < 20) {
                    $keterangan = "nis";
                } elseif ($tanggal >= 20 && $tanggal < 32) {
                    $keterangan = "sdsxsx";
                }
            }
            if ($bulan == 10) {
                if ($tanggal > 0 && $tanggal < 20) {
                    $keterangan = "utr";
                } elseif ($tanggal >= 20 && $tanggal < 32) {
                    $keterangan = "apeka";
                }
            }
            if ($bulan == 11) {
                if ($tanggal > 0 && $tanggal < 20) {
                    $keterangan = "asod";
                } elseif ($tanggal >= 20 && $tanggal < 32) {
                    $keterangan = "dia";
                }
            }
            if ($bulan == 12) {
                if ($tanggal > 0 && $tanggal < 20) {
                    $keterangan = "apiks";
                } elseif ($tanggal >= 20 && $tanggal < 32) {
                    $keterangan = "nejrts";
                }
            }

            
        }

        echo "Zodiak: $keterangan<br>";
    }
?>
