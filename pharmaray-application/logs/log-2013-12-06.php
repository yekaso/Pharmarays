<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2013-12-06 07:59:06 --> Config Class Initialized
DEBUG - 2013-12-06 07:59:06 --> Hooks Class Initialized
DEBUG - 2013-12-06 07:59:06 --> Utf8 Class Initialized
DEBUG - 2013-12-06 07:59:06 --> UTF-8 Support Enabled
DEBUG - 2013-12-06 07:59:06 --> URI Class Initialized
DEBUG - 2013-12-06 07:59:06 --> Router Class Initialized
DEBUG - 2013-12-06 07:59:06 --> Output Class Initialized
DEBUG - 2013-12-06 07:59:06 --> Security Class Initialized
DEBUG - 2013-12-06 07:59:06 --> Input Class Initialized
DEBUG - 2013-12-06 07:59:06 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-06 07:59:06 --> Language Class Initialized
DEBUG - 2013-12-06 07:59:06 --> Loader Class Initialized
DEBUG - 2013-12-06 07:59:06 --> Helper loaded: form_helper
DEBUG - 2013-12-06 07:59:06 --> Helper loaded: url_helper
DEBUG - 2013-12-06 07:59:06 --> Helper loaded: html_helper
DEBUG - 2013-12-06 07:59:06 --> Database Driver Class Initialized
ERROR - 2013-12-06 07:59:06 --> Severity: Notice  --> mysql_pconnect(): send of 5 bytes failed with errno=10053 An established connection was aborted by the software in your host machine.
 C:\xampp\htdocs\Pharmarays\pharmaray-system\database\drivers\mysql\mysql_driver.php 91
DEBUG - 2013-12-06 07:59:07 --> Session Class Initialized
DEBUG - 2013-12-06 07:59:07 --> Helper loaded: string_helper
DEBUG - 2013-12-06 07:59:07 --> A session cookie was not found.
DEBUG - 2013-12-06 07:59:07 --> Session routines successfully run
DEBUG - 2013-12-06 07:59:07 --> Form Validation Class Initialized
DEBUG - 2013-12-06 07:59:07 --> Controller Class Initialized
DEBUG - 2013-12-06 07:59:07 --> Model Class Initialized
DEBUG - 2013-12-06 07:59:07 --> Model Class Initialized
DEBUG - 2013-12-06 07:59:07 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-06 07:59:07 --> after session initialization................
INFO  - 2013-12-06 07:59:07 --> inside rays login auth.............
DEBUG - 2013-12-06 07:59:07 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-12-06 07:59:07 --> XSS Filtering completed
DEBUG - 2013-12-06 07:59:07 --> XSS Filtering completed
INFO  - 2013-12-06 07:59:07 --> before getting the relation of member............6
INFO  - 2013-12-06 07:59:07 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-12-06 07:59:07 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-06 07:59:07 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-06 07:59:07 --> inside retrieving vacancy for member
INFO  - 2013-12-06 07:59:07 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-12-06 07:59:07 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-06 07:59:07 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-12-06 07:59:07 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-06 07:59:07 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-06 07:59:07 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-06 07:59:07 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-06 07:59:07 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-12-06 07:59:07 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-12-06 07:59:07 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
DEBUG - 2013-12-06 07:59:07 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-12-06 07:59:07 --> Final output sent to browser
DEBUG - 2013-12-06 07:59:07 --> Total execution time: 1.1541
DEBUG - 2013-12-06 07:59:07 --> Config Class Initialized
DEBUG - 2013-12-06 07:59:07 --> Hooks Class Initialized
DEBUG - 2013-12-06 07:59:07 --> Utf8 Class Initialized
DEBUG - 2013-12-06 07:59:07 --> UTF-8 Support Enabled
DEBUG - 2013-12-06 07:59:07 --> URI Class Initialized
DEBUG - 2013-12-06 07:59:07 --> Router Class Initialized
ERROR - 2013-12-06 07:59:07 --> 404 Page Not Found --> css
DEBUG - 2013-12-06 07:59:10 --> Config Class Initialized
DEBUG - 2013-12-06 07:59:10 --> Hooks Class Initialized
DEBUG - 2013-12-06 07:59:10 --> Utf8 Class Initialized
DEBUG - 2013-12-06 07:59:10 --> UTF-8 Support Enabled
DEBUG - 2013-12-06 07:59:10 --> URI Class Initialized
DEBUG - 2013-12-06 07:59:10 --> Router Class Initialized
DEBUG - 2013-12-06 07:59:10 --> Output Class Initialized
DEBUG - 2013-12-06 07:59:10 --> Security Class Initialized
DEBUG - 2013-12-06 07:59:10 --> Input Class Initialized
DEBUG - 2013-12-06 07:59:10 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-06 07:59:10 --> Language Class Initialized
DEBUG - 2013-12-06 07:59:10 --> Loader Class Initialized
DEBUG - 2013-12-06 07:59:10 --> Helper loaded: form_helper
DEBUG - 2013-12-06 07:59:10 --> Helper loaded: url_helper
DEBUG - 2013-12-06 07:59:10 --> Helper loaded: html_helper
DEBUG - 2013-12-06 07:59:10 --> Database Driver Class Initialized
ERROR - 2013-12-06 07:59:10 --> Severity: Notice  --> mysql_pconnect(): send of 5 bytes failed with errno=10053 An established connection was aborted by the software in your host machine.
 C:\xampp\htdocs\Pharmarays\pharmaray-system\database\drivers\mysql\mysql_driver.php 91
DEBUG - 2013-12-06 07:59:11 --> Session Class Initialized
DEBUG - 2013-12-06 07:59:11 --> Helper loaded: string_helper
DEBUG - 2013-12-06 07:59:11 --> Session routines successfully run
DEBUG - 2013-12-06 07:59:11 --> Form Validation Class Initialized
DEBUG - 2013-12-06 07:59:11 --> Controller Class Initialized
DEBUG - 2013-12-06 07:59:11 --> Model Class Initialized
DEBUG - 2013-12-06 07:59:11 --> Model Class Initialized
DEBUG - 2013-12-06 07:59:11 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-06 07:59:11 --> after session initialization................
INFO  - 2013-12-06 07:59:11 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 1 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-06 07:59:11 --> Final output sent to browser
DEBUG - 2013-12-06 07:59:11 --> Total execution time: 1.0621
DEBUG - 2013-12-06 08:00:27 --> Config Class Initialized
DEBUG - 2013-12-06 08:00:27 --> Hooks Class Initialized
DEBUG - 2013-12-06 08:00:27 --> Utf8 Class Initialized
DEBUG - 2013-12-06 08:00:27 --> UTF-8 Support Enabled
DEBUG - 2013-12-06 08:00:27 --> URI Class Initialized
DEBUG - 2013-12-06 08:00:27 --> Router Class Initialized
DEBUG - 2013-12-06 08:00:27 --> Output Class Initialized
DEBUG - 2013-12-06 08:00:27 --> Security Class Initialized
DEBUG - 2013-12-06 08:00:27 --> Input Class Initialized
DEBUG - 2013-12-06 08:00:27 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-06 08:00:27 --> Language Class Initialized
DEBUG - 2013-12-06 08:00:27 --> Loader Class Initialized
DEBUG - 2013-12-06 08:00:27 --> Helper loaded: form_helper
DEBUG - 2013-12-06 08:00:27 --> Helper loaded: url_helper
DEBUG - 2013-12-06 08:00:27 --> Helper loaded: html_helper
DEBUG - 2013-12-06 08:00:27 --> Database Driver Class Initialized
DEBUG - 2013-12-06 08:00:27 --> Session Class Initialized
DEBUG - 2013-12-06 08:00:27 --> Helper loaded: string_helper
DEBUG - 2013-12-06 08:00:27 --> Session routines successfully run
DEBUG - 2013-12-06 08:00:27 --> Form Validation Class Initialized
DEBUG - 2013-12-06 08:00:27 --> Controller Class Initialized
DEBUG - 2013-12-06 08:00:27 --> Model Class Initialized
DEBUG - 2013-12-06 08:00:27 --> Model Class Initialized
DEBUG - 2013-12-06 08:00:27 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-06 08:00:27 --> after session initialization................
INFO  - 2013-12-06 08:00:27 --> inside rays login auth.............
DEBUG - 2013-12-06 08:00:27 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-12-06 08:00:27 --> XSS Filtering completed
DEBUG - 2013-12-06 08:00:27 --> XSS Filtering completed
INFO  - 2013-12-06 08:00:27 --> before getting the relation of member............6
INFO  - 2013-12-06 08:00:27 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-12-06 08:00:27 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-06 08:00:27 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-06 08:00:27 --> inside retrieving vacancy for member
INFO  - 2013-12-06 08:00:27 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-12-06 08:00:27 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-06 08:00:27 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-12-06 08:00:27 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-06 08:00:27 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-06 08:00:27 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-06 08:00:27 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-06 08:00:27 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-12-06 08:00:27 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-12-06 08:00:27 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
DEBUG - 2013-12-06 08:00:27 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-12-06 08:00:27 --> Final output sent to browser
DEBUG - 2013-12-06 08:00:27 --> Total execution time: 0.0860
DEBUG - 2013-12-06 08:00:27 --> Config Class Initialized
DEBUG - 2013-12-06 08:00:27 --> Hooks Class Initialized
DEBUG - 2013-12-06 08:00:27 --> Utf8 Class Initialized
DEBUG - 2013-12-06 08:00:27 --> UTF-8 Support Enabled
DEBUG - 2013-12-06 08:00:27 --> URI Class Initialized
DEBUG - 2013-12-06 08:00:27 --> Router Class Initialized
ERROR - 2013-12-06 08:00:27 --> 404 Page Not Found --> css
DEBUG - 2013-12-06 08:00:30 --> Config Class Initialized
DEBUG - 2013-12-06 08:00:30 --> Hooks Class Initialized
DEBUG - 2013-12-06 08:00:30 --> Utf8 Class Initialized
DEBUG - 2013-12-06 08:00:30 --> UTF-8 Support Enabled
DEBUG - 2013-12-06 08:00:30 --> URI Class Initialized
DEBUG - 2013-12-06 08:00:30 --> Router Class Initialized
DEBUG - 2013-12-06 08:00:30 --> Output Class Initialized
DEBUG - 2013-12-06 08:00:30 --> Security Class Initialized
DEBUG - 2013-12-06 08:00:30 --> Input Class Initialized
DEBUG - 2013-12-06 08:00:30 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-06 08:00:30 --> Language Class Initialized
DEBUG - 2013-12-06 08:00:30 --> Loader Class Initialized
DEBUG - 2013-12-06 08:00:30 --> Helper loaded: form_helper
DEBUG - 2013-12-06 08:00:30 --> Helper loaded: url_helper
DEBUG - 2013-12-06 08:00:30 --> Helper loaded: html_helper
DEBUG - 2013-12-06 08:00:30 --> Database Driver Class Initialized
ERROR - 2013-12-06 08:00:30 --> Severity: Notice  --> mysql_pconnect(): send of 5 bytes failed with errno=10053 An established connection was aborted by the software in your host machine.
 C:\xampp\htdocs\Pharmarays\pharmaray-system\database\drivers\mysql\mysql_driver.php 91
