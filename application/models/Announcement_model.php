<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


    class Announcement_model extends CI_Model {


        //
        public function __construct() {
            parent::__construct();
            $this->load->database();
            $this->config->load('announcement');
        }

        public function get_announcement() {
            $uptime = $this->config->item('uptime');
            $sql = "SELECT * FROM announcements WHERE ance_date <= '".date('Y-m-d')." 00:00:00' AND ance_date >= '".date('Y-m-d', strtotime('-'.$uptime .' days'))." 00:00:00'";
            $query = $this->db->query($sql);
            
            foreach ($query->result() as $row)
            {
                echo "<p>" . $row->title . "</p>";
                echo "<p>" . $row->contents . "</p>";
                echo "<p>" . $row->ance_date . "</p>";
                echo "<p>" . $row->ance_time . "</p>";
                echo "<p>" . $row->author . "</p>";
                echo "<img src=\"data:image/jpeg;base64,".base64_encode($row->images)."\" />";
            }
            return $result;
        }
        //


    }


?>