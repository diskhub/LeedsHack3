<?php
abstract class leedshack__TemplateView extends mvc_HtmlView {
	abstract protected function goInnerBodyContent();

	protected function getTitle() {
		return 'PubQuiz';
	}

	protected function renderHeadMeta() {
		// Is there any point anymore?
	}

	protected function renderHeadCss() {
		pfl('	<link rel="stylesheet" href="/css/bootstrap.css" type="text/css" media="screen"></link>');
		pfl('	<link rel="stylesheet" href="/css/bootstrap-responsive.css" type="text/css" media="screen"></link>');
		if($this->get_css) {
			foreach($this->get_css as $css) {
				pfl('	<link rel="stylesheet" href="/%s" type="text/css" media="screen"></link>', $css);
			}
		}
	}

	protected function renderHeadJs() {
		pfl('<script src="/js/jquery-1.7.2.min.js"></script>');
        pfl('<script src="/js/bootstrap.min.js"></script>');
        pfl('<script src="/js/bootstrap-tab.js"></script>');
        pfl('<script src="/js/bootstrap-dropdown.js"></script>');
        pfl('<script src="/js/bootstrap-collapse.js"></script>');
        pfl('<script src="/js/bootstrap-transition.js"></script>');
        pfl('<script src="/js/bootstrap-alert.js"></script>');
		if($this->get_js) {
			foreach($this->get_js as $script) {
				pfl('	<script type="text/javascript" src="/%s"></script>', $script);
			}
		}
	}

	protected function renderBodyContent() {
		pfl('<div class="navbar navbar-fixed-top">
                <div class="navbar-inner">
                    <div class="container">
                        <ul class="nav">
                            <li>
                                <a class="brand" href="#">PubQuiz</a>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown">Account <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="icon-user"></i> Login / Register</a></li><!-- Only visible if logged out -->
                                    <li><a href="#"><i class="icon-off"></i> Logout</a></li><!-- Only visible if logged in -->
                                </ul>
                            </li>
                            <li class="dropdown">
                            	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Manage <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                	<li class="nav-header">Quiz</li>
                                	<li class="divider"></li>
                               		<li><a href="#"><i class="icon-pencil"></i> New Quiz</a></li>
                                    <li><a href="#"><i class="icon-pencil"></i> Manage Quiz\'</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> <hr /><hr />
            <div class="container">');
		$this->goInnerBodyContent();
		pfl('
		  		<hr />
				<footer style="text-align: center;">
					<p>&copy; Jon Stirling 2012</p>
					<p>Built using <a href="http://atsumi.org" target="_BLANK">Atsumi</a> and <a href="http://twitter.github.com/bootstrap/" target="_BLANK">Bootstrap</a>
				</footer>
			</div> <!-- /container -->');
		pfl('</div>
		</div>');
		pfl('	<!-- Le javascript ============================================ -->
			<!-- Placed at the end of the document so the pages load faster -->
			<script src="/js/bootstrap-transition.js"></script>
			<script src="/js/bootstrap-alert.js"></script>
			<script src="/js/bootstrap-modal.js"></script>
			<script src="/js/bootstrap-dropdown.js"></script>
			<script src="/js/bootstrap-scrollspy.js"></script>
			<script src="/js/bootstrap-tab.js"></script>
			<script src="/js/bootstrap-tooltip.js"></script>
			<script src="/js/bootstrap-popover.js"></script>
			<script src="/js/bootstrap-button.js"></script>
			<script src="/js/bootstrap-collapse.js"></script>
			<script src="/js/bootstrap-carousel.js"></script>
			<script src="/js/bootstrap-typeahead.js"></script>');
	}

}
?>