DEBUG - 2013-12-06 08:00:31 --> Session Class Initialized
DEBUG - 2013-12-06 08:00:31 --> Helper loaded: string_helper
DEBUG - 2013-12-06 08:00:31 --> Session routines successfully run
DEBUG - 2013-12-06 08:00:31 --> Form Validation Class Initialized
DEBUG - 2013-12-06 08:00:31 --> Controller Class Initialized
DEBUG - 2013-12-06 08:00:31 --> Model Class Initialized
DEBUG - 2013-12-06 08:00:31 --> Model Class Initialized
DEBUG - 2013-12-06 08:00:31 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-06 08:00:31 --> after session initialization................
INFO  - 2013-12-06 08:00:31 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 1 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-06 08:00:31 --> Final output sent to browser
DEBUG - 2013-12-06 08:00:31 --> Total execution time: 1.0531
DEBUG - 2013-12-06 08:02:59 --> Config Class Initialized
DEBUG - 2013-12-06 08:02:59 --> Hooks Class Initialized
DEBUG - 2013-12-06 08:02:59 --> Utf8 Class Initialized
DEBUG - 2013-12-06 08:02:59 --> UTF-8 Support Enabled
DEBUG - 2013-12-06 08:02:59 --> URI Class Initialized
DEBUG - 2013-12-06 08:02:59 --> Router Class Initialized
DEBUG - 2013-12-06 08:02:59 --> Output Class Initialized
DEBUG - 2013-12-06 08:02:59 --> Security Class Initialized
DEBUG - 2013-12-06 08:02:59 --> Input Class Initialized
DEBUG - 2013-12-06 08:02:59 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-06 08:02:59 --> Language Class Initialized
DEBUG - 2013-12-06 08:02:59 --> Loader Class Initialized
DEBUG - 2013-12-06 08:02:59 --> Helper loaded: form_helper
DEBUG - 2013-12-06 08:02:59 --> Helper loaded: url_helper
DEBUG - 2013-12-06 08:02:59 --> Helper loaded: html_helper
DEBUG - 2013-12-06 08:02:59 --> Database Driver Class Initialized
DEBUG - 2013-12-06 08:02:59 --> Session Class Initialized
DEBUG - 2013-12-06 08:02:59 --> Helper loaded: string_helper
DEBUG - 2013-12-06 08:02:59 --> Session routines successfully run
DEBUG - 2013-12-06 08:02:59 --> Form Validation Class Initialized
DEBUG - 2013-12-06 08:02:59 --> Controller Class Initialized
DEBUG - 2013-12-06 08:02:59 --> Model Class Initialized
DEBUG - 2013-12-06 08:02:59 --> Model Class Initialized
DEBUG - 2013-12-06 08:02:59 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-06 08:02:59 --> after session initialization................
INFO  - 2013-12-06 08:02:59 --> inside rays login auth.............
DEBUG - 2013-12-06 08:02:59 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-12-06 08:02:59 --> XSS Filtering completed
DEBUG - 2013-12-06 08:02:59 --> XSS Filtering completed
INFO  - 2013-12-06 08:02:59 --> before getting the relation of member............6
INFO  - 2013-12-06 08:02:59 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-12-06 08:02:59 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-06 08:02:59 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-06 08:02:59 --> inside retrieving vacancy for member
INFO  - 2013-12-06 08:02:59 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-12-06 08:02:59 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-06 08:02:59 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-12-06 08:02:59 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-06 08:02:59 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-06 08:02:59 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-06 08:02:59 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-06 08:02:59 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-12-06 08:02:59 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-12-06 08:02:59 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
DEBUG - 2013-12-06 08:02:59 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-12-06 08:02:59 --> Final output sent to browser
DEBUG - 2013-12-06 08:02:59 --> Total execution time: 0.0800
DEBUG - 2013-12-06 08:02:59 --> Config Class Initialized
DEBUG - 2013-12-06 08:02:59 --> Hooks Class Initialized
DEBUG - 2013-12-06 08:02:59 --> Utf8 Class Initialized
DEBUG - 2013-12-06 08:02:59 --> UTF-8 Support Enabled
DEBUG - 2013-12-06 08:02:59 --> URI Class Initialized
DEBUG - 2013-12-06 08:02:59 --> Router Class Initialized
ERROR - 2013-12-06 08:02:59 --> 404 Page Not Found --> css
DEBUG - 2013-12-06 08:03:01 --> Config Class Initialized
DEBUG - 2013-12-06 08:03:01 --> Hooks Class Initialized
DEBUG - 2013-12-06 08:03:01 --> Utf8 Class Initialized
DEBUG - 2013-12-06 08:03:01 --> UTF-8 Support Enabled
DEBUG - 2013-12-06 08:03:01 --> URI Class Initialized
DEBUG - 2013-12-06 08:03:01 --> Router Class Initialized
DEBUG - 2013-12-06 08:03:01 --> Output Class Initialized
DEBUG - 2013-12-06 08:03:01 --> Security Class Initialized
DEBUG - 2013-12-06 08:03:01 --> Input Class Initialized
DEBUG - 2013-12-06 08:03:01 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-06 08:03:01 --> Language Class Initialized
DEBUG - 2013-12-06 08:03:01 --> Loader Class Initialized
DEBUG - 2013-12-06 08:03:01 --> Helper loaded: form_helper
DEBUG - 2013-12-06 08:03:01 --> Helper loaded: url_helper
DEBUG - 2013-12-06 08:03:01 --> Helper loaded: html_helper
DEBUG - 2013-12-06 08:03:01 --> Database Driver Class Initialized
DEBUG - 2013-12-06 08:03:01 --> Session Class Initialized
DEBUG - 2013-12-06 08:03:01 --> Helper loaded: string_helper
DEBUG - 2013-12-06 08:03:01 --> Session routines successfully run
DEBUG - 2013-12-06 08:03:01 --> Form Validation Class Initialized
DEBUG - 2013-12-06 08:03:01 --> Controller Class Initialized
DEBUG - 2013-12-06 08:03:01 --> Model Class Initialized
DEBUG - 2013-12-06 08:03:01 --> Model Class Initialized
DEBUG - 2013-12-06 08:03:01 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-06 08:03:01 --> after session initialization................
INFO  - 2013-12-06 08:03:01 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 1 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-06 08:03:01 --> Final output sent to browser
DEBUG - 2013-12-06 08:03:01 --> Total execution time: 0.0540
DEBUG - 2013-12-06 08:03:32 --> Config Class Initialized
DEBUG - 2013-12-06 08:03:32 --> Hooks Class Initialized
DEBUG - 2013-12-06 08:03:32 --> Utf8 Class Initialized
DEBUG - 2013-12-06 08:03:32 --> UTF-8 Support Enabled
DEBUG - 2013-12-06 08:03:32 --> URI Class Initialized
DEBUG - 2013-12-06 08:03:32 --> Router Class Initialized
DEBUG - 2013-12-06 08:03:32 --> Output Class Initialized
DEBUG - 2013-12-06 08:03:32 --> Security Class Initialized
DEBUG - 2013-12-06 08:03:32 --> Input Class Initialized
DEBUG - 2013-12-06 08:03:32 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-06 08:03:32 --> Language Class Initialized
DEBUG - 2013-12-06 08:03:32 --> Loader Class Initialized
DEBUG - 2013-12-06 08:03:32 --> Helper loaded: form_helper
DEBUG - 2013-12-06 08:03:32 --> Helper loaded: url_helper
DEBUG - 2013-12-06 08:03:32 --> Helper loaded: html_helper
DEBUG - 2013-12-06 08:03:32 --> Database Driver Class Initialized
DEBUG - 2013-12-06 08:03:32 --> Session Class Initialized
DEBUG - 2013-12-06 08:03:32 --> Helper loaded: string_helper
DEBUG - 2013-12-06 08:03:32 --> Session routines successfully run
DEBUG - 2013-12-06 08:03:32 --> Form Validation Class Initialized
DEBUG - 2013-12-06 08:03:32 --> Controller Class Initialized
DEBUG - 2013-12-06 08:03:32 --> Model Class Initialized
DEBUG - 2013-12-06 08:03:32 --> Model Class Initialized
DEBUG - 2013-12-06 08:03:32 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-06 08:03:32 --> after session initialization................
INFO  - 2013-12-06 08:03:32 --> inside rays login auth.............
DEBUG - 2013-12-06 08:03:32 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-12-06 08:03:32 --> XSS Filtering completed
DEBUG - 2013-12-06 08:03:32 --> XSS Filtering completed
INFO  - 2013-12-06 08:03:32 --> before getting the relation of member............6
INFO  - 2013-12-06 08:03:32 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-12-06 08:03:32 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-06 08:03:32 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-06 08:03:32 --> inside retrieving vacancy for member
INFO  - 2013-12-06 08:03:32 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-12-06 08:03:32 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-06 08:03:32 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-12-06 08:03:32 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-06 08:03:32 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-06 08:03:32 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-06 08:03:32 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-06 08:03:32 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-12-06 08:03:32 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-12-06 08:03:32 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
DEBUG - 2013-12-06 08:03:32 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-12-06 08:03:32 --> Final output sent to browser
DEBUG - 2013-12-06 08:03:32 --> Total execution time: 0.0850
DEBUG - 2013-12-06 08:03:32 --> Config Class Initialized
DEBUG - 2013-12-06 08:03:32 --> Hooks Class Initialized
DEBUG - 2013-12-06 08:03:32 --> Utf8 Class Initialized
DEBUG - 2013-12-06 08:03:32 --> UTF-8 Support Enabled
DEBUG - 2013-12-06 08:03:32 --> URI Class Initialized
DEBUG - 2013-12-06 08:03:32 --> Router Class Initialized
ERROR - 2013-12-06 08:03:32 --> 404 Page Not Found --> css
DEBUG - 2013-12-06 08:03:35 --> Config Class Initialized
DEBUG - 2013-12-06 08:03:35 --> Hooks Class Initialized
DEBUG - 2013-12-06 08:03:35 --> Utf8 Class Initialized
DEBUG - 2013-12-06 08:03:35 --> UTF-8 Support Enabled
DEBUG - 2013-12-06 08:03:35 --> URI Class Initialized
DEBUG - 2013-12-06 08:03:35 --> Router Class Initialized
DEBUG - 2013-12-06 08:03:35 --> Output Class Initialized
DEBUG - 2013-12-06 08:03:35 --> Security Class Initialized
DEBUG - 2013-12-06 08:03:35 --> Input Class Initialized
DEBUG - 2013-12-06 08:03:35 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-06 08:03:35 --> Language Class Initialized
DEBUG - 2013-12-06 08:03:35 --> Loader Class Initialized
DEBUG - 2013-12-06 08:03:35 --> Helper loaded: form_helper
DEBUG - 2013-12-06 08:03:35 --> Helper loaded: url_helper
DEBUG - 2013-12-06 08:03:35 --> Helper loaded: html_helper
DEBUG - 2013-12-06 08:03:35 --> Database Driver Class Initialized
DEBUG - 2013-12-06 08:03:35 --> Session Class Initialized
DEBUG - 2013-12-06 08:03:35 --> Helper loaded: string_helper
DEBUG - 2013-12-06 08:03:35 --> Session routines successfully run
DEBUG - 2013-12-06 08:03:35 --> Form Validation Class Initialized
DEBUG - 2013-12-06 08:03:35 --> Controller Class Initialized
DEBUG - 2013-12-06 08:03:35 --> Model Class Initialized
DEBUG - 2013-12-06 08:03:35 --> Model Class Initialized
DEBUG - 2013-12-06 08:03:35 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-06 08:03:35 --> after session initialization................
INFO  - 2013-12-06 08:03:35 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 1 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-06 08:03:35 --> Final output sent to browser
DEBUG - 2013-12-06 08:03:35 --> Total execution time: 0.0460
DEBUG - 2013-12-06 08:05:04 --> Config Class Initialized
DEBUG - 2013-12-06 08:05:04 --> Hooks Class Initialized
DEBUG - 2013-12-06 08:05:04 --> Utf8 Class Initialized
DEBUG - 2013-12-06 08:05:04 --> UTF-8 Support Enabled
DEBUG - 2013-12-06 08:05:04 --> URI Class Initialized
DEBUG - 2013-12-06 08:05:04 --> Router Class Initialized
DEBUG - 2013-12-06 08:05:04 --> Output Class Initialized
DEBUG - 2013-12-06 08:05:04 --> Security Class Initialized
DEBUG - 2013-12-06 08:05:04 --> Input Class Initialized
DEBUG - 2013-12-06 08:05:04 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-06 08:05:04 --> Language Class Initialized
DEBUG - 2013-12-06 08:05:04 --> Loader Class Initialized
DEBUG - 2013-12-06 08:05:04 --> Helper loaded: form_helper
DEBUG - 2013-12-06 08:05:04 --> Helper loaded: url_helper
DEBUG - 2013-12-06 08:05:04 --> Helper loaded: html_helper
DEBUG - 2013-12-06 08:05:04 --> Database Driver Class Initialized
DEBUG - 2013-12-06 08:05:04 --> Session Class Initialized
DEBUG - 2013-12-06 08:05:04 --> Helper loaded: string_helper
DEBUG - 2013-12-06 08:05:04 --> Session routines successfully run
DEBUG - 2013-12-06 08:05:04 --> Form Validation Class Initialized
DEBUG - 2013-12-06 08:05:04 --> Controller Class Initialized
DEBUG - 2013-12-06 08:05:04 --> Model Class Initialized
DEBUG - 2013-12-06 08:05:04 --> Model Class Initialized
DEBUG - 2013-12-06 08:05:04 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-06 08:05:04 --> after session initialization................
INFO  - 2013-12-06 08:05:04 --> inside rays login auth.............
DEBUG - 2013-12-06 08:05:04 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-12-06 08:05:04 --> XSS Filtering completed
DEBUG - 2013-12-06 08:05:04 --> XSS Filtering completed
INFO  - 2013-12-06 08:05:04 --> before getting the relation of member............6
INFO  - 2013-12-06 08:05:04 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-12-06 08:05:04 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-06 08:05:04 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-06 08:05:04 --> inside retrieving vacancy for member
INFO  - 2013-12-06 08:05:04 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-12-06 08:05:04 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-06 08:05:04 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-12-06 08:05:04 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-06 08:05:04 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-06 08:05:04 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-06 08:05:04 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-06 08:05:04 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-12-06 08:05:04 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-12-06 08:05:04 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
DEBUG - 2013-12-06 08:05:04 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-12-06 08:05:04 --> Final output sent to browser
DEBUG - 2013-12-06 08:05:04 --> Total execution time: 0.0740
DEBUG - 2013-12-06 08:05:04 --> Config Class Initialized
DEBUG - 2013-12-06 08:05:04 --> Hooks Class Initialized
DEBUG - 2013-12-06 08:05:04 --> Utf8 Class Initialized
DEBUG - 2013-12-06 08:05:04 --> UTF-8 Support Enabled
DEBUG - 2013-12-06 08:05:04 --> URI Class Initialized
DEBUG - 2013-12-06 08:05:04 --> Router Class Initialized
ERROR - 2013-12-06 08:05:04 --> 404 Page Not Found --> css
DEBUG - 2013-12-06 08:05:16 --> Config Class Initialized
DEBUG - 2013-12-06 08:05:16 --> Hooks Class Initialized
DEBUG - 2013-12-06 08:05:16 --> Utf8 Class Initialized
DEBUG - 2013-12-06 08:05:16 --> UTF-8 Support Enabled
DEBUG - 2013-12-06 08:05:16 --> URI Class Initialized
DEBUG - 2013-12-06 08:05:16 --> Router Class Initialized
DEBUG - 2013-12-06 08:05:16 --> Output Class Initialized
DEBUG - 2013-12-06 08:05:16 --> Security Class Initialized
DEBUG - 2013-12-06 08:05:16 --> Input Class Initialized
DEBUG - 2013-12-06 08:05:16 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-06 08:05:16 --> Language Class Initialized
DEBUG - 2013-12-06 08:05:16 --> Loader Class Initialized
DEBUG - 2013-12-06 08:05:16 --> Helper loaded: form_helper
DEBUG - 2013-12-06 08:05:16 --> Helper loaded: url_helper
DEBUG - 2013-12-06 08:05:16 --> Helper loaded: html_helper
DEBUG - 2013-12-06 08:05:16 --> Database Driver Class Initialized
ERROR - 2013-12-06 08:05:16 --> Severity: Notice  --> mysql_pconnect(): send of 5 bytes failed with errno=10053 An established connection was aborted by the software in your host machine.
 C:\xampp\htdocs\Pharmarays\pharmaray-system\database\drivers\mysql\mysql_driver.php 91
