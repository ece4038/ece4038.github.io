<?php
	include "../../assets/includes/page_start_inc.php";
  include PATH . "assets/php/functions.php";
  $title = "mail Command";
	$active = "mail";
  $subnav = "3";
	include PATH_INC . "header_inc.php";
?>
			<h3><strong>About mail</strong></h3>
			<p>Send and receive mail.</p>
			<h3><strong>mail syntax</strong></h3>
           <blockquote>
             <p>mail [OPTION]...[ADDRESS]</p>
           </blockquote>
           <h3><strong>Description</strong></h3>
           <p>Allows you to send and receive email over the web. The mail command by itself opens the mail program.</p>  
<?php
	include PATH_INC . "footer_inc.php";
?>