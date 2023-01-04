<?php
$A=array(
array(1,2,3),
array(4,5,6),
array(7,8,9)
);
$B=array(
    array(1,1,1),
    array(1,1,1),
    array(1,1,1)

);
echo "<h3>Elements of matrix A</h3>";
for($i=0;$i<3;$i++)    //row
{
    for($j=0;$j<3;$j++)    //column
    {
        echo $A[$i][$j]."&nbsp;";
    }
    echo "<br/>";
}
echo "<h3>Elements of matrix B</h3>";
for($i=0;$i<3;$i++)
{
    for($j=0;$j<3;$j++)
    {
        echo $B[$i][$j]."&nbsp;";
    }
    echo "<br/>";
}
echo "<h3>Summation of A and B</h3>";
for($i=0;$i<3;$i++)
{
    for($j=0;$j<3;$j++)
    {
        echo $A[$i][$j]+$B[$i][$j]."&nbsp;";
    } 
    echo "<br/>";
}
echo "<h3>Substraction of A and B</h3>";
for($i=0;$i<3;$i++)
{
    for($j=0;$j<3;$j++)
    {
        echo $A[$i][$j]-$B[$i][$j]."&nbsp;";
    } 
    echo "<br/>";
}

?>