DEBUG - 2013-12-06 08:05:17 --> Session Class Initialized
DEBUG - 2013-12-06 08:05:17 --> Helper loaded: string_helper
DEBUG - 2013-12-06 08:05:17 --> Session routines successfully run
DEBUG - 2013-12-06 08:05:17 --> Form Validation Class Initialized
DEBUG - 2013-12-06 08:05:17 --> Controller Class Initialized
DEBUG - 2013-12-06 08:05:17 --> Model Class Initialized
DEBUG - 2013-12-06 08:05:17 --> Model Class Initialized
DEBUG - 2013-12-06 08:05:17 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-06 08:05:17 --> after session initialization................
INFO  - 2013-12-06 08:05:17 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 1 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-06 08:05:17 --> Final output sent to browser
DEBUG - 2013-12-06 08:05:17 --> Total execution time: 1.0631
DEBUG - 2013-12-06 08:06:32 --> Config Class Initialized
DEBUG - 2013-12-06 08:06:32 --> Hooks Class Initialized
DEBUG - 2013-12-06 08:06:32 --> Utf8 Class Initialized
DEBUG - 2013-12-06 08:06:32 --> UTF-8 Support Enabled
DEBUG - 2013-12-06 08:06:32 --> URI Class Initialized
DEBUG - 2013-12-06 08:06:32 --> Router Class Initialized
DEBUG - 2013-12-06 08:06:32 --> Output Class Initialized
DEBUG - 2013-12-06 08:06:32 --> Security Class Initialized
DEBUG - 2013-12-06 08:06:32 --> Input Class Initialized
DEBUG - 2013-12-06 08:06:32 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-06 08:06:32 --> Language Class Initialized
DEBUG - 2013-12-06 08:06:32 --> Loader Class Initialized
DEBUG - 2013-12-06 08:06:32 --> Helper loaded: form_helper
DEBUG - 2013-12-06 08:06:32 --> Helper loaded: url_helper
DEBUG - 2013-12-06 08:06:32 --> Helper loaded: html_helper
DEBUG - 2013-12-06 08:06:32 --> Database Driver Class Initialized
DEBUG - 2013-12-06 08:06:32 --> Session Class Initialized
DEBUG - 2013-12-06 08:06:32 --> Helper loaded: string_helper
DEBUG - 2013-12-06 08:06:32 --> Session routines successfully run
DEBUG - 2013-12-06 08:06:32 --> Form Validation Class Initialized
DEBUG - 2013-12-06 08:06:32 --> Controller Class Initialized
DEBUG - 2013-12-06 08:06:32 --> Model Class Initialized
DEBUG - 2013-12-06 08:06:32 --> Model Class Initialized
DEBUG - 2013-12-06 08:06:32 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-06 08:06:32 --> after session initialization................
INFO  - 2013-12-06 08:06:32 --> inside rays login auth.............
DEBUG - 2013-12-06 08:06:32 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-12-06 08:06:32 --> XSS Filtering completed
DEBUG - 2013-12-06 08:06:32 --> XSS Filtering completed
INFO  - 2013-12-06 08:06:32 --> before getting the relation of member............6
INFO  - 2013-12-06 08:06:32 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-12-06 08:06:32 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-06 08:06:32 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-06 08:06:32 --> inside retrieving vacancy for member
INFO  - 2013-12-06 08:06:32 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-12-06 08:06:32 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-06 08:06:32 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-12-06 08:06:32 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-06 08:06:32 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-06 08:06:32 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-06 08:06:32 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-06 08:06:32 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-12-06 08:06:32 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-12-06 08:06:32 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
DEBUG - 2013-12-06 08:06:32 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-12-06 08:06:32 --> Final output sent to browser
DEBUG - 2013-12-06 08:06:32 --> Total execution time: 0.0820
DEBUG - 2013-12-06 08:06:32 --> Config Class Initialized
DEBUG - 2013-12-06 08:06:32 --> Hooks Class Initialized
DEBUG - 2013-12-06 08:06:32 --> Utf8 Class Initialized
DEBUG - 2013-12-06 08:06:32 --> UTF-8 Support Enabled
DEBUG - 2013-12-06 08:06:32 --> URI Class Initialized
DEBUG - 2013-12-06 08:06:32 --> Router Class Initialized
ERROR - 2013-12-06 08:06:32 --> 404 Page Not Found --> css
DEBUG - 2013-12-06 08:06:34 --> Config Class Initialized
DEBUG - 2013-12-06 08:06:34 --> Hooks Class Initialized
DEBUG - 2013-12-06 08:06:34 --> Utf8 Class Initialized
DEBUG - 2013-12-06 08:06:34 --> UTF-8 Support Enabled
DEBUG - 2013-12-06 08:06:34 --> URI Class Initialized
DEBUG - 2013-12-06 08:06:34 --> Router Class Initialized
DEBUG - 2013-12-06 08:06:34 --> Output Class Initialized
DEBUG - 2013-12-06 08:06:34 --> Security Class Initialized
DEBUG - 2013-12-06 08:06:34 --> Input Class Initialized
DEBUG - 2013-12-06 08:06:34 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-06 08:06:34 --> Language Class Initialized
DEBUG - 2013-12-06 08:06:34 --> Loader Class Initialized
DEBUG - 2013-12-06 08:06:34 --> Helper loaded: form_helper
DEBUG - 2013-12-06 08:06:34 --> Helper loaded: url_helper
DEBUG - 2013-12-06 08:06:34 --> Helper loaded: html_helper
DEBUG - 2013-12-06 08:06:34 --> Database Driver Class Initialized
DEBUG - 2013-12-06 08:06:34 --> Session Class Initialized
DEBUG - 2013-12-06 08:06:34 --> Helper loaded: string_helper
DEBUG - 2013-12-06 08:06:34 --> Session routines successfully run
DEBUG - 2013-12-06 08:06:34 --> Form Validation Class Initialized
DEBUG - 2013-12-06 08:06:34 --> Controller Class Initialized
DEBUG - 2013-12-06 08:06:34 --> Model Class Initialized
DEBUG - 2013-12-06 08:06:34 --> Model Class Initialized
DEBUG - 2013-12-06 08:06:34 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-06 08:06:34 --> after session initialization................
INFO  - 2013-12-06 08:06:34 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 1 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-06 08:06:34 --> Final output sent to browser
DEBUG - 2013-12-06 08:06:34 --> Total execution time: 0.0590
DEBUG - 2013-12-06 13:04:46 --> Config Class Initialized
DEBUG - 2013-12-06 13:04:46 --> Hooks Class Initialized
DEBUG - 2013-12-06 13:04:46 --> Utf8 Class Initialized
DEBUG - 2013-12-06 13:04:46 --> UTF-8 Support Enabled
DEBUG - 2013-12-06 13:04:46 --> URI Class Initialized
DEBUG - 2013-12-06 13:04:46 --> Router Class Initialized
DEBUG - 2013-12-06 13:04:46 --> Output Class Initialized
DEBUG - 2013-12-06 13:04:46 --> Security Class Initialized
DEBUG - 2013-12-06 13:04:46 --> Input Class Initialized
DEBUG - 2013-12-06 13:04:46 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-06 13:04:46 --> Language Class Initialized
DEBUG - 2013-12-06 13:04:46 --> Loader Class Initialized
DEBUG - 2013-12-06 13:04:46 --> Helper loaded: form_helper
DEBUG - 2013-12-06 13:04:46 --> Helper loaded: url_helper
DEBUG - 2013-12-06 13:04:46 --> Helper loaded: html_helper
DEBUG - 2013-12-06 13:04:46 --> Database Driver Class Initialized
DEBUG - 2013-12-06 13:04:46 --> Session Class Initialized
DEBUG - 2013-12-06 13:04:46 --> Helper loaded: string_helper
DEBUG - 2013-12-06 13:04:46 --> A session cookie was not found.
DEBUG - 2013-12-06 13:04:46 --> Session routines successfully run
DEBUG - 2013-12-06 13:04:46 --> Form Validation Class Initialized
DEBUG - 2013-12-06 13:04:46 --> Controller Class Initialized
DEBUG - 2013-12-06 13:04:46 --> Model Class Initialized
DEBUG - 2013-12-06 13:04:46 --> Model Class Initialized
DEBUG - 2013-12-06 13:04:46 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-06 13:04:46 --> after session initialization................
INFO  - 2013-12-06 13:04:46 --> inside rays login auth.............
DEBUG - 2013-12-06 13:04:46 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-12-06 13:04:46 --> XSS Filtering completed
DEBUG - 2013-12-06 13:04:46 --> XSS Filtering completed
INFO  - 2013-12-06 13:04:46 --> before getting the relation of member............6
INFO  - 2013-12-06 13:04:46 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-12-06 13:04:46 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-06 13:04:46 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-06 13:04:46 --> inside retrieving vacancy for member
INFO  - 2013-12-06 13:04:46 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-12-06 13:04:46 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-06 13:04:46 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-12-06 13:04:46 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-06 13:04:46 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-06 13:04:46 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-06 13:04:46 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-06 13:04:46 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-12-06 13:04:46 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-12-06 13:04:46 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
DEBUG - 2013-12-06 13:04:46 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-12-06 13:04:46 --> Final output sent to browser
DEBUG - 2013-12-06 13:04:46 --> Total execution time: 0.2580
DEBUG - 2013-12-06 13:04:47 --> Config Class Initialized
DEBUG - 2013-12-06 13:04:47 --> Hooks Class Initialized
DEBUG - 2013-12-06 13:04:47 --> Utf8 Class Initialized
DEBUG - 2013-12-06 13:04:47 --> UTF-8 Support Enabled
DEBUG - 2013-12-06 13:04:47 --> URI Class Initialized
DEBUG - 2013-12-06 13:04:47 --> Router Class Initialized
ERROR - 2013-12-06 13:04:47 --> 404 Page Not Found --> css
DEBUG - 2013-12-06 13:05:01 --> Config Class Initialized
DEBUG - 2013-12-06 13:05:01 --> Hooks Class Initialized
DEBUG - 2013-12-06 13:05:01 --> Utf8 Class Initialized
DEBUG - 2013-12-06 13:05:01 --> UTF-8 Support Enabled
DEBUG - 2013-12-06 13:05:01 --> URI Class Initialized
DEBUG - 2013-12-06 13:05:01 --> Router Class Initialized
DEBUG - 2013-12-06 13:05:01 --> Output Class Initialized
DEBUG - 2013-12-06 13:05:01 --> Security Class Initialized
DEBUG - 2013-12-06 13:05:01 --> Input Class Initialized
DEBUG - 2013-12-06 13:05:01 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-06 13:05:01 --> Language Class Initialized
DEBUG - 2013-12-06 13:05:01 --> Loader Class Initialized
DEBUG - 2013-12-06 13:05:01 --> Helper loaded: form_helper
DEBUG - 2013-12-06 13:05:01 --> Helper loaded: url_helper
DEBUG - 2013-12-06 13:05:01 --> Helper loaded: html_helper
DEBUG - 2013-12-06 13:05:01 --> Database Driver Class Initialized
ERROR - 2013-12-06 13:05:01 --> Severity: Notice  --> mysql_pconnect(): send of 5 bytes failed with errno=10053 An established connection was aborted by the software in your host machine.
 C:\xampp\htdocs\Pharmarays\pharmaray-system\database\drivers\mysql\mysql_driver.php 91
