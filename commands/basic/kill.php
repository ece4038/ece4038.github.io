<?php
	include "../../assets/includes/page_start_inc.php";
  include PATH . "assets/php/functions.php";
  $title = "kill Command";
	$active = "kill";
  $subnav = "4";
	include PATH_INC . "header_inc.php";
?>
			<h3><strong>About kill</strong></h3>
			<p>Kills a process.</p>
			<h3><strong>kill syntax</strong></h3>
           <blockquote>
             <p>kill [OPTION]...[OPTION]...[PROCESSID]</p>
           </blockquote>
           <h3><strong>Description</strong></h3>
           <p>Sends a signal to the given process to kill itself.</p>  
<?php
	include PATH_INC . "footer_inc.php";
?>