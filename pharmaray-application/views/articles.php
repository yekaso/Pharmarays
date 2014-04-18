
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <?php

    function display_info($data_array, $data_title, $data_description, $data_pos) {
        $count = $data_pos[0];
        $news_reference = '';
        foreach ($data_array as $columnName => $columnData) {

            $count++;
            if ($count >= 9) {
                $count = 1;
            }
            $newsletter_id = $columnData['id'];
            $newsletter_title = $columnData[$data_title];
            $newsletter_description = $columnData[$data_description];
            $default_image_name = "back" . $count . ".jpg";
            $author_name = $columnData['author_name'];
            $news_date = $columnData['time_created'];
            $guestonly = $columnData['guestonly'];
            $news_reference = base_url() . 'sys_admin/user_authorization/newslist?news_id=' . $newsletter_id . '&article_type=' . $data_title;
            log_message('info', $guestonly . ' the guest only data>>>>>' . $news_reference);


            //   $comment_member_name = $row['firstname_member'] . ' ' . $row['surname_member'];
            ?>

            <div class="row-fluid news_title" id="<?php echo $newsletter_id ?>">
                <div class="span12">
                    <div class="editor-label">
                        <img style="width:10%; height:10%" src="<?php echo base_url() ?>images/<?php echo $default_image_name; ?>" />
                        <div>
                            <a class="article_title" href="#" id="<?php echo $newsletter_id ?>" onclick="return false;"><?php echo strtoupper(word_trim($newsletter_title, 120, true)) ?></a>
                            <br/><div id="user_comment">
                                <?php echo word_trim($newsletter_description, 400, true) ?>
                            </div>
                            <div class="timestamp"><?php echo $news_date; ?></div>
                        </div>

                    </div>
                </div>
            </div>




            <?php
        }
        $new_data_pos = array('0' => $count);


        return $new_data_pos;
    }

    function word_trim($string, $count, $ellipsis = FALSE) {

        if (strlen($string) > $count) {
            $string = substr($string, 0, strrpos(substr($string, 0, $count), ' '));
            if (is_string($ellipsis)) {
                $string .=$ellipsis;
            } else if ($ellipsis) {
                $string .= '...';
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

        <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>js/jquery-ui.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>js/articles.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>js/util.js"></script>

        <head>
            <meta content="text/html; charset=utf-8" http-equiv="content-type">
                <title>Pharmaray User</title>
        </head> 
        <body> <input type="hidden" id="serverurl" name="serverurl" value="<?php echo base_url() ?>"/>
            <input type="hidden" id="memberid" name="memberid" value="<?php echo $memberid; ?>"/>
            <?php include 'banner.php' ?>
            <div id="maincontainer">
                <div class="alert alert-info alert-login heading floating_banner">
                    <div>News, Newsletters and events... &emsp;&ensp;
                        <input type="hidden" name="id-holder" id="id-holder"/> 
                        <input class="searchbox" id="inputBox" placeholder="Search news, newsletters, writeups, thesis, materials, events by a word, sentence or phrase that best describes it" type="text" value="" name="Name" data-val-required="The Search field is required." data-val="true"/>

                    </div>
                </div>
                <div class="newscategories" id="newsandevents">
                    <?php
                    $data_pos = array(
                        '0' => 0);
                    $newsletter_title = 'newsletter_title';
                    $newsletter_description = 'newsletter_description';
                    $news_title = 'news_title';
                    $news_description = 'news_description';

                    $data_pos = display_info($newsletter, $newsletter_title, $newsletter_description, $data_pos);
                    //       $data_pos = display_info($news, $news_title, $news_description, $data_pos);
                    ?>           
                </div>

            </div>
            <div id="ias_trigger" class="ias_trigger" style="">
                <a href="#ias_trigger" onclick="return false;">
                    Load more items
                </a>
            </div>
            <div class="ias_loader">
                <div id="loader"><img src='<?php echo base_url() ?>images/loading_icon.gif' alt='loading' style="display:none"/>
                </div>                
            </div>
            <div id="dialog-modal" title="Loading....">
                <p></p> <div class="store-label"></div>
                <div class="stats-block"></div>
            </div>
        </body>
</html>