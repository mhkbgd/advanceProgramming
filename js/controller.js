$(document).ready(function () {
	
	var questionNumber=0;
	var questionBank=new Array();
	var stage="#game1";
	var stage2=new Object;
	var questionLock=false;
	var numberOfQuestions;
	var score=0;
	var c = 0;
	var t;
	var timer_is_on = 0;
	var number_of_attempt=0;

	function timedCount() {
	    document.getElementById("txt").value = c;
	    c = c + 1;
	    t = setTimeout(function(){ timedCount() }, 1000);
	}

	if (!timer_is_on) {
		timer_is_on = 1;
		timedCount();
	}


	function stopCount() {
	    clearTimeout(t);
	    timer_is_on = 0;
	}
	 
	$.getJSON('ajaxResponse.php?patient_id=1', function(data) {

		for(i=0;i<data.quizlist.length;i++){ 
			questionBank[i]=new Array;
			questionBank[i][0]=data.quizlist[i].image_location;
			questionBank[i][1]=data.quizlist[i].answer;
			questionBank[i][2]=data.quizlist[i].option1;
			questionBank[i][3]=data.quizlist[i].option2;
		}
		numberOfQuestions=questionBank.length; 

		 
		displayQuestion();
	})//gtjson
	 

	function displayQuestion(){
	 	var rnd=Math.random()*3;
		rnd=Math.ceil(rnd);
		var q1;
		var q2;
		var q3;

		if(rnd==1){
			q1=questionBank[questionNumber][1];
			q2=questionBank[questionNumber][2];
			q3=questionBank[questionNumber][3];
		}
		if(rnd==2){
			q2=questionBank[questionNumber][1];
			q3=questionBank[questionNumber][2];
			q1=questionBank[questionNumber][3];}
		
		if(rnd==3){
			q3=questionBank[questionNumber][1];
			q1=questionBank[questionNumber][2];
			q2=questionBank[questionNumber][3];
		}

		$(stage).append('<div class="questionText">'+'<img src="'+questionBank[questionNumber][0]+'" height="180px">'+'</div><div id="1" class="option">'+q1+'</div><div id="2" class="option">'+q2+'</div><div id="3" class="option">'+q3+'</div>');

		 $('.option').click(function(){
		  if(questionLock==false){questionLock=true;	
		  //correct answer
		  if(this.id==rnd){
			   $(stage).append('<div class="feedback1">CORRECT</div>');
			   score++;
			   setTimeout(function(){changeQuestion()},1000);
		
		   }
		  //wrong answer	
		  if(this.id!=rnd){

		   $(stage).append('<div class="feedback2">WRONG</div>');
		   $(stage).append('<div class="questionText">'+'<img src="'+questionBank[questionNumber][0]+'" height="180px">'+'</div><div id="1" class="option">'+q1+'</div><div id="2" class="option">'+q2+'</div><div id="3" class="option">'+q3+'</div>');
		  	questionNumber--;
		  	setTimeout(function(){changeQuestion()},1000);
		  }
		 }})
	}//display question

	
	
	function changeQuestion(){

		number_of_attempt++;
		questionNumber++;

		if(stage=="#game1"){stage2="#game1";stage="#game2";}
		else{stage2="#game2";stage="#game1";}

		if(questionNumber<numberOfQuestions){displayQuestion();}else{displayFinalSlide();}

		$(stage2).animate({"right": "+=800px"},"slow", function() {$(stage2).css('right','-800px');$(stage2).empty();});
		$(stage).animate({"right": "+=800px"},"slow", function() {questionLock=false;});
	}//change question
	

	
	
	function displayFinalSlide(){

		stopCount();
		
		$(stage).append('<div class="questionText">You have finished the quiz!<br><br>Total questions: '+numberOfQuestions+'<br>Correct answers: '+score+'<br>'+'Number of Attempt: '+number_of_attempt+'</div>');
		
	}//display final slide
});//doc ready
