<!DOCTYPE html>
<html>
    <?php
//    include('login.php');
    ?>    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Pharmaray</title>

    </head>
    <?php
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

    $newsletter_id = $retrieved_news['id'];
    $newsletter_title = $retrieved_news['title'];
    $newsletter_description = $retrieved_news['description'];
    $author_name = $retrieved_news['author_name'];
    $news_date = $retrieved_news['time_created'];
    ?>
    <body >
        <div id="globalheader_wrapper">
            <div id="globalheader"> 
                <?php echo img('images/pharmarays.png'); ?>


            </div>
            <div id="globalheadersocial">   <ul>
                    <li>
                        <?php
                        echo anchor("http://www.facebook.com", img('images/icon-facebook.png'), array("target" => "_blank")), " ",
                        anchor("https://twitter.com/Pharmarays", img('images/icon-twitter.png'), array("target" => "_blank")), " ",
                        anchor("http://plus.google.com", img('images/icon-google.png'), array("target" => "_blank")), " ",
                        anchor("#", img('images/icon-rss.png'), array("target" => "_blank"));
                        ?>
                    </li>
                </ul></div><?php echo form_open('sys_admin/user_authorization/redirecttorays') ?>
            <div id="otherpages">
                <input class="bordered" type="submit" value=" Rays "/>
            </div><?php echo form_close() ?><?php
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
                <div class="product-tiles masonry title_body" style="position: relative; height: 100%; width: 84%;">

                    <div class="mason-tile product masonry-brick" id="<?php echo $newsletter_id ?>" style="position: absolute; top: 0px; left: 0px;">
                        <h1 class="title">
                            <?php echo $newsletter_title ?>
                            <div style="float:left; margin-right: 50px;"><img style="width:200px; height:200.0px margin-top:40px;margin-left: 40px" src="<?php echo base_url(); ?>images/back2.jpg"></div>
                            <span>

                                <div style="margin:40px;text-align: justify;">
                                    <small><?php echo $newsletter_description ?></small>
                                </div>
                            </span>
                        </h1>                        
                        <div class="store-label"><?php echo $author_name ?></div>
                        <div class="stats-block"><?php echo $news_date ?></div>
                        <br/><br/>
                    </div>

                </div>
            </div>


        </div>
        <div class="container footer hidden-phone smoke-white">
            <div class="footer-info pull-left">
                <span>&copy; 2013 Pharmarays</span>
                <a href="#" >About Us</a>
                <a href="#">Contact Us</a>
                <a href="#" >Terms & Conditions</a>

            </div>
        </div>

    </body>
</html>
<script type="text/javascript">

</script>
