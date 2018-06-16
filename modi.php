<?php
// Récupérer l'id à modifier
$db_ser=$_GET ['id'];

// Connexion à la bdd
db_server = "127.0.0.1";
$db_username = "root";
$db_pwd = "";
$db_name = "bdd-omar-farouk";
$cnx = new PDO("mysql: host=$db_server; dbname=$db_name", $db_username, $db_pwd);
// Récupérer toutes les données de l'étudiant relatif à l'ID récupéré
$q = "SELECT * FROM notes WHERE ...";
$res = $cnx->query(...);
$etd = $res->fetch(); // Ceci est UN SEUL étudiant
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <title>Modifier un étudiant</title>
</head>
<body>
 <h1>Modifier une fiche étudiant</h1>
 <form action="modif-sql-action.php">
 ID : <?php echo $id; ?><br/>
 Nom : <input type="text" name="nom" value="<?php echo $etd['nom']
?>"></br>
 Note : <input type="text" name="note" ...></br>
 <input type="hidden" name="id" value="...">
 <input type="submit" value="Modifier" name="modifier">
 </form>
</body>
</html>