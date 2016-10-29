<?php namespace Dojo\Louhan\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Illuminate\Support\Facades\Log;
use Backend\Models\User;
use Dojo\Louhan\Models\Contest;

class Contests extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController','Backend.Behaviors.RelationController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $relationConfig = 'config_relation.yaml';

    public $requiredPermissions = [
        'access_contests' 
    ];
    
    public $bodyClass = 'compact-container';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Dojo.Louhan', 'contest-main-menu-item', 'contests-side-menu-item');
        
        
        
        
    }
    
}