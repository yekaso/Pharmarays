   <script type="text/javascript" src="<?php echo base_url() ?>js/adminpage.js"></script>

    <div id="maincontainer">
            <input type="hidden" id="serverurl" name="serverurl" value="<?php echo base_url() ?>"/>
            <input type="hidden" id="memberid" name="memberid" value="<?php echo $memberid; ?>"/>
<?php 
if(is_array($article_detail)){
$art_id  = $article_detail['id_article'];
$art_title = $article_detail['title'];
$art_descp = $article_detail['description'];
$art_category = $article_detail['name'];
$art_author = $article_detail['author'];
$art_imageName = $article_detail['defaultimage'];
$art_guestOnly = $article_detail['guestonly'];
if(isset($art_imageName)){
    $img_props =array(
        'src' => '/uploads/'.$art_imageName,
        'width' => '150',
        'height' => '150'
    );
}else{
    $img_props =array(
        'src' => '/uploads/placeholder.jpg',
        'width' => '150',
        'height' => '150'
        );
    }
}
?>

            <div id="contentwrapper">
                <?php include 'adminnavpane.php'; ?>
                <div class="main_content">
                    <div class="row-fluid">
                        <form method="post" id="masterdata_form">
                            <div class="span12"><br/>
                                <?php echo  anchor('admin/adminpharm/redirect_to_managearticles/'."0","&laquo &laquo Article List ","style='color:black';text-decoration:underline;");?>
                                <h3 class="heading">News Article:</h3>
                                <div class="formSep">
                                    <div class="row-fluid">
                                        <div class="span4">
                                            <div class="editor-label">
                                                <label for="Name">Title:</label>
                                            </div>
                                            <div class="editor-field">
                                                <p><?php echo isset($art_title)?$art_title:""; ?></p>
                                                <span class="field-validation-valid" data-valmsg-replace="true" data-valmsg-for="Name"></span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row-fluid">
                                        <div class="span8">
                                            <div class="editor-label">
                                                <label for="Address">Description:</label>
                                            </div>
                                            <div class="editor-field">
                                                <fieldset>
                                                <p style="width: 900px;"><?php echo isset($art_descp)?$art_descp:""; ?>    
                                                </p></fieldset>
                                                <span class="field-validation-valid" data-valmsg-replace="true" data-valmsg-for="Address"></span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row-fluid">
                                        <div class="span4">
                                            <div class="editor-label">
                                                <label for="ChurchEmail">Drug Category:</label>
                                            </div>
                                            <div class="editor-field">
                                                <p><?php echo isset($art_category)?$art_category:""; ?></p>
                                                <span class="field-validation-valid" data-valmsg-replace="true" data-valmsg-for="CountryID"></span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row-fluid">
                                        <div class="span4">
                                            <div class="editor-label">
                                                <label for="Name">Author:</label>
                                            </div>
                                            <div class="editor-field">
                                                <p><?php echo isset($art_author)?$art_author:" Not Available"; ?></p> 
                                                <span class="field-validation-valid" data-valmsg-replace="true" data-valmsg-for="Name"></span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row-fluid">
                                        <div class="span4">
                                            <div class="editor-label">
                                                <label for="Name">Image:</label>
                                            </div>
                                            <div class="editor-field">
                                                 <?php echo isset($art_imageName)?img($img_props):img($img_props); ?>
                                                <span class="field-validation-valid" data-valmsg-replace="true" data-valmsg-for="Name"></span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row-fluid">
                                        <div class="span4">
                                            <div class="editor-label">
                                                <label for="Name">Available For Guests:</label>
                                            </div>
                                            <div class="editor-field">
                                                <p><?php echo ($art_guestOnly == 1)?"YES":"NO"?></p>
                                                <span class="field-validation-valid" data-valmsg-replace="true" data-valmsg-for="Name"></span>
                                            </div>
                                        </div>

                                    </div>
                                    <br/>
                                </div>

                            </div>
                            <div class=" adminpage">
                                <?php echo anchor('admin/adminpharm/edit_managearticles/'.$art_id,"Edit","style='color:black';text-decoration:underline;")."&nbsp;   |   &nbsp;" .
                                        anchor('admin/adminpharm/redirect_to_managearticles/'."0","Article List","style='color:black';text-decoration:underline;")?>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
