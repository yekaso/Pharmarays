<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2013-11-05 08:12:42 --> Config Class Initialized
DEBUG - 2013-11-05 08:12:42 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:12:42 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:12:42 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:12:42 --> URI Class Initialized
DEBUG - 2013-11-05 08:12:42 --> Router Class Initialized
DEBUG - 2013-11-05 08:12:42 --> No URI present. Default controller set.
DEBUG - 2013-11-05 08:12:42 --> Output Class Initialized
DEBUG - 2013-11-05 08:12:42 --> Security Class Initialized
DEBUG - 2013-11-05 08:12:42 --> Input Class Initialized
DEBUG - 2013-11-05 08:12:42 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:12:42 --> Language Class Initialized
DEBUG - 2013-11-05 08:12:42 --> Loader Class Initialized
DEBUG - 2013-11-05 08:12:42 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:12:42 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:12:42 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:12:43 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:12:44 --> Session Class Initialized
DEBUG - 2013-11-05 08:12:44 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:12:44 --> A session cookie was not found.
DEBUG - 2013-11-05 08:12:44 --> Session routines successfully run
DEBUG - 2013-11-05 08:12:44 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:12:44 --> Controller Class Initialized
INFO  - 2013-11-05 08:12:44 --> the form message==>
INFO  - 2013-11-05 08:12:44 --> The session id is ========>7b3700b17e4c59798ff144d7434306e6 and the member id is =======>
INFO  - 2013-11-05 08:12:44 --> after the retrieving session list.................//////////
DEBUG - 2013-11-05 08:12:44 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-11-05 08:12:44 --> Final output sent to browser
DEBUG - 2013-11-05 08:12:44 --> Total execution time: 2.2761
DEBUG - 2013-11-05 08:13:27 --> Config Class Initialized
DEBUG - 2013-11-05 08:13:27 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:13:27 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:13:27 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:13:27 --> URI Class Initialized
DEBUG - 2013-11-05 08:13:27 --> Router Class Initialized
DEBUG - 2013-11-05 08:13:27 --> Output Class Initialized
DEBUG - 2013-11-05 08:13:27 --> Security Class Initialized
DEBUG - 2013-11-05 08:13:27 --> Input Class Initialized
DEBUG - 2013-11-05 08:13:27 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:13:27 --> Language Class Initialized
DEBUG - 2013-11-05 08:13:27 --> Loader Class Initialized
DEBUG - 2013-11-05 08:13:27 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:13:27 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:13:27 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:13:27 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:13:27 --> Session Class Initialized
DEBUG - 2013-11-05 08:13:27 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:13:27 --> Session routines successfully run
DEBUG - 2013-11-05 08:13:27 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:13:27 --> Controller Class Initialized
DEBUG - 2013-11-05 08:13:28 --> Model Class Initialized
DEBUG - 2013-11-05 08:13:28 --> Model Class Initialized
DEBUG - 2013-11-05 08:13:28 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:13:28 --> after session initialization................
INFO  - 2013-11-05 08:13:28 --> inside rays login auth.............
DEBUG - 2013-11-05 08:13:28 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-11-05 08:13:28 --> XSS Filtering completed
DEBUG - 2013-11-05 08:13:28 --> XSS Filtering completed
INFO  - 2013-11-05 08:13:28 --> before getting the relation of member............6
INFO  - 2013-11-05 08:13:28 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-11-05 08:13:28 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-05 08:13:29 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-11-05 08:13:29 --> inside retrieving vacancy for member
INFO  - 2013-11-05 08:13:29 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-11-05 08:13:29 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-05 08:13:29 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-11-05 08:13:30 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-11-05 08:13:31 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-05 08:13:31 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-05 08:13:31 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-11-05 08:13:31 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-11-05 08:13:31 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-11-05 08:13:32 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-11-05 08:13:32 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-11-05 08:13:32 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-11-05 08:13:32 --> Final output sent to browser
DEBUG - 2013-11-05 08:13:32 --> Total execution time: 4.3793
DEBUG - 2013-11-05 08:13:32 --> Config Class Initialized
DEBUG - 2013-11-05 08:13:32 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:13:32 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:13:32 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:13:32 --> URI Class Initialized
DEBUG - 2013-11-05 08:13:32 --> Router Class Initialized
DEBUG - 2013-11-05 08:13:32 --> Output Class Initialized
DEBUG - 2013-11-05 08:13:32 --> Security Class Initialized
DEBUG - 2013-11-05 08:13:32 --> Input Class Initialized
DEBUG - 2013-11-05 08:13:32 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:13:32 --> Language Class Initialized
DEBUG - 2013-11-05 08:13:32 --> Loader Class Initialized
DEBUG - 2013-11-05 08:13:32 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:13:32 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:13:32 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:13:32 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:13:32 --> Session Class Initialized
DEBUG - 2013-11-05 08:13:32 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:13:32 --> Session routines successfully run
DEBUG - 2013-11-05 08:13:32 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:13:32 --> Controller Class Initialized
DEBUG - 2013-11-05 08:13:32 --> Model Class Initialized
DEBUG - 2013-11-05 08:13:32 --> Model Class Initialized
DEBUG - 2013-11-05 08:13:32 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:13:32 --> after session initialization................
ERROR - 2013-11-05 08:13:32 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-05 08:13:32 --> Config Class Initialized
DEBUG - 2013-11-05 08:13:32 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:13:32 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:13:32 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:13:32 --> URI Class Initialized
DEBUG - 2013-11-05 08:13:32 --> Router Class Initialized
DEBUG - 2013-11-05 08:13:32 --> Output Class Initialized
DEBUG - 2013-11-05 08:13:32 --> Security Class Initialized
DEBUG - 2013-11-05 08:13:32 --> Input Class Initialized
DEBUG - 2013-11-05 08:13:32 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:13:32 --> Language Class Initialized
DEBUG - 2013-11-05 08:13:32 --> Loader Class Initialized
DEBUG - 2013-11-05 08:13:32 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:13:32 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:13:32 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:13:32 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:13:32 --> Session Class Initialized
DEBUG - 2013-11-05 08:13:32 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:13:32 --> Session routines successfully run
DEBUG - 2013-11-05 08:13:32 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:13:32 --> Controller Class Initialized
DEBUG - 2013-11-05 08:13:32 --> Model Class Initialized
DEBUG - 2013-11-05 08:13:32 --> Model Class Initialized
DEBUG - 2013-11-05 08:13:32 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:13:32 --> after session initialization................
ERROR - 2013-11-05 08:13:32 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-05 08:13:32 --> Config Class Initialized
DEBUG - 2013-11-05 08:13:32 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:13:32 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:13:32 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:13:32 --> URI Class Initialized
DEBUG - 2013-11-05 08:13:32 --> Router Class Initialized
ERROR - 2013-11-05 08:13:32 --> 404 Page Not Found --> css
DEBUG - 2013-11-05 08:14:43 --> Config Class Initialized
DEBUG - 2013-11-05 08:14:43 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:14:43 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:14:43 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:14:43 --> URI Class Initialized
DEBUG - 2013-11-05 08:14:43 --> Router Class Initialized
DEBUG - 2013-11-05 08:14:43 --> Output Class Initialized
DEBUG - 2013-11-05 08:14:43 --> Security Class Initialized
DEBUG - 2013-11-05 08:14:43 --> Input Class Initialized
DEBUG - 2013-11-05 08:14:43 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:14:43 --> Language Class Initialized
DEBUG - 2013-11-05 08:14:43 --> Loader Class Initialized
DEBUG - 2013-11-05 08:14:43 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:14:43 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:14:43 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:14:43 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:14:43 --> Session Class Initialized
DEBUG - 2013-11-05 08:14:43 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:14:43 --> Session routines successfully run
DEBUG - 2013-11-05 08:14:43 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:14:43 --> Controller Class Initialized
DEBUG - 2013-11-05 08:14:43 --> Model Class Initialized
DEBUG - 2013-11-05 08:14:43 --> Model Class Initialized
DEBUG - 2013-11-05 08:14:43 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:14:43 --> after session initialization................
INFO  - 2013-11-05 08:14:43 --> inside retrieve most commented forum topic 
INFO  - 2013-11-05 08:14:43 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
INFO  - 2013-11-05 08:14:43 --> inside retrieving first 20 topics 
INFO  - 2013-11-05 08:14:43 --> SELECT `t`.`id_topicforum`, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
LIMIT 20
INFO  - 2013-11-05 08:14:43 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-05 08:14:43 --> SELECT `ff`.`id_forum` as id, `ff`.`name`, count(f.id_forum) as sub_forum
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` is null 
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`
INFO  - 2013-11-05 08:14:43 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-05 08:14:43 --> inside retrieving comments topic id and drug id is 1
INFO  - 2013-11-05 08:14:44 --> SELECT `tc`.`id_topiccomment`, `tc`.`comment`, `tc`.`timecreated`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-05 08:14:44 --> inside retrieving comments topic id 1
INFO  - 2013-11-05 08:14:44 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
INFO  - 2013-11-05 08:14:44 --> after forums has been clicked.................
INFO  - 2013-11-05 08:14:44 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-11-05 08:14:44 --> File loaded: ../pharmaray-application/views/forum.php
DEBUG - 2013-11-05 08:14:44 --> Final output sent to browser
DEBUG - 2013-11-05 08:14:44 --> Total execution time: 0.6690
DEBUG - 2013-11-05 08:14:44 --> Config Class Initialized
DEBUG - 2013-11-05 08:14:44 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:14:44 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:14:44 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:14:44 --> URI Class Initialized
DEBUG - 2013-11-05 08:14:44 --> Router Class Initialized
DEBUG - 2013-11-05 08:14:44 --> Output Class Initialized
DEBUG - 2013-11-05 08:14:44 --> Security Class Initialized
DEBUG - 2013-11-05 08:14:44 --> Input Class Initialized
DEBUG - 2013-11-05 08:14:44 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:14:44 --> Language Class Initialized
DEBUG - 2013-11-05 08:14:44 --> Loader Class Initialized
DEBUG - 2013-11-05 08:14:44 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:14:44 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:14:44 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:14:44 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:14:45 --> Session Class Initialized
DEBUG - 2013-11-05 08:14:45 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:14:45 --> Session routines successfully run
DEBUG - 2013-11-05 08:14:45 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:14:45 --> Controller Class Initialized
DEBUG - 2013-11-05 08:14:45 --> Model Class Initialized
DEBUG - 2013-11-05 08:14:45 --> Model Class Initialized
DEBUG - 2013-11-05 08:14:45 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:14:45 --> after session initialization................
ERROR - 2013-11-05 08:14:45 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-05 08:14:45 --> Config Class Initialized
DEBUG - 2013-11-05 08:14:45 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:14:45 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:14:45 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:14:45 --> URI Class Initialized
DEBUG - 2013-11-05 08:14:45 --> Router Class Initialized
ERROR - 2013-11-05 08:14:45 --> 404 Page Not Found --> css
DEBUG - 2013-11-05 08:14:48 --> Config Class Initialized
DEBUG - 2013-11-05 08:14:48 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:14:48 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:14:48 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:14:48 --> URI Class Initialized
DEBUG - 2013-11-05 08:14:48 --> Router Class Initialized
DEBUG - 2013-11-05 08:14:48 --> Output Class Initialized
DEBUG - 2013-11-05 08:14:48 --> Security Class Initialized
DEBUG - 2013-11-05 08:14:48 --> Input Class Initialized
DEBUG - 2013-11-05 08:14:48 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:14:48 --> Language Class Initialized
DEBUG - 2013-11-05 08:14:48 --> Loader Class Initialized
DEBUG - 2013-11-05 08:14:48 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:14:48 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:14:48 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:14:48 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:14:48 --> Session Class Initialized
DEBUG - 2013-11-05 08:14:48 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:14:48 --> Session routines successfully run
DEBUG - 2013-11-05 08:14:48 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:14:48 --> Controller Class Initialized
DEBUG - 2013-11-05 08:14:48 --> Model Class Initialized
DEBUG - 2013-11-05 08:14:48 --> Model Class Initialized
DEBUG - 2013-11-05 08:14:48 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:14:48 --> after session initialization................
INFO  - 2013-11-05 08:14:48 --> inside the retrieve ajax topic comment page.................
INFO  - 2013-11-05 08:14:48 --> inside retrieving comments member id and forum topic id is 1
INFO  - 2013-11-05 08:14:48 --> 10==============================10
INFO  - 2013-11-05 08:14:48 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10, 10
INFO  - 2013-11-05 08:14:48 --> [{"id":"3","comment":"this is not just right","timecreated":"2013-10-24 14:21:05","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"2","comment":"This is just not right...I have had this for a very long time that it drives me crazy","timecreated":"2013-10-24 14:14:47","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"1","comment":"check this comment now....","timecreated":"2013-10-24 14:14:12","membername":"Elvis onuorah","membertypeimage":"profilem1"}]
DEBUG - 2013-11-05 08:14:48 --> Final output sent to browser
DEBUG - 2013-11-05 08:14:48 --> Total execution time: 0.1360
DEBUG - 2013-11-05 08:14:49 --> Config Class Initialized
DEBUG - 2013-11-05 08:14:49 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:14:49 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:14:49 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:14:49 --> URI Class Initialized
DEBUG - 2013-11-05 08:14:49 --> Router Class Initialized
DEBUG - 2013-11-05 08:14:49 --> Output Class Initialized
DEBUG - 2013-11-05 08:14:49 --> Security Class Initialized
DEBUG - 2013-11-05 08:14:49 --> Input Class Initialized
DEBUG - 2013-11-05 08:14:49 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:14:49 --> Language Class Initialized
DEBUG - 2013-11-05 08:14:49 --> Loader Class Initialized
DEBUG - 2013-11-05 08:14:49 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:14:49 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:14:49 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:14:49 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:14:49 --> Session Class Initialized
DEBUG - 2013-11-05 08:14:49 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:14:49 --> Session routines successfully run
DEBUG - 2013-11-05 08:14:49 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:14:49 --> Controller Class Initialized
DEBUG - 2013-11-05 08:14:49 --> Model Class Initialized
DEBUG - 2013-11-05 08:14:49 --> Model Class Initialized
DEBUG - 2013-11-05 08:14:49 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:14:49 --> after session initialization................
INFO  - 2013-11-05 08:14:49 --> inside the retrieve ajax topic comment page.................
INFO  - 2013-11-05 08:14:49 --> inside retrieving comments member id and forum topic id is 1
INFO  - 2013-11-05 08:14:49 --> 10==============================13
INFO  - 2013-11-05 08:14:49 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 13, 10
INFO  - 2013-11-05 08:14:49 --> []
DEBUG - 2013-11-05 08:14:49 --> Final output sent to browser
DEBUG - 2013-11-05 08:14:49 --> Total execution time: 0.0530
DEBUG - 2013-11-05 08:14:51 --> Config Class Initialized
DEBUG - 2013-11-05 08:14:51 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:14:51 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:14:51 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:14:51 --> URI Class Initialized
DEBUG - 2013-11-05 08:14:51 --> Router Class Initialized
DEBUG - 2013-11-05 08:14:51 --> Output Class Initialized
DEBUG - 2013-11-05 08:14:51 --> Security Class Initialized
DEBUG - 2013-11-05 08:14:51 --> Input Class Initialized
DEBUG - 2013-11-05 08:14:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:14:51 --> Language Class Initialized
DEBUG - 2013-11-05 08:14:51 --> Loader Class Initialized
DEBUG - 2013-11-05 08:14:51 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:14:51 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:14:51 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:14:51 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:14:51 --> Session Class Initialized
DEBUG - 2013-11-05 08:14:51 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:14:51 --> Session routines successfully run
DEBUG - 2013-11-05 08:14:51 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:14:51 --> Controller Class Initialized
DEBUG - 2013-11-05 08:14:51 --> Model Class Initialized
DEBUG - 2013-11-05 08:14:51 --> Model Class Initialized
DEBUG - 2013-11-05 08:14:51 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:14:51 --> after session initialization................
INFO  - 2013-11-05 08:14:51 --> Topics ::::::::::===>SELECT `ft`.`id_topicforum`, `ft`.`name`, `ft`.`description`
FROM (`forum_topic` ft)
WHERE `ft`.`id_topicforum` =  '2'
ORDER BY `ft`.`name`
INFO  - 2013-11-05 08:14:51 --> inside retrieving comments member id and forum topic id is 2
INFO  - 2013-11-05 08:14:51 --> 10==============================0
INFO  - 2013-11-05 08:14:51 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-05 08:14:51 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-05 08:14:51 --> inside retrieving comments topic id is 2
INFO  - 2013-11-05 08:14:51 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
DEBUG - 2013-11-05 08:14:51 --> Final output sent to browser
DEBUG - 2013-11-05 08:14:51 --> Total execution time: 0.1290
DEBUG - 2013-11-05 08:15:05 --> Config Class Initialized
DEBUG - 2013-11-05 08:15:05 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:15:05 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:15:05 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:15:05 --> URI Class Initialized
DEBUG - 2013-11-05 08:15:05 --> Router Class Initialized
DEBUG - 2013-11-05 08:15:05 --> Output Class Initialized
DEBUG - 2013-11-05 08:15:05 --> Security Class Initialized
DEBUG - 2013-11-05 08:15:05 --> Input Class Initialized
DEBUG - 2013-11-05 08:15:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:15:05 --> Language Class Initialized
DEBUG - 2013-11-05 08:15:05 --> Loader Class Initialized
DEBUG - 2013-11-05 08:15:05 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:15:05 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:15:05 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:15:05 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:15:05 --> Session Class Initialized
DEBUG - 2013-11-05 08:15:05 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:15:05 --> Session routines successfully run
DEBUG - 2013-11-05 08:15:05 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:15:05 --> Controller Class Initialized
DEBUG - 2013-11-05 08:15:05 --> Model Class Initialized
DEBUG - 2013-11-05 08:15:05 --> Model Class Initialized
DEBUG - 2013-11-05 08:15:05 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:15:05 --> after session initialization................
INFO  - 2013-11-05 08:15:05 --> inside the create comment page.................
INFO  - 2013-11-05 08:15:05 --> before inserting into topic comment.................
INFO  - 2013-11-05 08:15:05 --> after inserting into topic comment.................16
INFO  - 2013-11-05 08:15:05 --> the status of the transaction is...........1 the insert id is ......16
INFO  - 2013-11-05 08:15:05 --> inside retrieving comments topic id is 2
INFO  - 2013-11-05 08:15:05 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
WHERE `tc`.`id_topiccomment` > '13'
ORDER BY `tc`.`id_topiccomment` asc
INFO  - 2013-11-05 08:15:05 --> inside retrieving comments topic id is 2
INFO  - 2013-11-05 08:15:05 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
DEBUG - 2013-11-05 08:15:05 --> Final output sent to browser
DEBUG - 2013-11-05 08:15:05 --> Total execution time: 0.1870
DEBUG - 2013-11-05 08:15:18 --> Config Class Initialized
DEBUG - 2013-11-05 08:15:18 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:15:18 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:15:18 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:15:18 --> URI Class Initialized
DEBUG - 2013-11-05 08:15:18 --> Router Class Initialized
DEBUG - 2013-11-05 08:15:18 --> Output Class Initialized
DEBUG - 2013-11-05 08:15:18 --> Security Class Initialized
DEBUG - 2013-11-05 08:15:18 --> Input Class Initialized
DEBUG - 2013-11-05 08:15:18 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:15:18 --> Language Class Initialized
DEBUG - 2013-11-05 08:15:18 --> Loader Class Initialized
DEBUG - 2013-11-05 08:15:18 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:15:18 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:15:18 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:15:18 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:15:18 --> Session Class Initialized
DEBUG - 2013-11-05 08:15:18 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:15:18 --> Session routines successfully run
DEBUG - 2013-11-05 08:15:18 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:15:18 --> Controller Class Initialized
DEBUG - 2013-11-05 08:15:18 --> Model Class Initialized
DEBUG - 2013-11-05 08:15:18 --> Model Class Initialized
DEBUG - 2013-11-05 08:15:18 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:15:18 --> after session initialization................
INFO  - 2013-11-05 08:15:18 --> inside the create comment page.................
INFO  - 2013-11-05 08:15:18 --> before inserting into topic comment.................
INFO  - 2013-11-05 08:15:18 --> after inserting into topic comment.................17
INFO  - 2013-11-05 08:15:18 --> the status of the transaction is...........1 the insert id is ......17
INFO  - 2013-11-05 08:15:18 --> inside retrieving comments topic id is 2
INFO  - 2013-11-05 08:15:18 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
WHERE `tc`.`id_topiccomment` > '16'
ORDER BY `tc`.`id_topiccomment` asc
INFO  - 2013-11-05 08:15:18 --> inside retrieving comments topic id is 2
INFO  - 2013-11-05 08:15:18 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
DEBUG - 2013-11-05 08:15:18 --> Final output sent to browser
DEBUG - 2013-11-05 08:15:18 --> Total execution time: 0.1910
DEBUG - 2013-11-05 08:15:20 --> Config Class Initialized
DEBUG - 2013-11-05 08:15:20 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:15:20 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:15:20 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:15:20 --> URI Class Initialized
DEBUG - 2013-11-05 08:15:20 --> Router Class Initialized
DEBUG - 2013-11-05 08:15:20 --> Output Class Initialized
DEBUG - 2013-11-05 08:15:20 --> Security Class Initialized
DEBUG - 2013-11-05 08:15:20 --> Input Class Initialized
DEBUG - 2013-11-05 08:15:20 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:15:20 --> Language Class Initialized
DEBUG - 2013-11-05 08:15:20 --> Loader Class Initialized
DEBUG - 2013-11-05 08:15:20 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:15:20 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:15:20 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:15:20 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:15:20 --> Session Class Initialized
DEBUG - 2013-11-05 08:15:20 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:15:20 --> Session routines successfully run
DEBUG - 2013-11-05 08:15:20 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:15:20 --> Controller Class Initialized
DEBUG - 2013-11-05 08:15:20 --> Model Class Initialized
DEBUG - 2013-11-05 08:15:20 --> Model Class Initialized
DEBUG - 2013-11-05 08:15:20 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:15:20 --> after session initialization................
INFO  - 2013-11-05 08:15:20 --> Topics ::::::::::===>SELECT `ft`.`id_topicforum`, `ft`.`name`, `ft`.`description`
FROM (`forum_topic` ft)
WHERE `ft`.`id_topicforum` =  '1'
ORDER BY `ft`.`name`
INFO  - 2013-11-05 08:15:20 --> inside retrieving comments member id and forum topic id is 1
INFO  - 2013-11-05 08:15:20 --> 10==============================0
INFO  - 2013-11-05 08:15:20 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-05 08:15:20 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-05 08:15:20 --> inside retrieving comments topic id is 1
INFO  - 2013-11-05 08:15:20 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
DEBUG - 2013-11-05 08:15:20 --> Final output sent to browser
DEBUG - 2013-11-05 08:15:20 --> Total execution time: 0.0830
DEBUG - 2013-11-05 08:15:22 --> Config Class Initialized
DEBUG - 2013-11-05 08:15:22 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:15:22 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:15:22 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:15:22 --> URI Class Initialized
DEBUG - 2013-11-05 08:15:22 --> Router Class Initialized
DEBUG - 2013-11-05 08:15:22 --> Output Class Initialized
DEBUG - 2013-11-05 08:15:22 --> Security Class Initialized
DEBUG - 2013-11-05 08:15:22 --> Input Class Initialized
DEBUG - 2013-11-05 08:15:22 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:15:22 --> Language Class Initialized
DEBUG - 2013-11-05 08:15:22 --> Loader Class Initialized
DEBUG - 2013-11-05 08:15:22 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:15:22 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:15:22 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:15:22 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:15:22 --> Session Class Initialized
DEBUG - 2013-11-05 08:15:22 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:15:22 --> Session routines successfully run
DEBUG - 2013-11-05 08:15:22 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:15:22 --> Controller Class Initialized
DEBUG - 2013-11-05 08:15:22 --> Model Class Initialized
DEBUG - 2013-11-05 08:15:22 --> Model Class Initialized
DEBUG - 2013-11-05 08:15:22 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:15:22 --> after session initialization................
INFO  - 2013-11-05 08:15:22 --> Topics ::::::::::===>SELECT `ft`.`id_topicforum`, `ft`.`name`, `ft`.`description`
FROM (`forum_topic` ft)
WHERE `ft`.`id_topicforum` =  '2'
ORDER BY `ft`.`name`
INFO  - 2013-11-05 08:15:22 --> inside retrieving comments member id and forum topic id is 2
INFO  - 2013-11-05 08:15:22 --> 10==============================0
INFO  - 2013-11-05 08:15:22 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-05 08:15:22 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-05 08:15:22 --> inside retrieving comments topic id is 2
INFO  - 2013-11-05 08:15:22 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
DEBUG - 2013-11-05 08:15:22 --> Final output sent to browser
DEBUG - 2013-11-05 08:15:22 --> Total execution time: 0.0660
DEBUG - 2013-11-05 08:15:23 --> Config Class Initialized
DEBUG - 2013-11-05 08:15:23 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:15:23 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:15:23 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:15:23 --> URI Class Initialized
DEBUG - 2013-11-05 08:15:23 --> Router Class Initialized
DEBUG - 2013-11-05 08:15:23 --> Output Class Initialized
DEBUG - 2013-11-05 08:15:23 --> Security Class Initialized
DEBUG - 2013-11-05 08:15:23 --> Input Class Initialized
DEBUG - 2013-11-05 08:15:23 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:15:23 --> Language Class Initialized
DEBUG - 2013-11-05 08:15:23 --> Loader Class Initialized
DEBUG - 2013-11-05 08:15:23 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:15:23 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:15:23 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:15:23 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:15:23 --> Session Class Initialized
DEBUG - 2013-11-05 08:15:23 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:15:23 --> Session routines successfully run
DEBUG - 2013-11-05 08:15:23 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:15:23 --> Controller Class Initialized
DEBUG - 2013-11-05 08:15:23 --> Model Class Initialized
DEBUG - 2013-11-05 08:15:23 --> Model Class Initialized
DEBUG - 2013-11-05 08:15:23 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:15:23 --> after session initialization................
INFO  - 2013-11-05 08:15:23 --> Topics ::::::::::===>SELECT `ft`.`id_topicforum`, `ft`.`name`, `ft`.`description`
FROM (`forum_topic` ft)
WHERE `ft`.`id_topicforum` =  '1'
ORDER BY `ft`.`name`
INFO  - 2013-11-05 08:15:23 --> inside retrieving comments member id and forum topic id is 1
INFO  - 2013-11-05 08:15:23 --> 10==============================0
INFO  - 2013-11-05 08:15:23 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-05 08:15:23 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-05 08:15:23 --> inside retrieving comments topic id is 1
INFO  - 2013-11-05 08:15:23 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
DEBUG - 2013-11-05 08:15:23 --> Final output sent to browser
DEBUG - 2013-11-05 08:15:23 --> Total execution time: 0.0680
DEBUG - 2013-11-05 08:15:24 --> Config Class Initialized
DEBUG - 2013-11-05 08:15:24 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:15:24 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:15:24 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:15:24 --> URI Class Initialized
DEBUG - 2013-11-05 08:15:24 --> Router Class Initialized
DEBUG - 2013-11-05 08:15:24 --> Output Class Initialized
DEBUG - 2013-11-05 08:15:24 --> Security Class Initialized
DEBUG - 2013-11-05 08:15:24 --> Input Class Initialized
DEBUG - 2013-11-05 08:15:24 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:15:24 --> Language Class Initialized
DEBUG - 2013-11-05 08:15:24 --> Loader Class Initialized
DEBUG - 2013-11-05 08:15:24 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:15:24 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:15:24 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:15:24 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:15:24 --> Session Class Initialized
DEBUG - 2013-11-05 08:15:24 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:15:24 --> Session routines successfully run
DEBUG - 2013-11-05 08:15:24 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:15:24 --> Controller Class Initialized
DEBUG - 2013-11-05 08:15:24 --> Model Class Initialized
DEBUG - 2013-11-05 08:15:24 --> Model Class Initialized
DEBUG - 2013-11-05 08:15:24 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:15:24 --> after session initialization................
INFO  - 2013-11-05 08:15:24 --> inside the retrieve ajax topic comment page.................
INFO  - 2013-11-05 08:15:24 --> inside retrieving comments member id and forum topic id is 1
INFO  - 2013-11-05 08:15:24 --> 10==============================10
INFO  - 2013-11-05 08:15:24 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10, 10
INFO  - 2013-11-05 08:15:24 --> [{"id":"3","comment":"this is not just right","timecreated":"2013-10-24 14:21:05","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"2","comment":"This is just not right...I have had this for a very long time that it drives me crazy","timecreated":"2013-10-24 14:14:47","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"1","comment":"check this comment now....","timecreated":"2013-10-24 14:14:12","membername":"Elvis onuorah","membertypeimage":"profilem1"}]
DEBUG - 2013-11-05 08:15:24 --> Final output sent to browser
DEBUG - 2013-11-05 08:15:24 --> Total execution time: 0.0540
DEBUG - 2013-11-05 08:15:25 --> Config Class Initialized
DEBUG - 2013-11-05 08:15:25 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:15:25 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:15:25 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:15:25 --> URI Class Initialized
DEBUG - 2013-11-05 08:15:25 --> Router Class Initialized
DEBUG - 2013-11-05 08:15:25 --> Output Class Initialized
DEBUG - 2013-11-05 08:15:25 --> Security Class Initialized
DEBUG - 2013-11-05 08:15:25 --> Input Class Initialized
DEBUG - 2013-11-05 08:15:25 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:15:25 --> Language Class Initialized
DEBUG - 2013-11-05 08:15:25 --> Loader Class Initialized
DEBUG - 2013-11-05 08:15:25 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:15:25 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:15:25 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:15:25 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:15:25 --> Session Class Initialized
DEBUG - 2013-11-05 08:15:25 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:15:25 --> Session routines successfully run
DEBUG - 2013-11-05 08:15:25 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:15:25 --> Controller Class Initialized
DEBUG - 2013-11-05 08:15:25 --> Model Class Initialized
DEBUG - 2013-11-05 08:15:25 --> Model Class Initialized
DEBUG - 2013-11-05 08:15:25 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:15:25 --> after session initialization................
INFO  - 2013-11-05 08:15:25 --> inside the retrieve ajax topic comment page.................
INFO  - 2013-11-05 08:15:25 --> inside retrieving comments member id and forum topic id is 1
INFO  - 2013-11-05 08:15:25 --> 10==============================13
INFO  - 2013-11-05 08:15:25 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 13, 10
INFO  - 2013-11-05 08:15:25 --> []
DEBUG - 2013-11-05 08:15:25 --> Final output sent to browser
DEBUG - 2013-11-05 08:15:25 --> Total execution time: 0.0600
DEBUG - 2013-11-05 08:15:39 --> Config Class Initialized
DEBUG - 2013-11-05 08:15:39 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:15:39 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:15:39 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:15:39 --> URI Class Initialized
DEBUG - 2013-11-05 08:15:39 --> Router Class Initialized
DEBUG - 2013-11-05 08:15:39 --> Output Class Initialized
DEBUG - 2013-11-05 08:15:39 --> Security Class Initialized
DEBUG - 2013-11-05 08:15:39 --> Input Class Initialized
DEBUG - 2013-11-05 08:15:39 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:15:39 --> Language Class Initialized
DEBUG - 2013-11-05 08:15:39 --> Loader Class Initialized
DEBUG - 2013-11-05 08:15:39 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:15:39 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:15:39 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:15:39 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:15:39 --> Session Class Initialized
DEBUG - 2013-11-05 08:15:39 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:15:39 --> Session routines successfully run
DEBUG - 2013-11-05 08:15:39 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:15:39 --> Controller Class Initialized
DEBUG - 2013-11-05 08:15:39 --> Model Class Initialized
DEBUG - 2013-11-05 08:15:39 --> Model Class Initialized
DEBUG - 2013-11-05 08:15:39 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:15:39 --> after session initialization................
INFO  - 2013-11-05 08:15:39 --> The forum id is 1
INFO  - 2013-11-05 08:15:39 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-05 08:15:39 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 1
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '1'
ORDER BY `ft`.`name`)
INFO  - 2013-11-05 08:15:39 --> The encoded json is [{"id":"4","text":"Eye Defects","hasChildren":true},{"id":"1","text":"ASTIGMATISM","hasChildren":false},{"id":"2","text":"CATARACT","hasChildren":false}]
DEBUG - 2013-11-05 08:15:39 --> Final output sent to browser
DEBUG - 2013-11-05 08:15:39 --> Total execution time: 0.0660
DEBUG - 2013-11-05 08:15:40 --> Config Class Initialized
DEBUG - 2013-11-05 08:15:40 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:15:40 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:15:40 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:15:40 --> URI Class Initialized
DEBUG - 2013-11-05 08:15:40 --> Router Class Initialized
DEBUG - 2013-11-05 08:15:40 --> Output Class Initialized
DEBUG - 2013-11-05 08:15:40 --> Security Class Initialized
DEBUG - 2013-11-05 08:15:40 --> Input Class Initialized
DEBUG - 2013-11-05 08:15:40 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:15:40 --> Language Class Initialized
DEBUG - 2013-11-05 08:15:40 --> Loader Class Initialized
DEBUG - 2013-11-05 08:15:40 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:15:40 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:15:40 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:15:40 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:15:40 --> Session Class Initialized
DEBUG - 2013-11-05 08:15:40 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:15:40 --> Session routines successfully run
DEBUG - 2013-11-05 08:15:40 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:15:40 --> Controller Class Initialized
DEBUG - 2013-11-05 08:15:40 --> Model Class Initialized
DEBUG - 2013-11-05 08:15:40 --> Model Class Initialized
DEBUG - 2013-11-05 08:15:40 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:15:40 --> after session initialization................
INFO  - 2013-11-05 08:15:40 --> The forum id is 4
INFO  - 2013-11-05 08:15:40 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-05 08:15:40 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 4
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '4'
ORDER BY `ft`.`name`)
INFO  - 2013-11-05 08:15:40 --> The encoded json is [{"id":"6","text":"Long Sight","hasChildren":true}]
DEBUG - 2013-11-05 08:15:40 --> Final output sent to browser
DEBUG - 2013-11-05 08:15:40 --> Total execution time: 0.0880
DEBUG - 2013-11-05 08:15:41 --> Config Class Initialized
DEBUG - 2013-11-05 08:15:41 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:15:41 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:15:41 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:15:41 --> URI Class Initialized
DEBUG - 2013-11-05 08:15:41 --> Router Class Initialized
DEBUG - 2013-11-05 08:15:41 --> Output Class Initialized
DEBUG - 2013-11-05 08:15:41 --> Security Class Initialized
DEBUG - 2013-11-05 08:15:41 --> Input Class Initialized
DEBUG - 2013-11-05 08:15:41 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:15:41 --> Language Class Initialized
DEBUG - 2013-11-05 08:15:41 --> Loader Class Initialized
DEBUG - 2013-11-05 08:15:41 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:15:42 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:15:42 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:15:42 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:15:42 --> Session Class Initialized
DEBUG - 2013-11-05 08:15:42 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:15:42 --> Session routines successfully run
DEBUG - 2013-11-05 08:15:42 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:15:42 --> Controller Class Initialized
DEBUG - 2013-11-05 08:15:42 --> Model Class Initialized
DEBUG - 2013-11-05 08:15:42 --> Model Class Initialized
DEBUG - 2013-11-05 08:15:42 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:15:42 --> after session initialization................
INFO  - 2013-11-05 08:15:42 --> The forum id is 6
INFO  - 2013-11-05 08:15:42 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-05 08:15:42 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 6
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '6'
ORDER BY `ft`.`name`)
INFO  - 2013-11-05 08:15:42 --> The encoded json is [{"id":"8","text":"Complicated Long sight","hasChildren":true},{"id":"9","text":"Non complicated long sight","hasChildren":true}]
DEBUG - 2013-11-05 08:15:42 --> Final output sent to browser
DEBUG - 2013-11-05 08:15:42 --> Total execution time: 0.0620
DEBUG - 2013-11-05 08:15:44 --> Config Class Initialized
DEBUG - 2013-11-05 08:15:44 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:15:44 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:15:44 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:15:44 --> URI Class Initialized
DEBUG - 2013-11-05 08:15:44 --> Router Class Initialized
DEBUG - 2013-11-05 08:15:44 --> Output Class Initialized
DEBUG - 2013-11-05 08:15:44 --> Security Class Initialized
DEBUG - 2013-11-05 08:15:44 --> Input Class Initialized
DEBUG - 2013-11-05 08:15:44 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:15:44 --> Language Class Initialized
DEBUG - 2013-11-05 08:15:44 --> Loader Class Initialized
DEBUG - 2013-11-05 08:15:44 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:15:44 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:15:44 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:15:44 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:15:44 --> Session Class Initialized
DEBUG - 2013-11-05 08:15:44 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:15:44 --> Session routines successfully run
DEBUG - 2013-11-05 08:15:44 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:15:44 --> Controller Class Initialized
DEBUG - 2013-11-05 08:15:44 --> Model Class Initialized
DEBUG - 2013-11-05 08:15:44 --> Model Class Initialized
DEBUG - 2013-11-05 08:15:44 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:15:44 --> after session initialization................
INFO  - 2013-11-05 08:15:44 --> The forum id is 9
INFO  - 2013-11-05 08:15:44 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-05 08:15:44 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 9
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '9'
ORDER BY `ft`.`name`)
INFO  - 2013-11-05 08:15:44 --> The encoded json is [{"id":"10","text":"Ex- coomplicated long sight","hasChildren":true}]
DEBUG - 2013-11-05 08:15:44 --> Final output sent to browser
DEBUG - 2013-11-05 08:15:44 --> Total execution time: 0.0460
DEBUG - 2013-11-05 08:15:46 --> Config Class Initialized
DEBUG - 2013-11-05 08:15:46 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:15:46 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:15:46 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:15:46 --> URI Class Initialized
DEBUG - 2013-11-05 08:15:46 --> Router Class Initialized
DEBUG - 2013-11-05 08:15:46 --> Output Class Initialized
DEBUG - 2013-11-05 08:15:46 --> Security Class Initialized
DEBUG - 2013-11-05 08:15:46 --> Input Class Initialized
DEBUG - 2013-11-05 08:15:46 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:15:46 --> Language Class Initialized
DEBUG - 2013-11-05 08:15:46 --> Loader Class Initialized
DEBUG - 2013-11-05 08:15:46 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:15:46 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:15:46 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:15:46 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:15:46 --> Session Class Initialized
DEBUG - 2013-11-05 08:15:46 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:15:46 --> Session routines successfully run
DEBUG - 2013-11-05 08:15:46 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:15:46 --> Controller Class Initialized
DEBUG - 2013-11-05 08:15:46 --> Model Class Initialized
DEBUG - 2013-11-05 08:15:46 --> Model Class Initialized
DEBUG - 2013-11-05 08:15:46 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:15:46 --> after session initialization................
INFO  - 2013-11-05 08:15:46 --> The forum id is 10
INFO  - 2013-11-05 08:15:46 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-05 08:15:46 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 10
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '10'
ORDER BY `ft`.`name`)
INFO  - 2013-11-05 08:15:46 --> The encoded json is [{"id":"11","text":"Supra-complicated long sight","hasChildren":true}]
DEBUG - 2013-11-05 08:15:46 --> Final output sent to browser
DEBUG - 2013-11-05 08:15:46 --> Total execution time: 0.0800
DEBUG - 2013-11-05 08:15:48 --> Config Class Initialized
DEBUG - 2013-11-05 08:15:48 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:15:48 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:15:48 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:15:48 --> URI Class Initialized
DEBUG - 2013-11-05 08:15:48 --> Router Class Initialized
DEBUG - 2013-11-05 08:15:48 --> Output Class Initialized
DEBUG - 2013-11-05 08:15:48 --> Security Class Initialized
DEBUG - 2013-11-05 08:15:48 --> Input Class Initialized
DEBUG - 2013-11-05 08:15:48 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:15:48 --> Language Class Initialized
DEBUG - 2013-11-05 08:15:48 --> Loader Class Initialized
DEBUG - 2013-11-05 08:15:48 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:15:48 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:15:48 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:15:48 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:15:48 --> Session Class Initialized
DEBUG - 2013-11-05 08:15:48 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:15:48 --> Session routines successfully run
DEBUG - 2013-11-05 08:15:48 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:15:48 --> Controller Class Initialized
DEBUG - 2013-11-05 08:15:48 --> Model Class Initialized
DEBUG - 2013-11-05 08:15:48 --> Model Class Initialized
DEBUG - 2013-11-05 08:15:48 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:15:48 --> after session initialization................
INFO  - 2013-11-05 08:15:48 --> The forum id is 11
INFO  - 2013-11-05 08:15:48 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-05 08:15:48 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 11
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '11'
ORDER BY `ft`.`name`)
INFO  - 2013-11-05 08:15:48 --> The encoded json is []
DEBUG - 2013-11-05 08:15:48 --> Final output sent to browser
DEBUG - 2013-11-05 08:15:48 --> Total execution time: 0.0580
DEBUG - 2013-11-05 08:15:50 --> Config Class Initialized
DEBUG - 2013-11-05 08:15:50 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:15:50 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:15:50 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:15:50 --> URI Class Initialized
DEBUG - 2013-11-05 08:15:50 --> Router Class Initialized
DEBUG - 2013-11-05 08:15:50 --> Output Class Initialized
DEBUG - 2013-11-05 08:15:50 --> Security Class Initialized
DEBUG - 2013-11-05 08:15:50 --> Input Class Initialized
DEBUG - 2013-11-05 08:15:50 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:15:50 --> Language Class Initialized
DEBUG - 2013-11-05 08:15:50 --> Loader Class Initialized
DEBUG - 2013-11-05 08:15:50 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:15:50 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:15:50 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:15:50 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:15:50 --> Session Class Initialized
DEBUG - 2013-11-05 08:15:50 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:15:50 --> Session routines successfully run
DEBUG - 2013-11-05 08:15:50 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:15:50 --> Controller Class Initialized
DEBUG - 2013-11-05 08:15:50 --> Model Class Initialized
DEBUG - 2013-11-05 08:15:50 --> Model Class Initialized
DEBUG - 2013-11-05 08:15:50 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:15:50 --> after session initialization................
INFO  - 2013-11-05 08:15:50 --> The forum id is 8
INFO  - 2013-11-05 08:15:50 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-05 08:15:50 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 8
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '8'
ORDER BY `ft`.`name`)
INFO  - 2013-11-05 08:15:50 --> The encoded json is []
DEBUG - 2013-11-05 08:15:50 --> Final output sent to browser
DEBUG - 2013-11-05 08:15:50 --> Total execution time: 0.0510
DEBUG - 2013-11-05 08:30:50 --> Config Class Initialized
DEBUG - 2013-11-05 08:30:50 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:30:50 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:30:50 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:30:50 --> URI Class Initialized
DEBUG - 2013-11-05 08:30:50 --> Router Class Initialized
DEBUG - 2013-11-05 08:30:50 --> Output Class Initialized
DEBUG - 2013-11-05 08:30:50 --> Security Class Initialized
DEBUG - 2013-11-05 08:30:50 --> Input Class Initialized
DEBUG - 2013-11-05 08:30:50 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:30:50 --> Language Class Initialized
DEBUG - 2013-11-05 08:30:50 --> Loader Class Initialized
DEBUG - 2013-11-05 08:30:50 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:30:50 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:30:50 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:30:50 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:30:51 --> Session Class Initialized
DEBUG - 2013-11-05 08:30:51 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:30:51 --> Session routines successfully run
DEBUG - 2013-11-05 08:30:51 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:30:51 --> Controller Class Initialized
DEBUG - 2013-11-05 08:30:51 --> Model Class Initialized
DEBUG - 2013-11-05 08:30:51 --> Model Class Initialized
DEBUG - 2013-11-05 08:30:51 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:30:51 --> after session initialization................
INFO  - 2013-11-05 08:30:51 --> inside retrieve most commented forum topic 
INFO  - 2013-11-05 08:30:51 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
INFO  - 2013-11-05 08:30:51 --> inside retrieving first 20 topics 
INFO  - 2013-11-05 08:30:51 --> SELECT `t`.`id_topicforum`, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
LIMIT 20
INFO  - 2013-11-05 08:30:51 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-05 08:30:51 --> SELECT `ff`.`id_forum` as id, `ff`.`name`, count(f.id_forum) as sub_forum
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` is null 
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`
INFO  - 2013-11-05 08:30:51 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-05 08:30:51 --> inside retrieving comments topic id and drug id is 1
INFO  - 2013-11-05 08:30:51 --> SELECT `tc`.`id_topiccomment`, `tc`.`comment`, `tc`.`timecreated`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-05 08:30:51 --> inside retrieving comments topic id 1
INFO  - 2013-11-05 08:30:51 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
INFO  - 2013-11-05 08:30:51 --> after forums has been clicked.................
INFO  - 2013-11-05 08:30:51 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-11-05 08:30:51 --> File loaded: ../pharmaray-application/views/forum.php
DEBUG - 2013-11-05 08:30:51 --> Final output sent to browser
DEBUG - 2013-11-05 08:30:51 --> Total execution time: 1.0781
DEBUG - 2013-11-05 08:30:51 --> Config Class Initialized
DEBUG - 2013-11-05 08:30:51 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:30:51 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:30:51 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:30:51 --> URI Class Initialized
DEBUG - 2013-11-05 08:30:51 --> Router Class Initialized
DEBUG - 2013-11-05 08:30:51 --> Output Class Initialized
DEBUG - 2013-11-05 08:30:51 --> Security Class Initialized
DEBUG - 2013-11-05 08:30:51 --> Input Class Initialized
DEBUG - 2013-11-05 08:30:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:30:51 --> Language Class Initialized
DEBUG - 2013-11-05 08:30:51 --> Loader Class Initialized
DEBUG - 2013-11-05 08:30:51 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:30:51 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:30:51 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:30:51 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:30:52 --> Session Class Initialized
DEBUG - 2013-11-05 08:30:52 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:30:52 --> Session routines successfully run
DEBUG - 2013-11-05 08:30:52 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:30:52 --> Controller Class Initialized
DEBUG - 2013-11-05 08:30:52 --> Model Class Initialized
DEBUG - 2013-11-05 08:30:52 --> Model Class Initialized
DEBUG - 2013-11-05 08:30:52 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:30:52 --> after session initialization................
ERROR - 2013-11-05 08:30:52 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-05 08:30:52 --> Config Class Initialized
DEBUG - 2013-11-05 08:30:52 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:30:52 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:30:52 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:30:52 --> URI Class Initialized
DEBUG - 2013-11-05 08:30:52 --> Router Class Initialized
ERROR - 2013-11-05 08:30:52 --> 404 Page Not Found --> css
DEBUG - 2013-11-05 08:30:55 --> Config Class Initialized
DEBUG - 2013-11-05 08:30:55 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:30:55 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:30:55 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:30:55 --> URI Class Initialized
DEBUG - 2013-11-05 08:30:55 --> Router Class Initialized
DEBUG - 2013-11-05 08:30:55 --> Output Class Initialized
DEBUG - 2013-11-05 08:30:55 --> Security Class Initialized
DEBUG - 2013-11-05 08:30:55 --> Input Class Initialized
DEBUG - 2013-11-05 08:30:55 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:30:55 --> Language Class Initialized
DEBUG - 2013-11-05 08:30:55 --> Loader Class Initialized
DEBUG - 2013-11-05 08:30:55 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:30:55 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:30:55 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:30:55 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:30:55 --> Session Class Initialized
DEBUG - 2013-11-05 08:30:55 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:30:55 --> Session routines successfully run
DEBUG - 2013-11-05 08:30:55 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:30:55 --> Controller Class Initialized
DEBUG - 2013-11-05 08:30:55 --> Model Class Initialized
DEBUG - 2013-11-05 08:30:55 --> Model Class Initialized
DEBUG - 2013-11-05 08:30:55 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:30:55 --> after session initialization................
INFO  - 2013-11-05 08:30:55 --> The forum id is 2
INFO  - 2013-11-05 08:30:55 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-05 08:30:55 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 2
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '2'
ORDER BY `ft`.`name`)
INFO  - 2013-11-05 08:30:55 --> The encoded json is [{"id":"5","text":"ASUU Strike","hasChildren":true}]
DEBUG - 2013-11-05 08:30:55 --> Final output sent to browser
DEBUG - 2013-11-05 08:30:55 --> Total execution time: 0.0530
DEBUG - 2013-11-05 08:30:58 --> Config Class Initialized
DEBUG - 2013-11-05 08:30:58 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:30:58 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:30:58 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:30:58 --> URI Class Initialized
DEBUG - 2013-11-05 08:30:58 --> Router Class Initialized
DEBUG - 2013-11-05 08:30:58 --> Output Class Initialized
DEBUG - 2013-11-05 08:30:58 --> Security Class Initialized
DEBUG - 2013-11-05 08:30:58 --> Input Class Initialized
DEBUG - 2013-11-05 08:30:58 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:30:58 --> Language Class Initialized
DEBUG - 2013-11-05 08:30:58 --> Loader Class Initialized
DEBUG - 2013-11-05 08:30:58 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:30:58 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:30:58 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:30:58 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:30:58 --> Session Class Initialized
DEBUG - 2013-11-05 08:30:58 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:30:58 --> Session routines successfully run
DEBUG - 2013-11-05 08:30:58 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:30:58 --> Controller Class Initialized
DEBUG - 2013-11-05 08:30:58 --> Model Class Initialized
DEBUG - 2013-11-05 08:30:58 --> Model Class Initialized
DEBUG - 2013-11-05 08:30:58 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:30:58 --> after session initialization................
INFO  - 2013-11-05 08:30:58 --> The forum id is 5
INFO  - 2013-11-05 08:30:58 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-05 08:30:58 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 5
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '5'
ORDER BY `ft`.`name`)
INFO  - 2013-11-05 08:30:58 --> The encoded json is [{"id":"7","text":"Increase In school fees","hasChildren":true},{"id":"12","text":"UNN DEMONSTRATION HALTED","hasChildren":false}]
DEBUG - 2013-11-05 08:30:58 --> Final output sent to browser
DEBUG - 2013-11-05 08:30:58 --> Total execution time: 0.0550
DEBUG - 2013-11-05 08:31:11 --> Config Class Initialized
DEBUG - 2013-11-05 08:31:11 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:31:11 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:31:11 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:31:11 --> URI Class Initialized
DEBUG - 2013-11-05 08:31:11 --> Router Class Initialized
DEBUG - 2013-11-05 08:31:11 --> Output Class Initialized
DEBUG - 2013-11-05 08:31:11 --> Security Class Initialized
DEBUG - 2013-11-05 08:31:11 --> Input Class Initialized
DEBUG - 2013-11-05 08:31:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:31:11 --> Language Class Initialized
DEBUG - 2013-11-05 08:31:11 --> Loader Class Initialized
DEBUG - 2013-11-05 08:31:11 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:31:11 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:31:11 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:31:11 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:31:11 --> Session Class Initialized
DEBUG - 2013-11-05 08:31:11 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:31:11 --> Session routines successfully run
DEBUG - 2013-11-05 08:31:11 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:31:11 --> Controller Class Initialized
DEBUG - 2013-11-05 08:31:11 --> Model Class Initialized
DEBUG - 2013-11-05 08:31:11 --> Model Class Initialized
DEBUG - 2013-11-05 08:31:11 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:31:11 --> after session initialization................
INFO  - 2013-11-05 08:31:11 --> The forum id is 7
INFO  - 2013-11-05 08:31:11 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-05 08:31:11 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 7
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '7'
ORDER BY `ft`.`name`)
INFO  - 2013-11-05 08:31:11 --> The encoded json is [{"id":"11","text":"BABCOOK FEES","hasChildren":false}]
DEBUG - 2013-11-05 08:31:11 --> Final output sent to browser
DEBUG - 2013-11-05 08:31:11 --> Total execution time: 0.0500
DEBUG - 2013-11-05 08:31:14 --> Config Class Initialized
DEBUG - 2013-11-05 08:31:14 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:31:14 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:31:14 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:31:14 --> URI Class Initialized
DEBUG - 2013-11-05 08:31:14 --> Router Class Initialized
DEBUG - 2013-11-05 08:31:14 --> Output Class Initialized
DEBUG - 2013-11-05 08:31:14 --> Security Class Initialized
DEBUG - 2013-11-05 08:31:14 --> Input Class Initialized
DEBUG - 2013-11-05 08:31:14 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:31:14 --> Language Class Initialized
DEBUG - 2013-11-05 08:31:14 --> Loader Class Initialized
DEBUG - 2013-11-05 08:31:14 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:31:14 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:31:14 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:31:14 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:31:14 --> Session Class Initialized
DEBUG - 2013-11-05 08:31:14 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:31:14 --> Session routines successfully run
DEBUG - 2013-11-05 08:31:14 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:31:14 --> Controller Class Initialized
DEBUG - 2013-11-05 08:31:14 --> Model Class Initialized
DEBUG - 2013-11-05 08:31:14 --> Model Class Initialized
DEBUG - 2013-11-05 08:31:14 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:31:14 --> after session initialization................
INFO  - 2013-11-05 08:31:14 --> Topics ::::::::::===>SELECT `ft`.`id_topicforum`, `ft`.`name`, `ft`.`description`
FROM (`forum_topic` ft)
WHERE `ft`.`id_topicforum` =  '12'
ORDER BY `ft`.`name`
INFO  - 2013-11-05 08:31:14 --> inside retrieving comments member id and forum topic id is 12
INFO  - 2013-11-05 08:31:14 --> 10==============================0
INFO  - 2013-11-05 08:31:14 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 12
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-05 08:31:14 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 12
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-05 08:31:14 --> inside retrieving comments topic id is 12
INFO  - 2013-11-05 08:31:14 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 12
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
DEBUG - 2013-11-05 08:31:14 --> Final output sent to browser
DEBUG - 2013-11-05 08:31:14 --> Total execution time: 0.0630
DEBUG - 2013-11-05 08:31:24 --> Config Class Initialized
DEBUG - 2013-11-05 08:31:24 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:31:24 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:31:24 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:31:24 --> URI Class Initialized
DEBUG - 2013-11-05 08:31:24 --> Router Class Initialized
DEBUG - 2013-11-05 08:31:24 --> Output Class Initialized
DEBUG - 2013-11-05 08:31:24 --> Security Class Initialized
DEBUG - 2013-11-05 08:31:24 --> Input Class Initialized
DEBUG - 2013-11-05 08:31:24 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:31:24 --> Language Class Initialized
DEBUG - 2013-11-05 08:31:24 --> Loader Class Initialized
DEBUG - 2013-11-05 08:31:24 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:31:24 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:31:24 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:31:24 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:31:24 --> Session Class Initialized
DEBUG - 2013-11-05 08:31:24 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:31:24 --> Session routines successfully run
DEBUG - 2013-11-05 08:31:24 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:31:24 --> Controller Class Initialized
DEBUG - 2013-11-05 08:31:24 --> Model Class Initialized
DEBUG - 2013-11-05 08:31:24 --> Model Class Initialized
DEBUG - 2013-11-05 08:31:24 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:31:24 --> after session initialization................
INFO  - 2013-11-05 08:31:24 --> inside the create comment page.................
INFO  - 2013-11-05 08:31:24 --> before inserting into topic comment.................
INFO  - 2013-11-05 08:31:24 --> after inserting into topic comment.................18
INFO  - 2013-11-05 08:31:24 --> the status of the transaction is...........1 the insert id is ......18
INFO  - 2013-11-05 08:31:24 --> inside retrieving comments topic id is 12
INFO  - 2013-11-05 08:31:24 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 12
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
WHERE `tc`.`id_topiccomment` > '17'
ORDER BY `tc`.`id_topiccomment` asc
INFO  - 2013-11-05 08:31:24 --> inside retrieving comments topic id is 12
INFO  - 2013-11-05 08:31:24 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 12
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
DEBUG - 2013-11-05 08:31:24 --> Final output sent to browser
DEBUG - 2013-11-05 08:31:24 --> Total execution time: 0.0960
DEBUG - 2013-11-05 08:31:26 --> Config Class Initialized
DEBUG - 2013-11-05 08:31:26 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:31:26 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:31:26 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:31:26 --> URI Class Initialized
DEBUG - 2013-11-05 08:31:26 --> Router Class Initialized
DEBUG - 2013-11-05 08:31:26 --> Output Class Initialized
DEBUG - 2013-11-05 08:31:26 --> Security Class Initialized
DEBUG - 2013-11-05 08:31:26 --> Input Class Initialized
DEBUG - 2013-11-05 08:31:26 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:31:26 --> Language Class Initialized
DEBUG - 2013-11-05 08:31:26 --> Loader Class Initialized
DEBUG - 2013-11-05 08:31:26 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:31:26 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:31:26 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:31:26 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:31:26 --> Session Class Initialized
DEBUG - 2013-11-05 08:31:26 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:31:26 --> Session routines successfully run
DEBUG - 2013-11-05 08:31:26 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:31:26 --> Controller Class Initialized
DEBUG - 2013-11-05 08:31:26 --> Model Class Initialized
DEBUG - 2013-11-05 08:31:26 --> Model Class Initialized
DEBUG - 2013-11-05 08:31:26 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:31:26 --> after session initialization................
INFO  - 2013-11-05 08:31:26 --> Topics ::::::::::===>SELECT `ft`.`id_topicforum`, `ft`.`name`, `ft`.`description`
FROM (`forum_topic` ft)
WHERE `ft`.`id_topicforum` =  '11'
ORDER BY `ft`.`name`
INFO  - 2013-11-05 08:31:26 --> inside retrieving comments member id and forum topic id is 11
INFO  - 2013-11-05 08:31:26 --> 10==============================0
INFO  - 2013-11-05 08:31:26 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 11
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-05 08:31:26 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 11
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-05 08:31:26 --> inside retrieving comments topic id is 11
INFO  - 2013-11-05 08:31:26 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 11
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
DEBUG - 2013-11-05 08:31:26 --> Final output sent to browser
DEBUG - 2013-11-05 08:31:26 --> Total execution time: 0.0670
DEBUG - 2013-11-05 08:31:33 --> Config Class Initialized
DEBUG - 2013-11-05 08:31:33 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:31:33 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:31:33 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:31:33 --> URI Class Initialized
DEBUG - 2013-11-05 08:31:33 --> Router Class Initialized
DEBUG - 2013-11-05 08:31:33 --> Output Class Initialized
DEBUG - 2013-11-05 08:31:33 --> Security Class Initialized
DEBUG - 2013-11-05 08:31:33 --> Input Class Initialized
DEBUG - 2013-11-05 08:31:33 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:31:33 --> Language Class Initialized
DEBUG - 2013-11-05 08:31:33 --> Loader Class Initialized
DEBUG - 2013-11-05 08:31:33 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:31:33 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:31:33 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:31:33 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:31:33 --> Session Class Initialized
DEBUG - 2013-11-05 08:31:33 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:31:33 --> Session routines successfully run
DEBUG - 2013-11-05 08:31:33 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:31:33 --> Controller Class Initialized
DEBUG - 2013-11-05 08:31:33 --> Model Class Initialized
DEBUG - 2013-11-05 08:31:33 --> Model Class Initialized
DEBUG - 2013-11-05 08:31:33 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:31:33 --> after session initialization................
INFO  - 2013-11-05 08:31:33 --> inside the create comment page.................
INFO  - 2013-11-05 08:31:33 --> before inserting into topic comment.................
INFO  - 2013-11-05 08:31:33 --> after inserting into topic comment.................19
INFO  - 2013-11-05 08:31:33 --> the status of the transaction is...........1 the insert id is ......19
INFO  - 2013-11-05 08:31:33 --> inside retrieving comments topic id is 11
INFO  - 2013-11-05 08:31:33 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 11
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
WHERE `tc`.`id_topiccomment` > '18'
ORDER BY `tc`.`id_topiccomment` asc
INFO  - 2013-11-05 08:31:33 --> inside retrieving comments topic id is 11
INFO  - 2013-11-05 08:31:33 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 11
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
DEBUG - 2013-11-05 08:31:33 --> Final output sent to browser
DEBUG - 2013-11-05 08:31:33 --> Total execution time: 0.1520
DEBUG - 2013-11-05 08:31:38 --> Config Class Initialized
DEBUG - 2013-11-05 08:31:38 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:31:38 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:31:38 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:31:38 --> URI Class Initialized
DEBUG - 2013-11-05 08:31:38 --> Router Class Initialized
DEBUG - 2013-11-05 08:31:38 --> Output Class Initialized
DEBUG - 2013-11-05 08:31:38 --> Security Class Initialized
DEBUG - 2013-11-05 08:31:38 --> Input Class Initialized
DEBUG - 2013-11-05 08:31:38 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:31:38 --> Language Class Initialized
DEBUG - 2013-11-05 08:31:38 --> Loader Class Initialized
DEBUG - 2013-11-05 08:31:38 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:31:38 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:31:38 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:31:38 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:31:38 --> Session Class Initialized
DEBUG - 2013-11-05 08:31:38 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:31:38 --> Session routines successfully run
DEBUG - 2013-11-05 08:31:38 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:31:38 --> Controller Class Initialized
DEBUG - 2013-11-05 08:31:38 --> Model Class Initialized
DEBUG - 2013-11-05 08:31:38 --> Model Class Initialized
DEBUG - 2013-11-05 08:31:38 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:31:38 --> after session initialization................
INFO  - 2013-11-05 08:31:38 --> The forum id is 1
INFO  - 2013-11-05 08:31:38 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-05 08:31:38 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 1
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '1'
ORDER BY `ft`.`name`)
INFO  - 2013-11-05 08:31:38 --> The encoded json is [{"id":"4","text":"Eye Defects","hasChildren":true},{"id":"1","text":"ASTIGMATISM","hasChildren":false},{"id":"2","text":"CATARACT","hasChildren":false}]
DEBUG - 2013-11-05 08:31:38 --> Final output sent to browser
DEBUG - 2013-11-05 08:31:38 --> Total execution time: 0.0650
DEBUG - 2013-11-05 08:31:40 --> Config Class Initialized
DEBUG - 2013-11-05 08:31:40 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:31:40 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:31:40 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:31:40 --> URI Class Initialized
DEBUG - 2013-11-05 08:31:40 --> Router Class Initialized
DEBUG - 2013-11-05 08:31:40 --> Output Class Initialized
DEBUG - 2013-11-05 08:31:40 --> Security Class Initialized
DEBUG - 2013-11-05 08:31:40 --> Input Class Initialized
DEBUG - 2013-11-05 08:31:40 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:31:40 --> Language Class Initialized
DEBUG - 2013-11-05 08:31:40 --> Loader Class Initialized
DEBUG - 2013-11-05 08:31:40 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:31:40 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:31:40 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:31:40 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:31:40 --> Session Class Initialized
DEBUG - 2013-11-05 08:31:40 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:31:40 --> Session routines successfully run
DEBUG - 2013-11-05 08:31:40 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:31:40 --> Controller Class Initialized
DEBUG - 2013-11-05 08:31:40 --> Model Class Initialized
DEBUG - 2013-11-05 08:31:40 --> Model Class Initialized
DEBUG - 2013-11-05 08:31:40 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:31:40 --> after session initialization................
INFO  - 2013-11-05 08:31:40 --> The forum id is 4
INFO  - 2013-11-05 08:31:40 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-05 08:31:40 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 4
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '4'
ORDER BY `ft`.`name`)
INFO  - 2013-11-05 08:31:40 --> The encoded json is [{"id":"6","text":"Long Sight","hasChildren":true},{"id":"3","text":"CONJUCTIVITIS","hasChildren":false},{"id":"5","text":"BLUE PUPILS","hasChildren":false},{"id":"6","text":"BULDGED EYES","hasChildren":false},{"id":"10","text":"NIGHT BLINDNESS","hasChildren":false}]
DEBUG - 2013-11-05 08:31:40 --> Final output sent to browser
DEBUG - 2013-11-05 08:31:40 --> Total execution time: 0.0620
DEBUG - 2013-11-05 08:31:43 --> Config Class Initialized
DEBUG - 2013-11-05 08:31:43 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:31:43 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:31:43 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:31:43 --> URI Class Initialized
DEBUG - 2013-11-05 08:31:43 --> Router Class Initialized
DEBUG - 2013-11-05 08:31:43 --> Output Class Initialized
DEBUG - 2013-11-05 08:31:43 --> Security Class Initialized
DEBUG - 2013-11-05 08:31:43 --> Input Class Initialized
DEBUG - 2013-11-05 08:31:43 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:31:43 --> Language Class Initialized
DEBUG - 2013-11-05 08:31:43 --> Loader Class Initialized
DEBUG - 2013-11-05 08:31:43 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:31:43 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:31:43 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:31:43 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:31:43 --> Session Class Initialized
DEBUG - 2013-11-05 08:31:43 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:31:43 --> Session routines successfully run
DEBUG - 2013-11-05 08:31:43 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:31:43 --> Controller Class Initialized
DEBUG - 2013-11-05 08:31:43 --> Model Class Initialized
DEBUG - 2013-11-05 08:31:43 --> Model Class Initialized
DEBUG - 2013-11-05 08:31:43 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:31:43 --> after session initialization................
INFO  - 2013-11-05 08:31:43 --> Topics ::::::::::===>SELECT `ft`.`id_topicforum`, `ft`.`name`, `ft`.`description`
FROM (`forum_topic` ft)
WHERE `ft`.`id_topicforum` =  '10'
ORDER BY `ft`.`name`
INFO  - 2013-11-05 08:31:43 --> inside retrieving comments member id and forum topic id is 10
INFO  - 2013-11-05 08:31:43 --> 10==============================0
INFO  - 2013-11-05 08:31:43 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 10
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-05 08:31:43 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 10
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-05 08:31:43 --> inside retrieving comments topic id is 10
INFO  - 2013-11-05 08:31:43 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 10
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
DEBUG - 2013-11-05 08:31:43 --> Final output sent to browser
DEBUG - 2013-11-05 08:31:43 --> Total execution time: 0.0660
DEBUG - 2013-11-05 08:32:02 --> Config Class Initialized
DEBUG - 2013-11-05 08:32:02 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:32:02 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:32:02 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:32:02 --> URI Class Initialized
DEBUG - 2013-11-05 08:32:02 --> Router Class Initialized
DEBUG - 2013-11-05 08:32:02 --> Output Class Initialized
DEBUG - 2013-11-05 08:32:02 --> Security Class Initialized
DEBUG - 2013-11-05 08:32:02 --> Input Class Initialized
DEBUG - 2013-11-05 08:32:02 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:32:02 --> Language Class Initialized
DEBUG - 2013-11-05 08:32:02 --> Loader Class Initialized
DEBUG - 2013-11-05 08:32:02 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:32:02 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:32:02 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:32:02 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:32:02 --> Session Class Initialized
DEBUG - 2013-11-05 08:32:02 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:32:02 --> Session routines successfully run
DEBUG - 2013-11-05 08:32:02 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:32:02 --> Controller Class Initialized
DEBUG - 2013-11-05 08:32:02 --> Model Class Initialized
DEBUG - 2013-11-05 08:32:02 --> Model Class Initialized
DEBUG - 2013-11-05 08:32:02 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:32:02 --> after session initialization................
INFO  - 2013-11-05 08:32:02 --> inside the create comment page.................
INFO  - 2013-11-05 08:32:02 --> before inserting into topic comment.................
INFO  - 2013-11-05 08:32:02 --> after inserting into topic comment.................20
INFO  - 2013-11-05 08:32:02 --> the status of the transaction is...........1 the insert id is ......20
INFO  - 2013-11-05 08:32:02 --> inside retrieving comments topic id is 10
INFO  - 2013-11-05 08:32:02 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 10
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
WHERE `tc`.`id_topiccomment` > '19'
ORDER BY `tc`.`id_topiccomment` asc
INFO  - 2013-11-05 08:32:02 --> inside retrieving comments topic id is 10
INFO  - 2013-11-05 08:32:02 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 10
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
DEBUG - 2013-11-05 08:32:02 --> Final output sent to browser
DEBUG - 2013-11-05 08:32:02 --> Total execution time: 0.1360
DEBUG - 2013-11-05 08:32:12 --> Config Class Initialized
DEBUG - 2013-11-05 08:32:12 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:32:12 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:32:12 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:32:12 --> URI Class Initialized
DEBUG - 2013-11-05 08:32:12 --> Router Class Initialized
DEBUG - 2013-11-05 08:32:12 --> Output Class Initialized
DEBUG - 2013-11-05 08:32:12 --> Security Class Initialized
DEBUG - 2013-11-05 08:32:12 --> Input Class Initialized
DEBUG - 2013-11-05 08:32:12 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:32:12 --> Language Class Initialized
DEBUG - 2013-11-05 08:32:12 --> Loader Class Initialized
DEBUG - 2013-11-05 08:32:12 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:32:12 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:32:12 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:32:12 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:32:12 --> Session Class Initialized
DEBUG - 2013-11-05 08:32:12 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:32:12 --> Session routines successfully run
DEBUG - 2013-11-05 08:32:12 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:32:12 --> Controller Class Initialized
DEBUG - 2013-11-05 08:32:12 --> Model Class Initialized
DEBUG - 2013-11-05 08:32:12 --> Model Class Initialized
DEBUG - 2013-11-05 08:32:12 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:32:12 --> after session initialization................
INFO  - 2013-11-05 08:32:12 --> Topics ::::::::::===>SELECT `ft`.`id_topicforum`, `ft`.`name`, `ft`.`description`
FROM (`forum_topic` ft)
WHERE `ft`.`id_topicforum` =  '6'
ORDER BY `ft`.`name`
INFO  - 2013-11-05 08:32:12 --> inside retrieving comments member id and forum topic id is 6
INFO  - 2013-11-05 08:32:12 --> 10==============================0
INFO  - 2013-11-05 08:32:12 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 6
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-05 08:32:12 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 6
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-05 08:32:12 --> inside retrieving comments topic id is 6
INFO  - 2013-11-05 08:32:12 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 6
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
DEBUG - 2013-11-05 08:32:12 --> Final output sent to browser
DEBUG - 2013-11-05 08:32:12 --> Total execution time: 0.0650
DEBUG - 2013-11-05 08:32:28 --> Config Class Initialized
DEBUG - 2013-11-05 08:32:28 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:32:28 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:32:28 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:32:28 --> URI Class Initialized
DEBUG - 2013-11-05 08:32:28 --> Router Class Initialized
DEBUG - 2013-11-05 08:32:28 --> Output Class Initialized
DEBUG - 2013-11-05 08:32:28 --> Security Class Initialized
DEBUG - 2013-11-05 08:32:28 --> Input Class Initialized
DEBUG - 2013-11-05 08:32:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:32:28 --> Language Class Initialized
DEBUG - 2013-11-05 08:32:28 --> Loader Class Initialized
DEBUG - 2013-11-05 08:32:28 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:32:28 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:32:28 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:32:28 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:32:28 --> Session Class Initialized
DEBUG - 2013-11-05 08:32:28 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:32:28 --> Session routines successfully run
DEBUG - 2013-11-05 08:32:28 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:32:28 --> Controller Class Initialized
DEBUG - 2013-11-05 08:32:28 --> Model Class Initialized
DEBUG - 2013-11-05 08:32:28 --> Model Class Initialized
DEBUG - 2013-11-05 08:32:28 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:32:28 --> after session initialization................
INFO  - 2013-11-05 08:32:28 --> inside the create comment page.................
INFO  - 2013-11-05 08:32:28 --> before inserting into topic comment.................
INFO  - 2013-11-05 08:32:28 --> after inserting into topic comment.................21
INFO  - 2013-11-05 08:32:28 --> the status of the transaction is...........1 the insert id is ......21
INFO  - 2013-11-05 08:32:28 --> inside retrieving comments topic id is 6
INFO  - 2013-11-05 08:32:28 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 6
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
WHERE `tc`.`id_topiccomment` > '20'
ORDER BY `tc`.`id_topiccomment` asc
INFO  - 2013-11-05 08:32:28 --> inside retrieving comments topic id is 6
INFO  - 2013-11-05 08:32:28 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 6
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
DEBUG - 2013-11-05 08:32:28 --> Final output sent to browser
DEBUG - 2013-11-05 08:32:28 --> Total execution time: 0.1610
DEBUG - 2013-11-05 08:32:31 --> Config Class Initialized
DEBUG - 2013-11-05 08:32:31 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:32:31 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:32:31 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:32:31 --> URI Class Initialized
DEBUG - 2013-11-05 08:32:31 --> Router Class Initialized
DEBUG - 2013-11-05 08:32:31 --> Output Class Initialized
DEBUG - 2013-11-05 08:32:31 --> Security Class Initialized
DEBUG - 2013-11-05 08:32:31 --> Input Class Initialized
DEBUG - 2013-11-05 08:32:31 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:32:31 --> Language Class Initialized
DEBUG - 2013-11-05 08:32:31 --> Loader Class Initialized
DEBUG - 2013-11-05 08:32:31 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:32:31 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:32:31 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:32:31 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:32:31 --> Session Class Initialized
DEBUG - 2013-11-05 08:32:31 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:32:31 --> Session routines successfully run
DEBUG - 2013-11-05 08:32:31 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:32:31 --> Controller Class Initialized
DEBUG - 2013-11-05 08:32:31 --> Model Class Initialized
DEBUG - 2013-11-05 08:32:31 --> Model Class Initialized
DEBUG - 2013-11-05 08:32:31 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:32:31 --> after session initialization................
INFO  - 2013-11-05 08:32:31 --> The forum id is 6
INFO  - 2013-11-05 08:32:31 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-05 08:32:31 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 6
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '6'
ORDER BY `ft`.`name`)
INFO  - 2013-11-05 08:32:31 --> The encoded json is [{"id":"8","text":"Complicated Long sight","hasChildren":true},{"id":"9","text":"Non complicated long sight","hasChildren":true}]
DEBUG - 2013-11-05 08:32:31 --> Final output sent to browser
DEBUG - 2013-11-05 08:32:31 --> Total execution time: 0.0550
DEBUG - 2013-11-05 08:32:32 --> Config Class Initialized
DEBUG - 2013-11-05 08:32:32 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:32:32 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:32:32 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:32:32 --> URI Class Initialized
DEBUG - 2013-11-05 08:32:32 --> Router Class Initialized
DEBUG - 2013-11-05 08:32:32 --> Output Class Initialized
DEBUG - 2013-11-05 08:32:32 --> Security Class Initialized
DEBUG - 2013-11-05 08:32:32 --> Input Class Initialized
DEBUG - 2013-11-05 08:32:32 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:32:32 --> Language Class Initialized
DEBUG - 2013-11-05 08:32:32 --> Loader Class Initialized
DEBUG - 2013-11-05 08:32:32 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:32:32 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:32:32 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:32:32 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:32:32 --> Session Class Initialized
DEBUG - 2013-11-05 08:32:32 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:32:32 --> Session routines successfully run
DEBUG - 2013-11-05 08:32:32 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:32:32 --> Controller Class Initialized
DEBUG - 2013-11-05 08:32:32 --> Model Class Initialized
DEBUG - 2013-11-05 08:32:32 --> Model Class Initialized
DEBUG - 2013-11-05 08:32:32 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:32:32 --> after session initialization................
INFO  - 2013-11-05 08:32:32 --> The forum id is 8
INFO  - 2013-11-05 08:32:32 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-05 08:32:32 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 8
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '8'
ORDER BY `ft`.`name`)
INFO  - 2013-11-05 08:32:32 --> The encoded json is [{"id":"9","text":"REGIONAL LONG SIGHT","hasChildren":false}]
DEBUG - 2013-11-05 08:32:32 --> Final output sent to browser
DEBUG - 2013-11-05 08:32:32 --> Total execution time: 0.0630
DEBUG - 2013-11-05 08:32:33 --> Config Class Initialized
DEBUG - 2013-11-05 08:32:33 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:32:33 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:32:33 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:32:33 --> URI Class Initialized
DEBUG - 2013-11-05 08:32:33 --> Router Class Initialized
DEBUG - 2013-11-05 08:32:33 --> Output Class Initialized
DEBUG - 2013-11-05 08:32:33 --> Security Class Initialized
DEBUG - 2013-11-05 08:32:33 --> Input Class Initialized
DEBUG - 2013-11-05 08:32:33 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:32:33 --> Language Class Initialized
DEBUG - 2013-11-05 08:32:33 --> Loader Class Initialized
DEBUG - 2013-11-05 08:32:33 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:32:33 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:32:33 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:32:34 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:32:34 --> Session Class Initialized
DEBUG - 2013-11-05 08:32:34 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:32:34 --> Session routines successfully run
DEBUG - 2013-11-05 08:32:34 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:32:34 --> Controller Class Initialized
DEBUG - 2013-11-05 08:32:34 --> Model Class Initialized
DEBUG - 2013-11-05 08:32:34 --> Model Class Initialized
DEBUG - 2013-11-05 08:32:34 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:32:34 --> after session initialization................
INFO  - 2013-11-05 08:32:34 --> The forum id is 9
INFO  - 2013-11-05 08:32:34 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-05 08:32:34 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 9
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '9'
ORDER BY `ft`.`name`)
INFO  - 2013-11-05 08:32:34 --> The encoded json is [{"id":"10","text":"Ex- coomplicated long sight","hasChildren":true}]
DEBUG - 2013-11-05 08:32:34 --> Final output sent to browser
DEBUG - 2013-11-05 08:32:34 --> Total execution time: 0.0560
DEBUG - 2013-11-05 08:32:35 --> Config Class Initialized
DEBUG - 2013-11-05 08:32:35 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:32:35 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:32:35 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:32:35 --> URI Class Initialized
DEBUG - 2013-11-05 08:32:35 --> Router Class Initialized
DEBUG - 2013-11-05 08:32:35 --> Output Class Initialized
DEBUG - 2013-11-05 08:32:35 --> Security Class Initialized
DEBUG - 2013-11-05 08:32:35 --> Input Class Initialized
DEBUG - 2013-11-05 08:32:35 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:32:35 --> Language Class Initialized
DEBUG - 2013-11-05 08:32:35 --> Loader Class Initialized
DEBUG - 2013-11-05 08:32:35 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:32:35 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:32:35 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:32:35 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:32:35 --> Session Class Initialized
DEBUG - 2013-11-05 08:32:35 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:32:35 --> Session routines successfully run
DEBUG - 2013-11-05 08:32:35 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:32:35 --> Controller Class Initialized
DEBUG - 2013-11-05 08:32:35 --> Model Class Initialized
DEBUG - 2013-11-05 08:32:35 --> Model Class Initialized
DEBUG - 2013-11-05 08:32:35 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:32:35 --> after session initialization................
INFO  - 2013-11-05 08:32:35 --> The forum id is 10
INFO  - 2013-11-05 08:32:35 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-05 08:32:35 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 10
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '10'
ORDER BY `ft`.`name`)
INFO  - 2013-11-05 08:32:35 --> The encoded json is [{"id":"11","text":"Supra-complicated long sight","hasChildren":true}]
DEBUG - 2013-11-05 08:32:35 --> Final output sent to browser
DEBUG - 2013-11-05 08:32:35 --> Total execution time: 0.0640
DEBUG - 2013-11-05 08:32:38 --> Config Class Initialized
DEBUG - 2013-11-05 08:32:38 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:32:38 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:32:38 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:32:38 --> URI Class Initialized
DEBUG - 2013-11-05 08:32:38 --> Router Class Initialized
DEBUG - 2013-11-05 08:32:38 --> Output Class Initialized
DEBUG - 2013-11-05 08:32:38 --> Security Class Initialized
DEBUG - 2013-11-05 08:32:38 --> Input Class Initialized
DEBUG - 2013-11-05 08:32:38 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:32:38 --> Language Class Initialized
DEBUG - 2013-11-05 08:32:38 --> Loader Class Initialized
DEBUG - 2013-11-05 08:32:38 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:32:38 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:32:38 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:32:38 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:32:38 --> Session Class Initialized
DEBUG - 2013-11-05 08:32:38 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:32:38 --> Session routines successfully run
DEBUG - 2013-11-05 08:32:38 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:32:38 --> Controller Class Initialized
DEBUG - 2013-11-05 08:32:38 --> Model Class Initialized
DEBUG - 2013-11-05 08:32:38 --> Model Class Initialized
DEBUG - 2013-11-05 08:32:38 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:32:38 --> after session initialization................
INFO  - 2013-11-05 08:32:38 --> The forum id is 11
INFO  - 2013-11-05 08:32:38 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-05 08:32:38 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 11
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '11'
ORDER BY `ft`.`name`)
INFO  - 2013-11-05 08:32:38 --> The encoded json is [{"id":"8","text":"COLOR BLINDNESS","hasChildren":false}]
DEBUG - 2013-11-05 08:32:38 --> Final output sent to browser
DEBUG - 2013-11-05 08:32:38 --> Total execution time: 0.0590
DEBUG - 2013-11-05 08:34:03 --> Config Class Initialized
DEBUG - 2013-11-05 08:34:03 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:34:03 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:34:03 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:34:03 --> URI Class Initialized
DEBUG - 2013-11-05 08:34:03 --> Router Class Initialized
DEBUG - 2013-11-05 08:34:03 --> Output Class Initialized
DEBUG - 2013-11-05 08:34:03 --> Security Class Initialized
DEBUG - 2013-11-05 08:34:03 --> Input Class Initialized
DEBUG - 2013-11-05 08:34:03 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:34:03 --> Language Class Initialized
DEBUG - 2013-11-05 08:34:03 --> Loader Class Initialized
DEBUG - 2013-11-05 08:34:03 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:34:03 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:34:03 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:34:03 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:34:03 --> Session Class Initialized
DEBUG - 2013-11-05 08:34:03 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:34:03 --> Session routines successfully run
DEBUG - 2013-11-05 08:34:03 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:34:03 --> Controller Class Initialized
DEBUG - 2013-11-05 08:34:03 --> Model Class Initialized
DEBUG - 2013-11-05 08:34:03 --> Model Class Initialized
DEBUG - 2013-11-05 08:34:03 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:34:03 --> after session initialization................
INFO  - 2013-11-05 08:34:03 --> inside retrieve most commented forum topic 
INFO  - 2013-11-05 08:34:03 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
INFO  - 2013-11-05 08:34:03 --> inside retrieving first 20 topics 
INFO  - 2013-11-05 08:34:03 --> SELECT `t`.`id_topicforum`, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
LIMIT 20
INFO  - 2013-11-05 08:34:03 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-05 08:34:03 --> SELECT `ff`.`id_forum` as id, `ff`.`name`, count(f.id_forum) as sub_forum
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` is null 
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`
INFO  - 2013-11-05 08:34:03 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-05 08:34:03 --> inside retrieving comments topic id and drug id is 1
INFO  - 2013-11-05 08:34:03 --> SELECT `tc`.`id_topiccomment`, `tc`.`comment`, `tc`.`timecreated`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-05 08:34:03 --> inside retrieving comments topic id 1
INFO  - 2013-11-05 08:34:03 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
INFO  - 2013-11-05 08:34:03 --> after forums has been clicked.................
INFO  - 2013-11-05 08:34:03 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-11-05 08:34:03 --> File loaded: ../pharmaray-application/views/forum.php
DEBUG - 2013-11-05 08:34:03 --> Final output sent to browser
DEBUG - 2013-11-05 08:34:03 --> Total execution time: 0.0830
DEBUG - 2013-11-05 08:34:03 --> Config Class Initialized
DEBUG - 2013-11-05 08:34:03 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:34:03 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:34:03 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:34:03 --> URI Class Initialized
DEBUG - 2013-11-05 08:34:03 --> Router Class Initialized
DEBUG - 2013-11-05 08:34:03 --> Output Class Initialized
DEBUG - 2013-11-05 08:34:03 --> Security Class Initialized
DEBUG - 2013-11-05 08:34:03 --> Input Class Initialized
DEBUG - 2013-11-05 08:34:03 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:34:03 --> Language Class Initialized
DEBUG - 2013-11-05 08:34:03 --> Loader Class Initialized
DEBUG - 2013-11-05 08:34:03 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:34:03 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:34:03 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:34:03 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:34:03 --> Session Class Initialized
DEBUG - 2013-11-05 08:34:03 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:34:03 --> Session routines successfully run
DEBUG - 2013-11-05 08:34:03 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:34:03 --> Controller Class Initialized
DEBUG - 2013-11-05 08:34:03 --> Model Class Initialized
DEBUG - 2013-11-05 08:34:03 --> Model Class Initialized
DEBUG - 2013-11-05 08:34:03 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:34:03 --> after session initialization................
ERROR - 2013-11-05 08:34:03 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-05 08:34:03 --> Config Class Initialized
DEBUG - 2013-11-05 08:34:03 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:34:03 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:34:03 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:34:03 --> URI Class Initialized
DEBUG - 2013-11-05 08:34:03 --> Router Class Initialized
ERROR - 2013-11-05 08:34:03 --> 404 Page Not Found --> css
DEBUG - 2013-11-05 08:34:13 --> Config Class Initialized
DEBUG - 2013-11-05 08:34:13 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:34:13 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:34:13 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:34:13 --> URI Class Initialized
DEBUG - 2013-11-05 08:34:13 --> Router Class Initialized
DEBUG - 2013-11-05 08:34:13 --> Output Class Initialized
DEBUG - 2013-11-05 08:34:13 --> Security Class Initialized
DEBUG - 2013-11-05 08:34:13 --> Input Class Initialized
DEBUG - 2013-11-05 08:34:13 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:34:13 --> Language Class Initialized
DEBUG - 2013-11-05 08:34:13 --> Loader Class Initialized
DEBUG - 2013-11-05 08:34:13 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:34:13 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:34:13 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:34:13 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:34:14 --> Session Class Initialized
DEBUG - 2013-11-05 08:34:14 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:34:14 --> Session routines successfully run
DEBUG - 2013-11-05 08:34:14 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:34:14 --> Controller Class Initialized
DEBUG - 2013-11-05 08:34:14 --> Model Class Initialized
DEBUG - 2013-11-05 08:34:14 --> Model Class Initialized
DEBUG - 2013-11-05 08:34:14 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:34:14 --> after session initialization................
INFO  - 2013-11-05 08:34:14 --> Topics ::::::::::===>SELECT `ft`.`id_topicforum`, `ft`.`name`, `ft`.`description`
FROM (`forum_topic` ft)
WHERE `ft`.`id_topicforum` =  '12'
ORDER BY `ft`.`name`
INFO  - 2013-11-05 08:34:14 --> inside retrieving comments member id and forum topic id is 12
INFO  - 2013-11-05 08:34:14 --> 10==============================0
INFO  - 2013-11-05 08:34:14 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 12
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-05 08:34:14 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 12
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-05 08:34:14 --> inside retrieving comments topic id is 12
INFO  - 2013-11-05 08:34:14 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 12
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
DEBUG - 2013-11-05 08:34:14 --> Final output sent to browser
DEBUG - 2013-11-05 08:34:14 --> Total execution time: 1.0751
DEBUG - 2013-11-05 08:34:17 --> Config Class Initialized
DEBUG - 2013-11-05 08:34:17 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:34:17 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:34:17 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:34:17 --> URI Class Initialized
DEBUG - 2013-11-05 08:34:17 --> Router Class Initialized
DEBUG - 2013-11-05 08:34:17 --> Output Class Initialized
DEBUG - 2013-11-05 08:34:17 --> Security Class Initialized
DEBUG - 2013-11-05 08:34:17 --> Input Class Initialized
DEBUG - 2013-11-05 08:34:17 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:34:17 --> Language Class Initialized
DEBUG - 2013-11-05 08:34:17 --> Loader Class Initialized
DEBUG - 2013-11-05 08:34:17 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:34:17 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:34:17 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:34:17 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:34:17 --> Session Class Initialized
DEBUG - 2013-11-05 08:34:17 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:34:17 --> Session routines successfully run
DEBUG - 2013-11-05 08:34:17 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:34:17 --> Controller Class Initialized
DEBUG - 2013-11-05 08:34:17 --> Model Class Initialized
DEBUG - 2013-11-05 08:34:17 --> Model Class Initialized
DEBUG - 2013-11-05 08:34:17 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:34:17 --> after session initialization................
INFO  - 2013-11-05 08:34:17 --> Topics ::::::::::===>SELECT `ft`.`id_topicforum`, `ft`.`name`, `ft`.`description`
FROM (`forum_topic` ft)
WHERE `ft`.`id_topicforum` =  '11'
ORDER BY `ft`.`name`
INFO  - 2013-11-05 08:34:17 --> inside retrieving comments member id and forum topic id is 11
INFO  - 2013-11-05 08:34:17 --> 10==============================0
INFO  - 2013-11-05 08:34:17 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 11
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-05 08:34:17 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 11
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-05 08:34:17 --> inside retrieving comments topic id is 11
INFO  - 2013-11-05 08:34:17 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 11
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
DEBUG - 2013-11-05 08:34:17 --> Final output sent to browser
DEBUG - 2013-11-05 08:34:17 --> Total execution time: 0.0620
DEBUG - 2013-11-05 08:34:18 --> Config Class Initialized
DEBUG - 2013-11-05 08:34:18 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:34:18 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:34:18 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:34:18 --> URI Class Initialized
DEBUG - 2013-11-05 08:34:18 --> Router Class Initialized
DEBUG - 2013-11-05 08:34:18 --> Output Class Initialized
DEBUG - 2013-11-05 08:34:18 --> Security Class Initialized
DEBUG - 2013-11-05 08:34:18 --> Input Class Initialized
DEBUG - 2013-11-05 08:34:18 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:34:18 --> Language Class Initialized
DEBUG - 2013-11-05 08:34:18 --> Loader Class Initialized
DEBUG - 2013-11-05 08:34:18 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:34:18 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:34:18 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:34:18 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:34:18 --> Session Class Initialized
DEBUG - 2013-11-05 08:34:18 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:34:19 --> Session routines successfully run
DEBUG - 2013-11-05 08:34:19 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:34:19 --> Controller Class Initialized
DEBUG - 2013-11-05 08:34:19 --> Model Class Initialized
DEBUG - 2013-11-05 08:34:19 --> Model Class Initialized
DEBUG - 2013-11-05 08:34:19 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:34:19 --> after session initialization................
INFO  - 2013-11-05 08:34:19 --> Topics ::::::::::===>SELECT `ft`.`id_topicforum`, `ft`.`name`, `ft`.`description`
FROM (`forum_topic` ft)
WHERE `ft`.`id_topicforum` =  '10'
ORDER BY `ft`.`name`
INFO  - 2013-11-05 08:34:19 --> inside retrieving comments member id and forum topic id is 10
INFO  - 2013-11-05 08:34:19 --> 10==============================0
INFO  - 2013-11-05 08:34:19 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 10
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-05 08:34:19 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 10
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-05 08:34:19 --> inside retrieving comments topic id is 10
INFO  - 2013-11-05 08:34:19 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 10
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
DEBUG - 2013-11-05 08:34:19 --> Final output sent to browser
DEBUG - 2013-11-05 08:34:19 --> Total execution time: 0.0690
DEBUG - 2013-11-05 08:34:20 --> Config Class Initialized
DEBUG - 2013-11-05 08:34:20 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:34:20 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:34:20 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:34:20 --> URI Class Initialized
DEBUG - 2013-11-05 08:34:20 --> Router Class Initialized
DEBUG - 2013-11-05 08:34:20 --> Output Class Initialized
DEBUG - 2013-11-05 08:34:20 --> Security Class Initialized
DEBUG - 2013-11-05 08:34:20 --> Input Class Initialized
DEBUG - 2013-11-05 08:34:20 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:34:20 --> Language Class Initialized
DEBUG - 2013-11-05 08:34:20 --> Loader Class Initialized
DEBUG - 2013-11-05 08:34:20 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:34:20 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:34:20 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:34:20 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:34:20 --> Session Class Initialized
DEBUG - 2013-11-05 08:34:20 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:34:20 --> Session routines successfully run
DEBUG - 2013-11-05 08:34:20 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:34:20 --> Controller Class Initialized
DEBUG - 2013-11-05 08:34:20 --> Model Class Initialized
DEBUG - 2013-11-05 08:34:20 --> Model Class Initialized
DEBUG - 2013-11-05 08:34:20 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:34:20 --> after session initialization................
INFO  - 2013-11-05 08:34:20 --> Topics ::::::::::===>SELECT `ft`.`id_topicforum`, `ft`.`name`, `ft`.`description`
FROM (`forum_topic` ft)
WHERE `ft`.`id_topicforum` =  '6'
ORDER BY `ft`.`name`
INFO  - 2013-11-05 08:34:20 --> inside retrieving comments member id and forum topic id is 6
INFO  - 2013-11-05 08:34:20 --> 10==============================0
INFO  - 2013-11-05 08:34:20 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 6
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-05 08:34:20 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 6
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-05 08:34:20 --> inside retrieving comments topic id is 6
INFO  - 2013-11-05 08:34:20 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 6
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
DEBUG - 2013-11-05 08:34:20 --> Final output sent to browser
DEBUG - 2013-11-05 08:34:20 --> Total execution time: 0.0790
DEBUG - 2013-11-05 08:34:21 --> Config Class Initialized
DEBUG - 2013-11-05 08:34:21 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:34:21 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:34:21 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:34:21 --> URI Class Initialized
DEBUG - 2013-11-05 08:34:21 --> Router Class Initialized
DEBUG - 2013-11-05 08:34:21 --> Output Class Initialized
DEBUG - 2013-11-05 08:34:21 --> Security Class Initialized
DEBUG - 2013-11-05 08:34:21 --> Input Class Initialized
DEBUG - 2013-11-05 08:34:21 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:34:21 --> Language Class Initialized
DEBUG - 2013-11-05 08:34:21 --> Loader Class Initialized
DEBUG - 2013-11-05 08:34:21 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:34:21 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:34:21 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:34:21 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:34:21 --> Session Class Initialized
DEBUG - 2013-11-05 08:34:21 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:34:21 --> Session routines successfully run
DEBUG - 2013-11-05 08:34:21 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:34:21 --> Controller Class Initialized
DEBUG - 2013-11-05 08:34:21 --> Model Class Initialized
DEBUG - 2013-11-05 08:34:21 --> Model Class Initialized
DEBUG - 2013-11-05 08:34:21 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:34:21 --> after session initialization................
INFO  - 2013-11-05 08:34:21 --> Topics ::::::::::===>SELECT `ft`.`id_topicforum`, `ft`.`name`, `ft`.`description`
FROM (`forum_topic` ft)
WHERE `ft`.`id_topicforum` =  '2'
ORDER BY `ft`.`name`
INFO  - 2013-11-05 08:34:21 --> inside retrieving comments member id and forum topic id is 2
INFO  - 2013-11-05 08:34:21 --> 10==============================0
INFO  - 2013-11-05 08:34:21 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-05 08:34:21 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-05 08:34:21 --> inside retrieving comments topic id is 2
INFO  - 2013-11-05 08:34:21 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
DEBUG - 2013-11-05 08:34:21 --> Final output sent to browser
DEBUG - 2013-11-05 08:34:21 --> Total execution time: 0.0630
DEBUG - 2013-11-05 08:34:22 --> Config Class Initialized
DEBUG - 2013-11-05 08:34:22 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:34:22 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:34:22 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:34:22 --> URI Class Initialized
DEBUG - 2013-11-05 08:34:22 --> Router Class Initialized
DEBUG - 2013-11-05 08:34:22 --> Output Class Initialized
DEBUG - 2013-11-05 08:34:22 --> Security Class Initialized
DEBUG - 2013-11-05 08:34:22 --> Input Class Initialized
DEBUG - 2013-11-05 08:34:22 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:34:22 --> Language Class Initialized
DEBUG - 2013-11-05 08:34:22 --> Loader Class Initialized
DEBUG - 2013-11-05 08:34:22 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:34:22 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:34:22 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:34:22 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:34:22 --> Session Class Initialized
DEBUG - 2013-11-05 08:34:22 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:34:22 --> Session routines successfully run
DEBUG - 2013-11-05 08:34:22 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:34:22 --> Controller Class Initialized
DEBUG - 2013-11-05 08:34:22 --> Model Class Initialized
DEBUG - 2013-11-05 08:34:22 --> Model Class Initialized
DEBUG - 2013-11-05 08:34:22 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:34:22 --> after session initialization................
INFO  - 2013-11-05 08:34:22 --> Topics ::::::::::===>SELECT `ft`.`id_topicforum`, `ft`.`name`, `ft`.`description`
FROM (`forum_topic` ft)
WHERE `ft`.`id_topicforum` =  '1'
ORDER BY `ft`.`name`
INFO  - 2013-11-05 08:34:22 --> inside retrieving comments member id and forum topic id is 1
INFO  - 2013-11-05 08:34:22 --> 10==============================0
INFO  - 2013-11-05 08:34:22 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-05 08:34:22 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-05 08:34:22 --> inside retrieving comments topic id is 1
INFO  - 2013-11-05 08:34:22 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
DEBUG - 2013-11-05 08:34:22 --> Final output sent to browser
DEBUG - 2013-11-05 08:34:22 --> Total execution time: 0.0740
DEBUG - 2013-11-05 08:34:27 --> Config Class Initialized
DEBUG - 2013-11-05 08:34:27 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:34:27 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:34:27 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:34:27 --> URI Class Initialized
DEBUG - 2013-11-05 08:34:27 --> Router Class Initialized
DEBUG - 2013-11-05 08:34:27 --> Output Class Initialized
DEBUG - 2013-11-05 08:34:27 --> Security Class Initialized
DEBUG - 2013-11-05 08:34:27 --> Input Class Initialized
DEBUG - 2013-11-05 08:34:27 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:34:27 --> Language Class Initialized
DEBUG - 2013-11-05 08:34:27 --> Loader Class Initialized
DEBUG - 2013-11-05 08:34:27 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:34:27 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:34:27 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:34:27 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:34:27 --> Session Class Initialized
DEBUG - 2013-11-05 08:34:27 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:34:27 --> Session routines successfully run
DEBUG - 2013-11-05 08:34:27 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:34:27 --> Controller Class Initialized
DEBUG - 2013-11-05 08:34:27 --> Model Class Initialized
DEBUG - 2013-11-05 08:34:27 --> Model Class Initialized
DEBUG - 2013-11-05 08:34:27 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:34:27 --> after session initialization................
INFO  - 2013-11-05 08:34:27 --> Topics ::::::::::===>SELECT `ft`.`id_topicforum`, `ft`.`name`, `ft`.`description`
FROM (`forum_topic` ft)
WHERE `ft`.`id_topicforum` =  '12'
ORDER BY `ft`.`name`
INFO  - 2013-11-05 08:34:27 --> inside retrieving comments member id and forum topic id is 12
INFO  - 2013-11-05 08:34:27 --> 10==============================0
INFO  - 2013-11-05 08:34:27 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 12
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-05 08:34:27 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 12
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-05 08:34:27 --> inside retrieving comments topic id is 12
INFO  - 2013-11-05 08:34:27 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 12
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
DEBUG - 2013-11-05 08:34:27 --> Final output sent to browser
DEBUG - 2013-11-05 08:34:27 --> Total execution time: 0.0720
DEBUG - 2013-11-05 08:34:29 --> Config Class Initialized
DEBUG - 2013-11-05 08:34:29 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:34:29 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:34:29 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:34:29 --> URI Class Initialized
DEBUG - 2013-11-05 08:34:29 --> Router Class Initialized
DEBUG - 2013-11-05 08:34:29 --> Output Class Initialized
DEBUG - 2013-11-05 08:34:29 --> Security Class Initialized
DEBUG - 2013-11-05 08:34:29 --> Input Class Initialized
DEBUG - 2013-11-05 08:34:29 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:34:29 --> Language Class Initialized
DEBUG - 2013-11-05 08:34:29 --> Loader Class Initialized
DEBUG - 2013-11-05 08:34:29 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:34:29 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:34:29 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:34:29 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:34:29 --> Session Class Initialized
DEBUG - 2013-11-05 08:34:29 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:34:29 --> Session routines successfully run
DEBUG - 2013-11-05 08:34:29 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:34:29 --> Controller Class Initialized
DEBUG - 2013-11-05 08:34:29 --> Model Class Initialized
DEBUG - 2013-11-05 08:34:29 --> Model Class Initialized
DEBUG - 2013-11-05 08:34:29 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:34:29 --> after session initialization................
INFO  - 2013-11-05 08:34:29 --> The forum id is 2
INFO  - 2013-11-05 08:34:29 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-05 08:34:29 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 2
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '2'
ORDER BY `ft`.`name`)
INFO  - 2013-11-05 08:34:29 --> The encoded json is [{"id":"5","text":"ASUU Strike","hasChildren":true}]
DEBUG - 2013-11-05 08:34:29 --> Final output sent to browser
DEBUG - 2013-11-05 08:34:29 --> Total execution time: 0.0690
DEBUG - 2013-11-05 08:34:30 --> Config Class Initialized
DEBUG - 2013-11-05 08:34:30 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:34:30 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:34:30 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:34:30 --> URI Class Initialized
DEBUG - 2013-11-05 08:34:30 --> Router Class Initialized
DEBUG - 2013-11-05 08:34:30 --> Output Class Initialized
DEBUG - 2013-11-05 08:34:30 --> Security Class Initialized
DEBUG - 2013-11-05 08:34:30 --> Input Class Initialized
DEBUG - 2013-11-05 08:34:30 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:34:30 --> Language Class Initialized
DEBUG - 2013-11-05 08:34:30 --> Loader Class Initialized
DEBUG - 2013-11-05 08:34:30 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:34:30 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:34:30 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:34:30 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:34:30 --> Session Class Initialized
DEBUG - 2013-11-05 08:34:30 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:34:30 --> Session routines successfully run
DEBUG - 2013-11-05 08:34:30 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:34:30 --> Controller Class Initialized
DEBUG - 2013-11-05 08:34:30 --> Model Class Initialized
DEBUG - 2013-11-05 08:34:30 --> Model Class Initialized
DEBUG - 2013-11-05 08:34:30 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:34:30 --> after session initialization................
INFO  - 2013-11-05 08:34:30 --> The forum id is 5
INFO  - 2013-11-05 08:34:30 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-05 08:34:30 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 5
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '5'
ORDER BY `ft`.`name`)
INFO  - 2013-11-05 08:34:30 --> The encoded json is [{"id":"7","text":"Increase In school fees","hasChildren":true},{"id":"12","text":"UNN DEMONSTRATION HALTED","hasChildren":false}]
DEBUG - 2013-11-05 08:34:30 --> Final output sent to browser
DEBUG - 2013-11-05 08:34:30 --> Total execution time: 0.0650
DEBUG - 2013-11-05 08:35:55 --> Config Class Initialized
DEBUG - 2013-11-05 08:35:55 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:35:55 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:35:55 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:35:55 --> URI Class Initialized
DEBUG - 2013-11-05 08:35:55 --> Router Class Initialized
DEBUG - 2013-11-05 08:35:55 --> Output Class Initialized
DEBUG - 2013-11-05 08:35:55 --> Security Class Initialized
DEBUG - 2013-11-05 08:35:55 --> Input Class Initialized
DEBUG - 2013-11-05 08:35:55 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:35:55 --> Language Class Initialized
DEBUG - 2013-11-05 08:35:55 --> Loader Class Initialized
DEBUG - 2013-11-05 08:35:55 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:35:55 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:35:55 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:35:55 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:35:55 --> Session Class Initialized
DEBUG - 2013-11-05 08:35:55 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:35:55 --> Session routines successfully run
DEBUG - 2013-11-05 08:35:55 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:35:55 --> Controller Class Initialized
DEBUG - 2013-11-05 08:35:55 --> Model Class Initialized
DEBUG - 2013-11-05 08:35:55 --> Model Class Initialized
DEBUG - 2013-11-05 08:35:55 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:35:55 --> after session initialization................
INFO  - 2013-11-05 08:35:55 --> The forum id is 1
INFO  - 2013-11-05 08:35:55 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-05 08:35:55 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 1
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '1'
ORDER BY `ft`.`name`)
INFO  - 2013-11-05 08:35:55 --> The encoded json is [{"id":"4","text":"Eye Defects","hasChildren":true},{"id":"1","text":"ASTIGMATISM","hasChildren":false},{"id":"2","text":"CATARACT","hasChildren":false}]
DEBUG - 2013-11-05 08:35:55 --> Final output sent to browser
DEBUG - 2013-11-05 08:35:55 --> Total execution time: 0.0570
DEBUG - 2013-11-05 08:35:56 --> Config Class Initialized
DEBUG - 2013-11-05 08:35:56 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:35:56 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:35:56 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:35:56 --> URI Class Initialized
DEBUG - 2013-11-05 08:35:56 --> Router Class Initialized
DEBUG - 2013-11-05 08:35:56 --> Output Class Initialized
DEBUG - 2013-11-05 08:35:56 --> Security Class Initialized
DEBUG - 2013-11-05 08:35:56 --> Input Class Initialized
DEBUG - 2013-11-05 08:35:56 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:35:56 --> Language Class Initialized
DEBUG - 2013-11-05 08:35:56 --> Loader Class Initialized
DEBUG - 2013-11-05 08:35:56 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:35:56 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:35:56 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:35:56 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:35:56 --> Session Class Initialized
DEBUG - 2013-11-05 08:35:56 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:35:56 --> Session routines successfully run
DEBUG - 2013-11-05 08:35:56 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:35:56 --> Controller Class Initialized
DEBUG - 2013-11-05 08:35:56 --> Model Class Initialized
DEBUG - 2013-11-05 08:35:56 --> Model Class Initialized
DEBUG - 2013-11-05 08:35:56 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:35:56 --> after session initialization................
INFO  - 2013-11-05 08:35:56 --> The forum id is 4
INFO  - 2013-11-05 08:35:56 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-05 08:35:56 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 4
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '4'
ORDER BY `ft`.`name`)
INFO  - 2013-11-05 08:35:56 --> The encoded json is [{"id":"6","text":"Long Sight","hasChildren":true},{"id":"3","text":"CONJUCTIVITIS","hasChildren":false},{"id":"5","text":"BLUE PUPILS","hasChildren":false},{"id":"6","text":"BULDGED EYES","hasChildren":false},{"id":"10","text":"NIGHT BLINDNESS","hasChildren":false}]
DEBUG - 2013-11-05 08:35:56 --> Final output sent to browser
DEBUG - 2013-11-05 08:35:56 --> Total execution time: 0.0550
DEBUG - 2013-11-05 08:35:57 --> Config Class Initialized
DEBUG - 2013-11-05 08:35:57 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:35:57 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:35:57 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:35:57 --> URI Class Initialized
DEBUG - 2013-11-05 08:35:57 --> Router Class Initialized
DEBUG - 2013-11-05 08:35:57 --> Output Class Initialized
DEBUG - 2013-11-05 08:35:57 --> Security Class Initialized
DEBUG - 2013-11-05 08:35:57 --> Input Class Initialized
DEBUG - 2013-11-05 08:35:57 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:35:57 --> Language Class Initialized
DEBUG - 2013-11-05 08:35:57 --> Loader Class Initialized
DEBUG - 2013-11-05 08:35:57 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:35:57 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:35:57 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:35:57 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:35:57 --> Session Class Initialized
DEBUG - 2013-11-05 08:35:57 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:35:57 --> Session routines successfully run
DEBUG - 2013-11-05 08:35:57 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:35:57 --> Controller Class Initialized
DEBUG - 2013-11-05 08:35:57 --> Model Class Initialized
DEBUG - 2013-11-05 08:35:57 --> Model Class Initialized
DEBUG - 2013-11-05 08:35:57 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:35:57 --> after session initialization................
INFO  - 2013-11-05 08:35:57 --> The forum id is 6
INFO  - 2013-11-05 08:35:57 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-05 08:35:57 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 6
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '6'
ORDER BY `ft`.`name`)
INFO  - 2013-11-05 08:35:57 --> The encoded json is [{"id":"8","text":"Complicated Long sight","hasChildren":true},{"id":"9","text":"Non complicated long sight","hasChildren":true}]
DEBUG - 2013-11-05 08:35:57 --> Final output sent to browser
DEBUG - 2013-11-05 08:35:57 --> Total execution time: 0.0570
DEBUG - 2013-11-05 08:35:58 --> Config Class Initialized
DEBUG - 2013-11-05 08:35:58 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:35:58 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:35:58 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:35:58 --> URI Class Initialized
DEBUG - 2013-11-05 08:35:58 --> Router Class Initialized
DEBUG - 2013-11-05 08:35:58 --> Output Class Initialized
DEBUG - 2013-11-05 08:35:58 --> Security Class Initialized
DEBUG - 2013-11-05 08:35:58 --> Input Class Initialized
DEBUG - 2013-11-05 08:35:58 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:35:58 --> Language Class Initialized
DEBUG - 2013-11-05 08:35:58 --> Loader Class Initialized
DEBUG - 2013-11-05 08:35:58 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:35:58 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:35:58 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:35:58 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:35:58 --> Session Class Initialized
DEBUG - 2013-11-05 08:35:58 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:35:58 --> Session routines successfully run
DEBUG - 2013-11-05 08:35:58 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:35:58 --> Controller Class Initialized
DEBUG - 2013-11-05 08:35:58 --> Model Class Initialized
DEBUG - 2013-11-05 08:35:58 --> Model Class Initialized
DEBUG - 2013-11-05 08:35:58 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:35:58 --> after session initialization................
INFO  - 2013-11-05 08:35:58 --> The forum id is 8
INFO  - 2013-11-05 08:35:58 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-05 08:35:58 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 8
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '8'
ORDER BY `ft`.`name`)
INFO  - 2013-11-05 08:35:58 --> The encoded json is [{"id":"9","text":"REGIONAL LONG SIGHT","hasChildren":false}]
DEBUG - 2013-11-05 08:35:58 --> Final output sent to browser
DEBUG - 2013-11-05 08:35:58 --> Total execution time: 0.0610
DEBUG - 2013-11-05 08:35:59 --> Config Class Initialized
DEBUG - 2013-11-05 08:35:59 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:35:59 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:35:59 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:35:59 --> URI Class Initialized
DEBUG - 2013-11-05 08:35:59 --> Router Class Initialized
DEBUG - 2013-11-05 08:35:59 --> Output Class Initialized
DEBUG - 2013-11-05 08:35:59 --> Security Class Initialized
DEBUG - 2013-11-05 08:35:59 --> Input Class Initialized
DEBUG - 2013-11-05 08:35:59 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:35:59 --> Language Class Initialized
DEBUG - 2013-11-05 08:35:59 --> Loader Class Initialized
DEBUG - 2013-11-05 08:35:59 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:35:59 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:35:59 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:35:59 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:35:59 --> Session Class Initialized
DEBUG - 2013-11-05 08:35:59 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:35:59 --> Session routines successfully run
DEBUG - 2013-11-05 08:35:59 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:35:59 --> Controller Class Initialized
DEBUG - 2013-11-05 08:35:59 --> Model Class Initialized
DEBUG - 2013-11-05 08:35:59 --> Model Class Initialized
DEBUG - 2013-11-05 08:35:59 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:35:59 --> after session initialization................
INFO  - 2013-11-05 08:35:59 --> The forum id is 9
INFO  - 2013-11-05 08:35:59 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-05 08:35:59 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 9
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '9'
ORDER BY `ft`.`name`)
INFO  - 2013-11-05 08:35:59 --> The encoded json is [{"id":"10","text":"Ex- coomplicated long sight","hasChildren":true}]
DEBUG - 2013-11-05 08:35:59 --> Final output sent to browser
DEBUG - 2013-11-05 08:35:59 --> Total execution time: 0.0480
DEBUG - 2013-11-05 08:36:00 --> Config Class Initialized
DEBUG - 2013-11-05 08:36:00 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:36:00 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:36:00 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:36:00 --> URI Class Initialized
DEBUG - 2013-11-05 08:36:00 --> Router Class Initialized
DEBUG - 2013-11-05 08:36:00 --> Output Class Initialized
DEBUG - 2013-11-05 08:36:00 --> Security Class Initialized
DEBUG - 2013-11-05 08:36:00 --> Input Class Initialized
DEBUG - 2013-11-05 08:36:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:36:00 --> Language Class Initialized
DEBUG - 2013-11-05 08:36:00 --> Loader Class Initialized
DEBUG - 2013-11-05 08:36:00 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:36:00 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:36:00 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:36:00 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:36:00 --> Session Class Initialized
DEBUG - 2013-11-05 08:36:00 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:36:00 --> Session routines successfully run
DEBUG - 2013-11-05 08:36:00 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:36:00 --> Controller Class Initialized
DEBUG - 2013-11-05 08:36:00 --> Model Class Initialized
DEBUG - 2013-11-05 08:36:00 --> Model Class Initialized
DEBUG - 2013-11-05 08:36:00 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:36:00 --> after session initialization................
INFO  - 2013-11-05 08:36:00 --> The forum id is 10
INFO  - 2013-11-05 08:36:00 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-05 08:36:00 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 10
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '10'
ORDER BY `ft`.`name`)
INFO  - 2013-11-05 08:36:01 --> The encoded json is [{"id":"11","text":"Supra-complicated long sight","hasChildren":true}]
DEBUG - 2013-11-05 08:36:01 --> Final output sent to browser
DEBUG - 2013-11-05 08:36:01 --> Total execution time: 0.8050
DEBUG - 2013-11-05 08:36:02 --> Config Class Initialized
DEBUG - 2013-11-05 08:36:02 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:36:02 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:36:02 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:36:02 --> URI Class Initialized
DEBUG - 2013-11-05 08:36:02 --> Router Class Initialized
DEBUG - 2013-11-05 08:36:02 --> Output Class Initialized
DEBUG - 2013-11-05 08:36:02 --> Security Class Initialized
DEBUG - 2013-11-05 08:36:02 --> Input Class Initialized
DEBUG - 2013-11-05 08:36:02 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:36:02 --> Language Class Initialized
DEBUG - 2013-11-05 08:36:02 --> Loader Class Initialized
DEBUG - 2013-11-05 08:36:02 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:36:02 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:36:02 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:36:02 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:36:02 --> Session Class Initialized
DEBUG - 2013-11-05 08:36:02 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:36:02 --> Session routines successfully run
DEBUG - 2013-11-05 08:36:02 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:36:02 --> Controller Class Initialized
DEBUG - 2013-11-05 08:36:02 --> Model Class Initialized
DEBUG - 2013-11-05 08:36:02 --> Model Class Initialized
DEBUG - 2013-11-05 08:36:02 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:36:02 --> after session initialization................
INFO  - 2013-11-05 08:36:02 --> The forum id is 11
INFO  - 2013-11-05 08:36:02 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-05 08:36:02 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 11
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '11'
ORDER BY `ft`.`name`)
INFO  - 2013-11-05 08:36:02 --> The encoded json is [{"id":"8","text":"COLOR BLINDNESS","hasChildren":false}]
DEBUG - 2013-11-05 08:36:02 --> Final output sent to browser
DEBUG - 2013-11-05 08:36:02 --> Total execution time: 0.0500
DEBUG - 2013-11-05 08:36:05 --> Config Class Initialized
DEBUG - 2013-11-05 08:36:05 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:36:05 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:36:05 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:36:05 --> URI Class Initialized
DEBUG - 2013-11-05 08:36:05 --> Router Class Initialized
DEBUG - 2013-11-05 08:36:05 --> Output Class Initialized
DEBUG - 2013-11-05 08:36:05 --> Security Class Initialized
DEBUG - 2013-11-05 08:36:05 --> Input Class Initialized
DEBUG - 2013-11-05 08:36:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:36:05 --> Language Class Initialized
DEBUG - 2013-11-05 08:36:05 --> Loader Class Initialized
DEBUG - 2013-11-05 08:36:05 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:36:05 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:36:05 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:36:05 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:36:05 --> Session Class Initialized
DEBUG - 2013-11-05 08:36:05 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:36:05 --> Session routines successfully run
DEBUG - 2013-11-05 08:36:05 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:36:05 --> Controller Class Initialized
DEBUG - 2013-11-05 08:36:05 --> Model Class Initialized
DEBUG - 2013-11-05 08:36:05 --> Model Class Initialized
DEBUG - 2013-11-05 08:36:05 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:36:05 --> after session initialization................
INFO  - 2013-11-05 08:36:05 --> The forum id is 7
INFO  - 2013-11-05 08:36:05 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-05 08:36:05 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 7
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '7'
ORDER BY `ft`.`name`)
INFO  - 2013-11-05 08:36:05 --> The encoded json is [{"id":"11","text":"BABCOOK FEES","hasChildren":false}]
DEBUG - 2013-11-05 08:36:05 --> Final output sent to browser
DEBUG - 2013-11-05 08:36:05 --> Total execution time: 0.0530
DEBUG - 2013-11-05 08:47:36 --> Config Class Initialized
DEBUG - 2013-11-05 08:47:36 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:47:36 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:47:36 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:47:36 --> URI Class Initialized
DEBUG - 2013-11-05 08:47:36 --> Router Class Initialized
DEBUG - 2013-11-05 08:47:36 --> Output Class Initialized
DEBUG - 2013-11-05 08:47:36 --> Security Class Initialized
DEBUG - 2013-11-05 08:47:36 --> Input Class Initialized
DEBUG - 2013-11-05 08:47:36 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:47:36 --> Language Class Initialized
DEBUG - 2013-11-05 08:47:36 --> Loader Class Initialized
DEBUG - 2013-11-05 08:47:36 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:47:36 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:47:36 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:47:36 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:47:36 --> Session Class Initialized
DEBUG - 2013-11-05 08:47:36 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:47:36 --> Session routines successfully run
DEBUG - 2013-11-05 08:47:36 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:47:36 --> Controller Class Initialized
DEBUG - 2013-11-05 08:47:36 --> Model Class Initialized
DEBUG - 2013-11-05 08:47:36 --> Model Class Initialized
DEBUG - 2013-11-05 08:47:36 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:47:36 --> after session initialization................
INFO  - 2013-11-05 08:47:36 --> last news id is 0
INFO  - 2013-11-05 08:47:36 --> SELECT a.id_article as id, a.title as newsletter_title, a.description as newsletter_description, a.guestonly as guestonly, a.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`article` a)
JOIN `member` m ON `a`.`memberid_member` = `m`.`id_member`
WHERE `a`.`id_article` <> 0
ORDER BY `a`.`id_article` desc
LIMIT 15
INFO  - 2013-11-05 08:47:36 --> after newsleters list has been clicked.................
INFO  - 2013-11-05 08:47:36 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=112&article_type=newsletter_title
INFO  - 2013-11-05 08:47:36 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=111&article_type=newsletter_title
INFO  - 2013-11-05 08:47:36 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=110&article_type=newsletter_title
INFO  - 2013-11-05 08:47:36 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=109&article_type=newsletter_title
INFO  - 2013-11-05 08:47:36 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=108&article_type=newsletter_title
INFO  - 2013-11-05 08:47:36 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=107&article_type=newsletter_title
INFO  - 2013-11-05 08:47:37 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=106&article_type=newsletter_title
INFO  - 2013-11-05 08:47:37 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=105&article_type=newsletter_title
INFO  - 2013-11-05 08:47:37 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=104&article_type=newsletter_title
INFO  - 2013-11-05 08:47:37 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=103&article_type=newsletter_title
INFO  - 2013-11-05 08:47:37 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=102&article_type=newsletter_title
INFO  - 2013-11-05 08:47:37 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=101&article_type=newsletter_title
INFO  - 2013-11-05 08:47:37 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=100&article_type=newsletter_title
INFO  - 2013-11-05 08:47:37 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=99&article_type=newsletter_title
INFO  - 2013-11-05 08:47:37 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=98&article_type=newsletter_title
DEBUG - 2013-11-05 08:47:37 --> File loaded: ../pharmaray-application/views/articles.php
DEBUG - 2013-11-05 08:47:37 --> Final output sent to browser
DEBUG - 2013-11-05 08:47:37 --> Total execution time: 0.0880
DEBUG - 2013-11-05 08:47:38 --> Config Class Initialized
DEBUG - 2013-11-05 08:47:38 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:47:38 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:47:38 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:47:38 --> URI Class Initialized
DEBUG - 2013-11-05 08:47:38 --> Router Class Initialized
DEBUG - 2013-11-05 08:47:38 --> Output Class Initialized
DEBUG - 2013-11-05 08:47:38 --> Security Class Initialized
DEBUG - 2013-11-05 08:47:38 --> Input Class Initialized
DEBUG - 2013-11-05 08:47:38 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:47:38 --> Language Class Initialized
DEBUG - 2013-11-05 08:47:38 --> Loader Class Initialized
DEBUG - 2013-11-05 08:47:38 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:47:38 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:47:38 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:47:38 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:47:38 --> Session Class Initialized
DEBUG - 2013-11-05 08:47:38 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:47:38 --> Session routines successfully run
DEBUG - 2013-11-05 08:47:38 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:47:38 --> Controller Class Initialized
DEBUG - 2013-11-05 08:47:38 --> Model Class Initialized
DEBUG - 2013-11-05 08:47:38 --> Model Class Initialized
DEBUG - 2013-11-05 08:47:38 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:47:38 --> after session initialization................
INFO  - 2013-11-05 08:47:38 --> inside retrieve most commented forum topic 
INFO  - 2013-11-05 08:47:38 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
INFO  - 2013-11-05 08:47:38 --> inside retrieving first 20 topics 
INFO  - 2013-11-05 08:47:38 --> SELECT `t`.`id_topicforum`, upper(t.name), `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
LIMIT 20
INFO  - 2013-11-05 08:47:38 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-05 08:47:38 --> SELECT `ff`.`id_forum` as id, `ff`.`name`, count(f.id_forum) as sub_forum
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` is null 
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`
INFO  - 2013-11-05 08:47:38 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-05 08:47:38 --> inside retrieving comments topic id and drug id is 1
INFO  - 2013-11-05 08:47:38 --> SELECT `tc`.`id_topiccomment`, `tc`.`comment`, `tc`.`timecreated`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-05 08:47:38 --> inside retrieving comments topic id 1
INFO  - 2013-11-05 08:47:38 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
INFO  - 2013-11-05 08:47:38 --> after forums has been clicked.................
INFO  - 2013-11-05 08:47:38 -->  column name inside view is 0 column Data is Male Doctor
ERROR - 2013-11-05 08:47:38 --> Severity: Notice  --> Undefined index: name C:\xampp\htdocs\Pharmarays\pharmaray-application\views\forum.php 255
ERROR - 2013-11-05 08:47:38 --> Severity: Notice  --> Undefined index: name C:\xampp\htdocs\Pharmarays\pharmaray-application\views\forum.php 255
ERROR - 2013-11-05 08:47:38 --> Severity: Notice  --> Undefined index: name C:\xampp\htdocs\Pharmarays\pharmaray-application\views\forum.php 255
ERROR - 2013-11-05 08:47:38 --> Severity: Notice  --> Undefined index: name C:\xampp\htdocs\Pharmarays\pharmaray-application\views\forum.php 255
ERROR - 2013-11-05 08:47:38 --> Severity: Notice  --> Undefined index: name C:\xampp\htdocs\Pharmarays\pharmaray-application\views\forum.php 255
ERROR - 2013-11-05 08:47:38 --> Severity: Notice  --> Undefined index: name C:\xampp\htdocs\Pharmarays\pharmaray-application\views\forum.php 255
DEBUG - 2013-11-05 08:47:38 --> File loaded: ../pharmaray-application/views/forum.php
DEBUG - 2013-11-05 08:47:38 --> Final output sent to browser
DEBUG - 2013-11-05 08:47:38 --> Total execution time: 0.1030
DEBUG - 2013-11-05 08:47:38 --> Config Class Initialized
DEBUG - 2013-11-05 08:47:38 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:47:38 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:47:38 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:47:38 --> URI Class Initialized
DEBUG - 2013-11-05 08:47:38 --> Router Class Initialized
DEBUG - 2013-11-05 08:47:38 --> Output Class Initialized
DEBUG - 2013-11-05 08:47:38 --> Security Class Initialized
DEBUG - 2013-11-05 08:47:38 --> Input Class Initialized
DEBUG - 2013-11-05 08:47:38 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:47:38 --> Language Class Initialized
DEBUG - 2013-11-05 08:47:38 --> Loader Class Initialized
DEBUG - 2013-11-05 08:47:38 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:47:38 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:47:38 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:47:38 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:47:38 --> Session Class Initialized
DEBUG - 2013-11-05 08:47:38 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:47:38 --> Session routines successfully run
DEBUG - 2013-11-05 08:47:38 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:47:38 --> Controller Class Initialized
DEBUG - 2013-11-05 08:47:38 --> Model Class Initialized
DEBUG - 2013-11-05 08:47:38 --> Model Class Initialized
DEBUG - 2013-11-05 08:47:38 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:47:38 --> after session initialization................
ERROR - 2013-11-05 08:47:38 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-05 08:47:38 --> Config Class Initialized
DEBUG - 2013-11-05 08:47:38 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:47:38 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:47:38 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:47:38 --> URI Class Initialized
DEBUG - 2013-11-05 08:47:38 --> Router Class Initialized
ERROR - 2013-11-05 08:47:38 --> 404 Page Not Found --> css
DEBUG - 2013-11-05 08:48:00 --> Config Class Initialized
DEBUG - 2013-11-05 08:48:00 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:48:00 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:48:00 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:48:00 --> URI Class Initialized
DEBUG - 2013-11-05 08:48:00 --> Router Class Initialized
DEBUG - 2013-11-05 08:48:00 --> Output Class Initialized
DEBUG - 2013-11-05 08:48:00 --> Security Class Initialized
DEBUG - 2013-11-05 08:48:00 --> Input Class Initialized
DEBUG - 2013-11-05 08:48:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:48:00 --> Language Class Initialized
DEBUG - 2013-11-05 08:48:00 --> Loader Class Initialized
DEBUG - 2013-11-05 08:48:00 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:48:00 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:48:00 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:48:00 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:48:00 --> Session Class Initialized
DEBUG - 2013-11-05 08:48:00 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:48:00 --> Session routines successfully run
DEBUG - 2013-11-05 08:48:00 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:48:00 --> Controller Class Initialized
DEBUG - 2013-11-05 08:48:00 --> Model Class Initialized
DEBUG - 2013-11-05 08:48:00 --> Model Class Initialized
DEBUG - 2013-11-05 08:48:00 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:48:00 --> after session initialization................
INFO  - 2013-11-05 08:48:00 --> inside retrieve most commented forum topic 
INFO  - 2013-11-05 08:48:00 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
INFO  - 2013-11-05 08:48:00 --> inside retrieving first 20 topics 
INFO  - 2013-11-05 08:48:00 --> SELECT `t`.`id_topicforum`, upper(t.name) as name, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
LIMIT 20
INFO  - 2013-11-05 08:48:00 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-05 08:48:00 --> SELECT `ff`.`id_forum` as id, `ff`.`name`, count(f.id_forum) as sub_forum
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` is null 
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`
INFO  - 2013-11-05 08:48:00 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-05 08:48:00 --> inside retrieving comments topic id and drug id is 1
INFO  - 2013-11-05 08:48:00 --> SELECT `tc`.`id_topiccomment`, `tc`.`comment`, `tc`.`timecreated`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-05 08:48:00 --> inside retrieving comments topic id 1
INFO  - 2013-11-05 08:48:00 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
INFO  - 2013-11-05 08:48:00 --> after forums has been clicked.................
INFO  - 2013-11-05 08:48:00 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-11-05 08:48:00 --> File loaded: ../pharmaray-application/views/forum.php
DEBUG - 2013-11-05 08:48:00 --> Final output sent to browser
DEBUG - 2013-11-05 08:48:00 --> Total execution time: 0.0840
DEBUG - 2013-11-05 08:48:00 --> Config Class Initialized
DEBUG - 2013-11-05 08:48:00 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:48:00 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:48:00 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:48:00 --> URI Class Initialized
DEBUG - 2013-11-05 08:48:00 --> Router Class Initialized
DEBUG - 2013-11-05 08:48:00 --> Output Class Initialized
DEBUG - 2013-11-05 08:48:00 --> Security Class Initialized
DEBUG - 2013-11-05 08:48:00 --> Input Class Initialized
DEBUG - 2013-11-05 08:48:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:48:00 --> Language Class Initialized
DEBUG - 2013-11-05 08:48:00 --> Loader Class Initialized
DEBUG - 2013-11-05 08:48:00 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:48:00 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:48:00 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:48:00 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:48:00 --> Session Class Initialized
DEBUG - 2013-11-05 08:48:00 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:48:00 --> Session routines successfully run
DEBUG - 2013-11-05 08:48:00 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:48:00 --> Controller Class Initialized
DEBUG - 2013-11-05 08:48:00 --> Model Class Initialized
DEBUG - 2013-11-05 08:48:00 --> Model Class Initialized
DEBUG - 2013-11-05 08:48:00 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:48:00 --> after session initialization................
ERROR - 2013-11-05 08:48:00 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-05 08:48:00 --> Config Class Initialized
DEBUG - 2013-11-05 08:48:00 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:48:00 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:48:00 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:48:00 --> URI Class Initialized
DEBUG - 2013-11-05 08:48:00 --> Router Class Initialized
ERROR - 2013-11-05 08:48:00 --> 404 Page Not Found --> css
DEBUG - 2013-11-05 08:48:07 --> Config Class Initialized
DEBUG - 2013-11-05 08:48:07 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:48:07 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:48:07 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:48:07 --> URI Class Initialized
DEBUG - 2013-11-05 08:48:07 --> Router Class Initialized
DEBUG - 2013-11-05 08:48:07 --> Output Class Initialized
DEBUG - 2013-11-05 08:48:07 --> Security Class Initialized
DEBUG - 2013-11-05 08:48:07 --> Input Class Initialized
DEBUG - 2013-11-05 08:48:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:48:07 --> Language Class Initialized
DEBUG - 2013-11-05 08:48:07 --> Loader Class Initialized
DEBUG - 2013-11-05 08:48:07 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:48:07 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:48:07 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:48:07 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:48:08 --> Session Class Initialized
DEBUG - 2013-11-05 08:48:08 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:48:08 --> Session routines successfully run
DEBUG - 2013-11-05 08:48:08 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:48:08 --> Controller Class Initialized
DEBUG - 2013-11-05 08:48:08 --> Model Class Initialized
DEBUG - 2013-11-05 08:48:08 --> Model Class Initialized
DEBUG - 2013-11-05 08:48:08 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:48:08 --> after session initialization................
DEBUG - 2013-11-05 08:48:08 --> Config Class Initialized
DEBUG - 2013-11-05 08:48:08 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:48:08 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:48:08 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:48:08 --> URI Class Initialized
DEBUG - 2013-11-05 08:48:08 --> Router Class Initialized
DEBUG - 2013-11-05 08:48:08 --> No URI present. Default controller set.
DEBUG - 2013-11-05 08:48:08 --> Output Class Initialized
DEBUG - 2013-11-05 08:48:08 --> Security Class Initialized
DEBUG - 2013-11-05 08:48:08 --> Input Class Initialized
DEBUG - 2013-11-05 08:48:08 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:48:08 --> Language Class Initialized
DEBUG - 2013-11-05 08:48:08 --> Loader Class Initialized
DEBUG - 2013-11-05 08:48:08 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:48:08 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:48:08 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:48:08 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:48:08 --> Session Class Initialized
DEBUG - 2013-11-05 08:48:08 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:48:08 --> A session cookie was not found.
DEBUG - 2013-11-05 08:48:08 --> Session routines successfully run
DEBUG - 2013-11-05 08:48:08 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:48:08 --> Controller Class Initialized
INFO  - 2013-11-05 08:48:08 --> the form message==>
INFO  - 2013-11-05 08:48:08 --> The session id is ========>8c5f335192c4a36a65f7c0c530d39490 and the member id is =======>
INFO  - 2013-11-05 08:48:08 --> after the retrieving session list.................//////////
DEBUG - 2013-11-05 08:48:08 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-11-05 08:48:08 --> Final output sent to browser
DEBUG - 2013-11-05 08:48:08 --> Total execution time: 0.0380
DEBUG - 2013-11-05 08:48:15 --> Config Class Initialized
DEBUG - 2013-11-05 08:48:15 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:48:15 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:48:15 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:48:15 --> URI Class Initialized
DEBUG - 2013-11-05 08:48:15 --> Router Class Initialized
DEBUG - 2013-11-05 08:48:15 --> Output Class Initialized
DEBUG - 2013-11-05 08:48:15 --> Security Class Initialized
DEBUG - 2013-11-05 08:48:15 --> Input Class Initialized
DEBUG - 2013-11-05 08:48:15 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:48:15 --> Language Class Initialized
DEBUG - 2013-11-05 08:48:15 --> Loader Class Initialized
DEBUG - 2013-11-05 08:48:15 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:48:15 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:48:15 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:48:15 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:48:15 --> Session Class Initialized
DEBUG - 2013-11-05 08:48:15 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:48:15 --> Session routines successfully run
DEBUG - 2013-11-05 08:48:15 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:48:15 --> Controller Class Initialized
DEBUG - 2013-11-05 08:48:15 --> Model Class Initialized
DEBUG - 2013-11-05 08:48:15 --> Model Class Initialized
DEBUG - 2013-11-05 08:48:15 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:48:15 --> after session initialization................
INFO  - 2013-11-05 08:48:15 --> inside rays login auth.............
DEBUG - 2013-11-05 08:48:15 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-11-05 08:48:15 --> XSS Filtering completed
DEBUG - 2013-11-05 08:48:16 --> XSS Filtering completed
INFO  - 2013-11-05 08:48:16 --> before getting the relation of member............6
INFO  - 2013-11-05 08:48:16 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-11-05 08:48:16 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-05 08:48:16 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-11-05 08:48:16 --> inside retrieving vacancy for member
INFO  - 2013-11-05 08:48:16 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-11-05 08:48:16 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-05 08:48:16 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-11-05 08:48:16 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-11-05 08:48:16 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-05 08:48:16 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-05 08:48:16 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-11-05 08:48:16 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-11-05 08:48:16 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-11-05 08:48:16 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-11-05 08:48:16 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-11-05 08:48:16 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-11-05 08:48:16 --> Final output sent to browser
DEBUG - 2013-11-05 08:48:16 --> Total execution time: 0.1020
DEBUG - 2013-11-05 08:48:16 --> Config Class Initialized
DEBUG - 2013-11-05 08:48:16 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:48:16 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:48:16 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:48:16 --> URI Class Initialized
DEBUG - 2013-11-05 08:48:16 --> Router Class Initialized
DEBUG - 2013-11-05 08:48:16 --> Output Class Initialized
DEBUG - 2013-11-05 08:48:16 --> Security Class Initialized
DEBUG - 2013-11-05 08:48:16 --> Input Class Initialized
DEBUG - 2013-11-05 08:48:16 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:48:16 --> Language Class Initialized
DEBUG - 2013-11-05 08:48:16 --> Loader Class Initialized
DEBUG - 2013-11-05 08:48:16 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:48:16 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:48:16 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:48:16 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:48:16 --> Session Class Initialized
DEBUG - 2013-11-05 08:48:16 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:48:16 --> Session routines successfully run
DEBUG - 2013-11-05 08:48:16 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:48:16 --> Controller Class Initialized
DEBUG - 2013-11-05 08:48:16 --> Model Class Initialized
DEBUG - 2013-11-05 08:48:16 --> Model Class Initialized
DEBUG - 2013-11-05 08:48:16 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:48:16 --> after session initialization................
ERROR - 2013-11-05 08:48:16 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-05 08:48:16 --> Config Class Initialized
DEBUG - 2013-11-05 08:48:16 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:48:16 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:48:16 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:48:16 --> URI Class Initialized
DEBUG - 2013-11-05 08:48:16 --> Router Class Initialized
ERROR - 2013-11-05 08:48:16 --> 404 Page Not Found --> css
DEBUG - 2013-11-05 08:48:17 --> Config Class Initialized
DEBUG - 2013-11-05 08:48:17 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:48:17 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:48:17 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:48:17 --> URI Class Initialized
DEBUG - 2013-11-05 08:48:17 --> Router Class Initialized
DEBUG - 2013-11-05 08:48:17 --> Output Class Initialized
DEBUG - 2013-11-05 08:48:17 --> Security Class Initialized
DEBUG - 2013-11-05 08:48:17 --> Input Class Initialized
DEBUG - 2013-11-05 08:48:17 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:48:17 --> Language Class Initialized
DEBUG - 2013-11-05 08:48:17 --> Loader Class Initialized
DEBUG - 2013-11-05 08:48:17 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:48:17 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:48:17 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:48:17 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:48:17 --> Session Class Initialized
DEBUG - 2013-11-05 08:48:17 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:48:17 --> Session routines successfully run
DEBUG - 2013-11-05 08:48:17 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:48:17 --> Controller Class Initialized
DEBUG - 2013-11-05 08:48:17 --> Model Class Initialized
DEBUG - 2013-11-05 08:48:17 --> Model Class Initialized
DEBUG - 2013-11-05 08:48:17 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:48:17 --> after session initialization................
INFO  - 2013-11-05 08:48:17 --> inside retrieve most commented forum topic 
INFO  - 2013-11-05 08:48:17 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
INFO  - 2013-11-05 08:48:17 --> inside retrieving first 20 topics 
INFO  - 2013-11-05 08:48:17 --> SELECT `t`.`id_topicforum`, upper(t.name) as name, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
LIMIT 20
INFO  - 2013-11-05 08:48:17 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-05 08:48:17 --> SELECT `ff`.`id_forum` as id, `ff`.`name`, count(f.id_forum) as sub_forum
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` is null 
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`
INFO  - 2013-11-05 08:48:17 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-05 08:48:17 --> inside retrieving comments topic id and drug id is 1
INFO  - 2013-11-05 08:48:17 --> SELECT `tc`.`id_topiccomment`, `tc`.`comment`, `tc`.`timecreated`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-05 08:48:17 --> inside retrieving comments topic id 1
INFO  - 2013-11-05 08:48:17 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
INFO  - 2013-11-05 08:48:17 --> after forums has been clicked.................
INFO  - 2013-11-05 08:48:17 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-11-05 08:48:17 --> File loaded: ../pharmaray-application/views/forum.php
DEBUG - 2013-11-05 08:48:17 --> Final output sent to browser
DEBUG - 2013-11-05 08:48:17 --> Total execution time: 0.0710
DEBUG - 2013-11-05 08:48:17 --> Config Class Initialized
DEBUG - 2013-11-05 08:48:17 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:48:17 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:48:17 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:48:17 --> URI Class Initialized
DEBUG - 2013-11-05 08:48:17 --> Router Class Initialized
DEBUG - 2013-11-05 08:48:17 --> Output Class Initialized
DEBUG - 2013-11-05 08:48:17 --> Security Class Initialized
DEBUG - 2013-11-05 08:48:17 --> Input Class Initialized
DEBUG - 2013-11-05 08:48:17 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:48:17 --> Language Class Initialized
DEBUG - 2013-11-05 08:48:17 --> Loader Class Initialized
DEBUG - 2013-11-05 08:48:17 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:48:17 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:48:17 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:48:17 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:48:17 --> Session Class Initialized
DEBUG - 2013-11-05 08:48:17 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:48:17 --> Session routines successfully run
DEBUG - 2013-11-05 08:48:17 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:48:17 --> Controller Class Initialized
DEBUG - 2013-11-05 08:48:17 --> Model Class Initialized
DEBUG - 2013-11-05 08:48:17 --> Model Class Initialized
DEBUG - 2013-11-05 08:48:17 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:48:17 --> after session initialization................
ERROR - 2013-11-05 08:48:17 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-05 08:48:17 --> Config Class Initialized
DEBUG - 2013-11-05 08:48:17 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:48:17 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:48:17 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:48:17 --> URI Class Initialized
DEBUG - 2013-11-05 08:48:17 --> Router Class Initialized
ERROR - 2013-11-05 08:48:17 --> 404 Page Not Found --> css
DEBUG - 2013-11-05 08:48:21 --> Config Class Initialized
DEBUG - 2013-11-05 08:48:21 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:48:21 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:48:21 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:48:21 --> URI Class Initialized
DEBUG - 2013-11-05 08:48:21 --> Router Class Initialized
DEBUG - 2013-11-05 08:48:21 --> Output Class Initialized
DEBUG - 2013-11-05 08:48:21 --> Security Class Initialized
DEBUG - 2013-11-05 08:48:21 --> Input Class Initialized
DEBUG - 2013-11-05 08:48:21 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:48:21 --> Language Class Initialized
DEBUG - 2013-11-05 08:48:21 --> Loader Class Initialized
DEBUG - 2013-11-05 08:48:21 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:48:21 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:48:21 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:48:21 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:48:21 --> Session Class Initialized
DEBUG - 2013-11-05 08:48:21 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:48:21 --> Session routines successfully run
DEBUG - 2013-11-05 08:48:21 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:48:21 --> Controller Class Initialized
DEBUG - 2013-11-05 08:48:21 --> Model Class Initialized
DEBUG - 2013-11-05 08:48:21 --> Model Class Initialized
DEBUG - 2013-11-05 08:48:21 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:48:21 --> after session initialization................
INFO  - 2013-11-05 08:48:21 --> The forum id is 1
INFO  - 2013-11-05 08:48:21 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-05 08:48:21 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 1
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '1'
ORDER BY `ft`.`name`)
INFO  - 2013-11-05 08:48:21 --> The encoded json is [{"id":"4","text":"Eye Defects","hasChildren":true},{"id":"1","text":"ASTIGMATISM","hasChildren":false},{"id":"2","text":"CATARACT","hasChildren":false}]
DEBUG - 2013-11-05 08:48:21 --> Final output sent to browser
DEBUG - 2013-11-05 08:48:21 --> Total execution time: 0.0530
DEBUG - 2013-11-05 08:48:22 --> Config Class Initialized
DEBUG - 2013-11-05 08:48:22 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:48:22 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:48:22 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:48:22 --> URI Class Initialized
DEBUG - 2013-11-05 08:48:22 --> Router Class Initialized
DEBUG - 2013-11-05 08:48:22 --> Output Class Initialized
DEBUG - 2013-11-05 08:48:22 --> Security Class Initialized
DEBUG - 2013-11-05 08:48:22 --> Input Class Initialized
DEBUG - 2013-11-05 08:48:22 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:48:22 --> Language Class Initialized
DEBUG - 2013-11-05 08:48:22 --> Loader Class Initialized
DEBUG - 2013-11-05 08:48:22 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:48:22 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:48:22 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:48:22 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:48:22 --> Session Class Initialized
DEBUG - 2013-11-05 08:48:22 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:48:22 --> Session routines successfully run
DEBUG - 2013-11-05 08:48:22 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:48:22 --> Controller Class Initialized
DEBUG - 2013-11-05 08:48:22 --> Model Class Initialized
DEBUG - 2013-11-05 08:48:22 --> Model Class Initialized
DEBUG - 2013-11-05 08:48:22 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:48:22 --> after session initialization................
INFO  - 2013-11-05 08:48:22 --> The forum id is 4
INFO  - 2013-11-05 08:48:22 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-05 08:48:22 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 4
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '4'
ORDER BY `ft`.`name`)
INFO  - 2013-11-05 08:48:22 --> The encoded json is [{"id":"6","text":"Long Sight","hasChildren":true},{"id":"3","text":"CONJUCTIVITIS","hasChildren":false},{"id":"5","text":"BLUE PUPILS","hasChildren":false},{"id":"6","text":"BULDGED EYES","hasChildren":false},{"id":"10","text":"NIGHT BLINDNESS","hasChildren":false}]
DEBUG - 2013-11-05 08:48:22 --> Final output sent to browser
DEBUG - 2013-11-05 08:48:22 --> Total execution time: 0.0510
DEBUG - 2013-11-05 08:48:32 --> Config Class Initialized
DEBUG - 2013-11-05 08:48:32 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:48:32 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:48:32 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:48:32 --> URI Class Initialized
DEBUG - 2013-11-05 08:48:32 --> Router Class Initialized
DEBUG - 2013-11-05 08:48:32 --> Output Class Initialized
DEBUG - 2013-11-05 08:48:32 --> Security Class Initialized
DEBUG - 2013-11-05 08:48:32 --> Input Class Initialized
DEBUG - 2013-11-05 08:48:32 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:48:32 --> Language Class Initialized
DEBUG - 2013-11-05 08:48:32 --> Loader Class Initialized
DEBUG - 2013-11-05 08:48:32 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:48:32 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:48:32 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:48:32 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:48:32 --> Session Class Initialized
DEBUG - 2013-11-05 08:48:32 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:48:32 --> Session routines successfully run
DEBUG - 2013-11-05 08:48:32 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:48:32 --> Controller Class Initialized
DEBUG - 2013-11-05 08:48:32 --> Model Class Initialized
DEBUG - 2013-11-05 08:48:32 --> Model Class Initialized
DEBUG - 2013-11-05 08:48:32 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:48:32 --> after session initialization................
INFO  - 2013-11-05 08:48:32 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-05 08:48:32 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-05 08:48:32 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
DEBUG - 2013-11-05 08:48:32 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-05 08:48:32 --> Final output sent to browser
DEBUG - 2013-11-05 08:48:32 --> Total execution time: 0.0510
DEBUG - 2013-11-05 08:48:33 --> Config Class Initialized
DEBUG - 2013-11-05 08:48:33 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:48:33 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:48:33 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:48:33 --> URI Class Initialized
DEBUG - 2013-11-05 08:48:33 --> Router Class Initialized
DEBUG - 2013-11-05 08:48:33 --> Output Class Initialized
DEBUG - 2013-11-05 08:48:33 --> Security Class Initialized
DEBUG - 2013-11-05 08:48:33 --> Input Class Initialized
DEBUG - 2013-11-05 08:48:33 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:48:33 --> Language Class Initialized
DEBUG - 2013-11-05 08:48:33 --> Loader Class Initialized
DEBUG - 2013-11-05 08:48:33 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:48:33 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:48:33 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:48:33 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:48:33 --> Session Class Initialized
DEBUG - 2013-11-05 08:48:33 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:48:33 --> Session routines successfully run
DEBUG - 2013-11-05 08:48:33 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:48:33 --> Controller Class Initialized
DEBUG - 2013-11-05 08:48:33 --> Model Class Initialized
DEBUG - 2013-11-05 08:48:33 --> Model Class Initialized
DEBUG - 2013-11-05 08:48:33 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:48:33 --> after session initialization................
ERROR - 2013-11-05 08:48:33 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-05 08:51:13 --> Config Class Initialized
DEBUG - 2013-11-05 08:51:13 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:51:13 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:51:13 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:51:13 --> URI Class Initialized
DEBUG - 2013-11-05 08:51:13 --> Router Class Initialized
DEBUG - 2013-11-05 08:51:13 --> Output Class Initialized
DEBUG - 2013-11-05 08:51:13 --> Security Class Initialized
DEBUG - 2013-11-05 08:51:13 --> Input Class Initialized
DEBUG - 2013-11-05 08:51:13 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:51:13 --> Language Class Initialized
DEBUG - 2013-11-05 08:51:13 --> Loader Class Initialized
DEBUG - 2013-11-05 08:51:13 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:51:13 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:51:13 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:51:13 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:51:13 --> Session Class Initialized
DEBUG - 2013-11-05 08:51:13 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:51:13 --> Session routines successfully run
DEBUG - 2013-11-05 08:51:13 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:51:13 --> Controller Class Initialized
DEBUG - 2013-11-05 08:51:13 --> Model Class Initialized
DEBUG - 2013-11-05 08:51:13 --> Model Class Initialized
DEBUG - 2013-11-05 08:51:13 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:51:13 --> after session initialization................
INFO  - 2013-11-05 08:51:13 --> last news id is 0
INFO  - 2013-11-05 08:51:13 --> SELECT a.id_article as id, a.title as newsletter_title, a.description as newsletter_description, a.guestonly as guestonly, a.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`article` a)
JOIN `member` m ON `a`.`memberid_member` = `m`.`id_member`
WHERE `a`.`id_article` <> 0
ORDER BY `a`.`id_article` desc
LIMIT 15
INFO  - 2013-11-05 08:51:13 --> after newsleters list has been clicked.................
INFO  - 2013-11-05 08:51:13 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=112&article_type=newsletter_title
INFO  - 2013-11-05 08:51:13 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=111&article_type=newsletter_title
INFO  - 2013-11-05 08:51:13 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=110&article_type=newsletter_title
INFO  - 2013-11-05 08:51:13 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=109&article_type=newsletter_title
INFO  - 2013-11-05 08:51:13 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=108&article_type=newsletter_title
INFO  - 2013-11-05 08:51:13 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=107&article_type=newsletter_title
INFO  - 2013-11-05 08:51:13 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=106&article_type=newsletter_title
INFO  - 2013-11-05 08:51:13 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=105&article_type=newsletter_title
INFO  - 2013-11-05 08:51:13 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=104&article_type=newsletter_title
INFO  - 2013-11-05 08:51:13 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=103&article_type=newsletter_title
INFO  - 2013-11-05 08:51:13 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=102&article_type=newsletter_title
INFO  - 2013-11-05 08:51:13 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=101&article_type=newsletter_title
INFO  - 2013-11-05 08:51:13 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=100&article_type=newsletter_title
INFO  - 2013-11-05 08:51:13 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=99&article_type=newsletter_title
INFO  - 2013-11-05 08:51:13 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=98&article_type=newsletter_title
DEBUG - 2013-11-05 08:51:13 --> File loaded: ../pharmaray-application/views/articles.php
DEBUG - 2013-11-05 08:51:13 --> Final output sent to browser
DEBUG - 2013-11-05 08:51:13 --> Total execution time: 0.0730
DEBUG - 2013-11-05 08:51:17 --> Config Class Initialized
DEBUG - 2013-11-05 08:51:17 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:51:17 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:51:17 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:51:17 --> URI Class Initialized
DEBUG - 2013-11-05 08:51:17 --> Router Class Initialized
DEBUG - 2013-11-05 08:51:17 --> Output Class Initialized
DEBUG - 2013-11-05 08:51:17 --> Security Class Initialized
DEBUG - 2013-11-05 08:51:17 --> Input Class Initialized
DEBUG - 2013-11-05 08:51:17 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:51:17 --> Language Class Initialized
DEBUG - 2013-11-05 08:51:17 --> Loader Class Initialized
DEBUG - 2013-11-05 08:51:17 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:51:17 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:51:17 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:51:17 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:51:17 --> Session Class Initialized
DEBUG - 2013-11-05 08:51:17 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:51:17 --> Session routines successfully run
DEBUG - 2013-11-05 08:51:17 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:51:17 --> Controller Class Initialized
DEBUG - 2013-11-05 08:51:17 --> Model Class Initialized
DEBUG - 2013-11-05 08:51:17 --> Model Class Initialized
DEBUG - 2013-11-05 08:51:17 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:51:17 --> after session initialization................
INFO  - 2013-11-05 08:51:17 --> last article id is 98
DEBUG - 2013-11-05 08:51:17 --> Final output sent to browser
DEBUG - 2013-11-05 08:51:17 --> Total execution time: 0.0760
DEBUG - 2013-11-05 08:51:18 --> Config Class Initialized
DEBUG - 2013-11-05 08:51:18 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:51:18 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:51:18 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:51:18 --> URI Class Initialized
DEBUG - 2013-11-05 08:51:18 --> Router Class Initialized
DEBUG - 2013-11-05 08:51:18 --> Output Class Initialized
DEBUG - 2013-11-05 08:51:18 --> Security Class Initialized
DEBUG - 2013-11-05 08:51:18 --> Input Class Initialized
DEBUG - 2013-11-05 08:51:22 --> Config Class Initialized
DEBUG - 2013-11-05 08:51:22 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:51:22 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:51:22 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:51:22 --> URI Class Initialized
DEBUG - 2013-11-05 08:51:22 --> Router Class Initialized
DEBUG - 2013-11-05 08:51:22 --> Output Class Initialized
DEBUG - 2013-11-05 08:51:22 --> Security Class Initialized
DEBUG - 2013-11-05 08:51:22 --> Input Class Initialized
DEBUG - 2013-11-05 08:51:22 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:51:22 --> Language Class Initialized
DEBUG - 2013-11-05 08:51:22 --> Loader Class Initialized
DEBUG - 2013-11-05 08:51:22 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:51:22 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:51:22 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:51:22 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:51:22 --> Session Class Initialized
DEBUG - 2013-11-05 08:51:22 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:51:22 --> Session routines successfully run
DEBUG - 2013-11-05 08:51:22 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:51:22 --> Controller Class Initialized
DEBUG - 2013-11-05 08:51:22 --> Model Class Initialized
DEBUG - 2013-11-05 08:51:22 --> Model Class Initialized
DEBUG - 2013-11-05 08:51:22 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:51:22 --> after session initialization................
INFO  - 2013-11-05 08:51:22 --> article id is 73
ERROR - 2013-11-05 08:51:22 --> Severity: Notice  --> Array to string conversion C:\xampp\htdocs\Pharmarays\pharmaray-system\libraries\Log.php 99
INFO  - 2013-11-05 08:51:22 --> Array
DEBUG - 2013-11-05 08:51:22 --> Final output sent to browser
DEBUG - 2013-11-05 08:51:22 --> Total execution time: 0.0590
DEBUG - 2013-11-05 08:51:36 --> Config Class Initialized
DEBUG - 2013-11-05 08:51:37 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:51:37 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:51:37 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:51:37 --> URI Class Initialized
DEBUG - 2013-11-05 08:51:37 --> Router Class Initialized
DEBUG - 2013-11-05 08:51:37 --> Output Class Initialized
DEBUG - 2013-11-05 08:51:37 --> Security Class Initialized
DEBUG - 2013-11-05 08:51:37 --> Input Class Initialized
DEBUG - 2013-11-05 08:51:37 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:51:37 --> Language Class Initialized
DEBUG - 2013-11-05 08:51:37 --> Loader Class Initialized
DEBUG - 2013-11-05 08:51:37 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:51:37 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:51:37 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:51:37 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:51:37 --> Session Class Initialized
DEBUG - 2013-11-05 08:51:37 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:51:37 --> Session routines successfully run
DEBUG - 2013-11-05 08:51:37 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:51:37 --> Controller Class Initialized
DEBUG - 2013-11-05 08:51:37 --> Model Class Initialized
DEBUG - 2013-11-05 08:51:37 --> Model Class Initialized
DEBUG - 2013-11-05 08:51:37 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:51:37 --> after session initialization................
INFO  - 2013-11-05 08:51:37 --> article id is 76
ERROR - 2013-11-05 08:51:37 --> Severity: Notice  --> Array to string conversion C:\xampp\htdocs\Pharmarays\pharmaray-system\libraries\Log.php 99
INFO  - 2013-11-05 08:51:37 --> Array
DEBUG - 2013-11-05 08:51:37 --> Final output sent to browser
DEBUG - 2013-11-05 08:51:37 --> Total execution time: 0.0780
DEBUG - 2013-11-05 08:55:01 --> Config Class Initialized
DEBUG - 2013-11-05 08:55:01 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:55:01 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:55:01 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:55:01 --> URI Class Initialized
DEBUG - 2013-11-05 08:55:01 --> Router Class Initialized
DEBUG - 2013-11-05 08:55:01 --> Output Class Initialized
DEBUG - 2013-11-05 08:55:01 --> Security Class Initialized
DEBUG - 2013-11-05 08:55:01 --> Input Class Initialized
DEBUG - 2013-11-05 08:55:01 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:55:01 --> Language Class Initialized
DEBUG - 2013-11-05 08:55:01 --> Loader Class Initialized
DEBUG - 2013-11-05 08:55:01 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:55:01 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:55:01 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:55:01 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:55:01 --> Session Class Initialized
DEBUG - 2013-11-05 08:55:01 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:55:01 --> Session routines successfully run
DEBUG - 2013-11-05 08:55:01 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:55:01 --> Controller Class Initialized
DEBUG - 2013-11-05 08:55:01 --> Model Class Initialized
DEBUG - 2013-11-05 08:55:01 --> Model Class Initialized
DEBUG - 2013-11-05 08:55:01 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:55:01 --> after session initialization................
INFO  - 2013-11-05 08:55:01 --> last news id is 0
INFO  - 2013-11-05 08:55:01 --> SELECT a.id_article as id, a.title as newsletter_title, a.description as newsletter_description, a.guestonly as guestonly, a.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`article` a)
JOIN `member` m ON `a`.`memberid_member` = `m`.`id_member`
WHERE `a`.`id_article` <> 0
ORDER BY `a`.`id_article` desc
LIMIT 15
INFO  - 2013-11-05 08:55:01 --> after newsleters list has been clicked.................
INFO  - 2013-11-05 08:55:01 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=112&article_type=newsletter_title
INFO  - 2013-11-05 08:55:01 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=111&article_type=newsletter_title
INFO  - 2013-11-05 08:55:01 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=110&article_type=newsletter_title
INFO  - 2013-11-05 08:55:01 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=109&article_type=newsletter_title
INFO  - 2013-11-05 08:55:01 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=108&article_type=newsletter_title
INFO  - 2013-11-05 08:55:01 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=107&article_type=newsletter_title
INFO  - 2013-11-05 08:55:01 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=106&article_type=newsletter_title
INFO  - 2013-11-05 08:55:01 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=105&article_type=newsletter_title
INFO  - 2013-11-05 08:55:01 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=104&article_type=newsletter_title
INFO  - 2013-11-05 08:55:01 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=103&article_type=newsletter_title
INFO  - 2013-11-05 08:55:01 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=102&article_type=newsletter_title
INFO  - 2013-11-05 08:55:01 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=101&article_type=newsletter_title
INFO  - 2013-11-05 08:55:01 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=100&article_type=newsletter_title
INFO  - 2013-11-05 08:55:01 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=99&article_type=newsletter_title
INFO  - 2013-11-05 08:55:01 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=98&article_type=newsletter_title
DEBUG - 2013-11-05 08:55:01 --> File loaded: ../pharmaray-application/views/articles.php
DEBUG - 2013-11-05 08:55:01 --> Final output sent to browser
DEBUG - 2013-11-05 08:55:01 --> Total execution time: 0.0870
DEBUG - 2013-11-05 08:55:03 --> Config Class Initialized
DEBUG - 2013-11-05 08:55:03 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:55:03 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:55:03 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:55:03 --> URI Class Initialized
DEBUG - 2013-11-05 08:55:03 --> Router Class Initialized
DEBUG - 2013-11-05 08:55:03 --> Output Class Initialized
DEBUG - 2013-11-05 08:55:03 --> Security Class Initialized
DEBUG - 2013-11-05 08:55:03 --> Input Class Initialized
DEBUG - 2013-11-05 08:55:03 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:55:03 --> Language Class Initialized
DEBUG - 2013-11-05 08:55:03 --> Loader Class Initialized
DEBUG - 2013-11-05 08:55:03 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:55:03 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:55:03 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:55:03 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:55:03 --> Session Class Initialized
DEBUG - 2013-11-05 08:55:03 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:55:03 --> Session routines successfully run
DEBUG - 2013-11-05 08:55:03 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:55:03 --> Controller Class Initialized
DEBUG - 2013-11-05 08:55:03 --> Model Class Initialized
DEBUG - 2013-11-05 08:55:03 --> Model Class Initialized
DEBUG - 2013-11-05 08:55:03 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:55:03 --> after session initialization................
INFO  - 2013-11-05 08:55:03 --> article id is 99
DEBUG - 2013-11-05 08:55:36 --> Config Class Initialized
DEBUG - 2013-11-05 08:55:36 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:55:36 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:55:36 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:55:36 --> URI Class Initialized
DEBUG - 2013-11-05 08:55:36 --> Router Class Initialized
DEBUG - 2013-11-05 08:55:36 --> Output Class Initialized
DEBUG - 2013-11-05 08:55:36 --> Security Class Initialized
DEBUG - 2013-11-05 08:55:36 --> Input Class Initialized
DEBUG - 2013-11-05 08:55:36 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:55:36 --> Language Class Initialized
DEBUG - 2013-11-05 08:55:36 --> Loader Class Initialized
DEBUG - 2013-11-05 08:55:36 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:55:36 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:55:36 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:55:36 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:55:36 --> Session Class Initialized
DEBUG - 2013-11-05 08:55:36 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:55:36 --> Session routines successfully run
DEBUG - 2013-11-05 08:55:36 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:55:36 --> Controller Class Initialized
DEBUG - 2013-11-05 08:55:36 --> Model Class Initialized
DEBUG - 2013-11-05 08:55:36 --> Model Class Initialized
DEBUG - 2013-11-05 08:55:36 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:55:36 --> after session initialization................
DEBUG - 2013-11-05 08:55:36 --> Config Class Initialized
DEBUG - 2013-11-05 08:55:36 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:55:36 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:55:36 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:55:36 --> URI Class Initialized
DEBUG - 2013-11-05 08:55:36 --> Router Class Initialized
DEBUG - 2013-11-05 08:55:36 --> No URI present. Default controller set.
DEBUG - 2013-11-05 08:55:36 --> Output Class Initialized
DEBUG - 2013-11-05 08:55:36 --> Security Class Initialized
DEBUG - 2013-11-05 08:55:36 --> Input Class Initialized
DEBUG - 2013-11-05 08:55:36 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:55:36 --> Language Class Initialized
DEBUG - 2013-11-05 08:55:36 --> Loader Class Initialized
DEBUG - 2013-11-05 08:55:36 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:55:36 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:55:36 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:55:36 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:55:36 --> Session Class Initialized
DEBUG - 2013-11-05 08:55:36 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:55:36 --> A session cookie was not found.
DEBUG - 2013-11-05 08:55:36 --> Session routines successfully run
DEBUG - 2013-11-05 08:55:36 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:55:36 --> Controller Class Initialized
INFO  - 2013-11-05 08:55:36 --> the form message==>
INFO  - 2013-11-05 08:55:36 --> The session id is ========>3d50820b9a2b26db6122e3579f2ca3ec and the member id is =======>
INFO  - 2013-11-05 08:55:36 --> after the retrieving session list.................//////////
DEBUG - 2013-11-05 08:55:36 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-11-05 08:55:36 --> Final output sent to browser
DEBUG - 2013-11-05 08:55:36 --> Total execution time: 0.0490
DEBUG - 2013-11-05 08:55:38 --> Config Class Initialized
DEBUG - 2013-11-05 08:55:38 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:55:38 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:55:38 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:55:38 --> URI Class Initialized
DEBUG - 2013-11-05 08:55:38 --> Router Class Initialized
DEBUG - 2013-11-05 08:55:38 --> Output Class Initialized
DEBUG - 2013-11-05 08:55:38 --> Security Class Initialized
DEBUG - 2013-11-05 08:55:38 --> Input Class Initialized
DEBUG - 2013-11-05 08:55:38 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:55:38 --> Language Class Initialized
DEBUG - 2013-11-05 08:55:38 --> Loader Class Initialized
DEBUG - 2013-11-05 08:55:38 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:55:38 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:55:38 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:55:38 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:55:38 --> Session Class Initialized
DEBUG - 2013-11-05 08:55:38 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:55:38 --> Session routines successfully run
DEBUG - 2013-11-05 08:55:38 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:55:38 --> Controller Class Initialized
DEBUG - 2013-11-05 08:55:38 --> Model Class Initialized
DEBUG - 2013-11-05 08:55:39 --> Model Class Initialized
DEBUG - 2013-11-05 08:55:39 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:55:39 --> after session initialization................
INFO  - 2013-11-05 08:55:39 --> after rays has been clicked.................
INFO  - 2013-11-05 08:55:39 --> last article id is 0
INFO  - 2013-11-05 08:55:39 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-05 08:55:39 --> 1 the guest only data>>>>>
INFO  - 2013-11-05 08:55:39 --> 1 the guest only data>> AFTER >>>
INFO  - 2013-11-05 08:55:39 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-05 08:55:39 --> 0 the guest only data>>>>>
INFO  - 2013-11-05 08:55:39 --> 0 the guest only data>> AFTER >>>#111
INFO  - 2013-11-05 08:55:39 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-05 08:55:39 --> 0 the guest only data>>>>>#111
INFO  - 2013-11-05 08:55:39 --> 0 the guest only data>> AFTER >>>#110
INFO  - 2013-11-05 08:55:39 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-05 08:55:39 --> 0 the guest only data>>>>>#110
INFO  - 2013-11-05 08:55:39 --> 0 the guest only data>> AFTER >>>#109
INFO  - 2013-11-05 08:55:39 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-05 08:55:39 --> 0 the guest only data>>>>>#109
INFO  - 2013-11-05 08:55:39 --> 0 the guest only data>> AFTER >>>#108
INFO  - 2013-11-05 08:55:39 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-05 08:55:39 --> 0 the guest only data>>>>>#108
INFO  - 2013-11-05 08:55:39 --> 0 the guest only data>> AFTER >>>#107
INFO  - 2013-11-05 08:55:39 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-05 08:55:39 --> 1 the guest only data>>>>>#107
INFO  - 2013-11-05 08:55:39 --> 1 the guest only data>> AFTER >>>#107
INFO  - 2013-11-05 08:55:39 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-05 08:55:39 --> 0 the guest only data>>>>>#107
INFO  - 2013-11-05 08:55:39 --> 0 the guest only data>> AFTER >>>#105
INFO  - 2013-11-05 08:55:39 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-05 08:55:39 --> 0 the guest only data>>>>>#105
INFO  - 2013-11-05 08:55:39 --> 0 the guest only data>> AFTER >>>#104
INFO  - 2013-11-05 08:55:39 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-05 08:55:39 --> 0 the guest only data>>>>>#104
INFO  - 2013-11-05 08:55:39 --> 0 the guest only data>> AFTER >>>#103
INFO  - 2013-11-05 08:55:39 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-05 08:55:39 --> 0 the guest only data>>>>>#103
INFO  - 2013-11-05 08:55:39 --> 0 the guest only data>> AFTER >>>#102
INFO  - 2013-11-05 08:55:39 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-05 08:55:39 --> 0 the guest only data>>>>>#102
INFO  - 2013-11-05 08:55:39 --> 0 the guest only data>> AFTER >>>#101
INFO  - 2013-11-05 08:55:39 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-05 08:55:39 --> 0 the guest only data>>>>>#101
INFO  - 2013-11-05 08:55:39 --> 0 the guest only data>> AFTER >>>#100
INFO  - 2013-11-05 08:55:39 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-05 08:55:39 --> 0 the guest only data>>>>>#100
INFO  - 2013-11-05 08:55:39 --> 0 the guest only data>> AFTER >>>#99
INFO  - 2013-11-05 08:55:39 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-05 08:55:39 --> 0 the guest only data>>>>>#99
INFO  - 2013-11-05 08:55:39 --> 0 the guest only data>> AFTER >>>#98
INFO  - 2013-11-05 08:55:39 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-05 08:55:39 --> 0 the guest only data>>>>>#98
INFO  - 2013-11-05 08:55:39 --> 0 the guest only data>> AFTER >>>#97
INFO  - 2013-11-05 08:55:39 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-05 08:55:39 --> 1 the guest only data>>>>>#97
INFO  - 2013-11-05 08:55:39 --> 1 the guest only data>> AFTER >>>#97
INFO  - 2013-11-05 08:55:39 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-05 08:55:39 --> 0 the guest only data>>>>>#97
INFO  - 2013-11-05 08:55:39 --> 0 the guest only data>> AFTER >>>#95
INFO  - 2013-11-05 08:55:39 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-05 08:55:39 --> 0 the guest only data>>>>>#95
INFO  - 2013-11-05 08:55:39 --> 0 the guest only data>> AFTER >>>#94
INFO  - 2013-11-05 08:55:39 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-05 08:55:39 --> 1 the guest only data>>>>>#94
INFO  - 2013-11-05 08:55:39 --> 1 the guest only data>> AFTER >>>#94
DEBUG - 2013-11-05 08:55:39 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-11-05 08:55:39 --> Final output sent to browser
DEBUG - 2013-11-05 08:55:39 --> Total execution time: 0.0990
DEBUG - 2013-11-05 08:55:45 --> Config Class Initialized
DEBUG - 2013-11-05 08:55:45 --> Hooks Class Initialized
DEBUG - 2013-11-05 08:55:45 --> Utf8 Class Initialized
DEBUG - 2013-11-05 08:55:45 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 08:55:45 --> URI Class Initialized
DEBUG - 2013-11-05 08:55:45 --> Router Class Initialized
DEBUG - 2013-11-05 08:55:45 --> Output Class Initialized
DEBUG - 2013-11-05 08:55:45 --> Security Class Initialized
DEBUG - 2013-11-05 08:55:45 --> Input Class Initialized
DEBUG - 2013-11-05 08:55:45 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 08:55:45 --> Language Class Initialized
DEBUG - 2013-11-05 08:55:45 --> Loader Class Initialized
DEBUG - 2013-11-05 08:55:45 --> Helper loaded: form_helper
DEBUG - 2013-11-05 08:55:45 --> Helper loaded: url_helper
DEBUG - 2013-11-05 08:55:45 --> Helper loaded: html_helper
DEBUG - 2013-11-05 08:55:45 --> Database Driver Class Initialized
DEBUG - 2013-11-05 08:55:45 --> Session Class Initialized
DEBUG - 2013-11-05 08:55:45 --> Helper loaded: string_helper
DEBUG - 2013-11-05 08:55:45 --> Session routines successfully run
DEBUG - 2013-11-05 08:55:45 --> Form Validation Class Initialized
DEBUG - 2013-11-05 08:55:45 --> Controller Class Initialized
DEBUG - 2013-11-05 08:55:45 --> Model Class Initialized
DEBUG - 2013-11-05 08:55:45 --> Model Class Initialized
DEBUG - 2013-11-05 08:55:45 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 08:55:45 --> after session initialization................
INFO  - 2013-11-05 08:55:45 --> article id is 112
DEBUG - 2013-11-05 09:00:37 --> Config Class Initialized
DEBUG - 2013-11-05 09:00:37 --> Hooks Class Initialized
DEBUG - 2013-11-05 09:00:37 --> Utf8 Class Initialized
DEBUG - 2013-11-05 09:00:37 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 09:00:37 --> URI Class Initialized
DEBUG - 2013-11-05 09:00:37 --> Router Class Initialized
DEBUG - 2013-11-05 09:00:37 --> Output Class Initialized
DEBUG - 2013-11-05 09:00:37 --> Security Class Initialized
DEBUG - 2013-11-05 09:00:37 --> Input Class Initialized
DEBUG - 2013-11-05 09:00:37 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 09:00:37 --> Language Class Initialized
DEBUG - 2013-11-05 09:00:37 --> Loader Class Initialized
DEBUG - 2013-11-05 09:00:37 --> Helper loaded: form_helper
DEBUG - 2013-11-05 09:00:37 --> Helper loaded: url_helper
DEBUG - 2013-11-05 09:00:37 --> Helper loaded: html_helper
DEBUG - 2013-11-05 09:00:37 --> Database Driver Class Initialized
DEBUG - 2013-11-05 09:00:37 --> Session Class Initialized
DEBUG - 2013-11-05 09:00:37 --> Helper loaded: string_helper
DEBUG - 2013-11-05 09:00:37 --> Session routines successfully run
DEBUG - 2013-11-05 09:00:37 --> Form Validation Class Initialized
DEBUG - 2013-11-05 09:00:37 --> Controller Class Initialized
DEBUG - 2013-11-05 09:00:37 --> Model Class Initialized
DEBUG - 2013-11-05 09:00:37 --> Model Class Initialized
DEBUG - 2013-11-05 09:00:37 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 09:00:37 --> after session initialization................
INFO  - 2013-11-05 09:00:37 --> inside rays login auth.............sys_admin/user_authorization/redirecttorays
INFO  - 2013-11-05 09:00:37 --> inside rays login auth.............sys_admin/user_authorization/redirecttorays
DEBUG - 2013-11-05 09:00:37 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-11-05 09:00:37 --> XSS Filtering completed
DEBUG - 2013-11-05 09:00:37 --> XSS Filtering completed
INFO  - 2013-11-05 09:00:37 --> before getting the relation of member............6
INFO  - 2013-11-05 09:00:37 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-11-05 09:00:37 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-05 09:00:37 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-11-05 09:00:37 --> inside retrieving vacancy for member
INFO  - 2013-11-05 09:00:37 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-11-05 09:00:37 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-05 09:00:37 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-11-05 09:00:37 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-11-05 09:00:37 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-05 09:00:37 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-05 09:00:37 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-11-05 09:00:37 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-11-05 09:00:37 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-11-05 09:00:37 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-11-05 09:00:37 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-11-05 09:00:37 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-11-05 09:00:37 --> Final output sent to browser
DEBUG - 2013-11-05 09:00:37 --> Total execution time: 0.1060
DEBUG - 2013-11-05 09:00:37 --> Config Class Initialized
DEBUG - 2013-11-05 09:00:37 --> Hooks Class Initialized
DEBUG - 2013-11-05 09:00:37 --> Utf8 Class Initialized
DEBUG - 2013-11-05 09:00:37 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 09:00:37 --> URI Class Initialized
DEBUG - 2013-11-05 09:00:37 --> Router Class Initialized
DEBUG - 2013-11-05 09:00:37 --> Output Class Initialized
DEBUG - 2013-11-05 09:00:37 --> Security Class Initialized
DEBUG - 2013-11-05 09:00:37 --> Input Class Initialized
DEBUG - 2013-11-05 09:00:37 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 09:00:37 --> Language Class Initialized
DEBUG - 2013-11-05 09:00:37 --> Loader Class Initialized
DEBUG - 2013-11-05 09:00:37 --> Helper loaded: form_helper
DEBUG - 2013-11-05 09:00:37 --> Helper loaded: url_helper
DEBUG - 2013-11-05 09:00:37 --> Helper loaded: html_helper
DEBUG - 2013-11-05 09:00:37 --> Database Driver Class Initialized
DEBUG - 2013-11-05 09:00:37 --> Session Class Initialized
DEBUG - 2013-11-05 09:00:37 --> Helper loaded: string_helper
DEBUG - 2013-11-05 09:00:37 --> Session routines successfully run
DEBUG - 2013-11-05 09:00:37 --> Form Validation Class Initialized
DEBUG - 2013-11-05 09:00:37 --> Controller Class Initialized
DEBUG - 2013-11-05 09:00:37 --> Model Class Initialized
DEBUG - 2013-11-05 09:00:37 --> Model Class Initialized
DEBUG - 2013-11-05 09:00:37 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 09:00:37 --> after session initialization................
ERROR - 2013-11-05 09:00:37 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-05 09:00:37 --> Config Class Initialized
DEBUG - 2013-11-05 09:00:37 --> Hooks Class Initialized
DEBUG - 2013-11-05 09:00:37 --> Utf8 Class Initialized
DEBUG - 2013-11-05 09:00:37 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 09:00:37 --> URI Class Initialized
DEBUG - 2013-11-05 09:00:37 --> Router Class Initialized
ERROR - 2013-11-05 09:00:37 --> 404 Page Not Found --> css
DEBUG - 2013-11-05 19:46:31 --> Config Class Initialized
DEBUG - 2013-11-05 19:46:31 --> Hooks Class Initialized
DEBUG - 2013-11-05 19:46:31 --> Utf8 Class Initialized
DEBUG - 2013-11-05 19:46:31 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 19:46:31 --> URI Class Initialized
DEBUG - 2013-11-05 19:46:31 --> Router Class Initialized
DEBUG - 2013-11-05 19:46:32 --> No URI present. Default controller set.
DEBUG - 2013-11-05 19:46:32 --> Output Class Initialized
DEBUG - 2013-11-05 19:46:32 --> Security Class Initialized
DEBUG - 2013-11-05 19:46:32 --> Input Class Initialized
DEBUG - 2013-11-05 19:46:32 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 19:46:32 --> Language Class Initialized
DEBUG - 2013-11-05 19:46:32 --> Loader Class Initialized
DEBUG - 2013-11-05 19:46:32 --> Helper loaded: form_helper
DEBUG - 2013-11-05 19:46:32 --> Helper loaded: url_helper
DEBUG - 2013-11-05 19:46:32 --> Helper loaded: html_helper
DEBUG - 2013-11-05 19:46:32 --> Database Driver Class Initialized
DEBUG - 2013-11-05 19:46:33 --> Session Class Initialized
DEBUG - 2013-11-05 19:46:33 --> Helper loaded: string_helper
DEBUG - 2013-11-05 19:46:33 --> A session cookie was not found.
DEBUG - 2013-11-05 19:46:33 --> Session routines successfully run
DEBUG - 2013-11-05 19:46:33 --> Form Validation Class Initialized
DEBUG - 2013-11-05 19:46:33 --> Controller Class Initialized
INFO  - 2013-11-05 19:46:33 --> the form message==>
INFO  - 2013-11-05 19:46:33 --> The session id is ========>e1f8a434a14585cb6aad6a7470ac4c30 and the member id is =======>
INFO  - 2013-11-05 19:46:33 --> after the retrieving session list.................//////////
DEBUG - 2013-11-05 19:46:33 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-11-05 19:46:33 --> Final output sent to browser
DEBUG - 2013-11-05 19:46:33 --> Total execution time: 1.5600
DEBUG - 2013-11-05 19:46:40 --> Config Class Initialized
DEBUG - 2013-11-05 19:46:40 --> Hooks Class Initialized
DEBUG - 2013-11-05 19:46:40 --> Utf8 Class Initialized
DEBUG - 2013-11-05 19:46:40 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 19:46:40 --> URI Class Initialized
DEBUG - 2013-11-05 19:46:40 --> Router Class Initialized
DEBUG - 2013-11-05 19:46:40 --> Output Class Initialized
DEBUG - 2013-11-05 19:46:40 --> Security Class Initialized
DEBUG - 2013-11-05 19:46:40 --> Input Class Initialized
DEBUG - 2013-11-05 19:46:40 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 19:46:40 --> Language Class Initialized
DEBUG - 2013-11-05 19:46:40 --> Loader Class Initialized
DEBUG - 2013-11-05 19:46:40 --> Helper loaded: form_helper
DEBUG - 2013-11-05 19:46:40 --> Helper loaded: url_helper
DEBUG - 2013-11-05 19:46:40 --> Helper loaded: html_helper
DEBUG - 2013-11-05 19:46:40 --> Database Driver Class Initialized
DEBUG - 2013-11-05 19:46:40 --> Session Class Initialized
DEBUG - 2013-11-05 19:46:40 --> Helper loaded: string_helper
DEBUG - 2013-11-05 19:46:40 --> Session routines successfully run
DEBUG - 2013-11-05 19:46:40 --> Form Validation Class Initialized
DEBUG - 2013-11-05 19:46:40 --> Controller Class Initialized
DEBUG - 2013-11-05 19:46:40 --> Model Class Initialized
DEBUG - 2013-11-05 19:46:40 --> Model Class Initialized
DEBUG - 2013-11-05 19:46:40 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 19:46:40 --> after session initialization................
INFO  - 2013-11-05 19:46:40 --> after rays has been clicked.................
INFO  - 2013-11-05 19:46:40 --> last article id is 0
INFO  - 2013-11-05 19:46:40 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-05 19:46:40 --> 1 the guest only data>>>>>
INFO  - 2013-11-05 19:46:40 --> 1 the guest only data>> AFTER >>>
INFO  - 2013-11-05 19:46:40 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-05 19:46:40 --> 0 the guest only data>>>>>
INFO  - 2013-11-05 19:46:40 --> 0 the guest only data>> AFTER >>>#111
INFO  - 2013-11-05 19:46:40 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-05 19:46:40 --> 0 the guest only data>>>>>#111
INFO  - 2013-11-05 19:46:40 --> 0 the guest only data>> AFTER >>>#110
INFO  - 2013-11-05 19:46:40 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-05 19:46:40 --> 0 the guest only data>>>>>#110
INFO  - 2013-11-05 19:46:40 --> 0 the guest only data>> AFTER >>>#109
INFO  - 2013-11-05 19:46:40 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-05 19:46:40 --> 0 the guest only data>>>>>#109
INFO  - 2013-11-05 19:46:40 --> 0 the guest only data>> AFTER >>>#108
INFO  - 2013-11-05 19:46:40 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-05 19:46:40 --> 0 the guest only data>>>>>#108
INFO  - 2013-11-05 19:46:40 --> 0 the guest only data>> AFTER >>>#107
INFO  - 2013-11-05 19:46:40 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-05 19:46:40 --> 1 the guest only data>>>>>#107
INFO  - 2013-11-05 19:46:40 --> 1 the guest only data>> AFTER >>>#107
INFO  - 2013-11-05 19:46:40 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-05 19:46:40 --> 0 the guest only data>>>>>#107
INFO  - 2013-11-05 19:46:40 --> 0 the guest only data>> AFTER >>>#105
INFO  - 2013-11-05 19:46:40 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-05 19:46:40 --> 0 the guest only data>>>>>#105
INFO  - 2013-11-05 19:46:40 --> 0 the guest only data>> AFTER >>>#104
INFO  - 2013-11-05 19:46:40 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-05 19:46:40 --> 0 the guest only data>>>>>#104
INFO  - 2013-11-05 19:46:40 --> 0 the guest only data>> AFTER >>>#103
INFO  - 2013-11-05 19:46:40 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-05 19:46:40 --> 0 the guest only data>>>>>#103
INFO  - 2013-11-05 19:46:40 --> 0 the guest only data>> AFTER >>>#102
INFO  - 2013-11-05 19:46:40 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-05 19:46:40 --> 0 the guest only data>>>>>#102
INFO  - 2013-11-05 19:46:40 --> 0 the guest only data>> AFTER >>>#101
INFO  - 2013-11-05 19:46:40 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-05 19:46:40 --> 0 the guest only data>>>>>#101
INFO  - 2013-11-05 19:46:40 --> 0 the guest only data>> AFTER >>>#100
INFO  - 2013-11-05 19:46:40 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-05 19:46:40 --> 0 the guest only data>>>>>#100
INFO  - 2013-11-05 19:46:40 --> 0 the guest only data>> AFTER >>>#99
INFO  - 2013-11-05 19:46:40 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-05 19:46:40 --> 0 the guest only data>>>>>#99
INFO  - 2013-11-05 19:46:40 --> 0 the guest only data>> AFTER >>>#98
INFO  - 2013-11-05 19:46:40 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-05 19:46:40 --> 0 the guest only data>>>>>#98
INFO  - 2013-11-05 19:46:40 --> 0 the guest only data>> AFTER >>>#97
INFO  - 2013-11-05 19:46:40 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-05 19:46:40 --> 1 the guest only data>>>>>#97
INFO  - 2013-11-05 19:46:40 --> 1 the guest only data>> AFTER >>>#97
INFO  - 2013-11-05 19:46:40 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-05 19:46:40 --> 0 the guest only data>>>>>#97
INFO  - 2013-11-05 19:46:40 --> 0 the guest only data>> AFTER >>>#95
INFO  - 2013-11-05 19:46:40 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-05 19:46:40 --> 0 the guest only data>>>>>#95
INFO  - 2013-11-05 19:46:40 --> 0 the guest only data>> AFTER >>>#94
INFO  - 2013-11-05 19:46:40 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-05 19:46:40 --> 1 the guest only data>>>>>#94
INFO  - 2013-11-05 19:46:40 --> 1 the guest only data>> AFTER >>>#94
DEBUG - 2013-11-05 19:46:40 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-11-05 19:46:40 --> Final output sent to browser
DEBUG - 2013-11-05 19:46:40 --> Total execution time: 0.4836
DEBUG - 2013-11-05 19:46:53 --> Config Class Initialized
DEBUG - 2013-11-05 19:46:53 --> Hooks Class Initialized
DEBUG - 2013-11-05 19:46:53 --> Utf8 Class Initialized
DEBUG - 2013-11-05 19:46:53 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 19:46:53 --> URI Class Initialized
DEBUG - 2013-11-05 19:46:53 --> Router Class Initialized
DEBUG - 2013-11-05 19:46:53 --> Output Class Initialized
DEBUG - 2013-11-05 19:46:53 --> Security Class Initialized
DEBUG - 2013-11-05 19:46:53 --> Input Class Initialized
DEBUG - 2013-11-05 19:46:53 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 19:46:53 --> Language Class Initialized
DEBUG - 2013-11-05 19:46:53 --> Loader Class Initialized
DEBUG - 2013-11-05 19:46:53 --> Helper loaded: form_helper
DEBUG - 2013-11-05 19:46:53 --> Helper loaded: url_helper
DEBUG - 2013-11-05 19:46:53 --> Helper loaded: html_helper
DEBUG - 2013-11-05 19:46:53 --> Database Driver Class Initialized
DEBUG - 2013-11-05 19:46:54 --> Session Class Initialized
DEBUG - 2013-11-05 19:46:54 --> Helper loaded: string_helper
DEBUG - 2013-11-05 19:46:54 --> Session routines successfully run
DEBUG - 2013-11-05 19:46:54 --> Form Validation Class Initialized
DEBUG - 2013-11-05 19:46:54 --> Controller Class Initialized
DEBUG - 2013-11-05 19:46:54 --> Model Class Initialized
DEBUG - 2013-11-05 19:46:54 --> Model Class Initialized
DEBUG - 2013-11-05 19:46:54 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 19:46:54 --> after session initialization................
INFO  - 2013-11-05 19:46:54 --> article id is 112
DEBUG - 2013-11-05 19:53:12 --> Config Class Initialized
DEBUG - 2013-11-05 19:53:12 --> Hooks Class Initialized
DEBUG - 2013-11-05 19:53:12 --> Utf8 Class Initialized
DEBUG - 2013-11-05 19:53:12 --> UTF-8 Support Enabled
DEBUG - 2013-11-05 19:53:12 --> URI Class Initialized
DEBUG - 2013-11-05 19:53:12 --> Router Class Initialized
DEBUG - 2013-11-05 19:53:12 --> Output Class Initialized
DEBUG - 2013-11-05 19:53:12 --> Security Class Initialized
DEBUG - 2013-11-05 19:53:12 --> Input Class Initialized
DEBUG - 2013-11-05 19:53:12 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-05 19:53:12 --> Language Class Initialized
DEBUG - 2013-11-05 19:53:12 --> Loader Class Initialized
DEBUG - 2013-11-05 19:53:12 --> Helper loaded: form_helper
DEBUG - 2013-11-05 19:53:12 --> Helper loaded: url_helper
DEBUG - 2013-11-05 19:53:12 --> Helper loaded: html_helper
DEBUG - 2013-11-05 19:53:12 --> Database Driver Class Initialized
DEBUG - 2013-11-05 19:53:12 --> Session Class Initialized
DEBUG - 2013-11-05 19:53:12 --> Helper loaded: string_helper
DEBUG - 2013-11-05 19:53:12 --> Session routines successfully run
DEBUG - 2013-11-05 19:53:12 --> Form Validation Class Initialized
DEBUG - 2013-11-05 19:53:12 --> Controller Class Initialized
DEBUG - 2013-11-05 19:53:12 --> Model Class Initialized
DEBUG - 2013-11-05 19:53:12 --> Model Class Initialized
DEBUG - 2013-11-05 19:53:12 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-05 19:53:12 --> after session initialization................
INFO  - 2013-11-05 19:53:12 --> article id is 112
