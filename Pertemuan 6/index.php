<?php

    $nama = "jiilaan";

    // echo "While loop";
    // echo "<br>";
    // echo "<br>";

    // $kondisi = 1;
    // while($kondisi < 10){
    //     echo "Testing While Loop";
    //     echo "<br>";

    //     $kondisi++;
    // }

    // echo "<br>";
    // echo "For Loop";
    // echo "<br>";
    // echo "<br>";

    // for($i = 0; $i < 10; $i++){
    //     echo "Testing for Loop";
    //     echo "<br>";

    // }

    // If($nama === "Taufik Hidayat"){
    //     echo "ini Taufik";
    // }elseif($nama === "jiilaan"){
    //     echo "ini jiilaan";
    // }else {
    //     echo "ini siapa?";
    // }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1><?php echo $nama; ?></h1>
    <?php
        if($nama === "taufik"){
            echo "<p>Selamat datang taufik</p>";
        }elseif($nama === "jiilaan"){
            echo "<p>Selamat datang jiilaan</p>";
        }else {
            echo "<p>Selamat datang</p>";
        }
    ?>

    <ul>
        <?php for($i = 1; $i <= 10; $i++) { ?>
        <li>list yang ke - <?= $i ?></li>
        <?php } ?>
    </ul>
</body>
</html>