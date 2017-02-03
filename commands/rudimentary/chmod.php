<?php
	include "../../assets/includes/page_start_inc.php";
  include PATH . "assets/php/functions.php";
  $title = "chmod Command";
	$active = "chmod";
  $subnav = "9";
	include PATH_INC . "header_inc.php";
?>
			<h3><strong>About chmod</strong></h3>
			<p>Changes permissions of a file or directory.</p>
			<h3><strong>chmod syntax</strong></h3>
           <blockquote>
             <p>chmod [OPTION]...[PERMISSIONS]...[FILENAME/DIRECTORY]...</p>
           </blockquote>
           <h3><strong>Description</strong></h3>
           <p>chmod (stands for change mode) is used to dictate the way a file can be accessed via file permissions.</p>  
<?php
	include PATH_INC . "footer_inc.php";
?>