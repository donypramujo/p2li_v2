<?php namespace Dojo\Louhan\Models;

use Model;
use Backend\Behaviors\FormController;

/**
 * Model
 */
class Contest extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
    ];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = TRUE;
    
    protected $dates = ['start_date','end_date'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'dojo_louhan_contests';
    
    public $belongsToMany = [
    		'juries' => ['Backend\Models\User','table' => 'dojo_louhan_juries'],
    ];
    
    
    public function filterFields($fields, $context = null)
    {
    	if($context == FormController::CONTEXT_CREATE){
    		
    	}
    }
    
    public function getStatusOptions()
    {
    	return ['preparation'=>'Preparation','nomination' => 'Nomination', 'ongoing' => 'Ongoing','completed'=>'Completed','cancelled'=>'Cancelled'];
    }
}