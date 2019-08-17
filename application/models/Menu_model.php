<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
    public function getUser()
    {
        $query = "SELECT `user`.`name_user`, `user`.`institution_user`, `user`.`email`, `user`.`is_active`, `user_role`.`role`
                  FROM `user` LEFT JOIN `user_role`
                  ON `user`.`role_id` = `user_role`.`id_role`
                 ";

        return $this->db->query($query)->result_array();
    }

    public function setRole()
    {
        $query = "SELECT *
                  FROM `user_role`
                  ";

        return $this->db->query($query)->result_array();
    }

    public function getDocument()
    {
        $query = "SELECT `document`.`title_document`, `document`.`file_document`, `document`.`upload_date`, `category`.`category`, `detail_category`.`detail_category`, `sub_category`.`sub_category`
                  FROM `document`
                  LEFT JOIN `category` ON `document`.`category_id` = `category`.`id_category`
                  LEFT JOIN `detail_category` ON `document`.`det_category_id` = `detail_category`.`id_det_category`
                  LEFT JOIN `sub_category` ON `document`.`sub_category_id` = `sub_category`.`id_sub_category`
                 ";

        return $this->db->query($query)->result_array();
    }
}
