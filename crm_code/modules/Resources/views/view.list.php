<?php

// modules/Resources/views/view.list.php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.list.php');

class ResourcesViewList extends ViewList
{

    public function __construct()
    {
        parent::__construct();
    }

    // Aquí podrías sobreescribir lógica visual,
    // pero por ahora con heredar de ViewList es suficiente.
}