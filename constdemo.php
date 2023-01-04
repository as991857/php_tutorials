<?php

class Student
{
    public $rollno;     //variable
    public $name;       //variable
    public $fee;        //variable
    function __construct($rollno,$name,$fee)   //construct and (parameter)
    {
        $this->rollno=$rollno;
        $this->name=$name;
        $this->fee=$fee;
    }
    function display()
    {
        echo "Roll No=".$this->rollno."<br/>";
        echo "Name=".$this->name."<br/>";
        echo "Fee=".$this->fee."<br/>";
    }
}
//Now we test class Student                     //here object creation with call automatically constructor
$s1=new Student(1001,"Ram",25000.0);
$s2=new Student(1002,"Shyam",30000.0);
$s1->display();
$s2->display();

?>
