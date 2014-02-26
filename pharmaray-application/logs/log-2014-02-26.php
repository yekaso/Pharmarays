<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2014-02-26 16:33:17 --> Config Class Initialized
DEBUG - 2014-02-26 16:33:17 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:33:17 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:33:17 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:33:17 --> URI Class Initialized
DEBUG - 2014-02-26 16:33:17 --> Router Class Initialized
DEBUG - 2014-02-26 16:33:17 --> Output Class Initialized
DEBUG - 2014-02-26 16:33:17 --> Security Class Initialized
DEBUG - 2014-02-26 16:33:17 --> Config Class Initialized
DEBUG - 2014-02-26 16:33:17 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:33:17 --> Input Class Initialized
DEBUG - 2014-02-26 16:33:17 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:33:17 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:33:17 --> Language Class Initialized
DEBUG - 2014-02-26 16:33:17 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:33:17 --> URI Class Initialized
DEBUG - 2014-02-26 16:33:17 --> Router Class Initialized
DEBUG - 2014-02-26 16:33:17 --> Loader Class Initialized
DEBUG - 2014-02-26 16:33:17 --> Output Class Initialized
DEBUG - 2014-02-26 16:33:17 --> Security Class Initialized
DEBUG - 2014-02-26 16:33:17 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:33:17 --> Input Class Initialized
DEBUG - 2014-02-26 16:33:17 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:33:17 --> Language Class Initialized
DEBUG - 2014-02-26 16:33:17 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:33:17 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:33:17 --> Loader Class Initialized
DEBUG - 2014-02-26 16:33:17 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:33:17 --> Database Driver Class Initialized
DEBUG - 2014-02-26 16:33:17 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:33:17 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:33:17 --> Database Driver Class Initialized
ERROR - 2014-02-26 16:33:17 --> Severity: Notice  --> mysql_pconnect(): send of 5 bytes failed with errno=10053 An established connection was aborted by the software in your host machine.
 C:\xampp\htdocs\Pharmarays\pharmaray-system\database\drivers\mysql\mysql_driver.php 91
ERROR - 2014-02-26 16:33:17 --> Severity: Notice  --> mysql_pconnect(): send of 5 bytes failed with errno=10053 An established connection was aborted by the software in your host machine.
 C:\xampp\htdocs\Pharmarays\pharmaray-system\database\drivers\mysql\mysql_driver.php 91
