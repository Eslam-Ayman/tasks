<?php

class Home extends CI_Controller {

    public function index() {

        $this->load->view('index');
    }

    public function main() {
         $this->load->view('home');
    }

    public function signup() {
        $this->load->view('signup');
    }

    public function signin() {
        $this->load->view('signin');
    }

}

?>