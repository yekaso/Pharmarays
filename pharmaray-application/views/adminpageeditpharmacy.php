
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
    echo $css;
    echo link_tag(base_url() . 'images/favicon.ico', 'shortcut icon', 'image/ico');
    ?>

    <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.js"></script> 
    <script type="text/javascript" src="<?php echo base_url() ?>js/adminpageeditpharmacy.js"></script>

    <head>
        <meta content="text/html; charset=utf-8" http-equiv="content-type">
            <title>Pharmaray User</title>
    </head> 
    <body> <?php
        echo form_open('sys_admin/user_authorization/logout')
        ?>
        <div id="globalheader_wrapper">
            <div id="globalheader"> 
                <?php echo img('images/pharmarays.png'); ?><ul>
                  <!--  <li><a  target="_top" href="<?php echo base_url() ?>sys_admin/user_authorization/reloadwelcomepage"> Manage Articles </a></li>
                    <li><a  target="_top" href="<?php echo base_url() ?>sys_admin/user_authorization/articleslist"> Manage Drugs </a></li>
                    <li><a  target="_top" href="<?php echo base_url() ?>sys_admin/user_authorization/discussionforum"> Manage Forums </a></li>
                    <li><a  target="_top" href="<?php echo base_url() ?>sys_admin/user_authorization/communitypharmacy"> Manage Pharmacy </a></li>
                    --> <li><input type="submit" value="Logout" class="snazzy_button" id="loginUser" name="loginUser" />
                    </li></ul>

            </div>
            <div id="globalheadersocial"> 
                <ul>
                    <li>
                        <?php
                        echo anchor("http://www.facebook.com", img('images/icon-facebook.png'), array("target" => "_blank")), " ",
                        anchor("http://twitter.com", img('images/icon-twitter.png'), array("target" => "_blank")), " ",
                        anchor("http://plus.google.com", img('images/icon-google.png'), array("target" => "_blank")), " ",
                        anchor("#", img('images/icon-rss.png'), array("target" => "_blank"));
                        ?>
                    </li>
                </ul></div>
        </div><?php echo form_close() ?>
        <div id="maincontainer">
            <input type="hidden" id="serverurl" name="serverurl" value="<?php echo base_url() ?>"/>
         

            <div id="contentwrapper">
                <?php include 'adminnavpane.php'; ?>
                <div class="main_content">
                    <div class="row-fluid">
                        <form method="post" id="masterdata_form">
                            <div class="span12">
                                <h3 class="heading">Edit Pharmacy Outlets</h3>
                                <div class="formSep">
                                    <div class="row-fluid">
                                        <div class="span4">
                                            <div class="editor-label">
                                                <label for="Name">Name of Pharmacy <span class="compulsory_field">*</span></label>
                                            </div>
                                            <div class="editor-field">
                                                <input id="pharmacy_name" class="span12" type="text" value="" name="pharmacy_name" data-val-required="The Name field is required." data-val="true"/>
                                                <span class="field-validation-valid" data-valmsg-replace="true" data-valmsg-for="Name"></span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row-fluid">
                                        <div class="span8">
                                            <div class="editor-label">
                                                <label for="Address">Address of Pharmacy  <span class="compulsory_field">*</span></label>
                                            </div>
                                            <div class="editor-field">
                                                <textarea id="pharmacy_address" class="span12" type="text" value="" name="pharmacy_address"></textarea>
                                                <span class="field-validation-valid" data-valmsg-replace="true" data-valmsg-for="Address"></span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row-fluid">
                                        <div class="span4">
                                            <div class="editor-label">
                                                <label for="ChurchEmail">Location of Pharmacy  <span class="compulsory_field">*</span></label>
                                            </div>
                                            <div class="editor-field">
                                                <select id="country_select">
                            <option value="0">-Choose a Country-</option>
                            <?php
                            $errors = array_filter($locations);

                                                    if (!empty($errors)) {
                            foreach ($locations as $columnName => $columnData) {
                                ?>
                                <option value="<?php echo $columnData['id'] ?>"><?php echo $columnData['name'] ?></option>
                                <?php
                            }
                                                    }
                            ?>
                        </select>
                        <img src="<?php echo base_url() ?>images/loading2.gif" id="state_select_loading" class="flash"/>

                        <select id="state_select">
                            <option value="0">-Choose a State-</option>
                        </select>
                        <img src="<?php echo base_url() ?>images/loading2.gif" id="location_select_loading" class="flash"/>
                        <select id="location_select">
                            <option value="-1">-Choose a Location-</option>
                        </select>
                                                
                                                <span class="field-validation-valid" data-valmsg-replace="true" data-valmsg-for="CountryID"></span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row-fluid">
                                        <div class="span4">
                                            <div class="editor-label">
                                                <label for="Name">Telephone / Mobile</label>
                                            </div>
                                            <div class="editor-field">
                                                <input id="pharmacy_telephone" class="span12" type="text" value="" name="pharmacy_telephone" data-val-required="The Name field is required." data-val="true"/>
                                                <span class="field-validation-valid" data-valmsg-replace="true" data-valmsg-for="Name"></span>
                                            </div>
                                        </div>

                                    </div>
                                    
                                    <br/>
                                    Table here....
                                </div>

                            </div>
                            <div class=" adminpage">
                                <img src="<?php echo base_url() ?>images/tick.png" class="saved_icon">
                                    <span class="saved_icon">Saved Pharmacy...</span>
                                    <img src="<?php echo base_url() ?>images/loading2.gif" class="saving_icon"/>
                                    <span class="saving_icon">Saving Pharmacy...</span>
                                    <a class="register submit" href="#" name="createcomment"> Save Pharmacy </a> 
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>