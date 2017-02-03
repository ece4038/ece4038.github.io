<?php
	include "../assets/includes/page_start_inc.php";
  include PATH . "assets/php/functions.php";
  $title = "Quiz";
	$active = "quiz";
  $subnav = "1";
	include PATH_INC . "header_inc.php";
?>
<button id="newGame" onclick="newGame();">New Game</button>

<p>Choose your difficulty:
  <button onclick="changeDiff(this);">Rudimentary</button>
  <button onclick="changeDiff(this);">Basic</button>
  <button onclick="changeDiff(this);">Advanced</button>
</p>

<div id="content">
  <div id="game1"></div>
  <div id="game2"></div>
</div>
<?php
	include PATH_INC . "footer_inc.php";
?>
