<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{
	public function __construct(){
		parent::__construct();
        $this->load->library('bcrypt');
	}

	public function user_register($input){
		$this->load->helper('site_helper');
		$encrypt_password = $this->bcrypt->hash_password($input['password']);
		$array_user = array(
				'username' => $input['username'],
				'password' => $encrypt_password,
				'active_since' => date('Y-m-d')
			);

		$this->db->insert('tbl_user', $array_user);
	}

	public function exist_row_check($field,$data){
		$this->db->where($field,$data);
		$this->db->from('tbl_user');
		$query = $this->db->get();
		return $query->num_rows();
	}

    function getUserByLogin($login, $password) {
        $this->db->where('username',$login);

        $result = $this->getUsers($password);

        if (!empty($result)) {
            return $result;
        } else {
            return null;
        }
    }

    function getUsers($password) {
        $query = $this->db->get('tbl_user');

        if ($query->num_rows() > 0) {

            $result = $query->row_array();

            if ($this->bcrypt->check_password($password, $result['password'])) {
                //We're good
                return TRUE;
            } else {
                //Wrong password
                return FALSE;
            }

        } else {
            return FALSE;
        }
    }

        public function get_user_detail($username){
            $this->db->where("username", $username);
            $query = $this->db->get('tbl_user');

            if($query->num_rows() > 0){
                $data = $query->row();
                $query->free_result();
            }
            else{
                $data = NULL;
            }

            return $data;
        }



}
