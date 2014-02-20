
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

    function display_internships($internships) {

        foreach ($internships as $columnName => $columnData) {
            ?>
            <div class="row-fluid" id="">
                <div class="span12">
                    <div class="internship-row">
                        <div><?php echo $columnData['firm'] ?></div>
                        <div><?php echo $columnData['location'] ?></div>
                        <div><?php echo $columnData['slots'] . ' Slots available (2 booked)' ?> </div>
                        <div><?php echo $columnData['duration'] ?> Months</div>
                        <div><?php echo $columnData['specialization'] ?> </div>
                        <div><input type="submit" value=" Apply " class="snazzy_button" id="loginUser" name="loginUser" /></div>

                    </div>
                    <div style="border-top: 1px solid #2F96B4; clear:both"></div>
                </div>
            </div>

            <?php
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
        ?><?php include 'banner.php' ?>
        <div id="maincontainer" style="position: relative;">
            <div class="newscategories" id="newsandevents">
                <div class="alert alert-info alert-login heading" style='z-index: 999;position:fixed;width: auto'>
                    <select id="location_select">
                        <option class="select_by_location" value="0">-Choose a firm-</option>
                        <?php
                        foreach ($locations as $columnName => $columnData) {
                            ?>
                            <option class="select_by_location" value="<?php echo $columnData['id'] ?>"><?php echo $columnData['name'] ?></option>
                            <?php
                        }
                        ?>
                    </select>
                    <select id="location_select">
                        <option class="select_by_location" value="0">-Choose a location-</option>
                        <?php
                        foreach ($locations as $columnName => $columnData) {
                            ?>
                            <option class="select_by_location" value="<?php echo $columnData['id'] ?>"><?php echo $columnData['name'] ?></option>
                            <?php
                        }
                        ?>
                    </select>
                    <select id="location_select">
                        <option class="select_by_location" value="0">-Choose a duration-</option>
                        <?php
                        foreach ($locations as $columnName => $columnData) {
                            ?>
                            <option class="select_by_location" value="<?php echo $columnData['id'] ?>"><?php echo $columnData['name'] ?></option>
                            <?php
                        }
                        ?>
                    </select>
                    <select id="location_select">
                        <option class="select_by_location" value="0">-Choose a specialization-</option>
                        <?php
                        foreach ($locations as $columnName => $columnData) {
                            ?>
                            <option class="select_by_location" value="<?php echo $columnData['id'] ?>"><?php echo $columnData['name'] ?></option>
                            <?php
                        }
                        ?>
                    </select>
                    <input type="submit" value=" Search " class="snazzy_button" style='margin-left: 20px' id="loginUser" name="loginUser" />
                    <br/>
                </div>

                <div class="commpharm row-fluid" style="position: relative; height: 100%; width: 100%;margin-bottom: 30px;margin-top:60px;">
                    <?php
                    display_internships($internships);
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