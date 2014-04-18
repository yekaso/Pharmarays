<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2013-11-04 03:11:47 --> Config Class Initialized
DEBUG - 2013-11-04 03:11:47 --> Hooks Class Initialized
DEBUG - 2013-11-04 03:11:47 --> Utf8 Class Initialized
DEBUG - 2013-11-04 03:11:47 --> UTF-8 Support Enabled
DEBUG - 2013-11-04 03:11:47 --> URI Class Initialized
DEBUG - 2013-11-04 03:11:47 --> Router Class Initialized
DEBUG - 2013-11-04 03:11:47 --> Output Class Initialized
DEBUG - 2013-11-04 03:11:47 --> Security Class Initialized
DEBUG - 2013-11-04 03:11:47 --> Input Class Initialized
DEBUG - 2013-11-04 03:11:47 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-04 03:11:47 --> Language Class Initialized
DEBUG - 2013-11-04 03:11:47 --> Loader Class Initialized
DEBUG - 2013-11-04 03:11:47 --> Helper loaded: form_helper
DEBUG - 2013-11-04 03:11:47 --> Helper loaded: url_helper
DEBUG - 2013-11-04 03:11:47 --> Helper loaded: html_helper
DEBUG - 2013-11-04 03:11:47 --> Database Driver Class Initialized
ERROR - 2013-11-04 03:11:47 --> Severity: Notice  --> mysql_pconnect(): send of 5 bytes failed with errno=10053 An established connection was aborted by the software in your host machine.
 C:\xampp\htdocs\Pharmarays\pharmaray-system\database\drivers\mysql\mysql_driver.php 91
