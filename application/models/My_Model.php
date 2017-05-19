<?php
class My_Model extends CI_Model {

  public function loginadmin($username, $password){  
    
    $this->db->select('*');
    $this->db->from('admin');
    $this->db->where('username', $username);
    $this->db->where('password', $password);
    

    $query = $this->db->get();

    if ($query->num_rows() == 1) {

     return true;
    }
    else{
     return false;
    } 
  }

  public function addData($data) {
    $this->db->insert('komentar', $data);
  }

  public function getDataKomentar() {
    $data = $this->db->select('*')->from('komentar')->get();
    return $data->result_array();
  }

  public function getDataAdmin() {
    $data = $this->db->select('password')->from('admin')->get();
    foreach ($data->result_array() as $x)
    {
      return $x;
    }
  }

  public function updatePassword($username, $passwordbaru){
    $this->db->set('password', $passwordbaru);
    $this->db->where('username', $username);
    $this->db->update('admin');
  }

  public function deleteData($tableName, $where){
    $res = $this->db->delete($tableName, $where);
    return $res;
  }

  public function delete_item($item){
    $this->db->where_in('Name', $item);
    $this->db->delete('komentar');
  }

}
?>
