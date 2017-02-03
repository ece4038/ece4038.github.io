<?php
	include "../assets/includes/page_start_inc.php";
  include PATH . "assets/php/functions.php";
  $title = "FAQ";
	$active = "faq";
	  $subnav = "1";
	include PATH_INC . "header_inc.php";
?>
<div id="faq">
<a href"#" class="question">Q1: What is UNIX?</a>
<ul class ="answer">
Unix is a portable operating system that is designed for both efficient multi-tasking and multi-user functions. Its portability allows it to run on different hardware platforms. It was written as C and lets users do processing and control under a shell.
</ul>
<br>
<a href"#" class="question">Q2: Is there a way to erase all files in the current directory, including all its sub-directories, using only one command?</a>
<ul class ="answer">
Yes, that is possible. Use “rm –r *” for this purpose. The rm command is for deleting files. The –r option will erase directories and subdirectories, including files within. The asterisk represents all entries.
</ul>
<br>

<a href"#" class="question">Q3: What is a directory?</a>
<ul class ="answer">
Every file is assigned to a directory. A directory is a specialized form of file that maintains a list of all files in it.
</ul>
<br>

<a href"#" class="question">Q4: What is the command for the absolute path to the current directory?</a>
<ul class ="answer">
pwd
</ul>
<br>
<a href"#" class="question">Q5: Where can I find a free SSH client for Windows?</a>
<ul class ="answer">
We recommend PuTTY. PuTTY can be downloaded using this link: <a href="http://www.putty.org/">Download PuTTY</a>
</ul>
<br>
<a href"#" class="question">Q6: How do I compress a file of a directory to a zip file?</a>
<ul class ="answer">
To Zip a directory, use the command:<br>
zip filename.zip directoryname/*
</ul>
<br>
<a href"#" class="question">Q7: When was the initial release date of Unix?</a>
<ul class ="answer">
November 3, 1971
</ul>
<br>
<a href"#" class="question">Q8: What is Bash?</a>
<ul class ="answer">
Bash is a Unix shell and command language.
</ul>
<br>
<a href"#" class="question">Q9: How do you connect to your server from a Mac?</a>
<ul class ="answer">
We recommend using Terminal. Once terminal is opened enter
ssh followed by the name of your server
</ul>
<br>
<a href"#" class="question">Q10: What are kernels?</a>
<ul class ="answer">
A kernel of UNIX is the hub of the operating system. It allocates time and meory to programs and handles the filestore and communications in response to system calls.
</ul>
<br>
</div>
<?php
	include PATH_INC . "footer_inc.php";
?>
<script src="<?= URL_JS; ?>faq.js" type="text/javascript"></script>
