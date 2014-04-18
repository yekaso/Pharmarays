<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2013-08-18 01:12:35 --> Config Class Initialized
DEBUG - 2013-08-18 01:12:35 --> Hooks Class Initialized
DEBUG - 2013-08-18 01:12:35 --> Utf8 Class Initialized
DEBUG - 2013-08-18 01:12:35 --> UTF-8 Support Enabled
DEBUG - 2013-08-18 01:12:35 --> URI Class Initialized
DEBUG - 2013-08-18 01:12:35 --> Router Class Initialized
DEBUG - 2013-08-18 01:12:35 --> Output Class Initialized
DEBUG - 2013-08-18 01:12:35 --> Security Class Initialized
DEBUG - 2013-08-18 01:12:35 --> Input Class Initialized
DEBUG - 2013-08-18 01:12:35 --> Global POST and COOKIE data sanitized
DEBUG - 2013-08-18 01:12:35 --> Language Class Initialized
DEBUG - 2013-08-18 01:12:35 --> Loader Class Initialized
DEBUG - 2013-08-18 01:12:35 --> Helper loaded: form_helper
DEBUG - 2013-08-18 01:12:35 --> Helper loaded: url_helper
DEBUG - 2013-08-18 01:12:35 --> Helper loaded: html_helper
DEBUG - 2013-08-18 01:12:35 --> Database Driver Class Initialized
DEBUG - 2013-08-18 01:12:35 --> Session Class Initialized
DEBUG - 2013-08-18 01:12:35 --> Helper loaded: string_helper
DEBUG - 2013-08-18 01:12:35 --> A session cookie was not found.
DEBUG - 2013-08-18 01:12:35 --> Session routines successfully run
DEBUG - 2013-08-18 01:12:35 --> Form Validation Class Initialized
DEBUG - 2013-08-18 01:12:35 --> Controller Class Initialized
DEBUG - 2013-08-18 01:12:35 --> Model Class Initialized
DEBUG - 2013-08-18 01:12:35 --> Model Class Initialized
DEBUG - 2013-08-18 01:12:35 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-08-18 01:12:35 --> after session initialization................
DEBUG - 2013-08-18 01:12:35 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-08-18 01:12:35 --> XSS Filtering completed
DEBUG - 2013-08-18 01:12:35 --> XSS Filtering completed
INFO  - 2013-08-18 01:12:35 --> before getting the relation of member............6
INFO  - 2013-08-18 01:12:35 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-08-18 01:12:35 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-08-18 01:12:35 --> SELECT `dc`.`comment`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-08-18 01:12:35 --> inside retrieving vacancy for member
INFO  - 2013-08-18 01:12:35 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-08-18 01:12:35 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-08-18 01:12:35 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-08-18 01:12:35 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-08-18 01:12:35 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 0 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 1 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 2 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 3 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 0 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 1 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 2 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 3 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 4 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 5 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 6 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 7 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 8 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 9 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 10 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 11 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 12 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 13 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 14 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 15 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 16 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 17 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 18 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 19 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 20 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 21 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 22 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 23 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 24 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 25 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 26 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 27 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 28 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 29 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 30 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 31 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 32 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 33 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 34 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 35 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 36 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 37 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 38 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 39 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 40 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 41 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 42 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 43 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 44 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 45 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 46 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 47 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 48 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 49 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 50 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 51 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 52 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 53 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 0 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 1 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 2 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 3 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 4 column Data is Array
INFO  - 2013-08-18 01:12:35 -->  column name inside view is 5 column Data is Array
DEBUG - 2013-08-18 01:12:35 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-08-18 01:12:35 --> Final output sent to browser
DEBUG - 2013-08-18 01:12:35 --> Total execution time: 0.1680
DEBUG - 2013-08-18 01:12:36 --> Config Class Initialized
DEBUG - 2013-08-18 01:12:36 --> Hooks Class Initialized
DEBUG - 2013-08-18 01:12:36 --> Utf8 Class Initialized
DEBUG - 2013-08-18 01:12:36 --> UTF-8 Support Enabled
DEBUG - 2013-08-18 01:12:36 --> URI Class Initialized
DEBUG - 2013-08-18 01:12:36 --> Router Class Initialized
ERROR - 2013-08-18 01:12:36 --> 404 Page Not Found --> images
DEBUG - 2013-08-18 01:12:36 --> Config Class Initialized
DEBUG - 2013-08-18 01:12:36 --> Hooks Class Initialized
DEBUG - 2013-08-18 01:12:36 --> Utf8 Class Initialized
DEBUG - 2013-08-18 01:12:36 --> UTF-8 Support Enabled
DEBUG - 2013-08-18 01:12:36 --> URI Class Initialized
DEBUG - 2013-08-18 01:12:36 --> Router Class Initialized
ERROR - 2013-08-18 01:12:36 --> 404 Page Not Found --> images
DEBUG - 2013-08-18 01:12:42 --> Config Class Initialized
DEBUG - 2013-08-18 01:12:42 --> Hooks Class Initialized
DEBUG - 2013-08-18 01:12:42 --> Utf8 Class Initialized
DEBUG - 2013-08-18 01:12:42 --> UTF-8 Support Enabled
DEBUG - 2013-08-18 01:12:42 --> URI Class Initialized
DEBUG - 2013-08-18 01:12:42 --> Router Class Initialized
DEBUG - 2013-08-18 01:12:42 --> Output Class Initialized
DEBUG - 2013-08-18 01:12:42 --> Security Class Initialized
DEBUG - 2013-08-18 01:12:42 --> Input Class Initialized
DEBUG - 2013-08-18 01:12:42 --> Global POST and COOKIE data sanitized
DEBUG - 2013-08-18 01:12:42 --> Language Class Initialized
DEBUG - 2013-08-18 01:12:42 --> Loader Class Initialized
DEBUG - 2013-08-18 01:12:42 --> Helper loaded: form_helper
DEBUG - 2013-08-18 01:12:42 --> Helper loaded: url_helper
DEBUG - 2013-08-18 01:12:42 --> Helper loaded: html_helper
DEBUG - 2013-08-18 01:12:42 --> Database Driver Class Initialized
DEBUG - 2013-08-18 01:12:42 --> Session Class Initialized
DEBUG - 2013-08-18 01:12:42 --> Helper loaded: string_helper
DEBUG - 2013-08-18 01:12:42 --> Session routines successfully run
DEBUG - 2013-08-18 01:12:42 --> Form Validation Class Initialized
DEBUG - 2013-08-18 01:12:42 --> Controller Class Initialized
DEBUG - 2013-08-18 01:12:42 --> Model Class Initialized
DEBUG - 2013-08-18 01:12:42 --> Model Class Initialized
DEBUG - 2013-08-18 01:12:42 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-08-18 01:12:42 --> after session initialization................
DEBUG - 2013-08-18 01:12:42 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-08-18 01:12:42 --> XSS Filtering completed
DEBUG - 2013-08-18 01:12:42 --> XSS Filtering completed
INFO  - 2013-08-18 01:12:42 --> before getting the relation of member............6
INFO  - 2013-08-18 01:12:42 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-08-18 01:12:42 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-08-18 01:12:42 --> SELECT `dc`.`comment`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-08-18 01:12:42 --> inside retrieving vacancy for member
INFO  - 2013-08-18 01:12:42 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-08-18 01:12:42 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-08-18 01:12:42 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-08-18 01:12:42 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-08-18 01:12:42 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 0 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 1 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 2 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 3 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 0 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 1 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 2 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 3 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 4 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 5 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 6 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 7 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 8 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 9 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 10 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 11 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 12 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 13 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 14 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 15 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 16 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 17 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 18 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 19 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 20 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 21 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 22 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 23 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 24 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 25 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 26 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 27 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 28 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 29 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 30 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 31 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 32 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 33 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 34 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 35 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 36 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 37 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 38 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 39 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 40 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 41 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 42 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 43 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 44 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 45 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 46 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 47 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 48 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 49 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 50 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 51 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 52 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 53 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 0 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 1 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 2 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 3 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 4 column Data is Array
INFO  - 2013-08-18 01:12:42 -->  column name inside view is 5 column Data is Array
DEBUG - 2013-08-18 01:12:42 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-08-18 01:12:42 --> Final output sent to browser
DEBUG - 2013-08-18 01:12:42 --> Total execution time: 0.1205
DEBUG - 2013-08-18 01:12:42 --> Config Class Initialized
DEBUG - 2013-08-18 01:12:42 --> Hooks Class Initialized
DEBUG - 2013-08-18 01:12:42 --> Utf8 Class Initialized
DEBUG - 2013-08-18 01:12:42 --> UTF-8 Support Enabled
DEBUG - 2013-08-18 01:12:42 --> URI Class Initialized
DEBUG - 2013-08-18 01:12:42 --> Router Class Initialized
ERROR - 2013-08-18 01:12:42 --> 404 Page Not Found --> images
DEBUG - 2013-08-18 01:12:57 --> Config Class Initialized
DEBUG - 2013-08-18 01:12:57 --> Hooks Class Initialized
DEBUG - 2013-08-18 01:12:57 --> Utf8 Class Initialized
DEBUG - 2013-08-18 01:12:57 --> UTF-8 Support Enabled
DEBUG - 2013-08-18 01:12:57 --> URI Class Initialized
DEBUG - 2013-08-18 01:12:57 --> Router Class Initialized
DEBUG - 2013-08-18 01:12:57 --> Output Class Initialized
DEBUG - 2013-08-18 01:12:57 --> Security Class Initialized
DEBUG - 2013-08-18 01:12:57 --> Input Class Initialized
DEBUG - 2013-08-18 01:12:57 --> Global POST and COOKIE data sanitized
DEBUG - 2013-08-18 01:12:57 --> Language Class Initialized
DEBUG - 2013-08-18 01:12:57 --> Loader Class Initialized
DEBUG - 2013-08-18 01:12:57 --> Helper loaded: form_helper
DEBUG - 2013-08-18 01:12:57 --> Helper loaded: url_helper
DEBUG - 2013-08-18 01:12:57 --> Helper loaded: html_helper
DEBUG - 2013-08-18 01:12:57 --> Database Driver Class Initialized
DEBUG - 2013-08-18 01:12:57 --> Session Class Initialized
DEBUG - 2013-08-18 01:12:57 --> Helper loaded: string_helper
DEBUG - 2013-08-18 01:12:57 --> Session routines successfully run
DEBUG - 2013-08-18 01:12:57 --> Form Validation Class Initialized
DEBUG - 2013-08-18 01:12:57 --> Controller Class Initialized
DEBUG - 2013-08-18 01:12:57 --> Model Class Initialized
DEBUG - 2013-08-18 01:12:57 --> Model Class Initialized
DEBUG - 2013-08-18 01:12:57 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-08-18 01:12:57 --> after session initialization................
INFO  - 2013-08-18 01:12:57 --> inside the create comment page.................
INFO  - 2013-08-18 01:12:57 --> before inserting into comment.................
INFO  - 2013-08-18 01:12:57 --> after inserting into comment.................61
INFO  - 2013-08-18 01:12:57 --> the status of the transaction is...........1 the insert id is ......61
INFO  - 2013-08-18 01:12:57 --> after creating comments.................<div class='row-fluid'><div class='span12'><div class='editor-label'><img src='http://localhost/Pharmarays/pharma-public/images/profilem1.png' /><div><div id='comment_username'>Pharmacist Elvis onuorah</div><br/><div id='user_comment'>it is ok</div></div></div></div></div>
INFO  - 2013-08-18 01:12:57 --> inside retrieving comments member type id and drug id is 1
INFO  - 2013-08-18 01:12:57 --> SELECT count(dc.comment) as comment_count, `mt`.`name` as membertypename
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype` and mt.id_membertype = 3
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-08-18 01:12:57 --> the comment count by Male Doctor is.................48
DEBUG - 2013-08-18 01:12:57 --> Final output sent to browser
DEBUG - 2013-08-18 01:12:57 --> Total execution time: 0.0959
