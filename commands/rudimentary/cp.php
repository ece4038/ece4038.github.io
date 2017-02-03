<?php
	include "../../assets/includes/page_start_inc.php";
  include PATH . "assets/php/functions.php";
  $title = "cp Command";
	$active = "cp";
  $subnav = "5";
	include PATH_INC . "header_inc.php";
?>
			<h3><strong>About cp</strong></h3>
			<p>Copies a file/directory.</p>
			<h3><strong>cp syntax</strong></h3>
           <blockquote>
             <p>cp [OPTION]...[SOURCE]...[DEST]</p>
           </blockquote>
           <h3><strong>Description</strong></h3>
           <p>Makes a duplicate of the "SOURCE" and names it "DEST".</p>  
<?php
	include PATH_INC . "footer_inc.php";
?>