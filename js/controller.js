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
	var current_user_id  = location.search.split('patient=')[1];

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
	 
	$.getJSON("ajaxResponse.php?patient_id="+current_user_id,
	 function(data) {
		
		for(i=0;i<data.quizlist.length;i++){ 
			questionBank[i]=new Array;
			questionBank[i][0]="admin/"+data.quizlist[i].image_location;
			questionBank[i][1]=data.quizlist[i].answer;
			questionBank[i][2]=data.quizlist[i].option1;
			questionBank[i][3]=data.quizlist[i].option2;
			questionBank[i][4]=data.quizlist[i].option3;	
		}
		numberOfQuestions=questionBank.length; 

		 
		displayQuestion();
	})//gtjson
	 

	function displayQuestion(){
	 	var rnd=Math.random()*4;
		rnd=Math.ceil(rnd);
		var q1;
		var q2;
		var q3;
		var q4;

		if(rnd==1){
			q1=questionBank[questionNumber][1];
			q2=questionBank[questionNumber][2];
			q3=questionBank[questionNumber][3];
			q4=questionBank[questionNumber][4];	
		}
		if(rnd==2){
			q2=questionBank[questionNumber][1];
			q3=questionBank[questionNumber][2];
			q4=questionBank[questionNumber][3];
			q1=questionBank[questionNumber][4];
		}
		
		if(rnd==3){
			q3=questionBank[questionNumber][1];
			q4=questionBank[questionNumber][2];
			q1=questionBank[questionNumber][3];
			q2=questionBank[questionNumber][4];
		}
		if(rnd==4){
			q4=questionBank[questionNumber][1];
			q1=questionBank[questionNumber][2];
			q2=questionBank[questionNumber][3];
			q3=questionBank[questionNumber][4];
		}

		$(stage).append('<div class="questionImage img-container" style="width: 30%;">'+'<img style="width: 100%;height: auto;" class="img-responsive" src="'+questionBank[questionNumber][0]+'" height="180px">'+'</div><div class="questionText"><div id="1" class="option">'+q1+'</div><div id="2" class="option">'+q2+'</div><div id="3" class="option">'+q3+'</div><div id="4" class="option">'+q4+'</div></div>');

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
			$(stage).append('<div class="questionImage img-container" style="width: 30%;">'+'<img style="width: 100%;height: auto;" src="'+questionBank[questionNumber][0]+'" height="180px">'+'</div><div class="questionText"><div id="1" class="option">'+q1+'</div><div id="2" class="option">'+q2+'</div><div id="3" class="option">'+q3+'</div><div id="4" class="option">'+q4+'</div></div>');
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

		$(stage2).animate({"right": "+=1600px"},"slow", function() {$(stage2).css('right','-1600px');$(stage2).empty();});
		$(stage).animate({"right": "+=1600px"},"slow", function() {questionLock=false;});
	}//change question
	

	
	
	function displayFinalSlide(){

		stopCount();
		
		$(stage).append('<div class="finalText">You have finished the quiz!<br><br>Total questions: '+numberOfQuestions+'<br>Correct answers: '+score+'<br>'+'Number of Attempt: '+number_of_attempt+'<br><a href="Gameindex.php"> <button onmouseover="" style="cursor: pointer;" type="submit"  class="btn btn-default btn-lg" >Home</button></a></div>');
		
		$.post('pushData.php', {userId: current_user_id, attempts: number_of_attempt, time: document.getElementById("txt").value, questions: numberOfQuestions}, function(data) {
		      
		    });

	}//display final slide


	
});//doc ready
