<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2013-09-03 11:08:09 --> Config Class Initialized
DEBUG - 2013-09-03 11:08:09 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:08:09 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:08:09 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:08:09 --> URI Class Initialized
DEBUG - 2013-09-03 11:08:09 --> Router Class Initialized
DEBUG - 2013-09-03 11:08:09 --> No URI present. Default controller set.
DEBUG - 2013-09-03 11:08:09 --> Output Class Initialized
DEBUG - 2013-09-03 11:08:09 --> Security Class Initialized
DEBUG - 2013-09-03 11:08:09 --> Input Class Initialized
DEBUG - 2013-09-03 11:08:09 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:08:09 --> Language Class Initialized
DEBUG - 2013-09-03 11:08:09 --> Loader Class Initialized
DEBUG - 2013-09-03 11:08:09 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:08:09 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:08:09 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:08:09 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:08:10 --> Session Class Initialized
DEBUG - 2013-09-03 11:08:10 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:08:10 --> A session cookie was not found.
DEBUG - 2013-09-03 11:08:10 --> Session routines successfully run
DEBUG - 2013-09-03 11:08:10 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:08:10 --> Controller Class Initialized
INFO  - 2013-09-03 11:08:10 --> the form message==>
INFO  - 2013-09-03 11:08:10 --> after the retrieving session list.................//////////
DEBUG - 2013-09-03 11:08:10 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-03 11:08:10 --> Final output sent to browser
DEBUG - 2013-09-03 11:08:10 --> Total execution time: 1.4292
DEBUG - 2013-09-03 11:08:44 --> Config Class Initialized
DEBUG - 2013-09-03 11:08:44 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:08:44 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:08:44 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:08:44 --> URI Class Initialized
DEBUG - 2013-09-03 11:08:44 --> Router Class Initialized
DEBUG - 2013-09-03 11:08:44 --> Output Class Initialized
DEBUG - 2013-09-03 11:08:44 --> Security Class Initialized
DEBUG - 2013-09-03 11:08:44 --> Input Class Initialized
DEBUG - 2013-09-03 11:08:44 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:08:44 --> Language Class Initialized
DEBUG - 2013-09-03 11:08:44 --> Loader Class Initialized
DEBUG - 2013-09-03 11:08:44 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:08:44 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:08:44 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:08:44 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:08:44 --> Session Class Initialized
DEBUG - 2013-09-03 11:08:44 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:08:44 --> Session routines successfully run
DEBUG - 2013-09-03 11:08:44 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:08:44 --> Controller Class Initialized
DEBUG - 2013-09-03 11:08:44 --> Model Class Initialized
DEBUG - 2013-09-03 11:08:44 --> Model Class Initialized
DEBUG - 2013-09-03 11:08:44 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:08:44 --> after session initialization................
INFO  - 2013-09-03 11:08:44 --> inside rays login auth.............
DEBUG - 2013-09-03 11:08:44 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-09-03 11:08:44 --> XSS Filtering completed
DEBUG - 2013-09-03 11:08:44 --> XSS Filtering completed
INFO  - 2013-09-03 11:08:45 --> before getting the relation of member............6
INFO  - 2013-09-03 11:08:46 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-09-03 11:08:46 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-09-03 11:08:46 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-03 11:08:46 --> inside retrieving vacancy for member
INFO  - 2013-09-03 11:08:46 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-09-03 11:08:46 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-09-03 11:08:46 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-09-03 11:08:47 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 11:08:47 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-09-03 11:08:47 -->  column name inside view is 0 column Data is Array
INFO  - 2013-09-03 11:08:47 -->  column name inside view is 1 column Data is Array
INFO  - 2013-09-03 11:08:47 -->  column name inside view is 2 column Data is Array
INFO  - 2013-09-03 11:08:47 -->  column name inside view is 3 column Data is Array
INFO  - 2013-09-03 11:08:47 -->  column name inside view is 0 column Data is Array
INFO  - 2013-09-03 11:08:47 -->  column name inside view is 1 column Data is Array
INFO  - 2013-09-03 11:08:47 -->  column name inside view is 2 column Data is Array
INFO  - 2013-09-03 11:08:47 -->  column name inside view is 3 column Data is Array
INFO  - 2013-09-03 11:08:47 -->  column name inside view is 4 column Data is Array
INFO  - 2013-09-03 11:08:47 -->  column name inside view is 0 column Data is Array
DEBUG - 2013-09-03 11:08:47 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-09-03 11:08:47 --> Final output sent to browser
DEBUG - 2013-09-03 11:08:47 --> Total execution time: 3.2560
DEBUG - 2013-09-03 11:08:48 --> Config Class Initialized
DEBUG - 2013-09-03 11:08:48 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:08:48 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:08:48 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:08:48 --> URI Class Initialized
DEBUG - 2013-09-03 11:08:48 --> Router Class Initialized
DEBUG - 2013-09-03 11:08:48 --> Output Class Initialized
DEBUG - 2013-09-03 11:08:48 --> Security Class Initialized
DEBUG - 2013-09-03 11:08:48 --> Input Class Initialized
DEBUG - 2013-09-03 11:08:48 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:08:48 --> Language Class Initialized
DEBUG - 2013-09-03 11:08:48 --> Loader Class Initialized
DEBUG - 2013-09-03 11:08:48 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:08:48 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:08:48 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:08:48 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:08:48 --> Session Class Initialized
DEBUG - 2013-09-03 11:08:48 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:08:48 --> Session routines successfully run
DEBUG - 2013-09-03 11:08:48 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:08:48 --> Controller Class Initialized
DEBUG - 2013-09-03 11:08:48 --> Model Class Initialized
DEBUG - 2013-09-03 11:08:48 --> Model Class Initialized
DEBUG - 2013-09-03 11:08:48 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:08:48 --> after session initialization................
ERROR - 2013-09-03 11:08:48 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-09-03 11:08:51 --> Config Class Initialized
DEBUG - 2013-09-03 11:08:51 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:08:51 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:08:51 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:08:51 --> URI Class Initialized
DEBUG - 2013-09-03 11:08:51 --> Router Class Initialized
DEBUG - 2013-09-03 11:08:51 --> Output Class Initialized
DEBUG - 2013-09-03 11:08:51 --> Security Class Initialized
DEBUG - 2013-09-03 11:08:51 --> Input Class Initialized
DEBUG - 2013-09-03 11:08:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:08:51 --> Language Class Initialized
DEBUG - 2013-09-03 11:08:51 --> Loader Class Initialized
DEBUG - 2013-09-03 11:08:51 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:08:51 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:08:51 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:08:51 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:08:51 --> Session Class Initialized
DEBUG - 2013-09-03 11:08:51 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:08:51 --> Session routines successfully run
DEBUG - 2013-09-03 11:08:51 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:08:51 --> Controller Class Initialized
DEBUG - 2013-09-03 11:08:51 --> Model Class Initialized
DEBUG - 2013-09-03 11:08:51 --> Model Class Initialized
DEBUG - 2013-09-03 11:08:51 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:08:51 --> after session initialization................
INFO  - 2013-09-03 11:08:51 --> inside the auto suggest page.................
INFO  - 2013-09-03 11:08:51 --> after the list array.................
INFO  - 2013-09-03 11:08:51 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%a%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 11:08:51 --> after retrieving the data from db.................
INFO  - 2013-09-03 11:08:51 --> looping.................
INFO  - 2013-09-03 11:08:51 --> looping.................
INFO  - 2013-09-03 11:08:51 --> looping.................
INFO  - 2013-09-03 11:08:51 --> looping.................
DEBUG - 2013-09-03 11:08:51 --> Final output sent to browser
DEBUG - 2013-09-03 11:08:51 --> Total execution time: 0.1267
DEBUG - 2013-09-03 11:08:51 --> Config Class Initialized
DEBUG - 2013-09-03 11:08:51 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:08:51 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:08:51 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:08:51 --> URI Class Initialized
DEBUG - 2013-09-03 11:08:51 --> Router Class Initialized
DEBUG - 2013-09-03 11:08:51 --> Output Class Initialized
DEBUG - 2013-09-03 11:08:51 --> Security Class Initialized
DEBUG - 2013-09-03 11:08:51 --> Input Class Initialized
DEBUG - 2013-09-03 11:08:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:08:51 --> Language Class Initialized
DEBUG - 2013-09-03 11:08:51 --> Loader Class Initialized
DEBUG - 2013-09-03 11:08:51 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:08:51 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:08:51 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:08:51 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:08:51 --> Session Class Initialized
DEBUG - 2013-09-03 11:08:51 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:08:51 --> Session routines successfully run
DEBUG - 2013-09-03 11:08:51 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:08:51 --> Controller Class Initialized
DEBUG - 2013-09-03 11:08:51 --> Model Class Initialized
DEBUG - 2013-09-03 11:08:51 --> Model Class Initialized
DEBUG - 2013-09-03 11:08:51 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:08:51 --> after session initialization................
INFO  - 2013-09-03 11:08:51 --> inside the auto suggest page.................
INFO  - 2013-09-03 11:08:51 --> after the list array.................
INFO  - 2013-09-03 11:08:51 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%am%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 11:08:51 --> after retrieving the data from db.................
INFO  - 2013-09-03 11:08:51 --> looping.................
DEBUG - 2013-09-03 11:08:51 --> Final output sent to browser
DEBUG - 2013-09-03 11:08:51 --> Total execution time: 0.0648
DEBUG - 2013-09-03 11:08:51 --> Config Class Initialized
DEBUG - 2013-09-03 11:08:51 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:08:51 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:08:51 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:08:51 --> URI Class Initialized
DEBUG - 2013-09-03 11:08:51 --> Router Class Initialized
DEBUG - 2013-09-03 11:08:51 --> Output Class Initialized
DEBUG - 2013-09-03 11:08:51 --> Security Class Initialized
DEBUG - 2013-09-03 11:08:51 --> Input Class Initialized
DEBUG - 2013-09-03 11:08:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:08:51 --> Language Class Initialized
DEBUG - 2013-09-03 11:08:51 --> Loader Class Initialized
DEBUG - 2013-09-03 11:08:51 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:08:51 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:08:51 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:08:51 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:08:51 --> Session Class Initialized
DEBUG - 2013-09-03 11:08:51 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:08:51 --> Session routines successfully run
DEBUG - 2013-09-03 11:08:51 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:08:51 --> Controller Class Initialized
DEBUG - 2013-09-03 11:08:51 --> Model Class Initialized
DEBUG - 2013-09-03 11:08:51 --> Model Class Initialized
DEBUG - 2013-09-03 11:08:51 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:08:51 --> after session initialization................
INFO  - 2013-09-03 11:08:51 --> inside the auto suggest page.................
INFO  - 2013-09-03 11:08:51 --> after the list array.................
INFO  - 2013-09-03 11:08:51 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%ama%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 11:08:51 --> after retrieving the data from db.................
INFO  - 2013-09-03 11:08:51 --> looping.................
DEBUG - 2013-09-03 11:08:51 --> Final output sent to browser
DEBUG - 2013-09-03 11:08:51 --> Total execution time: 0.0681
DEBUG - 2013-09-03 11:08:53 --> Config Class Initialized
DEBUG - 2013-09-03 11:08:53 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:08:53 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:08:53 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:08:53 --> URI Class Initialized
DEBUG - 2013-09-03 11:08:53 --> Router Class Initialized
DEBUG - 2013-09-03 11:08:53 --> Output Class Initialized
DEBUG - 2013-09-03 11:08:53 --> Security Class Initialized
DEBUG - 2013-09-03 11:08:53 --> Input Class Initialized
DEBUG - 2013-09-03 11:08:53 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:08:53 --> Language Class Initialized
DEBUG - 2013-09-03 11:08:53 --> Loader Class Initialized
DEBUG - 2013-09-03 11:08:53 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:08:53 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:08:53 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:08:53 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:08:53 --> Session Class Initialized
DEBUG - 2013-09-03 11:08:53 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:08:53 --> Session routines successfully run
DEBUG - 2013-09-03 11:08:53 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:08:53 --> Controller Class Initialized
DEBUG - 2013-09-03 11:08:53 --> Model Class Initialized
DEBUG - 2013-09-03 11:08:53 --> Model Class Initialized
DEBUG - 2013-09-03 11:08:53 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:08:53 --> after session initialization................
INFO  - 2013-09-03 11:08:53 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '2'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 11:08:53 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 11:08:53 --> 5==============================0
INFO  - 2013-09-03 11:08:53 --> SELECT dc.id_drugcomment as id, dc.comment, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
DEBUG - 2013-09-03 11:08:53 --> Final output sent to browser
DEBUG - 2013-09-03 11:08:53 --> Total execution time: 0.2186
DEBUG - 2013-09-03 11:10:37 --> Config Class Initialized
DEBUG - 2013-09-03 11:10:37 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:10:37 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:10:37 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:10:37 --> URI Class Initialized
DEBUG - 2013-09-03 11:10:37 --> Router Class Initialized
DEBUG - 2013-09-03 11:10:37 --> Output Class Initialized
DEBUG - 2013-09-03 11:10:37 --> Security Class Initialized
DEBUG - 2013-09-03 11:10:37 --> Input Class Initialized
DEBUG - 2013-09-03 11:10:37 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:10:37 --> Language Class Initialized
DEBUG - 2013-09-03 11:10:37 --> Loader Class Initialized
DEBUG - 2013-09-03 11:10:37 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:10:37 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:10:37 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:10:37 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:10:37 --> Session Class Initialized
DEBUG - 2013-09-03 11:10:37 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:10:37 --> Session routines successfully run
DEBUG - 2013-09-03 11:10:37 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:10:37 --> Controller Class Initialized
DEBUG - 2013-09-03 11:10:37 --> Model Class Initialized
DEBUG - 2013-09-03 11:10:37 --> Model Class Initialized
DEBUG - 2013-09-03 11:10:37 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:10:37 --> after session initialization................
INFO  - 2013-09-03 11:10:37 --> inside rays login auth.............
DEBUG - 2013-09-03 11:10:37 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-09-03 11:10:37 --> XSS Filtering completed
DEBUG - 2013-09-03 11:10:37 --> XSS Filtering completed
INFO  - 2013-09-03 11:10:37 --> before getting the relation of member............6
INFO  - 2013-09-03 11:10:37 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-09-03 11:10:37 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-09-03 11:10:37 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-03 11:10:37 --> inside retrieving vacancy for member
INFO  - 2013-09-03 11:10:37 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-09-03 11:10:37 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-09-03 11:10:37 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-09-03 11:10:37 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 11:10:37 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-09-03 11:10:37 -->  column name inside view is 0 column Data is Array
INFO  - 2013-09-03 11:10:37 -->  column name inside view is 1 column Data is Array
INFO  - 2013-09-03 11:10:37 -->  column name inside view is 2 column Data is Array
INFO  - 2013-09-03 11:10:37 -->  column name inside view is 3 column Data is Array
INFO  - 2013-09-03 11:10:37 -->  column name inside view is 0 column Data is Array
INFO  - 2013-09-03 11:10:37 -->  column name inside view is 1 column Data is Array
INFO  - 2013-09-03 11:10:37 -->  column name inside view is 2 column Data is Array
INFO  - 2013-09-03 11:10:37 -->  column name inside view is 3 column Data is Array
INFO  - 2013-09-03 11:10:37 -->  column name inside view is 4 column Data is Array
INFO  - 2013-09-03 11:10:37 -->  column name inside view is 0 column Data is Array
DEBUG - 2013-09-03 11:10:37 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-09-03 11:10:37 --> Final output sent to browser
DEBUG - 2013-09-03 11:10:37 --> Total execution time: 0.1268
DEBUG - 2013-09-03 11:10:37 --> Config Class Initialized
DEBUG - 2013-09-03 11:10:37 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:10:37 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:10:37 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:10:37 --> URI Class Initialized
DEBUG - 2013-09-03 11:10:37 --> Router Class Initialized
DEBUG - 2013-09-03 11:10:37 --> Output Class Initialized
DEBUG - 2013-09-03 11:10:37 --> Security Class Initialized
DEBUG - 2013-09-03 11:10:37 --> Input Class Initialized
DEBUG - 2013-09-03 11:10:37 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:10:37 --> Language Class Initialized
DEBUG - 2013-09-03 11:10:37 --> Loader Class Initialized
DEBUG - 2013-09-03 11:10:37 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:10:37 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:10:37 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:10:37 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:10:37 --> Session Class Initialized
DEBUG - 2013-09-03 11:10:37 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:10:37 --> Session routines successfully run
DEBUG - 2013-09-03 11:10:37 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:10:37 --> Controller Class Initialized
DEBUG - 2013-09-03 11:10:37 --> Model Class Initialized
DEBUG - 2013-09-03 11:10:37 --> Model Class Initialized
DEBUG - 2013-09-03 11:10:37 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:10:37 --> after session initialization................
ERROR - 2013-09-03 11:10:37 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-09-03 11:10:39 --> Config Class Initialized
DEBUG - 2013-09-03 11:10:39 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:10:39 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:10:39 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:10:39 --> URI Class Initialized
DEBUG - 2013-09-03 11:10:39 --> Router Class Initialized
DEBUG - 2013-09-03 11:10:39 --> Output Class Initialized
DEBUG - 2013-09-03 11:10:39 --> Security Class Initialized
DEBUG - 2013-09-03 11:10:39 --> Input Class Initialized
DEBUG - 2013-09-03 11:10:39 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:10:39 --> Language Class Initialized
DEBUG - 2013-09-03 11:10:39 --> Loader Class Initialized
DEBUG - 2013-09-03 11:10:39 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:10:39 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:10:39 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:10:39 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:10:39 --> Session Class Initialized
DEBUG - 2013-09-03 11:10:39 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:10:39 --> Session routines successfully run
DEBUG - 2013-09-03 11:10:39 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:10:39 --> Controller Class Initialized
DEBUG - 2013-09-03 11:10:39 --> Model Class Initialized
DEBUG - 2013-09-03 11:10:39 --> Model Class Initialized
DEBUG - 2013-09-03 11:10:39 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:10:39 --> after session initialization................
INFO  - 2013-09-03 11:10:39 --> inside the auto suggest page.................
INFO  - 2013-09-03 11:10:39 --> after the list array.................
INFO  - 2013-09-03 11:10:39 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%amala%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 11:10:39 --> after retrieving the data from db.................
INFO  - 2013-09-03 11:10:39 --> looping.................
DEBUG - 2013-09-03 11:10:39 --> Final output sent to browser
DEBUG - 2013-09-03 11:10:39 --> Total execution time: 0.0733
DEBUG - 2013-09-03 11:10:41 --> Config Class Initialized
DEBUG - 2013-09-03 11:10:41 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:10:41 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:10:41 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:10:41 --> URI Class Initialized
DEBUG - 2013-09-03 11:10:41 --> Router Class Initialized
DEBUG - 2013-09-03 11:10:41 --> Output Class Initialized
DEBUG - 2013-09-03 11:10:41 --> Security Class Initialized
DEBUG - 2013-09-03 11:10:41 --> Input Class Initialized
DEBUG - 2013-09-03 11:10:41 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:10:41 --> Language Class Initialized
DEBUG - 2013-09-03 11:10:41 --> Loader Class Initialized
DEBUG - 2013-09-03 11:10:41 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:10:41 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:10:41 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:10:41 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:10:41 --> Session Class Initialized
DEBUG - 2013-09-03 11:10:41 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:10:41 --> Session routines successfully run
DEBUG - 2013-09-03 11:10:41 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:10:41 --> Controller Class Initialized
DEBUG - 2013-09-03 11:10:41 --> Model Class Initialized
DEBUG - 2013-09-03 11:10:41 --> Model Class Initialized
DEBUG - 2013-09-03 11:10:41 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:10:41 --> after session initialization................
INFO  - 2013-09-03 11:10:41 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '2'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 11:10:41 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 11:10:41 --> 5==============================0
INFO  - 2013-09-03 11:10:41 --> SELECT dc.id_drugcomment as id, dc.comment, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
DEBUG - 2013-09-03 11:10:41 --> Final output sent to browser
DEBUG - 2013-09-03 11:10:41 --> Total execution time: 0.0758
DEBUG - 2013-09-03 11:13:21 --> Config Class Initialized
DEBUG - 2013-09-03 11:13:21 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:13:21 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:13:21 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:13:21 --> URI Class Initialized
DEBUG - 2013-09-03 11:13:21 --> Router Class Initialized
DEBUG - 2013-09-03 11:13:21 --> Output Class Initialized
DEBUG - 2013-09-03 11:13:21 --> Security Class Initialized
DEBUG - 2013-09-03 11:13:21 --> Input Class Initialized
DEBUG - 2013-09-03 11:13:21 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:13:21 --> Language Class Initialized
DEBUG - 2013-09-03 11:13:21 --> Loader Class Initialized
DEBUG - 2013-09-03 11:13:22 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:13:22 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:13:22 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:13:22 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:13:22 --> Session Class Initialized
DEBUG - 2013-09-03 11:13:22 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:13:22 --> Session routines successfully run
DEBUG - 2013-09-03 11:13:22 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:13:22 --> Controller Class Initialized
DEBUG - 2013-09-03 11:13:22 --> Model Class Initialized
DEBUG - 2013-09-03 11:13:22 --> Model Class Initialized
DEBUG - 2013-09-03 11:13:22 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:13:22 --> after session initialization................
INFO  - 2013-09-03 11:13:22 --> inside rays login auth.............
DEBUG - 2013-09-03 11:13:22 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-09-03 11:13:22 --> XSS Filtering completed
DEBUG - 2013-09-03 11:13:22 --> XSS Filtering completed
INFO  - 2013-09-03 11:13:22 --> before getting the relation of member............6
INFO  - 2013-09-03 11:13:22 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-09-03 11:13:22 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 11:13:22 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-03 11:13:22 --> inside retrieving vacancy for member
INFO  - 2013-09-03 11:13:22 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-09-03 11:13:22 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 11:13:22 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-09-03 11:13:22 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '2'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 11:13:22 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
ERROR - 2013-09-03 11:13:22 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\Pharmarays\pharmaray-application\views\userpage.php 53
INFO  - 2013-09-03 11:13:22 -->  column name inside view is 0 column Data is Array
INFO  - 2013-09-03 11:13:22 -->  column name inside view is 1 column Data is Array
INFO  - 2013-09-03 11:13:22 -->  column name inside view is 2 column Data is Array
INFO  - 2013-09-03 11:13:22 -->  column name inside view is 3 column Data is Array
DEBUG - 2013-09-03 11:13:22 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-09-03 11:13:22 --> Final output sent to browser
DEBUG - 2013-09-03 11:13:22 --> Total execution time: 0.1071
DEBUG - 2013-09-03 11:13:22 --> Config Class Initialized
DEBUG - 2013-09-03 11:13:22 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:13:22 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:13:22 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:13:22 --> URI Class Initialized
DEBUG - 2013-09-03 11:13:22 --> Router Class Initialized
DEBUG - 2013-09-03 11:13:22 --> Output Class Initialized
DEBUG - 2013-09-03 11:13:22 --> Security Class Initialized
DEBUG - 2013-09-03 11:13:22 --> Input Class Initialized
DEBUG - 2013-09-03 11:13:22 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:13:22 --> Language Class Initialized
DEBUG - 2013-09-03 11:13:22 --> Loader Class Initialized
DEBUG - 2013-09-03 11:13:22 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:13:22 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:13:22 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:13:22 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:13:22 --> Session Class Initialized
DEBUG - 2013-09-03 11:13:22 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:13:22 --> Session routines successfully run
DEBUG - 2013-09-03 11:13:22 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:13:22 --> Controller Class Initialized
DEBUG - 2013-09-03 11:13:22 --> Model Class Initialized
DEBUG - 2013-09-03 11:13:22 --> Model Class Initialized
DEBUG - 2013-09-03 11:13:22 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:13:22 --> after session initialization................
ERROR - 2013-09-03 11:13:22 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-09-03 11:17:51 --> Config Class Initialized
DEBUG - 2013-09-03 11:17:51 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:17:51 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:17:51 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:17:51 --> URI Class Initialized
DEBUG - 2013-09-03 11:17:51 --> Router Class Initialized
DEBUG - 2013-09-03 11:17:51 --> Output Class Initialized
DEBUG - 2013-09-03 11:17:51 --> Security Class Initialized
DEBUG - 2013-09-03 11:17:51 --> Input Class Initialized
DEBUG - 2013-09-03 11:17:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:17:51 --> Language Class Initialized
DEBUG - 2013-09-03 11:17:51 --> Loader Class Initialized
DEBUG - 2013-09-03 11:17:51 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:17:51 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:17:51 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:17:51 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:17:51 --> Session Class Initialized
DEBUG - 2013-09-03 11:17:51 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:17:51 --> Session routines successfully run
DEBUG - 2013-09-03 11:17:51 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:17:51 --> Controller Class Initialized
DEBUG - 2013-09-03 11:17:51 --> Model Class Initialized
DEBUG - 2013-09-03 11:17:51 --> Model Class Initialized
DEBUG - 2013-09-03 11:17:51 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:17:51 --> after session initialization................
INFO  - 2013-09-03 11:17:51 --> inside rays login auth.............
DEBUG - 2013-09-03 11:17:51 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-09-03 11:17:51 --> XSS Filtering completed
DEBUG - 2013-09-03 11:17:51 --> XSS Filtering completed
INFO  - 2013-09-03 11:17:51 --> before getting the relation of member............6
INFO  - 2013-09-03 11:17:51 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-09-03 11:17:51 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 11:17:51 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-03 11:17:51 --> inside retrieving vacancy for member
INFO  - 2013-09-03 11:17:51 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-09-03 11:17:51 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 11:17:51 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-09-03 11:17:51 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '2'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 11:17:51 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
ERROR - 2013-09-03 11:17:51 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\Pharmarays\pharmaray-application\views\userpage.php 56
INFO  - 2013-09-03 11:17:51 -->  column name inside view is 0 column Data is Array
INFO  - 2013-09-03 11:17:51 -->  column name inside view is 1 column Data is Array
INFO  - 2013-09-03 11:17:51 -->  column name inside view is 2 column Data is Array
INFO  - 2013-09-03 11:17:51 -->  column name inside view is 3 column Data is Array
DEBUG - 2013-09-03 11:17:51 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-09-03 11:17:51 --> Final output sent to browser
DEBUG - 2013-09-03 11:17:51 --> Total execution time: 0.0859
DEBUG - 2013-09-03 11:17:51 --> Config Class Initialized
DEBUG - 2013-09-03 11:17:51 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:17:51 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:17:51 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:17:51 --> URI Class Initialized
DEBUG - 2013-09-03 11:17:51 --> Router Class Initialized
DEBUG - 2013-09-03 11:17:51 --> Output Class Initialized
DEBUG - 2013-09-03 11:17:51 --> Security Class Initialized
DEBUG - 2013-09-03 11:17:51 --> Input Class Initialized
DEBUG - 2013-09-03 11:17:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:17:51 --> Language Class Initialized
DEBUG - 2013-09-03 11:17:51 --> Loader Class Initialized
DEBUG - 2013-09-03 11:17:51 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:17:51 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:17:51 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:17:51 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:17:51 --> Session Class Initialized
DEBUG - 2013-09-03 11:17:51 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:17:51 --> Session routines successfully run
DEBUG - 2013-09-03 11:17:51 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:17:51 --> Controller Class Initialized
DEBUG - 2013-09-03 11:17:51 --> Model Class Initialized
DEBUG - 2013-09-03 11:17:51 --> Model Class Initialized
DEBUG - 2013-09-03 11:17:51 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:17:51 --> after session initialization................
ERROR - 2013-09-03 11:17:51 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-09-03 11:19:39 --> Config Class Initialized
DEBUG - 2013-09-03 11:19:39 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:19:39 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:19:39 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:19:39 --> URI Class Initialized
DEBUG - 2013-09-03 11:19:39 --> Router Class Initialized
DEBUG - 2013-09-03 11:19:39 --> Output Class Initialized
DEBUG - 2013-09-03 11:19:39 --> Security Class Initialized
DEBUG - 2013-09-03 11:19:39 --> Input Class Initialized
DEBUG - 2013-09-03 11:19:39 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:19:39 --> Language Class Initialized
DEBUG - 2013-09-03 11:19:39 --> Loader Class Initialized
DEBUG - 2013-09-03 11:19:39 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:19:39 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:19:39 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:19:39 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:19:39 --> Session Class Initialized
DEBUG - 2013-09-03 11:19:39 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:19:39 --> Session routines successfully run
DEBUG - 2013-09-03 11:19:39 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:19:39 --> Controller Class Initialized
DEBUG - 2013-09-03 11:19:39 --> Model Class Initialized
DEBUG - 2013-09-03 11:19:39 --> Model Class Initialized
DEBUG - 2013-09-03 11:19:39 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:19:39 --> after session initialization................
INFO  - 2013-09-03 11:19:39 --> inside rays login auth.............
DEBUG - 2013-09-03 11:19:39 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-09-03 11:19:39 --> XSS Filtering completed
DEBUG - 2013-09-03 11:19:39 --> XSS Filtering completed
INFO  - 2013-09-03 11:19:40 --> before getting the relation of member............6
INFO  - 2013-09-03 11:19:40 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-09-03 11:19:40 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 11:19:40 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-03 11:19:40 --> inside retrieving vacancy for member
INFO  - 2013-09-03 11:19:40 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-09-03 11:19:40 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 11:19:40 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-09-03 11:19:40 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '2'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 11:19:40 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
ERROR - 2013-09-03 11:19:40 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\Pharmarays\pharmaray-application\views\userpage.php 57
INFO  - 2013-09-03 11:19:40 -->  column name inside view is 0 column Data is Array
INFO  - 2013-09-03 11:19:40 -->  column name inside view is 1 column Data is Array
INFO  - 2013-09-03 11:19:40 -->  column name inside view is 2 column Data is Array
INFO  - 2013-09-03 11:19:40 -->  column name inside view is 3 column Data is Array
DEBUG - 2013-09-03 11:19:40 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-09-03 11:19:40 --> Final output sent to browser
DEBUG - 2013-09-03 11:19:40 --> Total execution time: 0.1341
DEBUG - 2013-09-03 11:19:40 --> Config Class Initialized
DEBUG - 2013-09-03 11:19:40 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:19:40 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:19:40 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:19:40 --> URI Class Initialized
DEBUG - 2013-09-03 11:19:40 --> Router Class Initialized
DEBUG - 2013-09-03 11:19:40 --> Output Class Initialized
DEBUG - 2013-09-03 11:19:40 --> Security Class Initialized
DEBUG - 2013-09-03 11:19:40 --> Input Class Initialized
DEBUG - 2013-09-03 11:19:40 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:19:40 --> Language Class Initialized
DEBUG - 2013-09-03 11:19:40 --> Loader Class Initialized
DEBUG - 2013-09-03 11:19:40 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:19:40 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:19:40 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:19:40 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:19:40 --> Session Class Initialized
DEBUG - 2013-09-03 11:19:40 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:19:40 --> Session routines successfully run
DEBUG - 2013-09-03 11:19:40 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:19:40 --> Controller Class Initialized
DEBUG - 2013-09-03 11:19:40 --> Model Class Initialized
DEBUG - 2013-09-03 11:19:40 --> Model Class Initialized
DEBUG - 2013-09-03 11:19:40 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:19:40 --> after session initialization................
ERROR - 2013-09-03 11:19:40 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-09-03 11:20:05 --> Config Class Initialized
DEBUG - 2013-09-03 11:20:05 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:20:05 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:20:05 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:20:05 --> URI Class Initialized
DEBUG - 2013-09-03 11:20:05 --> Router Class Initialized
DEBUG - 2013-09-03 11:20:05 --> Output Class Initialized
DEBUG - 2013-09-03 11:20:05 --> Security Class Initialized
DEBUG - 2013-09-03 11:20:05 --> Input Class Initialized
DEBUG - 2013-09-03 11:20:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:20:05 --> Language Class Initialized
DEBUG - 2013-09-03 11:20:05 --> Loader Class Initialized
DEBUG - 2013-09-03 11:20:06 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:20:06 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:20:06 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:20:06 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:20:06 --> Session Class Initialized
DEBUG - 2013-09-03 11:20:06 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:20:06 --> Session routines successfully run
DEBUG - 2013-09-03 11:20:06 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:20:06 --> Controller Class Initialized
DEBUG - 2013-09-03 11:20:06 --> Model Class Initialized
DEBUG - 2013-09-03 11:20:06 --> Model Class Initialized
DEBUG - 2013-09-03 11:20:06 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:20:06 --> after session initialization................
INFO  - 2013-09-03 11:20:06 --> inside rays login auth.............
DEBUG - 2013-09-03 11:20:06 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-09-03 11:20:06 --> XSS Filtering completed
DEBUG - 2013-09-03 11:20:06 --> XSS Filtering completed
INFO  - 2013-09-03 11:20:06 --> before getting the relation of member............6
INFO  - 2013-09-03 11:20:06 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-09-03 11:20:06 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 11:20:06 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-03 11:20:06 --> inside retrieving vacancy for member
INFO  - 2013-09-03 11:20:06 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-09-03 11:20:06 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 11:20:06 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-09-03 11:20:06 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '2'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 11:20:06 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
ERROR - 2013-09-03 11:20:06 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\Pharmarays\pharmaray-application\views\userpage.php 57
INFO  - 2013-09-03 11:20:06 -->  column name inside view is 0 column Data is Array
INFO  - 2013-09-03 11:20:06 -->  column name inside view is 1 column Data is Array
INFO  - 2013-09-03 11:20:06 -->  column name inside view is 2 column Data is Array
INFO  - 2013-09-03 11:20:06 -->  column name inside view is 3 column Data is Array
DEBUG - 2013-09-03 11:20:06 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-09-03 11:20:06 --> Final output sent to browser
DEBUG - 2013-09-03 11:20:06 --> Total execution time: 0.1290
DEBUG - 2013-09-03 11:20:06 --> Config Class Initialized
DEBUG - 2013-09-03 11:20:06 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:20:06 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:20:06 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:20:06 --> URI Class Initialized
DEBUG - 2013-09-03 11:20:06 --> Router Class Initialized
DEBUG - 2013-09-03 11:20:06 --> Output Class Initialized
DEBUG - 2013-09-03 11:20:06 --> Security Class Initialized
DEBUG - 2013-09-03 11:20:06 --> Input Class Initialized
DEBUG - 2013-09-03 11:20:06 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:20:06 --> Language Class Initialized
DEBUG - 2013-09-03 11:20:06 --> Loader Class Initialized
DEBUG - 2013-09-03 11:20:06 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:20:06 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:20:06 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:20:06 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:20:06 --> Session Class Initialized
DEBUG - 2013-09-03 11:20:06 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:20:06 --> Session routines successfully run
DEBUG - 2013-09-03 11:20:06 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:20:06 --> Controller Class Initialized
DEBUG - 2013-09-03 11:20:06 --> Model Class Initialized
DEBUG - 2013-09-03 11:20:06 --> Model Class Initialized
DEBUG - 2013-09-03 11:20:06 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:20:06 --> after session initialization................
ERROR - 2013-09-03 11:20:06 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-09-03 11:20:35 --> Config Class Initialized
DEBUG - 2013-09-03 11:20:35 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:20:35 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:20:35 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:20:35 --> URI Class Initialized
DEBUG - 2013-09-03 11:20:35 --> Router Class Initialized
DEBUG - 2013-09-03 11:20:35 --> Output Class Initialized
DEBUG - 2013-09-03 11:20:35 --> Security Class Initialized
DEBUG - 2013-09-03 11:20:35 --> Input Class Initialized
DEBUG - 2013-09-03 11:20:35 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:20:35 --> Language Class Initialized
DEBUG - 2013-09-03 11:20:35 --> Loader Class Initialized
DEBUG - 2013-09-03 11:20:35 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:20:35 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:20:35 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:20:35 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:20:35 --> Session Class Initialized
DEBUG - 2013-09-03 11:20:35 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:20:35 --> Session routines successfully run
DEBUG - 2013-09-03 11:20:35 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:20:35 --> Controller Class Initialized
DEBUG - 2013-09-03 11:20:35 --> Model Class Initialized
DEBUG - 2013-09-03 11:20:35 --> Model Class Initialized
DEBUG - 2013-09-03 11:20:35 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:20:35 --> after session initialization................
INFO  - 2013-09-03 11:20:35 --> inside rays login auth.............
DEBUG - 2013-09-03 11:20:35 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-09-03 11:20:35 --> XSS Filtering completed
DEBUG - 2013-09-03 11:20:35 --> XSS Filtering completed
INFO  - 2013-09-03 11:20:35 --> before getting the relation of member............6
INFO  - 2013-09-03 11:20:35 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-09-03 11:20:35 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 11:20:35 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-03 11:20:35 --> inside retrieving vacancy for member
INFO  - 2013-09-03 11:20:35 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-09-03 11:20:35 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 11:20:35 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-09-03 11:20:35 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '2'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 11:20:35 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
ERROR - 2013-09-03 11:20:35 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\Pharmarays\pharmaray-application\views\userpage.php 55
ERROR - 2013-09-03 11:20:35 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\Pharmarays\pharmaray-application\views\userpage.php 55
ERROR - 2013-09-03 11:20:35 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\Pharmarays\pharmaray-application\views\userpage.php 57
INFO  - 2013-09-03 11:20:35 -->  column name inside view is 0 column Data is Array
INFO  - 2013-09-03 11:20:35 -->  column name inside view is 1 column Data is Array
INFO  - 2013-09-03 11:20:35 -->  column name inside view is 2 column Data is Array
INFO  - 2013-09-03 11:20:35 -->  column name inside view is 3 column Data is Array
DEBUG - 2013-09-03 11:20:35 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-09-03 11:20:35 --> Final output sent to browser
DEBUG - 2013-09-03 11:20:35 --> Total execution time: 0.1019
DEBUG - 2013-09-03 11:20:35 --> Config Class Initialized
DEBUG - 2013-09-03 11:20:35 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:20:35 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:20:35 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:20:35 --> URI Class Initialized
DEBUG - 2013-09-03 11:20:35 --> Router Class Initialized
DEBUG - 2013-09-03 11:20:36 --> Output Class Initialized
DEBUG - 2013-09-03 11:20:36 --> Security Class Initialized
DEBUG - 2013-09-03 11:20:36 --> Input Class Initialized
DEBUG - 2013-09-03 11:20:36 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:20:36 --> Language Class Initialized
DEBUG - 2013-09-03 11:20:36 --> Loader Class Initialized
DEBUG - 2013-09-03 11:20:36 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:20:36 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:20:36 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:20:36 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:20:36 --> Session Class Initialized
DEBUG - 2013-09-03 11:20:36 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:20:36 --> Session routines successfully run
DEBUG - 2013-09-03 11:20:36 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:20:36 --> Controller Class Initialized
DEBUG - 2013-09-03 11:20:36 --> Model Class Initialized
DEBUG - 2013-09-03 11:20:36 --> Model Class Initialized
DEBUG - 2013-09-03 11:20:36 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:20:36 --> after session initialization................
ERROR - 2013-09-03 11:20:36 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-09-03 11:21:32 --> Config Class Initialized
DEBUG - 2013-09-03 11:21:32 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:21:32 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:21:32 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:21:32 --> URI Class Initialized
DEBUG - 2013-09-03 11:21:32 --> Router Class Initialized
DEBUG - 2013-09-03 11:21:32 --> Output Class Initialized
DEBUG - 2013-09-03 11:21:32 --> Security Class Initialized
DEBUG - 2013-09-03 11:21:32 --> Input Class Initialized
DEBUG - 2013-09-03 11:21:32 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:21:32 --> Language Class Initialized
DEBUG - 2013-09-03 11:21:32 --> Loader Class Initialized
DEBUG - 2013-09-03 11:21:32 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:21:32 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:21:32 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:21:32 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:21:32 --> Session Class Initialized
DEBUG - 2013-09-03 11:21:32 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:21:32 --> Session routines successfully run
DEBUG - 2013-09-03 11:21:32 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:21:32 --> Controller Class Initialized
DEBUG - 2013-09-03 11:21:32 --> Model Class Initialized
DEBUG - 2013-09-03 11:21:32 --> Model Class Initialized
DEBUG - 2013-09-03 11:21:32 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:21:32 --> after session initialization................
INFO  - 2013-09-03 11:21:32 --> inside rays login auth.............
DEBUG - 2013-09-03 11:21:32 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-09-03 11:21:32 --> XSS Filtering completed
DEBUG - 2013-09-03 11:21:32 --> XSS Filtering completed
INFO  - 2013-09-03 11:21:32 --> before getting the relation of member............6
INFO  - 2013-09-03 11:21:32 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-09-03 11:21:32 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 11:21:32 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-03 11:21:32 --> inside retrieving vacancy for member
INFO  - 2013-09-03 11:21:32 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-09-03 11:21:32 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 11:21:32 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-09-03 11:21:32 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '2'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 11:21:32 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
ERROR - 2013-09-03 11:21:32 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\Pharmarays\pharmaray-application\views\userpage.php 55
INFO  - 2013-09-03 11:21:32 -->  column name inside view is 0 column Data is Array
INFO  - 2013-09-03 11:21:32 -->  column name inside view is 1 column Data is Array
INFO  - 2013-09-03 11:21:32 -->  column name inside view is 2 column Data is Array
INFO  - 2013-09-03 11:21:32 -->  column name inside view is 3 column Data is Array
DEBUG - 2013-09-03 11:21:32 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-09-03 11:21:32 --> Final output sent to browser
DEBUG - 2013-09-03 11:21:32 --> Total execution time: 0.0968
DEBUG - 2013-09-03 11:21:32 --> Config Class Initialized
DEBUG - 2013-09-03 11:21:32 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:21:32 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:21:32 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:21:32 --> URI Class Initialized
DEBUG - 2013-09-03 11:21:32 --> Router Class Initialized
DEBUG - 2013-09-03 11:21:32 --> Output Class Initialized
DEBUG - 2013-09-03 11:21:32 --> Security Class Initialized
DEBUG - 2013-09-03 11:21:32 --> Input Class Initialized
DEBUG - 2013-09-03 11:21:32 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:21:32 --> Language Class Initialized
DEBUG - 2013-09-03 11:21:32 --> Loader Class Initialized
DEBUG - 2013-09-03 11:21:32 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:21:32 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:21:32 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:21:32 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:21:32 --> Session Class Initialized
DEBUG - 2013-09-03 11:21:32 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:21:32 --> Session routines successfully run
DEBUG - 2013-09-03 11:21:32 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:21:32 --> Controller Class Initialized
DEBUG - 2013-09-03 11:21:32 --> Model Class Initialized
DEBUG - 2013-09-03 11:21:32 --> Model Class Initialized
DEBUG - 2013-09-03 11:21:32 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:21:32 --> after session initialization................
ERROR - 2013-09-03 11:21:32 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-09-03 11:24:12 --> Config Class Initialized
DEBUG - 2013-09-03 11:24:12 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:24:12 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:24:12 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:24:12 --> URI Class Initialized
DEBUG - 2013-09-03 11:24:12 --> Router Class Initialized
DEBUG - 2013-09-03 11:24:12 --> Output Class Initialized
DEBUG - 2013-09-03 11:24:12 --> Security Class Initialized
DEBUG - 2013-09-03 11:24:12 --> Input Class Initialized
DEBUG - 2013-09-03 11:24:12 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:24:12 --> Language Class Initialized
DEBUG - 2013-09-03 11:24:12 --> Loader Class Initialized
DEBUG - 2013-09-03 11:24:12 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:24:12 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:24:12 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:24:12 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:24:12 --> Session Class Initialized
DEBUG - 2013-09-03 11:24:12 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:24:12 --> Session routines successfully run
DEBUG - 2013-09-03 11:24:12 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:24:12 --> Controller Class Initialized
DEBUG - 2013-09-03 11:24:12 --> Model Class Initialized
DEBUG - 2013-09-03 11:24:12 --> Model Class Initialized
DEBUG - 2013-09-03 11:24:12 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:24:12 --> after session initialization................
INFO  - 2013-09-03 11:24:12 --> inside rays login auth.............
DEBUG - 2013-09-03 11:24:12 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-09-03 11:24:12 --> XSS Filtering completed
DEBUG - 2013-09-03 11:24:12 --> XSS Filtering completed
INFO  - 2013-09-03 11:24:12 --> before getting the relation of member............6
INFO  - 2013-09-03 11:24:12 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-09-03 11:24:12 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 11:24:12 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-03 11:24:12 --> inside retrieving vacancy for member
INFO  - 2013-09-03 11:24:12 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-09-03 11:24:12 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 11:24:12 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-09-03 11:24:12 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '2'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 11:24:12 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-09-03 11:24:12 -->  column name inside view is 0 column Data is Array
INFO  - 2013-09-03 11:24:12 -->  column name inside view is 1 column Data is Array
INFO  - 2013-09-03 11:24:12 -->  column name inside view is 2 column Data is Array
INFO  - 2013-09-03 11:24:12 -->  column name inside view is 3 column Data is Array
DEBUG - 2013-09-03 11:24:12 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-09-03 11:24:12 --> Final output sent to browser
DEBUG - 2013-09-03 11:24:12 --> Total execution time: 0.1043
DEBUG - 2013-09-03 11:24:12 --> Config Class Initialized
DEBUG - 2013-09-03 11:24:13 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:24:13 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:24:13 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:24:13 --> URI Class Initialized
DEBUG - 2013-09-03 11:24:13 --> Router Class Initialized
DEBUG - 2013-09-03 11:24:13 --> Output Class Initialized
DEBUG - 2013-09-03 11:24:13 --> Security Class Initialized
DEBUG - 2013-09-03 11:24:13 --> Input Class Initialized
DEBUG - 2013-09-03 11:24:13 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:24:13 --> Language Class Initialized
DEBUG - 2013-09-03 11:24:13 --> Loader Class Initialized
DEBUG - 2013-09-03 11:24:13 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:24:13 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:24:13 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:24:13 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:24:13 --> Session Class Initialized
DEBUG - 2013-09-03 11:24:13 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:24:13 --> Session routines successfully run
DEBUG - 2013-09-03 11:24:13 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:24:13 --> Controller Class Initialized
DEBUG - 2013-09-03 11:24:13 --> Model Class Initialized
DEBUG - 2013-09-03 11:24:13 --> Model Class Initialized
DEBUG - 2013-09-03 11:24:13 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:24:13 --> after session initialization................
ERROR - 2013-09-03 11:24:13 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-09-03 11:24:21 --> Config Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:24:21 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:24:21 --> URI Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Router Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Output Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Security Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Input Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:24:21 --> Language Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Loader Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:24:21 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:24:21 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:24:21 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Session Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:24:21 --> Session routines successfully run
DEBUG - 2013-09-03 11:24:21 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Controller Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Model Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Model Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:24:21 --> after session initialization................
INFO  - 2013-09-03 11:24:21 --> inside the auto suggest page.................
INFO  - 2013-09-03 11:24:21 --> after the list array.................
INFO  - 2013-09-03 11:24:21 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%p%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 11:24:21 --> after retrieving the data from db.................
INFO  - 2013-09-03 11:24:21 --> looping.................
INFO  - 2013-09-03 11:24:21 --> looping.................
DEBUG - 2013-09-03 11:24:21 --> Final output sent to browser
DEBUG - 2013-09-03 11:24:21 --> Total execution time: 0.0669
DEBUG - 2013-09-03 11:24:21 --> Config Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:24:21 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:24:21 --> URI Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Router Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Output Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Security Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Input Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:24:21 --> Language Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Loader Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:24:21 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:24:21 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:24:21 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Session Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:24:21 --> Session routines successfully run
DEBUG - 2013-09-03 11:24:21 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Controller Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Model Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Model Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:24:21 --> after session initialization................
INFO  - 2013-09-03 11:24:21 --> inside the auto suggest page.................
INFO  - 2013-09-03 11:24:21 --> after the list array.................
INFO  - 2013-09-03 11:24:21 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%pa%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 11:24:21 --> after retrieving the data from db.................
INFO  - 2013-09-03 11:24:21 --> looping.................
DEBUG - 2013-09-03 11:24:21 --> Final output sent to browser
DEBUG - 2013-09-03 11:24:21 --> Total execution time: 0.0690
DEBUG - 2013-09-03 11:24:21 --> Config Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:24:21 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:24:21 --> URI Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Router Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Output Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Security Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Input Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:24:21 --> Language Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Loader Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:24:21 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:24:21 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:24:21 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Session Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:24:21 --> Session routines successfully run
DEBUG - 2013-09-03 11:24:21 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Controller Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Model Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Model Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:24:21 --> after session initialization................
INFO  - 2013-09-03 11:24:21 --> inside the auto suggest page.................
INFO  - 2013-09-03 11:24:21 --> after the list array.................
INFO  - 2013-09-03 11:24:21 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%pana%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 11:24:21 --> after retrieving the data from db.................
INFO  - 2013-09-03 11:24:21 --> looping.................
DEBUG - 2013-09-03 11:24:21 --> Final output sent to browser
DEBUG - 2013-09-03 11:24:21 --> Total execution time: 0.0648
DEBUG - 2013-09-03 11:24:21 --> Config Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:24:21 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:24:21 --> URI Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Router Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Output Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Security Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Input Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:24:21 --> Language Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Loader Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:24:21 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:24:21 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:24:21 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Session Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:24:21 --> Session routines successfully run
DEBUG - 2013-09-03 11:24:21 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Controller Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Model Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Model Class Initialized
DEBUG - 2013-09-03 11:24:21 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:24:21 --> after session initialization................
INFO  - 2013-09-03 11:24:21 --> inside the auto suggest page.................
INFO  - 2013-09-03 11:24:21 --> after the list array.................
INFO  - 2013-09-03 11:24:21 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%pana%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 11:24:21 --> after retrieving the data from db.................
INFO  - 2013-09-03 11:24:21 --> looping.................
DEBUG - 2013-09-03 11:24:21 --> Final output sent to browser
DEBUG - 2013-09-03 11:24:21 --> Total execution time: 0.0612
DEBUG - 2013-09-03 11:24:24 --> Config Class Initialized
DEBUG - 2013-09-03 11:24:24 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:24:24 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:24:24 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:24:24 --> URI Class Initialized
DEBUG - 2013-09-03 11:24:24 --> Router Class Initialized
DEBUG - 2013-09-03 11:24:24 --> Output Class Initialized
DEBUG - 2013-09-03 11:24:24 --> Security Class Initialized
DEBUG - 2013-09-03 11:24:24 --> Input Class Initialized
DEBUG - 2013-09-03 11:24:24 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:24:24 --> Language Class Initialized
DEBUG - 2013-09-03 11:24:24 --> Loader Class Initialized
DEBUG - 2013-09-03 11:24:24 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:24:24 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:24:24 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:24:24 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:24:24 --> Session Class Initialized
DEBUG - 2013-09-03 11:24:24 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:24:24 --> Session routines successfully run
DEBUG - 2013-09-03 11:24:24 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:24:24 --> Controller Class Initialized
DEBUG - 2013-09-03 11:24:24 --> Model Class Initialized
DEBUG - 2013-09-03 11:24:24 --> Model Class Initialized
DEBUG - 2013-09-03 11:24:24 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:24:24 --> after session initialization................
INFO  - 2013-09-03 11:24:24 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 11:24:24 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-09-03 11:24:24 --> 5==============================0
INFO  - 2013-09-03 11:24:24 --> SELECT dc.id_drugcomment as id, dc.comment, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
DEBUG - 2013-09-03 11:24:24 --> Final output sent to browser
DEBUG - 2013-09-03 11:24:24 --> Total execution time: 0.0626
DEBUG - 2013-09-03 11:26:27 --> Config Class Initialized
DEBUG - 2013-09-03 11:26:27 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:26:27 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:26:27 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:26:27 --> URI Class Initialized
DEBUG - 2013-09-03 11:26:27 --> Router Class Initialized
DEBUG - 2013-09-03 11:26:27 --> Output Class Initialized
DEBUG - 2013-09-03 11:26:27 --> Security Class Initialized
DEBUG - 2013-09-03 11:26:27 --> Input Class Initialized
DEBUG - 2013-09-03 11:26:27 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:26:27 --> Language Class Initialized
DEBUG - 2013-09-03 11:26:27 --> Loader Class Initialized
DEBUG - 2013-09-03 11:26:27 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:26:27 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:26:27 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:26:27 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:26:27 --> Session Class Initialized
DEBUG - 2013-09-03 11:26:27 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:26:27 --> Session routines successfully run
DEBUG - 2013-09-03 11:26:27 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:26:27 --> Controller Class Initialized
DEBUG - 2013-09-03 11:26:27 --> Model Class Initialized
DEBUG - 2013-09-03 11:26:27 --> Model Class Initialized
DEBUG - 2013-09-03 11:26:27 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:26:27 --> after session initialization................
INFO  - 2013-09-03 11:26:27 --> inside rays login auth.............
DEBUG - 2013-09-03 11:26:27 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-09-03 11:26:27 --> XSS Filtering completed
DEBUG - 2013-09-03 11:26:27 --> XSS Filtering completed
INFO  - 2013-09-03 11:26:27 --> before getting the relation of member............6
INFO  - 2013-09-03 11:26:27 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-09-03 11:26:27 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 11:26:27 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-03 11:26:27 --> inside retrieving vacancy for member
INFO  - 2013-09-03 11:26:27 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-09-03 11:26:27 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 11:26:27 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-09-03 11:26:27 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '2'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 11:26:27 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-09-03 11:26:27 -->  column name inside view is 0 column Data is Array
INFO  - 2013-09-03 11:26:27 -->  column name inside view is 1 column Data is Array
INFO  - 2013-09-03 11:26:27 -->  column name inside view is 2 column Data is Array
INFO  - 2013-09-03 11:26:27 -->  column name inside view is 3 column Data is Array
DEBUG - 2013-09-03 11:26:27 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-09-03 11:26:27 --> Final output sent to browser
DEBUG - 2013-09-03 11:26:27 --> Total execution time: 0.0826
DEBUG - 2013-09-03 11:26:27 --> Config Class Initialized
DEBUG - 2013-09-03 11:26:27 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:26:27 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:26:27 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:26:27 --> URI Class Initialized
DEBUG - 2013-09-03 11:26:27 --> Router Class Initialized
DEBUG - 2013-09-03 11:26:27 --> Output Class Initialized
DEBUG - 2013-09-03 11:26:27 --> Security Class Initialized
DEBUG - 2013-09-03 11:26:27 --> Input Class Initialized
DEBUG - 2013-09-03 11:26:27 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:26:27 --> Language Class Initialized
DEBUG - 2013-09-03 11:26:27 --> Loader Class Initialized
DEBUG - 2013-09-03 11:26:27 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:26:27 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:26:27 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:26:27 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:26:27 --> Session Class Initialized
DEBUG - 2013-09-03 11:26:27 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:26:27 --> Session routines successfully run
DEBUG - 2013-09-03 11:26:27 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:26:27 --> Controller Class Initialized
DEBUG - 2013-09-03 11:26:27 --> Model Class Initialized
DEBUG - 2013-09-03 11:26:27 --> Model Class Initialized
DEBUG - 2013-09-03 11:26:27 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:26:27 --> after session initialization................
ERROR - 2013-09-03 11:26:27 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-09-03 11:26:30 --> Config Class Initialized
DEBUG - 2013-09-03 11:26:30 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:26:30 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:26:30 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:26:30 --> URI Class Initialized
DEBUG - 2013-09-03 11:26:30 --> Router Class Initialized
DEBUG - 2013-09-03 11:26:30 --> Output Class Initialized
DEBUG - 2013-09-03 11:26:30 --> Security Class Initialized
DEBUG - 2013-09-03 11:26:30 --> Input Class Initialized
DEBUG - 2013-09-03 11:26:30 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:26:30 --> Language Class Initialized
DEBUG - 2013-09-03 11:26:30 --> Loader Class Initialized
DEBUG - 2013-09-03 11:26:30 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:26:30 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:26:30 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:26:30 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:26:30 --> Session Class Initialized
DEBUG - 2013-09-03 11:26:30 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:26:30 --> Session routines successfully run
DEBUG - 2013-09-03 11:26:30 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:26:30 --> Controller Class Initialized
DEBUG - 2013-09-03 11:26:30 --> Model Class Initialized
DEBUG - 2013-09-03 11:26:30 --> Model Class Initialized
DEBUG - 2013-09-03 11:26:30 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:26:30 --> after session initialization................
INFO  - 2013-09-03 11:26:31 --> inside the auto suggest page.................
INFO  - 2013-09-03 11:26:31 --> after the list array.................
INFO  - 2013-09-03 11:26:31 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%f%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 11:26:31 --> after retrieving the data from db.................
INFO  - 2013-09-03 11:26:31 --> looping.................
INFO  - 2013-09-03 11:26:31 --> looping.................
DEBUG - 2013-09-03 11:26:31 --> Final output sent to browser
DEBUG - 2013-09-03 11:26:31 --> Total execution time: 0.0641
DEBUG - 2013-09-03 11:26:31 --> Config Class Initialized
DEBUG - 2013-09-03 11:26:31 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:26:31 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:26:31 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:26:31 --> URI Class Initialized
DEBUG - 2013-09-03 11:26:31 --> Router Class Initialized
DEBUG - 2013-09-03 11:26:31 --> Output Class Initialized
DEBUG - 2013-09-03 11:26:31 --> Security Class Initialized
DEBUG - 2013-09-03 11:26:31 --> Input Class Initialized
DEBUG - 2013-09-03 11:26:31 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:26:31 --> Language Class Initialized
DEBUG - 2013-09-03 11:26:31 --> Loader Class Initialized
DEBUG - 2013-09-03 11:26:31 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:26:31 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:26:31 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:26:31 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:26:31 --> Session Class Initialized
DEBUG - 2013-09-03 11:26:31 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:26:31 --> Session routines successfully run
DEBUG - 2013-09-03 11:26:31 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:26:31 --> Controller Class Initialized
DEBUG - 2013-09-03 11:26:31 --> Model Class Initialized
DEBUG - 2013-09-03 11:26:31 --> Model Class Initialized
DEBUG - 2013-09-03 11:26:31 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:26:31 --> after session initialization................
INFO  - 2013-09-03 11:26:31 --> inside the auto suggest page.................
INFO  - 2013-09-03 11:26:31 --> after the list array.................
INFO  - 2013-09-03 11:26:31 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%fa%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 11:26:31 --> after retrieving the data from db.................
INFO  - 2013-09-03 11:26:31 --> looping.................
DEBUG - 2013-09-03 11:26:31 --> Final output sent to browser
DEBUG - 2013-09-03 11:26:31 --> Total execution time: 0.0711
DEBUG - 2013-09-03 11:26:32 --> Config Class Initialized
DEBUG - 2013-09-03 11:26:32 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:26:32 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:26:32 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:26:32 --> URI Class Initialized
DEBUG - 2013-09-03 11:26:32 --> Router Class Initialized
DEBUG - 2013-09-03 11:26:32 --> Output Class Initialized
DEBUG - 2013-09-03 11:26:32 --> Security Class Initialized
DEBUG - 2013-09-03 11:26:32 --> Input Class Initialized
DEBUG - 2013-09-03 11:26:32 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:26:32 --> Language Class Initialized
DEBUG - 2013-09-03 11:26:32 --> Loader Class Initialized
DEBUG - 2013-09-03 11:26:32 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:26:32 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:26:32 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:26:32 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:26:32 --> Session Class Initialized
DEBUG - 2013-09-03 11:26:32 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:26:32 --> Session routines successfully run
DEBUG - 2013-09-03 11:26:32 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:26:32 --> Controller Class Initialized
DEBUG - 2013-09-03 11:26:32 --> Model Class Initialized
DEBUG - 2013-09-03 11:26:32 --> Model Class Initialized
DEBUG - 2013-09-03 11:26:32 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:26:32 --> after session initialization................
INFO  - 2013-09-03 11:26:32 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '4'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 11:26:32 --> inside retrieving comments member id and drug id is 4
INFO  - 2013-09-03 11:26:32 --> 5==============================0
INFO  - 2013-09-03 11:26:32 --> SELECT dc.id_drugcomment as id, dc.comment, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 4
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
DEBUG - 2013-09-03 11:26:32 --> Final output sent to browser
DEBUG - 2013-09-03 11:26:32 --> Total execution time: 0.0710
DEBUG - 2013-09-03 11:29:42 --> Config Class Initialized
DEBUG - 2013-09-03 11:29:42 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:29:42 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:29:42 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:29:42 --> URI Class Initialized
DEBUG - 2013-09-03 11:29:42 --> Router Class Initialized
DEBUG - 2013-09-03 11:29:42 --> Output Class Initialized
DEBUG - 2013-09-03 11:29:42 --> Security Class Initialized
DEBUG - 2013-09-03 11:29:42 --> Input Class Initialized
DEBUG - 2013-09-03 11:29:42 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:29:42 --> Language Class Initialized
DEBUG - 2013-09-03 11:29:42 --> Loader Class Initialized
DEBUG - 2013-09-03 11:29:42 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:29:42 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:29:42 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:29:42 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:29:42 --> Session Class Initialized
DEBUG - 2013-09-03 11:29:42 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:29:42 --> Session routines successfully run
DEBUG - 2013-09-03 11:29:42 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:29:42 --> Controller Class Initialized
DEBUG - 2013-09-03 11:29:42 --> Model Class Initialized
DEBUG - 2013-09-03 11:29:42 --> Model Class Initialized
DEBUG - 2013-09-03 11:29:42 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:29:42 --> after session initialization................
INFO  - 2013-09-03 11:29:42 --> inside rays login auth.............
DEBUG - 2013-09-03 11:29:42 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-09-03 11:29:42 --> XSS Filtering completed
DEBUG - 2013-09-03 11:29:42 --> XSS Filtering completed
INFO  - 2013-09-03 11:29:42 --> before getting the relation of member............6
INFO  - 2013-09-03 11:29:42 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-09-03 11:29:42 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 11:29:42 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-03 11:29:42 --> inside retrieving vacancy for member
INFO  - 2013-09-03 11:29:42 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-09-03 11:29:42 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 11:29:42 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-09-03 11:29:42 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '2'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 11:29:42 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-09-03 11:29:42 -->  column name inside view is 0 column Data is Array
INFO  - 2013-09-03 11:29:42 -->  column name inside view is 1 column Data is Array
INFO  - 2013-09-03 11:29:42 -->  column name inside view is 2 column Data is Array
INFO  - 2013-09-03 11:29:42 -->  column name inside view is 3 column Data is Array
DEBUG - 2013-09-03 11:29:42 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-09-03 11:29:42 --> Final output sent to browser
DEBUG - 2013-09-03 11:29:42 --> Total execution time: 0.0878
DEBUG - 2013-09-03 11:29:42 --> Config Class Initialized
DEBUG - 2013-09-03 11:29:42 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:29:42 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:29:42 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:29:42 --> URI Class Initialized
DEBUG - 2013-09-03 11:29:42 --> Router Class Initialized
DEBUG - 2013-09-03 11:29:42 --> Output Class Initialized
DEBUG - 2013-09-03 11:29:42 --> Security Class Initialized
DEBUG - 2013-09-03 11:29:42 --> Input Class Initialized
DEBUG - 2013-09-03 11:29:42 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:29:42 --> Language Class Initialized
DEBUG - 2013-09-03 11:29:42 --> Loader Class Initialized
DEBUG - 2013-09-03 11:29:42 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:29:42 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:29:42 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:29:42 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:29:42 --> Session Class Initialized
DEBUG - 2013-09-03 11:29:42 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:29:42 --> Session routines successfully run
DEBUG - 2013-09-03 11:29:42 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:29:42 --> Controller Class Initialized
DEBUG - 2013-09-03 11:29:42 --> Model Class Initialized
DEBUG - 2013-09-03 11:29:42 --> Model Class Initialized
DEBUG - 2013-09-03 11:29:42 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:29:42 --> after session initialization................
ERROR - 2013-09-03 11:29:42 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-09-03 11:29:44 --> Config Class Initialized
DEBUG - 2013-09-03 11:29:44 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:29:44 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:29:44 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:29:44 --> URI Class Initialized
DEBUG - 2013-09-03 11:29:44 --> Router Class Initialized
DEBUG - 2013-09-03 11:29:44 --> Output Class Initialized
DEBUG - 2013-09-03 11:29:44 --> Security Class Initialized
DEBUG - 2013-09-03 11:29:44 --> Input Class Initialized
DEBUG - 2013-09-03 11:29:44 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:29:44 --> Language Class Initialized
DEBUG - 2013-09-03 11:29:44 --> Loader Class Initialized
DEBUG - 2013-09-03 11:29:44 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:29:44 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:29:44 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:29:44 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:29:44 --> Session Class Initialized
DEBUG - 2013-09-03 11:29:44 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:29:44 --> Session routines successfully run
DEBUG - 2013-09-03 11:29:44 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:29:44 --> Controller Class Initialized
DEBUG - 2013-09-03 11:29:44 --> Model Class Initialized
DEBUG - 2013-09-03 11:29:44 --> Model Class Initialized
DEBUG - 2013-09-03 11:29:44 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:29:44 --> after session initialization................
INFO  - 2013-09-03 11:29:44 --> inside the auto suggest page.................
INFO  - 2013-09-03 11:29:44 --> after the list array.................
INFO  - 2013-09-03 11:29:44 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%p%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 11:29:44 --> after retrieving the data from db.................
INFO  - 2013-09-03 11:29:44 --> looping.................
INFO  - 2013-09-03 11:29:44 --> looping.................
DEBUG - 2013-09-03 11:29:44 --> Final output sent to browser
DEBUG - 2013-09-03 11:29:44 --> Total execution time: 0.0755
DEBUG - 2013-09-03 11:29:46 --> Config Class Initialized
DEBUG - 2013-09-03 11:29:46 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:29:46 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:29:46 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:29:46 --> URI Class Initialized
DEBUG - 2013-09-03 11:29:46 --> Router Class Initialized
DEBUG - 2013-09-03 11:29:46 --> Output Class Initialized
DEBUG - 2013-09-03 11:29:46 --> Security Class Initialized
DEBUG - 2013-09-03 11:29:46 --> Input Class Initialized
DEBUG - 2013-09-03 11:29:46 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:29:46 --> Language Class Initialized
DEBUG - 2013-09-03 11:29:46 --> Loader Class Initialized
DEBUG - 2013-09-03 11:29:46 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:29:46 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:29:46 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:29:46 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:29:46 --> Session Class Initialized
DEBUG - 2013-09-03 11:29:46 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:29:46 --> Session routines successfully run
DEBUG - 2013-09-03 11:29:46 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:29:46 --> Controller Class Initialized
DEBUG - 2013-09-03 11:29:46 --> Model Class Initialized
DEBUG - 2013-09-03 11:29:46 --> Model Class Initialized
DEBUG - 2013-09-03 11:29:46 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:29:46 --> after session initialization................
INFO  - 2013-09-03 11:29:46 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '5'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 11:29:46 --> inside retrieving comments member id and drug id is 5
INFO  - 2013-09-03 11:29:46 --> 5==============================0
INFO  - 2013-09-03 11:29:46 --> SELECT dc.id_drugcomment as id, dc.comment, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 5
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
DEBUG - 2013-09-03 11:29:46 --> Final output sent to browser
DEBUG - 2013-09-03 11:29:46 --> Total execution time: 0.0787
DEBUG - 2013-09-03 11:29:51 --> Config Class Initialized
DEBUG - 2013-09-03 11:29:51 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:29:51 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:29:51 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:29:51 --> URI Class Initialized
DEBUG - 2013-09-03 11:29:51 --> Router Class Initialized
DEBUG - 2013-09-03 11:29:51 --> Output Class Initialized
DEBUG - 2013-09-03 11:29:51 --> Security Class Initialized
DEBUG - 2013-09-03 11:29:51 --> Input Class Initialized
DEBUG - 2013-09-03 11:29:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:29:51 --> Language Class Initialized
DEBUG - 2013-09-03 11:29:51 --> Loader Class Initialized
DEBUG - 2013-09-03 11:29:51 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:29:51 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:29:51 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:29:51 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:29:51 --> Session Class Initialized
DEBUG - 2013-09-03 11:29:51 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:29:51 --> Session routines successfully run
DEBUG - 2013-09-03 11:29:51 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:29:51 --> Controller Class Initialized
DEBUG - 2013-09-03 11:29:51 --> Model Class Initialized
DEBUG - 2013-09-03 11:29:51 --> Model Class Initialized
DEBUG - 2013-09-03 11:29:51 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:29:51 --> after session initialization................
ERROR - 2013-09-03 11:29:51 --> 404 Page Not Found --> user_authorization/%5Bobject%20HTMLInputElement%5Dimages
DEBUG - 2013-09-03 11:29:53 --> Config Class Initialized
DEBUG - 2013-09-03 11:29:53 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:29:53 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:29:53 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:29:53 --> URI Class Initialized
DEBUG - 2013-09-03 11:29:53 --> Router Class Initialized
DEBUG - 2013-09-03 11:29:53 --> Output Class Initialized
DEBUG - 2013-09-03 11:29:53 --> Security Class Initialized
DEBUG - 2013-09-03 11:29:53 --> Input Class Initialized
DEBUG - 2013-09-03 11:29:53 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:29:53 --> Language Class Initialized
DEBUG - 2013-09-03 11:29:53 --> Loader Class Initialized
DEBUG - 2013-09-03 11:29:53 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:29:53 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:29:53 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:29:53 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:29:53 --> Session Class Initialized
DEBUG - 2013-09-03 11:29:53 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:29:53 --> Session routines successfully run
DEBUG - 2013-09-03 11:29:53 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:29:53 --> Controller Class Initialized
DEBUG - 2013-09-03 11:29:53 --> Model Class Initialized
DEBUG - 2013-09-03 11:29:53 --> Model Class Initialized
DEBUG - 2013-09-03 11:29:53 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:29:53 --> after session initialization................
ERROR - 2013-09-03 11:29:53 --> 404 Page Not Found --> user_authorization/%5Bobject%20HTMLInputElement%5Dimages
DEBUG - 2013-09-03 11:29:59 --> Config Class Initialized
DEBUG - 2013-09-03 11:29:59 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:29:59 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:29:59 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:29:59 --> URI Class Initialized
DEBUG - 2013-09-03 11:29:59 --> Router Class Initialized
DEBUG - 2013-09-03 11:29:59 --> Output Class Initialized
DEBUG - 2013-09-03 11:29:59 --> Security Class Initialized
DEBUG - 2013-09-03 11:29:59 --> Input Class Initialized
DEBUG - 2013-09-03 11:29:59 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:29:59 --> Language Class Initialized
DEBUG - 2013-09-03 11:29:59 --> Loader Class Initialized
DEBUG - 2013-09-03 11:29:59 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:29:59 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:29:59 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:29:59 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:29:59 --> Session Class Initialized
DEBUG - 2013-09-03 11:29:59 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:29:59 --> Session routines successfully run
DEBUG - 2013-09-03 11:29:59 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:29:59 --> Controller Class Initialized
DEBUG - 2013-09-03 11:29:59 --> Model Class Initialized
DEBUG - 2013-09-03 11:29:59 --> Model Class Initialized
DEBUG - 2013-09-03 11:29:59 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:29:59 --> after session initialization................
INFO  - 2013-09-03 11:29:59 --> inside the auto suggest page.................
INFO  - 2013-09-03 11:29:59 --> after the list array.................
INFO  - 2013-09-03 11:29:59 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%p%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 11:29:59 --> after retrieving the data from db.................
INFO  - 2013-09-03 11:29:59 --> looping.................
INFO  - 2013-09-03 11:29:59 --> looping.................
DEBUG - 2013-09-03 11:29:59 --> Final output sent to browser
DEBUG - 2013-09-03 11:29:59 --> Total execution time: 0.0598
DEBUG - 2013-09-03 11:30:00 --> Config Class Initialized
DEBUG - 2013-09-03 11:30:00 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:30:00 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:30:00 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:30:00 --> URI Class Initialized
DEBUG - 2013-09-03 11:30:00 --> Router Class Initialized
DEBUG - 2013-09-03 11:30:00 --> Output Class Initialized
DEBUG - 2013-09-03 11:30:00 --> Security Class Initialized
DEBUG - 2013-09-03 11:30:00 --> Input Class Initialized
DEBUG - 2013-09-03 11:30:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:30:00 --> Language Class Initialized
DEBUG - 2013-09-03 11:30:00 --> Loader Class Initialized
DEBUG - 2013-09-03 11:30:00 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:30:00 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:30:00 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:30:00 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:30:00 --> Session Class Initialized
DEBUG - 2013-09-03 11:30:00 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:30:00 --> Session routines successfully run
DEBUG - 2013-09-03 11:30:00 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:30:00 --> Controller Class Initialized
DEBUG - 2013-09-03 11:30:00 --> Model Class Initialized
DEBUG - 2013-09-03 11:30:00 --> Model Class Initialized
DEBUG - 2013-09-03 11:30:00 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:30:00 --> after session initialization................
INFO  - 2013-09-03 11:30:00 --> inside the auto suggest page.................
INFO  - 2013-09-03 11:30:00 --> after the list array.................
INFO  - 2013-09-03 11:30:00 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%pa%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 11:30:00 --> after retrieving the data from db.................
INFO  - 2013-09-03 11:30:00 --> looping.................
DEBUG - 2013-09-03 11:30:00 --> Final output sent to browser
DEBUG - 2013-09-03 11:30:00 --> Total execution time: 0.0666
DEBUG - 2013-09-03 11:30:01 --> Config Class Initialized
DEBUG - 2013-09-03 11:30:01 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:30:01 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:30:01 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:30:01 --> URI Class Initialized
DEBUG - 2013-09-03 11:30:01 --> Router Class Initialized
DEBUG - 2013-09-03 11:30:01 --> Output Class Initialized
DEBUG - 2013-09-03 11:30:01 --> Security Class Initialized
DEBUG - 2013-09-03 11:30:01 --> Input Class Initialized
DEBUG - 2013-09-03 11:30:01 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:30:01 --> Language Class Initialized
DEBUG - 2013-09-03 11:30:01 --> Loader Class Initialized
DEBUG - 2013-09-03 11:30:01 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:30:01 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:30:01 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:30:01 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:30:01 --> Session Class Initialized
DEBUG - 2013-09-03 11:30:01 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:30:01 --> Session routines successfully run
DEBUG - 2013-09-03 11:30:01 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:30:01 --> Controller Class Initialized
DEBUG - 2013-09-03 11:30:01 --> Model Class Initialized
DEBUG - 2013-09-03 11:30:01 --> Model Class Initialized
DEBUG - 2013-09-03 11:30:01 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:30:01 --> after session initialization................
INFO  - 2013-09-03 11:30:01 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 11:30:01 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-09-03 11:30:01 --> 5==============================0
INFO  - 2013-09-03 11:30:01 --> SELECT dc.id_drugcomment as id, dc.comment, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
DEBUG - 2013-09-03 11:30:01 --> Final output sent to browser
DEBUG - 2013-09-03 11:30:01 --> Total execution time: 0.0686
DEBUG - 2013-09-03 11:30:04 --> Config Class Initialized
DEBUG - 2013-09-03 11:30:04 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:30:04 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:30:04 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:30:04 --> URI Class Initialized
DEBUG - 2013-09-03 11:30:04 --> Router Class Initialized
DEBUG - 2013-09-03 11:30:04 --> Output Class Initialized
DEBUG - 2013-09-03 11:30:04 --> Security Class Initialized
DEBUG - 2013-09-03 11:30:04 --> Input Class Initialized
DEBUG - 2013-09-03 11:30:04 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:30:04 --> Language Class Initialized
DEBUG - 2013-09-03 11:30:04 --> Loader Class Initialized
DEBUG - 2013-09-03 11:30:04 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:30:04 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:30:04 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:30:04 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:30:04 --> Session Class Initialized
DEBUG - 2013-09-03 11:30:04 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:30:04 --> Session routines successfully run
DEBUG - 2013-09-03 11:30:04 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:30:04 --> Controller Class Initialized
DEBUG - 2013-09-03 11:30:04 --> Model Class Initialized
DEBUG - 2013-09-03 11:30:04 --> Model Class Initialized
DEBUG - 2013-09-03 11:30:04 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:30:04 --> after session initialization................
ERROR - 2013-09-03 11:30:04 --> 404 Page Not Found --> user_authorization/%5Bobject%20HTMLInputElement%5Dimages
DEBUG - 2013-09-03 11:30:05 --> Config Class Initialized
DEBUG - 2013-09-03 11:30:05 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:30:05 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:30:05 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:30:05 --> URI Class Initialized
DEBUG - 2013-09-03 11:30:05 --> Router Class Initialized
DEBUG - 2013-09-03 11:30:05 --> Output Class Initialized
DEBUG - 2013-09-03 11:30:05 --> Security Class Initialized
DEBUG - 2013-09-03 11:30:05 --> Input Class Initialized
DEBUG - 2013-09-03 11:30:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:30:05 --> Language Class Initialized
DEBUG - 2013-09-03 11:30:05 --> Loader Class Initialized
DEBUG - 2013-09-03 11:30:05 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:30:05 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:30:05 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:30:05 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:30:05 --> Session Class Initialized
DEBUG - 2013-09-03 11:30:05 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:30:05 --> Session routines successfully run
DEBUG - 2013-09-03 11:30:05 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:30:05 --> Controller Class Initialized
DEBUG - 2013-09-03 11:30:05 --> Model Class Initialized
DEBUG - 2013-09-03 11:30:05 --> Model Class Initialized
DEBUG - 2013-09-03 11:30:05 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:30:05 --> after session initialization................
ERROR - 2013-09-03 11:30:05 --> 404 Page Not Found --> user_authorization/%5Bobject%20HTMLInputElement%5Dimages
DEBUG - 2013-09-03 11:30:05 --> Config Class Initialized
DEBUG - 2013-09-03 11:30:05 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:30:05 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:30:05 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:30:05 --> URI Class Initialized
DEBUG - 2013-09-03 11:30:05 --> Router Class Initialized
DEBUG - 2013-09-03 11:30:05 --> Output Class Initialized
DEBUG - 2013-09-03 11:30:05 --> Security Class Initialized
DEBUG - 2013-09-03 11:30:05 --> Input Class Initialized
DEBUG - 2013-09-03 11:30:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:30:05 --> Language Class Initialized
DEBUG - 2013-09-03 11:30:05 --> Loader Class Initialized
DEBUG - 2013-09-03 11:30:05 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:30:05 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:30:05 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:30:05 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:30:05 --> Session Class Initialized
DEBUG - 2013-09-03 11:30:05 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:30:05 --> Session routines successfully run
DEBUG - 2013-09-03 11:30:05 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:30:05 --> Controller Class Initialized
DEBUG - 2013-09-03 11:30:05 --> Model Class Initialized
DEBUG - 2013-09-03 11:30:05 --> Model Class Initialized
DEBUG - 2013-09-03 11:30:05 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:30:05 --> after session initialization................
ERROR - 2013-09-03 11:30:05 --> 404 Page Not Found --> user_authorization/%5Bobject%20HTMLInputElement%5Dimages
DEBUG - 2013-09-03 11:30:06 --> Config Class Initialized
DEBUG - 2013-09-03 11:30:06 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:30:06 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:30:06 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:30:06 --> URI Class Initialized
DEBUG - 2013-09-03 11:30:06 --> Router Class Initialized
DEBUG - 2013-09-03 11:30:06 --> Output Class Initialized
DEBUG - 2013-09-03 11:30:06 --> Security Class Initialized
DEBUG - 2013-09-03 11:30:06 --> Input Class Initialized
DEBUG - 2013-09-03 11:30:06 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:30:06 --> Language Class Initialized
DEBUG - 2013-09-03 11:30:06 --> Loader Class Initialized
DEBUG - 2013-09-03 11:30:06 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:30:06 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:30:06 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:30:06 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:30:06 --> Session Class Initialized
DEBUG - 2013-09-03 11:30:06 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:30:06 --> Session routines successfully run
DEBUG - 2013-09-03 11:30:06 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:30:06 --> Controller Class Initialized
DEBUG - 2013-09-03 11:30:06 --> Model Class Initialized
DEBUG - 2013-09-03 11:30:06 --> Model Class Initialized
DEBUG - 2013-09-03 11:30:06 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:30:06 --> after session initialization................
ERROR - 2013-09-03 11:30:06 --> 404 Page Not Found --> user_authorization/%5Bobject%20HTMLInputElement%5Dimages
DEBUG - 2013-09-03 11:30:06 --> Config Class Initialized
DEBUG - 2013-09-03 11:30:06 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:30:06 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:30:06 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:30:06 --> URI Class Initialized
DEBUG - 2013-09-03 11:30:06 --> Router Class Initialized
DEBUG - 2013-09-03 11:30:06 --> Output Class Initialized
DEBUG - 2013-09-03 11:30:06 --> Security Class Initialized
DEBUG - 2013-09-03 11:30:06 --> Input Class Initialized
DEBUG - 2013-09-03 11:30:06 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:30:06 --> Language Class Initialized
DEBUG - 2013-09-03 11:30:06 --> Loader Class Initialized
DEBUG - 2013-09-03 11:30:06 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:30:06 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:30:06 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:30:06 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:30:06 --> Session Class Initialized
DEBUG - 2013-09-03 11:30:07 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:30:07 --> Session routines successfully run
DEBUG - 2013-09-03 11:30:07 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:30:07 --> Controller Class Initialized
DEBUG - 2013-09-03 11:30:07 --> Model Class Initialized
DEBUG - 2013-09-03 11:30:07 --> Model Class Initialized
DEBUG - 2013-09-03 11:30:07 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:30:07 --> after session initialization................
ERROR - 2013-09-03 11:30:07 --> 404 Page Not Found --> user_authorization/%5Bobject%20HTMLInputElement%5Dimages
DEBUG - 2013-09-03 11:30:08 --> Config Class Initialized
DEBUG - 2013-09-03 11:30:08 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:30:08 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:30:08 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:30:08 --> URI Class Initialized
DEBUG - 2013-09-03 11:30:08 --> Router Class Initialized
DEBUG - 2013-09-03 11:30:08 --> Output Class Initialized
DEBUG - 2013-09-03 11:30:08 --> Security Class Initialized
DEBUG - 2013-09-03 11:30:08 --> Input Class Initialized
DEBUG - 2013-09-03 11:30:08 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:30:08 --> Language Class Initialized
DEBUG - 2013-09-03 11:30:08 --> Loader Class Initialized
DEBUG - 2013-09-03 11:30:08 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:30:08 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:30:08 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:30:08 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:30:08 --> Session Class Initialized
DEBUG - 2013-09-03 11:30:08 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:30:08 --> Session routines successfully run
DEBUG - 2013-09-03 11:30:08 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:30:08 --> Controller Class Initialized
DEBUG - 2013-09-03 11:30:08 --> Model Class Initialized
DEBUG - 2013-09-03 11:30:08 --> Model Class Initialized
DEBUG - 2013-09-03 11:30:08 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:30:08 --> after session initialization................
ERROR - 2013-09-03 11:30:08 --> 404 Page Not Found --> user_authorization/%5Bobject%20HTMLInputElement%5Dimages
DEBUG - 2013-09-03 11:30:09 --> Config Class Initialized
DEBUG - 2013-09-03 11:30:09 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:30:09 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:30:09 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:30:09 --> URI Class Initialized
DEBUG - 2013-09-03 11:30:09 --> Router Class Initialized
DEBUG - 2013-09-03 11:30:09 --> Output Class Initialized
DEBUG - 2013-09-03 11:30:09 --> Security Class Initialized
DEBUG - 2013-09-03 11:30:09 --> Input Class Initialized
DEBUG - 2013-09-03 11:30:09 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:30:09 --> Language Class Initialized
DEBUG - 2013-09-03 11:30:09 --> Loader Class Initialized
DEBUG - 2013-09-03 11:30:09 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:30:09 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:30:09 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:30:09 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:30:09 --> Session Class Initialized
DEBUG - 2013-09-03 11:30:09 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:30:09 --> Session routines successfully run
DEBUG - 2013-09-03 11:30:09 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:30:09 --> Controller Class Initialized
DEBUG - 2013-09-03 11:30:09 --> Model Class Initialized
DEBUG - 2013-09-03 11:30:09 --> Model Class Initialized
DEBUG - 2013-09-03 11:30:09 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:30:09 --> after session initialization................
ERROR - 2013-09-03 11:30:09 --> 404 Page Not Found --> user_authorization/%5Bobject%20HTMLInputElement%5Dimages
DEBUG - 2013-09-03 11:30:10 --> Config Class Initialized
DEBUG - 2013-09-03 11:30:10 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:30:10 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:30:10 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:30:10 --> URI Class Initialized
DEBUG - 2013-09-03 11:30:10 --> Router Class Initialized
DEBUG - 2013-09-03 11:30:10 --> Output Class Initialized
DEBUG - 2013-09-03 11:30:10 --> Security Class Initialized
DEBUG - 2013-09-03 11:30:10 --> Input Class Initialized
DEBUG - 2013-09-03 11:30:10 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:30:10 --> Language Class Initialized
DEBUG - 2013-09-03 11:30:10 --> Loader Class Initialized
DEBUG - 2013-09-03 11:30:10 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:30:10 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:30:10 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:30:10 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:30:10 --> Session Class Initialized
DEBUG - 2013-09-03 11:30:10 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:30:10 --> Session routines successfully run
DEBUG - 2013-09-03 11:30:10 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:30:10 --> Controller Class Initialized
DEBUG - 2013-09-03 11:30:10 --> Model Class Initialized
DEBUG - 2013-09-03 11:30:10 --> Model Class Initialized
DEBUG - 2013-09-03 11:30:10 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:30:10 --> after session initialization................
ERROR - 2013-09-03 11:30:10 --> 404 Page Not Found --> user_authorization/%5Bobject%20HTMLInputElement%5Dimages
DEBUG - 2013-09-03 11:30:10 --> Config Class Initialized
DEBUG - 2013-09-03 11:30:10 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:30:10 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:30:10 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:30:10 --> URI Class Initialized
DEBUG - 2013-09-03 11:30:10 --> Router Class Initialized
DEBUG - 2013-09-03 11:30:10 --> Output Class Initialized
DEBUG - 2013-09-03 11:30:10 --> Security Class Initialized
DEBUG - 2013-09-03 11:30:10 --> Input Class Initialized
DEBUG - 2013-09-03 11:30:10 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:30:10 --> Language Class Initialized
DEBUG - 2013-09-03 11:30:10 --> Loader Class Initialized
DEBUG - 2013-09-03 11:30:10 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:30:10 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:30:10 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:30:10 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:30:10 --> Session Class Initialized
DEBUG - 2013-09-03 11:30:10 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:30:10 --> Session routines successfully run
DEBUG - 2013-09-03 11:30:10 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:30:10 --> Controller Class Initialized
DEBUG - 2013-09-03 11:30:10 --> Model Class Initialized
DEBUG - 2013-09-03 11:30:10 --> Model Class Initialized
DEBUG - 2013-09-03 11:30:10 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:30:10 --> after session initialization................
ERROR - 2013-09-03 11:30:10 --> 404 Page Not Found --> user_authorization/%5Bobject%20HTMLInputElement%5Dimages
DEBUG - 2013-09-03 11:30:11 --> Config Class Initialized
DEBUG - 2013-09-03 11:30:11 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:30:11 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:30:11 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:30:11 --> URI Class Initialized
DEBUG - 2013-09-03 11:30:11 --> Router Class Initialized
DEBUG - 2013-09-03 11:30:11 --> Output Class Initialized
DEBUG - 2013-09-03 11:30:11 --> Security Class Initialized
DEBUG - 2013-09-03 11:30:11 --> Input Class Initialized
DEBUG - 2013-09-03 11:30:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:30:11 --> Language Class Initialized
DEBUG - 2013-09-03 11:30:11 --> Loader Class Initialized
DEBUG - 2013-09-03 11:30:11 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:30:11 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:30:11 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:30:11 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:30:11 --> Session Class Initialized
DEBUG - 2013-09-03 11:30:11 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:30:11 --> Session routines successfully run
DEBUG - 2013-09-03 11:30:11 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:30:11 --> Controller Class Initialized
DEBUG - 2013-09-03 11:30:11 --> Model Class Initialized
DEBUG - 2013-09-03 11:30:11 --> Model Class Initialized
DEBUG - 2013-09-03 11:30:11 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:30:11 --> after session initialization................
ERROR - 2013-09-03 11:30:11 --> 404 Page Not Found --> user_authorization/%5Bobject%20HTMLInputElement%5Dimages
DEBUG - 2013-09-03 11:30:11 --> Config Class Initialized
DEBUG - 2013-09-03 11:30:11 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:30:11 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:30:11 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:30:11 --> URI Class Initialized
DEBUG - 2013-09-03 11:30:11 --> Router Class Initialized
DEBUG - 2013-09-03 11:30:11 --> Output Class Initialized
DEBUG - 2013-09-03 11:30:11 --> Security Class Initialized
DEBUG - 2013-09-03 11:30:11 --> Input Class Initialized
DEBUG - 2013-09-03 11:30:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:30:11 --> Language Class Initialized
DEBUG - 2013-09-03 11:30:11 --> Loader Class Initialized
DEBUG - 2013-09-03 11:30:11 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:30:11 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:30:11 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:30:11 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:30:11 --> Session Class Initialized
DEBUG - 2013-09-03 11:30:11 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:30:11 --> Session routines successfully run
DEBUG - 2013-09-03 11:30:11 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:30:11 --> Controller Class Initialized
DEBUG - 2013-09-03 11:30:11 --> Model Class Initialized
DEBUG - 2013-09-03 11:30:11 --> Model Class Initialized
DEBUG - 2013-09-03 11:30:11 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:30:11 --> after session initialization................
ERROR - 2013-09-03 11:30:11 --> 404 Page Not Found --> user_authorization/%5Bobject%20HTMLInputElement%5Dimages
DEBUG - 2013-09-03 11:30:11 --> Config Class Initialized
DEBUG - 2013-09-03 11:30:11 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:30:11 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:30:11 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:30:11 --> URI Class Initialized
DEBUG - 2013-09-03 11:30:11 --> Router Class Initialized
DEBUG - 2013-09-03 11:30:11 --> Output Class Initialized
DEBUG - 2013-09-03 11:30:11 --> Security Class Initialized
DEBUG - 2013-09-03 11:30:11 --> Input Class Initialized
DEBUG - 2013-09-03 11:30:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:30:11 --> Language Class Initialized
DEBUG - 2013-09-03 11:30:11 --> Loader Class Initialized
DEBUG - 2013-09-03 11:30:11 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:30:11 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:30:11 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:30:11 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:30:11 --> Session Class Initialized
DEBUG - 2013-09-03 11:30:11 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:30:11 --> Session routines successfully run
DEBUG - 2013-09-03 11:30:11 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:30:11 --> Controller Class Initialized
DEBUG - 2013-09-03 11:30:11 --> Model Class Initialized
DEBUG - 2013-09-03 11:30:11 --> Model Class Initialized
DEBUG - 2013-09-03 11:30:11 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:30:11 --> after session initialization................
ERROR - 2013-09-03 11:30:11 --> 404 Page Not Found --> user_authorization/%5Bobject%20HTMLInputElement%5Dimages
DEBUG - 2013-09-03 11:30:12 --> Config Class Initialized
DEBUG - 2013-09-03 11:30:12 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:30:12 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:30:12 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:30:12 --> URI Class Initialized
DEBUG - 2013-09-03 11:30:12 --> Router Class Initialized
DEBUG - 2013-09-03 11:30:12 --> Output Class Initialized
DEBUG - 2013-09-03 11:30:12 --> Security Class Initialized
DEBUG - 2013-09-03 11:30:12 --> Input Class Initialized
DEBUG - 2013-09-03 11:30:12 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:30:12 --> Language Class Initialized
DEBUG - 2013-09-03 11:30:12 --> Loader Class Initialized
DEBUG - 2013-09-03 11:30:12 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:30:12 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:30:12 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:30:12 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:30:12 --> Session Class Initialized
DEBUG - 2013-09-03 11:30:12 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:30:12 --> Session routines successfully run
DEBUG - 2013-09-03 11:30:12 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:30:12 --> Controller Class Initialized
DEBUG - 2013-09-03 11:30:12 --> Model Class Initialized
DEBUG - 2013-09-03 11:30:12 --> Model Class Initialized
DEBUG - 2013-09-03 11:30:12 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:30:12 --> after session initialization................
ERROR - 2013-09-03 11:30:12 --> 404 Page Not Found --> user_authorization/%5Bobject%20HTMLInputElement%5Dimages
DEBUG - 2013-09-03 11:30:12 --> Config Class Initialized
DEBUG - 2013-09-03 11:30:12 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:30:12 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:30:12 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:30:12 --> URI Class Initialized
DEBUG - 2013-09-03 11:30:12 --> Router Class Initialized
DEBUG - 2013-09-03 11:30:12 --> Output Class Initialized
DEBUG - 2013-09-03 11:30:12 --> Security Class Initialized
DEBUG - 2013-09-03 11:30:12 --> Input Class Initialized
DEBUG - 2013-09-03 11:30:12 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:30:12 --> Language Class Initialized
DEBUG - 2013-09-03 11:30:12 --> Loader Class Initialized
DEBUG - 2013-09-03 11:30:12 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:30:12 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:30:12 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:30:12 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:30:12 --> Session Class Initialized
DEBUG - 2013-09-03 11:30:12 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:30:12 --> Session routines successfully run
DEBUG - 2013-09-03 11:30:12 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:30:12 --> Controller Class Initialized
DEBUG - 2013-09-03 11:30:12 --> Model Class Initialized
DEBUG - 2013-09-03 11:30:12 --> Model Class Initialized
DEBUG - 2013-09-03 11:30:12 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:30:12 --> after session initialization................
ERROR - 2013-09-03 11:30:12 --> 404 Page Not Found --> user_authorization/%5Bobject%20HTMLInputElement%5Dimages
DEBUG - 2013-09-03 11:30:12 --> Config Class Initialized
DEBUG - 2013-09-03 11:30:12 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:30:12 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:30:12 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:30:12 --> URI Class Initialized
DEBUG - 2013-09-03 11:30:12 --> Router Class Initialized
DEBUG - 2013-09-03 11:30:12 --> Output Class Initialized
DEBUG - 2013-09-03 11:30:12 --> Security Class Initialized
DEBUG - 2013-09-03 11:30:12 --> Input Class Initialized
DEBUG - 2013-09-03 11:30:12 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:30:12 --> Language Class Initialized
DEBUG - 2013-09-03 11:30:12 --> Loader Class Initialized
DEBUG - 2013-09-03 11:30:12 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:30:12 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:30:12 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:30:12 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:30:12 --> Session Class Initialized
DEBUG - 2013-09-03 11:30:12 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:30:12 --> Session routines successfully run
DEBUG - 2013-09-03 11:30:12 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:30:12 --> Controller Class Initialized
DEBUG - 2013-09-03 11:30:12 --> Model Class Initialized
DEBUG - 2013-09-03 11:30:12 --> Model Class Initialized
DEBUG - 2013-09-03 11:30:12 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:30:12 --> after session initialization................
ERROR - 2013-09-03 11:30:12 --> 404 Page Not Found --> user_authorization/%5Bobject%20HTMLInputElement%5Dimages
DEBUG - 2013-09-03 11:30:13 --> Config Class Initialized
DEBUG - 2013-09-03 11:30:13 --> Hooks Class Initialized
DEBUG - 2013-09-03 11:30:13 --> Utf8 Class Initialized
DEBUG - 2013-09-03 11:30:13 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 11:30:13 --> URI Class Initialized
DEBUG - 2013-09-03 11:30:13 --> Router Class Initialized
DEBUG - 2013-09-03 11:30:13 --> Output Class Initialized
DEBUG - 2013-09-03 11:30:13 --> Security Class Initialized
DEBUG - 2013-09-03 11:30:13 --> Input Class Initialized
DEBUG - 2013-09-03 11:30:13 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 11:30:13 --> Language Class Initialized
DEBUG - 2013-09-03 11:30:13 --> Loader Class Initialized
DEBUG - 2013-09-03 11:30:13 --> Helper loaded: form_helper
DEBUG - 2013-09-03 11:30:13 --> Helper loaded: url_helper
DEBUG - 2013-09-03 11:30:13 --> Helper loaded: html_helper
DEBUG - 2013-09-03 11:30:13 --> Database Driver Class Initialized
DEBUG - 2013-09-03 11:30:13 --> Session Class Initialized
DEBUG - 2013-09-03 11:30:13 --> Helper loaded: string_helper
DEBUG - 2013-09-03 11:30:13 --> Session routines successfully run
DEBUG - 2013-09-03 11:30:13 --> Form Validation Class Initialized
DEBUG - 2013-09-03 11:30:13 --> Controller Class Initialized
DEBUG - 2013-09-03 11:30:13 --> Model Class Initialized
DEBUG - 2013-09-03 11:30:13 --> Model Class Initialized
DEBUG - 2013-09-03 11:30:13 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 11:30:13 --> after session initialization................
ERROR - 2013-09-03 11:30:13 --> 404 Page Not Found --> user_authorization/%5Bobject%20HTMLInputElement%5Dimages
DEBUG - 2013-09-03 12:03:10 --> Config Class Initialized
DEBUG - 2013-09-03 12:03:10 --> Hooks Class Initialized
DEBUG - 2013-09-03 12:03:10 --> Utf8 Class Initialized
DEBUG - 2013-09-03 12:03:10 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 12:03:10 --> URI Class Initialized
DEBUG - 2013-09-03 12:03:10 --> Router Class Initialized
DEBUG - 2013-09-03 12:03:10 --> Output Class Initialized
DEBUG - 2013-09-03 12:03:10 --> Security Class Initialized
DEBUG - 2013-09-03 12:03:10 --> Input Class Initialized
DEBUG - 2013-09-03 12:03:10 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 12:03:10 --> Language Class Initialized
DEBUG - 2013-09-03 12:03:10 --> Loader Class Initialized
DEBUG - 2013-09-03 12:03:10 --> Helper loaded: form_helper
DEBUG - 2013-09-03 12:03:10 --> Helper loaded: url_helper
DEBUG - 2013-09-03 12:03:10 --> Helper loaded: html_helper
DEBUG - 2013-09-03 12:03:10 --> Database Driver Class Initialized
DEBUG - 2013-09-03 12:03:10 --> Session Class Initialized
DEBUG - 2013-09-03 12:03:10 --> Helper loaded: string_helper
DEBUG - 2013-09-03 12:03:10 --> Session routines successfully run
DEBUG - 2013-09-03 12:03:10 --> Form Validation Class Initialized
DEBUG - 2013-09-03 12:03:10 --> Controller Class Initialized
DEBUG - 2013-09-03 12:03:10 --> Model Class Initialized
DEBUG - 2013-09-03 12:03:10 --> Model Class Initialized
DEBUG - 2013-09-03 12:03:10 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 12:03:10 --> after session initialization................
INFO  - 2013-09-03 12:03:10 --> inside the auto suggest page.................
INFO  - 2013-09-03 12:03:10 --> after the list array.................
INFO  - 2013-09-03 12:03:10 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%p%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 12:03:10 --> after retrieving the data from db.................
INFO  - 2013-09-03 12:03:10 --> looping.................
INFO  - 2013-09-03 12:03:10 --> looping.................
DEBUG - 2013-09-03 12:03:10 --> Final output sent to browser
DEBUG - 2013-09-03 12:03:10 --> Total execution time: 0.0594
DEBUG - 2013-09-03 12:03:11 --> Config Class Initialized
DEBUG - 2013-09-03 12:03:11 --> Hooks Class Initialized
DEBUG - 2013-09-03 12:03:11 --> Utf8 Class Initialized
DEBUG - 2013-09-03 12:03:11 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 12:03:11 --> URI Class Initialized
DEBUG - 2013-09-03 12:03:11 --> Router Class Initialized
DEBUG - 2013-09-03 12:03:11 --> Output Class Initialized
DEBUG - 2013-09-03 12:03:11 --> Security Class Initialized
DEBUG - 2013-09-03 12:03:11 --> Input Class Initialized
DEBUG - 2013-09-03 12:03:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 12:03:11 --> Language Class Initialized
DEBUG - 2013-09-03 12:03:11 --> Loader Class Initialized
DEBUG - 2013-09-03 12:03:11 --> Helper loaded: form_helper
DEBUG - 2013-09-03 12:03:11 --> Helper loaded: url_helper
DEBUG - 2013-09-03 12:03:11 --> Helper loaded: html_helper
DEBUG - 2013-09-03 12:03:11 --> Database Driver Class Initialized
DEBUG - 2013-09-03 12:03:11 --> Session Class Initialized
DEBUG - 2013-09-03 12:03:11 --> Helper loaded: string_helper
DEBUG - 2013-09-03 12:03:11 --> Session routines successfully run
DEBUG - 2013-09-03 12:03:11 --> Form Validation Class Initialized
DEBUG - 2013-09-03 12:03:11 --> Controller Class Initialized
DEBUG - 2013-09-03 12:03:11 --> Model Class Initialized
DEBUG - 2013-09-03 12:03:11 --> Model Class Initialized
DEBUG - 2013-09-03 12:03:11 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 12:03:11 --> after session initialization................
INFO  - 2013-09-03 12:03:11 --> inside the auto suggest page.................
INFO  - 2013-09-03 12:03:11 --> after the list array.................
INFO  - 2013-09-03 12:03:11 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%pa%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 12:03:11 --> after retrieving the data from db.................
INFO  - 2013-09-03 12:03:11 --> looping.................
DEBUG - 2013-09-03 12:03:11 --> Final output sent to browser
DEBUG - 2013-09-03 12:03:11 --> Total execution time: 0.0615
DEBUG - 2013-09-03 12:03:12 --> Config Class Initialized
DEBUG - 2013-09-03 12:03:12 --> Hooks Class Initialized
DEBUG - 2013-09-03 12:03:12 --> Utf8 Class Initialized
DEBUG - 2013-09-03 12:03:12 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 12:03:12 --> URI Class Initialized
DEBUG - 2013-09-03 12:03:12 --> Router Class Initialized
DEBUG - 2013-09-03 12:03:12 --> Output Class Initialized
DEBUG - 2013-09-03 12:03:12 --> Security Class Initialized
DEBUG - 2013-09-03 12:03:12 --> Input Class Initialized
DEBUG - 2013-09-03 12:03:12 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 12:03:12 --> Language Class Initialized
DEBUG - 2013-09-03 12:03:12 --> Loader Class Initialized
DEBUG - 2013-09-03 12:03:12 --> Helper loaded: form_helper
DEBUG - 2013-09-03 12:03:12 --> Helper loaded: url_helper
DEBUG - 2013-09-03 12:03:12 --> Helper loaded: html_helper
DEBUG - 2013-09-03 12:03:12 --> Database Driver Class Initialized
DEBUG - 2013-09-03 12:03:12 --> Session Class Initialized
DEBUG - 2013-09-03 12:03:12 --> Helper loaded: string_helper
DEBUG - 2013-09-03 12:03:12 --> Session routines successfully run
DEBUG - 2013-09-03 12:03:12 --> Form Validation Class Initialized
DEBUG - 2013-09-03 12:03:12 --> Controller Class Initialized
DEBUG - 2013-09-03 12:03:12 --> Model Class Initialized
DEBUG - 2013-09-03 12:03:12 --> Model Class Initialized
DEBUG - 2013-09-03 12:03:12 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 12:03:12 --> after session initialization................
INFO  - 2013-09-03 12:03:12 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 12:03:12 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-09-03 12:03:12 --> 5==============================0
INFO  - 2013-09-03 12:03:12 --> SELECT dc.id_drugcomment as id, dc.comment, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
DEBUG - 2013-09-03 12:03:12 --> Final output sent to browser
DEBUG - 2013-09-03 12:03:12 --> Total execution time: 0.0779
DEBUG - 2013-09-03 12:10:23 --> Config Class Initialized
DEBUG - 2013-09-03 12:10:23 --> Hooks Class Initialized
DEBUG - 2013-09-03 12:10:23 --> Utf8 Class Initialized
DEBUG - 2013-09-03 12:10:23 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 12:10:23 --> URI Class Initialized
DEBUG - 2013-09-03 12:10:23 --> Router Class Initialized
DEBUG - 2013-09-03 12:10:23 --> Output Class Initialized
DEBUG - 2013-09-03 12:10:23 --> Security Class Initialized
DEBUG - 2013-09-03 12:10:23 --> Input Class Initialized
DEBUG - 2013-09-03 12:10:23 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 12:10:23 --> Language Class Initialized
DEBUG - 2013-09-03 12:10:23 --> Loader Class Initialized
DEBUG - 2013-09-03 12:10:23 --> Helper loaded: form_helper
DEBUG - 2013-09-03 12:10:23 --> Helper loaded: url_helper
DEBUG - 2013-09-03 12:10:23 --> Helper loaded: html_helper
DEBUG - 2013-09-03 12:10:23 --> Database Driver Class Initialized
DEBUG - 2013-09-03 12:10:23 --> Session Class Initialized
DEBUG - 2013-09-03 12:10:23 --> Helper loaded: string_helper
DEBUG - 2013-09-03 12:10:23 --> Session routines successfully run
DEBUG - 2013-09-03 12:10:23 --> Form Validation Class Initialized
DEBUG - 2013-09-03 12:10:23 --> Controller Class Initialized
DEBUG - 2013-09-03 12:10:23 --> Model Class Initialized
DEBUG - 2013-09-03 12:10:23 --> Model Class Initialized
DEBUG - 2013-09-03 12:10:23 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 12:10:23 --> after session initialization................
INFO  - 2013-09-03 12:10:23 --> inside rays login auth.............
DEBUG - 2013-09-03 12:10:23 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-09-03 12:10:23 --> XSS Filtering completed
DEBUG - 2013-09-03 12:10:23 --> XSS Filtering completed
INFO  - 2013-09-03 12:10:23 --> before getting the relation of member............6
INFO  - 2013-09-03 12:10:23 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-09-03 12:10:23 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 12:10:23 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-03 12:10:23 --> inside retrieving vacancy for member
INFO  - 2013-09-03 12:10:23 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-09-03 12:10:23 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 12:10:23 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-09-03 12:10:23 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '2'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 12:10:23 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-09-03 12:10:23 -->  column name inside view is 0 column Data is Array
INFO  - 2013-09-03 12:10:23 -->  column name inside view is 1 column Data is Array
INFO  - 2013-09-03 12:10:23 -->  column name inside view is 2 column Data is Array
INFO  - 2013-09-03 12:10:23 -->  column name inside view is 3 column Data is Array
DEBUG - 2013-09-03 12:10:23 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-09-03 12:10:23 --> Final output sent to browser
DEBUG - 2013-09-03 12:10:23 --> Total execution time: 0.1203
DEBUG - 2013-09-03 12:10:23 --> Config Class Initialized
DEBUG - 2013-09-03 12:10:23 --> Hooks Class Initialized
DEBUG - 2013-09-03 12:10:23 --> Utf8 Class Initialized
DEBUG - 2013-09-03 12:10:23 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 12:10:23 --> URI Class Initialized
DEBUG - 2013-09-03 12:10:23 --> Router Class Initialized
DEBUG - 2013-09-03 12:10:23 --> Output Class Initialized
DEBUG - 2013-09-03 12:10:23 --> Security Class Initialized
DEBUG - 2013-09-03 12:10:23 --> Input Class Initialized
DEBUG - 2013-09-03 12:10:23 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 12:10:23 --> Language Class Initialized
DEBUG - 2013-09-03 12:10:23 --> Loader Class Initialized
DEBUG - 2013-09-03 12:10:23 --> Helper loaded: form_helper
DEBUG - 2013-09-03 12:10:23 --> Helper loaded: url_helper
DEBUG - 2013-09-03 12:10:23 --> Helper loaded: html_helper
DEBUG - 2013-09-03 12:10:23 --> Database Driver Class Initialized
DEBUG - 2013-09-03 12:10:23 --> Session Class Initialized
DEBUG - 2013-09-03 12:10:23 --> Helper loaded: string_helper
DEBUG - 2013-09-03 12:10:23 --> Session routines successfully run
DEBUG - 2013-09-03 12:10:23 --> Form Validation Class Initialized
DEBUG - 2013-09-03 12:10:23 --> Controller Class Initialized
DEBUG - 2013-09-03 12:10:23 --> Model Class Initialized
DEBUG - 2013-09-03 12:10:23 --> Model Class Initialized
DEBUG - 2013-09-03 12:10:23 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 12:10:23 --> after session initialization................
ERROR - 2013-09-03 12:10:23 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-09-03 12:10:26 --> Config Class Initialized
DEBUG - 2013-09-03 12:10:26 --> Hooks Class Initialized
DEBUG - 2013-09-03 12:10:26 --> Utf8 Class Initialized
DEBUG - 2013-09-03 12:10:26 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 12:10:26 --> URI Class Initialized
DEBUG - 2013-09-03 12:10:26 --> Router Class Initialized
DEBUG - 2013-09-03 12:10:26 --> Output Class Initialized
DEBUG - 2013-09-03 12:10:26 --> Security Class Initialized
DEBUG - 2013-09-03 12:10:26 --> Input Class Initialized
DEBUG - 2013-09-03 12:10:26 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 12:10:26 --> Language Class Initialized
DEBUG - 2013-09-03 12:10:26 --> Loader Class Initialized
DEBUG - 2013-09-03 12:10:26 --> Helper loaded: form_helper
DEBUG - 2013-09-03 12:10:26 --> Helper loaded: url_helper
DEBUG - 2013-09-03 12:10:26 --> Helper loaded: html_helper
DEBUG - 2013-09-03 12:10:26 --> Database Driver Class Initialized
DEBUG - 2013-09-03 12:10:26 --> Session Class Initialized
DEBUG - 2013-09-03 12:10:26 --> Helper loaded: string_helper
DEBUG - 2013-09-03 12:10:26 --> Session routines successfully run
DEBUG - 2013-09-03 12:10:26 --> Form Validation Class Initialized
DEBUG - 2013-09-03 12:10:26 --> Controller Class Initialized
DEBUG - 2013-09-03 12:10:26 --> Model Class Initialized
DEBUG - 2013-09-03 12:10:26 --> Model Class Initialized
DEBUG - 2013-09-03 12:10:26 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 12:10:26 --> after session initialization................
INFO  - 2013-09-03 12:10:26 --> inside the auto suggest page.................
INFO  - 2013-09-03 12:10:26 --> after the list array.................
INFO  - 2013-09-03 12:10:26 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%panado%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 12:10:26 --> after retrieving the data from db.................
INFO  - 2013-09-03 12:10:26 --> looping.................
DEBUG - 2013-09-03 12:10:26 --> Final output sent to browser
DEBUG - 2013-09-03 12:10:26 --> Total execution time: 0.0638
DEBUG - 2013-09-03 12:10:27 --> Config Class Initialized
DEBUG - 2013-09-03 12:10:27 --> Hooks Class Initialized
DEBUG - 2013-09-03 12:10:27 --> Utf8 Class Initialized
DEBUG - 2013-09-03 12:10:27 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 12:10:27 --> URI Class Initialized
DEBUG - 2013-09-03 12:10:27 --> Router Class Initialized
DEBUG - 2013-09-03 12:10:27 --> Output Class Initialized
DEBUG - 2013-09-03 12:10:27 --> Security Class Initialized
DEBUG - 2013-09-03 12:10:27 --> Input Class Initialized
DEBUG - 2013-09-03 12:10:27 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 12:10:27 --> Language Class Initialized
DEBUG - 2013-09-03 12:10:27 --> Loader Class Initialized
DEBUG - 2013-09-03 12:10:27 --> Helper loaded: form_helper
DEBUG - 2013-09-03 12:10:27 --> Helper loaded: url_helper
DEBUG - 2013-09-03 12:10:27 --> Helper loaded: html_helper
DEBUG - 2013-09-03 12:10:27 --> Database Driver Class Initialized
DEBUG - 2013-09-03 12:10:27 --> Session Class Initialized
DEBUG - 2013-09-03 12:10:27 --> Helper loaded: string_helper
DEBUG - 2013-09-03 12:10:27 --> Session routines successfully run
DEBUG - 2013-09-03 12:10:27 --> Form Validation Class Initialized
DEBUG - 2013-09-03 12:10:27 --> Controller Class Initialized
DEBUG - 2013-09-03 12:10:27 --> Model Class Initialized
DEBUG - 2013-09-03 12:10:27 --> Model Class Initialized
DEBUG - 2013-09-03 12:10:27 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 12:10:27 --> after session initialization................
INFO  - 2013-09-03 12:10:27 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 12:10:27 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-09-03 12:10:27 --> 5==============================0
INFO  - 2013-09-03 12:10:27 --> SELECT dc.id_drugcomment as id, dc.comment, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
DEBUG - 2013-09-03 12:10:27 --> Final output sent to browser
DEBUG - 2013-09-03 12:10:27 --> Total execution time: 0.0676
DEBUG - 2013-09-03 12:10:55 --> Config Class Initialized
DEBUG - 2013-09-03 12:10:55 --> Hooks Class Initialized
DEBUG - 2013-09-03 12:10:55 --> Utf8 Class Initialized
DEBUG - 2013-09-03 12:10:55 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 12:10:55 --> URI Class Initialized
DEBUG - 2013-09-03 12:10:55 --> Router Class Initialized
DEBUG - 2013-09-03 12:10:55 --> Output Class Initialized
DEBUG - 2013-09-03 12:10:55 --> Security Class Initialized
DEBUG - 2013-09-03 12:10:55 --> Input Class Initialized
DEBUG - 2013-09-03 12:10:55 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 12:10:55 --> Language Class Initialized
DEBUG - 2013-09-03 12:10:55 --> Loader Class Initialized
DEBUG - 2013-09-03 12:10:55 --> Helper loaded: form_helper
DEBUG - 2013-09-03 12:10:55 --> Helper loaded: url_helper
DEBUG - 2013-09-03 12:10:55 --> Helper loaded: html_helper
DEBUG - 2013-09-03 12:10:55 --> Database Driver Class Initialized
DEBUG - 2013-09-03 12:10:55 --> Session Class Initialized
DEBUG - 2013-09-03 12:10:55 --> Helper loaded: string_helper
DEBUG - 2013-09-03 12:10:55 --> Session routines successfully run
DEBUG - 2013-09-03 12:10:55 --> Form Validation Class Initialized
DEBUG - 2013-09-03 12:10:55 --> Controller Class Initialized
DEBUG - 2013-09-03 12:10:55 --> Model Class Initialized
DEBUG - 2013-09-03 12:10:55 --> Model Class Initialized
DEBUG - 2013-09-03 12:10:55 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 12:10:55 --> after session initialization................
ERROR - 2013-09-03 12:10:55 --> 404 Page Not Found --> user_authorization/%5Bobject%20HTMLInputElement%5Dimages
DEBUG - 2013-09-03 12:11:00 --> Config Class Initialized
DEBUG - 2013-09-03 12:11:00 --> Hooks Class Initialized
DEBUG - 2013-09-03 12:11:00 --> Utf8 Class Initialized
DEBUG - 2013-09-03 12:11:00 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 12:11:00 --> URI Class Initialized
DEBUG - 2013-09-03 12:11:00 --> Router Class Initialized
DEBUG - 2013-09-03 12:11:00 --> Output Class Initialized
DEBUG - 2013-09-03 12:11:00 --> Security Class Initialized
DEBUG - 2013-09-03 12:11:00 --> Input Class Initialized
DEBUG - 2013-09-03 12:11:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 12:11:00 --> Language Class Initialized
DEBUG - 2013-09-03 12:11:00 --> Loader Class Initialized
DEBUG - 2013-09-03 12:11:00 --> Helper loaded: form_helper
DEBUG - 2013-09-03 12:11:00 --> Helper loaded: url_helper
DEBUG - 2013-09-03 12:11:00 --> Helper loaded: html_helper
DEBUG - 2013-09-03 12:11:00 --> Database Driver Class Initialized
DEBUG - 2013-09-03 12:11:00 --> Session Class Initialized
DEBUG - 2013-09-03 12:11:00 --> Helper loaded: string_helper
DEBUG - 2013-09-03 12:11:00 --> Session routines successfully run
DEBUG - 2013-09-03 12:11:00 --> Form Validation Class Initialized
DEBUG - 2013-09-03 12:11:00 --> Controller Class Initialized
DEBUG - 2013-09-03 12:11:00 --> Model Class Initialized
DEBUG - 2013-09-03 12:11:00 --> Model Class Initialized
DEBUG - 2013-09-03 12:11:00 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 12:11:00 --> after session initialization................
ERROR - 2013-09-03 12:11:00 --> 404 Page Not Found --> user_authorization/%5Bobject%20HTMLInputElement%5Dimages
DEBUG - 2013-09-03 12:12:44 --> Config Class Initialized
DEBUG - 2013-09-03 12:12:44 --> Hooks Class Initialized
DEBUG - 2013-09-03 12:12:44 --> Utf8 Class Initialized
DEBUG - 2013-09-03 12:12:44 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 12:12:44 --> URI Class Initialized
DEBUG - 2013-09-03 12:12:44 --> Router Class Initialized
DEBUG - 2013-09-03 12:12:44 --> Output Class Initialized
DEBUG - 2013-09-03 12:12:44 --> Security Class Initialized
DEBUG - 2013-09-03 12:12:44 --> Input Class Initialized
DEBUG - 2013-09-03 12:12:44 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 12:12:44 --> Language Class Initialized
DEBUG - 2013-09-03 12:12:44 --> Loader Class Initialized
DEBUG - 2013-09-03 12:12:44 --> Helper loaded: form_helper
DEBUG - 2013-09-03 12:12:44 --> Helper loaded: url_helper
DEBUG - 2013-09-03 12:12:44 --> Helper loaded: html_helper
DEBUG - 2013-09-03 12:12:44 --> Database Driver Class Initialized
DEBUG - 2013-09-03 12:12:44 --> Session Class Initialized
DEBUG - 2013-09-03 12:12:44 --> Helper loaded: string_helper
DEBUG - 2013-09-03 12:12:44 --> Session routines successfully run
DEBUG - 2013-09-03 12:12:44 --> Form Validation Class Initialized
DEBUG - 2013-09-03 12:12:44 --> Controller Class Initialized
DEBUG - 2013-09-03 12:12:44 --> Model Class Initialized
DEBUG - 2013-09-03 12:12:44 --> Model Class Initialized
DEBUG - 2013-09-03 12:12:44 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 12:12:44 --> after session initialization................
INFO  - 2013-09-03 12:12:44 --> inside rays login auth.............
DEBUG - 2013-09-03 12:12:44 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-09-03 12:12:44 --> XSS Filtering completed
DEBUG - 2013-09-03 12:12:44 --> XSS Filtering completed
INFO  - 2013-09-03 12:12:44 --> before getting the relation of member............6
INFO  - 2013-09-03 12:12:44 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-09-03 12:12:44 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 12:12:44 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-03 12:12:44 --> inside retrieving vacancy for member
INFO  - 2013-09-03 12:12:44 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-09-03 12:12:44 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 12:12:44 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-09-03 12:12:44 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '2'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 12:12:44 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-09-03 12:12:44 -->  column name inside view is 0 column Data is Array
INFO  - 2013-09-03 12:12:44 -->  column name inside view is 1 column Data is Array
INFO  - 2013-09-03 12:12:44 -->  column name inside view is 2 column Data is Array
INFO  - 2013-09-03 12:12:44 -->  column name inside view is 3 column Data is Array
DEBUG - 2013-09-03 12:12:44 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-09-03 12:12:44 --> Final output sent to browser
DEBUG - 2013-09-03 12:12:44 --> Total execution time: 0.0924
DEBUG - 2013-09-03 12:12:44 --> Config Class Initialized
DEBUG - 2013-09-03 12:12:44 --> Hooks Class Initialized
DEBUG - 2013-09-03 12:12:44 --> Utf8 Class Initialized
DEBUG - 2013-09-03 12:12:44 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 12:12:44 --> URI Class Initialized
DEBUG - 2013-09-03 12:12:44 --> Router Class Initialized
DEBUG - 2013-09-03 12:12:44 --> Output Class Initialized
DEBUG - 2013-09-03 12:12:44 --> Security Class Initialized
DEBUG - 2013-09-03 12:12:44 --> Input Class Initialized
DEBUG - 2013-09-03 12:12:44 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 12:12:44 --> Language Class Initialized
DEBUG - 2013-09-03 12:12:44 --> Loader Class Initialized
DEBUG - 2013-09-03 12:12:44 --> Helper loaded: form_helper
DEBUG - 2013-09-03 12:12:44 --> Helper loaded: url_helper
DEBUG - 2013-09-03 12:12:44 --> Helper loaded: html_helper
DEBUG - 2013-09-03 12:12:44 --> Database Driver Class Initialized
DEBUG - 2013-09-03 12:12:44 --> Session Class Initialized
DEBUG - 2013-09-03 12:12:44 --> Helper loaded: string_helper
DEBUG - 2013-09-03 12:12:44 --> Session routines successfully run
DEBUG - 2013-09-03 12:12:44 --> Form Validation Class Initialized
DEBUG - 2013-09-03 12:12:44 --> Controller Class Initialized
DEBUG - 2013-09-03 12:12:44 --> Model Class Initialized
DEBUG - 2013-09-03 12:12:44 --> Model Class Initialized
DEBUG - 2013-09-03 12:12:44 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 12:12:44 --> after session initialization................
ERROR - 2013-09-03 12:12:44 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-09-03 12:12:53 --> Config Class Initialized
DEBUG - 2013-09-03 12:12:53 --> Hooks Class Initialized
DEBUG - 2013-09-03 12:12:53 --> Utf8 Class Initialized
DEBUG - 2013-09-03 12:12:53 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 12:12:53 --> URI Class Initialized
DEBUG - 2013-09-03 12:12:53 --> Router Class Initialized
DEBUG - 2013-09-03 12:12:53 --> Output Class Initialized
DEBUG - 2013-09-03 12:12:53 --> Security Class Initialized
DEBUG - 2013-09-03 12:12:53 --> Input Class Initialized
DEBUG - 2013-09-03 12:12:53 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 12:12:53 --> Language Class Initialized
DEBUG - 2013-09-03 12:12:53 --> Loader Class Initialized
DEBUG - 2013-09-03 12:12:53 --> Helper loaded: form_helper
DEBUG - 2013-09-03 12:12:53 --> Helper loaded: url_helper
DEBUG - 2013-09-03 12:12:53 --> Helper loaded: html_helper
DEBUG - 2013-09-03 12:12:53 --> Database Driver Class Initialized
DEBUG - 2013-09-03 12:12:53 --> Session Class Initialized
DEBUG - 2013-09-03 12:12:53 --> Helper loaded: string_helper
DEBUG - 2013-09-03 12:12:53 --> Session routines successfully run
DEBUG - 2013-09-03 12:12:53 --> Form Validation Class Initialized
DEBUG - 2013-09-03 12:12:53 --> Controller Class Initialized
DEBUG - 2013-09-03 12:12:53 --> Model Class Initialized
DEBUG - 2013-09-03 12:12:53 --> Model Class Initialized
DEBUG - 2013-09-03 12:12:53 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 12:12:53 --> after session initialization................
INFO  - 2013-09-03 12:12:53 --> inside rays login auth.............
DEBUG - 2013-09-03 12:12:53 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-09-03 12:12:53 --> XSS Filtering completed
DEBUG - 2013-09-03 12:12:53 --> XSS Filtering completed
INFO  - 2013-09-03 12:12:53 --> before getting the relation of member............6
INFO  - 2013-09-03 12:12:53 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-09-03 12:12:53 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 12:12:53 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-03 12:12:53 --> inside retrieving vacancy for member
INFO  - 2013-09-03 12:12:53 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-09-03 12:12:53 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 12:12:53 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-09-03 12:12:53 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '2'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 12:12:53 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-09-03 12:12:53 -->  column name inside view is 0 column Data is Array
INFO  - 2013-09-03 12:12:53 -->  column name inside view is 1 column Data is Array
INFO  - 2013-09-03 12:12:53 -->  column name inside view is 2 column Data is Array
INFO  - 2013-09-03 12:12:53 -->  column name inside view is 3 column Data is Array
DEBUG - 2013-09-03 12:12:53 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-09-03 12:12:53 --> Final output sent to browser
DEBUG - 2013-09-03 12:12:53 --> Total execution time: 0.0837
DEBUG - 2013-09-03 12:12:53 --> Config Class Initialized
DEBUG - 2013-09-03 12:12:53 --> Hooks Class Initialized
DEBUG - 2013-09-03 12:12:53 --> Utf8 Class Initialized
DEBUG - 2013-09-03 12:12:53 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 12:12:53 --> URI Class Initialized
DEBUG - 2013-09-03 12:12:53 --> Router Class Initialized
DEBUG - 2013-09-03 12:12:53 --> Output Class Initialized
DEBUG - 2013-09-03 12:12:53 --> Security Class Initialized
DEBUG - 2013-09-03 12:12:53 --> Input Class Initialized
DEBUG - 2013-09-03 12:12:53 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 12:12:53 --> Language Class Initialized
DEBUG - 2013-09-03 12:12:53 --> Loader Class Initialized
DEBUG - 2013-09-03 12:12:53 --> Helper loaded: form_helper
DEBUG - 2013-09-03 12:12:53 --> Helper loaded: url_helper
DEBUG - 2013-09-03 12:12:53 --> Helper loaded: html_helper
DEBUG - 2013-09-03 12:12:53 --> Database Driver Class Initialized
DEBUG - 2013-09-03 12:12:53 --> Session Class Initialized
DEBUG - 2013-09-03 12:12:53 --> Helper loaded: string_helper
DEBUG - 2013-09-03 12:12:53 --> Session routines successfully run
DEBUG - 2013-09-03 12:12:53 --> Form Validation Class Initialized
DEBUG - 2013-09-03 12:12:53 --> Controller Class Initialized
DEBUG - 2013-09-03 12:12:53 --> Model Class Initialized
DEBUG - 2013-09-03 12:12:53 --> Model Class Initialized
DEBUG - 2013-09-03 12:12:53 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 12:12:53 --> after session initialization................
ERROR - 2013-09-03 12:12:53 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-09-03 12:12:56 --> Config Class Initialized
DEBUG - 2013-09-03 12:12:56 --> Hooks Class Initialized
DEBUG - 2013-09-03 12:12:56 --> Utf8 Class Initialized
DEBUG - 2013-09-03 12:12:56 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 12:12:56 --> URI Class Initialized
DEBUG - 2013-09-03 12:12:56 --> Router Class Initialized
DEBUG - 2013-09-03 12:12:56 --> Output Class Initialized
DEBUG - 2013-09-03 12:12:56 --> Security Class Initialized
DEBUG - 2013-09-03 12:12:56 --> Input Class Initialized
DEBUG - 2013-09-03 12:12:56 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 12:12:56 --> Language Class Initialized
DEBUG - 2013-09-03 12:12:56 --> Loader Class Initialized
DEBUG - 2013-09-03 12:12:56 --> Helper loaded: form_helper
DEBUG - 2013-09-03 12:12:56 --> Helper loaded: url_helper
DEBUG - 2013-09-03 12:12:56 --> Helper loaded: html_helper
DEBUG - 2013-09-03 12:12:56 --> Database Driver Class Initialized
DEBUG - 2013-09-03 12:12:56 --> Session Class Initialized
DEBUG - 2013-09-03 12:12:56 --> Helper loaded: string_helper
DEBUG - 2013-09-03 12:12:56 --> Session routines successfully run
DEBUG - 2013-09-03 12:12:56 --> Form Validation Class Initialized
DEBUG - 2013-09-03 12:12:56 --> Controller Class Initialized
DEBUG - 2013-09-03 12:12:56 --> Model Class Initialized
DEBUG - 2013-09-03 12:12:56 --> Model Class Initialized
DEBUG - 2013-09-03 12:12:56 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 12:12:56 --> after session initialization................
INFO  - 2013-09-03 12:12:56 --> inside the auto suggest page.................
INFO  - 2013-09-03 12:12:56 --> after the list array.................
INFO  - 2013-09-03 12:12:56 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%p%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 12:12:56 --> after retrieving the data from db.................
INFO  - 2013-09-03 12:12:56 --> looping.................
INFO  - 2013-09-03 12:12:56 --> looping.................
DEBUG - 2013-09-03 12:12:56 --> Final output sent to browser
DEBUG - 2013-09-03 12:12:56 --> Total execution time: 0.0568
DEBUG - 2013-09-03 12:12:57 --> Config Class Initialized
DEBUG - 2013-09-03 12:12:57 --> Hooks Class Initialized
DEBUG - 2013-09-03 12:12:57 --> Utf8 Class Initialized
DEBUG - 2013-09-03 12:12:57 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 12:12:57 --> URI Class Initialized
DEBUG - 2013-09-03 12:12:57 --> Router Class Initialized
DEBUG - 2013-09-03 12:12:57 --> Output Class Initialized
DEBUG - 2013-09-03 12:12:57 --> Security Class Initialized
DEBUG - 2013-09-03 12:12:57 --> Input Class Initialized
DEBUG - 2013-09-03 12:12:57 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 12:12:57 --> Language Class Initialized
DEBUG - 2013-09-03 12:12:57 --> Loader Class Initialized
DEBUG - 2013-09-03 12:12:57 --> Helper loaded: form_helper
DEBUG - 2013-09-03 12:12:57 --> Helper loaded: url_helper
DEBUG - 2013-09-03 12:12:57 --> Helper loaded: html_helper
DEBUG - 2013-09-03 12:12:57 --> Database Driver Class Initialized
DEBUG - 2013-09-03 12:12:57 --> Session Class Initialized
DEBUG - 2013-09-03 12:12:57 --> Helper loaded: string_helper
DEBUG - 2013-09-03 12:12:57 --> Session routines successfully run
DEBUG - 2013-09-03 12:12:57 --> Form Validation Class Initialized
DEBUG - 2013-09-03 12:12:57 --> Controller Class Initialized
DEBUG - 2013-09-03 12:12:57 --> Model Class Initialized
DEBUG - 2013-09-03 12:12:57 --> Model Class Initialized
DEBUG - 2013-09-03 12:12:57 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 12:12:57 --> after session initialization................
INFO  - 2013-09-03 12:12:57 --> inside the auto suggest page.................
INFO  - 2013-09-03 12:12:57 --> after the list array.................
INFO  - 2013-09-03 12:12:57 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%pa%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 12:12:57 --> after retrieving the data from db.................
INFO  - 2013-09-03 12:12:57 --> looping.................
DEBUG - 2013-09-03 12:12:57 --> Final output sent to browser
DEBUG - 2013-09-03 12:12:57 --> Total execution time: 0.0605
DEBUG - 2013-09-03 12:12:59 --> Config Class Initialized
DEBUG - 2013-09-03 12:12:59 --> Hooks Class Initialized
DEBUG - 2013-09-03 12:12:59 --> Utf8 Class Initialized
DEBUG - 2013-09-03 12:12:59 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 12:12:59 --> URI Class Initialized
DEBUG - 2013-09-03 12:12:59 --> Router Class Initialized
DEBUG - 2013-09-03 12:12:59 --> Output Class Initialized
DEBUG - 2013-09-03 12:12:59 --> Security Class Initialized
DEBUG - 2013-09-03 12:12:59 --> Input Class Initialized
DEBUG - 2013-09-03 12:12:59 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 12:12:59 --> Language Class Initialized
DEBUG - 2013-09-03 12:12:59 --> Loader Class Initialized
DEBUG - 2013-09-03 12:12:59 --> Helper loaded: form_helper
DEBUG - 2013-09-03 12:12:59 --> Helper loaded: url_helper
DEBUG - 2013-09-03 12:12:59 --> Helper loaded: html_helper
DEBUG - 2013-09-03 12:12:59 --> Database Driver Class Initialized
DEBUG - 2013-09-03 12:12:59 --> Session Class Initialized
DEBUG - 2013-09-03 12:12:59 --> Helper loaded: string_helper
DEBUG - 2013-09-03 12:12:59 --> Session routines successfully run
DEBUG - 2013-09-03 12:12:59 --> Form Validation Class Initialized
DEBUG - 2013-09-03 12:12:59 --> Controller Class Initialized
DEBUG - 2013-09-03 12:12:59 --> Model Class Initialized
DEBUG - 2013-09-03 12:12:59 --> Model Class Initialized
DEBUG - 2013-09-03 12:12:59 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 12:12:59 --> after session initialization................
INFO  - 2013-09-03 12:12:59 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 12:12:59 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-09-03 12:12:59 --> 5==============================0
INFO  - 2013-09-03 12:12:59 --> SELECT dc.id_drugcomment as id, dc.comment, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
DEBUG - 2013-09-03 12:12:59 --> Final output sent to browser
DEBUG - 2013-09-03 12:12:59 --> Total execution time: 0.0730
DEBUG - 2013-09-03 12:14:08 --> Config Class Initialized
DEBUG - 2013-09-03 12:14:08 --> Hooks Class Initialized
DEBUG - 2013-09-03 12:14:08 --> Utf8 Class Initialized
DEBUG - 2013-09-03 12:14:08 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 12:14:08 --> URI Class Initialized
DEBUG - 2013-09-03 12:14:08 --> Router Class Initialized
DEBUG - 2013-09-03 12:14:08 --> Output Class Initialized
DEBUG - 2013-09-03 12:14:08 --> Security Class Initialized
DEBUG - 2013-09-03 12:14:08 --> Input Class Initialized
DEBUG - 2013-09-03 12:14:08 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 12:14:08 --> Language Class Initialized
DEBUG - 2013-09-03 12:14:09 --> Loader Class Initialized
DEBUG - 2013-09-03 12:14:09 --> Helper loaded: form_helper
DEBUG - 2013-09-03 12:14:09 --> Helper loaded: url_helper
DEBUG - 2013-09-03 12:14:09 --> Helper loaded: html_helper
DEBUG - 2013-09-03 12:14:09 --> Database Driver Class Initialized
DEBUG - 2013-09-03 12:14:09 --> Session Class Initialized
DEBUG - 2013-09-03 12:14:09 --> Helper loaded: string_helper
DEBUG - 2013-09-03 12:14:09 --> Session routines successfully run
DEBUG - 2013-09-03 12:14:09 --> Form Validation Class Initialized
DEBUG - 2013-09-03 12:14:09 --> Controller Class Initialized
DEBUG - 2013-09-03 12:14:09 --> Model Class Initialized
DEBUG - 2013-09-03 12:14:09 --> Model Class Initialized
DEBUG - 2013-09-03 12:14:09 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 12:14:09 --> after session initialization................
INFO  - 2013-09-03 12:14:09 --> inside rays login auth.............
DEBUG - 2013-09-03 12:14:09 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-09-03 12:14:09 --> XSS Filtering completed
DEBUG - 2013-09-03 12:14:09 --> XSS Filtering completed
INFO  - 2013-09-03 12:14:09 --> before getting the relation of member............6
INFO  - 2013-09-03 12:14:09 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-09-03 12:14:09 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 12:14:09 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-03 12:14:09 --> inside retrieving vacancy for member
INFO  - 2013-09-03 12:14:09 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-09-03 12:14:09 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 12:14:09 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-09-03 12:14:09 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '2'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 12:14:09 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-09-03 12:14:09 -->  column name inside view is 0 column Data is Array
INFO  - 2013-09-03 12:14:09 -->  column name inside view is 1 column Data is Array
INFO  - 2013-09-03 12:14:09 -->  column name inside view is 2 column Data is Array
INFO  - 2013-09-03 12:14:09 -->  column name inside view is 3 column Data is Array
DEBUG - 2013-09-03 12:14:09 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-09-03 12:14:09 --> Final output sent to browser
DEBUG - 2013-09-03 12:14:09 --> Total execution time: 0.1523
DEBUG - 2013-09-03 12:14:09 --> Config Class Initialized
DEBUG - 2013-09-03 12:14:09 --> Hooks Class Initialized
DEBUG - 2013-09-03 12:14:09 --> Utf8 Class Initialized
DEBUG - 2013-09-03 12:14:09 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 12:14:09 --> URI Class Initialized
DEBUG - 2013-09-03 12:14:09 --> Router Class Initialized
DEBUG - 2013-09-03 12:14:09 --> Output Class Initialized
DEBUG - 2013-09-03 12:14:09 --> Security Class Initialized
DEBUG - 2013-09-03 12:14:09 --> Input Class Initialized
DEBUG - 2013-09-03 12:14:09 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 12:14:09 --> Language Class Initialized
DEBUG - 2013-09-03 12:14:09 --> Loader Class Initialized
DEBUG - 2013-09-03 12:14:09 --> Helper loaded: form_helper
DEBUG - 2013-09-03 12:14:09 --> Helper loaded: url_helper
DEBUG - 2013-09-03 12:14:09 --> Helper loaded: html_helper
DEBUG - 2013-09-03 12:14:09 --> Database Driver Class Initialized
DEBUG - 2013-09-03 12:14:09 --> Session Class Initialized
DEBUG - 2013-09-03 12:14:09 --> Helper loaded: string_helper
DEBUG - 2013-09-03 12:14:09 --> Session routines successfully run
DEBUG - 2013-09-03 12:14:09 --> Form Validation Class Initialized
DEBUG - 2013-09-03 12:14:09 --> Controller Class Initialized
DEBUG - 2013-09-03 12:14:09 --> Model Class Initialized
DEBUG - 2013-09-03 12:14:09 --> Model Class Initialized
DEBUG - 2013-09-03 12:14:09 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 12:14:09 --> after session initialization................
ERROR - 2013-09-03 12:14:09 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-09-03 12:14:11 --> Config Class Initialized
DEBUG - 2013-09-03 12:14:11 --> Hooks Class Initialized
DEBUG - 2013-09-03 12:14:11 --> Utf8 Class Initialized
DEBUG - 2013-09-03 12:14:11 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 12:14:11 --> URI Class Initialized
DEBUG - 2013-09-03 12:14:11 --> Router Class Initialized
DEBUG - 2013-09-03 12:14:11 --> Output Class Initialized
DEBUG - 2013-09-03 12:14:11 --> Security Class Initialized
DEBUG - 2013-09-03 12:14:11 --> Input Class Initialized
DEBUG - 2013-09-03 12:14:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 12:14:11 --> Language Class Initialized
DEBUG - 2013-09-03 12:14:11 --> Loader Class Initialized
DEBUG - 2013-09-03 12:14:11 --> Helper loaded: form_helper
DEBUG - 2013-09-03 12:14:11 --> Helper loaded: url_helper
DEBUG - 2013-09-03 12:14:11 --> Helper loaded: html_helper
DEBUG - 2013-09-03 12:14:11 --> Database Driver Class Initialized
DEBUG - 2013-09-03 12:14:11 --> Session Class Initialized
DEBUG - 2013-09-03 12:14:11 --> Helper loaded: string_helper
DEBUG - 2013-09-03 12:14:11 --> Session routines successfully run
DEBUG - 2013-09-03 12:14:11 --> Form Validation Class Initialized
DEBUG - 2013-09-03 12:14:11 --> Controller Class Initialized
DEBUG - 2013-09-03 12:14:11 --> Model Class Initialized
DEBUG - 2013-09-03 12:14:11 --> Model Class Initialized
DEBUG - 2013-09-03 12:14:11 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 12:14:11 --> after session initialization................
INFO  - 2013-09-03 12:14:11 --> inside the auto suggest page.................
INFO  - 2013-09-03 12:14:11 --> after the list array.................
INFO  - 2013-09-03 12:14:11 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%panado%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 12:14:11 --> after retrieving the data from db.................
INFO  - 2013-09-03 12:14:11 --> looping.................
DEBUG - 2013-09-03 12:14:11 --> Final output sent to browser
DEBUG - 2013-09-03 12:14:11 --> Total execution time: 0.0717
DEBUG - 2013-09-03 12:14:13 --> Config Class Initialized
DEBUG - 2013-09-03 12:14:13 --> Hooks Class Initialized
DEBUG - 2013-09-03 12:14:13 --> Utf8 Class Initialized
DEBUG - 2013-09-03 12:14:13 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 12:14:13 --> URI Class Initialized
DEBUG - 2013-09-03 12:14:13 --> Router Class Initialized
DEBUG - 2013-09-03 12:14:13 --> Output Class Initialized
DEBUG - 2013-09-03 12:14:13 --> Security Class Initialized
DEBUG - 2013-09-03 12:14:13 --> Input Class Initialized
DEBUG - 2013-09-03 12:14:13 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 12:14:13 --> Language Class Initialized
DEBUG - 2013-09-03 12:14:13 --> Loader Class Initialized
DEBUG - 2013-09-03 12:14:13 --> Helper loaded: form_helper
DEBUG - 2013-09-03 12:14:13 --> Helper loaded: url_helper
DEBUG - 2013-09-03 12:14:13 --> Helper loaded: html_helper
DEBUG - 2013-09-03 12:14:13 --> Database Driver Class Initialized
DEBUG - 2013-09-03 12:14:13 --> Session Class Initialized
DEBUG - 2013-09-03 12:14:13 --> Helper loaded: string_helper
DEBUG - 2013-09-03 12:14:13 --> Session routines successfully run
DEBUG - 2013-09-03 12:14:13 --> Form Validation Class Initialized
DEBUG - 2013-09-03 12:14:13 --> Controller Class Initialized
DEBUG - 2013-09-03 12:14:13 --> Model Class Initialized
DEBUG - 2013-09-03 12:14:13 --> Model Class Initialized
DEBUG - 2013-09-03 12:14:13 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 12:14:13 --> after session initialization................
INFO  - 2013-09-03 12:14:13 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 12:14:13 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-09-03 12:14:13 --> 5==============================0
INFO  - 2013-09-03 12:14:13 --> SELECT dc.id_drugcomment as id, dc.comment, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
DEBUG - 2013-09-03 12:14:13 --> Final output sent to browser
DEBUG - 2013-09-03 12:14:13 --> Total execution time: 0.0706
DEBUG - 2013-09-03 12:16:07 --> Config Class Initialized
DEBUG - 2013-09-03 12:16:07 --> Hooks Class Initialized
DEBUG - 2013-09-03 12:16:07 --> Utf8 Class Initialized
DEBUG - 2013-09-03 12:16:07 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 12:16:07 --> URI Class Initialized
DEBUG - 2013-09-03 12:16:07 --> Router Class Initialized
DEBUG - 2013-09-03 12:16:07 --> Output Class Initialized
DEBUG - 2013-09-03 12:16:07 --> Security Class Initialized
DEBUG - 2013-09-03 12:16:07 --> Input Class Initialized
DEBUG - 2013-09-03 12:16:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 12:16:07 --> Language Class Initialized
DEBUG - 2013-09-03 12:16:07 --> Loader Class Initialized
DEBUG - 2013-09-03 12:16:07 --> Helper loaded: form_helper
DEBUG - 2013-09-03 12:16:07 --> Helper loaded: url_helper
DEBUG - 2013-09-03 12:16:07 --> Helper loaded: html_helper
DEBUG - 2013-09-03 12:16:07 --> Database Driver Class Initialized
DEBUG - 2013-09-03 12:16:07 --> Session Class Initialized
DEBUG - 2013-09-03 12:16:07 --> Helper loaded: string_helper
DEBUG - 2013-09-03 12:16:07 --> Session routines successfully run
DEBUG - 2013-09-03 12:16:07 --> Form Validation Class Initialized
DEBUG - 2013-09-03 12:16:07 --> Controller Class Initialized
DEBUG - 2013-09-03 12:16:07 --> Model Class Initialized
DEBUG - 2013-09-03 12:16:07 --> Model Class Initialized
DEBUG - 2013-09-03 12:16:07 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 12:16:07 --> after session initialization................
INFO  - 2013-09-03 12:16:07 --> inside rays login auth.............
DEBUG - 2013-09-03 12:16:07 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-09-03 12:16:07 --> XSS Filtering completed
DEBUG - 2013-09-03 12:16:07 --> XSS Filtering completed
INFO  - 2013-09-03 12:16:07 --> before getting the relation of member............6
INFO  - 2013-09-03 12:16:07 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-09-03 12:16:07 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 12:16:07 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-03 12:16:07 --> inside retrieving vacancy for member
INFO  - 2013-09-03 12:16:07 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-09-03 12:16:07 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 12:16:07 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-09-03 12:16:07 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '2'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 12:16:07 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-09-03 12:16:07 -->  column name inside view is 0 column Data is Array
INFO  - 2013-09-03 12:16:07 -->  column name inside view is 1 column Data is Array
INFO  - 2013-09-03 12:16:07 -->  column name inside view is 2 column Data is Array
INFO  - 2013-09-03 12:16:07 -->  column name inside view is 3 column Data is Array
DEBUG - 2013-09-03 12:16:07 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-09-03 12:16:07 --> Final output sent to browser
DEBUG - 2013-09-03 12:16:07 --> Total execution time: 0.0904
DEBUG - 2013-09-03 12:16:07 --> Config Class Initialized
DEBUG - 2013-09-03 12:16:07 --> Hooks Class Initialized
DEBUG - 2013-09-03 12:16:07 --> Utf8 Class Initialized
DEBUG - 2013-09-03 12:16:07 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 12:16:07 --> URI Class Initialized
DEBUG - 2013-09-03 12:16:07 --> Router Class Initialized
DEBUG - 2013-09-03 12:16:07 --> Output Class Initialized
DEBUG - 2013-09-03 12:16:07 --> Security Class Initialized
DEBUG - 2013-09-03 12:16:07 --> Input Class Initialized
DEBUG - 2013-09-03 12:16:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 12:16:07 --> Language Class Initialized
DEBUG - 2013-09-03 12:16:07 --> Loader Class Initialized
DEBUG - 2013-09-03 12:16:07 --> Helper loaded: form_helper
DEBUG - 2013-09-03 12:16:07 --> Helper loaded: url_helper
DEBUG - 2013-09-03 12:16:07 --> Helper loaded: html_helper
DEBUG - 2013-09-03 12:16:07 --> Database Driver Class Initialized
DEBUG - 2013-09-03 12:16:07 --> Session Class Initialized
DEBUG - 2013-09-03 12:16:07 --> Helper loaded: string_helper
DEBUG - 2013-09-03 12:16:07 --> Session routines successfully run
DEBUG - 2013-09-03 12:16:07 --> Form Validation Class Initialized
DEBUG - 2013-09-03 12:16:07 --> Controller Class Initialized
DEBUG - 2013-09-03 12:16:07 --> Model Class Initialized
DEBUG - 2013-09-03 12:16:07 --> Model Class Initialized
DEBUG - 2013-09-03 12:16:07 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 12:16:07 --> after session initialization................
ERROR - 2013-09-03 12:16:07 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-09-03 12:16:09 --> Config Class Initialized
DEBUG - 2013-09-03 12:16:09 --> Hooks Class Initialized
DEBUG - 2013-09-03 12:16:09 --> Utf8 Class Initialized
DEBUG - 2013-09-03 12:16:09 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 12:16:09 --> URI Class Initialized
DEBUG - 2013-09-03 12:16:09 --> Router Class Initialized
DEBUG - 2013-09-03 12:16:09 --> Output Class Initialized
DEBUG - 2013-09-03 12:16:09 --> Security Class Initialized
DEBUG - 2013-09-03 12:16:09 --> Input Class Initialized
DEBUG - 2013-09-03 12:16:09 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 12:16:09 --> Language Class Initialized
DEBUG - 2013-09-03 12:16:09 --> Loader Class Initialized
DEBUG - 2013-09-03 12:16:09 --> Helper loaded: form_helper
DEBUG - 2013-09-03 12:16:09 --> Helper loaded: url_helper
DEBUG - 2013-09-03 12:16:09 --> Helper loaded: html_helper
DEBUG - 2013-09-03 12:16:09 --> Database Driver Class Initialized
DEBUG - 2013-09-03 12:16:09 --> Session Class Initialized
DEBUG - 2013-09-03 12:16:09 --> Helper loaded: string_helper
DEBUG - 2013-09-03 12:16:09 --> Session routines successfully run
DEBUG - 2013-09-03 12:16:09 --> Form Validation Class Initialized
DEBUG - 2013-09-03 12:16:09 --> Controller Class Initialized
DEBUG - 2013-09-03 12:16:09 --> Model Class Initialized
DEBUG - 2013-09-03 12:16:09 --> Model Class Initialized
DEBUG - 2013-09-03 12:16:09 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 12:16:09 --> after session initialization................
INFO  - 2013-09-03 12:16:09 --> inside the auto suggest page.................
INFO  - 2013-09-03 12:16:09 --> after the list array.................
INFO  - 2013-09-03 12:16:09 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%panado%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 12:16:09 --> after retrieving the data from db.................
INFO  - 2013-09-03 12:16:09 --> looping.................
DEBUG - 2013-09-03 12:16:09 --> Final output sent to browser
DEBUG - 2013-09-03 12:16:09 --> Total execution time: 0.0559
DEBUG - 2013-09-03 12:16:10 --> Config Class Initialized
DEBUG - 2013-09-03 12:16:10 --> Hooks Class Initialized
DEBUG - 2013-09-03 12:16:10 --> Utf8 Class Initialized
DEBUG - 2013-09-03 12:16:10 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 12:16:10 --> URI Class Initialized
DEBUG - 2013-09-03 12:16:10 --> Router Class Initialized
DEBUG - 2013-09-03 12:16:10 --> Output Class Initialized
DEBUG - 2013-09-03 12:16:10 --> Security Class Initialized
DEBUG - 2013-09-03 12:16:10 --> Input Class Initialized
DEBUG - 2013-09-03 12:16:10 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 12:16:10 --> Language Class Initialized
DEBUG - 2013-09-03 12:16:10 --> Loader Class Initialized
DEBUG - 2013-09-03 12:16:10 --> Helper loaded: form_helper
DEBUG - 2013-09-03 12:16:10 --> Helper loaded: url_helper
DEBUG - 2013-09-03 12:16:10 --> Helper loaded: html_helper
DEBUG - 2013-09-03 12:16:10 --> Database Driver Class Initialized
DEBUG - 2013-09-03 12:16:10 --> Session Class Initialized
DEBUG - 2013-09-03 12:16:10 --> Helper loaded: string_helper
DEBUG - 2013-09-03 12:16:10 --> Session routines successfully run
DEBUG - 2013-09-03 12:16:10 --> Form Validation Class Initialized
DEBUG - 2013-09-03 12:16:10 --> Controller Class Initialized
DEBUG - 2013-09-03 12:16:10 --> Model Class Initialized
DEBUG - 2013-09-03 12:16:10 --> Model Class Initialized
DEBUG - 2013-09-03 12:16:10 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 12:16:10 --> after session initialization................
INFO  - 2013-09-03 12:16:11 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 12:16:11 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-09-03 12:16:11 --> 5==============================0
INFO  - 2013-09-03 12:16:11 --> SELECT dc.id_drugcomment as id, dc.comment, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
DEBUG - 2013-09-03 12:16:11 --> Final output sent to browser
DEBUG - 2013-09-03 12:16:11 --> Total execution time: 0.0752
DEBUG - 2013-09-03 12:16:19 --> Config Class Initialized
DEBUG - 2013-09-03 12:16:19 --> Hooks Class Initialized
DEBUG - 2013-09-03 12:16:19 --> Utf8 Class Initialized
DEBUG - 2013-09-03 12:16:19 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 12:16:19 --> URI Class Initialized
DEBUG - 2013-09-03 12:16:19 --> Router Class Initialized
DEBUG - 2013-09-03 12:16:19 --> Output Class Initialized
DEBUG - 2013-09-03 12:16:19 --> Security Class Initialized
DEBUG - 2013-09-03 12:16:19 --> Input Class Initialized
DEBUG - 2013-09-03 12:16:19 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 12:16:19 --> Language Class Initialized
DEBUG - 2013-09-03 12:16:19 --> Loader Class Initialized
DEBUG - 2013-09-03 12:16:19 --> Helper loaded: form_helper
DEBUG - 2013-09-03 12:16:19 --> Helper loaded: url_helper
DEBUG - 2013-09-03 12:16:19 --> Helper loaded: html_helper
DEBUG - 2013-09-03 12:16:19 --> Database Driver Class Initialized
DEBUG - 2013-09-03 12:16:19 --> Session Class Initialized
DEBUG - 2013-09-03 12:16:19 --> Helper loaded: string_helper
DEBUG - 2013-09-03 12:16:19 --> Session routines successfully run
DEBUG - 2013-09-03 12:16:19 --> Form Validation Class Initialized
DEBUG - 2013-09-03 12:16:19 --> Controller Class Initialized
DEBUG - 2013-09-03 12:16:19 --> Model Class Initialized
DEBUG - 2013-09-03 12:16:19 --> Model Class Initialized
DEBUG - 2013-09-03 12:16:19 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 12:16:19 --> after session initialization................
ERROR - 2013-09-03 12:16:19 --> 404 Page Not Found --> user_authorization/%5Bobject%20HTMLInputElement%5Dimages
DEBUG - 2013-09-03 12:16:21 --> Config Class Initialized
DEBUG - 2013-09-03 12:16:21 --> Hooks Class Initialized
DEBUG - 2013-09-03 12:16:21 --> Utf8 Class Initialized
DEBUG - 2013-09-03 12:16:21 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 12:16:21 --> URI Class Initialized
DEBUG - 2013-09-03 12:16:21 --> Router Class Initialized
DEBUG - 2013-09-03 12:16:21 --> Output Class Initialized
DEBUG - 2013-09-03 12:16:21 --> Security Class Initialized
DEBUG - 2013-09-03 12:16:21 --> Input Class Initialized
DEBUG - 2013-09-03 12:16:21 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 12:16:21 --> Language Class Initialized
DEBUG - 2013-09-03 12:16:21 --> Loader Class Initialized
DEBUG - 2013-09-03 12:16:21 --> Helper loaded: form_helper
DEBUG - 2013-09-03 12:16:21 --> Helper loaded: url_helper
DEBUG - 2013-09-03 12:16:21 --> Helper loaded: html_helper
DEBUG - 2013-09-03 12:16:21 --> Database Driver Class Initialized
DEBUG - 2013-09-03 12:16:21 --> Session Class Initialized
DEBUG - 2013-09-03 12:16:21 --> Helper loaded: string_helper
DEBUG - 2013-09-03 12:16:21 --> Session routines successfully run
DEBUG - 2013-09-03 12:16:21 --> Form Validation Class Initialized
DEBUG - 2013-09-03 12:16:21 --> Controller Class Initialized
DEBUG - 2013-09-03 12:16:21 --> Model Class Initialized
DEBUG - 2013-09-03 12:16:21 --> Model Class Initialized
DEBUG - 2013-09-03 12:16:21 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 12:16:21 --> after session initialization................
ERROR - 2013-09-03 12:16:21 --> 404 Page Not Found --> user_authorization/%5Bobject%20HTMLInputElement%5Dimages
DEBUG - 2013-09-03 12:16:22 --> Config Class Initialized
DEBUG - 2013-09-03 12:16:22 --> Hooks Class Initialized
DEBUG - 2013-09-03 12:16:22 --> Utf8 Class Initialized
DEBUG - 2013-09-03 12:16:22 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 12:16:22 --> URI Class Initialized
DEBUG - 2013-09-03 12:16:22 --> Router Class Initialized
DEBUG - 2013-09-03 12:16:22 --> Output Class Initialized
DEBUG - 2013-09-03 12:16:22 --> Security Class Initialized
DEBUG - 2013-09-03 12:16:22 --> Input Class Initialized
DEBUG - 2013-09-03 12:16:22 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 12:16:22 --> Language Class Initialized
DEBUG - 2013-09-03 12:16:22 --> Loader Class Initialized
DEBUG - 2013-09-03 12:16:22 --> Helper loaded: form_helper
DEBUG - 2013-09-03 12:16:22 --> Helper loaded: url_helper
DEBUG - 2013-09-03 12:16:22 --> Helper loaded: html_helper
DEBUG - 2013-09-03 12:16:22 --> Database Driver Class Initialized
DEBUG - 2013-09-03 12:16:22 --> Session Class Initialized
DEBUG - 2013-09-03 12:16:22 --> Helper loaded: string_helper
DEBUG - 2013-09-03 12:16:22 --> Session routines successfully run
DEBUG - 2013-09-03 12:16:22 --> Form Validation Class Initialized
DEBUG - 2013-09-03 12:16:22 --> Controller Class Initialized
DEBUG - 2013-09-03 12:16:22 --> Model Class Initialized
DEBUG - 2013-09-03 12:16:22 --> Model Class Initialized
DEBUG - 2013-09-03 12:16:22 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 12:16:22 --> after session initialization................
ERROR - 2013-09-03 12:16:22 --> 404 Page Not Found --> user_authorization/%5Bobject%20HTMLInputElement%5Dimages
DEBUG - 2013-09-03 12:16:22 --> Config Class Initialized
DEBUG - 2013-09-03 12:16:22 --> Hooks Class Initialized
DEBUG - 2013-09-03 12:16:22 --> Utf8 Class Initialized
DEBUG - 2013-09-03 12:16:22 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 12:16:22 --> URI Class Initialized
DEBUG - 2013-09-03 12:16:22 --> Router Class Initialized
DEBUG - 2013-09-03 12:16:22 --> Output Class Initialized
DEBUG - 2013-09-03 12:16:22 --> Security Class Initialized
DEBUG - 2013-09-03 12:16:22 --> Input Class Initialized
DEBUG - 2013-09-03 12:16:22 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 12:16:22 --> Language Class Initialized
DEBUG - 2013-09-03 12:16:22 --> Loader Class Initialized
DEBUG - 2013-09-03 12:16:22 --> Helper loaded: form_helper
DEBUG - 2013-09-03 12:16:22 --> Helper loaded: url_helper
DEBUG - 2013-09-03 12:16:22 --> Helper loaded: html_helper
DEBUG - 2013-09-03 12:16:22 --> Database Driver Class Initialized
DEBUG - 2013-09-03 12:16:22 --> Session Class Initialized
DEBUG - 2013-09-03 12:16:22 --> Helper loaded: string_helper
DEBUG - 2013-09-03 12:16:22 --> Session routines successfully run
DEBUG - 2013-09-03 12:16:22 --> Form Validation Class Initialized
DEBUG - 2013-09-03 12:16:22 --> Controller Class Initialized
DEBUG - 2013-09-03 12:16:22 --> Model Class Initialized
DEBUG - 2013-09-03 12:16:22 --> Model Class Initialized
DEBUG - 2013-09-03 12:16:22 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 12:16:22 --> after session initialization................
ERROR - 2013-09-03 12:16:22 --> 404 Page Not Found --> user_authorization/%5Bobject%20HTMLInputElement%5Dimages
DEBUG - 2013-09-03 12:16:22 --> Config Class Initialized
DEBUG - 2013-09-03 12:16:22 --> Hooks Class Initialized
DEBUG - 2013-09-03 12:16:22 --> Utf8 Class Initialized
DEBUG - 2013-09-03 12:16:22 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 12:16:22 --> URI Class Initialized
DEBUG - 2013-09-03 12:16:22 --> Router Class Initialized
DEBUG - 2013-09-03 12:16:22 --> Output Class Initialized
DEBUG - 2013-09-03 12:16:22 --> Security Class Initialized
DEBUG - 2013-09-03 12:16:22 --> Input Class Initialized
DEBUG - 2013-09-03 12:16:22 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 12:16:22 --> Language Class Initialized
DEBUG - 2013-09-03 12:16:22 --> Loader Class Initialized
DEBUG - 2013-09-03 12:16:22 --> Helper loaded: form_helper
DEBUG - 2013-09-03 12:16:22 --> Helper loaded: url_helper
DEBUG - 2013-09-03 12:16:22 --> Helper loaded: html_helper
DEBUG - 2013-09-03 12:16:22 --> Database Driver Class Initialized
DEBUG - 2013-09-03 12:16:22 --> Session Class Initialized
DEBUG - 2013-09-03 12:16:22 --> Helper loaded: string_helper
DEBUG - 2013-09-03 12:16:22 --> Session routines successfully run
DEBUG - 2013-09-03 12:16:22 --> Form Validation Class Initialized
DEBUG - 2013-09-03 12:16:22 --> Controller Class Initialized
DEBUG - 2013-09-03 12:16:22 --> Model Class Initialized
DEBUG - 2013-09-03 12:16:22 --> Model Class Initialized
DEBUG - 2013-09-03 12:16:22 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 12:16:22 --> after session initialization................
ERROR - 2013-09-03 12:16:22 --> 404 Page Not Found --> user_authorization/%5Bobject%20HTMLInputElement%5Dimages
DEBUG - 2013-09-03 12:16:53 --> Config Class Initialized
DEBUG - 2013-09-03 12:16:53 --> Hooks Class Initialized
DEBUG - 2013-09-03 12:16:53 --> Utf8 Class Initialized
DEBUG - 2013-09-03 12:16:53 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 12:16:53 --> URI Class Initialized
DEBUG - 2013-09-03 12:16:53 --> Router Class Initialized
DEBUG - 2013-09-03 12:16:53 --> Output Class Initialized
DEBUG - 2013-09-03 12:16:53 --> Security Class Initialized
DEBUG - 2013-09-03 12:16:53 --> Input Class Initialized
DEBUG - 2013-09-03 12:16:53 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 12:16:53 --> Language Class Initialized
DEBUG - 2013-09-03 12:16:53 --> Loader Class Initialized
DEBUG - 2013-09-03 12:16:53 --> Helper loaded: form_helper
DEBUG - 2013-09-03 12:16:53 --> Helper loaded: url_helper
DEBUG - 2013-09-03 12:16:53 --> Helper loaded: html_helper
DEBUG - 2013-09-03 12:16:53 --> Database Driver Class Initialized
DEBUG - 2013-09-03 12:16:53 --> Session Class Initialized
DEBUG - 2013-09-03 12:16:53 --> Helper loaded: string_helper
DEBUG - 2013-09-03 12:16:53 --> Session routines successfully run
DEBUG - 2013-09-03 12:16:53 --> Form Validation Class Initialized
DEBUG - 2013-09-03 12:16:53 --> Controller Class Initialized
DEBUG - 2013-09-03 12:16:53 --> Model Class Initialized
DEBUG - 2013-09-03 12:16:53 --> Model Class Initialized
DEBUG - 2013-09-03 12:16:53 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 12:16:53 --> after session initialization................
ERROR - 2013-09-03 12:16:53 --> 404 Page Not Found --> user_authorization/%5Bobject%20HTMLInputElement%5Dimages
DEBUG - 2013-09-03 13:06:30 --> Config Class Initialized
DEBUG - 2013-09-03 13:06:30 --> Hooks Class Initialized
DEBUG - 2013-09-03 13:06:30 --> Utf8 Class Initialized
DEBUG - 2013-09-03 13:06:30 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 13:06:30 --> URI Class Initialized
DEBUG - 2013-09-03 13:06:30 --> Router Class Initialized
DEBUG - 2013-09-03 13:06:30 --> Output Class Initialized
DEBUG - 2013-09-03 13:06:30 --> Security Class Initialized
DEBUG - 2013-09-03 13:06:30 --> Input Class Initialized
DEBUG - 2013-09-03 13:06:30 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 13:06:30 --> Language Class Initialized
DEBUG - 2013-09-03 13:06:30 --> Loader Class Initialized
DEBUG - 2013-09-03 13:06:30 --> Helper loaded: form_helper
DEBUG - 2013-09-03 13:06:30 --> Helper loaded: url_helper
DEBUG - 2013-09-03 13:06:30 --> Helper loaded: html_helper
DEBUG - 2013-09-03 13:06:30 --> Database Driver Class Initialized
DEBUG - 2013-09-03 13:06:30 --> Session Class Initialized
DEBUG - 2013-09-03 13:06:30 --> Helper loaded: string_helper
DEBUG - 2013-09-03 13:06:30 --> Session routines successfully run
DEBUG - 2013-09-03 13:06:30 --> Form Validation Class Initialized
DEBUG - 2013-09-03 13:06:30 --> Controller Class Initialized
DEBUG - 2013-09-03 13:06:30 --> Model Class Initialized
DEBUG - 2013-09-03 13:06:30 --> Model Class Initialized
DEBUG - 2013-09-03 13:06:30 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 13:06:30 --> after session initialization................
INFO  - 2013-09-03 13:06:30 --> inside rays login auth.............
DEBUG - 2013-09-03 13:06:30 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-09-03 13:06:30 --> XSS Filtering completed
DEBUG - 2013-09-03 13:06:30 --> XSS Filtering completed
INFO  - 2013-09-03 13:06:30 --> before getting the relation of member............6
INFO  - 2013-09-03 13:06:30 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-09-03 13:06:30 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 13:06:30 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-03 13:06:30 --> inside retrieving vacancy for member
INFO  - 2013-09-03 13:06:30 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-09-03 13:06:30 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 13:06:30 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-09-03 13:06:30 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '2'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 13:06:30 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-09-03 13:06:30 -->  column name inside view is 0 column Data is Array
INFO  - 2013-09-03 13:06:30 -->  column name inside view is 1 column Data is Array
INFO  - 2013-09-03 13:06:30 -->  column name inside view is 2 column Data is Array
INFO  - 2013-09-03 13:06:30 -->  column name inside view is 3 column Data is Array
DEBUG - 2013-09-03 13:06:30 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-09-03 13:06:30 --> Final output sent to browser
DEBUG - 2013-09-03 13:06:30 --> Total execution time: 0.0917
DEBUG - 2013-09-03 13:06:30 --> Config Class Initialized
DEBUG - 2013-09-03 13:06:30 --> Hooks Class Initialized
DEBUG - 2013-09-03 13:06:30 --> Utf8 Class Initialized
DEBUG - 2013-09-03 13:06:30 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 13:06:30 --> URI Class Initialized
DEBUG - 2013-09-03 13:06:30 --> Router Class Initialized
DEBUG - 2013-09-03 13:06:30 --> Output Class Initialized
DEBUG - 2013-09-03 13:06:30 --> Security Class Initialized
DEBUG - 2013-09-03 13:06:30 --> Input Class Initialized
DEBUG - 2013-09-03 13:06:30 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 13:06:30 --> Language Class Initialized
DEBUG - 2013-09-03 13:06:30 --> Loader Class Initialized
DEBUG - 2013-09-03 13:06:30 --> Helper loaded: form_helper
DEBUG - 2013-09-03 13:06:30 --> Helper loaded: url_helper
DEBUG - 2013-09-03 13:06:30 --> Helper loaded: html_helper
DEBUG - 2013-09-03 13:06:30 --> Database Driver Class Initialized
DEBUG - 2013-09-03 13:06:30 --> Session Class Initialized
DEBUG - 2013-09-03 13:06:30 --> Helper loaded: string_helper
DEBUG - 2013-09-03 13:06:30 --> Session routines successfully run
DEBUG - 2013-09-03 13:06:30 --> Form Validation Class Initialized
DEBUG - 2013-09-03 13:06:30 --> Controller Class Initialized
DEBUG - 2013-09-03 13:06:30 --> Model Class Initialized
DEBUG - 2013-09-03 13:06:30 --> Model Class Initialized
DEBUG - 2013-09-03 13:06:30 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 13:06:30 --> after session initialization................
ERROR - 2013-09-03 13:06:30 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-09-03 13:06:30 --> Config Class Initialized
DEBUG - 2013-09-03 13:06:30 --> Hooks Class Initialized
DEBUG - 2013-09-03 13:06:30 --> Utf8 Class Initialized
DEBUG - 2013-09-03 13:06:30 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 13:06:30 --> URI Class Initialized
DEBUG - 2013-09-03 13:06:30 --> Router Class Initialized
DEBUG - 2013-09-03 13:06:30 --> Output Class Initialized
DEBUG - 2013-09-03 13:06:30 --> Security Class Initialized
DEBUG - 2013-09-03 13:06:30 --> Input Class Initialized
DEBUG - 2013-09-03 13:06:30 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 13:06:30 --> Language Class Initialized
DEBUG - 2013-09-03 13:06:30 --> Loader Class Initialized
DEBUG - 2013-09-03 13:06:30 --> Helper loaded: form_helper
DEBUG - 2013-09-03 13:06:30 --> Helper loaded: url_helper
DEBUG - 2013-09-03 13:06:30 --> Helper loaded: html_helper
DEBUG - 2013-09-03 13:06:30 --> Database Driver Class Initialized
DEBUG - 2013-09-03 13:06:30 --> Session Class Initialized
DEBUG - 2013-09-03 13:06:30 --> Helper loaded: string_helper
DEBUG - 2013-09-03 13:06:30 --> Session routines successfully run
DEBUG - 2013-09-03 13:06:30 --> Form Validation Class Initialized
DEBUG - 2013-09-03 13:06:30 --> Controller Class Initialized
DEBUG - 2013-09-03 13:06:30 --> Model Class Initialized
DEBUG - 2013-09-03 13:06:30 --> Model Class Initialized
DEBUG - 2013-09-03 13:06:30 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 13:06:30 --> after session initialization................
ERROR - 2013-09-03 13:06:30 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-09-03 13:06:37 --> Config Class Initialized
DEBUG - 2013-09-03 13:06:37 --> Hooks Class Initialized
DEBUG - 2013-09-03 13:06:37 --> Utf8 Class Initialized
DEBUG - 2013-09-03 13:06:37 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 13:06:37 --> URI Class Initialized
DEBUG - 2013-09-03 13:06:37 --> Router Class Initialized
DEBUG - 2013-09-03 13:06:37 --> Output Class Initialized
DEBUG - 2013-09-03 13:06:37 --> Security Class Initialized
DEBUG - 2013-09-03 13:06:37 --> Input Class Initialized
DEBUG - 2013-09-03 13:06:37 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 13:06:37 --> Language Class Initialized
DEBUG - 2013-09-03 13:06:37 --> Loader Class Initialized
DEBUG - 2013-09-03 13:06:37 --> Helper loaded: form_helper
DEBUG - 2013-09-03 13:06:37 --> Helper loaded: url_helper
DEBUG - 2013-09-03 13:06:37 --> Helper loaded: html_helper
DEBUG - 2013-09-03 13:06:37 --> Database Driver Class Initialized
DEBUG - 2013-09-03 13:06:37 --> Session Class Initialized
DEBUG - 2013-09-03 13:06:37 --> Helper loaded: string_helper
DEBUG - 2013-09-03 13:06:37 --> Session routines successfully run
DEBUG - 2013-09-03 13:06:37 --> Form Validation Class Initialized
DEBUG - 2013-09-03 13:06:37 --> Controller Class Initialized
DEBUG - 2013-09-03 13:06:37 --> Model Class Initialized
DEBUG - 2013-09-03 13:06:37 --> Model Class Initialized
DEBUG - 2013-09-03 13:06:37 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 13:06:37 --> after session initialization................
INFO  - 2013-09-03 13:06:37 --> inside the auto suggest page.................
INFO  - 2013-09-03 13:06:37 --> after the list array.................
INFO  - 2013-09-03 13:06:37 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%f%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 13:06:37 --> after retrieving the data from db.................
INFO  - 2013-09-03 13:06:37 --> looping.................
INFO  - 2013-09-03 13:06:37 --> looping.................
DEBUG - 2013-09-03 13:06:37 --> Final output sent to browser
DEBUG - 2013-09-03 13:06:37 --> Total execution time: 0.0555
DEBUG - 2013-09-03 13:06:37 --> Config Class Initialized
DEBUG - 2013-09-03 13:06:37 --> Hooks Class Initialized
DEBUG - 2013-09-03 13:06:37 --> Utf8 Class Initialized
DEBUG - 2013-09-03 13:06:37 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 13:06:37 --> URI Class Initialized
DEBUG - 2013-09-03 13:06:37 --> Router Class Initialized
DEBUG - 2013-09-03 13:06:37 --> Output Class Initialized
DEBUG - 2013-09-03 13:06:37 --> Security Class Initialized
DEBUG - 2013-09-03 13:06:37 --> Input Class Initialized
DEBUG - 2013-09-03 13:06:37 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 13:06:37 --> Language Class Initialized
DEBUG - 2013-09-03 13:06:37 --> Loader Class Initialized
DEBUG - 2013-09-03 13:06:37 --> Helper loaded: form_helper
DEBUG - 2013-09-03 13:06:37 --> Helper loaded: url_helper
DEBUG - 2013-09-03 13:06:37 --> Helper loaded: html_helper
DEBUG - 2013-09-03 13:06:37 --> Database Driver Class Initialized
DEBUG - 2013-09-03 13:06:37 --> Session Class Initialized
DEBUG - 2013-09-03 13:06:37 --> Helper loaded: string_helper
DEBUG - 2013-09-03 13:06:37 --> Session routines successfully run
DEBUG - 2013-09-03 13:06:37 --> Form Validation Class Initialized
DEBUG - 2013-09-03 13:06:37 --> Controller Class Initialized
DEBUG - 2013-09-03 13:06:37 --> Model Class Initialized
DEBUG - 2013-09-03 13:06:37 --> Model Class Initialized
DEBUG - 2013-09-03 13:06:37 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 13:06:37 --> after session initialization................
INFO  - 2013-09-03 13:06:37 --> inside the auto suggest page.................
INFO  - 2013-09-03 13:06:37 --> after the list array.................
INFO  - 2013-09-03 13:06:37 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%fa%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 13:06:37 --> after retrieving the data from db.................
INFO  - 2013-09-03 13:06:37 --> looping.................
DEBUG - 2013-09-03 13:06:37 --> Final output sent to browser
DEBUG - 2013-09-03 13:06:37 --> Total execution time: 0.0544
DEBUG - 2013-09-03 13:06:40 --> Config Class Initialized
DEBUG - 2013-09-03 13:06:40 --> Hooks Class Initialized
DEBUG - 2013-09-03 13:06:40 --> Utf8 Class Initialized
DEBUG - 2013-09-03 13:06:40 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 13:06:40 --> URI Class Initialized
DEBUG - 2013-09-03 13:06:40 --> Router Class Initialized
DEBUG - 2013-09-03 13:06:40 --> Output Class Initialized
DEBUG - 2013-09-03 13:06:40 --> Security Class Initialized
DEBUG - 2013-09-03 13:06:40 --> Input Class Initialized
DEBUG - 2013-09-03 13:06:40 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 13:06:40 --> Language Class Initialized
DEBUG - 2013-09-03 13:06:40 --> Loader Class Initialized
DEBUG - 2013-09-03 13:06:40 --> Helper loaded: form_helper
DEBUG - 2013-09-03 13:06:40 --> Helper loaded: url_helper
DEBUG - 2013-09-03 13:06:40 --> Helper loaded: html_helper
DEBUG - 2013-09-03 13:06:40 --> Database Driver Class Initialized
DEBUG - 2013-09-03 13:06:40 --> Session Class Initialized
DEBUG - 2013-09-03 13:06:40 --> Helper loaded: string_helper
DEBUG - 2013-09-03 13:06:40 --> Session routines successfully run
DEBUG - 2013-09-03 13:06:40 --> Form Validation Class Initialized
DEBUG - 2013-09-03 13:06:40 --> Controller Class Initialized
DEBUG - 2013-09-03 13:06:40 --> Model Class Initialized
DEBUG - 2013-09-03 13:06:40 --> Model Class Initialized
DEBUG - 2013-09-03 13:06:40 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 13:06:40 --> after session initialization................
INFO  - 2013-09-03 13:06:40 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '4'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 13:06:40 --> inside retrieving comments member id and drug id is 4
INFO  - 2013-09-03 13:06:40 --> 5==============================0
INFO  - 2013-09-03 13:06:40 --> SELECT dc.id_drugcomment as id, dc.comment, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 4
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
DEBUG - 2013-09-03 13:06:40 --> Final output sent to browser
DEBUG - 2013-09-03 13:06:40 --> Total execution time: 0.0664
DEBUG - 2013-09-03 13:06:55 --> Config Class Initialized
DEBUG - 2013-09-03 13:06:55 --> Hooks Class Initialized
DEBUG - 2013-09-03 13:06:55 --> Utf8 Class Initialized
DEBUG - 2013-09-03 13:06:55 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 13:06:55 --> URI Class Initialized
DEBUG - 2013-09-03 13:06:55 --> Router Class Initialized
DEBUG - 2013-09-03 13:06:55 --> Output Class Initialized
DEBUG - 2013-09-03 13:06:55 --> Security Class Initialized
DEBUG - 2013-09-03 13:06:55 --> Input Class Initialized
DEBUG - 2013-09-03 13:06:55 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 13:06:55 --> Language Class Initialized
DEBUG - 2013-09-03 13:06:55 --> Loader Class Initialized
DEBUG - 2013-09-03 13:06:55 --> Helper loaded: form_helper
DEBUG - 2013-09-03 13:06:55 --> Helper loaded: url_helper
DEBUG - 2013-09-03 13:06:55 --> Helper loaded: html_helper
DEBUG - 2013-09-03 13:06:55 --> Database Driver Class Initialized
DEBUG - 2013-09-03 13:06:55 --> Session Class Initialized
DEBUG - 2013-09-03 13:06:55 --> Helper loaded: string_helper
DEBUG - 2013-09-03 13:06:55 --> Session routines successfully run
DEBUG - 2013-09-03 13:06:55 --> Form Validation Class Initialized
DEBUG - 2013-09-03 13:06:55 --> Controller Class Initialized
DEBUG - 2013-09-03 13:06:55 --> Model Class Initialized
DEBUG - 2013-09-03 13:06:55 --> Model Class Initialized
DEBUG - 2013-09-03 13:06:55 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 13:06:55 --> after session initialization................
INFO  - 2013-09-03 13:06:55 --> inside the create comment page.................
INFO  - 2013-09-03 13:06:55 --> before inserting into drug comment.................
INFO  - 2013-09-03 13:06:55 --> after inserting into drug comment.................82
INFO  - 2013-09-03 13:06:55 --> the status of the transaction is...........1 the insert id is ......82
INFO  - 2013-09-03 13:06:55 --> after creating comments.................<div class='row-fluid'><div class='span12'><div class='editor-label'><img src='http://localhost/Pharmarays/pharma-public/images/profilem1.png' /><div><div id='comment_username'>Pharmacist Elvis onuorah</div><br/><div id='user_comment'>hihihihi</div></div></div></div></div>
INFO  - 2013-09-03 13:06:55 --> inside retrieving comments member type id and drug id is 2
INFO  - 2013-09-03 13:06:55 --> SELECT count(dc.comment) as comment_count, `mt`.`name` as membertypename
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype` and mt.id_membertype = 3
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-09-03 13:06:55 --> the comment count by Male Doctor is.................1
DEBUG - 2013-09-03 13:06:55 --> Final output sent to browser
DEBUG - 2013-09-03 13:06:55 --> Total execution time: 0.3787
DEBUG - 2013-09-03 13:07:03 --> Config Class Initialized
DEBUG - 2013-09-03 13:07:03 --> Hooks Class Initialized
DEBUG - 2013-09-03 13:07:03 --> Utf8 Class Initialized
DEBUG - 2013-09-03 13:07:03 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 13:07:03 --> URI Class Initialized
DEBUG - 2013-09-03 13:07:03 --> Router Class Initialized
DEBUG - 2013-09-03 13:07:03 --> Output Class Initialized
DEBUG - 2013-09-03 13:07:03 --> Security Class Initialized
DEBUG - 2013-09-03 13:07:03 --> Input Class Initialized
DEBUG - 2013-09-03 13:07:03 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 13:07:03 --> Language Class Initialized
DEBUG - 2013-09-03 13:07:03 --> Loader Class Initialized
DEBUG - 2013-09-03 13:07:03 --> Helper loaded: form_helper
DEBUG - 2013-09-03 13:07:03 --> Helper loaded: url_helper
DEBUG - 2013-09-03 13:07:03 --> Helper loaded: html_helper
DEBUG - 2013-09-03 13:07:03 --> Database Driver Class Initialized
DEBUG - 2013-09-03 13:07:03 --> Session Class Initialized
DEBUG - 2013-09-03 13:07:03 --> Helper loaded: string_helper
DEBUG - 2013-09-03 13:07:03 --> Session routines successfully run
DEBUG - 2013-09-03 13:07:03 --> Form Validation Class Initialized
DEBUG - 2013-09-03 13:07:03 --> Controller Class Initialized
DEBUG - 2013-09-03 13:07:03 --> Model Class Initialized
DEBUG - 2013-09-03 13:07:03 --> Model Class Initialized
DEBUG - 2013-09-03 13:07:03 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 13:07:03 --> after session initialization................
INFO  - 2013-09-03 13:07:03 --> inside the create comment page.................
INFO  - 2013-09-03 13:07:03 --> before inserting into drug comment.................
INFO  - 2013-09-03 13:07:03 --> after inserting into drug comment.................83
INFO  - 2013-09-03 13:07:03 --> the status of the transaction is...........1 the insert id is ......83
INFO  - 2013-09-03 13:07:03 --> after creating comments.................<div class='row-fluid'><div class='span12'><div class='editor-label'><img src='http://localhost/Pharmarays/pharma-public/images/profilem1.png' /><div><div id='comment_username'>Pharmacist Elvis onuorah</div><br/><div id='user_comment'>noiollkjlkjl</div></div></div></div></div>
INFO  - 2013-09-03 13:07:03 --> inside retrieving comments member type id and drug id is 2
INFO  - 2013-09-03 13:07:03 --> SELECT count(dc.comment) as comment_count, `mt`.`name` as membertypename
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype` and mt.id_membertype = 3
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-09-03 13:07:03 --> the comment count by Male Doctor is.................2
DEBUG - 2013-09-03 13:07:03 --> Final output sent to browser
DEBUG - 2013-09-03 13:07:03 --> Total execution time: 0.1733
DEBUG - 2013-09-03 13:07:06 --> Config Class Initialized
DEBUG - 2013-09-03 13:07:06 --> Hooks Class Initialized
DEBUG - 2013-09-03 13:07:06 --> Utf8 Class Initialized
DEBUG - 2013-09-03 13:07:06 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 13:07:06 --> URI Class Initialized
DEBUG - 2013-09-03 13:07:06 --> Router Class Initialized
DEBUG - 2013-09-03 13:07:06 --> Output Class Initialized
DEBUG - 2013-09-03 13:07:06 --> Security Class Initialized
DEBUG - 2013-09-03 13:07:06 --> Input Class Initialized
DEBUG - 2013-09-03 13:07:06 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 13:07:06 --> Language Class Initialized
DEBUG - 2013-09-03 13:07:06 --> Loader Class Initialized
DEBUG - 2013-09-03 13:07:06 --> Helper loaded: form_helper
DEBUG - 2013-09-03 13:07:06 --> Helper loaded: url_helper
DEBUG - 2013-09-03 13:07:06 --> Helper loaded: html_helper
DEBUG - 2013-09-03 13:07:07 --> Database Driver Class Initialized
DEBUG - 2013-09-03 13:07:07 --> Session Class Initialized
DEBUG - 2013-09-03 13:07:07 --> Helper loaded: string_helper
DEBUG - 2013-09-03 13:07:07 --> Session routines successfully run
DEBUG - 2013-09-03 13:07:07 --> Form Validation Class Initialized
DEBUG - 2013-09-03 13:07:07 --> Controller Class Initialized
DEBUG - 2013-09-03 13:07:07 --> Model Class Initialized
DEBUG - 2013-09-03 13:07:07 --> Model Class Initialized
DEBUG - 2013-09-03 13:07:07 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 13:07:07 --> after session initialization................
INFO  - 2013-09-03 13:07:07 --> inside rays login auth.............
DEBUG - 2013-09-03 13:07:07 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-09-03 13:07:07 --> XSS Filtering completed
DEBUG - 2013-09-03 13:07:07 --> XSS Filtering completed
INFO  - 2013-09-03 13:07:07 --> before getting the relation of member............6
INFO  - 2013-09-03 13:07:07 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-09-03 13:07:07 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 13:07:07 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-03 13:07:07 --> inside retrieving vacancy for member
INFO  - 2013-09-03 13:07:07 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-09-03 13:07:07 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 13:07:07 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-09-03 13:07:07 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '2'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 13:07:07 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-09-03 13:07:07 -->  column name inside view is 0 column Data is Array
INFO  - 2013-09-03 13:07:07 -->  column name inside view is 1 column Data is Array
INFO  - 2013-09-03 13:07:07 -->  column name inside view is 2 column Data is Array
INFO  - 2013-09-03 13:07:07 -->  column name inside view is 3 column Data is Array
INFO  - 2013-09-03 13:07:07 -->  column name inside view is 0 column Data is Array
INFO  - 2013-09-03 13:07:07 -->  column name inside view is 1 column Data is Array
INFO  - 2013-09-03 13:07:07 -->  column name inside view is 0 column Data is Array
DEBUG - 2013-09-03 13:07:07 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-09-03 13:07:07 --> Final output sent to browser
DEBUG - 2013-09-03 13:07:07 --> Total execution time: 0.0840
DEBUG - 2013-09-03 13:07:07 --> Config Class Initialized
DEBUG - 2013-09-03 13:07:07 --> Hooks Class Initialized
DEBUG - 2013-09-03 13:07:07 --> Utf8 Class Initialized
DEBUG - 2013-09-03 13:07:07 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 13:07:07 --> URI Class Initialized
DEBUG - 2013-09-03 13:07:07 --> Router Class Initialized
DEBUG - 2013-09-03 13:07:07 --> Output Class Initialized
DEBUG - 2013-09-03 13:07:07 --> Security Class Initialized
DEBUG - 2013-09-03 13:07:07 --> Input Class Initialized
DEBUG - 2013-09-03 13:07:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 13:07:07 --> Language Class Initialized
DEBUG - 2013-09-03 13:07:07 --> Loader Class Initialized
DEBUG - 2013-09-03 13:07:07 --> Helper loaded: form_helper
DEBUG - 2013-09-03 13:07:07 --> Helper loaded: url_helper
DEBUG - 2013-09-03 13:07:07 --> Helper loaded: html_helper
DEBUG - 2013-09-03 13:07:07 --> Database Driver Class Initialized
DEBUG - 2013-09-03 13:07:07 --> Session Class Initialized
DEBUG - 2013-09-03 13:07:07 --> Helper loaded: string_helper
DEBUG - 2013-09-03 13:07:07 --> Session routines successfully run
DEBUG - 2013-09-03 13:07:07 --> Form Validation Class Initialized
DEBUG - 2013-09-03 13:07:07 --> Controller Class Initialized
DEBUG - 2013-09-03 13:07:07 --> Model Class Initialized
DEBUG - 2013-09-03 13:07:07 --> Model Class Initialized
DEBUG - 2013-09-03 13:07:07 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 13:07:07 --> after session initialization................
ERROR - 2013-09-03 13:07:07 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-09-03 13:07:07 --> Config Class Initialized
DEBUG - 2013-09-03 13:07:07 --> Hooks Class Initialized
DEBUG - 2013-09-03 13:07:07 --> Utf8 Class Initialized
DEBUG - 2013-09-03 13:07:07 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 13:07:07 --> URI Class Initialized
DEBUG - 2013-09-03 13:07:07 --> Router Class Initialized
DEBUG - 2013-09-03 13:07:07 --> Output Class Initialized
DEBUG - 2013-09-03 13:07:07 --> Security Class Initialized
DEBUG - 2013-09-03 13:07:07 --> Input Class Initialized
DEBUG - 2013-09-03 13:07:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 13:07:07 --> Language Class Initialized
DEBUG - 2013-09-03 13:07:07 --> Loader Class Initialized
DEBUG - 2013-09-03 13:07:07 --> Helper loaded: form_helper
DEBUG - 2013-09-03 13:07:07 --> Helper loaded: url_helper
DEBUG - 2013-09-03 13:07:07 --> Helper loaded: html_helper
DEBUG - 2013-09-03 13:07:07 --> Database Driver Class Initialized
DEBUG - 2013-09-03 13:07:07 --> Session Class Initialized
DEBUG - 2013-09-03 13:07:07 --> Helper loaded: string_helper
DEBUG - 2013-09-03 13:07:07 --> Session routines successfully run
DEBUG - 2013-09-03 13:07:07 --> Form Validation Class Initialized
DEBUG - 2013-09-03 13:07:07 --> Controller Class Initialized
DEBUG - 2013-09-03 13:07:07 --> Model Class Initialized
DEBUG - 2013-09-03 13:07:07 --> Model Class Initialized
DEBUG - 2013-09-03 13:07:07 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 13:07:07 --> after session initialization................
ERROR - 2013-09-03 13:07:07 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-09-03 13:07:09 --> Config Class Initialized
DEBUG - 2013-09-03 13:07:09 --> Hooks Class Initialized
DEBUG - 2013-09-03 13:07:09 --> Utf8 Class Initialized
DEBUG - 2013-09-03 13:07:09 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 13:07:09 --> URI Class Initialized
DEBUG - 2013-09-03 13:07:09 --> Router Class Initialized
DEBUG - 2013-09-03 13:07:09 --> Output Class Initialized
DEBUG - 2013-09-03 13:07:09 --> Security Class Initialized
DEBUG - 2013-09-03 13:07:09 --> Input Class Initialized
DEBUG - 2013-09-03 13:07:09 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 13:07:09 --> Language Class Initialized
DEBUG - 2013-09-03 13:07:09 --> Loader Class Initialized
DEBUG - 2013-09-03 13:07:09 --> Helper loaded: form_helper
DEBUG - 2013-09-03 13:07:09 --> Helper loaded: url_helper
DEBUG - 2013-09-03 13:07:09 --> Helper loaded: html_helper
DEBUG - 2013-09-03 13:07:09 --> Database Driver Class Initialized
DEBUG - 2013-09-03 13:07:09 --> Session Class Initialized
DEBUG - 2013-09-03 13:07:09 --> Helper loaded: string_helper
DEBUG - 2013-09-03 13:07:09 --> Session routines successfully run
DEBUG - 2013-09-03 13:07:09 --> Form Validation Class Initialized
DEBUG - 2013-09-03 13:07:09 --> Controller Class Initialized
DEBUG - 2013-09-03 13:07:09 --> Model Class Initialized
DEBUG - 2013-09-03 13:07:09 --> Model Class Initialized
DEBUG - 2013-09-03 13:07:09 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 13:07:09 --> after session initialization................
INFO  - 2013-09-03 13:07:09 --> inside the auto suggest page.................
INFO  - 2013-09-03 13:07:09 --> after the list array.................
INFO  - 2013-09-03 13:07:10 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%fanside%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 13:07:10 --> after retrieving the data from db.................
INFO  - 2013-09-03 13:07:10 --> looping.................
DEBUG - 2013-09-03 13:07:10 --> Final output sent to browser
DEBUG - 2013-09-03 13:07:10 --> Total execution time: 0.0559
DEBUG - 2013-09-03 13:07:11 --> Config Class Initialized
DEBUG - 2013-09-03 13:07:11 --> Hooks Class Initialized
DEBUG - 2013-09-03 13:07:11 --> Utf8 Class Initialized
DEBUG - 2013-09-03 13:07:11 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 13:07:11 --> URI Class Initialized
DEBUG - 2013-09-03 13:07:11 --> Router Class Initialized
DEBUG - 2013-09-03 13:07:11 --> Output Class Initialized
DEBUG - 2013-09-03 13:07:11 --> Security Class Initialized
DEBUG - 2013-09-03 13:07:11 --> Input Class Initialized
DEBUG - 2013-09-03 13:07:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 13:07:11 --> Language Class Initialized
DEBUG - 2013-09-03 13:07:11 --> Loader Class Initialized
DEBUG - 2013-09-03 13:07:11 --> Helper loaded: form_helper
DEBUG - 2013-09-03 13:07:11 --> Helper loaded: url_helper
DEBUG - 2013-09-03 13:07:11 --> Helper loaded: html_helper
DEBUG - 2013-09-03 13:07:11 --> Database Driver Class Initialized
DEBUG - 2013-09-03 13:07:11 --> Session Class Initialized
DEBUG - 2013-09-03 13:07:11 --> Helper loaded: string_helper
DEBUG - 2013-09-03 13:07:11 --> Session routines successfully run
DEBUG - 2013-09-03 13:07:11 --> Form Validation Class Initialized
DEBUG - 2013-09-03 13:07:11 --> Controller Class Initialized
DEBUG - 2013-09-03 13:07:11 --> Model Class Initialized
DEBUG - 2013-09-03 13:07:11 --> Model Class Initialized
DEBUG - 2013-09-03 13:07:11 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 13:07:11 --> after session initialization................
INFO  - 2013-09-03 13:07:11 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '4'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 13:07:11 --> inside retrieving comments member id and drug id is 4
INFO  - 2013-09-03 13:07:11 --> 5==============================0
INFO  - 2013-09-03 13:07:11 --> SELECT dc.id_drugcomment as id, dc.comment, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 4
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
DEBUG - 2013-09-03 13:07:11 --> Final output sent to browser
DEBUG - 2013-09-03 13:07:11 --> Total execution time: 0.0685
DEBUG - 2013-09-03 13:07:19 --> Config Class Initialized
DEBUG - 2013-09-03 13:07:19 --> Hooks Class Initialized
DEBUG - 2013-09-03 13:07:19 --> Utf8 Class Initialized
DEBUG - 2013-09-03 13:07:19 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 13:07:19 --> URI Class Initialized
DEBUG - 2013-09-03 13:07:19 --> Router Class Initialized
DEBUG - 2013-09-03 13:07:19 --> Output Class Initialized
DEBUG - 2013-09-03 13:07:19 --> Security Class Initialized
DEBUG - 2013-09-03 13:07:19 --> Input Class Initialized
DEBUG - 2013-09-03 13:07:19 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 13:07:19 --> Language Class Initialized
DEBUG - 2013-09-03 13:07:19 --> Loader Class Initialized
DEBUG - 2013-09-03 13:07:19 --> Helper loaded: form_helper
DEBUG - 2013-09-03 13:07:19 --> Helper loaded: url_helper
DEBUG - 2013-09-03 13:07:19 --> Helper loaded: html_helper
DEBUG - 2013-09-03 13:07:19 --> Database Driver Class Initialized
DEBUG - 2013-09-03 13:07:19 --> Session Class Initialized
DEBUG - 2013-09-03 13:07:19 --> Helper loaded: string_helper
DEBUG - 2013-09-03 13:07:19 --> Session routines successfully run
DEBUG - 2013-09-03 13:07:19 --> Form Validation Class Initialized
DEBUG - 2013-09-03 13:07:19 --> Controller Class Initialized
DEBUG - 2013-09-03 13:07:19 --> Model Class Initialized
DEBUG - 2013-09-03 13:07:19 --> Model Class Initialized
DEBUG - 2013-09-03 13:07:19 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 13:07:19 --> after session initialization................
INFO  - 2013-09-03 13:07:19 --> inside the auto suggest page.................
INFO  - 2013-09-03 13:07:19 --> after the list array.................
INFO  - 2013-09-03 13:07:19 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%a%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 13:07:19 --> after retrieving the data from db.................
INFO  - 2013-09-03 13:07:19 --> looping.................
INFO  - 2013-09-03 13:07:19 --> looping.................
INFO  - 2013-09-03 13:07:19 --> looping.................
INFO  - 2013-09-03 13:07:19 --> looping.................
DEBUG - 2013-09-03 13:07:19 --> Final output sent to browser
DEBUG - 2013-09-03 13:07:19 --> Total execution time: 0.0598
DEBUG - 2013-09-03 13:07:20 --> Config Class Initialized
DEBUG - 2013-09-03 13:07:20 --> Hooks Class Initialized
DEBUG - 2013-09-03 13:07:20 --> Utf8 Class Initialized
DEBUG - 2013-09-03 13:07:20 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 13:07:20 --> URI Class Initialized
DEBUG - 2013-09-03 13:07:20 --> Router Class Initialized
DEBUG - 2013-09-03 13:07:20 --> Output Class Initialized
DEBUG - 2013-09-03 13:07:20 --> Security Class Initialized
DEBUG - 2013-09-03 13:07:20 --> Input Class Initialized
DEBUG - 2013-09-03 13:07:20 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 13:07:20 --> Language Class Initialized
DEBUG - 2013-09-03 13:07:20 --> Loader Class Initialized
DEBUG - 2013-09-03 13:07:20 --> Helper loaded: form_helper
DEBUG - 2013-09-03 13:07:20 --> Helper loaded: url_helper
DEBUG - 2013-09-03 13:07:20 --> Helper loaded: html_helper
DEBUG - 2013-09-03 13:07:20 --> Database Driver Class Initialized
DEBUG - 2013-09-03 13:07:20 --> Session Class Initialized
DEBUG - 2013-09-03 13:07:20 --> Helper loaded: string_helper
DEBUG - 2013-09-03 13:07:20 --> Session routines successfully run
DEBUG - 2013-09-03 13:07:20 --> Form Validation Class Initialized
DEBUG - 2013-09-03 13:07:20 --> Controller Class Initialized
DEBUG - 2013-09-03 13:07:20 --> Model Class Initialized
DEBUG - 2013-09-03 13:07:20 --> Model Class Initialized
DEBUG - 2013-09-03 13:07:20 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 13:07:20 --> after session initialization................
INFO  - 2013-09-03 13:07:20 --> inside the auto suggest page.................
INFO  - 2013-09-03 13:07:20 --> after the list array.................
INFO  - 2013-09-03 13:07:20 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%am%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 13:07:20 --> after retrieving the data from db.................
INFO  - 2013-09-03 13:07:20 --> looping.................
DEBUG - 2013-09-03 13:07:20 --> Final output sent to browser
DEBUG - 2013-09-03 13:07:20 --> Total execution time: 0.0546
DEBUG - 2013-09-03 13:07:21 --> Config Class Initialized
DEBUG - 2013-09-03 13:07:21 --> Hooks Class Initialized
DEBUG - 2013-09-03 13:07:21 --> Utf8 Class Initialized
DEBUG - 2013-09-03 13:07:21 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 13:07:21 --> URI Class Initialized
DEBUG - 2013-09-03 13:07:21 --> Router Class Initialized
DEBUG - 2013-09-03 13:07:21 --> Output Class Initialized
DEBUG - 2013-09-03 13:07:21 --> Security Class Initialized
DEBUG - 2013-09-03 13:07:21 --> Input Class Initialized
DEBUG - 2013-09-03 13:07:21 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 13:07:21 --> Language Class Initialized
DEBUG - 2013-09-03 13:07:21 --> Loader Class Initialized
DEBUG - 2013-09-03 13:07:21 --> Helper loaded: form_helper
DEBUG - 2013-09-03 13:07:21 --> Helper loaded: url_helper
DEBUG - 2013-09-03 13:07:21 --> Helper loaded: html_helper
DEBUG - 2013-09-03 13:07:21 --> Database Driver Class Initialized
DEBUG - 2013-09-03 13:07:21 --> Session Class Initialized
DEBUG - 2013-09-03 13:07:21 --> Helper loaded: string_helper
DEBUG - 2013-09-03 13:07:21 --> Session routines successfully run
DEBUG - 2013-09-03 13:07:21 --> Form Validation Class Initialized
DEBUG - 2013-09-03 13:07:21 --> Controller Class Initialized
DEBUG - 2013-09-03 13:07:21 --> Model Class Initialized
DEBUG - 2013-09-03 13:07:21 --> Model Class Initialized
DEBUG - 2013-09-03 13:07:21 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 13:07:21 --> after session initialization................
INFO  - 2013-09-03 13:07:21 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '2'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 13:07:22 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 13:07:22 --> 5==============================0
INFO  - 2013-09-03 13:07:22 --> SELECT dc.id_drugcomment as id, dc.comment, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
DEBUG - 2013-09-03 13:07:22 --> Final output sent to browser
DEBUG - 2013-09-03 13:07:22 --> Total execution time: 0.1104
DEBUG - 2013-09-03 13:13:21 --> Config Class Initialized
DEBUG - 2013-09-03 13:13:21 --> Hooks Class Initialized
DEBUG - 2013-09-03 13:13:21 --> Utf8 Class Initialized
DEBUG - 2013-09-03 13:13:21 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 13:13:21 --> URI Class Initialized
DEBUG - 2013-09-03 13:13:21 --> Router Class Initialized
DEBUG - 2013-09-03 13:13:21 --> Output Class Initialized
DEBUG - 2013-09-03 13:13:21 --> Security Class Initialized
DEBUG - 2013-09-03 13:13:21 --> Input Class Initialized
DEBUG - 2013-09-03 13:13:21 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 13:13:21 --> Language Class Initialized
DEBUG - 2013-09-03 13:13:21 --> Loader Class Initialized
DEBUG - 2013-09-03 13:13:21 --> Helper loaded: form_helper
DEBUG - 2013-09-03 13:13:21 --> Helper loaded: url_helper
DEBUG - 2013-09-03 13:13:21 --> Helper loaded: html_helper
DEBUG - 2013-09-03 13:13:21 --> Database Driver Class Initialized
DEBUG - 2013-09-03 13:13:21 --> Session Class Initialized
DEBUG - 2013-09-03 13:13:22 --> Helper loaded: string_helper
DEBUG - 2013-09-03 13:13:22 --> Session routines successfully run
DEBUG - 2013-09-03 13:13:22 --> Form Validation Class Initialized
DEBUG - 2013-09-03 13:13:22 --> Controller Class Initialized
DEBUG - 2013-09-03 13:13:22 --> Model Class Initialized
DEBUG - 2013-09-03 13:13:22 --> Model Class Initialized
DEBUG - 2013-09-03 13:13:22 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 13:13:22 --> after session initialization................
INFO  - 2013-09-03 13:13:22 --> inside rays login auth.............
DEBUG - 2013-09-03 13:13:22 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-09-03 13:13:22 --> XSS Filtering completed
DEBUG - 2013-09-03 13:13:22 --> XSS Filtering completed
INFO  - 2013-09-03 13:13:22 --> before getting the relation of member............6
INFO  - 2013-09-03 13:13:22 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-09-03 13:13:22 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 13:13:22 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-03 13:13:22 --> inside retrieving vacancy for member
INFO  - 2013-09-03 13:13:22 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-09-03 13:13:22 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 13:13:22 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-09-03 13:13:22 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '2'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 13:13:22 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-09-03 13:13:22 -->  column name inside view is 0 column Data is Array
INFO  - 2013-09-03 13:13:22 -->  column name inside view is 1 column Data is Array
INFO  - 2013-09-03 13:13:22 -->  column name inside view is 2 column Data is Array
INFO  - 2013-09-03 13:13:22 -->  column name inside view is 3 column Data is Array
INFO  - 2013-09-03 13:13:22 -->  column name inside view is 0 column Data is Array
INFO  - 2013-09-03 13:13:22 -->  column name inside view is 1 column Data is Array
INFO  - 2013-09-03 13:13:22 -->  column name inside view is 0 column Data is Array
DEBUG - 2013-09-03 13:13:22 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-09-03 13:13:22 --> Final output sent to browser
DEBUG - 2013-09-03 13:13:22 --> Total execution time: 0.1599
DEBUG - 2013-09-03 13:13:22 --> Config Class Initialized
DEBUG - 2013-09-03 13:13:22 --> Hooks Class Initialized
DEBUG - 2013-09-03 13:13:22 --> Utf8 Class Initialized
DEBUG - 2013-09-03 13:13:22 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 13:13:22 --> URI Class Initialized
DEBUG - 2013-09-03 13:13:22 --> Router Class Initialized
DEBUG - 2013-09-03 13:13:22 --> Output Class Initialized
DEBUG - 2013-09-03 13:13:22 --> Security Class Initialized
DEBUG - 2013-09-03 13:13:22 --> Input Class Initialized
DEBUG - 2013-09-03 13:13:22 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 13:13:22 --> Language Class Initialized
DEBUG - 2013-09-03 13:13:22 --> Loader Class Initialized
DEBUG - 2013-09-03 13:13:22 --> Helper loaded: form_helper
DEBUG - 2013-09-03 13:13:22 --> Helper loaded: url_helper
DEBUG - 2013-09-03 13:13:22 --> Helper loaded: html_helper
DEBUG - 2013-09-03 13:13:22 --> Database Driver Class Initialized
DEBUG - 2013-09-03 13:13:22 --> Session Class Initialized
DEBUG - 2013-09-03 13:13:22 --> Helper loaded: string_helper
DEBUG - 2013-09-03 13:13:22 --> Session routines successfully run
DEBUG - 2013-09-03 13:13:22 --> Form Validation Class Initialized
DEBUG - 2013-09-03 13:13:22 --> Controller Class Initialized
DEBUG - 2013-09-03 13:13:22 --> Model Class Initialized
DEBUG - 2013-09-03 13:13:22 --> Model Class Initialized
DEBUG - 2013-09-03 13:13:22 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 13:13:22 --> after session initialization................
ERROR - 2013-09-03 13:13:22 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-09-03 13:13:27 --> Config Class Initialized
DEBUG - 2013-09-03 13:13:27 --> Hooks Class Initialized
DEBUG - 2013-09-03 13:13:27 --> Utf8 Class Initialized
DEBUG - 2013-09-03 13:13:27 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 13:13:27 --> URI Class Initialized
DEBUG - 2013-09-03 13:13:27 --> Router Class Initialized
DEBUG - 2013-09-03 13:13:28 --> Output Class Initialized
DEBUG - 2013-09-03 13:13:28 --> Security Class Initialized
DEBUG - 2013-09-03 13:13:28 --> Input Class Initialized
DEBUG - 2013-09-03 13:13:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 13:13:28 --> Language Class Initialized
DEBUG - 2013-09-03 13:13:28 --> Loader Class Initialized
DEBUG - 2013-09-03 13:13:28 --> Helper loaded: form_helper
DEBUG - 2013-09-03 13:13:28 --> Helper loaded: url_helper
DEBUG - 2013-09-03 13:13:28 --> Helper loaded: html_helper
DEBUG - 2013-09-03 13:13:28 --> Database Driver Class Initialized
DEBUG - 2013-09-03 13:13:28 --> Session Class Initialized
DEBUG - 2013-09-03 13:13:28 --> Helper loaded: string_helper
DEBUG - 2013-09-03 13:13:28 --> Session routines successfully run
DEBUG - 2013-09-03 13:13:28 --> Form Validation Class Initialized
DEBUG - 2013-09-03 13:13:28 --> Controller Class Initialized
DEBUG - 2013-09-03 13:13:28 --> Model Class Initialized
DEBUG - 2013-09-03 13:13:28 --> Model Class Initialized
DEBUG - 2013-09-03 13:13:28 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 13:13:28 --> after session initialization................
INFO  - 2013-09-03 13:13:28 --> inside the auto suggest page.................
INFO  - 2013-09-03 13:13:28 --> after the list array.................
INFO  - 2013-09-03 13:13:28 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%p%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 13:13:28 --> after retrieving the data from db.................
INFO  - 2013-09-03 13:13:28 --> looping.................
INFO  - 2013-09-03 13:13:28 --> looping.................
DEBUG - 2013-09-03 13:13:28 --> Final output sent to browser
DEBUG - 2013-09-03 13:13:28 --> Total execution time: 0.0703
DEBUG - 2013-09-03 13:13:28 --> Config Class Initialized
DEBUG - 2013-09-03 13:13:28 --> Hooks Class Initialized
DEBUG - 2013-09-03 13:13:28 --> Utf8 Class Initialized
DEBUG - 2013-09-03 13:13:28 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 13:13:28 --> URI Class Initialized
DEBUG - 2013-09-03 13:13:28 --> Router Class Initialized
DEBUG - 2013-09-03 13:13:28 --> Output Class Initialized
DEBUG - 2013-09-03 13:13:28 --> Security Class Initialized
DEBUG - 2013-09-03 13:13:28 --> Input Class Initialized
DEBUG - 2013-09-03 13:13:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 13:13:29 --> Language Class Initialized
DEBUG - 2013-09-03 13:13:29 --> Loader Class Initialized
DEBUG - 2013-09-03 13:13:29 --> Helper loaded: form_helper
DEBUG - 2013-09-03 13:13:29 --> Helper loaded: url_helper
DEBUG - 2013-09-03 13:13:29 --> Helper loaded: html_helper
DEBUG - 2013-09-03 13:13:29 --> Database Driver Class Initialized
DEBUG - 2013-09-03 13:13:29 --> Session Class Initialized
DEBUG - 2013-09-03 13:13:29 --> Helper loaded: string_helper
DEBUG - 2013-09-03 13:13:29 --> Session routines successfully run
DEBUG - 2013-09-03 13:13:29 --> Form Validation Class Initialized
DEBUG - 2013-09-03 13:13:29 --> Controller Class Initialized
DEBUG - 2013-09-03 13:13:29 --> Model Class Initialized
DEBUG - 2013-09-03 13:13:29 --> Model Class Initialized
DEBUG - 2013-09-03 13:13:29 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 13:13:29 --> after session initialization................
INFO  - 2013-09-03 13:13:29 --> inside the auto suggest page.................
INFO  - 2013-09-03 13:13:29 --> after the list array.................
INFO  - 2013-09-03 13:13:29 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%pa%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 13:13:29 --> after retrieving the data from db.................
INFO  - 2013-09-03 13:13:29 --> looping.................
DEBUG - 2013-09-03 13:13:29 --> Final output sent to browser
DEBUG - 2013-09-03 13:13:29 --> Total execution time: 0.0688
DEBUG - 2013-09-03 13:13:34 --> Config Class Initialized
DEBUG - 2013-09-03 13:13:34 --> Hooks Class Initialized
DEBUG - 2013-09-03 13:13:34 --> Utf8 Class Initialized
DEBUG - 2013-09-03 13:13:34 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 13:13:34 --> URI Class Initialized
DEBUG - 2013-09-03 13:13:34 --> Router Class Initialized
DEBUG - 2013-09-03 13:13:34 --> Output Class Initialized
DEBUG - 2013-09-03 13:13:34 --> Security Class Initialized
DEBUG - 2013-09-03 13:13:34 --> Input Class Initialized
DEBUG - 2013-09-03 13:13:34 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 13:13:34 --> Language Class Initialized
DEBUG - 2013-09-03 13:13:34 --> Loader Class Initialized
DEBUG - 2013-09-03 13:13:34 --> Helper loaded: form_helper
DEBUG - 2013-09-03 13:13:34 --> Helper loaded: url_helper
DEBUG - 2013-09-03 13:13:34 --> Helper loaded: html_helper
DEBUG - 2013-09-03 13:13:34 --> Database Driver Class Initialized
DEBUG - 2013-09-03 13:13:34 --> Session Class Initialized
DEBUG - 2013-09-03 13:13:34 --> Helper loaded: string_helper
DEBUG - 2013-09-03 13:13:34 --> Session routines successfully run
DEBUG - 2013-09-03 13:13:34 --> Form Validation Class Initialized
DEBUG - 2013-09-03 13:13:34 --> Controller Class Initialized
DEBUG - 2013-09-03 13:13:34 --> Model Class Initialized
DEBUG - 2013-09-03 13:13:34 --> Model Class Initialized
DEBUG - 2013-09-03 13:13:34 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 13:13:34 --> after session initialization................
INFO  - 2013-09-03 13:13:34 --> inside the auto suggest page.................
INFO  - 2013-09-03 13:13:34 --> after the list array.................
INFO  - 2013-09-03 13:13:34 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%pana%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 13:13:34 --> after retrieving the data from db.................
INFO  - 2013-09-03 13:13:34 --> looping.................
DEBUG - 2013-09-03 13:13:34 --> Final output sent to browser
DEBUG - 2013-09-03 13:13:34 --> Total execution time: 0.0667
DEBUG - 2013-09-03 13:13:35 --> Config Class Initialized
DEBUG - 2013-09-03 13:13:35 --> Hooks Class Initialized
DEBUG - 2013-09-03 13:13:35 --> Utf8 Class Initialized
DEBUG - 2013-09-03 13:13:35 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 13:13:35 --> URI Class Initialized
DEBUG - 2013-09-03 13:13:35 --> Router Class Initialized
DEBUG - 2013-09-03 13:13:35 --> Output Class Initialized
DEBUG - 2013-09-03 13:13:35 --> Security Class Initialized
DEBUG - 2013-09-03 13:13:35 --> Input Class Initialized
DEBUG - 2013-09-03 13:13:35 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 13:13:35 --> Language Class Initialized
DEBUG - 2013-09-03 13:13:35 --> Loader Class Initialized
DEBUG - 2013-09-03 13:13:35 --> Helper loaded: form_helper
DEBUG - 2013-09-03 13:13:35 --> Helper loaded: url_helper
DEBUG - 2013-09-03 13:13:35 --> Helper loaded: html_helper
DEBUG - 2013-09-03 13:13:35 --> Database Driver Class Initialized
DEBUG - 2013-09-03 13:13:35 --> Session Class Initialized
DEBUG - 2013-09-03 13:13:35 --> Helper loaded: string_helper
DEBUG - 2013-09-03 13:13:35 --> Session routines successfully run
DEBUG - 2013-09-03 13:13:35 --> Form Validation Class Initialized
DEBUG - 2013-09-03 13:13:35 --> Controller Class Initialized
DEBUG - 2013-09-03 13:13:35 --> Model Class Initialized
DEBUG - 2013-09-03 13:13:35 --> Model Class Initialized
DEBUG - 2013-09-03 13:13:35 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 13:13:35 --> after session initialization................
INFO  - 2013-09-03 13:13:35 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 13:13:35 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-09-03 13:13:35 --> 5==============================0
INFO  - 2013-09-03 13:13:35 --> SELECT dc.id_drugcomment as id, dc.comment, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
DEBUG - 2013-09-03 13:13:35 --> Final output sent to browser
DEBUG - 2013-09-03 13:13:35 --> Total execution time: 0.0672
DEBUG - 2013-09-03 13:13:50 --> Config Class Initialized
DEBUG - 2013-09-03 13:13:50 --> Hooks Class Initialized
DEBUG - 2013-09-03 13:13:50 --> Utf8 Class Initialized
DEBUG - 2013-09-03 13:13:50 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 13:13:50 --> URI Class Initialized
DEBUG - 2013-09-03 13:13:50 --> Router Class Initialized
DEBUG - 2013-09-03 13:13:50 --> Output Class Initialized
DEBUG - 2013-09-03 13:13:50 --> Security Class Initialized
DEBUG - 2013-09-03 13:13:50 --> Input Class Initialized
DEBUG - 2013-09-03 13:13:50 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 13:13:50 --> Language Class Initialized
DEBUG - 2013-09-03 13:13:50 --> Loader Class Initialized
DEBUG - 2013-09-03 13:13:50 --> Helper loaded: form_helper
DEBUG - 2013-09-03 13:13:50 --> Helper loaded: url_helper
DEBUG - 2013-09-03 13:13:50 --> Helper loaded: html_helper
DEBUG - 2013-09-03 13:13:50 --> Database Driver Class Initialized
DEBUG - 2013-09-03 13:13:50 --> Session Class Initialized
DEBUG - 2013-09-03 13:13:50 --> Helper loaded: string_helper
DEBUG - 2013-09-03 13:13:50 --> Session routines successfully run
DEBUG - 2013-09-03 13:13:50 --> Form Validation Class Initialized
DEBUG - 2013-09-03 13:13:50 --> Controller Class Initialized
DEBUG - 2013-09-03 13:13:51 --> Model Class Initialized
DEBUG - 2013-09-03 13:13:51 --> Model Class Initialized
DEBUG - 2013-09-03 13:13:51 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 13:13:51 --> after session initialization................
INFO  - 2013-09-03 13:13:51 --> inside the auto suggest page.................
INFO  - 2013-09-03 13:13:51 --> after the list array.................
INFO  - 2013-09-03 13:13:51 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%f%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 13:13:51 --> after retrieving the data from db.................
INFO  - 2013-09-03 13:13:51 --> looping.................
INFO  - 2013-09-03 13:13:51 --> looping.................
DEBUG - 2013-09-03 13:13:51 --> Final output sent to browser
DEBUG - 2013-09-03 13:13:51 --> Total execution time: 0.0551
DEBUG - 2013-09-03 13:13:51 --> Config Class Initialized
DEBUG - 2013-09-03 13:13:51 --> Hooks Class Initialized
DEBUG - 2013-09-03 13:13:51 --> Utf8 Class Initialized
DEBUG - 2013-09-03 13:13:51 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 13:13:51 --> URI Class Initialized
DEBUG - 2013-09-03 13:13:51 --> Router Class Initialized
DEBUG - 2013-09-03 13:13:51 --> Output Class Initialized
DEBUG - 2013-09-03 13:13:51 --> Security Class Initialized
DEBUG - 2013-09-03 13:13:51 --> Input Class Initialized
DEBUG - 2013-09-03 13:13:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 13:13:51 --> Language Class Initialized
DEBUG - 2013-09-03 13:13:51 --> Loader Class Initialized
DEBUG - 2013-09-03 13:13:51 --> Helper loaded: form_helper
DEBUG - 2013-09-03 13:13:51 --> Helper loaded: url_helper
DEBUG - 2013-09-03 13:13:51 --> Helper loaded: html_helper
DEBUG - 2013-09-03 13:13:51 --> Database Driver Class Initialized
DEBUG - 2013-09-03 13:13:51 --> Session Class Initialized
DEBUG - 2013-09-03 13:13:51 --> Helper loaded: string_helper
DEBUG - 2013-09-03 13:13:51 --> Session routines successfully run
DEBUG - 2013-09-03 13:13:51 --> Form Validation Class Initialized
DEBUG - 2013-09-03 13:13:51 --> Controller Class Initialized
DEBUG - 2013-09-03 13:13:51 --> Model Class Initialized
DEBUG - 2013-09-03 13:13:51 --> Model Class Initialized
DEBUG - 2013-09-03 13:13:51 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 13:13:51 --> after session initialization................
INFO  - 2013-09-03 13:13:51 --> inside the auto suggest page.................
INFO  - 2013-09-03 13:13:51 --> after the list array.................
INFO  - 2013-09-03 13:13:51 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%fa%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 13:13:51 --> after retrieving the data from db.................
INFO  - 2013-09-03 13:13:51 --> looping.................
DEBUG - 2013-09-03 13:13:51 --> Final output sent to browser
DEBUG - 2013-09-03 13:13:51 --> Total execution time: 0.0687
DEBUG - 2013-09-03 13:13:53 --> Config Class Initialized
DEBUG - 2013-09-03 13:13:53 --> Hooks Class Initialized
DEBUG - 2013-09-03 13:13:53 --> Utf8 Class Initialized
DEBUG - 2013-09-03 13:13:53 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 13:13:53 --> URI Class Initialized
DEBUG - 2013-09-03 13:13:53 --> Router Class Initialized
DEBUG - 2013-09-03 13:13:53 --> Output Class Initialized
DEBUG - 2013-09-03 13:13:53 --> Security Class Initialized
DEBUG - 2013-09-03 13:13:53 --> Input Class Initialized
DEBUG - 2013-09-03 13:13:53 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 13:13:53 --> Language Class Initialized
DEBUG - 2013-09-03 13:13:53 --> Loader Class Initialized
DEBUG - 2013-09-03 13:13:53 --> Helper loaded: form_helper
DEBUG - 2013-09-03 13:13:53 --> Helper loaded: url_helper
DEBUG - 2013-09-03 13:13:53 --> Helper loaded: html_helper
DEBUG - 2013-09-03 13:13:53 --> Database Driver Class Initialized
DEBUG - 2013-09-03 13:13:53 --> Session Class Initialized
DEBUG - 2013-09-03 13:13:53 --> Helper loaded: string_helper
DEBUG - 2013-09-03 13:13:53 --> Session routines successfully run
DEBUG - 2013-09-03 13:13:53 --> Form Validation Class Initialized
DEBUG - 2013-09-03 13:13:53 --> Controller Class Initialized
DEBUG - 2013-09-03 13:13:53 --> Model Class Initialized
DEBUG - 2013-09-03 13:13:53 --> Model Class Initialized
DEBUG - 2013-09-03 13:13:53 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 13:13:53 --> after session initialization................
INFO  - 2013-09-03 13:13:53 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '4'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 13:13:53 --> inside retrieving comments member id and drug id is 4
INFO  - 2013-09-03 13:13:53 --> 5==============================0
INFO  - 2013-09-03 13:13:53 --> SELECT dc.id_drugcomment as id, dc.comment, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 4
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
DEBUG - 2013-09-03 13:13:53 --> Final output sent to browser
DEBUG - 2013-09-03 13:13:53 --> Total execution time: 0.0785
DEBUG - 2013-09-03 16:34:04 --> Config Class Initialized
DEBUG - 2013-09-03 16:34:04 --> Hooks Class Initialized
DEBUG - 2013-09-03 16:34:04 --> Utf8 Class Initialized
DEBUG - 2013-09-03 16:34:04 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 16:34:04 --> URI Class Initialized
DEBUG - 2013-09-03 16:34:04 --> Router Class Initialized
DEBUG - 2013-09-03 16:34:04 --> Output Class Initialized
DEBUG - 2013-09-03 16:34:04 --> Security Class Initialized
DEBUG - 2013-09-03 16:34:04 --> Input Class Initialized
DEBUG - 2013-09-03 16:34:04 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 16:34:04 --> Language Class Initialized
DEBUG - 2013-09-03 16:34:04 --> Loader Class Initialized
DEBUG - 2013-09-03 16:34:04 --> Helper loaded: form_helper
DEBUG - 2013-09-03 16:34:04 --> Helper loaded: url_helper
DEBUG - 2013-09-03 16:34:04 --> Helper loaded: html_helper
DEBUG - 2013-09-03 16:34:04 --> Database Driver Class Initialized
DEBUG - 2013-09-03 16:34:04 --> Session Class Initialized
DEBUG - 2013-09-03 16:34:04 --> Helper loaded: string_helper
DEBUG - 2013-09-03 16:34:04 --> A session cookie was not found.
DEBUG - 2013-09-03 16:34:04 --> Session routines successfully run
DEBUG - 2013-09-03 16:34:04 --> Form Validation Class Initialized
DEBUG - 2013-09-03 16:34:04 --> Controller Class Initialized
DEBUG - 2013-09-03 16:34:04 --> Model Class Initialized
DEBUG - 2013-09-03 16:34:04 --> Model Class Initialized
DEBUG - 2013-09-03 16:34:04 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 16:34:04 --> after session initialization................
INFO  - 2013-09-03 16:34:04 --> inside rays login auth.............
DEBUG - 2013-09-03 16:34:04 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-09-03 16:34:04 --> XSS Filtering completed
DEBUG - 2013-09-03 16:34:04 --> XSS Filtering completed
INFO  - 2013-09-03 16:34:04 --> before getting the relation of member............6
INFO  - 2013-09-03 16:34:04 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-09-03 16:34:04 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 16:34:04 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-03 16:34:04 --> inside retrieving vacancy for member
INFO  - 2013-09-03 16:34:04 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-09-03 16:34:04 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 16:34:04 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-09-03 16:34:04 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '2'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 16:34:04 --> SELECT count(dc.id_drugcomment)
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-09-03 16:34:04 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
ERROR - 2013-09-03 16:34:04 --> Severity: Notice  --> Undefined variable: comment_counts C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 369
INFO  - 2013-09-03 16:34:04 -->  column name inside view is 0 column Data is Array
INFO  - 2013-09-03 16:34:04 -->  column name inside view is 1 column Data is Array
INFO  - 2013-09-03 16:34:04 -->  column name inside view is 2 column Data is Array
INFO  - 2013-09-03 16:34:04 -->  column name inside view is 3 column Data is Array
ERROR - 2013-09-03 16:34:04 --> Severity: Notice  --> Object of class stdClass could not be converted to int C:\xampp\htdocs\Pharmarays\pharmaray-application\views\userpage.php 139
INFO  - 2013-09-03 16:34:04 -->  column name inside view is 0 column Data is Array
INFO  - 2013-09-03 16:34:04 -->  column name inside view is 1 column Data is Array
DEBUG - 2013-09-03 16:34:04 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-09-03 16:34:04 --> Final output sent to browser
DEBUG - 2013-09-03 16:34:04 --> Total execution time: 0.0907
DEBUG - 2013-09-03 16:34:04 --> Config Class Initialized
DEBUG - 2013-09-03 16:34:04 --> Hooks Class Initialized
DEBUG - 2013-09-03 16:34:04 --> Utf8 Class Initialized
DEBUG - 2013-09-03 16:34:04 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 16:34:04 --> URI Class Initialized
DEBUG - 2013-09-03 16:34:04 --> Router Class Initialized
DEBUG - 2013-09-03 16:34:04 --> Output Class Initialized
DEBUG - 2013-09-03 16:34:04 --> Security Class Initialized
DEBUG - 2013-09-03 16:34:04 --> Input Class Initialized
DEBUG - 2013-09-03 16:34:04 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 16:34:04 --> Language Class Initialized
DEBUG - 2013-09-03 16:34:04 --> Loader Class Initialized
DEBUG - 2013-09-03 16:34:04 --> Helper loaded: form_helper
DEBUG - 2013-09-03 16:34:04 --> Helper loaded: url_helper
DEBUG - 2013-09-03 16:34:04 --> Helper loaded: html_helper
DEBUG - 2013-09-03 16:34:04 --> Database Driver Class Initialized
DEBUG - 2013-09-03 16:34:04 --> Session Class Initialized
DEBUG - 2013-09-03 16:34:04 --> Helper loaded: string_helper
DEBUG - 2013-09-03 16:34:04 --> Session routines successfully run
DEBUG - 2013-09-03 16:34:04 --> Form Validation Class Initialized
DEBUG - 2013-09-03 16:34:04 --> Controller Class Initialized
DEBUG - 2013-09-03 16:34:04 --> Model Class Initialized
DEBUG - 2013-09-03 16:34:04 --> Model Class Initialized
DEBUG - 2013-09-03 16:34:04 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 16:34:04 --> after session initialization................
ERROR - 2013-09-03 16:34:04 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-09-03 16:34:52 --> Config Class Initialized
DEBUG - 2013-09-03 16:34:52 --> Hooks Class Initialized
DEBUG - 2013-09-03 16:34:52 --> Utf8 Class Initialized
DEBUG - 2013-09-03 16:34:52 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 16:34:52 --> URI Class Initialized
DEBUG - 2013-09-03 16:34:52 --> Router Class Initialized
DEBUG - 2013-09-03 16:34:52 --> Output Class Initialized
DEBUG - 2013-09-03 16:34:52 --> Security Class Initialized
DEBUG - 2013-09-03 16:34:52 --> Input Class Initialized
DEBUG - 2013-09-03 16:34:52 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 16:34:52 --> Language Class Initialized
DEBUG - 2013-09-03 16:34:52 --> Loader Class Initialized
DEBUG - 2013-09-03 16:34:52 --> Helper loaded: form_helper
DEBUG - 2013-09-03 16:34:52 --> Helper loaded: url_helper
DEBUG - 2013-09-03 16:34:52 --> Helper loaded: html_helper
DEBUG - 2013-09-03 16:34:52 --> Database Driver Class Initialized
DEBUG - 2013-09-03 16:34:52 --> Session Class Initialized
DEBUG - 2013-09-03 16:34:52 --> Helper loaded: string_helper
DEBUG - 2013-09-03 16:34:52 --> Session routines successfully run
DEBUG - 2013-09-03 16:34:52 --> Form Validation Class Initialized
DEBUG - 2013-09-03 16:34:52 --> Controller Class Initialized
DEBUG - 2013-09-03 16:34:52 --> Model Class Initialized
DEBUG - 2013-09-03 16:34:52 --> Model Class Initialized
DEBUG - 2013-09-03 16:34:52 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 16:34:52 --> after session initialization................
INFO  - 2013-09-03 16:34:52 --> inside rays login auth.............
DEBUG - 2013-09-03 16:34:52 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-09-03 16:34:52 --> XSS Filtering completed
DEBUG - 2013-09-03 16:34:52 --> XSS Filtering completed
INFO  - 2013-09-03 16:34:52 --> before getting the relation of member............6
INFO  - 2013-09-03 16:34:52 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-09-03 16:34:52 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 16:34:52 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-03 16:34:52 --> inside retrieving vacancy for member
INFO  - 2013-09-03 16:34:52 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-09-03 16:34:52 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 16:34:52 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-09-03 16:34:52 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '2'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 16:34:52 --> SELECT count(dc.id_drugcomment)
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-09-03 16:34:52 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-09-03 16:34:52 -->  column name inside view is 0 column Data is Array
INFO  - 2013-09-03 16:34:52 -->  column name inside view is 1 column Data is Array
INFO  - 2013-09-03 16:34:52 -->  column name inside view is 2 column Data is Array
INFO  - 2013-09-03 16:34:52 -->  column name inside view is 3 column Data is Array
INFO  - 2013-09-03 16:34:52 -->  column name inside view is 0 column Data is Array
INFO  - 2013-09-03 16:34:52 -->  column name inside view is 1 column Data is Array
INFO  - 2013-09-03 16:34:52 -->  column name inside view is count(dc.id_drugcomment) column Data is 2
DEBUG - 2013-09-03 16:34:52 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-09-03 16:34:52 --> Final output sent to browser
DEBUG - 2013-09-03 16:34:52 --> Total execution time: 0.0952
DEBUG - 2013-09-03 16:34:52 --> Config Class Initialized
DEBUG - 2013-09-03 16:34:52 --> Hooks Class Initialized
DEBUG - 2013-09-03 16:34:52 --> Utf8 Class Initialized
DEBUG - 2013-09-03 16:34:52 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 16:34:52 --> URI Class Initialized
DEBUG - 2013-09-03 16:34:52 --> Router Class Initialized
DEBUG - 2013-09-03 16:34:52 --> Output Class Initialized
DEBUG - 2013-09-03 16:34:52 --> Security Class Initialized
DEBUG - 2013-09-03 16:34:52 --> Input Class Initialized
DEBUG - 2013-09-03 16:34:52 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 16:34:52 --> Language Class Initialized
DEBUG - 2013-09-03 16:34:52 --> Loader Class Initialized
DEBUG - 2013-09-03 16:34:52 --> Helper loaded: form_helper
DEBUG - 2013-09-03 16:34:52 --> Helper loaded: url_helper
DEBUG - 2013-09-03 16:34:52 --> Helper loaded: html_helper
DEBUG - 2013-09-03 16:34:52 --> Database Driver Class Initialized
DEBUG - 2013-09-03 16:34:52 --> Session Class Initialized
DEBUG - 2013-09-03 16:34:52 --> Helper loaded: string_helper
DEBUG - 2013-09-03 16:34:52 --> Session routines successfully run
DEBUG - 2013-09-03 16:34:52 --> Form Validation Class Initialized
DEBUG - 2013-09-03 16:34:52 --> Controller Class Initialized
DEBUG - 2013-09-03 16:34:52 --> Model Class Initialized
DEBUG - 2013-09-03 16:34:52 --> Model Class Initialized
DEBUG - 2013-09-03 16:34:52 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 16:34:52 --> after session initialization................
ERROR - 2013-09-03 16:34:52 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-09-03 16:35:05 --> Config Class Initialized
DEBUG - 2013-09-03 16:35:05 --> Hooks Class Initialized
DEBUG - 2013-09-03 16:35:05 --> Utf8 Class Initialized
DEBUG - 2013-09-03 16:35:05 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 16:35:05 --> URI Class Initialized
DEBUG - 2013-09-03 16:35:05 --> Router Class Initialized
DEBUG - 2013-09-03 16:35:05 --> Output Class Initialized
DEBUG - 2013-09-03 16:35:05 --> Security Class Initialized
DEBUG - 2013-09-03 16:35:05 --> Input Class Initialized
DEBUG - 2013-09-03 16:35:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 16:35:05 --> Language Class Initialized
DEBUG - 2013-09-03 16:35:05 --> Loader Class Initialized
DEBUG - 2013-09-03 16:35:05 --> Helper loaded: form_helper
DEBUG - 2013-09-03 16:35:05 --> Helper loaded: url_helper
DEBUG - 2013-09-03 16:35:05 --> Helper loaded: html_helper
DEBUG - 2013-09-03 16:35:05 --> Database Driver Class Initialized
DEBUG - 2013-09-03 16:35:05 --> Session Class Initialized
DEBUG - 2013-09-03 16:35:05 --> Helper loaded: string_helper
DEBUG - 2013-09-03 16:35:05 --> Session routines successfully run
DEBUG - 2013-09-03 16:35:05 --> Form Validation Class Initialized
DEBUG - 2013-09-03 16:35:05 --> Controller Class Initialized
DEBUG - 2013-09-03 16:35:05 --> Model Class Initialized
DEBUG - 2013-09-03 16:35:05 --> Model Class Initialized
DEBUG - 2013-09-03 16:35:05 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 16:35:05 --> after session initialization................
INFO  - 2013-09-03 16:35:05 --> inside the auto suggest page.................
INFO  - 2013-09-03 16:35:05 --> after the list array.................
INFO  - 2013-09-03 16:35:05 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%c%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 16:35:05 --> after retrieving the data from db.................
INFO  - 2013-09-03 16:35:05 --> looping.................
INFO  - 2013-09-03 16:35:05 --> looping.................
DEBUG - 2013-09-03 16:35:05 --> Final output sent to browser
DEBUG - 2013-09-03 16:35:05 --> Total execution time: 0.1046
DEBUG - 2013-09-03 16:35:06 --> Config Class Initialized
DEBUG - 2013-09-03 16:35:06 --> Hooks Class Initialized
DEBUG - 2013-09-03 16:35:06 --> Utf8 Class Initialized
DEBUG - 2013-09-03 16:35:06 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 16:35:06 --> URI Class Initialized
DEBUG - 2013-09-03 16:35:06 --> Router Class Initialized
DEBUG - 2013-09-03 16:35:06 --> Output Class Initialized
DEBUG - 2013-09-03 16:35:06 --> Security Class Initialized
DEBUG - 2013-09-03 16:35:06 --> Input Class Initialized
DEBUG - 2013-09-03 16:35:06 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 16:35:06 --> Language Class Initialized
DEBUG - 2013-09-03 16:35:06 --> Loader Class Initialized
DEBUG - 2013-09-03 16:35:06 --> Helper loaded: form_helper
DEBUG - 2013-09-03 16:35:06 --> Helper loaded: url_helper
DEBUG - 2013-09-03 16:35:06 --> Helper loaded: html_helper
DEBUG - 2013-09-03 16:35:06 --> Database Driver Class Initialized
DEBUG - 2013-09-03 16:35:06 --> Session Class Initialized
DEBUG - 2013-09-03 16:35:06 --> Helper loaded: string_helper
DEBUG - 2013-09-03 16:35:06 --> Session routines successfully run
DEBUG - 2013-09-03 16:35:06 --> Form Validation Class Initialized
DEBUG - 2013-09-03 16:35:06 --> Controller Class Initialized
DEBUG - 2013-09-03 16:35:06 --> Model Class Initialized
DEBUG - 2013-09-03 16:35:06 --> Model Class Initialized
DEBUG - 2013-09-03 16:35:06 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 16:35:06 --> after session initialization................
INFO  - 2013-09-03 16:35:06 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '3'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 16:35:06 --> inside retrieving comments member id and drug id is 3
INFO  - 2013-09-03 16:35:06 --> 5==============================0
INFO  - 2013-09-03 16:35:06 --> SELECT dc.id_drugcomment as id, dc.comment, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 3
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-03 16:35:06 --> SELECT count(dc.id_drugcomment)
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 3
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
DEBUG - 2013-09-03 16:35:06 --> Final output sent to browser
DEBUG - 2013-09-03 16:35:06 --> Total execution time: 0.0894
DEBUG - 2013-09-03 16:36:30 --> Config Class Initialized
DEBUG - 2013-09-03 16:36:30 --> Hooks Class Initialized
DEBUG - 2013-09-03 16:36:30 --> Utf8 Class Initialized
DEBUG - 2013-09-03 16:36:30 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 16:36:30 --> URI Class Initialized
DEBUG - 2013-09-03 16:36:30 --> Router Class Initialized
DEBUG - 2013-09-03 16:36:30 --> Output Class Initialized
DEBUG - 2013-09-03 16:36:30 --> Security Class Initialized
DEBUG - 2013-09-03 16:36:30 --> Input Class Initialized
DEBUG - 2013-09-03 16:36:30 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 16:36:30 --> Language Class Initialized
DEBUG - 2013-09-03 16:36:30 --> Loader Class Initialized
DEBUG - 2013-09-03 16:36:30 --> Helper loaded: form_helper
DEBUG - 2013-09-03 16:36:30 --> Helper loaded: url_helper
DEBUG - 2013-09-03 16:36:30 --> Helper loaded: html_helper
DEBUG - 2013-09-03 16:36:30 --> Database Driver Class Initialized
DEBUG - 2013-09-03 16:36:30 --> Session Class Initialized
DEBUG - 2013-09-03 16:36:30 --> Helper loaded: string_helper
DEBUG - 2013-09-03 16:36:30 --> Session routines successfully run
DEBUG - 2013-09-03 16:36:30 --> Form Validation Class Initialized
DEBUG - 2013-09-03 16:36:30 --> Controller Class Initialized
DEBUG - 2013-09-03 16:36:30 --> Model Class Initialized
DEBUG - 2013-09-03 16:36:30 --> Model Class Initialized
DEBUG - 2013-09-03 16:36:30 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 16:36:30 --> after session initialization................
INFO  - 2013-09-03 16:36:30 --> inside rays login auth.............
DEBUG - 2013-09-03 16:36:30 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-09-03 16:36:30 --> XSS Filtering completed
DEBUG - 2013-09-03 16:36:30 --> XSS Filtering completed
INFO  - 2013-09-03 16:36:30 --> before getting the relation of member............6
INFO  - 2013-09-03 16:36:30 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-09-03 16:36:30 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 16:36:30 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-03 16:36:30 --> inside retrieving vacancy for member
INFO  - 2013-09-03 16:36:30 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-09-03 16:36:30 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 16:36:30 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-09-03 16:36:30 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '2'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 16:36:30 --> SELECT count(dc.id_drugcomment)
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-09-03 16:36:30 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-09-03 16:36:30 -->  column name inside view is 0 column Data is Array
INFO  - 2013-09-03 16:36:30 -->  column name inside view is 1 column Data is Array
INFO  - 2013-09-03 16:36:30 -->  column name inside view is 2 column Data is Array
INFO  - 2013-09-03 16:36:30 -->  column name inside view is 3 column Data is Array
ERROR - 2013-09-03 16:36:30 --> Severity: Notice  --> Object of class stdClass could not be converted to int C:\xampp\htdocs\Pharmarays\pharmaray-application\views\userpage.php 139
INFO  - 2013-09-03 16:36:30 -->  column name inside view is 0 column Data is Array
INFO  - 2013-09-03 16:36:30 -->  column name inside view is 1 column Data is Array
INFO  - 2013-09-03 16:36:30 -->  column name inside view is count(dc.id_drugcomment) column Data is 2
DEBUG - 2013-09-03 16:36:30 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-09-03 16:36:30 --> Final output sent to browser
DEBUG - 2013-09-03 16:36:30 --> Total execution time: 0.0902
DEBUG - 2013-09-03 16:36:30 --> Config Class Initialized
DEBUG - 2013-09-03 16:36:30 --> Hooks Class Initialized
DEBUG - 2013-09-03 16:36:30 --> Utf8 Class Initialized
DEBUG - 2013-09-03 16:36:30 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 16:36:30 --> URI Class Initialized
DEBUG - 2013-09-03 16:36:30 --> Router Class Initialized
DEBUG - 2013-09-03 16:36:30 --> Output Class Initialized
DEBUG - 2013-09-03 16:36:30 --> Security Class Initialized
DEBUG - 2013-09-03 16:36:30 --> Input Class Initialized
DEBUG - 2013-09-03 16:36:30 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 16:36:30 --> Language Class Initialized
DEBUG - 2013-09-03 16:36:30 --> Loader Class Initialized
DEBUG - 2013-09-03 16:36:30 --> Helper loaded: form_helper
DEBUG - 2013-09-03 16:36:30 --> Helper loaded: url_helper
DEBUG - 2013-09-03 16:36:30 --> Helper loaded: html_helper
DEBUG - 2013-09-03 16:36:30 --> Database Driver Class Initialized
DEBUG - 2013-09-03 16:36:30 --> Session Class Initialized
DEBUG - 2013-09-03 16:36:30 --> Helper loaded: string_helper
DEBUG - 2013-09-03 16:36:30 --> Session routines successfully run
DEBUG - 2013-09-03 16:36:30 --> Form Validation Class Initialized
DEBUG - 2013-09-03 16:36:30 --> Controller Class Initialized
DEBUG - 2013-09-03 16:36:30 --> Model Class Initialized
DEBUG - 2013-09-03 16:36:30 --> Model Class Initialized
DEBUG - 2013-09-03 16:36:30 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 16:36:30 --> after session initialization................
ERROR - 2013-09-03 16:36:30 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-09-03 16:36:30 --> Config Class Initialized
DEBUG - 2013-09-03 16:36:30 --> Hooks Class Initialized
DEBUG - 2013-09-03 16:36:30 --> Utf8 Class Initialized
DEBUG - 2013-09-03 16:36:30 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 16:36:30 --> URI Class Initialized
DEBUG - 2013-09-03 16:36:30 --> Router Class Initialized
DEBUG - 2013-09-03 16:36:30 --> Output Class Initialized
DEBUG - 2013-09-03 16:36:30 --> Security Class Initialized
DEBUG - 2013-09-03 16:36:30 --> Input Class Initialized
DEBUG - 2013-09-03 16:36:30 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 16:36:30 --> Language Class Initialized
DEBUG - 2013-09-03 16:36:30 --> Loader Class Initialized
DEBUG - 2013-09-03 16:36:30 --> Helper loaded: form_helper
DEBUG - 2013-09-03 16:36:30 --> Helper loaded: url_helper
DEBUG - 2013-09-03 16:36:30 --> Helper loaded: html_helper
DEBUG - 2013-09-03 16:36:30 --> Database Driver Class Initialized
DEBUG - 2013-09-03 16:36:30 --> Session Class Initialized
DEBUG - 2013-09-03 16:36:30 --> Helper loaded: string_helper
DEBUG - 2013-09-03 16:36:30 --> Session routines successfully run
DEBUG - 2013-09-03 16:36:30 --> Form Validation Class Initialized
DEBUG - 2013-09-03 16:36:30 --> Controller Class Initialized
DEBUG - 2013-09-03 16:36:30 --> Model Class Initialized
DEBUG - 2013-09-03 16:36:30 --> Model Class Initialized
DEBUG - 2013-09-03 16:36:30 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 16:36:30 --> after session initialization................
ERROR - 2013-09-03 16:36:30 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-09-03 17:08:49 --> Config Class Initialized
DEBUG - 2013-09-03 17:08:49 --> Hooks Class Initialized
DEBUG - 2013-09-03 17:08:49 --> Utf8 Class Initialized
DEBUG - 2013-09-03 17:08:49 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 17:08:49 --> URI Class Initialized
DEBUG - 2013-09-03 17:08:49 --> Router Class Initialized
DEBUG - 2013-09-03 17:08:49 --> Output Class Initialized
DEBUG - 2013-09-03 17:08:49 --> Security Class Initialized
DEBUG - 2013-09-03 17:08:49 --> Input Class Initialized
DEBUG - 2013-09-03 17:08:49 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 17:08:49 --> Language Class Initialized
DEBUG - 2013-09-03 17:08:49 --> Loader Class Initialized
DEBUG - 2013-09-03 17:08:49 --> Helper loaded: form_helper
DEBUG - 2013-09-03 17:08:49 --> Helper loaded: url_helper
DEBUG - 2013-09-03 17:08:49 --> Helper loaded: html_helper
DEBUG - 2013-09-03 17:08:49 --> Database Driver Class Initialized
DEBUG - 2013-09-03 17:08:49 --> Session Class Initialized
DEBUG - 2013-09-03 17:08:49 --> Helper loaded: string_helper
DEBUG - 2013-09-03 17:08:49 --> Session routines successfully run
DEBUG - 2013-09-03 17:08:49 --> Form Validation Class Initialized
DEBUG - 2013-09-03 17:08:49 --> Controller Class Initialized
DEBUG - 2013-09-03 17:08:49 --> Model Class Initialized
DEBUG - 2013-09-03 17:08:49 --> Model Class Initialized
DEBUG - 2013-09-03 17:08:49 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 17:08:49 --> after session initialization................
INFO  - 2013-09-03 17:08:49 --> inside rays login auth.............
DEBUG - 2013-09-03 17:08:49 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-09-03 17:08:49 --> XSS Filtering completed
DEBUG - 2013-09-03 17:08:49 --> XSS Filtering completed
INFO  - 2013-09-03 17:08:49 --> before getting the relation of member............6
INFO  - 2013-09-03 17:08:49 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-09-03 17:08:49 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 17:08:49 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-03 17:08:49 --> inside retrieving vacancy for member
INFO  - 2013-09-03 17:08:49 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-09-03 17:08:49 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 17:08:49 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-09-03 17:08:49 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '2'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 17:08:49 --> SELECT count(dc.id_drugcomment)
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-09-03 17:08:49 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-09-03 17:08:49 -->  column name inside view is 0 column Data is Array
INFO  - 2013-09-03 17:08:49 -->  column name inside view is 1 column Data is Array
INFO  - 2013-09-03 17:08:49 -->  column name inside view is 2 column Data is Array
INFO  - 2013-09-03 17:08:49 -->  column name inside view is 3 column Data is Array
ERROR - 2013-09-03 17:08:49 --> Severity: Notice  --> Object of class stdClass could not be converted to int C:\xampp\htdocs\Pharmarays\pharmaray-application\views\userpage.php 139
INFO  - 2013-09-03 17:08:49 -->  column name inside view is 0 column Data is Array
INFO  - 2013-09-03 17:08:49 -->  column name inside view is 1 column Data is Array
INFO  - 2013-09-03 17:08:49 -->  column name inside view is count(dc.id_drugcomment) column Data is 2
DEBUG - 2013-09-03 17:08:49 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-09-03 17:08:49 --> Final output sent to browser
DEBUG - 2013-09-03 17:08:49 --> Total execution time: 0.0921
DEBUG - 2013-09-03 17:08:49 --> Config Class Initialized
DEBUG - 2013-09-03 17:08:49 --> Hooks Class Initialized
DEBUG - 2013-09-03 17:08:49 --> Utf8 Class Initialized
DEBUG - 2013-09-03 17:08:49 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 17:08:49 --> URI Class Initialized
DEBUG - 2013-09-03 17:08:49 --> Router Class Initialized
DEBUG - 2013-09-03 17:08:49 --> Output Class Initialized
DEBUG - 2013-09-03 17:08:49 --> Security Class Initialized
DEBUG - 2013-09-03 17:08:49 --> Input Class Initialized
DEBUG - 2013-09-03 17:08:49 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 17:08:49 --> Language Class Initialized
DEBUG - 2013-09-03 17:08:49 --> Loader Class Initialized
DEBUG - 2013-09-03 17:08:49 --> Helper loaded: form_helper
DEBUG - 2013-09-03 17:08:49 --> Helper loaded: url_helper
DEBUG - 2013-09-03 17:08:49 --> Helper loaded: html_helper
DEBUG - 2013-09-03 17:08:49 --> Database Driver Class Initialized
DEBUG - 2013-09-03 17:08:49 --> Session Class Initialized
DEBUG - 2013-09-03 17:08:49 --> Helper loaded: string_helper
DEBUG - 2013-09-03 17:08:49 --> Session routines successfully run
DEBUG - 2013-09-03 17:08:49 --> Form Validation Class Initialized
DEBUG - 2013-09-03 17:08:49 --> Controller Class Initialized
DEBUG - 2013-09-03 17:08:49 --> Model Class Initialized
DEBUG - 2013-09-03 17:08:49 --> Model Class Initialized
DEBUG - 2013-09-03 17:08:49 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 17:08:49 --> after session initialization................
ERROR - 2013-09-03 17:08:49 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-09-03 17:20:01 --> Config Class Initialized
DEBUG - 2013-09-03 17:20:01 --> Hooks Class Initialized
DEBUG - 2013-09-03 17:20:01 --> Utf8 Class Initialized
DEBUG - 2013-09-03 17:20:01 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 17:20:01 --> URI Class Initialized
DEBUG - 2013-09-03 17:20:01 --> Router Class Initialized
DEBUG - 2013-09-03 17:20:01 --> Output Class Initialized
DEBUG - 2013-09-03 17:20:01 --> Security Class Initialized
DEBUG - 2013-09-03 17:20:01 --> Input Class Initialized
DEBUG - 2013-09-03 17:20:01 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 17:20:01 --> Language Class Initialized
DEBUG - 2013-09-03 17:20:01 --> Loader Class Initialized
DEBUG - 2013-09-03 17:20:01 --> Helper loaded: form_helper
DEBUG - 2013-09-03 17:20:01 --> Helper loaded: url_helper
DEBUG - 2013-09-03 17:20:01 --> Helper loaded: html_helper
DEBUG - 2013-09-03 17:20:01 --> Database Driver Class Initialized
DEBUG - 2013-09-03 17:20:01 --> Session Class Initialized
DEBUG - 2013-09-03 17:20:01 --> Helper loaded: string_helper
DEBUG - 2013-09-03 17:20:01 --> Session routines successfully run
DEBUG - 2013-09-03 17:20:01 --> Form Validation Class Initialized
DEBUG - 2013-09-03 17:20:01 --> Controller Class Initialized
DEBUG - 2013-09-03 17:20:01 --> Model Class Initialized
DEBUG - 2013-09-03 17:20:01 --> Model Class Initialized
DEBUG - 2013-09-03 17:20:01 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 17:20:01 --> after session initialization................
INFO  - 2013-09-03 17:20:01 --> inside rays login auth.............
DEBUG - 2013-09-03 17:20:01 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-09-03 17:20:01 --> XSS Filtering completed
DEBUG - 2013-09-03 17:20:01 --> XSS Filtering completed
INFO  - 2013-09-03 17:20:01 --> before getting the relation of member............6
INFO  - 2013-09-03 17:20:01 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-09-03 17:20:01 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 17:20:01 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-03 17:20:01 --> inside retrieving vacancy for member
INFO  - 2013-09-03 17:20:01 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-09-03 17:20:01 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 17:20:01 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-09-03 17:20:01 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '2'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 17:20:01 --> SELECT count(dc.id_drugcomment)
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-09-03 17:20:01 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-09-03 17:20:01 -->  column name inside view is 0 column Data is Array
INFO  - 2013-09-03 17:20:01 -->  column name inside view is 1 column Data is Array
INFO  - 2013-09-03 17:20:01 -->  column name inside view is 2 column Data is Array
INFO  - 2013-09-03 17:20:01 -->  column name inside view is 3 column Data is Array
ERROR - 2013-09-03 17:20:01 --> Severity: Notice  --> Object of class stdClass could not be converted to int C:\xampp\htdocs\Pharmarays\pharmaray-application\views\userpage.php 139
INFO  - 2013-09-03 17:20:01 -->  column name inside view is 0 column Data is Array
INFO  - 2013-09-03 17:20:01 -->  column name inside view is 1 column Data is Array
INFO  - 2013-09-03 17:20:01 -->  column name inside view is count(dc.id_drugcomment) column Data is 2
DEBUG - 2013-09-03 17:20:01 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-09-03 17:20:01 --> Final output sent to browser
DEBUG - 2013-09-03 17:20:01 --> Total execution time: 0.1371
DEBUG - 2013-09-03 17:20:01 --> Config Class Initialized
DEBUG - 2013-09-03 17:20:01 --> Hooks Class Initialized
DEBUG - 2013-09-03 17:20:01 --> Utf8 Class Initialized
DEBUG - 2013-09-03 17:20:01 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 17:20:01 --> URI Class Initialized
DEBUG - 2013-09-03 17:20:01 --> Router Class Initialized
DEBUG - 2013-09-03 17:20:01 --> Output Class Initialized
DEBUG - 2013-09-03 17:20:01 --> Security Class Initialized
DEBUG - 2013-09-03 17:20:01 --> Input Class Initialized
DEBUG - 2013-09-03 17:20:01 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 17:20:01 --> Language Class Initialized
DEBUG - 2013-09-03 17:20:01 --> Loader Class Initialized
DEBUG - 2013-09-03 17:20:01 --> Helper loaded: form_helper
DEBUG - 2013-09-03 17:20:01 --> Helper loaded: url_helper
DEBUG - 2013-09-03 17:20:01 --> Helper loaded: html_helper
DEBUG - 2013-09-03 17:20:01 --> Database Driver Class Initialized
DEBUG - 2013-09-03 17:20:01 --> Session Class Initialized
DEBUG - 2013-09-03 17:20:01 --> Helper loaded: string_helper
DEBUG - 2013-09-03 17:20:01 --> Session routines successfully run
DEBUG - 2013-09-03 17:20:01 --> Form Validation Class Initialized
DEBUG - 2013-09-03 17:20:01 --> Controller Class Initialized
DEBUG - 2013-09-03 17:20:01 --> Model Class Initialized
DEBUG - 2013-09-03 17:20:01 --> Model Class Initialized
DEBUG - 2013-09-03 17:20:01 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 17:20:01 --> after session initialization................
ERROR - 2013-09-03 17:20:01 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-09-03 17:20:43 --> Config Class Initialized
DEBUG - 2013-09-03 17:20:43 --> Hooks Class Initialized
DEBUG - 2013-09-03 17:20:43 --> Utf8 Class Initialized
DEBUG - 2013-09-03 17:20:43 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 17:20:43 --> URI Class Initialized
DEBUG - 2013-09-03 17:20:43 --> Router Class Initialized
DEBUG - 2013-09-03 17:20:43 --> Output Class Initialized
DEBUG - 2013-09-03 17:20:43 --> Security Class Initialized
DEBUG - 2013-09-03 17:20:43 --> Input Class Initialized
DEBUG - 2013-09-03 17:20:43 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 17:20:43 --> Language Class Initialized
DEBUG - 2013-09-03 17:20:43 --> Loader Class Initialized
DEBUG - 2013-09-03 17:20:43 --> Helper loaded: form_helper
DEBUG - 2013-09-03 17:20:43 --> Helper loaded: url_helper
DEBUG - 2013-09-03 17:20:43 --> Helper loaded: html_helper
DEBUG - 2013-09-03 17:20:43 --> Database Driver Class Initialized
DEBUG - 2013-09-03 17:20:43 --> Session Class Initialized
DEBUG - 2013-09-03 17:20:43 --> Helper loaded: string_helper
DEBUG - 2013-09-03 17:20:43 --> Session routines successfully run
DEBUG - 2013-09-03 17:20:43 --> Form Validation Class Initialized
DEBUG - 2013-09-03 17:20:43 --> Controller Class Initialized
DEBUG - 2013-09-03 17:20:43 --> Model Class Initialized
DEBUG - 2013-09-03 17:20:43 --> Model Class Initialized
DEBUG - 2013-09-03 17:20:43 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 17:20:43 --> after session initialization................
INFO  - 2013-09-03 17:20:43 --> inside rays login auth.............
DEBUG - 2013-09-03 17:20:43 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-09-03 17:20:43 --> XSS Filtering completed
DEBUG - 2013-09-03 17:20:43 --> XSS Filtering completed
INFO  - 2013-09-03 17:20:43 --> before getting the relation of member............6
INFO  - 2013-09-03 17:20:43 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-09-03 17:20:43 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 17:20:43 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-03 17:20:43 --> inside retrieving vacancy for member
INFO  - 2013-09-03 17:20:43 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-09-03 17:20:43 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 17:20:43 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-09-03 17:20:43 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '2'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 17:20:43 --> SELECT count(dc.id_drugcomment)
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-09-03 17:20:43 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-09-03 17:20:43 -->  column name inside view is 0 column Data is Array
INFO  - 2013-09-03 17:20:43 -->  column name inside view is 1 column Data is Array
INFO  - 2013-09-03 17:20:43 -->  column name inside view is 2 column Data is Array
INFO  - 2013-09-03 17:20:43 -->  column name inside view is 3 column Data is Array
ERROR - 2013-09-03 17:20:43 --> Severity: Notice  --> Object of class stdClass could not be converted to int C:\xampp\htdocs\Pharmarays\pharmaray-application\views\userpage.php 139
INFO  - 2013-09-03 17:20:43 -->  column name inside view is 0 column Data is Array
INFO  - 2013-09-03 17:20:43 -->  column name inside view is 1 column Data is Array
DEBUG - 2013-09-03 17:20:43 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-09-03 17:20:43 --> Final output sent to browser
DEBUG - 2013-09-03 17:20:43 --> Total execution time: 0.1229
DEBUG - 2013-09-03 17:20:43 --> Config Class Initialized
DEBUG - 2013-09-03 17:20:43 --> Hooks Class Initialized
DEBUG - 2013-09-03 17:20:43 --> Utf8 Class Initialized
DEBUG - 2013-09-03 17:20:43 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 17:20:43 --> URI Class Initialized
DEBUG - 2013-09-03 17:20:43 --> Router Class Initialized
DEBUG - 2013-09-03 17:20:43 --> Output Class Initialized
DEBUG - 2013-09-03 17:20:43 --> Security Class Initialized
DEBUG - 2013-09-03 17:20:43 --> Input Class Initialized
DEBUG - 2013-09-03 17:20:43 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 17:20:43 --> Language Class Initialized
DEBUG - 2013-09-03 17:20:43 --> Loader Class Initialized
DEBUG - 2013-09-03 17:20:43 --> Helper loaded: form_helper
DEBUG - 2013-09-03 17:20:43 --> Helper loaded: url_helper
DEBUG - 2013-09-03 17:20:43 --> Helper loaded: html_helper
DEBUG - 2013-09-03 17:20:43 --> Database Driver Class Initialized
DEBUG - 2013-09-03 17:20:43 --> Session Class Initialized
DEBUG - 2013-09-03 17:20:43 --> Helper loaded: string_helper
DEBUG - 2013-09-03 17:20:43 --> Session routines successfully run
DEBUG - 2013-09-03 17:20:43 --> Form Validation Class Initialized
DEBUG - 2013-09-03 17:20:43 --> Controller Class Initialized
DEBUG - 2013-09-03 17:20:43 --> Model Class Initialized
DEBUG - 2013-09-03 17:20:43 --> Model Class Initialized
DEBUG - 2013-09-03 17:20:43 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 17:20:43 --> after session initialization................
ERROR - 2013-09-03 17:20:43 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-09-03 17:21:52 --> Config Class Initialized
DEBUG - 2013-09-03 17:21:52 --> Hooks Class Initialized
DEBUG - 2013-09-03 17:21:52 --> Utf8 Class Initialized
DEBUG - 2013-09-03 17:21:52 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 17:21:52 --> URI Class Initialized
DEBUG - 2013-09-03 17:21:52 --> Router Class Initialized
DEBUG - 2013-09-03 17:21:52 --> Output Class Initialized
DEBUG - 2013-09-03 17:21:52 --> Security Class Initialized
DEBUG - 2013-09-03 17:21:52 --> Input Class Initialized
DEBUG - 2013-09-03 17:21:52 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 17:21:52 --> Language Class Initialized
DEBUG - 2013-09-03 17:21:52 --> Loader Class Initialized
DEBUG - 2013-09-03 17:21:52 --> Helper loaded: form_helper
DEBUG - 2013-09-03 17:21:52 --> Helper loaded: url_helper
DEBUG - 2013-09-03 17:21:52 --> Helper loaded: html_helper
DEBUG - 2013-09-03 17:21:52 --> Database Driver Class Initialized
DEBUG - 2013-09-03 17:21:52 --> Session Class Initialized
DEBUG - 2013-09-03 17:21:52 --> Helper loaded: string_helper
DEBUG - 2013-09-03 17:21:52 --> Session routines successfully run
DEBUG - 2013-09-03 17:21:52 --> Form Validation Class Initialized
DEBUG - 2013-09-03 17:21:52 --> Controller Class Initialized
DEBUG - 2013-09-03 17:21:52 --> Model Class Initialized
DEBUG - 2013-09-03 17:21:52 --> Model Class Initialized
DEBUG - 2013-09-03 17:21:52 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 17:21:52 --> after session initialization................
INFO  - 2013-09-03 17:21:52 --> inside rays login auth.............
DEBUG - 2013-09-03 17:21:52 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-09-03 17:21:52 --> XSS Filtering completed
DEBUG - 2013-09-03 17:21:52 --> XSS Filtering completed
INFO  - 2013-09-03 17:21:52 --> before getting the relation of member............6
INFO  - 2013-09-03 17:21:52 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-09-03 17:21:52 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 17:21:52 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-03 17:21:52 --> inside retrieving vacancy for member
INFO  - 2013-09-03 17:21:52 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-09-03 17:21:52 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 17:21:52 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-09-03 17:21:52 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '2'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 17:21:52 --> SELECT count(dc.id_drugcomment)
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-09-03 17:21:52 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-09-03 17:21:52 -->  column name inside view is 0 column Data is Array
INFO  - 2013-09-03 17:21:52 -->  column name inside view is 1 column Data is Array
INFO  - 2013-09-03 17:21:52 -->  column name inside view is 2 column Data is Array
INFO  - 2013-09-03 17:21:52 -->  column name inside view is 3 column Data is Array
ERROR - 2013-09-03 17:21:52 --> Severity: Notice  --> Object of class stdClass could not be converted to int C:\xampp\htdocs\Pharmarays\pharmaray-application\views\userpage.php 139
INFO  - 2013-09-03 17:21:52 -->  column name inside view is count(dc.id_drugcomment) column Data is 2
DEBUG - 2013-09-03 17:21:52 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-09-03 17:21:52 --> Final output sent to browser
DEBUG - 2013-09-03 17:21:52 --> Total execution time: 0.1112
DEBUG - 2013-09-03 17:21:52 --> Config Class Initialized
DEBUG - 2013-09-03 17:21:52 --> Hooks Class Initialized
DEBUG - 2013-09-03 17:21:52 --> Utf8 Class Initialized
DEBUG - 2013-09-03 17:21:52 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 17:21:52 --> URI Class Initialized
DEBUG - 2013-09-03 17:21:52 --> Router Class Initialized
DEBUG - 2013-09-03 17:21:52 --> Output Class Initialized
DEBUG - 2013-09-03 17:21:52 --> Security Class Initialized
DEBUG - 2013-09-03 17:21:52 --> Input Class Initialized
DEBUG - 2013-09-03 17:21:52 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 17:21:52 --> Language Class Initialized
DEBUG - 2013-09-03 17:21:52 --> Loader Class Initialized
DEBUG - 2013-09-03 17:21:52 --> Helper loaded: form_helper
DEBUG - 2013-09-03 17:21:52 --> Helper loaded: url_helper
DEBUG - 2013-09-03 17:21:52 --> Helper loaded: html_helper
DEBUG - 2013-09-03 17:21:52 --> Database Driver Class Initialized
DEBUG - 2013-09-03 17:21:52 --> Session Class Initialized
DEBUG - 2013-09-03 17:21:52 --> Helper loaded: string_helper
DEBUG - 2013-09-03 17:21:52 --> Session routines successfully run
DEBUG - 2013-09-03 17:21:52 --> Form Validation Class Initialized
DEBUG - 2013-09-03 17:21:52 --> Controller Class Initialized
DEBUG - 2013-09-03 17:21:52 --> Model Class Initialized
DEBUG - 2013-09-03 17:21:52 --> Model Class Initialized
DEBUG - 2013-09-03 17:21:52 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 17:21:52 --> after session initialization................
ERROR - 2013-09-03 17:21:53 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-09-03 17:22:03 --> Config Class Initialized
DEBUG - 2013-09-03 17:22:03 --> Hooks Class Initialized
DEBUG - 2013-09-03 17:22:03 --> Utf8 Class Initialized
DEBUG - 2013-09-03 17:22:03 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 17:22:03 --> URI Class Initialized
DEBUG - 2013-09-03 17:22:03 --> Router Class Initialized
DEBUG - 2013-09-03 17:22:03 --> Output Class Initialized
DEBUG - 2013-09-03 17:22:03 --> Security Class Initialized
DEBUG - 2013-09-03 17:22:03 --> Input Class Initialized
DEBUG - 2013-09-03 17:22:03 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 17:22:03 --> Language Class Initialized
DEBUG - 2013-09-03 17:22:03 --> Loader Class Initialized
DEBUG - 2013-09-03 17:22:03 --> Helper loaded: form_helper
DEBUG - 2013-09-03 17:22:03 --> Helper loaded: url_helper
DEBUG - 2013-09-03 17:22:03 --> Helper loaded: html_helper
DEBUG - 2013-09-03 17:22:03 --> Database Driver Class Initialized
DEBUG - 2013-09-03 17:22:03 --> Session Class Initialized
DEBUG - 2013-09-03 17:22:03 --> Helper loaded: string_helper
DEBUG - 2013-09-03 17:22:03 --> Session routines successfully run
DEBUG - 2013-09-03 17:22:03 --> Form Validation Class Initialized
DEBUG - 2013-09-03 17:22:03 --> Controller Class Initialized
DEBUG - 2013-09-03 17:22:03 --> Model Class Initialized
DEBUG - 2013-09-03 17:22:03 --> Model Class Initialized
DEBUG - 2013-09-03 17:22:03 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 17:22:03 --> after session initialization................
INFO  - 2013-09-03 17:22:03 --> inside rays login auth.............
DEBUG - 2013-09-03 17:22:03 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-09-03 17:22:03 --> XSS Filtering completed
DEBUG - 2013-09-03 17:22:03 --> XSS Filtering completed
INFO  - 2013-09-03 17:22:03 --> before getting the relation of member............6
INFO  - 2013-09-03 17:22:03 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-09-03 17:22:03 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 17:22:03 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-03 17:22:03 --> inside retrieving vacancy for member
INFO  - 2013-09-03 17:22:03 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-09-03 17:22:03 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 17:22:03 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-09-03 17:22:03 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '2'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 17:22:03 --> SELECT count(dc.id_drugcomment)
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-09-03 17:22:03 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-09-03 17:22:03 -->  column name inside view is 0 column Data is Array
INFO  - 2013-09-03 17:22:03 -->  column name inside view is 1 column Data is Array
INFO  - 2013-09-03 17:22:03 -->  column name inside view is 2 column Data is Array
INFO  - 2013-09-03 17:22:03 -->  column name inside view is 3 column Data is Array
ERROR - 2013-09-03 17:22:03 --> Severity: Notice  --> Object of class stdClass could not be converted to int C:\xampp\htdocs\Pharmarays\pharmaray-application\views\userpage.php 139
INFO  - 2013-09-03 17:22:03 -->  column name inside view is count(dc.id_drugcomment) column Data is 2
DEBUG - 2013-09-03 17:22:03 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-09-03 17:22:03 --> Final output sent to browser
DEBUG - 2013-09-03 17:22:03 --> Total execution time: 0.0930
DEBUG - 2013-09-03 17:22:03 --> Config Class Initialized
DEBUG - 2013-09-03 17:22:03 --> Hooks Class Initialized
DEBUG - 2013-09-03 17:22:03 --> Utf8 Class Initialized
DEBUG - 2013-09-03 17:22:03 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 17:22:03 --> URI Class Initialized
DEBUG - 2013-09-03 17:22:03 --> Router Class Initialized
DEBUG - 2013-09-03 17:22:03 --> Output Class Initialized
DEBUG - 2013-09-03 17:22:03 --> Security Class Initialized
DEBUG - 2013-09-03 17:22:03 --> Input Class Initialized
DEBUG - 2013-09-03 17:22:03 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 17:22:03 --> Language Class Initialized
DEBUG - 2013-09-03 17:22:03 --> Loader Class Initialized
DEBUG - 2013-09-03 17:22:03 --> Helper loaded: form_helper
DEBUG - 2013-09-03 17:22:03 --> Helper loaded: url_helper
DEBUG - 2013-09-03 17:22:03 --> Helper loaded: html_helper
DEBUG - 2013-09-03 17:22:03 --> Database Driver Class Initialized
DEBUG - 2013-09-03 17:22:03 --> Session Class Initialized
DEBUG - 2013-09-03 17:22:03 --> Helper loaded: string_helper
DEBUG - 2013-09-03 17:22:03 --> Session routines successfully run
DEBUG - 2013-09-03 17:22:04 --> Form Validation Class Initialized
DEBUG - 2013-09-03 17:22:04 --> Controller Class Initialized
DEBUG - 2013-09-03 17:22:04 --> Model Class Initialized
DEBUG - 2013-09-03 17:22:04 --> Model Class Initialized
DEBUG - 2013-09-03 17:22:04 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 17:22:04 --> after session initialization................
ERROR - 2013-09-03 17:22:04 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-09-03 17:22:07 --> Config Class Initialized
DEBUG - 2013-09-03 17:22:07 --> Hooks Class Initialized
DEBUG - 2013-09-03 17:22:07 --> Utf8 Class Initialized
DEBUG - 2013-09-03 17:22:07 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 17:22:07 --> URI Class Initialized
DEBUG - 2013-09-03 17:22:07 --> Router Class Initialized
DEBUG - 2013-09-03 17:22:07 --> Output Class Initialized
DEBUG - 2013-09-03 17:22:07 --> Security Class Initialized
DEBUG - 2013-09-03 17:22:07 --> Input Class Initialized
DEBUG - 2013-09-03 17:22:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 17:22:07 --> Language Class Initialized
DEBUG - 2013-09-03 17:22:07 --> Loader Class Initialized
DEBUG - 2013-09-03 17:22:07 --> Helper loaded: form_helper
DEBUG - 2013-09-03 17:22:07 --> Helper loaded: url_helper
DEBUG - 2013-09-03 17:22:07 --> Helper loaded: html_helper
DEBUG - 2013-09-03 17:22:07 --> Database Driver Class Initialized
DEBUG - 2013-09-03 17:22:07 --> Session Class Initialized
DEBUG - 2013-09-03 17:22:07 --> Helper loaded: string_helper
DEBUG - 2013-09-03 17:22:07 --> Session routines successfully run
DEBUG - 2013-09-03 17:22:07 --> Form Validation Class Initialized
DEBUG - 2013-09-03 17:22:07 --> Controller Class Initialized
DEBUG - 2013-09-03 17:22:07 --> Model Class Initialized
DEBUG - 2013-09-03 17:22:07 --> Model Class Initialized
DEBUG - 2013-09-03 17:22:07 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 17:22:07 --> after session initialization................
INFO  - 2013-09-03 17:22:07 --> inside rays login auth.............
DEBUG - 2013-09-03 17:22:07 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-09-03 17:22:07 --> XSS Filtering completed
DEBUG - 2013-09-03 17:22:07 --> XSS Filtering completed
INFO  - 2013-09-03 17:22:07 --> before getting the relation of member............6
INFO  - 2013-09-03 17:22:07 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-09-03 17:22:07 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 17:22:07 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-03 17:22:07 --> inside retrieving vacancy for member
INFO  - 2013-09-03 17:22:07 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-09-03 17:22:07 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 17:22:07 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-09-03 17:22:07 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '2'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 17:22:07 --> SELECT count(dc.id_drugcomment)
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-09-03 17:22:07 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-09-03 17:22:07 -->  column name inside view is 0 column Data is Array
INFO  - 2013-09-03 17:22:07 -->  column name inside view is 1 column Data is Array
INFO  - 2013-09-03 17:22:07 -->  column name inside view is 2 column Data is Array
INFO  - 2013-09-03 17:22:07 -->  column name inside view is 3 column Data is Array
ERROR - 2013-09-03 17:22:07 --> Severity: Notice  --> Object of class stdClass could not be converted to int C:\xampp\htdocs\Pharmarays\pharmaray-application\views\userpage.php 139
INFO  - 2013-09-03 17:22:07 -->  column name inside view is count(dc.id_drugcomment) column Data is 2
DEBUG - 2013-09-03 17:22:07 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-09-03 17:22:07 --> Final output sent to browser
DEBUG - 2013-09-03 17:22:07 --> Total execution time: 0.0974
DEBUG - 2013-09-03 17:22:07 --> Config Class Initialized
DEBUG - 2013-09-03 17:22:07 --> Hooks Class Initialized
DEBUG - 2013-09-03 17:22:07 --> Utf8 Class Initialized
DEBUG - 2013-09-03 17:22:07 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 17:22:07 --> URI Class Initialized
DEBUG - 2013-09-03 17:22:07 --> Router Class Initialized
DEBUG - 2013-09-03 17:22:07 --> Output Class Initialized
DEBUG - 2013-09-03 17:22:07 --> Security Class Initialized
DEBUG - 2013-09-03 17:22:07 --> Input Class Initialized
DEBUG - 2013-09-03 17:22:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 17:22:07 --> Language Class Initialized
DEBUG - 2013-09-03 17:22:07 --> Loader Class Initialized
DEBUG - 2013-09-03 17:22:07 --> Helper loaded: form_helper
DEBUG - 2013-09-03 17:22:07 --> Helper loaded: url_helper
DEBUG - 2013-09-03 17:22:07 --> Helper loaded: html_helper
DEBUG - 2013-09-03 17:22:07 --> Database Driver Class Initialized
DEBUG - 2013-09-03 17:22:07 --> Session Class Initialized
DEBUG - 2013-09-03 17:22:07 --> Helper loaded: string_helper
DEBUG - 2013-09-03 17:22:07 --> Session routines successfully run
DEBUG - 2013-09-03 17:22:07 --> Form Validation Class Initialized
DEBUG - 2013-09-03 17:22:07 --> Controller Class Initialized
DEBUG - 2013-09-03 17:22:07 --> Model Class Initialized
DEBUG - 2013-09-03 17:22:07 --> Model Class Initialized
DEBUG - 2013-09-03 17:22:07 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 17:22:07 --> after session initialization................
ERROR - 2013-09-03 17:22:07 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-09-03 17:25:20 --> Config Class Initialized
DEBUG - 2013-09-03 17:25:20 --> Hooks Class Initialized
DEBUG - 2013-09-03 17:25:20 --> Utf8 Class Initialized
DEBUG - 2013-09-03 17:25:20 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 17:25:20 --> URI Class Initialized
DEBUG - 2013-09-03 17:25:20 --> Router Class Initialized
DEBUG - 2013-09-03 17:25:20 --> Output Class Initialized
DEBUG - 2013-09-03 17:25:20 --> Security Class Initialized
DEBUG - 2013-09-03 17:25:20 --> Input Class Initialized
DEBUG - 2013-09-03 17:25:20 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 17:25:20 --> Language Class Initialized
DEBUG - 2013-09-03 17:25:20 --> Loader Class Initialized
DEBUG - 2013-09-03 17:25:20 --> Helper loaded: form_helper
DEBUG - 2013-09-03 17:25:20 --> Helper loaded: url_helper
DEBUG - 2013-09-03 17:25:20 --> Helper loaded: html_helper
DEBUG - 2013-09-03 17:25:20 --> Database Driver Class Initialized
DEBUG - 2013-09-03 17:25:20 --> Session Class Initialized
DEBUG - 2013-09-03 17:25:20 --> Helper loaded: string_helper
DEBUG - 2013-09-03 17:25:20 --> Session routines successfully run
DEBUG - 2013-09-03 17:25:20 --> Form Validation Class Initialized
DEBUG - 2013-09-03 17:25:20 --> Controller Class Initialized
DEBUG - 2013-09-03 17:25:20 --> Model Class Initialized
DEBUG - 2013-09-03 17:25:20 --> Model Class Initialized
DEBUG - 2013-09-03 17:25:20 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 17:25:20 --> after session initialization................
INFO  - 2013-09-03 17:25:20 --> inside rays login auth.............
DEBUG - 2013-09-03 17:25:20 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-09-03 17:25:20 --> XSS Filtering completed
DEBUG - 2013-09-03 17:25:20 --> XSS Filtering completed
INFO  - 2013-09-03 17:25:20 --> before getting the relation of member............6
INFO  - 2013-09-03 17:25:20 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-09-03 17:25:20 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 17:25:20 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-03 17:25:20 --> inside retrieving vacancy for member
INFO  - 2013-09-03 17:25:20 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-09-03 17:25:20 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 17:25:20 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-09-03 17:25:20 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '2'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 17:25:20 --> SELECT count(dc.id_drugcomment)
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-09-03 17:25:20 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-09-03 17:25:20 -->  column name inside view is 0 column Data is Array
INFO  - 2013-09-03 17:25:20 -->  column name inside view is 1 column Data is Array
INFO  - 2013-09-03 17:25:20 -->  column name inside view is 2 column Data is Array
INFO  - 2013-09-03 17:25:20 -->  column name inside view is 3 column Data is Array
ERROR - 2013-09-03 17:25:20 --> Severity: Notice  --> Object of class stdClass could not be converted to int C:\xampp\htdocs\Pharmarays\pharmaray-application\views\userpage.php 139
INFO  - 2013-09-03 17:25:20 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-09-03 17:25:20 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-09-03 17:25:20 --> Final output sent to browser
DEBUG - 2013-09-03 17:25:20 --> Total execution time: 0.0960
DEBUG - 2013-09-03 17:25:20 --> Config Class Initialized
DEBUG - 2013-09-03 17:25:20 --> Hooks Class Initialized
DEBUG - 2013-09-03 17:25:20 --> Utf8 Class Initialized
DEBUG - 2013-09-03 17:25:20 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 17:25:20 --> URI Class Initialized
DEBUG - 2013-09-03 17:25:20 --> Router Class Initialized
DEBUG - 2013-09-03 17:25:20 --> Output Class Initialized
DEBUG - 2013-09-03 17:25:20 --> Security Class Initialized
DEBUG - 2013-09-03 17:25:20 --> Input Class Initialized
DEBUG - 2013-09-03 17:25:20 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 17:25:20 --> Language Class Initialized
DEBUG - 2013-09-03 17:25:20 --> Loader Class Initialized
DEBUG - 2013-09-03 17:25:20 --> Helper loaded: form_helper
DEBUG - 2013-09-03 17:25:20 --> Helper loaded: url_helper
DEBUG - 2013-09-03 17:25:20 --> Helper loaded: html_helper
DEBUG - 2013-09-03 17:25:20 --> Database Driver Class Initialized
DEBUG - 2013-09-03 17:25:20 --> Session Class Initialized
DEBUG - 2013-09-03 17:25:20 --> Helper loaded: string_helper
DEBUG - 2013-09-03 17:25:20 --> Session routines successfully run
DEBUG - 2013-09-03 17:25:20 --> Form Validation Class Initialized
DEBUG - 2013-09-03 17:25:20 --> Controller Class Initialized
DEBUG - 2013-09-03 17:25:20 --> Model Class Initialized
DEBUG - 2013-09-03 17:25:20 --> Model Class Initialized
DEBUG - 2013-09-03 17:25:20 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 17:25:20 --> after session initialization................
ERROR - 2013-09-03 17:25:20 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-09-03 17:29:19 --> Config Class Initialized
DEBUG - 2013-09-03 17:29:19 --> Hooks Class Initialized
DEBUG - 2013-09-03 17:29:19 --> Utf8 Class Initialized
DEBUG - 2013-09-03 17:29:19 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 17:29:19 --> URI Class Initialized
DEBUG - 2013-09-03 17:29:19 --> Router Class Initialized
DEBUG - 2013-09-03 17:29:19 --> Output Class Initialized
DEBUG - 2013-09-03 17:29:19 --> Security Class Initialized
DEBUG - 2013-09-03 17:29:19 --> Input Class Initialized
DEBUG - 2013-09-03 17:29:19 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 17:29:19 --> Language Class Initialized
DEBUG - 2013-09-03 17:29:19 --> Loader Class Initialized
DEBUG - 2013-09-03 17:29:19 --> Helper loaded: form_helper
DEBUG - 2013-09-03 17:29:19 --> Helper loaded: url_helper
DEBUG - 2013-09-03 17:29:19 --> Helper loaded: html_helper
DEBUG - 2013-09-03 17:29:19 --> Database Driver Class Initialized
DEBUG - 2013-09-03 17:29:19 --> Session Class Initialized
DEBUG - 2013-09-03 17:29:19 --> Helper loaded: string_helper
DEBUG - 2013-09-03 17:29:19 --> Session routines successfully run
DEBUG - 2013-09-03 17:29:19 --> Form Validation Class Initialized
DEBUG - 2013-09-03 17:29:19 --> Controller Class Initialized
DEBUG - 2013-09-03 17:29:19 --> Model Class Initialized
DEBUG - 2013-09-03 17:29:19 --> Model Class Initialized
DEBUG - 2013-09-03 17:29:19 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 17:29:19 --> after session initialization................
INFO  - 2013-09-03 17:29:19 --> inside rays login auth.............
DEBUG - 2013-09-03 17:29:19 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-09-03 17:29:19 --> XSS Filtering completed
DEBUG - 2013-09-03 17:29:19 --> XSS Filtering completed
INFO  - 2013-09-03 17:29:19 --> before getting the relation of member............6
INFO  - 2013-09-03 17:29:19 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-09-03 17:29:19 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 17:29:19 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-03 17:29:19 --> inside retrieving vacancy for member
INFO  - 2013-09-03 17:29:19 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-09-03 17:29:19 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 17:29:19 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-09-03 17:29:19 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '2'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 17:29:19 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-09-03 17:29:19 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-09-03 17:29:19 -->  column name inside view is 0 column Data is Array
INFO  - 2013-09-03 17:29:19 -->  column name inside view is 1 column Data is Array
INFO  - 2013-09-03 17:29:19 -->  column name inside view is 2 column Data is Array
INFO  - 2013-09-03 17:29:19 -->  column name inside view is 3 column Data is Array
INFO  - 2013-09-03 17:29:19 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-09-03 17:29:19 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-09-03 17:29:19 --> Final output sent to browser
DEBUG - 2013-09-03 17:29:19 --> Total execution time: 0.0967
DEBUG - 2013-09-03 17:29:19 --> Config Class Initialized
DEBUG - 2013-09-03 17:29:19 --> Hooks Class Initialized
DEBUG - 2013-09-03 17:29:19 --> Utf8 Class Initialized
DEBUG - 2013-09-03 17:29:19 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 17:29:19 --> URI Class Initialized
DEBUG - 2013-09-03 17:29:19 --> Router Class Initialized
DEBUG - 2013-09-03 17:29:19 --> Output Class Initialized
DEBUG - 2013-09-03 17:29:19 --> Security Class Initialized
DEBUG - 2013-09-03 17:29:19 --> Input Class Initialized
DEBUG - 2013-09-03 17:29:19 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 17:29:19 --> Language Class Initialized
DEBUG - 2013-09-03 17:29:19 --> Loader Class Initialized
DEBUG - 2013-09-03 17:29:19 --> Helper loaded: form_helper
DEBUG - 2013-09-03 17:29:19 --> Helper loaded: url_helper
DEBUG - 2013-09-03 17:29:19 --> Helper loaded: html_helper
DEBUG - 2013-09-03 17:29:19 --> Database Driver Class Initialized
DEBUG - 2013-09-03 17:29:19 --> Session Class Initialized
DEBUG - 2013-09-03 17:29:19 --> Helper loaded: string_helper
DEBUG - 2013-09-03 17:29:19 --> Session routines successfully run
DEBUG - 2013-09-03 17:29:19 --> Form Validation Class Initialized
DEBUG - 2013-09-03 17:29:19 --> Controller Class Initialized
DEBUG - 2013-09-03 17:29:19 --> Model Class Initialized
DEBUG - 2013-09-03 17:29:19 --> Model Class Initialized
DEBUG - 2013-09-03 17:29:19 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 17:29:19 --> after session initialization................
ERROR - 2013-09-03 17:29:19 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-09-03 17:29:20 --> Config Class Initialized
DEBUG - 2013-09-03 17:29:20 --> Hooks Class Initialized
DEBUG - 2013-09-03 17:29:20 --> Utf8 Class Initialized
DEBUG - 2013-09-03 17:29:20 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 17:29:20 --> URI Class Initialized
DEBUG - 2013-09-03 17:29:20 --> Router Class Initialized
DEBUG - 2013-09-03 17:29:20 --> Output Class Initialized
DEBUG - 2013-09-03 17:29:20 --> Security Class Initialized
DEBUG - 2013-09-03 17:29:20 --> Input Class Initialized
DEBUG - 2013-09-03 17:29:20 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 17:29:20 --> Language Class Initialized
DEBUG - 2013-09-03 17:29:20 --> Loader Class Initialized
DEBUG - 2013-09-03 17:29:20 --> Helper loaded: form_helper
DEBUG - 2013-09-03 17:29:20 --> Helper loaded: url_helper
DEBUG - 2013-09-03 17:29:20 --> Helper loaded: html_helper
DEBUG - 2013-09-03 17:29:20 --> Database Driver Class Initialized
DEBUG - 2013-09-03 17:29:20 --> Session Class Initialized
DEBUG - 2013-09-03 17:29:20 --> Helper loaded: string_helper
DEBUG - 2013-09-03 17:29:20 --> Session routines successfully run
DEBUG - 2013-09-03 17:29:20 --> Form Validation Class Initialized
DEBUG - 2013-09-03 17:29:20 --> Controller Class Initialized
DEBUG - 2013-09-03 17:29:20 --> Model Class Initialized
DEBUG - 2013-09-03 17:29:20 --> Model Class Initialized
DEBUG - 2013-09-03 17:29:20 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 17:29:20 --> after session initialization................
ERROR - 2013-09-03 17:29:20 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-09-03 17:29:27 --> Config Class Initialized
DEBUG - 2013-09-03 17:29:27 --> Hooks Class Initialized
DEBUG - 2013-09-03 17:29:27 --> Utf8 Class Initialized
DEBUG - 2013-09-03 17:29:27 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 17:29:27 --> URI Class Initialized
DEBUG - 2013-09-03 17:29:27 --> Router Class Initialized
DEBUG - 2013-09-03 17:29:27 --> Output Class Initialized
DEBUG - 2013-09-03 17:29:27 --> Security Class Initialized
DEBUG - 2013-09-03 17:29:27 --> Input Class Initialized
DEBUG - 2013-09-03 17:29:27 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 17:29:27 --> Language Class Initialized
DEBUG - 2013-09-03 17:29:27 --> Loader Class Initialized
DEBUG - 2013-09-03 17:29:27 --> Helper loaded: form_helper
DEBUG - 2013-09-03 17:29:27 --> Helper loaded: url_helper
DEBUG - 2013-09-03 17:29:27 --> Helper loaded: html_helper
DEBUG - 2013-09-03 17:29:27 --> Database Driver Class Initialized
DEBUG - 2013-09-03 17:29:27 --> Session Class Initialized
DEBUG - 2013-09-03 17:29:27 --> Helper loaded: string_helper
DEBUG - 2013-09-03 17:29:27 --> Session routines successfully run
DEBUG - 2013-09-03 17:29:27 --> Form Validation Class Initialized
DEBUG - 2013-09-03 17:29:27 --> Controller Class Initialized
DEBUG - 2013-09-03 17:29:27 --> Model Class Initialized
DEBUG - 2013-09-03 17:29:27 --> Model Class Initialized
DEBUG - 2013-09-03 17:29:27 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 17:29:27 --> after session initialization................
INFO  - 2013-09-03 17:29:27 --> inside the auto suggest page.................
INFO  - 2013-09-03 17:29:27 --> after the list array.................
INFO  - 2013-09-03 17:29:27 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%f%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 17:29:27 --> after retrieving the data from db.................
INFO  - 2013-09-03 17:29:27 --> looping.................
INFO  - 2013-09-03 17:29:27 --> looping.................
DEBUG - 2013-09-03 17:29:27 --> Final output sent to browser
DEBUG - 2013-09-03 17:29:27 --> Total execution time: 0.0597
DEBUG - 2013-09-03 17:29:27 --> Config Class Initialized
DEBUG - 2013-09-03 17:29:27 --> Hooks Class Initialized
DEBUG - 2013-09-03 17:29:27 --> Utf8 Class Initialized
DEBUG - 2013-09-03 17:29:27 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 17:29:27 --> URI Class Initialized
DEBUG - 2013-09-03 17:29:27 --> Router Class Initialized
DEBUG - 2013-09-03 17:29:27 --> Output Class Initialized
DEBUG - 2013-09-03 17:29:27 --> Security Class Initialized
DEBUG - 2013-09-03 17:29:27 --> Input Class Initialized
DEBUG - 2013-09-03 17:29:27 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 17:29:27 --> Language Class Initialized
DEBUG - 2013-09-03 17:29:27 --> Loader Class Initialized
DEBUG - 2013-09-03 17:29:27 --> Helper loaded: form_helper
DEBUG - 2013-09-03 17:29:27 --> Helper loaded: url_helper
DEBUG - 2013-09-03 17:29:27 --> Helper loaded: html_helper
DEBUG - 2013-09-03 17:29:27 --> Database Driver Class Initialized
DEBUG - 2013-09-03 17:29:27 --> Session Class Initialized
DEBUG - 2013-09-03 17:29:27 --> Helper loaded: string_helper
DEBUG - 2013-09-03 17:29:27 --> Session routines successfully run
DEBUG - 2013-09-03 17:29:27 --> Form Validation Class Initialized
DEBUG - 2013-09-03 17:29:27 --> Controller Class Initialized
DEBUG - 2013-09-03 17:29:27 --> Model Class Initialized
DEBUG - 2013-09-03 17:29:27 --> Model Class Initialized
DEBUG - 2013-09-03 17:29:27 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 17:29:27 --> after session initialization................
INFO  - 2013-09-03 17:29:27 --> inside the auto suggest page.................
INFO  - 2013-09-03 17:29:27 --> after the list array.................
INFO  - 2013-09-03 17:29:27 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%fa%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 17:29:27 --> after retrieving the data from db.................
INFO  - 2013-09-03 17:29:27 --> looping.................
DEBUG - 2013-09-03 17:29:27 --> Final output sent to browser
DEBUG - 2013-09-03 17:29:27 --> Total execution time: 0.0672
DEBUG - 2013-09-03 17:29:27 --> Config Class Initialized
DEBUG - 2013-09-03 17:29:27 --> Hooks Class Initialized
DEBUG - 2013-09-03 17:29:27 --> Utf8 Class Initialized
DEBUG - 2013-09-03 17:29:27 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 17:29:27 --> URI Class Initialized
DEBUG - 2013-09-03 17:29:27 --> Router Class Initialized
DEBUG - 2013-09-03 17:29:27 --> Output Class Initialized
DEBUG - 2013-09-03 17:29:27 --> Security Class Initialized
DEBUG - 2013-09-03 17:29:27 --> Input Class Initialized
DEBUG - 2013-09-03 17:29:27 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 17:29:27 --> Language Class Initialized
DEBUG - 2013-09-03 17:29:27 --> Loader Class Initialized
DEBUG - 2013-09-03 17:29:27 --> Helper loaded: form_helper
DEBUG - 2013-09-03 17:29:27 --> Helper loaded: url_helper
DEBUG - 2013-09-03 17:29:27 --> Helper loaded: html_helper
DEBUG - 2013-09-03 17:29:27 --> Database Driver Class Initialized
DEBUG - 2013-09-03 17:29:27 --> Session Class Initialized
DEBUG - 2013-09-03 17:29:27 --> Helper loaded: string_helper
DEBUG - 2013-09-03 17:29:27 --> Session routines successfully run
DEBUG - 2013-09-03 17:29:27 --> Form Validation Class Initialized
DEBUG - 2013-09-03 17:29:27 --> Controller Class Initialized
DEBUG - 2013-09-03 17:29:27 --> Model Class Initialized
DEBUG - 2013-09-03 17:29:27 --> Model Class Initialized
DEBUG - 2013-09-03 17:29:27 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 17:29:27 --> after session initialization................
INFO  - 2013-09-03 17:29:27 --> inside the auto suggest page.................
INFO  - 2013-09-03 17:29:27 --> after the list array.................
INFO  - 2013-09-03 17:29:27 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%fan%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 17:29:27 --> after retrieving the data from db.................
INFO  - 2013-09-03 17:29:27 --> looping.................
DEBUG - 2013-09-03 17:29:27 --> Final output sent to browser
DEBUG - 2013-09-03 17:29:27 --> Total execution time: 0.1062
DEBUG - 2013-09-03 17:29:28 --> Config Class Initialized
DEBUG - 2013-09-03 17:29:28 --> Hooks Class Initialized
DEBUG - 2013-09-03 17:29:28 --> Utf8 Class Initialized
DEBUG - 2013-09-03 17:29:28 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 17:29:28 --> URI Class Initialized
DEBUG - 2013-09-03 17:29:28 --> Router Class Initialized
DEBUG - 2013-09-03 17:29:28 --> Output Class Initialized
DEBUG - 2013-09-03 17:29:28 --> Security Class Initialized
DEBUG - 2013-09-03 17:29:28 --> Input Class Initialized
DEBUG - 2013-09-03 17:29:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 17:29:28 --> Language Class Initialized
DEBUG - 2013-09-03 17:29:28 --> Loader Class Initialized
DEBUG - 2013-09-03 17:29:28 --> Helper loaded: form_helper
DEBUG - 2013-09-03 17:29:28 --> Helper loaded: url_helper
DEBUG - 2013-09-03 17:29:29 --> Helper loaded: html_helper
DEBUG - 2013-09-03 17:29:29 --> Database Driver Class Initialized
DEBUG - 2013-09-03 17:29:29 --> Session Class Initialized
DEBUG - 2013-09-03 17:29:29 --> Helper loaded: string_helper
DEBUG - 2013-09-03 17:29:29 --> Session routines successfully run
DEBUG - 2013-09-03 17:29:29 --> Form Validation Class Initialized
DEBUG - 2013-09-03 17:29:29 --> Controller Class Initialized
DEBUG - 2013-09-03 17:29:29 --> Model Class Initialized
DEBUG - 2013-09-03 17:29:29 --> Model Class Initialized
DEBUG - 2013-09-03 17:29:29 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 17:29:29 --> after session initialization................
INFO  - 2013-09-03 17:29:29 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '4'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 17:29:29 --> inside retrieving comments member id and drug id is 4
INFO  - 2013-09-03 17:29:29 --> 5==============================0
INFO  - 2013-09-03 17:29:29 --> SELECT dc.id_drugcomment as id, dc.comment, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 4
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-03 17:29:29 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 4
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
DEBUG - 2013-09-03 17:29:29 --> Final output sent to browser
DEBUG - 2013-09-03 17:29:29 --> Total execution time: 0.0854
DEBUG - 2013-09-03 17:29:37 --> Config Class Initialized
DEBUG - 2013-09-03 17:29:37 --> Hooks Class Initialized
DEBUG - 2013-09-03 17:29:37 --> Utf8 Class Initialized
DEBUG - 2013-09-03 17:29:37 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 17:29:37 --> URI Class Initialized
DEBUG - 2013-09-03 17:29:37 --> Router Class Initialized
DEBUG - 2013-09-03 17:29:37 --> Output Class Initialized
DEBUG - 2013-09-03 17:29:37 --> Security Class Initialized
DEBUG - 2013-09-03 17:29:37 --> Input Class Initialized
DEBUG - 2013-09-03 17:29:37 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 17:29:37 --> Language Class Initialized
DEBUG - 2013-09-03 17:29:37 --> Loader Class Initialized
DEBUG - 2013-09-03 17:29:37 --> Helper loaded: form_helper
DEBUG - 2013-09-03 17:29:37 --> Helper loaded: url_helper
DEBUG - 2013-09-03 17:29:37 --> Helper loaded: html_helper
DEBUG - 2013-09-03 17:29:37 --> Database Driver Class Initialized
DEBUG - 2013-09-03 17:29:37 --> Config Class Initialized
DEBUG - 2013-09-03 17:29:37 --> Hooks Class Initialized
DEBUG - 2013-09-03 17:29:37 --> Utf8 Class Initialized
DEBUG - 2013-09-03 17:29:37 --> Session Class Initialized
DEBUG - 2013-09-03 17:29:37 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 17:29:37 --> Helper loaded: string_helper
DEBUG - 2013-09-03 17:29:37 --> URI Class Initialized
DEBUG - 2013-09-03 17:29:37 --> Session routines successfully run
DEBUG - 2013-09-03 17:29:37 --> Router Class Initialized
DEBUG - 2013-09-03 17:29:37 --> Form Validation Class Initialized
DEBUG - 2013-09-03 17:29:37 --> Output Class Initialized
DEBUG - 2013-09-03 17:29:37 --> Controller Class Initialized
DEBUG - 2013-09-03 17:29:37 --> Model Class Initialized
DEBUG - 2013-09-03 17:29:37 --> Security Class Initialized
DEBUG - 2013-09-03 17:29:37 --> Model Class Initialized
DEBUG - 2013-09-03 17:29:37 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 17:29:37 --> after session initialization................
DEBUG - 2013-09-03 17:29:37 --> Input Class Initialized
INFO  - 2013-09-03 17:29:37 --> inside the auto suggest page.................
INFO  - 2013-09-03 17:29:37 --> after the list array.................
DEBUG - 2013-09-03 17:29:37 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 17:29:37 --> Language Class Initialized
INFO  - 2013-09-03 17:29:37 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%pa%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 17:29:37 --> after retrieving the data from db.................
INFO  - 2013-09-03 17:29:37 --> looping.................
DEBUG - 2013-09-03 17:29:37 --> Final output sent to browser
DEBUG - 2013-09-03 17:29:37 --> Total execution time: 0.0769
DEBUG - 2013-09-03 17:29:37 --> Loader Class Initialized
DEBUG - 2013-09-03 17:29:37 --> Helper loaded: form_helper
DEBUG - 2013-09-03 17:29:37 --> Helper loaded: url_helper
DEBUG - 2013-09-03 17:29:37 --> Helper loaded: html_helper
DEBUG - 2013-09-03 17:29:37 --> Database Driver Class Initialized
DEBUG - 2013-09-03 17:29:37 --> Session Class Initialized
DEBUG - 2013-09-03 17:29:37 --> Helper loaded: string_helper
DEBUG - 2013-09-03 17:29:37 --> Session routines successfully run
DEBUG - 2013-09-03 17:29:37 --> Form Validation Class Initialized
DEBUG - 2013-09-03 17:29:37 --> Controller Class Initialized
DEBUG - 2013-09-03 17:29:37 --> Model Class Initialized
DEBUG - 2013-09-03 17:29:37 --> Model Class Initialized
DEBUG - 2013-09-03 17:29:37 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 17:29:37 --> after session initialization................
INFO  - 2013-09-03 17:29:37 --> inside the auto suggest page.................
INFO  - 2013-09-03 17:29:37 --> after the list array.................
INFO  - 2013-09-03 17:29:37 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%pa%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 17:29:37 --> after retrieving the data from db.................
INFO  - 2013-09-03 17:29:37 --> looping.................
DEBUG - 2013-09-03 17:29:37 --> Final output sent to browser
DEBUG - 2013-09-03 17:29:37 --> Total execution time: 0.0756
DEBUG - 2013-09-03 17:29:38 --> Config Class Initialized
DEBUG - 2013-09-03 17:29:38 --> Hooks Class Initialized
DEBUG - 2013-09-03 17:29:38 --> Utf8 Class Initialized
DEBUG - 2013-09-03 17:29:38 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 17:29:38 --> URI Class Initialized
DEBUG - 2013-09-03 17:29:38 --> Router Class Initialized
DEBUG - 2013-09-03 17:29:38 --> Output Class Initialized
DEBUG - 2013-09-03 17:29:38 --> Security Class Initialized
DEBUG - 2013-09-03 17:29:38 --> Input Class Initialized
DEBUG - 2013-09-03 17:29:38 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 17:29:38 --> Language Class Initialized
DEBUG - 2013-09-03 17:29:38 --> Loader Class Initialized
DEBUG - 2013-09-03 17:29:38 --> Helper loaded: form_helper
DEBUG - 2013-09-03 17:29:38 --> Helper loaded: url_helper
DEBUG - 2013-09-03 17:29:38 --> Helper loaded: html_helper
DEBUG - 2013-09-03 17:29:38 --> Database Driver Class Initialized
DEBUG - 2013-09-03 17:29:38 --> Session Class Initialized
DEBUG - 2013-09-03 17:29:38 --> Helper loaded: string_helper
DEBUG - 2013-09-03 17:29:38 --> Session routines successfully run
DEBUG - 2013-09-03 17:29:38 --> Form Validation Class Initialized
DEBUG - 2013-09-03 17:29:38 --> Controller Class Initialized
DEBUG - 2013-09-03 17:29:38 --> Model Class Initialized
DEBUG - 2013-09-03 17:29:38 --> Config Class Initialized
DEBUG - 2013-09-03 17:29:38 --> Hooks Class Initialized
DEBUG - 2013-09-03 17:29:38 --> Model Class Initialized
DEBUG - 2013-09-03 17:29:38 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 17:29:38 --> after session initialization................
INFO  - 2013-09-03 17:29:38 --> inside the auto suggest page.................
INFO  - 2013-09-03 17:29:38 --> after the list array.................
DEBUG - 2013-09-03 17:29:38 --> Utf8 Class Initialized
DEBUG - 2013-09-03 17:29:38 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 17:29:38 --> URI Class Initialized
DEBUG - 2013-09-03 17:29:38 --> Router Class Initialized
INFO  - 2013-09-03 17:29:38 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%pana%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 17:29:38 --> after retrieving the data from db.................
INFO  - 2013-09-03 17:29:38 --> looping.................
DEBUG - 2013-09-03 17:29:38 --> Final output sent to browser
DEBUG - 2013-09-03 17:29:38 --> Total execution time: 0.0664
DEBUG - 2013-09-03 17:29:38 --> Output Class Initialized
DEBUG - 2013-09-03 17:29:38 --> Security Class Initialized
DEBUG - 2013-09-03 17:29:38 --> Input Class Initialized
DEBUG - 2013-09-03 17:29:38 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 17:29:38 --> Language Class Initialized
DEBUG - 2013-09-03 17:29:38 --> Loader Class Initialized
DEBUG - 2013-09-03 17:29:38 --> Helper loaded: form_helper
DEBUG - 2013-09-03 17:29:38 --> Helper loaded: url_helper
DEBUG - 2013-09-03 17:29:38 --> Helper loaded: html_helper
DEBUG - 2013-09-03 17:29:38 --> Database Driver Class Initialized
DEBUG - 2013-09-03 17:29:38 --> Session Class Initialized
DEBUG - 2013-09-03 17:29:38 --> Helper loaded: string_helper
DEBUG - 2013-09-03 17:29:38 --> Session routines successfully run
DEBUG - 2013-09-03 17:29:38 --> Form Validation Class Initialized
DEBUG - 2013-09-03 17:29:38 --> Controller Class Initialized
DEBUG - 2013-09-03 17:29:38 --> Model Class Initialized
DEBUG - 2013-09-03 17:29:38 --> Model Class Initialized
DEBUG - 2013-09-03 17:29:38 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 17:29:38 --> after session initialization................
INFO  - 2013-09-03 17:29:38 --> inside the auto suggest page.................
INFO  - 2013-09-03 17:29:38 --> after the list array.................
INFO  - 2013-09-03 17:29:38 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%pana%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 17:29:38 --> after retrieving the data from db.................
INFO  - 2013-09-03 17:29:38 --> looping.................
DEBUG - 2013-09-03 17:29:38 --> Final output sent to browser
DEBUG - 2013-09-03 17:29:38 --> Total execution time: 0.0700
DEBUG - 2013-09-03 17:29:40 --> Config Class Initialized
DEBUG - 2013-09-03 17:29:40 --> Hooks Class Initialized
DEBUG - 2013-09-03 17:29:40 --> Utf8 Class Initialized
DEBUG - 2013-09-03 17:29:40 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 17:29:40 --> URI Class Initialized
DEBUG - 2013-09-03 17:29:40 --> Router Class Initialized
DEBUG - 2013-09-03 17:29:40 --> Output Class Initialized
DEBUG - 2013-09-03 17:29:40 --> Security Class Initialized
DEBUG - 2013-09-03 17:29:40 --> Input Class Initialized
DEBUG - 2013-09-03 17:29:40 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 17:29:40 --> Language Class Initialized
DEBUG - 2013-09-03 17:29:40 --> Loader Class Initialized
DEBUG - 2013-09-03 17:29:40 --> Helper loaded: form_helper
DEBUG - 2013-09-03 17:29:40 --> Helper loaded: url_helper
DEBUG - 2013-09-03 17:29:40 --> Helper loaded: html_helper
DEBUG - 2013-09-03 17:29:40 --> Database Driver Class Initialized
DEBUG - 2013-09-03 17:29:40 --> Session Class Initialized
DEBUG - 2013-09-03 17:29:40 --> Helper loaded: string_helper
DEBUG - 2013-09-03 17:29:40 --> Session routines successfully run
DEBUG - 2013-09-03 17:29:40 --> Form Validation Class Initialized
DEBUG - 2013-09-03 17:29:40 --> Controller Class Initialized
DEBUG - 2013-09-03 17:29:40 --> Model Class Initialized
DEBUG - 2013-09-03 17:29:40 --> Model Class Initialized
DEBUG - 2013-09-03 17:29:40 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 17:29:40 --> after session initialization................
INFO  - 2013-09-03 17:29:40 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 17:29:40 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-09-03 17:29:40 --> 5==============================0
INFO  - 2013-09-03 17:29:40 --> SELECT dc.id_drugcomment as id, dc.comment, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-03 17:29:40 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
DEBUG - 2013-09-03 17:29:40 --> Final output sent to browser
DEBUG - 2013-09-03 17:29:40 --> Total execution time: 0.0841
DEBUG - 2013-09-03 18:16:50 --> Config Class Initialized
DEBUG - 2013-09-03 18:16:50 --> Hooks Class Initialized
DEBUG - 2013-09-03 18:16:50 --> Utf8 Class Initialized
DEBUG - 2013-09-03 18:16:50 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 18:16:50 --> URI Class Initialized
DEBUG - 2013-09-03 18:16:50 --> Router Class Initialized
DEBUG - 2013-09-03 18:16:50 --> Output Class Initialized
DEBUG - 2013-09-03 18:16:50 --> Security Class Initialized
DEBUG - 2013-09-03 18:16:50 --> Input Class Initialized
DEBUG - 2013-09-03 18:16:50 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 18:16:50 --> Language Class Initialized
DEBUG - 2013-09-03 18:16:50 --> Loader Class Initialized
DEBUG - 2013-09-03 18:16:50 --> Helper loaded: form_helper
DEBUG - 2013-09-03 18:16:50 --> Helper loaded: url_helper
DEBUG - 2013-09-03 18:16:50 --> Helper loaded: html_helper
DEBUG - 2013-09-03 18:16:50 --> Database Driver Class Initialized
DEBUG - 2013-09-03 18:16:50 --> Session Class Initialized
DEBUG - 2013-09-03 18:16:50 --> Helper loaded: string_helper
DEBUG - 2013-09-03 18:16:50 --> Session routines successfully run
DEBUG - 2013-09-03 18:16:50 --> Form Validation Class Initialized
DEBUG - 2013-09-03 18:16:50 --> Controller Class Initialized
DEBUG - 2013-09-03 18:16:50 --> Model Class Initialized
DEBUG - 2013-09-03 18:16:50 --> Model Class Initialized
DEBUG - 2013-09-03 18:16:50 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 18:16:50 --> after session initialization................
INFO  - 2013-09-03 18:16:50 --> inside rays login auth.............
DEBUG - 2013-09-03 18:16:50 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-09-03 18:16:50 --> XSS Filtering completed
DEBUG - 2013-09-03 18:16:50 --> XSS Filtering completed
INFO  - 2013-09-03 18:16:50 --> before getting the relation of member............6
INFO  - 2013-09-03 18:16:50 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-09-03 18:16:50 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 18:16:50 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-03 18:16:50 --> inside retrieving vacancy for member
INFO  - 2013-09-03 18:16:50 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-09-03 18:16:50 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 18:16:50 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-09-03 18:16:50 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '2'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 18:16:50 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-09-03 18:16:50 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-09-03 18:16:50 -->  column name inside view is 0 column Data is Array
INFO  - 2013-09-03 18:16:50 -->  column name inside view is 1 column Data is Array
INFO  - 2013-09-03 18:16:50 -->  column name inside view is 2 column Data is Array
INFO  - 2013-09-03 18:16:50 -->  column name inside view is 3 column Data is Array
INFO  - 2013-09-03 18:16:50 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-09-03 18:16:50 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-09-03 18:16:50 --> Final output sent to browser
DEBUG - 2013-09-03 18:16:50 --> Total execution time: 0.1218
DEBUG - 2013-09-03 18:16:51 --> Config Class Initialized
DEBUG - 2013-09-03 18:16:51 --> Hooks Class Initialized
DEBUG - 2013-09-03 18:16:51 --> Utf8 Class Initialized
DEBUG - 2013-09-03 18:16:51 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 18:16:51 --> URI Class Initialized
DEBUG - 2013-09-03 18:16:51 --> Router Class Initialized
DEBUG - 2013-09-03 18:16:51 --> Output Class Initialized
DEBUG - 2013-09-03 18:16:51 --> Security Class Initialized
DEBUG - 2013-09-03 18:16:51 --> Input Class Initialized
DEBUG - 2013-09-03 18:16:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 18:16:51 --> Language Class Initialized
DEBUG - 2013-09-03 18:16:51 --> Loader Class Initialized
DEBUG - 2013-09-03 18:16:51 --> Helper loaded: form_helper
DEBUG - 2013-09-03 18:16:51 --> Helper loaded: url_helper
DEBUG - 2013-09-03 18:16:51 --> Helper loaded: html_helper
DEBUG - 2013-09-03 18:16:51 --> Database Driver Class Initialized
DEBUG - 2013-09-03 18:16:51 --> Session Class Initialized
DEBUG - 2013-09-03 18:16:51 --> Helper loaded: string_helper
DEBUG - 2013-09-03 18:16:51 --> Session routines successfully run
DEBUG - 2013-09-03 18:16:51 --> Form Validation Class Initialized
DEBUG - 2013-09-03 18:16:51 --> Controller Class Initialized
DEBUG - 2013-09-03 18:16:51 --> Model Class Initialized
DEBUG - 2013-09-03 18:16:51 --> Model Class Initialized
DEBUG - 2013-09-03 18:16:51 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 18:16:51 --> after session initialization................
ERROR - 2013-09-03 18:16:51 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-09-03 18:16:54 --> Config Class Initialized
DEBUG - 2013-09-03 18:16:54 --> Hooks Class Initialized
DEBUG - 2013-09-03 18:16:54 --> Utf8 Class Initialized
DEBUG - 2013-09-03 18:16:54 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 18:16:54 --> URI Class Initialized
DEBUG - 2013-09-03 18:16:54 --> Router Class Initialized
DEBUG - 2013-09-03 18:16:54 --> Output Class Initialized
DEBUG - 2013-09-03 18:16:54 --> Security Class Initialized
DEBUG - 2013-09-03 18:16:54 --> Input Class Initialized
DEBUG - 2013-09-03 18:16:54 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 18:16:54 --> Language Class Initialized
DEBUG - 2013-09-03 18:16:54 --> Loader Class Initialized
DEBUG - 2013-09-03 18:16:54 --> Helper loaded: form_helper
DEBUG - 2013-09-03 18:16:54 --> Helper loaded: url_helper
DEBUG - 2013-09-03 18:16:54 --> Helper loaded: html_helper
DEBUG - 2013-09-03 18:16:54 --> Database Driver Class Initialized
DEBUG - 2013-09-03 18:16:54 --> Session Class Initialized
DEBUG - 2013-09-03 18:16:54 --> Helper loaded: string_helper
DEBUG - 2013-09-03 18:16:54 --> Session routines successfully run
DEBUG - 2013-09-03 18:16:54 --> Form Validation Class Initialized
DEBUG - 2013-09-03 18:16:54 --> Controller Class Initialized
DEBUG - 2013-09-03 18:16:54 --> Model Class Initialized
DEBUG - 2013-09-03 18:16:54 --> Model Class Initialized
DEBUG - 2013-09-03 18:16:54 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 18:16:54 --> after session initialization................
INFO  - 2013-09-03 18:16:54 --> inside the auto suggest page.................
INFO  - 2013-09-03 18:16:54 --> after the list array.................
INFO  - 2013-09-03 18:16:54 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%p%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 18:16:54 --> after retrieving the data from db.................
INFO  - 2013-09-03 18:16:54 --> looping.................
INFO  - 2013-09-03 18:16:54 --> looping.................
DEBUG - 2013-09-03 18:16:54 --> Final output sent to browser
DEBUG - 2013-09-03 18:16:54 --> Total execution time: 0.0739
DEBUG - 2013-09-03 18:16:54 --> Config Class Initialized
DEBUG - 2013-09-03 18:16:54 --> Hooks Class Initialized
DEBUG - 2013-09-03 18:16:54 --> Utf8 Class Initialized
DEBUG - 2013-09-03 18:16:54 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 18:16:54 --> URI Class Initialized
DEBUG - 2013-09-03 18:16:54 --> Router Class Initialized
DEBUG - 2013-09-03 18:16:54 --> Output Class Initialized
DEBUG - 2013-09-03 18:16:54 --> Security Class Initialized
DEBUG - 2013-09-03 18:16:54 --> Input Class Initialized
DEBUG - 2013-09-03 18:16:54 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 18:16:54 --> Language Class Initialized
DEBUG - 2013-09-03 18:16:54 --> Loader Class Initialized
DEBUG - 2013-09-03 18:16:54 --> Helper loaded: form_helper
DEBUG - 2013-09-03 18:16:54 --> Helper loaded: url_helper
DEBUG - 2013-09-03 18:16:54 --> Helper loaded: html_helper
DEBUG - 2013-09-03 18:16:54 --> Database Driver Class Initialized
DEBUG - 2013-09-03 18:16:54 --> Session Class Initialized
DEBUG - 2013-09-03 18:16:54 --> Helper loaded: string_helper
DEBUG - 2013-09-03 18:16:54 --> Session routines successfully run
DEBUG - 2013-09-03 18:16:55 --> Form Validation Class Initialized
DEBUG - 2013-09-03 18:16:55 --> Controller Class Initialized
DEBUG - 2013-09-03 18:16:55 --> Model Class Initialized
DEBUG - 2013-09-03 18:16:55 --> Model Class Initialized
DEBUG - 2013-09-03 18:16:55 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 18:16:55 --> after session initialization................
INFO  - 2013-09-03 18:16:55 --> inside the auto suggest page.................
INFO  - 2013-09-03 18:16:55 --> after the list array.................
INFO  - 2013-09-03 18:16:55 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%pa%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 18:16:55 --> after retrieving the data from db.................
INFO  - 2013-09-03 18:16:55 --> looping.................
DEBUG - 2013-09-03 18:16:55 --> Final output sent to browser
DEBUG - 2013-09-03 18:16:55 --> Total execution time: 0.0726
DEBUG - 2013-09-03 18:16:55 --> Config Class Initialized
DEBUG - 2013-09-03 18:16:55 --> Hooks Class Initialized
DEBUG - 2013-09-03 18:16:55 --> Utf8 Class Initialized
DEBUG - 2013-09-03 18:16:55 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 18:16:55 --> URI Class Initialized
DEBUG - 2013-09-03 18:16:55 --> Router Class Initialized
DEBUG - 2013-09-03 18:16:55 --> Output Class Initialized
DEBUG - 2013-09-03 18:16:55 --> Security Class Initialized
DEBUG - 2013-09-03 18:16:55 --> Input Class Initialized
DEBUG - 2013-09-03 18:16:55 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 18:16:55 --> Language Class Initialized
DEBUG - 2013-09-03 18:16:55 --> Loader Class Initialized
DEBUG - 2013-09-03 18:16:55 --> Helper loaded: form_helper
DEBUG - 2013-09-03 18:16:55 --> Helper loaded: url_helper
DEBUG - 2013-09-03 18:16:55 --> Helper loaded: html_helper
DEBUG - 2013-09-03 18:16:55 --> Database Driver Class Initialized
DEBUG - 2013-09-03 18:16:55 --> Session Class Initialized
DEBUG - 2013-09-03 18:16:55 --> Helper loaded: string_helper
DEBUG - 2013-09-03 18:16:55 --> Session routines successfully run
DEBUG - 2013-09-03 18:16:55 --> Form Validation Class Initialized
DEBUG - 2013-09-03 18:16:55 --> Controller Class Initialized
DEBUG - 2013-09-03 18:16:55 --> Model Class Initialized
DEBUG - 2013-09-03 18:16:55 --> Model Class Initialized
DEBUG - 2013-09-03 18:16:55 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 18:16:55 --> after session initialization................
INFO  - 2013-09-03 18:16:55 --> inside the auto suggest page.................
INFO  - 2013-09-03 18:16:55 --> after the list array.................
INFO  - 2013-09-03 18:16:55 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%pana%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 18:16:55 --> after retrieving the data from db.................
INFO  - 2013-09-03 18:16:55 --> looping.................
DEBUG - 2013-09-03 18:16:55 --> Final output sent to browser
DEBUG - 2013-09-03 18:16:55 --> Total execution time: 0.0607
DEBUG - 2013-09-03 18:16:55 --> Config Class Initialized
DEBUG - 2013-09-03 18:16:55 --> Hooks Class Initialized
DEBUG - 2013-09-03 18:16:55 --> Utf8 Class Initialized
DEBUG - 2013-09-03 18:16:55 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 18:16:55 --> URI Class Initialized
DEBUG - 2013-09-03 18:16:55 --> Router Class Initialized
DEBUG - 2013-09-03 18:16:55 --> Output Class Initialized
DEBUG - 2013-09-03 18:16:55 --> Security Class Initialized
DEBUG - 2013-09-03 18:16:55 --> Input Class Initialized
DEBUG - 2013-09-03 18:16:55 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 18:16:55 --> Language Class Initialized
DEBUG - 2013-09-03 18:16:55 --> Loader Class Initialized
DEBUG - 2013-09-03 18:16:55 --> Helper loaded: form_helper
DEBUG - 2013-09-03 18:16:55 --> Helper loaded: url_helper
DEBUG - 2013-09-03 18:16:55 --> Helper loaded: html_helper
DEBUG - 2013-09-03 18:16:55 --> Database Driver Class Initialized
DEBUG - 2013-09-03 18:16:55 --> Session Class Initialized
DEBUG - 2013-09-03 18:16:55 --> Helper loaded: string_helper
DEBUG - 2013-09-03 18:16:55 --> Session routines successfully run
DEBUG - 2013-09-03 18:16:55 --> Form Validation Class Initialized
DEBUG - 2013-09-03 18:16:55 --> Controller Class Initialized
DEBUG - 2013-09-03 18:16:55 --> Model Class Initialized
DEBUG - 2013-09-03 18:16:55 --> Model Class Initialized
DEBUG - 2013-09-03 18:16:55 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 18:16:55 --> after session initialization................
INFO  - 2013-09-03 18:16:55 --> inside the auto suggest page.................
INFO  - 2013-09-03 18:16:55 --> after the list array.................
INFO  - 2013-09-03 18:16:55 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%pana%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 18:16:55 --> after retrieving the data from db.................
INFO  - 2013-09-03 18:16:55 --> looping.................
DEBUG - 2013-09-03 18:16:55 --> Final output sent to browser
DEBUG - 2013-09-03 18:16:55 --> Total execution time: 0.0614
DEBUG - 2013-09-03 18:16:56 --> Config Class Initialized
DEBUG - 2013-09-03 18:16:56 --> Hooks Class Initialized
DEBUG - 2013-09-03 18:16:56 --> Utf8 Class Initialized
DEBUG - 2013-09-03 18:16:56 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 18:16:56 --> URI Class Initialized
DEBUG - 2013-09-03 18:16:56 --> Router Class Initialized
DEBUG - 2013-09-03 18:16:56 --> Output Class Initialized
DEBUG - 2013-09-03 18:16:56 --> Security Class Initialized
DEBUG - 2013-09-03 18:16:56 --> Input Class Initialized
DEBUG - 2013-09-03 18:16:56 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 18:16:56 --> Language Class Initialized
DEBUG - 2013-09-03 18:16:56 --> Loader Class Initialized
DEBUG - 2013-09-03 18:16:56 --> Helper loaded: form_helper
DEBUG - 2013-09-03 18:16:56 --> Helper loaded: url_helper
DEBUG - 2013-09-03 18:16:56 --> Helper loaded: html_helper
DEBUG - 2013-09-03 18:16:56 --> Database Driver Class Initialized
DEBUG - 2013-09-03 18:16:56 --> Session Class Initialized
DEBUG - 2013-09-03 18:16:56 --> Helper loaded: string_helper
DEBUG - 2013-09-03 18:16:56 --> Session routines successfully run
DEBUG - 2013-09-03 18:16:56 --> Form Validation Class Initialized
DEBUG - 2013-09-03 18:16:56 --> Controller Class Initialized
DEBUG - 2013-09-03 18:16:56 --> Model Class Initialized
DEBUG - 2013-09-03 18:16:56 --> Model Class Initialized
DEBUG - 2013-09-03 18:16:56 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 18:16:56 --> after session initialization................
INFO  - 2013-09-03 18:16:56 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 18:16:56 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-09-03 18:16:56 --> 5==============================0
INFO  - 2013-09-03 18:16:56 --> SELECT dc.id_drugcomment as id, dc.comment, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-03 18:16:56 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
DEBUG - 2013-09-03 18:16:56 --> Final output sent to browser
DEBUG - 2013-09-03 18:16:56 --> Total execution time: 0.0951
DEBUG - 2013-09-03 18:17:04 --> Config Class Initialized
DEBUG - 2013-09-03 18:17:04 --> Hooks Class Initialized
DEBUG - 2013-09-03 18:17:04 --> Utf8 Class Initialized
DEBUG - 2013-09-03 18:17:04 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 18:17:04 --> URI Class Initialized
DEBUG - 2013-09-03 18:17:04 --> Router Class Initialized
DEBUG - 2013-09-03 18:17:04 --> Output Class Initialized
DEBUG - 2013-09-03 18:17:04 --> Security Class Initialized
DEBUG - 2013-09-03 18:17:04 --> Input Class Initialized
DEBUG - 2013-09-03 18:17:04 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 18:17:04 --> Language Class Initialized
DEBUG - 2013-09-03 18:17:04 --> Loader Class Initialized
DEBUG - 2013-09-03 18:17:04 --> Helper loaded: form_helper
DEBUG - 2013-09-03 18:17:04 --> Helper loaded: url_helper
DEBUG - 2013-09-03 18:17:04 --> Helper loaded: html_helper
DEBUG - 2013-09-03 18:17:04 --> Database Driver Class Initialized
DEBUG - 2013-09-03 18:17:04 --> Session Class Initialized
DEBUG - 2013-09-03 18:17:04 --> Helper loaded: string_helper
DEBUG - 2013-09-03 18:17:04 --> Session routines successfully run
DEBUG - 2013-09-03 18:17:04 --> Form Validation Class Initialized
DEBUG - 2013-09-03 18:17:04 --> Controller Class Initialized
DEBUG - 2013-09-03 18:17:04 --> Model Class Initialized
DEBUG - 2013-09-03 18:17:04 --> Model Class Initialized
DEBUG - 2013-09-03 18:17:04 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 18:17:04 --> after session initialization................
DEBUG - 2013-09-03 18:17:04 --> Config Class Initialized
DEBUG - 2013-09-03 18:17:04 --> Hooks Class Initialized
DEBUG - 2013-09-03 18:17:04 --> Utf8 Class Initialized
DEBUG - 2013-09-03 18:17:04 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 18:17:04 --> URI Class Initialized
DEBUG - 2013-09-03 18:17:04 --> Router Class Initialized
DEBUG - 2013-09-03 18:17:04 --> No URI present. Default controller set.
DEBUG - 2013-09-03 18:17:04 --> Output Class Initialized
DEBUG - 2013-09-03 18:17:04 --> Security Class Initialized
DEBUG - 2013-09-03 18:17:04 --> Input Class Initialized
DEBUG - 2013-09-03 18:17:04 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 18:17:04 --> Language Class Initialized
DEBUG - 2013-09-03 18:17:04 --> Loader Class Initialized
DEBUG - 2013-09-03 18:17:04 --> Helper loaded: form_helper
DEBUG - 2013-09-03 18:17:04 --> Helper loaded: url_helper
DEBUG - 2013-09-03 18:17:04 --> Helper loaded: html_helper
DEBUG - 2013-09-03 18:17:04 --> Database Driver Class Initialized
DEBUG - 2013-09-03 18:17:04 --> Session Class Initialized
DEBUG - 2013-09-03 18:17:04 --> Helper loaded: string_helper
DEBUG - 2013-09-03 18:17:04 --> A session cookie was not found.
DEBUG - 2013-09-03 18:17:04 --> Session routines successfully run
DEBUG - 2013-09-03 18:17:04 --> Form Validation Class Initialized
DEBUG - 2013-09-03 18:17:04 --> Controller Class Initialized
INFO  - 2013-09-03 18:17:04 --> the form message==>
INFO  - 2013-09-03 18:17:04 --> after the retrieving session list.................//////////
DEBUG - 2013-09-03 18:17:04 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-03 18:17:04 --> Final output sent to browser
DEBUG - 2013-09-03 18:17:04 --> Total execution time: 0.0579
DEBUG - 2013-09-03 22:04:25 --> Config Class Initialized
DEBUG - 2013-09-03 22:04:25 --> Hooks Class Initialized
DEBUG - 2013-09-03 22:04:25 --> Utf8 Class Initialized
DEBUG - 2013-09-03 22:04:25 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 22:04:25 --> URI Class Initialized
DEBUG - 2013-09-03 22:04:25 --> Router Class Initialized
DEBUG - 2013-09-03 22:04:25 --> Output Class Initialized
DEBUG - 2013-09-03 22:04:25 --> Security Class Initialized
DEBUG - 2013-09-03 22:04:25 --> Input Class Initialized
DEBUG - 2013-09-03 22:04:25 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 22:04:25 --> Language Class Initialized
DEBUG - 2013-09-03 22:04:25 --> Loader Class Initialized
DEBUG - 2013-09-03 22:04:25 --> Helper loaded: form_helper
DEBUG - 2013-09-03 22:04:25 --> Helper loaded: url_helper
DEBUG - 2013-09-03 22:04:25 --> Helper loaded: html_helper
DEBUG - 2013-09-03 22:04:25 --> Database Driver Class Initialized
DEBUG - 2013-09-03 22:04:25 --> Session Class Initialized
DEBUG - 2013-09-03 22:04:25 --> Helper loaded: string_helper
DEBUG - 2013-09-03 22:04:25 --> A session cookie was not found.
DEBUG - 2013-09-03 22:04:25 --> Session routines successfully run
DEBUG - 2013-09-03 22:04:25 --> Form Validation Class Initialized
DEBUG - 2013-09-03 22:04:25 --> Controller Class Initialized
DEBUG - 2013-09-03 22:04:25 --> Model Class Initialized
DEBUG - 2013-09-03 22:04:25 --> Model Class Initialized
DEBUG - 2013-09-03 22:04:25 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 22:04:25 --> after session initialization................
INFO  - 2013-09-03 22:04:25 --> inside rays login auth.............
DEBUG - 2013-09-03 22:04:25 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-09-03 22:04:25 --> XSS Filtering completed
DEBUG - 2013-09-03 22:04:25 --> XSS Filtering completed
INFO  - 2013-09-03 22:04:25 --> before getting the relation of member............6
INFO  - 2013-09-03 22:04:25 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-09-03 22:04:25 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 22:04:25 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-03 22:04:25 --> inside retrieving vacancy for member
INFO  - 2013-09-03 22:04:25 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-09-03 22:04:25 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 22:04:25 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-09-03 22:04:25 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '2'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 22:04:25 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-09-03 22:04:25 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-09-03 22:04:25 -->  column name inside view is 0 column Data is Array
INFO  - 2013-09-03 22:04:25 -->  column name inside view is 1 column Data is Array
INFO  - 2013-09-03 22:04:25 -->  column name inside view is 2 column Data is Array
INFO  - 2013-09-03 22:04:25 -->  column name inside view is 3 column Data is Array
INFO  - 2013-09-03 22:04:25 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-09-03 22:04:25 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-09-03 22:04:25 --> Final output sent to browser
DEBUG - 2013-09-03 22:04:25 --> Total execution time: 0.7037
DEBUG - 2013-09-03 22:04:27 --> Config Class Initialized
DEBUG - 2013-09-03 22:04:27 --> Hooks Class Initialized
DEBUG - 2013-09-03 22:04:27 --> Utf8 Class Initialized
DEBUG - 2013-09-03 22:04:27 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 22:04:27 --> URI Class Initialized
DEBUG - 2013-09-03 22:04:27 --> Router Class Initialized
DEBUG - 2013-09-03 22:04:27 --> Output Class Initialized
DEBUG - 2013-09-03 22:04:27 --> Security Class Initialized
DEBUG - 2013-09-03 22:04:27 --> Input Class Initialized
DEBUG - 2013-09-03 22:04:27 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 22:04:27 --> Language Class Initialized
DEBUG - 2013-09-03 22:04:27 --> Loader Class Initialized
DEBUG - 2013-09-03 22:04:27 --> Helper loaded: form_helper
DEBUG - 2013-09-03 22:04:27 --> Helper loaded: url_helper
DEBUG - 2013-09-03 22:04:27 --> Helper loaded: html_helper
DEBUG - 2013-09-03 22:04:27 --> Database Driver Class Initialized
DEBUG - 2013-09-03 22:04:27 --> Session Class Initialized
DEBUG - 2013-09-03 22:04:27 --> Helper loaded: string_helper
DEBUG - 2013-09-03 22:04:27 --> Session routines successfully run
DEBUG - 2013-09-03 22:04:27 --> Form Validation Class Initialized
DEBUG - 2013-09-03 22:04:27 --> Controller Class Initialized
DEBUG - 2013-09-03 22:04:27 --> Model Class Initialized
DEBUG - 2013-09-03 22:04:27 --> Model Class Initialized
DEBUG - 2013-09-03 22:04:27 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 22:04:27 --> after session initialization................
ERROR - 2013-09-03 22:04:27 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-09-03 22:04:30 --> Config Class Initialized
DEBUG - 2013-09-03 22:04:30 --> Hooks Class Initialized
DEBUG - 2013-09-03 22:04:30 --> Utf8 Class Initialized
DEBUG - 2013-09-03 22:04:30 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 22:04:30 --> URI Class Initialized
DEBUG - 2013-09-03 22:04:30 --> Router Class Initialized
DEBUG - 2013-09-03 22:04:30 --> Output Class Initialized
DEBUG - 2013-09-03 22:04:30 --> Security Class Initialized
DEBUG - 2013-09-03 22:04:30 --> Input Class Initialized
DEBUG - 2013-09-03 22:04:30 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 22:04:30 --> Language Class Initialized
DEBUG - 2013-09-03 22:04:30 --> Loader Class Initialized
DEBUG - 2013-09-03 22:04:30 --> Helper loaded: form_helper
DEBUG - 2013-09-03 22:04:30 --> Helper loaded: url_helper
DEBUG - 2013-09-03 22:04:30 --> Helper loaded: html_helper
DEBUG - 2013-09-03 22:04:30 --> Database Driver Class Initialized
DEBUG - 2013-09-03 22:04:30 --> Session Class Initialized
DEBUG - 2013-09-03 22:04:30 --> Helper loaded: string_helper
DEBUG - 2013-09-03 22:04:30 --> Session routines successfully run
DEBUG - 2013-09-03 22:04:30 --> Form Validation Class Initialized
DEBUG - 2013-09-03 22:04:30 --> Controller Class Initialized
DEBUG - 2013-09-03 22:04:30 --> Model Class Initialized
DEBUG - 2013-09-03 22:04:30 --> Model Class Initialized
DEBUG - 2013-09-03 22:04:30 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 22:04:30 --> after session initialization................
INFO  - 2013-09-03 22:04:30 --> inside rays login auth.............
INFO  - 2013-09-03 22:04:30 --> inside rays login auth.............
DEBUG - 2013-09-03 22:04:30 --> Config Class Initialized
DEBUG - 2013-09-03 22:04:30 --> Hooks Class Initialized
DEBUG - 2013-09-03 22:04:30 --> Utf8 Class Initialized
DEBUG - 2013-09-03 22:04:30 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 22:04:30 --> URI Class Initialized
DEBUG - 2013-09-03 22:04:30 --> Router Class Initialized
DEBUG - 2013-09-03 22:04:30 --> No URI present. Default controller set.
DEBUG - 2013-09-03 22:04:30 --> Output Class Initialized
DEBUG - 2013-09-03 22:04:30 --> Security Class Initialized
DEBUG - 2013-09-03 22:04:30 --> Input Class Initialized
DEBUG - 2013-09-03 22:04:30 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 22:04:30 --> Language Class Initialized
DEBUG - 2013-09-03 22:04:30 --> Loader Class Initialized
DEBUG - 2013-09-03 22:04:30 --> Helper loaded: form_helper
DEBUG - 2013-09-03 22:04:30 --> Helper loaded: url_helper
DEBUG - 2013-09-03 22:04:30 --> Helper loaded: html_helper
DEBUG - 2013-09-03 22:04:31 --> Database Driver Class Initialized
DEBUG - 2013-09-03 22:04:31 --> Session Class Initialized
DEBUG - 2013-09-03 22:04:31 --> Helper loaded: string_helper
DEBUG - 2013-09-03 22:04:31 --> Session routines successfully run
DEBUG - 2013-09-03 22:04:31 --> Form Validation Class Initialized
DEBUG - 2013-09-03 22:04:31 --> Controller Class Initialized
INFO  - 2013-09-03 22:04:31 --> the form message==>
INFO  - 2013-09-03 22:04:31 --> after the retrieving session list.................//////////
DEBUG - 2013-09-03 22:04:31 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-03 22:04:31 --> Final output sent to browser
DEBUG - 2013-09-03 22:04:31 --> Total execution time: 0.0981
DEBUG - 2013-09-03 22:04:43 --> Config Class Initialized
DEBUG - 2013-09-03 22:04:43 --> Hooks Class Initialized
DEBUG - 2013-09-03 22:04:43 --> Utf8 Class Initialized
DEBUG - 2013-09-03 22:04:43 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 22:04:43 --> URI Class Initialized
DEBUG - 2013-09-03 22:04:43 --> Router Class Initialized
DEBUG - 2013-09-03 22:04:43 --> Output Class Initialized
DEBUG - 2013-09-03 22:04:43 --> Security Class Initialized
DEBUG - 2013-09-03 22:04:43 --> Input Class Initialized
DEBUG - 2013-09-03 22:04:43 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 22:04:43 --> Language Class Initialized
DEBUG - 2013-09-03 22:04:43 --> Loader Class Initialized
DEBUG - 2013-09-03 22:04:43 --> Helper loaded: form_helper
DEBUG - 2013-09-03 22:04:43 --> Helper loaded: url_helper
DEBUG - 2013-09-03 22:04:43 --> Helper loaded: html_helper
DEBUG - 2013-09-03 22:04:43 --> Database Driver Class Initialized
DEBUG - 2013-09-03 22:04:43 --> Session Class Initialized
DEBUG - 2013-09-03 22:04:43 --> Helper loaded: string_helper
DEBUG - 2013-09-03 22:04:43 --> Session routines successfully run
DEBUG - 2013-09-03 22:04:43 --> Form Validation Class Initialized
DEBUG - 2013-09-03 22:04:43 --> Controller Class Initialized
DEBUG - 2013-09-03 22:04:43 --> Model Class Initialized
DEBUG - 2013-09-03 22:04:43 --> Model Class Initialized
DEBUG - 2013-09-03 22:04:43 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 22:04:43 --> after session initialization................
INFO  - 2013-09-03 22:04:43 --> inside rays login auth.............
DEBUG - 2013-09-03 22:04:43 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-09-03 22:04:43 --> XSS Filtering completed
DEBUG - 2013-09-03 22:04:43 --> XSS Filtering completed
INFO  - 2013-09-03 22:04:43 --> before getting the relation of member............6
INFO  - 2013-09-03 22:04:43 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-09-03 22:04:43 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 22:04:43 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-03 22:04:43 --> inside retrieving vacancy for member
INFO  - 2013-09-03 22:04:43 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-09-03 22:04:43 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 22:04:43 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-09-03 22:04:43 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '2'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 22:04:43 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-09-03 22:04:43 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-09-03 22:04:43 -->  column name inside view is 0 column Data is Array
INFO  - 2013-09-03 22:04:43 -->  column name inside view is 1 column Data is Array
INFO  - 2013-09-03 22:04:43 -->  column name inside view is 2 column Data is Array
INFO  - 2013-09-03 22:04:43 -->  column name inside view is 3 column Data is Array
INFO  - 2013-09-03 22:04:43 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-09-03 22:04:43 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-09-03 22:04:43 --> Final output sent to browser
DEBUG - 2013-09-03 22:04:43 --> Total execution time: 0.2887
DEBUG - 2013-09-03 22:04:43 --> Config Class Initialized
DEBUG - 2013-09-03 22:04:43 --> Hooks Class Initialized
DEBUG - 2013-09-03 22:04:43 --> Utf8 Class Initialized
DEBUG - 2013-09-03 22:04:43 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 22:04:43 --> URI Class Initialized
DEBUG - 2013-09-03 22:04:43 --> Router Class Initialized
DEBUG - 2013-09-03 22:04:43 --> Output Class Initialized
DEBUG - 2013-09-03 22:04:43 --> Security Class Initialized
DEBUG - 2013-09-03 22:04:43 --> Input Class Initialized
DEBUG - 2013-09-03 22:04:43 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 22:04:43 --> Language Class Initialized
DEBUG - 2013-09-03 22:04:43 --> Loader Class Initialized
DEBUG - 2013-09-03 22:04:43 --> Helper loaded: form_helper
DEBUG - 2013-09-03 22:04:43 --> Helper loaded: url_helper
DEBUG - 2013-09-03 22:04:43 --> Helper loaded: html_helper
DEBUG - 2013-09-03 22:04:43 --> Database Driver Class Initialized
DEBUG - 2013-09-03 22:04:43 --> Session Class Initialized
DEBUG - 2013-09-03 22:04:43 --> Helper loaded: string_helper
DEBUG - 2013-09-03 22:04:43 --> Session routines successfully run
DEBUG - 2013-09-03 22:04:43 --> Form Validation Class Initialized
DEBUG - 2013-09-03 22:04:44 --> Controller Class Initialized
DEBUG - 2013-09-03 22:04:44 --> Model Class Initialized
DEBUG - 2013-09-03 22:04:44 --> Model Class Initialized
DEBUG - 2013-09-03 22:04:44 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 22:04:44 --> after session initialization................
ERROR - 2013-09-03 22:04:44 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-09-03 22:05:03 --> Config Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Hooks Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Utf8 Class Initialized
DEBUG - 2013-09-03 22:05:03 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 22:05:03 --> URI Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Router Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Output Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Security Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Input Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 22:05:03 --> Language Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Loader Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Helper loaded: form_helper
DEBUG - 2013-09-03 22:05:03 --> Helper loaded: url_helper
DEBUG - 2013-09-03 22:05:03 --> Helper loaded: html_helper
DEBUG - 2013-09-03 22:05:03 --> Database Driver Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Session Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Helper loaded: string_helper
DEBUG - 2013-09-03 22:05:03 --> Session routines successfully run
DEBUG - 2013-09-03 22:05:03 --> Form Validation Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Controller Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Model Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Model Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 22:05:03 --> after session initialization................
INFO  - 2013-09-03 22:05:03 --> inside the auto suggest page.................
INFO  - 2013-09-03 22:05:03 --> after the list array.................
INFO  - 2013-09-03 22:05:03 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%pa%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 22:05:03 --> after retrieving the data from db.................
INFO  - 2013-09-03 22:05:03 --> looping.................
DEBUG - 2013-09-03 22:05:03 --> Final output sent to browser
DEBUG - 2013-09-03 22:05:03 --> Total execution time: 0.0663
DEBUG - 2013-09-03 22:05:03 --> Config Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Hooks Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Utf8 Class Initialized
DEBUG - 2013-09-03 22:05:03 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 22:05:03 --> URI Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Router Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Output Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Security Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Input Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 22:05:03 --> Language Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Loader Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Helper loaded: form_helper
DEBUG - 2013-09-03 22:05:03 --> Helper loaded: url_helper
DEBUG - 2013-09-03 22:05:03 --> Helper loaded: html_helper
DEBUG - 2013-09-03 22:05:03 --> Database Driver Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Session Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Helper loaded: string_helper
DEBUG - 2013-09-03 22:05:03 --> Session routines successfully run
DEBUG - 2013-09-03 22:05:03 --> Form Validation Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Controller Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Model Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Model Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 22:05:03 --> after session initialization................
INFO  - 2013-09-03 22:05:03 --> inside the auto suggest page.................
INFO  - 2013-09-03 22:05:03 --> after the list array.................
INFO  - 2013-09-03 22:05:03 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%pa%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 22:05:03 --> after retrieving the data from db.................
INFO  - 2013-09-03 22:05:03 --> looping.................
DEBUG - 2013-09-03 22:05:03 --> Final output sent to browser
DEBUG - 2013-09-03 22:05:03 --> Total execution time: 0.1723
DEBUG - 2013-09-03 22:05:03 --> Config Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Hooks Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Utf8 Class Initialized
DEBUG - 2013-09-03 22:05:03 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 22:05:03 --> URI Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Router Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Output Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Security Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Input Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 22:05:03 --> Language Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Loader Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Helper loaded: form_helper
DEBUG - 2013-09-03 22:05:03 --> Helper loaded: url_helper
DEBUG - 2013-09-03 22:05:03 --> Helper loaded: html_helper
DEBUG - 2013-09-03 22:05:03 --> Database Driver Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Session Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Helper loaded: string_helper
DEBUG - 2013-09-03 22:05:03 --> Session routines successfully run
DEBUG - 2013-09-03 22:05:03 --> Form Validation Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Controller Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Model Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Model Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 22:05:03 --> after session initialization................
INFO  - 2013-09-03 22:05:03 --> inside the auto suggest page.................
INFO  - 2013-09-03 22:05:03 --> after the list array.................
INFO  - 2013-09-03 22:05:03 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%pana%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 22:05:03 --> after retrieving the data from db.................
INFO  - 2013-09-03 22:05:03 --> looping.................
DEBUG - 2013-09-03 22:05:03 --> Final output sent to browser
DEBUG - 2013-09-03 22:05:03 --> Total execution time: 0.0567
DEBUG - 2013-09-03 22:05:03 --> Config Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Hooks Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Utf8 Class Initialized
DEBUG - 2013-09-03 22:05:03 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 22:05:03 --> URI Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Router Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Output Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Security Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Input Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 22:05:03 --> Language Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Loader Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Helper loaded: form_helper
DEBUG - 2013-09-03 22:05:03 --> Helper loaded: url_helper
DEBUG - 2013-09-03 22:05:03 --> Helper loaded: html_helper
DEBUG - 2013-09-03 22:05:03 --> Database Driver Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Session Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Helper loaded: string_helper
DEBUG - 2013-09-03 22:05:03 --> Session routines successfully run
DEBUG - 2013-09-03 22:05:03 --> Form Validation Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Controller Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Model Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Model Class Initialized
DEBUG - 2013-09-03 22:05:03 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 22:05:03 --> after session initialization................
INFO  - 2013-09-03 22:05:03 --> inside the auto suggest page.................
INFO  - 2013-09-03 22:05:03 --> after the list array.................
INFO  - 2013-09-03 22:05:03 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%pana%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 22:05:03 --> after retrieving the data from db.................
INFO  - 2013-09-03 22:05:03 --> looping.................
DEBUG - 2013-09-03 22:05:03 --> Final output sent to browser
DEBUG - 2013-09-03 22:05:03 --> Total execution time: 0.0659
DEBUG - 2013-09-03 22:05:04 --> Config Class Initialized
DEBUG - 2013-09-03 22:05:04 --> Hooks Class Initialized
DEBUG - 2013-09-03 22:05:04 --> Utf8 Class Initialized
DEBUG - 2013-09-03 22:05:04 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 22:05:04 --> URI Class Initialized
DEBUG - 2013-09-03 22:05:04 --> Router Class Initialized
DEBUG - 2013-09-03 22:05:04 --> Output Class Initialized
DEBUG - 2013-09-03 22:05:04 --> Security Class Initialized
DEBUG - 2013-09-03 22:05:04 --> Input Class Initialized
DEBUG - 2013-09-03 22:05:04 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 22:05:04 --> Language Class Initialized
DEBUG - 2013-09-03 22:05:04 --> Loader Class Initialized
DEBUG - 2013-09-03 22:05:04 --> Helper loaded: form_helper
DEBUG - 2013-09-03 22:05:04 --> Helper loaded: url_helper
DEBUG - 2013-09-03 22:05:04 --> Helper loaded: html_helper
DEBUG - 2013-09-03 22:05:04 --> Database Driver Class Initialized
DEBUG - 2013-09-03 22:05:04 --> Session Class Initialized
DEBUG - 2013-09-03 22:05:04 --> Helper loaded: string_helper
DEBUG - 2013-09-03 22:05:04 --> Session routines successfully run
DEBUG - 2013-09-03 22:05:04 --> Form Validation Class Initialized
DEBUG - 2013-09-03 22:05:04 --> Controller Class Initialized
DEBUG - 2013-09-03 22:05:04 --> Model Class Initialized
DEBUG - 2013-09-03 22:05:04 --> Model Class Initialized
DEBUG - 2013-09-03 22:05:04 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 22:05:04 --> after session initialization................
INFO  - 2013-09-03 22:05:04 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 22:05:04 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-09-03 22:05:04 --> 5==============================0
INFO  - 2013-09-03 22:05:04 --> SELECT dc.id_drugcomment as id, dc.comment, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-03 22:05:04 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
DEBUG - 2013-09-03 22:05:04 --> Final output sent to browser
DEBUG - 2013-09-03 22:05:04 --> Total execution time: 0.1346
DEBUG - 2013-09-03 22:11:06 --> Config Class Initialized
DEBUG - 2013-09-03 22:11:06 --> Hooks Class Initialized
DEBUG - 2013-09-03 22:11:06 --> Utf8 Class Initialized
DEBUG - 2013-09-03 22:11:06 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 22:11:06 --> URI Class Initialized
DEBUG - 2013-09-03 22:11:06 --> Router Class Initialized
DEBUG - 2013-09-03 22:11:06 --> Output Class Initialized
DEBUG - 2013-09-03 22:11:06 --> Security Class Initialized
DEBUG - 2013-09-03 22:11:06 --> Input Class Initialized
DEBUG - 2013-09-03 22:11:06 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 22:11:06 --> Language Class Initialized
DEBUG - 2013-09-03 22:11:06 --> Loader Class Initialized
DEBUG - 2013-09-03 22:11:06 --> Helper loaded: form_helper
DEBUG - 2013-09-03 22:11:06 --> Helper loaded: url_helper
DEBUG - 2013-09-03 22:11:06 --> Helper loaded: html_helper
DEBUG - 2013-09-03 22:11:06 --> Database Driver Class Initialized
DEBUG - 2013-09-03 22:11:06 --> Session Class Initialized
DEBUG - 2013-09-03 22:11:06 --> Helper loaded: string_helper
DEBUG - 2013-09-03 22:11:06 --> Session routines successfully run
DEBUG - 2013-09-03 22:11:06 --> Form Validation Class Initialized
DEBUG - 2013-09-03 22:11:06 --> Controller Class Initialized
DEBUG - 2013-09-03 22:11:06 --> Model Class Initialized
DEBUG - 2013-09-03 22:11:06 --> Model Class Initialized
DEBUG - 2013-09-03 22:11:06 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 22:11:06 --> after session initialization................
INFO  - 2013-09-03 22:11:06 --> inside rays login auth.............
DEBUG - 2013-09-03 22:11:06 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-09-03 22:11:06 --> XSS Filtering completed
DEBUG - 2013-09-03 22:11:06 --> XSS Filtering completed
INFO  - 2013-09-03 22:11:06 --> before getting the relation of member............6
INFO  - 2013-09-03 22:11:06 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-09-03 22:11:06 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 22:11:06 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-03 22:11:06 --> inside retrieving vacancy for member
INFO  - 2013-09-03 22:11:06 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-09-03 22:11:06 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 22:11:06 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-09-03 22:11:06 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '2'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 22:11:06 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-09-03 22:11:06 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-09-03 22:11:06 -->  column name inside view is 0 column Data is Array
INFO  - 2013-09-03 22:11:06 -->  column name inside view is 1 column Data is Array
INFO  - 2013-09-03 22:11:06 -->  column name inside view is 2 column Data is Array
INFO  - 2013-09-03 22:11:06 -->  column name inside view is 3 column Data is Array
INFO  - 2013-09-03 22:11:06 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-09-03 22:11:06 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-09-03 22:11:06 --> Final output sent to browser
DEBUG - 2013-09-03 22:11:06 --> Total execution time: 0.1045
DEBUG - 2013-09-03 22:11:07 --> Config Class Initialized
DEBUG - 2013-09-03 22:11:07 --> Hooks Class Initialized
DEBUG - 2013-09-03 22:11:07 --> Utf8 Class Initialized
DEBUG - 2013-09-03 22:11:07 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 22:11:07 --> URI Class Initialized
DEBUG - 2013-09-03 22:11:07 --> Router Class Initialized
DEBUG - 2013-09-03 22:11:07 --> Output Class Initialized
DEBUG - 2013-09-03 22:11:07 --> Security Class Initialized
DEBUG - 2013-09-03 22:11:07 --> Input Class Initialized
DEBUG - 2013-09-03 22:11:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 22:11:07 --> Language Class Initialized
DEBUG - 2013-09-03 22:11:07 --> Loader Class Initialized
DEBUG - 2013-09-03 22:11:07 --> Helper loaded: form_helper
DEBUG - 2013-09-03 22:11:07 --> Helper loaded: url_helper
DEBUG - 2013-09-03 22:11:07 --> Helper loaded: html_helper
DEBUG - 2013-09-03 22:11:07 --> Database Driver Class Initialized
DEBUG - 2013-09-03 22:11:07 --> Session Class Initialized
DEBUG - 2013-09-03 22:11:07 --> Helper loaded: string_helper
DEBUG - 2013-09-03 22:11:07 --> Session routines successfully run
DEBUG - 2013-09-03 22:11:07 --> Form Validation Class Initialized
DEBUG - 2013-09-03 22:11:07 --> Controller Class Initialized
DEBUG - 2013-09-03 22:11:07 --> Model Class Initialized
DEBUG - 2013-09-03 22:11:07 --> Model Class Initialized
DEBUG - 2013-09-03 22:11:07 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 22:11:07 --> after session initialization................
ERROR - 2013-09-03 22:11:07 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-09-03 22:11:12 --> Config Class Initialized
DEBUG - 2013-09-03 22:11:12 --> Hooks Class Initialized
DEBUG - 2013-09-03 22:11:12 --> Utf8 Class Initialized
DEBUG - 2013-09-03 22:11:12 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 22:11:12 --> URI Class Initialized
DEBUG - 2013-09-03 22:11:12 --> Router Class Initialized
DEBUG - 2013-09-03 22:11:12 --> Output Class Initialized
DEBUG - 2013-09-03 22:11:12 --> Security Class Initialized
DEBUG - 2013-09-03 22:11:12 --> Input Class Initialized
DEBUG - 2013-09-03 22:11:12 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 22:11:12 --> Language Class Initialized
DEBUG - 2013-09-03 22:11:12 --> Loader Class Initialized
DEBUG - 2013-09-03 22:11:12 --> Helper loaded: form_helper
DEBUG - 2013-09-03 22:11:12 --> Helper loaded: url_helper
DEBUG - 2013-09-03 22:11:12 --> Helper loaded: html_helper
DEBUG - 2013-09-03 22:11:12 --> Database Driver Class Initialized
DEBUG - 2013-09-03 22:11:12 --> Session Class Initialized
DEBUG - 2013-09-03 22:11:12 --> Helper loaded: string_helper
DEBUG - 2013-09-03 22:11:12 --> Session routines successfully run
DEBUG - 2013-09-03 22:11:12 --> Form Validation Class Initialized
DEBUG - 2013-09-03 22:11:12 --> Controller Class Initialized
DEBUG - 2013-09-03 22:11:12 --> Model Class Initialized
DEBUG - 2013-09-03 22:11:12 --> Model Class Initialized
DEBUG - 2013-09-03 22:11:12 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 22:11:12 --> after session initialization................
INFO  - 2013-09-03 22:11:12 --> inside the auto suggest page.................
INFO  - 2013-09-03 22:11:12 --> after the list array.................
INFO  - 2013-09-03 22:11:12 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%ci%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 22:11:12 --> after retrieving the data from db.................
INFO  - 2013-09-03 22:11:12 --> looping.................
DEBUG - 2013-09-03 22:11:12 --> Final output sent to browser
DEBUG - 2013-09-03 22:11:12 --> Total execution time: 0.0626
DEBUG - 2013-09-03 22:11:12 --> Config Class Initialized
DEBUG - 2013-09-03 22:11:12 --> Hooks Class Initialized
DEBUG - 2013-09-03 22:11:12 --> Utf8 Class Initialized
DEBUG - 2013-09-03 22:11:12 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 22:11:12 --> URI Class Initialized
DEBUG - 2013-09-03 22:11:12 --> Router Class Initialized
DEBUG - 2013-09-03 22:11:12 --> Output Class Initialized
DEBUG - 2013-09-03 22:11:12 --> Security Class Initialized
DEBUG - 2013-09-03 22:11:12 --> Input Class Initialized
DEBUG - 2013-09-03 22:11:12 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 22:11:12 --> Language Class Initialized
DEBUG - 2013-09-03 22:11:12 --> Loader Class Initialized
DEBUG - 2013-09-03 22:11:12 --> Helper loaded: form_helper
DEBUG - 2013-09-03 22:11:12 --> Helper loaded: url_helper
DEBUG - 2013-09-03 22:11:12 --> Helper loaded: html_helper
DEBUG - 2013-09-03 22:11:12 --> Database Driver Class Initialized
DEBUG - 2013-09-03 22:11:12 --> Session Class Initialized
DEBUG - 2013-09-03 22:11:12 --> Helper loaded: string_helper
DEBUG - 2013-09-03 22:11:12 --> Session routines successfully run
DEBUG - 2013-09-03 22:11:12 --> Form Validation Class Initialized
DEBUG - 2013-09-03 22:11:12 --> Controller Class Initialized
DEBUG - 2013-09-03 22:11:12 --> Model Class Initialized
DEBUG - 2013-09-03 22:11:12 --> Model Class Initialized
DEBUG - 2013-09-03 22:11:12 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 22:11:12 --> after session initialization................
INFO  - 2013-09-03 22:11:12 --> inside the auto suggest page.................
INFO  - 2013-09-03 22:11:12 --> after the list array.................
INFO  - 2013-09-03 22:11:12 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%ci%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 22:11:12 --> after retrieving the data from db.................
INFO  - 2013-09-03 22:11:12 --> looping.................
DEBUG - 2013-09-03 22:11:12 --> Final output sent to browser
DEBUG - 2013-09-03 22:11:12 --> Total execution time: 0.1772
DEBUG - 2013-09-03 22:11:13 --> Config Class Initialized
DEBUG - 2013-09-03 22:11:13 --> Hooks Class Initialized
DEBUG - 2013-09-03 22:11:13 --> Utf8 Class Initialized
DEBUG - 2013-09-03 22:11:13 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 22:11:13 --> URI Class Initialized
DEBUG - 2013-09-03 22:11:13 --> Router Class Initialized
DEBUG - 2013-09-03 22:11:13 --> Output Class Initialized
DEBUG - 2013-09-03 22:11:13 --> Security Class Initialized
DEBUG - 2013-09-03 22:11:13 --> Input Class Initialized
DEBUG - 2013-09-03 22:11:13 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 22:11:13 --> Language Class Initialized
DEBUG - 2013-09-03 22:11:13 --> Loader Class Initialized
DEBUG - 2013-09-03 22:11:13 --> Helper loaded: form_helper
DEBUG - 2013-09-03 22:11:13 --> Helper loaded: url_helper
DEBUG - 2013-09-03 22:11:13 --> Helper loaded: html_helper
DEBUG - 2013-09-03 22:11:13 --> Database Driver Class Initialized
DEBUG - 2013-09-03 22:11:13 --> Session Class Initialized
DEBUG - 2013-09-03 22:11:13 --> Helper loaded: string_helper
DEBUG - 2013-09-03 22:11:13 --> Session routines successfully run
DEBUG - 2013-09-03 22:11:13 --> Form Validation Class Initialized
DEBUG - 2013-09-03 22:11:13 --> Controller Class Initialized
DEBUG - 2013-09-03 22:11:13 --> Model Class Initialized
DEBUG - 2013-09-03 22:11:13 --> Model Class Initialized
DEBUG - 2013-09-03 22:11:13 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 22:11:13 --> after session initialization................
INFO  - 2013-09-03 22:11:13 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '5'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 22:11:13 --> inside retrieving comments member id and drug id is 5
INFO  - 2013-09-03 22:11:13 --> 5==============================0
INFO  - 2013-09-03 22:11:14 --> SELECT dc.id_drugcomment as id, dc.comment, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 5
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-03 22:11:14 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 5
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
DEBUG - 2013-09-03 22:11:14 --> Final output sent to browser
DEBUG - 2013-09-03 22:11:14 --> Total execution time: 0.0735
DEBUG - 2013-09-03 22:11:18 --> Config Class Initialized
DEBUG - 2013-09-03 22:11:18 --> Hooks Class Initialized
DEBUG - 2013-09-03 22:11:18 --> Utf8 Class Initialized
DEBUG - 2013-09-03 22:11:18 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 22:11:18 --> URI Class Initialized
DEBUG - 2013-09-03 22:11:18 --> Router Class Initialized
DEBUG - 2013-09-03 22:11:18 --> Output Class Initialized
DEBUG - 2013-09-03 22:11:18 --> Security Class Initialized
DEBUG - 2013-09-03 22:11:18 --> Input Class Initialized
DEBUG - 2013-09-03 22:11:18 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 22:11:18 --> Language Class Initialized
DEBUG - 2013-09-03 22:11:18 --> Loader Class Initialized
DEBUG - 2013-09-03 22:11:18 --> Helper loaded: form_helper
DEBUG - 2013-09-03 22:11:18 --> Helper loaded: url_helper
DEBUG - 2013-09-03 22:11:18 --> Helper loaded: html_helper
DEBUG - 2013-09-03 22:11:18 --> Database Driver Class Initialized
DEBUG - 2013-09-03 22:11:18 --> Session Class Initialized
DEBUG - 2013-09-03 22:11:18 --> Helper loaded: string_helper
DEBUG - 2013-09-03 22:11:18 --> Session routines successfully run
DEBUG - 2013-09-03 22:11:18 --> Form Validation Class Initialized
DEBUG - 2013-09-03 22:11:18 --> Controller Class Initialized
DEBUG - 2013-09-03 22:11:18 --> Model Class Initialized
DEBUG - 2013-09-03 22:11:18 --> Model Class Initialized
DEBUG - 2013-09-03 22:11:18 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 22:11:18 --> after session initialization................
INFO  - 2013-09-03 22:11:18 --> inside the auto suggest page.................
INFO  - 2013-09-03 22:11:18 --> after the list array.................
INFO  - 2013-09-03 22:11:18 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%p%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 22:11:18 --> after retrieving the data from db.................
INFO  - 2013-09-03 22:11:18 --> looping.................
INFO  - 2013-09-03 22:11:18 --> looping.................
DEBUG - 2013-09-03 22:11:18 --> Final output sent to browser
DEBUG - 2013-09-03 22:11:18 --> Total execution time: 0.0622
DEBUG - 2013-09-03 22:11:18 --> Config Class Initialized
DEBUG - 2013-09-03 22:11:18 --> Hooks Class Initialized
DEBUG - 2013-09-03 22:11:18 --> Utf8 Class Initialized
DEBUG - 2013-09-03 22:11:18 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 22:11:18 --> URI Class Initialized
DEBUG - 2013-09-03 22:11:18 --> Router Class Initialized
DEBUG - 2013-09-03 22:11:18 --> Output Class Initialized
DEBUG - 2013-09-03 22:11:18 --> Security Class Initialized
DEBUG - 2013-09-03 22:11:18 --> Input Class Initialized
DEBUG - 2013-09-03 22:11:18 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 22:11:18 --> Language Class Initialized
DEBUG - 2013-09-03 22:11:18 --> Loader Class Initialized
DEBUG - 2013-09-03 22:11:18 --> Helper loaded: form_helper
DEBUG - 2013-09-03 22:11:18 --> Helper loaded: url_helper
DEBUG - 2013-09-03 22:11:18 --> Helper loaded: html_helper
DEBUG - 2013-09-03 22:11:18 --> Database Driver Class Initialized
DEBUG - 2013-09-03 22:11:18 --> Session Class Initialized
DEBUG - 2013-09-03 22:11:18 --> Helper loaded: string_helper
DEBUG - 2013-09-03 22:11:18 --> Session routines successfully run
DEBUG - 2013-09-03 22:11:18 --> Form Validation Class Initialized
DEBUG - 2013-09-03 22:11:18 --> Controller Class Initialized
DEBUG - 2013-09-03 22:11:18 --> Model Class Initialized
DEBUG - 2013-09-03 22:11:18 --> Model Class Initialized
DEBUG - 2013-09-03 22:11:18 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 22:11:18 --> after session initialization................
INFO  - 2013-09-03 22:11:18 --> inside the auto suggest page.................
INFO  - 2013-09-03 22:11:18 --> after the list array.................
INFO  - 2013-09-03 22:11:18 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%pn%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 22:11:18 --> after retrieving the data from db.................
DEBUG - 2013-09-03 22:11:18 --> Final output sent to browser
DEBUG - 2013-09-03 22:11:18 --> Total execution time: 0.0565
DEBUG - 2013-09-03 22:11:18 --> Config Class Initialized
DEBUG - 2013-09-03 22:11:18 --> Hooks Class Initialized
DEBUG - 2013-09-03 22:11:18 --> Utf8 Class Initialized
DEBUG - 2013-09-03 22:11:18 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 22:11:18 --> URI Class Initialized
DEBUG - 2013-09-03 22:11:18 --> Router Class Initialized
DEBUG - 2013-09-03 22:11:18 --> Output Class Initialized
DEBUG - 2013-09-03 22:11:18 --> Security Class Initialized
DEBUG - 2013-09-03 22:11:18 --> Input Class Initialized
DEBUG - 2013-09-03 22:11:18 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 22:11:18 --> Language Class Initialized
DEBUG - 2013-09-03 22:11:18 --> Loader Class Initialized
DEBUG - 2013-09-03 22:11:18 --> Helper loaded: form_helper
DEBUG - 2013-09-03 22:11:18 --> Helper loaded: url_helper
DEBUG - 2013-09-03 22:11:18 --> Helper loaded: html_helper
DEBUG - 2013-09-03 22:11:19 --> Database Driver Class Initialized
DEBUG - 2013-09-03 22:11:19 --> Session Class Initialized
DEBUG - 2013-09-03 22:11:19 --> Helper loaded: string_helper
DEBUG - 2013-09-03 22:11:19 --> Session routines successfully run
DEBUG - 2013-09-03 22:11:19 --> Form Validation Class Initialized
DEBUG - 2013-09-03 22:11:19 --> Controller Class Initialized
DEBUG - 2013-09-03 22:11:19 --> Model Class Initialized
DEBUG - 2013-09-03 22:11:19 --> Model Class Initialized
DEBUG - 2013-09-03 22:11:19 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 22:11:19 --> after session initialization................
INFO  - 2013-09-03 22:11:19 --> inside the auto suggest page.................
INFO  - 2013-09-03 22:11:19 --> after the list array.................
INFO  - 2013-09-03 22:11:19 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%pna%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 22:11:19 --> after retrieving the data from db.................
DEBUG - 2013-09-03 22:11:19 --> Final output sent to browser
DEBUG - 2013-09-03 22:11:19 --> Total execution time: 0.0893
DEBUG - 2013-09-03 22:11:20 --> Config Class Initialized
DEBUG - 2013-09-03 22:11:20 --> Hooks Class Initialized
DEBUG - 2013-09-03 22:11:20 --> Utf8 Class Initialized
DEBUG - 2013-09-03 22:11:20 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 22:11:20 --> URI Class Initialized
DEBUG - 2013-09-03 22:11:20 --> Router Class Initialized
DEBUG - 2013-09-03 22:11:20 --> Output Class Initialized
DEBUG - 2013-09-03 22:11:20 --> Security Class Initialized
DEBUG - 2013-09-03 22:11:20 --> Input Class Initialized
DEBUG - 2013-09-03 22:11:20 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 22:11:20 --> Language Class Initialized
DEBUG - 2013-09-03 22:11:20 --> Loader Class Initialized
DEBUG - 2013-09-03 22:11:20 --> Helper loaded: form_helper
DEBUG - 2013-09-03 22:11:20 --> Helper loaded: url_helper
DEBUG - 2013-09-03 22:11:20 --> Helper loaded: html_helper
DEBUG - 2013-09-03 22:11:20 --> Database Driver Class Initialized
DEBUG - 2013-09-03 22:11:20 --> Session Class Initialized
DEBUG - 2013-09-03 22:11:20 --> Helper loaded: string_helper
DEBUG - 2013-09-03 22:11:20 --> Session routines successfully run
DEBUG - 2013-09-03 22:11:20 --> Form Validation Class Initialized
DEBUG - 2013-09-03 22:11:20 --> Controller Class Initialized
DEBUG - 2013-09-03 22:11:20 --> Model Class Initialized
DEBUG - 2013-09-03 22:11:20 --> Model Class Initialized
DEBUG - 2013-09-03 22:11:20 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 22:11:20 --> after session initialization................
INFO  - 2013-09-03 22:11:20 --> inside the auto suggest page.................
INFO  - 2013-09-03 22:11:20 --> after the list array.................
INFO  - 2013-09-03 22:11:20 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%pn%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 22:11:20 --> after retrieving the data from db.................
DEBUG - 2013-09-03 22:11:20 --> Final output sent to browser
DEBUG - 2013-09-03 22:11:20 --> Total execution time: 0.0605
DEBUG - 2013-09-03 22:11:20 --> Config Class Initialized
DEBUG - 2013-09-03 22:11:20 --> Hooks Class Initialized
DEBUG - 2013-09-03 22:11:20 --> Utf8 Class Initialized
DEBUG - 2013-09-03 22:11:20 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 22:11:20 --> URI Class Initialized
DEBUG - 2013-09-03 22:11:20 --> Router Class Initialized
DEBUG - 2013-09-03 22:11:20 --> Output Class Initialized
DEBUG - 2013-09-03 22:11:20 --> Security Class Initialized
DEBUG - 2013-09-03 22:11:20 --> Input Class Initialized
DEBUG - 2013-09-03 22:11:20 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 22:11:20 --> Language Class Initialized
DEBUG - 2013-09-03 22:11:20 --> Loader Class Initialized
DEBUG - 2013-09-03 22:11:20 --> Helper loaded: form_helper
DEBUG - 2013-09-03 22:11:20 --> Helper loaded: url_helper
DEBUG - 2013-09-03 22:11:20 --> Helper loaded: html_helper
DEBUG - 2013-09-03 22:11:20 --> Database Driver Class Initialized
DEBUG - 2013-09-03 22:11:20 --> Session Class Initialized
DEBUG - 2013-09-03 22:11:20 --> Helper loaded: string_helper
DEBUG - 2013-09-03 22:11:20 --> Session routines successfully run
DEBUG - 2013-09-03 22:11:20 --> Form Validation Class Initialized
DEBUG - 2013-09-03 22:11:20 --> Controller Class Initialized
DEBUG - 2013-09-03 22:11:20 --> Model Class Initialized
DEBUG - 2013-09-03 22:11:20 --> Model Class Initialized
DEBUG - 2013-09-03 22:11:20 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 22:11:20 --> after session initialization................
INFO  - 2013-09-03 22:11:20 --> inside the auto suggest page.................
INFO  - 2013-09-03 22:11:20 --> after the list array.................
INFO  - 2013-09-03 22:11:20 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%p%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 22:11:20 --> after retrieving the data from db.................
INFO  - 2013-09-03 22:11:20 --> looping.................
INFO  - 2013-09-03 22:11:20 --> looping.................
DEBUG - 2013-09-03 22:11:20 --> Final output sent to browser
DEBUG - 2013-09-03 22:11:20 --> Total execution time: 0.0630
DEBUG - 2013-09-03 22:11:22 --> Config Class Initialized
DEBUG - 2013-09-03 22:11:22 --> Hooks Class Initialized
DEBUG - 2013-09-03 22:11:22 --> Utf8 Class Initialized
DEBUG - 2013-09-03 22:11:22 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 22:11:22 --> URI Class Initialized
DEBUG - 2013-09-03 22:11:22 --> Router Class Initialized
DEBUG - 2013-09-03 22:11:22 --> Output Class Initialized
DEBUG - 2013-09-03 22:11:22 --> Security Class Initialized
DEBUG - 2013-09-03 22:11:22 --> Input Class Initialized
DEBUG - 2013-09-03 22:11:22 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 22:11:22 --> Language Class Initialized
DEBUG - 2013-09-03 22:11:22 --> Loader Class Initialized
DEBUG - 2013-09-03 22:11:22 --> Helper loaded: form_helper
DEBUG - 2013-09-03 22:11:22 --> Helper loaded: url_helper
DEBUG - 2013-09-03 22:11:22 --> Helper loaded: html_helper
DEBUG - 2013-09-03 22:11:22 --> Database Driver Class Initialized
DEBUG - 2013-09-03 22:11:22 --> Session Class Initialized
DEBUG - 2013-09-03 22:11:22 --> Helper loaded: string_helper
DEBUG - 2013-09-03 22:11:22 --> Session routines successfully run
DEBUG - 2013-09-03 22:11:22 --> Form Validation Class Initialized
DEBUG - 2013-09-03 22:11:22 --> Controller Class Initialized
DEBUG - 2013-09-03 22:11:22 --> Model Class Initialized
DEBUG - 2013-09-03 22:11:22 --> Model Class Initialized
DEBUG - 2013-09-03 22:11:22 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 22:11:22 --> after session initialization................
INFO  - 2013-09-03 22:11:22 --> inside the auto suggest page.................
INFO  - 2013-09-03 22:11:22 --> after the list array.................
INFO  - 2013-09-03 22:11:22 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%p%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 22:11:22 --> after retrieving the data from db.................
INFO  - 2013-09-03 22:11:22 --> looping.................
INFO  - 2013-09-03 22:11:22 --> looping.................
DEBUG - 2013-09-03 22:11:22 --> Final output sent to browser
DEBUG - 2013-09-03 22:11:22 --> Total execution time: 0.0582
DEBUG - 2013-09-03 22:11:22 --> Config Class Initialized
DEBUG - 2013-09-03 22:11:22 --> Hooks Class Initialized
DEBUG - 2013-09-03 22:11:22 --> Utf8 Class Initialized
DEBUG - 2013-09-03 22:11:22 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 22:11:22 --> URI Class Initialized
DEBUG - 2013-09-03 22:11:22 --> Router Class Initialized
DEBUG - 2013-09-03 22:11:22 --> Output Class Initialized
DEBUG - 2013-09-03 22:11:22 --> Security Class Initialized
DEBUG - 2013-09-03 22:11:22 --> Input Class Initialized
DEBUG - 2013-09-03 22:11:22 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 22:11:22 --> Language Class Initialized
DEBUG - 2013-09-03 22:11:22 --> Loader Class Initialized
DEBUG - 2013-09-03 22:11:22 --> Helper loaded: form_helper
DEBUG - 2013-09-03 22:11:22 --> Helper loaded: url_helper
DEBUG - 2013-09-03 22:11:22 --> Helper loaded: html_helper
DEBUG - 2013-09-03 22:11:22 --> Database Driver Class Initialized
DEBUG - 2013-09-03 22:11:22 --> Session Class Initialized
DEBUG - 2013-09-03 22:11:22 --> Helper loaded: string_helper
DEBUG - 2013-09-03 22:11:22 --> Session routines successfully run
DEBUG - 2013-09-03 22:11:22 --> Form Validation Class Initialized
DEBUG - 2013-09-03 22:11:22 --> Controller Class Initialized
DEBUG - 2013-09-03 22:11:22 --> Model Class Initialized
DEBUG - 2013-09-03 22:11:22 --> Model Class Initialized
DEBUG - 2013-09-03 22:11:22 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 22:11:22 --> after session initialization................
INFO  - 2013-09-03 22:11:22 --> inside the auto suggest page.................
INFO  - 2013-09-03 22:11:22 --> after the list array.................
INFO  - 2013-09-03 22:11:22 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%pa%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 22:11:22 --> after retrieving the data from db.................
INFO  - 2013-09-03 22:11:22 --> looping.................
DEBUG - 2013-09-03 22:11:22 --> Final output sent to browser
DEBUG - 2013-09-03 22:11:22 --> Total execution time: 0.0662
DEBUG - 2013-09-03 22:11:26 --> Config Class Initialized
DEBUG - 2013-09-03 22:11:26 --> Hooks Class Initialized
DEBUG - 2013-09-03 22:11:26 --> Utf8 Class Initialized
DEBUG - 2013-09-03 22:11:26 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 22:11:26 --> URI Class Initialized
DEBUG - 2013-09-03 22:11:26 --> Router Class Initialized
DEBUG - 2013-09-03 22:11:26 --> Output Class Initialized
DEBUG - 2013-09-03 22:11:26 --> Security Class Initialized
DEBUG - 2013-09-03 22:11:26 --> Input Class Initialized
DEBUG - 2013-09-03 22:11:26 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 22:11:26 --> Language Class Initialized
DEBUG - 2013-09-03 22:11:26 --> Loader Class Initialized
DEBUG - 2013-09-03 22:11:26 --> Helper loaded: form_helper
DEBUG - 2013-09-03 22:11:26 --> Helper loaded: url_helper
DEBUG - 2013-09-03 22:11:26 --> Helper loaded: html_helper
DEBUG - 2013-09-03 22:11:26 --> Database Driver Class Initialized
DEBUG - 2013-09-03 22:11:26 --> Session Class Initialized
DEBUG - 2013-09-03 22:11:26 --> Helper loaded: string_helper
DEBUG - 2013-09-03 22:11:26 --> Session routines successfully run
DEBUG - 2013-09-03 22:11:26 --> Form Validation Class Initialized
DEBUG - 2013-09-03 22:11:26 --> Controller Class Initialized
DEBUG - 2013-09-03 22:11:26 --> Model Class Initialized
DEBUG - 2013-09-03 22:11:26 --> Model Class Initialized
DEBUG - 2013-09-03 22:11:26 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 22:11:26 --> after session initialization................
INFO  - 2013-09-03 22:11:26 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 22:11:26 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-09-03 22:11:26 --> 5==============================0
INFO  - 2013-09-03 22:11:26 --> SELECT dc.id_drugcomment as id, dc.comment, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-03 22:11:26 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
DEBUG - 2013-09-03 22:11:26 --> Final output sent to browser
DEBUG - 2013-09-03 22:11:26 --> Total execution time: 0.0700
DEBUG - 2013-09-03 22:12:03 --> Config Class Initialized
DEBUG - 2013-09-03 22:12:03 --> Hooks Class Initialized
DEBUG - 2013-09-03 22:12:03 --> Utf8 Class Initialized
DEBUG - 2013-09-03 22:12:03 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 22:12:03 --> URI Class Initialized
DEBUG - 2013-09-03 22:12:03 --> Router Class Initialized
DEBUG - 2013-09-03 22:12:03 --> Output Class Initialized
DEBUG - 2013-09-03 22:12:03 --> Security Class Initialized
DEBUG - 2013-09-03 22:12:03 --> Input Class Initialized
DEBUG - 2013-09-03 22:12:03 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 22:12:03 --> Language Class Initialized
DEBUG - 2013-09-03 22:12:03 --> Loader Class Initialized
DEBUG - 2013-09-03 22:12:03 --> Helper loaded: form_helper
DEBUG - 2013-09-03 22:12:03 --> Helper loaded: url_helper
DEBUG - 2013-09-03 22:12:03 --> Helper loaded: html_helper
DEBUG - 2013-09-03 22:12:03 --> Database Driver Class Initialized
DEBUG - 2013-09-03 22:12:03 --> Session Class Initialized
DEBUG - 2013-09-03 22:12:03 --> Helper loaded: string_helper
DEBUG - 2013-09-03 22:12:03 --> Session routines successfully run
DEBUG - 2013-09-03 22:12:03 --> Form Validation Class Initialized
DEBUG - 2013-09-03 22:12:03 --> Controller Class Initialized
DEBUG - 2013-09-03 22:12:03 --> Model Class Initialized
DEBUG - 2013-09-03 22:12:03 --> Model Class Initialized
DEBUG - 2013-09-03 22:12:03 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 22:12:03 --> after session initialization................
INFO  - 2013-09-03 22:12:03 --> inside rays login auth.............
DEBUG - 2013-09-03 22:12:03 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-09-03 22:12:03 --> XSS Filtering completed
DEBUG - 2013-09-03 22:12:03 --> XSS Filtering completed
INFO  - 2013-09-03 22:12:03 --> before getting the relation of member............6
INFO  - 2013-09-03 22:12:03 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-09-03 22:12:03 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 22:12:04 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-03 22:12:04 --> inside retrieving vacancy for member
INFO  - 2013-09-03 22:12:04 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-09-03 22:12:04 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-03 22:12:04 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-09-03 22:12:04 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '2'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 22:12:04 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-09-03 22:12:04 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-09-03 22:12:04 -->  column name inside view is 0 column Data is Array
INFO  - 2013-09-03 22:12:04 -->  column name inside view is 1 column Data is Array
INFO  - 2013-09-03 22:12:04 -->  column name inside view is 2 column Data is Array
INFO  - 2013-09-03 22:12:04 -->  column name inside view is 3 column Data is Array
INFO  - 2013-09-03 22:12:04 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-09-03 22:12:04 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-09-03 22:12:04 --> Final output sent to browser
DEBUG - 2013-09-03 22:12:04 --> Total execution time: 0.1661
DEBUG - 2013-09-03 22:12:04 --> Config Class Initialized
DEBUG - 2013-09-03 22:12:04 --> Hooks Class Initialized
DEBUG - 2013-09-03 22:12:04 --> Utf8 Class Initialized
DEBUG - 2013-09-03 22:12:04 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 22:12:04 --> URI Class Initialized
DEBUG - 2013-09-03 22:12:04 --> Router Class Initialized
DEBUG - 2013-09-03 22:12:04 --> Output Class Initialized
DEBUG - 2013-09-03 22:12:04 --> Security Class Initialized
DEBUG - 2013-09-03 22:12:04 --> Input Class Initialized
DEBUG - 2013-09-03 22:12:04 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 22:12:04 --> Language Class Initialized
DEBUG - 2013-09-03 22:12:04 --> Loader Class Initialized
DEBUG - 2013-09-03 22:12:04 --> Helper loaded: form_helper
DEBUG - 2013-09-03 22:12:04 --> Helper loaded: url_helper
DEBUG - 2013-09-03 22:12:04 --> Helper loaded: html_helper
DEBUG - 2013-09-03 22:12:04 --> Database Driver Class Initialized
DEBUG - 2013-09-03 22:12:04 --> Session Class Initialized
DEBUG - 2013-09-03 22:12:04 --> Helper loaded: string_helper
DEBUG - 2013-09-03 22:12:04 --> Session routines successfully run
DEBUG - 2013-09-03 22:12:04 --> Form Validation Class Initialized
DEBUG - 2013-09-03 22:12:04 --> Controller Class Initialized
DEBUG - 2013-09-03 22:12:04 --> Model Class Initialized
DEBUG - 2013-09-03 22:12:04 --> Model Class Initialized
DEBUG - 2013-09-03 22:12:04 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 22:12:04 --> after session initialization................
ERROR - 2013-09-03 22:12:04 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-09-03 22:12:07 --> Config Class Initialized
DEBUG - 2013-09-03 22:12:07 --> Hooks Class Initialized
DEBUG - 2013-09-03 22:12:07 --> Utf8 Class Initialized
DEBUG - 2013-09-03 22:12:07 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 22:12:07 --> URI Class Initialized
DEBUG - 2013-09-03 22:12:07 --> Router Class Initialized
DEBUG - 2013-09-03 22:12:07 --> Output Class Initialized
DEBUG - 2013-09-03 22:12:07 --> Security Class Initialized
DEBUG - 2013-09-03 22:12:07 --> Input Class Initialized
DEBUG - 2013-09-03 22:12:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 22:12:07 --> Language Class Initialized
DEBUG - 2013-09-03 22:12:07 --> Loader Class Initialized
DEBUG - 2013-09-03 22:12:07 --> Helper loaded: form_helper
DEBUG - 2013-09-03 22:12:07 --> Helper loaded: url_helper
DEBUG - 2013-09-03 22:12:07 --> Helper loaded: html_helper
DEBUG - 2013-09-03 22:12:07 --> Database Driver Class Initialized
DEBUG - 2013-09-03 22:12:07 --> Session Class Initialized
DEBUG - 2013-09-03 22:12:07 --> Helper loaded: string_helper
DEBUG - 2013-09-03 22:12:07 --> Session routines successfully run
DEBUG - 2013-09-03 22:12:07 --> Form Validation Class Initialized
DEBUG - 2013-09-03 22:12:07 --> Controller Class Initialized
DEBUG - 2013-09-03 22:12:07 --> Model Class Initialized
DEBUG - 2013-09-03 22:12:07 --> Model Class Initialized
DEBUG - 2013-09-03 22:12:07 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 22:12:07 --> after session initialization................
INFO  - 2013-09-03 22:12:07 --> inside the auto suggest page.................
INFO  - 2013-09-03 22:12:07 --> after the list array.................
INFO  - 2013-09-03 22:12:07 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%panado%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 22:12:07 --> after retrieving the data from db.................
INFO  - 2013-09-03 22:12:07 --> looping.................
DEBUG - 2013-09-03 22:12:07 --> Final output sent to browser
DEBUG - 2013-09-03 22:12:07 --> Total execution time: 0.0551
DEBUG - 2013-09-03 22:12:09 --> Config Class Initialized
DEBUG - 2013-09-03 22:12:09 --> Hooks Class Initialized
DEBUG - 2013-09-03 22:12:09 --> Utf8 Class Initialized
DEBUG - 2013-09-03 22:12:09 --> UTF-8 Support Enabled
DEBUG - 2013-09-03 22:12:09 --> URI Class Initialized
DEBUG - 2013-09-03 22:12:09 --> Router Class Initialized
DEBUG - 2013-09-03 22:12:09 --> Output Class Initialized
DEBUG - 2013-09-03 22:12:09 --> Security Class Initialized
DEBUG - 2013-09-03 22:12:09 --> Input Class Initialized
DEBUG - 2013-09-03 22:12:09 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-03 22:12:09 --> Language Class Initialized
DEBUG - 2013-09-03 22:12:09 --> Loader Class Initialized
DEBUG - 2013-09-03 22:12:09 --> Helper loaded: form_helper
DEBUG - 2013-09-03 22:12:09 --> Helper loaded: url_helper
DEBUG - 2013-09-03 22:12:09 --> Helper loaded: html_helper
DEBUG - 2013-09-03 22:12:09 --> Database Driver Class Initialized
DEBUG - 2013-09-03 22:12:09 --> Session Class Initialized
DEBUG - 2013-09-03 22:12:09 --> Helper loaded: string_helper
DEBUG - 2013-09-03 22:12:09 --> Session routines successfully run
DEBUG - 2013-09-03 22:12:09 --> Form Validation Class Initialized
DEBUG - 2013-09-03 22:12:09 --> Controller Class Initialized
DEBUG - 2013-09-03 22:12:09 --> Model Class Initialized
DEBUG - 2013-09-03 22:12:09 --> Model Class Initialized
DEBUG - 2013-09-03 22:12:09 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-03 22:12:09 --> after session initialization................
INFO  - 2013-09-03 22:12:09 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-03 22:12:09 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-09-03 22:12:09 --> 5==============================0
INFO  - 2013-09-03 22:12:09 --> SELECT dc.id_drugcomment as id, dc.comment, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-03 22:12:09 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
DEBUG - 2013-09-03 22:12:09 --> Final output sent to browser
DEBUG - 2013-09-03 22:12:09 --> Total execution time: 0.0682
