<?php
class leedshack__LoginView extends leedshack__TemplateView {
	protected function goInnerBodyContent() {
		pfl('<div class="hero-unit">
                   <h2>PubQuiz Login</h2>
                </div>
                <div class="span1 offset3">&nbsp;
                </div>
                <div class="span4">
                %s
                   		<div class="control-group">
                        	<label class="control-label" for="inputIcon"><strong>Email Address</strong></label>
                            <div class="controls">
                            	<div class="input-prepend">
                                	<span class="add-on">
                                    	<i class="icon-envelope"></i>
                                    </span> %s
                                    
                                </div>
                            </div>
                            <label class="control-label" for="inputIcon2"><strong>Password</strong></label>
                            <div class="controls">
                            	<div class="input-prepend">
                                	<span class="add-on">
                                    	<i class="icon-asterisk"></i>
                                    </span> %s
                                </div>
                            </div>%s
                        </div>
                   %s
                </div>
            </div>
          </body>', $this->get_form->getFormTop(),$this->get_form->getElement('username'),$this->get_form->getElement('password'),$this->get_form->getFormBottom());
	}
}
?>
