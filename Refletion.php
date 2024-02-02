<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/ValidationUtil.php";

$request = new LoginRequest();
$request->username = "";
$request->password = null;

ValidationUtil::validateReflection($request);

class RegisterUserRequest{
    public ?string_$username;
    public ?string_$address;
    public ?string $email;
}

$register = new RegisterUserRequest();
$register->name="Akio";
$register->address = "Japan";
$register->email = "akio@gmail.com";
ValidationUtil::validateReflection($register);
ValidationUtil::validate($register);