DEBUG - 2013-11-04 03:11:48 --> Session Class Initialized
DEBUG - 2013-11-04 03:11:48 --> Helper loaded: string_helper
DEBUG - 2013-11-04 03:11:48 --> A session cookie was not found.
DEBUG - 2013-11-04 03:11:48 --> Session routines successfully run
DEBUG - 2013-11-04 03:11:48 --> Form Validation Class Initialized
DEBUG - 2013-11-04 03:11:48 --> Controller Class Initialized
DEBUG - 2013-11-04 03:11:48 --> Model Class Initialized
DEBUG - 2013-11-04 03:11:48 --> Model Class Initialized
DEBUG - 2013-11-04 03:11:48 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-04 03:11:48 --> after session initialization................
INFO  - 2013-11-04 03:11:48 --> inside retrieve most commented forum topic 
INFO  - 2013-11-04 03:11:48 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
INFO  - 2013-11-04 03:11:48 --> inside retrieving first 20 topics 
INFO  - 2013-11-04 03:11:48 --> SELECT `t`.`id_topicforum`, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
LIMIT 20
INFO  - 2013-11-04 03:11:48 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-04 03:11:48 --> SELECT `ff`.`id_forum` as id, `ff`.`name`, count(f.id_forum) as sub_forum
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` is null 
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`
INFO  - 2013-11-04 03:11:48 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-04 03:11:48 --> inside retrieving comments topic id and drug id is 1
INFO  - 2013-11-04 03:11:48 --> SELECT `tc`.`id_topiccomment`, `tc`.`comment`, `tc`.`timecreated`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-04 03:11:48 --> inside retrieving comments topic id 1
INFO  - 2013-11-04 03:11:48 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
INFO  - 2013-11-04 03:11:48 --> after forums has been clicked.................
INFO  - 2013-11-04 03:11:48 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-11-04 03:11:48 --> File loaded: ../pharmaray-application/views/forum.php
DEBUG - 2013-11-04 03:11:48 --> Final output sent to browser
DEBUG - 2013-11-04 03:11:48 --> Total execution time: 1.2001
DEBUG - 2013-11-04 03:11:48 --> Config Class Initialized
DEBUG - 2013-11-04 03:11:48 --> Hooks Class Initialized
DEBUG - 2013-11-04 03:11:48 --> Utf8 Class Initialized
DEBUG - 2013-11-04 03:11:48 --> UTF-8 Support Enabled
DEBUG - 2013-11-04 03:11:48 --> URI Class Initialized
DEBUG - 2013-11-04 03:11:48 --> Router Class Initialized
DEBUG - 2013-11-04 03:11:48 --> Output Class Initialized
DEBUG - 2013-11-04 03:11:48 --> Security Class Initialized
DEBUG - 2013-11-04 03:11:48 --> Input Class Initialized
DEBUG - 2013-11-04 03:11:48 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-04 03:11:48 --> Language Class Initialized
DEBUG - 2013-11-04 03:11:48 --> Loader Class Initialized
DEBUG - 2013-11-04 03:11:48 --> Helper loaded: form_helper
DEBUG - 2013-11-04 03:11:48 --> Helper loaded: url_helper
DEBUG - 2013-11-04 03:11:48 --> Helper loaded: html_helper
DEBUG - 2013-11-04 03:11:48 --> Database Driver Class Initialized
DEBUG - 2013-11-04 03:11:48 --> Session Class Initialized
DEBUG - 2013-11-04 03:11:48 --> Helper loaded: string_helper
DEBUG - 2013-11-04 03:11:48 --> Session routines successfully run
DEBUG - 2013-11-04 03:11:48 --> Form Validation Class Initialized
DEBUG - 2013-11-04 03:11:48 --> Controller Class Initialized
DEBUG - 2013-11-04 03:11:48 --> Model Class Initialized
DEBUG - 2013-11-04 03:11:48 --> Model Class Initialized
DEBUG - 2013-11-04 03:11:48 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-04 03:11:48 --> after session initialization................
ERROR - 2013-11-04 03:11:48 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-04 03:11:48 --> Config Class Initialized
DEBUG - 2013-11-04 03:11:48 --> Hooks Class Initialized
DEBUG - 2013-11-04 03:11:48 --> Utf8 Class Initialized
DEBUG - 2013-11-04 03:11:48 --> UTF-8 Support Enabled
DEBUG - 2013-11-04 03:11:48 --> URI Class Initialized
DEBUG - 2013-11-04 03:11:48 --> Router Class Initialized
ERROR - 2013-11-04 03:11:48 --> 404 Page Not Found --> css
DEBUG - 2013-11-04 03:11:53 --> Config Class Initialized
DEBUG - 2013-11-04 03:11:53 --> Hooks Class Initialized
DEBUG - 2013-11-04 03:11:53 --> Utf8 Class Initialized
DEBUG - 2013-11-04 03:11:53 --> UTF-8 Support Enabled
DEBUG - 2013-11-04 03:11:53 --> URI Class Initialized
DEBUG - 2013-11-04 03:11:53 --> Router Class Initialized
DEBUG - 2013-11-04 03:11:53 --> Output Class Initialized
DEBUG - 2013-11-04 03:11:53 --> Security Class Initialized
DEBUG - 2013-11-04 03:11:53 --> Input Class Initialized
DEBUG - 2013-11-04 03:11:53 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-04 03:11:53 --> Language Class Initialized
DEBUG - 2013-11-04 03:11:53 --> Loader Class Initialized
DEBUG - 2013-11-04 03:11:53 --> Helper loaded: form_helper
DEBUG - 2013-11-04 03:11:53 --> Helper loaded: url_helper
DEBUG - 2013-11-04 03:11:53 --> Helper loaded: html_helper
DEBUG - 2013-11-04 03:11:53 --> Database Driver Class Initialized
DEBUG - 2013-11-04 03:11:53 --> Session Class Initialized
DEBUG - 2013-11-04 03:11:53 --> Helper loaded: string_helper
DEBUG - 2013-11-04 03:11:53 --> Session routines successfully run
DEBUG - 2013-11-04 03:11:53 --> Form Validation Class Initialized
DEBUG - 2013-11-04 03:11:53 --> Controller Class Initialized
DEBUG - 2013-11-04 03:11:53 --> Model Class Initialized
DEBUG - 2013-11-04 03:11:53 --> Model Class Initialized
DEBUG - 2013-11-04 03:11:53 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-04 03:11:53 --> after session initialization................
INFO  - 2013-11-04 03:11:53 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-04 03:11:53 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-11-04 03:11:53 --> inside retrieving vacancy for member
INFO  - 2013-11-04 03:11:53 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-11-04 03:11:53 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-04 03:11:53 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-11-04 03:11:53 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-11-04 03:11:53 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-04 03:11:53 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-04 03:11:53 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-11-04 03:11:53 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-11-04 03:11:53 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-11-04 03:11:53 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-11-04 03:11:53 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-11-04 03:11:53 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-11-04 03:11:53 --> Final output sent to browser
DEBUG - 2013-11-04 03:11:53 --> Total execution time: 0.1390
DEBUG - 2013-11-04 03:11:53 --> Config Class Initialized
DEBUG - 2013-11-04 03:11:53 --> Hooks Class Initialized
DEBUG - 2013-11-04 03:11:53 --> Utf8 Class Initialized
DEBUG - 2013-11-04 03:11:53 --> UTF-8 Support Enabled
DEBUG - 2013-11-04 03:11:53 --> URI Class Initialized
DEBUG - 2013-11-04 03:11:53 --> Router Class Initialized
DEBUG - 2013-11-04 03:11:53 --> Output Class Initialized
DEBUG - 2013-11-04 03:11:53 --> Security Class Initialized
DEBUG - 2013-11-04 03:11:53 --> Input Class Initialized
DEBUG - 2013-11-04 03:11:53 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-04 03:11:53 --> Language Class Initialized
DEBUG - 2013-11-04 03:11:53 --> Loader Class Initialized
DEBUG - 2013-11-04 03:11:53 --> Helper loaded: form_helper
DEBUG - 2013-11-04 03:11:53 --> Helper loaded: url_helper
DEBUG - 2013-11-04 03:11:53 --> Helper loaded: html_helper
DEBUG - 2013-11-04 03:11:53 --> Database Driver Class Initialized
ERROR - 2013-11-04 03:11:53 --> Severity: Notice  --> mysql_pconnect(): send of 5 bytes failed with errno=10053 An established connection was aborted by the software in your host machine.
 C:\xampp\htdocs\Pharmarays\pharmaray-system\database\drivers\mysql\mysql_driver.php 91
