<?php
	include "../../assets/includes/page_start_inc.php";
  include PATH . "assets/php/functions.php";
  $title = "tr Command";
	$active = "tr";
  $subnav = "13";
	include PATH_INC . "header_inc.php";
?>
			<h3><strong>About tr</strong></h3>
			<p>Translates one set of characters for another.</p>
			<h3><strong>tr syntax</strong></h3>
           <blockquote>
             <p>tr [OPTION]...[SOURCE1]...[SOURCE2]</p>
           </blockquote>
           <h3><strong>Description</strong></h3>
           <p>Takes [SOURCE1] and replaces all instances of it with [SOURCE2].</p>  
<?php
	include PATH_INC . "footer_inc.php";
?>