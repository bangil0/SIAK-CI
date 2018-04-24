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


    public function insert_user()
    {
        $this->load->helper('string');
        $_SESSION['token'] = random_string('alnum', 16);

        $data = [
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'token'   => $_SESSION['token'],
                'role'   => 1
        ];

        $this->db->insert('users', $data);
    }

    public function get_user($key, $value)
    {
        $query = $this->db->get_where('users', array($key=>$value));
        if(!empty($query->row_array())) {
            return $query->row_array();
        }

        return false;
    }

    public function update_role($user_id, $role_nr)
    {
        $data = array('role' => $role_nr);
        $this->db->where('id', $user_id);
        return $this->db->update('users', $data);
    }

    public function is_LoggedIn()
    {
        if(!isset($_SESSION['logged_in'])) {
            return false;
        }

        return true;
    }

    public function is_Admin_LoggedIn()
    {
        if(!isset($_SESSION['admin_logged_in'])) {
            return false;
        }

        return true;
    }

    public function checkPassword($email, $password)
    {
        $hash = $this->get_user('email', $email)['password'];
        if (password_verify($password, $hash)) {
            return true;
        }

        return false;
    }


}
