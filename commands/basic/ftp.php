<?php
	include "../../assets/includes/page_start_inc.php";
  include PATH . "assets/php/functions.php";
  $title = "ftp Command";
	$active = "ftp";
  $subnav = "7";
	include PATH_INC . "header_inc.php";
?>
			<h3><strong>About ftp</strong></h3>
			<p>Opens an interface to copy a file from one computer to another over the Internet/LAN.</p>
			<h3><strong>ftp syntax</strong></h3>
           <blockquote>
             <p>ftp [ADDRESS]</p>
           </blockquote>
           <h3><strong>Description</strong></h3>
           <p>Allows for easy file transfers between different computers over the Internet/LAN. It is one of the most commonly used interfaces, and has numerous applications. Most remote machines will request a username/password when attempting to interface, however, many also accept anonymous ftp which requires an email. </p>  
<?php
	include PATH_INC . "footer_inc.php";
?>