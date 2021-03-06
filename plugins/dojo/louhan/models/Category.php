<?php

namespace Dojo\Louhan\Models;

use Model;
use BackendAuth;

/**
 * Model
 */
class Category extends Model {
	use \October\Rain\Database\Traits\Validation;
	use \October\Rain\Database\Traits\Revisionable;
	
	/*
	 * Validation
	 */
	public $rules = [ 
			'name' => 'required|unique:dojo_louhan_categories|max:50',
			'rate_overall_impression' => 'required|numeric|between:0,100|total_rate',
			'rate_head' => 'required|numeric|between:0,100',
			'rate_face' => 'required|numeric|between:0,100',
			'rate_body_shape' => 'required|numeric|between:0,100',
			'rate_marking' => 'required|numeric|between:0,100',
			'rate_pearl' => 'required|numeric|between:0,100',
			'rate_color' => 'required|numeric|between:0,100',
			'rate_finnage' => 'required|numeric|between:0,100' 
	];
	public $attributeNames = [ ];
	
	/*
	 * Disable timestamps by default.
	 * Remove this line if timestamps are defined in the database table.
	 */
	public $timestamps = TRUE;
	
	/**
	 *
	 * @var string The database table used by the model.
	 */
	public $table = 'dojo_louhan_categories';
	
	/**
	 *
	 * @var array Monitor these attributes for changes.
	 */
	protected $revisionable = [ 
			'name',
			'rate_overall_impression',
			'rate_head',
			'rate_face',
			'rate_body_shape',
			'rate_marking',
			'rate_pearl',
			'rate_color',
			'rate_finnage' 
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
	public function getRevisionableUser() {
		return BackendAuth::getUser ();
	}
	public function beforeValidate() {
		$this->attributeNames = [ 
				'name' => trans ( 'dojo.louhan::lang.label.category_name' ),
				'rate_overall_impression' => trans ( 'dojo.louhan::lang.label.overall_impression' ),
				'rate_head' => trans ( 'dojo.louhan::lang.label.head' ),
				'rate_face' => trans ( 'dojo.louhan::lang.label.face' ),
				'rate_body_shape' => trans ( 'dojo.louhan::lang.label.body_shape' ),
				'rate_marking' => trans ( 'dojo.louhan::lang.label.marking' ),
				'rate_pearl' => trans ( 'dojo.louhan::lang.label.pearl' ),
				'rate_color' => trans ( 'dojo.louhan::lang.label.color' ),
				'rate_finnage' => trans ( 'dojo.louhan::lang.label.finnage' ) 
		];
	}
}