<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class Resource extends SugarBean { // Clase con Mayúscula

    // 1. Activamos la estructura moderna
    public $new_schema = true;

    // 2. Debe coincidir EXACTO con el nombre de tu carpeta
    public $module_dir = 'Resources';

    // 3. Nombre del Objeto (Singular y Mayúscula)
    public $object_name = 'Resource';

    // 4. Nombre de la tabla (Minúsculas está bien)
    public $table_name = 'resources';

    // Opcional: Permite importar registros desde CSV
    public $importable = true;

    public function __construct() {
        parent::__construct();
    }
}