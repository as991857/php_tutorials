<?php
$course=["HTML","CSS","BOOTSTRAP","JS"];
//print_r($course);
// echo $course[2]."<br/>";
// echo count($course);
// for($i=0;$i<=3;$i++)
// {
	// echo $course[$i]."<br/>";
// }
echo "<ol>";
foreach($course as $x)
{
	echo "<li>".$x."</li>";
}
echo "</ol>";
?>