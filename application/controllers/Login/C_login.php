<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_login extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		
	}
	public function index()	//หน้าแรก
	{
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
	public function Main_system($id=NULL)
	{
		// echo $id;die;
	
		$this->load->model('M_login', 'login');
		$lg = $this->login;
		
		$this->pf_id = $id;
		$row = $lg->get_profile_by_id()->row_array();
		// echo $row['pf_id']."=>".$row['pf_fistname'];die;
		$data['pf_id'] = $row['pf_id'];
		$data['id'] = $row['pf_fbId_gmId'];
		$data['pf_fistname'] = $row['pf_fistname'];
		$data['pf_lastname'] = $row['pf_lastname'];
		
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
	public function register($id=NULL,$fname=NULL,$lname=NULL)
	{
		$this->load->model('M_login', 'login');
		$lg = $this->login;
		
		$data['id'] = $id;
		$data['fname'] = $fname;
		$data['lname'] = $lname;
		$this->load->view('Template/header2');
		$this->load->view('Login/v_register',$data);
		$this->load->view('Template/footer2');
	}
	public function insert_regis()
	{
		$this->load->model('M_login', 'login');
		$lg = $this->login;
		
		$this->pf_fbId_gmId = $this->input->post('pf_fbId_gmId');
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
		$data['pf_email'] = $row['pf_email'];
		$data['pf_bio'] = $row['pf_bio'];
		
		$this->load->view('Template/headerMain');
		$this->load->view('Template/navi_bar', $data);
		$this->load->view('Login/v_profile', $data);
		$this->load->view('Template/footerMain');
	}
	public function tutorial_system()
	{
		
		//$this->load->model('M_login', 'login');
		//$lg = $this->login;
		
		//$data['query'] = $lg->get_tutorial_by_id();
		$this->load->view('Template/headerMain');
		$this->load->view('Tutorial/v_tutorial');
		$this->load->view('Template/footerMain');
	}
	public function tutorial_system_en($id)
	{
		$this->tt_id = $id;
		$this->load->model('M_login', 'login');
		$lg = $this->login;
		$data['i']=1;
		$data['query'] = $lg->get_tutorial_by_id();
		$row = $lg->get_tutorial_by_id()->row_array();
		$data['tt_id'] = $row['tt_id'];
		$data['tt_word_th'] = $row['tt_word_th'];
		$data['tt_word_en'] = $row['tt_word_en'];
		$data['tt_lesson_en'] = $row['tt_lesson_en'];
		$data['tt_lesson_th'] = $row['tt_lesson_th'];
		$data['tt_type'] = $row['tt_type'];
		$this->load->view('Template/headerTu');
		$this->load->view('Tutorial/v_tutorial', $data);
		$this->load->view('Template/footerTu');
	}
	
	public function Lesson_system(){
		
		$this->load->model('M_login', 'login');
		$lg = $this->login;
		$data['query'] = $lg->get_tutorial();
		$this->load->view('Template/headerMain');
		$this->load->view('Tutorial/v_lesson', $data);
		$this->load->view('Template/footerMain');
	}
	
	public function test_speed()
	{
		$this->load->view('Template/headerMain');
		//$this->load->view('Template/navi_bar');
		$this->load->view('Speedtest/v_speedtest');
		$this->load->view('Template/footerMain');
	}

	public function test_speedTH()
	{
		$this->load->model('M_login', 'wordset');
		$data['wordset'] = $this->wordset->get_wordsetTH();
		// echo "test";
		$this->load->view('Template/headerMain');
		//$this->load->view('Template/navi_bar');
		$this->load->view('Speedtest/v_speedtest', $data);
		$this->load->view('Template/footerMain');
	}
	public function test_speedEN()
	{
		$this->load->model('M_login', 'wordset');
		$data['wordset'] = $this->wordset->get_wordsetEN();
		// echo "test";
		$this->load->view('Template/headerMain');
		//$this->load->view('Template/navi_bar');
		$this->load->view('Speedtest/v_speedtest', $data);
		$this->load->view('Template/footerMain');
	}

	public function test_competition()
	{
		$this->load->model('M_login', 'wordset');
		$data['wordset'] = $this->wordset->get_wordsetTH();
		// echo "test";
		$this->load->view('Template/headerMain');
		$this->load->view('Competition/v_competition', $data);
		$this->load->view('Template/footerMain');
	}
}
