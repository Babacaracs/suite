<?php
/* *********************************************************************************
 * Developed by: Midland Web Company www.midlandwebcompany.com*
 ***********************************************************************************/
$popupMeta = array (
    'moduleMain' => 'DF_DynamicFields',
    'varName' => 'DF_DynamicFields',
    'orderBy' => 'df_dynamicfields.name',
    'whereClauses' => array (
  'name' => 'df_dynamicfields.name',
  'dfmodule' => 'df_dynamicfields.dfmodule',
  'dffield' => 'df_dynamicfields.dffield',
),
    'searchInputs' => array (
  1 => 'name',
  6 => 'dfmodule',
  7 => 'dffield',
),
    'searchdefs' => array (
  'name' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'name',
  ),
  'dfmodule' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_DFMODULE',
    'width' => '10%',
    'name' => 'dfmodule',
  ),
  'dffield' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_DFFIELD',
    'width' => '10%',
    'name' => 'dffield',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
    'name' => 'name',
  ),
  'DFMODULE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_DFMODULE',
    'width' => '10%',
    'name' => 'dfmodule',
  ),
),
);
