<?php
// modules/Resources/controller.php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class ResourcesController extends SugarController {

    public function pre_action() { // Sin acento en public

        // 1. IMPORTANTE: Traer la variable global al scope local
        global $current_user;

        // 2. Verificamos si la variable cargó y si es admin
        // is_admin == 1 significa verdadero en SuiteCRM
        if (empty($current_user) || !$current_user->is_admin) {
            sugar_die("ACCESO DENEGADO: Solo administradores pueden ver este módulo.");
        }

        // 3. VITAL: Si pasó la seguridad, debemos dejar que el padre haga su trabajo
        // Si borras esto, el controlador se queda "mudo" después de la validación.
        parent::pre_action();
    }
}