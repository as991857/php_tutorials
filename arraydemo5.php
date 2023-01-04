<?php
//write a php script to print multidimentional array elements.
$arr=array(
    array(1001,"Brijesh Mshra",40000),
    array(1002,"Mandeep",500000),
    array(1003,"Shivam",35000),
    array(1004,"Anil Sharma",55000)
);

echo "<h2>List of Employees</h2>";
for($i=0;$i<4;$i++)   //outer for loop i ki value se row decide hoga.
{
    for($j=0;$j<3;$j++)   //inner loop j ki value se column decide hoga.
    {
        echo $arr[$i][$j]."&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    echo "<br/>";

}



?>
