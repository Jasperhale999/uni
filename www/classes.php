<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <?php 
    class Video{
        var $author;
        var $length;
        var $porn;
        __construct($author, $length, $porn){
            this-> author = $author;
            this-> length = $length;
            this-> porn = $porn;
        }
    
    }
    B = new Video("me", 70, FALSE);
    ?>
    </body>
</html>