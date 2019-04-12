<?php
/* *********************************************************************************
 * Developed by: Midland Web Company www.midlandwebcompany.com*
 ***********************************************************************************/
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

/* * *******************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.

 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 * ****************************************************************************** */

class DF_DynamicFieldsViewEdit extends ViewEdit {

    public function display() {
        parent::display();
        $module_list = $this->ev->fieldDefs['dfmodule']['options'];
        $pre_value = $this->ev->fieldDefs['dffield']['value'];
        foreach ($module_list as $module) {
            if (!is_file($GLOBALS['sugar_config']['cache_dir'] . 'jsLanguage/' . $module . '/' . $GLOBALS['current_language'] . '.js')) {
                require_once 'include/language/jsLanguage.php';
                jsLanguage::createModuleStringsCache($module, $GLOBALS['current_language']);
            }
            echo '<script type="text/javascript" src="' . $GLOBALS['sugar_config']['cache_dir'] . 'jsLanguage/' . $module . '/' . $GLOBALS['current_language'] . '.js?s=' . $GLOBALS['js_version_key'] . '&c=' . $GLOBALS['sugar_config']['js_custom_version'] . '&j=' . $GLOBALS['sugar_config']['js_lang_version'] . '"></script>';
        }
        echo $javascript = <<<EOQ
                <script language='javascript'>
                    YAHOO.util.Event.onDOMReady(function(){
                        var selected_module = $("#dfmodule").val();
                        $("#dfmodule").change(function(){
                            load_fields($("#dfmodule").val(),"NO");
                        });
                        $("#name").attr("readonly",true);
                        $("#name_label").append('<font color="red" id="remove_font">(read-only)</font>');
                        load_fields(selected_module,"YES");
                        function load_fields(selected_module,hasPreValue){
                            var preValue = "";
                            if(hasPreValue=="YES"){
                                preValue = "$pre_value";
                            }
                            removeFromValidate('EditView','dffield');
                            $("#name").val($("#dfmodule").val() + "_");
                            var doNotInclude = ['id','date_entered','modified_by_name','date_modified','modified_user_id','assigned_user_id']
                            var selectField = "<select name='selectfield' id='selectfield'>";
                            var append_options = '<option value="" selected="selected">&nbsp;</option>'
                            $("#dffield").hide();
                            SUGAR.ajaxUI.showLoadingPanel();
                             $.ajax({
                                    type: 'GET',
                                    url: 'index.php?module=DF_DynamicFields&action=ajax-cnt&to_pdf=1&selected_module='+selected_module,
                                }).done(function(response)
                                {
                                    data = JSON.parse(response);
                                    $.each(data, function(fieldname, label){
                                        var text = SUGAR.language.get(selected_module, label);
                                        //console.log(fieldname + " : " + label + " : " + text);
                                        if(text=="undefined" || text=="null" || text=="" || text==null){
                                            text = fieldname;
                                        }
                                        if ($.inArray(fieldname, doNotInclude) == -1) {
                                            if(fieldname==preValue){
                                                append_options += '<option value="' + fieldname + '" selected="selected">' + text + '</option>';
                                            }else{
                                                append_options += '<option value="' + fieldname + '">' + text + '</option>';
                                            }
                                        }
                                    });
                                    selectField += append_options;
                                    selectField += "</select>";
                                    if($("#selectfield").length!=0){
                                        $('#selectfield').find('option').remove().end().append(append_options);
                                    }else{
                                        $("#dffield").parent().append(selectField);
                                    }
                                    if($("#selectfield").val()=="" || $("#selectfield").val()=="undefined" || $("#selectfield").val()==null){
                                        $("#dffield").val("");
                                    }
                                    $("#selectfield").change(function(){
                                        $("#name").val($("#dfmodule").val() + "_" +$("#selectfield option:selected").text());
                                        $("#dffield").val($("#selectfield").val());
                                    });
                                    SUGAR.ajaxUI.hideLoadingPanel();
                               });
                        }
                    });
                </script>
EOQ;
        $this->ev->process();
    }

}
