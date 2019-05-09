<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Login_model');
    $this->load->model('Home_model');
  }

  function index()
  {
    $this->load->view('login_view');
  }

  function aksi_login()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $where = array('username' => $username, 'password' => md5($password));
    $cek = $this->Login_model->cek_login("user", $where)->num_rows();

    if ($cek > 0) {
      $data_session = array('nama' => $username, 'status' => "login");

      $this->session->set_userdata($data_session);
      redirect(base_url());
    } else {
      redirect(base_url());
    }
  }

  function logout()
  {
    $this->session->sess_destroy();
    redirect(base_url());
  }

  function register(){
    $this->load->view('register_view');
  }

  function aksi_register()
  {
    $username = $this->input->post('username');
    $email = $this->input->post( 'email');
    $password = $this->input->post('password');

    $data = array(
      'username' => $username,
      'email' => $email,
      'password' => md5($password)
    );

    $this->Home_model->input_data($data, 'user');
    redirect('Login');
  }

}
