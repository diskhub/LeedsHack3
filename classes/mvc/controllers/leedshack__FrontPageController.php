<?php
class leedshack__FrontPageController extends leedshack__AbstractController {
	function page_index() {
		$this->push('js', 'js/updateDate.js');
		$this->set('date', date('d/m/Y H:i:s'));
		$this->set('title', 'Bootstrap Project');
		$this->setView('leedshack__FrontPageView');
	}
}
?>
