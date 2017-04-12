<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<style>
::selection{background-color:none; color:inherit;}

#key-0 {
	background-color: red;
}

.cable{height:10px; width:10px; margin:0 60%;}
.keyboard{
  width:620px; height:270px;
  background-color:#ccccb3;
  margin: 0px auto;
  border-radius: 9px;
  padding: 30px;
  color: #000000;
}

.border{
  width:620px; height:130px;
  background-color:#ccccb3;
  margin: 0px auto;
  border-radius: 9px;
  padding: 30px;
  color: #000000;
}



.lights span{margin:0 20px 0 20px; padding:0; text-align: center;}
.lights span:after{
  content:"";
  width:11px; height:8px;
  top: 22px; margin-left:-9px;
  background-color:#DBB921;
  position:absolute;
  border-radius: 3px;
}

.key{
  width: 40px; height:40px;
  display:block;
  background-color:#ffffff;
  text-align: left;
  padding-left: 8px;
  line-height: 29px;
  border-radius:2px;
  float:left; margin-left: 2px;
  margin-bottom:2px;
  cursor: pointer;
  transition: box-shadow 0.7s ease;
}

.section-a{width:580px; height:300px; float:left;}


.function{font-size: 12px; width:30px; height:30px; margin-bottom:15px;}
.small{font-size:10px; line-height:13px; text-align: center; padding:0 5px; padding-top:2px; height:28px !important;}
.space1{margin-right: 43px !important;}
.space2{margin-right: 25px !important;}
.dual {font-size: 14px; line-height: 20px; width:35px; }
.backspace {width:83px; font-size: 12px;}
.tab {width: 50px; line-height: 40px; font-size:13px;}
.letter{width:30px;}
.slash{width:68px;}
.caps{width:70px; font-size:12px; line-height:18px;}
.enter{width:85px; line-height:40px; text-align: center; padding-left:0;}
.shift.left{width: 90px;line-height: 40px; font-size:13px;}
.shift.right{width: 102px;line-height: 40px; font-size:13px;}
.ctrl{width: 58px; line-height: 40px; font-size:13px;}
.space{width:234px;}
.arrows{position:relative; top:42px;}
.sec-func .key{width: 32px; font-size:10px; text-align:left; line-height:40px; float:left;}
.sec-func div.dual{line-height:20px;}
.arrows .key{text-align: center; padding-left: 7px; margin-left:2px;}
.hidden{visibility: hidden;}

