<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
    </head>

    <body>
        <?php
        include_once "../model/user/user.php";
        include_once "../model/database.php";

        $database = new Database();
        $db = $database->getConnection();
        $user = new User($db);
        $result = $user->readOne($_POST["inputEmail"], $_POST["inputPassword"]);

        if($result == null) 
            echo "Log in failed<br>";
        ?>
        <script type="text/javascript">
            window.location.replace("../eventSignup.php");
        </script>
    </body>
</html>





