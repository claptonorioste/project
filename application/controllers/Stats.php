<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Stats extends CI_Controller {

        public function index(){
            $this->check_logged();
            $this->not_log_in("public/contents-css/login.css");
        }
        public function login_validation()
        {       
            $this->load->library('form_validation');

            $this->form_validation->set_rules('username','Username','required');
            $this->form_validation->set_rules('password','Password','required');

            if($this->form_validation->run()){

                $user = $this->input->post('username');
                $pass = $this->input->post('password');
                $this->load->model('Login_model','login');

                if($this->login->try_login($user,$pass)->num_rows()>0){
                    $result = $this->login->try_login($user,$pass)->result();
                    $this->setSession($result);
                    // if($this->session->userdata('user_type')=='member'){
                    //     redirect('menu');
                    // }else if($this->session->userdata('user_type')=='admin'){
                    //     redirect('admin');
                    // }
                }
                else{
                     $this->setFlashData(array("error_msg" => "Invalid Username/Password!"));
                }
            }
            else{
                $this->setFlashData(array("error_msg" => "The Username and Password field is required!"));
                
            }
            redirect();

        }
        public function register(){
            $this->load->view('templates/header');
            $this->load->view('pages/register');
            $this->load->view('templates/footer');
        }
       

//Login Functions

        public function not_log_in($css_loc){

            $data = array("location" => $css_loc);

            $this->load->view('templates/header',$data);
            $this->load->view('pages/login');
            $this->load->view('templates/footer');
        }
        private function setFlashData($array){
            $this->session->set_flashdata($array);
        }

        private function setSession($array){
            $data = array(
                'id'  => $array[0]->user_account_id,
                'user_type' => $array[0]->user_type,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($data);
        }
        private function check_logged(){
            if($this->session->has_userdata('logged_in')){
                if($this->session->userdata('user_type')=='member'){
                    redirect('menu');
                }else if($this->session->userdata('user_type')=='admin'){
                    redirect('admin');
                }
                else if($this->session->userdata('user_type')=='moderator'){
                    redirect('menu');
                }
            }
            else{
                return true;
            }
        }


}