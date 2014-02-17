<?php include_once("googleanalytics.php") ?>
<?php include 'sessiondata.php' ?>
<?php
echo form_open('sys_admin/user_authorization/logout')
?>
<div id="globalheader_wrapper">
    <div id="globalheader"> 
        <?php echo img('images/pharmarays.png'); ?><ul>
            <li><a  target="_top" href="<?php echo base_url() ?>sys_admin/user_authorization/articleslist"> Home </a></li>
            <li><a  target="_top" href="<?php echo base_url() ?>sys_admin/user_authorization/reloadwelcomepage"> Online Pharmacy </a></li>
            <li><a  target="_top" href="<?php echo base_url() ?>sys_admin/user_authorization/discussionforum"> Forum </a></li>
            <li><a  target="_top" href="<?php echo base_url() ?>sys_admin/user_authorization/communitypharmacy"> Community Pharmacy</a></li>
            <li><a  target="_top" href="<?php echo base_url() ?>sys_admin/user_authorization/redirect_to_internship"> Internship Placement </a></li>
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