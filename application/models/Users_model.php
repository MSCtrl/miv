<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


    class Users_model extends CI_Model {


        public function __construct() {
            parent::__construct();
            $this->load->database();
        }


        public function verify($credentials) {

            $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
            $result = $this->db->query($sql, array($credentials['username'], $credentials['password']));

            if ($result->first_row()) {
                return TRUE;
            } else {
                return FALSE;
            }
        }

        public function getsessiondata($credentials) {
            $sql = "SELECT users_mivdb_id, group_level, region FROM users WHERE username = '" . $credentials['username'] . "'";
            return $result = $this->db->query($sql)->row_array();
        }

        public function get_username($id) {
            $sql = "SELECT username FROM users WHERE users_mivdb_id = '" . $id . "'";
            return $result = $this->db->query($sql)->row()->username;
        }


    }


?>