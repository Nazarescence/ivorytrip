<?php
if( ! array_key_exists('nom',$_POST)){
    $_POST['nom'] = "";
}
$nom = $_POST['nom'];

if( ! array_key_exists('prenom',$_POST)){
    $_POST['prenom'] = "";
}
$prenom = $_POST['prenom'];

if( ! array_key_exists('age',$_POST)){
    $_POST['age'] = 0;
}
$age = $_POST['age'];

if( ! array_key_exists('courriel',$_POST)){
    $_POST['courriel'] = "";
}
$email = $_POST['courriel'];

if( ! array_key_exists('psw',$_POST)){
    $_POST['psw'] = "";
}
$psw = $_POST['psw'];

try
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=canadatrip;charset=utf8', 'root', 'abc123...');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO user (nom, prenom, age, courriel, password)
    VALUES ('$nom', '$prenom', '$age', '$email', '$psw')";
    // use exec() because no results are returned
    $bdd->exec($sql);
    echo "New record created successfully";
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM user');


while ($donnees = $reponse->fetch())
{
    ?>
    <p>
        <strong>TestBDD</strong> : <?php echo $donnees['nom']; ?><br />
        <strong>TestInsert</strong> : <?php echo $donnees['prenom']; ?><br />
        <strong>TestInsert</strong> : <?php echo $donnees['courriel']; ?><br />
    </p>
    <?php
}

$reponse->closeCursor(); // Termine le traitement de la requête*/

?>
//essai
