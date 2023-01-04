<?php
// write a function to find sum of two numbers.
function add($x,$y)
{
    return ($x+$y);

}
function sub($x,$y)
{
    return ($x-$y);

}
function multi($x,$y)
{
    return ($x*$y);

}
function div($x,$y)
{
    return ($x/$y);

}

   


if(isset($_POST["calc"]))
{
    $n1=$_POST["n1"];
    $n2=$_POST["n2"];
    $op=$_POST["op"];
    $res=0;
    $res=add($n1,$n2);
    $res=sub($n1,$n2);
    $res=multi($n1,$n2);
    $res=div($n1,$n2);

    if($op=="add")
    {
        $res=add($n1,$n2);
    }
    else if ($op=="sub")
    {
        $res=sub($n1,$n2);
    }
    else if ($op=="multi")
    {
        $res=multi($n1,$n2);
    }
    else if ($op=="div")
    {
        $res=div($n1,$n2);
    }
    
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
    Select Operation:
        <input type="radio" name="op" value="add"/>+(add)
        <input type="radio" name="op" value="sub"/>-(sub)
        <input type="radio" name="op" value="multi"/>*(multi)
        <input type="radio" name="op" value="div"/>/(div)
        <br/><br/>
    <input type="submit" name="calc" value="calculate"/>
</form>