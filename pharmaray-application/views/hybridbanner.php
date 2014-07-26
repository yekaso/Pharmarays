<script type="text/javascript" src="<?php echo base_url() ?>js/guestpage.js"></script>
<?php include_once("googleanalytics.php") ?>
<?php include 'guestsessiondata.php' ?>

<?php
echo form_open('sys_admin/user_authorization/logout')
?>
<div id="globalheader_wrapper">
    <div id="globalheader"> 
        <?php echo img('images/pharmarays.png'); ?>
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
    <div id="otherpages">
         <input class="bordered guest_button" name="rays" type="button" value=" Home "/>
       <input class="bordered guest_button" name="signin"type="button" value=" Register "/>
        <input class="bordered guest_button" name="onlinepharmacy" type="button" value=" Online Pharmacy "/>
        <input class="bordered guest_button" name="communitypharmacy" type="button" value=" Community Pharmacy "/> 
    </div>
</div><?php echo form_close() ?>