<?php
$string = "I Love PHP";
// $replaceString = str_replace('PHP', 'php', $string);
$replaceString = str_ireplace('PHP', 'laravel', $string, $count);
echo $replaceString;
echo "Total Replace: {$count}";

//  stripos($string, 'PHP');
// $offset = strpos($string, 'PHP');
// if($offset !== false){
//     echo "\nword was found";
// }
// else{
//     echo "\nword was not found";
// }
// echo $offset;