<?php
/* *********************************************************************************
 * Developed by: Midland Web Company www.midlandwebcompany.com*
 ***********************************************************************************/
$module_name = 'DF_DynamicFields';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '1',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '8',
          'field' => '72',
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
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'dfmodule',
            'studio' => 'visible',
            'label' => 'LBL_DFMODULE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'dffield',
            'label' => 'LBL_DFFIELD',
          ),
        ),
      ),
    ),
  ),
);
?>
