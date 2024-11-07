<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMKN 2 BUDURAN</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <a href=" index.php"><img src="images/cropped-logo-text-kecil-5.png" alt=""></a>
            </div>
            <div class="sekolah">
                <h2>SMKN 2 BUDURAN</h2>
            </div>
            <div class="navbar">
                <ul>
                    <li><a href="?menu=home"> home </a></li>
                    <li><a href="?menu=sejarah"> sejarah </a></li>
                    <li><a href="?menu=kegiatan"> kegiatan </a></li>
                    <li><a href="?menu=jadwal"> jadwal </a></li>
                    <li><a href="?menu=galeri"> galeri </a></li>
                    <li><a href="?menu=kontak"> kontak </a></li>
                </ul>
            </div>
        </div>
        <div class="konten">
            <div class="konten-isi">


                <?php 
                if (isset($_GET["menu"])) {
                    $menu = $_GET["menu"];
                    echo "<h2>Ini adalah $menu</h2>";
                    if ($menu=="home") {
                        require_once("pages/home.php");
                    }
                    if ($menu=="sejarah") {
                        require_once("pages/sejarah.php");
                    }
                    if ($menu=="galeri") {
                        require_once("pages/galeri.php");
                    }
                    if ($menu=="jadwal") {
                        require_once("pages/jadwal.php");
                    }
                    if ($menu=="kegiatan") {
                        require_once("pages/kegiatan.php");
                    }
                    if ($menu=="kontak") {
                        require_once("pages/kontak.php");
                    }
                }else {
                    require_once("pages/home.php");
    
                }
            ?>
            </div>
        </div>
        <div class="footer">
            <div class="footer-left">
                <img src="images/cropped-logo-text-kecil-5.png" alt="Logo SMKN 2 Buduran">
                <h3>SMKN 2 BUDURAN</h3>
                < p class="footer-p">Copyright by Aryanto</p>
            </div>

            <div class="footer-center">
                <h3>Kontak</h3>
                <p>Alamat: Jl. Raya Buduran No.2, Sidoarjo</p>
                <p>Telepon: (031) 123-4567</p>
                <p>Email: info@smkn2buduran.sch.id</p>
            </div>

            <div class="footer-right">
                <h3>Sosial Media</h3>
                <ul class="social-media">
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                </ul>
            </div>
        </div>

    </div>
</body>

</html>