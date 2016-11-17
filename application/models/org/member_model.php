<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Name:  Feedback Model
 * Author: Rashida
 * Requirements: PHP5 or above
 *
 */
class Member_model extends Ion_auth_model {

    public function __construct() {
        parent::__construct();
    }

    /*
     * This method will add member survey
     * @param $additional_data,  data to be added
     * @author rashida sultana
     */

    public function add_survey($additional_data) {
        $data = $this->_filter_data($this->tables['surveys'], $additional_data);
        $this->db->insert($this->tables['surveys'], $data);
        $id = $this->db->insert_id();
        return isset($id) ? $id : FALSE;
    }
    public function get_survey_info($nid = "", $email = "", $mobile = 0) {
        if (!empty($nid)) {
            $this->db->where($this->tables['surveys'] . '.nid', $nid);
        }
        if (!empty($email)) {
            $this->db->where($this->tables['surveys'] . '.email', $email);
        }
        if (!empty($email)) {
            $this->db->where($this->tables['surveys'] . '.mobile', $mobile);
        }
        return $this->db->select('*')
                        ->from($this->tables['surveys'])
                        ->get();
    }
    
    public function add_addmission_info($additional_data) {
        $data = $this->_filter_data($this->tables['members'], $additional_data);
        $this->db->insert($this->tables['members'], $data);
        $id = $this->db->insert_id();
        return isset($id) ? $id : FALSE;
    }

    /*
     * This method will return zone List
     * @return zone List
     * @author rashida on 12th Nov 2016
     */

    public function get_zone_list() {
        return $this->db->select('*')
                        ->from($this->tables['zones'])
                        ->get();
    }

    /*
     * This method will return area List
     * @return area List
     * @author rashida on 12th Nov 2016
     */

    public function get_area_list($zone_id = 0) {
        if ($zone_id != 0) {
            $this->db->where($this->tables['areas'] . '.zone_id', $zone_id);
        }
        return $this->db->select('*')
                        ->from($this->tables['areas'])
                        ->get();
    }

    /*
     * This method will return branche List
     * @return branche List
     * @author rashida on 12th Nov 2016
     */

    public function get_branch_list($area_id = 0) {
        if ($area_id != 0) {
            $this->db->where($this->tables['areas'] . '.area_id', $area_id);
        }
        return $this->db->select('*')
                        ->from($this->tables['branches'])
                        ->get();
    }

    /*
     * This method will return gender List
     * @return gender List
     * @author rashida on 12th Nov 2016
     */

    public function get_gender_list() {
        return $this->db->select('*')
                        ->from($this->tables['genders'])
                        ->get();
    }

    /*
     * This method will return gender List
     * @return gender List
     * @author rashida on 12th Nov 2016
     */

    public function get_post_list($thana_id = 0) {
        if ($thana_id != 0) {
            $this->db->where($this->tables['posts'] . '.post_id', $thana_id);
        }
        return $this->db->select('*')
                        ->from($this->tables['posts'])
                        ->get();
    }

    /*
     * This method will return gender List
     * @return gender List
     * @author rashida on 12th Nov 2016
     */

    public function get_thana_list($district_id = 0) {
        if ($district_id != 0) {
            $this->db->where($this->tables['thanas'] . '.dist_id', $district_id);
        }
        return $this->db->select('*')
                        ->from($this->tables['thanas'])
                        ->get();
    }
    
    
    public function get_country_list() {
        return $this->db->select('*')
                        ->from($this->tables['countries'])
                        ->get();
    }

    /*
     * This method will return gender List
     * @return gender List
     * @author rashida on 12th Nov 2016
     */

    public function get_district_list() {
        return $this->db->select('*')
                        ->from($this->tables['districts'])
                        ->get();
    }

      public function get_union_list() {
        return $this->db->select('*')
                        ->from($this->tables['unions'])
                        ->get();
    }
    /*
     * This method will return gender List
     * @return gender List
     * @author rashida on 12th Nov 2016
     */

    public function get_marital_list() {
        return $this->db->select('*')
                        ->from($this->tables['marital_status'])
                        ->get();
    }

    /*
     * This method will return gender List
     * @return gender List
     * @author rashida on 12th Nov 2016
     */

    public function get_profession_list() {
        return $this->db->select('*')
                        ->from($this->tables['professions'])
                        ->get();
    }

    /*
     * This method will return gender List
     * @return gender List
     * @author rashida on 12th Nov 2016
     */

    public function get_political_statuses() {
        return $this->db->select('*')
                        ->from($this->tables['political_statuses'])
                        ->get();
    }

    /*
     * This method will return gender List
     * @return gender List
     * @author rashida on 12th Nov 2016
     */

    public function get_business_types() {
        return $this->db->select('*')
                        ->from($this->tables['business_types'])
                        ->get();
    }

    /*
     * This method will return gender List
     * @return gender List
     * @author rashida on 12th Nov 2016
     */

    public function get_family_types() {
        return $this->db->select('*')
                        ->from($this->tables['family_types'])
                        ->get();
    }

    /*
     * This method will return gender List
     * @return gender List
     * @author rashida on 12th Nov 2016
     */

    public function get_education_list() {
        return $this->db->select('*')
                        ->from($this->tables['educations'])
                        ->get();
    }
    
    public function get_payment_type_list() {
        return $this->db->select('*')
                        ->from($this->tables['payment_types'])
                        ->get();
    }

}

?>
