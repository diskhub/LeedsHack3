<?php
class leedshack__FrontPageView extends leedshack__TemplateView {
	protected function goInnerBodyContent() {
		pfl('<p>The current time is <span class="date">%s</span></p>', $this->get_date);	
	}
}
