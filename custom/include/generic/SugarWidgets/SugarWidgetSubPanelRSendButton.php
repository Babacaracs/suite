<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/generic/SugarWidgets/SugarWidgetSubPanelTopButton.php');

//class SugarWidgetSubPanelSendInvitesButton extends SugarWidgetSubPanelTopButton
class SugarWidgetSubPanelRSendButton extends SugarWidgetSubPanelTopButton
{
    function display($defines, $additionalFormFields = null)
    {
        global $mod_strings;
       
        //$button = '<input class="button" onclick="document.location=\'index.php?module=FP_events&action=sendinvitemails&record='.$defines['focus']->id.'\'" name="sendinvites" value="'.$mod_strings['LBL_INVITE_PDF'].'" type="button">';
		$button = '<input class="button" onclick="alert(\'ACTION! :)\');" name="sendrs" value="SEND" type="button">';
        
		return $button; 
    }
}
?>