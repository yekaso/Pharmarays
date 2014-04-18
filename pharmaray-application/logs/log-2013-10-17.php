<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2013-10-17 22:49:52 --> Config Class Initialized
DEBUG - 2013-10-17 22:49:52 --> Hooks Class Initialized
DEBUG - 2013-10-17 22:49:52 --> Utf8 Class Initialized
DEBUG - 2013-10-17 22:49:52 --> UTF-8 Support Enabled
DEBUG - 2013-10-17 22:49:52 --> URI Class Initialized
DEBUG - 2013-10-17 22:49:52 --> Router Class Initialized
DEBUG - 2013-10-17 22:49:52 --> Output Class Initialized
DEBUG - 2013-10-17 22:49:52 --> Security Class Initialized
DEBUG - 2013-10-17 22:49:52 --> Input Class Initialized
DEBUG - 2013-10-17 22:49:52 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-17 22:49:52 --> Language Class Initialized
DEBUG - 2013-10-17 22:49:52 --> Loader Class Initialized
DEBUG - 2013-10-17 22:49:52 --> Helper loaded: form_helper
DEBUG - 2013-10-17 22:49:52 --> Helper loaded: url_helper
DEBUG - 2013-10-17 22:49:52 --> Helper loaded: html_helper
DEBUG - 2013-10-17 22:49:52 --> Database Driver Class Initialized
DEBUG - 2013-10-17 22:49:52 --> Session Class Initialized
DEBUG - 2013-10-17 22:49:52 --> Helper loaded: string_helper
DEBUG - 2013-10-17 22:49:52 --> Session routines successfully run
DEBUG - 2013-10-17 22:49:52 --> Form Validation Class Initialized
DEBUG - 2013-10-17 22:49:52 --> Controller Class Initialized
DEBUG - 2013-10-17 22:49:52 --> Model Class Initialized
DEBUG - 2013-10-17 22:49:52 --> Model Class Initialized
DEBUG - 2013-10-17 22:49:52 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-17 22:49:52 --> after session initialization................
INFO  - 2013-10-17 22:49:52 --> last news id is 0
INFO  - 2013-10-17 22:49:52 --> SELECT a.id_article as id, a.title as newsletter_title, a.description as newsletter_description, a.guestonly as guestonly, a.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`article` a)
JOIN `member` m ON `a`.`memberid_member` = `m`.`id_member`
WHERE `a`.`id_article` <> 0
ORDER BY `a`.`id_article` desc
LIMIT 15
INFO  - 2013-10-17 22:49:52 --> after newsleters list has been clicked.................
DEBUG - 2013-10-17 22:49:52 --> File loaded: ../pharmaray-application/views/articles.php
DEBUG - 2013-10-17 22:49:52 --> Final output sent to browser
DEBUG - 2013-10-17 22:49:52 --> Total execution time: 0.0690
DEBUG - 2013-10-17 22:49:52 --> Config Class Initialized
DEBUG - 2013-10-17 22:49:52 --> Hooks Class Initialized
DEBUG - 2013-10-17 22:49:52 --> Utf8 Class Initialized
DEBUG - 2013-10-17 22:49:52 --> UTF-8 Support Enabled
DEBUG - 2013-10-17 22:49:52 --> URI Class Initialized
DEBUG - 2013-10-17 22:49:52 --> Router Class Initialized
DEBUG - 2013-10-17 22:49:52 --> Output Class Initialized
DEBUG - 2013-10-17 22:49:52 --> Security Class Initialized
DEBUG - 2013-10-17 22:49:52 --> Input Class Initialized
DEBUG - 2013-10-17 22:49:52 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-17 22:49:52 --> Language Class Initialized
DEBUG - 2013-10-17 22:49:52 --> Loader Class Initialized
DEBUG - 2013-10-17 22:49:52 --> Helper loaded: form_helper
DEBUG - 2013-10-17 22:49:52 --> Helper loaded: url_helper
DEBUG - 2013-10-17 22:49:52 --> Helper loaded: html_helper
DEBUG - 2013-10-17 22:49:52 --> Database Driver Class Initialized
DEBUG - 2013-10-17 22:49:52 --> Session Class Initialized
DEBUG - 2013-10-17 22:49:52 --> Helper loaded: string_helper
DEBUG - 2013-10-17 22:49:52 --> Session routines successfully run
DEBUG - 2013-10-17 22:49:52 --> Form Validation Class Initialized
DEBUG - 2013-10-17 22:49:52 --> Controller Class Initialized
DEBUG - 2013-10-17 22:49:52 --> Model Class Initialized
DEBUG - 2013-10-17 22:49:52 --> Model Class Initialized
DEBUG - 2013-10-17 22:49:52 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-17 22:49:52 --> after session initialization................
ERROR - 2013-10-17 22:49:52 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-10-17 22:49:54 --> Config Class Initialized
DEBUG - 2013-10-17 22:49:54 --> Hooks Class Initialized
DEBUG - 2013-10-17 22:49:54 --> Utf8 Class Initialized
DEBUG - 2013-10-17 22:49:54 --> UTF-8 Support Enabled
DEBUG - 2013-10-17 22:49:54 --> URI Class Initialized
DEBUG - 2013-10-17 22:49:54 --> Router Class Initialized
DEBUG - 2013-10-17 22:49:54 --> Output Class Initialized
DEBUG - 2013-10-17 22:49:54 --> Security Class Initialized
DEBUG - 2013-10-17 22:49:54 --> Input Class Initialized
DEBUG - 2013-10-17 22:49:54 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-17 22:49:54 --> Language Class Initialized
DEBUG - 2013-10-17 22:49:54 --> Loader Class Initialized
DEBUG - 2013-10-17 22:49:54 --> Helper loaded: form_helper
DEBUG - 2013-10-17 22:49:54 --> Helper loaded: url_helper
DEBUG - 2013-10-17 22:49:54 --> Helper loaded: html_helper
DEBUG - 2013-10-17 22:49:54 --> Database Driver Class Initialized
DEBUG - 2013-10-17 22:49:54 --> Session Class Initialized
DEBUG - 2013-10-17 22:49:54 --> Helper loaded: string_helper
DEBUG - 2013-10-17 22:49:54 --> Session routines successfully run
DEBUG - 2013-10-17 22:49:54 --> Form Validation Class Initialized
DEBUG - 2013-10-17 22:49:54 --> Controller Class Initialized
DEBUG - 2013-10-17 22:49:54 --> Model Class Initialized
DEBUG - 2013-10-17 22:49:54 --> Model Class Initialized
DEBUG - 2013-10-17 22:49:54 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-17 22:49:54 --> after session initialization................
INFO  - 2013-10-17 22:49:54 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-10-17 22:49:54 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-10-17 22:49:54 --> inside retrieving vacancy for member
INFO  - 2013-10-17 22:49:54 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-10-17 22:49:54 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-10-17 22:49:54 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-10-17 22:49:54 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-10-17 22:49:54 --> News by drug_id ::::::::::===>SELECT `n`.`id_news` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-10-17 22:49:54 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-10-17 22:49:54 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-10-17 22:49:54 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-10-17 22:49:54 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-10-17 22:49:54 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-10-17 22:49:54 -->  column name inside view is 0 column Data is Health Job Vacancies 
INFO  - 2013-10-17 22:49:54 -->  column name inside view is 1 column Data is Internship / Nysc centers
INFO  - 2013-10-17 22:49:54 -->  column name inside view is 2 column Data is Pharmacy Schools
INFO  - 2013-10-17 22:49:54 -->  column name inside view is 3 column Data is Pharmacy Vacancies
DEBUG - 2013-10-17 22:49:54 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-10-17 22:49:54 --> Final output sent to browser
DEBUG - 2013-10-17 22:49:54 --> Total execution time: 0.0730
DEBUG - 2013-10-17 22:49:54 --> Config Class Initialized
DEBUG - 2013-10-17 22:49:54 --> Hooks Class Initialized
DEBUG - 2013-10-17 22:49:54 --> Utf8 Class Initialized
DEBUG - 2013-10-17 22:49:54 --> UTF-8 Support Enabled
DEBUG - 2013-10-17 22:49:54 --> URI Class Initialized
DEBUG - 2013-10-17 22:49:54 --> Router Class Initialized
DEBUG - 2013-10-17 22:49:54 --> Output Class Initialized
DEBUG - 2013-10-17 22:49:54 --> Security Class Initialized
DEBUG - 2013-10-17 22:49:54 --> Input Class Initialized
DEBUG - 2013-10-17 22:49:54 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-17 22:49:54 --> Language Class Initialized
DEBUG - 2013-10-17 22:49:54 --> Loader Class Initialized
DEBUG - 2013-10-17 22:49:54 --> Helper loaded: form_helper
DEBUG - 2013-10-17 22:49:54 --> Helper loaded: url_helper
DEBUG - 2013-10-17 22:49:54 --> Helper loaded: html_helper
DEBUG - 2013-10-17 22:49:54 --> Database Driver Class Initialized
DEBUG - 2013-10-17 22:49:54 --> Session Class Initialized
DEBUG - 2013-10-17 22:49:54 --> Helper loaded: string_helper
DEBUG - 2013-10-17 22:49:54 --> Session routines successfully run
DEBUG - 2013-10-17 22:49:54 --> Form Validation Class Initialized
DEBUG - 2013-10-17 22:49:54 --> Controller Class Initialized
DEBUG - 2013-10-17 22:49:54 --> Model Class Initialized
DEBUG - 2013-10-17 22:49:54 --> Model Class Initialized
DEBUG - 2013-10-17 22:49:54 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-17 22:49:54 --> after session initialization................
ERROR - 2013-10-17 22:49:54 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-10-17 22:49:56 --> Config Class Initialized
DEBUG - 2013-10-17 22:49:56 --> Hooks Class Initialized
DEBUG - 2013-10-17 22:49:56 --> Utf8 Class Initialized
DEBUG - 2013-10-17 22:49:56 --> UTF-8 Support Enabled
DEBUG - 2013-10-17 22:49:56 --> URI Class Initialized
DEBUG - 2013-10-17 22:49:56 --> Router Class Initialized
DEBUG - 2013-10-17 22:49:56 --> Output Class Initialized
DEBUG - 2013-10-17 22:49:56 --> Security Class Initialized
DEBUG - 2013-10-17 22:49:56 --> Input Class Initialized
DEBUG - 2013-10-17 22:49:56 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-17 22:49:56 --> Language Class Initialized
DEBUG - 2013-10-17 22:49:56 --> Loader Class Initialized
DEBUG - 2013-10-17 22:49:56 --> Helper loaded: form_helper
DEBUG - 2013-10-17 22:49:56 --> Helper loaded: url_helper
DEBUG - 2013-10-17 22:49:56 --> Helper loaded: html_helper
DEBUG - 2013-10-17 22:49:56 --> Database Driver Class Initialized
DEBUG - 2013-10-17 22:49:56 --> Session Class Initialized
DEBUG - 2013-10-17 22:49:56 --> Helper loaded: string_helper
DEBUG - 2013-10-17 22:49:56 --> Session routines successfully run
DEBUG - 2013-10-17 22:49:56 --> Form Validation Class Initialized
DEBUG - 2013-10-17 22:49:56 --> Controller Class Initialized
DEBUG - 2013-10-17 22:49:56 --> Model Class Initialized
DEBUG - 2013-10-17 22:49:56 --> Model Class Initialized
DEBUG - 2013-10-17 22:49:56 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-17 22:49:56 --> after session initialization................
INFO  - 2013-10-17 22:49:56 --> last news id is 0
INFO  - 2013-10-17 22:49:56 --> SELECT a.id_article as id, a.title as newsletter_title, a.description as newsletter_description, a.guestonly as guestonly, a.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`article` a)
JOIN `member` m ON `a`.`memberid_member` = `m`.`id_member`
WHERE `a`.`id_article` <> 0
ORDER BY `a`.`id_article` desc
LIMIT 15
INFO  - 2013-10-17 22:49:56 --> after newsleters list has been clicked.................
DEBUG - 2013-10-17 22:49:56 --> File loaded: ../pharmaray-application/views/articles.php
DEBUG - 2013-10-17 22:49:56 --> Final output sent to browser
DEBUG - 2013-10-17 22:49:56 --> Total execution time: 0.0510
DEBUG - 2013-10-17 22:49:56 --> Config Class Initialized
DEBUG - 2013-10-17 22:49:56 --> Hooks Class Initialized
DEBUG - 2013-10-17 22:49:56 --> Utf8 Class Initialized
DEBUG - 2013-10-17 22:49:56 --> UTF-8 Support Enabled
DEBUG - 2013-10-17 22:49:56 --> URI Class Initialized
DEBUG - 2013-10-17 22:49:56 --> Router Class Initialized
DEBUG - 2013-10-17 22:49:56 --> Output Class Initialized
DEBUG - 2013-10-17 22:49:56 --> Security Class Initialized
DEBUG - 2013-10-17 22:49:56 --> Input Class Initialized
DEBUG - 2013-10-17 22:49:56 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-17 22:49:56 --> Language Class Initialized
DEBUG - 2013-10-17 22:49:56 --> Loader Class Initialized
DEBUG - 2013-10-17 22:49:56 --> Helper loaded: form_helper
DEBUG - 2013-10-17 22:49:56 --> Helper loaded: url_helper
DEBUG - 2013-10-17 22:49:56 --> Helper loaded: html_helper
DEBUG - 2013-10-17 22:49:56 --> Database Driver Class Initialized
DEBUG - 2013-10-17 22:49:56 --> Session Class Initialized
DEBUG - 2013-10-17 22:49:56 --> Helper loaded: string_helper
DEBUG - 2013-10-17 22:49:56 --> Session routines successfully run
DEBUG - 2013-10-17 22:49:56 --> Form Validation Class Initialized
DEBUG - 2013-10-17 22:49:56 --> Controller Class Initialized
DEBUG - 2013-10-17 22:49:56 --> Model Class Initialized
DEBUG - 2013-10-17 22:49:56 --> Model Class Initialized
DEBUG - 2013-10-17 22:49:57 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-17 22:49:57 --> after session initialization................
ERROR - 2013-10-17 22:49:57 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-10-17 22:49:58 --> Config Class Initialized
DEBUG - 2013-10-17 22:49:58 --> Hooks Class Initialized
DEBUG - 2013-10-17 22:49:58 --> Utf8 Class Initialized
DEBUG - 2013-10-17 22:49:58 --> UTF-8 Support Enabled
DEBUG - 2013-10-17 22:49:58 --> URI Class Initialized
DEBUG - 2013-10-17 22:49:58 --> Router Class Initialized
DEBUG - 2013-10-17 22:49:58 --> Output Class Initialized
DEBUG - 2013-10-17 22:49:58 --> Security Class Initialized
DEBUG - 2013-10-17 22:49:58 --> Input Class Initialized
DEBUG - 2013-10-17 22:49:58 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-17 22:49:58 --> Language Class Initialized
DEBUG - 2013-10-17 22:49:58 --> Loader Class Initialized
DEBUG - 2013-10-17 22:49:58 --> Helper loaded: form_helper
DEBUG - 2013-10-17 22:49:58 --> Helper loaded: url_helper
DEBUG - 2013-10-17 22:49:58 --> Helper loaded: html_helper
DEBUG - 2013-10-17 22:49:58 --> Database Driver Class Initialized
DEBUG - 2013-10-17 22:49:58 --> Session Class Initialized
DEBUG - 2013-10-17 22:49:58 --> Helper loaded: string_helper
DEBUG - 2013-10-17 22:49:58 --> Session routines successfully run
DEBUG - 2013-10-17 22:49:58 --> Form Validation Class Initialized
DEBUG - 2013-10-17 22:49:58 --> Controller Class Initialized
DEBUG - 2013-10-17 22:49:58 --> Model Class Initialized
DEBUG - 2013-10-17 22:49:58 --> Model Class Initialized
DEBUG - 2013-10-17 22:49:58 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-17 22:49:58 --> after session initialization................
DEBUG - 2013-10-17 22:49:58 --> Config Class Initialized
DEBUG - 2013-10-17 22:49:58 --> Hooks Class Initialized
DEBUG - 2013-10-17 22:49:58 --> Utf8 Class Initialized
DEBUG - 2013-10-17 22:49:58 --> UTF-8 Support Enabled
DEBUG - 2013-10-17 22:49:58 --> URI Class Initialized
DEBUG - 2013-10-17 22:49:58 --> Router Class Initialized
DEBUG - 2013-10-17 22:49:58 --> No URI present. Default controller set.
DEBUG - 2013-10-17 22:49:58 --> Output Class Initialized
DEBUG - 2013-10-17 22:49:58 --> Security Class Initialized
DEBUG - 2013-10-17 22:49:58 --> Input Class Initialized
DEBUG - 2013-10-17 22:49:58 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-17 22:49:58 --> Language Class Initialized
DEBUG - 2013-10-17 22:49:58 --> Loader Class Initialized
DEBUG - 2013-10-17 22:49:58 --> Helper loaded: form_helper
DEBUG - 2013-10-17 22:49:58 --> Helper loaded: url_helper
DEBUG - 2013-10-17 22:49:58 --> Helper loaded: html_helper
DEBUG - 2013-10-17 22:49:58 --> Database Driver Class Initialized
DEBUG - 2013-10-17 22:49:58 --> Session Class Initialized
DEBUG - 2013-10-17 22:49:58 --> Helper loaded: string_helper
DEBUG - 2013-10-17 22:49:58 --> A session cookie was not found.
DEBUG - 2013-10-17 22:49:58 --> Session routines successfully run
DEBUG - 2013-10-17 22:49:58 --> Form Validation Class Initialized
DEBUG - 2013-10-17 22:49:58 --> Controller Class Initialized
INFO  - 2013-10-17 22:49:58 --> the form message==>
INFO  - 2013-10-17 22:49:58 --> The session id is ========>99d6d837814e7499d74d425150d6465c and the member id is =======>
INFO  - 2013-10-17 22:49:58 --> after the retrieving session list.................//////////
DEBUG - 2013-10-17 22:49:58 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-10-17 22:49:58 --> Final output sent to browser
DEBUG - 2013-10-17 22:49:58 --> Total execution time: 0.0500
DEBUG - 2013-10-17 23:03:01 --> Config Class Initialized
DEBUG - 2013-10-17 23:03:01 --> Hooks Class Initialized
DEBUG - 2013-10-17 23:03:01 --> Utf8 Class Initialized
DEBUG - 2013-10-17 23:03:01 --> UTF-8 Support Enabled
DEBUG - 2013-10-17 23:03:01 --> URI Class Initialized
DEBUG - 2013-10-17 23:03:01 --> Router Class Initialized
DEBUG - 2013-10-17 23:03:01 --> Output Class Initialized
DEBUG - 2013-10-17 23:03:01 --> Security Class Initialized
DEBUG - 2013-10-17 23:03:01 --> Input Class Initialized
DEBUG - 2013-10-17 23:03:01 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-17 23:03:01 --> Language Class Initialized
DEBUG - 2013-10-17 23:03:01 --> Loader Class Initialized
DEBUG - 2013-10-17 23:03:01 --> Helper loaded: form_helper
DEBUG - 2013-10-17 23:03:01 --> Helper loaded: url_helper
DEBUG - 2013-10-17 23:03:01 --> Helper loaded: html_helper
DEBUG - 2013-10-17 23:03:01 --> Database Driver Class Initialized
DEBUG - 2013-10-17 23:03:01 --> Session Class Initialized
DEBUG - 2013-10-17 23:03:01 --> Helper loaded: string_helper
DEBUG - 2013-10-17 23:03:01 --> Session routines successfully run
DEBUG - 2013-10-17 23:03:01 --> Form Validation Class Initialized
DEBUG - 2013-10-17 23:03:01 --> Controller Class Initialized
DEBUG - 2013-10-17 23:03:01 --> Model Class Initialized
DEBUG - 2013-10-17 23:03:01 --> Model Class Initialized
DEBUG - 2013-10-17 23:03:01 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-17 23:03:01 --> after session initialization................
INFO  - 2013-10-17 23:03:01 --> inside rays login auth.............
DEBUG - 2013-10-17 23:03:01 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-10-17 23:03:01 --> XSS Filtering completed
DEBUG - 2013-10-17 23:03:01 --> XSS Filtering completed
INFO  - 2013-10-17 23:03:01 --> before getting the relation of member............6
INFO  - 2013-10-17 23:03:01 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-10-17 23:03:01 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-10-17 23:03:01 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-10-17 23:03:01 --> inside retrieving vacancy for member
INFO  - 2013-10-17 23:03:01 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-10-17 23:03:01 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-10-17 23:03:01 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-10-17 23:03:01 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-10-17 23:03:01 --> News by drug_id ::::::::::===>SELECT `n`.`id_news` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-10-17 23:03:01 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-10-17 23:03:01 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-10-17 23:03:01 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-10-17 23:03:01 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-10-17 23:03:01 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-10-17 23:03:01 -->  column name inside view is 0 column Data is Health Job Vacancies 
INFO  - 2013-10-17 23:03:01 -->  column name inside view is 1 column Data is Internship / Nysc centers
INFO  - 2013-10-17 23:03:01 -->  column name inside view is 2 column Data is Pharmacy Schools
INFO  - 2013-10-17 23:03:01 -->  column name inside view is 3 column Data is Pharmacy Vacancies
DEBUG - 2013-10-17 23:03:01 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-10-17 23:03:01 --> Final output sent to browser
DEBUG - 2013-10-17 23:03:01 --> Total execution time: 0.0800
DEBUG - 2013-10-17 23:03:01 --> Config Class Initialized
DEBUG - 2013-10-17 23:03:01 --> Hooks Class Initialized
DEBUG - 2013-10-17 23:03:01 --> Utf8 Class Initialized
DEBUG - 2013-10-17 23:03:01 --> UTF-8 Support Enabled
DEBUG - 2013-10-17 23:03:01 --> URI Class Initialized
DEBUG - 2013-10-17 23:03:01 --> Router Class Initialized
DEBUG - 2013-10-17 23:03:01 --> Output Class Initialized
DEBUG - 2013-10-17 23:03:01 --> Security Class Initialized
DEBUG - 2013-10-17 23:03:01 --> Input Class Initialized
DEBUG - 2013-10-17 23:03:01 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-17 23:03:01 --> Language Class Initialized
DEBUG - 2013-10-17 23:03:01 --> Loader Class Initialized
DEBUG - 2013-10-17 23:03:01 --> Helper loaded: form_helper
DEBUG - 2013-10-17 23:03:01 --> Helper loaded: url_helper
DEBUG - 2013-10-17 23:03:01 --> Helper loaded: html_helper
DEBUG - 2013-10-17 23:03:01 --> Database Driver Class Initialized
DEBUG - 2013-10-17 23:03:01 --> Session Class Initialized
DEBUG - 2013-10-17 23:03:01 --> Helper loaded: string_helper
DEBUG - 2013-10-17 23:03:01 --> Session routines successfully run
DEBUG - 2013-10-17 23:03:01 --> Form Validation Class Initialized
DEBUG - 2013-10-17 23:03:01 --> Controller Class Initialized
DEBUG - 2013-10-17 23:03:01 --> Model Class Initialized
DEBUG - 2013-10-17 23:03:01 --> Model Class Initialized
DEBUG - 2013-10-17 23:03:01 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-17 23:03:01 --> after session initialization................
ERROR - 2013-10-17 23:03:01 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-10-17 23:03:05 --> Config Class Initialized
DEBUG - 2013-10-17 23:03:05 --> Hooks Class Initialized
DEBUG - 2013-10-17 23:03:05 --> Utf8 Class Initialized
DEBUG - 2013-10-17 23:03:05 --> UTF-8 Support Enabled
DEBUG - 2013-10-17 23:03:05 --> URI Class Initialized
DEBUG - 2013-10-17 23:03:05 --> Router Class Initialized
DEBUG - 2013-10-17 23:03:05 --> Output Class Initialized
DEBUG - 2013-10-17 23:03:05 --> Security Class Initialized
DEBUG - 2013-10-17 23:03:05 --> Input Class Initialized
DEBUG - 2013-10-17 23:03:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-17 23:03:05 --> Language Class Initialized
DEBUG - 2013-10-17 23:03:05 --> Loader Class Initialized
DEBUG - 2013-10-17 23:03:05 --> Helper loaded: form_helper
DEBUG - 2013-10-17 23:03:05 --> Helper loaded: url_helper
DEBUG - 2013-10-17 23:03:05 --> Helper loaded: html_helper
DEBUG - 2013-10-17 23:03:05 --> Database Driver Class Initialized
DEBUG - 2013-10-17 23:03:05 --> Session Class Initialized
DEBUG - 2013-10-17 23:03:05 --> Helper loaded: string_helper
DEBUG - 2013-10-17 23:03:05 --> Session routines successfully run
DEBUG - 2013-10-17 23:03:05 --> Form Validation Class Initialized
DEBUG - 2013-10-17 23:03:05 --> Controller Class Initialized
DEBUG - 2013-10-17 23:03:05 --> Model Class Initialized
DEBUG - 2013-10-17 23:03:05 --> Model Class Initialized
DEBUG - 2013-10-17 23:03:05 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-17 23:03:05 --> after session initialization................
ERROR - 2013-10-17 23:03:05 --> Severity: Notice  --> Undefined variable: drugclass_id C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 394
ERROR - 2013-10-17 23:03:05 --> Severity: Notice  --> Undefined variable: pregnancycategory_id C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 394
ERROR - 2013-10-17 23:03:05 --> Severity: Notice  --> Undefined variable: manufacturer_id C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 394
INFO  - 2013-10-17 23:03:05 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  ''
AND `d`.`drugclassid_drugclass`  =  ''
DEBUG - 2013-10-17 23:03:05 --> Final output sent to browser
DEBUG - 2013-10-17 23:03:05 --> Total execution time: 0.0500
DEBUG - 2013-10-17 23:03:08 --> Config Class Initialized
DEBUG - 2013-10-17 23:03:08 --> Hooks Class Initialized
DEBUG - 2013-10-17 23:03:08 --> Utf8 Class Initialized
DEBUG - 2013-10-17 23:03:08 --> UTF-8 Support Enabled
DEBUG - 2013-10-17 23:03:08 --> URI Class Initialized
DEBUG - 2013-10-17 23:03:08 --> Router Class Initialized
DEBUG - 2013-10-17 23:03:08 --> Output Class Initialized
DEBUG - 2013-10-17 23:03:08 --> Security Class Initialized
DEBUG - 2013-10-17 23:03:08 --> Input Class Initialized
DEBUG - 2013-10-17 23:03:08 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-17 23:03:08 --> Language Class Initialized
DEBUG - 2013-10-17 23:03:08 --> Loader Class Initialized
DEBUG - 2013-10-17 23:03:08 --> Helper loaded: form_helper
DEBUG - 2013-10-17 23:03:08 --> Helper loaded: url_helper
DEBUG - 2013-10-17 23:03:08 --> Helper loaded: html_helper
DEBUG - 2013-10-17 23:03:08 --> Database Driver Class Initialized
DEBUG - 2013-10-17 23:03:08 --> Session Class Initialized
DEBUG - 2013-10-17 23:03:08 --> Helper loaded: string_helper
DEBUG - 2013-10-17 23:03:08 --> Session routines successfully run
DEBUG - 2013-10-17 23:03:08 --> Form Validation Class Initialized
DEBUG - 2013-10-17 23:03:08 --> Controller Class Initialized
DEBUG - 2013-10-17 23:03:08 --> Model Class Initialized
DEBUG - 2013-10-17 23:03:08 --> Model Class Initialized
DEBUG - 2013-10-17 23:03:08 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-17 23:03:08 --> after session initialization................
ERROR - 2013-10-17 23:03:08 --> Severity: Notice  --> Undefined variable: drugclass_id C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 394
ERROR - 2013-10-17 23:03:08 --> Severity: Notice  --> Undefined variable: pregnancycategory_id C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 394
ERROR - 2013-10-17 23:03:08 --> Severity: Notice  --> Undefined variable: manufacturer_id C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 394
INFO  - 2013-10-17 23:03:08 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  ''
AND `d`.`drugclassid_drugclass`  =  ''
DEBUG - 2013-10-17 23:03:08 --> Final output sent to browser
DEBUG - 2013-10-17 23:03:08 --> Total execution time: 0.0500
DEBUG - 2013-10-17 23:14:38 --> Config Class Initialized
DEBUG - 2013-10-17 23:14:38 --> Hooks Class Initialized
DEBUG - 2013-10-17 23:14:38 --> Utf8 Class Initialized
DEBUG - 2013-10-17 23:14:38 --> UTF-8 Support Enabled
DEBUG - 2013-10-17 23:14:38 --> URI Class Initialized
DEBUG - 2013-10-17 23:14:38 --> Router Class Initialized
DEBUG - 2013-10-17 23:14:38 --> Output Class Initialized
DEBUG - 2013-10-17 23:14:38 --> Security Class Initialized
DEBUG - 2013-10-17 23:14:38 --> Input Class Initialized
DEBUG - 2013-10-17 23:14:38 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-17 23:14:38 --> Language Class Initialized
DEBUG - 2013-10-17 23:14:38 --> Loader Class Initialized
DEBUG - 2013-10-17 23:14:38 --> Helper loaded: form_helper
DEBUG - 2013-10-17 23:14:38 --> Helper loaded: url_helper
DEBUG - 2013-10-17 23:14:38 --> Helper loaded: html_helper
DEBUG - 2013-10-17 23:14:38 --> Database Driver Class Initialized
DEBUG - 2013-10-17 23:14:38 --> Session Class Initialized
DEBUG - 2013-10-17 23:14:38 --> Helper loaded: string_helper
DEBUG - 2013-10-17 23:14:38 --> Session routines successfully run
DEBUG - 2013-10-17 23:14:38 --> Form Validation Class Initialized
DEBUG - 2013-10-17 23:14:38 --> Controller Class Initialized
DEBUG - 2013-10-17 23:14:38 --> Model Class Initialized
DEBUG - 2013-10-17 23:14:38 --> Model Class Initialized
DEBUG - 2013-10-17 23:14:38 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-17 23:14:38 --> after session initialization................
INFO  - 2013-10-17 23:14:38 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-10-17 23:14:38 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-10-17 23:14:38 --> inside retrieving vacancy for member
INFO  - 2013-10-17 23:14:38 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-10-17 23:14:38 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-10-17 23:14:38 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-10-17 23:14:38 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-10-17 23:14:38 --> News by drug_id ::::::::::===>SELECT `n`.`id_news` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-10-17 23:14:38 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-10-17 23:14:38 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-10-17 23:14:38 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-10-17 23:14:38 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-10-17 23:14:38 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-10-17 23:14:38 -->  column name inside view is 0 column Data is Health Job Vacancies 
INFO  - 2013-10-17 23:14:38 -->  column name inside view is 1 column Data is Internship / Nysc centers
INFO  - 2013-10-17 23:14:38 -->  column name inside view is 2 column Data is Pharmacy Schools
INFO  - 2013-10-17 23:14:38 -->  column name inside view is 3 column Data is Pharmacy Vacancies
DEBUG - 2013-10-17 23:14:38 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-10-17 23:14:38 --> Final output sent to browser
DEBUG - 2013-10-17 23:14:38 --> Total execution time: 0.0800
DEBUG - 2013-10-17 23:14:38 --> Config Class Initialized
DEBUG - 2013-10-17 23:14:38 --> Hooks Class Initialized
DEBUG - 2013-10-17 23:14:38 --> Utf8 Class Initialized
DEBUG - 2013-10-17 23:14:38 --> UTF-8 Support Enabled
DEBUG - 2013-10-17 23:14:38 --> URI Class Initialized
DEBUG - 2013-10-17 23:14:38 --> Router Class Initialized
DEBUG - 2013-10-17 23:14:38 --> Output Class Initialized
DEBUG - 2013-10-17 23:14:38 --> Security Class Initialized
DEBUG - 2013-10-17 23:14:38 --> Input Class Initialized
DEBUG - 2013-10-17 23:14:38 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-17 23:14:38 --> Language Class Initialized
DEBUG - 2013-10-17 23:14:38 --> Loader Class Initialized
DEBUG - 2013-10-17 23:14:38 --> Helper loaded: form_helper
DEBUG - 2013-10-17 23:14:38 --> Helper loaded: url_helper
DEBUG - 2013-10-17 23:14:38 --> Helper loaded: html_helper
DEBUG - 2013-10-17 23:14:38 --> Database Driver Class Initialized
DEBUG - 2013-10-17 23:14:38 --> Session Class Initialized
DEBUG - 2013-10-17 23:14:38 --> Helper loaded: string_helper
DEBUG - 2013-10-17 23:14:38 --> Session routines successfully run
DEBUG - 2013-10-17 23:14:38 --> Form Validation Class Initialized
DEBUG - 2013-10-17 23:14:38 --> Controller Class Initialized
DEBUG - 2013-10-17 23:14:38 --> Model Class Initialized
DEBUG - 2013-10-17 23:14:38 --> Model Class Initialized
DEBUG - 2013-10-17 23:14:38 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-17 23:14:38 --> after session initialization................
ERROR - 2013-10-17 23:14:38 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-10-17 23:14:40 --> Config Class Initialized
DEBUG - 2013-10-17 23:14:40 --> Hooks Class Initialized
DEBUG - 2013-10-17 23:14:40 --> Utf8 Class Initialized
DEBUG - 2013-10-17 23:14:40 --> UTF-8 Support Enabled
DEBUG - 2013-10-17 23:14:40 --> URI Class Initialized
DEBUG - 2013-10-17 23:14:40 --> Router Class Initialized
DEBUG - 2013-10-17 23:14:40 --> Output Class Initialized
DEBUG - 2013-10-17 23:14:40 --> Security Class Initialized
DEBUG - 2013-10-17 23:14:40 --> Input Class Initialized
DEBUG - 2013-10-17 23:14:40 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-17 23:14:40 --> Language Class Initialized
DEBUG - 2013-10-17 23:14:40 --> Loader Class Initialized
DEBUG - 2013-10-17 23:14:40 --> Helper loaded: form_helper
DEBUG - 2013-10-17 23:14:40 --> Helper loaded: url_helper
DEBUG - 2013-10-17 23:14:40 --> Helper loaded: html_helper
DEBUG - 2013-10-17 23:14:40 --> Database Driver Class Initialized
DEBUG - 2013-10-17 23:14:40 --> Session Class Initialized
DEBUG - 2013-10-17 23:14:40 --> Helper loaded: string_helper
DEBUG - 2013-10-17 23:14:40 --> Session routines successfully run
DEBUG - 2013-10-17 23:14:40 --> Form Validation Class Initialized
DEBUG - 2013-10-17 23:14:40 --> Controller Class Initialized
DEBUG - 2013-10-17 23:14:40 --> Model Class Initialized
DEBUG - 2013-10-17 23:14:40 --> Model Class Initialized
DEBUG - 2013-10-17 23:14:40 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-17 23:14:40 --> after session initialization................
INFO  - 2013-10-17 23:14:40 --> last news id is 0
INFO  - 2013-10-17 23:14:40 --> SELECT a.id_article as id, a.title as newsletter_title, a.description as newsletter_description, a.guestonly as guestonly, a.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`article` a)
JOIN `member` m ON `a`.`memberid_member` = `m`.`id_member`
WHERE `a`.`id_article` <> 0
ORDER BY `a`.`id_article` desc
LIMIT 15
INFO  - 2013-10-17 23:14:40 --> after newsleters list has been clicked.................
DEBUG - 2013-10-17 23:14:40 --> File loaded: ../pharmaray-application/views/articles.php
DEBUG - 2013-10-17 23:14:40 --> Final output sent to browser
DEBUG - 2013-10-17 23:14:40 --> Total execution time: 0.0600
DEBUG - 2013-10-17 23:14:40 --> Config Class Initialized
DEBUG - 2013-10-17 23:14:40 --> Hooks Class Initialized
DEBUG - 2013-10-17 23:14:40 --> Utf8 Class Initialized
DEBUG - 2013-10-17 23:14:40 --> UTF-8 Support Enabled
DEBUG - 2013-10-17 23:14:40 --> URI Class Initialized
DEBUG - 2013-10-17 23:14:40 --> Router Class Initialized
DEBUG - 2013-10-17 23:14:40 --> Output Class Initialized
DEBUG - 2013-10-17 23:14:40 --> Security Class Initialized
DEBUG - 2013-10-17 23:14:40 --> Input Class Initialized
DEBUG - 2013-10-17 23:14:40 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-17 23:14:40 --> Language Class Initialized
DEBUG - 2013-10-17 23:14:40 --> Loader Class Initialized
DEBUG - 2013-10-17 23:14:40 --> Helper loaded: form_helper
DEBUG - 2013-10-17 23:14:40 --> Helper loaded: url_helper
DEBUG - 2013-10-17 23:14:40 --> Helper loaded: html_helper
DEBUG - 2013-10-17 23:14:40 --> Database Driver Class Initialized
DEBUG - 2013-10-17 23:14:40 --> Session Class Initialized
DEBUG - 2013-10-17 23:14:40 --> Helper loaded: string_helper
DEBUG - 2013-10-17 23:14:40 --> Session routines successfully run
DEBUG - 2013-10-17 23:14:40 --> Form Validation Class Initialized
DEBUG - 2013-10-17 23:14:40 --> Controller Class Initialized
DEBUG - 2013-10-17 23:14:40 --> Model Class Initialized
DEBUG - 2013-10-17 23:14:40 --> Model Class Initialized
DEBUG - 2013-10-17 23:14:40 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-17 23:14:40 --> after session initialization................
ERROR - 2013-10-17 23:14:40 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-10-17 23:14:41 --> Config Class Initialized
DEBUG - 2013-10-17 23:14:41 --> Hooks Class Initialized
DEBUG - 2013-10-17 23:14:41 --> Utf8 Class Initialized
DEBUG - 2013-10-17 23:14:41 --> UTF-8 Support Enabled
DEBUG - 2013-10-17 23:14:41 --> URI Class Initialized
DEBUG - 2013-10-17 23:14:41 --> Router Class Initialized
DEBUG - 2013-10-17 23:14:41 --> Output Class Initialized
DEBUG - 2013-10-17 23:14:41 --> Security Class Initialized
DEBUG - 2013-10-17 23:14:41 --> Input Class Initialized
DEBUG - 2013-10-17 23:14:41 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-17 23:14:41 --> Language Class Initialized
DEBUG - 2013-10-17 23:14:41 --> Loader Class Initialized
DEBUG - 2013-10-17 23:14:41 --> Helper loaded: form_helper
DEBUG - 2013-10-17 23:14:41 --> Helper loaded: url_helper
DEBUG - 2013-10-17 23:14:41 --> Helper loaded: html_helper
DEBUG - 2013-10-17 23:14:41 --> Database Driver Class Initialized
DEBUG - 2013-10-17 23:14:41 --> Session Class Initialized
DEBUG - 2013-10-17 23:14:41 --> Helper loaded: string_helper
DEBUG - 2013-10-17 23:14:41 --> Session routines successfully run
DEBUG - 2013-10-17 23:14:41 --> Form Validation Class Initialized
DEBUG - 2013-10-17 23:14:41 --> Controller Class Initialized
DEBUG - 2013-10-17 23:14:41 --> Model Class Initialized
DEBUG - 2013-10-17 23:14:41 --> Model Class Initialized
DEBUG - 2013-10-17 23:14:41 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-17 23:14:41 --> after session initialization................
INFO  - 2013-10-17 23:14:41 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-10-17 23:14:41 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-10-17 23:14:41 --> inside retrieving vacancy for member
INFO  - 2013-10-17 23:14:41 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-10-17 23:14:41 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-10-17 23:14:41 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-10-17 23:14:41 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-10-17 23:14:41 --> News by drug_id ::::::::::===>SELECT `n`.`id_news` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-10-17 23:14:41 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-10-17 23:14:41 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-10-17 23:14:41 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-10-17 23:14:41 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-10-17 23:14:41 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-10-17 23:14:41 -->  column name inside view is 0 column Data is Health Job Vacancies 
INFO  - 2013-10-17 23:14:41 -->  column name inside view is 1 column Data is Internship / Nysc centers
INFO  - 2013-10-17 23:14:41 -->  column name inside view is 2 column Data is Pharmacy Schools
INFO  - 2013-10-17 23:14:41 -->  column name inside view is 3 column Data is Pharmacy Vacancies
DEBUG - 2013-10-17 23:14:41 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-10-17 23:14:41 --> Final output sent to browser
DEBUG - 2013-10-17 23:14:41 --> Total execution time: 0.0700
DEBUG - 2013-10-17 23:14:41 --> Config Class Initialized
DEBUG - 2013-10-17 23:14:41 --> Hooks Class Initialized
DEBUG - 2013-10-17 23:14:41 --> Utf8 Class Initialized
DEBUG - 2013-10-17 23:14:41 --> UTF-8 Support Enabled
DEBUG - 2013-10-17 23:14:41 --> URI Class Initialized
DEBUG - 2013-10-17 23:14:41 --> Router Class Initialized
DEBUG - 2013-10-17 23:14:41 --> Output Class Initialized
DEBUG - 2013-10-17 23:14:41 --> Security Class Initialized
DEBUG - 2013-10-17 23:14:41 --> Input Class Initialized
DEBUG - 2013-10-17 23:14:41 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-17 23:14:41 --> Language Class Initialized
DEBUG - 2013-10-17 23:14:41 --> Loader Class Initialized
DEBUG - 2013-10-17 23:14:41 --> Helper loaded: form_helper
DEBUG - 2013-10-17 23:14:41 --> Helper loaded: url_helper
DEBUG - 2013-10-17 23:14:41 --> Helper loaded: html_helper
DEBUG - 2013-10-17 23:14:41 --> Database Driver Class Initialized
DEBUG - 2013-10-17 23:14:41 --> Session Class Initialized
DEBUG - 2013-10-17 23:14:41 --> Helper loaded: string_helper
DEBUG - 2013-10-17 23:14:41 --> Session routines successfully run
DEBUG - 2013-10-17 23:14:41 --> Form Validation Class Initialized
DEBUG - 2013-10-17 23:14:41 --> Controller Class Initialized
DEBUG - 2013-10-17 23:14:41 --> Model Class Initialized
DEBUG - 2013-10-17 23:14:41 --> Model Class Initialized
DEBUG - 2013-10-17 23:14:41 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-17 23:14:41 --> after session initialization................
ERROR - 2013-10-17 23:14:41 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-10-17 23:14:54 --> Config Class Initialized
DEBUG - 2013-10-17 23:14:54 --> Hooks Class Initialized
DEBUG - 2013-10-17 23:14:54 --> Utf8 Class Initialized
DEBUG - 2013-10-17 23:14:54 --> UTF-8 Support Enabled
DEBUG - 2013-10-17 23:14:54 --> URI Class Initialized
DEBUG - 2013-10-17 23:14:54 --> Router Class Initialized
DEBUG - 2013-10-17 23:14:54 --> Output Class Initialized
DEBUG - 2013-10-17 23:14:54 --> Security Class Initialized
DEBUG - 2013-10-17 23:14:54 --> Input Class Initialized
DEBUG - 2013-10-17 23:14:54 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-17 23:14:54 --> Language Class Initialized
DEBUG - 2013-10-17 23:14:54 --> Loader Class Initialized
DEBUG - 2013-10-17 23:14:54 --> Helper loaded: form_helper
DEBUG - 2013-10-17 23:14:54 --> Helper loaded: url_helper
DEBUG - 2013-10-17 23:14:54 --> Helper loaded: html_helper
DEBUG - 2013-10-17 23:14:54 --> Database Driver Class Initialized
DEBUG - 2013-10-17 23:14:54 --> Session Class Initialized
DEBUG - 2013-10-17 23:14:54 --> Helper loaded: string_helper
DEBUG - 2013-10-17 23:14:54 --> Session routines successfully run
DEBUG - 2013-10-17 23:14:54 --> Form Validation Class Initialized
DEBUG - 2013-10-17 23:14:54 --> Controller Class Initialized
DEBUG - 2013-10-17 23:14:54 --> Model Class Initialized
DEBUG - 2013-10-17 23:14:54 --> Model Class Initialized
DEBUG - 2013-10-17 23:14:54 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-17 23:14:54 --> after session initialization................
ERROR - 2013-10-17 23:14:54 --> Severity: Warning  --> Missing argument 3 for membermodel::retrieve_drugby_related_items(), called in C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php on line 395 and defined C:\xampp\htdocs\Pharmarays\pharmaray-application\models\members_model\membermodel.php 35
ERROR - 2013-10-17 23:14:54 --> Severity: Warning  --> Missing argument 4 for membermodel::retrieve_drugby_related_items(), called in C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php on line 395 and defined C:\xampp\htdocs\Pharmarays\pharmaray-application\models\members_model\membermodel.php 35
ERROR - 2013-10-17 23:14:54 --> Severity: Warning  --> Missing argument 5 for membermodel::retrieve_drugby_related_items(), called in C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php on line 395 and defined C:\xampp\htdocs\Pharmarays\pharmaray-application\models\members_model\membermodel.php 35
ERROR - 2013-10-17 23:14:54 --> Severity: Notice  --> Undefined variable: class_id C:\xampp\htdocs\Pharmarays\pharmaray-application\models\members_model\membermodel.php 37
ERROR - 2013-10-17 23:14:54 --> Severity: Notice  --> Undefined variable: class_id C:\xampp\htdocs\Pharmarays\pharmaray-application\models\members_model\membermodel.php 40
ERROR - 2013-10-17 23:14:54 --> Severity: Notice  --> Undefined variable: category_id C:\xampp\htdocs\Pharmarays\pharmaray-application\models\members_model\membermodel.php 41
ERROR - 2013-10-17 23:14:54 --> Severity: Notice  --> Undefined variable: category_id C:\xampp\htdocs\Pharmarays\pharmaray-application\models\members_model\membermodel.php 46
ERROR - 2013-10-17 23:14:54 --> Severity: Notice  --> Undefined variable: brand_id C:\xampp\htdocs\Pharmarays\pharmaray-application\models\members_model\membermodel.php 47
ERROR - 2013-10-17 23:14:54 --> Severity: Notice  --> Undefined variable: brand_id C:\xampp\htdocs\Pharmarays\pharmaray-application\models\members_model\membermodel.php 52
DEBUG - 2013-10-17 23:14:54 --> DB Transaction Failure
ERROR - 2013-10-17 23:14:54 --> Query error: Unknown column '0' in 'where clause'
DEBUG - 2013-10-17 23:14:54 --> Language file loaded: language/english/db_lang.php
