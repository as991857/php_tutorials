<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill calculator</title>
</head>
<body>
  <?php
  if(isset($_POST["calc"]))
  {
    
    $unit=$_POST["unit"];
    $bill=0;
    if($unit<=150)
        {
            $bill=$unit*2.40;
        }
        else if($unit>150 && $unit<=300)
        {
            $bill=(150*2.40)+($unit-150)*3.00;
        }
        else
		{
			$bill=(150*2.40)+(150*3.00)+($unit-300)*3.20;
		}
		echo "Bill = ".$bill;
  }


  ?>
  <form method="post">
  <h2>Enter Unit:</h2>
  <input type="number" name="unit" required="true"/></br><br/>
  <input type="submit" name="calc" value="Calculate Bill"/>  
</form>
</body>
</html>