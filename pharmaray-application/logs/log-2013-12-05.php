<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2013-12-05 13:52:29 --> Config Class Initialized
DEBUG - 2013-12-05 13:52:29 --> Hooks Class Initialized
DEBUG - 2013-12-05 13:52:29 --> Utf8 Class Initialized
DEBUG - 2013-12-05 13:52:29 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 13:52:29 --> URI Class Initialized
DEBUG - 2013-12-05 13:52:29 --> Router Class Initialized
DEBUG - 2013-12-05 13:52:29 --> No URI present. Default controller set.
DEBUG - 2013-12-05 13:52:29 --> Output Class Initialized
DEBUG - 2013-12-05 13:52:29 --> Security Class Initialized
DEBUG - 2013-12-05 13:52:29 --> Input Class Initialized
DEBUG - 2013-12-05 13:52:29 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 13:52:29 --> Language Class Initialized
DEBUG - 2013-12-05 13:52:29 --> Loader Class Initialized
DEBUG - 2013-12-05 13:52:29 --> Helper loaded: form_helper
DEBUG - 2013-12-05 13:52:29 --> Helper loaded: url_helper
DEBUG - 2013-12-05 13:52:29 --> Helper loaded: html_helper
DEBUG - 2013-12-05 13:52:29 --> Database Driver Class Initialized
DEBUG - 2013-12-05 13:52:30 --> Session Class Initialized
DEBUG - 2013-12-05 13:52:30 --> Helper loaded: string_helper
DEBUG - 2013-12-05 13:52:30 --> A session cookie was not found.
DEBUG - 2013-12-05 13:52:30 --> Session routines successfully run
DEBUG - 2013-12-05 13:52:30 --> Form Validation Class Initialized
DEBUG - 2013-12-05 13:52:30 --> Controller Class Initialized
INFO  - 2013-12-05 13:52:30 --> the form message==>
INFO  - 2013-12-05 13:52:30 --> The session id is ========>d79e5fbdd64c0f08e906b08821f7fa01 and the member id is =======>
INFO  - 2013-12-05 13:52:30 --> after the retrieving session list.................//////////
DEBUG - 2013-12-05 13:52:30 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-12-05 13:52:30 --> Final output sent to browser
DEBUG - 2013-12-05 13:52:30 --> Total execution time: 1.3041
DEBUG - 2013-12-05 13:52:52 --> Config Class Initialized
DEBUG - 2013-12-05 13:52:52 --> Hooks Class Initialized
DEBUG - 2013-12-05 13:52:52 --> Utf8 Class Initialized
DEBUG - 2013-12-05 13:52:52 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 13:52:52 --> URI Class Initialized
DEBUG - 2013-12-05 13:52:52 --> Router Class Initialized
DEBUG - 2013-12-05 13:52:52 --> Output Class Initialized
DEBUG - 2013-12-05 13:52:52 --> Security Class Initialized
DEBUG - 2013-12-05 13:52:52 --> Input Class Initialized
DEBUG - 2013-12-05 13:52:52 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 13:52:52 --> Language Class Initialized
DEBUG - 2013-12-05 13:52:52 --> Loader Class Initialized
DEBUG - 2013-12-05 13:52:52 --> Helper loaded: form_helper
DEBUG - 2013-12-05 13:52:52 --> Helper loaded: url_helper
DEBUG - 2013-12-05 13:52:52 --> Helper loaded: html_helper
DEBUG - 2013-12-05 13:52:52 --> Database Driver Class Initialized
DEBUG - 2013-12-05 13:52:53 --> Session Class Initialized
DEBUG - 2013-12-05 13:52:53 --> Helper loaded: string_helper
DEBUG - 2013-12-05 13:52:53 --> Session routines successfully run
DEBUG - 2013-12-05 13:52:53 --> Form Validation Class Initialized
DEBUG - 2013-12-05 13:52:53 --> Controller Class Initialized
DEBUG - 2013-12-05 13:52:53 --> Model Class Initialized
DEBUG - 2013-12-05 13:52:53 --> Model Class Initialized
DEBUG - 2013-12-05 13:52:53 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-05 13:52:53 --> after session initialization................
INFO  - 2013-12-05 13:52:53 --> inside rays login auth.............
DEBUG - 2013-12-05 13:52:53 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-12-05 13:52:53 --> XSS Filtering completed
DEBUG - 2013-12-05 13:52:53 --> XSS Filtering completed
INFO  - 2013-12-05 13:52:53 --> before getting the relation of member............6
INFO  - 2013-12-05 13:52:53 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-12-05 13:52:53 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-05 13:52:53 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-05 13:52:53 --> inside retrieving vacancy for member
INFO  - 2013-12-05 13:52:53 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-12-05 13:52:53 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-05 13:52:53 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-12-05 13:52:53 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-05 13:52:53 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-05 13:52:54 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-05 13:52:54 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-05 13:52:54 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-12-05 13:52:54 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-12-05 13:52:54 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
DEBUG - 2013-12-05 13:52:54 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-12-05 13:52:54 --> Final output sent to browser
DEBUG - 2013-12-05 13:52:54 --> Total execution time: 1.7311
DEBUG - 2013-12-05 13:52:54 --> Config Class Initialized
DEBUG - 2013-12-05 13:52:54 --> Hooks Class Initialized
DEBUG - 2013-12-05 13:52:54 --> Utf8 Class Initialized
DEBUG - 2013-12-05 13:52:54 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 13:52:54 --> URI Class Initialized
DEBUG - 2013-12-05 13:52:54 --> Router Class Initialized
ERROR - 2013-12-05 13:52:54 --> 404 Page Not Found --> sys_admin/src
DEBUG - 2013-12-05 13:52:54 --> Config Class Initialized
DEBUG - 2013-12-05 13:52:54 --> Hooks Class Initialized
DEBUG - 2013-12-05 13:52:54 --> Utf8 Class Initialized
DEBUG - 2013-12-05 13:52:54 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 13:52:54 --> URI Class Initialized
DEBUG - 2013-12-05 13:52:54 --> Router Class Initialized
ERROR - 2013-12-05 13:52:54 --> 404 Page Not Found --> css
DEBUG - 2013-12-05 13:57:59 --> Config Class Initialized
DEBUG - 2013-12-05 13:57:59 --> Hooks Class Initialized
DEBUG - 2013-12-05 13:57:59 --> Utf8 Class Initialized
DEBUG - 2013-12-05 13:57:59 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 13:57:59 --> URI Class Initialized
DEBUG - 2013-12-05 13:57:59 --> Router Class Initialized
DEBUG - 2013-12-05 13:57:59 --> Output Class Initialized
DEBUG - 2013-12-05 13:57:59 --> Security Class Initialized
DEBUG - 2013-12-05 13:57:59 --> Input Class Initialized
DEBUG - 2013-12-05 13:57:59 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 13:57:59 --> Language Class Initialized
DEBUG - 2013-12-05 13:57:59 --> Loader Class Initialized
DEBUG - 2013-12-05 13:57:59 --> Helper loaded: form_helper
DEBUG - 2013-12-05 13:57:59 --> Helper loaded: url_helper
DEBUG - 2013-12-05 13:57:59 --> Helper loaded: html_helper
DEBUG - 2013-12-05 13:57:59 --> Database Driver Class Initialized
DEBUG - 2013-12-05 13:58:00 --> Session Class Initialized
DEBUG - 2013-12-05 13:58:00 --> Helper loaded: string_helper
DEBUG - 2013-12-05 13:58:00 --> Session routines successfully run
DEBUG - 2013-12-05 13:58:00 --> Form Validation Class Initialized
DEBUG - 2013-12-05 13:58:00 --> Controller Class Initialized
DEBUG - 2013-12-05 13:58:00 --> Model Class Initialized
DEBUG - 2013-12-05 13:58:00 --> Model Class Initialized
DEBUG - 2013-12-05 13:58:00 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-05 13:58:00 --> after session initialization................
INFO  - 2013-12-05 13:58:00 --> inside rays login auth.............
DEBUG - 2013-12-05 13:58:00 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-12-05 13:58:00 --> XSS Filtering completed
DEBUG - 2013-12-05 13:58:00 --> XSS Filtering completed
INFO  - 2013-12-05 13:58:00 --> before getting the relation of member............6
INFO  - 2013-12-05 13:58:00 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-12-05 13:58:00 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-05 13:58:00 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-05 13:58:00 --> inside retrieving vacancy for member
INFO  - 2013-12-05 13:58:00 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-12-05 13:58:00 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-05 13:58:00 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-12-05 13:58:00 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-05 13:58:00 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-05 13:58:00 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-05 13:58:00 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-05 13:58:00 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-12-05 13:58:00 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-12-05 13:58:00 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
DEBUG - 2013-12-05 13:58:00 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-12-05 13:58:00 --> Final output sent to browser
DEBUG - 2013-12-05 13:58:00 --> Total execution time: 1.0871
DEBUG - 2013-12-05 13:58:00 --> Config Class Initialized
DEBUG - 2013-12-05 13:58:00 --> Hooks Class Initialized
DEBUG - 2013-12-05 13:58:00 --> Utf8 Class Initialized
DEBUG - 2013-12-05 13:58:00 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 13:58:00 --> URI Class Initialized
DEBUG - 2013-12-05 13:58:00 --> Router Class Initialized
ERROR - 2013-12-05 13:58:00 --> 404 Page Not Found --> sys_admin/src
DEBUG - 2013-12-05 13:58:00 --> Config Class Initialized
DEBUG - 2013-12-05 13:58:00 --> Hooks Class Initialized
DEBUG - 2013-12-05 13:58:00 --> Utf8 Class Initialized
DEBUG - 2013-12-05 13:58:00 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 13:58:00 --> URI Class Initialized
DEBUG - 2013-12-05 13:58:00 --> Router Class Initialized
ERROR - 2013-12-05 13:58:00 --> 404 Page Not Found --> css
DEBUG - 2013-12-05 16:32:36 --> Config Class Initialized
DEBUG - 2013-12-05 16:32:36 --> Hooks Class Initialized
DEBUG - 2013-12-05 16:32:36 --> Utf8 Class Initialized
DEBUG - 2013-12-05 16:32:36 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 16:32:36 --> URI Class Initialized
DEBUG - 2013-12-05 16:32:36 --> Router Class Initialized
DEBUG - 2013-12-05 16:32:36 --> Output Class Initialized
DEBUG - 2013-12-05 16:32:36 --> Security Class Initialized
DEBUG - 2013-12-05 16:32:36 --> Input Class Initialized
DEBUG - 2013-12-05 16:32:36 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 16:32:36 --> Language Class Initialized
DEBUG - 2013-12-05 16:32:36 --> Loader Class Initialized
DEBUG - 2013-12-05 16:32:36 --> Helper loaded: form_helper
DEBUG - 2013-12-05 16:32:36 --> Helper loaded: url_helper
DEBUG - 2013-12-05 16:32:36 --> Helper loaded: html_helper
DEBUG - 2013-12-05 16:32:36 --> Database Driver Class Initialized
DEBUG - 2013-12-05 16:32:37 --> Session Class Initialized
DEBUG - 2013-12-05 16:32:37 --> Helper loaded: string_helper
DEBUG - 2013-12-05 16:32:37 --> A session cookie was not found.
DEBUG - 2013-12-05 16:32:37 --> Session routines successfully run
DEBUG - 2013-12-05 16:32:37 --> Form Validation Class Initialized
DEBUG - 2013-12-05 16:32:37 --> Controller Class Initialized
DEBUG - 2013-12-05 16:32:37 --> Model Class Initialized
DEBUG - 2013-12-05 16:32:37 --> Model Class Initialized
DEBUG - 2013-12-05 16:32:37 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-05 16:32:37 --> after session initialization................
INFO  - 2013-12-05 16:32:37 --> inside rays login auth.............
DEBUG - 2013-12-05 16:32:37 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-12-05 16:32:37 --> XSS Filtering completed
DEBUG - 2013-12-05 16:32:37 --> XSS Filtering completed
INFO  - 2013-12-05 16:32:37 --> before getting the relation of member............6
INFO  - 2013-12-05 16:32:37 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-12-05 16:32:37 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-05 16:32:37 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-05 16:32:37 --> inside retrieving vacancy for member
INFO  - 2013-12-05 16:32:37 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-12-05 16:32:37 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-05 16:32:37 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-12-05 16:32:37 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-05 16:32:37 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-05 16:32:37 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-05 16:32:37 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-05 16:32:37 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-12-05 16:32:37 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-12-05 16:32:37 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
DEBUG - 2013-12-05 16:32:37 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-12-05 16:32:37 --> Final output sent to browser
DEBUG - 2013-12-05 16:32:37 --> Total execution time: 1.1011
DEBUG - 2013-12-05 16:32:37 --> Config Class Initialized
DEBUG - 2013-12-05 16:32:37 --> Hooks Class Initialized
DEBUG - 2013-12-05 16:32:37 --> Utf8 Class Initialized
DEBUG - 2013-12-05 16:32:37 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 16:32:37 --> URI Class Initialized
DEBUG - 2013-12-05 16:32:37 --> Router Class Initialized
ERROR - 2013-12-05 16:32:37 --> 404 Page Not Found --> sys_admin/src
DEBUG - 2013-12-05 16:32:38 --> Config Class Initialized
DEBUG - 2013-12-05 16:32:38 --> Hooks Class Initialized
DEBUG - 2013-12-05 16:32:38 --> Utf8 Class Initialized
DEBUG - 2013-12-05 16:32:38 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 16:32:38 --> URI Class Initialized
DEBUG - 2013-12-05 16:32:38 --> Router Class Initialized
ERROR - 2013-12-05 16:32:38 --> 404 Page Not Found --> css
DEBUG - 2013-12-05 16:33:17 --> Config Class Initialized
DEBUG - 2013-12-05 16:33:17 --> Hooks Class Initialized
DEBUG - 2013-12-05 16:33:17 --> Utf8 Class Initialized
DEBUG - 2013-12-05 16:33:17 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 16:33:17 --> URI Class Initialized
DEBUG - 2013-12-05 16:33:17 --> Router Class Initialized
DEBUG - 2013-12-05 16:33:17 --> Output Class Initialized
DEBUG - 2013-12-05 16:33:17 --> Security Class Initialized
DEBUG - 2013-12-05 16:33:17 --> Input Class Initialized
DEBUG - 2013-12-05 16:33:17 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 16:33:17 --> Language Class Initialized
DEBUG - 2013-12-05 16:33:17 --> Loader Class Initialized
DEBUG - 2013-12-05 16:33:17 --> Helper loaded: form_helper
DEBUG - 2013-12-05 16:33:17 --> Helper loaded: url_helper
DEBUG - 2013-12-05 16:33:17 --> Helper loaded: html_helper
DEBUG - 2013-12-05 16:33:17 --> Database Driver Class Initialized
DEBUG - 2013-12-05 16:33:17 --> Session Class Initialized
DEBUG - 2013-12-05 16:33:17 --> Helper loaded: string_helper
DEBUG - 2013-12-05 16:33:17 --> Session routines successfully run
DEBUG - 2013-12-05 16:33:17 --> Form Validation Class Initialized
DEBUG - 2013-12-05 16:33:17 --> Controller Class Initialized
DEBUG - 2013-12-05 16:33:17 --> Model Class Initialized
DEBUG - 2013-12-05 16:33:17 --> Model Class Initialized
DEBUG - 2013-12-05 16:33:17 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-05 16:33:17 --> after session initialization................
INFO  - 2013-12-05 16:33:17 --> inside rays login auth.............
DEBUG - 2013-12-05 16:33:17 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-12-05 16:33:17 --> XSS Filtering completed
DEBUG - 2013-12-05 16:33:17 --> XSS Filtering completed
INFO  - 2013-12-05 16:33:17 --> before getting the relation of member............6
INFO  - 2013-12-05 16:33:17 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-12-05 16:33:17 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-05 16:33:17 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-05 16:33:17 --> inside retrieving vacancy for member
INFO  - 2013-12-05 16:33:17 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-12-05 16:33:17 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-05 16:33:17 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-12-05 16:33:17 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-05 16:33:17 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-05 16:33:17 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-05 16:33:17 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-05 16:33:17 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-12-05 16:33:17 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-12-05 16:33:17 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
DEBUG - 2013-12-05 16:33:17 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-12-05 16:33:17 --> Final output sent to browser
DEBUG - 2013-12-05 16:33:17 --> Total execution time: 0.0790
DEBUG - 2013-12-05 16:33:17 --> Config Class Initialized
DEBUG - 2013-12-05 16:33:17 --> Hooks Class Initialized
DEBUG - 2013-12-05 16:33:17 --> Utf8 Class Initialized
DEBUG - 2013-12-05 16:33:17 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 16:33:17 --> URI Class Initialized
DEBUG - 2013-12-05 16:33:17 --> Router Class Initialized
ERROR - 2013-12-05 16:33:17 --> 404 Page Not Found --> sys_admin/src
DEBUG - 2013-12-05 16:33:18 --> Config Class Initialized
DEBUG - 2013-12-05 16:33:18 --> Hooks Class Initialized
DEBUG - 2013-12-05 16:33:18 --> Utf8 Class Initialized
DEBUG - 2013-12-05 16:33:18 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 16:33:18 --> URI Class Initialized
DEBUG - 2013-12-05 16:33:18 --> Router Class Initialized
ERROR - 2013-12-05 16:33:18 --> 404 Page Not Found --> css
DEBUG - 2013-12-05 16:35:50 --> Config Class Initialized
DEBUG - 2013-12-05 16:35:50 --> Hooks Class Initialized
DEBUG - 2013-12-05 16:35:50 --> Utf8 Class Initialized
DEBUG - 2013-12-05 16:35:50 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 16:35:50 --> URI Class Initialized
DEBUG - 2013-12-05 16:35:50 --> Router Class Initialized
DEBUG - 2013-12-05 16:35:50 --> Output Class Initialized
DEBUG - 2013-12-05 16:35:50 --> Security Class Initialized
DEBUG - 2013-12-05 16:35:50 --> Input Class Initialized
DEBUG - 2013-12-05 16:35:50 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 16:35:50 --> Language Class Initialized
DEBUG - 2013-12-05 16:35:50 --> Loader Class Initialized
DEBUG - 2013-12-05 16:35:50 --> Helper loaded: form_helper
DEBUG - 2013-12-05 16:35:50 --> Helper loaded: url_helper
DEBUG - 2013-12-05 16:35:50 --> Helper loaded: html_helper
DEBUG - 2013-12-05 16:35:50 --> Database Driver Class Initialized
DEBUG - 2013-12-05 16:35:51 --> Session Class Initialized
DEBUG - 2013-12-05 16:35:51 --> Helper loaded: string_helper
DEBUG - 2013-12-05 16:35:51 --> Session routines successfully run
DEBUG - 2013-12-05 16:35:51 --> Form Validation Class Initialized
DEBUG - 2013-12-05 16:35:51 --> Controller Class Initialized
DEBUG - 2013-12-05 16:35:51 --> Model Class Initialized
DEBUG - 2013-12-05 16:35:51 --> Model Class Initialized
DEBUG - 2013-12-05 16:35:51 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-05 16:35:51 --> after session initialization................
INFO  - 2013-12-05 16:35:51 --> inside rays login auth.............
DEBUG - 2013-12-05 16:35:51 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-12-05 16:35:51 --> XSS Filtering completed
DEBUG - 2013-12-05 16:35:51 --> XSS Filtering completed
INFO  - 2013-12-05 16:35:51 --> before getting the relation of member............6
INFO  - 2013-12-05 16:35:51 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-12-05 16:35:51 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-05 16:35:51 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-05 16:35:51 --> inside retrieving vacancy for member
INFO  - 2013-12-05 16:35:51 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-12-05 16:35:51 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-05 16:35:51 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-12-05 16:35:51 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-05 16:35:51 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-05 16:35:51 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-05 16:35:51 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-05 16:35:51 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-12-05 16:35:51 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-12-05 16:35:51 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
DEBUG - 2013-12-05 16:35:51 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-12-05 16:35:51 --> Final output sent to browser
DEBUG - 2013-12-05 16:35:51 --> Total execution time: 1.0891
DEBUG - 2013-12-05 16:35:51 --> Config Class Initialized
DEBUG - 2013-12-05 16:35:51 --> Hooks Class Initialized
DEBUG - 2013-12-05 16:35:51 --> Utf8 Class Initialized
DEBUG - 2013-12-05 16:35:51 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 16:35:51 --> URI Class Initialized
DEBUG - 2013-12-05 16:35:51 --> Router Class Initialized
ERROR - 2013-12-05 16:35:51 --> 404 Page Not Found --> sys_admin/src
DEBUG - 2013-12-05 16:35:51 --> Config Class Initialized
DEBUG - 2013-12-05 16:35:51 --> Hooks Class Initialized
DEBUG - 2013-12-05 16:35:51 --> Utf8 Class Initialized
DEBUG - 2013-12-05 16:35:51 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 16:35:51 --> URI Class Initialized
DEBUG - 2013-12-05 16:35:51 --> Router Class Initialized
ERROR - 2013-12-05 16:35:51 --> 404 Page Not Found --> css
DEBUG - 2013-12-05 16:36:08 --> Config Class Initialized
DEBUG - 2013-12-05 16:36:08 --> Hooks Class Initialized
DEBUG - 2013-12-05 16:36:08 --> Utf8 Class Initialized
DEBUG - 2013-12-05 16:36:08 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 16:36:08 --> URI Class Initialized
DEBUG - 2013-12-05 16:36:08 --> Router Class Initialized
DEBUG - 2013-12-05 16:36:08 --> Output Class Initialized
DEBUG - 2013-12-05 16:36:08 --> Security Class Initialized
DEBUG - 2013-12-05 16:36:08 --> Input Class Initialized
DEBUG - 2013-12-05 16:36:08 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 16:36:08 --> Language Class Initialized
DEBUG - 2013-12-05 16:36:08 --> Loader Class Initialized
DEBUG - 2013-12-05 16:36:08 --> Helper loaded: form_helper
DEBUG - 2013-12-05 16:36:08 --> Helper loaded: url_helper
DEBUG - 2013-12-05 16:36:08 --> Helper loaded: html_helper
DEBUG - 2013-12-05 16:36:08 --> Database Driver Class Initialized
DEBUG - 2013-12-05 16:36:08 --> Session Class Initialized
DEBUG - 2013-12-05 16:36:08 --> Helper loaded: string_helper
DEBUG - 2013-12-05 16:36:08 --> Session routines successfully run
DEBUG - 2013-12-05 16:36:08 --> Form Validation Class Initialized
DEBUG - 2013-12-05 16:36:08 --> Controller Class Initialized
DEBUG - 2013-12-05 16:36:08 --> Model Class Initialized
DEBUG - 2013-12-05 16:36:08 --> Model Class Initialized
DEBUG - 2013-12-05 16:36:08 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-05 16:36:08 --> after session initialization................
INFO  - 2013-12-05 16:36:08 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 1 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-05 16:36:08 --> Final output sent to browser
DEBUG - 2013-12-05 16:36:08 --> Total execution time: 0.1390
DEBUG - 2013-12-05 16:36:52 --> Config Class Initialized
DEBUG - 2013-12-05 16:36:52 --> Hooks Class Initialized
DEBUG - 2013-12-05 16:36:52 --> Utf8 Class Initialized
DEBUG - 2013-12-05 16:36:52 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 16:36:52 --> URI Class Initialized
DEBUG - 2013-12-05 16:36:52 --> Router Class Initialized
DEBUG - 2013-12-05 16:36:52 --> Output Class Initialized
DEBUG - 2013-12-05 16:36:52 --> Security Class Initialized
DEBUG - 2013-12-05 16:36:52 --> Input Class Initialized
DEBUG - 2013-12-05 16:36:52 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 16:36:52 --> Language Class Initialized
DEBUG - 2013-12-05 16:36:52 --> Loader Class Initialized
DEBUG - 2013-12-05 16:36:52 --> Helper loaded: form_helper
DEBUG - 2013-12-05 16:36:52 --> Helper loaded: url_helper
DEBUG - 2013-12-05 16:36:52 --> Helper loaded: html_helper
DEBUG - 2013-12-05 16:36:52 --> Database Driver Class Initialized
DEBUG - 2013-12-05 16:36:52 --> Session Class Initialized
DEBUG - 2013-12-05 16:36:52 --> Helper loaded: string_helper
DEBUG - 2013-12-05 16:36:52 --> Session routines successfully run
DEBUG - 2013-12-05 16:36:52 --> Form Validation Class Initialized
DEBUG - 2013-12-05 16:36:52 --> Controller Class Initialized
DEBUG - 2013-12-05 16:36:52 --> Model Class Initialized
DEBUG - 2013-12-05 16:36:52 --> Model Class Initialized
DEBUG - 2013-12-05 16:36:52 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-05 16:36:52 --> after session initialization................
INFO  - 2013-12-05 16:36:52 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 1 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-05 16:36:52 --> Final output sent to browser
DEBUG - 2013-12-05 16:36:52 --> Total execution time: 0.0510
DEBUG - 2013-12-05 16:39:21 --> Config Class Initialized
DEBUG - 2013-12-05 16:39:21 --> Hooks Class Initialized
DEBUG - 2013-12-05 16:39:21 --> Utf8 Class Initialized
DEBUG - 2013-12-05 16:39:21 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 16:39:21 --> URI Class Initialized
DEBUG - 2013-12-05 16:39:21 --> Router Class Initialized
DEBUG - 2013-12-05 16:39:21 --> Output Class Initialized
DEBUG - 2013-12-05 16:39:21 --> Security Class Initialized
DEBUG - 2013-12-05 16:39:21 --> Input Class Initialized
DEBUG - 2013-12-05 16:39:21 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 16:39:21 --> Language Class Initialized
DEBUG - 2013-12-05 16:39:21 --> Loader Class Initialized
DEBUG - 2013-12-05 16:39:21 --> Helper loaded: form_helper
DEBUG - 2013-12-05 16:39:21 --> Helper loaded: url_helper
DEBUG - 2013-12-05 16:39:21 --> Helper loaded: html_helper
DEBUG - 2013-12-05 16:39:21 --> Database Driver Class Initialized
DEBUG - 2013-12-05 16:39:21 --> Session Class Initialized
DEBUG - 2013-12-05 16:39:21 --> Helper loaded: string_helper
DEBUG - 2013-12-05 16:39:21 --> Session routines successfully run
DEBUG - 2013-12-05 16:39:21 --> Form Validation Class Initialized
DEBUG - 2013-12-05 16:39:21 --> Controller Class Initialized
DEBUG - 2013-12-05 16:39:21 --> Model Class Initialized
DEBUG - 2013-12-05 16:39:21 --> Model Class Initialized
DEBUG - 2013-12-05 16:39:21 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-05 16:39:21 --> after session initialization................
INFO  - 2013-12-05 16:39:21 --> inside rays login auth.............
DEBUG - 2013-12-05 16:39:21 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-12-05 16:39:21 --> XSS Filtering completed
DEBUG - 2013-12-05 16:39:21 --> XSS Filtering completed
INFO  - 2013-12-05 16:39:21 --> before getting the relation of member............6
INFO  - 2013-12-05 16:39:21 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-12-05 16:39:21 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-05 16:39:21 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-05 16:39:21 --> inside retrieving vacancy for member
INFO  - 2013-12-05 16:39:21 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-12-05 16:39:21 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-05 16:39:21 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-12-05 16:39:21 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-05 16:39:21 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-05 16:39:21 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-05 16:39:21 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-05 16:39:21 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-12-05 16:39:21 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-12-05 16:39:21 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
DEBUG - 2013-12-05 16:39:21 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-12-05 16:39:21 --> Final output sent to browser
DEBUG - 2013-12-05 16:39:21 --> Total execution time: 0.0760
DEBUG - 2013-12-05 16:39:21 --> Config Class Initialized
DEBUG - 2013-12-05 16:39:21 --> Hooks Class Initialized
DEBUG - 2013-12-05 16:39:21 --> Utf8 Class Initialized
DEBUG - 2013-12-05 16:39:21 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 16:39:21 --> URI Class Initialized
DEBUG - 2013-12-05 16:39:21 --> Router Class Initialized
ERROR - 2013-12-05 16:39:21 --> 404 Page Not Found --> css
DEBUG - 2013-12-05 16:39:34 --> Config Class Initialized
DEBUG - 2013-12-05 16:39:34 --> Hooks Class Initialized
DEBUG - 2013-12-05 16:39:34 --> Utf8 Class Initialized
DEBUG - 2013-12-05 16:39:34 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 16:39:34 --> URI Class Initialized
DEBUG - 2013-12-05 16:39:34 --> Router Class Initialized
DEBUG - 2013-12-05 16:39:34 --> Output Class Initialized
DEBUG - 2013-12-05 16:39:34 --> Security Class Initialized
DEBUG - 2013-12-05 16:39:34 --> Input Class Initialized
DEBUG - 2013-12-05 16:39:34 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 16:39:34 --> Language Class Initialized
DEBUG - 2013-12-05 16:39:34 --> Loader Class Initialized
DEBUG - 2013-12-05 16:39:34 --> Helper loaded: form_helper
DEBUG - 2013-12-05 16:39:34 --> Helper loaded: url_helper
DEBUG - 2013-12-05 16:39:34 --> Helper loaded: html_helper
DEBUG - 2013-12-05 16:39:34 --> Database Driver Class Initialized
DEBUG - 2013-12-05 16:39:34 --> Session Class Initialized
DEBUG - 2013-12-05 16:39:34 --> Helper loaded: string_helper
DEBUG - 2013-12-05 16:39:34 --> Session routines successfully run
DEBUG - 2013-12-05 16:39:34 --> Form Validation Class Initialized
DEBUG - 2013-12-05 16:39:34 --> Controller Class Initialized
DEBUG - 2013-12-05 16:39:34 --> Model Class Initialized
DEBUG - 2013-12-05 16:39:34 --> Model Class Initialized
DEBUG - 2013-12-05 16:39:34 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-05 16:39:34 --> after session initialization................
INFO  - 2013-12-05 16:39:34 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 1 and d.drugclassid_drugclass = 3
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-05 16:39:34 --> Final output sent to browser
DEBUG - 2013-12-05 16:39:34 --> Total execution time: 0.0470
DEBUG - 2013-12-05 16:39:40 --> Config Class Initialized
DEBUG - 2013-12-05 16:39:40 --> Hooks Class Initialized
DEBUG - 2013-12-05 16:39:40 --> Utf8 Class Initialized
DEBUG - 2013-12-05 16:39:40 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 16:39:40 --> URI Class Initialized
DEBUG - 2013-12-05 16:39:40 --> Router Class Initialized
DEBUG - 2013-12-05 16:39:40 --> Output Class Initialized
DEBUG - 2013-12-05 16:39:40 --> Security Class Initialized
DEBUG - 2013-12-05 16:39:40 --> Input Class Initialized
DEBUG - 2013-12-05 16:39:40 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 16:39:40 --> Language Class Initialized
DEBUG - 2013-12-05 16:39:40 --> Loader Class Initialized
DEBUG - 2013-12-05 16:39:40 --> Helper loaded: form_helper
DEBUG - 2013-12-05 16:39:40 --> Helper loaded: url_helper
DEBUG - 2013-12-05 16:39:40 --> Helper loaded: html_helper
DEBUG - 2013-12-05 16:39:40 --> Database Driver Class Initialized
DEBUG - 2013-12-05 16:39:40 --> Session Class Initialized
DEBUG - 2013-12-05 16:39:40 --> Helper loaded: string_helper
DEBUG - 2013-12-05 16:39:40 --> Session routines successfully run
DEBUG - 2013-12-05 16:39:40 --> Form Validation Class Initialized
DEBUG - 2013-12-05 16:39:40 --> Controller Class Initialized
DEBUG - 2013-12-05 16:39:40 --> Model Class Initialized
DEBUG - 2013-12-05 16:39:40 --> Model Class Initialized
DEBUG - 2013-12-05 16:39:40 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-05 16:39:40 --> after session initialization................
INFO  - 2013-12-05 16:39:40 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 1 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-05 16:39:40 --> Final output sent to browser
DEBUG - 2013-12-05 16:39:40 --> Total execution time: 0.0500
DEBUG - 2013-12-05 16:41:22 --> Config Class Initialized
DEBUG - 2013-12-05 16:41:22 --> Hooks Class Initialized
DEBUG - 2013-12-05 16:41:22 --> Utf8 Class Initialized
DEBUG - 2013-12-05 16:41:22 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 16:41:22 --> URI Class Initialized
DEBUG - 2013-12-05 16:41:22 --> Router Class Initialized
DEBUG - 2013-12-05 16:41:22 --> Output Class Initialized
DEBUG - 2013-12-05 16:41:22 --> Security Class Initialized
DEBUG - 2013-12-05 16:41:22 --> Input Class Initialized
DEBUG - 2013-12-05 16:41:22 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 16:41:22 --> Language Class Initialized
DEBUG - 2013-12-05 16:41:22 --> Loader Class Initialized
DEBUG - 2013-12-05 16:41:22 --> Helper loaded: form_helper
DEBUG - 2013-12-05 16:41:22 --> Helper loaded: url_helper
DEBUG - 2013-12-05 16:41:22 --> Helper loaded: html_helper
DEBUG - 2013-12-05 16:41:22 --> Database Driver Class Initialized
DEBUG - 2013-12-05 16:41:22 --> Session Class Initialized
DEBUG - 2013-12-05 16:41:22 --> Helper loaded: string_helper
DEBUG - 2013-12-05 16:41:22 --> Session routines successfully run
DEBUG - 2013-12-05 16:41:22 --> Form Validation Class Initialized
DEBUG - 2013-12-05 16:41:22 --> Controller Class Initialized
DEBUG - 2013-12-05 16:41:22 --> Model Class Initialized
DEBUG - 2013-12-05 16:41:22 --> Model Class Initialized
DEBUG - 2013-12-05 16:41:22 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-05 16:41:22 --> after session initialization................
INFO  - 2013-12-05 16:41:22 --> inside rays login auth.............
DEBUG - 2013-12-05 16:41:22 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-12-05 16:41:22 --> XSS Filtering completed
DEBUG - 2013-12-05 16:41:22 --> XSS Filtering completed
INFO  - 2013-12-05 16:41:22 --> before getting the relation of member............6
INFO  - 2013-12-05 16:41:22 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-12-05 16:41:22 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-05 16:41:22 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-05 16:41:23 --> inside retrieving vacancy for member
INFO  - 2013-12-05 16:41:23 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-12-05 16:41:23 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-05 16:41:23 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-12-05 16:41:23 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-05 16:41:23 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-05 16:41:23 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-05 16:41:23 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-05 16:41:23 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-12-05 16:41:23 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-12-05 16:41:23 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
DEBUG - 2013-12-05 16:41:23 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-12-05 16:41:23 --> Final output sent to browser
DEBUG - 2013-12-05 16:41:23 --> Total execution time: 0.0720
DEBUG - 2013-12-05 16:41:23 --> Config Class Initialized
DEBUG - 2013-12-05 16:41:23 --> Hooks Class Initialized
DEBUG - 2013-12-05 16:41:23 --> Utf8 Class Initialized
DEBUG - 2013-12-05 16:41:23 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 16:41:23 --> URI Class Initialized
DEBUG - 2013-12-05 16:41:23 --> Router Class Initialized
ERROR - 2013-12-05 16:41:23 --> 404 Page Not Found --> css
DEBUG - 2013-12-05 16:41:39 --> Config Class Initialized
DEBUG - 2013-12-05 16:41:39 --> Hooks Class Initialized
DEBUG - 2013-12-05 16:41:39 --> Utf8 Class Initialized
DEBUG - 2013-12-05 16:41:39 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 16:41:39 --> URI Class Initialized
DEBUG - 2013-12-05 16:41:39 --> Router Class Initialized
DEBUG - 2013-12-05 16:41:39 --> Output Class Initialized
DEBUG - 2013-12-05 16:41:39 --> Security Class Initialized
DEBUG - 2013-12-05 16:41:39 --> Input Class Initialized
DEBUG - 2013-12-05 16:41:39 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 16:41:39 --> Language Class Initialized
DEBUG - 2013-12-05 16:41:39 --> Loader Class Initialized
DEBUG - 2013-12-05 16:41:39 --> Helper loaded: form_helper
DEBUG - 2013-12-05 16:41:39 --> Helper loaded: url_helper
DEBUG - 2013-12-05 16:41:39 --> Helper loaded: html_helper
DEBUG - 2013-12-05 16:41:39 --> Database Driver Class Initialized
DEBUG - 2013-12-05 16:41:40 --> Session Class Initialized
DEBUG - 2013-12-05 16:41:40 --> Helper loaded: string_helper
DEBUG - 2013-12-05 16:41:40 --> Session routines successfully run
DEBUG - 2013-12-05 16:41:40 --> Form Validation Class Initialized
DEBUG - 2013-12-05 16:41:40 --> Controller Class Initialized
DEBUG - 2013-12-05 16:41:40 --> Model Class Initialized
DEBUG - 2013-12-05 16:41:40 --> Model Class Initialized
DEBUG - 2013-12-05 16:41:40 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-05 16:41:40 --> after session initialization................
INFO  - 2013-12-05 16:41:40 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 1 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-05 16:41:40 --> Final output sent to browser
DEBUG - 2013-12-05 16:41:40 --> Total execution time: 1.0471
DEBUG - 2013-12-05 16:41:58 --> Config Class Initialized
DEBUG - 2013-12-05 16:41:58 --> Hooks Class Initialized
DEBUG - 2013-12-05 16:41:58 --> Utf8 Class Initialized
DEBUG - 2013-12-05 16:41:58 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 16:41:58 --> URI Class Initialized
DEBUG - 2013-12-05 16:41:58 --> Router Class Initialized
DEBUG - 2013-12-05 16:41:58 --> Output Class Initialized
DEBUG - 2013-12-05 16:41:58 --> Security Class Initialized
DEBUG - 2013-12-05 16:41:58 --> Input Class Initialized
DEBUG - 2013-12-05 16:41:58 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 16:41:58 --> Language Class Initialized
DEBUG - 2013-12-05 16:41:58 --> Loader Class Initialized
DEBUG - 2013-12-05 16:41:58 --> Helper loaded: form_helper
DEBUG - 2013-12-05 16:41:58 --> Helper loaded: url_helper
DEBUG - 2013-12-05 16:41:58 --> Helper loaded: html_helper
DEBUG - 2013-12-05 16:41:58 --> Database Driver Class Initialized
DEBUG - 2013-12-05 16:41:58 --> Session Class Initialized
DEBUG - 2013-12-05 16:41:58 --> Helper loaded: string_helper
DEBUG - 2013-12-05 16:41:58 --> Session routines successfully run
DEBUG - 2013-12-05 16:41:58 --> Form Validation Class Initialized
DEBUG - 2013-12-05 16:41:58 --> Controller Class Initialized
DEBUG - 2013-12-05 16:41:58 --> Model Class Initialized
DEBUG - 2013-12-05 16:41:58 --> Model Class Initialized
DEBUG - 2013-12-05 16:41:58 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-05 16:41:58 --> after session initialization................
INFO  - 2013-12-05 16:41:58 --> inside rays login auth.............
DEBUG - 2013-12-05 16:41:58 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-12-05 16:41:58 --> XSS Filtering completed
DEBUG - 2013-12-05 16:41:58 --> XSS Filtering completed
INFO  - 2013-12-05 16:41:58 --> before getting the relation of member............6
INFO  - 2013-12-05 16:41:58 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-12-05 16:41:58 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-05 16:41:58 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-05 16:41:58 --> inside retrieving vacancy for member
INFO  - 2013-12-05 16:41:58 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-12-05 16:41:58 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-05 16:41:58 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-12-05 16:41:58 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-05 16:41:58 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-05 16:41:58 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-05 16:41:58 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-05 16:41:58 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-12-05 16:41:58 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-12-05 16:41:58 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
DEBUG - 2013-12-05 16:41:58 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-12-05 16:41:58 --> Final output sent to browser
DEBUG - 2013-12-05 16:41:58 --> Total execution time: 0.0760
DEBUG - 2013-12-05 16:41:58 --> Config Class Initialized
DEBUG - 2013-12-05 16:41:58 --> Hooks Class Initialized
DEBUG - 2013-12-05 16:41:58 --> Utf8 Class Initialized
DEBUG - 2013-12-05 16:41:58 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 16:41:58 --> URI Class Initialized
DEBUG - 2013-12-05 16:41:58 --> Router Class Initialized
ERROR - 2013-12-05 16:41:58 --> 404 Page Not Found --> css
DEBUG - 2013-12-05 16:42:25 --> Config Class Initialized
DEBUG - 2013-12-05 16:42:25 --> Hooks Class Initialized
DEBUG - 2013-12-05 16:42:25 --> Utf8 Class Initialized
DEBUG - 2013-12-05 16:42:25 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 16:42:25 --> URI Class Initialized
DEBUG - 2013-12-05 16:42:25 --> Router Class Initialized
DEBUG - 2013-12-05 16:42:25 --> Output Class Initialized
DEBUG - 2013-12-05 16:42:25 --> Security Class Initialized
DEBUG - 2013-12-05 16:42:25 --> Input Class Initialized
DEBUG - 2013-12-05 16:42:25 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 16:42:25 --> Language Class Initialized
DEBUG - 2013-12-05 16:42:25 --> Loader Class Initialized
DEBUG - 2013-12-05 16:42:25 --> Helper loaded: form_helper
DEBUG - 2013-12-05 16:42:25 --> Helper loaded: url_helper
DEBUG - 2013-12-05 16:42:25 --> Helper loaded: html_helper
DEBUG - 2013-12-05 16:42:25 --> Database Driver Class Initialized
DEBUG - 2013-12-05 16:42:26 --> Session Class Initialized
DEBUG - 2013-12-05 16:42:26 --> Helper loaded: string_helper
DEBUG - 2013-12-05 16:42:26 --> Session routines successfully run
DEBUG - 2013-12-05 16:42:26 --> Form Validation Class Initialized
DEBUG - 2013-12-05 16:42:26 --> Controller Class Initialized
DEBUG - 2013-12-05 16:42:26 --> Model Class Initialized
DEBUG - 2013-12-05 16:42:26 --> Model Class Initialized
DEBUG - 2013-12-05 16:42:26 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-05 16:42:26 --> after session initialization................
INFO  - 2013-12-05 16:42:26 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 1 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-05 16:42:26 --> Final output sent to browser
DEBUG - 2013-12-05 16:42:26 --> Total execution time: 1.0481
DEBUG - 2013-12-05 16:44:18 --> Config Class Initialized
DEBUG - 2013-12-05 16:44:18 --> Hooks Class Initialized
DEBUG - 2013-12-05 16:44:18 --> Utf8 Class Initialized
DEBUG - 2013-12-05 16:44:18 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 16:44:18 --> URI Class Initialized
DEBUG - 2013-12-05 16:44:18 --> Router Class Initialized
DEBUG - 2013-12-05 16:44:18 --> Output Class Initialized
DEBUG - 2013-12-05 16:44:18 --> Security Class Initialized
DEBUG - 2013-12-05 16:44:18 --> Input Class Initialized
DEBUG - 2013-12-05 16:44:18 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 16:44:18 --> Language Class Initialized
DEBUG - 2013-12-05 16:44:18 --> Loader Class Initialized
DEBUG - 2013-12-05 16:44:18 --> Helper loaded: form_helper
DEBUG - 2013-12-05 16:44:18 --> Helper loaded: url_helper
DEBUG - 2013-12-05 16:44:18 --> Helper loaded: html_helper
DEBUG - 2013-12-05 16:44:18 --> Database Driver Class Initialized
DEBUG - 2013-12-05 16:44:18 --> Session Class Initialized
DEBUG - 2013-12-05 16:44:18 --> Helper loaded: string_helper
DEBUG - 2013-12-05 16:44:18 --> Session routines successfully run
DEBUG - 2013-12-05 16:44:18 --> Form Validation Class Initialized
DEBUG - 2013-12-05 16:44:18 --> Controller Class Initialized
DEBUG - 2013-12-05 16:44:18 --> Model Class Initialized
DEBUG - 2013-12-05 16:44:18 --> Model Class Initialized
DEBUG - 2013-12-05 16:44:18 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-05 16:44:18 --> after session initialization................
INFO  - 2013-12-05 16:44:18 --> inside rays login auth.............
DEBUG - 2013-12-05 16:44:18 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-12-05 16:44:18 --> XSS Filtering completed
DEBUG - 2013-12-05 16:44:18 --> XSS Filtering completed
INFO  - 2013-12-05 16:44:18 --> before getting the relation of member............6
INFO  - 2013-12-05 16:44:18 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-12-05 16:44:18 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-05 16:44:18 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-05 16:44:18 --> inside retrieving vacancy for member
INFO  - 2013-12-05 16:44:18 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-12-05 16:44:18 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-05 16:44:18 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-12-05 16:44:18 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-05 16:44:18 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-05 16:44:18 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-05 16:44:18 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-05 16:44:18 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-12-05 16:44:18 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-12-05 16:44:18 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
DEBUG - 2013-12-05 16:44:18 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-12-05 16:44:18 --> Final output sent to browser
DEBUG - 2013-12-05 16:44:18 --> Total execution time: 0.0730
DEBUG - 2013-12-05 16:44:18 --> Config Class Initialized
DEBUG - 2013-12-05 16:44:18 --> Hooks Class Initialized
DEBUG - 2013-12-05 16:44:18 --> Utf8 Class Initialized
DEBUG - 2013-12-05 16:44:18 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 16:44:18 --> URI Class Initialized
DEBUG - 2013-12-05 16:44:18 --> Router Class Initialized
ERROR - 2013-12-05 16:44:18 --> 404 Page Not Found --> css
DEBUG - 2013-12-05 16:44:54 --> Config Class Initialized
DEBUG - 2013-12-05 16:44:54 --> Hooks Class Initialized
DEBUG - 2013-12-05 16:44:54 --> Utf8 Class Initialized
DEBUG - 2013-12-05 16:44:54 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 16:44:54 --> URI Class Initialized
DEBUG - 2013-12-05 16:44:54 --> Router Class Initialized
DEBUG - 2013-12-05 16:44:54 --> Output Class Initialized
DEBUG - 2013-12-05 16:44:54 --> Security Class Initialized
DEBUG - 2013-12-05 16:44:54 --> Input Class Initialized
DEBUG - 2013-12-05 16:44:54 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 16:44:54 --> Language Class Initialized
DEBUG - 2013-12-05 16:44:54 --> Loader Class Initialized
DEBUG - 2013-12-05 16:44:54 --> Helper loaded: form_helper
DEBUG - 2013-12-05 16:44:54 --> Helper loaded: url_helper
DEBUG - 2013-12-05 16:44:54 --> Helper loaded: html_helper
DEBUG - 2013-12-05 16:44:54 --> Database Driver Class Initialized
DEBUG - 2013-12-05 16:44:54 --> Session Class Initialized
DEBUG - 2013-12-05 16:44:54 --> Helper loaded: string_helper
DEBUG - 2013-12-05 16:44:54 --> Session routines successfully run
DEBUG - 2013-12-05 16:44:54 --> Form Validation Class Initialized
DEBUG - 2013-12-05 16:44:54 --> Controller Class Initialized
DEBUG - 2013-12-05 16:44:54 --> Model Class Initialized
DEBUG - 2013-12-05 16:44:54 --> Model Class Initialized
DEBUG - 2013-12-05 16:44:54 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-05 16:44:54 --> after session initialization................
INFO  - 2013-12-05 16:44:54 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 1 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-05 16:44:54 --> Final output sent to browser
DEBUG - 2013-12-05 16:44:54 --> Total execution time: 0.0550
DEBUG - 2013-12-05 16:48:26 --> Config Class Initialized
DEBUG - 2013-12-05 16:48:26 --> Hooks Class Initialized
DEBUG - 2013-12-05 16:48:26 --> Utf8 Class Initialized
DEBUG - 2013-12-05 16:48:26 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 16:48:26 --> URI Class Initialized
DEBUG - 2013-12-05 16:48:26 --> Router Class Initialized
DEBUG - 2013-12-05 16:48:26 --> Output Class Initialized
DEBUG - 2013-12-05 16:48:26 --> Security Class Initialized
DEBUG - 2013-12-05 16:48:26 --> Input Class Initialized
DEBUG - 2013-12-05 16:48:26 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 16:48:26 --> Language Class Initialized
DEBUG - 2013-12-05 16:48:26 --> Loader Class Initialized
DEBUG - 2013-12-05 16:48:26 --> Helper loaded: form_helper
DEBUG - 2013-12-05 16:48:26 --> Helper loaded: url_helper
DEBUG - 2013-12-05 16:48:26 --> Helper loaded: html_helper
DEBUG - 2013-12-05 16:48:26 --> Database Driver Class Initialized
DEBUG - 2013-12-05 16:48:26 --> Session Class Initialized
DEBUG - 2013-12-05 16:48:26 --> Helper loaded: string_helper
DEBUG - 2013-12-05 16:48:26 --> Session routines successfully run
DEBUG - 2013-12-05 16:48:26 --> Form Validation Class Initialized
DEBUG - 2013-12-05 16:48:26 --> Controller Class Initialized
DEBUG - 2013-12-05 16:48:26 --> Model Class Initialized
DEBUG - 2013-12-05 16:48:26 --> Model Class Initialized
DEBUG - 2013-12-05 16:48:26 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-05 16:48:26 --> after session initialization................
INFO  - 2013-12-05 16:48:26 --> inside rays login auth.............
DEBUG - 2013-12-05 16:48:26 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-12-05 16:48:26 --> XSS Filtering completed
DEBUG - 2013-12-05 16:48:26 --> XSS Filtering completed
INFO  - 2013-12-05 16:48:26 --> before getting the relation of member............6
INFO  - 2013-12-05 16:48:26 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-12-05 16:48:26 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-05 16:48:26 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-05 16:48:26 --> inside retrieving vacancy for member
INFO  - 2013-12-05 16:48:26 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-12-05 16:48:26 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-05 16:48:26 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-12-05 16:48:26 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-05 16:48:26 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-05 16:48:26 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-05 16:48:26 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-05 16:48:26 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-12-05 16:48:26 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-12-05 16:48:26 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
DEBUG - 2013-12-05 16:48:26 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-12-05 16:48:26 --> Final output sent to browser
DEBUG - 2013-12-05 16:48:26 --> Total execution time: 0.0850
DEBUG - 2013-12-05 16:48:26 --> Config Class Initialized
DEBUG - 2013-12-05 16:48:26 --> Hooks Class Initialized
DEBUG - 2013-12-05 16:48:26 --> Utf8 Class Initialized
DEBUG - 2013-12-05 16:48:26 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 16:48:26 --> URI Class Initialized
DEBUG - 2013-12-05 16:48:26 --> Router Class Initialized
ERROR - 2013-12-05 16:48:26 --> 404 Page Not Found --> css
DEBUG - 2013-12-05 16:48:32 --> Config Class Initialized
DEBUG - 2013-12-05 16:48:32 --> Hooks Class Initialized
DEBUG - 2013-12-05 16:48:32 --> Utf8 Class Initialized
DEBUG - 2013-12-05 16:48:32 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 16:48:32 --> URI Class Initialized
DEBUG - 2013-12-05 16:48:32 --> Router Class Initialized
DEBUG - 2013-12-05 16:48:32 --> Output Class Initialized
DEBUG - 2013-12-05 16:48:32 --> Security Class Initialized
DEBUG - 2013-12-05 16:48:32 --> Input Class Initialized
DEBUG - 2013-12-05 16:48:32 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 16:48:32 --> Language Class Initialized
DEBUG - 2013-12-05 16:48:32 --> Loader Class Initialized
DEBUG - 2013-12-05 16:48:32 --> Helper loaded: form_helper
DEBUG - 2013-12-05 16:48:32 --> Helper loaded: url_helper
DEBUG - 2013-12-05 16:48:32 --> Helper loaded: html_helper
DEBUG - 2013-12-05 16:48:32 --> Database Driver Class Initialized
DEBUG - 2013-12-05 16:48:32 --> Session Class Initialized
DEBUG - 2013-12-05 16:48:32 --> Helper loaded: string_helper
DEBUG - 2013-12-05 16:48:32 --> Session routines successfully run
DEBUG - 2013-12-05 16:48:32 --> Form Validation Class Initialized
DEBUG - 2013-12-05 16:48:32 --> Controller Class Initialized
DEBUG - 2013-12-05 16:48:32 --> Model Class Initialized
DEBUG - 2013-12-05 16:48:32 --> Model Class Initialized
DEBUG - 2013-12-05 16:48:32 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-05 16:48:32 --> after session initialization................
INFO  - 2013-12-05 16:48:32 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 1 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-05 16:48:32 --> Final output sent to browser
DEBUG - 2013-12-05 16:48:32 --> Total execution time: 0.0500
DEBUG - 2013-12-05 16:51:58 --> Config Class Initialized
DEBUG - 2013-12-05 16:51:58 --> Hooks Class Initialized
DEBUG - 2013-12-05 16:51:58 --> Utf8 Class Initialized
DEBUG - 2013-12-05 16:51:58 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 16:51:58 --> URI Class Initialized
DEBUG - 2013-12-05 16:51:58 --> Router Class Initialized
DEBUG - 2013-12-05 16:51:58 --> Output Class Initialized
DEBUG - 2013-12-05 16:51:58 --> Security Class Initialized
DEBUG - 2013-12-05 16:51:58 --> Input Class Initialized
DEBUG - 2013-12-05 16:51:58 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 16:51:58 --> Language Class Initialized
DEBUG - 2013-12-05 16:51:58 --> Loader Class Initialized
DEBUG - 2013-12-05 16:51:58 --> Helper loaded: form_helper
DEBUG - 2013-12-05 16:51:58 --> Helper loaded: url_helper
DEBUG - 2013-12-05 16:51:58 --> Helper loaded: html_helper
DEBUG - 2013-12-05 16:51:58 --> Database Driver Class Initialized
DEBUG - 2013-12-05 16:51:59 --> Session Class Initialized
DEBUG - 2013-12-05 16:51:59 --> Helper loaded: string_helper
DEBUG - 2013-12-05 16:51:59 --> Session routines successfully run
DEBUG - 2013-12-05 16:51:59 --> Form Validation Class Initialized
DEBUG - 2013-12-05 16:51:59 --> Controller Class Initialized
DEBUG - 2013-12-05 16:51:59 --> Model Class Initialized
DEBUG - 2013-12-05 16:51:59 --> Model Class Initialized
DEBUG - 2013-12-05 16:51:59 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-05 16:51:59 --> after session initialization................
INFO  - 2013-12-05 16:51:59 --> inside rays login auth.............
DEBUG - 2013-12-05 16:51:59 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-12-05 16:51:59 --> XSS Filtering completed
DEBUG - 2013-12-05 16:51:59 --> XSS Filtering completed
INFO  - 2013-12-05 16:51:59 --> before getting the relation of member............6
INFO  - 2013-12-05 16:51:59 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-12-05 16:51:59 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-05 16:51:59 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-05 16:51:59 --> inside retrieving vacancy for member
INFO  - 2013-12-05 16:51:59 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-12-05 16:51:59 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-05 16:51:59 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-12-05 16:51:59 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-05 16:51:59 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-05 16:51:59 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-05 16:51:59 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-05 16:51:59 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-12-05 16:51:59 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-12-05 16:51:59 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
DEBUG - 2013-12-05 16:51:59 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-12-05 16:51:59 --> Final output sent to browser
DEBUG - 2013-12-05 16:51:59 --> Total execution time: 1.0971
DEBUG - 2013-12-05 16:51:59 --> Config Class Initialized
DEBUG - 2013-12-05 16:51:59 --> Hooks Class Initialized
DEBUG - 2013-12-05 16:51:59 --> Utf8 Class Initialized
DEBUG - 2013-12-05 16:51:59 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 16:51:59 --> URI Class Initialized
DEBUG - 2013-12-05 16:51:59 --> Router Class Initialized
ERROR - 2013-12-05 16:51:59 --> 404 Page Not Found --> css
DEBUG - 2013-12-05 16:52:02 --> Config Class Initialized
DEBUG - 2013-12-05 16:52:02 --> Hooks Class Initialized
DEBUG - 2013-12-05 16:52:02 --> Utf8 Class Initialized
DEBUG - 2013-12-05 16:52:02 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 16:52:02 --> URI Class Initialized
DEBUG - 2013-12-05 16:52:02 --> Router Class Initialized
DEBUG - 2013-12-05 16:52:02 --> Output Class Initialized
DEBUG - 2013-12-05 16:52:02 --> Security Class Initialized
DEBUG - 2013-12-05 16:52:02 --> Input Class Initialized
DEBUG - 2013-12-05 16:52:02 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 16:52:02 --> Language Class Initialized
DEBUG - 2013-12-05 16:52:02 --> Loader Class Initialized
DEBUG - 2013-12-05 16:52:02 --> Helper loaded: form_helper
DEBUG - 2013-12-05 16:52:02 --> Helper loaded: url_helper
DEBUG - 2013-12-05 16:52:02 --> Helper loaded: html_helper
DEBUG - 2013-12-05 16:52:02 --> Database Driver Class Initialized
DEBUG - 2013-12-05 16:52:02 --> Session Class Initialized
DEBUG - 2013-12-05 16:52:02 --> Helper loaded: string_helper
DEBUG - 2013-12-05 16:52:02 --> Session routines successfully run
DEBUG - 2013-12-05 16:52:02 --> Form Validation Class Initialized
DEBUG - 2013-12-05 16:52:02 --> Controller Class Initialized
DEBUG - 2013-12-05 16:52:02 --> Model Class Initialized
DEBUG - 2013-12-05 16:52:02 --> Model Class Initialized
DEBUG - 2013-12-05 16:52:02 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-05 16:52:02 --> after session initialization................
INFO  - 2013-12-05 16:52:02 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 1 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-05 16:52:02 --> Final output sent to browser
DEBUG - 2013-12-05 16:52:02 --> Total execution time: 0.0530
DEBUG - 2013-12-05 16:53:43 --> Config Class Initialized
DEBUG - 2013-12-05 16:53:43 --> Hooks Class Initialized
DEBUG - 2013-12-05 16:53:43 --> Utf8 Class Initialized
DEBUG - 2013-12-05 16:53:43 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 16:53:43 --> URI Class Initialized
DEBUG - 2013-12-05 16:53:43 --> Router Class Initialized
DEBUG - 2013-12-05 16:53:43 --> Output Class Initialized
DEBUG - 2013-12-05 16:53:43 --> Security Class Initialized
DEBUG - 2013-12-05 16:53:43 --> Input Class Initialized
DEBUG - 2013-12-05 16:53:43 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 16:53:43 --> Language Class Initialized
DEBUG - 2013-12-05 16:53:43 --> Loader Class Initialized
DEBUG - 2013-12-05 16:53:43 --> Helper loaded: form_helper
DEBUG - 2013-12-05 16:53:43 --> Helper loaded: url_helper
DEBUG - 2013-12-05 16:53:43 --> Helper loaded: html_helper
DEBUG - 2013-12-05 16:53:43 --> Database Driver Class Initialized
DEBUG - 2013-12-05 16:53:43 --> Session Class Initialized
DEBUG - 2013-12-05 16:53:43 --> Helper loaded: string_helper
DEBUG - 2013-12-05 16:53:43 --> Session routines successfully run
DEBUG - 2013-12-05 16:53:43 --> Form Validation Class Initialized
DEBUG - 2013-12-05 16:53:43 --> Controller Class Initialized
DEBUG - 2013-12-05 16:53:43 --> Model Class Initialized
DEBUG - 2013-12-05 16:53:43 --> Model Class Initialized
DEBUG - 2013-12-05 16:53:43 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-05 16:53:43 --> after session initialization................
INFO  - 2013-12-05 16:53:43 --> inside rays login auth.............
DEBUG - 2013-12-05 16:53:43 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-12-05 16:53:43 --> XSS Filtering completed
DEBUG - 2013-12-05 16:53:43 --> XSS Filtering completed
INFO  - 2013-12-05 16:53:43 --> before getting the relation of member............6
INFO  - 2013-12-05 16:53:43 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-12-05 16:53:43 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-05 16:53:43 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-05 16:53:43 --> inside retrieving vacancy for member
INFO  - 2013-12-05 16:53:43 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-12-05 16:53:43 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-05 16:53:43 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-12-05 16:53:43 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-05 16:53:43 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-05 16:53:43 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-05 16:53:43 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-05 16:53:43 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-12-05 16:53:43 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-12-05 16:53:43 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
DEBUG - 2013-12-05 16:53:43 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-12-05 16:53:43 --> Final output sent to browser
DEBUG - 2013-12-05 16:53:43 --> Total execution time: 0.0780
DEBUG - 2013-12-05 16:53:43 --> Config Class Initialized
DEBUG - 2013-12-05 16:53:43 --> Hooks Class Initialized
DEBUG - 2013-12-05 16:53:43 --> Utf8 Class Initialized
DEBUG - 2013-12-05 16:53:43 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 16:53:43 --> URI Class Initialized
DEBUG - 2013-12-05 16:53:43 --> Router Class Initialized
ERROR - 2013-12-05 16:53:43 --> 404 Page Not Found --> css
DEBUG - 2013-12-05 16:53:46 --> Config Class Initialized
DEBUG - 2013-12-05 16:53:46 --> Hooks Class Initialized
DEBUG - 2013-12-05 16:53:46 --> Utf8 Class Initialized
DEBUG - 2013-12-05 16:53:46 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 16:53:46 --> URI Class Initialized
DEBUG - 2013-12-05 16:53:46 --> Router Class Initialized
DEBUG - 2013-12-05 16:53:46 --> Output Class Initialized
DEBUG - 2013-12-05 16:53:46 --> Security Class Initialized
DEBUG - 2013-12-05 16:53:46 --> Input Class Initialized
DEBUG - 2013-12-05 16:53:46 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 16:53:46 --> Language Class Initialized
DEBUG - 2013-12-05 16:53:46 --> Loader Class Initialized
DEBUG - 2013-12-05 16:53:46 --> Helper loaded: form_helper
DEBUG - 2013-12-05 16:53:46 --> Helper loaded: url_helper
DEBUG - 2013-12-05 16:53:46 --> Helper loaded: html_helper
DEBUG - 2013-12-05 16:53:46 --> Database Driver Class Initialized
DEBUG - 2013-12-05 16:53:46 --> Session Class Initialized
DEBUG - 2013-12-05 16:53:46 --> Helper loaded: string_helper
DEBUG - 2013-12-05 16:53:46 --> Session routines successfully run
DEBUG - 2013-12-05 16:53:46 --> Form Validation Class Initialized
DEBUG - 2013-12-05 16:53:46 --> Controller Class Initialized
DEBUG - 2013-12-05 16:53:46 --> Model Class Initialized
DEBUG - 2013-12-05 16:53:46 --> Model Class Initialized
DEBUG - 2013-12-05 16:53:46 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-05 16:53:46 --> after session initialization................
INFO  - 2013-12-05 16:53:46 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 1 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-05 16:53:46 --> Final output sent to browser
DEBUG - 2013-12-05 16:53:46 --> Total execution time: 0.0490
DEBUG - 2013-12-05 16:56:07 --> Config Class Initialized
DEBUG - 2013-12-05 16:56:07 --> Hooks Class Initialized
DEBUG - 2013-12-05 16:56:07 --> Utf8 Class Initialized
DEBUG - 2013-12-05 16:56:07 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 16:56:07 --> URI Class Initialized
DEBUG - 2013-12-05 16:56:07 --> Router Class Initialized
DEBUG - 2013-12-05 16:56:07 --> Output Class Initialized
DEBUG - 2013-12-05 16:56:07 --> Security Class Initialized
DEBUG - 2013-12-05 16:56:07 --> Input Class Initialized
DEBUG - 2013-12-05 16:56:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 16:56:07 --> Language Class Initialized
DEBUG - 2013-12-05 16:56:07 --> Loader Class Initialized
DEBUG - 2013-12-05 16:56:07 --> Helper loaded: form_helper
DEBUG - 2013-12-05 16:56:07 --> Helper loaded: url_helper
DEBUG - 2013-12-05 16:56:07 --> Helper loaded: html_helper
DEBUG - 2013-12-05 16:56:07 --> Database Driver Class Initialized
DEBUG - 2013-12-05 16:56:07 --> Session Class Initialized
DEBUG - 2013-12-05 16:56:07 --> Helper loaded: string_helper
DEBUG - 2013-12-05 16:56:07 --> Session routines successfully run
DEBUG - 2013-12-05 16:56:07 --> Form Validation Class Initialized
DEBUG - 2013-12-05 16:56:07 --> Controller Class Initialized
DEBUG - 2013-12-05 16:56:07 --> Model Class Initialized
DEBUG - 2013-12-05 16:56:07 --> Model Class Initialized
DEBUG - 2013-12-05 16:56:07 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-05 16:56:07 --> after session initialization................
INFO  - 2013-12-05 16:56:07 --> inside rays login auth.............
DEBUG - 2013-12-05 16:56:07 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-12-05 16:56:07 --> XSS Filtering completed
DEBUG - 2013-12-05 16:56:07 --> XSS Filtering completed
INFO  - 2013-12-05 16:56:07 --> before getting the relation of member............6
INFO  - 2013-12-05 16:56:07 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-12-05 16:56:07 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-05 16:56:07 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-05 16:56:07 --> inside retrieving vacancy for member
INFO  - 2013-12-05 16:56:07 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-12-05 16:56:07 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-05 16:56:07 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-12-05 16:56:07 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-05 16:56:07 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-05 16:56:07 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-05 16:56:07 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-05 16:56:07 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-12-05 16:56:07 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-12-05 16:56:07 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
DEBUG - 2013-12-05 16:56:07 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-12-05 16:56:07 --> Final output sent to browser
DEBUG - 2013-12-05 16:56:07 --> Total execution time: 0.0820
DEBUG - 2013-12-05 16:56:07 --> Config Class Initialized
DEBUG - 2013-12-05 16:56:07 --> Hooks Class Initialized
DEBUG - 2013-12-05 16:56:07 --> Utf8 Class Initialized
DEBUG - 2013-12-05 16:56:07 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 16:56:07 --> URI Class Initialized
DEBUG - 2013-12-05 16:56:07 --> Router Class Initialized
ERROR - 2013-12-05 16:56:07 --> 404 Page Not Found --> css
DEBUG - 2013-12-05 16:56:13 --> Config Class Initialized
DEBUG - 2013-12-05 16:56:13 --> Hooks Class Initialized
DEBUG - 2013-12-05 16:56:13 --> Utf8 Class Initialized
DEBUG - 2013-12-05 16:56:13 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 16:56:13 --> URI Class Initialized
DEBUG - 2013-12-05 16:56:13 --> Router Class Initialized
DEBUG - 2013-12-05 16:56:13 --> Output Class Initialized
DEBUG - 2013-12-05 16:56:13 --> Security Class Initialized
DEBUG - 2013-12-05 16:56:13 --> Input Class Initialized
DEBUG - 2013-12-05 16:56:13 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 16:56:13 --> Language Class Initialized
DEBUG - 2013-12-05 16:56:13 --> Loader Class Initialized
DEBUG - 2013-12-05 16:56:13 --> Helper loaded: form_helper
DEBUG - 2013-12-05 16:56:13 --> Helper loaded: url_helper
DEBUG - 2013-12-05 16:56:13 --> Helper loaded: html_helper
DEBUG - 2013-12-05 16:56:13 --> Database Driver Class Initialized
DEBUG - 2013-12-05 16:56:13 --> Session Class Initialized
DEBUG - 2013-12-05 16:56:13 --> Helper loaded: string_helper
DEBUG - 2013-12-05 16:56:13 --> Session routines successfully run
DEBUG - 2013-12-05 16:56:13 --> Form Validation Class Initialized
DEBUG - 2013-12-05 16:56:13 --> Controller Class Initialized
DEBUG - 2013-12-05 16:56:13 --> Model Class Initialized
DEBUG - 2013-12-05 16:56:13 --> Model Class Initialized
DEBUG - 2013-12-05 16:56:13 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-05 16:56:13 --> after session initialization................
INFO  - 2013-12-05 16:56:13 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 1 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-05 16:56:13 --> Final output sent to browser
DEBUG - 2013-12-05 16:56:13 --> Total execution time: 0.0550
DEBUG - 2013-12-05 16:57:08 --> Config Class Initialized
DEBUG - 2013-12-05 16:57:08 --> Hooks Class Initialized
DEBUG - 2013-12-05 16:57:08 --> Utf8 Class Initialized
DEBUG - 2013-12-05 16:57:08 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 16:57:08 --> URI Class Initialized
DEBUG - 2013-12-05 16:57:08 --> Router Class Initialized
DEBUG - 2013-12-05 16:57:08 --> Output Class Initialized
DEBUG - 2013-12-05 16:57:08 --> Security Class Initialized
DEBUG - 2013-12-05 16:57:08 --> Input Class Initialized
DEBUG - 2013-12-05 16:57:08 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 16:57:08 --> Language Class Initialized
DEBUG - 2013-12-05 16:57:08 --> Loader Class Initialized
DEBUG - 2013-12-05 16:57:08 --> Helper loaded: form_helper
DEBUG - 2013-12-05 16:57:08 --> Helper loaded: url_helper
DEBUG - 2013-12-05 16:57:08 --> Helper loaded: html_helper
DEBUG - 2013-12-05 16:57:08 --> Database Driver Class Initialized
DEBUG - 2013-12-05 16:57:09 --> Session Class Initialized
DEBUG - 2013-12-05 16:57:09 --> Helper loaded: string_helper
DEBUG - 2013-12-05 16:57:09 --> Session routines successfully run
DEBUG - 2013-12-05 16:57:09 --> Form Validation Class Initialized
DEBUG - 2013-12-05 16:57:09 --> Controller Class Initialized
DEBUG - 2013-12-05 16:57:09 --> Model Class Initialized
DEBUG - 2013-12-05 16:57:09 --> Model Class Initialized
DEBUG - 2013-12-05 16:57:09 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-05 16:57:09 --> after session initialization................
INFO  - 2013-12-05 16:57:09 --> inside rays login auth.............
DEBUG - 2013-12-05 16:57:09 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-12-05 16:57:09 --> XSS Filtering completed
DEBUG - 2013-12-05 16:57:09 --> XSS Filtering completed
INFO  - 2013-12-05 16:57:09 --> before getting the relation of member............6
INFO  - 2013-12-05 16:57:09 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-12-05 16:57:09 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-05 16:57:09 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-05 16:57:09 --> inside retrieving vacancy for member
INFO  - 2013-12-05 16:57:09 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-12-05 16:57:09 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-05 16:57:09 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-12-05 16:57:09 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-05 16:57:09 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-05 16:57:09 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-05 16:57:09 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-05 16:57:09 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-12-05 16:57:09 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-12-05 16:57:09 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
DEBUG - 2013-12-05 16:57:09 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-12-05 16:57:09 --> Final output sent to browser
DEBUG - 2013-12-05 16:57:09 --> Total execution time: 1.0841
DEBUG - 2013-12-05 16:57:09 --> Config Class Initialized
DEBUG - 2013-12-05 16:57:09 --> Hooks Class Initialized
DEBUG - 2013-12-05 16:57:09 --> Utf8 Class Initialized
DEBUG - 2013-12-05 16:57:09 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 16:57:09 --> URI Class Initialized
DEBUG - 2013-12-05 16:57:09 --> Router Class Initialized
ERROR - 2013-12-05 16:57:09 --> 404 Page Not Found --> css
DEBUG - 2013-12-05 16:57:12 --> Config Class Initialized
DEBUG - 2013-12-05 16:57:12 --> Hooks Class Initialized
DEBUG - 2013-12-05 16:57:12 --> Utf8 Class Initialized
DEBUG - 2013-12-05 16:57:12 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 16:57:12 --> URI Class Initialized
DEBUG - 2013-12-05 16:57:12 --> Router Class Initialized
DEBUG - 2013-12-05 16:57:12 --> Output Class Initialized
DEBUG - 2013-12-05 16:57:12 --> Security Class Initialized
DEBUG - 2013-12-05 16:57:12 --> Input Class Initialized
DEBUG - 2013-12-05 16:57:12 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 16:57:12 --> Language Class Initialized
DEBUG - 2013-12-05 16:57:12 --> Loader Class Initialized
DEBUG - 2013-12-05 16:57:12 --> Helper loaded: form_helper
DEBUG - 2013-12-05 16:57:12 --> Helper loaded: url_helper
DEBUG - 2013-12-05 16:57:12 --> Helper loaded: html_helper
DEBUG - 2013-12-05 16:57:12 --> Database Driver Class Initialized
DEBUG - 2013-12-05 16:57:12 --> Session Class Initialized
DEBUG - 2013-12-05 16:57:12 --> Helper loaded: string_helper
DEBUG - 2013-12-05 16:57:12 --> Session routines successfully run
DEBUG - 2013-12-05 16:57:12 --> Form Validation Class Initialized
DEBUG - 2013-12-05 16:57:12 --> Controller Class Initialized
DEBUG - 2013-12-05 16:57:12 --> Model Class Initialized
DEBUG - 2013-12-05 16:57:12 --> Model Class Initialized
DEBUG - 2013-12-05 16:57:12 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-05 16:57:12 --> after session initialization................
INFO  - 2013-12-05 16:57:12 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 1 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-05 16:57:12 --> Final output sent to browser
DEBUG - 2013-12-05 16:57:12 --> Total execution time: 0.0510
DEBUG - 2013-12-05 17:00:54 --> Config Class Initialized
DEBUG - 2013-12-05 17:00:54 --> Hooks Class Initialized
DEBUG - 2013-12-05 17:00:54 --> Utf8 Class Initialized
DEBUG - 2013-12-05 17:00:54 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 17:00:54 --> URI Class Initialized
DEBUG - 2013-12-05 17:00:54 --> Router Class Initialized
DEBUG - 2013-12-05 17:00:54 --> Output Class Initialized
DEBUG - 2013-12-05 17:00:54 --> Security Class Initialized
DEBUG - 2013-12-05 17:00:54 --> Input Class Initialized
DEBUG - 2013-12-05 17:00:54 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 17:00:54 --> Language Class Initialized
DEBUG - 2013-12-05 17:00:54 --> Loader Class Initialized
DEBUG - 2013-12-05 17:00:54 --> Helper loaded: form_helper
DEBUG - 2013-12-05 17:00:54 --> Helper loaded: url_helper
DEBUG - 2013-12-05 17:00:54 --> Helper loaded: html_helper
DEBUG - 2013-12-05 17:00:54 --> Database Driver Class Initialized
DEBUG - 2013-12-05 17:00:54 --> Session Class Initialized
DEBUG - 2013-12-05 17:00:54 --> Helper loaded: string_helper
DEBUG - 2013-12-05 17:00:54 --> Session routines successfully run
DEBUG - 2013-12-05 17:00:54 --> Form Validation Class Initialized
DEBUG - 2013-12-05 17:00:54 --> Controller Class Initialized
DEBUG - 2013-12-05 17:00:54 --> Model Class Initialized
DEBUG - 2013-12-05 17:00:54 --> Model Class Initialized
DEBUG - 2013-12-05 17:00:54 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-05 17:00:54 --> after session initialization................
INFO  - 2013-12-05 17:00:54 --> inside rays login auth.............
DEBUG - 2013-12-05 17:00:54 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-12-05 17:00:54 --> XSS Filtering completed
DEBUG - 2013-12-05 17:00:54 --> XSS Filtering completed
INFO  - 2013-12-05 17:00:54 --> before getting the relation of member............6
INFO  - 2013-12-05 17:00:54 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-12-05 17:00:54 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-05 17:00:54 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-05 17:00:54 --> inside retrieving vacancy for member
INFO  - 2013-12-05 17:00:54 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-12-05 17:00:54 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-05 17:00:54 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-12-05 17:00:54 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-05 17:00:54 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-05 17:00:54 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-05 17:00:54 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-05 17:00:54 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-12-05 17:00:54 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-12-05 17:00:54 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
DEBUG - 2013-12-05 17:00:54 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-12-05 17:00:54 --> Final output sent to browser
DEBUG - 2013-12-05 17:00:54 --> Total execution time: 0.0770
DEBUG - 2013-12-05 17:00:54 --> Config Class Initialized
DEBUG - 2013-12-05 17:00:54 --> Hooks Class Initialized
DEBUG - 2013-12-05 17:00:54 --> Utf8 Class Initialized
DEBUG - 2013-12-05 17:00:54 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 17:00:54 --> URI Class Initialized
DEBUG - 2013-12-05 17:00:54 --> Router Class Initialized
ERROR - 2013-12-05 17:00:54 --> 404 Page Not Found --> css
DEBUG - 2013-12-05 17:00:56 --> Config Class Initialized
DEBUG - 2013-12-05 17:00:56 --> Hooks Class Initialized
DEBUG - 2013-12-05 17:00:56 --> Utf8 Class Initialized
DEBUG - 2013-12-05 17:00:56 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 17:00:56 --> URI Class Initialized
DEBUG - 2013-12-05 17:00:56 --> Router Class Initialized
DEBUG - 2013-12-05 17:00:56 --> Output Class Initialized
DEBUG - 2013-12-05 17:00:56 --> Security Class Initialized
DEBUG - 2013-12-05 17:00:56 --> Input Class Initialized
DEBUG - 2013-12-05 17:00:56 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 17:00:56 --> Language Class Initialized
DEBUG - 2013-12-05 17:00:56 --> Loader Class Initialized
DEBUG - 2013-12-05 17:00:56 --> Helper loaded: form_helper
DEBUG - 2013-12-05 17:00:56 --> Helper loaded: url_helper
DEBUG - 2013-12-05 17:00:56 --> Helper loaded: html_helper
DEBUG - 2013-12-05 17:00:56 --> Database Driver Class Initialized
DEBUG - 2013-12-05 17:00:56 --> Session Class Initialized
DEBUG - 2013-12-05 17:00:56 --> Helper loaded: string_helper
DEBUG - 2013-12-05 17:00:56 --> Session routines successfully run
DEBUG - 2013-12-05 17:00:56 --> Form Validation Class Initialized
DEBUG - 2013-12-05 17:00:56 --> Controller Class Initialized
DEBUG - 2013-12-05 17:00:56 --> Model Class Initialized
DEBUG - 2013-12-05 17:00:56 --> Model Class Initialized
DEBUG - 2013-12-05 17:00:56 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-05 17:00:56 --> after session initialization................
INFO  - 2013-12-05 17:00:56 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 1 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-05 17:00:56 --> Final output sent to browser
DEBUG - 2013-12-05 17:00:56 --> Total execution time: 0.0470
DEBUG - 2013-12-05 17:02:46 --> Config Class Initialized
DEBUG - 2013-12-05 17:02:46 --> Hooks Class Initialized
DEBUG - 2013-12-05 17:02:46 --> Utf8 Class Initialized
DEBUG - 2013-12-05 17:02:46 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 17:02:46 --> URI Class Initialized
DEBUG - 2013-12-05 17:02:46 --> Router Class Initialized
DEBUG - 2013-12-05 17:02:46 --> No URI present. Default controller set.
DEBUG - 2013-12-05 17:02:46 --> Output Class Initialized
DEBUG - 2013-12-05 17:02:46 --> Security Class Initialized
DEBUG - 2013-12-05 17:02:46 --> Input Class Initialized
DEBUG - 2013-12-05 17:02:46 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 17:02:46 --> Language Class Initialized
DEBUG - 2013-12-05 17:02:46 --> Loader Class Initialized
DEBUG - 2013-12-05 17:02:46 --> Helper loaded: form_helper
DEBUG - 2013-12-05 17:02:46 --> Helper loaded: url_helper
DEBUG - 2013-12-05 17:02:46 --> Helper loaded: html_helper
DEBUG - 2013-12-05 17:02:46 --> Database Driver Class Initialized
DEBUG - 2013-12-05 17:02:46 --> Session Class Initialized
DEBUG - 2013-12-05 17:02:46 --> Helper loaded: string_helper
DEBUG - 2013-12-05 17:02:46 --> A session cookie was not found.
DEBUG - 2013-12-05 17:02:46 --> Session routines successfully run
DEBUG - 2013-12-05 17:02:46 --> Form Validation Class Initialized
DEBUG - 2013-12-05 17:02:46 --> Controller Class Initialized
INFO  - 2013-12-05 17:02:46 --> the form message==>
INFO  - 2013-12-05 17:02:46 --> The session id is ========>5f11d477ffff927d8031ad5999af4e5f and the member id is =======>
INFO  - 2013-12-05 17:02:46 --> after the retrieving session list.................//////////
DEBUG - 2013-12-05 17:02:46 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-12-05 17:02:46 --> Final output sent to browser
DEBUG - 2013-12-05 17:02:46 --> Total execution time: 0.0370
DEBUG - 2013-12-05 17:02:51 --> Config Class Initialized
DEBUG - 2013-12-05 17:02:51 --> Hooks Class Initialized
DEBUG - 2013-12-05 17:02:51 --> Utf8 Class Initialized
DEBUG - 2013-12-05 17:02:51 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 17:02:51 --> URI Class Initialized
DEBUG - 2013-12-05 17:02:51 --> Router Class Initialized
DEBUG - 2013-12-05 17:02:51 --> Output Class Initialized
DEBUG - 2013-12-05 17:02:51 --> Security Class Initialized
DEBUG - 2013-12-05 17:02:51 --> Input Class Initialized
DEBUG - 2013-12-05 17:02:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 17:02:51 --> Language Class Initialized
DEBUG - 2013-12-05 17:02:51 --> Loader Class Initialized
DEBUG - 2013-12-05 17:02:51 --> Helper loaded: form_helper
DEBUG - 2013-12-05 17:02:51 --> Helper loaded: url_helper
DEBUG - 2013-12-05 17:02:51 --> Helper loaded: html_helper
DEBUG - 2013-12-05 17:02:51 --> Database Driver Class Initialized
DEBUG - 2013-12-05 17:02:51 --> Session Class Initialized
DEBUG - 2013-12-05 17:02:51 --> Helper loaded: string_helper
DEBUG - 2013-12-05 17:02:51 --> Session routines successfully run
DEBUG - 2013-12-05 17:02:51 --> Form Validation Class Initialized
DEBUG - 2013-12-05 17:02:51 --> Controller Class Initialized
DEBUG - 2013-12-05 17:02:51 --> Model Class Initialized
DEBUG - 2013-12-05 17:02:51 --> Model Class Initialized
DEBUG - 2013-12-05 17:02:51 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-05 17:02:51 --> after session initialization................
INFO  - 2013-12-05 17:02:51 --> inside rays login auth.............
DEBUG - 2013-12-05 17:02:51 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-12-05 17:02:51 --> XSS Filtering completed
INFO  - 2013-12-05 17:02:51 --> inside rays login auth.............
DEBUG - 2013-12-05 17:02:51 --> Config Class Initialized
DEBUG - 2013-12-05 17:02:51 --> Hooks Class Initialized
DEBUG - 2013-12-05 17:02:51 --> Utf8 Class Initialized
DEBUG - 2013-12-05 17:02:51 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 17:02:51 --> URI Class Initialized
DEBUG - 2013-12-05 17:02:51 --> Router Class Initialized
DEBUG - 2013-12-05 17:02:51 --> No URI present. Default controller set.
DEBUG - 2013-12-05 17:02:51 --> Output Class Initialized
DEBUG - 2013-12-05 17:02:51 --> Security Class Initialized
DEBUG - 2013-12-05 17:02:51 --> Input Class Initialized
DEBUG - 2013-12-05 17:02:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 17:02:51 --> Language Class Initialized
DEBUG - 2013-12-05 17:02:51 --> Loader Class Initialized
DEBUG - 2013-12-05 17:02:51 --> Helper loaded: form_helper
DEBUG - 2013-12-05 17:02:51 --> Helper loaded: url_helper
DEBUG - 2013-12-05 17:02:51 --> Helper loaded: html_helper
DEBUG - 2013-12-05 17:02:51 --> Database Driver Class Initialized
DEBUG - 2013-12-05 17:02:51 --> Session Class Initialized
DEBUG - 2013-12-05 17:02:51 --> Helper loaded: string_helper
DEBUG - 2013-12-05 17:02:51 --> Session routines successfully run
DEBUG - 2013-12-05 17:02:51 --> Form Validation Class Initialized
DEBUG - 2013-12-05 17:02:51 --> Controller Class Initialized
INFO  - 2013-12-05 17:02:51 --> the form message==>
INFO  - 2013-12-05 17:02:51 --> The session id is ========>5f11d477ffff927d8031ad5999af4e5f and the member id is =======>
INFO  - 2013-12-05 17:02:51 --> after the retrieving session list.................//////////
DEBUG - 2013-12-05 17:02:51 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-12-05 17:02:51 --> Final output sent to browser
DEBUG - 2013-12-05 17:02:51 --> Total execution time: 0.0450
DEBUG - 2013-12-05 17:03:05 --> Config Class Initialized
DEBUG - 2013-12-05 17:03:05 --> Hooks Class Initialized
DEBUG - 2013-12-05 17:03:05 --> Utf8 Class Initialized
DEBUG - 2013-12-05 17:03:05 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 17:03:05 --> URI Class Initialized
DEBUG - 2013-12-05 17:03:05 --> Router Class Initialized
DEBUG - 2013-12-05 17:03:05 --> Output Class Initialized
DEBUG - 2013-12-05 17:03:05 --> Security Class Initialized
DEBUG - 2013-12-05 17:03:05 --> Input Class Initialized
DEBUG - 2013-12-05 17:03:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 17:03:05 --> Language Class Initialized
DEBUG - 2013-12-05 17:03:05 --> Loader Class Initialized
DEBUG - 2013-12-05 17:03:05 --> Helper loaded: form_helper
DEBUG - 2013-12-05 17:03:05 --> Helper loaded: url_helper
DEBUG - 2013-12-05 17:03:05 --> Helper loaded: html_helper
DEBUG - 2013-12-05 17:03:05 --> Database Driver Class Initialized
DEBUG - 2013-12-05 17:03:05 --> Config Class Initialized
DEBUG - 2013-12-05 17:03:05 --> Hooks Class Initialized
DEBUG - 2013-12-05 17:03:05 --> Utf8 Class Initialized
DEBUG - 2013-12-05 17:03:05 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 17:03:05 --> URI Class Initialized
DEBUG - 2013-12-05 17:03:05 --> Router Class Initialized
DEBUG - 2013-12-05 17:03:05 --> Output Class Initialized
DEBUG - 2013-12-05 17:03:05 --> Security Class Initialized
DEBUG - 2013-12-05 17:03:05 --> Session Class Initialized
DEBUG - 2013-12-05 17:03:05 --> Input Class Initialized
DEBUG - 2013-12-05 17:03:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 17:03:05 --> Language Class Initialized
DEBUG - 2013-12-05 17:03:05 --> Loader Class Initialized
DEBUG - 2013-12-05 17:03:05 --> Helper loaded: form_helper
DEBUG - 2013-12-05 17:03:05 --> Helper loaded: url_helper
DEBUG - 2013-12-05 17:03:05 --> Helper loaded: html_helper
DEBUG - 2013-12-05 17:03:05 --> Helper loaded: string_helper
DEBUG - 2013-12-05 17:03:05 --> Database Driver Class Initialized
DEBUG - 2013-12-05 17:03:05 --> Session routines successfully run
DEBUG - 2013-12-05 17:03:05 --> Session Class Initialized
DEBUG - 2013-12-05 17:03:05 --> Form Validation Class Initialized
DEBUG - 2013-12-05 17:03:05 --> Controller Class Initialized
DEBUG - 2013-12-05 17:03:05 --> Helper loaded: string_helper
DEBUG - 2013-12-05 17:03:05 --> Session routines successfully run
DEBUG - 2013-12-05 17:03:05 --> Model Class Initialized
DEBUG - 2013-12-05 17:03:05 --> Form Validation Class Initialized
DEBUG - 2013-12-05 17:03:05 --> Controller Class Initialized
DEBUG - 2013-12-05 17:03:05 --> Model Class Initialized
DEBUG - 2013-12-05 17:03:05 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-05 17:03:05 --> after session initialization................
DEBUG - 2013-12-05 17:03:05 --> Model Class Initialized
INFO  - 2013-12-05 17:03:05 --> inside rays login auth.............
DEBUG - 2013-12-05 17:03:05 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-12-05 17:03:05 --> XSS Filtering completed
DEBUG - 2013-12-05 17:03:05 --> XSS Filtering completed
DEBUG - 2013-12-05 17:03:05 --> Model Class Initialized
DEBUG - 2013-12-05 17:03:05 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-05 17:03:05 --> after session initialization................
INFO  - 2013-12-05 17:03:05 --> inside rays login auth.............
INFO  - 2013-12-05 17:03:05 --> inside rays login auth.............
DEBUG - 2013-12-05 17:03:05 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-12-05 17:03:05 --> XSS Filtering completed
DEBUG - 2013-12-05 17:03:05 --> XSS Filtering completed
INFO  - 2013-12-05 17:03:05 --> inside rays login auth.............
DEBUG - 2013-12-05 17:03:05 --> Config Class Initialized
DEBUG - 2013-12-05 17:03:05 --> Hooks Class Initialized
DEBUG - 2013-12-05 17:03:05 --> Utf8 Class Initialized
DEBUG - 2013-12-05 17:03:05 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 17:03:05 --> URI Class Initialized
DEBUG - 2013-12-05 17:03:05 --> Router Class Initialized
DEBUG - 2013-12-05 17:03:05 --> No URI present. Default controller set.
DEBUG - 2013-12-05 17:03:05 --> Output Class Initialized
DEBUG - 2013-12-05 17:03:05 --> Security Class Initialized
DEBUG - 2013-12-05 17:03:05 --> Input Class Initialized
DEBUG - 2013-12-05 17:03:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 17:03:05 --> Language Class Initialized
DEBUG - 2013-12-05 17:03:05 --> Loader Class Initialized
DEBUG - 2013-12-05 17:03:05 --> Helper loaded: form_helper
DEBUG - 2013-12-05 17:03:05 --> Helper loaded: url_helper
DEBUG - 2013-12-05 17:03:05 --> Helper loaded: html_helper
DEBUG - 2013-12-05 17:03:05 --> Database Driver Class Initialized
DEBUG - 2013-12-05 17:03:05 --> Session Class Initialized
DEBUG - 2013-12-05 17:03:05 --> Helper loaded: string_helper
DEBUG - 2013-12-05 17:03:05 --> Session routines successfully run
DEBUG - 2013-12-05 17:03:05 --> Form Validation Class Initialized
DEBUG - 2013-12-05 17:03:05 --> Controller Class Initialized
INFO  - 2013-12-05 17:03:05 --> the form message==>
INFO  - 2013-12-05 17:03:05 --> The session id is ========>5f11d477ffff927d8031ad5999af4e5f and the member id is =======>
INFO  - 2013-12-05 17:03:05 --> after the retrieving session list.................//////////
DEBUG - 2013-12-05 17:03:05 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-12-05 17:03:05 --> Final output sent to browser
DEBUG - 2013-12-05 17:03:05 --> Total execution time: 0.0420
DEBUG - 2013-12-05 17:03:14 --> Config Class Initialized
DEBUG - 2013-12-05 17:03:14 --> Hooks Class Initialized
DEBUG - 2013-12-05 17:03:14 --> Utf8 Class Initialized
DEBUG - 2013-12-05 17:03:14 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 17:03:14 --> URI Class Initialized
DEBUG - 2013-12-05 17:03:14 --> Router Class Initialized
DEBUG - 2013-12-05 17:03:14 --> Output Class Initialized
DEBUG - 2013-12-05 17:03:14 --> Security Class Initialized
DEBUG - 2013-12-05 17:03:14 --> Input Class Initialized
DEBUG - 2013-12-05 17:03:14 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 17:03:14 --> Language Class Initialized
DEBUG - 2013-12-05 17:03:14 --> Loader Class Initialized
DEBUG - 2013-12-05 17:03:14 --> Helper loaded: form_helper
DEBUG - 2013-12-05 17:03:14 --> Helper loaded: url_helper
DEBUG - 2013-12-05 17:03:14 --> Helper loaded: html_helper
DEBUG - 2013-12-05 17:03:14 --> Database Driver Class Initialized
DEBUG - 2013-12-05 17:03:14 --> Session Class Initialized
DEBUG - 2013-12-05 17:03:14 --> Helper loaded: string_helper
DEBUG - 2013-12-05 17:03:14 --> Session routines successfully run
DEBUG - 2013-12-05 17:03:14 --> Form Validation Class Initialized
DEBUG - 2013-12-05 17:03:14 --> Controller Class Initialized
DEBUG - 2013-12-05 17:03:14 --> Model Class Initialized
DEBUG - 2013-12-05 17:03:14 --> Model Class Initialized
DEBUG - 2013-12-05 17:03:14 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-05 17:03:14 --> after session initialization................
INFO  - 2013-12-05 17:03:14 --> inside rays login auth.............
DEBUG - 2013-12-05 17:03:14 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-12-05 17:03:14 --> XSS Filtering completed
DEBUG - 2013-12-05 17:03:14 --> XSS Filtering completed
INFO  - 2013-12-05 17:03:14 --> before getting the relation of member............6
INFO  - 2013-12-05 17:03:14 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-12-05 17:03:14 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-05 17:03:14 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-05 17:03:14 --> inside retrieving vacancy for member
INFO  - 2013-12-05 17:03:14 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-12-05 17:03:14 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-05 17:03:14 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-12-05 17:03:14 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-05 17:03:14 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-05 17:03:14 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-05 17:03:14 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-05 17:03:14 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-12-05 17:03:14 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-12-05 17:03:14 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
DEBUG - 2013-12-05 17:03:14 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-12-05 17:03:14 --> Final output sent to browser
DEBUG - 2013-12-05 17:03:14 --> Total execution time: 0.0730
DEBUG - 2013-12-05 17:03:14 --> Config Class Initialized
DEBUG - 2013-12-05 17:03:14 --> Hooks Class Initialized
DEBUG - 2013-12-05 17:03:14 --> Utf8 Class Initialized
DEBUG - 2013-12-05 17:03:14 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 17:03:14 --> URI Class Initialized
DEBUG - 2013-12-05 17:03:14 --> Router Class Initialized
ERROR - 2013-12-05 17:03:14 --> 404 Page Not Found --> css
DEBUG - 2013-12-05 17:03:30 --> Config Class Initialized
DEBUG - 2013-12-05 17:03:30 --> Hooks Class Initialized
DEBUG - 2013-12-05 17:03:30 --> Utf8 Class Initialized
DEBUG - 2013-12-05 17:03:30 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 17:03:30 --> URI Class Initialized
DEBUG - 2013-12-05 17:03:30 --> Router Class Initialized
DEBUG - 2013-12-05 17:03:30 --> Output Class Initialized
DEBUG - 2013-12-05 17:03:30 --> Security Class Initialized
DEBUG - 2013-12-05 17:03:30 --> Input Class Initialized
DEBUG - 2013-12-05 17:03:30 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 17:03:30 --> Language Class Initialized
DEBUG - 2013-12-05 17:03:30 --> Config Class Initialized
DEBUG - 2013-12-05 17:03:30 --> Hooks Class Initialized
DEBUG - 2013-12-05 17:03:30 --> Utf8 Class Initialized
DEBUG - 2013-12-05 17:03:30 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 17:03:30 --> Loader Class Initialized
DEBUG - 2013-12-05 17:03:30 --> URI Class Initialized
DEBUG - 2013-12-05 17:03:30 --> Helper loaded: form_helper
DEBUG - 2013-12-05 17:03:30 --> Router Class Initialized
DEBUG - 2013-12-05 17:03:30 --> Config Class Initialized
DEBUG - 2013-12-05 17:03:30 --> Hooks Class Initialized
DEBUG - 2013-12-05 17:03:30 --> Helper loaded: url_helper
DEBUG - 2013-12-05 17:03:30 --> Utf8 Class Initialized
DEBUG - 2013-12-05 17:03:30 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 17:03:30 --> Helper loaded: html_helper
DEBUG - 2013-12-05 17:03:30 --> Output Class Initialized
DEBUG - 2013-12-05 17:03:30 --> URI Class Initialized
DEBUG - 2013-12-05 17:03:30 --> Router Class Initialized
DEBUG - 2013-12-05 17:03:30 --> Security Class Initialized
DEBUG - 2013-12-05 17:03:30 --> Input Class Initialized
DEBUG - 2013-12-05 17:03:30 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 17:03:30 --> Output Class Initialized
DEBUG - 2013-12-05 17:03:30 --> Language Class Initialized
DEBUG - 2013-12-05 17:03:30 --> Security Class Initialized
DEBUG - 2013-12-05 17:03:30 --> Input Class Initialized
DEBUG - 2013-12-05 17:03:30 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 17:03:30 --> Language Class Initialized
DEBUG - 2013-12-05 17:03:30 --> Database Driver Class Initialized
DEBUG - 2013-12-05 17:03:30 --> Loader Class Initialized
DEBUG - 2013-12-05 17:03:30 --> Loader Class Initialized
DEBUG - 2013-12-05 17:03:30 --> Helper loaded: form_helper
DEBUG - 2013-12-05 17:03:30 --> Session Class Initialized
DEBUG - 2013-12-05 17:03:30 --> Helper loaded: url_helper
DEBUG - 2013-12-05 17:03:30 --> Helper loaded: string_helper
DEBUG - 2013-12-05 17:03:30 --> Session routines successfully run
DEBUG - 2013-12-05 17:03:30 --> Helper loaded: form_helper
DEBUG - 2013-12-05 17:03:30 --> Helper loaded: html_helper
DEBUG - 2013-12-05 17:03:30 --> Form Validation Class Initialized
DEBUG - 2013-12-05 17:03:30 --> Helper loaded: url_helper
DEBUG - 2013-12-05 17:03:30 --> Controller Class Initialized
DEBUG - 2013-12-05 17:03:30 --> Helper loaded: html_helper
DEBUG - 2013-12-05 17:03:30 --> Model Class Initialized
DEBUG - 2013-12-05 17:03:30 --> Model Class Initialized
DEBUG - 2013-12-05 17:03:30 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-05 17:03:30 --> after session initialization................
DEBUG - 2013-12-05 17:03:30 --> Database Driver Class Initialized
DEBUG - 2013-12-05 17:03:30 --> Session Class Initialized
DEBUG - 2013-12-05 17:03:30 --> Helper loaded: string_helper
DEBUG - 2013-12-05 17:03:30 --> Session routines successfully run
DEBUG - 2013-12-05 17:03:30 --> Database Driver Class Initialized
DEBUG - 2013-12-05 17:03:30 --> Form Validation Class Initialized
DEBUG - 2013-12-05 17:03:30 --> Controller Class Initialized
DEBUG - 2013-12-05 17:03:30 --> Model Class Initialized
INFO  - 2013-12-05 17:03:30 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 1 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-05 17:03:30 --> Model Class Initialized
DEBUG - 2013-12-05 17:03:30 --> Final output sent to browser
DEBUG - 2013-12-05 17:03:30 --> Total execution time: 0.0590
DEBUG - 2013-12-05 17:03:30 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-05 17:03:30 --> after session initialization................
INFO  - 2013-12-05 17:03:30 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 1 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-05 17:03:30 --> Final output sent to browser
DEBUG - 2013-12-05 17:03:30 --> Total execution time: 0.0500
DEBUG - 2013-12-05 17:03:31 --> Session Class Initialized
DEBUG - 2013-12-05 17:03:31 --> Helper loaded: string_helper
DEBUG - 2013-12-05 17:03:31 --> Session routines successfully run
DEBUG - 2013-12-05 17:03:31 --> Form Validation Class Initialized
DEBUG - 2013-12-05 17:03:31 --> Controller Class Initialized
DEBUG - 2013-12-05 17:03:31 --> Model Class Initialized
DEBUG - 2013-12-05 17:03:31 --> Model Class Initialized
DEBUG - 2013-12-05 17:03:31 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-05 17:03:31 --> after session initialization................
INFO  - 2013-12-05 17:03:31 --> inside rays login auth.............
INFO  - 2013-12-05 17:03:31 --> inside rays login auth.............
DEBUG - 2013-12-05 17:03:31 --> Config Class Initialized
DEBUG - 2013-12-05 17:03:31 --> Hooks Class Initialized
DEBUG - 2013-12-05 17:03:31 --> Utf8 Class Initialized
DEBUG - 2013-12-05 17:03:31 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 17:03:31 --> URI Class Initialized
DEBUG - 2013-12-05 17:03:31 --> Router Class Initialized
DEBUG - 2013-12-05 17:03:31 --> No URI present. Default controller set.
DEBUG - 2013-12-05 17:03:31 --> Output Class Initialized
DEBUG - 2013-12-05 17:03:31 --> Security Class Initialized
DEBUG - 2013-12-05 17:03:31 --> Input Class Initialized
DEBUG - 2013-12-05 17:03:31 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 17:03:31 --> Language Class Initialized
DEBUG - 2013-12-05 17:03:31 --> Loader Class Initialized
DEBUG - 2013-12-05 17:03:31 --> Helper loaded: form_helper
DEBUG - 2013-12-05 17:03:31 --> Helper loaded: url_helper
DEBUG - 2013-12-05 17:03:31 --> Helper loaded: html_helper
DEBUG - 2013-12-05 17:03:31 --> Database Driver Class Initialized
DEBUG - 2013-12-05 17:03:31 --> Session Class Initialized
DEBUG - 2013-12-05 17:03:31 --> Helper loaded: string_helper
DEBUG - 2013-12-05 17:03:31 --> Session routines successfully run
DEBUG - 2013-12-05 17:03:31 --> Form Validation Class Initialized
DEBUG - 2013-12-05 17:03:31 --> Controller Class Initialized
INFO  - 2013-12-05 17:03:31 --> the form message==>
INFO  - 2013-12-05 17:03:31 --> The session id is ========>fc0dd0ec52de314706abec29b5caffce and the member id is =======>
INFO  - 2013-12-05 17:03:31 --> after the retrieving session list.................//////////
DEBUG - 2013-12-05 17:03:31 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-12-05 17:03:31 --> Final output sent to browser
DEBUG - 2013-12-05 17:03:31 --> Total execution time: 0.0410
DEBUG - 2013-12-05 17:03:36 --> Config Class Initialized
DEBUG - 2013-12-05 17:03:36 --> Hooks Class Initialized
DEBUG - 2013-12-05 17:03:36 --> Utf8 Class Initialized
DEBUG - 2013-12-05 17:03:36 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 17:03:36 --> URI Class Initialized
DEBUG - 2013-12-05 17:03:36 --> Router Class Initialized
DEBUG - 2013-12-05 17:03:36 --> Output Class Initialized
DEBUG - 2013-12-05 17:03:36 --> Security Class Initialized
DEBUG - 2013-12-05 17:03:36 --> Input Class Initialized
DEBUG - 2013-12-05 17:03:36 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 17:03:36 --> Language Class Initialized
DEBUG - 2013-12-05 17:03:36 --> Loader Class Initialized
DEBUG - 2013-12-05 17:03:36 --> Helper loaded: form_helper
DEBUG - 2013-12-05 17:03:36 --> Helper loaded: url_helper
DEBUG - 2013-12-05 17:03:36 --> Helper loaded: html_helper
DEBUG - 2013-12-05 17:03:36 --> Database Driver Class Initialized
DEBUG - 2013-12-05 17:03:36 --> Session Class Initialized
DEBUG - 2013-12-05 17:03:36 --> Helper loaded: string_helper
DEBUG - 2013-12-05 17:03:36 --> Session routines successfully run
DEBUG - 2013-12-05 17:03:36 --> Form Validation Class Initialized
DEBUG - 2013-12-05 17:03:36 --> Controller Class Initialized
DEBUG - 2013-12-05 17:03:36 --> Model Class Initialized
DEBUG - 2013-12-05 17:03:36 --> Model Class Initialized
DEBUG - 2013-12-05 17:03:36 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-05 17:03:36 --> after session initialization................
INFO  - 2013-12-05 17:03:36 --> inside rays login auth.............
INFO  - 2013-12-05 17:03:36 --> inside rays login auth.............
DEBUG - 2013-12-05 17:03:36 --> Config Class Initialized
DEBUG - 2013-12-05 17:03:36 --> Hooks Class Initialized
DEBUG - 2013-12-05 17:03:36 --> Utf8 Class Initialized
DEBUG - 2013-12-05 17:03:36 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 17:03:36 --> URI Class Initialized
DEBUG - 2013-12-05 17:03:36 --> Router Class Initialized
DEBUG - 2013-12-05 17:03:36 --> No URI present. Default controller set.
DEBUG - 2013-12-05 17:03:36 --> Output Class Initialized
DEBUG - 2013-12-05 17:03:36 --> Security Class Initialized
DEBUG - 2013-12-05 17:03:36 --> Input Class Initialized
DEBUG - 2013-12-05 17:03:36 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 17:03:36 --> Language Class Initialized
DEBUG - 2013-12-05 17:03:36 --> Loader Class Initialized
DEBUG - 2013-12-05 17:03:36 --> Helper loaded: form_helper
DEBUG - 2013-12-05 17:03:36 --> Helper loaded: url_helper
DEBUG - 2013-12-05 17:03:36 --> Helper loaded: html_helper
DEBUG - 2013-12-05 17:03:36 --> Database Driver Class Initialized
DEBUG - 2013-12-05 17:03:36 --> Session Class Initialized
DEBUG - 2013-12-05 17:03:36 --> Helper loaded: string_helper
DEBUG - 2013-12-05 17:03:36 --> Session routines successfully run
DEBUG - 2013-12-05 17:03:36 --> Form Validation Class Initialized
DEBUG - 2013-12-05 17:03:36 --> Controller Class Initialized
INFO  - 2013-12-05 17:03:36 --> the form message==>
INFO  - 2013-12-05 17:03:36 --> The session id is ========>e328d891ec924768e25696cdb97a75c7 and the member id is =======>
INFO  - 2013-12-05 17:03:36 --> after the retrieving session list.................//////////
DEBUG - 2013-12-05 17:03:36 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-12-05 17:03:36 --> Final output sent to browser
DEBUG - 2013-12-05 17:03:36 --> Total execution time: 0.0350
DEBUG - 2013-12-05 17:03:57 --> Config Class Initialized
DEBUG - 2013-12-05 17:03:57 --> Hooks Class Initialized
DEBUG - 2013-12-05 17:03:57 --> Utf8 Class Initialized
DEBUG - 2013-12-05 17:03:57 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 17:03:57 --> URI Class Initialized
DEBUG - 2013-12-05 17:03:57 --> Router Class Initialized
DEBUG - 2013-12-05 17:03:57 --> Output Class Initialized
DEBUG - 2013-12-05 17:03:57 --> Security Class Initialized
DEBUG - 2013-12-05 17:03:57 --> Input Class Initialized
DEBUG - 2013-12-05 17:03:57 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 17:03:57 --> Language Class Initialized
DEBUG - 2013-12-05 17:03:57 --> Loader Class Initialized
DEBUG - 2013-12-05 17:03:57 --> Helper loaded: form_helper
DEBUG - 2013-12-05 17:03:57 --> Helper loaded: url_helper
DEBUG - 2013-12-05 17:03:57 --> Helper loaded: html_helper
DEBUG - 2013-12-05 17:03:57 --> Database Driver Class Initialized
DEBUG - 2013-12-05 17:03:57 --> Session Class Initialized
DEBUG - 2013-12-05 17:03:57 --> Helper loaded: string_helper
DEBUG - 2013-12-05 17:03:57 --> Session routines successfully run
DEBUG - 2013-12-05 17:03:57 --> Form Validation Class Initialized
DEBUG - 2013-12-05 17:03:57 --> Controller Class Initialized
DEBUG - 2013-12-05 17:03:57 --> Model Class Initialized
DEBUG - 2013-12-05 17:03:57 --> Model Class Initialized
DEBUG - 2013-12-05 17:03:57 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-05 17:03:57 --> after session initialization................
INFO  - 2013-12-05 17:03:57 --> inside rays login auth.............
DEBUG - 2013-12-05 17:03:57 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-12-05 17:03:57 --> XSS Filtering completed
DEBUG - 2013-12-05 17:03:57 --> XSS Filtering completed
INFO  - 2013-12-05 17:03:57 --> inside rays login auth.............
DEBUG - 2013-12-05 17:03:57 --> Config Class Initialized
DEBUG - 2013-12-05 17:03:57 --> Hooks Class Initialized
DEBUG - 2013-12-05 17:03:58 --> Utf8 Class Initialized
DEBUG - 2013-12-05 17:03:58 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 17:03:58 --> URI Class Initialized
DEBUG - 2013-12-05 17:03:58 --> Router Class Initialized
DEBUG - 2013-12-05 17:03:58 --> No URI present. Default controller set.
DEBUG - 2013-12-05 17:03:58 --> Output Class Initialized
DEBUG - 2013-12-05 17:03:58 --> Security Class Initialized
DEBUG - 2013-12-05 17:03:58 --> Input Class Initialized
DEBUG - 2013-12-05 17:03:58 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 17:03:58 --> Language Class Initialized
DEBUG - 2013-12-05 17:03:58 --> Loader Class Initialized
DEBUG - 2013-12-05 17:03:58 --> Helper loaded: form_helper
DEBUG - 2013-12-05 17:03:58 --> Helper loaded: url_helper
DEBUG - 2013-12-05 17:03:58 --> Helper loaded: html_helper
DEBUG - 2013-12-05 17:03:58 --> Database Driver Class Initialized
DEBUG - 2013-12-05 17:03:58 --> Session Class Initialized
DEBUG - 2013-12-05 17:03:58 --> Helper loaded: string_helper
DEBUG - 2013-12-05 17:03:58 --> Session routines successfully run
DEBUG - 2013-12-05 17:03:58 --> Form Validation Class Initialized
DEBUG - 2013-12-05 17:03:58 --> Controller Class Initialized
INFO  - 2013-12-05 17:03:58 --> the form message==>
INFO  - 2013-12-05 17:03:58 --> The session id is ========>e328d891ec924768e25696cdb97a75c7 and the member id is =======>
INFO  - 2013-12-05 17:03:58 --> after the retrieving session list.................//////////
DEBUG - 2013-12-05 17:03:58 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-12-05 17:03:58 --> Final output sent to browser
DEBUG - 2013-12-05 17:03:58 --> Total execution time: 0.0360
DEBUG - 2013-12-05 17:04:23 --> Config Class Initialized
DEBUG - 2013-12-05 17:04:23 --> Hooks Class Initialized
DEBUG - 2013-12-05 17:04:23 --> Utf8 Class Initialized
DEBUG - 2013-12-05 17:04:23 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 17:04:23 --> URI Class Initialized
DEBUG - 2013-12-05 17:04:23 --> Router Class Initialized
DEBUG - 2013-12-05 17:04:23 --> Output Class Initialized
DEBUG - 2013-12-05 17:04:23 --> Security Class Initialized
DEBUG - 2013-12-05 17:04:23 --> Input Class Initialized
DEBUG - 2013-12-05 17:04:23 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 17:04:23 --> Language Class Initialized
DEBUG - 2013-12-05 17:04:23 --> Loader Class Initialized
DEBUG - 2013-12-05 17:04:23 --> Helper loaded: form_helper
DEBUG - 2013-12-05 17:04:23 --> Helper loaded: url_helper
DEBUG - 2013-12-05 17:04:23 --> Helper loaded: html_helper
DEBUG - 2013-12-05 17:04:23 --> Database Driver Class Initialized
DEBUG - 2013-12-05 17:04:23 --> Session Class Initialized
DEBUG - 2013-12-05 17:04:23 --> Helper loaded: string_helper
DEBUG - 2013-12-05 17:04:23 --> Session routines successfully run
DEBUG - 2013-12-05 17:04:23 --> Form Validation Class Initialized
DEBUG - 2013-12-05 17:04:23 --> Controller Class Initialized
DEBUG - 2013-12-05 17:04:23 --> Model Class Initialized
DEBUG - 2013-12-05 17:04:23 --> Model Class Initialized
DEBUG - 2013-12-05 17:04:23 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-05 17:04:23 --> after session initialization................
INFO  - 2013-12-05 17:04:23 --> inside rays login auth.............
DEBUG - 2013-12-05 17:04:23 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-12-05 17:04:23 --> XSS Filtering completed
DEBUG - 2013-12-05 17:04:23 --> XSS Filtering completed
INFO  - 2013-12-05 17:04:23 --> before getting the relation of member............6
INFO  - 2013-12-05 17:04:23 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-12-05 17:04:23 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-05 17:04:23 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-05 17:04:23 --> inside retrieving vacancy for member
INFO  - 2013-12-05 17:04:23 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-12-05 17:04:23 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-05 17:04:23 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-12-05 17:04:23 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-05 17:04:23 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-05 17:04:23 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-05 17:04:23 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-05 17:04:23 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-12-05 17:04:23 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-12-05 17:04:23 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
DEBUG - 2013-12-05 17:04:23 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-12-05 17:04:23 --> Final output sent to browser
DEBUG - 2013-12-05 17:04:23 --> Total execution time: 0.0710
DEBUG - 2013-12-05 17:04:23 --> Config Class Initialized
DEBUG - 2013-12-05 17:04:23 --> Hooks Class Initialized
DEBUG - 2013-12-05 17:04:23 --> Utf8 Class Initialized
DEBUG - 2013-12-05 17:04:23 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 17:04:23 --> URI Class Initialized
DEBUG - 2013-12-05 17:04:23 --> Router Class Initialized
ERROR - 2013-12-05 17:04:23 --> 404 Page Not Found --> css
DEBUG - 2013-12-05 17:04:28 --> Config Class Initialized
DEBUG - 2013-12-05 17:04:28 --> Hooks Class Initialized
DEBUG - 2013-12-05 17:04:28 --> Utf8 Class Initialized
DEBUG - 2013-12-05 17:04:28 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 17:04:28 --> URI Class Initialized
DEBUG - 2013-12-05 17:04:28 --> Router Class Initialized
DEBUG - 2013-12-05 17:04:28 --> Output Class Initialized
DEBUG - 2013-12-05 17:04:28 --> Security Class Initialized
DEBUG - 2013-12-05 17:04:28 --> Input Class Initialized
DEBUG - 2013-12-05 17:04:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 17:04:28 --> Language Class Initialized
DEBUG - 2013-12-05 17:04:28 --> Loader Class Initialized
DEBUG - 2013-12-05 17:04:28 --> Helper loaded: form_helper
DEBUG - 2013-12-05 17:04:28 --> Helper loaded: url_helper
DEBUG - 2013-12-05 17:04:28 --> Helper loaded: html_helper
DEBUG - 2013-12-05 17:04:28 --> Database Driver Class Initialized
DEBUG - 2013-12-05 17:04:28 --> Session Class Initialized
DEBUG - 2013-12-05 17:04:28 --> Helper loaded: string_helper
DEBUG - 2013-12-05 17:04:28 --> Session routines successfully run
DEBUG - 2013-12-05 17:04:28 --> Form Validation Class Initialized
DEBUG - 2013-12-05 17:04:28 --> Controller Class Initialized
DEBUG - 2013-12-05 17:04:28 --> Model Class Initialized
DEBUG - 2013-12-05 17:04:28 --> Model Class Initialized
DEBUG - 2013-12-05 17:04:28 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-05 17:04:28 --> after session initialization................
INFO  - 2013-12-05 17:04:28 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 1 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-05 17:04:28 --> Final output sent to browser
DEBUG - 2013-12-05 17:04:28 --> Total execution time: 0.0440
DEBUG - 2013-12-05 17:04:43 --> Config Class Initialized
DEBUG - 2013-12-05 17:04:43 --> Hooks Class Initialized
DEBUG - 2013-12-05 17:04:43 --> Utf8 Class Initialized
DEBUG - 2013-12-05 17:04:43 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 17:04:43 --> URI Class Initialized
DEBUG - 2013-12-05 17:04:43 --> Router Class Initialized
DEBUG - 2013-12-05 17:04:43 --> Output Class Initialized
DEBUG - 2013-12-05 17:04:43 --> Security Class Initialized
DEBUG - 2013-12-05 17:04:43 --> Input Class Initialized
DEBUG - 2013-12-05 17:04:43 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 17:04:43 --> Language Class Initialized
DEBUG - 2013-12-05 17:04:43 --> Loader Class Initialized
DEBUG - 2013-12-05 17:04:43 --> Helper loaded: form_helper
DEBUG - 2013-12-05 17:04:43 --> Helper loaded: url_helper
DEBUG - 2013-12-05 17:04:43 --> Helper loaded: html_helper
DEBUG - 2013-12-05 17:04:43 --> Database Driver Class Initialized
DEBUG - 2013-12-05 17:04:43 --> Session Class Initialized
DEBUG - 2013-12-05 17:04:43 --> Helper loaded: string_helper
DEBUG - 2013-12-05 17:04:43 --> Session routines successfully run
DEBUG - 2013-12-05 17:04:43 --> Form Validation Class Initialized
DEBUG - 2013-12-05 17:04:43 --> Controller Class Initialized
DEBUG - 2013-12-05 17:04:43 --> Model Class Initialized
DEBUG - 2013-12-05 17:04:43 --> Model Class Initialized
DEBUG - 2013-12-05 17:04:43 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-05 17:04:43 --> after session initialization................
INFO  - 2013-12-05 17:04:43 --> inside rays login auth.............
DEBUG - 2013-12-05 17:04:43 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-12-05 17:04:43 --> XSS Filtering completed
DEBUG - 2013-12-05 17:04:43 --> XSS Filtering completed
INFO  - 2013-12-05 17:04:43 --> before getting the relation of member............6
INFO  - 2013-12-05 17:04:43 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-12-05 17:04:43 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-05 17:04:43 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-05 17:04:43 --> inside retrieving vacancy for member
INFO  - 2013-12-05 17:04:43 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-12-05 17:04:43 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-05 17:04:43 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-12-05 17:04:43 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-05 17:04:43 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-05 17:04:43 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-05 17:04:43 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-05 17:04:43 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-12-05 17:04:43 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-12-05 17:04:43 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
DEBUG - 2013-12-05 17:04:43 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-12-05 17:04:43 --> Final output sent to browser
DEBUG - 2013-12-05 17:04:43 --> Total execution time: 0.0700
DEBUG - 2013-12-05 17:04:43 --> Config Class Initialized
DEBUG - 2013-12-05 17:04:43 --> Hooks Class Initialized
DEBUG - 2013-12-05 17:04:43 --> Utf8 Class Initialized
DEBUG - 2013-12-05 17:04:43 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 17:04:43 --> URI Class Initialized
DEBUG - 2013-12-05 17:04:43 --> Router Class Initialized
ERROR - 2013-12-05 17:04:43 --> 404 Page Not Found --> css
DEBUG - 2013-12-05 17:04:46 --> Config Class Initialized
DEBUG - 2013-12-05 17:04:46 --> Hooks Class Initialized
DEBUG - 2013-12-05 17:04:46 --> Utf8 Class Initialized
DEBUG - 2013-12-05 17:04:46 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 17:04:46 --> URI Class Initialized
DEBUG - 2013-12-05 17:04:46 --> Router Class Initialized
DEBUG - 2013-12-05 17:04:46 --> Output Class Initialized
DEBUG - 2013-12-05 17:04:46 --> Security Class Initialized
DEBUG - 2013-12-05 17:04:46 --> Input Class Initialized
DEBUG - 2013-12-05 17:04:46 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 17:04:46 --> Language Class Initialized
DEBUG - 2013-12-05 17:04:46 --> Loader Class Initialized
DEBUG - 2013-12-05 17:04:46 --> Helper loaded: form_helper
DEBUG - 2013-12-05 17:04:46 --> Helper loaded: url_helper
DEBUG - 2013-12-05 17:04:46 --> Helper loaded: html_helper
DEBUG - 2013-12-05 17:04:46 --> Database Driver Class Initialized
DEBUG - 2013-12-05 17:04:46 --> Session Class Initialized
DEBUG - 2013-12-05 17:04:46 --> Helper loaded: string_helper
DEBUG - 2013-12-05 17:04:46 --> Session routines successfully run
DEBUG - 2013-12-05 17:04:46 --> Form Validation Class Initialized
DEBUG - 2013-12-05 17:04:46 --> Controller Class Initialized
DEBUG - 2013-12-05 17:04:46 --> Model Class Initialized
DEBUG - 2013-12-05 17:04:46 --> Model Class Initialized
DEBUG - 2013-12-05 17:04:46 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-05 17:04:46 --> after session initialization................
INFO  - 2013-12-05 17:04:46 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 1 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-05 17:04:46 --> Final output sent to browser
DEBUG - 2013-12-05 17:04:46 --> Total execution time: 0.0490
DEBUG - 2013-12-05 17:10:07 --> Config Class Initialized
DEBUG - 2013-12-05 17:10:07 --> Hooks Class Initialized
DEBUG - 2013-12-05 17:10:07 --> Utf8 Class Initialized
DEBUG - 2013-12-05 17:10:07 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 17:10:07 --> URI Class Initialized
DEBUG - 2013-12-05 17:10:07 --> Router Class Initialized
DEBUG - 2013-12-05 17:10:07 --> Output Class Initialized
DEBUG - 2013-12-05 17:10:07 --> Security Class Initialized
DEBUG - 2013-12-05 17:10:07 --> Input Class Initialized
DEBUG - 2013-12-05 17:10:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 17:10:07 --> Language Class Initialized
DEBUG - 2013-12-05 17:10:07 --> Loader Class Initialized
DEBUG - 2013-12-05 17:10:07 --> Helper loaded: form_helper
DEBUG - 2013-12-05 17:10:07 --> Helper loaded: url_helper
DEBUG - 2013-12-05 17:10:07 --> Helper loaded: html_helper
DEBUG - 2013-12-05 17:10:07 --> Database Driver Class Initialized
DEBUG - 2013-12-05 17:10:07 --> Session Class Initialized
DEBUG - 2013-12-05 17:10:07 --> Helper loaded: string_helper
DEBUG - 2013-12-05 17:10:07 --> Session routines successfully run
DEBUG - 2013-12-05 17:10:07 --> Form Validation Class Initialized
DEBUG - 2013-12-05 17:10:07 --> Controller Class Initialized
DEBUG - 2013-12-05 17:10:07 --> Model Class Initialized
DEBUG - 2013-12-05 17:10:07 --> Model Class Initialized
DEBUG - 2013-12-05 17:10:07 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-05 17:10:07 --> after session initialization................
INFO  - 2013-12-05 17:10:07 --> inside rays login auth.............
DEBUG - 2013-12-05 17:10:07 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-12-05 17:10:07 --> XSS Filtering completed
DEBUG - 2013-12-05 17:10:07 --> XSS Filtering completed
INFO  - 2013-12-05 17:10:07 --> before getting the relation of member............6
INFO  - 2013-12-05 17:10:07 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-12-05 17:10:07 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-05 17:10:07 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-05 17:10:07 --> inside retrieving vacancy for member
INFO  - 2013-12-05 17:10:07 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-12-05 17:10:07 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-05 17:10:07 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-12-05 17:10:07 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-05 17:10:07 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-05 17:10:07 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-05 17:10:07 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-05 17:10:07 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-12-05 17:10:07 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-12-05 17:10:07 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
DEBUG - 2013-12-05 17:10:07 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-12-05 17:10:07 --> Final output sent to browser
DEBUG - 2013-12-05 17:10:07 --> Total execution time: 0.0790
DEBUG - 2013-12-05 17:10:07 --> Config Class Initialized
DEBUG - 2013-12-05 17:10:07 --> Hooks Class Initialized
DEBUG - 2013-12-05 17:10:07 --> Utf8 Class Initialized
DEBUG - 2013-12-05 17:10:07 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 17:10:07 --> URI Class Initialized
DEBUG - 2013-12-05 17:10:07 --> Router Class Initialized
ERROR - 2013-12-05 17:10:07 --> 404 Page Not Found --> css
DEBUG - 2013-12-05 17:12:41 --> Config Class Initialized
DEBUG - 2013-12-05 17:12:41 --> Hooks Class Initialized
DEBUG - 2013-12-05 17:12:41 --> Utf8 Class Initialized
DEBUG - 2013-12-05 17:12:41 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 17:12:41 --> URI Class Initialized
DEBUG - 2013-12-05 17:12:41 --> Router Class Initialized
DEBUG - 2013-12-05 17:12:41 --> Output Class Initialized
DEBUG - 2013-12-05 17:12:41 --> Security Class Initialized
DEBUG - 2013-12-05 17:12:41 --> Input Class Initialized
DEBUG - 2013-12-05 17:12:41 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 17:12:41 --> Language Class Initialized
DEBUG - 2013-12-05 17:12:41 --> Loader Class Initialized
DEBUG - 2013-12-05 17:12:41 --> Helper loaded: form_helper
DEBUG - 2013-12-05 17:12:41 --> Helper loaded: url_helper
DEBUG - 2013-12-05 17:12:41 --> Helper loaded: html_helper
DEBUG - 2013-12-05 17:12:41 --> Database Driver Class Initialized
DEBUG - 2013-12-05 17:12:41 --> Session Class Initialized
DEBUG - 2013-12-05 17:12:41 --> Helper loaded: string_helper
DEBUG - 2013-12-05 17:12:41 --> Session routines successfully run
DEBUG - 2013-12-05 17:12:41 --> Form Validation Class Initialized
DEBUG - 2013-12-05 17:12:41 --> Controller Class Initialized
DEBUG - 2013-12-05 17:12:41 --> Model Class Initialized
DEBUG - 2013-12-05 17:12:41 --> Model Class Initialized
DEBUG - 2013-12-05 17:12:41 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-05 17:12:41 --> after session initialization................
INFO  - 2013-12-05 17:12:41 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 1 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-05 17:12:41 --> Final output sent to browser
DEBUG - 2013-12-05 17:12:41 --> Total execution time: 0.0480
DEBUG - 2013-12-05 17:12:56 --> Config Class Initialized
DEBUG - 2013-12-05 17:12:56 --> Hooks Class Initialized
DEBUG - 2013-12-05 17:12:56 --> Utf8 Class Initialized
DEBUG - 2013-12-05 17:12:56 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 17:12:56 --> URI Class Initialized
DEBUG - 2013-12-05 17:12:56 --> Router Class Initialized
DEBUG - 2013-12-05 17:12:56 --> Output Class Initialized
DEBUG - 2013-12-05 17:12:56 --> Security Class Initialized
DEBUG - 2013-12-05 17:12:56 --> Input Class Initialized
DEBUG - 2013-12-05 17:12:56 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 17:12:56 --> Language Class Initialized
DEBUG - 2013-12-05 17:12:56 --> Loader Class Initialized
DEBUG - 2013-12-05 17:12:56 --> Helper loaded: form_helper
DEBUG - 2013-12-05 17:12:56 --> Helper loaded: url_helper
DEBUG - 2013-12-05 17:12:56 --> Helper loaded: html_helper
DEBUG - 2013-12-05 17:12:56 --> Database Driver Class Initialized
DEBUG - 2013-12-05 17:12:56 --> Session Class Initialized
DEBUG - 2013-12-05 17:12:56 --> Helper loaded: string_helper
DEBUG - 2013-12-05 17:12:56 --> Session routines successfully run
DEBUG - 2013-12-05 17:12:56 --> Form Validation Class Initialized
DEBUG - 2013-12-05 17:12:56 --> Controller Class Initialized
DEBUG - 2013-12-05 17:12:56 --> Model Class Initialized
DEBUG - 2013-12-05 17:12:56 --> Model Class Initialized
DEBUG - 2013-12-05 17:12:56 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-05 17:12:56 --> after session initialization................
INFO  - 2013-12-05 17:12:56 --> inside rays login auth.............
DEBUG - 2013-12-05 17:12:56 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-12-05 17:12:56 --> XSS Filtering completed
DEBUG - 2013-12-05 17:12:56 --> XSS Filtering completed
INFO  - 2013-12-05 17:12:56 --> before getting the relation of member............6
INFO  - 2013-12-05 17:12:56 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-12-05 17:12:56 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-05 17:12:56 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-05 17:12:56 --> inside retrieving vacancy for member
INFO  - 2013-12-05 17:12:56 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-12-05 17:12:56 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-05 17:12:56 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-12-05 17:12:56 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-05 17:12:56 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-05 17:12:56 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-05 17:12:56 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-05 17:12:56 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-12-05 17:12:56 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-12-05 17:12:56 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
DEBUG - 2013-12-05 17:12:56 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-12-05 17:12:56 --> Final output sent to browser
DEBUG - 2013-12-05 17:12:56 --> Total execution time: 0.0690
DEBUG - 2013-12-05 17:12:56 --> Config Class Initialized
DEBUG - 2013-12-05 17:12:56 --> Hooks Class Initialized
DEBUG - 2013-12-05 17:12:56 --> Utf8 Class Initialized
DEBUG - 2013-12-05 17:12:56 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 17:12:56 --> URI Class Initialized
DEBUG - 2013-12-05 17:12:56 --> Router Class Initialized
ERROR - 2013-12-05 17:12:56 --> 404 Page Not Found --> css
DEBUG - 2013-12-05 17:12:59 --> Config Class Initialized
DEBUG - 2013-12-05 17:12:59 --> Hooks Class Initialized
DEBUG - 2013-12-05 17:12:59 --> Utf8 Class Initialized
DEBUG - 2013-12-05 17:12:59 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 17:12:59 --> URI Class Initialized
DEBUG - 2013-12-05 17:12:59 --> Router Class Initialized
DEBUG - 2013-12-05 17:12:59 --> Output Class Initialized
DEBUG - 2013-12-05 17:12:59 --> Security Class Initialized
DEBUG - 2013-12-05 17:12:59 --> Input Class Initialized
DEBUG - 2013-12-05 17:12:59 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 17:12:59 --> Language Class Initialized
DEBUG - 2013-12-05 17:12:59 --> Loader Class Initialized
DEBUG - 2013-12-05 17:12:59 --> Helper loaded: form_helper
DEBUG - 2013-12-05 17:12:59 --> Helper loaded: url_helper
DEBUG - 2013-12-05 17:12:59 --> Helper loaded: html_helper
DEBUG - 2013-12-05 17:12:59 --> Database Driver Class Initialized
DEBUG - 2013-12-05 17:12:59 --> Session Class Initialized
DEBUG - 2013-12-05 17:12:59 --> Helper loaded: string_helper
DEBUG - 2013-12-05 17:12:59 --> Session routines successfully run
DEBUG - 2013-12-05 17:12:59 --> Form Validation Class Initialized
DEBUG - 2013-12-05 17:12:59 --> Controller Class Initialized
DEBUG - 2013-12-05 17:12:59 --> Model Class Initialized
DEBUG - 2013-12-05 17:12:59 --> Model Class Initialized
DEBUG - 2013-12-05 17:12:59 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-05 17:12:59 --> after session initialization................
INFO  - 2013-12-05 17:12:59 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 1 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-05 17:12:59 --> Final output sent to browser
DEBUG - 2013-12-05 17:12:59 --> Total execution time: 0.0490
DEBUG - 2013-12-05 17:17:02 --> Config Class Initialized
DEBUG - 2013-12-05 17:17:02 --> Hooks Class Initialized
DEBUG - 2013-12-05 17:17:02 --> Utf8 Class Initialized
DEBUG - 2013-12-05 17:17:02 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 17:17:02 --> URI Class Initialized
DEBUG - 2013-12-05 17:17:02 --> Router Class Initialized
DEBUG - 2013-12-05 17:17:02 --> Output Class Initialized
DEBUG - 2013-12-05 17:17:02 --> Security Class Initialized
DEBUG - 2013-12-05 17:17:02 --> Input Class Initialized
DEBUG - 2013-12-05 17:17:02 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 17:17:02 --> Language Class Initialized
DEBUG - 2013-12-05 17:17:02 --> Loader Class Initialized
DEBUG - 2013-12-05 17:17:02 --> Helper loaded: form_helper
DEBUG - 2013-12-05 17:17:02 --> Helper loaded: url_helper
DEBUG - 2013-12-05 17:17:02 --> Helper loaded: html_helper
DEBUG - 2013-12-05 17:17:02 --> Database Driver Class Initialized
DEBUG - 2013-12-05 17:17:02 --> Session Class Initialized
DEBUG - 2013-12-05 17:17:02 --> Helper loaded: string_helper
DEBUG - 2013-12-05 17:17:02 --> Session routines successfully run
DEBUG - 2013-12-05 17:17:02 --> Form Validation Class Initialized
DEBUG - 2013-12-05 17:17:02 --> Controller Class Initialized
DEBUG - 2013-12-05 17:17:02 --> Model Class Initialized
DEBUG - 2013-12-05 17:17:02 --> Model Class Initialized
DEBUG - 2013-12-05 17:17:02 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-05 17:17:02 --> after session initialization................
INFO  - 2013-12-05 17:17:02 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 1 and d.drugclassid_drugclass = 3 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-05 17:17:02 --> Final output sent to browser
DEBUG - 2013-12-05 17:17:02 --> Total execution time: 0.0470
DEBUG - 2013-12-05 17:17:03 --> Config Class Initialized
DEBUG - 2013-12-05 17:17:03 --> Hooks Class Initialized
DEBUG - 2013-12-05 17:17:03 --> Utf8 Class Initialized
DEBUG - 2013-12-05 17:17:03 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 17:17:03 --> URI Class Initialized
DEBUG - 2013-12-05 17:17:03 --> Router Class Initialized
DEBUG - 2013-12-05 17:17:03 --> Output Class Initialized
DEBUG - 2013-12-05 17:17:03 --> Security Class Initialized
DEBUG - 2013-12-05 17:17:03 --> Input Class Initialized
DEBUG - 2013-12-05 17:17:03 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 17:17:03 --> Language Class Initialized
DEBUG - 2013-12-05 17:17:03 --> Loader Class Initialized
DEBUG - 2013-12-05 17:17:03 --> Helper loaded: form_helper
DEBUG - 2013-12-05 17:17:03 --> Helper loaded: url_helper
DEBUG - 2013-12-05 17:17:03 --> Helper loaded: html_helper
DEBUG - 2013-12-05 17:17:03 --> Database Driver Class Initialized
DEBUG - 2013-12-05 17:17:03 --> Session Class Initialized
DEBUG - 2013-12-05 17:17:03 --> Helper loaded: string_helper
DEBUG - 2013-12-05 17:17:03 --> Session routines successfully run
DEBUG - 2013-12-05 17:17:03 --> Form Validation Class Initialized
DEBUG - 2013-12-05 17:17:03 --> Controller Class Initialized
DEBUG - 2013-12-05 17:17:03 --> Model Class Initialized
DEBUG - 2013-12-05 17:17:03 --> Model Class Initialized
DEBUG - 2013-12-05 17:17:03 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-05 17:17:03 --> after session initialization................
INFO  - 2013-12-05 17:17:03 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 1 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-05 17:17:03 --> Final output sent to browser
DEBUG - 2013-12-05 17:17:03 --> Total execution time: 0.0480
DEBUG - 2013-12-05 17:17:06 --> Config Class Initialized
DEBUG - 2013-12-05 17:17:06 --> Hooks Class Initialized
DEBUG - 2013-12-05 17:17:06 --> Utf8 Class Initialized
DEBUG - 2013-12-05 17:17:06 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 17:17:06 --> URI Class Initialized
DEBUG - 2013-12-05 17:17:06 --> Router Class Initialized
DEBUG - 2013-12-05 17:17:06 --> Output Class Initialized
DEBUG - 2013-12-05 17:17:06 --> Security Class Initialized
DEBUG - 2013-12-05 17:17:06 --> Input Class Initialized
DEBUG - 2013-12-05 17:17:06 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 17:17:06 --> Language Class Initialized
DEBUG - 2013-12-05 17:17:06 --> Loader Class Initialized
DEBUG - 2013-12-05 17:17:06 --> Helper loaded: form_helper
DEBUG - 2013-12-05 17:17:06 --> Helper loaded: url_helper
DEBUG - 2013-12-05 17:17:06 --> Helper loaded: html_helper
DEBUG - 2013-12-05 17:17:06 --> Database Driver Class Initialized
DEBUG - 2013-12-05 17:17:06 --> Session Class Initialized
DEBUG - 2013-12-05 17:17:06 --> Helper loaded: string_helper
DEBUG - 2013-12-05 17:17:06 --> Session routines successfully run
DEBUG - 2013-12-05 17:17:06 --> Form Validation Class Initialized
DEBUG - 2013-12-05 17:17:06 --> Controller Class Initialized
DEBUG - 2013-12-05 17:17:06 --> Model Class Initialized
DEBUG - 2013-12-05 17:17:06 --> Model Class Initialized
DEBUG - 2013-12-05 17:17:06 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-05 17:17:06 --> after session initialization................
INFO  - 2013-12-05 17:17:06 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 1 and d.drugcategoryid_drugcategory = 1 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-05 17:17:06 --> Final output sent to browser
DEBUG - 2013-12-05 17:17:06 --> Total execution time: 0.0530
DEBUG - 2013-12-05 17:17:07 --> Config Class Initialized
DEBUG - 2013-12-05 17:17:07 --> Hooks Class Initialized
DEBUG - 2013-12-05 17:17:07 --> Utf8 Class Initialized
DEBUG - 2013-12-05 17:17:07 --> UTF-8 Support Enabled
DEBUG - 2013-12-05 17:17:07 --> URI Class Initialized
DEBUG - 2013-12-05 17:17:07 --> Router Class Initialized
DEBUG - 2013-12-05 17:17:07 --> Output Class Initialized
DEBUG - 2013-12-05 17:17:07 --> Security Class Initialized
DEBUG - 2013-12-05 17:17:07 --> Input Class Initialized
DEBUG - 2013-12-05 17:17:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-05 17:17:07 --> Language Class Initialized
DEBUG - 2013-12-05 17:17:07 --> Loader Class Initialized
DEBUG - 2013-12-05 17:17:07 --> Helper loaded: form_helper
DEBUG - 2013-12-05 17:17:07 --> Helper loaded: url_helper
DEBUG - 2013-12-05 17:17:07 --> Helper loaded: html_helper
DEBUG - 2013-12-05 17:17:07 --> Database Driver Class Initialized
DEBUG - 2013-12-05 17:17:07 --> Session Class Initialized
DEBUG - 2013-12-05 17:17:07 --> Helper loaded: string_helper
DEBUG - 2013-12-05 17:17:07 --> Session routines successfully run
DEBUG - 2013-12-05 17:17:07 --> Form Validation Class Initialized
DEBUG - 2013-12-05 17:17:07 --> Controller Class Initialized
DEBUG - 2013-12-05 17:17:07 --> Model Class Initialized
DEBUG - 2013-12-05 17:17:07 --> Model Class Initialized
DEBUG - 2013-12-05 17:17:07 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-05 17:17:07 --> after session initialization................
INFO  - 2013-12-05 17:17:07 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 1 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-05 17:17:07 --> Final output sent to browser
DEBUG - 2013-12-05 17:17:07 --> Total execution time: 0.0500
