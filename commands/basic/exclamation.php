<?php
	include "../../assets/includes/page_start_inc.php";
  include PATH . "assets/php/functions.php";
  $title = "!! Command";
	$active = "exclamation";
  $subnav = "12";
	include PATH_INC . "header_inc.php";
?>
			<h3><strong>About !!</strong></h3>
			<p>Echo's the previous command.</p>
			<h3><strong>!! syntax</strong></h3>
           <blockquote>
             <p>[COMMAND] !!</p>
           </blockquote>
           <h3><strong>Description</strong></h3>
           <p>Takes the previous command and reruns it. Instead of typing the parameters of the command you had previously run, you can simply type [COMMAND]!!.</p>  
<?php
	include PATH_INC . "footer_inc.php";
?>