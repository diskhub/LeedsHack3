<?php
class leedshack__LoginController extends leedshack__AbstractController {
	public function page_index() {
		$form = $this->getLoginForm();
		$this->set('form', $form);
		$this->setView('leedshack__LoginView');
	}

	private function getLoginForm() {
		$form = new widget_Form('loginForm');
		$form->add('widget_TextElement', array(
			'name'		=> 'username',
			'label'		=> 'Username',
			'validators'	=> array(
				new validate_Required(true)
			),
			'cssClass'	=> 'span4 w330'
		));
		$form->add('widget_PasswordElement', array(
			'name'		=> 'userpass',
			'label'		=> 'Password',
			'validators'	=> array(
				new validate_Required(true)
			),
			'cssClass'	=> 'span4 w330'
		));

		if($form->completed()) {
			if(($user = leedshack__QuizMasterModel::authenticate($this->app->init_db, $form->value_username, $form->value_userpass))) {
				$this->app->init_session->set('user', $user);
				$this->redirect('/quiz/');
			} else {
				$this->push('error', 'Invalid username or password');
			}
		}
		return $form;
	}
}
?>
