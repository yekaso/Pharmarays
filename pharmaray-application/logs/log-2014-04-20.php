<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2014-04-20 15:50:19 --> Config Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Hooks Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Utf8 Class Initialized
DEBUG - 2014-04-20 15:50:19 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 15:50:19 --> URI Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Router Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Output Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Security Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Input Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 15:50:19 --> Language Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Loader Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Helper loaded: form_helper
DEBUG - 2014-04-20 15:50:19 --> Helper loaded: url_helper
DEBUG - 2014-04-20 15:50:19 --> Helper loaded: html_helper
DEBUG - 2014-04-20 15:50:19 --> Database Driver Class Initialized
ERROR - 2014-04-20 15:50:19 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 15:50:19 --> Session Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Helper loaded: string_helper
DEBUG - 2014-04-20 15:50:19 --> A session cookie was not found.
DEBUG - 2014-04-20 15:50:19 --> Session routines successfully run
DEBUG - 2014-04-20 15:50:19 --> Form Validation Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Controller Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Model Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Model Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 15:50:19 --> Encrypt Class Initialized
INFO  - 2014-04-20 15:50:19 --> after session initialization................
INFO  - 2014-04-20 15:50:19 --> after internships list has been clicked.................
INFO  - 2014-04-20 15:50:19 --> inside retrieving locations 
INFO  - 2014-04-20 15:50:19 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-20 15:50:19 --> inside retrieving internship firms 
INFO  - 2014-04-20 15:50:19 --> SELECT `intf`.`id_internshipfirm` as id, `intf`.`name` as name
FROM (`internship_firm` intf)
ORDER BY `intf`.`name`
INFO  - 2014-04-20 15:50:19 --> inside retrieving internship duration 
INFO  - 2014-04-20 15:50:19 --> SELECT `intd`.`id_internshipduration` as id, `intd`.`name` as name
FROM (`internship_duration` intd)
ORDER BY `intd`.`id_internshipduration`
INFO  - 2014-04-20 15:50:19 --> inside retrieving internship specialization 
INFO  - 2014-04-20 15:50:19 --> SELECT `ints`.`id_internshipspecialization` as id, `ints`.`name` as name
FROM (`internship_specialization` ints)
ORDER BY `ints`.`name`
INFO  - 2014-04-20 15:50:19 --> last intern id is 0
INFO  - 2014-04-20 15:50:19 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` <> 0
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` desc
LIMIT 20
DEBUG - 2014-04-20 15:50:19 --> Config Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Hooks Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Utf8 Class Initialized
DEBUG - 2014-04-20 15:50:19 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 15:50:19 --> URI Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Router Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Output Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Security Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Input Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 15:50:19 --> Language Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Loader Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Helper loaded: form_helper
DEBUG - 2014-04-20 15:50:19 --> Helper loaded: url_helper
DEBUG - 2014-04-20 15:50:19 --> Helper loaded: html_helper
DEBUG - 2014-04-20 15:50:19 --> Database Driver Class Initialized
ERROR - 2014-04-20 15:50:19 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 15:50:19 --> Session Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Helper loaded: string_helper
DEBUG - 2014-04-20 15:50:19 --> Session routines successfully run
DEBUG - 2014-04-20 15:50:19 --> Form Validation Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Controller Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Model Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Model Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 15:50:19 --> Encrypt Class Initialized
INFO  - 2014-04-20 15:50:19 --> after session initialization................
DEBUG - 2014-04-20 15:50:19 --> Config Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Hooks Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Utf8 Class Initialized
DEBUG - 2014-04-20 15:50:19 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 15:50:19 --> URI Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Router Class Initialized
DEBUG - 2014-04-20 15:50:19 --> No URI present. Default controller set.
DEBUG - 2014-04-20 15:50:19 --> Output Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Security Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Input Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 15:50:19 --> Language Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Loader Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Helper loaded: form_helper
DEBUG - 2014-04-20 15:50:19 --> Helper loaded: url_helper
DEBUG - 2014-04-20 15:50:19 --> Helper loaded: html_helper
DEBUG - 2014-04-20 15:50:19 --> Database Driver Class Initialized
ERROR - 2014-04-20 15:50:19 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 15:50:19 --> Session Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Helper loaded: string_helper
DEBUG - 2014-04-20 15:50:19 --> A session cookie was not found.
DEBUG - 2014-04-20 15:50:19 --> Session routines successfully run
DEBUG - 2014-04-20 15:50:19 --> Form Validation Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Controller Class Initialized
DEBUG - 2014-04-20 15:50:19 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2014-04-20 15:50:19 --> Final output sent to browser
DEBUG - 2014-04-20 15:50:19 --> Total execution time: 0.0209
DEBUG - 2014-04-20 15:50:19 --> Config Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Hooks Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Utf8 Class Initialized
DEBUG - 2014-04-20 15:50:19 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 15:50:19 --> URI Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Router Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Output Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Security Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Input Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 15:50:19 --> Language Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Loader Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Helper loaded: form_helper
DEBUG - 2014-04-20 15:50:19 --> Helper loaded: url_helper
DEBUG - 2014-04-20 15:50:19 --> Helper loaded: html_helper
DEBUG - 2014-04-20 15:50:19 --> Database Driver Class Initialized
ERROR - 2014-04-20 15:50:19 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 15:50:19 --> Session Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Helper loaded: string_helper
DEBUG - 2014-04-20 15:50:19 --> Session routines successfully run
DEBUG - 2014-04-20 15:50:19 --> Form Validation Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Controller Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Model Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Model Class Initialized
DEBUG - 2014-04-20 15:50:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 15:50:19 --> Encrypt Class Initialized
INFO  - 2014-04-20 15:50:19 --> after session initialization................
INFO  - 2014-04-20 15:50:19 --> after rays has been clicked.................
INFO  - 2014-04-20 15:50:19 --> last article id is 0
INFO  - 2014-04-20 15:50:19 --> The session id is ========>8e6651498b55a1ace1fb4e7d0173b590 and the member id is =======>
INFO  - 2014-04-20 15:50:19 --> The session id is ========>8e6651498b55a1ace1fb4e7d0173b590 and the member id is =======>
INFO  - 2014-04-20 15:50:19 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-20 15:50:19 --> 0 the guest only data>>>>>
INFO  - 2014-04-20 15:50:19 --> 0 the guest only data>> AFTER >>>#31
INFO  - 2014-04-20 15:50:19 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-20 15:50:19 --> 0 the guest only data>>>>>#31
INFO  - 2014-04-20 15:50:19 --> 0 the guest only data>> AFTER >>>#16
INFO  - 2014-04-20 15:50:19 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-20 15:50:19 --> 1 the guest only data>>>>>#16
INFO  - 2014-04-20 15:50:19 --> 1 the guest only data>> AFTER >>>#16
INFO  - 2014-04-20 15:50:19 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-20 15:50:19 --> 0 the guest only data>>>>>#16
INFO  - 2014-04-20 15:50:19 --> 0 the guest only data>> AFTER >>>#14
INFO  - 2014-04-20 15:50:19 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-20 15:50:19 --> 1 the guest only data>>>>>#14
INFO  - 2014-04-20 15:50:19 --> 1 the guest only data>> AFTER >>>#14
INFO  - 2014-04-20 15:50:19 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-20 15:50:19 --> 0 the guest only data>>>>>#14
INFO  - 2014-04-20 15:50:19 --> 0 the guest only data>> AFTER >>>#12
INFO  - 2014-04-20 15:50:19 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-20 15:50:19 --> 1 the guest only data>>>>>#12
INFO  - 2014-04-20 15:50:19 --> 1 the guest only data>> AFTER >>>#12
INFO  - 2014-04-20 15:50:19 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-20 15:50:19 --> 0 the guest only data>>>>>#12
INFO  - 2014-04-20 15:50:19 --> 0 the guest only data>> AFTER >>>#10
INFO  - 2014-04-20 15:50:19 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-20 15:50:19 --> 0 the guest only data>>>>>#10
INFO  - 2014-04-20 15:50:19 --> 0 the guest only data>> AFTER >>>#9
INFO  - 2014-04-20 15:50:19 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-20 15:50:19 --> 1 the guest only data>>>>>#9
INFO  - 2014-04-20 15:50:19 --> 1 the guest only data>> AFTER >>>#9
INFO  - 2014-04-20 15:50:19 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-20 15:50:19 --> 0 the guest only data>>>>>#9
INFO  - 2014-04-20 15:50:19 --> 0 the guest only data>> AFTER >>>#7
INFO  - 2014-04-20 15:50:19 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-20 15:50:19 --> 1 the guest only data>>>>>#7
INFO  - 2014-04-20 15:50:19 --> 1 the guest only data>> AFTER >>>#7
INFO  - 2014-04-20 15:50:19 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-20 15:50:19 --> 0 the guest only data>>>>>#7
INFO  - 2014-04-20 15:50:19 --> 0 the guest only data>> AFTER >>>#5
INFO  - 2014-04-20 15:50:19 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-20 15:50:19 --> 0 the guest only data>>>>>#5
INFO  - 2014-04-20 15:50:19 --> 0 the guest only data>> AFTER >>>#4
INFO  - 2014-04-20 15:50:19 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-20 15:50:19 --> 1 the guest only data>>>>>#4
INFO  - 2014-04-20 15:50:19 --> 1 the guest only data>> AFTER >>>#4
INFO  - 2014-04-20 15:50:19 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-20 15:50:19 --> 1 the guest only data>>>>>#4
INFO  - 2014-04-20 15:50:19 --> 1 the guest only data>> AFTER >>>#4
INFO  - 2014-04-20 15:50:19 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-20 15:50:19 --> 1 the guest only data>>>>>#4
INFO  - 2014-04-20 15:50:19 --> 1 the guest only data>> AFTER >>>#4
DEBUG - 2014-04-20 15:50:19 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2014-04-20 15:50:19 --> Final output sent to browser
DEBUG - 2014-04-20 15:50:19 --> Total execution time: 0.0375
DEBUG - 2014-04-20 15:50:24 --> Config Class Initialized
DEBUG - 2014-04-20 15:50:24 --> Hooks Class Initialized
DEBUG - 2014-04-20 15:50:24 --> Utf8 Class Initialized
DEBUG - 2014-04-20 15:50:24 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 15:50:24 --> URI Class Initialized
DEBUG - 2014-04-20 15:50:24 --> Router Class Initialized
DEBUG - 2014-04-20 15:50:24 --> Output Class Initialized
DEBUG - 2014-04-20 15:50:24 --> Security Class Initialized
DEBUG - 2014-04-20 15:50:24 --> Input Class Initialized
DEBUG - 2014-04-20 15:50:24 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 15:50:24 --> Language Class Initialized
DEBUG - 2014-04-20 15:50:24 --> Loader Class Initialized
DEBUG - 2014-04-20 15:50:24 --> Helper loaded: form_helper
DEBUG - 2014-04-20 15:50:24 --> Helper loaded: url_helper
DEBUG - 2014-04-20 15:50:24 --> Helper loaded: html_helper
DEBUG - 2014-04-20 15:50:24 --> Database Driver Class Initialized
ERROR - 2014-04-20 15:50:24 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 15:50:24 --> Session Class Initialized
DEBUG - 2014-04-20 15:50:24 --> Helper loaded: string_helper
DEBUG - 2014-04-20 15:50:24 --> Session routines successfully run
DEBUG - 2014-04-20 15:50:24 --> Form Validation Class Initialized
DEBUG - 2014-04-20 15:50:24 --> Controller Class Initialized
DEBUG - 2014-04-20 15:50:24 --> Model Class Initialized
DEBUG - 2014-04-20 15:50:24 --> Model Class Initialized
DEBUG - 2014-04-20 15:50:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 15:50:24 --> Encrypt Class Initialized
INFO  - 2014-04-20 15:50:24 --> after session initialization................
INFO  - 2014-04-20 15:50:24 --> inside rays login auth.............sys_admin/user_authorization/redirecttorays
INFO  - 2014-04-20 15:50:24 --> inside rays login auth.............sys_admin/user_authorization/redirecttorays
DEBUG - 2014-04-20 15:50:24 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2014-04-20 15:50:24 --> XSS Filtering completed
DEBUG - 2014-04-20 15:50:24 --> XSS Filtering completed
INFO  - 2014-04-20 15:50:24 --> login details ::::::::::===>SELECT `ld`.*
FROM (`logindetails` ld)
WHERE lower(ld.username) =  'emeka@swifta.com'
INFO  - 2014-04-20 15:50:24 --> before getting the relation of member............33
INFO  - 2014-04-20 15:50:24 --> registration complete and username set on userpage.................Emeka
INFO  - 2014-04-20 15:50:24 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  '33'
INFO  - 2014-04-20 15:50:24 --> last news id is 0
INFO  - 2014-04-20 15:50:24 --> SELECT a.id_article as id, a.title as newsletter_title, a.description as newsletter_description, a.guestonly as guestonly, a.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`article` a)
JOIN `member` m ON `a`.`memberid_member` = `m`.`id_member`
WHERE `a`.`id_article` <> 0
ORDER BY `a`.`id_article` desc
LIMIT 15
INFO  - 2014-04-20 15:50:24 --> after newsleters list has been clicked.................
INFO  - 2014-04-20 15:50:24 --> The session id is ========>8e6651498b55a1ace1fb4e7d0173b590 and the member id is =======>33
INFO  - 2014-04-20 15:50:24 --> 0 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=31&article_type=newsletter_title
INFO  - 2014-04-20 15:50:24 --> 0 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=16&article_type=newsletter_title
INFO  - 2014-04-20 15:50:24 --> 1 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=15&article_type=newsletter_title
INFO  - 2014-04-20 15:50:24 --> 0 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=14&article_type=newsletter_title
INFO  - 2014-04-20 15:50:24 --> 1 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=13&article_type=newsletter_title
INFO  - 2014-04-20 15:50:24 --> 0 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=12&article_type=newsletter_title
INFO  - 2014-04-20 15:50:24 --> 1 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=11&article_type=newsletter_title
INFO  - 2014-04-20 15:50:24 --> 0 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=10&article_type=newsletter_title
INFO  - 2014-04-20 15:50:24 --> 0 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=9&article_type=newsletter_title
INFO  - 2014-04-20 15:50:24 --> 1 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=8&article_type=newsletter_title
INFO  - 2014-04-20 15:50:24 --> 0 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=7&article_type=newsletter_title
INFO  - 2014-04-20 15:50:24 --> 1 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=6&article_type=newsletter_title
INFO  - 2014-04-20 15:50:24 --> 0 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=5&article_type=newsletter_title
INFO  - 2014-04-20 15:50:24 --> 0 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=4&article_type=newsletter_title
INFO  - 2014-04-20 15:50:24 --> 1 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=3&article_type=newsletter_title
DEBUG - 2014-04-20 15:50:24 --> File loaded: ../pharmaray-application/views/articles.php
DEBUG - 2014-04-20 15:50:24 --> Final output sent to browser
DEBUG - 2014-04-20 15:50:24 --> Total execution time: 0.0432
DEBUG - 2014-04-20 15:50:26 --> Config Class Initialized
DEBUG - 2014-04-20 15:50:26 --> Hooks Class Initialized
DEBUG - 2014-04-20 15:50:26 --> Utf8 Class Initialized
DEBUG - 2014-04-20 15:50:26 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 15:50:26 --> URI Class Initialized
DEBUG - 2014-04-20 15:50:26 --> Router Class Initialized
DEBUG - 2014-04-20 15:50:26 --> Output Class Initialized
DEBUG - 2014-04-20 15:50:26 --> Security Class Initialized
DEBUG - 2014-04-20 15:50:26 --> Input Class Initialized
DEBUG - 2014-04-20 15:50:26 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 15:50:26 --> Language Class Initialized
DEBUG - 2014-04-20 15:50:26 --> Loader Class Initialized
DEBUG - 2014-04-20 15:50:26 --> Helper loaded: form_helper
DEBUG - 2014-04-20 15:50:26 --> Helper loaded: url_helper
DEBUG - 2014-04-20 15:50:26 --> Helper loaded: html_helper
DEBUG - 2014-04-20 15:50:26 --> Database Driver Class Initialized
ERROR - 2014-04-20 15:50:26 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 15:50:26 --> Session Class Initialized
DEBUG - 2014-04-20 15:50:26 --> Helper loaded: string_helper
DEBUG - 2014-04-20 15:50:26 --> Session routines successfully run
DEBUG - 2014-04-20 15:50:26 --> Form Validation Class Initialized
DEBUG - 2014-04-20 15:50:26 --> Controller Class Initialized
DEBUG - 2014-04-20 15:50:26 --> Model Class Initialized
DEBUG - 2014-04-20 15:50:26 --> Model Class Initialized
DEBUG - 2014-04-20 15:50:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 15:50:26 --> Encrypt Class Initialized
INFO  - 2014-04-20 15:50:26 --> after session initialization................
INFO  - 2014-04-20 15:50:26 --> after internships list has been clicked.................
INFO  - 2014-04-20 15:50:26 --> inside retrieving locations 
INFO  - 2014-04-20 15:50:26 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-20 15:50:26 --> inside retrieving internship firms 
INFO  - 2014-04-20 15:50:26 --> SELECT `intf`.`id_internshipfirm` as id, `intf`.`name` as name
FROM (`internship_firm` intf)
ORDER BY `intf`.`name`
INFO  - 2014-04-20 15:50:26 --> inside retrieving internship duration 
INFO  - 2014-04-20 15:50:26 --> SELECT `intd`.`id_internshipduration` as id, `intd`.`name` as name
FROM (`internship_duration` intd)
ORDER BY `intd`.`id_internshipduration`
INFO  - 2014-04-20 15:50:26 --> inside retrieving internship specialization 
INFO  - 2014-04-20 15:50:26 --> SELECT `ints`.`id_internshipspecialization` as id, `ints`.`name` as name
FROM (`internship_specialization` ints)
ORDER BY `ints`.`name`
INFO  - 2014-04-20 15:50:26 --> last intern id is 0
INFO  - 2014-04-20 15:50:26 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` <> 0
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` desc
LIMIT 20
INFO  - 2014-04-20 15:50:26 --> The session id is ========>8e6651498b55a1ace1fb4e7d0173b590 and the member id is =======>33
DEBUG - 2014-04-20 15:50:26 --> File loaded: ../pharmaray-application/views/internships.php
DEBUG - 2014-04-20 15:50:26 --> Final output sent to browser
DEBUG - 2014-04-20 15:50:26 --> Total execution time: 0.0461
DEBUG - 2014-04-20 15:50:29 --> Config Class Initialized
DEBUG - 2014-04-20 15:50:29 --> Hooks Class Initialized
DEBUG - 2014-04-20 15:50:29 --> Utf8 Class Initialized
DEBUG - 2014-04-20 15:50:29 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 15:50:29 --> URI Class Initialized
DEBUG - 2014-04-20 15:50:29 --> Router Class Initialized
DEBUG - 2014-04-20 15:50:29 --> Output Class Initialized
DEBUG - 2014-04-20 15:50:29 --> Security Class Initialized
DEBUG - 2014-04-20 15:50:29 --> Input Class Initialized
DEBUG - 2014-04-20 15:50:29 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 15:50:29 --> Language Class Initialized
DEBUG - 2014-04-20 15:50:29 --> Loader Class Initialized
DEBUG - 2014-04-20 15:50:29 --> Helper loaded: form_helper
DEBUG - 2014-04-20 15:50:29 --> Helper loaded: url_helper
DEBUG - 2014-04-20 15:50:29 --> Helper loaded: html_helper
DEBUG - 2014-04-20 15:50:29 --> Database Driver Class Initialized
ERROR - 2014-04-20 15:50:29 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 15:50:29 --> Session Class Initialized
DEBUG - 2014-04-20 15:50:29 --> Helper loaded: string_helper
DEBUG - 2014-04-20 15:50:29 --> Session routines successfully run
DEBUG - 2014-04-20 15:50:29 --> Form Validation Class Initialized
DEBUG - 2014-04-20 15:50:29 --> Controller Class Initialized
DEBUG - 2014-04-20 15:50:29 --> Model Class Initialized
DEBUG - 2014-04-20 15:50:29 --> Model Class Initialized
DEBUG - 2014-04-20 15:50:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 15:50:29 --> Encrypt Class Initialized
INFO  - 2014-04-20 15:50:29 --> after session initialization................
INFO  - 2014-04-20 15:50:29 --> The Where query :::::::>>>i.id_internshipopening > 0
DEBUG - 2014-04-20 15:50:29 --> DB Transaction Failure
ERROR - 2014-04-20 15:50:29 --> Query error: Unknown column 'i.duration' in 'field list'
DEBUG - 2014-04-20 15:50:29 --> Language file loaded: language/english/db_lang.php
DEBUG - 2014-04-20 15:50:31 --> Config Class Initialized
DEBUG - 2014-04-20 15:50:31 --> Hooks Class Initialized
DEBUG - 2014-04-20 15:50:31 --> Utf8 Class Initialized
DEBUG - 2014-04-20 15:50:31 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 15:50:31 --> URI Class Initialized
DEBUG - 2014-04-20 15:50:31 --> Router Class Initialized
DEBUG - 2014-04-20 15:50:31 --> Output Class Initialized
DEBUG - 2014-04-20 15:50:31 --> Security Class Initialized
DEBUG - 2014-04-20 15:50:31 --> Input Class Initialized
DEBUG - 2014-04-20 15:50:31 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 15:50:31 --> Language Class Initialized
DEBUG - 2014-04-20 15:50:31 --> Loader Class Initialized
DEBUG - 2014-04-20 15:50:31 --> Helper loaded: form_helper
DEBUG - 2014-04-20 15:50:31 --> Helper loaded: url_helper
DEBUG - 2014-04-20 15:50:31 --> Helper loaded: html_helper
DEBUG - 2014-04-20 15:50:31 --> Database Driver Class Initialized
ERROR - 2014-04-20 15:50:31 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 15:50:31 --> Session Class Initialized
DEBUG - 2014-04-20 15:50:31 --> Helper loaded: string_helper
DEBUG - 2014-04-20 15:50:31 --> Session routines successfully run
DEBUG - 2014-04-20 15:50:31 --> Form Validation Class Initialized
DEBUG - 2014-04-20 15:50:31 --> Controller Class Initialized
DEBUG - 2014-04-20 15:50:31 --> Model Class Initialized
DEBUG - 2014-04-20 15:50:31 --> Model Class Initialized
DEBUG - 2014-04-20 15:50:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 15:50:31 --> Encrypt Class Initialized
INFO  - 2014-04-20 15:50:31 --> after session initialization................
INFO  - 2014-04-20 15:50:31 --> last intern id is 1
INFO  - 2014-04-20 15:50:31 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` < 1
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` desc
LIMIT 20
DEBUG - 2014-04-20 15:50:31 --> Final output sent to browser
DEBUG - 2014-04-20 15:50:31 --> Total execution time: 0.0363
DEBUG - 2014-04-20 15:54:05 --> Config Class Initialized
DEBUG - 2014-04-20 15:54:05 --> Hooks Class Initialized
DEBUG - 2014-04-20 15:54:05 --> Utf8 Class Initialized
DEBUG - 2014-04-20 15:54:05 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 15:54:05 --> URI Class Initialized
DEBUG - 2014-04-20 15:54:05 --> Router Class Initialized
DEBUG - 2014-04-20 15:54:05 --> Output Class Initialized
DEBUG - 2014-04-20 15:54:05 --> Security Class Initialized
DEBUG - 2014-04-20 15:54:05 --> Input Class Initialized
DEBUG - 2014-04-20 15:54:05 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 15:54:05 --> Language Class Initialized
DEBUG - 2014-04-20 15:54:05 --> Loader Class Initialized
DEBUG - 2014-04-20 15:54:05 --> Helper loaded: form_helper
DEBUG - 2014-04-20 15:54:05 --> Helper loaded: url_helper
DEBUG - 2014-04-20 15:54:05 --> Helper loaded: html_helper
DEBUG - 2014-04-20 15:54:05 --> Database Driver Class Initialized
ERROR - 2014-04-20 15:54:05 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 15:54:05 --> Session Class Initialized
DEBUG - 2014-04-20 15:54:05 --> Helper loaded: string_helper
DEBUG - 2014-04-20 15:54:05 --> Session routines successfully run
DEBUG - 2014-04-20 15:54:05 --> Form Validation Class Initialized
DEBUG - 2014-04-20 15:54:05 --> Controller Class Initialized
DEBUG - 2014-04-20 15:54:05 --> Model Class Initialized
DEBUG - 2014-04-20 15:54:05 --> Model Class Initialized
DEBUG - 2014-04-20 15:54:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 15:54:05 --> Encrypt Class Initialized
INFO  - 2014-04-20 15:54:05 --> after session initialization................
INFO  - 2014-04-20 15:54:05 --> after internships list has been clicked.................
INFO  - 2014-04-20 15:54:05 --> inside retrieving locations 
INFO  - 2014-04-20 15:54:05 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-20 15:54:05 --> inside retrieving internship firms 
INFO  - 2014-04-20 15:54:05 --> SELECT `intf`.`id_internshipfirm` as id, `intf`.`name` as name
FROM (`internship_firm` intf)
ORDER BY `intf`.`name`
INFO  - 2014-04-20 15:54:05 --> inside retrieving internship duration 
INFO  - 2014-04-20 15:54:05 --> SELECT `intd`.`id_internshipduration` as id, `intd`.`name` as name
FROM (`internship_duration` intd)
ORDER BY `intd`.`id_internshipduration`
INFO  - 2014-04-20 15:54:05 --> inside retrieving internship specialization 
INFO  - 2014-04-20 15:54:05 --> SELECT `ints`.`id_internshipspecialization` as id, `ints`.`name` as name
FROM (`internship_specialization` ints)
ORDER BY `ints`.`name`
INFO  - 2014-04-20 15:54:05 --> last intern id is 0
INFO  - 2014-04-20 15:54:05 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` <> 0
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` desc
LIMIT 20
INFO  - 2014-04-20 15:54:05 --> The session id is ========>8e6651498b55a1ace1fb4e7d0173b590 and the member id is =======>33
DEBUG - 2014-04-20 15:54:05 --> File loaded: ../pharmaray-application/views/internships.php
DEBUG - 2014-04-20 15:54:05 --> Final output sent to browser
DEBUG - 2014-04-20 15:54:05 --> Total execution time: 0.0524
DEBUG - 2014-04-20 15:54:10 --> Config Class Initialized
DEBUG - 2014-04-20 15:54:10 --> Hooks Class Initialized
DEBUG - 2014-04-20 15:54:10 --> Utf8 Class Initialized
DEBUG - 2014-04-20 15:54:10 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 15:54:10 --> URI Class Initialized
DEBUG - 2014-04-20 15:54:10 --> Router Class Initialized
DEBUG - 2014-04-20 15:54:10 --> Output Class Initialized
DEBUG - 2014-04-20 15:54:10 --> Security Class Initialized
DEBUG - 2014-04-20 15:54:10 --> Input Class Initialized
DEBUG - 2014-04-20 15:54:10 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 15:54:10 --> Language Class Initialized
DEBUG - 2014-04-20 15:54:10 --> Loader Class Initialized
DEBUG - 2014-04-20 15:54:10 --> Helper loaded: form_helper
DEBUG - 2014-04-20 15:54:10 --> Helper loaded: url_helper
DEBUG - 2014-04-20 15:54:10 --> Helper loaded: html_helper
DEBUG - 2014-04-20 15:54:10 --> Database Driver Class Initialized
ERROR - 2014-04-20 15:54:10 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 15:54:10 --> Session Class Initialized
DEBUG - 2014-04-20 15:54:10 --> Helper loaded: string_helper
DEBUG - 2014-04-20 15:54:10 --> Session routines successfully run
DEBUG - 2014-04-20 15:54:10 --> Form Validation Class Initialized
DEBUG - 2014-04-20 15:54:10 --> Controller Class Initialized
DEBUG - 2014-04-20 15:54:10 --> Model Class Initialized
DEBUG - 2014-04-20 15:54:10 --> Model Class Initialized
DEBUG - 2014-04-20 15:54:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 15:54:10 --> Encrypt Class Initialized
INFO  - 2014-04-20 15:54:10 --> after session initialization................
INFO  - 2014-04-20 15:54:10 --> The Where query :::::::>>>i.id_internshipopening > 0
INFO  - 2014-04-20 15:54:10 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` > 0
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` desc
LIMIT 10
DEBUG - 2014-04-20 15:54:10 --> Final output sent to browser
DEBUG - 2014-04-20 15:54:10 --> Total execution time: 0.0361
DEBUG - 2014-04-20 15:54:17 --> Config Class Initialized
DEBUG - 2014-04-20 15:54:17 --> Hooks Class Initialized
DEBUG - 2014-04-20 15:54:17 --> Utf8 Class Initialized
DEBUG - 2014-04-20 15:54:17 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 15:54:17 --> URI Class Initialized
DEBUG - 2014-04-20 15:54:17 --> Router Class Initialized
DEBUG - 2014-04-20 15:54:17 --> Output Class Initialized
DEBUG - 2014-04-20 15:54:17 --> Security Class Initialized
DEBUG - 2014-04-20 15:54:17 --> Input Class Initialized
DEBUG - 2014-04-20 15:54:17 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 15:54:17 --> Language Class Initialized
DEBUG - 2014-04-20 15:54:17 --> Loader Class Initialized
DEBUG - 2014-04-20 15:54:17 --> Helper loaded: form_helper
DEBUG - 2014-04-20 15:54:17 --> Helper loaded: url_helper
DEBUG - 2014-04-20 15:54:17 --> Helper loaded: html_helper
DEBUG - 2014-04-20 15:54:17 --> Database Driver Class Initialized
ERROR - 2014-04-20 15:54:17 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 15:54:17 --> Session Class Initialized
DEBUG - 2014-04-20 15:54:17 --> Helper loaded: string_helper
DEBUG - 2014-04-20 15:54:17 --> Session routines successfully run
DEBUG - 2014-04-20 15:54:17 --> Form Validation Class Initialized
DEBUG - 2014-04-20 15:54:17 --> Controller Class Initialized
DEBUG - 2014-04-20 15:54:17 --> Model Class Initialized
DEBUG - 2014-04-20 15:54:17 --> Model Class Initialized
DEBUG - 2014-04-20 15:54:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 15:54:17 --> Encrypt Class Initialized
INFO  - 2014-04-20 15:54:17 --> after session initialization................
INFO  - 2014-04-20 15:54:17 --> inside retrieving locations 
INFO  - 2014-04-20 15:54:17 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
JOIN `location_ref` lr ON `lr`.`location_id` = `l`.`id_location` and lr.super_locationid = 38
GROUP BY `id`
ORDER BY `l`.`name`
DEBUG - 2014-04-20 15:54:17 --> Final output sent to browser
DEBUG - 2014-04-20 15:54:17 --> Total execution time: 0.0279
DEBUG - 2014-04-20 15:54:19 --> Config Class Initialized
DEBUG - 2014-04-20 15:54:19 --> Hooks Class Initialized
DEBUG - 2014-04-20 15:54:19 --> Utf8 Class Initialized
DEBUG - 2014-04-20 15:54:19 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 15:54:19 --> URI Class Initialized
DEBUG - 2014-04-20 15:54:19 --> Router Class Initialized
DEBUG - 2014-04-20 15:54:19 --> Output Class Initialized
DEBUG - 2014-04-20 15:54:19 --> Security Class Initialized
DEBUG - 2014-04-20 15:54:19 --> Input Class Initialized
DEBUG - 2014-04-20 15:54:19 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 15:54:19 --> Language Class Initialized
DEBUG - 2014-04-20 15:54:19 --> Loader Class Initialized
DEBUG - 2014-04-20 15:54:19 --> Helper loaded: form_helper
DEBUG - 2014-04-20 15:54:19 --> Helper loaded: url_helper
DEBUG - 2014-04-20 15:54:19 --> Helper loaded: html_helper
DEBUG - 2014-04-20 15:54:19 --> Database Driver Class Initialized
ERROR - 2014-04-20 15:54:19 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 15:54:19 --> Session Class Initialized
DEBUG - 2014-04-20 15:54:19 --> Helper loaded: string_helper
DEBUG - 2014-04-20 15:54:19 --> Session routines successfully run
DEBUG - 2014-04-20 15:54:19 --> Form Validation Class Initialized
DEBUG - 2014-04-20 15:54:19 --> Controller Class Initialized
DEBUG - 2014-04-20 15:54:19 --> Model Class Initialized
DEBUG - 2014-04-20 15:54:19 --> Model Class Initialized
DEBUG - 2014-04-20 15:54:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 15:54:19 --> Encrypt Class Initialized
INFO  - 2014-04-20 15:54:19 --> after session initialization................
INFO  - 2014-04-20 15:54:19 --> inside retrieving locations 
INFO  - 2014-04-20 15:54:19 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
JOIN `location_ref` lr ON `lr`.`location_id` = `l`.`id_location` and lr.super_locationid = 9
GROUP BY `id`
ORDER BY `l`.`name`
DEBUG - 2014-04-20 15:54:19 --> Final output sent to browser
DEBUG - 2014-04-20 15:54:19 --> Total execution time: 0.0274
DEBUG - 2014-04-20 15:54:27 --> Config Class Initialized
DEBUG - 2014-04-20 15:54:27 --> Hooks Class Initialized
DEBUG - 2014-04-20 15:54:27 --> Utf8 Class Initialized
DEBUG - 2014-04-20 15:54:27 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 15:54:27 --> URI Class Initialized
DEBUG - 2014-04-20 15:54:27 --> Router Class Initialized
DEBUG - 2014-04-20 15:54:27 --> Output Class Initialized
DEBUG - 2014-04-20 15:54:27 --> Security Class Initialized
DEBUG - 2014-04-20 15:54:27 --> Input Class Initialized
DEBUG - 2014-04-20 15:54:27 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 15:54:27 --> Language Class Initialized
DEBUG - 2014-04-20 15:54:27 --> Loader Class Initialized
DEBUG - 2014-04-20 15:54:27 --> Helper loaded: form_helper
DEBUG - 2014-04-20 15:54:27 --> Helper loaded: url_helper
DEBUG - 2014-04-20 15:54:27 --> Helper loaded: html_helper
DEBUG - 2014-04-20 15:54:27 --> Database Driver Class Initialized
ERROR - 2014-04-20 15:54:27 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 15:54:27 --> Session Class Initialized
DEBUG - 2014-04-20 15:54:27 --> Helper loaded: string_helper
DEBUG - 2014-04-20 15:54:27 --> Session routines successfully run
DEBUG - 2014-04-20 15:54:27 --> Form Validation Class Initialized
DEBUG - 2014-04-20 15:54:27 --> Controller Class Initialized
DEBUG - 2014-04-20 15:54:27 --> Model Class Initialized
DEBUG - 2014-04-20 15:54:27 --> Model Class Initialized
DEBUG - 2014-04-20 15:54:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 15:54:27 --> Encrypt Class Initialized
INFO  - 2014-04-20 15:54:27 --> after session initialization................
INFO  - 2014-04-20 15:54:27 --> The Where query :::::::>>>i.id_internshipopening > 0 and i.location_id  = 1604
INFO  - 2014-04-20 15:54:27 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` > 0 and i.location_id = 1604
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` desc
LIMIT 10
DEBUG - 2014-04-20 15:54:27 --> Final output sent to browser
DEBUG - 2014-04-20 15:54:27 --> Total execution time: 0.0410
DEBUG - 2014-04-20 15:59:02 --> Config Class Initialized
DEBUG - 2014-04-20 15:59:02 --> Hooks Class Initialized
DEBUG - 2014-04-20 15:59:02 --> Utf8 Class Initialized
DEBUG - 2014-04-20 15:59:02 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 15:59:02 --> URI Class Initialized
DEBUG - 2014-04-20 15:59:02 --> Router Class Initialized
DEBUG - 2014-04-20 15:59:02 --> Output Class Initialized
DEBUG - 2014-04-20 15:59:02 --> Security Class Initialized
DEBUG - 2014-04-20 15:59:02 --> Input Class Initialized
DEBUG - 2014-04-20 15:59:02 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 15:59:02 --> Language Class Initialized
DEBUG - 2014-04-20 15:59:02 --> Loader Class Initialized
DEBUG - 2014-04-20 15:59:02 --> Helper loaded: form_helper
DEBUG - 2014-04-20 15:59:02 --> Helper loaded: url_helper
DEBUG - 2014-04-20 15:59:02 --> Helper loaded: html_helper
DEBUG - 2014-04-20 15:59:02 --> Database Driver Class Initialized
ERROR - 2014-04-20 15:59:02 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 15:59:02 --> Session Class Initialized
DEBUG - 2014-04-20 15:59:02 --> Helper loaded: string_helper
DEBUG - 2014-04-20 15:59:02 --> Session routines successfully run
DEBUG - 2014-04-20 15:59:02 --> Form Validation Class Initialized
DEBUG - 2014-04-20 15:59:02 --> Controller Class Initialized
DEBUG - 2014-04-20 15:59:02 --> Model Class Initialized
DEBUG - 2014-04-20 15:59:02 --> Model Class Initialized
DEBUG - 2014-04-20 15:59:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 15:59:02 --> Encrypt Class Initialized
INFO  - 2014-04-20 15:59:02 --> after session initialization................
INFO  - 2014-04-20 15:59:02 --> inside retrieving locations 
INFO  - 2014-04-20 15:59:02 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
JOIN `location_ref` lr ON `lr`.`location_id` = `l`.`id_location` and lr.super_locationid = 3
GROUP BY `id`
ORDER BY `l`.`name`
DEBUG - 2014-04-20 15:59:02 --> Final output sent to browser
DEBUG - 2014-04-20 15:59:02 --> Total execution time: 0.0261
DEBUG - 2014-04-20 15:59:08 --> Config Class Initialized
DEBUG - 2014-04-20 15:59:08 --> Hooks Class Initialized
DEBUG - 2014-04-20 15:59:08 --> Utf8 Class Initialized
DEBUG - 2014-04-20 15:59:08 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 15:59:08 --> URI Class Initialized
DEBUG - 2014-04-20 15:59:08 --> Router Class Initialized
DEBUG - 2014-04-20 15:59:08 --> Output Class Initialized
DEBUG - 2014-04-20 15:59:08 --> Security Class Initialized
DEBUG - 2014-04-20 15:59:08 --> Input Class Initialized
DEBUG - 2014-04-20 15:59:08 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 15:59:08 --> Language Class Initialized
DEBUG - 2014-04-20 15:59:08 --> Loader Class Initialized
DEBUG - 2014-04-20 15:59:08 --> Helper loaded: form_helper
DEBUG - 2014-04-20 15:59:08 --> Helper loaded: url_helper
DEBUG - 2014-04-20 15:59:08 --> Helper loaded: html_helper
DEBUG - 2014-04-20 15:59:08 --> Database Driver Class Initialized
ERROR - 2014-04-20 15:59:08 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 15:59:08 --> Session Class Initialized
DEBUG - 2014-04-20 15:59:08 --> Helper loaded: string_helper
DEBUG - 2014-04-20 15:59:08 --> Session routines successfully run
DEBUG - 2014-04-20 15:59:08 --> Form Validation Class Initialized
DEBUG - 2014-04-20 15:59:08 --> Controller Class Initialized
DEBUG - 2014-04-20 15:59:08 --> Model Class Initialized
DEBUG - 2014-04-20 15:59:08 --> Model Class Initialized
DEBUG - 2014-04-20 15:59:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 15:59:08 --> Encrypt Class Initialized
INFO  - 2014-04-20 15:59:08 --> after session initialization................
INFO  - 2014-04-20 15:59:08 --> The Where query :::::::>>>i.id_internshipopening > 0 and i.location_id  = 1582
INFO  - 2014-04-20 15:59:08 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` > 0 and i.location_id = 1582
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` desc
LIMIT 10
DEBUG - 2014-04-20 15:59:08 --> Final output sent to browser
DEBUG - 2014-04-20 15:59:08 --> Total execution time: 0.0294
DEBUG - 2014-04-20 15:59:34 --> Config Class Initialized
DEBUG - 2014-04-20 15:59:34 --> Hooks Class Initialized
DEBUG - 2014-04-20 15:59:34 --> Utf8 Class Initialized
DEBUG - 2014-04-20 15:59:34 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 15:59:34 --> URI Class Initialized
DEBUG - 2014-04-20 15:59:34 --> Router Class Initialized
DEBUG - 2014-04-20 15:59:34 --> Output Class Initialized
DEBUG - 2014-04-20 15:59:34 --> Security Class Initialized
DEBUG - 2014-04-20 15:59:34 --> Input Class Initialized
DEBUG - 2014-04-20 15:59:34 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 15:59:34 --> Language Class Initialized
DEBUG - 2014-04-20 15:59:34 --> Loader Class Initialized
DEBUG - 2014-04-20 15:59:34 --> Helper loaded: form_helper
DEBUG - 2014-04-20 15:59:34 --> Helper loaded: url_helper
DEBUG - 2014-04-20 15:59:34 --> Helper loaded: html_helper
DEBUG - 2014-04-20 15:59:34 --> Database Driver Class Initialized
ERROR - 2014-04-20 15:59:34 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 15:59:34 --> Session Class Initialized
DEBUG - 2014-04-20 15:59:34 --> Helper loaded: string_helper
DEBUG - 2014-04-20 15:59:34 --> Session routines successfully run
DEBUG - 2014-04-20 15:59:34 --> Form Validation Class Initialized
DEBUG - 2014-04-20 15:59:34 --> Controller Class Initialized
DEBUG - 2014-04-20 15:59:34 --> Model Class Initialized
DEBUG - 2014-04-20 15:59:34 --> Model Class Initialized
DEBUG - 2014-04-20 15:59:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 15:59:34 --> Encrypt Class Initialized
INFO  - 2014-04-20 15:59:34 --> after session initialization................
INFO  - 2014-04-20 15:59:34 --> The Where query :::::::>>>i.id_internshipopening > 0 and i.location_id  = 1583
INFO  - 2014-04-20 15:59:34 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` > 0 and i.location_id = 1583
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` desc
LIMIT 10
DEBUG - 2014-04-20 15:59:34 --> Final output sent to browser
DEBUG - 2014-04-20 15:59:34 --> Total execution time: 0.0291
DEBUG - 2014-04-20 16:16:17 --> Config Class Initialized
DEBUG - 2014-04-20 16:16:17 --> Hooks Class Initialized
DEBUG - 2014-04-20 16:16:17 --> Utf8 Class Initialized
DEBUG - 2014-04-20 16:16:17 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 16:16:17 --> URI Class Initialized
DEBUG - 2014-04-20 16:16:17 --> Router Class Initialized
DEBUG - 2014-04-20 16:16:17 --> Output Class Initialized
DEBUG - 2014-04-20 16:16:17 --> Security Class Initialized
DEBUG - 2014-04-20 16:16:17 --> Input Class Initialized
DEBUG - 2014-04-20 16:16:17 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 16:16:17 --> Language Class Initialized
DEBUG - 2014-04-20 16:16:17 --> Loader Class Initialized
DEBUG - 2014-04-20 16:16:17 --> Helper loaded: form_helper
DEBUG - 2014-04-20 16:16:17 --> Helper loaded: url_helper
DEBUG - 2014-04-20 16:16:17 --> Helper loaded: html_helper
DEBUG - 2014-04-20 16:16:17 --> Database Driver Class Initialized
ERROR - 2014-04-20 16:16:17 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 16:16:17 --> Session Class Initialized
DEBUG - 2014-04-20 16:16:17 --> Helper loaded: string_helper
DEBUG - 2014-04-20 16:16:17 --> Session routines successfully run
DEBUG - 2014-04-20 16:16:17 --> Form Validation Class Initialized
DEBUG - 2014-04-20 16:16:17 --> Controller Class Initialized
DEBUG - 2014-04-20 16:16:17 --> Model Class Initialized
DEBUG - 2014-04-20 16:16:17 --> Model Class Initialized
DEBUG - 2014-04-20 16:16:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 16:16:17 --> Encrypt Class Initialized
INFO  - 2014-04-20 16:16:17 --> after session initialization................
INFO  - 2014-04-20 16:16:17 --> The Where query :::::::>>>i.id_internshipopening > 0 and i.location_id  = 1583 and i.internshipfirm_id  = 2
INFO  - 2014-04-20 16:16:17 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` > 0 and i.location_id = 1583 and i.internshipfirm_id = 2
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` desc
LIMIT 10
DEBUG - 2014-04-20 16:16:17 --> Final output sent to browser
DEBUG - 2014-04-20 16:16:17 --> Total execution time: 0.0336
DEBUG - 2014-04-20 16:16:44 --> Config Class Initialized
DEBUG - 2014-04-20 16:16:44 --> Hooks Class Initialized
DEBUG - 2014-04-20 16:16:44 --> Utf8 Class Initialized
DEBUG - 2014-04-20 16:16:44 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 16:16:44 --> URI Class Initialized
DEBUG - 2014-04-20 16:16:44 --> Router Class Initialized
DEBUG - 2014-04-20 16:16:44 --> Output Class Initialized
DEBUG - 2014-04-20 16:16:44 --> Security Class Initialized
DEBUG - 2014-04-20 16:16:44 --> Input Class Initialized
DEBUG - 2014-04-20 16:16:44 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 16:16:44 --> Language Class Initialized
DEBUG - 2014-04-20 16:16:44 --> Loader Class Initialized
DEBUG - 2014-04-20 16:16:44 --> Helper loaded: form_helper
DEBUG - 2014-04-20 16:16:44 --> Helper loaded: url_helper
DEBUG - 2014-04-20 16:16:44 --> Helper loaded: html_helper
DEBUG - 2014-04-20 16:16:44 --> Database Driver Class Initialized
ERROR - 2014-04-20 16:16:44 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 16:16:44 --> Session Class Initialized
DEBUG - 2014-04-20 16:16:44 --> Helper loaded: string_helper
DEBUG - 2014-04-20 16:16:44 --> Session routines successfully run
DEBUG - 2014-04-20 16:16:44 --> Form Validation Class Initialized
DEBUG - 2014-04-20 16:16:44 --> Controller Class Initialized
DEBUG - 2014-04-20 16:16:44 --> Model Class Initialized
DEBUG - 2014-04-20 16:16:44 --> Model Class Initialized
DEBUG - 2014-04-20 16:16:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 16:16:44 --> Encrypt Class Initialized
INFO  - 2014-04-20 16:16:44 --> after session initialization................
INFO  - 2014-04-20 16:16:44 --> The Where query :::::::>>>i.id_internshipopening > 0 and i.location_id  = 1583 and i.internshipfirm_id  = 2 and ins.id_internshipspecialization  = 1
INFO  - 2014-04-20 16:16:44 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` > 0 and i.location_id = 1583 and i.internshipfirm_id = 2 and ins.id_internshipspecialization = 1
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` desc
LIMIT 10
DEBUG - 2014-04-20 16:16:44 --> Final output sent to browser
DEBUG - 2014-04-20 16:16:44 --> Total execution time: 0.0349
DEBUG - 2014-04-20 16:17:05 --> Config Class Initialized
DEBUG - 2014-04-20 16:17:05 --> Hooks Class Initialized
DEBUG - 2014-04-20 16:17:05 --> Utf8 Class Initialized
DEBUG - 2014-04-20 16:17:05 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 16:17:05 --> URI Class Initialized
DEBUG - 2014-04-20 16:17:05 --> Router Class Initialized
DEBUG - 2014-04-20 16:17:05 --> Output Class Initialized
DEBUG - 2014-04-20 16:17:05 --> Security Class Initialized
DEBUG - 2014-04-20 16:17:05 --> Input Class Initialized
DEBUG - 2014-04-20 16:17:05 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 16:17:05 --> Language Class Initialized
DEBUG - 2014-04-20 16:17:05 --> Loader Class Initialized
DEBUG - 2014-04-20 16:17:05 --> Helper loaded: form_helper
DEBUG - 2014-04-20 16:17:05 --> Helper loaded: url_helper
DEBUG - 2014-04-20 16:17:05 --> Helper loaded: html_helper
DEBUG - 2014-04-20 16:17:05 --> Database Driver Class Initialized
ERROR - 2014-04-20 16:17:05 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 16:17:05 --> Session Class Initialized
DEBUG - 2014-04-20 16:17:05 --> Helper loaded: string_helper
DEBUG - 2014-04-20 16:17:05 --> Session routines successfully run
DEBUG - 2014-04-20 16:17:05 --> Form Validation Class Initialized
DEBUG - 2014-04-20 16:17:05 --> Controller Class Initialized
DEBUG - 2014-04-20 16:17:05 --> Model Class Initialized
DEBUG - 2014-04-20 16:17:05 --> Model Class Initialized
DEBUG - 2014-04-20 16:17:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 16:17:05 --> Encrypt Class Initialized
INFO  - 2014-04-20 16:17:05 --> after session initialization................
INFO  - 2014-04-20 16:17:05 --> The Where query :::::::>>>i.id_internshipopening > 0 and i.location_id  = 1583 and i.internshipfirm_id  = 2 and i.duration_id  = 5
INFO  - 2014-04-20 16:17:05 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` > 0 and i.location_id = 1583 and i.internshipfirm_id = 2 and i.duration_id = 5
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` desc
LIMIT 10
DEBUG - 2014-04-20 16:17:05 --> Final output sent to browser
DEBUG - 2014-04-20 16:17:05 --> Total execution time: 0.0307
DEBUG - 2014-04-20 16:17:15 --> Config Class Initialized
DEBUG - 2014-04-20 16:17:15 --> Hooks Class Initialized
DEBUG - 2014-04-20 16:17:15 --> Utf8 Class Initialized
DEBUG - 2014-04-20 16:17:15 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 16:17:15 --> URI Class Initialized
DEBUG - 2014-04-20 16:17:15 --> Router Class Initialized
DEBUG - 2014-04-20 16:17:15 --> Output Class Initialized
DEBUG - 2014-04-20 16:17:15 --> Security Class Initialized
DEBUG - 2014-04-20 16:17:15 --> Input Class Initialized
DEBUG - 2014-04-20 16:17:15 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 16:17:15 --> Language Class Initialized
DEBUG - 2014-04-20 16:17:15 --> Loader Class Initialized
DEBUG - 2014-04-20 16:17:15 --> Helper loaded: form_helper
DEBUG - 2014-04-20 16:17:15 --> Helper loaded: url_helper
DEBUG - 2014-04-20 16:17:15 --> Helper loaded: html_helper
DEBUG - 2014-04-20 16:17:15 --> Database Driver Class Initialized
ERROR - 2014-04-20 16:17:15 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 16:17:15 --> Session Class Initialized
DEBUG - 2014-04-20 16:17:15 --> Helper loaded: string_helper
DEBUG - 2014-04-20 16:17:15 --> Session routines successfully run
DEBUG - 2014-04-20 16:17:15 --> Form Validation Class Initialized
DEBUG - 2014-04-20 16:17:15 --> Controller Class Initialized
DEBUG - 2014-04-20 16:17:15 --> Model Class Initialized
DEBUG - 2014-04-20 16:17:15 --> Model Class Initialized
DEBUG - 2014-04-20 16:17:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 16:17:15 --> Encrypt Class Initialized
INFO  - 2014-04-20 16:17:15 --> after session initialization................
INFO  - 2014-04-20 16:17:15 --> The Where query :::::::>>>i.id_internshipopening > 0 and i.location_id  = 1583 and i.internshipfirm_id  = 2 and i.duration_id  = 6
INFO  - 2014-04-20 16:17:15 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` > 0 and i.location_id = 1583 and i.internshipfirm_id = 2 and i.duration_id = 6
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` desc
LIMIT 10
DEBUG - 2014-04-20 16:17:15 --> Final output sent to browser
DEBUG - 2014-04-20 16:17:15 --> Total execution time: 0.0339
DEBUG - 2014-04-20 16:17:25 --> Config Class Initialized
DEBUG - 2014-04-20 16:17:25 --> Hooks Class Initialized
DEBUG - 2014-04-20 16:17:25 --> Utf8 Class Initialized
DEBUG - 2014-04-20 16:17:25 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 16:17:25 --> URI Class Initialized
DEBUG - 2014-04-20 16:17:25 --> Router Class Initialized
DEBUG - 2014-04-20 16:17:25 --> Output Class Initialized
DEBUG - 2014-04-20 16:17:25 --> Security Class Initialized
DEBUG - 2014-04-20 16:17:25 --> Input Class Initialized
DEBUG - 2014-04-20 16:17:25 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 16:17:25 --> Language Class Initialized
DEBUG - 2014-04-20 16:17:25 --> Loader Class Initialized
DEBUG - 2014-04-20 16:17:25 --> Helper loaded: form_helper
DEBUG - 2014-04-20 16:17:25 --> Helper loaded: url_helper
DEBUG - 2014-04-20 16:17:25 --> Helper loaded: html_helper
DEBUG - 2014-04-20 16:17:25 --> Database Driver Class Initialized
ERROR - 2014-04-20 16:17:25 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 16:17:25 --> Session Class Initialized
DEBUG - 2014-04-20 16:17:25 --> Helper loaded: string_helper
DEBUG - 2014-04-20 16:17:25 --> Session routines successfully run
DEBUG - 2014-04-20 16:17:25 --> Form Validation Class Initialized
DEBUG - 2014-04-20 16:17:25 --> Controller Class Initialized
DEBUG - 2014-04-20 16:17:25 --> Model Class Initialized
DEBUG - 2014-04-20 16:17:25 --> Model Class Initialized
DEBUG - 2014-04-20 16:17:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 16:17:25 --> Encrypt Class Initialized
INFO  - 2014-04-20 16:17:25 --> after session initialization................
INFO  - 2014-04-20 16:17:25 --> The Where query :::::::>>>i.id_internshipopening > 0 and i.location_id  = 1583 and i.internshipfirm_id  = 2
INFO  - 2014-04-20 16:17:25 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` > 0 and i.location_id = 1583 and i.internshipfirm_id = 2
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` desc
LIMIT 10
DEBUG - 2014-04-20 16:17:25 --> Final output sent to browser
DEBUG - 2014-04-20 16:17:25 --> Total execution time: 0.0322
DEBUG - 2014-04-20 16:19:12 --> Config Class Initialized
DEBUG - 2014-04-20 16:19:12 --> Hooks Class Initialized
DEBUG - 2014-04-20 16:19:12 --> Utf8 Class Initialized
DEBUG - 2014-04-20 16:19:12 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 16:19:12 --> URI Class Initialized
DEBUG - 2014-04-20 16:19:12 --> Router Class Initialized
DEBUG - 2014-04-20 16:19:12 --> Output Class Initialized
DEBUG - 2014-04-20 16:19:12 --> Security Class Initialized
DEBUG - 2014-04-20 16:19:12 --> Input Class Initialized
DEBUG - 2014-04-20 16:19:12 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 16:19:12 --> Language Class Initialized
DEBUG - 2014-04-20 16:19:12 --> Loader Class Initialized
DEBUG - 2014-04-20 16:19:12 --> Helper loaded: form_helper
DEBUG - 2014-04-20 16:19:12 --> Helper loaded: url_helper
DEBUG - 2014-04-20 16:19:12 --> Helper loaded: html_helper
DEBUG - 2014-04-20 16:19:12 --> Database Driver Class Initialized
ERROR - 2014-04-20 16:19:12 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 16:19:12 --> Session Class Initialized
DEBUG - 2014-04-20 16:19:12 --> Helper loaded: string_helper
DEBUG - 2014-04-20 16:19:12 --> Session routines successfully run
DEBUG - 2014-04-20 16:19:12 --> Form Validation Class Initialized
DEBUG - 2014-04-20 16:19:12 --> Controller Class Initialized
DEBUG - 2014-04-20 16:19:12 --> Model Class Initialized
DEBUG - 2014-04-20 16:19:12 --> Model Class Initialized
DEBUG - 2014-04-20 16:19:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 16:19:12 --> Encrypt Class Initialized
INFO  - 2014-04-20 16:19:12 --> after session initialization................
INFO  - 2014-04-20 16:19:12 --> The Where query :::::::>>>i.id_internshipopening > 0 and i.internshipfirm_id  = 2
INFO  - 2014-04-20 16:19:12 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` > 0 and i.internshipfirm_id = 2
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` desc
LIMIT 10
DEBUG - 2014-04-20 16:19:12 --> Final output sent to browser
DEBUG - 2014-04-20 16:19:12 --> Total execution time: 0.0349
DEBUG - 2014-04-20 16:19:20 --> Config Class Initialized
DEBUG - 2014-04-20 16:19:20 --> Hooks Class Initialized
DEBUG - 2014-04-20 16:19:20 --> Utf8 Class Initialized
DEBUG - 2014-04-20 16:19:20 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 16:19:20 --> URI Class Initialized
DEBUG - 2014-04-20 16:19:20 --> Router Class Initialized
DEBUG - 2014-04-20 16:19:20 --> Output Class Initialized
DEBUG - 2014-04-20 16:19:20 --> Security Class Initialized
DEBUG - 2014-04-20 16:19:20 --> Input Class Initialized
DEBUG - 2014-04-20 16:19:20 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 16:19:20 --> Language Class Initialized
DEBUG - 2014-04-20 16:19:20 --> Loader Class Initialized
DEBUG - 2014-04-20 16:19:20 --> Helper loaded: form_helper
DEBUG - 2014-04-20 16:19:20 --> Helper loaded: url_helper
DEBUG - 2014-04-20 16:19:20 --> Helper loaded: html_helper
DEBUG - 2014-04-20 16:19:20 --> Database Driver Class Initialized
ERROR - 2014-04-20 16:19:20 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 16:19:20 --> Session Class Initialized
DEBUG - 2014-04-20 16:19:20 --> Helper loaded: string_helper
DEBUG - 2014-04-20 16:19:20 --> Session routines successfully run
DEBUG - 2014-04-20 16:19:20 --> Form Validation Class Initialized
DEBUG - 2014-04-20 16:19:20 --> Controller Class Initialized
DEBUG - 2014-04-20 16:19:20 --> Model Class Initialized
DEBUG - 2014-04-20 16:19:20 --> Model Class Initialized
DEBUG - 2014-04-20 16:19:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 16:19:20 --> Encrypt Class Initialized
INFO  - 2014-04-20 16:19:20 --> after session initialization................
INFO  - 2014-04-20 16:19:20 --> The Where query :::::::>>>i.id_internshipopening > 0
INFO  - 2014-04-20 16:19:20 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` > 0
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` desc
LIMIT 10
DEBUG - 2014-04-20 16:19:20 --> Final output sent to browser
DEBUG - 2014-04-20 16:19:20 --> Total execution time: 0.0346
DEBUG - 2014-04-20 16:19:25 --> Config Class Initialized
DEBUG - 2014-04-20 16:19:25 --> Hooks Class Initialized
DEBUG - 2014-04-20 16:19:25 --> Utf8 Class Initialized
DEBUG - 2014-04-20 16:19:25 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 16:19:25 --> URI Class Initialized
DEBUG - 2014-04-20 16:19:25 --> Router Class Initialized
DEBUG - 2014-04-20 16:19:25 --> Output Class Initialized
DEBUG - 2014-04-20 16:19:25 --> Security Class Initialized
DEBUG - 2014-04-20 16:19:25 --> Input Class Initialized
DEBUG - 2014-04-20 16:19:25 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 16:19:25 --> Language Class Initialized
DEBUG - 2014-04-20 16:19:25 --> Loader Class Initialized
DEBUG - 2014-04-20 16:19:25 --> Helper loaded: form_helper
DEBUG - 2014-04-20 16:19:25 --> Helper loaded: url_helper
DEBUG - 2014-04-20 16:19:25 --> Helper loaded: html_helper
DEBUG - 2014-04-20 16:19:25 --> Database Driver Class Initialized
ERROR - 2014-04-20 16:19:25 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 16:19:25 --> Session Class Initialized
DEBUG - 2014-04-20 16:19:25 --> Helper loaded: string_helper
DEBUG - 2014-04-20 16:19:25 --> Session routines successfully run
DEBUG - 2014-04-20 16:19:25 --> Form Validation Class Initialized
DEBUG - 2014-04-20 16:19:25 --> Controller Class Initialized
DEBUG - 2014-04-20 16:19:25 --> Model Class Initialized
DEBUG - 2014-04-20 16:19:25 --> Model Class Initialized
DEBUG - 2014-04-20 16:19:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 16:19:25 --> Encrypt Class Initialized
INFO  - 2014-04-20 16:19:25 --> after session initialization................
INFO  - 2014-04-20 16:19:25 --> last intern id is 1
INFO  - 2014-04-20 16:19:25 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` < 1
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` desc
LIMIT 20
DEBUG - 2014-04-20 16:19:25 --> Final output sent to browser
DEBUG - 2014-04-20 16:19:25 --> Total execution time: 0.0331
DEBUG - 2014-04-20 16:23:13 --> Config Class Initialized
DEBUG - 2014-04-20 16:23:13 --> Hooks Class Initialized
DEBUG - 2014-04-20 16:23:13 --> Utf8 Class Initialized
DEBUG - 2014-04-20 16:23:13 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 16:23:13 --> URI Class Initialized
DEBUG - 2014-04-20 16:23:13 --> Router Class Initialized
DEBUG - 2014-04-20 16:23:13 --> Output Class Initialized
DEBUG - 2014-04-20 16:23:13 --> Security Class Initialized
DEBUG - 2014-04-20 16:23:13 --> Input Class Initialized
DEBUG - 2014-04-20 16:23:13 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 16:23:13 --> Language Class Initialized
DEBUG - 2014-04-20 16:23:13 --> Loader Class Initialized
DEBUG - 2014-04-20 16:23:13 --> Helper loaded: form_helper
DEBUG - 2014-04-20 16:23:13 --> Helper loaded: url_helper
DEBUG - 2014-04-20 16:23:13 --> Helper loaded: html_helper
DEBUG - 2014-04-20 16:23:13 --> Database Driver Class Initialized
ERROR - 2014-04-20 16:23:13 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 16:23:13 --> Session Class Initialized
DEBUG - 2014-04-20 16:23:13 --> Helper loaded: string_helper
DEBUG - 2014-04-20 16:23:13 --> Session routines successfully run
DEBUG - 2014-04-20 16:23:13 --> Form Validation Class Initialized
DEBUG - 2014-04-20 16:23:13 --> Controller Class Initialized
DEBUG - 2014-04-20 16:23:13 --> Model Class Initialized
DEBUG - 2014-04-20 16:23:13 --> Model Class Initialized
DEBUG - 2014-04-20 16:23:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 16:23:13 --> Encrypt Class Initialized
INFO  - 2014-04-20 16:23:13 --> after session initialization................
INFO  - 2014-04-20 16:23:13 --> The Where query :::::::>>>i.id_internshipopening > 0
INFO  - 2014-04-20 16:23:13 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` > 0
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` desc
LIMIT 10
DEBUG - 2014-04-20 16:23:13 --> Final output sent to browser
DEBUG - 2014-04-20 16:23:13 --> Total execution time: 0.0328
DEBUG - 2014-04-20 16:23:56 --> Config Class Initialized
DEBUG - 2014-04-20 16:23:56 --> Hooks Class Initialized
DEBUG - 2014-04-20 16:23:56 --> Utf8 Class Initialized
DEBUG - 2014-04-20 16:23:56 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 16:23:56 --> URI Class Initialized
DEBUG - 2014-04-20 16:23:56 --> Router Class Initialized
DEBUG - 2014-04-20 16:23:56 --> Output Class Initialized
DEBUG - 2014-04-20 16:23:56 --> Security Class Initialized
DEBUG - 2014-04-20 16:23:56 --> Input Class Initialized
DEBUG - 2014-04-20 16:23:56 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 16:23:56 --> Language Class Initialized
DEBUG - 2014-04-20 16:23:56 --> Loader Class Initialized
DEBUG - 2014-04-20 16:23:56 --> Helper loaded: form_helper
DEBUG - 2014-04-20 16:23:56 --> Helper loaded: url_helper
DEBUG - 2014-04-20 16:23:56 --> Helper loaded: html_helper
DEBUG - 2014-04-20 16:23:56 --> Database Driver Class Initialized
ERROR - 2014-04-20 16:23:56 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 16:23:56 --> Session Class Initialized
DEBUG - 2014-04-20 16:23:56 --> Helper loaded: string_helper
DEBUG - 2014-04-20 16:23:56 --> Session routines successfully run
DEBUG - 2014-04-20 16:23:56 --> Form Validation Class Initialized
DEBUG - 2014-04-20 16:23:56 --> Controller Class Initialized
DEBUG - 2014-04-20 16:23:56 --> Model Class Initialized
DEBUG - 2014-04-20 16:23:56 --> Model Class Initialized
DEBUG - 2014-04-20 16:23:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 16:23:56 --> Encrypt Class Initialized
INFO  - 2014-04-20 16:23:56 --> after session initialization................
INFO  - 2014-04-20 16:23:56 --> after internships list has been clicked.................
INFO  - 2014-04-20 16:23:56 --> inside retrieving locations 
INFO  - 2014-04-20 16:23:56 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-20 16:23:56 --> inside retrieving internship firms 
INFO  - 2014-04-20 16:23:56 --> SELECT `intf`.`id_internshipfirm` as id, `intf`.`name` as name
FROM (`internship_firm` intf)
ORDER BY `intf`.`name`
INFO  - 2014-04-20 16:23:56 --> inside retrieving internship duration 
INFO  - 2014-04-20 16:23:56 --> SELECT `intd`.`id_internshipduration` as id, `intd`.`name` as name
FROM (`internship_duration` intd)
ORDER BY `intd`.`id_internshipduration`
INFO  - 2014-04-20 16:23:56 --> inside retrieving internship specialization 
INFO  - 2014-04-20 16:23:56 --> SELECT `ints`.`id_internshipspecialization` as id, `ints`.`name` as name
FROM (`internship_specialization` ints)
ORDER BY `ints`.`name`
INFO  - 2014-04-20 16:23:56 --> last intern id is 0
INFO  - 2014-04-20 16:23:56 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` <> 0
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` desc
LIMIT 20
INFO  - 2014-04-20 16:23:56 --> The session id is ========>36d1bf2146c8d600390af4a5f1614ad7 and the member id is =======>33
DEBUG - 2014-04-20 16:23:56 --> File loaded: ../pharmaray-application/views/internships.php
DEBUG - 2014-04-20 16:23:56 --> Final output sent to browser
DEBUG - 2014-04-20 16:23:56 --> Total execution time: 0.0426
DEBUG - 2014-04-20 16:23:59 --> Config Class Initialized
DEBUG - 2014-04-20 16:23:59 --> Hooks Class Initialized
DEBUG - 2014-04-20 16:23:59 --> Utf8 Class Initialized
DEBUG - 2014-04-20 16:23:59 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 16:23:59 --> URI Class Initialized
DEBUG - 2014-04-20 16:23:59 --> Router Class Initialized
DEBUG - 2014-04-20 16:23:59 --> Output Class Initialized
DEBUG - 2014-04-20 16:23:59 --> Security Class Initialized
DEBUG - 2014-04-20 16:23:59 --> Input Class Initialized
DEBUG - 2014-04-20 16:23:59 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 16:23:59 --> Language Class Initialized
DEBUG - 2014-04-20 16:23:59 --> Loader Class Initialized
DEBUG - 2014-04-20 16:23:59 --> Helper loaded: form_helper
DEBUG - 2014-04-20 16:23:59 --> Helper loaded: url_helper
DEBUG - 2014-04-20 16:23:59 --> Helper loaded: html_helper
DEBUG - 2014-04-20 16:23:59 --> Database Driver Class Initialized
ERROR - 2014-04-20 16:23:59 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 16:23:59 --> Session Class Initialized
DEBUG - 2014-04-20 16:23:59 --> Helper loaded: string_helper
DEBUG - 2014-04-20 16:23:59 --> Session routines successfully run
DEBUG - 2014-04-20 16:23:59 --> Form Validation Class Initialized
DEBUG - 2014-04-20 16:23:59 --> Controller Class Initialized
DEBUG - 2014-04-20 16:23:59 --> Model Class Initialized
DEBUG - 2014-04-20 16:23:59 --> Model Class Initialized
DEBUG - 2014-04-20 16:23:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 16:23:59 --> Encrypt Class Initialized
INFO  - 2014-04-20 16:23:59 --> after session initialization................
INFO  - 2014-04-20 16:23:59 --> last intern id is 1
INFO  - 2014-04-20 16:23:59 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` < 1
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` desc
LIMIT 20
DEBUG - 2014-04-20 16:23:59 --> Final output sent to browser
DEBUG - 2014-04-20 16:23:59 --> Total execution time: 0.0304
DEBUG - 2014-04-20 16:27:40 --> Config Class Initialized
DEBUG - 2014-04-20 16:27:40 --> Hooks Class Initialized
DEBUG - 2014-04-20 16:27:40 --> Utf8 Class Initialized
DEBUG - 2014-04-20 16:27:40 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 16:27:40 --> URI Class Initialized
DEBUG - 2014-04-20 16:27:40 --> Router Class Initialized
DEBUG - 2014-04-20 16:27:40 --> Output Class Initialized
DEBUG - 2014-04-20 16:27:40 --> Security Class Initialized
DEBUG - 2014-04-20 16:27:40 --> Input Class Initialized
DEBUG - 2014-04-20 16:27:40 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 16:27:40 --> Language Class Initialized
DEBUG - 2014-04-20 16:27:40 --> Loader Class Initialized
DEBUG - 2014-04-20 16:27:40 --> Helper loaded: form_helper
DEBUG - 2014-04-20 16:27:40 --> Helper loaded: url_helper
DEBUG - 2014-04-20 16:27:40 --> Helper loaded: html_helper
DEBUG - 2014-04-20 16:27:40 --> Database Driver Class Initialized
ERROR - 2014-04-20 16:27:40 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 16:27:40 --> Session Class Initialized
DEBUG - 2014-04-20 16:27:40 --> Helper loaded: string_helper
DEBUG - 2014-04-20 16:27:40 --> Session routines successfully run
DEBUG - 2014-04-20 16:27:40 --> Form Validation Class Initialized
DEBUG - 2014-04-20 16:27:40 --> Controller Class Initialized
DEBUG - 2014-04-20 16:27:40 --> Model Class Initialized
DEBUG - 2014-04-20 16:27:40 --> Model Class Initialized
DEBUG - 2014-04-20 16:27:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 16:27:40 --> Encrypt Class Initialized
INFO  - 2014-04-20 16:27:40 --> after session initialization................
INFO  - 2014-04-20 16:27:40 --> last news id is 0
INFO  - 2014-04-20 16:27:40 --> SELECT a.id_article as id, a.title as newsletter_title, a.description as newsletter_description, a.guestonly as guestonly, a.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`article` a)
JOIN `member` m ON `a`.`memberid_member` = `m`.`id_member`
WHERE `a`.`id_article` <> 0
ORDER BY `a`.`id_article` desc
LIMIT 15
INFO  - 2014-04-20 16:27:40 --> after newsleters list has been clicked.................
INFO  - 2014-04-20 16:27:40 --> The session id is ========>36d1bf2146c8d600390af4a5f1614ad7 and the member id is =======>33
INFO  - 2014-04-20 16:27:40 --> 0 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=31&article_type=newsletter_title
INFO  - 2014-04-20 16:27:40 --> 0 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=16&article_type=newsletter_title
INFO  - 2014-04-20 16:27:40 --> 1 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=15&article_type=newsletter_title
INFO  - 2014-04-20 16:27:40 --> 0 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=14&article_type=newsletter_title
INFO  - 2014-04-20 16:27:40 --> 1 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=13&article_type=newsletter_title
INFO  - 2014-04-20 16:27:40 --> 0 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=12&article_type=newsletter_title
INFO  - 2014-04-20 16:27:40 --> 1 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=11&article_type=newsletter_title
INFO  - 2014-04-20 16:27:40 --> 0 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=10&article_type=newsletter_title
INFO  - 2014-04-20 16:27:40 --> 0 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=9&article_type=newsletter_title
INFO  - 2014-04-20 16:27:40 --> 1 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=8&article_type=newsletter_title
INFO  - 2014-04-20 16:27:40 --> 0 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=7&article_type=newsletter_title
INFO  - 2014-04-20 16:27:40 --> 1 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=6&article_type=newsletter_title
INFO  - 2014-04-20 16:27:40 --> 0 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=5&article_type=newsletter_title
INFO  - 2014-04-20 16:27:40 --> 0 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=4&article_type=newsletter_title
INFO  - 2014-04-20 16:27:40 --> 1 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=3&article_type=newsletter_title
DEBUG - 2014-04-20 16:27:40 --> File loaded: ../pharmaray-application/views/articles.php
DEBUG - 2014-04-20 16:27:40 --> Final output sent to browser
DEBUG - 2014-04-20 16:27:40 --> Total execution time: 0.0307
DEBUG - 2014-04-20 16:27:42 --> Config Class Initialized
DEBUG - 2014-04-20 16:27:42 --> Hooks Class Initialized
DEBUG - 2014-04-20 16:27:42 --> Utf8 Class Initialized
DEBUG - 2014-04-20 16:27:42 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 16:27:42 --> URI Class Initialized
DEBUG - 2014-04-20 16:27:42 --> Router Class Initialized
DEBUG - 2014-04-20 16:27:42 --> Output Class Initialized
DEBUG - 2014-04-20 16:27:42 --> Security Class Initialized
DEBUG - 2014-04-20 16:27:42 --> Input Class Initialized
DEBUG - 2014-04-20 16:27:42 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 16:27:42 --> Language Class Initialized
DEBUG - 2014-04-20 16:27:42 --> Loader Class Initialized
DEBUG - 2014-04-20 16:27:42 --> Helper loaded: form_helper
DEBUG - 2014-04-20 16:27:42 --> Helper loaded: url_helper
DEBUG - 2014-04-20 16:27:42 --> Helper loaded: html_helper
DEBUG - 2014-04-20 16:27:42 --> Database Driver Class Initialized
ERROR - 2014-04-20 16:27:42 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 16:27:42 --> Session Class Initialized
DEBUG - 2014-04-20 16:27:42 --> Helper loaded: string_helper
DEBUG - 2014-04-20 16:27:42 --> Session routines successfully run
DEBUG - 2014-04-20 16:27:42 --> Form Validation Class Initialized
DEBUG - 2014-04-20 16:27:42 --> Controller Class Initialized
DEBUG - 2014-04-20 16:27:42 --> Model Class Initialized
DEBUG - 2014-04-20 16:27:42 --> Model Class Initialized
DEBUG - 2014-04-20 16:27:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 16:27:42 --> Encrypt Class Initialized
INFO  - 2014-04-20 16:27:42 --> after session initialization................
INFO  - 2014-04-20 16:27:42 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  '33'
INFO  - 2014-04-20 16:27:42 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-04-20 16:27:42 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2014-04-20 16:27:42 --> inside retrieving vacancy for member
INFO  - 2014-04-20 16:27:42 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2014-04-20 16:27:42 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-04-20 16:27:42 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2014-04-20 16:27:42 --> Drugs ::::::::::===>SELECT d.id_drug, d.drug_name, d.drug_description, group_concat(bn.name, ':', bn.id_brandname) as drug_company, group_concat(dcc.name) as drug_brandnames, dcc.id_drugcategory as category_id
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dcc`.`brandname_id`
WHERE `d`.`id_drug` =  '1'
GROUP BY `id_drug`
ORDER BY `d`.`drug_name`, `bn`.`id_brandname`
INFO  - 2014-04-20 16:27:42 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drugcategory_id` = `dc`.`id_drugcategory`
JOIN `drug` d ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2014-04-20 16:27:42 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2014-04-20 16:27:42 --> inside retrieving pharmacy for drug id is 1
INFO  - 2014-04-20 16:27:42 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2014-04-20 16:27:42 --> Related drugs ::::::::::===>SELECT d.drug_name
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcg`.`drugcategory_id` = `dcc`.`id_drugcategory`
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
WHERE `dcc`.`brandname_id` =  '0'
AND `dc`.`id_drugclass` =  '0'
INFO  - 2014-04-20 16:27:42 --> inside retrieve most searched drugs
INFO  - 2014-04-20 16:27:42 --> SELECT `d`.`id_drug` as id, `d`.`drug_name` as name, count(ds.id_drugsearch) as search_count
FROM (`drug_search` ds)
JOIN `drug` d ON `d`.`id_drug` = `ds`.`drug_id`
GROUP BY `d`.`id_drug`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-04-20 16:27:42 --> inside retrieve most searched pharmacy
INFO  - 2014-04-20 16:27:42 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-04-20 16:27:42 --> inside retrieve most searched article
INFO  - 2014-04-20 16:27:42 --> SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description, count(ats.article_id) as search_count
FROM (`article_search` ats)
JOIN `article` a ON `a`.`id_article` = `ats`.`article_id`
JOIN `news` n ON `a`.`newsid_news` = `n`.`id_news`
GROUP BY `a`.`id_article`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-04-20 16:27:42 --> The session id is ========>36d1bf2146c8d600390af4a5f1614ad7 and the member id is =======>33
INFO  - 2014-04-20 16:27:42 -->  column name inside view is 0 column Data is 491
INFO  - 2014-04-20 16:27:42 -->  column name inside view is 1 column Data is 618
INFO  - 2014-04-20 16:27:42 -->  column name inside view is 2 column Data is 1
INFO  - 2014-04-20 16:27:42 -->  column name inside view is 3 column Data is 515
INFO  - 2014-04-20 16:27:42 -->  column name inside view is 4 column Data is 488
INFO  - 2014-04-20 16:27:42 -->  column name inside view is 5 column Data is 509
INFO  - 2014-04-20 16:27:42 -->  column name inside view is 6 column Data is 487
INFO  - 2014-04-20 16:27:42 -->  column name inside view is 7 column Data is 489
INFO  - 2014-04-20 16:27:42 -->  column name inside view is 8 column Data is 516
INFO  - 2014-04-20 16:27:42 -->  column name inside view is 9 column Data is 641
INFO  - 2014-04-20 16:27:42 -->  column name inside view is 0 column Data is 5
INFO  - 2014-04-20 16:27:42 -->  column name inside view is 1 column Data is 2
INFO  - 2014-04-20 16:27:42 -->  column name inside view is 2 column Data is 3
INFO  - 2014-04-20 16:27:42 -->  column name inside view is 3 column Data is 1
INFO  - 2014-04-20 16:27:42 -->  column name inside view is 4 column Data is 18
INFO  - 2014-04-20 16:27:42 -->  column name inside view is 5 column Data is 15
INFO  - 2014-04-20 16:27:42 -->  column name inside view is 6 column Data is 14
INFO  - 2014-04-20 16:27:42 -->  column name inside view is 7 column Data is 6
INFO  - 2014-04-20 16:27:42 -->  column name inside view is 8 column Data is 43
INFO  - 2014-04-20 16:27:42 -->  column name inside view is 9 column Data is 9
INFO  - 2014-04-20 16:27:42 -->  column name inside view is 0 column Data is Male Doctor
INFO  - 2014-04-20 16:27:42 -->  column name inside view is 1 column Data is Ordinary User
DEBUG - 2014-04-20 16:27:42 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2014-04-20 16:27:42 --> Final output sent to browser
DEBUG - 2014-04-20 16:27:42 --> Total execution time: 0.0907
DEBUG - 2014-04-20 16:27:42 --> Config Class Initialized
DEBUG - 2014-04-20 16:27:42 --> Hooks Class Initialized
DEBUG - 2014-04-20 16:27:42 --> Utf8 Class Initialized
DEBUG - 2014-04-20 16:27:42 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 16:27:42 --> URI Class Initialized
DEBUG - 2014-04-20 16:27:42 --> Router Class Initialized
ERROR - 2014-04-20 16:27:42 --> 404 Page Not Found --> css
DEBUG - 2014-04-20 16:27:44 --> Config Class Initialized
DEBUG - 2014-04-20 16:27:44 --> Hooks Class Initialized
DEBUG - 2014-04-20 16:27:44 --> Utf8 Class Initialized
DEBUG - 2014-04-20 16:27:44 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 16:27:44 --> URI Class Initialized
DEBUG - 2014-04-20 16:27:44 --> Router Class Initialized
DEBUG - 2014-04-20 16:27:44 --> Output Class Initialized
DEBUG - 2014-04-20 16:27:44 --> Security Class Initialized
DEBUG - 2014-04-20 16:27:44 --> Input Class Initialized
DEBUG - 2014-04-20 16:27:44 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 16:27:44 --> Language Class Initialized
DEBUG - 2014-04-20 16:27:44 --> Loader Class Initialized
DEBUG - 2014-04-20 16:27:44 --> Helper loaded: form_helper
DEBUG - 2014-04-20 16:27:44 --> Helper loaded: url_helper
DEBUG - 2014-04-20 16:27:44 --> Helper loaded: html_helper
DEBUG - 2014-04-20 16:27:44 --> Database Driver Class Initialized
ERROR - 2014-04-20 16:27:44 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 16:27:44 --> Session Class Initialized
DEBUG - 2014-04-20 16:27:44 --> Helper loaded: string_helper
DEBUG - 2014-04-20 16:27:44 --> Session routines successfully run
DEBUG - 2014-04-20 16:27:44 --> Form Validation Class Initialized
DEBUG - 2014-04-20 16:27:44 --> Controller Class Initialized
DEBUG - 2014-04-20 16:27:44 --> Model Class Initialized
DEBUG - 2014-04-20 16:27:44 --> Model Class Initialized
DEBUG - 2014-04-20 16:27:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 16:27:44 --> Encrypt Class Initialized
INFO  - 2014-04-20 16:27:44 --> after session initialization................
INFO  - 2014-04-20 16:27:44 --> inside retrieve most commented forum topic 
INFO  - 2014-04-20 16:27:44 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
INFO  - 2014-04-20 16:27:44 --> inside retrieving first 20 topics 
INFO  - 2014-04-20 16:27:44 --> SELECT `t`.`id_topicforum`, upper(t.name) as name, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
LIMIT 20
INFO  - 2014-04-20 16:27:44 --> inside retrieving forum beyond id 
INFO  - 2014-04-20 16:27:44 --> SELECT `ff`.`id_forum` as id, `ff`.`name`, count(f.id_forum) as sub_forum
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` is null 
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`
INFO  - 2014-04-20 16:27:44 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2014-04-20 16:27:44 --> inside retrieving comments topic id and drug id is 1
INFO  - 2014-04-20 16:27:44 --> SELECT `tc`.`id_topiccomment`, `tc`.`comment`, `tc`.`timecreated`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2014-04-20 16:27:44 --> inside retrieving comments topic id 1
INFO  - 2014-04-20 16:27:44 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
INFO  - 2014-04-20 16:27:44 --> after forums has been clicked.................
INFO  - 2014-04-20 16:27:44 --> The session id is ========>36d1bf2146c8d600390af4a5f1614ad7 and the member id is =======>33
INFO  - 2014-04-20 16:27:44 -->  column name inside view is 0 column Data is Male Doctor
INFO  - 2014-04-20 16:27:44 -->  column name inside view is 1 column Data is Ordinary User
DEBUG - 2014-04-20 16:27:44 --> File loaded: ../pharmaray-application/views/forum.php
DEBUG - 2014-04-20 16:27:44 --> Final output sent to browser
DEBUG - 2014-04-20 16:27:44 --> Total execution time: 0.0805
DEBUG - 2014-04-20 16:27:44 --> Config Class Initialized
DEBUG - 2014-04-20 16:27:44 --> Hooks Class Initialized
DEBUG - 2014-04-20 16:27:44 --> Utf8 Class Initialized
DEBUG - 2014-04-20 16:27:44 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 16:27:44 --> URI Class Initialized
DEBUG - 2014-04-20 16:27:44 --> Router Class Initialized
DEBUG - 2014-04-20 16:27:44 --> Output Class Initialized
DEBUG - 2014-04-20 16:27:44 --> Security Class Initialized
DEBUG - 2014-04-20 16:27:44 --> Input Class Initialized
DEBUG - 2014-04-20 16:27:44 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 16:27:44 --> Language Class Initialized
DEBUG - 2014-04-20 16:27:44 --> Loader Class Initialized
DEBUG - 2014-04-20 16:27:44 --> Helper loaded: form_helper
DEBUG - 2014-04-20 16:27:44 --> Helper loaded: url_helper
DEBUG - 2014-04-20 16:27:44 --> Helper loaded: html_helper
DEBUG - 2014-04-20 16:27:44 --> Database Driver Class Initialized
ERROR - 2014-04-20 16:27:44 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 16:27:44 --> Session Class Initialized
DEBUG - 2014-04-20 16:27:44 --> Helper loaded: string_helper
DEBUG - 2014-04-20 16:27:44 --> Session routines successfully run
DEBUG - 2014-04-20 16:27:44 --> Form Validation Class Initialized
DEBUG - 2014-04-20 16:27:44 --> Controller Class Initialized
DEBUG - 2014-04-20 16:27:44 --> Model Class Initialized
DEBUG - 2014-04-20 16:27:44 --> Model Class Initialized
DEBUG - 2014-04-20 16:27:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 16:27:44 --> Encrypt Class Initialized
INFO  - 2014-04-20 16:27:44 --> after session initialization................
ERROR - 2014-04-20 16:27:44 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2014-04-20 16:27:48 --> Config Class Initialized
DEBUG - 2014-04-20 16:27:48 --> Hooks Class Initialized
DEBUG - 2014-04-20 16:27:48 --> Utf8 Class Initialized
DEBUG - 2014-04-20 16:27:48 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 16:27:48 --> URI Class Initialized
DEBUG - 2014-04-20 16:27:48 --> Router Class Initialized
DEBUG - 2014-04-20 16:27:48 --> Output Class Initialized
DEBUG - 2014-04-20 16:27:48 --> Security Class Initialized
DEBUG - 2014-04-20 16:27:48 --> Input Class Initialized
DEBUG - 2014-04-20 16:27:48 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 16:27:48 --> Language Class Initialized
DEBUG - 2014-04-20 16:27:48 --> Loader Class Initialized
DEBUG - 2014-04-20 16:27:48 --> Helper loaded: form_helper
DEBUG - 2014-04-20 16:27:48 --> Helper loaded: url_helper
DEBUG - 2014-04-20 16:27:48 --> Helper loaded: html_helper
DEBUG - 2014-04-20 16:27:48 --> Database Driver Class Initialized
ERROR - 2014-04-20 16:27:48 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 16:27:48 --> Session Class Initialized
DEBUG - 2014-04-20 16:27:48 --> Helper loaded: string_helper
DEBUG - 2014-04-20 16:27:48 --> Session routines successfully run
DEBUG - 2014-04-20 16:27:48 --> Form Validation Class Initialized
DEBUG - 2014-04-20 16:27:48 --> Controller Class Initialized
DEBUG - 2014-04-20 16:27:48 --> Model Class Initialized
DEBUG - 2014-04-20 16:27:48 --> Model Class Initialized
DEBUG - 2014-04-20 16:27:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 16:27:48 --> Encrypt Class Initialized
INFO  - 2014-04-20 16:27:48 --> after session initialization................
INFO  - 2014-04-20 16:27:48 --> after community pharmacy  has been clicked.................
INFO  - 2014-04-20 16:27:48 --> inside retrieving pharmacy beyond id 0
INFO  - 2014-04-20 16:27:48 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2014-04-20 16:27:48 --> inside retrieving locations 
INFO  - 2014-04-20 16:27:48 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-20 16:27:48 --> The session id is ========>36d1bf2146c8d600390af4a5f1614ad7 and the member id is =======>33
DEBUG - 2014-04-20 16:27:48 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2014-04-20 16:27:48 --> Final output sent to browser
DEBUG - 2014-04-20 16:27:48 --> Total execution time: 0.0355
DEBUG - 2014-04-20 16:27:54 --> Config Class Initialized
DEBUG - 2014-04-20 16:27:54 --> Hooks Class Initialized
DEBUG - 2014-04-20 16:27:54 --> Utf8 Class Initialized
DEBUG - 2014-04-20 16:27:54 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 16:27:54 --> URI Class Initialized
DEBUG - 2014-04-20 16:27:54 --> Router Class Initialized
DEBUG - 2014-04-20 16:27:54 --> Output Class Initialized
DEBUG - 2014-04-20 16:27:54 --> Security Class Initialized
DEBUG - 2014-04-20 16:27:54 --> Input Class Initialized
DEBUG - 2014-04-20 16:27:54 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 16:27:54 --> Language Class Initialized
DEBUG - 2014-04-20 16:27:54 --> Loader Class Initialized
DEBUG - 2014-04-20 16:27:54 --> Helper loaded: form_helper
DEBUG - 2014-04-20 16:27:54 --> Helper loaded: url_helper
DEBUG - 2014-04-20 16:27:54 --> Helper loaded: html_helper
DEBUG - 2014-04-20 16:27:54 --> Database Driver Class Initialized
ERROR - 2014-04-20 16:27:54 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 16:27:54 --> Session Class Initialized
DEBUG - 2014-04-20 16:27:54 --> Helper loaded: string_helper
DEBUG - 2014-04-20 16:27:54 --> Session routines successfully run
DEBUG - 2014-04-20 16:27:54 --> Form Validation Class Initialized
DEBUG - 2014-04-20 16:27:54 --> Controller Class Initialized
DEBUG - 2014-04-20 16:27:54 --> Model Class Initialized
DEBUG - 2014-04-20 16:27:54 --> Model Class Initialized
DEBUG - 2014-04-20 16:27:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 16:27:54 --> Encrypt Class Initialized
INFO  - 2014-04-20 16:27:54 --> after session initialization................
INFO  - 2014-04-20 16:27:54 --> after internships list has been clicked.................
INFO  - 2014-04-20 16:27:54 --> inside retrieving locations 
INFO  - 2014-04-20 16:27:54 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-20 16:27:54 --> inside retrieving internship firms 
INFO  - 2014-04-20 16:27:54 --> SELECT `intf`.`id_internshipfirm` as id, `intf`.`name` as name
FROM (`internship_firm` intf)
ORDER BY `intf`.`name`
INFO  - 2014-04-20 16:27:54 --> inside retrieving internship duration 
INFO  - 2014-04-20 16:27:54 --> SELECT `intd`.`id_internshipduration` as id, `intd`.`name` as name
FROM (`internship_duration` intd)
ORDER BY `intd`.`id_internshipduration`
INFO  - 2014-04-20 16:27:54 --> inside retrieving internship specialization 
INFO  - 2014-04-20 16:27:54 --> SELECT `ints`.`id_internshipspecialization` as id, `ints`.`name` as name
FROM (`internship_specialization` ints)
ORDER BY `ints`.`name`
INFO  - 2014-04-20 16:27:54 --> last intern id is 0
INFO  - 2014-04-20 16:27:54 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` <> 0
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` desc
LIMIT 14
INFO  - 2014-04-20 16:27:54 --> The session id is ========>36d1bf2146c8d600390af4a5f1614ad7 and the member id is =======>33
DEBUG - 2014-04-20 16:27:54 --> File loaded: ../pharmaray-application/views/internships.php
DEBUG - 2014-04-20 16:27:54 --> Final output sent to browser
DEBUG - 2014-04-20 16:27:54 --> Total execution time: 0.0394
DEBUG - 2014-04-20 16:29:29 --> Config Class Initialized
DEBUG - 2014-04-20 16:29:29 --> Hooks Class Initialized
DEBUG - 2014-04-20 16:29:29 --> Utf8 Class Initialized
DEBUG - 2014-04-20 16:29:29 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 16:29:29 --> URI Class Initialized
DEBUG - 2014-04-20 16:29:29 --> Router Class Initialized
DEBUG - 2014-04-20 16:29:29 --> Output Class Initialized
DEBUG - 2014-04-20 16:29:29 --> Security Class Initialized
DEBUG - 2014-04-20 16:29:29 --> Input Class Initialized
DEBUG - 2014-04-20 16:29:29 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 16:29:29 --> Language Class Initialized
DEBUG - 2014-04-20 16:29:29 --> Loader Class Initialized
DEBUG - 2014-04-20 16:29:29 --> Helper loaded: form_helper
DEBUG - 2014-04-20 16:29:29 --> Helper loaded: url_helper
DEBUG - 2014-04-20 16:29:29 --> Helper loaded: html_helper
DEBUG - 2014-04-20 16:29:29 --> Database Driver Class Initialized
ERROR - 2014-04-20 16:29:29 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 16:29:29 --> Session Class Initialized
DEBUG - 2014-04-20 16:29:29 --> Helper loaded: string_helper
DEBUG - 2014-04-20 16:29:29 --> Session routines successfully run
DEBUG - 2014-04-20 16:29:29 --> Form Validation Class Initialized
DEBUG - 2014-04-20 16:29:29 --> Controller Class Initialized
DEBUG - 2014-04-20 16:29:29 --> Model Class Initialized
DEBUG - 2014-04-20 16:29:29 --> Model Class Initialized
DEBUG - 2014-04-20 16:29:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 16:29:29 --> Encrypt Class Initialized
INFO  - 2014-04-20 16:29:29 --> after session initialization................
INFO  - 2014-04-20 16:29:29 --> last intern id is 7
INFO  - 2014-04-20 16:29:29 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` < 7
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` desc
LIMIT 20
DEBUG - 2014-04-20 16:29:29 --> Final output sent to browser
DEBUG - 2014-04-20 16:29:29 --> Total execution time: 0.0284
DEBUG - 2014-04-20 16:42:53 --> Config Class Initialized
DEBUG - 2014-04-20 16:42:53 --> Hooks Class Initialized
DEBUG - 2014-04-20 16:42:53 --> Utf8 Class Initialized
DEBUG - 2014-04-20 16:42:53 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 16:42:53 --> URI Class Initialized
DEBUG - 2014-04-20 16:42:53 --> Router Class Initialized
DEBUG - 2014-04-20 16:42:53 --> Output Class Initialized
DEBUG - 2014-04-20 16:42:53 --> Security Class Initialized
DEBUG - 2014-04-20 16:42:53 --> Input Class Initialized
DEBUG - 2014-04-20 16:42:53 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 16:42:53 --> Language Class Initialized
DEBUG - 2014-04-20 16:42:53 --> Loader Class Initialized
DEBUG - 2014-04-20 16:42:53 --> Helper loaded: form_helper
DEBUG - 2014-04-20 16:42:53 --> Helper loaded: url_helper
DEBUG - 2014-04-20 16:42:53 --> Helper loaded: html_helper
DEBUG - 2014-04-20 16:42:53 --> Database Driver Class Initialized
ERROR - 2014-04-20 16:42:53 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 16:42:53 --> Session Class Initialized
DEBUG - 2014-04-20 16:42:53 --> Helper loaded: string_helper
DEBUG - 2014-04-20 16:42:53 --> Session routines successfully run
DEBUG - 2014-04-20 16:42:53 --> Form Validation Class Initialized
DEBUG - 2014-04-20 16:42:53 --> Controller Class Initialized
DEBUG - 2014-04-20 16:42:53 --> Model Class Initialized
DEBUG - 2014-04-20 16:42:53 --> Model Class Initialized
DEBUG - 2014-04-20 16:42:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 16:42:53 --> Encrypt Class Initialized
INFO  - 2014-04-20 16:42:53 --> after session initialization................
INFO  - 2014-04-20 16:42:53 --> after internships list has been clicked.................
INFO  - 2014-04-20 16:42:53 --> inside retrieving locations 
INFO  - 2014-04-20 16:42:53 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-20 16:42:53 --> inside retrieving internship firms 
INFO  - 2014-04-20 16:42:53 --> SELECT `intf`.`id_internshipfirm` as id, `intf`.`name` as name
FROM (`internship_firm` intf)
ORDER BY `intf`.`name`
INFO  - 2014-04-20 16:42:53 --> inside retrieving internship duration 
INFO  - 2014-04-20 16:42:53 --> SELECT `intd`.`id_internshipduration` as id, `intd`.`name` as name
FROM (`internship_duration` intd)
ORDER BY `intd`.`id_internshipduration`
INFO  - 2014-04-20 16:42:53 --> inside retrieving internship specialization 
INFO  - 2014-04-20 16:42:53 --> SELECT `ints`.`id_internshipspecialization` as id, `ints`.`name` as name
FROM (`internship_specialization` ints)
ORDER BY `ints`.`name`
INFO  - 2014-04-20 16:42:53 --> last intern id is 0
INFO  - 2014-04-20 16:42:53 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` <> 0
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` desc
LIMIT 14
INFO  - 2014-04-20 16:42:53 --> The session id is ========>eed9a92d813a1fb824ee267b08caa8cd and the member id is =======>33
DEBUG - 2014-04-20 16:42:53 --> File loaded: ../pharmaray-application/views/internships.php
DEBUG - 2014-04-20 16:42:53 --> Final output sent to browser
DEBUG - 2014-04-20 16:42:53 --> Total execution time: 0.0521
DEBUG - 2014-04-20 16:43:00 --> Config Class Initialized
DEBUG - 2014-04-20 16:43:00 --> Hooks Class Initialized
DEBUG - 2014-04-20 16:43:00 --> Utf8 Class Initialized
DEBUG - 2014-04-20 16:43:00 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 16:43:00 --> URI Class Initialized
DEBUG - 2014-04-20 16:43:00 --> Router Class Initialized
DEBUG - 2014-04-20 16:43:00 --> Output Class Initialized
DEBUG - 2014-04-20 16:43:00 --> Security Class Initialized
DEBUG - 2014-04-20 16:43:00 --> Input Class Initialized
DEBUG - 2014-04-20 16:43:00 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 16:43:00 --> Language Class Initialized
DEBUG - 2014-04-20 16:43:00 --> Loader Class Initialized
DEBUG - 2014-04-20 16:43:00 --> Helper loaded: form_helper
DEBUG - 2014-04-20 16:43:00 --> Helper loaded: url_helper
DEBUG - 2014-04-20 16:43:00 --> Helper loaded: html_helper
DEBUG - 2014-04-20 16:43:00 --> Database Driver Class Initialized
ERROR - 2014-04-20 16:43:00 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 16:43:00 --> Session Class Initialized
DEBUG - 2014-04-20 16:43:00 --> Helper loaded: string_helper
DEBUG - 2014-04-20 16:43:00 --> Session routines successfully run
DEBUG - 2014-04-20 16:43:00 --> Form Validation Class Initialized
DEBUG - 2014-04-20 16:43:00 --> Controller Class Initialized
DEBUG - 2014-04-20 16:43:00 --> Model Class Initialized
DEBUG - 2014-04-20 16:43:00 --> Model Class Initialized
DEBUG - 2014-04-20 16:43:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 16:43:00 --> Encrypt Class Initialized
INFO  - 2014-04-20 16:43:00 --> after session initialization................
INFO  - 2014-04-20 16:43:00 --> last intern id is 7
INFO  - 2014-04-20 16:43:00 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` < 7
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` desc
LIMIT 20
DEBUG - 2014-04-20 16:43:00 --> Final output sent to browser
DEBUG - 2014-04-20 16:43:00 --> Total execution time: 0.0293
DEBUG - 2014-04-20 16:43:02 --> Config Class Initialized
DEBUG - 2014-04-20 16:43:02 --> Hooks Class Initialized
DEBUG - 2014-04-20 16:43:02 --> Utf8 Class Initialized
DEBUG - 2014-04-20 16:43:02 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 16:43:02 --> URI Class Initialized
DEBUG - 2014-04-20 16:43:02 --> Router Class Initialized
DEBUG - 2014-04-20 16:43:02 --> Output Class Initialized
DEBUG - 2014-04-20 16:43:02 --> Security Class Initialized
DEBUG - 2014-04-20 16:43:02 --> Input Class Initialized
DEBUG - 2014-04-20 16:43:02 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 16:43:02 --> Language Class Initialized
DEBUG - 2014-04-20 16:43:02 --> Loader Class Initialized
DEBUG - 2014-04-20 16:43:02 --> Helper loaded: form_helper
DEBUG - 2014-04-20 16:43:02 --> Helper loaded: url_helper
DEBUG - 2014-04-20 16:43:02 --> Helper loaded: html_helper
DEBUG - 2014-04-20 16:43:02 --> Database Driver Class Initialized
ERROR - 2014-04-20 16:43:02 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 16:43:02 --> Session Class Initialized
DEBUG - 2014-04-20 16:43:02 --> Helper loaded: string_helper
DEBUG - 2014-04-20 16:43:02 --> Session routines successfully run
DEBUG - 2014-04-20 16:43:02 --> Form Validation Class Initialized
DEBUG - 2014-04-20 16:43:02 --> Controller Class Initialized
DEBUG - 2014-04-20 16:43:02 --> Model Class Initialized
DEBUG - 2014-04-20 16:43:02 --> Model Class Initialized
DEBUG - 2014-04-20 16:43:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 16:43:02 --> Encrypt Class Initialized
INFO  - 2014-04-20 16:43:02 --> after session initialization................
INFO  - 2014-04-20 16:43:02 --> last intern id is 1
INFO  - 2014-04-20 16:43:02 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` < 1
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` desc
LIMIT 20
DEBUG - 2014-04-20 16:43:02 --> Final output sent to browser
DEBUG - 2014-04-20 16:43:02 --> Total execution time: 0.0412
DEBUG - 2014-04-20 16:43:08 --> Config Class Initialized
DEBUG - 2014-04-20 16:43:08 --> Hooks Class Initialized
DEBUG - 2014-04-20 16:43:08 --> Utf8 Class Initialized
DEBUG - 2014-04-20 16:43:08 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 16:43:08 --> URI Class Initialized
DEBUG - 2014-04-20 16:43:08 --> Router Class Initialized
DEBUG - 2014-04-20 16:43:08 --> Output Class Initialized
DEBUG - 2014-04-20 16:43:08 --> Security Class Initialized
DEBUG - 2014-04-20 16:43:08 --> Input Class Initialized
DEBUG - 2014-04-20 16:43:08 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 16:43:08 --> Language Class Initialized
DEBUG - 2014-04-20 16:43:08 --> Loader Class Initialized
DEBUG - 2014-04-20 16:43:08 --> Helper loaded: form_helper
DEBUG - 2014-04-20 16:43:08 --> Helper loaded: url_helper
DEBUG - 2014-04-20 16:43:08 --> Helper loaded: html_helper
DEBUG - 2014-04-20 16:43:08 --> Database Driver Class Initialized
ERROR - 2014-04-20 16:43:08 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 16:43:08 --> Session Class Initialized
DEBUG - 2014-04-20 16:43:08 --> Helper loaded: string_helper
DEBUG - 2014-04-20 16:43:08 --> Session routines successfully run
DEBUG - 2014-04-20 16:43:08 --> Form Validation Class Initialized
DEBUG - 2014-04-20 16:43:08 --> Controller Class Initialized
DEBUG - 2014-04-20 16:43:08 --> Model Class Initialized
DEBUG - 2014-04-20 16:43:08 --> Model Class Initialized
DEBUG - 2014-04-20 16:43:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 16:43:08 --> Encrypt Class Initialized
INFO  - 2014-04-20 16:43:08 --> after session initialization................
INFO  - 2014-04-20 16:43:08 --> after internships list has been clicked.................
INFO  - 2014-04-20 16:43:08 --> inside retrieving locations 
INFO  - 2014-04-20 16:43:08 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-20 16:43:08 --> inside retrieving internship firms 
INFO  - 2014-04-20 16:43:08 --> SELECT `intf`.`id_internshipfirm` as id, `intf`.`name` as name
FROM (`internship_firm` intf)
ORDER BY `intf`.`name`
INFO  - 2014-04-20 16:43:08 --> inside retrieving internship duration 
INFO  - 2014-04-20 16:43:08 --> SELECT `intd`.`id_internshipduration` as id, `intd`.`name` as name
FROM (`internship_duration` intd)
ORDER BY `intd`.`id_internshipduration`
INFO  - 2014-04-20 16:43:08 --> inside retrieving internship specialization 
INFO  - 2014-04-20 16:43:08 --> SELECT `ints`.`id_internshipspecialization` as id, `ints`.`name` as name
FROM (`internship_specialization` ints)
ORDER BY `ints`.`name`
INFO  - 2014-04-20 16:43:08 --> last intern id is 0
INFO  - 2014-04-20 16:43:08 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` <> 0
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` desc
LIMIT 14
INFO  - 2014-04-20 16:43:08 --> The session id is ========>eed9a92d813a1fb824ee267b08caa8cd and the member id is =======>33
DEBUG - 2014-04-20 16:43:08 --> File loaded: ../pharmaray-application/views/internships.php
DEBUG - 2014-04-20 16:43:08 --> Final output sent to browser
DEBUG - 2014-04-20 16:43:08 --> Total execution time: 0.0349
DEBUG - 2014-04-20 16:43:15 --> Config Class Initialized
DEBUG - 2014-04-20 16:43:15 --> Hooks Class Initialized
DEBUG - 2014-04-20 16:43:15 --> Utf8 Class Initialized
DEBUG - 2014-04-20 16:43:15 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 16:43:15 --> URI Class Initialized
DEBUG - 2014-04-20 16:43:15 --> Router Class Initialized
DEBUG - 2014-04-20 16:43:15 --> Output Class Initialized
DEBUG - 2014-04-20 16:43:15 --> Security Class Initialized
DEBUG - 2014-04-20 16:43:15 --> Input Class Initialized
DEBUG - 2014-04-20 16:43:15 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 16:43:15 --> Language Class Initialized
DEBUG - 2014-04-20 16:43:15 --> Loader Class Initialized
DEBUG - 2014-04-20 16:43:15 --> Helper loaded: form_helper
DEBUG - 2014-04-20 16:43:15 --> Helper loaded: url_helper
DEBUG - 2014-04-20 16:43:15 --> Helper loaded: html_helper
DEBUG - 2014-04-20 16:43:15 --> Database Driver Class Initialized
ERROR - 2014-04-20 16:43:15 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 16:43:15 --> Session Class Initialized
DEBUG - 2014-04-20 16:43:15 --> Helper loaded: string_helper
DEBUG - 2014-04-20 16:43:15 --> Session routines successfully run
DEBUG - 2014-04-20 16:43:15 --> Form Validation Class Initialized
DEBUG - 2014-04-20 16:43:15 --> Controller Class Initialized
DEBUG - 2014-04-20 16:43:15 --> Model Class Initialized
DEBUG - 2014-04-20 16:43:15 --> Model Class Initialized
DEBUG - 2014-04-20 16:43:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 16:43:15 --> Encrypt Class Initialized
INFO  - 2014-04-20 16:43:15 --> after session initialization................
INFO  - 2014-04-20 16:43:15 --> last intern id is 7
INFO  - 2014-04-20 16:43:15 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` < 7
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` desc
LIMIT 20
DEBUG - 2014-04-20 16:43:15 --> Final output sent to browser
DEBUG - 2014-04-20 16:43:15 --> Total execution time: 0.0361
DEBUG - 2014-04-20 16:43:15 --> Config Class Initialized
DEBUG - 2014-04-20 16:43:15 --> Hooks Class Initialized
DEBUG - 2014-04-20 16:43:15 --> Utf8 Class Initialized
DEBUG - 2014-04-20 16:43:15 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 16:43:15 --> URI Class Initialized
DEBUG - 2014-04-20 16:43:15 --> Router Class Initialized
DEBUG - 2014-04-20 16:43:15 --> Output Class Initialized
DEBUG - 2014-04-20 16:43:15 --> Security Class Initialized
DEBUG - 2014-04-20 16:43:15 --> Input Class Initialized
DEBUG - 2014-04-20 16:43:15 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 16:43:15 --> Language Class Initialized
DEBUG - 2014-04-20 16:43:15 --> Loader Class Initialized
DEBUG - 2014-04-20 16:43:15 --> Helper loaded: form_helper
DEBUG - 2014-04-20 16:43:15 --> Helper loaded: url_helper
DEBUG - 2014-04-20 16:43:15 --> Helper loaded: html_helper
DEBUG - 2014-04-20 16:43:15 --> Database Driver Class Initialized
ERROR - 2014-04-20 16:43:15 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 16:43:15 --> Session Class Initialized
DEBUG - 2014-04-20 16:43:15 --> Helper loaded: string_helper
DEBUG - 2014-04-20 16:43:15 --> Session routines successfully run
DEBUG - 2014-04-20 16:43:15 --> Form Validation Class Initialized
DEBUG - 2014-04-20 16:43:15 --> Controller Class Initialized
DEBUG - 2014-04-20 16:43:15 --> Model Class Initialized
DEBUG - 2014-04-20 16:43:15 --> Model Class Initialized
DEBUG - 2014-04-20 16:43:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 16:43:15 --> Encrypt Class Initialized
INFO  - 2014-04-20 16:43:15 --> after session initialization................
INFO  - 2014-04-20 16:43:15 --> last intern id is 1
INFO  - 2014-04-20 16:43:15 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` < 1
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` desc
LIMIT 20
DEBUG - 2014-04-20 16:43:15 --> Final output sent to browser
DEBUG - 2014-04-20 16:43:15 --> Total execution time: 0.0310
DEBUG - 2014-04-20 16:43:41 --> Config Class Initialized
DEBUG - 2014-04-20 16:43:41 --> Hooks Class Initialized
DEBUG - 2014-04-20 16:43:41 --> Utf8 Class Initialized
DEBUG - 2014-04-20 16:43:41 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 16:43:41 --> URI Class Initialized
DEBUG - 2014-04-20 16:43:41 --> Router Class Initialized
DEBUG - 2014-04-20 16:43:41 --> Output Class Initialized
DEBUG - 2014-04-20 16:43:41 --> Security Class Initialized
DEBUG - 2014-04-20 16:43:41 --> Input Class Initialized
DEBUG - 2014-04-20 16:43:41 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 16:43:41 --> Language Class Initialized
DEBUG - 2014-04-20 16:43:41 --> Loader Class Initialized
DEBUG - 2014-04-20 16:43:41 --> Helper loaded: form_helper
DEBUG - 2014-04-20 16:43:41 --> Helper loaded: url_helper
DEBUG - 2014-04-20 16:43:41 --> Helper loaded: html_helper
DEBUG - 2014-04-20 16:43:41 --> Database Driver Class Initialized
ERROR - 2014-04-20 16:43:41 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 16:43:41 --> Session Class Initialized
DEBUG - 2014-04-20 16:43:41 --> Helper loaded: string_helper
DEBUG - 2014-04-20 16:43:41 --> Session routines successfully run
DEBUG - 2014-04-20 16:43:41 --> Form Validation Class Initialized
DEBUG - 2014-04-20 16:43:41 --> Controller Class Initialized
DEBUG - 2014-04-20 16:43:41 --> Model Class Initialized
DEBUG - 2014-04-20 16:43:41 --> Model Class Initialized
DEBUG - 2014-04-20 16:43:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 16:43:41 --> Encrypt Class Initialized
INFO  - 2014-04-20 16:43:41 --> after session initialization................
INFO  - 2014-04-20 16:43:41 --> after internships list has been clicked.................
INFO  - 2014-04-20 16:43:41 --> inside retrieving locations 
INFO  - 2014-04-20 16:43:41 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-20 16:43:41 --> inside retrieving internship firms 
INFO  - 2014-04-20 16:43:41 --> SELECT `intf`.`id_internshipfirm` as id, `intf`.`name` as name
FROM (`internship_firm` intf)
ORDER BY `intf`.`name`
INFO  - 2014-04-20 16:43:41 --> inside retrieving internship duration 
INFO  - 2014-04-20 16:43:41 --> SELECT `intd`.`id_internshipduration` as id, `intd`.`name` as name
FROM (`internship_duration` intd)
ORDER BY `intd`.`id_internshipduration`
INFO  - 2014-04-20 16:43:41 --> inside retrieving internship specialization 
INFO  - 2014-04-20 16:43:41 --> SELECT `ints`.`id_internshipspecialization` as id, `ints`.`name` as name
FROM (`internship_specialization` ints)
ORDER BY `ints`.`name`
INFO  - 2014-04-20 16:43:41 --> last intern id is 0
INFO  - 2014-04-20 16:43:41 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` <> 0
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` desc
LIMIT 14
INFO  - 2014-04-20 16:43:41 --> The session id is ========>eed9a92d813a1fb824ee267b08caa8cd and the member id is =======>33
DEBUG - 2014-04-20 16:43:41 --> File loaded: ../pharmaray-application/views/internships.php
DEBUG - 2014-04-20 16:43:41 --> Final output sent to browser
DEBUG - 2014-04-20 16:43:41 --> Total execution time: 0.0374
DEBUG - 2014-04-20 16:43:43 --> Config Class Initialized
DEBUG - 2014-04-20 16:43:43 --> Hooks Class Initialized
DEBUG - 2014-04-20 16:43:43 --> Utf8 Class Initialized
DEBUG - 2014-04-20 16:43:43 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 16:43:43 --> URI Class Initialized
DEBUG - 2014-04-20 16:43:43 --> Router Class Initialized
DEBUG - 2014-04-20 16:43:43 --> Output Class Initialized
DEBUG - 2014-04-20 16:43:43 --> Security Class Initialized
DEBUG - 2014-04-20 16:43:43 --> Input Class Initialized
DEBUG - 2014-04-20 16:43:43 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 16:43:43 --> Language Class Initialized
DEBUG - 2014-04-20 16:43:43 --> Loader Class Initialized
DEBUG - 2014-04-20 16:43:43 --> Helper loaded: form_helper
DEBUG - 2014-04-20 16:43:43 --> Helper loaded: url_helper
DEBUG - 2014-04-20 16:43:43 --> Helper loaded: html_helper
DEBUG - 2014-04-20 16:43:43 --> Database Driver Class Initialized
ERROR - 2014-04-20 16:43:43 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 16:43:43 --> Session Class Initialized
DEBUG - 2014-04-20 16:43:43 --> Helper loaded: string_helper
DEBUG - 2014-04-20 16:43:43 --> Session routines successfully run
DEBUG - 2014-04-20 16:43:43 --> Form Validation Class Initialized
DEBUG - 2014-04-20 16:43:43 --> Controller Class Initialized
DEBUG - 2014-04-20 16:43:43 --> Model Class Initialized
DEBUG - 2014-04-20 16:43:43 --> Model Class Initialized
DEBUG - 2014-04-20 16:43:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 16:43:43 --> Encrypt Class Initialized
INFO  - 2014-04-20 16:43:43 --> after session initialization................
INFO  - 2014-04-20 16:43:43 --> after internships list has been clicked.................
INFO  - 2014-04-20 16:43:43 --> inside retrieving locations 
INFO  - 2014-04-20 16:43:43 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-20 16:43:43 --> inside retrieving internship firms 
INFO  - 2014-04-20 16:43:43 --> SELECT `intf`.`id_internshipfirm` as id, `intf`.`name` as name
FROM (`internship_firm` intf)
ORDER BY `intf`.`name`
INFO  - 2014-04-20 16:43:43 --> inside retrieving internship duration 
INFO  - 2014-04-20 16:43:43 --> SELECT `intd`.`id_internshipduration` as id, `intd`.`name` as name
FROM (`internship_duration` intd)
ORDER BY `intd`.`id_internshipduration`
INFO  - 2014-04-20 16:43:43 --> inside retrieving internship specialization 
INFO  - 2014-04-20 16:43:43 --> SELECT `ints`.`id_internshipspecialization` as id, `ints`.`name` as name
FROM (`internship_specialization` ints)
ORDER BY `ints`.`name`
INFO  - 2014-04-20 16:43:43 --> last intern id is 0
INFO  - 2014-04-20 16:43:43 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` <> 0
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` desc
LIMIT 14
INFO  - 2014-04-20 16:43:43 --> The session id is ========>eed9a92d813a1fb824ee267b08caa8cd and the member id is =======>33
DEBUG - 2014-04-20 16:43:43 --> File loaded: ../pharmaray-application/views/internships.php
DEBUG - 2014-04-20 16:43:43 --> Final output sent to browser
DEBUG - 2014-04-20 16:43:43 --> Total execution time: 0.0371
DEBUG - 2014-04-20 16:43:48 --> Config Class Initialized
DEBUG - 2014-04-20 16:43:48 --> Hooks Class Initialized
DEBUG - 2014-04-20 16:43:48 --> Utf8 Class Initialized
DEBUG - 2014-04-20 16:43:48 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 16:43:48 --> URI Class Initialized
DEBUG - 2014-04-20 16:43:48 --> Router Class Initialized
DEBUG - 2014-04-20 16:43:48 --> Output Class Initialized
DEBUG - 2014-04-20 16:43:48 --> Security Class Initialized
DEBUG - 2014-04-20 16:43:48 --> Input Class Initialized
DEBUG - 2014-04-20 16:43:48 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 16:43:48 --> Language Class Initialized
DEBUG - 2014-04-20 16:43:48 --> Loader Class Initialized
DEBUG - 2014-04-20 16:43:48 --> Helper loaded: form_helper
DEBUG - 2014-04-20 16:43:48 --> Helper loaded: url_helper
DEBUG - 2014-04-20 16:43:48 --> Helper loaded: html_helper
DEBUG - 2014-04-20 16:43:48 --> Database Driver Class Initialized
ERROR - 2014-04-20 16:43:48 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 16:43:48 --> Session Class Initialized
DEBUG - 2014-04-20 16:43:48 --> Helper loaded: string_helper
DEBUG - 2014-04-20 16:43:48 --> Session routines successfully run
DEBUG - 2014-04-20 16:43:48 --> Form Validation Class Initialized
DEBUG - 2014-04-20 16:43:48 --> Controller Class Initialized
DEBUG - 2014-04-20 16:43:48 --> Model Class Initialized
DEBUG - 2014-04-20 16:43:48 --> Model Class Initialized
DEBUG - 2014-04-20 16:43:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 16:43:48 --> Encrypt Class Initialized
INFO  - 2014-04-20 16:43:48 --> after session initialization................
INFO  - 2014-04-20 16:43:48 --> The Where query :::::::>>>i.id_internshipopening >7
INFO  - 2014-04-20 16:43:48 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` >7
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` desc
LIMIT 2
DEBUG - 2014-04-20 16:43:48 --> Final output sent to browser
DEBUG - 2014-04-20 16:43:48 --> Total execution time: 0.0337
DEBUG - 2014-04-20 16:45:12 --> Config Class Initialized
DEBUG - 2014-04-20 16:45:12 --> Hooks Class Initialized
DEBUG - 2014-04-20 16:45:12 --> Utf8 Class Initialized
DEBUG - 2014-04-20 16:45:12 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 16:45:12 --> URI Class Initialized
DEBUG - 2014-04-20 16:45:12 --> Router Class Initialized
DEBUG - 2014-04-20 16:45:12 --> Output Class Initialized
DEBUG - 2014-04-20 16:45:12 --> Security Class Initialized
DEBUG - 2014-04-20 16:45:12 --> Input Class Initialized
DEBUG - 2014-04-20 16:45:12 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 16:45:12 --> Language Class Initialized
DEBUG - 2014-04-20 16:45:12 --> Loader Class Initialized
DEBUG - 2014-04-20 16:45:12 --> Helper loaded: form_helper
DEBUG - 2014-04-20 16:45:12 --> Helper loaded: url_helper
DEBUG - 2014-04-20 16:45:12 --> Helper loaded: html_helper
DEBUG - 2014-04-20 16:45:12 --> Database Driver Class Initialized
ERROR - 2014-04-20 16:45:12 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 16:45:12 --> Session Class Initialized
DEBUG - 2014-04-20 16:45:12 --> Helper loaded: string_helper
DEBUG - 2014-04-20 16:45:12 --> Session routines successfully run
DEBUG - 2014-04-20 16:45:12 --> Form Validation Class Initialized
DEBUG - 2014-04-20 16:45:12 --> Controller Class Initialized
DEBUG - 2014-04-20 16:45:12 --> Model Class Initialized
DEBUG - 2014-04-20 16:45:12 --> Model Class Initialized
DEBUG - 2014-04-20 16:45:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 16:45:12 --> Encrypt Class Initialized
INFO  - 2014-04-20 16:45:12 --> after session initialization................
INFO  - 2014-04-20 16:45:12 --> after internships list has been clicked.................
INFO  - 2014-04-20 16:45:12 --> inside retrieving locations 
INFO  - 2014-04-20 16:45:12 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-20 16:45:12 --> inside retrieving internship firms 
INFO  - 2014-04-20 16:45:12 --> SELECT `intf`.`id_internshipfirm` as id, `intf`.`name` as name
FROM (`internship_firm` intf)
ORDER BY `intf`.`name`
INFO  - 2014-04-20 16:45:12 --> inside retrieving internship duration 
INFO  - 2014-04-20 16:45:12 --> SELECT `intd`.`id_internshipduration` as id, `intd`.`name` as name
FROM (`internship_duration` intd)
ORDER BY `intd`.`id_internshipduration`
INFO  - 2014-04-20 16:45:12 --> inside retrieving internship specialization 
INFO  - 2014-04-20 16:45:12 --> SELECT `ints`.`id_internshipspecialization` as id, `ints`.`name` as name
FROM (`internship_specialization` ints)
ORDER BY `ints`.`name`
INFO  - 2014-04-20 16:45:12 --> last intern id is 0
INFO  - 2014-04-20 16:45:12 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` <> 0
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` desc
LIMIT 14
INFO  - 2014-04-20 16:45:12 --> The session id is ========>eed9a92d813a1fb824ee267b08caa8cd and the member id is =======>33
DEBUG - 2014-04-20 16:45:12 --> File loaded: ../pharmaray-application/views/internships.php
DEBUG - 2014-04-20 16:45:12 --> Final output sent to browser
DEBUG - 2014-04-20 16:45:12 --> Total execution time: 0.0340
DEBUG - 2014-04-20 16:45:12 --> Config Class Initialized
DEBUG - 2014-04-20 16:45:12 --> Hooks Class Initialized
DEBUG - 2014-04-20 16:45:12 --> Utf8 Class Initialized
DEBUG - 2014-04-20 16:45:12 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 16:45:12 --> URI Class Initialized
DEBUG - 2014-04-20 16:45:12 --> Router Class Initialized
DEBUG - 2014-04-20 16:45:12 --> Output Class Initialized
DEBUG - 2014-04-20 16:45:12 --> Security Class Initialized
DEBUG - 2014-04-20 16:45:12 --> Input Class Initialized
DEBUG - 2014-04-20 16:45:12 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 16:45:12 --> Language Class Initialized
DEBUG - 2014-04-20 16:45:12 --> Loader Class Initialized
DEBUG - 2014-04-20 16:45:12 --> Helper loaded: form_helper
DEBUG - 2014-04-20 16:45:12 --> Helper loaded: url_helper
DEBUG - 2014-04-20 16:45:12 --> Helper loaded: html_helper
DEBUG - 2014-04-20 16:45:12 --> Database Driver Class Initialized
ERROR - 2014-04-20 16:45:12 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 16:45:12 --> Session Class Initialized
DEBUG - 2014-04-20 16:45:12 --> Helper loaded: string_helper
DEBUG - 2014-04-20 16:45:12 --> Session routines successfully run
DEBUG - 2014-04-20 16:45:12 --> Form Validation Class Initialized
DEBUG - 2014-04-20 16:45:12 --> Controller Class Initialized
DEBUG - 2014-04-20 16:45:12 --> Model Class Initialized
DEBUG - 2014-04-20 16:45:12 --> Model Class Initialized
DEBUG - 2014-04-20 16:45:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 16:45:12 --> Encrypt Class Initialized
INFO  - 2014-04-20 16:45:12 --> after session initialization................
INFO  - 2014-04-20 16:45:12 --> The Where query :::::::>>>i.id_internshipopening >7
INFO  - 2014-04-20 16:45:12 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` >7
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` desc
LIMIT 2
DEBUG - 2014-04-20 16:45:12 --> Final output sent to browser
DEBUG - 2014-04-20 16:45:12 --> Total execution time: 0.0386
DEBUG - 2014-04-20 16:45:15 --> Config Class Initialized
DEBUG - 2014-04-20 16:45:15 --> Hooks Class Initialized
DEBUG - 2014-04-20 16:45:15 --> Utf8 Class Initialized
DEBUG - 2014-04-20 16:45:15 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 16:45:15 --> URI Class Initialized
DEBUG - 2014-04-20 16:45:15 --> Router Class Initialized
DEBUG - 2014-04-20 16:45:15 --> Output Class Initialized
DEBUG - 2014-04-20 16:45:15 --> Security Class Initialized
DEBUG - 2014-04-20 16:45:15 --> Input Class Initialized
DEBUG - 2014-04-20 16:45:15 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 16:45:15 --> Language Class Initialized
DEBUG - 2014-04-20 16:45:15 --> Loader Class Initialized
DEBUG - 2014-04-20 16:45:15 --> Helper loaded: form_helper
DEBUG - 2014-04-20 16:45:15 --> Helper loaded: url_helper
DEBUG - 2014-04-20 16:45:15 --> Helper loaded: html_helper
DEBUG - 2014-04-20 16:45:15 --> Database Driver Class Initialized
ERROR - 2014-04-20 16:45:15 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 16:45:15 --> Session Class Initialized
DEBUG - 2014-04-20 16:45:15 --> Helper loaded: string_helper
DEBUG - 2014-04-20 16:45:15 --> Session routines successfully run
DEBUG - 2014-04-20 16:45:15 --> Form Validation Class Initialized
DEBUG - 2014-04-20 16:45:15 --> Controller Class Initialized
DEBUG - 2014-04-20 16:45:15 --> Model Class Initialized
DEBUG - 2014-04-20 16:45:15 --> Model Class Initialized
DEBUG - 2014-04-20 16:45:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 16:45:15 --> Encrypt Class Initialized
INFO  - 2014-04-20 16:45:15 --> after session initialization................
INFO  - 2014-04-20 16:45:15 --> after internships list has been clicked.................
INFO  - 2014-04-20 16:45:15 --> inside retrieving locations 
INFO  - 2014-04-20 16:45:15 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-20 16:45:15 --> inside retrieving internship firms 
INFO  - 2014-04-20 16:45:15 --> SELECT `intf`.`id_internshipfirm` as id, `intf`.`name` as name
FROM (`internship_firm` intf)
ORDER BY `intf`.`name`
INFO  - 2014-04-20 16:45:15 --> inside retrieving internship duration 
INFO  - 2014-04-20 16:45:15 --> SELECT `intd`.`id_internshipduration` as id, `intd`.`name` as name
FROM (`internship_duration` intd)
ORDER BY `intd`.`id_internshipduration`
INFO  - 2014-04-20 16:45:15 --> inside retrieving internship specialization 
INFO  - 2014-04-20 16:45:15 --> SELECT `ints`.`id_internshipspecialization` as id, `ints`.`name` as name
FROM (`internship_specialization` ints)
ORDER BY `ints`.`name`
INFO  - 2014-04-20 16:45:15 --> last intern id is 0
INFO  - 2014-04-20 16:45:15 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` <> 0
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` desc
LIMIT 14
INFO  - 2014-04-20 16:45:15 --> The session id is ========>eed9a92d813a1fb824ee267b08caa8cd and the member id is =======>33
DEBUG - 2014-04-20 16:45:15 --> File loaded: ../pharmaray-application/views/internships.php
DEBUG - 2014-04-20 16:45:15 --> Final output sent to browser
DEBUG - 2014-04-20 16:45:15 --> Total execution time: 0.0372
DEBUG - 2014-04-20 16:45:17 --> Config Class Initialized
DEBUG - 2014-04-20 16:45:17 --> Hooks Class Initialized
DEBUG - 2014-04-20 16:45:17 --> Utf8 Class Initialized
DEBUG - 2014-04-20 16:45:17 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 16:45:17 --> URI Class Initialized
DEBUG - 2014-04-20 16:45:17 --> Router Class Initialized
DEBUG - 2014-04-20 16:45:17 --> Output Class Initialized
DEBUG - 2014-04-20 16:45:17 --> Security Class Initialized
DEBUG - 2014-04-20 16:45:17 --> Input Class Initialized
DEBUG - 2014-04-20 16:45:17 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 16:45:17 --> Language Class Initialized
DEBUG - 2014-04-20 16:45:17 --> Loader Class Initialized
DEBUG - 2014-04-20 16:45:17 --> Helper loaded: form_helper
DEBUG - 2014-04-20 16:45:17 --> Helper loaded: url_helper
DEBUG - 2014-04-20 16:45:17 --> Helper loaded: html_helper
DEBUG - 2014-04-20 16:45:17 --> Database Driver Class Initialized
ERROR - 2014-04-20 16:45:17 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 16:45:17 --> Session Class Initialized
DEBUG - 2014-04-20 16:45:17 --> Helper loaded: string_helper
DEBUG - 2014-04-20 16:45:17 --> Session routines successfully run
DEBUG - 2014-04-20 16:45:17 --> Form Validation Class Initialized
DEBUG - 2014-04-20 16:45:17 --> Controller Class Initialized
DEBUG - 2014-04-20 16:45:17 --> Model Class Initialized
DEBUG - 2014-04-20 16:45:17 --> Model Class Initialized
DEBUG - 2014-04-20 16:45:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 16:45:17 --> Encrypt Class Initialized
INFO  - 2014-04-20 16:45:17 --> after session initialization................
INFO  - 2014-04-20 16:45:17 --> after internships list has been clicked.................
INFO  - 2014-04-20 16:45:17 --> inside retrieving locations 
INFO  - 2014-04-20 16:45:17 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-20 16:45:17 --> inside retrieving internship firms 
INFO  - 2014-04-20 16:45:17 --> SELECT `intf`.`id_internshipfirm` as id, `intf`.`name` as name
FROM (`internship_firm` intf)
ORDER BY `intf`.`name`
INFO  - 2014-04-20 16:45:17 --> inside retrieving internship duration 
INFO  - 2014-04-20 16:45:17 --> SELECT `intd`.`id_internshipduration` as id, `intd`.`name` as name
FROM (`internship_duration` intd)
ORDER BY `intd`.`id_internshipduration`
INFO  - 2014-04-20 16:45:17 --> inside retrieving internship specialization 
INFO  - 2014-04-20 16:45:17 --> SELECT `ints`.`id_internshipspecialization` as id, `ints`.`name` as name
FROM (`internship_specialization` ints)
ORDER BY `ints`.`name`
INFO  - 2014-04-20 16:45:17 --> last intern id is 0
INFO  - 2014-04-20 16:45:17 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` <> 0
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` desc
LIMIT 14
INFO  - 2014-04-20 16:45:17 --> The session id is ========>eed9a92d813a1fb824ee267b08caa8cd and the member id is =======>33
DEBUG - 2014-04-20 16:45:17 --> File loaded: ../pharmaray-application/views/internships.php
DEBUG - 2014-04-20 16:45:17 --> Final output sent to browser
DEBUG - 2014-04-20 16:45:17 --> Total execution time: 0.0401
DEBUG - 2014-04-20 16:45:23 --> Config Class Initialized
DEBUG - 2014-04-20 16:45:23 --> Hooks Class Initialized
DEBUG - 2014-04-20 16:45:23 --> Utf8 Class Initialized
DEBUG - 2014-04-20 16:45:23 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 16:45:23 --> URI Class Initialized
DEBUG - 2014-04-20 16:45:23 --> Router Class Initialized
DEBUG - 2014-04-20 16:45:23 --> Output Class Initialized
DEBUG - 2014-04-20 16:45:23 --> Security Class Initialized
DEBUG - 2014-04-20 16:45:23 --> Input Class Initialized
DEBUG - 2014-04-20 16:45:23 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 16:45:23 --> Language Class Initialized
DEBUG - 2014-04-20 16:45:23 --> Loader Class Initialized
DEBUG - 2014-04-20 16:45:23 --> Helper loaded: form_helper
DEBUG - 2014-04-20 16:45:23 --> Helper loaded: url_helper
DEBUG - 2014-04-20 16:45:23 --> Helper loaded: html_helper
DEBUG - 2014-04-20 16:45:23 --> Database Driver Class Initialized
ERROR - 2014-04-20 16:45:23 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 16:45:23 --> Session Class Initialized
DEBUG - 2014-04-20 16:45:23 --> Helper loaded: string_helper
DEBUG - 2014-04-20 16:45:23 --> Session routines successfully run
DEBUG - 2014-04-20 16:45:23 --> Form Validation Class Initialized
DEBUG - 2014-04-20 16:45:23 --> Controller Class Initialized
DEBUG - 2014-04-20 16:45:23 --> Model Class Initialized
DEBUG - 2014-04-20 16:45:23 --> Model Class Initialized
DEBUG - 2014-04-20 16:45:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 16:45:23 --> Encrypt Class Initialized
INFO  - 2014-04-20 16:45:23 --> after session initialization................
INFO  - 2014-04-20 16:45:23 --> The Where query :::::::>>>i.id_internshipopening >7
INFO  - 2014-04-20 16:45:23 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` >7
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` desc
LIMIT 2
DEBUG - 2014-04-20 16:45:23 --> Final output sent to browser
DEBUG - 2014-04-20 16:45:23 --> Total execution time: 0.0321
DEBUG - 2014-04-20 16:45:44 --> Config Class Initialized
DEBUG - 2014-04-20 16:45:44 --> Hooks Class Initialized
DEBUG - 2014-04-20 16:45:44 --> Utf8 Class Initialized
DEBUG - 2014-04-20 16:45:44 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 16:45:44 --> URI Class Initialized
DEBUG - 2014-04-20 16:45:44 --> Router Class Initialized
DEBUG - 2014-04-20 16:45:44 --> Output Class Initialized
DEBUG - 2014-04-20 16:45:44 --> Security Class Initialized
DEBUG - 2014-04-20 16:45:44 --> Input Class Initialized
DEBUG - 2014-04-20 16:45:44 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 16:45:44 --> Language Class Initialized
DEBUG - 2014-04-20 16:45:44 --> Loader Class Initialized
DEBUG - 2014-04-20 16:45:44 --> Helper loaded: form_helper
DEBUG - 2014-04-20 16:45:44 --> Helper loaded: url_helper
DEBUG - 2014-04-20 16:45:44 --> Helper loaded: html_helper
DEBUG - 2014-04-20 16:45:44 --> Database Driver Class Initialized
ERROR - 2014-04-20 16:45:44 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 16:45:44 --> Session Class Initialized
DEBUG - 2014-04-20 16:45:44 --> Helper loaded: string_helper
DEBUG - 2014-04-20 16:45:44 --> Session routines successfully run
DEBUG - 2014-04-20 16:45:44 --> Form Validation Class Initialized
DEBUG - 2014-04-20 16:45:44 --> Controller Class Initialized
DEBUG - 2014-04-20 16:45:44 --> Model Class Initialized
DEBUG - 2014-04-20 16:45:44 --> Model Class Initialized
DEBUG - 2014-04-20 16:45:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 16:45:44 --> Encrypt Class Initialized
INFO  - 2014-04-20 16:45:44 --> after session initialization................
INFO  - 2014-04-20 16:45:44 --> after internships list has been clicked.................
INFO  - 2014-04-20 16:45:44 --> inside retrieving locations 
INFO  - 2014-04-20 16:45:44 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-20 16:45:44 --> inside retrieving internship firms 
INFO  - 2014-04-20 16:45:44 --> SELECT `intf`.`id_internshipfirm` as id, `intf`.`name` as name
FROM (`internship_firm` intf)
ORDER BY `intf`.`name`
INFO  - 2014-04-20 16:45:44 --> inside retrieving internship duration 
INFO  - 2014-04-20 16:45:44 --> SELECT `intd`.`id_internshipduration` as id, `intd`.`name` as name
FROM (`internship_duration` intd)
ORDER BY `intd`.`id_internshipduration`
INFO  - 2014-04-20 16:45:44 --> inside retrieving internship specialization 
INFO  - 2014-04-20 16:45:44 --> SELECT `ints`.`id_internshipspecialization` as id, `ints`.`name` as name
FROM (`internship_specialization` ints)
ORDER BY `ints`.`name`
INFO  - 2014-04-20 16:45:44 --> last intern id is 0
INFO  - 2014-04-20 16:45:44 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` <> 0
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` desc
LIMIT 14
INFO  - 2014-04-20 16:45:44 --> The session id is ========>eed9a92d813a1fb824ee267b08caa8cd and the member id is =======>33
DEBUG - 2014-04-20 16:45:44 --> File loaded: ../pharmaray-application/views/internships.php
DEBUG - 2014-04-20 16:45:44 --> Final output sent to browser
DEBUG - 2014-04-20 16:45:44 --> Total execution time: 0.0350
DEBUG - 2014-04-20 16:45:49 --> Config Class Initialized
DEBUG - 2014-04-20 16:45:49 --> Hooks Class Initialized
DEBUG - 2014-04-20 16:45:49 --> Utf8 Class Initialized
DEBUG - 2014-04-20 16:45:49 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 16:45:49 --> URI Class Initialized
DEBUG - 2014-04-20 16:45:49 --> Router Class Initialized
DEBUG - 2014-04-20 16:45:49 --> Output Class Initialized
DEBUG - 2014-04-20 16:45:49 --> Security Class Initialized
DEBUG - 2014-04-20 16:45:49 --> Input Class Initialized
DEBUG - 2014-04-20 16:45:49 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 16:45:49 --> Language Class Initialized
DEBUG - 2014-04-20 16:45:49 --> Loader Class Initialized
DEBUG - 2014-04-20 16:45:49 --> Helper loaded: form_helper
DEBUG - 2014-04-20 16:45:49 --> Helper loaded: url_helper
DEBUG - 2014-04-20 16:45:49 --> Helper loaded: html_helper
DEBUG - 2014-04-20 16:45:49 --> Database Driver Class Initialized
ERROR - 2014-04-20 16:45:49 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 16:45:49 --> Session Class Initialized
DEBUG - 2014-04-20 16:45:49 --> Helper loaded: string_helper
DEBUG - 2014-04-20 16:45:49 --> Session routines successfully run
DEBUG - 2014-04-20 16:45:49 --> Form Validation Class Initialized
DEBUG - 2014-04-20 16:45:49 --> Controller Class Initialized
DEBUG - 2014-04-20 16:45:49 --> Model Class Initialized
DEBUG - 2014-04-20 16:45:49 --> Model Class Initialized
DEBUG - 2014-04-20 16:45:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 16:45:49 --> Encrypt Class Initialized
INFO  - 2014-04-20 16:45:49 --> after session initialization................
INFO  - 2014-04-20 16:45:49 --> The Where query :::::::>>>i.id_internshipopening >7
INFO  - 2014-04-20 16:45:49 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` >7
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` desc
LIMIT 2
DEBUG - 2014-04-20 16:45:49 --> Final output sent to browser
DEBUG - 2014-04-20 16:45:49 --> Total execution time: 0.0310
DEBUG - 2014-04-20 16:46:41 --> Config Class Initialized
DEBUG - 2014-04-20 16:46:41 --> Hooks Class Initialized
DEBUG - 2014-04-20 16:46:41 --> Utf8 Class Initialized
DEBUG - 2014-04-20 16:46:41 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 16:46:41 --> URI Class Initialized
DEBUG - 2014-04-20 16:46:41 --> Router Class Initialized
DEBUG - 2014-04-20 16:46:41 --> Output Class Initialized
DEBUG - 2014-04-20 16:46:41 --> Security Class Initialized
DEBUG - 2014-04-20 16:46:41 --> Input Class Initialized
DEBUG - 2014-04-20 16:46:41 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 16:46:41 --> Language Class Initialized
DEBUG - 2014-04-20 16:46:41 --> Loader Class Initialized
DEBUG - 2014-04-20 16:46:41 --> Helper loaded: form_helper
DEBUG - 2014-04-20 16:46:41 --> Helper loaded: url_helper
DEBUG - 2014-04-20 16:46:41 --> Helper loaded: html_helper
DEBUG - 2014-04-20 16:46:41 --> Database Driver Class Initialized
ERROR - 2014-04-20 16:46:41 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 16:46:41 --> Session Class Initialized
DEBUG - 2014-04-20 16:46:41 --> Helper loaded: string_helper
DEBUG - 2014-04-20 16:46:41 --> Session routines successfully run
DEBUG - 2014-04-20 16:46:41 --> Form Validation Class Initialized
DEBUG - 2014-04-20 16:46:41 --> Controller Class Initialized
DEBUG - 2014-04-20 16:46:41 --> Model Class Initialized
DEBUG - 2014-04-20 16:46:41 --> Model Class Initialized
DEBUG - 2014-04-20 16:46:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 16:46:41 --> Encrypt Class Initialized
INFO  - 2014-04-20 16:46:41 --> after session initialization................
INFO  - 2014-04-20 16:46:41 --> after internships list has been clicked.................
INFO  - 2014-04-20 16:46:41 --> inside retrieving locations 
INFO  - 2014-04-20 16:46:41 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-20 16:46:41 --> inside retrieving internship firms 
INFO  - 2014-04-20 16:46:41 --> SELECT `intf`.`id_internshipfirm` as id, `intf`.`name` as name
FROM (`internship_firm` intf)
ORDER BY `intf`.`name`
INFO  - 2014-04-20 16:46:41 --> inside retrieving internship duration 
INFO  - 2014-04-20 16:46:41 --> SELECT `intd`.`id_internshipduration` as id, `intd`.`name` as name
FROM (`internship_duration` intd)
ORDER BY `intd`.`id_internshipduration`
INFO  - 2014-04-20 16:46:41 --> inside retrieving internship specialization 
INFO  - 2014-04-20 16:46:41 --> SELECT `ints`.`id_internshipspecialization` as id, `ints`.`name` as name
FROM (`internship_specialization` ints)
ORDER BY `ints`.`name`
INFO  - 2014-04-20 16:46:41 --> last intern id is 0
INFO  - 2014-04-20 16:46:41 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` <> 0
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` desc
LIMIT 14
INFO  - 2014-04-20 16:46:41 --> The session id is ========>eed9a92d813a1fb824ee267b08caa8cd and the member id is =======>33
DEBUG - 2014-04-20 16:46:41 --> File loaded: ../pharmaray-application/views/internships.php
DEBUG - 2014-04-20 16:46:41 --> Final output sent to browser
DEBUG - 2014-04-20 16:46:41 --> Total execution time: 0.0336
DEBUG - 2014-04-20 16:47:06 --> Config Class Initialized
DEBUG - 2014-04-20 16:47:06 --> Hooks Class Initialized
DEBUG - 2014-04-20 16:47:06 --> Utf8 Class Initialized
DEBUG - 2014-04-20 16:47:06 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 16:47:06 --> URI Class Initialized
DEBUG - 2014-04-20 16:47:06 --> Router Class Initialized
DEBUG - 2014-04-20 16:47:06 --> Output Class Initialized
DEBUG - 2014-04-20 16:47:06 --> Security Class Initialized
DEBUG - 2014-04-20 16:47:06 --> Input Class Initialized
DEBUG - 2014-04-20 16:47:06 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 16:47:06 --> Language Class Initialized
DEBUG - 2014-04-20 16:47:06 --> Loader Class Initialized
DEBUG - 2014-04-20 16:47:06 --> Helper loaded: form_helper
DEBUG - 2014-04-20 16:47:06 --> Helper loaded: url_helper
DEBUG - 2014-04-20 16:47:06 --> Helper loaded: html_helper
DEBUG - 2014-04-20 16:47:06 --> Database Driver Class Initialized
ERROR - 2014-04-20 16:47:06 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 16:47:06 --> Session Class Initialized
DEBUG - 2014-04-20 16:47:06 --> Helper loaded: string_helper
DEBUG - 2014-04-20 16:47:06 --> Session routines successfully run
DEBUG - 2014-04-20 16:47:06 --> Form Validation Class Initialized
DEBUG - 2014-04-20 16:47:06 --> Controller Class Initialized
DEBUG - 2014-04-20 16:47:06 --> Model Class Initialized
DEBUG - 2014-04-20 16:47:06 --> Model Class Initialized
DEBUG - 2014-04-20 16:47:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 16:47:06 --> Encrypt Class Initialized
INFO  - 2014-04-20 16:47:06 --> after session initialization................
INFO  - 2014-04-20 16:47:06 --> The Where query :::::::>>>i.id_internshipopening >7
INFO  - 2014-04-20 16:47:06 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` >7
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` desc
LIMIT 2
DEBUG - 2014-04-20 16:47:06 --> Final output sent to browser
DEBUG - 2014-04-20 16:47:06 --> Total execution time: 0.0331
DEBUG - 2014-04-20 16:55:55 --> Config Class Initialized
DEBUG - 2014-04-20 16:55:55 --> Hooks Class Initialized
DEBUG - 2014-04-20 16:55:55 --> Utf8 Class Initialized
DEBUG - 2014-04-20 16:55:55 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 16:55:55 --> URI Class Initialized
DEBUG - 2014-04-20 16:55:55 --> Router Class Initialized
DEBUG - 2014-04-20 16:55:55 --> Output Class Initialized
DEBUG - 2014-04-20 16:55:55 --> Security Class Initialized
DEBUG - 2014-04-20 16:55:55 --> Input Class Initialized
DEBUG - 2014-04-20 16:55:55 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 16:55:55 --> Language Class Initialized
DEBUG - 2014-04-20 16:55:55 --> Loader Class Initialized
DEBUG - 2014-04-20 16:55:55 --> Helper loaded: form_helper
DEBUG - 2014-04-20 16:55:55 --> Helper loaded: url_helper
DEBUG - 2014-04-20 16:55:55 --> Helper loaded: html_helper
DEBUG - 2014-04-20 16:55:55 --> Database Driver Class Initialized
ERROR - 2014-04-20 16:55:55 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 16:55:55 --> Session Class Initialized
DEBUG - 2014-04-20 16:55:55 --> Helper loaded: string_helper
DEBUG - 2014-04-20 16:55:55 --> Session routines successfully run
DEBUG - 2014-04-20 16:55:55 --> Form Validation Class Initialized
DEBUG - 2014-04-20 16:55:55 --> Controller Class Initialized
DEBUG - 2014-04-20 16:55:55 --> Model Class Initialized
DEBUG - 2014-04-20 16:55:55 --> Model Class Initialized
DEBUG - 2014-04-20 16:55:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 16:55:55 --> Encrypt Class Initialized
INFO  - 2014-04-20 16:55:55 --> after session initialization................
INFO  - 2014-04-20 16:55:55 --> after internships list has been clicked.................
INFO  - 2014-04-20 16:55:55 --> inside retrieving locations 
INFO  - 2014-04-20 16:55:55 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-20 16:55:55 --> inside retrieving internship firms 
INFO  - 2014-04-20 16:55:55 --> SELECT `intf`.`id_internshipfirm` as id, `intf`.`name` as name
FROM (`internship_firm` intf)
ORDER BY `intf`.`name`
INFO  - 2014-04-20 16:55:55 --> inside retrieving internship duration 
INFO  - 2014-04-20 16:55:55 --> SELECT `intd`.`id_internshipduration` as id, `intd`.`name` as name
FROM (`internship_duration` intd)
ORDER BY `intd`.`id_internshipduration`
INFO  - 2014-04-20 16:55:55 --> inside retrieving internship specialization 
INFO  - 2014-04-20 16:55:55 --> SELECT `ints`.`id_internshipspecialization` as id, `ints`.`name` as name
FROM (`internship_specialization` ints)
ORDER BY `ints`.`name`
INFO  - 2014-04-20 16:55:55 --> last intern id is 0
INFO  - 2014-04-20 16:55:55 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` <> 0
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` desc
LIMIT 22
INFO  - 2014-04-20 16:55:55 --> The session id is ========>201fd2be50ffdc522ca2096cf72747ef and the member id is =======>33
DEBUG - 2014-04-20 16:55:55 --> File loaded: ../pharmaray-application/views/internships.php
DEBUG - 2014-04-20 16:55:55 --> Final output sent to browser
DEBUG - 2014-04-20 16:55:55 --> Total execution time: 0.0390
DEBUG - 2014-04-20 16:56:31 --> Config Class Initialized
DEBUG - 2014-04-20 16:56:31 --> Hooks Class Initialized
DEBUG - 2014-04-20 16:56:31 --> Utf8 Class Initialized
DEBUG - 2014-04-20 16:56:31 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 16:56:31 --> URI Class Initialized
DEBUG - 2014-04-20 16:56:31 --> Router Class Initialized
DEBUG - 2014-04-20 16:56:31 --> Output Class Initialized
DEBUG - 2014-04-20 16:56:31 --> Security Class Initialized
DEBUG - 2014-04-20 16:56:31 --> Input Class Initialized
DEBUG - 2014-04-20 16:56:31 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 16:56:31 --> Language Class Initialized
DEBUG - 2014-04-20 16:56:31 --> Loader Class Initialized
DEBUG - 2014-04-20 16:56:31 --> Helper loaded: form_helper
DEBUG - 2014-04-20 16:56:31 --> Helper loaded: url_helper
DEBUG - 2014-04-20 16:56:31 --> Helper loaded: html_helper
DEBUG - 2014-04-20 16:56:31 --> Database Driver Class Initialized
ERROR - 2014-04-20 16:56:31 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 16:56:31 --> Session Class Initialized
DEBUG - 2014-04-20 16:56:31 --> Helper loaded: string_helper
DEBUG - 2014-04-20 16:56:31 --> Session routines successfully run
DEBUG - 2014-04-20 16:56:31 --> Form Validation Class Initialized
DEBUG - 2014-04-20 16:56:31 --> Controller Class Initialized
DEBUG - 2014-04-20 16:56:31 --> Model Class Initialized
DEBUG - 2014-04-20 16:56:31 --> Model Class Initialized
DEBUG - 2014-04-20 16:56:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 16:56:31 --> Encrypt Class Initialized
INFO  - 2014-04-20 16:56:31 --> after session initialization................
INFO  - 2014-04-20 16:56:31 --> The Where query :::::::>>>i.id_internshipopening >1
INFO  - 2014-04-20 16:56:31 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` >1
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` asc
LIMIT 2
DEBUG - 2014-04-20 16:56:31 --> Final output sent to browser
DEBUG - 2014-04-20 16:56:31 --> Total execution time: 0.0341
DEBUG - 2014-04-20 16:56:34 --> Config Class Initialized
DEBUG - 2014-04-20 16:56:34 --> Hooks Class Initialized
DEBUG - 2014-04-20 16:56:34 --> Utf8 Class Initialized
DEBUG - 2014-04-20 16:56:34 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 16:56:34 --> URI Class Initialized
DEBUG - 2014-04-20 16:56:34 --> Router Class Initialized
DEBUG - 2014-04-20 16:56:34 --> Output Class Initialized
DEBUG - 2014-04-20 16:56:34 --> Security Class Initialized
DEBUG - 2014-04-20 16:56:34 --> Input Class Initialized
DEBUG - 2014-04-20 16:56:34 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 16:56:34 --> Language Class Initialized
DEBUG - 2014-04-20 16:56:34 --> Loader Class Initialized
DEBUG - 2014-04-20 16:56:34 --> Helper loaded: form_helper
DEBUG - 2014-04-20 16:56:34 --> Helper loaded: url_helper
DEBUG - 2014-04-20 16:56:34 --> Helper loaded: html_helper
DEBUG - 2014-04-20 16:56:34 --> Database Driver Class Initialized
ERROR - 2014-04-20 16:56:34 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 16:56:34 --> Session Class Initialized
DEBUG - 2014-04-20 16:56:34 --> Helper loaded: string_helper
DEBUG - 2014-04-20 16:56:34 --> Session routines successfully run
DEBUG - 2014-04-20 16:56:34 --> Form Validation Class Initialized
DEBUG - 2014-04-20 16:56:34 --> Controller Class Initialized
DEBUG - 2014-04-20 16:56:34 --> Model Class Initialized
DEBUG - 2014-04-20 16:56:34 --> Model Class Initialized
DEBUG - 2014-04-20 16:56:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 16:56:34 --> Encrypt Class Initialized
INFO  - 2014-04-20 16:56:34 --> after session initialization................
INFO  - 2014-04-20 16:56:34 --> after internships list has been clicked.................
INFO  - 2014-04-20 16:56:34 --> inside retrieving locations 
INFO  - 2014-04-20 16:56:34 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-20 16:56:34 --> inside retrieving internship firms 
INFO  - 2014-04-20 16:56:34 --> SELECT `intf`.`id_internshipfirm` as id, `intf`.`name` as name
FROM (`internship_firm` intf)
ORDER BY `intf`.`name`
INFO  - 2014-04-20 16:56:34 --> inside retrieving internship duration 
INFO  - 2014-04-20 16:56:34 --> SELECT `intd`.`id_internshipduration` as id, `intd`.`name` as name
FROM (`internship_duration` intd)
ORDER BY `intd`.`id_internshipduration`
INFO  - 2014-04-20 16:56:34 --> inside retrieving internship specialization 
INFO  - 2014-04-20 16:56:34 --> SELECT `ints`.`id_internshipspecialization` as id, `ints`.`name` as name
FROM (`internship_specialization` ints)
ORDER BY `ints`.`name`
INFO  - 2014-04-20 16:56:34 --> last intern id is 0
INFO  - 2014-04-20 16:56:34 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` <> 0
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` asc
LIMIT 22
INFO  - 2014-04-20 16:56:34 --> The session id is ========>201fd2be50ffdc522ca2096cf72747ef and the member id is =======>33
DEBUG - 2014-04-20 16:56:34 --> File loaded: ../pharmaray-application/views/internships.php
DEBUG - 2014-04-20 16:56:34 --> Final output sent to browser
DEBUG - 2014-04-20 16:56:34 --> Total execution time: 0.0393
DEBUG - 2014-04-20 16:56:46 --> Config Class Initialized
DEBUG - 2014-04-20 16:56:46 --> Hooks Class Initialized
DEBUG - 2014-04-20 16:56:46 --> Utf8 Class Initialized
DEBUG - 2014-04-20 16:56:46 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 16:56:46 --> URI Class Initialized
DEBUG - 2014-04-20 16:56:46 --> Router Class Initialized
DEBUG - 2014-04-20 16:56:46 --> Output Class Initialized
DEBUG - 2014-04-20 16:56:46 --> Security Class Initialized
DEBUG - 2014-04-20 16:56:46 --> Input Class Initialized
DEBUG - 2014-04-20 16:56:46 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 16:56:46 --> Language Class Initialized
DEBUG - 2014-04-20 16:56:46 --> Loader Class Initialized
DEBUG - 2014-04-20 16:56:46 --> Helper loaded: form_helper
DEBUG - 2014-04-20 16:56:46 --> Helper loaded: url_helper
DEBUG - 2014-04-20 16:56:46 --> Helper loaded: html_helper
DEBUG - 2014-04-20 16:56:46 --> Database Driver Class Initialized
ERROR - 2014-04-20 16:56:46 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 16:56:46 --> Session Class Initialized
DEBUG - 2014-04-20 16:56:46 --> Helper loaded: string_helper
DEBUG - 2014-04-20 16:56:46 --> Session routines successfully run
DEBUG - 2014-04-20 16:56:46 --> Form Validation Class Initialized
DEBUG - 2014-04-20 16:56:46 --> Controller Class Initialized
DEBUG - 2014-04-20 16:56:46 --> Model Class Initialized
DEBUG - 2014-04-20 16:56:46 --> Model Class Initialized
DEBUG - 2014-04-20 16:56:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 16:56:46 --> Encrypt Class Initialized
INFO  - 2014-04-20 16:56:46 --> after session initialization................
INFO  - 2014-04-20 16:56:46 --> The Where query :::::::>>>i.id_internshipopening >22
INFO  - 2014-04-20 16:56:46 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` >22
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` asc
LIMIT 2
DEBUG - 2014-04-20 16:56:46 --> Final output sent to browser
DEBUG - 2014-04-20 16:56:46 --> Total execution time: 0.0347
DEBUG - 2014-04-20 16:57:39 --> Config Class Initialized
DEBUG - 2014-04-20 16:57:39 --> Hooks Class Initialized
DEBUG - 2014-04-20 16:57:39 --> Utf8 Class Initialized
DEBUG - 2014-04-20 16:57:39 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 16:57:39 --> URI Class Initialized
DEBUG - 2014-04-20 16:57:39 --> Router Class Initialized
DEBUG - 2014-04-20 16:57:39 --> Output Class Initialized
DEBUG - 2014-04-20 16:57:39 --> Security Class Initialized
DEBUG - 2014-04-20 16:57:39 --> Input Class Initialized
DEBUG - 2014-04-20 16:57:39 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 16:57:39 --> Language Class Initialized
DEBUG - 2014-04-20 16:57:39 --> Loader Class Initialized
DEBUG - 2014-04-20 16:57:39 --> Helper loaded: form_helper
DEBUG - 2014-04-20 16:57:39 --> Helper loaded: url_helper
DEBUG - 2014-04-20 16:57:39 --> Helper loaded: html_helper
DEBUG - 2014-04-20 16:57:39 --> Database Driver Class Initialized
ERROR - 2014-04-20 16:57:39 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 16:57:39 --> Session Class Initialized
DEBUG - 2014-04-20 16:57:39 --> Helper loaded: string_helper
DEBUG - 2014-04-20 16:57:39 --> Session routines successfully run
DEBUG - 2014-04-20 16:57:39 --> Form Validation Class Initialized
DEBUG - 2014-04-20 16:57:39 --> Controller Class Initialized
DEBUG - 2014-04-20 16:57:39 --> Model Class Initialized
DEBUG - 2014-04-20 16:57:39 --> Model Class Initialized
DEBUG - 2014-04-20 16:57:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 16:57:39 --> Encrypt Class Initialized
INFO  - 2014-04-20 16:57:39 --> after session initialization................
INFO  - 2014-04-20 16:57:39 --> after internships list has been clicked.................
INFO  - 2014-04-20 16:57:39 --> inside retrieving locations 
INFO  - 2014-04-20 16:57:39 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-20 16:57:39 --> inside retrieving internship firms 
INFO  - 2014-04-20 16:57:39 --> SELECT `intf`.`id_internshipfirm` as id, `intf`.`name` as name
FROM (`internship_firm` intf)
ORDER BY `intf`.`name`
INFO  - 2014-04-20 16:57:39 --> inside retrieving internship duration 
INFO  - 2014-04-20 16:57:39 --> SELECT `intd`.`id_internshipduration` as id, `intd`.`name` as name
FROM (`internship_duration` intd)
ORDER BY `intd`.`id_internshipduration`
INFO  - 2014-04-20 16:57:39 --> inside retrieving internship specialization 
INFO  - 2014-04-20 16:57:39 --> SELECT `ints`.`id_internshipspecialization` as id, `ints`.`name` as name
FROM (`internship_specialization` ints)
ORDER BY `ints`.`name`
INFO  - 2014-04-20 16:57:39 --> last intern id is 0
INFO  - 2014-04-20 16:57:39 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` <> 0
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` asc
LIMIT 10
INFO  - 2014-04-20 16:57:39 --> The session id is ========>201fd2be50ffdc522ca2096cf72747ef and the member id is =======>33
DEBUG - 2014-04-20 16:57:39 --> File loaded: ../pharmaray-application/views/internships.php
DEBUG - 2014-04-20 16:57:39 --> Final output sent to browser
DEBUG - 2014-04-20 16:57:39 --> Total execution time: 0.0419
DEBUG - 2014-04-20 16:57:45 --> Config Class Initialized
DEBUG - 2014-04-20 16:57:45 --> Hooks Class Initialized
DEBUG - 2014-04-20 16:57:45 --> Utf8 Class Initialized
DEBUG - 2014-04-20 16:57:45 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 16:57:45 --> URI Class Initialized
DEBUG - 2014-04-20 16:57:45 --> Router Class Initialized
DEBUG - 2014-04-20 16:57:45 --> Output Class Initialized
DEBUG - 2014-04-20 16:57:45 --> Security Class Initialized
DEBUG - 2014-04-20 16:57:45 --> Input Class Initialized
DEBUG - 2014-04-20 16:57:45 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 16:57:45 --> Language Class Initialized
DEBUG - 2014-04-20 16:57:45 --> Loader Class Initialized
DEBUG - 2014-04-20 16:57:45 --> Helper loaded: form_helper
DEBUG - 2014-04-20 16:57:45 --> Helper loaded: url_helper
DEBUG - 2014-04-20 16:57:45 --> Helper loaded: html_helper
DEBUG - 2014-04-20 16:57:45 --> Database Driver Class Initialized
ERROR - 2014-04-20 16:57:45 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 16:57:45 --> Session Class Initialized
DEBUG - 2014-04-20 16:57:45 --> Helper loaded: string_helper
DEBUG - 2014-04-20 16:57:45 --> Session routines successfully run
DEBUG - 2014-04-20 16:57:45 --> Form Validation Class Initialized
DEBUG - 2014-04-20 16:57:45 --> Controller Class Initialized
DEBUG - 2014-04-20 16:57:45 --> Model Class Initialized
DEBUG - 2014-04-20 16:57:45 --> Model Class Initialized
DEBUG - 2014-04-20 16:57:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 16:57:45 --> Encrypt Class Initialized
INFO  - 2014-04-20 16:57:45 --> after session initialization................
INFO  - 2014-04-20 16:57:45 --> The Where query :::::::>>>i.id_internshipopening >11
INFO  - 2014-04-20 16:57:45 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` >11
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` asc
LIMIT 2
DEBUG - 2014-04-20 16:57:45 --> Final output sent to browser
DEBUG - 2014-04-20 16:57:45 --> Total execution time: 0.0284
DEBUG - 2014-04-20 16:59:03 --> Config Class Initialized
DEBUG - 2014-04-20 16:59:03 --> Hooks Class Initialized
DEBUG - 2014-04-20 16:59:03 --> Utf8 Class Initialized
DEBUG - 2014-04-20 16:59:03 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 16:59:03 --> URI Class Initialized
DEBUG - 2014-04-20 16:59:03 --> Router Class Initialized
DEBUG - 2014-04-20 16:59:03 --> Output Class Initialized
DEBUG - 2014-04-20 16:59:03 --> Security Class Initialized
DEBUG - 2014-04-20 16:59:03 --> Input Class Initialized
DEBUG - 2014-04-20 16:59:03 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 16:59:03 --> Language Class Initialized
DEBUG - 2014-04-20 16:59:03 --> Loader Class Initialized
DEBUG - 2014-04-20 16:59:03 --> Helper loaded: form_helper
DEBUG - 2014-04-20 16:59:03 --> Helper loaded: url_helper
DEBUG - 2014-04-20 16:59:03 --> Helper loaded: html_helper
DEBUG - 2014-04-20 16:59:03 --> Database Driver Class Initialized
ERROR - 2014-04-20 16:59:03 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 16:59:03 --> Session Class Initialized
DEBUG - 2014-04-20 16:59:03 --> Helper loaded: string_helper
DEBUG - 2014-04-20 16:59:03 --> Session routines successfully run
DEBUG - 2014-04-20 16:59:03 --> Form Validation Class Initialized
DEBUG - 2014-04-20 16:59:03 --> Controller Class Initialized
DEBUG - 2014-04-20 16:59:03 --> Model Class Initialized
DEBUG - 2014-04-20 16:59:03 --> Model Class Initialized
DEBUG - 2014-04-20 16:59:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 16:59:03 --> Encrypt Class Initialized
INFO  - 2014-04-20 16:59:03 --> after session initialization................
INFO  - 2014-04-20 16:59:03 --> after internships list has been clicked.................
INFO  - 2014-04-20 16:59:03 --> inside retrieving locations 
INFO  - 2014-04-20 16:59:03 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-20 16:59:03 --> inside retrieving internship firms 
INFO  - 2014-04-20 16:59:03 --> SELECT `intf`.`id_internshipfirm` as id, `intf`.`name` as name
FROM (`internship_firm` intf)
ORDER BY `intf`.`name`
INFO  - 2014-04-20 16:59:03 --> inside retrieving internship duration 
INFO  - 2014-04-20 16:59:03 --> SELECT `intd`.`id_internshipduration` as id, `intd`.`name` as name
FROM (`internship_duration` intd)
ORDER BY `intd`.`id_internshipduration`
INFO  - 2014-04-20 16:59:03 --> inside retrieving internship specialization 
INFO  - 2014-04-20 16:59:03 --> SELECT `ints`.`id_internshipspecialization` as id, `ints`.`name` as name
FROM (`internship_specialization` ints)
ORDER BY `ints`.`name`
INFO  - 2014-04-20 16:59:03 --> last intern id is 0
INFO  - 2014-04-20 16:59:03 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` <> 0
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` asc
LIMIT 10
INFO  - 2014-04-20 16:59:03 --> The session id is ========>201fd2be50ffdc522ca2096cf72747ef and the member id is =======>33
DEBUG - 2014-04-20 16:59:03 --> File loaded: ../pharmaray-application/views/internships.php
DEBUG - 2014-04-20 16:59:03 --> Final output sent to browser
DEBUG - 2014-04-20 16:59:03 --> Total execution time: 0.0427
DEBUG - 2014-04-20 16:59:04 --> Config Class Initialized
DEBUG - 2014-04-20 16:59:04 --> Hooks Class Initialized
DEBUG - 2014-04-20 16:59:04 --> Utf8 Class Initialized
DEBUG - 2014-04-20 16:59:04 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 16:59:04 --> URI Class Initialized
DEBUG - 2014-04-20 16:59:04 --> Router Class Initialized
DEBUG - 2014-04-20 16:59:04 --> Output Class Initialized
DEBUG - 2014-04-20 16:59:04 --> Security Class Initialized
DEBUG - 2014-04-20 16:59:04 --> Input Class Initialized
DEBUG - 2014-04-20 16:59:04 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 16:59:04 --> Language Class Initialized
DEBUG - 2014-04-20 16:59:04 --> Loader Class Initialized
DEBUG - 2014-04-20 16:59:04 --> Helper loaded: form_helper
DEBUG - 2014-04-20 16:59:04 --> Helper loaded: url_helper
DEBUG - 2014-04-20 16:59:04 --> Helper loaded: html_helper
DEBUG - 2014-04-20 16:59:04 --> Database Driver Class Initialized
ERROR - 2014-04-20 16:59:04 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 16:59:04 --> Session Class Initialized
DEBUG - 2014-04-20 16:59:04 --> Helper loaded: string_helper
DEBUG - 2014-04-20 16:59:04 --> Session routines successfully run
DEBUG - 2014-04-20 16:59:04 --> Form Validation Class Initialized
DEBUG - 2014-04-20 16:59:04 --> Controller Class Initialized
DEBUG - 2014-04-20 16:59:04 --> Model Class Initialized
DEBUG - 2014-04-20 16:59:04 --> Model Class Initialized
DEBUG - 2014-04-20 16:59:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 16:59:04 --> Encrypt Class Initialized
INFO  - 2014-04-20 16:59:04 --> after session initialization................
INFO  - 2014-04-20 16:59:04 --> after internships list has been clicked.................
INFO  - 2014-04-20 16:59:04 --> inside retrieving locations 
INFO  - 2014-04-20 16:59:04 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-20 16:59:04 --> inside retrieving internship firms 
INFO  - 2014-04-20 16:59:04 --> SELECT `intf`.`id_internshipfirm` as id, `intf`.`name` as name
FROM (`internship_firm` intf)
ORDER BY `intf`.`name`
INFO  - 2014-04-20 16:59:04 --> inside retrieving internship duration 
INFO  - 2014-04-20 16:59:04 --> SELECT `intd`.`id_internshipduration` as id, `intd`.`name` as name
FROM (`internship_duration` intd)
ORDER BY `intd`.`id_internshipduration`
INFO  - 2014-04-20 16:59:04 --> inside retrieving internship specialization 
INFO  - 2014-04-20 16:59:04 --> SELECT `ints`.`id_internshipspecialization` as id, `ints`.`name` as name
FROM (`internship_specialization` ints)
ORDER BY `ints`.`name`
INFO  - 2014-04-20 16:59:04 --> last intern id is 0
INFO  - 2014-04-20 16:59:04 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` <> 0
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` asc
LIMIT 10
INFO  - 2014-04-20 16:59:04 --> The session id is ========>201fd2be50ffdc522ca2096cf72747ef and the member id is =======>33
DEBUG - 2014-04-20 16:59:04 --> File loaded: ../pharmaray-application/views/internships.php
DEBUG - 2014-04-20 16:59:04 --> Final output sent to browser
DEBUG - 2014-04-20 16:59:04 --> Total execution time: 0.0378
DEBUG - 2014-04-20 16:59:05 --> Config Class Initialized
DEBUG - 2014-04-20 16:59:05 --> Hooks Class Initialized
DEBUG - 2014-04-20 16:59:05 --> Utf8 Class Initialized
DEBUG - 2014-04-20 16:59:05 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 16:59:05 --> URI Class Initialized
DEBUG - 2014-04-20 16:59:05 --> Router Class Initialized
DEBUG - 2014-04-20 16:59:05 --> Output Class Initialized
DEBUG - 2014-04-20 16:59:05 --> Security Class Initialized
DEBUG - 2014-04-20 16:59:05 --> Input Class Initialized
DEBUG - 2014-04-20 16:59:05 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 16:59:05 --> Language Class Initialized
DEBUG - 2014-04-20 16:59:05 --> Loader Class Initialized
DEBUG - 2014-04-20 16:59:05 --> Helper loaded: form_helper
DEBUG - 2014-04-20 16:59:05 --> Helper loaded: url_helper
DEBUG - 2014-04-20 16:59:05 --> Helper loaded: html_helper
DEBUG - 2014-04-20 16:59:05 --> Database Driver Class Initialized
ERROR - 2014-04-20 16:59:05 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 16:59:05 --> Session Class Initialized
DEBUG - 2014-04-20 16:59:05 --> Helper loaded: string_helper
DEBUG - 2014-04-20 16:59:05 --> Session routines successfully run
DEBUG - 2014-04-20 16:59:05 --> Form Validation Class Initialized
DEBUG - 2014-04-20 16:59:05 --> Controller Class Initialized
DEBUG - 2014-04-20 16:59:05 --> Model Class Initialized
DEBUG - 2014-04-20 16:59:05 --> Model Class Initialized
DEBUG - 2014-04-20 16:59:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 16:59:05 --> Encrypt Class Initialized
INFO  - 2014-04-20 16:59:05 --> after session initialization................
INFO  - 2014-04-20 16:59:05 --> after internships list has been clicked.................
INFO  - 2014-04-20 16:59:05 --> inside retrieving locations 
INFO  - 2014-04-20 16:59:05 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-20 16:59:05 --> inside retrieving internship firms 
INFO  - 2014-04-20 16:59:05 --> SELECT `intf`.`id_internshipfirm` as id, `intf`.`name` as name
FROM (`internship_firm` intf)
ORDER BY `intf`.`name`
INFO  - 2014-04-20 16:59:05 --> inside retrieving internship duration 
INFO  - 2014-04-20 16:59:05 --> SELECT `intd`.`id_internshipduration` as id, `intd`.`name` as name
FROM (`internship_duration` intd)
ORDER BY `intd`.`id_internshipduration`
INFO  - 2014-04-20 16:59:05 --> inside retrieving internship specialization 
INFO  - 2014-04-20 16:59:05 --> SELECT `ints`.`id_internshipspecialization` as id, `ints`.`name` as name
FROM (`internship_specialization` ints)
ORDER BY `ints`.`name`
INFO  - 2014-04-20 16:59:05 --> last intern id is 0
INFO  - 2014-04-20 16:59:05 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` <> 0
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` asc
LIMIT 10
INFO  - 2014-04-20 16:59:05 --> The session id is ========>201fd2be50ffdc522ca2096cf72747ef and the member id is =======>33
DEBUG - 2014-04-20 16:59:05 --> File loaded: ../pharmaray-application/views/internships.php
DEBUG - 2014-04-20 16:59:05 --> Final output sent to browser
DEBUG - 2014-04-20 16:59:05 --> Total execution time: 0.0346
DEBUG - 2014-04-20 16:59:09 --> Config Class Initialized
DEBUG - 2014-04-20 16:59:09 --> Hooks Class Initialized
DEBUG - 2014-04-20 16:59:09 --> Utf8 Class Initialized
DEBUG - 2014-04-20 16:59:09 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 16:59:09 --> URI Class Initialized
DEBUG - 2014-04-20 16:59:09 --> Router Class Initialized
DEBUG - 2014-04-20 16:59:09 --> Output Class Initialized
DEBUG - 2014-04-20 16:59:09 --> Security Class Initialized
DEBUG - 2014-04-20 16:59:09 --> Input Class Initialized
DEBUG - 2014-04-20 16:59:09 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 16:59:09 --> Language Class Initialized
DEBUG - 2014-04-20 16:59:09 --> Loader Class Initialized
DEBUG - 2014-04-20 16:59:09 --> Helper loaded: form_helper
DEBUG - 2014-04-20 16:59:09 --> Helper loaded: url_helper
DEBUG - 2014-04-20 16:59:09 --> Helper loaded: html_helper
DEBUG - 2014-04-20 16:59:09 --> Database Driver Class Initialized
ERROR - 2014-04-20 16:59:09 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 16:59:09 --> Session Class Initialized
DEBUG - 2014-04-20 16:59:09 --> Helper loaded: string_helper
DEBUG - 2014-04-20 16:59:09 --> Session routines successfully run
DEBUG - 2014-04-20 16:59:09 --> Form Validation Class Initialized
DEBUG - 2014-04-20 16:59:09 --> Controller Class Initialized
DEBUG - 2014-04-20 16:59:09 --> Model Class Initialized
DEBUG - 2014-04-20 16:59:09 --> Model Class Initialized
DEBUG - 2014-04-20 16:59:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 16:59:09 --> Encrypt Class Initialized
INFO  - 2014-04-20 16:59:09 --> after session initialization................
INFO  - 2014-04-20 16:59:09 --> The Where query :::::::>>>i.id_internshipopening >11
INFO  - 2014-04-20 16:59:09 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` >11
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` asc
LIMIT 2
DEBUG - 2014-04-20 16:59:09 --> Final output sent to browser
DEBUG - 2014-04-20 16:59:09 --> Total execution time: 0.0309
DEBUG - 2014-04-20 17:01:19 --> Config Class Initialized
DEBUG - 2014-04-20 17:01:19 --> Hooks Class Initialized
DEBUG - 2014-04-20 17:01:19 --> Utf8 Class Initialized
DEBUG - 2014-04-20 17:01:19 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 17:01:19 --> URI Class Initialized
DEBUG - 2014-04-20 17:01:19 --> Router Class Initialized
DEBUG - 2014-04-20 17:01:19 --> Output Class Initialized
DEBUG - 2014-04-20 17:01:19 --> Security Class Initialized
DEBUG - 2014-04-20 17:01:19 --> Input Class Initialized
DEBUG - 2014-04-20 17:01:19 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 17:01:19 --> Language Class Initialized
DEBUG - 2014-04-20 17:01:19 --> Loader Class Initialized
DEBUG - 2014-04-20 17:01:19 --> Helper loaded: form_helper
DEBUG - 2014-04-20 17:01:19 --> Helper loaded: url_helper
DEBUG - 2014-04-20 17:01:19 --> Helper loaded: html_helper
DEBUG - 2014-04-20 17:01:19 --> Database Driver Class Initialized
ERROR - 2014-04-20 17:01:19 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 17:01:19 --> Session Class Initialized
DEBUG - 2014-04-20 17:01:19 --> Helper loaded: string_helper
DEBUG - 2014-04-20 17:01:19 --> Session routines successfully run
DEBUG - 2014-04-20 17:01:19 --> Form Validation Class Initialized
DEBUG - 2014-04-20 17:01:19 --> Controller Class Initialized
DEBUG - 2014-04-20 17:01:19 --> Model Class Initialized
DEBUG - 2014-04-20 17:01:19 --> Model Class Initialized
DEBUG - 2014-04-20 17:01:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 17:01:19 --> Encrypt Class Initialized
INFO  - 2014-04-20 17:01:19 --> after session initialization................
INFO  - 2014-04-20 17:01:19 --> after internships list has been clicked.................
INFO  - 2014-04-20 17:01:19 --> inside retrieving locations 
INFO  - 2014-04-20 17:01:19 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-20 17:01:19 --> inside retrieving internship firms 
INFO  - 2014-04-20 17:01:19 --> SELECT `intf`.`id_internshipfirm` as id, `intf`.`name` as name
FROM (`internship_firm` intf)
ORDER BY `intf`.`name`
INFO  - 2014-04-20 17:01:19 --> inside retrieving internship duration 
INFO  - 2014-04-20 17:01:19 --> SELECT `intd`.`id_internshipduration` as id, `intd`.`name` as name
FROM (`internship_duration` intd)
ORDER BY `intd`.`id_internshipduration`
INFO  - 2014-04-20 17:01:19 --> inside retrieving internship specialization 
INFO  - 2014-04-20 17:01:19 --> SELECT `ints`.`id_internshipspecialization` as id, `ints`.`name` as name
FROM (`internship_specialization` ints)
ORDER BY `ints`.`name`
INFO  - 2014-04-20 17:01:19 --> last intern id is 0
INFO  - 2014-04-20 17:01:19 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` <> 0
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` asc
LIMIT 10
INFO  - 2014-04-20 17:01:19 --> The session id is ========>063082c5c736f41018aa522840376de3 and the member id is =======>33
DEBUG - 2014-04-20 17:01:19 --> File loaded: ../pharmaray-application/views/internships.php
DEBUG - 2014-04-20 17:01:19 --> Final output sent to browser
DEBUG - 2014-04-20 17:01:19 --> Total execution time: 0.0368
DEBUG - 2014-04-20 17:01:21 --> Config Class Initialized
DEBUG - 2014-04-20 17:01:21 --> Hooks Class Initialized
DEBUG - 2014-04-20 17:01:21 --> Utf8 Class Initialized
DEBUG - 2014-04-20 17:01:21 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 17:01:21 --> URI Class Initialized
DEBUG - 2014-04-20 17:01:21 --> Router Class Initialized
DEBUG - 2014-04-20 17:01:21 --> Output Class Initialized
DEBUG - 2014-04-20 17:01:21 --> Security Class Initialized
DEBUG - 2014-04-20 17:01:21 --> Input Class Initialized
DEBUG - 2014-04-20 17:01:21 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 17:01:21 --> Language Class Initialized
DEBUG - 2014-04-20 17:01:21 --> Loader Class Initialized
DEBUG - 2014-04-20 17:01:21 --> Helper loaded: form_helper
DEBUG - 2014-04-20 17:01:21 --> Helper loaded: url_helper
DEBUG - 2014-04-20 17:01:21 --> Helper loaded: html_helper
DEBUG - 2014-04-20 17:01:21 --> Database Driver Class Initialized
ERROR - 2014-04-20 17:01:21 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 17:01:21 --> Session Class Initialized
DEBUG - 2014-04-20 17:01:21 --> Helper loaded: string_helper
DEBUG - 2014-04-20 17:01:21 --> Session routines successfully run
DEBUG - 2014-04-20 17:01:21 --> Form Validation Class Initialized
DEBUG - 2014-04-20 17:01:21 --> Controller Class Initialized
DEBUG - 2014-04-20 17:01:21 --> Model Class Initialized
DEBUG - 2014-04-20 17:01:21 --> Model Class Initialized
DEBUG - 2014-04-20 17:01:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 17:01:21 --> Encrypt Class Initialized
INFO  - 2014-04-20 17:01:21 --> after session initialization................
INFO  - 2014-04-20 17:01:21 --> The Where query :::::::>>>i.id_internshipopening >11
INFO  - 2014-04-20 17:01:21 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` >11
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` asc
LIMIT 2
DEBUG - 2014-04-20 17:01:21 --> Final output sent to browser
DEBUG - 2014-04-20 17:01:21 --> Total execution time: 0.0350
DEBUG - 2014-04-20 17:01:54 --> Config Class Initialized
DEBUG - 2014-04-20 17:01:54 --> Hooks Class Initialized
DEBUG - 2014-04-20 17:01:54 --> Utf8 Class Initialized
DEBUG - 2014-04-20 17:01:54 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 17:01:54 --> URI Class Initialized
DEBUG - 2014-04-20 17:01:54 --> Router Class Initialized
DEBUG - 2014-04-20 17:01:54 --> Output Class Initialized
DEBUG - 2014-04-20 17:01:54 --> Security Class Initialized
DEBUG - 2014-04-20 17:01:54 --> Input Class Initialized
DEBUG - 2014-04-20 17:01:54 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 17:01:54 --> Language Class Initialized
DEBUG - 2014-04-20 17:01:54 --> Loader Class Initialized
DEBUG - 2014-04-20 17:01:54 --> Helper loaded: form_helper
DEBUG - 2014-04-20 17:01:54 --> Helper loaded: url_helper
DEBUG - 2014-04-20 17:01:54 --> Helper loaded: html_helper
DEBUG - 2014-04-20 17:01:54 --> Database Driver Class Initialized
ERROR - 2014-04-20 17:01:54 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 17:01:54 --> Session Class Initialized
DEBUG - 2014-04-20 17:01:54 --> Helper loaded: string_helper
DEBUG - 2014-04-20 17:01:54 --> Session routines successfully run
DEBUG - 2014-04-20 17:01:54 --> Form Validation Class Initialized
DEBUG - 2014-04-20 17:01:54 --> Controller Class Initialized
DEBUG - 2014-04-20 17:01:54 --> Model Class Initialized
DEBUG - 2014-04-20 17:01:54 --> Model Class Initialized
DEBUG - 2014-04-20 17:01:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 17:01:54 --> Encrypt Class Initialized
INFO  - 2014-04-20 17:01:54 --> after session initialization................
INFO  - 2014-04-20 17:01:54 --> after internships list has been clicked.................
INFO  - 2014-04-20 17:01:54 --> inside retrieving locations 
INFO  - 2014-04-20 17:01:54 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-20 17:01:54 --> inside retrieving internship firms 
INFO  - 2014-04-20 17:01:54 --> SELECT `intf`.`id_internshipfirm` as id, `intf`.`name` as name
FROM (`internship_firm` intf)
ORDER BY `intf`.`name`
INFO  - 2014-04-20 17:01:54 --> inside retrieving internship duration 
INFO  - 2014-04-20 17:01:54 --> SELECT `intd`.`id_internshipduration` as id, `intd`.`name` as name
FROM (`internship_duration` intd)
ORDER BY `intd`.`id_internshipduration`
INFO  - 2014-04-20 17:01:54 --> inside retrieving internship specialization 
INFO  - 2014-04-20 17:01:54 --> SELECT `ints`.`id_internshipspecialization` as id, `ints`.`name` as name
FROM (`internship_specialization` ints)
ORDER BY `ints`.`name`
INFO  - 2014-04-20 17:01:54 --> last intern id is 0
INFO  - 2014-04-20 17:01:54 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` <> 0
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` asc
LIMIT 10
INFO  - 2014-04-20 17:01:54 --> The session id is ========>063082c5c736f41018aa522840376de3 and the member id is =======>33
DEBUG - 2014-04-20 17:01:54 --> File loaded: ../pharmaray-application/views/internships.php
DEBUG - 2014-04-20 17:01:54 --> Final output sent to browser
DEBUG - 2014-04-20 17:01:54 --> Total execution time: 0.0357
DEBUG - 2014-04-20 17:01:56 --> Config Class Initialized
DEBUG - 2014-04-20 17:01:56 --> Hooks Class Initialized
DEBUG - 2014-04-20 17:01:56 --> Utf8 Class Initialized
DEBUG - 2014-04-20 17:01:56 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 17:01:56 --> URI Class Initialized
DEBUG - 2014-04-20 17:01:56 --> Router Class Initialized
DEBUG - 2014-04-20 17:01:56 --> Output Class Initialized
DEBUG - 2014-04-20 17:01:56 --> Security Class Initialized
DEBUG - 2014-04-20 17:01:56 --> Input Class Initialized
DEBUG - 2014-04-20 17:01:56 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 17:01:56 --> Language Class Initialized
DEBUG - 2014-04-20 17:01:56 --> Loader Class Initialized
DEBUG - 2014-04-20 17:01:56 --> Helper loaded: form_helper
DEBUG - 2014-04-20 17:01:56 --> Helper loaded: url_helper
DEBUG - 2014-04-20 17:01:56 --> Helper loaded: html_helper
DEBUG - 2014-04-20 17:01:56 --> Database Driver Class Initialized
ERROR - 2014-04-20 17:01:56 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 17:01:56 --> Session Class Initialized
DEBUG - 2014-04-20 17:01:56 --> Helper loaded: string_helper
DEBUG - 2014-04-20 17:01:56 --> Session routines successfully run
DEBUG - 2014-04-20 17:01:56 --> Form Validation Class Initialized
DEBUG - 2014-04-20 17:01:56 --> Controller Class Initialized
DEBUG - 2014-04-20 17:01:56 --> Model Class Initialized
DEBUG - 2014-04-20 17:01:56 --> Model Class Initialized
DEBUG - 2014-04-20 17:01:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 17:01:56 --> Encrypt Class Initialized
INFO  - 2014-04-20 17:01:56 --> after session initialization................
INFO  - 2014-04-20 17:01:56 --> after internships list has been clicked.................
INFO  - 2014-04-20 17:01:56 --> inside retrieving locations 
INFO  - 2014-04-20 17:01:56 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-20 17:01:56 --> inside retrieving internship firms 
INFO  - 2014-04-20 17:01:56 --> SELECT `intf`.`id_internshipfirm` as id, `intf`.`name` as name
FROM (`internship_firm` intf)
ORDER BY `intf`.`name`
INFO  - 2014-04-20 17:01:56 --> inside retrieving internship duration 
INFO  - 2014-04-20 17:01:56 --> SELECT `intd`.`id_internshipduration` as id, `intd`.`name` as name
FROM (`internship_duration` intd)
ORDER BY `intd`.`id_internshipduration`
INFO  - 2014-04-20 17:01:56 --> inside retrieving internship specialization 
INFO  - 2014-04-20 17:01:56 --> SELECT `ints`.`id_internshipspecialization` as id, `ints`.`name` as name
FROM (`internship_specialization` ints)
ORDER BY `ints`.`name`
INFO  - 2014-04-20 17:01:56 --> last intern id is 0
INFO  - 2014-04-20 17:01:56 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` <> 0
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` asc
LIMIT 10
INFO  - 2014-04-20 17:01:56 --> The session id is ========>063082c5c736f41018aa522840376de3 and the member id is =======>33
DEBUG - 2014-04-20 17:01:56 --> File loaded: ../pharmaray-application/views/internships.php
DEBUG - 2014-04-20 17:01:56 --> Final output sent to browser
DEBUG - 2014-04-20 17:01:56 --> Total execution time: 0.0349
DEBUG - 2014-04-20 17:01:59 --> Config Class Initialized
DEBUG - 2014-04-20 17:01:59 --> Hooks Class Initialized
DEBUG - 2014-04-20 17:01:59 --> Utf8 Class Initialized
DEBUG - 2014-04-20 17:01:59 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 17:01:59 --> URI Class Initialized
DEBUG - 2014-04-20 17:01:59 --> Router Class Initialized
DEBUG - 2014-04-20 17:01:59 --> Output Class Initialized
DEBUG - 2014-04-20 17:01:59 --> Security Class Initialized
DEBUG - 2014-04-20 17:01:59 --> Input Class Initialized
DEBUG - 2014-04-20 17:01:59 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 17:01:59 --> Language Class Initialized
DEBUG - 2014-04-20 17:01:59 --> Loader Class Initialized
DEBUG - 2014-04-20 17:01:59 --> Helper loaded: form_helper
DEBUG - 2014-04-20 17:01:59 --> Helper loaded: url_helper
DEBUG - 2014-04-20 17:01:59 --> Helper loaded: html_helper
DEBUG - 2014-04-20 17:01:59 --> Database Driver Class Initialized
ERROR - 2014-04-20 17:01:59 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 17:01:59 --> Session Class Initialized
DEBUG - 2014-04-20 17:01:59 --> Helper loaded: string_helper
DEBUG - 2014-04-20 17:01:59 --> Session routines successfully run
DEBUG - 2014-04-20 17:01:59 --> Form Validation Class Initialized
DEBUG - 2014-04-20 17:01:59 --> Controller Class Initialized
DEBUG - 2014-04-20 17:01:59 --> Model Class Initialized
DEBUG - 2014-04-20 17:01:59 --> Model Class Initialized
DEBUG - 2014-04-20 17:01:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 17:01:59 --> Encrypt Class Initialized
INFO  - 2014-04-20 17:01:59 --> after session initialization................
INFO  - 2014-04-20 17:01:59 --> The Where query :::::::>>>i.id_internshipopening >11
INFO  - 2014-04-20 17:01:59 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` >11
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` asc
LIMIT 4
DEBUG - 2014-04-20 17:01:59 --> Final output sent to browser
DEBUG - 2014-04-20 17:01:59 --> Total execution time: 0.0327
DEBUG - 2014-04-20 17:02:11 --> Config Class Initialized
DEBUG - 2014-04-20 17:02:11 --> Hooks Class Initialized
DEBUG - 2014-04-20 17:02:11 --> Utf8 Class Initialized
DEBUG - 2014-04-20 17:02:11 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 17:02:11 --> URI Class Initialized
DEBUG - 2014-04-20 17:02:11 --> Router Class Initialized
DEBUG - 2014-04-20 17:02:11 --> Output Class Initialized
DEBUG - 2014-04-20 17:02:11 --> Security Class Initialized
DEBUG - 2014-04-20 17:02:11 --> Input Class Initialized
DEBUG - 2014-04-20 17:02:11 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 17:02:11 --> Language Class Initialized
DEBUG - 2014-04-20 17:02:11 --> Loader Class Initialized
DEBUG - 2014-04-20 17:02:11 --> Helper loaded: form_helper
DEBUG - 2014-04-20 17:02:11 --> Helper loaded: url_helper
DEBUG - 2014-04-20 17:02:11 --> Helper loaded: html_helper
DEBUG - 2014-04-20 17:02:11 --> Database Driver Class Initialized
ERROR - 2014-04-20 17:02:11 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 17:02:11 --> Session Class Initialized
DEBUG - 2014-04-20 17:02:11 --> Helper loaded: string_helper
DEBUG - 2014-04-20 17:02:11 --> Session routines successfully run
DEBUG - 2014-04-20 17:02:11 --> Form Validation Class Initialized
DEBUG - 2014-04-20 17:02:11 --> Controller Class Initialized
DEBUG - 2014-04-20 17:02:11 --> Model Class Initialized
DEBUG - 2014-04-20 17:02:11 --> Model Class Initialized
DEBUG - 2014-04-20 17:02:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 17:02:11 --> Encrypt Class Initialized
INFO  - 2014-04-20 17:02:11 --> after session initialization................
INFO  - 2014-04-20 17:02:11 --> The Where query :::::::>>>i.id_internshipopening >11
INFO  - 2014-04-20 17:02:11 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` >11
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` asc
LIMIT 4
DEBUG - 2014-04-20 17:02:11 --> Final output sent to browser
DEBUG - 2014-04-20 17:02:11 --> Total execution time: 0.0314
DEBUG - 2014-04-20 17:02:20 --> Config Class Initialized
DEBUG - 2014-04-20 17:02:20 --> Hooks Class Initialized
DEBUG - 2014-04-20 17:02:20 --> Utf8 Class Initialized
DEBUG - 2014-04-20 17:02:20 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 17:02:20 --> URI Class Initialized
DEBUG - 2014-04-20 17:02:20 --> Router Class Initialized
DEBUG - 2014-04-20 17:02:20 --> Output Class Initialized
DEBUG - 2014-04-20 17:02:20 --> Security Class Initialized
DEBUG - 2014-04-20 17:02:20 --> Input Class Initialized
DEBUG - 2014-04-20 17:02:20 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 17:02:20 --> Language Class Initialized
DEBUG - 2014-04-20 17:02:20 --> Loader Class Initialized
DEBUG - 2014-04-20 17:02:20 --> Helper loaded: form_helper
DEBUG - 2014-04-20 17:02:20 --> Helper loaded: url_helper
DEBUG - 2014-04-20 17:02:20 --> Helper loaded: html_helper
DEBUG - 2014-04-20 17:02:20 --> Database Driver Class Initialized
ERROR - 2014-04-20 17:02:20 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 17:02:20 --> Session Class Initialized
DEBUG - 2014-04-20 17:02:20 --> Helper loaded: string_helper
DEBUG - 2014-04-20 17:02:20 --> Session routines successfully run
DEBUG - 2014-04-20 17:02:20 --> Form Validation Class Initialized
DEBUG - 2014-04-20 17:02:20 --> Controller Class Initialized
DEBUG - 2014-04-20 17:02:20 --> Model Class Initialized
DEBUG - 2014-04-20 17:02:20 --> Model Class Initialized
DEBUG - 2014-04-20 17:02:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 17:02:20 --> Encrypt Class Initialized
INFO  - 2014-04-20 17:02:20 --> after session initialization................
INFO  - 2014-04-20 17:02:20 --> The Where query :::::::>>>i.id_internshipopening >11
INFO  - 2014-04-20 17:02:20 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` >11
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` asc
LIMIT 4
DEBUG - 2014-04-20 17:02:20 --> Final output sent to browser
DEBUG - 2014-04-20 17:02:20 --> Total execution time: 0.0326
DEBUG - 2014-04-20 17:03:52 --> Config Class Initialized
DEBUG - 2014-04-20 17:03:52 --> Hooks Class Initialized
DEBUG - 2014-04-20 17:03:52 --> Utf8 Class Initialized
DEBUG - 2014-04-20 17:03:52 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 17:03:52 --> URI Class Initialized
DEBUG - 2014-04-20 17:03:52 --> Router Class Initialized
DEBUG - 2014-04-20 17:03:52 --> Output Class Initialized
DEBUG - 2014-04-20 17:03:52 --> Security Class Initialized
DEBUG - 2014-04-20 17:03:52 --> Input Class Initialized
DEBUG - 2014-04-20 17:03:52 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 17:03:52 --> Language Class Initialized
DEBUG - 2014-04-20 17:03:52 --> Loader Class Initialized
DEBUG - 2014-04-20 17:03:52 --> Helper loaded: form_helper
DEBUG - 2014-04-20 17:03:52 --> Helper loaded: url_helper
DEBUG - 2014-04-20 17:03:52 --> Helper loaded: html_helper
DEBUG - 2014-04-20 17:03:52 --> Database Driver Class Initialized
ERROR - 2014-04-20 17:03:52 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 17:03:52 --> Session Class Initialized
DEBUG - 2014-04-20 17:03:52 --> Helper loaded: string_helper
DEBUG - 2014-04-20 17:03:52 --> Session routines successfully run
DEBUG - 2014-04-20 17:03:52 --> Form Validation Class Initialized
DEBUG - 2014-04-20 17:03:52 --> Controller Class Initialized
DEBUG - 2014-04-20 17:03:52 --> Model Class Initialized
DEBUG - 2014-04-20 17:03:52 --> Model Class Initialized
DEBUG - 2014-04-20 17:03:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 17:03:52 --> Encrypt Class Initialized
INFO  - 2014-04-20 17:03:52 --> after session initialization................
INFO  - 2014-04-20 17:03:52 --> after internships list has been clicked.................
INFO  - 2014-04-20 17:03:52 --> inside retrieving locations 
INFO  - 2014-04-20 17:03:52 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-20 17:03:52 --> inside retrieving internship firms 
INFO  - 2014-04-20 17:03:52 --> SELECT `intf`.`id_internshipfirm` as id, `intf`.`name` as name
FROM (`internship_firm` intf)
ORDER BY `intf`.`name`
INFO  - 2014-04-20 17:03:52 --> inside retrieving internship duration 
INFO  - 2014-04-20 17:03:52 --> SELECT `intd`.`id_internshipduration` as id, `intd`.`name` as name
FROM (`internship_duration` intd)
ORDER BY `intd`.`id_internshipduration`
INFO  - 2014-04-20 17:03:52 --> inside retrieving internship specialization 
INFO  - 2014-04-20 17:03:52 --> SELECT `ints`.`id_internshipspecialization` as id, `ints`.`name` as name
FROM (`internship_specialization` ints)
ORDER BY `ints`.`name`
INFO  - 2014-04-20 17:03:52 --> last intern id is 0
INFO  - 2014-04-20 17:03:52 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` <> 0
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` asc
LIMIT 10
INFO  - 2014-04-20 17:03:52 --> The session id is ========>063082c5c736f41018aa522840376de3 and the member id is =======>33
DEBUG - 2014-04-20 17:03:52 --> File loaded: ../pharmaray-application/views/internships.php
DEBUG - 2014-04-20 17:03:52 --> Final output sent to browser
DEBUG - 2014-04-20 17:03:52 --> Total execution time: 0.0339
DEBUG - 2014-04-20 17:03:53 --> Config Class Initialized
DEBUG - 2014-04-20 17:03:53 --> Hooks Class Initialized
DEBUG - 2014-04-20 17:03:53 --> Utf8 Class Initialized
DEBUG - 2014-04-20 17:03:53 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 17:03:53 --> URI Class Initialized
DEBUG - 2014-04-20 17:03:53 --> Router Class Initialized
DEBUG - 2014-04-20 17:03:53 --> Output Class Initialized
DEBUG - 2014-04-20 17:03:53 --> Security Class Initialized
DEBUG - 2014-04-20 17:03:53 --> Input Class Initialized
DEBUG - 2014-04-20 17:03:53 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 17:03:53 --> Language Class Initialized
DEBUG - 2014-04-20 17:03:53 --> Loader Class Initialized
DEBUG - 2014-04-20 17:03:53 --> Helper loaded: form_helper
DEBUG - 2014-04-20 17:03:53 --> Helper loaded: url_helper
DEBUG - 2014-04-20 17:03:53 --> Helper loaded: html_helper
DEBUG - 2014-04-20 17:03:53 --> Database Driver Class Initialized
ERROR - 2014-04-20 17:03:53 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 17:03:53 --> Session Class Initialized
DEBUG - 2014-04-20 17:03:53 --> Helper loaded: string_helper
DEBUG - 2014-04-20 17:03:53 --> Session routines successfully run
DEBUG - 2014-04-20 17:03:53 --> Form Validation Class Initialized
DEBUG - 2014-04-20 17:03:53 --> Controller Class Initialized
DEBUG - 2014-04-20 17:03:53 --> Model Class Initialized
DEBUG - 2014-04-20 17:03:53 --> Model Class Initialized
DEBUG - 2014-04-20 17:03:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 17:03:53 --> Encrypt Class Initialized
INFO  - 2014-04-20 17:03:53 --> after session initialization................
INFO  - 2014-04-20 17:03:53 --> after internships list has been clicked.................
INFO  - 2014-04-20 17:03:53 --> inside retrieving locations 
INFO  - 2014-04-20 17:03:53 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-20 17:03:53 --> inside retrieving internship firms 
INFO  - 2014-04-20 17:03:53 --> SELECT `intf`.`id_internshipfirm` as id, `intf`.`name` as name
FROM (`internship_firm` intf)
ORDER BY `intf`.`name`
INFO  - 2014-04-20 17:03:53 --> inside retrieving internship duration 
INFO  - 2014-04-20 17:03:53 --> SELECT `intd`.`id_internshipduration` as id, `intd`.`name` as name
FROM (`internship_duration` intd)
ORDER BY `intd`.`id_internshipduration`
INFO  - 2014-04-20 17:03:53 --> inside retrieving internship specialization 
INFO  - 2014-04-20 17:03:53 --> SELECT `ints`.`id_internshipspecialization` as id, `ints`.`name` as name
FROM (`internship_specialization` ints)
ORDER BY `ints`.`name`
INFO  - 2014-04-20 17:03:53 --> last intern id is 0
INFO  - 2014-04-20 17:03:53 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` <> 0
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` asc
LIMIT 10
INFO  - 2014-04-20 17:03:53 --> The session id is ========>063082c5c736f41018aa522840376de3 and the member id is =======>33
DEBUG - 2014-04-20 17:03:53 --> File loaded: ../pharmaray-application/views/internships.php
DEBUG - 2014-04-20 17:03:53 --> Final output sent to browser
DEBUG - 2014-04-20 17:03:53 --> Total execution time: 0.0380
DEBUG - 2014-04-20 17:03:54 --> Config Class Initialized
DEBUG - 2014-04-20 17:03:54 --> Hooks Class Initialized
DEBUG - 2014-04-20 17:03:54 --> Utf8 Class Initialized
DEBUG - 2014-04-20 17:03:54 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 17:03:54 --> URI Class Initialized
DEBUG - 2014-04-20 17:03:54 --> Router Class Initialized
DEBUG - 2014-04-20 17:03:54 --> Output Class Initialized
DEBUG - 2014-04-20 17:03:54 --> Security Class Initialized
DEBUG - 2014-04-20 17:03:54 --> Input Class Initialized
DEBUG - 2014-04-20 17:03:54 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 17:03:54 --> Language Class Initialized
DEBUG - 2014-04-20 17:03:54 --> Loader Class Initialized
DEBUG - 2014-04-20 17:03:54 --> Helper loaded: form_helper
DEBUG - 2014-04-20 17:03:54 --> Helper loaded: url_helper
DEBUG - 2014-04-20 17:03:54 --> Helper loaded: html_helper
DEBUG - 2014-04-20 17:03:54 --> Database Driver Class Initialized
ERROR - 2014-04-20 17:03:54 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 17:03:54 --> Session Class Initialized
DEBUG - 2014-04-20 17:03:54 --> Helper loaded: string_helper
DEBUG - 2014-04-20 17:03:54 --> Session routines successfully run
DEBUG - 2014-04-20 17:03:54 --> Form Validation Class Initialized
DEBUG - 2014-04-20 17:03:54 --> Controller Class Initialized
DEBUG - 2014-04-20 17:03:54 --> Model Class Initialized
DEBUG - 2014-04-20 17:03:54 --> Model Class Initialized
DEBUG - 2014-04-20 17:03:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 17:03:54 --> Encrypt Class Initialized
INFO  - 2014-04-20 17:03:54 --> after session initialization................
INFO  - 2014-04-20 17:03:54 --> after internships list has been clicked.................
INFO  - 2014-04-20 17:03:54 --> inside retrieving locations 
INFO  - 2014-04-20 17:03:54 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-20 17:03:54 --> inside retrieving internship firms 
INFO  - 2014-04-20 17:03:54 --> SELECT `intf`.`id_internshipfirm` as id, `intf`.`name` as name
FROM (`internship_firm` intf)
ORDER BY `intf`.`name`
INFO  - 2014-04-20 17:03:54 --> inside retrieving internship duration 
INFO  - 2014-04-20 17:03:54 --> SELECT `intd`.`id_internshipduration` as id, `intd`.`name` as name
FROM (`internship_duration` intd)
ORDER BY `intd`.`id_internshipduration`
INFO  - 2014-04-20 17:03:54 --> inside retrieving internship specialization 
INFO  - 2014-04-20 17:03:54 --> SELECT `ints`.`id_internshipspecialization` as id, `ints`.`name` as name
FROM (`internship_specialization` ints)
ORDER BY `ints`.`name`
INFO  - 2014-04-20 17:03:54 --> last intern id is 0
INFO  - 2014-04-20 17:03:54 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` <> 0
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` asc
LIMIT 10
INFO  - 2014-04-20 17:03:54 --> The session id is ========>063082c5c736f41018aa522840376de3 and the member id is =======>33
DEBUG - 2014-04-20 17:03:54 --> File loaded: ../pharmaray-application/views/internships.php
DEBUG - 2014-04-20 17:03:55 --> Final output sent to browser
DEBUG - 2014-04-20 17:03:55 --> Total execution time: 0.0407
DEBUG - 2014-04-20 17:04:10 --> Config Class Initialized
DEBUG - 2014-04-20 17:04:10 --> Hooks Class Initialized
DEBUG - 2014-04-20 17:04:10 --> Utf8 Class Initialized
DEBUG - 2014-04-20 17:04:10 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 17:04:10 --> URI Class Initialized
DEBUG - 2014-04-20 17:04:10 --> Router Class Initialized
DEBUG - 2014-04-20 17:04:10 --> Output Class Initialized
DEBUG - 2014-04-20 17:04:10 --> Security Class Initialized
DEBUG - 2014-04-20 17:04:10 --> Input Class Initialized
DEBUG - 2014-04-20 17:04:10 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 17:04:10 --> Language Class Initialized
DEBUG - 2014-04-20 17:04:10 --> Loader Class Initialized
DEBUG - 2014-04-20 17:04:10 --> Helper loaded: form_helper
DEBUG - 2014-04-20 17:04:10 --> Helper loaded: url_helper
DEBUG - 2014-04-20 17:04:10 --> Helper loaded: html_helper
DEBUG - 2014-04-20 17:04:10 --> Database Driver Class Initialized
ERROR - 2014-04-20 17:04:10 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 17:04:10 --> Session Class Initialized
DEBUG - 2014-04-20 17:04:10 --> Helper loaded: string_helper
DEBUG - 2014-04-20 17:04:10 --> Session routines successfully run
DEBUG - 2014-04-20 17:04:10 --> Form Validation Class Initialized
DEBUG - 2014-04-20 17:04:10 --> Controller Class Initialized
DEBUG - 2014-04-20 17:04:10 --> Model Class Initialized
DEBUG - 2014-04-20 17:04:10 --> Model Class Initialized
DEBUG - 2014-04-20 17:04:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 17:04:10 --> Encrypt Class Initialized
INFO  - 2014-04-20 17:04:10 --> after session initialization................
INFO  - 2014-04-20 17:04:10 --> The Where query :::::::>>>i.id_internshipopening >11
INFO  - 2014-04-20 17:04:10 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` >11
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` asc
LIMIT 4
DEBUG - 2014-04-20 17:04:10 --> Final output sent to browser
DEBUG - 2014-04-20 17:04:10 --> Total execution time: 0.0377
DEBUG - 2014-04-20 17:04:19 --> Config Class Initialized
DEBUG - 2014-04-20 17:04:19 --> Hooks Class Initialized
DEBUG - 2014-04-20 17:04:19 --> Utf8 Class Initialized
DEBUG - 2014-04-20 17:04:19 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 17:04:19 --> URI Class Initialized
DEBUG - 2014-04-20 17:04:19 --> Router Class Initialized
DEBUG - 2014-04-20 17:04:19 --> Output Class Initialized
DEBUG - 2014-04-20 17:04:19 --> Security Class Initialized
DEBUG - 2014-04-20 17:04:19 --> Input Class Initialized
DEBUG - 2014-04-20 17:04:19 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 17:04:19 --> Language Class Initialized
DEBUG - 2014-04-20 17:04:19 --> Loader Class Initialized
DEBUG - 2014-04-20 17:04:19 --> Helper loaded: form_helper
DEBUG - 2014-04-20 17:04:19 --> Helper loaded: url_helper
DEBUG - 2014-04-20 17:04:19 --> Helper loaded: html_helper
DEBUG - 2014-04-20 17:04:19 --> Database Driver Class Initialized
ERROR - 2014-04-20 17:04:19 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 17:04:19 --> Session Class Initialized
DEBUG - 2014-04-20 17:04:19 --> Helper loaded: string_helper
DEBUG - 2014-04-20 17:04:19 --> Session routines successfully run
DEBUG - 2014-04-20 17:04:19 --> Form Validation Class Initialized
DEBUG - 2014-04-20 17:04:19 --> Controller Class Initialized
DEBUG - 2014-04-20 17:04:19 --> Model Class Initialized
DEBUG - 2014-04-20 17:04:19 --> Model Class Initialized
DEBUG - 2014-04-20 17:04:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 17:04:19 --> Encrypt Class Initialized
INFO  - 2014-04-20 17:04:19 --> after session initialization................
INFO  - 2014-04-20 17:04:19 --> The Where query :::::::>>>i.id_internshipopening >11
INFO  - 2014-04-20 17:04:19 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` >11
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` asc
LIMIT 4
DEBUG - 2014-04-20 17:04:19 --> Final output sent to browser
DEBUG - 2014-04-20 17:04:19 --> Total execution time: 0.0368
DEBUG - 2014-04-20 17:10:02 --> Config Class Initialized
DEBUG - 2014-04-20 17:10:02 --> Hooks Class Initialized
DEBUG - 2014-04-20 17:10:02 --> Utf8 Class Initialized
DEBUG - 2014-04-20 17:10:02 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 17:10:02 --> URI Class Initialized
DEBUG - 2014-04-20 17:10:02 --> Router Class Initialized
DEBUG - 2014-04-20 17:10:02 --> Output Class Initialized
DEBUG - 2014-04-20 17:10:02 --> Security Class Initialized
DEBUG - 2014-04-20 17:10:02 --> Input Class Initialized
DEBUG - 2014-04-20 17:10:02 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 17:10:02 --> Language Class Initialized
DEBUG - 2014-04-20 17:10:02 --> Loader Class Initialized
DEBUG - 2014-04-20 17:10:02 --> Helper loaded: form_helper
DEBUG - 2014-04-20 17:10:02 --> Helper loaded: url_helper
DEBUG - 2014-04-20 17:10:02 --> Helper loaded: html_helper
DEBUG - 2014-04-20 17:10:02 --> Database Driver Class Initialized
ERROR - 2014-04-20 17:10:02 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 17:10:02 --> Session Class Initialized
DEBUG - 2014-04-20 17:10:02 --> Helper loaded: string_helper
DEBUG - 2014-04-20 17:10:02 --> Session routines successfully run
DEBUG - 2014-04-20 17:10:02 --> Form Validation Class Initialized
DEBUG - 2014-04-20 17:10:02 --> Controller Class Initialized
DEBUG - 2014-04-20 17:10:02 --> Model Class Initialized
DEBUG - 2014-04-20 17:10:02 --> Model Class Initialized
DEBUG - 2014-04-20 17:10:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 17:10:02 --> Encrypt Class Initialized
INFO  - 2014-04-20 17:10:02 --> after session initialization................
INFO  - 2014-04-20 17:10:02 --> after internships list has been clicked.................
INFO  - 2014-04-20 17:10:02 --> inside retrieving locations 
INFO  - 2014-04-20 17:10:02 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-20 17:10:02 --> inside retrieving internship firms 
INFO  - 2014-04-20 17:10:02 --> SELECT `intf`.`id_internshipfirm` as id, `intf`.`name` as name
FROM (`internship_firm` intf)
ORDER BY `intf`.`name`
INFO  - 2014-04-20 17:10:02 --> inside retrieving internship duration 
INFO  - 2014-04-20 17:10:02 --> SELECT `intd`.`id_internshipduration` as id, `intd`.`name` as name
FROM (`internship_duration` intd)
ORDER BY `intd`.`id_internshipduration`
INFO  - 2014-04-20 17:10:02 --> inside retrieving internship specialization 
INFO  - 2014-04-20 17:10:02 --> SELECT `ints`.`id_internshipspecialization` as id, `ints`.`name` as name
FROM (`internship_specialization` ints)
ORDER BY `ints`.`name`
INFO  - 2014-04-20 17:10:02 --> last intern id is 0
INFO  - 2014-04-20 17:10:02 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` <> 0
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` asc
LIMIT 10
INFO  - 2014-04-20 17:10:02 --> The session id is ========>cfc5aad2715591ee08cfdbe7ebd06107 and the member id is =======>33
DEBUG - 2014-04-20 17:10:02 --> File loaded: ../pharmaray-application/views/internships.php
DEBUG - 2014-04-20 17:10:02 --> Final output sent to browser
DEBUG - 2014-04-20 17:10:02 --> Total execution time: 0.0397
DEBUG - 2014-04-20 17:10:03 --> Config Class Initialized
DEBUG - 2014-04-20 17:10:03 --> Hooks Class Initialized
DEBUG - 2014-04-20 17:10:03 --> Utf8 Class Initialized
DEBUG - 2014-04-20 17:10:03 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 17:10:03 --> URI Class Initialized
DEBUG - 2014-04-20 17:10:03 --> Router Class Initialized
DEBUG - 2014-04-20 17:10:03 --> Output Class Initialized
DEBUG - 2014-04-20 17:10:03 --> Security Class Initialized
DEBUG - 2014-04-20 17:10:03 --> Input Class Initialized
DEBUG - 2014-04-20 17:10:03 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 17:10:03 --> Language Class Initialized
DEBUG - 2014-04-20 17:10:03 --> Loader Class Initialized
DEBUG - 2014-04-20 17:10:03 --> Helper loaded: form_helper
DEBUG - 2014-04-20 17:10:03 --> Helper loaded: url_helper
DEBUG - 2014-04-20 17:10:03 --> Helper loaded: html_helper
DEBUG - 2014-04-20 17:10:03 --> Database Driver Class Initialized
ERROR - 2014-04-20 17:10:03 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 17:10:03 --> Session Class Initialized
DEBUG - 2014-04-20 17:10:03 --> Helper loaded: string_helper
DEBUG - 2014-04-20 17:10:03 --> Session routines successfully run
DEBUG - 2014-04-20 17:10:03 --> Form Validation Class Initialized
DEBUG - 2014-04-20 17:10:03 --> Controller Class Initialized
DEBUG - 2014-04-20 17:10:03 --> Model Class Initialized
DEBUG - 2014-04-20 17:10:03 --> Model Class Initialized
DEBUG - 2014-04-20 17:10:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 17:10:03 --> Encrypt Class Initialized
INFO  - 2014-04-20 17:10:03 --> after session initialization................
INFO  - 2014-04-20 17:10:03 --> after internships list has been clicked.................
INFO  - 2014-04-20 17:10:03 --> inside retrieving locations 
INFO  - 2014-04-20 17:10:03 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-20 17:10:03 --> inside retrieving internship firms 
INFO  - 2014-04-20 17:10:03 --> SELECT `intf`.`id_internshipfirm` as id, `intf`.`name` as name
FROM (`internship_firm` intf)
ORDER BY `intf`.`name`
INFO  - 2014-04-20 17:10:03 --> inside retrieving internship duration 
INFO  - 2014-04-20 17:10:03 --> SELECT `intd`.`id_internshipduration` as id, `intd`.`name` as name
FROM (`internship_duration` intd)
ORDER BY `intd`.`id_internshipduration`
INFO  - 2014-04-20 17:10:03 --> inside retrieving internship specialization 
INFO  - 2014-04-20 17:10:03 --> SELECT `ints`.`id_internshipspecialization` as id, `ints`.`name` as name
FROM (`internship_specialization` ints)
ORDER BY `ints`.`name`
INFO  - 2014-04-20 17:10:03 --> last intern id is 0
INFO  - 2014-04-20 17:10:03 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` <> 0
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` asc
LIMIT 10
INFO  - 2014-04-20 17:10:03 --> The session id is ========>cfc5aad2715591ee08cfdbe7ebd06107 and the member id is =======>33
DEBUG - 2014-04-20 17:10:03 --> File loaded: ../pharmaray-application/views/internships.php
DEBUG - 2014-04-20 17:10:03 --> Final output sent to browser
DEBUG - 2014-04-20 17:10:03 --> Total execution time: 0.0348
DEBUG - 2014-04-20 17:10:04 --> Config Class Initialized
DEBUG - 2014-04-20 17:10:04 --> Hooks Class Initialized
DEBUG - 2014-04-20 17:10:04 --> Utf8 Class Initialized
DEBUG - 2014-04-20 17:10:04 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 17:10:04 --> URI Class Initialized
DEBUG - 2014-04-20 17:10:04 --> Router Class Initialized
DEBUG - 2014-04-20 17:10:04 --> Output Class Initialized
DEBUG - 2014-04-20 17:10:04 --> Security Class Initialized
DEBUG - 2014-04-20 17:10:04 --> Input Class Initialized
DEBUG - 2014-04-20 17:10:04 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 17:10:04 --> Language Class Initialized
DEBUG - 2014-04-20 17:10:04 --> Loader Class Initialized
DEBUG - 2014-04-20 17:10:04 --> Helper loaded: form_helper
DEBUG - 2014-04-20 17:10:04 --> Helper loaded: url_helper
DEBUG - 2014-04-20 17:10:04 --> Helper loaded: html_helper
DEBUG - 2014-04-20 17:10:04 --> Database Driver Class Initialized
ERROR - 2014-04-20 17:10:04 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 17:10:04 --> Session Class Initialized
DEBUG - 2014-04-20 17:10:04 --> Helper loaded: string_helper
DEBUG - 2014-04-20 17:10:04 --> Session routines successfully run
DEBUG - 2014-04-20 17:10:04 --> Form Validation Class Initialized
DEBUG - 2014-04-20 17:10:04 --> Controller Class Initialized
DEBUG - 2014-04-20 17:10:04 --> Model Class Initialized
DEBUG - 2014-04-20 17:10:04 --> Model Class Initialized
DEBUG - 2014-04-20 17:10:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 17:10:04 --> Encrypt Class Initialized
INFO  - 2014-04-20 17:10:04 --> after session initialization................
INFO  - 2014-04-20 17:10:04 --> The Where query :::::::>>>i.id_internshipopening >11
INFO  - 2014-04-20 17:10:04 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` >11
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` asc
LIMIT 4
DEBUG - 2014-04-20 17:10:04 --> Final output sent to browser
DEBUG - 2014-04-20 17:10:04 --> Total execution time: 0.0334
DEBUG - 2014-04-20 17:10:08 --> Config Class Initialized
DEBUG - 2014-04-20 17:10:08 --> Hooks Class Initialized
DEBUG - 2014-04-20 17:10:08 --> Utf8 Class Initialized
DEBUG - 2014-04-20 17:10:08 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 17:10:08 --> URI Class Initialized
DEBUG - 2014-04-20 17:10:08 --> Router Class Initialized
DEBUG - 2014-04-20 17:10:08 --> Output Class Initialized
DEBUG - 2014-04-20 17:10:08 --> Security Class Initialized
DEBUG - 2014-04-20 17:10:08 --> Input Class Initialized
DEBUG - 2014-04-20 17:10:08 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 17:10:08 --> Language Class Initialized
DEBUG - 2014-04-20 17:10:08 --> Loader Class Initialized
DEBUG - 2014-04-20 17:10:08 --> Helper loaded: form_helper
DEBUG - 2014-04-20 17:10:08 --> Helper loaded: url_helper
DEBUG - 2014-04-20 17:10:08 --> Helper loaded: html_helper
DEBUG - 2014-04-20 17:10:08 --> Database Driver Class Initialized
ERROR - 2014-04-20 17:10:08 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 17:10:08 --> Session Class Initialized
DEBUG - 2014-04-20 17:10:08 --> Helper loaded: string_helper
DEBUG - 2014-04-20 17:10:08 --> Session routines successfully run
DEBUG - 2014-04-20 17:10:08 --> Form Validation Class Initialized
DEBUG - 2014-04-20 17:10:08 --> Controller Class Initialized
DEBUG - 2014-04-20 17:10:08 --> Model Class Initialized
DEBUG - 2014-04-20 17:10:08 --> Model Class Initialized
DEBUG - 2014-04-20 17:10:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 17:10:08 --> Encrypt Class Initialized
INFO  - 2014-04-20 17:10:08 --> after session initialization................
INFO  - 2014-04-20 17:10:08 --> The Where query :::::::>>>i.id_internshipopening >11
INFO  - 2014-04-20 17:10:08 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` >11
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` asc
LIMIT 4
DEBUG - 2014-04-20 17:10:08 --> Final output sent to browser
DEBUG - 2014-04-20 17:10:08 --> Total execution time: 0.0299
DEBUG - 2014-04-20 23:34:43 --> Config Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Hooks Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Utf8 Class Initialized
DEBUG - 2014-04-20 23:34:43 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 23:34:43 --> URI Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Router Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Output Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Security Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Input Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 23:34:43 --> Language Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Loader Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Helper loaded: form_helper
DEBUG - 2014-04-20 23:34:43 --> Helper loaded: url_helper
DEBUG - 2014-04-20 23:34:43 --> Helper loaded: html_helper
DEBUG - 2014-04-20 23:34:43 --> Database Driver Class Initialized
ERROR - 2014-04-20 23:34:43 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 23:34:43 --> Session Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Helper loaded: string_helper
DEBUG - 2014-04-20 23:34:43 --> A session cookie was not found.
DEBUG - 2014-04-20 23:34:43 --> Session routines successfully run
DEBUG - 2014-04-20 23:34:43 --> Form Validation Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Controller Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Model Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Model Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 23:34:43 --> Encrypt Class Initialized
INFO  - 2014-04-20 23:34:43 --> after session initialization................
INFO  - 2014-04-20 23:34:43 --> after internships list has been clicked.................
INFO  - 2014-04-20 23:34:43 --> inside retrieving locations 
INFO  - 2014-04-20 23:34:43 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-20 23:34:43 --> inside retrieving internship firms 
INFO  - 2014-04-20 23:34:43 --> SELECT `intf`.`id_internshipfirm` as id, `intf`.`name` as name
FROM (`internship_firm` intf)
ORDER BY `intf`.`name`
INFO  - 2014-04-20 23:34:43 --> inside retrieving internship duration 
INFO  - 2014-04-20 23:34:43 --> SELECT `intd`.`id_internshipduration` as id, `intd`.`name` as name
FROM (`internship_duration` intd)
ORDER BY `intd`.`id_internshipduration`
INFO  - 2014-04-20 23:34:43 --> inside retrieving internship specialization 
INFO  - 2014-04-20 23:34:43 --> SELECT `ints`.`id_internshipspecialization` as id, `ints`.`name` as name
FROM (`internship_specialization` ints)
ORDER BY `ints`.`name`
INFO  - 2014-04-20 23:34:43 --> last intern id is 0
INFO  - 2014-04-20 23:34:43 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` <> 0
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` asc
LIMIT 10
DEBUG - 2014-04-20 23:34:43 --> Config Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Hooks Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Utf8 Class Initialized
DEBUG - 2014-04-20 23:34:43 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 23:34:43 --> URI Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Router Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Output Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Security Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Input Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 23:34:43 --> Language Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Loader Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Helper loaded: form_helper
DEBUG - 2014-04-20 23:34:43 --> Helper loaded: url_helper
DEBUG - 2014-04-20 23:34:43 --> Helper loaded: html_helper
DEBUG - 2014-04-20 23:34:43 --> Database Driver Class Initialized
ERROR - 2014-04-20 23:34:43 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 23:34:43 --> Session Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Helper loaded: string_helper
DEBUG - 2014-04-20 23:34:43 --> Session routines successfully run
DEBUG - 2014-04-20 23:34:43 --> Form Validation Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Controller Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Model Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Model Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 23:34:43 --> Encrypt Class Initialized
INFO  - 2014-04-20 23:34:43 --> after session initialization................
DEBUG - 2014-04-20 23:34:43 --> Config Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Hooks Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Utf8 Class Initialized
DEBUG - 2014-04-20 23:34:43 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 23:34:43 --> URI Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Router Class Initialized
DEBUG - 2014-04-20 23:34:43 --> No URI present. Default controller set.
DEBUG - 2014-04-20 23:34:43 --> Output Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Security Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Input Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 23:34:43 --> Language Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Loader Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Helper loaded: form_helper
DEBUG - 2014-04-20 23:34:43 --> Helper loaded: url_helper
DEBUG - 2014-04-20 23:34:43 --> Helper loaded: html_helper
DEBUG - 2014-04-20 23:34:43 --> Database Driver Class Initialized
ERROR - 2014-04-20 23:34:43 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 23:34:43 --> Session Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Helper loaded: string_helper
DEBUG - 2014-04-20 23:34:43 --> A session cookie was not found.
DEBUG - 2014-04-20 23:34:43 --> Session routines successfully run
DEBUG - 2014-04-20 23:34:43 --> Form Validation Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Controller Class Initialized
DEBUG - 2014-04-20 23:34:43 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2014-04-20 23:34:43 --> Final output sent to browser
DEBUG - 2014-04-20 23:34:43 --> Total execution time: 0.0163
DEBUG - 2014-04-20 23:34:43 --> Config Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Hooks Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Utf8 Class Initialized
DEBUG - 2014-04-20 23:34:43 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 23:34:43 --> URI Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Router Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Output Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Security Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Input Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 23:34:43 --> Language Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Loader Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Helper loaded: form_helper
DEBUG - 2014-04-20 23:34:43 --> Helper loaded: url_helper
DEBUG - 2014-04-20 23:34:43 --> Helper loaded: html_helper
DEBUG - 2014-04-20 23:34:43 --> Database Driver Class Initialized
ERROR - 2014-04-20 23:34:43 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 23:34:43 --> Session Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Helper loaded: string_helper
DEBUG - 2014-04-20 23:34:43 --> Session routines successfully run
DEBUG - 2014-04-20 23:34:43 --> Form Validation Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Controller Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Model Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Model Class Initialized
DEBUG - 2014-04-20 23:34:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 23:34:43 --> Encrypt Class Initialized
INFO  - 2014-04-20 23:34:43 --> after session initialization................
INFO  - 2014-04-20 23:34:43 --> after rays has been clicked.................
INFO  - 2014-04-20 23:34:43 --> last article id is 0
INFO  - 2014-04-20 23:34:43 --> The session id is ========>a708c2fb45b9de1860641a331cb3aa43 and the member id is =======>
INFO  - 2014-04-20 23:34:43 --> The session id is ========>a708c2fb45b9de1860641a331cb3aa43 and the member id is =======>
INFO  - 2014-04-20 23:34:43 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-20 23:34:43 --> 0 the guest only data>>>>>
INFO  - 2014-04-20 23:34:43 --> 0 the guest only data>> AFTER >>>#31
INFO  - 2014-04-20 23:34:43 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-20 23:34:43 --> 0 the guest only data>>>>>#31
INFO  - 2014-04-20 23:34:43 --> 0 the guest only data>> AFTER >>>#16
INFO  - 2014-04-20 23:34:43 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-20 23:34:43 --> 1 the guest only data>>>>>#16
INFO  - 2014-04-20 23:34:43 --> 1 the guest only data>> AFTER >>>#16
INFO  - 2014-04-20 23:34:43 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-20 23:34:43 --> 0 the guest only data>>>>>#16
INFO  - 2014-04-20 23:34:43 --> 0 the guest only data>> AFTER >>>#14
INFO  - 2014-04-20 23:34:43 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-20 23:34:43 --> 1 the guest only data>>>>>#14
INFO  - 2014-04-20 23:34:43 --> 1 the guest only data>> AFTER >>>#14
INFO  - 2014-04-20 23:34:43 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-20 23:34:43 --> 0 the guest only data>>>>>#14
INFO  - 2014-04-20 23:34:43 --> 0 the guest only data>> AFTER >>>#12
INFO  - 2014-04-20 23:34:43 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-20 23:34:43 --> 1 the guest only data>>>>>#12
INFO  - 2014-04-20 23:34:43 --> 1 the guest only data>> AFTER >>>#12
INFO  - 2014-04-20 23:34:43 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-20 23:34:43 --> 0 the guest only data>>>>>#12
INFO  - 2014-04-20 23:34:43 --> 0 the guest only data>> AFTER >>>#10
INFO  - 2014-04-20 23:34:43 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-20 23:34:43 --> 0 the guest only data>>>>>#10
INFO  - 2014-04-20 23:34:43 --> 0 the guest only data>> AFTER >>>#9
INFO  - 2014-04-20 23:34:43 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-20 23:34:43 --> 1 the guest only data>>>>>#9
INFO  - 2014-04-20 23:34:43 --> 1 the guest only data>> AFTER >>>#9
INFO  - 2014-04-20 23:34:43 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-20 23:34:43 --> 0 the guest only data>>>>>#9
INFO  - 2014-04-20 23:34:43 --> 0 the guest only data>> AFTER >>>#7
INFO  - 2014-04-20 23:34:43 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-20 23:34:43 --> 1 the guest only data>>>>>#7
INFO  - 2014-04-20 23:34:43 --> 1 the guest only data>> AFTER >>>#7
INFO  - 2014-04-20 23:34:43 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-20 23:34:43 --> 0 the guest only data>>>>>#7
INFO  - 2014-04-20 23:34:43 --> 0 the guest only data>> AFTER >>>#5
INFO  - 2014-04-20 23:34:43 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-20 23:34:43 --> 0 the guest only data>>>>>#5
INFO  - 2014-04-20 23:34:43 --> 0 the guest only data>> AFTER >>>#4
INFO  - 2014-04-20 23:34:43 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-20 23:34:43 --> 1 the guest only data>>>>>#4
INFO  - 2014-04-20 23:34:43 --> 1 the guest only data>> AFTER >>>#4
INFO  - 2014-04-20 23:34:43 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-20 23:34:43 --> 1 the guest only data>>>>>#4
INFO  - 2014-04-20 23:34:43 --> 1 the guest only data>> AFTER >>>#4
INFO  - 2014-04-20 23:34:43 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-20 23:34:43 --> 1 the guest only data>>>>>#4
INFO  - 2014-04-20 23:34:43 --> 1 the guest only data>> AFTER >>>#4
DEBUG - 2014-04-20 23:34:43 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2014-04-20 23:34:43 --> Final output sent to browser
DEBUG - 2014-04-20 23:34:43 --> Total execution time: 0.0352
DEBUG - 2014-04-20 23:34:51 --> Config Class Initialized
DEBUG - 2014-04-20 23:34:51 --> Hooks Class Initialized
DEBUG - 2014-04-20 23:34:51 --> Utf8 Class Initialized
DEBUG - 2014-04-20 23:34:51 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 23:34:51 --> URI Class Initialized
DEBUG - 2014-04-20 23:34:51 --> Router Class Initialized
DEBUG - 2014-04-20 23:34:51 --> Output Class Initialized
DEBUG - 2014-04-20 23:34:51 --> Security Class Initialized
DEBUG - 2014-04-20 23:34:51 --> Input Class Initialized
DEBUG - 2014-04-20 23:34:51 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 23:34:51 --> Language Class Initialized
DEBUG - 2014-04-20 23:34:51 --> Loader Class Initialized
DEBUG - 2014-04-20 23:34:51 --> Helper loaded: form_helper
DEBUG - 2014-04-20 23:34:51 --> Helper loaded: url_helper
DEBUG - 2014-04-20 23:34:51 --> Helper loaded: html_helper
DEBUG - 2014-04-20 23:34:51 --> Database Driver Class Initialized
ERROR - 2014-04-20 23:34:51 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 23:34:51 --> Session Class Initialized
DEBUG - 2014-04-20 23:34:51 --> Helper loaded: string_helper
DEBUG - 2014-04-20 23:34:51 --> Session routines successfully run
DEBUG - 2014-04-20 23:34:51 --> Form Validation Class Initialized
DEBUG - 2014-04-20 23:34:51 --> Controller Class Initialized
DEBUG - 2014-04-20 23:34:51 --> Model Class Initialized
DEBUG - 2014-04-20 23:34:51 --> Model Class Initialized
DEBUG - 2014-04-20 23:34:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 23:34:51 --> Encrypt Class Initialized
INFO  - 2014-04-20 23:34:51 --> after session initialization................
INFO  - 2014-04-20 23:34:51 --> inside rays login auth.............sys_admin/user_authorization/redirecttorays
INFO  - 2014-04-20 23:34:51 --> inside rays login auth.............sys_admin/user_authorization/redirecttorays
DEBUG - 2014-04-20 23:34:51 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2014-04-20 23:34:51 --> XSS Filtering completed
DEBUG - 2014-04-20 23:34:51 --> XSS Filtering completed
INFO  - 2014-04-20 23:34:51 --> login details ::::::::::===>SELECT `ld`.*
FROM (`logindetails` ld)
WHERE lower(ld.username) =  'emeka@swifta.com'
INFO  - 2014-04-20 23:34:51 --> before getting the relation of member............33
INFO  - 2014-04-20 23:34:51 --> registration complete and username set on userpage.................Emeka
INFO  - 2014-04-20 23:34:51 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  '33'
INFO  - 2014-04-20 23:34:51 --> last news id is 0
INFO  - 2014-04-20 23:34:51 --> SELECT a.id_article as id, a.title as newsletter_title, a.description as newsletter_description, a.guestonly as guestonly, a.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`article` a)
JOIN `member` m ON `a`.`memberid_member` = `m`.`id_member`
WHERE `a`.`id_article` <> 0
ORDER BY `a`.`id_article` desc
LIMIT 15
INFO  - 2014-04-20 23:34:51 --> after newsleters list has been clicked.................
INFO  - 2014-04-20 23:34:51 --> The session id is ========>a708c2fb45b9de1860641a331cb3aa43 and the member id is =======>33
INFO  - 2014-04-20 23:34:51 --> 0 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=31&article_type=newsletter_title
INFO  - 2014-04-20 23:34:51 --> 0 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=16&article_type=newsletter_title
INFO  - 2014-04-20 23:34:51 --> 1 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=15&article_type=newsletter_title
INFO  - 2014-04-20 23:34:51 --> 0 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=14&article_type=newsletter_title
INFO  - 2014-04-20 23:34:51 --> 1 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=13&article_type=newsletter_title
INFO  - 2014-04-20 23:34:51 --> 0 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=12&article_type=newsletter_title
INFO  - 2014-04-20 23:34:51 --> 1 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=11&article_type=newsletter_title
INFO  - 2014-04-20 23:34:51 --> 0 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=10&article_type=newsletter_title
INFO  - 2014-04-20 23:34:51 --> 0 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=9&article_type=newsletter_title
INFO  - 2014-04-20 23:34:51 --> 1 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=8&article_type=newsletter_title
INFO  - 2014-04-20 23:34:51 --> 0 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=7&article_type=newsletter_title
INFO  - 2014-04-20 23:34:51 --> 1 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=6&article_type=newsletter_title
INFO  - 2014-04-20 23:34:51 --> 0 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=5&article_type=newsletter_title
INFO  - 2014-04-20 23:34:51 --> 0 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=4&article_type=newsletter_title
INFO  - 2014-04-20 23:34:51 --> 1 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=3&article_type=newsletter_title
DEBUG - 2014-04-20 23:34:51 --> File loaded: ../pharmaray-application/views/articles.php
DEBUG - 2014-04-20 23:34:51 --> Final output sent to browser
DEBUG - 2014-04-20 23:34:51 --> Total execution time: 0.0458
DEBUG - 2014-04-20 23:34:52 --> Config Class Initialized
DEBUG - 2014-04-20 23:34:52 --> Hooks Class Initialized
DEBUG - 2014-04-20 23:34:52 --> Utf8 Class Initialized
DEBUG - 2014-04-20 23:34:52 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 23:34:52 --> URI Class Initialized
DEBUG - 2014-04-20 23:34:52 --> Router Class Initialized
DEBUG - 2014-04-20 23:34:52 --> Output Class Initialized
DEBUG - 2014-04-20 23:34:52 --> Security Class Initialized
DEBUG - 2014-04-20 23:34:52 --> Input Class Initialized
DEBUG - 2014-04-20 23:34:52 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 23:34:52 --> Language Class Initialized
DEBUG - 2014-04-20 23:34:52 --> Loader Class Initialized
DEBUG - 2014-04-20 23:34:52 --> Helper loaded: form_helper
DEBUG - 2014-04-20 23:34:52 --> Helper loaded: url_helper
DEBUG - 2014-04-20 23:34:52 --> Helper loaded: html_helper
DEBUG - 2014-04-20 23:34:52 --> Database Driver Class Initialized
ERROR - 2014-04-20 23:34:52 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 23:34:52 --> Session Class Initialized
DEBUG - 2014-04-20 23:34:52 --> Helper loaded: string_helper
DEBUG - 2014-04-20 23:34:52 --> Session routines successfully run
DEBUG - 2014-04-20 23:34:52 --> Form Validation Class Initialized
DEBUG - 2014-04-20 23:34:52 --> Controller Class Initialized
DEBUG - 2014-04-20 23:34:52 --> Model Class Initialized
DEBUG - 2014-04-20 23:34:52 --> Model Class Initialized
DEBUG - 2014-04-20 23:34:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 23:34:52 --> Encrypt Class Initialized
INFO  - 2014-04-20 23:34:52 --> after session initialization................
INFO  - 2014-04-20 23:34:52 --> after internships list has been clicked.................
INFO  - 2014-04-20 23:34:52 --> inside retrieving locations 
INFO  - 2014-04-20 23:34:52 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-20 23:34:52 --> inside retrieving internship firms 
INFO  - 2014-04-20 23:34:52 --> SELECT `intf`.`id_internshipfirm` as id, `intf`.`name` as name
FROM (`internship_firm` intf)
ORDER BY `intf`.`name`
INFO  - 2014-04-20 23:34:52 --> inside retrieving internship duration 
INFO  - 2014-04-20 23:34:52 --> SELECT `intd`.`id_internshipduration` as id, `intd`.`name` as name
FROM (`internship_duration` intd)
ORDER BY `intd`.`id_internshipduration`
INFO  - 2014-04-20 23:34:52 --> inside retrieving internship specialization 
INFO  - 2014-04-20 23:34:52 --> SELECT `ints`.`id_internshipspecialization` as id, `ints`.`name` as name
FROM (`internship_specialization` ints)
ORDER BY `ints`.`name`
INFO  - 2014-04-20 23:34:52 --> last intern id is 0
INFO  - 2014-04-20 23:34:52 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` <> 0
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` asc
LIMIT 10
INFO  - 2014-04-20 23:34:52 --> The session id is ========>a708c2fb45b9de1860641a331cb3aa43 and the member id is =======>33
DEBUG - 2014-04-20 23:34:52 --> File loaded: ../pharmaray-application/views/internships.php
DEBUG - 2014-04-20 23:34:52 --> Final output sent to browser
DEBUG - 2014-04-20 23:34:52 --> Total execution time: 0.0421
DEBUG - 2014-04-20 23:34:53 --> Config Class Initialized
DEBUG - 2014-04-20 23:34:53 --> Hooks Class Initialized
DEBUG - 2014-04-20 23:34:53 --> Utf8 Class Initialized
DEBUG - 2014-04-20 23:34:53 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 23:34:53 --> URI Class Initialized
DEBUG - 2014-04-20 23:34:53 --> Router Class Initialized
DEBUG - 2014-04-20 23:34:53 --> Output Class Initialized
DEBUG - 2014-04-20 23:34:53 --> Security Class Initialized
DEBUG - 2014-04-20 23:34:53 --> Input Class Initialized
DEBUG - 2014-04-20 23:34:53 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 23:34:53 --> Language Class Initialized
DEBUG - 2014-04-20 23:34:53 --> Loader Class Initialized
DEBUG - 2014-04-20 23:34:53 --> Helper loaded: form_helper
DEBUG - 2014-04-20 23:34:53 --> Helper loaded: url_helper
DEBUG - 2014-04-20 23:34:53 --> Helper loaded: html_helper
DEBUG - 2014-04-20 23:34:53 --> Database Driver Class Initialized
ERROR - 2014-04-20 23:34:53 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 23:34:53 --> Session Class Initialized
DEBUG - 2014-04-20 23:34:53 --> Helper loaded: string_helper
DEBUG - 2014-04-20 23:34:53 --> Session routines successfully run
DEBUG - 2014-04-20 23:34:53 --> Form Validation Class Initialized
DEBUG - 2014-04-20 23:34:53 --> Controller Class Initialized
DEBUG - 2014-04-20 23:34:53 --> Model Class Initialized
DEBUG - 2014-04-20 23:34:53 --> Model Class Initialized
DEBUG - 2014-04-20 23:34:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 23:34:53 --> Encrypt Class Initialized
INFO  - 2014-04-20 23:34:53 --> after session initialization................
INFO  - 2014-04-20 23:34:53 --> The Where query :::::::>>>i.id_internshipopening >11
INFO  - 2014-04-20 23:34:53 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` >11
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` asc
LIMIT 4
DEBUG - 2014-04-20 23:34:53 --> Final output sent to browser
DEBUG - 2014-04-20 23:34:53 --> Total execution time: 0.0416
DEBUG - 2014-04-20 23:35:00 --> Config Class Initialized
DEBUG - 2014-04-20 23:35:00 --> Hooks Class Initialized
DEBUG - 2014-04-20 23:35:00 --> Utf8 Class Initialized
DEBUG - 2014-04-20 23:35:00 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 23:35:00 --> URI Class Initialized
DEBUG - 2014-04-20 23:35:00 --> Router Class Initialized
DEBUG - 2014-04-20 23:35:00 --> Output Class Initialized
DEBUG - 2014-04-20 23:35:00 --> Security Class Initialized
DEBUG - 2014-04-20 23:35:00 --> Input Class Initialized
DEBUG - 2014-04-20 23:35:00 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 23:35:00 --> Language Class Initialized
DEBUG - 2014-04-20 23:35:00 --> Loader Class Initialized
DEBUG - 2014-04-20 23:35:00 --> Helper loaded: form_helper
DEBUG - 2014-04-20 23:35:00 --> Helper loaded: url_helper
DEBUG - 2014-04-20 23:35:00 --> Helper loaded: html_helper
DEBUG - 2014-04-20 23:35:00 --> Database Driver Class Initialized
ERROR - 2014-04-20 23:35:00 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 23:35:00 --> Session Class Initialized
DEBUG - 2014-04-20 23:35:00 --> Helper loaded: string_helper
DEBUG - 2014-04-20 23:35:00 --> Session routines successfully run
DEBUG - 2014-04-20 23:35:00 --> Form Validation Class Initialized
DEBUG - 2014-04-20 23:35:00 --> Controller Class Initialized
DEBUG - 2014-04-20 23:35:00 --> Model Class Initialized
DEBUG - 2014-04-20 23:35:00 --> Model Class Initialized
DEBUG - 2014-04-20 23:35:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 23:35:00 --> Encrypt Class Initialized
INFO  - 2014-04-20 23:35:00 --> after session initialization................
INFO  - 2014-04-20 23:35:00 --> The Where query :::::::>>>i.id_internshipopening >11
INFO  - 2014-04-20 23:35:00 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` >11
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` asc
LIMIT 4
DEBUG - 2014-04-20 23:35:00 --> Final output sent to browser
DEBUG - 2014-04-20 23:35:00 --> Total execution time: 0.0351
DEBUG - 2014-04-20 23:36:29 --> Config Class Initialized
DEBUG - 2014-04-20 23:36:29 --> Hooks Class Initialized
DEBUG - 2014-04-20 23:36:29 --> Utf8 Class Initialized
DEBUG - 2014-04-20 23:36:29 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 23:36:29 --> URI Class Initialized
DEBUG - 2014-04-20 23:36:29 --> Router Class Initialized
DEBUG - 2014-04-20 23:36:29 --> Output Class Initialized
DEBUG - 2014-04-20 23:36:29 --> Security Class Initialized
DEBUG - 2014-04-20 23:36:29 --> Input Class Initialized
DEBUG - 2014-04-20 23:36:29 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 23:36:29 --> Language Class Initialized
DEBUG - 2014-04-20 23:36:29 --> Loader Class Initialized
DEBUG - 2014-04-20 23:36:29 --> Helper loaded: form_helper
DEBUG - 2014-04-20 23:36:29 --> Helper loaded: url_helper
DEBUG - 2014-04-20 23:36:29 --> Helper loaded: html_helper
DEBUG - 2014-04-20 23:36:29 --> Database Driver Class Initialized
ERROR - 2014-04-20 23:36:29 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 23:36:29 --> Session Class Initialized
DEBUG - 2014-04-20 23:36:29 --> Helper loaded: string_helper
DEBUG - 2014-04-20 23:36:29 --> Session routines successfully run
DEBUG - 2014-04-20 23:36:29 --> Form Validation Class Initialized
DEBUG - 2014-04-20 23:36:29 --> Controller Class Initialized
DEBUG - 2014-04-20 23:36:29 --> Model Class Initialized
DEBUG - 2014-04-20 23:36:29 --> Model Class Initialized
DEBUG - 2014-04-20 23:36:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 23:36:29 --> Encrypt Class Initialized
INFO  - 2014-04-20 23:36:29 --> after session initialization................
INFO  - 2014-04-20 23:36:29 --> after internships list has been clicked.................
INFO  - 2014-04-20 23:36:29 --> inside retrieving locations 
INFO  - 2014-04-20 23:36:29 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-20 23:36:29 --> inside retrieving internship firms 
INFO  - 2014-04-20 23:36:29 --> SELECT `intf`.`id_internshipfirm` as id, `intf`.`name` as name
FROM (`internship_firm` intf)
ORDER BY `intf`.`name`
INFO  - 2014-04-20 23:36:29 --> inside retrieving internship duration 
INFO  - 2014-04-20 23:36:29 --> SELECT `intd`.`id_internshipduration` as id, `intd`.`name` as name
FROM (`internship_duration` intd)
ORDER BY `intd`.`id_internshipduration`
INFO  - 2014-04-20 23:36:29 --> inside retrieving internship specialization 
INFO  - 2014-04-20 23:36:29 --> SELECT `ints`.`id_internshipspecialization` as id, `ints`.`name` as name
FROM (`internship_specialization` ints)
ORDER BY `ints`.`name`
INFO  - 2014-04-20 23:36:29 --> last intern id is 0
INFO  - 2014-04-20 23:36:29 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` <> 0
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` asc
LIMIT 10
INFO  - 2014-04-20 23:36:29 --> The session id is ========>a708c2fb45b9de1860641a331cb3aa43 and the member id is =======>33
DEBUG - 2014-04-20 23:36:29 --> File loaded: ../pharmaray-application/views/internships.php
DEBUG - 2014-04-20 23:36:29 --> Final output sent to browser
DEBUG - 2014-04-20 23:36:29 --> Total execution time: 0.0339
DEBUG - 2014-04-20 23:36:30 --> Config Class Initialized
DEBUG - 2014-04-20 23:36:30 --> Hooks Class Initialized
DEBUG - 2014-04-20 23:36:30 --> Utf8 Class Initialized
DEBUG - 2014-04-20 23:36:30 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 23:36:30 --> URI Class Initialized
DEBUG - 2014-04-20 23:36:30 --> Router Class Initialized
DEBUG - 2014-04-20 23:36:30 --> Output Class Initialized
DEBUG - 2014-04-20 23:36:30 --> Security Class Initialized
DEBUG - 2014-04-20 23:36:30 --> Input Class Initialized
DEBUG - 2014-04-20 23:36:30 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 23:36:30 --> Language Class Initialized
DEBUG - 2014-04-20 23:36:30 --> Loader Class Initialized
DEBUG - 2014-04-20 23:36:30 --> Helper loaded: form_helper
DEBUG - 2014-04-20 23:36:30 --> Helper loaded: url_helper
DEBUG - 2014-04-20 23:36:30 --> Helper loaded: html_helper
DEBUG - 2014-04-20 23:36:30 --> Database Driver Class Initialized
ERROR - 2014-04-20 23:36:30 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 23:36:30 --> Session Class Initialized
DEBUG - 2014-04-20 23:36:30 --> Helper loaded: string_helper
DEBUG - 2014-04-20 23:36:30 --> Session routines successfully run
DEBUG - 2014-04-20 23:36:30 --> Form Validation Class Initialized
DEBUG - 2014-04-20 23:36:30 --> Controller Class Initialized
DEBUG - 2014-04-20 23:36:30 --> Model Class Initialized
DEBUG - 2014-04-20 23:36:30 --> Model Class Initialized
DEBUG - 2014-04-20 23:36:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 23:36:30 --> Encrypt Class Initialized
INFO  - 2014-04-20 23:36:30 --> after session initialization................
INFO  - 2014-04-20 23:36:30 --> after internships list has been clicked.................
INFO  - 2014-04-20 23:36:30 --> inside retrieving locations 
INFO  - 2014-04-20 23:36:30 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-20 23:36:30 --> inside retrieving internship firms 
INFO  - 2014-04-20 23:36:30 --> SELECT `intf`.`id_internshipfirm` as id, `intf`.`name` as name
FROM (`internship_firm` intf)
ORDER BY `intf`.`name`
INFO  - 2014-04-20 23:36:30 --> inside retrieving internship duration 
INFO  - 2014-04-20 23:36:30 --> SELECT `intd`.`id_internshipduration` as id, `intd`.`name` as name
FROM (`internship_duration` intd)
ORDER BY `intd`.`id_internshipduration`
INFO  - 2014-04-20 23:36:30 --> inside retrieving internship specialization 
INFO  - 2014-04-20 23:36:30 --> SELECT `ints`.`id_internshipspecialization` as id, `ints`.`name` as name
FROM (`internship_specialization` ints)
ORDER BY `ints`.`name`
INFO  - 2014-04-20 23:36:30 --> last intern id is 0
INFO  - 2014-04-20 23:36:30 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` <> 0
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` asc
LIMIT 10
INFO  - 2014-04-20 23:36:30 --> The session id is ========>a708c2fb45b9de1860641a331cb3aa43 and the member id is =======>33
DEBUG - 2014-04-20 23:36:30 --> File loaded: ../pharmaray-application/views/internships.php
DEBUG - 2014-04-20 23:36:30 --> Final output sent to browser
DEBUG - 2014-04-20 23:36:30 --> Total execution time: 0.0313
DEBUG - 2014-04-20 23:36:32 --> Config Class Initialized
DEBUG - 2014-04-20 23:36:32 --> Hooks Class Initialized
DEBUG - 2014-04-20 23:36:32 --> Utf8 Class Initialized
DEBUG - 2014-04-20 23:36:32 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 23:36:32 --> URI Class Initialized
DEBUG - 2014-04-20 23:36:32 --> Router Class Initialized
DEBUG - 2014-04-20 23:36:32 --> Output Class Initialized
DEBUG - 2014-04-20 23:36:32 --> Security Class Initialized
DEBUG - 2014-04-20 23:36:32 --> Input Class Initialized
DEBUG - 2014-04-20 23:36:32 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 23:36:32 --> Language Class Initialized
DEBUG - 2014-04-20 23:36:32 --> Loader Class Initialized
DEBUG - 2014-04-20 23:36:32 --> Helper loaded: form_helper
DEBUG - 2014-04-20 23:36:32 --> Helper loaded: url_helper
DEBUG - 2014-04-20 23:36:32 --> Helper loaded: html_helper
DEBUG - 2014-04-20 23:36:32 --> Database Driver Class Initialized
ERROR - 2014-04-20 23:36:32 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 23:36:32 --> Session Class Initialized
DEBUG - 2014-04-20 23:36:32 --> Helper loaded: string_helper
DEBUG - 2014-04-20 23:36:32 --> Session routines successfully run
DEBUG - 2014-04-20 23:36:32 --> Form Validation Class Initialized
DEBUG - 2014-04-20 23:36:32 --> Controller Class Initialized
DEBUG - 2014-04-20 23:36:32 --> Model Class Initialized
DEBUG - 2014-04-20 23:36:32 --> Model Class Initialized
DEBUG - 2014-04-20 23:36:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 23:36:32 --> Encrypt Class Initialized
INFO  - 2014-04-20 23:36:32 --> after session initialization................
INFO  - 2014-04-20 23:36:32 --> after internships list has been clicked.................
INFO  - 2014-04-20 23:36:32 --> inside retrieving locations 
INFO  - 2014-04-20 23:36:32 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-20 23:36:32 --> inside retrieving internship firms 
INFO  - 2014-04-20 23:36:32 --> SELECT `intf`.`id_internshipfirm` as id, `intf`.`name` as name
FROM (`internship_firm` intf)
ORDER BY `intf`.`name`
INFO  - 2014-04-20 23:36:32 --> inside retrieving internship duration 
INFO  - 2014-04-20 23:36:32 --> SELECT `intd`.`id_internshipduration` as id, `intd`.`name` as name
FROM (`internship_duration` intd)
ORDER BY `intd`.`id_internshipduration`
INFO  - 2014-04-20 23:36:32 --> inside retrieving internship specialization 
INFO  - 2014-04-20 23:36:32 --> SELECT `ints`.`id_internshipspecialization` as id, `ints`.`name` as name
FROM (`internship_specialization` ints)
ORDER BY `ints`.`name`
INFO  - 2014-04-20 23:36:32 --> last intern id is 0
INFO  - 2014-04-20 23:36:32 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` <> 0
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` asc
LIMIT 10
INFO  - 2014-04-20 23:36:32 --> The session id is ========>a708c2fb45b9de1860641a331cb3aa43 and the member id is =======>33
DEBUG - 2014-04-20 23:36:32 --> File loaded: ../pharmaray-application/views/internships.php
DEBUG - 2014-04-20 23:36:32 --> Final output sent to browser
DEBUG - 2014-04-20 23:36:32 --> Total execution time: 0.0356
DEBUG - 2014-04-20 23:36:33 --> Config Class Initialized
DEBUG - 2014-04-20 23:36:33 --> Hooks Class Initialized
DEBUG - 2014-04-20 23:36:33 --> Utf8 Class Initialized
DEBUG - 2014-04-20 23:36:33 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 23:36:33 --> URI Class Initialized
DEBUG - 2014-04-20 23:36:33 --> Router Class Initialized
DEBUG - 2014-04-20 23:36:33 --> Output Class Initialized
DEBUG - 2014-04-20 23:36:33 --> Security Class Initialized
DEBUG - 2014-04-20 23:36:33 --> Input Class Initialized
DEBUG - 2014-04-20 23:36:33 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 23:36:33 --> Language Class Initialized
DEBUG - 2014-04-20 23:36:33 --> Loader Class Initialized
DEBUG - 2014-04-20 23:36:33 --> Helper loaded: form_helper
DEBUG - 2014-04-20 23:36:33 --> Helper loaded: url_helper
DEBUG - 2014-04-20 23:36:33 --> Helper loaded: html_helper
DEBUG - 2014-04-20 23:36:33 --> Database Driver Class Initialized
ERROR - 2014-04-20 23:36:33 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 23:36:33 --> Session Class Initialized
DEBUG - 2014-04-20 23:36:33 --> Helper loaded: string_helper
DEBUG - 2014-04-20 23:36:33 --> Session routines successfully run
DEBUG - 2014-04-20 23:36:33 --> Form Validation Class Initialized
DEBUG - 2014-04-20 23:36:33 --> Controller Class Initialized
DEBUG - 2014-04-20 23:36:33 --> Model Class Initialized
DEBUG - 2014-04-20 23:36:33 --> Model Class Initialized
DEBUG - 2014-04-20 23:36:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 23:36:33 --> Encrypt Class Initialized
INFO  - 2014-04-20 23:36:33 --> after session initialization................
INFO  - 2014-04-20 23:36:33 --> The Where query :::::::>>>i.id_internshipopening >11
INFO  - 2014-04-20 23:36:33 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` >11
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` asc
LIMIT 4
DEBUG - 2014-04-20 23:36:33 --> Final output sent to browser
DEBUG - 2014-04-20 23:36:33 --> Total execution time: 0.0273
DEBUG - 2014-04-20 23:36:39 --> Config Class Initialized
DEBUG - 2014-04-20 23:36:39 --> Hooks Class Initialized
DEBUG - 2014-04-20 23:36:39 --> Utf8 Class Initialized
DEBUG - 2014-04-20 23:36:39 --> UTF-8 Support Enabled
DEBUG - 2014-04-20 23:36:39 --> URI Class Initialized
DEBUG - 2014-04-20 23:36:39 --> Router Class Initialized
DEBUG - 2014-04-20 23:36:39 --> Output Class Initialized
DEBUG - 2014-04-20 23:36:39 --> Security Class Initialized
DEBUG - 2014-04-20 23:36:39 --> Input Class Initialized
DEBUG - 2014-04-20 23:36:39 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-20 23:36:39 --> Language Class Initialized
DEBUG - 2014-04-20 23:36:39 --> Loader Class Initialized
DEBUG - 2014-04-20 23:36:39 --> Helper loaded: form_helper
DEBUG - 2014-04-20 23:36:39 --> Helper loaded: url_helper
DEBUG - 2014-04-20 23:36:39 --> Helper loaded: html_helper
DEBUG - 2014-04-20 23:36:39 --> Database Driver Class Initialized
ERROR - 2014-04-20 23:36:39 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-20 23:36:39 --> Session Class Initialized
DEBUG - 2014-04-20 23:36:39 --> Helper loaded: string_helper
DEBUG - 2014-04-20 23:36:39 --> Session routines successfully run
DEBUG - 2014-04-20 23:36:39 --> Form Validation Class Initialized
DEBUG - 2014-04-20 23:36:39 --> Controller Class Initialized
DEBUG - 2014-04-20 23:36:39 --> Model Class Initialized
DEBUG - 2014-04-20 23:36:39 --> Model Class Initialized
DEBUG - 2014-04-20 23:36:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-20 23:36:39 --> Encrypt Class Initialized
INFO  - 2014-04-20 23:36:39 --> after session initialization................
INFO  - 2014-04-20 23:36:39 --> The Where query :::::::>>>i.id_internshipopening >11
INFO  - 2014-04-20 23:36:39 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internship_duration` ind ON `ind`.`id_internshipduration` = `i`.`duration_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` >11
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` asc
LIMIT 4
DEBUG - 2014-04-20 23:36:39 --> Final output sent to browser
DEBUG - 2014-04-20 23:36:39 --> Total execution time: 0.0352
