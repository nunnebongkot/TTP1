<html>
	<?php
		$data['form'] = "scoreform";
		echo form_open("Login/C_login/insert_score",$data);
	?>
		<p>word per minute : <input type="text" id="WPM" name="sc_wpm" /></p>
		<p>correct word : <input type="text" id="correctWord" name="sc_keystroke" /></p>
		<p>keystroke : <input type="text" id="keystroke" name="sc_wword"/></p>
		<p>correct keystroke : <input type="text" id="correctstroke" name="sc_ckeystroke"/></p>
		<p>wrong keystroke : <input type="text" id="wrongstroke" name="sc_wkeystroke"/></p>
		<p>wrong word : <input type="text" id="wrongWord" name="sc_cword"/></p>
		<p>pro com : <input type="text" name="sc_pc_id"/></p>
		<input type="submit" value="Submit">
	<?php
		echo form_close();
	?>
</html>

