<?php
	include "../assets/includes/page_start_inc.php";
  include PATH . "assets/php/functions.php";
  $title = "Advanced Commands";
	$active = "advanced";
	include PATH_INC . "header_inc.php";
?>
            List of Advanced Commands:
            <ul>
              <li><a href="<?= URL;?>commands/advanced/who.php">who</a> - displays users currently logged onto the system</li>
              <li><a href="<?= URL;?>commands/advanced/finger.php">finger</a> - displays information about system users</li>
              <li><a href="<?= URL;?>commands/advanced/make.php">make</a> - utility for building and maintaining groups of programs</li>
              <li><a href="<?= URL;?>commands/advanced/dpkg.php">dpkg</a> - package manager for debian</li>
              <li><a href="<?= URL;?>commands/advanced/rpm.php">rpm</a> - package manager for "Red Hat" based systems</li>
              <li><a href="<?= URL;?>commands/advanced/ctrlpage.php">Ctrl Page</a> - list of commands using the Ctrl button</li>
            </ul>
<?php
	include PATH_INC . "footer_inc.php";
?>