DEBUG - 2013-12-06 13:05:02 --> Session Class Initialized
DEBUG - 2013-12-06 13:05:02 --> Helper loaded: string_helper
DEBUG - 2013-12-06 13:05:02 --> Session routines successfully run
DEBUG - 2013-12-06 13:05:02 --> Form Validation Class Initialized
DEBUG - 2013-12-06 13:05:02 --> Controller Class Initialized
DEBUG - 2013-12-06 13:05:02 --> Model Class Initialized
DEBUG - 2013-12-06 13:05:02 --> Model Class Initialized
DEBUG - 2013-12-06 13:05:02 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-06 13:05:02 --> after session initialization................
INFO  - 2013-12-06 13:05:02 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 1 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-06 13:05:02 --> Final output sent to browser
DEBUG - 2013-12-06 13:05:02 --> Total execution time: 1.2711
DEBUG - 2013-12-06 13:06:55 --> Config Class Initialized
DEBUG - 2013-12-06 13:06:55 --> Hooks Class Initialized
DEBUG - 2013-12-06 13:06:55 --> Utf8 Class Initialized
DEBUG - 2013-12-06 13:06:55 --> UTF-8 Support Enabled
DEBUG - 2013-12-06 13:06:55 --> URI Class Initialized
DEBUG - 2013-12-06 13:06:55 --> Router Class Initialized
DEBUG - 2013-12-06 13:06:55 --> Output Class Initialized
DEBUG - 2013-12-06 13:06:55 --> Security Class Initialized
DEBUG - 2013-12-06 13:06:55 --> Input Class Initialized
DEBUG - 2013-12-06 13:06:55 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-06 13:06:55 --> Language Class Initialized
DEBUG - 2013-12-06 13:06:55 --> Loader Class Initialized
DEBUG - 2013-12-06 13:06:55 --> Helper loaded: form_helper
DEBUG - 2013-12-06 13:06:55 --> Helper loaded: url_helper
DEBUG - 2013-12-06 13:06:55 --> Helper loaded: html_helper
DEBUG - 2013-12-06 13:06:55 --> Database Driver Class Initialized
DEBUG - 2013-12-06 13:06:55 --> Session Class Initialized
DEBUG - 2013-12-06 13:06:55 --> Helper loaded: string_helper
DEBUG - 2013-12-06 13:06:55 --> Session routines successfully run
DEBUG - 2013-12-06 13:06:55 --> Form Validation Class Initialized
DEBUG - 2013-12-06 13:06:55 --> Controller Class Initialized
DEBUG - 2013-12-06 13:06:55 --> Model Class Initialized
DEBUG - 2013-12-06 13:06:55 --> Model Class Initialized
DEBUG - 2013-12-06 13:06:55 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-06 13:06:55 --> after session initialization................
INFO  - 2013-12-06 13:06:55 --> inside rays login auth.............
DEBUG - 2013-12-06 13:06:55 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-12-06 13:06:55 --> XSS Filtering completed
DEBUG - 2013-12-06 13:06:55 --> XSS Filtering completed
INFO  - 2013-12-06 13:06:55 --> before getting the relation of member............6
INFO  - 2013-12-06 13:06:55 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-12-06 13:06:55 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-06 13:06:55 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-06 13:06:55 --> inside retrieving vacancy for member
INFO  - 2013-12-06 13:06:55 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-12-06 13:06:55 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-06 13:06:55 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-12-06 13:06:55 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-06 13:06:55 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-06 13:06:55 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-06 13:06:55 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-06 13:06:55 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-12-06 13:06:55 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-12-06 13:06:55 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
DEBUG - 2013-12-06 13:06:55 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-12-06 13:06:55 --> Final output sent to browser
DEBUG - 2013-12-06 13:06:55 --> Total execution time: 0.1710
DEBUG - 2013-12-06 13:06:55 --> Config Class Initialized
DEBUG - 2013-12-06 13:06:55 --> Hooks Class Initialized
DEBUG - 2013-12-06 13:06:55 --> Utf8 Class Initialized
DEBUG - 2013-12-06 13:06:55 --> UTF-8 Support Enabled
DEBUG - 2013-12-06 13:06:55 --> URI Class Initialized
DEBUG - 2013-12-06 13:06:55 --> Router Class Initialized
ERROR - 2013-12-06 13:06:55 --> 404 Page Not Found --> css
DEBUG - 2013-12-06 13:07:30 --> Config Class Initialized
DEBUG - 2013-12-06 13:07:30 --> Hooks Class Initialized
DEBUG - 2013-12-06 13:07:30 --> Utf8 Class Initialized
DEBUG - 2013-12-06 13:07:30 --> UTF-8 Support Enabled
DEBUG - 2013-12-06 13:07:30 --> URI Class Initialized
DEBUG - 2013-12-06 13:07:30 --> Router Class Initialized
DEBUG - 2013-12-06 13:07:30 --> Output Class Initialized
DEBUG - 2013-12-06 13:07:30 --> Security Class Initialized
DEBUG - 2013-12-06 13:07:30 --> Input Class Initialized
DEBUG - 2013-12-06 13:07:30 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-06 13:07:30 --> Language Class Initialized
DEBUG - 2013-12-06 13:07:30 --> Loader Class Initialized
DEBUG - 2013-12-06 13:07:30 --> Helper loaded: form_helper
DEBUG - 2013-12-06 13:07:30 --> Helper loaded: url_helper
DEBUG - 2013-12-06 13:07:30 --> Helper loaded: html_helper
DEBUG - 2013-12-06 13:07:30 --> Database Driver Class Initialized
ERROR - 2013-12-06 13:07:30 --> Severity: Notice  --> mysql_pconnect(): send of 5 bytes failed with errno=10053 An established connection was aborted by the software in your host machine.
 C:\xampp\htdocs\Pharmarays\pharmaray-system\database\drivers\mysql\mysql_driver.php 91
