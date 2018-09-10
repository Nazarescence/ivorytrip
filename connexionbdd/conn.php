<?php
try
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=canadatrip;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table user
$reponse = $bdd->query('SELECT * FROM user');

// On récupère tout le contenu de la table produit
$produit = $bdd->query('SELECT * FROM produit');

$sql = "INSERT INTO user ( nom, prenom, age, email, password)
VALUES ('$nom','$prenom',0,'$email',$psw)";

if ($bdd->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $bdd->error;
}

$bdd->close();



// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
    ?>
    <p>
        <strong>TestBDD</strong> : <?php echo $donnees['nom']; ?><br />
    </p>
    <?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>
//essai
