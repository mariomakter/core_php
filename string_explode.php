<?php
$string = "hello World, How are you";
$parts = explode(" ,", $string);
print_r($parts);
PHP_EOL;
$original = join(" ,", $parts);
echo "<br>".$original;
$part2 = str_split($string);
print_r($part2);

echo PHP_EOL;
$part3 = strtok($string, " ,");
while($part3 !==false){
    echo $part3."<br>";

}
$part4 = preg_split("/|,/", $string);
print_r($part4);
echo PHP_EOL;
$string = "I love Bangladesh";
echo strpos($string, "bangladesh");