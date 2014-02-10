<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2014-01-14 09:20:38 --> Config Class Initialized
DEBUG - 2014-01-14 09:20:38 --> Hooks Class Initialized
DEBUG - 2014-01-14 09:20:38 --> Utf8 Class Initialized
DEBUG - 2014-01-14 09:20:38 --> UTF-8 Support Enabled
DEBUG - 2014-01-14 09:20:38 --> URI Class Initialized
DEBUG - 2014-01-14 09:20:38 --> Router Class Initialized
DEBUG - 2014-01-14 09:20:38 --> No URI present. Default controller set.
DEBUG - 2014-01-14 09:20:38 --> Output Class Initialized
DEBUG - 2014-01-14 09:20:38 --> Security Class Initialized
DEBUG - 2014-01-14 09:20:38 --> Input Class Initialized
DEBUG - 2014-01-14 09:20:38 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-14 09:20:38 --> Language Class Initialized
DEBUG - 2014-01-14 09:20:38 --> Loader Class Initialized
DEBUG - 2014-01-14 09:20:38 --> Helper loaded: form_helper
DEBUG - 2014-01-14 09:20:38 --> Helper loaded: url_helper
DEBUG - 2014-01-14 09:20:38 --> Helper loaded: html_helper
DEBUG - 2014-01-14 09:20:38 --> Database Driver Class Initialized
DEBUG - 2014-01-14 09:20:39 --> Session Class Initialized
DEBUG - 2014-01-14 09:20:39 --> Helper loaded: string_helper
DEBUG - 2014-01-14 09:20:39 --> A session cookie was not found.
DEBUG - 2014-01-14 09:20:39 --> Session routines successfully run
DEBUG - 2014-01-14 09:20:39 --> Form Validation Class Initialized
DEBUG - 2014-01-14 09:20:39 --> Controller Class Initialized
INFO  - 2014-01-14 09:20:39 --> the form message==>
INFO  - 2014-01-14 09:20:39 --> The session id is ========>6f237df5b020ef84cb910c13552ff6c5 and the member id is =======>
INFO  - 2014-01-14 09:20:39 --> after the retrieving session list.................//////////
DEBUG - 2014-01-14 09:20:39 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2014-01-14 09:20:39 --> Final output sent to browser
DEBUG - 2014-01-14 09:20:39 --> Total execution time: 1.0501
DEBUG - 2014-01-14 09:20:54 --> Config Class Initialized
DEBUG - 2014-01-14 09:20:54 --> Hooks Class Initialized
DEBUG - 2014-01-14 09:20:54 --> Utf8 Class Initialized
DEBUG - 2014-01-14 09:20:54 --> UTF-8 Support Enabled
DEBUG - 2014-01-14 09:20:54 --> URI Class Initialized
DEBUG - 2014-01-14 09:20:54 --> Router Class Initialized
DEBUG - 2014-01-14 09:20:54 --> Output Class Initialized
DEBUG - 2014-01-14 09:20:54 --> Security Class Initialized
DEBUG - 2014-01-14 09:20:54 --> Input Class Initialized
DEBUG - 2014-01-14 09:20:54 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-14 09:20:54 --> Language Class Initialized
DEBUG - 2014-01-14 09:20:54 --> Loader Class Initialized
DEBUG - 2014-01-14 09:20:54 --> Helper loaded: form_helper
DEBUG - 2014-01-14 09:20:54 --> Helper loaded: url_helper
DEBUG - 2014-01-14 09:20:54 --> Helper loaded: html_helper
DEBUG - 2014-01-14 09:20:54 --> Database Driver Class Initialized
DEBUG - 2014-01-14 09:20:54 --> Session Class Initialized
DEBUG - 2014-01-14 09:20:54 --> Helper loaded: string_helper
DEBUG - 2014-01-14 09:20:54 --> Session routines successfully run
DEBUG - 2014-01-14 09:20:54 --> Form Validation Class Initialized
DEBUG - 2014-01-14 09:20:54 --> Controller Class Initialized
DEBUG - 2014-01-14 09:20:54 --> Model Class Initialized
DEBUG - 2014-01-14 09:20:54 --> Model Class Initialized
DEBUG - 2014-01-14 09:20:54 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-14 09:20:54 --> after session initialization................
INFO  - 2014-01-14 09:20:54 --> inside rays login auth.............
DEBUG - 2014-01-14 09:20:54 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2014-01-14 09:20:54 --> XSS Filtering completed
DEBUG - 2014-01-14 09:20:54 --> XSS Filtering completed
INFO  - 2014-01-14 09:20:54 --> before getting the relation of member............18
INFO  - 2014-01-14 09:20:54 --> registration complete and username set on userpage.................onwuzu
INFO  - 2014-01-14 09:20:54 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  '18'
INFO  - 2014-01-14 09:20:54 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-01-14 09:20:54 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2014-01-14 09:20:54 --> inside retrieving vacancy for member
INFO  - 2014-01-14 09:20:54 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2014-01-14 09:20:54 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-01-14 09:20:54 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2014-01-14 09:20:54 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2014-01-14 09:20:55 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2014-01-14 09:20:55 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2014-01-14 09:20:55 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2014-01-14 09:20:55 --> inside retrieving pharmacy for drug id is 1
INFO  - 2014-01-14 09:20:55 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2014-01-14 09:20:55 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2014-01-14 09:20:55 -->  column name inside view is 0 column Data is Male Doctor
INFO  - 2014-01-14 09:20:55 -->  column name inside view is 1 column Data is Ordinary Member
DEBUG - 2014-01-14 09:20:55 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2014-01-14 09:20:55 --> Final output sent to browser
DEBUG - 2014-01-14 09:20:55 --> Total execution time: 0.9891
DEBUG - 2014-01-14 09:20:56 --> Config Class Initialized
DEBUG - 2014-01-14 09:20:56 --> Hooks Class Initialized
DEBUG - 2014-01-14 09:20:56 --> Utf8 Class Initialized
DEBUG - 2014-01-14 09:20:56 --> UTF-8 Support Enabled
DEBUG - 2014-01-14 09:20:56 --> URI Class Initialized
DEBUG - 2014-01-14 09:20:56 --> Router Class Initialized
ERROR - 2014-01-14 09:20:56 --> 404 Page Not Found --> css
DEBUG - 2014-01-14 09:21:00 --> Config Class Initialized
DEBUG - 2014-01-14 09:21:00 --> Hooks Class Initialized
DEBUG - 2014-01-14 09:21:00 --> Utf8 Class Initialized
DEBUG - 2014-01-14 09:21:00 --> UTF-8 Support Enabled
DEBUG - 2014-01-14 09:21:00 --> URI Class Initialized
DEBUG - 2014-01-14 09:21:00 --> Router Class Initialized
DEBUG - 2014-01-14 09:21:00 --> Output Class Initialized
DEBUG - 2014-01-14 09:21:00 --> Security Class Initialized
DEBUG - 2014-01-14 09:21:00 --> Input Class Initialized
DEBUG - 2014-01-14 09:21:00 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-14 09:21:00 --> Language Class Initialized
DEBUG - 2014-01-14 09:21:00 --> Loader Class Initialized
DEBUG - 2014-01-14 09:21:00 --> Helper loaded: form_helper
DEBUG - 2014-01-14 09:21:00 --> Helper loaded: url_helper
DEBUG - 2014-01-14 09:21:00 --> Helper loaded: html_helper
DEBUG - 2014-01-14 09:21:00 --> Database Driver Class Initialized
DEBUG - 2014-01-14 09:21:01 --> Session Class Initialized
DEBUG - 2014-01-14 09:21:01 --> Helper loaded: string_helper
DEBUG - 2014-01-14 09:21:01 --> Session routines successfully run
DEBUG - 2014-01-14 09:21:01 --> Form Validation Class Initialized
DEBUG - 2014-01-14 09:21:01 --> Controller Class Initialized
DEBUG - 2014-01-14 09:21:01 --> Model Class Initialized
DEBUG - 2014-01-14 09:21:01 --> Model Class Initialized
DEBUG - 2014-01-14 09:21:01 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-14 09:21:01 --> after session initialization................
DEBUG - 2014-01-14 09:21:01 --> Config Class Initialized
DEBUG - 2014-01-14 09:21:01 --> Hooks Class Initialized
DEBUG - 2014-01-14 09:21:01 --> Utf8 Class Initialized
DEBUG - 2014-01-14 09:21:01 --> UTF-8 Support Enabled
DEBUG - 2014-01-14 09:21:01 --> URI Class Initialized
DEBUG - 2014-01-14 09:21:01 --> Router Class Initialized
DEBUG - 2014-01-14 09:21:01 --> No URI present. Default controller set.
DEBUG - 2014-01-14 09:21:01 --> Output Class Initialized
DEBUG - 2014-01-14 09:21:01 --> Security Class Initialized
DEBUG - 2014-01-14 09:21:01 --> Input Class Initialized
DEBUG - 2014-01-14 09:21:01 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-14 09:21:01 --> Language Class Initialized
DEBUG - 2014-01-14 09:21:01 --> Loader Class Initialized
DEBUG - 2014-01-14 09:21:01 --> Helper loaded: form_helper
DEBUG - 2014-01-14 09:21:01 --> Helper loaded: url_helper
DEBUG - 2014-01-14 09:21:01 --> Helper loaded: html_helper
DEBUG - 2014-01-14 09:21:01 --> Database Driver Class Initialized
DEBUG - 2014-01-14 09:21:01 --> Session Class Initialized
DEBUG - 2014-01-14 09:21:01 --> Helper loaded: string_helper
DEBUG - 2014-01-14 09:21:01 --> A session cookie was not found.
DEBUG - 2014-01-14 09:21:01 --> Session routines successfully run
DEBUG - 2014-01-14 09:21:01 --> Form Validation Class Initialized
DEBUG - 2014-01-14 09:21:01 --> Controller Class Initialized
INFO  - 2014-01-14 09:21:01 --> the form message==>
INFO  - 2014-01-14 09:21:01 --> The session id is ========>ceb2bb91a184b5ff376101d6c8f09ba1 and the member id is =======>
INFO  - 2014-01-14 09:21:01 --> after the retrieving session list.................//////////
DEBUG - 2014-01-14 09:21:01 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2014-01-14 09:21:01 --> Final output sent to browser
DEBUG - 2014-01-14 09:21:01 --> Total execution time: 0.0350
DEBUG - 2014-01-14 09:21:05 --> Config Class Initialized
DEBUG - 2014-01-14 09:21:05 --> Hooks Class Initialized
DEBUG - 2014-01-14 09:21:05 --> Utf8 Class Initialized
DEBUG - 2014-01-14 09:21:05 --> UTF-8 Support Enabled
DEBUG - 2014-01-14 09:21:05 --> URI Class Initialized
DEBUG - 2014-01-14 09:21:05 --> Router Class Initialized
DEBUG - 2014-01-14 09:21:05 --> Output Class Initialized
DEBUG - 2014-01-14 09:21:05 --> Security Class Initialized
DEBUG - 2014-01-14 09:21:05 --> Input Class Initialized
DEBUG - 2014-01-14 09:21:05 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-14 09:21:05 --> Language Class Initialized
DEBUG - 2014-01-14 09:21:05 --> Loader Class Initialized
DEBUG - 2014-01-14 09:21:05 --> Helper loaded: form_helper
DEBUG - 2014-01-14 09:21:05 --> Helper loaded: url_helper
DEBUG - 2014-01-14 09:21:05 --> Helper loaded: html_helper
DEBUG - 2014-01-14 09:21:05 --> Database Driver Class Initialized
DEBUG - 2014-01-14 09:21:05 --> Session Class Initialized
DEBUG - 2014-01-14 09:21:05 --> Helper loaded: string_helper
DEBUG - 2014-01-14 09:21:05 --> Session routines successfully run
DEBUG - 2014-01-14 09:21:05 --> Form Validation Class Initialized
DEBUG - 2014-01-14 09:21:05 --> Controller Class Initialized
DEBUG - 2014-01-14 09:21:05 --> Model Class Initialized
DEBUG - 2014-01-14 09:21:05 --> Model Class Initialized
DEBUG - 2014-01-14 09:21:05 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-14 09:21:05 --> after session initialization................
INFO  - 2014-01-14 09:21:05 --> inside rays login auth.............
DEBUG - 2014-01-14 09:21:05 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2014-01-14 09:21:05 --> XSS Filtering completed
DEBUG - 2014-01-14 09:21:05 --> XSS Filtering completed
INFO  - 2014-01-14 09:21:05 --> before getting the relation of member............6
INFO  - 2014-01-14 09:21:05 --> registration complete and username set on userpage.................Elvis
INFO  - 2014-01-14 09:21:05 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  '6'
INFO  - 2014-01-14 09:21:05 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-01-14 09:21:05 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2014-01-14 09:21:05 --> inside retrieving vacancy for member
INFO  - 2014-01-14 09:21:05 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2014-01-14 09:21:05 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-01-14 09:21:05 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2014-01-14 09:21:05 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2014-01-14 09:21:05 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2014-01-14 09:21:05 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2014-01-14 09:21:05 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2014-01-14 09:21:05 --> inside retrieving pharmacy for drug id is 1
INFO  - 2014-01-14 09:21:05 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2014-01-14 09:21:05 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2014-01-14 09:21:05 --> after newsleters list has been clicked.................
INFO  - 2014-01-14 09:21:05 --> drugcategory ::::::::::===>SELECT `dc`.`id_drugcategory`, `dc`.`name`
FROM (`drugcategory` dc)
ORDER BY `dc`.`name`
DEBUG - 2014-01-14 09:21:05 --> File loaded: ../pharmaray-application/views/adminpage.php
DEBUG - 2014-01-14 09:21:05 --> Final output sent to browser
DEBUG - 2014-01-14 09:21:05 --> Total execution time: 0.0800
DEBUG - 2014-01-14 09:21:05 --> Config Class Initialized
DEBUG - 2014-01-14 09:21:05 --> Hooks Class Initialized
DEBUG - 2014-01-14 09:21:05 --> Utf8 Class Initialized
DEBUG - 2014-01-14 09:21:05 --> UTF-8 Support Enabled
DEBUG - 2014-01-14 09:21:05 --> URI Class Initialized
DEBUG - 2014-01-14 09:21:05 --> Router Class Initialized
ERROR - 2014-01-14 09:21:05 --> 404 Page Not Found --> css
DEBUG - 2014-01-14 09:21:08 --> Config Class Initialized
DEBUG - 2014-01-14 09:21:08 --> Hooks Class Initialized
DEBUG - 2014-01-14 09:21:08 --> Utf8 Class Initialized
DEBUG - 2014-01-14 09:21:08 --> UTF-8 Support Enabled
DEBUG - 2014-01-14 09:21:08 --> URI Class Initialized
DEBUG - 2014-01-14 09:21:08 --> Router Class Initialized
DEBUG - 2014-01-14 09:21:08 --> Output Class Initialized
DEBUG - 2014-01-14 09:21:08 --> Security Class Initialized
DEBUG - 2014-01-14 09:21:08 --> Input Class Initialized
DEBUG - 2014-01-14 09:21:08 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-14 09:21:08 --> Language Class Initialized
DEBUG - 2014-01-14 09:21:08 --> Loader Class Initialized
DEBUG - 2014-01-14 09:21:08 --> Helper loaded: form_helper
DEBUG - 2014-01-14 09:21:08 --> Helper loaded: url_helper
DEBUG - 2014-01-14 09:21:08 --> Helper loaded: html_helper
DEBUG - 2014-01-14 09:21:08 --> Database Driver Class Initialized
DEBUG - 2014-01-14 09:21:08 --> Session Class Initialized
DEBUG - 2014-01-14 09:21:08 --> Helper loaded: string_helper
DEBUG - 2014-01-14 09:21:08 --> Session routines successfully run
DEBUG - 2014-01-14 09:21:08 --> Form Validation Class Initialized
DEBUG - 2014-01-14 09:21:08 --> Controller Class Initialized
DEBUG - 2014-01-14 09:21:08 --> Model Class Initialized
DEBUG - 2014-01-14 09:21:08 --> Model Class Initialized
DEBUG - 2014-01-14 09:21:08 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-14 09:21:08 --> after session initialization................
INFO  - 2014-01-14 09:21:08 --> after newsleters list has been clicked.................
ERROR - 2014-01-14 09:21:08 --> Severity: Notice  --> Undefined variable: drugcategory C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 115
ERROR - 2014-01-14 09:21:08 --> Severity: Warning  --> array_filter() expects parameter 1 to be array, null given C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 115
ERROR - 2014-01-14 09:21:08 --> Severity: Notice  --> Undefined variable: drugcategory C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 184
ERROR - 2014-01-14 09:21:08 --> Severity: Warning  --> array_filter() expects parameter 1 to be array, null given C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 184
ERROR - 2014-01-14 09:21:08 --> Severity: Notice  --> Undefined variable: drugcategory C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 212
ERROR - 2014-01-14 09:21:08 --> Severity: Warning  --> array_filter() expects parameter 1 to be array, null given C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 212
DEBUG - 2014-01-14 09:21:08 --> File loaded: ../pharmaray-application/views/adminpageforum.php
DEBUG - 2014-01-14 09:21:08 --> Final output sent to browser
DEBUG - 2014-01-14 09:21:08 --> Total execution time: 0.0400
DEBUG - 2014-01-14 09:21:08 --> Config Class Initialized
DEBUG - 2014-01-14 09:21:08 --> Hooks Class Initialized
DEBUG - 2014-01-14 09:21:08 --> Utf8 Class Initialized
DEBUG - 2014-01-14 09:21:08 --> UTF-8 Support Enabled
DEBUG - 2014-01-14 09:21:08 --> URI Class Initialized
DEBUG - 2014-01-14 09:21:08 --> Router Class Initialized
ERROR - 2014-01-14 09:21:08 --> 404 Page Not Found --> css
DEBUG - 2014-01-14 09:21:18 --> Config Class Initialized
DEBUG - 2014-01-14 09:21:18 --> Hooks Class Initialized
DEBUG - 2014-01-14 09:21:18 --> Utf8 Class Initialized
DEBUG - 2014-01-14 09:21:18 --> UTF-8 Support Enabled
DEBUG - 2014-01-14 09:21:18 --> URI Class Initialized
DEBUG - 2014-01-14 09:21:18 --> Router Class Initialized
DEBUG - 2014-01-14 09:21:18 --> Output Class Initialized
DEBUG - 2014-01-14 09:21:18 --> Security Class Initialized
DEBUG - 2014-01-14 09:21:18 --> Input Class Initialized
DEBUG - 2014-01-14 09:21:18 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-14 09:21:18 --> Language Class Initialized
DEBUG - 2014-01-14 09:21:18 --> Loader Class Initialized
DEBUG - 2014-01-14 09:21:18 --> Helper loaded: form_helper
DEBUG - 2014-01-14 09:21:18 --> Helper loaded: url_helper
DEBUG - 2014-01-14 09:21:18 --> Helper loaded: html_helper
DEBUG - 2014-01-14 09:21:18 --> Database Driver Class Initialized
DEBUG - 2014-01-14 09:21:18 --> Session Class Initialized
DEBUG - 2014-01-14 09:21:18 --> Helper loaded: string_helper
DEBUG - 2014-01-14 09:21:18 --> Session routines successfully run
DEBUG - 2014-01-14 09:21:18 --> Form Validation Class Initialized
DEBUG - 2014-01-14 09:21:18 --> Controller Class Initialized
DEBUG - 2014-01-14 09:21:18 --> Model Class Initialized
DEBUG - 2014-01-14 09:21:18 --> Model Class Initialized
DEBUG - 2014-01-14 09:21:18 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-14 09:21:18 --> after session initialization................
INFO  - 2014-01-14 09:21:18 --> Inside create forum
INFO  - 2014-01-14 09:21:18 --> before inserting into forum.................
INFO  - 2014-01-14 09:21:19 --> after inserting into forum.................12
INFO  - 2014-01-14 09:21:19 --> INSERT INTO `forum` (`name`, `description`, `timecreated`, `forumid_forum`) VALUES ('Medicals', 'Medicals', '2014-01-14 09:21:18', '0')
INFO  - 2014-01-14 09:21:19 --> After creating forum
DEBUG - 2014-01-14 09:21:19 --> Final output sent to browser
DEBUG - 2014-01-14 09:21:19 --> Total execution time: 0.1110
DEBUG - 2014-01-14 09:40:33 --> Config Class Initialized
DEBUG - 2014-01-14 09:40:33 --> Hooks Class Initialized
DEBUG - 2014-01-14 09:40:33 --> Utf8 Class Initialized
DEBUG - 2014-01-14 09:40:33 --> UTF-8 Support Enabled
DEBUG - 2014-01-14 09:40:33 --> URI Class Initialized
DEBUG - 2014-01-14 09:40:33 --> Router Class Initialized
DEBUG - 2014-01-14 09:40:33 --> Output Class Initialized
DEBUG - 2014-01-14 09:40:33 --> Security Class Initialized
DEBUG - 2014-01-14 09:40:33 --> Input Class Initialized
DEBUG - 2014-01-14 09:40:33 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-14 09:40:33 --> Language Class Initialized
DEBUG - 2014-01-14 09:40:33 --> Loader Class Initialized
DEBUG - 2014-01-14 09:40:33 --> Helper loaded: form_helper
DEBUG - 2014-01-14 09:40:33 --> Helper loaded: url_helper
DEBUG - 2014-01-14 09:40:33 --> Helper loaded: html_helper
DEBUG - 2014-01-14 09:40:33 --> Database Driver Class Initialized
DEBUG - 2014-01-14 09:40:33 --> Session Class Initialized
DEBUG - 2014-01-14 09:40:33 --> Helper loaded: string_helper
DEBUG - 2014-01-14 09:40:33 --> Session routines successfully run
DEBUG - 2014-01-14 09:40:33 --> Form Validation Class Initialized
DEBUG - 2014-01-14 09:40:33 --> Controller Class Initialized
DEBUG - 2014-01-14 09:40:33 --> Model Class Initialized
DEBUG - 2014-01-14 09:40:33 --> Model Class Initialized
DEBUG - 2014-01-14 09:40:33 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-14 09:40:33 --> after session initialization................
INFO  - 2014-01-14 09:40:33 --> after newsleters list has been clicked.................
ERROR - 2014-01-14 09:40:33 --> Severity: Notice  --> Undefined variable: drugcategory C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 115
ERROR - 2014-01-14 09:40:33 --> Severity: Warning  --> array_filter() expects parameter 1 to be array, null given C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 115
ERROR - 2014-01-14 09:40:33 --> Severity: Notice  --> Undefined variable: drugcategory C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 184
ERROR - 2014-01-14 09:40:33 --> Severity: Warning  --> array_filter() expects parameter 1 to be array, null given C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 184
ERROR - 2014-01-14 09:40:33 --> Severity: Notice  --> Undefined variable: drugcategory C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 212
ERROR - 2014-01-14 09:40:33 --> Severity: Warning  --> array_filter() expects parameter 1 to be array, null given C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 212
DEBUG - 2014-01-14 09:40:33 --> File loaded: ../pharmaray-application/views/adminpageforum.php
DEBUG - 2014-01-14 09:40:33 --> Final output sent to browser
DEBUG - 2014-01-14 09:40:33 --> Total execution time: 0.0450
DEBUG - 2014-01-14 09:40:33 --> Config Class Initialized
DEBUG - 2014-01-14 09:40:33 --> Hooks Class Initialized
DEBUG - 2014-01-14 09:40:33 --> Utf8 Class Initialized
DEBUG - 2014-01-14 09:40:33 --> UTF-8 Support Enabled
DEBUG - 2014-01-14 09:40:33 --> URI Class Initialized
DEBUG - 2014-01-14 09:40:33 --> Router Class Initialized
ERROR - 2014-01-14 09:40:33 --> 404 Page Not Found --> css
DEBUG - 2014-01-14 09:40:46 --> Config Class Initialized
DEBUG - 2014-01-14 09:40:46 --> Hooks Class Initialized
DEBUG - 2014-01-14 09:40:46 --> Utf8 Class Initialized
DEBUG - 2014-01-14 09:40:46 --> UTF-8 Support Enabled
DEBUG - 2014-01-14 09:40:46 --> URI Class Initialized
DEBUG - 2014-01-14 09:40:46 --> Router Class Initialized
DEBUG - 2014-01-14 09:40:46 --> Output Class Initialized
DEBUG - 2014-01-14 09:40:46 --> Security Class Initialized
DEBUG - 2014-01-14 09:40:46 --> Input Class Initialized
DEBUG - 2014-01-14 09:40:46 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-14 09:40:46 --> Language Class Initialized
DEBUG - 2014-01-14 09:40:46 --> Loader Class Initialized
DEBUG - 2014-01-14 09:40:46 --> Helper loaded: form_helper
DEBUG - 2014-01-14 09:40:46 --> Helper loaded: url_helper
DEBUG - 2014-01-14 09:40:46 --> Helper loaded: html_helper
DEBUG - 2014-01-14 09:40:46 --> Database Driver Class Initialized
DEBUG - 2014-01-14 09:40:47 --> Session Class Initialized
DEBUG - 2014-01-14 09:40:47 --> Helper loaded: string_helper
DEBUG - 2014-01-14 09:40:47 --> Session routines successfully run
DEBUG - 2014-01-14 09:40:47 --> Form Validation Class Initialized
DEBUG - 2014-01-14 09:40:47 --> Controller Class Initialized
DEBUG - 2014-01-14 09:40:47 --> Model Class Initialized
DEBUG - 2014-01-14 09:40:47 --> Model Class Initialized
DEBUG - 2014-01-14 09:40:47 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-14 09:40:47 --> after session initialization................
INFO  - 2014-01-14 09:40:47 --> Inside create forum
INFO  - 2014-01-14 09:40:47 --> before inserting into forum.................
INFO  - 2014-01-14 09:40:47 --> after inserting into forum.................13
INFO  - 2014-01-14 09:40:47 --> INSERT INTO `forum` (`name`, `description`, `timecreated`, `forumid_forum`) VALUES ('Medics', 'Medicals and stuff', '2014-01-14 09:40:47', '0')
INFO  - 2014-01-14 09:40:47 --> After creating forum
DEBUG - 2014-01-14 09:40:47 --> Final output sent to browser
DEBUG - 2014-01-14 09:40:47 --> Total execution time: 1.1350
DEBUG - 2014-01-14 09:49:15 --> Config Class Initialized
DEBUG - 2014-01-14 09:49:15 --> Hooks Class Initialized
DEBUG - 2014-01-14 09:49:15 --> Utf8 Class Initialized
DEBUG - 2014-01-14 09:49:15 --> UTF-8 Support Enabled
DEBUG - 2014-01-14 09:49:15 --> URI Class Initialized
DEBUG - 2014-01-14 09:49:15 --> Router Class Initialized
DEBUG - 2014-01-14 09:49:15 --> Output Class Initialized
DEBUG - 2014-01-14 09:49:15 --> Security Class Initialized
DEBUG - 2014-01-14 09:49:15 --> Input Class Initialized
DEBUG - 2014-01-14 09:49:15 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-14 09:49:15 --> Language Class Initialized
DEBUG - 2014-01-14 09:49:15 --> Loader Class Initialized
DEBUG - 2014-01-14 09:49:15 --> Helper loaded: form_helper
DEBUG - 2014-01-14 09:49:15 --> Helper loaded: url_helper
DEBUG - 2014-01-14 09:49:15 --> Helper loaded: html_helper
DEBUG - 2014-01-14 09:49:15 --> Database Driver Class Initialized
DEBUG - 2014-01-14 09:49:15 --> Session Class Initialized
DEBUG - 2014-01-14 09:49:15 --> Helper loaded: string_helper
DEBUG - 2014-01-14 09:49:15 --> Session routines successfully run
DEBUG - 2014-01-14 09:49:15 --> Form Validation Class Initialized
DEBUG - 2014-01-14 09:49:15 --> Controller Class Initialized
DEBUG - 2014-01-14 09:49:15 --> Model Class Initialized
DEBUG - 2014-01-14 09:49:15 --> Model Class Initialized
DEBUG - 2014-01-14 09:49:15 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-14 09:49:15 --> after session initialization................
INFO  - 2014-01-14 09:49:15 --> after newsleters list has been clicked.................
ERROR - 2014-01-14 09:49:15 --> Severity: Notice  --> Undefined variable: drugcategory C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 115
ERROR - 2014-01-14 09:49:15 --> Severity: Warning  --> array_filter() expects parameter 1 to be array, null given C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 115
ERROR - 2014-01-14 09:49:15 --> Severity: Notice  --> Undefined variable: drugcategory C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 184
ERROR - 2014-01-14 09:49:15 --> Severity: Warning  --> array_filter() expects parameter 1 to be array, null given C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 184
ERROR - 2014-01-14 09:49:15 --> Severity: Notice  --> Undefined variable: drugcategory C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 212
ERROR - 2014-01-14 09:49:15 --> Severity: Warning  --> array_filter() expects parameter 1 to be array, null given C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 212
DEBUG - 2014-01-14 09:49:15 --> File loaded: ../pharmaray-application/views/adminpageforum.php
DEBUG - 2014-01-14 09:49:15 --> Final output sent to browser
DEBUG - 2014-01-14 09:49:15 --> Total execution time: 0.0450
DEBUG - 2014-01-14 09:49:15 --> Config Class Initialized
DEBUG - 2014-01-14 09:49:15 --> Hooks Class Initialized
DEBUG - 2014-01-14 09:49:15 --> Utf8 Class Initialized
DEBUG - 2014-01-14 09:49:15 --> UTF-8 Support Enabled
DEBUG - 2014-01-14 09:49:15 --> URI Class Initialized
DEBUG - 2014-01-14 09:49:15 --> Router Class Initialized
ERROR - 2014-01-14 09:49:15 --> 404 Page Not Found --> css
DEBUG - 2014-01-14 09:49:24 --> Config Class Initialized
DEBUG - 2014-01-14 09:49:24 --> Hooks Class Initialized
DEBUG - 2014-01-14 09:49:24 --> Utf8 Class Initialized
DEBUG - 2014-01-14 09:49:24 --> UTF-8 Support Enabled
DEBUG - 2014-01-14 09:49:24 --> URI Class Initialized
DEBUG - 2014-01-14 09:49:24 --> Router Class Initialized
DEBUG - 2014-01-14 09:49:24 --> Output Class Initialized
DEBUG - 2014-01-14 09:49:24 --> Security Class Initialized
DEBUG - 2014-01-14 09:49:24 --> Input Class Initialized
DEBUG - 2014-01-14 09:49:24 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-14 09:49:24 --> Language Class Initialized
DEBUG - 2014-01-14 09:49:24 --> Loader Class Initialized
DEBUG - 2014-01-14 09:49:24 --> Helper loaded: form_helper
DEBUG - 2014-01-14 09:49:24 --> Helper loaded: url_helper
DEBUG - 2014-01-14 09:49:24 --> Helper loaded: html_helper
DEBUG - 2014-01-14 09:49:24 --> Database Driver Class Initialized
DEBUG - 2014-01-14 09:49:24 --> Session Class Initialized
DEBUG - 2014-01-14 09:49:24 --> Helper loaded: string_helper
DEBUG - 2014-01-14 09:49:24 --> Session routines successfully run
DEBUG - 2014-01-14 09:49:24 --> Form Validation Class Initialized
DEBUG - 2014-01-14 09:49:24 --> Controller Class Initialized
DEBUG - 2014-01-14 09:49:24 --> Model Class Initialized
DEBUG - 2014-01-14 09:49:24 --> Model Class Initialized
DEBUG - 2014-01-14 09:49:24 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-14 09:49:24 --> after session initialization................
INFO  - 2014-01-14 09:49:24 --> Inside create forum
INFO  - 2014-01-14 09:49:24 --> The subform is null---------------------------->0
INFO  - 2014-01-14 09:49:24 --> before inserting into forum.................
INFO  - 2014-01-14 09:49:24 --> after inserting into forum.................14
INFO  - 2014-01-14 09:49:24 --> INSERT INTO `forum` (`name`, `description`, `timecreated`, `forumid_forum`) VALUES ('Meniac', 'Meniac', '2014-01-14 09:49:24', '0')
INFO  - 2014-01-14 09:49:24 --> After creating forum
DEBUG - 2014-01-14 09:49:24 --> Final output sent to browser
DEBUG - 2014-01-14 09:49:24 --> Total execution time: 0.1150
DEBUG - 2014-01-14 09:49:53 --> Config Class Initialized
DEBUG - 2014-01-14 09:49:53 --> Hooks Class Initialized
DEBUG - 2014-01-14 09:49:53 --> Utf8 Class Initialized
DEBUG - 2014-01-14 09:49:53 --> UTF-8 Support Enabled
DEBUG - 2014-01-14 09:49:53 --> URI Class Initialized
DEBUG - 2014-01-14 09:49:53 --> Router Class Initialized
DEBUG - 2014-01-14 09:49:53 --> Output Class Initialized
DEBUG - 2014-01-14 09:49:53 --> Security Class Initialized
DEBUG - 2014-01-14 09:49:53 --> Input Class Initialized
DEBUG - 2014-01-14 09:49:53 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-14 09:49:53 --> Language Class Initialized
DEBUG - 2014-01-14 09:49:53 --> Loader Class Initialized
DEBUG - 2014-01-14 09:49:53 --> Helper loaded: form_helper
DEBUG - 2014-01-14 09:49:53 --> Helper loaded: url_helper
DEBUG - 2014-01-14 09:49:53 --> Helper loaded: html_helper
DEBUG - 2014-01-14 09:49:53 --> Database Driver Class Initialized
DEBUG - 2014-01-14 09:49:53 --> Session Class Initialized
DEBUG - 2014-01-14 09:49:53 --> Helper loaded: string_helper
DEBUG - 2014-01-14 09:49:53 --> Session routines successfully run
DEBUG - 2014-01-14 09:49:53 --> Form Validation Class Initialized
DEBUG - 2014-01-14 09:49:53 --> Controller Class Initialized
DEBUG - 2014-01-14 09:49:53 --> Model Class Initialized
DEBUG - 2014-01-14 09:49:53 --> Model Class Initialized
DEBUG - 2014-01-14 09:49:53 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-14 09:49:53 --> after session initialization................
INFO  - 2014-01-14 09:49:53 --> after newsleters list has been clicked.................
ERROR - 2014-01-14 09:49:53 --> Severity: Notice  --> Undefined variable: drugcategory C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 115
ERROR - 2014-01-14 09:49:53 --> Severity: Warning  --> array_filter() expects parameter 1 to be array, null given C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 115
ERROR - 2014-01-14 09:49:53 --> Severity: Notice  --> Undefined variable: drugcategory C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 184
ERROR - 2014-01-14 09:49:53 --> Severity: Warning  --> array_filter() expects parameter 1 to be array, null given C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 184
ERROR - 2014-01-14 09:49:53 --> Severity: Notice  --> Undefined variable: drugcategory C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 212
ERROR - 2014-01-14 09:49:53 --> Severity: Warning  --> array_filter() expects parameter 1 to be array, null given C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 212
DEBUG - 2014-01-14 09:49:53 --> File loaded: ../pharmaray-application/views/adminpageforum.php
DEBUG - 2014-01-14 09:49:53 --> Final output sent to browser
DEBUG - 2014-01-14 09:49:53 --> Total execution time: 0.0550
DEBUG - 2014-01-14 09:49:53 --> Config Class Initialized
DEBUG - 2014-01-14 09:49:53 --> Hooks Class Initialized
DEBUG - 2014-01-14 09:49:53 --> Utf8 Class Initialized
DEBUG - 2014-01-14 09:49:53 --> UTF-8 Support Enabled
DEBUG - 2014-01-14 09:49:53 --> URI Class Initialized
DEBUG - 2014-01-14 09:49:53 --> Router Class Initialized
ERROR - 2014-01-14 09:49:53 --> 404 Page Not Found --> css
DEBUG - 2014-01-14 09:50:00 --> Config Class Initialized
DEBUG - 2014-01-14 09:50:00 --> Hooks Class Initialized
DEBUG - 2014-01-14 09:50:00 --> Utf8 Class Initialized
DEBUG - 2014-01-14 09:50:00 --> UTF-8 Support Enabled
DEBUG - 2014-01-14 09:50:00 --> URI Class Initialized
DEBUG - 2014-01-14 09:50:00 --> Router Class Initialized
DEBUG - 2014-01-14 09:50:00 --> Output Class Initialized
DEBUG - 2014-01-14 09:50:00 --> Security Class Initialized
DEBUG - 2014-01-14 09:50:00 --> Input Class Initialized
DEBUG - 2014-01-14 09:50:00 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-14 09:50:00 --> Language Class Initialized
DEBUG - 2014-01-14 09:50:00 --> Loader Class Initialized
DEBUG - 2014-01-14 09:50:00 --> Helper loaded: form_helper
DEBUG - 2014-01-14 09:50:00 --> Helper loaded: url_helper
DEBUG - 2014-01-14 09:50:00 --> Helper loaded: html_helper
DEBUG - 2014-01-14 09:50:00 --> Database Driver Class Initialized
DEBUG - 2014-01-14 09:50:00 --> Session Class Initialized
DEBUG - 2014-01-14 09:50:00 --> Helper loaded: string_helper
DEBUG - 2014-01-14 09:50:00 --> Session routines successfully run
DEBUG - 2014-01-14 09:50:00 --> Form Validation Class Initialized
DEBUG - 2014-01-14 09:50:00 --> Controller Class Initialized
DEBUG - 2014-01-14 09:50:00 --> Model Class Initialized
DEBUG - 2014-01-14 09:50:00 --> Model Class Initialized
DEBUG - 2014-01-14 09:50:00 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-14 09:50:00 --> after session initialization................
INFO  - 2014-01-14 09:50:00 --> Inside create forum
INFO  - 2014-01-14 09:50:00 --> The subform is null---------------------------->0
INFO  - 2014-01-14 09:50:00 --> before inserting into forum.................
INFO  - 2014-01-14 09:50:00 --> after inserting into forum.................15
INFO  - 2014-01-14 09:50:00 --> INSERT INTO `forum` (`name`, `description`, `timecreated`, `forumid_forum`) VALUES ('Meniac', 'Meniac', '2014-01-14 09:50:00', '0')
INFO  - 2014-01-14 09:50:00 --> After creating forum
DEBUG - 2014-01-14 09:50:00 --> Final output sent to browser
DEBUG - 2014-01-14 09:50:00 --> Total execution time: 0.0900
DEBUG - 2014-01-14 09:51:35 --> Config Class Initialized
DEBUG - 2014-01-14 09:51:35 --> Hooks Class Initialized
DEBUG - 2014-01-14 09:51:35 --> Utf8 Class Initialized
DEBUG - 2014-01-14 09:51:35 --> UTF-8 Support Enabled
DEBUG - 2014-01-14 09:51:35 --> URI Class Initialized
DEBUG - 2014-01-14 09:51:35 --> Router Class Initialized
DEBUG - 2014-01-14 09:51:35 --> Output Class Initialized
DEBUG - 2014-01-14 09:51:35 --> Security Class Initialized
DEBUG - 2014-01-14 09:51:35 --> Input Class Initialized
DEBUG - 2014-01-14 09:51:35 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-14 09:51:35 --> Language Class Initialized
DEBUG - 2014-01-14 09:51:35 --> Loader Class Initialized
DEBUG - 2014-01-14 09:51:35 --> Helper loaded: form_helper
DEBUG - 2014-01-14 09:51:35 --> Helper loaded: url_helper
DEBUG - 2014-01-14 09:51:35 --> Helper loaded: html_helper
DEBUG - 2014-01-14 09:51:35 --> Database Driver Class Initialized
DEBUG - 2014-01-14 09:51:35 --> Session Class Initialized
DEBUG - 2014-01-14 09:51:35 --> Helper loaded: string_helper
DEBUG - 2014-01-14 09:51:35 --> Session routines successfully run
DEBUG - 2014-01-14 09:51:35 --> Form Validation Class Initialized
DEBUG - 2014-01-14 09:51:35 --> Controller Class Initialized
DEBUG - 2014-01-14 09:51:35 --> Model Class Initialized
DEBUG - 2014-01-14 09:51:35 --> Model Class Initialized
DEBUG - 2014-01-14 09:51:35 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-14 09:51:35 --> after session initialization................
INFO  - 2014-01-14 09:51:35 --> after newsleters list has been clicked.................
ERROR - 2014-01-14 09:51:35 --> Severity: Notice  --> Undefined variable: drugcategory C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 115
ERROR - 2014-01-14 09:51:35 --> Severity: Warning  --> array_filter() expects parameter 1 to be array, null given C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 115
ERROR - 2014-01-14 09:51:35 --> Severity: Notice  --> Undefined variable: drugcategory C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 184
ERROR - 2014-01-14 09:51:35 --> Severity: Warning  --> array_filter() expects parameter 1 to be array, null given C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 184
ERROR - 2014-01-14 09:51:35 --> Severity: Notice  --> Undefined variable: drugcategory C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 212
ERROR - 2014-01-14 09:51:35 --> Severity: Warning  --> array_filter() expects parameter 1 to be array, null given C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 212
DEBUG - 2014-01-14 09:51:35 --> File loaded: ../pharmaray-application/views/adminpageforum.php
DEBUG - 2014-01-14 09:51:35 --> Final output sent to browser
DEBUG - 2014-01-14 09:51:35 --> Total execution time: 0.0550
DEBUG - 2014-01-14 09:51:35 --> Config Class Initialized
DEBUG - 2014-01-14 09:51:35 --> Hooks Class Initialized
DEBUG - 2014-01-14 09:51:35 --> Utf8 Class Initialized
DEBUG - 2014-01-14 09:51:35 --> UTF-8 Support Enabled
DEBUG - 2014-01-14 09:51:35 --> URI Class Initialized
DEBUG - 2014-01-14 09:51:35 --> Router Class Initialized
ERROR - 2014-01-14 09:51:35 --> 404 Page Not Found --> css
DEBUG - 2014-01-14 09:51:46 --> Config Class Initialized
DEBUG - 2014-01-14 09:51:46 --> Hooks Class Initialized
DEBUG - 2014-01-14 09:51:46 --> Utf8 Class Initialized
DEBUG - 2014-01-14 09:51:46 --> UTF-8 Support Enabled
DEBUG - 2014-01-14 09:51:46 --> URI Class Initialized
DEBUG - 2014-01-14 09:51:46 --> Router Class Initialized
DEBUG - 2014-01-14 09:51:46 --> Output Class Initialized
DEBUG - 2014-01-14 09:51:46 --> Security Class Initialized
DEBUG - 2014-01-14 09:51:46 --> Input Class Initialized
DEBUG - 2014-01-14 09:51:46 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-14 09:51:46 --> Language Class Initialized
DEBUG - 2014-01-14 09:51:46 --> Loader Class Initialized
DEBUG - 2014-01-14 09:51:46 --> Helper loaded: form_helper
DEBUG - 2014-01-14 09:51:46 --> Helper loaded: url_helper
DEBUG - 2014-01-14 09:51:46 --> Helper loaded: html_helper
DEBUG - 2014-01-14 09:51:46 --> Database Driver Class Initialized
DEBUG - 2014-01-14 09:51:46 --> Session Class Initialized
DEBUG - 2014-01-14 09:51:46 --> Helper loaded: string_helper
DEBUG - 2014-01-14 09:51:46 --> Session routines successfully run
DEBUG - 2014-01-14 09:51:46 --> Form Validation Class Initialized
DEBUG - 2014-01-14 09:51:46 --> Controller Class Initialized
DEBUG - 2014-01-14 09:51:46 --> Model Class Initialized
DEBUG - 2014-01-14 09:51:46 --> Model Class Initialized
DEBUG - 2014-01-14 09:51:46 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-14 09:51:46 --> after session initialization................
INFO  - 2014-01-14 09:51:46 --> Inside create forum
INFO  - 2014-01-14 09:51:46 --> The subform is null===---------------------------->null
INFO  - 2014-01-14 09:51:46 --> before inserting into forum.................
INFO  - 2014-01-14 09:51:46 --> after inserting into forum.................16
INFO  - 2014-01-14 09:51:46 --> INSERT INTO `forum` (`name`, `description`, `timecreated`, `forumid_forum`) VALUES ('Punishment', 'For something stupid', '2014-01-14 09:51:46', '0')
INFO  - 2014-01-14 09:51:46 --> After creating forum
DEBUG - 2014-01-14 09:51:46 --> Final output sent to browser
DEBUG - 2014-01-14 09:51:46 --> Total execution time: 0.1300
DEBUG - 2014-01-14 09:53:00 --> Config Class Initialized
DEBUG - 2014-01-14 09:53:00 --> Hooks Class Initialized
DEBUG - 2014-01-14 09:53:00 --> Utf8 Class Initialized
DEBUG - 2014-01-14 09:53:00 --> UTF-8 Support Enabled
DEBUG - 2014-01-14 09:53:00 --> URI Class Initialized
DEBUG - 2014-01-14 09:53:00 --> Router Class Initialized
DEBUG - 2014-01-14 09:53:00 --> Output Class Initialized
DEBUG - 2014-01-14 09:53:00 --> Security Class Initialized
DEBUG - 2014-01-14 09:53:00 --> Input Class Initialized
DEBUG - 2014-01-14 09:53:00 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-14 09:53:00 --> Language Class Initialized
DEBUG - 2014-01-14 09:53:00 --> Loader Class Initialized
DEBUG - 2014-01-14 09:53:00 --> Helper loaded: form_helper
DEBUG - 2014-01-14 09:53:00 --> Helper loaded: url_helper
DEBUG - 2014-01-14 09:53:00 --> Helper loaded: html_helper
DEBUG - 2014-01-14 09:53:00 --> Database Driver Class Initialized
DEBUG - 2014-01-14 09:53:00 --> Session Class Initialized
DEBUG - 2014-01-14 09:53:00 --> Helper loaded: string_helper
DEBUG - 2014-01-14 09:53:00 --> Session routines successfully run
DEBUG - 2014-01-14 09:53:00 --> Form Validation Class Initialized
DEBUG - 2014-01-14 09:53:00 --> Controller Class Initialized
DEBUG - 2014-01-14 09:53:00 --> Model Class Initialized
DEBUG - 2014-01-14 09:53:00 --> Model Class Initialized
DEBUG - 2014-01-14 09:53:00 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-14 09:53:00 --> after session initialization................
INFO  - 2014-01-14 09:53:00 --> after newsleters list has been clicked.................
ERROR - 2014-01-14 09:53:00 --> Severity: Notice  --> Undefined variable: drugcategory C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 115
ERROR - 2014-01-14 09:53:00 --> Severity: Warning  --> array_filter() expects parameter 1 to be array, null given C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 115
ERROR - 2014-01-14 09:53:00 --> Severity: Notice  --> Undefined variable: drugcategory C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 184
ERROR - 2014-01-14 09:53:00 --> Severity: Warning  --> array_filter() expects parameter 1 to be array, null given C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 184
ERROR - 2014-01-14 09:53:00 --> Severity: Notice  --> Undefined variable: drugcategory C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 212
ERROR - 2014-01-14 09:53:00 --> Severity: Warning  --> array_filter() expects parameter 1 to be array, null given C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 212
DEBUG - 2014-01-14 09:53:00 --> File loaded: ../pharmaray-application/views/adminpageforum.php
DEBUG - 2014-01-14 09:53:00 --> Final output sent to browser
DEBUG - 2014-01-14 09:53:00 --> Total execution time: 0.0450
DEBUG - 2014-01-14 09:53:00 --> Config Class Initialized
DEBUG - 2014-01-14 09:53:00 --> Hooks Class Initialized
DEBUG - 2014-01-14 09:53:00 --> Utf8 Class Initialized
DEBUG - 2014-01-14 09:53:00 --> UTF-8 Support Enabled
DEBUG - 2014-01-14 09:53:00 --> URI Class Initialized
DEBUG - 2014-01-14 09:53:00 --> Router Class Initialized
ERROR - 2014-01-14 09:53:00 --> 404 Page Not Found --> css
DEBUG - 2014-01-14 09:53:02 --> Config Class Initialized
DEBUG - 2014-01-14 09:53:02 --> Hooks Class Initialized
DEBUG - 2014-01-14 09:53:02 --> Utf8 Class Initialized
DEBUG - 2014-01-14 09:53:02 --> UTF-8 Support Enabled
DEBUG - 2014-01-14 09:53:02 --> URI Class Initialized
DEBUG - 2014-01-14 09:53:02 --> Router Class Initialized
DEBUG - 2014-01-14 09:53:02 --> Output Class Initialized
DEBUG - 2014-01-14 09:53:02 --> Security Class Initialized
DEBUG - 2014-01-14 09:53:02 --> Input Class Initialized
DEBUG - 2014-01-14 09:53:02 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-14 09:53:02 --> Language Class Initialized
DEBUG - 2014-01-14 09:53:02 --> Loader Class Initialized
DEBUG - 2014-01-14 09:53:02 --> Helper loaded: form_helper
DEBUG - 2014-01-14 09:53:02 --> Helper loaded: url_helper
DEBUG - 2014-01-14 09:53:02 --> Helper loaded: html_helper
DEBUG - 2014-01-14 09:53:02 --> Database Driver Class Initialized
DEBUG - 2014-01-14 09:53:02 --> Session Class Initialized
DEBUG - 2014-01-14 09:53:02 --> Helper loaded: string_helper
DEBUG - 2014-01-14 09:53:02 --> Session routines successfully run
DEBUG - 2014-01-14 09:53:02 --> Form Validation Class Initialized
DEBUG - 2014-01-14 09:53:02 --> Controller Class Initialized
DEBUG - 2014-01-14 09:53:02 --> Model Class Initialized
DEBUG - 2014-01-14 09:53:02 --> Model Class Initialized
DEBUG - 2014-01-14 09:53:02 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-14 09:53:02 --> after session initialization................
INFO  - 2014-01-14 09:53:02 --> after newsleters list has been clicked.................
ERROR - 2014-01-14 09:53:02 --> Severity: Notice  --> Undefined variable: drugcategory C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 115
ERROR - 2014-01-14 09:53:02 --> Severity: Warning  --> array_filter() expects parameter 1 to be array, null given C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 115
ERROR - 2014-01-14 09:53:02 --> Severity: Notice  --> Undefined variable: drugcategory C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 184
ERROR - 2014-01-14 09:53:02 --> Severity: Warning  --> array_filter() expects parameter 1 to be array, null given C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 184
ERROR - 2014-01-14 09:53:02 --> Severity: Notice  --> Undefined variable: drugcategory C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 212
ERROR - 2014-01-14 09:53:02 --> Severity: Warning  --> array_filter() expects parameter 1 to be array, null given C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 212
DEBUG - 2014-01-14 09:53:02 --> File loaded: ../pharmaray-application/views/adminpageforum.php
DEBUG - 2014-01-14 09:53:02 --> Final output sent to browser
DEBUG - 2014-01-14 09:53:02 --> Total execution time: 0.0450
DEBUG - 2014-01-14 09:53:02 --> Config Class Initialized
DEBUG - 2014-01-14 09:53:02 --> Hooks Class Initialized
DEBUG - 2014-01-14 09:53:02 --> Utf8 Class Initialized
DEBUG - 2014-01-14 09:53:02 --> UTF-8 Support Enabled
DEBUG - 2014-01-14 09:53:02 --> URI Class Initialized
DEBUG - 2014-01-14 09:53:02 --> Router Class Initialized
ERROR - 2014-01-14 09:53:02 --> 404 Page Not Found --> css
DEBUG - 2014-01-14 09:53:03 --> Config Class Initialized
DEBUG - 2014-01-14 09:53:03 --> Hooks Class Initialized
DEBUG - 2014-01-14 09:53:03 --> Utf8 Class Initialized
DEBUG - 2014-01-14 09:53:03 --> UTF-8 Support Enabled
DEBUG - 2014-01-14 09:53:03 --> URI Class Initialized
DEBUG - 2014-01-14 09:53:03 --> Router Class Initialized
DEBUG - 2014-01-14 09:53:03 --> Output Class Initialized
DEBUG - 2014-01-14 09:53:03 --> Security Class Initialized
DEBUG - 2014-01-14 09:53:03 --> Input Class Initialized
DEBUG - 2014-01-14 09:53:03 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-14 09:53:03 --> Language Class Initialized
DEBUG - 2014-01-14 09:53:03 --> Loader Class Initialized
DEBUG - 2014-01-14 09:53:03 --> Helper loaded: form_helper
DEBUG - 2014-01-14 09:53:03 --> Helper loaded: url_helper
DEBUG - 2014-01-14 09:53:03 --> Helper loaded: html_helper
DEBUG - 2014-01-14 09:53:03 --> Database Driver Class Initialized
DEBUG - 2014-01-14 09:53:03 --> Session Class Initialized
DEBUG - 2014-01-14 09:53:03 --> Helper loaded: string_helper
DEBUG - 2014-01-14 09:53:03 --> Session routines successfully run
DEBUG - 2014-01-14 09:53:03 --> Form Validation Class Initialized
DEBUG - 2014-01-14 09:53:03 --> Controller Class Initialized
DEBUG - 2014-01-14 09:53:03 --> Model Class Initialized
DEBUG - 2014-01-14 09:53:03 --> Model Class Initialized
DEBUG - 2014-01-14 09:53:03 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-14 09:53:03 --> after session initialization................
INFO  - 2014-01-14 09:53:03 --> after newsleters list has been clicked.................
ERROR - 2014-01-14 09:53:03 --> Severity: Notice  --> Undefined variable: drugcategory C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 115
ERROR - 2014-01-14 09:53:03 --> Severity: Warning  --> array_filter() expects parameter 1 to be array, null given C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 115
ERROR - 2014-01-14 09:53:03 --> Severity: Notice  --> Undefined variable: drugcategory C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 184
ERROR - 2014-01-14 09:53:03 --> Severity: Warning  --> array_filter() expects parameter 1 to be array, null given C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 184
ERROR - 2014-01-14 09:53:03 --> Severity: Notice  --> Undefined variable: drugcategory C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 212
ERROR - 2014-01-14 09:53:03 --> Severity: Warning  --> array_filter() expects parameter 1 to be array, null given C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 212
DEBUG - 2014-01-14 09:53:03 --> File loaded: ../pharmaray-application/views/adminpageforum.php
DEBUG - 2014-01-14 09:53:03 --> Final output sent to browser
DEBUG - 2014-01-14 09:53:03 --> Total execution time: 0.0500
DEBUG - 2014-01-14 09:53:03 --> Config Class Initialized
DEBUG - 2014-01-14 09:53:03 --> Hooks Class Initialized
DEBUG - 2014-01-14 09:53:03 --> Utf8 Class Initialized
DEBUG - 2014-01-14 09:53:03 --> UTF-8 Support Enabled
DEBUG - 2014-01-14 09:53:03 --> URI Class Initialized
DEBUG - 2014-01-14 09:53:03 --> Router Class Initialized
ERROR - 2014-01-14 09:53:03 --> 404 Page Not Found --> css
DEBUG - 2014-01-14 09:53:12 --> Config Class Initialized
DEBUG - 2014-01-14 09:53:12 --> Hooks Class Initialized
DEBUG - 2014-01-14 09:53:12 --> Utf8 Class Initialized
DEBUG - 2014-01-14 09:53:12 --> UTF-8 Support Enabled
DEBUG - 2014-01-14 09:53:12 --> URI Class Initialized
DEBUG - 2014-01-14 09:53:12 --> Router Class Initialized
DEBUG - 2014-01-14 09:53:12 --> Output Class Initialized
DEBUG - 2014-01-14 09:53:12 --> Security Class Initialized
DEBUG - 2014-01-14 09:53:12 --> Input Class Initialized
DEBUG - 2014-01-14 09:53:12 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-14 09:53:12 --> Language Class Initialized
DEBUG - 2014-01-14 09:53:12 --> Loader Class Initialized
DEBUG - 2014-01-14 09:53:12 --> Helper loaded: form_helper
DEBUG - 2014-01-14 09:53:12 --> Helper loaded: url_helper
DEBUG - 2014-01-14 09:53:12 --> Helper loaded: html_helper
DEBUG - 2014-01-14 09:53:12 --> Database Driver Class Initialized
DEBUG - 2014-01-14 09:53:12 --> Session Class Initialized
DEBUG - 2014-01-14 09:53:12 --> Helper loaded: string_helper
DEBUG - 2014-01-14 09:53:12 --> Session routines successfully run
DEBUG - 2014-01-14 09:53:12 --> Form Validation Class Initialized
DEBUG - 2014-01-14 09:53:12 --> Controller Class Initialized
DEBUG - 2014-01-14 09:53:12 --> Model Class Initialized
DEBUG - 2014-01-14 09:53:12 --> Model Class Initialized
DEBUG - 2014-01-14 09:53:12 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-14 09:53:12 --> after session initialization................
INFO  - 2014-01-14 09:53:12 --> Inside create forum
INFO  - 2014-01-14 09:53:12 --> The subform is null===---------------------------->
INFO  - 2014-01-14 09:53:12 --> before inserting into forum.................
INFO  - 2014-01-14 09:53:12 --> after inserting into forum.................17
INFO  - 2014-01-14 09:53:12 --> INSERT INTO `forum` (`name`, `description`, `timecreated`, `forumid_forum`) VALUES ('Where the hell', 'is he now', '2014-01-14 09:53:12', '0')
INFO  - 2014-01-14 09:53:12 --> After creating forum
DEBUG - 2014-01-14 09:53:12 --> Final output sent to browser
DEBUG - 2014-01-14 09:53:12 --> Total execution time: 0.1550
DEBUG - 2014-01-14 09:57:18 --> Config Class Initialized
DEBUG - 2014-01-14 09:57:18 --> Hooks Class Initialized
DEBUG - 2014-01-14 09:57:18 --> Utf8 Class Initialized
DEBUG - 2014-01-14 09:57:18 --> UTF-8 Support Enabled
DEBUG - 2014-01-14 09:57:18 --> URI Class Initialized
DEBUG - 2014-01-14 09:57:18 --> Router Class Initialized
DEBUG - 2014-01-14 09:57:18 --> Output Class Initialized
DEBUG - 2014-01-14 09:57:18 --> Security Class Initialized
DEBUG - 2014-01-14 09:57:18 --> Input Class Initialized
DEBUG - 2014-01-14 09:57:18 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-14 09:57:18 --> Language Class Initialized
DEBUG - 2014-01-14 09:57:18 --> Loader Class Initialized
DEBUG - 2014-01-14 09:57:18 --> Helper loaded: form_helper
DEBUG - 2014-01-14 09:57:18 --> Helper loaded: url_helper
DEBUG - 2014-01-14 09:57:18 --> Helper loaded: html_helper
DEBUG - 2014-01-14 09:57:18 --> Database Driver Class Initialized
DEBUG - 2014-01-14 09:57:18 --> Session Class Initialized
DEBUG - 2014-01-14 09:57:18 --> Helper loaded: string_helper
DEBUG - 2014-01-14 09:57:18 --> Session routines successfully run
DEBUG - 2014-01-14 09:57:18 --> Form Validation Class Initialized
DEBUG - 2014-01-14 09:57:18 --> Controller Class Initialized
DEBUG - 2014-01-14 09:57:18 --> Model Class Initialized
DEBUG - 2014-01-14 09:57:18 --> Model Class Initialized
DEBUG - 2014-01-14 09:57:18 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-14 09:57:18 --> after session initialization................
INFO  - 2014-01-14 09:57:18 --> after newsleters list has been clicked.................
ERROR - 2014-01-14 09:57:18 --> Severity: Notice  --> Undefined variable: drugcategory C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 115
ERROR - 2014-01-14 09:57:18 --> Severity: Warning  --> array_filter() expects parameter 1 to be array, null given C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 115
ERROR - 2014-01-14 09:57:18 --> Severity: Notice  --> Undefined variable: drugcategory C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 184
ERROR - 2014-01-14 09:57:18 --> Severity: Warning  --> array_filter() expects parameter 1 to be array, null given C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 184
ERROR - 2014-01-14 09:57:18 --> Severity: Notice  --> Undefined variable: drugcategory C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 212
ERROR - 2014-01-14 09:57:18 --> Severity: Warning  --> array_filter() expects parameter 1 to be array, null given C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 212
DEBUG - 2014-01-14 09:57:18 --> File loaded: ../pharmaray-application/views/adminpageforum.php
DEBUG - 2014-01-14 09:57:18 --> Final output sent to browser
DEBUG - 2014-01-14 09:57:18 --> Total execution time: 0.0450
DEBUG - 2014-01-14 09:57:18 --> Config Class Initialized
DEBUG - 2014-01-14 09:57:18 --> Hooks Class Initialized
DEBUG - 2014-01-14 09:57:18 --> Utf8 Class Initialized
DEBUG - 2014-01-14 09:57:18 --> UTF-8 Support Enabled
DEBUG - 2014-01-14 09:57:18 --> URI Class Initialized
DEBUG - 2014-01-14 09:57:18 --> Router Class Initialized
ERROR - 2014-01-14 09:57:18 --> 404 Page Not Found --> css
DEBUG - 2014-01-14 09:57:18 --> Config Class Initialized
DEBUG - 2014-01-14 09:57:18 --> Hooks Class Initialized
DEBUG - 2014-01-14 09:57:18 --> Utf8 Class Initialized
DEBUG - 2014-01-14 09:57:18 --> UTF-8 Support Enabled
DEBUG - 2014-01-14 09:57:18 --> URI Class Initialized
DEBUG - 2014-01-14 09:57:18 --> Router Class Initialized
DEBUG - 2014-01-14 09:57:18 --> Output Class Initialized
DEBUG - 2014-01-14 09:57:18 --> Security Class Initialized
DEBUG - 2014-01-14 09:57:18 --> Input Class Initialized
DEBUG - 2014-01-14 09:57:18 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-14 09:57:18 --> Language Class Initialized
DEBUG - 2014-01-14 09:57:18 --> Loader Class Initialized
DEBUG - 2014-01-14 09:57:18 --> Helper loaded: form_helper
DEBUG - 2014-01-14 09:57:18 --> Helper loaded: url_helper
DEBUG - 2014-01-14 09:57:18 --> Helper loaded: html_helper
DEBUG - 2014-01-14 09:57:18 --> Database Driver Class Initialized
DEBUG - 2014-01-14 09:57:19 --> Session Class Initialized
DEBUG - 2014-01-14 09:57:19 --> Helper loaded: string_helper
DEBUG - 2014-01-14 09:57:19 --> Session routines successfully run
DEBUG - 2014-01-14 09:57:19 --> Form Validation Class Initialized
DEBUG - 2014-01-14 09:57:19 --> Controller Class Initialized
DEBUG - 2014-01-14 09:57:19 --> Model Class Initialized
DEBUG - 2014-01-14 09:57:19 --> Model Class Initialized
DEBUG - 2014-01-14 09:57:19 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-14 09:57:19 --> after session initialization................
INFO  - 2014-01-14 09:57:19 --> after newsleters list has been clicked.................
ERROR - 2014-01-14 09:57:19 --> Severity: Notice  --> Undefined variable: drugcategory C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 115
ERROR - 2014-01-14 09:57:19 --> Severity: Warning  --> array_filter() expects parameter 1 to be array, null given C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 115
ERROR - 2014-01-14 09:57:19 --> Severity: Notice  --> Undefined variable: drugcategory C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 184
ERROR - 2014-01-14 09:57:19 --> Severity: Warning  --> array_filter() expects parameter 1 to be array, null given C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 184
ERROR - 2014-01-14 09:57:19 --> Severity: Notice  --> Undefined variable: drugcategory C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 212
ERROR - 2014-01-14 09:57:19 --> Severity: Warning  --> array_filter() expects parameter 1 to be array, null given C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 212
DEBUG - 2014-01-14 09:57:19 --> File loaded: ../pharmaray-application/views/adminpageforum.php
DEBUG - 2014-01-14 09:57:19 --> Final output sent to browser
DEBUG - 2014-01-14 09:57:19 --> Total execution time: 0.0500
DEBUG - 2014-01-14 09:57:19 --> Config Class Initialized
DEBUG - 2014-01-14 09:57:19 --> Hooks Class Initialized
DEBUG - 2014-01-14 09:57:19 --> Utf8 Class Initialized
DEBUG - 2014-01-14 09:57:19 --> UTF-8 Support Enabled
DEBUG - 2014-01-14 09:57:19 --> URI Class Initialized
DEBUG - 2014-01-14 09:57:19 --> Router Class Initialized
ERROR - 2014-01-14 09:57:19 --> 404 Page Not Found --> css
DEBUG - 2014-01-14 09:57:27 --> Config Class Initialized
DEBUG - 2014-01-14 09:57:27 --> Hooks Class Initialized
DEBUG - 2014-01-14 09:57:27 --> Utf8 Class Initialized
DEBUG - 2014-01-14 09:57:27 --> UTF-8 Support Enabled
DEBUG - 2014-01-14 09:57:27 --> URI Class Initialized
DEBUG - 2014-01-14 09:57:27 --> Router Class Initialized
DEBUG - 2014-01-14 09:57:27 --> Output Class Initialized
DEBUG - 2014-01-14 09:57:27 --> Security Class Initialized
DEBUG - 2014-01-14 09:57:27 --> Input Class Initialized
DEBUG - 2014-01-14 09:57:27 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-14 09:57:27 --> Language Class Initialized
DEBUG - 2014-01-14 09:57:27 --> Loader Class Initialized
DEBUG - 2014-01-14 09:57:27 --> Helper loaded: form_helper
DEBUG - 2014-01-14 09:57:27 --> Helper loaded: url_helper
DEBUG - 2014-01-14 09:57:27 --> Helper loaded: html_helper
DEBUG - 2014-01-14 09:57:27 --> Database Driver Class Initialized
DEBUG - 2014-01-14 09:57:27 --> Session Class Initialized
DEBUG - 2014-01-14 09:57:27 --> Helper loaded: string_helper
DEBUG - 2014-01-14 09:57:27 --> Session routines successfully run
DEBUG - 2014-01-14 09:57:27 --> Form Validation Class Initialized
DEBUG - 2014-01-14 09:57:27 --> Controller Class Initialized
DEBUG - 2014-01-14 09:57:27 --> Model Class Initialized
DEBUG - 2014-01-14 09:57:27 --> Model Class Initialized
DEBUG - 2014-01-14 09:57:27 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-14 09:57:27 --> after session initialization................
INFO  - 2014-01-14 09:57:27 --> Inside create forum
INFO  - 2014-01-14 09:57:27 --> The subform is null===---------------------------->null
INFO  - 2014-01-14 09:57:27 --> before inserting into forum.................
INFO  - 2014-01-14 09:57:27 --> after inserting into forum.................18
INFO  - 2014-01-14 09:57:27 --> INSERT INTO `forum` (`name`, `description`, `timecreated`, `forumid_forum`) VALUES ('lasjflkasdjflajl', 'lkjalsjdflkjalsdjfkasdf', '2014-01-14 09:57:27', '0')
INFO  - 2014-01-14 09:57:27 --> After creating forum
DEBUG - 2014-01-14 09:57:27 --> Final output sent to browser
DEBUG - 2014-01-14 09:57:27 --> Total execution time: 0.1100
DEBUG - 2014-01-14 09:58:00 --> Config Class Initialized
DEBUG - 2014-01-14 09:58:00 --> Hooks Class Initialized
DEBUG - 2014-01-14 09:58:00 --> Utf8 Class Initialized
DEBUG - 2014-01-14 09:58:00 --> UTF-8 Support Enabled
DEBUG - 2014-01-14 09:58:00 --> URI Class Initialized
DEBUG - 2014-01-14 09:58:00 --> Router Class Initialized
DEBUG - 2014-01-14 09:58:00 --> Output Class Initialized
DEBUG - 2014-01-14 09:58:00 --> Security Class Initialized
DEBUG - 2014-01-14 09:58:00 --> Input Class Initialized
DEBUG - 2014-01-14 09:58:00 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-14 09:58:00 --> Language Class Initialized
DEBUG - 2014-01-14 09:58:00 --> Loader Class Initialized
DEBUG - 2014-01-14 09:58:00 --> Helper loaded: form_helper
DEBUG - 2014-01-14 09:58:00 --> Helper loaded: url_helper
DEBUG - 2014-01-14 09:58:00 --> Helper loaded: html_helper
DEBUG - 2014-01-14 09:58:00 --> Database Driver Class Initialized
DEBUG - 2014-01-14 09:58:00 --> Session Class Initialized
DEBUG - 2014-01-14 09:58:00 --> Helper loaded: string_helper
DEBUG - 2014-01-14 09:58:00 --> Session routines successfully run
DEBUG - 2014-01-14 09:58:00 --> Form Validation Class Initialized
DEBUG - 2014-01-14 09:58:00 --> Controller Class Initialized
DEBUG - 2014-01-14 09:58:00 --> Model Class Initialized
DEBUG - 2014-01-14 09:58:00 --> Model Class Initialized
DEBUG - 2014-01-14 09:58:00 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-14 09:58:00 --> after session initialization................
INFO  - 2014-01-14 09:58:00 --> after newsleters list has been clicked.................
ERROR - 2014-01-14 09:58:00 --> Severity: Notice  --> Undefined variable: drugcategory C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 115
ERROR - 2014-01-14 09:58:00 --> Severity: Warning  --> array_filter() expects parameter 1 to be array, null given C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 115
ERROR - 2014-01-14 09:58:00 --> Severity: Notice  --> Undefined variable: drugcategory C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 184
ERROR - 2014-01-14 09:58:00 --> Severity: Warning  --> array_filter() expects parameter 1 to be array, null given C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 184
ERROR - 2014-01-14 09:58:00 --> Severity: Notice  --> Undefined variable: drugcategory C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 212
ERROR - 2014-01-14 09:58:00 --> Severity: Warning  --> array_filter() expects parameter 1 to be array, null given C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 212
DEBUG - 2014-01-14 09:58:00 --> File loaded: ../pharmaray-application/views/adminpageforum.php
DEBUG - 2014-01-14 09:58:00 --> Final output sent to browser
DEBUG - 2014-01-14 09:58:00 --> Total execution time: 0.0500
DEBUG - 2014-01-14 09:58:00 --> Config Class Initialized
DEBUG - 2014-01-14 09:58:00 --> Hooks Class Initialized
DEBUG - 2014-01-14 09:58:00 --> Utf8 Class Initialized
DEBUG - 2014-01-14 09:58:00 --> UTF-8 Support Enabled
DEBUG - 2014-01-14 09:58:00 --> URI Class Initialized
DEBUG - 2014-01-14 09:58:00 --> Router Class Initialized
ERROR - 2014-01-14 09:58:00 --> 404 Page Not Found --> css
DEBUG - 2014-01-14 09:58:02 --> Config Class Initialized
DEBUG - 2014-01-14 09:58:02 --> Hooks Class Initialized
DEBUG - 2014-01-14 09:58:02 --> Utf8 Class Initialized
DEBUG - 2014-01-14 09:58:02 --> UTF-8 Support Enabled
DEBUG - 2014-01-14 09:58:02 --> URI Class Initialized
DEBUG - 2014-01-14 09:58:02 --> Router Class Initialized
DEBUG - 2014-01-14 09:58:02 --> Output Class Initialized
DEBUG - 2014-01-14 09:58:02 --> Security Class Initialized
DEBUG - 2014-01-14 09:58:02 --> Input Class Initialized
DEBUG - 2014-01-14 09:58:02 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-14 09:58:02 --> Language Class Initialized
DEBUG - 2014-01-14 09:58:02 --> Loader Class Initialized
DEBUG - 2014-01-14 09:58:02 --> Helper loaded: form_helper
DEBUG - 2014-01-14 09:58:02 --> Helper loaded: url_helper
DEBUG - 2014-01-14 09:58:02 --> Helper loaded: html_helper
DEBUG - 2014-01-14 09:58:02 --> Database Driver Class Initialized
DEBUG - 2014-01-14 09:58:02 --> Session Class Initialized
DEBUG - 2014-01-14 09:58:02 --> Helper loaded: string_helper
DEBUG - 2014-01-14 09:58:02 --> Session routines successfully run
DEBUG - 2014-01-14 09:58:02 --> Form Validation Class Initialized
DEBUG - 2014-01-14 09:58:02 --> Controller Class Initialized
DEBUG - 2014-01-14 09:58:02 --> Model Class Initialized
DEBUG - 2014-01-14 09:58:02 --> Model Class Initialized
DEBUG - 2014-01-14 09:58:02 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-14 09:58:02 --> after session initialization................
INFO  - 2014-01-14 09:58:02 --> after newsleters list has been clicked.................
ERROR - 2014-01-14 09:58:02 --> Severity: Notice  --> Undefined variable: drugcategory C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 115
ERROR - 2014-01-14 09:58:02 --> Severity: Warning  --> array_filter() expects parameter 1 to be array, null given C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 115
ERROR - 2014-01-14 09:58:02 --> Severity: Notice  --> Undefined variable: drugcategory C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 184
ERROR - 2014-01-14 09:58:02 --> Severity: Warning  --> array_filter() expects parameter 1 to be array, null given C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 184
ERROR - 2014-01-14 09:58:02 --> Severity: Notice  --> Undefined variable: drugcategory C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 212
ERROR - 2014-01-14 09:58:02 --> Severity: Warning  --> array_filter() expects parameter 1 to be array, null given C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 212
DEBUG - 2014-01-14 09:58:02 --> File loaded: ../pharmaray-application/views/adminpageforum.php
DEBUG - 2014-01-14 09:58:02 --> Final output sent to browser
DEBUG - 2014-01-14 09:58:02 --> Total execution time: 0.0450
DEBUG - 2014-01-14 09:58:02 --> Config Class Initialized
DEBUG - 2014-01-14 09:58:02 --> Hooks Class Initialized
DEBUG - 2014-01-14 09:58:02 --> Utf8 Class Initialized
DEBUG - 2014-01-14 09:58:02 --> UTF-8 Support Enabled
DEBUG - 2014-01-14 09:58:02 --> URI Class Initialized
DEBUG - 2014-01-14 09:58:02 --> Router Class Initialized
ERROR - 2014-01-14 09:58:02 --> 404 Page Not Found --> css
DEBUG - 2014-01-14 09:58:03 --> Config Class Initialized
DEBUG - 2014-01-14 09:58:03 --> Hooks Class Initialized
DEBUG - 2014-01-14 09:58:03 --> Utf8 Class Initialized
DEBUG - 2014-01-14 09:58:03 --> UTF-8 Support Enabled
DEBUG - 2014-01-14 09:58:03 --> URI Class Initialized
DEBUG - 2014-01-14 09:58:03 --> Router Class Initialized
DEBUG - 2014-01-14 09:58:03 --> Output Class Initialized
DEBUG - 2014-01-14 09:58:03 --> Security Class Initialized
DEBUG - 2014-01-14 09:58:03 --> Input Class Initialized
DEBUG - 2014-01-14 09:58:03 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-14 09:58:03 --> Language Class Initialized
DEBUG - 2014-01-14 09:58:03 --> Loader Class Initialized
DEBUG - 2014-01-14 09:58:03 --> Helper loaded: form_helper
DEBUG - 2014-01-14 09:58:03 --> Helper loaded: url_helper
DEBUG - 2014-01-14 09:58:03 --> Helper loaded: html_helper
DEBUG - 2014-01-14 09:58:03 --> Database Driver Class Initialized
DEBUG - 2014-01-14 09:58:03 --> Session Class Initialized
DEBUG - 2014-01-14 09:58:03 --> Helper loaded: string_helper
DEBUG - 2014-01-14 09:58:03 --> Session routines successfully run
DEBUG - 2014-01-14 09:58:03 --> Form Validation Class Initialized
DEBUG - 2014-01-14 09:58:03 --> Controller Class Initialized
DEBUG - 2014-01-14 09:58:03 --> Model Class Initialized
DEBUG - 2014-01-14 09:58:03 --> Model Class Initialized
DEBUG - 2014-01-14 09:58:03 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-14 09:58:03 --> after session initialization................
INFO  - 2014-01-14 09:58:03 --> after newsleters list has been clicked.................
ERROR - 2014-01-14 09:58:03 --> Severity: Notice  --> Undefined variable: drugcategory C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 115
ERROR - 2014-01-14 09:58:03 --> Severity: Warning  --> array_filter() expects parameter 1 to be array, null given C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 115
ERROR - 2014-01-14 09:58:03 --> Severity: Notice  --> Undefined variable: drugcategory C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 184
ERROR - 2014-01-14 09:58:03 --> Severity: Warning  --> array_filter() expects parameter 1 to be array, null given C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 184
ERROR - 2014-01-14 09:58:03 --> Severity: Notice  --> Undefined variable: drugcategory C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 212
ERROR - 2014-01-14 09:58:03 --> Severity: Warning  --> array_filter() expects parameter 1 to be array, null given C:\xampp\htdocs\Pharmarays\pharmaray-application\views\adminpageforum.php 212
DEBUG - 2014-01-14 09:58:03 --> File loaded: ../pharmaray-application/views/adminpageforum.php
DEBUG - 2014-01-14 09:58:03 --> Final output sent to browser
DEBUG - 2014-01-14 09:58:03 --> Total execution time: 0.0450
DEBUG - 2014-01-14 09:58:03 --> Config Class Initialized
DEBUG - 2014-01-14 09:58:03 --> Hooks Class Initialized
DEBUG - 2014-01-14 09:58:03 --> Utf8 Class Initialized
DEBUG - 2014-01-14 09:58:03 --> UTF-8 Support Enabled
DEBUG - 2014-01-14 09:58:03 --> URI Class Initialized
DEBUG - 2014-01-14 09:58:03 --> Router Class Initialized
ERROR - 2014-01-14 09:58:03 --> 404 Page Not Found --> css
DEBUG - 2014-01-14 09:58:09 --> Config Class Initialized
DEBUG - 2014-01-14 09:58:09 --> Hooks Class Initialized
DEBUG - 2014-01-14 09:58:09 --> Utf8 Class Initialized
DEBUG - 2014-01-14 09:58:09 --> UTF-8 Support Enabled
DEBUG - 2014-01-14 09:58:09 --> URI Class Initialized
DEBUG - 2014-01-14 09:58:09 --> Router Class Initialized
DEBUG - 2014-01-14 09:58:09 --> Output Class Initialized
DEBUG - 2014-01-14 09:58:09 --> Security Class Initialized
DEBUG - 2014-01-14 09:58:09 --> Input Class Initialized
DEBUG - 2014-01-14 09:58:09 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-14 09:58:09 --> Language Class Initialized
DEBUG - 2014-01-14 09:58:09 --> Loader Class Initialized
DEBUG - 2014-01-14 09:58:09 --> Helper loaded: form_helper
DEBUG - 2014-01-14 09:58:09 --> Helper loaded: url_helper
DEBUG - 2014-01-14 09:58:09 --> Helper loaded: html_helper
DEBUG - 2014-01-14 09:58:09 --> Database Driver Class Initialized
DEBUG - 2014-01-14 09:58:09 --> Session Class Initialized
DEBUG - 2014-01-14 09:58:09 --> Helper loaded: string_helper
DEBUG - 2014-01-14 09:58:09 --> Session routines successfully run
DEBUG - 2014-01-14 09:58:09 --> Form Validation Class Initialized
DEBUG - 2014-01-14 09:58:09 --> Controller Class Initialized
DEBUG - 2014-01-14 09:58:09 --> Model Class Initialized
DEBUG - 2014-01-14 09:58:09 --> Model Class Initialized
DEBUG - 2014-01-14 09:58:09 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-14 09:58:09 --> after session initialization................
INFO  - 2014-01-14 09:58:09 --> Inside create forum
INFO  - 2014-01-14 09:58:09 --> The subform is null===---------------------------->null
INFO  - 2014-01-14 09:58:09 --> before inserting into forum.................
INFO  - 2014-01-14 09:58:09 --> after inserting into forum.................19
INFO  - 2014-01-14 09:58:09 --> INSERT INTO `forum` (`name`, `description`, `timecreated`, `forumid_forum`) VALUES ('James bond', 'here', '2014-01-14 09:58:09', 'null')
INFO  - 2014-01-14 09:58:09 --> After creating forum
DEBUG - 2014-01-14 09:58:09 --> Final output sent to browser
DEBUG - 2014-01-14 09:58:09 --> Total execution time: 0.0750
