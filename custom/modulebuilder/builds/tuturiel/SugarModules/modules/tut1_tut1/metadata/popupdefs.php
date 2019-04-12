<?php
$popupMeta = array (
    'moduleMain' => 'tut1_tut1',
    'varName' => 'tut1_tut1',
    'orderBy' => 'tut1_tut1.name',
    'whereClauses' => array (
  'name' => 'tut1_tut1.name',
),
    'searchInputs' => array (
  0 => 'tut1_tut1_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
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
),
);
