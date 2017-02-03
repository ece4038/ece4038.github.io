<?php
	include "../../assets/includes/page_start_inc.php";
  include PATH . "assets/php/functions.php";
  $title = "ls Command";
	$active = "ls";
  $subnav = "1";
	include PATH_INC . "header_inc.php";
?>
			<h3><strong>About ls</strong></h3>
			<p>Lists the contents of a directory.</p>
			<h3><strong>ls syntax</strong></h3>
			<blockquote>
            <p>ls [OPTION]...[FILE]...</p>
			</blockquote>
			<h3><strong>Description</strong></h3>
			<p>Lists information about the FILEs (the current directory by default). Sorts entries alphabetically if none of -cftuvSUX nor --sort is specified.</p>
<?php
	include PATH_INC . "footer_inc.php";
?>