<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function index(){
        $data['title'] = "List Tes";

        $this->load->view("pages/blank", $data);
    }
}

/* End of file Home.php */
