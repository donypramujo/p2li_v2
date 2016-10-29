<?php namespace Dojo\Louhan\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Teams extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'access_teams' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Dojo.Louhan', 'masterdata-main-menu-item', 'team-side-menu-item');
    }
}