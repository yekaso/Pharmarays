<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2013-11-11 10:42:12 --> Config Class Initialized
DEBUG - 2013-11-11 10:42:12 --> Hooks Class Initialized
DEBUG - 2013-11-11 10:42:12 --> Utf8 Class Initialized
DEBUG - 2013-11-11 10:42:12 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 10:42:12 --> URI Class Initialized
DEBUG - 2013-11-11 10:42:12 --> Router Class Initialized
DEBUG - 2013-11-11 10:42:12 --> No URI present. Default controller set.
DEBUG - 2013-11-11 10:42:12 --> Output Class Initialized
DEBUG - 2013-11-11 10:42:12 --> Security Class Initialized
DEBUG - 2013-11-11 10:42:12 --> Input Class Initialized
DEBUG - 2013-11-11 10:42:12 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 10:42:12 --> Language Class Initialized
DEBUG - 2013-11-11 10:42:12 --> Loader Class Initialized
DEBUG - 2013-11-11 10:42:12 --> Helper loaded: form_helper
DEBUG - 2013-11-11 10:42:12 --> Helper loaded: url_helper
DEBUG - 2013-11-11 10:42:12 --> Helper loaded: html_helper
DEBUG - 2013-11-11 10:42:12 --> Database Driver Class Initialized
DEBUG - 2013-11-11 10:42:14 --> Session Class Initialized
DEBUG - 2013-11-11 10:42:14 --> Helper loaded: string_helper
DEBUG - 2013-11-11 10:42:14 --> A session cookie was not found.
DEBUG - 2013-11-11 10:42:14 --> Session routines successfully run
DEBUG - 2013-11-11 10:42:14 --> Form Validation Class Initialized
DEBUG - 2013-11-11 10:42:14 --> Controller Class Initialized
INFO  - 2013-11-11 10:42:14 --> the form message==>
INFO  - 2013-11-11 10:42:14 --> The session id is ========>df6978c820002108a53b5b19bf34de00 and the member id is =======>
INFO  - 2013-11-11 10:42:14 --> after the retrieving session list.................//////////
DEBUG - 2013-11-11 10:42:14 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-11-11 10:42:14 --> Final output sent to browser
DEBUG - 2013-11-11 10:42:14 --> Total execution time: 2.3461
DEBUG - 2013-11-11 10:42:20 --> Config Class Initialized
DEBUG - 2013-11-11 10:42:20 --> Hooks Class Initialized
DEBUG - 2013-11-11 10:42:20 --> Utf8 Class Initialized
DEBUG - 2013-11-11 10:42:20 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 10:42:20 --> URI Class Initialized
DEBUG - 2013-11-11 10:42:20 --> Router Class Initialized
DEBUG - 2013-11-11 10:42:20 --> Output Class Initialized
DEBUG - 2013-11-11 10:42:20 --> Security Class Initialized
DEBUG - 2013-11-11 10:42:20 --> Input Class Initialized
DEBUG - 2013-11-11 10:42:20 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 10:42:20 --> Language Class Initialized
DEBUG - 2013-11-11 10:42:20 --> Loader Class Initialized
DEBUG - 2013-11-11 10:42:20 --> Helper loaded: form_helper
DEBUG - 2013-11-11 10:42:20 --> Helper loaded: url_helper
DEBUG - 2013-11-11 10:42:20 --> Helper loaded: html_helper
DEBUG - 2013-11-11 10:42:20 --> Database Driver Class Initialized
DEBUG - 2013-11-11 10:42:20 --> Session Class Initialized
DEBUG - 2013-11-11 10:42:20 --> Helper loaded: string_helper
DEBUG - 2013-11-11 10:42:20 --> Session routines successfully run
DEBUG - 2013-11-11 10:42:20 --> Form Validation Class Initialized
DEBUG - 2013-11-11 10:42:20 --> Controller Class Initialized
DEBUG - 2013-11-11 10:42:21 --> Model Class Initialized
DEBUG - 2013-11-11 10:42:21 --> Model Class Initialized
DEBUG - 2013-11-11 10:42:21 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 10:42:21 --> after session initialization................
INFO  - 2013-11-11 10:42:21 --> inside rays login auth.............
DEBUG - 2013-11-11 10:42:21 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-11-11 10:42:21 --> XSS Filtering completed
DEBUG - 2013-11-11 10:42:21 --> XSS Filtering completed
INFO  - 2013-11-11 10:42:21 --> before getting the relation of member............6
INFO  - 2013-11-11 10:42:21 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-11-11 10:42:21 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-11 10:42:21 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-11-11 10:42:21 --> inside retrieving vacancy for member
INFO  - 2013-11-11 10:42:21 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-11-11 10:42:21 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-11 10:42:21 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-11-11 10:42:21 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-11-11 10:42:22 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-11 10:42:22 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-11 10:42:22 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-11-11 10:42:22 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-11-11 10:42:22 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-11-11 10:42:22 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-11-11 10:42:22 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-11-11 10:42:22 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-11-11 10:42:22 --> Final output sent to browser
DEBUG - 2013-11-11 10:42:22 --> Total execution time: 1.2901
DEBUG - 2013-11-11 10:42:22 --> Config Class Initialized
DEBUG - 2013-11-11 10:42:22 --> Hooks Class Initialized
DEBUG - 2013-11-11 10:42:22 --> Utf8 Class Initialized
DEBUG - 2013-11-11 10:42:22 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 10:42:22 --> URI Class Initialized
DEBUG - 2013-11-11 10:42:22 --> Router Class Initialized
DEBUG - 2013-11-11 10:42:22 --> Output Class Initialized
DEBUG - 2013-11-11 10:42:22 --> Security Class Initialized
DEBUG - 2013-11-11 10:42:22 --> Input Class Initialized
DEBUG - 2013-11-11 10:42:22 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 10:42:22 --> Language Class Initialized
DEBUG - 2013-11-11 10:42:22 --> Loader Class Initialized
DEBUG - 2013-11-11 10:42:22 --> Helper loaded: form_helper
DEBUG - 2013-11-11 10:42:22 --> Helper loaded: url_helper
DEBUG - 2013-11-11 10:42:22 --> Helper loaded: html_helper
DEBUG - 2013-11-11 10:42:22 --> Database Driver Class Initialized
DEBUG - 2013-11-11 10:42:22 --> Session Class Initialized
DEBUG - 2013-11-11 10:42:22 --> Helper loaded: string_helper
DEBUG - 2013-11-11 10:42:22 --> Session routines successfully run
DEBUG - 2013-11-11 10:42:22 --> Form Validation Class Initialized
DEBUG - 2013-11-11 10:42:22 --> Controller Class Initialized
DEBUG - 2013-11-11 10:42:22 --> Model Class Initialized
DEBUG - 2013-11-11 10:42:22 --> Model Class Initialized
DEBUG - 2013-11-11 10:42:22 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 10:42:22 --> after session initialization................
ERROR - 2013-11-11 10:42:22 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-11 10:42:22 --> Config Class Initialized
DEBUG - 2013-11-11 10:42:22 --> Hooks Class Initialized
DEBUG - 2013-11-11 10:42:22 --> Utf8 Class Initialized
DEBUG - 2013-11-11 10:42:22 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 10:42:22 --> URI Class Initialized
DEBUG - 2013-11-11 10:42:22 --> Router Class Initialized
DEBUG - 2013-11-11 10:42:22 --> Output Class Initialized
DEBUG - 2013-11-11 10:42:22 --> Security Class Initialized
DEBUG - 2013-11-11 10:42:22 --> Input Class Initialized
DEBUG - 2013-11-11 10:42:22 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 10:42:22 --> Language Class Initialized
DEBUG - 2013-11-11 10:42:22 --> Loader Class Initialized
DEBUG - 2013-11-11 10:42:22 --> Helper loaded: form_helper
DEBUG - 2013-11-11 10:42:22 --> Helper loaded: url_helper
DEBUG - 2013-11-11 10:42:22 --> Helper loaded: html_helper
DEBUG - 2013-11-11 10:42:22 --> Database Driver Class Initialized
DEBUG - 2013-11-11 10:42:23 --> Session Class Initialized
DEBUG - 2013-11-11 10:42:23 --> Helper loaded: string_helper
DEBUG - 2013-11-11 10:42:23 --> Session routines successfully run
DEBUG - 2013-11-11 10:42:23 --> Form Validation Class Initialized
DEBUG - 2013-11-11 10:42:23 --> Controller Class Initialized
DEBUG - 2013-11-11 10:42:23 --> Model Class Initialized
DEBUG - 2013-11-11 10:42:23 --> Model Class Initialized
DEBUG - 2013-11-11 10:42:23 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 10:42:23 --> after session initialization................
ERROR - 2013-11-11 10:42:23 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-11 10:42:24 --> Config Class Initialized
DEBUG - 2013-11-11 10:42:24 --> Hooks Class Initialized
DEBUG - 2013-11-11 10:42:24 --> Utf8 Class Initialized
DEBUG - 2013-11-11 10:42:24 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 10:42:24 --> URI Class Initialized
DEBUG - 2013-11-11 10:42:24 --> Router Class Initialized
ERROR - 2013-11-11 10:42:24 --> 404 Page Not Found --> css
DEBUG - 2013-11-11 10:42:30 --> Config Class Initialized
DEBUG - 2013-11-11 10:42:30 --> Hooks Class Initialized
DEBUG - 2013-11-11 10:42:30 --> Utf8 Class Initialized
DEBUG - 2013-11-11 10:42:30 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 10:42:30 --> URI Class Initialized
DEBUG - 2013-11-11 10:42:30 --> Router Class Initialized
DEBUG - 2013-11-11 10:42:30 --> Output Class Initialized
DEBUG - 2013-11-11 10:42:30 --> Security Class Initialized
DEBUG - 2013-11-11 10:42:30 --> Input Class Initialized
DEBUG - 2013-11-11 10:42:30 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 10:42:30 --> Language Class Initialized
DEBUG - 2013-11-11 10:42:30 --> Loader Class Initialized
DEBUG - 2013-11-11 10:42:30 --> Helper loaded: form_helper
DEBUG - 2013-11-11 10:42:30 --> Helper loaded: url_helper
DEBUG - 2013-11-11 10:42:30 --> Helper loaded: html_helper
DEBUG - 2013-11-11 10:42:30 --> Database Driver Class Initialized
DEBUG - 2013-11-11 10:42:30 --> Session Class Initialized
DEBUG - 2013-11-11 10:42:30 --> Helper loaded: string_helper
DEBUG - 2013-11-11 10:42:30 --> Session routines successfully run
DEBUG - 2013-11-11 10:42:30 --> Form Validation Class Initialized
DEBUG - 2013-11-11 10:42:30 --> Controller Class Initialized
DEBUG - 2013-11-11 10:42:30 --> Model Class Initialized
DEBUG - 2013-11-11 10:42:30 --> Model Class Initialized
DEBUG - 2013-11-11 10:42:30 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 10:42:30 --> after session initialization................
INFO  - 2013-11-11 10:42:30 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-11 10:42:30 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-11 10:42:30 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
DEBUG - 2013-11-11 10:42:30 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-11 10:42:30 --> Final output sent to browser
DEBUG - 2013-11-11 10:42:30 --> Total execution time: 0.0870
DEBUG - 2013-11-11 10:42:30 --> Config Class Initialized
DEBUG - 2013-11-11 10:42:30 --> Hooks Class Initialized
DEBUG - 2013-11-11 10:42:30 --> Utf8 Class Initialized
DEBUG - 2013-11-11 10:42:30 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 10:42:30 --> URI Class Initialized
DEBUG - 2013-11-11 10:42:30 --> Router Class Initialized
DEBUG - 2013-11-11 10:42:30 --> Output Class Initialized
DEBUG - 2013-11-11 10:42:30 --> Security Class Initialized
DEBUG - 2013-11-11 10:42:30 --> Input Class Initialized
DEBUG - 2013-11-11 10:42:30 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 10:42:30 --> Language Class Initialized
DEBUG - 2013-11-11 10:42:30 --> Loader Class Initialized
DEBUG - 2013-11-11 10:42:30 --> Helper loaded: form_helper
DEBUG - 2013-11-11 10:42:30 --> Helper loaded: url_helper
DEBUG - 2013-11-11 10:42:30 --> Helper loaded: html_helper
DEBUG - 2013-11-11 10:42:30 --> Database Driver Class Initialized
DEBUG - 2013-11-11 10:42:30 --> Session Class Initialized
DEBUG - 2013-11-11 10:42:30 --> Helper loaded: string_helper
DEBUG - 2013-11-11 10:42:30 --> Session routines successfully run
DEBUG - 2013-11-11 10:42:30 --> Form Validation Class Initialized
DEBUG - 2013-11-11 10:42:30 --> Controller Class Initialized
DEBUG - 2013-11-11 10:42:30 --> Model Class Initialized
DEBUG - 2013-11-11 10:42:30 --> Model Class Initialized
DEBUG - 2013-11-11 10:42:30 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 10:42:30 --> after session initialization................
ERROR - 2013-11-11 10:42:30 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-11 10:43:50 --> Config Class Initialized
DEBUG - 2013-11-11 10:43:50 --> Hooks Class Initialized
DEBUG - 2013-11-11 10:43:50 --> Utf8 Class Initialized
DEBUG - 2013-11-11 10:43:50 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 10:43:50 --> URI Class Initialized
DEBUG - 2013-11-11 10:43:50 --> Router Class Initialized
DEBUG - 2013-11-11 10:43:50 --> Output Class Initialized
DEBUG - 2013-11-11 10:43:50 --> Security Class Initialized
DEBUG - 2013-11-11 10:43:50 --> Input Class Initialized
DEBUG - 2013-11-11 10:43:50 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 10:43:50 --> Language Class Initialized
DEBUG - 2013-11-11 10:43:50 --> Loader Class Initialized
DEBUG - 2013-11-11 10:43:50 --> Helper loaded: form_helper
DEBUG - 2013-11-11 10:43:50 --> Helper loaded: url_helper
DEBUG - 2013-11-11 10:43:50 --> Helper loaded: html_helper
DEBUG - 2013-11-11 10:43:50 --> Database Driver Class Initialized
DEBUG - 2013-11-11 10:43:50 --> Session Class Initialized
DEBUG - 2013-11-11 10:43:50 --> Helper loaded: string_helper
DEBUG - 2013-11-11 10:43:50 --> Session routines successfully run
DEBUG - 2013-11-11 10:43:50 --> Form Validation Class Initialized
DEBUG - 2013-11-11 10:43:50 --> Controller Class Initialized
DEBUG - 2013-11-11 10:43:50 --> Model Class Initialized
DEBUG - 2013-11-11 10:43:50 --> Model Class Initialized
DEBUG - 2013-11-11 10:43:50 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 10:43:50 --> after session initialization................
INFO  - 2013-11-11 10:43:50 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-11 10:43:50 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-11-11 10:43:50 --> inside retrieving vacancy for member
INFO  - 2013-11-11 10:43:50 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-11-11 10:43:50 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-11 10:43:50 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-11-11 10:43:50 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-11-11 10:43:50 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-11 10:43:50 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-11 10:43:50 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-11-11 10:43:50 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-11-11 10:43:50 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-11-11 10:43:50 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-11-11 10:43:50 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-11-11 10:43:50 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-11-11 10:43:50 --> Final output sent to browser
DEBUG - 2013-11-11 10:43:50 --> Total execution time: 0.0900
DEBUG - 2013-11-11 10:43:50 --> Config Class Initialized
DEBUG - 2013-11-11 10:43:50 --> Hooks Class Initialized
DEBUG - 2013-11-11 10:43:50 --> Utf8 Class Initialized
DEBUG - 2013-11-11 10:43:50 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 10:43:50 --> URI Class Initialized
DEBUG - 2013-11-11 10:43:50 --> Router Class Initialized
DEBUG - 2013-11-11 10:43:50 --> Output Class Initialized
DEBUG - 2013-11-11 10:43:50 --> Security Class Initialized
DEBUG - 2013-11-11 10:43:50 --> Input Class Initialized
DEBUG - 2013-11-11 10:43:50 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 10:43:50 --> Language Class Initialized
DEBUG - 2013-11-11 10:43:50 --> Loader Class Initialized
DEBUG - 2013-11-11 10:43:50 --> Helper loaded: form_helper
DEBUG - 2013-11-11 10:43:50 --> Helper loaded: url_helper
DEBUG - 2013-11-11 10:43:50 --> Helper loaded: html_helper
DEBUG - 2013-11-11 10:43:50 --> Database Driver Class Initialized
DEBUG - 2013-11-11 10:43:50 --> Session Class Initialized
DEBUG - 2013-11-11 10:43:50 --> Helper loaded: string_helper
DEBUG - 2013-11-11 10:43:50 --> Session routines successfully run
DEBUG - 2013-11-11 10:43:50 --> Form Validation Class Initialized
DEBUG - 2013-11-11 10:43:50 --> Controller Class Initialized
DEBUG - 2013-11-11 10:43:50 --> Model Class Initialized
DEBUG - 2013-11-11 10:43:50 --> Model Class Initialized
DEBUG - 2013-11-11 10:43:50 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 10:43:50 --> after session initialization................
ERROR - 2013-11-11 10:43:50 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-11 10:43:50 --> Config Class Initialized
DEBUG - 2013-11-11 10:43:50 --> Hooks Class Initialized
DEBUG - 2013-11-11 10:43:50 --> Utf8 Class Initialized
DEBUG - 2013-11-11 10:43:50 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 10:43:50 --> URI Class Initialized
DEBUG - 2013-11-11 10:43:50 --> Router Class Initialized
ERROR - 2013-11-11 10:43:50 --> 404 Page Not Found --> css
DEBUG - 2013-11-11 10:43:51 --> Config Class Initialized
DEBUG - 2013-11-11 10:43:51 --> Hooks Class Initialized
DEBUG - 2013-11-11 10:43:51 --> Utf8 Class Initialized
DEBUG - 2013-11-11 10:43:51 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 10:43:51 --> URI Class Initialized
DEBUG - 2013-11-11 10:43:51 --> Router Class Initialized
DEBUG - 2013-11-11 10:43:51 --> Output Class Initialized
DEBUG - 2013-11-11 10:43:51 --> Security Class Initialized
DEBUG - 2013-11-11 10:43:51 --> Input Class Initialized
DEBUG - 2013-11-11 10:43:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 10:43:51 --> Language Class Initialized
DEBUG - 2013-11-11 10:43:51 --> Loader Class Initialized
DEBUG - 2013-11-11 10:43:51 --> Helper loaded: form_helper
DEBUG - 2013-11-11 10:43:51 --> Helper loaded: url_helper
DEBUG - 2013-11-11 10:43:51 --> Helper loaded: html_helper
DEBUG - 2013-11-11 10:43:51 --> Database Driver Class Initialized
DEBUG - 2013-11-11 10:43:51 --> Session Class Initialized
DEBUG - 2013-11-11 10:43:51 --> Helper loaded: string_helper
DEBUG - 2013-11-11 10:43:51 --> Session routines successfully run
DEBUG - 2013-11-11 10:43:51 --> Form Validation Class Initialized
DEBUG - 2013-11-11 10:43:51 --> Controller Class Initialized
DEBUG - 2013-11-11 10:43:51 --> Model Class Initialized
DEBUG - 2013-11-11 10:43:51 --> Model Class Initialized
DEBUG - 2013-11-11 10:43:51 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 10:43:51 --> after session initialization................
INFO  - 2013-11-11 10:43:51 --> last news id is 0
INFO  - 2013-11-11 10:43:51 --> SELECT a.id_article as id, a.title as newsletter_title, a.description as newsletter_description, a.guestonly as guestonly, a.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`article` a)
JOIN `member` m ON `a`.`memberid_member` = `m`.`id_member`
WHERE `a`.`id_article` <> 0
ORDER BY `a`.`id_article` desc
LIMIT 15
INFO  - 2013-11-11 10:43:51 --> after newsleters list has been clicked.................
INFO  - 2013-11-11 10:43:51 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=112&article_type=newsletter_title
INFO  - 2013-11-11 10:43:51 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=111&article_type=newsletter_title
INFO  - 2013-11-11 10:43:51 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=110&article_type=newsletter_title
INFO  - 2013-11-11 10:43:51 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=109&article_type=newsletter_title
INFO  - 2013-11-11 10:43:51 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=108&article_type=newsletter_title
INFO  - 2013-11-11 10:43:51 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=107&article_type=newsletter_title
INFO  - 2013-11-11 10:43:51 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=106&article_type=newsletter_title
INFO  - 2013-11-11 10:43:51 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=105&article_type=newsletter_title
INFO  - 2013-11-11 10:43:51 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=104&article_type=newsletter_title
INFO  - 2013-11-11 10:43:51 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=103&article_type=newsletter_title
INFO  - 2013-11-11 10:43:51 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=102&article_type=newsletter_title
INFO  - 2013-11-11 10:43:51 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=101&article_type=newsletter_title
INFO  - 2013-11-11 10:43:51 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=100&article_type=newsletter_title
INFO  - 2013-11-11 10:43:51 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=99&article_type=newsletter_title
INFO  - 2013-11-11 10:43:51 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=98&article_type=newsletter_title
DEBUG - 2013-11-11 10:43:51 --> File loaded: ../pharmaray-application/views/articles.php
DEBUG - 2013-11-11 10:43:51 --> Final output sent to browser
DEBUG - 2013-11-11 10:43:51 --> Total execution time: 0.1200
DEBUG - 2013-11-11 10:43:53 --> Config Class Initialized
DEBUG - 2013-11-11 10:43:53 --> Hooks Class Initialized
DEBUG - 2013-11-11 10:43:53 --> Utf8 Class Initialized
DEBUG - 2013-11-11 10:43:53 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 10:43:53 --> URI Class Initialized
DEBUG - 2013-11-11 10:43:53 --> Router Class Initialized
DEBUG - 2013-11-11 10:43:53 --> Output Class Initialized
DEBUG - 2013-11-11 10:43:53 --> Security Class Initialized
DEBUG - 2013-11-11 10:43:53 --> Input Class Initialized
DEBUG - 2013-11-11 10:43:53 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 10:43:53 --> Language Class Initialized
DEBUG - 2013-11-11 10:43:53 --> Loader Class Initialized
DEBUG - 2013-11-11 10:43:53 --> Helper loaded: form_helper
DEBUG - 2013-11-11 10:43:53 --> Helper loaded: url_helper
DEBUG - 2013-11-11 10:43:53 --> Helper loaded: html_helper
DEBUG - 2013-11-11 10:43:53 --> Database Driver Class Initialized
DEBUG - 2013-11-11 10:43:53 --> Session Class Initialized
DEBUG - 2013-11-11 10:43:53 --> Helper loaded: string_helper
DEBUG - 2013-11-11 10:43:53 --> Session routines successfully run
DEBUG - 2013-11-11 10:43:53 --> Form Validation Class Initialized
DEBUG - 2013-11-11 10:43:53 --> Controller Class Initialized
DEBUG - 2013-11-11 10:43:53 --> Model Class Initialized
DEBUG - 2013-11-11 10:43:53 --> Model Class Initialized
DEBUG - 2013-11-11 10:43:53 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 10:43:53 --> after session initialization................
INFO  - 2013-11-11 10:43:53 --> inside retrieve most commented forum topic 
INFO  - 2013-11-11 10:43:53 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
INFO  - 2013-11-11 10:43:53 --> inside retrieving first 20 topics 
INFO  - 2013-11-11 10:43:53 --> SELECT `t`.`id_topicforum`, upper(t.name) as name, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
LIMIT 20
INFO  - 2013-11-11 10:43:53 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-11 10:43:53 --> SELECT `ff`.`id_forum` as id, `ff`.`name`, count(f.id_forum) as sub_forum
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` is null 
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`
INFO  - 2013-11-11 10:43:53 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-11 10:43:53 --> inside retrieving comments topic id and drug id is 1
INFO  - 2013-11-11 10:43:53 --> SELECT `tc`.`id_topiccomment`, `tc`.`comment`, `tc`.`timecreated`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-11 10:43:53 --> inside retrieving comments topic id 1
INFO  - 2013-11-11 10:43:53 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
INFO  - 2013-11-11 10:43:53 --> after forums has been clicked.................
INFO  - 2013-11-11 10:43:53 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-11-11 10:43:53 --> File loaded: ../pharmaray-application/views/forum.php
DEBUG - 2013-11-11 10:43:53 --> Final output sent to browser
DEBUG - 2013-11-11 10:43:53 --> Total execution time: 0.1530
DEBUG - 2013-11-11 10:43:53 --> Config Class Initialized
DEBUG - 2013-11-11 10:43:53 --> Hooks Class Initialized
DEBUG - 2013-11-11 10:43:53 --> Utf8 Class Initialized
DEBUG - 2013-11-11 10:43:53 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 10:43:53 --> URI Class Initialized
DEBUG - 2013-11-11 10:43:53 --> Router Class Initialized
DEBUG - 2013-11-11 10:43:53 --> Output Class Initialized
DEBUG - 2013-11-11 10:43:53 --> Security Class Initialized
DEBUG - 2013-11-11 10:43:53 --> Input Class Initialized
DEBUG - 2013-11-11 10:43:53 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 10:43:53 --> Language Class Initialized
DEBUG - 2013-11-11 10:43:53 --> Loader Class Initialized
DEBUG - 2013-11-11 10:43:54 --> Helper loaded: form_helper
DEBUG - 2013-11-11 10:43:54 --> Helper loaded: url_helper
DEBUG - 2013-11-11 10:43:54 --> Helper loaded: html_helper
DEBUG - 2013-11-11 10:43:54 --> Database Driver Class Initialized
DEBUG - 2013-11-11 10:43:54 --> Session Class Initialized
DEBUG - 2013-11-11 10:43:54 --> Helper loaded: string_helper
DEBUG - 2013-11-11 10:43:54 --> Session routines successfully run
DEBUG - 2013-11-11 10:43:54 --> Form Validation Class Initialized
DEBUG - 2013-11-11 10:43:54 --> Controller Class Initialized
DEBUG - 2013-11-11 10:43:54 --> Model Class Initialized
DEBUG - 2013-11-11 10:43:54 --> Model Class Initialized
DEBUG - 2013-11-11 10:43:54 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 10:43:54 --> after session initialization................
ERROR - 2013-11-11 10:43:54 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-11 10:43:54 --> Config Class Initialized
DEBUG - 2013-11-11 10:43:54 --> Hooks Class Initialized
DEBUG - 2013-11-11 10:43:54 --> Utf8 Class Initialized
DEBUG - 2013-11-11 10:43:54 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 10:43:54 --> URI Class Initialized
DEBUG - 2013-11-11 10:43:54 --> Router Class Initialized
ERROR - 2013-11-11 10:43:54 --> 404 Page Not Found --> css
DEBUG - 2013-11-11 10:43:57 --> Config Class Initialized
DEBUG - 2013-11-11 10:43:57 --> Hooks Class Initialized
DEBUG - 2013-11-11 10:43:57 --> Utf8 Class Initialized
DEBUG - 2013-11-11 10:43:57 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 10:43:57 --> URI Class Initialized
DEBUG - 2013-11-11 10:43:57 --> Router Class Initialized
DEBUG - 2013-11-11 10:43:57 --> Output Class Initialized
DEBUG - 2013-11-11 10:43:57 --> Security Class Initialized
DEBUG - 2013-11-11 10:43:57 --> Input Class Initialized
DEBUG - 2013-11-11 10:43:57 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 10:43:57 --> Language Class Initialized
DEBUG - 2013-11-11 10:43:57 --> Loader Class Initialized
DEBUG - 2013-11-11 10:43:57 --> Helper loaded: form_helper
DEBUG - 2013-11-11 10:43:57 --> Helper loaded: url_helper
DEBUG - 2013-11-11 10:43:57 --> Helper loaded: html_helper
DEBUG - 2013-11-11 10:43:57 --> Database Driver Class Initialized
DEBUG - 2013-11-11 10:43:57 --> Session Class Initialized
DEBUG - 2013-11-11 10:43:57 --> Helper loaded: string_helper
DEBUG - 2013-11-11 10:43:57 --> Session routines successfully run
DEBUG - 2013-11-11 10:43:57 --> Form Validation Class Initialized
DEBUG - 2013-11-11 10:43:57 --> Controller Class Initialized
DEBUG - 2013-11-11 10:43:57 --> Model Class Initialized
DEBUG - 2013-11-11 10:43:57 --> Model Class Initialized
DEBUG - 2013-11-11 10:43:57 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 10:43:57 --> after session initialization................
INFO  - 2013-11-11 10:43:57 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-11 10:43:57 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-11 10:43:57 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
DEBUG - 2013-11-11 10:43:57 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-11 10:43:57 --> Final output sent to browser
DEBUG - 2013-11-11 10:43:57 --> Total execution time: 0.0560
DEBUG - 2013-11-11 10:43:57 --> Config Class Initialized
DEBUG - 2013-11-11 10:43:57 --> Hooks Class Initialized
DEBUG - 2013-11-11 10:43:57 --> Utf8 Class Initialized
DEBUG - 2013-11-11 10:43:57 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 10:43:57 --> URI Class Initialized
DEBUG - 2013-11-11 10:43:57 --> Router Class Initialized
DEBUG - 2013-11-11 10:43:57 --> Output Class Initialized
DEBUG - 2013-11-11 10:43:57 --> Security Class Initialized
DEBUG - 2013-11-11 10:43:57 --> Input Class Initialized
DEBUG - 2013-11-11 10:43:57 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 10:43:57 --> Language Class Initialized
DEBUG - 2013-11-11 10:43:57 --> Loader Class Initialized
DEBUG - 2013-11-11 10:43:57 --> Helper loaded: form_helper
DEBUG - 2013-11-11 10:43:57 --> Helper loaded: url_helper
DEBUG - 2013-11-11 10:43:57 --> Helper loaded: html_helper
DEBUG - 2013-11-11 10:43:57 --> Database Driver Class Initialized
DEBUG - 2013-11-11 10:43:57 --> Session Class Initialized
DEBUG - 2013-11-11 10:43:57 --> Helper loaded: string_helper
DEBUG - 2013-11-11 10:43:57 --> Session routines successfully run
DEBUG - 2013-11-11 10:43:57 --> Form Validation Class Initialized
DEBUG - 2013-11-11 10:43:57 --> Controller Class Initialized
DEBUG - 2013-11-11 10:43:57 --> Model Class Initialized
DEBUG - 2013-11-11 10:43:57 --> Model Class Initialized
DEBUG - 2013-11-11 10:43:57 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 10:43:57 --> after session initialization................
ERROR - 2013-11-11 10:43:57 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-11 10:43:58 --> Config Class Initialized
DEBUG - 2013-11-11 10:43:58 --> Hooks Class Initialized
DEBUG - 2013-11-11 10:43:58 --> Utf8 Class Initialized
DEBUG - 2013-11-11 10:43:58 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 10:43:58 --> URI Class Initialized
DEBUG - 2013-11-11 10:43:58 --> Router Class Initialized
DEBUG - 2013-11-11 10:43:58 --> Output Class Initialized
DEBUG - 2013-11-11 10:43:58 --> Security Class Initialized
DEBUG - 2013-11-11 10:43:58 --> Input Class Initialized
DEBUG - 2013-11-11 10:43:58 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 10:43:58 --> Language Class Initialized
DEBUG - 2013-11-11 10:43:58 --> Loader Class Initialized
DEBUG - 2013-11-11 10:43:58 --> Helper loaded: form_helper
DEBUG - 2013-11-11 10:43:58 --> Helper loaded: url_helper
DEBUG - 2013-11-11 10:43:58 --> Helper loaded: html_helper
DEBUG - 2013-11-11 10:43:58 --> Database Driver Class Initialized
DEBUG - 2013-11-11 10:43:58 --> Session Class Initialized
DEBUG - 2013-11-11 10:43:58 --> Helper loaded: string_helper
DEBUG - 2013-11-11 10:43:58 --> Session routines successfully run
DEBUG - 2013-11-11 10:43:58 --> Form Validation Class Initialized
DEBUG - 2013-11-11 10:43:58 --> Controller Class Initialized
DEBUG - 2013-11-11 10:43:58 --> Model Class Initialized
DEBUG - 2013-11-11 10:43:58 --> Model Class Initialized
DEBUG - 2013-11-11 10:43:58 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 10:43:58 --> after session initialization................
INFO  - 2013-11-11 10:43:58 --> inside retrieve most commented forum topic 
INFO  - 2013-11-11 10:43:58 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
INFO  - 2013-11-11 10:43:58 --> inside retrieving first 20 topics 
INFO  - 2013-11-11 10:43:58 --> SELECT `t`.`id_topicforum`, upper(t.name) as name, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
LIMIT 20
INFO  - 2013-11-11 10:43:58 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-11 10:43:58 --> SELECT `ff`.`id_forum` as id, `ff`.`name`, count(f.id_forum) as sub_forum
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` is null 
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`
INFO  - 2013-11-11 10:43:58 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-11 10:43:58 --> inside retrieving comments topic id and drug id is 1
INFO  - 2013-11-11 10:43:58 --> SELECT `tc`.`id_topiccomment`, `tc`.`comment`, `tc`.`timecreated`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-11 10:43:58 --> inside retrieving comments topic id 1
INFO  - 2013-11-11 10:43:58 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
INFO  - 2013-11-11 10:43:58 --> after forums has been clicked.................
INFO  - 2013-11-11 10:43:58 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-11-11 10:43:58 --> File loaded: ../pharmaray-application/views/forum.php
DEBUG - 2013-11-11 10:43:58 --> Final output sent to browser
DEBUG - 2013-11-11 10:43:58 --> Total execution time: 0.0730
DEBUG - 2013-11-11 10:43:58 --> Config Class Initialized
DEBUG - 2013-11-11 10:43:58 --> Hooks Class Initialized
DEBUG - 2013-11-11 10:43:58 --> Utf8 Class Initialized
DEBUG - 2013-11-11 10:43:58 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 10:43:58 --> URI Class Initialized
DEBUG - 2013-11-11 10:43:58 --> Router Class Initialized
DEBUG - 2013-11-11 10:43:58 --> Output Class Initialized
DEBUG - 2013-11-11 10:43:58 --> Security Class Initialized
DEBUG - 2013-11-11 10:43:58 --> Input Class Initialized
DEBUG - 2013-11-11 10:43:58 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 10:43:58 --> Language Class Initialized
DEBUG - 2013-11-11 10:43:58 --> Loader Class Initialized
DEBUG - 2013-11-11 10:43:58 --> Helper loaded: form_helper
DEBUG - 2013-11-11 10:43:58 --> Helper loaded: url_helper
DEBUG - 2013-11-11 10:43:58 --> Helper loaded: html_helper
DEBUG - 2013-11-11 10:43:58 --> Database Driver Class Initialized
DEBUG - 2013-11-11 10:43:58 --> Session Class Initialized
DEBUG - 2013-11-11 10:43:58 --> Helper loaded: string_helper
DEBUG - 2013-11-11 10:43:58 --> Session routines successfully run
DEBUG - 2013-11-11 10:43:58 --> Form Validation Class Initialized
DEBUG - 2013-11-11 10:43:58 --> Controller Class Initialized
DEBUG - 2013-11-11 10:43:58 --> Model Class Initialized
DEBUG - 2013-11-11 10:43:58 --> Model Class Initialized
DEBUG - 2013-11-11 10:43:58 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 10:43:58 --> after session initialization................
ERROR - 2013-11-11 10:43:58 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-11 10:43:58 --> Config Class Initialized
DEBUG - 2013-11-11 10:43:58 --> Hooks Class Initialized
DEBUG - 2013-11-11 10:43:58 --> Utf8 Class Initialized
DEBUG - 2013-11-11 10:43:58 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 10:43:58 --> URI Class Initialized
DEBUG - 2013-11-11 10:43:58 --> Router Class Initialized
ERROR - 2013-11-11 10:43:58 --> 404 Page Not Found --> css
DEBUG - 2013-11-11 10:43:59 --> Config Class Initialized
DEBUG - 2013-11-11 10:43:59 --> Hooks Class Initialized
DEBUG - 2013-11-11 10:43:59 --> Utf8 Class Initialized
DEBUG - 2013-11-11 10:43:59 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 10:43:59 --> URI Class Initialized
DEBUG - 2013-11-11 10:43:59 --> Router Class Initialized
DEBUG - 2013-11-11 10:43:59 --> Output Class Initialized
DEBUG - 2013-11-11 10:43:59 --> Security Class Initialized
DEBUG - 2013-11-11 10:43:59 --> Input Class Initialized
DEBUG - 2013-11-11 10:43:59 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 10:43:59 --> Language Class Initialized
DEBUG - 2013-11-11 10:43:59 --> Loader Class Initialized
DEBUG - 2013-11-11 10:43:59 --> Helper loaded: form_helper
DEBUG - 2013-11-11 10:43:59 --> Helper loaded: url_helper
DEBUG - 2013-11-11 10:43:59 --> Helper loaded: html_helper
DEBUG - 2013-11-11 10:43:59 --> Database Driver Class Initialized
DEBUG - 2013-11-11 10:43:59 --> Session Class Initialized
DEBUG - 2013-11-11 10:43:59 --> Helper loaded: string_helper
DEBUG - 2013-11-11 10:43:59 --> Session routines successfully run
DEBUG - 2013-11-11 10:43:59 --> Form Validation Class Initialized
DEBUG - 2013-11-11 10:43:59 --> Controller Class Initialized
DEBUG - 2013-11-11 10:43:59 --> Model Class Initialized
DEBUG - 2013-11-11 10:43:59 --> Model Class Initialized
DEBUG - 2013-11-11 10:43:59 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 10:43:59 --> after session initialization................
INFO  - 2013-11-11 10:43:59 --> last news id is 0
INFO  - 2013-11-11 10:43:59 --> SELECT a.id_article as id, a.title as newsletter_title, a.description as newsletter_description, a.guestonly as guestonly, a.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`article` a)
JOIN `member` m ON `a`.`memberid_member` = `m`.`id_member`
WHERE `a`.`id_article` <> 0
ORDER BY `a`.`id_article` desc
LIMIT 15
INFO  - 2013-11-11 10:43:59 --> after newsleters list has been clicked.................
INFO  - 2013-11-11 10:43:59 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=112&article_type=newsletter_title
INFO  - 2013-11-11 10:43:59 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=111&article_type=newsletter_title
INFO  - 2013-11-11 10:43:59 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=110&article_type=newsletter_title
INFO  - 2013-11-11 10:43:59 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=109&article_type=newsletter_title
INFO  - 2013-11-11 10:43:59 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=108&article_type=newsletter_title
INFO  - 2013-11-11 10:43:59 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=107&article_type=newsletter_title
INFO  - 2013-11-11 10:43:59 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=106&article_type=newsletter_title
INFO  - 2013-11-11 10:43:59 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=105&article_type=newsletter_title
INFO  - 2013-11-11 10:43:59 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=104&article_type=newsletter_title
INFO  - 2013-11-11 10:43:59 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=103&article_type=newsletter_title
INFO  - 2013-11-11 10:43:59 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=102&article_type=newsletter_title
INFO  - 2013-11-11 10:43:59 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=101&article_type=newsletter_title
INFO  - 2013-11-11 10:43:59 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=100&article_type=newsletter_title
INFO  - 2013-11-11 10:43:59 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=99&article_type=newsletter_title
INFO  - 2013-11-11 10:43:59 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=98&article_type=newsletter_title
DEBUG - 2013-11-11 10:43:59 --> File loaded: ../pharmaray-application/views/articles.php
DEBUG - 2013-11-11 10:43:59 --> Final output sent to browser
DEBUG - 2013-11-11 10:43:59 --> Total execution time: 0.0570
DEBUG - 2013-11-11 10:44:00 --> Config Class Initialized
DEBUG - 2013-11-11 10:44:00 --> Hooks Class Initialized
DEBUG - 2013-11-11 10:44:00 --> Utf8 Class Initialized
DEBUG - 2013-11-11 10:44:00 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 10:44:00 --> URI Class Initialized
DEBUG - 2013-11-11 10:44:00 --> Router Class Initialized
DEBUG - 2013-11-11 10:44:00 --> Output Class Initialized
DEBUG - 2013-11-11 10:44:00 --> Security Class Initialized
DEBUG - 2013-11-11 10:44:00 --> Input Class Initialized
DEBUG - 2013-11-11 10:44:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 10:44:00 --> Language Class Initialized
DEBUG - 2013-11-11 10:44:00 --> Loader Class Initialized
DEBUG - 2013-11-11 10:44:00 --> Helper loaded: form_helper
DEBUG - 2013-11-11 10:44:00 --> Helper loaded: url_helper
DEBUG - 2013-11-11 10:44:00 --> Helper loaded: html_helper
DEBUG - 2013-11-11 10:44:00 --> Database Driver Class Initialized
DEBUG - 2013-11-11 10:44:00 --> Session Class Initialized
DEBUG - 2013-11-11 10:44:00 --> Helper loaded: string_helper
DEBUG - 2013-11-11 10:44:00 --> Session routines successfully run
DEBUG - 2013-11-11 10:44:00 --> Form Validation Class Initialized
DEBUG - 2013-11-11 10:44:00 --> Controller Class Initialized
DEBUG - 2013-11-11 10:44:00 --> Model Class Initialized
DEBUG - 2013-11-11 10:44:00 --> Model Class Initialized
DEBUG - 2013-11-11 10:44:00 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 10:44:00 --> after session initialization................
INFO  - 2013-11-11 10:44:00 --> inside retrieve most commented forum topic 
INFO  - 2013-11-11 10:44:00 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
INFO  - 2013-11-11 10:44:00 --> inside retrieving first 20 topics 
INFO  - 2013-11-11 10:44:00 --> SELECT `t`.`id_topicforum`, upper(t.name) as name, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
LIMIT 20
INFO  - 2013-11-11 10:44:00 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-11 10:44:00 --> SELECT `ff`.`id_forum` as id, `ff`.`name`, count(f.id_forum) as sub_forum
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` is null 
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`
INFO  - 2013-11-11 10:44:00 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-11 10:44:00 --> inside retrieving comments topic id and drug id is 1
INFO  - 2013-11-11 10:44:00 --> SELECT `tc`.`id_topiccomment`, `tc`.`comment`, `tc`.`timecreated`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-11 10:44:00 --> inside retrieving comments topic id 1
INFO  - 2013-11-11 10:44:00 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
INFO  - 2013-11-11 10:44:00 --> after forums has been clicked.................
INFO  - 2013-11-11 10:44:00 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-11-11 10:44:00 --> File loaded: ../pharmaray-application/views/forum.php
DEBUG - 2013-11-11 10:44:00 --> Final output sent to browser
DEBUG - 2013-11-11 10:44:00 --> Total execution time: 0.0730
DEBUG - 2013-11-11 10:44:00 --> Config Class Initialized
DEBUG - 2013-11-11 10:44:00 --> Hooks Class Initialized
DEBUG - 2013-11-11 10:44:00 --> Utf8 Class Initialized
DEBUG - 2013-11-11 10:44:00 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 10:44:00 --> URI Class Initialized
DEBUG - 2013-11-11 10:44:00 --> Router Class Initialized
DEBUG - 2013-11-11 10:44:00 --> Output Class Initialized
DEBUG - 2013-11-11 10:44:00 --> Security Class Initialized
DEBUG - 2013-11-11 10:44:00 --> Input Class Initialized
DEBUG - 2013-11-11 10:44:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 10:44:00 --> Language Class Initialized
DEBUG - 2013-11-11 10:44:00 --> Loader Class Initialized
DEBUG - 2013-11-11 10:44:00 --> Helper loaded: form_helper
DEBUG - 2013-11-11 10:44:00 --> Helper loaded: url_helper
DEBUG - 2013-11-11 10:44:00 --> Helper loaded: html_helper
DEBUG - 2013-11-11 10:44:00 --> Database Driver Class Initialized
DEBUG - 2013-11-11 10:44:00 --> Session Class Initialized
DEBUG - 2013-11-11 10:44:00 --> Helper loaded: string_helper
DEBUG - 2013-11-11 10:44:00 --> Session routines successfully run
DEBUG - 2013-11-11 10:44:00 --> Form Validation Class Initialized
DEBUG - 2013-11-11 10:44:00 --> Controller Class Initialized
DEBUG - 2013-11-11 10:44:00 --> Model Class Initialized
DEBUG - 2013-11-11 10:44:00 --> Model Class Initialized
DEBUG - 2013-11-11 10:44:00 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 10:44:00 --> after session initialization................
ERROR - 2013-11-11 10:44:00 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-11 10:44:00 --> Config Class Initialized
DEBUG - 2013-11-11 10:44:00 --> Hooks Class Initialized
DEBUG - 2013-11-11 10:44:00 --> Utf8 Class Initialized
DEBUG - 2013-11-11 10:44:00 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 10:44:00 --> URI Class Initialized
DEBUG - 2013-11-11 10:44:00 --> Router Class Initialized
ERROR - 2013-11-11 10:44:00 --> 404 Page Not Found --> css
DEBUG - 2013-11-11 10:44:02 --> Config Class Initialized
DEBUG - 2013-11-11 10:44:02 --> Hooks Class Initialized
DEBUG - 2013-11-11 10:44:02 --> Utf8 Class Initialized
DEBUG - 2013-11-11 10:44:02 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 10:44:02 --> URI Class Initialized
DEBUG - 2013-11-11 10:44:02 --> Router Class Initialized
DEBUG - 2013-11-11 10:44:02 --> Output Class Initialized
DEBUG - 2013-11-11 10:44:02 --> Security Class Initialized
DEBUG - 2013-11-11 10:44:02 --> Input Class Initialized
DEBUG - 2013-11-11 10:44:02 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 10:44:02 --> Language Class Initialized
DEBUG - 2013-11-11 10:44:02 --> Loader Class Initialized
DEBUG - 2013-11-11 10:44:02 --> Helper loaded: form_helper
DEBUG - 2013-11-11 10:44:02 --> Helper loaded: url_helper
DEBUG - 2013-11-11 10:44:02 --> Helper loaded: html_helper
DEBUG - 2013-11-11 10:44:02 --> Database Driver Class Initialized
DEBUG - 2013-11-11 10:44:02 --> Session Class Initialized
DEBUG - 2013-11-11 10:44:02 --> Helper loaded: string_helper
DEBUG - 2013-11-11 10:44:02 --> Session routines successfully run
DEBUG - 2013-11-11 10:44:02 --> Form Validation Class Initialized
DEBUG - 2013-11-11 10:44:02 --> Controller Class Initialized
DEBUG - 2013-11-11 10:44:02 --> Model Class Initialized
DEBUG - 2013-11-11 10:44:02 --> Model Class Initialized
DEBUG - 2013-11-11 10:44:02 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 10:44:02 --> after session initialization................
INFO  - 2013-11-11 10:44:02 --> inside the retrieve ajax topic comment page.................
INFO  - 2013-11-11 10:44:02 --> inside retrieving comments member id and forum topic id is 1
INFO  - 2013-11-11 10:44:02 --> 10==============================10
INFO  - 2013-11-11 10:44:02 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10, 10
INFO  - 2013-11-11 10:44:02 --> [{"id":"3","comment":"this is not just right","timecreated":"2013-10-24 14:21:05","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"2","comment":"This is just not right...I have had this for a very long time that it drives me crazy","timecreated":"2013-10-24 14:14:47","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"1","comment":"check this comment now....","timecreated":"2013-10-24 14:14:12","membername":"Elvis onuorah","membertypeimage":"profilem1"}]
DEBUG - 2013-11-11 10:44:02 --> Final output sent to browser
DEBUG - 2013-11-11 10:44:02 --> Total execution time: 0.0450
DEBUG - 2013-11-11 10:44:04 --> Config Class Initialized
DEBUG - 2013-11-11 10:44:04 --> Hooks Class Initialized
DEBUG - 2013-11-11 10:44:04 --> Utf8 Class Initialized
DEBUG - 2013-11-11 10:44:04 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 10:44:04 --> URI Class Initialized
DEBUG - 2013-11-11 10:44:04 --> Router Class Initialized
DEBUG - 2013-11-11 10:44:04 --> Output Class Initialized
DEBUG - 2013-11-11 10:44:04 --> Security Class Initialized
DEBUG - 2013-11-11 10:44:04 --> Input Class Initialized
DEBUG - 2013-11-11 10:44:04 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 10:44:04 --> Language Class Initialized
DEBUG - 2013-11-11 10:44:04 --> Loader Class Initialized
DEBUG - 2013-11-11 10:44:04 --> Helper loaded: form_helper
DEBUG - 2013-11-11 10:44:04 --> Helper loaded: url_helper
DEBUG - 2013-11-11 10:44:04 --> Helper loaded: html_helper
DEBUG - 2013-11-11 10:44:04 --> Database Driver Class Initialized
DEBUG - 2013-11-11 10:44:04 --> Session Class Initialized
DEBUG - 2013-11-11 10:44:04 --> Helper loaded: string_helper
DEBUG - 2013-11-11 10:44:04 --> Session routines successfully run
DEBUG - 2013-11-11 10:44:04 --> Form Validation Class Initialized
DEBUG - 2013-11-11 10:44:04 --> Controller Class Initialized
DEBUG - 2013-11-11 10:44:04 --> Model Class Initialized
DEBUG - 2013-11-11 10:44:04 --> Model Class Initialized
DEBUG - 2013-11-11 10:44:04 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 10:44:04 --> after session initialization................
INFO  - 2013-11-11 10:44:04 --> inside the retrieve ajax topic comment page.................
INFO  - 2013-11-11 10:44:04 --> inside retrieving comments member id and forum topic id is 1
INFO  - 2013-11-11 10:44:04 --> 10==============================13
INFO  - 2013-11-11 10:44:04 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 13, 10
INFO  - 2013-11-11 10:44:04 --> []
DEBUG - 2013-11-11 10:44:04 --> Final output sent to browser
DEBUG - 2013-11-11 10:44:04 --> Total execution time: 0.0480
DEBUG - 2013-11-11 10:44:06 --> Config Class Initialized
DEBUG - 2013-11-11 10:44:06 --> Hooks Class Initialized
DEBUG - 2013-11-11 10:44:06 --> Utf8 Class Initialized
DEBUG - 2013-11-11 10:44:06 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 10:44:06 --> URI Class Initialized
DEBUG - 2013-11-11 10:44:06 --> Router Class Initialized
DEBUG - 2013-11-11 10:44:06 --> Output Class Initialized
DEBUG - 2013-11-11 10:44:06 --> Security Class Initialized
DEBUG - 2013-11-11 10:44:06 --> Input Class Initialized
DEBUG - 2013-11-11 10:44:06 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 10:44:06 --> Language Class Initialized
DEBUG - 2013-11-11 10:44:06 --> Loader Class Initialized
DEBUG - 2013-11-11 10:44:06 --> Helper loaded: form_helper
DEBUG - 2013-11-11 10:44:06 --> Helper loaded: url_helper
DEBUG - 2013-11-11 10:44:06 --> Helper loaded: html_helper
DEBUG - 2013-11-11 10:44:06 --> Database Driver Class Initialized
DEBUG - 2013-11-11 10:44:06 --> Session Class Initialized
DEBUG - 2013-11-11 10:44:06 --> Helper loaded: string_helper
DEBUG - 2013-11-11 10:44:06 --> Session routines successfully run
DEBUG - 2013-11-11 10:44:06 --> Form Validation Class Initialized
DEBUG - 2013-11-11 10:44:06 --> Controller Class Initialized
DEBUG - 2013-11-11 10:44:06 --> Model Class Initialized
DEBUG - 2013-11-11 10:44:06 --> Model Class Initialized
DEBUG - 2013-11-11 10:44:06 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 10:44:06 --> after session initialization................
INFO  - 2013-11-11 10:44:06 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-11 10:44:06 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-11 10:44:06 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
DEBUG - 2013-11-11 10:44:06 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-11 10:44:06 --> Final output sent to browser
DEBUG - 2013-11-11 10:44:06 --> Total execution time: 0.0490
DEBUG - 2013-11-11 10:44:06 --> Config Class Initialized
DEBUG - 2013-11-11 10:44:06 --> Hooks Class Initialized
DEBUG - 2013-11-11 10:44:06 --> Utf8 Class Initialized
DEBUG - 2013-11-11 10:44:06 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 10:44:06 --> URI Class Initialized
DEBUG - 2013-11-11 10:44:06 --> Router Class Initialized
DEBUG - 2013-11-11 10:44:06 --> Output Class Initialized
DEBUG - 2013-11-11 10:44:06 --> Security Class Initialized
DEBUG - 2013-11-11 10:44:06 --> Input Class Initialized
DEBUG - 2013-11-11 10:44:06 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 10:44:06 --> Language Class Initialized
DEBUG - 2013-11-11 10:44:06 --> Loader Class Initialized
DEBUG - 2013-11-11 10:44:06 --> Helper loaded: form_helper
DEBUG - 2013-11-11 10:44:06 --> Helper loaded: url_helper
DEBUG - 2013-11-11 10:44:06 --> Helper loaded: html_helper
DEBUG - 2013-11-11 10:44:06 --> Database Driver Class Initialized
DEBUG - 2013-11-11 10:44:06 --> Session Class Initialized
DEBUG - 2013-11-11 10:44:06 --> Helper loaded: string_helper
DEBUG - 2013-11-11 10:44:06 --> Session routines successfully run
DEBUG - 2013-11-11 10:44:06 --> Form Validation Class Initialized
DEBUG - 2013-11-11 10:44:06 --> Controller Class Initialized
DEBUG - 2013-11-11 10:44:06 --> Model Class Initialized
DEBUG - 2013-11-11 10:44:06 --> Model Class Initialized
DEBUG - 2013-11-11 10:44:06 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 10:44:06 --> after session initialization................
ERROR - 2013-11-11 10:44:06 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-11 12:29:14 --> Config Class Initialized
DEBUG - 2013-11-11 12:29:14 --> Hooks Class Initialized
DEBUG - 2013-11-11 12:29:14 --> Utf8 Class Initialized
DEBUG - 2013-11-11 12:29:14 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 12:29:14 --> URI Class Initialized
DEBUG - 2013-11-11 12:29:14 --> Router Class Initialized
DEBUG - 2013-11-11 12:29:14 --> Output Class Initialized
DEBUG - 2013-11-11 12:29:14 --> Security Class Initialized
DEBUG - 2013-11-11 12:29:14 --> Input Class Initialized
DEBUG - 2013-11-11 12:29:14 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 12:29:14 --> Language Class Initialized
DEBUG - 2013-11-11 12:29:14 --> Loader Class Initialized
DEBUG - 2013-11-11 12:29:14 --> Helper loaded: form_helper
DEBUG - 2013-11-11 12:29:14 --> Helper loaded: url_helper
DEBUG - 2013-11-11 12:29:14 --> Helper loaded: html_helper
DEBUG - 2013-11-11 12:29:14 --> Database Driver Class Initialized
DEBUG - 2013-11-11 12:29:14 --> Session Class Initialized
DEBUG - 2013-11-11 12:29:14 --> Helper loaded: string_helper
DEBUG - 2013-11-11 12:29:14 --> Session routines successfully run
DEBUG - 2013-11-11 12:29:14 --> Form Validation Class Initialized
DEBUG - 2013-11-11 12:29:14 --> Controller Class Initialized
DEBUG - 2013-11-11 12:29:14 --> Model Class Initialized
DEBUG - 2013-11-11 12:29:14 --> Model Class Initialized
DEBUG - 2013-11-11 12:29:14 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 12:29:14 --> after session initialization................
INFO  - 2013-11-11 12:29:14 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-11 12:29:14 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-11 12:29:14 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-11 12:29:14 --> inside retrieving locations 
INFO  - 2013-11-11 12:29:14 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-11 12:29:52 --> Config Class Initialized
DEBUG - 2013-11-11 12:29:52 --> Hooks Class Initialized
DEBUG - 2013-11-11 12:29:52 --> Utf8 Class Initialized
DEBUG - 2013-11-11 12:29:52 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 12:29:52 --> URI Class Initialized
DEBUG - 2013-11-11 12:29:52 --> Router Class Initialized
DEBUG - 2013-11-11 12:29:52 --> Output Class Initialized
DEBUG - 2013-11-11 12:29:52 --> Security Class Initialized
DEBUG - 2013-11-11 12:29:52 --> Input Class Initialized
DEBUG - 2013-11-11 12:29:52 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 12:29:52 --> Language Class Initialized
DEBUG - 2013-11-11 12:29:52 --> Loader Class Initialized
DEBUG - 2013-11-11 12:29:52 --> Helper loaded: form_helper
DEBUG - 2013-11-11 12:29:52 --> Helper loaded: url_helper
DEBUG - 2013-11-11 12:29:52 --> Helper loaded: html_helper
DEBUG - 2013-11-11 12:29:52 --> Database Driver Class Initialized
DEBUG - 2013-11-11 12:29:52 --> Session Class Initialized
DEBUG - 2013-11-11 12:29:52 --> Helper loaded: string_helper
DEBUG - 2013-11-11 12:29:52 --> Session routines successfully run
DEBUG - 2013-11-11 12:29:52 --> Form Validation Class Initialized
DEBUG - 2013-11-11 12:29:52 --> Controller Class Initialized
DEBUG - 2013-11-11 12:29:52 --> Model Class Initialized
DEBUG - 2013-11-11 12:29:52 --> Model Class Initialized
DEBUG - 2013-11-11 12:29:52 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 12:29:52 --> after session initialization................
INFO  - 2013-11-11 12:29:52 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-11 12:29:52 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-11 12:29:52 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-11 12:29:52 --> inside retrieving locations 
INFO  - 2013-11-11 12:29:52 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-11 12:29:52 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-11 12:29:52 --> Final output sent to browser
DEBUG - 2013-11-11 12:29:52 --> Total execution time: 0.0570
DEBUG - 2013-11-11 12:29:52 --> Config Class Initialized
DEBUG - 2013-11-11 12:29:52 --> Hooks Class Initialized
DEBUG - 2013-11-11 12:29:52 --> Utf8 Class Initialized
DEBUG - 2013-11-11 12:29:52 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 12:29:52 --> URI Class Initialized
DEBUG - 2013-11-11 12:29:52 --> Router Class Initialized
DEBUG - 2013-11-11 12:29:52 --> Output Class Initialized
DEBUG - 2013-11-11 12:29:52 --> Security Class Initialized
DEBUG - 2013-11-11 12:29:52 --> Input Class Initialized
DEBUG - 2013-11-11 12:29:52 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 12:29:52 --> Language Class Initialized
DEBUG - 2013-11-11 12:29:52 --> Loader Class Initialized
DEBUG - 2013-11-11 12:29:52 --> Helper loaded: form_helper
DEBUG - 2013-11-11 12:29:52 --> Helper loaded: url_helper
DEBUG - 2013-11-11 12:29:52 --> Helper loaded: html_helper
DEBUG - 2013-11-11 12:29:52 --> Database Driver Class Initialized
DEBUG - 2013-11-11 12:29:52 --> Session Class Initialized
DEBUG - 2013-11-11 12:29:52 --> Helper loaded: string_helper
DEBUG - 2013-11-11 12:29:52 --> Session routines successfully run
DEBUG - 2013-11-11 12:29:52 --> Form Validation Class Initialized
DEBUG - 2013-11-11 12:29:52 --> Controller Class Initialized
DEBUG - 2013-11-11 12:29:52 --> Model Class Initialized
DEBUG - 2013-11-11 12:29:52 --> Model Class Initialized
DEBUG - 2013-11-11 12:29:52 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 12:29:52 --> after session initialization................
ERROR - 2013-11-11 12:29:52 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-11 12:57:15 --> Config Class Initialized
DEBUG - 2013-11-11 12:57:15 --> Hooks Class Initialized
DEBUG - 2013-11-11 12:57:15 --> Utf8 Class Initialized
DEBUG - 2013-11-11 12:57:15 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 12:57:15 --> URI Class Initialized
DEBUG - 2013-11-11 12:57:15 --> Router Class Initialized
DEBUG - 2013-11-11 12:57:15 --> Output Class Initialized
DEBUG - 2013-11-11 12:57:15 --> Security Class Initialized
DEBUG - 2013-11-11 12:57:15 --> Input Class Initialized
DEBUG - 2013-11-11 12:57:15 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 12:57:15 --> Language Class Initialized
DEBUG - 2013-11-11 12:57:15 --> Loader Class Initialized
DEBUG - 2013-11-11 12:57:15 --> Helper loaded: form_helper
DEBUG - 2013-11-11 12:57:15 --> Helper loaded: url_helper
DEBUG - 2013-11-11 12:57:15 --> Helper loaded: html_helper
DEBUG - 2013-11-11 12:57:15 --> Database Driver Class Initialized
DEBUG - 2013-11-11 12:57:16 --> Session Class Initialized
DEBUG - 2013-11-11 12:57:16 --> Helper loaded: string_helper
DEBUG - 2013-11-11 12:57:16 --> Session routines successfully run
DEBUG - 2013-11-11 12:57:16 --> Form Validation Class Initialized
DEBUG - 2013-11-11 12:57:16 --> Controller Class Initialized
DEBUG - 2013-11-11 12:57:16 --> Model Class Initialized
DEBUG - 2013-11-11 12:57:16 --> Model Class Initialized
DEBUG - 2013-11-11 12:57:16 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 12:57:16 --> after session initialization................
INFO  - 2013-11-11 12:57:16 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-11 12:57:16 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-11 12:57:16 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-11 12:57:16 --> inside retrieving locations 
INFO  - 2013-11-11 12:57:16 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-11 12:57:16 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-11 12:57:16 --> Final output sent to browser
DEBUG - 2013-11-11 12:57:16 --> Total execution time: 1.0761
DEBUG - 2013-11-11 12:57:16 --> Config Class Initialized
DEBUG - 2013-11-11 12:57:16 --> Hooks Class Initialized
DEBUG - 2013-11-11 12:57:16 --> Utf8 Class Initialized
DEBUG - 2013-11-11 12:57:16 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 12:57:16 --> URI Class Initialized
DEBUG - 2013-11-11 12:57:16 --> Router Class Initialized
DEBUG - 2013-11-11 12:57:16 --> Output Class Initialized
DEBUG - 2013-11-11 12:57:16 --> Security Class Initialized
DEBUG - 2013-11-11 12:57:16 --> Input Class Initialized
DEBUG - 2013-11-11 12:57:16 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 12:57:16 --> Language Class Initialized
DEBUG - 2013-11-11 12:57:16 --> Loader Class Initialized
DEBUG - 2013-11-11 12:57:16 --> Helper loaded: form_helper
DEBUG - 2013-11-11 12:57:16 --> Helper loaded: url_helper
DEBUG - 2013-11-11 12:57:16 --> Helper loaded: html_helper
DEBUG - 2013-11-11 12:57:16 --> Database Driver Class Initialized
DEBUG - 2013-11-11 12:57:16 --> Session Class Initialized
DEBUG - 2013-11-11 12:57:16 --> Helper loaded: string_helper
DEBUG - 2013-11-11 12:57:16 --> Session routines successfully run
DEBUG - 2013-11-11 12:57:16 --> Form Validation Class Initialized
DEBUG - 2013-11-11 12:57:16 --> Controller Class Initialized
DEBUG - 2013-11-11 12:57:16 --> Model Class Initialized
DEBUG - 2013-11-11 12:57:16 --> Model Class Initialized
DEBUG - 2013-11-11 12:57:16 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 12:57:16 --> after session initialization................
ERROR - 2013-11-11 12:57:16 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-11 12:57:22 --> Config Class Initialized
DEBUG - 2013-11-11 12:57:22 --> Hooks Class Initialized
DEBUG - 2013-11-11 12:57:22 --> Utf8 Class Initialized
DEBUG - 2013-11-11 12:57:22 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 12:57:22 --> URI Class Initialized
DEBUG - 2013-11-11 12:57:22 --> Router Class Initialized
DEBUG - 2013-11-11 12:57:22 --> Output Class Initialized
DEBUG - 2013-11-11 12:57:22 --> Security Class Initialized
DEBUG - 2013-11-11 12:57:22 --> Input Class Initialized
DEBUG - 2013-11-11 12:57:22 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 12:57:22 --> Language Class Initialized
DEBUG - 2013-11-11 12:57:22 --> Loader Class Initialized
DEBUG - 2013-11-11 12:57:22 --> Helper loaded: form_helper
DEBUG - 2013-11-11 12:57:22 --> Helper loaded: url_helper
DEBUG - 2013-11-11 12:57:22 --> Helper loaded: html_helper
DEBUG - 2013-11-11 12:57:22 --> Database Driver Class Initialized
DEBUG - 2013-11-11 12:57:22 --> Session Class Initialized
DEBUG - 2013-11-11 12:57:22 --> Helper loaded: string_helper
DEBUG - 2013-11-11 12:57:22 --> Session routines successfully run
DEBUG - 2013-11-11 12:57:22 --> Form Validation Class Initialized
DEBUG - 2013-11-11 12:57:22 --> Controller Class Initialized
DEBUG - 2013-11-11 12:57:22 --> Model Class Initialized
DEBUG - 2013-11-11 12:57:22 --> Model Class Initialized
DEBUG - 2013-11-11 12:57:22 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 12:57:22 --> after session initialization................
ERROR - 2013-11-11 12:57:22 --> 404 Page Not Found --> user_authorization/undefinedsys_admin
DEBUG - 2013-11-11 12:57:24 --> Config Class Initialized
DEBUG - 2013-11-11 12:57:24 --> Hooks Class Initialized
DEBUG - 2013-11-11 12:57:24 --> Utf8 Class Initialized
DEBUG - 2013-11-11 12:57:24 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 12:57:24 --> URI Class Initialized
DEBUG - 2013-11-11 12:57:24 --> Router Class Initialized
DEBUG - 2013-11-11 12:57:24 --> Output Class Initialized
DEBUG - 2013-11-11 12:57:24 --> Security Class Initialized
DEBUG - 2013-11-11 12:57:24 --> Input Class Initialized
DEBUG - 2013-11-11 12:57:24 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 12:57:24 --> Language Class Initialized
DEBUG - 2013-11-11 12:57:24 --> Loader Class Initialized
DEBUG - 2013-11-11 12:57:24 --> Helper loaded: form_helper
DEBUG - 2013-11-11 12:57:24 --> Helper loaded: url_helper
DEBUG - 2013-11-11 12:57:24 --> Helper loaded: html_helper
DEBUG - 2013-11-11 12:57:24 --> Database Driver Class Initialized
DEBUG - 2013-11-11 12:57:24 --> Session Class Initialized
DEBUG - 2013-11-11 12:57:24 --> Helper loaded: string_helper
DEBUG - 2013-11-11 12:57:24 --> Session routines successfully run
DEBUG - 2013-11-11 12:57:24 --> Form Validation Class Initialized
DEBUG - 2013-11-11 12:57:24 --> Controller Class Initialized
DEBUG - 2013-11-11 12:57:24 --> Model Class Initialized
DEBUG - 2013-11-11 12:57:24 --> Model Class Initialized
DEBUG - 2013-11-11 12:57:24 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 12:57:24 --> after session initialization................
ERROR - 2013-11-11 12:57:24 --> 404 Page Not Found --> user_authorization/undefinedsys_admin
DEBUG - 2013-11-11 12:57:25 --> Config Class Initialized
DEBUG - 2013-11-11 12:57:25 --> Hooks Class Initialized
DEBUG - 2013-11-11 12:57:25 --> Utf8 Class Initialized
DEBUG - 2013-11-11 12:57:25 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 12:57:25 --> URI Class Initialized
DEBUG - 2013-11-11 12:57:25 --> Router Class Initialized
DEBUG - 2013-11-11 12:57:25 --> Output Class Initialized
DEBUG - 2013-11-11 12:57:25 --> Security Class Initialized
DEBUG - 2013-11-11 12:57:25 --> Input Class Initialized
DEBUG - 2013-11-11 12:57:25 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 12:57:25 --> Language Class Initialized
DEBUG - 2013-11-11 12:57:25 --> Loader Class Initialized
DEBUG - 2013-11-11 12:57:25 --> Helper loaded: form_helper
DEBUG - 2013-11-11 12:57:25 --> Helper loaded: url_helper
DEBUG - 2013-11-11 12:57:25 --> Helper loaded: html_helper
DEBUG - 2013-11-11 12:57:25 --> Database Driver Class Initialized
DEBUG - 2013-11-11 12:57:25 --> Session Class Initialized
DEBUG - 2013-11-11 12:57:25 --> Helper loaded: string_helper
DEBUG - 2013-11-11 12:57:25 --> Session routines successfully run
DEBUG - 2013-11-11 12:57:25 --> Form Validation Class Initialized
DEBUG - 2013-11-11 12:57:25 --> Controller Class Initialized
DEBUG - 2013-11-11 12:57:25 --> Model Class Initialized
DEBUG - 2013-11-11 12:57:25 --> Model Class Initialized
DEBUG - 2013-11-11 12:57:25 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 12:57:25 --> after session initialization................
ERROR - 2013-11-11 12:57:25 --> 404 Page Not Found --> user_authorization/undefinedsys_admin
DEBUG - 2013-11-11 12:57:25 --> Config Class Initialized
DEBUG - 2013-11-11 12:57:25 --> Hooks Class Initialized
DEBUG - 2013-11-11 12:57:25 --> Utf8 Class Initialized
DEBUG - 2013-11-11 12:57:25 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 12:57:25 --> URI Class Initialized
DEBUG - 2013-11-11 12:57:25 --> Router Class Initialized
DEBUG - 2013-11-11 12:57:25 --> Output Class Initialized
DEBUG - 2013-11-11 12:57:25 --> Security Class Initialized
DEBUG - 2013-11-11 12:57:25 --> Input Class Initialized
DEBUG - 2013-11-11 12:57:25 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 12:57:25 --> Language Class Initialized
DEBUG - 2013-11-11 12:57:25 --> Loader Class Initialized
DEBUG - 2013-11-11 12:57:25 --> Helper loaded: form_helper
DEBUG - 2013-11-11 12:57:25 --> Helper loaded: url_helper
DEBUG - 2013-11-11 12:57:25 --> Helper loaded: html_helper
DEBUG - 2013-11-11 12:57:25 --> Database Driver Class Initialized
DEBUG - 2013-11-11 12:57:25 --> Session Class Initialized
DEBUG - 2013-11-11 12:57:25 --> Helper loaded: string_helper
DEBUG - 2013-11-11 12:57:25 --> Session routines successfully run
DEBUG - 2013-11-11 12:57:25 --> Form Validation Class Initialized
DEBUG - 2013-11-11 12:57:25 --> Controller Class Initialized
DEBUG - 2013-11-11 12:57:25 --> Model Class Initialized
DEBUG - 2013-11-11 12:57:25 --> Model Class Initialized
DEBUG - 2013-11-11 12:57:25 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 12:57:25 --> after session initialization................
ERROR - 2013-11-11 12:57:25 --> 404 Page Not Found --> user_authorization/undefinedsys_admin
DEBUG - 2013-11-11 12:57:35 --> Config Class Initialized
DEBUG - 2013-11-11 12:57:35 --> Hooks Class Initialized
DEBUG - 2013-11-11 12:57:35 --> Utf8 Class Initialized
DEBUG - 2013-11-11 12:57:35 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 12:57:35 --> URI Class Initialized
DEBUG - 2013-11-11 12:57:35 --> Router Class Initialized
DEBUG - 2013-11-11 12:57:35 --> Output Class Initialized
DEBUG - 2013-11-11 12:57:35 --> Security Class Initialized
DEBUG - 2013-11-11 12:57:35 --> Input Class Initialized
DEBUG - 2013-11-11 12:57:35 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 12:57:35 --> Language Class Initialized
DEBUG - 2013-11-11 12:57:35 --> Loader Class Initialized
DEBUG - 2013-11-11 12:57:35 --> Helper loaded: form_helper
DEBUG - 2013-11-11 12:57:35 --> Helper loaded: url_helper
DEBUG - 2013-11-11 12:57:35 --> Helper loaded: html_helper
DEBUG - 2013-11-11 12:57:35 --> Database Driver Class Initialized
DEBUG - 2013-11-11 12:57:35 --> Session Class Initialized
DEBUG - 2013-11-11 12:57:35 --> Helper loaded: string_helper
DEBUG - 2013-11-11 12:57:35 --> Session routines successfully run
DEBUG - 2013-11-11 12:57:35 --> Form Validation Class Initialized
DEBUG - 2013-11-11 12:57:35 --> Controller Class Initialized
DEBUG - 2013-11-11 12:57:35 --> Model Class Initialized
DEBUG - 2013-11-11 12:57:35 --> Model Class Initialized
DEBUG - 2013-11-11 12:57:35 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 12:57:35 --> after session initialization................
ERROR - 2013-11-11 12:57:35 --> 404 Page Not Found --> user_authorization/undefinedsys_admin
DEBUG - 2013-11-11 16:19:22 --> Config Class Initialized
DEBUG - 2013-11-11 16:19:22 --> Hooks Class Initialized
DEBUG - 2013-11-11 16:19:22 --> Utf8 Class Initialized
DEBUG - 2013-11-11 16:19:22 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 16:19:22 --> URI Class Initialized
DEBUG - 2013-11-11 16:19:22 --> Router Class Initialized
DEBUG - 2013-11-11 16:19:22 --> Output Class Initialized
DEBUG - 2013-11-11 16:19:22 --> Security Class Initialized
DEBUG - 2013-11-11 16:19:22 --> Input Class Initialized
DEBUG - 2013-11-11 16:19:22 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 16:19:22 --> Language Class Initialized
DEBUG - 2013-11-11 16:19:22 --> Loader Class Initialized
DEBUG - 2013-11-11 16:19:22 --> Helper loaded: form_helper
DEBUG - 2013-11-11 16:19:22 --> Helper loaded: url_helper
DEBUG - 2013-11-11 16:19:22 --> Helper loaded: html_helper
DEBUG - 2013-11-11 16:19:22 --> Database Driver Class Initialized
DEBUG - 2013-11-11 16:19:23 --> Session Class Initialized
DEBUG - 2013-11-11 16:19:23 --> Helper loaded: string_helper
DEBUG - 2013-11-11 16:19:23 --> A session cookie was not found.
DEBUG - 2013-11-11 16:19:23 --> Session routines successfully run
DEBUG - 2013-11-11 16:19:23 --> Form Validation Class Initialized
DEBUG - 2013-11-11 16:19:23 --> Controller Class Initialized
DEBUG - 2013-11-11 16:19:23 --> Model Class Initialized
DEBUG - 2013-11-11 16:19:23 --> Model Class Initialized
DEBUG - 2013-11-11 16:19:23 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 16:19:23 --> after session initialization................
INFO  - 2013-11-11 16:19:23 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-11 16:19:23 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-11 16:19:23 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-11 16:19:23 --> inside retrieving locations 
INFO  - 2013-11-11 16:19:23 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-11 16:19:23 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-11 16:19:23 --> Final output sent to browser
DEBUG - 2013-11-11 16:19:23 --> Total execution time: 1.1161
DEBUG - 2013-11-11 16:19:23 --> Config Class Initialized
DEBUG - 2013-11-11 16:19:23 --> Hooks Class Initialized
DEBUG - 2013-11-11 16:19:23 --> Utf8 Class Initialized
DEBUG - 2013-11-11 16:19:23 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 16:19:23 --> URI Class Initialized
DEBUG - 2013-11-11 16:19:23 --> Router Class Initialized
DEBUG - 2013-11-11 16:19:23 --> Output Class Initialized
DEBUG - 2013-11-11 16:19:23 --> Security Class Initialized
DEBUG - 2013-11-11 16:19:23 --> Input Class Initialized
DEBUG - 2013-11-11 16:19:23 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 16:19:23 --> Language Class Initialized
DEBUG - 2013-11-11 16:19:23 --> Loader Class Initialized
DEBUG - 2013-11-11 16:19:23 --> Helper loaded: form_helper
DEBUG - 2013-11-11 16:19:23 --> Helper loaded: url_helper
DEBUG - 2013-11-11 16:19:23 --> Helper loaded: html_helper
DEBUG - 2013-11-11 16:19:23 --> Database Driver Class Initialized
DEBUG - 2013-11-11 16:19:23 --> Session Class Initialized
DEBUG - 2013-11-11 16:19:23 --> Helper loaded: string_helper
DEBUG - 2013-11-11 16:19:23 --> Session routines successfully run
DEBUG - 2013-11-11 16:19:23 --> Form Validation Class Initialized
DEBUG - 2013-11-11 16:19:23 --> Controller Class Initialized
DEBUG - 2013-11-11 16:19:23 --> Model Class Initialized
DEBUG - 2013-11-11 16:19:23 --> Model Class Initialized
DEBUG - 2013-11-11 16:19:23 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 16:19:23 --> after session initialization................
ERROR - 2013-11-11 16:19:23 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-11 16:19:24 --> Config Class Initialized
DEBUG - 2013-11-11 16:19:24 --> Hooks Class Initialized
DEBUG - 2013-11-11 16:19:24 --> Utf8 Class Initialized
DEBUG - 2013-11-11 16:19:24 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 16:19:24 --> URI Class Initialized
DEBUG - 2013-11-11 16:19:24 --> Router Class Initialized
DEBUG - 2013-11-11 16:19:24 --> Output Class Initialized
DEBUG - 2013-11-11 16:19:24 --> Security Class Initialized
DEBUG - 2013-11-11 16:19:24 --> Input Class Initialized
DEBUG - 2013-11-11 16:19:24 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 16:19:24 --> Language Class Initialized
DEBUG - 2013-11-11 16:19:24 --> Loader Class Initialized
DEBUG - 2013-11-11 16:19:24 --> Helper loaded: form_helper
DEBUG - 2013-11-11 16:19:24 --> Helper loaded: url_helper
DEBUG - 2013-11-11 16:19:24 --> Helper loaded: html_helper
DEBUG - 2013-11-11 16:19:24 --> Database Driver Class Initialized
DEBUG - 2013-11-11 16:19:24 --> Session Class Initialized
DEBUG - 2013-11-11 16:19:24 --> Helper loaded: string_helper
DEBUG - 2013-11-11 16:19:24 --> Session routines successfully run
DEBUG - 2013-11-11 16:19:24 --> Form Validation Class Initialized
DEBUG - 2013-11-11 16:19:24 --> Controller Class Initialized
DEBUG - 2013-11-11 16:19:24 --> Model Class Initialized
DEBUG - 2013-11-11 16:19:24 --> Model Class Initialized
DEBUG - 2013-11-11 16:19:24 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 16:19:24 --> after session initialization................
ERROR - 2013-11-11 16:19:24 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-11 16:19:29 --> Config Class Initialized
DEBUG - 2013-11-11 16:19:29 --> Hooks Class Initialized
DEBUG - 2013-11-11 16:19:29 --> Utf8 Class Initialized
DEBUG - 2013-11-11 16:19:29 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 16:19:29 --> URI Class Initialized
DEBUG - 2013-11-11 16:19:29 --> Router Class Initialized
DEBUG - 2013-11-11 16:19:29 --> Output Class Initialized
DEBUG - 2013-11-11 16:19:29 --> Security Class Initialized
DEBUG - 2013-11-11 16:19:29 --> Input Class Initialized
DEBUG - 2013-11-11 16:19:29 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 16:19:29 --> Language Class Initialized
DEBUG - 2013-11-11 16:19:29 --> Loader Class Initialized
DEBUG - 2013-11-11 16:19:29 --> Helper loaded: form_helper
DEBUG - 2013-11-11 16:19:29 --> Helper loaded: url_helper
DEBUG - 2013-11-11 16:19:29 --> Helper loaded: html_helper
DEBUG - 2013-11-11 16:19:29 --> Database Driver Class Initialized
DEBUG - 2013-11-11 16:19:29 --> Session Class Initialized
DEBUG - 2013-11-11 16:19:29 --> Helper loaded: string_helper
DEBUG - 2013-11-11 16:19:29 --> Session routines successfully run
DEBUG - 2013-11-11 16:19:29 --> Form Validation Class Initialized
DEBUG - 2013-11-11 16:19:29 --> Controller Class Initialized
DEBUG - 2013-11-11 16:19:29 --> Model Class Initialized
DEBUG - 2013-11-11 16:19:29 --> Model Class Initialized
DEBUG - 2013-11-11 16:19:29 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 16:19:29 --> after session initialization................
INFO  - 2013-11-11 16:19:29 --> inside the auto suggest page.................
INFO  - 2013-11-11 16:19:29 --> after the list array.................
INFO  - 2013-11-11 16:19:29 --> after retrieving the data from db.................
INFO  - 2013-11-11 16:19:29 --> looping.................
ERROR - 2013-11-11 16:19:29 --> Severity: Notice  --> Undefined index: pharm_name C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 61
INFO  - 2013-11-11 16:19:29 --> looping.................
ERROR - 2013-11-11 16:19:29 --> Severity: Notice  --> Undefined index: pharm_name C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 61
INFO  - 2013-11-11 16:19:30 --> looping.................
ERROR - 2013-11-11 16:19:30 --> Severity: Notice  --> Undefined index: pharm_name C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 61
DEBUG - 2013-11-11 16:19:30 --> Final output sent to browser
DEBUG - 2013-11-11 16:19:30 --> Total execution time: 0.1140
DEBUG - 2013-11-11 16:20:05 --> Config Class Initialized
DEBUG - 2013-11-11 16:20:05 --> Hooks Class Initialized
DEBUG - 2013-11-11 16:20:05 --> Utf8 Class Initialized
DEBUG - 2013-11-11 16:20:05 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 16:20:05 --> URI Class Initialized
DEBUG - 2013-11-11 16:20:05 --> Router Class Initialized
DEBUG - 2013-11-11 16:20:05 --> Output Class Initialized
DEBUG - 2013-11-11 16:20:05 --> Security Class Initialized
DEBUG - 2013-11-11 16:20:05 --> Input Class Initialized
DEBUG - 2013-11-11 16:20:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 16:20:05 --> Language Class Initialized
DEBUG - 2013-11-11 16:20:05 --> Loader Class Initialized
DEBUG - 2013-11-11 16:20:05 --> Helper loaded: form_helper
DEBUG - 2013-11-11 16:20:05 --> Helper loaded: url_helper
DEBUG - 2013-11-11 16:20:05 --> Helper loaded: html_helper
DEBUG - 2013-11-11 16:20:05 --> Database Driver Class Initialized
DEBUG - 2013-11-11 16:20:05 --> Session Class Initialized
DEBUG - 2013-11-11 16:20:05 --> Helper loaded: string_helper
DEBUG - 2013-11-11 16:20:05 --> Session routines successfully run
DEBUG - 2013-11-11 16:20:05 --> Form Validation Class Initialized
DEBUG - 2013-11-11 16:20:05 --> Controller Class Initialized
DEBUG - 2013-11-11 16:20:05 --> Model Class Initialized
DEBUG - 2013-11-11 16:20:05 --> Model Class Initialized
DEBUG - 2013-11-11 16:20:05 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 16:20:05 --> after session initialization................
INFO  - 2013-11-11 16:20:05 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-11 16:20:05 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-11 16:20:05 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-11 16:20:05 --> inside retrieving locations 
INFO  - 2013-11-11 16:20:05 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-11 16:20:05 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-11 16:20:05 --> Final output sent to browser
DEBUG - 2013-11-11 16:20:05 --> Total execution time: 0.0800
DEBUG - 2013-11-11 16:20:05 --> Config Class Initialized
DEBUG - 2013-11-11 16:20:05 --> Hooks Class Initialized
DEBUG - 2013-11-11 16:20:05 --> Utf8 Class Initialized
DEBUG - 2013-11-11 16:20:05 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 16:20:05 --> URI Class Initialized
DEBUG - 2013-11-11 16:20:05 --> Router Class Initialized
DEBUG - 2013-11-11 16:20:05 --> Output Class Initialized
DEBUG - 2013-11-11 16:20:05 --> Security Class Initialized
DEBUG - 2013-11-11 16:20:05 --> Input Class Initialized
DEBUG - 2013-11-11 16:20:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 16:20:05 --> Language Class Initialized
DEBUG - 2013-11-11 16:20:05 --> Loader Class Initialized
DEBUG - 2013-11-11 16:20:05 --> Helper loaded: form_helper
DEBUG - 2013-11-11 16:20:05 --> Helper loaded: url_helper
DEBUG - 2013-11-11 16:20:05 --> Helper loaded: html_helper
DEBUG - 2013-11-11 16:20:05 --> Database Driver Class Initialized
DEBUG - 2013-11-11 16:20:06 --> Session Class Initialized
DEBUG - 2013-11-11 16:20:06 --> Helper loaded: string_helper
DEBUG - 2013-11-11 16:20:06 --> Session routines successfully run
DEBUG - 2013-11-11 16:20:06 --> Form Validation Class Initialized
DEBUG - 2013-11-11 16:20:06 --> Controller Class Initialized
DEBUG - 2013-11-11 16:20:06 --> Model Class Initialized
DEBUG - 2013-11-11 16:20:06 --> Model Class Initialized
DEBUG - 2013-11-11 16:20:06 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 16:20:06 --> after session initialization................
ERROR - 2013-11-11 16:20:06 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-11 16:20:08 --> Config Class Initialized
DEBUG - 2013-11-11 16:20:08 --> Hooks Class Initialized
DEBUG - 2013-11-11 16:20:08 --> Utf8 Class Initialized
DEBUG - 2013-11-11 16:20:08 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 16:20:08 --> URI Class Initialized
DEBUG - 2013-11-11 16:20:08 --> Router Class Initialized
DEBUG - 2013-11-11 16:20:08 --> Output Class Initialized
DEBUG - 2013-11-11 16:20:08 --> Security Class Initialized
DEBUG - 2013-11-11 16:20:09 --> Input Class Initialized
DEBUG - 2013-11-11 16:20:09 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 16:20:09 --> Language Class Initialized
DEBUG - 2013-11-11 16:20:09 --> Loader Class Initialized
DEBUG - 2013-11-11 16:20:09 --> Helper loaded: form_helper
DEBUG - 2013-11-11 16:20:09 --> Helper loaded: url_helper
DEBUG - 2013-11-11 16:20:09 --> Helper loaded: html_helper
DEBUG - 2013-11-11 16:20:09 --> Database Driver Class Initialized
DEBUG - 2013-11-11 16:20:09 --> Session Class Initialized
DEBUG - 2013-11-11 16:20:09 --> Helper loaded: string_helper
DEBUG - 2013-11-11 16:20:09 --> Session routines successfully run
DEBUG - 2013-11-11 16:20:09 --> Form Validation Class Initialized
DEBUG - 2013-11-11 16:20:09 --> Controller Class Initialized
DEBUG - 2013-11-11 16:20:09 --> Model Class Initialized
DEBUG - 2013-11-11 16:20:09 --> Model Class Initialized
DEBUG - 2013-11-11 16:20:09 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 16:20:09 --> after session initialization................
INFO  - 2013-11-11 16:20:09 --> inside the auto suggest page.................
INFO  - 2013-11-11 16:20:09 --> after the list array.................
INFO  - 2013-11-11 16:20:09 --> after retrieving the data from db.................
INFO  - 2013-11-11 16:20:09 --> looping.................
INFO  - 2013-11-11 16:20:09 --> looping.................
INFO  - 2013-11-11 16:20:09 --> looping.................
DEBUG - 2013-11-11 16:20:09 --> Final output sent to browser
DEBUG - 2013-11-11 16:20:09 --> Total execution time: 0.0880
DEBUG - 2013-11-11 16:20:10 --> Config Class Initialized
DEBUG - 2013-11-11 16:20:10 --> Hooks Class Initialized
DEBUG - 2013-11-11 16:20:10 --> Utf8 Class Initialized
DEBUG - 2013-11-11 16:20:10 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 16:20:10 --> URI Class Initialized
DEBUG - 2013-11-11 16:20:10 --> Router Class Initialized
DEBUG - 2013-11-11 16:20:10 --> Output Class Initialized
DEBUG - 2013-11-11 16:20:10 --> Security Class Initialized
DEBUG - 2013-11-11 16:20:10 --> Input Class Initialized
DEBUG - 2013-11-11 16:20:10 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 16:20:10 --> Language Class Initialized
DEBUG - 2013-11-11 16:20:10 --> Loader Class Initialized
DEBUG - 2013-11-11 16:20:10 --> Helper loaded: form_helper
DEBUG - 2013-11-11 16:20:10 --> Helper loaded: url_helper
DEBUG - 2013-11-11 16:20:10 --> Helper loaded: html_helper
DEBUG - 2013-11-11 16:20:10 --> Database Driver Class Initialized
DEBUG - 2013-11-11 16:20:10 --> Session Class Initialized
DEBUG - 2013-11-11 16:20:10 --> Helper loaded: string_helper
DEBUG - 2013-11-11 16:20:10 --> Session routines successfully run
DEBUG - 2013-11-11 16:20:10 --> Form Validation Class Initialized
DEBUG - 2013-11-11 16:20:10 --> Controller Class Initialized
DEBUG - 2013-11-11 16:20:10 --> Model Class Initialized
DEBUG - 2013-11-11 16:20:10 --> Model Class Initialized
DEBUG - 2013-11-11 16:20:10 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 16:20:10 --> after session initialization................
INFO  - 2013-11-11 16:20:10 --> inside the auto suggest page.................
INFO  - 2013-11-11 16:20:10 --> after the list array.................
INFO  - 2013-11-11 16:20:10 --> after retrieving the data from db.................
INFO  - 2013-11-11 16:20:10 --> looping.................
DEBUG - 2013-11-11 16:20:10 --> Final output sent to browser
DEBUG - 2013-11-11 16:20:10 --> Total execution time: 0.0660
DEBUG - 2013-11-11 16:20:10 --> Config Class Initialized
DEBUG - 2013-11-11 16:20:10 --> Hooks Class Initialized
DEBUG - 2013-11-11 16:20:10 --> Utf8 Class Initialized
DEBUG - 2013-11-11 16:20:10 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 16:20:10 --> URI Class Initialized
DEBUG - 2013-11-11 16:20:10 --> Router Class Initialized
DEBUG - 2013-11-11 16:20:10 --> Output Class Initialized
DEBUG - 2013-11-11 16:20:10 --> Security Class Initialized
DEBUG - 2013-11-11 16:20:10 --> Input Class Initialized
DEBUG - 2013-11-11 16:20:10 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 16:20:10 --> Language Class Initialized
DEBUG - 2013-11-11 16:20:10 --> Loader Class Initialized
DEBUG - 2013-11-11 16:20:10 --> Helper loaded: form_helper
DEBUG - 2013-11-11 16:20:10 --> Helper loaded: url_helper
DEBUG - 2013-11-11 16:20:10 --> Helper loaded: html_helper
DEBUG - 2013-11-11 16:20:10 --> Database Driver Class Initialized
DEBUG - 2013-11-11 16:20:10 --> Session Class Initialized
DEBUG - 2013-11-11 16:20:10 --> Helper loaded: string_helper
DEBUG - 2013-11-11 16:20:10 --> Session routines successfully run
DEBUG - 2013-11-11 16:20:10 --> Form Validation Class Initialized
DEBUG - 2013-11-11 16:20:10 --> Controller Class Initialized
DEBUG - 2013-11-11 16:20:10 --> Model Class Initialized
DEBUG - 2013-11-11 16:20:10 --> Model Class Initialized
DEBUG - 2013-11-11 16:20:10 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 16:20:10 --> after session initialization................
INFO  - 2013-11-11 16:20:10 --> inside the auto suggest page.................
INFO  - 2013-11-11 16:20:10 --> after the list array.................
INFO  - 2013-11-11 16:20:10 --> after retrieving the data from db.................
INFO  - 2013-11-11 16:20:10 --> looping.................
DEBUG - 2013-11-11 16:20:10 --> Final output sent to browser
DEBUG - 2013-11-11 16:20:10 --> Total execution time: 0.0770
DEBUG - 2013-11-11 16:22:26 --> Config Class Initialized
DEBUG - 2013-11-11 16:22:26 --> Hooks Class Initialized
DEBUG - 2013-11-11 16:22:26 --> Utf8 Class Initialized
DEBUG - 2013-11-11 16:22:26 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 16:22:26 --> URI Class Initialized
DEBUG - 2013-11-11 16:22:26 --> Router Class Initialized
DEBUG - 2013-11-11 16:22:26 --> Output Class Initialized
DEBUG - 2013-11-11 16:22:26 --> Security Class Initialized
DEBUG - 2013-11-11 16:22:26 --> Input Class Initialized
DEBUG - 2013-11-11 16:22:26 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 16:22:26 --> Language Class Initialized
DEBUG - 2013-11-11 16:22:26 --> Loader Class Initialized
DEBUG - 2013-11-11 16:22:26 --> Helper loaded: form_helper
DEBUG - 2013-11-11 16:22:26 --> Helper loaded: url_helper
DEBUG - 2013-11-11 16:22:26 --> Helper loaded: html_helper
DEBUG - 2013-11-11 16:22:26 --> Database Driver Class Initialized
DEBUG - 2013-11-11 16:22:26 --> Session Class Initialized
DEBUG - 2013-11-11 16:22:26 --> Helper loaded: string_helper
DEBUG - 2013-11-11 16:22:26 --> Session routines successfully run
DEBUG - 2013-11-11 16:22:26 --> Form Validation Class Initialized
DEBUG - 2013-11-11 16:22:26 --> Controller Class Initialized
DEBUG - 2013-11-11 16:22:26 --> Model Class Initialized
DEBUG - 2013-11-11 16:22:26 --> Model Class Initialized
DEBUG - 2013-11-11 16:22:26 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 16:22:26 --> after session initialization................
INFO  - 2013-11-11 16:22:26 --> last news id is 0
INFO  - 2013-11-11 16:22:26 --> SELECT a.id_article as id, a.title as newsletter_title, a.description as newsletter_description, a.guestonly as guestonly, a.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`article` a)
JOIN `member` m ON `a`.`memberid_member` = `m`.`id_member`
WHERE `a`.`id_article` <> 0
ORDER BY `a`.`id_article` desc
LIMIT 15
INFO  - 2013-11-11 16:22:26 --> after newsleters list has been clicked.................
INFO  - 2013-11-11 16:22:26 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=112&article_type=newsletter_title
INFO  - 2013-11-11 16:22:26 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=111&article_type=newsletter_title
INFO  - 2013-11-11 16:22:26 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=110&article_type=newsletter_title
INFO  - 2013-11-11 16:22:26 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=109&article_type=newsletter_title
INFO  - 2013-11-11 16:22:26 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=108&article_type=newsletter_title
INFO  - 2013-11-11 16:22:26 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=107&article_type=newsletter_title
INFO  - 2013-11-11 16:22:26 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=106&article_type=newsletter_title
INFO  - 2013-11-11 16:22:26 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=105&article_type=newsletter_title
INFO  - 2013-11-11 16:22:26 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=104&article_type=newsletter_title
INFO  - 2013-11-11 16:22:26 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=103&article_type=newsletter_title
INFO  - 2013-11-11 16:22:26 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=102&article_type=newsletter_title
INFO  - 2013-11-11 16:22:26 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=101&article_type=newsletter_title
INFO  - 2013-11-11 16:22:26 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=100&article_type=newsletter_title
INFO  - 2013-11-11 16:22:26 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=99&article_type=newsletter_title
INFO  - 2013-11-11 16:22:26 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=98&article_type=newsletter_title
DEBUG - 2013-11-11 16:22:26 --> File loaded: ../pharmaray-application/views/articles.php
DEBUG - 2013-11-11 16:22:26 --> Final output sent to browser
DEBUG - 2013-11-11 16:22:26 --> Total execution time: 0.0700
DEBUG - 2013-11-11 16:22:28 --> Config Class Initialized
DEBUG - 2013-11-11 16:22:28 --> Hooks Class Initialized
DEBUG - 2013-11-11 16:22:28 --> Utf8 Class Initialized
DEBUG - 2013-11-11 16:22:28 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 16:22:28 --> URI Class Initialized
DEBUG - 2013-11-11 16:22:28 --> Router Class Initialized
DEBUG - 2013-11-11 16:22:28 --> Output Class Initialized
DEBUG - 2013-11-11 16:22:28 --> Security Class Initialized
DEBUG - 2013-11-11 16:22:28 --> Input Class Initialized
DEBUG - 2013-11-11 16:22:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 16:22:28 --> Language Class Initialized
DEBUG - 2013-11-11 16:22:28 --> Loader Class Initialized
DEBUG - 2013-11-11 16:22:28 --> Helper loaded: form_helper
DEBUG - 2013-11-11 16:22:28 --> Helper loaded: url_helper
DEBUG - 2013-11-11 16:22:28 --> Helper loaded: html_helper
DEBUG - 2013-11-11 16:22:28 --> Database Driver Class Initialized
DEBUG - 2013-11-11 16:22:28 --> Session Class Initialized
DEBUG - 2013-11-11 16:22:28 --> Helper loaded: string_helper
DEBUG - 2013-11-11 16:22:28 --> Session routines successfully run
DEBUG - 2013-11-11 16:22:28 --> Form Validation Class Initialized
DEBUG - 2013-11-11 16:22:28 --> Controller Class Initialized
DEBUG - 2013-11-11 16:22:28 --> Model Class Initialized
DEBUG - 2013-11-11 16:22:28 --> Model Class Initialized
DEBUG - 2013-11-11 16:22:28 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 16:22:28 --> after session initialization................
INFO  - 2013-11-11 16:22:28 --> article id is 112
DEBUG - 2013-11-11 16:23:43 --> Config Class Initialized
DEBUG - 2013-11-11 16:23:43 --> Hooks Class Initialized
DEBUG - 2013-11-11 16:23:43 --> Utf8 Class Initialized
DEBUG - 2013-11-11 16:23:43 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 16:23:43 --> URI Class Initialized
DEBUG - 2013-11-11 16:23:43 --> Router Class Initialized
DEBUG - 2013-11-11 16:23:43 --> Output Class Initialized
DEBUG - 2013-11-11 16:23:43 --> Security Class Initialized
DEBUG - 2013-11-11 16:23:43 --> Input Class Initialized
DEBUG - 2013-11-11 16:23:43 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 16:23:43 --> Language Class Initialized
DEBUG - 2013-11-11 16:23:43 --> Loader Class Initialized
DEBUG - 2013-11-11 16:23:43 --> Helper loaded: form_helper
DEBUG - 2013-11-11 16:23:43 --> Helper loaded: url_helper
DEBUG - 2013-11-11 16:23:43 --> Helper loaded: html_helper
DEBUG - 2013-11-11 16:23:43 --> Database Driver Class Initialized
DEBUG - 2013-11-11 16:23:43 --> Session Class Initialized
DEBUG - 2013-11-11 16:23:43 --> Helper loaded: string_helper
DEBUG - 2013-11-11 16:23:43 --> Session routines successfully run
DEBUG - 2013-11-11 16:23:43 --> Form Validation Class Initialized
DEBUG - 2013-11-11 16:23:43 --> Controller Class Initialized
DEBUG - 2013-11-11 16:23:43 --> Model Class Initialized
DEBUG - 2013-11-11 16:23:43 --> Model Class Initialized
DEBUG - 2013-11-11 16:23:43 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 16:23:43 --> after session initialization................
INFO  - 2013-11-11 16:23:43 --> last news id is 0
INFO  - 2013-11-11 16:23:43 --> SELECT a.id_article as id, a.title as newsletter_title, a.description as newsletter_description, a.guestonly as guestonly, a.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`article` a)
JOIN `member` m ON `a`.`memberid_member` = `m`.`id_member`
WHERE `a`.`id_article` <> 0
ORDER BY `a`.`id_article` desc
LIMIT 15
INFO  - 2013-11-11 16:23:43 --> after newsleters list has been clicked.................
INFO  - 2013-11-11 16:23:43 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=112&article_type=newsletter_title
INFO  - 2013-11-11 16:23:43 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=111&article_type=newsletter_title
INFO  - 2013-11-11 16:23:43 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=110&article_type=newsletter_title
INFO  - 2013-11-11 16:23:43 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=109&article_type=newsletter_title
INFO  - 2013-11-11 16:23:43 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=108&article_type=newsletter_title
INFO  - 2013-11-11 16:23:43 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=107&article_type=newsletter_title
INFO  - 2013-11-11 16:23:43 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=106&article_type=newsletter_title
INFO  - 2013-11-11 16:23:43 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=105&article_type=newsletter_title
INFO  - 2013-11-11 16:23:43 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=104&article_type=newsletter_title
INFO  - 2013-11-11 16:23:43 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=103&article_type=newsletter_title
INFO  - 2013-11-11 16:23:43 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=102&article_type=newsletter_title
INFO  - 2013-11-11 16:23:43 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=101&article_type=newsletter_title
INFO  - 2013-11-11 16:23:43 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=100&article_type=newsletter_title
INFO  - 2013-11-11 16:23:43 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=99&article_type=newsletter_title
INFO  - 2013-11-11 16:23:43 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=98&article_type=newsletter_title
DEBUG - 2013-11-11 16:23:43 --> File loaded: ../pharmaray-application/views/articles.php
DEBUG - 2013-11-11 16:23:43 --> Final output sent to browser
DEBUG - 2013-11-11 16:23:43 --> Total execution time: 0.1030
DEBUG - 2013-11-11 16:23:46 --> Config Class Initialized
DEBUG - 2013-11-11 16:23:46 --> Hooks Class Initialized
DEBUG - 2013-11-11 16:23:46 --> Utf8 Class Initialized
DEBUG - 2013-11-11 16:23:46 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 16:23:46 --> URI Class Initialized
DEBUG - 2013-11-11 16:23:46 --> Router Class Initialized
DEBUG - 2013-11-11 16:23:46 --> Output Class Initialized
DEBUG - 2013-11-11 16:23:46 --> Security Class Initialized
DEBUG - 2013-11-11 16:23:46 --> Input Class Initialized
DEBUG - 2013-11-11 16:23:46 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 16:23:46 --> Language Class Initialized
DEBUG - 2013-11-11 16:23:46 --> Loader Class Initialized
DEBUG - 2013-11-11 16:23:46 --> Helper loaded: form_helper
DEBUG - 2013-11-11 16:23:46 --> Helper loaded: url_helper
DEBUG - 2013-11-11 16:23:46 --> Helper loaded: html_helper
DEBUG - 2013-11-11 16:23:46 --> Database Driver Class Initialized
DEBUG - 2013-11-11 16:23:46 --> Session Class Initialized
DEBUG - 2013-11-11 16:23:46 --> Helper loaded: string_helper
DEBUG - 2013-11-11 16:23:46 --> Session routines successfully run
DEBUG - 2013-11-11 16:23:46 --> Form Validation Class Initialized
DEBUG - 2013-11-11 16:23:46 --> Controller Class Initialized
DEBUG - 2013-11-11 16:23:46 --> Model Class Initialized
DEBUG - 2013-11-11 16:23:46 --> Model Class Initialized
DEBUG - 2013-11-11 16:23:46 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 16:23:46 --> after session initialization................
INFO  - 2013-11-11 16:23:46 --> article id is 112
DEBUG - 2013-11-11 16:23:46 --> Final output sent to browser
DEBUG - 2013-11-11 16:23:46 --> Total execution time: 0.0630
DEBUG - 2013-11-11 16:23:51 --> Config Class Initialized
DEBUG - 2013-11-11 16:23:51 --> Hooks Class Initialized
DEBUG - 2013-11-11 16:23:51 --> Utf8 Class Initialized
DEBUG - 2013-11-11 16:23:51 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 16:23:51 --> URI Class Initialized
DEBUG - 2013-11-11 16:23:51 --> Router Class Initialized
DEBUG - 2013-11-11 16:23:51 --> Output Class Initialized
DEBUG - 2013-11-11 16:23:51 --> Security Class Initialized
DEBUG - 2013-11-11 16:23:51 --> Input Class Initialized
DEBUG - 2013-11-11 16:23:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 16:23:51 --> Language Class Initialized
DEBUG - 2013-11-11 16:23:51 --> Loader Class Initialized
DEBUG - 2013-11-11 16:23:51 --> Helper loaded: form_helper
DEBUG - 2013-11-11 16:23:51 --> Helper loaded: url_helper
DEBUG - 2013-11-11 16:23:51 --> Helper loaded: html_helper
DEBUG - 2013-11-11 16:23:51 --> Database Driver Class Initialized
DEBUG - 2013-11-11 16:23:51 --> Session Class Initialized
DEBUG - 2013-11-11 16:23:51 --> Helper loaded: string_helper
DEBUG - 2013-11-11 16:23:51 --> Session routines successfully run
DEBUG - 2013-11-11 16:23:51 --> Form Validation Class Initialized
DEBUG - 2013-11-11 16:23:51 --> Controller Class Initialized
DEBUG - 2013-11-11 16:23:51 --> Model Class Initialized
DEBUG - 2013-11-11 16:23:51 --> Model Class Initialized
DEBUG - 2013-11-11 16:23:51 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 16:23:51 --> after session initialization................
INFO  - 2013-11-11 16:23:51 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-11 16:23:51 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-11 16:23:51 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-11 16:23:51 --> inside retrieving locations 
INFO  - 2013-11-11 16:23:51 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-11 16:23:51 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-11 16:23:51 --> Final output sent to browser
DEBUG - 2013-11-11 16:23:51 --> Total execution time: 0.0520
DEBUG - 2013-11-11 16:23:51 --> Config Class Initialized
DEBUG - 2013-11-11 16:23:51 --> Hooks Class Initialized
DEBUG - 2013-11-11 16:23:51 --> Utf8 Class Initialized
DEBUG - 2013-11-11 16:23:51 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 16:23:51 --> URI Class Initialized
DEBUG - 2013-11-11 16:23:51 --> Router Class Initialized
DEBUG - 2013-11-11 16:23:51 --> Output Class Initialized
DEBUG - 2013-11-11 16:23:51 --> Security Class Initialized
DEBUG - 2013-11-11 16:23:51 --> Input Class Initialized
DEBUG - 2013-11-11 16:23:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 16:23:51 --> Language Class Initialized
DEBUG - 2013-11-11 16:23:51 --> Loader Class Initialized
DEBUG - 2013-11-11 16:23:51 --> Helper loaded: form_helper
DEBUG - 2013-11-11 16:23:51 --> Helper loaded: url_helper
DEBUG - 2013-11-11 16:23:51 --> Helper loaded: html_helper
DEBUG - 2013-11-11 16:23:51 --> Database Driver Class Initialized
DEBUG - 2013-11-11 16:23:51 --> Session Class Initialized
DEBUG - 2013-11-11 16:23:51 --> Helper loaded: string_helper
DEBUG - 2013-11-11 16:23:51 --> Session routines successfully run
DEBUG - 2013-11-11 16:23:51 --> Form Validation Class Initialized
DEBUG - 2013-11-11 16:23:51 --> Controller Class Initialized
DEBUG - 2013-11-11 16:23:51 --> Model Class Initialized
DEBUG - 2013-11-11 16:23:51 --> Model Class Initialized
DEBUG - 2013-11-11 16:23:51 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 16:23:51 --> after session initialization................
ERROR - 2013-11-11 16:23:51 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-11 16:23:51 --> Config Class Initialized
DEBUG - 2013-11-11 16:23:51 --> Hooks Class Initialized
DEBUG - 2013-11-11 16:23:51 --> Utf8 Class Initialized
DEBUG - 2013-11-11 16:23:51 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 16:23:51 --> URI Class Initialized
DEBUG - 2013-11-11 16:23:51 --> Router Class Initialized
DEBUG - 2013-11-11 16:23:51 --> Output Class Initialized
DEBUG - 2013-11-11 16:23:51 --> Security Class Initialized
DEBUG - 2013-11-11 16:23:51 --> Input Class Initialized
DEBUG - 2013-11-11 16:23:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 16:23:51 --> Language Class Initialized
DEBUG - 2013-11-11 16:23:51 --> Loader Class Initialized
DEBUG - 2013-11-11 16:23:51 --> Helper loaded: form_helper
DEBUG - 2013-11-11 16:23:51 --> Helper loaded: url_helper
DEBUG - 2013-11-11 16:23:51 --> Helper loaded: html_helper
DEBUG - 2013-11-11 16:23:51 --> Database Driver Class Initialized
DEBUG - 2013-11-11 16:23:51 --> Session Class Initialized
DEBUG - 2013-11-11 16:23:51 --> Helper loaded: string_helper
DEBUG - 2013-11-11 16:23:51 --> Session routines successfully run
DEBUG - 2013-11-11 16:23:51 --> Form Validation Class Initialized
DEBUG - 2013-11-11 16:23:51 --> Controller Class Initialized
DEBUG - 2013-11-11 16:23:51 --> Model Class Initialized
DEBUG - 2013-11-11 16:23:51 --> Model Class Initialized
DEBUG - 2013-11-11 16:23:51 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 16:23:51 --> after session initialization................
ERROR - 2013-11-11 16:23:51 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-11 16:23:56 --> Config Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Hooks Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Utf8 Class Initialized
DEBUG - 2013-11-11 16:23:56 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 16:23:56 --> URI Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Router Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Output Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Security Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Input Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 16:23:56 --> Language Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Loader Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Helper loaded: form_helper
DEBUG - 2013-11-11 16:23:56 --> Helper loaded: url_helper
DEBUG - 2013-11-11 16:23:56 --> Helper loaded: html_helper
DEBUG - 2013-11-11 16:23:56 --> Database Driver Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Session Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Helper loaded: string_helper
DEBUG - 2013-11-11 16:23:56 --> Session routines successfully run
DEBUG - 2013-11-11 16:23:56 --> Form Validation Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Controller Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Model Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Model Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 16:23:56 --> after session initialization................
INFO  - 2013-11-11 16:23:56 --> inside the auto suggest page.................
INFO  - 2013-11-11 16:23:56 --> after the list array.................
INFO  - 2013-11-11 16:23:56 --> after retrieving the data from db.................
INFO  - 2013-11-11 16:23:56 --> looping.................
INFO  - 2013-11-11 16:23:56 --> looping.................
INFO  - 2013-11-11 16:23:56 --> looping.................
INFO  - 2013-11-11 16:23:56 --> looping.................
INFO  - 2013-11-11 16:23:56 --> looping.................
INFO  - 2013-11-11 16:23:56 --> looping.................
DEBUG - 2013-11-11 16:23:56 --> Final output sent to browser
DEBUG - 2013-11-11 16:23:56 --> Total execution time: 0.0490
DEBUG - 2013-11-11 16:23:56 --> Config Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Hooks Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Utf8 Class Initialized
DEBUG - 2013-11-11 16:23:56 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 16:23:56 --> URI Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Router Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Output Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Security Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Input Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 16:23:56 --> Language Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Loader Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Helper loaded: form_helper
DEBUG - 2013-11-11 16:23:56 --> Helper loaded: url_helper
DEBUG - 2013-11-11 16:23:56 --> Helper loaded: html_helper
DEBUG - 2013-11-11 16:23:56 --> Database Driver Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Session Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Helper loaded: string_helper
DEBUG - 2013-11-11 16:23:56 --> Session routines successfully run
DEBUG - 2013-11-11 16:23:56 --> Form Validation Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Controller Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Model Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Model Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 16:23:56 --> after session initialization................
INFO  - 2013-11-11 16:23:56 --> inside the auto suggest page.................
INFO  - 2013-11-11 16:23:56 --> after the list array.................
INFO  - 2013-11-11 16:23:56 --> after retrieving the data from db.................
DEBUG - 2013-11-11 16:23:56 --> Final output sent to browser
DEBUG - 2013-11-11 16:23:56 --> Total execution time: 0.0540
DEBUG - 2013-11-11 16:23:56 --> Config Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Hooks Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Utf8 Class Initialized
DEBUG - 2013-11-11 16:23:56 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 16:23:56 --> URI Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Router Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Output Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Security Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Input Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 16:23:56 --> Language Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Loader Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Helper loaded: form_helper
DEBUG - 2013-11-11 16:23:56 --> Helper loaded: url_helper
DEBUG - 2013-11-11 16:23:56 --> Helper loaded: html_helper
DEBUG - 2013-11-11 16:23:56 --> Database Driver Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Session Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Helper loaded: string_helper
DEBUG - 2013-11-11 16:23:56 --> Session routines successfully run
DEBUG - 2013-11-11 16:23:56 --> Form Validation Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Controller Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Model Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Model Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 16:23:56 --> after session initialization................
INFO  - 2013-11-11 16:23:56 --> inside the auto suggest page.................
INFO  - 2013-11-11 16:23:56 --> after the list array.................
INFO  - 2013-11-11 16:23:56 --> after retrieving the data from db.................
DEBUG - 2013-11-11 16:23:56 --> Final output sent to browser
DEBUG - 2013-11-11 16:23:56 --> Total execution time: 0.0570
DEBUG - 2013-11-11 16:23:56 --> Config Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Hooks Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Utf8 Class Initialized
DEBUG - 2013-11-11 16:23:56 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 16:23:56 --> URI Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Router Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Output Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Security Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Input Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 16:23:56 --> Language Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Loader Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Helper loaded: form_helper
DEBUG - 2013-11-11 16:23:56 --> Helper loaded: url_helper
DEBUG - 2013-11-11 16:23:56 --> Helper loaded: html_helper
DEBUG - 2013-11-11 16:23:56 --> Database Driver Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Session Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Helper loaded: string_helper
DEBUG - 2013-11-11 16:23:56 --> Session routines successfully run
DEBUG - 2013-11-11 16:23:56 --> Form Validation Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Controller Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Model Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Model Class Initialized
DEBUG - 2013-11-11 16:23:56 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 16:23:56 --> after session initialization................
INFO  - 2013-11-11 16:23:56 --> inside the auto suggest page.................
INFO  - 2013-11-11 16:23:56 --> after the list array.................
INFO  - 2013-11-11 16:23:56 --> after retrieving the data from db.................
DEBUG - 2013-11-11 16:23:56 --> Final output sent to browser
DEBUG - 2013-11-11 16:23:56 --> Total execution time: 0.0460
DEBUG - 2013-11-11 16:23:57 --> Config Class Initialized
DEBUG - 2013-11-11 16:23:57 --> Hooks Class Initialized
DEBUG - 2013-11-11 16:23:57 --> Utf8 Class Initialized
DEBUG - 2013-11-11 16:23:57 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 16:23:57 --> URI Class Initialized
DEBUG - 2013-11-11 16:23:57 --> Router Class Initialized
DEBUG - 2013-11-11 16:23:57 --> Output Class Initialized
DEBUG - 2013-11-11 16:23:57 --> Security Class Initialized
DEBUG - 2013-11-11 16:23:57 --> Input Class Initialized
DEBUG - 2013-11-11 16:23:57 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 16:23:57 --> Language Class Initialized
DEBUG - 2013-11-11 16:23:57 --> Loader Class Initialized
DEBUG - 2013-11-11 16:23:57 --> Helper loaded: form_helper
DEBUG - 2013-11-11 16:23:57 --> Helper loaded: url_helper
DEBUG - 2013-11-11 16:23:57 --> Helper loaded: html_helper
DEBUG - 2013-11-11 16:23:57 --> Database Driver Class Initialized
DEBUG - 2013-11-11 16:23:57 --> Session Class Initialized
DEBUG - 2013-11-11 16:23:57 --> Helper loaded: string_helper
DEBUG - 2013-11-11 16:23:57 --> Session routines successfully run
DEBUG - 2013-11-11 16:23:57 --> Form Validation Class Initialized
DEBUG - 2013-11-11 16:23:57 --> Controller Class Initialized
DEBUG - 2013-11-11 16:23:57 --> Model Class Initialized
DEBUG - 2013-11-11 16:23:57 --> Model Class Initialized
DEBUG - 2013-11-11 16:23:57 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 16:23:57 --> after session initialization................
INFO  - 2013-11-11 16:23:57 --> inside the auto suggest page.................
INFO  - 2013-11-11 16:23:57 --> after the list array.................
INFO  - 2013-11-11 16:23:57 --> after retrieving the data from db.................
DEBUG - 2013-11-11 16:23:57 --> Final output sent to browser
DEBUG - 2013-11-11 16:23:57 --> Total execution time: 0.0620
DEBUG - 2013-11-11 16:23:57 --> Config Class Initialized
DEBUG - 2013-11-11 16:23:57 --> Hooks Class Initialized
DEBUG - 2013-11-11 16:23:57 --> Utf8 Class Initialized
DEBUG - 2013-11-11 16:23:57 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 16:23:57 --> URI Class Initialized
DEBUG - 2013-11-11 16:23:57 --> Router Class Initialized
DEBUG - 2013-11-11 16:23:57 --> Output Class Initialized
DEBUG - 2013-11-11 16:23:57 --> Security Class Initialized
DEBUG - 2013-11-11 16:23:57 --> Input Class Initialized
DEBUG - 2013-11-11 16:23:57 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 16:23:57 --> Language Class Initialized
DEBUG - 2013-11-11 16:23:57 --> Loader Class Initialized
DEBUG - 2013-11-11 16:23:57 --> Helper loaded: form_helper
DEBUG - 2013-11-11 16:23:57 --> Helper loaded: url_helper
DEBUG - 2013-11-11 16:23:57 --> Helper loaded: html_helper
DEBUG - 2013-11-11 16:23:57 --> Database Driver Class Initialized
DEBUG - 2013-11-11 16:23:57 --> Session Class Initialized
DEBUG - 2013-11-11 16:23:57 --> Helper loaded: string_helper
DEBUG - 2013-11-11 16:23:57 --> Session routines successfully run
DEBUG - 2013-11-11 16:23:57 --> Form Validation Class Initialized
DEBUG - 2013-11-11 16:23:57 --> Controller Class Initialized
DEBUG - 2013-11-11 16:23:57 --> Model Class Initialized
DEBUG - 2013-11-11 16:23:57 --> Model Class Initialized
DEBUG - 2013-11-11 16:23:57 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 16:23:57 --> after session initialization................
INFO  - 2013-11-11 16:23:57 --> inside the auto suggest page.................
INFO  - 2013-11-11 16:23:57 --> after the list array.................
INFO  - 2013-11-11 16:23:57 --> after retrieving the data from db.................
DEBUG - 2013-11-11 16:23:57 --> Final output sent to browser
DEBUG - 2013-11-11 16:23:57 --> Total execution time: 0.0690
DEBUG - 2013-11-11 16:23:58 --> Config Class Initialized
DEBUG - 2013-11-11 16:23:58 --> Hooks Class Initialized
DEBUG - 2013-11-11 16:23:58 --> Utf8 Class Initialized
DEBUG - 2013-11-11 16:23:58 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 16:23:58 --> URI Class Initialized
DEBUG - 2013-11-11 16:23:58 --> Router Class Initialized
DEBUG - 2013-11-11 16:23:58 --> Output Class Initialized
DEBUG - 2013-11-11 16:23:58 --> Security Class Initialized
DEBUG - 2013-11-11 16:23:58 --> Input Class Initialized
DEBUG - 2013-11-11 16:23:58 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 16:23:58 --> Language Class Initialized
DEBUG - 2013-11-11 16:23:58 --> Loader Class Initialized
DEBUG - 2013-11-11 16:23:58 --> Helper loaded: form_helper
DEBUG - 2013-11-11 16:23:58 --> Helper loaded: url_helper
DEBUG - 2013-11-11 16:23:58 --> Helper loaded: html_helper
DEBUG - 2013-11-11 16:23:58 --> Database Driver Class Initialized
DEBUG - 2013-11-11 16:23:58 --> Session Class Initialized
DEBUG - 2013-11-11 16:23:58 --> Helper loaded: string_helper
DEBUG - 2013-11-11 16:23:58 --> Session routines successfully run
DEBUG - 2013-11-11 16:23:58 --> Form Validation Class Initialized
DEBUG - 2013-11-11 16:23:58 --> Controller Class Initialized
DEBUG - 2013-11-11 16:23:58 --> Model Class Initialized
DEBUG - 2013-11-11 16:23:58 --> Model Class Initialized
DEBUG - 2013-11-11 16:23:58 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 16:23:58 --> after session initialization................
INFO  - 2013-11-11 16:23:58 --> inside the auto suggest page.................
INFO  - 2013-11-11 16:23:58 --> after the list array.................
INFO  - 2013-11-11 16:23:58 --> after retrieving the data from db.................
DEBUG - 2013-11-11 16:23:58 --> Final output sent to browser
DEBUG - 2013-11-11 16:23:58 --> Total execution time: 0.0490
DEBUG - 2013-11-11 16:23:59 --> Config Class Initialized
DEBUG - 2013-11-11 16:23:59 --> Hooks Class Initialized
DEBUG - 2013-11-11 16:23:59 --> Utf8 Class Initialized
DEBUG - 2013-11-11 16:23:59 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 16:23:59 --> URI Class Initialized
DEBUG - 2013-11-11 16:23:59 --> Router Class Initialized
DEBUG - 2013-11-11 16:23:59 --> Output Class Initialized
DEBUG - 2013-11-11 16:23:59 --> Security Class Initialized
DEBUG - 2013-11-11 16:23:59 --> Input Class Initialized
DEBUG - 2013-11-11 16:23:59 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 16:23:59 --> Language Class Initialized
DEBUG - 2013-11-11 16:23:59 --> Loader Class Initialized
DEBUG - 2013-11-11 16:23:59 --> Helper loaded: form_helper
DEBUG - 2013-11-11 16:23:59 --> Helper loaded: url_helper
DEBUG - 2013-11-11 16:23:59 --> Helper loaded: html_helper
DEBUG - 2013-11-11 16:23:59 --> Database Driver Class Initialized
DEBUG - 2013-11-11 16:23:59 --> Session Class Initialized
DEBUG - 2013-11-11 16:23:59 --> Helper loaded: string_helper
DEBUG - 2013-11-11 16:23:59 --> Session routines successfully run
DEBUG - 2013-11-11 16:23:59 --> Form Validation Class Initialized
DEBUG - 2013-11-11 16:23:59 --> Controller Class Initialized
DEBUG - 2013-11-11 16:23:59 --> Model Class Initialized
DEBUG - 2013-11-11 16:23:59 --> Model Class Initialized
DEBUG - 2013-11-11 16:23:59 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 16:23:59 --> after session initialization................
INFO  - 2013-11-11 16:23:59 --> inside the auto suggest page.................
INFO  - 2013-11-11 16:23:59 --> after the list array.................
INFO  - 2013-11-11 16:23:59 --> after retrieving the data from db.................
INFO  - 2013-11-11 16:23:59 --> looping.................
INFO  - 2013-11-11 16:23:59 --> looping.................
INFO  - 2013-11-11 16:23:59 --> looping.................
DEBUG - 2013-11-11 16:23:59 --> Final output sent to browser
DEBUG - 2013-11-11 16:23:59 --> Total execution time: 0.0420
DEBUG - 2013-11-11 16:24:00 --> Config Class Initialized
DEBUG - 2013-11-11 16:24:00 --> Hooks Class Initialized
DEBUG - 2013-11-11 16:24:00 --> Utf8 Class Initialized
DEBUG - 2013-11-11 16:24:00 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 16:24:00 --> URI Class Initialized
DEBUG - 2013-11-11 16:24:00 --> Router Class Initialized
DEBUG - 2013-11-11 16:24:00 --> Output Class Initialized
DEBUG - 2013-11-11 16:24:00 --> Security Class Initialized
DEBUG - 2013-11-11 16:24:00 --> Input Class Initialized
DEBUG - 2013-11-11 16:24:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 16:24:00 --> Language Class Initialized
DEBUG - 2013-11-11 16:24:00 --> Loader Class Initialized
DEBUG - 2013-11-11 16:24:00 --> Helper loaded: form_helper
DEBUG - 2013-11-11 16:24:00 --> Helper loaded: url_helper
DEBUG - 2013-11-11 16:24:00 --> Helper loaded: html_helper
DEBUG - 2013-11-11 16:24:00 --> Database Driver Class Initialized
DEBUG - 2013-11-11 16:24:00 --> Session Class Initialized
DEBUG - 2013-11-11 16:24:00 --> Helper loaded: string_helper
DEBUG - 2013-11-11 16:24:00 --> Session routines successfully run
DEBUG - 2013-11-11 16:24:00 --> Form Validation Class Initialized
DEBUG - 2013-11-11 16:24:00 --> Controller Class Initialized
DEBUG - 2013-11-11 16:24:00 --> Model Class Initialized
DEBUG - 2013-11-11 16:24:00 --> Model Class Initialized
DEBUG - 2013-11-11 16:24:00 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 16:24:00 --> after session initialization................
INFO  - 2013-11-11 16:24:00 --> inside the auto suggest page.................
INFO  - 2013-11-11 16:24:00 --> after the list array.................
INFO  - 2013-11-11 16:24:00 --> after retrieving the data from db.................
DEBUG - 2013-11-11 16:24:00 --> Final output sent to browser
DEBUG - 2013-11-11 16:24:00 --> Total execution time: 0.0470
DEBUG - 2013-11-11 16:24:00 --> Config Class Initialized
DEBUG - 2013-11-11 16:24:00 --> Hooks Class Initialized
DEBUG - 2013-11-11 16:24:00 --> Utf8 Class Initialized
DEBUG - 2013-11-11 16:24:00 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 16:24:00 --> URI Class Initialized
DEBUG - 2013-11-11 16:24:00 --> Router Class Initialized
DEBUG - 2013-11-11 16:24:00 --> Output Class Initialized
DEBUG - 2013-11-11 16:24:00 --> Security Class Initialized
DEBUG - 2013-11-11 16:24:00 --> Input Class Initialized
DEBUG - 2013-11-11 16:24:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 16:24:00 --> Language Class Initialized
DEBUG - 2013-11-11 16:24:00 --> Loader Class Initialized
DEBUG - 2013-11-11 16:24:00 --> Helper loaded: form_helper
DEBUG - 2013-11-11 16:24:00 --> Helper loaded: url_helper
DEBUG - 2013-11-11 16:24:00 --> Helper loaded: html_helper
DEBUG - 2013-11-11 16:24:00 --> Database Driver Class Initialized
DEBUG - 2013-11-11 16:24:00 --> Session Class Initialized
DEBUG - 2013-11-11 16:24:00 --> Helper loaded: string_helper
DEBUG - 2013-11-11 16:24:00 --> Session routines successfully run
DEBUG - 2013-11-11 16:24:00 --> Form Validation Class Initialized
DEBUG - 2013-11-11 16:24:00 --> Controller Class Initialized
DEBUG - 2013-11-11 16:24:00 --> Model Class Initialized
DEBUG - 2013-11-11 16:24:00 --> Model Class Initialized
DEBUG - 2013-11-11 16:24:00 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 16:24:00 --> after session initialization................
INFO  - 2013-11-11 16:24:00 --> inside the auto suggest page.................
INFO  - 2013-11-11 16:24:00 --> after the list array.................
INFO  - 2013-11-11 16:24:00 --> after retrieving the data from db.................
DEBUG - 2013-11-11 16:24:00 --> Final output sent to browser
DEBUG - 2013-11-11 16:24:00 --> Total execution time: 0.0510
DEBUG - 2013-11-11 16:24:01 --> Config Class Initialized
DEBUG - 2013-11-11 16:24:01 --> Hooks Class Initialized
DEBUG - 2013-11-11 16:24:01 --> Utf8 Class Initialized
DEBUG - 2013-11-11 16:24:01 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 16:24:01 --> URI Class Initialized
DEBUG - 2013-11-11 16:24:01 --> Router Class Initialized
DEBUG - 2013-11-11 16:24:01 --> Output Class Initialized
DEBUG - 2013-11-11 16:24:01 --> Security Class Initialized
DEBUG - 2013-11-11 16:24:01 --> Input Class Initialized
DEBUG - 2013-11-11 16:24:01 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 16:24:01 --> Language Class Initialized
DEBUG - 2013-11-11 16:24:01 --> Loader Class Initialized
DEBUG - 2013-11-11 16:24:01 --> Helper loaded: form_helper
DEBUG - 2013-11-11 16:24:01 --> Helper loaded: url_helper
DEBUG - 2013-11-11 16:24:01 --> Helper loaded: html_helper
DEBUG - 2013-11-11 16:24:01 --> Database Driver Class Initialized
DEBUG - 2013-11-11 16:24:01 --> Session Class Initialized
DEBUG - 2013-11-11 16:24:01 --> Helper loaded: string_helper
DEBUG - 2013-11-11 16:24:01 --> Session routines successfully run
DEBUG - 2013-11-11 16:24:01 --> Form Validation Class Initialized
DEBUG - 2013-11-11 16:24:01 --> Controller Class Initialized
DEBUG - 2013-11-11 16:24:01 --> Model Class Initialized
DEBUG - 2013-11-11 16:24:01 --> Model Class Initialized
DEBUG - 2013-11-11 16:24:01 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 16:24:01 --> after session initialization................
INFO  - 2013-11-11 16:24:01 --> inside the auto suggest page.................
INFO  - 2013-11-11 16:24:01 --> after the list array.................
INFO  - 2013-11-11 16:24:01 --> after retrieving the data from db.................
DEBUG - 2013-11-11 16:24:01 --> Final output sent to browser
DEBUG - 2013-11-11 16:24:01 --> Total execution time: 0.0420
DEBUG - 2013-11-11 16:24:01 --> Config Class Initialized
DEBUG - 2013-11-11 16:24:01 --> Hooks Class Initialized
DEBUG - 2013-11-11 16:24:01 --> Utf8 Class Initialized
DEBUG - 2013-11-11 16:24:01 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 16:24:01 --> URI Class Initialized
DEBUG - 2013-11-11 16:24:01 --> Router Class Initialized
DEBUG - 2013-11-11 16:24:01 --> Output Class Initialized
DEBUG - 2013-11-11 16:24:01 --> Security Class Initialized
DEBUG - 2013-11-11 16:24:01 --> Input Class Initialized
DEBUG - 2013-11-11 16:24:01 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 16:24:01 --> Language Class Initialized
DEBUG - 2013-11-11 16:24:01 --> Loader Class Initialized
DEBUG - 2013-11-11 16:24:01 --> Helper loaded: form_helper
DEBUG - 2013-11-11 16:24:01 --> Helper loaded: url_helper
DEBUG - 2013-11-11 16:24:01 --> Helper loaded: html_helper
DEBUG - 2013-11-11 16:24:01 --> Database Driver Class Initialized
DEBUG - 2013-11-11 16:24:01 --> Session Class Initialized
DEBUG - 2013-11-11 16:24:01 --> Helper loaded: string_helper
DEBUG - 2013-11-11 16:24:01 --> Session routines successfully run
DEBUG - 2013-11-11 16:24:01 --> Form Validation Class Initialized
DEBUG - 2013-11-11 16:24:01 --> Controller Class Initialized
DEBUG - 2013-11-11 16:24:01 --> Model Class Initialized
DEBUG - 2013-11-11 16:24:01 --> Model Class Initialized
DEBUG - 2013-11-11 16:24:01 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 16:24:01 --> after session initialization................
INFO  - 2013-11-11 16:24:01 --> inside the auto suggest page.................
INFO  - 2013-11-11 16:24:01 --> after the list array.................
INFO  - 2013-11-11 16:24:01 --> after retrieving the data from db.................
INFO  - 2013-11-11 16:24:01 --> looping.................
INFO  - 2013-11-11 16:24:01 --> looping.................
INFO  - 2013-11-11 16:24:01 --> looping.................
DEBUG - 2013-11-11 16:24:01 --> Final output sent to browser
DEBUG - 2013-11-11 16:24:01 --> Total execution time: 0.0440
DEBUG - 2013-11-11 16:24:10 --> Config Class Initialized
DEBUG - 2013-11-11 16:24:10 --> Hooks Class Initialized
DEBUG - 2013-11-11 16:24:10 --> Utf8 Class Initialized
DEBUG - 2013-11-11 16:24:10 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 16:24:10 --> URI Class Initialized
DEBUG - 2013-11-11 16:24:10 --> Router Class Initialized
DEBUG - 2013-11-11 16:24:10 --> Output Class Initialized
DEBUG - 2013-11-11 16:24:10 --> Security Class Initialized
DEBUG - 2013-11-11 16:24:10 --> Input Class Initialized
DEBUG - 2013-11-11 16:24:10 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 16:24:10 --> Language Class Initialized
DEBUG - 2013-11-11 16:24:10 --> Loader Class Initialized
DEBUG - 2013-11-11 16:24:10 --> Helper loaded: form_helper
DEBUG - 2013-11-11 16:24:10 --> Helper loaded: url_helper
DEBUG - 2013-11-11 16:24:10 --> Helper loaded: html_helper
DEBUG - 2013-11-11 16:24:10 --> Database Driver Class Initialized
DEBUG - 2013-11-11 16:24:10 --> Session Class Initialized
DEBUG - 2013-11-11 16:24:10 --> Helper loaded: string_helper
DEBUG - 2013-11-11 16:24:10 --> Session routines successfully run
DEBUG - 2013-11-11 16:24:10 --> Form Validation Class Initialized
DEBUG - 2013-11-11 16:24:10 --> Controller Class Initialized
DEBUG - 2013-11-11 16:24:10 --> Model Class Initialized
DEBUG - 2013-11-11 16:24:10 --> Model Class Initialized
DEBUG - 2013-11-11 16:24:10 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 16:24:10 --> after session initialization................
INFO  - 2013-11-11 16:24:10 --> inside the auto suggest page.................
INFO  - 2013-11-11 16:24:10 --> after the list array.................
INFO  - 2013-11-11 16:24:10 --> after retrieving the data from db.................
INFO  - 2013-11-11 16:24:10 --> looping.................
INFO  - 2013-11-11 16:24:10 --> looping.................
INFO  - 2013-11-11 16:24:10 --> looping.................
DEBUG - 2013-11-11 16:24:10 --> Final output sent to browser
DEBUG - 2013-11-11 16:24:10 --> Total execution time: 0.0470
DEBUG - 2013-11-11 16:24:10 --> Config Class Initialized
DEBUG - 2013-11-11 16:24:10 --> Hooks Class Initialized
DEBUG - 2013-11-11 16:24:10 --> Utf8 Class Initialized
DEBUG - 2013-11-11 16:24:10 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 16:24:10 --> URI Class Initialized
DEBUG - 2013-11-11 16:24:10 --> Router Class Initialized
DEBUG - 2013-11-11 16:24:10 --> Output Class Initialized
DEBUG - 2013-11-11 16:24:10 --> Security Class Initialized
DEBUG - 2013-11-11 16:24:10 --> Input Class Initialized
DEBUG - 2013-11-11 16:24:10 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 16:24:10 --> Language Class Initialized
DEBUG - 2013-11-11 16:24:10 --> Loader Class Initialized
DEBUG - 2013-11-11 16:24:10 --> Helper loaded: form_helper
DEBUG - 2013-11-11 16:24:10 --> Helper loaded: url_helper
DEBUG - 2013-11-11 16:24:10 --> Helper loaded: html_helper
DEBUG - 2013-11-11 16:24:10 --> Database Driver Class Initialized
DEBUG - 2013-11-11 16:24:10 --> Session Class Initialized
DEBUG - 2013-11-11 16:24:10 --> Helper loaded: string_helper
DEBUG - 2013-11-11 16:24:10 --> Session routines successfully run
DEBUG - 2013-11-11 16:24:10 --> Form Validation Class Initialized
DEBUG - 2013-11-11 16:24:10 --> Controller Class Initialized
DEBUG - 2013-11-11 16:24:10 --> Model Class Initialized
DEBUG - 2013-11-11 16:24:10 --> Model Class Initialized
DEBUG - 2013-11-11 16:24:10 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 16:24:10 --> after session initialization................
INFO  - 2013-11-11 16:24:10 --> inside the auto suggest page.................
INFO  - 2013-11-11 16:24:10 --> after the list array.................
INFO  - 2013-11-11 16:24:10 --> after retrieving the data from db.................
INFO  - 2013-11-11 16:24:10 --> looping.................
DEBUG - 2013-11-11 16:24:10 --> Final output sent to browser
DEBUG - 2013-11-11 16:24:10 --> Total execution time: 0.0690
DEBUG - 2013-11-11 16:25:24 --> Config Class Initialized
DEBUG - 2013-11-11 16:25:24 --> Hooks Class Initialized
DEBUG - 2013-11-11 16:25:24 --> Utf8 Class Initialized
DEBUG - 2013-11-11 16:25:24 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 16:25:24 --> URI Class Initialized
DEBUG - 2013-11-11 16:25:24 --> Router Class Initialized
DEBUG - 2013-11-11 16:25:24 --> Output Class Initialized
DEBUG - 2013-11-11 16:25:24 --> Security Class Initialized
DEBUG - 2013-11-11 16:25:24 --> Input Class Initialized
DEBUG - 2013-11-11 16:25:24 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 16:25:24 --> Language Class Initialized
DEBUG - 2013-11-11 16:25:24 --> Loader Class Initialized
DEBUG - 2013-11-11 16:25:24 --> Helper loaded: form_helper
DEBUG - 2013-11-11 16:25:24 --> Helper loaded: url_helper
DEBUG - 2013-11-11 16:25:24 --> Helper loaded: html_helper
DEBUG - 2013-11-11 16:25:24 --> Database Driver Class Initialized
DEBUG - 2013-11-11 16:25:24 --> Session Class Initialized
DEBUG - 2013-11-11 16:25:24 --> Helper loaded: string_helper
DEBUG - 2013-11-11 16:25:24 --> Session routines successfully run
DEBUG - 2013-11-11 16:25:24 --> Form Validation Class Initialized
DEBUG - 2013-11-11 16:25:24 --> Controller Class Initialized
DEBUG - 2013-11-11 16:25:24 --> Model Class Initialized
DEBUG - 2013-11-11 16:25:24 --> Model Class Initialized
DEBUG - 2013-11-11 16:25:24 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 16:25:24 --> after session initialization................
INFO  - 2013-11-11 16:25:24 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-11 16:25:24 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-11 16:25:24 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-11 16:25:24 --> inside retrieving locations 
INFO  - 2013-11-11 16:25:24 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-11 16:25:24 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-11 16:25:24 --> Final output sent to browser
DEBUG - 2013-11-11 16:25:24 --> Total execution time: 0.0460
DEBUG - 2013-11-11 16:25:26 --> Config Class Initialized
DEBUG - 2013-11-11 16:25:26 --> Hooks Class Initialized
DEBUG - 2013-11-11 16:25:26 --> Utf8 Class Initialized
DEBUG - 2013-11-11 16:25:26 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 16:25:26 --> URI Class Initialized
DEBUG - 2013-11-11 16:25:26 --> Router Class Initialized
DEBUG - 2013-11-11 16:25:26 --> Output Class Initialized
DEBUG - 2013-11-11 16:25:26 --> Security Class Initialized
DEBUG - 2013-11-11 16:25:26 --> Input Class Initialized
DEBUG - 2013-11-11 16:25:26 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 16:25:26 --> Language Class Initialized
DEBUG - 2013-11-11 16:25:26 --> Loader Class Initialized
DEBUG - 2013-11-11 16:25:26 --> Helper loaded: form_helper
DEBUG - 2013-11-11 16:25:26 --> Helper loaded: url_helper
DEBUG - 2013-11-11 16:25:26 --> Helper loaded: html_helper
DEBUG - 2013-11-11 16:25:26 --> Database Driver Class Initialized
DEBUG - 2013-11-11 16:25:26 --> Session Class Initialized
DEBUG - 2013-11-11 16:25:26 --> Helper loaded: string_helper
DEBUG - 2013-11-11 16:25:26 --> Session routines successfully run
DEBUG - 2013-11-11 16:25:26 --> Form Validation Class Initialized
DEBUG - 2013-11-11 16:25:26 --> Controller Class Initialized
DEBUG - 2013-11-11 16:25:26 --> Model Class Initialized
DEBUG - 2013-11-11 16:25:26 --> Model Class Initialized
DEBUG - 2013-11-11 16:25:26 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 16:25:26 --> after session initialization................
INFO  - 2013-11-11 16:25:26 --> inside the auto suggest page.................
INFO  - 2013-11-11 16:25:26 --> after the list array.................
INFO  - 2013-11-11 16:25:26 --> after retrieving the data from db.................
DEBUG - 2013-11-11 16:25:26 --> Final output sent to browser
DEBUG - 2013-11-11 16:25:26 --> Total execution time: 0.0680
DEBUG - 2013-11-11 16:25:27 --> Config Class Initialized
DEBUG - 2013-11-11 16:25:27 --> Hooks Class Initialized
DEBUG - 2013-11-11 16:25:27 --> Utf8 Class Initialized
DEBUG - 2013-11-11 16:25:27 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 16:25:27 --> URI Class Initialized
DEBUG - 2013-11-11 16:25:27 --> Router Class Initialized
DEBUG - 2013-11-11 16:25:27 --> Output Class Initialized
DEBUG - 2013-11-11 16:25:27 --> Security Class Initialized
DEBUG - 2013-11-11 16:25:27 --> Input Class Initialized
DEBUG - 2013-11-11 16:25:27 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 16:25:27 --> Language Class Initialized
DEBUG - 2013-11-11 16:25:27 --> Loader Class Initialized
DEBUG - 2013-11-11 16:25:27 --> Helper loaded: form_helper
DEBUG - 2013-11-11 16:25:27 --> Helper loaded: url_helper
DEBUG - 2013-11-11 16:25:27 --> Helper loaded: html_helper
DEBUG - 2013-11-11 16:25:27 --> Database Driver Class Initialized
DEBUG - 2013-11-11 16:25:27 --> Session Class Initialized
DEBUG - 2013-11-11 16:25:27 --> Helper loaded: string_helper
DEBUG - 2013-11-11 16:25:27 --> Session routines successfully run
DEBUG - 2013-11-11 16:25:27 --> Form Validation Class Initialized
DEBUG - 2013-11-11 16:25:27 --> Controller Class Initialized
DEBUG - 2013-11-11 16:25:27 --> Model Class Initialized
DEBUG - 2013-11-11 16:25:27 --> Model Class Initialized
DEBUG - 2013-11-11 16:25:27 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 16:25:27 --> after session initialization................
INFO  - 2013-11-11 16:25:27 --> inside the auto suggest page.................
INFO  - 2013-11-11 16:25:27 --> after the list array.................
INFO  - 2013-11-11 16:25:27 --> after retrieving the data from db.................
INFO  - 2013-11-11 16:25:27 --> looping.................
INFO  - 2013-11-11 16:25:27 --> looping.................
INFO  - 2013-11-11 16:25:27 --> looping.................
DEBUG - 2013-11-11 16:25:27 --> Final output sent to browser
DEBUG - 2013-11-11 16:25:27 --> Total execution time: 0.0600
DEBUG - 2013-11-11 16:25:29 --> Config Class Initialized
DEBUG - 2013-11-11 16:25:29 --> Hooks Class Initialized
DEBUG - 2013-11-11 16:25:29 --> Utf8 Class Initialized
DEBUG - 2013-11-11 16:25:29 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 16:25:29 --> URI Class Initialized
DEBUG - 2013-11-11 16:25:29 --> Router Class Initialized
DEBUG - 2013-11-11 16:25:29 --> Output Class Initialized
DEBUG - 2013-11-11 16:25:29 --> Security Class Initialized
DEBUG - 2013-11-11 16:25:29 --> Input Class Initialized
DEBUG - 2013-11-11 16:25:29 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 16:25:29 --> Language Class Initialized
DEBUG - 2013-11-11 16:25:29 --> Loader Class Initialized
DEBUG - 2013-11-11 16:25:29 --> Helper loaded: form_helper
DEBUG - 2013-11-11 16:25:29 --> Helper loaded: url_helper
DEBUG - 2013-11-11 16:25:29 --> Helper loaded: html_helper
DEBUG - 2013-11-11 16:25:29 --> Database Driver Class Initialized
DEBUG - 2013-11-11 16:25:29 --> Session Class Initialized
DEBUG - 2013-11-11 16:25:29 --> Helper loaded: string_helper
DEBUG - 2013-11-11 16:25:29 --> Session routines successfully run
DEBUG - 2013-11-11 16:25:29 --> Form Validation Class Initialized
DEBUG - 2013-11-11 16:25:29 --> Controller Class Initialized
DEBUG - 2013-11-11 16:25:29 --> Model Class Initialized
DEBUG - 2013-11-11 16:25:29 --> Model Class Initialized
DEBUG - 2013-11-11 16:25:29 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 16:25:29 --> after session initialization................
INFO  - 2013-11-11 16:25:29 --> article id is 1
DEBUG - 2013-11-11 16:25:29 --> Final output sent to browser
DEBUG - 2013-11-11 16:25:29 --> Total execution time: 0.0450
DEBUG - 2013-11-11 16:25:41 --> Config Class Initialized
DEBUG - 2013-11-11 16:25:41 --> Hooks Class Initialized
DEBUG - 2013-11-11 16:25:41 --> Utf8 Class Initialized
DEBUG - 2013-11-11 16:25:41 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 16:25:41 --> URI Class Initialized
DEBUG - 2013-11-11 16:25:41 --> Router Class Initialized
DEBUG - 2013-11-11 16:25:41 --> Output Class Initialized
DEBUG - 2013-11-11 16:25:41 --> Security Class Initialized
DEBUG - 2013-11-11 16:25:41 --> Input Class Initialized
DEBUG - 2013-11-11 16:25:41 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 16:25:41 --> Language Class Initialized
DEBUG - 2013-11-11 16:25:41 --> Loader Class Initialized
DEBUG - 2013-11-11 16:25:41 --> Helper loaded: form_helper
DEBUG - 2013-11-11 16:25:41 --> Helper loaded: url_helper
DEBUG - 2013-11-11 16:25:41 --> Helper loaded: html_helper
DEBUG - 2013-11-11 16:25:41 --> Database Driver Class Initialized
DEBUG - 2013-11-11 16:25:41 --> Session Class Initialized
DEBUG - 2013-11-11 16:25:41 --> Helper loaded: string_helper
DEBUG - 2013-11-11 16:25:41 --> Session routines successfully run
DEBUG - 2013-11-11 16:25:41 --> Form Validation Class Initialized
DEBUG - 2013-11-11 16:25:41 --> Controller Class Initialized
DEBUG - 2013-11-11 16:25:41 --> Model Class Initialized
DEBUG - 2013-11-11 16:25:41 --> Model Class Initialized
DEBUG - 2013-11-11 16:25:41 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 16:25:41 --> after session initialization................
INFO  - 2013-11-11 16:25:41 --> inside the auto suggest page.................
INFO  - 2013-11-11 16:25:41 --> after the list array.................
INFO  - 2013-11-11 16:25:41 --> after retrieving the data from db.................
INFO  - 2013-11-11 16:25:41 --> looping.................
INFO  - 2013-11-11 16:25:41 --> looping.................
INFO  - 2013-11-11 16:25:41 --> looping.................
INFO  - 2013-11-11 16:25:41 --> looping.................
INFO  - 2013-11-11 16:25:41 --> looping.................
INFO  - 2013-11-11 16:25:41 --> looping.................
INFO  - 2013-11-11 16:25:41 --> looping.................
INFO  - 2013-11-11 16:25:41 --> looping.................
DEBUG - 2013-11-11 16:25:41 --> Final output sent to browser
DEBUG - 2013-11-11 16:25:41 --> Total execution time: 0.0520
DEBUG - 2013-11-11 16:25:41 --> Config Class Initialized
DEBUG - 2013-11-11 16:25:41 --> Hooks Class Initialized
DEBUG - 2013-11-11 16:25:41 --> Utf8 Class Initialized
DEBUG - 2013-11-11 16:25:41 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 16:25:41 --> URI Class Initialized
DEBUG - 2013-11-11 16:25:41 --> Router Class Initialized
DEBUG - 2013-11-11 16:25:41 --> Output Class Initialized
DEBUG - 2013-11-11 16:25:41 --> Security Class Initialized
DEBUG - 2013-11-11 16:25:41 --> Input Class Initialized
DEBUG - 2013-11-11 16:25:41 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 16:25:41 --> Language Class Initialized
DEBUG - 2013-11-11 16:25:41 --> Loader Class Initialized
DEBUG - 2013-11-11 16:25:41 --> Helper loaded: form_helper
DEBUG - 2013-11-11 16:25:41 --> Helper loaded: url_helper
DEBUG - 2013-11-11 16:25:41 --> Helper loaded: html_helper
DEBUG - 2013-11-11 16:25:41 --> Database Driver Class Initialized
DEBUG - 2013-11-11 16:25:41 --> Session Class Initialized
DEBUG - 2013-11-11 16:25:41 --> Helper loaded: string_helper
DEBUG - 2013-11-11 16:25:41 --> Session routines successfully run
DEBUG - 2013-11-11 16:25:41 --> Form Validation Class Initialized
DEBUG - 2013-11-11 16:25:41 --> Controller Class Initialized
DEBUG - 2013-11-11 16:25:41 --> Model Class Initialized
DEBUG - 2013-11-11 16:25:41 --> Model Class Initialized
DEBUG - 2013-11-11 16:25:41 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 16:25:41 --> after session initialization................
INFO  - 2013-11-11 16:25:41 --> inside the auto suggest page.................
INFO  - 2013-11-11 16:25:41 --> after the list array.................
INFO  - 2013-11-11 16:25:41 --> after retrieving the data from db.................
INFO  - 2013-11-11 16:25:41 --> looping.................
INFO  - 2013-11-11 16:25:41 --> looping.................
DEBUG - 2013-11-11 16:25:41 --> Final output sent to browser
DEBUG - 2013-11-11 16:25:41 --> Total execution time: 0.0650
DEBUG - 2013-11-11 16:25:43 --> Config Class Initialized
DEBUG - 2013-11-11 16:25:43 --> Hooks Class Initialized
DEBUG - 2013-11-11 16:25:43 --> Utf8 Class Initialized
DEBUG - 2013-11-11 16:25:43 --> UTF-8 Support Enabled
DEBUG - 2013-11-11 16:25:43 --> URI Class Initialized
DEBUG - 2013-11-11 16:25:43 --> Router Class Initialized
DEBUG - 2013-11-11 16:25:43 --> Output Class Initialized
DEBUG - 2013-11-11 16:25:43 --> Security Class Initialized
DEBUG - 2013-11-11 16:25:43 --> Input Class Initialized
DEBUG - 2013-11-11 16:25:43 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-11 16:25:43 --> Language Class Initialized
DEBUG - 2013-11-11 16:25:43 --> Loader Class Initialized
DEBUG - 2013-11-11 16:25:43 --> Helper loaded: form_helper
DEBUG - 2013-11-11 16:25:43 --> Helper loaded: url_helper
DEBUG - 2013-11-11 16:25:43 --> Helper loaded: html_helper
DEBUG - 2013-11-11 16:25:43 --> Database Driver Class Initialized
DEBUG - 2013-11-11 16:25:43 --> Session Class Initialized
DEBUG - 2013-11-11 16:25:43 --> Helper loaded: string_helper
DEBUG - 2013-11-11 16:25:43 --> Session routines successfully run
DEBUG - 2013-11-11 16:25:43 --> Form Validation Class Initialized
DEBUG - 2013-11-11 16:25:43 --> Controller Class Initialized
DEBUG - 2013-11-11 16:25:43 --> Model Class Initialized
DEBUG - 2013-11-11 16:25:43 --> Model Class Initialized
DEBUG - 2013-11-11 16:25:43 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-11 16:25:43 --> after session initialization................
INFO  - 2013-11-11 16:25:43 --> article id is 3
DEBUG - 2013-11-11 16:25:43 --> Final output sent to browser
DEBUG - 2013-11-11 16:25:43 --> Total execution time: 0.0430
