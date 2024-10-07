<?php
function isPalindrome($input)
{

    $cleanInput = '';
    $length = strlen($input);
    for ($i = 0; $i < $length; $i++) {
        $char = $input[$i];
        if ($char >= 'A' && $char <= 'Z') {
            $char = chr(ord($char) + 32);
        }
        if (($char >= 'a' && $char <= 'z') || ($char >= '0' && $char <= '9')) {
            $cleanInput .= $char;
        }
    }
}