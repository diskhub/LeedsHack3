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

		if(isset($_POST['questions'])) {
			$index = 0;
			foreach($_POST['questions'] as $qVar) {
				$form->add('widget_TextElement', array(
					'name'		=> sprintf('questions[%s]', $index),
					'label'		=> 'Question'
				));
				$form->add('widget_TextElement', array(
					'name'		=> sprintf('answers[%s]', $index),
					'label'		=> 'Answer'
				));

				$index++;
			}
		}

		$form->add('widget_TextElement', array(
			'name'		=> 'questions[]',
			'label'		=> 'Question'
		));

		$form->add('widget_TextElement', array(
			'name'		=> 'answers[]',
			'label'		=> 'Answer'
		));


		if($form->completed()) {
			// Save the quiz
			$quiz = new leedshack__QuizModel;
			$quiz->setName($form->value_name);
			$quiz->setQmId(1);//$this->app->init_user->getId());

			try {
				leedshack__QuizModel::write($this->app->init_db, $quiz);
				$index = 0;
				foreach($_POST['questions'] as $qVar) {
					$question = new leedshack__QuestionModel;
					$question->setQuestion($_POST['questions'][$index]);
					$question->setAnswer($_POST['answers'][$index]);
					$question->setQuiz_id($quiz->getId());
					// Assume an answer exists
					leedshack__QuestionModel::write($this->app->init_db, $question);
				}

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
