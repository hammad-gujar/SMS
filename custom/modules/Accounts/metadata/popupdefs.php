<?php
$popupMeta = array (
    'moduleMain' => 'Account',
    'varName' => 'ACCOUNT',
    'orderBy' => 'name',
    'whereClauses' => array (
  'name' => 'accounts.name',
  'billing_address_city' => 'accounts.billing_address_city',
  'email' => 'accounts.email',
  'phone_office' => 'accounts.phone_office',
  'phone_alternate' => 'accounts.phone_alternate',
  'billing_address_street' => 'accounts.billing_address_street',
),
    'searchInputs' => array (
  0 => 'name',
  1 => 'billing_address_city',
  7 => 'email',
  9 => 'phone_office',
  10 => 'phone_alternate',
  11 => 'billing_address_street',
),
    'create' => array (
  'formBase' => 'AccountFormBase.php',
  'formBaseClass' => 'AccountFormBase',
  'getFormBodyParams' => 
  array (
    0 => '',
    1 => '',
    2 => 'AccountSave',
  ),
  'createButton' => 'LNK_NEW_ACCOUNT',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'phone_office' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_PHONE_OFFICE',
    'width' => '10%',
    'name' => 'phone_office',
  ),
  'phone_alternate' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_PHONE_ALT',
    'width' => '10%',
    'name' => 'phone_alternate',
  ),
  'billing_address_street' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_BILLING_ADDRESS_STREET',
    'width' => '10%',
    'name' => 'billing_address_street',
  ),
  'billing_address_city' => 
  array (
    'name' => 'billing_address_city',
    'width' => '10%',
  ),
  'email' => 
  array (
    'name' => 'email',
    'width' => '10%',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_ACCOUNT_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'PHONE_OFFICE' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_PHONE_OFFICE',
    'width' => '10%',
    'default' => true,
    'name' => 'phone_office',
  ),
  'PHONE_ALTERNATE' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_PHONE_ALT',
    'width' => '10%',
    'default' => true,
    'name' => 'phone_alternate',
  ),
  'BILLING_ADDRESS_STREET' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_BILLING_ADDRESS_STREET',
    'width' => '10%',
    'default' => true,
  ),
  'BILLING_ADDRESS_CITY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_CITY',
    'default' => true,
    'name' => 'billing_address_city',
  ),
),
);
