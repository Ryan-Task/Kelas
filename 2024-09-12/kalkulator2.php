<form action="" method="get">
    <input type="number" name="bill1" id="" placeholder="bilangan 1">
    <input type="number" name="bill2" id="" placeholder="bilangan 2">
    <input type="submit" name="tambah" value="tambah">
    <input type="submit" name="kali" value="kali">
    <input type="submit" name="kurang" value="kurang">
    <input type="submit" name="bagi" value="bagi">
</form>

<?php 
if (isset($_GET["tambah"])) {
    $bil1 = $_GET["bill1"];
    $bil2 = $_GET["bill2"];
    $hasil = $bil1 + $bil2;

    
}
if (isset($_GET["kali"])) {
    $bil1 = $_GET["bill1"];
    $bil2 = $_GET["bill2"];
    $hasil = $bil1 * $bil2;

}
if (isset($_GET["kurang"])) {
    $bil1 = $_GET["bill1"];
    $bil2 = $_GET["bill2"];
    $hasil = $bil1 - $bil2;

}
if (isset($_GET["bagi"])) {
    $bil1 = $_GET["bill1"];
    $bil2 = $_GET["bill2"];
    $hasil = $bil1 / $bil2;
    
}
echo $hasil;
?>