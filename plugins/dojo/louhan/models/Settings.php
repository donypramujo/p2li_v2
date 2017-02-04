<?php


namespace Dojo\Louhan\Models;

use Model;
use Backend\Models\UserGroup;

class Settings extends Model {
	
	public $implement = [ 
			'System.Behaviors.SettingsModel' 
	];
	use \October\Rain\Database\Traits\Validation;
	
	public $rules = [
			'max_score' => 'required|numeric|min:0',
			'minor_penalty' => 'required|numeric|between:0,100',
			'major_penalty' => 'required|numeric|between:0,100',
	];
	
	public $settingsCode = 'dojo_louhan_settings';
	public $settingsFields = 'fields.yaml';
	
	public function getContestOptions($keyValue = null)
	{
		$result = [];
		foreach (Contest::all() as $contest) {
			$result[$contest->id] = $contest->name;
		}
		return $result;
	}
}