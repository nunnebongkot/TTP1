<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<html>
	<div class="wrapper">
<<<<<<< HEAD
	  <!-- Full Width Column -->
	  	<div class="content-wrapper">
=======
		<header class="main-header">
			<nav class="navbar navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<a  href="<?php echo site_url("Login/C_login/Main_system")?>" class="navbar-brand"><b>Typing</b>Touch</a>
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
							<i class="fa fa-bars"></i>
						</button>
					</div>
					<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
						<ul class="nav navbar-nav">
							<li><a href="<?php echo site_url("Login/C_login/lesson_system")?>">Tutorial Typing<span class="sr-only">(current)</span></a></li>
							<li class="active"><a href="<?php echo site_url("Login/C_login/main_speed")?>">Typing Test</a></li>
							<li><a href="<?php echo site_url("Login/C_login/main_competition")?>">Competition</a></li>
						</ul>
					</div>
					<!-- /.navbar-custom-menu -->
				</div>
				<!-- /.container-fluid -->
			</nav>
		</header>

		 <!-- Full Width Column -->
		<div class="content-wrapper">
>>>>>>> origin/master
		    <div class="container">
		      <!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>ทดสอบพิมพ์เร็วภาษาไทย</h1>
				</section>

				<section class="content">
					<div class="box box-default">
						<div class="box-header with-border">
							<h3 class="box-title"></h3>
						</div>
						<div class="box-body">
							<div class="row">
									<div class="col-md-2"></div>
									<div class="col-md-6">
										<div class="box-body no-padding">
											<table class="table table-striped">
												<tbody>
													<tr>
														<td>
															<?php $row = $wordset->row_array(); ?>
															<?php //print_r($row); ?>
															<?php //echo $row['cpt_wordset']; ?>
															<div id="sentence"></div>
														</td>
														
													</tr>
													<tr>
														<td>
															<input type="text" id="keydata">
														</td>
													</tr>
													<tr>
														<td>
															<div class="col-md-2"></div>
															<div class="col-md-9">
																<h1><div id="WPM" value="0"> </div></h1>
																<h3>
																	<div id="correctWord" value="0"> </div>
																	<div id="wrongWord" value="0"> </div>
																	<div id="keystroke" value="0"> </div>
																	<div id="correctstroke" value="0"> </div>
																	<div id="wrongstroke" value="0"> </div>
																</h3>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="col-md-3">
										<center>
											<tr>
												<td>
													<h1><div id="countdown" value="0"> </div><h1>
												</td>
											</tr>
										</center>
									</div>
							</div>
						<!-- /.box-body -->
						</div>
					</div>
					<!-- /.box -->
				</section>
				<!-- /.content -->

			</div>
		</div>

		<footer class="main-footer">
			<div class="container">
				<div class="pull-right hidden-xs">
				</div>
			</div>
		<!-- /.container -->
		</footer>
	</div>
</html>

<script>
$(document).ready(function(){
	//var sentence = ["ทดสอบ", "คำ", "พิมพ์", "ไก่", "ออก", "ไข่", "ไม้", "ตี", "พริก","ลำใย", "กางเกง", "กระเป๋า", "รองเท้า", "เสื้อผ้า", "สบาย", "ดี", "ตากลม", "อ่อนแอ", "พักผ่อน", "อากาศ", "สดใส", "ลีลา", "ริมหาด", "พัดลม", "ยิงปืน"];
	var sentence = ["<?php echo str_replace(' ', '","', $row['cpt_wordset']); ?>"];
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
					
			$("#sentence_" + count).css("background-color", "");
			$("#keydata").val("");
			count++;
	   	}
	   	if(e.keyCode != 32 && e.keyCode != 8){
	   		keystroke++;
	   	}

		/*if(e.keyCode == 8){
			// user has pressed backspace
			//array.pop();
			wrong_stroke++;
	   	}*/

	   	//correct_stroke = keystroke - wrong_stroke;

	   	/*$("WPM").html("จำนวนคำที่พิมพ์ต่อนาที: "+correct_word);
	   	$("#correctWord").html("จำนวนคำที่พิมพ์ถูก: " + correct_word).css("color", "green");
		$("#wrongWord").html("จำนวนคำที่พิมพ์ผิด: " + wrong_word).css("color", "red");
	   	$("#keystroke").html("จำนวนครั้งที่พิมพ์: " + keystroke);*/

	   	//console.log(keystroke);
	});

	//----------------------------------------------------------------
	//check keystroke
	var word = [];
	var word_count = 0;

	for(var i=0;i<sentence.length;i++){
		word[i] = sentence[i].split("");
		//console.log(word[i]);
	}

	$('#keydata').keyup(function(e){

		if(e.keyCode != 32 && e.keyCode != 8){
			var ans = $("#keydata").val();
			var lastChar = ans.substr(ans.length-1);
			console.log(word[count][word_count] + "==" + lastChar);
			if(word[count][word_count] == lastChar){
				word_count++;
				correct_stroke++;
				console.log("word_count");
			}else{
				wrong_stroke++;
			}
		}

		if(e.keyCode == 32){
			word_count = 0;

		}

		//alert("hello");

   	//$("#correctstroke").html("จำนวนครั้งที่พิมพ์ถูก: " + correct_stroke).css("color", "green");
	//$("#wrongstroke").html("จำนวนครั้งที่พิมพ์ผิด: " + wrong_stroke).css("color", "red");

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
				document.getElementById("countdown").innerHTML = "Tหมดเวลา !";
				document.getElementById("sentence").style.display = "none";
				document.getElementById("keydata").style.display = "none";
				$("#WPM").html("จำนวนคำที่พิมพ์ต่อนาที: " + correct_word);
			   	$("#correctWord").html("จำนวนคำที่พิมพ์ถูก: " + correct_word).css("color", "green");
				$("#wrongWord").html("จำนวนคำที่พิมพ์ผิด: " + wrong_word).css("color", "red");
			   	$("#keystroke").html("จำนวนครั้งที่พิมพ์: " + keystroke);
			   	$("#correctstroke").html("จำนวนครั้งที่พิมพ์ถูก: " + correct_stroke).css("color", "green");
				$("#wrongstroke").html("จำนวนครั้งที่พิมพ์ผิด: " + wrong_stroke).css("color", "red");

			}
		}
	}, 1000);


});

</script>


