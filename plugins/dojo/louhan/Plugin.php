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
						'label' => 'Manage Configuration',
						'description' => 'Manage contest configuration.',
						'category' => 'dojo.louhan::lang.label.contest',
						'icon' => 'icon-globe',
						'class' => 'Dojo\Louhan\Models\Settings',
						'order' => 0,
						'keywords' => 'contest' 
				] 
		];
	}
	
	public function boot() {
		Validator::extend ( 'rate', function ($attribute, $value, $parameters, $validator) {
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
		}, trans ( 'dojo.louhan::lang.validation.rate' ) );
		
		
		
		
		User::extend(function($model) {
			$model->belongsToMany['contests'] = ['Dojo\Louhan\Models\Contest','table' => 'dojo_louhan_juries'];

			$model->addDynamicMethod('scopeJury', function($query) use ($model) {
				return $query->where('id', 2);
			});
			
		});
	}
}
