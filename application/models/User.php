  <?php
  defined('BASEPATH') OR exit('No direct script access allowed');
 
  class User extends CI_Model{

       public function signup($data)
       {
            return $this->db->insert('tbl_users',$data);
            
       }
  }

