<?php
 // created: 2019-09-25 00:41:16
$layout_defs["SMS_Classes"]["subpanel_setup"]['sms_classes_users'] = array (
  'order' => 100,
  'module' => 'Users',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SMS_CLASSES_USERS_FROM_USERS_TITLE',
  'get_subpanel_data' => 'sms_classes_users',
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
