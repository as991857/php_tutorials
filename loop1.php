
     <?php
// $x=1;   //initialization
// while($x<=5)   //condition
// {
//     echo $x."<br/>";
//     $x++;   //updation

// }

if(isset($_POST["calc"]))
{
    $n=$_POST["n"];
    $i=1;
    while($i<=10)
    {
        echo $n."*".$i."=".($n*$i)."<br/>";
        $i++;
    }

}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>
<body>
    <form method="post">
        <h2>Print Table</h2>
        Enter a number:<input type="number" name="n" required="true"/><br/><br/>
        <input type="submit" name="calc" value="print table"/>

    </form>
</body>
</html>
