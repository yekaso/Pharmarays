
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
     <script type="text/javascript" src="<?php echo base_url() ?>js/adminpagepharmacy.js"></script>
        <div id="maincontainer">
            <input type="hidden" id="serverurl" name="serverurl" value="<?php echo base_url() ?>"/>
         

            <div id="contentwrapper">
                <?php include 'adminnavpane.php'; ?>
                <div class="main_content">
                    <div class="row-fluid">
                        <form method="post" id="masterdata_form">
                            <div class="span12">
                                <h3 class="heading">Pharmacy Outlets</h3>
                                <div class="formSep">
                                    <div class="row-fluid">
                                        <div class="span4">
                                            <div class="editor-label">
                                                <label for="Name">Name of Pharmacy <span class="compulsory_field">*</span></label>
                                            </div>
                                            <div class="editor-field">
                                                <input id="pharmacy_name" class="span12" type="text" value="" name="pharmacy_name" data-val-required="The Name field is required." data-val="true"/>
                                                <span class="field-validation-valid" data-valmsg-replace="true" data-valmsg-for="Name"></span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row-fluid">
                                        <div class="span8">
                                            <div class="editor-label">
                                                <label for="Address">Address of Pharmacy  <span class="compulsory_field">*</span></label>
                                            </div>
                                            <div class="editor-field">
                                                <textarea id="pharmacy_address" class="span12" type="text" value="" name="pharmacy_address"></textarea>
                                                <span class="field-validation-valid" data-valmsg-replace="true" data-valmsg-for="Address"></span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row-fluid">
                                        <div class="span4">
                                            <div class="editor-label">
                                                <label for="ChurchEmail">Location of Pharmacy  <span class="compulsory_field">*</span></label>
                                            </div>
                                            <div class="editor-field">
                                                <select id="pharmacy_location" class="span12" name="pharmacy_location" data-val-required="The location field is required." data-val="true">
                                                    <option value="0">Choose...</option>
                                                    <?php
                                                    $errors = array_filter($locations);

                                                    if (!empty($errors)) {
                                                        foreach ($locations as $columnName => $columnData) {
                                                            $name = $columnData['name'];
                                                            $id = $columnData['id_location'];
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
                                                <label for="Name">Telephone / Mobile</label>
                                            </div>
                                            <div class="editor-field">
                                                <input id="pharmacy_telephone" class="span12" type="text" value="" name="pharmacy_telephone" data-val-required="The Name field is required." data-val="true"/>
                                                <span class="field-validation-valid" data-valmsg-replace="true" data-valmsg-for="Name"></span>
                                            </div>
                                        </div>

                                    </div>
                                    
                                    <br/>
                                </div>

                            </div>
                            <div class=" adminpage">
                                <img src="<?php echo base_url() ?>images/tick.png" class="saved_icon">
                                    <span class="saved_icon">Saved Pharmacy...</span>
                                    <img src="<?php echo base_url() ?>images/loading2.gif" class="saving_icon"/>
                                    <span class="saving_icon">Saving Pharmacy...</span>
                                    <a class="register submit" href="#" name="createcomment"> Save Pharmacy </a> 
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>