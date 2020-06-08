<?php 

class admin extends CI_Model{
    function add_data($table,$data){
        $daftar= $this->db->insert($table,$data);
        if($daftar){
            return true;
        }
        else{
            return false;
        }
    }
    
    function cek_waktu($waktu,$table){
        $this->db->where('waktu',$waktu);
        $cek = $this->db->get($table)->result_array();
        if(isset($cek[0])){
            return true;
        }
        else{
            return false;
        }
    }
    public function get_data($table)
	{
        $data = $this->db->get($table);
		return $data->result_array();
	}
    public function delete_data($waktu,$table)
	{		
        $this->db->where('waktu',$waktu);
		return $this->db->delete($table);
	}
    public function get_data_edit($waktu,$table){
        $this->db->where('waktu',$waktu);
        $data = $this->db->get($table);
		return $data->result_array();
    }
    function edit_data($table,$waktu,$data){
        $this->db->where('waktu', $waktu);
        $update = $this->db->update($table,$data);

        if ($update){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    function delete1(){
        $this->db->truncate('sanblast');
        $this->db->truncate('phospating');
        $this->db->truncate('bonding');
        $this->db->truncate('pressing');
        $this->db->truncate('assembly1');
        $this->db->truncate('machining');
        $this->db->truncate('frictionwelding');
        $this->db->truncate('painting');
        $this->db->truncate('assembly2');
    }
    function delete2(){
        $this->db->truncate('sanblast2');
        $this->db->truncate('phospating2');
        $this->db->truncate('bonding2');
        $this->db->truncate('pressing2');
        $this->db->truncate('assembly1_2');
        $this->db->truncate('machining2');
        $this->db->truncate('frictionwelding2');
        $this->db->truncate('painting2');
        $this->db->truncate('assembly2_2');
    }
}

?>