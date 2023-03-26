<?php
    $age = 2023 - $argv[2];
    echo "Your name is " . $argv[1] . ", and your age is " . $age . " years old";
    
    if ($age > 17) {
        echo "\nYou are a voter";
    }
    if ($age > 59) {
        echo "\nYou are a senior citizen";
    }
?>