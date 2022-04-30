<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User class.
 * 
 * @extends CI_Controller
 */
class Register extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('register_model');
		$this->load->model('sekolah_model');
		
	}
	
	public function index() {
		$this->load->library('form_validation');
	}

	public function register_landing(){
		$this->load->view('register/register_landing');
	}
	
	public function register_siswa(){
		$data['groups'] = $this->sekolah_model->getSekolah();
		$this->load->library('form_validation');
			$this->load->view('register/register_siswa',$data);
	}

	public function register_donatur(){
		$data['groups'] = $this->sekolah_model->getSekolah();
		$this->load->library('form_validation');
			$this->load->view('register/register_donatur',$data);
	}

	public function validateSiswa(){
		
		$data = new stdClass();
		
		
		$this->load->library('form_validation');
		// set validation rules
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[siswa.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('password_confirm', 'Confirm Password', 'trim|required|min_length[6]|matches[password]');
		
		if ($this->form_validation->run() === false) {
			
			// validation not ok, send validation errors to the view
			$this->load->view('register/register_siswa');
			
		} else {
			// set variables from the form
			$username = $this->input->post('username');
			$email    = $this->input->post('email');
			$password = $this->input->post('password');
			
			if ($this->register_model->create_siswa($username, $email, $password)) {
				
				// user creation ok
				$this->load->view('register/register_success', $data);
				
			} else {
				
				// user creation failed, this should never happen
				$data->error = 'There was a problem creating your new account. Please try again.';
				
				// send error to the view
				$this->load->view('register/register_siswa', $data);
				
			}
			
		}
	}

	public function validateDonatur(){
		
		$data = new stdClass();
		
		
		$this->load->library('form_validation');
		// set validation rules
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[siswa.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('password_confirm', 'Confirm Password', 'trim|required|min_length[6]|matches[password]');
		
		if ($this->form_validation->run() === false) {
			
			// validation not ok, send validation errors to the view
			$this->load->view('register/register_donatur');
			
		} else {
			// set variables from the form
			$username = $this->input->post('username');
			$email    = $this->input->post('email');
			$password = $this->input->post('password');
			
			if ($this->register_model->create_donatur($username, $email, $password)) {
				
				// user creation ok
				$this->load->view('register/register_success', $data);
				
			} else {
				
				// user creation failed, this should never happen
				$data->error = 'There was a problem creating your new account. Please try again.';
				
				// send error to the view
				$this->load->view('register/register_donatur', $data);
				
			}
			
		}
	}

	public function logout() {
		
		// create the data object
		$data = new stdClass();
		
		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
			
			// remove session datas
			foreach ($_SESSION as $key => $value) {
				unset($_SESSION[$key]);
			}
			
			// user logout ok
			$this->load->view('header');
			$this->load->view('logout', $data);
			$this->load->view('footer');
			
		} else {
			
			// there user was not logged in, we cannot logged him out,
			// redirect him to site root
			redirect('/');
			
		}
		
	}
}