<?php
/* *********************************************************************************
 * Developed by: Midland Web Company www.midlandwebcompany.com*
 ***********************************************************************************/
$module_name = 'DF_DynamicFields';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'module',
            'studio' => 'visible',
            'label' => 'LBL_MODULE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'field',
            'studio' => 'visible',
            'label' => 'LBL_FIELD',
          ),
        ),
      ),
    ),
  ),
);
?>
