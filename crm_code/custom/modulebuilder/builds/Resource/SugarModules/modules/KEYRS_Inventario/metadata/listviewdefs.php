<?php
$module_name = 'KEYRS_Inventario';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'NUMERO_SERIE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NUMERO_SERIE',
    'width' => '10%',
    'default' => false,
  ),
  'ESTATUS' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_ESTATUS',
    'width' => '10%',
    'default' => false,
  ),
);
;
?>
