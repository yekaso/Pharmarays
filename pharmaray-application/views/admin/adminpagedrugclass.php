
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <script type="text/javascript" src="<?php echo base_url() ?>js/adminpagedrugclass.js"></script>
         <div id="maincontainer">
            <input type="hidden" id="serverurl" name="serverurl" value="<?php echo base_url() ?>"/>


            <div id="contentwrapper">
                <?php include 'adminnavpane.php'; ?>
                <div class="main_content">
                    <div class="row-fluid">
                        <form method="post" id="masterdata_form">
                            <div class="span12">
                                <h3 class="heading">Drug Class</h3>
                                <div class="formSep">
                                    <div class="row-fluid">
                                        <div class="span4">
                                            <div class="editor-label">
                                                <label for="Name">Name of Drug Class <span class="compulsory_field">*</span></label>
                                            </div>
                                            <div class="editor-field">
                                                <input id="drugclass_name" class="span12" type="text" value="" name="drugclass_name" data-val-required="The Name field is required." data-val="true"/>
                                                <span class="field-validation-valid" data-valmsg-replace="true" data-valmsg-for="Name"></span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row-fluid">
                                        <div class="span8">
                                            <div class="editor-label">
                                                <label for="Address">Description of Drug Class  </label>
                                            </div>
                                            <div class="editor-field">
                                                <textarea id="drugclass_description" class="span12" type="text" value="" name="drugclass_description"></textarea>
                                                <span class="field-validation-valid" data-valmsg-replace="true" data-valmsg-for="Address"></span>
                                            </div>
                                        </div>

                                    </div>


                                    <br/>
                                </div>

                            </div>
                            <div class=" adminpage">
                                <img src="<?php echo base_url() ?>images/tick.png" class="saved_icon">
                                    <span class="saved_icon">Saved Drug Class...</span>
                                    <img src="<?php echo base_url() ?>images/loading2.gif" class="saving_icon"/>
                                    <span class="saving_icon">Saving Drug Class...</span>
                                    <a class="register submit" href="#" name="createcomment"> Save Drug Class </a> 
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>