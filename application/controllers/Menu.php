<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Menu extends CI_Controller {

    public function index(){
        $this->check_logged();
        $this->main_contents();
    }
    //menu options
    public function profile(){
        $this->check_logged();
        $this->profile_contents();
    }

    public function logout(){
        session_destroy();
        redirect();
    }

    //contents
    private function check_logged(){
        if($this->session->has_userdata('logged_in')==false){
                redirect();
        }
        else{
            return true;
        }
    }

    private function main_contents(){
        $data['location'] = 'public/contents-css/user.css';
        $this->load->view('templates/header',$data);
        $this->load->view('pages/main-menu');
        $this->load->view('templates/footer');
    }

    private function profile_contents(){
        $user = $this->session->userdata('id');
        $this->load->model('Users_model');
        $data['profileinfo'] = $this->Users_model->getProfile($user);
        $data['educinfo'] = $this->Users_model->getEduc($user);
        $data['familyinfo'] = $this->Users_model->getFbg($user);
        $data['businessinfo'] = $this->Users_model->getBus($user);
        $data['empinfo'] = $this->Users_model->getEmp($user);
        $data['location'] = "public/contents-css/profile.css";
        $this->load->view('templates/header',$data);
        $this->load->view('pages/user-dashboard',$data);
        $this->load->view('templates/footer');
    }

}
