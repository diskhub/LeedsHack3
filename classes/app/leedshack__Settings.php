<?php
class leedshack__Settings extends atsumi_AbstractAppSettings {
	/* we can setup base settings here, can be useful for version numbers etc */
	protected $settings = 	array (
					'siteName'	=> 'My Atsumi powered website!',
					'debug'		=> true,
					'cli'		=> false
				);
	/* 	At times you may want to utilise the construct, this could be to 
	 * 	analyse what domain a user is on and you could give them an 
	 * 	alternate specification for example */
	public function __construct () {
		parent::__construct();
	}
	
	/* the specification is how atsumi knows what URI's call what class & method */
	public function init_specification () {
		return array (	
			''	=> 'leedshack__FrontPageController',
			'ajax'	=> 'leedshack__AjaxController'
		);
	}
}
?>
