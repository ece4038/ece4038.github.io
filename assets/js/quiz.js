var questionNumber = 0;
var questionBank = [];
var stage = "#game1";
var stage2 = Object.create(null);
var questionLock = false;
var numberOfQuestions;
var score = 0;var path = "http://kelvin.ist.rit.edu/~polarbears/assets/js/quiz";
var quiz = path + "rudi.json";
var finSlide = false;

function displayFinalSlide(){
  $(stage).append("<h2>You have finished the quiz!</h2><p>Total questions: " + numberOfQuestions + "</p><p>Correct answers: " + score + "</p>");
  finSlide = true;
}//display final slide

function changeQuestion(){

  questionNumber += 1;

  if(stage === "#game1"){
    stage2 = "#game1";
    stage = "#game2";
  }
  else{
    stage2 = "#game2";
    stage = "#game1";
  }

  if(questionNumber < numberOfQuestions){
    displayQuestion();
  }
  else{
    displayFinalSlide();
  }
  
  if (finSlide){
    $("game1").css("right", "800px")
    $("game2").css("right", "-800px")
  }
  
  $(stage2).animate({"right": "+=800px"},500, function() {$(stage2).css("right","-800px");$(stage2).empty();});
  $(stage).animate({"right": "+=800px"},500, function() {questionLock=false;});
}//change question

function displayQuestion(){
  var rnd = Math.ceil(Math.random()*4);
  var option1;
  var option2;
  var option3;
  var option4;

  if(rnd === 1){
    option1 = questionBank[questionNumber][1];
    option2 = questionBank[questionNumber][2];
    option3 = questionBank[questionNumber][3];
    option4 = questionBank[questionNumber][4];
  }
  if(rnd === 2){
    option1 = questionBank[questionNumber][4];
    option2 = questionBank[questionNumber][1];
    option3 = questionBank[questionNumber][2];
    option4 = questionBank[questionNumber][3];
  }
  if(rnd === 3){
    option1 = questionBank[questionNumber][3];
    option2 = questionBank[questionNumber][4];
    option3 = questionBank[questionNumber][1];
    option4 = questionBank[questionNumber][2];
  }
  if(rnd === 4){
    option1 = questionBank[questionNumber][2];
    option2 = questionBank[questionNumber][3];
    option3 = questionBank[questionNumber][4];
    option4 = questionBank[questionNumber][1];
  }
  $(stage).append("<h2>" + questionBank[questionNumber][0] + "</h2><div id='1' class='option'>" + option1 + "</div><div id='2' class='option'>" + option2 + "</div><div id='3' class='option'>" + option3 + "</div><div id='4' class='option'>" + option4 + "</div>");

  $(".option").click(function(){
  if(questionLock === false){
    questionLock = true;

    //correct answer
    if(this.id == rnd){
      $(stage).append("<div class='feedback1'>CORRECT</div>");
      score += 1;
    }

    //wrong answer
    if(this.id != rnd){
      $(stage).append("<div class='feedback2'>WRONG</div>");
    }

  setTimeout(function(){changeQuestion()},500);
  }})
}//display question
function beginQuiz(){
  $.getJSON(quiz, function (data) {
    for (i = 0; i < data.quiz.length; i++){
      questionBank[i] = [];
      questionBank[i][0] = data.quiz[i].question;
      questionBank[i][1] = data.quiz[i].option1;
      questionBank[i][2] = data.quiz[i].option2;
      questionBank[i][3] = data.quiz[i].option3;
      questionBank[i][4] = data.quiz[i].option4;
    }
    numberOfQuestions = questionBank.length;

    displayQuestion();
  })//getjson
}

function newGame(){
  if (finSlide){
    changeQuestion();
    finSlide = false;
  }
  
  questionNumber = 0;
  questionBank = [];
  stage = "#game1";
  stage2 = "#game2";
  questionLock = false;
  numberOfQuestions = 0;
  score = 0;
  
  $("#game1").empty();
  $("#game2").empty();
  
  beginQuiz();
}

function changeDiff(diff) {
  if (diff.innerText === "Rudimentary") {
      quiz = path + "rudi.json"
  } else if (diff.innerText === "Basic") {
      quiz = path + "basic.json";
  } else if (diff.innerText === "Advanced") {
      quiz = path + "adv.json";
  }
  
  newGame();
}

beginQuiz();