<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	var sentence = ["ฟหกด่าสว", "ฟหกด่าสว", "ฟหกด่าสว"];
	var sentence_show = '';
	var count = 0;

	//show sentence
	for(var i=0;i<sentence.length;i++){
		sentence_show = sentence_show+"<span id='sentence_" + i + "'>"+sentence[i]+ "</span>" + " ";
	}
	$("#sentence").html(sentence_show);

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


});
</script>

<style>
::selection{background-color:none; color:inherit;}



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

.key:hover{box-shadow:0px 0px 10px #14B524; z-index:1000;}
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
		<div id="sentence" ></div>
	</center>
	<!--<input type="text" id="keydata" />-->
		<div id="check"> </div>

		<br/> <br/>
		<div id="checkTrue"></div>
	
		
		
		
		
		<center>
			<textarea id="keydata" rows="2" cols="94"></textarea>
		</center>	
		
		<div class="cable">
		</div>


		<div class="keyboard">
		  <div class="section-a">
			  <div class="key num dual">
				~&nbsp;%<br>`&nbsp;&nbsp;&nbsp;-
			  </div>
				
			  <div class="key num dual">
				!&nbsp;&nbsp;&nbsp;+<br>1&nbsp;&nbsp;ๅ
			  </div>
			  <div class="key num dual">
				@&nbsp;๑<br>2&nbsp;&nbsp;&nbsp;/
			  </div>
			  <div class="key num dual">
				#&nbsp;&nbsp;๒<br>3&nbsp;&nbsp;&nbsp;-
			  </div>
			  <div class="key num dual">
				$&nbsp;&nbsp;๓<br>4&nbsp;&nbsp;ภ
			  </div>
			  <div class="key num dual">
				%&nbsp;๔<br>5&nbsp;&nbsp;ถ
			  </div>
			  <div class="key num dual">
				^&nbsp;&nbsp;&nbsp;  ู<br>6&nbsp;&nbsp;&nbsp;  ุ
			  </div>
			  <div class="key num dual">
				&&nbsp;&nbsp;฿<br>7&nbsp;&nbsp;&nbsp;&nbsp;   ึ
			  </div>
			  <div class="key num dual">
				*&nbsp;&nbsp;๕<br>8&nbsp;&nbsp;ค
			  </div>
			  <div class="key num dual">
				(&nbsp;&nbsp;๖<br>9&nbsp;&nbsp;ต
			  </div>
			  <div class="key num dual">
				)&nbsp;&nbsp;๗<br>0&nbsp;&nbsp;จ
			  </div>
			  <div class="key num dual">
				_&nbsp;&nbsp;๘<br>-&nbsp;&nbsp;&nbsp;ข
			  </div>
			  <div class="key num dual">
				+&nbsp;&nbsp;๙<br>=&nbsp;&nbsp;ช
			  </div>
			  <div class="key backspace">
				  Backspace
			  </div>
			   <!--END NUMBER KEYS -->
				<BR><BR>
			  <div class="key tab">
				Tab
			  </div>
			  
			  <div class="key dual">
				Q&nbsp;        ๐<BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ๆ
			  </div>
				<div class="key dual">
				W&nbsp;&nbsp;"<BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ไ
			  </div>
				<div class="key dual">
				E&nbsp;&nbsp;ฎ<BR>&nbsp;&nbsp;&nbsp;&nbsp;ำ
			  </div>
				<div class="key dual">
				R&nbsp;&nbsp;ฑ
				<BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;พ
			  </div>
				<div class="key dual">
				T&nbsp;&nbsp;ธ<BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ะ
			  </div>
				<div class="key dual">
			   Y&nbsp;&nbsp;&nbsp;&nbsp;ํ<BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ั
			  </div>
				<div class="key dual">
			   U&nbsp;&nbsp;&nbsp;&nbsp;๊
				<BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ี
			  </div>
				 <div class="key dual">
			   I&nbsp;&nbsp;&nbsp;ณ
				<BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ร
			  </div>
				 <div class="key dual">
			   O&nbsp;&nbsp;ฯ
				<BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;น
			  </div>
				<div class="key dual">
			   P&nbsp;&nbsp;ญ
				<BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ย
			  </div>
				<div class="key dual">
				{&nbsp;&nbsp;&nbsp;ฐ<Br>[
				&nbsp;&nbsp;บ<br> 
			  </div>
				<div class="key dual">
				}&nbsp;&nbsp;&nbsp;&nbsp;,<br>]
				&nbsp;&nbsp;&nbsp;ถ<br> 
			  </div>
				<div class="key letter dual slash">
				|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ฅ<br>\
				&nbsp;&nbsp;&nbsp;&nbsp;ฃ<br> 
			  </div>
			  <div class="key caps">
				Caps<br>Lock
				</div>
			   <div class="key dual">
				A&nbsp;&nbsp;ฤ
				&nbsp;&nbsp;&nbsp;&nbsp;ถ<br> 
			  </div>
				<div class="key dual">
				S&nbsp;&nbsp;ฆ
				&nbsp;&nbsp;&nbsp;&nbsp;ห<br> 
			  </div>
				<div class="key dual">
				D&nbsp;&nbsp;ฏ
				&nbsp;&nbsp;&nbsp;&nbsp;ก<br> 
			  </div>
			 <div class="key dual">
				F&nbsp;&nbsp;โ
				&nbsp;&nbsp;&nbsp;&nbsp;ด<br> 
			  </div>
				<div class="key dual">
				G&nbsp;ฌ
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เ<br> 
			  </div>
				<div class="key dual">
				H&nbsp;&nbsp;&nbsp;&nbsp;็
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;้<br> 
			  </div>
				<div class="key dual">
			   J&nbsp;&nbsp;&nbsp;&nbsp;๋
				&nbsp;&nbsp;&nbsp;&nbsp;่<br> 
			  </div>
				<div class="key dual">
				K&nbsp;&nbsp;ษ
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;า<br> 
			  </div>
				<div class="key dual">
				L&nbsp;&nbsp;&nbsp;ศ
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ส<br> 
			  </div>
				<div class="key dual">
				:&nbsp;&nbsp;&nbsp;ซ<br>;
				&nbsp;&nbsp;&nbsp;ว
			  </div>
				<div class="key dual">
				"&nbsp;&nbsp;&nbsp;.<br>'
				&nbsp;&nbsp;&nbsp;ง
			  </div>
				<div class="key enter">
				Enter
			  </div>
				
			  <div class="key shift left">
				Shift
			  </div>
			  <div class="key dual">
				Z&nbsp;&nbsp;&nbsp;(
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ผ<br> 
			  </div>  
				<div class="key dual">
				X&nbsp;&nbsp;&nbsp;)
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ป<br> 
			  </div>
				<div class="key dual">
				C&nbsp;&nbsp;ฉ
				&nbsp;&nbsp;&nbsp;&nbsp;แ<br> 
			  </div>
				<div class="key dual">
				V&nbsp;&nbsp;ฮ
				&nbsp;&nbsp;&nbsp;&nbsp;อ<br> 
			  </div>
			   <div class="key dual">
				B&nbsp;&nbsp;&nbsp;&nbsp;ฺ
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ิ<br> 
			  </div>
			   <div class="key dual">
				N&nbsp;&nbsp;&nbsp;&nbsp;์
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ื<br> 
			  </div>
			  <div class="key dual">
				M&nbsp;&nbsp;?
				&nbsp;&nbsp;&nbsp;&nbsp;ท<br> 
			  </div>
				<div class="key dual">
				<  ฒ<br>,&nbsp;&nbsp;&nbsp;ม
			  </div>
				<div class="key dual">
				>&nbsp;&nbsp;ฬ<br>.&nbsp;&nbsp;&nbsp;&nbsp;ใ
			  </div>
				<div class="key dual">
				?&nbsp;&nbsp;ฦ<br>/&nbsp;&nbsp;&nbsp;ฝ
			  </div>
				<div class="key shift right">
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