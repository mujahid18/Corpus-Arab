<?php
class Upload_model extends CI_Model
{
    function setCategory()
    {
        $query = "SELECT *
                  FROM `category`
                 ";

        return $this->db->query($query)->result_array();
    }

    function setDetailCategory()
    {
        $query = "SELECT *
                  FROM `detail_category`
                 ";

        return $this->db->query($query)->result_array();
    }

    function inputDoc()
    {
        $this->db->insert('document');
    }
}
