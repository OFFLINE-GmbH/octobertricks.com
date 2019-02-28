<?php namespace OFFLINE\Tricks\Controllers;

use Backend\Behaviors\FormController;
use Backend\Behaviors\ListController;
use Backend\Behaviors\ReorderController;
use Backend\Classes\Controller;
use BackendMenu;

class Topics extends Controller
{
    public $implement = [
        ListController::class,
        FormController::class,
        ReorderController::class,
    ];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'offline.tricks::manage_topics',
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('OFFLINE.Tricks', 'tricks-main', 'tricks-topics');
    }
}
