<?php
    $in = $_GET['i'];
    $b  = $_GET['b'];
    $myfile = fopen('file.csv', 'r') or die("Impossible d'ouvrir le fichier !");
    
    $a=[];$indice=[];$p=[];
    // Vérifier si le fichier a été ouvert avec succès
    if ($myfile !== false) {
        while (($data = fgetcsv($myfile,1000,",")) !== false) {
            // Alterner les couleurs de fond
            $indice[] = $data[0];
            $a[] = $data[1];
            $p[] = $data[2];
        }
    }
    fclose($myfile);
    $myfile1 = fopen('file.csv', 'w') or die("Impossible d'ouvrir le fichier !");


    for($i=0;$i<$b;$i++)
    {
        if($i==$in){
            continue;
        }
        fwrite($myfile1,"$indice[$i],");
        fwrite($myfile1,"$a[$i],");
        fwrite($myfile1,"$p[$i]\n");
    }
    fclose($myfile1);
    
    header("Location: http://www.tablemulti.com/display.php");
    exit;
?>