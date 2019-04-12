<?php
/* *********************************************************************************
 * Developed by: Midland Web Company www.midlandwebcompany.com*
 ***********************************************************************************/
$dashletData['DF_DynamicFieldsDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'dfmodule' => 
  array (
    'default' => '',
  ),
  'dffield' => 
  array (
    'default' => '',
  ),
  'date_entered' => 
  array (
    'default' => '',
  ),
);
$dashletData['DF_DynamicFieldsDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'dfmodule' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_DFMODULE',
    'width' => '10%',
    'name' => 'dfmodule',
  ),
  'dffield' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DFFIELD',
    'width' => '10%',
    'default' => true,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
);
