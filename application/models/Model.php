<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {

    public function selectdetails($table) {
        $query = $this->db->get($table);
        return $query->result_array();
    }

}

?>