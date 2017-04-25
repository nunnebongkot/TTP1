<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_login extends CI_model {
	
	public function __construct()
	{
		parent::__construct();
		$this->db = $this->load->database('tpt', TRUE);
		// $this->db = $db->database;
	}
	public function get_login()	//หน้าแรก
	{
		// echo $this->username."=>".$this->password;
		$sql = "SELECT * FROM tpt_profile
				WHERE pf_username = ? AND pf_password = ? ";
		$query = $this->db->query($sql, array($this->username, $this->password));
		return $query;
	}
	public function get_login_fb_gm()	//หน้าแรก
	{
		// echo $this->id_fbId_gmId;die;
		$sql = "SELECT * FROM tpt_profile
				WHERE pf_fbId_gmId = ?  ";
		$query = $this->db->query($sql, array($this->id_fbId_gmId));
		return $query;
	}
	public function get_profile_by_id()	//หน้าแรก
	{
		// echo $this->pf_id;die;
		$sql = "SELECT * FROM tpt_profile
				WHERE pf_id = ? ";
		$query = $this->db->query($sql, array($this->pf_id));
		return $query;
	}
	public function get_tutorial($tt_id=NULL,$tt_language=NULL)	//หน้าแรก
	{
		
		$sql = "SELECT * FROM tpt_tutorial WHERE tt_id=".$tt_id." && tt_language=".$tt_language." ";
		$query = $this->db->query($sql);
		return $query;
		
	}

	public function get_lesson()
	{
		$sql = "SELECT * FROM tpt_tutorial LEFT JOIN tpt_log ON tpt_log.lg_tt_id = tpt_tutorial.tt_id GROUP BY tt_id" ;
		$query = $this->db->query($sql);
		return $query;
	}
	
	public function get_profile()	//หน้าแรก
	{
		
		//$sql = "SELECT * FROM tpt_tutorial";
		//$query = $this->db->query;
		//return $query;
		$query = $this->db->get('tpt_profile');
        return $query->result();
	}
	public function insert_regis()	//หน้าแรก
	{
		$sql = "INSERT INTO tpt_profile(pf_fbId_gmId, pf_username, pf_password, pf_fistname, pf_lastname, pf_email, pf_bio , pf_profileImage)
				VALUE(?, ?, ?, ?, ?, ?, ?, ?)";
		$this->db->query($sql, array($this->pf_fbId_gmId, $this->pf_username, $this->pf_password, $this->pf_fistname, $this->pf_lastname, $this->pf_email, $this->pf_bio, $this->pf_profileImage));
	}
	

	public function get_wordsetEN()	
	{
		$sql = "SELECT * FROM tpt_competition WHERE cpt_language=0 ORDER BY RAND() LIMIT 1";
		$query = $this->db->query($sql);
		return $query;
		//$query = $this->db->get('tpt_profile');
        //return $query->result();
	}
	public function get_wordsetTH()
	{
		$sql = "SELECT * FROM tpt_competition WHERE cpt_language=1 ORDER BY RAND() LIMIT 1";
		$query = $this->db->query($sql);
		return $query;
		//$query = $this->db->get('tpt_profile');
        //return $query->result();
	}

	public function insert_competition($data)
	{
		$sql = "INSERT INTO tpt_competition(cpt_title, cpt_wordset, cpt_language) VALUE(?, ?, ?)";
		$this->db->query($sql, array($data['cpt_title'], $data['cpt_wordset'], $data['cpt_language']));
	}
	public function get_competition()
	{
		$sql = "SELECT *, COUNT(lc_pf_id) as par FROM tpt_competition LEFT JOIN logcom ON tpt_competition.cpt_id = logcom.lc_cpt_id GROUP BY tpt_competition.cpt_id";
		$query = $this->db->query($sql);
		return $query;
		//$query = $this->db->get('tpt_profile');
        //return $query->result();
	}
	public function count_competition($cpt_id=NULL)
	{
		$sql = "UPDATE tpt_competition SET cpt_count = cpt_count + 1 WHERE cpt_id=".$cpt_id." ";
		$query = $this->db->query($sql);
		return $query;
	}
	public function get_wordset($cpt_id=NULL)	//หน้าแรก
	{
		$sql = "SELECT * FROM tpt_competition WHERE cpt_id=".$cpt_id." ";
		$query = $this->db->query($sql);
		return $query;
		//$query = $this->db->get('tpt_profile');
        //return $query->result();
	}
	public function insert_score()
	{
		$sql = "INSERT INTO tpt_score( sc_wpm, sc_keystroke, sc_ckeystroke, sc_wkeystroke, sc_cword, sc_wword, sc_ii_id, sc_pf_id, sc_cpt_id)
				VALUE( ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$this->db->query($sql, array($this->sc_wpm, $this->sc_keystroke, $this->sc_ckeystroke, $this->sc_wkeystroke, $this->sc_cword, $this->sc_wword, $this->sc_ii_id, $this->sc_pf_id, $this->sc_cpt_id));
	}
	public function insert_logcom($lc_pf_id=NULL, $lc_cpt_id=NULL)
	{
		$sql = "INSERT INTO logcom (lc_pf_id, lc_cpt_id) VALUES (".$lc_pf_id.",".$lc_cpt_id.")";
		//$sql = "INSERT INTO logcom (lc_pf_id, lc_cpt_id) VALUES (".$lc_pf_id.",".$lc_cpt_id.") WHERE NOT EXISTS (SELECT lc_pf_id FROM logcom WHERE lc_pf_id=".$lc_pf_id.")";
		//$sql = "REPLACE INTO logcom VALUES ('".$lc_pf_id."', '".$lc_cpt_id."')";
		//$sql = "INSERT IGNORE INTO `logcom` SET `lc_id` = '', `lc_pf_id` = $lc_pf_id,`lc_cpt_id` = $lc_cpt_id";
		$query = $this->db->query($sql);
		return $query;
	}
	public function check_logcom($lc_pf_id=NULL, $lc_cpt_id=NULL)
	{
		$sql = "SELECT COUNT(*) AS kai FROM logcom WHERE lc_pf_id=".$lc_pf_id." AND lc_cpt_id=".$lc_cpt_id;
		$query = $this->db->query($sql);
		return $query->row_array()["kai"];
	}
	public function get_rank($cpt_id=NULL)
	{
		//$sql = "SELECT * FROM tpt_score WHERE EXISTS (SELECT pf_id FROM tpt_profile WHERE tpt_score.sc_pf_id = tpt_profile.pf_id HAVING MAX(tpt_score.sc_wpm) tpt_score.sc_cpt_id=".$cpt_id.") ORDER BY sc_wpm DESC,sc_cword DESC, sc_wword ASC, sc_wkeystroke ASC LIMIT 10";
		$sql = "SELECT * FROM tpt_score INNER JOIN tpt_profile ON tpt_score.sc_pf_id = tpt_profile.pf_id WHERE tpt_score.sc_cpt_id=".$cpt_id." GROUP BY pf_id, sc_cpt_id ORDER BY sc_wpm DESC,sc_cword DESC, sc_wword ASC, sc_wkeystroke ASC LIMIT 10";
		$query = $this->db->query($sql);
		return $query;
	}

	/*public function update_rank($sc_id=NULL)
	{
		$sql = "UPDATE tpt_score SET sc_wpm=".$sc_wpm." WHERE tpt_score.sc_id=".$sc_id;
		$query = $this->db->query($sql);
		return $query;
	}*/

	
	public function insert_log(){
		$sql = "INSERT INTO tpt_log(lg_id, lg_pf_id, lg_tt_id)
				VALUE(?, ?, ?)";
		$this->db->query($sql, array($this->lg_id, $this->lg_pf_id, $this->lg_tt_id));
	}
	
	public function get_log($lg_pf_id=NULL, $lg_tt_id=NULL)
	{
		$sql = "SELECT COUNT(*) AS getlog FROM tpt_log WHERE lg_pf_id=".$lg_pf_id." && lg_tt_id=".$lg_tt_id;
		$query = $this->db->query($sql);
		return $query->row_array()["getlog"];
	}

	public function admin_manage()
	{
		$sql = "SELECT * FROM tpt_competition ORDER BY cpt_id";
		$query = $this->db->query($sql);
		return $query;
		//$query = $this->db->get('tpt_profile');
        //return $query->result();
	}
	public function select_profile($pf_id=NULL)
	{
		$sql = "SELECT * FROM tpt_profile WHERE pf_id=".$pf_id;
		$query = $this->db->query($sql);
		return $query;
		//$query = $this->db->get('tpt_profile');
        //return $query->result();
	}
	public function admin_select_update($cpt_id=NULL)
	{
		$sql = "SELECT * FROM tpt_competition WHERE cpt_id=".$cpt_id;
		$query = $this->db->query($sql);
		return $query;
		//$query = $this->db->get('tpt_profile');
        //return $query->result();
	}



	public function admin_update($cpt_id=NULL, $cpt_title=NULL, $cpt_wordset=NULL, $cpt_language=NULL)
	{


		$sql = "UPDATE tpt_competition SET cpt_title='".$cpt_title."', cpt_wordset='".$cpt_wordset."', cpt_language=".$cpt_language." WHERE cpt_id=".$cpt_id." ";
		//echo $sql;

		$this->db->query($sql);
		//$query = $this->db->query($sql);
		return $query;
	}
	public function admin_delete($cpt_id=NULL)
	{
		$sql = "DELETE FROM tpt_competition WHERE cpt_id=".$cpt_id." ";
		$query = $this->db->query($sql);
		return $query;
	}
	
}
