
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <?php

    function display_hidden_fields($data_pos) {

        $hidden_fields = "<input type='hidden' id='vertical_pos' value='100'/>"
                . " <input type='hidden' id='horizontal_pos' value='70'/>";
        return $hidden_fields;
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

    function display_community_pharmacy($community_pharmacy) {
        $vertical_pos = 0;
        $horizontal_pos = 0;

        foreach ($community_pharmacy as $columnName => $columnData) {
            ?>
            <a class="pharm-swatch" style="position:absolute; <?php echo 'top: ' . $vertical_pos . 'px; left: ' . $horizontal_pos . 'px; ' ?>" target="_top" href="<?php echo base_url() ?>sys_admin/user_authorization/redirect_to_displaypharm?pharmacyid=<?php echo $columnData['id'] ?> " id="<?php echo $columnData['id'] ?>">
                <div>
                    <div class="pharm_name"><?php echo word_trim($columnData['name'], 30, true) ?></div>
                    <br/>
                    <div class="contact_details"><img src="<?php echo base_url() ?>images/telephone.png"/><?php echo ' ' . word_trim($columnData['telephone'], 40, true) ?></div>
                    <div class="contact_details"><img src="<?php echo base_url() ?>images/icon_home.gif"/><?php echo ' ' . word_trim($columnData['address'], 40, true) ?></div>
                    <div class="contact_details"><img src="<?php echo base_url() ?>images/icon_mail.gif"/>&nbsp;info@pharmarays.com</div>
                </div>
            </a>
            <?php
            if ($horizontal_pos >= 900) {
                $vertical_pos += 130;
                $horizontal_pos = 0;
            } else {
                $horizontal_pos += 300;
            }
        }
    }

    $options = array(
        '0' => '-Choose a location-',
        '1' => 'Anambra',
        '2' => 'Abuja',
        '3' => 'Enugu',
        '4' => 'Lagos',
    );
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
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="content-type">
            <title>Pharmaray User</title>
    </head> 
    <body><input type="hidden" id="serverurl" name="serverurl" value="<?php echo base_url() ?>"/>
        <?php
        $data_pos = array(
            '0' => 0, '1' => 0);
        echo display_hidden_fields($data_pos);
        ?><?php include 'hybridbanner.php' ?>
        <div id="maincontainer" style="position: relative;">
            <div class="newscategories" id="newsandevents">
                <div class="alert alert-info alert-login heading">
                    Community Pharmacy...<br/>
                </div>
                <div id="search_div">
                    <input type="hidden" name="id-holder" id="id-holder"/> 
                    <input type="hidden" id="empty_data" name="servempty_dataerurl" value="false"/>

                    <input class="searchbox" id="inputBox" placeholder="Search for a pharmacy closest to you by their name" type="text" value="" name="Name" data-val-required="The Search field is required." data-val="true"/>
                    
                </div>
                <div id="location_div"><select id="country_select">
                        <option id="select_by_location" value="0">-Choose a Country-</option>
                        <?php
                        foreach ($locations as $columnName => $columnData) {
                            ?>
                            <option id="select_by_location" value="<?php echo $columnData['id'] ?>"><?php echo $columnData['name'] ?></option>
                            <?php
                        }
                        ?>
                    </select><select id="state_select">
                        <option class="select_by_location" value="0">-Choose a State-</option>
                           </select><select id="location_select">
                        <option class="select_by_location" value="0">-Choose a location-</option>
                        </select></div>
                <div class="commpharm row-fluid" style="position: relative; height: 100%; width: 100%;margin-bottom: 30px;">
                    <?php
                    display_community_pharmacy($community_pharmacy);
                    ?>


                </div>


            </div> 

        </div>
        <div class="container footer">
            <div class="footer-info pull-left">  
                <div id="ias_trigger" class="ias_trigger" style="">
                    <a href="#ias_trigger" onclick="return false;">
                        Load more items
                    </a>
                </div>
                <div class="ias_loader">
                    <div id="loader" style="margin-left:40%"><img src='<?php echo base_url() ?>images/loading_icon.gif' alt='loading' style="display:none"/>
                    </div>                
                </div>

            </div>
        </div>

        <div id="dialog-modal" title="Loading....">
            <p></p><div class="flash" id="mapframe">

            </div>

            <div class='loadingmap'></div>
        </div>
    </body>
</html>