<?php
	include "../../assets/includes/page_start_inc.php";
  include PATH . "assets/php/functions.php";
  $title = "man Command";
	$active = "man";
  $subnav = "8";
	include PATH_INC . "header_inc.php";
?>
			<h3><strong>About man</strong></h3>
			<p>Displays the systems reference manual.</p>
			<h3><strong>man syntax</strong></h3>
           <blockquote>
             <p>man [OPTION]...[COMMAND]</p>
             <p>man [OPTION]</p>
             <p>man </p>
           </blockquote>
           <h3><strong>Description</strong></h3>
           <p>Displays pages of the systems internal manual if an argument is specified, or simply instructions and a list of commands.</p>  
<?php
	include PATH_INC . "footer_inc.php";
?>