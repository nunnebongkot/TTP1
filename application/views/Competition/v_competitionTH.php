<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<html>
	<div class="wrapper">
		 <!-- Full Width Column -->
		<div class="content-wrapper">
		    <div class="container">
		      <!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>ทดสอบพิมพ์เร็วภาษาไทย</h1>
				</section>

				<section class="content">
					<div class="box box-default">
						<div class="box-header with-border">
							<h3 class="box-title">ชื่อเกมส์</h3>
						</div>
						<div class="box-body">
							<div class="row">
									<div class="col-md-1"></div>
									<div class="col-md-8">
										<div class="box-body no-padding">
											<table class="table table-striped">
												<tbody>
													<tr>
														<td>
															
															<div id="sentence" style="font-size:18px"></div>
														</td>
														
													</tr>
													<tr>
														<td>
															<input type="text" id="keydata" class="form-control" placeholder="กด Spacebar เพื่อตรวจสอบคำ">
														</td>
													</tr>
													<tr>
														<td>
															<div class="col-md-2"></div>
															<div class="col-md-8">
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
									<div class="col-md-1">
										<center>
											<tr>
												<td>
													<div class="col-md-3"></div>
													<div class="col-md-3">
														<div class="info-box">
															<span class="info-box-icon bg-red">
																<i>
																	<h2><div id="countdown" value="0"> </div><h2>
																</i>
															</span>
															<span class="info-box-icon bg-gray" id="refresh" onclick="myRefresh()">
																<i class="fa fa-refresh"></i>
															</span>
														</div>
														<!-- /.info-box -->
													</div>
												</td>
											</tr>
										</center>
									</div>
							</div>
						<!-- /.box-body -->
						</div>
					</div>
					<!-- /.box -->
					<div class="box box-default">
						<div class="box-header with-border">
							<h3 class="box-title">ลำดับการแข่งขัน</h3>
						</div>
						<div class="box-body">
							<div class="row">
								<div class="col-md-1"></div>
								<div class="col-md-8">
									<div class="box-body no-padding">
										<table class="table table-striped">
											<thead>
												<tr>
													<th>
														ลำดับ
													</th>
													<th>
														ชื่อผู้เล่น
													</th>
													<th>
														<center>WPM</center>
													</th>
												</tr>
											</thead>
											<tbody>
												<?php $index = 1; ?>
												<?php foreach($rank->result() as $row) { ?>
													<tr>
														<td>
															<?php echo $index++; ?>
														</td>
														<td>
															<?php echo $row->pf_fistname." ".$row->pf_lastname; ?>
														</td>
														<td>
															<center><?php echo $row->sc_wpm; ?></center>
														</td>
													</tr>
												<?php } ?>
											</tbody>
										</table>
									</div>
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

<?php $row = $wordset->row_array(); ?>
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
	
	var time = 6;

	var x = setInterval(function() {
		if(keystroke >= 1) {
			time--;
		
			document.getElementById("countdown").innerHTML = time + "s ";

			if(time <= 0) {
				clearInterval(x);
				$("#keydata").val("");
				document.getElementById("countdown").innerHTML = "หมดเวลา !";
				document.getElementById("sentence").style.display = "none";
				document.getElementById("keydata").style.display = "none";
				$("#WPM").html("จำนวนคำต่อนาที (WPM): " + correct_word);
			   	$("#correctWord").html("จำนวนคำที่พิมพ์ถูก: " + correct_word).css("color", "green");
				$("#wrongWord").html("จำนวนคำที่พิมพ์ผิด: " + wrong_word).css("color", "red");
			   	$("#keystroke").html("จำนวนครั้งที่พิมพ์: " + keystroke);
			   	$("#correctstroke").html("จำนวนครั้งที่พิมพ์ถูก: " + correct_stroke).css("color", "green");
				$("#wrongstroke").html("จำนวนครั้งที่พิมพ์ผิด: " + wrong_stroke).css("color", "red");
				
				var url = "/TTP1/index.php/login/c_login/insert_score/";
				var data = { 
					sc_wpm: correct_word, 
					sc_cword: correct_word, 
					sc_wword: wrong_word, 
					sc_keystroke: keystroke, 
					sc_ckeystroke: correct_stroke,
					sc_wkeystroke: wrong_stroke,
					sc_ii_id: 1, // id get from session
					sc_pf_id: <?php echo $this->session->userdata("pf_id"); ?>,
					sc_cpt_id: <?php echo $row['cpt_id']; ?>
					
				};
				console.log(data);


				$.ajax({
				  type: "GET",
				  url: url,
				  data: data,
				  //success: success,
				  dataType: "json"
				});
			}
		}
	}, 1000);


});

function myRefresh() {
	    location.reload();
}


</script>


