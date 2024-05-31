<?php 

const COMMON_PATH = '/www/BookBookGo';

require_once __DIR__ . '/../vendor/autoload.php';

require_once __DIR__ . '/database/dbconnection.php';


// $conn = DbConnection::getConnection();
// $statement = $conn->prepare("SELECT * FROM AUTHORS;");
// $statement->execute();
// var_dump($statement->fetchAll());


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo COMMON_PATH;?>/vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <title>BookBookGo</title>
</head>
<body>
    <?php require './requires/navigation.php'; ?>
    <?php require './requires/scripts.php'; ?>
</body>
</html>