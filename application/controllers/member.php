<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Member extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->library('ion_auth');
        $this->load->library('utility');
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
            $requestData = json_decode($postdata);
            if (property_exists($requestData, "memberSurveyInfo") != FALSE) {
                $requestInfo = $requestData->memberSurveyInfo;
                $addisional_data = array();
// area information
                if (property_exists($requestInfo, "zoneId") != FALSE) {
                    $addisional_data['zone_id'] = $requestInfo->zoneId;
                }
                if (property_exists($requestInfo, "areaId") != FALSE) {
                    $addisional_data['area_id'] = $requestInfo->areaId;
                }
                if (property_exists($requestInfo, "branchId") != FALSE) {
                    $addisional_data['branch_id'] = $requestInfo->branchId;
                }

// basic information

                if (property_exists($requestInfo, "nameTitle") != FALSE) {
                    $addisional_data['name_title'] = $requestInfo->nameTitle;
                }
                if (property_exists($requestInfo, "firstName") != FALSE) {
                    $addisional_data['first_name'] = $requestInfo->firstName;
                }
                if (property_exists($requestInfo, "lastName") != FALSE) {
                    $addisional_data['last_name'] = $requestInfo->lastName;
                }
                if (property_exists($requestInfo, "fimilyTitle") != FALSE) {
                    $addisional_data['sur_name'] = $requestInfo->fimilyTitle;
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
                if (property_exists($requestInfo, "nid") != FALSE) {
                    $addisional_data['nid'] = $requestInfo->nid;
                }
                if (property_exists($requestInfo, "maritalId") != FALSE) {
                    $addisional_data['marital_id'] = $requestInfo->maritalId;
                }

// father info

                if (property_exists($requestInfo, "fNameTitle") != FALSE) {
                    $addisional_data['f_name_title'] = $requestInfo->fNameTitle;
                }
                if (property_exists($requestInfo, "fFirstName") != FALSE) {
                    $addisional_data['f_first_name'] = $requestInfo->fFirstName;
                }
                if (property_exists($requestInfo, "fLastName") != FALSE) {
                    $addisional_data['f_last_name'] = $requestInfo->fLastName;
                }
                if (property_exists($requestInfo, "fAge") != FALSE) {
                    $addisional_data['f_age'] = $requestInfo->fAge;
                }
                if (property_exists($requestInfo, "gProfessionId") != FALSE) {
                    $addisional_data['f_profession'] = $requestInfo->gProfessionId;
                }
                if (property_exists($requestInfo, "politicalStatusId") != FALSE) {
                    $addisional_data['political_status_id'] = $requestInfo->politicalStatusId;
                }

                if (property_exists($requestInfo, "fEmail") != FALSE) {
                    $addisional_data['guardian_email'] = $requestInfo->fEmail;
                }

// mother info 

                if (property_exists($requestInfo, "mNameTitle") != FALSE) {
                    $addisional_data['m_name_title'] = $requestInfo->mNameTitle;
                }
                if (property_exists($requestInfo, "mFrstName") != FALSE) {
                    $addisional_data['m_first_name'] = $requestInfo->mFrstName;
                }
                if (property_exists($requestInfo, "mLastName") != FALSE) {
                    $addisional_data['m_last_name'] = $requestInfo->mLastName;
                }
                if (property_exists($requestInfo, "mAge") != FALSE) {
                    $addisional_data['m_age'] = $requestInfo->mAge;
                }
                if (property_exists($requestInfo, "familyTypeId") != FALSE) {
                    $addisional_data['family_type_id'] = $requestInfo->familyTypeId;
                }
                if (property_exists($requestInfo, "earnedMMNo") != FALSE) {
                    $addisional_data['male_earned_person'] = $requestInfo->earnedMMNo;
                }
                if (property_exists($requestInfo, "earnedFMNo") != FALSE) {
                    $addisional_data['female_earned_person'] = $requestInfo->earnedFMNo;
                }

// location mailing information

                if (property_exists($requestInfo, "mCountryId") != FALSE) {
                    $addisional_data['m_country_id'] = $requestInfo->mCountryId;
                }
                if (property_exists($requestInfo, "mDistrictId") != FALSE) {
                    $addisional_data['m_district_id'] = $requestInfo->mDistrictId;
                }
                if (property_exists($requestInfo, "mThanaId") != FALSE) {
                    $addisional_data['m_thana_id'] = $requestInfo->mThanaId;
                }
                if (property_exists($requestInfo, "mUnion") != FALSE) {
                    $addisional_data['m_union_name'] = $requestInfo->mUnion;
                }
                if (property_exists($requestInfo, "mPostId") != FALSE) {
                    $addisional_data['m_post_id'] = $requestInfo->mPostId;
                }
                if (property_exists($requestInfo, "mVill") != FALSE) {

                    $addisional_data['m_vill_name'] = $requestInfo->mVill;
                }
                if (property_exists($requestInfo, "mRoad") != FALSE) {

                    $addisional_data['m_road'] = $requestInfo->mRoad;
                }
// location present  information
                if (property_exists($requestInfo, "pCountryId") != FALSE) {
                    $addisional_data['p_country_id'] = $requestInfo->pCountryId;
                }
                if (property_exists($requestInfo, "pDistrictId") != FALSE) {
                    $addisional_data['p_district_id'] = $requestInfo->pDistrictId;
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
                if (property_exists($requestInfo, "pRoad") != FALSE) {
                    $addisional_data['p_road'] = $requestInfo->pRoad;
                }

                if (property_exists($requestInfo, "mobile") != FALSE) {
                    $addisional_data['mobile'] = $requestInfo->mobile;
                }
                if (property_exists($requestInfo, "email") != FALSE) {
                    $addisional_data['email'] = $requestInfo->email;
                }

                if (property_exists($requestInfo, "distToCentre") != FALSE) {
                    $addisional_data['s_distance'] = $requestInfo->distToCentre;
                }

                if (property_exists($requestInfo, "cProfessionId") != FALSE) {
                    $addisional_data['current_profession_id'] = $requestInfo->cProfessionId;
                }
                if (property_exists($requestInfo, "pProfessionId") != FALSE) {
                    $addisional_data['previous_profession_id'] = $requestInfo->pProfessionId;
                }
//need to add database
                if (property_exists($requestInfo, "mPrePYear") != FALSE) {
                    $addisional_data['previous_p_year_id'] = $requestInfo->mPrePYear;
                }
                if (property_exists($requestInfo, "totalMemberNo") != FALSE) {
                    $addisional_data['family_member_no'] = $requestInfo->totalMemberNo;
                }
                if (property_exists($requestInfo, "earningSource") != FALSE) {
                    $addisional_data['earning_source'] = $requestInfo->earningSource;
                }
                if (property_exists($requestInfo, "aEarningSource") != FALSE) {
                    $addisional_data['alt_earning_source'] = $requestInfo->aEarningSource;
                }
                if (property_exists($requestInfo, "cultivableLand") != FALSE) {
                    $addisional_data['cultivable_land'] = $requestInfo->cultivableLand;
                }
                if (property_exists($requestInfo, "unCultivableLand") != FALSE) {
                    $addisional_data['un_cultivable_land'] = $requestInfo->unCultivableLand;
                }
                if (property_exists($requestInfo, "ponds") != FALSE) {
                    $addisional_data['ponds'] = $requestInfo->ponds;
                }
                if (property_exists($requestInfo, "house") != FALSE) {
                    $addisional_data['house'] = $requestInfo->house;
                }
                if (property_exists($requestInfo, "totalLand") != FALSE) {
                    $addisional_data['total_land'] = $requestInfo->totalLand;
                }
                if (property_exists($requestInfo, "agIncome") != FALSE) {
                    $addisional_data['ag_income'] = $requestInfo->agIncome;
                }
                if (property_exists($requestInfo, "unAgIncome") != FALSE) {
                    $addisional_data['un_ag_income'] = $requestInfo->unAgIncome;
                }
                if (property_exists($requestInfo, "totalIncome") != FALSE) {
                    $addisional_data['total_income'] = $requestInfo->totalIncome;
                }
                if (property_exists($requestInfo, "totalExpenditure") != FALSE) {
                    $addisional_data['total_expence'] = $requestInfo->totalExpenditure;
                }
                if (property_exists($requestInfo, "loss") != FALSE) {
                    $addisional_data['loss'] = $requestInfo->loss;
                }
                if (property_exists($requestInfo, "tinHouse") != FALSE) {
                    $addisional_data['tin_house'] = $requestInfo->tinHouse;
                }
                if (property_exists($requestInfo, "strawHouse") != FALSE) {
                    $addisional_data['straw_house'] = $requestInfo->strawHouse;
                }
                if (property_exists($requestInfo, "brickHouse") != FALSE) {
                    $addisional_data['brick_house'] = $requestInfo->brickHouse;
                }
                if (property_exists($requestInfo, "receiveAmound") != FALSE) {
                    $addisional_data['receive_amound'] = $requestInfo->receiveAmound;
                }
                if (property_exists($requestInfo, "paidAmound") != FALSE) {
                    $addisional_data['paid_amound'] = $requestInfo->paidAmound;
                }
                if (property_exists($requestInfo, "remainningAmound") != FALSE) {
                    $addisional_data['re_amound'] = $requestInfo->remainningAmound;
                }
                if (property_exists($requestInfo, "paymentTypeId") != FALSE) {
                    $addisional_data['payment_type_id'] = $requestInfo->paymentTypeId;
                }
                if (property_exists($requestInfo, "financierCompany") != FALSE) {
                    $addisional_data['financier_company'] = $requestInfo->financierCompany;
                }
                if (property_exists($requestInfo, "loaningYear") != FALSE) {
                    $addisional_data['loaning_year'] = $requestInfo->loaningYear;
                }
                if (property_exists($requestInfo, "lastLoaningYear") != FALSE) {
                    $addisional_data['last_loaning_year'] = $requestInfo->lastLoaningYear;
                }
                if (property_exists($requestInfo, "investmentSector") != FALSE) {
                    $addisional_data['investment_sector'] = $requestInfo->investmentSector;
                }
                if (property_exists($requestInfo, "amount") != FALSE) {
                    $addisional_data['amount'] = $requestInfo->amount;
                }
                if (property_exists($requestInfo, "recomannd1") != FALSE) {
                    $addisional_data['recomannd1'] = $requestInfo->recomannd1;
                }
                if (property_exists($requestInfo, "recomannd2") != FALSE) {
                    $addisional_data['recomannd2'] = $requestInfo->recomannd2;
                }
            }
            $insert_id = $this->member_model->add_survey($addisional_data);
            if ($insert_id != -1) {
                $response["message"] = "Survey Information is Added Successfully!";
            } else {
                $response["message"] = "Sorry! Error While Adding Survey Information!";
            }
            echo json_encode($response);
            return;
        }
        $this->data['family_name_list'] = $this->utility->family_name();
        $this->data['name_title_list'] = $this->utility->name_title();
        $this->data['f_name_title_list'] = $this->utility->father_name_title();
        $this->data['m_name_title_list'] = $this->utility->mother_name_title();
        $this->data['age_list'] = $this->utility->age();
        $this->data['f_member_list'] = $this->utility->family_member();
        $this->data['passing_year_list'] = $this->utility->passing_year();
        $this->data['member_list'] = $this->utility->get_member_list();

        $this->data['zone_list'] = $this->member_model->get_zone_list()->result_array();
        $this->data['area_list'] = $this->member_model->get_area_list()->result_array();
        $this->data['branch_list'] = $this->member_model->get_branch_list()->result_array();
        $this->data['gender_list'] = $this->member_model->get_gender_list()->result_array();
        $this->data['post_list'] = $this->member_model->get_post_list()->result_array();
        $this->data['thana_list'] = $this->member_model->get_thana_list()->result_array();
        $this->data['district_list'] = $this->member_model->get_district_list()->result_array();
        $this->data['union_list'] = $this->member_model->get_union_list()->result_array();
        $this->data['country_list'] = $this->member_model->get_country_list()->result_array();
        $this->data['marital_list'] = $this->member_model->get_marital_list()->result_array();
        $this->data['profession_list'] = $this->member_model->get_profession_list()->result_array();
        $this->data['political_status_list'] = $this->member_model->get_political_statuses()->result_array();
        $this->data['business_type_list'] = $this->member_model->get_business_types()->result_array();
        $this->data['family_type_list'] = $this->member_model->get_family_types()->result_array();
        $this->data['educations_list'] = $this->member_model->get_education_list()->result_array();
        $this->data['payment_types'] = $this->member_model->get_payment_type_list()->result_array();
        $this->data['app_name'] = MEMBER_APP;
        $this->template->load(MEMBER_TEMPLATE, 'member/index', $this->data);
    }

      public function addmission() {
         if (file_get_contents("php://input") != null) {
            $user_name = "";
            $response = array();
            $postdata = file_get_contents("php://input");
            $requestData = json_decode($postdata);
            if (property_exists($requestData, "memberSurveyInfo") != FALSE) {
                $requestInfo = $requestData->memberSurveyInfo;
                $addisional_data = array();
// area information
                if (property_exists($requestInfo, "zoneId") != FALSE) {
                    $addisional_data['zone_id'] = $requestInfo->zoneId;
                }
                if (property_exists($requestInfo, "areaId") != FALSE) {
                    $addisional_data['area_id'] = $requestInfo->areaId;
                }
                if (property_exists($requestInfo, "branchId") != FALSE) {
                    $addisional_data['branch_id'] = $requestInfo->branchId;
                }

// basic information

                if (property_exists($requestInfo, "nameTitle") != FALSE) {
                    $addisional_data['name_title'] = $requestInfo->nameTitle;
                }
                if (property_exists($requestInfo, "firstName") != FALSE) {
                    $addisional_data['first_name'] = $requestInfo->firstName;
                }
                if (property_exists($requestInfo, "lastName") != FALSE) {
                    $addisional_data['last_name'] = $requestInfo->lastName;
                }
                if (property_exists($requestInfo, "fimilyTitle") != FALSE) {
                    $addisional_data['sur_name'] = $requestInfo->fimilyTitle;
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
                if (property_exists($requestInfo, "nid") != FALSE) {
                    $addisional_data['nid'] = $requestInfo->nid;
                }
                if (property_exists($requestInfo, "maritalId") != FALSE) {
                    $addisional_data['marital_id'] = $requestInfo->maritalId;
                }

// father info

                if (property_exists($requestInfo, "fNameTitle") != FALSE) {
                    $addisional_data['f_name_title'] = $requestInfo->fNameTitle;
                }
                if (property_exists($requestInfo, "fFirstName") != FALSE) {
                    $addisional_data['f_first_name'] = $requestInfo->fFirstName;
                }
                if (property_exists($requestInfo, "fLastName") != FALSE) {
                    $addisional_data['f_last_name'] = $requestInfo->fLastName;
                }
                if (property_exists($requestInfo, "fAge") != FALSE) {
                    $addisional_data['f_age'] = $requestInfo->fAge;
                }
                if (property_exists($requestInfo, "gProfessionId") != FALSE) {
                    $addisional_data['f_business'] = $requestInfo->gProfessionId;
                }
                if (property_exists($requestInfo, "politicalStatusId") != FALSE) {
                    $addisional_data['political_status_id'] = $requestInfo->politicalStatusId;
                }

                if (property_exists($requestInfo, "fEmail") != FALSE) {
                    $addisional_data['guardian_email'] = $requestInfo->fEmail;
                }

// mother info 

                if (property_exists($requestInfo, "mNameTitle") != FALSE) {
                    $addisional_data['m_name_title'] = $requestInfo->mNameTitle;
                }
                if (property_exists($requestInfo, "mFrstName") != FALSE) {
                    $addisional_data['m_first_name'] = $requestInfo->mFrstName;
                }
                if (property_exists($requestInfo, "mLastName") != FALSE) {
                    $addisional_data['m_last_name'] = $requestInfo->mLastName;
                }
                if (property_exists($requestInfo, "mAge") != FALSE) {
                    $addisional_data['m_age'] = $requestInfo->mAge;
                }
                if (property_exists($requestInfo, "familyTypeId") != FALSE) {
                    $addisional_data['family_type_id'] = $requestInfo->familyTypeId;
                }
                if (property_exists($requestInfo, "earnedMMNo") != FALSE) {
                    $addisional_data['male_earned_person'] = $requestInfo->earnedMMNo;
                }
                if (property_exists($requestInfo, "earnedFMNo") != FALSE) {
                    $addisional_data['female_earned_person'] = $requestInfo->earnedFMNo;
                }

// location mailing information

                if (property_exists($requestInfo, "mCountryId") != FALSE) {
                    $addisional_data['m_country_id'] = $requestInfo->mCountryId;
                }
                if (property_exists($requestInfo, "pCountryId") != FALSE) {
                    $addisional_data['p_country_id'] = $requestInfo->pCountryId;
                }
                if (property_exists($requestInfo, "mDistrictId") != FALSE) {
                    $addisional_data['m_district_id'] = $requestInfo->mDistrictId;
                }
                if (property_exists($requestInfo, "mThanaId") != FALSE) {
                    $addisional_data['m_thana_id'] = $requestInfo->mThanaId;
                }
                if (property_exists($requestInfo, "mUnion") != FALSE) {
                    $addisional_data['m_union_name'] = $requestInfo->mUnion;
                }
                if (property_exists($requestInfo, "mPostId") != FALSE) {
                    $addisional_data['m_post_id'] = $requestInfo->mPostId;
                }
                if (property_exists($requestInfo, "mVill") != FALSE) {

                    $addisional_data['m_vill_name'] = $requestInfo->mVill;
                }
                if (property_exists($requestInfo, "mRoad") != FALSE) {

                    $addisional_data['m_road'] = $requestInfo->mRoad;
                }
// location present  information
                if (property_exists($requestInfo, "pCountryId") != FALSE) {
                    $addisional_data['p_country_id'] = $requestInfo->pCountryId;
                }
                if (property_exists($requestInfo, "pDistrictId") != FALSE) {
                    $addisional_data['p_district_id'] = $requestInfo->pDistrictId;
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
                if (property_exists($requestInfo, "pRoad") != FALSE) {
                    $addisional_data['p_road'] = $requestInfo->pRoad;
                }

                if (property_exists($requestInfo, "mobile") != FALSE) {
                    $addisional_data['mobile'] = $requestInfo->mobile;
                }
                if (property_exists($requestInfo, "email") != FALSE) {
                    $addisional_data['email'] = $requestInfo->email;
                }

                if (property_exists($requestInfo, "distToCentre") != FALSE) {
                    $addisional_data['s_distance'] = $requestInfo->distToCentre;
                }

                if (property_exists($requestInfo, "cProfessionId") != FALSE) {
                    $addisional_data['current_profession_id'] = $requestInfo->cProfessionId;
                }
                if (property_exists($requestInfo, "pProfessionId") != FALSE) {
                    $addisional_data['previous_profession_id'] = $requestInfo->pProfessionId;
                }
//need to add database
                if (property_exists($requestInfo, "mPrePYear") != FALSE) {
                    $addisional_data['previous_p_year_id'] = $requestInfo->mPrePYear;
                }
                if (property_exists($requestInfo, "earningSource") != FALSE) {
                    $addisional_data['earning_source'] = $requestInfo->earningSource;
                }
                if (property_exists($requestInfo, "aEarningSource") != FALSE) {
                    $addisional_data['alt_earning_source'] = $requestInfo->aEarningSource;
                }
                if (property_exists($requestInfo, "cultivableLand") != FALSE) {
                    $addisional_data['cultivable_land'] = $requestInfo->cultivableLand;
                }
                if (property_exists($requestInfo, "unCultivableLand") != FALSE) {
                    $addisional_data['un_cultivable_land'] = $requestInfo->unCultivableLand;
                }
                if (property_exists($requestInfo, "ponds") != FALSE) {
                    $addisional_data['ponds'] = $requestInfo->ponds;
                }
                if (property_exists($requestInfo, "house") != FALSE) {
                    $addisional_data['house'] = $requestInfo->house;
                }
                if (property_exists($requestInfo, "totalLand") != FALSE) {
                    $addisional_data['total_land'] = $requestInfo->totalLand;
                }
                if (property_exists($requestInfo, "agIncome") != FALSE) {
                    $addisional_data['ag_income'] = $requestInfo->agIncome;
                }
                if (property_exists($requestInfo, "unAgIncome") != FALSE) {
                    $addisional_data['un_ag_income'] = $requestInfo->unAgIncome;
                }
                if (property_exists($requestInfo, "totalIncome") != FALSE) {
                    $addisional_data['total_income'] = $requestInfo->totalIncome;
                }
                if (property_exists($requestInfo, "totalExpenditure") != FALSE) {
                    $addisional_data['total_expence'] = $requestInfo->totalExpenditure;
                }
                if (property_exists($requestInfo, "loss") != FALSE) {
                    $addisional_data['loss'] = $requestInfo->loss;
                }
                if (property_exists($requestInfo, "tinHouse") != FALSE) {
                    $addisional_data['tin_house'] = $requestInfo->tinHouse;
                }
                if (property_exists($requestInfo, "strawHouse") != FALSE) {
                    $addisional_data['straw_house'] = $requestInfo->strawHouse;
                }
                if (property_exists($requestInfo, "brickHouse") != FALSE) {
                    $addisional_data['brick_house'] = $requestInfo->brickHouse;
                }
                if (property_exists($requestInfo, "receiveAmound") != FALSE) {
                    $addisional_data['receive_amound'] = $requestInfo->receiveAmound;
                }
                if (property_exists($requestInfo, "paidAmound") != FALSE) {
                    $addisional_data['paid_amound'] = $requestInfo->paidAmound;
                }
                if (property_exists($requestInfo, "remainningAmound") != FALSE) {
                    $addisional_data['re_amound'] = $requestInfo->remainningAmound;
                }
                if (property_exists($requestInfo, "paymentTypeId") != FALSE) {
                    $addisional_data['payment_type_id'] = $requestInfo->paymentTypeId;
                }
                if (property_exists($requestInfo, "financierCompany") != FALSE) {
                    $addisional_data['financier_company'] = $requestInfo->financierCompany;
                }
                if (property_exists($requestInfo, "loaningYear") != FALSE) {
                    $addisional_data['loaning_year'] = $requestInfo->loaningYear;
                }
                if (property_exists($requestInfo, "lastLoaningYear") != FALSE) {
                    $addisional_data['last_loaning_year'] = $requestInfo->lastLoaningYear;
                }
                if (property_exists($requestInfo, "investmentSector") != FALSE) {
                    $addisional_data['investment_sector'] = $requestInfo->investmentSector;
                }
                if (property_exists($requestInfo, "amount") != FALSE) {
                    $addisional_data['amount'] = $requestInfo->amount;
                }
                if (property_exists($requestInfo, "recomannd1") != FALSE) {
                    $addisional_data['recomannd1'] = $requestInfo->recomannd1;
                }
                if (property_exists($requestInfo, "recomannd2") != FALSE) {
                    $addisional_data['recomannd2'] = $requestInfo->recomannd2;
                }
            }
            $insert_id = $this->member_model->add_survey($addisional_data);
            if ($insert_id != -1) {
                $response["message"] = "Survey Information is Added Successfully!";
            } else {
                $response["message"] = "Sorry! Error While Adding Survey Information!";
            }
            echo json_encode($response);
            return;
        }
        $this->data['family_name_list'] = $this->utility->family_name();
        $this->data['name_title_list'] = $this->utility->name_title();
        $this->data['f_name_title_list'] = $this->utility->father_name_title();
        $this->data['m_name_title_list'] = $this->utility->mother_name_title();
        $this->data['age_list'] = $this->utility->age();
        $this->data['f_member_list'] = $this->utility->family_member();
        $this->data['passing_year_list'] = $this->utility->passing_year();
        $this->data['member_list'] = $this->utility->get_member_list();

        $this->data['zone_list'] = $this->member_model->get_zone_list()->result_array();
        $this->data['area_list'] = $this->member_model->get_area_list()->result_array();
        $this->data['branch_list'] = $this->member_model->get_branch_list()->result_array();
        $this->data['gender_list'] = $this->member_model->get_gender_list()->result_array();
        $this->data['post_list'] = $this->member_model->get_post_list()->result_array();
        $this->data['thana_list'] = $this->member_model->get_thana_list()->result_array();
        $this->data['district_list'] = $this->member_model->get_district_list()->result_array();
        $this->data['union_list'] = $this->member_model->get_union_list()->result_array();
        $this->data['country_list'] = $this->member_model->get_country_list()->result_array();
        $this->data['marital_list'] = $this->member_model->get_marital_list()->result_array();
        $this->data['profession_list'] = $this->member_model->get_profession_list()->result_array();
        $this->data['political_status_list'] = $this->member_model->get_political_statuses()->result_array();
        $this->data['business_type_list'] = $this->member_model->get_business_types()->result_array();
        $this->data['family_type_list'] = $this->member_model->get_family_types()->result_array();
        $this->data['educations_list'] = $this->member_model->get_education_list()->result_array();
        $this->data['payment_types'] = $this->member_model->get_payment_type_list()->result_array();
        $this->data['app_name'] = MEMBER_APP;
        $this->template->load(MEMBER_TEMPLATE, 'member/addmision', $this->data);
    }

    public function get_survey_info() {
        if (file_get_contents("php://input") != null) {
            $user_name = "";
            $response = array();
            $postdata = file_get_contents("php://input");
            $requestData = json_decode($postdata);
            if (property_exists($requestData, "searchParam") != FALSE) {
                $search_info = $requestData->searchParam;
                $searh_param = 0;
                if (property_exists($search_info, "searchFlag") != FALSE) {
                    $searh_param = $search_info->searchFlag;
                }
                if (property_exists($search_info, "searchValue") != FALSE) {
                    $search_value = $search_info->searchValue;
                }
                $nid = "";
                $email = "";
                $mobile = "";
                if ($searh_param == SEARCH_BY_NID) {
                    $nid = $search_value;
                }
                if ($searh_param == SEARCH_BY_EMAIL) {
                    $email = $search_value;
                }
                if ($searh_param == SEARCH_BY_MOBILE) {
                    $mobile = $search_value;
                }
                $result = $this->member_model->get_survey_info($nid, $email, $mobile)->result_array();
                if (!empty($result)) {
                    $response['survey_info'] = $result[0];
                }
            }
            echo json_encode($response);
            return;
        }
    }

    public function addmission_12() {
        $this->data['app_name'] = MEMBER_APP;
        $this->data['test'] = "";
        $this->template->load(MEMBER_TEMPLATE, 'member/addmision', $this->data);
    }

    public function loan_application() {
        $this->data['app_name'] = MEMBER_APP;
        $this->data['test'] = "";
        $this->template->load(MEMBER_TEMPLATE, 'member/loan_application', $this->data);
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