DEBUG - 2013-12-06 13:07:31 --> Session Class Initialized
DEBUG - 2013-12-06 13:07:31 --> Helper loaded: string_helper
DEBUG - 2013-12-06 13:07:31 --> Session routines successfully run
DEBUG - 2013-12-06 13:07:31 --> Form Validation Class Initialized
DEBUG - 2013-12-06 13:07:31 --> Controller Class Initialized
DEBUG - 2013-12-06 13:07:31 --> Model Class Initialized
DEBUG - 2013-12-06 13:07:31 --> Model Class Initialized
DEBUG - 2013-12-06 13:07:31 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-06 13:07:31 --> after session initialization................
INFO  - 2013-12-06 13:07:31 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 1 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-06 13:07:31 --> Final output sent to browser
DEBUG - 2013-12-06 13:07:31 --> Total execution time: 1.1171
DEBUG - 2013-12-06 13:07:36 --> Config Class Initialized
DEBUG - 2013-12-06 13:07:36 --> Hooks Class Initialized
DEBUG - 2013-12-06 13:07:36 --> Utf8 Class Initialized
DEBUG - 2013-12-06 13:07:36 --> UTF-8 Support Enabled
DEBUG - 2013-12-06 13:07:36 --> URI Class Initialized
DEBUG - 2013-12-06 13:07:36 --> Router Class Initialized
DEBUG - 2013-12-06 13:07:36 --> Output Class Initialized
DEBUG - 2013-12-06 13:07:36 --> Security Class Initialized
DEBUG - 2013-12-06 13:07:36 --> Input Class Initialized
DEBUG - 2013-12-06 13:07:36 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-06 13:07:36 --> Language Class Initialized
DEBUG - 2013-12-06 13:07:36 --> Loader Class Initialized
DEBUG - 2013-12-06 13:07:36 --> Helper loaded: form_helper
DEBUG - 2013-12-06 13:07:36 --> Helper loaded: url_helper
DEBUG - 2013-12-06 13:07:36 --> Helper loaded: html_helper
DEBUG - 2013-12-06 13:07:36 --> Database Driver Class Initialized
DEBUG - 2013-12-06 13:07:36 --> Session Class Initialized
DEBUG - 2013-12-06 13:07:36 --> Helper loaded: string_helper
DEBUG - 2013-12-06 13:07:36 --> Session routines successfully run
DEBUG - 2013-12-06 13:07:36 --> Form Validation Class Initialized
DEBUG - 2013-12-06 13:07:36 --> Controller Class Initialized
DEBUG - 2013-12-06 13:07:36 --> Model Class Initialized
DEBUG - 2013-12-06 13:07:36 --> Model Class Initialized
DEBUG - 2013-12-06 13:07:36 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-06 13:07:36 --> after session initialization................
INFO  - 2013-12-06 13:07:36 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '488'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-06 13:07:36 --> inside retrieving comments member id and drug id is 488
INFO  - 2013-12-06 13:07:36 --> 10==============================0
INFO  - 2013-12-06 13:07:36 --> SELECT dc.id_drugcomment as id, dc.comment, dc.time_created, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 488
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-06 13:07:36 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 488
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-06 13:07:36 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '488'
ORDER BY `a`.`time_created`
INFO  - 2013-12-06 13:07:36 --> inside retrieving pharmacy for drug id is 488
INFO  - 2013-12-06 13:07:36 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 488
ORDER BY `p`.`id_pharmacy`
LIMIT 15
INFO  - 2013-12-06 13:07:36 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '488'
ORDER BY `a`.`time_created`
INFO  - 2013-12-06 13:07:36 --> inside retrieving comments member type id and drug id is 488
INFO  - 2013-12-06 13:07:36 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 488
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
DEBUG - 2013-12-06 13:07:36 --> Final output sent to browser
DEBUG - 2013-12-06 13:07:36 --> Total execution time: 0.2470
DEBUG - 2013-12-06 13:07:39 --> Config Class Initialized
DEBUG - 2013-12-06 13:07:39 --> Hooks Class Initialized
DEBUG - 2013-12-06 13:07:39 --> Utf8 Class Initialized
DEBUG - 2013-12-06 13:07:39 --> UTF-8 Support Enabled
DEBUG - 2013-12-06 13:07:39 --> URI Class Initialized
DEBUG - 2013-12-06 13:07:39 --> Router Class Initialized
DEBUG - 2013-12-06 13:07:39 --> Output Class Initialized
DEBUG - 2013-12-06 13:07:39 --> Security Class Initialized
DEBUG - 2013-12-06 13:07:39 --> Input Class Initialized
DEBUG - 2013-12-06 13:07:39 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-06 13:07:39 --> Language Class Initialized
DEBUG - 2013-12-06 13:07:39 --> Loader Class Initialized
DEBUG - 2013-12-06 13:07:39 --> Helper loaded: form_helper
DEBUG - 2013-12-06 13:07:39 --> Helper loaded: url_helper
DEBUG - 2013-12-06 13:07:39 --> Helper loaded: html_helper
DEBUG - 2013-12-06 13:07:39 --> Database Driver Class Initialized
DEBUG - 2013-12-06 13:07:39 --> Session Class Initialized
DEBUG - 2013-12-06 13:07:39 --> Helper loaded: string_helper
DEBUG - 2013-12-06 13:07:39 --> Session routines successfully run
DEBUG - 2013-12-06 13:07:39 --> Form Validation Class Initialized
DEBUG - 2013-12-06 13:07:39 --> Controller Class Initialized
DEBUG - 2013-12-06 13:07:39 --> Model Class Initialized
DEBUG - 2013-12-06 13:07:39 --> Model Class Initialized
DEBUG - 2013-12-06 13:07:39 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-06 13:07:39 --> after session initialization................
INFO  - 2013-12-06 13:07:39 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 488 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-06 13:07:39 --> Final output sent to browser
DEBUG - 2013-12-06 13:07:39 --> Total execution time: 0.0510
DEBUG - 2013-12-06 13:07:57 --> Config Class Initialized
DEBUG - 2013-12-06 13:07:57 --> Hooks Class Initialized
DEBUG - 2013-12-06 13:07:57 --> Utf8 Class Initialized
DEBUG - 2013-12-06 13:07:57 --> UTF-8 Support Enabled
DEBUG - 2013-12-06 13:07:57 --> URI Class Initialized
DEBUG - 2013-12-06 13:07:57 --> Router Class Initialized
DEBUG - 2013-12-06 13:07:57 --> Output Class Initialized
DEBUG - 2013-12-06 13:07:57 --> Security Class Initialized
DEBUG - 2013-12-06 13:07:57 --> Input Class Initialized
DEBUG - 2013-12-06 13:07:57 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-06 13:07:57 --> Language Class Initialized
DEBUG - 2013-12-06 13:07:57 --> Loader Class Initialized
DEBUG - 2013-12-06 13:07:57 --> Helper loaded: form_helper
DEBUG - 2013-12-06 13:07:57 --> Helper loaded: url_helper
DEBUG - 2013-12-06 13:07:57 --> Helper loaded: html_helper
DEBUG - 2013-12-06 13:07:57 --> Database Driver Class Initialized
DEBUG - 2013-12-06 13:07:57 --> Session Class Initialized
DEBUG - 2013-12-06 13:07:57 --> Helper loaded: string_helper
DEBUG - 2013-12-06 13:07:57 --> Session routines successfully run
DEBUG - 2013-12-06 13:07:57 --> Form Validation Class Initialized
DEBUG - 2013-12-06 13:07:57 --> Controller Class Initialized
DEBUG - 2013-12-06 13:07:57 --> Model Class Initialized
DEBUG - 2013-12-06 13:07:57 --> Model Class Initialized
DEBUG - 2013-12-06 13:07:57 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-06 13:07:57 --> after session initialization................
INFO  - 2013-12-06 13:07:57 --> inside rays login auth.............
DEBUG - 2013-12-06 13:07:57 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-12-06 13:07:57 --> XSS Filtering completed
DEBUG - 2013-12-06 13:07:57 --> XSS Filtering completed
INFO  - 2013-12-06 13:07:57 --> before getting the relation of member............6
INFO  - 2013-12-06 13:07:57 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-12-06 13:07:57 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-06 13:07:57 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-06 13:07:57 --> inside retrieving vacancy for member
INFO  - 2013-12-06 13:07:57 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-12-06 13:07:57 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-06 13:07:57 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-12-06 13:07:57 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-06 13:07:57 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-06 13:07:57 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-06 13:07:57 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-06 13:07:57 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-12-06 13:07:57 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-12-06 13:07:57 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
DEBUG - 2013-12-06 13:07:57 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-12-06 13:07:57 --> Final output sent to browser
DEBUG - 2013-12-06 13:07:57 --> Total execution time: 0.1180
DEBUG - 2013-12-06 13:07:57 --> Config Class Initialized
DEBUG - 2013-12-06 13:07:57 --> Hooks Class Initialized
DEBUG - 2013-12-06 13:07:57 --> Utf8 Class Initialized
DEBUG - 2013-12-06 13:07:57 --> UTF-8 Support Enabled
DEBUG - 2013-12-06 13:07:57 --> URI Class Initialized
DEBUG - 2013-12-06 13:07:57 --> Router Class Initialized
ERROR - 2013-12-06 13:07:57 --> 404 Page Not Found --> css
DEBUG - 2013-12-06 13:11:41 --> Config Class Initialized
DEBUG - 2013-12-06 13:11:41 --> Hooks Class Initialized
DEBUG - 2013-12-06 13:11:41 --> Utf8 Class Initialized
DEBUG - 2013-12-06 13:11:41 --> UTF-8 Support Enabled
DEBUG - 2013-12-06 13:11:41 --> URI Class Initialized
DEBUG - 2013-12-06 13:11:41 --> Router Class Initialized
DEBUG - 2013-12-06 13:11:41 --> Output Class Initialized
DEBUG - 2013-12-06 13:11:41 --> Security Class Initialized
DEBUG - 2013-12-06 13:11:41 --> Input Class Initialized
DEBUG - 2013-12-06 13:11:41 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-06 13:11:41 --> Language Class Initialized
DEBUG - 2013-12-06 13:11:41 --> Loader Class Initialized
DEBUG - 2013-12-06 13:11:41 --> Helper loaded: form_helper
DEBUG - 2013-12-06 13:11:41 --> Helper loaded: url_helper
DEBUG - 2013-12-06 13:11:41 --> Helper loaded: html_helper
DEBUG - 2013-12-06 13:11:41 --> Database Driver Class Initialized
ERROR - 2013-12-06 13:11:41 --> Severity: Notice  --> mysql_pconnect(): send of 5 bytes failed with errno=10053 An established connection was aborted by the software in your host machine.
 C:\xampp\htdocs\Pharmarays\pharmaray-system\database\drivers\mysql\mysql_driver.php 91
