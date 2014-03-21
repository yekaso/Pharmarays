<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user_authorization
 *
 * @author upperlink
 */
class mobile_controller extends CI_Controller {

//put your code here

    public function __construct() {
        parent::__construct();
        $this->load->model('mobile_model/mobile_model');
        $this->load->model('members_model/membermodel');
        $this->load->library('session');
        log_message('info', 'after session initialization................');
    }

    function loginauthorization() {
        extract($_POST);
        $authenticate = $this->membermodel->verify_user_login($username, $password);
        $data = array();
        if ($authenticate) {
            log_message('info', 'before getting the relation of member............MOBILE' . $authenticate['memberid_member']);
            $member_id = $authenticate['memberid_member'];
            $data['memberid'] = $member_id;

            $auth_member = $this->membermodel->retrieve_member($authenticate['memberid_member']);
            log_message('info', 'registration complete and username set on userpage.................MOBILE' . $auth_member['firstname_member']);

            $data['logged_in_user'] = $auth_member['firstname_member'] . ' ' . $auth_member['surname_member'];
            $data['membertypeimage'] = $auth_member['membertypeimage'];
            $data['membertypename']= $auth_member['membertypename'];
            $data['membertypeid'] = $auth_member['membertypeid'];
            $logindetails = array(
                'memberid' => $member_id,
                'membertypeimage' => $data['membertypeimage'],
                'logged_in_user' => $data['logged_in_user'],
                'membertypeid' => $data['membertypeid']
            );
            $data['pharmacydata'] = $this->mobile_model->retrieve_pharmacy($member_id);

            $data['loginuserroleid'] = $this->mobile_model->retrieve_loginuserroleid($member_id);

            $data['is_adminuser'] = $this->mobile_model->verify_user_role($data['memberid']);
            $data['status'] = 'success';
            $data['message'] = 'User Exists';
        } else {
            $data = array(
                'status' => 'error',
                'message' => 'Invalid login details');
        }
        echo json_encode(array($data));
    }

    function registernewuser() {
        extract($_POST);
        $data = '';
        $gender_value = '0';
        if ($gender === 'Female') {
            $gender_value = '1';
        }
        $member_type_id = $this->mobile_model->retrieve_membertype_byname($member_type);
        $member_data = array(
            'firstname_member' => $fname,
            'surname_member' => $lname,
            'gender_member' => $gender_value,
            'dateOfBirth_member' => $date_of_birth,
            'emailaddress_member' => $email,
            'membertypeid_membertype' => $member_type_id
        );

        $data['membertypeimage'] = 'profilem';
        $data['membertypeid'] = $member_type_id;
        $logindetails_data = array(
            'username' => $email,
            'password' => $password,
            'status' => 'TermsAndCondition',
            'datecreated' => date("Y-m-d H:i:s"),
            'datemodified' => date("Y-m-d H:i:s")
        );
        $drug_id = '1';
        $existing_member = $this->membermodel->verify_email_address($email);
        if (!$existing_member) {
            $member_id = $this->membermodel->create_new_user($member_data);
            $data['memberid'] = $member_id;
            log_message('info', 'the id of retrieved member is.................. ' . $member_id);
            if ($member_id > 0) {
                $logindetails_data['memberid_member'] = $member_id;
                $logindetail_id = $this->membermodel->create_new_logindetails($logindetails_data);
                $userrole_id = $this->membermodel->retrieve_userrolebyname($member_type);
                $logindetailsrole_data = array(
                    'logindetailsuserrole_logindetailsid' => $logindetail_id,
                    'logindetailsuserrole_userroleid' => $userrole_id,
                    'time_created' => date("Y-m-d H:i:s"),
                    'last_updated' => date("Y-m-d H:i:s")
                );
                $data['logindetailrole'] = $this->membermodel->create_logindetailrole($logindetailsrole_data);
                $data['status'] = 'success';
                $data['message'] = 'Registration complete';
                $data['memberid'] = $member_id;
            } else {
                log_message('info', 'the registration was incomplete : invalid registration information.................');
                $data = array(
                    'status' => 'error',
                    'message' => 'Invalid registration information');
            }
        } else {
            $data = array(
                'status' => 'error',
                'message' => 'A user exists already with this email address');
        }
        echo json_encode(array($data));
    }

