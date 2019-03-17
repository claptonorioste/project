<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_model extends CI_Model {

        public function try_login($user,$pass) {
       	 	$this->db->where('username',$user);
            $this->db->where('password',$pass);
            $query = $this->db->get('tbluser_accounts');
            return $query;
            
        }

        public function getUserID($user,$pass){
            $this->db->where('username',$user);
            $this->db->where('password',$pass);
            $query = $this->db->get('tbluser_accounts');
            $res = $query->row();
            return $res->user_account_id;
        }

        public function register_account($user,$pass){
            $data = array(
                'username' => $user,
                'password' => $pass,
                'user_type' => "member"
            );
            $this->db->insert('tbluser_accounts', $data);

        }
        public function register_profile($id,$fname,$mname,$lname,$age,$phone,$email,$pob,$dob,$nationality,$sex,$civil,$blood,$home){
            $data = array(
                'user_account_id' => $id,
                'first_name' => $fname,
                'middle_name' => $mname,
                'last_name' => $lname,
                'age' => $age,
                'phone_no' => $phone,
                'email_address' => $email,
                'birth_place' => $pob,
                'date_of_birth' => $dob,
                'nationality' => $nationality,
                'sex' => $sex,
                'civil_status' => $civil,
                'blood_type' => $blood,
                'home_address' => $home
            );
            $this->db->insert('tbluser_profile', $data);
        }
        public function register_educ($id,$e_year,$e_address,$e_remark,$hs_year,$hs_address,$hs_remarks,$c_year,$c_address,$c_remarks,$p_year,$p_address,$p_remarks){
            $data = array(
                'user_account_id' => $id,
                'elementary_year' => $e_year,
                'elementary_address' => $e_address,
                'elementary_remarks' => $e_remark,
                'highschool_year' => $hs_year,
                'highschool_address' => $hs_address,
                'highschool_remarks' => $hs_remarks,
                'college_year' => $c_year,
                'college_address' => $c_address,
                'college_remarks' => $c_remarks,
                'post_grad_year' => $p_year,
                'post_grad_address' => $p_address,
                'post_grad_remarks' => $p_remarks,
            );
            $this->db->insert('tbluser_education', $data);
        }
        public function check_exist($user){
            $this->db->where('username',$user);
            $query = $this->db->get('tbluser_accounts');
            if($query->num_rows() > 0){
                return true;
            }else{
                return false;
            }

        }

        	
		
}