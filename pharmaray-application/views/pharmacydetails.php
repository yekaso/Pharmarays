
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <?php
    $css = '';
    $css .= link_tag(base_url() . "css/userpage.css");
    $autoSuggestCss = '';
    $autoSuggestCss .= link_tag(base_url() . "css/autoSuggest.css");
    echo $css;
    echo $autoSuggestCss;
    echo link_tag(base_url() . 'images/favicon.ico', 'shortcut icon', 'image/ico');
    ?>
    <link type="text/css" href="<?php echo base_url() ?>css/jquery-ui.css" rel="stylesheet">
    </link>
    <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>js/jquery-ui.js"></script>       
    <script type="text/javascript" src="<?php echo base_url() ?>js/communitypharmacy.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.blockUI.js"></script>
    <?php echo $map_javascript ?>
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="content-type">
            <title>Pharmaray User</title>
    </head> 
    <body><input type="hidden" id="serverurl" name="serverurl" value="<?php echo base_url() ?>"/>
        <input type="hidden" id="pharmacyid" name="pharmacyid" value="<?php echo $pharmacyData['id'] ?>"/>
        <input type="hidden" id="memberid" name="memberid" value="<?php echo $memberid; ?>"/>
        <?php include 'banner.php' ?>
        <div id="maincontainer" style="position: relative;">
            <div class="newscategories" id="newsandevents">
                  <div class="pharmacy_details">
                    <div>
                        <div class="pharm_name"><?php echo $pharmacyData['name'] ?></div>
                        <br/>
                        <div class="pharm_details"><img src="<?php echo base_url() ?>images/telephone.png"/><?php echo ' ' . $pharmacyData['telephone'] ?></div>
                        <div class="pharm_details"><img src="<?php echo base_url() ?>images/icon_home.gif"/><?php echo ' ' . $pharmacyData['address'] ?></div>
                        <div class="pharm_details"><img src="<?php echo base_url() ?>images/icon_mail.gif"/>&nbsp;info@pharmarays.com</div>
                    </div>
                </div>
                <?php echo $map_display ?>
            </div> 

        </div>

    </body>
</html>