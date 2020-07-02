<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <form action="userinput.php" method="get"> <!--php page that hanldes the form-->
            Name:<input type="text" name="username">
            <br>
            Age:<input type="number" name="age">
            <input type="submit">
        </form>
        <br>
         
        Name is <?php echo $_GET["username"] // get the name called username
        ?>
        <br>
        
        Age is  <?php echo $_GET["age"]
        ?>
        
    </body>
</html>