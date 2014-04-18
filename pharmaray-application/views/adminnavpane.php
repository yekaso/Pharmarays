<link rel="stylesheet" href="<?php echo base_url() ?>css/jquery.treeview.css" />
<script src="<?php echo base_url() ?>js/jquery.cookie.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>js/util.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>js/jquery.treeview.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>js/jquery.treeview.edit.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>js/jquery.treeview.async.js" type="text/javascript"></script>
<?php include "sessiondata.php" ?>
<div id="notifications">
    <div class="alert alert-info alert-login heading">
        Navigation Pane<br/>
    </div>
    <div id="admin_list" class="treeview-red">

        <ul> 
            <li class="hasChildren"><span>Manage Articles</span>
                <ul>
                    <li><a target="_top" href="<?php echo base_url() ?>sys_admin/user_authorization/redirect_to_managearticles">Create Articles</a></li>
                    <li><a target="_top" href="<?php echo base_url() ?>sys_admin/user_authorization/redirect_to_managearticles">Edit Articles</a></li>
                </ul>
            </li>
            <li class="hasChildren"><span>Manage Company</span>
                <ul>
                    <li><a target="_top" href="<?php echo base_url() ?>sys_admin/user_authorization/redirect_to_managebrandname">Create Company</a></li>
                    <li><a target="_top" href="<?php echo base_url() ?>sys_admin/user_authorization/redirect_to_managebrandname">Edit Company</a></li>
                </ul>
            </li>
            <li class="hasChildren"><span>Manage Brands</span>
                <ul>
                    <li><a target="_top" href="<?php echo base_url() ?>sys_admin/user_authorization/redirect_to_managebrands">Create Brands</a></li>
                    <li><a target="_top" href="<?php echo base_url() ?>sys_admin/user_authorization/redirect_to_managebrands">Edit Brands</a></li>
                </ul>
            </li><li class="hasChildren"><span>Manage Drug Indication</span>
                <ul>
                    <li><a target="_top" href="<?php echo base_url() ?>sys_admin/user_authorization/redirect_to_managedrugcategory">Create Drug Indication</a></li>
                    <li><a target="_top" href="<?php echo base_url() ?>sys_admin/user_authorization/redirect_to_managedrugcategory">Edit Drug Indication</a></li>
                </ul>
            </li><li class="hasChildren"><span>Manage Drug Class</span>
                <ul>
                    <li><a target="_top" href="<?php echo base_url() ?>sys_admin/user_authorization/redirect_to_managedrugclass">Create Drug Class</a></li>
                    <li><a target="_top" href="<?php echo base_url() ?>sys_admin/user_authorization/redirect_to_managedrugclass">Edit Drug Class</a></li>
                </ul>
            </li><li class="hasChildren"><span>Manage Drugs</span>
                <ul>
                    <li><a target="_top" href="<?php echo base_url() ?>sys_admin/user_authorization/redirect_to_managedrugs">Create Drugs</a></li>
                    <li><a target="_top" href="<?php echo base_url() ?>sys_admin/user_authorization/redirect_to_managedrugs">Edit Drugs</a></li>
                </ul>
            </li><li class="hasChildren"><span>Manage Forums</span>
                <ul>
                    <li><a target="_top" href="<?php echo base_url() ?>sys_admin/user_authorization/redirect_to_manageforums">Create Forums</a></li>
                    <li><a target="_top" href="<?php echo base_url() ?>sys_admin/user_authorization/redirect_to_manageforums">Edit Forums</a></li>
                </ul>
            </li><li class="hasChildren"><span>Manage Pharmacy</span>
                <ul>
                    <li><a target="_top" href="<?php echo base_url() ?>sys_admin/user_authorization/redirect_to_managepharmacy">Create Pharmacy</a></li>
                    <li><a target="_top" href="<?php echo base_url() ?>sys_admin/user_authorization/redirect_to_editpharmacy">Edit Pharmacy</a></li>
                </ul>
            </li>

        </ul>
    </div>
</div>