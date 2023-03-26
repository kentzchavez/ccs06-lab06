<?php
function greet() {
    $message = "Hello World! The date today is ";
    $message .= date("F d, Y");
    echo $message;
}
greet();