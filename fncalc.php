<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simple calculator using function</title>
</head>
<body>
    <?php

    function add($x,$y)
    {
        return($x+$y);
    }
    function sub($x,$y)
    {
        return($x-$y);
    }
    function multi($x,$y)
    {
        return($x*$y);
    }
    function div($x,$y)
    {
        return($x/$y);
    }

    if(isset($_POST["calc"]))
    {
        $n1=$_POST["n1"];
        $n2=$_POST["n2"];
        $op=$_POST["op"];
        
       
        if($op=="add")
        {
            echo "addition = ".add($n1,$n2)."<br/>";
        }
        else if($op=="sub")
        {
            echo "Substraction = ".sub($n1,$n2)."<br/>";
        }
        else if($op=="multi")
        {
            echo "Multiplication = ".multi($n1,$n2)."<br/>";
        }
        else if($op=="div")
        {
            echo "Division = ".div($n1,$n2)."<br/>";
        }
        else
        {
            echo "Invalid Operation"."<br/>";
        }
        

    }
    ?>
    <h2>simple calculator</h2>
    <form method="post">
    Enter first Number:
    <input type="number" name="n1" required="true"/><br/><br/>
    Enter second Number:
    <input type="number" name="n2" required="true"/><br/><br/>
    Select Operation:
    <input type="radio" name="op" value="add"/>Add(+)
    <input type="radio" name="op" value="sub"/>Sub(-)
    <input type="radio" name="op" value="multi"/>Multi(*)
    <input type="radio" name="op" value="div"/>Div(/)<br/><br/>
    <input type="submit" name="calc" value="calc"/>
    </form>
</body>
</html>