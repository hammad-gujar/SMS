<?php
 // created: 2019-09-25 00:24:40
$layout_defs["Accounts"]["subpanel_setup"]['sms_contact_person_accounts'] = array (
  'order' => 100,
  'module' => 'SMS_Contact_Person',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SMS_CONTACT_PERSON_ACCOUNTS_FROM_SMS_CONTACT_PERSON_TITLE',
  'get_subpanel_data' => 'sms_contact_person_accounts',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
