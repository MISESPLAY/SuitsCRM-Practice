<?php

// modules/Resources/Menu.php

global $mod_strings, $app_strings, $sugar_config;

// Aquí definimos las opciones que salen al pasar el mouse por encima
$module_menu = array();

// Opción 1: Crear Nuevo
// Fíjate que apunta a 'EditView', aunque aún no la hemos creado, pero el botón ya existirá.
$module_menu[] = array(
    "index.php?module=Resources&action=EditView&return_module=Resources&return_action=DetailView",
    "Crear Recurso", // Texto del botón
    "CreateResources", // Icono (nombre clave)
    "Resources"
);

// Opción 2: Ver Lista
$module_menu[] = array(
    "index.php?module=Resources&action=index&return_module=Resources&return_action=DetailView",
    "Ver Lista",
    "ListResources",
    "Resources"
);
