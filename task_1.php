<?php
$text = "The Quick Brown fox jumps over the Lazy dog.";

function Rahim($inputText) {
   
    $lowercaseText = strtolower($inputText);
    
    
    $modifiedText = str_replace("brown", "red", $lowercaseText);
    
    
    echo $modifiedText;
}

Rahim($text);
?>
