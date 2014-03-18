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
class user_authorization extends CI_Controller {

//put your code here

    public function __construct() {
        parent::__construct();
        $this->load->model('members_model/membermodel');
        $this->load->library('session');
        log_message('info', 'after session initialization................');
    }

    function autosuggest() {
        extract($_POST);
        log_message('info', 'inside the auto suggest page.................');
        $list = '';
        log_message('info', 'after the list array.................');
        $result_drug = $this->membermodel->autosuggest($data, $limit, $drug_id);
        log_message('info', 'after retrieving the data from db.................');

        if ($result_drug) {
            foreach ($result_drug as $result_data) {
                log_message('info', 'looping.................');
                if ($getId == 1)
                    $list .= $result_data['id_drug'] . "-";
                $list .= strtolower($result_data['drug_name']) . " |";
            }

// send all collected data to the client
            $list = substr($list, 0, -1);
            echo $list;
        }
        else
            echo 0;
    }

    function autosuggest_pharmacy() {
        extract($_POST);
        log_message('info', 'inside the auto suggest page for pharmacy.................' . $location);
        $list = '';
        $result_pharm = $this->membermodel->autosuggest_pharmacy($data, $location, $limit);
        log_message('info', 'after retrieving the data from db.................');

        if ($result_pharm) {
            foreach ($result_pharm as $result_data) {
                log_message('info', 'looping.................');
                if ($getId == 1)
                    $list .= $result_data['id'] . "-";
                $list .= strtolower($result_data['pharm_name']) . " |";
            }

// send all collected data to the client
            $list = substr($list, 0, -1);
            echo $list;
        }
        else
            echo 0;
    }

    function autosuggest_articles() {
        extract($_POST);
        log_message('info', 'inside the auto suggest articles page.................');
        $list = '';
        log_message('info', 'after the list array.................');
        $result_articles = $this->membermodel->autosuggest_articles($data, $limit);
        log_message('info', 'after retrieving the data from db.................');

        if ($result_articles) {
            foreach ($result_articles as $result_data) {
                log_message('info', 'looping.................');
                if ($getId == 1)
                    $list .= $result_data['id'] . "-";
                $list .= strtolower($result_data['article_title']) . " |";
            }

// send all collected data to the client
            $list = substr($list, 0, -1);
            echo $list;
        }
        else
            echo 0;
    }

    function autosuggest_forumtopics() {
        extract($_POST);
        log_message('info', 'inside the auto suggest forums page.................');
        $list = '';
        log_message('info', 'after the list array.................');
        $result_forum = $this->membermodel->autosuggest_forumtopics($data, $limit);
        log_message('info', 'after retrieving the data from db.................');

        if ($result_forum) {
            foreach ($result_forum as $result_data) {
                log_message('info', 'looping.................');
                if ($getId == 1)
                    $list .= $result_data['id'] . "-";
                $list .= strtolower($result_data['topic_title']) . " |";
            }

// send all collected data to the client
            $list = substr($list, 0, -1);
            echo $list;
        }
        else
            echo 0;
    }

