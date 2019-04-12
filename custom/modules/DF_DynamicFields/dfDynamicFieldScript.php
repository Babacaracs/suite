<?php

/* * ********************************************************************************
 * Developed by: Midland Web Company www.midlandwebcompany.com*
 * ********************************************************************************* */
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class dfDynamicFieldScript {

    function DynamicFieldsScript($event, $arguments) {
        global $currentModule;
        $unique_fields = array();
        if (isset($_SESSION["df" . $currentModule]) && $_SESSION["df" . $currentModule] != null) {
            $dfields = explode(",", $_SESSION["df" . $currentModule]);
            foreach ($dfields as $d) {
                if (!in_array($d, $unique_fields)) {
                    $unique_fields[] = $d;
                }
            }
        }
        if ($currentModule != null and empty($_REQUEST['to_pdf']) and empty($_REQUEST['sugar_body_only'])) {
            foreach ($unique_fields as $fieldName) {
                if (isset($_REQUEST["action"]) && $_REQUEST["action"] != null) {
                    if ($_REQUEST["action"] == "EditView") {
                        echo <<<EOQ
                <script language='javascript' type="text/javascript">
                    YAHOO.util.Event.onDOMReady(function(){
                        if($("#$fieldName").length!=0){                        
                            var buttonAdd = '<button id="add_new_$fieldName" onclick="add_new_field(\'$fieldName\',\'\');" type="button"><img alt="Add" src="themes/default/images/id-ff-add.png"></button>';
                            $("#$fieldName").hide();
                            $("#$fieldName").after(buttonAdd);
                            var saved_value = $("#$fieldName").val();
                            var split_all = saved_value.split(",");
                            var fieldname = "$fieldName";
                            if (split_all.length >= 0) {
                                $.each(split_all, function(index, value) {
                                    add_new_field(fieldname,value);
                                });
                            } else {
                                add_new_field(fieldname,'');
                            }                        
                        }
                    });
                    function add_new_field(fieldname,row_value) {
                        var all_id_Array = [];
                        $('.'+fieldname).each(function() {
                            var arr = this.id.split('___');
                            all_id_Array.push(arr[1]);
                        });
                        var new_row_id = 0;
                        var prev_row_id = 0;
                        if (all_id_Array.length > 0) {
                            prev_row_id = parseInt(all_id_Array.max());
                            new_row_id = parseInt(all_id_Array.max()) + 1;
                        }
                        var dfstart = '';
                        var dfend = '';
                        var current_index = $("#add_new_"+fieldname).parent().index();
                        if(current_index<=2){
                            dfstart = '<tr><td>&nbsp;</td><td>';
                            dfend = '</td><td>&nbsp;</td><td>&nbsp;</td></tr>';
                        }else{
                            dfstart = '<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>';
                            dfend = '</td></tr>';
                        }
                        var buttonRemove = '<button id="add_new_' + fieldname + '_' + new_row_id + '" onclick="remove_field('+ "'" + fieldname+ "'" +',' + new_row_id + ')" type="button"><img alt="Remove" src="themes/default/images/id-ff-remove-nobg.png"></button>';
                        var field_row = '<input class="'+fieldname+'" onblur="update_field_values('+ "'" + fieldname+ "'" +');" id="'+fieldname+'___' + new_row_id + '" type="text" title="" value="' + row_value + '" maxlength="255" size="30" name="'+fieldname+'_' + new_row_id + '">';
                        var html = dfstart + field_row + '  ' + buttonRemove + dfend;
                        if (new_row_id == 0) {
                            if($("#add_new_"+fieldname).parent().parent().length!=0){
                                var temp_htmls = $("#add_new_"+fieldname).parent().parent().next('tr').children().eq(current_index).html();
                                if(temp_htmls=="" || temp_htmls=="&nbsp;"){
                                    $("#add_new_"+fieldname).parent().parent().next('tr').children().eq(current_index).html(field_row + '  ' + buttonRemove)
                                }else{
                                    $("#add_new_"+fieldname).parent().parent().after(html);
                                }
                            }else{
                                $("#add_new_"+fieldname).parent().parent().after(html);
                            }
                        } else {
                            if($("#"+fieldname+"___" + prev_row_id).parent().parent().length!=0){
                                var temp_htmls = $("#"+fieldname+"___" + prev_row_id).parent().parent().next('tr').children().eq(current_index).html();
                                if(temp_htmls=="" || temp_htmls=="&nbsp;"){
                                    $("#"+fieldname+"___" + prev_row_id).parent().parent().next('tr').children().eq(current_index).html(field_row + '  ' + buttonRemove)
                                }else{
                                    $("#"+fieldname+"___" + prev_row_id).parent().parent().after(html);
                                }
                            }else{
                                $("#"+fieldname+"___" + prev_row_id).parent().parent().after(html);
                            }                                
                        }
                    }
                    function remove_field(fieldname,row_num) {
                        var count = 0;
                        $('.'+fieldname).each(function() {
                            count++;
                        });
                        if (count > 1) {
                            var is_empty_row = "YES";
                            $("#"+fieldname+"___" + row_num).parent().parent().find('td').each(function() {
                                if($(this).html()!=$("#"+fieldname+"___" + row_num).parent().html()){
                                    if($(this).html()=="" || $(this).html()=="&nbsp;"){
                                    }else{
                                        is_empty_row = "NO";

                                    }
                                }
                            });
                            if(is_empty_row=="YES"){
                                $("#"+fieldname+"___" + row_num).parent().parent().remove();
                            }else{
                                $("#"+fieldname+"___" + row_num).parent().html("");
                            }
                            update_field_values(fieldname);
                        } else {
                            alert("You can not remove all rows.");
                        }
                    }
                    function update_field_values(fieldname) {
                        var count = 0;
                        var updated_values = '';
                        $('.'+fieldname).each(function() {
                            if ($(this).val() != "" && $(this).val() != null && $(this).val() != "undefined" && $(this).val() != "null") {
                                if (count == 0) {
                                    updated_values += $(this).val();
                                } else {
                                    updated_values += "," + $(this).val();
                                }
                                count++;
                            }
                        });
                        $("#"+fieldname).val(updated_values);
                    }                        
                    Array.prototype.max = function() {
                        return Math.max.apply(null, this);
                    };
                    Array.prototype.min = function() {
                        return Math.min.apply(null, this);
                    };                        
                </script>
EOQ;
                    } else if ($_REQUEST["action"] == "DetailView") {
                        /* Midland Web Company www.midlandwebcompany.com*/
                        echo <<<EOQ
                <script language='javascript' type="text/javascript">
                        YAHOO.util.Event.onDOMReady(function(){
                            var saved_value = "";
                            var old_value = "";
                           if ($("#$fieldName").is('input')) {
                                saved_value = $("#$fieldName").val();
                                $("#$fieldName").val("");
                                old_value = $("#$fieldName").parent().html();
                            } else {
                                saved_value = $("#$fieldName").html();
                            }
                            var split_all = saved_value.split(",");
                            if (split_all.length >= 0) {
                                var new_html = "";
                                $.each(split_all, function(index, value) {
                                    new_html += '<li style="margin-left:10px;">'+value+'</li>';
                                });
                                if(old_value!=null && old_value!=""){
                                    var modified = old_value.replace(saved_value,new_html);
                                    $("#$fieldName").parent().html(modified);
                                }else{
                                    $("#$fieldName").html(new_html);
                                }
                            }
                        });
                </script>
EOQ;
                        /* Midland Web Company www.midlandwebcompany.com*/
                    }
                }
            }
        }
    }

}

?>