.key:hover{box-shadow:0px 0px 20px #000; z-index:1000 }

.label{ background-color: red;}

</style>




<div class="wrapper">
  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a  class="navbar-brand"><b>Typing</b>Touch</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>
		<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo site_url("Login/C_login/lesson_system")?>">Tutorial Typing<span class="sr-only">(current)</span></a></li>
            <li><a href="#">Fast Typing</a></li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>


<div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
			Typing Lessons
        </h1>
       
      </section>

	  <center>
		<div> ความเร็ว 0 ต่อ/นาที ความถูกต้อง 100% เวลาที่ใช้ 4 นาที 21 วินาที </div>
	  </center>
	 
		<br/> <br/>
	<center>
		<?php $row = $wordset->row_array(); ?>
		<div id="sentence" ></div>
	</center>
	<!--<input type="text" id="keydata" />-->
		<div id="check"> </div>

		<br/> <br/>
		<div id="checkTrue"></div>
	

		<center>
			<textarea id="keydata" rows="2" cols="98"></textarea>
		</center>	
		
		<div class="cable">
		</div>


		<div class="keyboard">
		  <div class="section-a">
			  <div class="key num dual" id="key-0">
				<td class="label">
					~&nbsp;%<br>`&nbsp;&nbsp;&nbsp;-
				</td>
			  </div>
				
			  <div class="key num dual" id="key-1">
				!&nbsp;&nbsp;&nbsp;+<br>1&nbsp;&nbsp;ๅ
			  </div>
			  <div class="key num dual" id="key-2">
				@&nbsp;๑<br>2&nbsp;&nbsp;&nbsp;/
			  </div>
			  <div class="key num dual" id="key-3">
				#&nbsp;&nbsp;๒<br>3&nbsp;&nbsp;&nbsp;-
			  </div>
			  <div class="key num dual" id="key-4">
				$&nbsp;&nbsp;๓<br>4&nbsp;&nbsp;ภ
			  </div>
			  <div class="key num dual" id="key-5">
				%&nbsp;๔<br>5&nbsp;&nbsp;ถ
			  </div>
			  <div class="key num dual" id="key-6">
				^&nbsp;&nbsp;&nbsp;  ู<br>6&nbsp;&nbsp;&nbsp;  ุ
			  </div>
			  <div class="key num dual" id="key-7">
				&&nbsp;&nbsp;฿<br>7&nbsp;&nbsp;&nbsp;&nbsp;   ึ
			  </div>
			  <div class="key num dual" id="key-8">
				*&nbsp;&nbsp;๕<br>8&nbsp;&nbsp;ค
			  </div>
			  <div class="key num dual" id="key-9">
				(&nbsp;&nbsp;๖<br>9&nbsp;&nbsp;ต
			  </div>
			  <div class="key num dual" id="key-10">
				)&nbsp;&nbsp;๗<br>0&nbsp;&nbsp;จ
			  </div>
			  <div class="key num dual" id="key-11">
				_&nbsp;&nbsp;๘<br>-&nbsp;&nbsp;&nbsp;ข
			  </div>
			  <div class="key num dual" id="key-12">
				+&nbsp;&nbsp;๙<br>=&nbsp;&nbsp;ช
			  </div>
			  <div class="key backspace" id="key-13">
				  Backspace
			  </div>
			   <!--END NUMBER KEYS -->
				<BR><BR>
			  <div class="key tab" id="key-14">
				Tab
			  </div>
			  
			  <div class="key dual" id="key-15">
				Q&nbsp;        ๐<BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ๆ
			  </div>
				<div class="key dual" id="key-16">
				W&nbsp;&nbsp;"<BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ไ
			  </div>
				<div class="key dual" id="key-17">
				E&nbsp;&nbsp;ฎ<BR>&nbsp;&nbsp;&nbsp;&nbsp;ำ
			  </div>
				<div class="key dual" id="key-18">
				R&nbsp;&nbsp;ฑ
				<BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;พ
			  </div>
				<div class="key dual" id="key-19">
				T&nbsp;&nbsp;ธ<BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ะ
			  </div>
				<div class="key dual" id="key-20">
			    Y&nbsp;&nbsp;&nbsp;&nbsp;ํ<BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ั
			  </div>
				<div class="key dual" id="key-21">
			    U&nbsp;&nbsp;&nbsp;&nbsp;๊
				<BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ี
			  </div>
				 <div class="key dual" id="key-22">
			    I&nbsp;&nbsp;&nbsp;ณ
				<BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ร
			  </div>
				 <div class="key dual" id="key-23">
			    O&nbsp;&nbsp;ฯ
				<BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;น
			  </div>
				<div class="key dual" id="key-24">
			   P&nbsp;&nbsp;ญ
				<BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ย
			  </div>
				<div class="key dual" id="key-25">
				{&nbsp;&nbsp;&nbsp;ฐ<Br>[
				&nbsp;&nbsp;บ<br> 
			  </div>
				<div class="key dual" id="key-26">
				}&nbsp;&nbsp;&nbsp;&nbsp;,<br>]
				&nbsp;&nbsp;&nbsp;ถ<br> 
			  </div>
				<div class="key letter dual slash" id="key-27">
				|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ฅ<br>\
				&nbsp;&nbsp;&nbsp;&nbsp;ฃ<br> 
			  </div>
			  <div class="key caps" id="key-28">
				Caps<br>Lock
				</div>
			   <div class="key dual" id="key-29">
				A&nbsp;&nbsp;ฤ
				&nbsp;&nbsp;&nbsp;&nbsp;ถ<br> 
			  </div>
				<div class="key dual" id="key-30">
				S&nbsp;&nbsp;ฆ
				&nbsp;&nbsp;&nbsp;&nbsp;ห<br> 
			  </div>
				<div class="key dual" id="key-31">
				D&nbsp;&nbsp;ฏ
				&nbsp;&nbsp;&nbsp;&nbsp;ก<br> 
			  </div>
			 <div class="key dual" id="key-32">
				F&nbsp;&nbsp;โ
				&nbsp;&nbsp;&nbsp;&nbsp;ด<br> 
			  </div>
				<div class="key dual" id="key-33">
				G&nbsp;ฌ
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เ<br> 
			  </div>
				<div class="key dual" id="key-34">
				H&nbsp;&nbsp;&nbsp;&nbsp;็
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;้<br> 
			  </div>
				<div class="key dual" id="key-35">
			   J&nbsp;&nbsp;&nbsp;&nbsp;๋
				&nbsp;&nbsp;&nbsp;&nbsp;่<br> 
			  </div>
				<div class="key dual" id="key-36">
				K&nbsp;&nbsp;ษ
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;า<br> 
			  </div>
				<div class="key dual" id="key-37">
				L&nbsp;&nbsp;&nbsp;ศ
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ส<br> 
			  </div>
				<div class="key dual" id="key-38">
				:&nbsp;&nbsp;&nbsp;ซ<br>;
				&nbsp;&nbsp;&nbsp;ว
			  </div>
				<div class="key dual" id="key-39">
				"&nbsp;&nbsp;&nbsp;.<br>'
				&nbsp;&nbsp;&nbsp;ง
			  </div>
				<div class="key enter">
				Enter
			  </div>
				
			  <div class="key shift left" id="key-40">
				Shift
			  </div>
			  <div class="key dual" id="key-41">
				Z&nbsp;&nbsp;&nbsp;(
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ผ<br> 
			  </div>  
				<div class="key dual" id="key-42">
				X&nbsp;&nbsp;&nbsp;)
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ป<br> 
			  </div>
				<div class="key dual" id="key-43">
				C&nbsp;&nbsp;ฉ
				&nbsp;&nbsp;&nbsp;&nbsp;แ<br> 
			  </div>
				<div class="key dual" id="key-44">
				V&nbsp;&nbsp;ฮ
				&nbsp;&nbsp;&nbsp;&nbsp;อ<br> 
			  </div>
			   <div class="key dual" id="key-45">
				B&nbsp;&nbsp;&nbsp;&nbsp;ฺ
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ิ<br> 
			  </div>
			   <div class="key dual" id="key-46">
				N&nbsp;&nbsp;&nbsp;&nbsp;์
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ื<br> 
			  </div>
			  <div class="key dual" id="key-47">
				M&nbsp;&nbsp;?
				&nbsp;&nbsp;&nbsp;&nbsp;ท<br> 
			  </div>
				<div class="key dual" id="key-48">
				<  ฒ<br>,&nbsp;&nbsp;&nbsp;ม
			  </div>
				<div class="key dual" id="key-49">
				>&nbsp;&nbsp;ฬ<br>.&nbsp;&nbsp;&nbsp;&nbsp;ใ
			  </div>
				<div class="key dual" id="key-50">
				?&nbsp;&nbsp;ฦ<br>/&nbsp;&nbsp;&nbsp;ฝ
			  </div>
				<div class="key shift right" id="key-51">
				Shift
			  </div>
			  <div class="key ctrl">
				Ctrl
			  </div>
				<div class="key">
				&hearts;
			  </div>
				<div class="key">
				Alt
			  </div>
				<div class="key space">
				
			  
			 
				</div>
				<div class="key">
				Alt
			  </div>
				<div class="key">
				&hearts;
			  </div>
				<div class="key">
				Prnt
			  </div>
				<div class="key ctrl">
				Ctrl
			  </div>
		  </div><!-- end section-a-->
		</div>
	</div>
</div>

<script>
$(document).ready(function(){
	var sentence = ["<?php echo str_replace(' ', '","', $row['tt_wordset']); ?>"];
	var sentence_show = '';
	var count = 0;

	//show sentence
	for(var i=0;i<sentence.length;i++){
		sentence_show = sentence_show+"<span id='sentence_" + i + "'>"+sentence[i]+ "</span>" + " ";
	}
	$("#sentence").html(sentence_show);

	/*
	$('#keydata').keyup(function(e){
	   	//if(e.keyCode == 8){
	       // user has pressed backspace
	       //array.pop();
	   	//}

	   	if(e.keyCode == 32){
	       // user has pressed space
	       //alert($("#keydata").val()); 

			var ans = $("#keydata").val();
			

			if(ans.split(' ').join('') === sentence[count]){
				$("#sentence_" + count).css("background-color", "green");
				count++;
			}else{
				
				$("#sentence_" + count).css("background-color", "red");
			}

			$("#keydata").val("");
			
	   	}


	});

	*/
});
</script>

<script>
function keys_check(character){
	
	var keys = [];
		keys[0] = ["~","%"];
		keys[1] = ["!","+","1","ๅ"];
		keys[2] = ["@","๑","2","/"];
		keys[3] = ["#","๒","3","-"];
		keys[4] = ["$","๓","4","ภ"];
		keys[5] = ["%","๔","5","ถ"];
		keys[6] = ["^","อู","6","อุ"];
		keys[7] = ["&","฿","7","อึ"];
		keys[8] = ["*","๕","8","ค"];
		keys[9] = ["(","๖","9","ต"];
		keys[10] = [")","๗","0","จ"];
		keys[11] = ["-","๘","-","ข"];
		keys[12] = ["+","๙","=","ช"];
		keys[13] = [" "];
		keys[14] = [" "];
		keys[15] = ["Q","๐","ๆ"];
		keys[16] = ["W","","ไ"];
		keys[17] = ["E","ฎ","อำ"];
		keys[18] = ["R","ฑ","พ"];
		keys[19] = ["T","ธ","ะ"];
		keys[20] = ["Y","ํ","ั"];
		keys[21] = ["U","๊","ี"];
		keys[22] = ["I","ณ","ร"];
		keys[23] = ["O","ฯ","น"];
		keys[24] = ["P","ญ","ญ"];
		keys[25] = ["{","ฐ","[","บ"];
		keys[26] = [" "," "," ","ล"];
		keys[27] = ["","ฅ","ฃ"];
		keys[28] = [""];
		keys[29] = ["A","ฤ","ฟ"];
		keys[30] = ["S","ฆ","ห"];
		keys[31] = ["D","ฏ","ก"];
		keys[32] = ["F","โ","ด"];
		keys[33] = ["G","ฌ","เ"];
		keys[34] = ["H","็","้"];
		keys[35] = ["J","๋","่"];
		keys[36] = ["K","ษ","า"];
		keys[37] = ["L","ศ","ส"];
		keys[38] = [":","ซ",";","ว"];
		keys[39] = [" ",".","ง"];
		keys[40] = [""];
		keys[41] = ["Z", " ","ผ"];
		keys[42] = ["X", " ","ป"];
		keys[43] = ["C", "ฉ","แ"];
		keys[44] = ["V", "ฮ","อ"];
		keys[45] = ["B", "ฺ","ิ"];
		keys[46] = ["n", "์","ื"];
		keys[47] = ["M", " ","ท"];
		keys[48] = [" ", " ", "ฒ", "ม"];
		keys[49] = [" ", " ", "ฬ", "ใ"];
		keys[50] = [" ", " ", "ฦ", "ฝ"];
		keys[51]	= [""];
	//console.log("string");
	for(var i=0;i<keys.length;i++){
			//console.log(key[i]);
		for(var j=0;j<keys[i].length;j++){
			
			if(character.toLowerCase() == keys[i][j].toLowerCase()){
				console.log(character+" = "+keys[i][j] + " : " + i);
				return i;
				
			}
		}	
	}
}

$(document).ready(function(){
	var sentence = ["<?php echo str_replace(' ', '","', $row['tt_wordset']); ?>"];

	var sentence_show = '';
	var sentence_count = 0;

	//show sentence
	for(var i=0;i<sentence.length;i++){
		sentence_show = sentence_show+"<span id='sentence_" + i + "'>"+sentence[i]+ "</span>" + " ";
	}
	$("#sentence").html(sentence_show);
		//console.log(sentence_show);
		
	//----------------------------------------------แยกตัวอักษร
	var word = [];
	var word_count = 0;
    var keyid = 0;
	for(var i=0;i<sentence.length;i++){
		word[i] = sentence[i].split("");
		console.log(word[i]);
	}
	
	
	word_count = 1;
	sentence_count = 0;
	$("#key-"+keys_check(word[0][0])).css("background-color", "red");
	
	$('#keydata').keyup(function(e){	
		console.log("Keypress");
		$("#key-"+keys_check(word[0][0])).css("background-color", "");

		if(word_count == 0 && sentence_count == 0){
			$("#key-"+keys_check(word[0][1])).css("background-color", "red");
		}
		
		$("#key-" + keyid).css("background-color", "");
		
		keyid = keys_check(word[sentence_count][word_count]);
		$("#key-" + keyid).css("background-color", "red");
		
		console.log(word[sentence_count][word_count] +" == " + $("#keydata").val().slice(-1));
		//if(e.keyCode != 32){
			word_count++;
		//}
		
		if(word_count == word[sentence_count].length){
			word_count = 0;
		}
		
		if(e.keyCode == 32){
	       // user has pressed space

			/*
			var ans = $("#keydata").val();
			

			if(ans.split(' ').join('') === sentence[count]){
				$("#sentence_" + count).css("background-color", "green");
				sentence_count++;
			}else{
				
				$("#sentence_" + count).css("background-color", "red");
			}

			$("#keydata").val("");
			*/
	   	}
		
	});
		
});



</script>