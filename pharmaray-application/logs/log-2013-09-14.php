<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2013-09-14 05:03:27 --> Config Class Initialized
DEBUG - 2013-09-14 05:03:27 --> Hooks Class Initialized
DEBUG - 2013-09-14 05:03:27 --> Utf8 Class Initialized
DEBUG - 2013-09-14 05:03:27 --> UTF-8 Support Enabled
DEBUG - 2013-09-14 05:03:27 --> URI Class Initialized
DEBUG - 2013-09-14 05:03:27 --> Router Class Initialized
DEBUG - 2013-09-14 05:03:27 --> Output Class Initialized
DEBUG - 2013-09-14 05:03:27 --> Security Class Initialized
DEBUG - 2013-09-14 05:03:27 --> Input Class Initialized
DEBUG - 2013-09-14 05:03:27 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-14 05:03:27 --> Language Class Initialized
DEBUG - 2013-09-14 05:03:27 --> Loader Class Initialized
DEBUG - 2013-09-14 05:03:27 --> Helper loaded: form_helper
DEBUG - 2013-09-14 05:03:27 --> Helper loaded: url_helper
DEBUG - 2013-09-14 05:03:27 --> Helper loaded: html_helper
DEBUG - 2013-09-14 05:03:27 --> Database Driver Class Initialized
ERROR - 2013-09-14 05:03:27 --> Severity: Notice  --> mysql_pconnect(): send of 5 bytes failed with errno=10053 An established connection was aborted by the software in your host machine.
 C:\xampp\htdocs\Pharmarays\pharmaray-system\database\drivers\mysql\mysql_driver.php 91
DEBUG - 2013-09-14 05:03:28 --> Session Class Initialized
DEBUG - 2013-09-14 05:03:28 --> Helper loaded: string_helper
DEBUG - 2013-09-14 05:03:28 --> A session cookie was not found.
DEBUG - 2013-09-14 05:03:28 --> Session routines successfully run
DEBUG - 2013-09-14 05:03:28 --> Form Validation Class Initialized
DEBUG - 2013-09-14 05:03:28 --> Controller Class Initialized
DEBUG - 2013-09-14 05:03:28 --> Model Class Initialized
DEBUG - 2013-09-14 05:03:28 --> Model Class Initialized
DEBUG - 2013-09-14 05:03:28 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-14 05:03:28 --> after session initialization................
INFO  - 2013-09-14 05:03:28 --> inside the retrieve ajax comment page.................
INFO  - 2013-09-14 05:03:28 --> inside retrieving comments member id and drug id is 3
INFO  - 2013-09-14 05:03:28 --> 10==============================10
INFO  - 2013-09-14 05:03:28 --> SELECT dc.id_drugcomment as id, dc.comment, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 3
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10, 10
INFO  - 2013-09-14 05:03:28 --> []
DEBUG - 2013-09-14 05:03:28 --> Final output sent to browser
DEBUG - 2013-09-14 05:03:28 --> Total execution time: 1.1581
DEBUG - 2013-09-14 05:03:34 --> Config Class Initialized
DEBUG - 2013-09-14 05:03:34 --> Hooks Class Initialized
DEBUG - 2013-09-14 05:03:34 --> Utf8 Class Initialized
DEBUG - 2013-09-14 05:03:34 --> UTF-8 Support Enabled
DEBUG - 2013-09-14 05:03:34 --> URI Class Initialized
DEBUG - 2013-09-14 05:03:34 --> Router Class Initialized
DEBUG - 2013-09-14 05:03:34 --> Output Class Initialized
DEBUG - 2013-09-14 05:03:34 --> Security Class Initialized
DEBUG - 2013-09-14 05:03:34 --> Input Class Initialized
DEBUG - 2013-09-14 05:03:34 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-14 05:03:34 --> Language Class Initialized
DEBUG - 2013-09-14 05:03:34 --> Loader Class Initialized
DEBUG - 2013-09-14 05:03:34 --> Helper loaded: form_helper
DEBUG - 2013-09-14 05:03:34 --> Helper loaded: url_helper
DEBUG - 2013-09-14 05:03:34 --> Helper loaded: html_helper
DEBUG - 2013-09-14 05:03:34 --> Database Driver Class Initialized
DEBUG - 2013-09-14 05:03:34 --> Session Class Initialized
DEBUG - 2013-09-14 05:03:34 --> Helper loaded: string_helper
DEBUG - 2013-09-14 05:03:34 --> Session routines successfully run
DEBUG - 2013-09-14 05:03:34 --> Form Validation Class Initialized
DEBUG - 2013-09-14 05:03:34 --> Controller Class Initialized
DEBUG - 2013-09-14 05:03:34 --> Model Class Initialized
DEBUG - 2013-09-14 05:03:34 --> Model Class Initialized
DEBUG - 2013-09-14 05:03:34 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-14 05:03:34 --> after session initialization................
DEBUG - 2013-09-14 05:03:34 --> Config Class Initialized
DEBUG - 2013-09-14 05:03:34 --> Hooks Class Initialized
DEBUG - 2013-09-14 05:03:34 --> Utf8 Class Initialized
DEBUG - 2013-09-14 05:03:34 --> UTF-8 Support Enabled
DEBUG - 2013-09-14 05:03:34 --> URI Class Initialized
DEBUG - 2013-09-14 05:03:34 --> Router Class Initialized
DEBUG - 2013-09-14 05:03:34 --> No URI present. Default controller set.
DEBUG - 2013-09-14 05:03:34 --> Output Class Initialized
DEBUG - 2013-09-14 05:03:34 --> Security Class Initialized
DEBUG - 2013-09-14 05:03:34 --> Input Class Initialized
DEBUG - 2013-09-14 05:03:34 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-14 05:03:34 --> Language Class Initialized
DEBUG - 2013-09-14 05:03:34 --> Loader Class Initialized
DEBUG - 2013-09-14 05:03:34 --> Helper loaded: form_helper
DEBUG - 2013-09-14 05:03:34 --> Helper loaded: url_helper
DEBUG - 2013-09-14 05:03:34 --> Helper loaded: html_helper
DEBUG - 2013-09-14 05:03:34 --> Database Driver Class Initialized
DEBUG - 2013-09-14 05:03:34 --> Session Class Initialized
DEBUG - 2013-09-14 05:03:34 --> Helper loaded: string_helper
DEBUG - 2013-09-14 05:03:34 --> A session cookie was not found.
DEBUG - 2013-09-14 05:03:34 --> Session routines successfully run
DEBUG - 2013-09-14 05:03:34 --> Form Validation Class Initialized
DEBUG - 2013-09-14 05:03:34 --> Controller Class Initialized
INFO  - 2013-09-14 05:03:34 --> the form message==>
INFO  - 2013-09-14 05:03:34 --> after the retrieving session list.................//////////
DEBUG - 2013-09-14 05:03:34 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-14 05:03:34 --> Final output sent to browser
DEBUG - 2013-09-14 05:03:34 --> Total execution time: 0.0650
DEBUG - 2013-09-14 05:09:59 --> Config Class Initialized
DEBUG - 2013-09-14 05:09:59 --> Hooks Class Initialized
DEBUG - 2013-09-14 05:09:59 --> Utf8 Class Initialized
DEBUG - 2013-09-14 05:09:59 --> UTF-8 Support Enabled
DEBUG - 2013-09-14 05:09:59 --> URI Class Initialized
DEBUG - 2013-09-14 05:09:59 --> Router Class Initialized
DEBUG - 2013-09-14 05:09:59 --> Output Class Initialized
DEBUG - 2013-09-14 05:09:59 --> Security Class Initialized
DEBUG - 2013-09-14 05:09:59 --> Input Class Initialized
DEBUG - 2013-09-14 05:09:59 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-14 05:09:59 --> Language Class Initialized
DEBUG - 2013-09-14 05:09:59 --> Loader Class Initialized
DEBUG - 2013-09-14 05:09:59 --> Helper loaded: form_helper
DEBUG - 2013-09-14 05:09:59 --> Helper loaded: url_helper
DEBUG - 2013-09-14 05:09:59 --> Helper loaded: html_helper
DEBUG - 2013-09-14 05:09:59 --> Database Driver Class Initialized
DEBUG - 2013-09-14 05:09:59 --> Session Class Initialized
DEBUG - 2013-09-14 05:09:59 --> Helper loaded: string_helper
DEBUG - 2013-09-14 05:09:59 --> Session routines successfully run
DEBUG - 2013-09-14 05:09:59 --> Form Validation Class Initialized
DEBUG - 2013-09-14 05:09:59 --> Controller Class Initialized
DEBUG - 2013-09-14 05:09:59 --> Model Class Initialized
DEBUG - 2013-09-14 05:09:59 --> Model Class Initialized
DEBUG - 2013-09-14 05:09:59 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-14 05:09:59 --> after session initialization................
INFO  - 2013-09-14 05:09:59 --> inside rays login auth.............
DEBUG - 2013-09-14 05:09:59 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-09-14 05:09:59 --> XSS Filtering completed
DEBUG - 2013-09-14 05:09:59 --> XSS Filtering completed
INFO  - 2013-09-14 05:09:59 --> before getting the relation of member............6
INFO  - 2013-09-14 05:09:59 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-09-14 05:09:59 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-09-14 05:09:59 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-14 05:09:59 --> inside retrieving vacancy for member
INFO  - 2013-09-14 05:09:59 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-09-14 05:09:59 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-09-14 05:09:59 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-09-14 05:09:59 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-14 05:09:59 --> News by drug_id ::::::::::===>SELECT `n`.`id_news` as id, `n`.`title` as news_title, `n`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `n`.`time_created`
INFO  - 2013-09-14 05:09:59 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `n`.`title` as newsletter_title, `n`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `n`.`time_created`
INFO  - 2013-09-14 05:09:59 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-09-14 05:09:59 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-09-14 05:09:59 -->  column name inside view is 0 column Data is Health Job Vacancies 
INFO  - 2013-09-14 05:09:59 -->  column name inside view is 1 column Data is Internship / Nysc centers
INFO  - 2013-09-14 05:09:59 -->  column name inside view is 2 column Data is Pharmacy Schools
INFO  - 2013-09-14 05:09:59 -->  column name inside view is 3 column Data is Pharmacy Vacancies
INFO  - 2013-09-14 05:09:59 -->  column name inside view is 0 column Data is Male Pharmacist
INFO  - 2013-09-14 05:09:59 -->  column name inside view is 1 column Data is Ordinary Member
INFO  - 2013-09-14 05:09:59 -->  column name inside view is 2 column Data is Male Nurse
INFO  - 2013-09-14 05:09:59 -->  column name inside view is 3 column Data is Student Member
INFO  - 2013-09-14 05:09:59 -->  column name inside view is 4 column Data is Nafdac Official
INFO  - 2013-09-14 05:09:59 -->  column name inside view is 5 column Data is Male Doctor
INFO  - 2013-09-14 05:09:59 -->  column name inside view is Child paracetamol dosages revised column Data is Until now, children aged one to six could be given up to 10ml of paracetamol-based products such as Calpol up to four times a day...
INFO  - 2013-09-14 05:09:59 -->  column name inside view is Paracetamol death: Desiree Phillips died after taking too many, inquest told column Data is A 20-year-old mother from Carmarthenshire died after taking too many paracetamol, an inquest has heard..
DEBUG - 2013-09-14 05:09:59 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-09-14 05:09:59 --> Final output sent to browser
DEBUG - 2013-09-14 05:09:59 --> Total execution time: 0.1410
DEBUG - 2013-09-14 05:10:00 --> Config Class Initialized
DEBUG - 2013-09-14 05:10:00 --> Hooks Class Initialized
DEBUG - 2013-09-14 05:10:00 --> Utf8 Class Initialized
DEBUG - 2013-09-14 05:10:00 --> UTF-8 Support Enabled
DEBUG - 2013-09-14 05:10:00 --> URI Class Initialized
DEBUG - 2013-09-14 05:10:00 --> Router Class Initialized
DEBUG - 2013-09-14 05:10:00 --> Output Class Initialized
DEBUG - 2013-09-14 05:10:00 --> Security Class Initialized
DEBUG - 2013-09-14 05:10:00 --> Input Class Initialized
DEBUG - 2013-09-14 05:10:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-14 05:10:00 --> Language Class Initialized
DEBUG - 2013-09-14 05:10:00 --> Loader Class Initialized
DEBUG - 2013-09-14 05:10:00 --> Helper loaded: form_helper
DEBUG - 2013-09-14 05:10:00 --> Helper loaded: url_helper
DEBUG - 2013-09-14 05:10:00 --> Helper loaded: html_helper
DEBUG - 2013-09-14 05:10:00 --> Database Driver Class Initialized
ERROR - 2013-09-14 05:10:00 --> Severity: Notice  --> mysql_pconnect(): send of 5 bytes failed with errno=10053 An established connection was aborted by the software in your host machine.
 C:\xampp\htdocs\Pharmarays\pharmaray-system\database\drivers\mysql\mysql_driver.php 91
