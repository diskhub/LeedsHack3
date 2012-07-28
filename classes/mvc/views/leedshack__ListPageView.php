<?php
class leedshack__ListPageView extends leedshack__TemplateView {
	protected function goInnerBodyContent() {
		pfl('<div class="hero-unit">
                   <h2>Current Participants</h2>
                </div>
                <div class="span5 well">
                    <h3>Alex Bowers</h3>
                    <div id="chart_div"></div>
                </div>
            </div>
          </body>
            <script>
				$(".dropdown-toggle").dropdown();
            </script>');	
	}
}