DEBUG - 2013-11-04 03:11:54 --> Session Class Initialized
DEBUG - 2013-11-04 03:11:54 --> Helper loaded: string_helper
DEBUG - 2013-11-04 03:11:54 --> Session routines successfully run
DEBUG - 2013-11-04 03:11:54 --> Form Validation Class Initialized
DEBUG - 2013-11-04 03:11:54 --> Controller Class Initialized
DEBUG - 2013-11-04 03:11:54 --> Model Class Initialized
DEBUG - 2013-11-04 03:11:54 --> Model Class Initialized
DEBUG - 2013-11-04 03:11:54 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-04 03:11:54 --> after session initialization................
ERROR - 2013-11-04 03:11:54 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-04 03:11:55 --> Config Class Initialized
DEBUG - 2013-11-04 03:11:55 --> Hooks Class Initialized
DEBUG - 2013-11-04 03:11:55 --> Utf8 Class Initialized
DEBUG - 2013-11-04 03:11:55 --> UTF-8 Support Enabled
DEBUG - 2013-11-04 03:11:55 --> URI Class Initialized
DEBUG - 2013-11-04 03:11:55 --> Router Class Initialized
ERROR - 2013-11-04 03:11:55 --> 404 Page Not Found --> css
DEBUG - 2013-11-04 03:11:56 --> Config Class Initialized
DEBUG - 2013-11-04 03:11:56 --> Hooks Class Initialized
DEBUG - 2013-11-04 03:11:56 --> Utf8 Class Initialized
DEBUG - 2013-11-04 03:11:56 --> UTF-8 Support Enabled
DEBUG - 2013-11-04 03:11:56 --> URI Class Initialized
DEBUG - 2013-11-04 03:11:56 --> Router Class Initialized
DEBUG - 2013-11-04 03:11:56 --> Output Class Initialized
DEBUG - 2013-11-04 03:11:56 --> Security Class Initialized
DEBUG - 2013-11-04 03:11:56 --> Input Class Initialized
DEBUG - 2013-11-04 03:11:56 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-04 03:11:56 --> Language Class Initialized
DEBUG - 2013-11-04 03:11:56 --> Loader Class Initialized
DEBUG - 2013-11-04 03:11:56 --> Helper loaded: form_helper
DEBUG - 2013-11-04 03:11:56 --> Helper loaded: url_helper
DEBUG - 2013-11-04 03:11:56 --> Helper loaded: html_helper
DEBUG - 2013-11-04 03:11:56 --> Database Driver Class Initialized
DEBUG - 2013-11-04 03:11:56 --> Session Class Initialized
DEBUG - 2013-11-04 03:11:56 --> Helper loaded: string_helper
DEBUG - 2013-11-04 03:11:56 --> Session routines successfully run
DEBUG - 2013-11-04 03:11:56 --> Form Validation Class Initialized
DEBUG - 2013-11-04 03:11:56 --> Controller Class Initialized
DEBUG - 2013-11-04 03:11:56 --> Model Class Initialized
DEBUG - 2013-11-04 03:11:56 --> Model Class Initialized
DEBUG - 2013-11-04 03:11:56 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-04 03:11:56 --> after session initialization................
INFO  - 2013-11-04 03:11:56 --> inside retrieve most commented forum topic 
INFO  - 2013-11-04 03:11:56 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
INFO  - 2013-11-04 03:11:56 --> inside retrieving first 20 topics 
INFO  - 2013-11-04 03:11:56 --> SELECT `t`.`id_topicforum`, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
LIMIT 20
INFO  - 2013-11-04 03:11:56 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-04 03:11:56 --> SELECT `ff`.`id_forum` as id, `ff`.`name`, count(f.id_forum) as sub_forum
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` is null 
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`
INFO  - 2013-11-04 03:11:56 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-04 03:11:56 --> inside retrieving comments topic id and drug id is 1
INFO  - 2013-11-04 03:11:56 --> SELECT `tc`.`id_topiccomment`, `tc`.`comment`, `tc`.`timecreated`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-04 03:11:56 --> inside retrieving comments topic id 1
INFO  - 2013-11-04 03:11:56 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
INFO  - 2013-11-04 03:11:56 --> after forums has been clicked.................
INFO  - 2013-11-04 03:11:56 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-11-04 03:11:56 --> File loaded: ../pharmaray-application/views/forum.php
DEBUG - 2013-11-04 03:11:56 --> Final output sent to browser
DEBUG - 2013-11-04 03:11:56 --> Total execution time: 0.1030
DEBUG - 2013-11-04 03:11:56 --> Config Class Initialized
DEBUG - 2013-11-04 03:11:56 --> Hooks Class Initialized
DEBUG - 2013-11-04 03:11:56 --> Utf8 Class Initialized
DEBUG - 2013-11-04 03:11:56 --> UTF-8 Support Enabled
DEBUG - 2013-11-04 03:11:56 --> URI Class Initialized
DEBUG - 2013-11-04 03:11:56 --> Router Class Initialized
DEBUG - 2013-11-04 03:11:56 --> Output Class Initialized
DEBUG - 2013-11-04 03:11:56 --> Security Class Initialized
DEBUG - 2013-11-04 03:11:56 --> Input Class Initialized
DEBUG - 2013-11-04 03:11:56 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-04 03:11:56 --> Language Class Initialized
DEBUG - 2013-11-04 03:11:56 --> Loader Class Initialized
DEBUG - 2013-11-04 03:11:56 --> Helper loaded: form_helper
DEBUG - 2013-11-04 03:11:56 --> Helper loaded: url_helper
DEBUG - 2013-11-04 03:11:56 --> Helper loaded: html_helper
DEBUG - 2013-11-04 03:11:56 --> Database Driver Class Initialized
ERROR - 2013-11-04 03:11:56 --> Severity: Notice  --> mysql_pconnect(): send of 5 bytes failed with errno=10053 An established connection was aborted by the software in your host machine.
 C:\xampp\htdocs\Pharmarays\pharmaray-system\database\drivers\mysql\mysql_driver.php 91
