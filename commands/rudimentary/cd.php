<?php
	include "../../assets/includes/page_start_inc.php";
  include PATH . "assets/php/functions.php";
  $title = "cd Command";
	$active = "cd";
  $subnav = "2";
	include PATH_INC . "header_inc.php";
?>
			<h3><strong>About cd</strong></h3>
			<p>Changes your current directory.</p>
			<h3><strong>cd syntax</strong></h3>
           <blockquote>
             <p>cd [DIRECTORY]</p>
           </blockquote>
           <h3><strong>Description</strong></h3>
           <p>Changes the directory you are currently working in. It is what you will use to navigate the file system.</p>  
<?php
	include PATH_INC . "footer_inc.php";
?>