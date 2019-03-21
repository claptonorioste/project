<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Manager extends CI_Controller {

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
        $data['location'] = 'public/contents-css/user.css';
        $this->load->view('srtdash/index2');
    }

    private function check_logged(){
        if($this->session->has_userdata('logged_in')==false){
                redirect();
        }
        else{
            return true;
        }
    }
}
