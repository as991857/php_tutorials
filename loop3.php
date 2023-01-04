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
    $n1=$_POST["n1"];
    $i=1;
    while($n1>0)
    {
        $i=$i*$n1;
        $n1--;
    

    }
    echo "factorial:".$i;

    ?>
    <form method="post">
        <h2>Find factorial</h2>
        Enter a number:<input type="number" name="n1" required="true"/><br/><br/>
        <input type="submit" name="calc" value="find factorial"/>

    </form>
</body>
</html>