<?php
	include "../../assets/includes/page_start_inc.php";
  include PATH . "assets/php/functions.php";
  $title = "who Command";
	$active = "who";
  $subnav = "1";
	include PATH_INC . "header_inc.php";
?>
			<h3><strong>About who</strong></h3>
			<p>Displays who is logged onto the system.</p>
			<h3><strong>who syntax</strong></h3>
           <blockquote>
             <p>who [OPTION]</p>
           </blockquote>
           <h3><strong>Description</strong></h3>
           <p>Prints all information about the users who are currently logged in.</p>  
<?php
	include PATH_INC . "footer_inc.php";
?>