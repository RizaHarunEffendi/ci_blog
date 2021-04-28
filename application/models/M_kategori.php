<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kategori extends CI_Model {

     public function get_all()
     {
        return $this->db->get('tbl_kategori')->result_array();
     }

     public function insert($data)
     {
         return $this->db->insert('tbl_kategori', $data);
         
     }

     public function get_where($id)
     {
         return $this->db->get_where('tbl_kategori', ['id' => $id])->row_array();

     }

     public function update($id, $data)
     {
        return $this->db->update('tbl_kategori', $data, ['id' => $id]);
        
     }

     public function delete($id)
     {
         return $this->db->delete('tbl_kategori', ['id' => $id]);
         
     }

}

/* End of file M_kategori.php */
 ?>