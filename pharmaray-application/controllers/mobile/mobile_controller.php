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
            $data['membertypeid'] = $auth_member['membertypeid'];
            $logindetails = array(
                'memberid' => $member_id,
                'membertypeimage' => $data['membertypeimage'],
                'logged_in_user' => $data['logged_in_user'],
                'membertypeid' => $data['membertypeid']
            );

            $data['is_adminuser'] = $this->mobile_model->verify_user_role($data['memberid']);
            $data = array(
                'status' => 'success',
                'message' => 'User Exists');
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
        if($gender === 'Female'){
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
                $this->membermodel->create_new_logindetails($logindetails_data);
                $data = array(
                    'status' => 'success',
                    'message' => 'Registration complete');
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

}

?>