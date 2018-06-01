<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


    class Announcement extends CI_Controller {


        public function __construct() {
            parent::__construct();
            $this->config->load('announcement');
            $this->config->load('viewdependencies');
            $this->load->model('announcement_model', 'ance_model');
        }

        public function index() {
            if (!isset($_SESSION['users_mivdb_id']))
            {
                redirect(base_url());
            } else {
                $this->load->view('cmenu' , array('viewname'=>'announcement')); /* cmenu: constant menu */
                $this->load->view('announcement');
            }

            // Validation rules
            $this->form_validation->set_rules('title', 'title', 'required');
            $this->form_validation->set_rules('contents', 'contents', 'required');

        }

    }


?>