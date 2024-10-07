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

    $reversedInput = '';
    for ($j = strlen($cleanInput) - 1; $j >= 0; $j--) {
        $reversedInput .= $cleanInput[$j];
    }

    return $cleanInput === $reversedInput;
}

if (isset($_GET['word'])) {
    $word = $_GET['word'];
    $isPalindrome = isPalindrome($word);
    echo $isPalindrome ? "La parola/frase è un palindromo." : "La parola/frase non è un palindromo.";
}