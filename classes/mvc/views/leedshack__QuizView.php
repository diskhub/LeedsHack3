<?php
class leedshack__QuizView extends leedshack__TemplateView {
	protected function goInnerBodyContent() {
		foreach($this->get_quizzes as $quiz) {
			pfl('	<div class="quiz">
					<h3 class="block">%s</h3>
				</div>', $quiz->getName());
		}
	}
}
?>
