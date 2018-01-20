<?php 
	function inside($f) {

		// add accent to "Poznańskie Duszpasterstwa" in nav
		$f = preg_replace('#<a href="(.*)/poznanskie-duszpasterstwa/">#Usmi', '<a href="$1/poznanskie-duszpasterstwa/" class="accent">', $f);

		return $f;
	}

	ob_start('inside');
?>