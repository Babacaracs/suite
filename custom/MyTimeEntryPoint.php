

<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
$date = new DateTime();
echo $date->format('r');
$id1=$_GET['id1'];

try
{
  $bdd = new PDO('mysql:host=localhost;dbname=suitecrm','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
//$test=$_SESSION["fichier"] ;
$stmt = $bdd->query("SELECT name,id,account_type,parent_id FROM suitecrm.accounts where id='$id1'and parent_id !='null' and parent_id !='';");

$messages = $stmt->fetchAll(PDO::FETCH_OBJ);
foreach($messages as $message)
{
	echo '<p style="border: black; border-style: solid;"><p style="border: green; border-style: solid;"> parent_id: ', $message->parent_id, '<br /> account_type: ', $message->account_type, '</p><br /><center><img width="50" src="fleche.png"></center><br /></p> <p style="border: blue; border-style: dashed;">id: ', $message->id, '</br>Nom: ', $message->name,'</p></p>';
}



// echo ($GLOBALS['_POST']["record"]);

// $accountBean = BeanFactory::getBean('Accounts');
// $beanList = $accountBean->get_full_list(
//                                 'name',                       
//                                 "accounts.industry = 'Media'"
//                                 );
						
// $beanList = $accountBean->retrieve_by_string_fields(
// 						 array(
//                                   'name' => 'ndiaye souleymane'
                                  
//                                 )
// 							);
// echo ($beanList);


// echo($beanList->billing_address_country);


// foreach($beanList as $value){
// 	echo $value;	
// }


?>