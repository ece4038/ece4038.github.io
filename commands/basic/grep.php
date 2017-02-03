<?php
	include "../../assets/includes/page_start_inc.php";
  include PATH . "assets/php/functions.php";
  $title = "grep Command";
	$active = "grep";
  $subnav = "1";
	include PATH_INC . "header_inc.php";
?>
			<h3><strong>About grep</strong></h3>
			<p>Prints text matching a specified pattern.</p>
			<h3><strong>grep syntax</strong></h3>
           <blockquote>
             <p>grep [OPTIONS]...[PATTERN]...[FILE]</p>
           </blockquote>
           <h3><strong>Description</strong></h3>
           <p>Tool for matching a regular expression against text in an input stream or files.</p>  
<?php
	include PATH_INC . "footer_inc.php";
?>