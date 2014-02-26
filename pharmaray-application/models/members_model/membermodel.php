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
class membermodel extends CI_Model {

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
                    'lower(ur.name)' => "admin",
                    'l.memberid_member' => "$memberid",
                        )
        );
        $query = $this->db->get();
        $result = $query->first_row('array');
        log_message('info', 'verify user roles ::::::::::===>' . $this->db->last_query());
        $query->free_result();
        return $result;
    }

    function create_articlesearch($articlesearch) {
        log_message('info', 'before inserting into article search table.................');
        $this->db->insert('article_search', $articlesearch);
        log_message('info', 'after inserting into article search table.................' . $this->db->insert_id());

        log_message('info', $this->db->last_query());
        return $this->db->insert_id();
    }

    function create_pharmacysearch($pharmasearch) {
        log_message('info', 'before inserting into pharmacy search table.................');
        $this->db->insert('pharmacist_search', $pharmasearch);
        log_message('info', 'after inserting into pharmacy search table.................' . $this->db->insert_id());

        log_message('info', $this->db->last_query());
        return $this->db->insert_id();
    }

    function create_drugsearch($drugsearch) {
        log_message('info', 'before inserting into article search table.................');
        $this->db->insert('drug_search', $drugsearch);
        log_message('info', 'after inserting into article search table.................' . $this->db->insert_id());

        log_message('info', $this->db->last_query());
        return $this->db->insert_id();
    }

    function verify_user_login($useremail, $userpassword) {

        $this->db->select('l.*, ')
                ->from('logindetails l')
                ->where(array(
                    'l.username' => "$useremail",
                    'l.password' => "$userpassword",
                        )
        );
        $query = $this->db->get();
        $result = $query->first_row('array');
        $query->free_result();
        return $result;
    }

    function formatJoinQuery($firstQuery, $secondQuery, $id) {
        $final_query = 'select distinct d.id_drug,d.drug_name as name from (' .
                $firstQuery . ') a' . $id . ' join (' . $secondQuery . ') b' . $id . ' on ' .
                'a' . $id . '.id_drug = b' . $id . '.id_drug join drug d on d.id_drug = b' . $id . '.id_drug';
        return $final_query;
    }

    function retrieve_drugby_related_items($class_id, $category_id, $brand_id, $indication_id, $drug_id) {
        $class_pre_query = '';
        $generic_pre_query = '';
        $indication_pre_query = '';
        $brand_pre_query = '';
        $pre_query = '';
        if ($class_id == '-1') {
            $class_pre_query = 'select distinct d.id_drug,d.drug_name as name from' .
                    ' (select drugclassid_drugclass as class_id from drugclass_drug where drugid_drug =' . $drug_id . ') a join' .
                    ' (select drugclassid_drugclass as class_id, drugid_drug from drugclass_drug) b on' .
                    ' a.class_id = b.class_id and b.drugid_drug <> ' . $drug_id . ' join drug d on d.id_drug = b.drugid_drug';
            $pre_query .= $class_pre_query;
        }
        if ($category_id == '-1') {
            $generic_pre_query = 'select distinct d.id_drug,d.drug_name as name from' .
                    ' (select drugcategory_id as generic_id from drugcategory_drug where drug_id =' . $drug_id . ') a join' .
                    ' (select drugcategory_id as generic_id, drug_id from drugcategory_drug) b on' .
                    ' a.generic_id = b.generic_id and b.drug_id <> ' . $drug_id . ' join drug d on d.id_drug = b.drug_id';
            if ($pre_query == '') {
                $pre_query .= $generic_pre_query;
            } else {
                $pre_query = $this->formatJoinQuery($pre_query, $generic_pre_query, '1');
                //.= ' intersect ' . $generic_pre_query;
            }
        }
        if ($indication_id == '-1') {
            $indication_pre_query = 'select distinct d.id_drug,d.drug_name as name from' .
                    ' (select drugindication_id as indication_id from drugindication_drug where drug_id =' . $drug_id . ') a join' .
                    ' (select drugindication_id as indication_id, drug_id from drugindication_drug) b on' .
                    ' a.indication_id = b.indication_id and b.drug_id <> ' . $drug_id . ' join drug d on d.id_drug = b.drug_id';
            if ($pre_query == '') {
                $pre_query .= $indication_pre_query;
            } else {
                $pre_query = $this->formatJoinQuery($pre_query, $indication_pre_query, '2');
                //        $pre_query .= ' intersect ' . $indication_pre_query;
            }
        }if ($brand_id == '0') {
            //      $wherequery = '';
        } else {
            $brand_pre_query = 'select distinct d.id_drug,d.drug_name as name from drug d join drugcategory_drug dcg on dcg.drug_id = d.id_drug join drugcategory dc on dc.id_drugcategory = dcg.drugcategory_id where d.id_drug <> ' . $drug_id . ' and d.brandname_id = ' . $brand_id;

            if ($pre_query == '') {
                $pre_query .= $brand_pre_query;
            } else {
                $pre_query = $this->formatJoinQuery($pre_query, $brand_pre_query, '3');
                //    $pre_query .= ' intersect ' . $brand_pre_query;
            }
        }

        $final_query = $pre_query;
//$final_query = 'select d.id_drug,d.drug_name as name from drug ';

        $query = $this->db->query($final_query);
        //   $this->db->get();

        $result = $query->result_array();
        // log_message('info', 'News by drug_id ::::::::::===>' . $this->db->last_query());
        //  $result = $query->result_array();
        $query->free_result();
        return $result;
        // return $final_query;
    }

    function retrieve_drug($drug_id) {
        $this->db->select("d.id_drug,d.drug_name,d.drug_description, group_concat(bn.name, ':', bn.id_brandname) as drug_brandname,dcc.id_drugcategory as category_id", false)
                ->from('drug d')
                ->join('drugcategory_drug dcg', 'dcg.drug_id = d.id_drug')
                ->join('drugcategory dcc', 'dcc.id_drugcategory = dcg.drugcategory_id')
                ->join('brandname bn', 'bn.id_brandname = dcc.brandname_id')
                ->where(array('d.id_drug' => "$drug_id"))
                ->order_by('d.drug_name');

        $this->db->group_by("id_drug");
        $query = $this->db->get();
        log_message('info', 'Drugs ::::::::::===>' . $this->db->last_query());
        $result = $query->first_row('array');
        $query->free_result();
        return $result;
    }

    function retrieve_locations() {
        $this->db->select('l.id_location,l.name')
                ->from('location l')
                ->order_by('l.name');

        $query = $this->db->get();
        log_message('info', 'location ::::::::::===>' . $this->db->last_query());
        $result = $query->result_array();
        $query->free_result();
        return $result;
    }

    function retrieve_forumcategories() {
        $this->db->select('f.id_forum,f.name')
                ->from('forum_category f')
                ->order_by('f.name');

        $query = $this->db->get();
        log_message('info', 'forum category ::::::::::===>' . $this->db->last_query());
        $result = $query->result_array();
        $query->free_result();
        return $result;
    }

    function retrieve_all_forums() {
        $this->db->select('f.id_forum,f.name')
                ->from('forum f')
                ->order_by('f.name');

        $query = $this->db->get();
        log_message('info', 'forums ::::::::::===>' . $this->db->last_query());
        $result = $query->result_array();
        $query->free_result();
        return $result;
    }

    function retrieve_drugclass() {
        $this->db->select('dc.id_drugclass, dc.name')
                ->from('drugclass dc')
                ->order_by('dc.name');

        $query = $this->db->get();
        log_message('info', 'drug class ::::::::::===>' . $this->db->last_query());
        $result = $query->result_array();
        $query->free_result();
        return $result;
    }

    function retrieve_brandnames() {
        $this->db->select('bn.id_brandname, bn.name')
                ->from('brandname bn')
                ->order_by('bn.name');

        $query = $this->db->get();
        log_message('info', 'brand name ::::::::::===>' . $this->db->last_query());
        $result = $query->result_array();
        $query->free_result();
        return $result;
    }

    function retrieve_drugcategory() {
        $this->db->select('dc.id_drugcategory,dc.name')
                ->from('drugcategory dc')
                ->order_by('dc.name');

        $query = $this->db->get();
        log_message('info', 'drugcategory ::::::::::===>' . $this->db->last_query());
        $result = $query->result_array();
        $query->free_result();
        return $result;
    }

    function retrieve_topic($topic_id) {
        $this->db->select('ft.id_topicforum,ft.name,ft.description')
                ->from('forum_topic ft')
                ->where(array('ft.id_topicforum' => "$topic_id"))
                ->order_by('ft.name');


        $query = $this->db->get();
        log_message('info', 'Topics ::::::::::===>' . $this->db->last_query());
        $result = $query->first_row('array');
        $query->free_result();
        return $result;
    }

    function retrieve_newsletters($drug_id) {
        $this->db->select('n.id_newsletter as id,a.title as newsletter_title,a.description as newsletter_description')
                ->from('newsletter n')
                ->join('newsletterdrugmerger ndm', 'ndm.newsletterid_newsletter = n.id_newsletter')
                ->join('drugcategory dc', 'dc.id_drugcategory = ndm.drugcategoryid_drugcategory')
                ->join('drugcategory_drug dcg', 'dcg.drugcategory_id = dc.id_drugcategory')
                ->join('article a', 'a.newsletterid_newsletter = n.id_newsletter')
                ->join('drug d', 'd.id_drug = dcg.drug_id')
                ->where(array('d.id_drug' => "$drug_id"))
                ->order_by('a.time_created');

        $query = $this->db->get();
        log_message('info', 'News by drug_id ::::::::::===>' . $this->db->last_query());
        $result = $query->result_array();
        $query->free_result();
        return $result;
    }

    function retrieve_news($drug_id) {
        $this->db->select('n.id_news,a.id_article as id,a.title as news_title,a.description as news_description')
                ->from('news n')
                ->join('newsdrugmerger ndm', 'ndm.newsid_news = n.id_news')
                ->join('drugcategory dc', 'dc.id_drugcategory = ndm.drugcategoryid_drugcategory')
                ->join('drugcategory_drug dcg', 'dcg.drugcategory_id = dc.id_drugcategory')
                ->join('drug d', 'dcg.drug_id = d.id_drug')
                ->join('article a', 'a.newsid_news = n.id_news')
                ->order_by('a.time_created')
                ->where(array('d.id_drug' => "$drug_id"));


        $query = $this->db->get();
        log_message('info', 'News by drug_id ::::::::::===>' . $this->db->last_query());
        $result = $query->result_array();
        $query->free_result();
        return $result;
    }

    function retrieve_drugby_class_pregnancycategory_manufacturer($drugclass_id, $pregnancycategory_id, $manufacturer_id) {

        $this->db->select('d.drug_name', false)
                ->from('drug d')
                ->join('preglactation p', 'p.drugid_drug = d.id_drug')
                ->join('pregnancycategory pc', 'p.pregnancycategoryid_pregnancycategory = pc.id_pregnancycategory')
                ->join('drugcategory_drug dcg', 'dcg.drug_id = d.id_drug')
                ->join('drugcategory dcc', 'dcg.drugcategory_id = dcc.id_drugcategory')
                ->join('drugclass_drug dcd', 'dcd.drugid_drug = d.id_drug')
                ->join('drugclass dc', 'dcd.drugclassid_drugclass = dc.id_drugclass')
                ->where(array('dcc.brandname_id' => "$manufacturer_id", 'dc.id_drugclass' => "$drugclass_id"));

        $query = $this->db->get();
        log_message('info', 'Related drugs ::::::::::===>' . $this->db->last_query());
        $result = $query->first_row('array');
        $query->free_result();
        return $result;
    }

    function retrieve_topten_drugs($limit) {
        log_message('info', 'inside retrieve most searched drugs');

        $this->db->select('d.id_drug as id,d.drug_name as name, count(ds.id_drugsearch) as search_count')
                ->from('drug_search ds')
                ->join('drug d', 'd.id_drug = ds.drug_id')
                ->group_by('d.id_drug')
                ->order_by('search_count', 'desc');

        $this->db->limit($limit);
        $query = $this->db->get();
        log_message('info', $this->db->last_query());
        $result = $query->result_array();
        $query->free_result();
        return $result;
    }

    function retrieve_topten_pharmacy($limit) {
        log_message('info', 'inside retrieve most searched pharmacy');

        $this->db->select('p.id_pharmacy as id,p.name, count(ps.id_pharmacysearch) as search_count')
                ->from('pharmacist_search ps')
                ->join('pharmacy p', 'p.id_pharmacy = ps.pharmacy_id')
                ->group_by('p.id_pharmacy')
                ->order_by('search_count', 'desc');

        $this->db->limit($limit);
        $query = $this->db->get();
        log_message('info', $this->db->last_query());
        $result = $query->result_array();
        $query->free_result();
        return $result;
    }

    function retrieve_topten_article($limit) {
        log_message('info', 'inside retrieve most searched article');

        $this->db->select('n.id_news,a.id_article as id,a.title as news_title,a.description as news_description, count(ats.article_id) as search_count')
                ->from('article_search ats')
                ->join('article a', 'a.id_article = ats.article_id')
                ->join('news n', 'a.newsid_news = n.id_news')
                ->group_by('a.id_article')
                ->order_by('search_count', 'desc');


        $this->db->limit($limit);
        $query = $this->db->get();
        log_message('info', $this->db->last_query());
        $result = $query->result_array();
        $query->free_result();
        return $result;
    }

    function retrieve_internships($internshipid, $limit) {
        log_message('info', 'last intern id is ' . $internshipid);
        if ($internshipid == 0) {
            $where_sql = "i.id_internshipopening  <> 0";
        } else {
            $where_sql = "i.id_internshipopening  < " . $internshipid;
        }

        $this->db->select("i.id_internshipopening as id, i.numberofapplicants as slots,i.duration,i.specialization,concat(l.name,' - ',i.location) as location,inf.name as firm", false)
                ->from('internship_opening i')
                ->join('location l', 'l.id_location = i.location_id')
                ->join('internship_firm inf', 'inf.id_internshipfirm = i.internshipfirm_id')
                ->where($where_sql)
                ->order_by('i.id_internshipopening', 'desc');
        $this->db->limit($limit);
        $query = $this->db->get();

        $result = $query->result_array();
        $query->free_result();
        return $result;
    }

    function retrieve_articles_bylimit($article_id, $limit) {
        log_message('info', 'last article id is ' . $article_id);
        if ($article_id == 0) {
            $where_sql = "a.id_article  <> 0";
        } else {
            $where_sql = "a.id_article  < " . $article_id;
        }

        $this->db->select("a.id_article as id,a.newsletterid_newsletter as newsletter_id,a.newsid_news as news_id, a.title as newsletter_title,a.description as newsletter_description,a.guestonly, a.time_created, concat ( m.firstname_member , '  ' , m.surname_member ) as author_name", false)
                ->from('article a')
                ->join('member m', 'a.memberid_member = m.id_member')
                ->where($where_sql)
                ->order_by('a.id_article', 'desc');
        $this->db->limit($limit);
        $query = $this->db->get();

        $result = $query->result_array();
        $query->free_result();
        return $result;
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

    function autosuggest_pharmacy($data, $location, $limit) {
        $like = " like '%" . $data . "%' ";
        $where_sql = "";
        if ($location > 0) {
            $where_sql = " and p.locationid_location = " . $location;
        }
        $this->db->select('p.id_pharmacy as id, p.name as pharm_name')
                ->from('pharmacy p')
                ->where('p.name' . $like . $where_sql);

        $this->db->limit($limit);
        $query = $this->db->get();
        log_message('info', 'Ajax retrieval ::::::::::===>' . $this->db->last_query());
        $result = $query->result_array();
        $query->free_result();
        return $result;
    }

    function autosuggest_articles($data, $limit) {
        $like = " like '%" . $data . "%' ";
        $this->db->select('a.id_article as id, a.title as article_title,a.time_created')
                ->from('article a')
                ->where('a.title' . $like);

        $query = $this->db->get();

        $result = $query->result_array();
        $query->free_result();
        return $result;
    }

    function autosuggest_forumtopics($data, $limit) {
        $like = " like '%" . $data . "%' ";
        $this->db->select('ft.id_topicforum as id, ft.name as topic_title ,ft.timecreated')
                ->from('forum_topic ft')
                ->where('ft.name' . $like);

        $query = $this->db->get();

        $result = $query->result_array();
        $query->free_result();
        return $result;
    }

    function autosuggest($data, $limit, $drug_id) {
        $wherequery = "d.drug_name like '%" . $data . "%' and d.id_drug <> " . $drug_id;
        $this->db->select("d.id_drug,d.drug_name, group_concat(bn.name, ':' ,bn.id_brandname) as drug_brandname", false)
                ->from('drug d')
                ->join('drugcategory_drug dcg', 'dcg.drug_id = d.id_drug')
                ->join('drugcategory dc', 'dc.id_drugcategory = dcg.drugcategory_id')
                ->join('brandname bn', 'bn.id_brandname = dc.brandname_id')
                ->where($wherequery)
                ->order_by('d.drug_name');

        $this->db->group_by("id_drug");
        $this->db->limit($limit);
        $this->db->group_by('id_drug');
        $query = $this->db->get();
        log_message('info', 'Ajax retrieval ::::::::::===>' . $this->db->last_query());
        $result = $query->result_array();
        $query->free_result();
        return $result;
    }

    function retrieve_member($member_id) {

        $this->db->select('m.surname_member,m.firstname_member,mt.default_image_name as membertypeimage,mt.id_membertype as membertypeid')
                ->from('member m')
                ->join('membertype mt', 'm.membertypeid_membertype = mt.id_membertype')
                ->where(array(
                    'm.id_member' => "$member_id"
                        )
        );
        $query = $this->db->get();
        $result = $query->first_row('array');
        $query->free_result();
        return $result;
    }

    function retrieve_vacancy() {
        log_message('info', 'inside retrieving vacancy for member');

        $this->db->select('vg.name as vacancygroup_name, count(v.vacancy_id) as vacancy_count')
                ->from('vacancygroup vg')
                ->join('vacancy v', 'vg.vacancygroup_id = v.VacancyGroupvacancygroup_id')
                ->group_by('vg.vacancygroup_id')
                ->order_by('vg.name'
        );
        $query = $this->db->get();
        log_message('info', 'Vacancies ::::::::::===>' . $this->db->last_query());
        $result = $query->result_array();
        $query->free_result();
        return $result;
    }

    function retrieve_comment_counts($drug_id) {
        log_message('info', 'inside retrieving comments member id and drug id is ' . $drug_id);

        $this->db->select('mt.id_membertype as member_type_id,mt.name as membertype_name,count(dc.comment) as comment_count')
                ->from('drugcomment dc')
                ->join('member m', 'dc.memberid_member = m.id_member and dc.drugid_drug = ' . $drug_id)
                ->join('membertype mt', 'm.membertypeid_membertype = mt.id_membertype')
                ->group_by('mt.id_membertype')
                ->order_by('dc.id_drugcomment'
        );
        $query = $this->db->get();
        log_message('info', $this->db->last_query());
        $result = $query->result_array();
        $query->free_result();
        return $result;
    }

    function comment_count($drug_id) {

        $this->db->select('count(dc.id_drugcomment) as count')
                ->from('drugcomment dc')
                ->join('member m', 'dc.memberid_member = m.id_member and dc.drugid_drug = ' . $drug_id)
                ->join('membertype mt', 'm.membertypeid_membertype = mt.id_membertype')
                ->order_by('dc.id_drugcomment', 'desc'
        );
        $query = $this->db->get();
        log_message('info', $this->db->last_query());
        return $query->first_row()->count;
    }

    function retrieve_pharmacy($drug_id, $limit) {
        log_message('info', 'inside retrieving pharmacy for drug id is ' . $drug_id);

        $this->db->select('p.id_pharmacy,p.name')
                ->from('pharmacy p')
                ->join('drugavailability da', 'da.pharmacyid_pharmacy = p.id_pharmacy and da.drugid_drug = ' . $drug_id)
                ->order_by('p.id_pharmacy'
        );
        $this->db->limit($limit);
        $query = $this->db->get();
        log_message('info', $this->db->last_query());
        $result = $query->result_array();
        $query->free_result();
        return $result;
    }

    function retrieve_comments($drug_id, $desiredPosts) {
        log_message('info', 'inside retrieving comments member id and drug id is ' . $drug_id);

        $this->db->select('dc.id_drugcomment,dc.comment,dc.time_created, m.firstname_member,m.surname_member,mt.default_image_name')
                ->from('drugcomment dc')
                ->join('member m', 'dc.memberid_member = m.id_member and dc.drugid_drug = ' . $drug_id)
                ->join('membertype mt', 'm.membertypeid_membertype = mt.id_membertype')
                ->order_by('dc.id_drugcomment', 'desc'
        );
        $this->db->limit($desiredPosts, 0);
        $query = $this->db->get();
        log_message('info', $this->db->last_query());
        $result = $query->result_array();
        $query->free_result();
        return $result;
    }

    function retrieve_comments_by_drugid($drug_id) {
        log_message('info', 'inside retrieving comments member type id and drug id is ' . $drug_id);

        $this->db->select('mt.id_membertype as member_type_id,mt.name as membertype_name,count(dc.comment) as comment_count')
                ->from('drugcomment dc')
                ->join('member m', 'dc.memberid_member = m.id_member and dc.drugid_drug = ' . $drug_id)
                ->join('membertype mt', 'm.membertypeid_membertype = mt.id_membertype')
                ->group_by('mt.id_membertype')
                ->order_by('dc.id_drugcomment'
        );
        $query = $this->db->get();
        log_message('info', $this->db->last_query());
        $result = $query->result_array();
        $query->free_result();
        /* return the posts in the JSON format */
        return json_encode($result);
    }

    function retrieve_topic_comments_by_topic($topic_id) {
        log_message('info', 'inside retrieving comments topic id is ' . $topic_id);

        $this->db->select('mt.id_membertype as member_type_id,mt.name as membertype_name,count(tc.comment) as comment_count')
                ->from('topic_comment tc')
                ->join('member m', 'tc.memberid_member = m.id_member and tc.forum_topicid_topicforum = ' . $topic_id)
                ->join('membertype mt', 'm.membertypeid_membertype = mt.id_membertype')
                ->group_by('mt.id_membertype')
                ->order_by('tc.id_topiccomment'
        );
        $query = $this->db->get();
        log_message('info', $this->db->last_query());
        $result = $query->result_array();
        $query->free_result();
        /* return the posts in the JSON format */
        return json_encode($result);
    }

    function verify_email_address($email_address) {
        log_message('info', 'inside retrieving user by email address' . $email_address);

        $this->db->select('m.*, ')
                ->from('member m')
                ->where(array(
                    'm.emailaddress_member' => "$email_address"
                        )
        );
        $query = $this->db->get();
        log_message('info', $this->db->last_query());
        $result = $query->first_row('array');
        $query->free_result();
        return $result;
    }

    function createnews($news_data) {
        log_message('info', 'before inserting into news.................');
        $this->db->insert('news', $news_data);
        log_message('info', 'after inserting into news.................' . $this->db->insert_id());

        log_message('info', $this->db->last_query());
        return $this->db->insert_id();
    }

    function create_forum($forum_data) {
        log_message('info', 'before inserting into forum.................');
        $this->db->insert('forum', $forum_data);
        log_message('info', 'after inserting into forum.................' . $this->db->insert_id());

        log_message('info', $this->db->last_query());
        return $this->db->insert_id();
    }

    function create_drugclass($drugclass_data) {
        log_message('info', 'before inserting into drug class.................');
        $this->db->insert('drugclass', $drugclass_data);
        log_message('info', 'after inserting into drug class.................' . $this->db->insert_id());

        log_message('info', $this->db->last_query());
        return $this->db->insert_id();
    }

    function create_drugcategory($drugcategory_data) {
        log_message('info', 'before inserting into drug category.................');
        $this->db->insert('drugcategory', $drugcategory_data);
        log_message('info', 'after inserting into drug category.................' . $this->db->insert_id());

        log_message('info', $this->db->last_query());
        return $this->db->insert_id();
    }

    function create_brandname($brandname_data) {
        log_message('info', 'before inserting into brand name.................');
        $this->db->insert('brandname', $brandname_data);
        log_message('info', 'after inserting into brand name.................' . $this->db->insert_id());

        log_message('info', $this->db->last_query());
        return $this->db->insert_id();
    }

    function create_drug($drug_data) {
        log_message('info', 'before inserting into drug.................');
        $this->db->insert('drug', $drug_data);
        log_message('info', 'after inserting into drug.................' . $this->db->insert_id());

        log_message('info', $this->db->last_query());

        return $this->db->insert_id();
    }

    function create_drugclassdrug($drugclass_drug_data) {
        log_message('info', 'before inserting into drug class mapper.................');
        $this->db->insert('drugclass_drug', $drugclass_drug_data);
        log_message('info', 'after inserting into drug class mapper.................' . $this->db->insert_id());

        log_message('info', $this->db->last_query());

        return $this->db->insert_id();
    }

    function create_topic($topic_data) {
        log_message('info', 'before inserting into topic.................');
        $this->db->insert('forum_topic', $topic_data);
        log_message('info', 'after inserting into topic.................' . $this->db->insert_id());

        log_message('info', $this->db->last_query());
        return $this->db->insert_id();
    }

    function createnewsdrugmerger($newsdrugmerger_data) {
        log_message('info', 'before inserting into news drug merger.................');
        $this->db->insert('newsdrugmerger', $newsdrugmerger_data);
        log_message('info', 'after inserting into news drug merger.................' . $this->db->insert_id());

        log_message('info', $this->db->last_query());
        return $this->db->insert_id();
    }

    function create_article($article_data) {
        log_message('info', 'before inserting into article.................');
        $this->db->insert('article', $article_data);
        log_message('info', 'after inserting into article.................' . $this->db->insert_id());

        log_message('info', $this->db->last_query());
        return $this->db->insert_id();
    }

    function create_pharmacy($pharmacy_data) {
        log_message('info', 'before inserting into pharmacy.................');
        $this->db->insert('pharmacy', $pharmacy_data);
        log_message('info', 'after inserting into pharmacy.................' . $this->db->insert_id());

        log_message('info', $this->db->last_query());
        return $this->db->insert_id();
    }

    function create_new_user($member_data) {
        $this->db->trans_start();
        log_message('info', 'before inserting into member.................');
        $this->db->insert('member', $member_data);
        log_message('info', 'after inserting into member.................' . $this->db->insert_id());

        log_message('info', 'the status of the transaction is...........' . $this->db->trans_status() . ' the insert id is ......' . $this->db->insert_id());
        if ($this->db->trans_status() == FALSE) {
            return -1;
        } else {
            return $this->db->insert_id();
        }
    }

    function retrieve_comment_byrange($start, $desiredPosts, $drug_id) {
        log_message('info', 'inside retrieving comments member id and drug id is ' . $drug_id);

        $this->db->select("dc.id_drugcomment as id,dc.comment,dc.time_created, concat ( m.firstname_member , '  ' , m.surname_member ) as membername,mt.default_image_name as membertypeimage", false)
                ->from('drugcomment dc')
                ->join('member m', 'dc.memberid_member = m.id_member and dc.drugid_drug = ' . $drug_id)
                ->join('membertype mt', 'm.membertypeid_membertype = mt.id_membertype')
                ->order_by('dc.id_drugcomment', 'desc'
        );
        log_message('info', $desiredPosts . '==============================' . $start);
        $this->db->limit($desiredPosts, $start);
        $query = $this->db->get();
        log_message('info', $this->db->last_query());
        $result = $query->result_array();
        $query->free_result();
        /* return the posts in the JSON format */
        return json_encode($result);
//    return $query->result_array();
    }

    function retrieve_topic_comment_byrange($start, $desiredPosts, $topic_id) {
        log_message('info', 'inside retrieving comments member id and forum topic id is ' . $topic_id);

        $this->db->select("tc.id_topiccomment as id,tc.comment,tc.timecreated, concat ( m.firstname_member , '  ' , m.surname_member ) as membername,mt.default_image_name as membertypeimage", false)
                ->from('topic_comment tc')
                ->join('member m', 'tc.memberid_member = m.id_member and tc.forum_topicid_topicforum = ' . $topic_id)
                ->join('membertype mt', 'm.membertypeid_membertype = mt.id_membertype')
                ->order_by('tc.id_topiccomment', 'desc'
        );
        log_message('info', $desiredPosts . '==============================' . $start);
        $this->db->limit($desiredPosts, $start);
        $query = $this->db->get();
        log_message('info', $this->db->last_query());
        $result = $query->result_array();
        $query->free_result();
        /* return the posts in the JSON format */
        return json_encode($result);
//    return $query->result_array();
    }

    function retrieve_comment_beyondid($lastcomment_id, $drug_id) {
        log_message('info', 'inside retrieving comments member id and drug id is ' . $drug_id);

        $this->db->select("dc.id_drugcomment as id,dc.comment,dc.time_created, concat ( m.firstname_member , '  ' , m.surname_member ) as membername,mt.default_image_name as membertypeimage", false)
                ->from('drugcomment dc')
                ->join('member m', 'dc.memberid_member = m.id_member and dc.drugid_drug = ' . $drug_id)
                ->join('membertype mt', 'm.membertypeid_membertype = mt.id_membertype')
                ->where('dc.id_drugcomment >', $lastcomment_id)
                ->order_by('dc.id_drugcomment', 'asc');
        $query = $this->db->get();
        log_message('info', $this->db->last_query());
        $result = $query->result_array();
        $query->free_result();
        /* return the posts in the JSON format */
        return json_encode($result);
//    return $query->result_array();
    }

    function retrieve_topic_comment_beyondid($lastcomment_id, $topic_id) {
        log_message('info', 'inside retrieving comments topic id is ' . $topic_id);

        $this->db->select("tc.id_topiccomment as id,tc.comment,tc.timecreated as time_created, concat ( m.firstname_member , '  ' , m.surname_member ) as membername,mt.default_image_name as membertypeimage", false)
                ->from('topic_comment tc')
                ->join('member m', 'tc.memberid_member = m.id_member and tc.forum_topicid_topicforum = ' . $topic_id)
                ->join('membertype mt', 'm.membertypeid_membertype = mt.id_membertype')
                ->where('tc.id_topiccomment >', $lastcomment_id)
                ->order_by('tc.id_topiccomment', 'asc');
        $query = $this->db->get();
        log_message('info', $this->db->last_query());
        $result = $query->result_array();
        $query->free_result();
        /* return the posts in the JSON format */
        return json_encode($result);
//    return $query->result_array();
    }

    function retrieve_newsbeyond_id($lastnews_id, $limit) {
        log_message('info', 'last news id is ' . $lastnews_id);
        if ($lastnews_id == 0) {
            $where_sql = "n.id_news  <> 0";
        } else {
            $where_sql = "n.id_news  < " . $lastnews_id;
        }

        $this->db->select("n.id_news as id,n.title as news_title,n.description as news_description, n.time_created as time_created, n.guestonly as guestonly, concat ( m.firstname_member , '  ' , m.surname_member ) as author_name", false)
                ->from('article a')
                ->join('member m', 'a.memberid_member = m.id_member')
                ->where($where_sql)
                ->order_by('n.id_news', 'desc');
        $this->db->limit($limit);
        $query = $this->db->get();
        log_message('info', $this->db->last_query());
        $result = $query->result_array();
        $query->free_result();
        /* return the posts in the JSON format */
        return $result;
//    return $query->result_array();
    }

    function retrievepharmacy_bylocation($location_id, $limit) {
        log_message('info', 'inside retrieving pharmacy by location id ' . $location_id);
        if ($location_id > 0) {
            $this->db->select("p.id_pharmacy as id,p.name,p.telephone,p.address,l.name as location", false)
                    ->from('pharmacy p')
                    ->join('location l', 'p.locationid_location = l.id_location')
                    ->where(array(
                        'l.id_location' => "$location_id"
                            )
                    )
                    ->order_by('p.id_pharmacy,p.name', 'desc');
        } else {
            $this->db->select("p.id_pharmacy as id,p.name,p.telephone,p.address,l.name as location", false)
                    ->from('pharmacy p')
                    ->join('location l', 'p.locationid_location = l.id_location')
                    ->order_by('p.id_pharmacy,p.name', 'desc');
        }
        $this->db->limit($limit);
        $query = $this->db->get();
        log_message('info', $this->db->last_query());
        $result = $query->result_array();
        $query->free_result();
        return $result;
    }

    function retrievepharmacy_byid($pharmacyid) {
        log_message('info', 'pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>' . $pharmacyid);

        $this->db->select("p.id_pharmacy as id,p.name,p.telephone,p.address,l.name as location", false)
                ->from('pharmacy p')
                ->join('location l', 'p.locationid_location = l.id_location')
                ->where(array(
                    'p.id_pharmacy' => "$pharmacyid"
                        )
        );
        $query = $this->db->get();
        log_message('info', $this->db->last_query());
        $result = $query->first_row('array');
        $query->free_result();
        return $result;
    }

    function retrieve_article_byid($article_id) {
        log_message('info', 'article id is ' . $article_id);

        $this->db->select("a.id_article as id,a.title,a.description, a.time_created,concat ( m.firstname_member , '  ' , m.surname_member ) as author_name", false)
                ->from('article a')
                ->join('member m', 'a.memberid_member = m.id_member')
                ->where(array(
                    'a.id_article' => "$article_id"
                        )
        );
        $query = $this->db->get();
        $result = $query->first_row('array');
        $query->free_result();
        return $result;
//    return $query->result_array();
    }

    /*  function retrieve_newsletter_byid($article_id) {
      log_message('info', 'last news letter id is ' . $article_id);

      $this->db->select("a.id_article as id,a.title,a.description,a.guestonly, a.time_created , concat ( m.firstname_member , '  ' , m.surname_member ) as author_name", false)
      ->from('article a')
      ->join('member m', 'a.memberid_member = m.id_member')
      ->where(array('a.id_article' => "$article_id")
      );
      $query = $this->db->get();
      $result = $query->first_row('array');
      $query->free_result();
      return $result;
      } */

    function retrieve_pharmacybeyond_id($default_id, $limit) {
        log_message('info', 'inside retrieving pharmacy beyond id ' . $default_id);
        $where_sql = "p.id_pharmacy  > " . $default_id;


        $this->db->select('p.id_pharmacy as id,p.name,p.address,p.telephone')
                ->from('pharmacy p')
                ->where($where_sql)
                ->order_by('p.id_pharmacy'
        );
        $this->db->limit($limit);
        $query = $this->db->get();
        log_message('info', $this->db->last_query());
        $result = $query->result_array();
        $query->free_result();
        return $result;
    }

    function retrieve_newsletterbeyond_id($lastnewsletter_id, $limit) {
        log_message('info', 'last news id is ' . $lastnewsletter_id);

        if ($lastnewsletter_id == 0) {
            $where_sql = "a.id_article  <> 0";
        } else {
            $where_sql = "a.id_article  < " . $lastnewsletter_id;
        }

        $this->db->select("a.id_article as id,a.title as newsletter_title,a.description as newsletter_description,a.guestonly as guestonly, a.time_created as time_created, concat ( m.firstname_member , '  ' , m.surname_member ) as author_name", false)
                ->from('article a')
                ->join('member m', 'a.memberid_member = m.id_member')
                ->where($where_sql)
                ->order_by('a.id_article', 'desc');
        $this->db->limit($limit);
        $query = $this->db->get();
        log_message('info', $this->db->last_query());
        $result = $query->result_array();
        $query->free_result();
        /* return the posts in the JSON format */
        return $result;
//    return $query->result_array();
    }

    function create_comment($comment_data) {
        log_message('info', 'before inserting into drug comment.................');
        $this->db->insert('drugcomment', $comment_data);
        log_message('info', 'after inserting into drug comment.................' . $this->db->insert_id());

        log_message('info', 'the status of the transaction is...........' . $this->db->trans_status() . ' the insert id is ......' . $this->db->insert_id());
        if ($this->db->trans_status() == FALSE) {
            return -1;
        } else {
            return $this->db->insert_id();
        }
    }

    function create_topic_comment($comment_data) {
        log_message('info', 'before inserting into topic comment.................');
        $this->db->insert('topic_comment', $comment_data);
        log_message('info', 'after inserting into topic comment.................' . $this->db->insert_id());

        log_message('info', 'the status of the transaction is...........' . $this->db->trans_status() . ' the insert id is ......' . $this->db->insert_id());
        if ($this->db->trans_status() == FALSE) {
            return -1;
        } else {
            return $this->db->insert_id();
        }
    }

    function create_new_logindetails($logindetails_data) {
        log_message('info', 'before inserting into login details.................');
        $result = $this->db->insert('logindetails', $logindetails_data);
        log_message('info', 'after inserting into login details.................');
//   $result->free_result();
        $this->db->trans_complete();
    }

    function retrieve_forumtopic_by_mostcomment() {
        log_message('info', 'inside retrieve most commented forum topic ');

        $this->db->select('t.id_topicforum as id,t.name,t.description,t.timecreated, count(tc.id_topiccomment) as comment_count')
                ->from('topic_comment tc')
                ->join('forum_topic t', 't.id_topicforum = tc.forum_topicid_topicforum')
                ->group_by('t.id_topicforum')
                ->order_by('comment_count', 'desc');

        $query = $this->db->get();
        log_message('info', 'forum topic is 1 ::::::::::===>' . $this->db->last_query());
        $result = $query->first_row('array');
        $query->free_result();
        return $result;
    }

    function retrieve_first_topic($topic_id) {
        log_message('info', 'inside retrieve most commented forum topic ');

        $this->db->select('t.id_topicforum as id,t.name,t.description,t.timecreated')
                ->from('forum_topic t')
                ->where(array(
                    't.id_topicforum' => "$topic_id"
        ));

        $query = $this->db->get();
        log_message('info', 'forum topic is 1 ::::::::::===>' . $this->db->last_query());
        $result = $query->first_row('array');
        $query->free_result();
        return $result;
    }

    function retrieve_twenty_forumtopic_by_mostcomment($maxtopiccomment) {
        log_message('info', 'inside retrieving first 20 topics ');

        $this->db->select('t.id_topicforum,upper(t.name) as name,t.description,t.timecreated, count(tc.id_topiccomment) as comment_count')
                ->from('topic_comment tc')
                ->join('forum_topic t', 't.id_topicforum = tc.forum_topicid_topicforum')
                ->group_by('t.id_topicforum')
                ->order_by('comment_count', 'desc');

        $this->db->limit($maxtopiccomment);
        $query = $this->db->get();
        log_message('info', $this->db->last_query());
        $result = $query->result_array();
        $query->free_result();
        return $result;
    }

    function retrieve_pharmacylocations() {
        log_message('info', 'inside retrieving locations ');
        $where_sql = "ff.forumid_forum  is null ";


        $this->db->select('l.id_location as id,l.name as name')
                ->from('location l')
                ->order_by('l.name'
        );
        $query = $this->db->get();
        log_message('info', $this->db->last_query());
        $result = $query->result_array();
        $query->free_result();
        return $result;
    }

    function retrieve_forums() {
        log_message('info', 'inside retrieving forum beyond id ');
        $where_sql = "ff.forumid_forum  is null ";


        $this->db->select('ff.id_forum as id,ff.name, count(f.id_forum) as sub_forum')
                ->from('forum f')
                ->join('forum ff', 'ff.id_forum = f.forumid_forum')
                ->where($where_sql)
                ->group_by('ff.id_forum')
                ->order_by('ff.name'
        );
        $query = $this->db->get();
        log_message('info', $this->db->last_query());
        $result = $query->result_array();
        $query->free_result();
        return $result;
    }

    function retrieve_forum_and_topic($forum_id) {
        log_message('info', 'inside retrieving pharmacy beyond id ');
        $where_sql = "ff.forumid_forum = " . $forum_id;


        $this->db->select('ff.id_forum as id,ff.name as text,"true" as hasChildren', false)
                ->from('forum f')
                ->join('forum ff', 'f.id_forum = ff.forumid_forum')
                ->where($where_sql)
                ->group_by('ff.id_forum')
                ->order_by('ff.name'
        );
        $this->db->get();
        $query1 = $this->db->last_query();

        $this->db->select('ft.id_topicforum as id,upper(ft.name) as text, "false" as hasChildren', false)
                ->from('forum_topic ft')
                ->where(array(
                    'ft.forumid_forum' => "$forum_id"
                ))
                ->order_by('ft.name'
        );
        $this->db->get();
        $query2 = $this->db->last_query();

        $final_query = '(' . $query1 . ') union (' . $query2 . ')';
        log_message('info', 'Ajax retrieval for articles ::::::::::===>' . $final_query);
        $query = $this->db->query($final_query);
        //   $this->db->get();

        $result = $query->result_array();
        foreach ($result as $key => $subarray) {
            foreach ($subarray as $subkey => $subsubarray) {
                if ($result[$key]['hasChildren'] == 'true') {
                    $result[$key]['hasChildren'] = true;
                } else if ($result[$key]['hasChildren'] == 'false') {
                    $result[$key]['hasChildren'] = false;
                }
            }
        }
        //   log_message('info', 'new result ======================='.$result);
        $query->free_result();
        return $result;
    }

    function retrieve_topic_comments($topic_id, $desiredPosts) {
        log_message('info', 'inside retrieving comments topic id and drug id is ' . $topic_id);

        $this->db->select('tc.id_topiccomment,tc.comment,tc.timecreated, m.firstname_member,m.surname_member,mt.default_image_name')
                ->from('topic_comment tc')
                ->join('member m', 'tc.memberid_member = m.id_member and tc.forum_topicid_topicforum = ' . $topic_id)
                ->join('membertype mt', 'm.membertypeid_membertype = mt.id_membertype')
                ->order_by('tc.id_topiccomment', 'desc'
        );
        $this->db->limit($desiredPosts, 0);
        $query = $this->db->get();
        log_message('info', $this->db->last_query());
        $result = $query->result_array();
        $query->free_result();
        return $result;
    }

    function retrieve_topic_comment_counts($topic_id) {
        log_message('info', 'inside retrieving comments topic id ' . $topic_id);

        $this->db->select('mt.id_membertype as member_type_id,mt.name as membertype_name,count(tc.comment) as comment_count')
                ->from('topic_comment tc')
                ->join('member m', 'tc.memberid_member = m.id_member and tc.forum_topicid_topicforum = ' . $topic_id)
                ->join('membertype mt', 'm.membertypeid_membertype = mt.id_membertype')
                ->group_by('mt.id_membertype')
                ->order_by('tc.id_topiccomment'
        );
        $query = $this->db->get();
        log_message('info', $this->db->last_query());
        $result = $query->result_array();
        $query->free_result();
        return $result;
    }

    function topic_comment_count($topic_id) {

        $this->db->select('count(tc.id_topiccomment) as count')
                ->from('topic_comment tc')
                ->join('member m', 'tc.memberid_member = m.id_member and tc.forum_topicid_topicforum = ' . $topic_id)
                ->join('membertype mt', 'm.membertypeid_membertype = mt.id_membertype')
                ->order_by('tc.id_topiccomment', 'desc'
        );
        $query = $this->db->get();
        log_message('info', $this->db->last_query());
        return $query->first_row()->count;
    }

}

?>
