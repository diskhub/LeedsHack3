<?php
class leedshack__Settings extends atsumi_AbstractAppSettings {
	/* we can setup base settings here, can be useful for version numbers etc */
	protected $settings = 	array (
					'siteName'	=> 'My Atsumi powered website!',
					'debug'		=> true,
					'cli'		=> false,
					'dbHost'	=> '127.0.0.1',
					'dbPort'	=> '3306',
					'dbUser'	=> 'root',
					'dbPassword'	=> 'leedshack',
					'dbName'	=> 'quiz'

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
			'ajax'	=> 'leedshack__AjaxController',
			'sms' => 'leedshack__smsController'
		);
	}

	/* Init Database */                             
        public function init_db() {
                try {
                        $db = new db_MySql(array(
				'host'		=> $this->get_dbHost,
				'port'		=> $this->get_dbPort,
				'username'	=> $this->get_dbUser,
				'password'	=> $this->get_dbPassword, 
				'dbname'	=> $this->get_dbName
			));

                        if ($this->get_debug) {
                                atsumi_Debug::addDatabase($db);                                 
                        }       
                } catch (Exception $e) {
                        throw new Exception("Failed to connect to database.");
                }               
                return $db;     
        }	

	public function init_session() {
		return session_Handler::getInstance(
			array(
				'storage'	=> 'session_BasicStorage'
			)
		);
	}
}
?>
