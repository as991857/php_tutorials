<?php
/*
Write a php script to create an array with five names.
Now display name in ascending and descending order.
*/
$names=array("Rohit","Mohit","Shobhit","Mudit","Rachit");
echo "<h2>Names of my friends.</h2>";
foreach($names as $n)   //forearch loop is the spcl loop control. which is used to triverse to elements.
{
    echo $n."<br/>";
}
sort($names);     //this function sorts array elements. 
echo "<h2>Names in ascending order.</h2>";
foreach($names as $n)
{
    echo $n."<br/>";
}
rsort($names);    //this function reverse array elements.
echo "<h2>Names in descending order.</h2>";
foreach($names as $n)
{
    echo $n."<br/>";
}
?>


<?php
$names=array("Anil","Shivam","Sudhir","Harikesh","Mandeep");
foreach($names as $n)
{
    echo $n."<br/>";
}
?>

<?php
$arr=array("Name"=>"Anil Sharma","Address"=>"Kushinagar");
echo $arr["Name"];
sort($arr);
foreach($arr as $x)
{
    echo $x." ";
}
rsort($arr);
foreach($arr as $x)
{
    echo $x." ";
}
?>