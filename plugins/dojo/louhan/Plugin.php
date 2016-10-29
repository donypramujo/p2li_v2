<?php

namespace Dojo\Louhan;

use System\Classes\PluginBase;
use Illuminate\Support\Facades\Validator;

class Plugin extends PluginBase {
	public function registerComponents() {
	}
	
	public function registerSettings() {
		return [ 
				'location' => [ 
						'label' => 'Manage Configuration',
						'description' => 'Manage contest configuration.',
						'category' => 'dojo.louhan::lang.label.contest',
						'icon' => 'icon-globe',
						'class' => 'Dojo\Louhan\Models\Settings',
						'order' => 500,
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
	}
}
