<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <form action="Madlib.php" method="get"> <!--php page that hanldes the form-->
            <input type="text" name="var1">
            <br>
            <input type="text" name="var2">
            <input type="submit">
        </form>
            <?php
            $var1 = $_GET["var1"];
            $var2 = $_GET["var2"];
                echo" the world will end with $var1 <br>";
                echo "And be ruled by $var2";
            ?> 
        
    </body>
</html>