DEBUG - 2013-09-14 05:10:01 --> Session Class Initialized
DEBUG - 2013-09-14 05:10:01 --> Helper loaded: string_helper
DEBUG - 2013-09-14 05:10:01 --> Session routines successfully run
DEBUG - 2013-09-14 05:10:01 --> Form Validation Class Initialized
DEBUG - 2013-09-14 05:10:01 --> Controller Class Initialized
DEBUG - 2013-09-14 05:10:01 --> Model Class Initialized
DEBUG - 2013-09-14 05:10:01 --> Model Class Initialized
DEBUG - 2013-09-14 05:10:01 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-14 05:10:01 --> after session initialization................
ERROR - 2013-09-14 05:10:01 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-09-14 05:10:07 --> Config Class Initialized
DEBUG - 2013-09-14 05:10:07 --> Hooks Class Initialized
DEBUG - 2013-09-14 05:10:07 --> Utf8 Class Initialized
DEBUG - 2013-09-14 05:10:07 --> UTF-8 Support Enabled
DEBUG - 2013-09-14 05:10:07 --> URI Class Initialized
DEBUG - 2013-09-14 05:10:07 --> Router Class Initialized
DEBUG - 2013-09-14 05:10:07 --> Output Class Initialized
DEBUG - 2013-09-14 05:10:07 --> Security Class Initialized
DEBUG - 2013-09-14 05:10:07 --> Input Class Initialized
DEBUG - 2013-09-14 05:10:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-14 05:10:07 --> Language Class Initialized
DEBUG - 2013-09-14 05:10:07 --> Loader Class Initialized
DEBUG - 2013-09-14 05:10:07 --> Helper loaded: form_helper
DEBUG - 2013-09-14 05:10:07 --> Helper loaded: url_helper
DEBUG - 2013-09-14 05:10:07 --> Helper loaded: html_helper
DEBUG - 2013-09-14 05:10:07 --> Database Driver Class Initialized
DEBUG - 2013-09-14 05:10:07 --> Session Class Initialized
DEBUG - 2013-09-14 05:10:07 --> Helper loaded: string_helper
DEBUG - 2013-09-14 05:10:07 --> Session routines successfully run
DEBUG - 2013-09-14 05:10:07 --> Form Validation Class Initialized
DEBUG - 2013-09-14 05:10:07 --> Controller Class Initialized
DEBUG - 2013-09-14 05:10:07 --> Model Class Initialized
DEBUG - 2013-09-14 05:10:07 --> Model Class Initialized
DEBUG - 2013-09-14 05:10:07 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-14 05:10:07 --> after session initialization................
INFO  - 2013-09-14 05:10:07 --> inside the auto suggest page.................
INFO  - 2013-09-14 05:10:07 --> after the list array.................
INFO  - 2013-09-14 05:10:07 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%am%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-14 05:10:07 --> after retrieving the data from db.................
INFO  - 2013-09-14 05:10:07 --> looping.................
DEBUG - 2013-09-14 05:10:07 --> Final output sent to browser
DEBUG - 2013-09-14 05:10:07 --> Total execution time: 0.0610
DEBUG - 2013-09-14 05:10:07 --> Config Class Initialized
DEBUG - 2013-09-14 05:10:07 --> Hooks Class Initialized
DEBUG - 2013-09-14 05:10:07 --> Utf8 Class Initialized
DEBUG - 2013-09-14 05:10:07 --> UTF-8 Support Enabled
DEBUG - 2013-09-14 05:10:07 --> URI Class Initialized
DEBUG - 2013-09-14 05:10:07 --> Router Class Initialized
DEBUG - 2013-09-14 05:10:07 --> Output Class Initialized
DEBUG - 2013-09-14 05:10:07 --> Security Class Initialized
DEBUG - 2013-09-14 05:10:07 --> Input Class Initialized
DEBUG - 2013-09-14 05:10:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-14 05:10:07 --> Language Class Initialized
DEBUG - 2013-09-14 05:10:07 --> Loader Class Initialized
DEBUG - 2013-09-14 05:10:07 --> Helper loaded: form_helper
DEBUG - 2013-09-14 05:10:07 --> Helper loaded: url_helper
DEBUG - 2013-09-14 05:10:07 --> Helper loaded: html_helper
DEBUG - 2013-09-14 05:10:07 --> Database Driver Class Initialized
DEBUG - 2013-09-14 05:10:07 --> Session Class Initialized
DEBUG - 2013-09-14 05:10:07 --> Helper loaded: string_helper
DEBUG - 2013-09-14 05:10:07 --> Session routines successfully run
DEBUG - 2013-09-14 05:10:07 --> Form Validation Class Initialized
DEBUG - 2013-09-14 05:10:07 --> Controller Class Initialized
DEBUG - 2013-09-14 05:10:07 --> Model Class Initialized
DEBUG - 2013-09-14 05:10:07 --> Model Class Initialized
DEBUG - 2013-09-14 05:10:07 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-14 05:10:07 --> after session initialization................
INFO  - 2013-09-14 05:10:07 --> inside the auto suggest page.................
INFO  - 2013-09-14 05:10:07 --> after the list array.................
INFO  - 2013-09-14 05:10:07 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%am%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-14 05:10:07 --> after retrieving the data from db.................
INFO  - 2013-09-14 05:10:07 --> looping.................
DEBUG - 2013-09-14 05:10:07 --> Final output sent to browser
DEBUG - 2013-09-14 05:10:07 --> Total execution time: 0.0540
DEBUG - 2013-09-14 05:10:07 --> Config Class Initialized
DEBUG - 2013-09-14 05:10:07 --> Hooks Class Initialized
DEBUG - 2013-09-14 05:10:07 --> Utf8 Class Initialized
DEBUG - 2013-09-14 05:10:07 --> UTF-8 Support Enabled
DEBUG - 2013-09-14 05:10:07 --> URI Class Initialized
DEBUG - 2013-09-14 05:10:07 --> Router Class Initialized
DEBUG - 2013-09-14 05:10:07 --> Output Class Initialized
DEBUG - 2013-09-14 05:10:07 --> Security Class Initialized
DEBUG - 2013-09-14 05:10:07 --> Input Class Initialized
DEBUG - 2013-09-14 05:10:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-14 05:10:07 --> Language Class Initialized
DEBUG - 2013-09-14 05:10:07 --> Loader Class Initialized
DEBUG - 2013-09-14 05:10:07 --> Helper loaded: form_helper
DEBUG - 2013-09-14 05:10:07 --> Helper loaded: url_helper
DEBUG - 2013-09-14 05:10:07 --> Helper loaded: html_helper
DEBUG - 2013-09-14 05:10:07 --> Database Driver Class Initialized
DEBUG - 2013-09-14 05:10:07 --> Session Class Initialized
DEBUG - 2013-09-14 05:10:07 --> Helper loaded: string_helper
DEBUG - 2013-09-14 05:10:07 --> Session routines successfully run
DEBUG - 2013-09-14 05:10:07 --> Form Validation Class Initialized
DEBUG - 2013-09-14 05:10:07 --> Controller Class Initialized
DEBUG - 2013-09-14 05:10:07 --> Model Class Initialized
DEBUG - 2013-09-14 05:10:07 --> Model Class Initialized
DEBUG - 2013-09-14 05:10:07 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-14 05:10:07 --> after session initialization................
INFO  - 2013-09-14 05:10:07 --> inside the auto suggest page.................
INFO  - 2013-09-14 05:10:07 --> after the list array.................
INFO  - 2013-09-14 05:10:07 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%ama%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-14 05:10:07 --> after retrieving the data from db.................
INFO  - 2013-09-14 05:10:07 --> looping.................
DEBUG - 2013-09-14 05:10:07 --> Final output sent to browser
DEBUG - 2013-09-14 05:10:07 --> Total execution time: 0.0600
DEBUG - 2013-09-14 05:10:08 --> Config Class Initialized
DEBUG - 2013-09-14 05:10:08 --> Hooks Class Initialized
DEBUG - 2013-09-14 05:10:08 --> Utf8 Class Initialized
DEBUG - 2013-09-14 05:10:08 --> UTF-8 Support Enabled
DEBUG - 2013-09-14 05:10:08 --> URI Class Initialized
DEBUG - 2013-09-14 05:10:08 --> Router Class Initialized
DEBUG - 2013-09-14 05:10:08 --> Output Class Initialized
DEBUG - 2013-09-14 05:10:08 --> Security Class Initialized
DEBUG - 2013-09-14 05:10:08 --> Input Class Initialized
DEBUG - 2013-09-14 05:10:08 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-14 05:10:08 --> Language Class Initialized
DEBUG - 2013-09-14 05:10:08 --> Loader Class Initialized
DEBUG - 2013-09-14 05:10:08 --> Helper loaded: form_helper
DEBUG - 2013-09-14 05:10:08 --> Helper loaded: url_helper
DEBUG - 2013-09-14 05:10:08 --> Helper loaded: html_helper
DEBUG - 2013-09-14 05:10:08 --> Database Driver Class Initialized
DEBUG - 2013-09-14 05:10:08 --> Session Class Initialized
DEBUG - 2013-09-14 05:10:08 --> Helper loaded: string_helper
DEBUG - 2013-09-14 05:10:08 --> Session routines successfully run
DEBUG - 2013-09-14 05:10:08 --> Form Validation Class Initialized
DEBUG - 2013-09-14 05:10:08 --> Controller Class Initialized
DEBUG - 2013-09-14 05:10:08 --> Model Class Initialized
DEBUG - 2013-09-14 05:10:08 --> Model Class Initialized
DEBUG - 2013-09-14 05:10:08 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-14 05:10:08 --> after session initialization................
INFO  - 2013-09-14 05:10:08 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '2'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-14 05:10:08 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-14 05:10:08 --> 5==============================0
INFO  - 2013-09-14 05:10:08 --> SELECT dc.id_drugcomment as id, dc.comment, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-14 05:10:08 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-09-14 05:10:08 --> News by drug_id ::::::::::===>SELECT `n`.`id_news` as id, `n`.`title` as news_title, `n`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '2'
ORDER BY `n`.`time_created`
INFO  - 2013-09-14 05:10:08 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `n`.`title` as newsletter_title, `n`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '2'
ORDER BY `n`.`time_created`
DEBUG - 2013-09-14 05:10:08 --> Final output sent to browser
DEBUG - 2013-09-14 05:10:08 --> Total execution time: 0.0740
DEBUG - 2013-09-14 05:10:53 --> Config Class Initialized
DEBUG - 2013-09-14 05:10:53 --> Hooks Class Initialized
DEBUG - 2013-09-14 05:10:53 --> Utf8 Class Initialized
DEBUG - 2013-09-14 05:10:53 --> UTF-8 Support Enabled
DEBUG - 2013-09-14 05:10:53 --> URI Class Initialized
DEBUG - 2013-09-14 05:10:53 --> Router Class Initialized
DEBUG - 2013-09-14 05:10:53 --> Output Class Initialized
DEBUG - 2013-09-14 05:10:53 --> Security Class Initialized
DEBUG - 2013-09-14 05:10:53 --> Input Class Initialized
DEBUG - 2013-09-14 05:10:53 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-14 05:10:53 --> Language Class Initialized
DEBUG - 2013-09-14 05:10:53 --> Loader Class Initialized
DEBUG - 2013-09-14 05:10:53 --> Helper loaded: form_helper
DEBUG - 2013-09-14 05:10:53 --> Helper loaded: url_helper
DEBUG - 2013-09-14 05:10:53 --> Helper loaded: html_helper
DEBUG - 2013-09-14 05:10:53 --> Database Driver Class Initialized
DEBUG - 2013-09-14 05:10:53 --> Session Class Initialized
DEBUG - 2013-09-14 05:10:53 --> Helper loaded: string_helper
DEBUG - 2013-09-14 05:10:53 --> Session routines successfully run
DEBUG - 2013-09-14 05:10:53 --> Form Validation Class Initialized
DEBUG - 2013-09-14 05:10:53 --> Controller Class Initialized
DEBUG - 2013-09-14 05:10:53 --> Model Class Initialized
DEBUG - 2013-09-14 05:10:53 --> Model Class Initialized
DEBUG - 2013-09-14 05:10:53 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-14 05:10:53 --> after session initialization................
INFO  - 2013-09-14 05:10:53 --> inside rays login auth.............
DEBUG - 2013-09-14 05:10:53 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-09-14 05:10:53 --> XSS Filtering completed
DEBUG - 2013-09-14 05:10:53 --> XSS Filtering completed
INFO  - 2013-09-14 05:10:53 --> before getting the relation of member............6
INFO  - 2013-09-14 05:10:53 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-09-14 05:10:53 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-09-14 05:10:53 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-14 05:10:53 --> inside retrieving vacancy for member
INFO  - 2013-09-14 05:10:53 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-09-14 05:10:53 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-09-14 05:10:53 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-09-14 05:10:53 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-14 05:10:53 --> News by drug_id ::::::::::===>SELECT `n`.`id_news` as id, `n`.`title` as news_title, `n`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `n`.`time_created`
INFO  - 2013-09-14 05:10:53 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `n`.`title` as newsletter_title, `n`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `n`.`time_created`
INFO  - 2013-09-14 05:10:53 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-09-14 05:10:53 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-09-14 05:10:53 -->  column name inside view is 0 column Data is Health Job Vacancies 
INFO  - 2013-09-14 05:10:53 -->  column name inside view is 1 column Data is Internship / Nysc centers
INFO  - 2013-09-14 05:10:53 -->  column name inside view is 2 column Data is Pharmacy Schools
INFO  - 2013-09-14 05:10:53 -->  column name inside view is 3 column Data is Pharmacy Vacancies
INFO  - 2013-09-14 05:10:53 -->  column name inside view is 0 column Data is Male Pharmacist
INFO  - 2013-09-14 05:10:53 -->  column name inside view is 1 column Data is Ordinary Member
INFO  - 2013-09-14 05:10:53 -->  column name inside view is 2 column Data is Male Nurse
INFO  - 2013-09-14 05:10:53 -->  column name inside view is 3 column Data is Student Member
INFO  - 2013-09-14 05:10:53 -->  column name inside view is 4 column Data is Nafdac Official
INFO  - 2013-09-14 05:10:53 -->  column name inside view is 5 column Data is Male Doctor
INFO  - 2013-09-14 05:10:53 -->  column name inside view is Child paracetamol dosages revised column Data is Until now, children aged one to six could be given up to 10ml of paracetamol-based products such as Calpol up to four times a day...
INFO  - 2013-09-14 05:10:53 -->  column name inside view is Paracetamol death: Desiree Phillips died after taking too many, inquest told column Data is A 20-year-old mother from Carmarthenshire died after taking too many paracetamol, an inquest has heard..
DEBUG - 2013-09-14 05:10:53 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-09-14 05:10:53 --> Final output sent to browser
DEBUG - 2013-09-14 05:10:53 --> Total execution time: 0.0950
DEBUG - 2013-09-14 05:10:54 --> Config Class Initialized
DEBUG - 2013-09-14 05:10:54 --> Hooks Class Initialized
DEBUG - 2013-09-14 05:10:54 --> Utf8 Class Initialized
DEBUG - 2013-09-14 05:10:54 --> UTF-8 Support Enabled
DEBUG - 2013-09-14 05:10:54 --> URI Class Initialized
DEBUG - 2013-09-14 05:10:54 --> Router Class Initialized
DEBUG - 2013-09-14 05:10:54 --> Output Class Initialized
DEBUG - 2013-09-14 05:10:54 --> Security Class Initialized
DEBUG - 2013-09-14 05:10:54 --> Input Class Initialized
DEBUG - 2013-09-14 05:10:54 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-14 05:10:54 --> Language Class Initialized
DEBUG - 2013-09-14 05:10:54 --> Loader Class Initialized
DEBUG - 2013-09-14 05:10:54 --> Helper loaded: form_helper
DEBUG - 2013-09-14 05:10:54 --> Helper loaded: url_helper
DEBUG - 2013-09-14 05:10:54 --> Helper loaded: html_helper
DEBUG - 2013-09-14 05:10:54 --> Database Driver Class Initialized
ERROR - 2013-09-14 05:10:54 --> Severity: Notice  --> mysql_pconnect(): send of 5 bytes failed with errno=10053 An established connection was aborted by the software in your host machine.
 C:\xampp\htdocs\Pharmarays\pharmaray-system\database\drivers\mysql\mysql_driver.php 91
