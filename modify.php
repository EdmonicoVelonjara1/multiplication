<!DOCTYPE html>

<html>
<head>
	<meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="add.css">
    <title>Modifier</title>
</head>
<body>
    <div align="center">
        <div class="div">
            <?php
                $a = $_GET['a'];
                $I = $_GET['i'];
    
                echo "<form method=\"Post\" action=\"http://www.tablemulti.com/setModification.php\">";
                echo       "Multiplicande:<input type=\"number\" value=\"$I\" name=\"I\"><br>";
                echo       "Multiplicateur:<input type=\"number\" value=\"$a\" name=\"a\"><br>";
                echo        "<input type=\"submit\" name=\"modify\" value=\"modify\">";
                echo   "</form>";
            ?>
        </div>
    </div>
</body>
</html>