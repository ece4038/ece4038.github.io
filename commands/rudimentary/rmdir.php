<?php
	include "../../assets/includes/page_start_inc.php";
  include PATH . "assets/php/functions.php";
  $title = "rmdir Command";
	$active = "rmdir";
  $subnav = "4";
	include PATH_INC . "header_inc.php";
?>
			<h3><strong>About rmdir</strong></h3>
			<p>Removes a directory.</p>
			<h3><strong>rmdir syntax</strong></h3>
           <blockquote>
             <p>rmdir [OPTION]...[DIRECTORY]...</p>
           </blockquote>
           <h3><strong>Description</strong></h3>
           <p>Removes the directory from the file system. If trying to remove a directory with children, the children directories must be removed first.</p>  
<?php
	include PATH_INC . "footer_inc.php";
?>