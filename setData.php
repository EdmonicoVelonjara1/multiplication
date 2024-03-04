<?php
    $a = $_POST['a'];
    $b = $_POST['b'];
    $b =$b + 1;
    $p[$b-1];
    $myfile1 = fopen('txt.txt', "w") or die("Impossible d'ouvrir le fichier !");
    fwrite($myfile1,"$a\n");
    fwrite($myfile1,"$b\n");
    fclose($myfile1);

    $myfile = fopen('file.csv', "w") or die("Impossible d'ouvrir le fichier !");

    for($i=0;$i<$b;$i++)
    {
        $p[$i] = $i*$a;
        fwrite($myfile,"$i,");
        fwrite($myfile,"$a,");
        fwrite($myfile,"$p[$i]\n");
    }
    fclose($myfile);
    header("Location: http://www.tablemulti.com/display.php");
?>