<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2013-09-29 01:46:54 --> Config Class Initialized
DEBUG - 2013-09-29 01:46:54 --> Hooks Class Initialized
DEBUG - 2013-09-29 01:46:54 --> Utf8 Class Initialized
DEBUG - 2013-09-29 01:46:54 --> UTF-8 Support Enabled
DEBUG - 2013-09-29 01:46:54 --> URI Class Initialized
DEBUG - 2013-09-29 01:46:54 --> Router Class Initialized
DEBUG - 2013-09-29 01:46:54 --> Output Class Initialized
DEBUG - 2013-09-29 01:46:54 --> Security Class Initialized
DEBUG - 2013-09-29 01:46:54 --> Input Class Initialized
DEBUG - 2013-09-29 01:46:54 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-29 01:46:54 --> Language Class Initialized
DEBUG - 2013-09-29 01:46:54 --> Loader Class Initialized
DEBUG - 2013-09-29 01:46:54 --> Helper loaded: form_helper
DEBUG - 2013-09-29 01:46:54 --> Helper loaded: url_helper
DEBUG - 2013-09-29 01:46:54 --> Helper loaded: html_helper
DEBUG - 2013-09-29 01:46:54 --> Database Driver Class Initialized
ERROR - 2013-09-29 01:46:54 --> Severity: Notice  --> mysql_pconnect(): send of 5 bytes failed with errno=10053 An established connection was aborted by the software in your host machine.
 C:\xampp\htdocs\Pharmarays\pharmaray-system\database\drivers\mysql\mysql_driver.php 91
