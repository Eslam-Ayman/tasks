<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class task extends CI_Controller {

    public function index() {

        if (!isset($this->session->userdata['userData'])) {
            redirect(base_url('users/signIn'));
        }

        $data['nav'] = 'partial/_userNav';
        $data['content'] = 'contentsProfile/inner';
        $data['innerContent'] = 'contentsProfile/must';

        $this->load->view('index', $data);
    }

    public function mustDo() {

        if (!isset($this->session->userdata['userData'])) {
            redirect(base_url('users/signIn'));
        }

        $data['nav'] = 'partial/_userNav';
        $data['innerContent'] = 'contentsProfile/must';
        $data['content'] = 'contentsProfile/inner';
        $this->load->view('index', $data);
    }

    public function done() {

        if (!isset($this->session->userdata['userData'])) {
            redirect(base_url('users/signIn'));
        }

        $data['nav'] = 'partial/_userNav';
        $data['innerContent'] = 'contentsProfile/done';
        $data['content'] = 'contentsProfile/inner';
        $this->load->view('index', $data);
    }

    public function trash() {

        if (!isset($this->session->userdata['userData'])) {
            redirect(base_url('users/signIn'));
        }

        $data['nav'] = 'partial/_userNav';
        $data['innerContent'] = 'contentsProfile/trash';
        $data['content'] = 'contentsProfile/inner';
        $this->load->view('index', $data);
    }

    public function members() {

        if (!isset($this->session->userdata['userData'])) {
            redirect(base_url('users/signIn'));
        }


        $data['nav'] = 'partial/_userNav';
        $data['innerContent'] = 'contentsProfile/members';
        $data['content'] = 'contentsProfile/inner';
        $this->load->view('index', $data);
    }

    public function comments() {

        if (!isset($this->session->userdata['userData'])) {
            redirect(base_url('users/signIn'));
        }

        $data['nav'] = 'partial/_userNav';
        $data['innerContent'] = 'contentsProfile/comments';
        $data['content'] = 'contentsProfile/inner';
        $this->load->view('index', $data);
    }

    public function chat() {

        if (!isset($this->session->userdata['userData'])) {
            redirect(base_url('users/signIn'));
        }

        $data['nav'] = 'partial/_userNav';
        $data['innerContent'] = 'contentsProfile/chat';
        $data['content'] = 'contentsProfile/inner';
        $this->load->view('index', $data);
    }

}

?>