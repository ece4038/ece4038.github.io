<?php
	include "../../assets/includes/page_start_inc.php";
  include PATH . "assets/php/functions.php";
  $title = "finger Command";
	$active = "finger";
  $subnav = "2";
	include PATH_INC . "header_inc.php";
?>
			<h3><strong>About finger</strong></h3>
			<p>Pulls user information.</p>
			<h3><strong>finger syntax</strong></h3>
           <blockquote>
             <p>finger [OPTION]...[USER]...[USER@HOST]...</p>
           </blockquote>
           <h3><strong>Description</strong></h3>
           <p>Pulls all available information about selected system user.</p>  
<?php
	include PATH_INC . "footer_inc.php";
?>