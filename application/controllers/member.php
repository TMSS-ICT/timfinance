<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Member extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->library('ion_auth');
        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login', 'refresh');
        }
         $this->load->model('org/member_model');
    }

    public function test() {
        $this->data['test'] = "";
        $this->template->load(MEMBER_TEMPLATE, '', $this->data);
    }

    public function index() {
        if (file_get_contents("php://input") != null) {
            $user_name = "";
            $response = array();
            $postdata = file_get_contents("php://input");
            $requestInfo = json_decode($postdata);
            $addisional_data = array();
            if (property_exists($requestInfo, "zoneId") != FALSE) {
                $addisional_data['zone_id'] = $requestInfo->zoneId;
            }
            if (property_exists($requestInfo, "areaId") != FALSE) {
                $addisional_data['area_id'] = $requestInfo->areaId;
            }
            if (property_exists($requestInfo, "branchId") != FALSE) {
                $addisional_data['branch_id'] = $requestInfo->branchId;
            }
            if (property_exists($requestInfo, "firstName") != FALSE) {
                $addisional_data['first_name'] = $requestInfo->firstName;
            }
            if (property_exists($requestInfo, "lastName") != FALSE) {
                $addisional_data['last_name'] = $requestInfo->lastName;
            }
            if (property_exists($requestInfo, "surName") != FALSE) {
                $addisional_data['sur_name'] = $requestInfo->surName;
            }
            if (property_exists($requestInfo, "genderId") != FALSE) {
                $addisional_data['gender_id'] = $requestInfo->genderId;
            }
            if (property_exists($requestInfo, "age") != FALSE) {
                $addisional_data['age'] = $requestInfo->age;
            }
            if (property_exists($requestInfo, "educationId") != FALSE) {
                $addisional_data['education_id'] = $requestInfo->educationId;
            }
            if (property_exists($requestInfo, "passingYear") != FALSE) {
                $addisional_data['passing_year'] = $requestInfo->passingYear;
            }
            if (property_exists($requestInfo, "fFirstName") != FALSE) {
                $addisional_data['f_first_name'] = $requestInfo->fFirstName;
            }
            if (property_exists($requestInfo, "fLastName") != FALSE) {
                $addisional_data['f_last_name'] = $requestInfo->fLastName;
            }
            if (property_exists($requestInfo, "fSurName") != FALSE) {
                $addisional_data['f_sur_name'] = $requestInfo->fSurName;
            }
            if (property_exists($requestInfo, "fAge") != FALSE) {
                $addisional_data['f_age'] = $requestInfo->fAge;
            }
            if (property_exists($requestInfo, "fBusiness") != FALSE) {
                $addisional_data['f_business'] = $requestInfo->fBusiness;
            }
            if (property_exists($requestInfo, "areaId") != FALSE) {
                $addisional_data['m_first_name'] = $requestInfo->offset;
            }
            if (property_exists($requestInfo, "mFirstName") != FALSE) {
                $addisional_data['m_last_name'] = $requestInfo->mFirstName;
            }
            if (property_exists($requestInfo, "mSurName") != FALSE) {
                $addisional_data['m_sur_name'] = $requestInfo->mSurName;
            }
            if (property_exists($requestInfo, "mAge") != FALSE) {
                $addisional_data['m_age'] = $requestInfo->mAge;
            }
            if (property_exists($requestInfo, "mVill") != FALSE) {

                $addisional_data['m_vill_name'] = $requestInfo->mVill;
            }
            if (property_exists($requestInfo, "mUnion") != FALSE) {
                $addisional_data['m_union_name'] = $requestInfo->mUnion;
            }
            if (property_exists($requestInfo, "mPostId") != FALSE) {
                $addisional_data['m_post_id'] = $requestInfo->mPostId;
            }
            if (property_exists($requestInfo, "mThanaId") != FALSE) {
                $addisional_data['m_thana_id'] = $requestInfo->mThanaId;
            }
            if (property_exists($requestInfo, "mDistrictId") != FALSE) {
                $addisional_data['m_district_id'] = $requestInfo->mDistrictId;
            }
            if (property_exists($requestInfo, "pVill") != FALSE) {
                $addisional_data['p_vill_name'] = $requestInfo->pVill;
            }
            if (property_exists($requestInfo, "pUnion") != FALSE) {
                $addisional_data['p_union_name'] = $requestInfo->pUnion;
            }
            if (property_exists($requestInfo, "pPostId") != FALSE) {
                $addisional_data['p_post_id'] = $requestInfo->pPostId;
            }
            if (property_exists($requestInfo, "pThanaId") != FALSE) {
                $addisional_data['p_thana_id'] = $requestInfo->pThanaId;
            }
            if (property_exists($requestInfo, "pDistrictId") != FALSE) {
                $addisional_data['p_district_id'] = $requestInfo->pDistrictId;
            }
            if (property_exists($requestInfo, "mobile") != FALSE) {
                $addisional_data['mobile'] = $requestInfo->mobile;
            }
            if (property_exists($requestInfo, "email") != FALSE) {
                $addisional_data['email'] = $requestInfo->email;
            }
            if (property_exists($requestInfo, "guardianEmail") != FALSE) {
                $addisional_data['guardian_email'] = $requestInfo->guardianEmail;
            }
            if (property_exists($requestInfo, "sDistance") != FALSE) {
                $addisional_data['s_distance'] = $requestInfo->sDistance;
            }
            if (property_exists($requestInfo, "maritalId") != FALSE) {
                $addisional_data['marital_id'] = $requestInfo->maritalId;
            }
            if (property_exists($requestInfo, "cProfession_id") != FALSE) {
                $addisional_data['current_profession_id'] = $requestInfo->cProfession_id;
            }
            if (property_exists($requestInfo, "pProfession_id") != FALSE) {
                $addisional_data['previous_profession_id'] = $requestInfo->pProfession_id;
            }
            if (property_exists($requestInfo, "politicalStatusId") != FALSE) {
                $addisional_data['political_status_id'] = $requestInfo->politicalStatusId;
            }
            if (property_exists($requestInfo, "businessTypeId") != FALSE) {
                $addisional_data['business_type_id'] = $requestInfo->businessTypeId;
            }
            if (property_exists($requestInfo, "fBusinessPlan") != FALSE) {
                $addisional_data['future_business_plan'] = $requestInfo->fBusinessPlan;
            }
            if (property_exists($requestInfo, "familyTypeId") != FALSE) {
                $addisional_data['family_type_id'] = $requestInfo->familyTypeId;
            }
            if (property_exists($requestInfo, "fMemberNo") != FALSE) {
                $addisional_data['family_member_no'] = $requestInfo->fMemberNo;
            }
            if (property_exists($requestInfo, "maleEarnedPerson") != FALSE) {
                $addisional_data['male_earned_person'] = $requestInfo->maleEarnedPerson;
            }
            if (property_exists($requestInfo, "femaleEarnedPerson") != FALSE) {
                $addisional_data['female_earned_person'] = $requestInfo->femaleEarnedPerson;
            }
           
            $insert_id = $this->member_model->add_survey($addisional_data);
            if ($insert_id != -1) {
                $response["message"] = "Survey Information is Added Successfully!";
            } else {
                $response["message"] = "Sorry! Error While Adding Survey Information!";
            }
        }

        $this->data['zone_list'] = $this->member_model->get_zone_list()->result_array();
        $this->data['area_list'] = $this->member_model->get_area_list()->result_array();
        $this->data['branch_list'] = $this->member_model->get_branch_list()->result_array();
        $this->data['gender_list'] = $this->member_model->get_gender_list()->result_array();
        $this->data['post_list'] = $this->member_model->get_post_list()->result_array();
        $this->data['thana_list'] = $this->member_model->get_thana_list()->result_array();
        $this->data['dist_list'] = $this->member_model->get_district_list()->result_array();
        $this->data['marital_list'] = $this->member_model->get_marital_list()->result_array();
        $this->data['profession_list'] = $this->member_model->get_profession_list()->result_array();
        $this->data['profession_list'] = $this->member_model->get_profession_list()->result_array();
        $this->data['political_status_list'] = $this->member_model->get_political_statuses()->result_array();
        $this->data['business_type_list'] = $this->member_model->get_business_types()->result_array();
        $this->data['family_type_list'] = $this->member_model->get_family_types()->result_array();
        $this->data['family_type_list'] = $this->member_model->get_education_list()->result_array();
        $this->data['app_name'] = MEMBER_APP;
        $this->template->load(MEMBER_TEMPLATE, 'member/index', $this->data);
    }

    public function survey_info() {
        if (file_get_contents("php://input") != null) {
            $user_name = "";
            $response = array();
            $postdata = file_get_contents("php://input");
            $requestInfo = json_decode($postdata);
            $addisional_data = array();
            if (property_exists($requestInfo, "zoneId") != FALSE) {
                $addisional_data['zone_id'] = $requestInfo->zoneId;
            }
            if (property_exists($requestInfo, "areaId") != FALSE) {
                $addisional_data['area_id'] = $requestInfo->areaId;
            }
            if (property_exists($requestInfo, "branchId") != FALSE) {
                $addisional_data['branch_id'] = $requestInfo->branchId;
            }
            if (property_exists($requestInfo, "firstName") != FALSE) {
                $addisional_data['first_name'] = $requestInfo->firstName;
            }
            if (property_exists($requestInfo, "lastName") != FALSE) {
                $addisional_data['last_name'] = $requestInfo->lastName;
            }
            if (property_exists($requestInfo, "surName") != FALSE) {
                $addisional_data['sur_name'] = $requestInfo->surName;
            }
            if (property_exists($requestInfo, "genderId") != FALSE) {
                $addisional_data['gender_id'] = $requestInfo->genderId;
            }
            if (property_exists($requestInfo, "age") != FALSE) {
                $addisional_data['age'] = $requestInfo->age;
            }
            if (property_exists($requestInfo, "educationId") != FALSE) {
                $addisional_data['education_id'] = $requestInfo->educationId;
            }
            if (property_exists($requestInfo, "passingYear") != FALSE) {
                $addisional_data['passing_year'] = $requestInfo->passingYear;
            }
            if (property_exists($requestInfo, "fFirstName") != FALSE) {
                $addisional_data['f_first_name'] = $requestInfo->fFirstName;
            }
            if (property_exists($requestInfo, "fLastName") != FALSE) {
                $addisional_data['f_last_name'] = $requestInfo->fLastName;
            }
            if (property_exists($requestInfo, "fSurName") != FALSE) {
                $addisional_data['f_sur_name'] = $requestInfo->fSurName;
            }
            if (property_exists($requestInfo, "fAge") != FALSE) {
                $addisional_data['f_age'] = $requestInfo->fAge;
            }
            if (property_exists($requestInfo, "fBusiness") != FALSE) {
                $addisional_data['f_business'] = $requestInfo->fBusiness;
            }
            if (property_exists($requestInfo, "areaId") != FALSE) {
                $addisional_data['m_first_name'] = $requestInfo->offset;
            }
            if (property_exists($requestInfo, "mFirstName") != FALSE) {
                $addisional_data['m_last_name'] = $requestInfo->mFirstName;
            }
            if (property_exists($requestInfo, "mSurName") != FALSE) {
                $addisional_data['m_sur_name'] = $requestInfo->mSurName;
            }
            if (property_exists($requestInfo, "mAge") != FALSE) {
                $addisional_data['m_age'] = $requestInfo->mAge;
            }
            if (property_exists($requestInfo, "mVill") != FALSE) {

                $addisional_data['m_vill_name'] = $requestInfo->mVill;
            }
            if (property_exists($requestInfo, "mUnion") != FALSE) {
                $addisional_data['m_union_name'] = $requestInfo->mUnion;
            }
            if (property_exists($requestInfo, "mPostId") != FALSE) {
                $addisional_data['m_post_id'] = $requestInfo->mPostId;
            }
            if (property_exists($requestInfo, "mThanaId") != FALSE) {
                $addisional_data['m_thana_id'] = $requestInfo->mThanaId;
            }
            if (property_exists($requestInfo, "mDistrictId") != FALSE) {
                $addisional_data['m_district_id'] = $requestInfo->mDistrictId;
            }
            if (property_exists($requestInfo, "pVill") != FALSE) {
                $addisional_data['p_vill_name'] = $requestInfo->pVill;
            }
            if (property_exists($requestInfo, "pUnion") != FALSE) {
                $addisional_data['p_union_name'] = $requestInfo->pUnion;
            }
            if (property_exists($requestInfo, "pPostId") != FALSE) {
                $addisional_data['p_post_id'] = $requestInfo->pPostId;
            }
            if (property_exists($requestInfo, "pThanaId") != FALSE) {
                $addisional_data['p_thana_id'] = $requestInfo->pThanaId;
            }
            if (property_exists($requestInfo, "pDistrictId") != FALSE) {
                $addisional_data['p_district_id'] = $requestInfo->pDistrictId;
            }
            if (property_exists($requestInfo, "mobile") != FALSE) {
                $addisional_data['mobile'] = $requestInfo->mobile;
            }
            if (property_exists($requestInfo, "email") != FALSE) {
                $addisional_data['email'] = $requestInfo->email;
            }
            if (property_exists($requestInfo, "guardianEmail") != FALSE) {
                $addisional_data['guardian_email'] = $requestInfo->guardianEmail;
            }
            if (property_exists($requestInfo, "sDistance") != FALSE) {
                $addisional_data['s_distance'] = $requestInfo->sDistance;
            }
            if (property_exists($requestInfo, "maritalId") != FALSE) {
                $addisional_data['marital_id'] = $requestInfo->maritalId;
            }
            if (property_exists($requestInfo, "cProfession_id") != FALSE) {
                $addisional_data['current_profession_id'] = $requestInfo->cProfession_id;
            }
            if (property_exists($requestInfo, "pProfession_id") != FALSE) {
                $addisional_data['previous_profession_id'] = $requestInfo->pProfession_id;
            }
            if (property_exists($requestInfo, "politicalStatusId") != FALSE) {
                $addisional_data['political_status_id'] = $requestInfo->politicalStatusId;
            }
            if (property_exists($requestInfo, "businessTypeId") != FALSE) {
                $addisional_data['business_type_id'] = $requestInfo->businessTypeId;
            }
            if (property_exists($requestInfo, "fBusinessPlan") != FALSE) {
                $addisional_data['future_business_plan'] = $requestInfo->fBusinessPlan;
            }
            if (property_exists($requestInfo, "familyTypeId") != FALSE) {
                $addisional_data['family_type_id'] = $requestInfo->familyTypeId;
            }
            if (property_exists($requestInfo, "fMemberNo") != FALSE) {
                $addisional_data['family_member_no'] = $requestInfo->fMemberNo;
            }
            if (property_exists($requestInfo, "maleEarnedPerson") != FALSE) {
                $addisional_data['male_earned_person'] = $requestInfo->maleEarnedPerson;
            }
            if (property_exists($requestInfo, "femaleEarnedPerson") != FALSE) {
                $addisional_data['female_earned_person'] = $requestInfo->femaleEarnedPerson;
            }
            $this->load->model('member_model');
            $insert_id = $this->member_model->add_survey($addisional_data);
            if ($insert_id != -1) {
                $response["message"] = "Survey Information is Added Successfully!";
            } else {
                $response["message"] = "Sorry! Error While Adding Survey Information!";
            }
        }

        $this->data['zone_list'] = $this->member_model->get_zone_list()->result_array();
        $this->data['area_list'] = $this->member_model->get_area_list()->result_array();
        $this->data['branch_list'] = $this->member_model->get_branch_list()->result_array();
        $this->data['gender_list'] = $this->member_model->get_gender_list()->result_array();
        $this->data['post_list'] = $this->member_model->get_post_list()->result_array();
        $this->data['thana_list'] = $this->member_model->get_thana_list()->result_array();
        $this->data['dist_list'] = $this->member_model->get_district_list()->result_array();
        $this->data['marital_list'] = $this->member_model->get_marital_list()->result_array();
        $this->data['profession_list'] = $this->member_model->get_profession_list()->result_array();
        $this->data['profession_list'] = $this->member_model->get_profession_list()->result_array();
        $this->data['political_status_list'] = $this->member_model->get_political_statuses()->result_array();
        $this->data['business_type_list'] = $this->member_model->get_business_types()->result_array();
        $this->data['family_type_list'] = $this->member_model->get_family_types()->result_array();
        $this->data['family_type_list'] = $this->member_model->get_education_list()->result_array();
        $this->template->load(MEMBER_TEMPLATE, 'member/survey', $this->data);
    }

    public function addmission() {
        $this->data['test'] = "";
        $this->template->load(MEMBER_TEMPLATE, 'member/addmision', $this->data);
    }

    public function loan_admission() {
        $this->data['test'] = "";
        $this->template->load(MEMBER_TEMPLATE, 'member/loan_form', $this->data);
    }

    public function add_feedback() {
        $this->form_validation->set_error_delimiters("<div style='color:red'>", '</div>');
        $this->form_validation->set_rules('name', 'Name', 'xss_clean|required');
        $this->form_validation->set_rules('current_address', 'Current Address', 'xss_clean|required');
        $this->form_validation->set_rules('permanent_address', 'Permanent Address', 'xss_clean|required');
        $this->form_validation->set_rules('email', 'Email', 'xss_clean|required');
        $this->form_validation->set_rules('cell', 'Cell', 'xss_clean|required');
        $this->form_validation->set_rules('academic_qualification', 'Academic Qualification', 'xss_clean|required');
        $this->form_validation->set_rules('personal_skills', 'Personal Skills', 'xss_clean|required');
        $this->form_validation->set_rules('reference', 'Reference', 'xss_clean|required');
        if ($this->input->post()) {
            if ($this->form_validation->run() == true) {
                $feedback_data = array(
                    'name' => $this->input->post('name'),
                    'current_address' => $this->input->post('current_address'),
                    'permanent_address' => $this->input->post('permanent_address'),
                    'national_id' => $this->input->post('national_id'),
                    'passport_id' => $this->input->post('passport_id'),
                    'email' => $this->input->post('email'),
                    'skype' => $this->input->post('skype'),
                    'cell' => $this->input->post('cell'),
                    'blood_group' => $this->input->post('blood_group'),
                    'religion' => $this->input->post('religion'),
                    'personal_statement' => $this->input->post('personal_statement'),
                    'academic_qualification' => $this->input->post('academic_qualification'),
                    'volunteering_skills' => $this->input->post('volunteering_skills'),
                    'knowledge_of_speciality' => $this->input->post('knowledge_of_specialty'),
                    'personal_skills' => $this->input->post('personal_skills'),
                    'hobbies_and_interests' => $this->input->post('hobbies_and_interest'),
                    'total_friends' => $this->input->post('no_of_friends_on_facebook'),
                    'reference' => $this->input->post('reference'),
                );
                $feedback_id = $this->feedback_model->add_feedback($feedback_data);
                if ($feedback_id !== FALSE) {
                    $this->data['message'] = "Thank you for your inofrmation.";
                } else {
                    $this->data['message'] = "System error. Please try again.";
                }
            } else {
                $this->data['message'] = validation_errors();
            }
        }
        $this->data['name'] = array(
            'id' => 'name',
            'name' => 'name',
            'type' => 'text',
        );

        $this->data['current_address'] = array(
            'id' => 'current_address',
            'name' => 'current_address',
            'type' => 'text',
        );
        $this->data['permanent_address'] = array(
            'id' => 'permanent_address',
            'name' => 'permanent_address',
            'type' => 'text',
        );

        $this->data['national_id'] = array(
            'id' => 'national_id',
            'name' => 'national_id',
            'type' => 'text',
        );
        $this->data['passport_id'] = array(
            'id' => 'passport_id',
            'name' => 'passport_id',
            'type' => 'text',
        );

        $this->data['email'] = array(
            'id' => 'email',
            'name' => 'email',
            'type' => 'text',
        );
        $this->data['skype'] = array(
            'id' => 'skype',
            'name' => 'skype',
            'type' => 'text',
        );
        $this->data['cell'] = array(
            'id' => 'cell',
            'name' => 'cell',
            'type' => 'text',
        );
        $this->data['blood_group'] = array(
            'id' => 'blood_group',
            'name' => 'blood_group',
            'type' => 'text',
        );
        $this->data['religion'] = array(
            'id' => 'religion',
            'name' => 'religion',
            'type' => 'text',
        );

        $this->data['personal_statement'] = array(
            'id' => 'personal_statement',
            'name' => 'personal_statement',
            'rows' => '1',
        );

        $this->data['academic_qualification'] = array(
            'id' => 'academic_qualification',
            'name' => 'academic_qualification',
            'rows' => '1',
        );

        $this->data['volunteering_skills'] = array(
            'id' => 'volunteering_skills',
            'name' => 'volunteering_skills',
            'rows' => '1',
        );


        $this->data['knowledge_of_specialty'] = array(
            'id' => 'knowledge_of_specialty',
            'name' => 'knowledge_of_specialty',
            'type' => 'text',
        );
        $this->data['personal_skills'] = array(
            'id' => 'personal_skills',
            'name' => 'personal_skills',
            'rows' => '1',
        );
        $this->data['hobbies_and_interest'] = array(
            'id' => 'hobbies_and_interest',
            'name' => 'hobbies_and_interest',
            'rows' => '1',
        );
        $this->data['no_of_friends_on_facebook'] = array(
            'id' => 'no_of_friends_on_facebook',
            'name' => 'no_of_friends_on_facebook',
            'type' => 'text',
        );
        $this->data['reference'] = array(
            'id' => 'reference',
            'name' => 'reference',
            'rows' => '1',
        );
        $this->data['submit'] = array(
            'id' => 'submit',
            'name' => 'submit',
            'type' => 'submit',
            'value' => 'submit',
        );
        $this->template->load(MEMBER_LOGIN_SUCCESS_TEMPLATE, 'member/add_feedback', $this->data);
    }

}
