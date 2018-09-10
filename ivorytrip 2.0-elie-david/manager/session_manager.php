<?php
/**
 * Created by PhpStorm.
 * User: dsane
 * Date: 2018-09-10
 * Time: 08:23
 */
session_start();

require_once ('C:\P62PHP\ivorytrip\ivorytrip 2.0-elie-david\entities\session.php');
$session = new Session();
$session->start(session_id()); // On transmet l'id de la session


$sql = "SELECT COUNT(uid) AS total
            FROM sessions WHERE login=1";

$query = mysql_query($sql);
$return = mysql_fetch_assoc($query);
$user_online = $return['total'];

?>