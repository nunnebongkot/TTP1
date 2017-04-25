<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_login extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		
	}
	public function index()	//หน้าแรก
	{
		session_unset();


		$this->load->view('Template/header');
		$this->load->view('Login/v_index');
		$this->load->view('Template/footer');
	}
	public function login_system()
	{
		
		$this->load->view('Template/header2');
		$this->load->view('Login/v_login');
		$this->load->view('Template/footer2');
	}
	public function Main_system($id=NULL, $fname=NULL, $lname=NULL, $profileImage=NULL)
	{
		// echo $id;die;
	
		$this->load->model('M_login', 'login');
		$lg = $this->login;
		
		$this->pf_id = $id;
		$this->session->set_userdata("pf_id", $id);
		
		$row = $lg->get_profile_by_id()->row_array();
		// echo $row['pf_id']."=>".$row['pf_fistname'];die;
		$data['pf_id'] = $row['pf_id'];
		$data['id'] = $row['pf_fbId_gmId'];
		$data['pf_fistname'] = $row['pf_fistname'];
		$data['pf_lastname'] = $row['pf_lastname'];

		$data['pf_profileImage'] = $row['pf_profileImage'];


		$admin = $lg->select_profile($this->session->userdata("pf_id"))->row_array();
		
		//echo $admin['pf_status'];

		if($admin['pf_status']==1)
		{ 
			redirect('Login/C_login/Admin/');
		}

		$this->pf_fistname = $fname;
		$this->pf_lastname = $lname;
		$this->pf_profileImage = $profileImage;

		 
		$this->load->view('Template/headerMain');
		$this->load->view('Template/navi_bar', $data);
		$this->load->view('Login/v_main_user', $data);
		$this->load->view('Template/footerMain');
		
	}
	
	public function check_login()
	{
		$this->load->model('M_login', 'login');
		$lg = $this->login;

		$this->username = $this->input->post('username');
		$this->password = $this->input->post('password');
		$check = $lg->get_login();
		$row = $check->row_array();
		$pf_id = $row['pf_id'];
		
		$this->session->set_userdata("pf_fistname", $row['pf_fistname']);
		$this->session->set_userdata("pf_lastname", $row['pf_lastname']);
		$this->session->set_userdata("profileImage", $row['pf_profileImage']);
		
		echo $this->session->userdata("pf_fistname"); 
		echo $this->session->userdata("pf_lastname"); 
		echo $this->session->userdata("profileImage"); 
		
		
		if($check->num_rows()==0){
			redirect('Login/C_login/login_system');
		}else{
			// $row = $check->row_array();
			redirect('Login/C_login/Main_system/'.$pf_id);
		}
	}
	public function check_login_facebook($id=NULL,$fname=NULL,$lname=NULL)
	{
		$this->load->model('M_login', 'login');
		$lg = $this->login;

		$this->id_fbId_gmId = $id;
		$check = $lg->get_login_fb_gm();
		$row = $check->row_array();
		$pf_id = $row['pf_id'];
		// echo $check->num_rows();die;
		if($check->num_rows()==0){
			redirect('Login/C_login/register/'.$id.'/'.$fname.'/'.$lname);
		}else{
			$row = $check->row_array();
			redirect('Login/C_login/Main_system/'.$pf_id);
		}
	}
	
	public function check_login_google($id=NULL,$fname=NULL,$lname=NULL)
	{
		$this->load->model('M_login', 'login');
		$lg = $this->login;
		

		//$this->pf_fbId_gmId = $this->input->post('pf_fbId_gmId');
		 
		$this->id_fbId_gmId = $id;
		//die;
		$check = $lg->get_login_fb_gm();
		$row = $check->row_array();
		$pf_id = $row['pf_id'];
		//echo $check->num_rows();die;
		
		if($check->num_rows()==0){
			redirect('Login/C_login/register_google/'.$id.'/'.$fname.'/'.$lname);
		}else{
			$row = $check->row_array();
			redirect('Login/C_login/Main_system/'.$pf_id);
		}
	}
	public function register($id=NULL,$fname=NULL,$lname=NULL,$Img=NULL)
	{
		$this->load->model('M_login', 'login');
		$lg = $this->login;
		
		$data['id'] = $id;
		$data['fname'] = $fname;
		$data['lname'] = $lname;
		$data['Img'] = $Img;

		$this->load->view('Template/header2');
		$this->load->view('Login/v_register',$data);
		$this->load->view('Template/footer2');
		
	}
	
	public function register_google($id=NULL,$fname=NULL,$lname=NULL,$Img=NULL)
	{
		$this->load->model('M_login', 'login');
		$lg = $this->login;
		
		$data['id'] = $id;
		$data['fname'] = $fname;
		$data['lname'] = $lname;
		$data['Img'] = $Img;

		$this->load->view('Template/header2');
		$this->load->view('Login/v_registergoogle',$data);
		$this->load->view('Template/footer2');
		
	}
	public function insert_regis()
	{
		$this->load->model('M_login', 'login');
		$lg = $this->login;
		
		$this->pf_fbId_gmId = $this->input->post('pf_fbId_gmId');
		$this->pf_profileImage = "http://graph.facebook.com/" . $this->pf_fbId_gmId . "/picture?type=normal";
		$this->pf_fistname = $this->input->post('pf_fistname');
		$this->pf_lastname = $this->input->post('pf_lastname');
		if($this->input->post('pf_username') != NULL){
			$this->pf_username = $this->input->post('pf_username');
		}else{
			$this->pf_username = "";
		}
		if($this->input->post('pf_password') != NULL){
			$this->pf_password = $this->input->post('pf_password');
		}else{
			$this->pf_password = "";
		}
		$this->pf_email = $this->input->post('pf_email');
		$this->pf_bio = $this->input->post('pf_bio');
		$lg->insert_regis();
		redirect('Login/C_login/login_system');
	}
	
	public function insert_regis_google()
	{
		$this->load->model('M_login', 'login');
		$lg = $this->login;
		
		
		$this->pf_fbId_gmId = $this->input->post('pf_fbId_gmId');
		
		$url = "http://picasaweb.google.com/data/entry/api/user/". $this->pf_fbId_gmId ."?alt=json";
		
        $json = file_get_contents($url);
		$d = json_decode($json);
		//echo $d->{'entry'}->{'gphoto$thumbnail'}->{'$t'};
		//die;
		$this->pf_profileImage = $d->{'entry'}->{'gphoto$thumbnail'}->{'$t'};
		$this->pf_fistname = $this->input->post('pf_fistname');
		$this->pf_lastname = $this->input->post('pf_lastname');
		if($this->input->post('pf_username') != NULL){
			$this->pf_username = $this->input->post('pf_username');
		}else{
			$this->pf_username = "";
		}
		if($this->input->post('pf_password') != NULL){
			$this->pf_password = $this->input->post('pf_password');
		}else{
			$this->pf_password = "";
		}
		$this->pf_email = $this->input->post('pf_email');
		$this->pf_bio = $this->input->post('pf_bio');
		$lg->insert_regis();
		redirect('Login/C_login/login_system');
	}
	
	public function profile($id)
	{
		$this->load->model('M_login', 'login');
		$lg = $this->login;
		
		$this->pf_id = $id;
		$row = $lg->get_profile_by_id()->row_array();
		// echo $row['pf_id']."=>".$row['pf_fistname'];die;
		$data['pf_id'] = $row['pf_id'];
		$data['id'] = $row['pf_fbId_gmId'];
		$data['pf_fistname'] = $row['pf_fistname'];
		$data['pf_lastname'] = $row['pf_lastname'];
		$data['pf_profileImage'] = $row['pf_profileImage'];
		$data['pf_email'] = $row['pf_email'];
		$data['pf_bio'] = $row['pf_bio'];
		
		$this->load->view('Template/headerMain');
		$this->load->view('Template/navi_bar', $data);
		$this->load->view('Login/v_profile', $data);
		$this->load->view('Template/footerMain');
	}
	public function tutorial_system($tt_id=NULL,$tt_language=NULL)
	{
		$this->load->model('M_login', 'login');
		$lg = $this->login;
		
		//echo $tt_id;
		
		$this->pf_id = $this->session->userdata("pf_id");
		$row = $lg->get_profile_by_id()->row_array();
			//echo $row['pf_id']."=>".$row['pf_fistname'];die;
		$data['pf_id'] = $row['pf_id'];
		$data['id'] = $row['pf_fbId_gmId'];
		$data['pf_fistname'] = $row['pf_fistname'];
		$data['pf_lastname'] = $row['pf_lastname'];
		
		$data['wordset'] = $lg->get_tutorial($tt_id,$tt_language);
		
		$this->load->view('Template/headerMain');
		$this->load->view('Template/navi_bar', $data);
		
		$this->load->view('Tutorial/v_tutorial2', $data);
		$this->load->view('Template/footerMain');
	}

	
	public function Lesson_system(){
		
		
		//echo $id;die;
		$this->load->model('M_login', 'login');
		$lg = $this->login;
		//เรียกใช้ฟังก์ชัน 
		$this->pf_id = $this->session->userdata("pf_id");
		//ใส่ค่า $this->session->set_userdata("pf_id", $id);
		$row = $lg->get_profile_by_id()->row_array();
			//echo $row['pf_id']."=>".$row['pf_fistname'];die;
		$data['pf_id'] = $row['pf_id'];
		$data['id'] = $row['pf_fbId_gmId'];
		$data['pf_fistname'] = $row['pf_fistname'];
		$data['pf_lastname'] = $row['pf_lastname'];

		
		$data['lesson'] = $lg->get_lesson();
		$data['complete_check'] = $lg->select_log($this->session->userdata("pf_id"));
		//print_r($data["complete"]);
		//echo $data["complete"]->num_rows();
		//echo $this->session->userdata("pf_id");
		//die;
		$this->load->view('Template/headerMain');
		$this->load->view('Template/navi_bar', $data);
		$this->load->view('Tutorial/v_lesson', $data);
		$this->load->view('Template/footerMain');
	}
	
	public function main_speed()
	{
		
		$this->load->model('M_login', 'login');
		$lg = $this->login;
		
		$this->pf_id = $this->session->userdata("pf_id");
		$row = $lg->get_profile_by_id()->row_array();
		$data['pf_id'] = $row['pf_id'];
		$data['id'] = $row['pf_fbId_gmId'];
		$data['pf_fistname'] = $row['pf_fistname'];
		$data['pf_lastname'] = $row['pf_lastname'];
		
		$this->load->view('Template/headerMain');
		$this->load->view('Template/navi_bar', $data);
		$this->load->view('Speedtest/v_speedtest');
		$this->load->view('Template/footerMain');
	}
	public function test_speedEN()
	{
		$this->load->model('M_login', 'wordset');
		$wordset = $this->wordset;
		$data['wordset'] = $this->wordset->get_wordsetEN();
		// echo "test";
		
		$this->pf_id = $this->session->userdata("pf_id");
		$row = $wordset->get_profile_by_id()->row_array();
		$data['pf_id'] = $row['pf_id'];
		$data['id'] = $row['pf_fbId_gmId'];
		$data['pf_fistname'] = $row['pf_fistname'];
		$data['pf_lastname'] = $row['pf_lastname'];
		
		$this->load->view('Template/headerMain');
		$this->load->view('Template/navi_bar', $data);
		$this->load->view('Speedtest/v_speedtestEN', $data);
		$this->load->view('Template/footerMain');
	}
	public function test_speedTH()
	{
		
		$this->load->model('M_login', 'wordset');
		$wordset = $this->wordset;
		//$data['wordset'] = $this->wordset->get_wordsetTH();
		// echo "test";
		$this->pf_id = $this->session->userdata("pf_id");
		$row = $wordset->get_profile_by_id()->row_array();
		$data['pf_id'] = $row['pf_id'];
		$data['id'] = $row['pf_fbId_gmId'];
		$data['pf_fistname'] = $row['pf_fistname'];
		$data['pf_lastname'] = $row['pf_lastname'];
		
		
		
		$data['wordset'] = $this->wordset->get_wordsetTH();
		// echo "test";
		$this->load->view('Template/headerMain');
		$this->load->view('Template/navi_bar', $data);
		$this->load->view('Speedtest/v_speedtestTH', $data);
		$this->load->view('Template/footerMain');
	}


	public function main_competition()
	{
		$this->load->model('M_login', 'com');
		$com = $this->com;
	
		// echo "test";
		
		$this->pf_id = $this->session->userdata("pf_id");
		$row = $com->get_profile_by_id()->row_array();
		$data['pf_id'] = $row['pf_id'];
		$data['id'] = $row['pf_fbId_gmId'];
		$data['pf_fistname'] = $row['pf_fistname'];
		$data['pf_lastname'] = $row['pf_lastname'];
		
		
		// echo "test";
		$this->load->view('Template/headerMain');
		$this->load->view('Template/navi_bar', $data);
		$this->load->view('Competition/v_maincom');
		$this->load->view('Template/footerMain');
	}
	public function insert_competition()
	{
		$this->load->model('M_login', 'com');
		$com = $this->com;
	
		// echo "test";
		
		$this->pf_id = $this->session->userdata("pf_id");
		$row = $com->get_profile_by_id()->row_array();
		$data['pf_id'] = $row['pf_id'];
		$data['id'] = $row['pf_fbId_gmId'];
		$data['pf_fistname'] = $row['pf_fistname'];
		$data['pf_lastname'] = $row['pf_lastname'];

		$this->load->view('Template/headerMain');
		$this->load->view('Template/navi_bar', $data);
		$this->load->view('Competition/v_insertcom');
		$this->load->view('Template/footerMain');
	}
	public function insert_com()
	{
		$this->load->model('M_login', 'com');

		// echo "test";
		$data['cpt_title'] = $this->input->post('cpt_title');
		$data['cpt_wordset'] = $this->input->post('cpt_wordset'); 
		$data['cpt_language'] = $this->input->post('cpt_language');

		//echo $this->input->post('cpt_title');
		//echo $this->input->post('cpt_wordset');
		//echo $this->input->post('cpt_language');

		$this->com->insert_competition($data);
		redirect('Login/C_login/join_competition');
	}
	public function join_competition()
	{
		$this->load->model('M_login', 'com');
		$com = $this->com;
	
		// echo "test";
		
		$this->pf_id = $this->session->userdata("pf_id");
		$row = $com->get_profile_by_id()->row_array();
		$data['pf_id'] = $row['pf_id'];
		$data['id'] = $row['pf_fbId_gmId'];
		$data['pf_fistname'] = $row['pf_fistname'];
		$data['pf_lastname'] = $row['pf_lastname'];
		
		$data['com'] = $this->com->get_competition();

		// echo "test";
		$this->load->view('Template/headerMain');
		$this->load->view('Template/navi_bar', $data);
		$this->load->view('Competition/v_join', $data);
		$this->load->view('Template/footerMain');
	}
	public function test_competition($cpt_id=NULL, $cpt_language=NULL)
	{
		$this->load->model('M_login', 'wordset');
		$wordset = $this->wordset;
		//$data['wordset'] = $this->wordset->get_wordsetTH();
		// echo "test";

		$wordset->count_competition($cpt_id);
		$kai = $wordset->check_logcom($this->session->userdata("pf_id"), $cpt_id);
		if($kai==0){
			$wordset->insert_logcom($this->session->userdata("pf_id"), $cpt_id);
		}

		$data['rank'] = $wordset->get_rank($cpt_id);
		

		$this->pf_id = $this->session->userdata("pf_id");
		$row = $wordset->get_profile_by_id()->row_array();
		$data['pf_id'] = $row['pf_id'];
		$data['id'] = $row['pf_fbId_gmId'];
		$data['pf_fistname'] = $row['pf_fistname'];
		$data['pf_lastname'] = $row['pf_lastname'];
		
		
		
		$data['wordset'] = $this->wordset->get_wordset($cpt_id, $cpt_language);
		//$wordset->update_rank($sc_id);
		//$data['wordset'] = $this->com->get_competition();
		// echo "test";
		$this->load->view('Template/headerMain');
		$this->load->view('Template/navi_bar', $data);
		if($cpt_language==0){
			$this->load->view('Competition/v_competitionEN', $data);
		}else{
			$this->load->view('Competition/v_competitionTH', $data);
		}
		
		$this->load->view('Template/footerMain');
	}



	public function test_kai($sc_wpm=NULL, $sc_keystroke=NULL, $sc_ckeystroke=NULL, $sc_wkeystroke=NULL, $sc_cword=NULL, $sc_wword=NULL, $sc_pc_id=NULL)
	{
		$this->load->model('M_login', 'test');
		$ok = $this->test; 

		$data['sc_wpm'] = $sc_wpm;
		$data['sc_cword'] = $sc_cword;
		$data['sc_wword'] = $sc_wword;
		$data['sc_keystroke'] = $sc_keystroke; 
		$data['sc_ckeystroke'] = $sc_ckeystroke;
		$data['sc_wkeystroke'] = $sc_wkeystroke; 
		$data['sc_pc_id'] = $sc_pc_id;

		$this->load->view('Template/headerMain');
		$this->load->view('Competition/testinsert', $data);
		$this->load->view('Template/footerMain');
	}
	public function insert_score()
	{
		//header('Access-Control-Allow-Origin: *');
		
		$this->load->model('M_login', 'test');
		$ok = $this->test; 
		
		$this->sc_wpm = $this->input->get('sc_wpm');
		$this->sc_cword = $this->input->get('sc_cword');
		$this->sc_wword = $this->input->get('sc_wword');
		$this->sc_keystroke = $this->input->get('sc_keystroke');
		$this->sc_ckeystroke = $this->input->get('sc_ckeystroke');
		$this->sc_wkeystroke = $this->input->get('sc_wkeystroke');
		
		$this->sc_ii_id = $this->input->get('sc_ii_id');
		
		$this->sc_pf_id = $this->input->get('sc_pf_id');
		$this->sc_cpt_id = $this->input->get('sc_cpt_id');
		
		$ok->insert_score();
		redirect('Login/C_login/test_kai');
	}

	
	public function insert_log()
	{
		$this->load->model('M_login', 'login');
		$lg = $this->login;
		
		
		$this->lg_pf_id = $this->input->get('lg_pf_id');
		$this->lg_tt_id = $this->input->get('lg_tt_id');
		$getlog = $lg->get_log($this->lg_pf_id, $this->lg_tt_id);
		if($getlog == 0){
			$lg->insert_log();
		}
		
		//redirect('Login/C_login/Lesson_system');
	}
	
	public function test($lg_id=NULL, $lg_pf_id=NULL, $lg_tt_id=NULL) //.Use sometimes
	{
		$this->load->model('M_login', 'login');
		$lg = $this->login;
		
		$data['lg_id'] = $lg_id; 
		$data['lg_pf_id'] = $lg_pf_id;
		$data['lg_tt_id'] = $lg_tt_id;
		$this->load->view('Template/headerMain');
		$this->load->view('Tutorial/v_test', $data);
		$this->load->view('Template/footerMain');
	}

	public function admin()
	{
		
		$this->load->model('M_login', 'login');
		$lg = $this->login;
		
		$this->pf_id = $this->session->userdata("pf_id");
		$row = $lg->get_profile_by_id()->row_array();
		$data['pf_id'] = $row['pf_id'];
		$data['id'] = $row['pf_fbId_gmId'];
		$data['pf_fistname'] = $row['pf_fistname'];
		$data['pf_lastname'] = $row['pf_lastname'];

		$admin = $lg->select_profile($this->session->userdata("pf_id"))->row_array();
		
		//echo $admin['pf_status'];

		if($admin['pf_status']==0)
		{ 
			redirect('Login/C_login/Main_system/'.$admin['pf_id']);
		}
		

		$this->load->view('Template/headerMain');
		$this->load->view('Template/navi_admin', $data);
		$this->load->view('Admin/v_admin_main');
		$this->load->view('Template/footerMain');
	}

	public function admin_manage()
	{
		
		$this->load->model('M_login', 'com');
		$com = $this->com;
	
		// echo "test";
		
		$this->pf_id = $this->session->userdata("pf_id");
		$row = $com->get_profile_by_id()->row_array();
		$data['pf_id'] = $row['pf_id'];
		$data['id'] = $row['pf_fbId_gmId'];
		$data['pf_fistname'] = $row['pf_fistname'];
		$data['pf_lastname'] = $row['pf_lastname'];
		
		$data['com'] = $this->com->admin_manage();

		// echo "test";
		$this->load->view('Template/headerMain');
		$this->load->view('Template/navi_admin', $data);
		$this->load->view('Admin/v_admin_manage', $data);
		$this->load->view('Template/footerMain');
	}
	public function admin_insert()
	{
		$this->load->model('M_login', 'com');
		$com = $this->com;
	
		// echo "test";
		
		$this->pf_id = $this->session->userdata("pf_id");
		$row = $com->get_profile_by_id()->row_array();
		$data['pf_id'] = $row['pf_id'];
		$data['id'] = $row['pf_fbId_gmId'];
		$data['pf_fistname'] = $row['pf_fistname'];
		$data['pf_lastname'] = $row['pf_lastname'];

		$this->load->view('Template/headerMain');
		$this->load->view('Template/navi_admin', $data);
		$this->load->view('Admin/v_admin_insert');
		$this->load->view('Template/footerMain');
	}
	public function admin_com()
	{
		$this->load->model('M_login', 'com');

		// echo "test";
		$data['cpt_title'] = $this->input->post('cpt_title');
		$data['cpt_wordset'] = $this->input->post('cpt_wordset'); 
		$data['cpt_language'] = $this->input->post('cpt_language');

		//echo $this->input->post('cpt_title');
		//echo $this->input->post('cpt_wordset');
		//echo $this->input->post('cpt_language');

		$this->com->insert_competition($data);
		redirect('Login/C_login/admin_manage');
	}
	public function admin_select_update($cpt_id=NULL)
	{
		$this->load->model('M_login', 'com');
		$com = $this->com;
	
		$data['cpt_id'] = $cpt_id;
		// echo "test";
		
		$this->pf_id = $this->session->userdata("pf_id");
		$row = $com->get_profile_by_id()->row_array();
		$data['pf_id'] = $row['pf_id'];
		$data['id'] = $row['pf_fbId_gmId'];
		$data['pf_fistname'] = $row['pf_fistname'];
		$data['pf_lastname'] = $row['pf_lastname'];
		
		$data['com'] = $this->com->admin_select_update($cpt_id);
		//$data['com'] = $this->com->admin_update($cpt_id);
		
		$this->load->view('Template/headerMain');
		$this->load->view('Template/navi_admin', $data);
		$this->load->view('Admin/v_admin_update');
		$this->load->view('Template/footerMain');

		
		//$this->com->admin_update($data);
		//redirect('Login/C_login/admin_manage');
	}
	public function admin_update()
	{
		$this->load->model('M_login', 'com');
		$com = $this->com;
	
		
		$data['cpt_title'] = $this->input->post('cpt_title');
		$data['cpt_wordset'] = $this->input->post('cpt_wordset'); 
		$data['cpt_language'] = $this->input->post('cpt_language');
		$data['cpt_id'] = $this->input->post('cpt_id');
		
		//print_r($this->input->post());
		//echo $this->input->post('cpt_id');
		//echo $this->input->post('cpt_title');
		//echo $this->input->post('cpt_wordset');
		//echo $this->input->post('cpt_language');


		$data['com'] = $this->com->admin_update($data['cpt_id'], $data['cpt_title'] ,$data['cpt_wordset'] ,$data['cpt_language'] ); 

		redirect('Login/C_login/admin_manage');
	}
	public function admin_delete($cpt_id=NULL)
	{
		$this->load->model('M_login', 'com');
		//$com = $this->com;

		$data['cpt_id'] = $cpt_id;
		//$cpt_id = $this->input->post('cpt_id');

		//$check = $com->admin_delete();
		//$row = $check->row_array();
		//$cpt_id = $row['cpt_id'];
		//$row = $com->admin_delete()->row_array();
		//$data['cpt_id'] = $row['cpt_id'];
		//$data['com'] = $this->com->admin_delete();
		//$com->admin_delete($cpt_id)->row_array();
		$this->com->admin_delete($cpt_id);
		redirect('Login/C_login/admin_manage');
	}
	
	public function get_sricpt() //Test
	{
		$this->load->view('Template/headerMain');
		//$this->load->view('Template/navi_bar', $data);
		$this->load->view('Tutorial//v_test1');
		$this->load->view('Template/footerMain');
	}
	
	public function test_google() //Test
	{
		$this->load->view('Template/headerMain');
		//$this->load->view('Template/navi_bar', $data);
		$this->load->view('Login/v_google1');
		$this->load->view('Template/footerMain');
	}
	
	

}
