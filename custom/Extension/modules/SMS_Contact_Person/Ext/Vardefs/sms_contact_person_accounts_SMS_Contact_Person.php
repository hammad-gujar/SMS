<?php
// created: 2019-09-25 00:24:40
$dictionary["SMS_Contact_Person"]["fields"]["sms_contact_person_accounts"] = array (
  'name' => 'sms_contact_person_accounts',
  'type' => 'link',
  'relationship' => 'sms_contact_person_accounts',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_SMS_CONTACT_PERSON_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'id_name' => 'sms_contact_person_accountsaccounts_ida',
);
$dictionary["SMS_Contact_Person"]["fields"]["sms_contact_person_accounts_name"] = array (
  'name' => 'sms_contact_person_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SMS_CONTACT_PERSON_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'sms_contact_person_accountsaccounts_ida',
  'link' => 'sms_contact_person_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["SMS_Contact_Person"]["fields"]["sms_contact_person_accountsaccounts_ida"] = array (
  'name' => 'sms_contact_person_accountsaccounts_ida',
  'type' => 'link',
  'relationship' => 'sms_contact_person_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SMS_CONTACT_PERSON_ACCOUNTS_FROM_SMS_CONTACT_PERSON_TITLE',
);
