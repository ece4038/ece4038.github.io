<?php
	include "../../assets/includes/page_start_inc.php";
  include PATH . "assets/php/functions.php";
  $title = "locate Command";
	$active = "locate";
  $subnav = "9";
	include PATH_INC . "header_inc.php";
?>
			<h3><strong>About locate</strong></h3>
			<p>Finds files by name.</p>
			<h3><strong>locate syntax</strong></h3>
           <blockquote>
             <p>locate [OPTION]...[PATTERN]...</p>
           </blockquote>
           <h3><strong>Description</strong></h3>
           <p>Locate is used to read from databases and output file names matching at least one of the specified patterns.</p>  
<?php
	include PATH_INC . "footer_inc.php";
?>