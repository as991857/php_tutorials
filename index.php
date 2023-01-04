<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   // echo "Hello php";
//    $myVar="Hii ";
//    $as="Anil how are you?";

//    echo $myVar.$as."</br>";
//    echo "fine";
//wap to sum of 2 numbers.
// $x=100;
// $y=300;
// echo $x+$y;
//wap to check even or odd.
// $n=4;
// if($n%2==0)
// {
//     echo $n." is even";
// }
// else
// {
//     echo $n." is odd";
// }
//wap to make simple calculator.
// $x=10;
// $y=5;
// echo "addition ".($x+$y)."<br/>";
// echo "substraction ".($x-$y)."<br/>";
// echo "multiplication ".($x*$y)."<br/>";
// echo "division ".($x/$y);
//wap to find greatest numbers in three numbers.
// $x=300;
// $y=200;
// $z=100;
//     if($x>$y && $x>$z)
// {
//     ECHO "greatest numbers is: ".$x;
// }
//     else if($y>$x && $y>$z)
// {
//     echo "greatest numbers is: ".$y;
// }
//     else
// {
//     echo "greatest numbers is: ".$z;
// }
//
if(isset($_POST["calc"]))
{
    $n1=$_POST["n1"];
    $n2=$_POST["n2"];
    $op=$_POST["op"];
    $res=0;
    if($op=="add")
    {
        $res=$n1+$n2;
    }
    else if($op=="sub")
    {
        $res=$n1-$n2;
    }
    else if($op="multi")
    {
        $res=$n1*$n2;
    }
    else if($op=="div")
    {
        $res=$n1/$n2;
    }
    echo "<h3>Result=".$res."</h3>";
   
}

    ?>
    <h2>Simple Calculator</h2>
    <form method="post">
        Enter first Number:
        <input type="number" name="n1" required="true"/><br/><br/>
        Enter second Number:
        <input type="number" name="n2" required="true"/><br/><br/>
        Select Operation:
        <input type="radio" name="op" value="add"/>+(add)
        <input type="radio" name="op" value="sub"/>-(sub)
        <input type="radio" name="op" value="multi"/>*(multi)
        <input type="radio" name="op" value="div"/>/(div)
        <br/><br/>
        <input type="submit" name="calc" value="Calc"/>
    </form>
    <a href="salaricalc.php">Salari Calc</a><br/><br/>
    <a href="switchdemo.php">swich demo</a><br/><br/>
    <a href="bill.php">Electricity Bill</a><br/><br/>
    <a href="greatest.php">Greatest number in three digit</a><br/><br/>
    <a href="temp.php">Temprature Convertor</a><br/><br/>
    <a href="coordinate.php">find coordinate</a>
</body>
</html>