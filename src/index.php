<?php 

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__. "/authentication/AuthUtils.php";

startSessionIfNone();

// var_dump($_SESSION["user"]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <title>BookBookGo - Home</title>
</head>
<body>
    <?php require './requires/navigation.php'; ?>

    <script src="./../vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>