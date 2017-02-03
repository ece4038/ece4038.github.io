<?php
	include "../../assets/includes/page_start_inc.php";
  include PATH . "assets/php/functions.php";
  $title = "make Command";
	$active = "make";
  $subnav = "3";
	include PATH_INC . "header_inc.php";
?>
			<h3><strong>About make</strong></h3>
			<p>Utility for building and maintaining groups of programs.</p>
			<h3><strong>make syntax</strong></h3>
           <blockquote>
             <p>make [OPTION]...[TARGETS]...</p>
           </blockquote>
           <h3><strong>Description</strong></h3>
           <p>The make utility is used to automatically decide what pieces of a large program need to be recompiled. It is meant to reduce load on the system.</p>  
<?php
	include PATH_INC . "footer_inc.php";
?>