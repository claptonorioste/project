<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cashier extends CI_Controller {

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
        $data = array('title' => "Cahshiering" );
        $this->load->view('templates/dashboard-header',$data);
        $this->load->view('pages/cashier');
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
