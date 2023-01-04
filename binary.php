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
        echo "Binary Format is:";
        echo decbin($n)."<br/>";   //decimal to binaryx
        //echo bindec($n);   //binary to decimal
      //  echo dechex($n)."<br/>";
       // echo decoct($n);
    }
  
    ?>
   
    <form method="post">
    Enter a number:<input type="number" name="n" required="true"/><br/><br/>
    <input type="submit" name="calc" value="convert"/>

    </form>
</body>
</html>