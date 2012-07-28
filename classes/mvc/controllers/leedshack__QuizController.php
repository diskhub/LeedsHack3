<?php
class leedshack__QuizController extends leedshack__AbstractController {
	public function page_add() {
		$form = $this->SaveQuizForm();
		$this->set('form', $form);
		$this->setView('leedshack__AddQuizView');
	}

	private function saveQuizForm() {
		$form = new widget_Form('saveQuizForm');
		$form->add('widget_TextElement', array(
			'name'		=> 'name',
			'label'		=> 'Quiz Name',
			'validators'	=> array(
				new validate_Required(true)
			)
		));

		if($form->completed()) {
			// Save the quiz
		}

		return $form;
	}
}
?>
