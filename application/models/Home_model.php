<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
  }

  function tampil_data($where, $table)
  {
    return $this->db->get_where($table, $where);
  }
  function tampil_film($where)
  {
    return $this->db->query("SELECT * FROM movie WHERE judul = '$where'");
  }
  function tampil_discover($limit = 6)
  {
    $this->db->order_by("year", "desc");
    $this->db->limit($limit);
    $query = $this->db->get("movie");
    return $query->result();
  }

  function input_data($data, $table)
  {
    $this->db->insert($table, $data);
  }

  function hapus_data($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }

  function edit_data($where, $table)
  {
    return $this->db->get_where($table, $where);
  }

  function update_data($where, $data, $table)
  {
    $this->db->where($where);
    $this->db->update($table, $data);
  }

  function pilih_film()
  {
    $this->db->order_by('judul', 'asc');
    $result = $this->db->get('movie');

    $dd[''] = 'Please Select';
    if($result->num_rows() > 0){
      foreach($result->result() as $row){
        $dd[$row->judul] = $row->judul;
      }
    }
    return $dd;
  }

}
