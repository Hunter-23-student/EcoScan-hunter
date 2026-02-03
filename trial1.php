<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello, World!</h1>
    <p>This is a simple PHP file.</p>   
    <?php
        echo "<p>Today's date is " . date("Y-m-d") . ".</p>";
    // Additional variables
        $num1=2;
        $num2=3;
        $sum=$num1+$num2;
        echo "<p>The sum of $num1 and $num2 is $sum.</p>";
        
            //var_dump function example
             $x=5;
            var_dump($x);
            $name="Alice";
            echo "<br>";
            var_dump($name);
    echo "<br>";


                $is_student=true;
                var_dump($is_student);  
                echo "<br>";


                    $q=5985;
                    var_dump($q);
                    echo "<br>";


                        echo "The data type of $q is " . gettype($q) . ".";
                        echo "<br>", "this", " is", " a", " string", "."; //for multiple parameters in echo
                        echo "<br>";

                            $w=10.365;
                            var_dump($w);
                            echo "<br>";

                        echo "<br>";

                    $cars=array("Volvo","BMW","Toyota", "Honda", "Ford");
                    var_dump($cars);

//string fucntions
$message="I love learning PHP";
echo "<br>";    
echo "<br>";
echo "Original message: " . $message . ".";
echo "<br>";
echo "This is the string length: " . strlen("I love learning PHP") . ".";

echo "<br>";
$example="Hello World!";
echo strlen ($example);
echo "The original example is: " . '"' . $example . '"'." and the string length is " . strlen($example) . ".";
echo "<br>";
echo "<br>";
echo str_word_count($example);
echo "<br>";
echo "The str_contains is the number of words in " . '"' . $example . '"' . " which is " . str_word_count($example) . ".";
echo "<br>";

$PHP="I really love PHP!";
var_dump(str_contains ($PHP, "love"));
echo "<br>";
echo "The str_contains function checks if 'love' is in " . '"' . $PHP . '"' . " which is " . var_dump(str_contains ($PHP, "love")) . ".";
echo "<br>";
echo "<br>";
echo "The original message is ". '"'. $PHP. '"'. " and with the use of string replace function, what we get is ". '"'. str_replace("love", "study", $PHP). '".';

    echo "<br>";
    echo "<br>";
    //slicing strings 
    //use $example (Hello World!), $PHP (I really love PHP!), $message (I love learning PHP) variables from previous examples
    echo "The message is ". $example . " and slicing for ($example, 6, 5) will result to " . substr($example, 6, 5) . ".";
    echo "<br>";
    echo "The message is ". $example . " and slicing for ($example, 6) will result to " . substr($example, 6) . ".";
    echo "<br>";
    echo "The message is ". $example . " and slicing for ($example, -5, 3) will result to " . substr($example, -5, 3) . ".";
        echo "<br>";
    echo "The message is ". $example . " and slicing for ($example, 5,-3) will result to " . substr($example, 5,-3) . ".";

            

    //numbers
    echo "<br>";
    echo "<br>";
    echo var_dump(is_int($num1));
    echo "<br>";
    echo "The num1 is equivalent to ". $num1. " then the boolean argument would be". var_dump (is_int($num1));
    echo"<br>";
    echo (pi());
    echo"<br>";
    echo"<br>";
    echo(min(0, 150, -8, -200));
    echo"<br>";
    echo(max(0, 150, -8, -200));
    echo"<br>";
    echo(round(3.60));
    echo"<br>";
    //using define and constants


echo "<br>";
    define ("greetings", "Hi!");
    echo greetings;

    function myTest() {
define("GREETING"
,
"Welcome to W3Schools.com!");
}
myTest();
echo GREETING;

$a = 5; // Integer
$b = 5.34; // Float
$c =
"hello
"
; // String
$d = true; // Boolean
$e = NULL; // NULL
$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);


        ?>
</body>
</html>