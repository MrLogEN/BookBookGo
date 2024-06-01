<?php

require_once __DIR__ . "/../database/dbconnection.php";
require_once __DIR__ . "/../database/UserRepository.php";
require_once __DIR__ . "/../authentication/AuthUtils.php";
require_once __DIR__ . "/../config.php";



if(!isset($_POST["registerEmail"]) ||
 !isset($_POST["registerPassword"]) || 
 !isset($_POST["registerPasswordAgain"]) || 
 !isset($_POST["registerName"])){
    exit("Missing credentials");
}

if($_POST["registerPassword"] !== $_POST["registerPasswordAgain"]){
    exit("Passwords don't match.");
}

$name = strip_tags(htmlspecialchars($_POST["registerName"]));



$sanitizedEmail = filter_input(INPUT_POST, "registerEmail", FILTER_SANITIZE_EMAIL);
$password = htmlspecialchars($_POST["registerPassword"]);

if(filter_var($sanitizedEmail, FILTER_VALIDATE_EMAIL) === false){
    exit("Invalid email address");
}
$password_regex =  "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*_-]).{8,}$/";

if(!preg_match($password_regex, $password)){
    exit("Invalid password");
}

$password_hash = password_hash($password, PASSWORD_DEFAULT);
var_dump($password_hash);
var_dump($password);
var_dump(password_verify($password, $password_hash));

$repository = new UserRepository();

$user = new UserCreateDTO(null, $sanitizedEmail, $name, $password_hash, AuthRole::User);


$repository->createUser($user);
$loged_user = $repository->getUserByEmail($sanitizedEmail);

// startSessionIfNone();
session_start();

$_SESSION["user"] = $$loged_user;
//login
header("Location: " . BASE_URL . "/");

?>