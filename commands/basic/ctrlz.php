<?php
	include "../../assets/includes/page_start_inc.php";
  include PATH . "assets/php/functions.php";
  $title = "Ctrl-Z Command";
	$active = "ctrlz";
  $subnav = "11";
	include PATH_INC . "header_inc.php";
?>
			<h3><strong>About Ctrl-Z</strong></h3>
			<p>Suspends a process.</p>
			<h3><strong>Ctrl-Z syntax</strong></h3>
           <blockquote>
             <p>Ctrl-Z</p>
           </blockquote>
           <h3><strong>Description</strong></h3>
           <p>Suspends a process by sending it the signal "SIGSTOP" - a sleep signal. This can then be undone to resume the process.</p>  
<?php
	include PATH_INC . "footer_inc.php";
?>