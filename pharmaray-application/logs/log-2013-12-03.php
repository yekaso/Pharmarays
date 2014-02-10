<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2013-12-03 09:08:26 --> Config Class Initialized
DEBUG - 2013-12-03 09:08:26 --> Hooks Class Initialized
DEBUG - 2013-12-03 09:08:26 --> Utf8 Class Initialized
DEBUG - 2013-12-03 09:08:26 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 09:08:26 --> URI Class Initialized
DEBUG - 2013-12-03 09:08:26 --> Router Class Initialized
DEBUG - 2013-12-03 09:08:26 --> No URI present. Default controller set.
DEBUG - 2013-12-03 09:08:26 --> Output Class Initialized
DEBUG - 2013-12-03 09:08:26 --> Security Class Initialized
DEBUG - 2013-12-03 09:08:26 --> Input Class Initialized
DEBUG - 2013-12-03 09:08:26 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-03 09:08:26 --> Language Class Initialized
DEBUG - 2013-12-03 09:08:26 --> Loader Class Initialized
DEBUG - 2013-12-03 09:08:26 --> Helper loaded: form_helper
DEBUG - 2013-12-03 09:08:26 --> Helper loaded: url_helper
DEBUG - 2013-12-03 09:08:26 --> Helper loaded: html_helper
DEBUG - 2013-12-03 09:08:26 --> Database Driver Class Initialized
DEBUG - 2013-12-03 09:08:27 --> Session Class Initialized
DEBUG - 2013-12-03 09:08:27 --> Helper loaded: string_helper
DEBUG - 2013-12-03 09:08:27 --> A session cookie was not found.
DEBUG - 2013-12-03 09:08:27 --> Session routines successfully run
DEBUG - 2013-12-03 09:08:27 --> Form Validation Class Initialized
DEBUG - 2013-12-03 09:08:27 --> Controller Class Initialized
INFO  - 2013-12-03 09:08:27 --> the form message==>
INFO  - 2013-12-03 09:08:27 --> The session id is ========>17081abc34d66a1f65dfc4a0730a2db1 and the member id is =======>
INFO  - 2013-12-03 09:08:27 --> after the retrieving session list.................//////////
DEBUG - 2013-12-03 09:08:27 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-12-03 09:08:27 --> Final output sent to browser
DEBUG - 2013-12-03 09:08:27 --> Total execution time: 1.2791
DEBUG - 2013-12-03 09:08:34 --> Config Class Initialized
DEBUG - 2013-12-03 09:08:34 --> Hooks Class Initialized
DEBUG - 2013-12-03 09:08:34 --> Utf8 Class Initialized
DEBUG - 2013-12-03 09:08:34 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 09:08:34 --> URI Class Initialized
DEBUG - 2013-12-03 09:08:34 --> Router Class Initialized
DEBUG - 2013-12-03 09:08:34 --> Output Class Initialized
DEBUG - 2013-12-03 09:08:34 --> Security Class Initialized
DEBUG - 2013-12-03 09:08:34 --> Input Class Initialized
DEBUG - 2013-12-03 09:08:34 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-03 09:08:34 --> Language Class Initialized
DEBUG - 2013-12-03 09:08:34 --> Loader Class Initialized
DEBUG - 2013-12-03 09:08:34 --> Helper loaded: form_helper
DEBUG - 2013-12-03 09:08:34 --> Helper loaded: url_helper
DEBUG - 2013-12-03 09:08:34 --> Helper loaded: html_helper
DEBUG - 2013-12-03 09:08:34 --> Database Driver Class Initialized
DEBUG - 2013-12-03 09:08:35 --> Session Class Initialized
DEBUG - 2013-12-03 09:08:35 --> Helper loaded: string_helper
DEBUG - 2013-12-03 09:08:35 --> Session routines successfully run
DEBUG - 2013-12-03 09:08:35 --> Form Validation Class Initialized
DEBUG - 2013-12-03 09:08:35 --> Controller Class Initialized
DEBUG - 2013-12-03 09:08:35 --> Model Class Initialized
DEBUG - 2013-12-03 09:08:35 --> Model Class Initialized
DEBUG - 2013-12-03 09:08:35 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-03 09:08:35 --> after session initialization................
INFO  - 2013-12-03 09:08:35 --> inside rays login auth.............
DEBUG - 2013-12-03 09:08:35 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-12-03 09:08:35 --> XSS Filtering completed
DEBUG - 2013-12-03 09:08:35 --> XSS Filtering completed
INFO  - 2013-12-03 09:08:35 --> before getting the relation of member............6
INFO  - 2013-12-03 09:08:35 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-12-03 09:08:35 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-03 09:08:35 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-03 09:08:35 --> inside retrieving vacancy for member
INFO  - 2013-12-03 09:08:36 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-12-03 09:08:36 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-03 09:08:36 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-12-03 09:08:36 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-03 09:08:36 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-03 09:08:36 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-03 09:08:36 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-03 09:08:36 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-12-03 09:08:36 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-12-03 09:08:36 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
DEBUG - 2013-12-03 09:08:36 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-12-03 09:08:36 --> Final output sent to browser
DEBUG - 2013-12-03 09:08:36 --> Total execution time: 2.6382
DEBUG - 2013-12-03 09:08:37 --> Config Class Initialized
DEBUG - 2013-12-03 09:08:37 --> Hooks Class Initialized
DEBUG - 2013-12-03 09:08:37 --> Utf8 Class Initialized
DEBUG - 2013-12-03 09:08:37 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 09:08:37 --> URI Class Initialized
DEBUG - 2013-12-03 09:08:37 --> Router Class Initialized
DEBUG - 2013-12-03 09:08:37 --> Output Class Initialized
DEBUG - 2013-12-03 09:08:37 --> Security Class Initialized
DEBUG - 2013-12-03 09:08:37 --> Input Class Initialized
DEBUG - 2013-12-03 09:08:37 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-03 09:08:37 --> Language Class Initialized
DEBUG - 2013-12-03 09:08:37 --> Loader Class Initialized
DEBUG - 2013-12-03 09:08:37 --> Helper loaded: form_helper
DEBUG - 2013-12-03 09:08:37 --> Helper loaded: url_helper
DEBUG - 2013-12-03 09:08:37 --> Helper loaded: html_helper
DEBUG - 2013-12-03 09:08:37 --> Database Driver Class Initialized
DEBUG - 2013-12-03 09:08:37 --> Session Class Initialized
DEBUG - 2013-12-03 09:08:37 --> Helper loaded: string_helper
DEBUG - 2013-12-03 09:08:37 --> Session routines successfully run
DEBUG - 2013-12-03 09:08:37 --> Form Validation Class Initialized
DEBUG - 2013-12-03 09:08:37 --> Controller Class Initialized
DEBUG - 2013-12-03 09:08:37 --> Model Class Initialized
DEBUG - 2013-12-03 09:08:37 --> Model Class Initialized
DEBUG - 2013-12-03 09:08:37 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-03 09:08:37 --> after session initialization................
ERROR - 2013-12-03 09:08:37 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-12-03 09:08:37 --> Config Class Initialized
DEBUG - 2013-12-03 09:08:37 --> Hooks Class Initialized
DEBUG - 2013-12-03 09:08:37 --> Utf8 Class Initialized
DEBUG - 2013-12-03 09:08:37 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 09:08:37 --> URI Class Initialized
DEBUG - 2013-12-03 09:08:37 --> Router Class Initialized
DEBUG - 2013-12-03 09:08:37 --> Output Class Initialized
DEBUG - 2013-12-03 09:08:37 --> Security Class Initialized
DEBUG - 2013-12-03 09:08:37 --> Input Class Initialized
DEBUG - 2013-12-03 09:08:37 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-03 09:08:37 --> Language Class Initialized
DEBUG - 2013-12-03 09:08:37 --> Loader Class Initialized
DEBUG - 2013-12-03 09:08:37 --> Helper loaded: form_helper
DEBUG - 2013-12-03 09:08:37 --> Helper loaded: url_helper
DEBUG - 2013-12-03 09:08:37 --> Helper loaded: html_helper
DEBUG - 2013-12-03 09:08:37 --> Database Driver Class Initialized
DEBUG - 2013-12-03 09:08:38 --> Session Class Initialized
DEBUG - 2013-12-03 09:08:38 --> Helper loaded: string_helper
DEBUG - 2013-12-03 09:08:38 --> Session routines successfully run
DEBUG - 2013-12-03 09:08:38 --> Form Validation Class Initialized
DEBUG - 2013-12-03 09:08:38 --> Controller Class Initialized
DEBUG - 2013-12-03 09:08:38 --> Model Class Initialized
DEBUG - 2013-12-03 09:08:38 --> Model Class Initialized
DEBUG - 2013-12-03 09:08:38 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-03 09:08:38 --> after session initialization................
ERROR - 2013-12-03 09:08:38 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-12-03 09:08:38 --> Config Class Initialized
DEBUG - 2013-12-03 09:08:38 --> Hooks Class Initialized
DEBUG - 2013-12-03 09:08:38 --> Utf8 Class Initialized
DEBUG - 2013-12-03 09:08:38 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 09:08:38 --> URI Class Initialized
DEBUG - 2013-12-03 09:08:38 --> Router Class Initialized
ERROR - 2013-12-03 09:08:38 --> 404 Page Not Found --> css
DEBUG - 2013-12-03 09:08:54 --> Config Class Initialized
DEBUG - 2013-12-03 09:08:54 --> Hooks Class Initialized
DEBUG - 2013-12-03 09:08:54 --> Utf8 Class Initialized
DEBUG - 2013-12-03 09:08:54 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 09:08:54 --> URI Class Initialized
DEBUG - 2013-12-03 09:08:54 --> Router Class Initialized
DEBUG - 2013-12-03 09:08:54 --> Output Class Initialized
DEBUG - 2013-12-03 09:08:54 --> Security Class Initialized
DEBUG - 2013-12-03 09:08:54 --> Input Class Initialized
DEBUG - 2013-12-03 09:08:54 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-03 09:08:54 --> Language Class Initialized
DEBUG - 2013-12-03 09:08:54 --> Loader Class Initialized
DEBUG - 2013-12-03 09:08:54 --> Helper loaded: form_helper
DEBUG - 2013-12-03 09:08:54 --> Helper loaded: url_helper
DEBUG - 2013-12-03 09:08:54 --> Helper loaded: html_helper
DEBUG - 2013-12-03 09:08:54 --> Database Driver Class Initialized
DEBUG - 2013-12-03 09:08:54 --> Session Class Initialized
DEBUG - 2013-12-03 09:08:54 --> Helper loaded: string_helper
DEBUG - 2013-12-03 09:08:54 --> Session routines successfully run
DEBUG - 2013-12-03 09:08:54 --> Form Validation Class Initialized
DEBUG - 2013-12-03 09:08:54 --> Controller Class Initialized
DEBUG - 2013-12-03 09:08:54 --> Model Class Initialized
DEBUG - 2013-12-03 09:08:54 --> Model Class Initialized
DEBUG - 2013-12-03 09:08:54 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-03 09:08:54 --> after session initialization................
INFO  - 2013-12-03 09:08:54 --> last news id is 0
INFO  - 2013-12-03 09:08:54 --> SELECT a.id_article as id, a.title as newsletter_title, a.description as newsletter_description, a.guestonly as guestonly, a.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`article` a)
JOIN `member` m ON `a`.`memberid_member` = `m`.`id_member`
WHERE `a`.`id_article` <> 0
ORDER BY `a`.`id_article` desc
LIMIT 15
INFO  - 2013-12-03 09:08:54 --> after newsleters list has been clicked.................
INFO  - 2013-12-03 09:08:54 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=16&article_type=newsletter_title
INFO  - 2013-12-03 09:08:54 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=15&article_type=newsletter_title
INFO  - 2013-12-03 09:08:54 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=14&article_type=newsletter_title
INFO  - 2013-12-03 09:08:54 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=13&article_type=newsletter_title
INFO  - 2013-12-03 09:08:54 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=12&article_type=newsletter_title
INFO  - 2013-12-03 09:08:54 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=11&article_type=newsletter_title
INFO  - 2013-12-03 09:08:54 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=10&article_type=newsletter_title
INFO  - 2013-12-03 09:08:54 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=9&article_type=newsletter_title
INFO  - 2013-12-03 09:08:54 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=8&article_type=newsletter_title
INFO  - 2013-12-03 09:08:54 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=7&article_type=newsletter_title
INFO  - 2013-12-03 09:08:54 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=6&article_type=newsletter_title
INFO  - 2013-12-03 09:08:54 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=5&article_type=newsletter_title
INFO  - 2013-12-03 09:08:54 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=4&article_type=newsletter_title
INFO  - 2013-12-03 09:08:54 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=3&article_type=newsletter_title
INFO  - 2013-12-03 09:08:54 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=2&article_type=newsletter_title
DEBUG - 2013-12-03 09:08:54 --> File loaded: ../pharmaray-application/views/articles.php
DEBUG - 2013-12-03 09:08:54 --> Final output sent to browser
DEBUG - 2013-12-03 09:08:54 --> Total execution time: 0.1390
DEBUG - 2013-12-03 09:08:56 --> Config Class Initialized
DEBUG - 2013-12-03 09:08:56 --> Hooks Class Initialized
DEBUG - 2013-12-03 09:08:56 --> Utf8 Class Initialized
DEBUG - 2013-12-03 09:08:56 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 09:08:56 --> URI Class Initialized
DEBUG - 2013-12-03 09:08:56 --> Router Class Initialized
DEBUG - 2013-12-03 09:08:56 --> Output Class Initialized
DEBUG - 2013-12-03 09:08:56 --> Security Class Initialized
DEBUG - 2013-12-03 09:08:56 --> Input Class Initialized
DEBUG - 2013-12-03 09:08:56 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-03 09:08:56 --> Language Class Initialized
DEBUG - 2013-12-03 09:08:56 --> Loader Class Initialized
DEBUG - 2013-12-03 09:08:56 --> Helper loaded: form_helper
DEBUG - 2013-12-03 09:08:56 --> Helper loaded: url_helper
DEBUG - 2013-12-03 09:08:56 --> Helper loaded: html_helper
DEBUG - 2013-12-03 09:08:56 --> Database Driver Class Initialized
DEBUG - 2013-12-03 09:08:56 --> Session Class Initialized
DEBUG - 2013-12-03 09:08:56 --> Helper loaded: string_helper
DEBUG - 2013-12-03 09:08:56 --> Session routines successfully run
DEBUG - 2013-12-03 09:08:56 --> Form Validation Class Initialized
DEBUG - 2013-12-03 09:08:56 --> Controller Class Initialized
DEBUG - 2013-12-03 09:08:56 --> Model Class Initialized
DEBUG - 2013-12-03 09:08:56 --> Model Class Initialized
DEBUG - 2013-12-03 09:08:56 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-03 09:08:56 --> after session initialization................
INFO  - 2013-12-03 09:08:56 --> inside retrieve most commented forum topic 
INFO  - 2013-12-03 09:08:57 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
INFO  - 2013-12-03 09:08:57 --> inside retrieving first 20 topics 
INFO  - 2013-12-03 09:08:57 --> SELECT `t`.`id_topicforum`, upper(t.name) as name, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
LIMIT 20
INFO  - 2013-12-03 09:08:57 --> inside retrieving pharmacy beyond id 
INFO  - 2013-12-03 09:08:57 --> SELECT `ff`.`id_forum` as id, `ff`.`name`, count(f.id_forum) as sub_forum
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` is null 
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`
INFO  - 2013-12-03 09:08:57 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-12-03 09:08:57 --> inside retrieving comments topic id and drug id is 1
INFO  - 2013-12-03 09:08:57 --> SELECT `tc`.`id_topiccomment`, `tc`.`comment`, `tc`.`timecreated`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-12-03 09:08:57 --> inside retrieving comments topic id 1
INFO  - 2013-12-03 09:08:57 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
INFO  - 2013-12-03 09:08:57 --> after forums has been clicked.................
INFO  - 2013-12-03 09:08:57 -->  column name inside view is 0 column Data is Male Doctor
INFO  - 2013-12-03 09:08:57 -->  column name inside view is 1 column Data is Ordinary Member
DEBUG - 2013-12-03 09:08:57 --> File loaded: ../pharmaray-application/views/forum.php
DEBUG - 2013-12-03 09:08:57 --> Final output sent to browser
DEBUG - 2013-12-03 09:08:57 --> Total execution time: 0.2090
DEBUG - 2013-12-03 09:08:57 --> Config Class Initialized
DEBUG - 2013-12-03 09:08:57 --> Hooks Class Initialized
DEBUG - 2013-12-03 09:08:57 --> Utf8 Class Initialized
DEBUG - 2013-12-03 09:08:57 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 09:08:57 --> URI Class Initialized
DEBUG - 2013-12-03 09:08:57 --> Router Class Initialized
DEBUG - 2013-12-03 09:08:57 --> Output Class Initialized
DEBUG - 2013-12-03 09:08:57 --> Security Class Initialized
DEBUG - 2013-12-03 09:08:57 --> Input Class Initialized
DEBUG - 2013-12-03 09:08:57 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-03 09:08:57 --> Language Class Initialized
DEBUG - 2013-12-03 09:08:57 --> Loader Class Initialized
DEBUG - 2013-12-03 09:08:57 --> Helper loaded: form_helper
DEBUG - 2013-12-03 09:08:57 --> Helper loaded: url_helper
DEBUG - 2013-12-03 09:08:57 --> Helper loaded: html_helper
DEBUG - 2013-12-03 09:08:57 --> Database Driver Class Initialized
DEBUG - 2013-12-03 09:08:58 --> Session Class Initialized
DEBUG - 2013-12-03 09:08:58 --> Helper loaded: string_helper
DEBUG - 2013-12-03 09:08:58 --> Session routines successfully run
DEBUG - 2013-12-03 09:08:58 --> Form Validation Class Initialized
DEBUG - 2013-12-03 09:08:58 --> Controller Class Initialized
DEBUG - 2013-12-03 09:08:58 --> Model Class Initialized
DEBUG - 2013-12-03 09:08:58 --> Model Class Initialized
DEBUG - 2013-12-03 09:08:58 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-03 09:08:58 --> after session initialization................
ERROR - 2013-12-03 09:08:58 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-12-03 09:08:58 --> Config Class Initialized
DEBUG - 2013-12-03 09:08:58 --> Hooks Class Initialized
DEBUG - 2013-12-03 09:08:58 --> Utf8 Class Initialized
DEBUG - 2013-12-03 09:08:58 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 09:08:58 --> URI Class Initialized
DEBUG - 2013-12-03 09:08:58 --> Router Class Initialized
ERROR - 2013-12-03 09:08:58 --> 404 Page Not Found --> css
DEBUG - 2013-12-03 09:09:00 --> Config Class Initialized
DEBUG - 2013-12-03 09:09:00 --> Hooks Class Initialized
DEBUG - 2013-12-03 09:09:00 --> Utf8 Class Initialized
DEBUG - 2013-12-03 09:09:00 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 09:09:00 --> URI Class Initialized
DEBUG - 2013-12-03 09:09:00 --> Router Class Initialized
DEBUG - 2013-12-03 09:09:00 --> Output Class Initialized
DEBUG - 2013-12-03 09:09:00 --> Security Class Initialized
DEBUG - 2013-12-03 09:09:00 --> Input Class Initialized
DEBUG - 2013-12-03 09:09:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-03 09:09:00 --> Language Class Initialized
DEBUG - 2013-12-03 09:09:00 --> Loader Class Initialized
DEBUG - 2013-12-03 09:09:00 --> Helper loaded: form_helper
DEBUG - 2013-12-03 09:09:00 --> Helper loaded: url_helper
DEBUG - 2013-12-03 09:09:00 --> Helper loaded: html_helper
DEBUG - 2013-12-03 09:09:00 --> Database Driver Class Initialized
DEBUG - 2013-12-03 09:09:00 --> Session Class Initialized
DEBUG - 2013-12-03 09:09:00 --> Helper loaded: string_helper
DEBUG - 2013-12-03 09:09:00 --> Session routines successfully run
DEBUG - 2013-12-03 09:09:00 --> Form Validation Class Initialized
DEBUG - 2013-12-03 09:09:00 --> Controller Class Initialized
DEBUG - 2013-12-03 09:09:00 --> Model Class Initialized
DEBUG - 2013-12-03 09:09:00 --> Model Class Initialized
DEBUG - 2013-12-03 09:09:00 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-03 09:09:00 --> after session initialization................
INFO  - 2013-12-03 09:09:00 --> after community pharmacy  has been clicked.................
INFO  - 2013-12-03 09:09:00 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-12-03 09:09:00 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-12-03 09:09:00 --> inside retrieving locations 
INFO  - 2013-12-03 09:09:00 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-12-03 09:09:00 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-12-03 09:09:00 --> Final output sent to browser
DEBUG - 2013-12-03 09:09:00 --> Total execution time: 0.1030
DEBUG - 2013-12-03 09:10:53 --> Config Class Initialized
DEBUG - 2013-12-03 09:10:53 --> Hooks Class Initialized
DEBUG - 2013-12-03 09:10:53 --> Utf8 Class Initialized
DEBUG - 2013-12-03 09:10:53 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 09:10:53 --> URI Class Initialized
DEBUG - 2013-12-03 09:10:53 --> Router Class Initialized
DEBUG - 2013-12-03 09:10:53 --> Output Class Initialized
DEBUG - 2013-12-03 09:10:53 --> Security Class Initialized
DEBUG - 2013-12-03 09:10:53 --> Input Class Initialized
DEBUG - 2013-12-03 09:10:53 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-03 09:10:53 --> Language Class Initialized
DEBUG - 2013-12-03 09:10:53 --> Loader Class Initialized
DEBUG - 2013-12-03 09:10:53 --> Helper loaded: form_helper
DEBUG - 2013-12-03 09:10:53 --> Helper loaded: url_helper
DEBUG - 2013-12-03 09:10:53 --> Helper loaded: html_helper
DEBUG - 2013-12-03 09:10:53 --> Database Driver Class Initialized
DEBUG - 2013-12-03 09:10:54 --> Session Class Initialized
DEBUG - 2013-12-03 09:10:54 --> Helper loaded: string_helper
DEBUG - 2013-12-03 09:10:54 --> Session routines successfully run
DEBUG - 2013-12-03 09:10:54 --> Form Validation Class Initialized
DEBUG - 2013-12-03 09:10:54 --> Controller Class Initialized
DEBUG - 2013-12-03 09:10:54 --> Model Class Initialized
DEBUG - 2013-12-03 09:10:54 --> Model Class Initialized
DEBUG - 2013-12-03 09:10:54 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-03 09:10:54 --> after session initialization................
INFO  - 2013-12-03 09:10:54 --> inside retrieve most commented forum topic 
INFO  - 2013-12-03 09:10:54 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
INFO  - 2013-12-03 09:10:54 --> inside retrieving first 20 topics 
INFO  - 2013-12-03 09:10:54 --> SELECT `t`.`id_topicforum`, upper(t.name) as name, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
LIMIT 20
INFO  - 2013-12-03 09:10:54 --> inside retrieving pharmacy beyond id 
INFO  - 2013-12-03 09:10:54 --> SELECT `ff`.`id_forum` as id, `ff`.`name`, count(f.id_forum) as sub_forum
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` is null 
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`
INFO  - 2013-12-03 09:10:54 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-12-03 09:10:54 --> inside retrieving comments topic id and drug id is 1
INFO  - 2013-12-03 09:10:54 --> SELECT `tc`.`id_topiccomment`, `tc`.`comment`, `tc`.`timecreated`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-12-03 09:10:54 --> inside retrieving comments topic id 1
INFO  - 2013-12-03 09:10:54 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
INFO  - 2013-12-03 09:10:54 --> after forums has been clicked.................
INFO  - 2013-12-03 09:10:54 -->  column name inside view is 0 column Data is Male Doctor
INFO  - 2013-12-03 09:10:54 -->  column name inside view is 1 column Data is Ordinary Member
DEBUG - 2013-12-03 09:10:54 --> File loaded: ../pharmaray-application/views/forum.php
DEBUG - 2013-12-03 09:10:54 --> Final output sent to browser
DEBUG - 2013-12-03 09:10:54 --> Total execution time: 1.0911
DEBUG - 2013-12-03 09:10:54 --> Config Class Initialized
DEBUG - 2013-12-03 09:10:54 --> Hooks Class Initialized
DEBUG - 2013-12-03 09:10:54 --> Utf8 Class Initialized
DEBUG - 2013-12-03 09:10:54 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 09:10:54 --> URI Class Initialized
DEBUG - 2013-12-03 09:10:54 --> Router Class Initialized
DEBUG - 2013-12-03 09:10:54 --> Output Class Initialized
DEBUG - 2013-12-03 09:10:54 --> Security Class Initialized
DEBUG - 2013-12-03 09:10:54 --> Input Class Initialized
DEBUG - 2013-12-03 09:10:54 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-03 09:10:54 --> Language Class Initialized
DEBUG - 2013-12-03 09:10:54 --> Loader Class Initialized
DEBUG - 2013-12-03 09:10:54 --> Helper loaded: form_helper
DEBUG - 2013-12-03 09:10:54 --> Helper loaded: url_helper
DEBUG - 2013-12-03 09:10:54 --> Helper loaded: html_helper
DEBUG - 2013-12-03 09:10:54 --> Database Driver Class Initialized
DEBUG - 2013-12-03 09:10:54 --> Session Class Initialized
DEBUG - 2013-12-03 09:10:54 --> Helper loaded: string_helper
DEBUG - 2013-12-03 09:10:54 --> Session routines successfully run
DEBUG - 2013-12-03 09:10:54 --> Form Validation Class Initialized
DEBUG - 2013-12-03 09:10:54 --> Controller Class Initialized
DEBUG - 2013-12-03 09:10:54 --> Model Class Initialized
DEBUG - 2013-12-03 09:10:54 --> Model Class Initialized
DEBUG - 2013-12-03 09:10:54 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-03 09:10:54 --> after session initialization................
ERROR - 2013-12-03 09:10:54 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-12-03 09:10:54 --> Config Class Initialized
DEBUG - 2013-12-03 09:10:54 --> Hooks Class Initialized
DEBUG - 2013-12-03 09:10:54 --> Utf8 Class Initialized
DEBUG - 2013-12-03 09:10:54 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 09:10:54 --> URI Class Initialized
DEBUG - 2013-12-03 09:10:54 --> Router Class Initialized
ERROR - 2013-12-03 09:10:54 --> 404 Page Not Found --> css
DEBUG - 2013-12-03 09:10:55 --> Config Class Initialized
DEBUG - 2013-12-03 09:10:55 --> Hooks Class Initialized
DEBUG - 2013-12-03 09:10:55 --> Utf8 Class Initialized
DEBUG - 2013-12-03 09:10:55 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 09:10:55 --> URI Class Initialized
DEBUG - 2013-12-03 09:10:55 --> Router Class Initialized
DEBUG - 2013-12-03 09:10:55 --> Output Class Initialized
DEBUG - 2013-12-03 09:10:55 --> Security Class Initialized
DEBUG - 2013-12-03 09:10:55 --> Input Class Initialized
DEBUG - 2013-12-03 09:10:55 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-03 09:10:55 --> Language Class Initialized
DEBUG - 2013-12-03 09:10:55 --> Loader Class Initialized
DEBUG - 2013-12-03 09:10:55 --> Helper loaded: form_helper
DEBUG - 2013-12-03 09:10:55 --> Helper loaded: url_helper
DEBUG - 2013-12-03 09:10:55 --> Helper loaded: html_helper
DEBUG - 2013-12-03 09:10:55 --> Database Driver Class Initialized
DEBUG - 2013-12-03 09:10:55 --> Session Class Initialized
DEBUG - 2013-12-03 09:10:55 --> Helper loaded: string_helper
DEBUG - 2013-12-03 09:10:55 --> Session routines successfully run
DEBUG - 2013-12-03 09:10:55 --> Form Validation Class Initialized
DEBUG - 2013-12-03 09:10:55 --> Controller Class Initialized
DEBUG - 2013-12-03 09:10:55 --> Model Class Initialized
DEBUG - 2013-12-03 09:10:55 --> Model Class Initialized
DEBUG - 2013-12-03 09:10:55 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-03 09:10:55 --> after session initialization................
INFO  - 2013-12-03 09:10:55 --> last news id is 0
INFO  - 2013-12-03 09:10:55 --> SELECT a.id_article as id, a.title as newsletter_title, a.description as newsletter_description, a.guestonly as guestonly, a.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`article` a)
JOIN `member` m ON `a`.`memberid_member` = `m`.`id_member`
WHERE `a`.`id_article` <> 0
ORDER BY `a`.`id_article` desc
LIMIT 15
INFO  - 2013-12-03 09:10:55 --> after newsleters list has been clicked.................
INFO  - 2013-12-03 09:10:55 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=16&article_type=newsletter_title
INFO  - 2013-12-03 09:10:55 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=15&article_type=newsletter_title
INFO  - 2013-12-03 09:10:55 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=14&article_type=newsletter_title
INFO  - 2013-12-03 09:10:55 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=13&article_type=newsletter_title
INFO  - 2013-12-03 09:10:55 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=12&article_type=newsletter_title
INFO  - 2013-12-03 09:10:55 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=11&article_type=newsletter_title
INFO  - 2013-12-03 09:10:55 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=10&article_type=newsletter_title
INFO  - 2013-12-03 09:10:55 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=9&article_type=newsletter_title
INFO  - 2013-12-03 09:10:55 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=8&article_type=newsletter_title
INFO  - 2013-12-03 09:10:55 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=7&article_type=newsletter_title
INFO  - 2013-12-03 09:10:55 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=6&article_type=newsletter_title
INFO  - 2013-12-03 09:10:55 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=5&article_type=newsletter_title
INFO  - 2013-12-03 09:10:55 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=4&article_type=newsletter_title
INFO  - 2013-12-03 09:10:55 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=3&article_type=newsletter_title
INFO  - 2013-12-03 09:10:55 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=2&article_type=newsletter_title
DEBUG - 2013-12-03 09:10:55 --> File loaded: ../pharmaray-application/views/articles.php
DEBUG - 2013-12-03 09:10:55 --> Final output sent to browser
DEBUG - 2013-12-03 09:10:55 --> Total execution time: 0.0550
DEBUG - 2013-12-03 09:10:56 --> Config Class Initialized
DEBUG - 2013-12-03 09:10:56 --> Hooks Class Initialized
DEBUG - 2013-12-03 09:10:56 --> Utf8 Class Initialized
DEBUG - 2013-12-03 09:10:56 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 09:10:56 --> URI Class Initialized
DEBUG - 2013-12-03 09:10:56 --> Router Class Initialized
DEBUG - 2013-12-03 09:10:56 --> Output Class Initialized
DEBUG - 2013-12-03 09:10:56 --> Security Class Initialized
DEBUG - 2013-12-03 09:10:56 --> Input Class Initialized
DEBUG - 2013-12-03 09:10:56 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-03 09:10:56 --> Language Class Initialized
DEBUG - 2013-12-03 09:10:56 --> Loader Class Initialized
DEBUG - 2013-12-03 09:10:56 --> Helper loaded: form_helper
DEBUG - 2013-12-03 09:10:56 --> Helper loaded: url_helper
DEBUG - 2013-12-03 09:10:56 --> Helper loaded: html_helper
DEBUG - 2013-12-03 09:10:56 --> Database Driver Class Initialized
DEBUG - 2013-12-03 09:10:56 --> Session Class Initialized
DEBUG - 2013-12-03 09:10:56 --> Helper loaded: string_helper
DEBUG - 2013-12-03 09:10:56 --> Session routines successfully run
DEBUG - 2013-12-03 09:10:56 --> Form Validation Class Initialized
DEBUG - 2013-12-03 09:10:56 --> Controller Class Initialized
DEBUG - 2013-12-03 09:10:56 --> Model Class Initialized
DEBUG - 2013-12-03 09:10:56 --> Model Class Initialized
DEBUG - 2013-12-03 09:10:56 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-03 09:10:56 --> after session initialization................
INFO  - 2013-12-03 09:10:56 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-03 09:10:56 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-03 09:10:56 --> inside retrieving vacancy for member
INFO  - 2013-12-03 09:10:56 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-12-03 09:10:56 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-03 09:10:56 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-12-03 09:10:56 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-03 09:10:56 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-03 09:10:56 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-03 09:10:56 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-03 09:10:56 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-12-03 09:10:56 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-12-03 09:10:56 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
DEBUG - 2013-12-03 09:10:56 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-12-03 09:10:56 --> Final output sent to browser
DEBUG - 2013-12-03 09:10:56 --> Total execution time: 0.0820
DEBUG - 2013-12-03 09:10:57 --> Config Class Initialized
DEBUG - 2013-12-03 09:10:57 --> Hooks Class Initialized
DEBUG - 2013-12-03 09:10:57 --> Utf8 Class Initialized
DEBUG - 2013-12-03 09:10:57 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 09:10:57 --> URI Class Initialized
DEBUG - 2013-12-03 09:10:57 --> Router Class Initialized
DEBUG - 2013-12-03 09:10:57 --> Output Class Initialized
DEBUG - 2013-12-03 09:10:57 --> Security Class Initialized
DEBUG - 2013-12-03 09:10:57 --> Input Class Initialized
DEBUG - 2013-12-03 09:10:57 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-03 09:10:57 --> Language Class Initialized
DEBUG - 2013-12-03 09:10:57 --> Loader Class Initialized
DEBUG - 2013-12-03 09:10:57 --> Helper loaded: form_helper
DEBUG - 2013-12-03 09:10:57 --> Helper loaded: url_helper
DEBUG - 2013-12-03 09:10:57 --> Helper loaded: html_helper
DEBUG - 2013-12-03 09:10:57 --> Database Driver Class Initialized
DEBUG - 2013-12-03 09:10:57 --> Session Class Initialized
DEBUG - 2013-12-03 09:10:57 --> Helper loaded: string_helper
DEBUG - 2013-12-03 09:10:57 --> Session routines successfully run
DEBUG - 2013-12-03 09:10:57 --> Form Validation Class Initialized
DEBUG - 2013-12-03 09:10:57 --> Controller Class Initialized
DEBUG - 2013-12-03 09:10:57 --> Model Class Initialized
DEBUG - 2013-12-03 09:10:57 --> Model Class Initialized
DEBUG - 2013-12-03 09:10:57 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-03 09:10:57 --> after session initialization................
ERROR - 2013-12-03 09:10:57 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-12-03 09:10:57 --> Config Class Initialized
DEBUG - 2013-12-03 09:10:57 --> Hooks Class Initialized
DEBUG - 2013-12-03 09:10:57 --> Utf8 Class Initialized
DEBUG - 2013-12-03 09:10:57 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 09:10:57 --> URI Class Initialized
DEBUG - 2013-12-03 09:10:57 --> Router Class Initialized
ERROR - 2013-12-03 09:10:57 --> 404 Page Not Found --> css
DEBUG - 2013-12-03 14:37:01 --> Config Class Initialized
DEBUG - 2013-12-03 14:37:01 --> Hooks Class Initialized
DEBUG - 2013-12-03 14:37:01 --> Utf8 Class Initialized
DEBUG - 2013-12-03 14:37:01 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 14:37:01 --> URI Class Initialized
DEBUG - 2013-12-03 14:37:01 --> Router Class Initialized
DEBUG - 2013-12-03 14:37:01 --> Output Class Initialized
DEBUG - 2013-12-03 14:37:01 --> Security Class Initialized
DEBUG - 2013-12-03 14:37:01 --> Input Class Initialized
DEBUG - 2013-12-03 14:37:01 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-03 14:37:01 --> Language Class Initialized
DEBUG - 2013-12-03 14:37:02 --> Loader Class Initialized
DEBUG - 2013-12-03 14:37:02 --> Helper loaded: form_helper
DEBUG - 2013-12-03 14:37:02 --> Helper loaded: url_helper
DEBUG - 2013-12-03 14:37:02 --> Helper loaded: html_helper
DEBUG - 2013-12-03 14:37:02 --> Database Driver Class Initialized
DEBUG - 2013-12-03 14:37:02 --> Session Class Initialized
DEBUG - 2013-12-03 14:37:02 --> Helper loaded: string_helper
DEBUG - 2013-12-03 14:37:02 --> A session cookie was not found.
DEBUG - 2013-12-03 14:37:02 --> Session routines successfully run
DEBUG - 2013-12-03 14:37:02 --> Form Validation Class Initialized
DEBUG - 2013-12-03 14:37:02 --> Controller Class Initialized
DEBUG - 2013-12-03 14:37:02 --> Model Class Initialized
DEBUG - 2013-12-03 14:37:02 --> Model Class Initialized
DEBUG - 2013-12-03 14:37:02 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-03 14:37:02 --> after session initialization................
INFO  - 2013-12-03 14:37:02 --> after community pharmacy  has been clicked.................
INFO  - 2013-12-03 14:37:02 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-12-03 14:37:02 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-12-03 14:37:02 --> inside retrieving locations 
INFO  - 2013-12-03 14:37:02 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-12-03 14:37:02 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-12-03 14:37:02 --> Final output sent to browser
DEBUG - 2013-12-03 14:37:02 --> Total execution time: 0.3050
DEBUG - 2013-12-03 14:37:05 --> Config Class Initialized
DEBUG - 2013-12-03 14:37:05 --> Hooks Class Initialized
DEBUG - 2013-12-03 14:37:05 --> Utf8 Class Initialized
DEBUG - 2013-12-03 14:37:05 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 14:37:05 --> URI Class Initialized
DEBUG - 2013-12-03 14:37:05 --> Router Class Initialized
DEBUG - 2013-12-03 14:37:05 --> Output Class Initialized
DEBUG - 2013-12-03 14:37:05 --> Security Class Initialized
DEBUG - 2013-12-03 14:37:05 --> Input Class Initialized
DEBUG - 2013-12-03 14:37:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-03 14:37:05 --> Language Class Initialized
DEBUG - 2013-12-03 14:37:05 --> Loader Class Initialized
DEBUG - 2013-12-03 14:37:05 --> Helper loaded: form_helper
DEBUG - 2013-12-03 14:37:05 --> Helper loaded: url_helper
DEBUG - 2013-12-03 14:37:05 --> Helper loaded: html_helper
DEBUG - 2013-12-03 14:37:05 --> Database Driver Class Initialized
DEBUG - 2013-12-03 14:37:05 --> Session Class Initialized
DEBUG - 2013-12-03 14:37:05 --> Helper loaded: string_helper
DEBUG - 2013-12-03 14:37:05 --> Session routines successfully run
DEBUG - 2013-12-03 14:37:05 --> Form Validation Class Initialized
DEBUG - 2013-12-03 14:37:05 --> Controller Class Initialized
DEBUG - 2013-12-03 14:37:05 --> Model Class Initialized
DEBUG - 2013-12-03 14:37:05 --> Model Class Initialized
DEBUG - 2013-12-03 14:37:05 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-03 14:37:05 --> after session initialization................
INFO  - 2013-12-03 14:37:05 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-03 14:37:05 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-03 14:37:05 --> inside retrieving vacancy for member
INFO  - 2013-12-03 14:37:05 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-12-03 14:37:05 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-03 14:37:05 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-12-03 14:37:05 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-03 14:37:05 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-03 14:37:05 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-03 14:37:05 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-03 14:37:05 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-12-03 14:37:05 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-12-03 14:37:05 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
DEBUG - 2013-12-03 14:37:05 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-12-03 14:37:05 --> Final output sent to browser
DEBUG - 2013-12-03 14:37:05 --> Total execution time: 0.1000
DEBUG - 2013-12-03 14:37:05 --> Config Class Initialized
DEBUG - 2013-12-03 14:37:05 --> Hooks Class Initialized
DEBUG - 2013-12-03 14:37:05 --> Utf8 Class Initialized
DEBUG - 2013-12-03 14:37:05 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 14:37:05 --> URI Class Initialized
DEBUG - 2013-12-03 14:37:05 --> Router Class Initialized
DEBUG - 2013-12-03 14:37:05 --> Output Class Initialized
DEBUG - 2013-12-03 14:37:05 --> Security Class Initialized
DEBUG - 2013-12-03 14:37:05 --> Input Class Initialized
DEBUG - 2013-12-03 14:37:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-03 14:37:05 --> Language Class Initialized
DEBUG - 2013-12-03 14:37:05 --> Loader Class Initialized
DEBUG - 2013-12-03 14:37:05 --> Helper loaded: form_helper
DEBUG - 2013-12-03 14:37:05 --> Helper loaded: url_helper
DEBUG - 2013-12-03 14:37:05 --> Helper loaded: html_helper
DEBUG - 2013-12-03 14:37:05 --> Database Driver Class Initialized
DEBUG - 2013-12-03 14:37:05 --> Session Class Initialized
DEBUG - 2013-12-03 14:37:05 --> Helper loaded: string_helper
DEBUG - 2013-12-03 14:37:05 --> Session routines successfully run
DEBUG - 2013-12-03 14:37:05 --> Form Validation Class Initialized
DEBUG - 2013-12-03 14:37:05 --> Controller Class Initialized
DEBUG - 2013-12-03 14:37:05 --> Model Class Initialized
DEBUG - 2013-12-03 14:37:05 --> Model Class Initialized
DEBUG - 2013-12-03 14:37:05 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-03 14:37:05 --> after session initialization................
ERROR - 2013-12-03 14:37:05 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-12-03 14:37:05 --> Config Class Initialized
DEBUG - 2013-12-03 14:37:05 --> Hooks Class Initialized
DEBUG - 2013-12-03 14:37:05 --> Utf8 Class Initialized
DEBUG - 2013-12-03 14:37:05 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 14:37:05 --> URI Class Initialized
DEBUG - 2013-12-03 14:37:05 --> Router Class Initialized
ERROR - 2013-12-03 14:37:05 --> 404 Page Not Found --> css
DEBUG - 2013-12-03 15:16:33 --> Config Class Initialized
DEBUG - 2013-12-03 15:16:33 --> Hooks Class Initialized
DEBUG - 2013-12-03 15:16:33 --> Utf8 Class Initialized
DEBUG - 2013-12-03 15:16:33 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 15:16:33 --> URI Class Initialized
DEBUG - 2013-12-03 15:16:33 --> Router Class Initialized
DEBUG - 2013-12-03 15:16:33 --> Output Class Initialized
DEBUG - 2013-12-03 15:16:33 --> Security Class Initialized
DEBUG - 2013-12-03 15:16:33 --> Input Class Initialized
DEBUG - 2013-12-03 15:16:33 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-03 15:16:33 --> Language Class Initialized
DEBUG - 2013-12-03 15:16:33 --> Loader Class Initialized
DEBUG - 2013-12-03 15:16:33 --> Helper loaded: form_helper
DEBUG - 2013-12-03 15:16:33 --> Helper loaded: url_helper
DEBUG - 2013-12-03 15:16:33 --> Helper loaded: html_helper
DEBUG - 2013-12-03 15:16:33 --> Database Driver Class Initialized
DEBUG - 2013-12-03 15:16:33 --> Session Class Initialized
DEBUG - 2013-12-03 15:16:33 --> Helper loaded: string_helper
DEBUG - 2013-12-03 15:16:33 --> Session routines successfully run
DEBUG - 2013-12-03 15:16:33 --> Form Validation Class Initialized
DEBUG - 2013-12-03 15:16:33 --> Controller Class Initialized
DEBUG - 2013-12-03 15:16:33 --> Model Class Initialized
DEBUG - 2013-12-03 15:16:33 --> Model Class Initialized
DEBUG - 2013-12-03 15:16:33 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-03 15:16:33 --> after session initialization................
INFO  - 2013-12-03 15:16:33 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-03 15:16:33 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-03 15:16:33 --> inside retrieving vacancy for member
INFO  - 2013-12-03 15:16:33 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-12-03 15:16:33 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-03 15:16:33 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-12-03 15:16:33 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-03 15:16:33 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-03 15:16:33 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-03 15:16:33 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-03 15:16:33 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-12-03 15:16:33 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-12-03 15:16:33 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
DEBUG - 2013-12-03 15:16:33 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-12-03 15:16:33 --> Final output sent to browser
DEBUG - 2013-12-03 15:16:33 --> Total execution time: 0.1190
DEBUG - 2013-12-03 15:16:33 --> Config Class Initialized
DEBUG - 2013-12-03 15:16:33 --> Hooks Class Initialized
DEBUG - 2013-12-03 15:16:33 --> Utf8 Class Initialized
DEBUG - 2013-12-03 15:16:33 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 15:16:33 --> URI Class Initialized
DEBUG - 2013-12-03 15:16:33 --> Router Class Initialized
ERROR - 2013-12-03 15:16:33 --> 404 Page Not Found --> sys_admin/src
DEBUG - 2013-12-03 15:16:34 --> Config Class Initialized
DEBUG - 2013-12-03 15:16:34 --> Hooks Class Initialized
DEBUG - 2013-12-03 15:16:34 --> Utf8 Class Initialized
DEBUG - 2013-12-03 15:16:34 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 15:16:34 --> URI Class Initialized
DEBUG - 2013-12-03 15:16:34 --> Router Class Initialized
ERROR - 2013-12-03 15:16:34 --> 404 Page Not Found --> css
DEBUG - 2013-12-03 15:16:42 --> Config Class Initialized
DEBUG - 2013-12-03 15:16:42 --> Hooks Class Initialized
DEBUG - 2013-12-03 15:16:42 --> Utf8 Class Initialized
DEBUG - 2013-12-03 15:16:42 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 15:16:42 --> URI Class Initialized
DEBUG - 2013-12-03 15:16:42 --> Router Class Initialized
DEBUG - 2013-12-03 15:16:42 --> Output Class Initialized
DEBUG - 2013-12-03 15:16:42 --> Security Class Initialized
DEBUG - 2013-12-03 15:16:42 --> Input Class Initialized
DEBUG - 2013-12-03 15:16:42 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-03 15:16:42 --> Language Class Initialized
DEBUG - 2013-12-03 15:16:42 --> Loader Class Initialized
DEBUG - 2013-12-03 15:16:42 --> Helper loaded: form_helper
DEBUG - 2013-12-03 15:16:42 --> Helper loaded: url_helper
DEBUG - 2013-12-03 15:16:42 --> Helper loaded: html_helper
DEBUG - 2013-12-03 15:16:42 --> Database Driver Class Initialized
DEBUG - 2013-12-03 15:16:42 --> Session Class Initialized
DEBUG - 2013-12-03 15:16:42 --> Helper loaded: string_helper
DEBUG - 2013-12-03 15:16:42 --> Session routines successfully run
DEBUG - 2013-12-03 15:16:43 --> Form Validation Class Initialized
DEBUG - 2013-12-03 15:16:43 --> Controller Class Initialized
DEBUG - 2013-12-03 15:16:43 --> Model Class Initialized
DEBUG - 2013-12-03 15:16:43 --> Model Class Initialized
DEBUG - 2013-12-03 15:16:43 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-03 15:16:43 --> after session initialization................
INFO  - 2013-12-03 15:16:43 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 1 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-03 15:16:43 --> Final output sent to browser
DEBUG - 2013-12-03 15:16:43 --> Total execution time: 0.1430
DEBUG - 2013-12-03 15:19:51 --> Config Class Initialized
DEBUG - 2013-12-03 15:19:51 --> Hooks Class Initialized
DEBUG - 2013-12-03 15:19:51 --> Utf8 Class Initialized
DEBUG - 2013-12-03 15:19:51 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 15:19:51 --> URI Class Initialized
DEBUG - 2013-12-03 15:19:51 --> Router Class Initialized
DEBUG - 2013-12-03 15:19:51 --> Output Class Initialized
DEBUG - 2013-12-03 15:19:51 --> Security Class Initialized
DEBUG - 2013-12-03 15:19:51 --> Input Class Initialized
DEBUG - 2013-12-03 15:19:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-03 15:19:51 --> Language Class Initialized
DEBUG - 2013-12-03 15:19:51 --> Loader Class Initialized
DEBUG - 2013-12-03 15:19:51 --> Helper loaded: form_helper
DEBUG - 2013-12-03 15:19:51 --> Helper loaded: url_helper
DEBUG - 2013-12-03 15:19:51 --> Helper loaded: html_helper
DEBUG - 2013-12-03 15:19:51 --> Database Driver Class Initialized
DEBUG - 2013-12-03 15:19:51 --> Session Class Initialized
DEBUG - 2013-12-03 15:19:51 --> Helper loaded: string_helper
DEBUG - 2013-12-03 15:19:51 --> Session routines successfully run
DEBUG - 2013-12-03 15:19:51 --> Form Validation Class Initialized
DEBUG - 2013-12-03 15:19:51 --> Controller Class Initialized
DEBUG - 2013-12-03 15:19:51 --> Model Class Initialized
DEBUG - 2013-12-03 15:19:51 --> Model Class Initialized
DEBUG - 2013-12-03 15:19:51 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-03 15:19:51 --> after session initialization................
INFO  - 2013-12-03 15:19:51 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-03 15:19:51 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-03 15:19:51 --> inside retrieving vacancy for member
INFO  - 2013-12-03 15:19:51 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-12-03 15:19:51 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-03 15:19:51 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-12-03 15:19:51 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-03 15:19:51 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-03 15:19:51 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-03 15:19:51 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-03 15:19:51 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-12-03 15:19:51 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-12-03 15:19:51 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
DEBUG - 2013-12-03 15:19:51 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-12-03 15:19:51 --> Final output sent to browser
DEBUG - 2013-12-03 15:19:51 --> Total execution time: 0.0710
DEBUG - 2013-12-03 15:19:51 --> Config Class Initialized
DEBUG - 2013-12-03 15:19:51 --> Hooks Class Initialized
DEBUG - 2013-12-03 15:19:51 --> Utf8 Class Initialized
DEBUG - 2013-12-03 15:19:51 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 15:19:52 --> URI Class Initialized
DEBUG - 2013-12-03 15:19:52 --> Router Class Initialized
ERROR - 2013-12-03 15:19:52 --> 404 Page Not Found --> sys_admin/src
DEBUG - 2013-12-03 15:19:52 --> Config Class Initialized
DEBUG - 2013-12-03 15:19:52 --> Hooks Class Initialized
DEBUG - 2013-12-03 15:19:52 --> Utf8 Class Initialized
DEBUG - 2013-12-03 15:19:52 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 15:19:52 --> URI Class Initialized
DEBUG - 2013-12-03 15:19:52 --> Router Class Initialized
ERROR - 2013-12-03 15:19:52 --> 404 Page Not Found --> css
DEBUG - 2013-12-03 15:19:53 --> Config Class Initialized
DEBUG - 2013-12-03 15:19:53 --> Hooks Class Initialized
DEBUG - 2013-12-03 15:19:53 --> Utf8 Class Initialized
DEBUG - 2013-12-03 15:19:53 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 15:19:53 --> URI Class Initialized
DEBUG - 2013-12-03 15:19:53 --> Router Class Initialized
DEBUG - 2013-12-03 15:19:53 --> Output Class Initialized
DEBUG - 2013-12-03 15:19:53 --> Security Class Initialized
DEBUG - 2013-12-03 15:19:53 --> Input Class Initialized
DEBUG - 2013-12-03 15:19:53 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-03 15:19:53 --> Language Class Initialized
DEBUG - 2013-12-03 15:19:53 --> Loader Class Initialized
DEBUG - 2013-12-03 15:19:53 --> Helper loaded: form_helper
DEBUG - 2013-12-03 15:19:53 --> Helper loaded: url_helper
DEBUG - 2013-12-03 15:19:53 --> Helper loaded: html_helper
DEBUG - 2013-12-03 15:19:53 --> Database Driver Class Initialized
DEBUG - 2013-12-03 15:19:53 --> Session Class Initialized
DEBUG - 2013-12-03 15:19:53 --> Helper loaded: string_helper
DEBUG - 2013-12-03 15:19:53 --> Session routines successfully run
DEBUG - 2013-12-03 15:19:53 --> Form Validation Class Initialized
DEBUG - 2013-12-03 15:19:53 --> Controller Class Initialized
DEBUG - 2013-12-03 15:19:53 --> Model Class Initialized
DEBUG - 2013-12-03 15:19:53 --> Model Class Initialized
DEBUG - 2013-12-03 15:19:53 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-03 15:19:53 --> after session initialization................
INFO  - 2013-12-03 15:19:53 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-03 15:19:53 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-03 15:19:53 --> inside retrieving vacancy for member
INFO  - 2013-12-03 15:19:53 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-12-03 15:19:53 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-03 15:19:53 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-12-03 15:19:53 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-03 15:19:53 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-03 15:19:53 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-03 15:19:53 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-03 15:19:53 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-12-03 15:19:53 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-12-03 15:19:53 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
DEBUG - 2013-12-03 15:19:53 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-12-03 15:19:53 --> Final output sent to browser
DEBUG - 2013-12-03 15:19:53 --> Total execution time: 0.0720
DEBUG - 2013-12-03 15:19:53 --> Config Class Initialized
DEBUG - 2013-12-03 15:19:53 --> Hooks Class Initialized
DEBUG - 2013-12-03 15:19:53 --> Utf8 Class Initialized
DEBUG - 2013-12-03 15:19:53 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 15:19:53 --> URI Class Initialized
DEBUG - 2013-12-03 15:19:53 --> Router Class Initialized
ERROR - 2013-12-03 15:19:53 --> 404 Page Not Found --> sys_admin/src
DEBUG - 2013-12-03 15:19:53 --> Config Class Initialized
DEBUG - 2013-12-03 15:19:53 --> Hooks Class Initialized
DEBUG - 2013-12-03 15:19:53 --> Utf8 Class Initialized
DEBUG - 2013-12-03 15:19:53 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 15:19:53 --> URI Class Initialized
DEBUG - 2013-12-03 15:19:53 --> Router Class Initialized
ERROR - 2013-12-03 15:19:53 --> 404 Page Not Found --> css
DEBUG - 2013-12-03 15:19:57 --> Config Class Initialized
DEBUG - 2013-12-03 15:19:57 --> Hooks Class Initialized
DEBUG - 2013-12-03 15:19:57 --> Utf8 Class Initialized
DEBUG - 2013-12-03 15:19:57 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 15:19:57 --> URI Class Initialized
DEBUG - 2013-12-03 15:19:57 --> Router Class Initialized
DEBUG - 2013-12-03 15:19:57 --> Output Class Initialized
DEBUG - 2013-12-03 15:19:57 --> Security Class Initialized
DEBUG - 2013-12-03 15:19:57 --> Input Class Initialized
DEBUG - 2013-12-03 15:19:57 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-03 15:19:57 --> Language Class Initialized
DEBUG - 2013-12-03 15:19:57 --> Loader Class Initialized
DEBUG - 2013-12-03 15:19:57 --> Helper loaded: form_helper
DEBUG - 2013-12-03 15:19:57 --> Helper loaded: url_helper
DEBUG - 2013-12-03 15:19:57 --> Helper loaded: html_helper
DEBUG - 2013-12-03 15:19:57 --> Database Driver Class Initialized
DEBUG - 2013-12-03 15:19:57 --> Session Class Initialized
DEBUG - 2013-12-03 15:19:57 --> Helper loaded: string_helper
DEBUG - 2013-12-03 15:19:57 --> Session routines successfully run
DEBUG - 2013-12-03 15:19:57 --> Form Validation Class Initialized
DEBUG - 2013-12-03 15:19:57 --> Controller Class Initialized
DEBUG - 2013-12-03 15:19:57 --> Model Class Initialized
DEBUG - 2013-12-03 15:19:57 --> Model Class Initialized
DEBUG - 2013-12-03 15:19:57 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-03 15:19:57 --> after session initialization................
INFO  - 2013-12-03 15:19:57 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 1 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-03 15:19:57 --> Final output sent to browser
DEBUG - 2013-12-03 15:19:57 --> Total execution time: 0.0960
DEBUG - 2013-12-03 15:23:11 --> Config Class Initialized
DEBUG - 2013-12-03 15:23:11 --> Hooks Class Initialized
DEBUG - 2013-12-03 15:23:11 --> Utf8 Class Initialized
DEBUG - 2013-12-03 15:23:11 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 15:23:11 --> URI Class Initialized
DEBUG - 2013-12-03 15:23:11 --> Router Class Initialized
DEBUG - 2013-12-03 15:23:11 --> Output Class Initialized
DEBUG - 2013-12-03 15:23:11 --> Security Class Initialized
DEBUG - 2013-12-03 15:23:11 --> Input Class Initialized
DEBUG - 2013-12-03 15:23:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-03 15:23:11 --> Language Class Initialized
DEBUG - 2013-12-03 15:23:11 --> Loader Class Initialized
DEBUG - 2013-12-03 15:23:11 --> Helper loaded: form_helper
DEBUG - 2013-12-03 15:23:11 --> Helper loaded: url_helper
DEBUG - 2013-12-03 15:23:11 --> Helper loaded: html_helper
DEBUG - 2013-12-03 15:23:11 --> Database Driver Class Initialized
DEBUG - 2013-12-03 15:23:11 --> Session Class Initialized
DEBUG - 2013-12-03 15:23:11 --> Helper loaded: string_helper
DEBUG - 2013-12-03 15:23:11 --> Session routines successfully run
DEBUG - 2013-12-03 15:23:11 --> Form Validation Class Initialized
DEBUG - 2013-12-03 15:23:11 --> Controller Class Initialized
DEBUG - 2013-12-03 15:23:11 --> Model Class Initialized
DEBUG - 2013-12-03 15:23:11 --> Model Class Initialized
DEBUG - 2013-12-03 15:23:11 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-03 15:23:11 --> after session initialization................
INFO  - 2013-12-03 15:23:11 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-03 15:23:11 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-03 15:23:11 --> inside retrieving vacancy for member
INFO  - 2013-12-03 15:23:11 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-12-03 15:23:11 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-03 15:23:11 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-12-03 15:23:11 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-03 15:23:11 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-03 15:23:11 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-03 15:23:11 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-03 15:23:11 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-12-03 15:23:11 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-12-03 15:23:11 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
DEBUG - 2013-12-03 15:23:11 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-12-03 15:23:11 --> Final output sent to browser
DEBUG - 2013-12-03 15:23:11 --> Total execution time: 0.0880
DEBUG - 2013-12-03 15:23:11 --> Config Class Initialized
DEBUG - 2013-12-03 15:23:11 --> Hooks Class Initialized
DEBUG - 2013-12-03 15:23:11 --> Utf8 Class Initialized
DEBUG - 2013-12-03 15:23:11 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 15:23:11 --> URI Class Initialized
DEBUG - 2013-12-03 15:23:11 --> Router Class Initialized
ERROR - 2013-12-03 15:23:11 --> 404 Page Not Found --> sys_admin/src
DEBUG - 2013-12-03 15:23:11 --> Config Class Initialized
DEBUG - 2013-12-03 15:23:11 --> Hooks Class Initialized
DEBUG - 2013-12-03 15:23:11 --> Utf8 Class Initialized
DEBUG - 2013-12-03 15:23:11 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 15:23:11 --> URI Class Initialized
DEBUG - 2013-12-03 15:23:11 --> Router Class Initialized
ERROR - 2013-12-03 15:23:11 --> 404 Page Not Found --> css
DEBUG - 2013-12-03 15:23:13 --> Config Class Initialized
DEBUG - 2013-12-03 15:23:13 --> Hooks Class Initialized
DEBUG - 2013-12-03 15:23:13 --> Utf8 Class Initialized
DEBUG - 2013-12-03 15:23:13 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 15:23:13 --> URI Class Initialized
DEBUG - 2013-12-03 15:23:13 --> Router Class Initialized
DEBUG - 2013-12-03 15:23:13 --> Output Class Initialized
DEBUG - 2013-12-03 15:23:13 --> Security Class Initialized
DEBUG - 2013-12-03 15:23:13 --> Input Class Initialized
DEBUG - 2013-12-03 15:23:13 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-03 15:23:13 --> Language Class Initialized
DEBUG - 2013-12-03 15:23:13 --> Loader Class Initialized
DEBUG - 2013-12-03 15:23:13 --> Helper loaded: form_helper
DEBUG - 2013-12-03 15:23:13 --> Helper loaded: url_helper
DEBUG - 2013-12-03 15:23:13 --> Helper loaded: html_helper
DEBUG - 2013-12-03 15:23:13 --> Database Driver Class Initialized
DEBUG - 2013-12-03 15:23:13 --> Session Class Initialized
DEBUG - 2013-12-03 15:23:13 --> Helper loaded: string_helper
DEBUG - 2013-12-03 15:23:13 --> Session routines successfully run
DEBUG - 2013-12-03 15:23:13 --> Form Validation Class Initialized
DEBUG - 2013-12-03 15:23:13 --> Controller Class Initialized
DEBUG - 2013-12-03 15:23:13 --> Model Class Initialized
DEBUG - 2013-12-03 15:23:13 --> Model Class Initialized
DEBUG - 2013-12-03 15:23:13 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-03 15:23:13 --> after session initialization................
INFO  - 2013-12-03 15:23:13 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 1 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-03 15:23:13 --> Final output sent to browser
DEBUG - 2013-12-03 15:23:13 --> Total execution time: 0.0500
DEBUG - 2013-12-03 15:23:35 --> Config Class Initialized
DEBUG - 2013-12-03 15:23:35 --> Hooks Class Initialized
DEBUG - 2013-12-03 15:23:35 --> Utf8 Class Initialized
DEBUG - 2013-12-03 15:23:35 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 15:23:35 --> URI Class Initialized
DEBUG - 2013-12-03 15:23:35 --> Router Class Initialized
DEBUG - 2013-12-03 15:23:35 --> Output Class Initialized
DEBUG - 2013-12-03 15:23:35 --> Security Class Initialized
DEBUG - 2013-12-03 15:23:35 --> Input Class Initialized
DEBUG - 2013-12-03 15:23:35 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-03 15:23:35 --> Language Class Initialized
DEBUG - 2013-12-03 15:23:35 --> Loader Class Initialized
DEBUG - 2013-12-03 15:23:35 --> Helper loaded: form_helper
DEBUG - 2013-12-03 15:23:35 --> Helper loaded: url_helper
DEBUG - 2013-12-03 15:23:35 --> Helper loaded: html_helper
DEBUG - 2013-12-03 15:23:35 --> Database Driver Class Initialized
DEBUG - 2013-12-03 15:23:35 --> Session Class Initialized
DEBUG - 2013-12-03 15:23:35 --> Helper loaded: string_helper
DEBUG - 2013-12-03 15:23:35 --> Session routines successfully run
DEBUG - 2013-12-03 15:23:35 --> Form Validation Class Initialized
DEBUG - 2013-12-03 15:23:35 --> Controller Class Initialized
DEBUG - 2013-12-03 15:23:35 --> Model Class Initialized
DEBUG - 2013-12-03 15:23:35 --> Model Class Initialized
DEBUG - 2013-12-03 15:23:35 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-03 15:23:35 --> after session initialization................
INFO  - 2013-12-03 15:23:35 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-03 15:23:35 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-03 15:23:35 --> inside retrieving vacancy for member
INFO  - 2013-12-03 15:23:35 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-12-03 15:23:35 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-03 15:23:35 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-12-03 15:23:35 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-03 15:23:35 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-03 15:23:35 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-03 15:23:35 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-03 15:23:35 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-12-03 15:23:35 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-12-03 15:23:35 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
DEBUG - 2013-12-03 15:23:35 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-12-03 15:23:35 --> Final output sent to browser
DEBUG - 2013-12-03 15:23:35 --> Total execution time: 0.0630
DEBUG - 2013-12-03 15:23:35 --> Config Class Initialized
DEBUG - 2013-12-03 15:23:35 --> Hooks Class Initialized
DEBUG - 2013-12-03 15:23:35 --> Utf8 Class Initialized
DEBUG - 2013-12-03 15:23:35 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 15:23:35 --> URI Class Initialized
DEBUG - 2013-12-03 15:23:35 --> Router Class Initialized
ERROR - 2013-12-03 15:23:35 --> 404 Page Not Found --> sys_admin/src
DEBUG - 2013-12-03 15:23:35 --> Config Class Initialized
DEBUG - 2013-12-03 15:23:35 --> Hooks Class Initialized
DEBUG - 2013-12-03 15:23:35 --> Utf8 Class Initialized
DEBUG - 2013-12-03 15:23:35 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 15:23:35 --> URI Class Initialized
DEBUG - 2013-12-03 15:23:35 --> Router Class Initialized
ERROR - 2013-12-03 15:23:35 --> 404 Page Not Found --> css
DEBUG - 2013-12-03 15:23:38 --> Config Class Initialized
DEBUG - 2013-12-03 15:23:38 --> Hooks Class Initialized
DEBUG - 2013-12-03 15:23:38 --> Utf8 Class Initialized
DEBUG - 2013-12-03 15:23:38 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 15:23:38 --> URI Class Initialized
DEBUG - 2013-12-03 15:23:38 --> Router Class Initialized
DEBUG - 2013-12-03 15:23:38 --> Output Class Initialized
DEBUG - 2013-12-03 15:23:38 --> Security Class Initialized
DEBUG - 2013-12-03 15:23:38 --> Input Class Initialized
DEBUG - 2013-12-03 15:23:38 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-03 15:23:38 --> Language Class Initialized
DEBUG - 2013-12-03 15:23:38 --> Loader Class Initialized
DEBUG - 2013-12-03 15:23:38 --> Helper loaded: form_helper
DEBUG - 2013-12-03 15:23:38 --> Helper loaded: url_helper
DEBUG - 2013-12-03 15:23:38 --> Helper loaded: html_helper
DEBUG - 2013-12-03 15:23:38 --> Database Driver Class Initialized
DEBUG - 2013-12-03 15:23:38 --> Session Class Initialized
DEBUG - 2013-12-03 15:23:38 --> Helper loaded: string_helper
DEBUG - 2013-12-03 15:23:38 --> Session routines successfully run
DEBUG - 2013-12-03 15:23:38 --> Form Validation Class Initialized
DEBUG - 2013-12-03 15:23:38 --> Controller Class Initialized
DEBUG - 2013-12-03 15:23:38 --> Model Class Initialized
DEBUG - 2013-12-03 15:23:38 --> Model Class Initialized
DEBUG - 2013-12-03 15:23:38 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-03 15:23:38 --> after session initialization................
INFO  - 2013-12-03 15:23:38 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 1 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-03 15:23:38 --> Final output sent to browser
DEBUG - 2013-12-03 15:23:38 --> Total execution time: 0.0470
DEBUG - 2013-12-03 15:23:52 --> Config Class Initialized
DEBUG - 2013-12-03 15:23:52 --> Hooks Class Initialized
DEBUG - 2013-12-03 15:23:52 --> Utf8 Class Initialized
DEBUG - 2013-12-03 15:23:52 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 15:23:52 --> URI Class Initialized
DEBUG - 2013-12-03 15:23:52 --> Router Class Initialized
DEBUG - 2013-12-03 15:23:52 --> Output Class Initialized
DEBUG - 2013-12-03 15:23:52 --> Security Class Initialized
DEBUG - 2013-12-03 15:23:52 --> Input Class Initialized
DEBUG - 2013-12-03 15:23:52 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-03 15:23:52 --> Language Class Initialized
DEBUG - 2013-12-03 15:23:52 --> Loader Class Initialized
DEBUG - 2013-12-03 15:23:52 --> Helper loaded: form_helper
DEBUG - 2013-12-03 15:23:52 --> Helper loaded: url_helper
DEBUG - 2013-12-03 15:23:52 --> Helper loaded: html_helper
DEBUG - 2013-12-03 15:23:52 --> Database Driver Class Initialized
DEBUG - 2013-12-03 15:23:52 --> Session Class Initialized
DEBUG - 2013-12-03 15:23:52 --> Helper loaded: string_helper
DEBUG - 2013-12-03 15:23:52 --> Session routines successfully run
DEBUG - 2013-12-03 15:23:52 --> Form Validation Class Initialized
DEBUG - 2013-12-03 15:23:52 --> Controller Class Initialized
DEBUG - 2013-12-03 15:23:52 --> Model Class Initialized
DEBUG - 2013-12-03 15:23:52 --> Model Class Initialized
DEBUG - 2013-12-03 15:23:52 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-03 15:23:52 --> after session initialization................
INFO  - 2013-12-03 15:23:52 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '486'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-03 15:23:52 --> inside retrieving comments member id and drug id is 486
INFO  - 2013-12-03 15:23:52 --> 10==============================0
INFO  - 2013-12-03 15:23:52 --> SELECT dc.id_drugcomment as id, dc.comment, dc.time_created, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 486
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-03 15:23:52 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 486
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-03 15:23:52 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '486'
ORDER BY `a`.`time_created`
INFO  - 2013-12-03 15:23:52 --> inside retrieving pharmacy for drug id is 486
INFO  - 2013-12-03 15:23:52 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 486
ORDER BY `p`.`id_pharmacy`
LIMIT 15
INFO  - 2013-12-03 15:23:52 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '486'
ORDER BY `a`.`time_created`
INFO  - 2013-12-03 15:23:52 --> inside retrieving comments member type id and drug id is 486
INFO  - 2013-12-03 15:23:52 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 486
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
DEBUG - 2013-12-03 15:23:52 --> Final output sent to browser
DEBUG - 2013-12-03 15:23:52 --> Total execution time: 0.1440
DEBUG - 2013-12-03 15:23:54 --> Config Class Initialized
DEBUG - 2013-12-03 15:23:54 --> Hooks Class Initialized
DEBUG - 2013-12-03 15:23:54 --> Utf8 Class Initialized
DEBUG - 2013-12-03 15:23:54 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 15:23:54 --> URI Class Initialized
DEBUG - 2013-12-03 15:23:54 --> Router Class Initialized
DEBUG - 2013-12-03 15:23:54 --> Output Class Initialized
DEBUG - 2013-12-03 15:23:54 --> Security Class Initialized
DEBUG - 2013-12-03 15:23:54 --> Input Class Initialized
DEBUG - 2013-12-03 15:23:54 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-03 15:23:54 --> Language Class Initialized
DEBUG - 2013-12-03 15:23:54 --> Loader Class Initialized
DEBUG - 2013-12-03 15:23:54 --> Helper loaded: form_helper
DEBUG - 2013-12-03 15:23:54 --> Helper loaded: url_helper
DEBUG - 2013-12-03 15:23:54 --> Helper loaded: html_helper
DEBUG - 2013-12-03 15:23:54 --> Database Driver Class Initialized
DEBUG - 2013-12-03 15:23:54 --> Session Class Initialized
DEBUG - 2013-12-03 15:23:54 --> Helper loaded: string_helper
DEBUG - 2013-12-03 15:23:54 --> Session routines successfully run
DEBUG - 2013-12-03 15:23:54 --> Form Validation Class Initialized
DEBUG - 2013-12-03 15:23:54 --> Controller Class Initialized
DEBUG - 2013-12-03 15:23:54 --> Model Class Initialized
DEBUG - 2013-12-03 15:23:54 --> Model Class Initialized
DEBUG - 2013-12-03 15:23:54 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-03 15:23:54 --> after session initialization................
INFO  - 2013-12-03 15:23:54 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 486 and d.drugclassid_drugclass = 3
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-03 15:23:54 --> Final output sent to browser
DEBUG - 2013-12-03 15:23:54 --> Total execution time: 0.0620
DEBUG - 2013-12-03 15:24:02 --> Config Class Initialized
DEBUG - 2013-12-03 15:24:02 --> Hooks Class Initialized
DEBUG - 2013-12-03 15:24:02 --> Utf8 Class Initialized
DEBUG - 2013-12-03 15:24:02 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 15:24:02 --> URI Class Initialized
DEBUG - 2013-12-03 15:24:02 --> Router Class Initialized
DEBUG - 2013-12-03 15:24:02 --> Output Class Initialized
DEBUG - 2013-12-03 15:24:02 --> Security Class Initialized
DEBUG - 2013-12-03 15:24:02 --> Input Class Initialized
DEBUG - 2013-12-03 15:24:02 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-03 15:24:02 --> Language Class Initialized
DEBUG - 2013-12-03 15:24:02 --> Loader Class Initialized
DEBUG - 2013-12-03 15:24:02 --> Helper loaded: form_helper
DEBUG - 2013-12-03 15:24:02 --> Helper loaded: url_helper
DEBUG - 2013-12-03 15:24:02 --> Helper loaded: html_helper
DEBUG - 2013-12-03 15:24:02 --> Database Driver Class Initialized
DEBUG - 2013-12-03 15:24:02 --> Session Class Initialized
DEBUG - 2013-12-03 15:24:02 --> Helper loaded: string_helper
DEBUG - 2013-12-03 15:24:02 --> Session routines successfully run
DEBUG - 2013-12-03 15:24:02 --> Form Validation Class Initialized
DEBUG - 2013-12-03 15:24:02 --> Controller Class Initialized
DEBUG - 2013-12-03 15:24:02 --> Model Class Initialized
DEBUG - 2013-12-03 15:24:02 --> Model Class Initialized
DEBUG - 2013-12-03 15:24:02 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-03 15:24:02 --> after session initialization................
INFO  - 2013-12-03 15:24:02 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 486 and d.drugclassid_drugclass = 3 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-03 15:24:02 --> Final output sent to browser
DEBUG - 2013-12-03 15:24:02 --> Total execution time: 0.0530
DEBUG - 2013-12-03 15:24:03 --> Config Class Initialized
DEBUG - 2013-12-03 15:24:03 --> Hooks Class Initialized
DEBUG - 2013-12-03 15:24:03 --> Utf8 Class Initialized
DEBUG - 2013-12-03 15:24:03 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 15:24:03 --> URI Class Initialized
DEBUG - 2013-12-03 15:24:03 --> Router Class Initialized
DEBUG - 2013-12-03 15:24:03 --> Output Class Initialized
DEBUG - 2013-12-03 15:24:03 --> Security Class Initialized
DEBUG - 2013-12-03 15:24:03 --> Input Class Initialized
DEBUG - 2013-12-03 15:24:03 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-03 15:24:03 --> Language Class Initialized
DEBUG - 2013-12-03 15:24:03 --> Loader Class Initialized
DEBUG - 2013-12-03 15:24:03 --> Helper loaded: form_helper
DEBUG - 2013-12-03 15:24:03 --> Helper loaded: url_helper
DEBUG - 2013-12-03 15:24:03 --> Helper loaded: html_helper
DEBUG - 2013-12-03 15:24:03 --> Database Driver Class Initialized
DEBUG - 2013-12-03 15:24:03 --> Session Class Initialized
DEBUG - 2013-12-03 15:24:03 --> Helper loaded: string_helper
DEBUG - 2013-12-03 15:24:03 --> Session routines successfully run
DEBUG - 2013-12-03 15:24:03 --> Form Validation Class Initialized
DEBUG - 2013-12-03 15:24:03 --> Controller Class Initialized
DEBUG - 2013-12-03 15:24:03 --> Model Class Initialized
DEBUG - 2013-12-03 15:24:03 --> Model Class Initialized
DEBUG - 2013-12-03 15:24:03 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-03 15:24:03 --> after session initialization................
INFO  - 2013-12-03 15:24:03 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 486 and d.drugclassid_drugclass = 3
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-03 15:24:03 --> Final output sent to browser
DEBUG - 2013-12-03 15:24:03 --> Total execution time: 0.0640
DEBUG - 2013-12-03 15:24:06 --> Config Class Initialized
DEBUG - 2013-12-03 15:24:06 --> Hooks Class Initialized
DEBUG - 2013-12-03 15:24:06 --> Utf8 Class Initialized
DEBUG - 2013-12-03 15:24:06 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 15:24:06 --> URI Class Initialized
DEBUG - 2013-12-03 15:24:06 --> Router Class Initialized
DEBUG - 2013-12-03 15:24:06 --> Output Class Initialized
DEBUG - 2013-12-03 15:24:06 --> Security Class Initialized
DEBUG - 2013-12-03 15:24:06 --> Input Class Initialized
DEBUG - 2013-12-03 15:24:06 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-03 15:24:06 --> Language Class Initialized
DEBUG - 2013-12-03 15:24:06 --> Loader Class Initialized
DEBUG - 2013-12-03 15:24:06 --> Helper loaded: form_helper
DEBUG - 2013-12-03 15:24:06 --> Helper loaded: url_helper
DEBUG - 2013-12-03 15:24:06 --> Helper loaded: html_helper
DEBUG - 2013-12-03 15:24:06 --> Database Driver Class Initialized
DEBUG - 2013-12-03 15:24:06 --> Session Class Initialized
DEBUG - 2013-12-03 15:24:06 --> Helper loaded: string_helper
DEBUG - 2013-12-03 15:24:06 --> Session routines successfully run
DEBUG - 2013-12-03 15:24:06 --> Form Validation Class Initialized
DEBUG - 2013-12-03 15:24:06 --> Controller Class Initialized
DEBUG - 2013-12-03 15:24:06 --> Model Class Initialized
DEBUG - 2013-12-03 15:24:06 --> Model Class Initialized
DEBUG - 2013-12-03 15:24:06 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-03 15:24:06 --> after session initialization................
INFO  - 2013-12-03 15:24:06 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 486 and d.drugcategoryid_drugcategory = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-03 15:24:06 --> Final output sent to browser
DEBUG - 2013-12-03 15:24:06 --> Total execution time: 0.0740
DEBUG - 2013-12-03 15:24:09 --> Config Class Initialized
DEBUG - 2013-12-03 15:24:09 --> Hooks Class Initialized
DEBUG - 2013-12-03 15:24:09 --> Utf8 Class Initialized
DEBUG - 2013-12-03 15:24:09 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 15:24:09 --> URI Class Initialized
DEBUG - 2013-12-03 15:24:09 --> Router Class Initialized
DEBUG - 2013-12-03 15:24:09 --> Output Class Initialized
DEBUG - 2013-12-03 15:24:09 --> Security Class Initialized
DEBUG - 2013-12-03 15:24:09 --> Input Class Initialized
DEBUG - 2013-12-03 15:24:09 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-03 15:24:09 --> Language Class Initialized
DEBUG - 2013-12-03 15:24:09 --> Loader Class Initialized
DEBUG - 2013-12-03 15:24:09 --> Helper loaded: form_helper
DEBUG - 2013-12-03 15:24:09 --> Helper loaded: url_helper
DEBUG - 2013-12-03 15:24:09 --> Helper loaded: html_helper
DEBUG - 2013-12-03 15:24:09 --> Database Driver Class Initialized
DEBUG - 2013-12-03 15:24:09 --> Session Class Initialized
DEBUG - 2013-12-03 15:24:09 --> Helper loaded: string_helper
DEBUG - 2013-12-03 15:24:09 --> Session routines successfully run
DEBUG - 2013-12-03 15:24:09 --> Form Validation Class Initialized
DEBUG - 2013-12-03 15:24:09 --> Controller Class Initialized
DEBUG - 2013-12-03 15:24:09 --> Model Class Initialized
DEBUG - 2013-12-03 15:24:09 --> Model Class Initialized
DEBUG - 2013-12-03 15:24:09 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-03 15:24:09 --> after session initialization................
INFO  - 2013-12-03 15:24:09 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 486 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-03 15:24:09 --> Final output sent to browser
DEBUG - 2013-12-03 15:24:09 --> Total execution time: 0.0510
DEBUG - 2013-12-03 15:24:11 --> Config Class Initialized
DEBUG - 2013-12-03 15:24:11 --> Hooks Class Initialized
DEBUG - 2013-12-03 15:24:11 --> Utf8 Class Initialized
DEBUG - 2013-12-03 15:24:11 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 15:24:11 --> URI Class Initialized
DEBUG - 2013-12-03 15:24:11 --> Router Class Initialized
DEBUG - 2013-12-03 15:24:11 --> Output Class Initialized
DEBUG - 2013-12-03 15:24:11 --> Security Class Initialized
DEBUG - 2013-12-03 15:24:11 --> Input Class Initialized
DEBUG - 2013-12-03 15:24:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-03 15:24:11 --> Language Class Initialized
DEBUG - 2013-12-03 15:24:11 --> Loader Class Initialized
DEBUG - 2013-12-03 15:24:11 --> Helper loaded: form_helper
DEBUG - 2013-12-03 15:24:11 --> Helper loaded: url_helper
DEBUG - 2013-12-03 15:24:11 --> Helper loaded: html_helper
DEBUG - 2013-12-03 15:24:11 --> Database Driver Class Initialized
DEBUG - 2013-12-03 15:24:11 --> Session Class Initialized
DEBUG - 2013-12-03 15:24:11 --> Helper loaded: string_helper
DEBUG - 2013-12-03 15:24:11 --> Session routines successfully run
DEBUG - 2013-12-03 15:24:11 --> Form Validation Class Initialized
DEBUG - 2013-12-03 15:24:11 --> Controller Class Initialized
DEBUG - 2013-12-03 15:24:11 --> Model Class Initialized
DEBUG - 2013-12-03 15:24:11 --> Model Class Initialized
DEBUG - 2013-12-03 15:24:11 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-03 15:24:11 --> after session initialization................
INFO  - 2013-12-03 15:24:11 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 486 and d.drugcategoryid_drugcategory = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-03 15:24:11 --> Final output sent to browser
DEBUG - 2013-12-03 15:24:11 --> Total execution time: 0.0660
DEBUG - 2013-12-03 15:24:13 --> Config Class Initialized
DEBUG - 2013-12-03 15:24:13 --> Hooks Class Initialized
DEBUG - 2013-12-03 15:24:13 --> Utf8 Class Initialized
DEBUG - 2013-12-03 15:24:13 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 15:24:13 --> URI Class Initialized
DEBUG - 2013-12-03 15:24:13 --> Router Class Initialized
DEBUG - 2013-12-03 15:24:13 --> Output Class Initialized
DEBUG - 2013-12-03 15:24:13 --> Security Class Initialized
DEBUG - 2013-12-03 15:24:13 --> Input Class Initialized
DEBUG - 2013-12-03 15:24:13 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-03 15:24:13 --> Language Class Initialized
DEBUG - 2013-12-03 15:24:13 --> Loader Class Initialized
DEBUG - 2013-12-03 15:24:13 --> Helper loaded: form_helper
DEBUG - 2013-12-03 15:24:13 --> Helper loaded: url_helper
DEBUG - 2013-12-03 15:24:13 --> Helper loaded: html_helper
DEBUG - 2013-12-03 15:24:13 --> Database Driver Class Initialized
DEBUG - 2013-12-03 15:24:13 --> Session Class Initialized
DEBUG - 2013-12-03 15:24:13 --> Helper loaded: string_helper
DEBUG - 2013-12-03 15:24:13 --> Session routines successfully run
DEBUG - 2013-12-03 15:24:13 --> Form Validation Class Initialized
DEBUG - 2013-12-03 15:24:13 --> Controller Class Initialized
DEBUG - 2013-12-03 15:24:13 --> Model Class Initialized
DEBUG - 2013-12-03 15:24:13 --> Model Class Initialized
DEBUG - 2013-12-03 15:24:13 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-03 15:24:13 --> after session initialization................
INFO  - 2013-12-03 15:24:13 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 486 and d.drugclassid_drugclass = 3 and d.drugcategoryid_drugcategory = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-03 15:24:13 --> Final output sent to browser
DEBUG - 2013-12-03 15:24:13 --> Total execution time: 0.0490
DEBUG - 2013-12-03 15:24:15 --> Config Class Initialized
DEBUG - 2013-12-03 15:24:15 --> Hooks Class Initialized
DEBUG - 2013-12-03 15:24:15 --> Utf8 Class Initialized
DEBUG - 2013-12-03 15:24:15 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 15:24:15 --> URI Class Initialized
DEBUG - 2013-12-03 15:24:15 --> Router Class Initialized
DEBUG - 2013-12-03 15:24:15 --> Output Class Initialized
DEBUG - 2013-12-03 15:24:15 --> Security Class Initialized
DEBUG - 2013-12-03 15:24:15 --> Input Class Initialized
DEBUG - 2013-12-03 15:24:15 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-03 15:24:15 --> Language Class Initialized
DEBUG - 2013-12-03 15:24:15 --> Loader Class Initialized
DEBUG - 2013-12-03 15:24:15 --> Helper loaded: form_helper
DEBUG - 2013-12-03 15:24:15 --> Helper loaded: url_helper
DEBUG - 2013-12-03 15:24:15 --> Helper loaded: html_helper
DEBUG - 2013-12-03 15:24:15 --> Database Driver Class Initialized
DEBUG - 2013-12-03 15:24:15 --> Session Class Initialized
DEBUG - 2013-12-03 15:24:15 --> Helper loaded: string_helper
DEBUG - 2013-12-03 15:24:15 --> Session routines successfully run
DEBUG - 2013-12-03 15:24:15 --> Form Validation Class Initialized
DEBUG - 2013-12-03 15:24:15 --> Controller Class Initialized
DEBUG - 2013-12-03 15:24:15 --> Model Class Initialized
DEBUG - 2013-12-03 15:24:15 --> Model Class Initialized
DEBUG - 2013-12-03 15:24:15 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-03 15:24:15 --> after session initialization................
INFO  - 2013-12-03 15:24:15 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 486 and d.drugclassid_drugclass = 3 and d.drugcategoryid_drugcategory = 1 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-03 15:24:15 --> Final output sent to browser
DEBUG - 2013-12-03 15:24:15 --> Total execution time: 0.0490
DEBUG - 2013-12-03 15:24:18 --> Config Class Initialized
DEBUG - 2013-12-03 15:24:18 --> Hooks Class Initialized
DEBUG - 2013-12-03 15:24:18 --> Utf8 Class Initialized
DEBUG - 2013-12-03 15:24:18 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 15:24:18 --> URI Class Initialized
DEBUG - 2013-12-03 15:24:18 --> Router Class Initialized
DEBUG - 2013-12-03 15:24:18 --> Output Class Initialized
DEBUG - 2013-12-03 15:24:18 --> Security Class Initialized
DEBUG - 2013-12-03 15:24:18 --> Input Class Initialized
DEBUG - 2013-12-03 15:24:18 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-03 15:24:18 --> Language Class Initialized
DEBUG - 2013-12-03 15:24:18 --> Loader Class Initialized
DEBUG - 2013-12-03 15:24:18 --> Helper loaded: form_helper
DEBUG - 2013-12-03 15:24:18 --> Helper loaded: url_helper
DEBUG - 2013-12-03 15:24:18 --> Helper loaded: html_helper
DEBUG - 2013-12-03 15:24:18 --> Database Driver Class Initialized
DEBUG - 2013-12-03 15:24:18 --> Session Class Initialized
DEBUG - 2013-12-03 15:24:18 --> Helper loaded: string_helper
DEBUG - 2013-12-03 15:24:18 --> Session routines successfully run
DEBUG - 2013-12-03 15:24:18 --> Form Validation Class Initialized
DEBUG - 2013-12-03 15:24:18 --> Controller Class Initialized
DEBUG - 2013-12-03 15:24:18 --> Model Class Initialized
DEBUG - 2013-12-03 15:24:18 --> Model Class Initialized
DEBUG - 2013-12-03 15:24:18 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-03 15:24:18 --> after session initialization................
INFO  - 2013-12-03 15:24:18 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 486 and d.drugcategoryid_drugcategory = 1 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-03 15:24:18 --> Final output sent to browser
DEBUG - 2013-12-03 15:24:18 --> Total execution time: 0.0600
DEBUG - 2013-12-03 15:24:23 --> Config Class Initialized
DEBUG - 2013-12-03 15:24:23 --> Hooks Class Initialized
DEBUG - 2013-12-03 15:24:23 --> Utf8 Class Initialized
DEBUG - 2013-12-03 15:24:23 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 15:24:23 --> URI Class Initialized
DEBUG - 2013-12-03 15:24:23 --> Router Class Initialized
DEBUG - 2013-12-03 15:24:23 --> Output Class Initialized
DEBUG - 2013-12-03 15:24:23 --> Security Class Initialized
DEBUG - 2013-12-03 15:24:23 --> Input Class Initialized
DEBUG - 2013-12-03 15:24:23 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-03 15:24:23 --> Language Class Initialized
DEBUG - 2013-12-03 15:24:23 --> Loader Class Initialized
DEBUG - 2013-12-03 15:24:23 --> Helper loaded: form_helper
DEBUG - 2013-12-03 15:24:23 --> Helper loaded: url_helper
DEBUG - 2013-12-03 15:24:23 --> Helper loaded: html_helper
DEBUG - 2013-12-03 15:24:24 --> Database Driver Class Initialized
DEBUG - 2013-12-03 15:24:24 --> Session Class Initialized
DEBUG - 2013-12-03 15:24:24 --> Helper loaded: string_helper
DEBUG - 2013-12-03 15:24:24 --> Session routines successfully run
DEBUG - 2013-12-03 15:24:24 --> Form Validation Class Initialized
DEBUG - 2013-12-03 15:24:24 --> Controller Class Initialized
DEBUG - 2013-12-03 15:24:24 --> Model Class Initialized
DEBUG - 2013-12-03 15:24:24 --> Model Class Initialized
DEBUG - 2013-12-03 15:24:24 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-03 15:24:24 --> after session initialization................
INFO  - 2013-12-03 15:24:24 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '492'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-03 15:24:24 --> inside retrieving comments member id and drug id is 492
INFO  - 2013-12-03 15:24:24 --> 10==============================0
INFO  - 2013-12-03 15:24:24 --> SELECT dc.id_drugcomment as id, dc.comment, dc.time_created, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 492
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-03 15:24:24 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 492
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-03 15:24:24 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '492'
ORDER BY `a`.`time_created`
INFO  - 2013-12-03 15:24:24 --> inside retrieving pharmacy for drug id is 492
INFO  - 2013-12-03 15:24:24 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 492
ORDER BY `p`.`id_pharmacy`
LIMIT 15
INFO  - 2013-12-03 15:24:24 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '492'
ORDER BY `a`.`time_created`
INFO  - 2013-12-03 15:24:24 --> inside retrieving comments member type id and drug id is 492
INFO  - 2013-12-03 15:24:24 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 492
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
DEBUG - 2013-12-03 15:24:24 --> Final output sent to browser
DEBUG - 2013-12-03 15:24:24 --> Total execution time: 0.0750
DEBUG - 2013-12-03 15:24:37 --> Config Class Initialized
DEBUG - 2013-12-03 15:24:37 --> Hooks Class Initialized
DEBUG - 2013-12-03 15:24:37 --> Utf8 Class Initialized
DEBUG - 2013-12-03 15:24:37 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 15:24:37 --> URI Class Initialized
DEBUG - 2013-12-03 15:24:37 --> Router Class Initialized
DEBUG - 2013-12-03 15:24:37 --> Output Class Initialized
DEBUG - 2013-12-03 15:24:37 --> Security Class Initialized
DEBUG - 2013-12-03 15:24:37 --> Input Class Initialized
DEBUG - 2013-12-03 15:24:37 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-03 15:24:37 --> Language Class Initialized
DEBUG - 2013-12-03 15:24:37 --> Loader Class Initialized
DEBUG - 2013-12-03 15:24:37 --> Helper loaded: form_helper
DEBUG - 2013-12-03 15:24:37 --> Helper loaded: url_helper
DEBUG - 2013-12-03 15:24:37 --> Helper loaded: html_helper
DEBUG - 2013-12-03 15:24:37 --> Database Driver Class Initialized
DEBUG - 2013-12-03 15:24:37 --> Session Class Initialized
DEBUG - 2013-12-03 15:24:37 --> Helper loaded: string_helper
DEBUG - 2013-12-03 15:24:37 --> Session routines successfully run
DEBUG - 2013-12-03 15:24:37 --> Form Validation Class Initialized
DEBUG - 2013-12-03 15:24:37 --> Controller Class Initialized
DEBUG - 2013-12-03 15:24:37 --> Model Class Initialized
DEBUG - 2013-12-03 15:24:37 --> Model Class Initialized
DEBUG - 2013-12-03 15:24:37 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-03 15:24:37 --> after session initialization................
INFO  - 2013-12-03 15:24:37 --> inside the auto suggest page.................
INFO  - 2013-12-03 15:24:37 --> after the list array.................
INFO  - 2013-12-03 15:24:37 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%g%' 
ORDER BY `d`.`drug_name`
LIMIT 15
INFO  - 2013-12-03 15:24:37 --> after retrieving the data from db.................
DEBUG - 2013-12-03 15:24:37 --> Final output sent to browser
DEBUG - 2013-12-03 15:24:37 --> Total execution time: 0.0580
DEBUG - 2013-12-03 15:24:40 --> Config Class Initialized
DEBUG - 2013-12-03 15:24:40 --> Hooks Class Initialized
DEBUG - 2013-12-03 15:24:40 --> Utf8 Class Initialized
DEBUG - 2013-12-03 15:24:40 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 15:24:40 --> URI Class Initialized
DEBUG - 2013-12-03 15:24:40 --> Router Class Initialized
DEBUG - 2013-12-03 15:24:40 --> Output Class Initialized
DEBUG - 2013-12-03 15:24:40 --> Security Class Initialized
DEBUG - 2013-12-03 15:24:40 --> Input Class Initialized
DEBUG - 2013-12-03 15:24:40 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-03 15:24:40 --> Language Class Initialized
DEBUG - 2013-12-03 15:24:40 --> Loader Class Initialized
DEBUG - 2013-12-03 15:24:40 --> Helper loaded: form_helper
DEBUG - 2013-12-03 15:24:40 --> Helper loaded: url_helper
DEBUG - 2013-12-03 15:24:40 --> Helper loaded: html_helper
DEBUG - 2013-12-03 15:24:40 --> Database Driver Class Initialized
DEBUG - 2013-12-03 15:24:40 --> Session Class Initialized
DEBUG - 2013-12-03 15:24:40 --> Helper loaded: string_helper
DEBUG - 2013-12-03 15:24:40 --> Session routines successfully run
DEBUG - 2013-12-03 15:24:40 --> Form Validation Class Initialized
DEBUG - 2013-12-03 15:24:40 --> Controller Class Initialized
DEBUG - 2013-12-03 15:24:40 --> Model Class Initialized
DEBUG - 2013-12-03 15:24:40 --> Model Class Initialized
DEBUG - 2013-12-03 15:24:40 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-03 15:24:40 --> after session initialization................
INFO  - 2013-12-03 15:24:40 --> inside the auto suggest page.................
INFO  - 2013-12-03 15:24:40 --> after the list array.................
INFO  - 2013-12-03 15:24:40 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%ge%' 
ORDER BY `d`.`drug_name`
LIMIT 15
INFO  - 2013-12-03 15:24:40 --> after retrieving the data from db.................
DEBUG - 2013-12-03 15:24:40 --> Final output sent to browser
DEBUG - 2013-12-03 15:24:40 --> Total execution time: 0.0620
DEBUG - 2013-12-03 15:24:40 --> Config Class Initialized
DEBUG - 2013-12-03 15:24:40 --> Hooks Class Initialized
DEBUG - 2013-12-03 15:24:40 --> Utf8 Class Initialized
DEBUG - 2013-12-03 15:24:40 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 15:24:40 --> URI Class Initialized
DEBUG - 2013-12-03 15:24:40 --> Router Class Initialized
DEBUG - 2013-12-03 15:24:40 --> Output Class Initialized
DEBUG - 2013-12-03 15:24:40 --> Security Class Initialized
DEBUG - 2013-12-03 15:24:40 --> Input Class Initialized
DEBUG - 2013-12-03 15:24:40 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-03 15:24:40 --> Language Class Initialized
DEBUG - 2013-12-03 15:24:40 --> Loader Class Initialized
DEBUG - 2013-12-03 15:24:40 --> Helper loaded: form_helper
DEBUG - 2013-12-03 15:24:40 --> Helper loaded: url_helper
DEBUG - 2013-12-03 15:24:40 --> Helper loaded: html_helper
DEBUG - 2013-12-03 15:24:40 --> Database Driver Class Initialized
DEBUG - 2013-12-03 15:24:40 --> Session Class Initialized
DEBUG - 2013-12-03 15:24:40 --> Helper loaded: string_helper
DEBUG - 2013-12-03 15:24:40 --> Session routines successfully run
DEBUG - 2013-12-03 15:24:40 --> Form Validation Class Initialized
DEBUG - 2013-12-03 15:24:40 --> Controller Class Initialized
DEBUG - 2013-12-03 15:24:40 --> Model Class Initialized
DEBUG - 2013-12-03 15:24:40 --> Model Class Initialized
DEBUG - 2013-12-03 15:24:40 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-03 15:24:40 --> after session initialization................
INFO  - 2013-12-03 15:24:40 --> inside the auto suggest page.................
INFO  - 2013-12-03 15:24:40 --> after the list array.................
INFO  - 2013-12-03 15:24:40 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%ger%' 
ORDER BY `d`.`drug_name`
LIMIT 15
INFO  - 2013-12-03 15:24:40 --> after retrieving the data from db.................
DEBUG - 2013-12-03 15:24:40 --> Final output sent to browser
DEBUG - 2013-12-03 15:24:40 --> Total execution time: 0.0570
DEBUG - 2013-12-03 15:24:50 --> Config Class Initialized
DEBUG - 2013-12-03 15:24:50 --> Hooks Class Initialized
DEBUG - 2013-12-03 15:24:50 --> Utf8 Class Initialized
DEBUG - 2013-12-03 15:24:50 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 15:24:50 --> URI Class Initialized
DEBUG - 2013-12-03 15:24:50 --> Router Class Initialized
DEBUG - 2013-12-03 15:24:50 --> Output Class Initialized
DEBUG - 2013-12-03 15:24:50 --> Security Class Initialized
DEBUG - 2013-12-03 15:24:50 --> Input Class Initialized
DEBUG - 2013-12-03 15:24:50 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-03 15:24:50 --> Language Class Initialized
DEBUG - 2013-12-03 15:24:50 --> Loader Class Initialized
DEBUG - 2013-12-03 15:24:50 --> Helper loaded: form_helper
DEBUG - 2013-12-03 15:24:50 --> Helper loaded: url_helper
DEBUG - 2013-12-03 15:24:50 --> Helper loaded: html_helper
DEBUG - 2013-12-03 15:24:50 --> Database Driver Class Initialized
DEBUG - 2013-12-03 15:24:50 --> Session Class Initialized
DEBUG - 2013-12-03 15:24:50 --> Helper loaded: string_helper
DEBUG - 2013-12-03 15:24:50 --> Session routines successfully run
DEBUG - 2013-12-03 15:24:50 --> Form Validation Class Initialized
DEBUG - 2013-12-03 15:24:50 --> Controller Class Initialized
DEBUG - 2013-12-03 15:24:50 --> Model Class Initialized
DEBUG - 2013-12-03 15:24:50 --> Model Class Initialized
DEBUG - 2013-12-03 15:24:50 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-03 15:24:50 --> after session initialization................
INFO  - 2013-12-03 15:24:50 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-03 15:24:50 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-03 15:24:50 --> inside retrieving vacancy for member
INFO  - 2013-12-03 15:24:50 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-12-03 15:24:50 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-03 15:24:50 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-12-03 15:24:50 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-03 15:24:50 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-03 15:24:50 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-03 15:24:50 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-03 15:24:50 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-12-03 15:24:50 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-12-03 15:24:50 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
DEBUG - 2013-12-03 15:24:50 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-12-03 15:24:50 --> Final output sent to browser
DEBUG - 2013-12-03 15:24:50 --> Total execution time: 0.0750
DEBUG - 2013-12-03 15:24:50 --> Config Class Initialized
DEBUG - 2013-12-03 15:24:50 --> Hooks Class Initialized
DEBUG - 2013-12-03 15:24:50 --> Utf8 Class Initialized
DEBUG - 2013-12-03 15:24:50 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 15:24:50 --> URI Class Initialized
DEBUG - 2013-12-03 15:24:50 --> Router Class Initialized
ERROR - 2013-12-03 15:24:50 --> 404 Page Not Found --> sys_admin/src
DEBUG - 2013-12-03 15:24:51 --> Config Class Initialized
DEBUG - 2013-12-03 15:24:51 --> Hooks Class Initialized
DEBUG - 2013-12-03 15:24:51 --> Utf8 Class Initialized
DEBUG - 2013-12-03 15:24:51 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 15:24:51 --> URI Class Initialized
DEBUG - 2013-12-03 15:24:51 --> Router Class Initialized
ERROR - 2013-12-03 15:24:51 --> 404 Page Not Found --> css
DEBUG - 2013-12-03 15:24:53 --> Config Class Initialized
DEBUG - 2013-12-03 15:24:53 --> Hooks Class Initialized
DEBUG - 2013-12-03 15:24:53 --> Utf8 Class Initialized
DEBUG - 2013-12-03 15:24:53 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 15:24:53 --> URI Class Initialized
DEBUG - 2013-12-03 15:24:53 --> Router Class Initialized
DEBUG - 2013-12-03 15:24:53 --> Output Class Initialized
DEBUG - 2013-12-03 15:24:53 --> Security Class Initialized
DEBUG - 2013-12-03 15:24:53 --> Input Class Initialized
DEBUG - 2013-12-03 15:24:53 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-03 15:24:53 --> Language Class Initialized
DEBUG - 2013-12-03 15:24:53 --> Loader Class Initialized
DEBUG - 2013-12-03 15:24:53 --> Helper loaded: form_helper
DEBUG - 2013-12-03 15:24:53 --> Helper loaded: url_helper
DEBUG - 2013-12-03 15:24:53 --> Helper loaded: html_helper
DEBUG - 2013-12-03 15:24:53 --> Database Driver Class Initialized
DEBUG - 2013-12-03 15:24:53 --> Session Class Initialized
DEBUG - 2013-12-03 15:24:53 --> Helper loaded: string_helper
DEBUG - 2013-12-03 15:24:53 --> Session routines successfully run
DEBUG - 2013-12-03 15:24:53 --> Form Validation Class Initialized
DEBUG - 2013-12-03 15:24:53 --> Controller Class Initialized
DEBUG - 2013-12-03 15:24:53 --> Model Class Initialized
DEBUG - 2013-12-03 15:24:53 --> Model Class Initialized
DEBUG - 2013-12-03 15:24:53 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-03 15:24:53 --> after session initialization................
INFO  - 2013-12-03 15:24:53 --> inside the auto suggest page.................
INFO  - 2013-12-03 15:24:53 --> after the list array.................
INFO  - 2013-12-03 15:24:53 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%g%' 
ORDER BY `d`.`drug_name`
LIMIT 15
INFO  - 2013-12-03 15:24:53 --> after retrieving the data from db.................
DEBUG - 2013-12-03 15:24:53 --> Final output sent to browser
DEBUG - 2013-12-03 15:24:53 --> Total execution time: 0.0530
DEBUG - 2013-12-03 15:24:55 --> Config Class Initialized
DEBUG - 2013-12-03 15:24:55 --> Hooks Class Initialized
DEBUG - 2013-12-03 15:24:55 --> Utf8 Class Initialized
DEBUG - 2013-12-03 15:24:55 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 15:24:55 --> URI Class Initialized
DEBUG - 2013-12-03 15:24:55 --> Router Class Initialized
DEBUG - 2013-12-03 15:24:55 --> Output Class Initialized
DEBUG - 2013-12-03 15:24:55 --> Security Class Initialized
DEBUG - 2013-12-03 15:24:55 --> Input Class Initialized
DEBUG - 2013-12-03 15:24:55 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-03 15:24:55 --> Language Class Initialized
DEBUG - 2013-12-03 15:24:55 --> Loader Class Initialized
DEBUG - 2013-12-03 15:24:55 --> Helper loaded: form_helper
DEBUG - 2013-12-03 15:24:55 --> Helper loaded: url_helper
DEBUG - 2013-12-03 15:24:55 --> Helper loaded: html_helper
DEBUG - 2013-12-03 15:24:55 --> Database Driver Class Initialized
DEBUG - 2013-12-03 15:24:55 --> Session Class Initialized
DEBUG - 2013-12-03 15:24:55 --> Helper loaded: string_helper
DEBUG - 2013-12-03 15:24:55 --> Session routines successfully run
DEBUG - 2013-12-03 15:24:55 --> Form Validation Class Initialized
DEBUG - 2013-12-03 15:24:55 --> Controller Class Initialized
DEBUG - 2013-12-03 15:24:55 --> Model Class Initialized
DEBUG - 2013-12-03 15:24:55 --> Model Class Initialized
DEBUG - 2013-12-03 15:24:55 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-03 15:24:55 --> after session initialization................
INFO  - 2013-12-03 15:24:55 --> inside the auto suggest page.................
INFO  - 2013-12-03 15:24:55 --> after the list array.................
INFO  - 2013-12-03 15:24:55 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%ge%' 
ORDER BY `d`.`drug_name`
LIMIT 15
INFO  - 2013-12-03 15:24:55 --> after retrieving the data from db.................
DEBUG - 2013-12-03 15:24:55 --> Final output sent to browser
DEBUG - 2013-12-03 15:24:55 --> Total execution time: 0.0630
DEBUG - 2013-12-03 15:24:55 --> Config Class Initialized
DEBUG - 2013-12-03 15:24:55 --> Hooks Class Initialized
DEBUG - 2013-12-03 15:24:55 --> Utf8 Class Initialized
DEBUG - 2013-12-03 15:24:55 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 15:24:55 --> URI Class Initialized
DEBUG - 2013-12-03 15:24:55 --> Router Class Initialized
DEBUG - 2013-12-03 15:24:55 --> Output Class Initialized
DEBUG - 2013-12-03 15:24:55 --> Security Class Initialized
DEBUG - 2013-12-03 15:24:55 --> Input Class Initialized
DEBUG - 2013-12-03 15:24:55 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-03 15:24:55 --> Language Class Initialized
DEBUG - 2013-12-03 15:24:55 --> Loader Class Initialized
DEBUG - 2013-12-03 15:24:55 --> Helper loaded: form_helper
DEBUG - 2013-12-03 15:24:55 --> Helper loaded: url_helper
DEBUG - 2013-12-03 15:24:55 --> Helper loaded: html_helper
DEBUG - 2013-12-03 15:24:55 --> Database Driver Class Initialized
DEBUG - 2013-12-03 15:24:55 --> Session Class Initialized
DEBUG - 2013-12-03 15:24:55 --> Helper loaded: string_helper
DEBUG - 2013-12-03 15:24:55 --> Session routines successfully run
DEBUG - 2013-12-03 15:24:55 --> Form Validation Class Initialized
DEBUG - 2013-12-03 15:24:55 --> Controller Class Initialized
DEBUG - 2013-12-03 15:24:55 --> Model Class Initialized
DEBUG - 2013-12-03 15:24:55 --> Model Class Initialized
DEBUG - 2013-12-03 15:24:55 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-03 15:24:55 --> after session initialization................
INFO  - 2013-12-03 15:24:55 --> inside the auto suggest page.................
INFO  - 2013-12-03 15:24:55 --> after the list array.................
INFO  - 2013-12-03 15:24:55 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%ger%' 
ORDER BY `d`.`drug_name`
LIMIT 15
INFO  - 2013-12-03 15:24:55 --> after retrieving the data from db.................
DEBUG - 2013-12-03 15:24:55 --> Final output sent to browser
DEBUG - 2013-12-03 15:24:55 --> Total execution time: 0.0600
DEBUG - 2013-12-03 15:24:57 --> Config Class Initialized
DEBUG - 2013-12-03 15:24:57 --> Hooks Class Initialized
DEBUG - 2013-12-03 15:24:57 --> Utf8 Class Initialized
DEBUG - 2013-12-03 15:24:57 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 15:24:57 --> URI Class Initialized
DEBUG - 2013-12-03 15:24:57 --> Router Class Initialized
DEBUG - 2013-12-03 15:24:57 --> Output Class Initialized
DEBUG - 2013-12-03 15:24:57 --> Security Class Initialized
DEBUG - 2013-12-03 15:24:57 --> Input Class Initialized
DEBUG - 2013-12-03 15:24:57 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-03 15:24:57 --> Language Class Initialized
DEBUG - 2013-12-03 15:24:57 --> Loader Class Initialized
DEBUG - 2013-12-03 15:24:57 --> Helper loaded: form_helper
DEBUG - 2013-12-03 15:24:57 --> Helper loaded: url_helper
DEBUG - 2013-12-03 15:24:57 --> Helper loaded: html_helper
DEBUG - 2013-12-03 15:24:57 --> Database Driver Class Initialized
DEBUG - 2013-12-03 15:24:57 --> Session Class Initialized
DEBUG - 2013-12-03 15:24:57 --> Helper loaded: string_helper
DEBUG - 2013-12-03 15:24:57 --> Session routines successfully run
DEBUG - 2013-12-03 15:24:57 --> Form Validation Class Initialized
DEBUG - 2013-12-03 15:24:57 --> Controller Class Initialized
DEBUG - 2013-12-03 15:24:57 --> Model Class Initialized
DEBUG - 2013-12-03 15:24:57 --> Model Class Initialized
DEBUG - 2013-12-03 15:24:57 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-03 15:24:57 --> after session initialization................
INFO  - 2013-12-03 15:24:57 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 1 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-03 15:24:57 --> Final output sent to browser
DEBUG - 2013-12-03 15:24:57 --> Total execution time: 0.0560
DEBUG - 2013-12-03 15:25:00 --> Config Class Initialized
DEBUG - 2013-12-03 15:25:00 --> Hooks Class Initialized
DEBUG - 2013-12-03 15:25:00 --> Utf8 Class Initialized
DEBUG - 2013-12-03 15:25:00 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 15:25:00 --> URI Class Initialized
DEBUG - 2013-12-03 15:25:00 --> Router Class Initialized
DEBUG - 2013-12-03 15:25:00 --> Output Class Initialized
DEBUG - 2013-12-03 15:25:00 --> Security Class Initialized
DEBUG - 2013-12-03 15:25:00 --> Input Class Initialized
DEBUG - 2013-12-03 15:25:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-03 15:25:00 --> Language Class Initialized
DEBUG - 2013-12-03 15:25:00 --> Loader Class Initialized
DEBUG - 2013-12-03 15:25:00 --> Helper loaded: form_helper
DEBUG - 2013-12-03 15:25:00 --> Helper loaded: url_helper
DEBUG - 2013-12-03 15:25:00 --> Helper loaded: html_helper
DEBUG - 2013-12-03 15:25:00 --> Database Driver Class Initialized
DEBUG - 2013-12-03 15:25:00 --> Session Class Initialized
DEBUG - 2013-12-03 15:25:00 --> Helper loaded: string_helper
DEBUG - 2013-12-03 15:25:00 --> Session routines successfully run
DEBUG - 2013-12-03 15:25:00 --> Form Validation Class Initialized
DEBUG - 2013-12-03 15:25:00 --> Controller Class Initialized
DEBUG - 2013-12-03 15:25:00 --> Model Class Initialized
DEBUG - 2013-12-03 15:25:00 --> Model Class Initialized
DEBUG - 2013-12-03 15:25:00 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-03 15:25:00 --> after session initialization................
INFO  - 2013-12-03 15:25:00 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '494'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-03 15:25:00 --> inside retrieving comments member id and drug id is 494
INFO  - 2013-12-03 15:25:00 --> 10==============================0
INFO  - 2013-12-03 15:25:00 --> SELECT dc.id_drugcomment as id, dc.comment, dc.time_created, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 494
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-03 15:25:00 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 494
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-03 15:25:00 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '494'
ORDER BY `a`.`time_created`
INFO  - 2013-12-03 15:25:00 --> inside retrieving pharmacy for drug id is 494
INFO  - 2013-12-03 15:25:00 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 494
ORDER BY `p`.`id_pharmacy`
LIMIT 15
INFO  - 2013-12-03 15:25:00 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '494'
ORDER BY `a`.`time_created`
INFO  - 2013-12-03 15:25:00 --> inside retrieving comments member type id and drug id is 494
INFO  - 2013-12-03 15:25:00 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 494
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
DEBUG - 2013-12-03 15:25:00 --> Final output sent to browser
DEBUG - 2013-12-03 15:25:00 --> Total execution time: 0.1060
DEBUG - 2013-12-03 15:25:28 --> Config Class Initialized
DEBUG - 2013-12-03 15:25:28 --> Hooks Class Initialized
DEBUG - 2013-12-03 15:25:28 --> Utf8 Class Initialized
DEBUG - 2013-12-03 15:25:28 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 15:25:28 --> URI Class Initialized
DEBUG - 2013-12-03 15:25:28 --> Router Class Initialized
DEBUG - 2013-12-03 15:25:28 --> Output Class Initialized
DEBUG - 2013-12-03 15:25:28 --> Security Class Initialized
DEBUG - 2013-12-03 15:25:28 --> Input Class Initialized
DEBUG - 2013-12-03 15:25:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-03 15:25:28 --> Language Class Initialized
DEBUG - 2013-12-03 15:25:28 --> Loader Class Initialized
DEBUG - 2013-12-03 15:25:28 --> Helper loaded: form_helper
DEBUG - 2013-12-03 15:25:28 --> Helper loaded: url_helper
DEBUG - 2013-12-03 15:25:28 --> Helper loaded: html_helper
DEBUG - 2013-12-03 15:25:28 --> Database Driver Class Initialized
DEBUG - 2013-12-03 15:25:28 --> Session Class Initialized
DEBUG - 2013-12-03 15:25:28 --> Helper loaded: string_helper
DEBUG - 2013-12-03 15:25:28 --> Session routines successfully run
DEBUG - 2013-12-03 15:25:28 --> Form Validation Class Initialized
DEBUG - 2013-12-03 15:25:28 --> Controller Class Initialized
DEBUG - 2013-12-03 15:25:28 --> Model Class Initialized
DEBUG - 2013-12-03 15:25:28 --> Model Class Initialized
DEBUG - 2013-12-03 15:25:28 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-03 15:25:28 --> after session initialization................
INFO  - 2013-12-03 15:25:28 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-03 15:25:28 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-12-03 15:25:28 --> inside retrieving vacancy for member
INFO  - 2013-12-03 15:25:28 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-12-03 15:25:28 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-12-03 15:25:28 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-12-03 15:25:28 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass_drug` dcd ON `dcd`.`drugid_drug` = `d`.`id_drug`
JOIN `drugclass` dc ON `dcd`.`drugclassid_drugclass` = `dc`.`id_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-12-03 15:25:28 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-03 15:25:28 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-12-03 15:25:28 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-12-03 15:25:28 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-12-03 15:25:28 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-12-03 15:25:28 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
DEBUG - 2013-12-03 15:25:28 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-12-03 15:25:28 --> Final output sent to browser
DEBUG - 2013-12-03 15:25:28 --> Total execution time: 0.0880
DEBUG - 2013-12-03 15:25:28 --> Config Class Initialized
DEBUG - 2013-12-03 15:25:28 --> Hooks Class Initialized
DEBUG - 2013-12-03 15:25:28 --> Utf8 Class Initialized
DEBUG - 2013-12-03 15:25:28 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 15:25:28 --> URI Class Initialized
DEBUG - 2013-12-03 15:25:28 --> Router Class Initialized
ERROR - 2013-12-03 15:25:28 --> 404 Page Not Found --> sys_admin/src
DEBUG - 2013-12-03 15:25:28 --> Config Class Initialized
DEBUG - 2013-12-03 15:25:28 --> Hooks Class Initialized
DEBUG - 2013-12-03 15:25:28 --> Utf8 Class Initialized
DEBUG - 2013-12-03 15:25:28 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 15:25:28 --> URI Class Initialized
DEBUG - 2013-12-03 15:25:28 --> Router Class Initialized
ERROR - 2013-12-03 15:25:28 --> 404 Page Not Found --> css
DEBUG - 2013-12-03 15:25:30 --> Config Class Initialized
DEBUG - 2013-12-03 15:25:30 --> Hooks Class Initialized
DEBUG - 2013-12-03 15:25:30 --> Utf8 Class Initialized
DEBUG - 2013-12-03 15:25:30 --> UTF-8 Support Enabled
DEBUG - 2013-12-03 15:25:30 --> URI Class Initialized
DEBUG - 2013-12-03 15:25:30 --> Router Class Initialized
DEBUG - 2013-12-03 15:25:30 --> Output Class Initialized
DEBUG - 2013-12-03 15:25:30 --> Security Class Initialized
DEBUG - 2013-12-03 15:25:30 --> Input Class Initialized
DEBUG - 2013-12-03 15:25:30 --> Global POST and COOKIE data sanitized
DEBUG - 2013-12-03 15:25:30 --> Language Class Initialized
DEBUG - 2013-12-03 15:25:30 --> Loader Class Initialized
DEBUG - 2013-12-03 15:25:30 --> Helper loaded: form_helper
DEBUG - 2013-12-03 15:25:30 --> Helper loaded: url_helper
DEBUG - 2013-12-03 15:25:30 --> Helper loaded: html_helper
DEBUG - 2013-12-03 15:25:30 --> Database Driver Class Initialized
DEBUG - 2013-12-03 15:25:30 --> Session Class Initialized
DEBUG - 2013-12-03 15:25:30 --> Helper loaded: string_helper
DEBUG - 2013-12-03 15:25:30 --> Session routines successfully run
DEBUG - 2013-12-03 15:25:30 --> Form Validation Class Initialized
DEBUG - 2013-12-03 15:25:30 --> Controller Class Initialized
DEBUG - 2013-12-03 15:25:30 --> Model Class Initialized
DEBUG - 2013-12-03 15:25:30 --> Model Class Initialized
DEBUG - 2013-12-03 15:25:30 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-12-03 15:25:30 --> after session initialization................
INFO  - 2013-12-03 15:25:30 --> News by drug_id ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name` as name
FROM (`drug` d)
WHERE `d`.`id_drug` <> 1 and d.brandnameid_brandname = 1
ORDER BY `d`.`drug_name`
DEBUG - 2013-12-03 15:25:30 --> Final output sent to browser
DEBUG - 2013-12-03 15:25:30 --> Total execution time: 0.0540
