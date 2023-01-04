


<?php
//Write a php script to find sum and average of ten numbers.
$list=array(1,2,3,4,5,6,7,8,9,10);
$sum=0;
for($i=0;$i<count($list);$i++)      
{
    $sum=$sum+$list[$i];


}
$avg=$sum/10;

echo "sum of numbers = ".$sum."<br/>";
echo "average of numbers = ".$avg;
?>