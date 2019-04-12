<?php
/* *********************************************************************************
 * Developed by: Midland Web Company www.midlandwebcompany.com                                     *
 ***********************************************************************************/
$admin_option_defs = array();
$admin_option_defs['Administration']['DF_DynamicFields'] = array(
    $image_path . ' DF_DynamicFields ', 'LBL_DF_DYNAMIC_FIELD_TITLE', 'LBL_DF_DYNAMIC_FIELD_DESC', './index.php?module=DF_DynamicFields&action=ListView');

$admin_group_header[] = array('LBL_DF_DYNAMIC_FIELD_HEADER', '', false, $admin_option_defs, '');

$config_categories[] = ' DF_DynamicFields ';
?>