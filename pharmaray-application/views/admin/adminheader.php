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