<?php
class leedshack__RegisterPageView extends leedshack__TemplateView {
	protected function goInnerBodyContent() {
		pfl('<div class="hero-unit">
                   <h2>New Question</h2>
                </div>
                <div class="row" style="min-height: 185px;">
                	<div class="span11 well" style="min-height: 185px;">
                    	<form action="#" method="post" id="questions">
                        <div class="questionarea">
                        <h3>Enter Question <span>1\'s</span> text</h3><hr />
                        	<input type="text" name="questionText[]" class="countChars" rel="question" placeholder="Enter question here.." style="margin: 0 auto; width:1060px;" maxlength="160"/>
                            <p class="pull-right"><span class="questionCharsLeft">160</span> Characters Left</p><br /><br />
                        <h3>Enter Question <span>1\'s</span> Answer</h3><hr />
                        	<input type="text" name="questionAnswer[]" class="countChars" rel="answer" placeholder="Enter answer here.." style="margin: 0 auto; width:1060px;" maxlength="160"/>
                            <p class="pull-right"><span class="answerCharsLeft">160</span> Characters Left</p><br />
                            <hr />
                           </div>
                           
                        </form>
                        <p><span><a href="#" class="clone">More Questions</a></span><span class="pull-right"><button id="SubmitButton" class="btn btn-primary">Submit</button></span></p>
                    </div>
                </div>
            </div>
          </body>
            <script>
				$("#SubmitButton").click(function(){
					$("#questions").submit();
				});
				$(".dropdown-toggle").dropdown();
				$(".countChars").keyup(function(){
					var attr = $(this).attr("rel");
					var length = $(this).val().length;
					var total = 160 - length;
					$("." + attr + "CharsLeft").html(total);
				});
				var counter = 1
				$(".clone").click(function(e){
					
					e.preventDefault();
					$(".questionarea").clone().attr("class","random").appendTo("#questions").css("margin-top","15px");
					counter = counter + 1;
					$(".random:last h3 span").html(counter + "\'s");
				});
            </script>');	
	}
}
