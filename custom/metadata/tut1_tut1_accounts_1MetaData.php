<?php
// created: 2019-04-09 09:39:27
$dictionary["tut1_tut1_accounts_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'tut1_tut1_accounts_1' => 
    array (
      'lhs_module' => 'tut1_tut1',
      'lhs_table' => 'tut1_tut1',
      'lhs_key' => 'id',
      'rhs_module' => 'Accounts',
      'rhs_table' => 'accounts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'tut1_tut1_accounts_1_c',
      'join_key_lhs' => 'tut1_tut1_accounts_1tut1_tut1_ida',
      'join_key_rhs' => 'tut1_tut1_accounts_1accounts_idb',
    ),
  ),
  'table' => 'tut1_tut1_accounts_1_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'tut1_tut1_accounts_1tut1_tut1_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'tut1_tut1_accounts_1accounts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'tut1_tut1_accounts_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'tut1_tut1_accounts_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'tut1_tut1_accounts_1tut1_tut1_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'tut1_tut1_accounts_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'tut1_tut1_accounts_1accounts_idb',
      ),
    ),
  ),
);