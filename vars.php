<!--php-oop-001-(vars-classes-properties-objects)-->

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>Vars-classes-properties-objects</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php

/* create variables */

$int = 1;                       // integer
$string = "I'm 24 years old";   # string
$string2 = " now";
$string = $string.$string2;            // splice strings
$float = 3.14;                  // float
$bool = true;                   // boolean

/* print variables on browser */

echo var_dump($int)."<br>";
echo var_dump($string)."<br>";
echo var_dump($float)."<br>";
echo var_dump($bool)."<br>";

?>


</body>
</html>