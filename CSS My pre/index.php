<?php
echo "<h3>Arithmetic Operators</h3>";
$a = 10;
$b = 5;
echo "Addition: " . ($a + $b) . "<br>";
echo "Subtraction: " . ($a - $b) . "<br>";
echo "Multiplication: " . ($a * $b) . "<br>";
echo "Division: " . ($a / $b) . "<br>";
echo "Modulus: " . ($a % $b) . "<br>";

echo "<h3>Assignment Operators</h3>";
$c = 20;
$c += 5;
echo "After += : $c<br>";
$c -= 2;
echo "After -= : $c<br>";

echo "<h3>Comparison Operators</h3>";
$x = 10;
$y = "10";
echo ($x == $y ? "Equal<br>" : "Not Equal<br>");
echo ($x === $y ? "Identical<br>" : "Not Identical<br>");

echo "<h3>Increment/Decrement Operators</h3>";
$z = 3;
echo "Post-increment: " . $z++ . "<br>";
echo "Pre-increment: " . ++$z . "<br>";
echo "Post-decrement: " . $z-- . "<br>";
echo "Pre-decrement: " . --$z . "<br>";

echo "<h3>Logical Operators</h3>";
$p = true;
$q = false;
echo ($p && $q ? "True<br>" : "False<br>");
echo ($p || $q ? "True<br>" : "False<br>");
echo (!$p ? "True<br>" : "False<br>");

echo "<h3>String Operators</h3>";
$str1 = "Hello ";
$str2 = "World";
echo "Concatenation: " . $str1 . $str2 . "<br>";
$str1 .= $str2;
echo "After .= : $str1<br>";

echo "<h3>Array Operators</h3>";
$arr1 = ["a" => 1, "b" => 2];
$arr2 = ["c" => 3];
$union = $arr1 + $arr2;
print_r($union);
echo "<br>";
echo ($arr1 == $arr2 ? "Equal<br>" : "Not Equal<br>");

echo "<h3>Conditional Assignment Operators</h3>";
$age = 18;
$status = ($age >= 18) ? "Adult" : "Minor";
echo "Status: $status<br>";
?>
