<!DOCTYPE html>
<html>
    <?php
//    include('login.php');
    ?><script type="text/javascript" src="<?php echo base_url() ?>js/jquery.js"></script> 
    <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.nivo.slider.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.als-1.1.min.js"></script>

    <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider();


        });
        /* $(document).ready(function(){
         $("#demo3").als({
         visible_items: 4,
         scrolling_items: 2,
         orientation: "horizontal",
         circular: "yes",
         autoscroll: "yes",
         interval: 7000,
         direction:"right",
         
         });
         })*/
    </script>
    <link rel="stylesheet" href="<?php echo base_url() ?>themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url() ?>themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url() ?>themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url() ?>themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url() ?>css/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url() ?>css/listslider.css" type="text/css" media="screen" />
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Pharmaray</title>

    </head>
    <?php
    log_message('info', 'the form message==>' . form_error('fname'));
    if ($this->session->userdata('memberid') != '') {
        redirect(base_url() . 'sys_admin/user_authorization/reloadwelcomepage');
    }
    log_message('info', 'The session id is ========>' . $this->session->userdata('session_id') . ' and the member id is =======>' . $this->session->userdata('memberid'));
    $errorLogin = '';
    $fname_class = $this->session->flashdata('fname_class');
    $lname_class = $this->session->flashdata('lname_class');
    $emailaddress_class = $this->session->flashdata('emailaddress_class');
    $remailaddress_class = $this->session->flashdata('remailaddress_class');
    $password_class = $this->session->flashdata('password_class');
    $rpassword_class = $this->session->flashdata('rpassword_class');
    $message = $this->session->flashdata('message');
    log_message('info', 'after the retrieving session list.................' . $fname_class . '//' . $lname_class . '//' . $emailaddress_class . '//' . $remailaddress_class . '//' . $password_class . '//' . $rpassword_class);
    $css = '';
    $css .= link_tag(base_url() . "css/main.css");
    echo $css;
    echo link_tag(base_url() . 'images/favicon.ico', 'shortcut icon', 'image/ico');
    $day_options = array(
        '0' => 'Day',);
    $year_options = array(
        '0' => 'Year',);
    $options = array(
        '0' => 'Month',
        '1' => 'Jan',
        '2' => 'Feb',
        '3' => 'Mar',
        '4' => 'Apr',
        '5' => 'May',
        '6' => 'Jun',
        '7' => 'Jul',
        '8' => 'Aug',
        '9' => 'Sep',
        '10' => 'Oct',
        '11' => 'Nov',
        '12' => 'Dec',
    );
    ?>
    <body ><?php include 'guestbanner.php' ?>
        <div id="signintab">
            <?php echo form_open('sys_admin/user_authorization/loginauthorization') ?>
            <span><?php echo $message; ?></span>
            <input type="text" name="username" placeholder="Username or email">
            <input name="password" type="password" placeholder="Password">
            <input type="submit" value="Login" class="snazzy_button" id="loginUser" name="loginUser" />
            <input type="hidden" id="drugid" name="drugid" value="1"/>
            <input type="hidden" id="serverurl" name="serverurl" value="<?php echo base_url() ?>"/>

            <?php echo form_close() ?> </div>


    </div><div id="body_wrapper" class="hor_index_div">
        <div id="wrapper">
            <div class="slider-wrapper theme-default">
                <div id="slider" class="nivoSlider">
                    <img src="<?php echo base_url() ?>images/f.png" data-thumb="images/f.png" alt="" />
                    <img src="<?php echo base_url() ?>images/cp.png" data-thumb="<?php echo base_url() ?>images/cp.png" alt=""/></a>
                    <img src="<?php echo base_url() ?>images/n.png" data-thumb="<?php echo base_url() ?>images/n.png" alt="" />
                    <img src="<?php echo base_url() ?>images/dr.png" data-thumb="i<?php echo base_url() ?>images/dr.png" alt=""/>
                </div>
            </div>

        </div>

     
    </div>
    
</body>
</html>
<script type="text/javascript">

    $(function() {
        if ($.browser.msie && $.browser.version.substr(0, 1) < 7)
        {
            $('.tooltip').mouseover(function() {
                $(this).children('span').show();
            }).mouseout(function() {
                $(this).children('span').hide();
            })
        }
    });

</script>
