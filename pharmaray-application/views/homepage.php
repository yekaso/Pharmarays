<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Pharmarays</title>
        <style type="text/css">
            body,td,th {
                font-family:Verdana, Geneva, sans-serif;
                font-size: 12px;
                color: #333;
            }
            body {
                margin:0 auto;
                text-align:center;


            }

            h1,h2,h3,h4,h5,h6 {
                font-family: Verdana, Geneva, sans-serif;
            }
            h1 {
                font-size: 36px;
                color: #251F1F;
            }
            h2 {
                font-size: 24px;
                color: #251F1F;
            }
            h3 {
                font-size: 18px;
                color: #F00;
            }
            h4 {
                font-size: 16px;
                color: #251F1F;
            }
            h5 {
                font-size: 14px;
                color: #251F1F;
            }
            h6 {
                font-size: 12px;
                color: #251F1F;
            }
            #modal {
                visibility:hidden;
                width:360px;
                height:189px;
                padding:8px;

                background:rgba(0,0,0,.3);

                -webkit-border-radius:8px;
                -moz-border-radius:8px;
                border-radius:8px;

                position:fixed !important;
                top:50% !important;
                left:50% !important;
                margin-top:-94px !important;
                margin-left:-180px !important;
                z-index:101;
            }


            #heading {
                width:360px;
                height:44px;

                background-image: -webkit-linear-gradient(top, rgb(249, 249, 249), rgb(233, 233, 233));
                background-image: -moz-linear-gradient(top, rgb(249, 249, 249), rgb(233, 233, 233));
                background-image: -o-linear-gradient(top, rgb(249, 249, 249), rgb(233, 233, 233));
                background-image: -ms-linear-gradient(top, rgb(249, 249, 249), rgb(233, 233, 233));
                background-image: linear-gradient(top, rgb(249, 249, 249), rgb(233, 233, 233));
                filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,StartColorStr='#f9f9f9', EndColorStr='#e9e9e9');

                border-bottom:1px solid #bababa;

                -webkit-box-shadow:
                    inset 0px -1px 0px #fff,
                    0px 1px 3px rgba(0,0,0,.08);
                -moz-box-shadow:
                    inset 0px -1px 0px #fff,
                    0px 1px 3px rgba(0,0,0,.08);
                box-shadow:
                    inset 0px -1px 0px #fff,
                    0px 1px 3px rgba(0,0,0,.08);

                -webkit-border-radius:4px 4px 0px 0px;
                -moz-border-radius:4px 4px 0px 0px;
                border-radius:4px 4px 0px 0px;

                font-size:14px;
                font-weight:bold;
                text-align:center;
                line-height:44px;

                color:#444444;
                text-shadow:0px 1px 0px #fff;
            }

            #content {
                width:360px;
                height:144px;

                background:#fcfcfc;

                -webkit-box-shadow:0px 1px 3px rgba(0,0,0,.25);
                -moz-box-shadow:0px 1px 3px rgba(0,0,0,.25);
                box-shadow:0px 1px 3px rgba(0,0,0,.25);

                -webkit-border-radius:0px 0px 4px 4px;
                -moz-border-radius:0px 0px 4px 4px;
                border-radius:0px 0px 4px 4px;
            }

            #content p {
                font-size:13px;
                font-weight:normal;
                text-align:center;
                line-height:22px;
                color:#555555;

                width:100%;
                float: left;

                margin:19px 0;
            }


            .button {
                width:138px;
                height:33px;

                font-size:13px;
                font-weight:bold;
                line-height:33px;

                color:#fff;
                text-shadow:0px 1px 0px rgba(0,0,0,.2);

                -webkit-border-radius:3px;
                -moz-border-radius:3px;
                border-radius:3px;

                -webkit-box-shadow:
                    inset 0px 1px 0px rgba(255,255,255,.5),
                    0px 1px 2px rgba(0,0,0,.3);
                -moz-box-shadow:
                    inset 0px 1px 0px rgba(255,255,255,.5),
                    0px 1px 2px rgba(0,0,0,.3);
                box-shadow:
                    inset 0px 1px 0px rgba(255,255,255,.5),
                    0px 1px 2px rgba(0,0,0,.3);

                float:left;
            }
            .button img { 
                float:left;
                width:33px;
                height:33px;
            }



            .button.green {
                background: -webkit-linear-gradient(top,  rgba(170,212,79,1) 0%,rgba(116,185,49,1) 90%,rgba(106,173,45,1) 95%,rgba(96,157,41,1) 100%);
                background: -moz-linear-gradient(top,  rgba(170,212,79,1) 0%,rgba(116,185,49,1) 90%,rgba(106,173,45,1) 95%,rgba(96,157,41,1) 100%);
                background: -o-linear-gradient(top,  rgba(170,212,79,1) 0%,rgba(116,185,49,1) 90%,rgba(106,173,45,1) 95%,rgba(96,157,41,1) 100%);
                background: -ms-linear-gradient(top,  rgba(170,212,79,1) 0%,rgba(116,185,49,1) 90%,rgba(106,173,45,1) 95%,rgba(96,157,41,1) 100%);
                background: linear-gradient(top,  rgba(170,212,79,1) 0%,rgba(116,185,49,1) 90%,rgba(106,173,45,1) 95%,rgba(96,157,41,1) 100%);
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#aad44f', endColorstr='#609d29',GradientType=0 );

                border:1px solid #5b8821;

                margin:0 5px 0 35px;
            }
            .button.red {
                background: -webkit-linear-gradient(top,  rgba(248,114,136,1) 0%,rgba(243,71,85,1) 90%,rgba(225,65,77,1) 95%,rgba(206,59,70,1) 100%);
                background: -moz-linear-gradient(top,  rgba(248,114,136,1) 0%,rgba(243,71,85,1) 90%,rgba(225,65,77,1) 95%,rgba(206,59,70,1) 100%);
                background: -o-linear-gradient(top,  rgba(248,114,136,1) 0%,rgba(243,71,85,1) 90%,rgba(225,65,77,1) 95%,rgba(206,59,70,1) 100%);
                background: -ms-linear-gradient(top,  rgba(248,114,136,1) 0%,rgba(243,71,85,1) 90%,rgba(225,65,77,1) 95%,rgba(206,59,70,1) 100%);
                background: linear-gradient(top,  rgba(248,114,136,1) 0%,rgba(243,71,85,1) 90%,rgba(225,65,77,1) 95%,rgba(206,59,70,1) 100%);
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f87288', endColorstr='#ce3b46',GradientType=0 );

                border:1px solid #b0333e;

                margin:0 35px 0 5px;
            }

            .reveal-modal-bg { 
                position: fixed; 
                height: 100%;
                width: 100%;
                background: #000;
                background: rgba(0,0,0,.4);
                z-index: 100;
                display: none;
                top: 0;
                left: 0; 
            }



            @media only screen and (max-width: 767px) {

                #modal {
                    width:284px;
                    height:156px;
                    padding:8px;

                    margin-left:-150px !important;
                    margin-top:-78px;
                }
                #heading {
                    width:284px;
                    height:28px;

                    line-height:28px;
                    font-size:0.688em;
                }
                #content {
                    width:284px;
                    height:128px;
                }
                #content p {
                    width:284px;
                    font-size:0.688em;
                }
                .button img { 
                    width:23px;
                    height:23px;
                }
                .button {
                    width:108px;
                    height:23px;

                    line-height:23px;
                    font-size:0.688em;
                }
                .button.green {
                    margin:0 4px 0 28px !important;
                }
                .button.red {
                    margin:0 28px 0 4px !important;
                }}

        </style>
        <link type="text/css" href="<?php echo base_url() ?>css/jquery-ui.css" rel="stylesheet">


            <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.js"></script> 
            <script type="text/javascript" src="<?php echo base_url() ?>js/jquery-ui.js"></script>
            <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.reveal.js"></script>
            <script type="text/javascript" src="<?php echo base_url() ?>js/rays.js"></script>
            <script type="text/javascript" src="<?php echo base_url() ?>js/util.js"></script>
            <script type="text/javascript" src="<?php echo base_url() ?>js/guestpage.js"></script>
            <script type="text/javascript" src="<?php echo base_url() ?>js/coin-slider.js"></script>
            <script src="<?php echo base_url() ?>SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
            <link rel="stylesheet" href="<?php echo base_url() ?>css/coin-slider-styles.css" type="text/css" />


            <link href="<?php echo base_url() ?>css/style.css" rel="stylesheet" type="text/css" />
            <link href="<?php echo base_url() ?>SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
    </head>
    <?php
    if ($this->session->userdata('memberid') != '') {
        redirect(base_url() . 'sys_admin/user_authorization/reloadwelcomepage');
    }
    log_message('info', 'The session id is ========>' . $this->session->userdata('session_id') . ' and the member id is =======>' . $this->session->userdata('memberid'));

    function display_hidden_fields($data_pos) {

        $hidden_fields = " <input type='hidden' id='count' value='" . $data_pos[0] . "'/>";
        return $hidden_fields;
    }

    function display_info($data_array, $data_pos) {
        $count = $data_pos[0];
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
            <div class="productboxcat_inner">
                <div class="productboxcat_inner_img">
                    <img src="<?php echo base_url() ?>images/<?php echo $default_image_name ?>" width="155" height="100" alt="indi remy" />
                </div>
                <div class="productboxcat_inner_text"><h3><?php echo word_trim($newsletter_title, 42, true) ?></h3>
                    <p><?php echo word_trim($newsletter_description, 347, true) ?></p>
                    <div class="productboxcat_inner_buy_btne">
                        <a class="buynowButton <?php echo $data_title; ?> <?php
                        if ($guestonly == 0) {
                            echo 'private-product';
                            $news_reference = '#' . $newsletter_id;
                        } else {
                            echo 'article_title';
                        }
                        ?>" id="<?php echo $newsletter_id ?>" href="<?php echo $news_reference ?>" onclick="return false;">Read more</a></div>
                </div>
                <div class="productboxcat_inner_author"><?php echo word_trim($author_name, 30, false) ?></div>
                <div class="productboxcat_inner_date"><?php echo $news_date ?></div>

            </div>


            <?php
            log_message('info', $guestonly . ' the guest only data>> AFTER >>>' . $news_reference);
        }
        $new_data_pos = array(
            '0' => $count);


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
    echo link_tag(base_url() . 'images/favicon.ico', 'shortcut icon', 'image/ico');
    ?>
    <body><input type="hidden" id="drugid" name="drugid" value="1"/>
        <input type="hidden" id="serverurl" name="serverurl" value="<?php echo base_url() ?>"/>
        <input type="hidden" id="empty_data" name="servempty_dataerurl" value="false"/>
        <div class="mainbody">
            <div class="topheader">
                <div class="topheader_inner">
                    <div class="logo"><img src="<?php echo base_url() ?>images/images/logo_03.jpg" width="206" height="39" alt="logo" /></div>


                    <div  id="nav">
                        <ul>
                            <li><a href="#" class="block_content guest_button">News & Articles</a></li>
                            <li><a href="#" class="guest_button" name="communitypharmacy">Internships</a></li>
                            <li><a href="#" class="guest_button" name="communitypharmacy"> Community Pharmacy</a></li>
                            <li><a href="#" class="guest_button" name="onlinepharmacy">Drug Reference</a></li>

                        </ul>
                    </div>





                    <div class="header-right">
                        <div class="header-register">
                            <div class="header-check-btn guest_button" name="login"><a class="checkout_button" href="#">Log in</a></div>
                        </div>
                        <div class="header-checkout">
                            <div class="header-check-btn guest_button" name="register"><a class="checkout_button" href="#">Register</a></div></div>
                    </div>


                </div>


            </div>

            <div class="container">

                <div class="internal_ad"><img src="<?php echo base_url() ?>images/images/ad_zenith.jpg" width="275" height="90" alt="zenith" />.....<img src="<?php echo base_url() ?>images/images/mtn_ad.jpg" width="728" height="90" alt="mtn" /></div>

                <div class="container">


                    <div class="breadcrum">Welcome</div>


                    <div class="topsearch">
                        <form id="form1" name="form1" method="post" action="">
                            <input name="search" type="text" id="search" placeholder="search Pharmarays" />
                            <input type="submit" name="topsubmit" id="topsubmit" value="Go" />
                        </form>
                    </div>

                </div>




                <div class="container">


                    <div class="topslide"><div id="games">

                            <a href="http://www.pharmarays.com" target="_blank">
                                <img src="<?php echo base_url() ?>images/images/slide1_07.jpg" alt="online drug references" /></a>

                            <a href="http://www.pharmarays.com" target="_blank">
                                <img src="<?php echo base_url() ?>images/images/slide2_07.jpg" alt="pharmaceutical forum" />
                            </a>

                            <a href="http://www.pharmarays.com/" target="_blank">
                                <img src="<?php echo base_url() ?>images/images/slide3_07.jpg" alt="latest news on drugs" />
                            </a>

                            <a href="http://www.pharmarays.com" target="_blank">
                                <img src="<?php echo base_url() ?>images/images/slide4_07.jpg" alt="search pharmaceutical store nearest to you" />
                            </a></div>
                        <script>
                            $('#games').coinslider();
                        </script>
                    </div>


                    <div class="toprightadvert"><img src="<?php echo base_url() ?>images/images/ad1_10.jpg" width="300" height="250" alt="advert" /></div>



                    <div class="toprightsocial"> <a href="www.facebook.com"><img src="<?php echo base_url() ?>images/images/fb_03.png" alt="facebook" width="31" height="28" /></a> <a href="www.twitter.com"><img src="<?php echo base_url() ?>images/images/tw_03.png" width="31" height="28" alt="twitter" /></a> <a href="www.youtube.com"><img src="<?php echo base_url() ?>images/images/youtubeicon_03.png" width="31" height="28" alt="youtube" /></a> <a href="www.rss.com"><img src="<?php echo base_url() ?>images/images/rss_03.png" width="31" height="28" alt="rss" /></a></div>
                </div>


                <div class="container">
                    <div class="a-z_section">
                        <div id="TabbedPanels1" class="TabbedPanels">
                            <ul class="TabbedPanelsTabGroup">
                                <li class="TabbedPanelsTab" tabindex="0">Drugs A- Z</li>
                                <li class="TabbedPanelsTab" tabindex="0">Conditions and Treatment</li>
                                <li class="TabbedPanelsTab" tabindex="0">Recent News</li>
                            </ul>
                            <div class="TabbedPanelsContentGroup">
                                <div class="TabbedPanelsContent">
                                    <div class="a-z">
                                        <p><strong>Looking for information on a particular treatment?</strong> More than 3000 products are listed in our<strong> database</strong>, including both prescription and over-the-counter medicines.</p>
                                        <ul>
                                            <li><a sl-processed="1" href="#">A</a></li>
                                            <li><a sl-processed="1" href="#">B</a></li>
                                            <li><a sl-processed="1" href="#">C</a></li>
                                            <li><a sl-processed="1" href="#">D</a></li>
                                            <li><a sl-processed="1" href="#">E</a></li>
                                            <li><a sl-processed="1" href="#">F</a></li>
                                            <li><a sl-processed="1" href="#">G</a></li>
                                            <li><a sl-processed="1" href="#">H</a></li>
                                            <li><a sl-processed="1" href="#">I</a></li>
                                            <li><a sl-processed="1" href="#">J</a></li>
                                            <li><a sl-processed="1" href="#">K</a></li>
                                            <li><a sl-processed="1" href="#">L</a></li>
                                            <li><a sl-processed="1" href="#">M</a></li>
                                            <li><a sl-processed="1" href="#">N</a></li>
                                            <li><a sl-processed="1" href="#">O</a></li>
                                            <li><a sl-processed="1" href="#">P</a></li>
                                            <li><a sl-processed="1" href="#">Q</a></li>
                                            <li><a sl-processed="1" href="#">R</a></li>
                                            <li><a sl-processed="1" href="#">S</a></li>
                                            <li><a sl-processed="1" href="#">T</a></li>
                                            <li><a sl-processed="1" href="#">U</a></li>
                                            <li><a sl-processed="1" href="#">V</a></li>
                                            <li><a sl-processed="1" href="#l">W</a></li>
                                            <li><a sl-processed="1" href="#">X</a></li>
                                            <li><a sl-processed="1" href="#">Y</a></li>
                                            <li><a sl-processed="1" href="#">Z</a></li>
                                        </ul>
                                        <div></div>
                                    </div>
                                </div>
                                <div class="TabbedPanelsContent"><div class="a-z">
                                        <p><strong>Information on a particular medicine?</strong> More than 3000 products are listed in our<strong> database</strong>, including both prescription and over-the-counter medicines.</p>
                                        <ul>
                                            <li><a sl-processed="1" href="#">A</a></li>
                                            <li><a sl-processed="1" href="#">B</a></li>
                                            <li><a sl-processed="1" href="#">C</a></li>
                                            <li><a sl-processed="1" href="#">D</a></li>
                                            <li><a sl-processed="1" href="#">E</a></li>
                                            <li><a sl-processed="1" href="#">F</a></li>
                                            <li><a sl-processed="1" href="#">G</a></li>
                                            <li><a sl-processed="1" href="#">H</a></li>
                                            <li><a sl-processed="1" href="#">I</a></li>
                                            <li><a sl-processed="1" href="#">J</a></li>
                                            <li><a sl-processed="1" href="#">K</a></li>
                                            <li><a sl-processed="1" href="#">L</a></li>
                                            <li><a sl-processed="1" href="#">M</a></li>
                                            <li><a sl-processed="1" href="#">N</a></li>
                                            <li><a sl-processed="1" href="#">O</a></li>
                                            <li><a sl-processed="1" href="#">P</a></li>
                                            <li><a sl-processed="1" href="#">Q</a></li>
                                            <li><a sl-processed="1" href="#">R</a></li>
                                            <li><a sl-processed="1" href="#">S</a></li>
                                            <li><a sl-processed="1" href="#">T</a></li>
                                            <li><a sl-processed="1" href="#">U</a></li>
                                            <li><a sl-processed="1" href="#">V</a></li>
                                            <li><a sl-processed="1" href="#l">W</a></li>
                                            <li><a sl-processed="1" href="#">X</a></li>
                                            <li><a sl-processed="1" href="#">Y</a></li>
                                            <li><a sl-processed="1" href="#">Z</a></li>
                                        </ul>
                                        <div></div>
                                    </div></div>
                                <div class="TabbedPanelsContent"><div class="a-z">
                                        <p><strong>Information on a particular medicine?</strong> More than 3000 products are listed in our<strong> database</strong>, including both prescription and over-the-counter medicines.</p><p><strong>Information on a particular medicine?</strong> More than 3000 products are listed in our<strong> database</strong>, including both prescription and over-the-counter medicines.</p>


                                    </div></div>
                            </div>
                        </div>
                    </div> 
                </div>

                <div class="container">


                    <div class="content">

                        <div class="healthtip_container">
                            <h3>Health Tips &amp; Updates</h3>
                            <div class="healthtip" id="healthtip_wrapper"><div id="healthtip" class="title_body">
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
                            <div id="modal">
                                <div id="heading">
                                    Not available to guests. Sign Up Now!
                                </div>

                                <div id="content">
                                    <p>Clicking yes will take you to the sign up screen.</p>

                                    <a href="<?php echo base_url() ?>sys_admin/user_authorization/index" class="button green close"><img src="<?php echo base_url() ?>images/tick.png">Yes, Sign Up</a>

                                    <a href="#" class="button red close"><img src="<?php echo base_url() ?>images/cross.png">No, Continue</a>
                                </div>
                            </div>
                            <div id="dialog-modal" title="Loading....">
                                <p></p> <div class="store-label"></div>
                                <div class="stats-block"></div>
                            </div>

                        </div>

                        <p><div id='articles_loading' style="display:none; float:right"><img src='<?php echo base_url() ?>images/loading_icon.gif' alt='loading'/> Loading</div></p>
                        


                        <div class="categories">
                            <h3>Categories</h3>
                            <div id="smalltextcontent2">
                                <h2>Community Pharmacy</h2>
                                <p>Online drug reference for student pharmacists, professionals    &gt;</p>
                            </div>




                            <div id="smalltextcontent2b">
                                <h2>Directory</h2>
                                <p>Search, find and locate health
                                    practitionaers nearest to you &gt;</p>
                            </div>



                            <div id="smalltextcontent2c">
                                <h2>News &amp; Articles</h2>
                                <p>Keep informed with latest news on <br />
                                    vital health matters &gt;</p>
                            </div>




                            <div id="smalltextcontent2d">
                                <h2>Discussion Forum</h2>
                                <p>Share knowledged amongs <br />
                                    professionals in the field &gt;</p>
                            </div>


                        </div>
                    </div>




                    <div class="sidebar">
                        <div class="newsletter">


                            <div class="newsletter_inner">
                                <p>Get your monthly health <br />
                                    tips and news updates </p>
                                
                                    <input name="newsubscriber" type="email" id="newsubscriber" placeholder="Enter your e-mail" size="27" />
                                    <input type="button" class="buynowButton newsletter_signup" name="submit" id="submit" value="SIGN UP" />

                                <p><div id='newsletter_loading' style="display:none"><img src='<?php echo base_url() ?>images/loading_icon.gif' alt='loading'/> Signing up</div></p>
                                <p><div id='newslettersub_msg'></div></p>
                            </div>
                        </div>
                        <a href="www.jobberman.com"><img src="<?php echo base_url() ?>images/images/career_23.jpg" alt="career" width="300" height="85" align="texttop" /></a>
                        <p>
                            <a href="www.jobberman.com"><img src="<?php echo base_url() ?>images/images/ad_goes_here_26.jpg" width="300" height="251" alt="advert" /></a>
                        </p>

                        <p>&nbsp;</p>


                    </div>




                </div>


            </div>


        </div>



        <div class="footer_top_inner">

            <div class="footersection_menu_inner">
                <h2>Pharmaceutical SOcieties &amp; Association</h2>
                <ul>
                    <li><a href="#">PSN</a></li>
                    <li><a href="#">ACPN</a></li>
                    <li><a href="#">NAHAP</a></li>
                    <li><a href="#">ACP</a></li>
                    <li>PAN</li>
                    <li><a href="#"><br />
                            MANUFACTURERS</a></li>
                </ul>

            </div>

            <div class="footersection_menu_inner">
                <h2>Navigation Links</h2>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>

            </div>


            <div class="footersection_menu_inner">
                <h2>Regulatory Bodies</h2>
                <ul>
                    <li>PCN</li>
                    <li>     NAFDAC</li>
                    <li>     NDLEA</li>
                </ul>

            </div>

            <div class="footersection_menu_inner">
                <h2>QUick links</h2>
                <ul>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Advertise</a></li>
                    <li></li>
                </ul>

            </div>


        </div>



        <div class="footer_inner">
            <div class="logo"><img src="<?php echo base_url() ?>images/images/logo_footer_37.jpg" width="194" height="61" alt="logo" /></div>








            <div class="header-right">

                <p>Copyright © Pharmarays 2014</p>
            </div>
        </div>
        </div>
        <script type="text/javascript">
            var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
        </script>
    </body>
</html>
