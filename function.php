<?php
echo "<br><br> <h1>Who attended the Jones family function?</h1>";

function familyName($fname) {
     echo "$fname Jones.<br>";
}

// Define variable familyName()
familyName("John");
familyName("Jane");
familyName("Jimmy");
familyName("Jenny");
familyName("George");
familyName("Gina");


echo "<br><br> <h1>What type of coffee do you function on?</h1>";
function makecoffee($type = "cappuccino")
{
    return "Making a cup of $type.<br>";
}
echo makecoffee(); // returns default value of "cappuccino"
echo makecoffee(null); // returns null
echo makecoffee("espresso");

echo "<br><br> <h1>What is the square of 4?</h1>";
function square($num)
{
    return $num * $num;
}
echo square(4);   // outputs '16'.
?>