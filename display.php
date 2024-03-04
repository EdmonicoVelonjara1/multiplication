<!DOCTYPE html>

<html>
<head>
	<meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8">
	<link rel="stylesheet" href="display.css">
	
    <title>Add Data</title>
</head>
<body>
     
    <?php
        $i=0;
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
    ?>

    <div align="center" style="margin-top:200px;">
        <div class="div">
            <table>
                <caption>Table de Multiplication</caption>
                <th>Multiplicande</th>
                <th>Produit</th>
                <th>Action</th>
                <th>Multiplicateur</th>
        
                <?php
                    $size = count($a);
                    for($i=0; $i< count($a);$i++){
                        // Afficher chaque élément dans une cellule du tableau
                        if ($i % 2 == 1) { 
                ?>
                            <tr style="background: #1E90FF">
                <?php
                        } 
                        if($i%2==0) {
                ?>
                            <tr style="background: #00FF00">
                <?php        
                        }
                        echo "<td>$indice[$i]</td>",
                            "<td>$a[$i]</td>",
                            "<td>$p[$i]</td>";

                        // Ajouter les liens de modification et de suppression
                        echo "<td>";
                        echo "<span><a href=\"http://www.tablemulti.com/transitModify.php?a=$a[$i]&i=$indice[$i]&indice=$i\" class=\"a\">Modifier</a></span>";
                        echo "<span><a href=\"http://www.tablemulti.com/delete.php?i=$i&b=$size\" class=\"delete\">Supprimer</a></span>";
                        echo "</td>";

                        // Fermer la ligne du tableau
                        echo "</tr>";
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>