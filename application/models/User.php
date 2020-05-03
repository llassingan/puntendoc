  <?php
  defined('BASEPATH') OR exit('No direct script access allowed');
 
  class User extends CI_Model{

       public function signup($data)
       {
            return $this->db->insert('tbl_users',$data);
            
       }
       function check_duplicate($table, $field1)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field1);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }
    }
  }

