<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


    class General extends CI_Controller {


        public function __construct() {
            parent::__construct();
            $this->config->load('announcement');
            $this->load->model('announcement_model', 'ance_model');
        }

        public function index() {
            if (!isset($_SESSION['users_mivdb_id']))
            {
                redirect(base_url());
            } else {
                $this->load->view('cmenu' , array('stylesheet'=>'miv.general.css')); /* cmenu: constant menu */
                $this->load->view('general');
            }
        }

        public function logout() {
            $this->session->sess_destroy();
            redirect(base_url());
        }

        public function load_announcement() {
            // Read configuration
            $uptime = $this->config->item('uptime');

            // Pull data from database
            $ance_list = $this->ance_model->get_announcement($uptime);

            // Loop each set
            echo $ance_list;
            // 
        }


    }


?>