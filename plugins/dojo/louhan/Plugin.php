<?php

namespace Dojo\Louhan;

use Backend\Models\User;
use Illuminate\Support\Facades\Validator;
use System\Classes\PluginBase;
use October\Rain\Database\Builder;

class Plugin extends PluginBase {
	public function registerComponents() {
	}
	
	public function registerSettings() {
		return [ 
				'contest' => [ 
						'label' => 'dojo.louhan::lang.label.contest_settings',
						'description' => 'dojo.louhan::lang.label.manage_contest_settings',
						'category' => 'dojo.louhan::lang.label.contest',
						'icon' => 'icon-gear',
						'class' => 'Dojo\Louhan\Models\Settings',
						'order' => 0,
						'keywords' => 'contest configuration',
						'permissions' => ['dojo.louhan.access_settings']
				] 
		];
	}
	
	public function boot() {
		
		Validator::extend ( 'total_rate', function ($attribute, $value, $parameters, $validator) {
			$rates = array_only ( $validator->getData (), [ 
					'rate_overall_impression',
					'rate_head',
					'rate_face',
					'rate_body_shape',
					'rate_marking',
					'rate_pearl',
					'rate_color',
					'rate_finnage' 
			] );
			$total_rates = collect ( $rates )->sum ();
			return $total_rates == 100;
		}, trans ( 'dojo.louhan::lang.label.total_rate' ) );
		
		User::extend(function($model) {
			$model->belongsToMany['contests'] = ['Dojo\Louhan\Models\Contest','table' => 'dojo_louhan_juries'];
			$model->addDynamicMethod('scopeJuries', function($query) use ($model) {
				return $query->whereHas('groups', function ($query) {
    				$query->where('code','jury');
    			});
			});
			
		});
	}
}
