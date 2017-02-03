<?php
	include "../../assets/includes/page_start_inc.php";
  include PATH . "assets/php/functions.php";
  $title = "mkdir Command";
	$active = "mkdir";
  $subnav = "3";
	include PATH_INC . "header_inc.php";
?>
			<h3><strong>About mkdir</strong></h3>
			<p>Creates a directory.</p>
			<h3><strong>mkdir syntax</strong></h3>
           <blockquote>
             <p>mkdir [OPTION]...[DIRECTORY]...</p>
           </blockquote>
           <h3><strong>Description</strong></h3>
           <p>If the directory (folder) does not exist within the file system, mkdir creates it.</p>  
<?php
	include PATH_INC . "footer_inc.php";
?>