<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Home_model');
    if ($this->session->userdata('status') != "login") {
      redirect(base_url("Login"));
    }
  }

  function index()
  {
    $where = array('username=' => $this->session->userdata("nama"));
    $data['diary'] = $this->Home_model->tampil_data($where, 'diary')->result();
    $this->load->view('home_view', $data);
  }

  function tambah()
  {
    $data = array(
      'dd_film' => $this->Home_model->pilih_film(),
      'film_selected' => $this->input->post('judul') ? $this->input->post('judul') : ''
    );
    $this->load->view('input_view', $data);
  }

  function aksi_tambah(){
    $user = $this->session->userdata("nama");
    $judul = $this->input->post('judul');
    $date = $this->input->post('date');
    $review = $this->input->post('review');
    $rating = $this->input->post('rating');

    $data = array(
      'username' => $user,
      'judul' => $judul,
      'date' => $date,
      'review' => $review,
      'rating' => $rating
    );

    $this->Home_model->input_data($data, 'diary');
    redirect(base_url());
  }

  function edit($id)
  {
    $where = array('id=' => $id);
    $data['diary'] = $this->Home_model->edit_data($where, 'diary')->result();
    $this->load->view('edit_view', $data);
  }

  function aksi_edit()
  {
    $id = $this->input->post('id');
    $date = $this->input->post('date');
    $review = $this->input->post('review');
    $rating = $this->input->post('rating');

    $data = array(
      'date' => $date,
      'review' => $review,
      'rating' => $rating
    );

    $where = array('id' => $id);

    $this->Home_model->update_data($where, $data, 'diary');
    redirect(base_url());
  }

  function hapus($id)
  {
    $where = array('id' => $id);
    $this->Home_model->hapus_data($where, 'diary');
    redirect(base_url());
  }

  function tampil($id)
  {
    $where = $this->db->query("SELECT * FROM diary WHERE id = $id")->row()->judul;
    $data['film'] = $this->Home_model->tampil_film($where, 'film')->result();
    $this->load->view('movie_view', $data);
  }

  function setting()
  {
    $where = array('username=' => $this->session->userdata("nama"));
    $data['profile'] = $this->Home_model->edit_data($where, 'user')->result();
    $this->load->view('setting_view', $data);
  }

  function aksi_profile()
  {
    $username = $this->session->userdata("nama");
    $email = $this->input->post('email');
    $password = $this->input->post('password');

    $data = array(
      'username' => $username,
      'email' => $email,
      'password' => md5($password)
    );

    $where = array('username' => $username);

    $this->Home_model->update_data($where, $data, 'user');
    redirect(base_url());
  }

}
