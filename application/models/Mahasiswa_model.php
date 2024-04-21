<?php
class Mahasiswa_model extends CI_Model {
 public function __construct() {
 $this->load->database();
 }

 public function get_all_mahasiswa() {
 $query = $this->db->get('mahasiswa');
 return $query->result_array();
 }

 public function get_mahasiswa_by_nim($nim) {
 $query = $this->db->get_where('mahasiswa', array('nim' => $nim));
 return $query->row_array();
 }

 public function insert_mahasiswa($data) {
 $this->db->insert('mahasiswa', $data);
 return $this->db->insert_id();
 }

 public function update_mahasiswa($nim, $data) {
 $this->db->where('nim', $nim);
 $this->db->update('mahasiswa', $data);
 return $this->db->affected_rows();
 }

 public function delete_mahasiswa($nim) {
 $this->db->where('nim', $nim);
 $this->db->delete('mahasiswa');
 return $this->db->affected_rows();
 }
}

?>