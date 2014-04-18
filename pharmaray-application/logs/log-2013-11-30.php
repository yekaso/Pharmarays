<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2013-11-30 05:38:45 --> Config Class Initialized
DEBUG - 2013-11-30 05:38:45 --> Hooks Class Initialized
DEBUG - 2013-11-30 05:38:45 --> Utf8 Class Initialized
DEBUG - 2013-11-30 05:38:45 --> UTF-8 Support Enabled
DEBUG - 2013-11-30 05:38:45 --> URI Class Initialized
DEBUG - 2013-11-30 05:38:45 --> Router Class Initialized
DEBUG - 2013-11-30 05:38:45 --> No URI present. Default controller set.
DEBUG - 2013-11-30 05:38:45 --> Output Class Initialized
DEBUG - 2013-11-30 05:38:45 --> Security Class Initialized
DEBUG - 2013-11-30 05:38:45 --> Input Class Initialized
DEBUG - 2013-11-30 05:38:45 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-30 05:38:45 --> Language Class Initialized
DEBUG - 2013-11-30 05:38:46 --> Loader Class Initialized
DEBUG - 2013-11-30 05:38:46 --> Helper loaded: form_helper
DEBUG - 2013-11-30 05:38:46 --> Helper loaded: url_helper
DEBUG - 2013-11-30 05:38:46 --> Helper loaded: html_helper
DEBUG - 2013-11-30 05:38:46 --> Database Driver Class Initialized
DEBUG - 2013-11-30 05:38:47 --> Session Class Initialized
DEBUG - 2013-11-30 05:38:47 --> Helper loaded: string_helper
DEBUG - 2013-11-30 05:38:47 --> A session cookie was not found.
DEBUG - 2013-11-30 05:38:47 --> Session routines successfully run
DEBUG - 2013-11-30 05:38:47 --> Form Validation Class Initialized
DEBUG - 2013-11-30 05:38:47 --> Controller Class Initialized
INFO  - 2013-11-30 05:38:47 --> the form message==>
INFO  - 2013-11-30 05:38:47 --> The session id is ========>05c2edf38cffc6791978310dfb340369 and the member id is =======>
INFO  - 2013-11-30 05:38:47 --> after the retrieving session list.................//////////
DEBUG - 2013-11-30 05:38:47 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-11-30 05:38:48 --> Final output sent to browser
DEBUG - 2013-11-30 05:38:48 --> Total execution time: 2.3121
DEBUG - 2013-11-30 05:39:10 --> Config Class Initialized
DEBUG - 2013-11-30 05:39:10 --> Hooks Class Initialized
DEBUG - 2013-11-30 05:39:10 --> Utf8 Class Initialized
DEBUG - 2013-11-30 05:39:10 --> UTF-8 Support Enabled
DEBUG - 2013-11-30 05:39:10 --> URI Class Initialized
DEBUG - 2013-11-30 05:39:10 --> Router Class Initialized
DEBUG - 2013-11-30 05:39:10 --> Output Class Initialized
DEBUG - 2013-11-30 05:39:10 --> Security Class Initialized
DEBUG - 2013-11-30 05:39:10 --> Input Class Initialized
DEBUG - 2013-11-30 05:39:10 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-30 05:39:10 --> Language Class Initialized
DEBUG - 2013-11-30 05:39:10 --> Loader Class Initialized
DEBUG - 2013-11-30 05:39:10 --> Helper loaded: form_helper
DEBUG - 2013-11-30 05:39:10 --> Helper loaded: url_helper
DEBUG - 2013-11-30 05:39:10 --> Helper loaded: html_helper
DEBUG - 2013-11-30 05:39:10 --> Database Driver Class Initialized
DEBUG - 2013-11-30 05:39:11 --> Session Class Initialized
DEBUG - 2013-11-30 05:39:11 --> Helper loaded: string_helper
DEBUG - 2013-11-30 05:39:11 --> Session routines successfully run
DEBUG - 2013-11-30 05:39:11 --> Form Validation Class Initialized
DEBUG - 2013-11-30 05:39:11 --> Controller Class Initialized
DEBUG - 2013-11-30 05:39:11 --> Model Class Initialized
DEBUG - 2013-11-30 05:39:11 --> Model Class Initialized
DEBUG - 2013-11-30 05:39:11 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-30 05:39:11 --> after session initialization................
INFO  - 2013-11-30 05:39:11 --> inside rays login auth.............
DEBUG - 2013-11-30 05:39:11 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-11-30 05:39:11 --> XSS Filtering completed
DEBUG - 2013-11-30 05:39:11 --> XSS Filtering completed
INFO  - 2013-11-30 05:39:11 --> before getting the relation of member............6
INFO  - 2013-11-30 05:39:11 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-11-30 05:39:11 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-30 05:39:11 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-11-30 05:39:11 --> inside retrieving vacancy for member
INFO  - 2013-11-30 05:39:12 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-11-30 05:39:12 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-30 05:39:12 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-11-30 05:39:12 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-11-30 05:39:12 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-30 05:39:13 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-30 05:39:13 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-11-30 05:39:13 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-11-30 05:39:13 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-11-30 05:39:13 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
DEBUG - 2013-11-30 05:39:13 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-11-30 05:39:13 --> Final output sent to browser
DEBUG - 2013-11-30 05:39:13 --> Total execution time: 3.7772
DEBUG - 2013-11-30 05:39:13 --> Config Class Initialized
DEBUG - 2013-11-30 05:39:13 --> Hooks Class Initialized
DEBUG - 2013-11-30 05:39:13 --> Utf8 Class Initialized
DEBUG - 2013-11-30 05:39:13 --> UTF-8 Support Enabled
DEBUG - 2013-11-30 05:39:13 --> URI Class Initialized
DEBUG - 2013-11-30 05:39:13 --> Router Class Initialized
DEBUG - 2013-11-30 05:39:13 --> Output Class Initialized
DEBUG - 2013-11-30 05:39:13 --> Security Class Initialized
DEBUG - 2013-11-30 05:39:13 --> Input Class Initialized
DEBUG - 2013-11-30 05:39:13 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-30 05:39:13 --> Language Class Initialized
DEBUG - 2013-11-30 05:39:13 --> Loader Class Initialized
DEBUG - 2013-11-30 05:39:14 --> Helper loaded: form_helper
DEBUG - 2013-11-30 05:39:14 --> Helper loaded: url_helper
DEBUG - 2013-11-30 05:39:14 --> Helper loaded: html_helper
DEBUG - 2013-11-30 05:39:14 --> Database Driver Class Initialized
DEBUG - 2013-11-30 05:39:14 --> Session Class Initialized
DEBUG - 2013-11-30 05:39:14 --> Helper loaded: string_helper
DEBUG - 2013-11-30 05:39:14 --> Session routines successfully run
DEBUG - 2013-11-30 05:39:14 --> Form Validation Class Initialized
DEBUG - 2013-11-30 05:39:14 --> Controller Class Initialized
DEBUG - 2013-11-30 05:39:14 --> Model Class Initialized
DEBUG - 2013-11-30 05:39:14 --> Model Class Initialized
DEBUG - 2013-11-30 05:39:14 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-30 05:39:14 --> after session initialization................
ERROR - 2013-11-30 05:39:14 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-30 05:39:14 --> Config Class Initialized
DEBUG - 2013-11-30 05:39:14 --> Hooks Class Initialized
DEBUG - 2013-11-30 05:39:14 --> Utf8 Class Initialized
DEBUG - 2013-11-30 05:39:14 --> UTF-8 Support Enabled
DEBUG - 2013-11-30 05:39:14 --> URI Class Initialized
DEBUG - 2013-11-30 05:39:14 --> Router Class Initialized
DEBUG - 2013-11-30 05:39:14 --> Output Class Initialized
DEBUG - 2013-11-30 05:39:14 --> Security Class Initialized
DEBUG - 2013-11-30 05:39:14 --> Input Class Initialized
DEBUG - 2013-11-30 05:39:14 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-30 05:39:14 --> Language Class Initialized
DEBUG - 2013-11-30 05:39:14 --> Loader Class Initialized
DEBUG - 2013-11-30 05:39:14 --> Helper loaded: form_helper
DEBUG - 2013-11-30 05:39:14 --> Helper loaded: url_helper
DEBUG - 2013-11-30 05:39:14 --> Helper loaded: html_helper
DEBUG - 2013-11-30 05:39:14 --> Database Driver Class Initialized
DEBUG - 2013-11-30 05:39:14 --> Session Class Initialized
DEBUG - 2013-11-30 05:39:14 --> Helper loaded: string_helper
DEBUG - 2013-11-30 05:39:14 --> Session routines successfully run
DEBUG - 2013-11-30 05:39:14 --> Form Validation Class Initialized
DEBUG - 2013-11-30 05:39:14 --> Controller Class Initialized
DEBUG - 2013-11-30 05:39:14 --> Model Class Initialized
DEBUG - 2013-11-30 05:39:14 --> Model Class Initialized
DEBUG - 2013-11-30 05:39:14 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-30 05:39:14 --> after session initialization................
ERROR - 2013-11-30 05:39:14 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-30 05:39:14 --> Config Class Initialized
DEBUG - 2013-11-30 05:39:14 --> Hooks Class Initialized
DEBUG - 2013-11-30 05:39:14 --> Utf8 Class Initialized
DEBUG - 2013-11-30 05:39:14 --> UTF-8 Support Enabled
DEBUG - 2013-11-30 05:39:14 --> URI Class Initialized
DEBUG - 2013-11-30 05:39:14 --> Router Class Initialized
ERROR - 2013-11-30 05:39:14 --> 404 Page Not Found --> css
DEBUG - 2013-11-30 05:39:32 --> Config Class Initialized
DEBUG - 2013-11-30 05:39:32 --> Hooks Class Initialized
DEBUG - 2013-11-30 05:39:32 --> Utf8 Class Initialized
DEBUG - 2013-11-30 05:39:32 --> UTF-8 Support Enabled
DEBUG - 2013-11-30 05:39:32 --> URI Class Initialized
DEBUG - 2013-11-30 05:39:32 --> Router Class Initialized
DEBUG - 2013-11-30 05:39:32 --> Output Class Initialized
DEBUG - 2013-11-30 05:39:32 --> Security Class Initialized
DEBUG - 2013-11-30 05:39:32 --> Input Class Initialized
DEBUG - 2013-11-30 05:39:32 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-30 05:39:32 --> Language Class Initialized
DEBUG - 2013-11-30 05:39:32 --> Loader Class Initialized
DEBUG - 2013-11-30 05:39:32 --> Helper loaded: form_helper
DEBUG - 2013-11-30 05:39:32 --> Helper loaded: url_helper
DEBUG - 2013-11-30 05:39:32 --> Helper loaded: html_helper
DEBUG - 2013-11-30 05:39:32 --> Database Driver Class Initialized
DEBUG - 2013-11-30 05:39:32 --> Session Class Initialized
DEBUG - 2013-11-30 05:39:32 --> Helper loaded: string_helper
DEBUG - 2013-11-30 05:39:32 --> Session routines successfully run
DEBUG - 2013-11-30 05:39:32 --> Form Validation Class Initialized
DEBUG - 2013-11-30 05:39:32 --> Controller Class Initialized
DEBUG - 2013-11-30 05:39:32 --> Model Class Initialized
DEBUG - 2013-11-30 05:39:32 --> Model Class Initialized
DEBUG - 2013-11-30 05:39:32 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-30 05:39:32 --> after session initialization................
INFO  - 2013-11-30 05:39:32 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 1 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-11-30 05:39:32 --> Final output sent to browser
DEBUG - 2013-11-30 05:39:32 --> Total execution time: 0.2000
