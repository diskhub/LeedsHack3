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
			$quiz = new leedshack__QuizModel;
			$quiz->setName($form->value_name);
			$quiz->setQmId(1);//$this->app->init_user->getId());

			try {
				leedshack__QuizModel::write($this->app->init_db, $quiz);
				$this->push('success', 'Added Quiz');
				$this->redirect('/quiz/');
			} catch(Exception $e) {
				var_dump($e); exit;
				$this->push('error', 'Failed to write quiz');
			}
		}

		return $form;
	}
}
?>
