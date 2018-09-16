<?php
include "../model/database.php";
include "../model/event/event.php";
$db = new Database();
$event = new Event($db -> getConnection());
/*(default, :n, :time, :des, :ty, :stat, :loc)*/
$eventName = $_POST['eventName'];
$data = array("n" => $eventName, "times" => $_POST["startdate"].$_POST["starttime"].$_POST["endTime"], "des" =>           $_POST["Description"],"ty" => "", "statu" => "", "loc" => $_POST["address"]);
$event->createEvent($data);
?>
<script type="text/javascript">
            window.location.replace("../eventSignup.php");
        </script>