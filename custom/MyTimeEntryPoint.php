

<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
$date = new DateTime();
echo $date->format('r');

echo ($GLOBALS['_POST']["record"]);

$accountBean = BeanFactory::getBean('Accounts');
$beanList = $accountBean->get_full_list(
                                'name',                       
                                "accounts.industry = 'Media'"
                                );
						
$beanList = $accountBean->retrieve_by_string_fields(
						 array(
                                  'name' => 'ndiaye souleymane'
                                  
                                )
							);
echo ($beanList);


echo($beanList->billing_address_country);


foreach($beanList as $value){
	echo $value;	
}


?>