<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {

	public function index(){
		$this->check_logged();
      	$this->main_contents();
    }
    //menu options

    public function logout(){
    	session_destroy();
    	redirect();
    }




    private function main_contents(){
<<<<<<< HEAD
=======
        $data['location'] = 'public/contents-css/user.css';
>>>>>>> 5c8c9c8a3bf6416514803cf70fdaac1082585d9b
        $this->load->view('srtdash/index');
    }

    private function check_logged(){
        if($this->session->has_userdata('logged_in')==false){
                redirect();
        }
        else{
            if($this->session->has_userdata('user_type')=='cashier'){
                redirect('cashier');
            }
            return true;
        }
    }
}
