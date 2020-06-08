<?php 

class account extends CI_Model{
    
    function login($id,$password){
        $this->db->where('username',$id);
        $this->db->where('password',$password);
        $result = $this->db->get('account');
        if($result->num_rows()==1){
            return $result->row(0);
        }else{
            return false;
        }
    }
}

?>