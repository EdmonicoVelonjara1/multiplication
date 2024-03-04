<?php
    $a = $_GET['a'];
    $I = $_GET['i'];
    $indice = $_GET['indice'];
    $myfile1 = fopen('txt1.txt', "w") or die("Impossible d'ouvrir le fichier !");
    fwrite($myfile1,"$indice\n");
    fclose($myfile1);

    echo "a =$a, I =$I, Indice =$indice";

    header("Location: http://www.tablemulti.com/modify.php?a=$a&i=$I");
    exit;

?>