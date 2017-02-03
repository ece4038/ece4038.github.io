<?php
	include "../../assets/includes/page_start_inc.php";
  include PATH . "assets/php/functions.php";
  $title = "mv Command";
	$active = "mv";
  $subnav = "7";
	include PATH_INC . "header_inc.php";
?>
           <h3><strong>About mv</strong></h3>
           <p>Moves or renames a file.</p>
           <h3><strong>mv syntax</strong></h3>
           <blockquote>
             <p>mv [OPTION]...[SOURCE]...[DIRECTORY]</p>
             <p>mv [OPTION]...[SOURCE]...[DEST]</p>			 
           </blockquote>
           <h3><strong>Description</strong></h3>
			<p>Renames the file "SOURCE" to "DEST" or moves the "SOURCE" file to the specified directory. </p>	
<?php
	include PATH_INC . "footer_inc.php";
?>