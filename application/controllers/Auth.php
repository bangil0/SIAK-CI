<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Admin_model');
    }

    public function administrator()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'required|matches[password]');

        if ($this->form_validation->run() === false) {
            $this->load->view('layouts/header');
            $this->load->view('administrator');
        } else {
            $this->User_model->insert_user();//save user
            $this->send_email_verification($this->input->post('email'), $_SESSION['token']); //verifikasi email
            redirect('login');
        }
    }

    public function send_email_verification($email, $token)
    {
        $this->load->library('email');
        $this->email->from('sekolahkoding@test.com', 'Hilman Ramadhan');
        $this->email->to($email);
        $this->email->subject('register aplikasi auth local');
        $this->email->message("
                    Klik untuk konfirmasi pendaftaran
                    <a href='http://localhost:8888/tutorialSK/codeigniter/authentikasi/verify/$email/$token'>Konfirmasi Email</a>
                    ");
        $this->email->set_mailtype('html');
        $this->email->send();
    }

    public function verify_register($email, $token)
    {
        $user = $this->User_model->get_user('email', $email);

        //cek email ada atau tidak
        if(!$user)
          die('email not exists');

         if($user['token'] !== $token)
          die('token not match');

          //update user role
          $this->User_model->update_role($user['id'], 1);

          //set session
          $_SESSION['user_id']   = $user['id'];
          $_SESSION['logged_in'] = true;

          //redirect profile
          redirect('profile');
    }

    public function login()
    {
        if ($this->User_model->is_LoggedIn()) {
            redirect(base_url());
        }

        $this->form_validation->set_rules('email', 'Email', 'required|callback_checkEmail|callback_checkRole');
        $this->form_validation->set_rules('password', 'Password', 'required|callback_checkPassword');

        if ($this->form_validation->run() === false) {
            $this->load->view('auth/login');
        } else {
            $user = $this->User_model->get_user('email', $this->input->post('email'));

            //set session
             $_SESSION['user_id']   = $user['id'];
             $_SESSION['logged_in'] = true;

             //redirect profile
             redirect(base_url());
        }
    }

    public function admin()
    {
        if ($this->User_model->is_Admin_LoggedIn()) {
            redirect(base_url('administrator'));
        }

        $this->form_validation->set_rules('email', 'Email', 'required|callback_checkAdminEmail|callback_checkAdminRole');
        $this->form_validation->set_rules('password', 'Password', 'required|callback_checkAdminPassword');

        if ($this->form_validation->run() === false) {
            $this->load->view('auth/admin');
        } else {
            $user = $this->Admin_model->get_user('email', $this->input->post('email'));

            //set session
             $_SESSION['admin_id']   = $user['id'];
             $_SESSION['admin_logged_in'] = true;

             //redirect profile
             redirect(base_url('administrator'));
        }
    }

    public function checkEmail($email)
    {
        if (!$this->User_model->get_user('email', $email)) {
            $this->form_validation->set_message('checkEmail', 'email is not on database');
            return false;
        }

        return true;
    }

    public function checkAdminEmail($email)
    {
        if (!$this->Admin_model->get_user('email', $email)) {
            $this->form_validation->set_message('checkEmail', 'email is not on database');
            return false;
        }

        return true;
    }

    public function checkPassword($password)
    {
        $user = $this->User_model->get_user('email',$this->input->post('email'));

        if(!$this->User_model->checkPassword($user['email'], $password)) {
            $this->form_validation->set_message('checkPassword', 'password is incorrect');
            return false;
        }

        return true;
    }

    public function checkAdminPassword($password)
    {
        $user = $this->Admin_model->get_user('email',$this->input->post('email'));

        if(!$this->Admin_model->checkPassword($user['email'], $password)) {
            $this->form_validation->set_message('checkPassword', 'password is incorrect');
            return false;
        }

        return true;
    }

    public function checkAdminRole($email)
    {
        $user = $this->Admin_model->get_user('email', $email);
        if($user['role'] == 0) {
            $this->form_validation->set_message('checkRole', 'email is not actived yet');
            return false;
        }

        return true;
    }

    public function checkRole($email)
    {
        $user = $this->User_model->get_user('email', $email);
        if($user['role'] == 0) {
            $this->form_validation->set_message('checkRole', 'email is not actived yet');
            return false;
        }

        return true;
    }

    public function logout()
    {
        unset($_SESSION['user_id'], $_SESSION['logged_in']);
        redirect('login');
    }

    public function admin_logout()
    {
        unset($_SESSION['admin_id'], $_SESSION['admin_logged_in']);
        redirect('login');
    }

    public function forgetPassword()
    {
        //mengirimkan email , link/email/token
    }

    public function resetPassword($value='')
    {
        //password baru
        //password baru update ke database
        //redirect profile vs login
    }
}
