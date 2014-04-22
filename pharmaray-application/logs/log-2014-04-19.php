<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2014-04-19 00:57:25 --> Config Class Initialized
DEBUG - 2014-04-19 00:57:25 --> Hooks Class Initialized
DEBUG - 2014-04-19 00:57:25 --> Utf8 Class Initialized
DEBUG - 2014-04-19 00:57:25 --> UTF-8 Support Enabled
DEBUG - 2014-04-19 00:57:25 --> URI Class Initialized
DEBUG - 2014-04-19 00:57:25 --> Router Class Initialized
DEBUG - 2014-04-19 00:57:25 --> Output Class Initialized
DEBUG - 2014-04-19 00:57:25 --> Security Class Initialized
DEBUG - 2014-04-19 00:57:25 --> Input Class Initialized
DEBUG - 2014-04-19 00:57:25 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-19 00:57:25 --> Language Class Initialized
DEBUG - 2014-04-19 00:57:25 --> Loader Class Initialized
DEBUG - 2014-04-19 00:57:25 --> Helper loaded: form_helper
DEBUG - 2014-04-19 00:57:25 --> Helper loaded: url_helper
DEBUG - 2014-04-19 00:57:25 --> Helper loaded: html_helper
DEBUG - 2014-04-19 00:57:25 --> Database Driver Class Initialized
ERROR - 2014-04-19 00:57:25 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-19 00:57:25 --> Session Class Initialized
DEBUG - 2014-04-19 00:57:25 --> Helper loaded: string_helper
DEBUG - 2014-04-19 00:57:25 --> A session cookie was not found.
DEBUG - 2014-04-19 00:57:25 --> Session routines successfully run
DEBUG - 2014-04-19 00:57:25 --> Form Validation Class Initialized
DEBUG - 2014-04-19 00:57:25 --> Controller Class Initialized
DEBUG - 2014-04-19 00:57:25 --> Model Class Initialized
DEBUG - 2014-04-19 00:57:25 --> Model Class Initialized
DEBUG - 2014-04-19 00:57:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-19 00:57:25 --> Encrypt Class Initialized
INFO  - 2014-04-19 00:57:25 --> after session initialization................
INFO  - 2014-04-19 00:57:25 --> inside rays login auth.............sys_admin/user_authorization/redirecttorays
INFO  - 2014-04-19 00:57:25 --> inside rays login auth.............sys_admin/user_authorization/redirecttorays
DEBUG - 2014-04-19 00:57:25 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2014-04-19 00:57:25 --> XSS Filtering completed
DEBUG - 2014-04-19 00:57:25 --> XSS Filtering completed
INFO  - 2014-04-19 00:57:25 --> login details ::::::::::===>SELECT `ld`.*
FROM (`logindetails` ld)
WHERE lower(ld.username) =  'emeka@swifta.com'
INFO  - 2014-04-19 00:57:25 --> before getting the relation of member............33
INFO  - 2014-04-19 00:57:25 --> registration complete and username set on userpage.................Emeka
INFO  - 2014-04-19 00:57:25 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  '33'
INFO  - 2014-04-19 00:57:25 --> last news id is 0
INFO  - 2014-04-19 00:57:25 --> SELECT a.id_article as id, a.title as newsletter_title, a.description as newsletter_description, a.guestonly as guestonly, a.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`article` a)
JOIN `member` m ON `a`.`memberid_member` = `m`.`id_member`
WHERE `a`.`id_article` <> 0
ORDER BY `a`.`id_article` desc
LIMIT 15
INFO  - 2014-04-19 00:57:25 --> after newsleters list has been clicked.................
INFO  - 2014-04-19 00:57:25 --> The session id is ========>31b6af115df65b89edf9382bb0ec2688 and the member id is =======>33
INFO  - 2014-04-19 00:57:25 --> 0 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=31&article_type=newsletter_title
INFO  - 2014-04-19 00:57:25 --> 0 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=16&article_type=newsletter_title
INFO  - 2014-04-19 00:57:25 --> 1 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=15&article_type=newsletter_title
INFO  - 2014-04-19 00:57:25 --> 0 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=14&article_type=newsletter_title
INFO  - 2014-04-19 00:57:25 --> 1 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=13&article_type=newsletter_title
INFO  - 2014-04-19 00:57:25 --> 0 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=12&article_type=newsletter_title
INFO  - 2014-04-19 00:57:25 --> 1 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=11&article_type=newsletter_title
INFO  - 2014-04-19 00:57:25 --> 0 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=10&article_type=newsletter_title
INFO  - 2014-04-19 00:57:25 --> 0 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=9&article_type=newsletter_title
INFO  - 2014-04-19 00:57:25 --> 1 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=8&article_type=newsletter_title
INFO  - 2014-04-19 00:57:25 --> 0 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=7&article_type=newsletter_title
INFO  - 2014-04-19 00:57:25 --> 1 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=6&article_type=newsletter_title
INFO  - 2014-04-19 00:57:25 --> 0 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=5&article_type=newsletter_title
INFO  - 2014-04-19 00:57:25 --> 0 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=4&article_type=newsletter_title
INFO  - 2014-04-19 00:57:25 --> 1 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=3&article_type=newsletter_title
DEBUG - 2014-04-19 00:57:25 --> File loaded: ../pharmaray-application/views/articles.php
DEBUG - 2014-04-19 00:57:25 --> Final output sent to browser
DEBUG - 2014-04-19 00:57:25 --> Total execution time: 0.0394
DEBUG - 2014-04-19 00:59:44 --> Config Class Initialized
DEBUG - 2014-04-19 00:59:44 --> Hooks Class Initialized
DEBUG - 2014-04-19 00:59:44 --> Utf8 Class Initialized
DEBUG - 2014-04-19 00:59:44 --> UTF-8 Support Enabled
DEBUG - 2014-04-19 00:59:44 --> URI Class Initialized
DEBUG - 2014-04-19 00:59:44 --> Router Class Initialized
DEBUG - 2014-04-19 00:59:44 --> Output Class Initialized
DEBUG - 2014-04-19 00:59:44 --> Security Class Initialized
DEBUG - 2014-04-19 00:59:44 --> Input Class Initialized
DEBUG - 2014-04-19 00:59:44 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-19 00:59:44 --> Language Class Initialized
DEBUG - 2014-04-19 00:59:44 --> Loader Class Initialized
DEBUG - 2014-04-19 00:59:44 --> Helper loaded: form_helper
DEBUG - 2014-04-19 00:59:44 --> Helper loaded: url_helper
DEBUG - 2014-04-19 00:59:44 --> Helper loaded: html_helper
DEBUG - 2014-04-19 00:59:44 --> Database Driver Class Initialized
ERROR - 2014-04-19 00:59:44 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-19 00:59:44 --> Session Class Initialized
DEBUG - 2014-04-19 00:59:44 --> Helper loaded: string_helper
DEBUG - 2014-04-19 00:59:44 --> Session routines successfully run
DEBUG - 2014-04-19 00:59:44 --> Form Validation Class Initialized
DEBUG - 2014-04-19 00:59:44 --> Controller Class Initialized
DEBUG - 2014-04-19 00:59:44 --> Model Class Initialized
DEBUG - 2014-04-19 00:59:44 --> Model Class Initialized
DEBUG - 2014-04-19 00:59:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-19 00:59:44 --> Encrypt Class Initialized
INFO  - 2014-04-19 00:59:44 --> after session initialization................
INFO  - 2014-04-19 00:59:44 --> after internships list has been clicked.................
INFO  - 2014-04-19 00:59:44 --> inside retrieving locations 
INFO  - 2014-04-19 00:59:44 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-19 00:59:44 --> inside retrieving internship firms 
INFO  - 2014-04-19 00:59:44 --> SELECT `intf`.`id_internshipfirm` as id, `intf`.`name` as name
FROM (`internship_firm` intf)
ORDER BY `intf`.`name`
INFO  - 2014-04-19 00:59:44 --> inside retrieving internship duration 
INFO  - 2014-04-19 00:59:44 --> SELECT `intd`.`id_internshipduration` as id, `intd`.`name` as name
FROM (`internship_duration` intd)
ORDER BY `intd`.`id_internshipduration`
INFO  - 2014-04-19 00:59:44 --> inside retrieving internship specialization 
INFO  - 2014-04-19 00:59:44 --> SELECT `ints`.`id_internshipspecialization` as id, `ints`.`name` as name
FROM (`internship_specialization` ints)
ORDER BY `ints`.`name`
INFO  - 2014-04-19 00:59:44 --> last intern id is 0
INFO  - 2014-04-19 00:59:44 --> The session id is ========>31b6af115df65b89edf9382bb0ec2688 and the member id is =======>33
DEBUG - 2014-04-19 00:59:44 --> File loaded: ../pharmaray-application/views/internships.php
DEBUG - 2014-04-19 00:59:44 --> Final output sent to browser
DEBUG - 2014-04-19 00:59:44 --> Total execution time: 0.0366
DEBUG - 2014-04-19 00:59:59 --> Config Class Initialized
DEBUG - 2014-04-19 00:59:59 --> Hooks Class Initialized
DEBUG - 2014-04-19 00:59:59 --> Utf8 Class Initialized
DEBUG - 2014-04-19 00:59:59 --> UTF-8 Support Enabled
DEBUG - 2014-04-19 00:59:59 --> URI Class Initialized
DEBUG - 2014-04-19 00:59:59 --> Router Class Initialized
DEBUG - 2014-04-19 00:59:59 --> Output Class Initialized
DEBUG - 2014-04-19 00:59:59 --> Security Class Initialized
DEBUG - 2014-04-19 00:59:59 --> Input Class Initialized
DEBUG - 2014-04-19 00:59:59 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-19 00:59:59 --> Language Class Initialized
DEBUG - 2014-04-19 00:59:59 --> Loader Class Initialized
DEBUG - 2014-04-19 00:59:59 --> Helper loaded: form_helper
DEBUG - 2014-04-19 00:59:59 --> Helper loaded: url_helper
DEBUG - 2014-04-19 00:59:59 --> Helper loaded: html_helper
DEBUG - 2014-04-19 00:59:59 --> Database Driver Class Initialized
ERROR - 2014-04-19 00:59:59 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-19 00:59:59 --> Session Class Initialized
DEBUG - 2014-04-19 00:59:59 --> Helper loaded: string_helper
DEBUG - 2014-04-19 00:59:59 --> Session routines successfully run
DEBUG - 2014-04-19 00:59:59 --> Form Validation Class Initialized
DEBUG - 2014-04-19 00:59:59 --> Controller Class Initialized
DEBUG - 2014-04-19 00:59:59 --> Model Class Initialized
DEBUG - 2014-04-19 00:59:59 --> Model Class Initialized
DEBUG - 2014-04-19 00:59:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-19 00:59:59 --> Encrypt Class Initialized
INFO  - 2014-04-19 00:59:59 --> after session initialization................
DEBUG - 2014-04-19 00:59:59 --> Final output sent to browser
DEBUG - 2014-04-19 00:59:59 --> Total execution time: 0.0294
DEBUG - 2014-04-19 01:00:45 --> Config Class Initialized
DEBUG - 2014-04-19 01:00:45 --> Hooks Class Initialized
DEBUG - 2014-04-19 01:00:45 --> Utf8 Class Initialized
DEBUG - 2014-04-19 01:00:45 --> UTF-8 Support Enabled
DEBUG - 2014-04-19 01:00:45 --> URI Class Initialized
DEBUG - 2014-04-19 01:00:45 --> Router Class Initialized
DEBUG - 2014-04-19 01:00:45 --> Output Class Initialized
DEBUG - 2014-04-19 01:00:45 --> Security Class Initialized
DEBUG - 2014-04-19 01:00:45 --> Input Class Initialized
DEBUG - 2014-04-19 01:00:45 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-19 01:00:45 --> Language Class Initialized
DEBUG - 2014-04-19 01:00:45 --> Loader Class Initialized
DEBUG - 2014-04-19 01:00:45 --> Helper loaded: form_helper
DEBUG - 2014-04-19 01:00:45 --> Helper loaded: url_helper
DEBUG - 2014-04-19 01:00:45 --> Helper loaded: html_helper
DEBUG - 2014-04-19 01:00:45 --> Database Driver Class Initialized
ERROR - 2014-04-19 01:00:45 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-19 01:00:45 --> Session Class Initialized
DEBUG - 2014-04-19 01:00:45 --> Helper loaded: string_helper
DEBUG - 2014-04-19 01:00:45 --> Session routines successfully run
DEBUG - 2014-04-19 01:00:45 --> Form Validation Class Initialized
DEBUG - 2014-04-19 01:00:45 --> Controller Class Initialized
DEBUG - 2014-04-19 01:00:45 --> Model Class Initialized
DEBUG - 2014-04-19 01:00:45 --> Model Class Initialized
DEBUG - 2014-04-19 01:00:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-19 01:00:45 --> Encrypt Class Initialized
INFO  - 2014-04-19 01:00:45 --> after session initialization................
INFO  - 2014-04-19 01:00:45 --> after internships list has been clicked.................
INFO  - 2014-04-19 01:00:45 --> inside retrieving locations 
INFO  - 2014-04-19 01:00:45 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-19 01:00:45 --> inside retrieving internship firms 
INFO  - 2014-04-19 01:00:45 --> SELECT `intf`.`id_internshipfirm` as id, `intf`.`name` as name
FROM (`internship_firm` intf)
ORDER BY `intf`.`name`
INFO  - 2014-04-19 01:00:45 --> inside retrieving internship duration 
INFO  - 2014-04-19 01:00:45 --> SELECT `intd`.`id_internshipduration` as id, `intd`.`name` as name
FROM (`internship_duration` intd)
ORDER BY `intd`.`id_internshipduration`
INFO  - 2014-04-19 01:00:45 --> inside retrieving internship specialization 
INFO  - 2014-04-19 01:00:45 --> SELECT `ints`.`id_internshipspecialization` as id, `ints`.`name` as name
FROM (`internship_specialization` ints)
ORDER BY `ints`.`name`
INFO  - 2014-04-19 01:00:45 --> last intern id is 0
INFO  - 2014-04-19 01:00:45 --> The session id is ========>31b6af115df65b89edf9382bb0ec2688 and the member id is =======>33
DEBUG - 2014-04-19 01:00:45 --> File loaded: ../pharmaray-application/views/internships.php
DEBUG - 2014-04-19 01:00:45 --> Final output sent to browser
DEBUG - 2014-04-19 01:00:45 --> Total execution time: 0.0366
DEBUG - 2014-04-19 01:00:58 --> Config Class Initialized
DEBUG - 2014-04-19 01:00:58 --> Hooks Class Initialized
DEBUG - 2014-04-19 01:00:58 --> Utf8 Class Initialized
DEBUG - 2014-04-19 01:00:58 --> UTF-8 Support Enabled
DEBUG - 2014-04-19 01:00:58 --> URI Class Initialized
DEBUG - 2014-04-19 01:00:58 --> Router Class Initialized
DEBUG - 2014-04-19 01:00:58 --> Output Class Initialized
DEBUG - 2014-04-19 01:00:58 --> Security Class Initialized
DEBUG - 2014-04-19 01:00:58 --> Input Class Initialized
DEBUG - 2014-04-19 01:00:58 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-19 01:00:58 --> Language Class Initialized
DEBUG - 2014-04-19 01:00:58 --> Loader Class Initialized
DEBUG - 2014-04-19 01:00:58 --> Helper loaded: form_helper
DEBUG - 2014-04-19 01:00:58 --> Helper loaded: url_helper
DEBUG - 2014-04-19 01:00:58 --> Helper loaded: html_helper
DEBUG - 2014-04-19 01:00:58 --> Database Driver Class Initialized
ERROR - 2014-04-19 01:00:58 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-19 01:00:58 --> Session Class Initialized
DEBUG - 2014-04-19 01:00:58 --> Helper loaded: string_helper
DEBUG - 2014-04-19 01:00:58 --> Session routines successfully run
DEBUG - 2014-04-19 01:00:58 --> Form Validation Class Initialized
DEBUG - 2014-04-19 01:00:58 --> Controller Class Initialized
DEBUG - 2014-04-19 01:00:58 --> Model Class Initialized
DEBUG - 2014-04-19 01:00:58 --> Model Class Initialized
DEBUG - 2014-04-19 01:00:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-19 01:00:58 --> Encrypt Class Initialized
INFO  - 2014-04-19 01:00:58 --> after session initialization................
DEBUG - 2014-04-19 01:00:58 --> Final output sent to browser
DEBUG - 2014-04-19 01:00:58 --> Total execution time: 0.0330
DEBUG - 2014-04-19 01:19:41 --> Config Class Initialized
DEBUG - 2014-04-19 01:19:41 --> Hooks Class Initialized
DEBUG - 2014-04-19 01:19:41 --> Utf8 Class Initialized
DEBUG - 2014-04-19 01:19:41 --> UTF-8 Support Enabled
DEBUG - 2014-04-19 01:19:41 --> URI Class Initialized
DEBUG - 2014-04-19 01:19:41 --> Router Class Initialized
DEBUG - 2014-04-19 01:19:41 --> Output Class Initialized
DEBUG - 2014-04-19 01:19:41 --> Security Class Initialized
DEBUG - 2014-04-19 01:19:41 --> Input Class Initialized
DEBUG - 2014-04-19 01:19:41 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-19 01:19:41 --> Language Class Initialized
DEBUG - 2014-04-19 01:19:41 --> Loader Class Initialized
DEBUG - 2014-04-19 01:19:41 --> Helper loaded: form_helper
DEBUG - 2014-04-19 01:19:41 --> Helper loaded: url_helper
DEBUG - 2014-04-19 01:19:41 --> Helper loaded: html_helper
DEBUG - 2014-04-19 01:19:41 --> Database Driver Class Initialized
ERROR - 2014-04-19 01:19:41 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-19 01:19:41 --> Session Class Initialized
DEBUG - 2014-04-19 01:19:41 --> Helper loaded: string_helper
DEBUG - 2014-04-19 01:19:41 --> Session routines successfully run
DEBUG - 2014-04-19 01:19:41 --> Form Validation Class Initialized
DEBUG - 2014-04-19 01:19:41 --> Controller Class Initialized
DEBUG - 2014-04-19 01:19:41 --> Model Class Initialized
DEBUG - 2014-04-19 01:19:41 --> Model Class Initialized
DEBUG - 2014-04-19 01:19:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-19 01:19:41 --> Encrypt Class Initialized
INFO  - 2014-04-19 01:19:41 --> after session initialization................
INFO  - 2014-04-19 01:19:41 --> after internships list has been clicked.................
INFO  - 2014-04-19 01:19:41 --> inside retrieving locations 
INFO  - 2014-04-19 01:19:41 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-19 01:19:41 --> inside retrieving internship firms 
INFO  - 2014-04-19 01:19:41 --> SELECT `intf`.`id_internshipfirm` as id, `intf`.`name` as name
FROM (`internship_firm` intf)
ORDER BY `intf`.`name`
INFO  - 2014-04-19 01:19:41 --> inside retrieving internship duration 
INFO  - 2014-04-19 01:19:41 --> SELECT `intd`.`id_internshipduration` as id, `intd`.`name` as name
FROM (`internship_duration` intd)
ORDER BY `intd`.`id_internshipduration`
INFO  - 2014-04-19 01:19:41 --> inside retrieving internship specialization 
INFO  - 2014-04-19 01:19:41 --> SELECT `ints`.`id_internshipspecialization` as id, `ints`.`name` as name
FROM (`internship_specialization` ints)
ORDER BY `ints`.`name`
INFO  - 2014-04-19 01:19:41 --> last intern id is 0
INFO  - 2014-04-19 01:19:41 --> The session id is ========>b8ecdbc3b9f9db5f06c15cfc26d6a754 and the member id is =======>33
DEBUG - 2014-04-19 01:19:41 --> File loaded: ../pharmaray-application/views/internships.php
DEBUG - 2014-04-19 01:19:41 --> Final output sent to browser
DEBUG - 2014-04-19 01:19:41 --> Total execution time: 0.0360
DEBUG - 2014-04-19 01:19:44 --> Config Class Initialized
DEBUG - 2014-04-19 01:19:44 --> Hooks Class Initialized
DEBUG - 2014-04-19 01:19:44 --> Utf8 Class Initialized
DEBUG - 2014-04-19 01:19:44 --> UTF-8 Support Enabled
DEBUG - 2014-04-19 01:19:44 --> URI Class Initialized
DEBUG - 2014-04-19 01:19:44 --> Router Class Initialized
DEBUG - 2014-04-19 01:19:44 --> Output Class Initialized
DEBUG - 2014-04-19 01:19:44 --> Security Class Initialized
DEBUG - 2014-04-19 01:19:44 --> Input Class Initialized
DEBUG - 2014-04-19 01:19:44 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-19 01:19:44 --> Language Class Initialized
DEBUG - 2014-04-19 01:19:44 --> Loader Class Initialized
DEBUG - 2014-04-19 01:19:44 --> Helper loaded: form_helper
DEBUG - 2014-04-19 01:19:44 --> Helper loaded: url_helper
DEBUG - 2014-04-19 01:19:44 --> Helper loaded: html_helper
DEBUG - 2014-04-19 01:19:44 --> Database Driver Class Initialized
ERROR - 2014-04-19 01:19:44 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-19 01:19:44 --> Session Class Initialized
DEBUG - 2014-04-19 01:19:44 --> Helper loaded: string_helper
DEBUG - 2014-04-19 01:19:44 --> Session routines successfully run
DEBUG - 2014-04-19 01:19:44 --> Form Validation Class Initialized
DEBUG - 2014-04-19 01:19:44 --> Controller Class Initialized
DEBUG - 2014-04-19 01:19:44 --> Model Class Initialized
DEBUG - 2014-04-19 01:19:44 --> Model Class Initialized
DEBUG - 2014-04-19 01:19:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-19 01:19:44 --> Encrypt Class Initialized
INFO  - 2014-04-19 01:19:44 --> after session initialization................
DEBUG - 2014-04-19 01:19:44 --> DB Transaction Failure
ERROR - 2014-04-19 01:19:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'id`
ORDER BY `i`.`id_internshipopening` desc
LIMIT 10' at line 7
DEBUG - 2014-04-19 01:19:44 --> Language file loaded: language/english/db_lang.php
DEBUG - 2014-04-19 01:21:08 --> Config Class Initialized
DEBUG - 2014-04-19 01:21:08 --> Hooks Class Initialized
DEBUG - 2014-04-19 01:21:08 --> Utf8 Class Initialized
DEBUG - 2014-04-19 01:21:08 --> UTF-8 Support Enabled
DEBUG - 2014-04-19 01:21:08 --> URI Class Initialized
DEBUG - 2014-04-19 01:21:08 --> Router Class Initialized
DEBUG - 2014-04-19 01:21:08 --> Output Class Initialized
DEBUG - 2014-04-19 01:21:08 --> Security Class Initialized
DEBUG - 2014-04-19 01:21:08 --> Input Class Initialized
DEBUG - 2014-04-19 01:21:08 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-19 01:21:08 --> Language Class Initialized
DEBUG - 2014-04-19 01:21:08 --> Loader Class Initialized
DEBUG - 2014-04-19 01:21:08 --> Helper loaded: form_helper
DEBUG - 2014-04-19 01:21:08 --> Helper loaded: url_helper
DEBUG - 2014-04-19 01:21:08 --> Helper loaded: html_helper
DEBUG - 2014-04-19 01:21:08 --> Database Driver Class Initialized
ERROR - 2014-04-19 01:21:08 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-19 01:21:08 --> Session Class Initialized
DEBUG - 2014-04-19 01:21:08 --> Helper loaded: string_helper
DEBUG - 2014-04-19 01:21:08 --> Session routines successfully run
DEBUG - 2014-04-19 01:21:08 --> Form Validation Class Initialized
DEBUG - 2014-04-19 01:21:08 --> Controller Class Initialized
DEBUG - 2014-04-19 01:21:08 --> Model Class Initialized
DEBUG - 2014-04-19 01:21:08 --> Model Class Initialized
DEBUG - 2014-04-19 01:21:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-19 01:21:08 --> Encrypt Class Initialized
INFO  - 2014-04-19 01:21:08 --> after session initialization................
DEBUG - 2014-04-19 01:21:08 --> DB Transaction Failure
ERROR - 2014-04-19 01:21:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'id`
ORDER BY `i`.`id_internshipopening` desc
LIMIT 10' at line 7
DEBUG - 2014-04-19 01:21:08 --> Language file loaded: language/english/db_lang.php
DEBUG - 2014-04-19 01:21:27 --> Config Class Initialized
DEBUG - 2014-04-19 01:21:27 --> Hooks Class Initialized
DEBUG - 2014-04-19 01:21:27 --> Utf8 Class Initialized
DEBUG - 2014-04-19 01:21:27 --> UTF-8 Support Enabled
DEBUG - 2014-04-19 01:21:27 --> URI Class Initialized
DEBUG - 2014-04-19 01:21:27 --> Router Class Initialized
DEBUG - 2014-04-19 01:21:27 --> Output Class Initialized
DEBUG - 2014-04-19 01:21:27 --> Security Class Initialized
DEBUG - 2014-04-19 01:21:27 --> Input Class Initialized
DEBUG - 2014-04-19 01:21:27 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-19 01:21:27 --> Language Class Initialized
DEBUG - 2014-04-19 01:21:27 --> Loader Class Initialized
DEBUG - 2014-04-19 01:21:27 --> Helper loaded: form_helper
DEBUG - 2014-04-19 01:21:27 --> Helper loaded: url_helper
DEBUG - 2014-04-19 01:21:27 --> Helper loaded: html_helper
DEBUG - 2014-04-19 01:21:27 --> Database Driver Class Initialized
ERROR - 2014-04-19 01:21:27 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-19 01:21:27 --> Session Class Initialized
DEBUG - 2014-04-19 01:21:27 --> Helper loaded: string_helper
DEBUG - 2014-04-19 01:21:27 --> Session routines successfully run
DEBUG - 2014-04-19 01:21:27 --> Form Validation Class Initialized
DEBUG - 2014-04-19 01:21:27 --> Controller Class Initialized
DEBUG - 2014-04-19 01:21:27 --> Model Class Initialized
DEBUG - 2014-04-19 01:21:27 --> Model Class Initialized
DEBUG - 2014-04-19 01:21:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-19 01:21:27 --> Encrypt Class Initialized
INFO  - 2014-04-19 01:21:27 --> after session initialization................
INFO  - 2014-04-19 01:21:27 --> after internships list has been clicked.................
INFO  - 2014-04-19 01:21:27 --> inside retrieving locations 
INFO  - 2014-04-19 01:21:27 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-19 01:21:27 --> inside retrieving internship firms 
INFO  - 2014-04-19 01:21:27 --> SELECT `intf`.`id_internshipfirm` as id, `intf`.`name` as name
FROM (`internship_firm` intf)
ORDER BY `intf`.`name`
INFO  - 2014-04-19 01:21:27 --> inside retrieving internship duration 
INFO  - 2014-04-19 01:21:27 --> SELECT `intd`.`id_internshipduration` as id, `intd`.`name` as name
FROM (`internship_duration` intd)
ORDER BY `intd`.`id_internshipduration`
INFO  - 2014-04-19 01:21:27 --> inside retrieving internship specialization 
INFO  - 2014-04-19 01:21:27 --> SELECT `ints`.`id_internshipspecialization` as id, `ints`.`name` as name
FROM (`internship_specialization` ints)
ORDER BY `ints`.`name`
INFO  - 2014-04-19 01:21:27 --> last intern id is 0
INFO  - 2014-04-19 01:21:27 --> The session id is ========>b8ecdbc3b9f9db5f06c15cfc26d6a754 and the member id is =======>33
DEBUG - 2014-04-19 01:21:27 --> File loaded: ../pharmaray-application/views/internships.php
DEBUG - 2014-04-19 01:21:27 --> Final output sent to browser
DEBUG - 2014-04-19 01:21:27 --> Total execution time: 0.0319
DEBUG - 2014-04-19 01:21:30 --> Config Class Initialized
DEBUG - 2014-04-19 01:21:30 --> Hooks Class Initialized
DEBUG - 2014-04-19 01:21:30 --> Utf8 Class Initialized
DEBUG - 2014-04-19 01:21:30 --> UTF-8 Support Enabled
DEBUG - 2014-04-19 01:21:30 --> URI Class Initialized
DEBUG - 2014-04-19 01:21:30 --> Router Class Initialized
DEBUG - 2014-04-19 01:21:30 --> Output Class Initialized
DEBUG - 2014-04-19 01:21:30 --> Security Class Initialized
DEBUG - 2014-04-19 01:21:30 --> Input Class Initialized
DEBUG - 2014-04-19 01:21:30 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-19 01:21:30 --> Language Class Initialized
DEBUG - 2014-04-19 01:21:30 --> Loader Class Initialized
DEBUG - 2014-04-19 01:21:30 --> Helper loaded: form_helper
DEBUG - 2014-04-19 01:21:30 --> Helper loaded: url_helper
DEBUG - 2014-04-19 01:21:30 --> Helper loaded: html_helper
DEBUG - 2014-04-19 01:21:30 --> Database Driver Class Initialized
ERROR - 2014-04-19 01:21:30 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-19 01:21:30 --> Session Class Initialized
DEBUG - 2014-04-19 01:21:30 --> Helper loaded: string_helper
DEBUG - 2014-04-19 01:21:30 --> Session routines successfully run
DEBUG - 2014-04-19 01:21:30 --> Form Validation Class Initialized
DEBUG - 2014-04-19 01:21:30 --> Controller Class Initialized
DEBUG - 2014-04-19 01:21:30 --> Model Class Initialized
DEBUG - 2014-04-19 01:21:30 --> Model Class Initialized
DEBUG - 2014-04-19 01:21:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-19 01:21:30 --> Encrypt Class Initialized
INFO  - 2014-04-19 01:21:30 --> after session initialization................
DEBUG - 2014-04-19 01:21:30 --> DB Transaction Failure
ERROR - 2014-04-19 01:21:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'id`
ORDER BY `i`.`id_internshipopening` desc
LIMIT 10' at line 7
DEBUG - 2014-04-19 01:21:30 --> Language file loaded: language/english/db_lang.php
DEBUG - 2014-04-19 01:22:22 --> Config Class Initialized
DEBUG - 2014-04-19 01:22:22 --> Hooks Class Initialized
DEBUG - 2014-04-19 01:22:22 --> Utf8 Class Initialized
DEBUG - 2014-04-19 01:22:22 --> UTF-8 Support Enabled
DEBUG - 2014-04-19 01:22:22 --> URI Class Initialized
DEBUG - 2014-04-19 01:22:22 --> Router Class Initialized
DEBUG - 2014-04-19 01:22:22 --> Output Class Initialized
DEBUG - 2014-04-19 01:22:22 --> Security Class Initialized
DEBUG - 2014-04-19 01:22:22 --> Input Class Initialized
DEBUG - 2014-04-19 01:22:22 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-19 01:22:22 --> Language Class Initialized
DEBUG - 2014-04-19 01:22:22 --> Loader Class Initialized
DEBUG - 2014-04-19 01:22:22 --> Helper loaded: form_helper
DEBUG - 2014-04-19 01:22:22 --> Helper loaded: url_helper
DEBUG - 2014-04-19 01:22:22 --> Helper loaded: html_helper
DEBUG - 2014-04-19 01:22:22 --> Database Driver Class Initialized
ERROR - 2014-04-19 01:22:22 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-19 01:22:22 --> Session Class Initialized
DEBUG - 2014-04-19 01:22:22 --> Helper loaded: string_helper
DEBUG - 2014-04-19 01:22:22 --> Session routines successfully run
DEBUG - 2014-04-19 01:22:22 --> Form Validation Class Initialized
DEBUG - 2014-04-19 01:22:22 --> Controller Class Initialized
DEBUG - 2014-04-19 01:22:22 --> Model Class Initialized
DEBUG - 2014-04-19 01:22:22 --> Model Class Initialized
DEBUG - 2014-04-19 01:22:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-19 01:22:22 --> Encrypt Class Initialized
INFO  - 2014-04-19 01:22:22 --> after session initialization................
INFO  - 2014-04-19 01:22:22 --> after internships list has been clicked.................
INFO  - 2014-04-19 01:22:22 --> inside retrieving locations 
INFO  - 2014-04-19 01:22:22 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-19 01:22:22 --> inside retrieving internship firms 
INFO  - 2014-04-19 01:22:22 --> SELECT `intf`.`id_internshipfirm` as id, `intf`.`name` as name
FROM (`internship_firm` intf)
ORDER BY `intf`.`name`
INFO  - 2014-04-19 01:22:22 --> inside retrieving internship duration 
INFO  - 2014-04-19 01:22:22 --> SELECT `intd`.`id_internshipduration` as id, `intd`.`name` as name
FROM (`internship_duration` intd)
ORDER BY `intd`.`id_internshipduration`
INFO  - 2014-04-19 01:22:22 --> inside retrieving internship specialization 
INFO  - 2014-04-19 01:22:22 --> SELECT `ints`.`id_internshipspecialization` as id, `ints`.`name` as name
FROM (`internship_specialization` ints)
ORDER BY `ints`.`name`
INFO  - 2014-04-19 01:22:22 --> last intern id is 0
INFO  - 2014-04-19 01:22:22 --> The session id is ========>b8ecdbc3b9f9db5f06c15cfc26d6a754 and the member id is =======>33
DEBUG - 2014-04-19 01:22:22 --> File loaded: ../pharmaray-application/views/internships.php
DEBUG - 2014-04-19 01:22:22 --> Final output sent to browser
DEBUG - 2014-04-19 01:22:22 --> Total execution time: 0.0355
DEBUG - 2014-04-19 01:22:25 --> Config Class Initialized
DEBUG - 2014-04-19 01:22:25 --> Hooks Class Initialized
DEBUG - 2014-04-19 01:22:25 --> Utf8 Class Initialized
DEBUG - 2014-04-19 01:22:25 --> UTF-8 Support Enabled
DEBUG - 2014-04-19 01:22:25 --> URI Class Initialized
DEBUG - 2014-04-19 01:22:25 --> Router Class Initialized
DEBUG - 2014-04-19 01:22:25 --> Output Class Initialized
DEBUG - 2014-04-19 01:22:25 --> Security Class Initialized
DEBUG - 2014-04-19 01:22:25 --> Input Class Initialized
DEBUG - 2014-04-19 01:22:25 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-19 01:22:25 --> Language Class Initialized
DEBUG - 2014-04-19 01:22:25 --> Loader Class Initialized
DEBUG - 2014-04-19 01:22:25 --> Helper loaded: form_helper
DEBUG - 2014-04-19 01:22:25 --> Helper loaded: url_helper
DEBUG - 2014-04-19 01:22:25 --> Helper loaded: html_helper
DEBUG - 2014-04-19 01:22:25 --> Database Driver Class Initialized
ERROR - 2014-04-19 01:22:25 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-19 01:22:25 --> Session Class Initialized
DEBUG - 2014-04-19 01:22:25 --> Helper loaded: string_helper
DEBUG - 2014-04-19 01:22:25 --> Session routines successfully run
DEBUG - 2014-04-19 01:22:25 --> Form Validation Class Initialized
DEBUG - 2014-04-19 01:22:25 --> Controller Class Initialized
DEBUG - 2014-04-19 01:22:25 --> Model Class Initialized
DEBUG - 2014-04-19 01:22:25 --> Model Class Initialized
DEBUG - 2014-04-19 01:22:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-19 01:22:25 --> Encrypt Class Initialized
INFO  - 2014-04-19 01:22:25 --> after session initialization................
DEBUG - 2014-04-19 01:22:25 --> DB Transaction Failure
ERROR - 2014-04-19 01:22:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'id`
ORDER BY `i`.`id_internshipopening` desc
LIMIT 10' at line 7
DEBUG - 2014-04-19 01:22:25 --> Language file loaded: language/english/db_lang.php
DEBUG - 2014-04-19 01:24:04 --> Config Class Initialized
DEBUG - 2014-04-19 01:24:04 --> Hooks Class Initialized
DEBUG - 2014-04-19 01:24:04 --> Utf8 Class Initialized
DEBUG - 2014-04-19 01:24:04 --> UTF-8 Support Enabled
DEBUG - 2014-04-19 01:24:04 --> URI Class Initialized
DEBUG - 2014-04-19 01:24:04 --> Router Class Initialized
DEBUG - 2014-04-19 01:24:04 --> Output Class Initialized
DEBUG - 2014-04-19 01:24:04 --> Security Class Initialized
DEBUG - 2014-04-19 01:24:04 --> Input Class Initialized
DEBUG - 2014-04-19 01:24:04 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-19 01:24:04 --> Language Class Initialized
DEBUG - 2014-04-19 01:24:04 --> Loader Class Initialized
DEBUG - 2014-04-19 01:24:04 --> Helper loaded: form_helper
DEBUG - 2014-04-19 01:24:04 --> Helper loaded: url_helper
DEBUG - 2014-04-19 01:24:04 --> Helper loaded: html_helper
DEBUG - 2014-04-19 01:24:04 --> Database Driver Class Initialized
ERROR - 2014-04-19 01:24:04 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-19 01:24:04 --> Session Class Initialized
DEBUG - 2014-04-19 01:24:04 --> Helper loaded: string_helper
DEBUG - 2014-04-19 01:24:04 --> Session routines successfully run
DEBUG - 2014-04-19 01:24:04 --> Form Validation Class Initialized
DEBUG - 2014-04-19 01:24:04 --> Controller Class Initialized
DEBUG - 2014-04-19 01:24:04 --> Model Class Initialized
DEBUG - 2014-04-19 01:24:04 --> Model Class Initialized
DEBUG - 2014-04-19 01:24:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-19 01:24:04 --> Encrypt Class Initialized
INFO  - 2014-04-19 01:24:04 --> after session initialization................
INFO  - 2014-04-19 01:24:04 --> after internships list has been clicked.................
INFO  - 2014-04-19 01:24:04 --> inside retrieving locations 
INFO  - 2014-04-19 01:24:04 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-19 01:24:04 --> inside retrieving internship firms 
INFO  - 2014-04-19 01:24:04 --> SELECT `intf`.`id_internshipfirm` as id, `intf`.`name` as name
FROM (`internship_firm` intf)
ORDER BY `intf`.`name`
INFO  - 2014-04-19 01:24:04 --> inside retrieving internship duration 
INFO  - 2014-04-19 01:24:04 --> SELECT `intd`.`id_internshipduration` as id, `intd`.`name` as name
FROM (`internship_duration` intd)
ORDER BY `intd`.`id_internshipduration`
INFO  - 2014-04-19 01:24:04 --> inside retrieving internship specialization 
INFO  - 2014-04-19 01:24:04 --> SELECT `ints`.`id_internshipspecialization` as id, `ints`.`name` as name
FROM (`internship_specialization` ints)
ORDER BY `ints`.`name`
INFO  - 2014-04-19 01:24:04 --> last intern id is 0
INFO  - 2014-04-19 01:24:04 --> The session id is ========>b8ecdbc3b9f9db5f06c15cfc26d6a754 and the member id is =======>33
DEBUG - 2014-04-19 01:24:04 --> File loaded: ../pharmaray-application/views/internships.php
DEBUG - 2014-04-19 01:24:04 --> Final output sent to browser
DEBUG - 2014-04-19 01:24:04 --> Total execution time: 0.0303
DEBUG - 2014-04-19 01:24:07 --> Config Class Initialized
DEBUG - 2014-04-19 01:24:07 --> Hooks Class Initialized
DEBUG - 2014-04-19 01:24:07 --> Utf8 Class Initialized
DEBUG - 2014-04-19 01:24:07 --> UTF-8 Support Enabled
DEBUG - 2014-04-19 01:24:07 --> URI Class Initialized
DEBUG - 2014-04-19 01:24:07 --> Router Class Initialized
DEBUG - 2014-04-19 01:24:07 --> Output Class Initialized
DEBUG - 2014-04-19 01:24:07 --> Security Class Initialized
DEBUG - 2014-04-19 01:24:07 --> Input Class Initialized
DEBUG - 2014-04-19 01:24:07 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-19 01:24:07 --> Language Class Initialized
DEBUG - 2014-04-19 01:24:07 --> Loader Class Initialized
DEBUG - 2014-04-19 01:24:07 --> Helper loaded: form_helper
DEBUG - 2014-04-19 01:24:07 --> Helper loaded: url_helper
DEBUG - 2014-04-19 01:24:07 --> Helper loaded: html_helper
DEBUG - 2014-04-19 01:24:07 --> Database Driver Class Initialized
ERROR - 2014-04-19 01:24:07 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-19 01:24:07 --> Session Class Initialized
DEBUG - 2014-04-19 01:24:07 --> Helper loaded: string_helper
DEBUG - 2014-04-19 01:24:07 --> Session routines successfully run
DEBUG - 2014-04-19 01:24:07 --> Form Validation Class Initialized
DEBUG - 2014-04-19 01:24:07 --> Controller Class Initialized
DEBUG - 2014-04-19 01:24:07 --> Model Class Initialized
DEBUG - 2014-04-19 01:24:07 --> Model Class Initialized
DEBUG - 2014-04-19 01:24:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-19 01:24:07 --> Encrypt Class Initialized
INFO  - 2014-04-19 01:24:07 --> after session initialization................
INFO  - 2014-04-19 01:24:07 --> The Where query :::::::>>>
DEBUG - 2014-04-19 01:24:07 --> DB Transaction Failure
ERROR - 2014-04-19 01:24:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'id`
ORDER BY `i`.`id_internshipopening` desc
LIMIT 10' at line 7
DEBUG - 2014-04-19 01:24:07 --> Language file loaded: language/english/db_lang.php
DEBUG - 2014-04-19 15:12:34 --> Config Class Initialized
DEBUG - 2014-04-19 15:12:34 --> Hooks Class Initialized
DEBUG - 2014-04-19 15:12:34 --> Utf8 Class Initialized
DEBUG - 2014-04-19 15:12:34 --> UTF-8 Support Enabled
DEBUG - 2014-04-19 15:12:34 --> URI Class Initialized
DEBUG - 2014-04-19 15:12:34 --> Router Class Initialized
DEBUG - 2014-04-19 15:12:34 --> Output Class Initialized
DEBUG - 2014-04-19 15:12:34 --> Security Class Initialized
DEBUG - 2014-04-19 15:12:34 --> Input Class Initialized
DEBUG - 2014-04-19 15:12:34 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-19 15:12:34 --> Language Class Initialized
DEBUG - 2014-04-19 15:12:34 --> Loader Class Initialized
DEBUG - 2014-04-19 15:12:34 --> Helper loaded: form_helper
DEBUG - 2014-04-19 15:12:34 --> Helper loaded: url_helper
DEBUG - 2014-04-19 15:12:34 --> Helper loaded: html_helper
DEBUG - 2014-04-19 15:12:34 --> Database Driver Class Initialized
ERROR - 2014-04-19 15:12:34 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-19 15:12:34 --> Session Class Initialized
DEBUG - 2014-04-19 15:12:34 --> Helper loaded: string_helper
DEBUG - 2014-04-19 15:12:34 --> A session cookie was not found.
DEBUG - 2014-04-19 15:12:34 --> Session routines successfully run
DEBUG - 2014-04-19 15:12:34 --> Form Validation Class Initialized
DEBUG - 2014-04-19 15:12:34 --> Controller Class Initialized
DEBUG - 2014-04-19 15:12:34 --> Model Class Initialized
DEBUG - 2014-04-19 15:12:34 --> Model Class Initialized
DEBUG - 2014-04-19 15:12:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-19 15:12:34 --> Encrypt Class Initialized
INFO  - 2014-04-19 15:12:34 --> after session initialization................
INFO  - 2014-04-19 15:12:34 --> The Where query :::::::>>>1 = 1
DEBUG - 2014-04-19 15:12:34 --> DB Transaction Failure
ERROR - 2014-04-19 15:12:34 --> Query error: Unknown column '1' in 'where clause'
DEBUG - 2014-04-19 15:12:34 --> Language file loaded: language/english/db_lang.php
DEBUG - 2014-04-19 15:13:07 --> Config Class Initialized
DEBUG - 2014-04-19 15:13:07 --> Hooks Class Initialized
DEBUG - 2014-04-19 15:13:07 --> Utf8 Class Initialized
DEBUG - 2014-04-19 15:13:07 --> UTF-8 Support Enabled
DEBUG - 2014-04-19 15:13:07 --> URI Class Initialized
DEBUG - 2014-04-19 15:13:07 --> Router Class Initialized
DEBUG - 2014-04-19 15:13:07 --> Output Class Initialized
DEBUG - 2014-04-19 15:13:07 --> Security Class Initialized
DEBUG - 2014-04-19 15:13:07 --> Input Class Initialized
DEBUG - 2014-04-19 15:13:07 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-19 15:13:07 --> Language Class Initialized
DEBUG - 2014-04-19 15:13:07 --> Loader Class Initialized
DEBUG - 2014-04-19 15:13:07 --> Helper loaded: form_helper
DEBUG - 2014-04-19 15:13:07 --> Helper loaded: url_helper
DEBUG - 2014-04-19 15:13:07 --> Helper loaded: html_helper
DEBUG - 2014-04-19 15:13:07 --> Database Driver Class Initialized
ERROR - 2014-04-19 15:13:07 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-19 15:13:07 --> Session Class Initialized
DEBUG - 2014-04-19 15:13:07 --> Helper loaded: string_helper
DEBUG - 2014-04-19 15:13:07 --> Session routines successfully run
DEBUG - 2014-04-19 15:13:07 --> Form Validation Class Initialized
DEBUG - 2014-04-19 15:13:07 --> Controller Class Initialized
DEBUG - 2014-04-19 15:13:07 --> Model Class Initialized
DEBUG - 2014-04-19 15:13:07 --> Model Class Initialized
DEBUG - 2014-04-19 15:13:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-19 15:13:07 --> Encrypt Class Initialized
INFO  - 2014-04-19 15:13:07 --> after session initialization................
INFO  - 2014-04-19 15:13:07 --> The Where query :::::::>>>true
DEBUG - 2014-04-19 15:13:07 --> DB Transaction Failure
ERROR - 2014-04-19 15:13:07 --> Query error: Unknown column 'true' in 'where clause'
DEBUG - 2014-04-19 15:13:07 --> Language file loaded: language/english/db_lang.php
DEBUG - 2014-04-19 15:13:43 --> Config Class Initialized
DEBUG - 2014-04-19 15:13:43 --> Hooks Class Initialized
DEBUG - 2014-04-19 15:13:43 --> Utf8 Class Initialized
DEBUG - 2014-04-19 15:13:43 --> UTF-8 Support Enabled
DEBUG - 2014-04-19 15:13:43 --> URI Class Initialized
DEBUG - 2014-04-19 15:13:43 --> Router Class Initialized
DEBUG - 2014-04-19 15:13:43 --> Output Class Initialized
DEBUG - 2014-04-19 15:13:43 --> Security Class Initialized
DEBUG - 2014-04-19 15:13:43 --> Input Class Initialized
DEBUG - 2014-04-19 15:13:43 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-19 15:13:43 --> Language Class Initialized
DEBUG - 2014-04-19 15:13:43 --> Loader Class Initialized
DEBUG - 2014-04-19 15:13:43 --> Helper loaded: form_helper
DEBUG - 2014-04-19 15:13:43 --> Helper loaded: url_helper
DEBUG - 2014-04-19 15:13:43 --> Helper loaded: html_helper
DEBUG - 2014-04-19 15:13:43 --> Database Driver Class Initialized
ERROR - 2014-04-19 15:13:43 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-19 15:13:43 --> Session Class Initialized
DEBUG - 2014-04-19 15:13:43 --> Helper loaded: string_helper
DEBUG - 2014-04-19 15:13:43 --> Session routines successfully run
DEBUG - 2014-04-19 15:13:43 --> Form Validation Class Initialized
DEBUG - 2014-04-19 15:13:43 --> Controller Class Initialized
DEBUG - 2014-04-19 15:13:43 --> Model Class Initialized
DEBUG - 2014-04-19 15:13:43 --> Model Class Initialized
DEBUG - 2014-04-19 15:13:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-19 15:13:43 --> Encrypt Class Initialized
INFO  - 2014-04-19 15:13:43 --> after session initialization................
INFO  - 2014-04-19 15:13:43 --> The Where query :::::::>>>'1' = '1'
DEBUG - 2014-04-19 15:13:43 --> DB Transaction Failure
ERROR - 2014-04-19 15:13:43 --> Query error: Unknown column ''1'' in 'where clause'
DEBUG - 2014-04-19 15:13:43 --> Language file loaded: language/english/db_lang.php
DEBUG - 2014-04-19 15:14:45 --> Config Class Initialized
DEBUG - 2014-04-19 15:14:45 --> Hooks Class Initialized
DEBUG - 2014-04-19 15:14:45 --> Utf8 Class Initialized
DEBUG - 2014-04-19 15:14:45 --> UTF-8 Support Enabled
DEBUG - 2014-04-19 15:14:45 --> URI Class Initialized
DEBUG - 2014-04-19 15:14:45 --> Router Class Initialized
DEBUG - 2014-04-19 15:14:45 --> Output Class Initialized
DEBUG - 2014-04-19 15:14:45 --> Security Class Initialized
DEBUG - 2014-04-19 15:14:45 --> Input Class Initialized
DEBUG - 2014-04-19 15:14:45 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-19 15:14:45 --> Language Class Initialized
DEBUG - 2014-04-19 15:14:45 --> Loader Class Initialized
DEBUG - 2014-04-19 15:14:45 --> Helper loaded: form_helper
DEBUG - 2014-04-19 15:14:45 --> Helper loaded: url_helper
DEBUG - 2014-04-19 15:14:45 --> Helper loaded: html_helper
DEBUG - 2014-04-19 15:14:45 --> Database Driver Class Initialized
ERROR - 2014-04-19 15:14:45 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-19 15:14:45 --> Session Class Initialized
DEBUG - 2014-04-19 15:14:45 --> Helper loaded: string_helper
DEBUG - 2014-04-19 15:14:45 --> Session routines successfully run
DEBUG - 2014-04-19 15:14:45 --> Form Validation Class Initialized
DEBUG - 2014-04-19 15:14:45 --> Controller Class Initialized
DEBUG - 2014-04-19 15:14:45 --> Model Class Initialized
DEBUG - 2014-04-19 15:14:45 --> Model Class Initialized
DEBUG - 2014-04-19 15:14:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-19 15:14:45 --> Encrypt Class Initialized
INFO  - 2014-04-19 15:14:45 --> after session initialization................
INFO  - 2014-04-19 15:14:45 --> The Where query :::::::>>>i.id_internshipopening > 0
INFO  - 2014-04-19 15:14:45 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, i.duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` > 0
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` desc
LIMIT 10
DEBUG - 2014-04-19 15:14:45 --> Final output sent to browser
DEBUG - 2014-04-19 15:14:45 --> Total execution time: 0.0580
DEBUG - 2014-04-19 15:15:18 --> Config Class Initialized
DEBUG - 2014-04-19 15:15:18 --> Hooks Class Initialized
DEBUG - 2014-04-19 15:15:18 --> Utf8 Class Initialized
DEBUG - 2014-04-19 15:15:18 --> UTF-8 Support Enabled
DEBUG - 2014-04-19 15:15:18 --> URI Class Initialized
DEBUG - 2014-04-19 15:15:18 --> Router Class Initialized
DEBUG - 2014-04-19 15:15:18 --> Output Class Initialized
DEBUG - 2014-04-19 15:15:18 --> Security Class Initialized
DEBUG - 2014-04-19 15:15:18 --> Input Class Initialized
DEBUG - 2014-04-19 15:15:18 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-19 15:15:18 --> Language Class Initialized
DEBUG - 2014-04-19 15:15:18 --> Loader Class Initialized
DEBUG - 2014-04-19 15:15:18 --> Helper loaded: form_helper
DEBUG - 2014-04-19 15:15:18 --> Helper loaded: url_helper
DEBUG - 2014-04-19 15:15:18 --> Helper loaded: html_helper
DEBUG - 2014-04-19 15:15:18 --> Database Driver Class Initialized
ERROR - 2014-04-19 15:15:18 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-19 15:15:18 --> Session Class Initialized
DEBUG - 2014-04-19 15:15:18 --> Helper loaded: string_helper
DEBUG - 2014-04-19 15:15:18 --> Session routines successfully run
DEBUG - 2014-04-19 15:15:18 --> Form Validation Class Initialized
DEBUG - 2014-04-19 15:15:18 --> Controller Class Initialized
DEBUG - 2014-04-19 15:15:18 --> Model Class Initialized
DEBUG - 2014-04-19 15:15:18 --> Model Class Initialized
DEBUG - 2014-04-19 15:15:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-19 15:15:18 --> Encrypt Class Initialized
INFO  - 2014-04-19 15:15:18 --> after session initialization................
INFO  - 2014-04-19 15:15:18 --> last intern id is 1
DEBUG - 2014-04-19 15:15:18 --> Final output sent to browser
DEBUG - 2014-04-19 15:15:18 --> Total execution time: 0.0436
DEBUG - 2014-04-19 15:15:22 --> Config Class Initialized
DEBUG - 2014-04-19 15:15:22 --> Hooks Class Initialized
DEBUG - 2014-04-19 15:15:22 --> Utf8 Class Initialized
DEBUG - 2014-04-19 15:15:22 --> UTF-8 Support Enabled
DEBUG - 2014-04-19 15:15:22 --> URI Class Initialized
DEBUG - 2014-04-19 15:15:22 --> Router Class Initialized
DEBUG - 2014-04-19 15:15:22 --> Output Class Initialized
DEBUG - 2014-04-19 15:15:22 --> Security Class Initialized
DEBUG - 2014-04-19 15:15:22 --> Input Class Initialized
DEBUG - 2014-04-19 15:15:22 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-19 15:15:22 --> Language Class Initialized
DEBUG - 2014-04-19 15:15:22 --> Loader Class Initialized
DEBUG - 2014-04-19 15:15:22 --> Helper loaded: form_helper
DEBUG - 2014-04-19 15:15:22 --> Helper loaded: url_helper
DEBUG - 2014-04-19 15:15:22 --> Helper loaded: html_helper
DEBUG - 2014-04-19 15:15:22 --> Database Driver Class Initialized
ERROR - 2014-04-19 15:15:22 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-19 15:15:22 --> Session Class Initialized
DEBUG - 2014-04-19 15:15:22 --> Helper loaded: string_helper
DEBUG - 2014-04-19 15:15:22 --> Session routines successfully run
DEBUG - 2014-04-19 15:15:22 --> Form Validation Class Initialized
DEBUG - 2014-04-19 15:15:22 --> Controller Class Initialized
DEBUG - 2014-04-19 15:15:22 --> Model Class Initialized
DEBUG - 2014-04-19 15:15:22 --> Model Class Initialized
DEBUG - 2014-04-19 15:15:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-19 15:15:22 --> Encrypt Class Initialized
INFO  - 2014-04-19 15:15:22 --> after session initialization................
INFO  - 2014-04-19 15:15:22 --> inside retrieving locations 
INFO  - 2014-04-19 15:15:22 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
JOIN `location_ref` lr ON `lr`.`location_id` = `l`.`id_location` and lr.super_locationid = 38
GROUP BY `id`
ORDER BY `l`.`name`
DEBUG - 2014-04-19 15:15:22 --> Final output sent to browser
DEBUG - 2014-04-19 15:15:22 --> Total execution time: 0.0363
DEBUG - 2014-04-19 15:15:24 --> Config Class Initialized
DEBUG - 2014-04-19 15:15:24 --> Hooks Class Initialized
DEBUG - 2014-04-19 15:15:24 --> Utf8 Class Initialized
DEBUG - 2014-04-19 15:15:24 --> UTF-8 Support Enabled
DEBUG - 2014-04-19 15:15:24 --> URI Class Initialized
DEBUG - 2014-04-19 15:15:24 --> Router Class Initialized
DEBUG - 2014-04-19 15:15:24 --> Output Class Initialized
DEBUG - 2014-04-19 15:15:24 --> Security Class Initialized
DEBUG - 2014-04-19 15:15:24 --> Input Class Initialized
DEBUG - 2014-04-19 15:15:24 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-19 15:15:24 --> Language Class Initialized
DEBUG - 2014-04-19 15:15:24 --> Loader Class Initialized
DEBUG - 2014-04-19 15:15:24 --> Helper loaded: form_helper
DEBUG - 2014-04-19 15:15:24 --> Helper loaded: url_helper
DEBUG - 2014-04-19 15:15:24 --> Helper loaded: html_helper
DEBUG - 2014-04-19 15:15:24 --> Database Driver Class Initialized
ERROR - 2014-04-19 15:15:24 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-19 15:15:24 --> Session Class Initialized
DEBUG - 2014-04-19 15:15:24 --> Helper loaded: string_helper
DEBUG - 2014-04-19 15:15:24 --> Session routines successfully run
DEBUG - 2014-04-19 15:15:24 --> Form Validation Class Initialized
DEBUG - 2014-04-19 15:15:24 --> Controller Class Initialized
DEBUG - 2014-04-19 15:15:24 --> Model Class Initialized
DEBUG - 2014-04-19 15:15:24 --> Model Class Initialized
DEBUG - 2014-04-19 15:15:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-19 15:15:24 --> Encrypt Class Initialized
INFO  - 2014-04-19 15:15:24 --> after session initialization................
INFO  - 2014-04-19 15:15:24 --> inside retrieving locations 
INFO  - 2014-04-19 15:15:24 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
JOIN `location_ref` lr ON `lr`.`location_id` = `l`.`id_location` and lr.super_locationid = 8
GROUP BY `id`
ORDER BY `l`.`name`
DEBUG - 2014-04-19 15:15:24 --> Final output sent to browser
DEBUG - 2014-04-19 15:15:24 --> Total execution time: 0.0311
DEBUG - 2014-04-19 15:15:36 --> Config Class Initialized
DEBUG - 2014-04-19 15:15:36 --> Hooks Class Initialized
DEBUG - 2014-04-19 15:15:36 --> Utf8 Class Initialized
DEBUG - 2014-04-19 15:15:36 --> UTF-8 Support Enabled
DEBUG - 2014-04-19 15:15:36 --> URI Class Initialized
DEBUG - 2014-04-19 15:15:36 --> Router Class Initialized
DEBUG - 2014-04-19 15:15:36 --> Output Class Initialized
DEBUG - 2014-04-19 15:15:36 --> Security Class Initialized
DEBUG - 2014-04-19 15:15:36 --> Input Class Initialized
DEBUG - 2014-04-19 15:15:36 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-19 15:15:36 --> Language Class Initialized
DEBUG - 2014-04-19 15:15:36 --> Loader Class Initialized
DEBUG - 2014-04-19 15:15:36 --> Helper loaded: form_helper
DEBUG - 2014-04-19 15:15:36 --> Helper loaded: url_helper
DEBUG - 2014-04-19 15:15:36 --> Helper loaded: html_helper
DEBUG - 2014-04-19 15:15:36 --> Database Driver Class Initialized
ERROR - 2014-04-19 15:15:36 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-19 15:15:36 --> Session Class Initialized
DEBUG - 2014-04-19 15:15:36 --> Helper loaded: string_helper
DEBUG - 2014-04-19 15:15:36 --> Session routines successfully run
DEBUG - 2014-04-19 15:15:36 --> Form Validation Class Initialized
DEBUG - 2014-04-19 15:15:36 --> Controller Class Initialized
DEBUG - 2014-04-19 15:15:36 --> Model Class Initialized
DEBUG - 2014-04-19 15:15:36 --> Model Class Initialized
DEBUG - 2014-04-19 15:15:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-19 15:15:36 --> Encrypt Class Initialized
INFO  - 2014-04-19 15:15:36 --> after session initialization................
INFO  - 2014-04-19 15:15:36 --> The Where query :::::::>>>i.id_internshipopening > 0 and i.location_id  = 1626
INFO  - 2014-04-19 15:15:36 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, i.duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
FROM (`internship_opening` i)
JOIN `location` l ON `l`.`id_location` = `i`.`location_id`
JOIN `internship_firm` inf ON `inf`.`id_internshipfirm` = `i`.`internshipfirm_id`
JOIN `internshipspecialization_specialization` inss ON `i`.`id_internshipopening` = `inss`.`internshipopening_id`
JOIN `internship_specialization` ins ON `ins`.`id_internshipspecialization` = `inss`.`specialization_id`
WHERE `i`.`id_internshipopening` > 0 and i.location_id = 1626
GROUP BY `id`
ORDER BY `i`.`id_internshipopening` desc
LIMIT 10
DEBUG - 2014-04-19 15:15:36 --> Final output sent to browser
DEBUG - 2014-04-19 15:15:36 --> Total execution time: 0.0454
DEBUG - 2014-04-19 15:38:53 --> Config Class Initialized
DEBUG - 2014-04-19 15:38:53 --> Hooks Class Initialized
DEBUG - 2014-04-19 15:38:53 --> Utf8 Class Initialized
DEBUG - 2014-04-19 15:38:53 --> UTF-8 Support Enabled
DEBUG - 2014-04-19 15:38:53 --> URI Class Initialized
DEBUG - 2014-04-19 15:38:53 --> Router Class Initialized
DEBUG - 2014-04-19 15:38:53 --> Output Class Initialized
DEBUG - 2014-04-19 15:38:53 --> Security Class Initialized
DEBUG - 2014-04-19 15:38:53 --> Input Class Initialized
DEBUG - 2014-04-19 15:38:53 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-19 15:38:53 --> Language Class Initialized
DEBUG - 2014-04-19 15:38:53 --> Loader Class Initialized
DEBUG - 2014-04-19 15:38:53 --> Helper loaded: form_helper
DEBUG - 2014-04-19 15:38:53 --> Helper loaded: url_helper
DEBUG - 2014-04-19 15:38:53 --> Helper loaded: html_helper
DEBUG - 2014-04-19 15:38:53 --> Database Driver Class Initialized
ERROR - 2014-04-19 15:38:53 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-19 15:38:53 --> Session Class Initialized
DEBUG - 2014-04-19 15:38:53 --> Helper loaded: string_helper
DEBUG - 2014-04-19 15:38:53 --> Session routines successfully run
DEBUG - 2014-04-19 15:38:53 --> Form Validation Class Initialized
DEBUG - 2014-04-19 15:38:53 --> Controller Class Initialized
DEBUG - 2014-04-19 15:38:53 --> Model Class Initialized
DEBUG - 2014-04-19 15:38:53 --> Model Class Initialized
DEBUG - 2014-04-19 15:38:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-19 15:38:53 --> Encrypt Class Initialized
INFO  - 2014-04-19 15:38:53 --> after session initialization................
INFO  - 2014-04-19 15:38:53 --> after internships list has been clicked.................
INFO  - 2014-04-19 15:38:53 --> inside retrieving locations 
INFO  - 2014-04-19 15:38:53 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-19 15:38:53 --> inside retrieving internship firms 
INFO  - 2014-04-19 15:38:53 --> SELECT `intf`.`id_internshipfirm` as id, `intf`.`name` as name
FROM (`internship_firm` intf)
ORDER BY `intf`.`name`
INFO  - 2014-04-19 15:38:53 --> inside retrieving internship duration 
INFO  - 2014-04-19 15:38:53 --> SELECT `intd`.`id_internshipduration` as id, `intd`.`name` as name
FROM (`internship_duration` intd)
ORDER BY `intd`.`id_internshipduration`
INFO  - 2014-04-19 15:38:53 --> inside retrieving internship specialization 
INFO  - 2014-04-19 15:38:53 --> SELECT `ints`.`id_internshipspecialization` as id, `ints`.`name` as name
FROM (`internship_specialization` ints)
ORDER BY `ints`.`name`
INFO  - 2014-04-19 15:38:53 --> last intern id is 0
DEBUG - 2014-04-19 15:38:53 --> DB Transaction Failure
ERROR - 2014-04-19 15:38:53 --> Query error: Unknown column 'i.duration' in 'field list'
DEBUG - 2014-04-19 15:38:53 --> Language file loaded: language/english/db_lang.php
DEBUG - 2014-04-19 15:45:24 --> Config Class Initialized
DEBUG - 2014-04-19 15:45:24 --> Hooks Class Initialized
DEBUG - 2014-04-19 15:45:24 --> Utf8 Class Initialized
DEBUG - 2014-04-19 15:45:24 --> UTF-8 Support Enabled
DEBUG - 2014-04-19 15:45:24 --> URI Class Initialized
DEBUG - 2014-04-19 15:45:24 --> Router Class Initialized
DEBUG - 2014-04-19 15:45:24 --> Output Class Initialized
DEBUG - 2014-04-19 15:45:24 --> Security Class Initialized
DEBUG - 2014-04-19 15:45:24 --> Input Class Initialized
DEBUG - 2014-04-19 15:45:24 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-19 15:45:24 --> Language Class Initialized
DEBUG - 2014-04-19 15:45:24 --> Loader Class Initialized
DEBUG - 2014-04-19 15:45:24 --> Helper loaded: form_helper
DEBUG - 2014-04-19 15:45:24 --> Helper loaded: url_helper
DEBUG - 2014-04-19 15:45:24 --> Helper loaded: html_helper
DEBUG - 2014-04-19 15:45:24 --> Database Driver Class Initialized
ERROR - 2014-04-19 15:45:24 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-19 15:45:24 --> Session Class Initialized
DEBUG - 2014-04-19 15:45:24 --> Helper loaded: string_helper
DEBUG - 2014-04-19 15:45:24 --> Session routines successfully run
DEBUG - 2014-04-19 15:45:24 --> Form Validation Class Initialized
DEBUG - 2014-04-19 15:45:24 --> Controller Class Initialized
DEBUG - 2014-04-19 15:45:24 --> Model Class Initialized
DEBUG - 2014-04-19 15:45:24 --> Model Class Initialized
DEBUG - 2014-04-19 15:45:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-19 15:45:24 --> Encrypt Class Initialized
INFO  - 2014-04-19 15:45:24 --> after session initialization................
INFO  - 2014-04-19 15:45:24 --> after internships list has been clicked.................
INFO  - 2014-04-19 15:45:24 --> inside retrieving locations 
INFO  - 2014-04-19 15:45:24 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-19 15:45:24 --> inside retrieving internship firms 
INFO  - 2014-04-19 15:45:24 --> SELECT `intf`.`id_internshipfirm` as id, `intf`.`name` as name
FROM (`internship_firm` intf)
ORDER BY `intf`.`name`
INFO  - 2014-04-19 15:45:24 --> inside retrieving internship duration 
INFO  - 2014-04-19 15:45:24 --> SELECT `intd`.`id_internshipduration` as id, `intd`.`name` as name
FROM (`internship_duration` intd)
ORDER BY `intd`.`id_internshipduration`
INFO  - 2014-04-19 15:45:24 --> inside retrieving internship specialization 
INFO  - 2014-04-19 15:45:24 --> SELECT `ints`.`id_internshipspecialization` as id, `ints`.`name` as name
FROM (`internship_specialization` ints)
ORDER BY `ints`.`name`
INFO  - 2014-04-19 15:45:24 --> last intern id is 0
DEBUG - 2014-04-19 15:45:24 --> DB Transaction Failure
ERROR - 2014-04-19 15:45:24 --> Query error: Unknown column 'i.duration' in 'field list'
DEBUG - 2014-04-19 15:45:24 --> Language file loaded: language/english/db_lang.php
DEBUG - 2014-04-19 15:46:32 --> Config Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Hooks Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Utf8 Class Initialized
DEBUG - 2014-04-19 15:46:32 --> UTF-8 Support Enabled
DEBUG - 2014-04-19 15:46:32 --> URI Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Router Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Output Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Security Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Input Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-19 15:46:32 --> Language Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Loader Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Helper loaded: form_helper
DEBUG - 2014-04-19 15:46:32 --> Helper loaded: url_helper
DEBUG - 2014-04-19 15:46:32 --> Helper loaded: html_helper
DEBUG - 2014-04-19 15:46:32 --> Database Driver Class Initialized
ERROR - 2014-04-19 15:46:32 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-19 15:46:32 --> Session Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Helper loaded: string_helper
DEBUG - 2014-04-19 15:46:32 --> Session routines successfully run
DEBUG - 2014-04-19 15:46:32 --> Form Validation Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Controller Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Model Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Model Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-19 15:46:32 --> Encrypt Class Initialized
INFO  - 2014-04-19 15:46:32 --> after session initialization................
INFO  - 2014-04-19 15:46:32 --> after internships list has been clicked.................
INFO  - 2014-04-19 15:46:32 --> inside retrieving locations 
INFO  - 2014-04-19 15:46:32 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-19 15:46:32 --> inside retrieving internship firms 
INFO  - 2014-04-19 15:46:32 --> SELECT `intf`.`id_internshipfirm` as id, `intf`.`name` as name
FROM (`internship_firm` intf)
ORDER BY `intf`.`name`
INFO  - 2014-04-19 15:46:32 --> inside retrieving internship duration 
INFO  - 2014-04-19 15:46:32 --> SELECT `intd`.`id_internshipduration` as id, `intd`.`name` as name
FROM (`internship_duration` intd)
ORDER BY `intd`.`id_internshipduration`
INFO  - 2014-04-19 15:46:32 --> inside retrieving internship specialization 
INFO  - 2014-04-19 15:46:32 --> SELECT `ints`.`id_internshipspecialization` as id, `ints`.`name` as name
FROM (`internship_specialization` ints)
ORDER BY `ints`.`name`
INFO  - 2014-04-19 15:46:32 --> last intern id is 0
DEBUG - 2014-04-19 15:46:32 --> Config Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Hooks Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Utf8 Class Initialized
DEBUG - 2014-04-19 15:46:32 --> UTF-8 Support Enabled
DEBUG - 2014-04-19 15:46:32 --> URI Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Router Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Output Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Security Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Input Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-19 15:46:32 --> Language Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Loader Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Helper loaded: form_helper
DEBUG - 2014-04-19 15:46:32 --> Helper loaded: url_helper
DEBUG - 2014-04-19 15:46:32 --> Helper loaded: html_helper
DEBUG - 2014-04-19 15:46:32 --> Database Driver Class Initialized
ERROR - 2014-04-19 15:46:32 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-19 15:46:32 --> Session Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Helper loaded: string_helper
DEBUG - 2014-04-19 15:46:32 --> Session routines successfully run
DEBUG - 2014-04-19 15:46:32 --> Form Validation Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Controller Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Model Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Model Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-19 15:46:32 --> Encrypt Class Initialized
INFO  - 2014-04-19 15:46:32 --> after session initialization................
DEBUG - 2014-04-19 15:46:32 --> Config Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Hooks Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Utf8 Class Initialized
DEBUG - 2014-04-19 15:46:32 --> UTF-8 Support Enabled
DEBUG - 2014-04-19 15:46:32 --> URI Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Router Class Initialized
DEBUG - 2014-04-19 15:46:32 --> No URI present. Default controller set.
DEBUG - 2014-04-19 15:46:32 --> Output Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Security Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Input Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-19 15:46:32 --> Language Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Loader Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Helper loaded: form_helper
DEBUG - 2014-04-19 15:46:32 --> Helper loaded: url_helper
DEBUG - 2014-04-19 15:46:32 --> Helper loaded: html_helper
DEBUG - 2014-04-19 15:46:32 --> Database Driver Class Initialized
ERROR - 2014-04-19 15:46:32 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-19 15:46:32 --> Session Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Helper loaded: string_helper
DEBUG - 2014-04-19 15:46:32 --> A session cookie was not found.
DEBUG - 2014-04-19 15:46:32 --> Session routines successfully run
DEBUG - 2014-04-19 15:46:32 --> Form Validation Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Controller Class Initialized
DEBUG - 2014-04-19 15:46:32 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2014-04-19 15:46:32 --> Final output sent to browser
DEBUG - 2014-04-19 15:46:32 --> Total execution time: 0.0212
DEBUG - 2014-04-19 15:46:32 --> Config Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Hooks Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Utf8 Class Initialized
DEBUG - 2014-04-19 15:46:32 --> UTF-8 Support Enabled
DEBUG - 2014-04-19 15:46:32 --> URI Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Router Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Output Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Security Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Input Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-19 15:46:32 --> Language Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Loader Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Helper loaded: form_helper
DEBUG - 2014-04-19 15:46:32 --> Helper loaded: url_helper
DEBUG - 2014-04-19 15:46:32 --> Helper loaded: html_helper
DEBUG - 2014-04-19 15:46:32 --> Database Driver Class Initialized
ERROR - 2014-04-19 15:46:32 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-19 15:46:32 --> Session Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Helper loaded: string_helper
DEBUG - 2014-04-19 15:46:32 --> Session routines successfully run
DEBUG - 2014-04-19 15:46:32 --> Form Validation Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Controller Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Model Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Model Class Initialized
DEBUG - 2014-04-19 15:46:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-19 15:46:32 --> Encrypt Class Initialized
INFO  - 2014-04-19 15:46:32 --> after session initialization................
INFO  - 2014-04-19 15:46:32 --> after rays has been clicked.................
INFO  - 2014-04-19 15:46:32 --> last article id is 0
INFO  - 2014-04-19 15:46:32 --> The session id is ========>d1354d25ef1427ece5391b80cf887ccc and the member id is =======>
INFO  - 2014-04-19 15:46:32 --> The session id is ========>d1354d25ef1427ece5391b80cf887ccc and the member id is =======>
INFO  - 2014-04-19 15:46:32 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-19 15:46:32 --> 0 the guest only data>>>>>
INFO  - 2014-04-19 15:46:32 --> 0 the guest only data>> AFTER >>>#31
INFO  - 2014-04-19 15:46:32 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-19 15:46:32 --> 0 the guest only data>>>>>#31
INFO  - 2014-04-19 15:46:32 --> 0 the guest only data>> AFTER >>>#16
INFO  - 2014-04-19 15:46:32 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-19 15:46:32 --> 1 the guest only data>>>>>#16
INFO  - 2014-04-19 15:46:32 --> 1 the guest only data>> AFTER >>>#16
INFO  - 2014-04-19 15:46:32 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-19 15:46:32 --> 0 the guest only data>>>>>#16
INFO  - 2014-04-19 15:46:32 --> 0 the guest only data>> AFTER >>>#14
INFO  - 2014-04-19 15:46:32 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-19 15:46:32 --> 1 the guest only data>>>>>#14
INFO  - 2014-04-19 15:46:32 --> 1 the guest only data>> AFTER >>>#14
INFO  - 2014-04-19 15:46:32 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-19 15:46:32 --> 0 the guest only data>>>>>#14
INFO  - 2014-04-19 15:46:32 --> 0 the guest only data>> AFTER >>>#12
INFO  - 2014-04-19 15:46:32 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-19 15:46:32 --> 1 the guest only data>>>>>#12
INFO  - 2014-04-19 15:46:32 --> 1 the guest only data>> AFTER >>>#12
INFO  - 2014-04-19 15:46:32 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-19 15:46:32 --> 0 the guest only data>>>>>#12
INFO  - 2014-04-19 15:46:32 --> 0 the guest only data>> AFTER >>>#10
INFO  - 2014-04-19 15:46:32 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-19 15:46:32 --> 0 the guest only data>>>>>#10
INFO  - 2014-04-19 15:46:32 --> 0 the guest only data>> AFTER >>>#9
INFO  - 2014-04-19 15:46:32 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-19 15:46:32 --> 1 the guest only data>>>>>#9
INFO  - 2014-04-19 15:46:32 --> 1 the guest only data>> AFTER >>>#9
INFO  - 2014-04-19 15:46:32 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-19 15:46:32 --> 0 the guest only data>>>>>#9
INFO  - 2014-04-19 15:46:32 --> 0 the guest only data>> AFTER >>>#7
INFO  - 2014-04-19 15:46:32 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-19 15:46:32 --> 1 the guest only data>>>>>#7
INFO  - 2014-04-19 15:46:32 --> 1 the guest only data>> AFTER >>>#7
INFO  - 2014-04-19 15:46:32 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-19 15:46:32 --> 0 the guest only data>>>>>#7
INFO  - 2014-04-19 15:46:32 --> 0 the guest only data>> AFTER >>>#5
INFO  - 2014-04-19 15:46:32 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-19 15:46:32 --> 0 the guest only data>>>>>#5
INFO  - 2014-04-19 15:46:32 --> 0 the guest only data>> AFTER >>>#4
INFO  - 2014-04-19 15:46:32 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-19 15:46:32 --> 1 the guest only data>>>>>#4
INFO  - 2014-04-19 15:46:32 --> 1 the guest only data>> AFTER >>>#4
INFO  - 2014-04-19 15:46:32 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-19 15:46:32 --> 1 the guest only data>>>>>#4
INFO  - 2014-04-19 15:46:32 --> 1 the guest only data>> AFTER >>>#4
INFO  - 2014-04-19 15:46:32 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-19 15:46:32 --> 1 the guest only data>>>>>#4
INFO  - 2014-04-19 15:46:32 --> 1 the guest only data>> AFTER >>>#4
DEBUG - 2014-04-19 15:46:32 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2014-04-19 15:46:32 --> Final output sent to browser
DEBUG - 2014-04-19 15:46:32 --> Total execution time: 0.0349
DEBUG - 2014-04-19 15:46:42 --> Config Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Hooks Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Utf8 Class Initialized
DEBUG - 2014-04-19 15:46:42 --> UTF-8 Support Enabled
DEBUG - 2014-04-19 15:46:42 --> URI Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Router Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Output Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Security Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Input Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-19 15:46:42 --> Language Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Loader Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Helper loaded: form_helper
DEBUG - 2014-04-19 15:46:42 --> Helper loaded: url_helper
DEBUG - 2014-04-19 15:46:42 --> Helper loaded: html_helper
DEBUG - 2014-04-19 15:46:42 --> Database Driver Class Initialized
ERROR - 2014-04-19 15:46:42 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-19 15:46:42 --> Session Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Helper loaded: string_helper
DEBUG - 2014-04-19 15:46:42 --> Session routines successfully run
DEBUG - 2014-04-19 15:46:42 --> Form Validation Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Controller Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Model Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Model Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-19 15:46:42 --> Encrypt Class Initialized
INFO  - 2014-04-19 15:46:42 --> after session initialization................
INFO  - 2014-04-19 15:46:42 --> after internships list has been clicked.................
INFO  - 2014-04-19 15:46:42 --> inside retrieving locations 
INFO  - 2014-04-19 15:46:42 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-19 15:46:42 --> inside retrieving internship firms 
INFO  - 2014-04-19 15:46:42 --> SELECT `intf`.`id_internshipfirm` as id, `intf`.`name` as name
FROM (`internship_firm` intf)
ORDER BY `intf`.`name`
INFO  - 2014-04-19 15:46:42 --> inside retrieving internship duration 
INFO  - 2014-04-19 15:46:42 --> SELECT `intd`.`id_internshipduration` as id, `intd`.`name` as name
FROM (`internship_duration` intd)
ORDER BY `intd`.`id_internshipduration`
INFO  - 2014-04-19 15:46:42 --> inside retrieving internship specialization 
INFO  - 2014-04-19 15:46:42 --> SELECT `ints`.`id_internshipspecialization` as id, `ints`.`name` as name
FROM (`internship_specialization` ints)
ORDER BY `ints`.`name`
INFO  - 2014-04-19 15:46:42 --> last intern id is 0
DEBUG - 2014-04-19 15:46:42 --> Config Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Hooks Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Utf8 Class Initialized
DEBUG - 2014-04-19 15:46:42 --> UTF-8 Support Enabled
DEBUG - 2014-04-19 15:46:42 --> URI Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Router Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Output Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Security Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Input Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-19 15:46:42 --> Language Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Loader Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Helper loaded: form_helper
DEBUG - 2014-04-19 15:46:42 --> Helper loaded: url_helper
DEBUG - 2014-04-19 15:46:42 --> Helper loaded: html_helper
DEBUG - 2014-04-19 15:46:42 --> Database Driver Class Initialized
ERROR - 2014-04-19 15:46:42 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-19 15:46:42 --> Session Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Helper loaded: string_helper
DEBUG - 2014-04-19 15:46:42 --> Session routines successfully run
DEBUG - 2014-04-19 15:46:42 --> Form Validation Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Controller Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Model Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Model Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-19 15:46:42 --> Encrypt Class Initialized
INFO  - 2014-04-19 15:46:42 --> after session initialization................
DEBUG - 2014-04-19 15:46:42 --> Config Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Hooks Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Utf8 Class Initialized
DEBUG - 2014-04-19 15:46:42 --> UTF-8 Support Enabled
DEBUG - 2014-04-19 15:46:42 --> URI Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Router Class Initialized
DEBUG - 2014-04-19 15:46:42 --> No URI present. Default controller set.
DEBUG - 2014-04-19 15:46:42 --> Output Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Security Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Input Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-19 15:46:42 --> Language Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Loader Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Helper loaded: form_helper
DEBUG - 2014-04-19 15:46:42 --> Helper loaded: url_helper
DEBUG - 2014-04-19 15:46:42 --> Helper loaded: html_helper
DEBUG - 2014-04-19 15:46:42 --> Database Driver Class Initialized
ERROR - 2014-04-19 15:46:42 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-19 15:46:42 --> Session Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Helper loaded: string_helper
DEBUG - 2014-04-19 15:46:42 --> A session cookie was not found.
DEBUG - 2014-04-19 15:46:42 --> Session routines successfully run
DEBUG - 2014-04-19 15:46:42 --> Form Validation Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Controller Class Initialized
DEBUG - 2014-04-19 15:46:42 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2014-04-19 15:46:42 --> Final output sent to browser
DEBUG - 2014-04-19 15:46:42 --> Total execution time: 0.0157
DEBUG - 2014-04-19 15:46:42 --> Config Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Hooks Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Utf8 Class Initialized
DEBUG - 2014-04-19 15:46:42 --> UTF-8 Support Enabled
DEBUG - 2014-04-19 15:46:42 --> URI Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Router Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Output Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Security Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Input Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-19 15:46:42 --> Language Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Loader Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Helper loaded: form_helper
DEBUG - 2014-04-19 15:46:42 --> Helper loaded: url_helper
DEBUG - 2014-04-19 15:46:42 --> Helper loaded: html_helper
DEBUG - 2014-04-19 15:46:42 --> Database Driver Class Initialized
ERROR - 2014-04-19 15:46:42 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-19 15:46:42 --> Session Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Helper loaded: string_helper
DEBUG - 2014-04-19 15:46:42 --> Session routines successfully run
DEBUG - 2014-04-19 15:46:42 --> Form Validation Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Controller Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Model Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Model Class Initialized
DEBUG - 2014-04-19 15:46:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-19 15:46:42 --> Encrypt Class Initialized
INFO  - 2014-04-19 15:46:42 --> after session initialization................
INFO  - 2014-04-19 15:46:42 --> after rays has been clicked.................
INFO  - 2014-04-19 15:46:42 --> last article id is 0
INFO  - 2014-04-19 15:46:42 --> The session id is ========>1cec9f62101fa3758b9d4958195d6f96 and the member id is =======>
INFO  - 2014-04-19 15:46:42 --> The session id is ========>1cec9f62101fa3758b9d4958195d6f96 and the member id is =======>
INFO  - 2014-04-19 15:46:42 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-19 15:46:42 --> 0 the guest only data>>>>>
INFO  - 2014-04-19 15:46:42 --> 0 the guest only data>> AFTER >>>#31
INFO  - 2014-04-19 15:46:42 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-19 15:46:42 --> 0 the guest only data>>>>>#31
INFO  - 2014-04-19 15:46:42 --> 0 the guest only data>> AFTER >>>#16
INFO  - 2014-04-19 15:46:42 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-19 15:46:42 --> 1 the guest only data>>>>>#16
INFO  - 2014-04-19 15:46:42 --> 1 the guest only data>> AFTER >>>#16
INFO  - 2014-04-19 15:46:42 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-19 15:46:42 --> 0 the guest only data>>>>>#16
INFO  - 2014-04-19 15:46:42 --> 0 the guest only data>> AFTER >>>#14
INFO  - 2014-04-19 15:46:42 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-19 15:46:42 --> 1 the guest only data>>>>>#14
INFO  - 2014-04-19 15:46:42 --> 1 the guest only data>> AFTER >>>#14
INFO  - 2014-04-19 15:46:42 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-19 15:46:42 --> 0 the guest only data>>>>>#14
INFO  - 2014-04-19 15:46:42 --> 0 the guest only data>> AFTER >>>#12
INFO  - 2014-04-19 15:46:42 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-19 15:46:42 --> 1 the guest only data>>>>>#12
INFO  - 2014-04-19 15:46:42 --> 1 the guest only data>> AFTER >>>#12
INFO  - 2014-04-19 15:46:42 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-19 15:46:42 --> 0 the guest only data>>>>>#12
INFO  - 2014-04-19 15:46:42 --> 0 the guest only data>> AFTER >>>#10
INFO  - 2014-04-19 15:46:42 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-19 15:46:42 --> 0 the guest only data>>>>>#10
INFO  - 2014-04-19 15:46:42 --> 0 the guest only data>> AFTER >>>#9
INFO  - 2014-04-19 15:46:42 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-19 15:46:42 --> 1 the guest only data>>>>>#9
INFO  - 2014-04-19 15:46:42 --> 1 the guest only data>> AFTER >>>#9
INFO  - 2014-04-19 15:46:42 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-19 15:46:42 --> 0 the guest only data>>>>>#9
INFO  - 2014-04-19 15:46:42 --> 0 the guest only data>> AFTER >>>#7
INFO  - 2014-04-19 15:46:42 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-19 15:46:42 --> 1 the guest only data>>>>>#7
INFO  - 2014-04-19 15:46:42 --> 1 the guest only data>> AFTER >>>#7
INFO  - 2014-04-19 15:46:42 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-19 15:46:42 --> 0 the guest only data>>>>>#7
INFO  - 2014-04-19 15:46:42 --> 0 the guest only data>> AFTER >>>#5
INFO  - 2014-04-19 15:46:42 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-19 15:46:42 --> 0 the guest only data>>>>>#5
INFO  - 2014-04-19 15:46:42 --> 0 the guest only data>> AFTER >>>#4
INFO  - 2014-04-19 15:46:42 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-19 15:46:42 --> 1 the guest only data>>>>>#4
INFO  - 2014-04-19 15:46:42 --> 1 the guest only data>> AFTER >>>#4
INFO  - 2014-04-19 15:46:42 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-19 15:46:42 --> 1 the guest only data>>>>>#4
INFO  - 2014-04-19 15:46:42 --> 1 the guest only data>> AFTER >>>#4
INFO  - 2014-04-19 15:46:42 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-19 15:46:42 --> 1 the guest only data>>>>>#4
INFO  - 2014-04-19 15:46:42 --> 1 the guest only data>> AFTER >>>#4
DEBUG - 2014-04-19 15:46:42 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2014-04-19 15:46:42 --> Final output sent to browser
DEBUG - 2014-04-19 15:46:42 --> Total execution time: 0.0279
DEBUG - 2014-04-19 15:46:47 --> Config Class Initialized
DEBUG - 2014-04-19 15:46:47 --> Hooks Class Initialized
DEBUG - 2014-04-19 15:46:47 --> Utf8 Class Initialized
DEBUG - 2014-04-19 15:46:47 --> UTF-8 Support Enabled
DEBUG - 2014-04-19 15:46:47 --> URI Class Initialized
DEBUG - 2014-04-19 15:46:47 --> Router Class Initialized
DEBUG - 2014-04-19 15:46:47 --> Output Class Initialized
DEBUG - 2014-04-19 15:46:47 --> Security Class Initialized
DEBUG - 2014-04-19 15:46:47 --> Input Class Initialized
DEBUG - 2014-04-19 15:46:47 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-19 15:46:47 --> Language Class Initialized
DEBUG - 2014-04-19 15:46:47 --> Loader Class Initialized
DEBUG - 2014-04-19 15:46:47 --> Helper loaded: form_helper
DEBUG - 2014-04-19 15:46:47 --> Helper loaded: url_helper
DEBUG - 2014-04-19 15:46:47 --> Helper loaded: html_helper
DEBUG - 2014-04-19 15:46:47 --> Database Driver Class Initialized
ERROR - 2014-04-19 15:46:47 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-19 15:46:47 --> Session Class Initialized
DEBUG - 2014-04-19 15:46:47 --> Helper loaded: string_helper
DEBUG - 2014-04-19 15:46:47 --> Session routines successfully run
DEBUG - 2014-04-19 15:46:47 --> Form Validation Class Initialized
DEBUG - 2014-04-19 15:46:47 --> Controller Class Initialized
DEBUG - 2014-04-19 15:46:47 --> Model Class Initialized
DEBUG - 2014-04-19 15:46:47 --> Model Class Initialized
DEBUG - 2014-04-19 15:46:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-19 15:46:47 --> Encrypt Class Initialized
INFO  - 2014-04-19 15:46:47 --> after session initialization................
INFO  - 2014-04-19 15:46:47 --> inside rays login auth.............sys_admin/user_authorization/redirecttorays
INFO  - 2014-04-19 15:46:47 --> inside rays login auth.............sys_admin/user_authorization/redirecttorays
DEBUG - 2014-04-19 15:46:47 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2014-04-19 15:46:47 --> XSS Filtering completed
DEBUG - 2014-04-19 15:46:47 --> XSS Filtering completed
INFO  - 2014-04-19 15:46:47 --> login details ::::::::::===>SELECT `ld`.*
FROM (`logindetails` ld)
WHERE lower(ld.username) =  'emeka@swifta.com'
INFO  - 2014-04-19 15:46:47 --> before getting the relation of member............33
INFO  - 2014-04-19 15:46:47 --> registration complete and username set on userpage.................Emeka
INFO  - 2014-04-19 15:46:47 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  '33'
INFO  - 2014-04-19 15:46:47 --> last news id is 0
INFO  - 2014-04-19 15:46:47 --> SELECT a.id_article as id, a.title as newsletter_title, a.description as newsletter_description, a.guestonly as guestonly, a.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`article` a)
JOIN `member` m ON `a`.`memberid_member` = `m`.`id_member`
WHERE `a`.`id_article` <> 0
ORDER BY `a`.`id_article` desc
LIMIT 15
INFO  - 2014-04-19 15:46:47 --> after newsleters list has been clicked.................
INFO  - 2014-04-19 15:46:47 --> The session id is ========>1cec9f62101fa3758b9d4958195d6f96 and the member id is =======>33
INFO  - 2014-04-19 15:46:47 --> 0 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=31&article_type=newsletter_title
INFO  - 2014-04-19 15:46:47 --> 0 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=16&article_type=newsletter_title
INFO  - 2014-04-19 15:46:47 --> 1 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=15&article_type=newsletter_title
INFO  - 2014-04-19 15:46:47 --> 0 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=14&article_type=newsletter_title
INFO  - 2014-04-19 15:46:47 --> 1 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=13&article_type=newsletter_title
INFO  - 2014-04-19 15:46:47 --> 0 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=12&article_type=newsletter_title
INFO  - 2014-04-19 15:46:47 --> 1 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=11&article_type=newsletter_title
INFO  - 2014-04-19 15:46:47 --> 0 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=10&article_type=newsletter_title
INFO  - 2014-04-19 15:46:47 --> 0 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=9&article_type=newsletter_title
INFO  - 2014-04-19 15:46:47 --> 1 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=8&article_type=newsletter_title
INFO  - 2014-04-19 15:46:47 --> 0 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=7&article_type=newsletter_title
INFO  - 2014-04-19 15:46:47 --> 1 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=6&article_type=newsletter_title
INFO  - 2014-04-19 15:46:47 --> 0 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=5&article_type=newsletter_title
INFO  - 2014-04-19 15:46:47 --> 0 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=4&article_type=newsletter_title
INFO  - 2014-04-19 15:46:47 --> 1 the guest only data>>>>>http://localhost/pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=3&article_type=newsletter_title
DEBUG - 2014-04-19 15:46:47 --> File loaded: ../pharmaray-application/views/articles.php
DEBUG - 2014-04-19 15:46:47 --> Final output sent to browser
DEBUG - 2014-04-19 15:46:47 --> Total execution time: 0.0461
DEBUG - 2014-04-19 15:46:50 --> Config Class Initialized
DEBUG - 2014-04-19 15:46:50 --> Hooks Class Initialized
DEBUG - 2014-04-19 15:46:50 --> Utf8 Class Initialized
DEBUG - 2014-04-19 15:46:50 --> UTF-8 Support Enabled
DEBUG - 2014-04-19 15:46:50 --> URI Class Initialized
DEBUG - 2014-04-19 15:46:50 --> Router Class Initialized
DEBUG - 2014-04-19 15:46:50 --> Output Class Initialized
DEBUG - 2014-04-19 15:46:50 --> Security Class Initialized
DEBUG - 2014-04-19 15:46:50 --> Input Class Initialized
DEBUG - 2014-04-19 15:46:50 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-19 15:46:50 --> Language Class Initialized
DEBUG - 2014-04-19 15:46:50 --> Loader Class Initialized
DEBUG - 2014-04-19 15:46:50 --> Helper loaded: form_helper
DEBUG - 2014-04-19 15:46:50 --> Helper loaded: url_helper
DEBUG - 2014-04-19 15:46:50 --> Helper loaded: html_helper
DEBUG - 2014-04-19 15:46:50 --> Database Driver Class Initialized
ERROR - 2014-04-19 15:46:50 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-19 15:46:50 --> Session Class Initialized
DEBUG - 2014-04-19 15:46:50 --> Helper loaded: string_helper
DEBUG - 2014-04-19 15:46:50 --> Session routines successfully run
DEBUG - 2014-04-19 15:46:50 --> Form Validation Class Initialized
DEBUG - 2014-04-19 15:46:50 --> Controller Class Initialized
DEBUG - 2014-04-19 15:46:50 --> Model Class Initialized
DEBUG - 2014-04-19 15:46:50 --> Model Class Initialized
DEBUG - 2014-04-19 15:46:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-19 15:46:50 --> Encrypt Class Initialized
INFO  - 2014-04-19 15:46:50 --> after session initialization................
INFO  - 2014-04-19 15:46:50 --> after internships list has been clicked.................
INFO  - 2014-04-19 15:46:50 --> inside retrieving locations 
INFO  - 2014-04-19 15:46:50 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-19 15:46:50 --> inside retrieving internship firms 
INFO  - 2014-04-19 15:46:50 --> SELECT `intf`.`id_internshipfirm` as id, `intf`.`name` as name
FROM (`internship_firm` intf)
ORDER BY `intf`.`name`
INFO  - 2014-04-19 15:46:50 --> inside retrieving internship duration 
INFO  - 2014-04-19 15:46:50 --> SELECT `intd`.`id_internshipduration` as id, `intd`.`name` as name
FROM (`internship_duration` intd)
ORDER BY `intd`.`id_internshipduration`
INFO  - 2014-04-19 15:46:50 --> inside retrieving internship specialization 
INFO  - 2014-04-19 15:46:50 --> SELECT `ints`.`id_internshipspecialization` as id, `ints`.`name` as name
FROM (`internship_specialization` ints)
ORDER BY `ints`.`name`
INFO  - 2014-04-19 15:46:50 --> last intern id is 0
INFO  - 2014-04-19 15:46:50 --> The session id is ========>1cec9f62101fa3758b9d4958195d6f96 and the member id is =======>33
DEBUG - 2014-04-19 15:46:50 --> File loaded: ../pharmaray-application/views/internships.php
DEBUG - 2014-04-19 15:46:50 --> Final output sent to browser
DEBUG - 2014-04-19 15:46:50 --> Total execution time: 0.0356
DEBUG - 2014-04-19 15:46:54 --> Config Class Initialized
DEBUG - 2014-04-19 15:46:54 --> Hooks Class Initialized
DEBUG - 2014-04-19 15:46:54 --> Utf8 Class Initialized
DEBUG - 2014-04-19 15:46:54 --> UTF-8 Support Enabled
DEBUG - 2014-04-19 15:46:54 --> URI Class Initialized
DEBUG - 2014-04-19 15:46:54 --> Router Class Initialized
DEBUG - 2014-04-19 15:46:54 --> Output Class Initialized
DEBUG - 2014-04-19 15:46:54 --> Security Class Initialized
DEBUG - 2014-04-19 15:46:54 --> Input Class Initialized
DEBUG - 2014-04-19 15:46:54 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-19 15:46:54 --> Language Class Initialized
DEBUG - 2014-04-19 15:46:54 --> Loader Class Initialized
DEBUG - 2014-04-19 15:46:54 --> Helper loaded: form_helper
DEBUG - 2014-04-19 15:46:54 --> Helper loaded: url_helper
DEBUG - 2014-04-19 15:46:54 --> Helper loaded: html_helper
DEBUG - 2014-04-19 15:46:54 --> Database Driver Class Initialized
ERROR - 2014-04-19 15:46:54 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-19 15:46:54 --> Session Class Initialized
DEBUG - 2014-04-19 15:46:54 --> Helper loaded: string_helper
DEBUG - 2014-04-19 15:46:54 --> Session routines successfully run
DEBUG - 2014-04-19 15:46:54 --> Form Validation Class Initialized
DEBUG - 2014-04-19 15:46:54 --> Controller Class Initialized
DEBUG - 2014-04-19 15:46:54 --> Model Class Initialized
DEBUG - 2014-04-19 15:46:54 --> Model Class Initialized
DEBUG - 2014-04-19 15:46:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-19 15:46:54 --> Encrypt Class Initialized
INFO  - 2014-04-19 15:46:54 --> after session initialization................
INFO  - 2014-04-19 15:46:54 --> The Where query :::::::>>>i.id_internshipopening > 0
DEBUG - 2014-04-19 15:46:54 --> DB Transaction Failure
ERROR - 2014-04-19 15:46:54 --> Query error: Unknown column 'i.duration' in 'field list'
DEBUG - 2014-04-19 15:46:54 --> Language file loaded: language/english/db_lang.php
DEBUG - 2014-04-19 15:46:59 --> Config Class Initialized
DEBUG - 2014-04-19 15:46:59 --> Hooks Class Initialized
DEBUG - 2014-04-19 15:46:59 --> Utf8 Class Initialized
DEBUG - 2014-04-19 15:46:59 --> UTF-8 Support Enabled
DEBUG - 2014-04-19 15:46:59 --> URI Class Initialized
DEBUG - 2014-04-19 15:46:59 --> Router Class Initialized
DEBUG - 2014-04-19 15:46:59 --> Output Class Initialized
DEBUG - 2014-04-19 15:46:59 --> Security Class Initialized
DEBUG - 2014-04-19 15:46:59 --> Input Class Initialized
DEBUG - 2014-04-19 15:46:59 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-19 15:46:59 --> Language Class Initialized
DEBUG - 2014-04-19 15:46:59 --> Loader Class Initialized
DEBUG - 2014-04-19 15:46:59 --> Helper loaded: form_helper
DEBUG - 2014-04-19 15:46:59 --> Helper loaded: url_helper
DEBUG - 2014-04-19 15:46:59 --> Helper loaded: html_helper
DEBUG - 2014-04-19 15:46:59 --> Database Driver Class Initialized
ERROR - 2014-04-19 15:46:59 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-19 15:46:59 --> Session Class Initialized
DEBUG - 2014-04-19 15:46:59 --> Helper loaded: string_helper
DEBUG - 2014-04-19 15:46:59 --> Session routines successfully run
DEBUG - 2014-04-19 15:46:59 --> Form Validation Class Initialized
DEBUG - 2014-04-19 15:46:59 --> Controller Class Initialized
DEBUG - 2014-04-19 15:46:59 --> Model Class Initialized
DEBUG - 2014-04-19 15:46:59 --> Model Class Initialized
DEBUG - 2014-04-19 15:46:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-19 15:46:59 --> Encrypt Class Initialized
INFO  - 2014-04-19 15:46:59 --> after session initialization................
INFO  - 2014-04-19 15:46:59 --> after internships list has been clicked.................
INFO  - 2014-04-19 15:46:59 --> inside retrieving locations 
INFO  - 2014-04-19 15:46:59 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-19 15:46:59 --> inside retrieving internship firms 
INFO  - 2014-04-19 15:46:59 --> SELECT `intf`.`id_internshipfirm` as id, `intf`.`name` as name
FROM (`internship_firm` intf)
ORDER BY `intf`.`name`
INFO  - 2014-04-19 15:46:59 --> inside retrieving internship duration 
INFO  - 2014-04-19 15:46:59 --> SELECT `intd`.`id_internshipduration` as id, `intd`.`name` as name
FROM (`internship_duration` intd)
ORDER BY `intd`.`id_internshipduration`
INFO  - 2014-04-19 15:46:59 --> inside retrieving internship specialization 
INFO  - 2014-04-19 15:46:59 --> SELECT `ints`.`id_internshipspecialization` as id, `ints`.`name` as name
FROM (`internship_specialization` ints)
ORDER BY `ints`.`name`
INFO  - 2014-04-19 15:46:59 --> last intern id is 0
INFO  - 2014-04-19 15:46:59 --> The session id is ========>1cec9f62101fa3758b9d4958195d6f96 and the member id is =======>33
DEBUG - 2014-04-19 15:46:59 --> File loaded: ../pharmaray-application/views/internships.php
DEBUG - 2014-04-19 15:46:59 --> Final output sent to browser
DEBUG - 2014-04-19 15:46:59 --> Total execution time: 0.0314
DEBUG - 2014-04-19 15:47:01 --> Config Class Initialized
DEBUG - 2014-04-19 15:47:01 --> Hooks Class Initialized
DEBUG - 2014-04-19 15:47:01 --> Utf8 Class Initialized
DEBUG - 2014-04-19 15:47:01 --> UTF-8 Support Enabled
DEBUG - 2014-04-19 15:47:01 --> URI Class Initialized
DEBUG - 2014-04-19 15:47:01 --> Router Class Initialized
DEBUG - 2014-04-19 15:47:01 --> Output Class Initialized
DEBUG - 2014-04-19 15:47:01 --> Security Class Initialized
DEBUG - 2014-04-19 15:47:01 --> Input Class Initialized
DEBUG - 2014-04-19 15:47:01 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-19 15:47:01 --> Language Class Initialized
DEBUG - 2014-04-19 15:47:01 --> Loader Class Initialized
DEBUG - 2014-04-19 15:47:01 --> Helper loaded: form_helper
DEBUG - 2014-04-19 15:47:01 --> Helper loaded: url_helper
DEBUG - 2014-04-19 15:47:01 --> Helper loaded: html_helper
DEBUG - 2014-04-19 15:47:01 --> Database Driver Class Initialized
ERROR - 2014-04-19 15:47:01 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-19 15:47:01 --> Session Class Initialized
DEBUG - 2014-04-19 15:47:01 --> Helper loaded: string_helper
DEBUG - 2014-04-19 15:47:01 --> Session routines successfully run
DEBUG - 2014-04-19 15:47:01 --> Form Validation Class Initialized
DEBUG - 2014-04-19 15:47:01 --> Controller Class Initialized
DEBUG - 2014-04-19 15:47:01 --> Model Class Initialized
DEBUG - 2014-04-19 15:47:01 --> Model Class Initialized
DEBUG - 2014-04-19 15:47:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-19 15:47:01 --> Encrypt Class Initialized
INFO  - 2014-04-19 15:47:01 --> after session initialization................
INFO  - 2014-04-19 15:47:01 --> after internships list has been clicked.................
INFO  - 2014-04-19 15:47:01 --> inside retrieving locations 
INFO  - 2014-04-19 15:47:01 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-19 15:47:01 --> inside retrieving internship firms 
INFO  - 2014-04-19 15:47:01 --> SELECT `intf`.`id_internshipfirm` as id, `intf`.`name` as name
FROM (`internship_firm` intf)
ORDER BY `intf`.`name`
INFO  - 2014-04-19 15:47:01 --> inside retrieving internship duration 
INFO  - 2014-04-19 15:47:01 --> SELECT `intd`.`id_internshipduration` as id, `intd`.`name` as name
FROM (`internship_duration` intd)
ORDER BY `intd`.`id_internshipduration`
INFO  - 2014-04-19 15:47:01 --> inside retrieving internship specialization 
INFO  - 2014-04-19 15:47:01 --> SELECT `ints`.`id_internshipspecialization` as id, `ints`.`name` as name
FROM (`internship_specialization` ints)
ORDER BY `ints`.`name`
INFO  - 2014-04-19 15:47:01 --> last intern id is 0
INFO  - 2014-04-19 15:47:01 --> The session id is ========>1cec9f62101fa3758b9d4958195d6f96 and the member id is =======>33
DEBUG - 2014-04-19 15:47:01 --> File loaded: ../pharmaray-application/views/internships.php
DEBUG - 2014-04-19 15:47:01 --> Final output sent to browser
DEBUG - 2014-04-19 15:47:01 --> Total execution time: 0.0312
DEBUG - 2014-04-19 15:47:05 --> Config Class Initialized
DEBUG - 2014-04-19 15:47:05 --> Hooks Class Initialized
DEBUG - 2014-04-19 15:47:05 --> Utf8 Class Initialized
DEBUG - 2014-04-19 15:47:05 --> UTF-8 Support Enabled
DEBUG - 2014-04-19 15:47:05 --> URI Class Initialized
DEBUG - 2014-04-19 15:47:05 --> Router Class Initialized
DEBUG - 2014-04-19 15:47:05 --> Output Class Initialized
DEBUG - 2014-04-19 15:47:05 --> Security Class Initialized
DEBUG - 2014-04-19 15:47:05 --> Input Class Initialized
DEBUG - 2014-04-19 15:47:05 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-19 15:47:05 --> Language Class Initialized
DEBUG - 2014-04-19 15:47:05 --> Loader Class Initialized
DEBUG - 2014-04-19 15:47:05 --> Helper loaded: form_helper
DEBUG - 2014-04-19 15:47:05 --> Helper loaded: url_helper
DEBUG - 2014-04-19 15:47:05 --> Helper loaded: html_helper
DEBUG - 2014-04-19 15:47:05 --> Database Driver Class Initialized
ERROR - 2014-04-19 15:47:05 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-19 15:47:05 --> Session Class Initialized
DEBUG - 2014-04-19 15:47:05 --> Helper loaded: string_helper
DEBUG - 2014-04-19 15:47:05 --> Session routines successfully run
DEBUG - 2014-04-19 15:47:05 --> Form Validation Class Initialized
DEBUG - 2014-04-19 15:47:05 --> Controller Class Initialized
DEBUG - 2014-04-19 15:47:05 --> Model Class Initialized
DEBUG - 2014-04-19 15:47:05 --> Model Class Initialized
DEBUG - 2014-04-19 15:47:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-19 15:47:05 --> Encrypt Class Initialized
INFO  - 2014-04-19 15:47:05 --> after session initialization................
INFO  - 2014-04-19 15:47:05 --> after internships list has been clicked.................
INFO  - 2014-04-19 15:47:05 --> inside retrieving locations 
INFO  - 2014-04-19 15:47:05 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-19 15:47:05 --> inside retrieving internship firms 
INFO  - 2014-04-19 15:47:05 --> SELECT `intf`.`id_internshipfirm` as id, `intf`.`name` as name
FROM (`internship_firm` intf)
ORDER BY `intf`.`name`
INFO  - 2014-04-19 15:47:05 --> inside retrieving internship duration 
INFO  - 2014-04-19 15:47:05 --> SELECT `intd`.`id_internshipduration` as id, `intd`.`name` as name
FROM (`internship_duration` intd)
ORDER BY `intd`.`id_internshipduration`
INFO  - 2014-04-19 15:47:05 --> inside retrieving internship specialization 
INFO  - 2014-04-19 15:47:05 --> SELECT `ints`.`id_internshipspecialization` as id, `ints`.`name` as name
FROM (`internship_specialization` ints)
ORDER BY `ints`.`name`
INFO  - 2014-04-19 15:47:05 --> last intern id is 0
INFO  - 2014-04-19 15:47:05 --> The session id is ========>1cec9f62101fa3758b9d4958195d6f96 and the member id is =======>33
DEBUG - 2014-04-19 15:47:05 --> File loaded: ../pharmaray-application/views/internships.php
DEBUG - 2014-04-19 15:47:05 --> Final output sent to browser
DEBUG - 2014-04-19 15:47:05 --> Total execution time: 0.0344
DEBUG - 2014-04-19 15:53:37 --> Config Class Initialized
DEBUG - 2014-04-19 15:53:37 --> Hooks Class Initialized
DEBUG - 2014-04-19 15:53:37 --> Utf8 Class Initialized
DEBUG - 2014-04-19 15:53:37 --> UTF-8 Support Enabled
DEBUG - 2014-04-19 15:53:37 --> URI Class Initialized
DEBUG - 2014-04-19 15:53:37 --> Router Class Initialized
DEBUG - 2014-04-19 15:53:37 --> Output Class Initialized
DEBUG - 2014-04-19 15:53:37 --> Security Class Initialized
DEBUG - 2014-04-19 15:53:37 --> Input Class Initialized
DEBUG - 2014-04-19 15:53:37 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-19 15:53:37 --> Language Class Initialized
DEBUG - 2014-04-19 15:53:37 --> Loader Class Initialized
DEBUG - 2014-04-19 15:53:37 --> Helper loaded: form_helper
DEBUG - 2014-04-19 15:53:37 --> Helper loaded: url_helper
DEBUG - 2014-04-19 15:53:37 --> Helper loaded: html_helper
DEBUG - 2014-04-19 15:53:37 --> Database Driver Class Initialized
ERROR - 2014-04-19 15:53:37 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-19 15:53:37 --> Session Class Initialized
DEBUG - 2014-04-19 15:53:37 --> Helper loaded: string_helper
DEBUG - 2014-04-19 15:53:37 --> Session routines successfully run
DEBUG - 2014-04-19 15:53:37 --> Form Validation Class Initialized
DEBUG - 2014-04-19 15:53:37 --> Controller Class Initialized
DEBUG - 2014-04-19 15:53:37 --> Model Class Initialized
DEBUG - 2014-04-19 15:53:37 --> Model Class Initialized
DEBUG - 2014-04-19 15:53:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-19 15:53:37 --> Encrypt Class Initialized
INFO  - 2014-04-19 15:53:37 --> after session initialization................
INFO  - 2014-04-19 15:53:37 --> after community pharmacy  has been clicked.................
INFO  - 2014-04-19 15:53:37 --> inside retrieving pharmacy beyond id 0
INFO  - 2014-04-19 15:53:37 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2014-04-19 15:53:37 --> inside retrieving locations 
INFO  - 2014-04-19 15:53:37 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-19 15:53:37 --> The session id is ========>48d79ae5d049795758acebddbb26dc2e and the member id is =======>33
DEBUG - 2014-04-19 15:53:37 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2014-04-19 15:53:37 --> Final output sent to browser
DEBUG - 2014-04-19 15:53:37 --> Total execution time: 0.0397
DEBUG - 2014-04-19 15:53:39 --> Config Class Initialized
DEBUG - 2014-04-19 15:53:39 --> Hooks Class Initialized
DEBUG - 2014-04-19 15:53:39 --> Utf8 Class Initialized
DEBUG - 2014-04-19 15:53:39 --> UTF-8 Support Enabled
DEBUG - 2014-04-19 15:53:39 --> URI Class Initialized
DEBUG - 2014-04-19 15:53:39 --> Router Class Initialized
DEBUG - 2014-04-19 15:53:39 --> Output Class Initialized
DEBUG - 2014-04-19 15:53:39 --> Security Class Initialized
DEBUG - 2014-04-19 15:53:39 --> Input Class Initialized
DEBUG - 2014-04-19 15:53:39 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-19 15:53:39 --> Language Class Initialized
DEBUG - 2014-04-19 15:53:39 --> Loader Class Initialized
DEBUG - 2014-04-19 15:53:39 --> Helper loaded: form_helper
DEBUG - 2014-04-19 15:53:39 --> Helper loaded: url_helper
DEBUG - 2014-04-19 15:53:39 --> Helper loaded: html_helper
DEBUG - 2014-04-19 15:53:39 --> Database Driver Class Initialized
ERROR - 2014-04-19 15:53:39 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-19 15:53:39 --> Session Class Initialized
DEBUG - 2014-04-19 15:53:39 --> Helper loaded: string_helper
DEBUG - 2014-04-19 15:53:39 --> Session routines successfully run
DEBUG - 2014-04-19 15:53:39 --> Form Validation Class Initialized
DEBUG - 2014-04-19 15:53:39 --> Controller Class Initialized
DEBUG - 2014-04-19 15:53:39 --> Model Class Initialized
DEBUG - 2014-04-19 15:53:39 --> Model Class Initialized
DEBUG - 2014-04-19 15:53:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-19 15:53:39 --> Encrypt Class Initialized
INFO  - 2014-04-19 15:53:39 --> after session initialization................
INFO  - 2014-04-19 15:53:39 --> after internships list has been clicked.................
INFO  - 2014-04-19 15:53:39 --> inside retrieving locations 
INFO  - 2014-04-19 15:53:39 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-19 15:53:39 --> inside retrieving internship firms 
INFO  - 2014-04-19 15:53:39 --> SELECT `intf`.`id_internshipfirm` as id, `intf`.`name` as name
FROM (`internship_firm` intf)
ORDER BY `intf`.`name`
INFO  - 2014-04-19 15:53:39 --> inside retrieving internship duration 
INFO  - 2014-04-19 15:53:39 --> SELECT `intd`.`id_internshipduration` as id, `intd`.`name` as name
FROM (`internship_duration` intd)
ORDER BY `intd`.`id_internshipduration`
INFO  - 2014-04-19 15:53:39 --> inside retrieving internship specialization 
INFO  - 2014-04-19 15:53:39 --> SELECT `ints`.`id_internshipspecialization` as id, `ints`.`name` as name
FROM (`internship_specialization` ints)
ORDER BY `ints`.`name`
INFO  - 2014-04-19 15:53:39 --> last intern id is 0
INFO  - 2014-04-19 15:53:39 --> The session id is ========>48d79ae5d049795758acebddbb26dc2e and the member id is =======>33
DEBUG - 2014-04-19 15:53:39 --> File loaded: ../pharmaray-application/views/internships.php
DEBUG - 2014-04-19 15:53:39 --> Final output sent to browser
DEBUG - 2014-04-19 15:53:39 --> Total execution time: 0.0322
DEBUG - 2014-04-19 15:54:31 --> Config Class Initialized
DEBUG - 2014-04-19 15:54:31 --> Hooks Class Initialized
DEBUG - 2014-04-19 15:54:31 --> Utf8 Class Initialized
DEBUG - 2014-04-19 15:54:31 --> UTF-8 Support Enabled
DEBUG - 2014-04-19 15:54:31 --> URI Class Initialized
DEBUG - 2014-04-19 15:54:31 --> Router Class Initialized
DEBUG - 2014-04-19 15:54:31 --> Output Class Initialized
DEBUG - 2014-04-19 15:54:31 --> Security Class Initialized
DEBUG - 2014-04-19 15:54:31 --> Input Class Initialized
DEBUG - 2014-04-19 15:54:31 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-19 15:54:31 --> Language Class Initialized
DEBUG - 2014-04-19 15:54:31 --> Loader Class Initialized
DEBUG - 2014-04-19 15:54:31 --> Helper loaded: form_helper
DEBUG - 2014-04-19 15:54:31 --> Helper loaded: url_helper
DEBUG - 2014-04-19 15:54:31 --> Helper loaded: html_helper
DEBUG - 2014-04-19 15:54:31 --> Database Driver Class Initialized
ERROR - 2014-04-19 15:54:31 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-19 15:54:31 --> Session Class Initialized
DEBUG - 2014-04-19 15:54:31 --> Helper loaded: string_helper
DEBUG - 2014-04-19 15:54:31 --> Session routines successfully run
DEBUG - 2014-04-19 15:54:31 --> Form Validation Class Initialized
DEBUG - 2014-04-19 15:54:31 --> Controller Class Initialized
DEBUG - 2014-04-19 15:54:31 --> Model Class Initialized
DEBUG - 2014-04-19 15:54:31 --> Model Class Initialized
DEBUG - 2014-04-19 15:54:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-19 15:54:31 --> Encrypt Class Initialized
INFO  - 2014-04-19 15:54:31 --> after session initialization................
INFO  - 2014-04-19 15:54:31 --> after internships list has been clicked.................
INFO  - 2014-04-19 15:54:31 --> inside retrieving locations 
INFO  - 2014-04-19 15:54:31 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-04-19 15:54:31 --> inside retrieving internship firms 
INFO  - 2014-04-19 15:54:31 --> SELECT `intf`.`id_internshipfirm` as id, `intf`.`name` as name
FROM (`internship_firm` intf)
ORDER BY `intf`.`name`
INFO  - 2014-04-19 15:54:31 --> inside retrieving internship duration 
INFO  - 2014-04-19 15:54:31 --> SELECT `intd`.`id_internshipduration` as id, `intd`.`name` as name
FROM (`internship_duration` intd)
ORDER BY `intd`.`id_internshipduration`
INFO  - 2014-04-19 15:54:31 --> inside retrieving internship specialization 
INFO  - 2014-04-19 15:54:31 --> SELECT `ints`.`id_internshipspecialization` as id, `ints`.`name` as name
FROM (`internship_specialization` ints)
ORDER BY `ints`.`name`
INFO  - 2014-04-19 15:54:31 --> last intern id is 0
INFO  - 2014-04-19 15:54:31 --> Ajax retrieval ::::::::::===>SELECT i.id_internshipopening as id, i.numberofapplicants as slots, ind.name as duration, group_concat(ins.name) as specialization, concat(l.name, ' - ', i.location) as location, inf.name as firm
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
INFO  - 2014-04-19 15:54:31 --> The session id is ========>48d79ae5d049795758acebddbb26dc2e and the member id is =======>33
DEBUG - 2014-04-19 15:54:31 --> File loaded: ../pharmaray-application/views/internships.php
DEBUG - 2014-04-19 15:54:31 --> Final output sent to browser
DEBUG - 2014-04-19 15:54:31 --> Total execution time: 0.0314
