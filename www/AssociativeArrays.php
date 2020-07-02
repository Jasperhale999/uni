<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <form action="AssociativeArrays.php" method="post">
            <input type="text" name="student">
            <input type="submit">
        </form>
        <?php
            $grades = array("jim"=>"A+", "lingling"=>"C+");
            //               key  value
            echo $grades["jim"];
            echo"<br>";
            $grades["jim"] = "F";
            echo $grades["jim"];
            $input = $_POST["student"];
            echo"<br>";
            echo $grades[$input];
        ?>
    </body>
</html>