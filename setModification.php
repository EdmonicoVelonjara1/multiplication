<?php
    // require 'modsify.php';
    $a = $_POST['a'];
    $I = $_POST['I'];
    
    
    echo "a = $a";
    echo "i = $I<br>";
    $A = 0;
    $B = 0;
    $indice =0;
    $myfile1 = fopen('txt1.txt', "r") or die("Impossible d'ouvrir le fichier !");
    $indice = fread($myfile1,filesize('txt1.txt'));
    fclose($myfile1);
    // Lire le contenu du fichier dans un tableau
    $lines = file('txt.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// Assurez-vous que le fichier contient au moins trois lignes
    if (count($lines) >= 2) {
        $A = intval($lines[0]); // Convertir en entier
        $B = intval($lines[1]);
        
    // Afficher les valeurs
        echo "Variable 1 : $A<br>";
        echo "Variable 2 : $B<br>";
        echo "Variable 3 : $indice<br>";
} 

    echo "A =$A";
    echo "B = $B";
    echo "indice = $indice";

    header("Location: http://www.tablemulti.com/transitDisplay.php?a=$a&I=$I&b=$B&A=$A&indice=$indice");
    exit;
?>