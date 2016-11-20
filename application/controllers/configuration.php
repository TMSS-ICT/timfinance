<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of configuration
 *
 * @author rashida
 */
class configuration extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->library('ion_auth');
        $this->load->library('utility');
        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login', 'refresh');
        }
        $this->load->model('org/configuration_model');
    }

    public function grace() {
        $this->data['test'] = "";
        $this->data['app_name'] = CONFIGURATION_APP;
        $this->template->load(MEMBER_TEMPLATE, 'configuration/grace', $this->data);
    }

    public function investor() {
        $this->data['test'] = "";
        $this->data['app_name'] = CONFIGURATION_APP;
        $this->template->load(MEMBER_TEMPLATE, 'configuration/investor', $this->data);
    }

    public function product() {
        
        $this->data['test'] = "";
        $this->data['app_name'] = CONFIGURATION_APP;
        $this->template->load(MEMBER_TEMPLATE, 'configuration/product', $this->data);
    }

    public function purpose() {
        $this->data['test'] = "";
        $this->data['app_name'] = CONFIGURATION_APP;
        $this->template->load(MEMBER_TEMPLATE, 'configuration/purpose', $this->data);
    }

    public function organization_settings() {
        if (file_get_contents("php://input") != null) {
            $user_name = "";
            $response = array();
            $postdata = file_get_contents("php://input");
            $requestData = json_decode($postdata);
            if (property_exists($requestData, "organizationInfo") != FALSE) {
                $requestInfo = $requestData->organizationInfo;
                $addisional_data = array();
                if (property_exists($requestInfo, "office_id") != FALSE) {
                    $addisional_data['office_id'] = $requestInfo->office_id;
                }
                if (property_exists($requestInfo, "organization_name") != FALSE) {
                    $addisional_data['organization_name'] = $requestInfo->organization_name;
                }
                if (property_exists($requestInfo, "org_address") != FALSE) {
                    $addisional_data['org_address'] = $requestInfo->org_address;
                }
                if (property_exists($requestInfo, "cash_book") != FALSE) {
                    $addisional_data['cash_book'] = $requestInfo->cash_book;
                }
                if (property_exists($requestInfo, "pla_aacount") != FALSE) {
                    $addisional_data['pla_aacount'] = $requestInfo->pla_aacount;
                }
                if (property_exists($requestInfo, "bank_aacount") != FALSE) {
                    $addisional_data['bank_aacount'] = $requestInfo->bank_aacount;
                }
                if (property_exists($requestInfo, "phone_no") != FALSE) {
                    $addisional_data['phone_no'] = $requestInfo->phone_no;
                }
                if (property_exists($requestInfo, "cell_no") != FALSE) {
                    $addisional_data['cell_no'] = $requestInfo->cell_no;
                }
                if (property_exists($requestInfo, "email") != FALSE) {
                    $addisional_data['email'] = $requestInfo->email;
                }
                if (property_exists($requestInfo, "process_type") != FALSE) {
                    $addisional_data['process_type'] = $requestInfo->process_type;
                }
                if (property_exists($requestInfo, "license_no") != FALSE) {
                    $addisional_data['license_no'] = $requestInfo->license_no;
                }
                if (property_exists($requestInfo, "license_start_date") != FALSE) {
                    $addisional_data['license_start_date'] = $requestInfo->license_start_date;
                }
                if (property_exists($requestInfo, "license_end_date") != FALSE) {
                    $addisional_data['license_end_date'] = $requestInfo->license_end_date;
                }
            }
            $addisional_data['reference_user_id'] = $user_id = $this->session->userdata('user_id');
            $insert_id = $this->configuration_model->organization_settings($addisional_data);
            if ($insert_id != -1) {
                $response["message"] = "Organization Settings  is Added Successfully!";
            } else {
                $response["message"] = "Sorry! Error While Adding Organization Settings!";
            }
            echo json_encode($response);
            return;
        }
        $this->data['app_name'] = CONFIGURATION_APP;
        $this->data['investor_list'] = $this->configuration_model->get_investor_list()->result_array();
        $this->data['process_list'] = $this->configuration_model->get_process_type_list()->result_array();
        $this->template->load(MEMBER_TEMPLATE, 'configuration/organization', $this->data);
    }

}
