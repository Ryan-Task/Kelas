<?php 
    $Judul = "Belajar Php";
    $Judul1 = "Siswa Rpl";
    $Judul2 = "Smkn 2 Buduran";

    $juduls = ["Belajar php", "Siswa Rpl", "Smkn 2 Buduran"];

    // echo $Judul1;
    // echo $juduls[0];
    for ($i = 0; $i < 3; $i++) { 
        echo "<br>";
        echo $i;
        echo $juduls[$i];
    }

    foreach ($juduls as $key) {
        echo "<br>";
        echo $key;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<
    <h1><?= $Judul ?></h1>
    <h2><?= $Judul1 ?></h2>
    <h3><?= $Judul2 ?></h3>
    <h4><?php echo $Judul ?></h4>
    <h1><?= $juduls[2] ?></h1>

    <?php 
    for ($i = 0; $i < 3; $i++) { 
        echo "<h1>";
        echo $juduls[$i];  
        echo "</h1>";
    }
    ?>

    <h1>Menampilkan php</h1>

    <?php 
    for ($i = 0; $i < 3; $i++) { 
        ?>
        <h1><?= $juduls[$i] ?></h1>
        <?php 
    }
    ?>

    <?php 
    foreach ($juduls as $key ) {
        echo "<h2>";
        echo $key;
        echo "</h2>";
    }
    ?>
    <?php 
    foreach ($juduls as $key) {
        ?>
        <h2<?= $key?></h2>
        <?php
    }
    ?>
    <?php 
    for ($i=0; $i <10 ; $i++) { 
        echo "<h",$i,">smkn 2 buduran</h",$i,">";
    }
    ?>
    <?php 
    for ($i=0; $i <10 ; $i++) { 
        echo"<h$i>";
        echo"smkn 2 buduran";
        echo"</h$i>";
    }
    ?>
    <?php 
    for ($i=6; $i > 0; $i--) {
        echo "<h$i>"."smkn 2 buduran"."</h$i>";
        # code...
    }
    ?>
</body>
</html>
