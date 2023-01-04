<?php
// write a function to find sum of two numbers.
function add($x,$y)
{
    return ($x+$y);

}

if(isset($_POST["calc"]))
{
    $n1=$_POST["n1"];
    $n2=$_POST["n2"];
    $res=add($n1,$n2);
    echo "Result = ".$res."<br/>";
}
// $a=100;
// $b=200;
// $res=add($a,$b);
// echo "result :".$res;
?>

<form method="post">
    Enter first numbers: <input type="number" name="n1" required="true"/><br/><br/>
    Enter second numbers: <input type="number" name="n2" required="true"/><br/><br/>
    <input type="submit" name="calc" value="sum"/>
</form>