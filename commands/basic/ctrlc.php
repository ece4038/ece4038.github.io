<?php
	include "../../assets/includes/page_start_inc.php";
  include PATH . "assets/php/functions.php";
  $title = "Ctrl-C Command";
	$active = "ctrlc";
  $subnav = "10";
	include PATH_INC . "header_inc.php";
?>
			<h3><strong>About Ctrl-C</strong></h3>
			<p>Kills a process.</p>
			<h3><strong>Ctrl-C syntax</strong></h3>
           <blockquote>
             <p>Ctrl-C</p>
           </blockquote>
           <h3><strong>Description</strong></h3>
           <p>Sends the signal "SIGINT" to the current process allowing it to close itself.</p>  
<?php
	include PATH_INC . "footer_inc.php";
?>