<?php namespace OFFLINE\Tricks\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Backend\Behaviors\ListController;
use Backend\Behaviors\FormController;

class Tags extends Controller
{
    public $implement = [ListController::class, FormController::class];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'offline.tricks::manage_tags',
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('OFFLINE.Tricks', 'tricks-main', 'tricks-tags');
    }
}
