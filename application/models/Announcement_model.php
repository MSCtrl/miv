<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


    class Announcement_model extends CI_Model {


        //
        public function __construct() {
            parent::__construct();
            $this->load->database();
        }

        public function get_announcement() {
            $uptime = $this->config->item('uptime');
            $sql = "SELECT * FROM announcements WHERE ance_date <= '".date('Y-m-d')." 00:00:00' AND ance_date >= '".date('Y-m-d', strtotime('-'.$uptime .' days'))." 00:00:00'";
            $query = $this->db->query($sql);
            $str = '';
            foreach ($query->result() as $row)
            {
                $str .= "<p>" . $row->title . "</p>";
                $str .= "<p>" . $row->contents . "</p>";
                $str .= "<p>" . $row->ance_date . "</p>";
                $str .= "<p>" . $row->ance_time . "</p>";
                $str .= "<p>" . $row->author . "</p>";
                $str .= "<img src=\"data:image/jpeg;base64,".base64_encode($row->images)."\" />";
            }
            return $str;
        }

        public function get_announcement2() {
            $uptime = $this->config->item('uptime');
            $sql = "SELECT * FROM announcements WHERE ance_date <= '".date('Y-m-d')." 00:00:00' AND ance_date >= '".date('Y-m-d', strtotime('-'.$uptime .' days'))." 00:00:00'";
            $query = $this->db->query($sql);
            $str = '';
            foreach ($query->result() as $row)
            {
                $str .= "<div class=\"post\">";
                    $str .= "<h3 class=\"post-title\">" . $row->title . "</h3>";

                    $str .= "<img class=\"post-img\" src=\"data:image/jpeg;base64,".base64_encode($row->images)."\" />";
                    $str .= "<p class=\"post-text\">" . $row->contents . "</p>";

                    $str .= "<p class=\"post-author\">" . $row->author . " " . $row->ance_date . " " . $row->ance_time . "</p>";

                $str .= "</div>";
            }
            return $str;
        }
        //


    }


?>