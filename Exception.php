<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/Validation.php";

$loginRequest = new LoginRequest();
$loginRequest->username = "";
$loginRequest->password = "";

try{
    validateLoginRequest($loginRequest);
}
catch (ValidationException | Exception $exception){
    echo "Error : {$exception->getMessage()}" . PHP_EOL;
    // as string
    echo $exception->getTraceAsString() . PHP_EOL;
    // dump trace
    var_dump($exception->getTrace());
}
finally {
    echo "Error or not, keep calling!" . PHP_EOL;
}

echo "VALID" . PHP_EOL;
