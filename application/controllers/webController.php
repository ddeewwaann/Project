<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class webController extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('account');
        $this->load->model('admin');
    }
	public function index()
	{    
        $this->load->view('login');	
	}
    public function login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $ceklogin = $this->account->login($username, $password);
        if($ceklogin){
            $sess_data = array(
            'logged_in' => 1,
            'role' => $ceklogin->role,
            'username' => $ceklogin->username
            );
            $this->session->set_userdata($sess_data);
            $this->session->set_flashdata('login_alert', 'login_berhasil');
            if($this->session->userdata('role')==1){
                redirect('webController/admin_dashboard');
            }
            else if($this->session->userdata('role')==2){
                redirect('webController/user_dashboard');
            }
        }
        else{
            $this->session->set_flashdata('login_alert', 'login_gagal');
            redirect('webController/index');
        }
    }
    public function admin_dashboard(){
        if($this->session->userdata('logged_in')==1){
            $this->load->view('admin_dashboard_view');
        }
        else{
            $this->load->view('login');
        }
        
    }

    public function admin_dashboard2(){
        if($this->session->userdata('logged_in')==1){
            $this->load->view('admin_dashboard_view2');
        }
        else{
            $this->load->view('login');
        }
        
    }
    
    public function add_data(){
        $actual = $this->input->post('actual',true);
        $planning = $this->input->post('planning',true);
        $reject = $this->input->post('reject',true);
        $waktu = $this->input->post('waktu',true);
        $data = array(
            "waktu"=> $this->input->post('waktu',true),
            "planning"=> $this->input->post('planning',true),
            "actual" => $this->input->post('actual',true),
            "ar"=> ($actual/$planning)*100,
            "reject"=> $this->input->post('reject',true),
            "rr"=> ($reject/$actual)*100,
            "problem" => $this->input->post('problem',true)
        );
        $table = $this->input->post('line',true);
        if($this->admin->cek_waktu($waktu,$table)){
            $this->session->set_flashdata('daftar_alert', 'registrasi_gagal');
            redirect('webController/admin_dashboard');
        }
        else{
            $this->admin->add_data($table, $data);
            $this->session->set_flashdata('daftar_alert', 'registrasi_berhasil');
            redirect('webController/admin_dashboard');
        }
       
    }
    public function add_data2(){
        $actual = $this->input->post('actual',true);
        $planning = $this->input->post('planning',true);
        $reject = $this->input->post('reject',true);
        $waktu = $this->input->post('waktu',true);
        $data = array(
            "waktu"=> $this->input->post('waktu',true),
            "planning"=> $this->input->post('planning',true),
            "actual" => $this->input->post('actual',true),
            "ar"=> ($actual/$planning)*100,
            "reject"=> $this->input->post('reject',true),
            "rr"=> ($reject/$actual)*100,
            "problem" => $this->input->post('problem',true)
        );
        $table = $this->input->post('line',true);
        if($this->admin->cek_waktu($waktu,$table)){
            $this->session->set_flashdata('daftar_alert', 'registrasi_gagal');
            redirect('webController/admin_dashboard2');
        }
        else{
            $this->admin->add_data($table, $data);
            $this->session->set_flashdata('daftar_alert', 'registrasi_berhasil');
            redirect('webController/admin_dashboard2');
        }
       
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('webController/index');
    }
    
    public function user_dashboard(){
        if($this->session->userdata('logged_in')==1){
            $sanblast = 'sanblast';
            $data['sanblast'] = $this->admin->get_data($sanblast);
            $phospating = 'phospating';
            $data['phospating'] = $this->admin->get_data($phospating);
            $bonding = 'bonding';
            $data['bonding'] = $this->admin->get_data($bonding);
            $pressing = 'pressing';
            $data['pressing'] = $this->admin->get_data($pressing);
            $assembly1 = 'assembly1';
            $data['assembly1'] = $this->admin->get_data($assembly1);
            $machining = 'machining';
            $data['machining'] = $this->admin->get_data($machining);
            $frictionwelding = 'frictionwelding';
            $data['frictionwelding'] = $this->admin->get_data($frictionwelding);
            $painting = 'painting';
            $data['painting'] = $this->admin->get_data($painting);
            $assembly2 = 'assembly2';
            $data['assembly2'] = $this->admin->get_data($assembly2);
            $this->load->view('user_dashboard_view',$data);
        }
        else{
            $this->load->view('login');
        }
        
    }
    public function user_dashboard2(){
        if($this->session->userdata('logged_in')==1){
            $sanblast = 'sanblast2';
            $data['sanblast'] = $this->admin->get_data($sanblast);
            $phospating = 'phospating2';
            $data['phospating'] = $this->admin->get_data($phospating);
            $bonding = 'bonding2';
            $data['bonding'] = $this->admin->get_data($bonding);
            $pressing = 'pressing2';
            $data['pressing'] = $this->admin->get_data($pressing);
            $assembly1 = 'assembly1_2';
            $data['assembly1'] = $this->admin->get_data($assembly1);
            $machining = 'machining2';
            $data['machining'] = $this->admin->get_data($machining);
            $frictionwelding = 'frictionwelding2';
            $data['frictionwelding'] = $this->admin->get_data($frictionwelding);
            $painting = 'painting2';
            $data['painting'] = $this->admin->get_data($painting);
            $assembly2 = 'assembly2_2';
            $data['assembly2'] = $this->admin->get_data($assembly2);
            $this->load->view('user_dashboard_view2',$data);
        }
        else{
            $this->load->view('login');
        }
    }
    public function admin_delete_edit(){
        if($this->session->userdata('logged_in')==1){
            $sanblast = 'sanblast';
            $data['sanblast'] = $this->admin->get_data($sanblast);
            $phospating = 'phospating';
            $data['phospating'] = $this->admin->get_data($phospating);
            $bonding = 'bonding';
            $data['bonding'] = $this->admin->get_data($bonding);
            $pressing = 'pressing';
            $data['pressing'] = $this->admin->get_data($pressing);
            $assembly1 = 'assembly1';
            $data['assembly1'] = $this->admin->get_data($assembly1);
            $machining = 'machining';
            $data['machining'] = $this->admin->get_data($machining);
            $frictionwelding = 'frictionwelding';
            $data['frictionwelding'] = $this->admin->get_data($frictionwelding);
            $painting = 'painting';
            $data['painting'] = $this->admin->get_data($painting);
            $assembly2 = 'assembly2';
            $data['assembly2'] = $this->admin->get_data($assembly2);
            $this->load->view('admin_delete_edit',$data);
        }
        else{
            $this->load->view('login');
        }
    }
    public function admin_delete_edit2(){
        if($this->session->userdata('logged_in')==1){
            $sanblast = 'sanblast2';
            $data['sanblast'] = $this->admin->get_data($sanblast);
            $phospating = 'phospating2';
            $data['phospating'] = $this->admin->get_data($phospating);
            $bonding = 'bonding2';
            $data['bonding'] = $this->admin->get_data($bonding);
            $pressing = 'pressing2';
            $data['pressing'] = $this->admin->get_data($pressing);
            $assembly1 = 'assembly1_2';
            $data['assembly1'] = $this->admin->get_data($assembly1);
            $machining = 'machining2';
            $data['machining'] = $this->admin->get_data($machining);
            $frictionwelding = 'frictionwelding2';
            $data['frictionwelding'] = $this->admin->get_data($frictionwelding);
            $painting = 'painting2';
            $data['painting'] = $this->admin->get_data($painting);
            $assembly2 = 'assembly2_2';
            $data['assembly2'] = $this->admin->get_data($assembly2);
            $this->load->view('admin_delete_edit2',$data);
        }
        else{
            $this->load->view('login');
        }
    }
    public function export(){
        $sanblast = 'sanblast';
        $data['sanblast'] = $this->admin->get_data($sanblast);
        $phospating = 'phospating';
        $data['phospating'] = $this->admin->get_data($phospating);
        $bonding = 'bonding';
        $data['bonding'] = $this->admin->get_data($bonding);
        $pressing = 'pressing';
        $data['pressing'] = $this->admin->get_data($pressing);
        $assembly1 = 'assembly1';
        $data['assembly1'] = $this->admin->get_data($assembly1);
        $machining = 'machining';
        $data['machining'] = $this->admin->get_data($machining);
        $frictionwelding = 'frictionwelding';
        $data['frictionwelding'] = $this->admin->get_data($frictionwelding);
        $painting = 'painting';
        $data['painting'] = $this->admin->get_data($painting);
        $assembly2 = 'assembly2';
        $data['assembly2'] = $this->admin->get_data($assembly2);
        $this->load->view('export',$data);
    }
    public function export2(){
        $sanblast = 'sanblast2';
        $data['sanblast'] = $this->admin->get_data($sanblast);
        $phospating = 'phospating2';
        $data['phospating'] = $this->admin->get_data($phospating);
        $bonding = 'bonding2';
        $data['bonding'] = $this->admin->get_data($bonding);
        $pressing = 'pressing2';
        $data['pressing'] = $this->admin->get_data($pressing);
        $assembly1 = 'assembly1_2';
        $data['assembly1'] = $this->admin->get_data($assembly1);
        $machining = 'machining2';
        $data['machining'] = $this->admin->get_data($machining);
        $frictionwelding = 'frictionwelding2';
        $data['frictionwelding'] = $this->admin->get_data($frictionwelding);
        $painting = 'painting2';
        $data['painting'] = $this->admin->get_data($painting);
        $assembly2 = 'assembly2_2';
        $data['assembly2'] = $this->admin->get_data($assembly2);
        $this->load->view('export',$data);
    }
    public function delete_data($waktu,$table){
        $this->admin->delete_data($waktu,$table);
        redirect('webController/admin_delete_edit');
    }
    public function delete_data2($waktu,$table){
        $this->admin->delete_data($waktu,$table);
        redirect('webController/admin_delete_edit2');
    }
    public function edit_getdata($waktu,$table){
        $data['edit']=$this->admin->get_data_edit($waktu,$table);
        $data['table']=$table;
        $this->load->view('admin_edit',$data);
    }
    public function edit_getdata2($waktu,$table){
        $data['edit']=$this->admin->get_data_edit($waktu,$table);
        $data['table']=$table;
        $this->load->view('admin_edit2',$data);
    }
    public function edit_data(){
        $waktu = $this->input->post('waktu');
        $planning = $this->input->post('planning');
        $actual = $this->input->post('actual');
        $ar = ($actual/$planning)*100;
        $rr = ($reject/$actual)*100;
        $reject = $this->input->post('reject');
        $problem = $this->input->post('problem');
        $table = $this->input->post('table');
        $data_update = array (
            'waktu' => $waktu,
            'planning'=> $planning,
            'actual'=> $actual,
            'ar'=>$ar,
            'reject'=>$reject,
            'rr'=>$rr,
            'problem'=>$problem,
    );
        $update = $this->admin->edit_data($table,$waktu,$data_update);
        if ($update) {
            $this->session->set_flashdata('verif_alert', 'verif_berhasil');
            redirect('webController/admin_delete_edit');
        } else {
            $this->session->set_flashdata('verif_alert', 'verif_gagal');
            redirect('webController/admin_delete_edit');
        }
        
    }
    public function edit_data2(){
        $waktu = $this->input->post('waktu');
        $planning = $this->input->post('planning');
        $actual = $this->input->post('actual');
        $ar = ($actual/$planning)*100;
        $rr = ($reject/$actual)*100;
        $reject = $this->input->post('reject');
        $problem = $this->input->post('problem');
        $table = $this->input->post('table');
        $data_update = array (
            'waktu' => $waktu,
            'planning'=> $planning,
            'actual'=> $actual,
            'ar'=>$ar,
            'reject'=>$reject,
            'rr'=>$rr,
            'problem'=>$problem,
    );
        $update = $this->admin->edit_data($table,$waktu,$data_update);
        if ($update) {
            $this->session->set_flashdata('verif_alert', 'verif_berhasil');
            redirect('webController/admin_delete_edit2');
        } else {
            $this->session->set_flashdata('verif_alert', 'verif_gagal');
            redirect('adminController/admin_delete_edit2');
        }
        
    }
    function delete1(){
        $this->admin->delete1();
        redirect('webController/admin_delete_edit');
    }
    function delete2(){
        $this->admin->delete2();
        redirect('webController/admin_delete_edit2');
    }
}


?>