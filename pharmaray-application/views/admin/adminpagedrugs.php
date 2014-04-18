
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
     <script type="text/javascript" src="<?php echo base_url() ?>js/adminpagedrug.js"></script>
        <div id="maincontainer">
            <input type="hidden" id="serverurl" name="serverurl" value="<?php echo base_url() ?>"/>

            <div id="contentwrapper">
                <?php include 'adminnavpane.php'; ?>
                <div class="main_content">
                    <div class="row-fluid">
                        <form method="post" id="masterdata_form">
                            <div class="span12">
                                <h3 class="heading">Drugs</h3>
                                <div class="formSep">
                                    <div class="row-fluid">
                                        <div class="span4">
                                            <div class="editor-label">
                                                <label for="Name">Name of Drug  <span class="compulsory_field">*</span></label>
                                            </div>
                                            <div class="editor-field">
                                                <input id="drug_title" class="span12" type="text" value="" name="drug_title" data-val-required="The Name field is required." data-val="true"/>
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
                                                <textarea id="drug_description" class="span12" type="text" value="" name="drug_description"></textarea>
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
                                        <div class="span2">
                                            <div class="editor-label">
                                                <label for="ChurchEmail">Drug Brand  <span class="compulsory_field">*</span></label>
                                            </div>
                                            <div class="editor-field">
                                                <select id="drugbrandid" class="span12" name="drugbrandid" data-val-required="The drug category field is required." data-val="true">
                                                    <option value="0">Choose...</option>
                                                    <?php
                                                    $errors = array_filter($drugbrand);

                                                    if (!empty($errors)) {
                                                        foreach ($drugbrand as $columnName => $columnData) {
                                                            $name = $columnData['name'];
                                                            $id = $columnData['id_brandname'];
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
                                        <div>
                                            <div class="editor-label">
                                                <label for="Name">Drug Class  <span class="compulsory_field">*</span></label>
                                            </div>
                                            <div class="div_drugclass">
                                                <?php
                                                $errors = array_filter($drugclass);
                                                $drug_class_display = '';
                                                if (!empty($errors)) {
                                                    $count = 0;

                                                    foreach ($drugclass as $columnName => $columnData) {
                                                        $count++;
                                                        if ($count > 4) {
                                                            $count = 1;
                                                        }
                                                        if ($count == 1) {
                                                            $drug_class_display .= '<div style="clear:both;">';
                                                        } else if ($count == 4) {
                                                            $drug_class_display .= '</div>';
                                                        }
                                                        $drug_class_display .= '<div class="drugclass span2" style="float:left;">'
                                                                . $columnData['name'] . '<input id="guestonly" class="" type="checkbox" name="guestonly" value="' . $id = $columnData['id_drugclass'] . '" /></div>';
                                                        $name = $columnData['name'];
                                                        ;
                                                    }
                                                    echo $drug_class_display;
                                                }
                                                ?>  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br/>
                            </div>

                    </div>
                    <div class=" adminpage">
                        <img src="<?php echo base_url() ?>images/tick.png" class="saved_icon">
                            <span class="saved_icon">Saved Drug...</span>
                            <img src="<?php echo base_url() ?>images/loading2.gif" class="saving_icon"/>
                            <span class="saving_icon">Saving Drug...</span>
                            <a class="register submit" href="#" name="createcomment"> Save Drug </a> 
                    </div>
                    </form>

                </div>
            </div>
        </div>
        </div>
    </body>
</html>