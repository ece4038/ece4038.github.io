<?php
	include "../../assets/includes/page_start_inc.php";
  include PATH . "assets/php/functions.php";
  $title = "cat Command";
	$active = "cat";
  $subnav = "8";
	include PATH_INC . "header_inc.php";
?>
			<h3><strong>About cat</strong></h3>
			<p>Reads data from files and outputs their contents.</p>
			<h3><strong>cat syntax</strong></h3>
           <blockquote>
             <p>cat [FILENAME]</p>
           </blockquote>
           <h3><strong>Description</strong></h3>
           <p>cat stands for catenate and is used for displaying text files, copying text files, and appending text files. Most commonly however, it reads text from a file and prints it to the screen.</p>  
<?php
	include PATH_INC . "footer_inc.php";
?>