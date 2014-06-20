<!DOCTYPE html>
<html>
    <?php
//    include('login.php');
    ?>  
    <link type="text/css" href="<?php echo base_url() ?>css/jquery-ui.css" rel="stylesheet">


    <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.js"></script> 
    <script type="text/javascript" src="<?php echo base_url() ?>js/jquery-ui.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.reveal.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>js/rays.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>js/util.js"></script>
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Pharmaray</title>

    </head>
    
    <?php
if ($this->session->userdata('memberid') != '') {
        redirect(base_url() . 'sys_admin/user_authorization/reloadwelcomepage');
    }
    log_message('info', 'The session id is ========>' . $this->session->userdata('session_id') . ' and the member id is =======>' . $this->session->userdata('memberid'));
    
    function display_hidden_fields($data_pos) {

        $hidden_fields = "<input type='hidden' id='vertical_pos' value='" . $data_pos[0] . "'/>"
                . " <input type='hidden' id='horizontal_pos' value='" . $data_pos[1] . "'/>"
                . " <input type='hidden' id='count' value='" . $data_pos[2] . "'/>";
        return $hidden_fields;
    }

    function display_info($data_array, $data_pos) {
        $vertical_pos = $data_pos[0];
        $horizontal_pos = $data_pos[1];
        $count = $data_pos[2];
        $news_reference = '';

        foreach ($data_array as $columnName => $columnData) {
            $newsletter_id = $columnData['id'];
            $count++;
            if ($count >= 9) {
                $count = 1;
            }
            if (array_key_exists('news_description', $columnData)) {
                $newsletter_description = $columnData['news_description'];
                $newsletter_title = $columnData['news_title'];
                log_message('info', 'The key exists ===========================');
                $data_title = 'news_title';
            } else {
                $newsletter_title = $columnData['newsletter_title'];
                $newsletter_description = $columnData['newsletter_description'];
                log_message('info', 'The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>');
                $data_title = 'newsletter_title';
            }


            $default_image_name = "back" . $count . ".jpg";
            $author_name = $columnData['author_name'];
            $news_date = $columnData['time_created'];
            $guestonly = $columnData['guestonly'];
            // $news_reference = base_url() . 'sys_admin/user_authorization/newslist?news_id=' . $newsletter_id . '&article_type=' . $data_title;
            log_message('info', $guestonly . ' the guest only data>>>>>' . $news_reference);


            //   $comment_member_name = $row['firstname_member'] . ' ' . $row['surname_member'];
            ?>

            <a class="mason-tile product swatch-display masonry-brick <?php echo $data_title; ?> <?php
            if ($guestonly == 0) {
                echo 'private-product';
                $news_reference = '#' . $newsletter_id;
            } else {
                echo 'article_title';
            }
            ?>" id="<?php echo $newsletter_id ?>" href="<?php echo $news_reference ?>" onclick="return false;" style="position: absolute;<?php echo 'top: ' . $vertical_pos . 'px; left: ' . $horizontal_pos . 'px; ' ?>">
                <div class="image-scope">
                    <img class="image-box" style="width:200px; height:200.0px" src="<?php echo base_url() ?>images/<?php echo $default_image_name ?>">
                    <div class="image-actions" style="display: none;">
                        <div class="image-mask"></div>                               
                    </div>
                </div>
                <h5 class="title">
                    <?php echo word_trim($newsletter_title, 42, true) ?><br/>
                    <div class="swatch_text">
                        <small><?php echo word_trim($newsletter_description, 147, true) ?></small>
                    </div>
                </h5>                        
                <div class="store-label"><?php echo word_trim($author_name, 30, false) ?></div>
                <div class="stats-block"><?php echo $news_date ?></div>
            </a>
            <?php
            log_message('info', $guestonly . ' the guest only data>> AFTER >>>' . $news_reference);
            if ($horizontal_pos >= 904) {
                $vertical_pos += 430;
                $horizontal_pos = 0;
            } else {
                $horizontal_pos += 230;
            }
        }
        $new_data_pos = array(
            '0' => $vertical_pos, '1' => $horizontal_pos, '2' => $count);


        return $new_data_pos;
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

    $message = $this->session->flashdata('message');
    $css = '';
    $css_rays1 = '';
    $css_rays2 = '';
    $css .= link_tag(base_url() . "css/rays.css");
    $css_rays1 .= link_tag(base_url() . "css/rays1.css");
    $css_rays2 .= link_tag(base_url() . "css/rays2.css");
    echo $css;
    echo $css_rays1;
    echo link_tag(base_url() . 'images/favicon.ico', 'shortcut icon', 'image/ico');
    ?>
    <body >
        <?php include 'guestbanner.php' ?><?php
        echo form_open('sys_admin/user_authorization/raysloginauthrization')
        ?>
        <div id="signintab">
            <span><?php echo $message; ?></span>
            <input type="text" name="username" placeholder="Username or email">
            <input name="password" type="password" placeholder="Password">
            <input type="submit" value="Login" class="snazzy_button" id="loginUser" name="loginUser" />
            <input type="hidden" id="drugid" name="drugid" value="1"/>
            <input type="hidden" id="serverurl" name="serverurl" value="<?php echo base_url() ?>"/>
            <input type="hidden" id="empty_data" name="servempty_dataerurl" value="false"/>
        </div>
        <?php echo form_close() ?>

    </div>

    <div class="main-body">
        <div class="container products">
            <div class="product-tiles masonry title_body" style="position: relative; height: 100%;">

                <?php
                //    include('config.php');
//$post_id value comes from the POSTS table

                $data_pos = array(
                    '0' => 0, '1' => 0, '2' => 0);
                //  $data_pos = display_info($newsletter, $newsletter_title, $newsletter_description, $data_pos);
                $data_pos = display_info($news, $data_pos);
                echo display_hidden_fields($data_pos);
                ?>

            </div>
        </div>


    </div>
    <div class="container footer hidden-phone smoke-white">
        <div class="footer-info pull-left">
            <span>&copy; 2013 Pharmarays</span>
            <a href="#" >About Us</a>
            <a href="#">Contact Us</a>
            <a href="#" >Terms & Conditions</a>
            <div class="ias_loader">
                <div id="loader"><img src='<?php echo base_url() ?>images/loading_icon.gif' alt='loading' style="display:none"/>
                </div>                
            </div>
            <!-- <div class="ias_trigger" style="">
                 <a href="#">
                     Load more items
                 </a>
             </div>-->
        </div>
    </div>
    <div id="modal">
        <div id="heading">
            Not available to guests. Sign Up Now!
        </div>

        <div id="content">
            <p>Clicking yes will take you to the sign up screen.</p>

            <a href="<?php echo base_url() ?>sys_admin/user_authorization/index" class="button green close"><img src="<?php echo base_url() ?>images/tick.png">Yes, do it now!</a>

            <a href="#" class="button red close"><img src="<?php echo base_url() ?>images/cross.png">No, Continue</a>
        </div>
    </div>
    <div id="dialog-modal" title="Loading....">
        <p></p> <div class="store-label"></div>
        <div class="stats-block"></div>
    </div>
</body>
</html>
<script type="text/javascript">

</script>
