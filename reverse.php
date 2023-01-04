<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST["calc"]))
    {
        $n=$_POST["n"];
        
        $x = $n;
        $r = 0;
    while($n>1)
    {
    $r = $r*10; 
    $r = $r+($n%10);
    $n = $n/10;
    }
    echo "Reverse of number ". $x . " is: " .$r;
    
}
   
    ?>
    <form method="post">
        <h2>reverse number</h2>
        Enter a number:<input type="number" name="n" required="true"/><br/><br/>
        <input type="submit" name="calc" value="reverse"/>
    </form>
</body>
</html>