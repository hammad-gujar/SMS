<?php
// created: 2019-09-25 00:41:16
$dictionary["sms_classes_users"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'sms_classes_users' => 
    array (
      'lhs_module' => 'SMS_Classes',
      'lhs_table' => 'sms_classes',
      'lhs_key' => 'id',
      'rhs_module' => 'Users',
      'rhs_table' => 'users',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sms_classes_users_c',
      'join_key_lhs' => 'sms_classes_userssms_classes_ida',
      'join_key_rhs' => 'sms_classes_usersusers_idb',
    ),
  ),
  'table' => 'sms_classes_users_c',
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
      'name' => 'sms_classes_userssms_classes_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sms_classes_usersusers_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sms_classes_usersspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sms_classes_users_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sms_classes_userssms_classes_ida',
        1 => 'sms_classes_usersusers_idb',
      ),
    ),
  ),
);