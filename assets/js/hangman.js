String.prototype.replaceAt=function(index, character) {
    return this.substr(0, index) + character + this.substr(index+character.length);
}

var alphabet = 'abcdefghijklmnopqrstuvwxyz'.toUpperCase().split('');
var answer = "MKDIR";
var description = "Creates a directory"
var result = "";
var HTMLdescription = document.getElementById("description");
var HTMLresult = document.getElementById("result").children[0];
var currentWrong = 0;
var HTMLcurrentWrong = document.getElementById("currentMan");
var currentSet = "r";
var currentWord = 0;

var images = [];

var rudimentaryWord = ["MKDIR", "LS", "RMDIR", "CP", "RM", "MV", "MAN", "CHMOD", "CD"],
    rudimentaryDesc = ["Creates a directory", 
                       "Lists files in directory", 
                       "Removes a directory", 
                       "Copies a file", 
                       "Removes a file", 
                       "Moves a file", 
                       "Displays the manual", 
                       "Changes the permissions of file/directory",
                       "Changes directory"];

var basicWord = ["GREP", "GZIP", "MAIL", "KILL", "PASSWD", "TELNET", "FTP", "CAT", "LOCATE", "CTRLC", "CTRLZ", "!!", "TR"],
    basicDesc = ["Searches plain-text and prints lines matching a specified pattern", 
                 "Compress or expand files", 
                 "Send and receive mail",
                 "Kills a specified process", 
                 "Change a password of a user account", 
                 "User interface to the TELNET protocol", 
                 "Copy a file from one computer to another over internet/LAN", 
                 "Reads data from files and outputs their contents", 
                 "Finds files by name", 
                 "Kills a process", 
                 "Suspends a process", 
                 "Repeats previous command",  
                 "Translates one set of characters to another"];

var advancedWord = ["WHO", "FINGER", "MAKE", "DPKG", "RPM"],
    advancedDesc = ["Displays users currently logged onto the system", 
                    "Displays information about system users", 
                    "Utility for building and maintaining groups of programs", 
                    "Package manager for debian", 
                    "Package manager for 'Red Hat' based systems"];



images[0] = new Image();
images[0].src = "../assets/images/0wrong.png";
images[1] = new Image();
images[1].src = "../assets/images/1wrong.png";
images[2] = new Image();
images[2].src = "../assets/images/2wrong.png";
images[3] = new Image();
images[3].src = "../assets/images/3wrong.png";
images[4] = new Image();
images[4].src = "../assets/images/4wrong.png";
images[5] = new Image();
images[5].src = "../assets/images/5wrong.png";
images[6] = new Image();
images[6].src = "../assets/images/6wrong.png";

for (var i = 0; i < answer.length; i++) {
    result += "_ ";
}

HTMLdescription.innerHTML = description;
HTMLresult.innerHTML = result;
HTMLcurrentWrong.innerHTML = currentWrong; 

function newGame() {
    document.getElementById("winLoss").innerHTML = "";
    var letters = document.getElementById("letters");
    while (letters.firstChild) {
        letters.removeChild(letters.firstChild);
    }
    var length = 0;
    if (currentSet === "r") {
        length = rudimentaryWord.length;
        currentWord++;
        if( currentWord === length) {
            currentWord = 0;
        }
        answer = rudimentaryWord[currentWord];
        description = rudimentaryDesc[currentWord];
    } else if (currentSet === "b") {
        length = basicWord.length;
        currentWord++;
        if( currentWord === length) {
            currentWord = 0;
        }
        answer = basicWord[currentWord];
        description = basicDesc[currentWord];
    } else if (currentSet === "a") {
        length = advancedWord.length;
        currentWord++;
        if( currentWord === length) {
            currentWord = 0;
        }
        answer = advancedWord[currentWord];
        description = advancedDesc[currentWord];
    }
    
    result = "";
    for (var i = 0; i < answer.length; i++) {
        result += "_ ";
    }
    HTMLdescription.innerHTML = description;
    generateLetters();
    currentWrong = 0;
    displayCurrentStatus();
}

function generateLetters() {
    var letters = document.getElementById("letters");
    
    for (var i = 0; i < alphabet.length; i++) {
        
        var letter = document.createElement("BUTTON");
        var t = document.createTextNode(alphabet[i]);
        letter.appendChild(t);
        letter.className = "letter";
        letter.id = alphabet[i];
        letter.addEventListener("click", function () {
            sumbitLetter(this);
        });
        
        letters.appendChild(letter);                    
    }
}

function changeDiff(diff) {
    if (diff.innerText === "Rudimentary") {
        currentSet = "r"
    } else if (diff.innerText === "Basic") {
        currentSet = "b";
    } else if (diff.innerText === "Advanced") {
        currentSet = "a";
    }
    console.log(currentSet);
    currentWord = 0;
    newGame();
}

function sumbitLetter(letter) {
    
    letter.disabled = "disabled";
    
    if (answer.includes(letter.id)) {
        for (var i = 0; i < answer.length; i++) {
            if (letter.id === answer.charAt(i)) {
                result = result.replaceAt(2*i, letter.id);
            }
        }
    }
    else {
        currentWrong++;
    }
    
    checkWonLost();
    displayCurrentStatus();
}

function checkWonLost() {
    if (!result.includes("_")) {
        document.getElementById("winLoss").innerHTML = "You Won";
        for (var i = 0; i < alphabet.length; i++) {
            document.getElementById("letters").children[i].disabled = "disabled";
        }
    }
    else if (currentWrong === 6) {
        document.getElementById("winLoss").innerHTML = "You Lost";
        for (var i = 0; i < alphabet.length; i++) {
            document.getElementById("letters").children[i].disabled = "disabled";
        }
    }
}

function displayCurrentStatus() {
    HTMLresult.innerHTML = result;
    
    HTMLcurrentWrong.src = images[currentWrong].src;

}

displayCurrentStatus();
generateLetters();