DEBUG - 2013-11-04 03:11:57 --> Session Class Initialized
DEBUG - 2013-11-04 03:11:57 --> Helper loaded: string_helper
DEBUG - 2013-11-04 03:11:57 --> Session routines successfully run
DEBUG - 2013-11-04 03:11:57 --> Form Validation Class Initialized
DEBUG - 2013-11-04 03:11:57 --> Controller Class Initialized
DEBUG - 2013-11-04 03:11:57 --> Model Class Initialized
DEBUG - 2013-11-04 03:11:57 --> Model Class Initialized
DEBUG - 2013-11-04 03:11:57 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-04 03:11:57 --> after session initialization................
ERROR - 2013-11-04 03:11:57 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-04 03:11:57 --> Config Class Initialized
DEBUG - 2013-11-04 03:11:57 --> Hooks Class Initialized
DEBUG - 2013-11-04 03:11:57 --> Utf8 Class Initialized
DEBUG - 2013-11-04 03:11:57 --> UTF-8 Support Enabled
DEBUG - 2013-11-04 03:11:57 --> URI Class Initialized
DEBUG - 2013-11-04 03:11:57 --> Router Class Initialized
ERROR - 2013-11-04 03:11:57 --> 404 Page Not Found --> css
DEBUG - 2013-11-04 03:12:02 --> Config Class Initialized
DEBUG - 2013-11-04 03:12:02 --> Hooks Class Initialized
DEBUG - 2013-11-04 03:12:02 --> Utf8 Class Initialized
DEBUG - 2013-11-04 03:12:02 --> UTF-8 Support Enabled
DEBUG - 2013-11-04 03:12:02 --> URI Class Initialized
DEBUG - 2013-11-04 03:12:02 --> Router Class Initialized
DEBUG - 2013-11-04 03:12:02 --> Output Class Initialized
DEBUG - 2013-11-04 03:12:02 --> Security Class Initialized
DEBUG - 2013-11-04 03:12:02 --> Input Class Initialized
DEBUG - 2013-11-04 03:12:02 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-04 03:12:02 --> Language Class Initialized
DEBUG - 2013-11-04 03:12:02 --> Loader Class Initialized
DEBUG - 2013-11-04 03:12:02 --> Helper loaded: form_helper
DEBUG - 2013-11-04 03:12:02 --> Helper loaded: url_helper
DEBUG - 2013-11-04 03:12:02 --> Helper loaded: html_helper
DEBUG - 2013-11-04 03:12:02 --> Database Driver Class Initialized
DEBUG - 2013-11-04 03:12:02 --> Session Class Initialized
DEBUG - 2013-11-04 03:12:02 --> Helper loaded: string_helper
DEBUG - 2013-11-04 03:12:02 --> Session routines successfully run
DEBUG - 2013-11-04 03:12:02 --> Form Validation Class Initialized
DEBUG - 2013-11-04 03:12:02 --> Controller Class Initialized
DEBUG - 2013-11-04 03:12:02 --> Model Class Initialized
DEBUG - 2013-11-04 03:12:02 --> Model Class Initialized
DEBUG - 2013-11-04 03:12:02 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-04 03:12:02 --> after session initialization................
INFO  - 2013-11-04 03:12:02 --> Topics ::::::::::===>SELECT `ft`.`id_topicforum`, `ft`.`name`, `ft`.`description`
FROM (`forum_topic` ft)
WHERE `ft`.`id_topicforum` =  '1'
ORDER BY `ft`.`name`
INFO  - 2013-11-04 03:12:02 --> inside retrieving comments member id and forum topic id is 1
INFO  - 2013-11-04 03:12:02 --> 10==============================0
INFO  - 2013-11-04 03:12:02 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-04 03:12:02 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-04 03:12:02 --> inside retrieving comments topic id is 1
INFO  - 2013-11-04 03:12:02 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
DEBUG - 2013-11-04 03:12:02 --> Final output sent to browser
DEBUG - 2013-11-04 03:12:02 --> Total execution time: 0.0790
DEBUG - 2013-11-04 03:12:06 --> Config Class Initialized
DEBUG - 2013-11-04 03:12:06 --> Hooks Class Initialized
DEBUG - 2013-11-04 03:12:06 --> Utf8 Class Initialized
DEBUG - 2013-11-04 03:12:06 --> UTF-8 Support Enabled
DEBUG - 2013-11-04 03:12:06 --> URI Class Initialized
DEBUG - 2013-11-04 03:12:06 --> Router Class Initialized
DEBUG - 2013-11-04 03:12:06 --> Output Class Initialized
DEBUG - 2013-11-04 03:12:06 --> Security Class Initialized
DEBUG - 2013-11-04 03:12:06 --> Input Class Initialized
DEBUG - 2013-11-04 03:12:06 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-04 03:12:06 --> Language Class Initialized
DEBUG - 2013-11-04 03:12:06 --> Loader Class Initialized
DEBUG - 2013-11-04 03:12:06 --> Helper loaded: form_helper
DEBUG - 2013-11-04 03:12:06 --> Helper loaded: url_helper
DEBUG - 2013-11-04 03:12:06 --> Helper loaded: html_helper
DEBUG - 2013-11-04 03:12:06 --> Database Driver Class Initialized
DEBUG - 2013-11-04 03:12:06 --> Session Class Initialized
DEBUG - 2013-11-04 03:12:06 --> Helper loaded: string_helper
DEBUG - 2013-11-04 03:12:06 --> Session routines successfully run
DEBUG - 2013-11-04 03:12:06 --> Form Validation Class Initialized
DEBUG - 2013-11-04 03:12:06 --> Controller Class Initialized
DEBUG - 2013-11-04 03:12:06 --> Model Class Initialized
DEBUG - 2013-11-04 03:12:06 --> Model Class Initialized
DEBUG - 2013-11-04 03:12:06 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-04 03:12:06 --> after session initialization................
INFO  - 2013-11-04 03:12:06 --> The forum id is 1
INFO  - 2013-11-04 03:12:06 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-04 03:12:06 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 1
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '1'
ORDER BY `ft`.`name`)
INFO  - 2013-11-04 03:12:06 --> The encoded json is [{"id":"4","text":"Eye Defects","hasChildren":true},{"id":"1","text":"ASTIGMATISM","hasChildren":false},{"id":"2","text":"CATARACT","hasChildren":false}]
DEBUG - 2013-11-04 03:12:06 --> Final output sent to browser
DEBUG - 2013-11-04 03:12:06 --> Total execution time: 0.0680
DEBUG - 2013-11-04 03:12:09 --> Config Class Initialized
DEBUG - 2013-11-04 03:12:09 --> Hooks Class Initialized
DEBUG - 2013-11-04 03:12:09 --> Utf8 Class Initialized
DEBUG - 2013-11-04 03:12:09 --> UTF-8 Support Enabled
DEBUG - 2013-11-04 03:12:09 --> URI Class Initialized
DEBUG - 2013-11-04 03:12:09 --> Router Class Initialized
DEBUG - 2013-11-04 03:12:09 --> Output Class Initialized
DEBUG - 2013-11-04 03:12:09 --> Security Class Initialized
DEBUG - 2013-11-04 03:12:09 --> Input Class Initialized
DEBUG - 2013-11-04 03:12:09 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-04 03:12:09 --> Language Class Initialized
DEBUG - 2013-11-04 03:12:09 --> Loader Class Initialized
DEBUG - 2013-11-04 03:12:09 --> Helper loaded: form_helper
DEBUG - 2013-11-04 03:12:09 --> Helper loaded: url_helper
DEBUG - 2013-11-04 03:12:09 --> Helper loaded: html_helper
DEBUG - 2013-11-04 03:12:09 --> Database Driver Class Initialized
DEBUG - 2013-11-04 03:12:09 --> Session Class Initialized
DEBUG - 2013-11-04 03:12:09 --> Helper loaded: string_helper
DEBUG - 2013-11-04 03:12:09 --> Session routines successfully run
DEBUG - 2013-11-04 03:12:09 --> Form Validation Class Initialized
DEBUG - 2013-11-04 03:12:09 --> Controller Class Initialized
DEBUG - 2013-11-04 03:12:09 --> Model Class Initialized
DEBUG - 2013-11-04 03:12:09 --> Model Class Initialized
DEBUG - 2013-11-04 03:12:09 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-04 03:12:09 --> after session initialization................
INFO  - 2013-11-04 03:12:09 --> Topics ::::::::::===>SELECT `ft`.`id_topicforum`, `ft`.`name`, `ft`.`description`
FROM (`forum_topic` ft)
WHERE `ft`.`id_topicforum` =  '2'
ORDER BY `ft`.`name`
INFO  - 2013-11-04 03:12:09 --> inside retrieving comments member id and forum topic id is 2
INFO  - 2013-11-04 03:12:09 --> 10==============================0
INFO  - 2013-11-04 03:12:09 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-04 03:12:09 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-04 03:12:09 --> inside retrieving comments topic id is 2
INFO  - 2013-11-04 03:12:09 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
DEBUG - 2013-11-04 03:12:09 --> Final output sent to browser
DEBUG - 2013-11-04 03:12:09 --> Total execution time: 0.0750
DEBUG - 2013-11-04 03:12:15 --> Config Class Initialized
DEBUG - 2013-11-04 03:12:15 --> Hooks Class Initialized
DEBUG - 2013-11-04 03:12:15 --> Utf8 Class Initialized
DEBUG - 2013-11-04 03:12:15 --> UTF-8 Support Enabled
DEBUG - 2013-11-04 03:12:15 --> URI Class Initialized
DEBUG - 2013-11-04 03:12:15 --> Router Class Initialized
DEBUG - 2013-11-04 03:12:15 --> Output Class Initialized
DEBUG - 2013-11-04 03:12:15 --> Security Class Initialized
DEBUG - 2013-11-04 03:12:15 --> Input Class Initialized
DEBUG - 2013-11-04 03:12:15 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-04 03:12:15 --> Language Class Initialized
DEBUG - 2013-11-04 03:12:15 --> Loader Class Initialized
DEBUG - 2013-11-04 03:12:15 --> Helper loaded: form_helper
DEBUG - 2013-11-04 03:12:15 --> Helper loaded: url_helper
DEBUG - 2013-11-04 03:12:15 --> Helper loaded: html_helper
DEBUG - 2013-11-04 03:12:15 --> Database Driver Class Initialized
DEBUG - 2013-11-04 03:12:15 --> Session Class Initialized
DEBUG - 2013-11-04 03:12:15 --> Helper loaded: string_helper
DEBUG - 2013-11-04 03:12:15 --> Session routines successfully run
DEBUG - 2013-11-04 03:12:15 --> Form Validation Class Initialized
DEBUG - 2013-11-04 03:12:15 --> Controller Class Initialized
DEBUG - 2013-11-04 03:12:15 --> Model Class Initialized
DEBUG - 2013-11-04 03:12:15 --> Model Class Initialized
DEBUG - 2013-11-04 03:12:15 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-04 03:12:15 --> after session initialization................
INFO  - 2013-11-04 03:12:15 --> inside the create comment page.................
INFO  - 2013-11-04 03:12:15 --> before inserting into topic comment.................
INFO  - 2013-11-04 03:12:15 --> after inserting into topic comment.................14
INFO  - 2013-11-04 03:12:15 --> the status of the transaction is...........1 the insert id is ......14
INFO  - 2013-11-04 03:12:15 --> inside retrieving comments topic id is 2
INFO  - 2013-11-04 03:12:15 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
WHERE `tc`.`id_topiccomment` > '13'
ORDER BY `tc`.`id_topiccomment` asc
INFO  - 2013-11-04 03:12:15 --> inside retrieving comments topic id is 2
INFO  - 2013-11-04 03:12:15 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
DEBUG - 2013-11-04 03:12:15 --> Final output sent to browser
DEBUG - 2013-11-04 03:12:15 --> Total execution time: 0.1130
DEBUG - 2013-11-04 03:12:21 --> Config Class Initialized
DEBUG - 2013-11-04 03:12:21 --> Hooks Class Initialized
DEBUG - 2013-11-04 03:12:21 --> Utf8 Class Initialized
DEBUG - 2013-11-04 03:12:21 --> UTF-8 Support Enabled
DEBUG - 2013-11-04 03:12:21 --> URI Class Initialized
DEBUG - 2013-11-04 03:12:21 --> Router Class Initialized
DEBUG - 2013-11-04 03:12:21 --> Output Class Initialized
DEBUG - 2013-11-04 03:12:21 --> Security Class Initialized
DEBUG - 2013-11-04 03:12:21 --> Input Class Initialized
DEBUG - 2013-11-04 03:12:21 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-04 03:12:21 --> Language Class Initialized
DEBUG - 2013-11-04 03:12:21 --> Loader Class Initialized
DEBUG - 2013-11-04 03:12:21 --> Helper loaded: form_helper
DEBUG - 2013-11-04 03:12:21 --> Helper loaded: url_helper
DEBUG - 2013-11-04 03:12:21 --> Helper loaded: html_helper
DEBUG - 2013-11-04 03:12:21 --> Database Driver Class Initialized
DEBUG - 2013-11-04 03:12:21 --> Session Class Initialized
DEBUG - 2013-11-04 03:12:21 --> Helper loaded: string_helper
DEBUG - 2013-11-04 03:12:21 --> Session routines successfully run
DEBUG - 2013-11-04 03:12:21 --> Form Validation Class Initialized
DEBUG - 2013-11-04 03:12:21 --> Controller Class Initialized
DEBUG - 2013-11-04 03:12:21 --> Model Class Initialized
DEBUG - 2013-11-04 03:12:21 --> Model Class Initialized
DEBUG - 2013-11-04 03:12:21 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-04 03:12:21 --> after session initialization................
INFO  - 2013-11-04 03:12:21 --> Topics ::::::::::===>SELECT `ft`.`id_topicforum`, `ft`.`name`, `ft`.`description`
FROM (`forum_topic` ft)
WHERE `ft`.`id_topicforum` =  '1'
ORDER BY `ft`.`name`
INFO  - 2013-11-04 03:12:21 --> inside retrieving comments member id and forum topic id is 1
INFO  - 2013-11-04 03:12:21 --> 10==============================0
INFO  - 2013-11-04 03:12:21 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-04 03:12:21 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-04 03:12:21 --> inside retrieving comments topic id is 1
INFO  - 2013-11-04 03:12:21 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
DEBUG - 2013-11-04 03:12:21 --> Final output sent to browser
DEBUG - 2013-11-04 03:12:21 --> Total execution time: 0.0820
DEBUG - 2013-11-04 03:12:29 --> Config Class Initialized
DEBUG - 2013-11-04 03:12:29 --> Hooks Class Initialized
DEBUG - 2013-11-04 03:12:29 --> Utf8 Class Initialized
DEBUG - 2013-11-04 03:12:29 --> UTF-8 Support Enabled
DEBUG - 2013-11-04 03:12:29 --> URI Class Initialized
DEBUG - 2013-11-04 03:12:29 --> Router Class Initialized
DEBUG - 2013-11-04 03:12:29 --> Output Class Initialized
DEBUG - 2013-11-04 03:12:29 --> Security Class Initialized
DEBUG - 2013-11-04 03:12:29 --> Input Class Initialized
DEBUG - 2013-11-04 03:12:29 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-04 03:12:29 --> Language Class Initialized
DEBUG - 2013-11-04 03:12:29 --> Loader Class Initialized
DEBUG - 2013-11-04 03:12:29 --> Helper loaded: form_helper
DEBUG - 2013-11-04 03:12:29 --> Helper loaded: url_helper
DEBUG - 2013-11-04 03:12:29 --> Helper loaded: html_helper
DEBUG - 2013-11-04 03:12:29 --> Database Driver Class Initialized
DEBUG - 2013-11-04 03:12:29 --> Session Class Initialized
DEBUG - 2013-11-04 03:12:29 --> Helper loaded: string_helper
DEBUG - 2013-11-04 03:12:29 --> Session routines successfully run
DEBUG - 2013-11-04 03:12:29 --> Form Validation Class Initialized
DEBUG - 2013-11-04 03:12:29 --> Controller Class Initialized
DEBUG - 2013-11-04 03:12:29 --> Model Class Initialized
DEBUG - 2013-11-04 03:12:29 --> Model Class Initialized
DEBUG - 2013-11-04 03:12:29 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-04 03:12:29 --> after session initialization................
INFO  - 2013-11-04 03:12:29 --> inside the create comment page.................
INFO  - 2013-11-04 03:12:29 --> before inserting into topic comment.................
INFO  - 2013-11-04 03:12:29 --> after inserting into topic comment.................15
INFO  - 2013-11-04 03:12:29 --> the status of the transaction is...........1 the insert id is ......15
INFO  - 2013-11-04 03:12:29 --> inside retrieving comments topic id is 1
INFO  - 2013-11-04 03:12:29 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
WHERE `tc`.`id_topiccomment` > ''
ORDER BY `tc`.`id_topiccomment` asc
INFO  - 2013-11-04 03:12:29 --> inside retrieving comments topic id is 1
INFO  - 2013-11-04 03:12:29 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
DEBUG - 2013-11-04 03:12:29 --> Final output sent to browser
DEBUG - 2013-11-04 03:12:29 --> Total execution time: 0.2020
DEBUG - 2013-11-04 03:12:33 --> Config Class Initialized
DEBUG - 2013-11-04 03:12:33 --> Hooks Class Initialized
DEBUG - 2013-11-04 03:12:33 --> Utf8 Class Initialized
DEBUG - 2013-11-04 03:12:33 --> UTF-8 Support Enabled
DEBUG - 2013-11-04 03:12:33 --> URI Class Initialized
DEBUG - 2013-11-04 03:12:33 --> Router Class Initialized
DEBUG - 2013-11-04 03:12:33 --> Output Class Initialized
DEBUG - 2013-11-04 03:12:33 --> Security Class Initialized
DEBUG - 2013-11-04 03:12:33 --> Input Class Initialized
DEBUG - 2013-11-04 03:12:33 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-04 03:12:33 --> Language Class Initialized
DEBUG - 2013-11-04 03:12:33 --> Loader Class Initialized
DEBUG - 2013-11-04 03:12:33 --> Helper loaded: form_helper
DEBUG - 2013-11-04 03:12:33 --> Helper loaded: url_helper
DEBUG - 2013-11-04 03:12:33 --> Helper loaded: html_helper
DEBUG - 2013-11-04 03:12:33 --> Database Driver Class Initialized
DEBUG - 2013-11-04 03:12:33 --> Session Class Initialized
DEBUG - 2013-11-04 03:12:33 --> Helper loaded: string_helper
DEBUG - 2013-11-04 03:12:33 --> Session routines successfully run
DEBUG - 2013-11-04 03:12:33 --> Form Validation Class Initialized
DEBUG - 2013-11-04 03:12:33 --> Controller Class Initialized
DEBUG - 2013-11-04 03:12:33 --> Model Class Initialized
DEBUG - 2013-11-04 03:12:33 --> Model Class Initialized
DEBUG - 2013-11-04 03:12:33 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-04 03:12:33 --> after session initialization................
INFO  - 2013-11-04 03:12:33 --> inside retrieve most commented forum topic 
INFO  - 2013-11-04 03:12:33 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
INFO  - 2013-11-04 03:12:33 --> inside retrieving first 20 topics 
INFO  - 2013-11-04 03:12:33 --> SELECT `t`.`id_topicforum`, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
LIMIT 20
INFO  - 2013-11-04 03:12:33 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-04 03:12:33 --> SELECT `ff`.`id_forum` as id, `ff`.`name`, count(f.id_forum) as sub_forum
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` is null 
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`
INFO  - 2013-11-04 03:12:33 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-04 03:12:33 --> inside retrieving comments topic id and drug id is 1
INFO  - 2013-11-04 03:12:33 --> SELECT `tc`.`id_topiccomment`, `tc`.`comment`, `tc`.`timecreated`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-04 03:12:33 --> inside retrieving comments topic id 1
INFO  - 2013-11-04 03:12:33 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
INFO  - 2013-11-04 03:12:33 --> after forums has been clicked.................
INFO  - 2013-11-04 03:12:33 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-11-04 03:12:33 --> File loaded: ../pharmaray-application/views/forum.php
DEBUG - 2013-11-04 03:12:33 --> Final output sent to browser
DEBUG - 2013-11-04 03:12:33 --> Total execution time: 0.1150
DEBUG - 2013-11-04 03:12:33 --> Config Class Initialized
DEBUG - 2013-11-04 03:12:33 --> Hooks Class Initialized
DEBUG - 2013-11-04 03:12:33 --> Utf8 Class Initialized
DEBUG - 2013-11-04 03:12:33 --> UTF-8 Support Enabled
DEBUG - 2013-11-04 03:12:33 --> URI Class Initialized
DEBUG - 2013-11-04 03:12:33 --> Router Class Initialized
DEBUG - 2013-11-04 03:12:33 --> Output Class Initialized
DEBUG - 2013-11-04 03:12:33 --> Security Class Initialized
DEBUG - 2013-11-04 03:12:33 --> Input Class Initialized
DEBUG - 2013-11-04 03:12:33 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-04 03:12:33 --> Language Class Initialized
DEBUG - 2013-11-04 03:12:33 --> Loader Class Initialized
DEBUG - 2013-11-04 03:12:33 --> Helper loaded: form_helper
DEBUG - 2013-11-04 03:12:33 --> Helper loaded: url_helper
DEBUG - 2013-11-04 03:12:33 --> Helper loaded: html_helper
DEBUG - 2013-11-04 03:12:33 --> Database Driver Class Initialized
DEBUG - 2013-11-04 03:12:33 --> Session Class Initialized
DEBUG - 2013-11-04 03:12:33 --> Helper loaded: string_helper
DEBUG - 2013-11-04 03:12:33 --> Session routines successfully run
DEBUG - 2013-11-04 03:12:33 --> Form Validation Class Initialized
DEBUG - 2013-11-04 03:12:33 --> Controller Class Initialized
DEBUG - 2013-11-04 03:12:33 --> Model Class Initialized
DEBUG - 2013-11-04 03:12:33 --> Model Class Initialized
DEBUG - 2013-11-04 03:12:33 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-04 03:12:33 --> after session initialization................
ERROR - 2013-11-04 03:12:33 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-04 03:12:33 --> Config Class Initialized
DEBUG - 2013-11-04 03:12:33 --> Hooks Class Initialized
DEBUG - 2013-11-04 03:12:33 --> Utf8 Class Initialized
DEBUG - 2013-11-04 03:12:33 --> UTF-8 Support Enabled
DEBUG - 2013-11-04 03:12:33 --> URI Class Initialized
DEBUG - 2013-11-04 03:12:33 --> Router Class Initialized
ERROR - 2013-11-04 03:12:33 --> 404 Page Not Found --> css
DEBUG - 2013-11-04 03:12:54 --> Config Class Initialized
DEBUG - 2013-11-04 03:12:54 --> Hooks Class Initialized
DEBUG - 2013-11-04 03:12:54 --> Utf8 Class Initialized
DEBUG - 2013-11-04 03:12:54 --> UTF-8 Support Enabled
DEBUG - 2013-11-04 03:12:54 --> URI Class Initialized
DEBUG - 2013-11-04 03:12:54 --> Router Class Initialized
DEBUG - 2013-11-04 03:12:54 --> Output Class Initialized
DEBUG - 2013-11-04 03:12:54 --> Security Class Initialized
DEBUG - 2013-11-04 03:12:54 --> Input Class Initialized
DEBUG - 2013-11-04 03:12:54 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-04 03:12:54 --> Language Class Initialized
DEBUG - 2013-11-04 03:12:54 --> Loader Class Initialized
DEBUG - 2013-11-04 03:12:54 --> Helper loaded: form_helper
DEBUG - 2013-11-04 03:12:54 --> Helper loaded: url_helper
DEBUG - 2013-11-04 03:12:54 --> Helper loaded: html_helper
DEBUG - 2013-11-04 03:12:54 --> Database Driver Class Initialized
DEBUG - 2013-11-04 03:12:54 --> Session Class Initialized
DEBUG - 2013-11-04 03:12:54 --> Helper loaded: string_helper
DEBUG - 2013-11-04 03:12:54 --> Session routines successfully run
DEBUG - 2013-11-04 03:12:54 --> Form Validation Class Initialized
DEBUG - 2013-11-04 03:12:54 --> Controller Class Initialized
DEBUG - 2013-11-04 03:12:54 --> Model Class Initialized
DEBUG - 2013-11-04 03:12:54 --> Model Class Initialized
DEBUG - 2013-11-04 03:12:54 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-04 03:12:54 --> after session initialization................
DEBUG - 2013-11-04 03:12:55 --> Config Class Initialized
DEBUG - 2013-11-04 03:12:55 --> Hooks Class Initialized
DEBUG - 2013-11-04 03:12:55 --> Utf8 Class Initialized
DEBUG - 2013-11-04 03:12:55 --> UTF-8 Support Enabled
DEBUG - 2013-11-04 03:12:55 --> URI Class Initialized
DEBUG - 2013-11-04 03:12:55 --> Router Class Initialized
DEBUG - 2013-11-04 03:12:55 --> No URI present. Default controller set.
DEBUG - 2013-11-04 03:12:55 --> Output Class Initialized
DEBUG - 2013-11-04 03:12:55 --> Security Class Initialized
DEBUG - 2013-11-04 03:12:55 --> Input Class Initialized
DEBUG - 2013-11-04 03:12:55 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-04 03:12:55 --> Language Class Initialized
DEBUG - 2013-11-04 03:12:55 --> Loader Class Initialized
DEBUG - 2013-11-04 03:12:55 --> Helper loaded: form_helper
DEBUG - 2013-11-04 03:12:55 --> Helper loaded: url_helper
DEBUG - 2013-11-04 03:12:55 --> Helper loaded: html_helper
DEBUG - 2013-11-04 03:12:55 --> Database Driver Class Initialized
DEBUG - 2013-11-04 03:12:55 --> Session Class Initialized
DEBUG - 2013-11-04 03:12:55 --> Helper loaded: string_helper
DEBUG - 2013-11-04 03:12:55 --> A session cookie was not found.
DEBUG - 2013-11-04 03:12:55 --> Session routines successfully run
DEBUG - 2013-11-04 03:12:55 --> Form Validation Class Initialized
DEBUG - 2013-11-04 03:12:55 --> Controller Class Initialized
INFO  - 2013-11-04 03:12:55 --> the form message==>
INFO  - 2013-11-04 03:12:55 --> The session id is ========>878c924d70417c3eabed7ccc5dd5d2cd and the member id is =======>
INFO  - 2013-11-04 03:12:55 --> after the retrieving session list.................//////////
DEBUG - 2013-11-04 03:12:55 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-11-04 03:12:55 --> Final output sent to browser
DEBUG - 2013-11-04 03:12:55 --> Total execution time: 0.1100
