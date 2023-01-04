<?php
//This script demonstrate concept of associate array.
$emp=array(
    "empid"=>1001,
    "empname"=>"Anil Sharma",
    "salary"=>50000

);
// echo "Employee id = ".$emp["empid"]."<br/>";
// echo "employee name = ".$emp["empname"]."<br/>";
// echo "employee salary = ".$emp["salary"];

foreach($emp as $k=>$v)
{
    echo $k."=".$v."<br/>";
}
?>