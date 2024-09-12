<link rel="stylesheet" href="style.css">

<div class="container">
<form action="" method="post">
    <input type="number" name="angka1" id="" placeholder="masukkan angka pertama">
    <input type="number" name="angka2" id="" placeholder="masukkan angka kedua">
    <br>
    <input type="submit" name="pertambahan" value="pertambahan">
    <input type="submit" name="pengurangan" value="pengurangan">
    <input type="submit" name="perkalian" value="perkalian">
    <input type="submit" name="pembagian" value="pembagian">
</form>
</div>
<div class="hasil">

<?php 
      
    if (isset($_POST["pertambahan"])) {
        $hasil = $_POST["angka1"] + $_POST["angka2"];


    }
    if (isset($_POST["pengurangan"])) {
        $hasil = $_POST["angka1"] - $_POST["angka2"];

    }
    if (isset($_POST["perkalian"])) {
        $hasil = $_POST["angka1"] * $_POST["angka2"];

    }
    if (isset($_POST["pembagian"])) {
        $hasil = $_POST["angka1"] / $_POST["angka2"];

    }
    echo "hasil = $hasil";

?>
</div>