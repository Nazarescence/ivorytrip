<?php
/**
 * Created by PhpStorm.
 * User: dsane
 * Date: 2018-09-13
 * Time: 09:01
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<head>
    <title>Réception de paramètres dans l'URL</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<p>Vous avez une reservation du  <?php echo $_POST['debut-sejour']?> au <?= $_POST['fin-sejour'] ?> pour <?= $_POST['adultes']?> adultes et <?= $_POST['enfants'] ?> enfants </p>
<div id="cb">
    <img src="images/cb.jpg" alt="paiement" style="width:75%;">
</div>
</body>
</html>

