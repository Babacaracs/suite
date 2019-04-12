<?php

/* * ********************************************************************************
 * Developed by: Midland Web Company www.midlandwebcompany.com*
 * ********************************************************************************* */
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class dfDynamicFieldLoad {

    function DynamicFieldsLoad($event, $arguments) {
        $bean = BeanFactory::getBean('DF_DynamicFields');
        $dynamicsFields = $bean->get_full_list();
        if ($dynamicsFields != null and sizeof($dynamicsFields) > 0) {
            foreach ($dynamicsFields as $df) {
                if (isset($_SESSION["df" . $df->dfmodule]) && $_SESSION["df" . $df->dfmodule] != null) {
                    $_SESSION["df" . $df->dfmodule] .= "," . $df->dffield;
                } else {
                    $_SESSION["df" . $df->dfmodule] = $df->dffield;
                }
            }
        }
    }

}

?>