<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php
        $characterName = "Jasper";
        $characterAge = 21;
        $alive = false;
        echo("I am $characterName and my age is$characterAge<br>");
        $allcaps = "ALLCAPS";
        echo(strtolower($allcaps)); // can also do strtoupper. bunch of str functions
        echo("<br>");
        echo $characterName[0];
        echo("<br>");
        $numberd = "one two";
        echo str_replace("two", "three", $numberd); 
        echo("<br>");
        echo substr($numberd, 4);
        echo("<br>");
        echo substr($numberd, 4, 2);
        ?>
    </body>
</html>