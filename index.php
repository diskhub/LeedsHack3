<?php 
/* include Atsumi */
require_once ( "../atsumi/init.php");
/* load the necessary packages in Atsumi & project */
atsumi_Loader::references(array(
	'atsumi' 	=> 'utility mvc database',
<<<<<<< HEAD
	'LeedsHack3'	=> 'app mvc'
=======
	'leedshack'	=> 'app mvc lib'
>>>>>>> 0cd252164bf6376acf0da45abd28ee1318866d33
));
/* initialise the project settings */
$settings = new leedshack__Settings();
/* load the project settings in to Atsumi */
Atsumi::initApp($settings);
try {
	/* process the controller & method requested by the URI */
	Atsumi::app__go($_SERVER['REQUEST_URI']);
} catch (app_PageNotFoundException $e) {
	/* handle 404's */
	Atsumi::app__go("/404/");
}
/* render the page */
Atsumi::app__render();
?>
