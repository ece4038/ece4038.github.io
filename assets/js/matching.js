var choice1,
    choice2,
    choicesNum,
    matchesFound = 0,
    currentChosen = 0,
    originalBackground = "linear-gradient(to bottom, #e8edf0, #b8b9ba)";

function checkChoice(choice) { 
    if (currentChosen === 0) {
        currentChosen++;
        
        choice.style.background = "#dfef94";
        choice.childNodes[0].style.display="inherit";
        choice1 = choice;
    } else if (currentChosen === 1)  {
        currentChosen++;
        
        choice2 = choice;
        
        choice.style.background = "#dfef94";
        choice.childNodes[0].style.display="inherit";
        
        if (choice1.className != choice2.className) {
            
        } else if (choice1.className === choice2.className && choice1.id != choice2.id ) {
            currentChosen = 0;
            choice1.disabled = true;
            choice2.disabled = true;
            choice1.style.background = "#abef94";
            choice2.style.background = "#abef94";
            
            matchesFound++;
        }
    } else if (currentChosen === 2) {
        choice1.style.background = originalBackground;
        choice1.childNodes[0].style.display = "none";
        choice2.style.background = originalBackground;
        choice2.childNodes[0].style.display = "none";
        
        currentChosen = 1;
        choice.style.background = "#dfef94";
        choice.childNodes[0].style.display="inherit";
        choice1 = choice;
    }
    
}