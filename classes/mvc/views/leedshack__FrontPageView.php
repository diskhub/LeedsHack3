<?php
class leedshack__FrontPageView extends leedshack__TemplateView {
	protected function goInnerBodyContent() {
		pfl('<div class="hero-unit">
                   <h2>PubQuiz Dashboard</h2>
                </div>
                <div class="row" style="min-height: 185px;">
                	<div class="span3 well" style="min-height: 185px;">
                    	<h3>Stats</h3>
                    	<ul>
                            <li>Current # of Users: 32</li>
                            <li>Current # of Questions: 11</li>
                            <li>Current # of Answers: 17</li>
                    	</ul>
                    </div>
                    <div class="span3 well" style="min-height: 185px;">
                    	<h3>Scoreboard</h3>
                    	<div class="progress progress-success" style="background-image: none; background-color: #ee5f5b;">
                        	<div class="bar" style="width: 60%%;">
                            </div>
                        </div>
                        <p>60% Have Answered Correctly.</p>
                    </div>
                    <div class="span4 well" style="min-height: 185px;">
                    	<h3>Current Question</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu nunc ac metus luctus feugiat. Nulla aliquam risus ut diam venenatis quis vehicula risus amet.</p>
                        <p>Time Elapsed: </p>
                        <p><a href="#">View All Questions</a> | <a href="#">Next Question &raquo;</a></p>
                    </div>
                </div>
            </div>
          </body>
            <script>
				$(".dropdown-toggle").dropdown();
            </script>');	
	}
}
