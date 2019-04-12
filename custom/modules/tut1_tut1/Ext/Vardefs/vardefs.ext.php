<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2019-04-10 11:58:54
$dictionary["tut1_tut1"]["fields"]["leads_tut1_tut1_1"] = array (
  'name' => 'leads_tut1_tut1_1',
  'type' => 'link',
  'relationship' => 'leads_tut1_tut1_1',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_LEADS_TUT1_TUT1_1_FROM_LEADS_TITLE',
);


$dictionary['tut1_tut1']['fields']['phone_c']['default']=$GLOBALS['current_user']->user_name;

 

 // created: 2019-04-03 16:36:18
$dictionary['tut1_tut1']['fields']['account_bb_c']['inline_edit']='1';
$dictionary['tut1_tut1']['fields']['account_bb_c']['labelValue']='Compte';

 

 // created: 2019-04-03 16:36:18
$dictionary['tut1_tut1']['fields']['account_id_c']['inline_edit']=1;

 

 // created: 2019-04-09 11:53:07
$dictionary['tut1_tut1']['fields']['contactbb_c']['inline_edit']='1';
$dictionary['tut1_tut1']['fields']['contactbb_c']['labelValue']='contactbb';

 

 // created: 2019-04-09 11:53:07
$dictionary['tut1_tut1']['fields']['contact_id_c']['inline_edit']=1;

 

 // created: 2019-04-03 16:37:40
$dictionary['tut1_tut1']['fields']['phone_c']['inline_edit']='1';
$dictionary['tut1_tut1']['fields']['phone_c']['labelValue']='phone';

 

// created: 2019-04-09 09:39:27
$dictionary["tut1_tut1"]["fields"]["tut1_tut1_accounts_1"] = array (
  'name' => 'tut1_tut1_accounts_1',
  'type' => 'link',
  'relationship' => 'tut1_tut1_accounts_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'side' => 'right',
  'vname' => 'LBL_TUT1_TUT1_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
);

?>