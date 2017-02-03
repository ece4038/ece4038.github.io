<?php
	include "../../assets/includes/page_start_inc.php";
  include PATH . "assets/php/functions.php";
  $title = "Ctrl Commands";
	$active = "ctrlpage";
  $subnav = "6";
	include PATH_INC . "header_inc.php";
?>
			<h3><strong>List of command line CTRL Commands</strong></h3>
			<p>Changes your current directory.</p>
			<h3><strong>Command List: </strong></h3>
           <blockquote>
				<ul>	
				<li><p>CTRL+D - Logs out of current session</p></li>
				<li><p>CTRL+W - Erases one word in current line</p></li>
				<li><p>CTRL+U - Erases the entire line</p></li>
           </blockquote>
           <h3><strong>Description</strong></h3>
           <p>These CTRL commands allow for easy manipulation of the command line along with fast log outs.</p>  
<?php
	include PATH_INC . "footer_inc.php";
?>