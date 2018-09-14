<?php




$servername = "localhost";
$username = "root";
$dbname = "canadatrip";
$password = "abc123...";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO user (nom, prenom, age, courriel, password)
VALUES ('$nom', '$prenom','$age' ,'$email' ,'$psw' )";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

/*try
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

