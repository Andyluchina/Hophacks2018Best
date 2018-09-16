<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
    </head>

    <body>
        <?php
        include "../model/user/user.php";
        include_once "../model/database.php";
        $db = new Database();
        $user = new User($db->getConnection());
        $user->insertUser($_POST["name"], $_POST["email"], $_POST["passwordConfirmation"],
                        $_POST["first_name"], $_POST["last_name"], 0);
        echo "Successfully created!<br>";
        ?>
    </body>
</html>
