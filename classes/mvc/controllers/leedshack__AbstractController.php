<?php
abstract class leedshack__AbstractController extends mvc_AbstractController {
	function preRender() {
		$this->push('css', 'css/core.css');
	}
}
?>
