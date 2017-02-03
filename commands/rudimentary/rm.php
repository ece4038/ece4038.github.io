<?php
	include "../../assets/includes/page_start_inc.php";
  include PATH . "assets/php/functions.php";
  $title = "rm Command";
	$active = "rm";
  $subnav = "6";
	include PATH_INC . "header_inc.php";
?>
			<h3><strong>About rm</strong></h3>
			<p>Removes (deletes) a file.</p>
			<h3><strong>rm syntax</strong></h3>
           <blockquote>
             <p>rm [OPTION]...[FILE]...</p>
           </blockquote>
           <h3><strong>Description</strong></h3>
           <p>Removes the specified file. </p>  
<?php
	include PATH_INC . "footer_inc.php";
?>