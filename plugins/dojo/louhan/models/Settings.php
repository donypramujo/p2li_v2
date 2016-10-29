<?php


namespace Dojo\Louhan\Models;

use Model;

class Settings extends Model {
	public $implement = [ 
			'System.Behaviors.SettingsModel' 
	];
	
	public $settingsCode = 'dojo_louhan_settings';
	public $settingsFields = 'fields.yaml';
}