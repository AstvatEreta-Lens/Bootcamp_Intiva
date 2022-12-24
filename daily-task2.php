<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>input nilai mahasiswa</title>
</head>

<body>

    <form action="" method="post">
        Nilai:
        <input type="text" name="val" placeholder="Input your score here!">
    </form>

</body>

</html>
<?php

if (isset($_POST['val'])) {
    $nilai = $_POST["val"];
    if ($nilai < 45) {
        $grade = "[D] anda tidak lulus ";
    } elseif ($nilai == 45) {
        $grade = "[C] Cukup";
    } else if ($nilai >= 46 && $nilai <= 70) {
        $grade = "[B] Baik";
    } elseif ($nilai > 70) {
        $grade = "[A] Mantab";
    }
    echo $grade;
}




?>