<?php
include_once "user.php";
include_once "../database.php";

$database = new Database();
$db = $database->getConnection();
$user = new User($db);
$result = $user->readOne($_POST["inputEmail"], $_POST["inputPassword"]);

if($result != null) {
    echo "<p>Success</p>";
}
else{
    echo "<p>Fail<p>";
}

?>