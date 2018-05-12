<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


    class Login extends CI_Controller {


        public function index() {
            // Validation rules
            $this->form_validation->set_rules('username', 'username', 'required');
            $this->form_validation->set_rules('password', 'password', 'required');


            $this->load->library('CI_log');

            /*
            | If User submits any empty required inputs, return User to the Login Page.
            | Otherwise, scrutinize the inputs before allowing log ins.
            */
            if ($this->form_validation->run() == FALSE)
            {
                $data['error'] = null;
                $this->load->view('login_page', $data);
            }
            else
            {
                // Accept the username and password to be validated
                $credentials['username'] = $this->input->post('username');
                $credentials['password'] = $this->input->post('password');

                /*
                | If the Model verifies the credentials to be true, initiate the session,
                | and redirect User to Home Page. Otherwise, return User to the Login Page
                | and display the reason.
                */
                if ($this->users_model->verify($credentials)) {

                    /*
                    | This session data act as access pass in the System domain.
                    */
                    $userpass = $this->users_model->getsessiondata($credentials);

                    $this->session->set_userdata($userpass);

                    $message = 'Logged on successfully';
                    log_message('status', '@'.$credentials['username'] . ' ' . $message);
                    $this->session->set_userdata('message', $message);

                    if(!isset($_SESSION))
                    {
                        session_start();
                    }
                    redirect(base_url().'general');
                } else {
                    $data['error'] = "Incorrect login.";
                    $this->load->view('login_page', $data);
                }
            }
        }


    }


?>