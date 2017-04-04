<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<html>

	<div id="sentence"> </div>
	<input type="text" id="keydata" />
	<div id="countdown" value="0"> </div>
	<div id="WPM" value="0"> </div>
	<div id="correctWord" value="0"> </div>
	<div id="wrongWord" value="0"> </div>
	<div id="keystroke" value="0"> </div>
	<div id="correctstroke" value="0"> </div>
	<div id="wrongstroke" value="0"> </div>
</html>

<script>
$(document).ready(function(){
	var sentence = ["ทดสอบ", "คำ", "พิมพ์", "ไก่", "ออก", "ไข่", "ไม้", "ตี", "พริก","ลำใย", "กางเกง", "กระเป๋า", "รองเท้า", "เสื้อผ้า", "สบาย", "ดี", "ตากลม", "อ่อนแอ", "พักผ่อน", "อากาศ", "สดใส", "ลีลา", "ริมหาด", "พัดลม", "ยิงปืน"];
	var sentence_show = '';
	var count = 0;
	var correct_word = 0;
	var wrong_word =  0;
	var keystroke = 0;
	var correct_stroke = 0;
	var wrong_stroke = 0;

	//show sentence
	//$("#correctWord").html("จำนวนคำที่พิมพ์ถูก: "+correct_word);
	//$("#wrongWord").html("จำนวนคำที่พิมพ์ผิด: "+wrong_word);
	//$("#keystroke").html("จำนวนครั้งที่พิมพ์: "+keystroke);
			
	for(var i=0;i<sentence.length;i++){
		sentence_show = sentence_show+"<span id='sentence_" + i + "'>"+sentence[i]+ "</span>" + " ";
	}
	$("#sentence").html(sentence_show);


	$('#keydata').keyup(function(e){

	   	
	   	//Hight key up
		$("#sentence_" + count).css("background-color", "grey");

	   	if(e.keyCode == 32){
	       // user has pressed space
	       //alert($("#keydata").val()); 

			var ans = $("#keydata").val();


		 	if(ans.split(' ').join('') === sentence[count]){
				correct_word++;
				$("#sentence_" + count).css("color", "green");
		
			}else{
				wrong_word++;
				$("#sentence_" + count).css("color", "red");
			}
					
			$("#sentence_" + count).css("background-color", "white");
			$("#keydata").val("");
			count++;
	   	}
	   	keystroke++;

		if(e.keyCode == 8){
			// user has pressed backspace
			//array.pop();
			wrong_stroke++;
	   	}

	   	correct_stroke = keystroke - wrong_stroke;

	   	$("WPM").html("จำนวนคำที่พิมพ์ต่อนาที: "+correct_word);
	   	$("#correctWord").html("จำนวนคำที่พิมพ์ถูก: " + correct_word).css("color", "green");
		$("#wrongWord").html("จำนวนคำที่พิมพ์ผิด: " + wrong_word).css("color", "red");
	   	$("#keystroke").html("จำนวนครั้งที่พิมพ์: " + keystroke);
	   	$("#correctstroke").html("จำนวนครั้งที่พิมพ์ถูก: " + correct_stroke).css("color", "green");
	   	$("#wrongstroke").html("จำนวนครั้งที่พิมพ์ผิด: " + wrong_stroke).css("color", "red");


	   	//console.log(keystroke);
	});


	//นับถอยหลัง
	var time = 60;

	var x = setInterval(function() {
		if(keystroke >= 1) {
			time--;
		
			document.getElementById("countdown").innerHTML = time + "s ";

			if(time <= 0) {
				clearInterval(x);
				$("#keydata").val("");
				document.getElementById("countdown").innerHTML = "หมดเวลาละ ";
				document.getElementById("keydata").style.display = "none";
			}
		}
	}, 1000);
});

</script>


<!--<button onclick="if(Math.random() * (100)<1/p*100){alert('Dead'); p=6;} else{p--; alert('Alive');}">Shoot</button>-->