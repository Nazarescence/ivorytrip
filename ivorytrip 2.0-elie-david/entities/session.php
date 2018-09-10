<?php
/**
 * Created by PhpStorm.
 * User: dsane
 * Date: 2018-09-10
 * Time: 08:25
 */

class session
{
    var $session_time = (120 * 60);//  2 heures
    var $sid = ""; // Id de la session transmis à son ouverture

    function __construct()
    {
        $this->gc();//on appelle la fonction gc nettoyage des sessions
    }
}


function write ()//écriture
{
    $sid = $this->sid;

    $ipaddress = getip();
    $useragent = getagent();
    $sql = "SELECT COUNT(*) AS total
            FROM sessions
            WHERE sid = '$sid' ";

    $query = mysql_query($sql);
    $return = mysql_fetch_assoc($query);
    if($return['total'] == 0) //si la session n'existe pas encore
    {
        mysql_query("INSERT INTO sessions VALUES('$this->sid','0','$ipaddress','".time()."','$useragent','0','0')");

    }
    else //sinon on met à jour
    {
        mysql_query("UPDATE sessions SET ipaddress='$idaddress', time='".time()."', useragent='$useragent' WHERE sid='$sid'");
    }

}


function read ()//lecture
{
    $sid = $this->sid;
    $sql = "SELECT uid,login FROM sessions
                WHERE sid = '$sid' ";

    $query = mysql_query($sql);
    $data = mysql_fetch_assoc($query);

    if(empty($data)) return FALSE;
    else {
        $session['uid'] = $data['uid']; //on retourne uid
        $session['login'] = $data['login']; // Invité ou connecté
        $sql = mysql_query("SELECT * FROM users WHERE uid='".$session['uid']."'");
        $user = $mysql_fetch_assoc($sql);
    }
}

function start($sid) {
    $this->sid = $sid;
    $this->write();
    $this->read();
}

function destroy ()//destruction
{
    $sql = "DELETE FROM sessions
            WHERE sid = '".$this->sid."' ";//on supprime la session de la bdd
    mysql_query($sql);

}

function gc ()//nettoyage
{
    $sql = "DELETE FROM sessions 
                WHERE time + ".$this->session_time." < ".time(); //on supprime les vieilles sessions

    mysql_query($sql);
}