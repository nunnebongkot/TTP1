<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script>
//$(document).ready(function(){
	//var i = "<?php echo $i ?>";
	// alert(i);
	//var data = "<?php echo $tt_word_th ?>";
	// var data1 = data.split(" ");
	// alert(data1);
	//if(i==0){
		// var sentence = ["ฟหกด่าสว","ฟหกด่าสว","ฟหกด่าสว"];
		// var sentence = [data1];
		//var sentence = ["<?php echo $tt_word_th ?>"];
		// alert(sentence);
	//}else{
		//var sentence = ["<?php echo $tt_word_en ?>"];
	//}
	
	//var sentence_show = '';
	//var count = 0;
	// var lines = $('textarea').val().split('\n');
	
	//show sentence
	//var y=0;
	//for(var i=0;i<sentence.length;i++){
		// alert(sentence[0]);
		//sentence_show = sentence_show+"<span id='sentence_" + i + "'>"+sentence[i]+ "</span>" + " ";
	//}
	//$("#sentence").html(sentence_show);

	//$('#keydata').keyup(function(e){
		
	   	//if(e.keyCode == 8){
	       // user has pressed backspace
	       //array.pop();
	   	//}
		// alert(e.keyCode);
		//for(var i=0;i<sentence.length;i++){
		//	if(data.indexOf(" ")){
				// alert('12');
			//	sentence[y] = data.substr(i, data.indexOf(" "));
			//	y++;
			//}
		//}
	   //	if(e.keyCode == 32){
			
		// alert(sentence[2]);
	       // user has pressed space
	       //alert($("#keydata").val()); 

			//var ans = $("#keydata").val();
			// if(ans.split(' ').join('') === sentence[count]){
			//	$("#sentence_" + count).css("background-color", "green");
			//	count++;
			// alert(sentence[count]+'-11'+count);
			//}else{
				
			//	$("#sentence_" + count).css("background-color", "red");
			// alert(sentence[count]+count);
			//}

			//$("#keydata").val("");
	   	//}
		
	
	//});


//});
/*
function myFunction(event) {
    var data = "<?php echo $tt_word_th ?>";
	var key_data = document.getElementById("keydata").value;
	// alert(event.keyCode);
	var y=0;
	if(event.keyCode != 32){
		for(var i=0;i<data.length;i++){
				if(key_data == data[i]){
					alert('y');
					break;
				}
		}
		// alert(data[i]);
	}
}
*/
</script>


	 

	
<p><font size="3">Stretch those fingers.</font></p>
					


	<!--<center><h1><div id="sentence"></div></h1></center>-->
	<center><h1>
	<?php
	/*
	foreach($query->result() as $row){
		if($i==0){
			 echo $row->tt_word_th;
		}else{
			echo $row->tt_word_en;
		}
	}*/
	?>
	</h1></center>
	<!--<input type="text" id="keydata" />-->

	<div id="check"> </div>

	
	<div id="checkTrue"></div>
	<div id="container">
	<img src="<?php echo base_url(); ?>template/tutorial/img/hand1.png" align="left">
	<textarea id="keydata" rows="6" cols="33" align="center"></textarea>
	<img src="<?php echo base_url(); ?>template/tutorial/img/hand2.png" align="right">
	</div>
	<br>
	<div id="container">
	<ul id="keyboard">
		<li class="symbol"><span class="off">`</span><span class="on">~</span></li>
		<li class="symbol"><span class="off">1</span><span class="on">!</span></li>
		<li class="symbol"><span class="off">2</span><span class="on">@</span></li>
		<li class="symbol"><span class="off">3</span><span class="on">#</span></li>
		<li class="symbol"><span class="off">4</span><span class="on">$</span></li>
		<li class="symbol"><span class="off">5</span><span class="on">%</span></li>
		<li class="symbol"><span class="off">6</span><span class="on">^</span></li>
		<li class="symbol"><span class="off">7</span><span class="on">&amp;</span></li>
		<li class="symbol"><span class="off">8</span><span class="on">*</span></li>
		<li class="symbol"><span class="off">9</span><span class="on">(</span></li>
		<li class="symbol"><span class="off">0</span><span class="on">)</span></li>
		<li class="symbol"><span class="off">-</span><span class="on">_</span></li>
		<li class="symbol"><span class="off">=</span><span class="on">+</span></li>
		<li class="delete lastitem">delete</li>
		<li class="tab">tab</li>
		<li class="letter">q</li>
		<li class="letter">w</li>
		<li class="letter">e</li>
		<li class="letter">r</li>
		<li class="letter">t</li>
		<li class="letter">y</li>
		<li class="letter">u</li>
		<li class="letter">i</li>
		<li class="letter">o</li>
		<li class="letter">p</li>
		<li class="symbol"><span class="off">[</span><span class="on">{</span></li>
		<li class="symbol"><span class="off">]</span><span class="on">}</span></li>
		<li class="symbol lastitem"><span class="off">\</span><span class="on">|</span></li>
		<li class="capslock">caps lock</li>
		<li class="letter">a</li>
		<li class="letter">s</li>
		<li class="letter">d</li>
		<li class="letter">f</li>
		<li class="letter">g</li>
		<li class="letter">h</li>
		<li class="letter">j</li>
		<li class="letter">k</li>
		<li class="letter">l</li>
		<li class="symbol"><span class="off">;</span><span class="on">:</span></li>
		<li class="symbol"><span class="off">'</span><span class="on">"</span></li>
		<li class="return lastitem">return</li>
		<li class="left-shift">shift</li>
		<li class="letter">z</li>
		<li class="letter">x</li>
		<li class="letter">c</li>
		<li class="letter">v</li>
		<li class="letter">b</li>
		<li class="letter">n</li>
		<li class="letter">m</li>
		<li class="symbol"><span class="off">,</span><span class="on">&lt;</span></li>
		<li class="symbol"><span class="off">.</span><span class="on">&gt;</span></li>
		<li class="symbol"><span class="off">/</span><span class="on">?</span></li>
		<li class="right-shift lastitem">shift</li>
		<li class="space lastitem">&nbsp;</li>
	</ul>
	</div>
	