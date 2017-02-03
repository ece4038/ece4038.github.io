<?php
	include "../../assets/includes/page_start_inc.php";
  include PATH . "assets/php/functions.php";
  $title = "gzip Command";
	$active = "gzip";
  $subnav = "2";
	include PATH_INC . "header_inc.php";
?>
			<h3><strong>About gzip</strong></h3>
			<p>Compresses and decompresses files.</p>
			<h3><strong>gzip syntax</strong></h3>
           <blockquote>
             <p>gzip [OPTION]...[OPTION]...[NAME]</p>
           </blockquote>
           <h3><strong>Description</strong></h3>
           <p>Used to compress/decompress files. Has the ability to do this to more than one file at a time. New file will have a ".gz" extension.  
</p>  
<?php
	include PATH_INC . "footer_inc.php";
?>