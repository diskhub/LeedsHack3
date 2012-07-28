<?php
class leedshack__smsController extends leedshack__AbstractController {
	function page_inbound() {
		$data = leedshack__QuizMasterModel::loadAll($this->app->init_db);
		var_dump("test");
		exit;
	}
}
?>
