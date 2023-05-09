<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/verhuur.css" rel="stylesheet">
        <link href="css/menu.css" rel="stylesheet">
        <link rel="shortcut icon" type="image/png" href="img/logo.ico">
        <title>De fluitende fietser</title>
    </head>
    <body>

        <?php include 'header.php';?>
        
        <div class="white">&nbsp;</div>

        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <li class="fas fa-bars"></li>
            </label>
            <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="fietsen.php">Fietsen</a>
                </li>
                <li>
                    <a class="active" href="verhuur.php">Verhuur</a>
                </li>
                <li>
                    <a href="contact.php">Contact</a>
                </li>
                <li>
                    <a href="overOns.php">Over Ons</a>
                </li>
            </ul>
        </nav>
        <div class="table">
            <?php
                echo "<table>";
                $fiets = fopen("Teksten/fietsverhuur.txt", "r") or die("Kan het bestand niet openen!");
                while(!feof($fiets)) {
                    $regel = fgets($fiets);
                    $regel = explode(":", $regel);
                    echo "<tr>";
                    foreach($regel as $ding){
                        echo "<td>" . $ding . "</td>";
                    }
                    // echo "<td><input type='checkbox' name='fietsen[]'></td>";
                    echo "</tr>";
                    //   echo "<tr><td>" . $regel . "</td></tr>";
                    }
                fclose($fiets);
                echo "</table>";
            
            ?>
        </div>

        <img class="img1" src="img/winkel1.jpg" alt="Fietsen"/>
        <img class="img2" src="img/winkel2.jpg" alt="Fietsen"/>
        <img class="img3" src="img/winkel3.jpg" alt="Fietsen"/>
        
        <form action="verhuur2.php" method="POST">
            <input class="check" type="checkbox" name="fietsen[]" value="Aanhangfiets"><br>
            <input class="check" type="checkbox" name="fietsen[]" value="Bakfiets"><br>
            <input class="check" type="checkbox" name="fietsen[]" value="Driewielfiets"><br>
            <input class="check" type="checkbox" name="fietsen[]" value="Elektrischefiets"><br>
            <input class="check" type="checkbox" name="fietsen[]" value="Kinderfiets"><br>
            <input class="check" type="checkbox" name="fietsen[]" value="ligfiets"><br>
            <input class="check" type="checkbox" name="fietsen[]" value="Omafiets"><br>
            <input class="check" type="checkbox" name="fietsen[]" value="Racefiets"><br>
            <input class="check" type="checkbox" name="fietsen[]" value="Speed pedelec"><br>
            <input class="check" type="checkbox" name="fietsen[]" value="Stadfiets"><br>
            <input class="check" type="checkbox" name="fietsen[]" value="Vouwfiets"><br>
            <input class="check" type="checkbox" name="fietsen[]" value="Zitfiets"><br>

            <input type="submit" class="bt1" name="huren" value="Huur de fiets">
        </form>





        <div class="dIv"> &nbsp; </div>

        <?php include 'Footer.php';?>
    </body>
</html>