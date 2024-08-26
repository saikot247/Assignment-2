<?php
$strings = ["Hello", "World", "PHP", "Programming"];
function checkVowel($string)
{
    $vowel = ["a", "e", "i", "o", "u"];
    $stringLower = strtolower($string);
    $str_array = str_split($stringLower);
    $matchStr = array_intersect($str_array, $vowel);
    return count($matchStr);
}
function modifyString($strings)
{
    foreach ($strings as $string) {
        $split = str_split($string);
        $vowel = checkVowel($string);
        $reverse = array_reverse($split);
        $rev_str = implode($reverse);
        echo "Original String: " . $string . ", Vowel Count: " . $vowel . ", Reversed String: " . $rev_str . "<br>";
    }
}
modifyString($strings);
