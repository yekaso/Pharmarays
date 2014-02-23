
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <script type="text/javascript" src="<?php echo base_url() ?>js/adminpage.js"></script>
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
    <div id="maincontainer">
            <input type="hidden" id="serverurl" name="serverurl" value="<?php echo base_url() ?>"/>
            <input type="hidden" id="memberid" name="memberid" value="<?php echo $memberid; ?>"/>


            <div id="contentwrapper">
                <?php include 'adminnavpane.php'; ?>
                <div class="main_content">
                    <div class="row-fluid">
                        <form method="post" id="masterdata_form">
                            <div class="span12">
                                <h3 class="heading">News Article</h3>
                                <div class="formSep">
                                    <div class="row-fluid">
                                        <div class="span4">
                                            <div class="editor-label">
                                                <label for="Name">Title  <span class="compulsory_field">*</span></label>
                                            </div>
                                            <div class="editor-field">
                                                <input id="article_title" class="span12" type="text" value="<?php echo isset($art_title)?$art_title:""; ?>" name="article_title" data-val-required="The Name field is required." data-val="true"/>
                                                <span class="field-validation-valid" data-valmsg-replace="true" data-valmsg-for="Name"></span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row-fluid">
                                        <div class="span8">
                                            <div class="editor-label">
                                                <label for="Address">Description  <span class="compulsory_field">*</span></label>
                                            </div>
                                            <div class="editor-field">
                                                <textarea id="article_description" class="span12" type="text" value="" name="article_description">
                                                <?php echo isset($art_descp)?$art_descp:""; ?>
                                                </textarea>
                                                <span class="field-validation-valid" data-valmsg-replace="true" data-valmsg-for="Address"></span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row-fluid">
                                        <div class="span4">
                                            <div class="editor-label">
                                                <label for="ChurchEmail">Drug Category  <span class="compulsory_field">*</span></label>
                                            </div>
                                            <div class="editor-field">
                                                <select id="drugcategoryid" class="span12" name="drugcategoryid" data-val-required="The drug category field is required." data-val="true">
                                                    <option value="0">Choose...</option>
                                                    <?php
                                                    $errors = array_filter($drugcategory);

                                                    if (!empty($errors)) {
                                                        foreach ($drugcategory as $columnName => $columnData) {
                                                            $name = $columnData['name'];
                                                            $id = $columnData['id_drugcategory'];
                                                            ?>
                                                    <option <?php echo (($name == $art_category)?"selected=selected":"")?> value="<?php echo $id; ?>"><?php echo strtolower(word_trim($name, 30, true)) ?></option>
                                                    <?php
                                                       }
                                                    }
                                                    ?>                                                        
                                                </select>
                                                <span class="field-validation-valid" data-valmsg-replace="true" data-valmsg-for="CountryID"></span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row-fluid">
                                        <div class="span4">
                                            <div class="editor-label">
                                                <label for="Name">Author</label>
                                            </div>
                                            <div class="editor-field">
                                                <input id="author" class="span12" type="text" value="<?php echo (isset($art_author)?$art_author:"N/A");?>" name="author" data-val-required="The Name field is required." data-val="true"/>
                                                <span class="field-validation-valid" data-valmsg-replace="true" data-valmsg-for="Name"></span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row-fluid">
                                        <div class="span4">
                                            <div class="editor-label">
                                                <label for="Name">Image Name</label>
                                            </div>
                                            <div class="editor-field">
                                                
                                                <input id="imagename" type="text" value="<?php echo (isset($art_imageName)?$art_imageName:"N/A");?>" name="imagename" placeholder="Choose File" disabled="disabled"/>
                                               <?php echo isset($art_imageName)?img($img_props):img($img_props); ?>
                                                <div class="fileUpload btn btn-primary">
                                                    <span>Choose Image...</span>
                                                    <input id="uploadBtn" type="file" class="upload" />
                                                </div>
                                                <span class="field-validation-valid" data-valmsg-replace="true" data-valmsg-for="Name"></span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row-fluid">
                                        <div class="span4">
                                            <div class="editor-label">
                                                <label for="Name">Available For Guests</label>
                                            </div>
                                            <div class="editor-field">

                                                <input id="guestonly" class="span12" type="checkbox" <?php echo ($art_guestOnly == '1')?"checked=checked":""?> name="guestonly" />
                                                <span class="field-validation-valid" data-valmsg-replace="true" data-valmsg-for="Name"></span>
                                            </div>
                                        </div>

                                    </div>
                                    <br/>
                                </div>

                            </div>
                            <div class=" adminpage">
                                <img src="<?php echo base_url() ?>images/tick.png" class="saved_icon">
                                    <span class="saved_icon">Saved Article...</span>
                                    <img src="<?php echo base_url() ?>images/loading2.gif" class="saving_icon"/>
                                    <span class="saving_icon">Saving Article...</span>
                                    <a class="register submit" href="#" name="createcomment"> Save Article </a>
                                 <?php  echo anchor('admin/adminpharm/redirect_to_managearticles/'."0","&laquo &laquo Article List","style='color:black';text-decoration:underline;");?>
                               
                            </div>
                            </form>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>