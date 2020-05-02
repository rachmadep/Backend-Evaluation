<?php

use PHPUnit\Framework\TestCase;

require_once "LongestSubstring.php";

class LongestSubstringTest extends TestCase
{
    public function testLongestSubstring()
    {
        $LS = new LongestSubstring;

        $testString = "ababcdedfg"; // 5 char | abcde
        $LS->setString($testString);
        $lengtChar = $LS->getLengthCharacter();
        $longestSubstring = $LS->getLongestSupstring();

        $this->assertEquals(5, $lengtChar); 
        $this->assertEquals('abcde', $longestSubstring); 
    }
}