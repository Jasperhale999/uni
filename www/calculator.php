<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <form action="calculator.php" method="post"> <!--php page that hanldes the form-->
            First Num:<input type="number" step = "0.001 " name="num1"> <!-- step is for decimal-->
            <br>
            OP: <input type="text" name="op"><br>
            Second Num: <input type="number" name="num2">
            <br>
            <input type ="submit">
            <br>
        </form>
         Answer: <?php 
         function add($num1, $num2){
             return $num1+$num2;
         }
         function multi($num1, $num2){
            return $num1*$num2;
        }
        function div($num1, $num2){
            return $num1/$num2;
        }
        function sub($num1, $num2){
            return $num1 -$num2;
        }
        function result($num1, $num2, $op){
            if($op=="+"){
                echo add($num1, $num2);
            }
            else if($op=="-"){
                echo sub($num1, $num2);
            }
            else if($op=="/"){
                echo div($num1, $num2);
            }
            else if($op=="*"){
               echo multi($num1, $num2);
            }
            else{
                if($num1 == ""|| $num2 == "" ){
                    echo"";
                }
                else{
                    echo "Not a valid operation";    
                }
                
            }
        }
        

         $num1 = $_POST["num1"]; 
         $num2 = $_POST["num2"];
         $op = $_POST["op"];
         result($num1, $num2, $op);

         

         ?> 
        
    </body>
</html>