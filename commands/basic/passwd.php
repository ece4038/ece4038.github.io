<?php
	include "../../assets/includes/page_start_inc.php";
  include PATH . "assets/php/functions.php";
  $title = "passwd Command";
	$active = "passwd";
  $subnav = "5";
	include PATH_INC . "header_inc.php";
?>
			<h3><strong>About passwd</strong></h3>
			<p>Changes a user's password.</p>
			<h3><strong>passwd syntax</strong></h3>
           <blockquote>
             <p>passwd [OPTION]...[USER]</p>
           </blockquote>
           <h3><strong>Description</strong></h3>
           <p>Used to change the password of a user's account. A normal user can run passwd to change their own password, however, only an an administrator can change others passwords.</p>  
<?php
	include PATH_INC . "footer_inc.php";
?>