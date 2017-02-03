<?php
	include "../assets/includes/page_start_inc.php";
  include PATH . "assets/php/functions.php";
  $title = "Matching";
	$active = "match";
  $subnav = "2";
	include PATH_INC . "header_inc.php";
?>
<script src="<?= URL_JS; ?>matching.js" type="text/javascript"></script>
<div class="matching">
            <div class="choices">
                <button id=1 class="1" onclick="checkChoice(this);"><span>ls</span></button>
                <button id=2 class="2" onclick="checkChoice(this);"><span>changes a directory</span></button>
                <button id=3 class="2" onclick="checkChoice(this);"><span>cd</span></button>
                <button id=4 class="3" onclick="checkChoice(this);"><span>makes a directory</span></button>
                <button id=5 class="4" onclick="checkChoice(this);"><span>mv</span></button>
                <button id=6 class="6" onclick="checkChoice(this);"><span>displays the manual</span></button>
                <button id=7 class="5" onclick="checkChoice(this);"><span>chmod</span></button>
                <button id=8 class="6" onclick="checkChoice(this);"><span>man</span></button>
                <button id=9 class="9" onclick="checkChoice(this);"><span>copies a file</span></button>
                <button id=10 class="7" onclick="checkChoice(this);"><span>rm</span></button>
                <button id=11 class="1" onclick="checkChoice(this);"><span>lists files in a directory</span></button>
                <button id=12 class="4" onclick="checkChoice(this);"><span>moves a file</span></button>
                <button id=13 class="8" onclick="checkChoice(this);"><span>rmdir</span></button>
                <button id=14 class="5" onclick="checkChoice(this);"><span>changes permissions</span></button>
                <button id=15 class="7" onclick="checkChoice(this);"><span>removes a file</span></button>
                <button id=16 class="8" onclick="checkChoice(this);"><span>removes a directory</span></button>
                <button id=17 class="9" onclick="checkChoice(this);"><span>cp</span></button>
                <button id=18 class="3" onclick="checkChoice(this);"><span>mkdir</span></button>
            </div>
        </div>

<?php
	include PATH_INC . "footer_inc.php";
?>