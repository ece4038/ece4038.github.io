<?php
	include "../assets/includes/page_start_inc.php";
  include PATH . "assets/php/functions.php";
  $title = "Rudimentary Commands";
	$active = "rudimentary";
	include PATH_INC . "header_inc.php";
?>
            List of Rudimentary Commands:
            <ul>
              <li><a href="<?= URL;?>commands/rudimentary/ls.php">ls</a> - lists files in directory</li>
              <li><a href="<?= URL;?>commands/rudimentary/cd.php">cd</a> - changes directory</li>
              <li><a href="<?= URL;?>commands/rudimentary/mkdir.php">mkdir</a> - makes a directory</li>
              <li><a href="<?= URL;?>commands/rudimentary/rmdir.php">rmdir</a> - removes a directory</li>
              <li><a href="<?= URL;?>commands/rudimentary/cp.php">cp</a> - copies a file</li>
              <li><a href="<?= URL;?>commands/rudimentary/rm.php">rm</a> - removes a file</li>
              <li><a href="<?= URL;?>commands/rudimentary/mv.php">mv</a> - moves a file</li>
              <li><a href="<?= URL;?>commands/rudimentary/man.php">man</a> - displays the manual</li>
              <li><a href="<?= URL;?>commands/rudimentary/chmod.php">chmod</a> - changes permissions of file/directory</li>
            </ul>
<?php
	include PATH_INC . "footer_inc.php";
?>