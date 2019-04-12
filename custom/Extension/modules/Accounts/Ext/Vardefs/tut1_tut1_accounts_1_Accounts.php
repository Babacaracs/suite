<?php
// created: 2019-04-09 09:39:27
$dictionary["Account"]["fields"]["tut1_tut1_accounts_1"] = array (
  'name' => 'tut1_tut1_accounts_1',
  'type' => 'link',
  'relationship' => 'tut1_tut1_accounts_1',
  'source' => 'non-db',
  'module' => 'tut1_tut1',
  'bean_name' => 'tut1_tut1',
  'vname' => 'LBL_TUT1_TUT1_ACCOUNTS_1_FROM_TUT1_TUT1_TITLE',
  'id_name' => 'tut1_tut1_accounts_1tut1_tut1_ida',
);
$dictionary["Account"]["fields"]["tut1_tut1_accounts_1_name"] = array (
  'name' => 'tut1_tut1_accounts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_TUT1_TUT1_ACCOUNTS_1_FROM_TUT1_TUT1_TITLE',
  'save' => true,
  'id_name' => 'tut1_tut1_accounts_1tut1_tut1_ida',
  'link' => 'tut1_tut1_accounts_1',
  'table' => 'tut1_tut1',
  'module' => 'tut1_tut1',
  'rname' => 'name',
);
$dictionary["Account"]["fields"]["tut1_tut1_accounts_1tut1_tut1_ida"] = array (
  'name' => 'tut1_tut1_accounts_1tut1_tut1_ida',
  'type' => 'link',
  'relationship' => 'tut1_tut1_accounts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_TUT1_TUT1_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
);
