<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2014-07-27 00:07:09 --> Config Class Initialized
DEBUG - 2014-07-27 00:07:09 --> Hooks Class Initialized
DEBUG - 2014-07-27 00:07:09 --> Utf8 Class Initialized
DEBUG - 2014-07-27 00:07:09 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 00:07:09 --> URI Class Initialized
DEBUG - 2014-07-27 00:07:09 --> Router Class Initialized
DEBUG - 2014-07-27 00:07:09 --> Output Class Initialized
DEBUG - 2014-07-27 00:07:09 --> Security Class Initialized
DEBUG - 2014-07-27 00:07:09 --> Input Class Initialized
DEBUG - 2014-07-27 00:07:09 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 00:07:09 --> Language Class Initialized
DEBUG - 2014-07-27 00:07:09 --> Loader Class Initialized
DEBUG - 2014-07-27 00:07:09 --> Helper loaded: form_helper
DEBUG - 2014-07-27 00:07:09 --> Helper loaded: url_helper
DEBUG - 2014-07-27 00:07:09 --> Helper loaded: html_helper
DEBUG - 2014-07-27 00:07:09 --> Database Driver Class Initialized
ERROR - 2014-07-27 00:07:09 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 00:07:09 --> Session Class Initialized
DEBUG - 2014-07-27 00:07:09 --> Helper loaded: string_helper
DEBUG - 2014-07-27 00:07:09 --> Session routines successfully run
DEBUG - 2014-07-27 00:07:09 --> Form Validation Class Initialized
DEBUG - 2014-07-27 00:07:09 --> Controller Class Initialized
DEBUG - 2014-07-27 00:07:09 --> Model Class Initialized
DEBUG - 2014-07-27 00:07:09 --> Model Class Initialized
DEBUG - 2014-07-27 00:07:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 00:07:09 --> Encrypt Class Initialized
INFO  - 2014-07-27 00:07:09 --> after session initialization................
INFO  - 2014-07-27 00:07:09 --> the form message==>
INFO  - 2014-07-27 00:07:09 --> The session id is ========>d1d791c7a2f1a84e109b6056fdd5d86d and the member id is =======>
INFO  - 2014-07-27 00:07:09 --> after the retrieving session list.................//////////
INFO  - 2014-07-27 00:07:09 --> The session id is ========>d1d791c7a2f1a84e109b6056fdd5d86d and the member id is =======>
DEBUG - 2014-07-27 00:07:09 --> File loaded: ../pharmaray-application/views/old_signin.php
DEBUG - 2014-07-27 00:07:09 --> Final output sent to browser
DEBUG - 2014-07-27 00:07:09 --> Total execution time: 0.0746
DEBUG - 2014-07-27 00:07:14 --> Config Class Initialized
DEBUG - 2014-07-27 00:07:14 --> Hooks Class Initialized
DEBUG - 2014-07-27 00:07:14 --> Utf8 Class Initialized
DEBUG - 2014-07-27 00:07:14 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 00:07:14 --> URI Class Initialized
DEBUG - 2014-07-27 00:07:14 --> Router Class Initialized
DEBUG - 2014-07-27 00:07:14 --> Output Class Initialized
DEBUG - 2014-07-27 00:07:14 --> Security Class Initialized
DEBUG - 2014-07-27 00:07:14 --> Input Class Initialized
DEBUG - 2014-07-27 00:07:14 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 00:07:14 --> Language Class Initialized
DEBUG - 2014-07-27 00:07:14 --> Loader Class Initialized
DEBUG - 2014-07-27 00:07:14 --> Helper loaded: form_helper
DEBUG - 2014-07-27 00:07:14 --> Helper loaded: url_helper
DEBUG - 2014-07-27 00:07:14 --> Helper loaded: html_helper
DEBUG - 2014-07-27 00:07:14 --> Database Driver Class Initialized
ERROR - 2014-07-27 00:07:14 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 00:07:14 --> Session Class Initialized
DEBUG - 2014-07-27 00:07:14 --> Helper loaded: string_helper
DEBUG - 2014-07-27 00:07:14 --> Session routines successfully run
DEBUG - 2014-07-27 00:07:14 --> Form Validation Class Initialized
DEBUG - 2014-07-27 00:07:14 --> Controller Class Initialized
DEBUG - 2014-07-27 00:07:14 --> Model Class Initialized
DEBUG - 2014-07-27 00:07:14 --> Model Class Initialized
DEBUG - 2014-07-27 00:07:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 00:07:14 --> Encrypt Class Initialized
INFO  - 2014-07-27 00:07:14 --> after session initialization................
INFO  - 2014-07-27 00:07:14 --> inside the register member.................
INFO  - 2014-07-27 00:07:14 --> before initializing member array.................
INFO  - 2014-07-27 00:07:14 --> before setting validation rules.................
INFO  - 2014-07-27 00:07:14 --> after setting validation rules.................
DEBUG - 2014-07-27 00:07:14 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2014-07-27 00:07:14 --> XSS Filtering completed
DEBUG - 2014-07-27 00:07:14 --> XSS Filtering completed
DEBUG - 2014-07-27 00:07:14 --> XSS Filtering completed
INFO  - 2014-07-27 00:07:14 --> inside retrieve most searched pharmacy
INFO  - 2014-07-27 00:07:14 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 20
INFO  - 2014-07-27 00:07:14 --> inside retrieve most searched pharmacy
INFO  - 2014-07-27 00:07:14 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 20
INFO  - 2014-07-27 00:07:14 --> inside retrieve most searched pharmacy
INFO  - 2014-07-27 00:07:14 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 20
INFO  - 2014-07-27 00:07:14 --> validation is false so error message is returned.................
INFO  - 2014-07-27 00:07:14 --> the form message controller==>-----------------------
DEBUG - 2014-07-27 00:07:14 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-07-27 00:07:14 --> Final output sent to browser
DEBUG - 2014-07-27 00:07:14 --> Total execution time: 0.0676
DEBUG - 2014-07-27 00:14:21 --> Config Class Initialized
DEBUG - 2014-07-27 00:14:21 --> Hooks Class Initialized
DEBUG - 2014-07-27 00:14:21 --> Utf8 Class Initialized
DEBUG - 2014-07-27 00:14:21 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 00:14:21 --> URI Class Initialized
DEBUG - 2014-07-27 00:14:21 --> Router Class Initialized
DEBUG - 2014-07-27 00:14:21 --> Output Class Initialized
DEBUG - 2014-07-27 00:14:21 --> Security Class Initialized
DEBUG - 2014-07-27 00:14:21 --> Input Class Initialized
DEBUG - 2014-07-27 00:14:21 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 00:14:21 --> Language Class Initialized
DEBUG - 2014-07-27 00:14:21 --> Loader Class Initialized
DEBUG - 2014-07-27 00:14:21 --> Helper loaded: form_helper
DEBUG - 2014-07-27 00:14:21 --> Helper loaded: url_helper
DEBUG - 2014-07-27 00:14:21 --> Helper loaded: html_helper
DEBUG - 2014-07-27 00:14:21 --> Database Driver Class Initialized
ERROR - 2014-07-27 00:14:21 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 00:14:21 --> Session Class Initialized
DEBUG - 2014-07-27 00:14:21 --> Helper loaded: string_helper
DEBUG - 2014-07-27 00:14:21 --> Session routines successfully run
DEBUG - 2014-07-27 00:14:21 --> Form Validation Class Initialized
DEBUG - 2014-07-27 00:14:21 --> Controller Class Initialized
DEBUG - 2014-07-27 00:14:21 --> Model Class Initialized
DEBUG - 2014-07-27 00:14:21 --> Model Class Initialized
DEBUG - 2014-07-27 00:14:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 00:14:21 --> Encrypt Class Initialized
INFO  - 2014-07-27 00:14:21 --> after session initialization................
INFO  - 2014-07-27 00:14:21 --> the form message==>
INFO  - 2014-07-27 00:14:21 --> The session id is ========>f3766b99dfe517709a07349d625f1ce9 and the member id is =======>
INFO  - 2014-07-27 00:14:21 --> after the retrieving session list.................//////////
INFO  - 2014-07-27 00:14:21 --> The session id is ========>f3766b99dfe517709a07349d625f1ce9 and the member id is =======>
DEBUG - 2014-07-27 00:14:21 --> File loaded: ../pharmaray-application/views/old_signin.php
DEBUG - 2014-07-27 00:14:21 --> Final output sent to browser
DEBUG - 2014-07-27 00:14:21 --> Total execution time: 0.0692
DEBUG - 2014-07-27 00:14:24 --> Config Class Initialized
DEBUG - 2014-07-27 00:14:24 --> Hooks Class Initialized
DEBUG - 2014-07-27 00:14:24 --> Utf8 Class Initialized
DEBUG - 2014-07-27 00:14:24 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 00:14:24 --> URI Class Initialized
DEBUG - 2014-07-27 00:14:24 --> Router Class Initialized
DEBUG - 2014-07-27 00:14:24 --> Output Class Initialized
DEBUG - 2014-07-27 00:14:24 --> Security Class Initialized
DEBUG - 2014-07-27 00:14:24 --> Input Class Initialized
DEBUG - 2014-07-27 00:14:24 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 00:14:24 --> Language Class Initialized
DEBUG - 2014-07-27 00:14:24 --> Loader Class Initialized
DEBUG - 2014-07-27 00:14:24 --> Helper loaded: form_helper
DEBUG - 2014-07-27 00:14:24 --> Helper loaded: url_helper
DEBUG - 2014-07-27 00:14:24 --> Helper loaded: html_helper
DEBUG - 2014-07-27 00:14:24 --> Database Driver Class Initialized
ERROR - 2014-07-27 00:14:24 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 00:14:24 --> Session Class Initialized
DEBUG - 2014-07-27 00:14:24 --> Helper loaded: string_helper
DEBUG - 2014-07-27 00:14:24 --> Session routines successfully run
DEBUG - 2014-07-27 00:14:24 --> Form Validation Class Initialized
DEBUG - 2014-07-27 00:14:24 --> Controller Class Initialized
DEBUG - 2014-07-27 00:14:24 --> Model Class Initialized
DEBUG - 2014-07-27 00:14:24 --> Model Class Initialized
DEBUG - 2014-07-27 00:14:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 00:14:24 --> Encrypt Class Initialized
INFO  - 2014-07-27 00:14:24 --> after session initialization................
INFO  - 2014-07-27 00:14:24 --> after rays has been clicked.................
INFO  - 2014-07-27 00:14:24 --> last article id is 0
INFO  - 2014-07-27 00:14:24 --> The session id is ========>f3766b99dfe517709a07349d625f1ce9 and the member id is =======>
INFO  - 2014-07-27 00:14:24 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-07-27 00:14:24 --> 0 the guest only data>>>>>
INFO  - 2014-07-27 00:14:24 --> 0 the guest only data>> AFTER >>>#31
INFO  - 2014-07-27 00:14:24 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-07-27 00:14:24 --> 0 the guest only data>>>>>#31
INFO  - 2014-07-27 00:14:24 --> 0 the guest only data>> AFTER >>>#16
INFO  - 2014-07-27 00:14:24 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-07-27 00:14:24 --> 1 the guest only data>>>>>#16
INFO  - 2014-07-27 00:14:24 --> 1 the guest only data>> AFTER >>>#16
INFO  - 2014-07-27 00:14:24 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-07-27 00:14:24 --> 0 the guest only data>>>>>#16
INFO  - 2014-07-27 00:14:24 --> 0 the guest only data>> AFTER >>>#14
INFO  - 2014-07-27 00:14:24 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-07-27 00:14:24 --> 1 the guest only data>>>>>#14
INFO  - 2014-07-27 00:14:24 --> 1 the guest only data>> AFTER >>>#14
INFO  - 2014-07-27 00:14:24 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-07-27 00:14:24 --> 0 the guest only data>>>>>#14
INFO  - 2014-07-27 00:14:24 --> 0 the guest only data>> AFTER >>>#12
INFO  - 2014-07-27 00:14:24 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-07-27 00:14:24 --> 1 the guest only data>>>>>#12
INFO  - 2014-07-27 00:14:24 --> 1 the guest only data>> AFTER >>>#12
DEBUG - 2014-07-27 00:14:24 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2014-07-27 00:14:24 --> Final output sent to browser
DEBUG - 2014-07-27 00:14:24 --> Total execution time: 0.0524
DEBUG - 2014-07-27 00:14:27 --> Config Class Initialized
DEBUG - 2014-07-27 00:14:27 --> Hooks Class Initialized
DEBUG - 2014-07-27 00:14:27 --> Utf8 Class Initialized
DEBUG - 2014-07-27 00:14:27 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 00:14:27 --> URI Class Initialized
DEBUG - 2014-07-27 00:14:27 --> Router Class Initialized
DEBUG - 2014-07-27 00:14:27 --> Output Class Initialized
DEBUG - 2014-07-27 00:14:27 --> Security Class Initialized
DEBUG - 2014-07-27 00:14:27 --> Input Class Initialized
DEBUG - 2014-07-27 00:14:27 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 00:14:27 --> Language Class Initialized
DEBUG - 2014-07-27 00:14:27 --> Loader Class Initialized
DEBUG - 2014-07-27 00:14:27 --> Helper loaded: form_helper
DEBUG - 2014-07-27 00:14:27 --> Helper loaded: url_helper
DEBUG - 2014-07-27 00:14:27 --> Helper loaded: html_helper
DEBUG - 2014-07-27 00:14:27 --> Database Driver Class Initialized
ERROR - 2014-07-27 00:14:27 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 00:14:27 --> Session Class Initialized
DEBUG - 2014-07-27 00:14:27 --> Helper loaded: string_helper
DEBUG - 2014-07-27 00:14:27 --> Session routines successfully run
DEBUG - 2014-07-27 00:14:27 --> Form Validation Class Initialized
DEBUG - 2014-07-27 00:14:27 --> Controller Class Initialized
DEBUG - 2014-07-27 00:14:27 --> Model Class Initialized
DEBUG - 2014-07-27 00:14:27 --> Model Class Initialized
DEBUG - 2014-07-27 00:14:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 00:14:27 --> Encrypt Class Initialized
INFO  - 2014-07-27 00:14:27 --> after session initialization................
ERROR - 2014-07-27 00:14:27 --> Severity: Warning  --> Missing argument 1 for user_authorization::index() /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-application/controllers/sys_admin/user_authorization.php 375
ERROR - 2014-07-27 00:14:27 --> Severity: Notice  --> Undefined variable: message /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-application/controllers/sys_admin/user_authorization.php 377
DEBUG - 2014-07-27 00:14:27 --> Config Class Initialized
DEBUG - 2014-07-27 00:14:27 --> Hooks Class Initialized
DEBUG - 2014-07-27 00:14:27 --> Utf8 Class Initialized
DEBUG - 2014-07-27 00:14:27 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 00:14:27 --> URI Class Initialized
DEBUG - 2014-07-27 00:14:27 --> Router Class Initialized
DEBUG - 2014-07-27 00:14:27 --> No URI present. Default controller set.
DEBUG - 2014-07-27 00:14:27 --> Output Class Initialized
DEBUG - 2014-07-27 00:14:27 --> Security Class Initialized
DEBUG - 2014-07-27 00:14:27 --> Input Class Initialized
DEBUG - 2014-07-27 00:14:27 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 00:14:27 --> Language Class Initialized
DEBUG - 2014-07-27 00:14:27 --> Loader Class Initialized
DEBUG - 2014-07-27 00:14:27 --> Helper loaded: form_helper
DEBUG - 2014-07-27 00:14:27 --> Helper loaded: url_helper
DEBUG - 2014-07-27 00:14:27 --> Helper loaded: html_helper
DEBUG - 2014-07-27 00:14:27 --> Database Driver Class Initialized
ERROR - 2014-07-27 00:14:27 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 00:14:27 --> Session Class Initialized
DEBUG - 2014-07-27 00:14:27 --> Helper loaded: string_helper
DEBUG - 2014-07-27 00:14:27 --> Session routines successfully run
DEBUG - 2014-07-27 00:14:27 --> Form Validation Class Initialized
DEBUG - 2014-07-27 00:14:27 --> Controller Class Initialized
DEBUG - 2014-07-27 00:14:27 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2014-07-27 00:14:27 --> Final output sent to browser
DEBUG - 2014-07-27 00:14:27 --> Total execution time: 0.0194
DEBUG - 2014-07-27 00:14:27 --> Config Class Initialized
DEBUG - 2014-07-27 00:14:27 --> Hooks Class Initialized
DEBUG - 2014-07-27 00:14:27 --> Utf8 Class Initialized
DEBUG - 2014-07-27 00:14:27 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 00:14:27 --> URI Class Initialized
DEBUG - 2014-07-27 00:14:27 --> Router Class Initialized
DEBUG - 2014-07-27 00:14:27 --> Output Class Initialized
DEBUG - 2014-07-27 00:14:27 --> Security Class Initialized
DEBUG - 2014-07-27 00:14:27 --> Input Class Initialized
DEBUG - 2014-07-27 00:14:27 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 00:14:27 --> Language Class Initialized
DEBUG - 2014-07-27 00:14:27 --> Loader Class Initialized
DEBUG - 2014-07-27 00:14:27 --> Helper loaded: form_helper
DEBUG - 2014-07-27 00:14:27 --> Helper loaded: url_helper
DEBUG - 2014-07-27 00:14:27 --> Helper loaded: html_helper
DEBUG - 2014-07-27 00:14:27 --> Database Driver Class Initialized
ERROR - 2014-07-27 00:14:27 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 00:14:27 --> Session Class Initialized
DEBUG - 2014-07-27 00:14:27 --> Helper loaded: string_helper
DEBUG - 2014-07-27 00:14:27 --> Session routines successfully run
DEBUG - 2014-07-27 00:14:27 --> Form Validation Class Initialized
DEBUG - 2014-07-27 00:14:27 --> Controller Class Initialized
DEBUG - 2014-07-27 00:14:27 --> Model Class Initialized
DEBUG - 2014-07-27 00:14:27 --> Model Class Initialized
DEBUG - 2014-07-27 00:14:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 00:14:27 --> Encrypt Class Initialized
INFO  - 2014-07-27 00:14:27 --> after session initialization................
INFO  - 2014-07-27 00:14:27 --> after rays has been clicked.................
INFO  - 2014-07-27 00:14:27 --> last article id is 0
INFO  - 2014-07-27 00:14:27 --> The session id is ========>f3766b99dfe517709a07349d625f1ce9 and the member id is =======>
INFO  - 2014-07-27 00:14:27 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-07-27 00:14:27 --> 0 the guest only data>>>>>
INFO  - 2014-07-27 00:14:27 --> 0 the guest only data>> AFTER >>>#31
INFO  - 2014-07-27 00:14:27 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-07-27 00:14:27 --> 0 the guest only data>>>>>#31
INFO  - 2014-07-27 00:14:27 --> 0 the guest only data>> AFTER >>>#16
INFO  - 2014-07-27 00:14:27 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-07-27 00:14:27 --> 1 the guest only data>>>>>#16
INFO  - 2014-07-27 00:14:27 --> 1 the guest only data>> AFTER >>>#16
INFO  - 2014-07-27 00:14:27 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-07-27 00:14:27 --> 0 the guest only data>>>>>#16
INFO  - 2014-07-27 00:14:27 --> 0 the guest only data>> AFTER >>>#14
INFO  - 2014-07-27 00:14:27 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-07-27 00:14:27 --> 1 the guest only data>>>>>#14
INFO  - 2014-07-27 00:14:27 --> 1 the guest only data>> AFTER >>>#14
INFO  - 2014-07-27 00:14:27 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-07-27 00:14:27 --> 0 the guest only data>>>>>#14
INFO  - 2014-07-27 00:14:27 --> 0 the guest only data>> AFTER >>>#12
INFO  - 2014-07-27 00:14:27 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-07-27 00:14:27 --> 1 the guest only data>>>>>#12
INFO  - 2014-07-27 00:14:27 --> 1 the guest only data>> AFTER >>>#12
DEBUG - 2014-07-27 00:14:27 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2014-07-27 00:14:27 --> Final output sent to browser
DEBUG - 2014-07-27 00:14:27 --> Total execution time: 0.0375
DEBUG - 2014-07-27 00:14:29 --> Config Class Initialized
DEBUG - 2014-07-27 00:14:29 --> Hooks Class Initialized
DEBUG - 2014-07-27 00:14:29 --> Utf8 Class Initialized
DEBUG - 2014-07-27 00:14:29 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 00:14:29 --> URI Class Initialized
DEBUG - 2014-07-27 00:14:29 --> Router Class Initialized
DEBUG - 2014-07-27 00:14:29 --> Output Class Initialized
DEBUG - 2014-07-27 00:14:29 --> Security Class Initialized
DEBUG - 2014-07-27 00:14:30 --> Input Class Initialized
DEBUG - 2014-07-27 00:14:30 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 00:14:30 --> Language Class Initialized
DEBUG - 2014-07-27 00:14:30 --> Loader Class Initialized
DEBUG - 2014-07-27 00:14:30 --> Helper loaded: form_helper
DEBUG - 2014-07-27 00:14:30 --> Helper loaded: url_helper
DEBUG - 2014-07-27 00:14:30 --> Helper loaded: html_helper
DEBUG - 2014-07-27 00:14:30 --> Database Driver Class Initialized
ERROR - 2014-07-27 00:14:30 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 00:14:30 --> Session Class Initialized
DEBUG - 2014-07-27 00:14:30 --> Helper loaded: string_helper
DEBUG - 2014-07-27 00:14:30 --> Session routines successfully run
DEBUG - 2014-07-27 00:14:30 --> Form Validation Class Initialized
DEBUG - 2014-07-27 00:14:30 --> Controller Class Initialized
DEBUG - 2014-07-27 00:14:30 --> Model Class Initialized
DEBUG - 2014-07-27 00:14:30 --> Model Class Initialized
DEBUG - 2014-07-27 00:14:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 00:14:30 --> Encrypt Class Initialized
INFO  - 2014-07-27 00:14:30 --> after session initialization................
INFO  - 2014-07-27 00:14:30 --> the form message==>
INFO  - 2014-07-27 00:14:30 --> The session id is ========>f3766b99dfe517709a07349d625f1ce9 and the member id is =======>
INFO  - 2014-07-27 00:14:30 --> after the retrieving session list.................//////////
INFO  - 2014-07-27 00:14:30 --> The session id is ========>f3766b99dfe517709a07349d625f1ce9 and the member id is =======>
DEBUG - 2014-07-27 00:14:30 --> File loaded: ../pharmaray-application/views/old_signin.php
DEBUG - 2014-07-27 00:14:30 --> Final output sent to browser
DEBUG - 2014-07-27 00:14:30 --> Total execution time: 0.0609
DEBUG - 2014-07-27 00:14:31 --> Config Class Initialized
DEBUG - 2014-07-27 00:14:31 --> Hooks Class Initialized
DEBUG - 2014-07-27 00:14:31 --> Utf8 Class Initialized
DEBUG - 2014-07-27 00:14:31 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 00:14:31 --> URI Class Initialized
DEBUG - 2014-07-27 00:14:31 --> Router Class Initialized
DEBUG - 2014-07-27 00:14:31 --> Output Class Initialized
DEBUG - 2014-07-27 00:14:31 --> Security Class Initialized
DEBUG - 2014-07-27 00:14:31 --> Input Class Initialized
DEBUG - 2014-07-27 00:14:31 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 00:14:31 --> Language Class Initialized
DEBUG - 2014-07-27 00:14:31 --> Loader Class Initialized
DEBUG - 2014-07-27 00:14:31 --> Helper loaded: form_helper
DEBUG - 2014-07-27 00:14:31 --> Helper loaded: url_helper
DEBUG - 2014-07-27 00:14:31 --> Helper loaded: html_helper
DEBUG - 2014-07-27 00:14:31 --> Database Driver Class Initialized
ERROR - 2014-07-27 00:14:31 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 00:14:31 --> Session Class Initialized
DEBUG - 2014-07-27 00:14:31 --> Helper loaded: string_helper
DEBUG - 2014-07-27 00:14:31 --> Session routines successfully run
DEBUG - 2014-07-27 00:14:31 --> Form Validation Class Initialized
DEBUG - 2014-07-27 00:14:31 --> Controller Class Initialized
DEBUG - 2014-07-27 00:14:31 --> Model Class Initialized
DEBUG - 2014-07-27 00:14:31 --> Model Class Initialized
DEBUG - 2014-07-27 00:14:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 00:14:31 --> Encrypt Class Initialized
INFO  - 2014-07-27 00:14:31 --> after session initialization................
INFO  - 2014-07-27 00:14:31 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  ''
INFO  - 2014-07-27 00:14:31 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-07-27 00:14:31 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2014-07-27 00:14:31 --> inside retrieving vacancy for member
INFO  - 2014-07-27 00:14:31 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2014-07-27 00:14:31 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-07-27 00:14:31 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2014-07-27 00:14:31 --> Drugs ::::::::::===>SELECT d.id_drug, d.drug_name, d.drug_description, group_concat(bn.name, ':', bn.id_brandname) as drug_company, group_concat(dcc.name) as drug_brandnames, dcc.id_drugcategory as category_id
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dcc`.`brandname_id`
WHERE `d`.`id_drug` =  '1'
GROUP BY `id_drug`
ORDER BY `d`.`drug_name`, `bn`.`id_brandname`
INFO  - 2014-07-27 00:14:31 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drugcategory_id` = `dc`.`id_drugcategory`
JOIN `drug` d ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2014-07-27 00:14:31 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2014-07-27 00:14:31 --> inside retrieving pharmacy for drug id is 1
INFO  - 2014-07-27 00:14:31 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2014-07-27 00:14:31 --> Related drugs ::::::::::===>SELECT d.drug_name
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcg`.`drugcategory_id` = `dcc`.`id_drugcategory`
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
WHERE `dcc`.`brandname_id` =  '0'
AND `dc`.`id_drugclass` =  '0'
INFO  - 2014-07-27 00:14:31 --> inside retrieve most searched drugs
INFO  - 2014-07-27 00:14:31 --> SELECT `d`.`id_drug` as id, `d`.`drug_name` as name, count(ds.id_drugsearch) as search_count
FROM (`drug_search` ds)
JOIN `drug` d ON `d`.`id_drug` = `ds`.`drug_id`
GROUP BY `d`.`id_drug`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-07-27 00:14:31 --> inside retrieve most searched pharmacy
INFO  - 2014-07-27 00:14:31 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-07-27 00:14:31 --> inside retrieve most searched article
INFO  - 2014-07-27 00:14:31 --> SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description, count(ats.article_id) as search_count
FROM (`article_search` ats)
JOIN `article` a ON `a`.`id_article` = `ats`.`article_id`
JOIN `news` n ON `a`.`newsid_news` = `n`.`id_news`
GROUP BY `a`.`id_article`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-07-27 00:14:31 --> The session id is ========>f3766b99dfe517709a07349d625f1ce9 and the member id is =======>
INFO  - 2014-07-27 00:14:31 -->  column name inside view is 0 column Data is 491
INFO  - 2014-07-27 00:14:31 -->  column name inside view is 1 column Data is 618
INFO  - 2014-07-27 00:14:31 -->  column name inside view is 2 column Data is 1
INFO  - 2014-07-27 00:14:31 -->  column name inside view is 3 column Data is 515
INFO  - 2014-07-27 00:14:31 -->  column name inside view is 4 column Data is 488
INFO  - 2014-07-27 00:14:31 -->  column name inside view is 5 column Data is 509
INFO  - 2014-07-27 00:14:31 -->  column name inside view is 6 column Data is 487
INFO  - 2014-07-27 00:14:31 -->  column name inside view is 7 column Data is 489
INFO  - 2014-07-27 00:14:31 -->  column name inside view is 8 column Data is 516
INFO  - 2014-07-27 00:14:31 -->  column name inside view is 9 column Data is 641
INFO  - 2014-07-27 00:14:31 -->  column name inside view is 0 column Data is 5
INFO  - 2014-07-27 00:14:31 -->  column name inside view is 1 column Data is 2
INFO  - 2014-07-27 00:14:31 -->  column name inside view is 2 column Data is 1
INFO  - 2014-07-27 00:14:31 -->  column name inside view is 3 column Data is 3
INFO  - 2014-07-27 00:14:31 -->  column name inside view is 4 column Data is 18
INFO  - 2014-07-27 00:14:31 -->  column name inside view is 5 column Data is 15
INFO  - 2014-07-27 00:14:31 -->  column name inside view is 6 column Data is 14
INFO  - 2014-07-27 00:14:31 -->  column name inside view is 7 column Data is 6
INFO  - 2014-07-27 00:14:31 -->  column name inside view is 8 column Data is 43
INFO  - 2014-07-27 00:14:31 -->  column name inside view is 9 column Data is 9
INFO  - 2014-07-27 00:14:31 -->  column name inside view is 0 column Data is Male Doctor
INFO  - 2014-07-27 00:14:31 -->  column name inside view is 1 column Data is Ordinary User
DEBUG - 2014-07-27 00:14:31 --> File loaded: ../pharmaray-application/views/onlinepharmacy.php
DEBUG - 2014-07-27 00:14:31 --> Final output sent to browser
DEBUG - 2014-07-27 00:14:31 --> Total execution time: 0.0925
DEBUG - 2014-07-27 00:14:31 --> Config Class Initialized
DEBUG - 2014-07-27 00:14:31 --> Hooks Class Initialized
DEBUG - 2014-07-27 00:14:31 --> Utf8 Class Initialized
DEBUG - 2014-07-27 00:14:31 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 00:14:31 --> URI Class Initialized
DEBUG - 2014-07-27 00:14:31 --> Router Class Initialized
ERROR - 2014-07-27 00:14:31 --> 404 Page Not Found --> css
DEBUG - 2014-07-27 00:14:33 --> Config Class Initialized
DEBUG - 2014-07-27 00:14:33 --> Hooks Class Initialized
DEBUG - 2014-07-27 00:14:33 --> Utf8 Class Initialized
DEBUG - 2014-07-27 00:14:33 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 00:14:33 --> URI Class Initialized
DEBUG - 2014-07-27 00:14:33 --> Router Class Initialized
DEBUG - 2014-07-27 00:14:33 --> Output Class Initialized
DEBUG - 2014-07-27 00:14:33 --> Security Class Initialized
DEBUG - 2014-07-27 00:14:33 --> Input Class Initialized
DEBUG - 2014-07-27 00:14:33 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 00:14:33 --> Language Class Initialized
DEBUG - 2014-07-27 00:14:33 --> Loader Class Initialized
DEBUG - 2014-07-27 00:14:33 --> Helper loaded: form_helper
DEBUG - 2014-07-27 00:14:33 --> Helper loaded: url_helper
DEBUG - 2014-07-27 00:14:33 --> Helper loaded: html_helper
DEBUG - 2014-07-27 00:14:33 --> Database Driver Class Initialized
ERROR - 2014-07-27 00:14:33 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 00:14:33 --> Session Class Initialized
DEBUG - 2014-07-27 00:14:33 --> Helper loaded: string_helper
DEBUG - 2014-07-27 00:14:33 --> Session routines successfully run
DEBUG - 2014-07-27 00:14:33 --> Form Validation Class Initialized
DEBUG - 2014-07-27 00:14:33 --> Controller Class Initialized
DEBUG - 2014-07-27 00:14:33 --> Model Class Initialized
DEBUG - 2014-07-27 00:14:33 --> Model Class Initialized
DEBUG - 2014-07-27 00:14:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 00:14:33 --> Encrypt Class Initialized
INFO  - 2014-07-27 00:14:33 --> after session initialization................
INFO  - 2014-07-27 00:14:33 --> the form message==>
INFO  - 2014-07-27 00:14:33 --> The session id is ========>f3766b99dfe517709a07349d625f1ce9 and the member id is =======>
INFO  - 2014-07-27 00:14:33 --> after the retrieving session list.................//////////
INFO  - 2014-07-27 00:14:33 --> The session id is ========>f3766b99dfe517709a07349d625f1ce9 and the member id is =======>
DEBUG - 2014-07-27 00:14:33 --> File loaded: ../pharmaray-application/views/old_signin.php
DEBUG - 2014-07-27 00:14:33 --> Final output sent to browser
DEBUG - 2014-07-27 00:14:33 --> Total execution time: 0.0776
DEBUG - 2014-07-27 00:14:37 --> Config Class Initialized
DEBUG - 2014-07-27 00:14:37 --> Hooks Class Initialized
DEBUG - 2014-07-27 00:14:37 --> Utf8 Class Initialized
DEBUG - 2014-07-27 00:14:37 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 00:14:37 --> URI Class Initialized
DEBUG - 2014-07-27 00:14:37 --> Router Class Initialized
DEBUG - 2014-07-27 00:14:37 --> Output Class Initialized
DEBUG - 2014-07-27 00:14:37 --> Security Class Initialized
DEBUG - 2014-07-27 00:14:37 --> Input Class Initialized
DEBUG - 2014-07-27 00:14:37 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 00:14:37 --> Language Class Initialized
DEBUG - 2014-07-27 00:14:37 --> Loader Class Initialized
DEBUG - 2014-07-27 00:14:37 --> Helper loaded: form_helper
DEBUG - 2014-07-27 00:14:37 --> Helper loaded: url_helper
DEBUG - 2014-07-27 00:14:37 --> Helper loaded: html_helper
DEBUG - 2014-07-27 00:14:37 --> Database Driver Class Initialized
ERROR - 2014-07-27 00:14:37 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 00:14:37 --> Session Class Initialized
DEBUG - 2014-07-27 00:14:37 --> Helper loaded: string_helper
DEBUG - 2014-07-27 00:14:37 --> Session routines successfully run
DEBUG - 2014-07-27 00:14:37 --> Form Validation Class Initialized
DEBUG - 2014-07-27 00:14:37 --> Controller Class Initialized
DEBUG - 2014-07-27 00:14:37 --> Model Class Initialized
DEBUG - 2014-07-27 00:14:37 --> Model Class Initialized
DEBUG - 2014-07-27 00:14:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 00:14:37 --> Encrypt Class Initialized
INFO  - 2014-07-27 00:14:37 --> after session initialization................
INFO  - 2014-07-27 00:14:37 --> inside the register member.................
INFO  - 2014-07-27 00:14:37 --> before initializing member array.................
INFO  - 2014-07-27 00:14:37 --> before setting validation rules.................
INFO  - 2014-07-27 00:14:37 --> after setting validation rules.................
DEBUG - 2014-07-27 00:14:37 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2014-07-27 00:14:37 --> XSS Filtering completed
INFO  - 2014-07-27 00:14:37 --> inside retrieve most searched pharmacy
INFO  - 2014-07-27 00:14:37 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 20
INFO  - 2014-07-27 00:14:37 --> inside retrieve most searched pharmacy
INFO  - 2014-07-27 00:14:37 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 20
INFO  - 2014-07-27 00:14:37 --> inside retrieve most searched pharmacy
INFO  - 2014-07-27 00:14:37 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 20
INFO  - 2014-07-27 00:14:37 --> validation is false so error message is returned.................
INFO  - 2014-07-27 00:14:37 --> the form message controller==>-----------------------
INFO  - 2014-07-27 00:14:37 --> the form message==><p>The First Name  field is required.</p>
INFO  - 2014-07-27 00:14:37 --> The session id is ========>f3766b99dfe517709a07349d625f1ce9 and the member id is =======>
INFO  - 2014-07-27 00:14:37 --> after the retrieving session list.................//////////
INFO  - 2014-07-27 00:14:37 --> The session id is ========>f3766b99dfe517709a07349d625f1ce9 and the member id is =======>
DEBUG - 2014-07-27 00:14:37 --> File loaded: ../pharmaray-application/views/old_signin.php
DEBUG - 2014-07-27 00:14:37 --> Final output sent to browser
DEBUG - 2014-07-27 00:14:37 --> Total execution time: 0.0671
DEBUG - 2014-07-27 00:14:42 --> Config Class Initialized
DEBUG - 2014-07-27 00:14:42 --> Hooks Class Initialized
DEBUG - 2014-07-27 00:14:42 --> Utf8 Class Initialized
DEBUG - 2014-07-27 00:14:42 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 00:14:42 --> URI Class Initialized
DEBUG - 2014-07-27 00:14:42 --> Router Class Initialized
DEBUG - 2014-07-27 00:14:42 --> Output Class Initialized
DEBUG - 2014-07-27 00:14:42 --> Security Class Initialized
DEBUG - 2014-07-27 00:14:42 --> Input Class Initialized
DEBUG - 2014-07-27 00:14:42 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 00:14:42 --> Language Class Initialized
DEBUG - 2014-07-27 00:14:42 --> Loader Class Initialized
DEBUG - 2014-07-27 00:14:42 --> Helper loaded: form_helper
DEBUG - 2014-07-27 00:14:42 --> Helper loaded: url_helper
DEBUG - 2014-07-27 00:14:42 --> Helper loaded: html_helper
DEBUG - 2014-07-27 00:14:43 --> Database Driver Class Initialized
ERROR - 2014-07-27 00:14:43 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 00:14:43 --> Session Class Initialized
DEBUG - 2014-07-27 00:14:43 --> Helper loaded: string_helper
DEBUG - 2014-07-27 00:14:43 --> Session routines successfully run
DEBUG - 2014-07-27 00:14:43 --> Form Validation Class Initialized
DEBUG - 2014-07-27 00:14:43 --> Controller Class Initialized
DEBUG - 2014-07-27 00:14:43 --> Model Class Initialized
DEBUG - 2014-07-27 00:14:43 --> Model Class Initialized
DEBUG - 2014-07-27 00:14:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 00:14:43 --> Encrypt Class Initialized
INFO  - 2014-07-27 00:14:43 --> after session initialization................
INFO  - 2014-07-27 00:14:43 --> inside the register member.................
INFO  - 2014-07-27 00:14:43 --> before initializing member array.................
INFO  - 2014-07-27 00:14:43 --> before setting validation rules.................
INFO  - 2014-07-27 00:14:43 --> after setting validation rules.................
DEBUG - 2014-07-27 00:14:43 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2014-07-27 00:14:43 --> XSS Filtering completed
INFO  - 2014-07-27 00:14:43 --> inside retrieve most searched pharmacy
INFO  - 2014-07-27 00:14:43 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 20
INFO  - 2014-07-27 00:14:43 --> inside retrieve most searched pharmacy
INFO  - 2014-07-27 00:14:43 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 20
INFO  - 2014-07-27 00:14:43 --> inside retrieve most searched pharmacy
INFO  - 2014-07-27 00:14:43 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 20
INFO  - 2014-07-27 00:14:43 --> validation is false so error message is returned.................
INFO  - 2014-07-27 00:14:43 --> the form message controller==>-----------------------
INFO  - 2014-07-27 00:14:43 --> the form message==><p>The First Name  field is required.</p>
INFO  - 2014-07-27 00:14:43 --> The session id is ========>f3766b99dfe517709a07349d625f1ce9 and the member id is =======>
INFO  - 2014-07-27 00:14:43 --> after the retrieving session list.................alert-validation//alert-validation//alert-validation//alert-validation//alert-validation//alert-validation
INFO  - 2014-07-27 00:14:43 --> The session id is ========>f3766b99dfe517709a07349d625f1ce9 and the member id is =======>
DEBUG - 2014-07-27 00:14:43 --> File loaded: ../pharmaray-application/views/old_signin.php
DEBUG - 2014-07-27 00:14:43 --> Final output sent to browser
DEBUG - 2014-07-27 00:14:43 --> Total execution time: 0.0625
DEBUG - 2014-07-27 00:15:30 --> Config Class Initialized
DEBUG - 2014-07-27 00:15:30 --> Hooks Class Initialized
DEBUG - 2014-07-27 00:15:30 --> Utf8 Class Initialized
DEBUG - 2014-07-27 00:15:30 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 00:15:30 --> URI Class Initialized
DEBUG - 2014-07-27 00:15:30 --> Router Class Initialized
DEBUG - 2014-07-27 00:15:30 --> Output Class Initialized
DEBUG - 2014-07-27 00:15:30 --> Security Class Initialized
DEBUG - 2014-07-27 00:15:30 --> Input Class Initialized
DEBUG - 2014-07-27 00:15:30 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 00:15:30 --> Language Class Initialized
DEBUG - 2014-07-27 00:15:30 --> Loader Class Initialized
DEBUG - 2014-07-27 00:15:30 --> Helper loaded: form_helper
DEBUG - 2014-07-27 00:15:30 --> Helper loaded: url_helper
DEBUG - 2014-07-27 00:15:30 --> Helper loaded: html_helper
DEBUG - 2014-07-27 00:15:30 --> Database Driver Class Initialized
ERROR - 2014-07-27 00:15:30 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 00:15:30 --> Session Class Initialized
DEBUG - 2014-07-27 00:15:30 --> Helper loaded: string_helper
DEBUG - 2014-07-27 00:15:30 --> Session routines successfully run
DEBUG - 2014-07-27 00:15:30 --> Form Validation Class Initialized
DEBUG - 2014-07-27 00:15:30 --> Controller Class Initialized
DEBUG - 2014-07-27 00:15:30 --> Model Class Initialized
DEBUG - 2014-07-27 00:15:30 --> Model Class Initialized
DEBUG - 2014-07-27 00:15:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 00:15:30 --> Encrypt Class Initialized
INFO  - 2014-07-27 00:15:30 --> after session initialization................
INFO  - 2014-07-27 00:15:30 --> inside the register member.................
INFO  - 2014-07-27 00:15:30 --> before initializing member array.................
INFO  - 2014-07-27 00:15:30 --> before setting validation rules.................
INFO  - 2014-07-27 00:15:30 --> after setting validation rules.................
DEBUG - 2014-07-27 00:15:30 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2014-07-27 00:15:30 --> XSS Filtering completed
DEBUG - 2014-07-27 00:15:30 --> XSS Filtering completed
DEBUG - 2014-07-27 00:15:30 --> XSS Filtering completed
INFO  - 2014-07-27 00:15:30 --> inside retrieve most searched pharmacy
INFO  - 2014-07-27 00:15:30 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 20
INFO  - 2014-07-27 00:15:30 --> inside retrieve most searched pharmacy
INFO  - 2014-07-27 00:15:30 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 20
INFO  - 2014-07-27 00:15:30 --> inside retrieve most searched pharmacy
INFO  - 2014-07-27 00:15:30 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 20
INFO  - 2014-07-27 00:15:30 --> validation is false so error message is returned.................
INFO  - 2014-07-27 00:15:30 --> the form message controller==>-----------------------
INFO  - 2014-07-27 00:15:30 --> the form message==>
INFO  - 2014-07-27 00:15:30 --> The session id is ========>f3766b99dfe517709a07349d625f1ce9 and the member id is =======>
INFO  - 2014-07-27 00:15:30 --> after the retrieving session list.................alert-validation//alert-validation//alert-validation//alert-validation//alert-validation//alert-validation
INFO  - 2014-07-27 00:15:31 --> The session id is ========>f3766b99dfe517709a07349d625f1ce9 and the member id is =======>
DEBUG - 2014-07-27 00:15:31 --> File loaded: ../pharmaray-application/views/old_signin.php
DEBUG - 2014-07-27 00:15:31 --> Final output sent to browser
DEBUG - 2014-07-27 00:15:31 --> Total execution time: 0.0807
DEBUG - 2014-07-27 00:15:40 --> Config Class Initialized
DEBUG - 2014-07-27 00:15:40 --> Hooks Class Initialized
DEBUG - 2014-07-27 00:15:40 --> Utf8 Class Initialized
DEBUG - 2014-07-27 00:15:40 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 00:15:40 --> URI Class Initialized
DEBUG - 2014-07-27 00:15:40 --> Router Class Initialized
DEBUG - 2014-07-27 00:15:40 --> Output Class Initialized
DEBUG - 2014-07-27 00:15:40 --> Security Class Initialized
DEBUG - 2014-07-27 00:15:40 --> Input Class Initialized
DEBUG - 2014-07-27 00:15:40 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 00:15:40 --> Language Class Initialized
DEBUG - 2014-07-27 00:15:40 --> Loader Class Initialized
DEBUG - 2014-07-27 00:15:40 --> Helper loaded: form_helper
DEBUG - 2014-07-27 00:15:40 --> Helper loaded: url_helper
DEBUG - 2014-07-27 00:15:40 --> Helper loaded: html_helper
DEBUG - 2014-07-27 00:15:40 --> Database Driver Class Initialized
ERROR - 2014-07-27 00:15:40 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 00:15:40 --> Session Class Initialized
DEBUG - 2014-07-27 00:15:40 --> Helper loaded: string_helper
DEBUG - 2014-07-27 00:15:40 --> Session routines successfully run
DEBUG - 2014-07-27 00:15:40 --> Form Validation Class Initialized
DEBUG - 2014-07-27 00:15:40 --> Controller Class Initialized
DEBUG - 2014-07-27 00:15:40 --> Model Class Initialized
DEBUG - 2014-07-27 00:15:40 --> Model Class Initialized
DEBUG - 2014-07-27 00:15:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 00:15:40 --> Encrypt Class Initialized
INFO  - 2014-07-27 00:15:40 --> after session initialization................
INFO  - 2014-07-27 00:15:40 --> inside the register member.................
INFO  - 2014-07-27 00:15:40 --> before initializing member array.................
INFO  - 2014-07-27 00:15:40 --> before setting validation rules.................
INFO  - 2014-07-27 00:15:40 --> after setting validation rules.................
DEBUG - 2014-07-27 00:15:40 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2014-07-27 00:15:40 --> XSS Filtering completed
DEBUG - 2014-07-27 00:15:40 --> XSS Filtering completed
DEBUG - 2014-07-27 00:15:40 --> XSS Filtering completed
INFO  - 2014-07-27 00:15:40 --> inside retrieve most searched pharmacy
INFO  - 2014-07-27 00:15:40 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 20
INFO  - 2014-07-27 00:15:40 --> inside retrieve most searched pharmacy
INFO  - 2014-07-27 00:15:40 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 20
INFO  - 2014-07-27 00:15:40 --> inside retrieve most searched pharmacy
INFO  - 2014-07-27 00:15:40 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 20
INFO  - 2014-07-27 00:15:40 --> validation is false so error message is returned.................
INFO  - 2014-07-27 00:15:40 --> the form message controller==>-----------------------
INFO  - 2014-07-27 00:15:40 --> the form message==>
INFO  - 2014-07-27 00:15:40 --> The session id is ========>f3766b99dfe517709a07349d625f1ce9 and the member id is =======>
INFO  - 2014-07-27 00:15:40 --> after the retrieving session list.................success-validation//success-validation//alert-validation//alert-validation//alert-validation//alert-validation
INFO  - 2014-07-27 00:15:40 --> The session id is ========>f3766b99dfe517709a07349d625f1ce9 and the member id is =======>
DEBUG - 2014-07-27 00:15:40 --> File loaded: ../pharmaray-application/views/old_signin.php
DEBUG - 2014-07-27 00:15:40 --> Final output sent to browser
DEBUG - 2014-07-27 00:15:40 --> Total execution time: 0.0703
DEBUG - 2014-07-27 00:15:55 --> Config Class Initialized
DEBUG - 2014-07-27 00:15:55 --> Hooks Class Initialized
DEBUG - 2014-07-27 00:15:55 --> Utf8 Class Initialized
DEBUG - 2014-07-27 00:15:55 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 00:15:55 --> URI Class Initialized
DEBUG - 2014-07-27 00:15:55 --> Router Class Initialized
DEBUG - 2014-07-27 00:15:55 --> Output Class Initialized
DEBUG - 2014-07-27 00:15:55 --> Security Class Initialized
DEBUG - 2014-07-27 00:15:55 --> Input Class Initialized
DEBUG - 2014-07-27 00:15:55 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 00:15:55 --> Language Class Initialized
DEBUG - 2014-07-27 00:15:55 --> Loader Class Initialized
DEBUG - 2014-07-27 00:15:55 --> Helper loaded: form_helper
DEBUG - 2014-07-27 00:15:55 --> Helper loaded: url_helper
DEBUG - 2014-07-27 00:15:55 --> Helper loaded: html_helper
DEBUG - 2014-07-27 00:15:55 --> Database Driver Class Initialized
ERROR - 2014-07-27 00:15:55 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 00:15:55 --> Session Class Initialized
DEBUG - 2014-07-27 00:15:55 --> Helper loaded: string_helper
DEBUG - 2014-07-27 00:15:55 --> Session routines successfully run
DEBUG - 2014-07-27 00:15:55 --> Form Validation Class Initialized
DEBUG - 2014-07-27 00:15:55 --> Controller Class Initialized
DEBUG - 2014-07-27 00:15:55 --> Model Class Initialized
DEBUG - 2014-07-27 00:15:55 --> Model Class Initialized
DEBUG - 2014-07-27 00:15:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 00:15:55 --> Encrypt Class Initialized
INFO  - 2014-07-27 00:15:55 --> after session initialization................
INFO  - 2014-07-27 00:15:55 --> inside the register member.................
INFO  - 2014-07-27 00:15:55 --> before initializing member array.................
INFO  - 2014-07-27 00:15:55 --> before setting validation rules.................
INFO  - 2014-07-27 00:15:55 --> after setting validation rules.................
DEBUG - 2014-07-27 00:15:55 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2014-07-27 00:15:55 --> XSS Filtering completed
DEBUG - 2014-07-27 00:15:55 --> XSS Filtering completed
DEBUG - 2014-07-27 00:15:55 --> XSS Filtering completed
DEBUG - 2014-07-27 00:15:55 --> XSS Filtering completed
DEBUG - 2014-07-27 00:15:55 --> XSS Filtering completed
INFO  - 2014-07-27 00:15:55 --> inside retrieve most searched pharmacy
INFO  - 2014-07-27 00:15:55 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 20
INFO  - 2014-07-27 00:15:55 --> inside retrieve most searched pharmacy
INFO  - 2014-07-27 00:15:55 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 20
INFO  - 2014-07-27 00:15:55 --> inside retrieve most searched pharmacy
INFO  - 2014-07-27 00:15:55 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 20
INFO  - 2014-07-27 00:15:55 --> validation is false so error message is returned.................
INFO  - 2014-07-27 00:15:55 --> the form message controller==>-----------------------
INFO  - 2014-07-27 00:15:55 --> the form message==>
INFO  - 2014-07-27 00:15:55 --> The session id is ========>f3766b99dfe517709a07349d625f1ce9 and the member id is =======>
INFO  - 2014-07-27 00:15:55 --> after the retrieving session list.................success-validation//success-validation//alert-validation//alert-validation//alert-validation//alert-validation
INFO  - 2014-07-27 00:15:55 --> The session id is ========>f3766b99dfe517709a07349d625f1ce9 and the member id is =======>
DEBUG - 2014-07-27 00:15:55 --> File loaded: ../pharmaray-application/views/old_signin.php
DEBUG - 2014-07-27 00:15:55 --> Final output sent to browser
DEBUG - 2014-07-27 00:15:55 --> Total execution time: 0.0553
DEBUG - 2014-07-27 00:15:59 --> Config Class Initialized
DEBUG - 2014-07-27 00:15:59 --> Hooks Class Initialized
DEBUG - 2014-07-27 00:15:59 --> Utf8 Class Initialized
DEBUG - 2014-07-27 00:15:59 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 00:15:59 --> URI Class Initialized
DEBUG - 2014-07-27 00:15:59 --> Router Class Initialized
DEBUG - 2014-07-27 00:15:59 --> Output Class Initialized
DEBUG - 2014-07-27 00:15:59 --> Security Class Initialized
DEBUG - 2014-07-27 00:15:59 --> Input Class Initialized
DEBUG - 2014-07-27 00:15:59 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 00:15:59 --> Language Class Initialized
DEBUG - 2014-07-27 00:15:59 --> Loader Class Initialized
DEBUG - 2014-07-27 00:15:59 --> Helper loaded: form_helper
DEBUG - 2014-07-27 00:15:59 --> Helper loaded: url_helper
DEBUG - 2014-07-27 00:15:59 --> Helper loaded: html_helper
DEBUG - 2014-07-27 00:15:59 --> Database Driver Class Initialized
ERROR - 2014-07-27 00:15:59 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 00:15:59 --> Session Class Initialized
DEBUG - 2014-07-27 00:15:59 --> Helper loaded: string_helper
DEBUG - 2014-07-27 00:15:59 --> Session routines successfully run
DEBUG - 2014-07-27 00:15:59 --> Form Validation Class Initialized
DEBUG - 2014-07-27 00:15:59 --> Controller Class Initialized
DEBUG - 2014-07-27 00:15:59 --> Model Class Initialized
DEBUG - 2014-07-27 00:15:59 --> Model Class Initialized
DEBUG - 2014-07-27 00:15:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 00:15:59 --> Encrypt Class Initialized
INFO  - 2014-07-27 00:15:59 --> after session initialization................
INFO  - 2014-07-27 00:15:59 --> inside the register member.................
INFO  - 2014-07-27 00:15:59 --> before initializing member array.................
INFO  - 2014-07-27 00:15:59 --> before setting validation rules.................
INFO  - 2014-07-27 00:15:59 --> after setting validation rules.................
DEBUG - 2014-07-27 00:15:59 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2014-07-27 00:15:59 --> XSS Filtering completed
DEBUG - 2014-07-27 00:15:59 --> XSS Filtering completed
DEBUG - 2014-07-27 00:15:59 --> XSS Filtering completed
INFO  - 2014-07-27 00:15:59 --> inside retrieve most searched pharmacy
INFO  - 2014-07-27 00:15:59 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 20
INFO  - 2014-07-27 00:15:59 --> inside retrieve most searched pharmacy
INFO  - 2014-07-27 00:15:59 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 20
INFO  - 2014-07-27 00:15:59 --> inside retrieve most searched pharmacy
INFO  - 2014-07-27 00:15:59 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 20
INFO  - 2014-07-27 00:15:59 --> validation is false so error message is returned.................
INFO  - 2014-07-27 00:15:59 --> the form message controller==>-----------------------
INFO  - 2014-07-27 00:15:59 --> the form message==>
INFO  - 2014-07-27 00:15:59 --> The session id is ========>f3766b99dfe517709a07349d625f1ce9 and the member id is =======>
INFO  - 2014-07-27 00:15:59 --> after the retrieving session list.................success-validation//success-validation//success-validation//success-validation//alert-validation//alert-validation
INFO  - 2014-07-27 00:15:59 --> The session id is ========>f3766b99dfe517709a07349d625f1ce9 and the member id is =======>
DEBUG - 2014-07-27 00:15:59 --> File loaded: ../pharmaray-application/views/old_signin.php
DEBUG - 2014-07-27 00:15:59 --> Final output sent to browser
DEBUG - 2014-07-27 00:15:59 --> Total execution time: 0.0767
DEBUG - 2014-07-27 00:16:09 --> Config Class Initialized
DEBUG - 2014-07-27 00:16:09 --> Hooks Class Initialized
DEBUG - 2014-07-27 00:16:09 --> Utf8 Class Initialized
DEBUG - 2014-07-27 00:16:09 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 00:16:09 --> URI Class Initialized
DEBUG - 2014-07-27 00:16:09 --> Router Class Initialized
DEBUG - 2014-07-27 00:16:09 --> Output Class Initialized
DEBUG - 2014-07-27 00:16:09 --> Security Class Initialized
DEBUG - 2014-07-27 00:16:09 --> Input Class Initialized
DEBUG - 2014-07-27 00:16:09 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 00:16:09 --> Language Class Initialized
DEBUG - 2014-07-27 00:16:09 --> Loader Class Initialized
DEBUG - 2014-07-27 00:16:09 --> Helper loaded: form_helper
DEBUG - 2014-07-27 00:16:09 --> Helper loaded: url_helper
DEBUG - 2014-07-27 00:16:09 --> Helper loaded: html_helper
DEBUG - 2014-07-27 00:16:09 --> Database Driver Class Initialized
ERROR - 2014-07-27 00:16:09 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 00:16:09 --> Session Class Initialized
DEBUG - 2014-07-27 00:16:09 --> Helper loaded: string_helper
DEBUG - 2014-07-27 00:16:09 --> Session routines successfully run
DEBUG - 2014-07-27 00:16:09 --> Form Validation Class Initialized
DEBUG - 2014-07-27 00:16:09 --> Controller Class Initialized
DEBUG - 2014-07-27 00:16:09 --> Model Class Initialized
DEBUG - 2014-07-27 00:16:09 --> Model Class Initialized
DEBUG - 2014-07-27 00:16:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 00:16:09 --> Encrypt Class Initialized
INFO  - 2014-07-27 00:16:09 --> after session initialization................
INFO  - 2014-07-27 00:16:09 --> inside the register member.................
INFO  - 2014-07-27 00:16:09 --> before initializing member array.................
INFO  - 2014-07-27 00:16:09 --> before setting validation rules.................
INFO  - 2014-07-27 00:16:09 --> after setting validation rules.................
DEBUG - 2014-07-27 00:16:09 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2014-07-27 00:16:09 --> XSS Filtering completed
DEBUG - 2014-07-27 00:16:09 --> XSS Filtering completed
DEBUG - 2014-07-27 00:16:09 --> XSS Filtering completed
DEBUG - 2014-07-27 00:16:09 --> XSS Filtering completed
DEBUG - 2014-07-27 00:16:09 --> XSS Filtering completed
INFO  - 2014-07-27 00:16:09 --> inside retrieve most searched pharmacy
INFO  - 2014-07-27 00:16:09 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 20
INFO  - 2014-07-27 00:16:09 --> inside retrieve most searched pharmacy
INFO  - 2014-07-27 00:16:09 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 20
INFO  - 2014-07-27 00:16:09 --> inside retrieve most searched pharmacy
INFO  - 2014-07-27 00:16:09 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 20
INFO  - 2014-07-27 00:16:09 --> validation is false so error message is returned.................
INFO  - 2014-07-27 00:16:09 --> the form message controller==>-----------------------
INFO  - 2014-07-27 00:16:09 --> the form message==>
INFO  - 2014-07-27 00:16:09 --> The session id is ========>f3766b99dfe517709a07349d625f1ce9 and the member id is =======>
INFO  - 2014-07-27 00:16:09 --> after the retrieving session list.................success-validation//success-validation//alert-validation//alert-validation//alert-validation//alert-validation
INFO  - 2014-07-27 00:16:09 --> The session id is ========>f3766b99dfe517709a07349d625f1ce9 and the member id is =======>
DEBUG - 2014-07-27 00:16:09 --> File loaded: ../pharmaray-application/views/old_signin.php
DEBUG - 2014-07-27 00:16:09 --> Final output sent to browser
DEBUG - 2014-07-27 00:16:09 --> Total execution time: 0.0832
DEBUG - 2014-07-27 00:16:29 --> Config Class Initialized
DEBUG - 2014-07-27 00:16:29 --> Hooks Class Initialized
DEBUG - 2014-07-27 00:16:29 --> Utf8 Class Initialized
DEBUG - 2014-07-27 00:16:29 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 00:16:29 --> URI Class Initialized
DEBUG - 2014-07-27 00:16:29 --> Router Class Initialized
DEBUG - 2014-07-27 00:16:29 --> Output Class Initialized
DEBUG - 2014-07-27 00:16:29 --> Security Class Initialized
DEBUG - 2014-07-27 00:16:29 --> Input Class Initialized
DEBUG - 2014-07-27 00:16:29 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 00:16:29 --> Language Class Initialized
DEBUG - 2014-07-27 00:16:29 --> Loader Class Initialized
DEBUG - 2014-07-27 00:16:29 --> Helper loaded: form_helper
DEBUG - 2014-07-27 00:16:29 --> Helper loaded: url_helper
DEBUG - 2014-07-27 00:16:29 --> Helper loaded: html_helper
DEBUG - 2014-07-27 00:16:29 --> Database Driver Class Initialized
ERROR - 2014-07-27 00:16:29 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 00:16:29 --> Session Class Initialized
DEBUG - 2014-07-27 00:16:29 --> Helper loaded: string_helper
DEBUG - 2014-07-27 00:16:29 --> Session routines successfully run
DEBUG - 2014-07-27 00:16:29 --> Form Validation Class Initialized
DEBUG - 2014-07-27 00:16:29 --> Controller Class Initialized
DEBUG - 2014-07-27 00:16:29 --> Model Class Initialized
DEBUG - 2014-07-27 00:16:29 --> Model Class Initialized
DEBUG - 2014-07-27 00:16:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 00:16:29 --> Encrypt Class Initialized
INFO  - 2014-07-27 00:16:29 --> after session initialization................
INFO  - 2014-07-27 00:16:29 --> the form message==>
INFO  - 2014-07-27 00:16:29 --> The session id is ========>f3766b99dfe517709a07349d625f1ce9 and the member id is =======>
INFO  - 2014-07-27 00:16:29 --> after the retrieving session list.................success-validation//success-validation//success-validation//success-validation//alert-validation//alert-validation
INFO  - 2014-07-27 00:16:29 --> The session id is ========>f3766b99dfe517709a07349d625f1ce9 and the member id is =======>
DEBUG - 2014-07-27 00:16:29 --> File loaded: ../pharmaray-application/views/old_signin.php
DEBUG - 2014-07-27 00:16:29 --> Final output sent to browser
DEBUG - 2014-07-27 00:16:29 --> Total execution time: 0.0604
DEBUG - 2014-07-27 00:38:41 --> Config Class Initialized
DEBUG - 2014-07-27 00:38:41 --> Hooks Class Initialized
DEBUG - 2014-07-27 00:38:41 --> Utf8 Class Initialized
DEBUG - 2014-07-27 00:38:41 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 00:38:41 --> URI Class Initialized
DEBUG - 2014-07-27 00:38:41 --> Router Class Initialized
DEBUG - 2014-07-27 00:38:41 --> Output Class Initialized
DEBUG - 2014-07-27 00:38:41 --> Security Class Initialized
DEBUG - 2014-07-27 00:38:41 --> Input Class Initialized
DEBUG - 2014-07-27 00:38:41 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 00:38:41 --> Language Class Initialized
DEBUG - 2014-07-27 00:38:41 --> Loader Class Initialized
DEBUG - 2014-07-27 00:38:41 --> Helper loaded: form_helper
DEBUG - 2014-07-27 00:38:41 --> Helper loaded: url_helper
DEBUG - 2014-07-27 00:38:41 --> Helper loaded: html_helper
DEBUG - 2014-07-27 00:38:41 --> Database Driver Class Initialized
ERROR - 2014-07-27 00:38:41 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 00:38:41 --> Session Class Initialized
DEBUG - 2014-07-27 00:38:41 --> Helper loaded: string_helper
DEBUG - 2014-07-27 00:38:41 --> Session routines successfully run
DEBUG - 2014-07-27 00:38:41 --> Form Validation Class Initialized
DEBUG - 2014-07-27 00:38:41 --> Controller Class Initialized
DEBUG - 2014-07-27 00:38:41 --> Model Class Initialized
DEBUG - 2014-07-27 00:38:41 --> Model Class Initialized
DEBUG - 2014-07-27 00:38:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 00:38:41 --> Encrypt Class Initialized
INFO  - 2014-07-27 00:38:41 --> after session initialization................
INFO  - 2014-07-27 00:38:41 --> the form message==>
INFO  - 2014-07-27 00:38:41 --> The session id is ========>1eeadaddb9f70cda3836101a869d3b02 and the member id is =======>
INFO  - 2014-07-27 00:38:41 --> after the retrieving session list.................//////////
INFO  - 2014-07-27 00:38:41 --> The session id is ========>1eeadaddb9f70cda3836101a869d3b02 and the member id is =======>
DEBUG - 2014-07-27 00:38:41 --> File loaded: ../pharmaray-application/views/old_signin.php
DEBUG - 2014-07-27 00:38:41 --> Final output sent to browser
DEBUG - 2014-07-27 00:38:41 --> Total execution time: 0.0742
DEBUG - 2014-07-27 00:38:43 --> Config Class Initialized
DEBUG - 2014-07-27 00:38:43 --> Hooks Class Initialized
DEBUG - 2014-07-27 00:38:43 --> Utf8 Class Initialized
DEBUG - 2014-07-27 00:38:43 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 00:38:43 --> URI Class Initialized
DEBUG - 2014-07-27 00:38:43 --> Router Class Initialized
DEBUG - 2014-07-27 00:38:43 --> Output Class Initialized
DEBUG - 2014-07-27 00:38:43 --> Security Class Initialized
DEBUG - 2014-07-27 00:38:43 --> Input Class Initialized
DEBUG - 2014-07-27 00:38:43 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 00:38:43 --> Language Class Initialized
DEBUG - 2014-07-27 00:38:43 --> Loader Class Initialized
DEBUG - 2014-07-27 00:38:43 --> Helper loaded: form_helper
DEBUG - 2014-07-27 00:38:43 --> Helper loaded: url_helper
DEBUG - 2014-07-27 00:38:43 --> Helper loaded: html_helper
DEBUG - 2014-07-27 00:38:43 --> Database Driver Class Initialized
ERROR - 2014-07-27 00:38:43 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 00:38:43 --> Session Class Initialized
DEBUG - 2014-07-27 00:38:43 --> Helper loaded: string_helper
DEBUG - 2014-07-27 00:38:43 --> Session routines successfully run
DEBUG - 2014-07-27 00:38:43 --> Form Validation Class Initialized
DEBUG - 2014-07-27 00:38:43 --> Controller Class Initialized
DEBUG - 2014-07-27 00:38:43 --> Model Class Initialized
DEBUG - 2014-07-27 00:38:43 --> Model Class Initialized
DEBUG - 2014-07-27 00:38:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 00:38:43 --> Encrypt Class Initialized
INFO  - 2014-07-27 00:38:43 --> after session initialization................
INFO  - 2014-07-27 00:38:43 --> after rays has been clicked.................
INFO  - 2014-07-27 00:38:43 --> last article id is 0
INFO  - 2014-07-27 00:38:43 --> The session id is ========>1eeadaddb9f70cda3836101a869d3b02 and the member id is =======>
INFO  - 2014-07-27 00:38:43 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-07-27 00:38:43 --> 0 the guest only data>>>>>
INFO  - 2014-07-27 00:38:43 --> 0 the guest only data>> AFTER >>>#31
INFO  - 2014-07-27 00:38:43 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-07-27 00:38:43 --> 0 the guest only data>>>>>#31
INFO  - 2014-07-27 00:38:43 --> 0 the guest only data>> AFTER >>>#16
INFO  - 2014-07-27 00:38:43 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-07-27 00:38:43 --> 1 the guest only data>>>>>#16
INFO  - 2014-07-27 00:38:43 --> 1 the guest only data>> AFTER >>>#16
INFO  - 2014-07-27 00:38:43 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-07-27 00:38:43 --> 0 the guest only data>>>>>#16
INFO  - 2014-07-27 00:38:43 --> 0 the guest only data>> AFTER >>>#14
INFO  - 2014-07-27 00:38:43 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-07-27 00:38:43 --> 1 the guest only data>>>>>#14
INFO  - 2014-07-27 00:38:43 --> 1 the guest only data>> AFTER >>>#14
INFO  - 2014-07-27 00:38:43 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-07-27 00:38:43 --> 0 the guest only data>>>>>#14
INFO  - 2014-07-27 00:38:43 --> 0 the guest only data>> AFTER >>>#12
INFO  - 2014-07-27 00:38:43 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-07-27 00:38:43 --> 1 the guest only data>>>>>#12
INFO  - 2014-07-27 00:38:43 --> 1 the guest only data>> AFTER >>>#12
DEBUG - 2014-07-27 00:38:43 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2014-07-27 00:38:43 --> Final output sent to browser
DEBUG - 2014-07-27 00:38:43 --> Total execution time: 0.0854
DEBUG - 2014-07-27 00:38:45 --> Config Class Initialized
DEBUG - 2014-07-27 00:38:45 --> Hooks Class Initialized
DEBUG - 2014-07-27 00:38:45 --> Utf8 Class Initialized
DEBUG - 2014-07-27 00:38:45 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 00:38:45 --> URI Class Initialized
DEBUG - 2014-07-27 00:38:45 --> Router Class Initialized
DEBUG - 2014-07-27 00:38:45 --> Output Class Initialized
DEBUG - 2014-07-27 00:38:45 --> Security Class Initialized
DEBUG - 2014-07-27 00:38:45 --> Input Class Initialized
DEBUG - 2014-07-27 00:38:45 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 00:38:45 --> Language Class Initialized
DEBUG - 2014-07-27 00:38:45 --> Loader Class Initialized
DEBUG - 2014-07-27 00:38:45 --> Helper loaded: form_helper
DEBUG - 2014-07-27 00:38:45 --> Helper loaded: url_helper
DEBUG - 2014-07-27 00:38:45 --> Helper loaded: html_helper
DEBUG - 2014-07-27 00:38:45 --> Database Driver Class Initialized
ERROR - 2014-07-27 00:38:45 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 00:38:45 --> Session Class Initialized
DEBUG - 2014-07-27 00:38:45 --> Helper loaded: string_helper
DEBUG - 2014-07-27 00:38:45 --> Session routines successfully run
DEBUG - 2014-07-27 00:38:45 --> Form Validation Class Initialized
DEBUG - 2014-07-27 00:38:45 --> Controller Class Initialized
DEBUG - 2014-07-27 00:38:45 --> Model Class Initialized
DEBUG - 2014-07-27 00:38:45 --> Model Class Initialized
DEBUG - 2014-07-27 00:38:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 00:38:45 --> Encrypt Class Initialized
INFO  - 2014-07-27 00:38:45 --> after session initialization................
DEBUG - 2014-07-27 00:38:45 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-07-27 00:38:45 --> Final output sent to browser
DEBUG - 2014-07-27 00:38:45 --> Total execution time: 0.0584
DEBUG - 2014-07-27 00:39:03 --> Config Class Initialized
DEBUG - 2014-07-27 00:39:03 --> Hooks Class Initialized
DEBUG - 2014-07-27 00:39:03 --> Utf8 Class Initialized
DEBUG - 2014-07-27 00:39:03 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 00:39:03 --> URI Class Initialized
DEBUG - 2014-07-27 00:39:03 --> Router Class Initialized
DEBUG - 2014-07-27 00:39:03 --> Output Class Initialized
DEBUG - 2014-07-27 00:39:03 --> Security Class Initialized
DEBUG - 2014-07-27 00:39:03 --> Input Class Initialized
DEBUG - 2014-07-27 00:39:03 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 00:39:03 --> Language Class Initialized
DEBUG - 2014-07-27 00:39:03 --> Loader Class Initialized
DEBUG - 2014-07-27 00:39:03 --> Helper loaded: form_helper
DEBUG - 2014-07-27 00:39:03 --> Helper loaded: url_helper
DEBUG - 2014-07-27 00:39:03 --> Helper loaded: html_helper
DEBUG - 2014-07-27 00:39:03 --> Database Driver Class Initialized
ERROR - 2014-07-27 00:39:03 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 00:39:03 --> Session Class Initialized
DEBUG - 2014-07-27 00:39:03 --> Helper loaded: string_helper
DEBUG - 2014-07-27 00:39:03 --> Session routines successfully run
DEBUG - 2014-07-27 00:39:03 --> Form Validation Class Initialized
DEBUG - 2014-07-27 00:39:03 --> Controller Class Initialized
DEBUG - 2014-07-27 00:39:03 --> Model Class Initialized
DEBUG - 2014-07-27 00:39:03 --> Model Class Initialized
DEBUG - 2014-07-27 00:39:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 00:39:03 --> Encrypt Class Initialized
INFO  - 2014-07-27 00:39:03 --> after session initialization................
DEBUG - 2014-07-27 00:39:03 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-07-27 00:39:03 --> Final output sent to browser
DEBUG - 2014-07-27 00:39:03 --> Total execution time: 0.0486
DEBUG - 2014-07-27 00:41:27 --> Config Class Initialized
DEBUG - 2014-07-27 00:41:27 --> Hooks Class Initialized
DEBUG - 2014-07-27 00:41:27 --> Utf8 Class Initialized
DEBUG - 2014-07-27 00:41:27 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 00:41:27 --> URI Class Initialized
DEBUG - 2014-07-27 00:41:27 --> Router Class Initialized
DEBUG - 2014-07-27 00:41:27 --> Output Class Initialized
DEBUG - 2014-07-27 00:41:27 --> Security Class Initialized
DEBUG - 2014-07-27 00:41:27 --> Input Class Initialized
DEBUG - 2014-07-27 00:41:27 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 00:41:27 --> Language Class Initialized
DEBUG - 2014-07-27 00:41:27 --> Loader Class Initialized
DEBUG - 2014-07-27 00:41:27 --> Helper loaded: form_helper
DEBUG - 2014-07-27 00:41:27 --> Helper loaded: url_helper
DEBUG - 2014-07-27 00:41:27 --> Helper loaded: html_helper
DEBUG - 2014-07-27 00:41:27 --> Database Driver Class Initialized
ERROR - 2014-07-27 00:41:27 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 00:41:27 --> Session Class Initialized
DEBUG - 2014-07-27 00:41:27 --> Helper loaded: string_helper
DEBUG - 2014-07-27 00:41:27 --> Session routines successfully run
DEBUG - 2014-07-27 00:41:27 --> Form Validation Class Initialized
DEBUG - 2014-07-27 00:41:27 --> Controller Class Initialized
DEBUG - 2014-07-27 00:41:27 --> Model Class Initialized
DEBUG - 2014-07-27 00:41:27 --> Model Class Initialized
DEBUG - 2014-07-27 00:41:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 00:41:27 --> Encrypt Class Initialized
INFO  - 2014-07-27 00:41:27 --> after session initialization................
DEBUG - 2014-07-27 00:41:27 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-07-27 00:41:27 --> Final output sent to browser
DEBUG - 2014-07-27 00:41:27 --> Total execution time: 0.0473
DEBUG - 2014-07-27 00:42:15 --> Config Class Initialized
DEBUG - 2014-07-27 00:42:15 --> Hooks Class Initialized
DEBUG - 2014-07-27 00:42:15 --> Utf8 Class Initialized
DEBUG - 2014-07-27 00:42:15 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 00:42:15 --> URI Class Initialized
DEBUG - 2014-07-27 00:42:15 --> Router Class Initialized
DEBUG - 2014-07-27 00:42:15 --> Output Class Initialized
DEBUG - 2014-07-27 00:42:15 --> Security Class Initialized
DEBUG - 2014-07-27 00:42:15 --> Input Class Initialized
DEBUG - 2014-07-27 00:42:15 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 00:42:15 --> Language Class Initialized
DEBUG - 2014-07-27 00:42:15 --> Loader Class Initialized
DEBUG - 2014-07-27 00:42:15 --> Helper loaded: form_helper
DEBUG - 2014-07-27 00:42:15 --> Helper loaded: url_helper
DEBUG - 2014-07-27 00:42:15 --> Helper loaded: html_helper
DEBUG - 2014-07-27 00:42:15 --> Database Driver Class Initialized
ERROR - 2014-07-27 00:42:15 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 00:42:15 --> Session Class Initialized
DEBUG - 2014-07-27 00:42:15 --> Helper loaded: string_helper
DEBUG - 2014-07-27 00:42:15 --> Session routines successfully run
DEBUG - 2014-07-27 00:42:15 --> Form Validation Class Initialized
DEBUG - 2014-07-27 00:42:15 --> Controller Class Initialized
DEBUG - 2014-07-27 00:42:15 --> Model Class Initialized
DEBUG - 2014-07-27 00:42:15 --> Model Class Initialized
DEBUG - 2014-07-27 00:42:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 00:42:15 --> Encrypt Class Initialized
INFO  - 2014-07-27 00:42:15 --> after session initialization................
DEBUG - 2014-07-27 00:42:15 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-07-27 00:42:15 --> Final output sent to browser
DEBUG - 2014-07-27 00:42:15 --> Total execution time: 0.0440
DEBUG - 2014-07-27 00:44:40 --> Config Class Initialized
DEBUG - 2014-07-27 00:44:40 --> Hooks Class Initialized
DEBUG - 2014-07-27 00:44:40 --> Utf8 Class Initialized
DEBUG - 2014-07-27 00:44:40 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 00:44:40 --> URI Class Initialized
DEBUG - 2014-07-27 00:44:40 --> Router Class Initialized
DEBUG - 2014-07-27 00:44:40 --> Output Class Initialized
DEBUG - 2014-07-27 00:44:40 --> Security Class Initialized
DEBUG - 2014-07-27 00:44:40 --> Input Class Initialized
DEBUG - 2014-07-27 00:44:40 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 00:44:40 --> Language Class Initialized
DEBUG - 2014-07-27 00:44:40 --> Loader Class Initialized
DEBUG - 2014-07-27 00:44:40 --> Helper loaded: form_helper
DEBUG - 2014-07-27 00:44:40 --> Helper loaded: url_helper
DEBUG - 2014-07-27 00:44:40 --> Helper loaded: html_helper
DEBUG - 2014-07-27 00:44:40 --> Database Driver Class Initialized
ERROR - 2014-07-27 00:44:40 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 00:44:40 --> Session Class Initialized
DEBUG - 2014-07-27 00:44:40 --> Helper loaded: string_helper
DEBUG - 2014-07-27 00:44:40 --> Session routines successfully run
DEBUG - 2014-07-27 00:44:40 --> Form Validation Class Initialized
DEBUG - 2014-07-27 00:44:40 --> Controller Class Initialized
DEBUG - 2014-07-27 00:44:40 --> Model Class Initialized
DEBUG - 2014-07-27 00:44:40 --> Model Class Initialized
DEBUG - 2014-07-27 00:44:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 00:44:40 --> Encrypt Class Initialized
INFO  - 2014-07-27 00:44:40 --> after session initialization................
DEBUG - 2014-07-27 00:44:40 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-07-27 00:44:40 --> Final output sent to browser
DEBUG - 2014-07-27 00:44:40 --> Total execution time: 0.0495
DEBUG - 2014-07-27 00:44:51 --> Config Class Initialized
DEBUG - 2014-07-27 00:44:51 --> Hooks Class Initialized
DEBUG - 2014-07-27 00:44:51 --> Utf8 Class Initialized
DEBUG - 2014-07-27 00:44:51 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 00:44:51 --> URI Class Initialized
DEBUG - 2014-07-27 00:44:51 --> Router Class Initialized
DEBUG - 2014-07-27 00:44:51 --> Output Class Initialized
DEBUG - 2014-07-27 00:44:51 --> Security Class Initialized
DEBUG - 2014-07-27 00:44:51 --> Input Class Initialized
DEBUG - 2014-07-27 00:44:51 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 00:44:51 --> Language Class Initialized
DEBUG - 2014-07-27 00:44:51 --> Loader Class Initialized
DEBUG - 2014-07-27 00:44:51 --> Helper loaded: form_helper
DEBUG - 2014-07-27 00:44:51 --> Helper loaded: url_helper
DEBUG - 2014-07-27 00:44:51 --> Helper loaded: html_helper
DEBUG - 2014-07-27 00:44:51 --> Database Driver Class Initialized
ERROR - 2014-07-27 00:44:51 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 00:44:51 --> Session Class Initialized
DEBUG - 2014-07-27 00:44:51 --> Helper loaded: string_helper
DEBUG - 2014-07-27 00:44:51 --> Session routines successfully run
DEBUG - 2014-07-27 00:44:51 --> Form Validation Class Initialized
DEBUG - 2014-07-27 00:44:51 --> Controller Class Initialized
DEBUG - 2014-07-27 00:44:51 --> Model Class Initialized
DEBUG - 2014-07-27 00:44:51 --> Model Class Initialized
DEBUG - 2014-07-27 00:44:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 00:44:51 --> Encrypt Class Initialized
INFO  - 2014-07-27 00:44:51 --> after session initialization................
DEBUG - 2014-07-27 00:44:51 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-07-27 00:44:51 --> Final output sent to browser
DEBUG - 2014-07-27 00:44:51 --> Total execution time: 0.0321
DEBUG - 2014-07-27 00:45:41 --> Config Class Initialized
DEBUG - 2014-07-27 00:45:41 --> Hooks Class Initialized
DEBUG - 2014-07-27 00:45:41 --> Utf8 Class Initialized
DEBUG - 2014-07-27 00:45:41 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 00:45:41 --> URI Class Initialized
DEBUG - 2014-07-27 00:45:41 --> Router Class Initialized
DEBUG - 2014-07-27 00:45:41 --> Output Class Initialized
DEBUG - 2014-07-27 00:45:41 --> Security Class Initialized
DEBUG - 2014-07-27 00:45:41 --> Input Class Initialized
DEBUG - 2014-07-27 00:45:41 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 00:45:41 --> Language Class Initialized
DEBUG - 2014-07-27 00:45:41 --> Loader Class Initialized
DEBUG - 2014-07-27 00:45:41 --> Helper loaded: form_helper
DEBUG - 2014-07-27 00:45:41 --> Helper loaded: url_helper
DEBUG - 2014-07-27 00:45:41 --> Helper loaded: html_helper
DEBUG - 2014-07-27 00:45:41 --> Database Driver Class Initialized
ERROR - 2014-07-27 00:45:41 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 00:45:41 --> Session Class Initialized
DEBUG - 2014-07-27 00:45:41 --> Helper loaded: string_helper
DEBUG - 2014-07-27 00:45:41 --> Session routines successfully run
DEBUG - 2014-07-27 00:45:41 --> Form Validation Class Initialized
DEBUG - 2014-07-27 00:45:41 --> Controller Class Initialized
DEBUG - 2014-07-27 00:45:41 --> Model Class Initialized
DEBUG - 2014-07-27 00:45:41 --> Model Class Initialized
DEBUG - 2014-07-27 00:45:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 00:45:41 --> Encrypt Class Initialized
INFO  - 2014-07-27 00:45:41 --> after session initialization................
INFO  - 2014-07-27 00:45:41 --> the form message==>
INFO  - 2014-07-27 00:45:41 --> The session id is ========>c437894115f3ed5c48ebe54c773a4835 and the member id is =======>
INFO  - 2014-07-27 00:45:41 --> after the retrieving session list.................//////////
INFO  - 2014-07-27 00:45:41 --> The session id is ========>c437894115f3ed5c48ebe54c773a4835 and the member id is =======>
DEBUG - 2014-07-27 00:45:41 --> File loaded: ../pharmaray-application/views/old_signin.php
DEBUG - 2014-07-27 00:45:41 --> Final output sent to browser
DEBUG - 2014-07-27 00:45:41 --> Total execution time: 0.0945
DEBUG - 2014-07-27 00:45:43 --> Config Class Initialized
DEBUG - 2014-07-27 00:45:43 --> Hooks Class Initialized
DEBUG - 2014-07-27 00:45:43 --> Utf8 Class Initialized
DEBUG - 2014-07-27 00:45:43 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 00:45:43 --> URI Class Initialized
DEBUG - 2014-07-27 00:45:43 --> Router Class Initialized
DEBUG - 2014-07-27 00:45:43 --> Output Class Initialized
DEBUG - 2014-07-27 00:45:43 --> Security Class Initialized
DEBUG - 2014-07-27 00:45:43 --> Input Class Initialized
DEBUG - 2014-07-27 00:45:43 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 00:45:43 --> Language Class Initialized
DEBUG - 2014-07-27 00:45:43 --> Loader Class Initialized
DEBUG - 2014-07-27 00:45:43 --> Helper loaded: form_helper
DEBUG - 2014-07-27 00:45:43 --> Helper loaded: url_helper
DEBUG - 2014-07-27 00:45:43 --> Helper loaded: html_helper
DEBUG - 2014-07-27 00:45:43 --> Database Driver Class Initialized
ERROR - 2014-07-27 00:45:43 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 00:45:43 --> Session Class Initialized
DEBUG - 2014-07-27 00:45:43 --> Helper loaded: string_helper
DEBUG - 2014-07-27 00:45:43 --> Session routines successfully run
DEBUG - 2014-07-27 00:45:43 --> Form Validation Class Initialized
DEBUG - 2014-07-27 00:45:43 --> Controller Class Initialized
DEBUG - 2014-07-27 00:45:43 --> Model Class Initialized
DEBUG - 2014-07-27 00:45:43 --> Model Class Initialized
DEBUG - 2014-07-27 00:45:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 00:45:43 --> Encrypt Class Initialized
INFO  - 2014-07-27 00:45:43 --> after session initialization................
INFO  - 2014-07-27 00:45:43 --> the form message==>
INFO  - 2014-07-27 00:45:43 --> The session id is ========>c437894115f3ed5c48ebe54c773a4835 and the member id is =======>
INFO  - 2014-07-27 00:45:43 --> after the retrieving session list.................//////////
INFO  - 2014-07-27 00:45:43 --> The session id is ========>c437894115f3ed5c48ebe54c773a4835 and the member id is =======>
DEBUG - 2014-07-27 00:45:43 --> File loaded: ../pharmaray-application/views/old_signin.php
DEBUG - 2014-07-27 00:45:43 --> Final output sent to browser
DEBUG - 2014-07-27 00:45:43 --> Total execution time: 0.0582
DEBUG - 2014-07-27 00:45:45 --> Config Class Initialized
DEBUG - 2014-07-27 00:45:45 --> Hooks Class Initialized
DEBUG - 2014-07-27 00:45:45 --> Utf8 Class Initialized
DEBUG - 2014-07-27 00:45:45 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 00:45:45 --> URI Class Initialized
DEBUG - 2014-07-27 00:45:45 --> Router Class Initialized
DEBUG - 2014-07-27 00:45:45 --> Output Class Initialized
DEBUG - 2014-07-27 00:45:45 --> Security Class Initialized
DEBUG - 2014-07-27 00:45:45 --> Input Class Initialized
DEBUG - 2014-07-27 00:45:45 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 00:45:45 --> Language Class Initialized
DEBUG - 2014-07-27 00:45:45 --> Loader Class Initialized
DEBUG - 2014-07-27 00:45:45 --> Helper loaded: form_helper
DEBUG - 2014-07-27 00:45:45 --> Helper loaded: url_helper
DEBUG - 2014-07-27 00:45:45 --> Helper loaded: html_helper
DEBUG - 2014-07-27 00:45:45 --> Database Driver Class Initialized
ERROR - 2014-07-27 00:45:45 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 00:45:45 --> Session Class Initialized
DEBUG - 2014-07-27 00:45:45 --> Helper loaded: string_helper
DEBUG - 2014-07-27 00:45:45 --> Session routines successfully run
DEBUG - 2014-07-27 00:45:45 --> Form Validation Class Initialized
DEBUG - 2014-07-27 00:45:45 --> Controller Class Initialized
DEBUG - 2014-07-27 00:45:45 --> Model Class Initialized
DEBUG - 2014-07-27 00:45:45 --> Model Class Initialized
DEBUG - 2014-07-27 00:45:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 00:45:45 --> Encrypt Class Initialized
INFO  - 2014-07-27 00:45:45 --> after session initialization................
INFO  - 2014-07-27 00:45:45 --> after rays has been clicked.................
INFO  - 2014-07-27 00:45:45 --> last article id is 0
INFO  - 2014-07-27 00:45:45 --> The session id is ========>c437894115f3ed5c48ebe54c773a4835 and the member id is =======>
INFO  - 2014-07-27 00:45:45 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-07-27 00:45:45 --> 0 the guest only data>>>>>
INFO  - 2014-07-27 00:45:45 --> 0 the guest only data>> AFTER >>>#31
INFO  - 2014-07-27 00:45:45 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-07-27 00:45:45 --> 0 the guest only data>>>>>#31
INFO  - 2014-07-27 00:45:45 --> 0 the guest only data>> AFTER >>>#16
INFO  - 2014-07-27 00:45:45 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-07-27 00:45:45 --> 1 the guest only data>>>>>#16
INFO  - 2014-07-27 00:45:45 --> 1 the guest only data>> AFTER >>>#16
INFO  - 2014-07-27 00:45:45 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-07-27 00:45:45 --> 0 the guest only data>>>>>#16
INFO  - 2014-07-27 00:45:45 --> 0 the guest only data>> AFTER >>>#14
INFO  - 2014-07-27 00:45:45 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-07-27 00:45:45 --> 1 the guest only data>>>>>#14
INFO  - 2014-07-27 00:45:45 --> 1 the guest only data>> AFTER >>>#14
INFO  - 2014-07-27 00:45:45 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-07-27 00:45:45 --> 0 the guest only data>>>>>#14
INFO  - 2014-07-27 00:45:45 --> 0 the guest only data>> AFTER >>>#12
INFO  - 2014-07-27 00:45:45 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-07-27 00:45:45 --> 1 the guest only data>>>>>#12
INFO  - 2014-07-27 00:45:45 --> 1 the guest only data>> AFTER >>>#12
DEBUG - 2014-07-27 00:45:45 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2014-07-27 00:45:45 --> Final output sent to browser
DEBUG - 2014-07-27 00:45:45 --> Total execution time: 0.0518
DEBUG - 2014-07-27 00:45:46 --> Config Class Initialized
DEBUG - 2014-07-27 00:45:46 --> Hooks Class Initialized
DEBUG - 2014-07-27 00:45:46 --> Utf8 Class Initialized
DEBUG - 2014-07-27 00:45:46 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 00:45:46 --> URI Class Initialized
DEBUG - 2014-07-27 00:45:46 --> Router Class Initialized
DEBUG - 2014-07-27 00:45:46 --> Output Class Initialized
DEBUG - 2014-07-27 00:45:46 --> Security Class Initialized
DEBUG - 2014-07-27 00:45:46 --> Input Class Initialized
DEBUG - 2014-07-27 00:45:46 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 00:45:46 --> Language Class Initialized
DEBUG - 2014-07-27 00:45:46 --> Loader Class Initialized
DEBUG - 2014-07-27 00:45:46 --> Helper loaded: form_helper
DEBUG - 2014-07-27 00:45:46 --> Helper loaded: url_helper
DEBUG - 2014-07-27 00:45:46 --> Helper loaded: html_helper
DEBUG - 2014-07-27 00:45:46 --> Database Driver Class Initialized
ERROR - 2014-07-27 00:45:46 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 00:45:46 --> Session Class Initialized
DEBUG - 2014-07-27 00:45:46 --> Helper loaded: string_helper
DEBUG - 2014-07-27 00:45:46 --> Session routines successfully run
DEBUG - 2014-07-27 00:45:46 --> Form Validation Class Initialized
DEBUG - 2014-07-27 00:45:46 --> Controller Class Initialized
DEBUG - 2014-07-27 00:45:46 --> Model Class Initialized
DEBUG - 2014-07-27 00:45:46 --> Model Class Initialized
DEBUG - 2014-07-27 00:45:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 00:45:46 --> Encrypt Class Initialized
INFO  - 2014-07-27 00:45:46 --> after session initialization................
DEBUG - 2014-07-27 00:45:46 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-07-27 00:45:46 --> Final output sent to browser
DEBUG - 2014-07-27 00:45:46 --> Total execution time: 0.0490
DEBUG - 2014-07-27 00:45:48 --> Config Class Initialized
DEBUG - 2014-07-27 00:45:48 --> Hooks Class Initialized
DEBUG - 2014-07-27 00:45:48 --> Utf8 Class Initialized
DEBUG - 2014-07-27 00:45:48 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 00:45:48 --> URI Class Initialized
DEBUG - 2014-07-27 00:45:48 --> Router Class Initialized
DEBUG - 2014-07-27 00:45:48 --> Output Class Initialized
DEBUG - 2014-07-27 00:45:48 --> Security Class Initialized
DEBUG - 2014-07-27 00:45:48 --> Input Class Initialized
DEBUG - 2014-07-27 00:45:48 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 00:45:48 --> Language Class Initialized
DEBUG - 2014-07-27 00:45:48 --> Loader Class Initialized
DEBUG - 2014-07-27 00:45:48 --> Helper loaded: form_helper
DEBUG - 2014-07-27 00:45:48 --> Helper loaded: url_helper
DEBUG - 2014-07-27 00:45:48 --> Helper loaded: html_helper
DEBUG - 2014-07-27 00:45:48 --> Database Driver Class Initialized
ERROR - 2014-07-27 00:45:48 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 00:45:48 --> Session Class Initialized
DEBUG - 2014-07-27 00:45:48 --> Helper loaded: string_helper
DEBUG - 2014-07-27 00:45:48 --> Session routines successfully run
DEBUG - 2014-07-27 00:45:48 --> Form Validation Class Initialized
DEBUG - 2014-07-27 00:45:48 --> Controller Class Initialized
DEBUG - 2014-07-27 00:45:48 --> Model Class Initialized
DEBUG - 2014-07-27 00:45:48 --> Model Class Initialized
DEBUG - 2014-07-27 00:45:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 00:45:48 --> Encrypt Class Initialized
INFO  - 2014-07-27 00:45:48 --> after session initialization................
INFO  - 2014-07-27 00:45:48 --> inside the register member.................
INFO  - 2014-07-27 00:45:48 --> before initializing member array.................
INFO  - 2014-07-27 00:45:48 --> before setting validation rules.................
INFO  - 2014-07-27 00:45:48 --> after setting validation rules.................
DEBUG - 2014-07-27 00:45:48 --> Language file loaded: language/english/form_validation_lang.php
INFO  - 2014-07-27 00:45:48 --> validation is false so error message is returned.................
INFO  - 2014-07-27 00:45:48 --> the form message controller==><p>The Date of birth *  field is required.</p>------<p>The Date of birth *  field is required.</p>--------<p>The Month of birth  field is required.</p>---------<p>The Year of birth *  field is required.</p>
INFO  - 2014-07-27 00:45:48 --> the form message==><p>The First Name  field is required.</p>
INFO  - 2014-07-27 00:45:48 --> The session id is ========>c437894115f3ed5c48ebe54c773a4835 and the member id is =======>
INFO  - 2014-07-27 00:45:48 --> after the retrieving session list.................//////////
INFO  - 2014-07-27 00:45:48 --> The session id is ========>c437894115f3ed5c48ebe54c773a4835 and the member id is =======>
DEBUG - 2014-07-27 00:45:48 --> File loaded: ../pharmaray-application/views/old_signin.php
DEBUG - 2014-07-27 00:45:48 --> Final output sent to browser
DEBUG - 2014-07-27 00:45:48 --> Total execution time: 0.0658
DEBUG - 2014-07-27 00:46:13 --> Config Class Initialized
DEBUG - 2014-07-27 00:46:13 --> Hooks Class Initialized
DEBUG - 2014-07-27 00:46:13 --> Utf8 Class Initialized
DEBUG - 2014-07-27 00:46:13 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 00:46:13 --> URI Class Initialized
DEBUG - 2014-07-27 00:46:13 --> Router Class Initialized
DEBUG - 2014-07-27 00:46:13 --> Output Class Initialized
DEBUG - 2014-07-27 00:46:13 --> Security Class Initialized
DEBUG - 2014-07-27 00:46:13 --> Input Class Initialized
DEBUG - 2014-07-27 00:46:13 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 00:46:13 --> Language Class Initialized
DEBUG - 2014-07-27 00:46:13 --> Loader Class Initialized
DEBUG - 2014-07-27 00:46:13 --> Helper loaded: form_helper
DEBUG - 2014-07-27 00:46:13 --> Helper loaded: url_helper
DEBUG - 2014-07-27 00:46:13 --> Helper loaded: html_helper
DEBUG - 2014-07-27 00:46:13 --> Database Driver Class Initialized
ERROR - 2014-07-27 00:46:13 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 00:46:13 --> Session Class Initialized
DEBUG - 2014-07-27 00:46:13 --> Helper loaded: string_helper
DEBUG - 2014-07-27 00:46:13 --> Session routines successfully run
DEBUG - 2014-07-27 00:46:13 --> Form Validation Class Initialized
DEBUG - 2014-07-27 00:46:13 --> Controller Class Initialized
DEBUG - 2014-07-27 00:46:13 --> Model Class Initialized
DEBUG - 2014-07-27 00:46:13 --> Model Class Initialized
DEBUG - 2014-07-27 00:46:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 00:46:13 --> Encrypt Class Initialized
INFO  - 2014-07-27 00:46:13 --> after session initialization................
INFO  - 2014-07-27 00:46:13 --> after rays has been clicked.................
INFO  - 2014-07-27 00:46:13 --> last article id is 0
INFO  - 2014-07-27 00:46:13 --> The session id is ========>c437894115f3ed5c48ebe54c773a4835 and the member id is =======>
INFO  - 2014-07-27 00:46:13 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-07-27 00:46:13 --> 0 the guest only data>>>>>
INFO  - 2014-07-27 00:46:13 --> 0 the guest only data>> AFTER >>>#31
INFO  - 2014-07-27 00:46:13 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-07-27 00:46:13 --> 0 the guest only data>>>>>#31
INFO  - 2014-07-27 00:46:13 --> 0 the guest only data>> AFTER >>>#16
INFO  - 2014-07-27 00:46:13 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-07-27 00:46:13 --> 1 the guest only data>>>>>#16
INFO  - 2014-07-27 00:46:13 --> 1 the guest only data>> AFTER >>>#16
INFO  - 2014-07-27 00:46:13 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-07-27 00:46:13 --> 0 the guest only data>>>>>#16
INFO  - 2014-07-27 00:46:13 --> 0 the guest only data>> AFTER >>>#14
INFO  - 2014-07-27 00:46:13 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-07-27 00:46:13 --> 1 the guest only data>>>>>#14
INFO  - 2014-07-27 00:46:13 --> 1 the guest only data>> AFTER >>>#14
INFO  - 2014-07-27 00:46:13 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-07-27 00:46:13 --> 0 the guest only data>>>>>#14
INFO  - 2014-07-27 00:46:13 --> 0 the guest only data>> AFTER >>>#12
INFO  - 2014-07-27 00:46:13 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-07-27 00:46:13 --> 1 the guest only data>>>>>#12
INFO  - 2014-07-27 00:46:13 --> 1 the guest only data>> AFTER >>>#12
DEBUG - 2014-07-27 00:46:13 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2014-07-27 00:46:13 --> Final output sent to browser
DEBUG - 2014-07-27 00:46:13 --> Total execution time: 0.0579
DEBUG - 2014-07-27 00:46:15 --> Config Class Initialized
DEBUG - 2014-07-27 00:46:15 --> Hooks Class Initialized
DEBUG - 2014-07-27 00:46:15 --> Utf8 Class Initialized
DEBUG - 2014-07-27 00:46:15 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 00:46:15 --> URI Class Initialized
DEBUG - 2014-07-27 00:46:15 --> Router Class Initialized
DEBUG - 2014-07-27 00:46:15 --> Output Class Initialized
DEBUG - 2014-07-27 00:46:15 --> Security Class Initialized
DEBUG - 2014-07-27 00:46:15 --> Input Class Initialized
DEBUG - 2014-07-27 00:46:15 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 00:46:15 --> Language Class Initialized
DEBUG - 2014-07-27 00:46:15 --> Loader Class Initialized
DEBUG - 2014-07-27 00:46:15 --> Helper loaded: form_helper
DEBUG - 2014-07-27 00:46:15 --> Helper loaded: url_helper
DEBUG - 2014-07-27 00:46:15 --> Helper loaded: html_helper
DEBUG - 2014-07-27 00:46:15 --> Database Driver Class Initialized
ERROR - 2014-07-27 00:46:15 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 00:46:15 --> Session Class Initialized
DEBUG - 2014-07-27 00:46:15 --> Helper loaded: string_helper
DEBUG - 2014-07-27 00:46:15 --> Session routines successfully run
DEBUG - 2014-07-27 00:46:15 --> Form Validation Class Initialized
DEBUG - 2014-07-27 00:46:15 --> Controller Class Initialized
DEBUG - 2014-07-27 00:46:15 --> Model Class Initialized
DEBUG - 2014-07-27 00:46:15 --> Model Class Initialized
DEBUG - 2014-07-27 00:46:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 00:46:15 --> Encrypt Class Initialized
INFO  - 2014-07-27 00:46:15 --> after session initialization................
INFO  - 2014-07-27 00:46:15 --> the form message==>
INFO  - 2014-07-27 00:46:15 --> The session id is ========>c437894115f3ed5c48ebe54c773a4835 and the member id is =======>
INFO  - 2014-07-27 00:46:15 --> after the retrieving session list.................//////////
INFO  - 2014-07-27 00:46:15 --> The session id is ========>c437894115f3ed5c48ebe54c773a4835 and the member id is =======>
DEBUG - 2014-07-27 00:46:15 --> File loaded: ../pharmaray-application/views/login.php
DEBUG - 2014-07-27 00:46:15 --> Final output sent to browser
DEBUG - 2014-07-27 00:46:15 --> Total execution time: 0.0508
DEBUG - 2014-07-27 00:46:16 --> Config Class Initialized
DEBUG - 2014-07-27 00:46:16 --> Hooks Class Initialized
DEBUG - 2014-07-27 00:46:16 --> Utf8 Class Initialized
DEBUG - 2014-07-27 00:46:16 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 00:46:16 --> URI Class Initialized
DEBUG - 2014-07-27 00:46:16 --> Router Class Initialized
DEBUG - 2014-07-27 00:46:16 --> Output Class Initialized
DEBUG - 2014-07-27 00:46:16 --> Security Class Initialized
DEBUG - 2014-07-27 00:46:16 --> Input Class Initialized
DEBUG - 2014-07-27 00:46:16 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 00:46:16 --> Language Class Initialized
DEBUG - 2014-07-27 00:46:16 --> Loader Class Initialized
DEBUG - 2014-07-27 00:46:16 --> Helper loaded: form_helper
DEBUG - 2014-07-27 00:46:16 --> Helper loaded: url_helper
DEBUG - 2014-07-27 00:46:16 --> Helper loaded: html_helper
DEBUG - 2014-07-27 00:46:16 --> Database Driver Class Initialized
ERROR - 2014-07-27 00:46:16 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 00:46:16 --> Session Class Initialized
DEBUG - 2014-07-27 00:46:16 --> Helper loaded: string_helper
DEBUG - 2014-07-27 00:46:16 --> Session routines successfully run
DEBUG - 2014-07-27 00:46:16 --> Form Validation Class Initialized
DEBUG - 2014-07-27 00:46:16 --> Controller Class Initialized
DEBUG - 2014-07-27 00:46:16 --> Model Class Initialized
DEBUG - 2014-07-27 00:46:16 --> Model Class Initialized
DEBUG - 2014-07-27 00:46:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 00:46:16 --> Encrypt Class Initialized
INFO  - 2014-07-27 00:46:16 --> after session initialization................
INFO  - 2014-07-27 00:46:16 --> after rays has been clicked.................
INFO  - 2014-07-27 00:46:16 --> last article id is 0
INFO  - 2014-07-27 00:46:16 --> The session id is ========>c437894115f3ed5c48ebe54c773a4835 and the member id is =======>
INFO  - 2014-07-27 00:46:16 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-07-27 00:46:16 --> 0 the guest only data>>>>>
INFO  - 2014-07-27 00:46:16 --> 0 the guest only data>> AFTER >>>#31
INFO  - 2014-07-27 00:46:16 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-07-27 00:46:16 --> 0 the guest only data>>>>>#31
INFO  - 2014-07-27 00:46:16 --> 0 the guest only data>> AFTER >>>#16
INFO  - 2014-07-27 00:46:16 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-07-27 00:46:16 --> 1 the guest only data>>>>>#16
INFO  - 2014-07-27 00:46:16 --> 1 the guest only data>> AFTER >>>#16
INFO  - 2014-07-27 00:46:16 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-07-27 00:46:16 --> 0 the guest only data>>>>>#16
INFO  - 2014-07-27 00:46:16 --> 0 the guest only data>> AFTER >>>#14
INFO  - 2014-07-27 00:46:16 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-07-27 00:46:16 --> 1 the guest only data>>>>>#14
INFO  - 2014-07-27 00:46:16 --> 1 the guest only data>> AFTER >>>#14
INFO  - 2014-07-27 00:46:16 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-07-27 00:46:16 --> 0 the guest only data>>>>>#14
INFO  - 2014-07-27 00:46:16 --> 0 the guest only data>> AFTER >>>#12
INFO  - 2014-07-27 00:46:16 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-07-27 00:46:16 --> 1 the guest only data>>>>>#12
INFO  - 2014-07-27 00:46:16 --> 1 the guest only data>> AFTER >>>#12
DEBUG - 2014-07-27 00:46:16 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2014-07-27 00:46:16 --> Final output sent to browser
DEBUG - 2014-07-27 00:46:16 --> Total execution time: 0.0611
DEBUG - 2014-07-27 00:46:18 --> Config Class Initialized
DEBUG - 2014-07-27 00:46:18 --> Hooks Class Initialized
DEBUG - 2014-07-27 00:46:18 --> Utf8 Class Initialized
DEBUG - 2014-07-27 00:46:18 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 00:46:18 --> URI Class Initialized
DEBUG - 2014-07-27 00:46:18 --> Router Class Initialized
DEBUG - 2014-07-27 00:46:18 --> Output Class Initialized
DEBUG - 2014-07-27 00:46:18 --> Security Class Initialized
DEBUG - 2014-07-27 00:46:18 --> Input Class Initialized
DEBUG - 2014-07-27 00:46:18 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 00:46:18 --> Language Class Initialized
DEBUG - 2014-07-27 00:46:18 --> Loader Class Initialized
DEBUG - 2014-07-27 00:46:18 --> Helper loaded: form_helper
DEBUG - 2014-07-27 00:46:18 --> Helper loaded: url_helper
DEBUG - 2014-07-27 00:46:18 --> Helper loaded: html_helper
DEBUG - 2014-07-27 00:46:18 --> Database Driver Class Initialized
ERROR - 2014-07-27 00:46:18 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 00:46:18 --> Session Class Initialized
DEBUG - 2014-07-27 00:46:18 --> Helper loaded: string_helper
DEBUG - 2014-07-27 00:46:18 --> Session routines successfully run
DEBUG - 2014-07-27 00:46:18 --> Form Validation Class Initialized
DEBUG - 2014-07-27 00:46:18 --> Controller Class Initialized
DEBUG - 2014-07-27 00:46:18 --> Model Class Initialized
DEBUG - 2014-07-27 00:46:18 --> Model Class Initialized
DEBUG - 2014-07-27 00:46:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 00:46:18 --> Encrypt Class Initialized
INFO  - 2014-07-27 00:46:18 --> after session initialization................
DEBUG - 2014-07-27 00:46:18 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-07-27 00:46:18 --> Final output sent to browser
DEBUG - 2014-07-27 00:46:18 --> Total execution time: 0.0499
DEBUG - 2014-07-27 00:46:19 --> Config Class Initialized
DEBUG - 2014-07-27 00:46:19 --> Hooks Class Initialized
DEBUG - 2014-07-27 00:46:19 --> Utf8 Class Initialized
DEBUG - 2014-07-27 00:46:19 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 00:46:19 --> URI Class Initialized
DEBUG - 2014-07-27 00:46:19 --> Router Class Initialized
DEBUG - 2014-07-27 00:46:19 --> Output Class Initialized
DEBUG - 2014-07-27 00:46:19 --> Security Class Initialized
DEBUG - 2014-07-27 00:46:19 --> Input Class Initialized
DEBUG - 2014-07-27 00:46:19 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 00:46:19 --> Language Class Initialized
DEBUG - 2014-07-27 00:46:19 --> Loader Class Initialized
DEBUG - 2014-07-27 00:46:19 --> Helper loaded: form_helper
DEBUG - 2014-07-27 00:46:19 --> Helper loaded: url_helper
DEBUG - 2014-07-27 00:46:19 --> Helper loaded: html_helper
DEBUG - 2014-07-27 00:46:19 --> Database Driver Class Initialized
ERROR - 2014-07-27 00:46:19 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 00:46:19 --> Session Class Initialized
DEBUG - 2014-07-27 00:46:19 --> Helper loaded: string_helper
DEBUG - 2014-07-27 00:46:19 --> Session routines successfully run
DEBUG - 2014-07-27 00:46:19 --> Form Validation Class Initialized
DEBUG - 2014-07-27 00:46:19 --> Controller Class Initialized
DEBUG - 2014-07-27 00:46:19 --> Model Class Initialized
DEBUG - 2014-07-27 00:46:19 --> Model Class Initialized
DEBUG - 2014-07-27 00:46:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 00:46:19 --> Encrypt Class Initialized
INFO  - 2014-07-27 00:46:19 --> after session initialization................
INFO  - 2014-07-27 00:46:19 --> inside the register member.................
INFO  - 2014-07-27 00:46:19 --> before initializing member array.................
INFO  - 2014-07-27 00:46:19 --> before setting validation rules.................
INFO  - 2014-07-27 00:46:19 --> after setting validation rules.................
DEBUG - 2014-07-27 00:46:19 --> Language file loaded: language/english/form_validation_lang.php
INFO  - 2014-07-27 00:46:19 --> validation is false so error message is returned.................
INFO  - 2014-07-27 00:46:19 --> the form message controller==><p>The Date of birth *  field is required.</p>------<p>The Date of birth *  field is required.</p>--------<p>The Month of birth  field is required.</p>---------<p>The Year of birth *  field is required.</p>
DEBUG - 2014-07-27 00:46:19 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-07-27 00:46:19 --> Final output sent to browser
DEBUG - 2014-07-27 00:46:19 --> Total execution time: 0.0626
DEBUG - 2014-07-27 00:46:20 --> Config Class Initialized
DEBUG - 2014-07-27 00:46:20 --> Hooks Class Initialized
DEBUG - 2014-07-27 00:46:20 --> Utf8 Class Initialized
DEBUG - 2014-07-27 00:46:20 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 00:46:20 --> URI Class Initialized
DEBUG - 2014-07-27 00:46:20 --> Router Class Initialized
DEBUG - 2014-07-27 00:46:20 --> Output Class Initialized
DEBUG - 2014-07-27 00:46:20 --> Security Class Initialized
DEBUG - 2014-07-27 00:46:20 --> Input Class Initialized
DEBUG - 2014-07-27 00:46:20 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 00:46:20 --> Language Class Initialized
DEBUG - 2014-07-27 00:46:20 --> Loader Class Initialized
DEBUG - 2014-07-27 00:46:20 --> Helper loaded: form_helper
DEBUG - 2014-07-27 00:46:20 --> Helper loaded: url_helper
DEBUG - 2014-07-27 00:46:20 --> Helper loaded: html_helper
DEBUG - 2014-07-27 00:46:20 --> Database Driver Class Initialized
ERROR - 2014-07-27 00:46:20 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 00:46:20 --> Session Class Initialized
DEBUG - 2014-07-27 00:46:20 --> Helper loaded: string_helper
DEBUG - 2014-07-27 00:46:20 --> Session routines successfully run
DEBUG - 2014-07-27 00:46:20 --> Form Validation Class Initialized
DEBUG - 2014-07-27 00:46:20 --> Controller Class Initialized
DEBUG - 2014-07-27 00:46:20 --> Model Class Initialized
DEBUG - 2014-07-27 00:46:20 --> Model Class Initialized
DEBUG - 2014-07-27 00:46:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 00:46:20 --> Encrypt Class Initialized
INFO  - 2014-07-27 00:46:20 --> after session initialization................
INFO  - 2014-07-27 00:46:20 --> inside the register member.................
INFO  - 2014-07-27 00:46:20 --> before initializing member array.................
INFO  - 2014-07-27 00:46:20 --> before setting validation rules.................
INFO  - 2014-07-27 00:46:20 --> after setting validation rules.................
DEBUG - 2014-07-27 00:46:20 --> Language file loaded: language/english/form_validation_lang.php
INFO  - 2014-07-27 00:46:20 --> validation is false so error message is returned.................
INFO  - 2014-07-27 00:46:20 --> the form message controller==><p>The Date of birth *  field is required.</p>------<p>The Date of birth *  field is required.</p>--------<p>The Month of birth  field is required.</p>---------<p>The Year of birth *  field is required.</p>
DEBUG - 2014-07-27 00:46:20 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-07-27 00:46:20 --> Final output sent to browser
DEBUG - 2014-07-27 00:46:20 --> Total execution time: 0.0463
DEBUG - 2014-07-27 00:46:21 --> Config Class Initialized
DEBUG - 2014-07-27 00:46:21 --> Hooks Class Initialized
DEBUG - 2014-07-27 00:46:21 --> Utf8 Class Initialized
DEBUG - 2014-07-27 00:46:21 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 00:46:21 --> URI Class Initialized
DEBUG - 2014-07-27 00:46:21 --> Router Class Initialized
DEBUG - 2014-07-27 00:46:21 --> Output Class Initialized
DEBUG - 2014-07-27 00:46:21 --> Security Class Initialized
DEBUG - 2014-07-27 00:46:21 --> Input Class Initialized
DEBUG - 2014-07-27 00:46:21 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 00:46:21 --> Language Class Initialized
DEBUG - 2014-07-27 00:46:21 --> Loader Class Initialized
DEBUG - 2014-07-27 00:46:21 --> Helper loaded: form_helper
DEBUG - 2014-07-27 00:46:21 --> Helper loaded: url_helper
DEBUG - 2014-07-27 00:46:21 --> Helper loaded: html_helper
DEBUG - 2014-07-27 00:46:21 --> Database Driver Class Initialized
ERROR - 2014-07-27 00:46:21 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 00:46:21 --> Session Class Initialized
DEBUG - 2014-07-27 00:46:21 --> Helper loaded: string_helper
DEBUG - 2014-07-27 00:46:21 --> Session routines successfully run
DEBUG - 2014-07-27 00:46:21 --> Form Validation Class Initialized
DEBUG - 2014-07-27 00:46:21 --> Controller Class Initialized
DEBUG - 2014-07-27 00:46:21 --> Model Class Initialized
DEBUG - 2014-07-27 00:46:21 --> Model Class Initialized
DEBUG - 2014-07-27 00:46:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 00:46:21 --> Encrypt Class Initialized
INFO  - 2014-07-27 00:46:21 --> after session initialization................
INFO  - 2014-07-27 00:46:21 --> inside the register member.................
INFO  - 2014-07-27 00:46:21 --> before initializing member array.................
INFO  - 2014-07-27 00:46:21 --> before setting validation rules.................
INFO  - 2014-07-27 00:46:21 --> after setting validation rules.................
DEBUG - 2014-07-27 00:46:21 --> Language file loaded: language/english/form_validation_lang.php
INFO  - 2014-07-27 00:46:21 --> validation is false so error message is returned.................
INFO  - 2014-07-27 00:46:21 --> the form message controller==><p>The Date of birth *  field is required.</p>------<p>The Date of birth *  field is required.</p>--------<p>The Month of birth  field is required.</p>---------<p>The Year of birth *  field is required.</p>
DEBUG - 2014-07-27 00:46:21 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-07-27 00:46:21 --> Final output sent to browser
DEBUG - 2014-07-27 00:46:21 --> Total execution time: 0.0501
DEBUG - 2014-07-27 00:46:27 --> Config Class Initialized
DEBUG - 2014-07-27 00:46:27 --> Hooks Class Initialized
DEBUG - 2014-07-27 00:46:27 --> Utf8 Class Initialized
DEBUG - 2014-07-27 00:46:27 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 00:46:27 --> URI Class Initialized
DEBUG - 2014-07-27 00:46:27 --> Router Class Initialized
DEBUG - 2014-07-27 00:46:27 --> Output Class Initialized
DEBUG - 2014-07-27 00:46:27 --> Security Class Initialized
DEBUG - 2014-07-27 00:46:27 --> Input Class Initialized
DEBUG - 2014-07-27 00:46:27 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 00:46:27 --> Language Class Initialized
DEBUG - 2014-07-27 00:46:27 --> Loader Class Initialized
DEBUG - 2014-07-27 00:46:27 --> Helper loaded: form_helper
DEBUG - 2014-07-27 00:46:27 --> Helper loaded: url_helper
DEBUG - 2014-07-27 00:46:27 --> Helper loaded: html_helper
DEBUG - 2014-07-27 00:46:27 --> Database Driver Class Initialized
ERROR - 2014-07-27 00:46:27 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 00:46:27 --> Session Class Initialized
DEBUG - 2014-07-27 00:46:27 --> Helper loaded: string_helper
DEBUG - 2014-07-27 00:46:27 --> Session routines successfully run
DEBUG - 2014-07-27 00:46:27 --> Form Validation Class Initialized
DEBUG - 2014-07-27 00:46:27 --> Controller Class Initialized
DEBUG - 2014-07-27 00:46:27 --> Model Class Initialized
DEBUG - 2014-07-27 00:46:27 --> Model Class Initialized
DEBUG - 2014-07-27 00:46:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 00:46:27 --> Encrypt Class Initialized
INFO  - 2014-07-27 00:46:27 --> after session initialization................
INFO  - 2014-07-27 00:46:27 --> inside the register member.................
INFO  - 2014-07-27 00:46:27 --> before initializing member array.................
INFO  - 2014-07-27 00:46:27 --> before setting validation rules.................
INFO  - 2014-07-27 00:46:27 --> after setting validation rules.................
DEBUG - 2014-07-27 00:46:27 --> Language file loaded: language/english/form_validation_lang.php
INFO  - 2014-07-27 00:46:27 --> validation is false so error message is returned.................
INFO  - 2014-07-27 00:46:27 --> the form message controller==><p>The Date of birth *  field is required.</p>------<p>The Date of birth *  field is required.</p>--------<p>The Month of birth  field is required.</p>---------<p>The Year of birth *  field is required.</p>
DEBUG - 2014-07-27 00:46:27 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-07-27 00:46:27 --> Final output sent to browser
DEBUG - 2014-07-27 00:46:27 --> Total execution time: 0.0507
DEBUG - 2014-07-27 00:49:09 --> Config Class Initialized
DEBUG - 2014-07-27 00:49:09 --> Hooks Class Initialized
DEBUG - 2014-07-27 00:49:09 --> Utf8 Class Initialized
DEBUG - 2014-07-27 00:49:09 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 00:49:09 --> URI Class Initialized
DEBUG - 2014-07-27 00:49:09 --> Router Class Initialized
DEBUG - 2014-07-27 00:49:09 --> Output Class Initialized
DEBUG - 2014-07-27 00:49:09 --> Security Class Initialized
DEBUG - 2014-07-27 00:49:09 --> Input Class Initialized
DEBUG - 2014-07-27 00:49:09 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 00:49:09 --> Language Class Initialized
DEBUG - 2014-07-27 00:49:09 --> Loader Class Initialized
DEBUG - 2014-07-27 00:49:09 --> Helper loaded: form_helper
DEBUG - 2014-07-27 00:49:09 --> Helper loaded: url_helper
DEBUG - 2014-07-27 00:49:09 --> Helper loaded: html_helper
DEBUG - 2014-07-27 00:49:09 --> Database Driver Class Initialized
ERROR - 2014-07-27 00:49:09 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 00:49:09 --> Session Class Initialized
DEBUG - 2014-07-27 00:49:09 --> Helper loaded: string_helper
DEBUG - 2014-07-27 00:49:09 --> Session routines successfully run
DEBUG - 2014-07-27 00:49:10 --> Form Validation Class Initialized
DEBUG - 2014-07-27 00:49:10 --> Controller Class Initialized
DEBUG - 2014-07-27 00:49:10 --> Model Class Initialized
DEBUG - 2014-07-27 00:49:10 --> Model Class Initialized
DEBUG - 2014-07-27 00:49:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 00:49:10 --> Encrypt Class Initialized
INFO  - 2014-07-27 00:49:10 --> after session initialization................
INFO  - 2014-07-27 00:49:10 --> inside the register member.................
INFO  - 2014-07-27 00:49:10 --> before initializing member array.................
INFO  - 2014-07-27 00:49:10 --> before setting validation rules.................
INFO  - 2014-07-27 00:49:10 --> after setting validation rules.................
DEBUG - 2014-07-27 00:49:10 --> Language file loaded: language/english/form_validation_lang.php
INFO  - 2014-07-27 00:49:10 --> validation is false so error message is returned.................
INFO  - 2014-07-27 00:49:10 --> the form message controller==><p>The Date of birth *  field is required.</p>------<p>The Date of birth *  field is required.</p>--------<p>The Month of birth  field is required.</p>---------<p>The Year of birth *  field is required.</p>
DEBUG - 2014-07-27 00:49:10 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-07-27 00:49:10 --> Final output sent to browser
DEBUG - 2014-07-27 00:49:10 --> Total execution time: 0.0866
DEBUG - 2014-07-27 01:08:11 --> Config Class Initialized
DEBUG - 2014-07-27 01:08:11 --> Hooks Class Initialized
DEBUG - 2014-07-27 01:08:11 --> Utf8 Class Initialized
DEBUG - 2014-07-27 01:08:11 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 01:08:11 --> URI Class Initialized
DEBUG - 2014-07-27 01:08:11 --> Router Class Initialized
DEBUG - 2014-07-27 01:08:11 --> Output Class Initialized
DEBUG - 2014-07-27 01:08:11 --> Security Class Initialized
DEBUG - 2014-07-27 01:08:11 --> Input Class Initialized
DEBUG - 2014-07-27 01:08:11 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 01:08:11 --> Language Class Initialized
DEBUG - 2014-07-27 01:08:11 --> Loader Class Initialized
DEBUG - 2014-07-27 01:08:11 --> Helper loaded: form_helper
DEBUG - 2014-07-27 01:08:11 --> Helper loaded: url_helper
DEBUG - 2014-07-27 01:08:11 --> Helper loaded: html_helper
DEBUG - 2014-07-27 01:08:11 --> Database Driver Class Initialized
ERROR - 2014-07-27 01:08:11 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 01:08:11 --> Session Class Initialized
DEBUG - 2014-07-27 01:08:11 --> Helper loaded: string_helper
DEBUG - 2014-07-27 01:08:11 --> Session routines successfully run
DEBUG - 2014-07-27 01:08:11 --> Form Validation Class Initialized
DEBUG - 2014-07-27 01:08:11 --> Controller Class Initialized
DEBUG - 2014-07-27 01:08:11 --> Model Class Initialized
DEBUG - 2014-07-27 01:08:11 --> Model Class Initialized
DEBUG - 2014-07-27 01:08:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 01:08:11 --> Encrypt Class Initialized
INFO  - 2014-07-27 01:08:11 --> after session initialization................
INFO  - 2014-07-27 01:08:11 --> inside the register member.................
INFO  - 2014-07-27 01:08:11 --> before initializing member array.................
INFO  - 2014-07-27 01:08:11 --> before setting validation rules.................
INFO  - 2014-07-27 01:08:11 --> after setting validation rules.................
DEBUG - 2014-07-27 01:08:11 --> Language file loaded: language/english/form_validation_lang.php
INFO  - 2014-07-27 01:08:11 --> validation is false so error message is returned.................
INFO  - 2014-07-27 01:08:11 --> the form message controller==><p>The Date of birth *  field is required.</p>------<p>The Date of birth *  field is required.</p>--------<p>The Month of birth  field is required.</p>---------<p>The Year of birth *  field is required.</p>
DEBUG - 2014-07-27 01:08:11 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-07-27 01:08:11 --> Final output sent to browser
DEBUG - 2014-07-27 01:08:11 --> Total execution time: 0.0622
DEBUG - 2014-07-27 01:09:48 --> Config Class Initialized
DEBUG - 2014-07-27 01:09:48 --> Hooks Class Initialized
DEBUG - 2014-07-27 01:09:48 --> Utf8 Class Initialized
DEBUG - 2014-07-27 01:09:48 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 01:09:48 --> URI Class Initialized
DEBUG - 2014-07-27 01:09:48 --> Router Class Initialized
DEBUG - 2014-07-27 01:09:48 --> Output Class Initialized
DEBUG - 2014-07-27 01:09:48 --> Security Class Initialized
DEBUG - 2014-07-27 01:09:48 --> Input Class Initialized
DEBUG - 2014-07-27 01:09:48 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 01:09:48 --> Language Class Initialized
DEBUG - 2014-07-27 01:09:48 --> Loader Class Initialized
DEBUG - 2014-07-27 01:09:48 --> Helper loaded: form_helper
DEBUG - 2014-07-27 01:09:48 --> Helper loaded: url_helper
DEBUG - 2014-07-27 01:09:48 --> Helper loaded: html_helper
DEBUG - 2014-07-27 01:09:48 --> Database Driver Class Initialized
ERROR - 2014-07-27 01:09:48 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 01:09:48 --> Session Class Initialized
DEBUG - 2014-07-27 01:09:48 --> Helper loaded: string_helper
DEBUG - 2014-07-27 01:09:48 --> Session routines successfully run
DEBUG - 2014-07-27 01:09:48 --> Form Validation Class Initialized
DEBUG - 2014-07-27 01:09:48 --> Controller Class Initialized
DEBUG - 2014-07-27 01:09:48 --> Model Class Initialized
DEBUG - 2014-07-27 01:09:48 --> Model Class Initialized
DEBUG - 2014-07-27 01:09:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 01:09:48 --> Encrypt Class Initialized
INFO  - 2014-07-27 01:09:48 --> after session initialization................
INFO  - 2014-07-27 01:09:48 --> inside the register member.................
INFO  - 2014-07-27 01:09:48 --> before initializing member array.................
INFO  - 2014-07-27 01:09:48 --> before setting validation rules.................
INFO  - 2014-07-27 01:09:48 --> after setting validation rules.................
DEBUG - 2014-07-27 01:09:48 --> Language file loaded: language/english/form_validation_lang.php
INFO  - 2014-07-27 01:09:48 --> validation is false so error message is returned.................
INFO  - 2014-07-27 01:09:48 --> the form message controller==><p>The Date of birth *  field is required.</p>------<p>The Date of birth *  field is required.</p>--------<p>The Month of birth  field is required.</p>---------<p>The Year of birth *  field is required.</p>
DEBUG - 2014-07-27 01:09:48 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-07-27 01:09:48 --> Final output sent to browser
DEBUG - 2014-07-27 01:09:48 --> Total execution time: 0.0694
DEBUG - 2014-07-27 01:10:27 --> Config Class Initialized
DEBUG - 2014-07-27 01:10:27 --> Hooks Class Initialized
DEBUG - 2014-07-27 01:10:27 --> Utf8 Class Initialized
DEBUG - 2014-07-27 01:10:27 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 01:10:27 --> URI Class Initialized
DEBUG - 2014-07-27 01:10:27 --> Router Class Initialized
DEBUG - 2014-07-27 01:10:27 --> Output Class Initialized
DEBUG - 2014-07-27 01:10:27 --> Security Class Initialized
DEBUG - 2014-07-27 01:10:27 --> Input Class Initialized
DEBUG - 2014-07-27 01:10:27 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 01:10:27 --> Language Class Initialized
DEBUG - 2014-07-27 01:10:27 --> Loader Class Initialized
DEBUG - 2014-07-27 01:10:27 --> Helper loaded: form_helper
DEBUG - 2014-07-27 01:10:27 --> Helper loaded: url_helper
DEBUG - 2014-07-27 01:10:27 --> Helper loaded: html_helper
DEBUG - 2014-07-27 01:10:27 --> Database Driver Class Initialized
ERROR - 2014-07-27 01:10:27 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 01:10:27 --> Session Class Initialized
DEBUG - 2014-07-27 01:10:27 --> Helper loaded: string_helper
DEBUG - 2014-07-27 01:10:27 --> Session routines successfully run
DEBUG - 2014-07-27 01:10:27 --> Form Validation Class Initialized
DEBUG - 2014-07-27 01:10:27 --> Controller Class Initialized
DEBUG - 2014-07-27 01:10:27 --> Model Class Initialized
DEBUG - 2014-07-27 01:10:27 --> Model Class Initialized
DEBUG - 2014-07-27 01:10:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 01:10:27 --> Encrypt Class Initialized
INFO  - 2014-07-27 01:10:27 --> after session initialization................
INFO  - 2014-07-27 01:10:27 --> inside the register member.................
INFO  - 2014-07-27 01:10:27 --> before initializing member array.................
INFO  - 2014-07-27 01:10:27 --> before setting validation rules.................
INFO  - 2014-07-27 01:10:27 --> after setting validation rules.................
DEBUG - 2014-07-27 01:10:27 --> Language file loaded: language/english/form_validation_lang.php
INFO  - 2014-07-27 01:10:27 --> validation is false so error message is returned.................
INFO  - 2014-07-27 01:10:27 --> the form message controller==><p>The Date of birth *  field is required.</p>------<p>The Date of birth *  field is required.</p>--------<p>The Month of birth  field is required.</p>---------<p>The Year of birth *  field is required.</p>
DEBUG - 2014-07-27 01:10:27 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-07-27 01:10:27 --> Final output sent to browser
DEBUG - 2014-07-27 01:10:27 --> Total execution time: 0.0862
DEBUG - 2014-07-27 01:10:44 --> Config Class Initialized
DEBUG - 2014-07-27 01:10:44 --> Hooks Class Initialized
DEBUG - 2014-07-27 01:10:44 --> Utf8 Class Initialized
DEBUG - 2014-07-27 01:10:44 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 01:10:44 --> URI Class Initialized
DEBUG - 2014-07-27 01:10:44 --> Router Class Initialized
DEBUG - 2014-07-27 01:10:44 --> Output Class Initialized
DEBUG - 2014-07-27 01:10:44 --> Security Class Initialized
DEBUG - 2014-07-27 01:10:44 --> Input Class Initialized
DEBUG - 2014-07-27 01:10:44 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 01:10:44 --> Language Class Initialized
DEBUG - 2014-07-27 01:10:44 --> Loader Class Initialized
DEBUG - 2014-07-27 01:10:44 --> Helper loaded: form_helper
DEBUG - 2014-07-27 01:10:44 --> Helper loaded: url_helper
DEBUG - 2014-07-27 01:10:44 --> Helper loaded: html_helper
DEBUG - 2014-07-27 01:10:44 --> Database Driver Class Initialized
ERROR - 2014-07-27 01:10:44 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 01:10:44 --> Session Class Initialized
DEBUG - 2014-07-27 01:10:44 --> Helper loaded: string_helper
DEBUG - 2014-07-27 01:10:44 --> Session routines successfully run
DEBUG - 2014-07-27 01:10:44 --> Form Validation Class Initialized
DEBUG - 2014-07-27 01:10:44 --> Controller Class Initialized
DEBUG - 2014-07-27 01:10:44 --> Model Class Initialized
DEBUG - 2014-07-27 01:10:44 --> Model Class Initialized
DEBUG - 2014-07-27 01:10:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 01:10:44 --> Encrypt Class Initialized
INFO  - 2014-07-27 01:10:44 --> after session initialization................
INFO  - 2014-07-27 01:10:44 --> inside the register member.................
INFO  - 2014-07-27 01:10:44 --> before initializing member array.................
INFO  - 2014-07-27 01:10:44 --> before setting validation rules.................
INFO  - 2014-07-27 01:10:44 --> after setting validation rules.................
DEBUG - 2014-07-27 01:10:44 --> Language file loaded: language/english/form_validation_lang.php
INFO  - 2014-07-27 01:10:44 --> validation is false so error message is returned.................
INFO  - 2014-07-27 01:10:44 --> the form message controller==><p>The Date of birth *  field is required.</p>------<p>The Date of birth *  field is required.</p>--------<p>The Month of birth  field is required.</p>---------<p>The Year of birth *  field is required.</p>
DEBUG - 2014-07-27 01:10:44 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-07-27 01:10:44 --> Final output sent to browser
DEBUG - 2014-07-27 01:10:44 --> Total execution time: 0.0373
DEBUG - 2014-07-27 01:11:09 --> Config Class Initialized
DEBUG - 2014-07-27 01:11:09 --> Hooks Class Initialized
DEBUG - 2014-07-27 01:11:09 --> Utf8 Class Initialized
DEBUG - 2014-07-27 01:11:09 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 01:11:09 --> URI Class Initialized
DEBUG - 2014-07-27 01:11:09 --> Router Class Initialized
DEBUG - 2014-07-27 01:11:09 --> Output Class Initialized
DEBUG - 2014-07-27 01:11:09 --> Security Class Initialized
DEBUG - 2014-07-27 01:11:09 --> Input Class Initialized
DEBUG - 2014-07-27 01:11:09 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 01:11:09 --> Language Class Initialized
DEBUG - 2014-07-27 01:11:09 --> Loader Class Initialized
DEBUG - 2014-07-27 01:11:09 --> Helper loaded: form_helper
DEBUG - 2014-07-27 01:11:09 --> Helper loaded: url_helper
DEBUG - 2014-07-27 01:11:09 --> Helper loaded: html_helper
DEBUG - 2014-07-27 01:11:09 --> Database Driver Class Initialized
ERROR - 2014-07-27 01:11:09 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 01:11:09 --> Session Class Initialized
DEBUG - 2014-07-27 01:11:09 --> Helper loaded: string_helper
DEBUG - 2014-07-27 01:11:09 --> Session routines successfully run
DEBUG - 2014-07-27 01:11:09 --> Form Validation Class Initialized
DEBUG - 2014-07-27 01:11:09 --> Controller Class Initialized
DEBUG - 2014-07-27 01:11:09 --> Model Class Initialized
DEBUG - 2014-07-27 01:11:09 --> Model Class Initialized
DEBUG - 2014-07-27 01:11:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 01:11:09 --> Encrypt Class Initialized
INFO  - 2014-07-27 01:11:09 --> after session initialization................
INFO  - 2014-07-27 01:11:09 --> inside the register member.................
INFO  - 2014-07-27 01:11:09 --> before initializing member array.................
INFO  - 2014-07-27 01:11:09 --> before setting validation rules.................
INFO  - 2014-07-27 01:11:09 --> after setting validation rules.................
DEBUG - 2014-07-27 01:11:09 --> Language file loaded: language/english/form_validation_lang.php
INFO  - 2014-07-27 01:11:09 --> validation is false so error message is returned.................
INFO  - 2014-07-27 01:11:09 --> the form message controller==><p>The Date of birth *  field is required.</p>------<p>The Date of birth *  field is required.</p>--------<p>The Month of birth  field is required.</p>---------<p>The Year of birth *  field is required.</p>
DEBUG - 2014-07-27 01:11:09 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-07-27 01:11:09 --> Final output sent to browser
DEBUG - 2014-07-27 01:11:09 --> Total execution time: 0.0313
DEBUG - 2014-07-27 01:11:28 --> Config Class Initialized
DEBUG - 2014-07-27 01:11:28 --> Hooks Class Initialized
DEBUG - 2014-07-27 01:11:28 --> Utf8 Class Initialized
DEBUG - 2014-07-27 01:11:28 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 01:11:28 --> URI Class Initialized
DEBUG - 2014-07-27 01:11:28 --> Router Class Initialized
DEBUG - 2014-07-27 01:11:28 --> Output Class Initialized
DEBUG - 2014-07-27 01:11:28 --> Security Class Initialized
DEBUG - 2014-07-27 01:11:28 --> Input Class Initialized
DEBUG - 2014-07-27 01:11:28 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 01:11:28 --> Language Class Initialized
DEBUG - 2014-07-27 01:11:28 --> Loader Class Initialized
DEBUG - 2014-07-27 01:11:28 --> Helper loaded: form_helper
DEBUG - 2014-07-27 01:11:28 --> Helper loaded: url_helper
DEBUG - 2014-07-27 01:11:28 --> Helper loaded: html_helper
DEBUG - 2014-07-27 01:11:28 --> Database Driver Class Initialized
ERROR - 2014-07-27 01:11:28 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 01:11:28 --> Session Class Initialized
DEBUG - 2014-07-27 01:11:28 --> Helper loaded: string_helper
DEBUG - 2014-07-27 01:11:28 --> Session routines successfully run
DEBUG - 2014-07-27 01:11:28 --> Form Validation Class Initialized
DEBUG - 2014-07-27 01:11:28 --> Controller Class Initialized
DEBUG - 2014-07-27 01:11:28 --> Model Class Initialized
DEBUG - 2014-07-27 01:11:28 --> Model Class Initialized
DEBUG - 2014-07-27 01:11:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 01:11:28 --> Encrypt Class Initialized
INFO  - 2014-07-27 01:11:28 --> after session initialization................
INFO  - 2014-07-27 01:11:28 --> inside the register member.................
INFO  - 2014-07-27 01:11:28 --> before initializing member array.................
INFO  - 2014-07-27 01:11:28 --> before setting validation rules.................
INFO  - 2014-07-27 01:11:28 --> after setting validation rules.................
DEBUG - 2014-07-27 01:11:28 --> Language file loaded: language/english/form_validation_lang.php
INFO  - 2014-07-27 01:11:28 --> validation is false so error message is returned.................
INFO  - 2014-07-27 01:11:28 --> the form message controller==><p>The Date of birth *  field is required.</p>------<p>The Date of birth *  field is required.</p>--------<p>The Month of birth  field is required.</p>---------<p>The Year of birth *  field is required.</p>
DEBUG - 2014-07-27 01:11:28 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-07-27 01:11:28 --> Final output sent to browser
DEBUG - 2014-07-27 01:11:28 --> Total execution time: 0.0317
DEBUG - 2014-07-27 01:11:45 --> Config Class Initialized
DEBUG - 2014-07-27 01:11:45 --> Hooks Class Initialized
DEBUG - 2014-07-27 01:11:45 --> Utf8 Class Initialized
DEBUG - 2014-07-27 01:11:45 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 01:11:45 --> URI Class Initialized
DEBUG - 2014-07-27 01:11:45 --> Router Class Initialized
DEBUG - 2014-07-27 01:11:45 --> Output Class Initialized
DEBUG - 2014-07-27 01:11:45 --> Security Class Initialized
DEBUG - 2014-07-27 01:11:45 --> Input Class Initialized
DEBUG - 2014-07-27 01:11:45 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 01:11:45 --> Language Class Initialized
DEBUG - 2014-07-27 01:11:45 --> Loader Class Initialized
DEBUG - 2014-07-27 01:11:45 --> Helper loaded: form_helper
DEBUG - 2014-07-27 01:11:45 --> Helper loaded: url_helper
DEBUG - 2014-07-27 01:11:45 --> Helper loaded: html_helper
DEBUG - 2014-07-27 01:11:45 --> Database Driver Class Initialized
ERROR - 2014-07-27 01:11:45 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 01:11:45 --> Session Class Initialized
DEBUG - 2014-07-27 01:11:45 --> Helper loaded: string_helper
DEBUG - 2014-07-27 01:11:45 --> Session routines successfully run
DEBUG - 2014-07-27 01:11:45 --> Form Validation Class Initialized
DEBUG - 2014-07-27 01:11:45 --> Controller Class Initialized
DEBUG - 2014-07-27 01:11:45 --> Model Class Initialized
DEBUG - 2014-07-27 01:11:45 --> Model Class Initialized
DEBUG - 2014-07-27 01:11:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 01:11:45 --> Encrypt Class Initialized
INFO  - 2014-07-27 01:11:45 --> after session initialization................
INFO  - 2014-07-27 01:11:45 --> inside the register member.................
INFO  - 2014-07-27 01:11:45 --> before initializing member array.................
INFO  - 2014-07-27 01:11:45 --> before setting validation rules.................
INFO  - 2014-07-27 01:11:45 --> after setting validation rules.................
DEBUG - 2014-07-27 01:11:45 --> Language file loaded: language/english/form_validation_lang.php
INFO  - 2014-07-27 01:11:45 --> validation is false so error message is returned.................
INFO  - 2014-07-27 01:11:45 --> the form message controller==><p>The Date of birth *  field is required.</p>------<p>The Date of birth *  field is required.</p>--------<p>The Month of birth  field is required.</p>---------<p>The Year of birth *  field is required.</p>
DEBUG - 2014-07-27 01:11:45 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-07-27 01:11:45 --> Final output sent to browser
DEBUG - 2014-07-27 01:11:45 --> Total execution time: 0.0428
DEBUG - 2014-07-27 01:15:48 --> Config Class Initialized
DEBUG - 2014-07-27 01:15:48 --> Hooks Class Initialized
DEBUG - 2014-07-27 01:15:48 --> Utf8 Class Initialized
DEBUG - 2014-07-27 01:15:48 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 01:15:48 --> URI Class Initialized
DEBUG - 2014-07-27 01:15:48 --> Router Class Initialized
DEBUG - 2014-07-27 01:15:48 --> Output Class Initialized
DEBUG - 2014-07-27 01:15:48 --> Security Class Initialized
DEBUG - 2014-07-27 01:15:48 --> Input Class Initialized
DEBUG - 2014-07-27 01:15:48 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 01:15:48 --> Language Class Initialized
DEBUG - 2014-07-27 01:15:48 --> Loader Class Initialized
DEBUG - 2014-07-27 01:15:48 --> Helper loaded: form_helper
DEBUG - 2014-07-27 01:15:48 --> Helper loaded: url_helper
DEBUG - 2014-07-27 01:15:48 --> Helper loaded: html_helper
DEBUG - 2014-07-27 01:15:48 --> Database Driver Class Initialized
ERROR - 2014-07-27 01:15:48 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 01:15:48 --> Session Class Initialized
DEBUG - 2014-07-27 01:15:48 --> Helper loaded: string_helper
DEBUG - 2014-07-27 01:15:48 --> Session routines successfully run
DEBUG - 2014-07-27 01:15:48 --> Form Validation Class Initialized
DEBUG - 2014-07-27 01:15:48 --> Controller Class Initialized
DEBUG - 2014-07-27 01:15:48 --> Model Class Initialized
DEBUG - 2014-07-27 01:15:48 --> Model Class Initialized
DEBUG - 2014-07-27 01:15:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 01:15:48 --> Encrypt Class Initialized
INFO  - 2014-07-27 01:15:48 --> after session initialization................
INFO  - 2014-07-27 01:15:48 --> inside the register member.................
INFO  - 2014-07-27 01:15:48 --> before initializing member array.................
INFO  - 2014-07-27 01:15:48 --> before setting validation rules.................
INFO  - 2014-07-27 01:15:48 --> after setting validation rules.................
DEBUG - 2014-07-27 01:15:48 --> Language file loaded: language/english/form_validation_lang.php
INFO  - 2014-07-27 01:15:48 --> validation is false so error message is returned.................
INFO  - 2014-07-27 01:15:48 --> the form message controller==><p>The Date of birth *  field is required.</p>------<p>The Date of birth *  field is required.</p>--------<p>The Month of birth  field is required.</p>---------<p>The Year of birth *  field is required.</p>
DEBUG - 2014-07-27 01:15:48 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-07-27 01:15:48 --> Final output sent to browser
DEBUG - 2014-07-27 01:15:48 --> Total execution time: 0.0726
DEBUG - 2014-07-27 01:16:11 --> Config Class Initialized
DEBUG - 2014-07-27 01:16:11 --> Hooks Class Initialized
DEBUG - 2014-07-27 01:16:11 --> Utf8 Class Initialized
DEBUG - 2014-07-27 01:16:11 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 01:16:11 --> URI Class Initialized
DEBUG - 2014-07-27 01:16:11 --> Router Class Initialized
DEBUG - 2014-07-27 01:16:11 --> Output Class Initialized
DEBUG - 2014-07-27 01:16:11 --> Security Class Initialized
DEBUG - 2014-07-27 01:16:11 --> Input Class Initialized
DEBUG - 2014-07-27 01:16:11 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 01:16:11 --> Language Class Initialized
DEBUG - 2014-07-27 01:16:11 --> Loader Class Initialized
DEBUG - 2014-07-27 01:16:11 --> Helper loaded: form_helper
DEBUG - 2014-07-27 01:16:11 --> Helper loaded: url_helper
DEBUG - 2014-07-27 01:16:11 --> Helper loaded: html_helper
DEBUG - 2014-07-27 01:16:11 --> Database Driver Class Initialized
ERROR - 2014-07-27 01:16:11 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 01:16:11 --> Session Class Initialized
DEBUG - 2014-07-27 01:16:11 --> Helper loaded: string_helper
DEBUG - 2014-07-27 01:16:11 --> Session routines successfully run
DEBUG - 2014-07-27 01:16:11 --> Form Validation Class Initialized
DEBUG - 2014-07-27 01:16:11 --> Controller Class Initialized
DEBUG - 2014-07-27 01:16:11 --> Model Class Initialized
DEBUG - 2014-07-27 01:16:11 --> Model Class Initialized
DEBUG - 2014-07-27 01:16:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 01:16:11 --> Encrypt Class Initialized
INFO  - 2014-07-27 01:16:11 --> after session initialization................
INFO  - 2014-07-27 01:16:11 --> inside the register member.................
INFO  - 2014-07-27 01:16:11 --> before initializing member array.................
INFO  - 2014-07-27 01:16:11 --> before setting validation rules.................
INFO  - 2014-07-27 01:16:11 --> after setting validation rules.................
DEBUG - 2014-07-27 01:16:11 --> Language file loaded: language/english/form_validation_lang.php
INFO  - 2014-07-27 01:16:11 --> validation is false so error message is returned.................
INFO  - 2014-07-27 01:16:11 --> the form message controller==><p>The Date of birth *  field is required.</p>------<p>The Date of birth *  field is required.</p>--------<p>The Month of birth  field is required.</p>---------<p>The Year of birth *  field is required.</p>
DEBUG - 2014-07-27 01:16:11 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-07-27 01:16:11 --> Final output sent to browser
DEBUG - 2014-07-27 01:16:11 --> Total execution time: 0.0491
DEBUG - 2014-07-27 01:16:20 --> Config Class Initialized
DEBUG - 2014-07-27 01:16:20 --> Hooks Class Initialized
DEBUG - 2014-07-27 01:16:20 --> Utf8 Class Initialized
DEBUG - 2014-07-27 01:16:20 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 01:16:20 --> URI Class Initialized
DEBUG - 2014-07-27 01:16:20 --> Router Class Initialized
DEBUG - 2014-07-27 01:16:20 --> Output Class Initialized
DEBUG - 2014-07-27 01:16:20 --> Security Class Initialized
DEBUG - 2014-07-27 01:16:20 --> Input Class Initialized
DEBUG - 2014-07-27 01:16:20 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 01:16:20 --> Language Class Initialized
DEBUG - 2014-07-27 01:16:20 --> Loader Class Initialized
DEBUG - 2014-07-27 01:16:20 --> Helper loaded: form_helper
DEBUG - 2014-07-27 01:16:20 --> Helper loaded: url_helper
DEBUG - 2014-07-27 01:16:20 --> Helper loaded: html_helper
DEBUG - 2014-07-27 01:16:20 --> Database Driver Class Initialized
ERROR - 2014-07-27 01:16:20 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 01:16:20 --> Session Class Initialized
DEBUG - 2014-07-27 01:16:20 --> Helper loaded: string_helper
DEBUG - 2014-07-27 01:16:20 --> Session routines successfully run
DEBUG - 2014-07-27 01:16:20 --> Form Validation Class Initialized
DEBUG - 2014-07-27 01:16:20 --> Controller Class Initialized
DEBUG - 2014-07-27 01:16:20 --> Model Class Initialized
DEBUG - 2014-07-27 01:16:20 --> Model Class Initialized
DEBUG - 2014-07-27 01:16:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 01:16:20 --> Encrypt Class Initialized
INFO  - 2014-07-27 01:16:20 --> after session initialization................
INFO  - 2014-07-27 01:16:20 --> inside the register member.................
INFO  - 2014-07-27 01:16:20 --> before initializing member array.................
INFO  - 2014-07-27 01:16:20 --> before setting validation rules.................
INFO  - 2014-07-27 01:16:20 --> after setting validation rules.................
DEBUG - 2014-07-27 01:16:20 --> Language file loaded: language/english/form_validation_lang.php
INFO  - 2014-07-27 01:16:20 --> validation is false so error message is returned.................
INFO  - 2014-07-27 01:16:20 --> the form message controller==><p>The Date of birth *  field is required.</p>------<p>The Date of birth *  field is required.</p>--------<p>The Month of birth  field is required.</p>---------<p>The Year of birth *  field is required.</p>
DEBUG - 2014-07-27 01:16:20 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-07-27 01:16:20 --> Final output sent to browser
DEBUG - 2014-07-27 01:16:20 --> Total execution time: 0.0401
DEBUG - 2014-07-27 01:16:54 --> Config Class Initialized
DEBUG - 2014-07-27 01:16:54 --> Hooks Class Initialized
DEBUG - 2014-07-27 01:16:54 --> Utf8 Class Initialized
DEBUG - 2014-07-27 01:16:54 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 01:16:54 --> URI Class Initialized
DEBUG - 2014-07-27 01:16:54 --> Router Class Initialized
DEBUG - 2014-07-27 01:16:54 --> Output Class Initialized
DEBUG - 2014-07-27 01:16:54 --> Security Class Initialized
DEBUG - 2014-07-27 01:16:54 --> Input Class Initialized
DEBUG - 2014-07-27 01:16:54 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 01:16:54 --> Language Class Initialized
DEBUG - 2014-07-27 01:16:54 --> Loader Class Initialized
DEBUG - 2014-07-27 01:16:54 --> Helper loaded: form_helper
DEBUG - 2014-07-27 01:16:54 --> Helper loaded: url_helper
DEBUG - 2014-07-27 01:16:54 --> Helper loaded: html_helper
DEBUG - 2014-07-27 01:16:54 --> Database Driver Class Initialized
ERROR - 2014-07-27 01:16:54 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 01:16:54 --> Session Class Initialized
DEBUG - 2014-07-27 01:16:54 --> Helper loaded: string_helper
DEBUG - 2014-07-27 01:16:54 --> Session routines successfully run
DEBUG - 2014-07-27 01:16:54 --> Form Validation Class Initialized
DEBUG - 2014-07-27 01:16:54 --> Controller Class Initialized
DEBUG - 2014-07-27 01:16:54 --> Model Class Initialized
DEBUG - 2014-07-27 01:16:54 --> Model Class Initialized
DEBUG - 2014-07-27 01:16:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 01:16:54 --> Encrypt Class Initialized
INFO  - 2014-07-27 01:16:54 --> after session initialization................
INFO  - 2014-07-27 01:16:54 --> inside the register member.................
INFO  - 2014-07-27 01:16:54 --> before initializing member array.................
INFO  - 2014-07-27 01:16:54 --> before setting validation rules.................
INFO  - 2014-07-27 01:16:54 --> after setting validation rules.................
DEBUG - 2014-07-27 01:16:54 --> Language file loaded: language/english/form_validation_lang.php
INFO  - 2014-07-27 01:16:54 --> validation is false so error message is returned.................
INFO  - 2014-07-27 01:16:54 --> the form message controller==><p>The Date of birth *  field is required.</p>------<p>The Date of birth *  field is required.</p>--------<p>The Month of birth  field is required.</p>---------<p>The Year of birth *  field is required.</p>
DEBUG - 2014-07-27 01:16:54 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-07-27 01:16:54 --> Final output sent to browser
DEBUG - 2014-07-27 01:16:54 --> Total execution time: 0.0396
DEBUG - 2014-07-27 01:17:09 --> Config Class Initialized
DEBUG - 2014-07-27 01:17:09 --> Hooks Class Initialized
DEBUG - 2014-07-27 01:17:09 --> Utf8 Class Initialized
DEBUG - 2014-07-27 01:17:09 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 01:17:09 --> URI Class Initialized
DEBUG - 2014-07-27 01:17:09 --> Router Class Initialized
DEBUG - 2014-07-27 01:17:09 --> Output Class Initialized
DEBUG - 2014-07-27 01:17:09 --> Security Class Initialized
DEBUG - 2014-07-27 01:17:09 --> Input Class Initialized
DEBUG - 2014-07-27 01:17:09 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 01:17:09 --> Language Class Initialized
DEBUG - 2014-07-27 01:17:09 --> Loader Class Initialized
DEBUG - 2014-07-27 01:17:09 --> Helper loaded: form_helper
DEBUG - 2014-07-27 01:17:09 --> Helper loaded: url_helper
DEBUG - 2014-07-27 01:17:09 --> Helper loaded: html_helper
DEBUG - 2014-07-27 01:17:09 --> Database Driver Class Initialized
ERROR - 2014-07-27 01:17:09 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 01:17:09 --> Session Class Initialized
DEBUG - 2014-07-27 01:17:09 --> Helper loaded: string_helper
DEBUG - 2014-07-27 01:17:09 --> Session routines successfully run
DEBUG - 2014-07-27 01:17:09 --> Form Validation Class Initialized
DEBUG - 2014-07-27 01:17:09 --> Controller Class Initialized
DEBUG - 2014-07-27 01:17:09 --> Model Class Initialized
DEBUG - 2014-07-27 01:17:09 --> Model Class Initialized
DEBUG - 2014-07-27 01:17:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 01:17:09 --> Encrypt Class Initialized
INFO  - 2014-07-27 01:17:09 --> after session initialization................
INFO  - 2014-07-27 01:17:09 --> inside the register member.................
INFO  - 2014-07-27 01:17:09 --> before initializing member array.................
INFO  - 2014-07-27 01:17:09 --> before setting validation rules.................
INFO  - 2014-07-27 01:17:09 --> after setting validation rules.................
DEBUG - 2014-07-27 01:17:09 --> Language file loaded: language/english/form_validation_lang.php
INFO  - 2014-07-27 01:17:09 --> validation is false so error message is returned.................
INFO  - 2014-07-27 01:17:09 --> the form message controller==><p>The Date of birth *  field is required.</p>------<p>The Date of birth *  field is required.</p>--------<p>The Month of birth  field is required.</p>---------<p>The Year of birth *  field is required.</p>
DEBUG - 2014-07-27 01:17:09 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-07-27 01:17:09 --> Final output sent to browser
DEBUG - 2014-07-27 01:17:09 --> Total execution time: 0.0449
DEBUG - 2014-07-27 01:17:53 --> Config Class Initialized
DEBUG - 2014-07-27 01:17:53 --> Hooks Class Initialized
DEBUG - 2014-07-27 01:17:53 --> Utf8 Class Initialized
DEBUG - 2014-07-27 01:17:53 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 01:17:53 --> URI Class Initialized
DEBUG - 2014-07-27 01:17:53 --> Router Class Initialized
DEBUG - 2014-07-27 01:17:53 --> Output Class Initialized
DEBUG - 2014-07-27 01:17:53 --> Security Class Initialized
DEBUG - 2014-07-27 01:17:53 --> Input Class Initialized
DEBUG - 2014-07-27 01:17:53 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 01:17:53 --> Language Class Initialized
DEBUG - 2014-07-27 01:17:53 --> Loader Class Initialized
DEBUG - 2014-07-27 01:17:53 --> Helper loaded: form_helper
DEBUG - 2014-07-27 01:17:53 --> Helper loaded: url_helper
DEBUG - 2014-07-27 01:17:53 --> Helper loaded: html_helper
DEBUG - 2014-07-27 01:17:53 --> Database Driver Class Initialized
ERROR - 2014-07-27 01:17:53 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 01:17:53 --> Session Class Initialized
DEBUG - 2014-07-27 01:17:53 --> Helper loaded: string_helper
DEBUG - 2014-07-27 01:17:53 --> Session routines successfully run
DEBUG - 2014-07-27 01:17:53 --> Form Validation Class Initialized
DEBUG - 2014-07-27 01:17:53 --> Controller Class Initialized
DEBUG - 2014-07-27 01:17:53 --> Model Class Initialized
DEBUG - 2014-07-27 01:17:53 --> Model Class Initialized
DEBUG - 2014-07-27 01:17:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 01:17:53 --> Encrypt Class Initialized
INFO  - 2014-07-27 01:17:53 --> after session initialization................
INFO  - 2014-07-27 01:17:53 --> inside the register member.................
INFO  - 2014-07-27 01:17:53 --> before initializing member array.................
INFO  - 2014-07-27 01:17:53 --> before setting validation rules.................
INFO  - 2014-07-27 01:17:53 --> after setting validation rules.................
DEBUG - 2014-07-27 01:17:53 --> Language file loaded: language/english/form_validation_lang.php
INFO  - 2014-07-27 01:17:53 --> validation is false so error message is returned.................
INFO  - 2014-07-27 01:17:53 --> the form message controller==><p>The Date of birth *  field is required.</p>------<p>The Date of birth *  field is required.</p>--------<p>The Month of birth  field is required.</p>---------<p>The Year of birth *  field is required.</p>
DEBUG - 2014-07-27 01:17:53 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-07-27 01:17:53 --> Final output sent to browser
DEBUG - 2014-07-27 01:17:53 --> Total execution time: 0.0384
DEBUG - 2014-07-27 01:18:17 --> Config Class Initialized
DEBUG - 2014-07-27 01:18:17 --> Hooks Class Initialized
DEBUG - 2014-07-27 01:18:17 --> Utf8 Class Initialized
DEBUG - 2014-07-27 01:18:17 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 01:18:17 --> URI Class Initialized
DEBUG - 2014-07-27 01:18:17 --> Router Class Initialized
DEBUG - 2014-07-27 01:18:17 --> Output Class Initialized
DEBUG - 2014-07-27 01:18:17 --> Security Class Initialized
DEBUG - 2014-07-27 01:18:17 --> Input Class Initialized
DEBUG - 2014-07-27 01:18:17 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 01:18:17 --> Language Class Initialized
DEBUG - 2014-07-27 01:18:17 --> Loader Class Initialized
DEBUG - 2014-07-27 01:18:17 --> Helper loaded: form_helper
DEBUG - 2014-07-27 01:18:17 --> Helper loaded: url_helper
DEBUG - 2014-07-27 01:18:17 --> Helper loaded: html_helper
DEBUG - 2014-07-27 01:18:17 --> Database Driver Class Initialized
ERROR - 2014-07-27 01:18:17 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 01:18:17 --> Session Class Initialized
DEBUG - 2014-07-27 01:18:17 --> Helper loaded: string_helper
DEBUG - 2014-07-27 01:18:17 --> Session routines successfully run
DEBUG - 2014-07-27 01:18:17 --> Form Validation Class Initialized
DEBUG - 2014-07-27 01:18:17 --> Controller Class Initialized
DEBUG - 2014-07-27 01:18:17 --> Model Class Initialized
DEBUG - 2014-07-27 01:18:17 --> Model Class Initialized
DEBUG - 2014-07-27 01:18:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 01:18:17 --> Encrypt Class Initialized
INFO  - 2014-07-27 01:18:17 --> after session initialization................
INFO  - 2014-07-27 01:18:17 --> inside the register member.................
INFO  - 2014-07-27 01:18:17 --> before initializing member array.................
INFO  - 2014-07-27 01:18:17 --> before setting validation rules.................
INFO  - 2014-07-27 01:18:17 --> after setting validation rules.................
DEBUG - 2014-07-27 01:18:17 --> Language file loaded: language/english/form_validation_lang.php
INFO  - 2014-07-27 01:18:17 --> validation is false so error message is returned.................
INFO  - 2014-07-27 01:18:17 --> the form message controller==><p>The Date of birth *  field is required.</p>------<p>The Date of birth *  field is required.</p>--------<p>The Month of birth  field is required.</p>---------<p>The Year of birth *  field is required.</p>
DEBUG - 2014-07-27 01:18:17 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-07-27 01:18:17 --> Final output sent to browser
DEBUG - 2014-07-27 01:18:17 --> Total execution time: 0.0348
DEBUG - 2014-07-27 01:18:41 --> Config Class Initialized
DEBUG - 2014-07-27 01:18:41 --> Hooks Class Initialized
DEBUG - 2014-07-27 01:18:41 --> Utf8 Class Initialized
DEBUG - 2014-07-27 01:18:41 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 01:18:41 --> URI Class Initialized
DEBUG - 2014-07-27 01:18:41 --> Router Class Initialized
DEBUG - 2014-07-27 01:18:41 --> Output Class Initialized
DEBUG - 2014-07-27 01:18:41 --> Security Class Initialized
DEBUG - 2014-07-27 01:18:41 --> Input Class Initialized
DEBUG - 2014-07-27 01:18:41 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 01:18:41 --> Language Class Initialized
DEBUG - 2014-07-27 01:18:41 --> Loader Class Initialized
DEBUG - 2014-07-27 01:18:41 --> Helper loaded: form_helper
DEBUG - 2014-07-27 01:18:41 --> Helper loaded: url_helper
DEBUG - 2014-07-27 01:18:41 --> Helper loaded: html_helper
DEBUG - 2014-07-27 01:18:41 --> Database Driver Class Initialized
ERROR - 2014-07-27 01:18:41 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 01:18:41 --> Session Class Initialized
DEBUG - 2014-07-27 01:18:41 --> Helper loaded: string_helper
DEBUG - 2014-07-27 01:18:41 --> Session routines successfully run
DEBUG - 2014-07-27 01:18:41 --> Form Validation Class Initialized
DEBUG - 2014-07-27 01:18:41 --> Controller Class Initialized
DEBUG - 2014-07-27 01:18:41 --> Model Class Initialized
DEBUG - 2014-07-27 01:18:41 --> Model Class Initialized
DEBUG - 2014-07-27 01:18:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 01:18:41 --> Encrypt Class Initialized
INFO  - 2014-07-27 01:18:41 --> after session initialization................
INFO  - 2014-07-27 01:18:41 --> inside the register member.................
INFO  - 2014-07-27 01:18:41 --> before initializing member array.................
INFO  - 2014-07-27 01:18:41 --> before setting validation rules.................
INFO  - 2014-07-27 01:18:41 --> after setting validation rules.................
DEBUG - 2014-07-27 01:18:41 --> Language file loaded: language/english/form_validation_lang.php
INFO  - 2014-07-27 01:18:41 --> validation is false so error message is returned.................
INFO  - 2014-07-27 01:18:41 --> the form message controller==><p>The Date of birth *  field is required.</p>------<p>The Date of birth *  field is required.</p>--------<p>The Month of birth  field is required.</p>---------<p>The Year of birth *  field is required.</p>
DEBUG - 2014-07-27 01:18:41 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-07-27 01:18:41 --> Final output sent to browser
DEBUG - 2014-07-27 01:18:41 --> Total execution time: 0.0344
DEBUG - 2014-07-27 01:18:57 --> Config Class Initialized
DEBUG - 2014-07-27 01:18:57 --> Hooks Class Initialized
DEBUG - 2014-07-27 01:18:57 --> Utf8 Class Initialized
DEBUG - 2014-07-27 01:18:57 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 01:18:57 --> URI Class Initialized
DEBUG - 2014-07-27 01:18:57 --> Router Class Initialized
DEBUG - 2014-07-27 01:18:57 --> Output Class Initialized
DEBUG - 2014-07-27 01:18:57 --> Security Class Initialized
DEBUG - 2014-07-27 01:18:57 --> Input Class Initialized
DEBUG - 2014-07-27 01:18:57 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 01:18:57 --> Language Class Initialized
DEBUG - 2014-07-27 01:18:57 --> Loader Class Initialized
DEBUG - 2014-07-27 01:18:57 --> Helper loaded: form_helper
DEBUG - 2014-07-27 01:18:57 --> Helper loaded: url_helper
DEBUG - 2014-07-27 01:18:57 --> Helper loaded: html_helper
DEBUG - 2014-07-27 01:18:57 --> Database Driver Class Initialized
ERROR - 2014-07-27 01:18:57 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 01:18:57 --> Session Class Initialized
DEBUG - 2014-07-27 01:18:57 --> Helper loaded: string_helper
DEBUG - 2014-07-27 01:18:57 --> Session routines successfully run
DEBUG - 2014-07-27 01:18:57 --> Form Validation Class Initialized
DEBUG - 2014-07-27 01:18:57 --> Controller Class Initialized
DEBUG - 2014-07-27 01:18:57 --> Model Class Initialized
DEBUG - 2014-07-27 01:18:57 --> Model Class Initialized
DEBUG - 2014-07-27 01:18:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 01:18:57 --> Encrypt Class Initialized
INFO  - 2014-07-27 01:18:57 --> after session initialization................
INFO  - 2014-07-27 01:18:57 --> inside the register member.................
INFO  - 2014-07-27 01:18:57 --> before initializing member array.................
INFO  - 2014-07-27 01:18:57 --> before setting validation rules.................
INFO  - 2014-07-27 01:18:57 --> after setting validation rules.................
DEBUG - 2014-07-27 01:18:57 --> Language file loaded: language/english/form_validation_lang.php
INFO  - 2014-07-27 01:18:57 --> validation is false so error message is returned.................
INFO  - 2014-07-27 01:18:57 --> the form message controller==><p>The Date of birth *  field is required.</p>------<p>The Date of birth *  field is required.</p>--------<p>The Month of birth  field is required.</p>---------<p>The Year of birth *  field is required.</p>
DEBUG - 2014-07-27 01:18:57 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-07-27 01:18:58 --> Final output sent to browser
DEBUG - 2014-07-27 01:18:58 --> Total execution time: 0.0677
DEBUG - 2014-07-27 01:19:09 --> Config Class Initialized
DEBUG - 2014-07-27 01:19:09 --> Hooks Class Initialized
DEBUG - 2014-07-27 01:19:09 --> Utf8 Class Initialized
DEBUG - 2014-07-27 01:19:09 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 01:19:09 --> URI Class Initialized
DEBUG - 2014-07-27 01:19:09 --> Router Class Initialized
DEBUG - 2014-07-27 01:19:09 --> Output Class Initialized
DEBUG - 2014-07-27 01:19:09 --> Security Class Initialized
DEBUG - 2014-07-27 01:19:09 --> Input Class Initialized
DEBUG - 2014-07-27 01:19:09 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 01:19:09 --> Language Class Initialized
DEBUG - 2014-07-27 01:19:09 --> Loader Class Initialized
DEBUG - 2014-07-27 01:19:09 --> Helper loaded: form_helper
DEBUG - 2014-07-27 01:19:09 --> Helper loaded: url_helper
DEBUG - 2014-07-27 01:19:09 --> Helper loaded: html_helper
DEBUG - 2014-07-27 01:19:09 --> Database Driver Class Initialized
ERROR - 2014-07-27 01:19:09 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 01:19:09 --> Session Class Initialized
DEBUG - 2014-07-27 01:19:09 --> Helper loaded: string_helper
DEBUG - 2014-07-27 01:19:09 --> Session routines successfully run
DEBUG - 2014-07-27 01:19:09 --> Form Validation Class Initialized
DEBUG - 2014-07-27 01:19:09 --> Controller Class Initialized
DEBUG - 2014-07-27 01:19:09 --> Model Class Initialized
DEBUG - 2014-07-27 01:19:09 --> Model Class Initialized
DEBUG - 2014-07-27 01:19:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 01:19:09 --> Encrypt Class Initialized
INFO  - 2014-07-27 01:19:09 --> after session initialization................
INFO  - 2014-07-27 01:19:09 --> inside the register member.................
INFO  - 2014-07-27 01:19:09 --> before initializing member array.................
INFO  - 2014-07-27 01:19:09 --> before setting validation rules.................
INFO  - 2014-07-27 01:19:09 --> after setting validation rules.................
DEBUG - 2014-07-27 01:19:09 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2014-07-27 01:19:09 --> XSS Filtering completed
INFO  - 2014-07-27 01:19:09 --> inside retrieve most searched pharmacy
INFO  - 2014-07-27 01:19:09 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 20
INFO  - 2014-07-27 01:19:09 --> inside retrieve most searched pharmacy
INFO  - 2014-07-27 01:19:09 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 20
INFO  - 2014-07-27 01:19:09 --> inside retrieve most searched pharmacy
INFO  - 2014-07-27 01:19:09 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 20
INFO  - 2014-07-27 01:19:09 --> validation is false so error message is returned.................
INFO  - 2014-07-27 01:19:09 --> the form message controller==>-----------------------
DEBUG - 2014-07-27 01:19:09 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-07-27 01:19:09 --> Final output sent to browser
DEBUG - 2014-07-27 01:19:09 --> Total execution time: 0.0679
DEBUG - 2014-07-27 01:19:12 --> Config Class Initialized
DEBUG - 2014-07-27 01:19:12 --> Hooks Class Initialized
DEBUG - 2014-07-27 01:19:12 --> Utf8 Class Initialized
DEBUG - 2014-07-27 01:19:12 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 01:19:12 --> URI Class Initialized
DEBUG - 2014-07-27 01:19:12 --> Router Class Initialized
DEBUG - 2014-07-27 01:19:12 --> Output Class Initialized
DEBUG - 2014-07-27 01:19:12 --> Security Class Initialized
DEBUG - 2014-07-27 01:19:12 --> Input Class Initialized
DEBUG - 2014-07-27 01:19:12 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 01:19:12 --> Language Class Initialized
DEBUG - 2014-07-27 01:19:12 --> Loader Class Initialized
DEBUG - 2014-07-27 01:19:12 --> Helper loaded: form_helper
DEBUG - 2014-07-27 01:19:12 --> Helper loaded: url_helper
DEBUG - 2014-07-27 01:19:12 --> Helper loaded: html_helper
DEBUG - 2014-07-27 01:19:12 --> Database Driver Class Initialized
ERROR - 2014-07-27 01:19:12 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 01:19:12 --> Session Class Initialized
DEBUG - 2014-07-27 01:19:12 --> Helper loaded: string_helper
DEBUG - 2014-07-27 01:19:12 --> Session routines successfully run
DEBUG - 2014-07-27 01:19:12 --> Form Validation Class Initialized
DEBUG - 2014-07-27 01:19:12 --> Controller Class Initialized
DEBUG - 2014-07-27 01:19:12 --> Model Class Initialized
DEBUG - 2014-07-27 01:19:12 --> Model Class Initialized
DEBUG - 2014-07-27 01:19:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 01:19:12 --> Encrypt Class Initialized
INFO  - 2014-07-27 01:19:12 --> after session initialization................
INFO  - 2014-07-27 01:19:12 --> inside the register member.................
INFO  - 2014-07-27 01:19:12 --> before initializing member array.................
INFO  - 2014-07-27 01:19:12 --> before setting validation rules.................
INFO  - 2014-07-27 01:19:12 --> after setting validation rules.................
DEBUG - 2014-07-27 01:19:12 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2014-07-27 01:19:12 --> XSS Filtering completed
INFO  - 2014-07-27 01:19:12 --> inside retrieve most searched pharmacy
INFO  - 2014-07-27 01:19:12 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 20
INFO  - 2014-07-27 01:19:12 --> inside retrieve most searched pharmacy
INFO  - 2014-07-27 01:19:12 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 20
INFO  - 2014-07-27 01:19:12 --> inside retrieve most searched pharmacy
INFO  - 2014-07-27 01:19:12 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 20
INFO  - 2014-07-27 01:19:12 --> validation is false so error message is returned.................
INFO  - 2014-07-27 01:19:12 --> the form message controller==>-----------------------
DEBUG - 2014-07-27 01:19:12 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-07-27 01:19:12 --> Final output sent to browser
DEBUG - 2014-07-27 01:19:12 --> Total execution time: 0.0889
DEBUG - 2014-07-27 01:19:13 --> Config Class Initialized
DEBUG - 2014-07-27 01:19:13 --> Hooks Class Initialized
DEBUG - 2014-07-27 01:19:13 --> Utf8 Class Initialized
DEBUG - 2014-07-27 01:19:13 --> UTF-8 Support Enabled
DEBUG - 2014-07-27 01:19:13 --> URI Class Initialized
DEBUG - 2014-07-27 01:19:13 --> Router Class Initialized
DEBUG - 2014-07-27 01:19:13 --> Output Class Initialized
DEBUG - 2014-07-27 01:19:13 --> Security Class Initialized
DEBUG - 2014-07-27 01:19:13 --> Input Class Initialized
DEBUG - 2014-07-27 01:19:13 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-27 01:19:13 --> Language Class Initialized
DEBUG - 2014-07-27 01:19:13 --> Loader Class Initialized
DEBUG - 2014-07-27 01:19:13 --> Helper loaded: form_helper
DEBUG - 2014-07-27 01:19:13 --> Helper loaded: url_helper
DEBUG - 2014-07-27 01:19:13 --> Helper loaded: html_helper
DEBUG - 2014-07-27 01:19:13 --> Database Driver Class Initialized
ERROR - 2014-07-27 01:19:13 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-27 01:19:13 --> Session Class Initialized
DEBUG - 2014-07-27 01:19:13 --> Helper loaded: string_helper
DEBUG - 2014-07-27 01:19:13 --> Session routines successfully run
DEBUG - 2014-07-27 01:19:13 --> Form Validation Class Initialized
DEBUG - 2014-07-27 01:19:13 --> Controller Class Initialized
DEBUG - 2014-07-27 01:19:13 --> Model Class Initialized
DEBUG - 2014-07-27 01:19:13 --> Model Class Initialized
DEBUG - 2014-07-27 01:19:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-27 01:19:13 --> Encrypt Class Initialized
INFO  - 2014-07-27 01:19:13 --> after session initialization................
INFO  - 2014-07-27 01:19:13 --> inside the register member.................
INFO  - 2014-07-27 01:19:13 --> before initializing member array.................
INFO  - 2014-07-27 01:19:13 --> before setting validation rules.................
INFO  - 2014-07-27 01:19:13 --> after setting validation rules.................
DEBUG - 2014-07-27 01:19:13 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2014-07-27 01:19:13 --> XSS Filtering completed
INFO  - 2014-07-27 01:19:13 --> inside retrieve most searched pharmacy
INFO  - 2014-07-27 01:19:13 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 20
INFO  - 2014-07-27 01:19:13 --> inside retrieve most searched pharmacy
INFO  - 2014-07-27 01:19:13 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 20
INFO  - 2014-07-27 01:19:13 --> inside retrieve most searched pharmacy
INFO  - 2014-07-27 01:19:13 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 20
INFO  - 2014-07-27 01:19:13 --> validation is false so error message is returned.................
INFO  - 2014-07-27 01:19:13 --> the form message controller==>-----------------------
DEBUG - 2014-07-27 01:19:13 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-07-27 01:19:13 --> Final output sent to browser
DEBUG - 2014-07-27 01:19:13 --> Total execution time: 0.0600
