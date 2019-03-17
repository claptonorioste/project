<?php
class Users_model extends CI_Model {

        public function getProfile($profileID) {
        	$this->db->where('user_account_id',$profileID);
        	$query = $this->db->get('tbluser_profile');
        	return $query;
	}
	public function getEduc($profileID) {
        	$this->db->where('user_account_id',$profileID);
        	$query = $this->db->get('tbluser_education');
        	return $query;
	}
	public function getFbg($profileID) {
        	$this->db->where('user_account_id',$profileID);
        	$query = $this->db->get('tbluser_family_bg');
        	return $query;
	}
	public function getBus($profileID) {
        	$this->db->where('user_account_id',$profileID);
        	$query = $this->db->get('tbluser_business');
        	return $query;
	}
	public function getEmp($profileID) {
        	$this->db->where('user_account_id',$profileID);
        	$query = $this->db->get('tbluser_employment');
        	return $query;
	}
}