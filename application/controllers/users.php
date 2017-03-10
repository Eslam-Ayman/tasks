<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class users extends CI_Controller {

    public function index() {
        $data['nav'] = 'partial/_visitorNav';
        $data['content'] = 'contentsHome/home';
        $this->load->view('index', $data);
    }

    public function signUp() {

        if (isset($this->session->userdata['userData'])) {
            redirect(base_url('task'));
        }

        $errors = $this->session->flashdata('errorsSignUP');
        $data['errors'] = $errors;
        $data['nav'] = 'partial/_visitorNav';
        $data['content'] = 'contentsHome/signup';
        $this->load->view('index', $data);
    }

    public function addUser() {

        $this->form_validation->set_rules('username', 'user name', 'required|min_length[7]|max_length[20]');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'password', 'required|matches[confirm_password]');
        $this->form_validation->set_rules('confirm_password', 'confirm password', 'required');
        $this->form_validation->set_rules('birthdate', 'birth date', 'required|min_length[6]');
        $this->form_validation->set_rules('phone', 'phone', 'required|exact_length[11]');
        $this->form_validation->set_rules('country', 'country', 'required|min_length[3]');
        $this->form_validation->set_rules('agree', 'agree', 'required');

        if ($this->form_validation->run() == FALSE) {
            $errors = validation_errors();

            $this->session->set_flashdata('errorsSignUP', $errors);
            redirect(base_url('users/signUp'));
        } else {

            $data = array(
                'username' => $this->security->xss_clean($_POST['username']),
                'email' => $this->security->xss_clean($_POST['email']),
                'password' => $this->security->xss_clean($_POST['password']),
                'birth' => $this->security->xss_clean($_POST['birthdate']),
                'phone' => $this->security->xss_clean($_POST['phone']),
                'country' => $this->security->xss_clean($_POST['country'])
            );

            $id = $this->userModel->addUser($data);
            $data['id'] = $id;
            $this->session->set_userdata('userData', $data);

            redirect(base_url('task'));
        }
    }

    public function signIn() {

        if (isset($this->session->userdata['userData'])) {
            redirect(base_url('task'));
        }

        $data['errorsSignIn'] = $this->session->flashdata('errorsSignIn');
        $data['errorsLogin'] = $this->session->flashdata('errorsLogin');

        $data['nav'] = 'partial/_visitorNav';
        $data['content'] = 'contentsHome/signin';
        $this->load->view('index', $data);
    }

    public function login() {

        $this->form_validation->set_rules('email', 'email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $errors = validation_errors();

            $this->session->set_flashdata('errorsSignIn', $errors);
            redirect(base_url('users/signIn'));
        } else {

            $data = array(
                'email' => $this->security->xss_clean($_POST['email']),
                'password' => $this->security->xss_clean($_POST['password']),
            );
            $data = $this->userModel->login($data);
            if ($data) {

                $this->session->set_userdata('userData', $data);
                redirect(base_url('task'));
            } else {

                $this->session->set_flashdata('errorsLogin', 'invalid username or password');
                redirect(base_url('users/signIn'));
            }
        }
    }

    public function signOut() {
        $this->session->unset_userdata('userData', $sess_array);
        redirect(base_url('users/signIn'));
    }
    
    public function profile(){
        echo 'profile';
    }

}

?>