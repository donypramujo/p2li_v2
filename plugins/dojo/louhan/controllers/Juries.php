<?php namespace Dojo\Louhan\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Backend\Models\UserGroup;

class Juries extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'access_juries' 
    ];
    public $bodyClass = 'compact-container';
    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Dojo.Louhan', 'masterdata-main-menu-item', 'jury-side-menu-item');
    }
    
    /**
     * Called before the creation form is saved.
     * @param Model
     */
    public function formAfterCreate($model)
    {
    	$group = UserGroup::where('code', 'jury')->firstOrFail();
    	$model->groups()->attach($group);
    }
    
    public function listExtendQuery($query)
    {
    	$query->juries();
    }
    
}