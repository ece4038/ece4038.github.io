<?php
	function subnav_options($active, $subnav = "0"){
    if ($active =="home" || $active =="whatisunix" || $active =="history"){
      $output = "<a href='" . URL . "index.php' class='list-group-item" . ($subnav =="1" ? " active" : "") . "'>Introduction</a>" .
                "<a href='" . URL . "whatisunix.php' class='list-group-item" . ($subnav =="2" ? " active" : "") . "'>What is Unix?</a>" .
                "<a href='" . URL . "history.php' class='list-group-item" . ($subnav =="3" ? " active" : "") . "'>History</a>";
    }
    elseif ($active =="windows" || $active =="linux" || $active =="mac"){
      $output = "<a href='" . URL . "getstart/windows.php' class='list-group-item" . ($subnav =="1" ? " active" : "") . "'>Windows</a>";
    }
    elseif ($active =="rudimentary" || $active =="ls" || $active =="cd" || $active =="mkdir" || $active =="rmdir" || $active =="cp" || $active =="rm" || $active =="mv" || $active =="man" || $active =="chmod"){
      $output = "<a href='" . URL . "commands/rudimentary/ls.php' class='list-group-item" . ($subnav =="1" ? " active" : "") . "'>ls</a>" .
                "<a href='" . URL . "commands/rudimentary/cd.php' class='list-group-item" . ($subnav =="2" ? " active" : "") . "'>cd</a>" .
                "<a href='" . URL . "commands/rudimentary/mkdir.php' class='list-group-item" . ($subnav =="3" ? " active" : "") . "'>mkdir</a>" .
                "<a href='" . URL . "commands/rudimentary/rmdir.php' class='list-group-item" . ($subnav =="4" ? " active" : "") . "'>rmdir</a>" .
                "<a href='" . URL . "commands/rudimentary/cp.php' class='list-group-item" . ($subnav =="5" ? " active" : "") . "'>cp</a>" .
                "<a href='" . URL . "commands/rudimentary/rm.php' class='list-group-item" . ($subnav =="6" ? " active" : "") . "'>rm</a>" .
                "<a href='" . URL . "commands/rudimentary/mv.php' class='list-group-item" . ($subnav =="7" ? " active" : "") . "'>mv</a>" .
                "<a href='" . URL . "commands/rudimentary/man.php' class='list-group-item" . ($subnav =="8" ? " active" : "") . "'>man</a>" .
                "<a href='" . URL . "commands/rudimentary/chmod.php' class='list-group-item" . ($subnav =="9" ? " active" : "") . "'>chmod</a>";
    }
    elseif ($active =="basic" || $active =="grep" || $active =="gzip" || $active =="mail" || $active =="kill" || $active =="passwd" || $active =="telnet" || $active =="ftp" || $active =="cat" || $active =="locate" || $active =="ctrlc" || $active =="ctrlz" || $active =="exclamation" || $active =="tr"){
      $output = "<a href='" . URL . "commands/basic/grep.php' class='list-group-item" . ($subnav =="1" ? " active" : "") . "'>grep</a>" .
                "<a href='" . URL . "commands/basic/gzip.php' class='list-group-item" . ($subnav =="2" ? " active" : "") . "'>gzip</a>" .
                "<a href='" . URL . "commands/basic/mail.php' class='list-group-item" . ($subnav =="3" ? " active" : "") . "'>mail</a>" .
                "<a href='" . URL . "commands/basic/kill.php' class='list-group-item" . ($subnav =="4" ? " active" : "") . "'>kill</a>" .
                "<a href='" . URL . "commands/basic/passwd.php' class='list-group-item" . ($subnav =="5" ? " active" : "") . "'>passwd</a>" .
                "<a href='" . URL . "commands/basic/telnet.php' class='list-group-item" . ($subnav =="6" ? " active" : "") . "'>telnet</a>" .
                "<a href='" . URL . "commands/basic/ftp.php' class='list-group-item" . ($subnav =="7" ? " active" : "") . "'>ftp</a>" .
                "<a href='" . URL . "commands/basic/cat.php' class='list-group-item" . ($subnav =="8" ? " active" : "") . "'>cat</a>" .
                "<a href='" . URL . "commands/basic/locate.php' class='list-group-item" . ($subnav =="9" ? " active" : "") . "'>locate</a>" .
                "<a href='" . URL . "commands/basic/ctrlc.php' class='list-group-item" . ($subnav =="10" ? " active" : "") . "'>Ctrl - C</a>" .
                "<a href='" . URL . "commands/basic/ctrlz.php' class='list-group-item" . ($subnav =="11" ? " active" : "") . "'>Ctrl - Z</a>" .
                "<a href='" . URL . "commands/basic/exclamation.php' class='list-group-item" . ($subnav =="12" ? " active" : "") . "'>!!</a>" .
                "<a href='" . URL . "commands/basic/tr.php' class='list-group-item" . ($subnav =="13" ? " active" : "") . "'>tr</a>";
    }
    elseif ($active =="advanced" || $active =="who" || $active =="finger" || $active =="make" || $active =="dpkg" || $active =="rpm" || $active =="ctrlpage"){
      $output = "<a href='" . URL . "commands/advanced/who.php' class='list-group-item" . ($subnav =="1" ? " active" : "") . "'>who</a>" .
                "<a href='" . URL . "commands/advanced/finger.php' class='list-group-item" . ($subnav =="2" ? " active" : "") . "'>finger</a>" .
                "<a href='" . URL . "commands/advanced/make.php' class='list-group-item" . ($subnav =="3" ? " active" : "") . "'>make</a>" .
                "<a href='" . URL . "commands/advanced/dpkg.php' class='list-group-item" . ($subnav =="4" ? " active" : "") . "'>dpkg</a>" .
                "<a href='" . URL . "commands/advanced/rpm.php' class='list-group-item" . ($subnav =="5" ? " active" : "") . "'>rpm</a>" .
                "<a href='" . URL . "commands/advanced/ctrlpage.php' class='list-group-item" . ($subnav =="6" ? " active" : "") . "'>Ctrl Page</a>";
    }
    elseif ($active =="quiz" || $active =="match" || $active =="hangman"){
      $output = "<a href='" . URL . "skills/quiz.php' class='list-group-item" . ($subnav =="1" ? " active" : "") . "'>Quiz</a>" .
                "<a href='" . URL . "skills/match.php' class='list-group-item" . ($subnav =="2" ? " active" : "") . "'>Matching</a>" .
                "<a href='" . URL . "skills/hangman.php' class='list-group-item" . ($subnav =="3" ? " active" : "") . "'>Hangman</a>";
    }
    elseif ($active =="faq" || $active =="contact" ){
      $output = "<a href='" . URL . "help/faq.php' class='list-group-item" . ($subnav =="1" ? " active" : "") . "'>FAQ</a>" .
                "<a href='" . URL . "help/contact.php' class='list-group-item" . ($subnav =="2" ? " active" : "") . "'>Contact Us</a>";
    }
		return $output;
	}
?>
