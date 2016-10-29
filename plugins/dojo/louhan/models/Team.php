<?php


namespace Dojo\Louhan\Models;

use Model;
use Backend\Facades\BackendAuth;

/**
 * Model
 */
class Team extends Model {
	use \October\Rain\Database\Traits\Validation;
	use \October\Rain\Database\Traits\Revisionable;
	
	/*
	 * Validation
	 */
	public $rules = [ 
			'name' => 'required|unique:dojo_louhan_teams|max:50' 
	];
	
	/*
	 * Disable timestamps by default.
	 * Remove this line if timestamps are defined in the database table.
	 */
	public $timestamps = TRUE;
	
	/**
	 *
	 * @var string The database table used by the model.
	 */
	public $table = 'dojo_louhan_teams';
	
	/**
	 *
	 * @var array Monitor these attributes for changes.
	 */
	protected $revisionable = [ 
			'name' 
	];
	
	/**
	 *
	 * @var array Relations
	 */
	public $morphMany = [ 
			'revision_history' => [ 
					'System\Models\Revision',
					'name' => 'revisionable' 
			] 
	];
	public $attributeNames = [ ];
	
	public function getRevisionableUser() {
		return BackendAuth::getUser ();
	}
	public function beforeValidate() {
		$this->attributeNames = [ 
				'name' => trans ( 'dojo.louhan::lang.label.team_name' ) 
		];
	}
}