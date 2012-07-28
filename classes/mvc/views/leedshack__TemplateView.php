<?php
abstract class leedshack__TemplateView extends mvc_HtmlView {
	abstract protected function goInnerBodyContent();

	protected function getTitle() {
		return 'Bootstrap Project';
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
		pfl('	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>');
		if($this->get_js) {
			foreach($this->get_js as $script) {
				pfl('	<script type="text/javascript" src="/%s"></script>', $script);
			}
		}
	}

	protected function renderBodyContent() {
		pfl('	<div class="navbar navbar-fixed-top">
				<div class="navbar-inner">
					<div class="container">
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>
						<a class="brand" href="#"><img src="/img/freebie_logo.png" alt="Freebie" /></a>
						<div class="nav-collapse">
							<ul class="nav">
								<li class="active"><a href="/">Home</a></li>
								<li><a href="/about/">About Freebie</a></li>
								<li><a href="/apply/">Apply</a></li>
								<li><a href="/contact/">Contact</a></li>
							</ul>
						</div><!--/.nav-collapse -->
					</div>
				</div>
			</div>
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
