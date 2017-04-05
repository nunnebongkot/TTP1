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
	public function get_tutorial()	//หน้าแรก
	{
		
		$sql = "SELECT * FROM tpt_tutorial";
		$query = $this->db->query($sql);
		return $query->result();
		// $query = $this->db->get('tpt_tutorial');
        // return $query->result();
	}
	public function get_tutorial_by_id()	//หน้าแรก
	{
		
		$sql = "SELECT * FROM tpt_tutorial where tt_id = ?";
		$query = $this->db->query($sql, array($this->tt_id));
		return $query;
		// $query = $this->db->get('tpt_tutorial');
        // return $query->result();
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
		$sql = "INSERT INTO tpt_profile(pf_fbId_gmId, pf_username, pf_password, pf_fistname, pf_lastname, pf_email, pf_bio)
				VALUE(?, ?, ?, ?, ?, ?, ?)";
		$this->db->query($sql, array($this->pf_fbId_gmId, $this->pf_username, $this->pf_password, $this->pf_fistname, $this->pf_lastname, $this->pf_email, $this->pf_bio));
	}

	public function get_wordsetTH()	//หน้าแรก
	{
		$sql = "SELECT * FROM tpt_competition WHERE cpt_id=2";
		$query = $this->db->query($sql);
		return $query;
		//$query = $this->db->get('tpt_profile');
        //return $query->result();
	}
	public function get_wordsetEN()	//หน้าแรก
	{
		$sql = "SELECT * FROM tpt_competition WHERE cpt_id=1";
		$query = $this->db->query($sql);
		return $query;
		//$query = $this->db->get('tpt_profile');
        //return $query->result();
	}
}
