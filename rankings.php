<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <title>Rankings CleanBaltimore</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light navbar-dark bg-dark">
            <div class="container">
                <!-- if you click the logo, you go to myevent -->
                <a class="navbar-brand" href="myevents.html" style=" color:  #ccffa3;">CleanBaltimore</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="eventSignup.php" style="color: white;">Sign-Up-Events<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="createevent.html" style="color: white;">Create Event</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="rankings.html" style="color: white;">Rankings</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <!-- link needed -->
                        <li class="nav-item"><a class="nav-link" href="myevents.html" style="color: white;"></a></li>
                        <!-- the login value should be false after logout -->
                        <li class="nav-item"><a class="nav-link" href="index.html" style="color: white;"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>


        <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Rank</th>
                    <th scope="col">User</th>
                    <th scope="col"># of Points</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'model/database.php';
                include 'model/user/user.php';
                
                $db = new Database();
                $user = new User($db->getConnection());
                $rows = $user->getAllUsers();
                $i = 1;
                foreach($rows as $data) {
                    echo "<tr>"
                        ."<td>".$i."</td>"
                        ."<td>".$data["firstname"]." ".$data["lastname"]."</td>"
                        ."<td>".$data["point"]."</td>"
                        ."</tr>";
                    $i += 1;
                }
                ?>
            </tbody>
        </table>













        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
