<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci series</title>
</head>
<body>
    <h2>Fibonacci Series</h2>
    <?php
    if(isset($_POST["calc"]))
    {
        $n=$_POST["n"];
        $n1=0;
        $n2=1;
        echo $n1."&nbsp;&nbsp;".$n2."&nbsp;&nbsp;";
        for($i=1;$i<=$n-2;$i++)
        {
            $n3=$n1+$n2;
            echo $n3."&nbsp;&nbsp;";
            $n1=$n2;
            $n2=$n3;
            
        }
    }
    ?>
    <form method="post">
        Enter number of terms in series:
        <input type="number" name="n" required="true"/><br/><br/>
        <input type="submit" name="calc" value="fibonacci series"/>


    </form>
</body>
</html>