<?php
class leedshack__LoginView extends leedshack__TemplateView {
	protected function goInnerBodyContent() {
		pfl('	%s', $this->get_form);
	}
}
?>
