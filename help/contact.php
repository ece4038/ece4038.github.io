<?php
  include "../assets/includes/page_start_inc.php";
  include PATH . "assets/php/functions.php";
  $title = "Contact Us";
  $active = "contact";
    $subnav = "2";
  include PATH_INC . "header_inc.php";
?> 
<form action="email.php" onsubmit="return FormValidation();" onchange="return FormValidation();"method="post">
Name:<br>
<input type="text" name="name" placeholder="Enter Full Name..." id="name" required="" >
<br>
Email:<br>
<input type="text" name="email" placeholder="Email..." id="email" required="">
<br>
Subject:<br>
<input type="text" name="subject" placeholder="Subject..." id="subject" required="">
<br>
Message:<br>
<textarea name="message" placeholder="Message..." id="message" required=""></textarea>
<br>
<button type="submit">Send message</button>
</form> 
<?php
	include PATH_INC . "footer_inc.php";
?>
<script src="<?= URL_JS; ?>email.js"></script>
