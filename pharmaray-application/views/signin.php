<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Pharmarays Registration Page</title>
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
        </style>
        <link type="text/css" href="<?php echo base_url() ?>css/jquery-ui.css" rel="stylesheet">


            <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.js"></script> 
            <script type="text/javascript" src="<?php echo base_url() ?>js/jquery-ui.js"></script>
            <script type="text/javascript" src="<?php echo base_url() ?>js/coin-slider.js"></script>
            <script type="text/javascript" src="<?php echo base_url() ?>js/guestpage.js"></script>
            <link rel="stylesheet" href="<?php echo base_url() ?>css/coin-slider-styles.css" type="text/css" />


            <link href="<?php echo base_url() ?>css/style.css" rel="stylesheet" type="text/css" />
            <link href="<?php echo base_url() ?>css/form.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <input type="hidden" id="serverurl" name="serverurl" value="<?php echo base_url() ?>"/>
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


                <div class="container">


                    <div class="register_topslide"><img src="<?php echo base_url() ?>images/images/signup_03.jpg" width="570" height="329" alt="sign up" /><img src="<?php echo base_url() ?>images/images/stethoscope.jpg" width="474" height="323" alt="stethoscope" /></div>


                    <div class="register_topright_form">
                        <div  class="form">
                            <?php echo form_open('sys_admin/user_authorization/register_member') ?>
                            <p class="contact"><label for="fname">First Name</label></p> 
                            <input id="fname" name="fname" placeholder="First name" required="" tabindex="1" type="text" value="<?php echo $this->session->flashdata('fname_member'); ?>"/> 


                            <p class="contact"><label for="lname">Last Name</label></p> 
                            <input id="lname" name="lname" placeholder="Last name" required="" tabindex="1" type="text" value="<?php echo $this->session->flashdata('lname_member'); ?>"/> 

                            <p class="contact"><label for="email">Email</label></p> 
                            <input id="email" name="email" placeholder="Enter Email Address (example@domain.com)" required="" type="email" value="<?php echo $this->session->flashdata('email_member'); ?>"/> 

                            <p class="contact"><label for="reemail">Re-enter Email</label></p> 
                            <input id="reemail" name="reemail" placeholder="Re-enter Email Address (example@domain.com)" required="" type="email" value="<?php echo $this->session->flashdata('reemail_member'); ?>"/> 

                            <p class="contact"><label for="password">Create a password</label></p> 
                            <input name="password" type="password" placeholder="New Password" id="password" required=""/> 
                            <p class="contact"><label for="repassword">Confirm your password</label></p> 
                            <input name="newpassword" type="password" placeholder="Re-enter Password" id="repassword" required=""/> 
                            <fieldset>
                                <label>Birthday</label>
                                       <?php
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
                            </fieldset>
                            <p></p>
                            <fieldset>
                                <input <?php echo $this->session->flashdata('sex_member') == 0 ? 'checked="checked"' : '' ?> type="radio" name="sex" value="0"/><label>Male</label>
                                <input  <?php echo $this->session->flashdata('sex_member') == 1 ? 'checked="checked"' : '' ?> type="radio" name="sex" value="1"/><label>Female</label>
                            </fieldset>
                            <br/>

                               <input class="buttom" name="submit" id="submit" tabindex="5" value="Register" type="submit"/><span>Notifican <?php echo $this->session->flashdata('registration_msg'); ?>	 </span>
                                <?php echo form_close() ?> 
                        </div>
                    </div>
                </div>


                <div class="container">
                    <div class="a-z_section"> </div> 
                </div>




            </div>


        </div>




        <div class="footer_inner">
            <div class="logo"><img src="<?php echo base_url() ?>images/images/logo_footer_37.jpg" width="194" height="61" alt="logo" /></div>








            <div class="header-right">

                <p>Copyright © Pharmarays 2014</p>
            </div>
        </div>
        </div>
    </body>
</html>
