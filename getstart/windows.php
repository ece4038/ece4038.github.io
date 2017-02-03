<?php
	include "../assets/includes/page_start_inc.php";
  include PATH . "assets/php/functions.php";
  $title = "Getting Started";
	$active = "getstart";
  $subnav = "1";
	include PATH_INC . "header_inc.php";
?>
           <ol>
           <h3>If on Windows, set up PuTTy, otherwise you can skip this step.</h3>
            <li>Download Putty from <a href="http://www.chiark.greenend.org.uk/~sgtatham/putty/download.html">here</a></li>
            <li>Launch the .exe file to start the program</li>
            <li>Select Session and enter the Host Name of your unix server. Port number should be 22 for SFTP</li>
            <li>Connection type should be set to SSH</li>
						<li>Click Open to start the SSH session</li>

            <li>Login using your name and password</li>
            </ol>

            <ol>
            	<h3>List Files</h3>
            	<li>Enter ls</li>
            	<li>This command will list all of the files and directories in the bare format</li>
            	<ul>
            		<li>Directories will not have have a file extension</li>
            		<li>Files will have a file extension</li>
            	<ul>
        	</ol>

        	<ol>
            	<h3>Change Working Directory</h3>
            	<li>Enter cd followed by the name of the directory that you want to enter</li>
            	<li>This command will change the working directory</li>
        	</ol>

        	<ol>
            	<h3>Print Working Directory</h3>
            	<li>Enter pwd</li>
            	<li>This command will print the full pathname of the current working directory</li>
        	</ol>

        	<ol>
            	<h3>Make a Directory</h3>
            	<li>Enter mkdir followed by the name directory that you want to create</li>
            	<li>This command will make a new directory</li>
        	</ol>

            <ol>
            	<h3>Go to Parent Directory</h3>
            	<li>Enter cd.. </li>
            	<li>This command will return you to the parent directory</li>
        	</ol>

            <ol>
            	<h3>Go to Home Directory</h3>
            	<li>Enter cd </li>
            	<li>This command will return you to your home directory</li>
        	</ol>
<?php
	include PATH_INC . "footer_inc.php";
?>