    function logout() {
        header("cache-Control: no-store, no-cache, must-revalidate");
        header("cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
        header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
        $this->session->sess_destroy();
        redirect('');
    }

    function newslist() {
        extract($_GET);
        $data = '';
        if ($article_type == 'news_title') {
            $data['retrieved_news'] = $this->membermodel->retrieve_news_byid($news_id);
        } else {
            $data['retrieved_news'] = $this->membermodel->retrieve_newsletter_byid($news_id);
        }
        log_message('info', 'after news list has been clicked.................');
        $this->load->view('newsandevents', $data);
    }

    function discussionforum() {
        extract($_GET);
        $data = '';
        $maxtopiccomment = 20;
        $desiredPosts = 10;
        $topic_id = 1;


        $data['memberid'] = $this->session->userdata('memberid');

        $data['logged_in_user'] = $this->session->userdata('logged_in_user');
        $data['membertypeimage'] = $this->session->userdata('membertypeimage');
        $data['membertypeid'] = $this->session->userdata('membertypeid');

        $default_data = $this->membermodel->retrieve_forumtopic_by_mostcomment();
        $data['topic_data'] = $default_data;
//  $data['default_topic'] = $this->membermodel->retrieve_first_topic($topic_id);
        $data['most_viewed_topics'] = $this->membermodel->retrieve_twenty_forumtopic_by_mostcomment($maxtopiccomment);
        $data['retrieved_forum'] = $this->membermodel->retrieve_forums();
        $topic_id = $default_data['id'];
        $all_comment_count = $this->membermodel->topic_comment_count($topic_id);
        $result_set = $this->membermodel->retrieve_topic_comments($topic_id, $desiredPosts);
        $comment_counts = $this->membermodel->retrieve_topic_comment_counts($topic_id);
        $data['comments'] = $result_set;
        $data['all_comment_count'] = $all_comment_count;
        $data['desiredPosts'] = $desiredPosts;
        $data['comment_counts'] = $comment_counts;
        log_message('info', 'after forums has been clicked.................');
        $this->load->view('forum', $data);
    }

    function redirect_to_displaypharm() {
        extract($_GET);

        $pharmacyData = $result_pharm = $this->membermodel->retrievepharmacy_byid($pharmacyid);
        $data['pharmacyData'] = $pharmacyData;
        $address = trim($pharmacyData['address']);
        $data['memberid'] = $this->session->userdata('memberid');
// $pharmacyDataEncoded = json_encode($pharmacyData);
        $this->load->library('googlemaps');


        $map_types_available = array('0' => 'HYBRID', '1' => 'TERRAIN', '2' => 'SATELLITE', '3' => 'ROADMAP', '4' => 'STREET',);
        $placesTypes = array('0' => 'dentist', '1' => 'department_store', '3' => 'grocery_or_supermarket', '4' => 'hospital', '5' => 'pharmacy', '6' => 'physiotherapist', '7' => 'shopping_mall', '8' => 'store',);

        $config = array(
            'center' => $address,
            'draggable' => 'false',
            'map_types_available' => $map_types_available,
            'zoom' => 17,
            'placesTypes' => $placesTypes,
        );
        $this->googlemaps->initialize($config);

        $marker = array();
        $marker['position'] = $address;
// $marker['icon'] = base_url().'images/marker.jpg';
        $this->googlemaps->add_marker($marker);

        $mapdetail = $this->googlemaps->create_map();
        $json_mapdetail = json_encode($mapdetail);
        $data['map_javascript'] = $mapdetail['js'];
        $data['map_display'] = $mapdetail['html'];
        $userid = $this->session->userdata('memberid');
        if ($userid == '') {
            $this->load->view('guestpharmacydetails', $data);
        } else {
            $this->load->view('pharmacydetails', $data);
        }
        //     $this->createpharmacysearchresult($pharmacyid, $userid);
    }

    function articleslist() {
        $default_id = 0;
        $limit = 15;
        $data['memberid'] = $this->session->userdata('memberid');
        // $data = '';
//  $data['news'] = $this->membermodel->retrieve_newsbeyond_id($default_id, $limit);
        $data['newsletter'] = $this->membermodel->retrieve_newsletterbeyond_id($default_id, $limit);

        log_message('info', 'after newsleters list has been clicked.................');
        $this->load->view('articles', $data);
    }

    function redirect_to_internship($data = '') {
        $default_id = 0;
        $limit = 20;
        $data['memberid'] = $this->session->userdata('memberid');
        log_message('info', 'after internships list has been clicked.................');
        $data['locations'] = $this->membermodel->retrieve_pharmacylocations();
        $data['internships'] = $this->membermodel->retrieve_internships($default_id, $limit);
        $this->load->view('internships', $data);
    }

    function redirect_to_managearticles($data = '') {
        $data['memberid'] = $this->session->userdata('memberid');
        log_message('info', 'after newsleters list has been clicked.................');
        $data['drugcategory'] = $this->membermodel->retrieve_drugcategory();
        $this->load->view('adminpage', $data);
    }

    function redirect_to_managedrugs() {
        $data = '';
        log_message('info', 'after newsleters list has been clicked.................');
        $data['drugcategory'] = $this->membermodel->retrieve_drugcategory();
        $data['drugbrand'] = $this->membermodel->retrieve_brandnames();
        $data['drugclass'] = $this->membermodel->retrieve_drugclass();
        $this->load->view('adminpagedrugs', $data);
    }

    function redirect_to_manageforums() {
        $data = '';
        $data['forums'] = $this->membermodel->retrieve_all_forums();
        $data['forumcategory'] = $this->membermodel->retrieve_forumcategories();
        log_message('info', 'after newsleters list has been clicked.................');
        $this->load->view('adminpageforum', $data);
    }

    function redirect_to_managepharmacy() {
        $data = '';
        log_message('info', 'after newsleters list has been clicked.................');
        $data['locations'] = $this->membermodel->retrieve_pharmacylocations();
        $this->load->view('adminpagepharmacy', $data);
    }

    function redirect_to_managebrandname() {
        $data = '';
        log_message('info', 'after brandname list has been clicked.................');
        $this->load->view('adminpagebrandname', $data);
    }

    function redirect_to_managedrugcategory() {
        $data = '';
        log_message('info', 'after drug category list has been clicked.................');
        $this->load->view('adminpagedrugcategory', $data);
    }

    function redirect_to_managedrugclass() {
        $data = '';
        log_message('info', 'after drug class list has been clicked.................');
        $this->load->view('adminpagedrugclass', $data);
    }

    function communitypharmacy() {
        $data = '';
        $default_id = 0;
        $limit = 20;
        log_message('info', 'after community pharmacy  has been clicked.................');
        $data['community_pharmacy'] = $this->membermodel->retrieve_pharmacybeyond_id($default_id, $limit);
        $data['locations'] = $this->membermodel->retrieve_pharmacylocations();
        if ($this->session->userdata('memberid') == '') {
            $this->load->view('guestcommunitypharmacy', $data);
        } else {
            $this->load->view('communitypharmacy', $data);
        }
    }

    public function redirecttosignin() {
        $this->load->view('signin');
    }

    public function index($message) {
//     $data['message'] = $message;
        redirect($message);
//$this->load->view('index', $data);
    }

    public function redirecttorays($message = '') {
        $default_id = 0;
        $limit = 20;
        $data = '';
        log_message('info', 'after rays has been clicked.................');
        $data['news'] = $this->membermodel->retrieve_articles_bylimit($default_id, $limit);
// $data['news'] = $this->membermodel->retrieve_newsbeyond_id($default_id, $limit);
//  $data['newsletter'] = $this->membermodel->retrieve_newsletterbeyond_id($default_id, $limit);
        $this->load->view('homepage', $data);
    }

    public function raysloginauthrization() {

        $message = 'sys_admin/user_authorization/redirecttorays';
        log_message('info', 'inside rays login auth.............' . $message);
        $this->loginauthorization($message);
    }

    public function loginauthorization($message = '') {
        log_message('info', 'inside rays login auth.............' . $message);
        $data = '';
        if ($message == '') {
            $message = 'sys_admin/user_authorization/redirecttosignin';
        }
        $this->form_validation->set_rules('username', 'Username * ', 'required|xss_clean'); // we have to set criteria of each form elemen, it will evaluate automaticallly
        $this->form_validation->set_rules('password', 'Password * ', 'required|xss_clean');

        if ($this->form_validation->run() === FALSE) {// if validation is false then return error message
            $this->session->set_flashdata('message', 'Invalid login details');
            log_message('info', 'inside rays login auth.............' . $message);

            $this->index($message);
        } else {
            $drug_id = $this->input->post('drugid');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $authenticate = $this->membermodel->verify_user_login($username, $password);
            if ($authenticate) {
                log_message('info', 'before getting the relation of member............' . $authenticate['memberid_member']);
                $member_id = $authenticate['memberid_member'];
                $data['memberid'] = $member_id;

                $auth_member = $this->membermodel->retrieve_member($authenticate['memberid_member']);
                log_message('info', 'registration complete and username set on userpage.................' . $auth_member['firstname_member']);

                $data['logged_in_user'] = $auth_member['firstname_member'] . ' ' . $auth_member['surname_member'];
                $data['membertypeimage'] = $auth_member['membertypeimage'];
                $data['membertypeid'] = $auth_member['membertypeid'];
                $logindetails = array(
                    'memberid' => $member_id,
                    'membertypeimage' => $data['membertypeimage'],
                    'logged_in_user' => $data['logged_in_user'],
                    'membertypeid' => $data['membertypeid']
                );
                $rolename = 'admin';
                $data['is_adminuser'] = $this->membermodel->verify_user_role($data['memberid'], $rolename);
                $this->session->set_userdata($logindetails);

//          $this->repopulate_page($data, $drug_id);
//uncomment above to redirect to online pharmacy and uncomment all below
                if ($data['is_adminuser']) {
                    $this->redirect_to_managearticles($data);
                } else {
                    $this->articleslist();
                }
            } else {
                $this->session->set_flashdata('message', 'Invalid login details');
                log_message('info', 'inside rays login auth.............' . $message);
                $this->index($message);
            }
        }
    }

    function reloadwelcomepage() {
        $drug_id = 1;
        $data = '';
        $data['memberid'] = $this->session->userdata('memberid');

        $data['logged_in_user'] = $this->session->userdata('logged_in_user');
        $data['membertypeimage'] = $this->session->userdata('membertypeimage');
        $data['membertypeid'] = $this->session->userdata('membertypeid');
        $rolename = 'admin';
        $data['is_adminuser'] = $this->membermodel->verify_user_role($data['memberid'], $rolename);

        $this->repopulate_page($data, $drug_id);
//uncomment above to redirect to online pharmacy and uncomment all below
        /*  if ($data['is_adminuser']) {
          $this->redirect_to_managearticles($data);
          } else {
          $this->articleslist();
          } */
    }

    function default_select() {
        extract($_POST);
        $desiredPosts = '20';
        $toptenpharmacy_data = $this->membermodel->retrieve_topten_pharmacy($desiredPosts);
    }

    public function register_member() {
        $tooltip = "tooltip";
        log_message('info', 'inside the register member.................');
        $data = '';
        log_message('info', 'before initializing member array.................');
        $member_data = array();
        log_message('info', 'before setting validation rules.................');
        $this->form_validation->set_rules('fname', 'First Name ', 'required|xss_clean'); // we have to set criteria of each form elemen, it will evaluate automaticallly
        $this->form_validation->set_rules('lname', 'Last Name ', 'required|xss_clean');
        $this->form_validation->set_rules('email', 'Email Address ', 'required|xss_clean|valid_email|matches[reemail]');
        $this->form_validation->set_rules('reemail', 'Re-enter Email Address * ', 'required|xss_clean|valid_email');
        $this->form_validation->set_rules('sex', 'Gender ', 'required|xss_clean');
        $this->form_validation->set_rules('password', 'Password ', 'required|xss_clean|matches[newpassword]');
        $this->form_validation->set_rules('newpassword', 'Confirm Password ', 'required|xss_clean');

        $this->form_validation->set_rules('days', 'Date of birth * ', 'required|callback_default_select');
        $this->form_validation->set_rules('months', 'Month of birth ', 'required|callback_default_select');
        $this->form_validation->set_rules('years', 'Year of birth * ', 'required|callback_default_select');
        log_message('info', 'after setting validation rules.................');
        if ($this->form_validation->run() === FALSE) {// if validation is false then return error message
            log_message('info', 'validation is false so error message is returned.................');
            $data['fname_class'] = "success-validation";
            $data['lname_class'] = "success-validation";
            $data['emailaddress_class'] = "success-validation";
            $data['remailaddress_class'] = "success-validation";
            $data['password_class'] = "success-validation";
            $data['rpassword_class'] = "success-validation";
            $data['dob_class'] = "success-validation";
            $data['fname'] = form_error('fname');
            $data['lname'] = form_error('lname');
            $data['email'] = form_error('email');
            $data['reemail'] = form_error('reemail');
            $data['password'] = form_error('password');
            $data['repassword'] = form_error('newpassword');
            $data['dob'] = (form_error('days') != '' ? form_error('days') : (form_error('months') != '' ? form_error('months') : form_error('years')));
            if (form_error('fname') != '') {
                $data['fname_class'] = "alert-validation";
                $data['fname_tooltip'] = $tooltip;
            }if (form_error('lname') != '') {
                $data['lname_class'] = "alert-validation";
                $data['lname_tooltip'] = $tooltip;
            }if (form_error('email') != '') {
                $data['emailaddress_class'] = "alert-validation";
                $data['email_tooltip'] = $tooltip;
            }if (form_error('reemail') != '') {
                $data['remailaddress_class'] = "alert-validation";
                $data['reemail_tooltip'] = $tooltip;
            }if (form_error('password') != '') {
                $data['password_class'] = "alert-validation";
                $data['password_tooltip'] = $tooltip;
            }if (form_error('newpassword') != '') {
                $data['rpassword_class'] = "alert-validation";
                $data['repassword_tooltip'] = $tooltip;
            }if (form_error('days') != '' || form_error('months') != '' || form_error('years') != '') {
                $data['dob_class'] = "alert-validation";
                $data['dob_tooltip'] = $tooltip;
            }
            log_message('info', 'the form message controller==>' . $data['dob'] . '------' . form_error('days') . '--------' . form_error('months') . '---------' . form_error('years'));
            $this->session->set_flashdata($data);
            $member_data = array(
                'fname_member' => $this->input->post('fname'),
                'lname_member' => $this->input->post('lname'),
                'sex_member' => $this->input->post('sex'),
                'days' => $this->input->post('days'),
                'months' => $this->input->post('months'),
                'years' => $this->input->post('years'),
                'email_member' => $this->input->post('email'),
                'reemail_member' => $this->input->post('reemail')
            );
            $this->session->set_flashdata($member_data);
            $this->redirecttosignin();
//$this->index('');
        } else {
            log_message('info', 'before setting the member data.................');
            $member_data = array(
                'firstname_member' => $this->input->post('fname'),
                'surname_member' => $this->input->post('lname'),
                'gender_member' => $this->input->post('sex'),
                'dateOfBirth_member' => $this->input->post('days') . '-' . $this->input->post('months') . '-' . $this->input->post('years'),
                'emailaddress_member' => $this->input->post('email'),
                'membertypeid_membertype' => '1'
            );
            $data['membertypeimage'] = 'profilem';
            $data['membertypeid'] = '1';
            $logindetails_data = array(
                'username' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                'status' => 'active',
                'datecreated' => date("Y-m-d H:i:s"),
                'datemodified' => date("Y-m-d H:i:s")
            );
            $drug_id = $this->input->post('drugid');
            $existing_member = $this->membermodel->verify_email_address($this->input->post('email'));
            if (!$existing_member) {
                $member_id = $this->membermodel->create_new_user($member_data);
                $data['memberid'] = $member_id;
                log_message('info', 'the id of retrieved member is.................. ' . $member_id);
                if ($member_id > 0) {
                    $logindetails_data['memberid_member'] = $member_id;
                    $logindetail_id = $this->membermodel->create_new_logindetails($logindetails_data);
                    $member_type = 'User';
                    $userrole_id = $this->membermodel->retrieve_userrolebyname($member_type);
                    $logindetailsrole_data = array(
                        'logindetailsuserrole_logindetailsid' => $logindetail_id,
                        'logindetailsuserrole_userroleid' => $userrole_id,
                        'time_created' => date("Y-m-d H:i:s"),
                        'last_updated' => date("Y-m-d H:i:s")
                    );
                    $this->membermodel->create_logindetailrole($logindetailsrole_data);
                } else {
                    log_message('info', 'the registration was incomplete : invalid registration information.................');
                    $data['registration_class'] = "error-validation registerbuttonerror";
                    $data['registration_msg'] = "Service temporarily unavailable";
                    $data['fname_class'] = "success-validation";
                    $data['lname_class'] = "success-validation";
                    $data['emailaddress_class'] = "success-validation";
                    $data['remailaddress_class'] = "success-validation";
                    $data['password_class'] = "success-validation";
                    $data['rpassword_class'] = "success-validation";
                    $data['dob_class'] = "success-validation";
                    $data['registerbutton_tooltip'] = $tooltip;
                    $this->session->set_flashdata($data);
                    $member_data = array(
                        'fname_member' => $this->input->post('fname'),
                        'lname_member' => $this->input->post('lname'),
                        'sex_member' => $this->input->post('sex'),
                        'days' => $this->input->post('days'),
                        'months' => $this->input->post('months'),
                        'years' => $this->input->post('years'),
                        'email_member' => $this->input->post('email'),
                        'reemail_member' => $this->input->post('reemail')
                    );
                    log_message('info', 'the form message controller==>' . $data['reemail'] . '------' . $data['email']);
                    $this->session->set_flashdata($member_data);
                    $this->redirecttosignin();
//   $this->index('');
                }
                log_message('info', 'after setting member array and attempting to print array.................');
                $username = $this->input->post('email');
                log_message('info', 'after setting email to username variable.................');
                $password = $this->input->post('password');
                log_message('info', 'after setting password to password variable.................');

                $authenticate = $this->membermodel->verify_user_login($username, $password);
                log_message('info', 'after verifying login details.................');
                if ($authenticate) {
                    log_message('info', 'before getting the relation of member............' . $authenticate['memberid_member']);
                    $member_id = $authenticate['memberid_member'];
                    $data['memberid'] = $member_id;

                    $auth_member = $this->membermodel->retrieve_member($authenticate['memberid_member']);
                    log_message('info', 'registration complete and username set on userpage.................' . $auth_member['firstname_member']);

                    $data['logged_in_user'] = $auth_member['firstname_member'] . ' ' . $auth_member['surname_member'];
                    $data['membertypeimage'] = $auth_member['membertypeimage'];
                    $data['membertypeid'] = $auth_member['membertypeid'];
                    $logindetails = array(
                        'memberid' => $member_id,
                        'membertypeimage' => $data['membertypeimage'],
                        'logged_in_user' => $data['logged_in_user'],
                        'membertypeid' => $data['membertypeid'],
                    );

                    $this->session->set_userdata($logindetails);

                    $this->repopulate_page($data, $drug_id);
                } else {
                    log_message('info', 'the registration was incomplete : invalid registration information.................');
                    $data['registration_class'] = "error-validation registerbuttonerror";
                    $data['registerbutton_tooltip'] = $tooltip;
                    $data['registration_msg'] = "Service temporarily unavailable";
                    $data['fname_class'] = "success-validation";
                    $data['lname_class'] = "success-validation";
                    $data['emailaddress_class'] = "success-validation";
                    $data['remailaddress_class'] = "success-validation";
                    $data['password_class'] = "success-validation";
                    $data['rpassword_class'] = "success-validation";
                    $data['dob_class'] = "success-validation";
                    $this->session->set_flashdata($data);
                    $member_data = array(
                        'fname_member' => $this->input->post('fname'),
                        'lname_member' => $this->input->post('lname'),
                        'sex_member' => $this->input->post('sex'),
                        'days' => $this->input->post('days'),
                        'months' => $this->input->post('months'),
                        'years' => $this->input->post('years'),
                        'email_member' => $this->input->post('email'),
                        'reemail_member' => $this->input->post('reemail')
                    );
                    log_message('info', 'the form message controller==>' . $data['reemail'] . '------' . $data['email']);
                    $this->session->set_flashdata($member_data);
// $this->index('');
                    $this->redirecttosignin();
                }
            } else {
                $data['fname_class'] = "success-validation";
                $data['lname_class'] = "success-validation";
                $data['emailaddress_class'] = "error-validation";
                $data['remailaddress_class'] = "error-validation";
                $data['password_class'] = "success-validation";
                $data['rpassword_class'] = "success-validation";
                $data['dob_class'] = "success-validation";
                $data['email'] = "A user exists already with this email address";
                $data['reemail'] = "A user exists already with this email address";
                $data['reemail_tooltip'] = $tooltip;
                $data['email_tooltip'] = $tooltip;
                $this->session->set_flashdata($data);
                $member_data = array(
                    'fname_member' => $this->input->post('fname'),
                    'lname_member' => $this->input->post('lname'),
                    'sex_member' => $this->input->post('sex'),
                    'days' => $this->input->post('days'),
                    'months' => $this->input->post('months'),
                    'years' => $this->input->post('years'),
                    'email_member' => $this->input->post('email'),
                    'reemail_member' => $this->input->post('reemail')
                );
                log_message('info', 'the form message controller==>' . $data['reemail'] . '------' . $data['email']);
                $this->session->set_flashdata($member_data);
//  $this->index('');
                $this->redirecttosignin();
            }
        }
    }

    function repopulate_drug_relations() {
        extract($_POST);
        $result_set = $this->membermodel->retrieve_drugby_related_items($class_id, $brandname_id, $company_id, $indication_id, $drug_id);
        echo json_encode($result_set);
        //      echo $result_set;
    }

    function createpharmacy() {
        extract($_POST);
        log_message('info', 'Inside create pharmacy');
        $pharmacy_data = array('name' => $name,
            'address' => $address,
            'telephone' => $telephone,
            'locationid_location' => $location);
        $newsid = $this->membermodel->create_pharmacy($pharmacy_data);
        log_message('info', 'After creating pharmacy');
        $result_article['status'] = 'success';
        echo json_encode($result_article);
    }

    function createforum() {
        extract($_POST);
        log_message('info', 'Inside create forum');
        $newsubforum = $subforum;
        if ($subforum == 0) {
            $newsubforum = null;
        }
        $forum_data = array('name' => $title,
            'description' => $description,
            'timecreated' => date("Y-m-d H:i:s"),
            'forumid_forum' => $newsubforum);
        $forumid = $this->membermodel->create_forum($forum_data);
        log_message('info', 'After creating forum');
        $result_forum['status'] = 'success' . $subforum;
        $result_forum['forum_id'] = $forumid;
        echo json_encode($result_forum);
    }

    function createdrugcategory() {
        extract($_POST);
        log_message('info', 'Inside create drug category');
        $drugcategory_data = array('name' => $name,
            'description' => $description,
        );
        $drugclassid = $this->membermodel->create_drugcategory($drugcategory_data);
        log_message('info', 'After creating drug category');
        $result_forum['status'] = 'success';
        echo json_encode($result_forum);
    }

    function createbrandname() {
        extract($_POST);
        log_message('info', 'Inside create brand name');
        $brandname_data = array('name' => $name,
            'description' => $description,
        );
        $drugclassid = $this->membermodel->create_brandname($brandname_data);
        log_message('info', 'After creating brand name');
        $result_forum['status'] = 'success';
        echo json_encode($result_forum);
    }

    function createdrugclass() {
        extract($_POST);
        log_message('info', 'Inside create drug class');
        $drugclass_data = array('name' => $name,
            'description' => $description,
        );
        $drugclassid = $this->membermodel->create_drugclass($drugclass_data);
        log_message('info', 'After creating drug class');
        $result_forum['status'] = 'success';
        echo json_encode($result_forum);
    }

    function createdrug() {
        extract($_POST);
        log_message('info', 'Inside create drug');
        $drug_data = array('drug_name' => $title,
            'drug_description' => $description,
            'time_created' => date("Y-m-d H:i:s"),
            'brandnameid_brandname' => $drugbrandid,
            'drugcategoryid_drugcategory' => $drugcategory,);

        $drugid = $this->membermodel->create_drug($drug_data);
        $result_debug = '';
        foreach ($drugclass as $columnName => $columnData) {
            $drug_class = array('drugclassid_drugclass' => $columnData,
                'drugid_drug' => $drugid,);

            $drugclassid = $this->membermodel->create_drugclassdrug($drug_class);
            $result_debug .= $drugid . ' ---- ' . $columnData . ' ---- id is ----  :' . $drugclassid;
        }

        log_message('info', 'After creating drug');
        $result_topic['status'] = 'success' . '>>>>' . $result_debug;
        echo json_encode($result_topic);
    }

    function createtopic() {
        extract($_POST);
        log_message('info', 'Inside create topic');
        $topic_data = array('name' => $title,
            'description' => $description,
            'timecreated' => date("Y-m-d H:i:s"),
            'forumid_forum' => $forumid,
            'forum_categoryid_forum' => $categoryforumid,);
        $newsid = $this->membermodel->create_topic($topic_data);
        log_message('info', 'After creating topic');
        $result_topic['status'] = 'success';
        echo json_encode($result_topic);
    }

    function createarticle() {
        extract($_POST);
        log_message('info', 'Inside create article');
        $news_data = array('enabled' => 'true',);
        $newsid = $this->membermodel->createnews($news_data);
        log_message('info', 'After creating news');
        $drugmerger_data = array('newsid_news' => $newsid,
            'drugcategoryid_drugcategory' => $drugcategory,);
        $this->membermodel->createnewsdrugmerger($drugmerger_data);
        log_message('info', 'After drug category creation');
        /* $name       = $_FILES['file']['name'];  
          $temp_name  = $_FILES['file']['tmp_name'];
          if(isset($name)){
          if(!empty($name)){
          $location = '../uploads/';
          if(move_uploaded_file($temp_name, $location.$name)){
          echo 'uploaded';
          }
          }
          }  else {
          echo 'please uploaded';
          } */

        $imagePath = "upload/" . $_FILES["file"]["name"];

        $allowedExts = array("gif", "jpeg", "jpg", "png");
        $temp = explode(".", $_FILES["file"]["name"]);
        $extension = end($temp);
        $title_temp = explode(" ", $title);
        $file_name = $title_temp[0] . '_' . date("U") . '.' . $extension;
        if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/pjpeg") || ($_FILES["file"]["type"] == "image/x-png") || ($_FILES["file"]["type"] == "image/png")) && ($_FILES["file"]["size"] < 20000) && in_array($extension, $allowedExts)) {
            if ($_FILES["file"]["error"] > 0) {
                $result_article['error'] = "Return Code: " . $_FILES["file"]["error"] . "<br>";
            } else {
                $result_article['upload'] = "Upload: " . $_FILES["file"]["name"] . "<br>";
                $result_article['type'] = "Type: " . $_FILES["file"]["type"] . "<br>";
                $result_article['size'] = "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
                $result_article['tempfile'] = "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

                if (file_exists("upload/" . $file_name)) {
                    $result_article['exists'] = $_FILES["file"]["name"] . " already exists. ";
                } else {
                    move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $file_name);
                    $result_article['status'] = "Stored in: " . "upload/" . $file_name;
                }
            }
        } else {
            $result_article['error'] = "Invalid file";
        }

