<?php

// modules/Resources/metadata/listviewdefs.php

$module_name = 'Resources'; // Asegúrate que coincida con tu carpeta

$listViewDefs[$module_name] = array(
    'NAME' => array(
        'width' => '32%',
        'label' => 'LBL_NAME',
        'default' => true,
        'link' => true, // Hace que el nombre sea un link al detalle
    ),
    'ASSIGNED_USER_NAME' => array(
        'width' => '9%',
        'label' => 'LBL_ASSIGNED_TO_NAME',
        'module' => 'Employees',
        'id' => 'ASSIGNED_USER_ID',
        'default' => true,
    ),
    'DATE_ENTERED' => array(
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
    ),
);