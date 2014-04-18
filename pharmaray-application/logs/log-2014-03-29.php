<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2014-03-29 11:10:10 --> Config Class Initialized
DEBUG - 2014-03-29 11:10:10 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:10:10 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:10:10 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:10:10 --> URI Class Initialized
DEBUG - 2014-03-29 11:10:10 --> Router Class Initialized
DEBUG - 2014-03-29 11:10:10 --> Output Class Initialized
DEBUG - 2014-03-29 11:10:10 --> Security Class Initialized
DEBUG - 2014-03-29 11:10:10 --> Input Class Initialized
DEBUG - 2014-03-29 11:10:10 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:10:10 --> Language Class Initialized
DEBUG - 2014-03-29 11:10:10 --> Loader Class Initialized
DEBUG - 2014-03-29 11:10:10 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:10:10 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:10:10 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:10:10 --> Database Driver Class Initialized
ERROR - 2014-03-29 11:10:10 --> Severity: Warning  --> mysql_pconnect(): MySQL server has gone away C:\xampp\htdocs\Pharmarays\pharmaray-system\database\drivers\mysql\mysql_driver.php 91
DEBUG - 2014-03-29 11:10:11 --> Session Class Initialized
DEBUG - 2014-03-29 11:10:11 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:10:11 --> A session cookie was not found.
DEBUG - 2014-03-29 11:10:11 --> Session routines successfully run
DEBUG - 2014-03-29 11:10:11 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:10:11 --> Controller Class Initialized
DEBUG - 2014-03-29 11:10:11 --> Model Class Initialized
DEBUG - 2014-03-29 11:10:11 --> Model Class Initialized
DEBUG - 2014-03-29 11:10:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:10:11 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:10:11 --> after session initialization................
INFO  - 2014-03-29 11:10:11 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  ''
INFO  - 2014-03-29 11:10:11 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-03-29 11:10:11 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2014-03-29 11:10:11 --> inside retrieving vacancy for member
INFO  - 2014-03-29 11:10:11 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2014-03-29 11:10:11 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-03-29 11:10:11 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2014-03-29 11:10:11 --> Drugs ::::::::::===>SELECT d.id_drug, d.drug_name, d.drug_description, group_concat(bn.name, ':', bn.id_brandname) as drug_company, group_concat(dcc.name) as drug_brandnames, dcc.id_drugcategory as category_id
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dcc`.`brandname_id`
WHERE `d`.`id_drug` =  '1'
GROUP BY `id_drug`
ORDER BY `d`.`drug_name`, `bn`.`id_brandname`
INFO  - 2014-03-29 11:10:11 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drugcategory_id` = `dc`.`id_drugcategory`
JOIN `drug` d ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2014-03-29 11:10:11 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2014-03-29 11:10:11 --> inside retrieving pharmacy for drug id is 1
INFO  - 2014-03-29 11:10:11 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2014-03-29 11:10:11 --> Related drugs ::::::::::===>SELECT d.drug_name
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcg`.`drugcategory_id` = `dcc`.`id_drugcategory`
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
WHERE `dcc`.`brandname_id` =  '0'
AND `dc`.`id_drugclass` =  '0'
INFO  - 2014-03-29 11:10:11 --> inside retrieve most searched drugs
INFO  - 2014-03-29 11:10:11 --> SELECT `d`.`id_drug` as id, `d`.`drug_name` as name, count(ds.id_drugsearch) as search_count
FROM (`drug_search` ds)
JOIN `drug` d ON `d`.`id_drug` = `ds`.`drug_id`
GROUP BY `d`.`id_drug`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-03-29 11:10:11 --> inside retrieve most searched pharmacy
INFO  - 2014-03-29 11:10:11 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-03-29 11:10:11 --> inside retrieve most searched article
INFO  - 2014-03-29 11:10:11 --> SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description, count(ats.article_id) as search_count
FROM (`article_search` ats)
JOIN `article` a ON `a`.`id_article` = `ats`.`article_id`
JOIN `news` n ON `a`.`newsid_news` = `n`.`id_news`
GROUP BY `a`.`id_article`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-03-29 11:10:11 --> The session id is ========>8bcfdc7d302cf7534984b5069c35b802 and the member id is =======>
INFO  - 2014-03-29 11:10:11 -->  column name inside view is 0 column Data is 491
INFO  - 2014-03-29 11:10:11 -->  column name inside view is 1 column Data is 618
INFO  - 2014-03-29 11:10:11 -->  column name inside view is 2 column Data is 1
INFO  - 2014-03-29 11:10:11 -->  column name inside view is 3 column Data is 515
INFO  - 2014-03-29 11:10:11 -->  column name inside view is 4 column Data is 488
INFO  - 2014-03-29 11:10:11 -->  column name inside view is 5 column Data is 509
INFO  - 2014-03-29 11:10:11 -->  column name inside view is 6 column Data is 487
INFO  - 2014-03-29 11:10:11 -->  column name inside view is 7 column Data is 489
INFO  - 2014-03-29 11:10:11 -->  column name inside view is 8 column Data is 516
INFO  - 2014-03-29 11:10:11 -->  column name inside view is 9 column Data is 641
INFO  - 2014-03-29 11:10:11 -->  column name inside view is 0 column Data is 5
INFO  - 2014-03-29 11:10:11 -->  column name inside view is 1 column Data is 2
INFO  - 2014-03-29 11:10:11 -->  column name inside view is 2 column Data is 3
INFO  - 2014-03-29 11:10:11 -->  column name inside view is 3 column Data is 1
INFO  - 2014-03-29 11:10:11 -->  column name inside view is 4 column Data is 18
INFO  - 2014-03-29 11:10:11 -->  column name inside view is 5 column Data is 15
INFO  - 2014-03-29 11:10:11 -->  column name inside view is 6 column Data is 14
INFO  - 2014-03-29 11:10:11 -->  column name inside view is 7 column Data is 6
INFO  - 2014-03-29 11:10:11 -->  column name inside view is 8 column Data is 43
INFO  - 2014-03-29 11:10:11 -->  column name inside view is 9 column Data is 9
INFO  - 2014-03-29 11:10:11 -->  column name inside view is 0 column Data is Male Doctor
INFO  - 2014-03-29 11:10:11 -->  column name inside view is 1 column Data is Ordinary User
DEBUG - 2014-03-29 11:10:11 --> File loaded: ../pharmaray-application/views/onlinepharmacy.php
DEBUG - 2014-03-29 11:10:11 --> Final output sent to browser
DEBUG - 2014-03-29 11:10:11 --> Total execution time: 1.1601
DEBUG - 2014-03-29 11:10:11 --> Config Class Initialized
DEBUG - 2014-03-29 11:10:11 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:10:11 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:10:11 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:10:11 --> URI Class Initialized
DEBUG - 2014-03-29 11:10:11 --> Router Class Initialized
ERROR - 2014-03-29 11:10:11 --> 404 Page Not Found --> css
DEBUG - 2014-03-29 11:10:15 --> Config Class Initialized
DEBUG - 2014-03-29 11:10:15 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:10:15 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:10:15 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:10:15 --> URI Class Initialized
DEBUG - 2014-03-29 11:10:15 --> Router Class Initialized
DEBUG - 2014-03-29 11:10:15 --> Output Class Initialized
DEBUG - 2014-03-29 11:10:15 --> Security Class Initialized
DEBUG - 2014-03-29 11:10:15 --> Input Class Initialized
DEBUG - 2014-03-29 11:10:15 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:10:15 --> Language Class Initialized
DEBUG - 2014-03-29 11:10:15 --> Loader Class Initialized
DEBUG - 2014-03-29 11:10:15 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:10:15 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:10:15 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:10:15 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:10:15 --> Session Class Initialized
DEBUG - 2014-03-29 11:10:15 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:10:15 --> Session routines successfully run
DEBUG - 2014-03-29 11:10:15 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:10:15 --> Controller Class Initialized
DEBUG - 2014-03-29 11:10:15 --> Model Class Initialized
DEBUG - 2014-03-29 11:10:15 --> Model Class Initialized
DEBUG - 2014-03-29 11:10:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:10:15 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:10:15 --> after session initialization................
INFO  - 2014-03-29 11:10:15 --> inside the auto suggest page.................
INFO  - 2014-03-29 11:10:15 --> after the list array.................
INFO  - 2014-03-29 11:10:15 --> Ajax retrieval ::::::::::===>SELECT d.id_drug, d.drug_name, group_concat(bn.name, ':', bn.id_brandname) as drug_brandname
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dc`.`brandname_id`
WHERE `d`.`drug_name` like '%a%' and d.id_drug <> 1
GROUP BY `id_drug`, `id_drug`
ORDER BY `d`.`drug_name`
LIMIT 15
INFO  - 2014-03-29 11:10:15 --> after retrieving the data from db.................
INFO  - 2014-03-29 11:10:15 --> looping.................
INFO  - 2014-03-29 11:10:15 --> looping.................
INFO  - 2014-03-29 11:10:15 --> looping.................
INFO  - 2014-03-29 11:10:15 --> looping.................
INFO  - 2014-03-29 11:10:15 --> looping.................
INFO  - 2014-03-29 11:10:15 --> looping.................
INFO  - 2014-03-29 11:10:15 --> looping.................
INFO  - 2014-03-29 11:10:15 --> looping.................
INFO  - 2014-03-29 11:10:15 --> looping.................
INFO  - 2014-03-29 11:10:15 --> looping.................
INFO  - 2014-03-29 11:10:15 --> looping.................
DEBUG - 2014-03-29 11:10:15 --> Final output sent to browser
DEBUG - 2014-03-29 11:10:15 --> Total execution time: 0.0520
DEBUG - 2014-03-29 11:10:16 --> Config Class Initialized
DEBUG - 2014-03-29 11:10:16 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:10:16 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:10:16 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:10:16 --> URI Class Initialized
DEBUG - 2014-03-29 11:10:16 --> Router Class Initialized
DEBUG - 2014-03-29 11:10:16 --> Output Class Initialized
DEBUG - 2014-03-29 11:10:16 --> Security Class Initialized
DEBUG - 2014-03-29 11:10:16 --> Input Class Initialized
DEBUG - 2014-03-29 11:10:16 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:10:16 --> Language Class Initialized
DEBUG - 2014-03-29 11:10:16 --> Loader Class Initialized
DEBUG - 2014-03-29 11:10:16 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:10:16 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:10:16 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:10:16 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:10:16 --> Session Class Initialized
DEBUG - 2014-03-29 11:10:16 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:10:16 --> Session routines successfully run
DEBUG - 2014-03-29 11:10:16 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:10:16 --> Controller Class Initialized
DEBUG - 2014-03-29 11:10:16 --> Model Class Initialized
DEBUG - 2014-03-29 11:10:16 --> Model Class Initialized
DEBUG - 2014-03-29 11:10:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:10:16 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:10:16 --> after session initialization................
INFO  - 2014-03-29 11:10:16 --> inside the auto suggest page.................
INFO  - 2014-03-29 11:10:16 --> after the list array.................
INFO  - 2014-03-29 11:10:16 --> Ajax retrieval ::::::::::===>SELECT d.id_drug, d.drug_name, group_concat(bn.name, ':', bn.id_brandname) as drug_brandname
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dc`.`brandname_id`
WHERE `d`.`drug_name` like '%ac%' and d.id_drug <> 1
GROUP BY `id_drug`, `id_drug`
ORDER BY `d`.`drug_name`
LIMIT 15
INFO  - 2014-03-29 11:10:16 --> after retrieving the data from db.................
INFO  - 2014-03-29 11:10:16 --> looping.................
INFO  - 2014-03-29 11:10:16 --> looping.................
DEBUG - 2014-03-29 11:10:16 --> Final output sent to browser
DEBUG - 2014-03-29 11:10:16 --> Total execution time: 0.0490
DEBUG - 2014-03-29 11:10:42 --> Config Class Initialized
DEBUG - 2014-03-29 11:10:42 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:10:42 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:10:42 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:10:42 --> URI Class Initialized
DEBUG - 2014-03-29 11:10:42 --> Router Class Initialized
DEBUG - 2014-03-29 11:10:42 --> Output Class Initialized
DEBUG - 2014-03-29 11:10:42 --> Security Class Initialized
DEBUG - 2014-03-29 11:10:42 --> Input Class Initialized
DEBUG - 2014-03-29 11:10:42 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:10:42 --> Language Class Initialized
DEBUG - 2014-03-29 11:10:42 --> Loader Class Initialized
DEBUG - 2014-03-29 11:10:42 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:10:42 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:10:42 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:10:42 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:10:42 --> Session Class Initialized
DEBUG - 2014-03-29 11:10:42 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:10:42 --> Session routines successfully run
DEBUG - 2014-03-29 11:10:42 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:10:42 --> Controller Class Initialized
DEBUG - 2014-03-29 11:10:42 --> Model Class Initialized
DEBUG - 2014-03-29 11:10:42 --> Model Class Initialized
DEBUG - 2014-03-29 11:10:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:10:42 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:10:42 --> after session initialization................
INFO  - 2014-03-29 11:10:42 --> the form message==>
INFO  - 2014-03-29 11:10:42 --> The session id is ========>8bcfdc7d302cf7534984b5069c35b802 and the member id is =======>
INFO  - 2014-03-29 11:10:42 --> after the retrieving session list.................//////////
INFO  - 2014-03-29 11:10:42 --> The session id is ========>8bcfdc7d302cf7534984b5069c35b802 and the member id is =======>
DEBUG - 2014-03-29 11:10:42 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-03-29 11:10:42 --> Final output sent to browser
DEBUG - 2014-03-29 11:10:42 --> Total execution time: 0.0500
DEBUG - 2014-03-29 11:10:47 --> Config Class Initialized
DEBUG - 2014-03-29 11:10:47 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:10:47 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:10:47 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:10:47 --> URI Class Initialized
DEBUG - 2014-03-29 11:10:47 --> Router Class Initialized
DEBUG - 2014-03-29 11:10:47 --> Output Class Initialized
DEBUG - 2014-03-29 11:10:47 --> Security Class Initialized
DEBUG - 2014-03-29 11:10:47 --> Input Class Initialized
DEBUG - 2014-03-29 11:10:47 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:10:47 --> Language Class Initialized
DEBUG - 2014-03-29 11:10:47 --> Loader Class Initialized
DEBUG - 2014-03-29 11:10:47 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:10:47 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:10:47 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:10:47 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:10:47 --> Session Class Initialized
DEBUG - 2014-03-29 11:10:47 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:10:47 --> Session routines successfully run
DEBUG - 2014-03-29 11:10:47 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:10:47 --> Controller Class Initialized
DEBUG - 2014-03-29 11:10:47 --> Model Class Initialized
DEBUG - 2014-03-29 11:10:47 --> Model Class Initialized
DEBUG - 2014-03-29 11:10:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:10:47 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:10:47 --> after session initialization................
INFO  - 2014-03-29 11:10:47 --> inside rays login auth.............
DEBUG - 2014-03-29 11:10:47 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2014-03-29 11:10:47 --> XSS Filtering completed
DEBUG - 2014-03-29 11:10:47 --> XSS Filtering completed
INFO  - 2014-03-29 11:10:47 --> login details ::::::::::===>SELECT `ld`.*
FROM (`logindetails` ld)
WHERE lower(ld.username) =  'princeyekaso@gmail.com'
INFO  - 2014-03-29 11:10:47 --> inside rays login auth.............sys_admin/user_authorization/redirecttosignin
DEBUG - 2014-03-29 11:10:47 --> Config Class Initialized
DEBUG - 2014-03-29 11:10:47 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:10:47 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:10:47 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:10:47 --> URI Class Initialized
DEBUG - 2014-03-29 11:10:47 --> Router Class Initialized
DEBUG - 2014-03-29 11:10:47 --> Output Class Initialized
DEBUG - 2014-03-29 11:10:47 --> Security Class Initialized
DEBUG - 2014-03-29 11:10:47 --> Input Class Initialized
DEBUG - 2014-03-29 11:10:47 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:10:47 --> Language Class Initialized
DEBUG - 2014-03-29 11:10:47 --> Loader Class Initialized
DEBUG - 2014-03-29 11:10:47 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:10:47 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:10:47 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:10:47 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:10:47 --> Session Class Initialized
DEBUG - 2014-03-29 11:10:47 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:10:47 --> Session routines successfully run
DEBUG - 2014-03-29 11:10:47 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:10:47 --> Controller Class Initialized
DEBUG - 2014-03-29 11:10:47 --> Model Class Initialized
DEBUG - 2014-03-29 11:10:47 --> Model Class Initialized
DEBUG - 2014-03-29 11:10:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:10:47 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:10:47 --> after session initialization................
INFO  - 2014-03-29 11:10:47 --> the form message==>
INFO  - 2014-03-29 11:10:47 --> The session id is ========>8bcfdc7d302cf7534984b5069c35b802 and the member id is =======>
INFO  - 2014-03-29 11:10:47 --> after the retrieving session list.................//////////
INFO  - 2014-03-29 11:10:47 --> The session id is ========>8bcfdc7d302cf7534984b5069c35b802 and the member id is =======>
DEBUG - 2014-03-29 11:10:47 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-03-29 11:10:47 --> Final output sent to browser
DEBUG - 2014-03-29 11:10:47 --> Total execution time: 0.0530
DEBUG - 2014-03-29 11:12:19 --> Config Class Initialized
DEBUG - 2014-03-29 11:12:19 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:12:19 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:12:19 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:12:19 --> URI Class Initialized
DEBUG - 2014-03-29 11:12:19 --> Router Class Initialized
DEBUG - 2014-03-29 11:12:19 --> Output Class Initialized
DEBUG - 2014-03-29 11:12:19 --> Security Class Initialized
DEBUG - 2014-03-29 11:12:19 --> Input Class Initialized
DEBUG - 2014-03-29 11:12:19 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:12:19 --> Language Class Initialized
DEBUG - 2014-03-29 11:12:19 --> Loader Class Initialized
DEBUG - 2014-03-29 11:12:19 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:12:19 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:12:19 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:12:19 --> Database Driver Class Initialized
ERROR - 2014-03-29 11:12:19 --> Severity: Notice  --> mysql_pconnect(): send of 5 bytes failed with errno=10053 An established connection was aborted by the software in your host machine.
 C:\xampp\htdocs\Pharmarays\pharmaray-system\database\drivers\mysql\mysql_driver.php 91
DEBUG - 2014-03-29 11:12:20 --> Session Class Initialized
DEBUG - 2014-03-29 11:12:20 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:12:20 --> Session routines successfully run
DEBUG - 2014-03-29 11:12:20 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:12:20 --> Controller Class Initialized
DEBUG - 2014-03-29 11:12:20 --> Model Class Initialized
DEBUG - 2014-03-29 11:12:20 --> Model Class Initialized
DEBUG - 2014-03-29 11:12:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:12:20 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:12:20 --> after session initialization................
INFO  - 2014-03-29 11:12:20 --> inside rays login auth.............
DEBUG - 2014-03-29 11:12:20 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2014-03-29 11:12:20 --> XSS Filtering completed
DEBUG - 2014-03-29 11:12:20 --> XSS Filtering completed
INFO  - 2014-03-29 11:12:20 --> login details ::::::::::===>SELECT `ld`.*
FROM (`logindetails` ld)
WHERE lower(ld.username) =  'yetunde@gmail.com'
INFO  - 2014-03-29 11:12:20 --> before getting the relation of member............35
INFO  - 2014-03-29 11:12:20 --> registration complete and username set on userpage.................Yetunde
INFO  - 2014-03-29 11:12:20 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  '35'
INFO  - 2014-03-29 11:12:20 --> after newsleters list has been clicked.................
INFO  - 2014-03-29 11:12:20 --> drugcategory ::::::::::===>SELECT `dc`.`id_drugcategory`, `dc`.`name`
FROM (`drugcategory` dc)
ORDER BY `dc`.`name`
INFO  - 2014-03-29 11:12:20 --> The session id is ========>8bcfdc7d302cf7534984b5069c35b802 and the member id is =======>35
DEBUG - 2014-03-29 11:12:20 --> File loaded: ../pharmaray-application/views/adminpage.php
DEBUG - 2014-03-29 11:12:20 --> Final output sent to browser
DEBUG - 2014-03-29 11:12:20 --> Total execution time: 1.1121
DEBUG - 2014-03-29 11:12:20 --> Config Class Initialized
DEBUG - 2014-03-29 11:12:20 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:12:20 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:12:20 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:12:20 --> URI Class Initialized
DEBUG - 2014-03-29 11:12:20 --> Router Class Initialized
ERROR - 2014-03-29 11:12:20 --> 404 Page Not Found --> css
DEBUG - 2014-03-29 11:12:31 --> Config Class Initialized
DEBUG - 2014-03-29 11:12:31 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:12:31 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:12:31 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:12:31 --> URI Class Initialized
DEBUG - 2014-03-29 11:12:31 --> Router Class Initialized
DEBUG - 2014-03-29 11:12:31 --> Output Class Initialized
DEBUG - 2014-03-29 11:12:31 --> Security Class Initialized
DEBUG - 2014-03-29 11:12:31 --> Input Class Initialized
DEBUG - 2014-03-29 11:12:31 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:12:31 --> Language Class Initialized
DEBUG - 2014-03-29 11:12:31 --> Loader Class Initialized
DEBUG - 2014-03-29 11:12:31 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:12:31 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:12:31 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:12:31 --> Database Driver Class Initialized
ERROR - 2014-03-29 11:12:31 --> Severity: Notice  --> mysql_pconnect(): send of 5 bytes failed with errno=10053 An established connection was aborted by the software in your host machine.
 C:\xampp\htdocs\Pharmarays\pharmaray-system\database\drivers\mysql\mysql_driver.php 91
DEBUG - 2014-03-29 11:12:33 --> Session Class Initialized
DEBUG - 2014-03-29 11:12:33 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:12:33 --> Session routines successfully run
DEBUG - 2014-03-29 11:12:33 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:12:33 --> Controller Class Initialized
DEBUG - 2014-03-29 11:12:33 --> Model Class Initialized
DEBUG - 2014-03-29 11:12:33 --> Model Class Initialized
DEBUG - 2014-03-29 11:12:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:12:33 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:12:33 --> after session initialization................
INFO  - 2014-03-29 11:12:33 --> after brands list has been clicked.................
INFO  - 2014-03-29 11:12:33 --> brand name ::::::::::===>SELECT `bn`.`id_brandname`, `bn`.`name`
FROM (`brandname` bn)
ORDER BY `bn`.`name`
INFO  - 2014-03-29 11:12:33 --> The session id is ========>8bcfdc7d302cf7534984b5069c35b802 and the member id is =======>35
DEBUG - 2014-03-29 11:12:33 --> File loaded: ../pharmaray-application/views/adminpagebrands.php
DEBUG - 2014-03-29 11:12:33 --> Final output sent to browser
DEBUG - 2014-03-29 11:12:33 --> Total execution time: 1.0591
DEBUG - 2014-03-29 11:12:33 --> Config Class Initialized
DEBUG - 2014-03-29 11:12:33 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:12:33 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:12:33 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:12:33 --> URI Class Initialized
DEBUG - 2014-03-29 11:12:33 --> Router Class Initialized
ERROR - 2014-03-29 11:12:33 --> 404 Page Not Found --> css
DEBUG - 2014-03-29 11:12:41 --> Config Class Initialized
DEBUG - 2014-03-29 11:12:41 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:12:41 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:12:41 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:12:41 --> URI Class Initialized
DEBUG - 2014-03-29 11:12:41 --> Router Class Initialized
DEBUG - 2014-03-29 11:12:41 --> Output Class Initialized
DEBUG - 2014-03-29 11:12:41 --> Security Class Initialized
DEBUG - 2014-03-29 11:12:41 --> Input Class Initialized
DEBUG - 2014-03-29 11:12:41 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:12:41 --> Language Class Initialized
DEBUG - 2014-03-29 11:12:41 --> Loader Class Initialized
DEBUG - 2014-03-29 11:12:41 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:12:41 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:12:41 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:12:41 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:12:41 --> Session Class Initialized
DEBUG - 2014-03-29 11:12:41 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:12:41 --> Session routines successfully run
DEBUG - 2014-03-29 11:12:41 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:12:41 --> Controller Class Initialized
DEBUG - 2014-03-29 11:12:41 --> Model Class Initialized
DEBUG - 2014-03-29 11:12:41 --> Model Class Initialized
DEBUG - 2014-03-29 11:12:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:12:41 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:12:41 --> after session initialization................
INFO  - 2014-03-29 11:12:41 --> after brandname list has been clicked.................
INFO  - 2014-03-29 11:12:41 --> The session id is ========>8bcfdc7d302cf7534984b5069c35b802 and the member id is =======>35
DEBUG - 2014-03-29 11:12:41 --> File loaded: ../pharmaray-application/views/adminpagebrandname.php
DEBUG - 2014-03-29 11:12:41 --> Final output sent to browser
DEBUG - 2014-03-29 11:12:41 --> Total execution time: 0.0430
DEBUG - 2014-03-29 11:12:41 --> Config Class Initialized
DEBUG - 2014-03-29 11:12:41 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:12:41 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:12:41 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:12:41 --> URI Class Initialized
DEBUG - 2014-03-29 11:12:41 --> Router Class Initialized
ERROR - 2014-03-29 11:12:41 --> 404 Page Not Found --> css
DEBUG - 2014-03-29 11:12:53 --> Config Class Initialized
DEBUG - 2014-03-29 11:12:53 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:12:53 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:12:53 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:12:53 --> URI Class Initialized
DEBUG - 2014-03-29 11:12:53 --> Router Class Initialized
DEBUG - 2014-03-29 11:12:53 --> Output Class Initialized
DEBUG - 2014-03-29 11:12:53 --> Security Class Initialized
DEBUG - 2014-03-29 11:12:53 --> Input Class Initialized
DEBUG - 2014-03-29 11:12:53 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:12:53 --> Language Class Initialized
DEBUG - 2014-03-29 11:12:53 --> Loader Class Initialized
DEBUG - 2014-03-29 11:12:53 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:12:53 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:12:53 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:12:53 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:12:53 --> Session Class Initialized
DEBUG - 2014-03-29 11:12:53 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:12:53 --> Session routines successfully run
DEBUG - 2014-03-29 11:12:53 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:12:53 --> Controller Class Initialized
DEBUG - 2014-03-29 11:12:53 --> Model Class Initialized
DEBUG - 2014-03-29 11:12:53 --> Model Class Initialized
DEBUG - 2014-03-29 11:12:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:12:53 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:12:53 --> after session initialization................
INFO  - 2014-03-29 11:12:53 --> Inside create brand name
INFO  - 2014-03-29 11:12:53 --> before inserting into brand name.................
INFO  - 2014-03-29 11:12:53 --> after inserting into brand name.................9
INFO  - 2014-03-29 11:12:53 --> INSERT INTO `brandname` (`name`, `description`) VALUES ('Zenol', 'A subsidiary of Emzor')
INFO  - 2014-03-29 11:12:53 --> After creating brand name
DEBUG - 2014-03-29 11:12:53 --> Final output sent to browser
DEBUG - 2014-03-29 11:12:53 --> Total execution time: 0.0930
DEBUG - 2014-03-29 11:15:22 --> Config Class Initialized
DEBUG - 2014-03-29 11:15:22 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:15:22 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:15:22 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:15:22 --> URI Class Initialized
DEBUG - 2014-03-29 11:15:22 --> Router Class Initialized
DEBUG - 2014-03-29 11:15:22 --> Output Class Initialized
DEBUG - 2014-03-29 11:15:22 --> Security Class Initialized
DEBUG - 2014-03-29 11:15:22 --> Input Class Initialized
DEBUG - 2014-03-29 11:15:22 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:15:22 --> Language Class Initialized
DEBUG - 2014-03-29 11:15:22 --> Loader Class Initialized
DEBUG - 2014-03-29 11:15:22 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:15:22 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:15:22 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:15:22 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:15:22 --> Session Class Initialized
DEBUG - 2014-03-29 11:15:22 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:15:22 --> Session routines successfully run
DEBUG - 2014-03-29 11:15:22 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:15:22 --> Controller Class Initialized
DEBUG - 2014-03-29 11:15:22 --> Model Class Initialized
DEBUG - 2014-03-29 11:15:22 --> Model Class Initialized
DEBUG - 2014-03-29 11:15:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:15:22 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:15:22 --> after session initialization................
DEBUG - 2014-03-29 11:15:22 --> Config Class Initialized
DEBUG - 2014-03-29 11:15:22 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:15:22 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:15:22 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:15:22 --> URI Class Initialized
DEBUG - 2014-03-29 11:15:22 --> Router Class Initialized
DEBUG - 2014-03-29 11:15:22 --> No URI present. Default controller set.
DEBUG - 2014-03-29 11:15:22 --> Output Class Initialized
DEBUG - 2014-03-29 11:15:22 --> Security Class Initialized
DEBUG - 2014-03-29 11:15:22 --> Input Class Initialized
DEBUG - 2014-03-29 11:15:22 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:15:22 --> Language Class Initialized
DEBUG - 2014-03-29 11:15:22 --> Loader Class Initialized
DEBUG - 2014-03-29 11:15:22 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:15:22 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:15:22 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:15:22 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:15:22 --> Session Class Initialized
DEBUG - 2014-03-29 11:15:22 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:15:22 --> A session cookie was not found.
DEBUG - 2014-03-29 11:15:22 --> Session routines successfully run
DEBUG - 2014-03-29 11:15:22 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:15:22 --> Controller Class Initialized
DEBUG - 2014-03-29 11:15:22 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2014-03-29 11:15:22 --> Final output sent to browser
DEBUG - 2014-03-29 11:15:22 --> Total execution time: 0.0360
DEBUG - 2014-03-29 11:15:22 --> Config Class Initialized
DEBUG - 2014-03-29 11:15:22 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:15:22 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:15:22 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:15:22 --> URI Class Initialized
DEBUG - 2014-03-29 11:15:22 --> Router Class Initialized
DEBUG - 2014-03-29 11:15:22 --> Output Class Initialized
DEBUG - 2014-03-29 11:15:22 --> Security Class Initialized
DEBUG - 2014-03-29 11:15:22 --> Input Class Initialized
DEBUG - 2014-03-29 11:15:22 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:15:22 --> Language Class Initialized
DEBUG - 2014-03-29 11:15:22 --> Loader Class Initialized
DEBUG - 2014-03-29 11:15:22 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:15:22 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:15:22 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:15:22 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:15:22 --> Session Class Initialized
DEBUG - 2014-03-29 11:15:22 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:15:22 --> Session routines successfully run
DEBUG - 2014-03-29 11:15:22 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:15:22 --> Controller Class Initialized
DEBUG - 2014-03-29 11:15:22 --> Model Class Initialized
DEBUG - 2014-03-29 11:15:22 --> Model Class Initialized
DEBUG - 2014-03-29 11:15:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:15:22 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:15:22 --> after session initialization................
INFO  - 2014-03-29 11:15:22 --> after rays has been clicked.................
INFO  - 2014-03-29 11:15:22 --> last article id is 0
INFO  - 2014-03-29 11:15:22 --> The session id is ========>a42d606beaadba509cd15ce8c6a4a662 and the member id is =======>
INFO  - 2014-03-29 11:15:22 --> The session id is ========>a42d606beaadba509cd15ce8c6a4a662 and the member id is =======>
INFO  - 2014-03-29 11:15:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:15:22 --> 0 the guest only data>>>>>
INFO  - 2014-03-29 11:15:22 --> 0 the guest only data>> AFTER >>>#31
INFO  - 2014-03-29 11:15:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:15:22 --> 0 the guest only data>>>>>#31
INFO  - 2014-03-29 11:15:22 --> 0 the guest only data>> AFTER >>>#16
INFO  - 2014-03-29 11:15:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:15:22 --> 1 the guest only data>>>>>#16
INFO  - 2014-03-29 11:15:22 --> 1 the guest only data>> AFTER >>>#16
INFO  - 2014-03-29 11:15:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:15:22 --> 0 the guest only data>>>>>#16
INFO  - 2014-03-29 11:15:22 --> 0 the guest only data>> AFTER >>>#14
INFO  - 2014-03-29 11:15:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:15:22 --> 1 the guest only data>>>>>#14
INFO  - 2014-03-29 11:15:22 --> 1 the guest only data>> AFTER >>>#14
INFO  - 2014-03-29 11:15:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:15:22 --> 0 the guest only data>>>>>#14
INFO  - 2014-03-29 11:15:22 --> 0 the guest only data>> AFTER >>>#12
INFO  - 2014-03-29 11:15:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:15:22 --> 1 the guest only data>>>>>#12
INFO  - 2014-03-29 11:15:22 --> 1 the guest only data>> AFTER >>>#12
INFO  - 2014-03-29 11:15:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:15:22 --> 0 the guest only data>>>>>#12
INFO  - 2014-03-29 11:15:22 --> 0 the guest only data>> AFTER >>>#10
INFO  - 2014-03-29 11:15:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:15:22 --> 0 the guest only data>>>>>#10
INFO  - 2014-03-29 11:15:22 --> 0 the guest only data>> AFTER >>>#9
INFO  - 2014-03-29 11:15:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:15:22 --> 1 the guest only data>>>>>#9
INFO  - 2014-03-29 11:15:22 --> 1 the guest only data>> AFTER >>>#9
INFO  - 2014-03-29 11:15:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:15:22 --> 0 the guest only data>>>>>#9
INFO  - 2014-03-29 11:15:22 --> 0 the guest only data>> AFTER >>>#7
INFO  - 2014-03-29 11:15:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:15:22 --> 1 the guest only data>>>>>#7
INFO  - 2014-03-29 11:15:22 --> 1 the guest only data>> AFTER >>>#7
INFO  - 2014-03-29 11:15:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:15:22 --> 0 the guest only data>>>>>#7
INFO  - 2014-03-29 11:15:22 --> 0 the guest only data>> AFTER >>>#5
INFO  - 2014-03-29 11:15:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:15:22 --> 0 the guest only data>>>>>#5
INFO  - 2014-03-29 11:15:22 --> 0 the guest only data>> AFTER >>>#4
INFO  - 2014-03-29 11:15:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:15:22 --> 1 the guest only data>>>>>#4
INFO  - 2014-03-29 11:15:22 --> 1 the guest only data>> AFTER >>>#4
INFO  - 2014-03-29 11:15:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:15:22 --> 1 the guest only data>>>>>#4
INFO  - 2014-03-29 11:15:22 --> 1 the guest only data>> AFTER >>>#4
INFO  - 2014-03-29 11:15:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:15:22 --> 1 the guest only data>>>>>#4
INFO  - 2014-03-29 11:15:22 --> 1 the guest only data>> AFTER >>>#4
DEBUG - 2014-03-29 11:15:22 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2014-03-29 11:15:22 --> Final output sent to browser
DEBUG - 2014-03-29 11:15:22 --> Total execution time: 0.0640
DEBUG - 2014-03-29 11:15:27 --> Config Class Initialized
DEBUG - 2014-03-29 11:15:27 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:15:27 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:15:27 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:15:27 --> URI Class Initialized
DEBUG - 2014-03-29 11:15:27 --> Router Class Initialized
DEBUG - 2014-03-29 11:15:27 --> Output Class Initialized
DEBUG - 2014-03-29 11:15:27 --> Security Class Initialized
DEBUG - 2014-03-29 11:15:27 --> Input Class Initialized
DEBUG - 2014-03-29 11:15:27 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:15:27 --> Language Class Initialized
DEBUG - 2014-03-29 11:15:27 --> Loader Class Initialized
DEBUG - 2014-03-29 11:15:27 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:15:27 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:15:27 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:15:27 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:15:27 --> Session Class Initialized
DEBUG - 2014-03-29 11:15:27 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:15:27 --> Session routines successfully run
DEBUG - 2014-03-29 11:15:27 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:15:27 --> Controller Class Initialized
DEBUG - 2014-03-29 11:15:27 --> Model Class Initialized
DEBUG - 2014-03-29 11:15:27 --> Model Class Initialized
DEBUG - 2014-03-29 11:15:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:15:27 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:15:27 --> after session initialization................
INFO  - 2014-03-29 11:15:27 --> last article id is 1
DEBUG - 2014-03-29 11:15:27 --> Final output sent to browser
DEBUG - 2014-03-29 11:15:27 --> Total execution time: 0.0470
DEBUG - 2014-03-29 11:15:30 --> Config Class Initialized
DEBUG - 2014-03-29 11:15:30 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:15:30 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:15:30 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:15:30 --> URI Class Initialized
DEBUG - 2014-03-29 11:15:30 --> Router Class Initialized
DEBUG - 2014-03-29 11:15:30 --> Output Class Initialized
DEBUG - 2014-03-29 11:15:30 --> Security Class Initialized
DEBUG - 2014-03-29 11:15:30 --> Input Class Initialized
DEBUG - 2014-03-29 11:15:30 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:15:30 --> Language Class Initialized
DEBUG - 2014-03-29 11:15:30 --> Loader Class Initialized
DEBUG - 2014-03-29 11:15:30 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:15:30 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:15:30 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:15:30 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:15:30 --> Session Class Initialized
DEBUG - 2014-03-29 11:15:30 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:15:30 --> Session routines successfully run
DEBUG - 2014-03-29 11:15:30 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:15:30 --> Controller Class Initialized
DEBUG - 2014-03-29 11:15:30 --> Model Class Initialized
DEBUG - 2014-03-29 11:15:30 --> Model Class Initialized
DEBUG - 2014-03-29 11:15:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:15:30 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:15:30 --> after session initialization................
INFO  - 2014-03-29 11:15:30 --> after community pharmacy  has been clicked.................
INFO  - 2014-03-29 11:15:30 --> inside retrieving pharmacy beyond id 0
INFO  - 2014-03-29 11:15:30 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2014-03-29 11:15:30 --> inside retrieving locations 
INFO  - 2014-03-29 11:15:30 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-03-29 11:15:30 --> The session id is ========>a42d606beaadba509cd15ce8c6a4a662 and the member id is =======>
DEBUG - 2014-03-29 11:15:30 --> File loaded: ../pharmaray-application/views/guestcommunitypharmacy.php
DEBUG - 2014-03-29 11:15:30 --> Final output sent to browser
DEBUG - 2014-03-29 11:15:30 --> Total execution time: 0.1970
DEBUG - 2014-03-29 11:15:33 --> Config Class Initialized
DEBUG - 2014-03-29 11:15:33 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:15:33 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:15:33 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:15:33 --> URI Class Initialized
DEBUG - 2014-03-29 11:15:33 --> Router Class Initialized
DEBUG - 2014-03-29 11:15:33 --> Output Class Initialized
DEBUG - 2014-03-29 11:15:33 --> Security Class Initialized
DEBUG - 2014-03-29 11:15:33 --> Input Class Initialized
DEBUG - 2014-03-29 11:15:33 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:15:33 --> Language Class Initialized
DEBUG - 2014-03-29 11:15:33 --> Loader Class Initialized
DEBUG - 2014-03-29 11:15:33 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:15:33 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:15:33 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:15:33 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:15:33 --> Session Class Initialized
DEBUG - 2014-03-29 11:15:33 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:15:33 --> Session routines successfully run
DEBUG - 2014-03-29 11:15:33 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:15:33 --> Controller Class Initialized
DEBUG - 2014-03-29 11:15:33 --> Model Class Initialized
DEBUG - 2014-03-29 11:15:33 --> Model Class Initialized
DEBUG - 2014-03-29 11:15:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:15:33 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:15:33 --> after session initialization................
INFO  - 2014-03-29 11:15:33 --> last pharmacy id is 20
INFO  - 2014-03-29 11:15:34 --> Ajax retrieval ::::::::::===>SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` > 20
ORDER BY `p`.`id_pharmacy`, `p`.`name` desc
LIMIT 20
DEBUG - 2014-03-29 11:15:34 --> Final output sent to browser
DEBUG - 2014-03-29 11:15:34 --> Total execution time: 0.0620
DEBUG - 2014-03-29 11:15:48 --> Config Class Initialized
DEBUG - 2014-03-29 11:15:48 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:15:48 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:15:48 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:15:48 --> URI Class Initialized
DEBUG - 2014-03-29 11:15:48 --> Router Class Initialized
DEBUG - 2014-03-29 11:15:48 --> Output Class Initialized
DEBUG - 2014-03-29 11:15:48 --> Security Class Initialized
DEBUG - 2014-03-29 11:15:48 --> Input Class Initialized
DEBUG - 2014-03-29 11:15:48 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:15:48 --> Language Class Initialized
DEBUG - 2014-03-29 11:15:48 --> Loader Class Initialized
DEBUG - 2014-03-29 11:15:48 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:15:48 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:15:48 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:15:48 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:15:48 --> Session Class Initialized
DEBUG - 2014-03-29 11:15:48 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:15:48 --> Session routines successfully run
DEBUG - 2014-03-29 11:15:48 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:15:48 --> Controller Class Initialized
DEBUG - 2014-03-29 11:15:48 --> Model Class Initialized
DEBUG - 2014-03-29 11:15:48 --> Model Class Initialized
DEBUG - 2014-03-29 11:15:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:15:48 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:15:48 --> after session initialization................
INFO  - 2014-03-29 11:15:48 --> last pharmacy id is 40
INFO  - 2014-03-29 11:15:48 --> Ajax retrieval ::::::::::===>SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` > 40
ORDER BY `p`.`id_pharmacy`, `p`.`name` desc
LIMIT 20
DEBUG - 2014-03-29 11:15:48 --> Final output sent to browser
DEBUG - 2014-03-29 11:15:48 --> Total execution time: 0.0430
DEBUG - 2014-03-29 11:16:01 --> Config Class Initialized
DEBUG - 2014-03-29 11:16:01 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:16:01 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:16:01 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:16:01 --> URI Class Initialized
DEBUG - 2014-03-29 11:16:01 --> Router Class Initialized
DEBUG - 2014-03-29 11:16:01 --> Output Class Initialized
DEBUG - 2014-03-29 11:16:01 --> Security Class Initialized
DEBUG - 2014-03-29 11:16:01 --> Input Class Initialized
DEBUG - 2014-03-29 11:16:01 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:16:01 --> Language Class Initialized
DEBUG - 2014-03-29 11:16:01 --> Loader Class Initialized
DEBUG - 2014-03-29 11:16:01 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:16:01 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:16:01 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:16:01 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:16:01 --> Session Class Initialized
DEBUG - 2014-03-29 11:16:01 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:16:01 --> Session routines successfully run
DEBUG - 2014-03-29 11:16:01 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:16:01 --> Controller Class Initialized
DEBUG - 2014-03-29 11:16:01 --> Model Class Initialized
DEBUG - 2014-03-29 11:16:01 --> Model Class Initialized
DEBUG - 2014-03-29 11:16:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:16:01 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:16:01 --> after session initialization................
INFO  - 2014-03-29 11:16:01 --> after community pharmacy  has been clicked.................
INFO  - 2014-03-29 11:16:01 --> inside retrieving pharmacy beyond id 0
INFO  - 2014-03-29 11:16:01 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2014-03-29 11:16:01 --> inside retrieving locations 
INFO  - 2014-03-29 11:16:01 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-03-29 11:16:01 --> The session id is ========>a42d606beaadba509cd15ce8c6a4a662 and the member id is =======>
DEBUG - 2014-03-29 11:16:01 --> File loaded: ../pharmaray-application/views/guestcommunitypharmacy.php
DEBUG - 2014-03-29 11:16:01 --> Final output sent to browser
DEBUG - 2014-03-29 11:16:01 --> Total execution time: 0.1510
DEBUG - 2014-03-29 11:18:23 --> Config Class Initialized
DEBUG - 2014-03-29 11:18:23 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:18:23 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:18:23 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:18:23 --> URI Class Initialized
DEBUG - 2014-03-29 11:18:23 --> Router Class Initialized
DEBUG - 2014-03-29 11:18:23 --> Output Class Initialized
DEBUG - 2014-03-29 11:18:23 --> Security Class Initialized
DEBUG - 2014-03-29 11:18:23 --> Input Class Initialized
DEBUG - 2014-03-29 11:18:23 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:18:23 --> Language Class Initialized
DEBUG - 2014-03-29 11:18:23 --> Loader Class Initialized
DEBUG - 2014-03-29 11:18:23 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:18:23 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:18:23 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:18:23 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:18:23 --> Session Class Initialized
DEBUG - 2014-03-29 11:18:23 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:18:23 --> Session routines successfully run
DEBUG - 2014-03-29 11:18:23 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:18:23 --> Controller Class Initialized
DEBUG - 2014-03-29 11:18:23 --> Model Class Initialized
DEBUG - 2014-03-29 11:18:23 --> Model Class Initialized
DEBUG - 2014-03-29 11:18:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:18:23 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:18:23 --> after session initialization................
INFO  - 2014-03-29 11:18:23 --> after community pharmacy  has been clicked.................
INFO  - 2014-03-29 11:18:23 --> inside retrieving pharmacy beyond id 0
INFO  - 2014-03-29 11:18:23 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2014-03-29 11:18:23 --> inside retrieving locations 
INFO  - 2014-03-29 11:18:23 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-03-29 11:18:23 --> The session id is ========>a42d606beaadba509cd15ce8c6a4a662 and the member id is =======>
DEBUG - 2014-03-29 11:18:23 --> File loaded: ../pharmaray-application/views/guestcommunitypharmacy.php
DEBUG - 2014-03-29 11:18:23 --> Final output sent to browser
DEBUG - 2014-03-29 11:18:23 --> Total execution time: 0.1540
DEBUG - 2014-03-29 11:18:24 --> Config Class Initialized
DEBUG - 2014-03-29 11:18:24 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:18:24 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:18:24 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:18:24 --> URI Class Initialized
DEBUG - 2014-03-29 11:18:24 --> Router Class Initialized
DEBUG - 2014-03-29 11:18:24 --> Output Class Initialized
DEBUG - 2014-03-29 11:18:24 --> Security Class Initialized
DEBUG - 2014-03-29 11:18:24 --> Input Class Initialized
DEBUG - 2014-03-29 11:18:24 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:18:24 --> Language Class Initialized
DEBUG - 2014-03-29 11:18:24 --> Loader Class Initialized
DEBUG - 2014-03-29 11:18:24 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:18:24 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:18:24 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:18:24 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:18:24 --> Session Class Initialized
DEBUG - 2014-03-29 11:18:24 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:18:24 --> Session routines successfully run
DEBUG - 2014-03-29 11:18:24 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:18:24 --> Controller Class Initialized
DEBUG - 2014-03-29 11:18:24 --> Model Class Initialized
DEBUG - 2014-03-29 11:18:24 --> Model Class Initialized
DEBUG - 2014-03-29 11:18:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:18:24 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:18:24 --> after session initialization................
INFO  - 2014-03-29 11:18:24 --> after community pharmacy  has been clicked.................
INFO  - 2014-03-29 11:18:24 --> inside retrieving pharmacy beyond id 0
INFO  - 2014-03-29 11:18:24 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2014-03-29 11:18:24 --> inside retrieving locations 
INFO  - 2014-03-29 11:18:24 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-03-29 11:18:24 --> The session id is ========>a42d606beaadba509cd15ce8c6a4a662 and the member id is =======>
DEBUG - 2014-03-29 11:18:24 --> File loaded: ../pharmaray-application/views/guestcommunitypharmacy.php
DEBUG - 2014-03-29 11:18:24 --> Final output sent to browser
DEBUG - 2014-03-29 11:18:24 --> Total execution time: 0.1480
DEBUG - 2014-03-29 11:18:27 --> Config Class Initialized
DEBUG - 2014-03-29 11:18:27 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:18:27 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:18:27 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:18:27 --> URI Class Initialized
DEBUG - 2014-03-29 11:18:27 --> Router Class Initialized
DEBUG - 2014-03-29 11:18:27 --> Output Class Initialized
DEBUG - 2014-03-29 11:18:27 --> Security Class Initialized
DEBUG - 2014-03-29 11:18:27 --> Input Class Initialized
DEBUG - 2014-03-29 11:18:27 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:18:27 --> Language Class Initialized
DEBUG - 2014-03-29 11:18:27 --> Loader Class Initialized
DEBUG - 2014-03-29 11:18:27 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:18:27 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:18:27 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:18:27 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:18:27 --> Session Class Initialized
DEBUG - 2014-03-29 11:18:27 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:18:27 --> Session routines successfully run
DEBUG - 2014-03-29 11:18:27 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:18:27 --> Controller Class Initialized
DEBUG - 2014-03-29 11:18:27 --> Model Class Initialized
DEBUG - 2014-03-29 11:18:27 --> Model Class Initialized
DEBUG - 2014-03-29 11:18:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:18:27 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:18:27 --> after session initialization................
INFO  - 2014-03-29 11:18:27 --> last pharmacy id is 20
INFO  - 2014-03-29 11:18:27 --> Ajax retrieval ::::::::::===>SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` > 20
ORDER BY `p`.`id_pharmacy`, `p`.`name` desc
LIMIT 20
DEBUG - 2014-03-29 11:18:27 --> Final output sent to browser
DEBUG - 2014-03-29 11:18:27 --> Total execution time: 0.0510
DEBUG - 2014-03-29 11:18:35 --> Config Class Initialized
DEBUG - 2014-03-29 11:18:35 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:18:35 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:18:35 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:18:35 --> URI Class Initialized
DEBUG - 2014-03-29 11:18:35 --> Router Class Initialized
DEBUG - 2014-03-29 11:18:35 --> Output Class Initialized
DEBUG - 2014-03-29 11:18:35 --> Security Class Initialized
DEBUG - 2014-03-29 11:18:35 --> Input Class Initialized
DEBUG - 2014-03-29 11:18:35 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:18:35 --> Language Class Initialized
DEBUG - 2014-03-29 11:18:35 --> Loader Class Initialized
DEBUG - 2014-03-29 11:18:35 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:18:35 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:18:35 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:18:35 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:18:35 --> Session Class Initialized
DEBUG - 2014-03-29 11:18:35 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:18:35 --> Session routines successfully run
DEBUG - 2014-03-29 11:18:35 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:18:35 --> Controller Class Initialized
DEBUG - 2014-03-29 11:18:35 --> Model Class Initialized
DEBUG - 2014-03-29 11:18:35 --> Model Class Initialized
DEBUG - 2014-03-29 11:18:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:18:35 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:18:35 --> after session initialization................
INFO  - 2014-03-29 11:18:35 --> last pharmacy id is 40
INFO  - 2014-03-29 11:18:35 --> Ajax retrieval ::::::::::===>SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` > 40
ORDER BY `p`.`id_pharmacy`, `p`.`name` desc
LIMIT 20
DEBUG - 2014-03-29 11:18:35 --> Final output sent to browser
DEBUG - 2014-03-29 11:18:35 --> Total execution time: 0.0470
DEBUG - 2014-03-29 11:18:43 --> Config Class Initialized
DEBUG - 2014-03-29 11:18:43 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:18:43 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:18:43 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:18:43 --> URI Class Initialized
DEBUG - 2014-03-29 11:18:43 --> Router Class Initialized
DEBUG - 2014-03-29 11:18:43 --> Output Class Initialized
DEBUG - 2014-03-29 11:18:43 --> Security Class Initialized
DEBUG - 2014-03-29 11:18:43 --> Input Class Initialized
DEBUG - 2014-03-29 11:18:43 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:18:43 --> Language Class Initialized
DEBUG - 2014-03-29 11:18:43 --> Loader Class Initialized
DEBUG - 2014-03-29 11:18:43 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:18:43 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:18:43 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:18:43 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:18:43 --> Session Class Initialized
DEBUG - 2014-03-29 11:18:43 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:18:43 --> Session routines successfully run
DEBUG - 2014-03-29 11:18:43 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:18:43 --> Controller Class Initialized
DEBUG - 2014-03-29 11:18:43 --> Model Class Initialized
DEBUG - 2014-03-29 11:18:43 --> Model Class Initialized
DEBUG - 2014-03-29 11:18:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:18:43 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:18:43 --> after session initialization................
INFO  - 2014-03-29 11:18:43 --> after community pharmacy  has been clicked.................
INFO  - 2014-03-29 11:18:43 --> inside retrieving pharmacy beyond id 0
INFO  - 2014-03-29 11:18:43 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2014-03-29 11:18:43 --> inside retrieving locations 
INFO  - 2014-03-29 11:18:43 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-03-29 11:18:43 --> The session id is ========>a42d606beaadba509cd15ce8c6a4a662 and the member id is =======>
DEBUG - 2014-03-29 11:18:43 --> File loaded: ../pharmaray-application/views/guestcommunitypharmacy.php
DEBUG - 2014-03-29 11:18:43 --> Final output sent to browser
DEBUG - 2014-03-29 11:18:43 --> Total execution time: 0.1500
DEBUG - 2014-03-29 11:18:44 --> Config Class Initialized
DEBUG - 2014-03-29 11:18:44 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:18:44 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:18:44 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:18:44 --> URI Class Initialized
DEBUG - 2014-03-29 11:18:44 --> Router Class Initialized
DEBUG - 2014-03-29 11:18:44 --> Output Class Initialized
DEBUG - 2014-03-29 11:18:44 --> Security Class Initialized
DEBUG - 2014-03-29 11:18:44 --> Input Class Initialized
DEBUG - 2014-03-29 11:18:44 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:18:44 --> Language Class Initialized
DEBUG - 2014-03-29 11:18:44 --> Loader Class Initialized
DEBUG - 2014-03-29 11:18:44 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:18:44 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:18:44 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:18:44 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:18:44 --> Session Class Initialized
DEBUG - 2014-03-29 11:18:44 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:18:44 --> Session routines successfully run
DEBUG - 2014-03-29 11:18:44 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:18:44 --> Controller Class Initialized
DEBUG - 2014-03-29 11:18:44 --> Model Class Initialized
DEBUG - 2014-03-29 11:18:44 --> Model Class Initialized
DEBUG - 2014-03-29 11:18:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:18:44 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:18:44 --> after session initialization................
INFO  - 2014-03-29 11:18:44 --> after community pharmacy  has been clicked.................
INFO  - 2014-03-29 11:18:44 --> inside retrieving pharmacy beyond id 0
INFO  - 2014-03-29 11:18:44 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2014-03-29 11:18:44 --> inside retrieving locations 
INFO  - 2014-03-29 11:18:44 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-03-29 11:18:45 --> The session id is ========>a42d606beaadba509cd15ce8c6a4a662 and the member id is =======>
DEBUG - 2014-03-29 11:18:45 --> File loaded: ../pharmaray-application/views/guestcommunitypharmacy.php
DEBUG - 2014-03-29 11:18:45 --> Final output sent to browser
DEBUG - 2014-03-29 11:18:45 --> Total execution time: 0.1530
DEBUG - 2014-03-29 11:18:49 --> Config Class Initialized
DEBUG - 2014-03-29 11:18:49 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:18:49 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:18:49 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:18:49 --> URI Class Initialized
DEBUG - 2014-03-29 11:18:49 --> Router Class Initialized
DEBUG - 2014-03-29 11:18:49 --> Output Class Initialized
DEBUG - 2014-03-29 11:18:49 --> Security Class Initialized
DEBUG - 2014-03-29 11:18:49 --> Input Class Initialized
DEBUG - 2014-03-29 11:18:49 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:18:49 --> Language Class Initialized
DEBUG - 2014-03-29 11:18:49 --> Loader Class Initialized
DEBUG - 2014-03-29 11:18:49 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:18:49 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:18:49 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:18:49 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:18:49 --> Session Class Initialized
DEBUG - 2014-03-29 11:18:49 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:18:49 --> Session routines successfully run
DEBUG - 2014-03-29 11:18:49 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:18:49 --> Controller Class Initialized
DEBUG - 2014-03-29 11:18:49 --> Model Class Initialized
DEBUG - 2014-03-29 11:18:49 --> Model Class Initialized
DEBUG - 2014-03-29 11:18:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:18:49 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:18:49 --> after session initialization................
INFO  - 2014-03-29 11:18:49 --> last pharmacy id is 20
INFO  - 2014-03-29 11:18:49 --> Ajax retrieval ::::::::::===>SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` > 20
ORDER BY `p`.`id_pharmacy`, `p`.`name` desc
LIMIT 100
DEBUG - 2014-03-29 11:18:49 --> Final output sent to browser
DEBUG - 2014-03-29 11:18:49 --> Total execution time: 0.0520
DEBUG - 2014-03-29 11:18:54 --> Config Class Initialized
DEBUG - 2014-03-29 11:18:54 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:18:54 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:18:54 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:18:54 --> URI Class Initialized
DEBUG - 2014-03-29 11:18:54 --> Router Class Initialized
DEBUG - 2014-03-29 11:18:54 --> Output Class Initialized
DEBUG - 2014-03-29 11:18:54 --> Security Class Initialized
DEBUG - 2014-03-29 11:18:54 --> Input Class Initialized
DEBUG - 2014-03-29 11:18:54 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:18:54 --> Language Class Initialized
DEBUG - 2014-03-29 11:18:54 --> Loader Class Initialized
DEBUG - 2014-03-29 11:18:54 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:18:54 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:18:54 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:18:54 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:18:54 --> Session Class Initialized
DEBUG - 2014-03-29 11:18:54 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:18:54 --> Session routines successfully run
DEBUG - 2014-03-29 11:18:54 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:18:54 --> Controller Class Initialized
DEBUG - 2014-03-29 11:18:54 --> Model Class Initialized
DEBUG - 2014-03-29 11:18:54 --> Model Class Initialized
DEBUG - 2014-03-29 11:18:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:18:54 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:18:54 --> after session initialization................
INFO  - 2014-03-29 11:18:54 --> last pharmacy id is 43
INFO  - 2014-03-29 11:18:54 --> Ajax retrieval ::::::::::===>SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` > 43
ORDER BY `p`.`id_pharmacy`, `p`.`name` desc
LIMIT 100
DEBUG - 2014-03-29 11:18:54 --> Final output sent to browser
DEBUG - 2014-03-29 11:18:54 --> Total execution time: 0.0530
DEBUG - 2014-03-29 11:19:39 --> Config Class Initialized
DEBUG - 2014-03-29 11:19:39 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:19:39 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:19:39 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:19:39 --> URI Class Initialized
DEBUG - 2014-03-29 11:19:39 --> Router Class Initialized
DEBUG - 2014-03-29 11:19:39 --> Output Class Initialized
DEBUG - 2014-03-29 11:19:39 --> Security Class Initialized
DEBUG - 2014-03-29 11:19:39 --> Input Class Initialized
DEBUG - 2014-03-29 11:19:39 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:19:39 --> Language Class Initialized
DEBUG - 2014-03-29 11:19:39 --> Loader Class Initialized
DEBUG - 2014-03-29 11:19:39 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:19:39 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:19:39 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:19:39 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:19:39 --> Session Class Initialized
DEBUG - 2014-03-29 11:19:39 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:19:39 --> Session routines successfully run
DEBUG - 2014-03-29 11:19:39 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:19:39 --> Controller Class Initialized
DEBUG - 2014-03-29 11:19:39 --> Model Class Initialized
DEBUG - 2014-03-29 11:19:39 --> Model Class Initialized
DEBUG - 2014-03-29 11:19:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:19:39 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:19:39 --> after session initialization................
INFO  - 2014-03-29 11:19:39 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  ''
INFO  - 2014-03-29 11:19:39 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-03-29 11:19:39 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2014-03-29 11:19:39 --> inside retrieving vacancy for member
INFO  - 2014-03-29 11:19:39 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2014-03-29 11:19:39 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-03-29 11:19:39 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2014-03-29 11:19:39 --> Drugs ::::::::::===>SELECT d.id_drug, d.drug_name, d.drug_description, group_concat(bn.name, ':', bn.id_brandname) as drug_company, group_concat(dcc.name) as drug_brandnames, dcc.id_drugcategory as category_id
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dcc`.`brandname_id`
WHERE `d`.`id_drug` =  '1'
GROUP BY `id_drug`
ORDER BY `d`.`drug_name`, `bn`.`id_brandname`
INFO  - 2014-03-29 11:19:39 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drugcategory_id` = `dc`.`id_drugcategory`
JOIN `drug` d ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2014-03-29 11:19:39 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2014-03-29 11:19:39 --> inside retrieving pharmacy for drug id is 1
INFO  - 2014-03-29 11:19:39 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2014-03-29 11:19:39 --> Related drugs ::::::::::===>SELECT d.drug_name
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcg`.`drugcategory_id` = `dcc`.`id_drugcategory`
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
WHERE `dcc`.`brandname_id` =  '0'
AND `dc`.`id_drugclass` =  '0'
INFO  - 2014-03-29 11:19:39 --> inside retrieve most searched drugs
INFO  - 2014-03-29 11:19:39 --> SELECT `d`.`id_drug` as id, `d`.`drug_name` as name, count(ds.id_drugsearch) as search_count
FROM (`drug_search` ds)
JOIN `drug` d ON `d`.`id_drug` = `ds`.`drug_id`
GROUP BY `d`.`id_drug`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-03-29 11:19:39 --> inside retrieve most searched pharmacy
INFO  - 2014-03-29 11:19:39 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-03-29 11:19:39 --> inside retrieve most searched article
INFO  - 2014-03-29 11:19:39 --> SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description, count(ats.article_id) as search_count
FROM (`article_search` ats)
JOIN `article` a ON `a`.`id_article` = `ats`.`article_id`
JOIN `news` n ON `a`.`newsid_news` = `n`.`id_news`
GROUP BY `a`.`id_article`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-03-29 11:19:39 --> The session id is ========>a42d606beaadba509cd15ce8c6a4a662 and the member id is =======>
INFO  - 2014-03-29 11:19:39 -->  column name inside view is 0 column Data is 491
INFO  - 2014-03-29 11:19:39 -->  column name inside view is 1 column Data is 618
INFO  - 2014-03-29 11:19:39 -->  column name inside view is 2 column Data is 1
INFO  - 2014-03-29 11:19:39 -->  column name inside view is 3 column Data is 515
INFO  - 2014-03-29 11:19:39 -->  column name inside view is 4 column Data is 488
INFO  - 2014-03-29 11:19:39 -->  column name inside view is 5 column Data is 509
INFO  - 2014-03-29 11:19:39 -->  column name inside view is 6 column Data is 487
INFO  - 2014-03-29 11:19:39 -->  column name inside view is 7 column Data is 489
INFO  - 2014-03-29 11:19:39 -->  column name inside view is 8 column Data is 516
INFO  - 2014-03-29 11:19:39 -->  column name inside view is 9 column Data is 641
INFO  - 2014-03-29 11:19:39 -->  column name inside view is 0 column Data is 5
INFO  - 2014-03-29 11:19:39 -->  column name inside view is 1 column Data is 2
INFO  - 2014-03-29 11:19:39 -->  column name inside view is 2 column Data is 3
INFO  - 2014-03-29 11:19:39 -->  column name inside view is 3 column Data is 1
INFO  - 2014-03-29 11:19:39 -->  column name inside view is 4 column Data is 18
INFO  - 2014-03-29 11:19:39 -->  column name inside view is 5 column Data is 15
INFO  - 2014-03-29 11:19:39 -->  column name inside view is 6 column Data is 14
INFO  - 2014-03-29 11:19:39 -->  column name inside view is 7 column Data is 6
INFO  - 2014-03-29 11:19:39 -->  column name inside view is 8 column Data is 43
INFO  - 2014-03-29 11:19:39 -->  column name inside view is 9 column Data is 9
INFO  - 2014-03-29 11:19:39 -->  column name inside view is 0 column Data is Male Doctor
INFO  - 2014-03-29 11:19:39 -->  column name inside view is 1 column Data is Ordinary User
DEBUG - 2014-03-29 11:19:39 --> File loaded: ../pharmaray-application/views/onlinepharmacy.php
DEBUG - 2014-03-29 11:19:39 --> Final output sent to browser
DEBUG - 2014-03-29 11:19:39 --> Total execution time: 0.0950
DEBUG - 2014-03-29 11:19:39 --> Config Class Initialized
DEBUG - 2014-03-29 11:19:39 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:19:39 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:19:39 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:19:39 --> URI Class Initialized
DEBUG - 2014-03-29 11:19:39 --> Router Class Initialized
ERROR - 2014-03-29 11:19:39 --> 404 Page Not Found --> css
DEBUG - 2014-03-29 11:19:41 --> Config Class Initialized
DEBUG - 2014-03-29 11:19:41 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:19:41 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:19:41 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:19:41 --> URI Class Initialized
DEBUG - 2014-03-29 11:19:41 --> Router Class Initialized
DEBUG - 2014-03-29 11:19:41 --> Output Class Initialized
DEBUG - 2014-03-29 11:19:41 --> Security Class Initialized
DEBUG - 2014-03-29 11:19:41 --> Input Class Initialized
DEBUG - 2014-03-29 11:19:41 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:19:41 --> Language Class Initialized
DEBUG - 2014-03-29 11:19:41 --> Loader Class Initialized
DEBUG - 2014-03-29 11:19:41 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:19:41 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:19:41 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:19:41 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:19:41 --> Session Class Initialized
DEBUG - 2014-03-29 11:19:41 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:19:41 --> Session routines successfully run
DEBUG - 2014-03-29 11:19:41 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:19:41 --> Controller Class Initialized
DEBUG - 2014-03-29 11:19:41 --> Model Class Initialized
DEBUG - 2014-03-29 11:19:41 --> Model Class Initialized
DEBUG - 2014-03-29 11:19:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:19:41 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:19:41 --> after session initialization................
INFO  - 2014-03-29 11:19:41 --> after rays has been clicked.................
INFO  - 2014-03-29 11:19:41 --> last article id is 0
INFO  - 2014-03-29 11:19:41 --> The session id is ========>a42d606beaadba509cd15ce8c6a4a662 and the member id is =======>
INFO  - 2014-03-29 11:19:41 --> The session id is ========>a42d606beaadba509cd15ce8c6a4a662 and the member id is =======>
INFO  - 2014-03-29 11:19:41 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:19:41 --> 0 the guest only data>>>>>
INFO  - 2014-03-29 11:19:41 --> 0 the guest only data>> AFTER >>>#31
INFO  - 2014-03-29 11:19:41 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:19:41 --> 0 the guest only data>>>>>#31
INFO  - 2014-03-29 11:19:41 --> 0 the guest only data>> AFTER >>>#16
INFO  - 2014-03-29 11:19:41 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:19:41 --> 1 the guest only data>>>>>#16
INFO  - 2014-03-29 11:19:41 --> 1 the guest only data>> AFTER >>>#16
INFO  - 2014-03-29 11:19:41 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:19:41 --> 0 the guest only data>>>>>#16
INFO  - 2014-03-29 11:19:41 --> 0 the guest only data>> AFTER >>>#14
INFO  - 2014-03-29 11:19:41 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:19:41 --> 1 the guest only data>>>>>#14
INFO  - 2014-03-29 11:19:41 --> 1 the guest only data>> AFTER >>>#14
INFO  - 2014-03-29 11:19:41 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:19:41 --> 0 the guest only data>>>>>#14
INFO  - 2014-03-29 11:19:41 --> 0 the guest only data>> AFTER >>>#12
INFO  - 2014-03-29 11:19:41 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:19:41 --> 1 the guest only data>>>>>#12
INFO  - 2014-03-29 11:19:41 --> 1 the guest only data>> AFTER >>>#12
INFO  - 2014-03-29 11:19:41 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:19:41 --> 0 the guest only data>>>>>#12
INFO  - 2014-03-29 11:19:41 --> 0 the guest only data>> AFTER >>>#10
INFO  - 2014-03-29 11:19:41 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:19:41 --> 0 the guest only data>>>>>#10
INFO  - 2014-03-29 11:19:41 --> 0 the guest only data>> AFTER >>>#9
INFO  - 2014-03-29 11:19:41 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:19:41 --> 1 the guest only data>>>>>#9
INFO  - 2014-03-29 11:19:41 --> 1 the guest only data>> AFTER >>>#9
INFO  - 2014-03-29 11:19:41 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:19:41 --> 0 the guest only data>>>>>#9
INFO  - 2014-03-29 11:19:41 --> 0 the guest only data>> AFTER >>>#7
INFO  - 2014-03-29 11:19:41 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:19:41 --> 1 the guest only data>>>>>#7
INFO  - 2014-03-29 11:19:41 --> 1 the guest only data>> AFTER >>>#7
INFO  - 2014-03-29 11:19:41 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:19:41 --> 0 the guest only data>>>>>#7
INFO  - 2014-03-29 11:19:41 --> 0 the guest only data>> AFTER >>>#5
INFO  - 2014-03-29 11:19:41 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:19:41 --> 0 the guest only data>>>>>#5
INFO  - 2014-03-29 11:19:41 --> 0 the guest only data>> AFTER >>>#4
INFO  - 2014-03-29 11:19:41 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:19:41 --> 1 the guest only data>>>>>#4
INFO  - 2014-03-29 11:19:41 --> 1 the guest only data>> AFTER >>>#4
INFO  - 2014-03-29 11:19:41 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:19:41 --> 1 the guest only data>>>>>#4
INFO  - 2014-03-29 11:19:41 --> 1 the guest only data>> AFTER >>>#4
INFO  - 2014-03-29 11:19:41 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:19:41 --> 1 the guest only data>>>>>#4
INFO  - 2014-03-29 11:19:41 --> 1 the guest only data>> AFTER >>>#4
DEBUG - 2014-03-29 11:19:41 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2014-03-29 11:19:41 --> Final output sent to browser
DEBUG - 2014-03-29 11:19:41 --> Total execution time: 0.0670
DEBUG - 2014-03-29 11:19:43 --> Config Class Initialized
DEBUG - 2014-03-29 11:19:43 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:19:43 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:19:43 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:19:43 --> URI Class Initialized
DEBUG - 2014-03-29 11:19:43 --> Router Class Initialized
DEBUG - 2014-03-29 11:19:43 --> Output Class Initialized
DEBUG - 2014-03-29 11:19:43 --> Security Class Initialized
DEBUG - 2014-03-29 11:19:43 --> Input Class Initialized
DEBUG - 2014-03-29 11:19:43 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:19:43 --> Language Class Initialized
DEBUG - 2014-03-29 11:19:43 --> Loader Class Initialized
DEBUG - 2014-03-29 11:19:43 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:19:43 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:19:43 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:19:43 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:19:43 --> Session Class Initialized
DEBUG - 2014-03-29 11:19:43 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:19:43 --> Session routines successfully run
DEBUG - 2014-03-29 11:19:43 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:19:43 --> Controller Class Initialized
DEBUG - 2014-03-29 11:19:43 --> Model Class Initialized
DEBUG - 2014-03-29 11:19:43 --> Model Class Initialized
DEBUG - 2014-03-29 11:19:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:19:43 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:19:43 --> after session initialization................
INFO  - 2014-03-29 11:19:43 --> last article id is 1
DEBUG - 2014-03-29 11:19:43 --> Final output sent to browser
DEBUG - 2014-03-29 11:19:43 --> Total execution time: 0.0590
DEBUG - 2014-03-29 11:20:39 --> Config Class Initialized
DEBUG - 2014-03-29 11:20:39 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:20:39 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:20:39 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:20:39 --> URI Class Initialized
DEBUG - 2014-03-29 11:20:39 --> Router Class Initialized
DEBUG - 2014-03-29 11:20:39 --> Output Class Initialized
DEBUG - 2014-03-29 11:20:39 --> Security Class Initialized
DEBUG - 2014-03-29 11:20:39 --> Input Class Initialized
DEBUG - 2014-03-29 11:20:39 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:20:39 --> Language Class Initialized
DEBUG - 2014-03-29 11:20:39 --> Loader Class Initialized
DEBUG - 2014-03-29 11:20:39 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:20:39 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:20:39 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:20:39 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:20:39 --> Session Class Initialized
DEBUG - 2014-03-29 11:20:39 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:20:39 --> Session routines successfully run
DEBUG - 2014-03-29 11:20:39 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:20:39 --> Controller Class Initialized
DEBUG - 2014-03-29 11:20:39 --> Model Class Initialized
DEBUG - 2014-03-29 11:20:39 --> Model Class Initialized
DEBUG - 2014-03-29 11:20:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:20:39 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:20:39 --> after session initialization................
INFO  - 2014-03-29 11:20:39 --> after community pharmacy  has been clicked.................
INFO  - 2014-03-29 11:20:39 --> inside retrieving pharmacy beyond id 0
INFO  - 2014-03-29 11:20:39 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2014-03-29 11:20:39 --> inside retrieving locations 
INFO  - 2014-03-29 11:20:39 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-03-29 11:20:39 --> The session id is ========>7ae3dc9dd094b37b140510d0681fe36d and the member id is =======>
DEBUG - 2014-03-29 11:20:39 --> File loaded: ../pharmaray-application/views/guestcommunitypharmacy.php
DEBUG - 2014-03-29 11:20:39 --> Final output sent to browser
DEBUG - 2014-03-29 11:20:39 --> Total execution time: 0.1450
DEBUG - 2014-03-29 11:20:42 --> Config Class Initialized
DEBUG - 2014-03-29 11:20:42 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:20:42 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:20:42 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:20:42 --> URI Class Initialized
DEBUG - 2014-03-29 11:20:42 --> Router Class Initialized
DEBUG - 2014-03-29 11:20:42 --> Output Class Initialized
DEBUG - 2014-03-29 11:20:42 --> Security Class Initialized
DEBUG - 2014-03-29 11:20:42 --> Input Class Initialized
DEBUG - 2014-03-29 11:20:42 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:20:42 --> Language Class Initialized
DEBUG - 2014-03-29 11:20:42 --> Loader Class Initialized
DEBUG - 2014-03-29 11:20:42 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:20:42 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:20:42 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:20:42 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:20:42 --> Session Class Initialized
DEBUG - 2014-03-29 11:20:42 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:20:42 --> Session routines successfully run
DEBUG - 2014-03-29 11:20:42 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:20:42 --> Controller Class Initialized
DEBUG - 2014-03-29 11:20:42 --> Model Class Initialized
DEBUG - 2014-03-29 11:20:42 --> Model Class Initialized
DEBUG - 2014-03-29 11:20:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:20:42 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:20:42 --> after session initialization................
INFO  - 2014-03-29 11:20:42 --> last pharmacy id is 20
INFO  - 2014-03-29 11:20:42 --> Ajax retrieval ::::::::::===>SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` > 20
ORDER BY `p`.`id_pharmacy`, `p`.`name` desc
LIMIT 100
DEBUG - 2014-03-29 11:20:42 --> Final output sent to browser
DEBUG - 2014-03-29 11:20:42 --> Total execution time: 0.0480
DEBUG - 2014-03-29 11:21:42 --> Config Class Initialized
DEBUG - 2014-03-29 11:21:42 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:21:42 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:21:42 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:21:42 --> URI Class Initialized
DEBUG - 2014-03-29 11:21:42 --> Router Class Initialized
DEBUG - 2014-03-29 11:21:42 --> Output Class Initialized
DEBUG - 2014-03-29 11:21:42 --> Security Class Initialized
DEBUG - 2014-03-29 11:21:42 --> Input Class Initialized
DEBUG - 2014-03-29 11:21:42 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:21:42 --> Language Class Initialized
DEBUG - 2014-03-29 11:21:42 --> Loader Class Initialized
DEBUG - 2014-03-29 11:21:42 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:21:42 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:21:42 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:21:42 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:21:42 --> Session Class Initialized
DEBUG - 2014-03-29 11:21:42 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:21:42 --> Session routines successfully run
DEBUG - 2014-03-29 11:21:42 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:21:42 --> Controller Class Initialized
DEBUG - 2014-03-29 11:21:42 --> Model Class Initialized
DEBUG - 2014-03-29 11:21:42 --> Model Class Initialized
DEBUG - 2014-03-29 11:21:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:21:42 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:21:42 --> after session initialization................
INFO  - 2014-03-29 11:21:42 --> the form message==>
INFO  - 2014-03-29 11:21:42 --> The session id is ========>7ae3dc9dd094b37b140510d0681fe36d and the member id is =======>
INFO  - 2014-03-29 11:21:42 --> after the retrieving session list.................//////////
INFO  - 2014-03-29 11:21:42 --> The session id is ========>7ae3dc9dd094b37b140510d0681fe36d and the member id is =======>
DEBUG - 2014-03-29 11:21:42 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-03-29 11:21:42 --> Final output sent to browser
DEBUG - 2014-03-29 11:21:42 --> Total execution time: 0.0540
DEBUG - 2014-03-29 11:21:52 --> Config Class Initialized
DEBUG - 2014-03-29 11:21:52 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:21:52 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:21:52 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:21:52 --> URI Class Initialized
DEBUG - 2014-03-29 11:21:52 --> Router Class Initialized
DEBUG - 2014-03-29 11:21:52 --> Output Class Initialized
DEBUG - 2014-03-29 11:21:52 --> Security Class Initialized
DEBUG - 2014-03-29 11:21:52 --> Input Class Initialized
DEBUG - 2014-03-29 11:21:52 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:21:52 --> Language Class Initialized
DEBUG - 2014-03-29 11:21:52 --> Loader Class Initialized
DEBUG - 2014-03-29 11:21:52 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:21:52 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:21:52 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:21:52 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:21:52 --> Session Class Initialized
DEBUG - 2014-03-29 11:21:52 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:21:52 --> Session routines successfully run
DEBUG - 2014-03-29 11:21:52 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:21:52 --> Controller Class Initialized
DEBUG - 2014-03-29 11:21:52 --> Model Class Initialized
DEBUG - 2014-03-29 11:21:52 --> Model Class Initialized
DEBUG - 2014-03-29 11:21:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:21:52 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:21:52 --> after session initialization................
INFO  - 2014-03-29 11:21:52 --> inside the register member.................
INFO  - 2014-03-29 11:21:52 --> before initializing member array.................
INFO  - 2014-03-29 11:21:52 --> before setting validation rules.................
INFO  - 2014-03-29 11:21:52 --> after setting validation rules.................
DEBUG - 2014-03-29 11:21:52 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2014-03-29 11:21:52 --> XSS Filtering completed
DEBUG - 2014-03-29 11:21:52 --> XSS Filtering completed
DEBUG - 2014-03-29 11:21:52 --> XSS Filtering completed
DEBUG - 2014-03-29 11:21:52 --> XSS Filtering completed
INFO  - 2014-03-29 11:21:52 --> inside retrieve most searched pharmacy
INFO  - 2014-03-29 11:21:52 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 20
INFO  - 2014-03-29 11:21:52 --> inside retrieve most searched pharmacy
INFO  - 2014-03-29 11:21:52 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 20
INFO  - 2014-03-29 11:21:52 --> inside retrieve most searched pharmacy
INFO  - 2014-03-29 11:21:52 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 20
INFO  - 2014-03-29 11:21:52 --> validation is false so error message is returned.................
INFO  - 2014-03-29 11:21:52 --> the form message controller==>-----------------------
DEBUG - 2014-03-29 11:22:55 --> Config Class Initialized
DEBUG - 2014-03-29 11:22:55 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:22:55 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:22:55 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:22:55 --> URI Class Initialized
DEBUG - 2014-03-29 11:22:55 --> Router Class Initialized
DEBUG - 2014-03-29 11:22:55 --> Output Class Initialized
DEBUG - 2014-03-29 11:22:55 --> Security Class Initialized
DEBUG - 2014-03-29 11:22:55 --> Input Class Initialized
DEBUG - 2014-03-29 11:22:55 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:22:55 --> Language Class Initialized
DEBUG - 2014-03-29 11:22:55 --> Loader Class Initialized
DEBUG - 2014-03-29 11:22:55 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:22:55 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:22:55 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:22:55 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:22:55 --> Session Class Initialized
DEBUG - 2014-03-29 11:22:55 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:22:55 --> Session routines successfully run
DEBUG - 2014-03-29 11:22:55 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:22:55 --> Controller Class Initialized
DEBUG - 2014-03-29 11:22:55 --> Model Class Initialized
DEBUG - 2014-03-29 11:22:55 --> Model Class Initialized
DEBUG - 2014-03-29 11:22:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:22:55 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:22:55 --> after session initialization................
INFO  - 2014-03-29 11:22:55 --> inside the register member.................
INFO  - 2014-03-29 11:22:55 --> before initializing member array.................
INFO  - 2014-03-29 11:22:55 --> before setting validation rules.................
INFO  - 2014-03-29 11:22:55 --> after setting validation rules.................
DEBUG - 2014-03-29 11:22:55 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2014-03-29 11:22:55 --> XSS Filtering completed
DEBUG - 2014-03-29 11:22:55 --> XSS Filtering completed
DEBUG - 2014-03-29 11:22:55 --> XSS Filtering completed
DEBUG - 2014-03-29 11:22:55 --> XSS Filtering completed
INFO  - 2014-03-29 11:22:55 --> inside retrieve most searched pharmacy
INFO  - 2014-03-29 11:22:55 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 20
INFO  - 2014-03-29 11:22:55 --> inside retrieve most searched pharmacy
INFO  - 2014-03-29 11:22:55 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 20
INFO  - 2014-03-29 11:22:55 --> inside retrieve most searched pharmacy
INFO  - 2014-03-29 11:22:55 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 20
INFO  - 2014-03-29 11:22:55 --> validation is false so error message is returned.................
INFO  - 2014-03-29 11:22:55 --> the form message controller==>-----------------------
INFO  - 2014-03-29 11:22:55 --> the form message==>
INFO  - 2014-03-29 11:22:55 --> The session id is ========>7ae3dc9dd094b37b140510d0681fe36d and the member id is =======>
INFO  - 2014-03-29 11:22:55 --> after the retrieving session list.................success-validation//success-validation//alert-validation//alert-validation//alert-validation//alert-validation
INFO  - 2014-03-29 11:22:55 --> The session id is ========>7ae3dc9dd094b37b140510d0681fe36d and the member id is =======>
DEBUG - 2014-03-29 11:22:55 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-03-29 11:22:55 --> Final output sent to browser
DEBUG - 2014-03-29 11:22:55 --> Total execution time: 0.0820
DEBUG - 2014-03-29 11:23:28 --> Config Class Initialized
DEBUG - 2014-03-29 11:23:28 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:23:28 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:23:28 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:23:28 --> URI Class Initialized
DEBUG - 2014-03-29 11:23:28 --> Router Class Initialized
DEBUG - 2014-03-29 11:23:28 --> Output Class Initialized
DEBUG - 2014-03-29 11:23:28 --> Security Class Initialized
DEBUG - 2014-03-29 11:23:28 --> Input Class Initialized
DEBUG - 2014-03-29 11:23:28 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:23:28 --> Language Class Initialized
DEBUG - 2014-03-29 11:23:28 --> Loader Class Initialized
DEBUG - 2014-03-29 11:23:28 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:23:28 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:23:28 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:23:28 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:23:28 --> Session Class Initialized
DEBUG - 2014-03-29 11:23:28 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:23:28 --> Session routines successfully run
DEBUG - 2014-03-29 11:23:28 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:23:28 --> Controller Class Initialized
DEBUG - 2014-03-29 11:23:28 --> Model Class Initialized
DEBUG - 2014-03-29 11:23:28 --> Model Class Initialized
DEBUG - 2014-03-29 11:23:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:23:28 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:23:28 --> after session initialization................
INFO  - 2014-03-29 11:23:28 --> inside the register member.................
INFO  - 2014-03-29 11:23:28 --> before initializing member array.................
INFO  - 2014-03-29 11:23:28 --> before setting validation rules.................
INFO  - 2014-03-29 11:23:28 --> after setting validation rules.................
DEBUG - 2014-03-29 11:23:28 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2014-03-29 11:23:28 --> XSS Filtering completed
DEBUG - 2014-03-29 11:23:28 --> XSS Filtering completed
DEBUG - 2014-03-29 11:23:28 --> XSS Filtering completed
DEBUG - 2014-03-29 11:23:28 --> XSS Filtering completed
DEBUG - 2014-03-29 11:23:28 --> XSS Filtering completed
DEBUG - 2014-03-29 11:23:28 --> XSS Filtering completed
DEBUG - 2014-03-29 11:23:28 --> XSS Filtering completed
INFO  - 2014-03-29 11:23:28 --> inside retrieve most searched pharmacy
INFO  - 2014-03-29 11:23:28 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 20
INFO  - 2014-03-29 11:23:28 --> inside retrieve most searched pharmacy
INFO  - 2014-03-29 11:23:28 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 20
INFO  - 2014-03-29 11:23:28 --> inside retrieve most searched pharmacy
INFO  - 2014-03-29 11:23:28 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 20
INFO  - 2014-03-29 11:23:28 --> before setting the member data.................
INFO  - 2014-03-29 11:23:28 --> inside retrieving user by email addressoonwuzu@swifta.com
INFO  - 2014-03-29 11:23:28 --> SELECT `m`.*
FROM (`member` m)
WHERE `m`.`emailaddress_member` =  'oonwuzu@swifta.com'
INFO  - 2014-03-29 11:23:28 --> the form message==>
INFO  - 2014-03-29 11:23:28 --> The session id is ========>7ae3dc9dd094b37b140510d0681fe36d and the member id is =======>
INFO  - 2014-03-29 11:23:28 --> after the retrieving session list.................success-validation//success-validation//alert-validation//alert-validation//alert-validation//alert-validation
INFO  - 2014-03-29 11:23:28 --> The session id is ========>7ae3dc9dd094b37b140510d0681fe36d and the member id is =======>
DEBUG - 2014-03-29 11:23:28 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-03-29 11:23:28 --> Final output sent to browser
DEBUG - 2014-03-29 11:23:28 --> Total execution time: 0.1750
DEBUG - 2014-03-29 11:23:37 --> Config Class Initialized
DEBUG - 2014-03-29 11:23:37 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:23:37 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:23:37 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:23:37 --> URI Class Initialized
DEBUG - 2014-03-29 11:23:37 --> Router Class Initialized
DEBUG - 2014-03-29 11:23:37 --> Output Class Initialized
DEBUG - 2014-03-29 11:23:37 --> Security Class Initialized
DEBUG - 2014-03-29 11:23:37 --> Input Class Initialized
DEBUG - 2014-03-29 11:23:37 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:23:37 --> Language Class Initialized
DEBUG - 2014-03-29 11:23:37 --> Loader Class Initialized
DEBUG - 2014-03-29 11:23:37 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:23:37 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:23:37 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:23:37 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:23:37 --> Session Class Initialized
DEBUG - 2014-03-29 11:23:37 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:23:37 --> Session routines successfully run
DEBUG - 2014-03-29 11:23:37 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:23:37 --> Controller Class Initialized
DEBUG - 2014-03-29 11:23:37 --> Model Class Initialized
DEBUG - 2014-03-29 11:23:37 --> Model Class Initialized
DEBUG - 2014-03-29 11:23:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:23:37 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:23:37 --> after session initialization................
INFO  - 2014-03-29 11:23:37 --> the form message==>
INFO  - 2014-03-29 11:23:37 --> The session id is ========>7ae3dc9dd094b37b140510d0681fe36d and the member id is =======>
INFO  - 2014-03-29 11:23:37 --> after the retrieving session list.................success-validation//success-validation//error-validation//error-validation//success-validation//success-validation
INFO  - 2014-03-29 11:23:37 --> The session id is ========>7ae3dc9dd094b37b140510d0681fe36d and the member id is =======>
DEBUG - 2014-03-29 11:23:37 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-03-29 11:23:37 --> Final output sent to browser
DEBUG - 2014-03-29 11:23:37 --> Total execution time: 0.0530
DEBUG - 2014-03-29 11:23:38 --> Config Class Initialized
DEBUG - 2014-03-29 11:23:38 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:23:38 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:23:38 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:23:38 --> URI Class Initialized
DEBUG - 2014-03-29 11:23:38 --> Router Class Initialized
DEBUG - 2014-03-29 11:23:38 --> Output Class Initialized
DEBUG - 2014-03-29 11:23:38 --> Security Class Initialized
DEBUG - 2014-03-29 11:23:38 --> Input Class Initialized
DEBUG - 2014-03-29 11:23:38 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:23:38 --> Language Class Initialized
DEBUG - 2014-03-29 11:23:38 --> Loader Class Initialized
DEBUG - 2014-03-29 11:23:38 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:23:38 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:23:38 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:23:38 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:23:38 --> Session Class Initialized
DEBUG - 2014-03-29 11:23:38 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:23:38 --> Session routines successfully run
DEBUG - 2014-03-29 11:23:38 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:23:38 --> Controller Class Initialized
DEBUG - 2014-03-29 11:23:38 --> Model Class Initialized
DEBUG - 2014-03-29 11:23:38 --> Model Class Initialized
DEBUG - 2014-03-29 11:23:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:23:38 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:23:38 --> after session initialization................
INFO  - 2014-03-29 11:23:38 --> the form message==>
INFO  - 2014-03-29 11:23:38 --> The session id is ========>7ae3dc9dd094b37b140510d0681fe36d and the member id is =======>
INFO  - 2014-03-29 11:23:38 --> after the retrieving session list.................//////////
INFO  - 2014-03-29 11:23:38 --> The session id is ========>7ae3dc9dd094b37b140510d0681fe36d and the member id is =======>
DEBUG - 2014-03-29 11:23:38 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-03-29 11:23:38 --> Final output sent to browser
DEBUG - 2014-03-29 11:23:38 --> Total execution time: 0.0580
DEBUG - 2014-03-29 11:23:39 --> Config Class Initialized
DEBUG - 2014-03-29 11:23:39 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:23:39 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:23:39 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:23:39 --> URI Class Initialized
DEBUG - 2014-03-29 11:23:39 --> Router Class Initialized
DEBUG - 2014-03-29 11:23:39 --> Output Class Initialized
DEBUG - 2014-03-29 11:23:39 --> Security Class Initialized
DEBUG - 2014-03-29 11:23:39 --> Input Class Initialized
DEBUG - 2014-03-29 11:23:39 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:23:39 --> Language Class Initialized
DEBUG - 2014-03-29 11:23:39 --> Loader Class Initialized
DEBUG - 2014-03-29 11:23:39 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:23:39 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:23:39 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:23:39 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:23:39 --> Session Class Initialized
DEBUG - 2014-03-29 11:23:39 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:23:39 --> Session routines successfully run
DEBUG - 2014-03-29 11:23:39 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:23:39 --> Controller Class Initialized
DEBUG - 2014-03-29 11:23:39 --> Model Class Initialized
DEBUG - 2014-03-29 11:23:39 --> Model Class Initialized
DEBUG - 2014-03-29 11:23:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:23:39 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:23:39 --> after session initialization................
INFO  - 2014-03-29 11:23:39 --> the form message==>
INFO  - 2014-03-29 11:23:39 --> The session id is ========>7ae3dc9dd094b37b140510d0681fe36d and the member id is =======>
INFO  - 2014-03-29 11:23:39 --> after the retrieving session list.................//////////
INFO  - 2014-03-29 11:23:39 --> The session id is ========>7ae3dc9dd094b37b140510d0681fe36d and the member id is =======>
DEBUG - 2014-03-29 11:23:39 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-03-29 11:23:39 --> Final output sent to browser
DEBUG - 2014-03-29 11:23:39 --> Total execution time: 0.0500
DEBUG - 2014-03-29 11:23:40 --> Config Class Initialized
DEBUG - 2014-03-29 11:23:40 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:23:40 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:23:40 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:23:40 --> URI Class Initialized
DEBUG - 2014-03-29 11:23:40 --> Router Class Initialized
DEBUG - 2014-03-29 11:23:40 --> Output Class Initialized
DEBUG - 2014-03-29 11:23:40 --> Security Class Initialized
DEBUG - 2014-03-29 11:23:40 --> Input Class Initialized
DEBUG - 2014-03-29 11:23:40 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:23:40 --> Language Class Initialized
DEBUG - 2014-03-29 11:23:40 --> Loader Class Initialized
DEBUG - 2014-03-29 11:23:40 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:23:40 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:23:40 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:23:40 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:23:40 --> Session Class Initialized
DEBUG - 2014-03-29 11:23:40 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:23:40 --> Session routines successfully run
DEBUG - 2014-03-29 11:23:40 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:23:40 --> Controller Class Initialized
DEBUG - 2014-03-29 11:23:40 --> Model Class Initialized
DEBUG - 2014-03-29 11:23:40 --> Model Class Initialized
DEBUG - 2014-03-29 11:23:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:23:40 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:23:40 --> after session initialization................
INFO  - 2014-03-29 11:23:40 --> the form message==>
INFO  - 2014-03-29 11:23:40 --> The session id is ========>7ae3dc9dd094b37b140510d0681fe36d and the member id is =======>
INFO  - 2014-03-29 11:23:40 --> after the retrieving session list.................//////////
INFO  - 2014-03-29 11:23:40 --> The session id is ========>7ae3dc9dd094b37b140510d0681fe36d and the member id is =======>
DEBUG - 2014-03-29 11:23:40 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-03-29 11:23:40 --> Final output sent to browser
DEBUG - 2014-03-29 11:23:40 --> Total execution time: 0.0600
DEBUG - 2014-03-29 11:23:40 --> Config Class Initialized
DEBUG - 2014-03-29 11:23:40 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:23:40 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:23:40 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:23:40 --> URI Class Initialized
DEBUG - 2014-03-29 11:23:40 --> Router Class Initialized
DEBUG - 2014-03-29 11:23:40 --> Output Class Initialized
DEBUG - 2014-03-29 11:23:40 --> Security Class Initialized
DEBUG - 2014-03-29 11:23:40 --> Input Class Initialized
DEBUG - 2014-03-29 11:23:40 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:23:40 --> Language Class Initialized
DEBUG - 2014-03-29 11:23:40 --> Loader Class Initialized
DEBUG - 2014-03-29 11:23:40 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:23:40 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:23:40 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:23:40 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:23:40 --> Session Class Initialized
DEBUG - 2014-03-29 11:23:40 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:23:40 --> Session routines successfully run
DEBUG - 2014-03-29 11:23:40 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:23:40 --> Controller Class Initialized
DEBUG - 2014-03-29 11:23:40 --> Model Class Initialized
DEBUG - 2014-03-29 11:23:40 --> Model Class Initialized
DEBUG - 2014-03-29 11:23:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:23:40 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:23:40 --> after session initialization................
INFO  - 2014-03-29 11:23:40 --> the form message==>
INFO  - 2014-03-29 11:23:40 --> The session id is ========>7ae3dc9dd094b37b140510d0681fe36d and the member id is =======>
INFO  - 2014-03-29 11:23:40 --> after the retrieving session list.................//////////
INFO  - 2014-03-29 11:23:40 --> The session id is ========>7ae3dc9dd094b37b140510d0681fe36d and the member id is =======>
DEBUG - 2014-03-29 11:23:40 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-03-29 11:23:40 --> Final output sent to browser
DEBUG - 2014-03-29 11:23:40 --> Total execution time: 0.0530
DEBUG - 2014-03-29 11:23:40 --> Config Class Initialized
DEBUG - 2014-03-29 11:23:40 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:23:40 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:23:40 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:23:40 --> URI Class Initialized
DEBUG - 2014-03-29 11:23:40 --> Router Class Initialized
DEBUG - 2014-03-29 11:23:40 --> Output Class Initialized
DEBUG - 2014-03-29 11:23:40 --> Security Class Initialized
DEBUG - 2014-03-29 11:23:40 --> Input Class Initialized
DEBUG - 2014-03-29 11:23:40 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:23:40 --> Language Class Initialized
DEBUG - 2014-03-29 11:23:40 --> Loader Class Initialized
DEBUG - 2014-03-29 11:23:40 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:23:40 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:23:40 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:23:40 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:23:40 --> Session Class Initialized
DEBUG - 2014-03-29 11:23:40 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:23:40 --> Session routines successfully run
DEBUG - 2014-03-29 11:23:40 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:23:40 --> Controller Class Initialized
DEBUG - 2014-03-29 11:23:40 --> Model Class Initialized
DEBUG - 2014-03-29 11:23:40 --> Model Class Initialized
DEBUG - 2014-03-29 11:23:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:23:40 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:23:40 --> after session initialization................
INFO  - 2014-03-29 11:23:40 --> the form message==>
INFO  - 2014-03-29 11:23:40 --> The session id is ========>7ae3dc9dd094b37b140510d0681fe36d and the member id is =======>
INFO  - 2014-03-29 11:23:40 --> after the retrieving session list.................//////////
INFO  - 2014-03-29 11:23:40 --> The session id is ========>7ae3dc9dd094b37b140510d0681fe36d and the member id is =======>
DEBUG - 2014-03-29 11:23:40 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-03-29 11:23:40 --> Final output sent to browser
DEBUG - 2014-03-29 11:23:40 --> Total execution time: 0.0500
DEBUG - 2014-03-29 11:24:14 --> Config Class Initialized
DEBUG - 2014-03-29 11:24:14 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:24:14 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:24:14 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:24:14 --> URI Class Initialized
DEBUG - 2014-03-29 11:24:14 --> Router Class Initialized
DEBUG - 2014-03-29 11:24:14 --> Output Class Initialized
DEBUG - 2014-03-29 11:24:14 --> Security Class Initialized
DEBUG - 2014-03-29 11:24:14 --> Input Class Initialized
DEBUG - 2014-03-29 11:24:14 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:24:14 --> Language Class Initialized
DEBUG - 2014-03-29 11:24:14 --> Loader Class Initialized
DEBUG - 2014-03-29 11:24:14 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:24:14 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:24:14 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:24:14 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:24:14 --> Session Class Initialized
DEBUG - 2014-03-29 11:24:14 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:24:14 --> Session routines successfully run
DEBUG - 2014-03-29 11:24:14 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:24:14 --> Controller Class Initialized
DEBUG - 2014-03-29 11:24:14 --> Model Class Initialized
DEBUG - 2014-03-29 11:24:14 --> Model Class Initialized
DEBUG - 2014-03-29 11:24:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:24:14 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:24:14 --> after session initialization................
INFO  - 2014-03-29 11:24:14 --> inside the register member.................
INFO  - 2014-03-29 11:24:14 --> before initializing member array.................
INFO  - 2014-03-29 11:24:14 --> before setting validation rules.................
INFO  - 2014-03-29 11:24:14 --> after setting validation rules.................
DEBUG - 2014-03-29 11:24:14 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2014-03-29 11:24:14 --> XSS Filtering completed
DEBUG - 2014-03-29 11:24:14 --> XSS Filtering completed
DEBUG - 2014-03-29 11:24:14 --> XSS Filtering completed
DEBUG - 2014-03-29 11:24:14 --> XSS Filtering completed
DEBUG - 2014-03-29 11:24:14 --> XSS Filtering completed
DEBUG - 2014-03-29 11:24:14 --> XSS Filtering completed
DEBUG - 2014-03-29 11:24:14 --> XSS Filtering completed
INFO  - 2014-03-29 11:24:14 --> inside retrieve most searched pharmacy
INFO  - 2014-03-29 11:24:14 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 20
INFO  - 2014-03-29 11:24:14 --> inside retrieve most searched pharmacy
INFO  - 2014-03-29 11:24:14 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 20
INFO  - 2014-03-29 11:24:14 --> inside retrieve most searched pharmacy
INFO  - 2014-03-29 11:24:14 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 20
INFO  - 2014-03-29 11:24:14 --> before setting the member data.................
INFO  - 2014-03-29 11:24:14 --> inside retrieving user by email addressoonwuzu@niftyhybrid.com
INFO  - 2014-03-29 11:24:14 --> SELECT `m`.*
FROM (`member` m)
WHERE `m`.`emailaddress_member` =  'oonwuzu@niftyhybrid.com'
INFO  - 2014-03-29 11:24:14 --> before inserting into member.................
INFO  - 2014-03-29 11:24:14 --> after inserting into member.................36
INFO  - 2014-03-29 11:24:14 --> the status of the transaction is...........1 the insert id is ......36
INFO  - 2014-03-29 11:24:14 --> the id of retrieved member is.................. 36
INFO  - 2014-03-29 11:24:14 --> before inserting into login details.................
INFO  - 2014-03-29 11:24:14 --> after inserting into login details.................
INFO  - 2014-03-29 11:24:14 --> verify user roles ::::::::::===>SELECT `ur`.`id_userrole`
FROM (`userrole` ur)
WHERE lower(ur.name) =  'ordinary user'
INFO  - 2014-03-29 11:24:14 --> before inserting into login details role.................
INFO  - 2014-03-29 11:24:14 --> after inserting into login details role.................
INFO  - 2014-03-29 11:24:14 --> after setting member array and attempting to print array.................
INFO  - 2014-03-29 11:24:14 --> after setting email to username variable.................
INFO  - 2014-03-29 11:24:14 --> after setting password to password variable.................
INFO  - 2014-03-29 11:24:14 --> after verifying login details.................
INFO  - 2014-03-29 11:24:14 --> before getting the relation of member............36
INFO  - 2014-03-29 11:24:14 --> registration complete and username set on userpage.................Onwuzu
INFO  - 2014-03-29 11:24:14 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-03-29 11:24:14 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2014-03-29 11:24:14 --> inside retrieving vacancy for member
INFO  - 2014-03-29 11:24:14 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2014-03-29 11:24:14 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-03-29 11:24:14 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2014-03-29 11:24:14 --> Drugs ::::::::::===>SELECT d.id_drug, d.drug_name, d.drug_description, group_concat(bn.name, ':', bn.id_brandname) as drug_company, group_concat(dcc.name) as drug_brandnames, dcc.id_drugcategory as category_id
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dcc`.`brandname_id`
WHERE `d`.`id_drug` =  '1'
GROUP BY `id_drug`
ORDER BY `d`.`drug_name`, `bn`.`id_brandname`
INFO  - 2014-03-29 11:24:14 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drugcategory_id` = `dc`.`id_drugcategory`
JOIN `drug` d ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2014-03-29 11:24:14 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2014-03-29 11:24:14 --> inside retrieving pharmacy for drug id is 1
INFO  - 2014-03-29 11:24:14 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2014-03-29 11:24:14 --> Related drugs ::::::::::===>SELECT d.drug_name
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcg`.`drugcategory_id` = `dcc`.`id_drugcategory`
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
WHERE `dcc`.`brandname_id` =  '0'
AND `dc`.`id_drugclass` =  '0'
INFO  - 2014-03-29 11:24:14 --> inside retrieve most searched drugs
INFO  - 2014-03-29 11:24:14 --> SELECT `d`.`id_drug` as id, `d`.`drug_name` as name, count(ds.id_drugsearch) as search_count
FROM (`drug_search` ds)
JOIN `drug` d ON `d`.`id_drug` = `ds`.`drug_id`
GROUP BY `d`.`id_drug`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-03-29 11:24:14 --> inside retrieve most searched pharmacy
INFO  - 2014-03-29 11:24:14 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-03-29 11:24:14 --> inside retrieve most searched article
INFO  - 2014-03-29 11:24:14 --> SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description, count(ats.article_id) as search_count
FROM (`article_search` ats)
JOIN `article` a ON `a`.`id_article` = `ats`.`article_id`
JOIN `news` n ON `a`.`newsid_news` = `n`.`id_news`
GROUP BY `a`.`id_article`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-03-29 11:24:14 --> The session id is ========>7ae3dc9dd094b37b140510d0681fe36d and the member id is =======>36
INFO  - 2014-03-29 11:24:14 -->  column name inside view is 0 column Data is 491
INFO  - 2014-03-29 11:24:14 -->  column name inside view is 1 column Data is 618
INFO  - 2014-03-29 11:24:14 -->  column name inside view is 2 column Data is 1
INFO  - 2014-03-29 11:24:14 -->  column name inside view is 3 column Data is 515
INFO  - 2014-03-29 11:24:14 -->  column name inside view is 4 column Data is 488
INFO  - 2014-03-29 11:24:14 -->  column name inside view is 5 column Data is 509
INFO  - 2014-03-29 11:24:14 -->  column name inside view is 6 column Data is 487
INFO  - 2014-03-29 11:24:14 -->  column name inside view is 7 column Data is 489
INFO  - 2014-03-29 11:24:14 -->  column name inside view is 8 column Data is 516
INFO  - 2014-03-29 11:24:14 -->  column name inside view is 9 column Data is 641
INFO  - 2014-03-29 11:24:14 -->  column name inside view is 0 column Data is 5
INFO  - 2014-03-29 11:24:14 -->  column name inside view is 1 column Data is 2
INFO  - 2014-03-29 11:24:14 -->  column name inside view is 2 column Data is 3
INFO  - 2014-03-29 11:24:14 -->  column name inside view is 3 column Data is 1
INFO  - 2014-03-29 11:24:14 -->  column name inside view is 4 column Data is 18
INFO  - 2014-03-29 11:24:14 -->  column name inside view is 5 column Data is 15
INFO  - 2014-03-29 11:24:14 -->  column name inside view is 6 column Data is 14
INFO  - 2014-03-29 11:24:14 -->  column name inside view is 7 column Data is 6
INFO  - 2014-03-29 11:24:14 -->  column name inside view is 8 column Data is 43
INFO  - 2014-03-29 11:24:14 -->  column name inside view is 9 column Data is 9
INFO  - 2014-03-29 11:24:14 -->  column name inside view is 0 column Data is Male Doctor
INFO  - 2014-03-29 11:24:14 -->  column name inside view is 1 column Data is Ordinary User
DEBUG - 2014-03-29 11:24:14 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2014-03-29 11:24:14 --> Final output sent to browser
DEBUG - 2014-03-29 11:24:14 --> Total execution time: 0.1820
DEBUG - 2014-03-29 11:24:14 --> Config Class Initialized
DEBUG - 2014-03-29 11:24:14 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:24:14 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:24:14 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:24:14 --> URI Class Initialized
DEBUG - 2014-03-29 11:24:14 --> Router Class Initialized
ERROR - 2014-03-29 11:24:14 --> 404 Page Not Found --> css
DEBUG - 2014-03-29 11:24:21 --> Config Class Initialized
DEBUG - 2014-03-29 11:24:21 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:24:21 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:24:21 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:24:21 --> URI Class Initialized
DEBUG - 2014-03-29 11:24:21 --> Router Class Initialized
DEBUG - 2014-03-29 11:24:21 --> Output Class Initialized
DEBUG - 2014-03-29 11:24:21 --> Security Class Initialized
DEBUG - 2014-03-29 11:24:21 --> Input Class Initialized
DEBUG - 2014-03-29 11:24:21 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:24:21 --> Language Class Initialized
DEBUG - 2014-03-29 11:24:21 --> Loader Class Initialized
DEBUG - 2014-03-29 11:24:21 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:24:21 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:24:21 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:24:21 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:24:21 --> Session Class Initialized
DEBUG - 2014-03-29 11:24:21 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:24:21 --> Session routines successfully run
DEBUG - 2014-03-29 11:24:21 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:24:21 --> Controller Class Initialized
DEBUG - 2014-03-29 11:24:21 --> Model Class Initialized
DEBUG - 2014-03-29 11:24:21 --> Model Class Initialized
DEBUG - 2014-03-29 11:24:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:24:21 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:24:21 --> after session initialization................
INFO  - 2014-03-29 11:24:21 --> after internships list has been clicked.................
INFO  - 2014-03-29 11:24:21 --> inside retrieving locations 
INFO  - 2014-03-29 11:24:21 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-03-29 11:24:21 --> last intern id is 0
INFO  - 2014-03-29 11:24:21 --> The session id is ========>7ae3dc9dd094b37b140510d0681fe36d and the member id is =======>36
DEBUG - 2014-03-29 11:24:21 --> File loaded: ../pharmaray-application/views/internships.php
DEBUG - 2014-03-29 11:24:21 --> Final output sent to browser
DEBUG - 2014-03-29 11:24:21 --> Total execution time: 0.2150
DEBUG - 2014-03-29 11:24:28 --> Config Class Initialized
DEBUG - 2014-03-29 11:24:28 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:24:28 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:24:28 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:24:28 --> URI Class Initialized
DEBUG - 2014-03-29 11:24:28 --> Router Class Initialized
DEBUG - 2014-03-29 11:24:28 --> Output Class Initialized
DEBUG - 2014-03-29 11:24:28 --> Security Class Initialized
DEBUG - 2014-03-29 11:24:28 --> Input Class Initialized
DEBUG - 2014-03-29 11:24:28 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:24:28 --> Language Class Initialized
DEBUG - 2014-03-29 11:24:28 --> Loader Class Initialized
DEBUG - 2014-03-29 11:24:28 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:24:28 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:24:28 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:24:28 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:24:28 --> Session Class Initialized
DEBUG - 2014-03-29 11:24:28 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:24:28 --> Session routines successfully run
DEBUG - 2014-03-29 11:24:28 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:24:28 --> Controller Class Initialized
DEBUG - 2014-03-29 11:24:28 --> Model Class Initialized
DEBUG - 2014-03-29 11:24:28 --> Model Class Initialized
DEBUG - 2014-03-29 11:24:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:24:28 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:24:28 --> after session initialization................
INFO  - 2014-03-29 11:24:28 --> last intern id is 1
DEBUG - 2014-03-29 11:24:28 --> Final output sent to browser
DEBUG - 2014-03-29 11:24:28 --> Total execution time: 0.0550
DEBUG - 2014-03-29 11:24:33 --> Config Class Initialized
DEBUG - 2014-03-29 11:24:33 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:24:33 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:24:33 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:24:33 --> URI Class Initialized
DEBUG - 2014-03-29 11:24:33 --> Router Class Initialized
DEBUG - 2014-03-29 11:24:33 --> Output Class Initialized
DEBUG - 2014-03-29 11:24:33 --> Security Class Initialized
DEBUG - 2014-03-29 11:24:33 --> Input Class Initialized
DEBUG - 2014-03-29 11:24:33 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:24:33 --> Language Class Initialized
DEBUG - 2014-03-29 11:24:33 --> Loader Class Initialized
DEBUG - 2014-03-29 11:24:33 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:24:33 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:24:33 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:24:33 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:24:33 --> Session Class Initialized
DEBUG - 2014-03-29 11:24:33 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:24:33 --> Session routines successfully run
DEBUG - 2014-03-29 11:24:33 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:24:33 --> Controller Class Initialized
DEBUG - 2014-03-29 11:24:33 --> Model Class Initialized
DEBUG - 2014-03-29 11:24:33 --> Model Class Initialized
DEBUG - 2014-03-29 11:24:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:24:33 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:24:33 --> after session initialization................
INFO  - 2014-03-29 11:24:33 --> after community pharmacy  has been clicked.................
INFO  - 2014-03-29 11:24:33 --> inside retrieving pharmacy beyond id 0
INFO  - 2014-03-29 11:24:33 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2014-03-29 11:24:33 --> inside retrieving locations 
INFO  - 2014-03-29 11:24:33 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-03-29 11:24:33 --> The session id is ========>7ae3dc9dd094b37b140510d0681fe36d and the member id is =======>36
DEBUG - 2014-03-29 11:24:33 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2014-03-29 11:24:33 --> Final output sent to browser
DEBUG - 2014-03-29 11:24:33 --> Total execution time: 0.1490
DEBUG - 2014-03-29 11:24:40 --> Config Class Initialized
DEBUG - 2014-03-29 11:24:40 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:24:40 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:24:40 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:24:40 --> URI Class Initialized
DEBUG - 2014-03-29 11:24:40 --> Router Class Initialized
DEBUG - 2014-03-29 11:24:40 --> Output Class Initialized
DEBUG - 2014-03-29 11:24:40 --> Security Class Initialized
DEBUG - 2014-03-29 11:24:40 --> Input Class Initialized
DEBUG - 2014-03-29 11:24:40 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:24:40 --> Language Class Initialized
DEBUG - 2014-03-29 11:24:40 --> Loader Class Initialized
DEBUG - 2014-03-29 11:24:40 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:24:40 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:24:40 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:24:40 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:24:40 --> Session Class Initialized
DEBUG - 2014-03-29 11:24:40 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:24:40 --> Session routines successfully run
DEBUG - 2014-03-29 11:24:40 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:24:40 --> Controller Class Initialized
DEBUG - 2014-03-29 11:24:40 --> Model Class Initialized
DEBUG - 2014-03-29 11:24:40 --> Model Class Initialized
DEBUG - 2014-03-29 11:24:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:24:40 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:24:40 --> after session initialization................
INFO  - 2014-03-29 11:24:40 --> inside retrieve most commented forum topic 
INFO  - 2014-03-29 11:24:40 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
INFO  - 2014-03-29 11:24:40 --> inside retrieving first 20 topics 
INFO  - 2014-03-29 11:24:40 --> SELECT `t`.`id_topicforum`, upper(t.name) as name, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
LIMIT 20
INFO  - 2014-03-29 11:24:40 --> inside retrieving forum beyond id 
INFO  - 2014-03-29 11:24:40 --> SELECT `ff`.`id_forum` as id, `ff`.`name`, count(f.id_forum) as sub_forum
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` is null 
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`
INFO  - 2014-03-29 11:24:40 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2014-03-29 11:24:40 --> inside retrieving comments topic id and drug id is 1
INFO  - 2014-03-29 11:24:40 --> SELECT `tc`.`id_topiccomment`, `tc`.`comment`, `tc`.`timecreated`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2014-03-29 11:24:40 --> inside retrieving comments topic id 1
INFO  - 2014-03-29 11:24:40 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
INFO  - 2014-03-29 11:24:40 --> after forums has been clicked.................
INFO  - 2014-03-29 11:24:40 --> The session id is ========>7ae3dc9dd094b37b140510d0681fe36d and the member id is =======>36
INFO  - 2014-03-29 11:24:40 -->  column name inside view is 0 column Data is Male Doctor
INFO  - 2014-03-29 11:24:40 -->  column name inside view is 1 column Data is Ordinary User
DEBUG - 2014-03-29 11:24:40 --> File loaded: ../pharmaray-application/views/forum.php
DEBUG - 2014-03-29 11:24:40 --> Final output sent to browser
DEBUG - 2014-03-29 11:24:40 --> Total execution time: 0.1720
DEBUG - 2014-03-29 11:24:40 --> Config Class Initialized
DEBUG - 2014-03-29 11:24:40 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:24:40 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:24:40 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:24:40 --> URI Class Initialized
DEBUG - 2014-03-29 11:24:40 --> Router Class Initialized
DEBUG - 2014-03-29 11:24:40 --> Output Class Initialized
DEBUG - 2014-03-29 11:24:40 --> Security Class Initialized
DEBUG - 2014-03-29 11:24:40 --> Input Class Initialized
DEBUG - 2014-03-29 11:24:40 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:24:40 --> Language Class Initialized
DEBUG - 2014-03-29 11:24:40 --> Loader Class Initialized
DEBUG - 2014-03-29 11:24:40 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:24:40 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:24:40 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:24:40 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:24:40 --> Session Class Initialized
DEBUG - 2014-03-29 11:24:40 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:24:40 --> Session routines successfully run
DEBUG - 2014-03-29 11:24:40 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:24:40 --> Controller Class Initialized
DEBUG - 2014-03-29 11:24:40 --> Model Class Initialized
DEBUG - 2014-03-29 11:24:40 --> Model Class Initialized
DEBUG - 2014-03-29 11:24:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:24:40 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:24:40 --> after session initialization................
ERROR - 2014-03-29 11:24:40 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2014-03-29 11:24:40 --> Config Class Initialized
DEBUG - 2014-03-29 11:24:40 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:24:40 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:24:40 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:24:40 --> URI Class Initialized
DEBUG - 2014-03-29 11:24:40 --> Router Class Initialized
ERROR - 2014-03-29 11:24:40 --> 404 Page Not Found --> css
DEBUG - 2014-03-29 11:24:45 --> Config Class Initialized
DEBUG - 2014-03-29 11:24:45 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:24:45 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:24:45 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:24:45 --> URI Class Initialized
DEBUG - 2014-03-29 11:24:45 --> Router Class Initialized
DEBUG - 2014-03-29 11:24:45 --> Output Class Initialized
DEBUG - 2014-03-29 11:24:45 --> Security Class Initialized
DEBUG - 2014-03-29 11:24:45 --> Input Class Initialized
DEBUG - 2014-03-29 11:24:45 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:24:45 --> Language Class Initialized
DEBUG - 2014-03-29 11:24:45 --> Loader Class Initialized
DEBUG - 2014-03-29 11:24:45 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:24:45 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:24:45 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:24:45 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:24:45 --> Session Class Initialized
DEBUG - 2014-03-29 11:24:45 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:24:45 --> Session routines successfully run
DEBUG - 2014-03-29 11:24:45 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:24:45 --> Controller Class Initialized
DEBUG - 2014-03-29 11:24:45 --> Model Class Initialized
DEBUG - 2014-03-29 11:24:45 --> Model Class Initialized
DEBUG - 2014-03-29 11:24:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:24:45 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:24:45 --> after session initialization................
INFO  - 2014-03-29 11:24:45 --> inside the retrieve ajax topic comment page.................
INFO  - 2014-03-29 11:24:45 --> inside retrieving comments member id and forum topic id is 1
INFO  - 2014-03-29 11:24:45 --> 10==============================10
INFO  - 2014-03-29 11:24:45 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10, 10
INFO  - 2014-03-29 11:24:45 --> [{"id":"8","comment":"Ada no dey lack oooh","timecreated":"2013-10-24 14:24:20","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"7","comment":"Ada mma","timecreated":"2013-10-24 14:24:11","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"6","comment":"we are in it together right?","timecreated":"2013-10-24 14:21:29","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"5","comment":"let's make this happen","timecreated":"2013-10-24 14:21:19","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"4","comment":"abi","timecreated":"2013-10-24 14:21:09","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"3","comment":"this is not just right","timecreated":"2013-10-24 14:21:05","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"2","comment":"This is just not right...I have had this for a very long time that it drives me crazy","timecreated":"2013-10-24 14:14:47","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"1","comment":"check this comment now....","timecreated":"2013-10-24 14:14:12","membername":"Elvis onuorah","membertypeimage":"profilem1"}]
DEBUG - 2014-03-29 11:24:45 --> Final output sent to browser
DEBUG - 2014-03-29 11:24:45 --> Total execution time: 0.0530
DEBUG - 2014-03-29 11:24:48 --> Config Class Initialized
DEBUG - 2014-03-29 11:24:48 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:24:48 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:24:48 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:24:48 --> URI Class Initialized
DEBUG - 2014-03-29 11:24:48 --> Router Class Initialized
DEBUG - 2014-03-29 11:24:48 --> Output Class Initialized
DEBUG - 2014-03-29 11:24:48 --> Security Class Initialized
DEBUG - 2014-03-29 11:24:48 --> Input Class Initialized
DEBUG - 2014-03-29 11:24:48 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:24:48 --> Language Class Initialized
DEBUG - 2014-03-29 11:24:48 --> Loader Class Initialized
DEBUG - 2014-03-29 11:24:48 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:24:48 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:24:48 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:24:48 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:24:48 --> Session Class Initialized
DEBUG - 2014-03-29 11:24:48 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:24:48 --> Session routines successfully run
DEBUG - 2014-03-29 11:24:48 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:24:48 --> Controller Class Initialized
DEBUG - 2014-03-29 11:24:48 --> Model Class Initialized
DEBUG - 2014-03-29 11:24:48 --> Model Class Initialized
DEBUG - 2014-03-29 11:24:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:24:48 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:24:48 --> after session initialization................
INFO  - 2014-03-29 11:24:48 --> inside the retrieve ajax topic comment page.................
INFO  - 2014-03-29 11:24:48 --> inside retrieving comments member id and forum topic id is 1
INFO  - 2014-03-29 11:24:48 --> 10==============================18
INFO  - 2014-03-29 11:24:48 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 18, 10
INFO  - 2014-03-29 11:24:48 --> []
DEBUG - 2014-03-29 11:24:48 --> Final output sent to browser
DEBUG - 2014-03-29 11:24:48 --> Total execution time: 0.0490
DEBUG - 2014-03-29 11:24:55 --> Config Class Initialized
DEBUG - 2014-03-29 11:24:55 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:24:55 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:24:55 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:24:55 --> URI Class Initialized
DEBUG - 2014-03-29 11:24:55 --> Router Class Initialized
DEBUG - 2014-03-29 11:24:55 --> Output Class Initialized
DEBUG - 2014-03-29 11:24:55 --> Security Class Initialized
DEBUG - 2014-03-29 11:24:55 --> Input Class Initialized
DEBUG - 2014-03-29 11:24:55 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:24:55 --> Language Class Initialized
DEBUG - 2014-03-29 11:24:55 --> Loader Class Initialized
DEBUG - 2014-03-29 11:24:55 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:24:55 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:24:55 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:24:55 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:24:55 --> Session Class Initialized
DEBUG - 2014-03-29 11:24:55 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:24:55 --> Session routines successfully run
DEBUG - 2014-03-29 11:24:55 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:24:55 --> Controller Class Initialized
DEBUG - 2014-03-29 11:24:55 --> Model Class Initialized
DEBUG - 2014-03-29 11:24:55 --> Model Class Initialized
DEBUG - 2014-03-29 11:24:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:24:55 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:24:55 --> after session initialization................
INFO  - 2014-03-29 11:24:55 --> Topics ::::::::::===>SELECT `ft`.`id_topicforum`, `ft`.`name`, `ft`.`description`
FROM (`forum_topic` ft)
WHERE `ft`.`id_topicforum` =  '2'
ORDER BY `ft`.`name`
INFO  - 2014-03-29 11:24:55 --> inside retrieving comments member id and forum topic id is 2
INFO  - 2014-03-29 11:24:55 --> 10==============================0
INFO  - 2014-03-29 11:24:55 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2014-03-29 11:24:55 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2014-03-29 11:24:55 --> inside retrieving comments topic id is 2
INFO  - 2014-03-29 11:24:55 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
DEBUG - 2014-03-29 11:24:55 --> Final output sent to browser
DEBUG - 2014-03-29 11:24:55 --> Total execution time: 0.0820
DEBUG - 2014-03-29 11:24:58 --> Config Class Initialized
DEBUG - 2014-03-29 11:24:58 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:24:58 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:24:58 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:24:58 --> URI Class Initialized
DEBUG - 2014-03-29 11:24:58 --> Router Class Initialized
DEBUG - 2014-03-29 11:24:58 --> Output Class Initialized
DEBUG - 2014-03-29 11:24:58 --> Security Class Initialized
DEBUG - 2014-03-29 11:24:58 --> Input Class Initialized
DEBUG - 2014-03-29 11:24:58 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:24:58 --> Language Class Initialized
DEBUG - 2014-03-29 11:24:58 --> Loader Class Initialized
DEBUG - 2014-03-29 11:24:58 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:24:58 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:24:58 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:24:58 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:24:58 --> Session Class Initialized
DEBUG - 2014-03-29 11:24:58 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:24:58 --> Session routines successfully run
DEBUG - 2014-03-29 11:24:58 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:24:58 --> Controller Class Initialized
DEBUG - 2014-03-29 11:24:58 --> Model Class Initialized
DEBUG - 2014-03-29 11:24:58 --> Model Class Initialized
DEBUG - 2014-03-29 11:24:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:24:58 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:24:58 --> after session initialization................
INFO  - 2014-03-29 11:24:58 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  '36'
INFO  - 2014-03-29 11:24:58 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-03-29 11:24:58 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2014-03-29 11:24:58 --> inside retrieving vacancy for member
INFO  - 2014-03-29 11:24:58 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2014-03-29 11:24:58 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-03-29 11:24:58 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2014-03-29 11:24:58 --> Drugs ::::::::::===>SELECT d.id_drug, d.drug_name, d.drug_description, group_concat(bn.name, ':', bn.id_brandname) as drug_company, group_concat(dcc.name) as drug_brandnames, dcc.id_drugcategory as category_id
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dcc`.`brandname_id`
WHERE `d`.`id_drug` =  '1'
GROUP BY `id_drug`
ORDER BY `d`.`drug_name`, `bn`.`id_brandname`
INFO  - 2014-03-29 11:24:58 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drugcategory_id` = `dc`.`id_drugcategory`
JOIN `drug` d ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2014-03-29 11:24:58 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2014-03-29 11:24:58 --> inside retrieving pharmacy for drug id is 1
INFO  - 2014-03-29 11:24:58 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2014-03-29 11:24:58 --> Related drugs ::::::::::===>SELECT d.drug_name
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcg`.`drugcategory_id` = `dcc`.`id_drugcategory`
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
WHERE `dcc`.`brandname_id` =  '0'
AND `dc`.`id_drugclass` =  '0'
INFO  - 2014-03-29 11:24:58 --> inside retrieve most searched drugs
INFO  - 2014-03-29 11:24:58 --> SELECT `d`.`id_drug` as id, `d`.`drug_name` as name, count(ds.id_drugsearch) as search_count
FROM (`drug_search` ds)
JOIN `drug` d ON `d`.`id_drug` = `ds`.`drug_id`
GROUP BY `d`.`id_drug`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-03-29 11:24:58 --> inside retrieve most searched pharmacy
INFO  - 2014-03-29 11:24:58 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-03-29 11:24:58 --> inside retrieve most searched article
INFO  - 2014-03-29 11:24:58 --> SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description, count(ats.article_id) as search_count
FROM (`article_search` ats)
JOIN `article` a ON `a`.`id_article` = `ats`.`article_id`
JOIN `news` n ON `a`.`newsid_news` = `n`.`id_news`
GROUP BY `a`.`id_article`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-03-29 11:24:58 --> The session id is ========>7ae3dc9dd094b37b140510d0681fe36d and the member id is =======>36
INFO  - 2014-03-29 11:24:58 -->  column name inside view is 0 column Data is 491
INFO  - 2014-03-29 11:24:58 -->  column name inside view is 1 column Data is 618
INFO  - 2014-03-29 11:24:58 -->  column name inside view is 2 column Data is 1
INFO  - 2014-03-29 11:24:58 -->  column name inside view is 3 column Data is 515
INFO  - 2014-03-29 11:24:58 -->  column name inside view is 4 column Data is 488
INFO  - 2014-03-29 11:24:58 -->  column name inside view is 5 column Data is 509
INFO  - 2014-03-29 11:24:58 -->  column name inside view is 6 column Data is 487
INFO  - 2014-03-29 11:24:58 -->  column name inside view is 7 column Data is 489
INFO  - 2014-03-29 11:24:58 -->  column name inside view is 8 column Data is 516
INFO  - 2014-03-29 11:24:58 -->  column name inside view is 9 column Data is 641
INFO  - 2014-03-29 11:24:58 -->  column name inside view is 0 column Data is 5
INFO  - 2014-03-29 11:24:58 -->  column name inside view is 1 column Data is 2
INFO  - 2014-03-29 11:24:58 -->  column name inside view is 2 column Data is 3
INFO  - 2014-03-29 11:24:58 -->  column name inside view is 3 column Data is 1
INFO  - 2014-03-29 11:24:58 -->  column name inside view is 4 column Data is 18
INFO  - 2014-03-29 11:24:58 -->  column name inside view is 5 column Data is 15
INFO  - 2014-03-29 11:24:58 -->  column name inside view is 6 column Data is 14
INFO  - 2014-03-29 11:24:58 -->  column name inside view is 7 column Data is 6
INFO  - 2014-03-29 11:24:58 -->  column name inside view is 8 column Data is 43
INFO  - 2014-03-29 11:24:58 -->  column name inside view is 9 column Data is 9
INFO  - 2014-03-29 11:24:58 -->  column name inside view is 0 column Data is Male Doctor
INFO  - 2014-03-29 11:24:58 -->  column name inside view is 1 column Data is Ordinary User
DEBUG - 2014-03-29 11:24:58 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2014-03-29 11:24:58 --> Final output sent to browser
DEBUG - 2014-03-29 11:24:58 --> Total execution time: 0.0960
DEBUG - 2014-03-29 11:24:58 --> Config Class Initialized
DEBUG - 2014-03-29 11:24:58 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:24:58 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:24:58 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:24:58 --> URI Class Initialized
DEBUG - 2014-03-29 11:24:58 --> Router Class Initialized
ERROR - 2014-03-29 11:24:58 --> 404 Page Not Found --> css
DEBUG - 2014-03-29 11:25:20 --> Config Class Initialized
DEBUG - 2014-03-29 11:25:20 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:25:20 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:25:20 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:25:20 --> URI Class Initialized
DEBUG - 2014-03-29 11:25:20 --> Router Class Initialized
DEBUG - 2014-03-29 11:25:20 --> Output Class Initialized
DEBUG - 2014-03-29 11:25:20 --> Security Class Initialized
DEBUG - 2014-03-29 11:25:20 --> Input Class Initialized
DEBUG - 2014-03-29 11:25:20 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:25:20 --> Language Class Initialized
DEBUG - 2014-03-29 11:25:20 --> Loader Class Initialized
DEBUG - 2014-03-29 11:25:20 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:25:20 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:25:20 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:25:20 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:25:20 --> Session Class Initialized
DEBUG - 2014-03-29 11:25:20 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:25:20 --> Session routines successfully run
DEBUG - 2014-03-29 11:25:20 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:25:20 --> Controller Class Initialized
DEBUG - 2014-03-29 11:25:20 --> Model Class Initialized
DEBUG - 2014-03-29 11:25:20 --> Model Class Initialized
DEBUG - 2014-03-29 11:25:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:25:20 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:25:20 --> after session initialization................
INFO  - 2014-03-29 11:25:20 --> inside the create comment page.................
INFO  - 2014-03-29 11:25:20 --> before inserting into drug comment.................
INFO  - 2014-03-29 11:25:20 --> after inserting into drug comment.................7
INFO  - 2014-03-29 11:25:20 --> the status of the transaction is...........1 the insert id is ......7
INFO  - 2014-03-29 11:25:20 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-03-29 11:25:20 --> SELECT dc.id_drugcomment as id, dc.comment, dc.time_created, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
WHERE `dc`.`id_drugcomment` > '6'
ORDER BY `dc`.`id_drugcomment` asc
INFO  - 2014-03-29 11:25:20 --> inside retrieving comments member type id and drug id is 1
INFO  - 2014-03-29 11:25:20 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
DEBUG - 2014-03-29 11:25:20 --> Final output sent to browser
DEBUG - 2014-03-29 11:25:20 --> Total execution time: 0.1390
DEBUG - 2014-03-29 11:25:30 --> Config Class Initialized
DEBUG - 2014-03-29 11:25:30 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:25:30 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:25:30 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:25:30 --> URI Class Initialized
DEBUG - 2014-03-29 11:25:30 --> Router Class Initialized
DEBUG - 2014-03-29 11:25:30 --> Output Class Initialized
DEBUG - 2014-03-29 11:25:30 --> Security Class Initialized
DEBUG - 2014-03-29 11:25:30 --> Input Class Initialized
DEBUG - 2014-03-29 11:25:30 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:25:30 --> Language Class Initialized
DEBUG - 2014-03-29 11:25:30 --> Loader Class Initialized
DEBUG - 2014-03-29 11:25:30 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:25:30 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:25:30 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:25:30 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:25:30 --> Session Class Initialized
DEBUG - 2014-03-29 11:25:30 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:25:30 --> Session routines successfully run
DEBUG - 2014-03-29 11:25:30 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:25:30 --> Controller Class Initialized
DEBUG - 2014-03-29 11:25:30 --> Model Class Initialized
DEBUG - 2014-03-29 11:25:30 --> Model Class Initialized
DEBUG - 2014-03-29 11:25:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:25:30 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:25:30 --> after session initialization................
INFO  - 2014-03-29 11:25:30 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  '36'
INFO  - 2014-03-29 11:25:30 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-03-29 11:25:30 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2014-03-29 11:25:30 --> inside retrieving vacancy for member
INFO  - 2014-03-29 11:25:30 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2014-03-29 11:25:30 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-03-29 11:25:30 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2014-03-29 11:25:30 --> Drugs ::::::::::===>SELECT d.id_drug, d.drug_name, d.drug_description, group_concat(bn.name, ':', bn.id_brandname) as drug_company, group_concat(dcc.name) as drug_brandnames, dcc.id_drugcategory as category_id
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dcc`.`brandname_id`
WHERE `d`.`id_drug` =  '1'
GROUP BY `id_drug`
ORDER BY `d`.`drug_name`, `bn`.`id_brandname`
INFO  - 2014-03-29 11:25:30 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drugcategory_id` = `dc`.`id_drugcategory`
JOIN `drug` d ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2014-03-29 11:25:30 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2014-03-29 11:25:30 --> inside retrieving pharmacy for drug id is 1
INFO  - 2014-03-29 11:25:30 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2014-03-29 11:25:30 --> Related drugs ::::::::::===>SELECT d.drug_name
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcg`.`drugcategory_id` = `dcc`.`id_drugcategory`
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
WHERE `dcc`.`brandname_id` =  '0'
AND `dc`.`id_drugclass` =  '0'
INFO  - 2014-03-29 11:25:30 --> inside retrieve most searched drugs
INFO  - 2014-03-29 11:25:30 --> SELECT `d`.`id_drug` as id, `d`.`drug_name` as name, count(ds.id_drugsearch) as search_count
FROM (`drug_search` ds)
JOIN `drug` d ON `d`.`id_drug` = `ds`.`drug_id`
GROUP BY `d`.`id_drug`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-03-29 11:25:30 --> inside retrieve most searched pharmacy
INFO  - 2014-03-29 11:25:30 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-03-29 11:25:30 --> inside retrieve most searched article
INFO  - 2014-03-29 11:25:30 --> SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description, count(ats.article_id) as search_count
FROM (`article_search` ats)
JOIN `article` a ON `a`.`id_article` = `ats`.`article_id`
JOIN `news` n ON `a`.`newsid_news` = `n`.`id_news`
GROUP BY `a`.`id_article`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-03-29 11:25:30 --> The session id is ========>7ae3dc9dd094b37b140510d0681fe36d and the member id is =======>36
INFO  - 2014-03-29 11:25:30 -->  column name inside view is 0 column Data is 491
INFO  - 2014-03-29 11:25:30 -->  column name inside view is 1 column Data is 618
INFO  - 2014-03-29 11:25:30 -->  column name inside view is 2 column Data is 1
INFO  - 2014-03-29 11:25:30 -->  column name inside view is 3 column Data is 515
INFO  - 2014-03-29 11:25:30 -->  column name inside view is 4 column Data is 488
INFO  - 2014-03-29 11:25:30 -->  column name inside view is 5 column Data is 509
INFO  - 2014-03-29 11:25:30 -->  column name inside view is 6 column Data is 487
INFO  - 2014-03-29 11:25:30 -->  column name inside view is 7 column Data is 489
INFO  - 2014-03-29 11:25:30 -->  column name inside view is 8 column Data is 516
INFO  - 2014-03-29 11:25:30 -->  column name inside view is 9 column Data is 641
INFO  - 2014-03-29 11:25:30 -->  column name inside view is 0 column Data is 5
INFO  - 2014-03-29 11:25:30 -->  column name inside view is 1 column Data is 2
INFO  - 2014-03-29 11:25:30 -->  column name inside view is 2 column Data is 3
INFO  - 2014-03-29 11:25:30 -->  column name inside view is 3 column Data is 1
INFO  - 2014-03-29 11:25:30 -->  column name inside view is 4 column Data is 18
INFO  - 2014-03-29 11:25:30 -->  column name inside view is 5 column Data is 15
INFO  - 2014-03-29 11:25:30 -->  column name inside view is 6 column Data is 14
INFO  - 2014-03-29 11:25:30 -->  column name inside view is 7 column Data is 6
INFO  - 2014-03-29 11:25:30 -->  column name inside view is 8 column Data is 43
INFO  - 2014-03-29 11:25:30 -->  column name inside view is 9 column Data is 9
INFO  - 2014-03-29 11:25:30 -->  column name inside view is 0 column Data is Male Doctor
INFO  - 2014-03-29 11:25:30 -->  column name inside view is 1 column Data is Ordinary User
DEBUG - 2014-03-29 11:25:30 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2014-03-29 11:25:30 --> Final output sent to browser
DEBUG - 2014-03-29 11:25:30 --> Total execution time: 0.0880
DEBUG - 2014-03-29 11:25:31 --> Config Class Initialized
DEBUG - 2014-03-29 11:25:31 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:25:31 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:25:31 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:25:31 --> URI Class Initialized
DEBUG - 2014-03-29 11:25:31 --> Router Class Initialized
ERROR - 2014-03-29 11:25:31 --> 404 Page Not Found --> css
DEBUG - 2014-03-29 11:25:32 --> Config Class Initialized
DEBUG - 2014-03-29 11:25:32 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:25:32 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:25:32 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:25:32 --> URI Class Initialized
DEBUG - 2014-03-29 11:25:32 --> Router Class Initialized
DEBUG - 2014-03-29 11:25:32 --> Output Class Initialized
DEBUG - 2014-03-29 11:25:32 --> Security Class Initialized
DEBUG - 2014-03-29 11:25:32 --> Input Class Initialized
DEBUG - 2014-03-29 11:25:32 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:25:32 --> Language Class Initialized
DEBUG - 2014-03-29 11:25:32 --> Loader Class Initialized
DEBUG - 2014-03-29 11:25:32 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:25:32 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:25:32 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:25:32 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:25:32 --> Session Class Initialized
DEBUG - 2014-03-29 11:25:32 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:25:32 --> Session routines successfully run
DEBUG - 2014-03-29 11:25:32 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:25:32 --> Controller Class Initialized
DEBUG - 2014-03-29 11:25:32 --> Model Class Initialized
DEBUG - 2014-03-29 11:25:32 --> Model Class Initialized
DEBUG - 2014-03-29 11:25:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:25:32 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:25:32 --> after session initialization................
INFO  - 2014-03-29 11:25:32 --> last news id is 0
INFO  - 2014-03-29 11:25:32 --> SELECT a.id_article as id, a.title as newsletter_title, a.description as newsletter_description, a.guestonly as guestonly, a.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`article` a)
JOIN `member` m ON `a`.`memberid_member` = `m`.`id_member`
WHERE `a`.`id_article` <> 0
ORDER BY `a`.`id_article` desc
LIMIT 15
INFO  - 2014-03-29 11:25:32 --> after newsleters list has been clicked.................
INFO  - 2014-03-29 11:25:32 --> The session id is ========>7ae3dc9dd094b37b140510d0681fe36d and the member id is =======>36
INFO  - 2014-03-29 11:25:32 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=31&article_type=newsletter_title
INFO  - 2014-03-29 11:25:32 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=16&article_type=newsletter_title
INFO  - 2014-03-29 11:25:32 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=15&article_type=newsletter_title
INFO  - 2014-03-29 11:25:32 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=14&article_type=newsletter_title
INFO  - 2014-03-29 11:25:32 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=13&article_type=newsletter_title
INFO  - 2014-03-29 11:25:32 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=12&article_type=newsletter_title
INFO  - 2014-03-29 11:25:32 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=11&article_type=newsletter_title
INFO  - 2014-03-29 11:25:32 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=10&article_type=newsletter_title
INFO  - 2014-03-29 11:25:32 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=9&article_type=newsletter_title
INFO  - 2014-03-29 11:25:32 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=8&article_type=newsletter_title
INFO  - 2014-03-29 11:25:32 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=7&article_type=newsletter_title
INFO  - 2014-03-29 11:25:32 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=6&article_type=newsletter_title
INFO  - 2014-03-29 11:25:32 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=5&article_type=newsletter_title
INFO  - 2014-03-29 11:25:32 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=4&article_type=newsletter_title
INFO  - 2014-03-29 11:25:32 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=3&article_type=newsletter_title
DEBUG - 2014-03-29 11:25:32 --> File loaded: ../pharmaray-application/views/articles.php
DEBUG - 2014-03-29 11:25:32 --> Final output sent to browser
DEBUG - 2014-03-29 11:25:32 --> Total execution time: 0.0630
DEBUG - 2014-03-29 11:26:03 --> Config Class Initialized
DEBUG - 2014-03-29 11:26:03 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:26:03 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:26:03 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:26:03 --> URI Class Initialized
DEBUG - 2014-03-29 11:26:03 --> Router Class Initialized
DEBUG - 2014-03-29 11:26:03 --> Output Class Initialized
DEBUG - 2014-03-29 11:26:03 --> Security Class Initialized
DEBUG - 2014-03-29 11:26:03 --> Input Class Initialized
DEBUG - 2014-03-29 11:26:03 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:26:03 --> Language Class Initialized
DEBUG - 2014-03-29 11:26:03 --> Loader Class Initialized
DEBUG - 2014-03-29 11:26:03 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:26:03 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:26:03 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:26:03 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:26:03 --> Session Class Initialized
DEBUG - 2014-03-29 11:26:03 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:26:03 --> Session routines successfully run
DEBUG - 2014-03-29 11:26:03 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:26:03 --> Controller Class Initialized
DEBUG - 2014-03-29 11:26:03 --> Model Class Initialized
DEBUG - 2014-03-29 11:26:03 --> Model Class Initialized
DEBUG - 2014-03-29 11:26:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:26:03 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:26:03 --> after session initialization................
DEBUG - 2014-03-29 11:26:03 --> Config Class Initialized
DEBUG - 2014-03-29 11:26:03 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:26:03 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:26:03 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:26:03 --> URI Class Initialized
DEBUG - 2014-03-29 11:26:03 --> Router Class Initialized
DEBUG - 2014-03-29 11:26:03 --> No URI present. Default controller set.
DEBUG - 2014-03-29 11:26:03 --> Output Class Initialized
DEBUG - 2014-03-29 11:26:03 --> Security Class Initialized
DEBUG - 2014-03-29 11:26:03 --> Input Class Initialized
DEBUG - 2014-03-29 11:26:03 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:26:03 --> Language Class Initialized
DEBUG - 2014-03-29 11:26:03 --> Loader Class Initialized
DEBUG - 2014-03-29 11:26:03 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:26:03 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:26:03 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:26:03 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:26:03 --> Session Class Initialized
DEBUG - 2014-03-29 11:26:03 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:26:03 --> A session cookie was not found.
DEBUG - 2014-03-29 11:26:03 --> Session routines successfully run
DEBUG - 2014-03-29 11:26:03 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:26:03 --> Controller Class Initialized
DEBUG - 2014-03-29 11:26:03 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2014-03-29 11:26:03 --> Final output sent to browser
DEBUG - 2014-03-29 11:26:03 --> Total execution time: 0.0410
DEBUG - 2014-03-29 11:26:03 --> Config Class Initialized
DEBUG - 2014-03-29 11:26:03 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:26:03 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:26:03 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:26:03 --> URI Class Initialized
DEBUG - 2014-03-29 11:26:03 --> Router Class Initialized
DEBUG - 2014-03-29 11:26:03 --> Output Class Initialized
DEBUG - 2014-03-29 11:26:03 --> Security Class Initialized
DEBUG - 2014-03-29 11:26:03 --> Input Class Initialized
DEBUG - 2014-03-29 11:26:03 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:26:03 --> Language Class Initialized
DEBUG - 2014-03-29 11:26:03 --> Loader Class Initialized
DEBUG - 2014-03-29 11:26:03 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:26:03 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:26:03 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:26:03 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:26:03 --> Session Class Initialized
DEBUG - 2014-03-29 11:26:03 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:26:03 --> Session routines successfully run
DEBUG - 2014-03-29 11:26:03 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:26:03 --> Controller Class Initialized
DEBUG - 2014-03-29 11:26:03 --> Model Class Initialized
DEBUG - 2014-03-29 11:26:03 --> Model Class Initialized
DEBUG - 2014-03-29 11:26:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:26:03 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:26:03 --> after session initialization................
INFO  - 2014-03-29 11:26:03 --> after rays has been clicked.................
INFO  - 2014-03-29 11:26:03 --> last article id is 0
INFO  - 2014-03-29 11:26:03 --> The session id is ========>a19bf04241521d02981231f80d4a2adb and the member id is =======>
INFO  - 2014-03-29 11:26:03 --> The session id is ========>a19bf04241521d02981231f80d4a2adb and the member id is =======>
INFO  - 2014-03-29 11:26:03 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:26:03 --> 0 the guest only data>>>>>
INFO  - 2014-03-29 11:26:03 --> 0 the guest only data>> AFTER >>>#31
INFO  - 2014-03-29 11:26:03 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:26:03 --> 0 the guest only data>>>>>#31
INFO  - 2014-03-29 11:26:03 --> 0 the guest only data>> AFTER >>>#16
INFO  - 2014-03-29 11:26:03 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:26:03 --> 1 the guest only data>>>>>#16
INFO  - 2014-03-29 11:26:03 --> 1 the guest only data>> AFTER >>>#16
INFO  - 2014-03-29 11:26:03 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:26:03 --> 0 the guest only data>>>>>#16
INFO  - 2014-03-29 11:26:03 --> 0 the guest only data>> AFTER >>>#14
INFO  - 2014-03-29 11:26:03 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:26:03 --> 1 the guest only data>>>>>#14
INFO  - 2014-03-29 11:26:03 --> 1 the guest only data>> AFTER >>>#14
INFO  - 2014-03-29 11:26:03 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:26:03 --> 0 the guest only data>>>>>#14
INFO  - 2014-03-29 11:26:03 --> 0 the guest only data>> AFTER >>>#12
INFO  - 2014-03-29 11:26:03 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:26:03 --> 1 the guest only data>>>>>#12
INFO  - 2014-03-29 11:26:03 --> 1 the guest only data>> AFTER >>>#12
INFO  - 2014-03-29 11:26:03 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:26:03 --> 0 the guest only data>>>>>#12
INFO  - 2014-03-29 11:26:03 --> 0 the guest only data>> AFTER >>>#10
INFO  - 2014-03-29 11:26:03 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:26:03 --> 0 the guest only data>>>>>#10
INFO  - 2014-03-29 11:26:03 --> 0 the guest only data>> AFTER >>>#9
INFO  - 2014-03-29 11:26:03 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:26:03 --> 1 the guest only data>>>>>#9
INFO  - 2014-03-29 11:26:03 --> 1 the guest only data>> AFTER >>>#9
INFO  - 2014-03-29 11:26:03 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:26:03 --> 0 the guest only data>>>>>#9
INFO  - 2014-03-29 11:26:03 --> 0 the guest only data>> AFTER >>>#7
INFO  - 2014-03-29 11:26:03 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:26:03 --> 1 the guest only data>>>>>#7
INFO  - 2014-03-29 11:26:03 --> 1 the guest only data>> AFTER >>>#7
INFO  - 2014-03-29 11:26:03 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:26:03 --> 0 the guest only data>>>>>#7
INFO  - 2014-03-29 11:26:03 --> 0 the guest only data>> AFTER >>>#5
INFO  - 2014-03-29 11:26:03 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:26:03 --> 0 the guest only data>>>>>#5
INFO  - 2014-03-29 11:26:03 --> 0 the guest only data>> AFTER >>>#4
INFO  - 2014-03-29 11:26:03 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:26:03 --> 1 the guest only data>>>>>#4
INFO  - 2014-03-29 11:26:03 --> 1 the guest only data>> AFTER >>>#4
INFO  - 2014-03-29 11:26:03 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:26:03 --> 1 the guest only data>>>>>#4
INFO  - 2014-03-29 11:26:03 --> 1 the guest only data>> AFTER >>>#4
INFO  - 2014-03-29 11:26:03 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:26:03 --> 1 the guest only data>>>>>#4
INFO  - 2014-03-29 11:26:03 --> 1 the guest only data>> AFTER >>>#4
DEBUG - 2014-03-29 11:26:03 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2014-03-29 11:26:03 --> Final output sent to browser
DEBUG - 2014-03-29 11:26:03 --> Total execution time: 0.0710
DEBUG - 2014-03-29 11:26:13 --> Config Class Initialized
DEBUG - 2014-03-29 11:26:13 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:26:13 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:26:13 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:26:13 --> URI Class Initialized
DEBUG - 2014-03-29 11:26:13 --> Router Class Initialized
DEBUG - 2014-03-29 11:26:13 --> Output Class Initialized
DEBUG - 2014-03-29 11:26:13 --> Security Class Initialized
DEBUG - 2014-03-29 11:26:13 --> Input Class Initialized
DEBUG - 2014-03-29 11:26:13 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:26:13 --> Language Class Initialized
DEBUG - 2014-03-29 11:26:13 --> Loader Class Initialized
DEBUG - 2014-03-29 11:26:13 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:26:13 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:26:13 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:26:13 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:26:13 --> Session Class Initialized
DEBUG - 2014-03-29 11:26:13 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:26:13 --> Session routines successfully run
DEBUG - 2014-03-29 11:26:13 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:26:13 --> Controller Class Initialized
DEBUG - 2014-03-29 11:26:13 --> Model Class Initialized
DEBUG - 2014-03-29 11:26:13 --> Model Class Initialized
DEBUG - 2014-03-29 11:26:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:26:13 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:26:13 --> after session initialization................
INFO  - 2014-03-29 11:26:13 --> inside rays login auth.............sys_admin/user_authorization/redirecttorays
INFO  - 2014-03-29 11:26:13 --> inside rays login auth.............sys_admin/user_authorization/redirecttorays
DEBUG - 2014-03-29 11:26:13 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2014-03-29 11:26:13 --> XSS Filtering completed
DEBUG - 2014-03-29 11:26:13 --> XSS Filtering completed
INFO  - 2014-03-29 11:26:13 --> login details ::::::::::===>SELECT `ld`.*
FROM (`logindetails` ld)
WHERE lower(ld.username) =  'yetunde@gmail.com'
INFO  - 2014-03-29 11:26:13 --> before getting the relation of member............35
INFO  - 2014-03-29 11:26:13 --> registration complete and username set on userpage.................Yetunde
INFO  - 2014-03-29 11:26:13 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  '35'
INFO  - 2014-03-29 11:26:13 --> after newsleters list has been clicked.................
INFO  - 2014-03-29 11:26:13 --> drugcategory ::::::::::===>SELECT `dc`.`id_drugcategory`, `dc`.`name`
FROM (`drugcategory` dc)
ORDER BY `dc`.`name`
INFO  - 2014-03-29 11:26:13 --> The session id is ========>a19bf04241521d02981231f80d4a2adb and the member id is =======>35
DEBUG - 2014-03-29 11:26:13 --> File loaded: ../pharmaray-application/views/adminpage.php
DEBUG - 2014-03-29 11:26:13 --> Final output sent to browser
DEBUG - 2014-03-29 11:26:13 --> Total execution time: 0.0600
DEBUG - 2014-03-29 11:26:13 --> Config Class Initialized
DEBUG - 2014-03-29 11:26:13 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:26:13 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:26:13 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:26:13 --> URI Class Initialized
DEBUG - 2014-03-29 11:26:13 --> Router Class Initialized
ERROR - 2014-03-29 11:26:13 --> 404 Page Not Found --> css
DEBUG - 2014-03-29 11:28:37 --> Config Class Initialized
DEBUG - 2014-03-29 11:28:37 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:28:37 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:28:37 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:28:37 --> URI Class Initialized
DEBUG - 2014-03-29 11:28:37 --> Router Class Initialized
DEBUG - 2014-03-29 11:28:37 --> Output Class Initialized
DEBUG - 2014-03-29 11:28:37 --> Security Class Initialized
DEBUG - 2014-03-29 11:28:37 --> Input Class Initialized
DEBUG - 2014-03-29 11:28:37 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:28:37 --> Language Class Initialized
DEBUG - 2014-03-29 11:28:37 --> Loader Class Initialized
DEBUG - 2014-03-29 11:28:37 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:28:37 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:28:37 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:28:37 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:28:37 --> Session Class Initialized
DEBUG - 2014-03-29 11:28:37 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:28:37 --> Session routines successfully run
DEBUG - 2014-03-29 11:28:37 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:28:37 --> Controller Class Initialized
DEBUG - 2014-03-29 11:28:37 --> Model Class Initialized
DEBUG - 2014-03-29 11:28:37 --> Model Class Initialized
DEBUG - 2014-03-29 11:28:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:28:37 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:28:37 --> after session initialization................
INFO  - 2014-03-29 11:28:37 --> after brands list has been clicked.................
INFO  - 2014-03-29 11:28:37 --> brand name ::::::::::===>SELECT `bn`.`id_brandname`, `bn`.`name`
FROM (`brandname` bn)
ORDER BY `bn`.`name`
INFO  - 2014-03-29 11:28:37 --> The session id is ========>a19bf04241521d02981231f80d4a2adb and the member id is =======>35
DEBUG - 2014-03-29 11:28:37 --> File loaded: ../pharmaray-application/views/adminpagebrands.php
DEBUG - 2014-03-29 11:28:37 --> Final output sent to browser
DEBUG - 2014-03-29 11:28:37 --> Total execution time: 0.0530
DEBUG - 2014-03-29 11:28:37 --> Config Class Initialized
DEBUG - 2014-03-29 11:28:37 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:28:37 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:28:37 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:28:37 --> URI Class Initialized
DEBUG - 2014-03-29 11:28:37 --> Router Class Initialized
ERROR - 2014-03-29 11:28:37 --> 404 Page Not Found --> css
DEBUG - 2014-03-29 11:33:54 --> Config Class Initialized
DEBUG - 2014-03-29 11:33:54 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:33:54 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:33:54 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:33:54 --> URI Class Initialized
DEBUG - 2014-03-29 11:33:54 --> Router Class Initialized
DEBUG - 2014-03-29 11:33:54 --> Output Class Initialized
DEBUG - 2014-03-29 11:33:54 --> Security Class Initialized
DEBUG - 2014-03-29 11:33:54 --> Input Class Initialized
DEBUG - 2014-03-29 11:33:54 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:33:54 --> Language Class Initialized
DEBUG - 2014-03-29 11:33:54 --> Loader Class Initialized
DEBUG - 2014-03-29 11:33:54 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:33:54 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:33:54 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:33:54 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:33:54 --> Session Class Initialized
DEBUG - 2014-03-29 11:33:54 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:33:54 --> Session routines successfully run
DEBUG - 2014-03-29 11:33:54 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:33:54 --> Controller Class Initialized
DEBUG - 2014-03-29 11:33:54 --> Model Class Initialized
DEBUG - 2014-03-29 11:33:54 --> Model Class Initialized
DEBUG - 2014-03-29 11:33:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:33:54 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:33:54 --> after session initialization................
INFO  - 2014-03-29 11:33:54 --> after brands list has been clicked.................
INFO  - 2014-03-29 11:33:54 --> brand name ::::::::::===>SELECT `bn`.`id_brandname`, `bn`.`name`
FROM (`brandname` bn)
ORDER BY `bn`.`name`
INFO  - 2014-03-29 11:33:54 --> The session id is ========>c85351b61f674cd067bc95cea03de2b4 and the member id is =======>35
DEBUG - 2014-03-29 11:33:54 --> File loaded: ../pharmaray-application/views/adminpagebrands.php
DEBUG - 2014-03-29 11:33:54 --> Final output sent to browser
DEBUG - 2014-03-29 11:33:54 --> Total execution time: 0.0470
DEBUG - 2014-03-29 11:33:54 --> Config Class Initialized
DEBUG - 2014-03-29 11:33:54 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:33:54 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:33:54 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:33:54 --> URI Class Initialized
DEBUG - 2014-03-29 11:33:54 --> Router Class Initialized
ERROR - 2014-03-29 11:33:54 --> 404 Page Not Found --> css
DEBUG - 2014-03-29 11:37:21 --> Config Class Initialized
DEBUG - 2014-03-29 11:37:21 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:37:21 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:37:21 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:37:21 --> URI Class Initialized
DEBUG - 2014-03-29 11:37:21 --> Router Class Initialized
DEBUG - 2014-03-29 11:37:21 --> Output Class Initialized
DEBUG - 2014-03-29 11:37:21 --> Security Class Initialized
DEBUG - 2014-03-29 11:37:21 --> Input Class Initialized
DEBUG - 2014-03-29 11:37:21 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:37:21 --> Language Class Initialized
DEBUG - 2014-03-29 11:37:21 --> Loader Class Initialized
DEBUG - 2014-03-29 11:37:21 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:37:21 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:37:21 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:37:21 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:37:21 --> Session Class Initialized
DEBUG - 2014-03-29 11:37:21 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:37:21 --> Session routines successfully run
DEBUG - 2014-03-29 11:37:21 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:37:21 --> Controller Class Initialized
DEBUG - 2014-03-29 11:37:21 --> Model Class Initialized
DEBUG - 2014-03-29 11:37:21 --> Model Class Initialized
DEBUG - 2014-03-29 11:37:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:37:21 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:37:21 --> after session initialization................
DEBUG - 2014-03-29 11:37:21 --> Config Class Initialized
DEBUG - 2014-03-29 11:37:21 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:37:21 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:37:21 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:37:21 --> URI Class Initialized
DEBUG - 2014-03-29 11:37:21 --> Router Class Initialized
DEBUG - 2014-03-29 11:37:21 --> No URI present. Default controller set.
DEBUG - 2014-03-29 11:37:21 --> Output Class Initialized
DEBUG - 2014-03-29 11:37:21 --> Security Class Initialized
DEBUG - 2014-03-29 11:37:21 --> Input Class Initialized
DEBUG - 2014-03-29 11:37:21 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:37:21 --> Language Class Initialized
DEBUG - 2014-03-29 11:37:21 --> Loader Class Initialized
DEBUG - 2014-03-29 11:37:21 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:37:21 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:37:21 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:37:21 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:37:21 --> Session Class Initialized
DEBUG - 2014-03-29 11:37:21 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:37:21 --> A session cookie was not found.
DEBUG - 2014-03-29 11:37:21 --> Session routines successfully run
DEBUG - 2014-03-29 11:37:21 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:37:21 --> Controller Class Initialized
DEBUG - 2014-03-29 11:37:21 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2014-03-29 11:37:21 --> Final output sent to browser
DEBUG - 2014-03-29 11:37:21 --> Total execution time: 0.0390
DEBUG - 2014-03-29 11:37:21 --> Config Class Initialized
DEBUG - 2014-03-29 11:37:21 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:37:21 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:37:21 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:37:21 --> URI Class Initialized
DEBUG - 2014-03-29 11:37:22 --> Router Class Initialized
DEBUG - 2014-03-29 11:37:22 --> Output Class Initialized
DEBUG - 2014-03-29 11:37:22 --> Security Class Initialized
DEBUG - 2014-03-29 11:37:22 --> Input Class Initialized
DEBUG - 2014-03-29 11:37:22 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:37:22 --> Language Class Initialized
DEBUG - 2014-03-29 11:37:22 --> Loader Class Initialized
DEBUG - 2014-03-29 11:37:22 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:37:22 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:37:22 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:37:22 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:37:22 --> Session Class Initialized
DEBUG - 2014-03-29 11:37:22 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:37:22 --> Session routines successfully run
DEBUG - 2014-03-29 11:37:22 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:37:22 --> Controller Class Initialized
DEBUG - 2014-03-29 11:37:22 --> Model Class Initialized
DEBUG - 2014-03-29 11:37:22 --> Model Class Initialized
DEBUG - 2014-03-29 11:37:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:37:22 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:37:22 --> after session initialization................
INFO  - 2014-03-29 11:37:22 --> after rays has been clicked.................
INFO  - 2014-03-29 11:37:22 --> last article id is 0
INFO  - 2014-03-29 11:37:22 --> The session id is ========>82c6709e89169104ebb469aae681116b and the member id is =======>
INFO  - 2014-03-29 11:37:22 --> The session id is ========>82c6709e89169104ebb469aae681116b and the member id is =======>
INFO  - 2014-03-29 11:37:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:37:22 --> 0 the guest only data>>>>>
INFO  - 2014-03-29 11:37:22 --> 0 the guest only data>> AFTER >>>#31
INFO  - 2014-03-29 11:37:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:37:22 --> 0 the guest only data>>>>>#31
INFO  - 2014-03-29 11:37:22 --> 0 the guest only data>> AFTER >>>#16
INFO  - 2014-03-29 11:37:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:37:22 --> 1 the guest only data>>>>>#16
INFO  - 2014-03-29 11:37:22 --> 1 the guest only data>> AFTER >>>#16
INFO  - 2014-03-29 11:37:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:37:22 --> 0 the guest only data>>>>>#16
INFO  - 2014-03-29 11:37:22 --> 0 the guest only data>> AFTER >>>#14
INFO  - 2014-03-29 11:37:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:37:22 --> 1 the guest only data>>>>>#14
INFO  - 2014-03-29 11:37:22 --> 1 the guest only data>> AFTER >>>#14
INFO  - 2014-03-29 11:37:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:37:22 --> 0 the guest only data>>>>>#14
INFO  - 2014-03-29 11:37:22 --> 0 the guest only data>> AFTER >>>#12
INFO  - 2014-03-29 11:37:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:37:22 --> 1 the guest only data>>>>>#12
INFO  - 2014-03-29 11:37:22 --> 1 the guest only data>> AFTER >>>#12
INFO  - 2014-03-29 11:37:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:37:22 --> 0 the guest only data>>>>>#12
INFO  - 2014-03-29 11:37:22 --> 0 the guest only data>> AFTER >>>#10
INFO  - 2014-03-29 11:37:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:37:22 --> 0 the guest only data>>>>>#10
INFO  - 2014-03-29 11:37:22 --> 0 the guest only data>> AFTER >>>#9
INFO  - 2014-03-29 11:37:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:37:22 --> 1 the guest only data>>>>>#9
INFO  - 2014-03-29 11:37:22 --> 1 the guest only data>> AFTER >>>#9
INFO  - 2014-03-29 11:37:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:37:22 --> 0 the guest only data>>>>>#9
INFO  - 2014-03-29 11:37:22 --> 0 the guest only data>> AFTER >>>#7
INFO  - 2014-03-29 11:37:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:37:22 --> 1 the guest only data>>>>>#7
INFO  - 2014-03-29 11:37:22 --> 1 the guest only data>> AFTER >>>#7
INFO  - 2014-03-29 11:37:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:37:22 --> 0 the guest only data>>>>>#7
INFO  - 2014-03-29 11:37:22 --> 0 the guest only data>> AFTER >>>#5
INFO  - 2014-03-29 11:37:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:37:22 --> 0 the guest only data>>>>>#5
INFO  - 2014-03-29 11:37:22 --> 0 the guest only data>> AFTER >>>#4
INFO  - 2014-03-29 11:37:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:37:22 --> 1 the guest only data>>>>>#4
INFO  - 2014-03-29 11:37:22 --> 1 the guest only data>> AFTER >>>#4
INFO  - 2014-03-29 11:37:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:37:22 --> 1 the guest only data>>>>>#4
INFO  - 2014-03-29 11:37:22 --> 1 the guest only data>> AFTER >>>#4
INFO  - 2014-03-29 11:37:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 11:37:22 --> 1 the guest only data>>>>>#4
INFO  - 2014-03-29 11:37:22 --> 1 the guest only data>> AFTER >>>#4
DEBUG - 2014-03-29 11:37:22 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2014-03-29 11:37:22 --> Final output sent to browser
DEBUG - 2014-03-29 11:37:22 --> Total execution time: 0.0770
DEBUG - 2014-03-29 11:37:23 --> Config Class Initialized
DEBUG - 2014-03-29 11:37:23 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:37:23 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:37:23 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:37:23 --> URI Class Initialized
DEBUG - 2014-03-29 11:37:23 --> Router Class Initialized
DEBUG - 2014-03-29 11:37:23 --> Output Class Initialized
DEBUG - 2014-03-29 11:37:23 --> Security Class Initialized
DEBUG - 2014-03-29 11:37:23 --> Input Class Initialized
DEBUG - 2014-03-29 11:37:23 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 11:37:23 --> Language Class Initialized
DEBUG - 2014-03-29 11:37:23 --> Loader Class Initialized
DEBUG - 2014-03-29 11:37:23 --> Helper loaded: form_helper
DEBUG - 2014-03-29 11:37:23 --> Helper loaded: url_helper
DEBUG - 2014-03-29 11:37:23 --> Helper loaded: html_helper
DEBUG - 2014-03-29 11:37:23 --> Database Driver Class Initialized
DEBUG - 2014-03-29 11:37:23 --> Session Class Initialized
DEBUG - 2014-03-29 11:37:23 --> Helper loaded: string_helper
DEBUG - 2014-03-29 11:37:23 --> Session routines successfully run
DEBUG - 2014-03-29 11:37:23 --> Form Validation Class Initialized
DEBUG - 2014-03-29 11:37:23 --> Controller Class Initialized
DEBUG - 2014-03-29 11:37:23 --> Model Class Initialized
DEBUG - 2014-03-29 11:37:23 --> Model Class Initialized
DEBUG - 2014-03-29 11:37:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 11:37:23 --> Encrypt Class Initialized
INFO  - 2014-03-29 11:37:23 --> after session initialization................
INFO  - 2014-03-29 11:37:23 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  ''
INFO  - 2014-03-29 11:37:23 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-03-29 11:37:23 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2014-03-29 11:37:23 --> inside retrieving vacancy for member
INFO  - 2014-03-29 11:37:23 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2014-03-29 11:37:23 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-03-29 11:37:23 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2014-03-29 11:37:23 --> Drugs ::::::::::===>SELECT d.id_drug, d.drug_name, d.drug_description, group_concat(bn.name, ':', bn.id_brandname) as drug_company, group_concat(dcc.name) as drug_brandnames, dcc.id_drugcategory as category_id
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dcc`.`brandname_id`
WHERE `d`.`id_drug` =  '1'
GROUP BY `id_drug`
ORDER BY `d`.`drug_name`, `bn`.`id_brandname`
INFO  - 2014-03-29 11:37:23 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drugcategory_id` = `dc`.`id_drugcategory`
JOIN `drug` d ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2014-03-29 11:37:23 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2014-03-29 11:37:23 --> inside retrieving pharmacy for drug id is 1
INFO  - 2014-03-29 11:37:23 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2014-03-29 11:37:23 --> Related drugs ::::::::::===>SELECT d.drug_name
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcg`.`drugcategory_id` = `dcc`.`id_drugcategory`
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
WHERE `dcc`.`brandname_id` =  '0'
AND `dc`.`id_drugclass` =  '0'
INFO  - 2014-03-29 11:37:23 --> inside retrieve most searched drugs
INFO  - 2014-03-29 11:37:23 --> SELECT `d`.`id_drug` as id, `d`.`drug_name` as name, count(ds.id_drugsearch) as search_count
FROM (`drug_search` ds)
JOIN `drug` d ON `d`.`id_drug` = `ds`.`drug_id`
GROUP BY `d`.`id_drug`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-03-29 11:37:23 --> inside retrieve most searched pharmacy
INFO  - 2014-03-29 11:37:23 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-03-29 11:37:23 --> inside retrieve most searched article
INFO  - 2014-03-29 11:37:23 --> SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description, count(ats.article_id) as search_count
FROM (`article_search` ats)
JOIN `article` a ON `a`.`id_article` = `ats`.`article_id`
JOIN `news` n ON `a`.`newsid_news` = `n`.`id_news`
GROUP BY `a`.`id_article`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-03-29 11:37:23 --> The session id is ========>82c6709e89169104ebb469aae681116b and the member id is =======>
INFO  - 2014-03-29 11:37:23 -->  column name inside view is 0 column Data is 491
INFO  - 2014-03-29 11:37:23 -->  column name inside view is 1 column Data is 618
INFO  - 2014-03-29 11:37:23 -->  column name inside view is 2 column Data is 1
INFO  - 2014-03-29 11:37:23 -->  column name inside view is 3 column Data is 515
INFO  - 2014-03-29 11:37:23 -->  column name inside view is 4 column Data is 488
INFO  - 2014-03-29 11:37:23 -->  column name inside view is 5 column Data is 509
INFO  - 2014-03-29 11:37:23 -->  column name inside view is 6 column Data is 487
INFO  - 2014-03-29 11:37:23 -->  column name inside view is 7 column Data is 489
INFO  - 2014-03-29 11:37:23 -->  column name inside view is 8 column Data is 516
INFO  - 2014-03-29 11:37:23 -->  column name inside view is 9 column Data is 641
INFO  - 2014-03-29 11:37:23 -->  column name inside view is 0 column Data is 5
INFO  - 2014-03-29 11:37:23 -->  column name inside view is 1 column Data is 2
INFO  - 2014-03-29 11:37:23 -->  column name inside view is 2 column Data is 3
INFO  - 2014-03-29 11:37:23 -->  column name inside view is 3 column Data is 1
INFO  - 2014-03-29 11:37:23 -->  column name inside view is 4 column Data is 18
INFO  - 2014-03-29 11:37:23 -->  column name inside view is 5 column Data is 15
INFO  - 2014-03-29 11:37:23 -->  column name inside view is 6 column Data is 14
INFO  - 2014-03-29 11:37:23 -->  column name inside view is 7 column Data is 6
INFO  - 2014-03-29 11:37:23 -->  column name inside view is 8 column Data is 43
INFO  - 2014-03-29 11:37:23 -->  column name inside view is 9 column Data is 9
INFO  - 2014-03-29 11:37:23 -->  column name inside view is 0 column Data is Male Doctor
INFO  - 2014-03-29 11:37:23 -->  column name inside view is 1 column Data is Ordinary User
DEBUG - 2014-03-29 11:37:23 --> File loaded: ../pharmaray-application/views/onlinepharmacy.php
DEBUG - 2014-03-29 11:37:23 --> Final output sent to browser
DEBUG - 2014-03-29 11:37:23 --> Total execution time: 0.1020
DEBUG - 2014-03-29 11:37:23 --> Config Class Initialized
DEBUG - 2014-03-29 11:37:23 --> Hooks Class Initialized
DEBUG - 2014-03-29 11:37:23 --> Utf8 Class Initialized
DEBUG - 2014-03-29 11:37:23 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 11:37:23 --> URI Class Initialized
DEBUG - 2014-03-29 11:37:23 --> Router Class Initialized
ERROR - 2014-03-29 11:37:23 --> 404 Page Not Found --> css
DEBUG - 2014-03-29 12:05:50 --> Config Class Initialized
DEBUG - 2014-03-29 12:05:50 --> Hooks Class Initialized
DEBUG - 2014-03-29 12:05:50 --> Utf8 Class Initialized
DEBUG - 2014-03-29 12:05:50 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 12:05:50 --> URI Class Initialized
DEBUG - 2014-03-29 12:05:50 --> Router Class Initialized
DEBUG - 2014-03-29 12:05:50 --> Output Class Initialized
DEBUG - 2014-03-29 12:05:50 --> Security Class Initialized
DEBUG - 2014-03-29 12:05:50 --> Input Class Initialized
DEBUG - 2014-03-29 12:05:50 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 12:05:50 --> Language Class Initialized
DEBUG - 2014-03-29 12:05:50 --> Loader Class Initialized
DEBUG - 2014-03-29 12:05:50 --> Helper loaded: form_helper
DEBUG - 2014-03-29 12:05:50 --> Helper loaded: url_helper
DEBUG - 2014-03-29 12:05:50 --> Helper loaded: html_helper
DEBUG - 2014-03-29 12:05:50 --> Database Driver Class Initialized
DEBUG - 2014-03-29 12:05:50 --> Session Class Initialized
DEBUG - 2014-03-29 12:05:50 --> Helper loaded: string_helper
DEBUG - 2014-03-29 12:05:50 --> Session routines successfully run
DEBUG - 2014-03-29 12:05:50 --> Form Validation Class Initialized
DEBUG - 2014-03-29 12:05:50 --> Controller Class Initialized
DEBUG - 2014-03-29 12:05:50 --> Model Class Initialized
DEBUG - 2014-03-29 12:05:50 --> Model Class Initialized
DEBUG - 2014-03-29 12:05:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 12:05:50 --> Encrypt Class Initialized
INFO  - 2014-03-29 12:05:50 --> after session initialization................
INFO  - 2014-03-29 12:05:50 --> the form message==>
INFO  - 2014-03-29 12:05:50 --> The session id is ========>b9205cbff01b41bfc550ad6c0b84c8da and the member id is =======>
INFO  - 2014-03-29 12:05:50 --> after the retrieving session list.................//////////
INFO  - 2014-03-29 12:05:50 --> The session id is ========>b9205cbff01b41bfc550ad6c0b84c8da and the member id is =======>
DEBUG - 2014-03-29 12:05:50 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-03-29 12:05:50 --> Final output sent to browser
DEBUG - 2014-03-29 12:05:50 --> Total execution time: 0.0470
DEBUG - 2014-03-29 12:06:01 --> Config Class Initialized
DEBUG - 2014-03-29 12:06:01 --> Hooks Class Initialized
DEBUG - 2014-03-29 12:06:01 --> Utf8 Class Initialized
DEBUG - 2014-03-29 12:06:01 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 12:06:01 --> URI Class Initialized
DEBUG - 2014-03-29 12:06:01 --> Router Class Initialized
DEBUG - 2014-03-29 12:06:01 --> Output Class Initialized
DEBUG - 2014-03-29 12:06:01 --> Security Class Initialized
DEBUG - 2014-03-29 12:06:01 --> Input Class Initialized
DEBUG - 2014-03-29 12:06:01 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 12:06:01 --> Language Class Initialized
DEBUG - 2014-03-29 12:06:01 --> Loader Class Initialized
DEBUG - 2014-03-29 12:06:01 --> Helper loaded: form_helper
DEBUG - 2014-03-29 12:06:01 --> Helper loaded: url_helper
DEBUG - 2014-03-29 12:06:01 --> Helper loaded: html_helper
DEBUG - 2014-03-29 12:06:01 --> Database Driver Class Initialized
DEBUG - 2014-03-29 12:06:01 --> Session Class Initialized
DEBUG - 2014-03-29 12:06:01 --> Helper loaded: string_helper
DEBUG - 2014-03-29 12:06:01 --> Session routines successfully run
DEBUG - 2014-03-29 12:06:01 --> Form Validation Class Initialized
DEBUG - 2014-03-29 12:06:01 --> Controller Class Initialized
DEBUG - 2014-03-29 12:06:01 --> Model Class Initialized
DEBUG - 2014-03-29 12:06:01 --> Model Class Initialized
DEBUG - 2014-03-29 12:06:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 12:06:01 --> Encrypt Class Initialized
INFO  - 2014-03-29 12:06:01 --> after session initialization................
INFO  - 2014-03-29 12:06:01 --> inside rays login auth.............
DEBUG - 2014-03-29 12:06:01 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2014-03-29 12:06:01 --> XSS Filtering completed
DEBUG - 2014-03-29 12:06:01 --> XSS Filtering completed
INFO  - 2014-03-29 12:06:01 --> login details ::::::::::===>SELECT `ld`.*
FROM (`logindetails` ld)
WHERE lower(ld.username) =  'yetunde@gmail.com'
INFO  - 2014-03-29 12:06:01 --> before getting the relation of member............35
INFO  - 2014-03-29 12:06:01 --> registration complete and username set on userpage.................Yetunde
INFO  - 2014-03-29 12:06:01 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  '35'
INFO  - 2014-03-29 12:06:01 --> after newsleters list has been clicked.................
INFO  - 2014-03-29 12:06:01 --> drugcategory ::::::::::===>SELECT `dc`.`id_drugcategory`, `dc`.`name`
FROM (`drugcategory` dc)
ORDER BY `dc`.`name`
INFO  - 2014-03-29 12:06:01 --> The session id is ========>b9205cbff01b41bfc550ad6c0b84c8da and the member id is =======>35
DEBUG - 2014-03-29 12:06:01 --> File loaded: ../pharmaray-application/views/adminpage.php
DEBUG - 2014-03-29 12:06:01 --> Final output sent to browser
DEBUG - 2014-03-29 12:06:01 --> Total execution time: 0.0610
DEBUG - 2014-03-29 12:06:01 --> Config Class Initialized
DEBUG - 2014-03-29 12:06:01 --> Hooks Class Initialized
DEBUG - 2014-03-29 12:06:01 --> Utf8 Class Initialized
DEBUG - 2014-03-29 12:06:01 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 12:06:01 --> URI Class Initialized
DEBUG - 2014-03-29 12:06:01 --> Router Class Initialized
ERROR - 2014-03-29 12:06:01 --> 404 Page Not Found --> css
DEBUG - 2014-03-29 12:08:35 --> Config Class Initialized
DEBUG - 2014-03-29 12:08:35 --> Hooks Class Initialized
DEBUG - 2014-03-29 12:08:35 --> Utf8 Class Initialized
DEBUG - 2014-03-29 12:08:35 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 12:08:35 --> URI Class Initialized
DEBUG - 2014-03-29 12:08:35 --> Router Class Initialized
DEBUG - 2014-03-29 12:08:35 --> Output Class Initialized
DEBUG - 2014-03-29 12:08:35 --> Security Class Initialized
DEBUG - 2014-03-29 12:08:35 --> Input Class Initialized
DEBUG - 2014-03-29 12:08:35 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 12:08:35 --> Language Class Initialized
DEBUG - 2014-03-29 12:08:35 --> Loader Class Initialized
DEBUG - 2014-03-29 12:08:35 --> Helper loaded: form_helper
DEBUG - 2014-03-29 12:08:35 --> Helper loaded: url_helper
DEBUG - 2014-03-29 12:08:35 --> Helper loaded: html_helper
DEBUG - 2014-03-29 12:08:35 --> Database Driver Class Initialized
DEBUG - 2014-03-29 12:08:35 --> Session Class Initialized
DEBUG - 2014-03-29 12:08:35 --> Helper loaded: string_helper
DEBUG - 2014-03-29 12:08:35 --> Session routines successfully run
DEBUG - 2014-03-29 12:08:35 --> Form Validation Class Initialized
DEBUG - 2014-03-29 12:08:35 --> Controller Class Initialized
DEBUG - 2014-03-29 12:08:35 --> Model Class Initialized
DEBUG - 2014-03-29 12:08:35 --> Model Class Initialized
DEBUG - 2014-03-29 12:08:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 12:08:35 --> Encrypt Class Initialized
INFO  - 2014-03-29 12:08:35 --> after session initialization................
DEBUG - 2014-03-29 12:08:35 --> Config Class Initialized
DEBUG - 2014-03-29 12:08:35 --> Hooks Class Initialized
DEBUG - 2014-03-29 12:08:35 --> Utf8 Class Initialized
DEBUG - 2014-03-29 12:08:35 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 12:08:35 --> URI Class Initialized
DEBUG - 2014-03-29 12:08:35 --> Router Class Initialized
DEBUG - 2014-03-29 12:08:35 --> No URI present. Default controller set.
DEBUG - 2014-03-29 12:08:35 --> Output Class Initialized
DEBUG - 2014-03-29 12:08:35 --> Security Class Initialized
DEBUG - 2014-03-29 12:08:35 --> Input Class Initialized
DEBUG - 2014-03-29 12:08:35 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 12:08:35 --> Language Class Initialized
DEBUG - 2014-03-29 12:08:35 --> Loader Class Initialized
DEBUG - 2014-03-29 12:08:35 --> Helper loaded: form_helper
DEBUG - 2014-03-29 12:08:35 --> Helper loaded: url_helper
DEBUG - 2014-03-29 12:08:35 --> Helper loaded: html_helper
DEBUG - 2014-03-29 12:08:35 --> Database Driver Class Initialized
DEBUG - 2014-03-29 12:08:35 --> Session Class Initialized
DEBUG - 2014-03-29 12:08:35 --> Helper loaded: string_helper
DEBUG - 2014-03-29 12:08:35 --> A session cookie was not found.
DEBUG - 2014-03-29 12:08:35 --> Session routines successfully run
DEBUG - 2014-03-29 12:08:35 --> Form Validation Class Initialized
DEBUG - 2014-03-29 12:08:35 --> Controller Class Initialized
DEBUG - 2014-03-29 12:08:35 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2014-03-29 12:08:35 --> Final output sent to browser
DEBUG - 2014-03-29 12:08:35 --> Total execution time: 0.0330
DEBUG - 2014-03-29 12:08:35 --> Config Class Initialized
DEBUG - 2014-03-29 12:08:35 --> Hooks Class Initialized
DEBUG - 2014-03-29 12:08:35 --> Utf8 Class Initialized
DEBUG - 2014-03-29 12:08:35 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 12:08:35 --> URI Class Initialized
DEBUG - 2014-03-29 12:08:35 --> Router Class Initialized
DEBUG - 2014-03-29 12:08:35 --> Output Class Initialized
DEBUG - 2014-03-29 12:08:35 --> Security Class Initialized
DEBUG - 2014-03-29 12:08:35 --> Input Class Initialized
DEBUG - 2014-03-29 12:08:35 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 12:08:35 --> Language Class Initialized
DEBUG - 2014-03-29 12:08:35 --> Loader Class Initialized
DEBUG - 2014-03-29 12:08:35 --> Helper loaded: form_helper
DEBUG - 2014-03-29 12:08:35 --> Helper loaded: url_helper
DEBUG - 2014-03-29 12:08:35 --> Helper loaded: html_helper
DEBUG - 2014-03-29 12:08:35 --> Database Driver Class Initialized
DEBUG - 2014-03-29 12:08:35 --> Session Class Initialized
DEBUG - 2014-03-29 12:08:35 --> Helper loaded: string_helper
DEBUG - 2014-03-29 12:08:35 --> Session routines successfully run
DEBUG - 2014-03-29 12:08:35 --> Form Validation Class Initialized
DEBUG - 2014-03-29 12:08:35 --> Controller Class Initialized
DEBUG - 2014-03-29 12:08:35 --> Model Class Initialized
DEBUG - 2014-03-29 12:08:35 --> Model Class Initialized
DEBUG - 2014-03-29 12:08:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 12:08:35 --> Encrypt Class Initialized
INFO  - 2014-03-29 12:08:35 --> after session initialization................
INFO  - 2014-03-29 12:08:35 --> after rays has been clicked.................
INFO  - 2014-03-29 12:08:35 --> last article id is 0
INFO  - 2014-03-29 12:08:35 --> The session id is ========>09541519d583b73db41e82e92488ed7a and the member id is =======>
INFO  - 2014-03-29 12:08:35 --> The session id is ========>09541519d583b73db41e82e92488ed7a and the member id is =======>
INFO  - 2014-03-29 12:08:35 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:08:35 --> 0 the guest only data>>>>>
INFO  - 2014-03-29 12:08:35 --> 0 the guest only data>> AFTER >>>#31
INFO  - 2014-03-29 12:08:35 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:08:35 --> 0 the guest only data>>>>>#31
INFO  - 2014-03-29 12:08:35 --> 0 the guest only data>> AFTER >>>#16
INFO  - 2014-03-29 12:08:35 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:08:35 --> 1 the guest only data>>>>>#16
INFO  - 2014-03-29 12:08:35 --> 1 the guest only data>> AFTER >>>#16
INFO  - 2014-03-29 12:08:35 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:08:35 --> 0 the guest only data>>>>>#16
INFO  - 2014-03-29 12:08:35 --> 0 the guest only data>> AFTER >>>#14
INFO  - 2014-03-29 12:08:35 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:08:35 --> 1 the guest only data>>>>>#14
INFO  - 2014-03-29 12:08:35 --> 1 the guest only data>> AFTER >>>#14
INFO  - 2014-03-29 12:08:35 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:08:35 --> 0 the guest only data>>>>>#14
INFO  - 2014-03-29 12:08:35 --> 0 the guest only data>> AFTER >>>#12
INFO  - 2014-03-29 12:08:35 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:08:35 --> 1 the guest only data>>>>>#12
INFO  - 2014-03-29 12:08:35 --> 1 the guest only data>> AFTER >>>#12
INFO  - 2014-03-29 12:08:35 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:08:35 --> 0 the guest only data>>>>>#12
INFO  - 2014-03-29 12:08:35 --> 0 the guest only data>> AFTER >>>#10
INFO  - 2014-03-29 12:08:35 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:08:35 --> 0 the guest only data>>>>>#10
INFO  - 2014-03-29 12:08:35 --> 0 the guest only data>> AFTER >>>#9
INFO  - 2014-03-29 12:08:35 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:08:35 --> 1 the guest only data>>>>>#9
INFO  - 2014-03-29 12:08:35 --> 1 the guest only data>> AFTER >>>#9
INFO  - 2014-03-29 12:08:35 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:08:35 --> 0 the guest only data>>>>>#9
INFO  - 2014-03-29 12:08:35 --> 0 the guest only data>> AFTER >>>#7
INFO  - 2014-03-29 12:08:35 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:08:35 --> 1 the guest only data>>>>>#7
INFO  - 2014-03-29 12:08:35 --> 1 the guest only data>> AFTER >>>#7
INFO  - 2014-03-29 12:08:35 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:08:35 --> 0 the guest only data>>>>>#7
INFO  - 2014-03-29 12:08:35 --> 0 the guest only data>> AFTER >>>#5
INFO  - 2014-03-29 12:08:35 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:08:35 --> 0 the guest only data>>>>>#5
INFO  - 2014-03-29 12:08:35 --> 0 the guest only data>> AFTER >>>#4
INFO  - 2014-03-29 12:08:35 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:08:35 --> 1 the guest only data>>>>>#4
INFO  - 2014-03-29 12:08:35 --> 1 the guest only data>> AFTER >>>#4
INFO  - 2014-03-29 12:08:35 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:08:35 --> 1 the guest only data>>>>>#4
INFO  - 2014-03-29 12:08:35 --> 1 the guest only data>> AFTER >>>#4
INFO  - 2014-03-29 12:08:35 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:08:35 --> 1 the guest only data>>>>>#4
INFO  - 2014-03-29 12:08:35 --> 1 the guest only data>> AFTER >>>#4
DEBUG - 2014-03-29 12:08:35 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2014-03-29 12:08:35 --> Final output sent to browser
DEBUG - 2014-03-29 12:08:35 --> Total execution time: 0.0720
DEBUG - 2014-03-29 12:08:37 --> Config Class Initialized
DEBUG - 2014-03-29 12:08:37 --> Hooks Class Initialized
DEBUG - 2014-03-29 12:08:37 --> Utf8 Class Initialized
DEBUG - 2014-03-29 12:08:37 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 12:08:37 --> URI Class Initialized
DEBUG - 2014-03-29 12:08:37 --> Router Class Initialized
DEBUG - 2014-03-29 12:08:37 --> Output Class Initialized
DEBUG - 2014-03-29 12:08:37 --> Security Class Initialized
DEBUG - 2014-03-29 12:08:37 --> Input Class Initialized
DEBUG - 2014-03-29 12:08:37 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 12:08:37 --> Language Class Initialized
DEBUG - 2014-03-29 12:08:37 --> Loader Class Initialized
DEBUG - 2014-03-29 12:08:37 --> Helper loaded: form_helper
DEBUG - 2014-03-29 12:08:37 --> Helper loaded: url_helper
DEBUG - 2014-03-29 12:08:37 --> Helper loaded: html_helper
DEBUG - 2014-03-29 12:08:37 --> Database Driver Class Initialized
DEBUG - 2014-03-29 12:08:37 --> Session Class Initialized
DEBUG - 2014-03-29 12:08:37 --> Helper loaded: string_helper
DEBUG - 2014-03-29 12:08:37 --> Session routines successfully run
DEBUG - 2014-03-29 12:08:37 --> Form Validation Class Initialized
DEBUG - 2014-03-29 12:08:37 --> Controller Class Initialized
DEBUG - 2014-03-29 12:08:37 --> Model Class Initialized
DEBUG - 2014-03-29 12:08:37 --> Model Class Initialized
DEBUG - 2014-03-29 12:08:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 12:08:37 --> Encrypt Class Initialized
INFO  - 2014-03-29 12:08:37 --> after session initialization................
INFO  - 2014-03-29 12:08:37 --> the form message==>
INFO  - 2014-03-29 12:08:37 --> The session id is ========>09541519d583b73db41e82e92488ed7a and the member id is =======>
INFO  - 2014-03-29 12:08:37 --> after the retrieving session list.................//////////
INFO  - 2014-03-29 12:08:37 --> The session id is ========>09541519d583b73db41e82e92488ed7a and the member id is =======>
DEBUG - 2014-03-29 12:08:37 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-03-29 12:08:37 --> Final output sent to browser
DEBUG - 2014-03-29 12:08:37 --> Total execution time: 0.0470
DEBUG - 2014-03-29 12:10:32 --> Config Class Initialized
DEBUG - 2014-03-29 12:10:32 --> Hooks Class Initialized
DEBUG - 2014-03-29 12:10:32 --> Utf8 Class Initialized
DEBUG - 2014-03-29 12:10:32 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 12:10:32 --> URI Class Initialized
DEBUG - 2014-03-29 12:10:32 --> Router Class Initialized
DEBUG - 2014-03-29 12:10:32 --> Output Class Initialized
DEBUG - 2014-03-29 12:10:32 --> Security Class Initialized
DEBUG - 2014-03-29 12:10:32 --> Input Class Initialized
DEBUG - 2014-03-29 12:10:32 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 12:10:32 --> Language Class Initialized
DEBUG - 2014-03-29 12:10:32 --> Loader Class Initialized
DEBUG - 2014-03-29 12:10:32 --> Helper loaded: form_helper
DEBUG - 2014-03-29 12:10:32 --> Helper loaded: url_helper
DEBUG - 2014-03-29 12:10:32 --> Helper loaded: html_helper
DEBUG - 2014-03-29 12:10:32 --> Database Driver Class Initialized
DEBUG - 2014-03-29 12:10:32 --> Session Class Initialized
DEBUG - 2014-03-29 12:10:32 --> Helper loaded: string_helper
DEBUG - 2014-03-29 12:10:32 --> Session routines successfully run
DEBUG - 2014-03-29 12:10:32 --> Form Validation Class Initialized
DEBUG - 2014-03-29 12:10:32 --> Controller Class Initialized
DEBUG - 2014-03-29 12:10:32 --> Model Class Initialized
DEBUG - 2014-03-29 12:10:32 --> Model Class Initialized
DEBUG - 2014-03-29 12:10:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 12:10:32 --> Encrypt Class Initialized
INFO  - 2014-03-29 12:10:32 --> after session initialization................
INFO  - 2014-03-29 12:10:32 --> inside rays login auth.............
DEBUG - 2014-03-29 12:10:32 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2014-03-29 12:10:32 --> XSS Filtering completed
DEBUG - 2014-03-29 12:10:32 --> XSS Filtering completed
INFO  - 2014-03-29 12:10:32 --> login details ::::::::::===>SELECT `ld`.*
FROM (`logindetails` ld)
WHERE lower(ld.username) =  'princeyekaso@gmail.com'
INFO  - 2014-03-29 12:10:32 --> inside rays login auth.............sys_admin/user_authorization/redirecttosignin
DEBUG - 2014-03-29 12:10:32 --> Config Class Initialized
DEBUG - 2014-03-29 12:10:32 --> Hooks Class Initialized
DEBUG - 2014-03-29 12:10:32 --> Utf8 Class Initialized
DEBUG - 2014-03-29 12:10:32 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 12:10:32 --> URI Class Initialized
DEBUG - 2014-03-29 12:10:32 --> Router Class Initialized
DEBUG - 2014-03-29 12:10:32 --> Output Class Initialized
DEBUG - 2014-03-29 12:10:32 --> Security Class Initialized
DEBUG - 2014-03-29 12:10:32 --> Input Class Initialized
DEBUG - 2014-03-29 12:10:32 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 12:10:32 --> Language Class Initialized
DEBUG - 2014-03-29 12:10:32 --> Loader Class Initialized
DEBUG - 2014-03-29 12:10:32 --> Helper loaded: form_helper
DEBUG - 2014-03-29 12:10:32 --> Helper loaded: url_helper
DEBUG - 2014-03-29 12:10:32 --> Helper loaded: html_helper
DEBUG - 2014-03-29 12:10:32 --> Database Driver Class Initialized
DEBUG - 2014-03-29 12:10:32 --> Session Class Initialized
DEBUG - 2014-03-29 12:10:32 --> Helper loaded: string_helper
DEBUG - 2014-03-29 12:10:32 --> Session routines successfully run
DEBUG - 2014-03-29 12:10:32 --> Form Validation Class Initialized
DEBUG - 2014-03-29 12:10:32 --> Controller Class Initialized
DEBUG - 2014-03-29 12:10:32 --> Model Class Initialized
DEBUG - 2014-03-29 12:10:32 --> Model Class Initialized
DEBUG - 2014-03-29 12:10:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 12:10:32 --> Encrypt Class Initialized
INFO  - 2014-03-29 12:10:32 --> after session initialization................
INFO  - 2014-03-29 12:10:32 --> the form message==>
INFO  - 2014-03-29 12:10:32 --> The session id is ========>09541519d583b73db41e82e92488ed7a and the member id is =======>
INFO  - 2014-03-29 12:10:32 --> after the retrieving session list.................//////////
INFO  - 2014-03-29 12:10:32 --> The session id is ========>09541519d583b73db41e82e92488ed7a and the member id is =======>
DEBUG - 2014-03-29 12:10:32 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-03-29 12:10:32 --> Final output sent to browser
DEBUG - 2014-03-29 12:10:32 --> Total execution time: 0.0520
DEBUG - 2014-03-29 12:11:23 --> Config Class Initialized
DEBUG - 2014-03-29 12:11:23 --> Hooks Class Initialized
DEBUG - 2014-03-29 12:11:23 --> Utf8 Class Initialized
DEBUG - 2014-03-29 12:11:23 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 12:11:23 --> URI Class Initialized
DEBUG - 2014-03-29 12:11:23 --> Router Class Initialized
DEBUG - 2014-03-29 12:11:23 --> Output Class Initialized
DEBUG - 2014-03-29 12:11:23 --> Security Class Initialized
DEBUG - 2014-03-29 12:11:23 --> Input Class Initialized
DEBUG - 2014-03-29 12:11:23 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 12:11:23 --> Language Class Initialized
DEBUG - 2014-03-29 12:11:23 --> Loader Class Initialized
DEBUG - 2014-03-29 12:11:23 --> Helper loaded: form_helper
DEBUG - 2014-03-29 12:11:23 --> Helper loaded: url_helper
DEBUG - 2014-03-29 12:11:23 --> Helper loaded: html_helper
DEBUG - 2014-03-29 12:11:23 --> Database Driver Class Initialized
DEBUG - 2014-03-29 12:11:23 --> Session Class Initialized
DEBUG - 2014-03-29 12:11:23 --> Helper loaded: string_helper
DEBUG - 2014-03-29 12:11:23 --> Session routines successfully run
DEBUG - 2014-03-29 12:11:23 --> Form Validation Class Initialized
DEBUG - 2014-03-29 12:11:23 --> Controller Class Initialized
DEBUG - 2014-03-29 12:11:23 --> Model Class Initialized
DEBUG - 2014-03-29 12:11:23 --> Model Class Initialized
DEBUG - 2014-03-29 12:11:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 12:11:23 --> Encrypt Class Initialized
INFO  - 2014-03-29 12:11:23 --> after session initialization................
INFO  - 2014-03-29 12:11:23 --> inside rays login auth.............
DEBUG - 2014-03-29 12:11:23 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2014-03-29 12:11:23 --> XSS Filtering completed
DEBUG - 2014-03-29 12:11:23 --> XSS Filtering completed
INFO  - 2014-03-29 12:11:23 --> login details ::::::::::===>SELECT `ld`.*
FROM (`logindetails` ld)
WHERE lower(ld.username) =  'yetunde@gmail.com'
INFO  - 2014-03-29 12:11:23 --> before getting the relation of member............35
INFO  - 2014-03-29 12:11:23 --> registration complete and username set on userpage.................Yetunde
INFO  - 2014-03-29 12:11:23 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  '35'
INFO  - 2014-03-29 12:11:23 --> after newsleters list has been clicked.................
INFO  - 2014-03-29 12:11:23 --> drugcategory ::::::::::===>SELECT `dc`.`id_drugcategory`, `dc`.`name`
FROM (`drugcategory` dc)
ORDER BY `dc`.`name`
INFO  - 2014-03-29 12:11:23 --> The session id is ========>09541519d583b73db41e82e92488ed7a and the member id is =======>35
DEBUG - 2014-03-29 12:11:23 --> File loaded: ../pharmaray-application/views/adminpage.php
DEBUG - 2014-03-29 12:11:23 --> Final output sent to browser
DEBUG - 2014-03-29 12:11:23 --> Total execution time: 0.0700
DEBUG - 2014-03-29 12:11:23 --> Config Class Initialized
DEBUG - 2014-03-29 12:11:23 --> Hooks Class Initialized
DEBUG - 2014-03-29 12:11:23 --> Utf8 Class Initialized
DEBUG - 2014-03-29 12:11:23 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 12:11:23 --> URI Class Initialized
DEBUG - 2014-03-29 12:11:23 --> Router Class Initialized
ERROR - 2014-03-29 12:11:23 --> 404 Page Not Found --> css
DEBUG - 2014-03-29 12:11:26 --> Config Class Initialized
DEBUG - 2014-03-29 12:11:26 --> Hooks Class Initialized
DEBUG - 2014-03-29 12:11:26 --> Utf8 Class Initialized
DEBUG - 2014-03-29 12:11:26 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 12:11:26 --> URI Class Initialized
DEBUG - 2014-03-29 12:11:26 --> Router Class Initialized
DEBUG - 2014-03-29 12:11:26 --> Output Class Initialized
DEBUG - 2014-03-29 12:11:26 --> Security Class Initialized
DEBUG - 2014-03-29 12:11:26 --> Input Class Initialized
DEBUG - 2014-03-29 12:11:26 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 12:11:26 --> Language Class Initialized
DEBUG - 2014-03-29 12:11:26 --> Loader Class Initialized
DEBUG - 2014-03-29 12:11:26 --> Helper loaded: form_helper
DEBUG - 2014-03-29 12:11:26 --> Helper loaded: url_helper
DEBUG - 2014-03-29 12:11:26 --> Helper loaded: html_helper
DEBUG - 2014-03-29 12:11:26 --> Database Driver Class Initialized
DEBUG - 2014-03-29 12:11:26 --> Session Class Initialized
DEBUG - 2014-03-29 12:11:26 --> Helper loaded: string_helper
DEBUG - 2014-03-29 12:11:26 --> Session routines successfully run
DEBUG - 2014-03-29 12:11:26 --> Form Validation Class Initialized
DEBUG - 2014-03-29 12:11:26 --> Controller Class Initialized
DEBUG - 2014-03-29 12:11:26 --> Model Class Initialized
DEBUG - 2014-03-29 12:11:26 --> Model Class Initialized
DEBUG - 2014-03-29 12:11:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 12:11:26 --> Encrypt Class Initialized
INFO  - 2014-03-29 12:11:26 --> after session initialization................
DEBUG - 2014-03-29 12:11:26 --> Config Class Initialized
DEBUG - 2014-03-29 12:11:26 --> Hooks Class Initialized
DEBUG - 2014-03-29 12:11:26 --> Utf8 Class Initialized
DEBUG - 2014-03-29 12:11:26 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 12:11:26 --> URI Class Initialized
DEBUG - 2014-03-29 12:11:26 --> Router Class Initialized
DEBUG - 2014-03-29 12:11:26 --> No URI present. Default controller set.
DEBUG - 2014-03-29 12:11:26 --> Output Class Initialized
DEBUG - 2014-03-29 12:11:26 --> Security Class Initialized
DEBUG - 2014-03-29 12:11:26 --> Input Class Initialized
DEBUG - 2014-03-29 12:11:26 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 12:11:26 --> Language Class Initialized
DEBUG - 2014-03-29 12:11:26 --> Loader Class Initialized
DEBUG - 2014-03-29 12:11:26 --> Helper loaded: form_helper
DEBUG - 2014-03-29 12:11:26 --> Helper loaded: url_helper
DEBUG - 2014-03-29 12:11:26 --> Helper loaded: html_helper
DEBUG - 2014-03-29 12:11:26 --> Database Driver Class Initialized
DEBUG - 2014-03-29 12:11:26 --> Session Class Initialized
DEBUG - 2014-03-29 12:11:26 --> Helper loaded: string_helper
DEBUG - 2014-03-29 12:11:26 --> A session cookie was not found.
DEBUG - 2014-03-29 12:11:26 --> Session routines successfully run
DEBUG - 2014-03-29 12:11:26 --> Form Validation Class Initialized
DEBUG - 2014-03-29 12:11:26 --> Controller Class Initialized
DEBUG - 2014-03-29 12:11:26 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2014-03-29 12:11:26 --> Final output sent to browser
DEBUG - 2014-03-29 12:11:26 --> Total execution time: 0.0360
DEBUG - 2014-03-29 12:11:26 --> Config Class Initialized
DEBUG - 2014-03-29 12:11:26 --> Hooks Class Initialized
DEBUG - 2014-03-29 12:11:26 --> Utf8 Class Initialized
DEBUG - 2014-03-29 12:11:26 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 12:11:26 --> URI Class Initialized
DEBUG - 2014-03-29 12:11:26 --> Router Class Initialized
DEBUG - 2014-03-29 12:11:26 --> Output Class Initialized
DEBUG - 2014-03-29 12:11:26 --> Security Class Initialized
DEBUG - 2014-03-29 12:11:26 --> Input Class Initialized
DEBUG - 2014-03-29 12:11:26 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 12:11:26 --> Language Class Initialized
DEBUG - 2014-03-29 12:11:26 --> Loader Class Initialized
DEBUG - 2014-03-29 12:11:26 --> Helper loaded: form_helper
DEBUG - 2014-03-29 12:11:26 --> Helper loaded: url_helper
DEBUG - 2014-03-29 12:11:26 --> Helper loaded: html_helper
DEBUG - 2014-03-29 12:11:26 --> Database Driver Class Initialized
DEBUG - 2014-03-29 12:11:26 --> Session Class Initialized
DEBUG - 2014-03-29 12:11:26 --> Helper loaded: string_helper
DEBUG - 2014-03-29 12:11:26 --> Session routines successfully run
DEBUG - 2014-03-29 12:11:26 --> Form Validation Class Initialized
DEBUG - 2014-03-29 12:11:26 --> Controller Class Initialized
DEBUG - 2014-03-29 12:11:26 --> Model Class Initialized
DEBUG - 2014-03-29 12:11:26 --> Model Class Initialized
DEBUG - 2014-03-29 12:11:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 12:11:26 --> Encrypt Class Initialized
INFO  - 2014-03-29 12:11:26 --> after session initialization................
INFO  - 2014-03-29 12:11:26 --> after rays has been clicked.................
INFO  - 2014-03-29 12:11:26 --> last article id is 0
INFO  - 2014-03-29 12:11:26 --> The session id is ========>c68cbc237de19cebc6bca6a06348041c and the member id is =======>
INFO  - 2014-03-29 12:11:26 --> The session id is ========>c68cbc237de19cebc6bca6a06348041c and the member id is =======>
INFO  - 2014-03-29 12:11:26 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:11:26 --> 0 the guest only data>>>>>
INFO  - 2014-03-29 12:11:26 --> 0 the guest only data>> AFTER >>>#31
INFO  - 2014-03-29 12:11:26 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:11:26 --> 0 the guest only data>>>>>#31
INFO  - 2014-03-29 12:11:26 --> 0 the guest only data>> AFTER >>>#16
INFO  - 2014-03-29 12:11:26 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:11:26 --> 1 the guest only data>>>>>#16
INFO  - 2014-03-29 12:11:26 --> 1 the guest only data>> AFTER >>>#16
INFO  - 2014-03-29 12:11:26 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:11:26 --> 0 the guest only data>>>>>#16
INFO  - 2014-03-29 12:11:26 --> 0 the guest only data>> AFTER >>>#14
INFO  - 2014-03-29 12:11:26 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:11:26 --> 1 the guest only data>>>>>#14
INFO  - 2014-03-29 12:11:26 --> 1 the guest only data>> AFTER >>>#14
INFO  - 2014-03-29 12:11:26 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:11:26 --> 0 the guest only data>>>>>#14
INFO  - 2014-03-29 12:11:26 --> 0 the guest only data>> AFTER >>>#12
INFO  - 2014-03-29 12:11:26 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:11:26 --> 1 the guest only data>>>>>#12
INFO  - 2014-03-29 12:11:26 --> 1 the guest only data>> AFTER >>>#12
INFO  - 2014-03-29 12:11:26 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:11:26 --> 0 the guest only data>>>>>#12
INFO  - 2014-03-29 12:11:26 --> 0 the guest only data>> AFTER >>>#10
INFO  - 2014-03-29 12:11:26 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:11:26 --> 0 the guest only data>>>>>#10
INFO  - 2014-03-29 12:11:26 --> 0 the guest only data>> AFTER >>>#9
INFO  - 2014-03-29 12:11:26 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:11:26 --> 1 the guest only data>>>>>#9
INFO  - 2014-03-29 12:11:26 --> 1 the guest only data>> AFTER >>>#9
INFO  - 2014-03-29 12:11:26 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:11:26 --> 0 the guest only data>>>>>#9
INFO  - 2014-03-29 12:11:26 --> 0 the guest only data>> AFTER >>>#7
INFO  - 2014-03-29 12:11:26 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:11:26 --> 1 the guest only data>>>>>#7
INFO  - 2014-03-29 12:11:26 --> 1 the guest only data>> AFTER >>>#7
INFO  - 2014-03-29 12:11:26 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:11:26 --> 0 the guest only data>>>>>#7
INFO  - 2014-03-29 12:11:26 --> 0 the guest only data>> AFTER >>>#5
INFO  - 2014-03-29 12:11:26 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:11:26 --> 0 the guest only data>>>>>#5
INFO  - 2014-03-29 12:11:26 --> 0 the guest only data>> AFTER >>>#4
INFO  - 2014-03-29 12:11:26 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:11:26 --> 1 the guest only data>>>>>#4
INFO  - 2014-03-29 12:11:26 --> 1 the guest only data>> AFTER >>>#4
INFO  - 2014-03-29 12:11:26 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:11:26 --> 1 the guest only data>>>>>#4
INFO  - 2014-03-29 12:11:26 --> 1 the guest only data>> AFTER >>>#4
INFO  - 2014-03-29 12:11:26 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:11:26 --> 1 the guest only data>>>>>#4
INFO  - 2014-03-29 12:11:26 --> 1 the guest only data>> AFTER >>>#4
DEBUG - 2014-03-29 12:11:26 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2014-03-29 12:11:26 --> Final output sent to browser
DEBUG - 2014-03-29 12:11:26 --> Total execution time: 0.0680
DEBUG - 2014-03-29 12:11:46 --> Config Class Initialized
DEBUG - 2014-03-29 12:11:46 --> Hooks Class Initialized
DEBUG - 2014-03-29 12:11:46 --> Utf8 Class Initialized
DEBUG - 2014-03-29 12:11:46 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 12:11:46 --> URI Class Initialized
DEBUG - 2014-03-29 12:11:46 --> Router Class Initialized
DEBUG - 2014-03-29 12:11:46 --> Output Class Initialized
DEBUG - 2014-03-29 12:11:46 --> Security Class Initialized
DEBUG - 2014-03-29 12:11:46 --> Input Class Initialized
DEBUG - 2014-03-29 12:11:46 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 12:11:46 --> Language Class Initialized
DEBUG - 2014-03-29 12:11:46 --> Loader Class Initialized
DEBUG - 2014-03-29 12:11:46 --> Helper loaded: form_helper
DEBUG - 2014-03-29 12:11:46 --> Helper loaded: url_helper
DEBUG - 2014-03-29 12:11:46 --> Helper loaded: html_helper
DEBUG - 2014-03-29 12:11:46 --> Database Driver Class Initialized
DEBUG - 2014-03-29 12:11:46 --> Session Class Initialized
DEBUG - 2014-03-29 12:11:46 --> Helper loaded: string_helper
DEBUG - 2014-03-29 12:11:46 --> Session routines successfully run
DEBUG - 2014-03-29 12:11:46 --> Form Validation Class Initialized
DEBUG - 2014-03-29 12:11:46 --> Controller Class Initialized
DEBUG - 2014-03-29 12:11:46 --> Model Class Initialized
DEBUG - 2014-03-29 12:11:46 --> Model Class Initialized
DEBUG - 2014-03-29 12:11:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 12:11:46 --> Encrypt Class Initialized
INFO  - 2014-03-29 12:11:46 --> after session initialization................
INFO  - 2014-03-29 12:11:46 --> the form message==>
INFO  - 2014-03-29 12:11:46 --> The session id is ========>c68cbc237de19cebc6bca6a06348041c and the member id is =======>
INFO  - 2014-03-29 12:11:46 --> after the retrieving session list.................//////////
INFO  - 2014-03-29 12:11:46 --> The session id is ========>c68cbc237de19cebc6bca6a06348041c and the member id is =======>
DEBUG - 2014-03-29 12:11:46 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-03-29 12:11:46 --> Final output sent to browser
DEBUG - 2014-03-29 12:11:46 --> Total execution time: 0.0500
DEBUG - 2014-03-29 12:12:10 --> Config Class Initialized
DEBUG - 2014-03-29 12:12:10 --> Hooks Class Initialized
DEBUG - 2014-03-29 12:12:10 --> Utf8 Class Initialized
DEBUG - 2014-03-29 12:12:10 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 12:12:11 --> URI Class Initialized
DEBUG - 2014-03-29 12:12:11 --> Router Class Initialized
DEBUG - 2014-03-29 12:12:11 --> Output Class Initialized
DEBUG - 2014-03-29 12:12:11 --> Security Class Initialized
DEBUG - 2014-03-29 12:12:11 --> Input Class Initialized
DEBUG - 2014-03-29 12:12:11 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 12:12:11 --> Language Class Initialized
DEBUG - 2014-03-29 12:12:11 --> Loader Class Initialized
DEBUG - 2014-03-29 12:12:11 --> Helper loaded: form_helper
DEBUG - 2014-03-29 12:12:11 --> Helper loaded: url_helper
DEBUG - 2014-03-29 12:12:11 --> Helper loaded: html_helper
DEBUG - 2014-03-29 12:12:11 --> Database Driver Class Initialized
DEBUG - 2014-03-29 12:12:11 --> Session Class Initialized
DEBUG - 2014-03-29 12:12:11 --> Helper loaded: string_helper
DEBUG - 2014-03-29 12:12:11 --> Session routines successfully run
DEBUG - 2014-03-29 12:12:11 --> Form Validation Class Initialized
DEBUG - 2014-03-29 12:12:11 --> Controller Class Initialized
DEBUG - 2014-03-29 12:12:11 --> Model Class Initialized
DEBUG - 2014-03-29 12:12:11 --> Model Class Initialized
DEBUG - 2014-03-29 12:12:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 12:12:11 --> Encrypt Class Initialized
INFO  - 2014-03-29 12:12:11 --> after session initialization................
INFO  - 2014-03-29 12:12:11 --> inside the register member.................
INFO  - 2014-03-29 12:12:11 --> before initializing member array.................
INFO  - 2014-03-29 12:12:11 --> before setting validation rules.................
INFO  - 2014-03-29 12:12:11 --> after setting validation rules.................
DEBUG - 2014-03-29 12:12:11 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2014-03-29 12:12:11 --> XSS Filtering completed
DEBUG - 2014-03-29 12:12:11 --> XSS Filtering completed
DEBUG - 2014-03-29 12:12:11 --> XSS Filtering completed
DEBUG - 2014-03-29 12:12:11 --> XSS Filtering completed
DEBUG - 2014-03-29 12:12:11 --> XSS Filtering completed
DEBUG - 2014-03-29 12:12:11 --> XSS Filtering completed
DEBUG - 2014-03-29 12:12:11 --> XSS Filtering completed
INFO  - 2014-03-29 12:12:11 --> inside retrieve most searched pharmacy
INFO  - 2014-03-29 12:12:11 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 20
INFO  - 2014-03-29 12:12:11 --> inside retrieve most searched pharmacy
INFO  - 2014-03-29 12:12:11 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 20
INFO  - 2014-03-29 12:12:11 --> inside retrieve most searched pharmacy
INFO  - 2014-03-29 12:12:11 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 20
INFO  - 2014-03-29 12:12:11 --> before setting the member data.................
INFO  - 2014-03-29 12:12:11 --> inside retrieving user by email addressmega@yahoo.com
INFO  - 2014-03-29 12:12:11 --> SELECT `m`.*
FROM (`member` m)
WHERE `m`.`emailaddress_member` =  'mega@yahoo.com'
INFO  - 2014-03-29 12:12:11 --> before inserting into member.................
INFO  - 2014-03-29 12:12:11 --> after inserting into member.................37
INFO  - 2014-03-29 12:12:11 --> the status of the transaction is...........1 the insert id is ......37
INFO  - 2014-03-29 12:12:11 --> the id of retrieved member is.................. 37
INFO  - 2014-03-29 12:12:11 --> before inserting into login details.................
INFO  - 2014-03-29 12:12:11 --> after inserting into login details.................
INFO  - 2014-03-29 12:12:11 --> verify user roles ::::::::::===>SELECT `ur`.`id_userrole`
FROM (`userrole` ur)
WHERE lower(ur.name) =  'ordinary user'
INFO  - 2014-03-29 12:12:11 --> before inserting into login details role.................
INFO  - 2014-03-29 12:12:11 --> after inserting into login details role.................
INFO  - 2014-03-29 12:12:11 --> after setting member array and attempting to print array.................
INFO  - 2014-03-29 12:12:11 --> after setting email to username variable.................
INFO  - 2014-03-29 12:12:11 --> after setting password to password variable.................
INFO  - 2014-03-29 12:12:11 --> after verifying login details.................
INFO  - 2014-03-29 12:12:11 --> before getting the relation of member............37
INFO  - 2014-03-29 12:12:11 --> registration complete and username set on userpage.................Mega
INFO  - 2014-03-29 12:12:11 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-03-29 12:12:11 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2014-03-29 12:12:11 --> inside retrieving vacancy for member
INFO  - 2014-03-29 12:12:11 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2014-03-29 12:12:11 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-03-29 12:12:11 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2014-03-29 12:12:11 --> Drugs ::::::::::===>SELECT d.id_drug, d.drug_name, d.drug_description, group_concat(bn.name, ':', bn.id_brandname) as drug_company, group_concat(dcc.name) as drug_brandnames, dcc.id_drugcategory as category_id
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dcc`.`brandname_id`
WHERE `d`.`id_drug` =  '1'
GROUP BY `id_drug`
ORDER BY `d`.`drug_name`, `bn`.`id_brandname`
INFO  - 2014-03-29 12:12:11 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drugcategory_id` = `dc`.`id_drugcategory`
JOIN `drug` d ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2014-03-29 12:12:11 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2014-03-29 12:12:11 --> inside retrieving pharmacy for drug id is 1
INFO  - 2014-03-29 12:12:11 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2014-03-29 12:12:11 --> Related drugs ::::::::::===>SELECT d.drug_name
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcg`.`drugcategory_id` = `dcc`.`id_drugcategory`
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
WHERE `dcc`.`brandname_id` =  '0'
AND `dc`.`id_drugclass` =  '0'
INFO  - 2014-03-29 12:12:11 --> inside retrieve most searched drugs
INFO  - 2014-03-29 12:12:11 --> SELECT `d`.`id_drug` as id, `d`.`drug_name` as name, count(ds.id_drugsearch) as search_count
FROM (`drug_search` ds)
JOIN `drug` d ON `d`.`id_drug` = `ds`.`drug_id`
GROUP BY `d`.`id_drug`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-03-29 12:12:11 --> inside retrieve most searched pharmacy
INFO  - 2014-03-29 12:12:11 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-03-29 12:12:11 --> inside retrieve most searched article
INFO  - 2014-03-29 12:12:11 --> SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description, count(ats.article_id) as search_count
FROM (`article_search` ats)
JOIN `article` a ON `a`.`id_article` = `ats`.`article_id`
JOIN `news` n ON `a`.`newsid_news` = `n`.`id_news`
GROUP BY `a`.`id_article`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-03-29 12:12:11 --> The session id is ========>c68cbc237de19cebc6bca6a06348041c and the member id is =======>37
INFO  - 2014-03-29 12:12:11 -->  column name inside view is 0 column Data is 491
INFO  - 2014-03-29 12:12:11 -->  column name inside view is 1 column Data is 618
INFO  - 2014-03-29 12:12:11 -->  column name inside view is 2 column Data is 1
INFO  - 2014-03-29 12:12:11 -->  column name inside view is 3 column Data is 515
INFO  - 2014-03-29 12:12:11 -->  column name inside view is 4 column Data is 488
INFO  - 2014-03-29 12:12:11 -->  column name inside view is 5 column Data is 509
INFO  - 2014-03-29 12:12:11 -->  column name inside view is 6 column Data is 487
INFO  - 2014-03-29 12:12:11 -->  column name inside view is 7 column Data is 489
INFO  - 2014-03-29 12:12:11 -->  column name inside view is 8 column Data is 516
INFO  - 2014-03-29 12:12:11 -->  column name inside view is 9 column Data is 641
INFO  - 2014-03-29 12:12:11 -->  column name inside view is 0 column Data is 5
INFO  - 2014-03-29 12:12:11 -->  column name inside view is 1 column Data is 2
INFO  - 2014-03-29 12:12:11 -->  column name inside view is 2 column Data is 3
INFO  - 2014-03-29 12:12:11 -->  column name inside view is 3 column Data is 1
INFO  - 2014-03-29 12:12:11 -->  column name inside view is 4 column Data is 18
INFO  - 2014-03-29 12:12:11 -->  column name inside view is 5 column Data is 15
INFO  - 2014-03-29 12:12:11 -->  column name inside view is 6 column Data is 14
INFO  - 2014-03-29 12:12:11 -->  column name inside view is 7 column Data is 6
INFO  - 2014-03-29 12:12:11 -->  column name inside view is 8 column Data is 43
INFO  - 2014-03-29 12:12:11 -->  column name inside view is 9 column Data is 9
INFO  - 2014-03-29 12:12:11 -->  column name inside view is 0 column Data is Male Doctor
INFO  - 2014-03-29 12:12:11 -->  column name inside view is 1 column Data is Ordinary User
DEBUG - 2014-03-29 12:12:11 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2014-03-29 12:12:11 --> Final output sent to browser
DEBUG - 2014-03-29 12:12:11 --> Total execution time: 0.1750
DEBUG - 2014-03-29 12:12:11 --> Config Class Initialized
DEBUG - 2014-03-29 12:12:11 --> Hooks Class Initialized
DEBUG - 2014-03-29 12:12:11 --> Utf8 Class Initialized
DEBUG - 2014-03-29 12:12:11 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 12:12:11 --> URI Class Initialized
DEBUG - 2014-03-29 12:12:11 --> Router Class Initialized
ERROR - 2014-03-29 12:12:11 --> 404 Page Not Found --> css
DEBUG - 2014-03-29 12:12:18 --> Config Class Initialized
DEBUG - 2014-03-29 12:12:18 --> Hooks Class Initialized
DEBUG - 2014-03-29 12:12:18 --> Utf8 Class Initialized
DEBUG - 2014-03-29 12:12:18 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 12:12:18 --> URI Class Initialized
DEBUG - 2014-03-29 12:12:18 --> Router Class Initialized
DEBUG - 2014-03-29 12:12:18 --> Output Class Initialized
DEBUG - 2014-03-29 12:12:18 --> Security Class Initialized
DEBUG - 2014-03-29 12:12:18 --> Input Class Initialized
DEBUG - 2014-03-29 12:12:18 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 12:12:18 --> Language Class Initialized
DEBUG - 2014-03-29 12:12:18 --> Loader Class Initialized
DEBUG - 2014-03-29 12:12:18 --> Helper loaded: form_helper
DEBUG - 2014-03-29 12:12:18 --> Helper loaded: url_helper
DEBUG - 2014-03-29 12:12:18 --> Helper loaded: html_helper
DEBUG - 2014-03-29 12:12:18 --> Database Driver Class Initialized
DEBUG - 2014-03-29 12:12:18 --> Session Class Initialized
DEBUG - 2014-03-29 12:12:18 --> Helper loaded: string_helper
DEBUG - 2014-03-29 12:12:18 --> Session routines successfully run
DEBUG - 2014-03-29 12:12:18 --> Form Validation Class Initialized
DEBUG - 2014-03-29 12:12:18 --> Controller Class Initialized
DEBUG - 2014-03-29 12:12:18 --> Model Class Initialized
DEBUG - 2014-03-29 12:12:18 --> Model Class Initialized
DEBUG - 2014-03-29 12:12:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 12:12:18 --> Encrypt Class Initialized
INFO  - 2014-03-29 12:12:18 --> after session initialization................
INFO  - 2014-03-29 12:12:18 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  '37'
INFO  - 2014-03-29 12:12:18 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-03-29 12:12:18 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2014-03-29 12:12:18 --> inside retrieving vacancy for member
INFO  - 2014-03-29 12:12:18 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2014-03-29 12:12:18 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-03-29 12:12:18 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2014-03-29 12:12:18 --> Drugs ::::::::::===>SELECT d.id_drug, d.drug_name, d.drug_description, group_concat(bn.name, ':', bn.id_brandname) as drug_company, group_concat(dcc.name) as drug_brandnames, dcc.id_drugcategory as category_id
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dcc`.`brandname_id`
WHERE `d`.`id_drug` =  '1'
GROUP BY `id_drug`
ORDER BY `d`.`drug_name`, `bn`.`id_brandname`
INFO  - 2014-03-29 12:12:18 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drugcategory_id` = `dc`.`id_drugcategory`
JOIN `drug` d ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2014-03-29 12:12:18 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2014-03-29 12:12:18 --> inside retrieving pharmacy for drug id is 1
INFO  - 2014-03-29 12:12:18 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2014-03-29 12:12:18 --> Related drugs ::::::::::===>SELECT d.drug_name
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcg`.`drugcategory_id` = `dcc`.`id_drugcategory`
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
WHERE `dcc`.`brandname_id` =  '0'
AND `dc`.`id_drugclass` =  '0'
INFO  - 2014-03-29 12:12:18 --> inside retrieve most searched drugs
INFO  - 2014-03-29 12:12:18 --> SELECT `d`.`id_drug` as id, `d`.`drug_name` as name, count(ds.id_drugsearch) as search_count
FROM (`drug_search` ds)
JOIN `drug` d ON `d`.`id_drug` = `ds`.`drug_id`
GROUP BY `d`.`id_drug`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-03-29 12:12:18 --> inside retrieve most searched pharmacy
INFO  - 2014-03-29 12:12:18 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-03-29 12:12:18 --> inside retrieve most searched article
INFO  - 2014-03-29 12:12:18 --> SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description, count(ats.article_id) as search_count
FROM (`article_search` ats)
JOIN `article` a ON `a`.`id_article` = `ats`.`article_id`
JOIN `news` n ON `a`.`newsid_news` = `n`.`id_news`
GROUP BY `a`.`id_article`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-03-29 12:12:18 --> The session id is ========>c68cbc237de19cebc6bca6a06348041c and the member id is =======>37
INFO  - 2014-03-29 12:12:18 -->  column name inside view is 0 column Data is 491
INFO  - 2014-03-29 12:12:18 -->  column name inside view is 1 column Data is 618
INFO  - 2014-03-29 12:12:18 -->  column name inside view is 2 column Data is 1
INFO  - 2014-03-29 12:12:18 -->  column name inside view is 3 column Data is 515
INFO  - 2014-03-29 12:12:18 -->  column name inside view is 4 column Data is 488
INFO  - 2014-03-29 12:12:18 -->  column name inside view is 5 column Data is 509
INFO  - 2014-03-29 12:12:18 -->  column name inside view is 6 column Data is 487
INFO  - 2014-03-29 12:12:18 -->  column name inside view is 7 column Data is 489
INFO  - 2014-03-29 12:12:18 -->  column name inside view is 8 column Data is 516
INFO  - 2014-03-29 12:12:18 -->  column name inside view is 9 column Data is 641
INFO  - 2014-03-29 12:12:18 -->  column name inside view is 0 column Data is 5
INFO  - 2014-03-29 12:12:18 -->  column name inside view is 1 column Data is 2
INFO  - 2014-03-29 12:12:18 -->  column name inside view is 2 column Data is 3
INFO  - 2014-03-29 12:12:18 -->  column name inside view is 3 column Data is 1
INFO  - 2014-03-29 12:12:18 -->  column name inside view is 4 column Data is 18
INFO  - 2014-03-29 12:12:18 -->  column name inside view is 5 column Data is 15
INFO  - 2014-03-29 12:12:18 -->  column name inside view is 6 column Data is 14
INFO  - 2014-03-29 12:12:18 -->  column name inside view is 7 column Data is 6
INFO  - 2014-03-29 12:12:18 -->  column name inside view is 8 column Data is 43
INFO  - 2014-03-29 12:12:18 -->  column name inside view is 9 column Data is 9
INFO  - 2014-03-29 12:12:18 -->  column name inside view is 0 column Data is Male Doctor
INFO  - 2014-03-29 12:12:18 -->  column name inside view is 1 column Data is Ordinary User
DEBUG - 2014-03-29 12:12:18 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2014-03-29 12:12:18 --> Final output sent to browser
DEBUG - 2014-03-29 12:12:18 --> Total execution time: 0.0970
DEBUG - 2014-03-29 12:12:19 --> Config Class Initialized
DEBUG - 2014-03-29 12:12:19 --> Hooks Class Initialized
DEBUG - 2014-03-29 12:12:19 --> Utf8 Class Initialized
DEBUG - 2014-03-29 12:12:19 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 12:12:19 --> URI Class Initialized
DEBUG - 2014-03-29 12:12:19 --> Router Class Initialized
ERROR - 2014-03-29 12:12:19 --> 404 Page Not Found --> css
DEBUG - 2014-03-29 12:12:22 --> Config Class Initialized
DEBUG - 2014-03-29 12:12:22 --> Hooks Class Initialized
DEBUG - 2014-03-29 12:12:22 --> Utf8 Class Initialized
DEBUG - 2014-03-29 12:12:22 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 12:12:22 --> URI Class Initialized
DEBUG - 2014-03-29 12:12:22 --> Router Class Initialized
DEBUG - 2014-03-29 12:12:22 --> Output Class Initialized
DEBUG - 2014-03-29 12:12:22 --> Security Class Initialized
DEBUG - 2014-03-29 12:12:22 --> Input Class Initialized
DEBUG - 2014-03-29 12:12:22 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 12:12:22 --> Language Class Initialized
DEBUG - 2014-03-29 12:12:22 --> Loader Class Initialized
DEBUG - 2014-03-29 12:12:22 --> Helper loaded: form_helper
DEBUG - 2014-03-29 12:12:22 --> Helper loaded: url_helper
DEBUG - 2014-03-29 12:12:22 --> Helper loaded: html_helper
DEBUG - 2014-03-29 12:12:22 --> Database Driver Class Initialized
DEBUG - 2014-03-29 12:12:22 --> Session Class Initialized
DEBUG - 2014-03-29 12:12:22 --> Helper loaded: string_helper
DEBUG - 2014-03-29 12:12:22 --> Session routines successfully run
DEBUG - 2014-03-29 12:12:22 --> Form Validation Class Initialized
DEBUG - 2014-03-29 12:12:22 --> Controller Class Initialized
DEBUG - 2014-03-29 12:12:22 --> Model Class Initialized
DEBUG - 2014-03-29 12:12:22 --> Model Class Initialized
DEBUG - 2014-03-29 12:12:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 12:12:22 --> Encrypt Class Initialized
INFO  - 2014-03-29 12:12:22 --> after session initialization................
INFO  - 2014-03-29 12:12:22 --> last news id is 0
INFO  - 2014-03-29 12:12:22 --> SELECT a.id_article as id, a.title as newsletter_title, a.description as newsletter_description, a.guestonly as guestonly, a.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`article` a)
JOIN `member` m ON `a`.`memberid_member` = `m`.`id_member`
WHERE `a`.`id_article` <> 0
ORDER BY `a`.`id_article` desc
LIMIT 15
INFO  - 2014-03-29 12:12:22 --> after newsleters list has been clicked.................
INFO  - 2014-03-29 12:12:22 --> The session id is ========>c68cbc237de19cebc6bca6a06348041c and the member id is =======>37
INFO  - 2014-03-29 12:12:22 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=31&article_type=newsletter_title
INFO  - 2014-03-29 12:12:22 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=16&article_type=newsletter_title
INFO  - 2014-03-29 12:12:22 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=15&article_type=newsletter_title
INFO  - 2014-03-29 12:12:22 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=14&article_type=newsletter_title
INFO  - 2014-03-29 12:12:22 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=13&article_type=newsletter_title
INFO  - 2014-03-29 12:12:22 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=12&article_type=newsletter_title
INFO  - 2014-03-29 12:12:22 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=11&article_type=newsletter_title
INFO  - 2014-03-29 12:12:22 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=10&article_type=newsletter_title
INFO  - 2014-03-29 12:12:22 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=9&article_type=newsletter_title
INFO  - 2014-03-29 12:12:22 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=8&article_type=newsletter_title
INFO  - 2014-03-29 12:12:22 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=7&article_type=newsletter_title
INFO  - 2014-03-29 12:12:22 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=6&article_type=newsletter_title
INFO  - 2014-03-29 12:12:22 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=5&article_type=newsletter_title
INFO  - 2014-03-29 12:12:22 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=4&article_type=newsletter_title
INFO  - 2014-03-29 12:12:22 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=3&article_type=newsletter_title
DEBUG - 2014-03-29 12:12:22 --> File loaded: ../pharmaray-application/views/articles.php
DEBUG - 2014-03-29 12:12:22 --> Final output sent to browser
DEBUG - 2014-03-29 12:12:22 --> Total execution time: 0.0550
DEBUG - 2014-03-29 12:12:23 --> Config Class Initialized
DEBUG - 2014-03-29 12:12:23 --> Hooks Class Initialized
DEBUG - 2014-03-29 12:12:23 --> Utf8 Class Initialized
DEBUG - 2014-03-29 12:12:23 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 12:12:23 --> URI Class Initialized
DEBUG - 2014-03-29 12:12:23 --> Router Class Initialized
DEBUG - 2014-03-29 12:12:23 --> Output Class Initialized
DEBUG - 2014-03-29 12:12:23 --> Security Class Initialized
DEBUG - 2014-03-29 12:12:23 --> Input Class Initialized
DEBUG - 2014-03-29 12:12:23 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 12:12:23 --> Language Class Initialized
DEBUG - 2014-03-29 12:12:23 --> Loader Class Initialized
DEBUG - 2014-03-29 12:12:23 --> Helper loaded: form_helper
DEBUG - 2014-03-29 12:12:23 --> Helper loaded: url_helper
DEBUG - 2014-03-29 12:12:23 --> Helper loaded: html_helper
DEBUG - 2014-03-29 12:12:23 --> Database Driver Class Initialized
DEBUG - 2014-03-29 12:12:23 --> Session Class Initialized
DEBUG - 2014-03-29 12:12:23 --> Helper loaded: string_helper
DEBUG - 2014-03-29 12:12:23 --> Session routines successfully run
DEBUG - 2014-03-29 12:12:23 --> Form Validation Class Initialized
DEBUG - 2014-03-29 12:12:23 --> Controller Class Initialized
DEBUG - 2014-03-29 12:12:23 --> Model Class Initialized
DEBUG - 2014-03-29 12:12:23 --> Model Class Initialized
DEBUG - 2014-03-29 12:12:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 12:12:23 --> Encrypt Class Initialized
INFO  - 2014-03-29 12:12:23 --> after session initialization................
INFO  - 2014-03-29 12:12:23 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  '37'
INFO  - 2014-03-29 12:12:23 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-03-29 12:12:23 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2014-03-29 12:12:23 --> inside retrieving vacancy for member
INFO  - 2014-03-29 12:12:23 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2014-03-29 12:12:23 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-03-29 12:12:23 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2014-03-29 12:12:23 --> Drugs ::::::::::===>SELECT d.id_drug, d.drug_name, d.drug_description, group_concat(bn.name, ':', bn.id_brandname) as drug_company, group_concat(dcc.name) as drug_brandnames, dcc.id_drugcategory as category_id
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dcc`.`brandname_id`
WHERE `d`.`id_drug` =  '1'
GROUP BY `id_drug`
ORDER BY `d`.`drug_name`, `bn`.`id_brandname`
INFO  - 2014-03-29 12:12:23 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drugcategory_id` = `dc`.`id_drugcategory`
JOIN `drug` d ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2014-03-29 12:12:23 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2014-03-29 12:12:23 --> inside retrieving pharmacy for drug id is 1
INFO  - 2014-03-29 12:12:23 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2014-03-29 12:12:23 --> Related drugs ::::::::::===>SELECT d.drug_name
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcg`.`drugcategory_id` = `dcc`.`id_drugcategory`
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
WHERE `dcc`.`brandname_id` =  '0'
AND `dc`.`id_drugclass` =  '0'
INFO  - 2014-03-29 12:12:23 --> inside retrieve most searched drugs
INFO  - 2014-03-29 12:12:23 --> SELECT `d`.`id_drug` as id, `d`.`drug_name` as name, count(ds.id_drugsearch) as search_count
FROM (`drug_search` ds)
JOIN `drug` d ON `d`.`id_drug` = `ds`.`drug_id`
GROUP BY `d`.`id_drug`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-03-29 12:12:23 --> inside retrieve most searched pharmacy
INFO  - 2014-03-29 12:12:23 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-03-29 12:12:23 --> inside retrieve most searched article
INFO  - 2014-03-29 12:12:23 --> SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description, count(ats.article_id) as search_count
FROM (`article_search` ats)
JOIN `article` a ON `a`.`id_article` = `ats`.`article_id`
JOIN `news` n ON `a`.`newsid_news` = `n`.`id_news`
GROUP BY `a`.`id_article`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-03-29 12:12:23 --> The session id is ========>c68cbc237de19cebc6bca6a06348041c and the member id is =======>37
INFO  - 2014-03-29 12:12:23 -->  column name inside view is 0 column Data is 491
INFO  - 2014-03-29 12:12:23 -->  column name inside view is 1 column Data is 618
INFO  - 2014-03-29 12:12:23 -->  column name inside view is 2 column Data is 1
INFO  - 2014-03-29 12:12:23 -->  column name inside view is 3 column Data is 515
INFO  - 2014-03-29 12:12:23 -->  column name inside view is 4 column Data is 488
INFO  - 2014-03-29 12:12:23 -->  column name inside view is 5 column Data is 509
INFO  - 2014-03-29 12:12:23 -->  column name inside view is 6 column Data is 487
INFO  - 2014-03-29 12:12:23 -->  column name inside view is 7 column Data is 489
INFO  - 2014-03-29 12:12:23 -->  column name inside view is 8 column Data is 516
INFO  - 2014-03-29 12:12:23 -->  column name inside view is 9 column Data is 641
INFO  - 2014-03-29 12:12:23 -->  column name inside view is 0 column Data is 5
INFO  - 2014-03-29 12:12:23 -->  column name inside view is 1 column Data is 2
INFO  - 2014-03-29 12:12:23 -->  column name inside view is 2 column Data is 3
INFO  - 2014-03-29 12:12:23 -->  column name inside view is 3 column Data is 1
INFO  - 2014-03-29 12:12:23 -->  column name inside view is 4 column Data is 18
INFO  - 2014-03-29 12:12:23 -->  column name inside view is 5 column Data is 15
INFO  - 2014-03-29 12:12:23 -->  column name inside view is 6 column Data is 14
INFO  - 2014-03-29 12:12:23 -->  column name inside view is 7 column Data is 6
INFO  - 2014-03-29 12:12:23 -->  column name inside view is 8 column Data is 43
INFO  - 2014-03-29 12:12:23 -->  column name inside view is 9 column Data is 9
INFO  - 2014-03-29 12:12:23 -->  column name inside view is 0 column Data is Male Doctor
INFO  - 2014-03-29 12:12:23 -->  column name inside view is 1 column Data is Ordinary User
DEBUG - 2014-03-29 12:12:23 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2014-03-29 12:12:23 --> Final output sent to browser
DEBUG - 2014-03-29 12:12:23 --> Total execution time: 0.1000
DEBUG - 2014-03-29 12:12:23 --> Config Class Initialized
DEBUG - 2014-03-29 12:12:23 --> Hooks Class Initialized
DEBUG - 2014-03-29 12:12:23 --> Utf8 Class Initialized
DEBUG - 2014-03-29 12:12:23 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 12:12:23 --> URI Class Initialized
DEBUG - 2014-03-29 12:12:23 --> Router Class Initialized
ERROR - 2014-03-29 12:12:23 --> 404 Page Not Found --> css
DEBUG - 2014-03-29 12:12:24 --> Config Class Initialized
DEBUG - 2014-03-29 12:12:24 --> Hooks Class Initialized
DEBUG - 2014-03-29 12:12:24 --> Utf8 Class Initialized
DEBUG - 2014-03-29 12:12:24 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 12:12:24 --> URI Class Initialized
DEBUG - 2014-03-29 12:12:24 --> Router Class Initialized
DEBUG - 2014-03-29 12:12:24 --> Output Class Initialized
DEBUG - 2014-03-29 12:12:24 --> Security Class Initialized
DEBUG - 2014-03-29 12:12:24 --> Input Class Initialized
DEBUG - 2014-03-29 12:12:24 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 12:12:24 --> Language Class Initialized
DEBUG - 2014-03-29 12:12:24 --> Loader Class Initialized
DEBUG - 2014-03-29 12:12:24 --> Helper loaded: form_helper
DEBUG - 2014-03-29 12:12:24 --> Helper loaded: url_helper
DEBUG - 2014-03-29 12:12:24 --> Helper loaded: html_helper
DEBUG - 2014-03-29 12:12:24 --> Database Driver Class Initialized
DEBUG - 2014-03-29 12:12:24 --> Session Class Initialized
DEBUG - 2014-03-29 12:12:24 --> Helper loaded: string_helper
DEBUG - 2014-03-29 12:12:24 --> Session routines successfully run
DEBUG - 2014-03-29 12:12:24 --> Form Validation Class Initialized
DEBUG - 2014-03-29 12:12:24 --> Controller Class Initialized
DEBUG - 2014-03-29 12:12:24 --> Model Class Initialized
DEBUG - 2014-03-29 12:12:24 --> Model Class Initialized
DEBUG - 2014-03-29 12:12:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 12:12:24 --> Encrypt Class Initialized
INFO  - 2014-03-29 12:12:24 --> after session initialization................
INFO  - 2014-03-29 12:12:24 --> inside retrieve most commented forum topic 
INFO  - 2014-03-29 12:12:24 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
INFO  - 2014-03-29 12:12:24 --> inside retrieving first 20 topics 
INFO  - 2014-03-29 12:12:24 --> SELECT `t`.`id_topicforum`, upper(t.name) as name, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
LIMIT 20
INFO  - 2014-03-29 12:12:24 --> inside retrieving forum beyond id 
INFO  - 2014-03-29 12:12:24 --> SELECT `ff`.`id_forum` as id, `ff`.`name`, count(f.id_forum) as sub_forum
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` is null 
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`
INFO  - 2014-03-29 12:12:24 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2014-03-29 12:12:24 --> inside retrieving comments topic id and drug id is 1
INFO  - 2014-03-29 12:12:24 --> SELECT `tc`.`id_topiccomment`, `tc`.`comment`, `tc`.`timecreated`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2014-03-29 12:12:24 --> inside retrieving comments topic id 1
INFO  - 2014-03-29 12:12:24 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
INFO  - 2014-03-29 12:12:24 --> after forums has been clicked.................
INFO  - 2014-03-29 12:12:24 --> The session id is ========>c68cbc237de19cebc6bca6a06348041c and the member id is =======>37
INFO  - 2014-03-29 12:12:24 -->  column name inside view is 0 column Data is Male Doctor
INFO  - 2014-03-29 12:12:24 -->  column name inside view is 1 column Data is Ordinary User
DEBUG - 2014-03-29 12:12:24 --> File loaded: ../pharmaray-application/views/forum.php
DEBUG - 2014-03-29 12:12:24 --> Final output sent to browser
DEBUG - 2014-03-29 12:12:24 --> Total execution time: 0.0770
DEBUG - 2014-03-29 12:12:24 --> Config Class Initialized
DEBUG - 2014-03-29 12:12:24 --> Hooks Class Initialized
DEBUG - 2014-03-29 12:12:24 --> Utf8 Class Initialized
DEBUG - 2014-03-29 12:12:24 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 12:12:24 --> URI Class Initialized
DEBUG - 2014-03-29 12:12:24 --> Router Class Initialized
DEBUG - 2014-03-29 12:12:24 --> Output Class Initialized
DEBUG - 2014-03-29 12:12:24 --> Security Class Initialized
DEBUG - 2014-03-29 12:12:24 --> Input Class Initialized
DEBUG - 2014-03-29 12:12:24 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 12:12:24 --> Language Class Initialized
DEBUG - 2014-03-29 12:12:24 --> Loader Class Initialized
DEBUG - 2014-03-29 12:12:24 --> Helper loaded: form_helper
DEBUG - 2014-03-29 12:12:24 --> Helper loaded: url_helper
DEBUG - 2014-03-29 12:12:24 --> Helper loaded: html_helper
DEBUG - 2014-03-29 12:12:24 --> Database Driver Class Initialized
DEBUG - 2014-03-29 12:12:24 --> Session Class Initialized
DEBUG - 2014-03-29 12:12:24 --> Helper loaded: string_helper
DEBUG - 2014-03-29 12:12:24 --> Session routines successfully run
DEBUG - 2014-03-29 12:12:24 --> Form Validation Class Initialized
DEBUG - 2014-03-29 12:12:24 --> Controller Class Initialized
DEBUG - 2014-03-29 12:12:24 --> Model Class Initialized
DEBUG - 2014-03-29 12:12:24 --> Model Class Initialized
DEBUG - 2014-03-29 12:12:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 12:12:24 --> Encrypt Class Initialized
INFO  - 2014-03-29 12:12:24 --> after session initialization................
ERROR - 2014-03-29 12:12:24 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2014-03-29 12:12:24 --> Config Class Initialized
DEBUG - 2014-03-29 12:12:24 --> Hooks Class Initialized
DEBUG - 2014-03-29 12:12:24 --> Utf8 Class Initialized
DEBUG - 2014-03-29 12:12:24 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 12:12:24 --> URI Class Initialized
DEBUG - 2014-03-29 12:12:24 --> Router Class Initialized
ERROR - 2014-03-29 12:12:24 --> 404 Page Not Found --> css
DEBUG - 2014-03-29 12:12:25 --> Config Class Initialized
DEBUG - 2014-03-29 12:12:25 --> Hooks Class Initialized
DEBUG - 2014-03-29 12:12:25 --> Utf8 Class Initialized
DEBUG - 2014-03-29 12:12:25 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 12:12:25 --> URI Class Initialized
DEBUG - 2014-03-29 12:12:25 --> Router Class Initialized
DEBUG - 2014-03-29 12:12:25 --> Output Class Initialized
DEBUG - 2014-03-29 12:12:25 --> Security Class Initialized
DEBUG - 2014-03-29 12:12:25 --> Input Class Initialized
DEBUG - 2014-03-29 12:12:25 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 12:12:25 --> Language Class Initialized
DEBUG - 2014-03-29 12:12:25 --> Loader Class Initialized
DEBUG - 2014-03-29 12:12:25 --> Helper loaded: form_helper
DEBUG - 2014-03-29 12:12:25 --> Helper loaded: url_helper
DEBUG - 2014-03-29 12:12:25 --> Helper loaded: html_helper
DEBUG - 2014-03-29 12:12:25 --> Database Driver Class Initialized
DEBUG - 2014-03-29 12:12:25 --> Session Class Initialized
DEBUG - 2014-03-29 12:12:25 --> Helper loaded: string_helper
DEBUG - 2014-03-29 12:12:25 --> Session routines successfully run
DEBUG - 2014-03-29 12:12:25 --> Form Validation Class Initialized
DEBUG - 2014-03-29 12:12:25 --> Controller Class Initialized
DEBUG - 2014-03-29 12:12:25 --> Model Class Initialized
DEBUG - 2014-03-29 12:12:25 --> Model Class Initialized
DEBUG - 2014-03-29 12:12:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 12:12:25 --> Encrypt Class Initialized
INFO  - 2014-03-29 12:12:25 --> after session initialization................
INFO  - 2014-03-29 12:12:25 --> after community pharmacy  has been clicked.................
INFO  - 2014-03-29 12:12:25 --> inside retrieving pharmacy beyond id 0
INFO  - 2014-03-29 12:12:25 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2014-03-29 12:12:25 --> inside retrieving locations 
INFO  - 2014-03-29 12:12:25 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-03-29 12:12:25 --> The session id is ========>c68cbc237de19cebc6bca6a06348041c and the member id is =======>37
DEBUG - 2014-03-29 12:12:25 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2014-03-29 12:12:25 --> Final output sent to browser
DEBUG - 2014-03-29 12:12:25 --> Total execution time: 0.1490
DEBUG - 2014-03-29 12:12:25 --> Config Class Initialized
DEBUG - 2014-03-29 12:12:25 --> Hooks Class Initialized
DEBUG - 2014-03-29 12:12:25 --> Utf8 Class Initialized
DEBUG - 2014-03-29 12:12:25 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 12:12:25 --> URI Class Initialized
DEBUG - 2014-03-29 12:12:25 --> Router Class Initialized
DEBUG - 2014-03-29 12:12:25 --> Output Class Initialized
DEBUG - 2014-03-29 12:12:25 --> Security Class Initialized
DEBUG - 2014-03-29 12:12:25 --> Input Class Initialized
DEBUG - 2014-03-29 12:12:25 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 12:12:25 --> Language Class Initialized
DEBUG - 2014-03-29 12:12:25 --> Loader Class Initialized
DEBUG - 2014-03-29 12:12:25 --> Helper loaded: form_helper
DEBUG - 2014-03-29 12:12:25 --> Helper loaded: url_helper
DEBUG - 2014-03-29 12:12:25 --> Helper loaded: html_helper
DEBUG - 2014-03-29 12:12:26 --> Database Driver Class Initialized
DEBUG - 2014-03-29 12:12:26 --> Session Class Initialized
DEBUG - 2014-03-29 12:12:26 --> Helper loaded: string_helper
DEBUG - 2014-03-29 12:12:26 --> Session routines successfully run
DEBUG - 2014-03-29 12:12:26 --> Form Validation Class Initialized
DEBUG - 2014-03-29 12:12:26 --> Controller Class Initialized
DEBUG - 2014-03-29 12:12:26 --> Model Class Initialized
DEBUG - 2014-03-29 12:12:26 --> Model Class Initialized
DEBUG - 2014-03-29 12:12:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 12:12:26 --> Encrypt Class Initialized
INFO  - 2014-03-29 12:12:26 --> after session initialization................
INFO  - 2014-03-29 12:12:26 --> after internships list has been clicked.................
INFO  - 2014-03-29 12:12:26 --> inside retrieving locations 
INFO  - 2014-03-29 12:12:26 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-03-29 12:12:26 --> last intern id is 0
INFO  - 2014-03-29 12:12:26 --> The session id is ========>c68cbc237de19cebc6bca6a06348041c and the member id is =======>37
DEBUG - 2014-03-29 12:12:26 --> File loaded: ../pharmaray-application/views/internships.php
DEBUG - 2014-03-29 12:12:26 --> Final output sent to browser
DEBUG - 2014-03-29 12:12:26 --> Total execution time: 0.1580
DEBUG - 2014-03-29 12:12:28 --> Config Class Initialized
DEBUG - 2014-03-29 12:12:28 --> Hooks Class Initialized
DEBUG - 2014-03-29 12:12:28 --> Utf8 Class Initialized
DEBUG - 2014-03-29 12:12:28 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 12:12:28 --> URI Class Initialized
DEBUG - 2014-03-29 12:12:28 --> Router Class Initialized
DEBUG - 2014-03-29 12:12:28 --> Output Class Initialized
DEBUG - 2014-03-29 12:12:28 --> Security Class Initialized
DEBUG - 2014-03-29 12:12:28 --> Input Class Initialized
DEBUG - 2014-03-29 12:12:28 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 12:12:28 --> Language Class Initialized
DEBUG - 2014-03-29 12:12:28 --> Loader Class Initialized
DEBUG - 2014-03-29 12:12:28 --> Helper loaded: form_helper
DEBUG - 2014-03-29 12:12:28 --> Helper loaded: url_helper
DEBUG - 2014-03-29 12:12:28 --> Helper loaded: html_helper
DEBUG - 2014-03-29 12:12:28 --> Database Driver Class Initialized
DEBUG - 2014-03-29 12:12:28 --> Session Class Initialized
DEBUG - 2014-03-29 12:12:28 --> Helper loaded: string_helper
DEBUG - 2014-03-29 12:12:28 --> Session routines successfully run
DEBUG - 2014-03-29 12:12:28 --> Form Validation Class Initialized
DEBUG - 2014-03-29 12:12:28 --> Controller Class Initialized
DEBUG - 2014-03-29 12:12:28 --> Model Class Initialized
DEBUG - 2014-03-29 12:12:28 --> Model Class Initialized
DEBUG - 2014-03-29 12:12:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 12:12:28 --> Encrypt Class Initialized
INFO  - 2014-03-29 12:12:28 --> after session initialization................
DEBUG - 2014-03-29 12:12:28 --> Config Class Initialized
DEBUG - 2014-03-29 12:12:28 --> Hooks Class Initialized
DEBUG - 2014-03-29 12:12:28 --> Utf8 Class Initialized
DEBUG - 2014-03-29 12:12:28 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 12:12:28 --> URI Class Initialized
DEBUG - 2014-03-29 12:12:28 --> Router Class Initialized
DEBUG - 2014-03-29 12:12:28 --> No URI present. Default controller set.
DEBUG - 2014-03-29 12:12:28 --> Output Class Initialized
DEBUG - 2014-03-29 12:12:28 --> Security Class Initialized
DEBUG - 2014-03-29 12:12:28 --> Input Class Initialized
DEBUG - 2014-03-29 12:12:28 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 12:12:28 --> Language Class Initialized
DEBUG - 2014-03-29 12:12:28 --> Loader Class Initialized
DEBUG - 2014-03-29 12:12:28 --> Helper loaded: form_helper
DEBUG - 2014-03-29 12:12:28 --> Helper loaded: url_helper
DEBUG - 2014-03-29 12:12:28 --> Helper loaded: html_helper
DEBUG - 2014-03-29 12:12:28 --> Database Driver Class Initialized
DEBUG - 2014-03-29 12:12:28 --> Session Class Initialized
DEBUG - 2014-03-29 12:12:28 --> Helper loaded: string_helper
DEBUG - 2014-03-29 12:12:28 --> A session cookie was not found.
DEBUG - 2014-03-29 12:12:28 --> Session routines successfully run
DEBUG - 2014-03-29 12:12:28 --> Form Validation Class Initialized
DEBUG - 2014-03-29 12:12:28 --> Controller Class Initialized
DEBUG - 2014-03-29 12:12:28 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2014-03-29 12:12:28 --> Final output sent to browser
DEBUG - 2014-03-29 12:12:28 --> Total execution time: 0.0320
DEBUG - 2014-03-29 12:12:28 --> Config Class Initialized
DEBUG - 2014-03-29 12:12:28 --> Hooks Class Initialized
DEBUG - 2014-03-29 12:12:28 --> Utf8 Class Initialized
DEBUG - 2014-03-29 12:12:28 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 12:12:28 --> URI Class Initialized
DEBUG - 2014-03-29 12:12:28 --> Router Class Initialized
DEBUG - 2014-03-29 12:12:28 --> Output Class Initialized
DEBUG - 2014-03-29 12:12:28 --> Security Class Initialized
DEBUG - 2014-03-29 12:12:28 --> Input Class Initialized
DEBUG - 2014-03-29 12:12:28 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 12:12:28 --> Language Class Initialized
DEBUG - 2014-03-29 12:12:28 --> Loader Class Initialized
DEBUG - 2014-03-29 12:12:28 --> Helper loaded: form_helper
DEBUG - 2014-03-29 12:12:28 --> Helper loaded: url_helper
DEBUG - 2014-03-29 12:12:28 --> Helper loaded: html_helper
DEBUG - 2014-03-29 12:12:28 --> Database Driver Class Initialized
DEBUG - 2014-03-29 12:12:28 --> Session Class Initialized
DEBUG - 2014-03-29 12:12:28 --> Helper loaded: string_helper
DEBUG - 2014-03-29 12:12:28 --> Session routines successfully run
DEBUG - 2014-03-29 12:12:28 --> Form Validation Class Initialized
DEBUG - 2014-03-29 12:12:28 --> Controller Class Initialized
DEBUG - 2014-03-29 12:12:28 --> Model Class Initialized
DEBUG - 2014-03-29 12:12:28 --> Model Class Initialized
DEBUG - 2014-03-29 12:12:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 12:12:28 --> Encrypt Class Initialized
INFO  - 2014-03-29 12:12:28 --> after session initialization................
INFO  - 2014-03-29 12:12:28 --> after rays has been clicked.................
INFO  - 2014-03-29 12:12:28 --> last article id is 0
INFO  - 2014-03-29 12:12:28 --> The session id is ========>8bf5e5db3b4a1a2e46d96bbb67c56aa6 and the member id is =======>
INFO  - 2014-03-29 12:12:28 --> The session id is ========>8bf5e5db3b4a1a2e46d96bbb67c56aa6 and the member id is =======>
INFO  - 2014-03-29 12:12:28 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:12:28 --> 0 the guest only data>>>>>
INFO  - 2014-03-29 12:12:28 --> 0 the guest only data>> AFTER >>>#31
INFO  - 2014-03-29 12:12:28 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:12:28 --> 0 the guest only data>>>>>#31
INFO  - 2014-03-29 12:12:28 --> 0 the guest only data>> AFTER >>>#16
INFO  - 2014-03-29 12:12:28 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:12:28 --> 1 the guest only data>>>>>#16
INFO  - 2014-03-29 12:12:28 --> 1 the guest only data>> AFTER >>>#16
INFO  - 2014-03-29 12:12:28 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:12:28 --> 0 the guest only data>>>>>#16
INFO  - 2014-03-29 12:12:28 --> 0 the guest only data>> AFTER >>>#14
INFO  - 2014-03-29 12:12:28 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:12:28 --> 1 the guest only data>>>>>#14
INFO  - 2014-03-29 12:12:28 --> 1 the guest only data>> AFTER >>>#14
INFO  - 2014-03-29 12:12:28 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:12:28 --> 0 the guest only data>>>>>#14
INFO  - 2014-03-29 12:12:28 --> 0 the guest only data>> AFTER >>>#12
INFO  - 2014-03-29 12:12:28 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:12:28 --> 1 the guest only data>>>>>#12
INFO  - 2014-03-29 12:12:28 --> 1 the guest only data>> AFTER >>>#12
INFO  - 2014-03-29 12:12:28 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:12:28 --> 0 the guest only data>>>>>#12
INFO  - 2014-03-29 12:12:28 --> 0 the guest only data>> AFTER >>>#10
INFO  - 2014-03-29 12:12:28 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:12:28 --> 0 the guest only data>>>>>#10
INFO  - 2014-03-29 12:12:28 --> 0 the guest only data>> AFTER >>>#9
INFO  - 2014-03-29 12:12:28 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:12:28 --> 1 the guest only data>>>>>#9
INFO  - 2014-03-29 12:12:28 --> 1 the guest only data>> AFTER >>>#9
INFO  - 2014-03-29 12:12:28 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:12:28 --> 0 the guest only data>>>>>#9
INFO  - 2014-03-29 12:12:28 --> 0 the guest only data>> AFTER >>>#7
INFO  - 2014-03-29 12:12:28 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:12:28 --> 1 the guest only data>>>>>#7
INFO  - 2014-03-29 12:12:28 --> 1 the guest only data>> AFTER >>>#7
INFO  - 2014-03-29 12:12:28 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:12:28 --> 0 the guest only data>>>>>#7
INFO  - 2014-03-29 12:12:28 --> 0 the guest only data>> AFTER >>>#5
INFO  - 2014-03-29 12:12:28 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:12:28 --> 0 the guest only data>>>>>#5
INFO  - 2014-03-29 12:12:28 --> 0 the guest only data>> AFTER >>>#4
INFO  - 2014-03-29 12:12:28 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:12:28 --> 1 the guest only data>>>>>#4
INFO  - 2014-03-29 12:12:28 --> 1 the guest only data>> AFTER >>>#4
INFO  - 2014-03-29 12:12:28 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:12:28 --> 1 the guest only data>>>>>#4
INFO  - 2014-03-29 12:12:28 --> 1 the guest only data>> AFTER >>>#4
INFO  - 2014-03-29 12:12:28 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:12:28 --> 1 the guest only data>>>>>#4
INFO  - 2014-03-29 12:12:28 --> 1 the guest only data>> AFTER >>>#4
DEBUG - 2014-03-29 12:12:28 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2014-03-29 12:12:28 --> Final output sent to browser
DEBUG - 2014-03-29 12:12:28 --> Total execution time: 0.0580
DEBUG - 2014-03-29 12:33:06 --> Config Class Initialized
DEBUG - 2014-03-29 12:33:06 --> Hooks Class Initialized
DEBUG - 2014-03-29 12:33:06 --> Utf8 Class Initialized
DEBUG - 2014-03-29 12:33:06 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 12:33:06 --> URI Class Initialized
DEBUG - 2014-03-29 12:33:06 --> Router Class Initialized
DEBUG - 2014-03-29 12:33:06 --> Output Class Initialized
DEBUG - 2014-03-29 12:33:06 --> Security Class Initialized
DEBUG - 2014-03-29 12:33:06 --> Input Class Initialized
DEBUG - 2014-03-29 12:33:06 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 12:33:06 --> Language Class Initialized
DEBUG - 2014-03-29 12:33:06 --> Loader Class Initialized
DEBUG - 2014-03-29 12:33:06 --> Helper loaded: form_helper
DEBUG - 2014-03-29 12:33:06 --> Helper loaded: url_helper
DEBUG - 2014-03-29 12:33:06 --> Helper loaded: html_helper
DEBUG - 2014-03-29 12:33:06 --> Database Driver Class Initialized
DEBUG - 2014-03-29 12:33:06 --> Session Class Initialized
DEBUG - 2014-03-29 12:33:06 --> Helper loaded: string_helper
DEBUG - 2014-03-29 12:33:06 --> Session routines successfully run
DEBUG - 2014-03-29 12:33:06 --> Form Validation Class Initialized
DEBUG - 2014-03-29 12:33:06 --> Controller Class Initialized
DEBUG - 2014-03-29 12:33:06 --> Model Class Initialized
DEBUG - 2014-03-29 12:33:06 --> Model Class Initialized
DEBUG - 2014-03-29 12:33:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 12:33:06 --> Encrypt Class Initialized
INFO  - 2014-03-29 12:33:06 --> after session initialization................
INFO  - 2014-03-29 12:33:06 --> the form message==>
INFO  - 2014-03-29 12:33:06 --> The session id is ========>afc7f1cd509b315f929d8dd1f38328f5 and the member id is =======>
INFO  - 2014-03-29 12:33:06 --> after the retrieving session list.................//////////
INFO  - 2014-03-29 12:33:06 --> The session id is ========>afc7f1cd509b315f929d8dd1f38328f5 and the member id is =======>
DEBUG - 2014-03-29 12:33:06 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-03-29 12:33:06 --> Final output sent to browser
DEBUG - 2014-03-29 12:33:06 --> Total execution time: 0.0470
DEBUG - 2014-03-29 12:33:16 --> Config Class Initialized
DEBUG - 2014-03-29 12:33:16 --> Hooks Class Initialized
DEBUG - 2014-03-29 12:33:16 --> Utf8 Class Initialized
DEBUG - 2014-03-29 12:33:16 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 12:33:16 --> URI Class Initialized
DEBUG - 2014-03-29 12:33:16 --> Router Class Initialized
DEBUG - 2014-03-29 12:33:16 --> Output Class Initialized
DEBUG - 2014-03-29 12:33:16 --> Security Class Initialized
DEBUG - 2014-03-29 12:33:16 --> Input Class Initialized
DEBUG - 2014-03-29 12:33:16 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 12:33:16 --> Language Class Initialized
DEBUG - 2014-03-29 12:33:16 --> Loader Class Initialized
DEBUG - 2014-03-29 12:33:16 --> Helper loaded: form_helper
DEBUG - 2014-03-29 12:33:16 --> Helper loaded: url_helper
DEBUG - 2014-03-29 12:33:16 --> Helper loaded: html_helper
DEBUG - 2014-03-29 12:33:16 --> Database Driver Class Initialized
DEBUG - 2014-03-29 12:33:16 --> Session Class Initialized
DEBUG - 2014-03-29 12:33:16 --> Helper loaded: string_helper
DEBUG - 2014-03-29 12:33:16 --> Session routines successfully run
DEBUG - 2014-03-29 12:33:16 --> Form Validation Class Initialized
DEBUG - 2014-03-29 12:33:16 --> Controller Class Initialized
DEBUG - 2014-03-29 12:33:16 --> Model Class Initialized
DEBUG - 2014-03-29 12:33:16 --> Model Class Initialized
DEBUG - 2014-03-29 12:33:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 12:33:16 --> Encrypt Class Initialized
INFO  - 2014-03-29 12:33:16 --> after session initialization................
INFO  - 2014-03-29 12:33:16 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  ''
INFO  - 2014-03-29 12:33:16 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-03-29 12:33:16 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2014-03-29 12:33:16 --> inside retrieving vacancy for member
INFO  - 2014-03-29 12:33:16 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2014-03-29 12:33:16 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-03-29 12:33:16 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2014-03-29 12:33:16 --> Drugs ::::::::::===>SELECT d.id_drug, d.drug_name, d.drug_description, group_concat(bn.name, ':', bn.id_brandname) as drug_company, group_concat(dcc.name) as drug_brandnames, dcc.id_drugcategory as category_id
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dcc`.`brandname_id`
WHERE `d`.`id_drug` =  '1'
GROUP BY `id_drug`
ORDER BY `d`.`drug_name`, `bn`.`id_brandname`
INFO  - 2014-03-29 12:33:16 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drugcategory_id` = `dc`.`id_drugcategory`
JOIN `drug` d ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2014-03-29 12:33:16 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2014-03-29 12:33:16 --> inside retrieving pharmacy for drug id is 1
INFO  - 2014-03-29 12:33:16 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2014-03-29 12:33:16 --> Related drugs ::::::::::===>SELECT d.drug_name
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcg`.`drugcategory_id` = `dcc`.`id_drugcategory`
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
WHERE `dcc`.`brandname_id` =  '0'
AND `dc`.`id_drugclass` =  '0'
INFO  - 2014-03-29 12:33:16 --> inside retrieve most searched drugs
INFO  - 2014-03-29 12:33:16 --> SELECT `d`.`id_drug` as id, `d`.`drug_name` as name, count(ds.id_drugsearch) as search_count
FROM (`drug_search` ds)
JOIN `drug` d ON `d`.`id_drug` = `ds`.`drug_id`
GROUP BY `d`.`id_drug`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-03-29 12:33:16 --> inside retrieve most searched pharmacy
INFO  - 2014-03-29 12:33:16 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-03-29 12:33:16 --> inside retrieve most searched article
INFO  - 2014-03-29 12:33:16 --> SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description, count(ats.article_id) as search_count
FROM (`article_search` ats)
JOIN `article` a ON `a`.`id_article` = `ats`.`article_id`
JOIN `news` n ON `a`.`newsid_news` = `n`.`id_news`
GROUP BY `a`.`id_article`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-03-29 12:33:16 --> The session id is ========>afc7f1cd509b315f929d8dd1f38328f5 and the member id is =======>
INFO  - 2014-03-29 12:33:16 -->  column name inside view is 0 column Data is 491
INFO  - 2014-03-29 12:33:16 -->  column name inside view is 1 column Data is 618
INFO  - 2014-03-29 12:33:16 -->  column name inside view is 2 column Data is 1
INFO  - 2014-03-29 12:33:16 -->  column name inside view is 3 column Data is 515
INFO  - 2014-03-29 12:33:16 -->  column name inside view is 4 column Data is 488
INFO  - 2014-03-29 12:33:16 -->  column name inside view is 5 column Data is 509
INFO  - 2014-03-29 12:33:16 -->  column name inside view is 6 column Data is 487
INFO  - 2014-03-29 12:33:16 -->  column name inside view is 7 column Data is 489
INFO  - 2014-03-29 12:33:16 -->  column name inside view is 8 column Data is 516
INFO  - 2014-03-29 12:33:16 -->  column name inside view is 9 column Data is 641
INFO  - 2014-03-29 12:33:16 -->  column name inside view is 0 column Data is 5
INFO  - 2014-03-29 12:33:16 -->  column name inside view is 1 column Data is 2
INFO  - 2014-03-29 12:33:16 -->  column name inside view is 2 column Data is 3
INFO  - 2014-03-29 12:33:16 -->  column name inside view is 3 column Data is 1
INFO  - 2014-03-29 12:33:16 -->  column name inside view is 4 column Data is 18
INFO  - 2014-03-29 12:33:16 -->  column name inside view is 5 column Data is 15
INFO  - 2014-03-29 12:33:16 -->  column name inside view is 6 column Data is 14
INFO  - 2014-03-29 12:33:16 -->  column name inside view is 7 column Data is 6
INFO  - 2014-03-29 12:33:16 -->  column name inside view is 8 column Data is 43
INFO  - 2014-03-29 12:33:16 -->  column name inside view is 9 column Data is 9
INFO  - 2014-03-29 12:33:16 -->  column name inside view is 0 column Data is Male Doctor
INFO  - 2014-03-29 12:33:16 -->  column name inside view is 1 column Data is Ordinary User
DEBUG - 2014-03-29 12:33:16 --> File loaded: ../pharmaray-application/views/onlinepharmacy.php
DEBUG - 2014-03-29 12:33:16 --> Final output sent to browser
DEBUG - 2014-03-29 12:33:16 --> Total execution time: 0.0960
DEBUG - 2014-03-29 12:33:16 --> Config Class Initialized
DEBUG - 2014-03-29 12:33:16 --> Hooks Class Initialized
DEBUG - 2014-03-29 12:33:16 --> Utf8 Class Initialized
DEBUG - 2014-03-29 12:33:16 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 12:33:16 --> URI Class Initialized
DEBUG - 2014-03-29 12:33:16 --> Router Class Initialized
ERROR - 2014-03-29 12:33:16 --> 404 Page Not Found --> css
DEBUG - 2014-03-29 12:33:45 --> Config Class Initialized
DEBUG - 2014-03-29 12:33:45 --> Hooks Class Initialized
DEBUG - 2014-03-29 12:33:45 --> Utf8 Class Initialized
DEBUG - 2014-03-29 12:33:45 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 12:33:45 --> URI Class Initialized
DEBUG - 2014-03-29 12:33:45 --> Router Class Initialized
DEBUG - 2014-03-29 12:33:45 --> Output Class Initialized
DEBUG - 2014-03-29 12:33:45 --> Security Class Initialized
DEBUG - 2014-03-29 12:33:45 --> Input Class Initialized
DEBUG - 2014-03-29 12:33:45 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 12:33:45 --> Language Class Initialized
DEBUG - 2014-03-29 12:33:45 --> Loader Class Initialized
DEBUG - 2014-03-29 12:33:45 --> Helper loaded: form_helper
DEBUG - 2014-03-29 12:33:46 --> Helper loaded: url_helper
DEBUG - 2014-03-29 12:33:46 --> Helper loaded: html_helper
DEBUG - 2014-03-29 12:33:46 --> Database Driver Class Initialized
DEBUG - 2014-03-29 12:33:46 --> Session Class Initialized
DEBUG - 2014-03-29 12:33:46 --> Helper loaded: string_helper
DEBUG - 2014-03-29 12:33:46 --> Session routines successfully run
DEBUG - 2014-03-29 12:33:46 --> Form Validation Class Initialized
DEBUG - 2014-03-29 12:33:46 --> Controller Class Initialized
DEBUG - 2014-03-29 12:33:46 --> Model Class Initialized
DEBUG - 2014-03-29 12:33:46 --> Model Class Initialized
DEBUG - 2014-03-29 12:33:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 12:33:46 --> Encrypt Class Initialized
INFO  - 2014-03-29 12:33:46 --> after session initialization................
INFO  - 2014-03-29 12:33:46 --> after community pharmacy  has been clicked.................
INFO  - 2014-03-29 12:33:46 --> inside retrieving pharmacy beyond id 0
INFO  - 2014-03-29 12:33:46 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2014-03-29 12:33:46 --> inside retrieving locations 
INFO  - 2014-03-29 12:33:46 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-03-29 12:33:46 --> The session id is ========>afc7f1cd509b315f929d8dd1f38328f5 and the member id is =======>
DEBUG - 2014-03-29 12:33:46 --> File loaded: ../pharmaray-application/views/guestcommunitypharmacy.php
DEBUG - 2014-03-29 12:33:46 --> Final output sent to browser
DEBUG - 2014-03-29 12:33:46 --> Total execution time: 0.1490
DEBUG - 2014-03-29 12:36:08 --> Config Class Initialized
DEBUG - 2014-03-29 12:36:08 --> Hooks Class Initialized
DEBUG - 2014-03-29 12:36:08 --> Utf8 Class Initialized
DEBUG - 2014-03-29 12:36:08 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 12:36:08 --> URI Class Initialized
DEBUG - 2014-03-29 12:36:08 --> Router Class Initialized
DEBUG - 2014-03-29 12:36:08 --> Output Class Initialized
DEBUG - 2014-03-29 12:36:08 --> Security Class Initialized
DEBUG - 2014-03-29 12:36:08 --> Input Class Initialized
DEBUG - 2014-03-29 12:36:08 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 12:36:08 --> Language Class Initialized
DEBUG - 2014-03-29 12:36:08 --> Loader Class Initialized
DEBUG - 2014-03-29 12:36:08 --> Helper loaded: form_helper
DEBUG - 2014-03-29 12:36:08 --> Helper loaded: url_helper
DEBUG - 2014-03-29 12:36:08 --> Helper loaded: html_helper
DEBUG - 2014-03-29 12:36:08 --> Database Driver Class Initialized
DEBUG - 2014-03-29 12:36:08 --> Session Class Initialized
DEBUG - 2014-03-29 12:36:08 --> Helper loaded: string_helper
DEBUG - 2014-03-29 12:36:08 --> Session routines successfully run
DEBUG - 2014-03-29 12:36:08 --> Form Validation Class Initialized
DEBUG - 2014-03-29 12:36:08 --> Controller Class Initialized
DEBUG - 2014-03-29 12:36:08 --> Model Class Initialized
DEBUG - 2014-03-29 12:36:08 --> Model Class Initialized
DEBUG - 2014-03-29 12:36:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 12:36:08 --> Encrypt Class Initialized
INFO  - 2014-03-29 12:36:08 --> after session initialization................
INFO  - 2014-03-29 12:36:08 --> the form message==>
INFO  - 2014-03-29 12:36:08 --> The session id is ========>afc7f1cd509b315f929d8dd1f38328f5 and the member id is =======>
INFO  - 2014-03-29 12:36:08 --> after the retrieving session list.................//////////
INFO  - 2014-03-29 12:36:08 --> The session id is ========>afc7f1cd509b315f929d8dd1f38328f5 and the member id is =======>
DEBUG - 2014-03-29 12:36:08 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-03-29 12:36:08 --> Final output sent to browser
DEBUG - 2014-03-29 12:36:08 --> Total execution time: 0.0470
DEBUG - 2014-03-29 12:36:27 --> Config Class Initialized
DEBUG - 2014-03-29 12:36:27 --> Hooks Class Initialized
DEBUG - 2014-03-29 12:36:27 --> Utf8 Class Initialized
DEBUG - 2014-03-29 12:36:27 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 12:36:27 --> URI Class Initialized
DEBUG - 2014-03-29 12:36:27 --> Router Class Initialized
DEBUG - 2014-03-29 12:36:27 --> Output Class Initialized
DEBUG - 2014-03-29 12:36:27 --> Security Class Initialized
DEBUG - 2014-03-29 12:36:27 --> Input Class Initialized
DEBUG - 2014-03-29 12:36:27 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 12:36:27 --> Language Class Initialized
DEBUG - 2014-03-29 12:36:27 --> Loader Class Initialized
DEBUG - 2014-03-29 12:36:27 --> Helper loaded: form_helper
DEBUG - 2014-03-29 12:36:27 --> Helper loaded: url_helper
DEBUG - 2014-03-29 12:36:27 --> Helper loaded: html_helper
DEBUG - 2014-03-29 12:36:27 --> Database Driver Class Initialized
DEBUG - 2014-03-29 12:36:27 --> Session Class Initialized
DEBUG - 2014-03-29 12:36:27 --> Helper loaded: string_helper
DEBUG - 2014-03-29 12:36:27 --> Session routines successfully run
DEBUG - 2014-03-29 12:36:27 --> Form Validation Class Initialized
DEBUG - 2014-03-29 12:36:27 --> Controller Class Initialized
DEBUG - 2014-03-29 12:36:27 --> Model Class Initialized
DEBUG - 2014-03-29 12:36:27 --> Model Class Initialized
DEBUG - 2014-03-29 12:36:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 12:36:27 --> Encrypt Class Initialized
INFO  - 2014-03-29 12:36:27 --> after session initialization................
INFO  - 2014-03-29 12:36:27 --> inside rays login auth.............
DEBUG - 2014-03-29 12:36:27 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2014-03-29 12:36:27 --> XSS Filtering completed
DEBUG - 2014-03-29 12:36:27 --> XSS Filtering completed
INFO  - 2014-03-29 12:36:27 --> login details ::::::::::===>SELECT `ld`.*
FROM (`logindetails` ld)
WHERE lower(ld.username) =  'oonwuzu@niftyhybrid.com'
INFO  - 2014-03-29 12:36:27 --> before getting the relation of member............36
INFO  - 2014-03-29 12:36:27 --> registration complete and username set on userpage.................Onwuzu
INFO  - 2014-03-29 12:36:27 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  '36'
INFO  - 2014-03-29 12:36:27 --> last news id is 0
INFO  - 2014-03-29 12:36:27 --> SELECT a.id_article as id, a.title as newsletter_title, a.description as newsletter_description, a.guestonly as guestonly, a.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`article` a)
JOIN `member` m ON `a`.`memberid_member` = `m`.`id_member`
WHERE `a`.`id_article` <> 0
ORDER BY `a`.`id_article` desc
LIMIT 15
INFO  - 2014-03-29 12:36:27 --> after newsleters list has been clicked.................
INFO  - 2014-03-29 12:36:27 --> The session id is ========>afc7f1cd509b315f929d8dd1f38328f5 and the member id is =======>36
INFO  - 2014-03-29 12:36:27 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=31&article_type=newsletter_title
INFO  - 2014-03-29 12:36:27 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=16&article_type=newsletter_title
INFO  - 2014-03-29 12:36:27 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=15&article_type=newsletter_title
INFO  - 2014-03-29 12:36:27 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=14&article_type=newsletter_title
INFO  - 2014-03-29 12:36:27 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=13&article_type=newsletter_title
INFO  - 2014-03-29 12:36:27 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=12&article_type=newsletter_title
INFO  - 2014-03-29 12:36:27 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=11&article_type=newsletter_title
INFO  - 2014-03-29 12:36:27 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=10&article_type=newsletter_title
INFO  - 2014-03-29 12:36:27 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=9&article_type=newsletter_title
INFO  - 2014-03-29 12:36:27 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=8&article_type=newsletter_title
INFO  - 2014-03-29 12:36:27 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=7&article_type=newsletter_title
INFO  - 2014-03-29 12:36:27 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=6&article_type=newsletter_title
INFO  - 2014-03-29 12:36:27 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=5&article_type=newsletter_title
INFO  - 2014-03-29 12:36:27 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=4&article_type=newsletter_title
INFO  - 2014-03-29 12:36:27 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=3&article_type=newsletter_title
DEBUG - 2014-03-29 12:36:27 --> File loaded: ../pharmaray-application/views/articles.php
DEBUG - 2014-03-29 12:36:27 --> Final output sent to browser
DEBUG - 2014-03-29 12:36:27 --> Total execution time: 0.0740
DEBUG - 2014-03-29 12:37:01 --> Config Class Initialized
DEBUG - 2014-03-29 12:37:01 --> Hooks Class Initialized
DEBUG - 2014-03-29 12:37:01 --> Utf8 Class Initialized
DEBUG - 2014-03-29 12:37:01 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 12:37:01 --> URI Class Initialized
DEBUG - 2014-03-29 12:37:01 --> Router Class Initialized
DEBUG - 2014-03-29 12:37:01 --> Output Class Initialized
DEBUG - 2014-03-29 12:37:01 --> Security Class Initialized
DEBUG - 2014-03-29 12:37:01 --> Input Class Initialized
DEBUG - 2014-03-29 12:37:01 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 12:37:01 --> Language Class Initialized
DEBUG - 2014-03-29 12:37:01 --> Loader Class Initialized
DEBUG - 2014-03-29 12:37:01 --> Helper loaded: form_helper
DEBUG - 2014-03-29 12:37:01 --> Helper loaded: url_helper
DEBUG - 2014-03-29 12:37:01 --> Helper loaded: html_helper
DEBUG - 2014-03-29 12:37:01 --> Database Driver Class Initialized
DEBUG - 2014-03-29 12:37:01 --> Session Class Initialized
DEBUG - 2014-03-29 12:37:01 --> Helper loaded: string_helper
DEBUG - 2014-03-29 12:37:01 --> Session routines successfully run
DEBUG - 2014-03-29 12:37:01 --> Form Validation Class Initialized
DEBUG - 2014-03-29 12:37:01 --> Controller Class Initialized
DEBUG - 2014-03-29 12:37:01 --> Model Class Initialized
DEBUG - 2014-03-29 12:37:01 --> Model Class Initialized
DEBUG - 2014-03-29 12:37:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 12:37:01 --> Encrypt Class Initialized
INFO  - 2014-03-29 12:37:01 --> after session initialization................
DEBUG - 2014-03-29 12:37:01 --> Config Class Initialized
DEBUG - 2014-03-29 12:37:01 --> Hooks Class Initialized
DEBUG - 2014-03-29 12:37:01 --> Utf8 Class Initialized
DEBUG - 2014-03-29 12:37:01 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 12:37:01 --> URI Class Initialized
DEBUG - 2014-03-29 12:37:01 --> Router Class Initialized
DEBUG - 2014-03-29 12:37:01 --> No URI present. Default controller set.
DEBUG - 2014-03-29 12:37:01 --> Output Class Initialized
DEBUG - 2014-03-29 12:37:01 --> Security Class Initialized
DEBUG - 2014-03-29 12:37:01 --> Input Class Initialized
DEBUG - 2014-03-29 12:37:01 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 12:37:01 --> Language Class Initialized
DEBUG - 2014-03-29 12:37:01 --> Loader Class Initialized
DEBUG - 2014-03-29 12:37:01 --> Helper loaded: form_helper
DEBUG - 2014-03-29 12:37:01 --> Helper loaded: url_helper
DEBUG - 2014-03-29 12:37:01 --> Helper loaded: html_helper
DEBUG - 2014-03-29 12:37:01 --> Database Driver Class Initialized
DEBUG - 2014-03-29 12:37:01 --> Session Class Initialized
DEBUG - 2014-03-29 12:37:01 --> Helper loaded: string_helper
DEBUG - 2014-03-29 12:37:01 --> A session cookie was not found.
DEBUG - 2014-03-29 12:37:01 --> Session routines successfully run
DEBUG - 2014-03-29 12:37:01 --> Form Validation Class Initialized
DEBUG - 2014-03-29 12:37:01 --> Controller Class Initialized
DEBUG - 2014-03-29 12:37:01 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2014-03-29 12:37:01 --> Final output sent to browser
DEBUG - 2014-03-29 12:37:01 --> Total execution time: 0.0360
DEBUG - 2014-03-29 12:37:01 --> Config Class Initialized
DEBUG - 2014-03-29 12:37:01 --> Hooks Class Initialized
DEBUG - 2014-03-29 12:37:01 --> Utf8 Class Initialized
DEBUG - 2014-03-29 12:37:01 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 12:37:01 --> URI Class Initialized
DEBUG - 2014-03-29 12:37:01 --> Router Class Initialized
DEBUG - 2014-03-29 12:37:01 --> Output Class Initialized
DEBUG - 2014-03-29 12:37:01 --> Security Class Initialized
DEBUG - 2014-03-29 12:37:01 --> Input Class Initialized
DEBUG - 2014-03-29 12:37:01 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 12:37:01 --> Language Class Initialized
DEBUG - 2014-03-29 12:37:01 --> Loader Class Initialized
DEBUG - 2014-03-29 12:37:01 --> Helper loaded: form_helper
DEBUG - 2014-03-29 12:37:01 --> Helper loaded: url_helper
DEBUG - 2014-03-29 12:37:01 --> Helper loaded: html_helper
DEBUG - 2014-03-29 12:37:01 --> Database Driver Class Initialized
DEBUG - 2014-03-29 12:37:01 --> Session Class Initialized
DEBUG - 2014-03-29 12:37:01 --> Helper loaded: string_helper
DEBUG - 2014-03-29 12:37:01 --> Session routines successfully run
DEBUG - 2014-03-29 12:37:01 --> Form Validation Class Initialized
DEBUG - 2014-03-29 12:37:01 --> Controller Class Initialized
DEBUG - 2014-03-29 12:37:01 --> Model Class Initialized
DEBUG - 2014-03-29 12:37:01 --> Model Class Initialized
DEBUG - 2014-03-29 12:37:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 12:37:01 --> Encrypt Class Initialized
INFO  - 2014-03-29 12:37:01 --> after session initialization................
INFO  - 2014-03-29 12:37:01 --> after rays has been clicked.................
INFO  - 2014-03-29 12:37:01 --> last article id is 0
INFO  - 2014-03-29 12:37:01 --> The session id is ========>eba976e82ae94aea485a754811456692 and the member id is =======>
INFO  - 2014-03-29 12:37:01 --> The session id is ========>eba976e82ae94aea485a754811456692 and the member id is =======>
INFO  - 2014-03-29 12:37:01 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:37:01 --> 0 the guest only data>>>>>
INFO  - 2014-03-29 12:37:01 --> 0 the guest only data>> AFTER >>>#31
INFO  - 2014-03-29 12:37:01 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:37:01 --> 0 the guest only data>>>>>#31
INFO  - 2014-03-29 12:37:01 --> 0 the guest only data>> AFTER >>>#16
INFO  - 2014-03-29 12:37:01 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:37:01 --> 1 the guest only data>>>>>#16
INFO  - 2014-03-29 12:37:01 --> 1 the guest only data>> AFTER >>>#16
INFO  - 2014-03-29 12:37:01 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:37:01 --> 0 the guest only data>>>>>#16
INFO  - 2014-03-29 12:37:01 --> 0 the guest only data>> AFTER >>>#14
INFO  - 2014-03-29 12:37:01 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:37:01 --> 1 the guest only data>>>>>#14
INFO  - 2014-03-29 12:37:01 --> 1 the guest only data>> AFTER >>>#14
INFO  - 2014-03-29 12:37:01 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:37:01 --> 0 the guest only data>>>>>#14
INFO  - 2014-03-29 12:37:01 --> 0 the guest only data>> AFTER >>>#12
INFO  - 2014-03-29 12:37:01 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:37:01 --> 1 the guest only data>>>>>#12
INFO  - 2014-03-29 12:37:01 --> 1 the guest only data>> AFTER >>>#12
INFO  - 2014-03-29 12:37:01 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:37:01 --> 0 the guest only data>>>>>#12
INFO  - 2014-03-29 12:37:01 --> 0 the guest only data>> AFTER >>>#10
INFO  - 2014-03-29 12:37:01 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:37:01 --> 0 the guest only data>>>>>#10
INFO  - 2014-03-29 12:37:01 --> 0 the guest only data>> AFTER >>>#9
INFO  - 2014-03-29 12:37:01 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:37:01 --> 1 the guest only data>>>>>#9
INFO  - 2014-03-29 12:37:01 --> 1 the guest only data>> AFTER >>>#9
INFO  - 2014-03-29 12:37:01 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:37:01 --> 0 the guest only data>>>>>#9
INFO  - 2014-03-29 12:37:01 --> 0 the guest only data>> AFTER >>>#7
INFO  - 2014-03-29 12:37:01 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:37:01 --> 1 the guest only data>>>>>#7
INFO  - 2014-03-29 12:37:01 --> 1 the guest only data>> AFTER >>>#7
INFO  - 2014-03-29 12:37:01 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:37:01 --> 0 the guest only data>>>>>#7
INFO  - 2014-03-29 12:37:01 --> 0 the guest only data>> AFTER >>>#5
INFO  - 2014-03-29 12:37:01 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:37:01 --> 0 the guest only data>>>>>#5
INFO  - 2014-03-29 12:37:01 --> 0 the guest only data>> AFTER >>>#4
INFO  - 2014-03-29 12:37:01 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:37:01 --> 1 the guest only data>>>>>#4
INFO  - 2014-03-29 12:37:01 --> 1 the guest only data>> AFTER >>>#4
INFO  - 2014-03-29 12:37:01 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:37:01 --> 1 the guest only data>>>>>#4
INFO  - 2014-03-29 12:37:01 --> 1 the guest only data>> AFTER >>>#4
INFO  - 2014-03-29 12:37:01 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 12:37:01 --> 1 the guest only data>>>>>#4
INFO  - 2014-03-29 12:37:01 --> 1 the guest only data>> AFTER >>>#4
DEBUG - 2014-03-29 12:37:01 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2014-03-29 12:37:01 --> Final output sent to browser
DEBUG - 2014-03-29 12:37:01 --> Total execution time: 0.0600
DEBUG - 2014-03-29 12:38:27 --> Config Class Initialized
DEBUG - 2014-03-29 12:38:27 --> Hooks Class Initialized
DEBUG - 2014-03-29 12:38:27 --> Utf8 Class Initialized
DEBUG - 2014-03-29 12:38:27 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 12:38:27 --> URI Class Initialized
DEBUG - 2014-03-29 12:38:27 --> Router Class Initialized
DEBUG - 2014-03-29 12:38:27 --> Output Class Initialized
DEBUG - 2014-03-29 12:38:27 --> Security Class Initialized
DEBUG - 2014-03-29 12:38:27 --> Input Class Initialized
DEBUG - 2014-03-29 12:38:27 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 12:38:27 --> Language Class Initialized
DEBUG - 2014-03-29 12:38:27 --> Loader Class Initialized
DEBUG - 2014-03-29 12:38:27 --> Helper loaded: form_helper
DEBUG - 2014-03-29 12:38:27 --> Helper loaded: url_helper
DEBUG - 2014-03-29 12:38:27 --> Helper loaded: html_helper
DEBUG - 2014-03-29 12:38:27 --> Database Driver Class Initialized
DEBUG - 2014-03-29 12:38:27 --> Session Class Initialized
DEBUG - 2014-03-29 12:38:27 --> Helper loaded: string_helper
DEBUG - 2014-03-29 12:38:27 --> Session routines successfully run
DEBUG - 2014-03-29 12:38:27 --> Form Validation Class Initialized
DEBUG - 2014-03-29 12:38:27 --> Controller Class Initialized
DEBUG - 2014-03-29 12:38:27 --> Model Class Initialized
DEBUG - 2014-03-29 12:38:27 --> Model Class Initialized
DEBUG - 2014-03-29 12:38:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 12:38:27 --> Encrypt Class Initialized
INFO  - 2014-03-29 12:38:27 --> after session initialization................
INFO  - 2014-03-29 12:38:27 --> article id is 15
DEBUG - 2014-03-29 12:38:27 --> Final output sent to browser
DEBUG - 2014-03-29 12:38:27 --> Total execution time: 0.0510
DEBUG - 2014-03-29 12:38:27 --> Config Class Initialized
DEBUG - 2014-03-29 12:38:27 --> Hooks Class Initialized
DEBUG - 2014-03-29 12:38:27 --> Utf8 Class Initialized
DEBUG - 2014-03-29 12:38:27 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 12:38:27 --> URI Class Initialized
DEBUG - 2014-03-29 12:38:27 --> Router Class Initialized
DEBUG - 2014-03-29 12:38:27 --> Output Class Initialized
DEBUG - 2014-03-29 12:38:27 --> Security Class Initialized
DEBUG - 2014-03-29 12:38:27 --> Input Class Initialized
DEBUG - 2014-03-29 12:38:27 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 12:38:27 --> Language Class Initialized
DEBUG - 2014-03-29 12:38:27 --> Loader Class Initialized
DEBUG - 2014-03-29 12:38:27 --> Helper loaded: form_helper
DEBUG - 2014-03-29 12:38:27 --> Helper loaded: url_helper
DEBUG - 2014-03-29 12:38:27 --> Helper loaded: html_helper
DEBUG - 2014-03-29 12:38:27 --> Database Driver Class Initialized
DEBUG - 2014-03-29 12:38:27 --> Session Class Initialized
DEBUG - 2014-03-29 12:38:27 --> Helper loaded: string_helper
DEBUG - 2014-03-29 12:38:27 --> Session routines successfully run
DEBUG - 2014-03-29 12:38:27 --> Form Validation Class Initialized
DEBUG - 2014-03-29 12:38:27 --> Controller Class Initialized
DEBUG - 2014-03-29 12:38:27 --> Model Class Initialized
DEBUG - 2014-03-29 12:38:27 --> Model Class Initialized
DEBUG - 2014-03-29 12:38:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 12:38:27 --> Encrypt Class Initialized
INFO  - 2014-03-29 12:38:27 --> after session initialization................
ERROR - 2014-03-29 12:38:27 --> Severity: Warning  --> file_get_contents(): php_network_getaddresses: getaddrinfo failed: No such host is known.  C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\ip2locationlite.class.php 33
ERROR - 2014-03-29 12:38:27 --> Severity: Warning  --> file_get_contents(http://api.ipinfodb.com/v3/ip-city/?key=e1c713f174bb86c8843e82b6aac56f8d050dab6a6649fe9134e9e19ea8e06238&amp;ip=::1&amp;format=xml): failed to open stream: php_network_getaddresses: getaddrinfo failed: No such host is known.  C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\ip2locationlite.class.php 33
INFO  - 2014-03-29 12:38:28 --> before inserting into article search table.................
INFO  - 2014-03-29 12:38:28 --> after inserting into article search table.................37
INFO  - 2014-03-29 12:38:28 --> INSERT INTO `article_search` (`article_id`, `user_id`, `timecreated`, `ipaddress`, `location`, `longitude`, `latitude`) VALUES ('15', '0', '2014-03-29 12:38:28', '::1', 'Lagos', '3.39583', '6.45306')
DEBUG - 2014-03-29 12:38:28 --> Final output sent to browser
DEBUG - 2014-03-29 12:38:28 --> Total execution time: 0.1670
DEBUG - 2014-03-29 12:39:14 --> Config Class Initialized
DEBUG - 2014-03-29 12:39:14 --> Hooks Class Initialized
DEBUG - 2014-03-29 12:39:14 --> Utf8 Class Initialized
DEBUG - 2014-03-29 12:39:14 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 12:39:14 --> URI Class Initialized
DEBUG - 2014-03-29 12:39:14 --> Router Class Initialized
DEBUG - 2014-03-29 12:39:14 --> Output Class Initialized
DEBUG - 2014-03-29 12:39:14 --> Security Class Initialized
DEBUG - 2014-03-29 12:39:14 --> Input Class Initialized
DEBUG - 2014-03-29 12:39:14 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 12:39:14 --> Language Class Initialized
DEBUG - 2014-03-29 12:39:14 --> Loader Class Initialized
DEBUG - 2014-03-29 12:39:14 --> Helper loaded: form_helper
DEBUG - 2014-03-29 12:39:14 --> Helper loaded: url_helper
DEBUG - 2014-03-29 12:39:14 --> Helper loaded: html_helper
DEBUG - 2014-03-29 12:39:14 --> Database Driver Class Initialized
DEBUG - 2014-03-29 12:39:14 --> Session Class Initialized
DEBUG - 2014-03-29 12:39:14 --> Helper loaded: string_helper
DEBUG - 2014-03-29 12:39:14 --> Session routines successfully run
DEBUG - 2014-03-29 12:39:14 --> Form Validation Class Initialized
DEBUG - 2014-03-29 12:39:14 --> Controller Class Initialized
DEBUG - 2014-03-29 12:39:14 --> Model Class Initialized
DEBUG - 2014-03-29 12:39:14 --> Model Class Initialized
DEBUG - 2014-03-29 12:39:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 12:39:14 --> Encrypt Class Initialized
INFO  - 2014-03-29 12:39:14 --> after session initialization................
INFO  - 2014-03-29 12:39:14 --> article id is 8
DEBUG - 2014-03-29 12:39:14 --> Final output sent to browser
DEBUG - 2014-03-29 12:39:14 --> Total execution time: 0.0490
DEBUG - 2014-03-29 12:39:14 --> Config Class Initialized
DEBUG - 2014-03-29 12:39:14 --> Hooks Class Initialized
DEBUG - 2014-03-29 12:39:14 --> Utf8 Class Initialized
DEBUG - 2014-03-29 12:39:14 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 12:39:14 --> URI Class Initialized
DEBUG - 2014-03-29 12:39:14 --> Router Class Initialized
DEBUG - 2014-03-29 12:39:14 --> Output Class Initialized
DEBUG - 2014-03-29 12:39:14 --> Security Class Initialized
DEBUG - 2014-03-29 12:39:14 --> Input Class Initialized
DEBUG - 2014-03-29 12:39:14 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 12:39:14 --> Language Class Initialized
DEBUG - 2014-03-29 12:39:14 --> Loader Class Initialized
DEBUG - 2014-03-29 12:39:14 --> Helper loaded: form_helper
DEBUG - 2014-03-29 12:39:14 --> Helper loaded: url_helper
DEBUG - 2014-03-29 12:39:14 --> Helper loaded: html_helper
DEBUG - 2014-03-29 12:39:14 --> Database Driver Class Initialized
DEBUG - 2014-03-29 12:39:14 --> Session Class Initialized
DEBUG - 2014-03-29 12:39:14 --> Helper loaded: string_helper
DEBUG - 2014-03-29 12:39:14 --> Session routines successfully run
DEBUG - 2014-03-29 12:39:14 --> Form Validation Class Initialized
DEBUG - 2014-03-29 12:39:14 --> Controller Class Initialized
DEBUG - 2014-03-29 12:39:14 --> Model Class Initialized
DEBUG - 2014-03-29 12:39:14 --> Model Class Initialized
DEBUG - 2014-03-29 12:39:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 12:39:14 --> Encrypt Class Initialized
INFO  - 2014-03-29 12:39:14 --> after session initialization................
ERROR - 2014-03-29 12:39:14 --> Severity: Warning  --> file_get_contents(): php_network_getaddresses: getaddrinfo failed: No such host is known.  C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\ip2locationlite.class.php 33
ERROR - 2014-03-29 12:39:14 --> Severity: Warning  --> file_get_contents(http://api.ipinfodb.com/v3/ip-city/?key=e1c713f174bb86c8843e82b6aac56f8d050dab6a6649fe9134e9e19ea8e06238&amp;ip=::1&amp;format=xml): failed to open stream: php_network_getaddresses: getaddrinfo failed: No such host is known.  C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\ip2locationlite.class.php 33
INFO  - 2014-03-29 12:39:14 --> before inserting into article search table.................
INFO  - 2014-03-29 12:39:14 --> after inserting into article search table.................38
INFO  - 2014-03-29 12:39:14 --> INSERT INTO `article_search` (`article_id`, `user_id`, `timecreated`, `ipaddress`, `location`, `longitude`, `latitude`) VALUES ('8', '0', '2014-03-29 12:39:14', '::1', 'Lagos', '3.39583', '6.45306')
DEBUG - 2014-03-29 12:39:14 --> Final output sent to browser
DEBUG - 2014-03-29 12:39:14 --> Total execution time: 0.1530
DEBUG - 2014-03-29 12:43:06 --> Config Class Initialized
DEBUG - 2014-03-29 12:43:06 --> Hooks Class Initialized
DEBUG - 2014-03-29 12:43:06 --> Utf8 Class Initialized
DEBUG - 2014-03-29 12:43:06 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 12:43:06 --> URI Class Initialized
DEBUG - 2014-03-29 12:43:06 --> Router Class Initialized
DEBUG - 2014-03-29 12:43:06 --> Output Class Initialized
DEBUG - 2014-03-29 12:43:06 --> Security Class Initialized
DEBUG - 2014-03-29 12:43:06 --> Input Class Initialized
DEBUG - 2014-03-29 12:43:06 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 12:43:06 --> Language Class Initialized
DEBUG - 2014-03-29 12:43:06 --> Loader Class Initialized
DEBUG - 2014-03-29 12:43:06 --> Helper loaded: form_helper
DEBUG - 2014-03-29 12:43:06 --> Helper loaded: url_helper
DEBUG - 2014-03-29 12:43:06 --> Helper loaded: html_helper
DEBUG - 2014-03-29 12:43:06 --> Database Driver Class Initialized
DEBUG - 2014-03-29 12:43:06 --> Session Class Initialized
DEBUG - 2014-03-29 12:43:06 --> Helper loaded: string_helper
DEBUG - 2014-03-29 12:43:06 --> Session routines successfully run
DEBUG - 2014-03-29 12:43:06 --> Form Validation Class Initialized
DEBUG - 2014-03-29 12:43:06 --> Controller Class Initialized
DEBUG - 2014-03-29 12:43:06 --> Model Class Initialized
DEBUG - 2014-03-29 12:43:06 --> Model Class Initialized
DEBUG - 2014-03-29 12:43:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 12:43:06 --> Encrypt Class Initialized
INFO  - 2014-03-29 12:43:06 --> after session initialization................
INFO  - 2014-03-29 12:43:06 --> the form message==>
INFO  - 2014-03-29 12:43:06 --> The session id is ========>863f67c860a39a8520710264572193fc and the member id is =======>
INFO  - 2014-03-29 12:43:06 --> after the retrieving session list.................//////////
INFO  - 2014-03-29 12:43:06 --> The session id is ========>863f67c860a39a8520710264572193fc and the member id is =======>
DEBUG - 2014-03-29 12:43:06 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-03-29 12:43:06 --> Final output sent to browser
DEBUG - 2014-03-29 12:43:06 --> Total execution time: 0.0470
DEBUG - 2014-03-29 12:44:45 --> Config Class Initialized
DEBUG - 2014-03-29 12:44:45 --> Hooks Class Initialized
DEBUG - 2014-03-29 12:44:45 --> Utf8 Class Initialized
DEBUG - 2014-03-29 12:44:45 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 12:44:45 --> URI Class Initialized
DEBUG - 2014-03-29 12:44:45 --> Router Class Initialized
DEBUG - 2014-03-29 12:44:45 --> Output Class Initialized
DEBUG - 2014-03-29 12:44:45 --> Security Class Initialized
DEBUG - 2014-03-29 12:44:45 --> Input Class Initialized
DEBUG - 2014-03-29 12:44:45 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 12:44:45 --> Language Class Initialized
DEBUG - 2014-03-29 12:44:45 --> Loader Class Initialized
DEBUG - 2014-03-29 12:44:45 --> Helper loaded: form_helper
DEBUG - 2014-03-29 12:44:45 --> Helper loaded: url_helper
DEBUG - 2014-03-29 12:44:45 --> Helper loaded: html_helper
DEBUG - 2014-03-29 12:44:45 --> Database Driver Class Initialized
DEBUG - 2014-03-29 12:44:45 --> Session Class Initialized
DEBUG - 2014-03-29 12:44:45 --> Helper loaded: string_helper
DEBUG - 2014-03-29 12:44:45 --> Session routines successfully run
DEBUG - 2014-03-29 12:44:45 --> Form Validation Class Initialized
DEBUG - 2014-03-29 12:44:45 --> Controller Class Initialized
DEBUG - 2014-03-29 12:44:45 --> Model Class Initialized
DEBUG - 2014-03-29 12:44:45 --> Model Class Initialized
DEBUG - 2014-03-29 12:44:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 12:44:45 --> Encrypt Class Initialized
INFO  - 2014-03-29 12:44:45 --> after session initialization................
INFO  - 2014-03-29 12:44:45 --> inside rays login auth.............
DEBUG - 2014-03-29 12:44:45 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2014-03-29 12:44:45 --> XSS Filtering completed
DEBUG - 2014-03-29 12:44:45 --> XSS Filtering completed
INFO  - 2014-03-29 12:44:45 --> login details ::::::::::===>SELECT `ld`.*
FROM (`logindetails` ld)
WHERE lower(ld.username) =  'mega@yahoo.com'
INFO  - 2014-03-29 12:44:45 --> before getting the relation of member............37
INFO  - 2014-03-29 12:44:45 --> registration complete and username set on userpage.................Mega
INFO  - 2014-03-29 12:44:45 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  '37'
INFO  - 2014-03-29 12:44:45 --> last news id is 0
INFO  - 2014-03-29 12:44:45 --> SELECT a.id_article as id, a.title as newsletter_title, a.description as newsletter_description, a.guestonly as guestonly, a.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`article` a)
JOIN `member` m ON `a`.`memberid_member` = `m`.`id_member`
WHERE `a`.`id_article` <> 0
ORDER BY `a`.`id_article` desc
LIMIT 15
INFO  - 2014-03-29 12:44:45 --> after newsleters list has been clicked.................
INFO  - 2014-03-29 12:44:45 --> The session id is ========>863f67c860a39a8520710264572193fc and the member id is =======>37
INFO  - 2014-03-29 12:44:45 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=31&article_type=newsletter_title
INFO  - 2014-03-29 12:44:45 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=16&article_type=newsletter_title
INFO  - 2014-03-29 12:44:45 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=15&article_type=newsletter_title
INFO  - 2014-03-29 12:44:45 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=14&article_type=newsletter_title
INFO  - 2014-03-29 12:44:45 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=13&article_type=newsletter_title
INFO  - 2014-03-29 12:44:45 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=12&article_type=newsletter_title
INFO  - 2014-03-29 12:44:45 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=11&article_type=newsletter_title
INFO  - 2014-03-29 12:44:45 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=10&article_type=newsletter_title
INFO  - 2014-03-29 12:44:45 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=9&article_type=newsletter_title
INFO  - 2014-03-29 12:44:45 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=8&article_type=newsletter_title
INFO  - 2014-03-29 12:44:45 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=7&article_type=newsletter_title
INFO  - 2014-03-29 12:44:45 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=6&article_type=newsletter_title
INFO  - 2014-03-29 12:44:45 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=5&article_type=newsletter_title
INFO  - 2014-03-29 12:44:45 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=4&article_type=newsletter_title
INFO  - 2014-03-29 12:44:45 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=3&article_type=newsletter_title
DEBUG - 2014-03-29 12:44:45 --> File loaded: ../pharmaray-application/views/articles.php
DEBUG - 2014-03-29 12:44:45 --> Final output sent to browser
DEBUG - 2014-03-29 12:44:45 --> Total execution time: 0.0730
DEBUG - 2014-03-29 12:45:48 --> Config Class Initialized
DEBUG - 2014-03-29 12:45:48 --> Hooks Class Initialized
DEBUG - 2014-03-29 12:45:48 --> Utf8 Class Initialized
DEBUG - 2014-03-29 12:45:48 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 12:45:48 --> URI Class Initialized
DEBUG - 2014-03-29 12:45:48 --> Router Class Initialized
DEBUG - 2014-03-29 12:45:48 --> Output Class Initialized
DEBUG - 2014-03-29 12:45:48 --> Security Class Initialized
DEBUG - 2014-03-29 12:45:48 --> Input Class Initialized
DEBUG - 2014-03-29 12:45:48 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 12:45:48 --> Language Class Initialized
DEBUG - 2014-03-29 12:45:48 --> Loader Class Initialized
DEBUG - 2014-03-29 12:45:48 --> Helper loaded: form_helper
DEBUG - 2014-03-29 12:45:48 --> Helper loaded: url_helper
DEBUG - 2014-03-29 12:45:48 --> Helper loaded: html_helper
DEBUG - 2014-03-29 12:45:48 --> Database Driver Class Initialized
DEBUG - 2014-03-29 12:45:48 --> Session Class Initialized
DEBUG - 2014-03-29 12:45:48 --> Helper loaded: string_helper
DEBUG - 2014-03-29 12:45:48 --> Session routines successfully run
DEBUG - 2014-03-29 12:45:48 --> Form Validation Class Initialized
DEBUG - 2014-03-29 12:45:48 --> Controller Class Initialized
DEBUG - 2014-03-29 12:45:48 --> Model Class Initialized
DEBUG - 2014-03-29 12:45:48 --> Model Class Initialized
DEBUG - 2014-03-29 12:45:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 12:45:48 --> Encrypt Class Initialized
INFO  - 2014-03-29 12:45:48 --> after session initialization................
INFO  - 2014-03-29 12:45:48 --> after internships list has been clicked.................
INFO  - 2014-03-29 12:45:48 --> inside retrieving locations 
INFO  - 2014-03-29 12:45:48 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-03-29 12:45:48 --> last intern id is 0
INFO  - 2014-03-29 12:45:48 --> The session id is ========>863f67c860a39a8520710264572193fc and the member id is =======>37
DEBUG - 2014-03-29 12:45:48 --> File loaded: ../pharmaray-application/views/internships.php
DEBUG - 2014-03-29 12:45:48 --> Final output sent to browser
DEBUG - 2014-03-29 12:45:48 --> Total execution time: 0.1450
DEBUG - 2014-03-29 12:46:04 --> Config Class Initialized
DEBUG - 2014-03-29 12:46:04 --> Hooks Class Initialized
DEBUG - 2014-03-29 12:46:04 --> Utf8 Class Initialized
DEBUG - 2014-03-29 12:46:04 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 12:46:04 --> URI Class Initialized
DEBUG - 2014-03-29 12:46:04 --> Router Class Initialized
DEBUG - 2014-03-29 12:46:04 --> Output Class Initialized
DEBUG - 2014-03-29 12:46:04 --> Security Class Initialized
DEBUG - 2014-03-29 12:46:04 --> Input Class Initialized
DEBUG - 2014-03-29 12:46:04 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 12:46:04 --> Language Class Initialized
DEBUG - 2014-03-29 12:46:04 --> Loader Class Initialized
DEBUG - 2014-03-29 12:46:04 --> Helper loaded: form_helper
DEBUG - 2014-03-29 12:46:04 --> Helper loaded: url_helper
DEBUG - 2014-03-29 12:46:04 --> Helper loaded: html_helper
DEBUG - 2014-03-29 12:46:04 --> Database Driver Class Initialized
DEBUG - 2014-03-29 12:46:04 --> Session Class Initialized
DEBUG - 2014-03-29 12:46:04 --> Helper loaded: string_helper
DEBUG - 2014-03-29 12:46:04 --> Session routines successfully run
DEBUG - 2014-03-29 12:46:04 --> Form Validation Class Initialized
DEBUG - 2014-03-29 12:46:04 --> Controller Class Initialized
DEBUG - 2014-03-29 12:46:04 --> Model Class Initialized
DEBUG - 2014-03-29 12:46:04 --> Model Class Initialized
DEBUG - 2014-03-29 12:46:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 12:46:04 --> Encrypt Class Initialized
INFO  - 2014-03-29 12:46:04 --> after session initialization................
INFO  - 2014-03-29 12:46:04 --> last news id is 0
INFO  - 2014-03-29 12:46:04 --> SELECT a.id_article as id, a.title as newsletter_title, a.description as newsletter_description, a.guestonly as guestonly, a.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`article` a)
JOIN `member` m ON `a`.`memberid_member` = `m`.`id_member`
WHERE `a`.`id_article` <> 0
ORDER BY `a`.`id_article` desc
LIMIT 15
INFO  - 2014-03-29 12:46:04 --> after newsleters list has been clicked.................
INFO  - 2014-03-29 12:46:04 --> The session id is ========>863f67c860a39a8520710264572193fc and the member id is =======>37
INFO  - 2014-03-29 12:46:04 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=31&article_type=newsletter_title
INFO  - 2014-03-29 12:46:04 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=16&article_type=newsletter_title
INFO  - 2014-03-29 12:46:04 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=15&article_type=newsletter_title
INFO  - 2014-03-29 12:46:04 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=14&article_type=newsletter_title
INFO  - 2014-03-29 12:46:04 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=13&article_type=newsletter_title
INFO  - 2014-03-29 12:46:04 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=12&article_type=newsletter_title
INFO  - 2014-03-29 12:46:04 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=11&article_type=newsletter_title
INFO  - 2014-03-29 12:46:04 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=10&article_type=newsletter_title
INFO  - 2014-03-29 12:46:04 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=9&article_type=newsletter_title
INFO  - 2014-03-29 12:46:04 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=8&article_type=newsletter_title
INFO  - 2014-03-29 12:46:04 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=7&article_type=newsletter_title
INFO  - 2014-03-29 12:46:04 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=6&article_type=newsletter_title
INFO  - 2014-03-29 12:46:04 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=5&article_type=newsletter_title
INFO  - 2014-03-29 12:46:04 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=4&article_type=newsletter_title
INFO  - 2014-03-29 12:46:04 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=3&article_type=newsletter_title
DEBUG - 2014-03-29 12:46:04 --> File loaded: ../pharmaray-application/views/articles.php
DEBUG - 2014-03-29 12:46:04 --> Final output sent to browser
DEBUG - 2014-03-29 12:46:04 --> Total execution time: 0.0570
DEBUG - 2014-03-29 13:07:47 --> Config Class Initialized
DEBUG - 2014-03-29 13:07:47 --> Hooks Class Initialized
DEBUG - 2014-03-29 13:07:47 --> Utf8 Class Initialized
DEBUG - 2014-03-29 13:07:47 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 13:07:47 --> URI Class Initialized
DEBUG - 2014-03-29 13:07:47 --> Router Class Initialized
DEBUG - 2014-03-29 13:07:47 --> Output Class Initialized
DEBUG - 2014-03-29 13:07:47 --> Security Class Initialized
DEBUG - 2014-03-29 13:07:47 --> Input Class Initialized
DEBUG - 2014-03-29 13:07:47 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 13:07:47 --> Language Class Initialized
DEBUG - 2014-03-29 13:07:47 --> Loader Class Initialized
DEBUG - 2014-03-29 13:07:47 --> Helper loaded: form_helper
DEBUG - 2014-03-29 13:07:47 --> Helper loaded: url_helper
DEBUG - 2014-03-29 13:07:47 --> Helper loaded: html_helper
DEBUG - 2014-03-29 13:07:47 --> Database Driver Class Initialized
DEBUG - 2014-03-29 13:07:47 --> Session Class Initialized
DEBUG - 2014-03-29 13:07:47 --> Helper loaded: string_helper
DEBUG - 2014-03-29 13:07:47 --> Session routines successfully run
DEBUG - 2014-03-29 13:07:47 --> Form Validation Class Initialized
DEBUG - 2014-03-29 13:07:47 --> Controller Class Initialized
DEBUG - 2014-03-29 13:07:47 --> Model Class Initialized
DEBUG - 2014-03-29 13:07:47 --> Model Class Initialized
DEBUG - 2014-03-29 13:07:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 13:07:47 --> Encrypt Class Initialized
INFO  - 2014-03-29 13:07:47 --> after session initialization................
DEBUG - 2014-03-29 13:07:47 --> Config Class Initialized
DEBUG - 2014-03-29 13:07:47 --> Hooks Class Initialized
DEBUG - 2014-03-29 13:07:47 --> Utf8 Class Initialized
DEBUG - 2014-03-29 13:07:47 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 13:07:47 --> URI Class Initialized
DEBUG - 2014-03-29 13:07:47 --> Router Class Initialized
DEBUG - 2014-03-29 13:07:47 --> No URI present. Default controller set.
DEBUG - 2014-03-29 13:07:47 --> Output Class Initialized
DEBUG - 2014-03-29 13:07:47 --> Security Class Initialized
DEBUG - 2014-03-29 13:07:47 --> Input Class Initialized
DEBUG - 2014-03-29 13:07:47 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 13:07:47 --> Language Class Initialized
DEBUG - 2014-03-29 13:07:47 --> Loader Class Initialized
DEBUG - 2014-03-29 13:07:47 --> Helper loaded: form_helper
DEBUG - 2014-03-29 13:07:47 --> Helper loaded: url_helper
DEBUG - 2014-03-29 13:07:47 --> Helper loaded: html_helper
DEBUG - 2014-03-29 13:07:47 --> Database Driver Class Initialized
DEBUG - 2014-03-29 13:07:47 --> Session Class Initialized
DEBUG - 2014-03-29 13:07:47 --> Helper loaded: string_helper
DEBUG - 2014-03-29 13:07:47 --> A session cookie was not found.
DEBUG - 2014-03-29 13:07:47 --> Session routines successfully run
DEBUG - 2014-03-29 13:07:47 --> Form Validation Class Initialized
DEBUG - 2014-03-29 13:07:47 --> Controller Class Initialized
DEBUG - 2014-03-29 13:07:47 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2014-03-29 13:07:47 --> Final output sent to browser
DEBUG - 2014-03-29 13:07:47 --> Total execution time: 0.0350
DEBUG - 2014-03-29 13:07:47 --> Config Class Initialized
DEBUG - 2014-03-29 13:07:47 --> Hooks Class Initialized
DEBUG - 2014-03-29 13:07:47 --> Utf8 Class Initialized
DEBUG - 2014-03-29 13:07:47 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 13:07:47 --> URI Class Initialized
DEBUG - 2014-03-29 13:07:47 --> Router Class Initialized
DEBUG - 2014-03-29 13:07:47 --> Output Class Initialized
DEBUG - 2014-03-29 13:07:47 --> Security Class Initialized
DEBUG - 2014-03-29 13:07:47 --> Input Class Initialized
DEBUG - 2014-03-29 13:07:47 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 13:07:47 --> Language Class Initialized
DEBUG - 2014-03-29 13:07:47 --> Loader Class Initialized
DEBUG - 2014-03-29 13:07:47 --> Helper loaded: form_helper
DEBUG - 2014-03-29 13:07:47 --> Helper loaded: url_helper
DEBUG - 2014-03-29 13:07:47 --> Helper loaded: html_helper
DEBUG - 2014-03-29 13:07:48 --> Database Driver Class Initialized
DEBUG - 2014-03-29 13:07:48 --> Session Class Initialized
DEBUG - 2014-03-29 13:07:48 --> Helper loaded: string_helper
DEBUG - 2014-03-29 13:07:48 --> Session routines successfully run
DEBUG - 2014-03-29 13:07:48 --> Form Validation Class Initialized
DEBUG - 2014-03-29 13:07:48 --> Controller Class Initialized
DEBUG - 2014-03-29 13:07:48 --> Model Class Initialized
DEBUG - 2014-03-29 13:07:48 --> Model Class Initialized
DEBUG - 2014-03-29 13:07:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 13:07:48 --> Encrypt Class Initialized
INFO  - 2014-03-29 13:07:48 --> after session initialization................
INFO  - 2014-03-29 13:07:48 --> after rays has been clicked.................
INFO  - 2014-03-29 13:07:48 --> last article id is 0
INFO  - 2014-03-29 13:07:48 --> The session id is ========>ff08c0c3e871039840c3ae295408f45d and the member id is =======>
INFO  - 2014-03-29 13:07:48 --> The session id is ========>ff08c0c3e871039840c3ae295408f45d and the member id is =======>
INFO  - 2014-03-29 13:07:48 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 13:07:48 --> 0 the guest only data>>>>>
INFO  - 2014-03-29 13:07:48 --> 0 the guest only data>> AFTER >>>#31
INFO  - 2014-03-29 13:07:48 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 13:07:48 --> 0 the guest only data>>>>>#31
INFO  - 2014-03-29 13:07:48 --> 0 the guest only data>> AFTER >>>#16
INFO  - 2014-03-29 13:07:48 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 13:07:48 --> 1 the guest only data>>>>>#16
INFO  - 2014-03-29 13:07:48 --> 1 the guest only data>> AFTER >>>#16
INFO  - 2014-03-29 13:07:48 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 13:07:48 --> 0 the guest only data>>>>>#16
INFO  - 2014-03-29 13:07:48 --> 0 the guest only data>> AFTER >>>#14
INFO  - 2014-03-29 13:07:48 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 13:07:48 --> 1 the guest only data>>>>>#14
INFO  - 2014-03-29 13:07:48 --> 1 the guest only data>> AFTER >>>#14
INFO  - 2014-03-29 13:07:48 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 13:07:48 --> 0 the guest only data>>>>>#14
INFO  - 2014-03-29 13:07:48 --> 0 the guest only data>> AFTER >>>#12
INFO  - 2014-03-29 13:07:48 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 13:07:48 --> 1 the guest only data>>>>>#12
INFO  - 2014-03-29 13:07:48 --> 1 the guest only data>> AFTER >>>#12
INFO  - 2014-03-29 13:07:48 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 13:07:48 --> 0 the guest only data>>>>>#12
INFO  - 2014-03-29 13:07:48 --> 0 the guest only data>> AFTER >>>#10
INFO  - 2014-03-29 13:07:48 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 13:07:48 --> 0 the guest only data>>>>>#10
INFO  - 2014-03-29 13:07:48 --> 0 the guest only data>> AFTER >>>#9
INFO  - 2014-03-29 13:07:48 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 13:07:48 --> 1 the guest only data>>>>>#9
INFO  - 2014-03-29 13:07:48 --> 1 the guest only data>> AFTER >>>#9
INFO  - 2014-03-29 13:07:48 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 13:07:48 --> 0 the guest only data>>>>>#9
INFO  - 2014-03-29 13:07:48 --> 0 the guest only data>> AFTER >>>#7
INFO  - 2014-03-29 13:07:48 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 13:07:48 --> 1 the guest only data>>>>>#7
INFO  - 2014-03-29 13:07:48 --> 1 the guest only data>> AFTER >>>#7
INFO  - 2014-03-29 13:07:48 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 13:07:48 --> 0 the guest only data>>>>>#7
INFO  - 2014-03-29 13:07:48 --> 0 the guest only data>> AFTER >>>#5
INFO  - 2014-03-29 13:07:48 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 13:07:48 --> 0 the guest only data>>>>>#5
INFO  - 2014-03-29 13:07:48 --> 0 the guest only data>> AFTER >>>#4
INFO  - 2014-03-29 13:07:48 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 13:07:48 --> 1 the guest only data>>>>>#4
INFO  - 2014-03-29 13:07:48 --> 1 the guest only data>> AFTER >>>#4
INFO  - 2014-03-29 13:07:48 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 13:07:48 --> 1 the guest only data>>>>>#4
INFO  - 2014-03-29 13:07:48 --> 1 the guest only data>> AFTER >>>#4
INFO  - 2014-03-29 13:07:48 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-03-29 13:07:48 --> 1 the guest only data>>>>>#4
INFO  - 2014-03-29 13:07:48 --> 1 the guest only data>> AFTER >>>#4
DEBUG - 2014-03-29 13:07:48 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2014-03-29 13:07:48 --> Final output sent to browser
DEBUG - 2014-03-29 13:07:48 --> Total execution time: 0.0600
DEBUG - 2014-03-29 13:07:59 --> Config Class Initialized
DEBUG - 2014-03-29 13:07:59 --> Hooks Class Initialized
DEBUG - 2014-03-29 13:07:59 --> Utf8 Class Initialized
DEBUG - 2014-03-29 13:07:59 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 13:07:59 --> URI Class Initialized
DEBUG - 2014-03-29 13:07:59 --> Router Class Initialized
DEBUG - 2014-03-29 13:07:59 --> Output Class Initialized
DEBUG - 2014-03-29 13:07:59 --> Security Class Initialized
DEBUG - 2014-03-29 13:07:59 --> Input Class Initialized
DEBUG - 2014-03-29 13:07:59 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 13:07:59 --> Language Class Initialized
DEBUG - 2014-03-29 13:07:59 --> Loader Class Initialized
DEBUG - 2014-03-29 13:07:59 --> Helper loaded: form_helper
DEBUG - 2014-03-29 13:07:59 --> Helper loaded: url_helper
DEBUG - 2014-03-29 13:07:59 --> Helper loaded: html_helper
DEBUG - 2014-03-29 13:07:59 --> Database Driver Class Initialized
DEBUG - 2014-03-29 13:07:59 --> Session Class Initialized
DEBUG - 2014-03-29 13:07:59 --> Helper loaded: string_helper
DEBUG - 2014-03-29 13:07:59 --> Session routines successfully run
DEBUG - 2014-03-29 13:07:59 --> Form Validation Class Initialized
DEBUG - 2014-03-29 13:07:59 --> Controller Class Initialized
DEBUG - 2014-03-29 13:07:59 --> Model Class Initialized
DEBUG - 2014-03-29 13:07:59 --> Model Class Initialized
DEBUG - 2014-03-29 13:07:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 13:07:59 --> Encrypt Class Initialized
INFO  - 2014-03-29 13:07:59 --> after session initialization................
INFO  - 2014-03-29 13:07:59 --> inside rays login auth.............sys_admin/user_authorization/redirecttorays
INFO  - 2014-03-29 13:07:59 --> inside rays login auth.............sys_admin/user_authorization/redirecttorays
DEBUG - 2014-03-29 13:07:59 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2014-03-29 13:07:59 --> XSS Filtering completed
DEBUG - 2014-03-29 13:07:59 --> XSS Filtering completed
INFO  - 2014-03-29 13:07:59 --> login details ::::::::::===>SELECT `ld`.*
FROM (`logindetails` ld)
WHERE lower(ld.username) =  'yetunde@gmail.com'
INFO  - 2014-03-29 13:07:59 --> before getting the relation of member............35
INFO  - 2014-03-29 13:07:59 --> registration complete and username set on userpage.................Yetunde
INFO  - 2014-03-29 13:07:59 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  '35'
INFO  - 2014-03-29 13:07:59 --> after newsleters list has been clicked.................
INFO  - 2014-03-29 13:07:59 --> drugcategory ::::::::::===>SELECT `dc`.`id_drugcategory`, `dc`.`name`
FROM (`drugcategory` dc)
ORDER BY `dc`.`name`
INFO  - 2014-03-29 13:07:59 --> The session id is ========>ff08c0c3e871039840c3ae295408f45d and the member id is =======>35
DEBUG - 2014-03-29 13:07:59 --> File loaded: ../pharmaray-application/views/adminpage.php
DEBUG - 2014-03-29 13:07:59 --> Final output sent to browser
DEBUG - 2014-03-29 13:07:59 --> Total execution time: 0.0630
DEBUG - 2014-03-29 13:07:59 --> Config Class Initialized
DEBUG - 2014-03-29 13:07:59 --> Hooks Class Initialized
DEBUG - 2014-03-29 13:07:59 --> Utf8 Class Initialized
DEBUG - 2014-03-29 13:07:59 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 13:07:59 --> URI Class Initialized
DEBUG - 2014-03-29 13:07:59 --> Router Class Initialized
ERROR - 2014-03-29 13:07:59 --> 404 Page Not Found --> css
DEBUG - 2014-03-29 13:08:05 --> Config Class Initialized
DEBUG - 2014-03-29 13:08:05 --> Hooks Class Initialized
DEBUG - 2014-03-29 13:08:05 --> Utf8 Class Initialized
DEBUG - 2014-03-29 13:08:05 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 13:08:05 --> URI Class Initialized
DEBUG - 2014-03-29 13:08:05 --> Router Class Initialized
DEBUG - 2014-03-29 13:08:05 --> Output Class Initialized
DEBUG - 2014-03-29 13:08:05 --> Security Class Initialized
DEBUG - 2014-03-29 13:08:05 --> Input Class Initialized
DEBUG - 2014-03-29 13:08:05 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 13:08:05 --> Language Class Initialized
DEBUG - 2014-03-29 13:08:05 --> Loader Class Initialized
DEBUG - 2014-03-29 13:08:05 --> Helper loaded: form_helper
DEBUG - 2014-03-29 13:08:05 --> Helper loaded: url_helper
DEBUG - 2014-03-29 13:08:05 --> Helper loaded: html_helper
DEBUG - 2014-03-29 13:08:05 --> Database Driver Class Initialized
DEBUG - 2014-03-29 13:08:05 --> Session Class Initialized
DEBUG - 2014-03-29 13:08:05 --> Helper loaded: string_helper
DEBUG - 2014-03-29 13:08:05 --> Session routines successfully run
DEBUG - 2014-03-29 13:08:05 --> Form Validation Class Initialized
DEBUG - 2014-03-29 13:08:05 --> Controller Class Initialized
DEBUG - 2014-03-29 13:08:05 --> Model Class Initialized
DEBUG - 2014-03-29 13:08:05 --> Model Class Initialized
DEBUG - 2014-03-29 13:08:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 13:08:05 --> Encrypt Class Initialized
INFO  - 2014-03-29 13:08:05 --> after session initialization................
INFO  - 2014-03-29 13:08:05 --> after brands list has been clicked.................
INFO  - 2014-03-29 13:08:05 --> brand name ::::::::::===>SELECT `bn`.`id_brandname`, `bn`.`name`
FROM (`brandname` bn)
ORDER BY `bn`.`name`
INFO  - 2014-03-29 13:08:05 --> The session id is ========>ff08c0c3e871039840c3ae295408f45d and the member id is =======>35
DEBUG - 2014-03-29 13:08:05 --> File loaded: ../pharmaray-application/views/adminpagebrands.php
DEBUG - 2014-03-29 13:08:05 --> Final output sent to browser
DEBUG - 2014-03-29 13:08:05 --> Total execution time: 0.0460
DEBUG - 2014-03-29 13:08:05 --> Config Class Initialized
DEBUG - 2014-03-29 13:08:05 --> Hooks Class Initialized
DEBUG - 2014-03-29 13:08:05 --> Utf8 Class Initialized
DEBUG - 2014-03-29 13:08:05 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 13:08:05 --> URI Class Initialized
DEBUG - 2014-03-29 13:08:05 --> Router Class Initialized
ERROR - 2014-03-29 13:08:05 --> 404 Page Not Found --> css
DEBUG - 2014-03-29 13:08:50 --> Config Class Initialized
DEBUG - 2014-03-29 13:08:50 --> Hooks Class Initialized
DEBUG - 2014-03-29 13:08:50 --> Utf8 Class Initialized
DEBUG - 2014-03-29 13:08:50 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 13:08:50 --> URI Class Initialized
DEBUG - 2014-03-29 13:08:50 --> Router Class Initialized
DEBUG - 2014-03-29 13:08:50 --> Output Class Initialized
DEBUG - 2014-03-29 13:08:50 --> Security Class Initialized
DEBUG - 2014-03-29 13:08:50 --> Input Class Initialized
DEBUG - 2014-03-29 13:08:50 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 13:08:50 --> Language Class Initialized
DEBUG - 2014-03-29 13:08:50 --> Loader Class Initialized
DEBUG - 2014-03-29 13:08:50 --> Helper loaded: form_helper
DEBUG - 2014-03-29 13:08:50 --> Helper loaded: url_helper
DEBUG - 2014-03-29 13:08:50 --> Helper loaded: html_helper
DEBUG - 2014-03-29 13:08:50 --> Database Driver Class Initialized
DEBUG - 2014-03-29 13:08:50 --> Session Class Initialized
DEBUG - 2014-03-29 13:08:50 --> Helper loaded: string_helper
DEBUG - 2014-03-29 13:08:50 --> Session routines successfully run
DEBUG - 2014-03-29 13:08:50 --> Form Validation Class Initialized
DEBUG - 2014-03-29 13:08:50 --> Controller Class Initialized
DEBUG - 2014-03-29 13:08:50 --> Model Class Initialized
DEBUG - 2014-03-29 13:08:50 --> Model Class Initialized
DEBUG - 2014-03-29 13:08:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 13:08:50 --> Encrypt Class Initialized
INFO  - 2014-03-29 13:08:50 --> after session initialization................
INFO  - 2014-03-29 13:08:50 --> Inside create drug category
INFO  - 2014-03-29 13:08:50 --> before inserting into drug category.................
DEBUG - 2014-03-29 13:08:50 --> DB Transaction Failure
ERROR - 2014-03-29 13:08:50 --> Query error: Unknown column 'brandnameid_brandname' in 'field list'
DEBUG - 2014-03-29 13:08:50 --> Language file loaded: language/english/db_lang.php
DEBUG - 2014-03-29 13:13:52 --> Config Class Initialized
DEBUG - 2014-03-29 13:13:52 --> Hooks Class Initialized
DEBUG - 2014-03-29 13:13:52 --> Utf8 Class Initialized
DEBUG - 2014-03-29 13:13:52 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 13:13:52 --> URI Class Initialized
DEBUG - 2014-03-29 13:13:52 --> Router Class Initialized
DEBUG - 2014-03-29 13:13:52 --> Output Class Initialized
DEBUG - 2014-03-29 13:13:52 --> Security Class Initialized
DEBUG - 2014-03-29 13:13:52 --> Input Class Initialized
DEBUG - 2014-03-29 13:13:52 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 13:13:52 --> Language Class Initialized
DEBUG - 2014-03-29 13:13:52 --> Loader Class Initialized
DEBUG - 2014-03-29 13:13:52 --> Helper loaded: form_helper
DEBUG - 2014-03-29 13:13:52 --> Helper loaded: url_helper
DEBUG - 2014-03-29 13:13:52 --> Helper loaded: html_helper
DEBUG - 2014-03-29 13:13:52 --> Database Driver Class Initialized
DEBUG - 2014-03-29 13:13:52 --> Session Class Initialized
DEBUG - 2014-03-29 13:13:52 --> Helper loaded: string_helper
DEBUG - 2014-03-29 13:13:52 --> Session routines successfully run
DEBUG - 2014-03-29 13:13:52 --> Form Validation Class Initialized
DEBUG - 2014-03-29 13:13:52 --> Controller Class Initialized
DEBUG - 2014-03-29 13:13:52 --> Model Class Initialized
DEBUG - 2014-03-29 13:13:52 --> Model Class Initialized
DEBUG - 2014-03-29 13:13:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 13:13:52 --> Encrypt Class Initialized
INFO  - 2014-03-29 13:13:52 --> after session initialization................
INFO  - 2014-03-29 13:13:52 --> after brands list has been clicked.................
INFO  - 2014-03-29 13:13:52 --> brand name ::::::::::===>SELECT `bn`.`id_brandname`, `bn`.`name`
FROM (`brandname` bn)
ORDER BY `bn`.`name`
INFO  - 2014-03-29 13:13:52 --> The session id is ========>1b2657d6f26eec22d343db67bda88ffd and the member id is =======>35
DEBUG - 2014-03-29 13:13:52 --> File loaded: ../pharmaray-application/views/adminpagebrands.php
DEBUG - 2014-03-29 13:13:52 --> Final output sent to browser
DEBUG - 2014-03-29 13:13:52 --> Total execution time: 0.0490
DEBUG - 2014-03-29 13:13:52 --> Config Class Initialized
DEBUG - 2014-03-29 13:13:52 --> Hooks Class Initialized
DEBUG - 2014-03-29 13:13:52 --> Utf8 Class Initialized
DEBUG - 2014-03-29 13:13:52 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 13:13:52 --> URI Class Initialized
DEBUG - 2014-03-29 13:13:52 --> Router Class Initialized
ERROR - 2014-03-29 13:13:52 --> 404 Page Not Found --> css
DEBUG - 2014-03-29 13:14:09 --> Config Class Initialized
DEBUG - 2014-03-29 13:14:09 --> Hooks Class Initialized
DEBUG - 2014-03-29 13:14:09 --> Utf8 Class Initialized
DEBUG - 2014-03-29 13:14:09 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 13:14:09 --> URI Class Initialized
DEBUG - 2014-03-29 13:14:09 --> Router Class Initialized
DEBUG - 2014-03-29 13:14:09 --> Output Class Initialized
DEBUG - 2014-03-29 13:14:09 --> Security Class Initialized
DEBUG - 2014-03-29 13:14:09 --> Input Class Initialized
DEBUG - 2014-03-29 13:14:09 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 13:14:09 --> Language Class Initialized
DEBUG - 2014-03-29 13:14:09 --> Loader Class Initialized
DEBUG - 2014-03-29 13:14:09 --> Helper loaded: form_helper
DEBUG - 2014-03-29 13:14:09 --> Helper loaded: url_helper
DEBUG - 2014-03-29 13:14:09 --> Helper loaded: html_helper
DEBUG - 2014-03-29 13:14:09 --> Database Driver Class Initialized
DEBUG - 2014-03-29 13:14:09 --> Session Class Initialized
DEBUG - 2014-03-29 13:14:09 --> Helper loaded: string_helper
DEBUG - 2014-03-29 13:14:09 --> Session routines successfully run
DEBUG - 2014-03-29 13:14:09 --> Form Validation Class Initialized
DEBUG - 2014-03-29 13:14:09 --> Controller Class Initialized
DEBUG - 2014-03-29 13:14:09 --> Model Class Initialized
DEBUG - 2014-03-29 13:14:09 --> Model Class Initialized
DEBUG - 2014-03-29 13:14:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 13:14:09 --> Encrypt Class Initialized
INFO  - 2014-03-29 13:14:09 --> after session initialization................
INFO  - 2014-03-29 13:14:09 --> Inside create drug category
INFO  - 2014-03-29 13:14:09 --> before inserting into drug category.................
INFO  - 2014-03-29 13:14:09 --> after inserting into drug category.................11
INFO  - 2014-03-29 13:14:09 --> INSERT INTO `drugcategory` (`name`, `description`, `brandname_id`) VALUES ('Panadol', 'For drug things biko', '9')
INFO  - 2014-03-29 13:14:09 --> After creating drug category
DEBUG - 2014-03-29 13:14:09 --> Final output sent to browser
DEBUG - 2014-03-29 13:14:09 --> Total execution time: 0.1280
DEBUG - 2014-03-29 13:15:14 --> Config Class Initialized
DEBUG - 2014-03-29 13:15:14 --> Hooks Class Initialized
DEBUG - 2014-03-29 13:15:14 --> Utf8 Class Initialized
DEBUG - 2014-03-29 13:15:14 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 13:15:14 --> URI Class Initialized
DEBUG - 2014-03-29 13:15:14 --> Router Class Initialized
DEBUG - 2014-03-29 13:15:14 --> Output Class Initialized
DEBUG - 2014-03-29 13:15:14 --> Security Class Initialized
DEBUG - 2014-03-29 13:15:14 --> Input Class Initialized
DEBUG - 2014-03-29 13:15:14 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 13:15:14 --> Language Class Initialized
DEBUG - 2014-03-29 13:15:14 --> Loader Class Initialized
DEBUG - 2014-03-29 13:15:14 --> Helper loaded: form_helper
DEBUG - 2014-03-29 13:15:14 --> Helper loaded: url_helper
DEBUG - 2014-03-29 13:15:14 --> Helper loaded: html_helper
DEBUG - 2014-03-29 13:15:14 --> Database Driver Class Initialized
DEBUG - 2014-03-29 13:15:14 --> Session Class Initialized
DEBUG - 2014-03-29 13:15:14 --> Helper loaded: string_helper
DEBUG - 2014-03-29 13:15:14 --> Session routines successfully run
DEBUG - 2014-03-29 13:15:14 --> Form Validation Class Initialized
DEBUG - 2014-03-29 13:15:14 --> Controller Class Initialized
DEBUG - 2014-03-29 13:15:14 --> Model Class Initialized
DEBUG - 2014-03-29 13:15:14 --> Model Class Initialized
DEBUG - 2014-03-29 13:15:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 13:15:14 --> Encrypt Class Initialized
INFO  - 2014-03-29 13:15:14 --> after session initialization................
INFO  - 2014-03-29 13:15:14 --> after newsleters list has been clicked.................
INFO  - 2014-03-29 13:15:14 --> inside retrieving locations 
INFO  - 2014-03-29 13:15:14 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-03-29 13:15:14 --> The session id is ========>1b2657d6f26eec22d343db67bda88ffd and the member id is =======>35
DEBUG - 2014-03-29 13:15:14 --> File loaded: ../pharmaray-application/views/adminpagepharmacy.php
DEBUG - 2014-03-29 13:15:14 --> Final output sent to browser
DEBUG - 2014-03-29 13:15:14 --> Total execution time: 0.1960
DEBUG - 2014-03-29 13:15:14 --> Config Class Initialized
DEBUG - 2014-03-29 13:15:14 --> Hooks Class Initialized
DEBUG - 2014-03-29 13:15:14 --> Utf8 Class Initialized
DEBUG - 2014-03-29 13:15:14 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 13:15:14 --> URI Class Initialized
DEBUG - 2014-03-29 13:15:14 --> Router Class Initialized
ERROR - 2014-03-29 13:15:14 --> 404 Page Not Found --> css
DEBUG - 2014-03-29 13:17:25 --> Config Class Initialized
DEBUG - 2014-03-29 13:17:25 --> Hooks Class Initialized
DEBUG - 2014-03-29 13:17:25 --> Utf8 Class Initialized
DEBUG - 2014-03-29 13:17:25 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 13:17:25 --> URI Class Initialized
DEBUG - 2014-03-29 13:17:25 --> Router Class Initialized
DEBUG - 2014-03-29 13:17:25 --> Output Class Initialized
DEBUG - 2014-03-29 13:17:25 --> Security Class Initialized
DEBUG - 2014-03-29 13:17:25 --> Input Class Initialized
DEBUG - 2014-03-29 13:17:25 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 13:17:25 --> Language Class Initialized
DEBUG - 2014-03-29 13:17:25 --> Loader Class Initialized
DEBUG - 2014-03-29 13:17:25 --> Helper loaded: form_helper
DEBUG - 2014-03-29 13:17:25 --> Helper loaded: url_helper
DEBUG - 2014-03-29 13:17:25 --> Helper loaded: html_helper
DEBUG - 2014-03-29 13:17:25 --> Database Driver Class Initialized
DEBUG - 2014-03-29 13:17:25 --> Session Class Initialized
DEBUG - 2014-03-29 13:17:25 --> Helper loaded: string_helper
DEBUG - 2014-03-29 13:17:25 --> Session routines successfully run
DEBUG - 2014-03-29 13:17:25 --> Form Validation Class Initialized
DEBUG - 2014-03-29 13:17:25 --> Controller Class Initialized
DEBUG - 2014-03-29 13:17:25 --> Model Class Initialized
DEBUG - 2014-03-29 13:17:25 --> Model Class Initialized
DEBUG - 2014-03-29 13:17:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 13:17:25 --> Encrypt Class Initialized
INFO  - 2014-03-29 13:17:25 --> after session initialization................
INFO  - 2014-03-29 13:17:25 --> after drug category list has been clicked.................
INFO  - 2014-03-29 13:17:25 --> The session id is ========>1b2657d6f26eec22d343db67bda88ffd and the member id is =======>35
DEBUG - 2014-03-29 13:17:25 --> File loaded: ../pharmaray-application/views/adminpagedrugcategory.php
DEBUG - 2014-03-29 13:17:25 --> Final output sent to browser
DEBUG - 2014-03-29 13:17:25 --> Total execution time: 0.0940
DEBUG - 2014-03-29 13:17:26 --> Config Class Initialized
DEBUG - 2014-03-29 13:17:26 --> Hooks Class Initialized
DEBUG - 2014-03-29 13:17:26 --> Utf8 Class Initialized
DEBUG - 2014-03-29 13:17:26 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 13:17:26 --> URI Class Initialized
DEBUG - 2014-03-29 13:17:26 --> Router Class Initialized
ERROR - 2014-03-29 13:17:26 --> 404 Page Not Found --> css
DEBUG - 2014-03-29 13:37:55 --> Config Class Initialized
DEBUG - 2014-03-29 13:37:55 --> Hooks Class Initialized
DEBUG - 2014-03-29 13:37:55 --> Utf8 Class Initialized
DEBUG - 2014-03-29 13:37:55 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 13:37:55 --> URI Class Initialized
DEBUG - 2014-03-29 13:37:55 --> Router Class Initialized
DEBUG - 2014-03-29 13:37:55 --> Output Class Initialized
DEBUG - 2014-03-29 13:37:55 --> Security Class Initialized
DEBUG - 2014-03-29 13:37:55 --> Input Class Initialized
DEBUG - 2014-03-29 13:37:55 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 13:37:55 --> Language Class Initialized
DEBUG - 2014-03-29 13:37:55 --> Loader Class Initialized
DEBUG - 2014-03-29 13:37:55 --> Helper loaded: form_helper
DEBUG - 2014-03-29 13:37:55 --> Helper loaded: url_helper
DEBUG - 2014-03-29 13:37:55 --> Helper loaded: html_helper
DEBUG - 2014-03-29 13:37:55 --> Database Driver Class Initialized
DEBUG - 2014-03-29 13:37:55 --> Session Class Initialized
DEBUG - 2014-03-29 13:37:55 --> Helper loaded: string_helper
DEBUG - 2014-03-29 13:37:55 --> Session routines successfully run
DEBUG - 2014-03-29 13:37:55 --> Form Validation Class Initialized
DEBUG - 2014-03-29 13:37:55 --> Controller Class Initialized
DEBUG - 2014-03-29 13:37:55 --> Model Class Initialized
DEBUG - 2014-03-29 13:37:55 --> Model Class Initialized
DEBUG - 2014-03-29 13:37:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 13:37:55 --> Encrypt Class Initialized
INFO  - 2014-03-29 13:37:55 --> after session initialization................
INFO  - 2014-03-29 13:37:55 --> after drug category list has been clicked.................
INFO  - 2014-03-29 13:37:55 --> The session id is ========>e5d66b4a306d6f727af870036362a8f2 and the member id is =======>35
DEBUG - 2014-03-29 13:37:55 --> File loaded: ../pharmaray-application/views/adminpagedrugindication.php
DEBUG - 2014-03-29 13:37:55 --> Final output sent to browser
DEBUG - 2014-03-29 13:37:55 --> Total execution time: 0.0470
DEBUG - 2014-03-29 13:37:55 --> Config Class Initialized
DEBUG - 2014-03-29 13:37:55 --> Hooks Class Initialized
DEBUG - 2014-03-29 13:37:55 --> Utf8 Class Initialized
DEBUG - 2014-03-29 13:37:55 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 13:37:55 --> URI Class Initialized
DEBUG - 2014-03-29 13:37:55 --> Router Class Initialized
ERROR - 2014-03-29 13:37:55 --> 404 Page Not Found --> css
DEBUG - 2014-03-29 13:38:23 --> Config Class Initialized
DEBUG - 2014-03-29 13:38:23 --> Hooks Class Initialized
DEBUG - 2014-03-29 13:38:23 --> Utf8 Class Initialized
DEBUG - 2014-03-29 13:38:23 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 13:38:23 --> URI Class Initialized
DEBUG - 2014-03-29 13:38:23 --> Router Class Initialized
DEBUG - 2014-03-29 13:38:23 --> Output Class Initialized
DEBUG - 2014-03-29 13:38:23 --> Security Class Initialized
DEBUG - 2014-03-29 13:38:23 --> Input Class Initialized
DEBUG - 2014-03-29 13:38:23 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 13:38:23 --> Language Class Initialized
DEBUG - 2014-03-29 13:38:23 --> Loader Class Initialized
DEBUG - 2014-03-29 13:38:23 --> Helper loaded: form_helper
DEBUG - 2014-03-29 13:38:23 --> Helper loaded: url_helper
DEBUG - 2014-03-29 13:38:23 --> Helper loaded: html_helper
DEBUG - 2014-03-29 13:38:23 --> Database Driver Class Initialized
DEBUG - 2014-03-29 13:38:23 --> Session Class Initialized
DEBUG - 2014-03-29 13:38:23 --> Helper loaded: string_helper
DEBUG - 2014-03-29 13:38:23 --> Session routines successfully run
DEBUG - 2014-03-29 13:38:23 --> Form Validation Class Initialized
DEBUG - 2014-03-29 13:38:23 --> Controller Class Initialized
DEBUG - 2014-03-29 13:38:23 --> Model Class Initialized
DEBUG - 2014-03-29 13:38:23 --> Model Class Initialized
DEBUG - 2014-03-29 13:38:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 13:38:23 --> Encrypt Class Initialized
INFO  - 2014-03-29 13:38:23 --> after session initialization................
INFO  - 2014-03-29 13:38:23 --> after drug category list has been clicked.................
INFO  - 2014-03-29 13:38:23 --> The session id is ========>e5d66b4a306d6f727af870036362a8f2 and the member id is =======>35
DEBUG - 2014-03-29 13:38:23 --> File loaded: ../pharmaray-application/views/adminpagedrugindication.php
DEBUG - 2014-03-29 13:38:23 --> Final output sent to browser
DEBUG - 2014-03-29 13:38:23 --> Total execution time: 0.0420
DEBUG - 2014-03-29 13:38:23 --> Config Class Initialized
DEBUG - 2014-03-29 13:38:23 --> Hooks Class Initialized
DEBUG - 2014-03-29 13:38:23 --> Utf8 Class Initialized
DEBUG - 2014-03-29 13:38:23 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 13:38:23 --> URI Class Initialized
DEBUG - 2014-03-29 13:38:23 --> Router Class Initialized
ERROR - 2014-03-29 13:38:23 --> 404 Page Not Found --> css
DEBUG - 2014-03-29 13:38:26 --> Config Class Initialized
DEBUG - 2014-03-29 13:38:26 --> Hooks Class Initialized
DEBUG - 2014-03-29 13:38:26 --> Utf8 Class Initialized
DEBUG - 2014-03-29 13:38:26 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 13:38:26 --> URI Class Initialized
DEBUG - 2014-03-29 13:38:26 --> Router Class Initialized
DEBUG - 2014-03-29 13:38:26 --> Output Class Initialized
DEBUG - 2014-03-29 13:38:26 --> Security Class Initialized
DEBUG - 2014-03-29 13:38:26 --> Input Class Initialized
DEBUG - 2014-03-29 13:38:26 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 13:38:26 --> Language Class Initialized
DEBUG - 2014-03-29 13:38:26 --> Loader Class Initialized
DEBUG - 2014-03-29 13:38:26 --> Helper loaded: form_helper
DEBUG - 2014-03-29 13:38:26 --> Helper loaded: url_helper
DEBUG - 2014-03-29 13:38:26 --> Helper loaded: html_helper
DEBUG - 2014-03-29 13:38:26 --> Database Driver Class Initialized
DEBUG - 2014-03-29 13:38:26 --> Session Class Initialized
DEBUG - 2014-03-29 13:38:26 --> Helper loaded: string_helper
DEBUG - 2014-03-29 13:38:26 --> Session routines successfully run
DEBUG - 2014-03-29 13:38:26 --> Form Validation Class Initialized
DEBUG - 2014-03-29 13:38:26 --> Controller Class Initialized
DEBUG - 2014-03-29 13:38:26 --> Model Class Initialized
DEBUG - 2014-03-29 13:38:26 --> Model Class Initialized
DEBUG - 2014-03-29 13:38:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 13:38:26 --> Encrypt Class Initialized
INFO  - 2014-03-29 13:38:26 --> after session initialization................
INFO  - 2014-03-29 13:38:26 --> after drug category list has been clicked.................
INFO  - 2014-03-29 13:38:26 --> The session id is ========>e5d66b4a306d6f727af870036362a8f2 and the member id is =======>35
DEBUG - 2014-03-29 13:38:26 --> File loaded: ../pharmaray-application/views/adminpagedrugindication.php
DEBUG - 2014-03-29 13:38:26 --> Final output sent to browser
DEBUG - 2014-03-29 13:38:26 --> Total execution time: 0.0460
DEBUG - 2014-03-29 13:38:26 --> Config Class Initialized
DEBUG - 2014-03-29 13:38:26 --> Hooks Class Initialized
DEBUG - 2014-03-29 13:38:26 --> Utf8 Class Initialized
DEBUG - 2014-03-29 13:38:26 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 13:38:26 --> URI Class Initialized
DEBUG - 2014-03-29 13:38:26 --> Router Class Initialized
ERROR - 2014-03-29 13:38:26 --> 404 Page Not Found --> css
DEBUG - 2014-03-29 13:38:35 --> Config Class Initialized
DEBUG - 2014-03-29 13:38:35 --> Hooks Class Initialized
DEBUG - 2014-03-29 13:38:35 --> Utf8 Class Initialized
DEBUG - 2014-03-29 13:38:35 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 13:38:35 --> URI Class Initialized
DEBUG - 2014-03-29 13:38:35 --> Router Class Initialized
DEBUG - 2014-03-29 13:38:35 --> Output Class Initialized
DEBUG - 2014-03-29 13:38:35 --> Security Class Initialized
DEBUG - 2014-03-29 13:38:35 --> Input Class Initialized
DEBUG - 2014-03-29 13:38:35 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 13:38:35 --> Language Class Initialized
DEBUG - 2014-03-29 13:38:35 --> Loader Class Initialized
DEBUG - 2014-03-29 13:38:35 --> Helper loaded: form_helper
DEBUG - 2014-03-29 13:38:35 --> Helper loaded: url_helper
DEBUG - 2014-03-29 13:38:35 --> Helper loaded: html_helper
DEBUG - 2014-03-29 13:38:35 --> Database Driver Class Initialized
DEBUG - 2014-03-29 13:38:35 --> Session Class Initialized
DEBUG - 2014-03-29 13:38:35 --> Helper loaded: string_helper
DEBUG - 2014-03-29 13:38:35 --> Session routines successfully run
DEBUG - 2014-03-29 13:38:35 --> Form Validation Class Initialized
DEBUG - 2014-03-29 13:38:35 --> Controller Class Initialized
DEBUG - 2014-03-29 13:38:35 --> Model Class Initialized
DEBUG - 2014-03-29 13:38:35 --> Model Class Initialized
DEBUG - 2014-03-29 13:38:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 13:38:35 --> Encrypt Class Initialized
INFO  - 2014-03-29 13:38:35 --> after session initialization................
INFO  - 2014-03-29 13:38:35 --> Inside create drug indication
INFO  - 2014-03-29 13:38:35 --> before inserting into drug indication.................
INFO  - 2014-03-29 13:38:35 --> after inserting into drug indication.................5
INFO  - 2014-03-29 13:38:35 --> INSERT INTO `drugindication` (`name`, `description`) VALUES ('Headache', 'For head ache')
INFO  - 2014-03-29 13:38:35 --> After creating drug indication
DEBUG - 2014-03-29 13:38:35 --> Final output sent to browser
DEBUG - 2014-03-29 13:38:35 --> Total execution time: 0.1250
DEBUG - 2014-03-29 13:38:52 --> Config Class Initialized
DEBUG - 2014-03-29 13:38:52 --> Hooks Class Initialized
DEBUG - 2014-03-29 13:38:52 --> Utf8 Class Initialized
DEBUG - 2014-03-29 13:38:52 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 13:38:52 --> URI Class Initialized
DEBUG - 2014-03-29 13:38:52 --> Router Class Initialized
DEBUG - 2014-03-29 13:38:52 --> Output Class Initialized
DEBUG - 2014-03-29 13:38:52 --> Security Class Initialized
DEBUG - 2014-03-29 13:38:52 --> Input Class Initialized
DEBUG - 2014-03-29 13:38:52 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 13:38:52 --> Language Class Initialized
DEBUG - 2014-03-29 13:38:52 --> Loader Class Initialized
DEBUG - 2014-03-29 13:38:52 --> Helper loaded: form_helper
DEBUG - 2014-03-29 13:38:52 --> Helper loaded: url_helper
DEBUG - 2014-03-29 13:38:52 --> Helper loaded: html_helper
DEBUG - 2014-03-29 13:38:52 --> Database Driver Class Initialized
DEBUG - 2014-03-29 13:38:52 --> Session Class Initialized
DEBUG - 2014-03-29 13:38:52 --> Helper loaded: string_helper
DEBUG - 2014-03-29 13:38:52 --> Session routines successfully run
DEBUG - 2014-03-29 13:38:52 --> Form Validation Class Initialized
DEBUG - 2014-03-29 13:38:52 --> Controller Class Initialized
DEBUG - 2014-03-29 13:38:52 --> Model Class Initialized
DEBUG - 2014-03-29 13:38:52 --> Model Class Initialized
DEBUG - 2014-03-29 13:38:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 13:38:52 --> Encrypt Class Initialized
INFO  - 2014-03-29 13:38:52 --> after session initialization................
INFO  - 2014-03-29 13:38:52 --> after newsleters list has been clicked.................
INFO  - 2014-03-29 13:38:52 --> drugcategory ::::::::::===>SELECT `dc`.`id_drugcategory`, `dc`.`name`
FROM (`drugcategory` dc)
ORDER BY `dc`.`name`
INFO  - 2014-03-29 13:38:52 --> brand name ::::::::::===>SELECT `bn`.`id_brandname`, `bn`.`name`
FROM (`brandname` bn)
ORDER BY `bn`.`name`
INFO  - 2014-03-29 13:38:52 --> drug class ::::::::::===>SELECT `dc`.`id_drugclass`, `dc`.`name`
FROM (`drugclass` dc)
ORDER BY `dc`.`name`
INFO  - 2014-03-29 13:38:52 --> The session id is ========>e5d66b4a306d6f727af870036362a8f2 and the member id is =======>35
DEBUG - 2014-03-29 13:38:52 --> File loaded: ../pharmaray-application/views/adminpagedrugs.php
DEBUG - 2014-03-29 13:38:52 --> Final output sent to browser
DEBUG - 2014-03-29 13:38:52 --> Total execution time: 0.1060
DEBUG - 2014-03-29 13:38:53 --> Config Class Initialized
DEBUG - 2014-03-29 13:38:53 --> Hooks Class Initialized
DEBUG - 2014-03-29 13:38:53 --> Utf8 Class Initialized
DEBUG - 2014-03-29 13:38:53 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 13:38:53 --> URI Class Initialized
DEBUG - 2014-03-29 13:38:53 --> Router Class Initialized
ERROR - 2014-03-29 13:38:53 --> 404 Page Not Found --> css
DEBUG - 2014-03-29 13:43:06 --> Config Class Initialized
DEBUG - 2014-03-29 13:43:06 --> Hooks Class Initialized
DEBUG - 2014-03-29 13:43:06 --> Utf8 Class Initialized
DEBUG - 2014-03-29 13:43:06 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 13:43:06 --> URI Class Initialized
DEBUG - 2014-03-29 13:43:06 --> Router Class Initialized
DEBUG - 2014-03-29 13:43:06 --> Output Class Initialized
DEBUG - 2014-03-29 13:43:06 --> Security Class Initialized
DEBUG - 2014-03-29 13:43:06 --> Input Class Initialized
DEBUG - 2014-03-29 13:43:06 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 13:43:06 --> Language Class Initialized
DEBUG - 2014-03-29 13:43:06 --> Loader Class Initialized
DEBUG - 2014-03-29 13:43:06 --> Helper loaded: form_helper
DEBUG - 2014-03-29 13:43:06 --> Helper loaded: url_helper
DEBUG - 2014-03-29 13:43:06 --> Helper loaded: html_helper
DEBUG - 2014-03-29 13:43:06 --> Database Driver Class Initialized
DEBUG - 2014-03-29 13:43:06 --> Session Class Initialized
DEBUG - 2014-03-29 13:43:06 --> Helper loaded: string_helper
DEBUG - 2014-03-29 13:43:06 --> Session routines successfully run
DEBUG - 2014-03-29 13:43:06 --> Form Validation Class Initialized
DEBUG - 2014-03-29 13:43:06 --> Controller Class Initialized
DEBUG - 2014-03-29 13:43:06 --> Model Class Initialized
DEBUG - 2014-03-29 13:43:06 --> Model Class Initialized
DEBUG - 2014-03-29 13:43:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 13:43:06 --> Encrypt Class Initialized
INFO  - 2014-03-29 13:43:06 --> after session initialization................
INFO  - 2014-03-29 13:43:06 --> after newsleters list has been clicked.................
INFO  - 2014-03-29 13:43:06 --> inside retrieving locations 
INFO  - 2014-03-29 13:43:06 --> select l.id_location as id, l.name as name from location l where l.id_location not in(select lr.location_id from location_ref lr)
INFO  - 2014-03-29 13:43:06 --> The session id is ========>e5668923a5fc067cad35e64b92d5d9c9 and the member id is =======>35
DEBUG - 2014-03-29 13:43:06 --> File loaded: ../pharmaray-application/views/adminpagepharmacy.php
DEBUG - 2014-03-29 13:43:06 --> Final output sent to browser
DEBUG - 2014-03-29 13:43:06 --> Total execution time: 0.1430
DEBUG - 2014-03-29 13:43:07 --> Config Class Initialized
DEBUG - 2014-03-29 13:43:07 --> Hooks Class Initialized
DEBUG - 2014-03-29 13:43:07 --> Utf8 Class Initialized
DEBUG - 2014-03-29 13:43:07 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 13:43:07 --> URI Class Initialized
DEBUG - 2014-03-29 13:43:07 --> Router Class Initialized
ERROR - 2014-03-29 13:43:07 --> 404 Page Not Found --> css
DEBUG - 2014-03-29 13:43:09 --> Config Class Initialized
DEBUG - 2014-03-29 13:43:09 --> Hooks Class Initialized
DEBUG - 2014-03-29 13:43:09 --> Utf8 Class Initialized
DEBUG - 2014-03-29 13:43:09 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 13:43:09 --> URI Class Initialized
DEBUG - 2014-03-29 13:43:09 --> Router Class Initialized
DEBUG - 2014-03-29 13:43:09 --> Output Class Initialized
DEBUG - 2014-03-29 13:43:09 --> Security Class Initialized
DEBUG - 2014-03-29 13:43:09 --> Input Class Initialized
DEBUG - 2014-03-29 13:43:09 --> Global POST and COOKIE data sanitized
DEBUG - 2014-03-29 13:43:09 --> Language Class Initialized
DEBUG - 2014-03-29 13:43:09 --> Loader Class Initialized
DEBUG - 2014-03-29 13:43:09 --> Helper loaded: form_helper
DEBUG - 2014-03-29 13:43:09 --> Helper loaded: url_helper
DEBUG - 2014-03-29 13:43:09 --> Helper loaded: html_helper
DEBUG - 2014-03-29 13:43:09 --> Database Driver Class Initialized
DEBUG - 2014-03-29 13:43:09 --> Session Class Initialized
DEBUG - 2014-03-29 13:43:09 --> Helper loaded: string_helper
DEBUG - 2014-03-29 13:43:09 --> Session routines successfully run
DEBUG - 2014-03-29 13:43:09 --> Form Validation Class Initialized
DEBUG - 2014-03-29 13:43:09 --> Controller Class Initialized
DEBUG - 2014-03-29 13:43:09 --> Model Class Initialized
DEBUG - 2014-03-29 13:43:09 --> Model Class Initialized
DEBUG - 2014-03-29 13:43:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-03-29 13:43:09 --> Encrypt Class Initialized
INFO  - 2014-03-29 13:43:09 --> after session initialization................
INFO  - 2014-03-29 13:43:09 --> after newsleters list has been clicked.................
INFO  - 2014-03-29 13:43:09 --> drugcategory ::::::::::===>SELECT `dc`.`id_drugcategory`, `dc`.`name`
FROM (`drugcategory` dc)
ORDER BY `dc`.`name`
INFO  - 2014-03-29 13:43:09 --> brand name ::::::::::===>SELECT `bn`.`id_brandname`, `bn`.`name`
FROM (`brandname` bn)
ORDER BY `bn`.`name`
INFO  - 2014-03-29 13:43:09 --> drug class ::::::::::===>SELECT `dc`.`id_drugclass`, `dc`.`name`
FROM (`drugclass` dc)
ORDER BY `dc`.`name`
INFO  - 2014-03-29 13:43:09 --> The session id is ========>e5668923a5fc067cad35e64b92d5d9c9 and the member id is =======>35
DEBUG - 2014-03-29 13:43:09 --> File loaded: ../pharmaray-application/views/adminpagedrugs.php
DEBUG - 2014-03-29 13:43:09 --> Final output sent to browser
DEBUG - 2014-03-29 13:43:09 --> Total execution time: 0.0500
DEBUG - 2014-03-29 13:43:09 --> Config Class Initialized
DEBUG - 2014-03-29 13:43:09 --> Hooks Class Initialized
DEBUG - 2014-03-29 13:43:09 --> Utf8 Class Initialized
DEBUG - 2014-03-29 13:43:09 --> UTF-8 Support Enabled
DEBUG - 2014-03-29 13:43:09 --> URI Class Initialized
DEBUG - 2014-03-29 13:43:09 --> Router Class Initialized
ERROR - 2014-03-29 13:43:09 --> 404 Page Not Found --> css
