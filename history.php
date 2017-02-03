<?php
	include "assets/includes/page_start_inc.php";
  include PATH . "assets/php/functions.php";
  $title = "History of Unix";
  	$active = "history";
  $subnav = "3";
	include PATH_INC . "header_inc.php";
?>
           <ol>
				<ul>
					<li>Unix - Previously known as Unics (UNiplexed Information and Computing), it originally began when AT&T Bell Labs, General Electric, and the Massachusetts Institute of Technology came together to create Multics.</li>
					<ul>
						<li>Multics - An influential time sharing operating machine that was released in 1969 and operated until 2000.</li>
					</ul>
					<li>AT&T Bell Labs broke off in order to redo the work on a smaller scale due to issues cooperating on timescale.</li>
					<ul>
						<li>Taking their research gained from Multics, Bell Labs constructed a smaller, simpler offshoot that they called Unics.</li>
						<li>Unics, which was soon renamed to Unix, is written entirely in C and meant to be highly modular. It has thousands of implementations and is used in computing systems around the world.</li>
						<li>The primary goals of Unix were ease of use and a set of well defined tools that performed their functions in a limited scope.</li>
					</ul>
              </ul>
            </li>
           </ol>
<?php
	include PATH_INC . "footer_inc.php";
?>