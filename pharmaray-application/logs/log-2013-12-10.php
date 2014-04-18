<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2013-12-10 10:25:05 --> Config Class Initialized
DEBUG - 2013-12-10 10:25:05 --> Hooks Class Initialized
DEBUG - 2013-12-10 10:25:05 --> Utf8 Class Initialized
DEBUG - 2013-12-10 10:25:05 --> UTF-8 Support Enabled
DEBUG - 2013-12-10 10:25:05 --> URI Class Initialized
DEBUG - 2013-12-10 10:25:05 --> Router Class Initialized
DEBUG - 2013-12-10 10:25:05 --> No URI present. Default controller set.
DEBUG - 2013-12-10 10:25:05 --> Output Class Initialized
DEBUG - 2013-12-10 10:25:05 --> Security Class Initialized
DEBUG - 2013-12-10 10:25:05 --> Input Class Initialized
DEBUG - 2013-12-10 10:25:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-10 10:25:05 --> Language Class Initialized
DEBUG - 2013-12-10 10:25:05 --> Loader Class Initialized
DEBUG - 2013-12-10 10:25:05 --> Helper loaded: form_helper
DEBUG - 2013-12-10 10:25:05 --> Helper loaded: url_helper
DEBUG - 2013-12-10 10:25:05 --> Helper loaded: html_helper
DEBUG - 2013-12-10 10:25:05 --> Database Driver Class Initialized
DEBUG - 2013-12-10 10:25:06 --> Session Class Initialized
DEBUG - 2013-12-10 10:25:06 --> Helper loaded: string_helper
DEBUG - 2013-12-10 10:25:06 --> A session cookie was not found.
DEBUG - 2013-12-10 10:25:06 --> Session routines successfully run
DEBUG - 2013-12-10 10:25:06 --> Form Validation Class Initialized
DEBUG - 2013-12-10 10:25:06 --> Controller Class Initialized
INFO  - 2013-12-10 10:25:06 --> the form message==>
INFO  - 2013-12-10 10:25:06 --> The session id is ========>a2451f42b937f96030daf2166cac3854 and the member id is =======>
INFO  - 2013-12-10 10:25:06 --> after the retrieving session list.................//////////
DEBUG - 2013-12-10 10:25:06 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-12-10 10:25:06 --> Final output sent to browser
DEBUG - 2013-12-10 10:25:06 --> Total execution time: 1.0700
DEBUG - 2013-12-10 10:25:12 --> Config Class Initialized
DEBUG - 2013-12-10 10:25:12 --> Hooks Class Initialized
DEBUG - 2013-12-10 10:25:12 --> Utf8 Class Initialized
DEBUG - 2013-12-10 10:25:12 --> UTF-8 Support Enabled
DEBUG - 2013-12-10 10:25:12 --> URI Class Initialized
DEBUG - 2013-12-10 10:25:12 --> Router Class Initialized
DEBUG - 2013-12-10 10:25:12 --> Output Class Initialized
DEBUG - 2013-12-10 10:25:12 --> Security Class Initialized
DEBUG - 2013-12-10 10:25:12 --> Input Class Initialized
DEBUG - 2013-12-10 10:25:12 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-10 10:25:12 --> Language Class Initialized
DEBUG - 2013-12-10 10:25:12 --> Loader Class Initialized
DEBUG - 2013-12-10 10:25:12 --> Helper loaded: form_helper
DEBUG - 2013-12-10 10:25:12 --> Helper loaded: url_helper
DEBUG - 2013-12-10 10:25:12 --> Helper loaded: html_helper
DEBUG - 2013-12-10 10:25:12 --> Database Driver Class Initialized
DEBUG - 2013-12-10 10:25:13 --> Session Class Initialized
DEBUG - 2013-12-10 10:25:13 --> Helper loaded: string_helper
DEBUG - 2013-12-10 10:25:13 --> Session routines successfully run
DEBUG - 2013-12-10 10:25:13 --> Form Validation Class Initialized
DEBUG - 2013-12-10 10:25:13 --> Controller Class Initialized
DEBUG - 2013-12-10 10:25:13 --> Model Class Initialized
DEBUG - 2013-12-10 10:25:13 --> Model Class Initialized
DEBUG - 2013-12-10 10:25:13 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-10 10:25:13 --> after session initialization................
INFO  - 2013-12-10 10:25:13 --> inside rays login auth.............
DEBUG - 2013-12-10 10:25:13 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-12-10 10:25:13 --> XSS Filtering completed
DEBUG - 2013-12-10 10:25:13 --> XSS Filtering completed
INFO  - 2013-12-10 10:25:13 --> before getting the relation of member............6
INFO  - 2013-12-10 10:25:13 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-12-10 10:25:13 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-10 10:25:13 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-10 10:25:13 --> inside retrieving vacancy for member
INFO  - 2013-12-10 10:25:13 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-12-10 10:25:13 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-10 10:25:13 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-12-10 10:25:13 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-10 10:25:13 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-10 10:25:14 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-10 10:25:14 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-10 10:25:14 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-12-10 10:25:14 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-12-10 10:25:14 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
DEBUG - 2013-12-10 10:25:14 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-12-10 10:25:14 --> Final output sent to browser
DEBUG - 2013-12-10 10:25:14 --> Total execution time: 1.5700
DEBUG - 2013-12-10 10:25:14 --> Config Class Initialized
DEBUG - 2013-12-10 10:25:14 --> Hooks Class Initialized
DEBUG - 2013-12-10 10:25:14 --> Utf8 Class Initialized
DEBUG - 2013-12-10 10:25:14 --> UTF-8 Support Enabled
DEBUG - 2013-12-10 10:25:14 --> URI Class Initialized
DEBUG - 2013-12-10 10:25:14 --> Router Class Initialized
ERROR - 2013-12-10 10:25:14 --> 404 Page Not Found --> css
DEBUG - 2013-12-10 10:25:43 --> Config Class Initialized
DEBUG - 2013-12-10 10:25:43 --> Hooks Class Initialized
DEBUG - 2013-12-10 10:25:43 --> Utf8 Class Initialized
DEBUG - 2013-12-10 10:25:43 --> UTF-8 Support Enabled
DEBUG - 2013-12-10 10:25:43 --> URI Class Initialized
DEBUG - 2013-12-10 10:25:43 --> Router Class Initialized
DEBUG - 2013-12-10 10:25:43 --> Output Class Initialized
DEBUG - 2013-12-10 10:25:43 --> Security Class Initialized
DEBUG - 2013-12-10 10:25:43 --> Input Class Initialized
DEBUG - 2013-12-10 10:25:43 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-10 10:25:43 --> Language Class Initialized
DEBUG - 2013-12-10 10:25:43 --> Loader Class Initialized
DEBUG - 2013-12-10 10:25:43 --> Helper loaded: form_helper
DEBUG - 2013-12-10 10:25:43 --> Helper loaded: url_helper
DEBUG - 2013-12-10 10:25:43 --> Helper loaded: html_helper
DEBUG - 2013-12-10 10:25:43 --> Database Driver Class Initialized
DEBUG - 2013-12-10 10:25:44 --> Session Class Initialized
DEBUG - 2013-12-10 10:25:44 --> Helper loaded: string_helper
DEBUG - 2013-12-10 10:25:44 --> Session routines successfully run
DEBUG - 2013-12-10 10:25:44 --> Form Validation Class Initialized
DEBUG - 2013-12-10 10:25:44 --> Controller Class Initialized
DEBUG - 2013-12-10 10:25:44 --> Model Class Initialized
DEBUG - 2013-12-10 10:25:44 --> Model Class Initialized
DEBUG - 2013-12-10 10:25:44 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-10 10:25:44 --> after session initialization................
INFO  - 2013-12-10 10:25:44 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 1 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-10 10:25:44 --> Final output sent to browser
DEBUG - 2013-12-10 10:25:44 --> Total execution time: 1.0800
DEBUG - 2013-12-10 10:26:08 --> Config Class Initialized
DEBUG - 2013-12-10 10:26:08 --> Hooks Class Initialized
DEBUG - 2013-12-10 10:26:08 --> Utf8 Class Initialized
DEBUG - 2013-12-10 10:26:08 --> UTF-8 Support Enabled
DEBUG - 2013-12-10 10:26:08 --> URI Class Initialized
DEBUG - 2013-12-10 10:26:08 --> Router Class Initialized
DEBUG - 2013-12-10 10:26:08 --> Output Class Initialized
DEBUG - 2013-12-10 10:26:08 --> Security Class Initialized
DEBUG - 2013-12-10 10:26:08 --> Input Class Initialized
DEBUG - 2013-12-10 10:26:08 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-10 10:26:08 --> Language Class Initialized
DEBUG - 2013-12-10 10:26:08 --> Loader Class Initialized
DEBUG - 2013-12-10 10:26:08 --> Helper loaded: form_helper
DEBUG - 2013-12-10 10:26:08 --> Helper loaded: url_helper
DEBUG - 2013-12-10 10:26:08 --> Helper loaded: html_helper
DEBUG - 2013-12-10 10:26:08 --> Database Driver Class Initialized
DEBUG - 2013-12-10 10:26:08 --> Session Class Initialized
DEBUG - 2013-12-10 10:26:08 --> Helper loaded: string_helper
DEBUG - 2013-12-10 10:26:08 --> Session routines successfully run
DEBUG - 2013-12-10 10:26:08 --> Form Validation Class Initialized
DEBUG - 2013-12-10 10:26:08 --> Controller Class Initialized
DEBUG - 2013-12-10 10:26:08 --> Model Class Initialized
DEBUG - 2013-12-10 10:26:08 --> Model Class Initialized
DEBUG - 2013-12-10 10:26:08 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-10 10:26:08 --> after session initialization................
INFO  - 2013-12-10 10:26:08 --> last news id is 0
INFO  - 2013-12-10 10:26:08 --> SELECT a.id_article as id, a.title as newsletter_title, a.description as newsletter_description, a.guestonly as guestonly, a.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`article` a)
JOIN `member` m ON `a`.`memberid_member` = `m`.`id_member`
WHERE `a`.`id_article` <> 0
ORDER BY `a`.`id_article` desc
LIMIT 15
INFO  - 2013-12-10 10:26:08 --> after newsleters list has been clicked.................
INFO  - 2013-12-10 10:26:08 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=16&article_type=newsletter_title
INFO  - 2013-12-10 10:26:08 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=15&article_type=newsletter_title
INFO  - 2013-12-10 10:26:08 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=14&article_type=newsletter_title
INFO  - 2013-12-10 10:26:08 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=13&article_type=newsletter_title
INFO  - 2013-12-10 10:26:08 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=12&article_type=newsletter_title
INFO  - 2013-12-10 10:26:08 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=11&article_type=newsletter_title
INFO  - 2013-12-10 10:26:08 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=10&article_type=newsletter_title
INFO  - 2013-12-10 10:26:08 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=9&article_type=newsletter_title
INFO  - 2013-12-10 10:26:08 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=8&article_type=newsletter_title
INFO  - 2013-12-10 10:26:08 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=7&article_type=newsletter_title
INFO  - 2013-12-10 10:26:08 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=6&article_type=newsletter_title
INFO  - 2013-12-10 10:26:08 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=5&article_type=newsletter_title
INFO  - 2013-12-10 10:26:08 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=4&article_type=newsletter_title
INFO  - 2013-12-10 10:26:08 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=3&article_type=newsletter_title
INFO  - 2013-12-10 10:26:08 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=2&article_type=newsletter_title
DEBUG - 2013-12-10 10:26:08 --> File loaded: ../pharmaray-application/views/articles.php
DEBUG - 2013-12-10 10:26:08 --> Final output sent to browser
DEBUG - 2013-12-10 10:26:08 --> Total execution time: 0.1000
DEBUG - 2013-12-10 10:26:10 --> Config Class Initialized
DEBUG - 2013-12-10 10:26:10 --> Hooks Class Initialized
DEBUG - 2013-12-10 10:26:10 --> Utf8 Class Initialized
DEBUG - 2013-12-10 10:26:10 --> UTF-8 Support Enabled
DEBUG - 2013-12-10 10:26:10 --> URI Class Initialized
DEBUG - 2013-12-10 10:26:10 --> Router Class Initialized
DEBUG - 2013-12-10 10:26:10 --> Output Class Initialized
DEBUG - 2013-12-10 10:26:10 --> Security Class Initialized
DEBUG - 2013-12-10 10:26:10 --> Input Class Initialized
DEBUG - 2013-12-10 10:26:10 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-10 10:26:10 --> Language Class Initialized
DEBUG - 2013-12-10 10:26:10 --> Loader Class Initialized
DEBUG - 2013-12-10 10:26:10 --> Helper loaded: form_helper
DEBUG - 2013-12-10 10:26:10 --> Helper loaded: url_helper
DEBUG - 2013-12-10 10:26:10 --> Helper loaded: html_helper
DEBUG - 2013-12-10 10:26:10 --> Database Driver Class Initialized
DEBUG - 2013-12-10 10:26:10 --> Session Class Initialized
DEBUG - 2013-12-10 10:26:10 --> Helper loaded: string_helper
DEBUG - 2013-12-10 10:26:10 --> Session routines successfully run
DEBUG - 2013-12-10 10:26:10 --> Form Validation Class Initialized
DEBUG - 2013-12-10 10:26:10 --> Controller Class Initialized
DEBUG - 2013-12-10 10:26:10 --> Model Class Initialized
DEBUG - 2013-12-10 10:26:10 --> Model Class Initialized
DEBUG - 2013-12-10 10:26:10 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-10 10:26:10 --> after session initialization................
INFO  - 2013-12-10 10:26:10 --> inside retrieve most commented forum topic 
INFO  - 2013-12-10 10:26:10 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
INFO  - 2013-12-10 10:26:10 --> inside retrieving first 20 topics 
INFO  - 2013-12-10 10:26:10 --> SELECT `t`.`id_topicforum`, upper(t.name) as name, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
LIMIT 20
INFO  - 2013-12-10 10:26:10 --> inside retrieving pharmacy beyond id 
INFO  - 2013-12-10 10:26:10 --> SELECT `ff`.`id_forum` as id, `ff`.`name`, count(f.id_forum) as sub_forum
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` is null 
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`
INFO  - 2013-12-10 10:26:10 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-12-10 10:26:10 --> inside retrieving comments topic id and drug id is 1
INFO  - 2013-12-10 10:26:10 --> SELECT `tc`.`id_topiccomment`, `tc`.`comment`, `tc`.`timecreated`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-12-10 10:26:10 --> inside retrieving comments topic id 1
INFO  - 2013-12-10 10:26:10 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
INFO  - 2013-12-10 10:26:10 --> after forums has been clicked.................
INFO  - 2013-12-10 10:26:10 -->  column name inside view is 0 column Data is Male Doctor
INFO  - 2013-12-10 10:26:10 -->  column name inside view is 1 column Data is Ordinary Member
DEBUG - 2013-12-10 10:26:10 --> File loaded: ../pharmaray-application/views/forum.php
DEBUG - 2013-12-10 10:26:10 --> Final output sent to browser
DEBUG - 2013-12-10 10:26:10 --> Total execution time: 0.2000
DEBUG - 2013-12-10 10:26:10 --> Config Class Initialized
DEBUG - 2013-12-10 10:26:10 --> Hooks Class Initialized
DEBUG - 2013-12-10 10:26:10 --> Utf8 Class Initialized
DEBUG - 2013-12-10 10:26:10 --> UTF-8 Support Enabled
DEBUG - 2013-12-10 10:26:10 --> URI Class Initialized
DEBUG - 2013-12-10 10:26:10 --> Router Class Initialized
DEBUG - 2013-12-10 10:26:10 --> Output Class Initialized
DEBUG - 2013-12-10 10:26:10 --> Security Class Initialized
DEBUG - 2013-12-10 10:26:10 --> Input Class Initialized
DEBUG - 2013-12-10 10:26:10 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-10 10:26:10 --> Language Class Initialized
DEBUG - 2013-12-10 10:26:10 --> Loader Class Initialized
DEBUG - 2013-12-10 10:26:10 --> Helper loaded: form_helper
DEBUG - 2013-12-10 10:26:10 --> Helper loaded: url_helper
DEBUG - 2013-12-10 10:26:10 --> Helper loaded: html_helper
DEBUG - 2013-12-10 10:26:10 --> Database Driver Class Initialized
DEBUG - 2013-12-10 10:26:11 --> Session Class Initialized
DEBUG - 2013-12-10 10:26:11 --> Helper loaded: string_helper
DEBUG - 2013-12-10 10:26:11 --> Session routines successfully run
DEBUG - 2013-12-10 10:26:11 --> Form Validation Class Initialized
DEBUG - 2013-12-10 10:26:11 --> Controller Class Initialized
DEBUG - 2013-12-10 10:26:11 --> Model Class Initialized
DEBUG - 2013-12-10 10:26:11 --> Model Class Initialized
DEBUG - 2013-12-10 10:26:11 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-10 10:26:11 --> after session initialization................
ERROR - 2013-12-10 10:26:11 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-12-10 10:26:11 --> Config Class Initialized
DEBUG - 2013-12-10 10:26:11 --> Hooks Class Initialized
DEBUG - 2013-12-10 10:26:11 --> Utf8 Class Initialized
DEBUG - 2013-12-10 10:26:11 --> UTF-8 Support Enabled
DEBUG - 2013-12-10 10:26:11 --> URI Class Initialized
DEBUG - 2013-12-10 10:26:11 --> Router Class Initialized
ERROR - 2013-12-10 10:26:11 --> 404 Page Not Found --> css
DEBUG - 2013-12-10 10:26:14 --> Config Class Initialized
DEBUG - 2013-12-10 10:26:14 --> Hooks Class Initialized
DEBUG - 2013-12-10 10:26:14 --> Utf8 Class Initialized
DEBUG - 2013-12-10 10:26:14 --> UTF-8 Support Enabled
DEBUG - 2013-12-10 10:26:14 --> URI Class Initialized
DEBUG - 2013-12-10 10:26:14 --> Router Class Initialized
DEBUG - 2013-12-10 10:26:14 --> Output Class Initialized
DEBUG - 2013-12-10 10:26:14 --> Security Class Initialized
DEBUG - 2013-12-10 10:26:14 --> Input Class Initialized
DEBUG - 2013-12-10 10:26:14 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-10 10:26:14 --> Language Class Initialized
DEBUG - 2013-12-10 10:26:14 --> Loader Class Initialized
DEBUG - 2013-12-10 10:26:14 --> Helper loaded: form_helper
DEBUG - 2013-12-10 10:26:14 --> Helper loaded: url_helper
DEBUG - 2013-12-10 10:26:14 --> Helper loaded: html_helper
DEBUG - 2013-12-10 10:26:14 --> Database Driver Class Initialized
DEBUG - 2013-12-10 10:26:14 --> Session Class Initialized
DEBUG - 2013-12-10 10:26:14 --> Helper loaded: string_helper
DEBUG - 2013-12-10 10:26:14 --> Session routines successfully run
DEBUG - 2013-12-10 10:26:14 --> Form Validation Class Initialized
DEBUG - 2013-12-10 10:26:14 --> Controller Class Initialized
DEBUG - 2013-12-10 10:26:14 --> Model Class Initialized
DEBUG - 2013-12-10 10:26:14 --> Model Class Initialized
DEBUG - 2013-12-10 10:26:14 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-10 10:26:14 --> after session initialization................
INFO  - 2013-12-10 10:26:14 --> inside the retrieve ajax topic comment page.................
INFO  - 2013-12-10 10:26:14 --> inside retrieving comments member id and forum topic id is 1
INFO  - 2013-12-10 10:26:14 --> 10==============================10
INFO  - 2013-12-10 10:26:14 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10, 10
INFO  - 2013-12-10 10:26:14 --> [{"id":"5","comment":"let's make this happen","timecreated":"2013-10-24 14:21:19","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"4","comment":"abi","timecreated":"2013-10-24 14:21:09","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"3","comment":"this is not just right","timecreated":"2013-10-24 14:21:05","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"2","comment":"This is just not right...I have had this for a very long time that it drives me crazy","timecreated":"2013-10-24 14:14:47","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"1","comment":"check this comment now....","timecreated":"2013-10-24 14:14:12","membername":"Elvis onuorah","membertypeimage":"profilem1"}]
DEBUG - 2013-12-10 10:26:14 --> Final output sent to browser
DEBUG - 2013-12-10 10:26:14 --> Total execution time: 0.0500
DEBUG - 2013-12-10 10:26:16 --> Config Class Initialized
DEBUG - 2013-12-10 10:26:16 --> Hooks Class Initialized
DEBUG - 2013-12-10 10:26:16 --> Utf8 Class Initialized
DEBUG - 2013-12-10 10:26:16 --> UTF-8 Support Enabled
DEBUG - 2013-12-10 10:26:16 --> URI Class Initialized
DEBUG - 2013-12-10 10:26:16 --> Router Class Initialized
DEBUG - 2013-12-10 10:26:16 --> Output Class Initialized
DEBUG - 2013-12-10 10:26:16 --> Security Class Initialized
DEBUG - 2013-12-10 10:26:16 --> Input Class Initialized
DEBUG - 2013-12-10 10:26:16 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-10 10:26:16 --> Language Class Initialized
DEBUG - 2013-12-10 10:26:16 --> Loader Class Initialized
DEBUG - 2013-12-10 10:26:16 --> Helper loaded: form_helper
DEBUG - 2013-12-10 10:26:16 --> Helper loaded: url_helper
DEBUG - 2013-12-10 10:26:16 --> Helper loaded: html_helper
DEBUG - 2013-12-10 10:26:16 --> Database Driver Class Initialized
DEBUG - 2013-12-10 10:26:16 --> Session Class Initialized
DEBUG - 2013-12-10 10:26:16 --> Helper loaded: string_helper
DEBUG - 2013-12-10 10:26:16 --> Session routines successfully run
DEBUG - 2013-12-10 10:26:16 --> Form Validation Class Initialized
DEBUG - 2013-12-10 10:26:16 --> Controller Class Initialized
DEBUG - 2013-12-10 10:26:16 --> Model Class Initialized
DEBUG - 2013-12-10 10:26:16 --> Model Class Initialized
DEBUG - 2013-12-10 10:26:16 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-10 10:26:16 --> after session initialization................
INFO  - 2013-12-10 10:26:16 --> inside the retrieve ajax topic comment page.................
INFO  - 2013-12-10 10:26:16 --> inside retrieving comments member id and forum topic id is 1
INFO  - 2013-12-10 10:26:16 --> 10==============================15
INFO  - 2013-12-10 10:26:16 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 15, 10
INFO  - 2013-12-10 10:26:16 --> []
DEBUG - 2013-12-10 10:26:16 --> Final output sent to browser
DEBUG - 2013-12-10 10:26:16 --> Total execution time: 0.0500
DEBUG - 2013-12-10 10:26:21 --> Config Class Initialized
DEBUG - 2013-12-10 10:26:21 --> Hooks Class Initialized
DEBUG - 2013-12-10 10:26:21 --> Utf8 Class Initialized
DEBUG - 2013-12-10 10:26:21 --> UTF-8 Support Enabled
DEBUG - 2013-12-10 10:26:21 --> URI Class Initialized
DEBUG - 2013-12-10 10:26:21 --> Router Class Initialized
DEBUG - 2013-12-10 10:26:21 --> Output Class Initialized
DEBUG - 2013-12-10 10:26:21 --> Security Class Initialized
DEBUG - 2013-12-10 10:26:21 --> Input Class Initialized
DEBUG - 2013-12-10 10:26:21 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-10 10:26:21 --> Language Class Initialized
DEBUG - 2013-12-10 10:26:21 --> Loader Class Initialized
DEBUG - 2013-12-10 10:26:21 --> Helper loaded: form_helper
DEBUG - 2013-12-10 10:26:21 --> Helper loaded: url_helper
DEBUG - 2013-12-10 10:26:21 --> Helper loaded: html_helper
DEBUG - 2013-12-10 10:26:21 --> Database Driver Class Initialized
DEBUG - 2013-12-10 10:26:21 --> Session Class Initialized
DEBUG - 2013-12-10 10:26:21 --> Helper loaded: string_helper
DEBUG - 2013-12-10 10:26:21 --> Session routines successfully run
DEBUG - 2013-12-10 10:26:21 --> Form Validation Class Initialized
DEBUG - 2013-12-10 10:26:21 --> Controller Class Initialized
DEBUG - 2013-12-10 10:26:21 --> Model Class Initialized
DEBUG - 2013-12-10 10:26:21 --> Model Class Initialized
DEBUG - 2013-12-10 10:26:21 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-10 10:26:21 --> after session initialization................
INFO  - 2013-12-10 10:26:21 --> after community pharmacy  has been clicked.................
INFO  - 2013-12-10 10:26:21 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-12-10 10:26:21 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-12-10 10:26:21 --> inside retrieving locations 
INFO  - 2013-12-10 10:26:21 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-12-10 10:26:21 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-12-10 10:26:21 --> Final output sent to browser
DEBUG - 2013-12-10 10:26:21 --> Total execution time: 0.0800
DEBUG - 2013-12-10 10:26:23 --> Config Class Initialized
DEBUG - 2013-12-10 10:26:23 --> Hooks Class Initialized
DEBUG - 2013-12-10 10:26:23 --> Utf8 Class Initialized
DEBUG - 2013-12-10 10:26:23 --> UTF-8 Support Enabled
DEBUG - 2013-12-10 10:26:23 --> URI Class Initialized
DEBUG - 2013-12-10 10:26:23 --> Router Class Initialized
DEBUG - 2013-12-10 10:26:23 --> Output Class Initialized
DEBUG - 2013-12-10 10:26:23 --> Security Class Initialized
DEBUG - 2013-12-10 10:26:23 --> Input Class Initialized
DEBUG - 2013-12-10 10:26:23 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-10 10:26:23 --> Language Class Initialized
DEBUG - 2013-12-10 10:26:23 --> Loader Class Initialized
DEBUG - 2013-12-10 10:26:23 --> Helper loaded: form_helper
DEBUG - 2013-12-10 10:26:23 --> Helper loaded: url_helper
DEBUG - 2013-12-10 10:26:23 --> Helper loaded: html_helper
DEBUG - 2013-12-10 10:26:23 --> Database Driver Class Initialized
DEBUG - 2013-12-10 10:26:23 --> Session Class Initialized
DEBUG - 2013-12-10 10:26:23 --> Helper loaded: string_helper
DEBUG - 2013-12-10 10:26:23 --> Session routines successfully run
DEBUG - 2013-12-10 10:26:23 --> Form Validation Class Initialized
DEBUG - 2013-12-10 10:26:23 --> Controller Class Initialized
DEBUG - 2013-12-10 10:26:23 --> Model Class Initialized
DEBUG - 2013-12-10 10:26:23 --> Model Class Initialized
DEBUG - 2013-12-10 10:26:23 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-10 10:26:23 --> after session initialization................
INFO  - 2013-12-10 10:26:23 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>4
INFO  - 2013-12-10 10:26:23 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` =  '4'
DEBUG - 2013-12-10 10:26:23 --> Final output sent to browser
DEBUG - 2013-12-10 10:26:23 --> Total execution time: 0.0400
DEBUG - 2013-12-10 10:26:28 --> Config Class Initialized
DEBUG - 2013-12-10 10:26:28 --> Hooks Class Initialized
DEBUG - 2013-12-10 10:26:28 --> Utf8 Class Initialized
DEBUG - 2013-12-10 10:26:28 --> UTF-8 Support Enabled
DEBUG - 2013-12-10 10:26:28 --> URI Class Initialized
DEBUG - 2013-12-10 10:26:28 --> Router Class Initialized
DEBUG - 2013-12-10 10:26:28 --> Output Class Initialized
DEBUG - 2013-12-10 10:26:28 --> Security Class Initialized
DEBUG - 2013-12-10 10:26:28 --> Input Class Initialized
DEBUG - 2013-12-10 10:26:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-10 10:26:28 --> Language Class Initialized
DEBUG - 2013-12-10 10:26:28 --> Loader Class Initialized
DEBUG - 2013-12-10 10:26:28 --> Helper loaded: form_helper
DEBUG - 2013-12-10 10:26:28 --> Helper loaded: url_helper
DEBUG - 2013-12-10 10:26:28 --> Helper loaded: html_helper
DEBUG - 2013-12-10 10:26:28 --> Database Driver Class Initialized
DEBUG - 2013-12-10 10:26:28 --> Session Class Initialized
DEBUG - 2013-12-10 10:26:28 --> Helper loaded: string_helper
DEBUG - 2013-12-10 10:26:28 --> Session routines successfully run
DEBUG - 2013-12-10 10:26:28 --> Form Validation Class Initialized
DEBUG - 2013-12-10 10:26:28 --> Controller Class Initialized
DEBUG - 2013-12-10 10:26:28 --> Model Class Initialized
DEBUG - 2013-12-10 10:26:28 --> Model Class Initialized
DEBUG - 2013-12-10 10:26:28 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-10 10:26:28 --> after session initialization................
INFO  - 2013-12-10 10:26:28 --> inside retrieve most commented forum topic 
INFO  - 2013-12-10 10:26:28 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
INFO  - 2013-12-10 10:26:28 --> inside retrieving first 20 topics 
INFO  - 2013-12-10 10:26:28 --> SELECT `t`.`id_topicforum`, upper(t.name) as name, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
LIMIT 20
INFO  - 2013-12-10 10:26:28 --> inside retrieving pharmacy beyond id 
INFO  - 2013-12-10 10:26:28 --> SELECT `ff`.`id_forum` as id, `ff`.`name`, count(f.id_forum) as sub_forum
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` is null 
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`
INFO  - 2013-12-10 10:26:28 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-12-10 10:26:28 --> inside retrieving comments topic id and drug id is 1
INFO  - 2013-12-10 10:26:28 --> SELECT `tc`.`id_topiccomment`, `tc`.`comment`, `tc`.`timecreated`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-12-10 10:26:28 --> inside retrieving comments topic id 1
INFO  - 2013-12-10 10:26:28 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
INFO  - 2013-12-10 10:26:28 --> after forums has been clicked.................
INFO  - 2013-12-10 10:26:28 -->  column name inside view is 0 column Data is Male Doctor
INFO  - 2013-12-10 10:26:28 -->  column name inside view is 1 column Data is Ordinary Member
DEBUG - 2013-12-10 10:26:28 --> File loaded: ../pharmaray-application/views/forum.php
DEBUG - 2013-12-10 10:26:28 --> Final output sent to browser
DEBUG - 2013-12-10 10:26:28 --> Total execution time: 0.0600
DEBUG - 2013-12-10 10:26:28 --> Config Class Initialized
DEBUG - 2013-12-10 10:26:28 --> Hooks Class Initialized
DEBUG - 2013-12-10 10:26:28 --> Utf8 Class Initialized
DEBUG - 2013-12-10 10:26:28 --> UTF-8 Support Enabled
DEBUG - 2013-12-10 10:26:28 --> URI Class Initialized
DEBUG - 2013-12-10 10:26:28 --> Router Class Initialized
DEBUG - 2013-12-10 10:26:28 --> Output Class Initialized
DEBUG - 2013-12-10 10:26:28 --> Security Class Initialized
DEBUG - 2013-12-10 10:26:28 --> Input Class Initialized
DEBUG - 2013-12-10 10:26:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-10 10:26:28 --> Language Class Initialized
DEBUG - 2013-12-10 10:26:28 --> Loader Class Initialized
DEBUG - 2013-12-10 10:26:28 --> Helper loaded: form_helper
DEBUG - 2013-12-10 10:26:28 --> Helper loaded: url_helper
DEBUG - 2013-12-10 10:26:28 --> Helper loaded: html_helper
DEBUG - 2013-12-10 10:26:28 --> Database Driver Class Initialized
DEBUG - 2013-12-10 10:26:28 --> Session Class Initialized
DEBUG - 2013-12-10 10:26:28 --> Helper loaded: string_helper
DEBUG - 2013-12-10 10:26:28 --> Session routines successfully run
DEBUG - 2013-12-10 10:26:28 --> Form Validation Class Initialized
DEBUG - 2013-12-10 10:26:28 --> Controller Class Initialized
DEBUG - 2013-12-10 10:26:28 --> Model Class Initialized
DEBUG - 2013-12-10 10:26:28 --> Model Class Initialized
DEBUG - 2013-12-10 10:26:28 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-10 10:26:28 --> after session initialization................
ERROR - 2013-12-10 10:26:28 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-12-10 10:26:28 --> Config Class Initialized
DEBUG - 2013-12-10 10:26:28 --> Hooks Class Initialized
DEBUG - 2013-12-10 10:26:28 --> Utf8 Class Initialized
DEBUG - 2013-12-10 10:26:28 --> UTF-8 Support Enabled
DEBUG - 2013-12-10 10:26:28 --> URI Class Initialized
DEBUG - 2013-12-10 10:26:28 --> Router Class Initialized
ERROR - 2013-12-10 10:26:28 --> 404 Page Not Found --> css
DEBUG - 2013-12-10 10:26:32 --> Config Class Initialized
DEBUG - 2013-12-10 10:26:32 --> Hooks Class Initialized
DEBUG - 2013-12-10 10:26:32 --> Utf8 Class Initialized
DEBUG - 2013-12-10 10:26:32 --> UTF-8 Support Enabled
DEBUG - 2013-12-10 10:26:32 --> URI Class Initialized
DEBUG - 2013-12-10 10:26:32 --> Router Class Initialized
DEBUG - 2013-12-10 10:26:32 --> Output Class Initialized
DEBUG - 2013-12-10 10:26:32 --> Security Class Initialized
DEBUG - 2013-12-10 10:26:32 --> Input Class Initialized
DEBUG - 2013-12-10 10:26:32 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-10 10:26:32 --> Language Class Initialized
DEBUG - 2013-12-10 10:26:32 --> Loader Class Initialized
DEBUG - 2013-12-10 10:26:32 --> Helper loaded: form_helper
DEBUG - 2013-12-10 10:26:32 --> Helper loaded: url_helper
DEBUG - 2013-12-10 10:26:32 --> Helper loaded: html_helper
DEBUG - 2013-12-10 10:26:32 --> Database Driver Class Initialized
DEBUG - 2013-12-10 10:26:32 --> Session Class Initialized
DEBUG - 2013-12-10 10:26:32 --> Helper loaded: string_helper
DEBUG - 2013-12-10 10:26:32 --> Session routines successfully run
DEBUG - 2013-12-10 10:26:32 --> Form Validation Class Initialized
DEBUG - 2013-12-10 10:26:32 --> Controller Class Initialized
DEBUG - 2013-12-10 10:26:32 --> Model Class Initialized
DEBUG - 2013-12-10 10:26:32 --> Model Class Initialized
DEBUG - 2013-12-10 10:26:32 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-10 10:26:32 --> after session initialization................
INFO  - 2013-12-10 10:26:32 --> The forum id is 1
INFO  - 2013-12-10 10:26:32 --> inside retrieving pharmacy beyond id 
INFO  - 2013-12-10 10:26:32 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 1
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '1'
ORDER BY `ft`.`name`)
INFO  - 2013-12-10 10:26:32 --> The encoded json is [{"id":"4","text":"Eye Defects","hasChildren":true},{"id":"1","text":"ASTIGMATISM","hasChildren":false},{"id":"2","text":"CATARACT","hasChildren":false}]
DEBUG - 2013-12-10 10:26:32 --> Final output sent to browser
DEBUG - 2013-12-10 10:26:32 --> Total execution time: 0.1000
DEBUG - 2013-12-10 10:26:33 --> Config Class Initialized
DEBUG - 2013-12-10 10:26:33 --> Hooks Class Initialized
DEBUG - 2013-12-10 10:26:33 --> Utf8 Class Initialized
DEBUG - 2013-12-10 10:26:33 --> UTF-8 Support Enabled
DEBUG - 2013-12-10 10:26:33 --> URI Class Initialized
DEBUG - 2013-12-10 10:26:33 --> Router Class Initialized
DEBUG - 2013-12-10 10:26:34 --> Output Class Initialized
DEBUG - 2013-12-10 10:26:34 --> Security Class Initialized
DEBUG - 2013-12-10 10:26:34 --> Input Class Initialized
DEBUG - 2013-12-10 10:26:34 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-10 10:26:34 --> Language Class Initialized
DEBUG - 2013-12-10 10:26:34 --> Loader Class Initialized
DEBUG - 2013-12-10 10:26:34 --> Helper loaded: form_helper
DEBUG - 2013-12-10 10:26:34 --> Helper loaded: url_helper
DEBUG - 2013-12-10 10:26:34 --> Helper loaded: html_helper
DEBUG - 2013-12-10 10:26:34 --> Database Driver Class Initialized
DEBUG - 2013-12-10 10:26:34 --> Session Class Initialized
DEBUG - 2013-12-10 10:26:34 --> Helper loaded: string_helper
DEBUG - 2013-12-10 10:26:34 --> Session routines successfully run
DEBUG - 2013-12-10 10:26:34 --> Form Validation Class Initialized
DEBUG - 2013-12-10 10:26:34 --> Controller Class Initialized
DEBUG - 2013-12-10 10:26:34 --> Model Class Initialized
DEBUG - 2013-12-10 10:26:34 --> Model Class Initialized
DEBUG - 2013-12-10 10:26:34 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-10 10:26:34 --> after session initialization................
INFO  - 2013-12-10 10:26:34 --> The forum id is 4
INFO  - 2013-12-10 10:26:34 --> inside retrieving pharmacy beyond id 
INFO  - 2013-12-10 10:26:34 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 4
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '4'
ORDER BY `ft`.`name`)
INFO  - 2013-12-10 10:26:34 --> The encoded json is [{"id":"6","text":"Long Sight","hasChildren":true},{"id":"3","text":"CONJUCTIVITIS","hasChildren":false},{"id":"5","text":"BLUE PUPILS","hasChildren":false},{"id":"6","text":"BULDGED EYES","hasChildren":false},{"id":"10","text":"NIGHT BLINDNESS","hasChildren":false}]
DEBUG - 2013-12-10 10:26:34 --> Final output sent to browser
DEBUG - 2013-12-10 10:26:34 --> Total execution time: 0.0400
DEBUG - 2013-12-10 10:26:36 --> Config Class Initialized
DEBUG - 2013-12-10 10:26:36 --> Hooks Class Initialized
DEBUG - 2013-12-10 10:26:36 --> Utf8 Class Initialized
DEBUG - 2013-12-10 10:26:36 --> UTF-8 Support Enabled
DEBUG - 2013-12-10 10:26:36 --> URI Class Initialized
DEBUG - 2013-12-10 10:26:36 --> Router Class Initialized
DEBUG - 2013-12-10 10:26:36 --> Output Class Initialized
DEBUG - 2013-12-10 10:26:36 --> Security Class Initialized
DEBUG - 2013-12-10 10:26:36 --> Input Class Initialized
DEBUG - 2013-12-10 10:26:36 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-10 10:26:36 --> Language Class Initialized
DEBUG - 2013-12-10 10:26:36 --> Loader Class Initialized
DEBUG - 2013-12-10 10:26:36 --> Helper loaded: form_helper
DEBUG - 2013-12-10 10:26:36 --> Helper loaded: url_helper
DEBUG - 2013-12-10 10:26:36 --> Helper loaded: html_helper
DEBUG - 2013-12-10 10:26:36 --> Database Driver Class Initialized
DEBUG - 2013-12-10 10:26:36 --> Session Class Initialized
DEBUG - 2013-12-10 10:26:36 --> Helper loaded: string_helper
DEBUG - 2013-12-10 10:26:36 --> Session routines successfully run
DEBUG - 2013-12-10 10:26:36 --> Form Validation Class Initialized
DEBUG - 2013-12-10 10:26:36 --> Controller Class Initialized
DEBUG - 2013-12-10 10:26:36 --> Model Class Initialized
DEBUG - 2013-12-10 10:26:36 --> Model Class Initialized
DEBUG - 2013-12-10 10:26:36 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-10 10:26:36 --> after session initialization................
INFO  - 2013-12-10 10:26:36 --> The forum id is 2
INFO  - 2013-12-10 10:26:36 --> inside retrieving pharmacy beyond id 
INFO  - 2013-12-10 10:26:36 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 2
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '2'
ORDER BY `ft`.`name`)
INFO  - 2013-12-10 10:26:36 --> The encoded json is [{"id":"5","text":"ASUU Strike","hasChildren":true}]
DEBUG - 2013-12-10 10:26:36 --> Final output sent to browser
DEBUG - 2013-12-10 10:26:36 --> Total execution time: 0.0500
DEBUG - 2013-12-10 10:26:37 --> Config Class Initialized
DEBUG - 2013-12-10 10:26:37 --> Hooks Class Initialized
DEBUG - 2013-12-10 10:26:37 --> Utf8 Class Initialized
DEBUG - 2013-12-10 10:26:37 --> UTF-8 Support Enabled
DEBUG - 2013-12-10 10:26:37 --> URI Class Initialized
DEBUG - 2013-12-10 10:26:37 --> Router Class Initialized
DEBUG - 2013-12-10 10:26:37 --> Output Class Initialized
DEBUG - 2013-12-10 10:26:38 --> Security Class Initialized
DEBUG - 2013-12-10 10:26:38 --> Input Class Initialized
DEBUG - 2013-12-10 10:26:38 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-10 10:26:38 --> Language Class Initialized
DEBUG - 2013-12-10 10:26:38 --> Loader Class Initialized
DEBUG - 2013-12-10 10:26:38 --> Helper loaded: form_helper
DEBUG - 2013-12-10 10:26:38 --> Helper loaded: url_helper
DEBUG - 2013-12-10 10:26:38 --> Helper loaded: html_helper
DEBUG - 2013-12-10 10:26:38 --> Database Driver Class Initialized
DEBUG - 2013-12-10 10:26:38 --> Session Class Initialized
DEBUG - 2013-12-10 10:26:38 --> Helper loaded: string_helper
DEBUG - 2013-12-10 10:26:38 --> Session routines successfully run
DEBUG - 2013-12-10 10:26:38 --> Form Validation Class Initialized
DEBUG - 2013-12-10 10:26:38 --> Controller Class Initialized
DEBUG - 2013-12-10 10:26:38 --> Model Class Initialized
DEBUG - 2013-12-10 10:26:38 --> Model Class Initialized
DEBUG - 2013-12-10 10:26:38 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-10 10:26:38 --> after session initialization................
INFO  - 2013-12-10 10:26:38 --> The forum id is 5
INFO  - 2013-12-10 10:26:38 --> inside retrieving pharmacy beyond id 
INFO  - 2013-12-10 10:26:38 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 5
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '5'
ORDER BY `ft`.`name`)
INFO  - 2013-12-10 10:26:38 --> The encoded json is [{"id":"7","text":"Increase In school fees","hasChildren":true},{"id":"12","text":"UNN DEMONSTRATION HALTED","hasChildren":false}]
DEBUG - 2013-12-10 10:26:38 --> Final output sent to browser
DEBUG - 2013-12-10 10:26:38 --> Total execution time: 0.0400
DEBUG - 2013-12-10 10:26:39 --> Config Class Initialized
DEBUG - 2013-12-10 10:26:39 --> Hooks Class Initialized
DEBUG - 2013-12-10 10:26:39 --> Utf8 Class Initialized
DEBUG - 2013-12-10 10:26:39 --> UTF-8 Support Enabled
DEBUG - 2013-12-10 10:26:39 --> URI Class Initialized
DEBUG - 2013-12-10 10:26:39 --> Router Class Initialized
DEBUG - 2013-12-10 10:26:39 --> Output Class Initialized
DEBUG - 2013-12-10 10:26:39 --> Security Class Initialized
DEBUG - 2013-12-10 10:26:39 --> Input Class Initialized
DEBUG - 2013-12-10 10:26:39 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-10 10:26:39 --> Language Class Initialized
DEBUG - 2013-12-10 10:26:39 --> Loader Class Initialized
DEBUG - 2013-12-10 10:26:39 --> Helper loaded: form_helper
DEBUG - 2013-12-10 10:26:39 --> Helper loaded: url_helper
DEBUG - 2013-12-10 10:26:39 --> Helper loaded: html_helper
DEBUG - 2013-12-10 10:26:39 --> Database Driver Class Initialized
DEBUG - 2013-12-10 10:26:39 --> Session Class Initialized
DEBUG - 2013-12-10 10:26:39 --> Helper loaded: string_helper
DEBUG - 2013-12-10 10:26:39 --> Session routines successfully run
DEBUG - 2013-12-10 10:26:39 --> Form Validation Class Initialized
DEBUG - 2013-12-10 10:26:39 --> Controller Class Initialized
DEBUG - 2013-12-10 10:26:39 --> Model Class Initialized
DEBUG - 2013-12-10 10:26:39 --> Model Class Initialized
DEBUG - 2013-12-10 10:26:39 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-10 10:26:39 --> after session initialization................
INFO  - 2013-12-10 10:26:39 --> The forum id is 7
INFO  - 2013-12-10 10:26:39 --> inside retrieving pharmacy beyond id 
INFO  - 2013-12-10 10:26:39 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 7
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '7'
ORDER BY `ft`.`name`)
INFO  - 2013-12-10 10:26:39 --> The encoded json is [{"id":"11","text":"BABCOOK FEES","hasChildren":false}]
DEBUG - 2013-12-10 10:26:39 --> Final output sent to browser
DEBUG - 2013-12-10 10:26:39 --> Total execution time: 0.0600
DEBUG - 2013-12-10 10:26:42 --> Config Class Initialized
DEBUG - 2013-12-10 10:26:42 --> Hooks Class Initialized
DEBUG - 2013-12-10 10:26:42 --> Utf8 Class Initialized
DEBUG - 2013-12-10 10:26:42 --> UTF-8 Support Enabled
DEBUG - 2013-12-10 10:26:42 --> URI Class Initialized
DEBUG - 2013-12-10 10:26:42 --> Router Class Initialized
DEBUG - 2013-12-10 10:26:42 --> Output Class Initialized
DEBUG - 2013-12-10 10:26:42 --> Security Class Initialized
DEBUG - 2013-12-10 10:26:42 --> Input Class Initialized
DEBUG - 2013-12-10 10:26:42 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-10 10:26:42 --> Language Class Initialized
DEBUG - 2013-12-10 10:26:42 --> Loader Class Initialized
DEBUG - 2013-12-10 10:26:42 --> Helper loaded: form_helper
DEBUG - 2013-12-10 10:26:42 --> Helper loaded: url_helper
DEBUG - 2013-12-10 10:26:42 --> Helper loaded: html_helper
DEBUG - 2013-12-10 10:26:42 --> Database Driver Class Initialized
DEBUG - 2013-12-10 10:26:42 --> Session Class Initialized
DEBUG - 2013-12-10 10:26:42 --> Helper loaded: string_helper
DEBUG - 2013-12-10 10:26:42 --> Session routines successfully run
DEBUG - 2013-12-10 10:26:42 --> Form Validation Class Initialized
DEBUG - 2013-12-10 10:26:42 --> Controller Class Initialized
DEBUG - 2013-12-10 10:26:42 --> Model Class Initialized
DEBUG - 2013-12-10 10:26:42 --> Model Class Initialized
DEBUG - 2013-12-10 10:26:42 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-10 10:26:42 --> after session initialization................
INFO  - 2013-12-10 10:26:42 --> The forum id is 6
INFO  - 2013-12-10 10:26:42 --> inside retrieving pharmacy beyond id 
INFO  - 2013-12-10 10:26:42 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 6
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '6'
ORDER BY `ft`.`name`)
INFO  - 2013-12-10 10:26:42 --> The encoded json is [{"id":"8","text":"Complicated Long sight","hasChildren":true},{"id":"9","text":"Non complicated long sight","hasChildren":true}]
DEBUG - 2013-12-10 10:26:42 --> Final output sent to browser
DEBUG - 2013-12-10 10:26:42 --> Total execution time: 0.0400
DEBUG - 2013-12-10 10:27:15 --> Config Class Initialized
DEBUG - 2013-12-10 10:27:15 --> Hooks Class Initialized
DEBUG - 2013-12-10 10:27:15 --> Utf8 Class Initialized
DEBUG - 2013-12-10 10:27:15 --> UTF-8 Support Enabled
DEBUG - 2013-12-10 10:27:15 --> URI Class Initialized
DEBUG - 2013-12-10 10:27:15 --> Router Class Initialized
DEBUG - 2013-12-10 10:27:15 --> Output Class Initialized
DEBUG - 2013-12-10 10:27:15 --> Security Class Initialized
DEBUG - 2013-12-10 10:27:15 --> Input Class Initialized
DEBUG - 2013-12-10 10:27:15 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-10 10:27:15 --> Language Class Initialized
DEBUG - 2013-12-10 10:27:15 --> Loader Class Initialized
DEBUG - 2013-12-10 10:27:15 --> Helper loaded: form_helper
DEBUG - 2013-12-10 10:27:15 --> Helper loaded: url_helper
DEBUG - 2013-12-10 10:27:15 --> Helper loaded: html_helper
DEBUG - 2013-12-10 10:27:15 --> Database Driver Class Initialized
DEBUG - 2013-12-10 10:27:15 --> Session Class Initialized
DEBUG - 2013-12-10 10:27:15 --> Helper loaded: string_helper
DEBUG - 2013-12-10 10:27:15 --> Session routines successfully run
DEBUG - 2013-12-10 10:27:15 --> Form Validation Class Initialized
DEBUG - 2013-12-10 10:27:15 --> Controller Class Initialized
DEBUG - 2013-12-10 10:27:15 --> Model Class Initialized
DEBUG - 2013-12-10 10:27:15 --> Model Class Initialized
DEBUG - 2013-12-10 10:27:15 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-10 10:27:15 --> after session initialization................
INFO  - 2013-12-10 10:27:15 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-10 10:27:15 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-10 10:27:15 --> inside retrieving vacancy for member
INFO  - 2013-12-10 10:27:15 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-12-10 10:27:15 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-10 10:27:15 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-12-10 10:27:15 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-10 10:27:15 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-10 10:27:15 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-10 10:27:15 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-10 10:27:15 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-12-10 10:27:15 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-12-10 10:27:15 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
DEBUG - 2013-12-10 10:27:15 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-12-10 10:27:15 --> Final output sent to browser
DEBUG - 2013-12-10 10:27:15 --> Total execution time: 0.0600
DEBUG - 2013-12-10 10:27:15 --> Config Class Initialized
DEBUG - 2013-12-10 10:27:15 --> Hooks Class Initialized
DEBUG - 2013-12-10 10:27:15 --> Utf8 Class Initialized
DEBUG - 2013-12-10 10:27:15 --> UTF-8 Support Enabled
DEBUG - 2013-12-10 10:27:15 --> URI Class Initialized
DEBUG - 2013-12-10 10:27:15 --> Router Class Initialized
ERROR - 2013-12-10 10:27:15 --> 404 Page Not Found --> css
