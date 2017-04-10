<?php
			$data['form'] = "test-form";
			echo form_open("Login/C_login/insert_log",$data);
?>
tt_id: <input type="text" name="lg_id" value=""><br>
lg_tt_id: <input type="text" name="lg_tt_id" value=""><br>
lg_pf_id: <input type="text" name="lg_pf_id" value=""><br>
<input type="submit" value="Submit">

<?php
			echo form_close();
?>