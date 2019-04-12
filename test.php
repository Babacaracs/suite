<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Héritage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  </head>
  <body>


<?php
session_start();
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=suitecrm','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
//$test=$_SESSION["fichier"] ;
$stmt = $bdd->query("SELECT id,account_type,parent_id FROM suitecrm.accounts where  parent_id !='null' and parent_id !='';");

$messages = $stmt->fetchAll(PDO::FETCH_OBJ);
foreach($messages as $message)
{
	echo '<p style="border: black; border-style: solid;"> <p style="border: blue; border-style: dashed;">id: ', $message->id, '</p><br /><center><img width="50" src="fleche.png"></center><br /><p style="border: green; border-style: solid;"> parent_id: ', $message->parent_id, '<br /> account_type: ', $message->account_type, '</p></p>';
}

?>  	
  </body>
  </html>