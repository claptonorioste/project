<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Register extends CI_Controller {
	 public function index(){
	        $data['location'] = "public/contents-css/profile.css";
            $this->load->view('templates/header',$data);
            $this->load->view('pages/registers');
            $this->load->view('templates/footer');
        }

        public function register_stats($error,$stats)
        {     
        	$data['location'] = "public/contents-css/profile.css";
            $data['error_message'] = $error;
            $data['stats'] = $stats;
            $this->load->view('templates/header',$data);
            $this->load->view('pages/register-submit',$data);
            $this->load->view('templates/footer');
        }
        public function register_submit()
        {       
                $this->load->library('form_validation');
                $this->form_validation->set_rules('username','Username','required');
                $this->form_validation->set_rules('password','Password','required');
                if($this->form_validation->run()){
                        $this->load->model('Login_model');
                        $user = $this->input->post('username');
                        $pass = $this->input->post('password');
                        $fname = $this->input->post('first_name');  
                        $mname = $this->input->post('middle_name');
                        $lname = $this->input->post('last_name');
                        $pob = $this->input->post('place_of_birth');
                        $yr =  $this->input->post('year');
                        $mn =  $this->input->post('month');
                        $dy =  $this->input->post('day');
                        $dob = $yr."-".$mn."-".$dy;
                        if($mn > date('m')) {
                            $age = date('Y')-$yr-1;
                        }
                        else if($mn == date('m') && $dy > date('d'))
                        {
                            $age = date('Y')-$yr-1;
                        }
                        else{
                            $age = date('Y')-$yr;
                        }
                        $nationality = $this->input->post('place_of_birth');
                        $sex = $this->input->post('sex');
                        $civil = $this->input->post('civil_status');
                        $blood = $this->input->post('blood_type');
                        $home = $civil = $this->input->post('home_address');
                        $phone = $this->input->post('phone_no');
                        $email = $this->input->post('email_address');

                        //Education data!!!!

                        $e_year = $this->input->post('e_year');
                        $e_address = $this->input->post('e_address');
                        $e_remarks = $this->input->post('e_remarks');  
                        $hs_year = $this->input->post('hs_year');
                        $hs_address = $this->input->post('hs_address');
                        $hs_remarks = $this->input->post('hs_remarks');
                        $c_year =  $this->input->post('c_year');
                        $c_address =  $this->input->post('c_address');
                        $c_remarks =  $this->input->post('c_remarks');
                        $p_year =  $this->input->post('post_year');
                        $p_address =  $this->input->post('p_address');
                        $p_remarks =  $this->input->post('p_remarks');



                        if($this->Login_model->check_exist($user)==false){
                            $this->Login_model->register_account($user,$pass);
                            $id = $this->Login_model->getUserId($user,$pass);
                            //INSERT TABLE PROFILE
                            $this->Login_model->register_profile($id,$fname,$mname,$lname,$age,$phone,$email,$pob,$dob,$nationality,$sex,$civil,$blood,$home);
                            //INSERT TABLE EDUCATION
                             $this->Login_model->register_educ($id,$e_year,$e_address,$e_remarks,$hs_year,$hs_address,$hs_remarks,$c_year,$c_address,$c_remarks,$p_year,$p_address,$p_remarks);
                            $this->register_stats('You are now registered',1);


                        }
                        else{
                            $this->register_stats('Username already exist',0);;
                        }
               
                        

        }else{
            $this->register_stats('Please input required fields!',0);
        }
    }

}