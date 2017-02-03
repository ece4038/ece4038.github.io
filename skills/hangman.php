<?php
	include "../assets/includes/page_start_inc.php";
  include PATH . "assets/php/functions.php";
  $title = "Hangman";
	$active = "hangman";
  $subnav = "3";
	include PATH_INC . "header_inc.php";
?>
            <div id="hangman">
                <div id="info">
                    <h2>Description: </h2>
                    <p id="description"></p>
                </div>
                <div id="result">
                  <h1></h1>
                </div>
                <img src="<?= URL; ?>assets/images/0wrong.png" id="currentMan" class="img-responsive">
                <br/>
                <div id="guesses"><span>Letters</span>
                    <div id="letters">
                         
                    </div>
                </div>
            </div>
            <div>
                <h2 id="winLoss"></h2>
                <br/>
                <button id="newGame" onclick="newGame();">New Game</button>
                <br/>
                <br/>
                <span>Difficulty</span>
                <br/>
                <button onclick="changeDiff(this);">Rudimentary</button>
                <br/>
                <button onclick="changeDiff(this);">Basic</button>
                <br/>
                <button onclick="changeDiff(this);">Advanced</button>
            </div>
		<script src="<?= URL_JS; ?>hangman.js" type="text/javascript"></script>
    
<?php
	include PATH_INC . "footer_inc.php";
?>