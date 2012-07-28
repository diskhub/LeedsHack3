<?php
class leedshack__RegisterPageView extends leedshack__TemplateView {
	protected function goInnerBodyContent() {
		pfl('<div class="hero-unit">
                   <h2>PubQuiz Register</h2>
                </div>
                <div class="span1 offset3">&nbsp;
                </div>
                <div class="span4">
                <form>
                   		<div class="control-group">
                        	<label class="control-label" for="inputIcon"><strong>Email Address</strong></label>
                            <div class="controls">
                            	<div class="input-prepend">
                                	<span class="add-on">
                                    	<i class="icon-envelope"></i>
                                    </span><input class="span4" style="width:330px;" id="inputIcon" type="email" />
                                    
                                </div>
                            </div>
                            <label class="control-label" for="inputIcon2"><strong>Password</strong></label>
                            <div class="controls">
                            	<div class="input-prepend">
                                	<span class="add-on">
                                    	<i class="icon-asterisk"></i>
                                    </span><input class="span4" style="width:330px;" id="inputIcon2" type="password" />
                                </div>
                            </div>
                            <label class="control-label" for="inputIcon3"><strong>Password Confirm</strong></label>
                            <div class="controls">
                            	<div class="input-prepend">
                                	<span class="add-on">
                                    	<i class="icon-asterisk"></i>
                                    </span><input class="span4" style="width:330px;" id="inputIcon3" type="password" />
                                </div>
                            </div>
                            <div class="pull-right">
                            	<button class="btn btn-primary">Register</button>
                            </div>
                        </div>
                   </form>
                </div>
                
            </div>
          </body>
            <script>
				$(".dropdown-toggle").dropdown();
            </script>');	
	}
}
