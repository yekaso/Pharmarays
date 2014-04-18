
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
    <script type="text/javascript" src="<?php echo base_url() ?>js/adminpagebrands.js"></script>

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
                    <li><input type="submit" value="Logout" class="snazzy_button" id="loginUser" name="loginUser" />
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
                                <h3 class="heading">Drug Brand</h3>
                                <div class="formSep">
                                    <div class="row-fluid">
                                        <div class="span4">
                                            <div class="editor-label">
                                                <label for="Name">Name of Drug Brand <span class="compulsory_field">*</span></label>
                                            </div>
                                            <div class="editor-field">
                                                <input id="brands_name" class="span12" type="text" value="" name="brands_name" data-val-required="The Name field is required." data-val="true"/>
                                                <span class="field-validation-valid" data-valmsg-replace="true" data-valmsg-for="Name"></span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row-fluid">
                                        <div class="span2">
                                            <div class="editor-label">
                                                <label for="ChurchEmail">Pharmaceutical Company<span class="compulsory_field">*</span></label>
                                            </div>
                                            <div class="editor-field">
                                                <select id="drugbrandid" class="span12" name="drugbrandid" data-val-required="The pharmaceutical company field is required." data-val="true">
                                                    <option value="0">Choose...</option>
                                                    <?php
                                                    $errors = array_filter($drugbrand);

                                                    if (!empty($errors)) {
                                                        foreach ($drugbrand as $columnName => $columnData) {
                                                            $name = $columnData['name'];
                                                            $id = $columnData['id_brandname'];
                                                            ?>
                                                            <option value="<?php echo $id; ?>"><?php echo strtolower(word_trim($name, 30, true)) ?></option>
                                                            <?php
                                                        }
                                                    }
                                                    ?>                                                        
                                                </select>
                                                <span class="field-validation-valid" data-valmsg-replace="true" data-valmsg-for="CountryID"></span>
                                            </div>
                                        </div>

                                    </div>
                                     <br/>
                                    <br/>
                                    <div class="row-fluid">
                                        <div>
                                            <div class="editor-label">
                                                <label for="Name">Drug Generics  <span class="compulsory_field">*</span></label>
                                            </div>
                                            <div class="div_druggenerics">
                                                <?php
                                                $errors = array_filter($druggenerics);
                                                $drug_generics_display = '';
                                                if (!empty($errors)) {
                                                    $count = 0;

                                                    foreach ($druggenerics as $columnName => $columnData) {
                                                        $count++;
                                                        if ($count > 4) {
                                                            $count = 1;
                                                        }
                                                        if ($count == 1) {
                                                            $drug_generics_display .= '<div style="clear:both;">';
                                                        } else if ($count == 4) {
                                                            $drug_generics_display .= '</div>';
                                                        }
                                                        $drug_generics_display .= '<div class="druggenerics span2" style="float:left;">'
                                                                . $columnData['drug_name'] . '<input id="guestonly" class="" type="checkbox" name="guestonly" value="' . $id = $columnData['id_drug'] . '" /></div>';
                                                        $name = $columnData['drug_name'];
                                                        ;
                                                    }
                                                    echo $drug_generics_display;
                                                }
                                                ?>  
                                            </div>
                                        </div>
                                    </div>
<br/>
<br/>
                                    <div class="row-fluid">
                                        <div class="span8">
                                            <div class="editor-label">
                                                <label for="Address">Description of Brand  </label>
                                            </div>
                                            <div class="editor-field">
                                                <textarea id="brands_description" class="span12" type="text" value="" name="brands_description"></textarea>
                                                <span class="field-validation-valid" data-valmsg-replace="true" data-valmsg-for="Address"></span>
                                            </div>
                                        </div>

                                    </div>
                                   
                                    <br/>
                                </div>

                            </div>
                            <div class=" adminpage">
                                <img src="<?php echo base_url() ?>images/tick.png" class="saved_icon">
                                    <span class="saved_icon">Saved Brand Name...</span>
                                    <img src="<?php echo base_url() ?>images/loading2.gif" class="saving_icon"/>
                                    <span class="saving_icon">Saving Brand Name...</span>
                                    <a class="register submit" href="#" name="createcomment"> Save Brand Name </a> 
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>