DEBUG - 2014-02-26 16:33:18 --> Session Class Initialized
DEBUG - 2014-02-26 16:33:18 --> Session Class Initialized
DEBUG - 2014-02-26 16:33:18 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:33:18 --> A session cookie was not found.
DEBUG - 2014-02-26 16:33:18 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:33:18 --> Session routines successfully run
DEBUG - 2014-02-26 16:33:18 --> A session cookie was not found.
DEBUG - 2014-02-26 16:33:18 --> Session routines successfully run
DEBUG - 2014-02-26 16:33:18 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:33:18 --> Controller Class Initialized
DEBUG - 2014-02-26 16:33:18 --> Model Class Initialized
DEBUG - 2014-02-26 16:33:18 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:33:18 --> Controller Class Initialized
DEBUG - 2014-02-26 16:33:18 --> Model Class Initialized
DEBUG - 2014-02-26 16:33:18 --> Model Class Initialized
DEBUG - 2014-02-26 16:33:18 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:33:18 --> after session initialization................
INFO  - 2014-02-26 16:33:18 --> inside the auto suggest page.................
INFO  - 2014-02-26 16:33:18 --> after the list array.................
DEBUG - 2014-02-26 16:33:18 --> Model Class Initialized
DEBUG - 2014-02-26 16:33:18 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:33:18 --> after session initialization................
INFO  - 2014-02-26 16:33:18 --> inside the auto suggest page.................
INFO  - 2014-02-26 16:33:18 --> after the list array.................
INFO  - 2014-02-26 16:33:18 --> Ajax retrieval ::::::::::===>SELECT d.id_drug, d.drug_name, group_concat(bn.name, ':', bn.id_brandname) as drug_brandname
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dc`.`brandname_id`
WHERE `d`.`drug_name` like '%benzathine benzylpenicillin%' and d.id_drug <> 519
GROUP BY `id_drug`, `id_drug`
ORDER BY `d`.`drug_name`
LIMIT 15
INFO  - 2014-02-26 16:33:18 --> after retrieving the data from db.................
DEBUG - 2014-02-26 16:33:18 --> Final output sent to browser
DEBUG - 2014-02-26 16:33:18 --> Total execution time: 1.1171
INFO  - 2014-02-26 16:33:18 --> Ajax retrieval ::::::::::===>SELECT d.id_drug, d.drug_name, group_concat(bn.name, ':', bn.id_brandname) as drug_brandname
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dc`.`brandname_id`
WHERE `d`.`drug_name` like '%benzathine benzylpenicillin%' and d.id_drug <> 519
GROUP BY `id_drug`, `id_drug`
ORDER BY `d`.`drug_name`
LIMIT 15
INFO  - 2014-02-26 16:33:18 --> after retrieving the data from db.................
DEBUG - 2014-02-26 16:33:18 --> Final output sent to browser
DEBUG - 2014-02-26 16:33:18 --> Total execution time: 1.1101
DEBUG - 2014-02-26 16:33:18 --> Config Class Initialized
DEBUG - 2014-02-26 16:33:18 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:33:18 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:33:18 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:33:18 --> URI Class Initialized
DEBUG - 2014-02-26 16:33:18 --> Router Class Initialized
DEBUG - 2014-02-26 16:33:18 --> Output Class Initialized
DEBUG - 2014-02-26 16:33:18 --> Security Class Initialized
DEBUG - 2014-02-26 16:33:18 --> Input Class Initialized
DEBUG - 2014-02-26 16:33:18 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:33:18 --> Language Class Initialized
DEBUG - 2014-02-26 16:33:18 --> Loader Class Initialized
DEBUG - 2014-02-26 16:33:18 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:33:18 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:33:18 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:33:18 --> Database Driver Class Initialized
DEBUG - 2014-02-26 16:33:18 --> Session Class Initialized
DEBUG - 2014-02-26 16:33:18 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:33:18 --> Session routines successfully run
DEBUG - 2014-02-26 16:33:18 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:33:18 --> Controller Class Initialized
DEBUG - 2014-02-26 16:33:18 --> Model Class Initialized
DEBUG - 2014-02-26 16:33:18 --> Model Class Initialized
DEBUG - 2014-02-26 16:33:18 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:33:18 --> after session initialization................
INFO  - 2014-02-26 16:33:18 --> inside the auto suggest page.................
INFO  - 2014-02-26 16:33:18 --> after the list array.................
INFO  - 2014-02-26 16:33:19 --> Ajax retrieval ::::::::::===>SELECT d.id_drug, d.drug_name, group_concat(bn.name, ':', bn.id_brandname) as drug_brandname
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dc`.`brandname_id`
WHERE `d`.`drug_name` like '%a%' and d.id_drug <> 519
GROUP BY `id_drug`, `id_drug`
ORDER BY `d`.`drug_name`
LIMIT 15
INFO  - 2014-02-26 16:33:19 --> after retrieving the data from db.................
INFO  - 2014-02-26 16:33:19 --> looping.................
INFO  - 2014-02-26 16:33:19 --> looping.................
INFO  - 2014-02-26 16:33:19 --> looping.................
INFO  - 2014-02-26 16:33:19 --> looping.................
INFO  - 2014-02-26 16:33:19 --> looping.................
INFO  - 2014-02-26 16:33:19 --> looping.................
INFO  - 2014-02-26 16:33:19 --> looping.................
INFO  - 2014-02-26 16:33:19 --> looping.................
INFO  - 2014-02-26 16:33:19 --> looping.................
INFO  - 2014-02-26 16:33:19 --> looping.................
DEBUG - 2014-02-26 16:33:19 --> Final output sent to browser
DEBUG - 2014-02-26 16:33:19 --> Total execution time: 0.0490
DEBUG - 2014-02-26 16:33:19 --> Config Class Initialized
DEBUG - 2014-02-26 16:33:19 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:33:19 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:33:19 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:33:19 --> URI Class Initialized
DEBUG - 2014-02-26 16:33:19 --> Router Class Initialized
DEBUG - 2014-02-26 16:33:19 --> Output Class Initialized
DEBUG - 2014-02-26 16:33:19 --> Security Class Initialized
DEBUG - 2014-02-26 16:33:19 --> Input Class Initialized
DEBUG - 2014-02-26 16:33:19 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:33:19 --> Language Class Initialized
DEBUG - 2014-02-26 16:33:19 --> Loader Class Initialized
DEBUG - 2014-02-26 16:33:19 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:33:19 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:33:19 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:33:19 --> Database Driver Class Initialized
DEBUG - 2014-02-26 16:33:19 --> Session Class Initialized
DEBUG - 2014-02-26 16:33:19 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:33:19 --> Session routines successfully run
DEBUG - 2014-02-26 16:33:19 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:33:19 --> Controller Class Initialized
DEBUG - 2014-02-26 16:33:19 --> Model Class Initialized
DEBUG - 2014-02-26 16:33:19 --> Model Class Initialized
DEBUG - 2014-02-26 16:33:19 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:33:19 --> after session initialization................
INFO  - 2014-02-26 16:33:19 --> inside the auto suggest page.................
INFO  - 2014-02-26 16:33:19 --> after the list array.................
INFO  - 2014-02-26 16:33:19 --> Ajax retrieval ::::::::::===>SELECT d.id_drug, d.drug_name, group_concat(bn.name, ':', bn.id_brandname) as drug_brandname
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dc`.`brandname_id`
WHERE `d`.`drug_name` like '%ab%' and d.id_drug <> 519
GROUP BY `id_drug`, `id_drug`
ORDER BY `d`.`drug_name`
LIMIT 15
INFO  - 2014-02-26 16:33:19 --> after retrieving the data from db.................
INFO  - 2014-02-26 16:33:19 --> looping.................
DEBUG - 2014-02-26 16:33:19 --> Final output sent to browser
DEBUG - 2014-02-26 16:33:19 --> Total execution time: 0.0550
DEBUG - 2014-02-26 16:33:49 --> Config Class Initialized
DEBUG - 2014-02-26 16:33:49 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:33:49 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:33:49 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:33:49 --> URI Class Initialized
DEBUG - 2014-02-26 16:33:49 --> Router Class Initialized
DEBUG - 2014-02-26 16:33:49 --> Output Class Initialized
DEBUG - 2014-02-26 16:33:49 --> Security Class Initialized
DEBUG - 2014-02-26 16:33:49 --> Input Class Initialized
DEBUG - 2014-02-26 16:33:49 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:33:49 --> Language Class Initialized
DEBUG - 2014-02-26 16:33:49 --> Loader Class Initialized
DEBUG - 2014-02-26 16:33:49 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:33:49 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:33:49 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:33:49 --> Database Driver Class Initialized
DEBUG - 2014-02-26 16:33:49 --> Session Class Initialized
DEBUG - 2014-02-26 16:33:49 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:33:49 --> Session routines successfully run
DEBUG - 2014-02-26 16:33:49 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:33:49 --> Controller Class Initialized
DEBUG - 2014-02-26 16:33:49 --> Model Class Initialized
DEBUG - 2014-02-26 16:33:49 --> Model Class Initialized
DEBUG - 2014-02-26 16:33:49 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:33:49 --> after session initialization................
INFO  - 2014-02-26 16:33:49 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dcc`.`brandname_id`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2014-02-26 16:33:49 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-02-26 16:33:49 --> 10==============================0
INFO  - 2014-02-26 16:33:49 --> SELECT dc.id_drugcomment as id, dc.comment, dc.time_created, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2014-02-26 16:33:49 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2014-02-26 16:33:49 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drugcategory_id` = `dc`.`id_drugcategory`
JOIN `drug` d ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2014-02-26 16:33:49 --> inside retrieving pharmacy for drug id is 1
INFO  - 2014-02-26 16:33:49 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 15
INFO  - 2014-02-26 16:33:49 --> inside retrieving comments member type id and drug id is 1
INFO  - 2014-02-26 16:33:49 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
DEBUG - 2014-02-26 16:33:49 --> Final output sent to browser
DEBUG - 2014-02-26 16:33:49 --> Total execution time: 0.0770
DEBUG - 2014-02-26 16:33:49 --> Config Class Initialized
DEBUG - 2014-02-26 16:33:49 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:33:49 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:33:49 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:33:49 --> URI Class Initialized
DEBUG - 2014-02-26 16:33:49 --> Router Class Initialized
DEBUG - 2014-02-26 16:33:49 --> Output Class Initialized
DEBUG - 2014-02-26 16:33:49 --> Security Class Initialized
DEBUG - 2014-02-26 16:33:49 --> Input Class Initialized
DEBUG - 2014-02-26 16:33:49 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:33:49 --> Language Class Initialized
DEBUG - 2014-02-26 16:33:49 --> Loader Class Initialized
DEBUG - 2014-02-26 16:33:49 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:33:49 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:33:49 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:33:49 --> Database Driver Class Initialized
DEBUG - 2014-02-26 16:33:49 --> Session Class Initialized
DEBUG - 2014-02-26 16:33:49 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:33:49 --> Session routines successfully run
DEBUG - 2014-02-26 16:33:49 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:33:49 --> Controller Class Initialized
DEBUG - 2014-02-26 16:33:49 --> Model Class Initialized
DEBUG - 2014-02-26 16:33:49 --> Model Class Initialized
DEBUG - 2014-02-26 16:33:49 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:33:49 --> after session initialization................
INFO  - 2014-02-26 16:33:50 --> before inserting into article search table.................
INFO  - 2014-02-26 16:33:50 --> after inserting into article search table.................83
INFO  - 2014-02-26 16:33:50 --> INSERT INTO `drug_search` (`drug_id`, `timecreated`, `ipaddress`, `location`, `longitude`, `latitude`, `user_id`) VALUES ('1', '2014-02-26 16:33:50', '::1', 'Lagos', '3.39583', '6.45306', '')
DEBUG - 2014-02-26 16:33:50 --> Final output sent to browser
DEBUG - 2014-02-26 16:33:50 --> Total execution time: 1.5381
DEBUG - 2014-02-26 16:36:46 --> Config Class Initialized
DEBUG - 2014-02-26 16:36:46 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:36:46 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:36:46 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:36:46 --> URI Class Initialized
DEBUG - 2014-02-26 16:36:46 --> Router Class Initialized
DEBUG - 2014-02-26 16:36:46 --> Output Class Initialized
DEBUG - 2014-02-26 16:36:46 --> Security Class Initialized
DEBUG - 2014-02-26 16:36:46 --> Input Class Initialized
DEBUG - 2014-02-26 16:36:46 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:36:46 --> Language Class Initialized
DEBUG - 2014-02-26 16:36:46 --> Loader Class Initialized
DEBUG - 2014-02-26 16:36:46 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:36:46 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:36:46 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:36:46 --> Database Driver Class Initialized
DEBUG - 2014-02-26 16:36:46 --> Session Class Initialized
DEBUG - 2014-02-26 16:36:46 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:36:46 --> Session routines successfully run
DEBUG - 2014-02-26 16:36:46 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:36:46 --> Controller Class Initialized
DEBUG - 2014-02-26 16:36:46 --> Model Class Initialized
DEBUG - 2014-02-26 16:36:46 --> Model Class Initialized
DEBUG - 2014-02-26 16:36:46 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:36:46 --> after session initialization................
INFO  - 2014-02-26 16:36:46 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  ''
INFO  - 2014-02-26 16:36:46 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-02-26 16:36:46 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2014-02-26 16:36:46 --> inside retrieving vacancy for member
INFO  - 2014-02-26 16:36:46 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2014-02-26 16:36:46 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-02-26 16:36:46 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2014-02-26 16:36:46 --> Drugs ::::::::::===>SELECT d.id_drug, d.drug_name, d.drug_description, bn.id_brandname as brandname_id, bn.name as drug_brandname, dcc.id_drugcategory as category_id
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dcc`.`brandname_id`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2014-02-26 16:36:46 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drugcategory_id` = `dc`.`id_drugcategory`
JOIN `drug` d ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2014-02-26 16:36:46 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2014-02-26 16:36:46 --> inside retrieving pharmacy for drug id is 1
INFO  - 2014-02-26 16:36:46 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2014-02-26 16:36:46 --> Related drugs ::::::::::===>SELECT d.drug_name
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcg`.`drugcategory_id` = `dcc`.`id_drugcategory`
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
WHERE `dcc`.`brandname_id` =  '0'
AND `dc`.`id_drugclass` =  '0'
INFO  - 2014-02-26 16:36:46 --> inside retrieve most searched drugs
INFO  - 2014-02-26 16:36:46 --> SELECT `d`.`id_drug` as id, `d`.`drug_name` as name, count(ds.id_drugsearch) as search_count
FROM (`drug_search` ds)
JOIN `drug` d ON `d`.`id_drug` = `ds`.`drug_id`
GROUP BY `d`.`id_drug`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:36:46 --> inside retrieve most searched pharmacy
INFO  - 2014-02-26 16:36:46 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:36:46 --> inside retrieve most searched article
INFO  - 2014-02-26 16:36:46 --> SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description, count(ats.article_id) as search_count
FROM (`article_search` ats)
JOIN `article` a ON `a`.`id_article` = `ats`.`article_id`
JOIN `news` n ON `a`.`newsid_news` = `n`.`id_news`
GROUP BY `a`.`id_article`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:36:46 --> The session id is ========>ef9d0234f0bd4db89693b1e5b027f0ae and the member id is =======>
INFO  - 2014-02-26 16:36:46 -->  column name inside view is 0 column Data is 618
INFO  - 2014-02-26 16:36:46 -->  column name inside view is 1 column Data is 488
INFO  - 2014-02-26 16:36:46 -->  column name inside view is 2 column Data is 487
INFO  - 2014-02-26 16:36:46 -->  column name inside view is 3 column Data is 1
INFO  - 2014-02-26 16:36:46 -->  column name inside view is 4 column Data is 641
INFO  - 2014-02-26 16:36:46 -->  column name inside view is 5 column Data is 649
INFO  - 2014-02-26 16:36:46 -->  column name inside view is 6 column Data is 502
INFO  - 2014-02-26 16:36:46 -->  column name inside view is 7 column Data is 498
INFO  - 2014-02-26 16:36:46 -->  column name inside view is 8 column Data is 619
INFO  - 2014-02-26 16:36:46 -->  column name inside view is 9 column Data is 497
INFO  - 2014-02-26 16:36:46 -->  column name inside view is 0 column Data is 2
INFO  - 2014-02-26 16:36:46 -->  column name inside view is 1 column Data is 3
INFO  - 2014-02-26 16:36:46 -->  column name inside view is 2 column Data is 18
INFO  - 2014-02-26 16:36:46 -->  column name inside view is 3 column Data is 1
INFO  - 2014-02-26 16:36:46 -->  column name inside view is 4 column Data is 15
INFO  - 2014-02-26 16:36:46 -->  column name inside view is 5 column Data is 14
INFO  - 2014-02-26 16:36:46 -->  column name inside view is 6 column Data is 6
INFO  - 2014-02-26 16:36:46 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2014-02-26 16:36:46 --> File loaded: ../pharmaray-application/views/onlinepharmacy.php
DEBUG - 2014-02-26 16:36:46 --> Final output sent to browser
DEBUG - 2014-02-26 16:36:46 --> Total execution time: 0.1290
DEBUG - 2014-02-26 16:36:46 --> Config Class Initialized
DEBUG - 2014-02-26 16:36:46 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:36:46 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:36:46 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:36:46 --> URI Class Initialized
DEBUG - 2014-02-26 16:36:46 --> Router Class Initialized
ERROR - 2014-02-26 16:36:46 --> 404 Page Not Found --> css
DEBUG - 2014-02-26 16:36:49 --> Config Class Initialized
DEBUG - 2014-02-26 16:36:49 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:36:49 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:36:49 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:36:49 --> URI Class Initialized
DEBUG - 2014-02-26 16:36:49 --> Router Class Initialized
DEBUG - 2014-02-26 16:36:49 --> Output Class Initialized
DEBUG - 2014-02-26 16:36:49 --> Security Class Initialized
DEBUG - 2014-02-26 16:36:49 --> Input Class Initialized
DEBUG - 2014-02-26 16:36:49 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:36:49 --> Language Class Initialized
DEBUG - 2014-02-26 16:36:49 --> Loader Class Initialized
DEBUG - 2014-02-26 16:36:49 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:36:49 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:36:49 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:36:49 --> Database Driver Class Initialized
DEBUG - 2014-02-26 16:36:49 --> Session Class Initialized
DEBUG - 2014-02-26 16:36:49 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:36:49 --> Session routines successfully run
DEBUG - 2014-02-26 16:36:49 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:36:49 --> Controller Class Initialized
DEBUG - 2014-02-26 16:36:49 --> Model Class Initialized
DEBUG - 2014-02-26 16:36:49 --> Model Class Initialized
DEBUG - 2014-02-26 16:36:49 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:36:49 --> after session initialization................
INFO  - 2014-02-26 16:36:49 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  ''
INFO  - 2014-02-26 16:36:49 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-02-26 16:36:49 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2014-02-26 16:36:49 --> inside retrieving vacancy for member
INFO  - 2014-02-26 16:36:49 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2014-02-26 16:36:49 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-02-26 16:36:49 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2014-02-26 16:36:49 --> Drugs ::::::::::===>SELECT d.id_drug, d.drug_name, d.drug_description, bn.id_brandname as brandname_id, bn.name as drug_brandname, dcc.id_drugcategory as category_id
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dcc`.`brandname_id`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2014-02-26 16:36:49 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drugcategory_id` = `dc`.`id_drugcategory`
JOIN `drug` d ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2014-02-26 16:36:49 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2014-02-26 16:36:49 --> inside retrieving pharmacy for drug id is 1
INFO  - 2014-02-26 16:36:49 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2014-02-26 16:36:49 --> Related drugs ::::::::::===>SELECT d.drug_name
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcg`.`drugcategory_id` = `dcc`.`id_drugcategory`
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
WHERE `dcc`.`brandname_id` =  '0'
AND `dc`.`id_drugclass` =  '0'
INFO  - 2014-02-26 16:36:49 --> inside retrieve most searched drugs
INFO  - 2014-02-26 16:36:49 --> SELECT `d`.`id_drug` as id, `d`.`drug_name` as name, count(ds.id_drugsearch) as search_count
FROM (`drug_search` ds)
JOIN `drug` d ON `d`.`id_drug` = `ds`.`drug_id`
GROUP BY `d`.`id_drug`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:36:49 --> inside retrieve most searched pharmacy
INFO  - 2014-02-26 16:36:49 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:36:49 --> inside retrieve most searched article
INFO  - 2014-02-26 16:36:49 --> SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description, count(ats.article_id) as search_count
FROM (`article_search` ats)
JOIN `article` a ON `a`.`id_article` = `ats`.`article_id`
JOIN `news` n ON `a`.`newsid_news` = `n`.`id_news`
GROUP BY `a`.`id_article`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:36:49 --> The session id is ========>ef9d0234f0bd4db89693b1e5b027f0ae and the member id is =======>
INFO  - 2014-02-26 16:36:49 -->  column name inside view is 0 column Data is 618
INFO  - 2014-02-26 16:36:49 -->  column name inside view is 1 column Data is 488
INFO  - 2014-02-26 16:36:49 -->  column name inside view is 2 column Data is 487
INFO  - 2014-02-26 16:36:49 -->  column name inside view is 3 column Data is 1
INFO  - 2014-02-26 16:36:49 -->  column name inside view is 4 column Data is 641
INFO  - 2014-02-26 16:36:49 -->  column name inside view is 5 column Data is 649
INFO  - 2014-02-26 16:36:49 -->  column name inside view is 6 column Data is 502
INFO  - 2014-02-26 16:36:49 -->  column name inside view is 7 column Data is 498
INFO  - 2014-02-26 16:36:49 -->  column name inside view is 8 column Data is 619
INFO  - 2014-02-26 16:36:49 -->  column name inside view is 9 column Data is 497
INFO  - 2014-02-26 16:36:49 -->  column name inside view is 0 column Data is 2
INFO  - 2014-02-26 16:36:49 -->  column name inside view is 1 column Data is 3
INFO  - 2014-02-26 16:36:49 -->  column name inside view is 2 column Data is 18
INFO  - 2014-02-26 16:36:49 -->  column name inside view is 3 column Data is 1
INFO  - 2014-02-26 16:36:49 -->  column name inside view is 4 column Data is 15
INFO  - 2014-02-26 16:36:49 -->  column name inside view is 5 column Data is 14
INFO  - 2014-02-26 16:36:49 -->  column name inside view is 6 column Data is 6
INFO  - 2014-02-26 16:36:49 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2014-02-26 16:36:49 --> File loaded: ../pharmaray-application/views/onlinepharmacy.php
DEBUG - 2014-02-26 16:36:49 --> Final output sent to browser
DEBUG - 2014-02-26 16:36:49 --> Total execution time: 0.1080
DEBUG - 2014-02-26 16:36:49 --> Config Class Initialized
DEBUG - 2014-02-26 16:36:49 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:36:49 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:36:49 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:36:49 --> URI Class Initialized
DEBUG - 2014-02-26 16:36:49 --> Router Class Initialized
ERROR - 2014-02-26 16:36:49 --> 404 Page Not Found --> css
DEBUG - 2014-02-26 16:36:51 --> Config Class Initialized
DEBUG - 2014-02-26 16:36:51 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:36:51 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:36:51 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:36:51 --> URI Class Initialized
DEBUG - 2014-02-26 16:36:51 --> Router Class Initialized
DEBUG - 2014-02-26 16:36:51 --> Output Class Initialized
DEBUG - 2014-02-26 16:36:51 --> Security Class Initialized
DEBUG - 2014-02-26 16:36:51 --> Input Class Initialized
DEBUG - 2014-02-26 16:36:51 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:36:51 --> Language Class Initialized
DEBUG - 2014-02-26 16:36:51 --> Loader Class Initialized
DEBUG - 2014-02-26 16:36:51 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:36:51 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:36:51 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:36:51 --> Database Driver Class Initialized
DEBUG - 2014-02-26 16:36:51 --> Session Class Initialized
DEBUG - 2014-02-26 16:36:51 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:36:51 --> Session routines successfully run
DEBUG - 2014-02-26 16:36:51 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:36:51 --> Controller Class Initialized
DEBUG - 2014-02-26 16:36:51 --> Model Class Initialized
DEBUG - 2014-02-26 16:36:51 --> Model Class Initialized
DEBUG - 2014-02-26 16:36:51 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:36:51 --> after session initialization................
INFO  - 2014-02-26 16:36:51 --> inside the auto suggest page.................
INFO  - 2014-02-26 16:36:51 --> after the list array.................
INFO  - 2014-02-26 16:36:51 --> Ajax retrieval ::::::::::===>SELECT d.id_drug, d.drug_name, group_concat(bn.name, ':', bn.id_brandname) as drug_brandname
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dc`.`brandname_id`
WHERE `d`.`drug_name` like '%a%' and d.id_drug <> 1
GROUP BY `id_drug`, `id_drug`
ORDER BY `d`.`drug_name`
LIMIT 15
INFO  - 2014-02-26 16:36:51 --> after retrieving the data from db.................
INFO  - 2014-02-26 16:36:51 --> looping.................
INFO  - 2014-02-26 16:36:51 --> looping.................
INFO  - 2014-02-26 16:36:51 --> looping.................
INFO  - 2014-02-26 16:36:51 --> looping.................
INFO  - 2014-02-26 16:36:51 --> looping.................
INFO  - 2014-02-26 16:36:51 --> looping.................
INFO  - 2014-02-26 16:36:51 --> looping.................
INFO  - 2014-02-26 16:36:51 --> looping.................
INFO  - 2014-02-26 16:36:51 --> looping.................
INFO  - 2014-02-26 16:36:51 --> looping.................
DEBUG - 2014-02-26 16:36:51 --> Final output sent to browser
DEBUG - 2014-02-26 16:36:51 --> Total execution time: 0.0460
DEBUG - 2014-02-26 16:36:52 --> Config Class Initialized
DEBUG - 2014-02-26 16:36:52 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:36:52 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:36:52 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:36:52 --> URI Class Initialized
DEBUG - 2014-02-26 16:36:52 --> Router Class Initialized
DEBUG - 2014-02-26 16:36:52 --> Output Class Initialized
DEBUG - 2014-02-26 16:36:52 --> Security Class Initialized
DEBUG - 2014-02-26 16:36:52 --> Input Class Initialized
DEBUG - 2014-02-26 16:36:52 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:36:52 --> Language Class Initialized
DEBUG - 2014-02-26 16:36:52 --> Loader Class Initialized
DEBUG - 2014-02-26 16:36:52 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:36:52 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:36:52 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:36:52 --> Database Driver Class Initialized
DEBUG - 2014-02-26 16:36:52 --> Session Class Initialized
DEBUG - 2014-02-26 16:36:52 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:36:52 --> Session routines successfully run
DEBUG - 2014-02-26 16:36:52 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:36:52 --> Controller Class Initialized
DEBUG - 2014-02-26 16:36:52 --> Model Class Initialized
DEBUG - 2014-02-26 16:36:52 --> Model Class Initialized
DEBUG - 2014-02-26 16:36:52 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:36:52 --> after session initialization................
INFO  - 2014-02-26 16:36:52 --> inside the auto suggest page.................
INFO  - 2014-02-26 16:36:52 --> after the list array.................
INFO  - 2014-02-26 16:36:52 --> Ajax retrieval ::::::::::===>SELECT d.id_drug, d.drug_name, group_concat(bn.name, ':', bn.id_brandname) as drug_brandname
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dc`.`brandname_id`
WHERE `d`.`drug_name` like '%ad%' and d.id_drug <> 1
GROUP BY `id_drug`, `id_drug`
ORDER BY `d`.`drug_name`
LIMIT 15
INFO  - 2014-02-26 16:36:52 --> after retrieving the data from db.................
INFO  - 2014-02-26 16:36:52 --> looping.................
DEBUG - 2014-02-26 16:36:52 --> Final output sent to browser
DEBUG - 2014-02-26 16:36:52 --> Total execution time: 0.0420
DEBUG - 2014-02-26 16:36:53 --> Config Class Initialized
DEBUG - 2014-02-26 16:36:53 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:36:53 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:36:53 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:36:53 --> URI Class Initialized
DEBUG - 2014-02-26 16:36:53 --> Router Class Initialized
DEBUG - 2014-02-26 16:36:53 --> Output Class Initialized
DEBUG - 2014-02-26 16:36:53 --> Security Class Initialized
DEBUG - 2014-02-26 16:36:53 --> Input Class Initialized
DEBUG - 2014-02-26 16:36:53 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:36:53 --> Language Class Initialized
DEBUG - 2014-02-26 16:36:53 --> Loader Class Initialized
DEBUG - 2014-02-26 16:36:53 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:36:53 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:36:53 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:36:53 --> Database Driver Class Initialized
DEBUG - 2014-02-26 16:36:53 --> Session Class Initialized
DEBUG - 2014-02-26 16:36:53 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:36:53 --> Session routines successfully run
DEBUG - 2014-02-26 16:36:53 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:36:53 --> Controller Class Initialized
DEBUG - 2014-02-26 16:36:53 --> Model Class Initialized
DEBUG - 2014-02-26 16:36:53 --> Model Class Initialized
DEBUG - 2014-02-26 16:36:53 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:36:53 --> after session initialization................
INFO  - 2014-02-26 16:36:53 --> inside the auto suggest page.................
INFO  - 2014-02-26 16:36:53 --> after the list array.................
INFO  - 2014-02-26 16:36:53 --> Ajax retrieval ::::::::::===>SELECT d.id_drug, d.drug_name, group_concat(bn.name, ':', bn.id_brandname) as drug_brandname
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dc`.`brandname_id`
WHERE `d`.`drug_name` like '%adr%' and d.id_drug <> 1
GROUP BY `id_drug`, `id_drug`
ORDER BY `d`.`drug_name`
LIMIT 15
INFO  - 2014-02-26 16:36:53 --> after retrieving the data from db.................
INFO  - 2014-02-26 16:36:53 --> looping.................
DEBUG - 2014-02-26 16:36:53 --> Final output sent to browser
DEBUG - 2014-02-26 16:36:53 --> Total execution time: 0.0440
DEBUG - 2014-02-26 16:36:53 --> Config Class Initialized
DEBUG - 2014-02-26 16:36:53 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:36:53 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:36:53 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:36:53 --> URI Class Initialized
DEBUG - 2014-02-26 16:36:53 --> Router Class Initialized
DEBUG - 2014-02-26 16:36:53 --> Output Class Initialized
DEBUG - 2014-02-26 16:36:53 --> Security Class Initialized
DEBUG - 2014-02-26 16:36:53 --> Input Class Initialized
DEBUG - 2014-02-26 16:36:53 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:36:53 --> Language Class Initialized
DEBUG - 2014-02-26 16:36:53 --> Loader Class Initialized
DEBUG - 2014-02-26 16:36:53 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:36:53 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:36:53 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:36:53 --> Database Driver Class Initialized
DEBUG - 2014-02-26 16:36:53 --> Session Class Initialized
DEBUG - 2014-02-26 16:36:53 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:36:53 --> Session routines successfully run
DEBUG - 2014-02-26 16:36:53 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:36:53 --> Controller Class Initialized
DEBUG - 2014-02-26 16:36:53 --> Model Class Initialized
DEBUG - 2014-02-26 16:36:53 --> Model Class Initialized
DEBUG - 2014-02-26 16:36:53 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:36:53 --> after session initialization................
INFO  - 2014-02-26 16:36:53 --> inside the auto suggest page.................
INFO  - 2014-02-26 16:36:53 --> after the list array.................
INFO  - 2014-02-26 16:36:53 --> Ajax retrieval ::::::::::===>SELECT d.id_drug, d.drug_name, group_concat(bn.name, ':', bn.id_brandname) as drug_brandname
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dc`.`brandname_id`
WHERE `d`.`drug_name` like '%adre%' and d.id_drug <> 1
GROUP BY `id_drug`, `id_drug`
ORDER BY `d`.`drug_name`
LIMIT 15
INFO  - 2014-02-26 16:36:53 --> after retrieving the data from db.................
INFO  - 2014-02-26 16:36:53 --> looping.................
DEBUG - 2014-02-26 16:36:53 --> Final output sent to browser
DEBUG - 2014-02-26 16:36:53 --> Total execution time: 0.0540
DEBUG - 2014-02-26 16:37:28 --> Config Class Initialized
DEBUG - 2014-02-26 16:37:28 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:37:28 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:37:28 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:37:28 --> URI Class Initialized
DEBUG - 2014-02-26 16:37:28 --> Router Class Initialized
DEBUG - 2014-02-26 16:37:28 --> Output Class Initialized
DEBUG - 2014-02-26 16:37:28 --> Security Class Initialized
DEBUG - 2014-02-26 16:37:28 --> Input Class Initialized
DEBUG - 2014-02-26 16:37:28 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:37:28 --> Language Class Initialized
DEBUG - 2014-02-26 16:37:28 --> Loader Class Initialized
DEBUG - 2014-02-26 16:37:28 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:37:28 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:37:28 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:37:28 --> Database Driver Class Initialized
DEBUG - 2014-02-26 16:37:28 --> Session Class Initialized
DEBUG - 2014-02-26 16:37:28 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:37:28 --> Session routines successfully run
DEBUG - 2014-02-26 16:37:28 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:37:28 --> Controller Class Initialized
DEBUG - 2014-02-26 16:37:28 --> Model Class Initialized
DEBUG - 2014-02-26 16:37:28 --> Model Class Initialized
DEBUG - 2014-02-26 16:37:28 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:37:28 --> after session initialization................
INFO  - 2014-02-26 16:37:28 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  ''
INFO  - 2014-02-26 16:37:28 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-02-26 16:37:28 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2014-02-26 16:37:28 --> inside retrieving vacancy for member
INFO  - 2014-02-26 16:37:28 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2014-02-26 16:37:28 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-02-26 16:37:28 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2014-02-26 16:37:28 --> Drugs ::::::::::===>SELECT d.id_drug, d.drug_name, d.drug_description, bn.id_brandname as brandname_id, bn.name as drug_brandname, dcc.id_drugcategory as category_id
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dcc`.`brandname_id`
WHERE `d`.`id_drug` =  '1'
GROUP BY `id_drug`
ORDER BY `d`.`drug_name`
INFO  - 2014-02-26 16:37:28 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drugcategory_id` = `dc`.`id_drugcategory`
JOIN `drug` d ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2014-02-26 16:37:28 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2014-02-26 16:37:28 --> inside retrieving pharmacy for drug id is 1
INFO  - 2014-02-26 16:37:28 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2014-02-26 16:37:28 --> Related drugs ::::::::::===>SELECT d.drug_name
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcg`.`drugcategory_id` = `dcc`.`id_drugcategory`
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
WHERE `dcc`.`brandname_id` =  '0'
AND `dc`.`id_drugclass` =  '0'
INFO  - 2014-02-26 16:37:28 --> inside retrieve most searched drugs
INFO  - 2014-02-26 16:37:28 --> SELECT `d`.`id_drug` as id, `d`.`drug_name` as name, count(ds.id_drugsearch) as search_count
FROM (`drug_search` ds)
JOIN `drug` d ON `d`.`id_drug` = `ds`.`drug_id`
GROUP BY `d`.`id_drug`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:37:28 --> inside retrieve most searched pharmacy
INFO  - 2014-02-26 16:37:28 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:37:28 --> inside retrieve most searched article
INFO  - 2014-02-26 16:37:28 --> SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description, count(ats.article_id) as search_count
FROM (`article_search` ats)
JOIN `article` a ON `a`.`id_article` = `ats`.`article_id`
JOIN `news` n ON `a`.`newsid_news` = `n`.`id_news`
GROUP BY `a`.`id_article`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:37:28 --> The session id is ========>ef9d0234f0bd4db89693b1e5b027f0ae and the member id is =======>
INFO  - 2014-02-26 16:37:28 -->  column name inside view is 0 column Data is 618
INFO  - 2014-02-26 16:37:28 -->  column name inside view is 1 column Data is 488
INFO  - 2014-02-26 16:37:28 -->  column name inside view is 2 column Data is 487
INFO  - 2014-02-26 16:37:28 -->  column name inside view is 3 column Data is 1
INFO  - 2014-02-26 16:37:28 -->  column name inside view is 4 column Data is 641
INFO  - 2014-02-26 16:37:28 -->  column name inside view is 5 column Data is 649
INFO  - 2014-02-26 16:37:28 -->  column name inside view is 6 column Data is 502
INFO  - 2014-02-26 16:37:28 -->  column name inside view is 7 column Data is 498
INFO  - 2014-02-26 16:37:28 -->  column name inside view is 8 column Data is 619
INFO  - 2014-02-26 16:37:28 -->  column name inside view is 9 column Data is 497
INFO  - 2014-02-26 16:37:28 -->  column name inside view is 0 column Data is 2
INFO  - 2014-02-26 16:37:28 -->  column name inside view is 1 column Data is 3
INFO  - 2014-02-26 16:37:28 -->  column name inside view is 2 column Data is 18
INFO  - 2014-02-26 16:37:28 -->  column name inside view is 3 column Data is 1
INFO  - 2014-02-26 16:37:28 -->  column name inside view is 4 column Data is 15
INFO  - 2014-02-26 16:37:28 -->  column name inside view is 5 column Data is 14
INFO  - 2014-02-26 16:37:28 -->  column name inside view is 6 column Data is 6
INFO  - 2014-02-26 16:37:28 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2014-02-26 16:37:28 --> File loaded: ../pharmaray-application/views/onlinepharmacy.php
DEBUG - 2014-02-26 16:37:28 --> Final output sent to browser
DEBUG - 2014-02-26 16:37:28 --> Total execution time: 0.1440
DEBUG - 2014-02-26 16:37:28 --> Config Class Initialized
DEBUG - 2014-02-26 16:37:28 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:37:28 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:37:28 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:37:28 --> URI Class Initialized
DEBUG - 2014-02-26 16:37:28 --> Router Class Initialized
ERROR - 2014-02-26 16:37:28 --> 404 Page Not Found --> css
DEBUG - 2014-02-26 16:37:29 --> Config Class Initialized
DEBUG - 2014-02-26 16:37:29 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:37:29 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:37:29 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:37:29 --> URI Class Initialized
DEBUG - 2014-02-26 16:37:29 --> Router Class Initialized
DEBUG - 2014-02-26 16:37:29 --> Output Class Initialized
DEBUG - 2014-02-26 16:37:29 --> Security Class Initialized
DEBUG - 2014-02-26 16:37:29 --> Input Class Initialized
DEBUG - 2014-02-26 16:37:29 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:37:29 --> Language Class Initialized
DEBUG - 2014-02-26 16:37:29 --> Loader Class Initialized
DEBUG - 2014-02-26 16:37:29 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:37:29 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:37:29 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:37:29 --> Database Driver Class Initialized
DEBUG - 2014-02-26 16:37:29 --> Session Class Initialized
DEBUG - 2014-02-26 16:37:29 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:37:29 --> Session routines successfully run
DEBUG - 2014-02-26 16:37:29 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:37:29 --> Controller Class Initialized
DEBUG - 2014-02-26 16:37:29 --> Model Class Initialized
DEBUG - 2014-02-26 16:37:29 --> Model Class Initialized
DEBUG - 2014-02-26 16:37:29 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:37:29 --> after session initialization................
INFO  - 2014-02-26 16:37:29 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  ''
INFO  - 2014-02-26 16:37:29 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-02-26 16:37:29 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2014-02-26 16:37:29 --> inside retrieving vacancy for member
INFO  - 2014-02-26 16:37:29 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2014-02-26 16:37:29 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-02-26 16:37:29 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2014-02-26 16:37:29 --> Drugs ::::::::::===>SELECT d.id_drug, d.drug_name, d.drug_description, bn.id_brandname as brandname_id, bn.name as drug_brandname, dcc.id_drugcategory as category_id
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dcc`.`brandname_id`
WHERE `d`.`id_drug` =  '1'
GROUP BY `id_drug`
ORDER BY `d`.`drug_name`
INFO  - 2014-02-26 16:37:29 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drugcategory_id` = `dc`.`id_drugcategory`
JOIN `drug` d ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2014-02-26 16:37:29 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2014-02-26 16:37:29 --> inside retrieving pharmacy for drug id is 1
INFO  - 2014-02-26 16:37:29 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2014-02-26 16:37:29 --> Related drugs ::::::::::===>SELECT d.drug_name
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcg`.`drugcategory_id` = `dcc`.`id_drugcategory`
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
WHERE `dcc`.`brandname_id` =  '0'
AND `dc`.`id_drugclass` =  '0'
INFO  - 2014-02-26 16:37:29 --> inside retrieve most searched drugs
INFO  - 2014-02-26 16:37:29 --> SELECT `d`.`id_drug` as id, `d`.`drug_name` as name, count(ds.id_drugsearch) as search_count
FROM (`drug_search` ds)
JOIN `drug` d ON `d`.`id_drug` = `ds`.`drug_id`
GROUP BY `d`.`id_drug`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:37:29 --> inside retrieve most searched pharmacy
INFO  - 2014-02-26 16:37:29 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:37:29 --> inside retrieve most searched article
INFO  - 2014-02-26 16:37:29 --> SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description, count(ats.article_id) as search_count
FROM (`article_search` ats)
JOIN `article` a ON `a`.`id_article` = `ats`.`article_id`
JOIN `news` n ON `a`.`newsid_news` = `n`.`id_news`
GROUP BY `a`.`id_article`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:37:29 --> The session id is ========>ef9d0234f0bd4db89693b1e5b027f0ae and the member id is =======>
INFO  - 2014-02-26 16:37:29 -->  column name inside view is 0 column Data is 618
INFO  - 2014-02-26 16:37:29 -->  column name inside view is 1 column Data is 488
INFO  - 2014-02-26 16:37:29 -->  column name inside view is 2 column Data is 487
INFO  - 2014-02-26 16:37:29 -->  column name inside view is 3 column Data is 1
INFO  - 2014-02-26 16:37:29 -->  column name inside view is 4 column Data is 641
INFO  - 2014-02-26 16:37:29 -->  column name inside view is 5 column Data is 649
INFO  - 2014-02-26 16:37:29 -->  column name inside view is 6 column Data is 502
INFO  - 2014-02-26 16:37:29 -->  column name inside view is 7 column Data is 498
INFO  - 2014-02-26 16:37:29 -->  column name inside view is 8 column Data is 619
INFO  - 2014-02-26 16:37:29 -->  column name inside view is 9 column Data is 497
INFO  - 2014-02-26 16:37:29 -->  column name inside view is 0 column Data is 2
INFO  - 2014-02-26 16:37:29 -->  column name inside view is 1 column Data is 3
INFO  - 2014-02-26 16:37:29 -->  column name inside view is 2 column Data is 18
INFO  - 2014-02-26 16:37:29 -->  column name inside view is 3 column Data is 1
INFO  - 2014-02-26 16:37:29 -->  column name inside view is 4 column Data is 15
INFO  - 2014-02-26 16:37:29 -->  column name inside view is 5 column Data is 14
INFO  - 2014-02-26 16:37:29 -->  column name inside view is 6 column Data is 6
INFO  - 2014-02-26 16:37:29 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2014-02-26 16:37:29 --> File loaded: ../pharmaray-application/views/onlinepharmacy.php
DEBUG - 2014-02-26 16:37:29 --> Final output sent to browser
DEBUG - 2014-02-26 16:37:29 --> Total execution time: 0.1000
DEBUG - 2014-02-26 16:37:29 --> Config Class Initialized
DEBUG - 2014-02-26 16:37:29 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:37:29 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:37:29 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:37:29 --> URI Class Initialized
DEBUG - 2014-02-26 16:37:29 --> Router Class Initialized
ERROR - 2014-02-26 16:37:29 --> 404 Page Not Found --> css
DEBUG - 2014-02-26 16:37:52 --> Config Class Initialized
DEBUG - 2014-02-26 16:37:52 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:37:52 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:37:52 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:37:52 --> URI Class Initialized
DEBUG - 2014-02-26 16:37:52 --> Router Class Initialized
DEBUG - 2014-02-26 16:37:52 --> Output Class Initialized
DEBUG - 2014-02-26 16:37:52 --> Security Class Initialized
DEBUG - 2014-02-26 16:37:52 --> Input Class Initialized
DEBUG - 2014-02-26 16:37:52 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:37:52 --> Language Class Initialized
DEBUG - 2014-02-26 16:37:52 --> Loader Class Initialized
DEBUG - 2014-02-26 16:37:52 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:37:53 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:37:53 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:37:53 --> Database Driver Class Initialized
DEBUG - 2014-02-26 16:37:53 --> Session Class Initialized
DEBUG - 2014-02-26 16:37:53 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:37:53 --> Session routines successfully run
DEBUG - 2014-02-26 16:37:53 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:37:53 --> Controller Class Initialized
DEBUG - 2014-02-26 16:37:53 --> Model Class Initialized
DEBUG - 2014-02-26 16:37:53 --> Model Class Initialized
DEBUG - 2014-02-26 16:37:53 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:37:53 --> after session initialization................
INFO  - 2014-02-26 16:37:53 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  ''
INFO  - 2014-02-26 16:37:53 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-02-26 16:37:53 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2014-02-26 16:37:53 --> inside retrieving vacancy for member
INFO  - 2014-02-26 16:37:53 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2014-02-26 16:37:53 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-02-26 16:37:53 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2014-02-26 16:37:53 --> Drugs ::::::::::===>SELECT d.id_drug, d.drug_name, d.drug_description, bn.id_brandname as brandname_id, group_concat(bn.name) as drug_brandname, dcc.id_drugcategory as category_id
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dcc`.`brandname_id`
WHERE `d`.`id_drug` =  '1'
GROUP BY `id_drug`
ORDER BY `d`.`drug_name`
INFO  - 2014-02-26 16:37:53 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drugcategory_id` = `dc`.`id_drugcategory`
JOIN `drug` d ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2014-02-26 16:37:53 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2014-02-26 16:37:53 --> inside retrieving pharmacy for drug id is 1
INFO  - 2014-02-26 16:37:53 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2014-02-26 16:37:53 --> Related drugs ::::::::::===>SELECT d.drug_name
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcg`.`drugcategory_id` = `dcc`.`id_drugcategory`
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
WHERE `dcc`.`brandname_id` =  '0'
AND `dc`.`id_drugclass` =  '0'
INFO  - 2014-02-26 16:37:53 --> inside retrieve most searched drugs
INFO  - 2014-02-26 16:37:53 --> SELECT `d`.`id_drug` as id, `d`.`drug_name` as name, count(ds.id_drugsearch) as search_count
FROM (`drug_search` ds)
JOIN `drug` d ON `d`.`id_drug` = `ds`.`drug_id`
GROUP BY `d`.`id_drug`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:37:53 --> inside retrieve most searched pharmacy
INFO  - 2014-02-26 16:37:53 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:37:53 --> inside retrieve most searched article
INFO  - 2014-02-26 16:37:53 --> SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description, count(ats.article_id) as search_count
FROM (`article_search` ats)
JOIN `article` a ON `a`.`id_article` = `ats`.`article_id`
JOIN `news` n ON `a`.`newsid_news` = `n`.`id_news`
GROUP BY `a`.`id_article`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:37:53 --> The session id is ========>ef9d0234f0bd4db89693b1e5b027f0ae and the member id is =======>
INFO  - 2014-02-26 16:37:53 -->  column name inside view is 0 column Data is 618
INFO  - 2014-02-26 16:37:53 -->  column name inside view is 1 column Data is 488
INFO  - 2014-02-26 16:37:53 -->  column name inside view is 2 column Data is 487
INFO  - 2014-02-26 16:37:53 -->  column name inside view is 3 column Data is 1
INFO  - 2014-02-26 16:37:53 -->  column name inside view is 4 column Data is 641
INFO  - 2014-02-26 16:37:53 -->  column name inside view is 5 column Data is 649
INFO  - 2014-02-26 16:37:53 -->  column name inside view is 6 column Data is 502
INFO  - 2014-02-26 16:37:53 -->  column name inside view is 7 column Data is 498
INFO  - 2014-02-26 16:37:53 -->  column name inside view is 8 column Data is 619
INFO  - 2014-02-26 16:37:53 -->  column name inside view is 9 column Data is 497
INFO  - 2014-02-26 16:37:53 -->  column name inside view is 0 column Data is 2
INFO  - 2014-02-26 16:37:53 -->  column name inside view is 1 column Data is 3
INFO  - 2014-02-26 16:37:53 -->  column name inside view is 2 column Data is 18
INFO  - 2014-02-26 16:37:53 -->  column name inside view is 3 column Data is 1
INFO  - 2014-02-26 16:37:53 -->  column name inside view is 4 column Data is 15
INFO  - 2014-02-26 16:37:53 -->  column name inside view is 5 column Data is 14
INFO  - 2014-02-26 16:37:53 -->  column name inside view is 6 column Data is 6
INFO  - 2014-02-26 16:37:53 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2014-02-26 16:37:53 --> File loaded: ../pharmaray-application/views/onlinepharmacy.php
DEBUG - 2014-02-26 16:37:53 --> Final output sent to browser
DEBUG - 2014-02-26 16:37:53 --> Total execution time: 0.0840
DEBUG - 2014-02-26 16:37:53 --> Config Class Initialized
DEBUG - 2014-02-26 16:37:53 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:37:53 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:37:53 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:37:53 --> URI Class Initialized
DEBUG - 2014-02-26 16:37:53 --> Router Class Initialized
ERROR - 2014-02-26 16:37:53 --> 404 Page Not Found --> css
DEBUG - 2014-02-26 16:37:54 --> Config Class Initialized
DEBUG - 2014-02-26 16:37:54 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:37:54 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:37:54 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:37:54 --> URI Class Initialized
DEBUG - 2014-02-26 16:37:54 --> Router Class Initialized
DEBUG - 2014-02-26 16:37:54 --> Output Class Initialized
DEBUG - 2014-02-26 16:37:54 --> Security Class Initialized
DEBUG - 2014-02-26 16:37:54 --> Input Class Initialized
DEBUG - 2014-02-26 16:37:54 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:37:54 --> Language Class Initialized
DEBUG - 2014-02-26 16:37:54 --> Loader Class Initialized
DEBUG - 2014-02-26 16:37:54 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:37:54 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:37:54 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:37:54 --> Database Driver Class Initialized
DEBUG - 2014-02-26 16:37:54 --> Session Class Initialized
DEBUG - 2014-02-26 16:37:54 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:37:54 --> Session routines successfully run
DEBUG - 2014-02-26 16:37:54 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:37:54 --> Controller Class Initialized
DEBUG - 2014-02-26 16:37:54 --> Model Class Initialized
DEBUG - 2014-02-26 16:37:54 --> Model Class Initialized
DEBUG - 2014-02-26 16:37:54 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:37:54 --> after session initialization................
INFO  - 2014-02-26 16:37:54 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  ''
INFO  - 2014-02-26 16:37:54 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-02-26 16:37:54 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2014-02-26 16:37:54 --> inside retrieving vacancy for member
INFO  - 2014-02-26 16:37:54 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2014-02-26 16:37:54 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-02-26 16:37:54 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2014-02-26 16:37:54 --> Drugs ::::::::::===>SELECT d.id_drug, d.drug_name, d.drug_description, bn.id_brandname as brandname_id, group_concat(bn.name) as drug_brandname, dcc.id_drugcategory as category_id
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dcc`.`brandname_id`
WHERE `d`.`id_drug` =  '1'
GROUP BY `id_drug`
ORDER BY `d`.`drug_name`
INFO  - 2014-02-26 16:37:54 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drugcategory_id` = `dc`.`id_drugcategory`
JOIN `drug` d ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2014-02-26 16:37:54 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2014-02-26 16:37:54 --> inside retrieving pharmacy for drug id is 1
INFO  - 2014-02-26 16:37:54 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2014-02-26 16:37:54 --> Related drugs ::::::::::===>SELECT d.drug_name
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcg`.`drugcategory_id` = `dcc`.`id_drugcategory`
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
WHERE `dcc`.`brandname_id` =  '0'
AND `dc`.`id_drugclass` =  '0'
INFO  - 2014-02-26 16:37:54 --> inside retrieve most searched drugs
INFO  - 2014-02-26 16:37:54 --> SELECT `d`.`id_drug` as id, `d`.`drug_name` as name, count(ds.id_drugsearch) as search_count
FROM (`drug_search` ds)
JOIN `drug` d ON `d`.`id_drug` = `ds`.`drug_id`
GROUP BY `d`.`id_drug`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:37:54 --> inside retrieve most searched pharmacy
INFO  - 2014-02-26 16:37:54 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:37:54 --> inside retrieve most searched article
INFO  - 2014-02-26 16:37:54 --> SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description, count(ats.article_id) as search_count
FROM (`article_search` ats)
JOIN `article` a ON `a`.`id_article` = `ats`.`article_id`
JOIN `news` n ON `a`.`newsid_news` = `n`.`id_news`
GROUP BY `a`.`id_article`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:37:54 --> The session id is ========>ef9d0234f0bd4db89693b1e5b027f0ae and the member id is =======>
INFO  - 2014-02-26 16:37:54 -->  column name inside view is 0 column Data is 618
INFO  - 2014-02-26 16:37:54 -->  column name inside view is 1 column Data is 488
INFO  - 2014-02-26 16:37:54 -->  column name inside view is 2 column Data is 487
INFO  - 2014-02-26 16:37:54 -->  column name inside view is 3 column Data is 1
INFO  - 2014-02-26 16:37:54 -->  column name inside view is 4 column Data is 641
INFO  - 2014-02-26 16:37:54 -->  column name inside view is 5 column Data is 649
INFO  - 2014-02-26 16:37:54 -->  column name inside view is 6 column Data is 502
INFO  - 2014-02-26 16:37:54 -->  column name inside view is 7 column Data is 498
INFO  - 2014-02-26 16:37:54 -->  column name inside view is 8 column Data is 619
INFO  - 2014-02-26 16:37:54 -->  column name inside view is 9 column Data is 497
INFO  - 2014-02-26 16:37:54 -->  column name inside view is 0 column Data is 2
INFO  - 2014-02-26 16:37:54 -->  column name inside view is 1 column Data is 3
INFO  - 2014-02-26 16:37:54 -->  column name inside view is 2 column Data is 18
INFO  - 2014-02-26 16:37:54 -->  column name inside view is 3 column Data is 1
INFO  - 2014-02-26 16:37:54 -->  column name inside view is 4 column Data is 15
INFO  - 2014-02-26 16:37:54 -->  column name inside view is 5 column Data is 14
INFO  - 2014-02-26 16:37:54 -->  column name inside view is 6 column Data is 6
INFO  - 2014-02-26 16:37:54 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2014-02-26 16:37:54 --> File loaded: ../pharmaray-application/views/onlinepharmacy.php
DEBUG - 2014-02-26 16:37:54 --> Final output sent to browser
DEBUG - 2014-02-26 16:37:54 --> Total execution time: 0.0860
DEBUG - 2014-02-26 16:37:54 --> Config Class Initialized
DEBUG - 2014-02-26 16:37:54 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:37:54 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:37:54 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:37:54 --> URI Class Initialized
DEBUG - 2014-02-26 16:37:54 --> Router Class Initialized
ERROR - 2014-02-26 16:37:54 --> 404 Page Not Found --> css
DEBUG - 2014-02-26 16:37:55 --> Config Class Initialized
DEBUG - 2014-02-26 16:37:55 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:37:55 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:37:55 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:37:55 --> URI Class Initialized
DEBUG - 2014-02-26 16:37:55 --> Router Class Initialized
DEBUG - 2014-02-26 16:37:55 --> Output Class Initialized
DEBUG - 2014-02-26 16:37:55 --> Security Class Initialized
DEBUG - 2014-02-26 16:37:55 --> Input Class Initialized
DEBUG - 2014-02-26 16:37:55 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:37:55 --> Language Class Initialized
DEBUG - 2014-02-26 16:37:55 --> Loader Class Initialized
DEBUG - 2014-02-26 16:37:55 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:37:55 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:37:55 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:37:55 --> Database Driver Class Initialized
DEBUG - 2014-02-26 16:37:55 --> Session Class Initialized
DEBUG - 2014-02-26 16:37:55 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:37:55 --> Session routines successfully run
DEBUG - 2014-02-26 16:37:55 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:37:55 --> Controller Class Initialized
DEBUG - 2014-02-26 16:37:55 --> Model Class Initialized
DEBUG - 2014-02-26 16:37:55 --> Model Class Initialized
DEBUG - 2014-02-26 16:37:55 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:37:55 --> after session initialization................
INFO  - 2014-02-26 16:37:55 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  ''
INFO  - 2014-02-26 16:37:55 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-02-26 16:37:55 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2014-02-26 16:37:55 --> inside retrieving vacancy for member
INFO  - 2014-02-26 16:37:55 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2014-02-26 16:37:55 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-02-26 16:37:55 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2014-02-26 16:37:55 --> Drugs ::::::::::===>SELECT d.id_drug, d.drug_name, d.drug_description, bn.id_brandname as brandname_id, group_concat(bn.name) as drug_brandname, dcc.id_drugcategory as category_id
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dcc`.`brandname_id`
WHERE `d`.`id_drug` =  '1'
GROUP BY `id_drug`
ORDER BY `d`.`drug_name`
INFO  - 2014-02-26 16:37:55 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drugcategory_id` = `dc`.`id_drugcategory`
JOIN `drug` d ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2014-02-26 16:37:55 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2014-02-26 16:37:55 --> inside retrieving pharmacy for drug id is 1
INFO  - 2014-02-26 16:37:55 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2014-02-26 16:37:55 --> Related drugs ::::::::::===>SELECT d.drug_name
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcg`.`drugcategory_id` = `dcc`.`id_drugcategory`
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
WHERE `dcc`.`brandname_id` =  '0'
AND `dc`.`id_drugclass` =  '0'
INFO  - 2014-02-26 16:37:55 --> inside retrieve most searched drugs
INFO  - 2014-02-26 16:37:55 --> SELECT `d`.`id_drug` as id, `d`.`drug_name` as name, count(ds.id_drugsearch) as search_count
FROM (`drug_search` ds)
JOIN `drug` d ON `d`.`id_drug` = `ds`.`drug_id`
GROUP BY `d`.`id_drug`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:37:55 --> inside retrieve most searched pharmacy
INFO  - 2014-02-26 16:37:55 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:37:55 --> inside retrieve most searched article
INFO  - 2014-02-26 16:37:55 --> SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description, count(ats.article_id) as search_count
FROM (`article_search` ats)
JOIN `article` a ON `a`.`id_article` = `ats`.`article_id`
JOIN `news` n ON `a`.`newsid_news` = `n`.`id_news`
GROUP BY `a`.`id_article`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:37:55 --> The session id is ========>ef9d0234f0bd4db89693b1e5b027f0ae and the member id is =======>
INFO  - 2014-02-26 16:37:55 -->  column name inside view is 0 column Data is 618
INFO  - 2014-02-26 16:37:55 -->  column name inside view is 1 column Data is 488
INFO  - 2014-02-26 16:37:55 -->  column name inside view is 2 column Data is 487
INFO  - 2014-02-26 16:37:55 -->  column name inside view is 3 column Data is 1
INFO  - 2014-02-26 16:37:55 -->  column name inside view is 4 column Data is 641
INFO  - 2014-02-26 16:37:55 -->  column name inside view is 5 column Data is 649
INFO  - 2014-02-26 16:37:55 -->  column name inside view is 6 column Data is 502
INFO  - 2014-02-26 16:37:55 -->  column name inside view is 7 column Data is 498
INFO  - 2014-02-26 16:37:55 -->  column name inside view is 8 column Data is 619
INFO  - 2014-02-26 16:37:55 -->  column name inside view is 9 column Data is 497
INFO  - 2014-02-26 16:37:55 -->  column name inside view is 0 column Data is 2
INFO  - 2014-02-26 16:37:55 -->  column name inside view is 1 column Data is 3
INFO  - 2014-02-26 16:37:55 -->  column name inside view is 2 column Data is 18
INFO  - 2014-02-26 16:37:55 -->  column name inside view is 3 column Data is 1
INFO  - 2014-02-26 16:37:55 -->  column name inside view is 4 column Data is 15
INFO  - 2014-02-26 16:37:55 -->  column name inside view is 5 column Data is 14
INFO  - 2014-02-26 16:37:55 -->  column name inside view is 6 column Data is 6
INFO  - 2014-02-26 16:37:55 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2014-02-26 16:37:55 --> File loaded: ../pharmaray-application/views/onlinepharmacy.php
DEBUG - 2014-02-26 16:37:55 --> Final output sent to browser
DEBUG - 2014-02-26 16:37:55 --> Total execution time: 0.0880
DEBUG - 2014-02-26 16:37:56 --> Config Class Initialized
DEBUG - 2014-02-26 16:37:56 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:37:56 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:37:56 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:37:56 --> URI Class Initialized
DEBUG - 2014-02-26 16:37:56 --> Router Class Initialized
ERROR - 2014-02-26 16:37:56 --> 404 Page Not Found --> css
DEBUG - 2014-02-26 16:38:45 --> Config Class Initialized
DEBUG - 2014-02-26 16:38:45 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:38:45 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:38:45 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:38:45 --> URI Class Initialized
DEBUG - 2014-02-26 16:38:45 --> Router Class Initialized
DEBUG - 2014-02-26 16:38:45 --> Output Class Initialized
DEBUG - 2014-02-26 16:38:45 --> Security Class Initialized
DEBUG - 2014-02-26 16:38:45 --> Input Class Initialized
DEBUG - 2014-02-26 16:38:45 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:38:45 --> Language Class Initialized
DEBUG - 2014-02-26 16:38:45 --> Loader Class Initialized
DEBUG - 2014-02-26 16:38:45 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:38:45 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:38:45 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:38:45 --> Database Driver Class Initialized
DEBUG - 2014-02-26 16:38:45 --> Session Class Initialized
DEBUG - 2014-02-26 16:38:45 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:38:45 --> Session routines successfully run
DEBUG - 2014-02-26 16:38:45 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:38:45 --> Controller Class Initialized
DEBUG - 2014-02-26 16:38:45 --> Model Class Initialized
DEBUG - 2014-02-26 16:38:45 --> Model Class Initialized
DEBUG - 2014-02-26 16:38:45 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:38:45 --> after session initialization................
INFO  - 2014-02-26 16:38:45 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  ''
INFO  - 2014-02-26 16:38:45 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-02-26 16:38:45 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2014-02-26 16:38:45 --> inside retrieving vacancy for member
INFO  - 2014-02-26 16:38:45 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2014-02-26 16:38:45 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-02-26 16:38:45 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2014-02-26 16:38:45 --> Drugs ::::::::::===>SELECT d.id_drug, d.drug_name, d.drug_description, bn.id_brandname as brandname_id, group_concat(bn.name, ':', bn.id_brandname) as drug_brandname, dcc.id_drugcategory as category_id
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dcc`.`brandname_id`
WHERE `d`.`id_drug` =  '1'
GROUP BY `id_drug`
ORDER BY `d`.`drug_name`
INFO  - 2014-02-26 16:38:45 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drugcategory_id` = `dc`.`id_drugcategory`
JOIN `drug` d ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2014-02-26 16:38:45 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2014-02-26 16:38:45 --> inside retrieving pharmacy for drug id is 1
INFO  - 2014-02-26 16:38:45 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2014-02-26 16:38:45 --> Related drugs ::::::::::===>SELECT d.drug_name
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcg`.`drugcategory_id` = `dcc`.`id_drugcategory`
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
WHERE `dcc`.`brandname_id` =  '0'
AND `dc`.`id_drugclass` =  '0'
INFO  - 2014-02-26 16:38:45 --> inside retrieve most searched drugs
INFO  - 2014-02-26 16:38:45 --> SELECT `d`.`id_drug` as id, `d`.`drug_name` as name, count(ds.id_drugsearch) as search_count
FROM (`drug_search` ds)
JOIN `drug` d ON `d`.`id_drug` = `ds`.`drug_id`
GROUP BY `d`.`id_drug`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:38:45 --> inside retrieve most searched pharmacy
INFO  - 2014-02-26 16:38:45 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:38:45 --> inside retrieve most searched article
INFO  - 2014-02-26 16:38:45 --> SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description, count(ats.article_id) as search_count
FROM (`article_search` ats)
JOIN `article` a ON `a`.`id_article` = `ats`.`article_id`
JOIN `news` n ON `a`.`newsid_news` = `n`.`id_news`
GROUP BY `a`.`id_article`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:38:45 --> The session id is ========>bd46355d7c926227d2f9de1f9a5a454d and the member id is =======>
INFO  - 2014-02-26 16:38:45 -->  column name inside view is 0 column Data is 618
INFO  - 2014-02-26 16:38:45 -->  column name inside view is 1 column Data is 488
INFO  - 2014-02-26 16:38:45 -->  column name inside view is 2 column Data is 487
INFO  - 2014-02-26 16:38:45 -->  column name inside view is 3 column Data is 1
INFO  - 2014-02-26 16:38:45 -->  column name inside view is 4 column Data is 641
INFO  - 2014-02-26 16:38:45 -->  column name inside view is 5 column Data is 649
INFO  - 2014-02-26 16:38:45 -->  column name inside view is 6 column Data is 502
INFO  - 2014-02-26 16:38:45 -->  column name inside view is 7 column Data is 498
INFO  - 2014-02-26 16:38:45 -->  column name inside view is 8 column Data is 619
INFO  - 2014-02-26 16:38:45 -->  column name inside view is 9 column Data is 497
INFO  - 2014-02-26 16:38:45 -->  column name inside view is 0 column Data is 2
INFO  - 2014-02-26 16:38:45 -->  column name inside view is 1 column Data is 3
INFO  - 2014-02-26 16:38:45 -->  column name inside view is 2 column Data is 18
INFO  - 2014-02-26 16:38:45 -->  column name inside view is 3 column Data is 1
INFO  - 2014-02-26 16:38:45 -->  column name inside view is 4 column Data is 15
INFO  - 2014-02-26 16:38:45 -->  column name inside view is 5 column Data is 14
INFO  - 2014-02-26 16:38:45 -->  column name inside view is 6 column Data is 6
INFO  - 2014-02-26 16:38:45 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2014-02-26 16:38:45 --> File loaded: ../pharmaray-application/views/onlinepharmacy.php
DEBUG - 2014-02-26 16:38:45 --> Final output sent to browser
DEBUG - 2014-02-26 16:38:45 --> Total execution time: 0.0900
DEBUG - 2014-02-26 16:38:46 --> Config Class Initialized
DEBUG - 2014-02-26 16:38:46 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:38:46 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:38:46 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:38:46 --> URI Class Initialized
DEBUG - 2014-02-26 16:38:46 --> Router Class Initialized
ERROR - 2014-02-26 16:38:46 --> 404 Page Not Found --> css
DEBUG - 2014-02-26 16:39:05 --> Config Class Initialized
DEBUG - 2014-02-26 16:39:05 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:39:05 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:39:05 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:39:05 --> URI Class Initialized
DEBUG - 2014-02-26 16:39:05 --> Router Class Initialized
DEBUG - 2014-02-26 16:39:05 --> Output Class Initialized
DEBUG - 2014-02-26 16:39:05 --> Security Class Initialized
DEBUG - 2014-02-26 16:39:05 --> Input Class Initialized
DEBUG - 2014-02-26 16:39:05 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:39:05 --> Language Class Initialized
DEBUG - 2014-02-26 16:39:05 --> Loader Class Initialized
DEBUG - 2014-02-26 16:39:05 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:39:05 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:39:05 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:39:05 --> Database Driver Class Initialized
DEBUG - 2014-02-26 16:39:05 --> Session Class Initialized
DEBUG - 2014-02-26 16:39:05 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:39:05 --> Session routines successfully run
DEBUG - 2014-02-26 16:39:05 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:39:05 --> Controller Class Initialized
DEBUG - 2014-02-26 16:39:05 --> Model Class Initialized
DEBUG - 2014-02-26 16:39:05 --> Model Class Initialized
DEBUG - 2014-02-26 16:39:05 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:39:05 --> after session initialization................
INFO  - 2014-02-26 16:39:05 --> inside the auto suggest page.................
INFO  - 2014-02-26 16:39:05 --> after the list array.................
INFO  - 2014-02-26 16:39:05 --> Ajax retrieval ::::::::::===>SELECT d.id_drug, d.drug_name, group_concat(bn.name, ':', bn.id_brandname) as drug_brandname
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dc`.`brandname_id`
WHERE `d`.`drug_name` like '%g%' and d.id_drug <> 1
GROUP BY `id_drug`, `id_drug`
ORDER BY `d`.`drug_name`
LIMIT 15
INFO  - 2014-02-26 16:39:05 --> after retrieving the data from db.................
DEBUG - 2014-02-26 16:39:05 --> Final output sent to browser
DEBUG - 2014-02-26 16:39:05 --> Total execution time: 0.0610
DEBUG - 2014-02-26 16:39:06 --> Config Class Initialized
DEBUG - 2014-02-26 16:39:06 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:39:06 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:39:06 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:39:06 --> URI Class Initialized
DEBUG - 2014-02-26 16:39:06 --> Router Class Initialized
DEBUG - 2014-02-26 16:39:06 --> Output Class Initialized
DEBUG - 2014-02-26 16:39:06 --> Security Class Initialized
DEBUG - 2014-02-26 16:39:06 --> Input Class Initialized
DEBUG - 2014-02-26 16:39:06 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:39:06 --> Language Class Initialized
DEBUG - 2014-02-26 16:39:06 --> Loader Class Initialized
DEBUG - 2014-02-26 16:39:06 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:39:06 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:39:06 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:39:06 --> Database Driver Class Initialized
DEBUG - 2014-02-26 16:39:06 --> Session Class Initialized
DEBUG - 2014-02-26 16:39:06 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:39:06 --> Session routines successfully run
DEBUG - 2014-02-26 16:39:06 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:39:06 --> Controller Class Initialized
DEBUG - 2014-02-26 16:39:06 --> Model Class Initialized
DEBUG - 2014-02-26 16:39:06 --> Model Class Initialized
DEBUG - 2014-02-26 16:39:06 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:39:06 --> after session initialization................
INFO  - 2014-02-26 16:39:06 --> inside the auto suggest page.................
INFO  - 2014-02-26 16:39:06 --> after the list array.................
INFO  - 2014-02-26 16:39:06 --> Ajax retrieval ::::::::::===>SELECT d.id_drug, d.drug_name, group_concat(bn.name, ':', bn.id_brandname) as drug_brandname
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dc`.`brandname_id`
WHERE `d`.`drug_name` like '%ge%' and d.id_drug <> 1
GROUP BY `id_drug`, `id_drug`
ORDER BY `d`.`drug_name`
LIMIT 15
INFO  - 2014-02-26 16:39:06 --> after retrieving the data from db.................
DEBUG - 2014-02-26 16:39:06 --> Final output sent to browser
DEBUG - 2014-02-26 16:39:06 --> Total execution time: 0.0580
DEBUG - 2014-02-26 16:39:07 --> Config Class Initialized
DEBUG - 2014-02-26 16:39:07 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:39:07 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:39:07 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:39:07 --> URI Class Initialized
DEBUG - 2014-02-26 16:39:07 --> Router Class Initialized
DEBUG - 2014-02-26 16:39:07 --> Output Class Initialized
DEBUG - 2014-02-26 16:39:07 --> Security Class Initialized
DEBUG - 2014-02-26 16:39:07 --> Input Class Initialized
DEBUG - 2014-02-26 16:39:07 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:39:07 --> Language Class Initialized
DEBUG - 2014-02-26 16:39:07 --> Loader Class Initialized
DEBUG - 2014-02-26 16:39:07 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:39:07 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:39:07 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:39:07 --> Database Driver Class Initialized
DEBUG - 2014-02-26 16:39:07 --> Session Class Initialized
DEBUG - 2014-02-26 16:39:07 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:39:07 --> Session routines successfully run
DEBUG - 2014-02-26 16:39:07 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:39:07 --> Controller Class Initialized
DEBUG - 2014-02-26 16:39:07 --> Model Class Initialized
DEBUG - 2014-02-26 16:39:07 --> Model Class Initialized
DEBUG - 2014-02-26 16:39:07 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:39:07 --> after session initialization................
INFO  - 2014-02-26 16:39:07 --> inside the auto suggest page.................
INFO  - 2014-02-26 16:39:07 --> after the list array.................
INFO  - 2014-02-26 16:39:07 --> Ajax retrieval ::::::::::===>SELECT d.id_drug, d.drug_name, group_concat(bn.name, ':', bn.id_brandname) as drug_brandname
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dc`.`brandname_id`
WHERE `d`.`drug_name` like '%g%' and d.id_drug <> 1
GROUP BY `id_drug`, `id_drug`
ORDER BY `d`.`drug_name`
LIMIT 15
INFO  - 2014-02-26 16:39:07 --> after retrieving the data from db.................
DEBUG - 2014-02-26 16:39:07 --> Final output sent to browser
DEBUG - 2014-02-26 16:39:07 --> Total execution time: 0.0570
DEBUG - 2014-02-26 16:39:08 --> Config Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:39:08 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:39:08 --> URI Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Router Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Output Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Security Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Input Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:39:08 --> Language Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Loader Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:39:08 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:39:08 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:39:08 --> Database Driver Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Session Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:39:08 --> Session routines successfully run
DEBUG - 2014-02-26 16:39:08 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Controller Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Model Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Model Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:39:08 --> after session initialization................
INFO  - 2014-02-26 16:39:08 --> inside the auto suggest page.................
INFO  - 2014-02-26 16:39:08 --> after the list array.................
INFO  - 2014-02-26 16:39:08 --> Ajax retrieval ::::::::::===>SELECT d.id_drug, d.drug_name, group_concat(bn.name, ':', bn.id_brandname) as drug_brandname
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dc`.`brandname_id`
WHERE `d`.`drug_name` like '%a%' and d.id_drug <> 1
GROUP BY `id_drug`, `id_drug`
ORDER BY `d`.`drug_name`
LIMIT 15
INFO  - 2014-02-26 16:39:08 --> after retrieving the data from db.................
INFO  - 2014-02-26 16:39:08 --> looping.................
INFO  - 2014-02-26 16:39:08 --> looping.................
INFO  - 2014-02-26 16:39:08 --> looping.................
INFO  - 2014-02-26 16:39:08 --> looping.................
INFO  - 2014-02-26 16:39:08 --> looping.................
INFO  - 2014-02-26 16:39:08 --> looping.................
INFO  - 2014-02-26 16:39:08 --> looping.................
INFO  - 2014-02-26 16:39:08 --> looping.................
INFO  - 2014-02-26 16:39:08 --> looping.................
INFO  - 2014-02-26 16:39:08 --> looping.................
DEBUG - 2014-02-26 16:39:08 --> Final output sent to browser
DEBUG - 2014-02-26 16:39:08 --> Total execution time: 0.0470
DEBUG - 2014-02-26 16:39:08 --> Config Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:39:08 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:39:08 --> URI Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Router Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Output Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Security Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Input Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:39:08 --> Language Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Loader Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:39:08 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:39:08 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:39:08 --> Database Driver Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Session Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:39:08 --> Session routines successfully run
DEBUG - 2014-02-26 16:39:08 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Controller Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Model Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Model Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:39:08 --> after session initialization................
INFO  - 2014-02-26 16:39:08 --> inside the auto suggest page.................
INFO  - 2014-02-26 16:39:08 --> after the list array.................
INFO  - 2014-02-26 16:39:08 --> Ajax retrieval ::::::::::===>SELECT d.id_drug, d.drug_name, group_concat(bn.name, ':', bn.id_brandname) as drug_brandname
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dc`.`brandname_id`
WHERE `d`.`drug_name` like '%ad%' and d.id_drug <> 1
GROUP BY `id_drug`, `id_drug`
ORDER BY `d`.`drug_name`
LIMIT 15
INFO  - 2014-02-26 16:39:08 --> after retrieving the data from db.................
INFO  - 2014-02-26 16:39:08 --> looping.................
DEBUG - 2014-02-26 16:39:08 --> Final output sent to browser
DEBUG - 2014-02-26 16:39:08 --> Total execution time: 0.0480
DEBUG - 2014-02-26 16:39:08 --> Config Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:39:08 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:39:08 --> URI Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Router Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Output Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Security Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Input Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:39:08 --> Language Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Loader Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:39:08 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:39:08 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:39:08 --> Database Driver Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Session Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:39:08 --> Session routines successfully run
DEBUG - 2014-02-26 16:39:08 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Controller Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Model Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Model Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:39:08 --> after session initialization................
INFO  - 2014-02-26 16:39:08 --> inside the auto suggest page.................
INFO  - 2014-02-26 16:39:08 --> after the list array.................
INFO  - 2014-02-26 16:39:08 --> Ajax retrieval ::::::::::===>SELECT d.id_drug, d.drug_name, group_concat(bn.name, ':', bn.id_brandname) as drug_brandname
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dc`.`brandname_id`
WHERE `d`.`drug_name` like '%adre%' and d.id_drug <> 1
GROUP BY `id_drug`, `id_drug`
ORDER BY `d`.`drug_name`
LIMIT 15
INFO  - 2014-02-26 16:39:08 --> after retrieving the data from db.................
INFO  - 2014-02-26 16:39:08 --> looping.................
DEBUG - 2014-02-26 16:39:08 --> Final output sent to browser
DEBUG - 2014-02-26 16:39:08 --> Total execution time: 0.0480
DEBUG - 2014-02-26 16:39:08 --> Config Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:39:08 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:39:08 --> URI Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Router Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Output Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Security Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Input Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:39:08 --> Language Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Loader Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:39:08 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:39:08 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:39:08 --> Database Driver Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Session Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:39:08 --> Session routines successfully run
DEBUG - 2014-02-26 16:39:08 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Controller Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Model Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Model Class Initialized
DEBUG - 2014-02-26 16:39:08 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:39:08 --> after session initialization................
INFO  - 2014-02-26 16:39:08 --> inside the auto suggest page.................
INFO  - 2014-02-26 16:39:08 --> after the list array.................
INFO  - 2014-02-26 16:39:08 --> Ajax retrieval ::::::::::===>SELECT d.id_drug, d.drug_name, group_concat(bn.name, ':', bn.id_brandname) as drug_brandname
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dc`.`brandname_id`
WHERE `d`.`drug_name` like '%adre%' and d.id_drug <> 1
GROUP BY `id_drug`, `id_drug`
ORDER BY `d`.`drug_name`
LIMIT 15
INFO  - 2014-02-26 16:39:08 --> after retrieving the data from db.................
INFO  - 2014-02-26 16:39:08 --> looping.................
DEBUG - 2014-02-26 16:39:08 --> Final output sent to browser
DEBUG - 2014-02-26 16:39:08 --> Total execution time: 0.0490
DEBUG - 2014-02-26 16:39:09 --> Config Class Initialized
DEBUG - 2014-02-26 16:39:09 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:39:09 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:39:09 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:39:09 --> URI Class Initialized
DEBUG - 2014-02-26 16:39:09 --> Router Class Initialized
DEBUG - 2014-02-26 16:39:09 --> Output Class Initialized
DEBUG - 2014-02-26 16:39:09 --> Security Class Initialized
DEBUG - 2014-02-26 16:39:09 --> Input Class Initialized
DEBUG - 2014-02-26 16:39:09 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:39:09 --> Language Class Initialized
DEBUG - 2014-02-26 16:39:09 --> Loader Class Initialized
DEBUG - 2014-02-26 16:39:09 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:39:09 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:39:09 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:39:09 --> Database Driver Class Initialized
DEBUG - 2014-02-26 16:39:09 --> Session Class Initialized
DEBUG - 2014-02-26 16:39:09 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:39:09 --> Session routines successfully run
DEBUG - 2014-02-26 16:39:09 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:39:09 --> Controller Class Initialized
DEBUG - 2014-02-26 16:39:09 --> Model Class Initialized
DEBUG - 2014-02-26 16:39:09 --> Model Class Initialized
DEBUG - 2014-02-26 16:39:09 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:39:09 --> after session initialization................
INFO  - 2014-02-26 16:39:09 --> Drugs ::::::::::===>SELECT d.id_drug, d.drug_name, d.drug_description, bn.id_brandname as brandname_id, group_concat(bn.name, ':', bn.id_brandname) as drug_brandname, dcc.id_drugcategory as category_id
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dcc`.`brandname_id`
WHERE `d`.`id_drug` =  '491'
GROUP BY `id_drug`
ORDER BY `d`.`drug_name`
INFO  - 2014-02-26 16:39:09 --> inside retrieving comments member id and drug id is 491
INFO  - 2014-02-26 16:39:09 --> 10==============================0
INFO  - 2014-02-26 16:39:09 --> SELECT dc.id_drugcomment as id, dc.comment, dc.time_created, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 491
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2014-02-26 16:39:09 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 491
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2014-02-26 16:39:09 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drugcategory_id` = `dc`.`id_drugcategory`
JOIN `drug` d ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '491'
ORDER BY `a`.`time_created`
INFO  - 2014-02-26 16:39:09 --> inside retrieving pharmacy for drug id is 491
INFO  - 2014-02-26 16:39:09 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 491
ORDER BY `p`.`id_pharmacy`
LIMIT 15
INFO  - 2014-02-26 16:39:09 --> inside retrieving comments member type id and drug id is 491
INFO  - 2014-02-26 16:39:09 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 491
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
DEBUG - 2014-02-26 16:39:09 --> Final output sent to browser
DEBUG - 2014-02-26 16:39:09 --> Total execution time: 0.0620
DEBUG - 2014-02-26 16:39:10 --> Config Class Initialized
DEBUG - 2014-02-26 16:39:10 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:39:10 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:39:10 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:39:10 --> URI Class Initialized
DEBUG - 2014-02-26 16:39:10 --> Router Class Initialized
DEBUG - 2014-02-26 16:39:10 --> Output Class Initialized
DEBUG - 2014-02-26 16:39:10 --> Security Class Initialized
DEBUG - 2014-02-26 16:39:10 --> Input Class Initialized
DEBUG - 2014-02-26 16:39:10 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:39:10 --> Language Class Initialized
DEBUG - 2014-02-26 16:39:10 --> Loader Class Initialized
DEBUG - 2014-02-26 16:39:10 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:39:10 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:39:10 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:39:10 --> Database Driver Class Initialized
DEBUG - 2014-02-26 16:39:10 --> Session Class Initialized
DEBUG - 2014-02-26 16:39:10 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:39:10 --> Session routines successfully run
DEBUG - 2014-02-26 16:39:10 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:39:10 --> Controller Class Initialized
DEBUG - 2014-02-26 16:39:10 --> Model Class Initialized
DEBUG - 2014-02-26 16:39:10 --> Model Class Initialized
DEBUG - 2014-02-26 16:39:10 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:39:10 --> after session initialization................
INFO  - 2014-02-26 16:39:11 --> before inserting into article search table.................
INFO  - 2014-02-26 16:39:11 --> after inserting into article search table.................84
INFO  - 2014-02-26 16:39:11 --> INSERT INTO `drug_search` (`drug_id`, `timecreated`, `ipaddress`, `location`, `longitude`, `latitude`, `user_id`) VALUES ('491', '2014-02-26 16:39:11', '::1', 'Lagos', '3.39583', '6.45306', '')
DEBUG - 2014-02-26 16:39:11 --> Final output sent to browser
DEBUG - 2014-02-26 16:39:11 --> Total execution time: 1.8351
DEBUG - 2014-02-26 16:39:14 --> Config Class Initialized
DEBUG - 2014-02-26 16:39:14 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:39:14 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:39:14 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:39:14 --> URI Class Initialized
DEBUG - 2014-02-26 16:39:14 --> Router Class Initialized
DEBUG - 2014-02-26 16:39:14 --> Output Class Initialized
DEBUG - 2014-02-26 16:39:14 --> Security Class Initialized
DEBUG - 2014-02-26 16:39:14 --> Input Class Initialized
DEBUG - 2014-02-26 16:39:14 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:39:14 --> Language Class Initialized
DEBUG - 2014-02-26 16:39:14 --> Loader Class Initialized
DEBUG - 2014-02-26 16:39:14 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:39:14 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:39:14 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:39:14 --> Database Driver Class Initialized
DEBUG - 2014-02-26 16:39:14 --> Session Class Initialized
DEBUG - 2014-02-26 16:39:14 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:39:14 --> Session routines successfully run
DEBUG - 2014-02-26 16:39:14 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:39:14 --> Controller Class Initialized
DEBUG - 2014-02-26 16:39:14 --> Model Class Initialized
DEBUG - 2014-02-26 16:39:14 --> Model Class Initialized
DEBUG - 2014-02-26 16:39:14 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:39:14 --> after session initialization................
INFO  - 2014-02-26 16:39:14 --> inside the auto suggest page.................
INFO  - 2014-02-26 16:39:14 --> after the list array.................
INFO  - 2014-02-26 16:39:14 --> Ajax retrieval ::::::::::===>SELECT d.id_drug, d.drug_name, group_concat(bn.name, ':', bn.id_brandname) as drug_brandname
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dc`.`brandname_id`
WHERE `d`.`drug_name` like '%a%' and d.id_drug <> 491
GROUP BY `id_drug`, `id_drug`
ORDER BY `d`.`drug_name`
LIMIT 15
INFO  - 2014-02-26 16:39:14 --> after retrieving the data from db.................
INFO  - 2014-02-26 16:39:14 --> looping.................
INFO  - 2014-02-26 16:39:14 --> looping.................
INFO  - 2014-02-26 16:39:14 --> looping.................
INFO  - 2014-02-26 16:39:14 --> looping.................
INFO  - 2014-02-26 16:39:14 --> looping.................
INFO  - 2014-02-26 16:39:14 --> looping.................
INFO  - 2014-02-26 16:39:14 --> looping.................
INFO  - 2014-02-26 16:39:14 --> looping.................
INFO  - 2014-02-26 16:39:14 --> looping.................
INFO  - 2014-02-26 16:39:14 --> looping.................
DEBUG - 2014-02-26 16:39:14 --> Final output sent to browser
DEBUG - 2014-02-26 16:39:14 --> Total execution time: 0.0480
DEBUG - 2014-02-26 16:39:14 --> Config Class Initialized
DEBUG - 2014-02-26 16:39:14 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:39:14 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:39:14 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:39:14 --> URI Class Initialized
DEBUG - 2014-02-26 16:39:14 --> Router Class Initialized
DEBUG - 2014-02-26 16:39:14 --> Output Class Initialized
DEBUG - 2014-02-26 16:39:14 --> Security Class Initialized
DEBUG - 2014-02-26 16:39:14 --> Input Class Initialized
DEBUG - 2014-02-26 16:39:14 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:39:14 --> Language Class Initialized
DEBUG - 2014-02-26 16:39:14 --> Loader Class Initialized
DEBUG - 2014-02-26 16:39:14 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:39:14 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:39:14 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:39:14 --> Database Driver Class Initialized
DEBUG - 2014-02-26 16:39:14 --> Session Class Initialized
DEBUG - 2014-02-26 16:39:14 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:39:14 --> Session routines successfully run
DEBUG - 2014-02-26 16:39:14 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:39:14 --> Controller Class Initialized
DEBUG - 2014-02-26 16:39:14 --> Model Class Initialized
DEBUG - 2014-02-26 16:39:14 --> Model Class Initialized
DEBUG - 2014-02-26 16:39:14 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:39:14 --> after session initialization................
INFO  - 2014-02-26 16:39:14 --> inside the auto suggest page.................
INFO  - 2014-02-26 16:39:14 --> after the list array.................
INFO  - 2014-02-26 16:39:14 --> Ajax retrieval ::::::::::===>SELECT d.id_drug, d.drug_name, group_concat(bn.name, ':', bn.id_brandname) as drug_brandname
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dc`.`brandname_id`
WHERE `d`.`drug_name` like '%ac%' and d.id_drug <> 491
GROUP BY `id_drug`, `id_drug`
ORDER BY `d`.`drug_name`
LIMIT 15
INFO  - 2014-02-26 16:39:14 --> after retrieving the data from db.................
INFO  - 2014-02-26 16:39:14 --> looping.................
INFO  - 2014-02-26 16:39:14 --> looping.................
DEBUG - 2014-02-26 16:39:14 --> Final output sent to browser
DEBUG - 2014-02-26 16:39:14 --> Total execution time: 0.0440
DEBUG - 2014-02-26 16:39:14 --> Config Class Initialized
DEBUG - 2014-02-26 16:39:14 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:39:14 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:39:14 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:39:14 --> URI Class Initialized
DEBUG - 2014-02-26 16:39:14 --> Router Class Initialized
DEBUG - 2014-02-26 16:39:14 --> Output Class Initialized
DEBUG - 2014-02-26 16:39:14 --> Security Class Initialized
DEBUG - 2014-02-26 16:39:14 --> Input Class Initialized
DEBUG - 2014-02-26 16:39:14 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:39:14 --> Language Class Initialized
DEBUG - 2014-02-26 16:39:14 --> Loader Class Initialized
DEBUG - 2014-02-26 16:39:14 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:39:14 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:39:14 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:39:14 --> Database Driver Class Initialized
DEBUG - 2014-02-26 16:39:14 --> Session Class Initialized
DEBUG - 2014-02-26 16:39:14 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:39:14 --> Session routines successfully run
DEBUG - 2014-02-26 16:39:14 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:39:14 --> Controller Class Initialized
DEBUG - 2014-02-26 16:39:14 --> Model Class Initialized
DEBUG - 2014-02-26 16:39:14 --> Model Class Initialized
DEBUG - 2014-02-26 16:39:14 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:39:14 --> after session initialization................
INFO  - 2014-02-26 16:39:14 --> inside the auto suggest page.................
INFO  - 2014-02-26 16:39:14 --> after the list array.................
INFO  - 2014-02-26 16:39:14 --> Ajax retrieval ::::::::::===>SELECT d.id_drug, d.drug_name, group_concat(bn.name, ':', bn.id_brandname) as drug_brandname
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dc`.`brandname_id`
WHERE `d`.`drug_name` like '%ace%' and d.id_drug <> 491
GROUP BY `id_drug`, `id_drug`
ORDER BY `d`.`drug_name`
LIMIT 15
INFO  - 2014-02-26 16:39:14 --> after retrieving the data from db.................
DEBUG - 2014-02-26 16:39:14 --> Final output sent to browser
DEBUG - 2014-02-26 16:39:14 --> Total execution time: 0.0430
DEBUG - 2014-02-26 16:39:15 --> Config Class Initialized
DEBUG - 2014-02-26 16:39:15 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:39:15 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:39:15 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:39:15 --> URI Class Initialized
DEBUG - 2014-02-26 16:39:15 --> Router Class Initialized
DEBUG - 2014-02-26 16:39:15 --> Output Class Initialized
DEBUG - 2014-02-26 16:39:15 --> Security Class Initialized
DEBUG - 2014-02-26 16:39:15 --> Input Class Initialized
DEBUG - 2014-02-26 16:39:15 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:39:15 --> Language Class Initialized
DEBUG - 2014-02-26 16:39:15 --> Loader Class Initialized
DEBUG - 2014-02-26 16:39:15 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:39:15 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:39:15 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:39:15 --> Database Driver Class Initialized
DEBUG - 2014-02-26 16:39:15 --> Config Class Initialized
DEBUG - 2014-02-26 16:39:15 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:39:15 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:39:15 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:39:15 --> Session Class Initialized
DEBUG - 2014-02-26 16:39:15 --> URI Class Initialized
DEBUG - 2014-02-26 16:39:15 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:39:15 --> Session routines successfully run
DEBUG - 2014-02-26 16:39:15 --> Router Class Initialized
DEBUG - 2014-02-26 16:39:15 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:39:15 --> Controller Class Initialized
DEBUG - 2014-02-26 16:39:15 --> Output Class Initialized
DEBUG - 2014-02-26 16:39:15 --> Model Class Initialized
DEBUG - 2014-02-26 16:39:15 --> Security Class Initialized
DEBUG - 2014-02-26 16:39:15 --> Input Class Initialized
DEBUG - 2014-02-26 16:39:15 --> Model Class Initialized
DEBUG - 2014-02-26 16:39:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-02-26 16:39:15 --> Global POST and COOKIE data sanitized
INFO  - 2014-02-26 16:39:15 --> after session initialization................
DEBUG - 2014-02-26 16:39:15 --> Language Class Initialized
INFO  - 2014-02-26 16:39:15 --> inside the auto suggest page.................
INFO  - 2014-02-26 16:39:15 --> after the list array.................
DEBUG - 2014-02-26 16:39:15 --> Loader Class Initialized
DEBUG - 2014-02-26 16:39:15 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:39:15 --> Helper loaded: url_helper
INFO  - 2014-02-26 16:39:15 --> Ajax retrieval ::::::::::===>SELECT d.id_drug, d.drug_name, group_concat(bn.name, ':', bn.id_brandname) as drug_brandname
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dc`.`brandname_id`
WHERE `d`.`drug_name` like '%ac%' and d.id_drug <> 491
GROUP BY `id_drug`, `id_drug`
ORDER BY `d`.`drug_name`
LIMIT 15
INFO  - 2014-02-26 16:39:15 --> after retrieving the data from db.................
INFO  - 2014-02-26 16:39:15 --> looping.................
DEBUG - 2014-02-26 16:39:15 --> Helper loaded: html_helper
INFO  - 2014-02-26 16:39:15 --> looping.................
DEBUG - 2014-02-26 16:39:15 --> Final output sent to browser
DEBUG - 2014-02-26 16:39:15 --> Total execution time: 0.0480
DEBUG - 2014-02-26 16:39:15 --> Database Driver Class Initialized
ERROR - 2014-02-26 16:39:15 --> Severity: Notice  --> mysql_pconnect(): send of 5 bytes failed with errno=10053 An established connection was aborted by the software in your host machine.
 C:\xampp\htdocs\Pharmarays\pharmaray-system\database\drivers\mysql\mysql_driver.php 91
DEBUG - 2014-02-26 16:39:16 --> Session Class Initialized
DEBUG - 2014-02-26 16:39:16 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:39:16 --> Session routines successfully run
DEBUG - 2014-02-26 16:39:16 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:39:16 --> Controller Class Initialized
DEBUG - 2014-02-26 16:39:16 --> Model Class Initialized
DEBUG - 2014-02-26 16:39:16 --> Model Class Initialized
DEBUG - 2014-02-26 16:39:16 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:39:16 --> after session initialization................
INFO  - 2014-02-26 16:39:16 --> inside the auto suggest page.................
INFO  - 2014-02-26 16:39:16 --> after the list array.................
INFO  - 2014-02-26 16:39:16 --> Ajax retrieval ::::::::::===>SELECT d.id_drug, d.drug_name, group_concat(bn.name, ':', bn.id_brandname) as drug_brandname
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dc`.`brandname_id`
WHERE `d`.`drug_name` like '%ac%' and d.id_drug <> 491
GROUP BY `id_drug`, `id_drug`
ORDER BY `d`.`drug_name`
LIMIT 15
INFO  - 2014-02-26 16:39:16 --> after retrieving the data from db.................
INFO  - 2014-02-26 16:39:16 --> looping.................
INFO  - 2014-02-26 16:39:16 --> looping.................
DEBUG - 2014-02-26 16:39:16 --> Final output sent to browser
DEBUG - 2014-02-26 16:39:16 --> Total execution time: 1.0751
DEBUG - 2014-02-26 16:39:18 --> Config Class Initialized
DEBUG - 2014-02-26 16:39:18 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:39:18 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:39:18 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:39:18 --> URI Class Initialized
DEBUG - 2014-02-26 16:39:18 --> Router Class Initialized
DEBUG - 2014-02-26 16:39:18 --> Output Class Initialized
DEBUG - 2014-02-26 16:39:18 --> Security Class Initialized
DEBUG - 2014-02-26 16:39:18 --> Input Class Initialized
DEBUG - 2014-02-26 16:39:18 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:39:18 --> Language Class Initialized
DEBUG - 2014-02-26 16:39:18 --> Loader Class Initialized
DEBUG - 2014-02-26 16:39:18 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:39:18 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:39:18 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:39:18 --> Database Driver Class Initialized
DEBUG - 2014-02-26 16:39:18 --> Session Class Initialized
DEBUG - 2014-02-26 16:39:18 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:39:18 --> Session routines successfully run
DEBUG - 2014-02-26 16:39:18 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:39:18 --> Controller Class Initialized
DEBUG - 2014-02-26 16:39:18 --> Model Class Initialized
DEBUG - 2014-02-26 16:39:18 --> Model Class Initialized
DEBUG - 2014-02-26 16:39:18 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:39:18 --> after session initialization................
INFO  - 2014-02-26 16:39:18 --> Drugs ::::::::::===>SELECT d.id_drug, d.drug_name, d.drug_description, bn.id_brandname as brandname_id, group_concat(bn.name, ':', bn.id_brandname) as drug_brandname, dcc.id_drugcategory as category_id
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dcc`.`brandname_id`
WHERE `d`.`id_drug` =  '509'
GROUP BY `id_drug`
ORDER BY `d`.`drug_name`
INFO  - 2014-02-26 16:39:18 --> inside retrieving comments member id and drug id is 509
INFO  - 2014-02-26 16:39:18 --> 10==============================0
INFO  - 2014-02-26 16:39:18 --> SELECT dc.id_drugcomment as id, dc.comment, dc.time_created, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 509
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2014-02-26 16:39:18 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 509
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2014-02-26 16:39:18 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drugcategory_id` = `dc`.`id_drugcategory`
JOIN `drug` d ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '509'
ORDER BY `a`.`time_created`
INFO  - 2014-02-26 16:39:18 --> inside retrieving pharmacy for drug id is 509
INFO  - 2014-02-26 16:39:18 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 509
ORDER BY `p`.`id_pharmacy`
LIMIT 15
INFO  - 2014-02-26 16:39:18 --> inside retrieving comments member type id and drug id is 509
INFO  - 2014-02-26 16:39:18 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 509
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
DEBUG - 2014-02-26 16:39:18 --> Final output sent to browser
DEBUG - 2014-02-26 16:39:18 --> Total execution time: 0.0660
DEBUG - 2014-02-26 16:39:18 --> Config Class Initialized
DEBUG - 2014-02-26 16:39:18 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:39:18 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:39:18 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:39:18 --> URI Class Initialized
DEBUG - 2014-02-26 16:39:18 --> Router Class Initialized
DEBUG - 2014-02-26 16:39:18 --> Output Class Initialized
DEBUG - 2014-02-26 16:39:18 --> Security Class Initialized
DEBUG - 2014-02-26 16:39:18 --> Input Class Initialized
DEBUG - 2014-02-26 16:39:18 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:39:18 --> Language Class Initialized
DEBUG - 2014-02-26 16:39:18 --> Loader Class Initialized
DEBUG - 2014-02-26 16:39:18 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:39:18 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:39:18 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:39:18 --> Database Driver Class Initialized
DEBUG - 2014-02-26 16:39:18 --> Session Class Initialized
DEBUG - 2014-02-26 16:39:18 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:39:18 --> Session routines successfully run
DEBUG - 2014-02-26 16:39:18 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:39:18 --> Controller Class Initialized
DEBUG - 2014-02-26 16:39:18 --> Model Class Initialized
DEBUG - 2014-02-26 16:39:18 --> Model Class Initialized
DEBUG - 2014-02-26 16:39:18 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:39:18 --> after session initialization................
INFO  - 2014-02-26 16:39:19 --> before inserting into article search table.................
INFO  - 2014-02-26 16:39:19 --> after inserting into article search table.................85
INFO  - 2014-02-26 16:39:19 --> INSERT INTO `drug_search` (`drug_id`, `timecreated`, `ipaddress`, `location`, `longitude`, `latitude`, `user_id`) VALUES ('509', '2014-02-26 16:39:19', '::1', 'Lagos', '3.39583', '6.45306', '')
DEBUG - 2014-02-26 16:39:19 --> Final output sent to browser
DEBUG - 2014-02-26 16:39:19 --> Total execution time: 1.4591
DEBUG - 2014-02-26 16:40:12 --> Config Class Initialized
DEBUG - 2014-02-26 16:40:12 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:40:12 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:40:12 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:40:12 --> URI Class Initialized
DEBUG - 2014-02-26 16:40:12 --> Router Class Initialized
DEBUG - 2014-02-26 16:40:12 --> Output Class Initialized
DEBUG - 2014-02-26 16:40:12 --> Security Class Initialized
DEBUG - 2014-02-26 16:40:12 --> Input Class Initialized
DEBUG - 2014-02-26 16:40:12 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:40:12 --> Language Class Initialized
DEBUG - 2014-02-26 16:40:12 --> Loader Class Initialized
DEBUG - 2014-02-26 16:40:12 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:40:12 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:40:12 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:40:12 --> Database Driver Class Initialized
DEBUG - 2014-02-26 16:40:12 --> Session Class Initialized
DEBUG - 2014-02-26 16:40:12 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:40:12 --> Session routines successfully run
DEBUG - 2014-02-26 16:40:12 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:40:12 --> Controller Class Initialized
DEBUG - 2014-02-26 16:40:12 --> Model Class Initialized
DEBUG - 2014-02-26 16:40:12 --> Model Class Initialized
DEBUG - 2014-02-26 16:40:12 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:40:12 --> after session initialization................
INFO  - 2014-02-26 16:40:12 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  ''
INFO  - 2014-02-26 16:40:12 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-02-26 16:40:12 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2014-02-26 16:40:12 --> inside retrieving vacancy for member
INFO  - 2014-02-26 16:40:12 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2014-02-26 16:40:12 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-02-26 16:40:12 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2014-02-26 16:40:12 --> Drugs ::::::::::===>SELECT d.id_drug, d.drug_name, d.drug_description, group_concat(bn.name, ':', bn.id_brandname) as drug_brandname, dcc.id_drugcategory as category_id
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dcc`.`brandname_id`
WHERE `d`.`id_drug` =  '1'
GROUP BY `id_drug`
ORDER BY `d`.`drug_name`
INFO  - 2014-02-26 16:40:12 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drugcategory_id` = `dc`.`id_drugcategory`
JOIN `drug` d ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2014-02-26 16:40:12 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2014-02-26 16:40:12 --> inside retrieving pharmacy for drug id is 1
INFO  - 2014-02-26 16:40:12 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2014-02-26 16:40:12 --> Related drugs ::::::::::===>SELECT d.drug_name
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcg`.`drugcategory_id` = `dcc`.`id_drugcategory`
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
WHERE `dcc`.`brandname_id` =  '0'
AND `dc`.`id_drugclass` =  '0'
INFO  - 2014-02-26 16:40:12 --> inside retrieve most searched drugs
INFO  - 2014-02-26 16:40:12 --> SELECT `d`.`id_drug` as id, `d`.`drug_name` as name, count(ds.id_drugsearch) as search_count
FROM (`drug_search` ds)
JOIN `drug` d ON `d`.`id_drug` = `ds`.`drug_id`
GROUP BY `d`.`id_drug`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:40:12 --> inside retrieve most searched pharmacy
INFO  - 2014-02-26 16:40:12 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:40:12 --> inside retrieve most searched article
INFO  - 2014-02-26 16:40:12 --> SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description, count(ats.article_id) as search_count
FROM (`article_search` ats)
JOIN `article` a ON `a`.`id_article` = `ats`.`article_id`
JOIN `news` n ON `a`.`newsid_news` = `n`.`id_news`
GROUP BY `a`.`id_article`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:40:12 --> The session id is ========>bd46355d7c926227d2f9de1f9a5a454d and the member id is =======>
ERROR - 2014-02-26 16:40:12 --> Severity: Notice  --> Undefined index: brandname_id C:\xampp\htdocs\Pharmarays\pharmaray-application\views\userpagenav.php 30
INFO  - 2014-02-26 16:40:12 -->  column name inside view is 0 column Data is 618
INFO  - 2014-02-26 16:40:12 -->  column name inside view is 1 column Data is 488
INFO  - 2014-02-26 16:40:12 -->  column name inside view is 2 column Data is 487
INFO  - 2014-02-26 16:40:12 -->  column name inside view is 3 column Data is 1
INFO  - 2014-02-26 16:40:12 -->  column name inside view is 4 column Data is 641
INFO  - 2014-02-26 16:40:12 -->  column name inside view is 5 column Data is 649
INFO  - 2014-02-26 16:40:12 -->  column name inside view is 6 column Data is 491
INFO  - 2014-02-26 16:40:12 -->  column name inside view is 7 column Data is 502
INFO  - 2014-02-26 16:40:12 -->  column name inside view is 8 column Data is 498
INFO  - 2014-02-26 16:40:12 -->  column name inside view is 9 column Data is 619
INFO  - 2014-02-26 16:40:12 -->  column name inside view is 0 column Data is 2
INFO  - 2014-02-26 16:40:12 -->  column name inside view is 1 column Data is 3
INFO  - 2014-02-26 16:40:12 -->  column name inside view is 2 column Data is 18
INFO  - 2014-02-26 16:40:12 -->  column name inside view is 3 column Data is 1
INFO  - 2014-02-26 16:40:12 -->  column name inside view is 4 column Data is 15
INFO  - 2014-02-26 16:40:12 -->  column name inside view is 5 column Data is 14
INFO  - 2014-02-26 16:40:12 -->  column name inside view is 6 column Data is 6
INFO  - 2014-02-26 16:40:12 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2014-02-26 16:40:12 --> File loaded: ../pharmaray-application/views/onlinepharmacy.php
DEBUG - 2014-02-26 16:40:12 --> Final output sent to browser
DEBUG - 2014-02-26 16:40:12 --> Total execution time: 0.0900
DEBUG - 2014-02-26 16:40:12 --> Config Class Initialized
DEBUG - 2014-02-26 16:40:12 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:40:12 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:40:12 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:40:12 --> URI Class Initialized
DEBUG - 2014-02-26 16:40:12 --> Router Class Initialized
ERROR - 2014-02-26 16:40:12 --> 404 Page Not Found --> css
DEBUG - 2014-02-26 16:41:06 --> Config Class Initialized
DEBUG - 2014-02-26 16:41:06 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:41:06 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:41:06 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:41:06 --> URI Class Initialized
DEBUG - 2014-02-26 16:41:06 --> Router Class Initialized
DEBUG - 2014-02-26 16:41:06 --> Output Class Initialized
DEBUG - 2014-02-26 16:41:06 --> Security Class Initialized
DEBUG - 2014-02-26 16:41:06 --> Input Class Initialized
DEBUG - 2014-02-26 16:41:06 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:41:06 --> Language Class Initialized
DEBUG - 2014-02-26 16:41:06 --> Loader Class Initialized
DEBUG - 2014-02-26 16:41:06 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:41:06 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:41:06 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:41:06 --> Database Driver Class Initialized
DEBUG - 2014-02-26 16:41:06 --> Session Class Initialized
DEBUG - 2014-02-26 16:41:06 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:41:06 --> Session routines successfully run
DEBUG - 2014-02-26 16:41:06 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:41:06 --> Controller Class Initialized
DEBUG - 2014-02-26 16:41:06 --> Model Class Initialized
DEBUG - 2014-02-26 16:41:06 --> Model Class Initialized
DEBUG - 2014-02-26 16:41:06 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:41:06 --> after session initialization................
INFO  - 2014-02-26 16:41:06 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  ''
INFO  - 2014-02-26 16:41:06 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-02-26 16:41:06 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2014-02-26 16:41:06 --> inside retrieving vacancy for member
INFO  - 2014-02-26 16:41:06 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2014-02-26 16:41:06 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-02-26 16:41:06 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2014-02-26 16:41:06 --> Drugs ::::::::::===>SELECT d.id_drug, d.drug_name, d.drug_description, group_concat(bn.name, ':', bn.id_brandname) as drug_brandname, dcc.id_drugcategory as category_id
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dcc`.`brandname_id`
WHERE `d`.`id_drug` =  '1'
GROUP BY `id_drug`
ORDER BY `d`.`drug_name`
INFO  - 2014-02-26 16:41:06 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drugcategory_id` = `dc`.`id_drugcategory`
JOIN `drug` d ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2014-02-26 16:41:06 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2014-02-26 16:41:06 --> inside retrieving pharmacy for drug id is 1
INFO  - 2014-02-26 16:41:06 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2014-02-26 16:41:06 --> Related drugs ::::::::::===>SELECT d.drug_name
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcg`.`drugcategory_id` = `dcc`.`id_drugcategory`
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
WHERE `dcc`.`brandname_id` =  '0'
AND `dc`.`id_drugclass` =  '0'
INFO  - 2014-02-26 16:41:06 --> inside retrieve most searched drugs
INFO  - 2014-02-26 16:41:06 --> SELECT `d`.`id_drug` as id, `d`.`drug_name` as name, count(ds.id_drugsearch) as search_count
FROM (`drug_search` ds)
JOIN `drug` d ON `d`.`id_drug` = `ds`.`drug_id`
GROUP BY `d`.`id_drug`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:41:06 --> inside retrieve most searched pharmacy
INFO  - 2014-02-26 16:41:06 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:41:06 --> inside retrieve most searched article
INFO  - 2014-02-26 16:41:06 --> SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description, count(ats.article_id) as search_count
FROM (`article_search` ats)
JOIN `article` a ON `a`.`id_article` = `ats`.`article_id`
JOIN `news` n ON `a`.`newsid_news` = `n`.`id_news`
GROUP BY `a`.`id_article`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:41:06 --> The session id is ========>bd46355d7c926227d2f9de1f9a5a454d and the member id is =======>
INFO  - 2014-02-26 16:41:06 -->  column name inside view is 0 column Data is 618
INFO  - 2014-02-26 16:41:06 -->  column name inside view is 1 column Data is 488
INFO  - 2014-02-26 16:41:06 -->  column name inside view is 2 column Data is 487
INFO  - 2014-02-26 16:41:06 -->  column name inside view is 3 column Data is 1
INFO  - 2014-02-26 16:41:06 -->  column name inside view is 4 column Data is 641
INFO  - 2014-02-26 16:41:06 -->  column name inside view is 5 column Data is 649
INFO  - 2014-02-26 16:41:06 -->  column name inside view is 6 column Data is 491
INFO  - 2014-02-26 16:41:06 -->  column name inside view is 7 column Data is 502
INFO  - 2014-02-26 16:41:07 -->  column name inside view is 8 column Data is 498
INFO  - 2014-02-26 16:41:07 -->  column name inside view is 9 column Data is 619
INFO  - 2014-02-26 16:41:07 -->  column name inside view is 0 column Data is 2
INFO  - 2014-02-26 16:41:07 -->  column name inside view is 1 column Data is 3
INFO  - 2014-02-26 16:41:07 -->  column name inside view is 2 column Data is 18
INFO  - 2014-02-26 16:41:07 -->  column name inside view is 3 column Data is 1
INFO  - 2014-02-26 16:41:07 -->  column name inside view is 4 column Data is 15
INFO  - 2014-02-26 16:41:07 -->  column name inside view is 5 column Data is 14
INFO  - 2014-02-26 16:41:07 -->  column name inside view is 6 column Data is 6
INFO  - 2014-02-26 16:41:07 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2014-02-26 16:41:07 --> File loaded: ../pharmaray-application/views/onlinepharmacy.php
DEBUG - 2014-02-26 16:41:07 --> Final output sent to browser
DEBUG - 2014-02-26 16:41:07 --> Total execution time: 0.0830
DEBUG - 2014-02-26 16:41:07 --> Config Class Initialized
DEBUG - 2014-02-26 16:41:07 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:41:07 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:41:07 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:41:07 --> URI Class Initialized
DEBUG - 2014-02-26 16:41:07 --> Router Class Initialized
ERROR - 2014-02-26 16:41:07 --> 404 Page Not Found --> css
DEBUG - 2014-02-26 16:41:08 --> Config Class Initialized
DEBUG - 2014-02-26 16:41:08 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:41:08 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:41:08 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:41:08 --> URI Class Initialized
DEBUG - 2014-02-26 16:41:08 --> Router Class Initialized
DEBUG - 2014-02-26 16:41:08 --> Output Class Initialized
DEBUG - 2014-02-26 16:41:08 --> Security Class Initialized
DEBUG - 2014-02-26 16:41:08 --> Input Class Initialized
DEBUG - 2014-02-26 16:41:08 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:41:08 --> Language Class Initialized
DEBUG - 2014-02-26 16:41:08 --> Loader Class Initialized
DEBUG - 2014-02-26 16:41:08 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:41:08 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:41:08 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:41:08 --> Database Driver Class Initialized
DEBUG - 2014-02-26 16:41:08 --> Session Class Initialized
DEBUG - 2014-02-26 16:41:08 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:41:08 --> Session routines successfully run
DEBUG - 2014-02-26 16:41:08 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:41:08 --> Controller Class Initialized
DEBUG - 2014-02-26 16:41:08 --> Model Class Initialized
DEBUG - 2014-02-26 16:41:08 --> Model Class Initialized
DEBUG - 2014-02-26 16:41:08 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:41:08 --> after session initialization................
INFO  - 2014-02-26 16:41:08 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  ''
INFO  - 2014-02-26 16:41:08 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-02-26 16:41:08 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2014-02-26 16:41:08 --> inside retrieving vacancy for member
INFO  - 2014-02-26 16:41:08 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2014-02-26 16:41:08 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-02-26 16:41:08 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2014-02-26 16:41:08 --> Drugs ::::::::::===>SELECT d.id_drug, d.drug_name, d.drug_description, group_concat(bn.name, ':', bn.id_brandname) as drug_brandname, dcc.id_drugcategory as category_id
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dcc`.`brandname_id`
WHERE `d`.`id_drug` =  '1'
GROUP BY `id_drug`
ORDER BY `d`.`drug_name`
INFO  - 2014-02-26 16:41:08 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drugcategory_id` = `dc`.`id_drugcategory`
JOIN `drug` d ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2014-02-26 16:41:08 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2014-02-26 16:41:08 --> inside retrieving pharmacy for drug id is 1
INFO  - 2014-02-26 16:41:08 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2014-02-26 16:41:08 --> Related drugs ::::::::::===>SELECT d.drug_name
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcg`.`drugcategory_id` = `dcc`.`id_drugcategory`
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
WHERE `dcc`.`brandname_id` =  '0'
AND `dc`.`id_drugclass` =  '0'
INFO  - 2014-02-26 16:41:08 --> inside retrieve most searched drugs
INFO  - 2014-02-26 16:41:08 --> SELECT `d`.`id_drug` as id, `d`.`drug_name` as name, count(ds.id_drugsearch) as search_count
FROM (`drug_search` ds)
JOIN `drug` d ON `d`.`id_drug` = `ds`.`drug_id`
GROUP BY `d`.`id_drug`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:41:08 --> inside retrieve most searched pharmacy
INFO  - 2014-02-26 16:41:08 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:41:08 --> inside retrieve most searched article
INFO  - 2014-02-26 16:41:08 --> SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description, count(ats.article_id) as search_count
FROM (`article_search` ats)
JOIN `article` a ON `a`.`id_article` = `ats`.`article_id`
JOIN `news` n ON `a`.`newsid_news` = `n`.`id_news`
GROUP BY `a`.`id_article`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:41:08 --> The session id is ========>bd46355d7c926227d2f9de1f9a5a454d and the member id is =======>
INFO  - 2014-02-26 16:41:08 -->  column name inside view is 0 column Data is 618
INFO  - 2014-02-26 16:41:08 -->  column name inside view is 1 column Data is 488
INFO  - 2014-02-26 16:41:08 -->  column name inside view is 2 column Data is 487
INFO  - 2014-02-26 16:41:08 -->  column name inside view is 3 column Data is 1
INFO  - 2014-02-26 16:41:08 -->  column name inside view is 4 column Data is 641
INFO  - 2014-02-26 16:41:08 -->  column name inside view is 5 column Data is 649
INFO  - 2014-02-26 16:41:08 -->  column name inside view is 6 column Data is 491
INFO  - 2014-02-26 16:41:08 -->  column name inside view is 7 column Data is 502
INFO  - 2014-02-26 16:41:08 -->  column name inside view is 8 column Data is 498
INFO  - 2014-02-26 16:41:08 -->  column name inside view is 9 column Data is 619
INFO  - 2014-02-26 16:41:08 -->  column name inside view is 0 column Data is 2
INFO  - 2014-02-26 16:41:08 -->  column name inside view is 1 column Data is 3
INFO  - 2014-02-26 16:41:08 -->  column name inside view is 2 column Data is 18
INFO  - 2014-02-26 16:41:08 -->  column name inside view is 3 column Data is 1
INFO  - 2014-02-26 16:41:08 -->  column name inside view is 4 column Data is 15
INFO  - 2014-02-26 16:41:08 -->  column name inside view is 5 column Data is 14
INFO  - 2014-02-26 16:41:08 -->  column name inside view is 6 column Data is 6
INFO  - 2014-02-26 16:41:08 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2014-02-26 16:41:08 --> File loaded: ../pharmaray-application/views/onlinepharmacy.php
DEBUG - 2014-02-26 16:41:08 --> Final output sent to browser
DEBUG - 2014-02-26 16:41:08 --> Total execution time: 0.0850
DEBUG - 2014-02-26 16:41:08 --> Config Class Initialized
DEBUG - 2014-02-26 16:41:08 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:41:08 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:41:08 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:41:08 --> URI Class Initialized
DEBUG - 2014-02-26 16:41:08 --> Router Class Initialized
ERROR - 2014-02-26 16:41:08 --> 404 Page Not Found --> css
DEBUG - 2014-02-26 16:47:04 --> Config Class Initialized
DEBUG - 2014-02-26 16:47:04 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:47:04 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:47:04 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:47:04 --> URI Class Initialized
DEBUG - 2014-02-26 16:47:04 --> Router Class Initialized
DEBUG - 2014-02-26 16:47:04 --> Output Class Initialized
DEBUG - 2014-02-26 16:47:04 --> Security Class Initialized
DEBUG - 2014-02-26 16:47:04 --> Input Class Initialized
DEBUG - 2014-02-26 16:47:04 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:47:04 --> Language Class Initialized
DEBUG - 2014-02-26 16:47:04 --> Loader Class Initialized
DEBUG - 2014-02-26 16:47:04 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:47:04 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:47:04 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:47:04 --> Database Driver Class Initialized
DEBUG - 2014-02-26 16:47:04 --> Session Class Initialized
DEBUG - 2014-02-26 16:47:04 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:47:04 --> Session routines successfully run
DEBUG - 2014-02-26 16:47:04 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:47:04 --> Controller Class Initialized
DEBUG - 2014-02-26 16:47:04 --> Model Class Initialized
DEBUG - 2014-02-26 16:47:04 --> Model Class Initialized
DEBUG - 2014-02-26 16:47:04 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:47:04 --> after session initialization................
INFO  - 2014-02-26 16:47:04 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  ''
INFO  - 2014-02-26 16:47:04 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-02-26 16:47:04 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2014-02-26 16:47:04 --> inside retrieving vacancy for member
INFO  - 2014-02-26 16:47:04 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2014-02-26 16:47:04 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-02-26 16:47:04 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2014-02-26 16:47:04 --> Drugs ::::::::::===>SELECT d.id_drug, d.drug_name, d.drug_description, group_concat(bn.name, ':', bn.id_brandname) as drug_brandname, dcc.id_drugcategory as category_id
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dcc`.`brandname_id`
WHERE `d`.`id_drug` =  '1'
GROUP BY `id_drug`
ORDER BY `d`.`drug_name`
INFO  - 2014-02-26 16:47:04 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drugcategory_id` = `dc`.`id_drugcategory`
JOIN `drug` d ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2014-02-26 16:47:04 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2014-02-26 16:47:04 --> inside retrieving pharmacy for drug id is 1
INFO  - 2014-02-26 16:47:04 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2014-02-26 16:47:04 --> Related drugs ::::::::::===>SELECT d.drug_name
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcg`.`drugcategory_id` = `dcc`.`id_drugcategory`
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
WHERE `dcc`.`brandname_id` =  '0'
AND `dc`.`id_drugclass` =  '0'
INFO  - 2014-02-26 16:47:04 --> inside retrieve most searched drugs
INFO  - 2014-02-26 16:47:04 --> SELECT `d`.`id_drug` as id, `d`.`drug_name` as name, count(ds.id_drugsearch) as search_count
FROM (`drug_search` ds)
JOIN `drug` d ON `d`.`id_drug` = `ds`.`drug_id`
GROUP BY `d`.`id_drug`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:47:04 --> inside retrieve most searched pharmacy
INFO  - 2014-02-26 16:47:04 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:47:04 --> inside retrieve most searched article
INFO  - 2014-02-26 16:47:04 --> SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description, count(ats.article_id) as search_count
FROM (`article_search` ats)
JOIN `article` a ON `a`.`id_article` = `ats`.`article_id`
JOIN `news` n ON `a`.`newsid_news` = `n`.`id_news`
GROUP BY `a`.`id_article`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:47:04 --> The session id is ========>423737cba61dc30224822ab54438d626 and the member id is =======>
INFO  - 2014-02-26 16:47:04 -->  column name inside view is 0 column Data is 618
INFO  - 2014-02-26 16:47:04 -->  column name inside view is 1 column Data is 488
INFO  - 2014-02-26 16:47:04 -->  column name inside view is 2 column Data is 487
INFO  - 2014-02-26 16:47:04 -->  column name inside view is 3 column Data is 1
INFO  - 2014-02-26 16:47:04 -->  column name inside view is 4 column Data is 641
INFO  - 2014-02-26 16:47:04 -->  column name inside view is 5 column Data is 649
INFO  - 2014-02-26 16:47:04 -->  column name inside view is 6 column Data is 491
INFO  - 2014-02-26 16:47:04 -->  column name inside view is 7 column Data is 502
INFO  - 2014-02-26 16:47:04 -->  column name inside view is 8 column Data is 498
INFO  - 2014-02-26 16:47:04 -->  column name inside view is 9 column Data is 619
INFO  - 2014-02-26 16:47:04 -->  column name inside view is 0 column Data is 2
INFO  - 2014-02-26 16:47:04 -->  column name inside view is 1 column Data is 3
INFO  - 2014-02-26 16:47:04 -->  column name inside view is 2 column Data is 18
INFO  - 2014-02-26 16:47:04 -->  column name inside view is 3 column Data is 1
INFO  - 2014-02-26 16:47:04 -->  column name inside view is 4 column Data is 15
INFO  - 2014-02-26 16:47:04 -->  column name inside view is 5 column Data is 14
INFO  - 2014-02-26 16:47:04 -->  column name inside view is 6 column Data is 6
INFO  - 2014-02-26 16:47:04 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2014-02-26 16:47:04 --> File loaded: ../pharmaray-application/views/onlinepharmacy.php
DEBUG - 2014-02-26 16:47:04 --> Final output sent to browser
DEBUG - 2014-02-26 16:47:04 --> Total execution time: 0.1010
DEBUG - 2014-02-26 16:47:04 --> Config Class Initialized
DEBUG - 2014-02-26 16:47:04 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:47:04 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:47:04 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:47:04 --> URI Class Initialized
DEBUG - 2014-02-26 16:47:04 --> Router Class Initialized
ERROR - 2014-02-26 16:47:04 --> 404 Page Not Found --> css
DEBUG - 2014-02-26 16:47:21 --> Config Class Initialized
DEBUG - 2014-02-26 16:47:21 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:47:21 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:47:21 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:47:21 --> URI Class Initialized
DEBUG - 2014-02-26 16:47:21 --> Router Class Initialized
DEBUG - 2014-02-26 16:47:21 --> Output Class Initialized
DEBUG - 2014-02-26 16:47:21 --> Security Class Initialized
DEBUG - 2014-02-26 16:47:21 --> Input Class Initialized
DEBUG - 2014-02-26 16:47:21 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:47:21 --> Language Class Initialized
DEBUG - 2014-02-26 16:47:21 --> Loader Class Initialized
DEBUG - 2014-02-26 16:47:21 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:47:21 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:47:21 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:47:21 --> Database Driver Class Initialized
DEBUG - 2014-02-26 16:47:21 --> Session Class Initialized
DEBUG - 2014-02-26 16:47:21 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:47:21 --> Session routines successfully run
DEBUG - 2014-02-26 16:47:21 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:47:21 --> Controller Class Initialized
DEBUG - 2014-02-26 16:47:21 --> Model Class Initialized
DEBUG - 2014-02-26 16:47:21 --> Model Class Initialized
DEBUG - 2014-02-26 16:47:21 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:47:21 --> after session initialization................
INFO  - 2014-02-26 16:47:21 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  ''
INFO  - 2014-02-26 16:47:21 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-02-26 16:47:21 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2014-02-26 16:47:21 --> inside retrieving vacancy for member
INFO  - 2014-02-26 16:47:21 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2014-02-26 16:47:21 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-02-26 16:47:21 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2014-02-26 16:47:21 --> Drugs ::::::::::===>SELECT d.id_drug, d.drug_name, d.drug_description, group_concat(bn.name, ':', bn.id_brandname) as drug_brandname, dcc.id_drugcategory as category_id
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dcc`.`brandname_id`
WHERE `d`.`id_drug` =  '1'
GROUP BY `id_drug`
ORDER BY `d`.`drug_name`
INFO  - 2014-02-26 16:47:21 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drugcategory_id` = `dc`.`id_drugcategory`
JOIN `drug` d ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2014-02-26 16:47:21 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2014-02-26 16:47:21 --> inside retrieving pharmacy for drug id is 1
INFO  - 2014-02-26 16:47:21 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2014-02-26 16:47:21 --> Related drugs ::::::::::===>SELECT d.drug_name
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcg`.`drugcategory_id` = `dcc`.`id_drugcategory`
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
WHERE `dcc`.`brandname_id` =  '0'
AND `dc`.`id_drugclass` =  '0'
INFO  - 2014-02-26 16:47:21 --> inside retrieve most searched drugs
INFO  - 2014-02-26 16:47:21 --> SELECT `d`.`id_drug` as id, `d`.`drug_name` as name, count(ds.id_drugsearch) as search_count
FROM (`drug_search` ds)
JOIN `drug` d ON `d`.`id_drug` = `ds`.`drug_id`
GROUP BY `d`.`id_drug`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:47:21 --> inside retrieve most searched pharmacy
INFO  - 2014-02-26 16:47:21 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:47:21 --> inside retrieve most searched article
INFO  - 2014-02-26 16:47:21 --> SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description, count(ats.article_id) as search_count
FROM (`article_search` ats)
JOIN `article` a ON `a`.`id_article` = `ats`.`article_id`
JOIN `news` n ON `a`.`newsid_news` = `n`.`id_news`
GROUP BY `a`.`id_article`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:47:21 --> The session id is ========>423737cba61dc30224822ab54438d626 and the member id is =======>
INFO  - 2014-02-26 16:47:21 -->  column name inside view is 0 column Data is 618
INFO  - 2014-02-26 16:47:21 -->  column name inside view is 1 column Data is 488
INFO  - 2014-02-26 16:47:21 -->  column name inside view is 2 column Data is 487
INFO  - 2014-02-26 16:47:21 -->  column name inside view is 3 column Data is 1
INFO  - 2014-02-26 16:47:21 -->  column name inside view is 4 column Data is 641
INFO  - 2014-02-26 16:47:21 -->  column name inside view is 5 column Data is 649
INFO  - 2014-02-26 16:47:21 -->  column name inside view is 6 column Data is 491
INFO  - 2014-02-26 16:47:21 -->  column name inside view is 7 column Data is 502
INFO  - 2014-02-26 16:47:21 -->  column name inside view is 8 column Data is 498
INFO  - 2014-02-26 16:47:21 -->  column name inside view is 9 column Data is 619
INFO  - 2014-02-26 16:47:21 -->  column name inside view is 0 column Data is 2
INFO  - 2014-02-26 16:47:21 -->  column name inside view is 1 column Data is 3
INFO  - 2014-02-26 16:47:21 -->  column name inside view is 2 column Data is 18
INFO  - 2014-02-26 16:47:21 -->  column name inside view is 3 column Data is 1
INFO  - 2014-02-26 16:47:21 -->  column name inside view is 4 column Data is 15
INFO  - 2014-02-26 16:47:21 -->  column name inside view is 5 column Data is 14
INFO  - 2014-02-26 16:47:21 -->  column name inside view is 6 column Data is 6
INFO  - 2014-02-26 16:47:21 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2014-02-26 16:47:21 --> File loaded: ../pharmaray-application/views/onlinepharmacy.php
DEBUG - 2014-02-26 16:47:21 --> Final output sent to browser
DEBUG - 2014-02-26 16:47:21 --> Total execution time: 0.0830
DEBUG - 2014-02-26 16:47:22 --> Config Class Initialized
DEBUG - 2014-02-26 16:47:22 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:47:22 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:47:22 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:47:22 --> URI Class Initialized
DEBUG - 2014-02-26 16:47:22 --> Router Class Initialized
ERROR - 2014-02-26 16:47:22 --> 404 Page Not Found --> css
DEBUG - 2014-02-26 16:47:23 --> Config Class Initialized
DEBUG - 2014-02-26 16:47:23 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:47:23 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:47:23 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:47:23 --> URI Class Initialized
DEBUG - 2014-02-26 16:47:23 --> Router Class Initialized
DEBUG - 2014-02-26 16:47:23 --> Output Class Initialized
DEBUG - 2014-02-26 16:47:23 --> Security Class Initialized
DEBUG - 2014-02-26 16:47:23 --> Input Class Initialized
DEBUG - 2014-02-26 16:47:23 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:47:23 --> Language Class Initialized
DEBUG - 2014-02-26 16:47:23 --> Loader Class Initialized
DEBUG - 2014-02-26 16:47:23 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:47:23 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:47:23 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:47:23 --> Database Driver Class Initialized
DEBUG - 2014-02-26 16:47:23 --> Session Class Initialized
DEBUG - 2014-02-26 16:47:23 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:47:23 --> Session routines successfully run
DEBUG - 2014-02-26 16:47:23 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:47:23 --> Controller Class Initialized
DEBUG - 2014-02-26 16:47:23 --> Model Class Initialized
DEBUG - 2014-02-26 16:47:23 --> Model Class Initialized
DEBUG - 2014-02-26 16:47:23 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:47:23 --> after session initialization................
INFO  - 2014-02-26 16:47:23 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  ''
INFO  - 2014-02-26 16:47:23 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-02-26 16:47:23 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2014-02-26 16:47:23 --> inside retrieving vacancy for member
INFO  - 2014-02-26 16:47:23 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2014-02-26 16:47:23 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-02-26 16:47:23 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2014-02-26 16:47:23 --> Drugs ::::::::::===>SELECT d.id_drug, d.drug_name, d.drug_description, group_concat(bn.name, ':', bn.id_brandname) as drug_brandname, dcc.id_drugcategory as category_id
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dcc`.`brandname_id`
WHERE `d`.`id_drug` =  '1'
GROUP BY `id_drug`
ORDER BY `d`.`drug_name`
INFO  - 2014-02-26 16:47:23 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drugcategory_id` = `dc`.`id_drugcategory`
JOIN `drug` d ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2014-02-26 16:47:23 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2014-02-26 16:47:23 --> inside retrieving pharmacy for drug id is 1
INFO  - 2014-02-26 16:47:23 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2014-02-26 16:47:23 --> Related drugs ::::::::::===>SELECT d.drug_name
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcg`.`drugcategory_id` = `dcc`.`id_drugcategory`
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
WHERE `dcc`.`brandname_id` =  '0'
AND `dc`.`id_drugclass` =  '0'
INFO  - 2014-02-26 16:47:23 --> inside retrieve most searched drugs
INFO  - 2014-02-26 16:47:23 --> SELECT `d`.`id_drug` as id, `d`.`drug_name` as name, count(ds.id_drugsearch) as search_count
FROM (`drug_search` ds)
JOIN `drug` d ON `d`.`id_drug` = `ds`.`drug_id`
GROUP BY `d`.`id_drug`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:47:23 --> inside retrieve most searched pharmacy
INFO  - 2014-02-26 16:47:23 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:47:23 --> inside retrieve most searched article
INFO  - 2014-02-26 16:47:23 --> SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description, count(ats.article_id) as search_count
FROM (`article_search` ats)
JOIN `article` a ON `a`.`id_article` = `ats`.`article_id`
JOIN `news` n ON `a`.`newsid_news` = `n`.`id_news`
GROUP BY `a`.`id_article`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:47:23 --> The session id is ========>423737cba61dc30224822ab54438d626 and the member id is =======>
INFO  - 2014-02-26 16:47:23 -->  column name inside view is 0 column Data is 618
INFO  - 2014-02-26 16:47:23 -->  column name inside view is 1 column Data is 488
INFO  - 2014-02-26 16:47:23 -->  column name inside view is 2 column Data is 487
INFO  - 2014-02-26 16:47:23 -->  column name inside view is 3 column Data is 1
INFO  - 2014-02-26 16:47:23 -->  column name inside view is 4 column Data is 641
INFO  - 2014-02-26 16:47:23 -->  column name inside view is 5 column Data is 649
INFO  - 2014-02-26 16:47:23 -->  column name inside view is 6 column Data is 491
INFO  - 2014-02-26 16:47:23 -->  column name inside view is 7 column Data is 502
INFO  - 2014-02-26 16:47:23 -->  column name inside view is 8 column Data is 498
INFO  - 2014-02-26 16:47:23 -->  column name inside view is 9 column Data is 619
INFO  - 2014-02-26 16:47:23 -->  column name inside view is 0 column Data is 2
INFO  - 2014-02-26 16:47:23 -->  column name inside view is 1 column Data is 3
INFO  - 2014-02-26 16:47:23 -->  column name inside view is 2 column Data is 18
INFO  - 2014-02-26 16:47:23 -->  column name inside view is 3 column Data is 1
INFO  - 2014-02-26 16:47:23 -->  column name inside view is 4 column Data is 15
INFO  - 2014-02-26 16:47:23 -->  column name inside view is 5 column Data is 14
INFO  - 2014-02-26 16:47:23 -->  column name inside view is 6 column Data is 6
INFO  - 2014-02-26 16:47:23 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2014-02-26 16:47:23 --> File loaded: ../pharmaray-application/views/onlinepharmacy.php
DEBUG - 2014-02-26 16:47:23 --> Final output sent to browser
DEBUG - 2014-02-26 16:47:23 --> Total execution time: 0.0810
DEBUG - 2014-02-26 16:47:23 --> Config Class Initialized
DEBUG - 2014-02-26 16:47:23 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:47:23 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:47:23 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:47:23 --> URI Class Initialized
DEBUG - 2014-02-26 16:47:23 --> Router Class Initialized
ERROR - 2014-02-26 16:47:23 --> 404 Page Not Found --> css
DEBUG - 2014-02-26 16:47:24 --> Config Class Initialized
DEBUG - 2014-02-26 16:47:24 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:47:24 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:47:24 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:47:24 --> URI Class Initialized
DEBUG - 2014-02-26 16:47:24 --> Router Class Initialized
DEBUG - 2014-02-26 16:47:24 --> Output Class Initialized
DEBUG - 2014-02-26 16:47:24 --> Security Class Initialized
DEBUG - 2014-02-26 16:47:24 --> Input Class Initialized
DEBUG - 2014-02-26 16:47:24 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:47:24 --> Language Class Initialized
DEBUG - 2014-02-26 16:47:24 --> Loader Class Initialized
DEBUG - 2014-02-26 16:47:24 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:47:24 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:47:24 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:47:24 --> Database Driver Class Initialized
DEBUG - 2014-02-26 16:47:24 --> Session Class Initialized
DEBUG - 2014-02-26 16:47:24 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:47:24 --> Session routines successfully run
DEBUG - 2014-02-26 16:47:24 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:47:24 --> Controller Class Initialized
DEBUG - 2014-02-26 16:47:24 --> Model Class Initialized
DEBUG - 2014-02-26 16:47:24 --> Model Class Initialized
DEBUG - 2014-02-26 16:47:24 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:47:24 --> after session initialization................
INFO  - 2014-02-26 16:47:24 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  ''
INFO  - 2014-02-26 16:47:24 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-02-26 16:47:24 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2014-02-26 16:47:24 --> inside retrieving vacancy for member
INFO  - 2014-02-26 16:47:24 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2014-02-26 16:47:24 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-02-26 16:47:24 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2014-02-26 16:47:24 --> Drugs ::::::::::===>SELECT d.id_drug, d.drug_name, d.drug_description, group_concat(bn.name, ':', bn.id_brandname) as drug_brandname, dcc.id_drugcategory as category_id
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dcc`.`brandname_id`
WHERE `d`.`id_drug` =  '1'
GROUP BY `id_drug`
ORDER BY `d`.`drug_name`
INFO  - 2014-02-26 16:47:24 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drugcategory_id` = `dc`.`id_drugcategory`
JOIN `drug` d ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2014-02-26 16:47:24 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2014-02-26 16:47:24 --> inside retrieving pharmacy for drug id is 1
INFO  - 2014-02-26 16:47:24 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2014-02-26 16:47:24 --> Related drugs ::::::::::===>SELECT d.drug_name
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcg`.`drugcategory_id` = `dcc`.`id_drugcategory`
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
WHERE `dcc`.`brandname_id` =  '0'
AND `dc`.`id_drugclass` =  '0'
INFO  - 2014-02-26 16:47:24 --> inside retrieve most searched drugs
INFO  - 2014-02-26 16:47:24 --> SELECT `d`.`id_drug` as id, `d`.`drug_name` as name, count(ds.id_drugsearch) as search_count
FROM (`drug_search` ds)
JOIN `drug` d ON `d`.`id_drug` = `ds`.`drug_id`
GROUP BY `d`.`id_drug`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:47:24 --> inside retrieve most searched pharmacy
INFO  - 2014-02-26 16:47:24 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:47:24 --> inside retrieve most searched article
INFO  - 2014-02-26 16:47:24 --> SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description, count(ats.article_id) as search_count
FROM (`article_search` ats)
JOIN `article` a ON `a`.`id_article` = `ats`.`article_id`
JOIN `news` n ON `a`.`newsid_news` = `n`.`id_news`
GROUP BY `a`.`id_article`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:47:24 --> The session id is ========>423737cba61dc30224822ab54438d626 and the member id is =======>
INFO  - 2014-02-26 16:47:24 -->  column name inside view is 0 column Data is 618
INFO  - 2014-02-26 16:47:24 -->  column name inside view is 1 column Data is 488
INFO  - 2014-02-26 16:47:24 -->  column name inside view is 2 column Data is 487
INFO  - 2014-02-26 16:47:24 -->  column name inside view is 3 column Data is 1
INFO  - 2014-02-26 16:47:24 -->  column name inside view is 4 column Data is 641
INFO  - 2014-02-26 16:47:24 -->  column name inside view is 5 column Data is 649
INFO  - 2014-02-26 16:47:24 -->  column name inside view is 6 column Data is 491
INFO  - 2014-02-26 16:47:24 -->  column name inside view is 7 column Data is 502
INFO  - 2014-02-26 16:47:24 -->  column name inside view is 8 column Data is 498
INFO  - 2014-02-26 16:47:24 -->  column name inside view is 9 column Data is 619
INFO  - 2014-02-26 16:47:24 -->  column name inside view is 0 column Data is 2
INFO  - 2014-02-26 16:47:24 -->  column name inside view is 1 column Data is 3
INFO  - 2014-02-26 16:47:24 -->  column name inside view is 2 column Data is 18
INFO  - 2014-02-26 16:47:24 -->  column name inside view is 3 column Data is 1
INFO  - 2014-02-26 16:47:24 -->  column name inside view is 4 column Data is 15
INFO  - 2014-02-26 16:47:24 -->  column name inside view is 5 column Data is 14
INFO  - 2014-02-26 16:47:24 -->  column name inside view is 6 column Data is 6
INFO  - 2014-02-26 16:47:24 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2014-02-26 16:47:24 --> File loaded: ../pharmaray-application/views/onlinepharmacy.php
DEBUG - 2014-02-26 16:47:24 --> Final output sent to browser
DEBUG - 2014-02-26 16:47:24 --> Total execution time: 0.0920
DEBUG - 2014-02-26 16:47:24 --> Config Class Initialized
DEBUG - 2014-02-26 16:47:24 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:47:24 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:47:24 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:47:24 --> URI Class Initialized
DEBUG - 2014-02-26 16:47:24 --> Router Class Initialized
ERROR - 2014-02-26 16:47:24 --> 404 Page Not Found --> css
DEBUG - 2014-02-26 16:47:41 --> Config Class Initialized
DEBUG - 2014-02-26 16:47:41 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:47:41 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:47:41 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:47:41 --> URI Class Initialized
DEBUG - 2014-02-26 16:47:41 --> Router Class Initialized
DEBUG - 2014-02-26 16:47:41 --> Output Class Initialized
DEBUG - 2014-02-26 16:47:41 --> Security Class Initialized
DEBUG - 2014-02-26 16:47:41 --> Input Class Initialized
DEBUG - 2014-02-26 16:47:41 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:47:41 --> Language Class Initialized
DEBUG - 2014-02-26 16:47:41 --> Loader Class Initialized
DEBUG - 2014-02-26 16:47:41 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:47:41 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:47:41 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:47:41 --> Database Driver Class Initialized
ERROR - 2014-02-26 16:47:41 --> Severity: Notice  --> mysql_pconnect(): send of 5 bytes failed with errno=10053 An established connection was aborted by the software in your host machine.
 C:\xampp\htdocs\Pharmarays\pharmaray-system\database\drivers\mysql\mysql_driver.php 91
DEBUG - 2014-02-26 16:47:42 --> Session Class Initialized
DEBUG - 2014-02-26 16:47:42 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:47:42 --> Session routines successfully run
DEBUG - 2014-02-26 16:47:42 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:47:42 --> Controller Class Initialized
DEBUG - 2014-02-26 16:47:42 --> Model Class Initialized
DEBUG - 2014-02-26 16:47:42 --> Model Class Initialized
DEBUG - 2014-02-26 16:47:42 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:47:42 --> after session initialization................
INFO  - 2014-02-26 16:47:42 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  ''
INFO  - 2014-02-26 16:47:42 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-02-26 16:47:42 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2014-02-26 16:47:42 --> inside retrieving vacancy for member
INFO  - 2014-02-26 16:47:42 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2014-02-26 16:47:42 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-02-26 16:47:42 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2014-02-26 16:47:42 --> Drugs ::::::::::===>SELECT d.id_drug, d.drug_name, d.drug_description, group_concat(bn.name, ':', bn.id_brandname) as drug_brandname, dcc.id_drugcategory as category_id
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dcc`.`brandname_id`
WHERE `d`.`id_drug` =  '1'
GROUP BY `id_drug`
ORDER BY `d`.`drug_name`
INFO  - 2014-02-26 16:47:42 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drugcategory_id` = `dc`.`id_drugcategory`
JOIN `drug` d ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2014-02-26 16:47:42 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2014-02-26 16:47:42 --> inside retrieving pharmacy for drug id is 1
INFO  - 2014-02-26 16:47:42 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2014-02-26 16:47:42 --> Related drugs ::::::::::===>SELECT d.drug_name
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcg`.`drugcategory_id` = `dcc`.`id_drugcategory`
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
WHERE `dcc`.`brandname_id` =  '0'
AND `dc`.`id_drugclass` =  '0'
INFO  - 2014-02-26 16:47:42 --> inside retrieve most searched drugs
INFO  - 2014-02-26 16:47:42 --> SELECT `d`.`id_drug` as id, `d`.`drug_name` as name, count(ds.id_drugsearch) as search_count
FROM (`drug_search` ds)
JOIN `drug` d ON `d`.`id_drug` = `ds`.`drug_id`
GROUP BY `d`.`id_drug`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:47:42 --> inside retrieve most searched pharmacy
INFO  - 2014-02-26 16:47:42 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:47:42 --> inside retrieve most searched article
INFO  - 2014-02-26 16:47:42 --> SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description, count(ats.article_id) as search_count
FROM (`article_search` ats)
JOIN `article` a ON `a`.`id_article` = `ats`.`article_id`
JOIN `news` n ON `a`.`newsid_news` = `n`.`id_news`
GROUP BY `a`.`id_article`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:47:42 --> The session id is ========>423737cba61dc30224822ab54438d626 and the member id is =======>
INFO  - 2014-02-26 16:47:42 -->  column name inside view is 0 column Data is 618
INFO  - 2014-02-26 16:47:42 -->  column name inside view is 1 column Data is 488
INFO  - 2014-02-26 16:47:42 -->  column name inside view is 2 column Data is 487
INFO  - 2014-02-26 16:47:42 -->  column name inside view is 3 column Data is 1
INFO  - 2014-02-26 16:47:42 -->  column name inside view is 4 column Data is 641
INFO  - 2014-02-26 16:47:42 -->  column name inside view is 5 column Data is 649
INFO  - 2014-02-26 16:47:42 -->  column name inside view is 6 column Data is 491
INFO  - 2014-02-26 16:47:42 -->  column name inside view is 7 column Data is 502
INFO  - 2014-02-26 16:47:42 -->  column name inside view is 8 column Data is 498
INFO  - 2014-02-26 16:47:42 -->  column name inside view is 9 column Data is 619
INFO  - 2014-02-26 16:47:42 -->  column name inside view is 0 column Data is 2
INFO  - 2014-02-26 16:47:42 -->  column name inside view is 1 column Data is 3
INFO  - 2014-02-26 16:47:42 -->  column name inside view is 2 column Data is 18
INFO  - 2014-02-26 16:47:42 -->  column name inside view is 3 column Data is 1
INFO  - 2014-02-26 16:47:42 -->  column name inside view is 4 column Data is 15
INFO  - 2014-02-26 16:47:42 -->  column name inside view is 5 column Data is 14
INFO  - 2014-02-26 16:47:42 -->  column name inside view is 6 column Data is 6
INFO  - 2014-02-26 16:47:42 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2014-02-26 16:47:42 --> File loaded: ../pharmaray-application/views/onlinepharmacy.php
DEBUG - 2014-02-26 16:47:42 --> Final output sent to browser
DEBUG - 2014-02-26 16:47:42 --> Total execution time: 1.1011
DEBUG - 2014-02-26 16:47:42 --> Config Class Initialized
DEBUG - 2014-02-26 16:47:42 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:47:42 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:47:42 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:47:42 --> URI Class Initialized
DEBUG - 2014-02-26 16:47:42 --> Router Class Initialized
ERROR - 2014-02-26 16:47:42 --> 404 Page Not Found --> css
DEBUG - 2014-02-26 16:48:09 --> Config Class Initialized
DEBUG - 2014-02-26 16:48:09 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:48:09 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:48:09 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:48:09 --> URI Class Initialized
DEBUG - 2014-02-26 16:48:09 --> Router Class Initialized
DEBUG - 2014-02-26 16:48:09 --> Output Class Initialized
DEBUG - 2014-02-26 16:48:09 --> Security Class Initialized
DEBUG - 2014-02-26 16:48:09 --> Input Class Initialized
DEBUG - 2014-02-26 16:48:09 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:48:09 --> Language Class Initialized
DEBUG - 2014-02-26 16:48:09 --> Loader Class Initialized
DEBUG - 2014-02-26 16:48:09 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:48:09 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:48:09 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:48:09 --> Database Driver Class Initialized
DEBUG - 2014-02-26 16:48:09 --> Session Class Initialized
DEBUG - 2014-02-26 16:48:09 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:48:09 --> Session routines successfully run
DEBUG - 2014-02-26 16:48:09 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:48:09 --> Controller Class Initialized
DEBUG - 2014-02-26 16:48:09 --> Model Class Initialized
DEBUG - 2014-02-26 16:48:09 --> Model Class Initialized
DEBUG - 2014-02-26 16:48:09 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:48:09 --> after session initialization................
INFO  - 2014-02-26 16:48:09 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  ''
INFO  - 2014-02-26 16:48:09 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-02-26 16:48:09 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2014-02-26 16:48:09 --> inside retrieving vacancy for member
INFO  - 2014-02-26 16:48:09 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2014-02-26 16:48:09 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-02-26 16:48:09 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2014-02-26 16:48:09 --> Drugs ::::::::::===>SELECT d.id_drug, d.drug_name, d.drug_description, group_concat(bn.name, ':', bn.id_brandname) as drug_brandname, dcc.id_drugcategory as category_id
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dcc`.`brandname_id`
WHERE `d`.`id_drug` =  '1'
GROUP BY `id_drug`
ORDER BY `d`.`drug_name`
INFO  - 2014-02-26 16:48:09 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drugcategory_id` = `dc`.`id_drugcategory`
JOIN `drug` d ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2014-02-26 16:48:09 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2014-02-26 16:48:09 --> inside retrieving pharmacy for drug id is 1
INFO  - 2014-02-26 16:48:09 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2014-02-26 16:48:09 --> Related drugs ::::::::::===>SELECT d.drug_name
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcg`.`drugcategory_id` = `dcc`.`id_drugcategory`
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
WHERE `dcc`.`brandname_id` =  '0'
AND `dc`.`id_drugclass` =  '0'
INFO  - 2014-02-26 16:48:09 --> inside retrieve most searched drugs
INFO  - 2014-02-26 16:48:09 --> SELECT `d`.`id_drug` as id, `d`.`drug_name` as name, count(ds.id_drugsearch) as search_count
FROM (`drug_search` ds)
JOIN `drug` d ON `d`.`id_drug` = `ds`.`drug_id`
GROUP BY `d`.`id_drug`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:48:09 --> inside retrieve most searched pharmacy
INFO  - 2014-02-26 16:48:09 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:48:09 --> inside retrieve most searched article
INFO  - 2014-02-26 16:48:09 --> SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description, count(ats.article_id) as search_count
FROM (`article_search` ats)
JOIN `article` a ON `a`.`id_article` = `ats`.`article_id`
JOIN `news` n ON `a`.`newsid_news` = `n`.`id_news`
GROUP BY `a`.`id_article`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:48:09 --> The session id is ========>423737cba61dc30224822ab54438d626 and the member id is =======>
INFO  - 2014-02-26 16:48:09 -->  column name inside view is 0 column Data is 618
INFO  - 2014-02-26 16:48:09 -->  column name inside view is 1 column Data is 488
INFO  - 2014-02-26 16:48:09 -->  column name inside view is 2 column Data is 487
INFO  - 2014-02-26 16:48:09 -->  column name inside view is 3 column Data is 1
INFO  - 2014-02-26 16:48:09 -->  column name inside view is 4 column Data is 641
INFO  - 2014-02-26 16:48:09 -->  column name inside view is 5 column Data is 649
INFO  - 2014-02-26 16:48:09 -->  column name inside view is 6 column Data is 491
INFO  - 2014-02-26 16:48:09 -->  column name inside view is 7 column Data is 502
INFO  - 2014-02-26 16:48:09 -->  column name inside view is 8 column Data is 498
INFO  - 2014-02-26 16:48:09 -->  column name inside view is 9 column Data is 619
INFO  - 2014-02-26 16:48:09 -->  column name inside view is 0 column Data is 2
INFO  - 2014-02-26 16:48:09 -->  column name inside view is 1 column Data is 3
INFO  - 2014-02-26 16:48:09 -->  column name inside view is 2 column Data is 18
INFO  - 2014-02-26 16:48:09 -->  column name inside view is 3 column Data is 1
INFO  - 2014-02-26 16:48:09 -->  column name inside view is 4 column Data is 15
INFO  - 2014-02-26 16:48:09 -->  column name inside view is 5 column Data is 14
INFO  - 2014-02-26 16:48:09 -->  column name inside view is 6 column Data is 6
INFO  - 2014-02-26 16:48:09 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2014-02-26 16:48:09 --> File loaded: ../pharmaray-application/views/onlinepharmacy.php
DEBUG - 2014-02-26 16:48:09 --> Final output sent to browser
DEBUG - 2014-02-26 16:48:09 --> Total execution time: 0.0840
DEBUG - 2014-02-26 16:48:10 --> Config Class Initialized
DEBUG - 2014-02-26 16:48:10 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:48:10 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:48:10 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:48:10 --> URI Class Initialized
DEBUG - 2014-02-26 16:48:10 --> Router Class Initialized
ERROR - 2014-02-26 16:48:10 --> 404 Page Not Found --> css
DEBUG - 2014-02-26 16:48:22 --> Config Class Initialized
DEBUG - 2014-02-26 16:48:22 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:48:22 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:48:22 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:48:22 --> URI Class Initialized
DEBUG - 2014-02-26 16:48:22 --> Router Class Initialized
DEBUG - 2014-02-26 16:48:22 --> Output Class Initialized
DEBUG - 2014-02-26 16:48:22 --> Security Class Initialized
DEBUG - 2014-02-26 16:48:22 --> Input Class Initialized
DEBUG - 2014-02-26 16:48:22 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:48:22 --> Language Class Initialized
DEBUG - 2014-02-26 16:48:22 --> Loader Class Initialized
DEBUG - 2014-02-26 16:48:22 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:48:22 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:48:22 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:48:22 --> Database Driver Class Initialized
DEBUG - 2014-02-26 16:48:22 --> Session Class Initialized
DEBUG - 2014-02-26 16:48:22 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:48:22 --> Session routines successfully run
DEBUG - 2014-02-26 16:48:22 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:48:22 --> Controller Class Initialized
DEBUG - 2014-02-26 16:48:22 --> Model Class Initialized
DEBUG - 2014-02-26 16:48:22 --> Model Class Initialized
DEBUG - 2014-02-26 16:48:22 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:48:22 --> after session initialization................
INFO  - 2014-02-26 16:48:22 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  ''
INFO  - 2014-02-26 16:48:22 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-02-26 16:48:22 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2014-02-26 16:48:22 --> inside retrieving vacancy for member
INFO  - 2014-02-26 16:48:22 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2014-02-26 16:48:22 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-02-26 16:48:22 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2014-02-26 16:48:22 --> Drugs ::::::::::===>SELECT d.id_drug, d.drug_name, d.drug_description, group_concat(bn.name, ':', bn.id_brandname) as drug_brandname, dcc.id_drugcategory as category_id
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dcc`.`brandname_id`
WHERE `d`.`id_drug` =  '1'
GROUP BY `id_drug`
ORDER BY `d`.`drug_name`
INFO  - 2014-02-26 16:48:22 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drugcategory_id` = `dc`.`id_drugcategory`
JOIN `drug` d ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2014-02-26 16:48:22 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2014-02-26 16:48:22 --> inside retrieving pharmacy for drug id is 1
INFO  - 2014-02-26 16:48:22 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2014-02-26 16:48:22 --> Related drugs ::::::::::===>SELECT d.drug_name
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcg`.`drugcategory_id` = `dcc`.`id_drugcategory`
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
WHERE `dcc`.`brandname_id` =  '0'
AND `dc`.`id_drugclass` =  '0'
INFO  - 2014-02-26 16:48:22 --> inside retrieve most searched drugs
INFO  - 2014-02-26 16:48:22 --> SELECT `d`.`id_drug` as id, `d`.`drug_name` as name, count(ds.id_drugsearch) as search_count
FROM (`drug_search` ds)
JOIN `drug` d ON `d`.`id_drug` = `ds`.`drug_id`
GROUP BY `d`.`id_drug`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:48:22 --> inside retrieve most searched pharmacy
INFO  - 2014-02-26 16:48:22 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:48:22 --> inside retrieve most searched article
INFO  - 2014-02-26 16:48:22 --> SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description, count(ats.article_id) as search_count
FROM (`article_search` ats)
JOIN `article` a ON `a`.`id_article` = `ats`.`article_id`
JOIN `news` n ON `a`.`newsid_news` = `n`.`id_news`
GROUP BY `a`.`id_article`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:48:22 --> The session id is ========>423737cba61dc30224822ab54438d626 and the member id is =======>
INFO  - 2014-02-26 16:48:22 -->  column name inside view is 0 column Data is 618
INFO  - 2014-02-26 16:48:22 -->  column name inside view is 1 column Data is 488
INFO  - 2014-02-26 16:48:22 -->  column name inside view is 2 column Data is 487
INFO  - 2014-02-26 16:48:22 -->  column name inside view is 3 column Data is 1
INFO  - 2014-02-26 16:48:22 -->  column name inside view is 4 column Data is 641
INFO  - 2014-02-26 16:48:22 -->  column name inside view is 5 column Data is 649
INFO  - 2014-02-26 16:48:22 -->  column name inside view is 6 column Data is 491
INFO  - 2014-02-26 16:48:22 -->  column name inside view is 7 column Data is 502
INFO  - 2014-02-26 16:48:22 -->  column name inside view is 8 column Data is 498
INFO  - 2014-02-26 16:48:22 -->  column name inside view is 9 column Data is 619
INFO  - 2014-02-26 16:48:22 -->  column name inside view is 0 column Data is 2
INFO  - 2014-02-26 16:48:22 -->  column name inside view is 1 column Data is 3
INFO  - 2014-02-26 16:48:22 -->  column name inside view is 2 column Data is 18
INFO  - 2014-02-26 16:48:22 -->  column name inside view is 3 column Data is 1
INFO  - 2014-02-26 16:48:22 -->  column name inside view is 4 column Data is 15
INFO  - 2014-02-26 16:48:22 -->  column name inside view is 5 column Data is 14
INFO  - 2014-02-26 16:48:22 -->  column name inside view is 6 column Data is 6
INFO  - 2014-02-26 16:48:22 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2014-02-26 16:48:22 --> File loaded: ../pharmaray-application/views/onlinepharmacy.php
DEBUG - 2014-02-26 16:48:22 --> Final output sent to browser
DEBUG - 2014-02-26 16:48:22 --> Total execution time: 0.0840
DEBUG - 2014-02-26 16:48:22 --> Config Class Initialized
DEBUG - 2014-02-26 16:48:22 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:48:22 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:48:22 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:48:22 --> URI Class Initialized
DEBUG - 2014-02-26 16:48:22 --> Router Class Initialized
ERROR - 2014-02-26 16:48:22 --> 404 Page Not Found --> css
DEBUG - 2014-02-26 16:48:49 --> Config Class Initialized
DEBUG - 2014-02-26 16:48:49 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:48:49 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:48:49 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:48:49 --> URI Class Initialized
DEBUG - 2014-02-26 16:48:49 --> Router Class Initialized
DEBUG - 2014-02-26 16:48:49 --> Output Class Initialized
DEBUG - 2014-02-26 16:48:49 --> Security Class Initialized
DEBUG - 2014-02-26 16:48:49 --> Input Class Initialized
DEBUG - 2014-02-26 16:48:49 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:48:49 --> Language Class Initialized
DEBUG - 2014-02-26 16:48:49 --> Loader Class Initialized
DEBUG - 2014-02-26 16:48:49 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:48:49 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:48:49 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:48:49 --> Database Driver Class Initialized
DEBUG - 2014-02-26 16:48:49 --> Session Class Initialized
DEBUG - 2014-02-26 16:48:49 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:48:49 --> Session routines successfully run
DEBUG - 2014-02-26 16:48:49 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:48:49 --> Controller Class Initialized
DEBUG - 2014-02-26 16:48:49 --> Model Class Initialized
DEBUG - 2014-02-26 16:48:49 --> Model Class Initialized
DEBUG - 2014-02-26 16:48:49 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:48:49 --> after session initialization................
INFO  - 2014-02-26 16:48:49 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  ''
INFO  - 2014-02-26 16:48:49 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-02-26 16:48:49 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2014-02-26 16:48:49 --> inside retrieving vacancy for member
INFO  - 2014-02-26 16:48:49 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2014-02-26 16:48:49 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-02-26 16:48:49 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2014-02-26 16:48:49 --> Drugs ::::::::::===>SELECT d.id_drug, d.drug_name, d.drug_description, group_concat(bn.name, ':', bn.id_brandname) as drug_brandname, dcc.id_drugcategory as category_id
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dcc`.`brandname_id`
WHERE `d`.`id_drug` =  '1'
GROUP BY `id_drug`
ORDER BY `d`.`drug_name`
INFO  - 2014-02-26 16:48:49 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drugcategory_id` = `dc`.`id_drugcategory`
JOIN `drug` d ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2014-02-26 16:48:49 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2014-02-26 16:48:49 --> inside retrieving pharmacy for drug id is 1
INFO  - 2014-02-26 16:48:49 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2014-02-26 16:48:49 --> Related drugs ::::::::::===>SELECT d.drug_name
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcg`.`drugcategory_id` = `dcc`.`id_drugcategory`
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
WHERE `dcc`.`brandname_id` =  '0'
AND `dc`.`id_drugclass` =  '0'
INFO  - 2014-02-26 16:48:49 --> inside retrieve most searched drugs
INFO  - 2014-02-26 16:48:49 --> SELECT `d`.`id_drug` as id, `d`.`drug_name` as name, count(ds.id_drugsearch) as search_count
FROM (`drug_search` ds)
JOIN `drug` d ON `d`.`id_drug` = `ds`.`drug_id`
GROUP BY `d`.`id_drug`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:48:49 --> inside retrieve most searched pharmacy
INFO  - 2014-02-26 16:48:49 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:48:49 --> inside retrieve most searched article
INFO  - 2014-02-26 16:48:49 --> SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description, count(ats.article_id) as search_count
FROM (`article_search` ats)
JOIN `article` a ON `a`.`id_article` = `ats`.`article_id`
JOIN `news` n ON `a`.`newsid_news` = `n`.`id_news`
GROUP BY `a`.`id_article`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:48:49 --> The session id is ========>423737cba61dc30224822ab54438d626 and the member id is =======>
INFO  - 2014-02-26 16:48:49 -->  column name inside view is 0 column Data is 618
INFO  - 2014-02-26 16:48:49 -->  column name inside view is 1 column Data is 488
INFO  - 2014-02-26 16:48:49 -->  column name inside view is 2 column Data is 487
INFO  - 2014-02-26 16:48:49 -->  column name inside view is 3 column Data is 1
INFO  - 2014-02-26 16:48:49 -->  column name inside view is 4 column Data is 641
INFO  - 2014-02-26 16:48:49 -->  column name inside view is 5 column Data is 649
INFO  - 2014-02-26 16:48:49 -->  column name inside view is 6 column Data is 491
INFO  - 2014-02-26 16:48:49 -->  column name inside view is 7 column Data is 502
INFO  - 2014-02-26 16:48:49 -->  column name inside view is 8 column Data is 498
INFO  - 2014-02-26 16:48:49 -->  column name inside view is 9 column Data is 619
INFO  - 2014-02-26 16:48:49 -->  column name inside view is 0 column Data is 2
INFO  - 2014-02-26 16:48:49 -->  column name inside view is 1 column Data is 3
INFO  - 2014-02-26 16:48:49 -->  column name inside view is 2 column Data is 18
INFO  - 2014-02-26 16:48:49 -->  column name inside view is 3 column Data is 1
INFO  - 2014-02-26 16:48:49 -->  column name inside view is 4 column Data is 15
INFO  - 2014-02-26 16:48:49 -->  column name inside view is 5 column Data is 14
INFO  - 2014-02-26 16:48:49 -->  column name inside view is 6 column Data is 6
INFO  - 2014-02-26 16:48:49 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2014-02-26 16:48:49 --> File loaded: ../pharmaray-application/views/onlinepharmacy.php
DEBUG - 2014-02-26 16:48:49 --> Final output sent to browser
DEBUG - 2014-02-26 16:48:49 --> Total execution time: 0.0830
DEBUG - 2014-02-26 16:48:50 --> Config Class Initialized
DEBUG - 2014-02-26 16:48:50 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:48:50 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:48:50 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:48:50 --> URI Class Initialized
DEBUG - 2014-02-26 16:48:50 --> Router Class Initialized
ERROR - 2014-02-26 16:48:50 --> 404 Page Not Found --> css
DEBUG - 2014-02-26 16:48:54 --> Config Class Initialized
DEBUG - 2014-02-26 16:48:54 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:48:54 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:48:54 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:48:54 --> URI Class Initialized
DEBUG - 2014-02-26 16:48:54 --> Router Class Initialized
DEBUG - 2014-02-26 16:48:54 --> Output Class Initialized
DEBUG - 2014-02-26 16:48:54 --> Security Class Initialized
DEBUG - 2014-02-26 16:48:54 --> Input Class Initialized
DEBUG - 2014-02-26 16:48:54 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:48:54 --> Language Class Initialized
DEBUG - 2014-02-26 16:48:54 --> Loader Class Initialized
DEBUG - 2014-02-26 16:48:54 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:48:54 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:48:54 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:48:54 --> Database Driver Class Initialized
DEBUG - 2014-02-26 16:48:54 --> Session Class Initialized
DEBUG - 2014-02-26 16:48:54 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:48:54 --> Session routines successfully run
DEBUG - 2014-02-26 16:48:54 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:48:54 --> Controller Class Initialized
DEBUG - 2014-02-26 16:48:54 --> Model Class Initialized
DEBUG - 2014-02-26 16:48:54 --> Model Class Initialized
DEBUG - 2014-02-26 16:48:54 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:48:54 --> after session initialization................
INFO  - 2014-02-26 16:48:54 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  ''
INFO  - 2014-02-26 16:48:54 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-02-26 16:48:54 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2014-02-26 16:48:54 --> inside retrieving vacancy for member
INFO  - 2014-02-26 16:48:54 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2014-02-26 16:48:54 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-02-26 16:48:54 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2014-02-26 16:48:54 --> Drugs ::::::::::===>SELECT d.id_drug, d.drug_name, d.drug_description, group_concat(bn.name, ':', bn.id_brandname) as drug_brandname, dcc.id_drugcategory as category_id
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dcc`.`brandname_id`
WHERE `d`.`id_drug` =  '1'
GROUP BY `id_drug`
ORDER BY `d`.`drug_name`
INFO  - 2014-02-26 16:48:54 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drugcategory_id` = `dc`.`id_drugcategory`
JOIN `drug` d ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2014-02-26 16:48:54 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2014-02-26 16:48:54 --> inside retrieving pharmacy for drug id is 1
INFO  - 2014-02-26 16:48:54 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2014-02-26 16:48:54 --> Related drugs ::::::::::===>SELECT d.drug_name
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcg`.`drugcategory_id` = `dcc`.`id_drugcategory`
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
WHERE `dcc`.`brandname_id` =  '0'
AND `dc`.`id_drugclass` =  '0'
INFO  - 2014-02-26 16:48:54 --> inside retrieve most searched drugs
INFO  - 2014-02-26 16:48:54 --> SELECT `d`.`id_drug` as id, `d`.`drug_name` as name, count(ds.id_drugsearch) as search_count
FROM (`drug_search` ds)
JOIN `drug` d ON `d`.`id_drug` = `ds`.`drug_id`
GROUP BY `d`.`id_drug`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:48:54 --> inside retrieve most searched pharmacy
INFO  - 2014-02-26 16:48:54 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, count(ps.id_pharmacysearch) as search_count
FROM (`pharmacist_search` ps)
JOIN `pharmacy` p ON `p`.`id_pharmacy` = `ps`.`pharmacy_id`
GROUP BY `p`.`id_pharmacy`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:48:54 --> inside retrieve most searched article
INFO  - 2014-02-26 16:48:54 --> SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description, count(ats.article_id) as search_count
FROM (`article_search` ats)
JOIN `article` a ON `a`.`id_article` = `ats`.`article_id`
JOIN `news` n ON `a`.`newsid_news` = `n`.`id_news`
GROUP BY `a`.`id_article`
ORDER BY `search_count` desc
LIMIT 10
INFO  - 2014-02-26 16:48:54 --> The session id is ========>423737cba61dc30224822ab54438d626 and the member id is =======>
INFO  - 2014-02-26 16:48:54 -->  column name inside view is 0 column Data is 618
INFO  - 2014-02-26 16:48:54 -->  column name inside view is 1 column Data is 488
INFO  - 2014-02-26 16:48:54 -->  column name inside view is 2 column Data is 487
INFO  - 2014-02-26 16:48:54 -->  column name inside view is 3 column Data is 1
INFO  - 2014-02-26 16:48:54 -->  column name inside view is 4 column Data is 641
INFO  - 2014-02-26 16:48:54 -->  column name inside view is 5 column Data is 649
INFO  - 2014-02-26 16:48:54 -->  column name inside view is 6 column Data is 491
INFO  - 2014-02-26 16:48:54 -->  column name inside view is 7 column Data is 502
INFO  - 2014-02-26 16:48:54 -->  column name inside view is 8 column Data is 498
INFO  - 2014-02-26 16:48:54 -->  column name inside view is 9 column Data is 619
INFO  - 2014-02-26 16:48:54 -->  column name inside view is 0 column Data is 2
INFO  - 2014-02-26 16:48:54 -->  column name inside view is 1 column Data is 3
INFO  - 2014-02-26 16:48:54 -->  column name inside view is 2 column Data is 18
INFO  - 2014-02-26 16:48:54 -->  column name inside view is 3 column Data is 1
INFO  - 2014-02-26 16:48:54 -->  column name inside view is 4 column Data is 15
INFO  - 2014-02-26 16:48:54 -->  column name inside view is 5 column Data is 14
INFO  - 2014-02-26 16:48:54 -->  column name inside view is 6 column Data is 6
INFO  - 2014-02-26 16:48:54 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2014-02-26 16:48:54 --> File loaded: ../pharmaray-application/views/onlinepharmacy.php
DEBUG - 2014-02-26 16:48:54 --> Final output sent to browser
DEBUG - 2014-02-26 16:48:54 --> Total execution time: 0.0950
DEBUG - 2014-02-26 16:48:54 --> Config Class Initialized
DEBUG - 2014-02-26 16:48:54 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:48:54 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:48:54 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:48:54 --> URI Class Initialized
DEBUG - 2014-02-26 16:48:54 --> Router Class Initialized
ERROR - 2014-02-26 16:48:54 --> 404 Page Not Found --> css
DEBUG - 2014-02-26 16:49:14 --> Config Class Initialized
DEBUG - 2014-02-26 16:49:14 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:49:14 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:49:14 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:49:14 --> URI Class Initialized
DEBUG - 2014-02-26 16:49:14 --> Router Class Initialized
DEBUG - 2014-02-26 16:49:14 --> Output Class Initialized
DEBUG - 2014-02-26 16:49:14 --> Security Class Initialized
DEBUG - 2014-02-26 16:49:14 --> Input Class Initialized
DEBUG - 2014-02-26 16:49:14 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:49:14 --> Language Class Initialized
DEBUG - 2014-02-26 16:49:14 --> Loader Class Initialized
DEBUG - 2014-02-26 16:49:14 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:49:14 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:49:14 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:49:14 --> Database Driver Class Initialized
DEBUG - 2014-02-26 16:49:14 --> Session Class Initialized
DEBUG - 2014-02-26 16:49:14 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:49:14 --> Session routines successfully run
DEBUG - 2014-02-26 16:49:14 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:49:14 --> Controller Class Initialized
DEBUG - 2014-02-26 16:49:14 --> Model Class Initialized
DEBUG - 2014-02-26 16:49:14 --> Model Class Initialized
DEBUG - 2014-02-26 16:49:14 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:49:14 --> after session initialization................
INFO  - 2014-02-26 16:49:14 --> inside the auto suggest page.................
INFO  - 2014-02-26 16:49:14 --> after the list array.................
INFO  - 2014-02-26 16:49:14 --> Ajax retrieval ::::::::::===>SELECT d.id_drug, d.drug_name, group_concat(bn.name, ':', bn.id_brandname) as drug_brandname
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dc`.`brandname_id`
WHERE `d`.`drug_name` like '%a%' and d.id_drug <> 1
GROUP BY `id_drug`, `id_drug`
ORDER BY `d`.`drug_name`
LIMIT 15
INFO  - 2014-02-26 16:49:14 --> after retrieving the data from db.................
INFO  - 2014-02-26 16:49:14 --> looping.................
INFO  - 2014-02-26 16:49:14 --> looping.................
INFO  - 2014-02-26 16:49:14 --> looping.................
INFO  - 2014-02-26 16:49:14 --> looping.................
INFO  - 2014-02-26 16:49:14 --> looping.................
INFO  - 2014-02-26 16:49:14 --> looping.................
INFO  - 2014-02-26 16:49:14 --> looping.................
INFO  - 2014-02-26 16:49:14 --> looping.................
INFO  - 2014-02-26 16:49:14 --> looping.................
INFO  - 2014-02-26 16:49:14 --> looping.................
DEBUG - 2014-02-26 16:49:14 --> Final output sent to browser
DEBUG - 2014-02-26 16:49:14 --> Total execution time: 0.0480
DEBUG - 2014-02-26 16:49:14 --> Config Class Initialized
DEBUG - 2014-02-26 16:49:14 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:49:14 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:49:14 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:49:14 --> URI Class Initialized
DEBUG - 2014-02-26 16:49:14 --> Router Class Initialized
DEBUG - 2014-02-26 16:49:14 --> Output Class Initialized
DEBUG - 2014-02-26 16:49:14 --> Security Class Initialized
DEBUG - 2014-02-26 16:49:14 --> Input Class Initialized
DEBUG - 2014-02-26 16:49:14 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:49:14 --> Language Class Initialized
DEBUG - 2014-02-26 16:49:14 --> Loader Class Initialized
DEBUG - 2014-02-26 16:49:14 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:49:14 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:49:14 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:49:14 --> Database Driver Class Initialized
DEBUG - 2014-02-26 16:49:14 --> Session Class Initialized
DEBUG - 2014-02-26 16:49:14 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:49:14 --> Session routines successfully run
DEBUG - 2014-02-26 16:49:14 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:49:14 --> Controller Class Initialized
DEBUG - 2014-02-26 16:49:14 --> Model Class Initialized
DEBUG - 2014-02-26 16:49:14 --> Model Class Initialized
DEBUG - 2014-02-26 16:49:14 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:49:14 --> after session initialization................
INFO  - 2014-02-26 16:49:14 --> inside the auto suggest page.................
INFO  - 2014-02-26 16:49:14 --> after the list array.................
INFO  - 2014-02-26 16:49:14 --> Ajax retrieval ::::::::::===>SELECT d.id_drug, d.drug_name, group_concat(bn.name, ':', bn.id_brandname) as drug_brandname
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dc`.`brandname_id`
WHERE `d`.`drug_name` like '%ad%' and d.id_drug <> 1
GROUP BY `id_drug`, `id_drug`
ORDER BY `d`.`drug_name`
LIMIT 15
INFO  - 2014-02-26 16:49:14 --> after retrieving the data from db.................
INFO  - 2014-02-26 16:49:14 --> looping.................
DEBUG - 2014-02-26 16:49:14 --> Final output sent to browser
DEBUG - 2014-02-26 16:49:14 --> Total execution time: 0.0460
DEBUG - 2014-02-26 16:49:15 --> Config Class Initialized
DEBUG - 2014-02-26 16:49:15 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:49:15 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:49:15 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:49:15 --> URI Class Initialized
DEBUG - 2014-02-26 16:49:15 --> Router Class Initialized
DEBUG - 2014-02-26 16:49:15 --> Output Class Initialized
DEBUG - 2014-02-26 16:49:15 --> Security Class Initialized
DEBUG - 2014-02-26 16:49:15 --> Input Class Initialized
DEBUG - 2014-02-26 16:49:15 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:49:15 --> Language Class Initialized
DEBUG - 2014-02-26 16:49:15 --> Loader Class Initialized
DEBUG - 2014-02-26 16:49:15 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:49:15 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:49:15 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:49:15 --> Database Driver Class Initialized
DEBUG - 2014-02-26 16:49:15 --> Session Class Initialized
DEBUG - 2014-02-26 16:49:15 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:49:15 --> Session routines successfully run
DEBUG - 2014-02-26 16:49:15 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:49:15 --> Controller Class Initialized
DEBUG - 2014-02-26 16:49:15 --> Model Class Initialized
DEBUG - 2014-02-26 16:49:15 --> Model Class Initialized
DEBUG - 2014-02-26 16:49:15 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:49:15 --> after session initialization................
INFO  - 2014-02-26 16:49:15 --> inside the auto suggest page.................
INFO  - 2014-02-26 16:49:15 --> after the list array.................
INFO  - 2014-02-26 16:49:15 --> Ajax retrieval ::::::::::===>SELECT d.id_drug, d.drug_name, group_concat(bn.name, ':', bn.id_brandname) as drug_brandname
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dc`.`brandname_id`
WHERE `d`.`drug_name` like '%adre%' and d.id_drug <> 1
GROUP BY `id_drug`, `id_drug`
ORDER BY `d`.`drug_name`
LIMIT 15
INFO  - 2014-02-26 16:49:15 --> after retrieving the data from db.................
INFO  - 2014-02-26 16:49:15 --> looping.................
DEBUG - 2014-02-26 16:49:15 --> Final output sent to browser
DEBUG - 2014-02-26 16:49:15 --> Total execution time: 0.0450
DEBUG - 2014-02-26 16:49:15 --> Config Class Initialized
DEBUG - 2014-02-26 16:49:15 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:49:15 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:49:15 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:49:15 --> URI Class Initialized
DEBUG - 2014-02-26 16:49:15 --> Router Class Initialized
DEBUG - 2014-02-26 16:49:15 --> Output Class Initialized
DEBUG - 2014-02-26 16:49:15 --> Security Class Initialized
DEBUG - 2014-02-26 16:49:15 --> Input Class Initialized
DEBUG - 2014-02-26 16:49:15 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:49:15 --> Language Class Initialized
DEBUG - 2014-02-26 16:49:15 --> Loader Class Initialized
DEBUG - 2014-02-26 16:49:15 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:49:15 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:49:15 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:49:15 --> Database Driver Class Initialized
DEBUG - 2014-02-26 16:49:15 --> Session Class Initialized
DEBUG - 2014-02-26 16:49:15 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:49:15 --> Session routines successfully run
DEBUG - 2014-02-26 16:49:15 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:49:15 --> Controller Class Initialized
DEBUG - 2014-02-26 16:49:15 --> Model Class Initialized
DEBUG - 2014-02-26 16:49:15 --> Model Class Initialized
DEBUG - 2014-02-26 16:49:15 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:49:15 --> after session initialization................
INFO  - 2014-02-26 16:49:15 --> inside the auto suggest page.................
INFO  - 2014-02-26 16:49:15 --> after the list array.................
INFO  - 2014-02-26 16:49:15 --> Ajax retrieval ::::::::::===>SELECT d.id_drug, d.drug_name, group_concat(bn.name, ':', bn.id_brandname) as drug_brandname
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dc`.`brandname_id`
WHERE `d`.`drug_name` like '%adre%' and d.id_drug <> 1
GROUP BY `id_drug`, `id_drug`
ORDER BY `d`.`drug_name`
LIMIT 15
INFO  - 2014-02-26 16:49:15 --> after retrieving the data from db.................
INFO  - 2014-02-26 16:49:15 --> looping.................
DEBUG - 2014-02-26 16:49:15 --> Final output sent to browser
DEBUG - 2014-02-26 16:49:15 --> Total execution time: 0.0460
DEBUG - 2014-02-26 16:49:16 --> Config Class Initialized
DEBUG - 2014-02-26 16:49:16 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:49:16 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:49:16 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:49:16 --> URI Class Initialized
DEBUG - 2014-02-26 16:49:16 --> Router Class Initialized
DEBUG - 2014-02-26 16:49:16 --> Output Class Initialized
DEBUG - 2014-02-26 16:49:16 --> Security Class Initialized
DEBUG - 2014-02-26 16:49:16 --> Input Class Initialized
DEBUG - 2014-02-26 16:49:16 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:49:16 --> Language Class Initialized
DEBUG - 2014-02-26 16:49:16 --> Loader Class Initialized
DEBUG - 2014-02-26 16:49:16 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:49:16 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:49:16 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:49:16 --> Database Driver Class Initialized
DEBUG - 2014-02-26 16:49:16 --> Session Class Initialized
DEBUG - 2014-02-26 16:49:16 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:49:16 --> Session routines successfully run
DEBUG - 2014-02-26 16:49:16 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:49:16 --> Controller Class Initialized
DEBUG - 2014-02-26 16:49:16 --> Model Class Initialized
DEBUG - 2014-02-26 16:49:16 --> Model Class Initialized
DEBUG - 2014-02-26 16:49:16 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:49:16 --> after session initialization................
INFO  - 2014-02-26 16:49:16 --> Drugs ::::::::::===>SELECT d.id_drug, d.drug_name, d.drug_description, group_concat(bn.name, ':', bn.id_brandname) as drug_brandname, dcc.id_drugcategory as category_id
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dcc`.`brandname_id`
WHERE `d`.`id_drug` =  '491'
GROUP BY `id_drug`
ORDER BY `d`.`drug_name`
INFO  - 2014-02-26 16:49:16 --> inside retrieving comments member id and drug id is 491
INFO  - 2014-02-26 16:49:16 --> 10==============================0
INFO  - 2014-02-26 16:49:16 --> SELECT dc.id_drugcomment as id, dc.comment, dc.time_created, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 491
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2014-02-26 16:49:16 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 491
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2014-02-26 16:49:16 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drugcategory_drug` dcg ON `dcg`.`drugcategory_id` = `dc`.`id_drugcategory`
JOIN `drug` d ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '491'
ORDER BY `a`.`time_created`
INFO  - 2014-02-26 16:49:16 --> inside retrieving pharmacy for drug id is 491
INFO  - 2014-02-26 16:49:16 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 491
ORDER BY `p`.`id_pharmacy`
LIMIT 15
INFO  - 2014-02-26 16:49:16 --> inside retrieving comments member type id and drug id is 491
INFO  - 2014-02-26 16:49:16 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 491
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
DEBUG - 2014-02-26 16:49:16 --> Final output sent to browser
DEBUG - 2014-02-26 16:49:16 --> Total execution time: 0.0670
DEBUG - 2014-02-26 16:49:16 --> Config Class Initialized
DEBUG - 2014-02-26 16:49:16 --> Hooks Class Initialized
DEBUG - 2014-02-26 16:49:16 --> Utf8 Class Initialized
DEBUG - 2014-02-26 16:49:16 --> UTF-8 Support Enabled
DEBUG - 2014-02-26 16:49:16 --> URI Class Initialized
DEBUG - 2014-02-26 16:49:16 --> Router Class Initialized
DEBUG - 2014-02-26 16:49:16 --> Output Class Initialized
DEBUG - 2014-02-26 16:49:16 --> Security Class Initialized
DEBUG - 2014-02-26 16:49:16 --> Input Class Initialized
DEBUG - 2014-02-26 16:49:16 --> Global POST and COOKIE data sanitized
DEBUG - 2014-02-26 16:49:16 --> Language Class Initialized
DEBUG - 2014-02-26 16:49:16 --> Loader Class Initialized
DEBUG - 2014-02-26 16:49:16 --> Helper loaded: form_helper
DEBUG - 2014-02-26 16:49:16 --> Helper loaded: url_helper
DEBUG - 2014-02-26 16:49:16 --> Helper loaded: html_helper
DEBUG - 2014-02-26 16:49:16 --> Database Driver Class Initialized
DEBUG - 2014-02-26 16:49:16 --> Session Class Initialized
DEBUG - 2014-02-26 16:49:16 --> Helper loaded: string_helper
DEBUG - 2014-02-26 16:49:16 --> Session routines successfully run
DEBUG - 2014-02-26 16:49:16 --> Form Validation Class Initialized
DEBUG - 2014-02-26 16:49:16 --> Controller Class Initialized
DEBUG - 2014-02-26 16:49:16 --> Model Class Initialized
DEBUG - 2014-02-26 16:49:16 --> Model Class Initialized
DEBUG - 2014-02-26 16:49:16 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-02-26 16:49:16 --> after session initialization................
INFO  - 2014-02-26 16:49:17 --> before inserting into article search table.................
INFO  - 2014-02-26 16:49:17 --> after inserting into article search table.................86
INFO  - 2014-02-26 16:49:17 --> INSERT INTO `drug_search` (`drug_id`, `timecreated`, `ipaddress`, `location`, `longitude`, `latitude`, `user_id`) VALUES ('491', '2014-02-26 16:49:17', '::1', 'Lagos', '3.39583', '6.45306', '')
DEBUG - 2014-02-26 16:49:17 --> Final output sent to browser
DEBUG - 2014-02-26 16:49:17 --> Total execution time: 0.9871
