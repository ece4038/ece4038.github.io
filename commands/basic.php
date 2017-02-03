<?php
	include "../assets/includes/page_start_inc.php";
  include PATH . "assets/php/functions.php";
  $title = "Basic Commands";
	$active = "basic";
	include PATH_INC . "header_inc.php";
?>
            List of Basic Commands:
            <ul>
              <li><a href="<?= URL;?>commands/basic/grep.php">grep</a> - searchs plain-text and prints lines matching a specified pattern.</li>
              <li><a href="<?= URL;?>commands/basic/gzip.php">gzip</a> - compress or expand files</li>
              <li><a href="<?= URL;?>commands/basic/mail.php">mail</a> - send and receive mail</li>
              <li><a href="<?= URL;?>commands/basic/kill.php">kill</a> - kills a specified process</li>
              <li><a href="<?= URL;?>commands/basic/passwd.php">passwd</a> - change a password of a user account</li>
              <li><a href="<?= URL;?>commands/basic/telnet.php">telnet</a> - user interface to the TELNET protocol</li>
              <li><a href="<?= URL;?>commands/basic/ftp.php">ftp</a> - copy a file from one computer to another over internet/LAN</li>
              <li><a href="<?= URL;?>commands/basic/cat.php">cat</a> - reads data from files and outputs their contents</li>
              <li><a href="<?= URL;?>commands/basic/locate.php">locate</a> - finds files by name</li><li><a href="<?= URL;?>commands/basic/ctrlc.php">Ctrl - C</a> - kills a process</li><li><a href="<?= URL;?>commands/basic/ctrlz.php">Ctrl - Z</a> - suspends a process</li><li><a href="<?= URL;?>commands/basic/exclamation.php">!!</a> - repeats previous command</li><li><a href="<?= URL;?>commands/basic/tr.php">tr</a> - translates one set of characters to another</li>
            </ul>
<?php
	include PATH_INC . "footer_inc.php";
?>