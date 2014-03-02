
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
    $errors = array_filter($topic_data);
    if (empty($errors)) {
        $errors = array_filter($default_topic);
        if (empty($errors)) {
            $topic_data = array(
                'id' => '0', 'name' => 'No topic available', 'description' => '',);
        } else {
            $topic_data = $default_topic;
        }
    }
    $topic_id = $topic_data['id'];
    ?>
    <link rel="stylesheet" href="<?php echo base_url() ?>css/jquery.treeview.css" />
    <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.js"></script> 
    <script src="<?php echo base_url() ?>js/jquery.cookie.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>js/jquery.treeview.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>js/jquery.treeview.edit.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>js/jquery.treeview.async.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.autoSuggest.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.blockUI.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>js/forums.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>js/util.js"></script>
    <script type="text/javascript" src="js/prettify.js"></script>
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="content-type">
            <title>Pharmaray User</title>
    </head> 
    <body> <?php include 'banner.php' ?>
        <div id="maincontainer">
            <div class="alert alert-info alert-login heading floating_banner">
                Forums and Topics :: &emsp;&ensp; <?php echo $logged_in_user ?>
                <input type="hidden" name="id-holder" id="id-holder"/> 
                <input class="searchbox" id="inputBox" placeholder="Search topics..." type="text" value="" name="Name" data-val-required="The Search field is required." data-val="true"/>

            </div>
        </div>
        <input type="hidden" id="memberid" name="memberid" value="<?php echo $memberid; ?>"/>
        <input type="hidden" id="start_comment" name="start_comment" value="10"/>
        <input type="hidden" id="topicid" name="topicid" value="<?php echo $topic_id; ?>"/>
        <input type="hidden" id="serverurl" name="serverurl" value="<?php echo base_url() ?>"/>
        <input type="hidden" id="membertype" name="membertype" value="<?php echo $membertypeimage ?>"/>
        <input type="hidden" id="membertypeid" name="membertypeid" value="<?php echo $membertypeid ?>"/>
        <input type="hidden" id="membername" name="membername" value="<?php echo $logged_in_user ?>"/>
        <?php
        $lastcommentid = '';
        $errors = array_filter($comments);

        if (!empty($errors)) {
            $lastcommentid = $comments[0]['id_topiccomment'];
        }
        ?>
        <input type="hidden" id="lastcommentid" name="lastcommentid" value="<?php echo $lastcommentid ?>"/>

        <div id="contentwrapper">
            <div id="notifications">
                <div class="alert alert-info alert-login heading">
                    Forum topics...<br/>
                </div>

                <div id="forum_list" class="treeview-red">
                    <ul id="">  <?php
                        $errors = array_filter($retrieved_forum);

                        if (!empty($errors)) {
                            foreach ($retrieved_forum as $columnName => $columnData) {
                                $name = $columnData['name'];
                                $id = $columnData['id'];
                                ?>
                                <li class="hasChildren" id="<?php echo $id; ?>"><span><?php echo word_trim($name, 20, true) ?></span>
                                    <ul>
                                        <li><span class="placeholder">&nbsp;</span></li>
                                    </ul></li>
                                <?php
                            }
                        } else {
                            ?><li><a  target="_top" href="#">Not forum exists</a></li>
                                <?php
                            }
                            ?>
                    </ul>
                </div>

            </div>
            <div class="main_content">
                <div class="row-fluid main_content_swatch">




                    <div class="wrapdivfull">
                        <div id="searchresult">
                            <h3 class="heading"><?php echo $topic_data['name']; ?></h3>
                            <div class="formSep" id="formSep">
                                <div class="row-fluid">
                                    <div class="span12">
                                        <div class="comment-description">
                                            <?php echo $topic_data['description']; ?> </div>

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
                                        $comment_id = $columnData['id_topiccomment'];
                                        $comment_member_name = $columnData['firstname_member'] . ' ' . $columnData['surname_member'];
                                        $default_image_name = $columnData['default_image_name'];
                                        $timecreated = $columnData['timecreated'];
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
                                                        <a class="register submit" href="#" name="createtopiccomment" > Comment </a> 
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                            </div>
                        </div><div class="news_section_right">
                            <div class="drugcategories" id="articlesandjournal">
                                <div class="alert alert-info alert-login heading">
                                    Topic with most comments...<br/>
                                </div>
                                <?php
                                echo form_open('sys_admin/user_authorization/newslist')
                                ?>
                                <?php
                                $errors = array_filter($most_viewed_topics);

                                if (!empty($errors)) {
                                    foreach ($most_viewed_topics as $columnName => $columnData) {

                                        $newsletters_title = $columnData['name'];
                                        $newsletters_description = $columnData['description'];
                                        $newsletters_id = $columnData['id_topicforum'];
                                        ?>
                                        <div class='eventslist'>
                                            <ul>

                                                <li><a class="news_title forum_topic_title" id="<?php echo $newsletters_id ?>" target="_top" href="#" onclick="return false;"><?php echo word_trim($newsletters_title, 42, true) ?></a>
                                                    <div class="comment-description">
                                                        <?php echo word_trim($newsletters_description, 147, true) ?>
                                                    </div></li>

                                            </ul></div>
                                        <?php
                                    }
                                } else {
                                    ?><div class='eventslist'>
                                        <ul>
                                            <li><a class="news_title" target="_top" href="#">No topic yet...</a></li>

                                        </ul></div>
                                    <?php
                                }
                                ?>
                                <?php echo form_close() ?>
                            </div></div>
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