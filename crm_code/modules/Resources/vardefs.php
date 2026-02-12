<?php
// modules/Resources/vardefs.php

$dictionary['Resource'] = array(
    'table' => 'resources',
    'audited' => true, // Opcional: Guarda historial de cambios
    'studio' => true,

    // Dejamos esto vacío por ahora.
    // Las plantillas llenarán id, name, description, date_entered, etc.
    'fields' => array(
        // Aquí solo pondremos tus campos personalizados en el futuro
    ),

    'relationships' => array(),
);

// ¡ESTA ES LA PARTE IMPORTANTE!
// Le decimos a SuiteCRM: "Oye, usa las plantillas estándar para este módulo"
   // 1. Nombre del Módulo (Carpeta)
// 2. Nombre del Objeto (Singular)
// 3. Array de plantillas
VardefManager::createVardef(
    'Resources',
    'Resource',
    array(
        'basic',      // Agrega: ID, deleted, date_entered, date_modified...
        'default',    // Agrega: Name, description...
        'assignable'  // Agrega: assigned_user_id (Usuario asignado)
    )
);