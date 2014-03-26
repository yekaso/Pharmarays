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

    function retrieve_loginuserroleid($memberid) {
        $this->db->select('ldur.id_logindetails_userrole, ')
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
        $final_result = 'null';
        if (isset($result['id_logindetails_userrole'])) {
            $final_result = $result['id_logindetails_userrole'];
        }
        return $final_result;
    }

    function update_pharmacy($pharmacyid, $pharmacy_data) {
        $this->db->where('id_pharmacy', $pharmacyid);
        $this->db->update('pharmacy', $pharmacy_data);
        log_message('info', $this->db->last_query());

        $report = array();
        $report['error'] = $this->db->_error_number();
        $report['message'] = $this->db->_error_message();

        return report;
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

    function retrieve_membertype_byname($member_type_name) {
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

    function retrieve_pharmacy($memberid) {
        $pharm_rolename = 'pharmacy owner';
        $this->db->select("p.name,p.address,p.email,p.telephone,p.longitude,p.latitude, p.id_pharmacy as id,urp.status", false)
                ->from('pharmacy p')
                ->join('userrole_pharmacy urp', 'p.id_pharmacy = urp.pharmacy_id')
                ->join('logindetails_userrole lur', 'lur.id_logindetails_userrole = urp.loginuserrole_id')
                ->join('userrole ur', 'ur.id_userrole = lur.logindetailsuserrole_userroleid')
                ->join('logindetails ld', 'ld.id_logindetails = lur.logindetailsuserrole_logindetailsid')
                ->where(array(
                    'lower(ur.name)' => "$pharm_rolename",
                    'ld.memberid_member' => "$memberid"
                ))
                ->order_by('p.name');


        $query = $this->db->get();
        $result = $query->row();
        log_message('info', 'RETRIEVE PHARMACY=========== ::::::::::===>' . $this->db->last_query());
        $query->free_result();
        return $result;
    }

    function retrieve_drug($pharmacyid) {

        $this->db->select("da.drugid_drug as id")
                ->from('drugavailability da')
                ->where(array(
                    'da.pharmacyid_pharmacy' => "$pharmacyid"
        ));
        $this->db->distinct();
        $query = $this->db->get();
        $query1 = $this->db->last_query();



        $wherequery1 = 'd.id_drug not in (' . $query1 . ')';
        $wherequery2 = 'd.id_drug in (' . $query1 . ')';

        $this->db->select('d.id_drug,d.drug_name,d.drug_description, group_concat(bn.name) as drug_company,group_concat(dcc.name) as drug_brandnames, dcc.id_drugcategory as category_id,"true" as notChecked', false)
                ->from('drug d')
                ->join('drugcategory_drug dcg', 'dcg.drug_id = d.id_drug')
                ->join('drugcategory dcc', 'dcc.id_drugcategory = dcg.drugcategory_id')
                ->join('brandname bn', 'bn.id_brandname = dcc.brandname_id')
                ->where($wherequery1)
                ->order_by('d.drug_name,bn.id_brandname');

        $this->db->group_by("id_drug");
        $query = $this->db->get();

        $query2 = $this->db->last_query();


        $this->db->select('d.id_drug,d.drug_name,d.drug_description, group_concat(bn.name, ":", bn.id_brandname) as drug_company,group_concat(dcc.name) as drug_brandnames, dcc.id_drugcategory as category_id,"false" as notChecked', false)
                ->from('drug d')
                ->join('drugcategory_drug dcg', 'dcg.drug_id = d.id_drug')
                ->join('drugcategory dcc', 'dcc.id_drugcategory = dcg.drugcategory_id')
                ->join('brandname bn', 'bn.id_brandname = dcc.brandname_id')
                ->where($wherequery2)
                ->order_by('d.drug_name,bn.id_brandname');

        $this->db->group_by("id_drug");
        $query = $this->db->get();

        $query3 = $this->db->last_query();

        $final_query = '(' . $query2 . ') union (' . $query3 . ')';
        log_message('info', 'Ajax retrieval for articles ::::::::::===>' . $final_query);
        $query = $this->db->query($final_query);
        //   $this->db->get();

        $result = $query->result_array();
        foreach ($result as $key => $subarray) {
            foreach ($subarray as $subkey => $subsubarray) {
                if ($result[$key]['notChecked'] == 'true') {
                    $result[$key]['notChecked'] = true;
                } else if ($result[$key]['notChecked'] == 'false') {
                    $result[$key]['notChecked'] = false;
                }
            }
        }
        //   log_message('info', 'new result ======================='.$result);
        $query->free_result();
        return $result;
    }

    function retrievedrugsbypharmacy($pharmacyid) {
        $this->db->select("da.drugid_drug as id")
                ->from('drugavailability da')
                ->where(array(
                    'da.pharmacyid_pharmacy' => "$pharmacyid"
        ));
        $this->db->distinct();
        $query = $this->db->get();
        log_message('info', 'Drugs ::::::::::===>' . $this->db->last_query());
        $result = $query->result_array();
        $query->free_result();
        return $result;
    }

    function create_drugavailability($drugavailability_data) {
        log_message('info', 'before inserting into drug availability.................');
        $this->db->insert_batch('drugavailability', $drugavailability_data);
        log_message('info', 'after inserting into drug availability.................');

        log_message('info', $this->db->last_query());
        return $this->db->insert_id();
    }

    function delete_drugavailability($pharmacyid, $drugid_data) {
        log_message('info', 'before deleting from drug availability.................');
        $wherequery = 'drugid_drug IN (' . implode(',', $drugid_data) . ') and pharmacyid_pharmacy = ' . $pharmacyid;

        $this->db->where($wherequery, NULL, FALSE);
        $this->db->delete('drugavailability');

        log_message('info', $this->db->last_query());
        return;
    }

    function create_assignpharmacy($assignpharmacy_data) {
        log_message('info', 'before inserting into userrole pharmacy.................');
        $this->db->insert_batch('userrole_pharmacy', $assignpharmacy_data);
        log_message('info', 'after inserting into userrole pharmacy.................');

        log_message('info', $this->db->last_query());
        return $this->db->insert_id();
    }

    function delete_assignpharmacy($loginuserroleid, $assignpharmacy_data) {
        log_message('info', 'before deleting from userrole pharmacy.................');
        $wherequery = 'pharmacy_id IN (' . implode(',', $assignpharmacy_data) . ') and loginuserrole_id = ' . $loginuserroleid;

        $this->db->where($wherequery, NULL, FALSE);
        $this->db->delete('userrole_pharmacy');

        log_message('info', $this->db->last_query());
        return;
    }

    function retrieve_pharmacy_bylimit($pharmacyid, $locationid, $limit) {
        log_message('info', 'last pharmacy id is ' . $pharmacyid);
        if ($pharmacyid == 0) {
            $where_sql = "p.id_pharmacy  > 0";
        } else {
            $where_sql = "p.id_pharmacy  > " . $pharmacyid;
        }
        if ($locationid > 0) {
            $where_sql .= " and l.id_location = " . $locationid;
        }
        $this->db->select("p.id_pharmacy as id,p.name,p.telephone,p.address,l.name as location", false)
                ->from('pharmacy p')
                ->join('location l', 'p.locationid_location = l.id_location')
                ->where($where_sql)
                ->order_by('p.id_pharmacy,p.name', 'desc');
        $this->db->limit($limit);
        $query = $this->db->get();
        log_message('info', 'Ajax retrieval ::::::::::===>' . $this->db->last_query());

        $result = $query->result_array();
        $query->free_result();
        return $result;
    }

}

?>
