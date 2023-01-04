<?php
class Employee
{
    public $empid;
    public $empname;

public function setValue($empid,$empname)
{
    $this->empid=$empid;
    $this->empname=$empname;
//           |         |
//         Variable  Parameter
}
public function display()
{
    echo "Employee Id = ".$this->empid."<br/>";
    echo "Employee Name = ".$this->empname."<br/>";
}
}
$obj=new Employee(); //creation of object
$obj->setValue(1001,"Anil Sharma"); 
$obj->display();
?>