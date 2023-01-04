<?php
class User        //base class
{
    public $name;
    public $age;
    function setValue($name,$age)
    {
        $this->name=$name;
        $this->age=$age;
    }
    function displayName()
    {
        echo "Hello *".$this->name." you look ";
    }
} 
class Magic extends User     // Magic is derived class
{
    function play()
    {
        if($this->age<=50)
        {
            $this->age+=10;
        }
        else
        {
            $this->age-=10;
        }
        echo $this->age." year old.<br/>";
    }
}
$m=new Magic();
$m->setValue("Anil Sharma",40);
$m->displayName();
$m->play();
?>