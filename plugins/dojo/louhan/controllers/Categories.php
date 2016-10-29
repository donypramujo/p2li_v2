<?php namespace Dojo\Louhan\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use October\Rain\Support\Facades\Flash;

class Categories extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $requiredPermissions = [
        'access_categories' 
    ];

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Dojo.Louhan', 'masterdata-main-menu-item', 'category-side-menu-item');
    }
}