    function retrieve_drugs() {
        extract($_POST);
        $data['drugs'] = $this->mobile_model->retrieve_drug($pharmacyid);

        $counter = 0;

        if ($data['drugs']) {
            foreach ($data['drugs'] as $result_data) {
                $drug_company = $result_data['drug_company'];
                $split_companyname = explode(",", $drug_company);
                $split_companyname = array_unique($split_companyname);
                $company_list = implode(',', $split_companyname);
                $data['drugs'][$counter]['drug_company'] = $company_list;

                $counter++;
            }
        }

        $pharmacy_info = $this->mobile_model->retrieve_pharmacy($member_id);
        $data['pharmacy'] = $this->word_trim($pharmacy_info->name, 120, true);
        $data['status'] = 'success';
        $data['message'] = 'Retrieve Drugs...' . $company_list;
        //  $data['available_drugs'] = $this->mobile_model->retrievedrugsbypharmacy($pharmacy_info->id);
        echo json_encode(array($data));
    }

    function word_trim($string, $count, $ellipsis = FALSE) {

        if (strlen($string) > $count) {
            $string = substr($string, 0, strrpos(substr($string, 0, $count), ' '));
            if (is_string($ellipsis)) {
                $string .=$ellipsis;
            } else if ($ellipsis) {
                $string .= '&hellip;';
            }
        }
        return $string;
    }

    function deletedrugavailability() {
        extract($_POST);
        $drugavailability = $this->mobile_model->delete_drugavailability($pharmacyid, $drugid_data);
        log_message('info', 'After creating drug availability');
        $data = array(
            'status' => 'success',
            'message' => 'Drug relation deleted');
        echo json_encode(array($data));
    }

    function processdrugavailability() {
        extract($_POST);
        $createdata_array = explode(",", $createdata);
        $errors1 = array_filter($createdata_array);
        if (!empty($errors1)) {
            $drugavailability_create_data = array();
            foreach ($createdata_array as $drugid) {
                $split_data = array(
                    'pharmacyid_pharmacy' => $pharmacyid,
                    'drugid_drug' => $drugid,
                );
                $drugavailability_create_data[] = $split_data;
            }
            $errors = array_filter($drugavailability_create_data);
            if (!empty($errors)) {
                $this->mobile_model->create_drugavailability($drugavailability_create_data);
            }
        }
        $deletedata_array = explode(",", $deletedata);
        $delerrors = array_filter($deletedata_array);
        if (!empty($delerrors)) {
            $this->mobile_model->delete_drugavailability($pharmacyid, $deletedata_array);
        }
        $data = array(
            'status' => 'success',
            'message' => 'Drug relation deleted');
        echo json_encode(array($data));
    }

    function createdrugavailability() {
        extract($_POST);
        log_message('info', 'Inside create pharmacy');
        $drugavailability_data = array(
            'pharmacyid_pharmacy' => $pharmacyid,
            'drugid_drug' => $drugid,
        );
        $drugavailability = $this->mobile_model->create_drugavailability($drugavailability_data);
        log_message('info', 'After creating drug availability');
        $data = array(
            'status' => 'success',
            'message' => 'Drug relation created');
        echo json_encode(array($data));
    }

    function selectdrugsbypharmacy() {
        extract($_POST);
        $data = $this->mobile_model->retrievedrugsbypharmacy($pharmacyid);
        echo json_encode($data);
    }

    function retrieve_pharmacy() {
        extract($_POST);
        $last_pharmacyid = 0;
        $locationid = 0;
        $data['pharmacy'] = $this->mobile_model->retrieve_pharmacy_bylimit($last_pharmacyid, $locationid, $limit);
        $data['status'] = 'success';
        $data['message'] = 'Pharmacy list retrieved';
        echo json_encode(array($data));
    }

    function assignpharmacy() {
        extract($_POST);
        $status = "PENDING";
        $createdata_array = explode(",", $createdata);
        $errors1 = array_filter($createdata_array);
        if (!empty($errors1)) {
            $assignpharmacy_create_data = array();
            foreach ($createdata_array as $pharmacyid) {
                $split_data = array(
                    'pharmacy_id' => $pharmacyid,
                    'loginuserrole_id' => $loginuserroleid,
                    'status' => $status,
                );
                $assignpharmacy_create_data[] = $split_data;
            }
            $errors = array_filter($assignpharmacy_create_data);
            if (!empty($errors)) {
                $this->mobile_model->create_assignpharmacy($assignpharmacy_create_data);
            }
        }
        $deletedata_array = explode(",", $deletedata);
        $delerrors = array_filter($deletedata_array);
        if (!empty($delerrors)) {
            $this->mobile_model->delete_assignpharmacy($loginuserroleid, $deletedata_array);
        }
        $data = array(
            'status' => 'success',
            'message' => 'Pharmacy ownership updated');
        echo json_encode(array($data));
    }

}

?>