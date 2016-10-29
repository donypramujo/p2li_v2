<?php namespace Dojo\Louhan\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Subcategories extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'access_subcategories' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Dojo.Louhan', 'masterdata-main-menu-item', 'subcategory-side-menu-item');
    }
}