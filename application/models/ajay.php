<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajay extends CI_Model {

    public function getData()
    {
        $this->load->database();
        $q = $this->db->query("SELECT * FROM submittingpage ");

        $result = $q->result();
        echo "<pre>";
        print_r($result);
        // return $q->result_array();
    }



}
