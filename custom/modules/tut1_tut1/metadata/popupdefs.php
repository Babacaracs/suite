<?php
$popupMeta = array (
    'moduleMain' => 'tut1_tut1',
    'varName' => 'tut1_tut1',
    'orderBy' => 'tut1_tut1.name',
    'whereClauses' => array (
  'name' => 'tut1_tut1.name',
  'assigned_user_id' => 'tut1_tut1.assigned_user_id',
  'tutoriel' => 'tut1_tut1.tutoriel',
  'phone_c' => 'tut1_tut1_cstm.phone_c',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'assigned_user_id',
  5 => 'tutoriel',
  6 => 'phone_c',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'assigned_user_id' => 
  array (
    'name' => 'assigned_user_id',
    'label' => 'LBL_ASSIGNED_TO',
    'type' => 'enum',
    'function' => 
    array (
      'name' => 'get_user_array',
      'params' => 
      array (
        0 => false,
      ),
    ),
    'width' => '10%',
  ),
  'tutoriel' => 
  array (
    'type' => 'bool',
    'label' => 'LBL_TUTORIEL',
    'width' => '10%',
    'name' => 'tutoriel',
  ),
  'phone_c' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_PHONE',
    'width' => '10%',
    'name' => 'phone_c',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
  'TUTORIEL' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_TUTORIEL',
    'width' => '10%',
  ),
  'PHONE_C' => 
  array (
    'default' => true,
    'type' => 'phone',
    'label' => 'LBL_PHONE',
    'width' => '10%',
  ),
),
);
