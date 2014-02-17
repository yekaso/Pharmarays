 <div id="notifications">
                            <div class="alert alert-info alert-login heading">
                                Sold here...<br/>
                            </div>
                            <div id="pharmacy">
                                <ul>  <?php
                                    $errors = array_filter($related_pharmacy);

                                    if (!empty($errors)) {
                                        foreach ($related_pharmacy as $columnName => $columnData) {
                                            $name = $columnData['name'];
                                            $id = $columnData['id_pharmacy'];
                                            ?>
                                            <li><a target="_top" href="<?php echo base_url() ?>sys_admin/user_authorization/redirect_to_displaypharm?pharmacyid=<?php echo $id; ?>"><?php echo word_trim($name, 30, true) ?></a></li>
                                            <?php
                                        }
                                    } else {
                                        ?><li><a  target="_top" href="#">Not available in any pharmacy</a></li>
                                            <?php
                                        }
                                        ?>
                                </ul>
                            </div>
                            <br/>

                            <div class="alert alert-info alert-login heading">
                                List of related drugs by...<br/>
                            </div>
                            <div id="relateditems">
                                <input type="checkbox" id="brandname" value="<?php echo $drug_data['brandname_id'] ?>" name="brandname" class="related_items"/>Branding name / Company<br/>
                                <input type="checkbox" id="class" name="class" value="-1" class="related_items"/>Class<br/>
                                <input type="checkbox" id="generic" name="generic" value="-1" class="related_items"/>Generic<br/>
                                <input type="checkbox" id="indication" name="indication" value="-1" class="related_items"/>Indication<br/>
                            </div>
                            <div id="related_drugs">

                                <ul>
                                    <li><a  target="_top" href="#">No criteria selected yet</a></li>
                                </ul>
                            </div>
                            <div class="alert alert-info alert-login heading">Most searched Drugs...<br/>
                            </div>

                            <div id="toptendrugs">
                                <ul> <?php
                                    $errors = array_filter($toptendrugs_data);

                                    if (!empty($errors)) {
                                        foreach ($toptendrugs_data as $columnName => $columnData) {
                                            log_message('info', ' column name inside view is ' . $columnName . ' column Data is ' . $columnData['id']);
                                            $id = $columnData['id'];
                                            $name = $columnData['name'];
                                            ?>
                                            <li><a target="_top" href="#" id="<?php echo $id ?>"><?php echo word_trim($name, 30, true) ?></a></li>
                                            <?php
                                        }
                                    } else {
                                        ?><li><a  target="_top" href="#">No drug searched yet</a></li>
                                            <?php
                                        }
                                        ?></ul>
                            </div><div class="alert alert-info alert-login heading">Most searched Pharmacy...<br/>
                            </div>

                            <div id="toptenpharmacy">
                                <ul> <?php
                                    $errors = array_filter($toptenpharmacy_data);

                                    if (!empty($errors)) {
                                        foreach ($toptenpharmacy_data as $columnName => $columnData) {
                                            log_message('info', ' column name inside view is ' . $columnName . ' column Data is ' . $columnData['id']);
                                            $id = $columnData['id'];
                                            $name = $columnData['name'];
                                            ?>
                                            <li><a target="_top" href="<?php echo base_url() ?>sys_admin/user_authorization/redirect_to_displaypharm?pharmacyid=<?php echo $id; ?>"><?php echo word_trim($name, 30, true) ?></a></li>
                                            <?php
                                        }
                                    } else {
                                        ?><li><a  target="_top" href="#">No pharmacy searched yet</a></li>
                                            <?php
                                        }
                                        ?></ul>
                            </div>
                            <div class="alert alert-info alert-login heading">
                                Notifications...<br/>
                            </div>

                            <div id="vacancies">
                                <ul> <?php
                                    $errors = array_filter($vacancy_data);

                                    if (!empty($errors)) {
                                        foreach ($vacancy_data as $columnName => $columnData) {
                                            log_message('info', ' column name inside view is ' . $columnName . ' column Data is ' . $columnData['vacancygroup_name']);
                                            $vacancy_type = $columnData['vacancygroup_name'];
                                            $vacancy_count = $columnData['vacancy_count'];
                                            ?>
                                            <li><a  target="_top" href="#"><?php echo $vacancy_type ?> (<?php echo $vacancy_count ?>)</a></li>
                                            <?php
                                        }
                                    } else {
                                        ?><li><a  target="_top" href="#">No vacancy yet</a></li>
                                            <?php
                                        }
                                        ?></ul>
                            </div>
                        </div>