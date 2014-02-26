
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <?php

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

    $css = '';
    $css .= link_tag(base_url() . "css/userpage.css");
    $autoSuggestCss = '';
    $autoSuggestCss .= link_tag(base_url() . "css/autoSuggest.css");
    echo $css;
    echo $autoSuggestCss;
    echo link_tag(base_url() . 'images/favicon.ico', 'shortcut icon', 'image/ico');
    ?>
    <link type="text/css" href="<?php echo base_url() ?>css/jquery-ui.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>css/perfect-scrollbar.css" rel="stylesheet">

            <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.js"></script> 
            <script type="text/javascript" src="<?php echo base_url() ?>js/main.js"></script>
            <script type="text/javascript" src="<?php echo base_url() ?>js/jquery-ui.js"></script>
            <script src="<?php echo base_url() ?>js/jquery.treeview.js" type="text/javascript"></script>

            <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.autoSuggest.js"></script>
            <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.blockUI.js"></script>
            <script type="text/javascript" src="<?php echo base_url() ?>js/util.js"></script>
            <script src="<?php echo base_url() ?>js/jquery.mousewheel.js"></script>
            <script src="<?php echo base_url() ?>js/perfect-scrollbar.js"></script>

            <head>
                <meta content="text/html; charset=utf-8" http-equiv="content-type">
                    <title>Pharmaray User</title>
            </head> 
            <body><?php include 'hybridbanner.php' ?>
                <div id="maincontainer">
                    <input type="hidden" id="memberid" name="memberid" value="<?php echo $memberid; ?>"/>
                    <input type="hidden" id="start_comment" name="start_comment" value="10"/>
                    <input type="hidden" id="drugid" name="drugid" value="<?php echo $drugid; ?>"/>
                    <input type="hidden" id="serverurl" name="serverurl" value="<?php echo base_url() ?>"/>
                    <input type="hidden" id="membertype" name="membertype" value="<?php echo $membertypeimage ?>"/>
                    <input type="hidden" id="membertypeid" name="membertypeid" value="<?php echo $membertypeid ?>"/>
                    <input type="hidden" id="membername" name="membername" value="<?php echo $logged_in_user ?>"/>
                    <input type="hidden" value="retrievearticle" name="reqResource"/>
                    <?php
                    $lastcommentid = '';
                    $errors = array_filter($comments);

                    if (!empty($errors)) {
                        $lastcommentid = $comments[0]['id_drugcomment'];
                    }
                    ?>
                    <input type="hidden" id="lastcommentid" name="lastcommentid" value="<?php echo $lastcommentid ?>"/>

                    <div id="contentwrapper">
                        <?php include 'userpagenav.php' ?>
                        <div class="main_content">
                            <div class="row-fluid main_content_swatch">

                                <div class="alert alert-info alert-login heading">
                                    Online Pharmacy :: <?php echo $logged_in_user ?>
                                    <br>
                                </div>


                                <div class="wrapdivfull">
                                    <div id="searchresult">
                                        <div>
                                            <input type="hidden" name="id-holder" id="id-holder"/> 
                                            <input class="searchbox" id="inputBox" placeholder="Search drugs..." type="text" value="" name="Name" data-val-required="The Search field is required." data-val="true"/>

                                        </div>
                                        <h3 class="heading"><?php echo $drug_data['drug_name']; ?></h3>
                                        <h6>  By&nbsp;&nbsp;&nbsp;
                                            <?php
                                            $split_brandname = explode(",", $drug_data['drug_brandname']);
                                            foreach ($split_brandname as $brand_name) {
                                                $split_brandobject = explode(":", $brand_name);
                                                ?><a  target="_top" href="#" id="<?php echo $split_brandobject[1]; ?>"><?php echo $split_brandobject[0]; ?></a><?php } ?></h6> 
                                        <div class="formSep" id="formSep">
                                            <div class="row-fluid">
                                                <div class="span12">
                                                    <div class="comment-description">
                                                        <?php echo $drug_data['drug_description']; ?> </div>

                                                </div>

                                            </div>
                                            <div id="widget">
                                                <?php if ($all_comment_count > $desiredPosts) {
                                                    ?> 
                                                    <button class="more btn btn-block">
                                                        More <span class="caret"></span>
                                                    </button>
                                                <?php } ?>
                                            </div>
                                            <div class="comment_section">

                                                <?php
                                                //    include('config.php');
//$post_id value comes from the POSTS table
                                                $comment_member_name = 'Unidentified Member';
                                                $comments = array_reverse($comments);
                                                foreach ($comments as $columnName => $columnData) {
                                                    $comment_dis = $columnData['comment'];
                                                    $comment_id = $columnData['id_drugcomment'];
                                                    $comment_member_name = $columnData['firstname_member'] . ' ' . $columnData['surname_member'];
                                                    $default_image_name = $columnData['default_image_name'];
                                                    $timecreated = $columnData['time_created'];
                                                    //   $comment_member_name = $row['firstname_member'] . ' ' . $row['surname_member'];
                                                    ?>
                                                    <div class="row-fluid" id="comments">
                                                        <div class="span12">
                                                            <div class="editor-label">
                                                                <img src="<?php echo base_url() ?>images/<?php echo $default_image_name; ?>.png" />
                                                                <div>
                                                                    <div id="comment_username">Pharmacist <?php echo $comment_member_name; ?></div>
                                                                    <br/><div id="user_comment">
                                                                        <?php echo $comment_dis; ?>
                                                                    </div>
                                                                    <div class="timestamp"><?php echo $timecreated; ?></div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                }
                                                ?>
                                            </div>

                                            <div>
                                                <div class="row-fluid">
                                                    <div class="span12">
                                                        <?php
                                                        if ($comment_counts != NULL) {
                                                            ?>
                                                            <div class="editor-field" id="comments_summary">
                                                                <?php
                                                                foreach ($comment_counts as $columnName => $columnData) {

                                                                    $member_type = $columnData['membertype_name'];
                                                                    $comment_count = $columnData['comment_count'];
                                                                    $member_type_id = $columnData['member_type_id'];
                                                                    log_message('info', ' column name inside view is ' . $columnName . ' column Data is ' . $member_type);
                                                                    ?>
                                                                    <a class="comment" id="<?php echo $member_type_id ?>" target="_top" href="#"><?php echo $comment_count . ' ' . $member_type ?>s'</a>
                                                                    <?php
                                                                }
                                                            }
                                                            ?> 


                                                        </div>
                                                    </div>

                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <?php include 'userpagenavright.php' ?>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div id="dialog-modal" title="Lohading....">
                    <p></p> <div class="store-label"></div>
                    <div class="stats-block"></div>
                </div>
            </body>
            </html>