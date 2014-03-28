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

        <div id="signup">
            <?php echo form_open('sys_admin/user_authorization/register_member') ?>
            <h1>Sign Up</h1>

            <div class="signup_div">
                <div class="<?php echo $this->session->flashdata('fname_tooltip'); ?> wrapdivleft">
                    <input  type="text" class="fields shortfield signuprow field-validation <?php echo $fname_class ?>" value="<?php echo $this->session->flashdata('fname_member'); ?>" name="fname" placeholder="First Name"/>
                    <span><?php echo $this->session->flashdata('fname'); ?></span>
                </div> 
                <div class="<?php echo $this->session->flashdata('lname_tooltip'); ?> wrapdivright">
                    <input type="text" class="fields shortfield signuprow field-validation <?php echo $lname_class ?>" value="<?php echo $this->session->flashdata('lname_member'); ?>" name="lname" placeholder="Last Name"/>
                    <span><?php echo $this->session->flashdata('lname'); ?></span>
                </div>
            </div>
            <div class="signup_div">
                <div class="wrapdivfull <?php echo $this->session->flashdata('email_tooltip'); ?>"> 
                    <input class="emailfield fields signuprow field-validation <?php echo $emailaddress_class ?>" type="text" value="<?php echo $this->session->flashdata('email_member'); ?>" name="email" placeholder="Enter Email Address"/>
                    <span><?php echo $this->session->flashdata('email'); ?></span>
                </div>
            </div>
            <div class="signup_div">
                <div class="wrapdivfull <?php echo $this->session->flashdata('reemail_tooltip'); ?>">
                    <input class="emailfield fields signuprow field-validation <?php echo $remailaddress_class ?>"type="text" value="<?php echo $this->session->flashdata('reemail_member'); ?>" name="reemail" id="reemail" placeholder="Re-enter Email Address"/>
                    <span><?php echo $this->session->flashdata('reemail'); ?></span>
                </div>
            </div>
            <div class="signup_div">
                <div class="<?php echo $this->session->flashdata('password_tooltip'); ?> wrapdivleft">
                    <input class="fields shortfield signuprow field-validation <?php echo $password_class ?>" name="password" type="password" placeholder="New Password"/>
                    <span><?php echo $this->session->flashdata('password'); ?></span>
                </div> 
                <div class="<?php echo $this->session->flashdata('repassword_tooltip'); ?> wrapdivright"> 
                    <input class="fields shortfield signuprow field-validation <?php echo $rpassword_class ?>" name="newpassword" type="password" placeholder="Re-enter Password"/>
                    <span><?php echo $this->session->flashdata('repassword'); ?></span>
                </div> 
            </div>
            <div class="signup_div">
                <div class="wrapdivfull">
                    <input class="fields signuprow homeradio" <?php echo $this->session->flashdata('sex_member') == 0 ? 'checked="checked"' : '' ?> type="radio" name="sex" value="0"/>Male
                    <input class="fields signuprow homeradio" <?php echo $this->session->flashdata('sex_member') == 1 ? 'checked="checked"' : '' ?> type="radio" name="sex" value="1"/>Female
                </div>
            </div>
            <div class="signuprow selectdob signup_div" >
                <div class="field-validation <?php echo $this->session->flashdata('dob_class'); ?> <?php echo $this->session->flashdata('dob_tooltip'); ?> wrapdivleft"> Birthday &nbsp; &nbsp; &nbsp;<?php
                    $count = 1;
                    while ($count <= 31) {
                        $day_options[$count] = $count;
                        $count++;
                    }
                    $selected_day_field = ($this->session->flashdata('days')) ? $this->session->flashdata('days') : '0';
                    echo form_dropdown("days", $day_options, $selected_day_field, 'class="fields"')
                    ?>

                    <?php
                    $selected_field = ($this->session->flashdata('months')) ? $this->session->flashdata('months') : '0';
                    echo form_dropdown("months", $options, $selected_field, 'class="fields"')
                    ?>
                    <?php
                    $count = 1900;
                    $year_limit = 18;
                    while ($count <= (date("Y") - $year_limit)) {
                        $year_options[$count] = $count;
                        $count++;
                    } $selected_year_field = ($this->session->flashdata('years')) ? $this->session->flashdata('years') : '0';
                    echo form_dropdown("years", $year_options, $selected_year_field, 'class="fields"')
                    ?>
                    <span><?php echo $this->session->flashdata('dob'); ?></span>
                </div>
            </div>
            <div class="signup_div">
                <div class="register-field-validation wrapdivfull register-field-button <?php echo $this->session->flashdata('registerbutton_tooltip'); ?> <?php echo $this->session->flashdata('registration_class'); ?>">
                    <input  type="submit" id="reg_member" name="reg_member" class="register"  value="Register" />
                    <span><?php echo $this->session->flashdata('registration_msg'); ?></span>
                </div>

            </div>
            <input type="hidden" id="drugid" name="drugid" value="1"/>
            <?php echo form_close() ?>

        </div>
    </div>
    <!--  <div class="als-container hor_index_div" id="demo3">
          <span class="als-prev"><img src="<?php /* echo base_url() ?>images/thin_left_arrow_333.png" alt="prev" title="previous" /></span>
              <div class="als-viewport">
              <ul class="als-wrapper">
              <li class="als-item"><img src="<?php echo base_url() ?>images/logos/dana.jpg" alt="Dana" title="Dana" />Dana</li>
              <li class="als-item"><img src="<?php echo base_url() ?>images/logos/emzor.png" alt="Emzor" title="Emzor" />Emzor</li>
              <li class="als-item"><img src="<?php echo base_url() ?>images/logos/evans.jpg" alt="Evans" title="Evans" />Evans</li>
              <li class="als-item"><img src="<?php echo base_url() ?>images/logos/fidson.jpg" alt="Fidson" title="Fidson" />Fidson</li>
              <li class="als-item"><img src="<?php echo base_url() ?>images/logos/mayandbaker.png" alt="May & Baker" title="May & Baker" />May & Baker</li>
              <li class="als-item"><img src="<?php echo base_url() ?>images/logos/mega.png" alt="Mega Pharm" title="Mega Pharm" />Mega Pharm</li>
              <li class="als-item"><img src="<?php echo base_url() ?>images/logos/morison.jpg" alt="Morison" title="Morison" />Morison</li>
              <li class="als-item"><img src="<?php echo base_url() ?>images/logos/neimeth.png" alt="Neimeth" title="Neimeth" />Neimeth</li>
              <li class="als-item"><img src="<?php echo base_url() ?>images/logos/npl.bmp" alt="N P L" title="N P L" />N P L</li>
              <li class="als-item"><img src="<?php echo base_url() ?>images/logos/odl.jpg" alt="Orange Drugs" title="Orange Drugs" />Orange Drugs</li>
              <li class="als-item"><img src="<?php echo base_url() ?>images/logos/snl.jpg" alt="S N L" title="S N L" />S N L</li>
              <li class="als-item"><img src="<?php echo base_url() ?>images/logos/swipha.gif" alt="Swipha" title="Swipha" />Swipha</li>
              <li class="als-item"><img src="<?php echo base_url() ?>images/logos/yemkem.jpg" alt="Yem Kem" title="Yem Kem" />Yem Kem</li>
              </ul>
              </div>
              <span class="als-next"><img src="<?php echo base_url() */ ?>images/thin_right_arrow_333.png" alt="next" title="next" /></span>
      </div> -->
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
