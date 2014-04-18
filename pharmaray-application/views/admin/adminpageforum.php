
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
        <script type="text/javascript" src="<?php echo base_url() ?>js/adminpageforum.js"></script>
          <div id="maincontainer">
            <input type="hidden" id="serverurl" name="serverurl" value="<?php echo base_url() ?>"/>
           

            <div id="contentwrapper">
                <?php include 'adminnavpane.php'; ?>
                <div class="main_content">
                    <div class="row-fluid">
                        <form method="post" id="masterdata_forum_form">
                            <div class="span12">
                                <h3 class="heading">Forum</h3>
                                <div class="formSep">
                                    <div class="row-fluid">
                                        <div class="span4">
                                            <div class="editor-label">
                                                <label for="Name">Forum Title  <span class="compulsory_field">*</span></label>
                                            </div>
                                            <div class="editor-field">
                                                <input id="forum_title" class="span12" type="text" value="" name="forum_title" data-val-required="The Name field is required." data-val="true"/>
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
                                                <textarea id="forum_description" class="span12" type="text" value="" name="forum_description"></textarea>
                                                <span class="field-validation-valid" data-valmsg-replace="true" data-valmsg-for="Address"></span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row-fluid">
                                        <div class="span4">
                                            <div class="editor-label">
                                                <label for="ChurchEmail">Sub-Forum  </label>
                                            </div>
                                            <div class="editor-field">
                                                <select id="subforumid" class="span12" name="subforumid" data-val-required="The drug category field is required." data-val="true">
                                                    <option value="0">Choose...</option>
                                                    <?php
                                                    $errors = array_filter($forums);

                                                    if (!empty($errors)) {
                                                        foreach ($forums as $columnName => $columnData) {
                                                            $name = $columnData['name'];
                                                            $id = $columnData['id_forum'];
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

                                </div>

                            </div>
                            <div class=" adminpage">
                                <img src="<?php echo base_url() ?>images/tick.png" class="saved_forum_icon saved_icon">
                                    <span class="saved_forum_icon saved_icon">Saved Forum...</span>
                                    <img src="<?php echo base_url() ?>images/loading2.gif" class="saving_forum_icon saving_icon"/>
                                    <span class="saving_forum_icon saving_icon">Saving Forum...</span>
                                    <a class="register submit submit_forum" href="#" name="createcomment"> Save Forum </a> 
                            </div>
                          </form>
                        <?php echo img('images/platform-bottom-shadow.png'); ?>
                        <form method="post" id="masterdata_topic_form">
                            <div class="span12">
                                <h3 class="heading">Topics</h3>
                                <div class="formSep">
                                    <div class="row-fluid">
                                        <div class="span4">
                                            <div class="editor-label">
                                                <label for="Name">Topic Title  <span class="compulsory_field">*</span></label>
                                            </div>
                                            <div class="editor-field">
                                                <input id="topic_title" class="span12" type="text" value="" name="topic_title" data-val-required="The Name field is required." data-val="true"/>
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
                                                <textarea id="topic_description" class="span12" type="text" value="" name="topic_description"></textarea>
                                                <span class="field-validation-valid" data-valmsg-replace="true" data-valmsg-for="Address"></span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row-fluid">
                                        <div class="span4">
                                            <div class="editor-label">
                                                <label for="ChurchEmail">Forum  <span class="compulsory_field">*</span></label>
                                            </div>
                                            <div class="editor-field">
                                                <select id="forumid" class="span12" name="forumid" data-val-required="The drug category field is required." data-val="true">
                                                    <option value="0">Choose...</option>
                                                    <?php
                                                    $errors = array_filter($forums);

                                                    if (!empty($errors)) {
                                                        foreach ($forums as $columnName => $columnData) {
                                                            $name = $columnData['name'];
                                                            $id = $columnData['id_forum'];
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
                                    <div class="row-fluid">
                                        <div class="span4">
                                            <div class="editor-label">
                                                <label for="ChurchEmail">Category of Forum  <span class="compulsory_field">*</span></label>
                                            </div>
                                            <div class="editor-field">
                                                <select id="forumcategoryid" class="span12" name="forumcategoryid" data-val-required="The drug category field is required." data-val="true">
                                                    <option value="0">Choose...</option>
                                                    <?php
                                                    $errors = array_filter($forumcategory);

                                                    if (!empty($errors)) {
                                                        foreach ($forumcategory as $columnName => $columnData) {
                                                            $name = $columnData['name'];
                                                            $id = $columnData['id_forum'];
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

                                </div>

                            </div>
                            <div class=" adminpage">
                                <img src="<?php echo base_url() ?>images/tick.png" class="saved_topic_icon saved_icon">
                                    <span class="saved_topic_icon saved_icon">Saved Topic...</span>
                                    <img src="<?php echo base_url() ?>images/loading2.gif" class="saving_topic_icon saving_icon"/>
                                    <span class="saving_topic_icon saving_icon">Saving Topic...</span>
                                    <a class="register submit topic_submit" href="#" name="createcomment"> Save Topic </a> 
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>