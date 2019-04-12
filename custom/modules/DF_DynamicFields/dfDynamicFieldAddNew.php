<?php
/* *********************************************************************************
 * Developed by: Midland Web Company www.midlandwebcompany.com*
 ***********************************************************************************/
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class dfDynamicFieldAddNew {

    function DynamicFieldsAddNew($bean, $event, $arguments) {
        if ($bean->dfmodule != null && $bean->dffield != null) {
            if (isset($_SESSION["df" . $bean->dfmodule]) && $_SESSION["df" . $bean->dfmodule] != null) {
                $_SESSION["df" . $bean->dfmodule] .= "," . $bean->dffield;
            } else {
                $_SESSION["df" . $bean->dfmodule] = $bean->dffield;
            }
        }
    }

}

?>