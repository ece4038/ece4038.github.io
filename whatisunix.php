<?php
	include "assets/includes/page_start_inc.php";
  include PATH . "assets/php/functions.php";
  $title = "Why Use Unix?";
  	$active = "whatisunix";
  $subnav = "2";
	include PATH_INC . "header_inc.php";
?>
           <ol>
            <li>What's the point of Unix?
				<ul>
					<li>Safer than Windows.</li>
					<ul>
						<li>Designed from the beginning for multiple users.</li>
						<li>Give and revoke user access to files and systems.</li>
						<li>Very few viruses written for Unix.</li>
					</ul>
					<li>Complete Control.</li>
					<ul>
						<li>Systems do exactly as you tell them with no extra processes.</li>
						<li>Completely transparent - all system and configuration files are easily readable.</li>
						<li>No hidden "features", all files are easily modifiable to remove unwanted processes.</li>
					</ul>
					<li>You Own Everything.</li>
					<ul>
						<li>GNU General Public License - No Restrictions</li>
						<li>System files are yours and only yours, freedom to do as you wish.</li>
						<li>Due to the General Public License, everything is modifiable without breaking any licensing</li>
					</ul>					
              </ul>
            </li>
           </ol>
<?php
	include PATH_INC . "footer_inc.php";
?>