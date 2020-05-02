<?php 
require_once 'LongestSubstring.php';
 
$LS = new LongestSubstring();  

$string = readline('Input: ');

$LS->setString($string);
$lengtChar = $LS->getLengthCharacter();
$longestSubstring = $LS->getLongestSupstring();

echo "Output: {$lengtChar}\n";
echo "Explanation: The longest substring is '{$longestSubstring}', with the length of {$lengtChar}\n";
