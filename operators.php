<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$balance=1000;
$transaction=200;
$balance=500;

$balance +=$transaction;
$balance -=150;
$balance *=1.10;
$balance /=2;
$balance %=300;
echo "Final Balance: $balance";



//understanding modulus 
$x=10;
$y=30;
$modulus=$x %= $y;
echo "<br>"."The modulus result of  ". "$x and $y". " is equal to $modulus";


?>

</body>
</html>