DEBUG - 2013-12-06 13:11:42 --> Session Class Initialized
DEBUG - 2013-12-06 13:11:42 --> Helper loaded: string_helper
DEBUG - 2013-12-06 13:11:42 --> Session routines successfully run
DEBUG - 2013-12-06 13:11:42 --> Form Validation Class Initialized
DEBUG - 2013-12-06 13:11:42 --> Controller Class Initialized
DEBUG - 2013-12-06 13:11:42 --> Model Class Initialized
DEBUG - 2013-12-06 13:11:42 --> Model Class Initialized
DEBUG - 2013-12-06 13:11:42 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-06 13:11:42 --> after session initialization................
INFO  - 2013-12-06 13:11:42 --> inside rays login auth.............
DEBUG - 2013-12-06 13:11:42 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-12-06 13:11:42 --> XSS Filtering completed
DEBUG - 2013-12-06 13:11:42 --> XSS Filtering completed
INFO  - 2013-12-06 13:11:42 --> before getting the relation of member............6
INFO  - 2013-12-06 13:11:42 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-12-06 13:11:42 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-06 13:11:42 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-06 13:11:42 --> inside retrieving vacancy for member
INFO  - 2013-12-06 13:11:42 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-12-06 13:11:42 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-06 13:11:42 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-12-06 13:11:42 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-06 13:11:42 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-06 13:11:42 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-06 13:11:42 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-06 13:11:42 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-12-06 13:11:42 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-12-06 13:11:42 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
DEBUG - 2013-12-06 13:11:42 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-12-06 13:11:42 --> Final output sent to browser
DEBUG - 2013-12-06 13:11:42 --> Total execution time: 1.2011
DEBUG - 2013-12-06 13:11:42 --> Config Class Initialized
DEBUG - 2013-12-06 13:11:42 --> Hooks Class Initialized
DEBUG - 2013-12-06 13:11:42 --> Utf8 Class Initialized
DEBUG - 2013-12-06 13:11:42 --> UTF-8 Support Enabled
DEBUG - 2013-12-06 13:11:42 --> URI Class Initialized
DEBUG - 2013-12-06 13:11:42 --> Router Class Initialized
ERROR - 2013-12-06 13:11:42 --> 404 Page Not Found --> css
DEBUG - 2013-12-06 13:11:56 --> Config Class Initialized
DEBUG - 2013-12-06 13:11:56 --> Hooks Class Initialized
DEBUG - 2013-12-06 13:11:56 --> Utf8 Class Initialized
DEBUG - 2013-12-06 13:11:56 --> UTF-8 Support Enabled
DEBUG - 2013-12-06 13:11:56 --> URI Class Initialized
DEBUG - 2013-12-06 13:11:56 --> Router Class Initialized
DEBUG - 2013-12-06 13:11:56 --> Output Class Initialized
DEBUG - 2013-12-06 13:11:56 --> Security Class Initialized
DEBUG - 2013-12-06 13:11:56 --> Input Class Initialized
DEBUG - 2013-12-06 13:11:57 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-06 13:11:57 --> Language Class Initialized
DEBUG - 2013-12-06 13:11:57 --> Loader Class Initialized
DEBUG - 2013-12-06 13:11:57 --> Helper loaded: form_helper
DEBUG - 2013-12-06 13:11:57 --> Helper loaded: url_helper
DEBUG - 2013-12-06 13:11:57 --> Helper loaded: html_helper
DEBUG - 2013-12-06 13:11:57 --> Database Driver Class Initialized
DEBUG - 2013-12-06 13:11:57 --> Session Class Initialized
DEBUG - 2013-12-06 13:11:57 --> Helper loaded: string_helper
DEBUG - 2013-12-06 13:11:57 --> Session routines successfully run
DEBUG - 2013-12-06 13:11:57 --> Form Validation Class Initialized
DEBUG - 2013-12-06 13:11:57 --> Controller Class Initialized
DEBUG - 2013-12-06 13:11:57 --> Model Class Initialized
DEBUG - 2013-12-06 13:11:57 --> Model Class Initialized
DEBUG - 2013-12-06 13:11:57 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-06 13:11:57 --> after session initialization................
INFO  - 2013-12-06 13:11:57 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 1 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-06 13:11:57 --> Final output sent to browser
DEBUG - 2013-12-06 13:11:57 --> Total execution time: 0.0890
DEBUG - 2013-12-06 13:12:03 --> Config Class Initialized
DEBUG - 2013-12-06 13:12:03 --> Hooks Class Initialized
DEBUG - 2013-12-06 13:12:03 --> Utf8 Class Initialized
DEBUG - 2013-12-06 13:12:03 --> UTF-8 Support Enabled
DEBUG - 2013-12-06 13:12:03 --> URI Class Initialized
DEBUG - 2013-12-06 13:12:03 --> Router Class Initialized
DEBUG - 2013-12-06 13:12:03 --> Output Class Initialized
DEBUG - 2013-12-06 13:12:03 --> Security Class Initialized
DEBUG - 2013-12-06 13:12:03 --> Input Class Initialized
DEBUG - 2013-12-06 13:12:03 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-06 13:12:03 --> Language Class Initialized
DEBUG - 2013-12-06 13:12:03 --> Loader Class Initialized
DEBUG - 2013-12-06 13:12:03 --> Helper loaded: form_helper
DEBUG - 2013-12-06 13:12:03 --> Helper loaded: url_helper
DEBUG - 2013-12-06 13:12:03 --> Helper loaded: html_helper
DEBUG - 2013-12-06 13:12:03 --> Database Driver Class Initialized
DEBUG - 2013-12-06 13:12:03 --> Session Class Initialized
DEBUG - 2013-12-06 13:12:03 --> Helper loaded: string_helper
DEBUG - 2013-12-06 13:12:03 --> Session routines successfully run
DEBUG - 2013-12-06 13:12:03 --> Form Validation Class Initialized
DEBUG - 2013-12-06 13:12:03 --> Controller Class Initialized
DEBUG - 2013-12-06 13:12:03 --> Model Class Initialized
DEBUG - 2013-12-06 13:12:03 --> Model Class Initialized
DEBUG - 2013-12-06 13:12:03 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-06 13:12:03 --> after session initialization................
INFO  - 2013-12-06 13:12:03 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 1 and d.drugcategoryid_drugcategory = 1 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-06 13:12:03 --> Final output sent to browser
DEBUG - 2013-12-06 13:12:03 --> Total execution time: 0.0970
DEBUG - 2013-12-06 13:12:05 --> Config Class Initialized
DEBUG - 2013-12-06 13:12:05 --> Hooks Class Initialized
DEBUG - 2013-12-06 13:12:05 --> Utf8 Class Initialized
DEBUG - 2013-12-06 13:12:05 --> UTF-8 Support Enabled
DEBUG - 2013-12-06 13:12:05 --> URI Class Initialized
DEBUG - 2013-12-06 13:12:05 --> Router Class Initialized
DEBUG - 2013-12-06 13:12:05 --> Output Class Initialized
DEBUG - 2013-12-06 13:12:05 --> Security Class Initialized
DEBUG - 2013-12-06 13:12:05 --> Input Class Initialized
DEBUG - 2013-12-06 13:12:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-06 13:12:05 --> Language Class Initialized
DEBUG - 2013-12-06 13:12:05 --> Loader Class Initialized
DEBUG - 2013-12-06 13:12:05 --> Helper loaded: form_helper
DEBUG - 2013-12-06 13:12:05 --> Helper loaded: url_helper
DEBUG - 2013-12-06 13:12:05 --> Helper loaded: html_helper
DEBUG - 2013-12-06 13:12:05 --> Database Driver Class Initialized
DEBUG - 2013-12-06 13:12:05 --> Session Class Initialized
DEBUG - 2013-12-06 13:12:05 --> Helper loaded: string_helper
DEBUG - 2013-12-06 13:12:05 --> Session routines successfully run
DEBUG - 2013-12-06 13:12:05 --> Form Validation Class Initialized
DEBUG - 2013-12-06 13:12:05 --> Controller Class Initialized
DEBUG - 2013-12-06 13:12:05 --> Model Class Initialized
DEBUG - 2013-12-06 13:12:05 --> Model Class Initialized
DEBUG - 2013-12-06 13:12:05 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-06 13:12:05 --> after session initialization................
INFO  - 2013-12-06 13:12:05 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 1 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-06 13:12:05 --> Final output sent to browser
DEBUG - 2013-12-06 13:12:05 --> Total execution time: 0.0570
DEBUG - 2013-12-06 13:12:07 --> Config Class Initialized
DEBUG - 2013-12-06 13:12:07 --> Hooks Class Initialized
DEBUG - 2013-12-06 13:12:07 --> Utf8 Class Initialized
DEBUG - 2013-12-06 13:12:07 --> UTF-8 Support Enabled
DEBUG - 2013-12-06 13:12:07 --> URI Class Initialized
DEBUG - 2013-12-06 13:12:07 --> Router Class Initialized
DEBUG - 2013-12-06 13:12:07 --> Output Class Initialized
DEBUG - 2013-12-06 13:12:07 --> Security Class Initialized
DEBUG - 2013-12-06 13:12:07 --> Input Class Initialized
DEBUG - 2013-12-06 13:12:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-06 13:12:07 --> Language Class Initialized
DEBUG - 2013-12-06 13:12:07 --> Loader Class Initialized
DEBUG - 2013-12-06 13:12:07 --> Helper loaded: form_helper
DEBUG - 2013-12-06 13:12:07 --> Helper loaded: url_helper
DEBUG - 2013-12-06 13:12:07 --> Helper loaded: html_helper
DEBUG - 2013-12-06 13:12:07 --> Database Driver Class Initialized
DEBUG - 2013-12-06 13:12:07 --> Session Class Initialized
DEBUG - 2013-12-06 13:12:07 --> Helper loaded: string_helper
DEBUG - 2013-12-06 13:12:07 --> Session routines successfully run
DEBUG - 2013-12-06 13:12:07 --> Form Validation Class Initialized
DEBUG - 2013-12-06 13:12:07 --> Controller Class Initialized
DEBUG - 2013-12-06 13:12:07 --> Model Class Initialized
DEBUG - 2013-12-06 13:12:07 --> Model Class Initialized
DEBUG - 2013-12-06 13:12:07 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-06 13:12:07 --> after session initialization................
INFO  - 2013-12-06 13:12:07 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '486'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-06 13:12:07 --> inside retrieving comments member id and drug id is 486
INFO  - 2013-12-06 13:12:07 --> 10==============================0
INFO  - 2013-12-06 13:12:07 --> SELECT dc.id_drugcomment as id, dc.comment, dc.time_created, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 486
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-06 13:12:07 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 486
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-06 13:12:07 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '486'
ORDER BY `a`.`time_created`
INFO  - 2013-12-06 13:12:07 --> inside retrieving pharmacy for drug id is 486
INFO  - 2013-12-06 13:12:07 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 486
ORDER BY `p`.`id_pharmacy`
LIMIT 15
INFO  - 2013-12-06 13:12:07 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '486'
ORDER BY `a`.`time_created`
INFO  - 2013-12-06 13:12:07 --> inside retrieving comments member type id and drug id is 486
INFO  - 2013-12-06 13:12:07 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 486
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
DEBUG - 2013-12-06 13:12:07 --> Final output sent to browser
DEBUG - 2013-12-06 13:12:07 --> Total execution time: 0.1170
DEBUG - 2013-12-06 13:13:31 --> Config Class Initialized
DEBUG - 2013-12-06 13:13:31 --> Hooks Class Initialized
DEBUG - 2013-12-06 13:13:31 --> Utf8 Class Initialized
DEBUG - 2013-12-06 13:13:31 --> UTF-8 Support Enabled
DEBUG - 2013-12-06 13:13:31 --> URI Class Initialized
DEBUG - 2013-12-06 13:13:31 --> Router Class Initialized
DEBUG - 2013-12-06 13:13:31 --> Output Class Initialized
DEBUG - 2013-12-06 13:13:31 --> Security Class Initialized
DEBUG - 2013-12-06 13:13:31 --> Input Class Initialized
DEBUG - 2013-12-06 13:13:31 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-06 13:13:31 --> Language Class Initialized
DEBUG - 2013-12-06 13:13:31 --> Loader Class Initialized
DEBUG - 2013-12-06 13:13:31 --> Helper loaded: form_helper
DEBUG - 2013-12-06 13:13:31 --> Helper loaded: url_helper
DEBUG - 2013-12-06 13:13:31 --> Helper loaded: html_helper
DEBUG - 2013-12-06 13:13:31 --> Database Driver Class Initialized
DEBUG - 2013-12-06 13:13:31 --> Session Class Initialized
DEBUG - 2013-12-06 13:13:31 --> Helper loaded: string_helper
DEBUG - 2013-12-06 13:13:31 --> Session routines successfully run
DEBUG - 2013-12-06 13:13:31 --> Form Validation Class Initialized
DEBUG - 2013-12-06 13:13:31 --> Controller Class Initialized
DEBUG - 2013-12-06 13:13:31 --> Model Class Initialized
DEBUG - 2013-12-06 13:13:31 --> Model Class Initialized
DEBUG - 2013-12-06 13:13:31 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-06 13:13:31 --> after session initialization................
INFO  - 2013-12-06 13:13:31 --> inside rays login auth.............
DEBUG - 2013-12-06 13:13:31 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-12-06 13:13:31 --> XSS Filtering completed
DEBUG - 2013-12-06 13:13:31 --> XSS Filtering completed
INFO  - 2013-12-06 13:13:31 --> before getting the relation of member............6
INFO  - 2013-12-06 13:13:31 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-12-06 13:13:31 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-06 13:13:31 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-06 13:13:31 --> inside retrieving vacancy for member
INFO  - 2013-12-06 13:13:31 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-12-06 13:13:31 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-06 13:13:31 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-12-06 13:13:31 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-06 13:13:31 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-06 13:13:31 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-06 13:13:31 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-06 13:13:31 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-12-06 13:13:31 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-12-06 13:13:31 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
DEBUG - 2013-12-06 13:13:31 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-12-06 13:13:31 --> Final output sent to browser
DEBUG - 2013-12-06 13:13:31 --> Total execution time: 0.1090
DEBUG - 2013-12-06 13:13:31 --> Config Class Initialized
DEBUG - 2013-12-06 13:13:31 --> Hooks Class Initialized
DEBUG - 2013-12-06 13:13:31 --> Utf8 Class Initialized
DEBUG - 2013-12-06 13:13:31 --> UTF-8 Support Enabled
DEBUG - 2013-12-06 13:13:31 --> URI Class Initialized
DEBUG - 2013-12-06 13:13:31 --> Router Class Initialized
ERROR - 2013-12-06 13:13:31 --> 404 Page Not Found --> css
DEBUG - 2013-12-06 13:13:35 --> Config Class Initialized
DEBUG - 2013-12-06 13:13:35 --> Hooks Class Initialized
DEBUG - 2013-12-06 13:13:35 --> Utf8 Class Initialized
DEBUG - 2013-12-06 13:13:35 --> UTF-8 Support Enabled
DEBUG - 2013-12-06 13:13:35 --> URI Class Initialized
DEBUG - 2013-12-06 13:13:35 --> Router Class Initialized
DEBUG - 2013-12-06 13:13:35 --> Output Class Initialized
DEBUG - 2013-12-06 13:13:35 --> Security Class Initialized
DEBUG - 2013-12-06 13:13:35 --> Input Class Initialized
DEBUG - 2013-12-06 13:13:35 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-06 13:13:35 --> Language Class Initialized
DEBUG - 2013-12-06 13:13:35 --> Loader Class Initialized
DEBUG - 2013-12-06 13:13:35 --> Helper loaded: form_helper
DEBUG - 2013-12-06 13:13:35 --> Helper loaded: url_helper
DEBUG - 2013-12-06 13:13:35 --> Helper loaded: html_helper
DEBUG - 2013-12-06 13:13:35 --> Database Driver Class Initialized
DEBUG - 2013-12-06 13:13:35 --> Session Class Initialized
DEBUG - 2013-12-06 13:13:35 --> Helper loaded: string_helper
DEBUG - 2013-12-06 13:13:35 --> Session routines successfully run
DEBUG - 2013-12-06 13:13:35 --> Form Validation Class Initialized
DEBUG - 2013-12-06 13:13:35 --> Controller Class Initialized
DEBUG - 2013-12-06 13:13:35 --> Model Class Initialized
DEBUG - 2013-12-06 13:13:35 --> Model Class Initialized
DEBUG - 2013-12-06 13:13:35 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-06 13:13:35 --> after session initialization................
INFO  - 2013-12-06 13:13:35 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 1 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-06 13:13:35 --> Final output sent to browser
DEBUG - 2013-12-06 13:13:35 --> Total execution time: 0.0990
DEBUG - 2013-12-06 13:16:51 --> Config Class Initialized
DEBUG - 2013-12-06 13:16:51 --> Hooks Class Initialized
DEBUG - 2013-12-06 13:16:51 --> Utf8 Class Initialized
DEBUG - 2013-12-06 13:16:51 --> UTF-8 Support Enabled
DEBUG - 2013-12-06 13:16:51 --> URI Class Initialized
DEBUG - 2013-12-06 13:16:51 --> Router Class Initialized
DEBUG - 2013-12-06 13:16:51 --> Output Class Initialized
DEBUG - 2013-12-06 13:16:51 --> Security Class Initialized
DEBUG - 2013-12-06 13:16:51 --> Input Class Initialized
DEBUG - 2013-12-06 13:16:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-06 13:16:51 --> Language Class Initialized
DEBUG - 2013-12-06 13:16:51 --> Loader Class Initialized
DEBUG - 2013-12-06 13:16:51 --> Helper loaded: form_helper
DEBUG - 2013-12-06 13:16:51 --> Helper loaded: url_helper
DEBUG - 2013-12-06 13:16:51 --> Helper loaded: html_helper
DEBUG - 2013-12-06 13:16:51 --> Database Driver Class Initialized
DEBUG - 2013-12-06 13:16:51 --> Session Class Initialized
DEBUG - 2013-12-06 13:16:51 --> Helper loaded: string_helper
DEBUG - 2013-12-06 13:16:51 --> Session routines successfully run
DEBUG - 2013-12-06 13:16:51 --> Form Validation Class Initialized
DEBUG - 2013-12-06 13:16:51 --> Controller Class Initialized
DEBUG - 2013-12-06 13:16:51 --> Model Class Initialized
DEBUG - 2013-12-06 13:16:51 --> Model Class Initialized
DEBUG - 2013-12-06 13:16:51 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-06 13:16:51 --> after session initialization................
INFO  - 2013-12-06 13:16:51 --> inside rays login auth.............
DEBUG - 2013-12-06 13:16:51 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-12-06 13:16:51 --> XSS Filtering completed
DEBUG - 2013-12-06 13:16:51 --> XSS Filtering completed
INFO  - 2013-12-06 13:16:51 --> before getting the relation of member............6
INFO  - 2013-12-06 13:16:51 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-12-06 13:16:51 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-06 13:16:51 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-06 13:16:51 --> inside retrieving vacancy for member
INFO  - 2013-12-06 13:16:51 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-12-06 13:16:51 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-06 13:16:51 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-12-06 13:16:51 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-06 13:16:51 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-06 13:16:51 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-06 13:16:51 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-06 13:16:51 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-12-06 13:16:51 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-12-06 13:16:51 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
DEBUG - 2013-12-06 13:16:51 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-12-06 13:16:51 --> Final output sent to browser
DEBUG - 2013-12-06 13:16:51 --> Total execution time: 0.0780
DEBUG - 2013-12-06 13:16:51 --> Config Class Initialized
DEBUG - 2013-12-06 13:16:51 --> Hooks Class Initialized
DEBUG - 2013-12-06 13:16:51 --> Utf8 Class Initialized
DEBUG - 2013-12-06 13:16:51 --> UTF-8 Support Enabled
DEBUG - 2013-12-06 13:16:51 --> URI Class Initialized
DEBUG - 2013-12-06 13:16:51 --> Router Class Initialized
ERROR - 2013-12-06 13:16:51 --> 404 Page Not Found --> css
DEBUG - 2013-12-06 13:17:00 --> Config Class Initialized
DEBUG - 2013-12-06 13:17:00 --> Hooks Class Initialized
DEBUG - 2013-12-06 13:17:00 --> Utf8 Class Initialized
DEBUG - 2013-12-06 13:17:00 --> UTF-8 Support Enabled
DEBUG - 2013-12-06 13:17:00 --> URI Class Initialized
DEBUG - 2013-12-06 13:17:00 --> Router Class Initialized
DEBUG - 2013-12-06 13:17:00 --> Output Class Initialized
DEBUG - 2013-12-06 13:17:00 --> Security Class Initialized
DEBUG - 2013-12-06 13:17:00 --> Input Class Initialized
DEBUG - 2013-12-06 13:17:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-06 13:17:00 --> Language Class Initialized
DEBUG - 2013-12-06 13:17:00 --> Loader Class Initialized
DEBUG - 2013-12-06 13:17:00 --> Helper loaded: form_helper
DEBUG - 2013-12-06 13:17:00 --> Helper loaded: url_helper
DEBUG - 2013-12-06 13:17:00 --> Helper loaded: html_helper
DEBUG - 2013-12-06 13:17:00 --> Database Driver Class Initialized
DEBUG - 2013-12-06 13:17:00 --> Session Class Initialized
DEBUG - 2013-12-06 13:17:00 --> Helper loaded: string_helper
DEBUG - 2013-12-06 13:17:00 --> Session routines successfully run
DEBUG - 2013-12-06 13:17:00 --> Form Validation Class Initialized
DEBUG - 2013-12-06 13:17:00 --> Controller Class Initialized
DEBUG - 2013-12-06 13:17:00 --> Model Class Initialized
DEBUG - 2013-12-06 13:17:00 --> Model Class Initialized
DEBUG - 2013-12-06 13:17:00 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-06 13:17:00 --> after session initialization................
INFO  - 2013-12-06 13:17:00 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 1 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-06 13:17:00 --> Final output sent to browser
DEBUG - 2013-12-06 13:17:00 --> Total execution time: 0.1090
DEBUG - 2013-12-06 13:17:10 --> Config Class Initialized
DEBUG - 2013-12-06 13:17:10 --> Hooks Class Initialized
DEBUG - 2013-12-06 13:17:10 --> Utf8 Class Initialized
DEBUG - 2013-12-06 13:17:10 --> UTF-8 Support Enabled
DEBUG - 2013-12-06 13:17:10 --> URI Class Initialized
DEBUG - 2013-12-06 13:17:10 --> Router Class Initialized
DEBUG - 2013-12-06 13:17:10 --> Output Class Initialized
DEBUG - 2013-12-06 13:17:10 --> Security Class Initialized
DEBUG - 2013-12-06 13:17:10 --> Input Class Initialized
DEBUG - 2013-12-06 13:17:10 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-06 13:17:10 --> Language Class Initialized
DEBUG - 2013-12-06 13:17:10 --> Loader Class Initialized
DEBUG - 2013-12-06 13:17:10 --> Helper loaded: form_helper
DEBUG - 2013-12-06 13:17:10 --> Helper loaded: url_helper
DEBUG - 2013-12-06 13:17:10 --> Helper loaded: html_helper
DEBUG - 2013-12-06 13:17:10 --> Database Driver Class Initialized
DEBUG - 2013-12-06 13:17:10 --> Session Class Initialized
DEBUG - 2013-12-06 13:17:10 --> Helper loaded: string_helper
DEBUG - 2013-12-06 13:17:10 --> Session routines successfully run
DEBUG - 2013-12-06 13:17:10 --> Form Validation Class Initialized
DEBUG - 2013-12-06 13:17:10 --> Controller Class Initialized
DEBUG - 2013-12-06 13:17:10 --> Model Class Initialized
DEBUG - 2013-12-06 13:17:10 --> Model Class Initialized
DEBUG - 2013-12-06 13:17:10 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-06 13:17:10 --> after session initialization................
INFO  - 2013-12-06 13:17:10 --> inside rays login auth.............
DEBUG - 2013-12-06 13:17:10 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-12-06 13:17:10 --> XSS Filtering completed
DEBUG - 2013-12-06 13:17:10 --> XSS Filtering completed
INFO  - 2013-12-06 13:17:10 --> before getting the relation of member............6
INFO  - 2013-12-06 13:17:10 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-12-06 13:17:10 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-06 13:17:10 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-06 13:17:10 --> inside retrieving vacancy for member
INFO  - 2013-12-06 13:17:10 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-12-06 13:17:10 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-06 13:17:10 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-12-06 13:17:10 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-06 13:17:10 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-06 13:17:10 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-06 13:17:10 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-06 13:17:10 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-12-06 13:17:10 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-12-06 13:17:10 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
DEBUG - 2013-12-06 13:17:10 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-12-06 13:17:10 --> Final output sent to browser
DEBUG - 2013-12-06 13:17:10 --> Total execution time: 0.0810
DEBUG - 2013-12-06 13:17:11 --> Config Class Initialized
DEBUG - 2013-12-06 13:17:11 --> Hooks Class Initialized
DEBUG - 2013-12-06 13:17:11 --> Utf8 Class Initialized
DEBUG - 2013-12-06 13:17:11 --> UTF-8 Support Enabled
DEBUG - 2013-12-06 13:17:11 --> URI Class Initialized
DEBUG - 2013-12-06 13:17:11 --> Router Class Initialized
ERROR - 2013-12-06 13:17:11 --> 404 Page Not Found --> css
DEBUG - 2013-12-06 13:17:13 --> Config Class Initialized
DEBUG - 2013-12-06 13:17:13 --> Hooks Class Initialized
DEBUG - 2013-12-06 13:17:13 --> Utf8 Class Initialized
DEBUG - 2013-12-06 13:17:13 --> UTF-8 Support Enabled
DEBUG - 2013-12-06 13:17:13 --> URI Class Initialized
DEBUG - 2013-12-06 13:17:13 --> Router Class Initialized
DEBUG - 2013-12-06 13:17:13 --> Output Class Initialized
DEBUG - 2013-12-06 13:17:13 --> Security Class Initialized
DEBUG - 2013-12-06 13:17:13 --> Input Class Initialized
DEBUG - 2013-12-06 13:17:13 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-06 13:17:13 --> Language Class Initialized
DEBUG - 2013-12-06 13:17:13 --> Loader Class Initialized
DEBUG - 2013-12-06 13:17:13 --> Helper loaded: form_helper
DEBUG - 2013-12-06 13:17:13 --> Helper loaded: url_helper
DEBUG - 2013-12-06 13:17:13 --> Helper loaded: html_helper
DEBUG - 2013-12-06 13:17:13 --> Database Driver Class Initialized
DEBUG - 2013-12-06 13:17:13 --> Session Class Initialized
DEBUG - 2013-12-06 13:17:13 --> Helper loaded: string_helper
DEBUG - 2013-12-06 13:17:13 --> Session routines successfully run
DEBUG - 2013-12-06 13:17:13 --> Form Validation Class Initialized
DEBUG - 2013-12-06 13:17:13 --> Controller Class Initialized
DEBUG - 2013-12-06 13:17:13 --> Model Class Initialized
DEBUG - 2013-12-06 13:17:13 --> Model Class Initialized
DEBUG - 2013-12-06 13:17:13 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-06 13:17:13 --> after session initialization................
INFO  - 2013-12-06 13:17:13 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 1 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-06 13:17:13 --> Final output sent to browser
DEBUG - 2013-12-06 13:17:13 --> Total execution time: 0.0520
DEBUG - 2013-12-06 13:17:33 --> Config Class Initialized
DEBUG - 2013-12-06 13:17:33 --> Hooks Class Initialized
DEBUG - 2013-12-06 13:17:33 --> Utf8 Class Initialized
DEBUG - 2013-12-06 13:17:33 --> UTF-8 Support Enabled
DEBUG - 2013-12-06 13:17:33 --> URI Class Initialized
DEBUG - 2013-12-06 13:17:33 --> Router Class Initialized
DEBUG - 2013-12-06 13:17:33 --> Output Class Initialized
DEBUG - 2013-12-06 13:17:33 --> Security Class Initialized
DEBUG - 2013-12-06 13:17:33 --> Input Class Initialized
DEBUG - 2013-12-06 13:17:33 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-06 13:17:33 --> Language Class Initialized
DEBUG - 2013-12-06 13:17:33 --> Loader Class Initialized
DEBUG - 2013-12-06 13:17:33 --> Helper loaded: form_helper
DEBUG - 2013-12-06 13:17:33 --> Helper loaded: url_helper
DEBUG - 2013-12-06 13:17:33 --> Helper loaded: html_helper
DEBUG - 2013-12-06 13:17:33 --> Database Driver Class Initialized
DEBUG - 2013-12-06 13:17:34 --> Session Class Initialized
DEBUG - 2013-12-06 13:17:34 --> Helper loaded: string_helper
DEBUG - 2013-12-06 13:17:34 --> Session routines successfully run
DEBUG - 2013-12-06 13:17:34 --> Form Validation Class Initialized
DEBUG - 2013-12-06 13:17:34 --> Controller Class Initialized
DEBUG - 2013-12-06 13:17:34 --> Model Class Initialized
DEBUG - 2013-12-06 13:17:34 --> Model Class Initialized
DEBUG - 2013-12-06 13:17:34 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-06 13:17:34 --> after session initialization................
INFO  - 2013-12-06 13:17:34 --> inside rays login auth.............
DEBUG - 2013-12-06 13:17:34 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-12-06 13:17:34 --> XSS Filtering completed
DEBUG - 2013-12-06 13:17:34 --> XSS Filtering completed
INFO  - 2013-12-06 13:17:34 --> before getting the relation of member............6
INFO  - 2013-12-06 13:17:34 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-12-06 13:17:34 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-06 13:17:34 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-06 13:17:34 --> inside retrieving vacancy for member
INFO  - 2013-12-06 13:17:34 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-12-06 13:17:34 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-06 13:17:34 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-12-06 13:17:34 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-06 13:17:34 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-06 13:17:34 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-06 13:17:34 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-06 13:17:34 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-12-06 13:17:34 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-12-06 13:17:34 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
DEBUG - 2013-12-06 13:17:34 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-12-06 13:17:34 --> Final output sent to browser
DEBUG - 2013-12-06 13:17:34 --> Total execution time: 1.2661
DEBUG - 2013-12-06 13:17:34 --> Config Class Initialized
DEBUG - 2013-12-06 13:17:34 --> Hooks Class Initialized
DEBUG - 2013-12-06 13:17:34 --> Utf8 Class Initialized
DEBUG - 2013-12-06 13:17:34 --> UTF-8 Support Enabled
DEBUG - 2013-12-06 13:17:34 --> URI Class Initialized
DEBUG - 2013-12-06 13:17:34 --> Router Class Initialized
ERROR - 2013-12-06 13:17:34 --> 404 Page Not Found --> css
DEBUG - 2013-12-06 13:19:03 --> Config Class Initialized
DEBUG - 2013-12-06 13:19:03 --> Hooks Class Initialized
DEBUG - 2013-12-06 13:19:03 --> Utf8 Class Initialized
DEBUG - 2013-12-06 13:19:03 --> UTF-8 Support Enabled
DEBUG - 2013-12-06 13:19:03 --> URI Class Initialized
DEBUG - 2013-12-06 13:19:03 --> Router Class Initialized
DEBUG - 2013-12-06 13:19:03 --> Output Class Initialized
DEBUG - 2013-12-06 13:19:03 --> Security Class Initialized
DEBUG - 2013-12-06 13:19:03 --> Input Class Initialized
DEBUG - 2013-12-06 13:19:03 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-06 13:19:03 --> Language Class Initialized
DEBUG - 2013-12-06 13:19:03 --> Loader Class Initialized
DEBUG - 2013-12-06 13:19:03 --> Helper loaded: form_helper
DEBUG - 2013-12-06 13:19:03 --> Helper loaded: url_helper
DEBUG - 2013-12-06 13:19:03 --> Helper loaded: html_helper
DEBUG - 2013-12-06 13:19:03 --> Database Driver Class Initialized
ERROR - 2013-12-06 13:19:03 --> Severity: Notice  --> mysql_pconnect(): send of 5 bytes failed with errno=10053 An established connection was aborted by the software in your host machine.
 C:\xampp\htdocs\Pharmarays\pharmaray-system\database\drivers\mysql\mysql_driver.php 91
