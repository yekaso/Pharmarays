<?php
/**
 * @author Kachi, Zed
 */
class adminpharm extends CI_Controller{
    
     public function __construct() {
        parent::__construct();
        $this->load->model('admin_model/admin_model');
         $this->load->model('members_model/membermodel');
        $this->load->library('session');
        
            if ($this->session->userdata('memberid') == '') {
            //  redirect(base_url() . 'sys_admin/user_authorization/reloadwelcomepage');
            redirect(base_url() . 'sys_admin/user_authorization/logout');
        }
         $this->load->view('admin/adminheader');
     }
   
     /**Start Redirect to pages in Admin Module*/
    function redirect_to_managearticles($article_id = 0) {
        $data['memberid'] = $this->session->userdata('memberid');
        log_message('info', 'after newsleters list has been clicked.................');
        $data['drugcategory'] = $this->membermodel->retrieve_drugcategory();
        $data['all_articles'] = $this->admin_model->list_allArticles();
        if($article_id != 0){
            $data['article_detail'] = $this->admin_model->get_articleById($article_id);
            $this->load->view('admin/article/view_article', $data);
        }else{
        $this->load->view('admin/article/articlelist', $data);
        }
    }
    
    function edit_managearticles($article_id){
          $data['memberid'] = $this->session->userdata('memberid');
          $data['article_detail'] = $this->admin_model->get_articleById($article_id);
          $data['drugcategory'] = $this->membermodel->retrieve_drugcategory();
          $this->load->view('admin/article/edit_article', $data);
    }
    
    /**Not yet implemented this function
     *think there should be a disable function not 
     * outright delete from database
     */
    function delete_article($article_id){
        $this->admin_model->delete_article($article_id);
    }

    function redirect_to_managedrugs() {
        $data = '';
        log_message('info', 'after newsleters list has been clicked.................');
        $data['drugcategory'] = $this->membermodel->retrieve_drugcategory();
        $data['drugbrand'] = $this->membermodel->retrieve_brandnames();
        $data['drugclass'] = $this->membermodel->retrieve_drugclass();
        $this->load->view('admin/adminpagedrugs', $data);
    }

    function redirect_to_manageforums() {
        $data = '';
        $data['forums'] = $this->membermodel->retrieve_all_forums();
        $data['forumcategory'] = $this->membermodel->retrieve_forumcategories();
        log_message('info', 'after newsleters list has been clicked.................');
        $this->load->view('admin/adminpageforum', $data);
    }

    function redirect_to_managepharmacy() {
        $data = '';
        log_message('info', 'after newsleters list has been clicked.................');
        $data['locations'] = $this->membermodel->retrieve_locations();
        $this->load->view('admin/adminpagepharmacy', $data);
    }

    function redirect_to_managebrandname() {
        $data = '';
        log_message('info', 'after brandname list has been clicked.................');
        $this->load->view('admin/adminpagebrandname', $data);
    }

    function redirect_to_managedrugcategory() {
        $data = '';
        log_message('info', 'after drug category list has been clicked.................');
        $this->load->view('admin/adminpagedrugcategory', $data);
    }

    function redirect_to_managedrugclass() {
        $data = '';
        log_message('info', 'after drug class list has been clicked.................');
        $this->load->view('admin/adminpagedrugclass', $data);
    }
    /**End Redirect in Admin Module*/
    
    /**create in Admin Module*/
    function createpharmacy() {
        extract($_POST);
        log_message('info', 'Inside create pharmacy');
        $pharmacy_data = array('name' => $name,
            'address' => $address,
            'telephone' => $telephone,
            'locationid_location' => $location);
        $newsid = $this->admin_model->create_pharmacy($pharmacy_data);
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
        $forumid = $this->admin_model->create_forum($forum_data);
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
        $drugclassid = $this->admin_model->create_drugcategory($drugcategory_data);
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
        $drugclassid = $this->admin_model->create_brandname($brandname_data);
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
        $drugclassid = $this->admin_model->create_drugclass($drugclass_data);
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

        $drugid = $this->admin_model->create_drug($drug_data);
        $result_debug = '';
        foreach ($drugclass as $columnName => $columnData) {
            $drug_class = array('drugclassid_drugclass' => $columnData,
                'drugid_drug' => $drugid,);

            $drugclassid = $this->admin_model->create_drugclassdrug($drug_class);
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
        $newsid = $this->admin_model->create_topic($topic_data);
        log_message('info', 'After creating topic');
        $result_topic['status'] = 'success';
        echo json_encode($result_topic);
    }

    function createarticle() {
        extract($_POST);
        log_message('info', 'Inside create article');
        $news_data = array('enabled' => 'true',);
        $newsid = $this->admin_model->createnews($news_data);
        log_message('info', 'After creating news');
        $drugmerger_data = array('newsid_news' => $newsid,
            'drugcategoryid_drugcategory' => $drugcategory,);
        $this->admin_model->createnewsdrugmerger($drugmerger_data);
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
        $this->admin_model->create_article($article_data);
        log_message('info', 'After creating article');
//    $result_article['status'] = 'success';
        echo json_encode($result_article);
    }
/**End Create Items in Admin Module*/
}
?>
