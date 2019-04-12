<?php
/* *********************************************************************************
 * Developed by: Midland Web Company www.midlandwebcompany.com*
 ***********************************************************************************/
if (isset($_REQUEST["selected_module"]) && $_REQUEST["selected_module"] != "") {
    $array_return = array();
    $module_name = $_REQUEST["selected_module"];
    $bean = BeanFactory::getBean($module_name);
    if (isset($bean->field_name_map)) {
        $fields = $bean->field_name_map;
        foreach ($fields as $fd) {
            if (isset($fd['name']) && isset($fd['vname']) && isset($fd['type']) && ($fd['type'] == "name" || $fd['type'] == "text" || $fd['type'] == "varchar" || $fd['type'] == "currency" || $fd['type'] == "decimal" || $fd['type'] == "float" || $fd['type'] == "int" || $fd['type'] == "phone" || $fd['type'] == "url")) {
                $array_return[$fd['name']] = $fd['vname'];
                //$GLOBALS["log"]->fatal(print_r($fd, true));
            }
        }
    } else {
        $array_return["NO-Fields"] = "NO-Fields";
    }
    echo json_encode($array_return);
} else {
    echo "error";
}