        $article_data = array(
            'title' => $title,
            'description' => $description,
            'time_created' => date("Y-m-d H:i:s"),
            'guestonly' => $guestonly,
            'memberid_member' => $memberid,
            'newsid_news' => $newsid,
            'author' => $author,
            'defaultimage' => $imagename,
        );
        log_message('info', 'After setting data for article creation');
        $this->membermodel->create_article($article_data);
        log_message('info', 'After creating article');
//    $result_article['status'] = 'success';
        echo json_encode($result_article);
    }

    function createcomment() {
        extract($_POST);
        log_message('info', 'inside the create comment page.................');
        $comment_data = array(
            'comment' => $comment,
            'memberid_member' => $memberid,
            'drugid_drug' => $drug_id,
            'time_created' => date("Y-m-d H:i:s"),
        );


        $this->membermodel->create_comment($comment_data);
        $result_comment['comments'] = $this->membermodel->retrieve_comment_beyondid($lastcomment_id, $drug_id);
        $result_comment['comment_counts'] = $this->membermodel->retrieve_comments_by_drugid($drug_id);
        echo json_encode($result_comment);
    }

    function createtopiccomment() {
        extract($_POST);
        log_message('info', 'inside the create comment page.................');
        $comment_data = array(
            'comment' => $comment,
            'memberid_member' => $memberid,
            'forum_topicid_topicforum' => $topic_id,
            'timecreated' => date("Y-m-d H:i:s"),
        );


        $this->membermodel->create_topic_comment($comment_data);
        $result_comment['comments'] = $this->membermodel->retrieve_topic_comment_beyondid($lastcomment_id, $topic_id);
        $result_comment['comment_counts'] = $this->membermodel->retrieve_topic_comments_by_topic($topic_id);
        echo json_encode($result_comment);
    }

    function retrieveforum() {
        extract($_GET);
        log_message('info', 'The forum id is ' . $forum_id);
//retrieve sub forum / topic by forum id

        $result_forum = $this->membermodel->retrieve_forum_and_topic($forum_id);
        $json_result = json_encode($result_forum);
        log_message('info', 'The encoded json is ' . $json_result);
        echo $json_result;
//     echo '[{"text": "Color blindness","id": "36","hasChildren": true}]';
    }

    function retrievepharmacy_bylocation() {
        extract($_POST);
        $result_pharm = $this->membermodel->retrievepharmacy_bylocation($locationid, $limit);
//     log_message('info', println($result_article));
        echo json_encode($result_pharm);
    }

    function retrievepharmacy() {
        extract($_POST);
        $result_pharm = $this->membermodel->retrieve_pharmacy_bylimit($pharmacyid, $locationid, $limit);
//     log_message('info', println($result_article));
        echo json_encode($result_pharm);
    }

    function retrievepharmacy_byid() {
        extract($_POST);
        $result_pharm = $this->membermodel->retrievepharmacy_byid($pharmacyid);
//     log_message('info', println($result_article));
        echo json_encode($result_pharm);
    }

    function retrievemapdetail() {
        extract($_POST);
        $this->load->library('googlemaps');
        $config = array(
            'center' => $address,
            'draggable' => 'false',);
        $this->googlemaps->initialize($config);
        $mapdetail = $this->googlemaps->create_map();
        echo json_encode($mapdetail);
    }

    function retrieve_location_ref() {
        extract($_POST);
        $result_locations = json_encode($this->membermodel->retrieve_pharmacylocations_bylocationid($locationid));
        echo $result_locations;
    }

    function retrieve_internships() {
        extract($_POST);
        $result_internships['internships'] = json_encode($this->membermodel->retrieve_internships($lastinternship_id, $limit));
//   $result_rays['news'] = json_encode($this->membermodel->retrieve_newsbeyond_id($lastnews_id, $limit));
//  $result_rays['newsletter'] = json_encode($this->membermodel->retrieve_newsletterbeyond_id($lastnewsletter_id, $limit));
        echo json_encode($result_internships);
    }

    function retrieve_rays() {
        extract($_POST);
        $result_rays['news'] = json_encode($this->membermodel->retrieve_articles_bylimit($lastnewsletter_id, $limit));
//   $result_rays['news'] = json_encode($this->membermodel->retrieve_newsbeyond_id($lastnews_id, $limit));
//  $result_rays['newsletter'] = json_encode($this->membermodel->retrieve_newsletterbeyond_id($lastnewsletter_id, $limit));
        echo json_encode($result_rays);
    }

    function retrievetopic() {
        extract($_POST);
        $result_topic = $this->membermodel->retrieve_topic($topic_id);
        $result_topic['comments'] = $this->membermodel->retrieve_topic_comment_byrange($start, $desiredPosts, $topic_id);
        $result_topic['comment_count'] = $this->membermodel->topic_comment_count($topic_id);
        $result_topic['comment_counts'] = $this->membermodel->retrieve_topic_comments_by_topic($topic_id);
        echo json_encode($result_topic);
    }

    function retrievedrug() {
        extract($_POST);
        $result_drug = $this->membermodel->retrieve_drug($drug_id);
        $result_drug['comments'] = $this->membermodel->retrieve_comment_byrange($start, $desiredPosts, $drug_id);
        $result_drug['comment_count'] = $this->membermodel->comment_count($drug_id);
        $result_drug['related_news'] = json_encode($this->membermodel->retrieve_news($drug_id));
        $result_drug['related_pharmacy'] = json_encode($this->membermodel->retrieve_pharmacy($drug_id, $limit));
//   $result_drug['related_newsletter'] = json_encode($this->membermodel->retrieve_newsletters($drug_id));
        $result_drug['comment_counts'] = $this->membermodel->retrieve_comments_by_drugid($drug_id);

        echo json_encode($result_drug);
    }

    function retrieveFrontEndInfo() {
        $ipaddress = $this->input->ip_address();
        include('ip2locationlite.class.php');

//Load the class
        $ipLite = new ip2location_lite;
        $ipLite->setKey('e1c713f174bb86c8843e82b6aac56f8d050dab6a6649fe9134e9e19ea8e06238');

//Get errors and locations
        $geo_data = $ipLite->getCity($ipaddress);
        $location = "Lagos";
        $longitude = "3.39583";
        $latitude = "6.45306";
        if (!empty($geo_data) && is_array($geo_data)) {
            if ($geo_data['statusCode'] != 'ERROR') {
                $longitude = $geo_data['longitude'];
                $latitude = $geo_data['latitude'];
                $city = $geo_data['cityName'];
                $country_name = $geo_data['countryName'];
                $country_code = $geo_data['countryCode'];
                $region_name = $geo_data['regionName'];
                $zip_postal_code = $geo_data['zipCode'];
                $timezone = $geo_data['timeZone'];
                $location = $city . ', ' . $country_name . '[' . $country_code . '] - ' . $region_name . ' (' . $zip_postal_code . ') ' . $timezone;
            }
        }
        $frontEndInfo = array(
            'ipaddress' => $ipaddress,
            'location' => $location,
            'longitude' => $longitude,
            'latitude' => $latitude,
        );
        return $frontEndInfo;
    }

    function createdrugsearchresult() {
        extract($_POST);
        $frontEndInfo = $this->retrieveFrontEndInfo();
        $drug_search = array(
            'drug_id' => $drug_id,
            'timecreated' => date("Y-m-d H:i:s"),
            'ipaddress' => $frontEndInfo['ipaddress'],
            'location' => $frontEndInfo['location'],
            'longitude' => $frontEndInfo['longitude'],
            'latitude' => $frontEndInfo['latitude'],
            'user_id' => $user_id,);
        $this->membermodel->create_drugsearch($drug_search);
        //     echo json_encode($frontEndInfo);
    }

    function createarticlesearchresult() {
        extract($_POST);
        $frontEndInfo = $this->retrieveFrontEndInfo();

        $article_search = array(
            'article_id' => $articleid,
            'user_id' => $userid,
            'timecreated' => date("Y-m-d H:i:s"),
            'ipaddress' => $frontEndInfo['ipaddress'],
            'location' => $frontEndInfo['location'],
            'longitude' => $frontEndInfo['longitude'],
            'latitude' => $frontEndInfo['latitude'],
        );
        $this->membermodel->create_articlesearch($article_search);
        //     echo json_encode($frontEndInfo);
    }

    function createpharmacysearchresult() {
        extract($_POST);
        $frontEndInfo = $this->retrieveFrontEndInfo();
        // echo json_encode($frontEndInfo);
        $pharmacy_search = array(
            'pharmacy_id' => $pharmacyid,
            'timecreated' => date("Y-m-d H:i:s"),
            'ipaddress' => $frontEndInfo['ipaddress'],
            'location' => $frontEndInfo['location'],
            'longitude' => $frontEndInfo['longitude'],
            'latitude' => $frontEndInfo['latitude'],
            'user_id' => $user_id,);
        $this->membermodel->create_pharmacysearch($pharmacy_search);
    }

    function retrievearticle() {
        extract($_POST);
        $result_article = $this->membermodel->retrieve_article_byid($article_id);
//     log_message('info', println($result_article));
        echo json_encode($result_article);
    }

    function retrievetopiccomment() {
        extract($_POST);
        if (isset($_POST['start'])) {
            log_message('info', 'inside the retrieve ajax topic comment page.................');

            $result_comments = $this->membermodel->retrieve_topic_comment_byrange($start, $desiredPosts, $topic_id);
        } else {
            log_message('info', 'Nothing loaded.......');
        }
        log_message('info', $result_comments);
        echo $result_comments;
    }

    function retrievecomment() {
        extract($_POST);
        if (isset($_POST['start'])) {
            log_message('info', 'inside the retrieve ajax comment page.................');

            $result_comments = $this->membermodel->retrieve_comment_byrange($start, $desiredPosts, $drug_id);
        } else {
            log_message('info', 'Nothing loaded.......');
        }
        log_message('info', $result_comments);
        echo $result_comments;
    }

    /*  function createlocation() {
      $data = "3]Aba North;Aba South;Arochukwu;Bende;Ikwuano;Isiala Ngwa North;Isiala Ngwa South;Isuikwuato;Obi Ngwa;Ohafia;Osisioma;Ugwunagbo;Ukwa East;Ukwa West;Umuahia North;Umuahia South;Umu Nneochi=9]Demsa;Fufure;Ganye;Grie;Gombi;Gayuk;Hong;Jada;Larmurde;Madagali;Maiha;Mayo Belwa;Michika;Mubi North;Mubi South;Numan;Shelleng;Song;Toungo;Yola North;Yola South=8]Abak;Eastern Obolo;Eket;Esit Eket;Essien Udim;Etim Ekpo;Etinan;Ibeno;Ibesikpo Asutan;Ibiono-Ibom;Ika;Ikono;Ikot Abasi;Ikot Ekpene;Ini;Itu;Mbo;Mkpat-Enin;Nsit-Atai;Nsit-Ibom;Nsit-Ubium;Obot Akara;Okobo;Onna;Oron;Oruk Anam;Udung-Uko;Ukanafun;Uruan;Urue-Offong/Oruko;Uyo=7]Aguata;Anambra East;Anambra West;Anaocha;Awka North;Awka South;Ayamelum;Dunukofia;Ekwusigo;Idemili North;Idemili South;Ihiala;Njikoka;Nnewi North;Nnewi South;Ogbaru;Onitsha North;Onitsha South;Orumba North;Orumba South;Oyi=10]Alkaleri;Bauchi;Bogoro;Damban;Darazo;Dass;Gamawa;Ganjuwa;Giade;Itas/Gadau;Jama'are;Jama'are;Kirfi;Misau;Ningi;Shira;Tafawa Balewa;Toro;Warji;Zaki;Katagum=11]Brass;Ekeremor;Kolokuma/Opokuma;Nembe;Ogbia;Sagbama;Southern Ijaw;Yenagoa=37]Ado;Agatu;Apa;Buruku;Gboko;Guma;Gwer East;Gwer West;Katsina-Ala;Konshisha;Kwande;Logo;Makurdi;Obi;Ohimini;Oju;Okpokwu;Oturkpo;Tarka;Ukum;Ushongo;Vandeikya;Ogbadibo=12]Abadam;Askira/Uba;Bama;Bayo;Biu;Chibok;Damboa;Dikwa;Gubio;Guzamala;Gwoza;Hawul;Jere;Kaga;Kala/Balge;Konduga;Kukawa;Kwaya Kusar;Mafa;Magumeri;Maiduguri;Marte;Mobbar;Monguno;Ngala;Nganzai;Shani=13]Abi;Akamkpa;Akpabuyo;Bakassi;Bekwarra;Biase;Boki;Calabar South;Calabar Municipal;Etung;Ikom;Obanliku;Obubra;Obudu;Odukpani;Ogoja;Yakuur;Yala=14]Aniocha North;Aniocha South;Bomadi;Burutu;Ethiope East;Ethiope West;Ika North East;Ika South;Isoko North;Isoko South;Ndokwa East;Ndokwa West;Okpe;Oshimili North;Oshimili South;Patani;Sapele;Udu;Ughelli North;Ughelli South;Ukwuani;Uvwie;Warri North;Warri South;Warri South West=15]Abakaliki;Afikpo North;Afikpo South;Ebonyi;Ezza North;Ezza South;Ikwo;Ishielu;Ivo;Izzi;Ohaozara;Ohaukwu;Onicha=16]Akoko-Edo;Egor;Esan Central;Esan North-East;Esan South-East;Esan West;Etsako Central;Etsako East;Etsako West;Igueben;Ikpoba Okha;Oredo;Orhionmwon;Ovia North-East;Ovia South-West;Owan East;Owan West;Uhunmwonde=5]Ado Ekiti;Gbonyin;Efon;Ekiti East;Ekiti South-West;Ekiti West;Emure;Ido Osi;Ijero;Ikere;Ikole;Ilejemeje;Irepodun/Ifelodun;Ise/Orun;Moba;Oye=6]Aninri;Awgu;Enugu East;Enugu North;Enugu South;Ezeagu;Igbo Etiti;Igbo Eze North;Igbo Eze South;Isi Uzo;Nkanu East;Nkanu West;Nsukka;Oji River;Udenu;Udi;Uzo Uwani=4]Abaji;Municipal Area Council;Bwari;Gwagwalada;Kuje;Kwali=17]Akko;Balanga;Billiri;Dukku;Funakaye;Gombe;Kaltungo;Kwami;Nafada;Shongom;Yamaltu/Deba=18]Aboh Mbaise;Ahiazu Mbaise;Ehime Mbano;Ezinihitte;Ideato North;Ideato South;Ihitte/Uboma;Ikeduru;Isiala Mbano;Isu;Mbaitoli;Ngor Okpala;Njaba;Nkwerre;Nwangele;Obowo;Oguta;Ohaji/Egbema;Okigwe;Orlu;Orsu;Oru East;Oru West;Owerri North;Owerri West;Owerri Municipal;Unuimo=19]Auyo;Babura;Biriniwa;Birnin Kudu;Buji;Dutse;Gagarawa;Garki;Gumel;Guri;Gwaram;Gwiwa;Hadejia;Jahun;Kafin Hausa;Kaugama;Kazaure;Kiri Kasama;Kiyawa;Maigatari;Malam Madori;Miga;Ringim;Roni;Sule Tankarkar;Taura;Yankwashi=20]Birnin Gwari;Chikun;Giwa;Igabi;Ikara;Jaba;Jema'a;Kachia;Kaduna North;Kaduna South;Kagarko;Kajuru;Kaura;Kauru;Kubau;Kudan;Lere;Makarfi;Sabon Gari;Sanga;Soba;Zangon Kataf;Zaria=21]Ajingi;Albasu;Bagwai;Bebeji;Bichi;Bunkure;Dala;Dambatta;Dawakin Kudu;Dawakin Tofa;Doguwa;Fagge;Gabasawa;Garko;Garun Mallam;Gaya;Gezawa;Gwale;Gwarzo;Kabo;Kano Municipal;Karaye;Kibiya;Kiru;Kumbotso;Kunchi;Kura;Madobi;Makoda;Minjibir;Nasarawa;Rano;Rimin Gado;Rogo;Shanono;Sumaila;Takai;Tarauni;Tofa;Tsanyawa;Tudun Wada;Ungogo;Warawa;Wudil=22]Bakori;Batagarawa;Batsari;Baure;Bindawa;Charanchi;Dan Musa;Dandume;Danja;Daura;Dutsi;Dutsin Ma;Faskari;Funtua;Ingawa;Jibia;Kafur;Kaita;Kankara;Kankia;Katsina;Kurfi;Kusada;Mai'Adua;Malumfashi;Mani;Mashi;Matazu;Musawa;Rimi;Sabuwa;Safana;Sandamu;Zango=23]Aleiro;Arewa Dandi;Argungu;Augie;Bagudo;Birnin Kebbi;Bunza;Dandi;Fakai;Gwandu;Jega;Kalgo;Koko/Besse;Maiyama;Ngaski;Sakaba;Shanga;Suru;Wasagu/Danko;Yauri;Zuru=24]Adavi;Ajaokuta;Ankpa;Bassa;Dekina;Ibaji;Idah;Igalamela Odolu;Ijumu;Kabba/Bunu;Kogi;Lokoja;Mopa Muro;Ofu;Ogori/Magongo;Okehi;Okene;Olamaboro;Omala;Yagba East;Yagba West=25]Asa;Baruten;Edu;Ekiti;Ifelodun;Ilorin East;Ilorin South;Ilorin West;Irepodun;Isin;Kaiama;Moro;Offa;Oke Ero;Oyun;Pategi=1]Agege;Ajeromi-Ifelodun;Alimosho;Amuwo-Odofin;Apapa;Badagry;Epe;Eti Osa;Ibeju-Lekki;Ifako-Ijaiye;Ikeja;Ikorodu;Kosofe;Lagos Island;Lagos Mainland;Mushin;Ojo;Oshodi-Isolo;Shomolu;Surulere, Lagos State=26]Akwanga;Awe;Doma;Karu;Keana;Keffi;Kokona;Lafia;Obi;Toto;Wamba;Nasarawa;Nasarawa Egon=27]Agaie;Agwara;Bida;Borgu;Bosso;Chanchaga;Edati;Gbako;Gurara;Katcha;Kontagora;Lapai;Lavun;Magama;Mariga;Mashegu;Mokwa;Moya;Paikoro;Rafi;Rijau;Shiroro;Suleja;Tafa;Wushishi=2]Abeokuta North;Abeokuta South;Ado-Odo/Ota;Egbado North;Egbado South;Ewekoro;Ifo;Ijebu East;Ijebu North;Ijebu North East;Ijebu Ode;Ikenne;Imeko Afon;Ipokia;Obafemi Owode;Odeda;Odogbolu;Ogun Waterside;Remo North;Shagamu;Akoko North-East=28]Akoko North-West;Akoko South-West;Akoko South-East;Akure North;Akure South;Ese Odo;Idanre;Ifedore;Ilaje;Ile Oluji/Okeigbo;Irele;Odigbo;Okitipupa;Ondo East;Ondo West;Ose;Owo=29]Aiyedaade;Aiyedire;Atakunmosa East;Atakunmosa West;Boluwaduro;Boripe;Ede North;Ede South;Egbedore;Ejigbo;Ife Central;Ife East;Ife North;Ife South;Ifedayo;Ifelodun;Ila;Ilesa East;Ilesa West;Irepodun;Irewole;Isokan;Iwo;Obokun;Odo Otin;Ola Oluwa;Olorunda;Oriade;Orolu;Osogbo=30]Afijio;Akinyele;Atiba;Atigbo;Egbeda;Ibadan North;Ibadan North-East;Ibadan North-West;Ibadan South-East;Ibadan South-West;Ibarapa Central;Ibarapa East;Ibarapa North;Ido;Irepo;Iseyin;Itesiwaju;Iwajowa;Kajola;Lagelu;Ogbomosho North;Ogbomosho South;Ogo Oluwa;Olorunsogo;Oluyole;Ona Ara;Orelope;Ori Ire;Oyo;Oyo East;Saki East;Saki West;Surulere, Oyo State=31]Barkin Ladi;Bassa;Bokkos;Jos East;Jos North;Jos South;Kanam;Kanke;Langtang North;Langtang South;Mangu;Mikang;Pankshin;Qua'an Pan;Riyom;Shendam;Wase=32]Abua/Odual;Ahoada East;Ahoada West;Akuku-Toru;Andoni;Asari-Toru;Bonny;Degema;Eleme;Emuoha;Etche;Gokana;Ikwerre;Khana;Obio/Akpor;Ogba/Egbema/Ndoni;Ogba/Egbema/Ndoni;Ogu/Bolo;Okrika;Omuma;Opobo/Nkoro;Oyigbo;Port Harcourt;Tai=33]Binji;Bodinga;Dange Shuni;Gada;Goronyo;Gudu;Gwadabawa;Illela;Isa;Kebbe;Kware;Rabah;Sabon Birni;Shagari;Silame;Sokoto North;Sokoto South;Tambuwal;Tangaza;Tureta;Wamako;Wurno;Yabo=34]Ardo Kola;Bali;Donga;Gashaka;Gassol;Ibi;Jalingo;Karim Lamido;Kumi;Lau;Sardauna;Takum;Ussa;Wukari;Yorro;Zing=35]Bade;Bursari;Damaturu;Fika;Fune;Geidam;Geidam;Gulani;Jakusko;Karasuwa;Machina;Nangere;Nguru;Potiskum;Tarmuwa;Yunusari;Yusufari;Gujba=36]Anka;Bakura;Birnin Magaji/Kiyaw;Bukkuyum;Bungudu;Gummi;Gusau;Kaura Namoda;Maradun;Maru;Shinkafi;Talata Mafara;Chafe;Zurmi";
      $split_brandname = explode("=", $data);
      $split_brandname = array_unique($split_brandname);
      foreach ($split_brandname as $by_location) {
      $split_location = explode("]", $by_location);
      $split_location = array_unique($split_location);
      $location_id = $split_location[0];
      $final_location_split = explode(";", $split_location[1]);
      $final_location_split = array_unique($final_location_split);
      foreach ($final_location_split as $brand_name) {
      $location_data = array(
      'name' => $brand_name,
      'description' => $brand_name,
      );
      $result_comments = $this->membermodel->create_new_location($location_data);
      $location_ref_data = array(
      'location_id' => $result_comments,
      'super_locationid' => $location_id,
      );


      $this->membermodel->create_new_location_ref($location_ref_data);
      }
      }
      echo "SUCCESS!!!";
      }
     */

    function repopulate_page($data, $drug_id) {
        $data['drugid'] = $drug_id;
        $desiredPosts = 10;
        $result_set = $this->membermodel->retrieve_comments($drug_id, $desiredPosts);
        $vacancy_search = $this->membermodel->retrieve_vacancy();
        $comment_counts = $this->membermodel->retrieve_comment_counts($drug_id);
        $result_drug = $this->membermodel->retrieve_drug($drug_id);
        $news_result = $this->membermodel->retrieve_news($drug_id);
        // $newsletters_result = $this->membermodel->retrieve_newsletters($drug_id);
        $all_comment_count = $this->membermodel->comment_count($drug_id);
        $related_pharmacy = $this->membermodel->retrieve_pharmacy($drug_id, $desiredPosts);
        $drugclass_id = 0;
        $pregnancycategory_id = 0;
        $manufacturer_id = 0;
        $related_drug_result_set = $this->membermodel->retrieve_drugby_class_pregnancycategory_manufacturer($drugclass_id, $pregnancycategory_id, $manufacturer_id);
        $toptendrugs_data = $this->membermodel->retrieve_topten_drugs($desiredPosts);
        $toptenpharmacy_data = $this->membermodel->retrieve_topten_pharmacy($desiredPosts);
        $toptenreadarticle = $this->membermodel->retrieve_topten_article($desiredPosts);

        $data['related_drugs'] = '';
        $data['comments'] = $result_set;
        $data['drug_data'] = $result_drug;
        $data['all_comment_count'] = $all_comment_count;
        $data['vacancy_data'] = $vacancy_search;
        $data['comment_counts'] = $comment_counts;
        $data['related_pharmacy'] = $related_pharmacy;
        $data['news'] = $news_result;
        //  $data['newsletters'] = $newsletters_result;
        $data['desiredPosts'] = $desiredPosts;
        $data['toptendrugs_data'] = $toptendrugs_data;
        $data['toptenpharmacy_data'] = $toptenpharmacy_data;
        $data['toptenreadarticle'] = $toptenreadarticle;

        if ($data['is_adminuser']) {
            $this->redirect_to_managearticles($data);
        } else {
            if ($this->session->userdata('memberid') == '') {
                $this->load->view('onlinepharmacy', $data);
            } else {
                $this->load->view('userpage', $data);
            }
        }
    }

}

?>
