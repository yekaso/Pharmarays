<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2013-11-13 12:39:34 --> Config Class Initialized
DEBUG - 2013-11-13 12:39:34 --> Hooks Class Initialized
DEBUG - 2013-11-13 12:39:34 --> Utf8 Class Initialized
DEBUG - 2013-11-13 12:39:34 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 12:39:34 --> URI Class Initialized
DEBUG - 2013-11-13 12:39:34 --> Router Class Initialized
DEBUG - 2013-11-13 12:39:34 --> No URI present. Default controller set.
DEBUG - 2013-11-13 12:39:34 --> Output Class Initialized
DEBUG - 2013-11-13 12:39:34 --> Security Class Initialized
DEBUG - 2013-11-13 12:39:34 --> Input Class Initialized
DEBUG - 2013-11-13 12:39:34 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 12:39:34 --> Language Class Initialized
DEBUG - 2013-11-13 12:39:34 --> Loader Class Initialized
DEBUG - 2013-11-13 12:39:34 --> Helper loaded: form_helper
DEBUG - 2013-11-13 12:39:34 --> Helper loaded: url_helper
DEBUG - 2013-11-13 12:39:34 --> Helper loaded: html_helper
DEBUG - 2013-11-13 12:39:34 --> Database Driver Class Initialized
DEBUG - 2013-11-13 12:39:35 --> Session Class Initialized
DEBUG - 2013-11-13 12:39:35 --> Helper loaded: string_helper
DEBUG - 2013-11-13 12:39:35 --> A session cookie was not found.
DEBUG - 2013-11-13 12:39:35 --> Session routines successfully run
DEBUG - 2013-11-13 12:39:35 --> Form Validation Class Initialized
DEBUG - 2013-11-13 12:39:35 --> Controller Class Initialized
INFO  - 2013-11-13 12:39:35 --> the form message==>
INFO  - 2013-11-13 12:39:35 --> The session id is ========>1bbb8b72d2fe4b2244bbef286ed5f81d and the member id is =======>
INFO  - 2013-11-13 12:39:35 --> after the retrieving session list.................//////////
DEBUG - 2013-11-13 12:39:35 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-11-13 12:39:35 --> Final output sent to browser
DEBUG - 2013-11-13 12:39:35 --> Total execution time: 1.4901
DEBUG - 2013-11-13 12:39:43 --> Config Class Initialized
DEBUG - 2013-11-13 12:39:43 --> Hooks Class Initialized
DEBUG - 2013-11-13 12:39:43 --> Utf8 Class Initialized
DEBUG - 2013-11-13 12:39:43 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 12:39:43 --> URI Class Initialized
DEBUG - 2013-11-13 12:39:43 --> Router Class Initialized
DEBUG - 2013-11-13 12:39:43 --> Output Class Initialized
DEBUG - 2013-11-13 12:39:43 --> Security Class Initialized
DEBUG - 2013-11-13 12:39:43 --> Input Class Initialized
DEBUG - 2013-11-13 12:39:43 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 12:39:43 --> Language Class Initialized
DEBUG - 2013-11-13 12:39:43 --> Loader Class Initialized
DEBUG - 2013-11-13 12:39:43 --> Helper loaded: form_helper
DEBUG - 2013-11-13 12:39:43 --> Helper loaded: url_helper
DEBUG - 2013-11-13 12:39:43 --> Helper loaded: html_helper
DEBUG - 2013-11-13 12:39:43 --> Database Driver Class Initialized
DEBUG - 2013-11-13 12:39:43 --> Session Class Initialized
DEBUG - 2013-11-13 12:39:43 --> Helper loaded: string_helper
DEBUG - 2013-11-13 12:39:43 --> Session routines successfully run
DEBUG - 2013-11-13 12:39:43 --> Form Validation Class Initialized
DEBUG - 2013-11-13 12:39:43 --> Controller Class Initialized
DEBUG - 2013-11-13 12:39:43 --> Model Class Initialized
DEBUG - 2013-11-13 12:39:43 --> Model Class Initialized
DEBUG - 2013-11-13 12:39:43 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 12:39:43 --> after session initialization................
INFO  - 2013-11-13 12:39:43 --> inside rays login auth.............
DEBUG - 2013-11-13 12:39:43 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-11-13 12:39:43 --> XSS Filtering completed
DEBUG - 2013-11-13 12:39:43 --> XSS Filtering completed
INFO  - 2013-11-13 12:39:43 --> before getting the relation of member............6
INFO  - 2013-11-13 12:39:43 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-11-13 12:39:43 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-13 12:39:43 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-11-13 12:39:43 --> inside retrieving vacancy for member
INFO  - 2013-11-13 12:39:43 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-11-13 12:39:43 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-13 12:39:43 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-11-13 12:39:43 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-11-13 12:39:43 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-13 12:39:44 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-13 12:39:44 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-11-13 12:39:44 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-11-13 12:39:44 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-11-13 12:39:44 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-11-13 12:39:44 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-11-13 12:39:44 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-11-13 12:39:44 --> Final output sent to browser
DEBUG - 2013-11-13 12:39:44 --> Total execution time: 1.1681
DEBUG - 2013-11-13 12:39:44 --> Config Class Initialized
DEBUG - 2013-11-13 12:39:44 --> Hooks Class Initialized
DEBUG - 2013-11-13 12:39:44 --> Utf8 Class Initialized
DEBUG - 2013-11-13 12:39:44 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 12:39:44 --> URI Class Initialized
DEBUG - 2013-11-13 12:39:44 --> Router Class Initialized
DEBUG - 2013-11-13 12:39:44 --> Output Class Initialized
DEBUG - 2013-11-13 12:39:44 --> Security Class Initialized
DEBUG - 2013-11-13 12:39:44 --> Input Class Initialized
DEBUG - 2013-11-13 12:39:44 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 12:39:44 --> Language Class Initialized
DEBUG - 2013-11-13 12:39:44 --> Loader Class Initialized
DEBUG - 2013-11-13 12:39:44 --> Helper loaded: form_helper
DEBUG - 2013-11-13 12:39:44 --> Helper loaded: url_helper
DEBUG - 2013-11-13 12:39:44 --> Helper loaded: html_helper
DEBUG - 2013-11-13 12:39:44 --> Database Driver Class Initialized
DEBUG - 2013-11-13 12:39:44 --> Session Class Initialized
DEBUG - 2013-11-13 12:39:44 --> Helper loaded: string_helper
DEBUG - 2013-11-13 12:39:44 --> Session routines successfully run
DEBUG - 2013-11-13 12:39:44 --> Form Validation Class Initialized
DEBUG - 2013-11-13 12:39:44 --> Controller Class Initialized
DEBUG - 2013-11-13 12:39:44 --> Model Class Initialized
DEBUG - 2013-11-13 12:39:44 --> Model Class Initialized
DEBUG - 2013-11-13 12:39:44 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 12:39:44 --> after session initialization................
ERROR - 2013-11-13 12:39:44 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-13 12:39:44 --> Config Class Initialized
DEBUG - 2013-11-13 12:39:44 --> Hooks Class Initialized
DEBUG - 2013-11-13 12:39:44 --> Utf8 Class Initialized
DEBUG - 2013-11-13 12:39:44 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 12:39:44 --> URI Class Initialized
DEBUG - 2013-11-13 12:39:44 --> Router Class Initialized
DEBUG - 2013-11-13 12:39:44 --> Output Class Initialized
DEBUG - 2013-11-13 12:39:44 --> Security Class Initialized
DEBUG - 2013-11-13 12:39:44 --> Input Class Initialized
DEBUG - 2013-11-13 12:39:44 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 12:39:44 --> Language Class Initialized
DEBUG - 2013-11-13 12:39:44 --> Loader Class Initialized
DEBUG - 2013-11-13 12:39:44 --> Helper loaded: form_helper
DEBUG - 2013-11-13 12:39:44 --> Helper loaded: url_helper
DEBUG - 2013-11-13 12:39:44 --> Helper loaded: html_helper
DEBUG - 2013-11-13 12:39:44 --> Database Driver Class Initialized
DEBUG - 2013-11-13 12:39:44 --> Session Class Initialized
DEBUG - 2013-11-13 12:39:44 --> Helper loaded: string_helper
DEBUG - 2013-11-13 12:39:44 --> Session routines successfully run
DEBUG - 2013-11-13 12:39:44 --> Form Validation Class Initialized
DEBUG - 2013-11-13 12:39:44 --> Controller Class Initialized
DEBUG - 2013-11-13 12:39:44 --> Model Class Initialized
DEBUG - 2013-11-13 12:39:44 --> Model Class Initialized
DEBUG - 2013-11-13 12:39:44 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 12:39:44 --> after session initialization................
ERROR - 2013-11-13 12:39:44 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-13 12:39:44 --> Config Class Initialized
DEBUG - 2013-11-13 12:39:44 --> Hooks Class Initialized
DEBUG - 2013-11-13 12:39:44 --> Utf8 Class Initialized
DEBUG - 2013-11-13 12:39:44 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 12:39:44 --> URI Class Initialized
DEBUG - 2013-11-13 12:39:44 --> Router Class Initialized
ERROR - 2013-11-13 12:39:44 --> 404 Page Not Found --> css
DEBUG - 2013-11-13 12:39:46 --> Config Class Initialized
DEBUG - 2013-11-13 12:39:46 --> Hooks Class Initialized
DEBUG - 2013-11-13 12:39:46 --> Utf8 Class Initialized
DEBUG - 2013-11-13 12:39:46 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 12:39:46 --> URI Class Initialized
DEBUG - 2013-11-13 12:39:46 --> Router Class Initialized
DEBUG - 2013-11-13 12:39:46 --> Output Class Initialized
DEBUG - 2013-11-13 12:39:46 --> Security Class Initialized
DEBUG - 2013-11-13 12:39:46 --> Input Class Initialized
DEBUG - 2013-11-13 12:39:46 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 12:39:46 --> Language Class Initialized
DEBUG - 2013-11-13 12:39:46 --> Loader Class Initialized
DEBUG - 2013-11-13 12:39:46 --> Helper loaded: form_helper
DEBUG - 2013-11-13 12:39:46 --> Helper loaded: url_helper
DEBUG - 2013-11-13 12:39:46 --> Helper loaded: html_helper
DEBUG - 2013-11-13 12:39:46 --> Database Driver Class Initialized
DEBUG - 2013-11-13 12:39:46 --> Session Class Initialized
DEBUG - 2013-11-13 12:39:46 --> Helper loaded: string_helper
DEBUG - 2013-11-13 12:39:46 --> Session routines successfully run
DEBUG - 2013-11-13 12:39:46 --> Form Validation Class Initialized
DEBUG - 2013-11-13 12:39:46 --> Controller Class Initialized
DEBUG - 2013-11-13 12:39:46 --> Model Class Initialized
DEBUG - 2013-11-13 12:39:46 --> Model Class Initialized
DEBUG - 2013-11-13 12:39:46 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 12:39:46 --> after session initialization................
INFO  - 2013-11-13 12:39:46 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 12:39:46 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 12:39:46 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 12:39:46 --> inside retrieving locations 
INFO  - 2013-11-13 12:39:46 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 12:39:46 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 12:39:46 --> Final output sent to browser
DEBUG - 2013-11-13 12:39:46 --> Total execution time: 0.1020
DEBUG - 2013-11-13 12:39:48 --> Config Class Initialized
DEBUG - 2013-11-13 12:39:48 --> Hooks Class Initialized
DEBUG - 2013-11-13 12:39:48 --> Utf8 Class Initialized
DEBUG - 2013-11-13 12:39:48 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 12:39:48 --> URI Class Initialized
DEBUG - 2013-11-13 12:39:48 --> Router Class Initialized
DEBUG - 2013-11-13 12:39:48 --> Output Class Initialized
DEBUG - 2013-11-13 12:39:48 --> Security Class Initialized
DEBUG - 2013-11-13 12:39:48 --> Input Class Initialized
DEBUG - 2013-11-13 12:39:48 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 12:39:48 --> Language Class Initialized
DEBUG - 2013-11-13 12:39:48 --> Loader Class Initialized
DEBUG - 2013-11-13 12:39:48 --> Helper loaded: form_helper
DEBUG - 2013-11-13 12:39:48 --> Helper loaded: url_helper
DEBUG - 2013-11-13 12:39:48 --> Helper loaded: html_helper
DEBUG - 2013-11-13 12:39:48 --> Database Driver Class Initialized
DEBUG - 2013-11-13 12:39:48 --> Session Class Initialized
DEBUG - 2013-11-13 12:39:48 --> Helper loaded: string_helper
DEBUG - 2013-11-13 12:39:48 --> Session routines successfully run
DEBUG - 2013-11-13 12:39:48 --> Form Validation Class Initialized
DEBUG - 2013-11-13 12:39:48 --> Controller Class Initialized
DEBUG - 2013-11-13 12:39:48 --> Model Class Initialized
DEBUG - 2013-11-13 12:39:48 --> Model Class Initialized
DEBUG - 2013-11-13 12:39:48 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 12:39:48 --> after session initialization................
ERROR - 2013-11-13 12:39:48 --> Severity: Notice  --> Undefined variable: pharmacyid C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 526
INFO  - 2013-11-13 12:39:48 --> pharmacy id is 
DEBUG - 2013-11-13 12:39:48 --> DB Transaction Failure
ERROR - 2013-11-13 12:39:48 --> Query error: Unknown column 'a.id_pharmacy' in 'where clause'
DEBUG - 2013-11-13 12:39:48 --> Language file loaded: language/english/db_lang.php
DEBUG - 2013-11-13 12:40:03 --> Config Class Initialized
DEBUG - 2013-11-13 12:40:03 --> Hooks Class Initialized
DEBUG - 2013-11-13 12:40:03 --> Utf8 Class Initialized
DEBUG - 2013-11-13 12:40:03 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 12:40:03 --> URI Class Initialized
DEBUG - 2013-11-13 12:40:03 --> Router Class Initialized
DEBUG - 2013-11-13 12:40:03 --> Output Class Initialized
DEBUG - 2013-11-13 12:40:03 --> Security Class Initialized
DEBUG - 2013-11-13 12:40:03 --> Input Class Initialized
DEBUG - 2013-11-13 12:40:03 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 12:40:03 --> Language Class Initialized
DEBUG - 2013-11-13 12:40:03 --> Loader Class Initialized
DEBUG - 2013-11-13 12:40:03 --> Helper loaded: form_helper
DEBUG - 2013-11-13 12:40:03 --> Helper loaded: url_helper
DEBUG - 2013-11-13 12:40:03 --> Helper loaded: html_helper
DEBUG - 2013-11-13 12:40:03 --> Database Driver Class Initialized
DEBUG - 2013-11-13 12:40:04 --> Session Class Initialized
DEBUG - 2013-11-13 12:40:04 --> Helper loaded: string_helper
DEBUG - 2013-11-13 12:40:04 --> Session routines successfully run
DEBUG - 2013-11-13 12:40:04 --> Form Validation Class Initialized
DEBUG - 2013-11-13 12:40:04 --> Controller Class Initialized
DEBUG - 2013-11-13 12:40:04 --> Model Class Initialized
DEBUG - 2013-11-13 12:40:04 --> Model Class Initialized
DEBUG - 2013-11-13 12:40:04 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 12:40:04 --> after session initialization................
ERROR - 2013-11-13 12:40:04 --> Severity: Notice  --> Undefined variable: pharmacyid C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 526
INFO  - 2013-11-13 12:40:04 --> pharmacy id is 
DEBUG - 2013-11-13 12:40:04 --> DB Transaction Failure
ERROR - 2013-11-13 12:40:04 --> Query error: Unknown column 'a.id_pharmacy' in 'where clause'
DEBUG - 2013-11-13 12:40:04 --> Language file loaded: language/english/db_lang.php
DEBUG - 2013-11-13 13:03:31 --> Config Class Initialized
DEBUG - 2013-11-13 13:03:31 --> Hooks Class Initialized
DEBUG - 2013-11-13 13:03:31 --> Utf8 Class Initialized
DEBUG - 2013-11-13 13:03:31 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 13:03:31 --> URI Class Initialized
DEBUG - 2013-11-13 13:03:31 --> Router Class Initialized
DEBUG - 2013-11-13 13:03:31 --> Output Class Initialized
DEBUG - 2013-11-13 13:03:31 --> Security Class Initialized
DEBUG - 2013-11-13 13:03:31 --> Input Class Initialized
DEBUG - 2013-11-13 13:03:31 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 13:03:31 --> Language Class Initialized
DEBUG - 2013-11-13 13:03:31 --> Loader Class Initialized
DEBUG - 2013-11-13 13:03:31 --> Helper loaded: form_helper
DEBUG - 2013-11-13 13:03:31 --> Helper loaded: url_helper
DEBUG - 2013-11-13 13:03:31 --> Helper loaded: html_helper
DEBUG - 2013-11-13 13:03:31 --> Database Driver Class Initialized
DEBUG - 2013-11-13 13:03:31 --> Session Class Initialized
DEBUG - 2013-11-13 13:03:31 --> Helper loaded: string_helper
DEBUG - 2013-11-13 13:03:31 --> Session routines successfully run
DEBUG - 2013-11-13 13:03:31 --> Form Validation Class Initialized
DEBUG - 2013-11-13 13:03:31 --> Controller Class Initialized
DEBUG - 2013-11-13 13:03:31 --> Model Class Initialized
DEBUG - 2013-11-13 13:03:31 --> Model Class Initialized
DEBUG - 2013-11-13 13:03:31 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 13:03:31 --> after session initialization................
DEBUG - 2013-11-13 13:03:31 --> Config Class Initialized
DEBUG - 2013-11-13 13:03:31 --> Hooks Class Initialized
DEBUG - 2013-11-13 13:03:31 --> Utf8 Class Initialized
DEBUG - 2013-11-13 13:03:31 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 13:03:31 --> URI Class Initialized
DEBUG - 2013-11-13 13:03:31 --> Router Class Initialized
DEBUG - 2013-11-13 13:03:31 --> No URI present. Default controller set.
DEBUG - 2013-11-13 13:03:31 --> Output Class Initialized
DEBUG - 2013-11-13 13:03:31 --> Security Class Initialized
DEBUG - 2013-11-13 13:03:31 --> Input Class Initialized
DEBUG - 2013-11-13 13:03:31 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 13:03:31 --> Language Class Initialized
DEBUG - 2013-11-13 13:03:31 --> Loader Class Initialized
DEBUG - 2013-11-13 13:03:31 --> Helper loaded: form_helper
DEBUG - 2013-11-13 13:03:31 --> Helper loaded: url_helper
DEBUG - 2013-11-13 13:03:31 --> Helper loaded: html_helper
DEBUG - 2013-11-13 13:03:31 --> Database Driver Class Initialized
DEBUG - 2013-11-13 13:03:31 --> Session Class Initialized
DEBUG - 2013-11-13 13:03:31 --> Helper loaded: string_helper
DEBUG - 2013-11-13 13:03:31 --> A session cookie was not found.
DEBUG - 2013-11-13 13:03:31 --> Session routines successfully run
DEBUG - 2013-11-13 13:03:31 --> Form Validation Class Initialized
DEBUG - 2013-11-13 13:03:31 --> Controller Class Initialized
INFO  - 2013-11-13 13:03:31 --> the form message==>
INFO  - 2013-11-13 13:03:31 --> The session id is ========>32cf337028a76a5afc22aff4298d53db and the member id is =======>
INFO  - 2013-11-13 13:03:31 --> after the retrieving session list.................//////////
DEBUG - 2013-11-13 13:03:31 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-11-13 13:03:31 --> Final output sent to browser
DEBUG - 2013-11-13 13:03:31 --> Total execution time: 0.0540
DEBUG - 2013-11-13 13:11:28 --> Config Class Initialized
DEBUG - 2013-11-13 13:11:28 --> Hooks Class Initialized
DEBUG - 2013-11-13 13:11:28 --> Utf8 Class Initialized
DEBUG - 2013-11-13 13:11:28 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 13:11:28 --> URI Class Initialized
DEBUG - 2013-11-13 13:11:28 --> Router Class Initialized
DEBUG - 2013-11-13 13:11:28 --> No URI present. Default controller set.
DEBUG - 2013-11-13 13:11:28 --> Output Class Initialized
DEBUG - 2013-11-13 13:11:28 --> Security Class Initialized
DEBUG - 2013-11-13 13:11:28 --> Input Class Initialized
DEBUG - 2013-11-13 13:11:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 13:11:28 --> Language Class Initialized
DEBUG - 2013-11-13 13:11:28 --> Loader Class Initialized
DEBUG - 2013-11-13 13:11:28 --> Helper loaded: form_helper
DEBUG - 2013-11-13 13:11:28 --> Helper loaded: url_helper
DEBUG - 2013-11-13 13:11:28 --> Helper loaded: html_helper
DEBUG - 2013-11-13 13:11:28 --> Database Driver Class Initialized
DEBUG - 2013-11-13 13:11:28 --> Session Class Initialized
DEBUG - 2013-11-13 13:11:28 --> Helper loaded: string_helper
DEBUG - 2013-11-13 13:11:28 --> Session routines successfully run
DEBUG - 2013-11-13 13:11:28 --> Form Validation Class Initialized
DEBUG - 2013-11-13 13:11:28 --> Controller Class Initialized
INFO  - 2013-11-13 13:11:28 --> the form message==>
INFO  - 2013-11-13 13:11:28 --> The session id is ========>de50e77d3c3aab449ab7b9adfbf2dcd7 and the member id is =======>
INFO  - 2013-11-13 13:11:28 --> after the retrieving session list.................//////////
DEBUG - 2013-11-13 13:11:28 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-11-13 13:11:28 --> Final output sent to browser
DEBUG - 2013-11-13 13:11:28 --> Total execution time: 0.0560
DEBUG - 2013-11-13 13:15:05 --> Config Class Initialized
DEBUG - 2013-11-13 13:15:05 --> Hooks Class Initialized
DEBUG - 2013-11-13 13:15:05 --> Utf8 Class Initialized
DEBUG - 2013-11-13 13:15:05 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 13:15:05 --> URI Class Initialized
DEBUG - 2013-11-13 13:15:05 --> Router Class Initialized
DEBUG - 2013-11-13 13:15:05 --> Output Class Initialized
DEBUG - 2013-11-13 13:15:05 --> Security Class Initialized
DEBUG - 2013-11-13 13:15:05 --> Input Class Initialized
DEBUG - 2013-11-13 13:15:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 13:15:05 --> Language Class Initialized
DEBUG - 2013-11-13 13:15:05 --> Loader Class Initialized
DEBUG - 2013-11-13 13:15:05 --> Helper loaded: form_helper
DEBUG - 2013-11-13 13:15:05 --> Helper loaded: url_helper
DEBUG - 2013-11-13 13:15:05 --> Helper loaded: html_helper
DEBUG - 2013-11-13 13:15:05 --> Database Driver Class Initialized
DEBUG - 2013-11-13 13:15:07 --> Session Class Initialized
DEBUG - 2013-11-13 13:15:07 --> Helper loaded: string_helper
DEBUG - 2013-11-13 13:15:07 --> Session routines successfully run
DEBUG - 2013-11-13 13:15:07 --> Form Validation Class Initialized
DEBUG - 2013-11-13 13:15:07 --> Controller Class Initialized
DEBUG - 2013-11-13 13:15:07 --> Model Class Initialized
DEBUG - 2013-11-13 13:15:07 --> Model Class Initialized
DEBUG - 2013-11-13 13:15:07 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 13:15:07 --> after session initialization................
INFO  - 2013-11-13 13:15:07 --> inside rays login auth.............
DEBUG - 2013-11-13 13:15:07 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-11-13 13:15:07 --> XSS Filtering completed
DEBUG - 2013-11-13 13:15:07 --> XSS Filtering completed
INFO  - 2013-11-13 13:15:07 --> before getting the relation of member............6
INFO  - 2013-11-13 13:15:07 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-11-13 13:15:07 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-13 13:15:07 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-11-13 13:15:07 --> inside retrieving vacancy for member
INFO  - 2013-11-13 13:15:07 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-11-13 13:15:07 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-13 13:15:07 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-11-13 13:15:07 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-11-13 13:15:07 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-13 13:15:07 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-13 13:15:07 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-11-13 13:15:07 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-11-13 13:15:07 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-11-13 13:15:07 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-11-13 13:15:07 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-11-13 13:15:07 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-11-13 13:15:07 --> Final output sent to browser
DEBUG - 2013-11-13 13:15:07 --> Total execution time: 1.4881
DEBUG - 2013-11-13 13:15:07 --> Config Class Initialized
DEBUG - 2013-11-13 13:15:07 --> Hooks Class Initialized
DEBUG - 2013-11-13 13:15:07 --> Utf8 Class Initialized
DEBUG - 2013-11-13 13:15:07 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 13:15:07 --> URI Class Initialized
DEBUG - 2013-11-13 13:15:07 --> Router Class Initialized
DEBUG - 2013-11-13 13:15:07 --> Output Class Initialized
DEBUG - 2013-11-13 13:15:07 --> Security Class Initialized
DEBUG - 2013-11-13 13:15:07 --> Input Class Initialized
DEBUG - 2013-11-13 13:15:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 13:15:07 --> Language Class Initialized
DEBUG - 2013-11-13 13:15:07 --> Loader Class Initialized
DEBUG - 2013-11-13 13:15:07 --> Helper loaded: form_helper
DEBUG - 2013-11-13 13:15:07 --> Helper loaded: url_helper
DEBUG - 2013-11-13 13:15:07 --> Helper loaded: html_helper
DEBUG - 2013-11-13 13:15:07 --> Database Driver Class Initialized
DEBUG - 2013-11-13 13:15:08 --> Session Class Initialized
DEBUG - 2013-11-13 13:15:08 --> Helper loaded: string_helper
DEBUG - 2013-11-13 13:15:08 --> Session routines successfully run
DEBUG - 2013-11-13 13:15:08 --> Form Validation Class Initialized
DEBUG - 2013-11-13 13:15:08 --> Controller Class Initialized
DEBUG - 2013-11-13 13:15:08 --> Model Class Initialized
DEBUG - 2013-11-13 13:15:08 --> Model Class Initialized
DEBUG - 2013-11-13 13:15:08 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 13:15:08 --> after session initialization................
ERROR - 2013-11-13 13:15:08 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-13 13:15:08 --> Config Class Initialized
DEBUG - 2013-11-13 13:15:08 --> Hooks Class Initialized
DEBUG - 2013-11-13 13:15:08 --> Utf8 Class Initialized
DEBUG - 2013-11-13 13:15:08 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 13:15:08 --> URI Class Initialized
DEBUG - 2013-11-13 13:15:08 --> Router Class Initialized
ERROR - 2013-11-13 13:15:08 --> 404 Page Not Found --> css
DEBUG - 2013-11-13 13:19:12 --> Config Class Initialized
DEBUG - 2013-11-13 13:19:12 --> Hooks Class Initialized
DEBUG - 2013-11-13 13:19:12 --> Utf8 Class Initialized
DEBUG - 2013-11-13 13:19:12 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 13:19:12 --> URI Class Initialized
DEBUG - 2013-11-13 13:19:12 --> Router Class Initialized
DEBUG - 2013-11-13 13:19:12 --> Output Class Initialized
DEBUG - 2013-11-13 13:19:12 --> Security Class Initialized
DEBUG - 2013-11-13 13:19:12 --> Input Class Initialized
DEBUG - 2013-11-13 13:19:12 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 13:19:12 --> Language Class Initialized
DEBUG - 2013-11-13 13:19:12 --> Loader Class Initialized
DEBUG - 2013-11-13 13:19:12 --> Helper loaded: form_helper
DEBUG - 2013-11-13 13:19:12 --> Helper loaded: url_helper
DEBUG - 2013-11-13 13:19:12 --> Helper loaded: html_helper
DEBUG - 2013-11-13 13:19:12 --> Database Driver Class Initialized
DEBUG - 2013-11-13 13:19:12 --> Session Class Initialized
DEBUG - 2013-11-13 13:19:12 --> Helper loaded: string_helper
DEBUG - 2013-11-13 13:19:12 --> Session routines successfully run
DEBUG - 2013-11-13 13:19:12 --> Form Validation Class Initialized
DEBUG - 2013-11-13 13:19:12 --> Controller Class Initialized
DEBUG - 2013-11-13 13:19:12 --> Model Class Initialized
DEBUG - 2013-11-13 13:19:12 --> Model Class Initialized
DEBUG - 2013-11-13 13:19:12 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 13:19:12 --> after session initialization................
INFO  - 2013-11-13 13:19:12 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 13:19:12 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 13:19:12 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 13:19:12 --> inside retrieving locations 
INFO  - 2013-11-13 13:19:12 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 13:19:12 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 13:19:12 --> Final output sent to browser
DEBUG - 2013-11-13 13:19:12 --> Total execution time: 0.0960
DEBUG - 2013-11-13 13:19:15 --> Config Class Initialized
DEBUG - 2013-11-13 13:19:15 --> Hooks Class Initialized
DEBUG - 2013-11-13 13:19:15 --> Utf8 Class Initialized
DEBUG - 2013-11-13 13:19:15 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 13:19:15 --> URI Class Initialized
DEBUG - 2013-11-13 13:19:15 --> Router Class Initialized
DEBUG - 2013-11-13 13:19:15 --> Output Class Initialized
DEBUG - 2013-11-13 13:19:15 --> Security Class Initialized
DEBUG - 2013-11-13 13:19:15 --> Input Class Initialized
DEBUG - 2013-11-13 13:19:15 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 13:19:15 --> Language Class Initialized
DEBUG - 2013-11-13 13:19:15 --> Loader Class Initialized
DEBUG - 2013-11-13 13:19:15 --> Helper loaded: form_helper
DEBUG - 2013-11-13 13:19:15 --> Helper loaded: url_helper
DEBUG - 2013-11-13 13:19:15 --> Helper loaded: html_helper
DEBUG - 2013-11-13 13:19:15 --> Database Driver Class Initialized
DEBUG - 2013-11-13 13:19:15 --> Session Class Initialized
DEBUG - 2013-11-13 13:19:15 --> Helper loaded: string_helper
DEBUG - 2013-11-13 13:19:15 --> Session routines successfully run
DEBUG - 2013-11-13 13:19:15 --> Form Validation Class Initialized
DEBUG - 2013-11-13 13:19:15 --> Controller Class Initialized
DEBUG - 2013-11-13 13:19:15 --> Model Class Initialized
DEBUG - 2013-11-13 13:19:15 --> Model Class Initialized
DEBUG - 2013-11-13 13:19:15 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 13:19:15 --> after session initialization................
INFO  - 2013-11-13 13:19:15 --> inside the auto suggest page.................
INFO  - 2013-11-13 13:19:15 --> after the list array.................
INFO  - 2013-11-13 13:19:15 --> after retrieving the data from db.................
INFO  - 2013-11-13 13:19:15 --> looping.................
INFO  - 2013-11-13 13:19:15 --> looping.................
INFO  - 2013-11-13 13:19:15 --> looping.................
INFO  - 2013-11-13 13:19:15 --> looping.................
INFO  - 2013-11-13 13:19:15 --> looping.................
INFO  - 2013-11-13 13:19:15 --> looping.................
INFO  - 2013-11-13 13:19:15 --> looping.................
INFO  - 2013-11-13 13:19:15 --> looping.................
INFO  - 2013-11-13 13:19:15 --> looping.................
DEBUG - 2013-11-13 13:19:15 --> Final output sent to browser
DEBUG - 2013-11-13 13:19:15 --> Total execution time: 0.1280
DEBUG - 2013-11-13 13:19:15 --> Config Class Initialized
DEBUG - 2013-11-13 13:19:15 --> Hooks Class Initialized
DEBUG - 2013-11-13 13:19:15 --> Utf8 Class Initialized
DEBUG - 2013-11-13 13:19:15 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 13:19:15 --> URI Class Initialized
DEBUG - 2013-11-13 13:19:15 --> Router Class Initialized
DEBUG - 2013-11-13 13:19:15 --> Output Class Initialized
DEBUG - 2013-11-13 13:19:15 --> Security Class Initialized
DEBUG - 2013-11-13 13:19:15 --> Input Class Initialized
DEBUG - 2013-11-13 13:19:15 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 13:19:15 --> Language Class Initialized
DEBUG - 2013-11-13 13:19:15 --> Loader Class Initialized
DEBUG - 2013-11-13 13:19:15 --> Helper loaded: form_helper
DEBUG - 2013-11-13 13:19:15 --> Helper loaded: url_helper
DEBUG - 2013-11-13 13:19:15 --> Helper loaded: html_helper
DEBUG - 2013-11-13 13:19:15 --> Database Driver Class Initialized
DEBUG - 2013-11-13 13:19:15 --> Session Class Initialized
DEBUG - 2013-11-13 13:19:15 --> Helper loaded: string_helper
DEBUG - 2013-11-13 13:19:15 --> Session routines successfully run
DEBUG - 2013-11-13 13:19:15 --> Form Validation Class Initialized
DEBUG - 2013-11-13 13:19:15 --> Controller Class Initialized
DEBUG - 2013-11-13 13:19:15 --> Model Class Initialized
DEBUG - 2013-11-13 13:19:15 --> Model Class Initialized
DEBUG - 2013-11-13 13:19:15 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 13:19:15 --> after session initialization................
INFO  - 2013-11-13 13:19:15 --> inside the auto suggest page.................
INFO  - 2013-11-13 13:19:15 --> after the list array.................
INFO  - 2013-11-13 13:19:15 --> after retrieving the data from db.................
INFO  - 2013-11-13 13:19:15 --> looping.................
INFO  - 2013-11-13 13:19:15 --> looping.................
INFO  - 2013-11-13 13:19:15 --> looping.................
DEBUG - 2013-11-13 13:19:15 --> Final output sent to browser
DEBUG - 2013-11-13 13:19:15 --> Total execution time: 0.0530
DEBUG - 2013-11-13 13:19:22 --> Config Class Initialized
DEBUG - 2013-11-13 13:19:22 --> Hooks Class Initialized
DEBUG - 2013-11-13 13:19:22 --> Utf8 Class Initialized
DEBUG - 2013-11-13 13:19:22 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 13:19:22 --> URI Class Initialized
DEBUG - 2013-11-13 13:19:22 --> Router Class Initialized
DEBUG - 2013-11-13 13:19:22 --> Output Class Initialized
DEBUG - 2013-11-13 13:19:22 --> Security Class Initialized
DEBUG - 2013-11-13 13:19:22 --> Input Class Initialized
DEBUG - 2013-11-13 13:19:22 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 13:19:22 --> Language Class Initialized
DEBUG - 2013-11-13 13:19:22 --> Loader Class Initialized
DEBUG - 2013-11-13 13:19:22 --> Helper loaded: form_helper
DEBUG - 2013-11-13 13:19:22 --> Helper loaded: url_helper
DEBUG - 2013-11-13 13:19:22 --> Helper loaded: html_helper
DEBUG - 2013-11-13 13:19:22 --> Database Driver Class Initialized
DEBUG - 2013-11-13 13:19:22 --> Session Class Initialized
DEBUG - 2013-11-13 13:19:22 --> Helper loaded: string_helper
DEBUG - 2013-11-13 13:19:22 --> Session routines successfully run
DEBUG - 2013-11-13 13:19:22 --> Form Validation Class Initialized
DEBUG - 2013-11-13 13:19:22 --> Controller Class Initialized
DEBUG - 2013-11-13 13:19:22 --> Model Class Initialized
DEBUG - 2013-11-13 13:19:22 --> Model Class Initialized
DEBUG - 2013-11-13 13:19:22 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 13:19:22 --> after session initialization................
ERROR - 2013-11-13 13:19:22 --> Severity: Notice  --> Undefined variable: pharmacyid C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 526
INFO  - 2013-11-13 13:19:22 --> pharmacy id is 
DEBUG - 2013-11-13 13:19:22 --> DB Transaction Failure
ERROR - 2013-11-13 13:19:22 --> Query error: Unknown column 'a.id_pharmacy' in 'where clause'
DEBUG - 2013-11-13 13:19:22 --> Language file loaded: language/english/db_lang.php
DEBUG - 2013-11-13 13:19:31 --> Config Class Initialized
DEBUG - 2013-11-13 13:19:31 --> Hooks Class Initialized
DEBUG - 2013-11-13 13:19:31 --> Utf8 Class Initialized
DEBUG - 2013-11-13 13:19:31 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 13:19:31 --> URI Class Initialized
DEBUG - 2013-11-13 13:19:31 --> Router Class Initialized
DEBUG - 2013-11-13 13:19:31 --> Output Class Initialized
DEBUG - 2013-11-13 13:19:31 --> Security Class Initialized
DEBUG - 2013-11-13 13:19:31 --> Input Class Initialized
DEBUG - 2013-11-13 13:19:31 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 13:19:31 --> Language Class Initialized
DEBUG - 2013-11-13 13:19:31 --> Loader Class Initialized
DEBUG - 2013-11-13 13:19:31 --> Helper loaded: form_helper
DEBUG - 2013-11-13 13:19:31 --> Helper loaded: url_helper
DEBUG - 2013-11-13 13:19:31 --> Helper loaded: html_helper
DEBUG - 2013-11-13 13:19:31 --> Database Driver Class Initialized
DEBUG - 2013-11-13 13:19:31 --> Session Class Initialized
DEBUG - 2013-11-13 13:19:31 --> Helper loaded: string_helper
DEBUG - 2013-11-13 13:19:31 --> Session routines successfully run
DEBUG - 2013-11-13 13:19:31 --> Form Validation Class Initialized
DEBUG - 2013-11-13 13:19:31 --> Controller Class Initialized
DEBUG - 2013-11-13 13:19:31 --> Model Class Initialized
DEBUG - 2013-11-13 13:19:31 --> Model Class Initialized
DEBUG - 2013-11-13 13:19:31 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 13:19:31 --> after session initialization................
ERROR - 2013-11-13 13:19:31 --> 404 Page Not Found --> user_authorization/retrieve_pharmacy
DEBUG - 2013-11-13 13:27:58 --> Config Class Initialized
DEBUG - 2013-11-13 13:27:58 --> Hooks Class Initialized
DEBUG - 2013-11-13 13:27:58 --> Utf8 Class Initialized
DEBUG - 2013-11-13 13:27:58 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 13:27:58 --> URI Class Initialized
DEBUG - 2013-11-13 13:27:58 --> Router Class Initialized
DEBUG - 2013-11-13 13:27:58 --> Output Class Initialized
DEBUG - 2013-11-13 13:27:58 --> Security Class Initialized
DEBUG - 2013-11-13 13:27:58 --> Input Class Initialized
DEBUG - 2013-11-13 13:27:58 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 13:27:58 --> Language Class Initialized
DEBUG - 2013-11-13 13:27:58 --> Loader Class Initialized
DEBUG - 2013-11-13 13:27:58 --> Helper loaded: form_helper
DEBUG - 2013-11-13 13:27:58 --> Helper loaded: url_helper
DEBUG - 2013-11-13 13:27:58 --> Helper loaded: html_helper
DEBUG - 2013-11-13 13:27:58 --> Database Driver Class Initialized
DEBUG - 2013-11-13 13:27:58 --> Session Class Initialized
DEBUG - 2013-11-13 13:27:58 --> Helper loaded: string_helper
DEBUG - 2013-11-13 13:27:58 --> Session routines successfully run
DEBUG - 2013-11-13 13:27:58 --> Form Validation Class Initialized
DEBUG - 2013-11-13 13:27:58 --> Controller Class Initialized
DEBUG - 2013-11-13 13:27:58 --> Model Class Initialized
DEBUG - 2013-11-13 13:27:58 --> Model Class Initialized
DEBUG - 2013-11-13 13:27:58 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 13:27:58 --> after session initialization................
INFO  - 2013-11-13 13:27:58 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 13:27:58 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 13:27:58 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 13:27:58 --> inside retrieving locations 
INFO  - 2013-11-13 13:27:58 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 13:27:58 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 13:27:58 --> Final output sent to browser
DEBUG - 2013-11-13 13:27:58 --> Total execution time: 0.0870
DEBUG - 2013-11-13 13:28:01 --> Config Class Initialized
DEBUG - 2013-11-13 13:28:01 --> Hooks Class Initialized
DEBUG - 2013-11-13 13:28:01 --> Utf8 Class Initialized
DEBUG - 2013-11-13 13:28:01 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 13:28:01 --> URI Class Initialized
DEBUG - 2013-11-13 13:28:01 --> Router Class Initialized
DEBUG - 2013-11-13 13:28:01 --> Output Class Initialized
DEBUG - 2013-11-13 13:28:01 --> Security Class Initialized
DEBUG - 2013-11-13 13:28:01 --> Input Class Initialized
DEBUG - 2013-11-13 13:28:01 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 13:28:01 --> Language Class Initialized
DEBUG - 2013-11-13 13:28:01 --> Loader Class Initialized
DEBUG - 2013-11-13 13:28:01 --> Helper loaded: form_helper
DEBUG - 2013-11-13 13:28:01 --> Helper loaded: url_helper
DEBUG - 2013-11-13 13:28:01 --> Helper loaded: html_helper
DEBUG - 2013-11-13 13:28:01 --> Database Driver Class Initialized
DEBUG - 2013-11-13 13:28:01 --> Session Class Initialized
DEBUG - 2013-11-13 13:28:01 --> Helper loaded: string_helper
DEBUG - 2013-11-13 13:28:01 --> Session routines successfully run
DEBUG - 2013-11-13 13:28:01 --> Form Validation Class Initialized
DEBUG - 2013-11-13 13:28:01 --> Controller Class Initialized
DEBUG - 2013-11-13 13:28:01 --> Model Class Initialized
DEBUG - 2013-11-13 13:28:01 --> Model Class Initialized
DEBUG - 2013-11-13 13:28:01 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 13:28:01 --> after session initialization................
ERROR - 2013-11-13 13:28:01 --> Severity: Notice  --> Undefined variable: pharmacyid C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 526
INFO  - 2013-11-13 13:28:01 --> pharmacy id is 
DEBUG - 2013-11-13 13:28:01 --> DB Transaction Failure
ERROR - 2013-11-13 13:28:01 --> Query error: Unknown column 'a.id_pharmacy' in 'where clause'
DEBUG - 2013-11-13 13:28:01 --> Language file loaded: language/english/db_lang.php
DEBUG - 2013-11-13 13:29:16 --> Config Class Initialized
DEBUG - 2013-11-13 13:29:16 --> Hooks Class Initialized
DEBUG - 2013-11-13 13:29:16 --> Utf8 Class Initialized
DEBUG - 2013-11-13 13:29:16 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 13:29:16 --> URI Class Initialized
DEBUG - 2013-11-13 13:29:16 --> Router Class Initialized
DEBUG - 2013-11-13 13:29:16 --> Output Class Initialized
DEBUG - 2013-11-13 13:29:16 --> Security Class Initialized
DEBUG - 2013-11-13 13:29:16 --> Input Class Initialized
DEBUG - 2013-11-13 13:29:16 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 13:29:16 --> Language Class Initialized
DEBUG - 2013-11-13 13:29:16 --> Loader Class Initialized
DEBUG - 2013-11-13 13:29:16 --> Helper loaded: form_helper
DEBUG - 2013-11-13 13:29:16 --> Helper loaded: url_helper
DEBUG - 2013-11-13 13:29:16 --> Helper loaded: html_helper
DEBUG - 2013-11-13 13:29:16 --> Database Driver Class Initialized
DEBUG - 2013-11-13 13:29:16 --> Session Class Initialized
DEBUG - 2013-11-13 13:29:16 --> Helper loaded: string_helper
DEBUG - 2013-11-13 13:29:16 --> Session routines successfully run
DEBUG - 2013-11-13 13:29:16 --> Form Validation Class Initialized
DEBUG - 2013-11-13 13:29:16 --> Controller Class Initialized
DEBUG - 2013-11-13 13:29:16 --> Model Class Initialized
DEBUG - 2013-11-13 13:29:16 --> Model Class Initialized
DEBUG - 2013-11-13 13:29:16 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 13:29:16 --> after session initialization................
DEBUG - 2013-11-13 13:29:16 --> Config Class Initialized
DEBUG - 2013-11-13 13:29:16 --> Hooks Class Initialized
DEBUG - 2013-11-13 13:29:16 --> Utf8 Class Initialized
DEBUG - 2013-11-13 13:29:16 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 13:29:16 --> URI Class Initialized
DEBUG - 2013-11-13 13:29:16 --> Router Class Initialized
DEBUG - 2013-11-13 13:29:16 --> No URI present. Default controller set.
DEBUG - 2013-11-13 13:29:16 --> Output Class Initialized
DEBUG - 2013-11-13 13:29:16 --> Security Class Initialized
DEBUG - 2013-11-13 13:29:16 --> Input Class Initialized
DEBUG - 2013-11-13 13:29:16 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 13:29:16 --> Language Class Initialized
DEBUG - 2013-11-13 13:29:16 --> Loader Class Initialized
DEBUG - 2013-11-13 13:29:16 --> Helper loaded: form_helper
DEBUG - 2013-11-13 13:29:16 --> Helper loaded: url_helper
DEBUG - 2013-11-13 13:29:16 --> Helper loaded: html_helper
DEBUG - 2013-11-13 13:29:16 --> Database Driver Class Initialized
DEBUG - 2013-11-13 13:29:16 --> Session Class Initialized
DEBUG - 2013-11-13 13:29:16 --> Helper loaded: string_helper
DEBUG - 2013-11-13 13:29:16 --> A session cookie was not found.
DEBUG - 2013-11-13 13:29:16 --> Session routines successfully run
DEBUG - 2013-11-13 13:29:16 --> Form Validation Class Initialized
DEBUG - 2013-11-13 13:29:16 --> Controller Class Initialized
INFO  - 2013-11-13 13:29:16 --> the form message==>
INFO  - 2013-11-13 13:29:16 --> The session id is ========>d2b0d606227d39672c9a6f1136a14aad and the member id is =======>
INFO  - 2013-11-13 13:29:16 --> after the retrieving session list.................//////////
DEBUG - 2013-11-13 13:29:16 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-11-13 13:29:16 --> Final output sent to browser
DEBUG - 2013-11-13 13:29:16 --> Total execution time: 0.0370
DEBUG - 2013-11-13 13:29:17 --> Config Class Initialized
DEBUG - 2013-11-13 13:29:17 --> Hooks Class Initialized
DEBUG - 2013-11-13 13:29:17 --> Utf8 Class Initialized
DEBUG - 2013-11-13 13:29:17 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 13:29:17 --> URI Class Initialized
DEBUG - 2013-11-13 13:29:17 --> Router Class Initialized
DEBUG - 2013-11-13 13:29:17 --> No URI present. Default controller set.
DEBUG - 2013-11-13 13:29:17 --> Output Class Initialized
DEBUG - 2013-11-13 13:29:17 --> Security Class Initialized
DEBUG - 2013-11-13 13:29:17 --> Input Class Initialized
DEBUG - 2013-11-13 13:29:17 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 13:29:17 --> Language Class Initialized
DEBUG - 2013-11-13 13:29:17 --> Loader Class Initialized
DEBUG - 2013-11-13 13:29:17 --> Helper loaded: form_helper
DEBUG - 2013-11-13 13:29:17 --> Helper loaded: url_helper
DEBUG - 2013-11-13 13:29:17 --> Helper loaded: html_helper
DEBUG - 2013-11-13 13:29:17 --> Database Driver Class Initialized
DEBUG - 2013-11-13 13:29:17 --> Session Class Initialized
DEBUG - 2013-11-13 13:29:17 --> Helper loaded: string_helper
DEBUG - 2013-11-13 13:29:17 --> Session routines successfully run
DEBUG - 2013-11-13 13:29:17 --> Form Validation Class Initialized
DEBUG - 2013-11-13 13:29:17 --> Controller Class Initialized
INFO  - 2013-11-13 13:29:17 --> the form message==>
INFO  - 2013-11-13 13:29:17 --> The session id is ========>d2b0d606227d39672c9a6f1136a14aad and the member id is =======>
INFO  - 2013-11-13 13:29:17 --> after the retrieving session list.................//////////
DEBUG - 2013-11-13 13:29:17 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-11-13 13:29:17 --> Final output sent to browser
DEBUG - 2013-11-13 13:29:17 --> Total execution time: 0.0370
DEBUG - 2013-11-13 13:29:22 --> Config Class Initialized
DEBUG - 2013-11-13 13:29:22 --> Hooks Class Initialized
DEBUG - 2013-11-13 13:29:22 --> Utf8 Class Initialized
DEBUG - 2013-11-13 13:29:22 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 13:29:22 --> URI Class Initialized
DEBUG - 2013-11-13 13:29:22 --> Router Class Initialized
DEBUG - 2013-11-13 13:29:22 --> Output Class Initialized
DEBUG - 2013-11-13 13:29:22 --> Security Class Initialized
DEBUG - 2013-11-13 13:29:22 --> Input Class Initialized
DEBUG - 2013-11-13 13:29:22 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 13:29:22 --> Language Class Initialized
DEBUG - 2013-11-13 13:29:22 --> Loader Class Initialized
DEBUG - 2013-11-13 13:29:22 --> Helper loaded: form_helper
DEBUG - 2013-11-13 13:29:22 --> Helper loaded: url_helper
DEBUG - 2013-11-13 13:29:22 --> Helper loaded: html_helper
DEBUG - 2013-11-13 13:29:22 --> Database Driver Class Initialized
DEBUG - 2013-11-13 13:29:22 --> Session Class Initialized
DEBUG - 2013-11-13 13:29:22 --> Helper loaded: string_helper
DEBUG - 2013-11-13 13:29:22 --> Session routines successfully run
DEBUG - 2013-11-13 13:29:22 --> Form Validation Class Initialized
DEBUG - 2013-11-13 13:29:22 --> Controller Class Initialized
DEBUG - 2013-11-13 13:29:22 --> Model Class Initialized
DEBUG - 2013-11-13 13:29:22 --> Model Class Initialized
DEBUG - 2013-11-13 13:29:22 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 13:29:22 --> after session initialization................
INFO  - 2013-11-13 13:29:22 --> inside rays login auth.............
DEBUG - 2013-11-13 13:29:22 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-11-13 13:29:22 --> XSS Filtering completed
DEBUG - 2013-11-13 13:29:22 --> XSS Filtering completed
INFO  - 2013-11-13 13:29:22 --> before getting the relation of member............6
INFO  - 2013-11-13 13:29:22 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-11-13 13:29:22 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-13 13:29:22 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-11-13 13:29:22 --> inside retrieving vacancy for member
INFO  - 2013-11-13 13:29:22 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-11-13 13:29:22 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-13 13:29:22 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-11-13 13:29:22 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-11-13 13:29:22 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-13 13:29:22 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-13 13:29:22 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-11-13 13:29:22 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-11-13 13:29:22 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-11-13 13:29:22 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-11-13 13:29:22 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-11-13 13:29:22 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-11-13 13:29:22 --> Final output sent to browser
DEBUG - 2013-11-13 13:29:22 --> Total execution time: 0.1620
DEBUG - 2013-11-13 13:29:22 --> Config Class Initialized
DEBUG - 2013-11-13 13:29:22 --> Hooks Class Initialized
DEBUG - 2013-11-13 13:29:22 --> Utf8 Class Initialized
DEBUG - 2013-11-13 13:29:22 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 13:29:22 --> URI Class Initialized
DEBUG - 2013-11-13 13:29:22 --> Router Class Initialized
DEBUG - 2013-11-13 13:29:22 --> Output Class Initialized
DEBUG - 2013-11-13 13:29:22 --> Security Class Initialized
DEBUG - 2013-11-13 13:29:22 --> Input Class Initialized
DEBUG - 2013-11-13 13:29:22 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 13:29:22 --> Language Class Initialized
DEBUG - 2013-11-13 13:29:22 --> Loader Class Initialized
DEBUG - 2013-11-13 13:29:22 --> Helper loaded: form_helper
DEBUG - 2013-11-13 13:29:22 --> Helper loaded: url_helper
DEBUG - 2013-11-13 13:29:22 --> Helper loaded: html_helper
DEBUG - 2013-11-13 13:29:22 --> Database Driver Class Initialized
DEBUG - 2013-11-13 13:29:22 --> Session Class Initialized
DEBUG - 2013-11-13 13:29:22 --> Helper loaded: string_helper
DEBUG - 2013-11-13 13:29:22 --> Session routines successfully run
DEBUG - 2013-11-13 13:29:22 --> Form Validation Class Initialized
DEBUG - 2013-11-13 13:29:22 --> Controller Class Initialized
DEBUG - 2013-11-13 13:29:22 --> Model Class Initialized
DEBUG - 2013-11-13 13:29:22 --> Model Class Initialized
DEBUG - 2013-11-13 13:29:22 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 13:29:22 --> after session initialization................
ERROR - 2013-11-13 13:29:22 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-13 13:29:22 --> Config Class Initialized
DEBUG - 2013-11-13 13:29:22 --> Hooks Class Initialized
DEBUG - 2013-11-13 13:29:22 --> Utf8 Class Initialized
DEBUG - 2013-11-13 13:29:22 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 13:29:22 --> URI Class Initialized
DEBUG - 2013-11-13 13:29:22 --> Router Class Initialized
ERROR - 2013-11-13 13:29:22 --> 404 Page Not Found --> css
DEBUG - 2013-11-13 13:29:23 --> Config Class Initialized
DEBUG - 2013-11-13 13:29:23 --> Hooks Class Initialized
DEBUG - 2013-11-13 13:29:23 --> Utf8 Class Initialized
DEBUG - 2013-11-13 13:29:23 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 13:29:23 --> URI Class Initialized
DEBUG - 2013-11-13 13:29:23 --> Router Class Initialized
DEBUG - 2013-11-13 13:29:23 --> Output Class Initialized
DEBUG - 2013-11-13 13:29:23 --> Security Class Initialized
DEBUG - 2013-11-13 13:29:23 --> Input Class Initialized
DEBUG - 2013-11-13 13:29:23 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 13:29:23 --> Language Class Initialized
DEBUG - 2013-11-13 13:29:23 --> Loader Class Initialized
DEBUG - 2013-11-13 13:29:23 --> Helper loaded: form_helper
DEBUG - 2013-11-13 13:29:23 --> Helper loaded: url_helper
DEBUG - 2013-11-13 13:29:23 --> Helper loaded: html_helper
DEBUG - 2013-11-13 13:29:23 --> Database Driver Class Initialized
DEBUG - 2013-11-13 13:29:23 --> Session Class Initialized
DEBUG - 2013-11-13 13:29:23 --> Helper loaded: string_helper
DEBUG - 2013-11-13 13:29:23 --> Session routines successfully run
DEBUG - 2013-11-13 13:29:23 --> Form Validation Class Initialized
DEBUG - 2013-11-13 13:29:23 --> Controller Class Initialized
DEBUG - 2013-11-13 13:29:23 --> Model Class Initialized
DEBUG - 2013-11-13 13:29:23 --> Model Class Initialized
DEBUG - 2013-11-13 13:29:23 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 13:29:23 --> after session initialization................
INFO  - 2013-11-13 13:29:23 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 13:29:23 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 13:29:23 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 13:29:23 --> inside retrieving locations 
INFO  - 2013-11-13 13:29:23 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 13:29:23 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 13:29:23 --> Final output sent to browser
DEBUG - 2013-11-13 13:29:23 --> Total execution time: 0.0450
DEBUG - 2013-11-13 13:29:24 --> Config Class Initialized
DEBUG - 2013-11-13 13:29:24 --> Hooks Class Initialized
DEBUG - 2013-11-13 13:29:24 --> Utf8 Class Initialized
DEBUG - 2013-11-13 13:29:24 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 13:29:24 --> URI Class Initialized
DEBUG - 2013-11-13 13:29:24 --> Router Class Initialized
DEBUG - 2013-11-13 13:29:24 --> Output Class Initialized
DEBUG - 2013-11-13 13:29:24 --> Security Class Initialized
DEBUG - 2013-11-13 13:29:24 --> Input Class Initialized
DEBUG - 2013-11-13 13:29:24 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 13:29:24 --> Language Class Initialized
DEBUG - 2013-11-13 13:29:24 --> Loader Class Initialized
DEBUG - 2013-11-13 13:29:24 --> Helper loaded: form_helper
DEBUG - 2013-11-13 13:29:24 --> Helper loaded: url_helper
DEBUG - 2013-11-13 13:29:24 --> Helper loaded: html_helper
DEBUG - 2013-11-13 13:29:24 --> Database Driver Class Initialized
DEBUG - 2013-11-13 13:29:24 --> Session Class Initialized
DEBUG - 2013-11-13 13:29:24 --> Helper loaded: string_helper
DEBUG - 2013-11-13 13:29:24 --> Session routines successfully run
DEBUG - 2013-11-13 13:29:24 --> Form Validation Class Initialized
DEBUG - 2013-11-13 13:29:24 --> Controller Class Initialized
DEBUG - 2013-11-13 13:29:24 --> Model Class Initialized
DEBUG - 2013-11-13 13:29:24 --> Model Class Initialized
DEBUG - 2013-11-13 13:29:24 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 13:29:24 --> after session initialization................
ERROR - 2013-11-13 13:29:24 --> Severity: Notice  --> Undefined variable: pharmacyid C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 526
INFO  - 2013-11-13 13:29:24 --> pharmacy id is 
DEBUG - 2013-11-13 13:29:24 --> DB Transaction Failure
ERROR - 2013-11-13 13:29:24 --> Query error: Unknown column 'a.id_pharmacy' in 'where clause'
DEBUG - 2013-11-13 13:29:24 --> Language file loaded: language/english/db_lang.php
DEBUG - 2013-11-13 13:31:59 --> Config Class Initialized
DEBUG - 2013-11-13 13:31:59 --> Hooks Class Initialized
DEBUG - 2013-11-13 13:31:59 --> Utf8 Class Initialized
DEBUG - 2013-11-13 13:31:59 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 13:31:59 --> URI Class Initialized
DEBUG - 2013-11-13 13:31:59 --> Router Class Initialized
DEBUG - 2013-11-13 13:31:59 --> Output Class Initialized
DEBUG - 2013-11-13 13:31:59 --> Security Class Initialized
DEBUG - 2013-11-13 13:31:59 --> Input Class Initialized
DEBUG - 2013-11-13 13:31:59 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 13:31:59 --> Language Class Initialized
DEBUG - 2013-11-13 13:31:59 --> Loader Class Initialized
DEBUG - 2013-11-13 13:31:59 --> Helper loaded: form_helper
DEBUG - 2013-11-13 13:31:59 --> Helper loaded: url_helper
DEBUG - 2013-11-13 13:31:59 --> Helper loaded: html_helper
DEBUG - 2013-11-13 13:31:59 --> Database Driver Class Initialized
DEBUG - 2013-11-13 13:31:59 --> Session Class Initialized
DEBUG - 2013-11-13 13:31:59 --> Helper loaded: string_helper
DEBUG - 2013-11-13 13:31:59 --> Session routines successfully run
DEBUG - 2013-11-13 13:31:59 --> Form Validation Class Initialized
DEBUG - 2013-11-13 13:31:59 --> Controller Class Initialized
DEBUG - 2013-11-13 13:31:59 --> Model Class Initialized
DEBUG - 2013-11-13 13:31:59 --> Model Class Initialized
DEBUG - 2013-11-13 13:31:59 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 13:31:59 --> after session initialization................
INFO  - 2013-11-13 13:31:59 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 13:31:59 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 13:31:59 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 13:31:59 --> inside retrieving locations 
INFO  - 2013-11-13 13:31:59 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 13:31:59 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 13:31:59 --> Final output sent to browser
DEBUG - 2013-11-13 13:31:59 --> Total execution time: 0.1140
DEBUG - 2013-11-13 13:32:00 --> Config Class Initialized
DEBUG - 2013-11-13 13:32:00 --> Hooks Class Initialized
DEBUG - 2013-11-13 13:32:00 --> Utf8 Class Initialized
DEBUG - 2013-11-13 13:32:00 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 13:32:00 --> URI Class Initialized
DEBUG - 2013-11-13 13:32:00 --> Router Class Initialized
DEBUG - 2013-11-13 13:32:00 --> Output Class Initialized
DEBUG - 2013-11-13 13:32:00 --> Security Class Initialized
DEBUG - 2013-11-13 13:32:00 --> Input Class Initialized
DEBUG - 2013-11-13 13:32:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 13:32:00 --> Language Class Initialized
DEBUG - 2013-11-13 13:32:00 --> Loader Class Initialized
DEBUG - 2013-11-13 13:32:00 --> Helper loaded: form_helper
DEBUG - 2013-11-13 13:32:00 --> Helper loaded: url_helper
DEBUG - 2013-11-13 13:32:00 --> Helper loaded: html_helper
DEBUG - 2013-11-13 13:32:00 --> Database Driver Class Initialized
DEBUG - 2013-11-13 13:32:00 --> Session Class Initialized
DEBUG - 2013-11-13 13:32:00 --> Helper loaded: string_helper
DEBUG - 2013-11-13 13:32:00 --> Session routines successfully run
DEBUG - 2013-11-13 13:32:00 --> Form Validation Class Initialized
DEBUG - 2013-11-13 13:32:00 --> Controller Class Initialized
DEBUG - 2013-11-13 13:32:00 --> Model Class Initialized
DEBUG - 2013-11-13 13:32:00 --> Model Class Initialized
DEBUG - 2013-11-13 13:32:00 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 13:32:00 --> after session initialization................
ERROR - 2013-11-13 13:32:00 --> Severity: Notice  --> Undefined variable: pharmacyid C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 527
INFO  - 2013-11-13 13:32:00 --> pharmacy id is 
DEBUG - 2013-11-13 13:32:00 --> Final output sent to browser
DEBUG - 2013-11-13 13:32:00 --> Total execution time: 0.0590
DEBUG - 2013-11-13 13:35:24 --> Config Class Initialized
DEBUG - 2013-11-13 13:35:24 --> Hooks Class Initialized
DEBUG - 2013-11-13 13:35:24 --> Utf8 Class Initialized
DEBUG - 2013-11-13 13:35:24 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 13:35:24 --> URI Class Initialized
DEBUG - 2013-11-13 13:35:24 --> Router Class Initialized
DEBUG - 2013-11-13 13:35:24 --> Output Class Initialized
DEBUG - 2013-11-13 13:35:24 --> Security Class Initialized
DEBUG - 2013-11-13 13:35:24 --> Input Class Initialized
DEBUG - 2013-11-13 13:35:24 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 13:35:24 --> Language Class Initialized
DEBUG - 2013-11-13 13:35:24 --> Loader Class Initialized
DEBUG - 2013-11-13 13:35:24 --> Helper loaded: form_helper
DEBUG - 2013-11-13 13:35:24 --> Helper loaded: url_helper
DEBUG - 2013-11-13 13:35:24 --> Helper loaded: html_helper
DEBUG - 2013-11-13 13:35:24 --> Database Driver Class Initialized
DEBUG - 2013-11-13 13:35:24 --> Session Class Initialized
DEBUG - 2013-11-13 13:35:24 --> Helper loaded: string_helper
DEBUG - 2013-11-13 13:35:24 --> Session routines successfully run
DEBUG - 2013-11-13 13:35:24 --> Form Validation Class Initialized
DEBUG - 2013-11-13 13:35:24 --> Controller Class Initialized
DEBUG - 2013-11-13 13:35:24 --> Model Class Initialized
DEBUG - 2013-11-13 13:35:24 --> Model Class Initialized
DEBUG - 2013-11-13 13:35:24 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 13:35:24 --> after session initialization................
INFO  - 2013-11-13 13:35:24 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 13:35:24 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 13:35:24 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 13:35:24 --> inside retrieving locations 
INFO  - 2013-11-13 13:35:24 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 13:35:24 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 13:35:24 --> Final output sent to browser
DEBUG - 2013-11-13 13:35:24 --> Total execution time: 0.0610
DEBUG - 2013-11-13 13:35:30 --> Config Class Initialized
DEBUG - 2013-11-13 13:35:30 --> Hooks Class Initialized
DEBUG - 2013-11-13 13:35:30 --> Utf8 Class Initialized
DEBUG - 2013-11-13 13:35:30 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 13:35:30 --> URI Class Initialized
DEBUG - 2013-11-13 13:35:30 --> Router Class Initialized
DEBUG - 2013-11-13 13:35:30 --> Output Class Initialized
DEBUG - 2013-11-13 13:35:30 --> Security Class Initialized
DEBUG - 2013-11-13 13:35:30 --> Input Class Initialized
DEBUG - 2013-11-13 13:35:30 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 13:35:30 --> Language Class Initialized
DEBUG - 2013-11-13 13:35:30 --> Loader Class Initialized
DEBUG - 2013-11-13 13:35:30 --> Helper loaded: form_helper
DEBUG - 2013-11-13 13:35:30 --> Helper loaded: url_helper
DEBUG - 2013-11-13 13:35:30 --> Helper loaded: html_helper
DEBUG - 2013-11-13 13:35:30 --> Database Driver Class Initialized
DEBUG - 2013-11-13 13:35:31 --> Session Class Initialized
DEBUG - 2013-11-13 13:35:31 --> Helper loaded: string_helper
DEBUG - 2013-11-13 13:35:31 --> Session routines successfully run
DEBUG - 2013-11-13 13:35:31 --> Form Validation Class Initialized
DEBUG - 2013-11-13 13:35:31 --> Controller Class Initialized
DEBUG - 2013-11-13 13:35:31 --> Model Class Initialized
DEBUG - 2013-11-13 13:35:31 --> Model Class Initialized
DEBUG - 2013-11-13 13:35:31 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 13:35:31 --> after session initialization................
ERROR - 2013-11-13 13:35:31 --> Severity: Notice  --> Undefined variable: pharmacyid C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 527
INFO  - 2013-11-13 13:35:31 --> pharmacy id is 
DEBUG - 2013-11-13 13:35:31 --> Final output sent to browser
DEBUG - 2013-11-13 13:35:31 --> Total execution time: 1.1121
DEBUG - 2013-11-13 13:38:38 --> Config Class Initialized
DEBUG - 2013-11-13 13:38:38 --> Hooks Class Initialized
DEBUG - 2013-11-13 13:38:38 --> Utf8 Class Initialized
DEBUG - 2013-11-13 13:38:38 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 13:38:38 --> URI Class Initialized
DEBUG - 2013-11-13 13:38:38 --> Router Class Initialized
DEBUG - 2013-11-13 13:38:38 --> Output Class Initialized
DEBUG - 2013-11-13 13:38:38 --> Security Class Initialized
DEBUG - 2013-11-13 13:38:38 --> Input Class Initialized
DEBUG - 2013-11-13 13:38:38 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 13:38:38 --> Language Class Initialized
DEBUG - 2013-11-13 13:38:38 --> Loader Class Initialized
DEBUG - 2013-11-13 13:38:38 --> Helper loaded: form_helper
DEBUG - 2013-11-13 13:38:38 --> Helper loaded: url_helper
DEBUG - 2013-11-13 13:38:38 --> Helper loaded: html_helper
DEBUG - 2013-11-13 13:38:38 --> Database Driver Class Initialized
DEBUG - 2013-11-13 13:38:38 --> Session Class Initialized
DEBUG - 2013-11-13 13:38:38 --> Helper loaded: string_helper
DEBUG - 2013-11-13 13:38:38 --> Session routines successfully run
DEBUG - 2013-11-13 13:38:38 --> Form Validation Class Initialized
DEBUG - 2013-11-13 13:38:38 --> Controller Class Initialized
DEBUG - 2013-11-13 13:38:38 --> Model Class Initialized
DEBUG - 2013-11-13 13:38:38 --> Model Class Initialized
DEBUG - 2013-11-13 13:38:38 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 13:38:38 --> after session initialization................
INFO  - 2013-11-13 13:38:38 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 13:38:38 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 13:38:38 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 13:38:38 --> inside retrieving locations 
INFO  - 2013-11-13 13:38:38 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 13:38:38 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 13:38:38 --> Final output sent to browser
DEBUG - 2013-11-13 13:38:38 --> Total execution time: 0.0620
DEBUG - 2013-11-13 13:38:41 --> Config Class Initialized
DEBUG - 2013-11-13 13:38:41 --> Hooks Class Initialized
DEBUG - 2013-11-13 13:38:41 --> Utf8 Class Initialized
DEBUG - 2013-11-13 13:38:41 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 13:38:41 --> URI Class Initialized
DEBUG - 2013-11-13 13:38:41 --> Router Class Initialized
DEBUG - 2013-11-13 13:38:41 --> Output Class Initialized
DEBUG - 2013-11-13 13:38:41 --> Security Class Initialized
DEBUG - 2013-11-13 13:38:41 --> Input Class Initialized
DEBUG - 2013-11-13 13:38:41 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 13:38:41 --> Language Class Initialized
DEBUG - 2013-11-13 13:38:41 --> Loader Class Initialized
DEBUG - 2013-11-13 13:38:41 --> Helper loaded: form_helper
DEBUG - 2013-11-13 13:38:41 --> Helper loaded: url_helper
DEBUG - 2013-11-13 13:38:41 --> Helper loaded: html_helper
DEBUG - 2013-11-13 13:38:41 --> Database Driver Class Initialized
DEBUG - 2013-11-13 13:38:41 --> Session Class Initialized
DEBUG - 2013-11-13 13:38:41 --> Helper loaded: string_helper
DEBUG - 2013-11-13 13:38:41 --> Session routines successfully run
DEBUG - 2013-11-13 13:38:41 --> Form Validation Class Initialized
DEBUG - 2013-11-13 13:38:41 --> Controller Class Initialized
DEBUG - 2013-11-13 13:38:41 --> Model Class Initialized
DEBUG - 2013-11-13 13:38:41 --> Model Class Initialized
DEBUG - 2013-11-13 13:38:41 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 13:38:41 --> after session initialization................
INFO  - 2013-11-13 13:38:41 --> pharmacy id is 
DEBUG - 2013-11-13 13:38:41 --> Final output sent to browser
DEBUG - 2013-11-13 13:38:41 --> Total execution time: 0.0450
DEBUG - 2013-11-13 13:38:43 --> Config Class Initialized
DEBUG - 2013-11-13 13:38:43 --> Hooks Class Initialized
DEBUG - 2013-11-13 13:38:43 --> Utf8 Class Initialized
DEBUG - 2013-11-13 13:38:43 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 13:38:43 --> URI Class Initialized
DEBUG - 2013-11-13 13:38:43 --> Router Class Initialized
DEBUG - 2013-11-13 13:38:43 --> Output Class Initialized
DEBUG - 2013-11-13 13:38:43 --> Security Class Initialized
DEBUG - 2013-11-13 13:38:43 --> Input Class Initialized
DEBUG - 2013-11-13 13:38:43 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 13:38:43 --> Language Class Initialized
DEBUG - 2013-11-13 13:38:43 --> Loader Class Initialized
DEBUG - 2013-11-13 13:38:43 --> Helper loaded: form_helper
DEBUG - 2013-11-13 13:38:43 --> Helper loaded: url_helper
DEBUG - 2013-11-13 13:38:43 --> Helper loaded: html_helper
DEBUG - 2013-11-13 13:38:43 --> Database Driver Class Initialized
DEBUG - 2013-11-13 13:38:43 --> Session Class Initialized
DEBUG - 2013-11-13 13:38:43 --> Helper loaded: string_helper
DEBUG - 2013-11-13 13:38:43 --> Session routines successfully run
DEBUG - 2013-11-13 13:38:43 --> Form Validation Class Initialized
DEBUG - 2013-11-13 13:38:43 --> Controller Class Initialized
DEBUG - 2013-11-13 13:38:43 --> Model Class Initialized
DEBUG - 2013-11-13 13:38:43 --> Model Class Initialized
DEBUG - 2013-11-13 13:38:43 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 13:38:43 --> after session initialization................
INFO  - 2013-11-13 13:38:43 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 13:38:43 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 13:38:43 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 13:38:43 --> inside retrieving locations 
INFO  - 2013-11-13 13:38:43 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 13:38:43 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 13:38:43 --> Final output sent to browser
DEBUG - 2013-11-13 13:38:43 --> Total execution time: 0.0660
DEBUG - 2013-11-13 13:38:48 --> Config Class Initialized
DEBUG - 2013-11-13 13:38:48 --> Hooks Class Initialized
DEBUG - 2013-11-13 13:38:48 --> Utf8 Class Initialized
DEBUG - 2013-11-13 13:38:48 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 13:38:48 --> URI Class Initialized
DEBUG - 2013-11-13 13:38:48 --> Router Class Initialized
DEBUG - 2013-11-13 13:38:48 --> Output Class Initialized
DEBUG - 2013-11-13 13:38:48 --> Security Class Initialized
DEBUG - 2013-11-13 13:38:48 --> Input Class Initialized
DEBUG - 2013-11-13 13:38:48 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 13:38:48 --> Language Class Initialized
DEBUG - 2013-11-13 13:38:48 --> Loader Class Initialized
DEBUG - 2013-11-13 13:38:48 --> Helper loaded: form_helper
DEBUG - 2013-11-13 13:38:48 --> Helper loaded: url_helper
DEBUG - 2013-11-13 13:38:48 --> Helper loaded: html_helper
DEBUG - 2013-11-13 13:38:48 --> Database Driver Class Initialized
DEBUG - 2013-11-13 13:38:48 --> Session Class Initialized
DEBUG - 2013-11-13 13:38:48 --> Helper loaded: string_helper
DEBUG - 2013-11-13 13:38:48 --> Session routines successfully run
DEBUG - 2013-11-13 13:38:48 --> Form Validation Class Initialized
DEBUG - 2013-11-13 13:38:48 --> Controller Class Initialized
DEBUG - 2013-11-13 13:38:48 --> Model Class Initialized
DEBUG - 2013-11-13 13:38:48 --> Model Class Initialized
DEBUG - 2013-11-13 13:38:48 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 13:38:48 --> after session initialization................
INFO  - 2013-11-13 13:38:48 --> pharmacy id is 
DEBUG - 2013-11-13 13:38:48 --> Final output sent to browser
DEBUG - 2013-11-13 13:38:48 --> Total execution time: 0.0490
DEBUG - 2013-11-13 13:47:58 --> Config Class Initialized
DEBUG - 2013-11-13 13:47:58 --> Hooks Class Initialized
DEBUG - 2013-11-13 13:47:58 --> Utf8 Class Initialized
DEBUG - 2013-11-13 13:47:58 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 13:47:58 --> URI Class Initialized
DEBUG - 2013-11-13 13:47:58 --> Router Class Initialized
DEBUG - 2013-11-13 13:47:58 --> Output Class Initialized
DEBUG - 2013-11-13 13:47:58 --> Security Class Initialized
DEBUG - 2013-11-13 13:47:58 --> Input Class Initialized
DEBUG - 2013-11-13 13:47:58 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 13:47:58 --> Language Class Initialized
DEBUG - 2013-11-13 13:47:58 --> Loader Class Initialized
DEBUG - 2013-11-13 13:47:58 --> Helper loaded: form_helper
DEBUG - 2013-11-13 13:47:58 --> Helper loaded: url_helper
DEBUG - 2013-11-13 13:47:58 --> Helper loaded: html_helper
DEBUG - 2013-11-13 13:47:58 --> Database Driver Class Initialized
DEBUG - 2013-11-13 13:47:58 --> Session Class Initialized
DEBUG - 2013-11-13 13:47:58 --> Helper loaded: string_helper
DEBUG - 2013-11-13 13:47:58 --> Session routines successfully run
DEBUG - 2013-11-13 13:47:58 --> Form Validation Class Initialized
DEBUG - 2013-11-13 13:47:58 --> Controller Class Initialized
DEBUG - 2013-11-13 13:47:58 --> Model Class Initialized
DEBUG - 2013-11-13 13:47:58 --> Model Class Initialized
DEBUG - 2013-11-13 13:47:58 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 13:47:58 --> after session initialization................
DEBUG - 2013-11-13 13:47:58 --> Config Class Initialized
DEBUG - 2013-11-13 13:47:58 --> Hooks Class Initialized
DEBUG - 2013-11-13 13:47:58 --> Utf8 Class Initialized
DEBUG - 2013-11-13 13:47:58 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 13:47:58 --> URI Class Initialized
DEBUG - 2013-11-13 13:47:58 --> Router Class Initialized
DEBUG - 2013-11-13 13:47:58 --> No URI present. Default controller set.
DEBUG - 2013-11-13 13:47:58 --> Output Class Initialized
DEBUG - 2013-11-13 13:47:58 --> Security Class Initialized
DEBUG - 2013-11-13 13:47:58 --> Input Class Initialized
DEBUG - 2013-11-13 13:47:58 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 13:47:58 --> Language Class Initialized
DEBUG - 2013-11-13 13:47:58 --> Loader Class Initialized
DEBUG - 2013-11-13 13:47:58 --> Helper loaded: form_helper
DEBUG - 2013-11-13 13:47:58 --> Helper loaded: url_helper
DEBUG - 2013-11-13 13:47:58 --> Helper loaded: html_helper
DEBUG - 2013-11-13 13:47:58 --> Database Driver Class Initialized
DEBUG - 2013-11-13 13:47:58 --> Session Class Initialized
DEBUG - 2013-11-13 13:47:58 --> Helper loaded: string_helper
DEBUG - 2013-11-13 13:47:58 --> A session cookie was not found.
DEBUG - 2013-11-13 13:47:58 --> Session routines successfully run
DEBUG - 2013-11-13 13:47:58 --> Form Validation Class Initialized
DEBUG - 2013-11-13 13:47:58 --> Controller Class Initialized
INFO  - 2013-11-13 13:47:58 --> the form message==>
INFO  - 2013-11-13 13:47:58 --> The session id is ========>647869ea1c843b75431b7bfe59b7f61f and the member id is =======>
INFO  - 2013-11-13 13:47:58 --> after the retrieving session list.................//////////
DEBUG - 2013-11-13 13:47:58 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-11-13 13:47:58 --> Final output sent to browser
DEBUG - 2013-11-13 13:47:58 --> Total execution time: 0.0590
DEBUG - 2013-11-13 13:47:59 --> Config Class Initialized
DEBUG - 2013-11-13 13:47:59 --> Hooks Class Initialized
DEBUG - 2013-11-13 13:47:59 --> Utf8 Class Initialized
DEBUG - 2013-11-13 13:47:59 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 13:47:59 --> URI Class Initialized
DEBUG - 2013-11-13 13:47:59 --> Router Class Initialized
DEBUG - 2013-11-13 13:47:59 --> No URI present. Default controller set.
DEBUG - 2013-11-13 13:47:59 --> Output Class Initialized
DEBUG - 2013-11-13 13:47:59 --> Security Class Initialized
DEBUG - 2013-11-13 13:47:59 --> Input Class Initialized
DEBUG - 2013-11-13 13:47:59 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 13:47:59 --> Language Class Initialized
DEBUG - 2013-11-13 13:47:59 --> Loader Class Initialized
DEBUG - 2013-11-13 13:47:59 --> Helper loaded: form_helper
DEBUG - 2013-11-13 13:47:59 --> Helper loaded: url_helper
DEBUG - 2013-11-13 13:47:59 --> Helper loaded: html_helper
DEBUG - 2013-11-13 13:47:59 --> Database Driver Class Initialized
DEBUG - 2013-11-13 13:47:59 --> Session Class Initialized
DEBUG - 2013-11-13 13:47:59 --> Helper loaded: string_helper
DEBUG - 2013-11-13 13:47:59 --> Session routines successfully run
DEBUG - 2013-11-13 13:47:59 --> Form Validation Class Initialized
DEBUG - 2013-11-13 13:47:59 --> Controller Class Initialized
INFO  - 2013-11-13 13:47:59 --> the form message==>
INFO  - 2013-11-13 13:47:59 --> The session id is ========>647869ea1c843b75431b7bfe59b7f61f and the member id is =======>
INFO  - 2013-11-13 13:47:59 --> after the retrieving session list.................//////////
DEBUG - 2013-11-13 13:47:59 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-11-13 13:47:59 --> Final output sent to browser
DEBUG - 2013-11-13 13:47:59 --> Total execution time: 0.0470
DEBUG - 2013-11-13 13:48:04 --> Config Class Initialized
DEBUG - 2013-11-13 13:48:04 --> Hooks Class Initialized
DEBUG - 2013-11-13 13:48:04 --> Utf8 Class Initialized
DEBUG - 2013-11-13 13:48:04 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 13:48:04 --> URI Class Initialized
DEBUG - 2013-11-13 13:48:04 --> Router Class Initialized
DEBUG - 2013-11-13 13:48:04 --> Output Class Initialized
DEBUG - 2013-11-13 13:48:04 --> Security Class Initialized
DEBUG - 2013-11-13 13:48:04 --> Input Class Initialized
DEBUG - 2013-11-13 13:48:04 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 13:48:04 --> Language Class Initialized
DEBUG - 2013-11-13 13:48:04 --> Loader Class Initialized
DEBUG - 2013-11-13 13:48:04 --> Helper loaded: form_helper
DEBUG - 2013-11-13 13:48:04 --> Helper loaded: url_helper
DEBUG - 2013-11-13 13:48:04 --> Helper loaded: html_helper
DEBUG - 2013-11-13 13:48:04 --> Database Driver Class Initialized
DEBUG - 2013-11-13 13:48:04 --> Session Class Initialized
DEBUG - 2013-11-13 13:48:04 --> Helper loaded: string_helper
DEBUG - 2013-11-13 13:48:04 --> Session routines successfully run
DEBUG - 2013-11-13 13:48:04 --> Form Validation Class Initialized
DEBUG - 2013-11-13 13:48:04 --> Controller Class Initialized
DEBUG - 2013-11-13 13:48:04 --> Model Class Initialized
DEBUG - 2013-11-13 13:48:04 --> Model Class Initialized
DEBUG - 2013-11-13 13:48:04 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 13:48:04 --> after session initialization................
INFO  - 2013-11-13 13:48:04 --> inside rays login auth.............
DEBUG - 2013-11-13 13:48:04 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-11-13 13:48:04 --> XSS Filtering completed
DEBUG - 2013-11-13 13:48:04 --> XSS Filtering completed
INFO  - 2013-11-13 13:48:04 --> before getting the relation of member............6
INFO  - 2013-11-13 13:48:04 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-11-13 13:48:04 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-13 13:48:04 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-11-13 13:48:04 --> inside retrieving vacancy for member
INFO  - 2013-11-13 13:48:04 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-11-13 13:48:04 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-13 13:48:04 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-11-13 13:48:04 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-11-13 13:48:04 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-13 13:48:04 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-13 13:48:04 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-11-13 13:48:04 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-11-13 13:48:04 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-11-13 13:48:04 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-11-13 13:48:04 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-11-13 13:48:04 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-11-13 13:48:04 --> Final output sent to browser
DEBUG - 2013-11-13 13:48:04 --> Total execution time: 0.0890
DEBUG - 2013-11-13 13:48:04 --> Config Class Initialized
DEBUG - 2013-11-13 13:48:04 --> Hooks Class Initialized
DEBUG - 2013-11-13 13:48:04 --> Utf8 Class Initialized
DEBUG - 2013-11-13 13:48:04 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 13:48:04 --> URI Class Initialized
DEBUG - 2013-11-13 13:48:04 --> Router Class Initialized
DEBUG - 2013-11-13 13:48:04 --> Output Class Initialized
DEBUG - 2013-11-13 13:48:04 --> Security Class Initialized
DEBUG - 2013-11-13 13:48:04 --> Input Class Initialized
DEBUG - 2013-11-13 13:48:04 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 13:48:04 --> Language Class Initialized
DEBUG - 2013-11-13 13:48:04 --> Loader Class Initialized
DEBUG - 2013-11-13 13:48:04 --> Helper loaded: form_helper
DEBUG - 2013-11-13 13:48:04 --> Helper loaded: url_helper
DEBUG - 2013-11-13 13:48:04 --> Helper loaded: html_helper
DEBUG - 2013-11-13 13:48:04 --> Database Driver Class Initialized
DEBUG - 2013-11-13 13:48:04 --> Session Class Initialized
DEBUG - 2013-11-13 13:48:04 --> Helper loaded: string_helper
DEBUG - 2013-11-13 13:48:04 --> Session routines successfully run
DEBUG - 2013-11-13 13:48:04 --> Form Validation Class Initialized
DEBUG - 2013-11-13 13:48:04 --> Controller Class Initialized
DEBUG - 2013-11-13 13:48:04 --> Model Class Initialized
DEBUG - 2013-11-13 13:48:04 --> Model Class Initialized
DEBUG - 2013-11-13 13:48:04 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 13:48:04 --> after session initialization................
ERROR - 2013-11-13 13:48:04 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-13 13:48:05 --> Config Class Initialized
DEBUG - 2013-11-13 13:48:05 --> Hooks Class Initialized
DEBUG - 2013-11-13 13:48:05 --> Utf8 Class Initialized
DEBUG - 2013-11-13 13:48:05 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 13:48:05 --> URI Class Initialized
DEBUG - 2013-11-13 13:48:05 --> Router Class Initialized
ERROR - 2013-11-13 13:48:05 --> 404 Page Not Found --> css
DEBUG - 2013-11-13 13:48:06 --> Config Class Initialized
DEBUG - 2013-11-13 13:48:06 --> Hooks Class Initialized
DEBUG - 2013-11-13 13:48:06 --> Utf8 Class Initialized
DEBUG - 2013-11-13 13:48:06 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 13:48:06 --> URI Class Initialized
DEBUG - 2013-11-13 13:48:06 --> Router Class Initialized
DEBUG - 2013-11-13 13:48:06 --> Output Class Initialized
DEBUG - 2013-11-13 13:48:06 --> Security Class Initialized
DEBUG - 2013-11-13 13:48:06 --> Input Class Initialized
DEBUG - 2013-11-13 13:48:06 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 13:48:06 --> Language Class Initialized
DEBUG - 2013-11-13 13:48:06 --> Loader Class Initialized
DEBUG - 2013-11-13 13:48:06 --> Helper loaded: form_helper
DEBUG - 2013-11-13 13:48:06 --> Helper loaded: url_helper
DEBUG - 2013-11-13 13:48:06 --> Helper loaded: html_helper
DEBUG - 2013-11-13 13:48:06 --> Database Driver Class Initialized
DEBUG - 2013-11-13 13:48:06 --> Session Class Initialized
DEBUG - 2013-11-13 13:48:06 --> Helper loaded: string_helper
DEBUG - 2013-11-13 13:48:06 --> Session routines successfully run
DEBUG - 2013-11-13 13:48:06 --> Form Validation Class Initialized
DEBUG - 2013-11-13 13:48:06 --> Controller Class Initialized
DEBUG - 2013-11-13 13:48:06 --> Model Class Initialized
DEBUG - 2013-11-13 13:48:06 --> Model Class Initialized
DEBUG - 2013-11-13 13:48:06 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 13:48:06 --> after session initialization................
INFO  - 2013-11-13 13:48:06 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 13:48:06 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 13:48:06 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 13:48:06 --> inside retrieving locations 
INFO  - 2013-11-13 13:48:06 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 13:48:07 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 13:48:07 --> Final output sent to browser
DEBUG - 2013-11-13 13:48:07 --> Total execution time: 0.1030
DEBUG - 2013-11-13 13:48:22 --> Config Class Initialized
DEBUG - 2013-11-13 13:48:22 --> Hooks Class Initialized
DEBUG - 2013-11-13 13:48:22 --> Utf8 Class Initialized
DEBUG - 2013-11-13 13:48:22 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 13:48:22 --> URI Class Initialized
DEBUG - 2013-11-13 13:48:22 --> Router Class Initialized
DEBUG - 2013-11-13 13:48:22 --> Output Class Initialized
DEBUG - 2013-11-13 13:48:22 --> Security Class Initialized
DEBUG - 2013-11-13 13:48:22 --> Input Class Initialized
DEBUG - 2013-11-13 13:48:22 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 13:48:22 --> Language Class Initialized
DEBUG - 2013-11-13 13:48:22 --> Loader Class Initialized
DEBUG - 2013-11-13 13:48:22 --> Helper loaded: form_helper
DEBUG - 2013-11-13 13:48:22 --> Helper loaded: url_helper
DEBUG - 2013-11-13 13:48:22 --> Helper loaded: html_helper
DEBUG - 2013-11-13 13:48:22 --> Database Driver Class Initialized
DEBUG - 2013-11-13 13:48:22 --> Session Class Initialized
DEBUG - 2013-11-13 13:48:22 --> Helper loaded: string_helper
DEBUG - 2013-11-13 13:48:22 --> Session routines successfully run
DEBUG - 2013-11-13 13:48:22 --> Form Validation Class Initialized
DEBUG - 2013-11-13 13:48:22 --> Controller Class Initialized
DEBUG - 2013-11-13 13:48:22 --> Model Class Initialized
DEBUG - 2013-11-13 13:48:22 --> Model Class Initialized
DEBUG - 2013-11-13 13:48:22 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 13:48:22 --> after session initialization................
INFO  - 2013-11-13 13:48:22 --> pharmacy id is 
DEBUG - 2013-11-13 13:48:22 --> Final output sent to browser
DEBUG - 2013-11-13 13:48:22 --> Total execution time: 0.0420
DEBUG - 2013-11-13 15:56:20 --> Config Class Initialized
DEBUG - 2013-11-13 15:56:20 --> Hooks Class Initialized
DEBUG - 2013-11-13 15:56:20 --> Utf8 Class Initialized
DEBUG - 2013-11-13 15:56:20 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 15:56:20 --> URI Class Initialized
DEBUG - 2013-11-13 15:56:20 --> Router Class Initialized
DEBUG - 2013-11-13 15:56:21 --> Output Class Initialized
DEBUG - 2013-11-13 15:56:21 --> Security Class Initialized
DEBUG - 2013-11-13 15:56:21 --> Input Class Initialized
DEBUG - 2013-11-13 15:56:21 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 15:56:21 --> Language Class Initialized
DEBUG - 2013-11-13 15:56:21 --> Loader Class Initialized
DEBUG - 2013-11-13 15:56:21 --> Helper loaded: form_helper
DEBUG - 2013-11-13 15:56:21 --> Helper loaded: url_helper
DEBUG - 2013-11-13 15:56:21 --> Helper loaded: html_helper
DEBUG - 2013-11-13 15:56:21 --> Database Driver Class Initialized
DEBUG - 2013-11-13 15:56:22 --> Session Class Initialized
DEBUG - 2013-11-13 15:56:22 --> Helper loaded: string_helper
DEBUG - 2013-11-13 15:56:22 --> A session cookie was not found.
DEBUG - 2013-11-13 15:56:22 --> Session routines successfully run
DEBUG - 2013-11-13 15:56:22 --> Form Validation Class Initialized
DEBUG - 2013-11-13 15:56:22 --> Controller Class Initialized
DEBUG - 2013-11-13 15:56:22 --> Model Class Initialized
DEBUG - 2013-11-13 15:56:22 --> Model Class Initialized
DEBUG - 2013-11-13 15:56:22 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 15:56:22 --> after session initialization................
INFO  - 2013-11-13 15:56:22 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 15:56:22 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 15:56:22 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 15:56:22 --> inside retrieving locations 
INFO  - 2013-11-13 15:56:22 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 15:56:22 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 15:56:22 --> Final output sent to browser
DEBUG - 2013-11-13 15:56:22 --> Total execution time: 1.9812
DEBUG - 2013-11-13 15:57:07 --> Config Class Initialized
DEBUG - 2013-11-13 15:57:07 --> Hooks Class Initialized
DEBUG - 2013-11-13 15:57:07 --> Utf8 Class Initialized
DEBUG - 2013-11-13 15:57:07 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 15:57:07 --> URI Class Initialized
DEBUG - 2013-11-13 15:57:07 --> Router Class Initialized
DEBUG - 2013-11-13 15:57:07 --> Output Class Initialized
DEBUG - 2013-11-13 15:57:07 --> Security Class Initialized
DEBUG - 2013-11-13 15:57:07 --> Input Class Initialized
DEBUG - 2013-11-13 15:57:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 15:57:07 --> Language Class Initialized
DEBUG - 2013-11-13 15:57:07 --> Loader Class Initialized
DEBUG - 2013-11-13 15:57:07 --> Helper loaded: form_helper
DEBUG - 2013-11-13 15:57:07 --> Helper loaded: url_helper
DEBUG - 2013-11-13 15:57:07 --> Helper loaded: html_helper
DEBUG - 2013-11-13 15:57:07 --> Database Driver Class Initialized
DEBUG - 2013-11-13 15:57:08 --> Session Class Initialized
DEBUG - 2013-11-13 15:57:08 --> Helper loaded: string_helper
DEBUG - 2013-11-13 15:57:08 --> Session routines successfully run
DEBUG - 2013-11-13 15:57:08 --> Form Validation Class Initialized
DEBUG - 2013-11-13 15:57:08 --> Controller Class Initialized
DEBUG - 2013-11-13 15:57:08 --> Model Class Initialized
DEBUG - 2013-11-13 15:57:08 --> Model Class Initialized
DEBUG - 2013-11-13 15:57:08 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 15:57:08 --> after session initialization................
INFO  - 2013-11-13 15:57:08 --> inside retrieve most commented forum topic 
INFO  - 2013-11-13 15:57:08 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
INFO  - 2013-11-13 15:57:08 --> inside retrieving first 20 topics 
INFO  - 2013-11-13 15:57:08 --> SELECT `t`.`id_topicforum`, upper(t.name) as name, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
LIMIT 20
INFO  - 2013-11-13 15:57:08 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-13 15:57:08 --> SELECT `ff`.`id_forum` as id, `ff`.`name`, count(f.id_forum) as sub_forum
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` is null 
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`
INFO  - 2013-11-13 15:57:08 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-13 15:57:08 --> inside retrieving comments topic id and drug id is 1
INFO  - 2013-11-13 15:57:08 --> SELECT `tc`.`id_topiccomment`, `tc`.`comment`, `tc`.`timecreated`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-13 15:57:08 --> inside retrieving comments topic id 1
INFO  - 2013-11-13 15:57:08 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
INFO  - 2013-11-13 15:57:08 --> after forums has been clicked.................
INFO  - 2013-11-13 15:57:08 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-11-13 15:57:08 --> File loaded: ../pharmaray-application/views/forum.php
DEBUG - 2013-11-13 15:57:08 --> Final output sent to browser
DEBUG - 2013-11-13 15:57:08 --> Total execution time: 1.3416
DEBUG - 2013-11-13 15:57:08 --> Config Class Initialized
DEBUG - 2013-11-13 15:57:08 --> Hooks Class Initialized
DEBUG - 2013-11-13 15:57:08 --> Utf8 Class Initialized
DEBUG - 2013-11-13 15:57:08 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 15:57:08 --> URI Class Initialized
DEBUG - 2013-11-13 15:57:08 --> Router Class Initialized
DEBUG - 2013-11-13 15:57:08 --> Output Class Initialized
DEBUG - 2013-11-13 15:57:08 --> Security Class Initialized
DEBUG - 2013-11-13 15:57:08 --> Input Class Initialized
DEBUG - 2013-11-13 15:57:08 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 15:57:08 --> Language Class Initialized
DEBUG - 2013-11-13 15:57:08 --> Loader Class Initialized
DEBUG - 2013-11-13 15:57:08 --> Helper loaded: form_helper
DEBUG - 2013-11-13 15:57:08 --> Helper loaded: url_helper
DEBUG - 2013-11-13 15:57:08 --> Helper loaded: html_helper
DEBUG - 2013-11-13 15:57:08 --> Database Driver Class Initialized
DEBUG - 2013-11-13 15:57:09 --> Session Class Initialized
DEBUG - 2013-11-13 15:57:09 --> Helper loaded: string_helper
DEBUG - 2013-11-13 15:57:09 --> Session routines successfully run
DEBUG - 2013-11-13 15:57:09 --> Form Validation Class Initialized
DEBUG - 2013-11-13 15:57:09 --> Controller Class Initialized
DEBUG - 2013-11-13 15:57:09 --> Model Class Initialized
DEBUG - 2013-11-13 15:57:09 --> Model Class Initialized
DEBUG - 2013-11-13 15:57:09 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 15:57:09 --> after session initialization................
ERROR - 2013-11-13 15:57:09 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-13 15:57:10 --> Config Class Initialized
DEBUG - 2013-11-13 15:57:10 --> Hooks Class Initialized
DEBUG - 2013-11-13 15:57:10 --> Utf8 Class Initialized
DEBUG - 2013-11-13 15:57:10 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 15:57:10 --> URI Class Initialized
DEBUG - 2013-11-13 15:57:10 --> Router Class Initialized
ERROR - 2013-11-13 15:57:10 --> 404 Page Not Found --> css
DEBUG - 2013-11-13 15:57:31 --> Config Class Initialized
DEBUG - 2013-11-13 15:57:31 --> Hooks Class Initialized
DEBUG - 2013-11-13 15:57:31 --> Utf8 Class Initialized
DEBUG - 2013-11-13 15:57:31 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 15:57:31 --> URI Class Initialized
DEBUG - 2013-11-13 15:57:31 --> Router Class Initialized
DEBUG - 2013-11-13 15:57:31 --> Output Class Initialized
DEBUG - 2013-11-13 15:57:31 --> Security Class Initialized
DEBUG - 2013-11-13 15:57:31 --> Input Class Initialized
DEBUG - 2013-11-13 15:57:31 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 15:57:31 --> Language Class Initialized
DEBUG - 2013-11-13 15:57:31 --> Loader Class Initialized
DEBUG - 2013-11-13 15:57:31 --> Helper loaded: form_helper
DEBUG - 2013-11-13 15:57:31 --> Helper loaded: url_helper
DEBUG - 2013-11-13 15:57:31 --> Helper loaded: html_helper
DEBUG - 2013-11-13 15:57:31 --> Database Driver Class Initialized
DEBUG - 2013-11-13 15:57:31 --> Session Class Initialized
DEBUG - 2013-11-13 15:57:31 --> Helper loaded: string_helper
DEBUG - 2013-11-13 15:57:31 --> Session routines successfully run
DEBUG - 2013-11-13 15:57:31 --> Form Validation Class Initialized
DEBUG - 2013-11-13 15:57:31 --> Controller Class Initialized
DEBUG - 2013-11-13 15:57:31 --> Model Class Initialized
DEBUG - 2013-11-13 15:57:31 --> Model Class Initialized
DEBUG - 2013-11-13 15:57:31 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 15:57:31 --> after session initialization................
INFO  - 2013-11-13 15:57:31 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 15:57:31 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 15:57:31 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 15:57:31 --> inside retrieving locations 
INFO  - 2013-11-13 15:57:31 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 15:57:31 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 15:57:31 --> Final output sent to browser
DEBUG - 2013-11-13 15:57:31 --> Total execution time: 0.0624
DEBUG - 2013-11-13 15:58:01 --> Config Class Initialized
DEBUG - 2013-11-13 15:58:01 --> Hooks Class Initialized
DEBUG - 2013-11-13 15:58:01 --> Utf8 Class Initialized
DEBUG - 2013-11-13 15:58:01 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 15:58:01 --> URI Class Initialized
DEBUG - 2013-11-13 15:58:01 --> Router Class Initialized
DEBUG - 2013-11-13 15:58:01 --> Output Class Initialized
DEBUG - 2013-11-13 15:58:01 --> Security Class Initialized
DEBUG - 2013-11-13 15:58:01 --> Input Class Initialized
DEBUG - 2013-11-13 15:58:01 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 15:58:01 --> Language Class Initialized
DEBUG - 2013-11-13 15:58:01 --> Loader Class Initialized
DEBUG - 2013-11-13 15:58:01 --> Helper loaded: form_helper
DEBUG - 2013-11-13 15:58:01 --> Helper loaded: url_helper
DEBUG - 2013-11-13 15:58:01 --> Helper loaded: html_helper
DEBUG - 2013-11-13 15:58:01 --> Database Driver Class Initialized
DEBUG - 2013-11-13 15:58:01 --> Session Class Initialized
DEBUG - 2013-11-13 15:58:01 --> Helper loaded: string_helper
DEBUG - 2013-11-13 15:58:01 --> Session routines successfully run
DEBUG - 2013-11-13 15:58:01 --> Form Validation Class Initialized
DEBUG - 2013-11-13 15:58:01 --> Controller Class Initialized
DEBUG - 2013-11-13 15:58:01 --> Model Class Initialized
DEBUG - 2013-11-13 15:58:01 --> Model Class Initialized
DEBUG - 2013-11-13 15:58:01 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 15:58:01 --> after session initialization................
INFO  - 2013-11-13 15:58:01 --> pharmacy id is 
DEBUG - 2013-11-13 15:58:01 --> Final output sent to browser
DEBUG - 2013-11-13 15:58:01 --> Total execution time: 0.0624
DEBUG - 2013-11-13 15:58:14 --> Config Class Initialized
DEBUG - 2013-11-13 15:58:14 --> Hooks Class Initialized
DEBUG - 2013-11-13 15:58:14 --> Utf8 Class Initialized
DEBUG - 2013-11-13 15:58:14 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 15:58:14 --> URI Class Initialized
DEBUG - 2013-11-13 15:58:14 --> Router Class Initialized
DEBUG - 2013-11-13 15:58:14 --> Output Class Initialized
DEBUG - 2013-11-13 15:58:14 --> Security Class Initialized
DEBUG - 2013-11-13 15:58:14 --> Input Class Initialized
DEBUG - 2013-11-13 15:58:14 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 15:58:14 --> Language Class Initialized
DEBUG - 2013-11-13 15:58:14 --> Loader Class Initialized
DEBUG - 2013-11-13 15:58:14 --> Helper loaded: form_helper
DEBUG - 2013-11-13 15:58:14 --> Helper loaded: url_helper
DEBUG - 2013-11-13 15:58:14 --> Helper loaded: html_helper
DEBUG - 2013-11-13 15:58:14 --> Database Driver Class Initialized
DEBUG - 2013-11-13 15:58:14 --> Session Class Initialized
DEBUG - 2013-11-13 15:58:14 --> Helper loaded: string_helper
DEBUG - 2013-11-13 15:58:14 --> Session routines successfully run
DEBUG - 2013-11-13 15:58:14 --> Form Validation Class Initialized
DEBUG - 2013-11-13 15:58:14 --> Controller Class Initialized
DEBUG - 2013-11-13 15:58:14 --> Model Class Initialized
DEBUG - 2013-11-13 15:58:14 --> Model Class Initialized
DEBUG - 2013-11-13 15:58:14 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 15:58:14 --> after session initialization................
INFO  - 2013-11-13 15:58:14 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 15:58:14 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 15:58:14 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 15:58:14 --> inside retrieving locations 
INFO  - 2013-11-13 15:58:14 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 15:58:14 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 15:58:14 --> Final output sent to browser
DEBUG - 2013-11-13 15:58:14 --> Total execution time: 0.0624
DEBUG - 2013-11-13 16:00:38 --> Config Class Initialized
DEBUG - 2013-11-13 16:00:38 --> Hooks Class Initialized
DEBUG - 2013-11-13 16:00:38 --> Utf8 Class Initialized
DEBUG - 2013-11-13 16:00:38 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 16:00:38 --> URI Class Initialized
DEBUG - 2013-11-13 16:00:38 --> Router Class Initialized
DEBUG - 2013-11-13 16:00:38 --> Output Class Initialized
DEBUG - 2013-11-13 16:00:38 --> Security Class Initialized
DEBUG - 2013-11-13 16:00:38 --> Input Class Initialized
DEBUG - 2013-11-13 16:00:38 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 16:00:38 --> Language Class Initialized
DEBUG - 2013-11-13 16:00:38 --> Loader Class Initialized
DEBUG - 2013-11-13 16:00:38 --> Helper loaded: form_helper
DEBUG - 2013-11-13 16:00:38 --> Helper loaded: url_helper
DEBUG - 2013-11-13 16:00:38 --> Helper loaded: html_helper
DEBUG - 2013-11-13 16:00:38 --> Database Driver Class Initialized
DEBUG - 2013-11-13 16:00:38 --> Session Class Initialized
DEBUG - 2013-11-13 16:00:38 --> Helper loaded: string_helper
DEBUG - 2013-11-13 16:00:38 --> Session routines successfully run
DEBUG - 2013-11-13 16:00:38 --> Form Validation Class Initialized
DEBUG - 2013-11-13 16:00:38 --> Controller Class Initialized
DEBUG - 2013-11-13 16:00:38 --> Model Class Initialized
DEBUG - 2013-11-13 16:00:38 --> Model Class Initialized
DEBUG - 2013-11-13 16:00:38 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 16:00:38 --> after session initialization................
INFO  - 2013-11-13 16:00:38 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 16:00:38 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 16:00:38 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 16:00:38 --> inside retrieving locations 
INFO  - 2013-11-13 16:00:38 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 16:00:38 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 16:00:38 --> Final output sent to browser
DEBUG - 2013-11-13 16:00:38 --> Total execution time: 0.0468
DEBUG - 2013-11-13 16:00:47 --> Config Class Initialized
DEBUG - 2013-11-13 16:00:47 --> Hooks Class Initialized
DEBUG - 2013-11-13 16:00:47 --> Utf8 Class Initialized
DEBUG - 2013-11-13 16:00:47 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 16:00:47 --> URI Class Initialized
DEBUG - 2013-11-13 16:00:47 --> Router Class Initialized
DEBUG - 2013-11-13 16:00:47 --> Output Class Initialized
DEBUG - 2013-11-13 16:00:47 --> Security Class Initialized
DEBUG - 2013-11-13 16:00:47 --> Input Class Initialized
DEBUG - 2013-11-13 16:00:47 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 16:00:47 --> Language Class Initialized
DEBUG - 2013-11-13 16:00:47 --> Loader Class Initialized
DEBUG - 2013-11-13 16:00:47 --> Helper loaded: form_helper
DEBUG - 2013-11-13 16:00:47 --> Helper loaded: url_helper
DEBUG - 2013-11-13 16:00:47 --> Helper loaded: html_helper
DEBUG - 2013-11-13 16:00:47 --> Database Driver Class Initialized
DEBUG - 2013-11-13 16:00:47 --> Session Class Initialized
DEBUG - 2013-11-13 16:00:47 --> Helper loaded: string_helper
DEBUG - 2013-11-13 16:00:47 --> Session routines successfully run
DEBUG - 2013-11-13 16:00:47 --> Form Validation Class Initialized
DEBUG - 2013-11-13 16:00:47 --> Controller Class Initialized
DEBUG - 2013-11-13 16:00:47 --> Model Class Initialized
DEBUG - 2013-11-13 16:00:47 --> Model Class Initialized
DEBUG - 2013-11-13 16:00:47 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 16:00:47 --> after session initialization................
INFO  - 2013-11-13 16:00:47 --> pharmacy id is 1
DEBUG - 2013-11-13 16:00:47 --> Final output sent to browser
DEBUG - 2013-11-13 16:00:47 --> Total execution time: 0.0468
DEBUG - 2013-11-13 16:07:35 --> Config Class Initialized
DEBUG - 2013-11-13 16:07:35 --> Hooks Class Initialized
DEBUG - 2013-11-13 16:07:35 --> Utf8 Class Initialized
DEBUG - 2013-11-13 16:07:35 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 16:07:35 --> URI Class Initialized
DEBUG - 2013-11-13 16:07:35 --> Router Class Initialized
DEBUG - 2013-11-13 16:07:35 --> Output Class Initialized
DEBUG - 2013-11-13 16:07:35 --> Security Class Initialized
DEBUG - 2013-11-13 16:07:35 --> Input Class Initialized
DEBUG - 2013-11-13 16:07:35 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 16:07:35 --> Language Class Initialized
DEBUG - 2013-11-13 16:07:35 --> Loader Class Initialized
DEBUG - 2013-11-13 16:07:35 --> Helper loaded: form_helper
DEBUG - 2013-11-13 16:07:35 --> Helper loaded: url_helper
DEBUG - 2013-11-13 16:07:35 --> Helper loaded: html_helper
DEBUG - 2013-11-13 16:07:35 --> Database Driver Class Initialized
DEBUG - 2013-11-13 16:07:35 --> Session Class Initialized
DEBUG - 2013-11-13 16:07:35 --> Helper loaded: string_helper
DEBUG - 2013-11-13 16:07:35 --> Session routines successfully run
DEBUG - 2013-11-13 16:07:35 --> Form Validation Class Initialized
DEBUG - 2013-11-13 16:07:35 --> Controller Class Initialized
DEBUG - 2013-11-13 16:07:35 --> Model Class Initialized
DEBUG - 2013-11-13 16:07:35 --> Model Class Initialized
DEBUG - 2013-11-13 16:07:35 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 16:07:35 --> after session initialization................
INFO  - 2013-11-13 16:07:35 --> pharmacy id is 4
DEBUG - 2013-11-13 16:07:35 --> Final output sent to browser
DEBUG - 2013-11-13 16:07:35 --> Total execution time: 0.0312
DEBUG - 2013-11-13 16:25:33 --> Config Class Initialized
DEBUG - 2013-11-13 16:25:33 --> Hooks Class Initialized
DEBUG - 2013-11-13 16:25:33 --> Utf8 Class Initialized
DEBUG - 2013-11-13 16:25:33 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 16:25:33 --> URI Class Initialized
DEBUG - 2013-11-13 16:25:33 --> Router Class Initialized
DEBUG - 2013-11-13 16:25:33 --> Output Class Initialized
DEBUG - 2013-11-13 16:25:33 --> Security Class Initialized
DEBUG - 2013-11-13 16:25:33 --> Input Class Initialized
DEBUG - 2013-11-13 16:25:33 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 16:25:33 --> Language Class Initialized
DEBUG - 2013-11-13 16:25:33 --> Loader Class Initialized
DEBUG - 2013-11-13 16:25:33 --> Helper loaded: form_helper
DEBUG - 2013-11-13 16:25:33 --> Helper loaded: url_helper
DEBUG - 2013-11-13 16:25:33 --> Helper loaded: html_helper
DEBUG - 2013-11-13 16:25:33 --> Database Driver Class Initialized
DEBUG - 2013-11-13 16:25:33 --> Session Class Initialized
DEBUG - 2013-11-13 16:25:33 --> Helper loaded: string_helper
DEBUG - 2013-11-13 16:25:33 --> Session routines successfully run
DEBUG - 2013-11-13 16:25:33 --> Form Validation Class Initialized
DEBUG - 2013-11-13 16:25:33 --> Controller Class Initialized
DEBUG - 2013-11-13 16:25:33 --> Model Class Initialized
DEBUG - 2013-11-13 16:25:33 --> Model Class Initialized
DEBUG - 2013-11-13 16:25:33 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 16:25:33 --> after session initialization................
INFO  - 2013-11-13 16:25:33 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 16:25:33 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 16:25:33 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 16:25:33 --> inside retrieving locations 
INFO  - 2013-11-13 16:25:33 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 16:25:33 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 16:25:33 --> Final output sent to browser
DEBUG - 2013-11-13 16:25:33 --> Total execution time: 0.0624
DEBUG - 2013-11-13 16:25:34 --> Config Class Initialized
DEBUG - 2013-11-13 16:25:34 --> Hooks Class Initialized
DEBUG - 2013-11-13 16:25:34 --> Utf8 Class Initialized
DEBUG - 2013-11-13 16:25:34 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 16:25:34 --> URI Class Initialized
DEBUG - 2013-11-13 16:25:34 --> Router Class Initialized
DEBUG - 2013-11-13 16:25:34 --> Output Class Initialized
DEBUG - 2013-11-13 16:25:34 --> Security Class Initialized
DEBUG - 2013-11-13 16:25:34 --> Input Class Initialized
DEBUG - 2013-11-13 16:25:34 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 16:25:34 --> Language Class Initialized
DEBUG - 2013-11-13 16:25:34 --> Loader Class Initialized
DEBUG - 2013-11-13 16:25:34 --> Helper loaded: form_helper
DEBUG - 2013-11-13 16:25:34 --> Helper loaded: url_helper
DEBUG - 2013-11-13 16:25:34 --> Helper loaded: html_helper
DEBUG - 2013-11-13 16:25:34 --> Database Driver Class Initialized
DEBUG - 2013-11-13 16:25:34 --> Session Class Initialized
DEBUG - 2013-11-13 16:25:34 --> Helper loaded: string_helper
DEBUG - 2013-11-13 16:25:34 --> Session routines successfully run
DEBUG - 2013-11-13 16:25:34 --> Form Validation Class Initialized
DEBUG - 2013-11-13 16:25:34 --> Controller Class Initialized
DEBUG - 2013-11-13 16:25:34 --> Model Class Initialized
DEBUG - 2013-11-13 16:25:34 --> Model Class Initialized
DEBUG - 2013-11-13 16:25:34 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 16:25:34 --> after session initialization................
INFO  - 2013-11-13 16:25:34 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 16:25:34 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 16:25:34 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 16:25:34 --> inside retrieving locations 
INFO  - 2013-11-13 16:25:34 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 16:25:34 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 16:25:34 --> Final output sent to browser
DEBUG - 2013-11-13 16:25:34 --> Total execution time: 0.0468
DEBUG - 2013-11-13 16:25:45 --> Config Class Initialized
DEBUG - 2013-11-13 16:25:45 --> Hooks Class Initialized
DEBUG - 2013-11-13 16:25:45 --> Utf8 Class Initialized
DEBUG - 2013-11-13 16:25:45 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 16:25:45 --> URI Class Initialized
DEBUG - 2013-11-13 16:25:45 --> Router Class Initialized
DEBUG - 2013-11-13 16:25:45 --> Output Class Initialized
DEBUG - 2013-11-13 16:25:45 --> Security Class Initialized
DEBUG - 2013-11-13 16:25:45 --> Input Class Initialized
DEBUG - 2013-11-13 16:25:45 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 16:25:45 --> Language Class Initialized
DEBUG - 2013-11-13 16:25:45 --> Loader Class Initialized
DEBUG - 2013-11-13 16:25:45 --> Helper loaded: form_helper
DEBUG - 2013-11-13 16:25:45 --> Helper loaded: url_helper
DEBUG - 2013-11-13 16:25:45 --> Helper loaded: html_helper
DEBUG - 2013-11-13 16:25:45 --> Database Driver Class Initialized
DEBUG - 2013-11-13 16:25:45 --> Session Class Initialized
DEBUG - 2013-11-13 16:25:45 --> Helper loaded: string_helper
DEBUG - 2013-11-13 16:25:45 --> Session routines successfully run
DEBUG - 2013-11-13 16:25:45 --> Form Validation Class Initialized
DEBUG - 2013-11-13 16:25:45 --> Controller Class Initialized
DEBUG - 2013-11-13 16:25:45 --> Model Class Initialized
DEBUG - 2013-11-13 16:25:45 --> Model Class Initialized
DEBUG - 2013-11-13 16:25:45 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 16:25:45 --> after session initialization................
INFO  - 2013-11-13 16:25:45 --> pharmacy id retrieve is 2
DEBUG - 2013-11-13 16:25:45 --> Final output sent to browser
DEBUG - 2013-11-13 16:25:45 --> Total execution time: 0.0468
DEBUG - 2013-11-13 16:27:04 --> Config Class Initialized
DEBUG - 2013-11-13 16:27:04 --> Hooks Class Initialized
DEBUG - 2013-11-13 16:27:04 --> Utf8 Class Initialized
DEBUG - 2013-11-13 16:27:04 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 16:27:04 --> URI Class Initialized
DEBUG - 2013-11-13 16:27:04 --> Router Class Initialized
DEBUG - 2013-11-13 16:27:04 --> Output Class Initialized
DEBUG - 2013-11-13 16:27:04 --> Security Class Initialized
DEBUG - 2013-11-13 16:27:04 --> Input Class Initialized
DEBUG - 2013-11-13 16:27:04 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 16:27:04 --> Language Class Initialized
DEBUG - 2013-11-13 16:27:04 --> Loader Class Initialized
DEBUG - 2013-11-13 16:27:04 --> Helper loaded: form_helper
DEBUG - 2013-11-13 16:27:04 --> Helper loaded: url_helper
DEBUG - 2013-11-13 16:27:04 --> Helper loaded: html_helper
DEBUG - 2013-11-13 16:27:04 --> Database Driver Class Initialized
DEBUG - 2013-11-13 16:27:04 --> Session Class Initialized
DEBUG - 2013-11-13 16:27:04 --> Helper loaded: string_helper
DEBUG - 2013-11-13 16:27:04 --> Session routines successfully run
DEBUG - 2013-11-13 16:27:04 --> Form Validation Class Initialized
DEBUG - 2013-11-13 16:27:04 --> Controller Class Initialized
DEBUG - 2013-11-13 16:27:04 --> Model Class Initialized
DEBUG - 2013-11-13 16:27:04 --> Model Class Initialized
DEBUG - 2013-11-13 16:27:04 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 16:27:04 --> after session initialization................
INFO  - 2013-11-13 16:27:04 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 16:27:04 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 16:27:04 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 16:27:04 --> inside retrieving locations 
INFO  - 2013-11-13 16:27:04 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 16:27:04 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 16:27:04 --> Final output sent to browser
DEBUG - 2013-11-13 16:27:04 --> Total execution time: 0.0624
DEBUG - 2013-11-13 16:27:14 --> Config Class Initialized
DEBUG - 2013-11-13 16:27:14 --> Hooks Class Initialized
DEBUG - 2013-11-13 16:27:14 --> Utf8 Class Initialized
DEBUG - 2013-11-13 16:27:14 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 16:27:14 --> URI Class Initialized
DEBUG - 2013-11-13 16:27:14 --> Router Class Initialized
DEBUG - 2013-11-13 16:27:14 --> Output Class Initialized
DEBUG - 2013-11-13 16:27:14 --> Security Class Initialized
DEBUG - 2013-11-13 16:27:14 --> Input Class Initialized
DEBUG - 2013-11-13 16:27:14 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 16:27:14 --> Language Class Initialized
DEBUG - 2013-11-13 16:27:14 --> Loader Class Initialized
DEBUG - 2013-11-13 16:27:14 --> Helper loaded: form_helper
DEBUG - 2013-11-13 16:27:14 --> Helper loaded: url_helper
DEBUG - 2013-11-13 16:27:14 --> Helper loaded: html_helper
DEBUG - 2013-11-13 16:27:14 --> Database Driver Class Initialized
DEBUG - 2013-11-13 16:27:14 --> Session Class Initialized
DEBUG - 2013-11-13 16:27:14 --> Helper loaded: string_helper
DEBUG - 2013-11-13 16:27:14 --> Session routines successfully run
DEBUG - 2013-11-13 16:27:14 --> Form Validation Class Initialized
DEBUG - 2013-11-13 16:27:14 --> Controller Class Initialized
DEBUG - 2013-11-13 16:27:14 --> Model Class Initialized
DEBUG - 2013-11-13 16:27:14 --> Model Class Initialized
DEBUG - 2013-11-13 16:27:14 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 16:27:14 --> after session initialization................
INFO  - 2013-11-13 16:27:14 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>1
DEBUG - 2013-11-13 16:27:14 --> Final output sent to browser
DEBUG - 2013-11-13 16:27:14 --> Total execution time: 0.0468
DEBUG - 2013-11-13 16:28:02 --> Config Class Initialized
DEBUG - 2013-11-13 16:28:02 --> Hooks Class Initialized
DEBUG - 2013-11-13 16:28:02 --> Utf8 Class Initialized
DEBUG - 2013-11-13 16:28:02 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 16:28:02 --> URI Class Initialized
DEBUG - 2013-11-13 16:28:02 --> Router Class Initialized
DEBUG - 2013-11-13 16:28:02 --> Output Class Initialized
DEBUG - 2013-11-13 16:28:02 --> Security Class Initialized
DEBUG - 2013-11-13 16:28:02 --> Input Class Initialized
DEBUG - 2013-11-13 16:28:02 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 16:28:02 --> Language Class Initialized
DEBUG - 2013-11-13 16:28:02 --> Loader Class Initialized
DEBUG - 2013-11-13 16:28:02 --> Helper loaded: form_helper
DEBUG - 2013-11-13 16:28:02 --> Helper loaded: url_helper
DEBUG - 2013-11-13 16:28:02 --> Helper loaded: html_helper
DEBUG - 2013-11-13 16:28:02 --> Database Driver Class Initialized
DEBUG - 2013-11-13 16:28:02 --> Session Class Initialized
DEBUG - 2013-11-13 16:28:02 --> Helper loaded: string_helper
DEBUG - 2013-11-13 16:28:02 --> Session routines successfully run
DEBUG - 2013-11-13 16:28:02 --> Form Validation Class Initialized
DEBUG - 2013-11-13 16:28:02 --> Controller Class Initialized
DEBUG - 2013-11-13 16:28:02 --> Model Class Initialized
DEBUG - 2013-11-13 16:28:02 --> Model Class Initialized
DEBUG - 2013-11-13 16:28:02 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 16:28:02 --> after session initialization................
INFO  - 2013-11-13 16:28:02 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 16:28:02 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 16:28:02 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 16:28:02 --> inside retrieving locations 
INFO  - 2013-11-13 16:28:02 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 16:28:02 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 16:28:02 --> Final output sent to browser
DEBUG - 2013-11-13 16:28:02 --> Total execution time: 0.0624
DEBUG - 2013-11-13 16:28:04 --> Config Class Initialized
DEBUG - 2013-11-13 16:28:04 --> Hooks Class Initialized
DEBUG - 2013-11-13 16:28:04 --> Utf8 Class Initialized
DEBUG - 2013-11-13 16:28:04 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 16:28:04 --> URI Class Initialized
DEBUG - 2013-11-13 16:28:04 --> Router Class Initialized
DEBUG - 2013-11-13 16:28:04 --> Output Class Initialized
DEBUG - 2013-11-13 16:28:04 --> Security Class Initialized
DEBUG - 2013-11-13 16:28:04 --> Input Class Initialized
DEBUG - 2013-11-13 16:28:04 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 16:28:04 --> Language Class Initialized
DEBUG - 2013-11-13 16:28:04 --> Loader Class Initialized
DEBUG - 2013-11-13 16:28:04 --> Helper loaded: form_helper
DEBUG - 2013-11-13 16:28:04 --> Helper loaded: url_helper
DEBUG - 2013-11-13 16:28:04 --> Helper loaded: html_helper
DEBUG - 2013-11-13 16:28:04 --> Database Driver Class Initialized
DEBUG - 2013-11-13 16:28:04 --> Session Class Initialized
DEBUG - 2013-11-13 16:28:04 --> Helper loaded: string_helper
DEBUG - 2013-11-13 16:28:04 --> Session routines successfully run
DEBUG - 2013-11-13 16:28:04 --> Form Validation Class Initialized
DEBUG - 2013-11-13 16:28:04 --> Controller Class Initialized
DEBUG - 2013-11-13 16:28:04 --> Model Class Initialized
DEBUG - 2013-11-13 16:28:04 --> Model Class Initialized
DEBUG - 2013-11-13 16:28:04 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 16:28:04 --> after session initialization................
INFO  - 2013-11-13 16:28:04 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 16:28:04 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 16:28:04 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 16:28:04 --> inside retrieving locations 
INFO  - 2013-11-13 16:28:04 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 16:28:04 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 16:28:04 --> Final output sent to browser
DEBUG - 2013-11-13 16:28:04 --> Total execution time: 0.0624
DEBUG - 2013-11-13 16:28:14 --> Config Class Initialized
DEBUG - 2013-11-13 16:28:14 --> Hooks Class Initialized
DEBUG - 2013-11-13 16:28:14 --> Utf8 Class Initialized
DEBUG - 2013-11-13 16:28:14 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 16:28:14 --> URI Class Initialized
DEBUG - 2013-11-13 16:28:14 --> Router Class Initialized
DEBUG - 2013-11-13 16:28:14 --> Output Class Initialized
DEBUG - 2013-11-13 16:28:14 --> Security Class Initialized
DEBUG - 2013-11-13 16:28:14 --> Input Class Initialized
DEBUG - 2013-11-13 16:28:14 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 16:28:14 --> Language Class Initialized
DEBUG - 2013-11-13 16:28:14 --> Loader Class Initialized
DEBUG - 2013-11-13 16:28:14 --> Helper loaded: form_helper
DEBUG - 2013-11-13 16:28:14 --> Helper loaded: url_helper
DEBUG - 2013-11-13 16:28:14 --> Helper loaded: html_helper
DEBUG - 2013-11-13 16:28:14 --> Database Driver Class Initialized
DEBUG - 2013-11-13 16:28:15 --> Session Class Initialized
DEBUG - 2013-11-13 16:28:15 --> Helper loaded: string_helper
DEBUG - 2013-11-13 16:28:15 --> Session routines successfully run
DEBUG - 2013-11-13 16:28:15 --> Form Validation Class Initialized
DEBUG - 2013-11-13 16:28:15 --> Controller Class Initialized
DEBUG - 2013-11-13 16:28:15 --> Model Class Initialized
DEBUG - 2013-11-13 16:28:15 --> Model Class Initialized
DEBUG - 2013-11-13 16:28:15 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 16:28:15 --> after session initialization................
INFO  - 2013-11-13 16:28:15 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>4
INFO  - 2013-11-13 16:28:15 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` =  '4'
DEBUG - 2013-11-13 16:28:15 --> Final output sent to browser
DEBUG - 2013-11-13 16:28:15 --> Total execution time: 1.1076
DEBUG - 2013-11-13 16:31:17 --> Config Class Initialized
DEBUG - 2013-11-13 16:31:17 --> Hooks Class Initialized
DEBUG - 2013-11-13 16:31:17 --> Utf8 Class Initialized
DEBUG - 2013-11-13 16:31:17 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 16:31:17 --> URI Class Initialized
DEBUG - 2013-11-13 16:31:17 --> Router Class Initialized
DEBUG - 2013-11-13 16:31:17 --> Output Class Initialized
DEBUG - 2013-11-13 16:31:17 --> Security Class Initialized
DEBUG - 2013-11-13 16:31:17 --> Input Class Initialized
DEBUG - 2013-11-13 16:31:17 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 16:31:17 --> Language Class Initialized
DEBUG - 2013-11-13 16:31:17 --> Loader Class Initialized
DEBUG - 2013-11-13 16:31:17 --> Helper loaded: form_helper
DEBUG - 2013-11-13 16:31:17 --> Helper loaded: url_helper
DEBUG - 2013-11-13 16:31:17 --> Helper loaded: html_helper
DEBUG - 2013-11-13 16:31:17 --> Database Driver Class Initialized
DEBUG - 2013-11-13 16:31:17 --> Session Class Initialized
DEBUG - 2013-11-13 16:31:17 --> Helper loaded: string_helper
DEBUG - 2013-11-13 16:31:17 --> Session routines successfully run
DEBUG - 2013-11-13 16:31:17 --> Form Validation Class Initialized
DEBUG - 2013-11-13 16:31:17 --> Controller Class Initialized
DEBUG - 2013-11-13 16:31:17 --> Model Class Initialized
DEBUG - 2013-11-13 16:31:17 --> Model Class Initialized
DEBUG - 2013-11-13 16:31:17 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 16:31:17 --> after session initialization................
INFO  - 2013-11-13 16:31:17 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 16:31:17 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 16:31:17 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 16:31:17 --> inside retrieving locations 
INFO  - 2013-11-13 16:31:17 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 16:31:17 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 16:31:17 --> Final output sent to browser
DEBUG - 2013-11-13 16:31:17 --> Total execution time: 0.0468
DEBUG - 2013-11-13 16:31:20 --> Config Class Initialized
DEBUG - 2013-11-13 16:31:20 --> Hooks Class Initialized
DEBUG - 2013-11-13 16:31:20 --> Utf8 Class Initialized
DEBUG - 2013-11-13 16:31:20 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 16:31:20 --> URI Class Initialized
DEBUG - 2013-11-13 16:31:20 --> Router Class Initialized
DEBUG - 2013-11-13 16:31:20 --> Output Class Initialized
DEBUG - 2013-11-13 16:31:20 --> Security Class Initialized
DEBUG - 2013-11-13 16:31:20 --> Input Class Initialized
DEBUG - 2013-11-13 16:31:20 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 16:31:20 --> Language Class Initialized
DEBUG - 2013-11-13 16:31:20 --> Loader Class Initialized
DEBUG - 2013-11-13 16:31:20 --> Helper loaded: form_helper
DEBUG - 2013-11-13 16:31:20 --> Helper loaded: url_helper
DEBUG - 2013-11-13 16:31:20 --> Helper loaded: html_helper
DEBUG - 2013-11-13 16:31:20 --> Database Driver Class Initialized
DEBUG - 2013-11-13 16:31:20 --> Session Class Initialized
DEBUG - 2013-11-13 16:31:20 --> Helper loaded: string_helper
DEBUG - 2013-11-13 16:31:20 --> Session routines successfully run
DEBUG - 2013-11-13 16:31:20 --> Form Validation Class Initialized
DEBUG - 2013-11-13 16:31:20 --> Controller Class Initialized
DEBUG - 2013-11-13 16:31:20 --> Model Class Initialized
DEBUG - 2013-11-13 16:31:20 --> Model Class Initialized
DEBUG - 2013-11-13 16:31:20 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 16:31:20 --> after session initialization................
INFO  - 2013-11-13 16:31:20 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>4
INFO  - 2013-11-13 16:31:20 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` =  '4'
DEBUG - 2013-11-13 16:31:20 --> Final output sent to browser
DEBUG - 2013-11-13 16:31:20 --> Total execution time: 0.0468
DEBUG - 2013-11-13 16:32:32 --> Config Class Initialized
DEBUG - 2013-11-13 16:32:32 --> Hooks Class Initialized
DEBUG - 2013-11-13 16:32:32 --> Utf8 Class Initialized
DEBUG - 2013-11-13 16:32:32 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 16:32:32 --> URI Class Initialized
DEBUG - 2013-11-13 16:32:32 --> Router Class Initialized
DEBUG - 2013-11-13 16:32:32 --> Output Class Initialized
DEBUG - 2013-11-13 16:32:32 --> Security Class Initialized
DEBUG - 2013-11-13 16:32:32 --> Input Class Initialized
DEBUG - 2013-11-13 16:32:32 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 16:32:32 --> Language Class Initialized
DEBUG - 2013-11-13 16:32:32 --> Loader Class Initialized
DEBUG - 2013-11-13 16:32:32 --> Helper loaded: form_helper
DEBUG - 2013-11-13 16:32:32 --> Helper loaded: url_helper
DEBUG - 2013-11-13 16:32:32 --> Helper loaded: html_helper
DEBUG - 2013-11-13 16:32:32 --> Database Driver Class Initialized
DEBUG - 2013-11-13 16:32:32 --> Session Class Initialized
DEBUG - 2013-11-13 16:32:32 --> Helper loaded: string_helper
DEBUG - 2013-11-13 16:32:32 --> Session routines successfully run
DEBUG - 2013-11-13 16:32:32 --> Form Validation Class Initialized
DEBUG - 2013-11-13 16:32:32 --> Controller Class Initialized
DEBUG - 2013-11-13 16:32:32 --> Model Class Initialized
DEBUG - 2013-11-13 16:32:32 --> Model Class Initialized
DEBUG - 2013-11-13 16:32:32 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 16:32:32 --> after session initialization................
INFO  - 2013-11-13 16:32:32 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 16:32:32 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 16:32:32 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 16:32:32 --> inside retrieving locations 
INFO  - 2013-11-13 16:32:32 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 16:32:32 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 16:32:32 --> Final output sent to browser
DEBUG - 2013-11-13 16:32:32 --> Total execution time: 0.0780
DEBUG - 2013-11-13 16:32:34 --> Config Class Initialized
DEBUG - 2013-11-13 16:32:34 --> Hooks Class Initialized
DEBUG - 2013-11-13 16:32:34 --> Utf8 Class Initialized
DEBUG - 2013-11-13 16:32:34 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 16:32:34 --> URI Class Initialized
DEBUG - 2013-11-13 16:32:34 --> Router Class Initialized
DEBUG - 2013-11-13 16:32:34 --> Output Class Initialized
DEBUG - 2013-11-13 16:32:34 --> Security Class Initialized
DEBUG - 2013-11-13 16:32:34 --> Input Class Initialized
DEBUG - 2013-11-13 16:32:34 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 16:32:34 --> Language Class Initialized
DEBUG - 2013-11-13 16:32:34 --> Loader Class Initialized
DEBUG - 2013-11-13 16:32:34 --> Helper loaded: form_helper
DEBUG - 2013-11-13 16:32:34 --> Helper loaded: url_helper
DEBUG - 2013-11-13 16:32:34 --> Helper loaded: html_helper
DEBUG - 2013-11-13 16:32:34 --> Database Driver Class Initialized
DEBUG - 2013-11-13 16:32:35 --> Session Class Initialized
DEBUG - 2013-11-13 16:32:35 --> Helper loaded: string_helper
DEBUG - 2013-11-13 16:32:35 --> Session routines successfully run
DEBUG - 2013-11-13 16:32:35 --> Form Validation Class Initialized
DEBUG - 2013-11-13 16:32:35 --> Controller Class Initialized
DEBUG - 2013-11-13 16:32:35 --> Model Class Initialized
DEBUG - 2013-11-13 16:32:35 --> Model Class Initialized
DEBUG - 2013-11-13 16:32:35 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 16:32:35 --> after session initialization................
INFO  - 2013-11-13 16:32:35 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>3
INFO  - 2013-11-13 16:32:35 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` =  '3'
DEBUG - 2013-11-13 16:32:35 --> Final output sent to browser
DEBUG - 2013-11-13 16:32:35 --> Total execution time: 1.0920
DEBUG - 2013-11-13 16:33:13 --> Config Class Initialized
DEBUG - 2013-11-13 16:33:13 --> Hooks Class Initialized
DEBUG - 2013-11-13 16:33:13 --> Utf8 Class Initialized
DEBUG - 2013-11-13 16:33:13 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 16:33:13 --> URI Class Initialized
DEBUG - 2013-11-13 16:33:13 --> Router Class Initialized
DEBUG - 2013-11-13 16:33:13 --> Output Class Initialized
DEBUG - 2013-11-13 16:33:13 --> Security Class Initialized
DEBUG - 2013-11-13 16:33:13 --> Input Class Initialized
DEBUG - 2013-11-13 16:33:13 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 16:33:13 --> Language Class Initialized
DEBUG - 2013-11-13 16:33:13 --> Loader Class Initialized
DEBUG - 2013-11-13 16:33:13 --> Helper loaded: form_helper
DEBUG - 2013-11-13 16:33:13 --> Helper loaded: url_helper
DEBUG - 2013-11-13 16:33:13 --> Helper loaded: html_helper
DEBUG - 2013-11-13 16:33:13 --> Database Driver Class Initialized
DEBUG - 2013-11-13 16:33:13 --> Session Class Initialized
DEBUG - 2013-11-13 16:33:13 --> Helper loaded: string_helper
DEBUG - 2013-11-13 16:33:13 --> Session routines successfully run
DEBUG - 2013-11-13 16:33:13 --> Form Validation Class Initialized
DEBUG - 2013-11-13 16:33:13 --> Controller Class Initialized
DEBUG - 2013-11-13 16:33:13 --> Model Class Initialized
DEBUG - 2013-11-13 16:33:13 --> Model Class Initialized
DEBUG - 2013-11-13 16:33:13 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 16:33:13 --> after session initialization................
INFO  - 2013-11-13 16:33:13 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 16:33:13 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 16:33:13 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 16:33:13 --> inside retrieving locations 
INFO  - 2013-11-13 16:33:13 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 16:33:13 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 16:33:13 --> Final output sent to browser
DEBUG - 2013-11-13 16:33:13 --> Total execution time: 0.0468
DEBUG - 2013-11-13 16:33:16 --> Config Class Initialized
DEBUG - 2013-11-13 16:33:16 --> Hooks Class Initialized
DEBUG - 2013-11-13 16:33:16 --> Utf8 Class Initialized
DEBUG - 2013-11-13 16:33:16 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 16:33:16 --> URI Class Initialized
DEBUG - 2013-11-13 16:33:16 --> Router Class Initialized
DEBUG - 2013-11-13 16:33:16 --> Output Class Initialized
DEBUG - 2013-11-13 16:33:16 --> Security Class Initialized
DEBUG - 2013-11-13 16:33:16 --> Input Class Initialized
DEBUG - 2013-11-13 16:33:16 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 16:33:16 --> Language Class Initialized
DEBUG - 2013-11-13 16:33:16 --> Loader Class Initialized
DEBUG - 2013-11-13 16:33:16 --> Helper loaded: form_helper
DEBUG - 2013-11-13 16:33:16 --> Helper loaded: url_helper
DEBUG - 2013-11-13 16:33:16 --> Helper loaded: html_helper
DEBUG - 2013-11-13 16:33:16 --> Database Driver Class Initialized
DEBUG - 2013-11-13 16:33:16 --> Session Class Initialized
DEBUG - 2013-11-13 16:33:16 --> Helper loaded: string_helper
DEBUG - 2013-11-13 16:33:16 --> Session routines successfully run
DEBUG - 2013-11-13 16:33:16 --> Form Validation Class Initialized
DEBUG - 2013-11-13 16:33:16 --> Controller Class Initialized
DEBUG - 2013-11-13 16:33:16 --> Model Class Initialized
DEBUG - 2013-11-13 16:33:17 --> Model Class Initialized
DEBUG - 2013-11-13 16:33:17 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 16:33:17 --> after session initialization................
INFO  - 2013-11-13 16:33:17 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>4
INFO  - 2013-11-13 16:33:17 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` =  '4'
DEBUG - 2013-11-13 16:33:17 --> Final output sent to browser
DEBUG - 2013-11-13 16:33:17 --> Total execution time: 0.0624
DEBUG - 2013-11-13 16:35:28 --> Config Class Initialized
DEBUG - 2013-11-13 16:35:28 --> Hooks Class Initialized
DEBUG - 2013-11-13 16:35:28 --> Utf8 Class Initialized
DEBUG - 2013-11-13 16:35:28 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 16:35:28 --> URI Class Initialized
DEBUG - 2013-11-13 16:35:28 --> Router Class Initialized
DEBUG - 2013-11-13 16:35:28 --> Output Class Initialized
DEBUG - 2013-11-13 16:35:28 --> Security Class Initialized
DEBUG - 2013-11-13 16:35:28 --> Input Class Initialized
DEBUG - 2013-11-13 16:35:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 16:35:28 --> Language Class Initialized
DEBUG - 2013-11-13 16:35:28 --> Loader Class Initialized
DEBUG - 2013-11-13 16:35:28 --> Helper loaded: form_helper
DEBUG - 2013-11-13 16:35:28 --> Helper loaded: url_helper
DEBUG - 2013-11-13 16:35:28 --> Helper loaded: html_helper
DEBUG - 2013-11-13 16:35:28 --> Database Driver Class Initialized
DEBUG - 2013-11-13 16:35:28 --> Session Class Initialized
DEBUG - 2013-11-13 16:35:28 --> Helper loaded: string_helper
DEBUG - 2013-11-13 16:35:28 --> Session routines successfully run
DEBUG - 2013-11-13 16:35:28 --> Form Validation Class Initialized
DEBUG - 2013-11-13 16:35:28 --> Controller Class Initialized
DEBUG - 2013-11-13 16:35:28 --> Model Class Initialized
DEBUG - 2013-11-13 16:35:28 --> Model Class Initialized
DEBUG - 2013-11-13 16:35:28 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 16:35:28 --> after session initialization................
INFO  - 2013-11-13 16:35:28 --> inside the auto suggest page.................
INFO  - 2013-11-13 16:35:28 --> after the list array.................
INFO  - 2013-11-13 16:35:28 --> after retrieving the data from db.................
INFO  - 2013-11-13 16:35:28 --> looping.................
INFO  - 2013-11-13 16:35:28 --> looping.................
INFO  - 2013-11-13 16:35:28 --> looping.................
INFO  - 2013-11-13 16:35:28 --> looping.................
INFO  - 2013-11-13 16:35:28 --> looping.................
INFO  - 2013-11-13 16:35:28 --> looping.................
INFO  - 2013-11-13 16:35:28 --> looping.................
INFO  - 2013-11-13 16:35:28 --> looping.................
DEBUG - 2013-11-13 16:35:28 --> Final output sent to browser
DEBUG - 2013-11-13 16:35:28 --> Total execution time: 0.0624
DEBUG - 2013-11-13 16:35:29 --> Config Class Initialized
DEBUG - 2013-11-13 16:35:29 --> Hooks Class Initialized
DEBUG - 2013-11-13 16:35:29 --> Utf8 Class Initialized
DEBUG - 2013-11-13 16:35:29 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 16:35:29 --> URI Class Initialized
DEBUG - 2013-11-13 16:35:29 --> Router Class Initialized
DEBUG - 2013-11-13 16:35:29 --> Output Class Initialized
DEBUG - 2013-11-13 16:35:29 --> Security Class Initialized
DEBUG - 2013-11-13 16:35:29 --> Input Class Initialized
DEBUG - 2013-11-13 16:35:29 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 16:35:29 --> Language Class Initialized
DEBUG - 2013-11-13 16:35:29 --> Loader Class Initialized
DEBUG - 2013-11-13 16:35:29 --> Helper loaded: form_helper
DEBUG - 2013-11-13 16:35:29 --> Helper loaded: url_helper
DEBUG - 2013-11-13 16:35:29 --> Helper loaded: html_helper
DEBUG - 2013-11-13 16:35:29 --> Database Driver Class Initialized
DEBUG - 2013-11-13 16:35:29 --> Session Class Initialized
DEBUG - 2013-11-13 16:35:29 --> Helper loaded: string_helper
DEBUG - 2013-11-13 16:35:29 --> Session routines successfully run
DEBUG - 2013-11-13 16:35:29 --> Form Validation Class Initialized
DEBUG - 2013-11-13 16:35:29 --> Controller Class Initialized
DEBUG - 2013-11-13 16:35:29 --> Model Class Initialized
DEBUG - 2013-11-13 16:35:29 --> Model Class Initialized
DEBUG - 2013-11-13 16:35:29 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 16:35:29 --> after session initialization................
INFO  - 2013-11-13 16:35:29 --> inside the auto suggest page.................
INFO  - 2013-11-13 16:35:29 --> after the list array.................
INFO  - 2013-11-13 16:35:29 --> after retrieving the data from db.................
INFO  - 2013-11-13 16:35:29 --> looping.................
INFO  - 2013-11-13 16:35:29 --> looping.................
DEBUG - 2013-11-13 16:35:29 --> Final output sent to browser
DEBUG - 2013-11-13 16:35:29 --> Total execution time: 0.0624
DEBUG - 2013-11-13 16:35:29 --> Config Class Initialized
DEBUG - 2013-11-13 16:35:29 --> Hooks Class Initialized
DEBUG - 2013-11-13 16:35:29 --> Utf8 Class Initialized
DEBUG - 2013-11-13 16:35:29 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 16:35:29 --> URI Class Initialized
DEBUG - 2013-11-13 16:35:29 --> Router Class Initialized
DEBUG - 2013-11-13 16:35:29 --> Output Class Initialized
DEBUG - 2013-11-13 16:35:29 --> Security Class Initialized
DEBUG - 2013-11-13 16:35:29 --> Input Class Initialized
DEBUG - 2013-11-13 16:35:29 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 16:35:29 --> Language Class Initialized
DEBUG - 2013-11-13 16:35:29 --> Loader Class Initialized
DEBUG - 2013-11-13 16:35:29 --> Helper loaded: form_helper
DEBUG - 2013-11-13 16:35:29 --> Helper loaded: url_helper
DEBUG - 2013-11-13 16:35:29 --> Helper loaded: html_helper
DEBUG - 2013-11-13 16:35:29 --> Database Driver Class Initialized
DEBUG - 2013-11-13 16:35:29 --> Session Class Initialized
DEBUG - 2013-11-13 16:35:29 --> Helper loaded: string_helper
DEBUG - 2013-11-13 16:35:29 --> Session routines successfully run
DEBUG - 2013-11-13 16:35:29 --> Form Validation Class Initialized
DEBUG - 2013-11-13 16:35:29 --> Controller Class Initialized
DEBUG - 2013-11-13 16:35:29 --> Model Class Initialized
DEBUG - 2013-11-13 16:35:29 --> Model Class Initialized
DEBUG - 2013-11-13 16:35:29 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 16:35:29 --> after session initialization................
INFO  - 2013-11-13 16:35:29 --> inside the auto suggest page.................
INFO  - 2013-11-13 16:35:29 --> after the list array.................
INFO  - 2013-11-13 16:35:29 --> after retrieving the data from db.................
INFO  - 2013-11-13 16:35:29 --> looping.................
DEBUG - 2013-11-13 16:35:29 --> Final output sent to browser
DEBUG - 2013-11-13 16:35:29 --> Total execution time: 0.0624
DEBUG - 2013-11-13 16:35:47 --> Config Class Initialized
DEBUG - 2013-11-13 16:35:47 --> Hooks Class Initialized
DEBUG - 2013-11-13 16:35:47 --> Utf8 Class Initialized
DEBUG - 2013-11-13 16:35:47 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 16:35:47 --> URI Class Initialized
DEBUG - 2013-11-13 16:35:47 --> Router Class Initialized
DEBUG - 2013-11-13 16:35:47 --> Output Class Initialized
DEBUG - 2013-11-13 16:35:47 --> Security Class Initialized
DEBUG - 2013-11-13 16:35:47 --> Input Class Initialized
DEBUG - 2013-11-13 16:35:47 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 16:35:47 --> Language Class Initialized
DEBUG - 2013-11-13 16:35:47 --> Loader Class Initialized
DEBUG - 2013-11-13 16:35:47 --> Helper loaded: form_helper
DEBUG - 2013-11-13 16:35:47 --> Helper loaded: url_helper
DEBUG - 2013-11-13 16:35:47 --> Helper loaded: html_helper
DEBUG - 2013-11-13 16:35:47 --> Database Driver Class Initialized
DEBUG - 2013-11-13 16:35:47 --> Session Class Initialized
DEBUG - 2013-11-13 16:35:47 --> Helper loaded: string_helper
DEBUG - 2013-11-13 16:35:47 --> Session routines successfully run
DEBUG - 2013-11-13 16:35:47 --> Form Validation Class Initialized
DEBUG - 2013-11-13 16:35:47 --> Controller Class Initialized
DEBUG - 2013-11-13 16:35:47 --> Model Class Initialized
DEBUG - 2013-11-13 16:35:47 --> Model Class Initialized
DEBUG - 2013-11-13 16:35:47 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 16:35:47 --> after session initialization................
INFO  - 2013-11-13 16:35:47 --> inside the auto suggest page.................
INFO  - 2013-11-13 16:35:47 --> after the list array.................
INFO  - 2013-11-13 16:35:47 --> after retrieving the data from db.................
INFO  - 2013-11-13 16:35:47 --> looping.................
INFO  - 2013-11-13 16:35:47 --> looping.................
INFO  - 2013-11-13 16:35:47 --> looping.................
INFO  - 2013-11-13 16:35:47 --> looping.................
INFO  - 2013-11-13 16:35:47 --> looping.................
INFO  - 2013-11-13 16:35:47 --> looping.................
INFO  - 2013-11-13 16:35:47 --> looping.................
INFO  - 2013-11-13 16:35:47 --> looping.................
DEBUG - 2013-11-13 16:35:47 --> Final output sent to browser
DEBUG - 2013-11-13 16:35:47 --> Total execution time: 0.0624
DEBUG - 2013-11-13 16:41:08 --> Config Class Initialized
DEBUG - 2013-11-13 16:41:08 --> Hooks Class Initialized
DEBUG - 2013-11-13 16:41:08 --> Utf8 Class Initialized
DEBUG - 2013-11-13 16:41:08 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 16:41:08 --> URI Class Initialized
DEBUG - 2013-11-13 16:41:08 --> Router Class Initialized
DEBUG - 2013-11-13 16:41:08 --> Output Class Initialized
DEBUG - 2013-11-13 16:41:08 --> Security Class Initialized
DEBUG - 2013-11-13 16:41:08 --> Input Class Initialized
DEBUG - 2013-11-13 16:41:08 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 16:41:08 --> Language Class Initialized
DEBUG - 2013-11-13 16:41:08 --> Loader Class Initialized
DEBUG - 2013-11-13 16:41:08 --> Helper loaded: form_helper
DEBUG - 2013-11-13 16:41:08 --> Helper loaded: url_helper
DEBUG - 2013-11-13 16:41:08 --> Helper loaded: html_helper
DEBUG - 2013-11-13 16:41:08 --> Database Driver Class Initialized
DEBUG - 2013-11-13 16:41:08 --> Session Class Initialized
DEBUG - 2013-11-13 16:41:08 --> Helper loaded: string_helper
DEBUG - 2013-11-13 16:41:08 --> Session routines successfully run
DEBUG - 2013-11-13 16:41:08 --> Form Validation Class Initialized
DEBUG - 2013-11-13 16:41:08 --> Controller Class Initialized
DEBUG - 2013-11-13 16:41:08 --> Model Class Initialized
DEBUG - 2013-11-13 16:41:08 --> Model Class Initialized
DEBUG - 2013-11-13 16:41:08 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 16:41:08 --> after session initialization................
INFO  - 2013-11-13 16:41:08 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 16:41:08 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 16:41:08 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 16:41:08 --> inside retrieving locations 
INFO  - 2013-11-13 16:41:08 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 16:41:08 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 16:41:08 --> Final output sent to browser
DEBUG - 2013-11-13 16:41:08 --> Total execution time: 0.0780
DEBUG - 2013-11-13 16:41:11 --> Config Class Initialized
DEBUG - 2013-11-13 16:41:11 --> Hooks Class Initialized
DEBUG - 2013-11-13 16:41:11 --> Utf8 Class Initialized
DEBUG - 2013-11-13 16:41:11 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 16:41:11 --> URI Class Initialized
DEBUG - 2013-11-13 16:41:11 --> Router Class Initialized
DEBUG - 2013-11-13 16:41:11 --> Output Class Initialized
DEBUG - 2013-11-13 16:41:11 --> Security Class Initialized
DEBUG - 2013-11-13 16:41:11 --> Input Class Initialized
DEBUG - 2013-11-13 16:41:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 16:41:11 --> Language Class Initialized
DEBUG - 2013-11-13 16:41:11 --> Loader Class Initialized
DEBUG - 2013-11-13 16:41:11 --> Helper loaded: form_helper
DEBUG - 2013-11-13 16:41:11 --> Helper loaded: url_helper
DEBUG - 2013-11-13 16:41:11 --> Helper loaded: html_helper
DEBUG - 2013-11-13 16:41:11 --> Database Driver Class Initialized
DEBUG - 2013-11-13 16:41:11 --> Session Class Initialized
DEBUG - 2013-11-13 16:41:11 --> Helper loaded: string_helper
DEBUG - 2013-11-13 16:41:11 --> Session routines successfully run
DEBUG - 2013-11-13 16:41:11 --> Form Validation Class Initialized
DEBUG - 2013-11-13 16:41:11 --> Controller Class Initialized
DEBUG - 2013-11-13 16:41:11 --> Model Class Initialized
DEBUG - 2013-11-13 16:41:11 --> Model Class Initialized
DEBUG - 2013-11-13 16:41:11 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 16:41:11 --> after session initialization................
INFO  - 2013-11-13 16:41:11 --> inside the auto suggest page.................
INFO  - 2013-11-13 16:41:11 --> after the list array.................
INFO  - 2013-11-13 16:41:11 --> after retrieving the data from db.................
INFO  - 2013-11-13 16:41:11 --> looping.................
INFO  - 2013-11-13 16:41:11 --> looping.................
INFO  - 2013-11-13 16:41:11 --> looping.................
INFO  - 2013-11-13 16:41:11 --> looping.................
INFO  - 2013-11-13 16:41:11 --> looping.................
INFO  - 2013-11-13 16:41:11 --> looping.................
INFO  - 2013-11-13 16:41:11 --> looping.................
INFO  - 2013-11-13 16:41:11 --> looping.................
DEBUG - 2013-11-13 16:41:12 --> Final output sent to browser
DEBUG - 2013-11-13 16:41:12 --> Total execution time: 0.0624
DEBUG - 2013-11-13 16:41:14 --> Config Class Initialized
DEBUG - 2013-11-13 16:41:14 --> Hooks Class Initialized
DEBUG - 2013-11-13 16:41:14 --> Utf8 Class Initialized
DEBUG - 2013-11-13 16:41:14 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 16:41:14 --> URI Class Initialized
DEBUG - 2013-11-13 16:41:14 --> Router Class Initialized
DEBUG - 2013-11-13 16:41:14 --> Output Class Initialized
DEBUG - 2013-11-13 16:41:14 --> Security Class Initialized
DEBUG - 2013-11-13 16:41:14 --> Input Class Initialized
DEBUG - 2013-11-13 16:41:14 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 16:41:14 --> Language Class Initialized
DEBUG - 2013-11-13 16:41:14 --> Loader Class Initialized
DEBUG - 2013-11-13 16:41:14 --> Helper loaded: form_helper
DEBUG - 2013-11-13 16:41:14 --> Helper loaded: url_helper
DEBUG - 2013-11-13 16:41:14 --> Helper loaded: html_helper
DEBUG - 2013-11-13 16:41:14 --> Database Driver Class Initialized
DEBUG - 2013-11-13 16:41:14 --> Session Class Initialized
DEBUG - 2013-11-13 16:41:14 --> Helper loaded: string_helper
DEBUG - 2013-11-13 16:41:14 --> Session routines successfully run
DEBUG - 2013-11-13 16:41:14 --> Form Validation Class Initialized
DEBUG - 2013-11-13 16:41:14 --> Controller Class Initialized
DEBUG - 2013-11-13 16:41:14 --> Model Class Initialized
DEBUG - 2013-11-13 16:41:14 --> Model Class Initialized
DEBUG - 2013-11-13 16:41:14 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 16:41:14 --> after session initialization................
INFO  - 2013-11-13 16:41:14 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>1
INFO  - 2013-11-13 16:41:14 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` =  '1'
DEBUG - 2013-11-13 16:41:14 --> Final output sent to browser
DEBUG - 2013-11-13 16:41:14 --> Total execution time: 0.0468
DEBUG - 2013-11-13 16:44:13 --> Config Class Initialized
DEBUG - 2013-11-13 16:44:13 --> Hooks Class Initialized
DEBUG - 2013-11-13 16:44:13 --> Utf8 Class Initialized
DEBUG - 2013-11-13 16:44:13 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 16:44:13 --> URI Class Initialized
DEBUG - 2013-11-13 16:44:13 --> Router Class Initialized
DEBUG - 2013-11-13 16:44:13 --> Output Class Initialized
DEBUG - 2013-11-13 16:44:13 --> Security Class Initialized
DEBUG - 2013-11-13 16:44:13 --> Input Class Initialized
DEBUG - 2013-11-13 16:44:13 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 16:44:13 --> Language Class Initialized
DEBUG - 2013-11-13 16:44:13 --> Loader Class Initialized
DEBUG - 2013-11-13 16:44:13 --> Helper loaded: form_helper
DEBUG - 2013-11-13 16:44:13 --> Helper loaded: url_helper
DEBUG - 2013-11-13 16:44:13 --> Helper loaded: html_helper
DEBUG - 2013-11-13 16:44:13 --> Database Driver Class Initialized
DEBUG - 2013-11-13 16:44:13 --> Session Class Initialized
DEBUG - 2013-11-13 16:44:13 --> Helper loaded: string_helper
DEBUG - 2013-11-13 16:44:13 --> Session routines successfully run
DEBUG - 2013-11-13 16:44:13 --> Form Validation Class Initialized
DEBUG - 2013-11-13 16:44:13 --> Controller Class Initialized
DEBUG - 2013-11-13 16:44:13 --> Model Class Initialized
DEBUG - 2013-11-13 16:44:13 --> Model Class Initialized
DEBUG - 2013-11-13 16:44:13 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 16:44:13 --> after session initialization................
INFO  - 2013-11-13 16:44:13 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 16:44:13 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 16:44:13 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 16:44:13 --> inside retrieving locations 
INFO  - 2013-11-13 16:44:13 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 16:44:13 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 16:44:13 --> Final output sent to browser
DEBUG - 2013-11-13 16:44:13 --> Total execution time: 0.0520
DEBUG - 2013-11-13 17:04:30 --> Config Class Initialized
DEBUG - 2013-11-13 17:04:30 --> Hooks Class Initialized
DEBUG - 2013-11-13 17:04:30 --> Utf8 Class Initialized
DEBUG - 2013-11-13 17:04:30 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 17:04:30 --> URI Class Initialized
DEBUG - 2013-11-13 17:04:30 --> Router Class Initialized
DEBUG - 2013-11-13 17:04:30 --> Output Class Initialized
DEBUG - 2013-11-13 17:04:30 --> Security Class Initialized
DEBUG - 2013-11-13 17:04:30 --> Input Class Initialized
DEBUG - 2013-11-13 17:04:30 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 17:04:30 --> Language Class Initialized
DEBUG - 2013-11-13 17:04:30 --> Loader Class Initialized
DEBUG - 2013-11-13 17:04:30 --> Helper loaded: form_helper
DEBUG - 2013-11-13 17:04:30 --> Helper loaded: url_helper
DEBUG - 2013-11-13 17:04:30 --> Helper loaded: html_helper
DEBUG - 2013-11-13 17:04:30 --> Database Driver Class Initialized
DEBUG - 2013-11-13 17:04:30 --> Session Class Initialized
DEBUG - 2013-11-13 17:04:30 --> Helper loaded: string_helper
DEBUG - 2013-11-13 17:04:30 --> Session routines successfully run
DEBUG - 2013-11-13 17:04:30 --> Form Validation Class Initialized
DEBUG - 2013-11-13 17:04:30 --> Controller Class Initialized
DEBUG - 2013-11-13 17:04:30 --> Model Class Initialized
DEBUG - 2013-11-13 17:04:30 --> Model Class Initialized
DEBUG - 2013-11-13 17:04:30 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 17:04:30 --> after session initialization................
INFO  - 2013-11-13 17:04:30 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 17:04:30 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 17:04:30 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 17:04:30 --> inside retrieving locations 
INFO  - 2013-11-13 17:04:30 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 17:04:30 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 17:04:30 --> Final output sent to browser
DEBUG - 2013-11-13 17:04:30 --> Total execution time: 0.0480
DEBUG - 2013-11-13 17:13:16 --> Config Class Initialized
DEBUG - 2013-11-13 17:13:16 --> Hooks Class Initialized
DEBUG - 2013-11-13 17:13:16 --> Utf8 Class Initialized
DEBUG - 2013-11-13 17:13:16 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 17:13:16 --> URI Class Initialized
DEBUG - 2013-11-13 17:13:16 --> Router Class Initialized
DEBUG - 2013-11-13 17:13:16 --> Output Class Initialized
DEBUG - 2013-11-13 17:13:16 --> Security Class Initialized
DEBUG - 2013-11-13 17:13:16 --> Input Class Initialized
DEBUG - 2013-11-13 17:13:16 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 17:13:16 --> Language Class Initialized
DEBUG - 2013-11-13 17:13:16 --> Loader Class Initialized
DEBUG - 2013-11-13 17:13:16 --> Helper loaded: form_helper
DEBUG - 2013-11-13 17:13:16 --> Helper loaded: url_helper
DEBUG - 2013-11-13 17:13:16 --> Helper loaded: html_helper
DEBUG - 2013-11-13 17:13:16 --> Database Driver Class Initialized
DEBUG - 2013-11-13 17:13:16 --> Session Class Initialized
DEBUG - 2013-11-13 17:13:16 --> Helper loaded: string_helper
DEBUG - 2013-11-13 17:13:16 --> Session routines successfully run
DEBUG - 2013-11-13 17:13:16 --> Form Validation Class Initialized
DEBUG - 2013-11-13 17:13:16 --> Controller Class Initialized
DEBUG - 2013-11-13 17:13:16 --> Model Class Initialized
DEBUG - 2013-11-13 17:13:16 --> Model Class Initialized
DEBUG - 2013-11-13 17:13:16 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 17:13:16 --> after session initialization................
INFO  - 2013-11-13 17:13:16 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 17:13:16 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 17:13:16 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 17:13:16 --> inside retrieving locations 
INFO  - 2013-11-13 17:13:16 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 17:13:16 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 17:13:16 --> Final output sent to browser
DEBUG - 2013-11-13 17:13:16 --> Total execution time: 0.0480
DEBUG - 2013-11-13 23:21:24 --> Config Class Initialized
DEBUG - 2013-11-13 23:21:24 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:21:24 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:21:24 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:21:24 --> URI Class Initialized
DEBUG - 2013-11-13 23:21:24 --> Router Class Initialized
DEBUG - 2013-11-13 23:21:24 --> Output Class Initialized
DEBUG - 2013-11-13 23:21:24 --> Security Class Initialized
DEBUG - 2013-11-13 23:21:24 --> Input Class Initialized
DEBUG - 2013-11-13 23:21:24 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:21:24 --> Language Class Initialized
DEBUG - 2013-11-13 23:21:24 --> Loader Class Initialized
DEBUG - 2013-11-13 23:21:24 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:21:24 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:21:24 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:21:24 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:21:24 --> Session Class Initialized
DEBUG - 2013-11-13 23:21:24 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:21:24 --> A session cookie was not found.
DEBUG - 2013-11-13 23:21:24 --> Session routines successfully run
DEBUG - 2013-11-13 23:21:24 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:21:24 --> Controller Class Initialized
DEBUG - 2013-11-13 23:21:24 --> Model Class Initialized
DEBUG - 2013-11-13 23:21:24 --> Model Class Initialized
DEBUG - 2013-11-13 23:21:24 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:21:24 --> after session initialization................
INFO  - 2013-11-13 23:21:24 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 23:21:24 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 23:21:24 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 23:21:24 --> inside retrieving locations 
INFO  - 2013-11-13 23:21:24 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 23:21:24 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 23:21:24 --> Final output sent to browser
DEBUG - 2013-11-13 23:21:24 --> Total execution time: 0.1100
DEBUG - 2013-11-13 23:21:29 --> Config Class Initialized
DEBUG - 2013-11-13 23:21:29 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:21:29 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:21:29 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:21:29 --> URI Class Initialized
DEBUG - 2013-11-13 23:21:29 --> Router Class Initialized
DEBUG - 2013-11-13 23:21:29 --> Output Class Initialized
DEBUG - 2013-11-13 23:21:29 --> Security Class Initialized
DEBUG - 2013-11-13 23:21:29 --> Input Class Initialized
DEBUG - 2013-11-13 23:21:29 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:21:29 --> Language Class Initialized
DEBUG - 2013-11-13 23:21:29 --> Loader Class Initialized
DEBUG - 2013-11-13 23:21:29 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:21:29 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:21:29 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:21:29 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:21:29 --> Session Class Initialized
DEBUG - 2013-11-13 23:21:29 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:21:29 --> Session routines successfully run
DEBUG - 2013-11-13 23:21:29 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:21:29 --> Controller Class Initialized
DEBUG - 2013-11-13 23:21:29 --> Model Class Initialized
DEBUG - 2013-11-13 23:21:29 --> Model Class Initialized
DEBUG - 2013-11-13 23:21:29 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:21:29 --> after session initialization................
INFO  - 2013-11-13 23:21:29 --> inside retrieving pharmacy by location id 2
INFO  - 2013-11-13 23:21:29 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '2'
LIMIT 25
DEBUG - 2013-11-13 23:21:29 --> Final output sent to browser
DEBUG - 2013-11-13 23:21:29 --> Total execution time: 0.0460
DEBUG - 2013-11-13 23:30:22 --> Config Class Initialized
DEBUG - 2013-11-13 23:30:22 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:30:22 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:30:22 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:30:22 --> URI Class Initialized
DEBUG - 2013-11-13 23:30:22 --> Router Class Initialized
DEBUG - 2013-11-13 23:30:22 --> Output Class Initialized
DEBUG - 2013-11-13 23:30:22 --> Security Class Initialized
DEBUG - 2013-11-13 23:30:22 --> Input Class Initialized
DEBUG - 2013-11-13 23:30:22 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:30:22 --> Language Class Initialized
DEBUG - 2013-11-13 23:30:22 --> Loader Class Initialized
DEBUG - 2013-11-13 23:30:22 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:30:22 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:30:22 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:30:22 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:30:22 --> Session Class Initialized
DEBUG - 2013-11-13 23:30:22 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:30:22 --> Session routines successfully run
DEBUG - 2013-11-13 23:30:22 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:30:22 --> Controller Class Initialized
DEBUG - 2013-11-13 23:30:22 --> Model Class Initialized
DEBUG - 2013-11-13 23:30:22 --> Model Class Initialized
DEBUG - 2013-11-13 23:30:22 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:30:22 --> after session initialization................
INFO  - 2013-11-13 23:30:22 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 23:30:22 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 23:30:22 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 23:30:22 --> inside retrieving locations 
INFO  - 2013-11-13 23:30:22 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 23:30:22 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 23:30:22 --> Final output sent to browser
DEBUG - 2013-11-13 23:30:22 --> Total execution time: 0.0560
DEBUG - 2013-11-13 23:30:25 --> Config Class Initialized
DEBUG - 2013-11-13 23:30:25 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:30:25 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:30:25 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:30:25 --> URI Class Initialized
DEBUG - 2013-11-13 23:30:25 --> Router Class Initialized
DEBUG - 2013-11-13 23:30:25 --> Output Class Initialized
DEBUG - 2013-11-13 23:30:25 --> Security Class Initialized
DEBUG - 2013-11-13 23:30:25 --> Input Class Initialized
DEBUG - 2013-11-13 23:30:25 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:30:25 --> Language Class Initialized
DEBUG - 2013-11-13 23:30:25 --> Loader Class Initialized
DEBUG - 2013-11-13 23:30:25 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:30:25 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:30:25 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:30:25 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:30:25 --> Session Class Initialized
DEBUG - 2013-11-13 23:30:25 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:30:25 --> Session routines successfully run
DEBUG - 2013-11-13 23:30:25 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:30:25 --> Controller Class Initialized
DEBUG - 2013-11-13 23:30:25 --> Model Class Initialized
DEBUG - 2013-11-13 23:30:25 --> Model Class Initialized
DEBUG - 2013-11-13 23:30:25 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:30:25 --> after session initialization................
INFO  - 2013-11-13 23:30:25 --> inside retrieving pharmacy by location id 1
INFO  - 2013-11-13 23:30:25 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '1'
LIMIT 25
DEBUG - 2013-11-13 23:30:25 --> Final output sent to browser
DEBUG - 2013-11-13 23:30:25 --> Total execution time: 0.0460
DEBUG - 2013-11-13 23:30:31 --> Config Class Initialized
DEBUG - 2013-11-13 23:30:31 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:30:31 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:30:31 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:30:31 --> URI Class Initialized
DEBUG - 2013-11-13 23:30:31 --> Router Class Initialized
DEBUG - 2013-11-13 23:30:31 --> Output Class Initialized
DEBUG - 2013-11-13 23:30:31 --> Security Class Initialized
DEBUG - 2013-11-13 23:30:31 --> Input Class Initialized
DEBUG - 2013-11-13 23:30:31 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:30:31 --> Language Class Initialized
DEBUG - 2013-11-13 23:30:31 --> Loader Class Initialized
DEBUG - 2013-11-13 23:30:31 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:30:31 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:30:31 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:30:31 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:30:31 --> Session Class Initialized
DEBUG - 2013-11-13 23:30:31 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:30:31 --> Session routines successfully run
DEBUG - 2013-11-13 23:30:31 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:30:31 --> Controller Class Initialized
DEBUG - 2013-11-13 23:30:31 --> Model Class Initialized
DEBUG - 2013-11-13 23:30:31 --> Model Class Initialized
DEBUG - 2013-11-13 23:30:31 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:30:31 --> after session initialization................
INFO  - 2013-11-13 23:30:31 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 23:30:31 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 23:30:31 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 23:30:31 --> inside retrieving locations 
INFO  - 2013-11-13 23:30:31 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 23:30:31 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 23:30:31 --> Final output sent to browser
DEBUG - 2013-11-13 23:30:31 --> Total execution time: 0.0530
DEBUG - 2013-11-13 23:30:40 --> Config Class Initialized
DEBUG - 2013-11-13 23:30:40 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:30:40 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:30:40 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:30:40 --> URI Class Initialized
DEBUG - 2013-11-13 23:30:40 --> Router Class Initialized
DEBUG - 2013-11-13 23:30:40 --> Output Class Initialized
DEBUG - 2013-11-13 23:30:40 --> Security Class Initialized
DEBUG - 2013-11-13 23:30:40 --> Input Class Initialized
DEBUG - 2013-11-13 23:30:40 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:30:40 --> Language Class Initialized
DEBUG - 2013-11-13 23:30:40 --> Loader Class Initialized
DEBUG - 2013-11-13 23:30:40 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:30:40 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:30:40 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:30:40 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:30:40 --> Session Class Initialized
DEBUG - 2013-11-13 23:30:40 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:30:40 --> Session routines successfully run
DEBUG - 2013-11-13 23:30:40 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:30:40 --> Controller Class Initialized
DEBUG - 2013-11-13 23:30:40 --> Model Class Initialized
DEBUG - 2013-11-13 23:30:40 --> Model Class Initialized
DEBUG - 2013-11-13 23:30:40 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:30:40 --> after session initialization................
INFO  - 2013-11-13 23:30:40 --> inside retrieving pharmacy by location id 2
INFO  - 2013-11-13 23:30:40 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '2'
LIMIT 25
DEBUG - 2013-11-13 23:30:40 --> Final output sent to browser
DEBUG - 2013-11-13 23:30:40 --> Total execution time: 0.1460
DEBUG - 2013-11-13 23:31:33 --> Config Class Initialized
DEBUG - 2013-11-13 23:31:33 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:31:33 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:31:33 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:31:33 --> URI Class Initialized
DEBUG - 2013-11-13 23:31:33 --> Router Class Initialized
DEBUG - 2013-11-13 23:31:33 --> Output Class Initialized
DEBUG - 2013-11-13 23:31:33 --> Security Class Initialized
DEBUG - 2013-11-13 23:31:33 --> Input Class Initialized
DEBUG - 2013-11-13 23:31:33 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:31:33 --> Language Class Initialized
DEBUG - 2013-11-13 23:31:33 --> Loader Class Initialized
DEBUG - 2013-11-13 23:31:33 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:31:33 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:31:33 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:31:33 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:31:33 --> Session Class Initialized
DEBUG - 2013-11-13 23:31:33 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:31:33 --> Session routines successfully run
DEBUG - 2013-11-13 23:31:33 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:31:33 --> Controller Class Initialized
DEBUG - 2013-11-13 23:31:33 --> Model Class Initialized
DEBUG - 2013-11-13 23:31:33 --> Model Class Initialized
DEBUG - 2013-11-13 23:31:33 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:31:33 --> after session initialization................
INFO  - 2013-11-13 23:31:33 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 23:31:33 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 23:31:33 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 23:31:33 --> inside retrieving locations 
INFO  - 2013-11-13 23:31:33 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 23:31:33 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 23:31:33 --> Final output sent to browser
DEBUG - 2013-11-13 23:31:33 --> Total execution time: 0.0950
DEBUG - 2013-11-13 23:31:36 --> Config Class Initialized
DEBUG - 2013-11-13 23:31:36 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:31:36 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:31:36 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:31:36 --> URI Class Initialized
DEBUG - 2013-11-13 23:31:36 --> Router Class Initialized
DEBUG - 2013-11-13 23:31:36 --> Output Class Initialized
DEBUG - 2013-11-13 23:31:36 --> Security Class Initialized
DEBUG - 2013-11-13 23:31:36 --> Input Class Initialized
DEBUG - 2013-11-13 23:31:36 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:31:36 --> Language Class Initialized
DEBUG - 2013-11-13 23:31:36 --> Loader Class Initialized
DEBUG - 2013-11-13 23:31:36 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:31:36 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:31:36 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:31:36 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:31:36 --> Session Class Initialized
DEBUG - 2013-11-13 23:31:36 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:31:36 --> Session routines successfully run
DEBUG - 2013-11-13 23:31:36 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:31:36 --> Controller Class Initialized
DEBUG - 2013-11-13 23:31:36 --> Model Class Initialized
DEBUG - 2013-11-13 23:31:36 --> Model Class Initialized
DEBUG - 2013-11-13 23:31:36 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:31:36 --> after session initialization................
INFO  - 2013-11-13 23:31:36 --> inside retrieving pharmacy by location id 1
INFO  - 2013-11-13 23:31:36 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '1'
LIMIT 25
DEBUG - 2013-11-13 23:31:36 --> Final output sent to browser
DEBUG - 2013-11-13 23:31:36 --> Total execution time: 0.0740
DEBUG - 2013-11-13 23:31:47 --> Config Class Initialized
DEBUG - 2013-11-13 23:31:47 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:31:47 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:31:47 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:31:47 --> URI Class Initialized
DEBUG - 2013-11-13 23:31:47 --> Router Class Initialized
DEBUG - 2013-11-13 23:31:47 --> Output Class Initialized
DEBUG - 2013-11-13 23:31:47 --> Security Class Initialized
DEBUG - 2013-11-13 23:31:47 --> Input Class Initialized
DEBUG - 2013-11-13 23:31:47 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:31:47 --> Language Class Initialized
DEBUG - 2013-11-13 23:31:47 --> Loader Class Initialized
DEBUG - 2013-11-13 23:31:47 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:31:47 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:31:47 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:31:47 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:31:47 --> Session Class Initialized
DEBUG - 2013-11-13 23:31:47 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:31:47 --> Session routines successfully run
DEBUG - 2013-11-13 23:31:47 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:31:47 --> Controller Class Initialized
DEBUG - 2013-11-13 23:31:47 --> Model Class Initialized
DEBUG - 2013-11-13 23:31:47 --> Model Class Initialized
DEBUG - 2013-11-13 23:31:47 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:31:47 --> after session initialization................
INFO  - 2013-11-13 23:31:47 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 23:31:47 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 23:31:47 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 23:31:47 --> inside retrieving locations 
INFO  - 2013-11-13 23:31:47 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 23:31:47 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 23:31:47 --> Final output sent to browser
DEBUG - 2013-11-13 23:31:47 --> Total execution time: 0.0860
DEBUG - 2013-11-13 23:31:50 --> Config Class Initialized
DEBUG - 2013-11-13 23:31:50 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:31:50 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:31:50 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:31:50 --> URI Class Initialized
DEBUG - 2013-11-13 23:31:50 --> Router Class Initialized
DEBUG - 2013-11-13 23:31:50 --> Output Class Initialized
DEBUG - 2013-11-13 23:31:50 --> Security Class Initialized
DEBUG - 2013-11-13 23:31:50 --> Input Class Initialized
DEBUG - 2013-11-13 23:31:50 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:31:50 --> Language Class Initialized
DEBUG - 2013-11-13 23:31:50 --> Loader Class Initialized
DEBUG - 2013-11-13 23:31:50 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:31:50 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:31:50 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:31:50 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:31:50 --> Session Class Initialized
DEBUG - 2013-11-13 23:31:50 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:31:50 --> Session routines successfully run
DEBUG - 2013-11-13 23:31:50 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:31:50 --> Controller Class Initialized
DEBUG - 2013-11-13 23:31:50 --> Model Class Initialized
DEBUG - 2013-11-13 23:31:50 --> Model Class Initialized
DEBUG - 2013-11-13 23:31:50 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:31:50 --> after session initialization................
INFO  - 2013-11-13 23:31:50 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 23:31:50 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 23:31:50 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 23:31:50 --> inside retrieving locations 
INFO  - 2013-11-13 23:31:50 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 23:31:50 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 23:31:50 --> Final output sent to browser
DEBUG - 2013-11-13 23:31:50 --> Total execution time: 0.0990
DEBUG - 2013-11-13 23:31:51 --> Config Class Initialized
DEBUG - 2013-11-13 23:31:51 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:31:51 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:31:51 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:31:51 --> URI Class Initialized
DEBUG - 2013-11-13 23:31:51 --> Router Class Initialized
DEBUG - 2013-11-13 23:31:51 --> Output Class Initialized
DEBUG - 2013-11-13 23:31:51 --> Security Class Initialized
DEBUG - 2013-11-13 23:31:51 --> Input Class Initialized
DEBUG - 2013-11-13 23:31:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:31:51 --> Language Class Initialized
DEBUG - 2013-11-13 23:31:51 --> Loader Class Initialized
DEBUG - 2013-11-13 23:31:51 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:31:51 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:31:51 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:31:51 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:31:51 --> Session Class Initialized
DEBUG - 2013-11-13 23:31:51 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:31:51 --> Session routines successfully run
DEBUG - 2013-11-13 23:31:51 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:31:51 --> Controller Class Initialized
DEBUG - 2013-11-13 23:31:51 --> Model Class Initialized
DEBUG - 2013-11-13 23:31:51 --> Model Class Initialized
DEBUG - 2013-11-13 23:31:51 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:31:51 --> after session initialization................
INFO  - 2013-11-13 23:31:51 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 23:31:51 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 23:31:51 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 23:31:51 --> inside retrieving locations 
INFO  - 2013-11-13 23:31:51 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 23:31:51 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 23:31:51 --> Final output sent to browser
DEBUG - 2013-11-13 23:31:51 --> Total execution time: 0.0570
DEBUG - 2013-11-13 23:31:51 --> Config Class Initialized
DEBUG - 2013-11-13 23:31:51 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:31:51 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:31:51 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:31:51 --> URI Class Initialized
DEBUG - 2013-11-13 23:31:51 --> Router Class Initialized
DEBUG - 2013-11-13 23:31:51 --> Output Class Initialized
DEBUG - 2013-11-13 23:31:51 --> Security Class Initialized
DEBUG - 2013-11-13 23:31:51 --> Input Class Initialized
DEBUG - 2013-11-13 23:31:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:31:51 --> Language Class Initialized
DEBUG - 2013-11-13 23:31:51 --> Loader Class Initialized
DEBUG - 2013-11-13 23:31:51 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:31:51 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:31:51 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:31:51 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:31:51 --> Session Class Initialized
DEBUG - 2013-11-13 23:31:51 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:31:51 --> Session routines successfully run
DEBUG - 2013-11-13 23:31:51 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:31:51 --> Controller Class Initialized
DEBUG - 2013-11-13 23:31:51 --> Model Class Initialized
DEBUG - 2013-11-13 23:31:51 --> Model Class Initialized
DEBUG - 2013-11-13 23:31:51 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:31:51 --> after session initialization................
INFO  - 2013-11-13 23:31:51 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 23:31:51 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 23:31:51 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 23:31:51 --> inside retrieving locations 
INFO  - 2013-11-13 23:31:51 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 23:31:51 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 23:31:51 --> Final output sent to browser
DEBUG - 2013-11-13 23:31:51 --> Total execution time: 0.0530
DEBUG - 2013-11-13 23:31:54 --> Config Class Initialized
DEBUG - 2013-11-13 23:31:54 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:31:54 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:31:54 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:31:54 --> URI Class Initialized
DEBUG - 2013-11-13 23:31:54 --> Router Class Initialized
DEBUG - 2013-11-13 23:31:54 --> Output Class Initialized
DEBUG - 2013-11-13 23:31:54 --> Security Class Initialized
DEBUG - 2013-11-13 23:31:54 --> Input Class Initialized
DEBUG - 2013-11-13 23:31:54 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:31:54 --> Language Class Initialized
DEBUG - 2013-11-13 23:31:54 --> Loader Class Initialized
DEBUG - 2013-11-13 23:31:54 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:31:54 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:31:54 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:31:54 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:31:54 --> Session Class Initialized
DEBUG - 2013-11-13 23:31:54 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:31:54 --> Session routines successfully run
DEBUG - 2013-11-13 23:31:54 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:31:54 --> Controller Class Initialized
DEBUG - 2013-11-13 23:31:54 --> Model Class Initialized
DEBUG - 2013-11-13 23:31:54 --> Model Class Initialized
DEBUG - 2013-11-13 23:31:54 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:31:54 --> after session initialization................
INFO  - 2013-11-13 23:31:54 --> inside retrieving pharmacy by location id 2
INFO  - 2013-11-13 23:31:54 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '2'
LIMIT 25
DEBUG - 2013-11-13 23:31:54 --> Final output sent to browser
DEBUG - 2013-11-13 23:31:54 --> Total execution time: 0.0490
DEBUG - 2013-11-13 23:34:25 --> Config Class Initialized
DEBUG - 2013-11-13 23:34:25 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:34:25 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:34:25 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:34:25 --> URI Class Initialized
DEBUG - 2013-11-13 23:34:25 --> Router Class Initialized
DEBUG - 2013-11-13 23:34:25 --> Output Class Initialized
DEBUG - 2013-11-13 23:34:25 --> Security Class Initialized
DEBUG - 2013-11-13 23:34:25 --> Input Class Initialized
DEBUG - 2013-11-13 23:34:25 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:34:25 --> Language Class Initialized
DEBUG - 2013-11-13 23:34:25 --> Loader Class Initialized
DEBUG - 2013-11-13 23:34:25 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:34:25 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:34:25 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:34:25 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:34:25 --> Session Class Initialized
DEBUG - 2013-11-13 23:34:25 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:34:25 --> Session routines successfully run
DEBUG - 2013-11-13 23:34:25 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:34:25 --> Controller Class Initialized
DEBUG - 2013-11-13 23:34:25 --> Model Class Initialized
DEBUG - 2013-11-13 23:34:25 --> Model Class Initialized
DEBUG - 2013-11-13 23:34:25 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:34:25 --> after session initialization................
INFO  - 2013-11-13 23:34:25 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 23:34:25 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 23:34:25 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 23:34:25 --> inside retrieving locations 
INFO  - 2013-11-13 23:34:25 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 23:34:25 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 23:34:25 --> Final output sent to browser
DEBUG - 2013-11-13 23:34:25 --> Total execution time: 0.0660
DEBUG - 2013-11-13 23:34:26 --> Config Class Initialized
DEBUG - 2013-11-13 23:34:26 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:34:26 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:34:26 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:34:26 --> URI Class Initialized
DEBUG - 2013-11-13 23:34:26 --> Router Class Initialized
DEBUG - 2013-11-13 23:34:26 --> Output Class Initialized
DEBUG - 2013-11-13 23:34:26 --> Security Class Initialized
DEBUG - 2013-11-13 23:34:26 --> Input Class Initialized
DEBUG - 2013-11-13 23:34:26 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:34:26 --> Language Class Initialized
DEBUG - 2013-11-13 23:34:26 --> Loader Class Initialized
DEBUG - 2013-11-13 23:34:26 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:34:26 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:34:26 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:34:26 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:34:26 --> Session Class Initialized
DEBUG - 2013-11-13 23:34:26 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:34:26 --> Session routines successfully run
DEBUG - 2013-11-13 23:34:26 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:34:26 --> Controller Class Initialized
DEBUG - 2013-11-13 23:34:26 --> Model Class Initialized
DEBUG - 2013-11-13 23:34:26 --> Model Class Initialized
DEBUG - 2013-11-13 23:34:26 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:34:26 --> after session initialization................
INFO  - 2013-11-13 23:34:26 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 23:34:26 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 23:34:26 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 23:34:26 --> inside retrieving locations 
INFO  - 2013-11-13 23:34:26 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 23:34:26 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 23:34:26 --> Final output sent to browser
DEBUG - 2013-11-13 23:34:26 --> Total execution time: 0.0500
DEBUG - 2013-11-13 23:34:28 --> Config Class Initialized
DEBUG - 2013-11-13 23:34:28 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:34:28 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:34:28 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:34:28 --> URI Class Initialized
DEBUG - 2013-11-13 23:34:28 --> Router Class Initialized
DEBUG - 2013-11-13 23:34:28 --> Output Class Initialized
DEBUG - 2013-11-13 23:34:28 --> Security Class Initialized
DEBUG - 2013-11-13 23:34:28 --> Input Class Initialized
DEBUG - 2013-11-13 23:34:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:34:28 --> Language Class Initialized
DEBUG - 2013-11-13 23:34:28 --> Loader Class Initialized
DEBUG - 2013-11-13 23:34:28 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:34:28 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:34:28 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:34:28 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:34:28 --> Session Class Initialized
DEBUG - 2013-11-13 23:34:28 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:34:28 --> Session routines successfully run
DEBUG - 2013-11-13 23:34:28 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:34:28 --> Controller Class Initialized
DEBUG - 2013-11-13 23:34:28 --> Model Class Initialized
DEBUG - 2013-11-13 23:34:28 --> Model Class Initialized
DEBUG - 2013-11-13 23:34:28 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:34:28 --> after session initialization................
INFO  - 2013-11-13 23:34:28 --> inside retrieving pharmacy by location id 1
INFO  - 2013-11-13 23:34:28 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '1'
LIMIT 25
DEBUG - 2013-11-13 23:34:28 --> Final output sent to browser
DEBUG - 2013-11-13 23:34:28 --> Total execution time: 0.0450
DEBUG - 2013-11-13 23:34:34 --> Config Class Initialized
DEBUG - 2013-11-13 23:34:34 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:34:34 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:34:34 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:34:34 --> URI Class Initialized
DEBUG - 2013-11-13 23:34:34 --> Router Class Initialized
DEBUG - 2013-11-13 23:34:34 --> Output Class Initialized
DEBUG - 2013-11-13 23:34:34 --> Security Class Initialized
DEBUG - 2013-11-13 23:34:34 --> Input Class Initialized
DEBUG - 2013-11-13 23:34:34 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:34:34 --> Language Class Initialized
DEBUG - 2013-11-13 23:34:34 --> Loader Class Initialized
DEBUG - 2013-11-13 23:34:34 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:34:34 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:34:34 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:34:34 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:34:34 --> Session Class Initialized
DEBUG - 2013-11-13 23:34:34 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:34:34 --> Session routines successfully run
DEBUG - 2013-11-13 23:34:34 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:34:34 --> Controller Class Initialized
DEBUG - 2013-11-13 23:34:34 --> Model Class Initialized
DEBUG - 2013-11-13 23:34:34 --> Model Class Initialized
DEBUG - 2013-11-13 23:34:34 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:34:34 --> after session initialization................
INFO  - 2013-11-13 23:34:34 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 23:34:34 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 23:34:34 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 23:34:34 --> inside retrieving locations 
INFO  - 2013-11-13 23:34:34 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 23:34:34 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 23:34:34 --> Final output sent to browser
DEBUG - 2013-11-13 23:34:34 --> Total execution time: 0.0680
DEBUG - 2013-11-13 23:34:36 --> Config Class Initialized
DEBUG - 2013-11-13 23:34:36 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:34:36 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:34:36 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:34:36 --> URI Class Initialized
DEBUG - 2013-11-13 23:34:36 --> Router Class Initialized
DEBUG - 2013-11-13 23:34:36 --> Output Class Initialized
DEBUG - 2013-11-13 23:34:36 --> Security Class Initialized
DEBUG - 2013-11-13 23:34:36 --> Input Class Initialized
DEBUG - 2013-11-13 23:34:36 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:34:36 --> Language Class Initialized
DEBUG - 2013-11-13 23:34:36 --> Loader Class Initialized
DEBUG - 2013-11-13 23:34:36 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:34:36 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:34:36 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:34:36 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:34:36 --> Session Class Initialized
DEBUG - 2013-11-13 23:34:36 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:34:36 --> Session routines successfully run
DEBUG - 2013-11-13 23:34:36 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:34:36 --> Controller Class Initialized
DEBUG - 2013-11-13 23:34:36 --> Model Class Initialized
DEBUG - 2013-11-13 23:34:36 --> Model Class Initialized
DEBUG - 2013-11-13 23:34:36 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:34:36 --> after session initialization................
INFO  - 2013-11-13 23:34:36 --> inside retrieving pharmacy by location id 2
INFO  - 2013-11-13 23:34:36 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '2'
LIMIT 25
DEBUG - 2013-11-13 23:34:36 --> Final output sent to browser
DEBUG - 2013-11-13 23:34:36 --> Total execution time: 0.0430
DEBUG - 2013-11-13 23:35:01 --> Config Class Initialized
DEBUG - 2013-11-13 23:35:01 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:35:01 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:35:01 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:35:01 --> URI Class Initialized
DEBUG - 2013-11-13 23:35:01 --> Router Class Initialized
DEBUG - 2013-11-13 23:35:01 --> Output Class Initialized
DEBUG - 2013-11-13 23:35:01 --> Security Class Initialized
DEBUG - 2013-11-13 23:35:01 --> Input Class Initialized
DEBUG - 2013-11-13 23:35:01 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:35:01 --> Language Class Initialized
DEBUG - 2013-11-13 23:35:01 --> Loader Class Initialized
DEBUG - 2013-11-13 23:35:01 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:35:01 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:35:01 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:35:01 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:35:01 --> Session Class Initialized
DEBUG - 2013-11-13 23:35:01 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:35:01 --> Session routines successfully run
DEBUG - 2013-11-13 23:35:01 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:35:01 --> Controller Class Initialized
DEBUG - 2013-11-13 23:35:01 --> Model Class Initialized
DEBUG - 2013-11-13 23:35:01 --> Model Class Initialized
DEBUG - 2013-11-13 23:35:01 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:35:01 --> after session initialization................
INFO  - 2013-11-13 23:35:01 --> inside retrieving pharmacy by location id 1
INFO  - 2013-11-13 23:35:01 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '1'
LIMIT 25
DEBUG - 2013-11-13 23:35:01 --> Final output sent to browser
DEBUG - 2013-11-13 23:35:01 --> Total execution time: 0.0470
DEBUG - 2013-11-13 23:36:50 --> Config Class Initialized
DEBUG - 2013-11-13 23:36:50 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:36:50 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:36:50 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:36:50 --> URI Class Initialized
DEBUG - 2013-11-13 23:36:50 --> Router Class Initialized
DEBUG - 2013-11-13 23:36:50 --> Output Class Initialized
DEBUG - 2013-11-13 23:36:50 --> Security Class Initialized
DEBUG - 2013-11-13 23:36:50 --> Input Class Initialized
DEBUG - 2013-11-13 23:36:50 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:36:50 --> Language Class Initialized
DEBUG - 2013-11-13 23:36:50 --> Loader Class Initialized
DEBUG - 2013-11-13 23:36:50 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:36:50 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:36:50 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:36:50 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:36:50 --> Session Class Initialized
DEBUG - 2013-11-13 23:36:50 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:36:50 --> Session routines successfully run
DEBUG - 2013-11-13 23:36:50 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:36:50 --> Controller Class Initialized
DEBUG - 2013-11-13 23:36:50 --> Model Class Initialized
DEBUG - 2013-11-13 23:36:50 --> Model Class Initialized
DEBUG - 2013-11-13 23:36:50 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:36:50 --> after session initialization................
INFO  - 2013-11-13 23:36:50 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 23:36:50 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 23:36:50 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 23:36:50 --> inside retrieving locations 
INFO  - 2013-11-13 23:36:50 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 23:36:50 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 23:36:50 --> Final output sent to browser
DEBUG - 2013-11-13 23:36:50 --> Total execution time: 0.0570
DEBUG - 2013-11-13 23:36:52 --> Config Class Initialized
DEBUG - 2013-11-13 23:36:52 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:36:52 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:36:52 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:36:52 --> URI Class Initialized
DEBUG - 2013-11-13 23:36:52 --> Router Class Initialized
DEBUG - 2013-11-13 23:36:52 --> Output Class Initialized
DEBUG - 2013-11-13 23:36:52 --> Security Class Initialized
DEBUG - 2013-11-13 23:36:52 --> Input Class Initialized
DEBUG - 2013-11-13 23:36:52 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:36:52 --> Language Class Initialized
DEBUG - 2013-11-13 23:36:52 --> Loader Class Initialized
DEBUG - 2013-11-13 23:36:52 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:36:52 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:36:52 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:36:52 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:36:52 --> Session Class Initialized
DEBUG - 2013-11-13 23:36:52 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:36:52 --> Session routines successfully run
DEBUG - 2013-11-13 23:36:52 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:36:52 --> Controller Class Initialized
DEBUG - 2013-11-13 23:36:52 --> Model Class Initialized
DEBUG - 2013-11-13 23:36:52 --> Model Class Initialized
DEBUG - 2013-11-13 23:36:52 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:36:52 --> after session initialization................
INFO  - 2013-11-13 23:36:52 --> inside retrieving pharmacy by location id 2
INFO  - 2013-11-13 23:36:52 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '2'
LIMIT 25
DEBUG - 2013-11-13 23:36:52 --> Final output sent to browser
DEBUG - 2013-11-13 23:36:52 --> Total execution time: 0.0470
DEBUG - 2013-11-13 23:37:34 --> Config Class Initialized
DEBUG - 2013-11-13 23:37:34 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:37:34 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:37:34 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:37:34 --> URI Class Initialized
DEBUG - 2013-11-13 23:37:34 --> Router Class Initialized
DEBUG - 2013-11-13 23:37:34 --> Output Class Initialized
DEBUG - 2013-11-13 23:37:34 --> Security Class Initialized
DEBUG - 2013-11-13 23:37:34 --> Input Class Initialized
DEBUG - 2013-11-13 23:37:34 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:37:34 --> Language Class Initialized
DEBUG - 2013-11-13 23:37:34 --> Loader Class Initialized
DEBUG - 2013-11-13 23:37:34 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:37:34 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:37:34 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:37:34 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:37:34 --> Session Class Initialized
DEBUG - 2013-11-13 23:37:34 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:37:34 --> Session routines successfully run
DEBUG - 2013-11-13 23:37:34 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:37:34 --> Controller Class Initialized
DEBUG - 2013-11-13 23:37:34 --> Model Class Initialized
DEBUG - 2013-11-13 23:37:34 --> Model Class Initialized
DEBUG - 2013-11-13 23:37:34 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:37:34 --> after session initialization................
INFO  - 2013-11-13 23:37:34 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 23:37:34 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 23:37:34 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 23:37:34 --> inside retrieving locations 
INFO  - 2013-11-13 23:37:34 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 23:37:34 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 23:37:34 --> Final output sent to browser
DEBUG - 2013-11-13 23:37:34 --> Total execution time: 0.0540
DEBUG - 2013-11-13 23:37:36 --> Config Class Initialized
DEBUG - 2013-11-13 23:37:36 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:37:36 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:37:36 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:37:36 --> URI Class Initialized
DEBUG - 2013-11-13 23:37:36 --> Router Class Initialized
DEBUG - 2013-11-13 23:37:36 --> Output Class Initialized
DEBUG - 2013-11-13 23:37:36 --> Security Class Initialized
DEBUG - 2013-11-13 23:37:36 --> Input Class Initialized
DEBUG - 2013-11-13 23:37:36 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:37:36 --> Language Class Initialized
DEBUG - 2013-11-13 23:37:36 --> Loader Class Initialized
DEBUG - 2013-11-13 23:37:36 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:37:36 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:37:36 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:37:36 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:37:36 --> Session Class Initialized
DEBUG - 2013-11-13 23:37:36 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:37:36 --> Session routines successfully run
DEBUG - 2013-11-13 23:37:36 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:37:36 --> Controller Class Initialized
DEBUG - 2013-11-13 23:37:36 --> Model Class Initialized
DEBUG - 2013-11-13 23:37:36 --> Model Class Initialized
DEBUG - 2013-11-13 23:37:36 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:37:36 --> after session initialization................
INFO  - 2013-11-13 23:37:36 --> inside retrieving pharmacy by location id 1
INFO  - 2013-11-13 23:37:36 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '1'
LIMIT 25
DEBUG - 2013-11-13 23:37:36 --> Final output sent to browser
DEBUG - 2013-11-13 23:37:36 --> Total execution time: 0.0450
DEBUG - 2013-11-13 23:38:25 --> Config Class Initialized
DEBUG - 2013-11-13 23:38:25 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:38:25 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:38:25 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:38:25 --> URI Class Initialized
DEBUG - 2013-11-13 23:38:25 --> Router Class Initialized
DEBUG - 2013-11-13 23:38:25 --> Output Class Initialized
DEBUG - 2013-11-13 23:38:25 --> Security Class Initialized
DEBUG - 2013-11-13 23:38:25 --> Input Class Initialized
DEBUG - 2013-11-13 23:38:25 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:38:25 --> Language Class Initialized
DEBUG - 2013-11-13 23:38:25 --> Loader Class Initialized
DEBUG - 2013-11-13 23:38:25 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:38:25 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:38:25 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:38:25 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:38:25 --> Session Class Initialized
DEBUG - 2013-11-13 23:38:25 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:38:25 --> Session routines successfully run
DEBUG - 2013-11-13 23:38:25 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:38:25 --> Controller Class Initialized
DEBUG - 2013-11-13 23:38:25 --> Model Class Initialized
DEBUG - 2013-11-13 23:38:25 --> Model Class Initialized
DEBUG - 2013-11-13 23:38:25 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:38:25 --> after session initialization................
INFO  - 2013-11-13 23:38:25 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 23:38:25 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 23:38:25 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 23:38:25 --> inside retrieving locations 
INFO  - 2013-11-13 23:38:25 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 23:38:25 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 23:38:25 --> Final output sent to browser
DEBUG - 2013-11-13 23:38:25 --> Total execution time: 0.0590
DEBUG - 2013-11-13 23:38:30 --> Config Class Initialized
DEBUG - 2013-11-13 23:38:30 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:38:30 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:38:30 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:38:30 --> URI Class Initialized
DEBUG - 2013-11-13 23:38:30 --> Router Class Initialized
DEBUG - 2013-11-13 23:38:30 --> Output Class Initialized
DEBUG - 2013-11-13 23:38:30 --> Security Class Initialized
DEBUG - 2013-11-13 23:38:30 --> Input Class Initialized
DEBUG - 2013-11-13 23:38:30 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:38:30 --> Language Class Initialized
DEBUG - 2013-11-13 23:38:30 --> Loader Class Initialized
DEBUG - 2013-11-13 23:38:30 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:38:30 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:38:30 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:38:30 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:38:30 --> Session Class Initialized
DEBUG - 2013-11-13 23:38:30 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:38:30 --> Session routines successfully run
DEBUG - 2013-11-13 23:38:30 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:38:30 --> Controller Class Initialized
DEBUG - 2013-11-13 23:38:30 --> Model Class Initialized
DEBUG - 2013-11-13 23:38:30 --> Model Class Initialized
DEBUG - 2013-11-13 23:38:30 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:38:30 --> after session initialization................
INFO  - 2013-11-13 23:38:30 --> inside retrieving pharmacy by location id 2
INFO  - 2013-11-13 23:38:30 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '2'
LIMIT 25
DEBUG - 2013-11-13 23:38:30 --> Final output sent to browser
DEBUG - 2013-11-13 23:38:30 --> Total execution time: 0.0470
DEBUG - 2013-11-13 23:38:47 --> Config Class Initialized
DEBUG - 2013-11-13 23:38:47 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:38:47 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:38:47 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:38:47 --> URI Class Initialized
DEBUG - 2013-11-13 23:38:47 --> Router Class Initialized
DEBUG - 2013-11-13 23:38:47 --> Output Class Initialized
DEBUG - 2013-11-13 23:38:47 --> Security Class Initialized
DEBUG - 2013-11-13 23:38:47 --> Input Class Initialized
DEBUG - 2013-11-13 23:38:47 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:38:47 --> Language Class Initialized
DEBUG - 2013-11-13 23:38:47 --> Loader Class Initialized
DEBUG - 2013-11-13 23:38:47 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:38:47 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:38:47 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:38:47 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:38:47 --> Session Class Initialized
DEBUG - 2013-11-13 23:38:47 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:38:47 --> Session routines successfully run
DEBUG - 2013-11-13 23:38:47 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:38:47 --> Controller Class Initialized
DEBUG - 2013-11-13 23:38:47 --> Model Class Initialized
DEBUG - 2013-11-13 23:38:47 --> Model Class Initialized
DEBUG - 2013-11-13 23:38:47 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:38:47 --> after session initialization................
INFO  - 2013-11-13 23:38:47 --> inside retrieving pharmacy by location id 1
INFO  - 2013-11-13 23:38:47 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '1'
LIMIT 25
DEBUG - 2013-11-13 23:38:47 --> Final output sent to browser
DEBUG - 2013-11-13 23:38:47 --> Total execution time: 0.0470
DEBUG - 2013-11-13 23:44:30 --> Config Class Initialized
DEBUG - 2013-11-13 23:44:30 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:44:30 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:44:30 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:44:30 --> URI Class Initialized
DEBUG - 2013-11-13 23:44:30 --> Router Class Initialized
DEBUG - 2013-11-13 23:44:30 --> Output Class Initialized
DEBUG - 2013-11-13 23:44:30 --> Security Class Initialized
DEBUG - 2013-11-13 23:44:30 --> Input Class Initialized
DEBUG - 2013-11-13 23:44:30 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:44:30 --> Language Class Initialized
DEBUG - 2013-11-13 23:44:30 --> Loader Class Initialized
DEBUG - 2013-11-13 23:44:30 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:44:30 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:44:30 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:44:30 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:44:30 --> Session Class Initialized
DEBUG - 2013-11-13 23:44:30 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:44:30 --> Session routines successfully run
DEBUG - 2013-11-13 23:44:30 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:44:30 --> Controller Class Initialized
DEBUG - 2013-11-13 23:44:30 --> Model Class Initialized
DEBUG - 2013-11-13 23:44:30 --> Model Class Initialized
DEBUG - 2013-11-13 23:44:30 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:44:30 --> after session initialization................
INFO  - 2013-11-13 23:44:30 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 23:44:30 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 23:44:30 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 23:44:30 --> inside retrieving locations 
INFO  - 2013-11-13 23:44:30 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 23:44:30 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 23:44:30 --> Final output sent to browser
DEBUG - 2013-11-13 23:44:30 --> Total execution time: 0.0760
DEBUG - 2013-11-13 23:44:33 --> Config Class Initialized
DEBUG - 2013-11-13 23:44:33 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:44:33 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:44:33 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:44:33 --> URI Class Initialized
DEBUG - 2013-11-13 23:44:33 --> Router Class Initialized
DEBUG - 2013-11-13 23:44:33 --> Output Class Initialized
DEBUG - 2013-11-13 23:44:33 --> Security Class Initialized
DEBUG - 2013-11-13 23:44:33 --> Input Class Initialized
DEBUG - 2013-11-13 23:44:33 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:44:33 --> Language Class Initialized
DEBUG - 2013-11-13 23:44:33 --> Loader Class Initialized
DEBUG - 2013-11-13 23:44:33 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:44:33 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:44:33 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:44:33 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:44:33 --> Session Class Initialized
DEBUG - 2013-11-13 23:44:33 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:44:33 --> Session routines successfully run
DEBUG - 2013-11-13 23:44:33 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:44:33 --> Controller Class Initialized
DEBUG - 2013-11-13 23:44:33 --> Model Class Initialized
DEBUG - 2013-11-13 23:44:33 --> Model Class Initialized
DEBUG - 2013-11-13 23:44:33 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:44:33 --> after session initialization................
INFO  - 2013-11-13 23:44:33 --> inside retrieving pharmacy by location id 2
INFO  - 2013-11-13 23:44:33 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '2'
LIMIT 25
DEBUG - 2013-11-13 23:44:33 --> Final output sent to browser
DEBUG - 2013-11-13 23:44:33 --> Total execution time: 0.0470
DEBUG - 2013-11-13 23:45:52 --> Config Class Initialized
DEBUG - 2013-11-13 23:45:52 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:45:52 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:45:52 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:45:52 --> URI Class Initialized
DEBUG - 2013-11-13 23:45:52 --> Router Class Initialized
DEBUG - 2013-11-13 23:45:52 --> Output Class Initialized
DEBUG - 2013-11-13 23:45:52 --> Security Class Initialized
DEBUG - 2013-11-13 23:45:52 --> Input Class Initialized
DEBUG - 2013-11-13 23:45:52 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:45:52 --> Language Class Initialized
DEBUG - 2013-11-13 23:45:52 --> Loader Class Initialized
DEBUG - 2013-11-13 23:45:52 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:45:52 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:45:52 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:45:52 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:45:52 --> Session Class Initialized
DEBUG - 2013-11-13 23:45:52 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:45:52 --> Session routines successfully run
DEBUG - 2013-11-13 23:45:52 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:45:52 --> Controller Class Initialized
DEBUG - 2013-11-13 23:45:52 --> Model Class Initialized
DEBUG - 2013-11-13 23:45:52 --> Model Class Initialized
DEBUG - 2013-11-13 23:45:52 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:45:52 --> after session initialization................
INFO  - 2013-11-13 23:45:52 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 23:45:52 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 23:45:52 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 23:45:52 --> inside retrieving locations 
INFO  - 2013-11-13 23:45:52 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 23:45:52 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 23:45:52 --> Final output sent to browser
DEBUG - 2013-11-13 23:45:52 --> Total execution time: 0.0530
DEBUG - 2013-11-13 23:45:54 --> Config Class Initialized
DEBUG - 2013-11-13 23:45:54 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:45:54 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:45:54 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:45:54 --> URI Class Initialized
DEBUG - 2013-11-13 23:45:54 --> Router Class Initialized
DEBUG - 2013-11-13 23:45:54 --> Output Class Initialized
DEBUG - 2013-11-13 23:45:54 --> Security Class Initialized
DEBUG - 2013-11-13 23:45:54 --> Input Class Initialized
DEBUG - 2013-11-13 23:45:54 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:45:54 --> Language Class Initialized
DEBUG - 2013-11-13 23:45:54 --> Loader Class Initialized
DEBUG - 2013-11-13 23:45:54 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:45:54 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:45:54 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:45:54 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:45:54 --> Session Class Initialized
DEBUG - 2013-11-13 23:45:54 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:45:54 --> Session routines successfully run
DEBUG - 2013-11-13 23:45:54 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:45:54 --> Controller Class Initialized
DEBUG - 2013-11-13 23:45:54 --> Model Class Initialized
DEBUG - 2013-11-13 23:45:54 --> Model Class Initialized
DEBUG - 2013-11-13 23:45:54 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:45:54 --> after session initialization................
INFO  - 2013-11-13 23:45:54 --> inside retrieving pharmacy by location id 1
INFO  - 2013-11-13 23:45:54 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '1'
LIMIT 25
DEBUG - 2013-11-13 23:45:54 --> Final output sent to browser
DEBUG - 2013-11-13 23:45:54 --> Total execution time: 0.0440
DEBUG - 2013-11-13 23:46:33 --> Config Class Initialized
DEBUG - 2013-11-13 23:46:33 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:46:33 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:46:33 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:46:33 --> URI Class Initialized
DEBUG - 2013-11-13 23:46:33 --> Router Class Initialized
DEBUG - 2013-11-13 23:46:33 --> Output Class Initialized
DEBUG - 2013-11-13 23:46:33 --> Security Class Initialized
DEBUG - 2013-11-13 23:46:33 --> Input Class Initialized
DEBUG - 2013-11-13 23:46:33 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:46:33 --> Language Class Initialized
DEBUG - 2013-11-13 23:46:33 --> Loader Class Initialized
DEBUG - 2013-11-13 23:46:33 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:46:33 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:46:33 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:46:33 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:46:33 --> Session Class Initialized
DEBUG - 2013-11-13 23:46:33 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:46:33 --> Session routines successfully run
DEBUG - 2013-11-13 23:46:33 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:46:33 --> Controller Class Initialized
DEBUG - 2013-11-13 23:46:33 --> Model Class Initialized
DEBUG - 2013-11-13 23:46:33 --> Model Class Initialized
DEBUG - 2013-11-13 23:46:33 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:46:33 --> after session initialization................
INFO  - 2013-11-13 23:46:33 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 23:46:33 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 23:46:33 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 23:46:33 --> inside retrieving locations 
INFO  - 2013-11-13 23:46:33 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 23:46:33 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 23:46:33 --> Final output sent to browser
DEBUG - 2013-11-13 23:46:33 --> Total execution time: 0.0590
DEBUG - 2013-11-13 23:46:36 --> Config Class Initialized
DEBUG - 2013-11-13 23:46:36 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:46:36 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:46:36 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:46:36 --> URI Class Initialized
DEBUG - 2013-11-13 23:46:36 --> Router Class Initialized
DEBUG - 2013-11-13 23:46:36 --> Output Class Initialized
DEBUG - 2013-11-13 23:46:36 --> Security Class Initialized
DEBUG - 2013-11-13 23:46:36 --> Input Class Initialized
DEBUG - 2013-11-13 23:46:36 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:46:36 --> Language Class Initialized
DEBUG - 2013-11-13 23:46:36 --> Loader Class Initialized
DEBUG - 2013-11-13 23:46:36 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:46:36 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:46:36 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:46:36 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:46:36 --> Session Class Initialized
DEBUG - 2013-11-13 23:46:36 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:46:36 --> Session routines successfully run
DEBUG - 2013-11-13 23:46:36 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:46:36 --> Controller Class Initialized
DEBUG - 2013-11-13 23:46:36 --> Model Class Initialized
DEBUG - 2013-11-13 23:46:36 --> Model Class Initialized
DEBUG - 2013-11-13 23:46:36 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:46:36 --> after session initialization................
INFO  - 2013-11-13 23:46:36 --> inside retrieving pharmacy by location id 2
INFO  - 2013-11-13 23:46:36 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '2'
LIMIT 25
DEBUG - 2013-11-13 23:46:36 --> Final output sent to browser
DEBUG - 2013-11-13 23:46:36 --> Total execution time: 0.0440
DEBUG - 2013-11-13 23:46:48 --> Config Class Initialized
DEBUG - 2013-11-13 23:46:48 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:46:48 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:46:48 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:46:48 --> URI Class Initialized
DEBUG - 2013-11-13 23:46:48 --> Router Class Initialized
DEBUG - 2013-11-13 23:46:48 --> Output Class Initialized
DEBUG - 2013-11-13 23:46:48 --> Security Class Initialized
DEBUG - 2013-11-13 23:46:48 --> Input Class Initialized
DEBUG - 2013-11-13 23:46:48 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:46:48 --> Language Class Initialized
DEBUG - 2013-11-13 23:46:48 --> Loader Class Initialized
DEBUG - 2013-11-13 23:46:48 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:46:48 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:46:48 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:46:48 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:46:48 --> Session Class Initialized
DEBUG - 2013-11-13 23:46:48 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:46:48 --> Session routines successfully run
DEBUG - 2013-11-13 23:46:48 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:46:48 --> Controller Class Initialized
DEBUG - 2013-11-13 23:46:48 --> Model Class Initialized
DEBUG - 2013-11-13 23:46:48 --> Model Class Initialized
DEBUG - 2013-11-13 23:46:48 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:46:48 --> after session initialization................
INFO  - 2013-11-13 23:46:48 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 23:46:48 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 23:46:48 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 23:46:48 --> inside retrieving locations 
INFO  - 2013-11-13 23:46:48 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 23:46:48 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 23:46:48 --> Final output sent to browser
DEBUG - 2013-11-13 23:46:48 --> Total execution time: 0.0630
DEBUG - 2013-11-13 23:47:05 --> Config Class Initialized
DEBUG - 2013-11-13 23:47:05 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:47:05 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:47:05 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:47:05 --> URI Class Initialized
DEBUG - 2013-11-13 23:47:05 --> Router Class Initialized
DEBUG - 2013-11-13 23:47:05 --> Output Class Initialized
DEBUG - 2013-11-13 23:47:05 --> Security Class Initialized
DEBUG - 2013-11-13 23:47:05 --> Input Class Initialized
DEBUG - 2013-11-13 23:47:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:47:05 --> Language Class Initialized
DEBUG - 2013-11-13 23:47:05 --> Loader Class Initialized
DEBUG - 2013-11-13 23:47:05 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:47:05 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:47:05 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:47:05 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:47:05 --> Session Class Initialized
DEBUG - 2013-11-13 23:47:05 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:47:05 --> Session routines successfully run
DEBUG - 2013-11-13 23:47:05 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:47:05 --> Controller Class Initialized
DEBUG - 2013-11-13 23:47:05 --> Model Class Initialized
DEBUG - 2013-11-13 23:47:05 --> Model Class Initialized
DEBUG - 2013-11-13 23:47:05 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:47:05 --> after session initialization................
INFO  - 2013-11-13 23:47:05 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 23:47:05 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 23:47:05 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 23:47:05 --> inside retrieving locations 
INFO  - 2013-11-13 23:47:05 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 23:47:05 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 23:47:05 --> Final output sent to browser
DEBUG - 2013-11-13 23:47:05 --> Total execution time: 0.0660
DEBUG - 2013-11-13 23:47:08 --> Config Class Initialized
DEBUG - 2013-11-13 23:47:08 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:47:08 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:47:08 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:47:08 --> URI Class Initialized
DEBUG - 2013-11-13 23:47:08 --> Router Class Initialized
DEBUG - 2013-11-13 23:47:08 --> Output Class Initialized
DEBUG - 2013-11-13 23:47:08 --> Security Class Initialized
DEBUG - 2013-11-13 23:47:08 --> Input Class Initialized
DEBUG - 2013-11-13 23:47:08 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:47:08 --> Language Class Initialized
DEBUG - 2013-11-13 23:47:08 --> Loader Class Initialized
DEBUG - 2013-11-13 23:47:08 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:47:08 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:47:08 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:47:08 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:47:08 --> Session Class Initialized
DEBUG - 2013-11-13 23:47:08 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:47:08 --> Session routines successfully run
DEBUG - 2013-11-13 23:47:08 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:47:08 --> Controller Class Initialized
DEBUG - 2013-11-13 23:47:08 --> Model Class Initialized
DEBUG - 2013-11-13 23:47:08 --> Model Class Initialized
DEBUG - 2013-11-13 23:47:08 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:47:08 --> after session initialization................
INFO  - 2013-11-13 23:47:08 --> inside retrieving pharmacy by location id 1
INFO  - 2013-11-13 23:47:08 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '1'
LIMIT 25
DEBUG - 2013-11-13 23:47:08 --> Final output sent to browser
DEBUG - 2013-11-13 23:47:08 --> Total execution time: 0.0430
DEBUG - 2013-11-13 23:49:44 --> Config Class Initialized
DEBUG - 2013-11-13 23:49:44 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:49:44 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:49:44 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:49:44 --> URI Class Initialized
DEBUG - 2013-11-13 23:49:44 --> Router Class Initialized
DEBUG - 2013-11-13 23:49:44 --> Output Class Initialized
DEBUG - 2013-11-13 23:49:44 --> Security Class Initialized
DEBUG - 2013-11-13 23:49:44 --> Input Class Initialized
DEBUG - 2013-11-13 23:49:44 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:49:44 --> Language Class Initialized
DEBUG - 2013-11-13 23:49:44 --> Loader Class Initialized
DEBUG - 2013-11-13 23:49:44 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:49:44 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:49:44 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:49:44 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:49:44 --> Session Class Initialized
DEBUG - 2013-11-13 23:49:44 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:49:44 --> Session routines successfully run
DEBUG - 2013-11-13 23:49:44 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:49:44 --> Controller Class Initialized
DEBUG - 2013-11-13 23:49:44 --> Model Class Initialized
DEBUG - 2013-11-13 23:49:44 --> Model Class Initialized
DEBUG - 2013-11-13 23:49:44 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:49:44 --> after session initialization................
INFO  - 2013-11-13 23:49:44 --> article id is 7
DEBUG - 2013-11-13 23:49:44 --> Final output sent to browser
DEBUG - 2013-11-13 23:49:44 --> Total execution time: 0.0540
DEBUG - 2013-11-13 23:50:29 --> Config Class Initialized
DEBUG - 2013-11-13 23:50:29 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:50:29 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:50:29 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:50:29 --> URI Class Initialized
DEBUG - 2013-11-13 23:50:29 --> Router Class Initialized
DEBUG - 2013-11-13 23:50:29 --> Output Class Initialized
DEBUG - 2013-11-13 23:50:29 --> Security Class Initialized
DEBUG - 2013-11-13 23:50:29 --> Input Class Initialized
DEBUG - 2013-11-13 23:50:29 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:50:29 --> Language Class Initialized
DEBUG - 2013-11-13 23:50:29 --> Loader Class Initialized
DEBUG - 2013-11-13 23:50:29 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:50:29 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:50:29 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:50:29 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:50:29 --> Session Class Initialized
DEBUG - 2013-11-13 23:50:29 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:50:29 --> Session routines successfully run
DEBUG - 2013-11-13 23:50:29 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:50:29 --> Controller Class Initialized
DEBUG - 2013-11-13 23:50:29 --> Model Class Initialized
DEBUG - 2013-11-13 23:50:29 --> Model Class Initialized
DEBUG - 2013-11-13 23:50:29 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:50:29 --> after session initialization................
DEBUG - 2013-11-13 23:50:29 --> Config Class Initialized
DEBUG - 2013-11-13 23:50:29 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:50:29 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:50:29 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:50:29 --> URI Class Initialized
DEBUG - 2013-11-13 23:50:29 --> Router Class Initialized
DEBUG - 2013-11-13 23:50:29 --> No URI present. Default controller set.
DEBUG - 2013-11-13 23:50:29 --> Output Class Initialized
DEBUG - 2013-11-13 23:50:29 --> Security Class Initialized
DEBUG - 2013-11-13 23:50:29 --> Input Class Initialized
DEBUG - 2013-11-13 23:50:29 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:50:29 --> Language Class Initialized
DEBUG - 2013-11-13 23:50:29 --> Loader Class Initialized
DEBUG - 2013-11-13 23:50:29 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:50:29 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:50:29 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:50:29 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:50:29 --> Session Class Initialized
DEBUG - 2013-11-13 23:50:29 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:50:29 --> A session cookie was not found.
DEBUG - 2013-11-13 23:50:29 --> Session routines successfully run
DEBUG - 2013-11-13 23:50:29 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:50:29 --> Controller Class Initialized
INFO  - 2013-11-13 23:50:29 --> the form message==>
INFO  - 2013-11-13 23:50:29 --> The session id is ========>a6e8ff68d5c9cb25d0a406fac3c37597 and the member id is =======>
INFO  - 2013-11-13 23:50:29 --> after the retrieving session list.................//////////
DEBUG - 2013-11-13 23:50:29 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-11-13 23:50:29 --> Final output sent to browser
DEBUG - 2013-11-13 23:50:29 --> Total execution time: 0.0950
DEBUG - 2013-11-13 23:50:31 --> Config Class Initialized
DEBUG - 2013-11-13 23:50:31 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:50:31 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:50:31 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:50:31 --> URI Class Initialized
DEBUG - 2013-11-13 23:50:31 --> Router Class Initialized
DEBUG - 2013-11-13 23:50:31 --> Output Class Initialized
DEBUG - 2013-11-13 23:50:31 --> Security Class Initialized
DEBUG - 2013-11-13 23:50:31 --> Input Class Initialized
DEBUG - 2013-11-13 23:50:31 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:50:31 --> Language Class Initialized
DEBUG - 2013-11-13 23:50:31 --> Loader Class Initialized
DEBUG - 2013-11-13 23:50:31 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:50:31 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:50:31 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:50:31 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:50:31 --> Session Class Initialized
DEBUG - 2013-11-13 23:50:31 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:50:31 --> Session routines successfully run
DEBUG - 2013-11-13 23:50:31 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:50:31 --> Controller Class Initialized
DEBUG - 2013-11-13 23:50:31 --> Model Class Initialized
DEBUG - 2013-11-13 23:50:31 --> Model Class Initialized
DEBUG - 2013-11-13 23:50:31 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:50:31 --> after session initialization................
INFO  - 2013-11-13 23:50:31 --> after rays has been clicked.................
INFO  - 2013-11-13 23:50:31 --> last article id is 0
INFO  - 2013-11-13 23:50:31 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:50:31 --> 1 the guest only data>>>>>
INFO  - 2013-11-13 23:50:31 --> 1 the guest only data>> AFTER >>>
INFO  - 2013-11-13 23:50:31 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:50:31 --> 0 the guest only data>>>>>
INFO  - 2013-11-13 23:50:31 --> 0 the guest only data>> AFTER >>>#111
INFO  - 2013-11-13 23:50:31 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:50:31 --> 0 the guest only data>>>>>#111
INFO  - 2013-11-13 23:50:31 --> 0 the guest only data>> AFTER >>>#110
INFO  - 2013-11-13 23:50:31 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:50:31 --> 0 the guest only data>>>>>#110
INFO  - 2013-11-13 23:50:31 --> 0 the guest only data>> AFTER >>>#109
INFO  - 2013-11-13 23:50:31 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:50:31 --> 0 the guest only data>>>>>#109
INFO  - 2013-11-13 23:50:31 --> 0 the guest only data>> AFTER >>>#108
INFO  - 2013-11-13 23:50:31 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:50:31 --> 0 the guest only data>>>>>#108
INFO  - 2013-11-13 23:50:31 --> 0 the guest only data>> AFTER >>>#107
INFO  - 2013-11-13 23:50:31 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:50:31 --> 1 the guest only data>>>>>#107
INFO  - 2013-11-13 23:50:31 --> 1 the guest only data>> AFTER >>>#107
INFO  - 2013-11-13 23:50:31 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:50:31 --> 0 the guest only data>>>>>#107
INFO  - 2013-11-13 23:50:31 --> 0 the guest only data>> AFTER >>>#105
INFO  - 2013-11-13 23:50:31 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:50:31 --> 0 the guest only data>>>>>#105
INFO  - 2013-11-13 23:50:31 --> 0 the guest only data>> AFTER >>>#104
INFO  - 2013-11-13 23:50:31 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:50:31 --> 0 the guest only data>>>>>#104
INFO  - 2013-11-13 23:50:31 --> 0 the guest only data>> AFTER >>>#103
INFO  - 2013-11-13 23:50:31 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:50:31 --> 0 the guest only data>>>>>#103
INFO  - 2013-11-13 23:50:31 --> 0 the guest only data>> AFTER >>>#102
INFO  - 2013-11-13 23:50:31 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:50:31 --> 0 the guest only data>>>>>#102
INFO  - 2013-11-13 23:50:31 --> 0 the guest only data>> AFTER >>>#101
INFO  - 2013-11-13 23:50:31 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:50:31 --> 0 the guest only data>>>>>#101
INFO  - 2013-11-13 23:50:31 --> 0 the guest only data>> AFTER >>>#100
INFO  - 2013-11-13 23:50:31 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:50:31 --> 0 the guest only data>>>>>#100
INFO  - 2013-11-13 23:50:31 --> 0 the guest only data>> AFTER >>>#99
INFO  - 2013-11-13 23:50:31 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:50:31 --> 0 the guest only data>>>>>#99
INFO  - 2013-11-13 23:50:31 --> 0 the guest only data>> AFTER >>>#98
INFO  - 2013-11-13 23:50:31 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:50:31 --> 0 the guest only data>>>>>#98
INFO  - 2013-11-13 23:50:31 --> 0 the guest only data>> AFTER >>>#97
INFO  - 2013-11-13 23:50:31 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:50:31 --> 1 the guest only data>>>>>#97
INFO  - 2013-11-13 23:50:31 --> 1 the guest only data>> AFTER >>>#97
INFO  - 2013-11-13 23:50:31 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:50:31 --> 0 the guest only data>>>>>#97
INFO  - 2013-11-13 23:50:31 --> 0 the guest only data>> AFTER >>>#95
INFO  - 2013-11-13 23:50:31 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:50:31 --> 0 the guest only data>>>>>#95
INFO  - 2013-11-13 23:50:31 --> 0 the guest only data>> AFTER >>>#94
INFO  - 2013-11-13 23:50:31 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:50:31 --> 1 the guest only data>>>>>#94
INFO  - 2013-11-13 23:50:31 --> 1 the guest only data>> AFTER >>>#94
DEBUG - 2013-11-13 23:50:31 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-11-13 23:50:31 --> Final output sent to browser
DEBUG - 2013-11-13 23:50:31 --> Total execution time: 0.1170
DEBUG - 2013-11-13 23:50:49 --> Config Class Initialized
DEBUG - 2013-11-13 23:50:49 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:50:49 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:50:49 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:50:49 --> URI Class Initialized
DEBUG - 2013-11-13 23:50:49 --> Router Class Initialized
DEBUG - 2013-11-13 23:50:49 --> Output Class Initialized
DEBUG - 2013-11-13 23:50:49 --> Security Class Initialized
DEBUG - 2013-11-13 23:50:49 --> Input Class Initialized
DEBUG - 2013-11-13 23:50:49 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:50:49 --> Language Class Initialized
DEBUG - 2013-11-13 23:50:49 --> Loader Class Initialized
DEBUG - 2013-11-13 23:50:49 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:50:49 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:50:49 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:50:49 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:50:49 --> Session Class Initialized
DEBUG - 2013-11-13 23:50:49 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:50:49 --> Session routines successfully run
DEBUG - 2013-11-13 23:50:49 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:50:49 --> Controller Class Initialized
DEBUG - 2013-11-13 23:50:49 --> Model Class Initialized
DEBUG - 2013-11-13 23:50:49 --> Model Class Initialized
DEBUG - 2013-11-13 23:50:49 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:50:49 --> after session initialization................
INFO  - 2013-11-13 23:50:49 --> inside rays login auth.............sys_admin/user_authorization/redirecttorays
INFO  - 2013-11-13 23:50:49 --> inside rays login auth.............sys_admin/user_authorization/redirecttorays
DEBUG - 2013-11-13 23:50:49 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-11-13 23:50:49 --> XSS Filtering completed
DEBUG - 2013-11-13 23:50:49 --> XSS Filtering completed
INFO  - 2013-11-13 23:50:49 --> before getting the relation of member............6
INFO  - 2013-11-13 23:50:49 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-11-13 23:50:49 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-13 23:50:49 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-11-13 23:50:49 --> inside retrieving vacancy for member
INFO  - 2013-11-13 23:50:49 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-11-13 23:50:49 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-13 23:50:49 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-11-13 23:50:49 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-11-13 23:50:49 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-13 23:50:49 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-13 23:50:49 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-11-13 23:50:49 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-11-13 23:50:49 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-11-13 23:50:49 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-11-13 23:50:49 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-11-13 23:50:49 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-11-13 23:50:49 --> Final output sent to browser
DEBUG - 2013-11-13 23:50:49 --> Total execution time: 0.1740
DEBUG - 2013-11-13 23:50:49 --> Config Class Initialized
DEBUG - 2013-11-13 23:50:49 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:50:49 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:50:49 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:50:49 --> URI Class Initialized
DEBUG - 2013-11-13 23:50:49 --> Router Class Initialized
DEBUG - 2013-11-13 23:50:49 --> Output Class Initialized
DEBUG - 2013-11-13 23:50:49 --> Security Class Initialized
DEBUG - 2013-11-13 23:50:49 --> Input Class Initialized
DEBUG - 2013-11-13 23:50:49 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:50:49 --> Language Class Initialized
DEBUG - 2013-11-13 23:50:49 --> Loader Class Initialized
DEBUG - 2013-11-13 23:50:49 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:50:49 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:50:49 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:50:49 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:50:49 --> Session Class Initialized
DEBUG - 2013-11-13 23:50:49 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:50:49 --> Session routines successfully run
DEBUG - 2013-11-13 23:50:49 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:50:49 --> Controller Class Initialized
DEBUG - 2013-11-13 23:50:49 --> Model Class Initialized
DEBUG - 2013-11-13 23:50:49 --> Model Class Initialized
DEBUG - 2013-11-13 23:50:49 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:50:49 --> after session initialization................
ERROR - 2013-11-13 23:50:49 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-13 23:50:49 --> Config Class Initialized
DEBUG - 2013-11-13 23:50:49 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:50:49 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:50:49 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:50:49 --> URI Class Initialized
DEBUG - 2013-11-13 23:50:49 --> Router Class Initialized
ERROR - 2013-11-13 23:50:49 --> 404 Page Not Found --> css
DEBUG - 2013-11-13 23:50:51 --> Config Class Initialized
DEBUG - 2013-11-13 23:50:51 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:50:51 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:50:51 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:50:51 --> URI Class Initialized
DEBUG - 2013-11-13 23:50:51 --> Router Class Initialized
DEBUG - 2013-11-13 23:50:51 --> Output Class Initialized
DEBUG - 2013-11-13 23:50:51 --> Security Class Initialized
DEBUG - 2013-11-13 23:50:51 --> Input Class Initialized
DEBUG - 2013-11-13 23:50:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:50:51 --> Language Class Initialized
DEBUG - 2013-11-13 23:50:51 --> Loader Class Initialized
DEBUG - 2013-11-13 23:50:51 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:50:51 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:50:51 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:50:51 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:50:51 --> Session Class Initialized
DEBUG - 2013-11-13 23:50:51 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:50:51 --> Session routines successfully run
DEBUG - 2013-11-13 23:50:51 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:50:51 --> Controller Class Initialized
DEBUG - 2013-11-13 23:50:51 --> Model Class Initialized
DEBUG - 2013-11-13 23:50:51 --> Model Class Initialized
DEBUG - 2013-11-13 23:50:51 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:50:51 --> after session initialization................
INFO  - 2013-11-13 23:50:51 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 23:50:51 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 23:50:51 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 23:50:51 --> inside retrieving locations 
INFO  - 2013-11-13 23:50:51 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 23:50:51 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 23:50:51 --> Final output sent to browser
DEBUG - 2013-11-13 23:50:51 --> Total execution time: 0.0560
DEBUG - 2013-11-13 23:52:01 --> Config Class Initialized
DEBUG - 2013-11-13 23:52:01 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:52:01 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:52:01 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:52:01 --> URI Class Initialized
DEBUG - 2013-11-13 23:52:01 --> Router Class Initialized
DEBUG - 2013-11-13 23:52:01 --> Output Class Initialized
DEBUG - 2013-11-13 23:52:01 --> Security Class Initialized
DEBUG - 2013-11-13 23:52:02 --> Input Class Initialized
DEBUG - 2013-11-13 23:52:02 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:52:02 --> Language Class Initialized
DEBUG - 2013-11-13 23:52:02 --> Loader Class Initialized
DEBUG - 2013-11-13 23:52:02 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:52:02 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:52:02 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:52:02 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:52:02 --> Session Class Initialized
DEBUG - 2013-11-13 23:52:02 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:52:02 --> Session routines successfully run
DEBUG - 2013-11-13 23:52:02 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:52:02 --> Controller Class Initialized
DEBUG - 2013-11-13 23:52:02 --> Model Class Initialized
DEBUG - 2013-11-13 23:52:02 --> Model Class Initialized
DEBUG - 2013-11-13 23:52:02 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:52:02 --> after session initialization................
DEBUG - 2013-11-13 23:52:02 --> Config Class Initialized
DEBUG - 2013-11-13 23:52:02 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:52:02 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:52:02 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:52:02 --> URI Class Initialized
DEBUG - 2013-11-13 23:52:02 --> Router Class Initialized
DEBUG - 2013-11-13 23:52:02 --> No URI present. Default controller set.
DEBUG - 2013-11-13 23:52:02 --> Output Class Initialized
DEBUG - 2013-11-13 23:52:02 --> Security Class Initialized
DEBUG - 2013-11-13 23:52:02 --> Input Class Initialized
DEBUG - 2013-11-13 23:52:02 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:52:02 --> Language Class Initialized
DEBUG - 2013-11-13 23:52:02 --> Loader Class Initialized
DEBUG - 2013-11-13 23:52:02 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:52:02 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:52:02 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:52:02 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:52:02 --> Session Class Initialized
DEBUG - 2013-11-13 23:52:02 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:52:02 --> A session cookie was not found.
DEBUG - 2013-11-13 23:52:02 --> Session routines successfully run
DEBUG - 2013-11-13 23:52:02 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:52:02 --> Controller Class Initialized
INFO  - 2013-11-13 23:52:02 --> the form message==>
INFO  - 2013-11-13 23:52:02 --> The session id is ========>4c4557c696c99cf08f0947ffb352bff3 and the member id is =======>
INFO  - 2013-11-13 23:52:02 --> after the retrieving session list.................//////////
DEBUG - 2013-11-13 23:52:02 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-11-13 23:52:02 --> Final output sent to browser
DEBUG - 2013-11-13 23:52:02 --> Total execution time: 0.0380
DEBUG - 2013-11-13 23:52:03 --> Config Class Initialized
DEBUG - 2013-11-13 23:52:03 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:52:03 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:52:03 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:52:03 --> URI Class Initialized
DEBUG - 2013-11-13 23:52:03 --> Router Class Initialized
DEBUG - 2013-11-13 23:52:03 --> Output Class Initialized
DEBUG - 2013-11-13 23:52:03 --> Security Class Initialized
DEBUG - 2013-11-13 23:52:03 --> Input Class Initialized
DEBUG - 2013-11-13 23:52:03 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:52:03 --> Language Class Initialized
DEBUG - 2013-11-13 23:52:03 --> Loader Class Initialized
DEBUG - 2013-11-13 23:52:03 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:52:03 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:52:03 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:52:03 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:52:03 --> Session Class Initialized
DEBUG - 2013-11-13 23:52:03 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:52:03 --> Session routines successfully run
DEBUG - 2013-11-13 23:52:03 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:52:03 --> Controller Class Initialized
DEBUG - 2013-11-13 23:52:03 --> Model Class Initialized
DEBUG - 2013-11-13 23:52:03 --> Model Class Initialized
DEBUG - 2013-11-13 23:52:03 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:52:03 --> after session initialization................
INFO  - 2013-11-13 23:52:03 --> after rays has been clicked.................
INFO  - 2013-11-13 23:52:03 --> last article id is 0
INFO  - 2013-11-13 23:52:03 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:52:03 --> 1 the guest only data>>>>>
INFO  - 2013-11-13 23:52:03 --> 1 the guest only data>> AFTER >>>
INFO  - 2013-11-13 23:52:03 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:52:03 --> 0 the guest only data>>>>>
INFO  - 2013-11-13 23:52:03 --> 0 the guest only data>> AFTER >>>#111
INFO  - 2013-11-13 23:52:03 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:52:03 --> 0 the guest only data>>>>>#111
INFO  - 2013-11-13 23:52:03 --> 0 the guest only data>> AFTER >>>#110
INFO  - 2013-11-13 23:52:03 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:52:03 --> 0 the guest only data>>>>>#110
INFO  - 2013-11-13 23:52:03 --> 0 the guest only data>> AFTER >>>#109
INFO  - 2013-11-13 23:52:03 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:52:03 --> 0 the guest only data>>>>>#109
INFO  - 2013-11-13 23:52:03 --> 0 the guest only data>> AFTER >>>#108
INFO  - 2013-11-13 23:52:03 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:52:03 --> 0 the guest only data>>>>>#108
INFO  - 2013-11-13 23:52:03 --> 0 the guest only data>> AFTER >>>#107
INFO  - 2013-11-13 23:52:03 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:52:03 --> 1 the guest only data>>>>>#107
INFO  - 2013-11-13 23:52:03 --> 1 the guest only data>> AFTER >>>#107
INFO  - 2013-11-13 23:52:03 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:52:03 --> 0 the guest only data>>>>>#107
INFO  - 2013-11-13 23:52:03 --> 0 the guest only data>> AFTER >>>#105
INFO  - 2013-11-13 23:52:03 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:52:03 --> 0 the guest only data>>>>>#105
INFO  - 2013-11-13 23:52:03 --> 0 the guest only data>> AFTER >>>#104
INFO  - 2013-11-13 23:52:03 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:52:03 --> 0 the guest only data>>>>>#104
INFO  - 2013-11-13 23:52:03 --> 0 the guest only data>> AFTER >>>#103
INFO  - 2013-11-13 23:52:03 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:52:03 --> 0 the guest only data>>>>>#103
INFO  - 2013-11-13 23:52:03 --> 0 the guest only data>> AFTER >>>#102
INFO  - 2013-11-13 23:52:03 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:52:03 --> 0 the guest only data>>>>>#102
INFO  - 2013-11-13 23:52:03 --> 0 the guest only data>> AFTER >>>#101
INFO  - 2013-11-13 23:52:03 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:52:03 --> 0 the guest only data>>>>>#101
INFO  - 2013-11-13 23:52:03 --> 0 the guest only data>> AFTER >>>#100
INFO  - 2013-11-13 23:52:03 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:52:03 --> 0 the guest only data>>>>>#100
INFO  - 2013-11-13 23:52:03 --> 0 the guest only data>> AFTER >>>#99
INFO  - 2013-11-13 23:52:03 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:52:03 --> 0 the guest only data>>>>>#99
INFO  - 2013-11-13 23:52:03 --> 0 the guest only data>> AFTER >>>#98
INFO  - 2013-11-13 23:52:03 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:52:03 --> 0 the guest only data>>>>>#98
INFO  - 2013-11-13 23:52:03 --> 0 the guest only data>> AFTER >>>#97
INFO  - 2013-11-13 23:52:03 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:52:03 --> 1 the guest only data>>>>>#97
INFO  - 2013-11-13 23:52:03 --> 1 the guest only data>> AFTER >>>#97
INFO  - 2013-11-13 23:52:03 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:52:03 --> 0 the guest only data>>>>>#97
INFO  - 2013-11-13 23:52:03 --> 0 the guest only data>> AFTER >>>#95
INFO  - 2013-11-13 23:52:03 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:52:03 --> 0 the guest only data>>>>>#95
INFO  - 2013-11-13 23:52:03 --> 0 the guest only data>> AFTER >>>#94
INFO  - 2013-11-13 23:52:03 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:52:03 --> 1 the guest only data>>>>>#94
INFO  - 2013-11-13 23:52:03 --> 1 the guest only data>> AFTER >>>#94
DEBUG - 2013-11-13 23:52:03 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-11-13 23:52:03 --> Final output sent to browser
DEBUG - 2013-11-13 23:52:03 --> Total execution time: 0.0730
DEBUG - 2013-11-13 23:52:20 --> Config Class Initialized
DEBUG - 2013-11-13 23:52:20 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:52:20 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:52:20 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:52:20 --> URI Class Initialized
DEBUG - 2013-11-13 23:52:20 --> Router Class Initialized
DEBUG - 2013-11-13 23:52:20 --> Output Class Initialized
DEBUG - 2013-11-13 23:52:20 --> Security Class Initialized
DEBUG - 2013-11-13 23:52:20 --> Input Class Initialized
DEBUG - 2013-11-13 23:52:20 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:52:20 --> Language Class Initialized
DEBUG - 2013-11-13 23:52:20 --> Loader Class Initialized
DEBUG - 2013-11-13 23:52:20 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:52:20 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:52:20 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:52:20 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:52:20 --> Session Class Initialized
DEBUG - 2013-11-13 23:52:20 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:52:20 --> Session routines successfully run
DEBUG - 2013-11-13 23:52:20 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:52:20 --> Controller Class Initialized
DEBUG - 2013-11-13 23:52:20 --> Model Class Initialized
DEBUG - 2013-11-13 23:52:20 --> Model Class Initialized
DEBUG - 2013-11-13 23:52:20 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:52:20 --> after session initialization................
INFO  - 2013-11-13 23:52:20 --> last article id is 93
DEBUG - 2013-11-13 23:52:20 --> Final output sent to browser
DEBUG - 2013-11-13 23:52:20 --> Total execution time: 0.0520
DEBUG - 2013-11-13 23:52:21 --> Config Class Initialized
DEBUG - 2013-11-13 23:52:21 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:52:21 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:52:21 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:52:21 --> URI Class Initialized
DEBUG - 2013-11-13 23:52:21 --> Router Class Initialized
DEBUG - 2013-11-13 23:52:21 --> Output Class Initialized
DEBUG - 2013-11-13 23:52:21 --> Security Class Initialized
DEBUG - 2013-11-13 23:52:21 --> Input Class Initialized
DEBUG - 2013-11-13 23:52:21 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:52:21 --> Language Class Initialized
DEBUG - 2013-11-13 23:52:21 --> Loader Class Initialized
DEBUG - 2013-11-13 23:52:21 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:52:21 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:52:21 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:52:21 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:52:21 --> Session Class Initialized
DEBUG - 2013-11-13 23:52:21 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:52:21 --> Session routines successfully run
DEBUG - 2013-11-13 23:52:21 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:52:21 --> Controller Class Initialized
DEBUG - 2013-11-13 23:52:21 --> Model Class Initialized
DEBUG - 2013-11-13 23:52:21 --> Model Class Initialized
DEBUG - 2013-11-13 23:52:21 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:52:21 --> after session initialization................
INFO  - 2013-11-13 23:52:21 --> last article id is 83
DEBUG - 2013-11-13 23:52:21 --> Final output sent to browser
DEBUG - 2013-11-13 23:52:21 --> Total execution time: 0.0470
DEBUG - 2013-11-13 23:52:22 --> Config Class Initialized
DEBUG - 2013-11-13 23:52:22 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:52:22 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:52:22 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:52:22 --> URI Class Initialized
DEBUG - 2013-11-13 23:52:22 --> Router Class Initialized
DEBUG - 2013-11-13 23:52:22 --> Output Class Initialized
DEBUG - 2013-11-13 23:52:22 --> Security Class Initialized
DEBUG - 2013-11-13 23:52:22 --> Input Class Initialized
DEBUG - 2013-11-13 23:52:22 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:52:22 --> Language Class Initialized
DEBUG - 2013-11-13 23:52:22 --> Loader Class Initialized
DEBUG - 2013-11-13 23:52:22 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:52:22 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:52:22 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:52:22 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:52:22 --> Session Class Initialized
DEBUG - 2013-11-13 23:52:22 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:52:22 --> Session routines successfully run
DEBUG - 2013-11-13 23:52:22 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:52:22 --> Controller Class Initialized
DEBUG - 2013-11-13 23:52:22 --> Model Class Initialized
DEBUG - 2013-11-13 23:52:22 --> Model Class Initialized
DEBUG - 2013-11-13 23:52:22 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:52:22 --> after session initialization................
INFO  - 2013-11-13 23:52:22 --> last article id is 73
DEBUG - 2013-11-13 23:52:22 --> Final output sent to browser
DEBUG - 2013-11-13 23:52:22 --> Total execution time: 0.0530
DEBUG - 2013-11-13 23:52:23 --> Config Class Initialized
DEBUG - 2013-11-13 23:52:23 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:52:23 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:52:23 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:52:23 --> URI Class Initialized
DEBUG - 2013-11-13 23:52:23 --> Router Class Initialized
DEBUG - 2013-11-13 23:52:23 --> Output Class Initialized
DEBUG - 2013-11-13 23:52:23 --> Security Class Initialized
DEBUG - 2013-11-13 23:52:23 --> Input Class Initialized
DEBUG - 2013-11-13 23:52:23 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:52:23 --> Language Class Initialized
DEBUG - 2013-11-13 23:52:23 --> Loader Class Initialized
DEBUG - 2013-11-13 23:52:23 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:52:23 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:52:23 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:52:23 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:52:23 --> Session Class Initialized
DEBUG - 2013-11-13 23:52:23 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:52:23 --> Session routines successfully run
DEBUG - 2013-11-13 23:52:23 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:52:23 --> Controller Class Initialized
DEBUG - 2013-11-13 23:52:23 --> Model Class Initialized
DEBUG - 2013-11-13 23:52:23 --> Model Class Initialized
DEBUG - 2013-11-13 23:52:23 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:52:23 --> after session initialization................
INFO  - 2013-11-13 23:52:23 --> last article id is 62
DEBUG - 2013-11-13 23:52:23 --> Final output sent to browser
DEBUG - 2013-11-13 23:52:23 --> Total execution time: 0.0530
DEBUG - 2013-11-13 23:52:23 --> Config Class Initialized
DEBUG - 2013-11-13 23:52:23 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:52:23 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:52:23 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:52:23 --> URI Class Initialized
DEBUG - 2013-11-13 23:52:23 --> Router Class Initialized
DEBUG - 2013-11-13 23:52:23 --> Output Class Initialized
DEBUG - 2013-11-13 23:52:23 --> Security Class Initialized
DEBUG - 2013-11-13 23:52:23 --> Input Class Initialized
DEBUG - 2013-11-13 23:52:23 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:52:23 --> Language Class Initialized
DEBUG - 2013-11-13 23:52:23 --> Loader Class Initialized
DEBUG - 2013-11-13 23:52:23 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:52:23 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:52:23 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:52:23 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:52:23 --> Session Class Initialized
DEBUG - 2013-11-13 23:52:23 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:52:23 --> Session routines successfully run
DEBUG - 2013-11-13 23:52:23 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:52:23 --> Controller Class Initialized
DEBUG - 2013-11-13 23:52:23 --> Model Class Initialized
DEBUG - 2013-11-13 23:52:23 --> Model Class Initialized
DEBUG - 2013-11-13 23:52:23 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:52:23 --> after session initialization................
INFO  - 2013-11-13 23:52:23 --> last article id is 52
DEBUG - 2013-11-13 23:52:23 --> Final output sent to browser
DEBUG - 2013-11-13 23:52:23 --> Total execution time: 0.0710
DEBUG - 2013-11-13 23:52:24 --> Config Class Initialized
DEBUG - 2013-11-13 23:52:24 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:52:24 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:52:24 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:52:24 --> URI Class Initialized
DEBUG - 2013-11-13 23:52:24 --> Router Class Initialized
DEBUG - 2013-11-13 23:52:24 --> Output Class Initialized
DEBUG - 2013-11-13 23:52:24 --> Security Class Initialized
DEBUG - 2013-11-13 23:52:24 --> Input Class Initialized
DEBUG - 2013-11-13 23:52:24 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:52:24 --> Language Class Initialized
DEBUG - 2013-11-13 23:52:24 --> Loader Class Initialized
DEBUG - 2013-11-13 23:52:24 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:52:24 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:52:24 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:52:24 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:52:24 --> Session Class Initialized
DEBUG - 2013-11-13 23:52:24 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:52:24 --> Session routines successfully run
DEBUG - 2013-11-13 23:52:24 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:52:24 --> Controller Class Initialized
DEBUG - 2013-11-13 23:52:24 --> Model Class Initialized
DEBUG - 2013-11-13 23:52:24 --> Model Class Initialized
DEBUG - 2013-11-13 23:52:24 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:52:24 --> after session initialization................
INFO  - 2013-11-13 23:52:24 --> last article id is 42
DEBUG - 2013-11-13 23:52:24 --> Final output sent to browser
DEBUG - 2013-11-13 23:52:24 --> Total execution time: 0.0550
DEBUG - 2013-11-13 23:52:25 --> Config Class Initialized
DEBUG - 2013-11-13 23:52:25 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:52:25 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:52:25 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:52:25 --> URI Class Initialized
DEBUG - 2013-11-13 23:52:25 --> Router Class Initialized
DEBUG - 2013-11-13 23:52:25 --> Output Class Initialized
DEBUG - 2013-11-13 23:52:25 --> Security Class Initialized
DEBUG - 2013-11-13 23:52:25 --> Input Class Initialized
DEBUG - 2013-11-13 23:52:25 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:52:25 --> Language Class Initialized
DEBUG - 2013-11-13 23:52:25 --> Loader Class Initialized
DEBUG - 2013-11-13 23:52:25 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:52:25 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:52:25 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:52:25 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:52:25 --> Session Class Initialized
DEBUG - 2013-11-13 23:52:25 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:52:25 --> Session routines successfully run
DEBUG - 2013-11-13 23:52:25 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:52:25 --> Controller Class Initialized
DEBUG - 2013-11-13 23:52:25 --> Model Class Initialized
DEBUG - 2013-11-13 23:52:25 --> Model Class Initialized
DEBUG - 2013-11-13 23:52:25 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:52:25 --> after session initialization................
INFO  - 2013-11-13 23:52:25 --> last article id is 32
DEBUG - 2013-11-13 23:52:25 --> Final output sent to browser
DEBUG - 2013-11-13 23:52:25 --> Total execution time: 0.0450
DEBUG - 2013-11-13 23:52:26 --> Config Class Initialized
DEBUG - 2013-11-13 23:52:26 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:52:26 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:52:26 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:52:26 --> URI Class Initialized
DEBUG - 2013-11-13 23:52:26 --> Router Class Initialized
DEBUG - 2013-11-13 23:52:26 --> Output Class Initialized
DEBUG - 2013-11-13 23:52:26 --> Security Class Initialized
DEBUG - 2013-11-13 23:52:26 --> Input Class Initialized
DEBUG - 2013-11-13 23:52:26 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:52:26 --> Language Class Initialized
DEBUG - 2013-11-13 23:52:26 --> Loader Class Initialized
DEBUG - 2013-11-13 23:52:26 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:52:26 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:52:26 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:52:26 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:52:26 --> Session Class Initialized
DEBUG - 2013-11-13 23:52:26 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:52:26 --> Session routines successfully run
DEBUG - 2013-11-13 23:52:26 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:52:26 --> Controller Class Initialized
DEBUG - 2013-11-13 23:52:26 --> Model Class Initialized
DEBUG - 2013-11-13 23:52:26 --> Model Class Initialized
DEBUG - 2013-11-13 23:52:26 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:52:26 --> after session initialization................
INFO  - 2013-11-13 23:52:26 --> last article id is 22
DEBUG - 2013-11-13 23:52:26 --> Final output sent to browser
DEBUG - 2013-11-13 23:52:26 --> Total execution time: 0.0560
DEBUG - 2013-11-13 23:52:27 --> Config Class Initialized
DEBUG - 2013-11-13 23:52:27 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:52:27 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:52:27 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:52:27 --> URI Class Initialized
DEBUG - 2013-11-13 23:52:27 --> Router Class Initialized
DEBUG - 2013-11-13 23:52:27 --> Output Class Initialized
DEBUG - 2013-11-13 23:52:27 --> Security Class Initialized
DEBUG - 2013-11-13 23:52:27 --> Input Class Initialized
DEBUG - 2013-11-13 23:52:27 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:52:27 --> Language Class Initialized
DEBUG - 2013-11-13 23:52:27 --> Loader Class Initialized
DEBUG - 2013-11-13 23:52:27 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:52:27 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:52:27 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:52:27 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:52:27 --> Session Class Initialized
DEBUG - 2013-11-13 23:52:27 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:52:27 --> Session routines successfully run
DEBUG - 2013-11-13 23:52:27 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:52:27 --> Controller Class Initialized
DEBUG - 2013-11-13 23:52:27 --> Model Class Initialized
DEBUG - 2013-11-13 23:52:27 --> Model Class Initialized
DEBUG - 2013-11-13 23:52:27 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:52:27 --> after session initialization................
INFO  - 2013-11-13 23:52:27 --> last article id is 12
DEBUG - 2013-11-13 23:52:27 --> Final output sent to browser
DEBUG - 2013-11-13 23:52:27 --> Total execution time: 0.0460
DEBUG - 2013-11-13 23:52:28 --> Config Class Initialized
DEBUG - 2013-11-13 23:52:28 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:52:28 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:52:28 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:52:28 --> URI Class Initialized
DEBUG - 2013-11-13 23:52:28 --> Router Class Initialized
DEBUG - 2013-11-13 23:52:28 --> Output Class Initialized
DEBUG - 2013-11-13 23:52:28 --> Security Class Initialized
DEBUG - 2013-11-13 23:52:28 --> Input Class Initialized
DEBUG - 2013-11-13 23:52:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:52:28 --> Language Class Initialized
DEBUG - 2013-11-13 23:52:28 --> Loader Class Initialized
DEBUG - 2013-11-13 23:52:28 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:52:28 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:52:28 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:52:28 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:52:28 --> Session Class Initialized
DEBUG - 2013-11-13 23:52:28 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:52:28 --> Session routines successfully run
DEBUG - 2013-11-13 23:52:28 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:52:28 --> Controller Class Initialized
DEBUG - 2013-11-13 23:52:28 --> Model Class Initialized
DEBUG - 2013-11-13 23:52:28 --> Model Class Initialized
DEBUG - 2013-11-13 23:52:28 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:52:28 --> after session initialization................
INFO  - 2013-11-13 23:52:28 --> last article id is 2
DEBUG - 2013-11-13 23:52:28 --> Final output sent to browser
DEBUG - 2013-11-13 23:52:28 --> Total execution time: 0.0520
DEBUG - 2013-11-13 23:52:28 --> Config Class Initialized
DEBUG - 2013-11-13 23:52:28 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:52:28 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:52:28 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:52:28 --> URI Class Initialized
DEBUG - 2013-11-13 23:52:28 --> Router Class Initialized
DEBUG - 2013-11-13 23:52:28 --> Output Class Initialized
DEBUG - 2013-11-13 23:52:28 --> Security Class Initialized
DEBUG - 2013-11-13 23:52:28 --> Input Class Initialized
DEBUG - 2013-11-13 23:52:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:52:28 --> Language Class Initialized
DEBUG - 2013-11-13 23:52:28 --> Loader Class Initialized
DEBUG - 2013-11-13 23:52:28 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:52:28 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:52:28 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:52:28 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:52:28 --> Session Class Initialized
DEBUG - 2013-11-13 23:52:28 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:52:28 --> Session routines successfully run
DEBUG - 2013-11-13 23:52:28 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:52:28 --> Controller Class Initialized
DEBUG - 2013-11-13 23:52:28 --> Model Class Initialized
DEBUG - 2013-11-13 23:52:28 --> Model Class Initialized
DEBUG - 2013-11-13 23:52:28 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:52:28 --> after session initialization................
INFO  - 2013-11-13 23:52:28 --> last article id is 1
DEBUG - 2013-11-13 23:52:28 --> Final output sent to browser
DEBUG - 2013-11-13 23:52:28 --> Total execution time: 0.0440
DEBUG - 2013-11-13 23:52:41 --> Config Class Initialized
DEBUG - 2013-11-13 23:52:41 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:52:41 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:52:41 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:52:41 --> URI Class Initialized
DEBUG - 2013-11-13 23:52:41 --> Router Class Initialized
DEBUG - 2013-11-13 23:52:41 --> Output Class Initialized
DEBUG - 2013-11-13 23:52:41 --> Security Class Initialized
DEBUG - 2013-11-13 23:52:41 --> Input Class Initialized
DEBUG - 2013-11-13 23:52:41 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:52:41 --> Language Class Initialized
DEBUG - 2013-11-13 23:52:41 --> Loader Class Initialized
DEBUG - 2013-11-13 23:52:41 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:52:41 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:52:41 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:52:41 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:52:41 --> Session Class Initialized
DEBUG - 2013-11-13 23:52:41 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:52:41 --> Session routines successfully run
DEBUG - 2013-11-13 23:52:41 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:52:41 --> Controller Class Initialized
DEBUG - 2013-11-13 23:52:41 --> Model Class Initialized
DEBUG - 2013-11-13 23:52:41 --> Model Class Initialized
DEBUG - 2013-11-13 23:52:41 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:52:41 --> after session initialization................
ERROR - 2013-11-13 23:52:41 --> Severity: Warning  --> Missing argument 1 for user_authorization::index() C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 193
ERROR - 2013-11-13 23:52:41 --> Severity: Notice  --> Undefined variable: message C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 195
DEBUG - 2013-11-13 23:52:41 --> Config Class Initialized
DEBUG - 2013-11-13 23:52:41 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:52:41 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:52:41 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:52:41 --> URI Class Initialized
DEBUG - 2013-11-13 23:52:41 --> Router Class Initialized
DEBUG - 2013-11-13 23:52:41 --> No URI present. Default controller set.
DEBUG - 2013-11-13 23:52:41 --> Output Class Initialized
DEBUG - 2013-11-13 23:52:41 --> Security Class Initialized
DEBUG - 2013-11-13 23:52:41 --> Input Class Initialized
DEBUG - 2013-11-13 23:52:41 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:52:41 --> Language Class Initialized
DEBUG - 2013-11-13 23:52:41 --> Loader Class Initialized
DEBUG - 2013-11-13 23:52:41 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:52:41 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:52:41 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:52:41 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:52:41 --> Session Class Initialized
DEBUG - 2013-11-13 23:52:41 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:52:41 --> Session routines successfully run
DEBUG - 2013-11-13 23:52:41 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:52:41 --> Controller Class Initialized
INFO  - 2013-11-13 23:52:41 --> the form message==>
INFO  - 2013-11-13 23:52:41 --> The session id is ========>4c4557c696c99cf08f0947ffb352bff3 and the member id is =======>
INFO  - 2013-11-13 23:52:41 --> after the retrieving session list.................//////////
DEBUG - 2013-11-13 23:52:41 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-11-13 23:52:41 --> Final output sent to browser
DEBUG - 2013-11-13 23:52:41 --> Total execution time: 0.0400
DEBUG - 2013-11-13 23:53:22 --> Config Class Initialized
DEBUG - 2013-11-13 23:53:22 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:53:22 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:53:22 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:53:22 --> URI Class Initialized
DEBUG - 2013-11-13 23:53:22 --> Router Class Initialized
DEBUG - 2013-11-13 23:53:22 --> Output Class Initialized
DEBUG - 2013-11-13 23:53:22 --> Security Class Initialized
DEBUG - 2013-11-13 23:53:22 --> Input Class Initialized
DEBUG - 2013-11-13 23:53:22 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:53:22 --> Language Class Initialized
DEBUG - 2013-11-13 23:53:22 --> Loader Class Initialized
DEBUG - 2013-11-13 23:53:22 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:53:22 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:53:22 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:53:22 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:53:22 --> Session Class Initialized
DEBUG - 2013-11-13 23:53:22 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:53:22 --> Session routines successfully run
DEBUG - 2013-11-13 23:53:22 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:53:22 --> Controller Class Initialized
DEBUG - 2013-11-13 23:53:22 --> Model Class Initialized
DEBUG - 2013-11-13 23:53:22 --> Model Class Initialized
DEBUG - 2013-11-13 23:53:22 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:53:22 --> after session initialization................
INFO  - 2013-11-13 23:53:22 --> inside rays login auth.............
DEBUG - 2013-11-13 23:53:22 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-11-13 23:53:22 --> XSS Filtering completed
DEBUG - 2013-11-13 23:53:22 --> XSS Filtering completed
INFO  - 2013-11-13 23:53:22 --> before getting the relation of member............6
INFO  - 2013-11-13 23:53:22 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-11-13 23:53:22 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-13 23:53:22 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-11-13 23:53:22 --> inside retrieving vacancy for member
INFO  - 2013-11-13 23:53:22 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-11-13 23:53:22 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-13 23:53:22 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-11-13 23:53:22 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-11-13 23:53:22 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-13 23:53:22 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-13 23:53:22 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-11-13 23:53:22 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-11-13 23:53:22 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-11-13 23:53:22 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-11-13 23:53:22 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-11-13 23:53:22 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-11-13 23:53:22 --> Final output sent to browser
DEBUG - 2013-11-13 23:53:22 --> Total execution time: 0.0880
DEBUG - 2013-11-13 23:53:23 --> Config Class Initialized
DEBUG - 2013-11-13 23:53:23 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:53:23 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:53:23 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:53:23 --> URI Class Initialized
DEBUG - 2013-11-13 23:53:23 --> Router Class Initialized
DEBUG - 2013-11-13 23:53:23 --> Output Class Initialized
DEBUG - 2013-11-13 23:53:23 --> Security Class Initialized
DEBUG - 2013-11-13 23:53:23 --> Input Class Initialized
DEBUG - 2013-11-13 23:53:23 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:53:23 --> Language Class Initialized
DEBUG - 2013-11-13 23:53:23 --> Loader Class Initialized
DEBUG - 2013-11-13 23:53:23 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:53:23 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:53:23 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:53:23 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:53:23 --> Session Class Initialized
DEBUG - 2013-11-13 23:53:23 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:53:23 --> Session routines successfully run
DEBUG - 2013-11-13 23:53:23 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:53:23 --> Controller Class Initialized
DEBUG - 2013-11-13 23:53:23 --> Model Class Initialized
DEBUG - 2013-11-13 23:53:23 --> Model Class Initialized
DEBUG - 2013-11-13 23:53:23 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:53:23 --> after session initialization................
ERROR - 2013-11-13 23:53:23 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-13 23:53:23 --> Config Class Initialized
DEBUG - 2013-11-13 23:53:23 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:53:23 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:53:23 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:53:23 --> URI Class Initialized
DEBUG - 2013-11-13 23:53:23 --> Router Class Initialized
ERROR - 2013-11-13 23:53:23 --> 404 Page Not Found --> css
DEBUG - 2013-11-13 23:53:26 --> Config Class Initialized
DEBUG - 2013-11-13 23:53:26 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:53:26 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:53:26 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:53:26 --> URI Class Initialized
DEBUG - 2013-11-13 23:53:26 --> Router Class Initialized
DEBUG - 2013-11-13 23:53:26 --> Output Class Initialized
DEBUG - 2013-11-13 23:53:26 --> Security Class Initialized
DEBUG - 2013-11-13 23:53:26 --> Input Class Initialized
DEBUG - 2013-11-13 23:53:26 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:53:26 --> Language Class Initialized
DEBUG - 2013-11-13 23:53:26 --> Loader Class Initialized
DEBUG - 2013-11-13 23:53:26 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:53:26 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:53:26 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:53:26 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:53:26 --> Session Class Initialized
DEBUG - 2013-11-13 23:53:26 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:53:26 --> Session routines successfully run
DEBUG - 2013-11-13 23:53:26 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:53:26 --> Controller Class Initialized
DEBUG - 2013-11-13 23:53:26 --> Model Class Initialized
DEBUG - 2013-11-13 23:53:26 --> Model Class Initialized
DEBUG - 2013-11-13 23:53:26 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:53:26 --> after session initialization................
INFO  - 2013-11-13 23:53:26 --> last news id is 0
INFO  - 2013-11-13 23:53:26 --> SELECT a.id_article as id, a.title as newsletter_title, a.description as newsletter_description, a.guestonly as guestonly, a.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`article` a)
JOIN `member` m ON `a`.`memberid_member` = `m`.`id_member`
WHERE `a`.`id_article` <> 0
ORDER BY `a`.`id_article` desc
LIMIT 15
INFO  - 2013-11-13 23:53:26 --> after newsleters list has been clicked.................
INFO  - 2013-11-13 23:53:26 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=112&article_type=newsletter_title
INFO  - 2013-11-13 23:53:26 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=111&article_type=newsletter_title
INFO  - 2013-11-13 23:53:26 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=110&article_type=newsletter_title
INFO  - 2013-11-13 23:53:26 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=109&article_type=newsletter_title
INFO  - 2013-11-13 23:53:26 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=108&article_type=newsletter_title
INFO  - 2013-11-13 23:53:26 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=107&article_type=newsletter_title
INFO  - 2013-11-13 23:53:26 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=106&article_type=newsletter_title
INFO  - 2013-11-13 23:53:26 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=105&article_type=newsletter_title
INFO  - 2013-11-13 23:53:26 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=104&article_type=newsletter_title
INFO  - 2013-11-13 23:53:26 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=103&article_type=newsletter_title
INFO  - 2013-11-13 23:53:26 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=102&article_type=newsletter_title
INFO  - 2013-11-13 23:53:26 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=101&article_type=newsletter_title
INFO  - 2013-11-13 23:53:26 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=100&article_type=newsletter_title
INFO  - 2013-11-13 23:53:26 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=99&article_type=newsletter_title
INFO  - 2013-11-13 23:53:26 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=98&article_type=newsletter_title
DEBUG - 2013-11-13 23:53:26 --> File loaded: ../pharmaray-application/views/articles.php
DEBUG - 2013-11-13 23:53:26 --> Final output sent to browser
DEBUG - 2013-11-13 23:53:26 --> Total execution time: 0.1490
DEBUG - 2013-11-13 23:53:29 --> Config Class Initialized
DEBUG - 2013-11-13 23:53:29 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:53:29 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:53:29 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:53:29 --> URI Class Initialized
DEBUG - 2013-11-13 23:53:29 --> Router Class Initialized
DEBUG - 2013-11-13 23:53:29 --> Output Class Initialized
DEBUG - 2013-11-13 23:53:29 --> Security Class Initialized
DEBUG - 2013-11-13 23:53:29 --> Input Class Initialized
DEBUG - 2013-11-13 23:53:29 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:53:29 --> Language Class Initialized
DEBUG - 2013-11-13 23:53:29 --> Loader Class Initialized
DEBUG - 2013-11-13 23:53:29 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:53:29 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:53:29 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:53:29 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:53:29 --> Session Class Initialized
DEBUG - 2013-11-13 23:53:29 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:53:29 --> Session routines successfully run
DEBUG - 2013-11-13 23:53:29 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:53:29 --> Controller Class Initialized
DEBUG - 2013-11-13 23:53:29 --> Model Class Initialized
DEBUG - 2013-11-13 23:53:29 --> Model Class Initialized
DEBUG - 2013-11-13 23:53:29 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:53:29 --> after session initialization................
INFO  - 2013-11-13 23:53:29 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-13 23:53:29 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-11-13 23:53:29 --> inside retrieving vacancy for member
INFO  - 2013-11-13 23:53:29 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-11-13 23:53:29 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-13 23:53:29 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-11-13 23:53:29 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-11-13 23:53:29 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-13 23:53:29 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-13 23:53:29 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-11-13 23:53:29 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-11-13 23:53:29 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-11-13 23:53:29 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-11-13 23:53:29 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-11-13 23:53:29 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-11-13 23:53:29 --> Final output sent to browser
DEBUG - 2013-11-13 23:53:29 --> Total execution time: 0.0720
DEBUG - 2013-11-13 23:53:29 --> Config Class Initialized
DEBUG - 2013-11-13 23:53:29 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:53:29 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:53:29 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:53:29 --> URI Class Initialized
DEBUG - 2013-11-13 23:53:29 --> Router Class Initialized
DEBUG - 2013-11-13 23:53:29 --> Output Class Initialized
DEBUG - 2013-11-13 23:53:29 --> Security Class Initialized
DEBUG - 2013-11-13 23:53:29 --> Input Class Initialized
DEBUG - 2013-11-13 23:53:29 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:53:29 --> Language Class Initialized
DEBUG - 2013-11-13 23:53:29 --> Loader Class Initialized
DEBUG - 2013-11-13 23:53:29 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:53:29 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:53:29 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:53:29 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:53:29 --> Session Class Initialized
DEBUG - 2013-11-13 23:53:29 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:53:29 --> Session routines successfully run
DEBUG - 2013-11-13 23:53:29 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:53:29 --> Controller Class Initialized
DEBUG - 2013-11-13 23:53:29 --> Model Class Initialized
DEBUG - 2013-11-13 23:53:29 --> Model Class Initialized
DEBUG - 2013-11-13 23:53:29 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:53:29 --> after session initialization................
ERROR - 2013-11-13 23:53:29 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-13 23:53:29 --> Config Class Initialized
DEBUG - 2013-11-13 23:53:29 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:53:29 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:53:29 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:53:29 --> URI Class Initialized
DEBUG - 2013-11-13 23:53:29 --> Router Class Initialized
ERROR - 2013-11-13 23:53:29 --> 404 Page Not Found --> css
DEBUG - 2013-11-13 23:53:34 --> Config Class Initialized
DEBUG - 2013-11-13 23:53:34 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:53:34 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:53:34 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:53:34 --> URI Class Initialized
DEBUG - 2013-11-13 23:53:34 --> Router Class Initialized
DEBUG - 2013-11-13 23:53:34 --> Output Class Initialized
DEBUG - 2013-11-13 23:53:34 --> Security Class Initialized
DEBUG - 2013-11-13 23:53:34 --> Input Class Initialized
DEBUG - 2013-11-13 23:53:34 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:53:34 --> Language Class Initialized
DEBUG - 2013-11-13 23:53:34 --> Loader Class Initialized
DEBUG - 2013-11-13 23:53:34 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:53:34 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:53:34 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:53:34 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:53:34 --> Session Class Initialized
DEBUG - 2013-11-13 23:53:34 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:53:34 --> Session routines successfully run
DEBUG - 2013-11-13 23:53:34 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:53:34 --> Controller Class Initialized
DEBUG - 2013-11-13 23:53:34 --> Model Class Initialized
DEBUG - 2013-11-13 23:53:34 --> Model Class Initialized
DEBUG - 2013-11-13 23:53:34 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:53:34 --> after session initialization................
INFO  - 2013-11-13 23:53:34 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 1 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-11-13 23:53:34 --> Final output sent to browser
DEBUG - 2013-11-13 23:53:34 --> Total execution time: 0.0540
DEBUG - 2013-11-13 23:53:36 --> Config Class Initialized
DEBUG - 2013-11-13 23:53:36 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:53:36 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:53:36 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:53:36 --> URI Class Initialized
DEBUG - 2013-11-13 23:53:36 --> Router Class Initialized
DEBUG - 2013-11-13 23:53:36 --> Output Class Initialized
DEBUG - 2013-11-13 23:53:36 --> Security Class Initialized
DEBUG - 2013-11-13 23:53:36 --> Input Class Initialized
DEBUG - 2013-11-13 23:53:36 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:53:36 --> Language Class Initialized
DEBUG - 2013-11-13 23:53:36 --> Loader Class Initialized
DEBUG - 2013-11-13 23:53:36 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:53:36 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:53:36 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:53:36 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:53:36 --> Session Class Initialized
DEBUG - 2013-11-13 23:53:36 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:53:36 --> Session routines successfully run
DEBUG - 2013-11-13 23:53:36 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:53:36 --> Controller Class Initialized
DEBUG - 2013-11-13 23:53:36 --> Model Class Initialized
DEBUG - 2013-11-13 23:53:36 --> Model Class Initialized
DEBUG - 2013-11-13 23:53:36 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:53:36 --> after session initialization................
INFO  - 2013-11-13 23:53:36 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 1 and d.drugcategoryid_drugcategory = 1 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-11-13 23:53:36 --> Final output sent to browser
DEBUG - 2013-11-13 23:53:36 --> Total execution time: 0.0440
DEBUG - 2013-11-13 23:53:52 --> Config Class Initialized
DEBUG - 2013-11-13 23:53:52 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:53:52 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:53:52 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:53:52 --> URI Class Initialized
DEBUG - 2013-11-13 23:53:52 --> Router Class Initialized
DEBUG - 2013-11-13 23:53:52 --> Output Class Initialized
DEBUG - 2013-11-13 23:53:52 --> Security Class Initialized
DEBUG - 2013-11-13 23:53:52 --> Input Class Initialized
DEBUG - 2013-11-13 23:53:52 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:53:52 --> Language Class Initialized
DEBUG - 2013-11-13 23:53:52 --> Loader Class Initialized
DEBUG - 2013-11-13 23:53:52 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:53:52 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:53:52 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:53:52 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:53:52 --> Session Class Initialized
DEBUG - 2013-11-13 23:53:52 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:53:52 --> Session routines successfully run
DEBUG - 2013-11-13 23:53:52 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:53:52 --> Controller Class Initialized
DEBUG - 2013-11-13 23:53:52 --> Model Class Initialized
DEBUG - 2013-11-13 23:53:52 --> Model Class Initialized
DEBUG - 2013-11-13 23:53:52 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:53:52 --> after session initialization................
INFO  - 2013-11-13 23:53:52 --> last news id is 0
INFO  - 2013-11-13 23:53:52 --> SELECT a.id_article as id, a.title as newsletter_title, a.description as newsletter_description, a.guestonly as guestonly, a.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`article` a)
JOIN `member` m ON `a`.`memberid_member` = `m`.`id_member`
WHERE `a`.`id_article` <> 0
ORDER BY `a`.`id_article` desc
LIMIT 15
INFO  - 2013-11-13 23:53:52 --> after newsleters list has been clicked.................
INFO  - 2013-11-13 23:53:52 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=112&article_type=newsletter_title
INFO  - 2013-11-13 23:53:52 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=111&article_type=newsletter_title
INFO  - 2013-11-13 23:53:52 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=110&article_type=newsletter_title
INFO  - 2013-11-13 23:53:52 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=109&article_type=newsletter_title
INFO  - 2013-11-13 23:53:52 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=108&article_type=newsletter_title
INFO  - 2013-11-13 23:53:52 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=107&article_type=newsletter_title
INFO  - 2013-11-13 23:53:52 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=106&article_type=newsletter_title
INFO  - 2013-11-13 23:53:52 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=105&article_type=newsletter_title
INFO  - 2013-11-13 23:53:52 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=104&article_type=newsletter_title
INFO  - 2013-11-13 23:53:52 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=103&article_type=newsletter_title
INFO  - 2013-11-13 23:53:52 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=102&article_type=newsletter_title
INFO  - 2013-11-13 23:53:52 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=101&article_type=newsletter_title
INFO  - 2013-11-13 23:53:52 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=100&article_type=newsletter_title
INFO  - 2013-11-13 23:53:52 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=99&article_type=newsletter_title
INFO  - 2013-11-13 23:53:52 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=98&article_type=newsletter_title
DEBUG - 2013-11-13 23:53:52 --> File loaded: ../pharmaray-application/views/articles.php
DEBUG - 2013-11-13 23:53:52 --> Final output sent to browser
DEBUG - 2013-11-13 23:53:52 --> Total execution time: 0.0590
DEBUG - 2013-11-13 23:53:55 --> Config Class Initialized
DEBUG - 2013-11-13 23:53:55 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:53:55 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:53:55 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:53:55 --> URI Class Initialized
DEBUG - 2013-11-13 23:53:55 --> Router Class Initialized
DEBUG - 2013-11-13 23:53:55 --> Output Class Initialized
DEBUG - 2013-11-13 23:53:55 --> Security Class Initialized
DEBUG - 2013-11-13 23:53:55 --> Input Class Initialized
DEBUG - 2013-11-13 23:53:55 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:53:55 --> Language Class Initialized
DEBUG - 2013-11-13 23:53:55 --> Loader Class Initialized
DEBUG - 2013-11-13 23:53:55 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:53:55 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:53:55 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:53:55 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:53:55 --> Session Class Initialized
DEBUG - 2013-11-13 23:53:55 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:53:55 --> Session routines successfully run
DEBUG - 2013-11-13 23:53:55 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:53:55 --> Controller Class Initialized
DEBUG - 2013-11-13 23:53:55 --> Model Class Initialized
DEBUG - 2013-11-13 23:53:55 --> Model Class Initialized
DEBUG - 2013-11-13 23:53:55 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:53:55 --> after session initialization................
INFO  - 2013-11-13 23:53:55 --> last article id is 98
DEBUG - 2013-11-13 23:53:55 --> Final output sent to browser
DEBUG - 2013-11-13 23:53:55 --> Total execution time: 0.0600
DEBUG - 2013-11-13 23:53:55 --> Config Class Initialized
DEBUG - 2013-11-13 23:53:55 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:53:55 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:53:55 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:53:55 --> URI Class Initialized
DEBUG - 2013-11-13 23:53:55 --> Router Class Initialized
DEBUG - 2013-11-13 23:53:55 --> Output Class Initialized
DEBUG - 2013-11-13 23:53:55 --> Security Class Initialized
DEBUG - 2013-11-13 23:53:55 --> Input Class Initialized
DEBUG - 2013-11-13 23:53:58 --> Config Class Initialized
DEBUG - 2013-11-13 23:53:58 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:53:58 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:53:58 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:53:58 --> URI Class Initialized
DEBUG - 2013-11-13 23:53:58 --> Router Class Initialized
DEBUG - 2013-11-13 23:53:58 --> Output Class Initialized
DEBUG - 2013-11-13 23:53:58 --> Security Class Initialized
DEBUG - 2013-11-13 23:53:58 --> Input Class Initialized
DEBUG - 2013-11-13 23:53:58 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:53:58 --> Language Class Initialized
DEBUG - 2013-11-13 23:53:58 --> Loader Class Initialized
DEBUG - 2013-11-13 23:53:58 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:53:58 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:53:58 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:53:58 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:53:58 --> Session Class Initialized
DEBUG - 2013-11-13 23:53:58 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:53:58 --> Session routines successfully run
DEBUG - 2013-11-13 23:53:58 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:53:58 --> Controller Class Initialized
DEBUG - 2013-11-13 23:53:58 --> Model Class Initialized
DEBUG - 2013-11-13 23:53:58 --> Model Class Initialized
DEBUG - 2013-11-13 23:53:58 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:53:58 --> after session initialization................
INFO  - 2013-11-13 23:53:58 --> article id is 111
DEBUG - 2013-11-13 23:53:58 --> Final output sent to browser
DEBUG - 2013-11-13 23:53:58 --> Total execution time: 0.0440
DEBUG - 2013-11-13 23:54:02 --> Config Class Initialized
DEBUG - 2013-11-13 23:54:02 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:54:02 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:54:02 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:54:02 --> URI Class Initialized
DEBUG - 2013-11-13 23:54:02 --> Router Class Initialized
DEBUG - 2013-11-13 23:54:02 --> Output Class Initialized
DEBUG - 2013-11-13 23:54:02 --> Security Class Initialized
DEBUG - 2013-11-13 23:54:02 --> Input Class Initialized
DEBUG - 2013-11-13 23:54:02 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:54:02 --> Language Class Initialized
DEBUG - 2013-11-13 23:54:02 --> Loader Class Initialized
DEBUG - 2013-11-13 23:54:02 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:54:02 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:54:02 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:54:02 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:54:02 --> Session Class Initialized
DEBUG - 2013-11-13 23:54:02 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:54:02 --> Session routines successfully run
DEBUG - 2013-11-13 23:54:02 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:54:02 --> Controller Class Initialized
DEBUG - 2013-11-13 23:54:02 --> Model Class Initialized
DEBUG - 2013-11-13 23:54:02 --> Model Class Initialized
DEBUG - 2013-11-13 23:54:02 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:54:02 --> after session initialization................
INFO  - 2013-11-13 23:54:02 --> inside retrieve most commented forum topic 
INFO  - 2013-11-13 23:54:02 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
INFO  - 2013-11-13 23:54:02 --> inside retrieving first 20 topics 
INFO  - 2013-11-13 23:54:02 --> SELECT `t`.`id_topicforum`, upper(t.name) as name, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
LIMIT 20
INFO  - 2013-11-13 23:54:02 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-13 23:54:02 --> SELECT `ff`.`id_forum` as id, `ff`.`name`, count(f.id_forum) as sub_forum
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` is null 
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`
INFO  - 2013-11-13 23:54:02 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-13 23:54:02 --> inside retrieving comments topic id and drug id is 1
INFO  - 2013-11-13 23:54:02 --> SELECT `tc`.`id_topiccomment`, `tc`.`comment`, `tc`.`timecreated`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-13 23:54:02 --> inside retrieving comments topic id 1
INFO  - 2013-11-13 23:54:02 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
INFO  - 2013-11-13 23:54:02 --> after forums has been clicked.................
INFO  - 2013-11-13 23:54:02 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-11-13 23:54:02 --> File loaded: ../pharmaray-application/views/forum.php
DEBUG - 2013-11-13 23:54:02 --> Final output sent to browser
DEBUG - 2013-11-13 23:54:02 --> Total execution time: 0.1440
DEBUG - 2013-11-13 23:54:02 --> Config Class Initialized
DEBUG - 2013-11-13 23:54:02 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:54:02 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:54:02 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:54:02 --> URI Class Initialized
DEBUG - 2013-11-13 23:54:02 --> Router Class Initialized
DEBUG - 2013-11-13 23:54:02 --> Output Class Initialized
DEBUG - 2013-11-13 23:54:02 --> Security Class Initialized
DEBUG - 2013-11-13 23:54:02 --> Input Class Initialized
DEBUG - 2013-11-13 23:54:02 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:54:02 --> Language Class Initialized
DEBUG - 2013-11-13 23:54:02 --> Loader Class Initialized
DEBUG - 2013-11-13 23:54:02 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:54:02 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:54:02 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:54:02 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:54:02 --> Session Class Initialized
DEBUG - 2013-11-13 23:54:02 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:54:02 --> Session routines successfully run
DEBUG - 2013-11-13 23:54:02 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:54:02 --> Controller Class Initialized
DEBUG - 2013-11-13 23:54:02 --> Model Class Initialized
DEBUG - 2013-11-13 23:54:02 --> Model Class Initialized
DEBUG - 2013-11-13 23:54:02 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:54:02 --> after session initialization................
ERROR - 2013-11-13 23:54:02 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-13 23:54:02 --> Config Class Initialized
DEBUG - 2013-11-13 23:54:02 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:54:02 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:54:02 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:54:02 --> URI Class Initialized
DEBUG - 2013-11-13 23:54:02 --> Router Class Initialized
ERROR - 2013-11-13 23:54:02 --> 404 Page Not Found --> css
DEBUG - 2013-11-13 23:54:04 --> Config Class Initialized
DEBUG - 2013-11-13 23:54:04 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:54:04 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:54:04 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:54:04 --> URI Class Initialized
DEBUG - 2013-11-13 23:54:04 --> Router Class Initialized
DEBUG - 2013-11-13 23:54:04 --> Output Class Initialized
DEBUG - 2013-11-13 23:54:04 --> Security Class Initialized
DEBUG - 2013-11-13 23:54:04 --> Input Class Initialized
DEBUG - 2013-11-13 23:54:04 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:54:04 --> Language Class Initialized
DEBUG - 2013-11-13 23:54:04 --> Loader Class Initialized
DEBUG - 2013-11-13 23:54:04 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:54:04 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:54:04 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:54:04 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:54:04 --> Session Class Initialized
DEBUG - 2013-11-13 23:54:04 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:54:04 --> Session routines successfully run
DEBUG - 2013-11-13 23:54:04 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:54:04 --> Controller Class Initialized
DEBUG - 2013-11-13 23:54:04 --> Model Class Initialized
DEBUG - 2013-11-13 23:54:04 --> Model Class Initialized
DEBUG - 2013-11-13 23:54:04 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:54:04 --> after session initialization................
INFO  - 2013-11-13 23:54:04 --> inside the retrieve ajax topic comment page.................
INFO  - 2013-11-13 23:54:04 --> inside retrieving comments member id and forum topic id is 1
INFO  - 2013-11-13 23:54:04 --> 10==============================10
INFO  - 2013-11-13 23:54:04 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10, 10
INFO  - 2013-11-13 23:54:04 --> [{"id":"3","comment":"this is not just right","timecreated":"2013-10-24 14:21:05","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"2","comment":"This is just not right...I have had this for a very long time that it drives me crazy","timecreated":"2013-10-24 14:14:47","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"1","comment":"check this comment now....","timecreated":"2013-10-24 14:14:12","membername":"Elvis onuorah","membertypeimage":"profilem1"}]
DEBUG - 2013-11-13 23:54:04 --> Final output sent to browser
DEBUG - 2013-11-13 23:54:04 --> Total execution time: 0.0530
DEBUG - 2013-11-13 23:54:07 --> Config Class Initialized
DEBUG - 2013-11-13 23:54:07 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:54:07 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:54:07 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:54:07 --> URI Class Initialized
DEBUG - 2013-11-13 23:54:07 --> Router Class Initialized
DEBUG - 2013-11-13 23:54:07 --> Output Class Initialized
DEBUG - 2013-11-13 23:54:07 --> Security Class Initialized
DEBUG - 2013-11-13 23:54:07 --> Input Class Initialized
DEBUG - 2013-11-13 23:54:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:54:07 --> Language Class Initialized
DEBUG - 2013-11-13 23:54:07 --> Loader Class Initialized
DEBUG - 2013-11-13 23:54:07 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:54:07 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:54:07 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:54:07 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:54:07 --> Session Class Initialized
DEBUG - 2013-11-13 23:54:07 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:54:07 --> Session routines successfully run
DEBUG - 2013-11-13 23:54:07 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:54:07 --> Controller Class Initialized
DEBUG - 2013-11-13 23:54:07 --> Model Class Initialized
DEBUG - 2013-11-13 23:54:07 --> Model Class Initialized
DEBUG - 2013-11-13 23:54:07 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:54:07 --> after session initialization................
INFO  - 2013-11-13 23:54:07 --> Topics ::::::::::===>SELECT `ft`.`id_topicforum`, `ft`.`name`, `ft`.`description`
FROM (`forum_topic` ft)
WHERE `ft`.`id_topicforum` =  '10'
ORDER BY `ft`.`name`
INFO  - 2013-11-13 23:54:07 --> inside retrieving comments member id and forum topic id is 10
INFO  - 2013-11-13 23:54:07 --> 10==============================0
INFO  - 2013-11-13 23:54:07 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 10
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-13 23:54:07 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 10
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-13 23:54:07 --> inside retrieving comments topic id is 10
INFO  - 2013-11-13 23:54:07 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 10
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
DEBUG - 2013-11-13 23:54:07 --> Final output sent to browser
DEBUG - 2013-11-13 23:54:07 --> Total execution time: 0.0820
DEBUG - 2013-11-13 23:54:11 --> Config Class Initialized
DEBUG - 2013-11-13 23:54:11 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:54:11 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:54:11 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:54:11 --> URI Class Initialized
DEBUG - 2013-11-13 23:54:11 --> Router Class Initialized
DEBUG - 2013-11-13 23:54:11 --> Output Class Initialized
DEBUG - 2013-11-13 23:54:11 --> Security Class Initialized
DEBUG - 2013-11-13 23:54:11 --> Input Class Initialized
DEBUG - 2013-11-13 23:54:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:54:11 --> Language Class Initialized
DEBUG - 2013-11-13 23:54:11 --> Loader Class Initialized
DEBUG - 2013-11-13 23:54:11 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:54:11 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:54:11 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:54:11 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:54:11 --> Session Class Initialized
DEBUG - 2013-11-13 23:54:11 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:54:11 --> Session routines successfully run
DEBUG - 2013-11-13 23:54:11 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:54:11 --> Controller Class Initialized
DEBUG - 2013-11-13 23:54:11 --> Model Class Initialized
DEBUG - 2013-11-13 23:54:11 --> Model Class Initialized
DEBUG - 2013-11-13 23:54:11 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:54:11 --> after session initialization................
INFO  - 2013-11-13 23:54:11 --> Topics ::::::::::===>SELECT `ft`.`id_topicforum`, `ft`.`name`, `ft`.`description`
FROM (`forum_topic` ft)
WHERE `ft`.`id_topicforum` =  '12'
ORDER BY `ft`.`name`
INFO  - 2013-11-13 23:54:11 --> inside retrieving comments member id and forum topic id is 12
INFO  - 2013-11-13 23:54:11 --> 10==============================0
INFO  - 2013-11-13 23:54:11 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 12
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-13 23:54:11 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 12
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-13 23:54:11 --> inside retrieving comments topic id is 12
INFO  - 2013-11-13 23:54:11 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 12
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
DEBUG - 2013-11-13 23:54:11 --> Final output sent to browser
DEBUG - 2013-11-13 23:54:11 --> Total execution time: 0.0590
DEBUG - 2013-11-13 23:54:13 --> Config Class Initialized
DEBUG - 2013-11-13 23:54:13 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:54:13 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:54:13 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:54:13 --> URI Class Initialized
DEBUG - 2013-11-13 23:54:13 --> Router Class Initialized
DEBUG - 2013-11-13 23:54:13 --> Output Class Initialized
DEBUG - 2013-11-13 23:54:13 --> Security Class Initialized
DEBUG - 2013-11-13 23:54:13 --> Input Class Initialized
DEBUG - 2013-11-13 23:54:13 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:54:13 --> Language Class Initialized
DEBUG - 2013-11-13 23:54:13 --> Loader Class Initialized
DEBUG - 2013-11-13 23:54:13 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:54:13 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:54:13 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:54:13 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:54:13 --> Session Class Initialized
DEBUG - 2013-11-13 23:54:13 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:54:13 --> Session routines successfully run
DEBUG - 2013-11-13 23:54:13 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:54:13 --> Controller Class Initialized
DEBUG - 2013-11-13 23:54:13 --> Model Class Initialized
DEBUG - 2013-11-13 23:54:13 --> Model Class Initialized
DEBUG - 2013-11-13 23:54:13 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:54:13 --> after session initialization................
INFO  - 2013-11-13 23:54:13 --> Topics ::::::::::===>SELECT `ft`.`id_topicforum`, `ft`.`name`, `ft`.`description`
FROM (`forum_topic` ft)
WHERE `ft`.`id_topicforum` =  '2'
ORDER BY `ft`.`name`
INFO  - 2013-11-13 23:54:13 --> inside retrieving comments member id and forum topic id is 2
INFO  - 2013-11-13 23:54:13 --> 10==============================0
INFO  - 2013-11-13 23:54:13 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-13 23:54:13 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-13 23:54:13 --> inside retrieving comments topic id is 2
INFO  - 2013-11-13 23:54:13 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
DEBUG - 2013-11-13 23:54:13 --> Final output sent to browser
DEBUG - 2013-11-13 23:54:13 --> Total execution time: 0.0610
DEBUG - 2013-11-13 23:54:15 --> Config Class Initialized
DEBUG - 2013-11-13 23:54:15 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:54:15 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:54:15 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:54:15 --> URI Class Initialized
DEBUG - 2013-11-13 23:54:15 --> Router Class Initialized
DEBUG - 2013-11-13 23:54:15 --> Output Class Initialized
DEBUG - 2013-11-13 23:54:15 --> Security Class Initialized
DEBUG - 2013-11-13 23:54:15 --> Input Class Initialized
DEBUG - 2013-11-13 23:54:15 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:54:15 --> Language Class Initialized
DEBUG - 2013-11-13 23:54:15 --> Loader Class Initialized
DEBUG - 2013-11-13 23:54:15 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:54:15 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:54:15 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:54:15 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:54:15 --> Session Class Initialized
DEBUG - 2013-11-13 23:54:15 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:54:15 --> Session routines successfully run
DEBUG - 2013-11-13 23:54:15 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:54:15 --> Controller Class Initialized
DEBUG - 2013-11-13 23:54:15 --> Model Class Initialized
DEBUG - 2013-11-13 23:54:15 --> Model Class Initialized
DEBUG - 2013-11-13 23:54:15 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:54:15 --> after session initialization................
INFO  - 2013-11-13 23:54:15 --> Topics ::::::::::===>SELECT `ft`.`id_topicforum`, `ft`.`name`, `ft`.`description`
FROM (`forum_topic` ft)
WHERE `ft`.`id_topicforum` =  '1'
ORDER BY `ft`.`name`
INFO  - 2013-11-13 23:54:15 --> inside retrieving comments member id and forum topic id is 1
INFO  - 2013-11-13 23:54:15 --> 10==============================0
INFO  - 2013-11-13 23:54:15 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-13 23:54:15 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-13 23:54:15 --> inside retrieving comments topic id is 1
INFO  - 2013-11-13 23:54:15 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
DEBUG - 2013-11-13 23:54:15 --> Final output sent to browser
DEBUG - 2013-11-13 23:54:15 --> Total execution time: 0.0730
DEBUG - 2013-11-13 23:54:19 --> Config Class Initialized
DEBUG - 2013-11-13 23:54:19 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:54:19 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:54:19 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:54:19 --> URI Class Initialized
DEBUG - 2013-11-13 23:54:19 --> Router Class Initialized
DEBUG - 2013-11-13 23:54:19 --> Output Class Initialized
DEBUG - 2013-11-13 23:54:19 --> Security Class Initialized
DEBUG - 2013-11-13 23:54:19 --> Input Class Initialized
DEBUG - 2013-11-13 23:54:19 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:54:19 --> Language Class Initialized
DEBUG - 2013-11-13 23:54:19 --> Loader Class Initialized
DEBUG - 2013-11-13 23:54:19 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:54:19 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:54:19 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:54:19 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:54:19 --> Session Class Initialized
DEBUG - 2013-11-13 23:54:19 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:54:19 --> Session routines successfully run
DEBUG - 2013-11-13 23:54:19 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:54:19 --> Controller Class Initialized
DEBUG - 2013-11-13 23:54:19 --> Model Class Initialized
DEBUG - 2013-11-13 23:54:19 --> Model Class Initialized
DEBUG - 2013-11-13 23:54:19 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:54:19 --> after session initialization................
INFO  - 2013-11-13 23:54:19 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 23:54:19 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 23:54:19 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 23:54:19 --> inside retrieving locations 
INFO  - 2013-11-13 23:54:19 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 23:54:19 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 23:54:19 --> Final output sent to browser
DEBUG - 2013-11-13 23:54:19 --> Total execution time: 0.0610
DEBUG - 2013-11-13 23:54:28 --> Config Class Initialized
DEBUG - 2013-11-13 23:54:28 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:54:28 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:54:28 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:54:28 --> URI Class Initialized
DEBUG - 2013-11-13 23:54:28 --> Router Class Initialized
DEBUG - 2013-11-13 23:54:28 --> Output Class Initialized
DEBUG - 2013-11-13 23:54:28 --> Security Class Initialized
DEBUG - 2013-11-13 23:54:28 --> Input Class Initialized
DEBUG - 2013-11-13 23:54:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:54:28 --> Language Class Initialized
DEBUG - 2013-11-13 23:54:28 --> Loader Class Initialized
DEBUG - 2013-11-13 23:54:28 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:54:28 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:54:28 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:54:28 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:54:28 --> Session Class Initialized
DEBUG - 2013-11-13 23:54:28 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:54:28 --> Session routines successfully run
DEBUG - 2013-11-13 23:54:28 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:54:28 --> Controller Class Initialized
DEBUG - 2013-11-13 23:54:28 --> Model Class Initialized
DEBUG - 2013-11-13 23:54:28 --> Model Class Initialized
DEBUG - 2013-11-13 23:54:28 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:54:28 --> after session initialization................
DEBUG - 2013-11-13 23:54:28 --> Config Class Initialized
DEBUG - 2013-11-13 23:54:28 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:54:28 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:54:28 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:54:28 --> URI Class Initialized
DEBUG - 2013-11-13 23:54:28 --> Router Class Initialized
DEBUG - 2013-11-13 23:54:28 --> No URI present. Default controller set.
DEBUG - 2013-11-13 23:54:28 --> Output Class Initialized
DEBUG - 2013-11-13 23:54:28 --> Security Class Initialized
DEBUG - 2013-11-13 23:54:28 --> Input Class Initialized
DEBUG - 2013-11-13 23:54:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:54:28 --> Language Class Initialized
DEBUG - 2013-11-13 23:54:28 --> Loader Class Initialized
DEBUG - 2013-11-13 23:54:28 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:54:28 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:54:28 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:54:28 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:54:28 --> Session Class Initialized
DEBUG - 2013-11-13 23:54:28 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:54:28 --> A session cookie was not found.
DEBUG - 2013-11-13 23:54:28 --> Session routines successfully run
DEBUG - 2013-11-13 23:54:28 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:54:28 --> Controller Class Initialized
INFO  - 2013-11-13 23:54:28 --> the form message==>
INFO  - 2013-11-13 23:54:28 --> The session id is ========>8ce0e59c8f87b67c9a9a5a285e4d0db3 and the member id is =======>
INFO  - 2013-11-13 23:54:28 --> after the retrieving session list.................//////////
DEBUG - 2013-11-13 23:54:28 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-11-13 23:54:28 --> Final output sent to browser
DEBUG - 2013-11-13 23:54:28 --> Total execution time: 0.0560
DEBUG - 2013-11-13 23:54:30 --> Config Class Initialized
DEBUG - 2013-11-13 23:54:30 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:54:30 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:54:30 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:54:30 --> URI Class Initialized
DEBUG - 2013-11-13 23:54:30 --> Router Class Initialized
DEBUG - 2013-11-13 23:54:30 --> Output Class Initialized
DEBUG - 2013-11-13 23:54:30 --> Security Class Initialized
DEBUG - 2013-11-13 23:54:30 --> Input Class Initialized
DEBUG - 2013-11-13 23:54:30 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:54:30 --> Language Class Initialized
DEBUG - 2013-11-13 23:54:30 --> Loader Class Initialized
DEBUG - 2013-11-13 23:54:30 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:54:30 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:54:30 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:54:30 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:54:30 --> Session Class Initialized
DEBUG - 2013-11-13 23:54:30 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:54:30 --> Session routines successfully run
DEBUG - 2013-11-13 23:54:30 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:54:30 --> Controller Class Initialized
DEBUG - 2013-11-13 23:54:30 --> Model Class Initialized
DEBUG - 2013-11-13 23:54:30 --> Model Class Initialized
DEBUG - 2013-11-13 23:54:30 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:54:30 --> after session initialization................
INFO  - 2013-11-13 23:54:30 --> after rays has been clicked.................
INFO  - 2013-11-13 23:54:30 --> last article id is 0
INFO  - 2013-11-13 23:54:30 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:54:30 --> 1 the guest only data>>>>>
INFO  - 2013-11-13 23:54:30 --> 1 the guest only data>> AFTER >>>
INFO  - 2013-11-13 23:54:30 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:54:30 --> 0 the guest only data>>>>>
INFO  - 2013-11-13 23:54:30 --> 0 the guest only data>> AFTER >>>#111
INFO  - 2013-11-13 23:54:30 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:54:30 --> 0 the guest only data>>>>>#111
INFO  - 2013-11-13 23:54:30 --> 0 the guest only data>> AFTER >>>#110
INFO  - 2013-11-13 23:54:30 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:54:30 --> 0 the guest only data>>>>>#110
INFO  - 2013-11-13 23:54:30 --> 0 the guest only data>> AFTER >>>#109
INFO  - 2013-11-13 23:54:30 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:54:30 --> 0 the guest only data>>>>>#109
INFO  - 2013-11-13 23:54:30 --> 0 the guest only data>> AFTER >>>#108
INFO  - 2013-11-13 23:54:30 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:54:30 --> 0 the guest only data>>>>>#108
INFO  - 2013-11-13 23:54:30 --> 0 the guest only data>> AFTER >>>#107
INFO  - 2013-11-13 23:54:30 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:54:30 --> 1 the guest only data>>>>>#107
INFO  - 2013-11-13 23:54:30 --> 1 the guest only data>> AFTER >>>#107
INFO  - 2013-11-13 23:54:30 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:54:30 --> 0 the guest only data>>>>>#107
INFO  - 2013-11-13 23:54:30 --> 0 the guest only data>> AFTER >>>#105
INFO  - 2013-11-13 23:54:30 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:54:30 --> 0 the guest only data>>>>>#105
INFO  - 2013-11-13 23:54:30 --> 0 the guest only data>> AFTER >>>#104
INFO  - 2013-11-13 23:54:30 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:54:30 --> 0 the guest only data>>>>>#104
INFO  - 2013-11-13 23:54:30 --> 0 the guest only data>> AFTER >>>#103
INFO  - 2013-11-13 23:54:30 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:54:30 --> 0 the guest only data>>>>>#103
INFO  - 2013-11-13 23:54:30 --> 0 the guest only data>> AFTER >>>#102
INFO  - 2013-11-13 23:54:30 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:54:30 --> 0 the guest only data>>>>>#102
INFO  - 2013-11-13 23:54:30 --> 0 the guest only data>> AFTER >>>#101
INFO  - 2013-11-13 23:54:30 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:54:30 --> 0 the guest only data>>>>>#101
INFO  - 2013-11-13 23:54:30 --> 0 the guest only data>> AFTER >>>#100
INFO  - 2013-11-13 23:54:30 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:54:30 --> 0 the guest only data>>>>>#100
INFO  - 2013-11-13 23:54:30 --> 0 the guest only data>> AFTER >>>#99
INFO  - 2013-11-13 23:54:30 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:54:30 --> 0 the guest only data>>>>>#99
INFO  - 2013-11-13 23:54:30 --> 0 the guest only data>> AFTER >>>#98
INFO  - 2013-11-13 23:54:30 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:54:30 --> 0 the guest only data>>>>>#98
INFO  - 2013-11-13 23:54:30 --> 0 the guest only data>> AFTER >>>#97
INFO  - 2013-11-13 23:54:30 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:54:30 --> 1 the guest only data>>>>>#97
INFO  - 2013-11-13 23:54:30 --> 1 the guest only data>> AFTER >>>#97
INFO  - 2013-11-13 23:54:30 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:54:30 --> 0 the guest only data>>>>>#97
INFO  - 2013-11-13 23:54:30 --> 0 the guest only data>> AFTER >>>#95
INFO  - 2013-11-13 23:54:30 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:54:30 --> 0 the guest only data>>>>>#95
INFO  - 2013-11-13 23:54:30 --> 0 the guest only data>> AFTER >>>#94
INFO  - 2013-11-13 23:54:30 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-13 23:54:30 --> 1 the guest only data>>>>>#94
INFO  - 2013-11-13 23:54:30 --> 1 the guest only data>> AFTER >>>#94
DEBUG - 2013-11-13 23:54:30 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-11-13 23:54:30 --> Final output sent to browser
DEBUG - 2013-11-13 23:54:30 --> Total execution time: 0.0730
DEBUG - 2013-11-13 23:55:52 --> Config Class Initialized
DEBUG - 2013-11-13 23:55:52 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:55:52 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:55:52 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:55:52 --> URI Class Initialized
DEBUG - 2013-11-13 23:55:52 --> Router Class Initialized
DEBUG - 2013-11-13 23:55:52 --> Output Class Initialized
DEBUG - 2013-11-13 23:55:52 --> Security Class Initialized
DEBUG - 2013-11-13 23:55:52 --> Input Class Initialized
DEBUG - 2013-11-13 23:55:52 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:55:52 --> Language Class Initialized
DEBUG - 2013-11-13 23:55:52 --> Loader Class Initialized
DEBUG - 2013-11-13 23:55:52 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:55:52 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:55:52 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:55:52 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:55:52 --> Session Class Initialized
DEBUG - 2013-11-13 23:55:52 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:55:52 --> Session routines successfully run
DEBUG - 2013-11-13 23:55:52 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:55:52 --> Controller Class Initialized
DEBUG - 2013-11-13 23:55:52 --> Model Class Initialized
DEBUG - 2013-11-13 23:55:52 --> Model Class Initialized
DEBUG - 2013-11-13 23:55:52 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:55:52 --> after session initialization................
INFO  - 2013-11-13 23:55:52 --> inside retrieving pharmacy by location id 2
INFO  - 2013-11-13 23:55:52 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '2'
LIMIT 25
DEBUG - 2013-11-13 23:55:52 --> Final output sent to browser
DEBUG - 2013-11-13 23:55:52 --> Total execution time: 0.0610
DEBUG - 2013-11-13 23:56:45 --> Config Class Initialized
DEBUG - 2013-11-13 23:56:45 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:56:45 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:56:45 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:56:45 --> URI Class Initialized
DEBUG - 2013-11-13 23:56:45 --> Router Class Initialized
DEBUG - 2013-11-13 23:56:45 --> Output Class Initialized
DEBUG - 2013-11-13 23:56:45 --> Security Class Initialized
DEBUG - 2013-11-13 23:56:45 --> Input Class Initialized
DEBUG - 2013-11-13 23:56:45 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:56:45 --> Language Class Initialized
DEBUG - 2013-11-13 23:56:45 --> Loader Class Initialized
DEBUG - 2013-11-13 23:56:45 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:56:45 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:56:45 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:56:45 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:56:45 --> Session Class Initialized
DEBUG - 2013-11-13 23:56:45 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:56:45 --> Session routines successfully run
DEBUG - 2013-11-13 23:56:45 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:56:45 --> Controller Class Initialized
DEBUG - 2013-11-13 23:56:45 --> Model Class Initialized
DEBUG - 2013-11-13 23:56:45 --> Model Class Initialized
DEBUG - 2013-11-13 23:56:45 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:56:45 --> after session initialization................
INFO  - 2013-11-13 23:56:45 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 23:56:45 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 23:56:45 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 23:56:45 --> inside retrieving locations 
INFO  - 2013-11-13 23:56:45 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 23:56:45 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 23:56:45 --> Final output sent to browser
DEBUG - 2013-11-13 23:56:45 --> Total execution time: 0.0660
DEBUG - 2013-11-13 23:56:47 --> Config Class Initialized
DEBUG - 2013-11-13 23:56:47 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:56:47 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:56:47 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:56:47 --> URI Class Initialized
DEBUG - 2013-11-13 23:56:47 --> Router Class Initialized
DEBUG - 2013-11-13 23:56:47 --> Output Class Initialized
DEBUG - 2013-11-13 23:56:47 --> Security Class Initialized
DEBUG - 2013-11-13 23:56:47 --> Input Class Initialized
DEBUG - 2013-11-13 23:56:47 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:56:47 --> Language Class Initialized
DEBUG - 2013-11-13 23:56:47 --> Loader Class Initialized
DEBUG - 2013-11-13 23:56:47 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:56:47 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:56:47 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:56:47 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:56:47 --> Session Class Initialized
DEBUG - 2013-11-13 23:56:47 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:56:47 --> Session routines successfully run
DEBUG - 2013-11-13 23:56:47 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:56:47 --> Controller Class Initialized
DEBUG - 2013-11-13 23:56:47 --> Model Class Initialized
DEBUG - 2013-11-13 23:56:47 --> Model Class Initialized
DEBUG - 2013-11-13 23:56:47 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:56:47 --> after session initialization................
INFO  - 2013-11-13 23:56:47 --> inside retrieving pharmacy by location id 1
INFO  - 2013-11-13 23:56:47 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '1'
LIMIT 25
DEBUG - 2013-11-13 23:56:47 --> Final output sent to browser
DEBUG - 2013-11-13 23:56:47 --> Total execution time: 0.0500
DEBUG - 2013-11-13 23:57:39 --> Config Class Initialized
DEBUG - 2013-11-13 23:57:39 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:57:39 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:57:39 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:57:39 --> URI Class Initialized
DEBUG - 2013-11-13 23:57:39 --> Router Class Initialized
DEBUG - 2013-11-13 23:57:39 --> Output Class Initialized
DEBUG - 2013-11-13 23:57:39 --> Security Class Initialized
DEBUG - 2013-11-13 23:57:39 --> Input Class Initialized
DEBUG - 2013-11-13 23:57:39 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:57:39 --> Language Class Initialized
DEBUG - 2013-11-13 23:57:39 --> Loader Class Initialized
DEBUG - 2013-11-13 23:57:39 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:57:39 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:57:39 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:57:39 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:57:39 --> Session Class Initialized
DEBUG - 2013-11-13 23:57:39 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:57:39 --> Session routines successfully run
DEBUG - 2013-11-13 23:57:39 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:57:39 --> Controller Class Initialized
DEBUG - 2013-11-13 23:57:39 --> Model Class Initialized
DEBUG - 2013-11-13 23:57:39 --> Model Class Initialized
DEBUG - 2013-11-13 23:57:39 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:57:39 --> after session initialization................
INFO  - 2013-11-13 23:57:39 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 23:57:39 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 23:57:39 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 23:57:39 --> inside retrieving locations 
INFO  - 2013-11-13 23:57:39 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 23:57:39 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 23:57:39 --> Final output sent to browser
DEBUG - 2013-11-13 23:57:39 --> Total execution time: 0.0620
DEBUG - 2013-11-13 23:57:42 --> Config Class Initialized
DEBUG - 2013-11-13 23:57:42 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:57:42 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:57:42 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:57:42 --> URI Class Initialized
DEBUG - 2013-11-13 23:57:42 --> Router Class Initialized
DEBUG - 2013-11-13 23:57:42 --> Output Class Initialized
DEBUG - 2013-11-13 23:57:42 --> Security Class Initialized
DEBUG - 2013-11-13 23:57:42 --> Input Class Initialized
DEBUG - 2013-11-13 23:57:42 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:57:42 --> Language Class Initialized
DEBUG - 2013-11-13 23:57:42 --> Loader Class Initialized
DEBUG - 2013-11-13 23:57:42 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:57:42 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:57:42 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:57:42 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:57:42 --> Session Class Initialized
DEBUG - 2013-11-13 23:57:42 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:57:42 --> Session routines successfully run
DEBUG - 2013-11-13 23:57:42 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:57:42 --> Controller Class Initialized
DEBUG - 2013-11-13 23:57:42 --> Model Class Initialized
DEBUG - 2013-11-13 23:57:42 --> Model Class Initialized
DEBUG - 2013-11-13 23:57:42 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:57:42 --> after session initialization................
INFO  - 2013-11-13 23:57:42 --> inside retrieving pharmacy by location id 2
INFO  - 2013-11-13 23:57:42 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '2'
LIMIT 25
DEBUG - 2013-11-13 23:57:42 --> Final output sent to browser
DEBUG - 2013-11-13 23:57:42 --> Total execution time: 0.0490
DEBUG - 2013-11-13 23:57:54 --> Config Class Initialized
DEBUG - 2013-11-13 23:57:54 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:57:54 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:57:54 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:57:54 --> URI Class Initialized
DEBUG - 2013-11-13 23:57:54 --> Router Class Initialized
DEBUG - 2013-11-13 23:57:54 --> Output Class Initialized
DEBUG - 2013-11-13 23:57:54 --> Security Class Initialized
DEBUG - 2013-11-13 23:57:54 --> Input Class Initialized
DEBUG - 2013-11-13 23:57:54 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:57:54 --> Language Class Initialized
DEBUG - 2013-11-13 23:57:54 --> Loader Class Initialized
DEBUG - 2013-11-13 23:57:54 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:57:54 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:57:54 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:57:54 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:57:54 --> Session Class Initialized
DEBUG - 2013-11-13 23:57:54 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:57:54 --> Session routines successfully run
DEBUG - 2013-11-13 23:57:54 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:57:54 --> Controller Class Initialized
DEBUG - 2013-11-13 23:57:54 --> Model Class Initialized
DEBUG - 2013-11-13 23:57:54 --> Model Class Initialized
DEBUG - 2013-11-13 23:57:54 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:57:54 --> after session initialization................
INFO  - 2013-11-13 23:57:55 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 23:57:55 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 23:57:55 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 23:57:55 --> inside retrieving locations 
INFO  - 2013-11-13 23:57:55 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 23:57:55 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 23:57:55 --> Final output sent to browser
DEBUG - 2013-11-13 23:57:55 --> Total execution time: 0.0570
DEBUG - 2013-11-13 23:57:57 --> Config Class Initialized
DEBUG - 2013-11-13 23:57:57 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:57:57 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:57:57 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:57:57 --> URI Class Initialized
DEBUG - 2013-11-13 23:57:57 --> Router Class Initialized
DEBUG - 2013-11-13 23:57:57 --> Output Class Initialized
DEBUG - 2013-11-13 23:57:57 --> Security Class Initialized
DEBUG - 2013-11-13 23:57:57 --> Input Class Initialized
DEBUG - 2013-11-13 23:57:57 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:57:57 --> Language Class Initialized
DEBUG - 2013-11-13 23:57:57 --> Loader Class Initialized
DEBUG - 2013-11-13 23:57:57 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:57:57 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:57:57 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:57:57 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:57:57 --> Session Class Initialized
DEBUG - 2013-11-13 23:57:57 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:57:57 --> Session routines successfully run
DEBUG - 2013-11-13 23:57:57 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:57:57 --> Controller Class Initialized
DEBUG - 2013-11-13 23:57:57 --> Model Class Initialized
DEBUG - 2013-11-13 23:57:57 --> Model Class Initialized
DEBUG - 2013-11-13 23:57:57 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:57:57 --> after session initialization................
INFO  - 2013-11-13 23:57:57 --> inside retrieving pharmacy by location id 1
INFO  - 2013-11-13 23:57:57 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '1'
LIMIT 25
DEBUG - 2013-11-13 23:57:57 --> Final output sent to browser
DEBUG - 2013-11-13 23:57:57 --> Total execution time: 0.0480
DEBUG - 2013-11-13 23:58:14 --> Config Class Initialized
DEBUG - 2013-11-13 23:58:14 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:58:14 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:58:14 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:58:14 --> URI Class Initialized
DEBUG - 2013-11-13 23:58:14 --> Router Class Initialized
DEBUG - 2013-11-13 23:58:14 --> Output Class Initialized
DEBUG - 2013-11-13 23:58:14 --> Security Class Initialized
DEBUG - 2013-11-13 23:58:14 --> Input Class Initialized
DEBUG - 2013-11-13 23:58:14 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:58:14 --> Language Class Initialized
DEBUG - 2013-11-13 23:58:14 --> Loader Class Initialized
DEBUG - 2013-11-13 23:58:14 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:58:14 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:58:14 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:58:14 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:58:14 --> Session Class Initialized
DEBUG - 2013-11-13 23:58:14 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:58:14 --> Session routines successfully run
DEBUG - 2013-11-13 23:58:14 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:58:14 --> Controller Class Initialized
DEBUG - 2013-11-13 23:58:14 --> Model Class Initialized
DEBUG - 2013-11-13 23:58:14 --> Model Class Initialized
DEBUG - 2013-11-13 23:58:14 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:58:14 --> after session initialization................
INFO  - 2013-11-13 23:58:14 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 23:58:14 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 23:58:14 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 23:58:14 --> inside retrieving locations 
INFO  - 2013-11-13 23:58:14 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 23:58:14 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 23:58:14 --> Final output sent to browser
DEBUG - 2013-11-13 23:58:14 --> Total execution time: 0.0500
DEBUG - 2013-11-13 23:58:17 --> Config Class Initialized
DEBUG - 2013-11-13 23:58:17 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:58:17 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:58:17 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:58:17 --> URI Class Initialized
DEBUG - 2013-11-13 23:58:17 --> Router Class Initialized
DEBUG - 2013-11-13 23:58:17 --> Output Class Initialized
DEBUG - 2013-11-13 23:58:17 --> Security Class Initialized
DEBUG - 2013-11-13 23:58:17 --> Input Class Initialized
DEBUG - 2013-11-13 23:58:17 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:58:17 --> Language Class Initialized
DEBUG - 2013-11-13 23:58:17 --> Loader Class Initialized
DEBUG - 2013-11-13 23:58:17 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:58:17 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:58:17 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:58:17 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:58:17 --> Session Class Initialized
DEBUG - 2013-11-13 23:58:17 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:58:17 --> Session routines successfully run
DEBUG - 2013-11-13 23:58:17 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:58:17 --> Controller Class Initialized
DEBUG - 2013-11-13 23:58:17 --> Model Class Initialized
DEBUG - 2013-11-13 23:58:17 --> Model Class Initialized
DEBUG - 2013-11-13 23:58:17 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:58:17 --> after session initialization................
INFO  - 2013-11-13 23:58:17 --> inside retrieving pharmacy by location id 2
INFO  - 2013-11-13 23:58:17 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '2'
LIMIT 25
DEBUG - 2013-11-13 23:58:17 --> Final output sent to browser
DEBUG - 2013-11-13 23:58:17 --> Total execution time: 0.0420
DEBUG - 2013-11-13 23:58:44 --> Config Class Initialized
DEBUG - 2013-11-13 23:58:44 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:58:44 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:58:44 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:58:44 --> URI Class Initialized
DEBUG - 2013-11-13 23:58:44 --> Router Class Initialized
DEBUG - 2013-11-13 23:58:44 --> Output Class Initialized
DEBUG - 2013-11-13 23:58:44 --> Security Class Initialized
DEBUG - 2013-11-13 23:58:44 --> Input Class Initialized
DEBUG - 2013-11-13 23:58:44 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:58:44 --> Language Class Initialized
DEBUG - 2013-11-13 23:58:44 --> Loader Class Initialized
DEBUG - 2013-11-13 23:58:44 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:58:44 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:58:44 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:58:44 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:58:44 --> Session Class Initialized
DEBUG - 2013-11-13 23:58:44 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:58:44 --> Session routines successfully run
DEBUG - 2013-11-13 23:58:44 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:58:44 --> Controller Class Initialized
DEBUG - 2013-11-13 23:58:44 --> Model Class Initialized
DEBUG - 2013-11-13 23:58:44 --> Model Class Initialized
DEBUG - 2013-11-13 23:58:44 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:58:44 --> after session initialization................
INFO  - 2013-11-13 23:58:44 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-13 23:58:44 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-13 23:58:44 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-13 23:58:44 --> inside retrieving locations 
INFO  - 2013-11-13 23:58:44 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-13 23:58:44 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-13 23:58:44 --> Final output sent to browser
DEBUG - 2013-11-13 23:58:44 --> Total execution time: 0.0570
DEBUG - 2013-11-13 23:58:46 --> Config Class Initialized
DEBUG - 2013-11-13 23:58:46 --> Hooks Class Initialized
DEBUG - 2013-11-13 23:58:46 --> Utf8 Class Initialized
DEBUG - 2013-11-13 23:58:46 --> UTF-8 Support Enabled
DEBUG - 2013-11-13 23:58:46 --> URI Class Initialized
DEBUG - 2013-11-13 23:58:46 --> Router Class Initialized
DEBUG - 2013-11-13 23:58:46 --> Output Class Initialized
DEBUG - 2013-11-13 23:58:46 --> Security Class Initialized
DEBUG - 2013-11-13 23:58:46 --> Input Class Initialized
DEBUG - 2013-11-13 23:58:46 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-13 23:58:46 --> Language Class Initialized
DEBUG - 2013-11-13 23:58:46 --> Loader Class Initialized
DEBUG - 2013-11-13 23:58:46 --> Helper loaded: form_helper
DEBUG - 2013-11-13 23:58:46 --> Helper loaded: url_helper
DEBUG - 2013-11-13 23:58:46 --> Helper loaded: html_helper
DEBUG - 2013-11-13 23:58:46 --> Database Driver Class Initialized
DEBUG - 2013-11-13 23:58:46 --> Session Class Initialized
DEBUG - 2013-11-13 23:58:46 --> Helper loaded: string_helper
DEBUG - 2013-11-13 23:58:46 --> Session routines successfully run
DEBUG - 2013-11-13 23:58:46 --> Form Validation Class Initialized
DEBUG - 2013-11-13 23:58:46 --> Controller Class Initialized
DEBUG - 2013-11-13 23:58:46 --> Model Class Initialized
DEBUG - 2013-11-13 23:58:46 --> Model Class Initialized
DEBUG - 2013-11-13 23:58:46 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-13 23:58:46 --> after session initialization................
INFO  - 2013-11-13 23:58:46 --> inside retrieving pharmacy by location id 1
INFO  - 2013-11-13 23:58:46 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '1'
LIMIT 25
DEBUG - 2013-11-13 23:58:46 --> Final output sent to browser
DEBUG - 2013-11-13 23:58:46 --> Total execution time: 0.0530
