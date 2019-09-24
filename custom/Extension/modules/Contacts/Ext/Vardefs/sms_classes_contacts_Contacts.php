<?php
// created: 2019-09-25 00:41:16
$dictionary["Contact"]["fields"]["sms_classes_contacts"] = array (
  'name' => 'sms_classes_contacts',
  'type' => 'link',
  'relationship' => 'sms_classes_contacts',
  'source' => 'non-db',
  'module' => 'SMS_Classes',
  'bean_name' => 'SMS_Classes',
  'vname' => 'LBL_SMS_CLASSES_CONTACTS_FROM_SMS_CLASSES_TITLE',
  'id_name' => 'sms_classes_contactssms_classes_ida',
);
$dictionary["Contact"]["fields"]["sms_classes_contacts_name"] = array (
  'name' => 'sms_classes_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SMS_CLASSES_CONTACTS_FROM_SMS_CLASSES_TITLE',
  'save' => true,
  'id_name' => 'sms_classes_contactssms_classes_ida',
  'link' => 'sms_classes_contacts',
  'table' => 'sms_classes',
  'module' => 'SMS_Classes',
  'rname' => 'name',
);
$dictionary["Contact"]["fields"]["sms_classes_contactssms_classes_ida"] = array (
  'name' => 'sms_classes_contactssms_classes_ida',
  'type' => 'link',
  'relationship' => 'sms_classes_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SMS_CLASSES_CONTACTS_FROM_CONTACTS_TITLE',
);
