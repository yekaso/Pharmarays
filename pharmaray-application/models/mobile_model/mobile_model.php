<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of membermodel
 *
 * @author upperlink
 */
class mobile_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
   function verify_user_role($memberid) {
        $this->db->select('ur.*, ')
                ->from('userrole ur')
                ->join('logindetails_userrole ldur', 'ldur.logindetailsuserrole_userroleid = ur.id_userrole')
                ->join('logindetails l', 'l.id_logindetails = ldur.logindetailsuserrole_logindetailsid')
                ->where(array(
                    'l.memberid_member' => "$memberid",
                        )
        );
        $query = $this->db->get();
        $result = $query->first_row('array');
        log_message('info', 'verify user roles ::::::::::===>' . $this->db->last_query());
        $query->free_result();
        return $result;
    }
    function retrieve_membertype_byname($member_type_name){
        $member_type = strtolower($member_type_name);
        $this->db->select('mt.id_membertype, ')
                ->from('membertype mt')
                  ->where(array(
                    'lower(mt.name)' => "$member_type",
                        )
        );
        
        $query = $this->db->get();
        $result = $query->row();
        log_message('info', 'verify user roles ::::::::::===>' . $this->db->last_query());
        $query->free_result();
        return $result->id_membertype;
    }
}
?>