DEBUG - 2013-12-06 13:19:04 --> Session Class Initialized
DEBUG - 2013-12-06 13:19:04 --> Helper loaded: string_helper
DEBUG - 2013-12-06 13:19:04 --> Session routines successfully run
DEBUG - 2013-12-06 13:19:04 --> Form Validation Class Initialized
DEBUG - 2013-12-06 13:19:04 --> Controller Class Initialized
DEBUG - 2013-12-06 13:19:04 --> Model Class Initialized
DEBUG - 2013-12-06 13:19:04 --> Model Class Initialized
DEBUG - 2013-12-06 13:19:04 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-06 13:19:04 --> after session initialization................
INFO  - 2013-12-06 13:19:04 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 1 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-06 13:19:04 --> Final output sent to browser
DEBUG - 2013-12-06 13:19:04 --> Total execution time: 1.2631
DEBUG - 2013-12-06 13:31:23 --> Config Class Initialized
DEBUG - 2013-12-06 13:31:23 --> Hooks Class Initialized
DEBUG - 2013-12-06 13:31:23 --> Utf8 Class Initialized
DEBUG - 2013-12-06 13:31:23 --> UTF-8 Support Enabled
DEBUG - 2013-12-06 13:31:23 --> URI Class Initialized
DEBUG - 2013-12-06 13:31:23 --> Router Class Initialized
DEBUG - 2013-12-06 13:31:23 --> Output Class Initialized
DEBUG - 2013-12-06 13:31:23 --> Security Class Initialized
DEBUG - 2013-12-06 13:31:23 --> Input Class Initialized
DEBUG - 2013-12-06 13:31:23 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-06 13:31:23 --> Language Class Initialized
DEBUG - 2013-12-06 13:31:23 --> Loader Class Initialized
DEBUG - 2013-12-06 13:31:23 --> Helper loaded: form_helper
DEBUG - 2013-12-06 13:31:23 --> Helper loaded: url_helper
DEBUG - 2013-12-06 13:31:23 --> Helper loaded: html_helper
DEBUG - 2013-12-06 13:31:23 --> Database Driver Class Initialized
DEBUG - 2013-12-06 13:31:23 --> Session Class Initialized
DEBUG - 2013-12-06 13:31:23 --> Helper loaded: string_helper
DEBUG - 2013-12-06 13:31:23 --> Session routines successfully run
DEBUG - 2013-12-06 13:31:23 --> Form Validation Class Initialized
DEBUG - 2013-12-06 13:31:23 --> Controller Class Initialized
DEBUG - 2013-12-06 13:31:23 --> Model Class Initialized
DEBUG - 2013-12-06 13:31:23 --> Model Class Initialized
DEBUG - 2013-12-06 13:31:23 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-06 13:31:23 --> after session initialization................
INFO  - 2013-12-06 13:31:23 --> inside rays login auth.............
DEBUG - 2013-12-06 13:31:23 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-12-06 13:31:23 --> XSS Filtering completed
DEBUG - 2013-12-06 13:31:23 --> XSS Filtering completed
INFO  - 2013-12-06 13:31:23 --> before getting the relation of member............6
INFO  - 2013-12-06 13:31:23 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-12-06 13:31:23 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-06 13:31:23 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-06 13:31:23 --> inside retrieving vacancy for member
INFO  - 2013-12-06 13:31:23 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-12-06 13:31:23 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-06 13:31:23 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-12-06 13:31:23 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-06 13:31:23 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-06 13:31:23 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-06 13:31:23 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-06 13:31:23 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-12-06 13:31:23 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-12-06 13:31:23 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
DEBUG - 2013-12-06 13:31:23 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-12-06 13:31:23 --> Final output sent to browser
DEBUG - 2013-12-06 13:31:23 --> Total execution time: 0.0900
DEBUG - 2013-12-06 13:31:23 --> Config Class Initialized
DEBUG - 2013-12-06 13:31:23 --> Hooks Class Initialized
DEBUG - 2013-12-06 13:31:23 --> Utf8 Class Initialized
DEBUG - 2013-12-06 13:31:23 --> UTF-8 Support Enabled
DEBUG - 2013-12-06 13:31:23 --> URI Class Initialized
DEBUG - 2013-12-06 13:31:23 --> Router Class Initialized
ERROR - 2013-12-06 13:31:23 --> 404 Page Not Found --> css
DEBUG - 2013-12-06 13:31:42 --> Config Class Initialized
DEBUG - 2013-12-06 13:31:42 --> Hooks Class Initialized
DEBUG - 2013-12-06 13:31:42 --> Utf8 Class Initialized
DEBUG - 2013-12-06 13:31:42 --> UTF-8 Support Enabled
DEBUG - 2013-12-06 13:31:42 --> URI Class Initialized
DEBUG - 2013-12-06 13:31:42 --> Router Class Initialized
DEBUG - 2013-12-06 13:31:42 --> Output Class Initialized
DEBUG - 2013-12-06 13:31:42 --> Security Class Initialized
DEBUG - 2013-12-06 13:31:42 --> Input Class Initialized
DEBUG - 2013-12-06 13:31:42 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-06 13:31:42 --> Language Class Initialized
DEBUG - 2013-12-06 13:31:42 --> Loader Class Initialized
DEBUG - 2013-12-06 13:31:42 --> Helper loaded: form_helper
DEBUG - 2013-12-06 13:31:42 --> Helper loaded: url_helper
DEBUG - 2013-12-06 13:31:42 --> Helper loaded: html_helper
DEBUG - 2013-12-06 13:31:42 --> Database Driver Class Initialized
DEBUG - 2013-12-06 13:31:42 --> Session Class Initialized
DEBUG - 2013-12-06 13:31:42 --> Helper loaded: string_helper
DEBUG - 2013-12-06 13:31:42 --> Session routines successfully run
DEBUG - 2013-12-06 13:31:42 --> Form Validation Class Initialized
DEBUG - 2013-12-06 13:31:42 --> Controller Class Initialized
DEBUG - 2013-12-06 13:31:42 --> Model Class Initialized
DEBUG - 2013-12-06 13:31:42 --> Model Class Initialized
DEBUG - 2013-12-06 13:31:42 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-06 13:31:42 --> after session initialization................
INFO  - 2013-12-06 13:31:42 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 1 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-06 13:31:42 --> Final output sent to browser
DEBUG - 2013-12-06 13:31:42 --> Total execution time: 0.0460
DEBUG - 2013-12-06 13:31:54 --> Config Class Initialized
DEBUG - 2013-12-06 13:31:54 --> Hooks Class Initialized
DEBUG - 2013-12-06 13:31:54 --> Utf8 Class Initialized
DEBUG - 2013-12-06 13:31:54 --> UTF-8 Support Enabled
DEBUG - 2013-12-06 13:31:54 --> URI Class Initialized
DEBUG - 2013-12-06 13:31:54 --> Router Class Initialized
DEBUG - 2013-12-06 13:31:54 --> Output Class Initialized
DEBUG - 2013-12-06 13:31:54 --> Security Class Initialized
DEBUG - 2013-12-06 13:31:54 --> Input Class Initialized
DEBUG - 2013-12-06 13:31:54 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-06 13:31:54 --> Language Class Initialized
DEBUG - 2013-12-06 13:31:54 --> Loader Class Initialized
DEBUG - 2013-12-06 13:31:54 --> Helper loaded: form_helper
DEBUG - 2013-12-06 13:31:55 --> Helper loaded: url_helper
DEBUG - 2013-12-06 13:31:55 --> Helper loaded: html_helper
DEBUG - 2013-12-06 13:31:55 --> Database Driver Class Initialized
DEBUG - 2013-12-06 13:31:55 --> Session Class Initialized
DEBUG - 2013-12-06 13:31:55 --> Helper loaded: string_helper
DEBUG - 2013-12-06 13:31:55 --> Session routines successfully run
DEBUG - 2013-12-06 13:31:55 --> Form Validation Class Initialized
DEBUG - 2013-12-06 13:31:55 --> Controller Class Initialized
DEBUG - 2013-12-06 13:31:55 --> Model Class Initialized
DEBUG - 2013-12-06 13:31:55 --> Model Class Initialized
DEBUG - 2013-12-06 13:31:55 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-06 13:31:55 --> after session initialization................
INFO  - 2013-12-06 13:31:55 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 1 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-06 13:31:55 --> Final output sent to browser
DEBUG - 2013-12-06 13:31:55 --> Total execution time: 0.0580
