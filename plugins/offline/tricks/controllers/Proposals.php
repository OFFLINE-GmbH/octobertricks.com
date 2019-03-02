<?php namespace OFFLINE\Tricks\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Proposals extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'offline.tricks::manage_tricks' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('OFFLINE.Tricks', 'tricks-main', 'side-menu-item');
    }
}
