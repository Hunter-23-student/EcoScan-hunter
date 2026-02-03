<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //original message of I love learning PHP
    $message="I love learning PHP";
    echo "$message";
    //echo <br> is to create a break line inside the PHP code 
    echo "<br>";
    //string length (on how many the letters are or characters)
    echo strlen("I love learning PHP");
    echo "<br>";
    //bool (true) if there is or bool (false) if there is no word search
    var_dump(str_contains($message, "PHP"));
    echo "<br>";
    //replacing the word "learning" to "studying" in the declared 
    echo str_replace("learning", "studying", $message);
    ?>

</body> 
</html>