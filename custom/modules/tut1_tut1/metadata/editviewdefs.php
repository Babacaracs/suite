<?php
$module_name = 'tut1_tut1';
$viewdefs [$module_name] = 
array (
  'EditView' => 
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
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'assigned_user_name',
            'user_name' => 'phone_c',
            'displayParams' => 
            array (
              'field_to_name_array' => 
              array (
                'name' => 'assigned_user_name',
                'user_name' => 'phone_c',
              ),
            ),
          ),
        ),
        1 => 
        array (
          0 => 'description',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'tutoriel',
            'label' => 'LBL_TUTORIEL',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'account_bb_c',
            'studio' => 'visible',
            'label' => 'LBL_ACCOUNT_BB',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'phone_c',
            'label' => 'LBL_PHONE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'contactbb_c',
            'studio' => 'visible',
            'label' => 'LBL_CONTACTBB',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
