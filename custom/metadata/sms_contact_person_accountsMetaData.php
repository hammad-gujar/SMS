<?php
// created: 2019-09-25 00:24:40
$dictionary["sms_contact_person_accounts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'sms_contact_person_accounts' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'SMS_Contact_Person',
      'rhs_table' => 'sms_contact_person',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sms_contact_person_accounts_c',
      'join_key_lhs' => 'sms_contact_person_accountsaccounts_ida',
      'join_key_rhs' => 'sms_contact_person_accountssms_contact_person_idb',
    ),
  ),
  'table' => 'sms_contact_person_accounts_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'sms_contact_person_accountsaccounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sms_contact_person_accountssms_contact_person_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sms_contact_person_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sms_contact_person_accounts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sms_contact_person_accountsaccounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sms_contact_person_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sms_contact_person_accountssms_contact_person_idb',
      ),
    ),
  ),
);