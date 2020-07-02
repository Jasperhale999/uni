<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <form action="checkBoxes.php" method="post"> <!--php page that hanldes the form-->
          Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
          Banana: <input type="checkbox" name="fruits[]" value="banana"><br>
          Kiwi: <input type="checkbox" name="fruits[]" value="kiwi"><br>
          <input type="submit">
        </form>
        <?php $fruits = $_POST["fruits"];
        echo $fruits[0];
        ?>
    </body>
</html>