DEBUG - 2013-09-14 05:10:55 --> Session Class Initialized
DEBUG - 2013-09-14 05:10:55 --> Helper loaded: string_helper
DEBUG - 2013-09-14 05:10:55 --> Session routines successfully run
DEBUG - 2013-09-14 05:10:55 --> Form Validation Class Initialized
DEBUG - 2013-09-14 05:10:55 --> Controller Class Initialized
DEBUG - 2013-09-14 05:10:55 --> Model Class Initialized
DEBUG - 2013-09-14 05:10:55 --> Model Class Initialized
DEBUG - 2013-09-14 05:10:55 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-14 05:10:55 --> after session initialization................
ERROR - 2013-09-14 05:10:55 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-09-14 05:10:57 --> Config Class Initialized
DEBUG - 2013-09-14 05:10:57 --> Hooks Class Initialized
DEBUG - 2013-09-14 05:10:57 --> Utf8 Class Initialized
DEBUG - 2013-09-14 05:10:57 --> UTF-8 Support Enabled
DEBUG - 2013-09-14 05:10:57 --> URI Class Initialized
DEBUG - 2013-09-14 05:10:57 --> Router Class Initialized
DEBUG - 2013-09-14 05:10:57 --> Output Class Initialized
DEBUG - 2013-09-14 05:10:57 --> Security Class Initialized
DEBUG - 2013-09-14 05:10:57 --> Input Class Initialized
DEBUG - 2013-09-14 05:10:57 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-14 05:10:57 --> Language Class Initialized
DEBUG - 2013-09-14 05:10:57 --> Loader Class Initialized
DEBUG - 2013-09-14 05:10:57 --> Helper loaded: form_helper
DEBUG - 2013-09-14 05:10:57 --> Helper loaded: url_helper
DEBUG - 2013-09-14 05:10:57 --> Helper loaded: html_helper
DEBUG - 2013-09-14 05:10:57 --> Database Driver Class Initialized
DEBUG - 2013-09-14 05:10:57 --> Session Class Initialized
DEBUG - 2013-09-14 05:10:57 --> Helper loaded: string_helper
DEBUG - 2013-09-14 05:10:57 --> Session routines successfully run
DEBUG - 2013-09-14 05:10:57 --> Form Validation Class Initialized
DEBUG - 2013-09-14 05:10:57 --> Controller Class Initialized
DEBUG - 2013-09-14 05:10:57 --> Model Class Initialized
DEBUG - 2013-09-14 05:10:57 --> Model Class Initialized
DEBUG - 2013-09-14 05:10:57 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-14 05:10:57 --> after session initialization................
DEBUG - 2013-09-14 05:10:57 --> Config Class Initialized
DEBUG - 2013-09-14 05:10:57 --> Hooks Class Initialized
DEBUG - 2013-09-14 05:10:57 --> Utf8 Class Initialized
DEBUG - 2013-09-14 05:10:57 --> UTF-8 Support Enabled
DEBUG - 2013-09-14 05:10:57 --> URI Class Initialized
DEBUG - 2013-09-14 05:10:57 --> Router Class Initialized
DEBUG - 2013-09-14 05:10:57 --> No URI present. Default controller set.
DEBUG - 2013-09-14 05:10:57 --> Output Class Initialized
DEBUG - 2013-09-14 05:10:57 --> Security Class Initialized
DEBUG - 2013-09-14 05:10:57 --> Input Class Initialized
DEBUG - 2013-09-14 05:10:57 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-14 05:10:57 --> Language Class Initialized
DEBUG - 2013-09-14 05:10:57 --> Loader Class Initialized
DEBUG - 2013-09-14 05:10:57 --> Helper loaded: form_helper
DEBUG - 2013-09-14 05:10:57 --> Helper loaded: url_helper
DEBUG - 2013-09-14 05:10:57 --> Helper loaded: html_helper
DEBUG - 2013-09-14 05:10:57 --> Database Driver Class Initialized
DEBUG - 2013-09-14 05:10:57 --> Session Class Initialized
DEBUG - 2013-09-14 05:10:57 --> Helper loaded: string_helper
DEBUG - 2013-09-14 05:10:57 --> A session cookie was not found.
DEBUG - 2013-09-14 05:10:57 --> Session routines successfully run
DEBUG - 2013-09-14 05:10:57 --> Form Validation Class Initialized
DEBUG - 2013-09-14 05:10:57 --> Controller Class Initialized
INFO  - 2013-09-14 05:10:57 --> the form message==>
INFO  - 2013-09-14 05:10:57 --> after the retrieving session list.................//////////
DEBUG - 2013-09-14 05:10:57 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-14 05:10:57 --> Final output sent to browser
DEBUG - 2013-09-14 05:10:57 --> Total execution time: 0.0490
DEBUG - 2013-09-14 05:11:06 --> Config Class Initialized
DEBUG - 2013-09-14 05:11:06 --> Hooks Class Initialized
DEBUG - 2013-09-14 05:11:06 --> Utf8 Class Initialized
DEBUG - 2013-09-14 05:11:06 --> UTF-8 Support Enabled
DEBUG - 2013-09-14 05:11:06 --> URI Class Initialized
DEBUG - 2013-09-14 05:11:06 --> Router Class Initialized
DEBUG - 2013-09-14 05:11:06 --> Output Class Initialized
DEBUG - 2013-09-14 05:11:06 --> Security Class Initialized
DEBUG - 2013-09-14 05:11:06 --> Input Class Initialized
DEBUG - 2013-09-14 05:11:06 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-14 05:11:06 --> Language Class Initialized
DEBUG - 2013-09-14 05:11:06 --> Loader Class Initialized
DEBUG - 2013-09-14 05:11:06 --> Helper loaded: form_helper
DEBUG - 2013-09-14 05:11:06 --> Helper loaded: url_helper
DEBUG - 2013-09-14 05:11:06 --> Helper loaded: html_helper
DEBUG - 2013-09-14 05:11:06 --> Database Driver Class Initialized
DEBUG - 2013-09-14 05:11:06 --> Session Class Initialized
DEBUG - 2013-09-14 05:11:06 --> Helper loaded: string_helper
DEBUG - 2013-09-14 05:11:06 --> Session routines successfully run
DEBUG - 2013-09-14 05:11:06 --> Form Validation Class Initialized
DEBUG - 2013-09-14 05:11:06 --> Controller Class Initialized
DEBUG - 2013-09-14 05:11:06 --> Model Class Initialized
DEBUG - 2013-09-14 05:11:06 --> Model Class Initialized
DEBUG - 2013-09-14 05:11:06 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-14 05:11:06 --> after session initialization................
INFO  - 2013-09-14 05:11:06 --> inside rays login auth.............
DEBUG - 2013-09-14 05:11:06 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-09-14 05:11:06 --> XSS Filtering completed
DEBUG - 2013-09-14 05:11:06 --> XSS Filtering completed
INFO  - 2013-09-14 05:11:06 --> before getting the relation of member............6
INFO  - 2013-09-14 05:11:06 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-09-14 05:11:06 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-09-14 05:11:06 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-14 05:11:06 --> inside retrieving vacancy for member
INFO  - 2013-09-14 05:11:06 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-09-14 05:11:06 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-09-14 05:11:06 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-09-14 05:11:06 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-14 05:11:06 --> News by drug_id ::::::::::===>SELECT `n`.`id_news` as id, `n`.`title` as news_title, `n`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `n`.`time_created`
INFO  - 2013-09-14 05:11:06 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `n`.`title` as newsletter_title, `n`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `n`.`time_created`
INFO  - 2013-09-14 05:11:06 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-09-14 05:11:06 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-09-14 05:11:06 -->  column name inside view is 0 column Data is Health Job Vacancies 
INFO  - 2013-09-14 05:11:06 -->  column name inside view is 1 column Data is Internship / Nysc centers
INFO  - 2013-09-14 05:11:06 -->  column name inside view is 2 column Data is Pharmacy Schools
INFO  - 2013-09-14 05:11:06 -->  column name inside view is 3 column Data is Pharmacy Vacancies
INFO  - 2013-09-14 05:11:06 -->  column name inside view is 0 column Data is Male Pharmacist
INFO  - 2013-09-14 05:11:06 -->  column name inside view is 1 column Data is Ordinary Member
INFO  - 2013-09-14 05:11:06 -->  column name inside view is 2 column Data is Male Nurse
INFO  - 2013-09-14 05:11:06 -->  column name inside view is 3 column Data is Student Member
INFO  - 2013-09-14 05:11:06 -->  column name inside view is 4 column Data is Nafdac Official
INFO  - 2013-09-14 05:11:06 -->  column name inside view is 5 column Data is Male Doctor
INFO  - 2013-09-14 05:11:06 -->  column name inside view is Child paracetamol dosages revised column Data is Until now, children aged one to six could be given up to 10ml of paracetamol-based products such as Calpol up to four times a day...
INFO  - 2013-09-14 05:11:06 -->  column name inside view is Paracetamol death: Desiree Phillips died after taking too many, inquest told column Data is A 20-year-old mother from Carmarthenshire died after taking too many paracetamol, an inquest has heard..
DEBUG - 2013-09-14 05:11:06 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-09-14 05:11:06 --> Final output sent to browser
DEBUG - 2013-09-14 05:11:06 --> Total execution time: 0.0930
DEBUG - 2013-09-14 05:11:07 --> Config Class Initialized
DEBUG - 2013-09-14 05:11:07 --> Hooks Class Initialized
DEBUG - 2013-09-14 05:11:07 --> Utf8 Class Initialized
DEBUG - 2013-09-14 05:11:07 --> UTF-8 Support Enabled
DEBUG - 2013-09-14 05:11:07 --> URI Class Initialized
DEBUG - 2013-09-14 05:11:07 --> Router Class Initialized
DEBUG - 2013-09-14 05:11:07 --> Output Class Initialized
DEBUG - 2013-09-14 05:11:07 --> Security Class Initialized
DEBUG - 2013-09-14 05:11:07 --> Input Class Initialized
DEBUG - 2013-09-14 05:11:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-14 05:11:07 --> Language Class Initialized
DEBUG - 2013-09-14 05:11:07 --> Loader Class Initialized
DEBUG - 2013-09-14 05:11:07 --> Helper loaded: form_helper
DEBUG - 2013-09-14 05:11:07 --> Helper loaded: url_helper
DEBUG - 2013-09-14 05:11:07 --> Helper loaded: html_helper
DEBUG - 2013-09-14 05:11:07 --> Database Driver Class Initialized
DEBUG - 2013-09-14 05:11:07 --> Session Class Initialized
DEBUG - 2013-09-14 05:11:07 --> Helper loaded: string_helper
DEBUG - 2013-09-14 05:11:07 --> Session routines successfully run
DEBUG - 2013-09-14 05:11:07 --> Form Validation Class Initialized
DEBUG - 2013-09-14 05:11:07 --> Controller Class Initialized
DEBUG - 2013-09-14 05:11:07 --> Model Class Initialized
DEBUG - 2013-09-14 05:11:07 --> Model Class Initialized
DEBUG - 2013-09-14 05:11:07 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-14 05:11:07 --> after session initialization................
ERROR - 2013-09-14 05:11:07 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-09-14 05:11:07 --> Config Class Initialized
DEBUG - 2013-09-14 05:11:07 --> Hooks Class Initialized
DEBUG - 2013-09-14 05:11:07 --> Utf8 Class Initialized
DEBUG - 2013-09-14 05:11:07 --> UTF-8 Support Enabled
DEBUG - 2013-09-14 05:11:07 --> URI Class Initialized
DEBUG - 2013-09-14 05:11:07 --> Router Class Initialized
DEBUG - 2013-09-14 05:11:07 --> Output Class Initialized
DEBUG - 2013-09-14 05:11:07 --> Security Class Initialized
DEBUG - 2013-09-14 05:11:07 --> Input Class Initialized
DEBUG - 2013-09-14 05:11:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-14 05:11:07 --> Language Class Initialized
DEBUG - 2013-09-14 05:11:07 --> Loader Class Initialized
DEBUG - 2013-09-14 05:11:07 --> Helper loaded: form_helper
DEBUG - 2013-09-14 05:11:07 --> Helper loaded: url_helper
DEBUG - 2013-09-14 05:11:07 --> Helper loaded: html_helper
DEBUG - 2013-09-14 05:11:07 --> Database Driver Class Initialized
DEBUG - 2013-09-14 05:11:07 --> Session Class Initialized
DEBUG - 2013-09-14 05:11:07 --> Helper loaded: string_helper
DEBUG - 2013-09-14 05:11:07 --> Session routines successfully run
DEBUG - 2013-09-14 05:11:07 --> Form Validation Class Initialized
DEBUG - 2013-09-14 05:11:07 --> Controller Class Initialized
DEBUG - 2013-09-14 05:11:07 --> Model Class Initialized
DEBUG - 2013-09-14 05:11:07 --> Model Class Initialized
DEBUG - 2013-09-14 05:11:07 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-14 05:11:07 --> after session initialization................
ERROR - 2013-09-14 05:11:07 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-09-14 05:52:41 --> Config Class Initialized
DEBUG - 2013-09-14 05:52:41 --> Hooks Class Initialized
DEBUG - 2013-09-14 05:52:41 --> Utf8 Class Initialized
DEBUG - 2013-09-14 05:52:41 --> UTF-8 Support Enabled
DEBUG - 2013-09-14 05:52:41 --> URI Class Initialized
DEBUG - 2013-09-14 05:52:41 --> Router Class Initialized
DEBUG - 2013-09-14 05:52:41 --> Output Class Initialized
DEBUG - 2013-09-14 05:52:41 --> Security Class Initialized
DEBUG - 2013-09-14 05:52:41 --> Input Class Initialized
DEBUG - 2013-09-14 05:52:41 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-14 05:52:41 --> Language Class Initialized
DEBUG - 2013-09-14 05:52:41 --> Loader Class Initialized
DEBUG - 2013-09-14 05:52:41 --> Helper loaded: form_helper
DEBUG - 2013-09-14 05:52:41 --> Helper loaded: url_helper
DEBUG - 2013-09-14 05:52:41 --> Helper loaded: html_helper
DEBUG - 2013-09-14 05:52:41 --> Database Driver Class Initialized
DEBUG - 2013-09-14 05:52:41 --> Session Class Initialized
DEBUG - 2013-09-14 05:52:41 --> Helper loaded: string_helper
DEBUG - 2013-09-14 05:52:41 --> Session routines successfully run
DEBUG - 2013-09-14 05:52:41 --> Form Validation Class Initialized
DEBUG - 2013-09-14 05:52:41 --> Controller Class Initialized
DEBUG - 2013-09-14 05:52:41 --> Model Class Initialized
DEBUG - 2013-09-14 05:52:41 --> Model Class Initialized
DEBUG - 2013-09-14 05:52:41 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-14 05:52:41 --> after session initialization................
INFO  - 2013-09-14 05:52:41 --> inside the retrieve ajax comment page.................
INFO  - 2013-09-14 05:52:41 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-09-14 05:52:41 --> 10==============================10
INFO  - 2013-09-14 05:52:41 --> SELECT dc.id_drugcomment as id, dc.comment, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10, 10
INFO  - 2013-09-14 05:52:41 --> [{"id":"51","comment":"this is just what i need.....good sleep","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"50","comment":"lets see if this is applicable too","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"49","comment":"this should just work as planned.","membername":"onwuzu melford","membertypeimage":"profilem"},{"id":"48","comment":"OGHENE DOH!!!!","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"47","comment":"hehehe....una dey sleep ni","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"46","comment":"this is what am talking about","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"45","comment":"this is what am talking about","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"43","comment":"lets go there this time","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"42","comment":"alright...try again","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"41","comment":"well think about it pal...","membername":"Elvis onuorah","membertypeimage":"profilem1"}]
DEBUG - 2013-09-14 05:52:41 --> Final output sent to browser
DEBUG - 2013-09-14 05:52:41 --> Total execution time: 0.0650
DEBUG - 2013-09-14 05:52:42 --> Config Class Initialized
DEBUG - 2013-09-14 05:52:42 --> Hooks Class Initialized
DEBUG - 2013-09-14 05:52:42 --> Utf8 Class Initialized
DEBUG - 2013-09-14 05:52:42 --> UTF-8 Support Enabled
DEBUG - 2013-09-14 05:52:42 --> URI Class Initialized
DEBUG - 2013-09-14 05:52:42 --> Router Class Initialized
DEBUG - 2013-09-14 05:52:42 --> Output Class Initialized
DEBUG - 2013-09-14 05:52:42 --> Security Class Initialized
DEBUG - 2013-09-14 05:52:42 --> Input Class Initialized
DEBUG - 2013-09-14 05:52:42 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-14 05:52:42 --> Language Class Initialized
DEBUG - 2013-09-14 05:52:42 --> Loader Class Initialized
DEBUG - 2013-09-14 05:52:42 --> Helper loaded: form_helper
DEBUG - 2013-09-14 05:52:42 --> Helper loaded: url_helper
DEBUG - 2013-09-14 05:52:42 --> Helper loaded: html_helper
DEBUG - 2013-09-14 05:52:42 --> Database Driver Class Initialized
DEBUG - 2013-09-14 05:52:42 --> Session Class Initialized
DEBUG - 2013-09-14 05:52:42 --> Helper loaded: string_helper
DEBUG - 2013-09-14 05:52:42 --> Session routines successfully run
DEBUG - 2013-09-14 05:52:42 --> Form Validation Class Initialized
DEBUG - 2013-09-14 05:52:42 --> Controller Class Initialized
DEBUG - 2013-09-14 05:52:42 --> Model Class Initialized
DEBUG - 2013-09-14 05:52:42 --> Model Class Initialized
DEBUG - 2013-09-14 05:52:42 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-14 05:52:42 --> after session initialization................
INFO  - 2013-09-14 05:52:42 --> inside the retrieve ajax comment page.................
INFO  - 2013-09-14 05:52:42 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-09-14 05:52:42 --> 10==============================20
INFO  - 2013-09-14 05:52:42 --> SELECT dc.id_drugcomment as id, dc.comment, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 20, 10
INFO  - 2013-09-14 05:52:42 --> [{"id":"40","comment":"hullos again","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"38","comment":"hellos","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"37","comment":"what are we saying na","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"36","comment":"ok i think its ok now","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"35","comment":"i am here now....image display","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"34","comment":"kachi man","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"33","comment":"lets try one more time","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"32","comment":"this is jst the beginning","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"31","comment":"retrieved it now.....","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"30","comment":"we are close....","membername":"Elvis onuorah","membertypeimage":"profilem1"}]
DEBUG - 2013-09-14 05:52:42 --> Final output sent to browser
DEBUG - 2013-09-14 05:52:42 --> Total execution time: 0.0650
DEBUG - 2013-09-14 05:52:46 --> Config Class Initialized
DEBUG - 2013-09-14 05:52:46 --> Hooks Class Initialized
DEBUG - 2013-09-14 05:52:46 --> Utf8 Class Initialized
DEBUG - 2013-09-14 05:52:46 --> UTF-8 Support Enabled
DEBUG - 2013-09-14 05:52:46 --> URI Class Initialized
DEBUG - 2013-09-14 05:52:46 --> Router Class Initialized
DEBUG - 2013-09-14 05:52:46 --> Output Class Initialized
DEBUG - 2013-09-14 05:52:46 --> Security Class Initialized
DEBUG - 2013-09-14 05:52:46 --> Input Class Initialized
DEBUG - 2013-09-14 05:52:46 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-14 05:52:46 --> Language Class Initialized
DEBUG - 2013-09-14 05:52:46 --> Loader Class Initialized
DEBUG - 2013-09-14 05:52:46 --> Helper loaded: form_helper
DEBUG - 2013-09-14 05:52:46 --> Helper loaded: url_helper
DEBUG - 2013-09-14 05:52:46 --> Helper loaded: html_helper
DEBUG - 2013-09-14 05:52:46 --> Database Driver Class Initialized
DEBUG - 2013-09-14 05:52:46 --> Session Class Initialized
DEBUG - 2013-09-14 05:52:46 --> Helper loaded: string_helper
DEBUG - 2013-09-14 05:52:46 --> Session routines successfully run
DEBUG - 2013-09-14 05:52:46 --> Form Validation Class Initialized
DEBUG - 2013-09-14 05:52:46 --> Controller Class Initialized
DEBUG - 2013-09-14 05:52:46 --> Model Class Initialized
DEBUG - 2013-09-14 05:52:46 --> Model Class Initialized
DEBUG - 2013-09-14 05:52:46 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-14 05:52:46 --> after session initialization................
INFO  - 2013-09-14 05:52:46 --> inside the auto suggest page.................
INFO  - 2013-09-14 05:52:46 --> after the list array.................
INFO  - 2013-09-14 05:52:46 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%a%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-14 05:52:46 --> after retrieving the data from db.................
INFO  - 2013-09-14 05:52:46 --> looping.................
INFO  - 2013-09-14 05:52:46 --> looping.................
INFO  - 2013-09-14 05:52:46 --> looping.................
INFO  - 2013-09-14 05:52:46 --> looping.................
DEBUG - 2013-09-14 05:52:46 --> Final output sent to browser
DEBUG - 2013-09-14 05:52:46 --> Total execution time: 0.0700
DEBUG - 2013-09-14 05:52:47 --> Config Class Initialized
DEBUG - 2013-09-14 05:52:47 --> Hooks Class Initialized
DEBUG - 2013-09-14 05:52:47 --> Utf8 Class Initialized
DEBUG - 2013-09-14 05:52:47 --> UTF-8 Support Enabled
DEBUG - 2013-09-14 05:52:47 --> URI Class Initialized
DEBUG - 2013-09-14 05:52:47 --> Router Class Initialized
DEBUG - 2013-09-14 05:52:47 --> Output Class Initialized
DEBUG - 2013-09-14 05:52:47 --> Security Class Initialized
DEBUG - 2013-09-14 05:52:47 --> Input Class Initialized
DEBUG - 2013-09-14 05:52:47 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-14 05:52:47 --> Language Class Initialized
DEBUG - 2013-09-14 05:52:47 --> Loader Class Initialized
DEBUG - 2013-09-14 05:52:47 --> Helper loaded: form_helper
DEBUG - 2013-09-14 05:52:47 --> Helper loaded: url_helper
DEBUG - 2013-09-14 05:52:47 --> Helper loaded: html_helper
DEBUG - 2013-09-14 05:52:47 --> Database Driver Class Initialized
DEBUG - 2013-09-14 05:52:47 --> Session Class Initialized
DEBUG - 2013-09-14 05:52:47 --> Helper loaded: string_helper
DEBUG - 2013-09-14 05:52:47 --> Session routines successfully run
DEBUG - 2013-09-14 05:52:47 --> Form Validation Class Initialized
DEBUG - 2013-09-14 05:52:47 --> Controller Class Initialized
DEBUG - 2013-09-14 05:52:47 --> Model Class Initialized
DEBUG - 2013-09-14 05:52:47 --> Model Class Initialized
DEBUG - 2013-09-14 05:52:47 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-14 05:52:47 --> after session initialization................
INFO  - 2013-09-14 05:52:47 --> inside the auto suggest page.................
INFO  - 2013-09-14 05:52:47 --> after the list array.................
INFO  - 2013-09-14 05:52:47 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%an%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-14 05:52:47 --> after retrieving the data from db.................
INFO  - 2013-09-14 05:52:47 --> looping.................
INFO  - 2013-09-14 05:52:47 --> looping.................
INFO  - 2013-09-14 05:52:47 --> looping.................
DEBUG - 2013-09-14 05:52:47 --> Final output sent to browser
DEBUG - 2013-09-14 05:52:47 --> Total execution time: 0.0780
DEBUG - 2013-09-14 05:52:47 --> Config Class Initialized
DEBUG - 2013-09-14 05:52:47 --> Hooks Class Initialized
DEBUG - 2013-09-14 05:52:47 --> Utf8 Class Initialized
DEBUG - 2013-09-14 05:52:47 --> UTF-8 Support Enabled
DEBUG - 2013-09-14 05:52:47 --> URI Class Initialized
DEBUG - 2013-09-14 05:52:47 --> Router Class Initialized
DEBUG - 2013-09-14 05:52:47 --> Output Class Initialized
DEBUG - 2013-09-14 05:52:47 --> Security Class Initialized
DEBUG - 2013-09-14 05:52:47 --> Input Class Initialized
DEBUG - 2013-09-14 05:52:47 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-14 05:52:47 --> Language Class Initialized
DEBUG - 2013-09-14 05:52:47 --> Loader Class Initialized
DEBUG - 2013-09-14 05:52:47 --> Helper loaded: form_helper
DEBUG - 2013-09-14 05:52:47 --> Helper loaded: url_helper
DEBUG - 2013-09-14 05:52:47 --> Helper loaded: html_helper
DEBUG - 2013-09-14 05:52:47 --> Database Driver Class Initialized
DEBUG - 2013-09-14 05:52:47 --> Session Class Initialized
DEBUG - 2013-09-14 05:52:47 --> Helper loaded: string_helper
DEBUG - 2013-09-14 05:52:47 --> Session routines successfully run
DEBUG - 2013-09-14 05:52:47 --> Form Validation Class Initialized
DEBUG - 2013-09-14 05:52:47 --> Controller Class Initialized
DEBUG - 2013-09-14 05:52:47 --> Model Class Initialized
DEBUG - 2013-09-14 05:52:47 --> Model Class Initialized
DEBUG - 2013-09-14 05:52:47 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-14 05:52:47 --> after session initialization................
INFO  - 2013-09-14 05:52:47 --> inside the auto suggest page.................
INFO  - 2013-09-14 05:52:47 --> after the list array.................
INFO  - 2013-09-14 05:52:47 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%anm%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-14 05:52:47 --> after retrieving the data from db.................
DEBUG - 2013-09-14 05:52:47 --> Final output sent to browser
DEBUG - 2013-09-14 05:52:47 --> Total execution time: 0.1200
DEBUG - 2013-09-14 05:52:48 --> Config Class Initialized
DEBUG - 2013-09-14 05:52:48 --> Hooks Class Initialized
DEBUG - 2013-09-14 05:52:48 --> Utf8 Class Initialized
DEBUG - 2013-09-14 05:52:48 --> UTF-8 Support Enabled
DEBUG - 2013-09-14 05:52:48 --> URI Class Initialized
DEBUG - 2013-09-14 05:52:48 --> Router Class Initialized
DEBUG - 2013-09-14 05:52:48 --> Output Class Initialized
DEBUG - 2013-09-14 05:52:48 --> Security Class Initialized
DEBUG - 2013-09-14 05:52:48 --> Input Class Initialized
DEBUG - 2013-09-14 05:52:48 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-14 05:52:48 --> Language Class Initialized
DEBUG - 2013-09-14 05:52:48 --> Loader Class Initialized
DEBUG - 2013-09-14 05:52:48 --> Helper loaded: form_helper
DEBUG - 2013-09-14 05:52:48 --> Helper loaded: url_helper
DEBUG - 2013-09-14 05:52:48 --> Helper loaded: html_helper
DEBUG - 2013-09-14 05:52:48 --> Database Driver Class Initialized
DEBUG - 2013-09-14 05:52:48 --> Session Class Initialized
DEBUG - 2013-09-14 05:52:48 --> Helper loaded: string_helper
DEBUG - 2013-09-14 05:52:48 --> Session routines successfully run
DEBUG - 2013-09-14 05:52:48 --> Form Validation Class Initialized
DEBUG - 2013-09-14 05:52:48 --> Controller Class Initialized
DEBUG - 2013-09-14 05:52:48 --> Model Class Initialized
DEBUG - 2013-09-14 05:52:48 --> Model Class Initialized
DEBUG - 2013-09-14 05:52:48 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-14 05:52:48 --> after session initialization................
INFO  - 2013-09-14 05:52:48 --> inside the auto suggest page.................
INFO  - 2013-09-14 05:52:48 --> after the list array.................
INFO  - 2013-09-14 05:52:48 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%an%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-14 05:52:48 --> after retrieving the data from db.................
INFO  - 2013-09-14 05:52:48 --> looping.................
INFO  - 2013-09-14 05:52:48 --> looping.................
INFO  - 2013-09-14 05:52:48 --> looping.................
DEBUG - 2013-09-14 05:52:48 --> Final output sent to browser
DEBUG - 2013-09-14 05:52:48 --> Total execution time: 0.0650
DEBUG - 2013-09-14 05:52:48 --> Config Class Initialized
DEBUG - 2013-09-14 05:52:48 --> Hooks Class Initialized
DEBUG - 2013-09-14 05:52:48 --> Utf8 Class Initialized
DEBUG - 2013-09-14 05:52:48 --> UTF-8 Support Enabled
DEBUG - 2013-09-14 05:52:48 --> URI Class Initialized
DEBUG - 2013-09-14 05:52:48 --> Router Class Initialized
DEBUG - 2013-09-14 05:52:48 --> Output Class Initialized
DEBUG - 2013-09-14 05:52:48 --> Security Class Initialized
DEBUG - 2013-09-14 05:52:48 --> Input Class Initialized
DEBUG - 2013-09-14 05:52:48 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-14 05:52:48 --> Language Class Initialized
DEBUG - 2013-09-14 05:52:48 --> Loader Class Initialized
DEBUG - 2013-09-14 05:52:48 --> Helper loaded: form_helper
DEBUG - 2013-09-14 05:52:48 --> Helper loaded: url_helper
DEBUG - 2013-09-14 05:52:48 --> Helper loaded: html_helper
DEBUG - 2013-09-14 05:52:48 --> Database Driver Class Initialized
DEBUG - 2013-09-14 05:52:48 --> Session Class Initialized
DEBUG - 2013-09-14 05:52:48 --> Helper loaded: string_helper
DEBUG - 2013-09-14 05:52:48 --> Session routines successfully run
DEBUG - 2013-09-14 05:52:48 --> Form Validation Class Initialized
DEBUG - 2013-09-14 05:52:48 --> Controller Class Initialized
DEBUG - 2013-09-14 05:52:48 --> Model Class Initialized
DEBUG - 2013-09-14 05:52:48 --> Model Class Initialized
DEBUG - 2013-09-14 05:52:48 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-14 05:52:48 --> after session initialization................
INFO  - 2013-09-14 05:52:48 --> inside the auto suggest page.................
INFO  - 2013-09-14 05:52:48 --> after the list array.................
INFO  - 2013-09-14 05:52:48 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%a%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-14 05:52:48 --> after retrieving the data from db.................
INFO  - 2013-09-14 05:52:48 --> looping.................
INFO  - 2013-09-14 05:52:48 --> looping.................
INFO  - 2013-09-14 05:52:48 --> looping.................
INFO  - 2013-09-14 05:52:48 --> looping.................
DEBUG - 2013-09-14 05:52:48 --> Final output sent to browser
DEBUG - 2013-09-14 05:52:48 --> Total execution time: 0.0680
DEBUG - 2013-09-14 05:52:49 --> Config Class Initialized
DEBUG - 2013-09-14 05:52:49 --> Hooks Class Initialized
DEBUG - 2013-09-14 05:52:49 --> Utf8 Class Initialized
DEBUG - 2013-09-14 05:52:49 --> UTF-8 Support Enabled
DEBUG - 2013-09-14 05:52:49 --> URI Class Initialized
DEBUG - 2013-09-14 05:52:49 --> Router Class Initialized
DEBUG - 2013-09-14 05:52:49 --> Output Class Initialized
DEBUG - 2013-09-14 05:52:49 --> Security Class Initialized
DEBUG - 2013-09-14 05:52:49 --> Input Class Initialized
DEBUG - 2013-09-14 05:52:49 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-14 05:52:49 --> Language Class Initialized
DEBUG - 2013-09-14 05:52:49 --> Loader Class Initialized
DEBUG - 2013-09-14 05:52:49 --> Helper loaded: form_helper
DEBUG - 2013-09-14 05:52:49 --> Helper loaded: url_helper
DEBUG - 2013-09-14 05:52:49 --> Helper loaded: html_helper
DEBUG - 2013-09-14 05:52:49 --> Database Driver Class Initialized
DEBUG - 2013-09-14 05:52:49 --> Session Class Initialized
DEBUG - 2013-09-14 05:52:49 --> Helper loaded: string_helper
DEBUG - 2013-09-14 05:52:49 --> Session routines successfully run
DEBUG - 2013-09-14 05:52:49 --> Form Validation Class Initialized
DEBUG - 2013-09-14 05:52:49 --> Controller Class Initialized
DEBUG - 2013-09-14 05:52:49 --> Model Class Initialized
DEBUG - 2013-09-14 05:52:49 --> Model Class Initialized
DEBUG - 2013-09-14 05:52:49 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-14 05:52:49 --> after session initialization................
INFO  - 2013-09-14 05:52:49 --> inside the auto suggest page.................
INFO  - 2013-09-14 05:52:49 --> after the list array.................
INFO  - 2013-09-14 05:52:49 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%am%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-14 05:52:49 --> after retrieving the data from db.................
INFO  - 2013-09-14 05:52:49 --> looping.................
DEBUG - 2013-09-14 05:52:49 --> Final output sent to browser
DEBUG - 2013-09-14 05:52:49 --> Total execution time: 0.1450
DEBUG - 2013-09-14 05:52:50 --> Config Class Initialized
DEBUG - 2013-09-14 05:52:50 --> Hooks Class Initialized
DEBUG - 2013-09-14 05:52:50 --> Utf8 Class Initialized
DEBUG - 2013-09-14 05:52:50 --> UTF-8 Support Enabled
DEBUG - 2013-09-14 05:52:50 --> URI Class Initialized
DEBUG - 2013-09-14 05:52:50 --> Router Class Initialized
DEBUG - 2013-09-14 05:52:50 --> Output Class Initialized
DEBUG - 2013-09-14 05:52:50 --> Security Class Initialized
DEBUG - 2013-09-14 05:52:50 --> Input Class Initialized
DEBUG - 2013-09-14 05:52:50 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-14 05:52:50 --> Language Class Initialized
DEBUG - 2013-09-14 05:52:50 --> Loader Class Initialized
DEBUG - 2013-09-14 05:52:50 --> Helper loaded: form_helper
DEBUG - 2013-09-14 05:52:50 --> Helper loaded: url_helper
DEBUG - 2013-09-14 05:52:50 --> Helper loaded: html_helper
DEBUG - 2013-09-14 05:52:50 --> Database Driver Class Initialized
DEBUG - 2013-09-14 05:52:50 --> Session Class Initialized
DEBUG - 2013-09-14 05:52:50 --> Helper loaded: string_helper
DEBUG - 2013-09-14 05:52:50 --> Session routines successfully run
DEBUG - 2013-09-14 05:52:50 --> Form Validation Class Initialized
DEBUG - 2013-09-14 05:52:50 --> Controller Class Initialized
DEBUG - 2013-09-14 05:52:50 --> Model Class Initialized
DEBUG - 2013-09-14 05:52:50 --> Model Class Initialized
DEBUG - 2013-09-14 05:52:50 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-14 05:52:50 --> after session initialization................
INFO  - 2013-09-14 05:52:50 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '2'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-14 05:52:50 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-14 05:52:50 --> 5==============================0
INFO  - 2013-09-14 05:52:50 --> SELECT dc.id_drugcomment as id, dc.comment, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-14 05:52:50 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-09-14 05:52:50 --> News by drug_id ::::::::::===>SELECT `n`.`id_news` as id, `n`.`title` as news_title, `n`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '2'
ORDER BY `n`.`time_created`
INFO  - 2013-09-14 05:52:50 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `n`.`title` as newsletter_title, `n`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '2'
ORDER BY `n`.`time_created`
DEBUG - 2013-09-14 05:52:50 --> Final output sent to browser
DEBUG - 2013-09-14 05:52:50 --> Total execution time: 0.0810
DEBUG - 2013-09-14 05:53:23 --> Config Class Initialized
DEBUG - 2013-09-14 05:53:23 --> Hooks Class Initialized
DEBUG - 2013-09-14 05:53:23 --> Utf8 Class Initialized
DEBUG - 2013-09-14 05:53:23 --> UTF-8 Support Enabled
DEBUG - 2013-09-14 05:53:23 --> URI Class Initialized
DEBUG - 2013-09-14 05:53:23 --> Router Class Initialized
DEBUG - 2013-09-14 05:53:23 --> Output Class Initialized
DEBUG - 2013-09-14 05:53:23 --> Security Class Initialized
DEBUG - 2013-09-14 05:53:23 --> Input Class Initialized
DEBUG - 2013-09-14 05:53:23 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-14 05:53:23 --> Language Class Initialized
DEBUG - 2013-09-14 05:53:23 --> Loader Class Initialized
DEBUG - 2013-09-14 05:53:23 --> Helper loaded: form_helper
DEBUG - 2013-09-14 05:53:23 --> Helper loaded: url_helper
DEBUG - 2013-09-14 05:53:23 --> Helper loaded: html_helper
DEBUG - 2013-09-14 05:53:23 --> Database Driver Class Initialized
DEBUG - 2013-09-14 05:53:23 --> Session Class Initialized
DEBUG - 2013-09-14 05:53:23 --> Helper loaded: string_helper
DEBUG - 2013-09-14 05:53:23 --> Session routines successfully run
DEBUG - 2013-09-14 05:53:23 --> Form Validation Class Initialized
DEBUG - 2013-09-14 05:53:23 --> Controller Class Initialized
DEBUG - 2013-09-14 05:53:23 --> Model Class Initialized
DEBUG - 2013-09-14 05:53:23 --> Model Class Initialized
DEBUG - 2013-09-14 05:53:23 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-14 05:53:23 --> after session initialization................
INFO  - 2013-09-14 05:53:23 --> inside rays login auth.............
DEBUG - 2013-09-14 05:53:23 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-09-14 05:53:23 --> XSS Filtering completed
DEBUG - 2013-09-14 05:53:23 --> XSS Filtering completed
INFO  - 2013-09-14 05:53:23 --> before getting the relation of member............6
INFO  - 2013-09-14 05:53:23 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-09-14 05:53:23 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-09-14 05:53:23 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-14 05:53:23 --> inside retrieving vacancy for member
INFO  - 2013-09-14 05:53:23 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-09-14 05:53:23 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-09-14 05:53:23 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-09-14 05:53:23 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-14 05:53:23 --> News by drug_id ::::::::::===>SELECT `n`.`id_news` as id, `n`.`title` as news_title, `n`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `n`.`time_created`
INFO  - 2013-09-14 05:53:23 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `n`.`title` as newsletter_title, `n`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `n`.`time_created`
INFO  - 2013-09-14 05:53:23 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-09-14 05:53:23 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-09-14 05:53:23 -->  column name inside view is 0 column Data is Health Job Vacancies 
INFO  - 2013-09-14 05:53:23 -->  column name inside view is 1 column Data is Internship / Nysc centers
INFO  - 2013-09-14 05:53:23 -->  column name inside view is 2 column Data is Pharmacy Schools
INFO  - 2013-09-14 05:53:23 -->  column name inside view is 3 column Data is Pharmacy Vacancies
INFO  - 2013-09-14 05:53:23 -->  column name inside view is 0 column Data is Male Pharmacist
INFO  - 2013-09-14 05:53:23 -->  column name inside view is 1 column Data is Ordinary Member
INFO  - 2013-09-14 05:53:23 -->  column name inside view is 2 column Data is Male Nurse
INFO  - 2013-09-14 05:53:23 -->  column name inside view is 3 column Data is Student Member
INFO  - 2013-09-14 05:53:23 -->  column name inside view is 4 column Data is Nafdac Official
INFO  - 2013-09-14 05:53:23 -->  column name inside view is 5 column Data is Male Doctor
INFO  - 2013-09-14 05:53:23 -->  column name inside view is Child paracetamol dosages revised column Data is Until now, children aged one to six could be given up to 10ml of paracetamol-based products such as Calpol up to four times a day...
INFO  - 2013-09-14 05:53:23 -->  column name inside view is Paracetamol death: Desiree Phillips died after taking too many, inquest told column Data is A 20-year-old mother from Carmarthenshire died after taking too many paracetamol, an inquest has heard..
DEBUG - 2013-09-14 05:53:23 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-09-14 05:53:23 --> Final output sent to browser
DEBUG - 2013-09-14 05:53:23 --> Total execution time: 0.0930
DEBUG - 2013-09-14 05:53:24 --> Config Class Initialized
DEBUG - 2013-09-14 05:53:24 --> Hooks Class Initialized
DEBUG - 2013-09-14 05:53:24 --> Utf8 Class Initialized
DEBUG - 2013-09-14 05:53:24 --> UTF-8 Support Enabled
DEBUG - 2013-09-14 05:53:24 --> URI Class Initialized
DEBUG - 2013-09-14 05:53:24 --> Router Class Initialized
DEBUG - 2013-09-14 05:53:24 --> Output Class Initialized
DEBUG - 2013-09-14 05:53:24 --> Security Class Initialized
DEBUG - 2013-09-14 05:53:24 --> Input Class Initialized
DEBUG - 2013-09-14 05:53:24 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-14 05:53:24 --> Language Class Initialized
DEBUG - 2013-09-14 05:53:24 --> Loader Class Initialized
DEBUG - 2013-09-14 05:53:24 --> Helper loaded: form_helper
DEBUG - 2013-09-14 05:53:24 --> Helper loaded: url_helper
DEBUG - 2013-09-14 05:53:24 --> Helper loaded: html_helper
DEBUG - 2013-09-14 05:53:24 --> Database Driver Class Initialized
DEBUG - 2013-09-14 05:53:24 --> Session Class Initialized
DEBUG - 2013-09-14 05:53:24 --> Helper loaded: string_helper
DEBUG - 2013-09-14 05:53:24 --> Session routines successfully run
DEBUG - 2013-09-14 05:53:24 --> Form Validation Class Initialized
DEBUG - 2013-09-14 05:53:24 --> Controller Class Initialized
DEBUG - 2013-09-14 05:53:24 --> Model Class Initialized
DEBUG - 2013-09-14 05:53:24 --> Model Class Initialized
DEBUG - 2013-09-14 05:53:24 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-14 05:53:24 --> after session initialization................
ERROR - 2013-09-14 05:53:24 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-09-14 05:53:24 --> Config Class Initialized
DEBUG - 2013-09-14 05:53:24 --> Hooks Class Initialized
DEBUG - 2013-09-14 05:53:24 --> Utf8 Class Initialized
DEBUG - 2013-09-14 05:53:24 --> UTF-8 Support Enabled
DEBUG - 2013-09-14 05:53:24 --> URI Class Initialized
DEBUG - 2013-09-14 05:53:24 --> Router Class Initialized
DEBUG - 2013-09-14 05:53:24 --> Output Class Initialized
DEBUG - 2013-09-14 05:53:24 --> Security Class Initialized
DEBUG - 2013-09-14 05:53:24 --> Input Class Initialized
DEBUG - 2013-09-14 05:53:24 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-14 05:53:24 --> Language Class Initialized
DEBUG - 2013-09-14 05:53:24 --> Loader Class Initialized
DEBUG - 2013-09-14 05:53:24 --> Helper loaded: form_helper
DEBUG - 2013-09-14 05:53:24 --> Helper loaded: url_helper
DEBUG - 2013-09-14 05:53:24 --> Helper loaded: html_helper
DEBUG - 2013-09-14 05:53:24 --> Database Driver Class Initialized
DEBUG - 2013-09-14 05:53:24 --> Session Class Initialized
DEBUG - 2013-09-14 05:53:24 --> Helper loaded: string_helper
DEBUG - 2013-09-14 05:53:24 --> Session routines successfully run
DEBUG - 2013-09-14 05:53:24 --> Form Validation Class Initialized
DEBUG - 2013-09-14 05:53:24 --> Controller Class Initialized
DEBUG - 2013-09-14 05:53:24 --> Model Class Initialized
DEBUG - 2013-09-14 05:53:24 --> Model Class Initialized
DEBUG - 2013-09-14 05:53:24 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-14 05:53:24 --> after session initialization................
ERROR - 2013-09-14 05:53:24 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-09-14 05:53:29 --> Config Class Initialized
DEBUG - 2013-09-14 05:53:29 --> Hooks Class Initialized
DEBUG - 2013-09-14 05:53:29 --> Utf8 Class Initialized
DEBUG - 2013-09-14 05:53:29 --> UTF-8 Support Enabled
DEBUG - 2013-09-14 05:53:29 --> URI Class Initialized
DEBUG - 2013-09-14 05:53:29 --> Router Class Initialized
DEBUG - 2013-09-14 05:53:29 --> Output Class Initialized
DEBUG - 2013-09-14 05:53:29 --> Security Class Initialized
DEBUG - 2013-09-14 05:53:29 --> Input Class Initialized
DEBUG - 2013-09-14 05:53:29 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-14 05:53:29 --> Language Class Initialized
DEBUG - 2013-09-14 05:53:29 --> Loader Class Initialized
DEBUG - 2013-09-14 05:53:29 --> Helper loaded: form_helper
DEBUG - 2013-09-14 05:53:29 --> Helper loaded: url_helper
DEBUG - 2013-09-14 05:53:29 --> Helper loaded: html_helper
DEBUG - 2013-09-14 05:53:29 --> Database Driver Class Initialized
DEBUG - 2013-09-14 05:53:29 --> Session Class Initialized
DEBUG - 2013-09-14 05:53:29 --> Helper loaded: string_helper
DEBUG - 2013-09-14 05:53:29 --> Session routines successfully run
DEBUG - 2013-09-14 05:53:29 --> Form Validation Class Initialized
DEBUG - 2013-09-14 05:53:29 --> Controller Class Initialized
DEBUG - 2013-09-14 05:53:29 --> Model Class Initialized
DEBUG - 2013-09-14 05:53:29 --> Model Class Initialized
DEBUG - 2013-09-14 05:53:29 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-14 05:53:29 --> after session initialization................
INFO  - 2013-09-14 05:53:29 --> inside the retrieve ajax comment page.................
INFO  - 2013-09-14 05:53:29 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-14 05:53:29 --> 10==============================10
INFO  - 2013-09-14 05:53:29 --> SELECT dc.id_drugcomment as id, dc.comment, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10, 10
INFO  - 2013-09-14 05:53:29 --> [{"id":"62","comment":"itsd","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"61","comment":"you gotta see this","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"60","comment":"hello","membername":"Elvis onuorah","membertypeimage":"profilem1"}]
DEBUG - 2013-09-14 05:53:29 --> Final output sent to browser
DEBUG - 2013-09-14 05:53:29 --> Total execution time: 0.0600
DEBUG - 2013-09-14 05:53:35 --> Config Class Initialized
DEBUG - 2013-09-14 05:53:35 --> Hooks Class Initialized
DEBUG - 2013-09-14 05:53:35 --> Utf8 Class Initialized
DEBUG - 2013-09-14 05:53:35 --> UTF-8 Support Enabled
DEBUG - 2013-09-14 05:53:35 --> URI Class Initialized
DEBUG - 2013-09-14 05:53:35 --> Router Class Initialized
DEBUG - 2013-09-14 05:53:35 --> Output Class Initialized
DEBUG - 2013-09-14 05:53:35 --> Security Class Initialized
DEBUG - 2013-09-14 05:53:35 --> Input Class Initialized
DEBUG - 2013-09-14 05:53:35 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-14 05:53:35 --> Language Class Initialized
DEBUG - 2013-09-14 05:53:35 --> Loader Class Initialized
DEBUG - 2013-09-14 05:53:35 --> Helper loaded: form_helper
DEBUG - 2013-09-14 05:53:35 --> Helper loaded: url_helper
DEBUG - 2013-09-14 05:53:35 --> Helper loaded: html_helper
DEBUG - 2013-09-14 05:53:35 --> Database Driver Class Initialized
DEBUG - 2013-09-14 05:53:35 --> Session Class Initialized
DEBUG - 2013-09-14 05:53:35 --> Helper loaded: string_helper
DEBUG - 2013-09-14 05:53:35 --> Session routines successfully run
DEBUG - 2013-09-14 05:53:35 --> Form Validation Class Initialized
DEBUG - 2013-09-14 05:53:35 --> Controller Class Initialized
DEBUG - 2013-09-14 05:53:35 --> Model Class Initialized
DEBUG - 2013-09-14 05:53:35 --> Model Class Initialized
DEBUG - 2013-09-14 05:53:35 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-14 05:53:35 --> after session initialization................
INFO  - 2013-09-14 05:53:35 --> inside the auto suggest page.................
INFO  - 2013-09-14 05:53:35 --> after the list array.................
INFO  - 2013-09-14 05:53:35 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%c%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-14 05:53:35 --> after retrieving the data from db.................
INFO  - 2013-09-14 05:53:35 --> looping.................
INFO  - 2013-09-14 05:53:35 --> looping.................
DEBUG - 2013-09-14 05:53:35 --> Final output sent to browser
DEBUG - 2013-09-14 05:53:35 --> Total execution time: 0.0580
DEBUG - 2013-09-14 05:53:36 --> Config Class Initialized
DEBUG - 2013-09-14 05:53:36 --> Hooks Class Initialized
DEBUG - 2013-09-14 05:53:36 --> Utf8 Class Initialized
DEBUG - 2013-09-14 05:53:36 --> UTF-8 Support Enabled
DEBUG - 2013-09-14 05:53:36 --> URI Class Initialized
DEBUG - 2013-09-14 05:53:36 --> Router Class Initialized
DEBUG - 2013-09-14 05:53:36 --> Output Class Initialized
DEBUG - 2013-09-14 05:53:36 --> Security Class Initialized
DEBUG - 2013-09-14 05:53:36 --> Input Class Initialized
DEBUG - 2013-09-14 05:53:36 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-14 05:53:36 --> Language Class Initialized
DEBUG - 2013-09-14 05:53:36 --> Loader Class Initialized
DEBUG - 2013-09-14 05:53:36 --> Helper loaded: form_helper
DEBUG - 2013-09-14 05:53:36 --> Helper loaded: url_helper
DEBUG - 2013-09-14 05:53:36 --> Helper loaded: html_helper
DEBUG - 2013-09-14 05:53:36 --> Database Driver Class Initialized
DEBUG - 2013-09-14 05:53:36 --> Session Class Initialized
DEBUG - 2013-09-14 05:53:36 --> Helper loaded: string_helper
DEBUG - 2013-09-14 05:53:36 --> Session routines successfully run
DEBUG - 2013-09-14 05:53:36 --> Form Validation Class Initialized
DEBUG - 2013-09-14 05:53:36 --> Controller Class Initialized
DEBUG - 2013-09-14 05:53:36 --> Model Class Initialized
DEBUG - 2013-09-14 05:53:36 --> Model Class Initialized
DEBUG - 2013-09-14 05:53:36 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-14 05:53:36 --> after session initialization................
INFO  - 2013-09-14 05:53:36 --> inside the auto suggest page.................
INFO  - 2013-09-14 05:53:36 --> after the list array.................
INFO  - 2013-09-14 05:53:36 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%ci%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-14 05:53:36 --> after retrieving the data from db.................
INFO  - 2013-09-14 05:53:36 --> looping.................
DEBUG - 2013-09-14 05:53:36 --> Final output sent to browser
DEBUG - 2013-09-14 05:53:36 --> Total execution time: 0.0580
DEBUG - 2013-09-14 05:53:37 --> Config Class Initialized
DEBUG - 2013-09-14 05:53:37 --> Hooks Class Initialized
DEBUG - 2013-09-14 05:53:37 --> Utf8 Class Initialized
DEBUG - 2013-09-14 05:53:37 --> UTF-8 Support Enabled
DEBUG - 2013-09-14 05:53:37 --> URI Class Initialized
DEBUG - 2013-09-14 05:53:37 --> Router Class Initialized
DEBUG - 2013-09-14 05:53:37 --> Output Class Initialized
DEBUG - 2013-09-14 05:53:37 --> Security Class Initialized
DEBUG - 2013-09-14 05:53:37 --> Input Class Initialized
DEBUG - 2013-09-14 05:53:37 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-14 05:53:37 --> Language Class Initialized
DEBUG - 2013-09-14 05:53:37 --> Loader Class Initialized
DEBUG - 2013-09-14 05:53:37 --> Helper loaded: form_helper
DEBUG - 2013-09-14 05:53:37 --> Helper loaded: url_helper
DEBUG - 2013-09-14 05:53:37 --> Helper loaded: html_helper
DEBUG - 2013-09-14 05:53:37 --> Database Driver Class Initialized
DEBUG - 2013-09-14 05:53:37 --> Session Class Initialized
DEBUG - 2013-09-14 05:53:37 --> Helper loaded: string_helper
DEBUG - 2013-09-14 05:53:37 --> Session routines successfully run
DEBUG - 2013-09-14 05:53:37 --> Form Validation Class Initialized
DEBUG - 2013-09-14 05:53:37 --> Controller Class Initialized
DEBUG - 2013-09-14 05:53:37 --> Model Class Initialized
DEBUG - 2013-09-14 05:53:37 --> Model Class Initialized
DEBUG - 2013-09-14 05:53:37 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-14 05:53:37 --> after session initialization................
INFO  - 2013-09-14 05:53:37 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '5'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-14 05:53:37 --> inside retrieving comments member id and drug id is 5
INFO  - 2013-09-14 05:53:37 --> 5==============================0
INFO  - 2013-09-14 05:53:37 --> SELECT dc.id_drugcomment as id, dc.comment, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 5
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-14 05:53:37 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 5
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-09-14 05:53:37 --> News by drug_id ::::::::::===>SELECT `n`.`id_news` as id, `n`.`title` as news_title, `n`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '5'
ORDER BY `n`.`time_created`
INFO  - 2013-09-14 05:53:37 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `n`.`title` as newsletter_title, `n`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '5'
ORDER BY `n`.`time_created`
DEBUG - 2013-09-14 05:53:37 --> Final output sent to browser
DEBUG - 2013-09-14 05:53:37 --> Total execution time: 0.0640
DEBUG - 2013-09-14 05:53:40 --> Config Class Initialized
DEBUG - 2013-09-14 05:53:40 --> Hooks Class Initialized
DEBUG - 2013-09-14 05:53:40 --> Utf8 Class Initialized
DEBUG - 2013-09-14 05:53:40 --> UTF-8 Support Enabled
DEBUG - 2013-09-14 05:53:40 --> URI Class Initialized
DEBUG - 2013-09-14 05:53:40 --> Router Class Initialized
DEBUG - 2013-09-14 05:53:40 --> Output Class Initialized
DEBUG - 2013-09-14 05:53:40 --> Security Class Initialized
DEBUG - 2013-09-14 05:53:40 --> Input Class Initialized
DEBUG - 2013-09-14 05:53:40 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-14 05:53:40 --> Language Class Initialized
DEBUG - 2013-09-14 05:53:40 --> Loader Class Initialized
DEBUG - 2013-09-14 05:53:40 --> Helper loaded: form_helper
DEBUG - 2013-09-14 05:53:40 --> Helper loaded: url_helper
DEBUG - 2013-09-14 05:53:40 --> Helper loaded: html_helper
DEBUG - 2013-09-14 05:53:40 --> Database Driver Class Initialized
DEBUG - 2013-09-14 05:53:40 --> Session Class Initialized
DEBUG - 2013-09-14 05:53:40 --> Helper loaded: string_helper
DEBUG - 2013-09-14 05:53:40 --> Session routines successfully run
DEBUG - 2013-09-14 05:53:40 --> Form Validation Class Initialized
DEBUG - 2013-09-14 05:53:40 --> Controller Class Initialized
DEBUG - 2013-09-14 05:53:40 --> Model Class Initialized
DEBUG - 2013-09-14 05:53:40 --> Model Class Initialized
DEBUG - 2013-09-14 05:53:40 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-14 05:53:40 --> after session initialization................
INFO  - 2013-09-14 05:53:40 --> inside the auto suggest page.................
INFO  - 2013-09-14 05:53:40 --> after the list array.................
INFO  - 2013-09-14 05:53:40 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%p%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-14 05:53:40 --> after retrieving the data from db.................
INFO  - 2013-09-14 05:53:40 --> looping.................
INFO  - 2013-09-14 05:53:40 --> looping.................
DEBUG - 2013-09-14 05:53:40 --> Final output sent to browser
DEBUG - 2013-09-14 05:53:40 --> Total execution time: 0.0590
DEBUG - 2013-09-14 05:53:41 --> Config Class Initialized
DEBUG - 2013-09-14 05:53:41 --> Hooks Class Initialized
DEBUG - 2013-09-14 05:53:41 --> Utf8 Class Initialized
DEBUG - 2013-09-14 05:53:41 --> UTF-8 Support Enabled
DEBUG - 2013-09-14 05:53:41 --> URI Class Initialized
DEBUG - 2013-09-14 05:53:41 --> Router Class Initialized
DEBUG - 2013-09-14 05:53:41 --> Output Class Initialized
DEBUG - 2013-09-14 05:53:41 --> Security Class Initialized
DEBUG - 2013-09-14 05:53:41 --> Input Class Initialized
DEBUG - 2013-09-14 05:53:41 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-14 05:53:41 --> Language Class Initialized
DEBUG - 2013-09-14 05:53:41 --> Loader Class Initialized
DEBUG - 2013-09-14 05:53:41 --> Helper loaded: form_helper
DEBUG - 2013-09-14 05:53:41 --> Helper loaded: url_helper
DEBUG - 2013-09-14 05:53:41 --> Helper loaded: html_helper
DEBUG - 2013-09-14 05:53:41 --> Database Driver Class Initialized
DEBUG - 2013-09-14 05:53:41 --> Session Class Initialized
DEBUG - 2013-09-14 05:53:41 --> Helper loaded: string_helper
DEBUG - 2013-09-14 05:53:41 --> Session routines successfully run
DEBUG - 2013-09-14 05:53:41 --> Form Validation Class Initialized
DEBUG - 2013-09-14 05:53:41 --> Controller Class Initialized
DEBUG - 2013-09-14 05:53:41 --> Model Class Initialized
DEBUG - 2013-09-14 05:53:41 --> Model Class Initialized
DEBUG - 2013-09-14 05:53:41 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-14 05:53:41 --> after session initialization................
INFO  - 2013-09-14 05:53:41 --> inside the auto suggest page.................
INFO  - 2013-09-14 05:53:41 --> after the list array.................
INFO  - 2013-09-14 05:53:41 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%pa%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-14 05:53:41 --> after retrieving the data from db.................
INFO  - 2013-09-14 05:53:41 --> looping.................
DEBUG - 2013-09-14 05:53:41 --> Final output sent to browser
DEBUG - 2013-09-14 05:53:41 --> Total execution time: 0.0580
DEBUG - 2013-09-14 05:53:45 --> Config Class Initialized
DEBUG - 2013-09-14 05:53:45 --> Hooks Class Initialized
DEBUG - 2013-09-14 05:53:45 --> Utf8 Class Initialized
DEBUG - 2013-09-14 05:53:45 --> UTF-8 Support Enabled
DEBUG - 2013-09-14 05:53:45 --> URI Class Initialized
DEBUG - 2013-09-14 05:53:45 --> Router Class Initialized
DEBUG - 2013-09-14 05:53:45 --> Output Class Initialized
DEBUG - 2013-09-14 05:53:45 --> Security Class Initialized
DEBUG - 2013-09-14 05:53:45 --> Input Class Initialized
DEBUG - 2013-09-14 05:53:45 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-14 05:53:45 --> Language Class Initialized
DEBUG - 2013-09-14 05:53:45 --> Loader Class Initialized
DEBUG - 2013-09-14 05:53:45 --> Helper loaded: form_helper
DEBUG - 2013-09-14 05:53:45 --> Helper loaded: url_helper
DEBUG - 2013-09-14 05:53:45 --> Helper loaded: html_helper
DEBUG - 2013-09-14 05:53:45 --> Database Driver Class Initialized
DEBUG - 2013-09-14 05:53:45 --> Session Class Initialized
DEBUG - 2013-09-14 05:53:45 --> Helper loaded: string_helper
DEBUG - 2013-09-14 05:53:45 --> Session routines successfully run
DEBUG - 2013-09-14 05:53:45 --> Form Validation Class Initialized
DEBUG - 2013-09-14 05:53:45 --> Controller Class Initialized
DEBUG - 2013-09-14 05:53:45 --> Model Class Initialized
DEBUG - 2013-09-14 05:53:45 --> Model Class Initialized
DEBUG - 2013-09-14 05:53:45 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-14 05:53:45 --> after session initialization................
INFO  - 2013-09-14 05:53:45 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-14 05:53:45 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-09-14 05:53:45 --> 5==============================0
INFO  - 2013-09-14 05:53:45 --> SELECT dc.id_drugcomment as id, dc.comment, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-14 05:53:45 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-09-14 05:53:45 --> News by drug_id ::::::::::===>SELECT `n`.`id_news` as id, `n`.`title` as news_title, `n`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `n`.`time_created`
INFO  - 2013-09-14 05:53:45 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `n`.`title` as newsletter_title, `n`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `n`.`time_created`
DEBUG - 2013-09-14 05:53:45 --> Final output sent to browser
DEBUG - 2013-09-14 05:53:45 --> Total execution time: 0.0740
DEBUG - 2013-09-14 05:57:10 --> Config Class Initialized
DEBUG - 2013-09-14 05:57:10 --> Hooks Class Initialized
DEBUG - 2013-09-14 05:57:10 --> Utf8 Class Initialized
DEBUG - 2013-09-14 05:57:10 --> UTF-8 Support Enabled
DEBUG - 2013-09-14 05:57:10 --> URI Class Initialized
DEBUG - 2013-09-14 05:57:10 --> Router Class Initialized
DEBUG - 2013-09-14 05:57:10 --> Output Class Initialized
DEBUG - 2013-09-14 05:57:10 --> Security Class Initialized
DEBUG - 2013-09-14 05:57:10 --> Input Class Initialized
DEBUG - 2013-09-14 05:57:10 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-14 05:57:10 --> Language Class Initialized
DEBUG - 2013-09-14 05:57:10 --> Loader Class Initialized
DEBUG - 2013-09-14 05:57:10 --> Helper loaded: form_helper
DEBUG - 2013-09-14 05:57:10 --> Helper loaded: url_helper
DEBUG - 2013-09-14 05:57:10 --> Helper loaded: html_helper
DEBUG - 2013-09-14 05:57:10 --> Database Driver Class Initialized
DEBUG - 2013-09-14 05:57:10 --> Session Class Initialized
DEBUG - 2013-09-14 05:57:10 --> Helper loaded: string_helper
DEBUG - 2013-09-14 05:57:10 --> Session routines successfully run
DEBUG - 2013-09-14 05:57:10 --> Form Validation Class Initialized
DEBUG - 2013-09-14 05:57:10 --> Controller Class Initialized
DEBUG - 2013-09-14 05:57:10 --> Model Class Initialized
DEBUG - 2013-09-14 05:57:10 --> Model Class Initialized
DEBUG - 2013-09-14 05:57:10 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-14 05:57:10 --> after session initialization................
INFO  - 2013-09-14 05:57:10 --> inside rays login auth.............
DEBUG - 2013-09-14 05:57:10 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-09-14 05:57:10 --> XSS Filtering completed
DEBUG - 2013-09-14 05:57:10 --> XSS Filtering completed
INFO  - 2013-09-14 05:57:10 --> before getting the relation of member............6
INFO  - 2013-09-14 05:57:10 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-09-14 05:57:10 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-09-14 05:57:10 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-14 05:57:10 --> inside retrieving vacancy for member
INFO  - 2013-09-14 05:57:10 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-09-14 05:57:10 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-09-14 05:57:10 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-09-14 05:57:10 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-14 05:57:10 --> News by drug_id ::::::::::===>SELECT `n`.`id_news` as id, `n`.`title` as news_title, `n`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `n`.`time_created`
INFO  - 2013-09-14 05:57:10 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `n`.`title` as newsletter_title, `n`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `n`.`time_created`
INFO  - 2013-09-14 05:57:10 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-09-14 05:57:10 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-09-14 05:57:10 -->  column name inside view is 0 column Data is Health Job Vacancies 
INFO  - 2013-09-14 05:57:10 -->  column name inside view is 1 column Data is Internship / Nysc centers
INFO  - 2013-09-14 05:57:10 -->  column name inside view is 2 column Data is Pharmacy Schools
INFO  - 2013-09-14 05:57:10 -->  column name inside view is 3 column Data is Pharmacy Vacancies
INFO  - 2013-09-14 05:57:10 -->  column name inside view is 0 column Data is Male Pharmacist
INFO  - 2013-09-14 05:57:10 -->  column name inside view is 1 column Data is Ordinary Member
INFO  - 2013-09-14 05:57:10 -->  column name inside view is 2 column Data is Male Nurse
INFO  - 2013-09-14 05:57:10 -->  column name inside view is 3 column Data is Student Member
INFO  - 2013-09-14 05:57:10 -->  column name inside view is 4 column Data is Nafdac Official
INFO  - 2013-09-14 05:57:10 -->  column name inside view is 5 column Data is Male Doctor
INFO  - 2013-09-14 05:57:10 -->  column name inside view is Child paracetamol dosages revised column Data is Until now, children aged one to six could be given up to 10ml of paracetamol-based products such as Calpol up to four times a day...
INFO  - 2013-09-14 05:57:10 -->  column name inside view is Paracetamol death: Desiree Phillips died after taking too many, inquest told column Data is A 20-year-old mother from Carmarthenshire died after taking too many paracetamol, an inquest has heard..
DEBUG - 2013-09-14 05:57:10 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-09-14 05:57:10 --> Final output sent to browser
DEBUG - 2013-09-14 05:57:10 --> Total execution time: 0.1450
DEBUG - 2013-09-14 05:57:10 --> Config Class Initialized
DEBUG - 2013-09-14 05:57:10 --> Hooks Class Initialized
DEBUG - 2013-09-14 05:57:10 --> Utf8 Class Initialized
DEBUG - 2013-09-14 05:57:10 --> UTF-8 Support Enabled
DEBUG - 2013-09-14 05:57:10 --> URI Class Initialized
DEBUG - 2013-09-14 05:57:10 --> Router Class Initialized
DEBUG - 2013-09-14 05:57:10 --> Output Class Initialized
DEBUG - 2013-09-14 05:57:10 --> Security Class Initialized
DEBUG - 2013-09-14 05:57:10 --> Input Class Initialized
DEBUG - 2013-09-14 05:57:10 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-14 05:57:10 --> Language Class Initialized
DEBUG - 2013-09-14 05:57:10 --> Loader Class Initialized
DEBUG - 2013-09-14 05:57:10 --> Helper loaded: form_helper
DEBUG - 2013-09-14 05:57:10 --> Helper loaded: url_helper
DEBUG - 2013-09-14 05:57:10 --> Helper loaded: html_helper
DEBUG - 2013-09-14 05:57:10 --> Database Driver Class Initialized
DEBUG - 2013-09-14 05:57:10 --> Session Class Initialized
DEBUG - 2013-09-14 05:57:10 --> Helper loaded: string_helper
DEBUG - 2013-09-14 05:57:10 --> Session routines successfully run
DEBUG - 2013-09-14 05:57:10 --> Form Validation Class Initialized
DEBUG - 2013-09-14 05:57:10 --> Controller Class Initialized
DEBUG - 2013-09-14 05:57:10 --> Model Class Initialized
DEBUG - 2013-09-14 05:57:10 --> Model Class Initialized
DEBUG - 2013-09-14 05:57:10 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-14 05:57:10 --> after session initialization................
ERROR - 2013-09-14 05:57:10 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-09-14 05:57:11 --> Config Class Initialized
DEBUG - 2013-09-14 05:57:11 --> Hooks Class Initialized
DEBUG - 2013-09-14 05:57:11 --> Utf8 Class Initialized
DEBUG - 2013-09-14 05:57:11 --> UTF-8 Support Enabled
DEBUG - 2013-09-14 05:57:11 --> URI Class Initialized
DEBUG - 2013-09-14 05:57:11 --> Router Class Initialized
DEBUG - 2013-09-14 05:57:11 --> Output Class Initialized
DEBUG - 2013-09-14 05:57:11 --> Security Class Initialized
DEBUG - 2013-09-14 05:57:11 --> Input Class Initialized
DEBUG - 2013-09-14 05:57:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-14 05:57:11 --> Language Class Initialized
DEBUG - 2013-09-14 05:57:11 --> Loader Class Initialized
DEBUG - 2013-09-14 05:57:11 --> Helper loaded: form_helper
DEBUG - 2013-09-14 05:57:11 --> Helper loaded: url_helper
DEBUG - 2013-09-14 05:57:11 --> Helper loaded: html_helper
DEBUG - 2013-09-14 05:57:11 --> Database Driver Class Initialized
DEBUG - 2013-09-14 05:57:11 --> Session Class Initialized
DEBUG - 2013-09-14 05:57:11 --> Helper loaded: string_helper
DEBUG - 2013-09-14 05:57:11 --> Session routines successfully run
DEBUG - 2013-09-14 05:57:11 --> Form Validation Class Initialized
DEBUG - 2013-09-14 05:57:11 --> Controller Class Initialized
DEBUG - 2013-09-14 05:57:11 --> Model Class Initialized
DEBUG - 2013-09-14 05:57:11 --> Model Class Initialized
DEBUG - 2013-09-14 05:57:11 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-14 05:57:11 --> after session initialization................
ERROR - 2013-09-14 05:57:11 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-09-14 05:57:15 --> Config Class Initialized
DEBUG - 2013-09-14 05:57:15 --> Hooks Class Initialized
DEBUG - 2013-09-14 05:57:15 --> Utf8 Class Initialized
DEBUG - 2013-09-14 05:57:15 --> UTF-8 Support Enabled
DEBUG - 2013-09-14 05:57:15 --> URI Class Initialized
DEBUG - 2013-09-14 05:57:15 --> Router Class Initialized
DEBUG - 2013-09-14 05:57:15 --> Output Class Initialized
DEBUG - 2013-09-14 05:57:15 --> Security Class Initialized
DEBUG - 2013-09-14 05:57:15 --> Input Class Initialized
DEBUG - 2013-09-14 05:57:15 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-14 05:57:15 --> Language Class Initialized
DEBUG - 2013-09-14 05:57:15 --> Loader Class Initialized
DEBUG - 2013-09-14 05:57:15 --> Helper loaded: form_helper
DEBUG - 2013-09-14 05:57:15 --> Helper loaded: url_helper
DEBUG - 2013-09-14 05:57:15 --> Helper loaded: html_helper
DEBUG - 2013-09-14 05:57:15 --> Database Driver Class Initialized
DEBUG - 2013-09-14 05:57:15 --> Session Class Initialized
DEBUG - 2013-09-14 05:57:15 --> Helper loaded: string_helper
DEBUG - 2013-09-14 05:57:15 --> Session routines successfully run
DEBUG - 2013-09-14 05:57:15 --> Form Validation Class Initialized
DEBUG - 2013-09-14 05:57:15 --> Controller Class Initialized
DEBUG - 2013-09-14 05:57:15 --> Model Class Initialized
DEBUG - 2013-09-14 05:57:15 --> Model Class Initialized
DEBUG - 2013-09-14 05:57:15 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-14 05:57:15 --> after session initialization................
INFO  - 2013-09-14 05:57:15 --> inside the retrieve ajax comment page.................
INFO  - 2013-09-14 05:57:15 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-09-14 05:57:15 --> 10==============================10
INFO  - 2013-09-14 05:57:15 --> SELECT dc.id_drugcomment as id, dc.comment, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10, 10
INFO  - 2013-09-14 05:57:15 --> [{"id":"51","comment":"this is just what i need.....good sleep","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"50","comment":"lets see if this is applicable too","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"49","comment":"this should just work as planned.","membername":"onwuzu melford","membertypeimage":"profilem"},{"id":"48","comment":"OGHENE DOH!!!!","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"47","comment":"hehehe....una dey sleep ni","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"46","comment":"this is what am talking about","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"45","comment":"this is what am talking about","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"43","comment":"lets go there this time","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"42","comment":"alright...try again","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"41","comment":"well think about it pal...","membername":"Elvis onuorah","membertypeimage":"profilem1"}]
DEBUG - 2013-09-14 05:57:15 --> Final output sent to browser
DEBUG - 2013-09-14 05:57:15 --> Total execution time: 0.0570
DEBUG - 2013-09-14 05:57:19 --> Config Class Initialized
DEBUG - 2013-09-14 05:57:19 --> Hooks Class Initialized
DEBUG - 2013-09-14 05:57:19 --> Utf8 Class Initialized
DEBUG - 2013-09-14 05:57:19 --> UTF-8 Support Enabled
DEBUG - 2013-09-14 05:57:19 --> URI Class Initialized
DEBUG - 2013-09-14 05:57:19 --> Router Class Initialized
DEBUG - 2013-09-14 05:57:19 --> Output Class Initialized
DEBUG - 2013-09-14 05:57:19 --> Security Class Initialized
DEBUG - 2013-09-14 05:57:19 --> Input Class Initialized
DEBUG - 2013-09-14 05:57:19 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-14 05:57:19 --> Language Class Initialized
DEBUG - 2013-09-14 05:57:19 --> Loader Class Initialized
DEBUG - 2013-09-14 05:57:19 --> Helper loaded: form_helper
DEBUG - 2013-09-14 05:57:19 --> Helper loaded: url_helper
DEBUG - 2013-09-14 05:57:19 --> Helper loaded: html_helper
DEBUG - 2013-09-14 05:57:19 --> Database Driver Class Initialized
DEBUG - 2013-09-14 05:57:19 --> Session Class Initialized
DEBUG - 2013-09-14 05:57:19 --> Helper loaded: string_helper
DEBUG - 2013-09-14 05:57:19 --> Session routines successfully run
DEBUG - 2013-09-14 05:57:19 --> Form Validation Class Initialized
DEBUG - 2013-09-14 05:57:19 --> Controller Class Initialized
DEBUG - 2013-09-14 05:57:19 --> Model Class Initialized
DEBUG - 2013-09-14 05:57:19 --> Model Class Initialized
DEBUG - 2013-09-14 05:57:19 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-14 05:57:19 --> after session initialization................
INFO  - 2013-09-14 05:57:19 --> inside the auto suggest page.................
INFO  - 2013-09-14 05:57:19 --> after the list array.................
INFO  - 2013-09-14 05:57:19 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%a%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-14 05:57:19 --> after retrieving the data from db.................
INFO  - 2013-09-14 05:57:19 --> looping.................
INFO  - 2013-09-14 05:57:19 --> looping.................
INFO  - 2013-09-14 05:57:19 --> looping.................
INFO  - 2013-09-14 05:57:19 --> looping.................
DEBUG - 2013-09-14 05:57:19 --> Final output sent to browser
DEBUG - 2013-09-14 05:57:19 --> Total execution time: 0.0640
DEBUG - 2013-09-14 05:57:20 --> Config Class Initialized
DEBUG - 2013-09-14 05:57:20 --> Hooks Class Initialized
DEBUG - 2013-09-14 05:57:20 --> Utf8 Class Initialized
DEBUG - 2013-09-14 05:57:20 --> UTF-8 Support Enabled
DEBUG - 2013-09-14 05:57:20 --> URI Class Initialized
DEBUG - 2013-09-14 05:57:20 --> Router Class Initialized
DEBUG - 2013-09-14 05:57:20 --> Output Class Initialized
DEBUG - 2013-09-14 05:57:20 --> Security Class Initialized
DEBUG - 2013-09-14 05:57:20 --> Input Class Initialized
DEBUG - 2013-09-14 05:57:20 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-14 05:57:20 --> Language Class Initialized
DEBUG - 2013-09-14 05:57:20 --> Loader Class Initialized
DEBUG - 2013-09-14 05:57:20 --> Helper loaded: form_helper
DEBUG - 2013-09-14 05:57:20 --> Helper loaded: url_helper
DEBUG - 2013-09-14 05:57:20 --> Helper loaded: html_helper
DEBUG - 2013-09-14 05:57:20 --> Database Driver Class Initialized
DEBUG - 2013-09-14 05:57:20 --> Session Class Initialized
DEBUG - 2013-09-14 05:57:20 --> Helper loaded: string_helper
DEBUG - 2013-09-14 05:57:20 --> Session routines successfully run
DEBUG - 2013-09-14 05:57:20 --> Form Validation Class Initialized
DEBUG - 2013-09-14 05:57:20 --> Controller Class Initialized
DEBUG - 2013-09-14 05:57:20 --> Model Class Initialized
DEBUG - 2013-09-14 05:57:20 --> Model Class Initialized
DEBUG - 2013-09-14 05:57:20 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-14 05:57:20 --> after session initialization................
INFO  - 2013-09-14 05:57:20 --> inside the auto suggest page.................
INFO  - 2013-09-14 05:57:20 --> after the list array.................
INFO  - 2013-09-14 05:57:20 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%an%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-14 05:57:20 --> after retrieving the data from db.................
INFO  - 2013-09-14 05:57:20 --> looping.................
INFO  - 2013-09-14 05:57:20 --> looping.................
INFO  - 2013-09-14 05:57:20 --> looping.................
DEBUG - 2013-09-14 05:57:20 --> Final output sent to browser
DEBUG - 2013-09-14 05:57:20 --> Total execution time: 0.0690
DEBUG - 2013-09-14 05:57:22 --> Config Class Initialized
DEBUG - 2013-09-14 05:57:22 --> Hooks Class Initialized
DEBUG - 2013-09-14 05:57:22 --> Utf8 Class Initialized
DEBUG - 2013-09-14 05:57:22 --> UTF-8 Support Enabled
DEBUG - 2013-09-14 05:57:22 --> URI Class Initialized
DEBUG - 2013-09-14 05:57:22 --> Router Class Initialized
DEBUG - 2013-09-14 05:57:22 --> Output Class Initialized
DEBUG - 2013-09-14 05:57:22 --> Security Class Initialized
DEBUG - 2013-09-14 05:57:22 --> Input Class Initialized
DEBUG - 2013-09-14 05:57:22 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-14 05:57:22 --> Language Class Initialized
DEBUG - 2013-09-14 05:57:22 --> Loader Class Initialized
DEBUG - 2013-09-14 05:57:22 --> Helper loaded: form_helper
DEBUG - 2013-09-14 05:57:22 --> Helper loaded: url_helper
DEBUG - 2013-09-14 05:57:22 --> Helper loaded: html_helper
DEBUG - 2013-09-14 05:57:22 --> Database Driver Class Initialized
DEBUG - 2013-09-14 05:57:22 --> Session Class Initialized
DEBUG - 2013-09-14 05:57:22 --> Helper loaded: string_helper
DEBUG - 2013-09-14 05:57:22 --> Session routines successfully run
DEBUG - 2013-09-14 05:57:22 --> Form Validation Class Initialized
DEBUG - 2013-09-14 05:57:22 --> Controller Class Initialized
DEBUG - 2013-09-14 05:57:22 --> Model Class Initialized
DEBUG - 2013-09-14 05:57:22 --> Model Class Initialized
DEBUG - 2013-09-14 05:57:22 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-14 05:57:22 --> after session initialization................
INFO  - 2013-09-14 05:57:22 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '6'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-14 05:57:22 --> inside retrieving comments member id and drug id is 6
INFO  - 2013-09-14 05:57:22 --> 5==============================0
INFO  - 2013-09-14 05:57:22 --> SELECT dc.id_drugcomment as id, dc.comment, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 6
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-14 05:57:22 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 6
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-09-14 05:57:22 --> News by drug_id ::::::::::===>SELECT `n`.`id_news` as id, `n`.`title` as news_title, `n`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '6'
ORDER BY `n`.`time_created`
INFO  - 2013-09-14 05:57:23 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `n`.`title` as newsletter_title, `n`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '6'
ORDER BY `n`.`time_created`
DEBUG - 2013-09-14 05:57:23 --> Final output sent to browser
DEBUG - 2013-09-14 05:57:23 --> Total execution time: 0.0690
DEBUG - 2013-09-14 05:57:25 --> Config Class Initialized
DEBUG - 2013-09-14 05:57:25 --> Hooks Class Initialized
DEBUG - 2013-09-14 05:57:25 --> Utf8 Class Initialized
DEBUG - 2013-09-14 05:57:25 --> UTF-8 Support Enabled
DEBUG - 2013-09-14 05:57:25 --> URI Class Initialized
DEBUG - 2013-09-14 05:57:25 --> Router Class Initialized
DEBUG - 2013-09-14 05:57:25 --> Output Class Initialized
DEBUG - 2013-09-14 05:57:25 --> Security Class Initialized
DEBUG - 2013-09-14 05:57:25 --> Input Class Initialized
DEBUG - 2013-09-14 05:57:25 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-14 05:57:25 --> Language Class Initialized
DEBUG - 2013-09-14 05:57:25 --> Loader Class Initialized
DEBUG - 2013-09-14 05:57:25 --> Helper loaded: form_helper
DEBUG - 2013-09-14 05:57:25 --> Helper loaded: url_helper
DEBUG - 2013-09-14 05:57:25 --> Helper loaded: html_helper
DEBUG - 2013-09-14 05:57:25 --> Database Driver Class Initialized
DEBUG - 2013-09-14 05:57:25 --> Session Class Initialized
DEBUG - 2013-09-14 05:57:25 --> Helper loaded: string_helper
DEBUG - 2013-09-14 05:57:25 --> Session routines successfully run
DEBUG - 2013-09-14 05:57:25 --> Form Validation Class Initialized
DEBUG - 2013-09-14 05:57:25 --> Controller Class Initialized
DEBUG - 2013-09-14 05:57:25 --> Model Class Initialized
DEBUG - 2013-09-14 05:57:25 --> Model Class Initialized
DEBUG - 2013-09-14 05:57:25 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-14 05:57:25 --> after session initialization................
INFO  - 2013-09-14 05:57:25 --> inside the auto suggest page.................
INFO  - 2013-09-14 05:57:25 --> after the list array.................
INFO  - 2013-09-14 05:57:25 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%a%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-14 05:57:25 --> after retrieving the data from db.................
INFO  - 2013-09-14 05:57:25 --> looping.................
INFO  - 2013-09-14 05:57:25 --> looping.................
INFO  - 2013-09-14 05:57:25 --> looping.................
INFO  - 2013-09-14 05:57:25 --> looping.................
DEBUG - 2013-09-14 05:57:25 --> Final output sent to browser
DEBUG - 2013-09-14 05:57:25 --> Total execution time: 0.0670
DEBUG - 2013-09-14 05:57:26 --> Config Class Initialized
DEBUG - 2013-09-14 05:57:26 --> Hooks Class Initialized
DEBUG - 2013-09-14 05:57:26 --> Utf8 Class Initialized
DEBUG - 2013-09-14 05:57:26 --> UTF-8 Support Enabled
DEBUG - 2013-09-14 05:57:26 --> URI Class Initialized
DEBUG - 2013-09-14 05:57:26 --> Router Class Initialized
DEBUG - 2013-09-14 05:57:26 --> Output Class Initialized
DEBUG - 2013-09-14 05:57:26 --> Security Class Initialized
DEBUG - 2013-09-14 05:57:26 --> Input Class Initialized
DEBUG - 2013-09-14 05:57:26 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-14 05:57:26 --> Language Class Initialized
DEBUG - 2013-09-14 05:57:26 --> Loader Class Initialized
DEBUG - 2013-09-14 05:57:26 --> Helper loaded: form_helper
DEBUG - 2013-09-14 05:57:26 --> Helper loaded: url_helper
DEBUG - 2013-09-14 05:57:26 --> Helper loaded: html_helper
DEBUG - 2013-09-14 05:57:26 --> Database Driver Class Initialized
DEBUG - 2013-09-14 05:57:26 --> Session Class Initialized
DEBUG - 2013-09-14 05:57:26 --> Helper loaded: string_helper
DEBUG - 2013-09-14 05:57:26 --> Session routines successfully run
DEBUG - 2013-09-14 05:57:26 --> Form Validation Class Initialized
DEBUG - 2013-09-14 05:57:26 --> Controller Class Initialized
DEBUG - 2013-09-14 05:57:26 --> Model Class Initialized
DEBUG - 2013-09-14 05:57:26 --> Model Class Initialized
DEBUG - 2013-09-14 05:57:26 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-14 05:57:26 --> after session initialization................
INFO  - 2013-09-14 05:57:26 --> inside the auto suggest page.................
INFO  - 2013-09-14 05:57:26 --> after the list array.................
INFO  - 2013-09-14 05:57:26 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%am%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-14 05:57:26 --> after retrieving the data from db.................
INFO  - 2013-09-14 05:57:26 --> looping.................
DEBUG - 2013-09-14 05:57:26 --> Final output sent to browser
DEBUG - 2013-09-14 05:57:26 --> Total execution time: 0.0640
DEBUG - 2013-09-14 05:57:27 --> Config Class Initialized
DEBUG - 2013-09-14 05:57:27 --> Hooks Class Initialized
DEBUG - 2013-09-14 05:57:27 --> Utf8 Class Initialized
DEBUG - 2013-09-14 05:57:27 --> UTF-8 Support Enabled
DEBUG - 2013-09-14 05:57:27 --> URI Class Initialized
DEBUG - 2013-09-14 05:57:28 --> Router Class Initialized
DEBUG - 2013-09-14 05:57:28 --> Output Class Initialized
DEBUG - 2013-09-14 05:57:28 --> Security Class Initialized
DEBUG - 2013-09-14 05:57:28 --> Input Class Initialized
DEBUG - 2013-09-14 05:57:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-14 05:57:28 --> Language Class Initialized
DEBUG - 2013-09-14 05:57:28 --> Loader Class Initialized
DEBUG - 2013-09-14 05:57:28 --> Helper loaded: form_helper
DEBUG - 2013-09-14 05:57:28 --> Helper loaded: url_helper
DEBUG - 2013-09-14 05:57:28 --> Helper loaded: html_helper
DEBUG - 2013-09-14 05:57:28 --> Database Driver Class Initialized
DEBUG - 2013-09-14 05:57:28 --> Session Class Initialized
DEBUG - 2013-09-14 05:57:28 --> Helper loaded: string_helper
DEBUG - 2013-09-14 05:57:28 --> Session routines successfully run
DEBUG - 2013-09-14 05:57:28 --> Form Validation Class Initialized
DEBUG - 2013-09-14 05:57:28 --> Controller Class Initialized
DEBUG - 2013-09-14 05:57:28 --> Model Class Initialized
DEBUG - 2013-09-14 05:57:28 --> Model Class Initialized
DEBUG - 2013-09-14 05:57:28 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-14 05:57:28 --> after session initialization................
INFO  - 2013-09-14 05:57:28 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '2'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-14 05:57:28 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-14 05:57:28 --> 5==============================0
INFO  - 2013-09-14 05:57:28 --> SELECT dc.id_drugcomment as id, dc.comment, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-14 05:57:28 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-09-14 05:57:28 --> News by drug_id ::::::::::===>SELECT `n`.`id_news` as id, `n`.`title` as news_title, `n`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '2'
ORDER BY `n`.`time_created`
INFO  - 2013-09-14 05:57:28 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `n`.`title` as newsletter_title, `n`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '2'
ORDER BY `n`.`time_created`
DEBUG - 2013-09-14 05:57:28 --> Final output sent to browser
DEBUG - 2013-09-14 05:57:28 --> Total execution time: 0.0650
DEBUG - 2013-09-14 05:57:32 --> Config Class Initialized
DEBUG - 2013-09-14 05:57:32 --> Hooks Class Initialized
DEBUG - 2013-09-14 05:57:32 --> Utf8 Class Initialized
DEBUG - 2013-09-14 05:57:32 --> UTF-8 Support Enabled
DEBUG - 2013-09-14 05:57:32 --> URI Class Initialized
DEBUG - 2013-09-14 05:57:32 --> Router Class Initialized
DEBUG - 2013-09-14 05:57:32 --> Output Class Initialized
DEBUG - 2013-09-14 05:57:32 --> Security Class Initialized
DEBUG - 2013-09-14 05:57:32 --> Input Class Initialized
DEBUG - 2013-09-14 05:57:32 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-14 05:57:32 --> Language Class Initialized
DEBUG - 2013-09-14 05:57:32 --> Loader Class Initialized
DEBUG - 2013-09-14 05:57:32 --> Helper loaded: form_helper
DEBUG - 2013-09-14 05:57:32 --> Helper loaded: url_helper
DEBUG - 2013-09-14 05:57:32 --> Helper loaded: html_helper
DEBUG - 2013-09-14 05:57:32 --> Database Driver Class Initialized
DEBUG - 2013-09-14 05:57:32 --> Session Class Initialized
DEBUG - 2013-09-14 05:57:32 --> Helper loaded: string_helper
DEBUG - 2013-09-14 05:57:32 --> Session routines successfully run
DEBUG - 2013-09-14 05:57:32 --> Form Validation Class Initialized
DEBUG - 2013-09-14 05:57:32 --> Controller Class Initialized
DEBUG - 2013-09-14 05:57:32 --> Model Class Initialized
DEBUG - 2013-09-14 05:57:32 --> Model Class Initialized
DEBUG - 2013-09-14 05:57:32 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-14 05:57:32 --> after session initialization................
INFO  - 2013-09-14 05:57:32 --> inside the retrieve ajax comment page.................
INFO  - 2013-09-14 05:57:32 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-09-14 05:57:32 --> 10==============================20
INFO  - 2013-09-14 05:57:32 --> SELECT dc.id_drugcomment as id, dc.comment, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 20, 10
INFO  - 2013-09-14 05:57:32 --> [{"id":"40","comment":"hullos again","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"38","comment":"hellos","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"37","comment":"what are we saying na","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"36","comment":"ok i think its ok now","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"35","comment":"i am here now....image display","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"34","comment":"kachi man","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"33","comment":"lets try one more time","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"32","comment":"this is jst the beginning","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"31","comment":"retrieved it now.....","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"30","comment":"we are close....","membername":"Elvis onuorah","membertypeimage":"profilem1"}]
DEBUG - 2013-09-14 05:57:32 --> Final output sent to browser
DEBUG - 2013-09-14 05:57:32 --> Total execution time: 0.0600
DEBUG - 2013-09-14 05:57:39 --> Config Class Initialized
DEBUG - 2013-09-14 05:57:39 --> Hooks Class Initialized
DEBUG - 2013-09-14 05:57:39 --> Utf8 Class Initialized
DEBUG - 2013-09-14 05:57:39 --> UTF-8 Support Enabled
DEBUG - 2013-09-14 05:57:39 --> URI Class Initialized
DEBUG - 2013-09-14 05:57:39 --> Router Class Initialized
DEBUG - 2013-09-14 05:57:39 --> Output Class Initialized
DEBUG - 2013-09-14 05:57:39 --> Security Class Initialized
DEBUG - 2013-09-14 05:57:39 --> Input Class Initialized
DEBUG - 2013-09-14 05:57:39 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-14 05:57:39 --> Language Class Initialized
DEBUG - 2013-09-14 05:57:40 --> Loader Class Initialized
DEBUG - 2013-09-14 05:57:40 --> Helper loaded: form_helper
DEBUG - 2013-09-14 05:57:40 --> Helper loaded: url_helper
DEBUG - 2013-09-14 05:57:40 --> Helper loaded: html_helper
DEBUG - 2013-09-14 05:57:40 --> Database Driver Class Initialized
DEBUG - 2013-09-14 05:57:40 --> Session Class Initialized
DEBUG - 2013-09-14 05:57:40 --> Helper loaded: string_helper
DEBUG - 2013-09-14 05:57:40 --> Session routines successfully run
DEBUG - 2013-09-14 05:57:40 --> Form Validation Class Initialized
DEBUG - 2013-09-14 05:57:40 --> Controller Class Initialized
DEBUG - 2013-09-14 05:57:40 --> Model Class Initialized
DEBUG - 2013-09-14 05:57:40 --> Model Class Initialized
DEBUG - 2013-09-14 05:57:40 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-14 05:57:40 --> after session initialization................
INFO  - 2013-09-14 05:57:40 --> inside the auto suggest page.................
INFO  - 2013-09-14 05:57:40 --> after the list array.................
INFO  - 2013-09-14 05:57:40 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%p%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-14 05:57:40 --> after retrieving the data from db.................
INFO  - 2013-09-14 05:57:40 --> looping.................
INFO  - 2013-09-14 05:57:40 --> looping.................
DEBUG - 2013-09-14 05:57:40 --> Final output sent to browser
DEBUG - 2013-09-14 05:57:40 --> Total execution time: 0.0640
DEBUG - 2013-09-14 05:57:40 --> Config Class Initialized
DEBUG - 2013-09-14 05:57:40 --> Hooks Class Initialized
DEBUG - 2013-09-14 05:57:40 --> Utf8 Class Initialized
DEBUG - 2013-09-14 05:57:40 --> UTF-8 Support Enabled
DEBUG - 2013-09-14 05:57:40 --> URI Class Initialized
DEBUG - 2013-09-14 05:57:40 --> Router Class Initialized
DEBUG - 2013-09-14 05:57:40 --> Output Class Initialized
DEBUG - 2013-09-14 05:57:40 --> Security Class Initialized
DEBUG - 2013-09-14 05:57:40 --> Input Class Initialized
DEBUG - 2013-09-14 05:57:40 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-14 05:57:40 --> Language Class Initialized
DEBUG - 2013-09-14 05:57:40 --> Loader Class Initialized
DEBUG - 2013-09-14 05:57:40 --> Helper loaded: form_helper
DEBUG - 2013-09-14 05:57:40 --> Helper loaded: url_helper
DEBUG - 2013-09-14 05:57:40 --> Helper loaded: html_helper
DEBUG - 2013-09-14 05:57:40 --> Database Driver Class Initialized
DEBUG - 2013-09-14 05:57:40 --> Session Class Initialized
DEBUG - 2013-09-14 05:57:40 --> Helper loaded: string_helper
DEBUG - 2013-09-14 05:57:40 --> Session routines successfully run
DEBUG - 2013-09-14 05:57:40 --> Form Validation Class Initialized
DEBUG - 2013-09-14 05:57:40 --> Controller Class Initialized
DEBUG - 2013-09-14 05:57:40 --> Model Class Initialized
DEBUG - 2013-09-14 05:57:40 --> Model Class Initialized
DEBUG - 2013-09-14 05:57:40 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-14 05:57:40 --> after session initialization................
INFO  - 2013-09-14 05:57:40 --> inside the auto suggest page.................
INFO  - 2013-09-14 05:57:40 --> after the list array.................
INFO  - 2013-09-14 05:57:40 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%pa%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-14 05:57:40 --> after retrieving the data from db.................
INFO  - 2013-09-14 05:57:40 --> looping.................
DEBUG - 2013-09-14 05:57:40 --> Final output sent to browser
DEBUG - 2013-09-14 05:57:40 --> Total execution time: 0.0620
DEBUG - 2013-09-14 05:57:42 --> Config Class Initialized
DEBUG - 2013-09-14 05:57:42 --> Hooks Class Initialized
DEBUG - 2013-09-14 05:57:42 --> Utf8 Class Initialized
DEBUG - 2013-09-14 05:57:42 --> UTF-8 Support Enabled
DEBUG - 2013-09-14 05:57:42 --> URI Class Initialized
DEBUG - 2013-09-14 05:57:42 --> Router Class Initialized
DEBUG - 2013-09-14 05:57:42 --> Output Class Initialized
DEBUG - 2013-09-14 05:57:42 --> Security Class Initialized
DEBUG - 2013-09-14 05:57:42 --> Input Class Initialized
DEBUG - 2013-09-14 05:57:42 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-14 05:57:42 --> Language Class Initialized
DEBUG - 2013-09-14 05:57:42 --> Loader Class Initialized
DEBUG - 2013-09-14 05:57:42 --> Helper loaded: form_helper
DEBUG - 2013-09-14 05:57:42 --> Helper loaded: url_helper
DEBUG - 2013-09-14 05:57:42 --> Helper loaded: html_helper
DEBUG - 2013-09-14 05:57:42 --> Database Driver Class Initialized
DEBUG - 2013-09-14 05:57:42 --> Session Class Initialized
DEBUG - 2013-09-14 05:57:42 --> Helper loaded: string_helper
DEBUG - 2013-09-14 05:57:42 --> Session routines successfully run
DEBUG - 2013-09-14 05:57:42 --> Form Validation Class Initialized
DEBUG - 2013-09-14 05:57:42 --> Controller Class Initialized
DEBUG - 2013-09-14 05:57:42 --> Model Class Initialized
DEBUG - 2013-09-14 05:57:42 --> Model Class Initialized
DEBUG - 2013-09-14 05:57:42 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-14 05:57:42 --> after session initialization................
INFO  - 2013-09-14 05:57:42 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-14 05:57:42 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-09-14 05:57:42 --> 5==============================0
INFO  - 2013-09-14 05:57:42 --> SELECT dc.id_drugcomment as id, dc.comment, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 5
INFO  - 2013-09-14 05:57:42 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-09-14 05:57:42 --> News by drug_id ::::::::::===>SELECT `n`.`id_news` as id, `n`.`title` as news_title, `n`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `n`.`time_created`
INFO  - 2013-09-14 05:57:42 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `n`.`title` as newsletter_title, `n`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `n`.`time_created`
DEBUG - 2013-09-14 05:57:42 --> Final output sent to browser
DEBUG - 2013-09-14 05:57:42 --> Total execution time: 0.0700
DEBUG - 2013-09-14 05:57:45 --> Config Class Initialized
DEBUG - 2013-09-14 05:57:45 --> Hooks Class Initialized
DEBUG - 2013-09-14 05:57:45 --> Utf8 Class Initialized
DEBUG - 2013-09-14 05:57:45 --> UTF-8 Support Enabled
DEBUG - 2013-09-14 05:57:45 --> URI Class Initialized
DEBUG - 2013-09-14 05:57:45 --> Router Class Initialized
DEBUG - 2013-09-14 05:57:45 --> Output Class Initialized
DEBUG - 2013-09-14 05:57:45 --> Security Class Initialized
DEBUG - 2013-09-14 05:57:45 --> Input Class Initialized
DEBUG - 2013-09-14 05:57:45 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-14 05:57:45 --> Language Class Initialized
DEBUG - 2013-09-14 05:57:45 --> Loader Class Initialized
DEBUG - 2013-09-14 05:57:45 --> Helper loaded: form_helper
DEBUG - 2013-09-14 05:57:45 --> Helper loaded: url_helper
DEBUG - 2013-09-14 05:57:45 --> Helper loaded: html_helper
DEBUG - 2013-09-14 05:57:45 --> Database Driver Class Initialized
DEBUG - 2013-09-14 05:57:45 --> Session Class Initialized
DEBUG - 2013-09-14 05:57:45 --> Helper loaded: string_helper
DEBUG - 2013-09-14 05:57:45 --> Session routines successfully run
DEBUG - 2013-09-14 05:57:45 --> Form Validation Class Initialized
DEBUG - 2013-09-14 05:57:45 --> Controller Class Initialized
DEBUG - 2013-09-14 05:57:45 --> Model Class Initialized
DEBUG - 2013-09-14 05:57:45 --> Model Class Initialized
DEBUG - 2013-09-14 05:57:45 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-14 05:57:45 --> after session initialization................
INFO  - 2013-09-14 05:57:45 --> inside the retrieve ajax comment page.................
INFO  - 2013-09-14 05:57:45 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-09-14 05:57:45 --> 10==============================30
INFO  - 2013-09-14 05:57:45 --> SELECT dc.id_drugcomment as id, dc.comment, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 30, 10
INFO  - 2013-09-14 05:57:45 --> [{"id":"29","comment":"nearly this time.....","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"28","comment":"did it work...","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"27","comment":"i changed something","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"26","comment":"i did another thing","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"25","comment":"i am trying","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"24","comment":"lkghdfhkhkjlkjk","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"23","comment":"lhklhfhjkhll;k","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"22","comment":"ghghghghg","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"21","comment":"klilk","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"20","comment":"ewseres","membername":"Elvis onuorah","membertypeimage":"profilem1"}]
DEBUG - 2013-09-14 05:57:45 --> Final output sent to browser
DEBUG - 2013-09-14 05:57:45 --> Total execution time: 0.0920
