<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class admin_model extends CI_Model{
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
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

  /*Get all items queries*/
    
    function list_allArticles() {
         $query = $this->db->query("select a.id_article id, a.title head, a.description  descrip,a.author author,
                DATE_FORMAT(a.time_created,'%d-%b-%y') txn_date, CONCAT_WS(' ',m.firstname_member,m.surname_member) fullName
                from article a, member m
                where a.memberid_member = m.id_member");
        return  $query->result_array();
    }
    /**Get Article by Id*/
    function get_articleById($article_id) {
        $this->db->select('a.*, d.name')
                ->from('article a')
                ->join('news n','n.id_news = a.newsid_news','inner') 
                ->join('newsdrugmerger nd',' nd.newsid_news = n.id_news','inner') 
                ->join('drugcategory d','nd.drugcategoryid_drugcategory = d.id_drugcategory','inner')
                ->where('id_article ='.$article_id);
         $query = $this->db->get();
         return $query->row_array();
    }
    
    /**delete article*/
    function delete_article(){
        
    }
    function list_allBrands() {
        $query = $this->db->get('usergroup');
        return $query->result_array();
    }
    
    function list_allDrugCategories() {
        $query = $this->db->get('usergroup');
        return $query->result_array();
    }
    
    function list_allDrugClass() {
        $query = $this->db->get('usergroup');
        return $query->result_array();
    }
    
    
}
?>
