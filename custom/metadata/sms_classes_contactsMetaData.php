<?php
// created: 2019-09-25 00:41:16
$dictionary["sms_classes_contacts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'sms_classes_contacts' => 
    array (
      'lhs_module' => 'SMS_Classes',
      'lhs_table' => 'sms_classes',
      'lhs_key' => 'id',
      'rhs_module' => 'Contacts',
      'rhs_table' => 'contacts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sms_classes_contacts_c',
      'join_key_lhs' => 'sms_classes_contactssms_classes_ida',
      'join_key_rhs' => 'sms_classes_contactscontacts_idb',
    ),
  ),
  'table' => 'sms_classes_contacts_c',
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
      'name' => 'sms_classes_contactssms_classes_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sms_classes_contactscontacts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sms_classes_contactsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sms_classes_contacts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sms_classes_contactssms_classes_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sms_classes_contacts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sms_classes_contactscontacts_idb',
      ),
    ),
  ),
);