DEBUG - 2013-09-29 01:46:55 --> Session Class Initialized
DEBUG - 2013-09-29 01:46:55 --> Helper loaded: string_helper
DEBUG - 2013-09-29 01:46:55 --> A session cookie was not found.
DEBUG - 2013-09-29 01:46:55 --> Session routines successfully run
DEBUG - 2013-09-29 01:46:55 --> Form Validation Class Initialized
DEBUG - 2013-09-29 01:46:55 --> Controller Class Initialized
DEBUG - 2013-09-29 01:46:55 --> Model Class Initialized
DEBUG - 2013-09-29 01:46:55 --> Model Class Initialized
DEBUG - 2013-09-29 01:46:55 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-29 01:46:55 --> after session initialization................
INFO  - 2013-09-29 01:46:55 --> inside the auto suggest page.................
INFO  - 2013-09-29 01:46:55 --> after the list array.................
INFO  - 2013-09-29 01:46:55 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%b%' 
ORDER BY `d`.`drug_name`
LIMIT 15
INFO  - 2013-09-29 01:46:55 --> after retrieving the data from db.................
INFO  - 2013-09-29 01:46:55 --> looping.................
INFO  - 2013-09-29 01:46:55 --> looping.................
INFO  - 2013-09-29 01:46:55 --> looping.................
INFO  - 2013-09-29 01:46:55 --> looping.................
DEBUG - 2013-09-29 01:46:55 --> Final output sent to browser
DEBUG - 2013-09-29 01:46:55 --> Total execution time: 1.3671
DEBUG - 2013-09-29 01:46:58 --> Config Class Initialized
DEBUG - 2013-09-29 01:46:58 --> Hooks Class Initialized
DEBUG - 2013-09-29 01:46:58 --> Utf8 Class Initialized
DEBUG - 2013-09-29 01:46:58 --> UTF-8 Support Enabled
DEBUG - 2013-09-29 01:46:58 --> URI Class Initialized
DEBUG - 2013-09-29 01:46:58 --> Router Class Initialized
DEBUG - 2013-09-29 01:46:58 --> Output Class Initialized
DEBUG - 2013-09-29 01:46:58 --> Security Class Initialized
DEBUG - 2013-09-29 01:46:58 --> Input Class Initialized
DEBUG - 2013-09-29 01:46:58 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-29 01:46:58 --> Language Class Initialized
DEBUG - 2013-09-29 01:46:58 --> Loader Class Initialized
DEBUG - 2013-09-29 01:46:58 --> Helper loaded: form_helper
DEBUG - 2013-09-29 01:46:58 --> Helper loaded: url_helper
DEBUG - 2013-09-29 01:46:58 --> Helper loaded: html_helper
DEBUG - 2013-09-29 01:46:58 --> Database Driver Class Initialized
DEBUG - 2013-09-29 01:46:58 --> Session Class Initialized
DEBUG - 2013-09-29 01:46:58 --> Helper loaded: string_helper
DEBUG - 2013-09-29 01:46:58 --> Session routines successfully run
DEBUG - 2013-09-29 01:46:58 --> Form Validation Class Initialized
DEBUG - 2013-09-29 01:46:58 --> Controller Class Initialized
DEBUG - 2013-09-29 01:46:58 --> Model Class Initialized
DEBUG - 2013-09-29 01:46:58 --> Model Class Initialized
DEBUG - 2013-09-29 01:46:58 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-29 01:46:58 --> after session initialization................
INFO  - 2013-09-29 01:46:58 --> inside the auto suggest page.................
INFO  - 2013-09-29 01:46:58 --> after the list array.................
INFO  - 2013-09-29 01:46:58 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%a%' 
ORDER BY `d`.`drug_name`
LIMIT 15
INFO  - 2013-09-29 01:46:58 --> after retrieving the data from db.................
INFO  - 2013-09-29 01:46:58 --> looping.................
INFO  - 2013-09-29 01:46:58 --> looping.................
INFO  - 2013-09-29 01:46:58 --> looping.................
INFO  - 2013-09-29 01:46:58 --> looping.................
INFO  - 2013-09-29 01:46:58 --> looping.................
INFO  - 2013-09-29 01:46:58 --> looping.................
INFO  - 2013-09-29 01:46:58 --> looping.................
INFO  - 2013-09-29 01:46:58 --> looping.................
INFO  - 2013-09-29 01:46:58 --> looping.................
INFO  - 2013-09-29 01:46:58 --> looping.................
INFO  - 2013-09-29 01:46:58 --> looping.................
INFO  - 2013-09-29 01:46:58 --> looping.................
INFO  - 2013-09-29 01:46:58 --> looping.................
INFO  - 2013-09-29 01:46:58 --> looping.................
INFO  - 2013-09-29 01:46:58 --> looping.................
DEBUG - 2013-09-29 01:46:58 --> Final output sent to browser
DEBUG - 2013-09-29 01:46:58 --> Total execution time: 0.0590
DEBUG - 2013-09-29 01:46:59 --> Config Class Initialized
DEBUG - 2013-09-29 01:46:59 --> Hooks Class Initialized
DEBUG - 2013-09-29 01:46:59 --> Utf8 Class Initialized
DEBUG - 2013-09-29 01:46:59 --> UTF-8 Support Enabled
DEBUG - 2013-09-29 01:46:59 --> URI Class Initialized
DEBUG - 2013-09-29 01:46:59 --> Router Class Initialized
DEBUG - 2013-09-29 01:46:59 --> Output Class Initialized
DEBUG - 2013-09-29 01:46:59 --> Security Class Initialized
DEBUG - 2013-09-29 01:46:59 --> Input Class Initialized
DEBUG - 2013-09-29 01:46:59 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-29 01:46:59 --> Language Class Initialized
DEBUG - 2013-09-29 01:46:59 --> Loader Class Initialized
DEBUG - 2013-09-29 01:46:59 --> Helper loaded: form_helper
DEBUG - 2013-09-29 01:46:59 --> Helper loaded: url_helper
DEBUG - 2013-09-29 01:46:59 --> Helper loaded: html_helper
DEBUG - 2013-09-29 01:46:59 --> Database Driver Class Initialized
DEBUG - 2013-09-29 01:46:59 --> Session Class Initialized
DEBUG - 2013-09-29 01:46:59 --> Helper loaded: string_helper
DEBUG - 2013-09-29 01:46:59 --> Session routines successfully run
DEBUG - 2013-09-29 01:46:59 --> Form Validation Class Initialized
DEBUG - 2013-09-29 01:46:59 --> Controller Class Initialized
DEBUG - 2013-09-29 01:46:59 --> Model Class Initialized
DEBUG - 2013-09-29 01:46:59 --> Model Class Initialized
DEBUG - 2013-09-29 01:46:59 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-29 01:46:59 --> after session initialization................
INFO  - 2013-09-29 01:47:00 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '16'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-29 01:47:00 --> inside retrieving comments member id and drug id is 16
INFO  - 2013-09-29 01:47:00 --> 10==============================0
INFO  - 2013-09-29 01:47:00 --> SELECT dc.id_drugcomment as id, dc.comment, dc.time_created, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 16
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-09-29 01:47:00 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 16
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-09-29 01:47:00 --> News by drug_id ::::::::::===>SELECT `n`.`id_news` as id, `n`.`title` as news_title, `n`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '16'
ORDER BY `n`.`time_created`
INFO  - 2013-09-29 01:47:00 --> inside retrieving pharmacy for drug id is 16
INFO  - 2013-09-29 01:47:00 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 16
ORDER BY `p`.`id_pharmacy`
LIMIT 15
INFO  - 2013-09-29 01:47:00 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `n`.`title` as newsletter_title, `n`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '16'
ORDER BY `n`.`time_created`
INFO  - 2013-09-29 01:47:00 --> inside retrieving comments member type id and drug id is 16
INFO  - 2013-09-29 01:47:00 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 16
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
DEBUG - 2013-09-29 01:47:00 --> Final output sent to browser
DEBUG - 2013-09-29 01:47:00 --> Total execution time: 0.3100
