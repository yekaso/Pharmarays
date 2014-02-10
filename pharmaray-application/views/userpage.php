
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
            <body><?php include 'banner.php' ?>
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
                        <div id="notifications">
                            <div class="alert alert-info alert-login heading">
                                Sold here...<br/>
                            </div>
                            <div id="pharmacy">
                                <ul>  <?php
                                    $errors = array_filter($related_pharmacy);

                                    if (!empty($errors)) {
                                        foreach ($related_pharmacy as $columnName => $columnData) {
                                            $name = $columnData['name'];
                                            $id = $columnData['id_pharmacy'];
                                            ?>
                                            <li><a target="_top" href="<?php echo base_url() ?>sys_admin/user_authorization/redirect_to_displaypharm?pharmacyid=<?php echo $id; ?>"><?php echo word_trim($name, 30, true) ?></a></li>
                                            <?php
                                        }
                                    } else {
                                        ?><li><a  target="_top" href="#">Not available in any pharmacy</a></li>
                                            <?php
                                        }
                                        ?>
                                </ul>
                            </div>
                            <br/>
                            <div class="alert alert-info alert-login heading">
                                Notifications...<br/>
                            </div>

                            <div id="vacancies">
                                <ul> <?php
                                    $errors = array_filter($vacancy_data);

                                    if (!empty($errors)) {
                                        foreach ($vacancy_data as $columnName => $columnData) {
                                            log_message('info', ' column name inside view is ' . $columnName . ' column Data is ' . $columnData['vacancygroup_name']);
                                            $vacancy_type = $columnData['vacancygroup_name'];
                                            $vacancy_count = $columnData['vacancy_count'];
                                            ?>
                                            <li><a  target="_top" href="#"><?php echo $vacancy_type ?> (<?php echo $vacancy_count ?>)</a></li>
                                            <?php
                                        }
                                    } else {
                                        ?><li><a  target="_top" href="#">No vacancy yet</a></li>
                                            <?php
                                        }
                                        ?></ul>
                            </div>
                            <div class="alert alert-info alert-login heading">
                                List of related drugs by...<br/>
                            </div>
                            <div id="relateditems">
                                <input type="checkbox" id="brandname" value="<?php echo $drug_data['brandname_id'] ?>" name="brandname" class="related_items"/>Brand name / Company<br/>
                                <input type="checkbox" id="class" name="class" value="-1" class="related_items"/>Class<br/>
                                <input type="checkbox" id="generic" name="generic" value="<?php echo $drug_data['category_id'] ?>" class="related_items"/>Generic<br/>
                                <input type="checkbox" id="indication" name="indication" class="related_items"/>Indication<br/>
                            </div>
                            <div id="related_drugs">

                                <ul>
                                    <li><a  target="_top" href="#">No criteria selected yet</a></li>
                                </ul>
                            </div>

                        </div>
                        <div class="main_content">
                            <div class="row-fluid main_content_swatch">

                                <div class="alert alert-info alert-login heading">
                                    Welcome to Pharmarays :: <?php echo $logged_in_user ?>
                                    <br>
                                </div>


                                <div class="wrapdivfull">
                                    <div id="searchresult">
                                        <div>
                                            <input type="hidden" name="id-holder" id="id-holder"/> 
                                            <input class="searchbox" id="inputBox" placeholder="Search drugs..." type="text" value="" name="Name" data-val-required="The Search field is required." data-val="true"/>

                                        </div>
                                        <h3 class="heading"><?php echo $drug_data['drug_name']; ?></h3>
                                        <h6>  By <?php echo $drug_data['drug_brandname']; ?></h6> 
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
                                                            <a class="recommend" href="#">Recommend</a>


                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row-fluid">
                                                    <div class="span12">
                                                        <div class="editor-field" id="commentbutton">
                                                            <textarea class="span12 comment-input-field" name="comment" id="comment"></textarea>
                                                            <div class="loading">
                                                                <img src="<?php echo base_url() ?>images/loading2.gif" class="flash">
                                                                    <span class="flash">Loading Comment...</span>
                                                                    <a class="register submit" href="#" name="createcomment"> Comment </a> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="drugcategories" id="articlesandjournal">
                                        <div class="alert alert-info alert-login heading">
                                            Related articles and journals...<br/>
                                        </div>
                                        <?php
                                        echo form_open('sys_admin/user_authorization/newslist')
                                        ?>
                                        <?php
                                        $errors = array_filter($news);

                                        if (!empty($errors)) {
                                            foreach ($news as $columnName => $columnData) {

                                                $newsletters_title = $columnData['news_title'];
                                                $newsletters_description = $columnData['news_description'];
                                                $newsletters_id = $columnData['id'];
                                                ?>
                                                <div class='eventslist'>
                                                    <ul>

                                                        <li><a class="news_title article_title" id="<?php echo $newsletters_id ?>" target="_top" href="#"><?php echo word_trim($newsletters_title, 42, true) ?></a>
                                                            <div class="comment-description">
                                                                <?php echo word_trim($newsletters_description, 147, true) ?>
                                                            </div></li>

                                                    </ul></div>
                                                <?php
                                            }
                                        } else {
                                            ?><div class='eventslist'>
                                                <ul>
                                                    <li><a class="news_title" target="_top" href="#">No related news</a></li>

                                                </ul></div>
                                            <?php
                                        }
                                        ?>
                                        <?php echo form_close() ?>
                                    </div>
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