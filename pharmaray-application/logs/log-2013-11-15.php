<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2013-11-15 09:28:44 --> Config Class Initialized
DEBUG - 2013-11-15 09:28:44 --> Hooks Class Initialized
DEBUG - 2013-11-15 09:28:44 --> Utf8 Class Initialized
DEBUG - 2013-11-15 09:28:44 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 09:28:44 --> URI Class Initialized
DEBUG - 2013-11-15 09:28:44 --> Router Class Initialized
DEBUG - 2013-11-15 09:28:44 --> No URI present. Default controller set.
DEBUG - 2013-11-15 09:28:44 --> Output Class Initialized
DEBUG - 2013-11-15 09:28:44 --> Security Class Initialized
DEBUG - 2013-11-15 09:28:44 --> Input Class Initialized
DEBUG - 2013-11-15 09:28:44 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 09:28:44 --> Language Class Initialized
DEBUG - 2013-11-15 09:28:44 --> Loader Class Initialized
DEBUG - 2013-11-15 09:28:44 --> Helper loaded: form_helper
DEBUG - 2013-11-15 09:28:44 --> Helper loaded: url_helper
DEBUG - 2013-11-15 09:28:44 --> Helper loaded: html_helper
DEBUG - 2013-11-15 09:28:44 --> Database Driver Class Initialized
DEBUG - 2013-11-15 09:28:45 --> Session Class Initialized
DEBUG - 2013-11-15 09:28:45 --> Helper loaded: string_helper
DEBUG - 2013-11-15 09:28:45 --> A session cookie was not found.
DEBUG - 2013-11-15 09:28:45 --> Session routines successfully run
DEBUG - 2013-11-15 09:28:45 --> Form Validation Class Initialized
DEBUG - 2013-11-15 09:28:45 --> Controller Class Initialized
INFO  - 2013-11-15 09:28:45 --> the form message==>
INFO  - 2013-11-15 09:28:45 --> The session id is ========>5f257d0802a5308f0c905c436388b176 and the member id is =======>
INFO  - 2013-11-15 09:28:45 --> after the retrieving session list.................//////////
DEBUG - 2013-11-15 09:28:45 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-11-15 09:28:45 --> Final output sent to browser
DEBUG - 2013-11-15 09:28:45 --> Total execution time: 1.2881
DEBUG - 2013-11-15 09:32:06 --> Config Class Initialized
DEBUG - 2013-11-15 09:32:06 --> Hooks Class Initialized
DEBUG - 2013-11-15 09:32:06 --> Utf8 Class Initialized
DEBUG - 2013-11-15 09:32:06 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 09:32:06 --> URI Class Initialized
DEBUG - 2013-11-15 09:32:06 --> Router Class Initialized
DEBUG - 2013-11-15 09:32:06 --> Output Class Initialized
DEBUG - 2013-11-15 09:32:06 --> Security Class Initialized
DEBUG - 2013-11-15 09:32:06 --> Input Class Initialized
DEBUG - 2013-11-15 09:32:06 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 09:32:06 --> Language Class Initialized
DEBUG - 2013-11-15 09:32:06 --> Loader Class Initialized
DEBUG - 2013-11-15 09:32:06 --> Helper loaded: form_helper
DEBUG - 2013-11-15 09:32:06 --> Helper loaded: url_helper
DEBUG - 2013-11-15 09:32:06 --> Helper loaded: html_helper
DEBUG - 2013-11-15 09:32:06 --> Database Driver Class Initialized
DEBUG - 2013-11-15 09:32:07 --> Session Class Initialized
DEBUG - 2013-11-15 09:32:07 --> Helper loaded: string_helper
DEBUG - 2013-11-15 09:32:07 --> Session routines successfully run
DEBUG - 2013-11-15 09:32:07 --> Form Validation Class Initialized
DEBUG - 2013-11-15 09:32:07 --> Controller Class Initialized
DEBUG - 2013-11-15 09:32:07 --> Model Class Initialized
DEBUG - 2013-11-15 09:32:07 --> Model Class Initialized
DEBUG - 2013-11-15 09:32:07 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 09:32:07 --> after session initialization................
INFO  - 2013-11-15 09:32:07 --> inside rays login auth.............
DEBUG - 2013-11-15 09:32:07 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-11-15 09:32:07 --> XSS Filtering completed
DEBUG - 2013-11-15 09:32:07 --> XSS Filtering completed
INFO  - 2013-11-15 09:32:07 --> before getting the relation of member............6
INFO  - 2013-11-15 09:32:07 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-11-15 09:32:07 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-15 09:32:07 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-11-15 09:32:07 --> inside retrieving vacancy for member
INFO  - 2013-11-15 09:32:08 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-11-15 09:32:08 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-15 09:32:08 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-11-15 09:32:08 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-11-15 09:32:08 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-15 09:32:08 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-15 09:32:08 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-11-15 09:32:08 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-11-15 09:32:08 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-11-15 09:32:08 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-11-15 09:32:08 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-11-15 09:32:08 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-11-15 09:32:08 --> Final output sent to browser
DEBUG - 2013-11-15 09:32:08 --> Total execution time: 2.1411
DEBUG - 2013-11-15 09:32:08 --> Config Class Initialized
DEBUG - 2013-11-15 09:32:08 --> Hooks Class Initialized
DEBUG - 2013-11-15 09:32:08 --> Utf8 Class Initialized
DEBUG - 2013-11-15 09:32:08 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 09:32:08 --> URI Class Initialized
DEBUG - 2013-11-15 09:32:08 --> Router Class Initialized
DEBUG - 2013-11-15 09:32:08 --> Output Class Initialized
DEBUG - 2013-11-15 09:32:08 --> Security Class Initialized
DEBUG - 2013-11-15 09:32:08 --> Input Class Initialized
DEBUG - 2013-11-15 09:32:08 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 09:32:08 --> Language Class Initialized
DEBUG - 2013-11-15 09:32:08 --> Loader Class Initialized
DEBUG - 2013-11-15 09:32:08 --> Helper loaded: form_helper
DEBUG - 2013-11-15 09:32:08 --> Helper loaded: url_helper
DEBUG - 2013-11-15 09:32:08 --> Helper loaded: html_helper
DEBUG - 2013-11-15 09:32:08 --> Database Driver Class Initialized
DEBUG - 2013-11-15 09:32:09 --> Session Class Initialized
DEBUG - 2013-11-15 09:32:09 --> Helper loaded: string_helper
DEBUG - 2013-11-15 09:32:09 --> Session routines successfully run
DEBUG - 2013-11-15 09:32:09 --> Form Validation Class Initialized
DEBUG - 2013-11-15 09:32:09 --> Controller Class Initialized
DEBUG - 2013-11-15 09:32:09 --> Model Class Initialized
DEBUG - 2013-11-15 09:32:09 --> Model Class Initialized
DEBUG - 2013-11-15 09:32:09 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 09:32:09 --> after session initialization................
ERROR - 2013-11-15 09:32:09 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-15 09:32:10 --> Config Class Initialized
DEBUG - 2013-11-15 09:32:10 --> Hooks Class Initialized
DEBUG - 2013-11-15 09:32:10 --> Utf8 Class Initialized
DEBUG - 2013-11-15 09:32:10 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 09:32:10 --> URI Class Initialized
DEBUG - 2013-11-15 09:32:10 --> Router Class Initialized
ERROR - 2013-11-15 09:32:10 --> 404 Page Not Found --> css
DEBUG - 2013-11-15 09:32:16 --> Config Class Initialized
DEBUG - 2013-11-15 09:32:16 --> Hooks Class Initialized
DEBUG - 2013-11-15 09:32:16 --> Utf8 Class Initialized
DEBUG - 2013-11-15 09:32:16 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 09:32:16 --> URI Class Initialized
DEBUG - 2013-11-15 09:32:16 --> Router Class Initialized
DEBUG - 2013-11-15 09:32:16 --> Output Class Initialized
DEBUG - 2013-11-15 09:32:16 --> Security Class Initialized
DEBUG - 2013-11-15 09:32:16 --> Input Class Initialized
DEBUG - 2013-11-15 09:32:16 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 09:32:16 --> Language Class Initialized
DEBUG - 2013-11-15 09:32:16 --> Loader Class Initialized
DEBUG - 2013-11-15 09:32:16 --> Helper loaded: form_helper
DEBUG - 2013-11-15 09:32:16 --> Helper loaded: url_helper
DEBUG - 2013-11-15 09:32:16 --> Helper loaded: html_helper
DEBUG - 2013-11-15 09:32:16 --> Database Driver Class Initialized
DEBUG - 2013-11-15 09:32:17 --> Session Class Initialized
DEBUG - 2013-11-15 09:32:17 --> Helper loaded: string_helper
DEBUG - 2013-11-15 09:32:17 --> Session routines successfully run
DEBUG - 2013-11-15 09:32:17 --> Form Validation Class Initialized
DEBUG - 2013-11-15 09:32:17 --> Controller Class Initialized
DEBUG - 2013-11-15 09:32:17 --> Model Class Initialized
DEBUG - 2013-11-15 09:32:17 --> Model Class Initialized
DEBUG - 2013-11-15 09:32:17 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 09:32:17 --> after session initialization................
INFO  - 2013-11-15 09:32:17 --> article id is 1
DEBUG - 2013-11-15 09:32:17 --> Final output sent to browser
DEBUG - 2013-11-15 09:32:17 --> Total execution time: 1.1381
DEBUG - 2013-11-15 09:32:23 --> Config Class Initialized
DEBUG - 2013-11-15 09:32:23 --> Hooks Class Initialized
DEBUG - 2013-11-15 09:32:23 --> Utf8 Class Initialized
DEBUG - 2013-11-15 09:32:23 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 09:32:23 --> URI Class Initialized
DEBUG - 2013-11-15 09:32:23 --> Router Class Initialized
DEBUG - 2013-11-15 09:32:23 --> Output Class Initialized
DEBUG - 2013-11-15 09:32:23 --> Security Class Initialized
DEBUG - 2013-11-15 09:32:23 --> Input Class Initialized
DEBUG - 2013-11-15 09:32:23 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 09:32:23 --> Language Class Initialized
DEBUG - 2013-11-15 09:32:23 --> Loader Class Initialized
DEBUG - 2013-11-15 09:32:23 --> Helper loaded: form_helper
DEBUG - 2013-11-15 09:32:23 --> Helper loaded: url_helper
DEBUG - 2013-11-15 09:32:23 --> Helper loaded: html_helper
DEBUG - 2013-11-15 09:32:23 --> Database Driver Class Initialized
DEBUG - 2013-11-15 09:32:23 --> Session Class Initialized
DEBUG - 2013-11-15 09:32:23 --> Helper loaded: string_helper
DEBUG - 2013-11-15 09:32:23 --> Session routines successfully run
DEBUG - 2013-11-15 09:32:23 --> Form Validation Class Initialized
DEBUG - 2013-11-15 09:32:23 --> Controller Class Initialized
DEBUG - 2013-11-15 09:32:23 --> Model Class Initialized
DEBUG - 2013-11-15 09:32:23 --> Model Class Initialized
DEBUG - 2013-11-15 09:32:23 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 09:32:23 --> after session initialization................
INFO  - 2013-11-15 09:32:23 --> article id is 14
DEBUG - 2013-11-15 09:32:23 --> Final output sent to browser
DEBUG - 2013-11-15 09:32:23 --> Total execution time: 0.0460
DEBUG - 2013-11-15 09:32:28 --> Config Class Initialized
DEBUG - 2013-11-15 09:32:28 --> Hooks Class Initialized
DEBUG - 2013-11-15 09:32:28 --> Utf8 Class Initialized
DEBUG - 2013-11-15 09:32:28 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 09:32:28 --> URI Class Initialized
DEBUG - 2013-11-15 09:32:28 --> Router Class Initialized
DEBUG - 2013-11-15 09:32:28 --> Output Class Initialized
DEBUG - 2013-11-15 09:32:28 --> Security Class Initialized
DEBUG - 2013-11-15 09:32:28 --> Input Class Initialized
DEBUG - 2013-11-15 09:32:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 09:32:28 --> Language Class Initialized
DEBUG - 2013-11-15 09:32:28 --> Loader Class Initialized
DEBUG - 2013-11-15 09:32:28 --> Helper loaded: form_helper
DEBUG - 2013-11-15 09:32:28 --> Helper loaded: url_helper
DEBUG - 2013-11-15 09:32:28 --> Helper loaded: html_helper
DEBUG - 2013-11-15 09:32:28 --> Database Driver Class Initialized
DEBUG - 2013-11-15 09:32:28 --> Session Class Initialized
DEBUG - 2013-11-15 09:32:28 --> Helper loaded: string_helper
DEBUG - 2013-11-15 09:32:28 --> Session routines successfully run
DEBUG - 2013-11-15 09:32:28 --> Form Validation Class Initialized
DEBUG - 2013-11-15 09:32:28 --> Controller Class Initialized
DEBUG - 2013-11-15 09:32:28 --> Model Class Initialized
DEBUG - 2013-11-15 09:32:28 --> Model Class Initialized
DEBUG - 2013-11-15 09:32:28 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 09:32:28 --> after session initialization................
INFO  - 2013-11-15 09:32:28 --> last news id is 0
INFO  - 2013-11-15 09:32:28 --> SELECT a.id_article as id, a.title as newsletter_title, a.description as newsletter_description, a.guestonly as guestonly, a.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`article` a)
JOIN `member` m ON `a`.`memberid_member` = `m`.`id_member`
WHERE `a`.`id_article` <> 0
ORDER BY `a`.`id_article` desc
LIMIT 15
INFO  - 2013-11-15 09:32:28 --> after newsleters list has been clicked.................
INFO  - 2013-11-15 09:32:28 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=112&article_type=newsletter_title
INFO  - 2013-11-15 09:32:28 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=111&article_type=newsletter_title
INFO  - 2013-11-15 09:32:28 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=110&article_type=newsletter_title
INFO  - 2013-11-15 09:32:28 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=109&article_type=newsletter_title
INFO  - 2013-11-15 09:32:28 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=108&article_type=newsletter_title
INFO  - 2013-11-15 09:32:28 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=107&article_type=newsletter_title
INFO  - 2013-11-15 09:32:28 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=106&article_type=newsletter_title
INFO  - 2013-11-15 09:32:28 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=105&article_type=newsletter_title
INFO  - 2013-11-15 09:32:28 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=104&article_type=newsletter_title
INFO  - 2013-11-15 09:32:28 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=103&article_type=newsletter_title
INFO  - 2013-11-15 09:32:28 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=102&article_type=newsletter_title
INFO  - 2013-11-15 09:32:28 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=101&article_type=newsletter_title
INFO  - 2013-11-15 09:32:28 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=100&article_type=newsletter_title
INFO  - 2013-11-15 09:32:28 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=99&article_type=newsletter_title
INFO  - 2013-11-15 09:32:28 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=98&article_type=newsletter_title
DEBUG - 2013-11-15 09:32:28 --> File loaded: ../pharmaray-application/views/articles.php
DEBUG - 2013-11-15 09:32:28 --> Final output sent to browser
DEBUG - 2013-11-15 09:32:28 --> Total execution time: 0.1820
DEBUG - 2013-11-15 09:32:31 --> Config Class Initialized
DEBUG - 2013-11-15 09:32:31 --> Hooks Class Initialized
DEBUG - 2013-11-15 09:32:31 --> Utf8 Class Initialized
DEBUG - 2013-11-15 09:32:31 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 09:32:31 --> URI Class Initialized
DEBUG - 2013-11-15 09:32:31 --> Router Class Initialized
DEBUG - 2013-11-15 09:32:31 --> Output Class Initialized
DEBUG - 2013-11-15 09:32:31 --> Security Class Initialized
DEBUG - 2013-11-15 09:32:31 --> Input Class Initialized
DEBUG - 2013-11-15 09:32:31 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 09:32:31 --> Language Class Initialized
DEBUG - 2013-11-15 09:32:31 --> Loader Class Initialized
DEBUG - 2013-11-15 09:32:31 --> Helper loaded: form_helper
DEBUG - 2013-11-15 09:32:31 --> Helper loaded: url_helper
DEBUG - 2013-11-15 09:32:31 --> Helper loaded: html_helper
DEBUG - 2013-11-15 09:32:31 --> Database Driver Class Initialized
DEBUG - 2013-11-15 09:32:31 --> Session Class Initialized
DEBUG - 2013-11-15 09:32:31 --> Helper loaded: string_helper
DEBUG - 2013-11-15 09:32:31 --> Session routines successfully run
DEBUG - 2013-11-15 09:32:31 --> Form Validation Class Initialized
DEBUG - 2013-11-15 09:32:31 --> Controller Class Initialized
DEBUG - 2013-11-15 09:32:31 --> Model Class Initialized
DEBUG - 2013-11-15 09:32:31 --> Model Class Initialized
DEBUG - 2013-11-15 09:32:31 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 09:32:31 --> after session initialization................
INFO  - 2013-11-15 09:32:31 --> article id is 111
DEBUG - 2013-11-15 09:32:31 --> Final output sent to browser
DEBUG - 2013-11-15 09:32:31 --> Total execution time: 0.0570
DEBUG - 2013-11-15 09:32:36 --> Config Class Initialized
DEBUG - 2013-11-15 09:32:36 --> Hooks Class Initialized
DEBUG - 2013-11-15 09:32:36 --> Utf8 Class Initialized
DEBUG - 2013-11-15 09:32:36 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 09:32:36 --> URI Class Initialized
DEBUG - 2013-11-15 09:32:36 --> Router Class Initialized
DEBUG - 2013-11-15 09:32:36 --> Output Class Initialized
DEBUG - 2013-11-15 09:32:36 --> Security Class Initialized
DEBUG - 2013-11-15 09:32:36 --> Input Class Initialized
DEBUG - 2013-11-15 09:32:36 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 09:32:36 --> Language Class Initialized
DEBUG - 2013-11-15 09:32:36 --> Loader Class Initialized
DEBUG - 2013-11-15 09:32:36 --> Helper loaded: form_helper
DEBUG - 2013-11-15 09:32:36 --> Helper loaded: url_helper
DEBUG - 2013-11-15 09:32:36 --> Helper loaded: html_helper
DEBUG - 2013-11-15 09:32:36 --> Database Driver Class Initialized
DEBUG - 2013-11-15 09:32:36 --> Session Class Initialized
DEBUG - 2013-11-15 09:32:36 --> Helper loaded: string_helper
DEBUG - 2013-11-15 09:32:36 --> Session routines successfully run
DEBUG - 2013-11-15 09:32:36 --> Form Validation Class Initialized
DEBUG - 2013-11-15 09:32:36 --> Controller Class Initialized
DEBUG - 2013-11-15 09:32:36 --> Model Class Initialized
DEBUG - 2013-11-15 09:32:36 --> Model Class Initialized
DEBUG - 2013-11-15 09:32:36 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 09:32:36 --> after session initialization................
INFO  - 2013-11-15 09:32:36 --> last article id is 98
DEBUG - 2013-11-15 09:32:36 --> Final output sent to browser
DEBUG - 2013-11-15 09:32:36 --> Total execution time: 0.0730
DEBUG - 2013-11-15 09:32:36 --> Config Class Initialized
DEBUG - 2013-11-15 09:32:36 --> Hooks Class Initialized
DEBUG - 2013-11-15 09:32:36 --> Utf8 Class Initialized
DEBUG - 2013-11-15 09:32:36 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 09:32:36 --> URI Class Initialized
DEBUG - 2013-11-15 09:32:36 --> Router Class Initialized
DEBUG - 2013-11-15 09:32:36 --> Output Class Initialized
DEBUG - 2013-11-15 09:32:36 --> Security Class Initialized
DEBUG - 2013-11-15 09:32:36 --> Input Class Initialized
DEBUG - 2013-11-15 09:32:42 --> Config Class Initialized
DEBUG - 2013-11-15 09:32:42 --> Hooks Class Initialized
DEBUG - 2013-11-15 09:32:42 --> Utf8 Class Initialized
DEBUG - 2013-11-15 09:32:42 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 09:32:42 --> URI Class Initialized
DEBUG - 2013-11-15 09:32:42 --> Router Class Initialized
DEBUG - 2013-11-15 09:32:42 --> Output Class Initialized
DEBUG - 2013-11-15 09:32:42 --> Security Class Initialized
DEBUG - 2013-11-15 09:32:42 --> Input Class Initialized
DEBUG - 2013-11-15 09:32:42 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 09:32:42 --> Language Class Initialized
DEBUG - 2013-11-15 09:32:42 --> Loader Class Initialized
DEBUG - 2013-11-15 09:32:42 --> Helper loaded: form_helper
DEBUG - 2013-11-15 09:32:42 --> Helper loaded: url_helper
DEBUG - 2013-11-15 09:32:42 --> Helper loaded: html_helper
DEBUG - 2013-11-15 09:32:42 --> Database Driver Class Initialized
DEBUG - 2013-11-15 09:32:42 --> Session Class Initialized
DEBUG - 2013-11-15 09:32:42 --> Helper loaded: string_helper
DEBUG - 2013-11-15 09:32:42 --> Session routines successfully run
DEBUG - 2013-11-15 09:32:42 --> Form Validation Class Initialized
DEBUG - 2013-11-15 09:32:42 --> Controller Class Initialized
DEBUG - 2013-11-15 09:32:42 --> Model Class Initialized
DEBUG - 2013-11-15 09:32:42 --> Model Class Initialized
DEBUG - 2013-11-15 09:32:42 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 09:32:42 --> after session initialization................
INFO  - 2013-11-15 09:32:42 --> inside retrieve most commented forum topic 
INFO  - 2013-11-15 09:32:42 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
INFO  - 2013-11-15 09:32:42 --> inside retrieving first 20 topics 
INFO  - 2013-11-15 09:32:42 --> SELECT `t`.`id_topicforum`, upper(t.name) as name, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
LIMIT 20
INFO  - 2013-11-15 09:32:42 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-15 09:32:42 --> SELECT `ff`.`id_forum` as id, `ff`.`name`, count(f.id_forum) as sub_forum
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` is null 
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`
INFO  - 2013-11-15 09:32:42 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-15 09:32:42 --> inside retrieving comments topic id and drug id is 1
INFO  - 2013-11-15 09:32:42 --> SELECT `tc`.`id_topiccomment`, `tc`.`comment`, `tc`.`timecreated`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-15 09:32:42 --> inside retrieving comments topic id 1
INFO  - 2013-11-15 09:32:42 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
INFO  - 2013-11-15 09:32:42 --> after forums has been clicked.................
INFO  - 2013-11-15 09:32:42 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-11-15 09:32:42 --> File loaded: ../pharmaray-application/views/forum.php
DEBUG - 2013-11-15 09:32:42 --> Final output sent to browser
DEBUG - 2013-11-15 09:32:42 --> Total execution time: 0.2230
DEBUG - 2013-11-15 09:32:43 --> Config Class Initialized
DEBUG - 2013-11-15 09:32:43 --> Hooks Class Initialized
DEBUG - 2013-11-15 09:32:43 --> Utf8 Class Initialized
DEBUG - 2013-11-15 09:32:43 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 09:32:43 --> URI Class Initialized
DEBUG - 2013-11-15 09:32:43 --> Router Class Initialized
DEBUG - 2013-11-15 09:32:43 --> Output Class Initialized
DEBUG - 2013-11-15 09:32:43 --> Security Class Initialized
DEBUG - 2013-11-15 09:32:43 --> Input Class Initialized
DEBUG - 2013-11-15 09:32:43 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 09:32:43 --> Language Class Initialized
DEBUG - 2013-11-15 09:32:43 --> Loader Class Initialized
DEBUG - 2013-11-15 09:32:43 --> Helper loaded: form_helper
DEBUG - 2013-11-15 09:32:43 --> Helper loaded: url_helper
DEBUG - 2013-11-15 09:32:43 --> Helper loaded: html_helper
DEBUG - 2013-11-15 09:32:43 --> Database Driver Class Initialized
DEBUG - 2013-11-15 09:32:44 --> Session Class Initialized
DEBUG - 2013-11-15 09:32:44 --> Helper loaded: string_helper
DEBUG - 2013-11-15 09:32:44 --> Session routines successfully run
DEBUG - 2013-11-15 09:32:44 --> Form Validation Class Initialized
DEBUG - 2013-11-15 09:32:44 --> Controller Class Initialized
DEBUG - 2013-11-15 09:32:44 --> Model Class Initialized
DEBUG - 2013-11-15 09:32:44 --> Model Class Initialized
DEBUG - 2013-11-15 09:32:44 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 09:32:44 --> after session initialization................
ERROR - 2013-11-15 09:32:44 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-15 09:32:44 --> Config Class Initialized
DEBUG - 2013-11-15 09:32:44 --> Hooks Class Initialized
DEBUG - 2013-11-15 09:32:44 --> Utf8 Class Initialized
DEBUG - 2013-11-15 09:32:44 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 09:32:44 --> URI Class Initialized
DEBUG - 2013-11-15 09:32:44 --> Router Class Initialized
ERROR - 2013-11-15 09:32:44 --> 404 Page Not Found --> css
DEBUG - 2013-11-15 09:32:54 --> Config Class Initialized
DEBUG - 2013-11-15 09:32:54 --> Hooks Class Initialized
DEBUG - 2013-11-15 09:32:54 --> Utf8 Class Initialized
DEBUG - 2013-11-15 09:32:54 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 09:32:54 --> URI Class Initialized
DEBUG - 2013-11-15 09:32:54 --> Router Class Initialized
DEBUG - 2013-11-15 09:32:54 --> Output Class Initialized
DEBUG - 2013-11-15 09:32:54 --> Security Class Initialized
DEBUG - 2013-11-15 09:32:54 --> Input Class Initialized
DEBUG - 2013-11-15 09:32:54 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 09:32:54 --> Language Class Initialized
DEBUG - 2013-11-15 09:32:54 --> Loader Class Initialized
DEBUG - 2013-11-15 09:32:54 --> Helper loaded: form_helper
DEBUG - 2013-11-15 09:32:54 --> Helper loaded: url_helper
DEBUG - 2013-11-15 09:32:54 --> Helper loaded: html_helper
DEBUG - 2013-11-15 09:32:54 --> Database Driver Class Initialized
DEBUG - 2013-11-15 09:32:54 --> Session Class Initialized
DEBUG - 2013-11-15 09:32:54 --> Helper loaded: string_helper
DEBUG - 2013-11-15 09:32:54 --> Session routines successfully run
DEBUG - 2013-11-15 09:32:54 --> Form Validation Class Initialized
DEBUG - 2013-11-15 09:32:54 --> Controller Class Initialized
DEBUG - 2013-11-15 09:32:54 --> Model Class Initialized
DEBUG - 2013-11-15 09:32:54 --> Model Class Initialized
DEBUG - 2013-11-15 09:32:54 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 09:32:54 --> after session initialization................
INFO  - 2013-11-15 09:32:54 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 09:32:54 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 09:32:54 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 09:32:54 --> inside retrieving locations 
INFO  - 2013-11-15 09:32:54 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 09:32:54 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 09:32:54 --> Final output sent to browser
DEBUG - 2013-11-15 09:32:54 --> Total execution time: 0.1410
DEBUG - 2013-11-15 09:32:57 --> Config Class Initialized
DEBUG - 2013-11-15 09:32:57 --> Hooks Class Initialized
DEBUG - 2013-11-15 09:32:57 --> Utf8 Class Initialized
DEBUG - 2013-11-15 09:32:57 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 09:32:57 --> URI Class Initialized
DEBUG - 2013-11-15 09:32:57 --> Router Class Initialized
DEBUG - 2013-11-15 09:32:57 --> Output Class Initialized
DEBUG - 2013-11-15 09:32:57 --> Security Class Initialized
DEBUG - 2013-11-15 09:32:57 --> Input Class Initialized
DEBUG - 2013-11-15 09:32:57 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 09:32:57 --> Language Class Initialized
DEBUG - 2013-11-15 09:32:57 --> Loader Class Initialized
DEBUG - 2013-11-15 09:32:57 --> Helper loaded: form_helper
DEBUG - 2013-11-15 09:32:57 --> Helper loaded: url_helper
DEBUG - 2013-11-15 09:32:57 --> Helper loaded: html_helper
DEBUG - 2013-11-15 09:32:57 --> Database Driver Class Initialized
DEBUG - 2013-11-15 09:32:57 --> Session Class Initialized
DEBUG - 2013-11-15 09:32:57 --> Helper loaded: string_helper
DEBUG - 2013-11-15 09:32:57 --> Session routines successfully run
DEBUG - 2013-11-15 09:32:57 --> Form Validation Class Initialized
DEBUG - 2013-11-15 09:32:57 --> Controller Class Initialized
DEBUG - 2013-11-15 09:32:57 --> Model Class Initialized
DEBUG - 2013-11-15 09:32:57 --> Model Class Initialized
DEBUG - 2013-11-15 09:32:57 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 09:32:57 --> after session initialization................
INFO  - 2013-11-15 09:32:57 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>4
INFO  - 2013-11-15 09:32:57 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` =  '4'
DEBUG - 2013-11-15 09:32:57 --> Final output sent to browser
DEBUG - 2013-11-15 09:32:57 --> Total execution time: 0.0530
DEBUG - 2013-11-15 09:33:05 --> Config Class Initialized
DEBUG - 2013-11-15 09:33:05 --> Hooks Class Initialized
DEBUG - 2013-11-15 09:33:05 --> Utf8 Class Initialized
DEBUG - 2013-11-15 09:33:05 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 09:33:05 --> URI Class Initialized
DEBUG - 2013-11-15 09:33:05 --> Router Class Initialized
DEBUG - 2013-11-15 09:33:05 --> Output Class Initialized
DEBUG - 2013-11-15 09:33:05 --> Security Class Initialized
DEBUG - 2013-11-15 09:33:05 --> Input Class Initialized
DEBUG - 2013-11-15 09:33:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 09:33:05 --> Language Class Initialized
DEBUG - 2013-11-15 09:33:05 --> Loader Class Initialized
DEBUG - 2013-11-15 09:33:05 --> Helper loaded: form_helper
DEBUG - 2013-11-15 09:33:05 --> Helper loaded: url_helper
DEBUG - 2013-11-15 09:33:05 --> Helper loaded: html_helper
DEBUG - 2013-11-15 09:33:05 --> Database Driver Class Initialized
DEBUG - 2013-11-15 09:33:05 --> Session Class Initialized
DEBUG - 2013-11-15 09:33:05 --> Helper loaded: string_helper
DEBUG - 2013-11-15 09:33:05 --> Session routines successfully run
DEBUG - 2013-11-15 09:33:05 --> Form Validation Class Initialized
DEBUG - 2013-11-15 09:33:05 --> Controller Class Initialized
DEBUG - 2013-11-15 09:33:05 --> Model Class Initialized
DEBUG - 2013-11-15 09:33:05 --> Model Class Initialized
DEBUG - 2013-11-15 09:33:05 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 09:33:05 --> after session initialization................
INFO  - 2013-11-15 09:33:05 --> inside retrieving pharmacy by location id 2
INFO  - 2013-11-15 09:33:05 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '2'
ORDER BY `p`.`name` asc
LIMIT 25
DEBUG - 2013-11-15 09:33:05 --> Final output sent to browser
DEBUG - 2013-11-15 09:33:05 --> Total execution time: 0.0510
DEBUG - 2013-11-15 09:33:07 --> Config Class Initialized
DEBUG - 2013-11-15 09:33:07 --> Hooks Class Initialized
DEBUG - 2013-11-15 09:33:07 --> Utf8 Class Initialized
DEBUG - 2013-11-15 09:33:07 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 09:33:07 --> URI Class Initialized
DEBUG - 2013-11-15 09:33:07 --> Router Class Initialized
DEBUG - 2013-11-15 09:33:07 --> Output Class Initialized
DEBUG - 2013-11-15 09:33:07 --> Security Class Initialized
DEBUG - 2013-11-15 09:33:07 --> Input Class Initialized
DEBUG - 2013-11-15 09:33:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 09:33:07 --> Language Class Initialized
DEBUG - 2013-11-15 09:33:07 --> Loader Class Initialized
DEBUG - 2013-11-15 09:33:07 --> Helper loaded: form_helper
DEBUG - 2013-11-15 09:33:07 --> Helper loaded: url_helper
DEBUG - 2013-11-15 09:33:07 --> Helper loaded: html_helper
DEBUG - 2013-11-15 09:33:07 --> Database Driver Class Initialized
DEBUG - 2013-11-15 09:33:07 --> Session Class Initialized
DEBUG - 2013-11-15 09:33:07 --> Helper loaded: string_helper
DEBUG - 2013-11-15 09:33:07 --> Session routines successfully run
DEBUG - 2013-11-15 09:33:07 --> Form Validation Class Initialized
DEBUG - 2013-11-15 09:33:07 --> Controller Class Initialized
DEBUG - 2013-11-15 09:33:07 --> Model Class Initialized
DEBUG - 2013-11-15 09:33:07 --> Model Class Initialized
DEBUG - 2013-11-15 09:33:07 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 09:33:07 --> after session initialization................
INFO  - 2013-11-15 09:33:07 --> inside retrieving pharmacy by location id 1
INFO  - 2013-11-15 09:33:07 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '1'
ORDER BY `p`.`name` asc
LIMIT 25
DEBUG - 2013-11-15 09:33:07 --> Final output sent to browser
DEBUG - 2013-11-15 09:33:07 --> Total execution time: 0.0540
DEBUG - 2013-11-15 12:07:46 --> Config Class Initialized
DEBUG - 2013-11-15 12:07:46 --> Hooks Class Initialized
DEBUG - 2013-11-15 12:07:46 --> Utf8 Class Initialized
DEBUG - 2013-11-15 12:07:46 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 12:07:46 --> URI Class Initialized
DEBUG - 2013-11-15 12:07:46 --> Router Class Initialized
DEBUG - 2013-11-15 12:07:46 --> Output Class Initialized
DEBUG - 2013-11-15 12:07:46 --> Security Class Initialized
DEBUG - 2013-11-15 12:07:46 --> Input Class Initialized
DEBUG - 2013-11-15 12:07:46 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 12:07:46 --> Language Class Initialized
DEBUG - 2013-11-15 12:07:46 --> Loader Class Initialized
DEBUG - 2013-11-15 12:07:46 --> Helper loaded: form_helper
DEBUG - 2013-11-15 12:07:46 --> Helper loaded: url_helper
DEBUG - 2013-11-15 12:07:46 --> Helper loaded: html_helper
DEBUG - 2013-11-15 12:07:46 --> Database Driver Class Initialized
DEBUG - 2013-11-15 12:07:46 --> Session Class Initialized
DEBUG - 2013-11-15 12:07:46 --> Helper loaded: string_helper
DEBUG - 2013-11-15 12:07:46 --> A session cookie was not found.
DEBUG - 2013-11-15 12:07:46 --> Session routines successfully run
DEBUG - 2013-11-15 12:07:46 --> Form Validation Class Initialized
DEBUG - 2013-11-15 12:07:46 --> Controller Class Initialized
DEBUG - 2013-11-15 12:07:46 --> Model Class Initialized
DEBUG - 2013-11-15 12:07:46 --> Model Class Initialized
DEBUG - 2013-11-15 12:07:46 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 12:07:46 --> after session initialization................
INFO  - 2013-11-15 12:07:46 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 12:07:46 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 12:07:46 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 12:07:46 --> inside retrieving locations 
INFO  - 2013-11-15 12:07:46 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 12:07:46 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 12:07:46 --> Final output sent to browser
DEBUG - 2013-11-15 12:07:46 --> Total execution time: 0.0930
DEBUG - 2013-11-15 12:07:49 --> Config Class Initialized
DEBUG - 2013-11-15 12:07:49 --> Hooks Class Initialized
DEBUG - 2013-11-15 12:07:49 --> Utf8 Class Initialized
DEBUG - 2013-11-15 12:07:49 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 12:07:49 --> URI Class Initialized
DEBUG - 2013-11-15 12:07:49 --> Router Class Initialized
DEBUG - 2013-11-15 12:07:49 --> Output Class Initialized
DEBUG - 2013-11-15 12:07:49 --> Security Class Initialized
DEBUG - 2013-11-15 12:07:49 --> Input Class Initialized
DEBUG - 2013-11-15 12:07:49 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 12:07:49 --> Language Class Initialized
DEBUG - 2013-11-15 12:07:49 --> Loader Class Initialized
DEBUG - 2013-11-15 12:07:49 --> Helper loaded: form_helper
DEBUG - 2013-11-15 12:07:49 --> Helper loaded: url_helper
DEBUG - 2013-11-15 12:07:49 --> Helper loaded: html_helper
DEBUG - 2013-11-15 12:07:49 --> Database Driver Class Initialized
DEBUG - 2013-11-15 12:07:49 --> Session Class Initialized
DEBUG - 2013-11-15 12:07:49 --> Helper loaded: string_helper
DEBUG - 2013-11-15 12:07:49 --> Session routines successfully run
DEBUG - 2013-11-15 12:07:49 --> Form Validation Class Initialized
DEBUG - 2013-11-15 12:07:49 --> Controller Class Initialized
DEBUG - 2013-11-15 12:07:49 --> Model Class Initialized
DEBUG - 2013-11-15 12:07:49 --> Model Class Initialized
DEBUG - 2013-11-15 12:07:49 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 12:07:49 --> after session initialization................
ERROR - 2013-11-15 12:07:49 --> Severity: Notice  --> Undefined variable: pharmacyid C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 533
INFO  - 2013-11-15 12:07:49 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>
INFO  - 2013-11-15 12:07:49 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` =  ''
DEBUG - 2013-11-15 12:07:49 --> Final output sent to browser
DEBUG - 2013-11-15 12:07:49 --> Total execution time: 0.0790
DEBUG - 2013-11-15 12:13:02 --> Config Class Initialized
DEBUG - 2013-11-15 12:13:02 --> Hooks Class Initialized
DEBUG - 2013-11-15 12:13:02 --> Utf8 Class Initialized
DEBUG - 2013-11-15 12:13:02 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 12:13:02 --> URI Class Initialized
DEBUG - 2013-11-15 12:13:02 --> Router Class Initialized
DEBUG - 2013-11-15 12:13:02 --> Output Class Initialized
DEBUG - 2013-11-15 12:13:02 --> Security Class Initialized
DEBUG - 2013-11-15 12:13:02 --> Input Class Initialized
DEBUG - 2013-11-15 12:13:02 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 12:13:02 --> Language Class Initialized
DEBUG - 2013-11-15 12:13:02 --> Loader Class Initialized
DEBUG - 2013-11-15 12:13:02 --> Helper loaded: form_helper
DEBUG - 2013-11-15 12:13:02 --> Helper loaded: url_helper
DEBUG - 2013-11-15 12:13:02 --> Helper loaded: html_helper
DEBUG - 2013-11-15 12:13:02 --> Database Driver Class Initialized
DEBUG - 2013-11-15 12:13:02 --> Session Class Initialized
DEBUG - 2013-11-15 12:13:02 --> Helper loaded: string_helper
DEBUG - 2013-11-15 12:13:02 --> Session routines successfully run
DEBUG - 2013-11-15 12:13:02 --> Form Validation Class Initialized
DEBUG - 2013-11-15 12:13:02 --> Controller Class Initialized
DEBUG - 2013-11-15 12:13:02 --> Model Class Initialized
DEBUG - 2013-11-15 12:13:02 --> Model Class Initialized
DEBUG - 2013-11-15 12:13:02 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 12:13:02 --> after session initialization................
INFO  - 2013-11-15 12:13:02 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 12:13:02 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 12:13:02 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 12:13:02 --> inside retrieving locations 
INFO  - 2013-11-15 12:13:02 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 12:13:02 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 12:13:02 --> Final output sent to browser
DEBUG - 2013-11-15 12:13:02 --> Total execution time: 0.0500
DEBUG - 2013-11-15 12:13:07 --> Config Class Initialized
DEBUG - 2013-11-15 12:13:07 --> Hooks Class Initialized
DEBUG - 2013-11-15 12:13:07 --> Utf8 Class Initialized
DEBUG - 2013-11-15 12:13:07 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 12:13:07 --> URI Class Initialized
DEBUG - 2013-11-15 12:13:07 --> Router Class Initialized
DEBUG - 2013-11-15 12:13:07 --> Output Class Initialized
DEBUG - 2013-11-15 12:13:07 --> Security Class Initialized
DEBUG - 2013-11-15 12:13:07 --> Input Class Initialized
DEBUG - 2013-11-15 12:13:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 12:13:07 --> Language Class Initialized
DEBUG - 2013-11-15 12:13:07 --> Loader Class Initialized
DEBUG - 2013-11-15 12:13:07 --> Helper loaded: form_helper
DEBUG - 2013-11-15 12:13:07 --> Helper loaded: url_helper
DEBUG - 2013-11-15 12:13:07 --> Helper loaded: html_helper
DEBUG - 2013-11-15 12:13:07 --> Database Driver Class Initialized
DEBUG - 2013-11-15 12:13:07 --> Session Class Initialized
DEBUG - 2013-11-15 12:13:07 --> Helper loaded: string_helper
DEBUG - 2013-11-15 12:13:07 --> Session routines successfully run
DEBUG - 2013-11-15 12:13:07 --> Form Validation Class Initialized
DEBUG - 2013-11-15 12:13:07 --> Controller Class Initialized
DEBUG - 2013-11-15 12:13:07 --> Model Class Initialized
DEBUG - 2013-11-15 12:13:07 --> Model Class Initialized
DEBUG - 2013-11-15 12:13:07 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 12:13:07 --> after session initialization................
ERROR - 2013-11-15 12:13:07 --> Severity: Notice  --> Undefined variable: pharmacyid C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 533
INFO  - 2013-11-15 12:13:07 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>
INFO  - 2013-11-15 12:13:07 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` =  ''
DEBUG - 2013-11-15 12:13:07 --> Final output sent to browser
DEBUG - 2013-11-15 12:13:07 --> Total execution time: 0.0500
DEBUG - 2013-11-15 12:13:27 --> Config Class Initialized
DEBUG - 2013-11-15 12:13:27 --> Hooks Class Initialized
DEBUG - 2013-11-15 12:13:27 --> Utf8 Class Initialized
DEBUG - 2013-11-15 12:13:27 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 12:13:27 --> URI Class Initialized
DEBUG - 2013-11-15 12:13:27 --> Router Class Initialized
DEBUG - 2013-11-15 12:13:27 --> Output Class Initialized
DEBUG - 2013-11-15 12:13:27 --> Security Class Initialized
DEBUG - 2013-11-15 12:13:27 --> Input Class Initialized
DEBUG - 2013-11-15 12:13:27 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 12:13:27 --> Language Class Initialized
DEBUG - 2013-11-15 12:13:27 --> Loader Class Initialized
DEBUG - 2013-11-15 12:13:27 --> Helper loaded: form_helper
DEBUG - 2013-11-15 12:13:27 --> Helper loaded: url_helper
DEBUG - 2013-11-15 12:13:27 --> Helper loaded: html_helper
DEBUG - 2013-11-15 12:13:27 --> Database Driver Class Initialized
DEBUG - 2013-11-15 12:13:27 --> Session Class Initialized
DEBUG - 2013-11-15 12:13:27 --> Helper loaded: string_helper
DEBUG - 2013-11-15 12:13:27 --> Session routines successfully run
DEBUG - 2013-11-15 12:13:27 --> Form Validation Class Initialized
DEBUG - 2013-11-15 12:13:27 --> Controller Class Initialized
DEBUG - 2013-11-15 12:13:27 --> Model Class Initialized
DEBUG - 2013-11-15 12:13:27 --> Model Class Initialized
DEBUG - 2013-11-15 12:13:27 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 12:13:27 --> after session initialization................
INFO  - 2013-11-15 12:13:27 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 12:13:27 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 12:13:27 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 12:13:27 --> inside retrieving locations 
INFO  - 2013-11-15 12:13:27 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 12:13:27 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 12:13:27 --> Final output sent to browser
DEBUG - 2013-11-15 12:13:27 --> Total execution time: 0.0500
DEBUG - 2013-11-15 12:13:29 --> Config Class Initialized
DEBUG - 2013-11-15 12:13:29 --> Hooks Class Initialized
DEBUG - 2013-11-15 12:13:29 --> Utf8 Class Initialized
DEBUG - 2013-11-15 12:13:29 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 12:13:29 --> URI Class Initialized
DEBUG - 2013-11-15 12:13:29 --> Router Class Initialized
DEBUG - 2013-11-15 12:13:29 --> Output Class Initialized
DEBUG - 2013-11-15 12:13:29 --> Security Class Initialized
DEBUG - 2013-11-15 12:13:29 --> Input Class Initialized
DEBUG - 2013-11-15 12:13:29 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 12:13:29 --> Language Class Initialized
DEBUG - 2013-11-15 12:13:29 --> Loader Class Initialized
DEBUG - 2013-11-15 12:13:29 --> Helper loaded: form_helper
DEBUG - 2013-11-15 12:13:29 --> Helper loaded: url_helper
DEBUG - 2013-11-15 12:13:29 --> Helper loaded: html_helper
DEBUG - 2013-11-15 12:13:29 --> Database Driver Class Initialized
DEBUG - 2013-11-15 12:13:29 --> Session Class Initialized
DEBUG - 2013-11-15 12:13:29 --> Helper loaded: string_helper
DEBUG - 2013-11-15 12:13:29 --> Session routines successfully run
DEBUG - 2013-11-15 12:13:29 --> Form Validation Class Initialized
DEBUG - 2013-11-15 12:13:29 --> Controller Class Initialized
DEBUG - 2013-11-15 12:13:29 --> Model Class Initialized
DEBUG - 2013-11-15 12:13:29 --> Model Class Initialized
DEBUG - 2013-11-15 12:13:29 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 12:13:29 --> after session initialization................
INFO  - 2013-11-15 12:13:29 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 12:13:29 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 12:13:29 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 12:13:29 --> inside retrieving locations 
INFO  - 2013-11-15 12:13:29 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 12:13:29 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 12:13:29 --> Final output sent to browser
DEBUG - 2013-11-15 12:13:29 --> Total execution time: 0.0560
DEBUG - 2013-11-15 12:13:30 --> Config Class Initialized
DEBUG - 2013-11-15 12:13:30 --> Hooks Class Initialized
DEBUG - 2013-11-15 12:13:30 --> Utf8 Class Initialized
DEBUG - 2013-11-15 12:13:30 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 12:13:30 --> URI Class Initialized
DEBUG - 2013-11-15 12:13:30 --> Router Class Initialized
DEBUG - 2013-11-15 12:13:30 --> Output Class Initialized
DEBUG - 2013-11-15 12:13:30 --> Security Class Initialized
DEBUG - 2013-11-15 12:13:30 --> Input Class Initialized
DEBUG - 2013-11-15 12:13:30 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 12:13:30 --> Language Class Initialized
DEBUG - 2013-11-15 12:13:30 --> Loader Class Initialized
DEBUG - 2013-11-15 12:13:30 --> Helper loaded: form_helper
DEBUG - 2013-11-15 12:13:30 --> Helper loaded: url_helper
DEBUG - 2013-11-15 12:13:30 --> Helper loaded: html_helper
DEBUG - 2013-11-15 12:13:30 --> Database Driver Class Initialized
DEBUG - 2013-11-15 12:13:30 --> Session Class Initialized
DEBUG - 2013-11-15 12:13:30 --> Helper loaded: string_helper
DEBUG - 2013-11-15 12:13:30 --> Session routines successfully run
DEBUG - 2013-11-15 12:13:30 --> Form Validation Class Initialized
DEBUG - 2013-11-15 12:13:30 --> Controller Class Initialized
DEBUG - 2013-11-15 12:13:30 --> Model Class Initialized
DEBUG - 2013-11-15 12:13:30 --> Model Class Initialized
DEBUG - 2013-11-15 12:13:30 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 12:13:30 --> after session initialization................
INFO  - 2013-11-15 12:13:30 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 12:13:30 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 12:13:30 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 12:13:30 --> inside retrieving locations 
INFO  - 2013-11-15 12:13:30 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 12:13:30 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 12:13:30 --> Final output sent to browser
DEBUG - 2013-11-15 12:13:30 --> Total execution time: 0.0430
DEBUG - 2013-11-15 12:14:21 --> Config Class Initialized
DEBUG - 2013-11-15 12:14:21 --> Hooks Class Initialized
DEBUG - 2013-11-15 12:14:21 --> Utf8 Class Initialized
DEBUG - 2013-11-15 12:14:21 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 12:14:21 --> URI Class Initialized
DEBUG - 2013-11-15 12:14:21 --> Router Class Initialized
DEBUG - 2013-11-15 12:14:21 --> Output Class Initialized
DEBUG - 2013-11-15 12:14:21 --> Security Class Initialized
DEBUG - 2013-11-15 12:14:21 --> Input Class Initialized
DEBUG - 2013-11-15 12:14:21 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 12:14:21 --> Language Class Initialized
DEBUG - 2013-11-15 12:14:21 --> Loader Class Initialized
DEBUG - 2013-11-15 12:14:21 --> Helper loaded: form_helper
DEBUG - 2013-11-15 12:14:21 --> Helper loaded: url_helper
DEBUG - 2013-11-15 12:14:21 --> Helper loaded: html_helper
DEBUG - 2013-11-15 12:14:21 --> Database Driver Class Initialized
DEBUG - 2013-11-15 12:14:21 --> Session Class Initialized
DEBUG - 2013-11-15 12:14:21 --> Helper loaded: string_helper
DEBUG - 2013-11-15 12:14:21 --> Session routines successfully run
DEBUG - 2013-11-15 12:14:21 --> Form Validation Class Initialized
DEBUG - 2013-11-15 12:14:21 --> Controller Class Initialized
DEBUG - 2013-11-15 12:14:21 --> Model Class Initialized
DEBUG - 2013-11-15 12:14:21 --> Model Class Initialized
DEBUG - 2013-11-15 12:14:21 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 12:14:21 --> after session initialization................
ERROR - 2013-11-15 12:14:21 --> Severity: Notice  --> Undefined variable: pharmacyid C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 533
INFO  - 2013-11-15 12:14:21 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>
INFO  - 2013-11-15 12:14:21 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` =  ''
DEBUG - 2013-11-15 12:14:21 --> Final output sent to browser
DEBUG - 2013-11-15 12:14:21 --> Total execution time: 0.0530
DEBUG - 2013-11-15 12:16:14 --> Config Class Initialized
DEBUG - 2013-11-15 12:16:14 --> Hooks Class Initialized
DEBUG - 2013-11-15 12:16:14 --> Utf8 Class Initialized
DEBUG - 2013-11-15 12:16:14 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 12:16:14 --> URI Class Initialized
DEBUG - 2013-11-15 12:16:14 --> Router Class Initialized
DEBUG - 2013-11-15 12:16:14 --> Output Class Initialized
DEBUG - 2013-11-15 12:16:14 --> Security Class Initialized
DEBUG - 2013-11-15 12:16:14 --> Input Class Initialized
DEBUG - 2013-11-15 12:16:14 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 12:16:14 --> Language Class Initialized
DEBUG - 2013-11-15 12:16:14 --> Loader Class Initialized
DEBUG - 2013-11-15 12:16:14 --> Helper loaded: form_helper
DEBUG - 2013-11-15 12:16:14 --> Helper loaded: url_helper
DEBUG - 2013-11-15 12:16:14 --> Helper loaded: html_helper
DEBUG - 2013-11-15 12:16:14 --> Database Driver Class Initialized
DEBUG - 2013-11-15 12:16:14 --> Session Class Initialized
DEBUG - 2013-11-15 12:16:14 --> Helper loaded: string_helper
DEBUG - 2013-11-15 12:16:14 --> Session routines successfully run
DEBUG - 2013-11-15 12:16:14 --> Form Validation Class Initialized
DEBUG - 2013-11-15 12:16:14 --> Controller Class Initialized
DEBUG - 2013-11-15 12:16:14 --> Model Class Initialized
DEBUG - 2013-11-15 12:16:14 --> Model Class Initialized
DEBUG - 2013-11-15 12:16:14 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 12:16:14 --> after session initialization................
INFO  - 2013-11-15 12:16:14 --> last news id is 0
INFO  - 2013-11-15 12:16:14 --> SELECT a.id_article as id, a.title as newsletter_title, a.description as newsletter_description, a.guestonly as guestonly, a.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`article` a)
JOIN `member` m ON `a`.`memberid_member` = `m`.`id_member`
WHERE `a`.`id_article` <> 0
ORDER BY `a`.`id_article` desc
LIMIT 15
INFO  - 2013-11-15 12:16:14 --> after newsleters list has been clicked.................
INFO  - 2013-11-15 12:16:14 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=112&article_type=newsletter_title
INFO  - 2013-11-15 12:16:14 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=111&article_type=newsletter_title
INFO  - 2013-11-15 12:16:14 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=110&article_type=newsletter_title
INFO  - 2013-11-15 12:16:14 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=109&article_type=newsletter_title
INFO  - 2013-11-15 12:16:14 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=108&article_type=newsletter_title
INFO  - 2013-11-15 12:16:14 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=107&article_type=newsletter_title
INFO  - 2013-11-15 12:16:14 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=106&article_type=newsletter_title
INFO  - 2013-11-15 12:16:14 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=105&article_type=newsletter_title
INFO  - 2013-11-15 12:16:14 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=104&article_type=newsletter_title
INFO  - 2013-11-15 12:16:14 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=103&article_type=newsletter_title
INFO  - 2013-11-15 12:16:14 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=102&article_type=newsletter_title
INFO  - 2013-11-15 12:16:14 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=101&article_type=newsletter_title
INFO  - 2013-11-15 12:16:14 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=100&article_type=newsletter_title
INFO  - 2013-11-15 12:16:14 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=99&article_type=newsletter_title
INFO  - 2013-11-15 12:16:14 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=98&article_type=newsletter_title
DEBUG - 2013-11-15 12:16:14 --> File loaded: ../pharmaray-application/views/articles.php
DEBUG - 2013-11-15 12:16:14 --> Final output sent to browser
DEBUG - 2013-11-15 12:16:14 --> Total execution time: 0.0560
DEBUG - 2013-11-15 12:18:05 --> Config Class Initialized
DEBUG - 2013-11-15 12:18:05 --> Hooks Class Initialized
DEBUG - 2013-11-15 12:18:05 --> Utf8 Class Initialized
DEBUG - 2013-11-15 12:18:05 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 12:18:05 --> URI Class Initialized
DEBUG - 2013-11-15 12:18:05 --> Router Class Initialized
DEBUG - 2013-11-15 12:18:05 --> Output Class Initialized
DEBUG - 2013-11-15 12:18:05 --> Security Class Initialized
DEBUG - 2013-11-15 12:18:05 --> Input Class Initialized
DEBUG - 2013-11-15 12:18:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 12:18:05 --> Language Class Initialized
DEBUG - 2013-11-15 12:18:05 --> Loader Class Initialized
DEBUG - 2013-11-15 12:18:05 --> Helper loaded: form_helper
DEBUG - 2013-11-15 12:18:05 --> Helper loaded: url_helper
DEBUG - 2013-11-15 12:18:05 --> Helper loaded: html_helper
DEBUG - 2013-11-15 12:18:05 --> Database Driver Class Initialized
DEBUG - 2013-11-15 12:18:05 --> Session Class Initialized
DEBUG - 2013-11-15 12:18:05 --> Helper loaded: string_helper
DEBUG - 2013-11-15 12:18:05 --> Session routines successfully run
DEBUG - 2013-11-15 12:18:05 --> Form Validation Class Initialized
DEBUG - 2013-11-15 12:18:05 --> Controller Class Initialized
DEBUG - 2013-11-15 12:18:05 --> Model Class Initialized
DEBUG - 2013-11-15 12:18:05 --> Model Class Initialized
DEBUG - 2013-11-15 12:18:05 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 12:18:05 --> after session initialization................
INFO  - 2013-11-15 12:18:05 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 12:18:05 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 12:18:05 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 12:18:05 --> inside retrieving locations 
INFO  - 2013-11-15 12:18:05 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 12:18:05 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 12:18:05 --> Final output sent to browser
DEBUG - 2013-11-15 12:18:05 --> Total execution time: 0.0530
DEBUG - 2013-11-15 12:18:06 --> Config Class Initialized
DEBUG - 2013-11-15 12:18:06 --> Hooks Class Initialized
DEBUG - 2013-11-15 12:18:06 --> Utf8 Class Initialized
DEBUG - 2013-11-15 12:18:06 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 12:18:06 --> URI Class Initialized
DEBUG - 2013-11-15 12:18:06 --> Router Class Initialized
DEBUG - 2013-11-15 12:18:06 --> Output Class Initialized
DEBUG - 2013-11-15 12:18:06 --> Security Class Initialized
DEBUG - 2013-11-15 12:18:06 --> Input Class Initialized
DEBUG - 2013-11-15 12:18:06 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 12:18:06 --> Language Class Initialized
DEBUG - 2013-11-15 12:18:06 --> Loader Class Initialized
DEBUG - 2013-11-15 12:18:06 --> Helper loaded: form_helper
DEBUG - 2013-11-15 12:18:06 --> Helper loaded: url_helper
DEBUG - 2013-11-15 12:18:06 --> Helper loaded: html_helper
DEBUG - 2013-11-15 12:18:06 --> Database Driver Class Initialized
DEBUG - 2013-11-15 12:18:06 --> Session Class Initialized
DEBUG - 2013-11-15 12:18:06 --> Helper loaded: string_helper
DEBUG - 2013-11-15 12:18:06 --> Session routines successfully run
DEBUG - 2013-11-15 12:18:06 --> Form Validation Class Initialized
DEBUG - 2013-11-15 12:18:06 --> Controller Class Initialized
DEBUG - 2013-11-15 12:18:06 --> Model Class Initialized
DEBUG - 2013-11-15 12:18:06 --> Model Class Initialized
DEBUG - 2013-11-15 12:18:06 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 12:18:06 --> after session initialization................
INFO  - 2013-11-15 12:18:06 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 12:18:06 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 12:18:06 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 12:18:06 --> inside retrieving locations 
INFO  - 2013-11-15 12:18:06 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 12:18:06 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 12:18:06 --> Final output sent to browser
DEBUG - 2013-11-15 12:18:06 --> Total execution time: 0.0590
DEBUG - 2013-11-15 12:18:11 --> Config Class Initialized
DEBUG - 2013-11-15 12:18:11 --> Hooks Class Initialized
DEBUG - 2013-11-15 12:18:11 --> Utf8 Class Initialized
DEBUG - 2013-11-15 12:18:11 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 12:18:11 --> URI Class Initialized
DEBUG - 2013-11-15 12:18:11 --> Router Class Initialized
DEBUG - 2013-11-15 12:18:11 --> Output Class Initialized
DEBUG - 2013-11-15 12:18:11 --> Security Class Initialized
DEBUG - 2013-11-15 12:18:11 --> Input Class Initialized
DEBUG - 2013-11-15 12:18:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 12:18:11 --> Language Class Initialized
DEBUG - 2013-11-15 12:18:11 --> Loader Class Initialized
DEBUG - 2013-11-15 12:18:11 --> Helper loaded: form_helper
DEBUG - 2013-11-15 12:18:11 --> Helper loaded: url_helper
DEBUG - 2013-11-15 12:18:11 --> Helper loaded: html_helper
DEBUG - 2013-11-15 12:18:11 --> Database Driver Class Initialized
DEBUG - 2013-11-15 12:18:12 --> Session Class Initialized
DEBUG - 2013-11-15 12:18:12 --> Helper loaded: string_helper
DEBUG - 2013-11-15 12:18:12 --> Session routines successfully run
DEBUG - 2013-11-15 12:18:12 --> Form Validation Class Initialized
DEBUG - 2013-11-15 12:18:12 --> Controller Class Initialized
DEBUG - 2013-11-15 12:18:12 --> Model Class Initialized
DEBUG - 2013-11-15 12:18:12 --> Model Class Initialized
DEBUG - 2013-11-15 12:18:12 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 12:18:12 --> after session initialization................
INFO  - 2013-11-15 12:18:12 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>26
INFO  - 2013-11-15 12:18:12 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` =  '26'
DEBUG - 2013-11-15 12:18:12 --> Final output sent to browser
DEBUG - 2013-11-15 12:18:12 --> Total execution time: 0.0580
DEBUG - 2013-11-15 12:20:09 --> Config Class Initialized
DEBUG - 2013-11-15 12:20:09 --> Hooks Class Initialized
DEBUG - 2013-11-15 12:20:09 --> Utf8 Class Initialized
DEBUG - 2013-11-15 12:20:09 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 12:20:09 --> URI Class Initialized
DEBUG - 2013-11-15 12:20:09 --> Router Class Initialized
DEBUG - 2013-11-15 12:20:09 --> Output Class Initialized
DEBUG - 2013-11-15 12:20:09 --> Security Class Initialized
DEBUG - 2013-11-15 12:20:09 --> Input Class Initialized
DEBUG - 2013-11-15 12:20:09 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 12:20:09 --> Language Class Initialized
DEBUG - 2013-11-15 12:20:09 --> Loader Class Initialized
DEBUG - 2013-11-15 12:20:09 --> Helper loaded: form_helper
DEBUG - 2013-11-15 12:20:09 --> Helper loaded: url_helper
DEBUG - 2013-11-15 12:20:09 --> Helper loaded: html_helper
DEBUG - 2013-11-15 12:20:09 --> Database Driver Class Initialized
DEBUG - 2013-11-15 12:20:09 --> Session Class Initialized
DEBUG - 2013-11-15 12:20:09 --> Helper loaded: string_helper
DEBUG - 2013-11-15 12:20:09 --> Session routines successfully run
DEBUG - 2013-11-15 12:20:09 --> Form Validation Class Initialized
DEBUG - 2013-11-15 12:20:09 --> Controller Class Initialized
DEBUG - 2013-11-15 12:20:09 --> Model Class Initialized
DEBUG - 2013-11-15 12:20:09 --> Model Class Initialized
DEBUG - 2013-11-15 12:20:09 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 12:20:09 --> after session initialization................
INFO  - 2013-11-15 12:20:09 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 12:20:09 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 12:20:09 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 12:20:09 --> inside retrieving locations 
INFO  - 2013-11-15 12:20:09 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 12:20:09 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 12:20:09 --> Final output sent to browser
DEBUG - 2013-11-15 12:20:09 --> Total execution time: 0.0640
DEBUG - 2013-11-15 12:20:13 --> Config Class Initialized
DEBUG - 2013-11-15 12:20:13 --> Hooks Class Initialized
DEBUG - 2013-11-15 12:20:13 --> Utf8 Class Initialized
DEBUG - 2013-11-15 12:20:13 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 12:20:13 --> URI Class Initialized
DEBUG - 2013-11-15 12:20:13 --> Router Class Initialized
DEBUG - 2013-11-15 12:20:13 --> Output Class Initialized
DEBUG - 2013-11-15 12:20:13 --> Security Class Initialized
DEBUG - 2013-11-15 12:20:13 --> Input Class Initialized
DEBUG - 2013-11-15 12:20:13 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 12:20:13 --> Language Class Initialized
DEBUG - 2013-11-15 12:20:13 --> Loader Class Initialized
DEBUG - 2013-11-15 12:20:13 --> Helper loaded: form_helper
DEBUG - 2013-11-15 12:20:13 --> Helper loaded: url_helper
DEBUG - 2013-11-15 12:20:13 --> Helper loaded: html_helper
DEBUG - 2013-11-15 12:20:13 --> Database Driver Class Initialized
DEBUG - 2013-11-15 12:20:13 --> Session Class Initialized
DEBUG - 2013-11-15 12:20:13 --> Helper loaded: string_helper
DEBUG - 2013-11-15 12:20:13 --> Session routines successfully run
DEBUG - 2013-11-15 12:20:13 --> Form Validation Class Initialized
DEBUG - 2013-11-15 12:20:13 --> Controller Class Initialized
DEBUG - 2013-11-15 12:20:13 --> Model Class Initialized
DEBUG - 2013-11-15 12:20:13 --> Model Class Initialized
DEBUG - 2013-11-15 12:20:13 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 12:20:13 --> after session initialization................
INFO  - 2013-11-15 12:20:13 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>26
INFO  - 2013-11-15 12:20:13 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` =  '26'
DEBUG - 2013-11-15 12:20:13 --> Final output sent to browser
DEBUG - 2013-11-15 12:20:13 --> Total execution time: 0.0500
DEBUG - 2013-11-15 12:20:29 --> Config Class Initialized
DEBUG - 2013-11-15 12:20:29 --> Hooks Class Initialized
DEBUG - 2013-11-15 12:20:29 --> Utf8 Class Initialized
DEBUG - 2013-11-15 12:20:29 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 12:20:29 --> URI Class Initialized
DEBUG - 2013-11-15 12:20:29 --> Router Class Initialized
DEBUG - 2013-11-15 12:20:29 --> Output Class Initialized
DEBUG - 2013-11-15 12:20:29 --> Security Class Initialized
DEBUG - 2013-11-15 12:20:29 --> Input Class Initialized
DEBUG - 2013-11-15 12:20:29 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 12:20:29 --> Language Class Initialized
DEBUG - 2013-11-15 12:20:29 --> Loader Class Initialized
DEBUG - 2013-11-15 12:20:29 --> Helper loaded: form_helper
DEBUG - 2013-11-15 12:20:29 --> Helper loaded: url_helper
DEBUG - 2013-11-15 12:20:29 --> Helper loaded: html_helper
DEBUG - 2013-11-15 12:20:29 --> Database Driver Class Initialized
DEBUG - 2013-11-15 12:20:29 --> Session Class Initialized
DEBUG - 2013-11-15 12:20:29 --> Helper loaded: string_helper
DEBUG - 2013-11-15 12:20:29 --> Session routines successfully run
DEBUG - 2013-11-15 12:20:29 --> Form Validation Class Initialized
DEBUG - 2013-11-15 12:20:29 --> Controller Class Initialized
DEBUG - 2013-11-15 12:20:29 --> Model Class Initialized
DEBUG - 2013-11-15 12:20:29 --> Model Class Initialized
DEBUG - 2013-11-15 12:20:29 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 12:20:29 --> after session initialization................
INFO  - 2013-11-15 12:20:29 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 12:20:29 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 12:20:29 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 12:20:29 --> inside retrieving locations 
INFO  - 2013-11-15 12:20:29 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 12:20:29 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 12:20:29 --> Final output sent to browser
DEBUG - 2013-11-15 12:20:29 --> Total execution time: 0.0650
DEBUG - 2013-11-15 12:20:31 --> Config Class Initialized
DEBUG - 2013-11-15 12:20:31 --> Hooks Class Initialized
DEBUG - 2013-11-15 12:20:31 --> Utf8 Class Initialized
DEBUG - 2013-11-15 12:20:31 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 12:20:31 --> URI Class Initialized
DEBUG - 2013-11-15 12:20:31 --> Router Class Initialized
DEBUG - 2013-11-15 12:20:31 --> Output Class Initialized
DEBUG - 2013-11-15 12:20:31 --> Security Class Initialized
DEBUG - 2013-11-15 12:20:31 --> Input Class Initialized
DEBUG - 2013-11-15 12:20:31 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 12:20:31 --> Language Class Initialized
DEBUG - 2013-11-15 12:20:31 --> Loader Class Initialized
DEBUG - 2013-11-15 12:20:31 --> Helper loaded: form_helper
DEBUG - 2013-11-15 12:20:31 --> Helper loaded: url_helper
DEBUG - 2013-11-15 12:20:31 --> Helper loaded: html_helper
DEBUG - 2013-11-15 12:20:31 --> Database Driver Class Initialized
DEBUG - 2013-11-15 12:20:31 --> Session Class Initialized
DEBUG - 2013-11-15 12:20:31 --> Helper loaded: string_helper
DEBUG - 2013-11-15 12:20:31 --> Session routines successfully run
DEBUG - 2013-11-15 12:20:31 --> Form Validation Class Initialized
DEBUG - 2013-11-15 12:20:31 --> Controller Class Initialized
DEBUG - 2013-11-15 12:20:31 --> Model Class Initialized
DEBUG - 2013-11-15 12:20:31 --> Model Class Initialized
DEBUG - 2013-11-15 12:20:31 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 12:20:31 --> after session initialization................
INFO  - 2013-11-15 12:20:31 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 12:20:31 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 12:20:31 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 12:20:31 --> inside retrieving locations 
INFO  - 2013-11-15 12:20:31 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 12:20:31 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 12:20:31 --> Final output sent to browser
DEBUG - 2013-11-15 12:20:31 --> Total execution time: 0.0680
DEBUG - 2013-11-15 12:21:07 --> Config Class Initialized
DEBUG - 2013-11-15 12:21:07 --> Hooks Class Initialized
DEBUG - 2013-11-15 12:21:07 --> Utf8 Class Initialized
DEBUG - 2013-11-15 12:21:07 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 12:21:07 --> URI Class Initialized
DEBUG - 2013-11-15 12:21:07 --> Router Class Initialized
DEBUG - 2013-11-15 12:21:07 --> Output Class Initialized
DEBUG - 2013-11-15 12:21:07 --> Security Class Initialized
DEBUG - 2013-11-15 12:21:07 --> Input Class Initialized
DEBUG - 2013-11-15 12:21:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 12:21:07 --> Language Class Initialized
DEBUG - 2013-11-15 12:21:07 --> Loader Class Initialized
DEBUG - 2013-11-15 12:21:07 --> Helper loaded: form_helper
DEBUG - 2013-11-15 12:21:07 --> Helper loaded: url_helper
DEBUG - 2013-11-15 12:21:07 --> Helper loaded: html_helper
DEBUG - 2013-11-15 12:21:07 --> Database Driver Class Initialized
DEBUG - 2013-11-15 12:21:07 --> Session Class Initialized
DEBUG - 2013-11-15 12:21:07 --> Helper loaded: string_helper
DEBUG - 2013-11-15 12:21:07 --> Session routines successfully run
DEBUG - 2013-11-15 12:21:07 --> Form Validation Class Initialized
DEBUG - 2013-11-15 12:21:07 --> Controller Class Initialized
DEBUG - 2013-11-15 12:21:07 --> Model Class Initialized
DEBUG - 2013-11-15 12:21:07 --> Model Class Initialized
DEBUG - 2013-11-15 12:21:07 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 12:21:07 --> after session initialization................
INFO  - 2013-11-15 12:21:07 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 12:21:07 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 12:21:07 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 12:21:07 --> inside retrieving locations 
INFO  - 2013-11-15 12:21:07 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 12:21:07 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 12:21:07 --> Final output sent to browser
DEBUG - 2013-11-15 12:21:07 --> Total execution time: 0.0700
DEBUG - 2013-11-15 12:21:11 --> Config Class Initialized
DEBUG - 2013-11-15 12:21:11 --> Hooks Class Initialized
DEBUG - 2013-11-15 12:21:11 --> Utf8 Class Initialized
DEBUG - 2013-11-15 12:21:11 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 12:21:11 --> URI Class Initialized
DEBUG - 2013-11-15 12:21:11 --> Router Class Initialized
DEBUG - 2013-11-15 12:21:11 --> Output Class Initialized
DEBUG - 2013-11-15 12:21:11 --> Security Class Initialized
DEBUG - 2013-11-15 12:21:11 --> Input Class Initialized
DEBUG - 2013-11-15 12:21:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 12:21:11 --> Language Class Initialized
DEBUG - 2013-11-15 12:21:11 --> Loader Class Initialized
DEBUG - 2013-11-15 12:21:11 --> Helper loaded: form_helper
DEBUG - 2013-11-15 12:21:11 --> Helper loaded: url_helper
DEBUG - 2013-11-15 12:21:11 --> Helper loaded: html_helper
DEBUG - 2013-11-15 12:21:11 --> Database Driver Class Initialized
DEBUG - 2013-11-15 12:21:11 --> Session Class Initialized
DEBUG - 2013-11-15 12:21:11 --> Helper loaded: string_helper
DEBUG - 2013-11-15 12:21:11 --> Session routines successfully run
DEBUG - 2013-11-15 12:21:11 --> Form Validation Class Initialized
DEBUG - 2013-11-15 12:21:11 --> Controller Class Initialized
DEBUG - 2013-11-15 12:21:11 --> Model Class Initialized
DEBUG - 2013-11-15 12:21:12 --> Model Class Initialized
DEBUG - 2013-11-15 12:21:12 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 12:21:12 --> after session initialization................
INFO  - 2013-11-15 12:21:12 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>26
INFO  - 2013-11-15 12:21:12 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` =  '26'
DEBUG - 2013-11-15 12:21:12 --> Final output sent to browser
DEBUG - 2013-11-15 12:21:12 --> Total execution time: 0.0500
DEBUG - 2013-11-15 12:21:39 --> Config Class Initialized
DEBUG - 2013-11-15 12:21:39 --> Hooks Class Initialized
DEBUG - 2013-11-15 12:21:39 --> Utf8 Class Initialized
DEBUG - 2013-11-15 12:21:39 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 12:21:39 --> URI Class Initialized
DEBUG - 2013-11-15 12:21:39 --> Router Class Initialized
DEBUG - 2013-11-15 12:21:39 --> Output Class Initialized
DEBUG - 2013-11-15 12:21:39 --> Security Class Initialized
DEBUG - 2013-11-15 12:21:39 --> Input Class Initialized
DEBUG - 2013-11-15 12:21:39 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 12:21:39 --> Language Class Initialized
DEBUG - 2013-11-15 12:21:39 --> Loader Class Initialized
DEBUG - 2013-11-15 12:21:39 --> Helper loaded: form_helper
DEBUG - 2013-11-15 12:21:39 --> Helper loaded: url_helper
DEBUG - 2013-11-15 12:21:39 --> Helper loaded: html_helper
DEBUG - 2013-11-15 12:21:39 --> Database Driver Class Initialized
DEBUG - 2013-11-15 12:21:39 --> Session Class Initialized
DEBUG - 2013-11-15 12:21:39 --> Helper loaded: string_helper
DEBUG - 2013-11-15 12:21:39 --> Session routines successfully run
DEBUG - 2013-11-15 12:21:39 --> Form Validation Class Initialized
DEBUG - 2013-11-15 12:21:39 --> Controller Class Initialized
DEBUG - 2013-11-15 12:21:39 --> Model Class Initialized
DEBUG - 2013-11-15 12:21:39 --> Model Class Initialized
DEBUG - 2013-11-15 12:21:39 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 12:21:39 --> after session initialization................
INFO  - 2013-11-15 12:21:39 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 12:21:39 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 12:21:39 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 12:21:39 --> inside retrieving locations 
INFO  - 2013-11-15 12:21:39 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 12:21:39 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 12:21:39 --> Final output sent to browser
DEBUG - 2013-11-15 12:21:39 --> Total execution time: 0.0690
DEBUG - 2013-11-15 12:21:44 --> Config Class Initialized
DEBUG - 2013-11-15 12:21:44 --> Hooks Class Initialized
DEBUG - 2013-11-15 12:21:44 --> Utf8 Class Initialized
DEBUG - 2013-11-15 12:21:44 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 12:21:44 --> URI Class Initialized
DEBUG - 2013-11-15 12:21:44 --> Router Class Initialized
DEBUG - 2013-11-15 12:21:44 --> Output Class Initialized
DEBUG - 2013-11-15 12:21:44 --> Security Class Initialized
DEBUG - 2013-11-15 12:21:44 --> Input Class Initialized
DEBUG - 2013-11-15 12:21:44 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 12:21:44 --> Language Class Initialized
DEBUG - 2013-11-15 12:21:44 --> Loader Class Initialized
DEBUG - 2013-11-15 12:21:44 --> Helper loaded: form_helper
DEBUG - 2013-11-15 12:21:44 --> Helper loaded: url_helper
DEBUG - 2013-11-15 12:21:44 --> Helper loaded: html_helper
DEBUG - 2013-11-15 12:21:44 --> Database Driver Class Initialized
DEBUG - 2013-11-15 12:21:44 --> Session Class Initialized
DEBUG - 2013-11-15 12:21:44 --> Helper loaded: string_helper
DEBUG - 2013-11-15 12:21:44 --> Session routines successfully run
DEBUG - 2013-11-15 12:21:44 --> Form Validation Class Initialized
DEBUG - 2013-11-15 12:21:44 --> Controller Class Initialized
DEBUG - 2013-11-15 12:21:44 --> Model Class Initialized
DEBUG - 2013-11-15 12:21:44 --> Model Class Initialized
DEBUG - 2013-11-15 12:21:44 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 12:21:44 --> after session initialization................
INFO  - 2013-11-15 12:21:44 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>26
INFO  - 2013-11-15 12:21:44 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` =  '26'
DEBUG - 2013-11-15 12:21:44 --> Final output sent to browser
DEBUG - 2013-11-15 12:21:44 --> Total execution time: 0.0600
DEBUG - 2013-11-15 12:22:08 --> Config Class Initialized
DEBUG - 2013-11-15 12:22:08 --> Hooks Class Initialized
DEBUG - 2013-11-15 12:22:08 --> Utf8 Class Initialized
DEBUG - 2013-11-15 12:22:08 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 12:22:08 --> URI Class Initialized
DEBUG - 2013-11-15 12:22:08 --> Router Class Initialized
DEBUG - 2013-11-15 12:22:08 --> Output Class Initialized
DEBUG - 2013-11-15 12:22:08 --> Security Class Initialized
DEBUG - 2013-11-15 12:22:08 --> Input Class Initialized
DEBUG - 2013-11-15 12:22:08 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 12:22:08 --> Language Class Initialized
DEBUG - 2013-11-15 12:22:08 --> Loader Class Initialized
DEBUG - 2013-11-15 12:22:08 --> Helper loaded: form_helper
DEBUG - 2013-11-15 12:22:08 --> Helper loaded: url_helper
DEBUG - 2013-11-15 12:22:08 --> Helper loaded: html_helper
DEBUG - 2013-11-15 12:22:08 --> Database Driver Class Initialized
DEBUG - 2013-11-15 12:22:08 --> Session Class Initialized
DEBUG - 2013-11-15 12:22:08 --> Helper loaded: string_helper
DEBUG - 2013-11-15 12:22:08 --> Session routines successfully run
DEBUG - 2013-11-15 12:22:08 --> Form Validation Class Initialized
DEBUG - 2013-11-15 12:22:08 --> Controller Class Initialized
DEBUG - 2013-11-15 12:22:08 --> Model Class Initialized
DEBUG - 2013-11-15 12:22:08 --> Model Class Initialized
DEBUG - 2013-11-15 12:22:08 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 12:22:08 --> after session initialization................
INFO  - 2013-11-15 12:22:08 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 12:22:08 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 12:22:08 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 12:22:08 --> inside retrieving locations 
INFO  - 2013-11-15 12:22:08 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 12:22:08 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 12:22:08 --> Final output sent to browser
DEBUG - 2013-11-15 12:22:08 --> Total execution time: 0.0540
DEBUG - 2013-11-15 12:22:17 --> Config Class Initialized
DEBUG - 2013-11-15 12:22:17 --> Hooks Class Initialized
DEBUG - 2013-11-15 12:22:17 --> Utf8 Class Initialized
DEBUG - 2013-11-15 12:22:17 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 12:22:17 --> URI Class Initialized
DEBUG - 2013-11-15 12:22:17 --> Router Class Initialized
DEBUG - 2013-11-15 12:22:17 --> Output Class Initialized
DEBUG - 2013-11-15 12:22:17 --> Security Class Initialized
DEBUG - 2013-11-15 12:22:17 --> Input Class Initialized
DEBUG - 2013-11-15 12:22:17 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 12:22:17 --> Language Class Initialized
DEBUG - 2013-11-15 12:22:17 --> Loader Class Initialized
DEBUG - 2013-11-15 12:22:17 --> Helper loaded: form_helper
DEBUG - 2013-11-15 12:22:17 --> Helper loaded: url_helper
DEBUG - 2013-11-15 12:22:17 --> Helper loaded: html_helper
DEBUG - 2013-11-15 12:22:17 --> Database Driver Class Initialized
DEBUG - 2013-11-15 12:22:17 --> Session Class Initialized
DEBUG - 2013-11-15 12:22:17 --> Helper loaded: string_helper
DEBUG - 2013-11-15 12:22:17 --> Session routines successfully run
DEBUG - 2013-11-15 12:22:17 --> Form Validation Class Initialized
DEBUG - 2013-11-15 12:22:17 --> Controller Class Initialized
DEBUG - 2013-11-15 12:22:17 --> Model Class Initialized
DEBUG - 2013-11-15 12:22:17 --> Model Class Initialized
DEBUG - 2013-11-15 12:22:17 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 12:22:17 --> after session initialization................
INFO  - 2013-11-15 12:22:17 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>26
INFO  - 2013-11-15 12:22:17 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` =  '26'
DEBUG - 2013-11-15 12:22:17 --> Final output sent to browser
DEBUG - 2013-11-15 12:22:17 --> Total execution time: 0.0580
DEBUG - 2013-11-15 12:23:27 --> Config Class Initialized
DEBUG - 2013-11-15 12:23:27 --> Hooks Class Initialized
DEBUG - 2013-11-15 12:23:27 --> Utf8 Class Initialized
DEBUG - 2013-11-15 12:23:27 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 12:23:27 --> URI Class Initialized
DEBUG - 2013-11-15 12:23:27 --> Router Class Initialized
DEBUG - 2013-11-15 12:23:27 --> Output Class Initialized
DEBUG - 2013-11-15 12:23:27 --> Security Class Initialized
DEBUG - 2013-11-15 12:23:27 --> Input Class Initialized
DEBUG - 2013-11-15 12:23:27 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 12:23:27 --> Language Class Initialized
DEBUG - 2013-11-15 12:23:27 --> Loader Class Initialized
DEBUG - 2013-11-15 12:23:27 --> Helper loaded: form_helper
DEBUG - 2013-11-15 12:23:27 --> Helper loaded: url_helper
DEBUG - 2013-11-15 12:23:27 --> Helper loaded: html_helper
DEBUG - 2013-11-15 12:23:27 --> Database Driver Class Initialized
DEBUG - 2013-11-15 12:23:27 --> Session Class Initialized
DEBUG - 2013-11-15 12:23:27 --> Helper loaded: string_helper
DEBUG - 2013-11-15 12:23:27 --> Session routines successfully run
DEBUG - 2013-11-15 12:23:27 --> Form Validation Class Initialized
DEBUG - 2013-11-15 12:23:27 --> Controller Class Initialized
DEBUG - 2013-11-15 12:23:27 --> Model Class Initialized
DEBUG - 2013-11-15 12:23:27 --> Model Class Initialized
DEBUG - 2013-11-15 12:23:27 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 12:23:27 --> after session initialization................
INFO  - 2013-11-15 12:23:27 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 12:23:27 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 12:23:27 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 12:23:27 --> inside retrieving locations 
INFO  - 2013-11-15 12:23:27 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 12:23:27 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 12:23:27 --> Final output sent to browser
DEBUG - 2013-11-15 12:23:27 --> Total execution time: 0.0630
DEBUG - 2013-11-15 12:23:30 --> Config Class Initialized
DEBUG - 2013-11-15 12:23:30 --> Hooks Class Initialized
DEBUG - 2013-11-15 12:23:30 --> Utf8 Class Initialized
DEBUG - 2013-11-15 12:23:30 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 12:23:30 --> URI Class Initialized
DEBUG - 2013-11-15 12:23:30 --> Router Class Initialized
DEBUG - 2013-11-15 12:23:30 --> Output Class Initialized
DEBUG - 2013-11-15 12:23:30 --> Security Class Initialized
DEBUG - 2013-11-15 12:23:30 --> Input Class Initialized
DEBUG - 2013-11-15 12:23:30 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 12:23:30 --> Language Class Initialized
DEBUG - 2013-11-15 12:23:30 --> Loader Class Initialized
DEBUG - 2013-11-15 12:23:30 --> Helper loaded: form_helper
DEBUG - 2013-11-15 12:23:30 --> Helper loaded: url_helper
DEBUG - 2013-11-15 12:23:30 --> Helper loaded: html_helper
DEBUG - 2013-11-15 12:23:31 --> Database Driver Class Initialized
DEBUG - 2013-11-15 12:23:31 --> Session Class Initialized
DEBUG - 2013-11-15 12:23:31 --> Helper loaded: string_helper
DEBUG - 2013-11-15 12:23:31 --> Session routines successfully run
DEBUG - 2013-11-15 12:23:31 --> Form Validation Class Initialized
DEBUG - 2013-11-15 12:23:31 --> Controller Class Initialized
DEBUG - 2013-11-15 12:23:31 --> Model Class Initialized
DEBUG - 2013-11-15 12:23:31 --> Model Class Initialized
DEBUG - 2013-11-15 12:23:31 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 12:23:31 --> after session initialization................
INFO  - 2013-11-15 12:23:31 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>26
INFO  - 2013-11-15 12:23:31 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` =  '26'
DEBUG - 2013-11-15 12:23:31 --> Final output sent to browser
DEBUG - 2013-11-15 12:23:31 --> Total execution time: 0.0470
DEBUG - 2013-11-15 12:25:32 --> Config Class Initialized
DEBUG - 2013-11-15 12:25:32 --> Hooks Class Initialized
DEBUG - 2013-11-15 12:25:32 --> Utf8 Class Initialized
DEBUG - 2013-11-15 12:25:32 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 12:25:32 --> URI Class Initialized
DEBUG - 2013-11-15 12:25:32 --> Router Class Initialized
DEBUG - 2013-11-15 12:25:32 --> Output Class Initialized
DEBUG - 2013-11-15 12:25:32 --> Security Class Initialized
DEBUG - 2013-11-15 12:25:32 --> Input Class Initialized
DEBUG - 2013-11-15 12:25:32 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 12:25:32 --> Language Class Initialized
DEBUG - 2013-11-15 12:25:32 --> Loader Class Initialized
DEBUG - 2013-11-15 12:25:32 --> Helper loaded: form_helper
DEBUG - 2013-11-15 12:25:32 --> Helper loaded: url_helper
DEBUG - 2013-11-15 12:25:32 --> Helper loaded: html_helper
DEBUG - 2013-11-15 12:25:32 --> Database Driver Class Initialized
DEBUG - 2013-11-15 12:25:32 --> Session Class Initialized
DEBUG - 2013-11-15 12:25:32 --> Helper loaded: string_helper
DEBUG - 2013-11-15 12:25:32 --> Session routines successfully run
DEBUG - 2013-11-15 12:25:32 --> Form Validation Class Initialized
DEBUG - 2013-11-15 12:25:32 --> Controller Class Initialized
DEBUG - 2013-11-15 12:25:32 --> Model Class Initialized
DEBUG - 2013-11-15 12:25:32 --> Model Class Initialized
DEBUG - 2013-11-15 12:25:32 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 12:25:32 --> after session initialization................
INFO  - 2013-11-15 12:25:32 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 12:25:32 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 12:25:32 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 12:25:32 --> inside retrieving locations 
INFO  - 2013-11-15 12:25:32 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 12:25:32 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 12:25:32 --> Final output sent to browser
DEBUG - 2013-11-15 12:25:32 --> Total execution time: 0.0550
DEBUG - 2013-11-15 12:25:34 --> Config Class Initialized
DEBUG - 2013-11-15 12:25:34 --> Hooks Class Initialized
DEBUG - 2013-11-15 12:25:34 --> Utf8 Class Initialized
DEBUG - 2013-11-15 12:25:34 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 12:25:34 --> URI Class Initialized
DEBUG - 2013-11-15 12:25:34 --> Router Class Initialized
DEBUG - 2013-11-15 12:25:34 --> Output Class Initialized
DEBUG - 2013-11-15 12:25:34 --> Security Class Initialized
DEBUG - 2013-11-15 12:25:34 --> Input Class Initialized
DEBUG - 2013-11-15 12:25:34 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 12:25:34 --> Language Class Initialized
DEBUG - 2013-11-15 12:25:34 --> Loader Class Initialized
DEBUG - 2013-11-15 12:25:34 --> Helper loaded: form_helper
DEBUG - 2013-11-15 12:25:34 --> Helper loaded: url_helper
DEBUG - 2013-11-15 12:25:34 --> Helper loaded: html_helper
DEBUG - 2013-11-15 12:25:34 --> Database Driver Class Initialized
DEBUG - 2013-11-15 12:25:34 --> Session Class Initialized
DEBUG - 2013-11-15 12:25:34 --> Helper loaded: string_helper
DEBUG - 2013-11-15 12:25:34 --> Session routines successfully run
DEBUG - 2013-11-15 12:25:34 --> Form Validation Class Initialized
DEBUG - 2013-11-15 12:25:34 --> Controller Class Initialized
DEBUG - 2013-11-15 12:25:34 --> Model Class Initialized
DEBUG - 2013-11-15 12:25:34 --> Model Class Initialized
DEBUG - 2013-11-15 12:25:34 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 12:25:34 --> after session initialization................
INFO  - 2013-11-15 12:25:34 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 12:25:34 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 12:25:34 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 12:25:34 --> inside retrieving locations 
INFO  - 2013-11-15 12:25:34 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 12:25:34 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 12:25:34 --> Final output sent to browser
DEBUG - 2013-11-15 12:25:34 --> Total execution time: 0.0590
DEBUG - 2013-11-15 12:25:38 --> Config Class Initialized
DEBUG - 2013-11-15 12:25:38 --> Hooks Class Initialized
DEBUG - 2013-11-15 12:25:38 --> Utf8 Class Initialized
DEBUG - 2013-11-15 12:25:38 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 12:25:38 --> URI Class Initialized
DEBUG - 2013-11-15 12:25:38 --> Router Class Initialized
DEBUG - 2013-11-15 12:25:38 --> Output Class Initialized
DEBUG - 2013-11-15 12:25:38 --> Security Class Initialized
DEBUG - 2013-11-15 12:25:38 --> Input Class Initialized
DEBUG - 2013-11-15 12:25:38 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 12:25:38 --> Language Class Initialized
DEBUG - 2013-11-15 12:25:38 --> Loader Class Initialized
DEBUG - 2013-11-15 12:25:38 --> Helper loaded: form_helper
DEBUG - 2013-11-15 12:25:38 --> Helper loaded: url_helper
DEBUG - 2013-11-15 12:25:38 --> Helper loaded: html_helper
DEBUG - 2013-11-15 12:25:38 --> Database Driver Class Initialized
DEBUG - 2013-11-15 12:25:38 --> Session Class Initialized
DEBUG - 2013-11-15 12:25:38 --> Helper loaded: string_helper
DEBUG - 2013-11-15 12:25:38 --> Session routines successfully run
DEBUG - 2013-11-15 12:25:38 --> Form Validation Class Initialized
DEBUG - 2013-11-15 12:25:38 --> Controller Class Initialized
DEBUG - 2013-11-15 12:25:38 --> Model Class Initialized
DEBUG - 2013-11-15 12:25:38 --> Model Class Initialized
DEBUG - 2013-11-15 12:25:38 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 12:25:38 --> after session initialization................
INFO  - 2013-11-15 12:25:38 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>26
INFO  - 2013-11-15 12:25:38 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` =  '26'
DEBUG - 2013-11-15 12:25:38 --> Final output sent to browser
DEBUG - 2013-11-15 12:25:38 --> Total execution time: 0.0550
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               DEBUG - 2013-11-15 12:45:14 --> Config Class Initialized
DEBUG - 2013-11-15 12:45:14 --> Hooks Class Initialized
DEBUG - 2013-11-15 12:45:14 --> Utf8 Class Initialized
DEBUG - 2013-11-15 12:45:14 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 12:45:14 --> URI Class Initialized
DEBUG - 2013-11-15 12:45:14 --> Router Class Initialized
DEBUG - 2013-11-15 12:45:14 --> Output Class Initialized
DEBUG - 2013-11-15 12:45:14 --> Security Class Initialized
DEBUG - 2013-11-15 12:45:14 --> Input Class Initialized
DEBUG - 2013-11-15 12:45:14 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 12:45:14 --> Language Class Initialized
DEBUG - 2013-11-15 12:45:14 --> Loader Class Initialized
DEBUG - 2013-11-15 12:45:14 --> Helper loaded: form_helper
DEBUG - 2013-11-15 12:45:14 --> Helper loaded: url_helper
DEBUG - 2013-11-15 12:45:14 --> Helper loaded: html_helper
DEBUG - 2013-11-15 12:45:15 --> Database Driver Class Initialized
DEBUG - 2013-11-15 12:45:16 --> Session Class Initialized
DEBUG - 2013-11-15 12:45:16 --> Helper loaded: string_helper
DEBUG - 2013-11-15 12:45:16 --> Session routines successfully run
DEBUG - 2013-11-15 12:45:16 --> Form Validation Class Initialized
DEBUG - 2013-11-15 12:45:16 --> Controller Class Initialized
DEBUG - 2013-11-15 12:45:16 --> Model Class Initialized
DEBUG - 2013-11-15 12:45:16 --> Model Class Initialized
DEBUG - 2013-11-15 12:45:16 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 12:45:16 --> after session initialization................
INFO  - 2013-11-15 12:45:16 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 12:45:16 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 12:45:16 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 12:45:16 --> inside retrieving locations 
INFO  - 2013-11-15 12:45:16 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 12:45:16 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 12:45:16 --> Final output sent to browser
DEBUG - 2013-11-15 12:45:16 --> Total execution time: 1.2821
DEBUG - 2013-11-15 12:46:48 --> Config Class Initialized
DEBUG - 2013-11-15 12:46:48 --> Hooks Class Initialized
DEBUG - 2013-11-15 12:46:48 --> Utf8 Class Initialized
DEBUG - 2013-11-15 12:46:48 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 12:46:48 --> URI Class Initialized
DEBUG - 2013-11-15 12:46:48 --> Router Class Initialized
DEBUG - 2013-11-15 12:46:48 --> Output Class Initialized
DEBUG - 2013-11-15 12:46:48 --> Security Class Initialized
DEBUG - 2013-11-15 12:46:48 --> Input Class Initialized
DEBUG - 2013-11-15 12:46:48 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 12:46:48 --> Language Class Initialized
DEBUG - 2013-11-15 12:46:48 --> Loader Class Initialized
DEBUG - 2013-11-15 12:46:48 --> Helper loaded: form_helper
DEBUG - 2013-11-15 12:46:48 --> Helper loaded: url_helper
DEBUG - 2013-11-15 12:46:48 --> Helper loaded: html_helper
DEBUG - 2013-11-15 12:46:48 --> Database Driver Class Initialized
DEBUG - 2013-11-15 12:46:49 --> Session Class Initialized
DEBUG - 2013-11-15 12:46:49 --> Helper loaded: string_helper
DEBUG - 2013-11-15 12:46:49 --> Session routines successfully run
DEBUG - 2013-11-15 12:46:49 --> Form Validation Class Initialized
DEBUG - 2013-11-15 12:46:49 --> Controller Class Initialized
DEBUG - 2013-11-15 12:46:49 --> Model Class Initialized
DEBUG - 2013-11-15 12:46:49 --> Model Class Initialized
DEBUG - 2013-11-15 12:46:49 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 12:46:49 --> after session initialization................
INFO  - 2013-11-15 12:46:50 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>26
INFO  - 2013-11-15 12:46:50 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` =  '26'
DEBUG - 2013-11-15 12:46:50 --> Final output sent to browser
DEBUG - 2013-11-15 12:46:50 --> Total execution time: 1.0761
DEBUG - 2013-11-15 12:49:09 --> Config Class Initialized
DEBUG - 2013-11-15 12:49:09 --> Hooks Class Initialized
DEBUG - 2013-11-15 12:49:09 --> Utf8 Class Initialized
DEBUG - 2013-11-15 12:49:09 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 12:49:09 --> URI Class Initialized
DEBUG - 2013-11-15 12:49:09 --> Router Class Initialized
DEBUG - 2013-11-15 12:49:09 --> Output Class Initialized
DEBUG - 2013-11-15 12:49:09 --> Security Class Initialized
DEBUG - 2013-11-15 12:49:09 --> Input Class Initialized
DEBUG - 2013-11-15 12:49:09 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 12:49:09 --> Language Class Initialized
DEBUG - 2013-11-15 12:49:09 --> Loader Class Initialized
DEBUG - 2013-11-15 12:49:09 --> Helper loaded: form_helper
DEBUG - 2013-11-15 12:49:09 --> Helper loaded: url_helper
DEBUG - 2013-11-15 12:49:09 --> Helper loaded: html_helper
DEBUG - 2013-11-15 12:49:09 --> Database Driver Class Initialized
DEBUG - 2013-11-15 12:49:09 --> Session Class Initialized
DEBUG - 2013-11-15 12:49:09 --> Helper loaded: string_helper
DEBUG - 2013-11-15 12:49:09 --> Session routines successfully run
DEBUG - 2013-11-15 12:49:09 --> Form Validation Class Initialized
DEBUG - 2013-11-15 12:49:09 --> Controller Class Initialized
DEBUG - 2013-11-15 12:49:09 --> Model Class Initialized
DEBUG - 2013-11-15 12:49:09 --> Model Class Initialized
DEBUG - 2013-11-15 12:49:09 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 12:49:09 --> after session initialization................
INFO  - 2013-11-15 12:49:09 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>26
INFO  - 2013-11-15 12:49:09 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` =  '26'
DEBUG - 2013-11-15 12:49:09 --> Final output sent to browser
DEBUG - 2013-11-15 12:49:09 --> Total execution time: 0.0540
DEBUG - 2013-11-15 13:27:55 --> Config Class Initialized
DEBUG - 2013-11-15 13:27:55 --> Hooks Class Initialized
DEBUG - 2013-11-15 13:27:55 --> Utf8 Class Initialized
DEBUG - 2013-11-15 13:27:55 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 13:27:55 --> URI Class Initialized
DEBUG - 2013-11-15 13:27:55 --> Router Class Initialized
DEBUG - 2013-11-15 13:27:55 --> Output Class Initialized
DEBUG - 2013-11-15 13:27:55 --> Security Class Initialized
DEBUG - 2013-11-15 13:27:55 --> Input Class Initialized
DEBUG - 2013-11-15 13:27:55 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 13:27:55 --> Language Class Initialized
DEBUG - 2013-11-15 13:27:55 --> Loader Class Initialized
DEBUG - 2013-11-15 13:27:55 --> Helper loaded: form_helper
DEBUG - 2013-11-15 13:27:55 --> Helper loaded: url_helper
DEBUG - 2013-11-15 13:27:55 --> Helper loaded: html_helper
DEBUG - 2013-11-15 13:27:55 --> Database Driver Class Initialized
DEBUG - 2013-11-15 13:27:55 --> Session Class Initialized
DEBUG - 2013-11-15 13:27:55 --> Helper loaded: string_helper
DEBUG - 2013-11-15 13:27:55 --> Session routines successfully run
DEBUG - 2013-11-15 13:27:55 --> Form Validation Class Initialized
DEBUG - 2013-11-15 13:27:55 --> Controller Class Initialized
DEBUG - 2013-11-15 13:27:55 --> Model Class Initialized
DEBUG - 2013-11-15 13:27:55 --> Model Class Initialized
DEBUG - 2013-11-15 13:27:55 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 13:27:55 --> after session initialization................
INFO  - 2013-11-15 13:27:55 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 13:27:55 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 13:27:55 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 13:27:55 --> inside retrieving locations 
INFO  - 2013-11-15 13:27:55 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 13:27:55 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 13:27:55 --> Final output sent to browser
DEBUG - 2013-11-15 13:27:55 --> Total execution time: 0.0530
DEBUG - 2013-11-15 13:27:59 --> Config Class Initialized
DEBUG - 2013-11-15 13:27:59 --> Hooks Class Initialized
DEBUG - 2013-11-15 13:27:59 --> Utf8 Class Initialized
DEBUG - 2013-11-15 13:27:59 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 13:27:59 --> URI Class Initialized
DEBUG - 2013-11-15 13:27:59 --> Router Class Initialized
DEBUG - 2013-11-15 13:27:59 --> Output Class Initialized
DEBUG - 2013-11-15 13:27:59 --> Security Class Initialized
DEBUG - 2013-11-15 13:27:59 --> Input Class Initialized
DEBUG - 2013-11-15 13:27:59 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 13:27:59 --> Language Class Initialized
DEBUG - 2013-11-15 13:27:59 --> Loader Class Initialized
DEBUG - 2013-11-15 13:27:59 --> Helper loaded: form_helper
DEBUG - 2013-11-15 13:27:59 --> Helper loaded: url_helper
DEBUG - 2013-11-15 13:27:59 --> Helper loaded: html_helper
DEBUG - 2013-11-15 13:27:59 --> Database Driver Class Initialized
DEBUG - 2013-11-15 13:27:59 --> Session Class Initialized
DEBUG - 2013-11-15 13:27:59 --> Helper loaded: string_helper
DEBUG - 2013-11-15 13:27:59 --> Session routines successfully run
DEBUG - 2013-11-15 13:27:59 --> Form Validation Class Initialized
DEBUG - 2013-11-15 13:27:59 --> Controller Class Initialized
DEBUG - 2013-11-15 13:27:59 --> Model Class Initialized
DEBUG - 2013-11-15 13:27:59 --> Model Class Initialized
DEBUG - 2013-11-15 13:27:59 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 13:27:59 --> after session initialization................
ERROR - 2013-11-15 13:27:59 --> Severity: Warning  --> Missing argument 2 for membermodel::retrieve_pharmacy_bylimit(), called in C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php on line 532 and defined C:\xampp\htdocs\Pharmarays\pharmaray-application\models\members_model\membermodel.php 168
INFO  - 2013-11-15 13:27:59 --> last pharmacy id is 26
ERROR - 2013-11-15 13:27:59 --> Severity: Notice  --> Undefined variable: limit C:\xampp\htdocs\Pharmarays\pharmaray-application\models\members_model\membermodel.php 180
DEBUG - 2013-11-15 13:27:59 --> Final output sent to browser
DEBUG - 2013-11-15 13:27:59 --> Total execution time: 0.0500
DEBUG - 2013-11-15 13:28:38 --> Config Class Initialized
DEBUG - 2013-11-15 13:28:38 --> Hooks Class Initialized
DEBUG - 2013-11-15 13:28:38 --> Utf8 Class Initialized
DEBUG - 2013-11-15 13:28:38 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 13:28:38 --> URI Class Initialized
DEBUG - 2013-11-15 13:28:38 --> Router Class Initialized
DEBUG - 2013-11-15 13:28:38 --> Output Class Initialized
DEBUG - 2013-11-15 13:28:38 --> Security Class Initialized
DEBUG - 2013-11-15 13:28:38 --> Input Class Initialized
DEBUG - 2013-11-15 13:28:38 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 13:28:38 --> Language Class Initialized
DEBUG - 2013-11-15 13:28:38 --> Loader Class Initialized
DEBUG - 2013-11-15 13:28:38 --> Helper loaded: form_helper
DEBUG - 2013-11-15 13:28:38 --> Helper loaded: url_helper
DEBUG - 2013-11-15 13:28:38 --> Helper loaded: html_helper
DEBUG - 2013-11-15 13:28:39 --> Database Driver Class Initialized
DEBUG - 2013-11-15 13:28:39 --> Session Class Initialized
DEBUG - 2013-11-15 13:28:39 --> Helper loaded: string_helper
DEBUG - 2013-11-15 13:28:39 --> Session routines successfully run
DEBUG - 2013-11-15 13:28:39 --> Form Validation Class Initialized
DEBUG - 2013-11-15 13:28:39 --> Controller Class Initialized
DEBUG - 2013-11-15 13:28:39 --> Model Class Initialized
DEBUG - 2013-11-15 13:28:39 --> Model Class Initialized
DEBUG - 2013-11-15 13:28:39 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 13:28:39 --> after session initialization................
INFO  - 2013-11-15 13:28:39 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 13:28:39 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 13:28:39 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 13:28:39 --> inside retrieving locations 
INFO  - 2013-11-15 13:28:39 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 13:28:39 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 13:28:39 --> Final output sent to browser
DEBUG - 2013-11-15 13:28:39 --> Total execution time: 0.0530
DEBUG - 2013-11-15 13:28:40 --> Config Class Initialized
DEBUG - 2013-11-15 13:28:40 --> Hooks Class Initialized
DEBUG - 2013-11-15 13:28:40 --> Utf8 Class Initialized
DEBUG - 2013-11-15 13:28:40 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 13:28:40 --> URI Class Initialized
DEBUG - 2013-11-15 13:28:40 --> Router Class Initialized
DEBUG - 2013-11-15 13:28:40 --> Output Class Initialized
DEBUG - 2013-11-15 13:28:40 --> Security Class Initialized
DEBUG - 2013-11-15 13:28:40 --> Input Class Initialized
DEBUG - 2013-11-15 13:28:40 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 13:28:40 --> Language Class Initialized
DEBUG - 2013-11-15 13:28:40 --> Loader Class Initialized
DEBUG - 2013-11-15 13:28:40 --> Helper loaded: form_helper
DEBUG - 2013-11-15 13:28:40 --> Helper loaded: url_helper
DEBUG - 2013-11-15 13:28:40 --> Helper loaded: html_helper
DEBUG - 2013-11-15 13:28:40 --> Database Driver Class Initialized
DEBUG - 2013-11-15 13:28:40 --> Session Class Initialized
DEBUG - 2013-11-15 13:28:40 --> Helper loaded: string_helper
DEBUG - 2013-11-15 13:28:40 --> Session routines successfully run
DEBUG - 2013-11-15 13:28:40 --> Form Validation Class Initialized
DEBUG - 2013-11-15 13:28:40 --> Controller Class Initialized
DEBUG - 2013-11-15 13:28:40 --> Model Class Initialized
DEBUG - 2013-11-15 13:28:40 --> Model Class Initialized
DEBUG - 2013-11-15 13:28:40 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 13:28:40 --> after session initialization................
INFO  - 2013-11-15 13:28:40 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 13:28:40 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 13:28:40 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 13:28:40 --> inside retrieving locations 
INFO  - 2013-11-15 13:28:40 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 13:28:40 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 13:28:40 --> Final output sent to browser
DEBUG - 2013-11-15 13:28:40 --> Total execution time: 0.0500
DEBUG - 2013-11-15 13:28:44 --> Config Class Initialized
DEBUG - 2013-11-15 13:28:44 --> Hooks Class Initialized
DEBUG - 2013-11-15 13:28:44 --> Utf8 Class Initialized
DEBUG - 2013-11-15 13:28:44 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 13:28:44 --> URI Class Initialized
DEBUG - 2013-11-15 13:28:44 --> Router Class Initialized
DEBUG - 2013-11-15 13:28:44 --> Output Class Initialized
DEBUG - 2013-11-15 13:28:44 --> Security Class Initialized
DEBUG - 2013-11-15 13:28:44 --> Input Class Initialized
DEBUG - 2013-11-15 13:28:44 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 13:28:44 --> Language Class Initialized
DEBUG - 2013-11-15 13:28:44 --> Loader Class Initialized
DEBUG - 2013-11-15 13:28:44 --> Helper loaded: form_helper
DEBUG - 2013-11-15 13:28:44 --> Helper loaded: url_helper
DEBUG - 2013-11-15 13:28:44 --> Helper loaded: html_helper
DEBUG - 2013-11-15 13:28:44 --> Database Driver Class Initialized
DEBUG - 2013-11-15 13:28:44 --> Session Class Initialized
DEBUG - 2013-11-15 13:28:44 --> Helper loaded: string_helper
DEBUG - 2013-11-15 13:28:44 --> Session routines successfully run
DEBUG - 2013-11-15 13:28:44 --> Form Validation Class Initialized
DEBUG - 2013-11-15 13:28:44 --> Controller Class Initialized
DEBUG - 2013-11-15 13:28:44 --> Model Class Initialized
DEBUG - 2013-11-15 13:28:44 --> Model Class Initialized
DEBUG - 2013-11-15 13:28:44 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 13:28:44 --> after session initialization................
ERROR - 2013-11-15 13:28:44 --> Severity: Warning  --> Missing argument 2 for membermodel::retrieve_pharmacy_bylimit(), called in C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php on line 532 and defined C:\xampp\htdocs\Pharmarays\pharmaray-application\models\members_model\membermodel.php 168
INFO  - 2013-11-15 13:28:44 --> last pharmacy id is 26
ERROR - 2013-11-15 13:28:44 --> Severity: Notice  --> Undefined variable: limit C:\xampp\htdocs\Pharmarays\pharmaray-application\models\members_model\membermodel.php 180
DEBUG - 2013-11-15 13:28:44 --> Final output sent to browser
DEBUG - 2013-11-15 13:28:44 --> Total execution time: 0.0530
DEBUG - 2013-11-15 13:33:39 --> Config Class Initialized
DEBUG - 2013-11-15 13:33:39 --> Hooks Class Initialized
DEBUG - 2013-11-15 13:33:39 --> Utf8 Class Initialized
DEBUG - 2013-11-15 13:33:39 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 13:33:39 --> URI Class Initialized
DEBUG - 2013-11-15 13:33:39 --> Router Class Initialized
DEBUG - 2013-11-15 13:33:39 --> Output Class Initialized
DEBUG - 2013-11-15 13:33:39 --> Security Class Initialized
DEBUG - 2013-11-15 13:33:39 --> Input Class Initialized
DEBUG - 2013-11-15 13:33:39 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 13:33:39 --> Language Class Initialized
DEBUG - 2013-11-15 13:33:39 --> Loader Class Initialized
DEBUG - 2013-11-15 13:33:39 --> Helper loaded: form_helper
DEBUG - 2013-11-15 13:33:39 --> Helper loaded: url_helper
DEBUG - 2013-11-15 13:33:39 --> Helper loaded: html_helper
DEBUG - 2013-11-15 13:33:39 --> Database Driver Class Initialized
DEBUG - 2013-11-15 13:33:39 --> Session Class Initialized
DEBUG - 2013-11-15 13:33:39 --> Helper loaded: string_helper
DEBUG - 2013-11-15 13:33:39 --> Session routines successfully run
DEBUG - 2013-11-15 13:33:39 --> Form Validation Class Initialized
DEBUG - 2013-11-15 13:33:39 --> Controller Class Initialized
DEBUG - 2013-11-15 13:33:39 --> Model Class Initialized
DEBUG - 2013-11-15 13:33:39 --> Model Class Initialized
DEBUG - 2013-11-15 13:33:39 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 13:33:39 --> after session initialization................
INFO  - 2013-11-15 13:33:39 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 13:33:39 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 13:33:39 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 13:33:39 --> inside retrieving locations 
INFO  - 2013-11-15 13:33:39 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 13:33:39 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 13:33:39 --> Final output sent to browser
DEBUG - 2013-11-15 13:33:39 --> Total execution time: 0.0570
DEBUG - 2013-11-15 13:33:41 --> Config Class Initialized
DEBUG - 2013-11-15 13:33:41 --> Hooks Class Initialized
DEBUG - 2013-11-15 13:33:41 --> Utf8 Class Initialized
DEBUG - 2013-11-15 13:33:41 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 13:33:41 --> URI Class Initialized
DEBUG - 2013-11-15 13:33:41 --> Router Class Initialized
DEBUG - 2013-11-15 13:33:41 --> Output Class Initialized
DEBUG - 2013-11-15 13:33:41 --> Security Class Initialized
DEBUG - 2013-11-15 13:33:41 --> Input Class Initialized
DEBUG - 2013-11-15 13:33:41 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 13:33:41 --> Language Class Initialized
DEBUG - 2013-11-15 13:33:41 --> Loader Class Initialized
DEBUG - 2013-11-15 13:33:41 --> Helper loaded: form_helper
DEBUG - 2013-11-15 13:33:41 --> Helper loaded: url_helper
DEBUG - 2013-11-15 13:33:41 --> Helper loaded: html_helper
DEBUG - 2013-11-15 13:33:41 --> Database Driver Class Initialized
DEBUG - 2013-11-15 13:33:41 --> Session Class Initialized
DEBUG - 2013-11-15 13:33:41 --> Helper loaded: string_helper
DEBUG - 2013-11-15 13:33:41 --> Session routines successfully run
DEBUG - 2013-11-15 13:33:41 --> Form Validation Class Initialized
DEBUG - 2013-11-15 13:33:41 --> Controller Class Initialized
DEBUG - 2013-11-15 13:33:41 --> Model Class Initialized
DEBUG - 2013-11-15 13:33:41 --> Model Class Initialized
DEBUG - 2013-11-15 13:33:41 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 13:33:41 --> after session initialization................
INFO  - 2013-11-15 13:33:41 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 13:33:41 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 13:33:41 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 13:33:41 --> inside retrieving locations 
INFO  - 2013-11-15 13:33:41 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 13:33:41 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 13:33:41 --> Final output sent to browser
DEBUG - 2013-11-15 13:33:41 --> Total execution time: 0.1080
DEBUG - 2013-11-15 13:33:48 --> Config Class Initialized
DEBUG - 2013-11-15 13:33:48 --> Hooks Class Initialized
DEBUG - 2013-11-15 13:33:48 --> Utf8 Class Initialized
DEBUG - 2013-11-15 13:33:48 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 13:33:48 --> URI Class Initialized
DEBUG - 2013-11-15 13:33:48 --> Router Class Initialized
DEBUG - 2013-11-15 13:33:48 --> Output Class Initialized
DEBUG - 2013-11-15 13:33:48 --> Security Class Initialized
DEBUG - 2013-11-15 13:33:48 --> Input Class Initialized
DEBUG - 2013-11-15 13:33:48 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 13:33:48 --> Language Class Initialized
DEBUG - 2013-11-15 13:33:48 --> Loader Class Initialized
DEBUG - 2013-11-15 13:33:48 --> Helper loaded: form_helper
DEBUG - 2013-11-15 13:33:48 --> Helper loaded: url_helper
DEBUG - 2013-11-15 13:33:48 --> Helper loaded: html_helper
DEBUG - 2013-11-15 13:33:48 --> Database Driver Class Initialized
DEBUG - 2013-11-15 13:33:48 --> Session Class Initialized
DEBUG - 2013-11-15 13:33:48 --> Helper loaded: string_helper
DEBUG - 2013-11-15 13:33:48 --> Session routines successfully run
DEBUG - 2013-11-15 13:33:48 --> Form Validation Class Initialized
DEBUG - 2013-11-15 13:33:48 --> Controller Class Initialized
DEBUG - 2013-11-15 13:33:48 --> Model Class Initialized
DEBUG - 2013-11-15 13:33:48 --> Model Class Initialized
DEBUG - 2013-11-15 13:33:48 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 13:33:48 --> after session initialization................
INFO  - 2013-11-15 13:33:48 --> last pharmacy id is 26
DEBUG - 2013-11-15 13:33:48 --> Final output sent to browser
DEBUG - 2013-11-15 13:33:48 --> Total execution time: 0.0500
DEBUG - 2013-11-15 13:34:48 --> Config Class Initialized
DEBUG - 2013-11-15 13:34:48 --> Hooks Class Initialized
DEBUG - 2013-11-15 13:34:48 --> Utf8 Class Initialized
DEBUG - 2013-11-15 13:34:48 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 13:34:48 --> URI Class Initialized
DEBUG - 2013-11-15 13:34:48 --> Router Class Initialized
DEBUG - 2013-11-15 13:34:48 --> Output Class Initialized
DEBUG - 2013-11-15 13:34:48 --> Security Class Initialized
DEBUG - 2013-11-15 13:34:48 --> Input Class Initialized
DEBUG - 2013-11-15 13:34:48 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 13:34:48 --> Language Class Initialized
DEBUG - 2013-11-15 13:34:48 --> Loader Class Initialized
DEBUG - 2013-11-15 13:34:48 --> Helper loaded: form_helper
DEBUG - 2013-11-15 13:34:48 --> Helper loaded: url_helper
DEBUG - 2013-11-15 13:34:48 --> Helper loaded: html_helper
DEBUG - 2013-11-15 13:34:48 --> Database Driver Class Initialized
DEBUG - 2013-11-15 13:34:48 --> Session Class Initialized
DEBUG - 2013-11-15 13:34:48 --> Helper loaded: string_helper
DEBUG - 2013-11-15 13:34:48 --> Session routines successfully run
DEBUG - 2013-11-15 13:34:48 --> Form Validation Class Initialized
DEBUG - 2013-11-15 13:34:48 --> Controller Class Initialized
DEBUG - 2013-11-15 13:34:48 --> Model Class Initialized
DEBUG - 2013-11-15 13:34:48 --> Model Class Initialized
DEBUG - 2013-11-15 13:34:48 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 13:34:48 --> after session initialization................
INFO  - 2013-11-15 13:34:48 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 13:34:48 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 13:34:48 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 13:34:48 --> inside retrieving locations 
INFO  - 2013-11-15 13:34:48 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 13:34:48 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 13:34:48 --> Final output sent to browser
DEBUG - 2013-11-15 13:34:48 --> Total execution time: 0.0660
DEBUG - 2013-11-15 13:34:50 --> Config Class Initialized
DEBUG - 2013-11-15 13:34:50 --> Hooks Class Initialized
DEBUG - 2013-11-15 13:34:50 --> Utf8 Class Initialized
DEBUG - 2013-11-15 13:34:50 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 13:34:50 --> URI Class Initialized
DEBUG - 2013-11-15 13:34:50 --> Router Class Initialized
DEBUG - 2013-11-15 13:34:50 --> Output Class Initialized
DEBUG - 2013-11-15 13:34:50 --> Security Class Initialized
DEBUG - 2013-11-15 13:34:50 --> Input Class Initialized
DEBUG - 2013-11-15 13:34:50 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 13:34:50 --> Language Class Initialized
DEBUG - 2013-11-15 13:34:50 --> Loader Class Initialized
DEBUG - 2013-11-15 13:34:50 --> Helper loaded: form_helper
DEBUG - 2013-11-15 13:34:50 --> Helper loaded: url_helper
DEBUG - 2013-11-15 13:34:50 --> Helper loaded: html_helper
DEBUG - 2013-11-15 13:34:50 --> Database Driver Class Initialized
DEBUG - 2013-11-15 13:34:50 --> Session Class Initialized
DEBUG - 2013-11-15 13:34:50 --> Helper loaded: string_helper
DEBUG - 2013-11-15 13:34:50 --> Session routines successfully run
DEBUG - 2013-11-15 13:34:50 --> Form Validation Class Initialized
DEBUG - 2013-11-15 13:34:50 --> Controller Class Initialized
DEBUG - 2013-11-15 13:34:50 --> Model Class Initialized
DEBUG - 2013-11-15 13:34:50 --> Model Class Initialized
DEBUG - 2013-11-15 13:34:50 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 13:34:50 --> after session initialization................
INFO  - 2013-11-15 13:34:50 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 13:34:50 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 13:34:50 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 13:34:50 --> inside retrieving locations 
INFO  - 2013-11-15 13:34:50 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 13:34:50 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 13:34:50 --> Final output sent to browser
DEBUG - 2013-11-15 13:34:50 --> Total execution time: 0.0610
DEBUG - 2013-11-15 13:34:54 --> Config Class Initialized
DEBUG - 2013-11-15 13:34:54 --> Hooks Class Initialized
DEBUG - 2013-11-15 13:34:54 --> Utf8 Class Initialized
DEBUG - 2013-11-15 13:34:54 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 13:34:54 --> URI Class Initialized
DEBUG - 2013-11-15 13:34:54 --> Router Class Initialized
DEBUG - 2013-11-15 13:34:54 --> Output Class Initialized
DEBUG - 2013-11-15 13:34:54 --> Security Class Initialized
DEBUG - 2013-11-15 13:34:54 --> Input Class Initialized
DEBUG - 2013-11-15 13:34:54 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 13:34:54 --> Language Class Initialized
DEBUG - 2013-11-15 13:34:54 --> Loader Class Initialized
DEBUG - 2013-11-15 13:34:54 --> Helper loaded: form_helper
DEBUG - 2013-11-15 13:34:54 --> Helper loaded: url_helper
DEBUG - 2013-11-15 13:34:54 --> Helper loaded: html_helper
DEBUG - 2013-11-15 13:34:54 --> Database Driver Class Initialized
DEBUG - 2013-11-15 13:34:54 --> Session Class Initialized
DEBUG - 2013-11-15 13:34:54 --> Helper loaded: string_helper
DEBUG - 2013-11-15 13:34:54 --> Session routines successfully run
DEBUG - 2013-11-15 13:34:54 --> Form Validation Class Initialized
DEBUG - 2013-11-15 13:34:54 --> Controller Class Initialized
DEBUG - 2013-11-15 13:34:54 --> Model Class Initialized
DEBUG - 2013-11-15 13:34:54 --> Model Class Initialized
DEBUG - 2013-11-15 13:34:54 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 13:34:54 --> after session initialization................
INFO  - 2013-11-15 13:34:54 --> last pharmacy id is 26
INFO  - 2013-11-15 13:34:54 --> Ajax retrieval ::::::::::===>SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` < 26
ORDER BY `p`.`id_pharmacy`, `p`.`name` desc
LIMIT 25
DEBUG - 2013-11-15 13:34:54 --> Final output sent to browser
DEBUG - 2013-11-15 13:34:54 --> Total execution time: 0.0660
DEBUG - 2013-11-15 13:34:59 --> Config Class Initialized
DEBUG - 2013-11-15 13:34:59 --> Hooks Class Initialized
DEBUG - 2013-11-15 13:34:59 --> Utf8 Class Initialized
DEBUG - 2013-11-15 13:34:59 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 13:34:59 --> URI Class Initialized
DEBUG - 2013-11-15 13:34:59 --> Router Class Initialized
DEBUG - 2013-11-15 13:34:59 --> Output Class Initialized
DEBUG - 2013-11-15 13:34:59 --> Security Class Initialized
DEBUG - 2013-11-15 13:34:59 --> Input Class Initialized
DEBUG - 2013-11-15 13:34:59 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 13:34:59 --> Language Class Initialized
DEBUG - 2013-11-15 13:34:59 --> Loader Class Initialized
DEBUG - 2013-11-15 13:34:59 --> Helper loaded: form_helper
DEBUG - 2013-11-15 13:34:59 --> Helper loaded: url_helper
DEBUG - 2013-11-15 13:34:59 --> Helper loaded: html_helper
DEBUG - 2013-11-15 13:34:59 --> Database Driver Class Initialized
DEBUG - 2013-11-15 13:34:59 --> Session Class Initialized
DEBUG - 2013-11-15 13:34:59 --> Helper loaded: string_helper
DEBUG - 2013-11-15 13:34:59 --> Session routines successfully run
DEBUG - 2013-11-15 13:34:59 --> Form Validation Class Initialized
DEBUG - 2013-11-15 13:34:59 --> Controller Class Initialized
DEBUG - 2013-11-15 13:34:59 --> Model Class Initialized
DEBUG - 2013-11-15 13:34:59 --> Model Class Initialized
DEBUG - 2013-11-15 13:34:59 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 13:34:59 --> after session initialization................
INFO  - 2013-11-15 13:34:59 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 13:34:59 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 13:34:59 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 13:34:59 --> inside retrieving locations 
INFO  - 2013-11-15 13:34:59 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 13:34:59 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 13:34:59 --> Final output sent to browser
DEBUG - 2013-11-15 13:34:59 --> Total execution time: 0.0550
DEBUG - 2013-11-15 13:35:16 --> Config Class Initialized
DEBUG - 2013-11-15 13:35:16 --> Hooks Class Initialized
DEBUG - 2013-11-15 13:35:16 --> Utf8 Class Initialized
DEBUG - 2013-11-15 13:35:16 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 13:35:16 --> URI Class Initialized
DEBUG - 2013-11-15 13:35:16 --> Router Class Initialized
DEBUG - 2013-11-15 13:35:16 --> Output Class Initialized
DEBUG - 2013-11-15 13:35:16 --> Security Class Initialized
DEBUG - 2013-11-15 13:35:16 --> Input Class Initialized
DEBUG - 2013-11-15 13:35:16 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 13:35:16 --> Language Class Initialized
DEBUG - 2013-11-15 13:35:16 --> Loader Class Initialized
DEBUG - 2013-11-15 13:35:16 --> Helper loaded: form_helper
DEBUG - 2013-11-15 13:35:16 --> Helper loaded: url_helper
DEBUG - 2013-11-15 13:35:16 --> Helper loaded: html_helper
DEBUG - 2013-11-15 13:35:16 --> Database Driver Class Initialized
DEBUG - 2013-11-15 13:35:16 --> Session Class Initialized
DEBUG - 2013-11-15 13:35:16 --> Helper loaded: string_helper
DEBUG - 2013-11-15 13:35:16 --> Session routines successfully run
DEBUG - 2013-11-15 13:35:16 --> Form Validation Class Initialized
DEBUG - 2013-11-15 13:35:16 --> Controller Class Initialized
DEBUG - 2013-11-15 13:35:16 --> Model Class Initialized
DEBUG - 2013-11-15 13:35:16 --> Model Class Initialized
DEBUG - 2013-11-15 13:35:16 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 13:35:16 --> after session initialization................
INFO  - 2013-11-15 13:35:16 --> last pharmacy id is 26
INFO  - 2013-11-15 13:35:16 --> Ajax retrieval ::::::::::===>SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` < 26
ORDER BY `p`.`id_pharmacy`, `p`.`name` desc
LIMIT 25
DEBUG - 2013-11-15 13:35:16 --> Final output sent to browser
DEBUG - 2013-11-15 13:35:16 --> Total execution time: 0.0680
DEBUG - 2013-11-15 13:38:00 --> Config Class Initialized
DEBUG - 2013-11-15 13:38:00 --> Hooks Class Initialized
DEBUG - 2013-11-15 13:38:00 --> Utf8 Class Initialized
DEBUG - 2013-11-15 13:38:00 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 13:38:00 --> URI Class Initialized
DEBUG - 2013-11-15 13:38:00 --> Router Class Initialized
DEBUG - 2013-11-15 13:38:00 --> Output Class Initialized
DEBUG - 2013-11-15 13:38:00 --> Security Class Initialized
DEBUG - 2013-11-15 13:38:00 --> Input Class Initialized
DEBUG - 2013-11-15 13:38:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 13:38:00 --> Language Class Initialized
DEBUG - 2013-11-15 13:38:00 --> Loader Class Initialized
DEBUG - 2013-11-15 13:38:00 --> Helper loaded: form_helper
DEBUG - 2013-11-15 13:38:00 --> Helper loaded: url_helper
DEBUG - 2013-11-15 13:38:00 --> Helper loaded: html_helper
DEBUG - 2013-11-15 13:38:00 --> Database Driver Class Initialized
DEBUG - 2013-11-15 13:38:01 --> Session Class Initialized
DEBUG - 2013-11-15 13:38:01 --> Helper loaded: string_helper
DEBUG - 2013-11-15 13:38:01 --> Session routines successfully run
DEBUG - 2013-11-15 13:38:01 --> Form Validation Class Initialized
DEBUG - 2013-11-15 13:38:01 --> Controller Class Initialized
DEBUG - 2013-11-15 13:38:01 --> Model Class Initialized
DEBUG - 2013-11-15 13:38:01 --> Model Class Initialized
DEBUG - 2013-11-15 13:38:01 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 13:38:01 --> after session initialization................
INFO  - 2013-11-15 13:38:01 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 13:38:01 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 13:38:01 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 13:38:01 --> inside retrieving locations 
INFO  - 2013-11-15 13:38:01 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 13:38:01 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 13:38:01 --> Final output sent to browser
DEBUG - 2013-11-15 13:38:01 --> Total execution time: 1.0721
DEBUG - 2013-11-15 13:38:05 --> Config Class Initialized
DEBUG - 2013-11-15 13:38:05 --> Hooks Class Initialized
DEBUG - 2013-11-15 13:38:05 --> Utf8 Class Initialized
DEBUG - 2013-11-15 13:38:05 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 13:38:05 --> URI Class Initialized
DEBUG - 2013-11-15 13:38:05 --> Router Class Initialized
DEBUG - 2013-11-15 13:38:05 --> Output Class Initialized
DEBUG - 2013-11-15 13:38:05 --> Security Class Initialized
DEBUG - 2013-11-15 13:38:05 --> Input Class Initialized
DEBUG - 2013-11-15 13:38:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 13:38:05 --> Language Class Initialized
DEBUG - 2013-11-15 13:38:05 --> Loader Class Initialized
DEBUG - 2013-11-15 13:38:05 --> Helper loaded: form_helper
DEBUG - 2013-11-15 13:38:05 --> Helper loaded: url_helper
DEBUG - 2013-11-15 13:38:05 --> Helper loaded: html_helper
DEBUG - 2013-11-15 13:38:05 --> Database Driver Class Initialized
DEBUG - 2013-11-15 13:38:05 --> Session Class Initialized
DEBUG - 2013-11-15 13:38:05 --> Helper loaded: string_helper
DEBUG - 2013-11-15 13:38:05 --> Session routines successfully run
DEBUG - 2013-11-15 13:38:05 --> Form Validation Class Initialized
DEBUG - 2013-11-15 13:38:05 --> Controller Class Initialized
DEBUG - 2013-11-15 13:38:05 --> Model Class Initialized
DEBUG - 2013-11-15 13:38:05 --> Model Class Initialized
DEBUG - 2013-11-15 13:38:05 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 13:38:05 --> after session initialization................
INFO  - 2013-11-15 13:38:05 --> last pharmacy id is 26
INFO  - 2013-11-15 13:38:05 --> Ajax retrieval ::::::::::===>SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` < 26
ORDER BY `p`.`id_pharmacy`, `p`.`name` desc
LIMIT 25
DEBUG - 2013-11-15 13:38:05 --> Final output sent to browser
DEBUG - 2013-11-15 13:38:05 --> Total execution time: 0.0500
DEBUG - 2013-11-15 13:39:53 --> Config Class Initialized
DEBUG - 2013-11-15 13:39:53 --> Hooks Class Initialized
DEBUG - 2013-11-15 13:39:53 --> Utf8 Class Initialized
DEBUG - 2013-11-15 13:39:53 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 13:39:53 --> URI Class Initialized
DEBUG - 2013-11-15 13:39:53 --> Router Class Initialized
DEBUG - 2013-11-15 13:39:53 --> Output Class Initialized
DEBUG - 2013-11-15 13:39:53 --> Security Class Initialized
DEBUG - 2013-11-15 13:39:53 --> Input Class Initialized
DEBUG - 2013-11-15 13:39:53 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 13:39:53 --> Language Class Initialized
DEBUG - 2013-11-15 13:39:53 --> Loader Class Initialized
DEBUG - 2013-11-15 13:39:53 --> Helper loaded: form_helper
DEBUG - 2013-11-15 13:39:53 --> Helper loaded: url_helper
DEBUG - 2013-11-15 13:39:53 --> Helper loaded: html_helper
DEBUG - 2013-11-15 13:39:53 --> Database Driver Class Initialized
DEBUG - 2013-11-15 13:39:53 --> Session Class Initialized
DEBUG - 2013-11-15 13:39:53 --> Helper loaded: string_helper
DEBUG - 2013-11-15 13:39:53 --> Session routines successfully run
DEBUG - 2013-11-15 13:39:53 --> Form Validation Class Initialized
DEBUG - 2013-11-15 13:39:53 --> Controller Class Initialized
DEBUG - 2013-11-15 13:39:53 --> Model Class Initialized
DEBUG - 2013-11-15 13:39:53 --> Model Class Initialized
DEBUG - 2013-11-15 13:39:53 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 13:39:53 --> after session initialization................
INFO  - 2013-11-15 13:39:53 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 13:39:53 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 13:39:53 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 13:39:53 --> inside retrieving locations 
INFO  - 2013-11-15 13:39:53 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 13:39:53 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 13:39:53 --> Final output sent to browser
DEBUG - 2013-11-15 13:39:53 --> Total execution time: 0.0620
DEBUG - 2013-11-15 13:39:55 --> Config Class Initialized
DEBUG - 2013-11-15 13:39:55 --> Hooks Class Initialized
DEBUG - 2013-11-15 13:39:55 --> Utf8 Class Initialized
DEBUG - 2013-11-15 13:39:55 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 13:39:55 --> URI Class Initialized
DEBUG - 2013-11-15 13:39:55 --> Router Class Initialized
DEBUG - 2013-11-15 13:39:55 --> Output Class Initialized
DEBUG - 2013-11-15 13:39:55 --> Security Class Initialized
DEBUG - 2013-11-15 13:39:55 --> Input Class Initialized
DEBUG - 2013-11-15 13:39:55 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 13:39:55 --> Language Class Initialized
DEBUG - 2013-11-15 13:39:55 --> Loader Class Initialized
DEBUG - 2013-11-15 13:39:55 --> Helper loaded: form_helper
DEBUG - 2013-11-15 13:39:55 --> Helper loaded: url_helper
DEBUG - 2013-11-15 13:39:55 --> Helper loaded: html_helper
DEBUG - 2013-11-15 13:39:55 --> Database Driver Class Initialized
DEBUG - 2013-11-15 13:39:56 --> Session Class Initialized
DEBUG - 2013-11-15 13:39:56 --> Helper loaded: string_helper
DEBUG - 2013-11-15 13:39:56 --> Session routines successfully run
DEBUG - 2013-11-15 13:39:56 --> Form Validation Class Initialized
DEBUG - 2013-11-15 13:39:56 --> Controller Class Initialized
DEBUG - 2013-11-15 13:39:56 --> Model Class Initialized
DEBUG - 2013-11-15 13:39:56 --> Model Class Initialized
DEBUG - 2013-11-15 13:39:56 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 13:39:56 --> after session initialization................
INFO  - 2013-11-15 13:39:56 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 13:39:56 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 13:39:56 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 13:39:56 --> inside retrieving locations 
INFO  - 2013-11-15 13:39:56 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 13:39:56 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 13:39:56 --> Final output sent to browser
DEBUG - 2013-11-15 13:39:56 --> Total execution time: 1.1031
DEBUG - 2013-11-15 13:40:00 --> Config Class Initialized
DEBUG - 2013-11-15 13:40:00 --> Hooks Class Initialized
DEBUG - 2013-11-15 13:40:00 --> Utf8 Class Initialized
DEBUG - 2013-11-15 13:40:00 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 13:40:00 --> URI Class Initialized
DEBUG - 2013-11-15 13:40:00 --> Router Class Initialized
DEBUG - 2013-11-15 13:40:00 --> Output Class Initialized
DEBUG - 2013-11-15 13:40:00 --> Security Class Initialized
DEBUG - 2013-11-15 13:40:00 --> Input Class Initialized
DEBUG - 2013-11-15 13:40:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 13:40:00 --> Language Class Initialized
DEBUG - 2013-11-15 13:40:00 --> Loader Class Initialized
DEBUG - 2013-11-15 13:40:00 --> Helper loaded: form_helper
DEBUG - 2013-11-15 13:40:00 --> Helper loaded: url_helper
DEBUG - 2013-11-15 13:40:00 --> Helper loaded: html_helper
DEBUG - 2013-11-15 13:40:00 --> Database Driver Class Initialized
DEBUG - 2013-11-15 13:40:00 --> Session Class Initialized
DEBUG - 2013-11-15 13:40:00 --> Helper loaded: string_helper
DEBUG - 2013-11-15 13:40:00 --> Session routines successfully run
DEBUG - 2013-11-15 13:40:00 --> Form Validation Class Initialized
DEBUG - 2013-11-15 13:40:00 --> Controller Class Initialized
DEBUG - 2013-11-15 13:40:00 --> Model Class Initialized
DEBUG - 2013-11-15 13:40:00 --> Model Class Initialized
DEBUG - 2013-11-15 13:40:00 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 13:40:00 --> after session initialization................
INFO  - 2013-11-15 13:40:00 --> last pharmacy id is 26
INFO  - 2013-11-15 13:40:00 --> Ajax retrieval ::::::::::===>SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` < 26
ORDER BY `p`.`id_pharmacy`, `p`.`name` desc
LIMIT 25
DEBUG - 2013-11-15 13:40:00 --> Final output sent to browser
DEBUG - 2013-11-15 13:40:00 --> Total execution time: 0.0620
DEBUG - 2013-11-15 13:40:24 --> Config Class Initialized
DEBUG - 2013-11-15 13:40:24 --> Hooks Class Initialized
DEBUG - 2013-11-15 13:40:24 --> Utf8 Class Initialized
DEBUG - 2013-11-15 13:40:24 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 13:40:24 --> URI Class Initialized
DEBUG - 2013-11-15 13:40:24 --> Router Class Initialized
DEBUG - 2013-11-15 13:40:24 --> Output Class Initialized
DEBUG - 2013-11-15 13:40:24 --> Security Class Initialized
DEBUG - 2013-11-15 13:40:24 --> Input Class Initialized
DEBUG - 2013-11-15 13:40:24 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 13:40:24 --> Language Class Initialized
DEBUG - 2013-11-15 13:40:24 --> Loader Class Initialized
DEBUG - 2013-11-15 13:40:24 --> Helper loaded: form_helper
DEBUG - 2013-11-15 13:40:24 --> Helper loaded: url_helper
DEBUG - 2013-11-15 13:40:24 --> Helper loaded: html_helper
DEBUG - 2013-11-15 13:40:24 --> Database Driver Class Initialized
DEBUG - 2013-11-15 13:40:24 --> Session Class Initialized
DEBUG - 2013-11-15 13:40:24 --> Helper loaded: string_helper
DEBUG - 2013-11-15 13:40:24 --> Session routines successfully run
DEBUG - 2013-11-15 13:40:24 --> Form Validation Class Initialized
DEBUG - 2013-11-15 13:40:24 --> Controller Class Initialized
DEBUG - 2013-11-15 13:40:24 --> Model Class Initialized
DEBUG - 2013-11-15 13:40:24 --> Model Class Initialized
DEBUG - 2013-11-15 13:40:24 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 13:40:24 --> after session initialization................
ERROR - 2013-11-15 13:40:24 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 13:40:24 --> Config Class Initialized
DEBUG - 2013-11-15 13:40:24 --> Hooks Class Initialized
DEBUG - 2013-11-15 13:40:24 --> Utf8 Class Initialized
DEBUG - 2013-11-15 13:40:24 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 13:40:24 --> URI Class Initialized
DEBUG - 2013-11-15 13:40:24 --> Config Class Initialized
DEBUG - 2013-11-15 13:40:24 --> Router Class Initialized
DEBUG - 2013-11-15 13:40:24 --> Hooks Class Initialized
DEBUG - 2013-11-15 13:40:24 --> Utf8 Class Initialized
DEBUG - 2013-11-15 13:40:24 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 13:40:24 --> Output Class Initialized
DEBUG - 2013-11-15 13:40:24 --> URI Class Initialized
DEBUG - 2013-11-15 13:40:24 --> Security Class Initialized
DEBUG - 2013-11-15 13:40:24 --> Router Class Initialized
DEBUG - 2013-11-15 13:40:24 --> Input Class Initialized
DEBUG - 2013-11-15 13:40:24 --> Output Class Initialized
DEBUG - 2013-11-15 13:40:24 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 13:40:24 --> Language Class Initialized
DEBUG - 2013-11-15 13:40:24 --> Security Class Initialized
DEBUG - 2013-11-15 13:40:24 --> Input Class Initialized
DEBUG - 2013-11-15 13:40:24 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 13:40:24 --> Language Class Initialized
DEBUG - 2013-11-15 13:40:24 --> Loader Class Initialized
DEBUG - 2013-11-15 13:40:24 --> Helper loaded: form_helper
DEBUG - 2013-11-15 13:40:24 --> Helper loaded: url_helper
DEBUG - 2013-11-15 13:40:24 --> Loader Class Initialized
DEBUG - 2013-11-15 13:40:24 --> Helper loaded: html_helper
DEBUG - 2013-11-15 13:40:24 --> Helper loaded: form_helper
DEBUG - 2013-11-15 13:40:24 --> Helper loaded: url_helper
DEBUG - 2013-11-15 13:40:24 --> Helper loaded: html_helper
DEBUG - 2013-11-15 13:40:24 --> Database Driver Class Initialized
DEBUG - 2013-11-15 13:40:24 --> Database Driver Class Initialized
DEBUG - 2013-11-15 13:40:24 --> Session Class Initialized
DEBUG - 2013-11-15 13:40:24 --> Helper loaded: string_helper
DEBUG - 2013-11-15 13:40:24 --> Session routines successfully run
DEBUG - 2013-11-15 13:40:24 --> Form Validation Class Initialized
DEBUG - 2013-11-15 13:40:24 --> Controller Class Initialized
DEBUG - 2013-11-15 13:40:24 --> Model Class Initialized
DEBUG - 2013-11-15 13:40:24 --> Model Class Initialized
DEBUG - 2013-11-15 13:40:24 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 13:40:24 --> after session initialization................
ERROR - 2013-11-15 13:40:24 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 13:40:25 --> Session Class Initialized
DEBUG - 2013-11-15 13:40:25 --> Helper loaded: string_helper
DEBUG - 2013-11-15 13:40:25 --> Session routines successfully run
DEBUG - 2013-11-15 13:40:25 --> Form Validation Class Initialized
DEBUG - 2013-11-15 13:40:25 --> Controller Class Initialized
DEBUG - 2013-11-15 13:40:25 --> Model Class Initialized
DEBUG - 2013-11-15 13:40:25 --> Model Class Initialized
DEBUG - 2013-11-15 13:40:25 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 13:40:25 --> after session initialization................
ERROR - 2013-11-15 13:40:25 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 13:46:59 --> Config Class Initialized
DEBUG - 2013-11-15 13:46:59 --> Hooks Class Initialized
DEBUG - 2013-11-15 13:46:59 --> Utf8 Class Initialized
DEBUG - 2013-11-15 13:46:59 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 13:46:59 --> URI Class Initialized
DEBUG - 2013-11-15 13:46:59 --> Router Class Initialized
DEBUG - 2013-11-15 13:46:59 --> Output Class Initialized
DEBUG - 2013-11-15 13:46:59 --> Security Class Initialized
DEBUG - 2013-11-15 13:46:59 --> Input Class Initialized
DEBUG - 2013-11-15 13:46:59 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 13:46:59 --> Language Class Initialized
DEBUG - 2013-11-15 13:46:59 --> Loader Class Initialized
DEBUG - 2013-11-15 13:46:59 --> Helper loaded: form_helper
DEBUG - 2013-11-15 13:46:59 --> Helper loaded: url_helper
DEBUG - 2013-11-15 13:46:59 --> Helper loaded: html_helper
DEBUG - 2013-11-15 13:46:59 --> Database Driver Class Initialized
DEBUG - 2013-11-15 13:46:59 --> Session Class Initialized
DEBUG - 2013-11-15 13:46:59 --> Helper loaded: string_helper
DEBUG - 2013-11-15 13:46:59 --> Session routines successfully run
DEBUG - 2013-11-15 13:46:59 --> Form Validation Class Initialized
DEBUG - 2013-11-15 13:46:59 --> Controller Class Initialized
DEBUG - 2013-11-15 13:46:59 --> Model Class Initialized
DEBUG - 2013-11-15 13:46:59 --> Model Class Initialized
DEBUG - 2013-11-15 13:46:59 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 13:46:59 --> after session initialization................
INFO  - 2013-11-15 13:46:59 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 13:46:59 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 13:46:59 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 13:46:59 --> inside retrieving locations 
INFO  - 2013-11-15 13:46:59 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 13:46:59 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 13:46:59 --> Final output sent to browser
DEBUG - 2013-11-15 13:46:59 --> Total execution time: 0.0640
DEBUG - 2013-11-15 13:47:14 --> Config Class Initialized
DEBUG - 2013-11-15 13:47:14 --> Hooks Class Initialized
DEBUG - 2013-11-15 13:47:14 --> Utf8 Class Initialized
DEBUG - 2013-11-15 13:47:14 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 13:47:14 --> URI Class Initialized
DEBUG - 2013-11-15 13:47:14 --> Router Class Initialized
DEBUG - 2013-11-15 13:47:14 --> Output Class Initialized
DEBUG - 2013-11-15 13:47:14 --> Security Class Initialized
DEBUG - 2013-11-15 13:47:14 --> Input Class Initialized
DEBUG - 2013-11-15 13:47:14 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 13:47:14 --> Language Class Initialized
DEBUG - 2013-11-15 13:47:14 --> Loader Class Initialized
DEBUG - 2013-11-15 13:47:14 --> Helper loaded: form_helper
DEBUG - 2013-11-15 13:47:14 --> Helper loaded: url_helper
DEBUG - 2013-11-15 13:47:14 --> Helper loaded: html_helper
DEBUG - 2013-11-15 13:47:14 --> Database Driver Class Initialized
DEBUG - 2013-11-15 13:47:14 --> Session Class Initialized
DEBUG - 2013-11-15 13:47:14 --> Helper loaded: string_helper
DEBUG - 2013-11-15 13:47:14 --> Session routines successfully run
DEBUG - 2013-11-15 13:47:14 --> Form Validation Class Initialized
DEBUG - 2013-11-15 13:47:14 --> Controller Class Initialized
DEBUG - 2013-11-15 13:47:14 --> Model Class Initialized
DEBUG - 2013-11-15 13:47:14 --> Model Class Initialized
DEBUG - 2013-11-15 13:47:14 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 13:47:14 --> after session initialization................
INFO  - 2013-11-15 13:47:14 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 13:47:14 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 13:47:14 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 13:47:14 --> inside retrieving locations 
INFO  - 2013-11-15 13:47:14 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 13:47:14 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 13:47:14 --> Final output sent to browser
DEBUG - 2013-11-15 13:47:14 --> Total execution time: 0.0720
DEBUG - 2013-11-15 13:47:15 --> Config Class Initialized
DEBUG - 2013-11-15 13:47:15 --> Hooks Class Initialized
DEBUG - 2013-11-15 13:47:15 --> Utf8 Class Initialized
DEBUG - 2013-11-15 13:47:15 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 13:47:15 --> URI Class Initialized
DEBUG - 2013-11-15 13:47:15 --> Router Class Initialized
DEBUG - 2013-11-15 13:47:15 --> Output Class Initialized
DEBUG - 2013-11-15 13:47:15 --> Security Class Initialized
DEBUG - 2013-11-15 13:47:15 --> Input Class Initialized
DEBUG - 2013-11-15 13:47:15 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 13:47:15 --> Language Class Initialized
DEBUG - 2013-11-15 13:47:15 --> Loader Class Initialized
DEBUG - 2013-11-15 13:47:15 --> Helper loaded: form_helper
DEBUG - 2013-11-15 13:47:15 --> Helper loaded: url_helper
DEBUG - 2013-11-15 13:47:15 --> Helper loaded: html_helper
DEBUG - 2013-11-15 13:47:15 --> Database Driver Class Initialized
DEBUG - 2013-11-15 13:47:15 --> Session Class Initialized
DEBUG - 2013-11-15 13:47:15 --> Helper loaded: string_helper
DEBUG - 2013-11-15 13:47:15 --> Session routines successfully run
DEBUG - 2013-11-15 13:47:15 --> Form Validation Class Initialized
DEBUG - 2013-11-15 13:47:15 --> Controller Class Initialized
DEBUG - 2013-11-15 13:47:15 --> Model Class Initialized
DEBUG - 2013-11-15 13:47:15 --> Model Class Initialized
DEBUG - 2013-11-15 13:47:15 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 13:47:15 --> after session initialization................
INFO  - 2013-11-15 13:47:15 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 13:47:15 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 13:47:15 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 13:47:15 --> inside retrieving locations 
INFO  - 2013-11-15 13:47:15 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 13:47:15 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 13:47:15 --> Final output sent to browser
DEBUG - 2013-11-15 13:47:15 --> Total execution time: 0.0660
DEBUG - 2013-11-15 13:47:20 --> Config Class Initialized
DEBUG - 2013-11-15 13:47:20 --> Hooks Class Initialized
DEBUG - 2013-11-15 13:47:20 --> Utf8 Class Initialized
DEBUG - 2013-11-15 13:47:20 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 13:47:20 --> URI Class Initialized
DEBUG - 2013-11-15 13:47:20 --> Router Class Initialized
DEBUG - 2013-11-15 13:47:20 --> Output Class Initialized
DEBUG - 2013-11-15 13:47:20 --> Security Class Initialized
DEBUG - 2013-11-15 13:47:20 --> Input Class Initialized
DEBUG - 2013-11-15 13:47:20 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 13:47:20 --> Language Class Initialized
DEBUG - 2013-11-15 13:47:20 --> Loader Class Initialized
DEBUG - 2013-11-15 13:47:20 --> Helper loaded: form_helper
DEBUG - 2013-11-15 13:47:20 --> Helper loaded: url_helper
DEBUG - 2013-11-15 13:47:20 --> Helper loaded: html_helper
DEBUG - 2013-11-15 13:47:20 --> Database Driver Class Initialized
DEBUG - 2013-11-15 13:47:20 --> Session Class Initialized
DEBUG - 2013-11-15 13:47:20 --> Helper loaded: string_helper
DEBUG - 2013-11-15 13:47:20 --> Session routines successfully run
DEBUG - 2013-11-15 13:47:20 --> Form Validation Class Initialized
DEBUG - 2013-11-15 13:47:20 --> Controller Class Initialized
DEBUG - 2013-11-15 13:47:20 --> Model Class Initialized
DEBUG - 2013-11-15 13:47:20 --> Model Class Initialized
DEBUG - 2013-11-15 13:47:20 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 13:47:20 --> after session initialization................
INFO  - 2013-11-15 13:47:20 --> last pharmacy id is 26
INFO  - 2013-11-15 13:47:20 --> Ajax retrieval ::::::::::===>SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` < 26
ORDER BY `p`.`id_pharmacy`, `p`.`name` desc
LIMIT 25
DEBUG - 2013-11-15 13:47:20 --> Final output sent to browser
DEBUG - 2013-11-15 13:47:20 --> Total execution time: 0.0510
DEBUG - 2013-11-15 13:47:21 --> Config Class Initialized
DEBUG - 2013-11-15 13:47:21 --> Hooks Class Initialized
DEBUG - 2013-11-15 13:47:21 --> Utf8 Class Initialized
DEBUG - 2013-11-15 13:47:21 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 13:47:21 --> URI Class Initialized
DEBUG - 2013-11-15 13:47:21 --> Config Class Initialized
DEBUG - 2013-11-15 13:47:21 --> Router Class Initialized
DEBUG - 2013-11-15 13:47:21 --> Output Class Initialized
DEBUG - 2013-11-15 13:47:21 --> Security Class Initialized
DEBUG - 2013-11-15 13:47:21 --> Input Class Initialized
DEBUG - 2013-11-15 13:47:21 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 13:47:21 --> Language Class Initialized
DEBUG - 2013-11-15 13:47:21 --> Hooks Class Initialized
DEBUG - 2013-11-15 13:47:21 --> Utf8 Class Initialized
DEBUG - 2013-11-15 13:47:21 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 13:47:21 --> Loader Class Initialized
DEBUG - 2013-11-15 13:47:21 --> Helper loaded: form_helper
DEBUG - 2013-11-15 13:47:21 --> URI Class Initialized
DEBUG - 2013-11-15 13:47:21 --> Router Class Initialized
DEBUG - 2013-11-15 13:47:21 --> Helper loaded: url_helper
DEBUG - 2013-11-15 13:47:21 --> Config Class Initialized
DEBUG - 2013-11-15 13:47:21 --> Hooks Class Initialized
DEBUG - 2013-11-15 13:47:21 --> Helper loaded: html_helper
DEBUG - 2013-11-15 13:47:21 --> Output Class Initialized
DEBUG - 2013-11-15 13:47:21 --> Utf8 Class Initialized
DEBUG - 2013-11-15 13:47:21 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 13:47:21 --> Security Class Initialized
DEBUG - 2013-11-15 13:47:21 --> URI Class Initialized
DEBUG - 2013-11-15 13:47:21 --> Input Class Initialized
DEBUG - 2013-11-15 13:47:21 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 13:47:21 --> Language Class Initialized
DEBUG - 2013-11-15 13:47:21 --> Database Driver Class Initialized
DEBUG - 2013-11-15 13:47:21 --> Loader Class Initialized
DEBUG - 2013-11-15 13:47:21 --> Router Class Initialized
DEBUG - 2013-11-15 13:47:21 --> Helper loaded: form_helper
DEBUG - 2013-11-15 13:47:21 --> Session Class Initialized
DEBUG - 2013-11-15 13:47:21 --> Helper loaded: url_helper
DEBUG - 2013-11-15 13:47:21 --> Helper loaded: string_helper
DEBUG - 2013-11-15 13:47:21 --> Session routines successfully run
DEBUG - 2013-11-15 13:47:21 --> Helper loaded: html_helper
DEBUG - 2013-11-15 13:47:21 --> Output Class Initialized
DEBUG - 2013-11-15 13:47:21 --> Form Validation Class Initialized
DEBUG - 2013-11-15 13:47:21 --> Controller Class Initialized
DEBUG - 2013-11-15 13:47:21 --> Model Class Initialized
DEBUG - 2013-11-15 13:47:21 --> Security Class Initialized
DEBUG - 2013-11-15 13:47:21 --> Database Driver Class Initialized
DEBUG - 2013-11-15 13:47:21 --> Input Class Initialized
DEBUG - 2013-11-15 13:47:21 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 13:47:21 --> Session Class Initialized
DEBUG - 2013-11-15 13:47:21 --> Helper loaded: string_helper
DEBUG - 2013-11-15 13:47:21 --> Session routines successfully run
DEBUG - 2013-11-15 13:47:21 --> Model Class Initialized
DEBUG - 2013-11-15 13:47:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2013-11-15 13:47:21 --> Form Validation Class Initialized
INFO  - 2013-11-15 13:47:21 --> after session initialization................
DEBUG - 2013-11-15 13:47:21 --> Controller Class Initialized
DEBUG - 2013-11-15 13:47:21 --> Model Class Initialized
ERROR - 2013-11-15 13:47:21 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 13:47:21 --> Model Class Initialized
DEBUG - 2013-11-15 13:47:21 --> Language Class Initialized
DEBUG - 2013-11-15 13:47:21 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 13:47:21 --> after session initialization................
ERROR - 2013-11-15 13:47:21 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 13:47:21 --> Loader Class Initialized
DEBUG - 2013-11-15 13:47:21 --> Helper loaded: form_helper
DEBUG - 2013-11-15 13:47:21 --> Helper loaded: url_helper
DEBUG - 2013-11-15 13:47:21 --> Helper loaded: html_helper
DEBUG - 2013-11-15 13:47:21 --> Database Driver Class Initialized
DEBUG - 2013-11-15 13:47:21 --> Session Class Initialized
DEBUG - 2013-11-15 13:47:21 --> Helper loaded: string_helper
DEBUG - 2013-11-15 13:47:21 --> Session routines successfully run
DEBUG - 2013-11-15 13:47:21 --> Form Validation Class Initialized
DEBUG - 2013-11-15 13:47:21 --> Controller Class Initialized
DEBUG - 2013-11-15 13:47:21 --> Model Class Initialized
DEBUG - 2013-11-15 13:47:21 --> Model Class Initialized
DEBUG - 2013-11-15 13:47:21 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 13:47:21 --> after session initialization................
ERROR - 2013-11-15 13:47:21 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 13:53:51 --> Config Class Initialized
DEBUG - 2013-11-15 13:53:51 --> Hooks Class Initialized
DEBUG - 2013-11-15 13:53:51 --> Utf8 Class Initialized
DEBUG - 2013-11-15 13:53:51 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 13:53:51 --> URI Class Initialized
DEBUG - 2013-11-15 13:53:51 --> Router Class Initialized
DEBUG - 2013-11-15 13:53:51 --> Output Class Initialized
DEBUG - 2013-11-15 13:53:51 --> Security Class Initialized
DEBUG - 2013-11-15 13:53:51 --> Input Class Initialized
DEBUG - 2013-11-15 13:53:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 13:53:51 --> Language Class Initialized
DEBUG - 2013-11-15 13:53:51 --> Loader Class Initialized
DEBUG - 2013-11-15 13:53:51 --> Helper loaded: form_helper
DEBUG - 2013-11-15 13:53:51 --> Helper loaded: url_helper
DEBUG - 2013-11-15 13:53:51 --> Helper loaded: html_helper
DEBUG - 2013-11-15 13:53:51 --> Database Driver Class Initialized
DEBUG - 2013-11-15 13:53:51 --> Session Class Initialized
DEBUG - 2013-11-15 13:53:51 --> Helper loaded: string_helper
DEBUG - 2013-11-15 13:53:51 --> Session routines successfully run
DEBUG - 2013-11-15 13:53:51 --> Form Validation Class Initialized
DEBUG - 2013-11-15 13:53:51 --> Controller Class Initialized
DEBUG - 2013-11-15 13:53:51 --> Model Class Initialized
DEBUG - 2013-11-15 13:53:51 --> Model Class Initialized
DEBUG - 2013-11-15 13:53:51 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 13:53:51 --> after session initialization................
INFO  - 2013-11-15 13:53:51 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 13:53:51 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 13:53:51 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 13:53:51 --> inside retrieving locations 
INFO  - 2013-11-15 13:53:51 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 13:53:51 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 13:53:51 --> Final output sent to browser
DEBUG - 2013-11-15 13:53:51 --> Total execution time: 0.0640
DEBUG - 2013-11-15 13:53:52 --> Config Class Initialized
DEBUG - 2013-11-15 13:53:52 --> Hooks Class Initialized
DEBUG - 2013-11-15 13:53:52 --> Utf8 Class Initialized
DEBUG - 2013-11-15 13:53:52 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 13:53:52 --> URI Class Initialized
DEBUG - 2013-11-15 13:53:52 --> Router Class Initialized
DEBUG - 2013-11-15 13:53:52 --> Output Class Initialized
DEBUG - 2013-11-15 13:53:52 --> Security Class Initialized
DEBUG - 2013-11-15 13:53:52 --> Input Class Initialized
DEBUG - 2013-11-15 13:53:52 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 13:53:52 --> Language Class Initialized
DEBUG - 2013-11-15 13:53:52 --> Loader Class Initialized
DEBUG - 2013-11-15 13:53:52 --> Helper loaded: form_helper
DEBUG - 2013-11-15 13:53:52 --> Helper loaded: url_helper
DEBUG - 2013-11-15 13:53:52 --> Helper loaded: html_helper
DEBUG - 2013-11-15 13:53:52 --> Database Driver Class Initialized
DEBUG - 2013-11-15 13:53:53 --> Session Class Initialized
DEBUG - 2013-11-15 13:53:53 --> Helper loaded: string_helper
DEBUG - 2013-11-15 13:53:53 --> Session routines successfully run
DEBUG - 2013-11-15 13:53:53 --> Form Validation Class Initialized
DEBUG - 2013-11-15 13:53:53 --> Controller Class Initialized
DEBUG - 2013-11-15 13:53:53 --> Model Class Initialized
DEBUG - 2013-11-15 13:53:53 --> Model Class Initialized
DEBUG - 2013-11-15 13:53:53 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 13:53:53 --> after session initialization................
INFO  - 2013-11-15 13:53:53 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 13:53:53 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 13:53:53 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 13:53:53 --> inside retrieving locations 
INFO  - 2013-11-15 13:53:53 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 13:53:53 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 13:53:53 --> Final output sent to browser
DEBUG - 2013-11-15 13:53:53 --> Total execution time: 1.1051
DEBUG - 2013-11-15 13:53:58 --> Config Class Initialized
DEBUG - 2013-11-15 13:53:58 --> Hooks Class Initialized
DEBUG - 2013-11-15 13:53:58 --> Utf8 Class Initialized
DEBUG - 2013-11-15 13:53:58 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 13:53:58 --> URI Class Initialized
DEBUG - 2013-11-15 13:53:58 --> Router Class Initialized
DEBUG - 2013-11-15 13:53:58 --> Output Class Initialized
DEBUG - 2013-11-15 13:53:58 --> Security Class Initialized
DEBUG - 2013-11-15 13:53:58 --> Input Class Initialized
DEBUG - 2013-11-15 13:53:58 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 13:53:58 --> Language Class Initialized
DEBUG - 2013-11-15 13:53:58 --> Loader Class Initialized
DEBUG - 2013-11-15 13:53:58 --> Helper loaded: form_helper
DEBUG - 2013-11-15 13:53:58 --> Helper loaded: url_helper
DEBUG - 2013-11-15 13:53:58 --> Helper loaded: html_helper
DEBUG - 2013-11-15 13:53:58 --> Database Driver Class Initialized
DEBUG - 2013-11-15 13:53:58 --> Session Class Initialized
DEBUG - 2013-11-15 13:53:58 --> Helper loaded: string_helper
DEBUG - 2013-11-15 13:53:58 --> Session routines successfully run
DEBUG - 2013-11-15 13:53:58 --> Form Validation Class Initialized
DEBUG - 2013-11-15 13:53:58 --> Controller Class Initialized
DEBUG - 2013-11-15 13:53:58 --> Model Class Initialized
DEBUG - 2013-11-15 13:53:58 --> Model Class Initialized
DEBUG - 2013-11-15 13:53:58 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 13:53:58 --> after session initialization................
INFO  - 2013-11-15 13:53:58 --> last pharmacy id is 26
INFO  - 2013-11-15 13:53:58 --> Ajax retrieval ::::::::::===>SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` < 26
ORDER BY `p`.`id_pharmacy`, `p`.`name` desc
LIMIT 25
DEBUG - 2013-11-15 13:53:58 --> Final output sent to browser
DEBUG - 2013-11-15 13:53:58 --> Total execution time: 0.0580
DEBUG - 2013-11-15 13:58:08 --> Config Class Initialized
DEBUG - 2013-11-15 13:58:08 --> Hooks Class Initialized
DEBUG - 2013-11-15 13:58:08 --> Utf8 Class Initialized
DEBUG - 2013-11-15 13:58:08 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 13:58:08 --> URI Class Initialized
DEBUG - 2013-11-15 13:58:08 --> Router Class Initialized
DEBUG - 2013-11-15 13:58:08 --> Config Class Initialized
DEBUG - 2013-11-15 13:58:08 --> Hooks Class Initialized
DEBUG - 2013-11-15 13:58:08 --> Utf8 Class Initialized
DEBUG - 2013-11-15 13:58:08 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 13:58:08 --> Output Class Initialized
DEBUG - 2013-11-15 13:58:08 --> Config Class Initialized
DEBUG - 2013-11-15 13:58:08 --> Hooks Class Initialized
DEBUG - 2013-11-15 13:58:08 --> URI Class Initialized
DEBUG - 2013-11-15 13:58:08 --> Utf8 Class Initialized
DEBUG - 2013-11-15 13:58:08 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 13:58:08 --> Router Class Initialized
DEBUG - 2013-11-15 13:58:08 --> Security Class Initialized
DEBUG - 2013-11-15 13:58:08 --> URI Class Initialized
DEBUG - 2013-11-15 13:58:08 --> Output Class Initialized
DEBUG - 2013-11-15 13:58:08 --> Router Class Initialized
DEBUG - 2013-11-15 13:58:08 --> Input Class Initialized
DEBUG - 2013-11-15 13:58:08 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 13:58:08 --> Language Class Initialized
DEBUG - 2013-11-15 13:58:08 --> Security Class Initialized
DEBUG - 2013-11-15 13:58:08 --> Output Class Initialized
DEBUG - 2013-11-15 13:58:08 --> Input Class Initialized
DEBUG - 2013-11-15 13:58:08 --> Security Class Initialized
DEBUG - 2013-11-15 13:58:08 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 13:58:08 --> Loader Class Initialized
DEBUG - 2013-11-15 13:58:08 --> Input Class Initialized
DEBUG - 2013-11-15 13:58:08 --> Language Class Initialized
DEBUG - 2013-11-15 13:58:08 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 13:58:08 --> Language Class Initialized
DEBUG - 2013-11-15 13:58:08 --> Helper loaded: form_helper
DEBUG - 2013-11-15 13:58:08 --> Helper loaded: url_helper
DEBUG - 2013-11-15 13:58:08 --> Helper loaded: html_helper
DEBUG - 2013-11-15 13:58:08 --> Loader Class Initialized
DEBUG - 2013-11-15 13:58:08 --> Loader Class Initialized
DEBUG - 2013-11-15 13:58:08 --> Helper loaded: form_helper
DEBUG - 2013-11-15 13:58:08 --> Helper loaded: form_helper
DEBUG - 2013-11-15 13:58:08 --> Helper loaded: url_helper
DEBUG - 2013-11-15 13:58:08 --> Helper loaded: url_helper
DEBUG - 2013-11-15 13:58:08 --> Database Driver Class Initialized
DEBUG - 2013-11-15 13:58:08 --> Helper loaded: html_helper
DEBUG - 2013-11-15 13:58:08 --> Helper loaded: html_helper
DEBUG - 2013-11-15 13:58:08 --> Session Class Initialized
DEBUG - 2013-11-15 13:58:08 --> Helper loaded: string_helper
DEBUG - 2013-11-15 13:58:08 --> Session routines successfully run
DEBUG - 2013-11-15 13:58:08 --> Database Driver Class Initialized
DEBUG - 2013-11-15 13:58:08 --> Form Validation Class Initialized
DEBUG - 2013-11-15 13:58:08 --> Controller Class Initialized
DEBUG - 2013-11-15 13:58:08 --> Model Class Initialized
DEBUG - 2013-11-15 13:58:08 --> Database Driver Class Initialized
DEBUG - 2013-11-15 13:58:08 --> Session Class Initialized
DEBUG - 2013-11-15 13:58:08 --> Model Class Initialized
DEBUG - 2013-11-15 13:58:08 --> Session Class Initialized
DEBUG - 2013-11-15 13:58:08 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 13:58:08 --> after session initialization................
DEBUG - 2013-11-15 13:58:08 --> Helper loaded: string_helper
DEBUG - 2013-11-15 13:58:08 --> Session routines successfully run
DEBUG - 2013-11-15 13:58:08 --> Helper loaded: string_helper
ERROR - 2013-11-15 13:58:08 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 13:58:08 --> Session routines successfully run
DEBUG - 2013-11-15 13:58:08 --> Form Validation Class Initialized
DEBUG - 2013-11-15 13:58:08 --> Controller Class Initialized
DEBUG - 2013-11-15 13:58:08 --> Form Validation Class Initialized
DEBUG - 2013-11-15 13:58:08 --> Controller Class Initialized
DEBUG - 2013-11-15 13:58:08 --> Model Class Initialized
DEBUG - 2013-11-15 13:58:08 --> Model Class Initialized
DEBUG - 2013-11-15 13:58:08 --> Model Class Initialized
DEBUG - 2013-11-15 13:58:08 --> Model Class Initialized
DEBUG - 2013-11-15 13:58:08 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 13:58:08 --> after session initialization................
ERROR - 2013-11-15 13:58:08 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 13:58:08 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 13:58:08 --> after session initialization................
ERROR - 2013-11-15 13:58:08 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 13:58:10 --> Config Class Initialized
DEBUG - 2013-11-15 13:58:10 --> Hooks Class Initialized
DEBUG - 2013-11-15 13:58:10 --> Utf8 Class Initialized
DEBUG - 2013-11-15 13:58:10 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 13:58:10 --> URI Class Initialized
DEBUG - 2013-11-15 13:58:10 --> Router Class Initialized
DEBUG - 2013-11-15 13:58:10 --> Output Class Initialized
DEBUG - 2013-11-15 13:58:10 --> Security Class Initialized
DEBUG - 2013-11-15 13:58:10 --> Input Class Initialized
DEBUG - 2013-11-15 13:58:10 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 13:58:10 --> Language Class Initialized
DEBUG - 2013-11-15 13:58:10 --> Loader Class Initialized
DEBUG - 2013-11-15 13:58:10 --> Helper loaded: form_helper
DEBUG - 2013-11-15 13:58:10 --> Helper loaded: url_helper
DEBUG - 2013-11-15 13:58:10 --> Helper loaded: html_helper
DEBUG - 2013-11-15 13:58:10 --> Database Driver Class Initialized
DEBUG - 2013-11-15 13:58:10 --> Session Class Initialized
DEBUG - 2013-11-15 13:58:10 --> Helper loaded: string_helper
DEBUG - 2013-11-15 13:58:10 --> Session routines successfully run
DEBUG - 2013-11-15 13:58:10 --> Form Validation Class Initialized
DEBUG - 2013-11-15 13:58:10 --> Controller Class Initialized
DEBUG - 2013-11-15 13:58:10 --> Model Class Initialized
DEBUG - 2013-11-15 13:58:10 --> Model Class Initialized
DEBUG - 2013-11-15 13:58:10 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 13:58:10 --> after session initialization................
INFO  - 2013-11-15 13:58:10 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 13:58:10 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 13:58:10 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 13:58:10 --> inside retrieving locations 
INFO  - 2013-11-15 13:58:10 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 13:58:10 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 13:58:10 --> Final output sent to browser
DEBUG - 2013-11-15 13:58:10 --> Total execution time: 0.0630
DEBUG - 2013-11-15 13:58:11 --> Config Class Initialized
DEBUG - 2013-11-15 13:58:11 --> Hooks Class Initialized
DEBUG - 2013-11-15 13:58:11 --> Utf8 Class Initialized
DEBUG - 2013-11-15 13:58:11 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 13:58:11 --> URI Class Initialized
DEBUG - 2013-11-15 13:58:11 --> Router Class Initialized
DEBUG - 2013-11-15 13:58:11 --> Output Class Initialized
DEBUG - 2013-11-15 13:58:11 --> Security Class Initialized
DEBUG - 2013-11-15 13:58:11 --> Input Class Initialized
DEBUG - 2013-11-15 13:58:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 13:58:11 --> Language Class Initialized
DEBUG - 2013-11-15 13:58:11 --> Loader Class Initialized
DEBUG - 2013-11-15 13:58:11 --> Helper loaded: form_helper
DEBUG - 2013-11-15 13:58:11 --> Helper loaded: url_helper
DEBUG - 2013-11-15 13:58:11 --> Helper loaded: html_helper
DEBUG - 2013-11-15 13:58:11 --> Database Driver Class Initialized
DEBUG - 2013-11-15 13:58:11 --> Session Class Initialized
DEBUG - 2013-11-15 13:58:11 --> Helper loaded: string_helper
DEBUG - 2013-11-15 13:58:11 --> Session routines successfully run
DEBUG - 2013-11-15 13:58:11 --> Form Validation Class Initialized
DEBUG - 2013-11-15 13:58:11 --> Controller Class Initialized
DEBUG - 2013-11-15 13:58:11 --> Model Class Initialized
DEBUG - 2013-11-15 13:58:11 --> Model Class Initialized
DEBUG - 2013-11-15 13:58:11 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 13:58:11 --> after session initialization................
INFO  - 2013-11-15 13:58:11 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 13:58:11 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 13:58:11 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 13:58:11 --> inside retrieving locations 
INFO  - 2013-11-15 13:58:11 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 13:58:11 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 13:58:11 --> Final output sent to browser
DEBUG - 2013-11-15 13:58:11 --> Total execution time: 0.0490
DEBUG - 2013-11-15 15:15:34 --> Config Class Initialized
DEBUG - 2013-11-15 15:15:34 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:15:34 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:15:34 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:15:34 --> URI Class Initialized
DEBUG - 2013-11-15 15:15:34 --> Router Class Initialized
DEBUG - 2013-11-15 15:15:34 --> Output Class Initialized
DEBUG - 2013-11-15 15:15:34 --> Security Class Initialized
DEBUG - 2013-11-15 15:15:34 --> Input Class Initialized
DEBUG - 2013-11-15 15:15:34 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:15:34 --> Language Class Initialized
DEBUG - 2013-11-15 15:15:34 --> Loader Class Initialized
DEBUG - 2013-11-15 15:15:34 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:15:34 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:15:34 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:15:34 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:15:34 --> Session Class Initialized
DEBUG - 2013-11-15 15:15:34 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:15:34 --> Session routines successfully run
DEBUG - 2013-11-15 15:15:34 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:15:34 --> Controller Class Initialized
DEBUG - 2013-11-15 15:15:34 --> Model Class Initialized
DEBUG - 2013-11-15 15:15:34 --> Model Class Initialized
DEBUG - 2013-11-15 15:15:34 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:15:34 --> after session initialization................
DEBUG - 2013-11-15 15:15:34 --> Config Class Initialized
DEBUG - 2013-11-15 15:15:34 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:15:34 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:15:34 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:15:34 --> URI Class Initialized
DEBUG - 2013-11-15 15:15:34 --> Router Class Initialized
DEBUG - 2013-11-15 15:15:34 --> No URI present. Default controller set.
DEBUG - 2013-11-15 15:15:34 --> Output Class Initialized
DEBUG - 2013-11-15 15:15:34 --> Security Class Initialized
DEBUG - 2013-11-15 15:15:34 --> Input Class Initialized
DEBUG - 2013-11-15 15:15:34 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:15:34 --> Language Class Initialized
DEBUG - 2013-11-15 15:15:34 --> Loader Class Initialized
DEBUG - 2013-11-15 15:15:34 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:15:34 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:15:34 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:15:34 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:15:34 --> Session Class Initialized
DEBUG - 2013-11-15 15:15:34 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:15:34 --> A session cookie was not found.
DEBUG - 2013-11-15 15:15:34 --> Session routines successfully run
DEBUG - 2013-11-15 15:15:34 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:15:34 --> Controller Class Initialized
INFO  - 2013-11-15 15:15:34 --> the form message==>
INFO  - 2013-11-15 15:15:34 --> The session id is ========>00d16a5d411342d4ff2f1ec668c684af and the member id is =======>
INFO  - 2013-11-15 15:15:34 --> after the retrieving session list.................//////////
DEBUG - 2013-11-15 15:15:34 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-11-15 15:15:34 --> Final output sent to browser
DEBUG - 2013-11-15 15:15:34 --> Total execution time: 0.0650
DEBUG - 2013-11-15 15:15:37 --> Config Class Initialized
DEBUG - 2013-11-15 15:15:37 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:15:37 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:15:37 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:15:37 --> URI Class Initialized
DEBUG - 2013-11-15 15:15:37 --> Router Class Initialized
DEBUG - 2013-11-15 15:15:37 --> Output Class Initialized
DEBUG - 2013-11-15 15:15:37 --> Security Class Initialized
DEBUG - 2013-11-15 15:15:37 --> Input Class Initialized
DEBUG - 2013-11-15 15:15:37 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:15:37 --> Language Class Initialized
DEBUG - 2013-11-15 15:15:37 --> Loader Class Initialized
DEBUG - 2013-11-15 15:15:37 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:15:37 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:15:37 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:15:37 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:15:37 --> Session Class Initialized
DEBUG - 2013-11-15 15:15:37 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:15:37 --> Session routines successfully run
DEBUG - 2013-11-15 15:15:37 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:15:37 --> Controller Class Initialized
DEBUG - 2013-11-15 15:15:37 --> Model Class Initialized
DEBUG - 2013-11-15 15:15:37 --> Model Class Initialized
DEBUG - 2013-11-15 15:15:37 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:15:37 --> after session initialization................
INFO  - 2013-11-15 15:15:37 --> after rays has been clicked.................
INFO  - 2013-11-15 15:15:37 --> last article id is 0
INFO  - 2013-11-15 15:15:37 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:37 --> 1 the guest only data>>>>>
INFO  - 2013-11-15 15:15:37 --> 1 the guest only data>> AFTER >>>
INFO  - 2013-11-15 15:15:37 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:37 --> 0 the guest only data>>>>>
INFO  - 2013-11-15 15:15:37 --> 0 the guest only data>> AFTER >>>#111
INFO  - 2013-11-15 15:15:37 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:37 --> 0 the guest only data>>>>>#111
INFO  - 2013-11-15 15:15:37 --> 0 the guest only data>> AFTER >>>#110
INFO  - 2013-11-15 15:15:37 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:37 --> 0 the guest only data>>>>>#110
INFO  - 2013-11-15 15:15:37 --> 0 the guest only data>> AFTER >>>#109
INFO  - 2013-11-15 15:15:37 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:37 --> 0 the guest only data>>>>>#109
INFO  - 2013-11-15 15:15:37 --> 0 the guest only data>> AFTER >>>#108
INFO  - 2013-11-15 15:15:37 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:37 --> 0 the guest only data>>>>>#108
INFO  - 2013-11-15 15:15:37 --> 0 the guest only data>> AFTER >>>#107
INFO  - 2013-11-15 15:15:37 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:37 --> 1 the guest only data>>>>>#107
INFO  - 2013-11-15 15:15:37 --> 1 the guest only data>> AFTER >>>#107
INFO  - 2013-11-15 15:15:37 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:37 --> 0 the guest only data>>>>>#107
INFO  - 2013-11-15 15:15:37 --> 0 the guest only data>> AFTER >>>#105
INFO  - 2013-11-15 15:15:37 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:37 --> 0 the guest only data>>>>>#105
INFO  - 2013-11-15 15:15:37 --> 0 the guest only data>> AFTER >>>#104
INFO  - 2013-11-15 15:15:37 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:37 --> 0 the guest only data>>>>>#104
INFO  - 2013-11-15 15:15:37 --> 0 the guest only data>> AFTER >>>#103
INFO  - 2013-11-15 15:15:37 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:37 --> 0 the guest only data>>>>>#103
INFO  - 2013-11-15 15:15:37 --> 0 the guest only data>> AFTER >>>#102
INFO  - 2013-11-15 15:15:37 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:37 --> 0 the guest only data>>>>>#102
INFO  - 2013-11-15 15:15:37 --> 0 the guest only data>> AFTER >>>#101
INFO  - 2013-11-15 15:15:37 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:37 --> 0 the guest only data>>>>>#101
INFO  - 2013-11-15 15:15:37 --> 0 the guest only data>> AFTER >>>#100
INFO  - 2013-11-15 15:15:37 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:37 --> 0 the guest only data>>>>>#100
INFO  - 2013-11-15 15:15:37 --> 0 the guest only data>> AFTER >>>#99
INFO  - 2013-11-15 15:15:37 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:37 --> 0 the guest only data>>>>>#99
INFO  - 2013-11-15 15:15:37 --> 0 the guest only data>> AFTER >>>#98
INFO  - 2013-11-15 15:15:37 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:37 --> 0 the guest only data>>>>>#98
INFO  - 2013-11-15 15:15:37 --> 0 the guest only data>> AFTER >>>#97
INFO  - 2013-11-15 15:15:37 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:37 --> 1 the guest only data>>>>>#97
INFO  - 2013-11-15 15:15:37 --> 1 the guest only data>> AFTER >>>#97
INFO  - 2013-11-15 15:15:37 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:37 --> 0 the guest only data>>>>>#97
INFO  - 2013-11-15 15:15:37 --> 0 the guest only data>> AFTER >>>#95
INFO  - 2013-11-15 15:15:37 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:37 --> 0 the guest only data>>>>>#95
INFO  - 2013-11-15 15:15:37 --> 0 the guest only data>> AFTER >>>#94
INFO  - 2013-11-15 15:15:37 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:37 --> 1 the guest only data>>>>>#94
INFO  - 2013-11-15 15:15:37 --> 1 the guest only data>> AFTER >>>#94
DEBUG - 2013-11-15 15:15:37 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-11-15 15:15:37 --> Final output sent to browser
DEBUG - 2013-11-15 15:15:37 --> Total execution time: 0.1740
DEBUG - 2013-11-15 15:15:42 --> Config Class Initialized
DEBUG - 2013-11-15 15:15:42 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:15:42 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:15:42 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:15:42 --> URI Class Initialized
DEBUG - 2013-11-15 15:15:42 --> Router Class Initialized
DEBUG - 2013-11-15 15:15:42 --> Output Class Initialized
DEBUG - 2013-11-15 15:15:42 --> Security Class Initialized
DEBUG - 2013-11-15 15:15:42 --> Input Class Initialized
DEBUG - 2013-11-15 15:15:42 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:15:42 --> Language Class Initialized
DEBUG - 2013-11-15 15:15:42 --> Loader Class Initialized
DEBUG - 2013-11-15 15:15:42 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:15:42 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:15:42 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:15:42 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:15:42 --> Session Class Initialized
DEBUG - 2013-11-15 15:15:42 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:15:42 --> Session routines successfully run
DEBUG - 2013-11-15 15:15:42 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:15:42 --> Controller Class Initialized
DEBUG - 2013-11-15 15:15:42 --> Model Class Initialized
DEBUG - 2013-11-15 15:15:42 --> Model Class Initialized
DEBUG - 2013-11-15 15:15:42 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:15:42 --> after session initialization................
INFO  - 2013-11-15 15:15:42 --> last article id is 93
DEBUG - 2013-11-15 15:15:42 --> Final output sent to browser
DEBUG - 2013-11-15 15:15:42 --> Total execution time: 0.0600
DEBUG - 2013-11-15 15:15:45 --> Config Class Initialized
DEBUG - 2013-11-15 15:15:45 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:15:45 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:15:45 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:15:45 --> URI Class Initialized
DEBUG - 2013-11-15 15:15:45 --> Router Class Initialized
DEBUG - 2013-11-15 15:15:46 --> Output Class Initialized
DEBUG - 2013-11-15 15:15:46 --> Security Class Initialized
DEBUG - 2013-11-15 15:15:46 --> Input Class Initialized
DEBUG - 2013-11-15 15:15:46 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:15:46 --> Language Class Initialized
DEBUG - 2013-11-15 15:15:46 --> Loader Class Initialized
DEBUG - 2013-11-15 15:15:46 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:15:46 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:15:46 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:15:46 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:15:46 --> Session Class Initialized
DEBUG - 2013-11-15 15:15:46 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:15:46 --> Session routines successfully run
DEBUG - 2013-11-15 15:15:46 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:15:46 --> Controller Class Initialized
DEBUG - 2013-11-15 15:15:46 --> Model Class Initialized
DEBUG - 2013-11-15 15:15:46 --> Model Class Initialized
DEBUG - 2013-11-15 15:15:46 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:15:46 --> after session initialization................
INFO  - 2013-11-15 15:15:46 --> last article id is 83
DEBUG - 2013-11-15 15:15:46 --> Final output sent to browser
DEBUG - 2013-11-15 15:15:46 --> Total execution time: 0.0670
DEBUG - 2013-11-15 15:15:47 --> Config Class Initialized
DEBUG - 2013-11-15 15:15:47 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:15:47 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:15:47 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:15:47 --> URI Class Initialized
DEBUG - 2013-11-15 15:15:47 --> Router Class Initialized
DEBUG - 2013-11-15 15:15:47 --> Output Class Initialized
DEBUG - 2013-11-15 15:15:47 --> Security Class Initialized
DEBUG - 2013-11-15 15:15:47 --> Input Class Initialized
DEBUG - 2013-11-15 15:15:47 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:15:47 --> Language Class Initialized
DEBUG - 2013-11-15 15:15:47 --> Loader Class Initialized
DEBUG - 2013-11-15 15:15:47 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:15:47 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:15:47 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:15:47 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:15:47 --> Session Class Initialized
DEBUG - 2013-11-15 15:15:47 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:15:47 --> Session routines successfully run
DEBUG - 2013-11-15 15:15:47 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:15:47 --> Controller Class Initialized
DEBUG - 2013-11-15 15:15:47 --> Model Class Initialized
DEBUG - 2013-11-15 15:15:47 --> Model Class Initialized
DEBUG - 2013-11-15 15:15:47 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:15:47 --> after session initialization................
INFO  - 2013-11-15 15:15:47 --> last article id is 73
DEBUG - 2013-11-15 15:15:47 --> Final output sent to browser
DEBUG - 2013-11-15 15:15:47 --> Total execution time: 0.1240
DEBUG - 2013-11-15 15:15:48 --> Config Class Initialized
DEBUG - 2013-11-15 15:15:48 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:15:48 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:15:48 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:15:48 --> URI Class Initialized
DEBUG - 2013-11-15 15:15:48 --> Router Class Initialized
DEBUG - 2013-11-15 15:15:48 --> Output Class Initialized
DEBUG - 2013-11-15 15:15:48 --> Security Class Initialized
DEBUG - 2013-11-15 15:15:48 --> Input Class Initialized
DEBUG - 2013-11-15 15:15:48 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:15:48 --> Language Class Initialized
DEBUG - 2013-11-15 15:15:48 --> Loader Class Initialized
DEBUG - 2013-11-15 15:15:48 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:15:48 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:15:48 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:15:48 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:15:48 --> Session Class Initialized
DEBUG - 2013-11-15 15:15:48 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:15:48 --> Session routines successfully run
DEBUG - 2013-11-15 15:15:48 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:15:48 --> Controller Class Initialized
DEBUG - 2013-11-15 15:15:48 --> Model Class Initialized
DEBUG - 2013-11-15 15:15:48 --> Model Class Initialized
DEBUG - 2013-11-15 15:15:48 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:15:48 --> after session initialization................
INFO  - 2013-11-15 15:15:48 --> last article id is 62
DEBUG - 2013-11-15 15:15:48 --> Final output sent to browser
DEBUG - 2013-11-15 15:15:48 --> Total execution time: 0.0530
DEBUG - 2013-11-15 15:15:49 --> Config Class Initialized
DEBUG - 2013-11-15 15:15:49 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:15:49 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:15:49 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:15:49 --> URI Class Initialized
DEBUG - 2013-11-15 15:15:49 --> Router Class Initialized
DEBUG - 2013-11-15 15:15:49 --> Output Class Initialized
DEBUG - 2013-11-15 15:15:49 --> Security Class Initialized
DEBUG - 2013-11-15 15:15:49 --> Input Class Initialized
DEBUG - 2013-11-15 15:15:49 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:15:49 --> Language Class Initialized
DEBUG - 2013-11-15 15:15:49 --> Loader Class Initialized
DEBUG - 2013-11-15 15:15:49 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:15:49 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:15:49 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:15:49 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:15:49 --> Session Class Initialized
DEBUG - 2013-11-15 15:15:49 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:15:49 --> Session routines successfully run
DEBUG - 2013-11-15 15:15:49 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:15:49 --> Controller Class Initialized
DEBUG - 2013-11-15 15:15:49 --> Model Class Initialized
DEBUG - 2013-11-15 15:15:49 --> Model Class Initialized
DEBUG - 2013-11-15 15:15:49 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:15:49 --> after session initialization................
INFO  - 2013-11-15 15:15:49 --> last article id is 52
DEBUG - 2013-11-15 15:15:49 --> Final output sent to browser
DEBUG - 2013-11-15 15:15:49 --> Total execution time: 0.0470
DEBUG - 2013-11-15 15:15:52 --> Config Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:15:52 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:15:52 --> URI Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Router Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Output Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Security Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Input Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:15:52 --> Language Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Loader Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:15:52 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:15:52 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:15:52 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Session Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:15:52 --> Session routines successfully run
DEBUG - 2013-11-15 15:15:52 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Controller Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Model Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Model Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:15:52 --> after session initialization................
INFO  - 2013-11-15 15:15:52 --> after rays has been clicked.................
INFO  - 2013-11-15 15:15:52 --> last article id is 0
INFO  - 2013-11-15 15:15:52 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:52 --> 1 the guest only data>>>>>
INFO  - 2013-11-15 15:15:52 --> 1 the guest only data>> AFTER >>>
INFO  - 2013-11-15 15:15:52 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:52 --> 0 the guest only data>>>>>
INFO  - 2013-11-15 15:15:52 --> 0 the guest only data>> AFTER >>>#111
INFO  - 2013-11-15 15:15:52 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:52 --> 0 the guest only data>>>>>#111
INFO  - 2013-11-15 15:15:52 --> 0 the guest only data>> AFTER >>>#110
INFO  - 2013-11-15 15:15:52 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:52 --> 0 the guest only data>>>>>#110
INFO  - 2013-11-15 15:15:52 --> 0 the guest only data>> AFTER >>>#109
INFO  - 2013-11-15 15:15:52 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:52 --> 0 the guest only data>>>>>#109
INFO  - 2013-11-15 15:15:52 --> 0 the guest only data>> AFTER >>>#108
INFO  - 2013-11-15 15:15:52 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:52 --> 0 the guest only data>>>>>#108
INFO  - 2013-11-15 15:15:52 --> 0 the guest only data>> AFTER >>>#107
INFO  - 2013-11-15 15:15:52 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:52 --> 1 the guest only data>>>>>#107
INFO  - 2013-11-15 15:15:52 --> 1 the guest only data>> AFTER >>>#107
INFO  - 2013-11-15 15:15:52 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:52 --> 0 the guest only data>>>>>#107
INFO  - 2013-11-15 15:15:52 --> 0 the guest only data>> AFTER >>>#105
INFO  - 2013-11-15 15:15:52 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:52 --> 0 the guest only data>>>>>#105
INFO  - 2013-11-15 15:15:52 --> 0 the guest only data>> AFTER >>>#104
INFO  - 2013-11-15 15:15:52 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:52 --> 0 the guest only data>>>>>#104
INFO  - 2013-11-15 15:15:52 --> 0 the guest only data>> AFTER >>>#103
INFO  - 2013-11-15 15:15:52 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:52 --> 0 the guest only data>>>>>#103
INFO  - 2013-11-15 15:15:52 --> 0 the guest only data>> AFTER >>>#102
INFO  - 2013-11-15 15:15:52 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:52 --> 0 the guest only data>>>>>#102
INFO  - 2013-11-15 15:15:52 --> 0 the guest only data>> AFTER >>>#101
INFO  - 2013-11-15 15:15:52 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:52 --> 0 the guest only data>>>>>#101
INFO  - 2013-11-15 15:15:52 --> 0 the guest only data>> AFTER >>>#100
INFO  - 2013-11-15 15:15:52 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:52 --> 0 the guest only data>>>>>#100
INFO  - 2013-11-15 15:15:52 --> 0 the guest only data>> AFTER >>>#99
INFO  - 2013-11-15 15:15:52 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:52 --> 0 the guest only data>>>>>#99
INFO  - 2013-11-15 15:15:52 --> 0 the guest only data>> AFTER >>>#98
INFO  - 2013-11-15 15:15:52 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:52 --> 0 the guest only data>>>>>#98
INFO  - 2013-11-15 15:15:52 --> 0 the guest only data>> AFTER >>>#97
INFO  - 2013-11-15 15:15:52 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:52 --> 1 the guest only data>>>>>#97
INFO  - 2013-11-15 15:15:52 --> 1 the guest only data>> AFTER >>>#97
INFO  - 2013-11-15 15:15:52 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:52 --> 0 the guest only data>>>>>#97
INFO  - 2013-11-15 15:15:52 --> 0 the guest only data>> AFTER >>>#95
INFO  - 2013-11-15 15:15:52 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:52 --> 0 the guest only data>>>>>#95
INFO  - 2013-11-15 15:15:52 --> 0 the guest only data>> AFTER >>>#94
INFO  - 2013-11-15 15:15:52 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:52 --> 1 the guest only data>>>>>#94
INFO  - 2013-11-15 15:15:52 --> 1 the guest only data>> AFTER >>>#94
DEBUG - 2013-11-15 15:15:52 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-11-15 15:15:52 --> Final output sent to browser
DEBUG - 2013-11-15 15:15:52 --> Total execution time: 0.1070
DEBUG - 2013-11-15 15:15:52 --> Config Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:15:52 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:15:52 --> URI Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Router Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Output Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Security Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Input Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:15:52 --> Language Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Loader Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:15:52 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:15:52 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:15:52 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Session Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:15:52 --> Session routines successfully run
DEBUG - 2013-11-15 15:15:52 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Controller Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Model Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Model Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:15:52 --> after session initialization................
INFO  - 2013-11-15 15:15:52 --> last article id is 93
DEBUG - 2013-11-15 15:15:52 --> Final output sent to browser
DEBUG - 2013-11-15 15:15:52 --> Total execution time: 0.0480
DEBUG - 2013-11-15 15:15:52 --> Config Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:15:52 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:15:52 --> URI Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Router Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Output Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Security Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Input Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:15:52 --> Language Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Loader Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:15:52 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:15:52 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:15:52 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Session Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:15:52 --> Session routines successfully run
DEBUG - 2013-11-15 15:15:52 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Controller Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Model Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Model Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:15:52 --> after session initialization................
INFO  - 2013-11-15 15:15:52 --> last article id is 83
DEBUG - 2013-11-15 15:15:52 --> Final output sent to browser
DEBUG - 2013-11-15 15:15:52 --> Total execution time: 0.0450
DEBUG - 2013-11-15 15:15:52 --> Config Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:15:52 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:15:52 --> URI Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Router Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Output Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Security Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Input Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:15:52 --> Language Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Loader Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:15:52 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:15:52 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:15:52 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Session Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:15:52 --> Session routines successfully run
DEBUG - 2013-11-15 15:15:52 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Controller Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Model Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Model Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:15:52 --> after session initialization................
INFO  - 2013-11-15 15:15:52 --> last article id is 73
DEBUG - 2013-11-15 15:15:52 --> Final output sent to browser
DEBUG - 2013-11-15 15:15:52 --> Total execution time: 0.0530
DEBUG - 2013-11-15 15:15:52 --> Config Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:15:52 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:15:52 --> URI Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Router Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Output Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Security Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Input Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:15:52 --> Language Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Loader Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:15:52 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:15:52 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:15:52 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Session Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:15:52 --> Session routines successfully run
DEBUG - 2013-11-15 15:15:52 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Controller Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Model Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Model Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:15:52 --> after session initialization................
INFO  - 2013-11-15 15:15:52 --> last article id is 62
DEBUG - 2013-11-15 15:15:52 --> Final output sent to browser
DEBUG - 2013-11-15 15:15:52 --> Total execution time: 0.0510
DEBUG - 2013-11-15 15:15:52 --> Config Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:15:52 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:15:52 --> URI Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Router Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Output Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Security Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Input Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:15:52 --> Language Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Loader Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:15:52 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:15:52 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:15:52 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Session Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:15:52 --> Session routines successfully run
DEBUG - 2013-11-15 15:15:52 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Controller Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Model Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Model Class Initialized
DEBUG - 2013-11-15 15:15:52 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:15:52 --> after session initialization................
INFO  - 2013-11-15 15:15:52 --> last article id is 52
DEBUG - 2013-11-15 15:15:52 --> Final output sent to browser
DEBUG - 2013-11-15 15:15:52 --> Total execution time: 0.0490
DEBUG - 2013-11-15 15:15:55 --> Config Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:15:55 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:15:55 --> URI Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Router Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Output Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Security Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Input Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:15:55 --> Language Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Loader Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:15:55 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:15:55 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:15:55 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Session Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:15:55 --> Session routines successfully run
DEBUG - 2013-11-15 15:15:55 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Controller Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Model Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Model Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:15:55 --> after session initialization................
INFO  - 2013-11-15 15:15:55 --> after rays has been clicked.................
INFO  - 2013-11-15 15:15:55 --> last article id is 0
INFO  - 2013-11-15 15:15:55 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:55 --> 1 the guest only data>>>>>
INFO  - 2013-11-15 15:15:55 --> 1 the guest only data>> AFTER >>>
INFO  - 2013-11-15 15:15:55 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:55 --> 0 the guest only data>>>>>
INFO  - 2013-11-15 15:15:55 --> 0 the guest only data>> AFTER >>>#111
INFO  - 2013-11-15 15:15:55 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:55 --> 0 the guest only data>>>>>#111
INFO  - 2013-11-15 15:15:55 --> 0 the guest only data>> AFTER >>>#110
INFO  - 2013-11-15 15:15:55 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:55 --> 0 the guest only data>>>>>#110
INFO  - 2013-11-15 15:15:55 --> 0 the guest only data>> AFTER >>>#109
INFO  - 2013-11-15 15:15:55 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:55 --> 0 the guest only data>>>>>#109
INFO  - 2013-11-15 15:15:55 --> 0 the guest only data>> AFTER >>>#108
INFO  - 2013-11-15 15:15:55 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:55 --> 0 the guest only data>>>>>#108
INFO  - 2013-11-15 15:15:55 --> 0 the guest only data>> AFTER >>>#107
INFO  - 2013-11-15 15:15:55 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:55 --> 1 the guest only data>>>>>#107
INFO  - 2013-11-15 15:15:55 --> 1 the guest only data>> AFTER >>>#107
INFO  - 2013-11-15 15:15:55 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:55 --> 0 the guest only data>>>>>#107
INFO  - 2013-11-15 15:15:55 --> 0 the guest only data>> AFTER >>>#105
INFO  - 2013-11-15 15:15:55 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:55 --> 0 the guest only data>>>>>#105
INFO  - 2013-11-15 15:15:55 --> 0 the guest only data>> AFTER >>>#104
INFO  - 2013-11-15 15:15:55 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:55 --> 0 the guest only data>>>>>#104
INFO  - 2013-11-15 15:15:55 --> 0 the guest only data>> AFTER >>>#103
INFO  - 2013-11-15 15:15:55 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:55 --> 0 the guest only data>>>>>#103
INFO  - 2013-11-15 15:15:55 --> 0 the guest only data>> AFTER >>>#102
INFO  - 2013-11-15 15:15:55 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:55 --> 0 the guest only data>>>>>#102
INFO  - 2013-11-15 15:15:55 --> 0 the guest only data>> AFTER >>>#101
INFO  - 2013-11-15 15:15:55 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:55 --> 0 the guest only data>>>>>#101
INFO  - 2013-11-15 15:15:55 --> 0 the guest only data>> AFTER >>>#100
INFO  - 2013-11-15 15:15:55 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:55 --> 0 the guest only data>>>>>#100
INFO  - 2013-11-15 15:15:55 --> 0 the guest only data>> AFTER >>>#99
INFO  - 2013-11-15 15:15:55 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:55 --> 0 the guest only data>>>>>#99
INFO  - 2013-11-15 15:15:55 --> 0 the guest only data>> AFTER >>>#98
INFO  - 2013-11-15 15:15:55 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:55 --> 0 the guest only data>>>>>#98
INFO  - 2013-11-15 15:15:55 --> 0 the guest only data>> AFTER >>>#97
INFO  - 2013-11-15 15:15:55 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:55 --> 1 the guest only data>>>>>#97
INFO  - 2013-11-15 15:15:55 --> 1 the guest only data>> AFTER >>>#97
INFO  - 2013-11-15 15:15:55 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:55 --> 0 the guest only data>>>>>#97
INFO  - 2013-11-15 15:15:55 --> 0 the guest only data>> AFTER >>>#95
INFO  - 2013-11-15 15:15:55 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:55 --> 0 the guest only data>>>>>#95
INFO  - 2013-11-15 15:15:55 --> 0 the guest only data>> AFTER >>>#94
INFO  - 2013-11-15 15:15:55 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:15:55 --> 1 the guest only data>>>>>#94
INFO  - 2013-11-15 15:15:55 --> 1 the guest only data>> AFTER >>>#94
DEBUG - 2013-11-15 15:15:55 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-11-15 15:15:55 --> Final output sent to browser
DEBUG - 2013-11-15 15:15:55 --> Total execution time: 0.0950
DEBUG - 2013-11-15 15:15:55 --> Config Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:15:55 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:15:55 --> URI Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Router Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Output Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Security Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Input Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:15:55 --> Language Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Loader Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:15:55 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:15:55 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:15:55 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Session Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:15:55 --> Session routines successfully run
DEBUG - 2013-11-15 15:15:55 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Controller Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Model Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Model Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:15:55 --> after session initialization................
INFO  - 2013-11-15 15:15:55 --> last article id is 93
DEBUG - 2013-11-15 15:15:55 --> Final output sent to browser
DEBUG - 2013-11-15 15:15:55 --> Total execution time: 0.0540
DEBUG - 2013-11-15 15:15:55 --> Config Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:15:55 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:15:55 --> URI Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Router Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Output Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Security Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Input Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:15:55 --> Language Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Loader Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:15:55 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:15:55 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:15:55 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Session Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:15:55 --> Session routines successfully run
DEBUG - 2013-11-15 15:15:55 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Controller Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Model Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Model Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:15:55 --> after session initialization................
INFO  - 2013-11-15 15:15:55 --> last article id is 83
DEBUG - 2013-11-15 15:15:55 --> Final output sent to browser
DEBUG - 2013-11-15 15:15:55 --> Total execution time: 0.0490
DEBUG - 2013-11-15 15:15:55 --> Config Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:15:55 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:15:55 --> URI Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Router Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Output Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Security Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Input Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:15:55 --> Language Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Loader Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:15:55 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:15:55 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:15:55 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Session Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:15:55 --> Session routines successfully run
DEBUG - 2013-11-15 15:15:55 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Controller Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Model Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Model Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:15:55 --> after session initialization................
INFO  - 2013-11-15 15:15:55 --> last article id is 73
DEBUG - 2013-11-15 15:15:55 --> Final output sent to browser
DEBUG - 2013-11-15 15:15:55 --> Total execution time: 0.0490
DEBUG - 2013-11-15 15:15:55 --> Config Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:15:55 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:15:55 --> URI Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Router Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Output Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Security Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Input Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:15:55 --> Language Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Loader Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:15:55 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:15:55 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:15:55 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Session Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:15:55 --> Session routines successfully run
DEBUG - 2013-11-15 15:15:55 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Controller Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Model Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Model Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:15:55 --> after session initialization................
INFO  - 2013-11-15 15:15:55 --> last article id is 62
DEBUG - 2013-11-15 15:15:55 --> Final output sent to browser
DEBUG - 2013-11-15 15:15:55 --> Total execution time: 0.0550
DEBUG - 2013-11-15 15:15:55 --> Config Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:15:55 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:15:55 --> URI Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Router Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Output Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Security Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Input Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:15:55 --> Language Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Loader Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:15:55 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:15:55 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:15:55 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Session Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:15:55 --> Session routines successfully run
DEBUG - 2013-11-15 15:15:55 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Controller Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Model Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Model Class Initialized
DEBUG - 2013-11-15 15:15:55 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:15:55 --> after session initialization................
INFO  - 2013-11-15 15:15:55 --> last article id is 52
DEBUG - 2013-11-15 15:15:55 --> Final output sent to browser
DEBUG - 2013-11-15 15:15:55 --> Total execution time: 0.0450
DEBUG - 2013-11-15 15:16:04 --> Config Class Initialized
DEBUG - 2013-11-15 15:16:04 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:16:04 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:16:04 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:16:04 --> URI Class Initialized
DEBUG - 2013-11-15 15:16:04 --> Router Class Initialized
DEBUG - 2013-11-15 15:16:04 --> Output Class Initialized
DEBUG - 2013-11-15 15:16:04 --> Security Class Initialized
DEBUG - 2013-11-15 15:16:04 --> Input Class Initialized
DEBUG - 2013-11-15 15:16:04 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:16:04 --> Language Class Initialized
DEBUG - 2013-11-15 15:16:04 --> Loader Class Initialized
DEBUG - 2013-11-15 15:16:04 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:16:04 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:16:04 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:16:04 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:16:04 --> Session Class Initialized
DEBUG - 2013-11-15 15:16:04 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:16:04 --> Session routines successfully run
DEBUG - 2013-11-15 15:16:04 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:16:04 --> Controller Class Initialized
DEBUG - 2013-11-15 15:16:04 --> Model Class Initialized
DEBUG - 2013-11-15 15:16:04 --> Model Class Initialized
DEBUG - 2013-11-15 15:16:04 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:16:04 --> after session initialization................
ERROR - 2013-11-15 15:16:04 --> Severity: Warning  --> Missing argument 1 for user_authorization::index() C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 192
ERROR - 2013-11-15 15:16:04 --> Severity: Notice  --> Undefined variable: message C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 194
DEBUG - 2013-11-15 15:16:04 --> Config Class Initialized
DEBUG - 2013-11-15 15:16:04 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:16:04 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:16:04 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:16:04 --> URI Class Initialized
DEBUG - 2013-11-15 15:16:04 --> Router Class Initialized
DEBUG - 2013-11-15 15:16:04 --> No URI present. Default controller set.
DEBUG - 2013-11-15 15:16:04 --> Output Class Initialized
DEBUG - 2013-11-15 15:16:04 --> Security Class Initialized
DEBUG - 2013-11-15 15:16:04 --> Input Class Initialized
DEBUG - 2013-11-15 15:16:04 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:16:04 --> Language Class Initialized
DEBUG - 2013-11-15 15:16:04 --> Loader Class Initialized
DEBUG - 2013-11-15 15:16:04 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:16:04 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:16:04 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:16:04 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:16:04 --> Session Class Initialized
DEBUG - 2013-11-15 15:16:04 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:16:04 --> Session routines successfully run
DEBUG - 2013-11-15 15:16:04 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:16:04 --> Controller Class Initialized
INFO  - 2013-11-15 15:16:04 --> the form message==>
INFO  - 2013-11-15 15:16:04 --> The session id is ========>00d16a5d411342d4ff2f1ec668c684af and the member id is =======>
INFO  - 2013-11-15 15:16:04 --> after the retrieving session list.................//////////
DEBUG - 2013-11-15 15:16:04 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-11-15 15:16:04 --> Final output sent to browser
DEBUG - 2013-11-15 15:16:04 --> Total execution time: 0.0540
DEBUG - 2013-11-15 15:16:05 --> Config Class Initialized
DEBUG - 2013-11-15 15:16:05 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:16:05 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:16:05 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:16:05 --> URI Class Initialized
DEBUG - 2013-11-15 15:16:05 --> Router Class Initialized
DEBUG - 2013-11-15 15:16:05 --> Output Class Initialized
DEBUG - 2013-11-15 15:16:05 --> Security Class Initialized
DEBUG - 2013-11-15 15:16:05 --> Input Class Initialized
DEBUG - 2013-11-15 15:16:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:16:05 --> Language Class Initialized
DEBUG - 2013-11-15 15:16:05 --> Loader Class Initialized
DEBUG - 2013-11-15 15:16:05 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:16:05 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:16:05 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:16:05 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:16:05 --> Session Class Initialized
DEBUG - 2013-11-15 15:16:05 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:16:05 --> Session routines successfully run
DEBUG - 2013-11-15 15:16:05 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:16:05 --> Controller Class Initialized
DEBUG - 2013-11-15 15:16:05 --> Model Class Initialized
DEBUG - 2013-11-15 15:16:05 --> Model Class Initialized
DEBUG - 2013-11-15 15:16:05 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:16:05 --> after session initialization................
INFO  - 2013-11-15 15:16:05 --> after rays has been clicked.................
INFO  - 2013-11-15 15:16:05 --> last article id is 0
INFO  - 2013-11-15 15:16:05 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:16:05 --> 1 the guest only data>>>>>
INFO  - 2013-11-15 15:16:05 --> 1 the guest only data>> AFTER >>>
INFO  - 2013-11-15 15:16:05 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:16:05 --> 0 the guest only data>>>>>
INFO  - 2013-11-15 15:16:05 --> 0 the guest only data>> AFTER >>>#111
INFO  - 2013-11-15 15:16:05 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:16:05 --> 0 the guest only data>>>>>#111
INFO  - 2013-11-15 15:16:05 --> 0 the guest only data>> AFTER >>>#110
INFO  - 2013-11-15 15:16:05 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:16:05 --> 0 the guest only data>>>>>#110
INFO  - 2013-11-15 15:16:05 --> 0 the guest only data>> AFTER >>>#109
INFO  - 2013-11-15 15:16:05 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:16:05 --> 0 the guest only data>>>>>#109
INFO  - 2013-11-15 15:16:05 --> 0 the guest only data>> AFTER >>>#108
INFO  - 2013-11-15 15:16:05 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:16:05 --> 0 the guest only data>>>>>#108
INFO  - 2013-11-15 15:16:05 --> 0 the guest only data>> AFTER >>>#107
INFO  - 2013-11-15 15:16:05 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:16:05 --> 1 the guest only data>>>>>#107
INFO  - 2013-11-15 15:16:05 --> 1 the guest only data>> AFTER >>>#107
INFO  - 2013-11-15 15:16:05 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:16:05 --> 0 the guest only data>>>>>#107
INFO  - 2013-11-15 15:16:05 --> 0 the guest only data>> AFTER >>>#105
INFO  - 2013-11-15 15:16:05 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:16:05 --> 0 the guest only data>>>>>#105
INFO  - 2013-11-15 15:16:05 --> 0 the guest only data>> AFTER >>>#104
INFO  - 2013-11-15 15:16:05 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:16:05 --> 0 the guest only data>>>>>#104
INFO  - 2013-11-15 15:16:05 --> 0 the guest only data>> AFTER >>>#103
INFO  - 2013-11-15 15:16:05 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:16:05 --> 0 the guest only data>>>>>#103
INFO  - 2013-11-15 15:16:05 --> 0 the guest only data>> AFTER >>>#102
INFO  - 2013-11-15 15:16:05 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:16:05 --> 0 the guest only data>>>>>#102
INFO  - 2013-11-15 15:16:05 --> 0 the guest only data>> AFTER >>>#101
INFO  - 2013-11-15 15:16:05 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:16:05 --> 0 the guest only data>>>>>#101
INFO  - 2013-11-15 15:16:05 --> 0 the guest only data>> AFTER >>>#100
INFO  - 2013-11-15 15:16:05 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:16:05 --> 0 the guest only data>>>>>#100
INFO  - 2013-11-15 15:16:05 --> 0 the guest only data>> AFTER >>>#99
INFO  - 2013-11-15 15:16:05 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:16:05 --> 0 the guest only data>>>>>#99
INFO  - 2013-11-15 15:16:05 --> 0 the guest only data>> AFTER >>>#98
INFO  - 2013-11-15 15:16:05 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:16:05 --> 0 the guest only data>>>>>#98
INFO  - 2013-11-15 15:16:05 --> 0 the guest only data>> AFTER >>>#97
INFO  - 2013-11-15 15:16:05 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:16:05 --> 1 the guest only data>>>>>#97
INFO  - 2013-11-15 15:16:05 --> 1 the guest only data>> AFTER >>>#97
INFO  - 2013-11-15 15:16:05 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:16:05 --> 0 the guest only data>>>>>#97
INFO  - 2013-11-15 15:16:05 --> 0 the guest only data>> AFTER >>>#95
INFO  - 2013-11-15 15:16:05 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:16:05 --> 0 the guest only data>>>>>#95
INFO  - 2013-11-15 15:16:05 --> 0 the guest only data>> AFTER >>>#94
INFO  - 2013-11-15 15:16:05 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:16:05 --> 1 the guest only data>>>>>#94
INFO  - 2013-11-15 15:16:05 --> 1 the guest only data>> AFTER >>>#94
DEBUG - 2013-11-15 15:16:05 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-11-15 15:16:05 --> Final output sent to browser
DEBUG - 2013-11-15 15:16:05 --> Total execution time: 0.0860
DEBUG - 2013-11-15 15:16:10 --> Config Class Initialized
DEBUG - 2013-11-15 15:16:10 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:16:10 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:16:10 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:16:10 --> URI Class Initialized
DEBUG - 2013-11-15 15:16:10 --> Router Class Initialized
DEBUG - 2013-11-15 15:16:10 --> Output Class Initialized
DEBUG - 2013-11-15 15:16:10 --> Security Class Initialized
DEBUG - 2013-11-15 15:16:10 --> Input Class Initialized
DEBUG - 2013-11-15 15:16:10 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:16:10 --> Language Class Initialized
DEBUG - 2013-11-15 15:16:10 --> Loader Class Initialized
DEBUG - 2013-11-15 15:16:10 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:16:10 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:16:10 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:16:10 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:16:10 --> Session Class Initialized
DEBUG - 2013-11-15 15:16:10 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:16:10 --> Session routines successfully run
DEBUG - 2013-11-15 15:16:10 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:16:10 --> Controller Class Initialized
DEBUG - 2013-11-15 15:16:10 --> Model Class Initialized
DEBUG - 2013-11-15 15:16:10 --> Model Class Initialized
DEBUG - 2013-11-15 15:16:10 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:16:10 --> after session initialization................
INFO  - 2013-11-15 15:16:10 --> last article id is 93
DEBUG - 2013-11-15 15:16:10 --> Final output sent to browser
DEBUG - 2013-11-15 15:16:10 --> Total execution time: 0.0460
DEBUG - 2013-11-15 15:16:23 --> Config Class Initialized
DEBUG - 2013-11-15 15:16:23 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:16:23 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:16:23 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:16:23 --> URI Class Initialized
DEBUG - 2013-11-15 15:16:23 --> Router Class Initialized
DEBUG - 2013-11-15 15:16:23 --> Output Class Initialized
DEBUG - 2013-11-15 15:16:23 --> Security Class Initialized
DEBUG - 2013-11-15 15:16:23 --> Input Class Initialized
DEBUG - 2013-11-15 15:16:23 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:16:23 --> Language Class Initialized
DEBUG - 2013-11-15 15:16:23 --> Loader Class Initialized
DEBUG - 2013-11-15 15:16:23 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:16:23 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:16:23 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:16:23 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:16:23 --> Session Class Initialized
DEBUG - 2013-11-15 15:16:23 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:16:23 --> Session routines successfully run
DEBUG - 2013-11-15 15:16:23 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:16:23 --> Controller Class Initialized
DEBUG - 2013-11-15 15:16:23 --> Model Class Initialized
DEBUG - 2013-11-15 15:16:23 --> Model Class Initialized
DEBUG - 2013-11-15 15:16:23 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:16:23 --> after session initialization................
INFO  - 2013-11-15 15:16:23 --> last article id is 83
DEBUG - 2013-11-15 15:16:23 --> Final output sent to browser
DEBUG - 2013-11-15 15:16:23 --> Total execution time: 0.0530
DEBUG - 2013-11-15 15:18:50 --> Config Class Initialized
DEBUG - 2013-11-15 15:18:50 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:18:50 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:18:50 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:18:50 --> URI Class Initialized
DEBUG - 2013-11-15 15:18:50 --> Router Class Initialized
DEBUG - 2013-11-15 15:18:50 --> Output Class Initialized
DEBUG - 2013-11-15 15:18:50 --> Security Class Initialized
DEBUG - 2013-11-15 15:18:50 --> Input Class Initialized
DEBUG - 2013-11-15 15:18:50 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:18:50 --> Language Class Initialized
DEBUG - 2013-11-15 15:18:50 --> Loader Class Initialized
DEBUG - 2013-11-15 15:18:50 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:18:50 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:18:50 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:18:50 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:18:50 --> Session Class Initialized
DEBUG - 2013-11-15 15:18:50 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:18:50 --> Session routines successfully run
DEBUG - 2013-11-15 15:18:50 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:18:50 --> Controller Class Initialized
DEBUG - 2013-11-15 15:18:50 --> Model Class Initialized
DEBUG - 2013-11-15 15:18:50 --> Model Class Initialized
DEBUG - 2013-11-15 15:18:50 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:18:50 --> after session initialization................
ERROR - 2013-11-15 15:18:50 --> Severity: Warning  --> Missing argument 1 for user_authorization::index() C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 192
ERROR - 2013-11-15 15:18:50 --> Severity: Notice  --> Undefined variable: message C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 194
DEBUG - 2013-11-15 15:18:50 --> Config Class Initialized
DEBUG - 2013-11-15 15:18:50 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:18:50 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:18:50 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:18:50 --> URI Class Initialized
DEBUG - 2013-11-15 15:18:50 --> Router Class Initialized
DEBUG - 2013-11-15 15:18:50 --> No URI present. Default controller set.
DEBUG - 2013-11-15 15:18:50 --> Output Class Initialized
DEBUG - 2013-11-15 15:18:50 --> Security Class Initialized
DEBUG - 2013-11-15 15:18:50 --> Input Class Initialized
DEBUG - 2013-11-15 15:18:50 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:18:50 --> Language Class Initialized
DEBUG - 2013-11-15 15:18:50 --> Loader Class Initialized
DEBUG - 2013-11-15 15:18:50 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:18:50 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:18:50 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:18:50 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:18:50 --> Session Class Initialized
DEBUG - 2013-11-15 15:18:50 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:18:50 --> Session routines successfully run
DEBUG - 2013-11-15 15:18:50 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:18:50 --> Controller Class Initialized
INFO  - 2013-11-15 15:18:50 --> the form message==>
INFO  - 2013-11-15 15:18:50 --> The session id is ========>00d16a5d411342d4ff2f1ec668c684af and the member id is =======>
INFO  - 2013-11-15 15:18:50 --> after the retrieving session list.................//////////
DEBUG - 2013-11-15 15:18:50 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-11-15 15:18:50 --> Final output sent to browser
DEBUG - 2013-11-15 15:18:50 --> Total execution time: 0.0570
DEBUG - 2013-11-15 15:18:54 --> Config Class Initialized
DEBUG - 2013-11-15 15:18:54 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:18:54 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:18:54 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:18:54 --> URI Class Initialized
DEBUG - 2013-11-15 15:18:54 --> Router Class Initialized
DEBUG - 2013-11-15 15:18:54 --> Output Class Initialized
DEBUG - 2013-11-15 15:18:54 --> Security Class Initialized
DEBUG - 2013-11-15 15:18:54 --> Input Class Initialized
DEBUG - 2013-11-15 15:18:54 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:18:54 --> Language Class Initialized
DEBUG - 2013-11-15 15:18:54 --> Loader Class Initialized
DEBUG - 2013-11-15 15:18:54 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:18:54 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:18:54 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:18:54 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:18:54 --> Session Class Initialized
DEBUG - 2013-11-15 15:18:54 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:18:54 --> Session routines successfully run
DEBUG - 2013-11-15 15:18:54 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:18:54 --> Controller Class Initialized
DEBUG - 2013-11-15 15:18:54 --> Model Class Initialized
DEBUG - 2013-11-15 15:18:54 --> Model Class Initialized
DEBUG - 2013-11-15 15:18:54 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:18:54 --> after session initialization................
INFO  - 2013-11-15 15:18:54 --> inside rays login auth.............
DEBUG - 2013-11-15 15:18:54 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-11-15 15:18:54 --> XSS Filtering completed
DEBUG - 2013-11-15 15:18:54 --> XSS Filtering completed
INFO  - 2013-11-15 15:18:54 --> before getting the relation of member............6
INFO  - 2013-11-15 15:18:54 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-11-15 15:18:54 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-15 15:18:54 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-11-15 15:18:54 --> inside retrieving vacancy for member
INFO  - 2013-11-15 15:18:54 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-11-15 15:18:54 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-15 15:18:54 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-11-15 15:18:55 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-11-15 15:18:55 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-15 15:18:55 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-15 15:18:55 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-11-15 15:18:55 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-11-15 15:18:55 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-11-15 15:18:55 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-11-15 15:18:55 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-11-15 15:18:55 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-11-15 15:18:55 --> Final output sent to browser
DEBUG - 2013-11-15 15:18:55 --> Total execution time: 0.3200
DEBUG - 2013-11-15 15:18:55 --> Config Class Initialized
DEBUG - 2013-11-15 15:18:55 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:18:55 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:18:55 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:18:55 --> URI Class Initialized
DEBUG - 2013-11-15 15:18:55 --> Router Class Initialized
DEBUG - 2013-11-15 15:18:55 --> Output Class Initialized
DEBUG - 2013-11-15 15:18:55 --> Security Class Initialized
DEBUG - 2013-11-15 15:18:55 --> Input Class Initialized
DEBUG - 2013-11-15 15:18:55 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:18:55 --> Language Class Initialized
DEBUG - 2013-11-15 15:18:55 --> Loader Class Initialized
DEBUG - 2013-11-15 15:18:55 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:18:55 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:18:55 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:18:55 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:18:55 --> Session Class Initialized
DEBUG - 2013-11-15 15:18:55 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:18:55 --> Session routines successfully run
DEBUG - 2013-11-15 15:18:55 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:18:55 --> Controller Class Initialized
DEBUG - 2013-11-15 15:18:55 --> Model Class Initialized
DEBUG - 2013-11-15 15:18:55 --> Model Class Initialized
DEBUG - 2013-11-15 15:18:55 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:18:55 --> after session initialization................
ERROR - 2013-11-15 15:18:55 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-15 15:18:55 --> Config Class Initialized
DEBUG - 2013-11-15 15:18:55 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:18:55 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:18:55 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:18:55 --> URI Class Initialized
DEBUG - 2013-11-15 15:18:55 --> Router Class Initialized
DEBUG - 2013-11-15 15:18:55 --> Output Class Initialized
DEBUG - 2013-11-15 15:18:55 --> Security Class Initialized
DEBUG - 2013-11-15 15:18:55 --> Input Class Initialized
DEBUG - 2013-11-15 15:18:55 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:18:55 --> Language Class Initialized
DEBUG - 2013-11-15 15:18:55 --> Loader Class Initialized
DEBUG - 2013-11-15 15:18:55 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:18:55 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:18:55 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:18:55 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:18:55 --> Session Class Initialized
DEBUG - 2013-11-15 15:18:55 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:18:55 --> Session routines successfully run
DEBUG - 2013-11-15 15:18:55 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:18:55 --> Controller Class Initialized
DEBUG - 2013-11-15 15:18:55 --> Model Class Initialized
DEBUG - 2013-11-15 15:18:55 --> Model Class Initialized
DEBUG - 2013-11-15 15:18:55 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:18:55 --> after session initialization................
ERROR - 2013-11-15 15:18:55 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-15 15:18:55 --> Config Class Initialized
DEBUG - 2013-11-15 15:18:55 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:18:55 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:18:55 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:18:55 --> URI Class Initialized
DEBUG - 2013-11-15 15:18:55 --> Router Class Initialized
ERROR - 2013-11-15 15:18:55 --> 404 Page Not Found --> css
DEBUG - 2013-11-15 15:18:56 --> Config Class Initialized
DEBUG - 2013-11-15 15:18:56 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:18:56 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:18:56 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:18:56 --> URI Class Initialized
DEBUG - 2013-11-15 15:18:56 --> Router Class Initialized
DEBUG - 2013-11-15 15:18:56 --> Output Class Initialized
DEBUG - 2013-11-15 15:18:56 --> Security Class Initialized
DEBUG - 2013-11-15 15:18:56 --> Input Class Initialized
DEBUG - 2013-11-15 15:18:56 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:18:56 --> Language Class Initialized
DEBUG - 2013-11-15 15:18:56 --> Loader Class Initialized
DEBUG - 2013-11-15 15:18:56 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:18:56 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:18:56 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:18:56 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:18:56 --> Session Class Initialized
DEBUG - 2013-11-15 15:18:56 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:18:56 --> Session routines successfully run
DEBUG - 2013-11-15 15:18:56 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:18:56 --> Controller Class Initialized
DEBUG - 2013-11-15 15:18:56 --> Model Class Initialized
DEBUG - 2013-11-15 15:18:56 --> Model Class Initialized
DEBUG - 2013-11-15 15:18:56 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:18:56 --> after session initialization................
INFO  - 2013-11-15 15:18:56 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 15:18:56 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 15:18:56 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 15:18:56 --> inside retrieving locations 
INFO  - 2013-11-15 15:18:56 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 15:18:56 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 15:18:56 --> Final output sent to browser
DEBUG - 2013-11-15 15:18:56 --> Total execution time: 0.0620
DEBUG - 2013-11-15 15:21:35 --> Config Class Initialized
DEBUG - 2013-11-15 15:21:35 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:21:35 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:21:35 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:21:35 --> URI Class Initialized
DEBUG - 2013-11-15 15:21:35 --> Router Class Initialized
DEBUG - 2013-11-15 15:21:35 --> Output Class Initialized
DEBUG - 2013-11-15 15:21:35 --> Security Class Initialized
DEBUG - 2013-11-15 15:21:35 --> Input Class Initialized
DEBUG - 2013-11-15 15:21:35 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:21:35 --> Language Class Initialized
DEBUG - 2013-11-15 15:21:35 --> Loader Class Initialized
DEBUG - 2013-11-15 15:21:35 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:21:35 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:21:35 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:21:35 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:21:35 --> Session Class Initialized
DEBUG - 2013-11-15 15:21:35 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:21:35 --> Session routines successfully run
DEBUG - 2013-11-15 15:21:35 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:21:35 --> Controller Class Initialized
DEBUG - 2013-11-15 15:21:35 --> Model Class Initialized
DEBUG - 2013-11-15 15:21:35 --> Model Class Initialized
DEBUG - 2013-11-15 15:21:35 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:21:35 --> after session initialization................
INFO  - 2013-11-15 15:21:35 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 15:21:35 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 15:21:35 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 15:21:35 --> inside retrieving locations 
INFO  - 2013-11-15 15:21:35 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 15:21:35 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 15:21:35 --> Final output sent to browser
DEBUG - 2013-11-15 15:21:35 --> Total execution time: 0.0720
DEBUG - 2013-11-15 15:21:49 --> Config Class Initialized
DEBUG - 2013-11-15 15:21:49 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:21:49 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:21:49 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:21:49 --> URI Class Initialized
DEBUG - 2013-11-15 15:21:49 --> Router Class Initialized
DEBUG - 2013-11-15 15:21:49 --> Output Class Initialized
DEBUG - 2013-11-15 15:21:49 --> Security Class Initialized
DEBUG - 2013-11-15 15:21:49 --> Input Class Initialized
DEBUG - 2013-11-15 15:21:49 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:21:49 --> Language Class Initialized
DEBUG - 2013-11-15 15:21:49 --> Loader Class Initialized
DEBUG - 2013-11-15 15:21:49 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:21:49 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:21:49 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:21:49 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:21:49 --> Session Class Initialized
DEBUG - 2013-11-15 15:21:49 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:21:49 --> Session routines successfully run
DEBUG - 2013-11-15 15:21:49 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:21:49 --> Controller Class Initialized
DEBUG - 2013-11-15 15:21:49 --> Model Class Initialized
DEBUG - 2013-11-15 15:21:49 --> Model Class Initialized
DEBUG - 2013-11-15 15:21:49 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:21:49 --> after session initialization................
INFO  - 2013-11-15 15:21:49 --> last pharmacy id is 26
INFO  - 2013-11-15 15:21:49 --> Ajax retrieval ::::::::::===>SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` < 26
ORDER BY `p`.`id_pharmacy`, `p`.`name` desc
LIMIT 25
DEBUG - 2013-11-15 15:21:49 --> Final output sent to browser
DEBUG - 2013-11-15 15:21:49 --> Total execution time: 0.0480
DEBUG - 2013-11-15 15:21:51 --> Config Class Initialized
DEBUG - 2013-11-15 15:21:51 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:21:51 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:21:51 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:21:51 --> URI Class Initialized
DEBUG - 2013-11-15 15:21:51 --> Router Class Initialized
DEBUG - 2013-11-15 15:21:51 --> Output Class Initialized
DEBUG - 2013-11-15 15:21:51 --> Security Class Initialized
DEBUG - 2013-11-15 15:21:51 --> Input Class Initialized
DEBUG - 2013-11-15 15:21:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:21:51 --> Language Class Initialized
DEBUG - 2013-11-15 15:21:51 --> Loader Class Initialized
DEBUG - 2013-11-15 15:21:51 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:21:51 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:21:51 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:21:51 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:21:51 --> Session Class Initialized
DEBUG - 2013-11-15 15:21:51 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:21:51 --> Session routines successfully run
DEBUG - 2013-11-15 15:21:51 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:21:51 --> Controller Class Initialized
DEBUG - 2013-11-15 15:21:51 --> Model Class Initialized
DEBUG - 2013-11-15 15:21:51 --> Model Class Initialized
DEBUG - 2013-11-15 15:21:51 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:21:51 --> after session initialization................
INFO  - 2013-11-15 15:21:51 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 15:21:51 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 15:21:51 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 15:21:51 --> inside retrieving locations 
INFO  - 2013-11-15 15:21:51 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 15:21:51 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 15:21:51 --> Final output sent to browser
DEBUG - 2013-11-15 15:21:51 --> Total execution time: 0.0760
DEBUG - 2013-11-15 15:22:15 --> Config Class Initialized
DEBUG - 2013-11-15 15:22:15 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:22:15 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:22:15 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:22:15 --> URI Class Initialized
DEBUG - 2013-11-15 15:22:15 --> Router Class Initialized
DEBUG - 2013-11-15 15:22:15 --> Output Class Initialized
DEBUG - 2013-11-15 15:22:15 --> Security Class Initialized
DEBUG - 2013-11-15 15:22:15 --> Input Class Initialized
DEBUG - 2013-11-15 15:22:15 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:22:15 --> Language Class Initialized
DEBUG - 2013-11-15 15:22:15 --> Loader Class Initialized
DEBUG - 2013-11-15 15:22:15 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:22:15 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:22:15 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:22:15 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:22:15 --> Session Class Initialized
DEBUG - 2013-11-15 15:22:15 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:22:15 --> Session routines successfully run
DEBUG - 2013-11-15 15:22:15 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:22:15 --> Controller Class Initialized
DEBUG - 2013-11-15 15:22:15 --> Model Class Initialized
DEBUG - 2013-11-15 15:22:15 --> Model Class Initialized
DEBUG - 2013-11-15 15:22:15 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:22:15 --> after session initialization................
INFO  - 2013-11-15 15:22:15 --> last pharmacy id is 26
INFO  - 2013-11-15 15:22:15 --> Ajax retrieval ::::::::::===>SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` < 26
ORDER BY `p`.`id_pharmacy`, `p`.`name` desc
LIMIT 25
DEBUG - 2013-11-15 15:22:15 --> Final output sent to browser
DEBUG - 2013-11-15 15:22:15 --> Total execution time: 0.0520
DEBUG - 2013-11-15 15:22:24 --> Config Class Initialized
DEBUG - 2013-11-15 15:22:24 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:22:24 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:22:24 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:22:24 --> URI Class Initialized
DEBUG - 2013-11-15 15:22:24 --> Router Class Initialized
DEBUG - 2013-11-15 15:22:24 --> Config Class Initialized
DEBUG - 2013-11-15 15:22:24 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:22:24 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:22:24 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:22:24 --> Output Class Initialized
DEBUG - 2013-11-15 15:22:24 --> URI Class Initialized
DEBUG - 2013-11-15 15:22:24 --> Security Class Initialized
DEBUG - 2013-11-15 15:22:24 --> Router Class Initialized
DEBUG - 2013-11-15 15:22:24 --> Input Class Initialized
DEBUG - 2013-11-15 15:22:24 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:22:24 --> Language Class Initialized
DEBUG - 2013-11-15 15:22:24 --> Output Class Initialized
DEBUG - 2013-11-15 15:22:24 --> Security Class Initialized
DEBUG - 2013-11-15 15:22:24 --> Input Class Initialized
DEBUG - 2013-11-15 15:22:24 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:22:24 --> Loader Class Initialized
DEBUG - 2013-11-15 15:22:24 --> Config Class Initialized
DEBUG - 2013-11-15 15:22:24 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:22:24 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:22:24 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:22:24 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:22:24 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:22:24 --> URI Class Initialized
DEBUG - 2013-11-15 15:22:24 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:22:24 --> Router Class Initialized
DEBUG - 2013-11-15 15:22:24 --> Output Class Initialized
DEBUG - 2013-11-15 15:22:24 --> Security Class Initialized
DEBUG - 2013-11-15 15:22:24 --> Language Class Initialized
DEBUG - 2013-11-15 15:22:24 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:22:24 --> Loader Class Initialized
DEBUG - 2013-11-15 15:22:24 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:22:24 --> Session Class Initialized
DEBUG - 2013-11-15 15:22:24 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:22:24 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:22:24 --> Session routines successfully run
DEBUG - 2013-11-15 15:22:24 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:22:24 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:22:24 --> Controller Class Initialized
DEBUG - 2013-11-15 15:22:24 --> Model Class Initialized
DEBUG - 2013-11-15 15:22:24 --> Model Class Initialized
DEBUG - 2013-11-15 15:22:24 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:22:24 --> after session initialization................
DEBUG - 2013-11-15 15:22:24 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:22:24 --> Input Class Initialized
DEBUG - 2013-11-15 15:22:24 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:22:24 --> Language Class Initialized
DEBUG - 2013-11-15 15:22:24 --> Session Class Initialized
DEBUG - 2013-11-15 15:22:24 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:22:24 --> Session routines successfully run
DEBUG - 2013-11-15 15:22:24 --> Loader Class Initialized
DEBUG - 2013-11-15 15:22:24 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:22:24 --> Controller Class Initialized
DEBUG - 2013-11-15 15:22:24 --> Model Class Initialized
DEBUG - 2013-11-15 15:22:24 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:22:24 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:22:24 --> Model Class Initialized
DEBUG - 2013-11-15 15:22:24 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:22:24 --> after session initialization................
DEBUG - 2013-11-15 15:22:24 --> Helper loaded: html_helper
ERROR - 2013-11-15 15:22:24 --> 404 Page Not Found --> user_authorization/undefinedimages
ERROR - 2013-11-15 15:22:24 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 15:22:24 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:22:24 --> Session Class Initialized
DEBUG - 2013-11-15 15:22:24 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:22:24 --> Session routines successfully run
DEBUG - 2013-11-15 15:22:24 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:22:24 --> Controller Class Initialized
DEBUG - 2013-11-15 15:22:24 --> Model Class Initialized
DEBUG - 2013-11-15 15:22:24 --> Model Class Initialized
DEBUG - 2013-11-15 15:22:24 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:22:24 --> after session initialization................
ERROR - 2013-11-15 15:22:24 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 15:24:54 --> Config Class Initialized
DEBUG - 2013-11-15 15:24:54 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:24:54 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:24:54 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:24:54 --> URI Class Initialized
DEBUG - 2013-11-15 15:24:54 --> Router Class Initialized
DEBUG - 2013-11-15 15:24:54 --> Output Class Initialized
DEBUG - 2013-11-15 15:24:54 --> Security Class Initialized
DEBUG - 2013-11-15 15:24:54 --> Input Class Initialized
DEBUG - 2013-11-15 15:24:54 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:24:54 --> Language Class Initialized
DEBUG - 2013-11-15 15:24:54 --> Loader Class Initialized
DEBUG - 2013-11-15 15:24:54 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:24:54 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:24:54 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:24:54 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:24:54 --> Session Class Initialized
DEBUG - 2013-11-15 15:24:54 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:24:54 --> Session routines successfully run
DEBUG - 2013-11-15 15:24:54 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:24:54 --> Controller Class Initialized
DEBUG - 2013-11-15 15:24:54 --> Model Class Initialized
DEBUG - 2013-11-15 15:24:54 --> Model Class Initialized
DEBUG - 2013-11-15 15:24:54 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:24:54 --> after session initialization................
INFO  - 2013-11-15 15:24:54 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 15:24:54 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 15:24:54 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 15:24:54 --> inside retrieving locations 
INFO  - 2013-11-15 15:24:54 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 15:24:54 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 15:24:54 --> Final output sent to browser
DEBUG - 2013-11-15 15:24:54 --> Total execution time: 0.0610
DEBUG - 2013-11-15 15:25:00 --> Config Class Initialized
DEBUG - 2013-11-15 15:25:00 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:25:00 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:25:00 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:25:00 --> URI Class Initialized
DEBUG - 2013-11-15 15:25:00 --> Router Class Initialized
DEBUG - 2013-11-15 15:25:00 --> Output Class Initialized
DEBUG - 2013-11-15 15:25:00 --> Security Class Initialized
DEBUG - 2013-11-15 15:25:00 --> Input Class Initialized
DEBUG - 2013-11-15 15:25:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:25:00 --> Language Class Initialized
DEBUG - 2013-11-15 15:25:00 --> Loader Class Initialized
DEBUG - 2013-11-15 15:25:00 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:25:00 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:25:00 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:25:00 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:25:00 --> Session Class Initialized
DEBUG - 2013-11-15 15:25:00 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:25:00 --> Session routines successfully run
DEBUG - 2013-11-15 15:25:00 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:25:00 --> Controller Class Initialized
DEBUG - 2013-11-15 15:25:00 --> Model Class Initialized
DEBUG - 2013-11-15 15:25:00 --> Model Class Initialized
DEBUG - 2013-11-15 15:25:00 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:25:00 --> after session initialization................
INFO  - 2013-11-15 15:25:00 --> last pharmacy id is 26
INFO  - 2013-11-15 15:25:00 --> Ajax retrieval ::::::::::===>SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` < 26
ORDER BY `p`.`id_pharmacy`, `p`.`name` desc
LIMIT 25
DEBUG - 2013-11-15 15:25:00 --> Final output sent to browser
DEBUG - 2013-11-15 15:25:00 --> Total execution time: 0.0570
DEBUG - 2013-11-15 15:25:05 --> Config Class Initialized
DEBUG - 2013-11-15 15:25:05 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:25:05 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:25:05 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:25:05 --> URI Class Initialized
DEBUG - 2013-11-15 15:25:05 --> Router Class Initialized
DEBUG - 2013-11-15 15:25:05 --> Output Class Initialized
DEBUG - 2013-11-15 15:25:05 --> Security Class Initialized
DEBUG - 2013-11-15 15:25:05 --> Input Class Initialized
DEBUG - 2013-11-15 15:25:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:25:05 --> Language Class Initialized
DEBUG - 2013-11-15 15:25:05 --> Loader Class Initialized
DEBUG - 2013-11-15 15:25:05 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:25:05 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:25:05 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:25:05 --> Config Class Initialized
DEBUG - 2013-11-15 15:25:05 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:25:05 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:25:05 --> Config Class Initialized
DEBUG - 2013-11-15 15:25:05 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:25:05 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:25:05 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:25:05 --> URI Class Initialized
DEBUG - 2013-11-15 15:25:05 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:25:05 --> Session Class Initialized
DEBUG - 2013-11-15 15:25:05 --> Router Class Initialized
DEBUG - 2013-11-15 15:25:05 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:25:05 --> Session routines successfully run
DEBUG - 2013-11-15 15:25:05 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:25:05 --> URI Class Initialized
DEBUG - 2013-11-15 15:25:05 --> Output Class Initialized
DEBUG - 2013-11-15 15:25:05 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:25:05 --> Controller Class Initialized
DEBUG - 2013-11-15 15:25:05 --> Security Class Initialized
DEBUG - 2013-11-15 15:25:05 --> Model Class Initialized
DEBUG - 2013-11-15 15:25:05 --> Model Class Initialized
DEBUG - 2013-11-15 15:25:05 --> Input Class Initialized
DEBUG - 2013-11-15 15:25:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2013-11-15 15:25:05 --> Global POST and COOKIE data sanitized
INFO  - 2013-11-15 15:25:05 --> after session initialization................
DEBUG - 2013-11-15 15:25:05 --> Language Class Initialized
ERROR - 2013-11-15 15:25:05 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 15:25:05 --> Router Class Initialized
DEBUG - 2013-11-15 15:25:05 --> Output Class Initialized
DEBUG - 2013-11-15 15:25:05 --> Loader Class Initialized
DEBUG - 2013-11-15 15:25:05 --> Security Class Initialized
DEBUG - 2013-11-15 15:25:05 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:25:05 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:25:05 --> Input Class Initialized
DEBUG - 2013-11-15 15:25:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:25:05 --> Language Class Initialized
DEBUG - 2013-11-15 15:25:05 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:25:05 --> Loader Class Initialized
DEBUG - 2013-11-15 15:25:05 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:25:05 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:25:05 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:25:05 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:25:05 --> Session Class Initialized
DEBUG - 2013-11-15 15:25:05 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:25:05 --> Session routines successfully run
DEBUG - 2013-11-15 15:25:05 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:25:05 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:25:05 --> Controller Class Initialized
DEBUG - 2013-11-15 15:25:05 --> Session Class Initialized
DEBUG - 2013-11-15 15:25:05 --> Model Class Initialized
DEBUG - 2013-11-15 15:25:05 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:25:05 --> Session routines successfully run
DEBUG - 2013-11-15 15:25:05 --> Model Class Initialized
DEBUG - 2013-11-15 15:25:05 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:25:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2013-11-15 15:25:05 --> Controller Class Initialized
INFO  - 2013-11-15 15:25:05 --> after session initialization................
DEBUG - 2013-11-15 15:25:05 --> Model Class Initialized
ERROR - 2013-11-15 15:25:05 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 15:25:05 --> Model Class Initialized
DEBUG - 2013-11-15 15:25:05 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:25:05 --> after session initialization................
ERROR - 2013-11-15 15:25:05 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 15:25:49 --> Config Class Initialized
DEBUG - 2013-11-15 15:25:49 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:25:49 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:25:49 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:25:49 --> URI Class Initialized
DEBUG - 2013-11-15 15:25:49 --> Router Class Initialized
DEBUG - 2013-11-15 15:25:49 --> Output Class Initialized
DEBUG - 2013-11-15 15:25:49 --> Security Class Initialized
DEBUG - 2013-11-15 15:25:49 --> Input Class Initialized
DEBUG - 2013-11-15 15:25:49 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:25:49 --> Language Class Initialized
DEBUG - 2013-11-15 15:25:49 --> Loader Class Initialized
DEBUG - 2013-11-15 15:25:49 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:25:49 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:25:49 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:25:49 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:25:49 --> Session Class Initialized
DEBUG - 2013-11-15 15:25:49 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:25:49 --> Session routines successfully run
DEBUG - 2013-11-15 15:25:49 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:25:49 --> Controller Class Initialized
DEBUG - 2013-11-15 15:25:49 --> Model Class Initialized
DEBUG - 2013-11-15 15:25:49 --> Model Class Initialized
DEBUG - 2013-11-15 15:25:49 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:25:49 --> after session initialization................
INFO  - 2013-11-15 15:25:49 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 15:25:49 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 15:25:49 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 15:25:49 --> inside retrieving locations 
INFO  - 2013-11-15 15:25:49 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 15:25:49 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 15:25:49 --> Final output sent to browser
DEBUG - 2013-11-15 15:25:49 --> Total execution time: 0.0640
DEBUG - 2013-11-15 15:25:53 --> Config Class Initialized
DEBUG - 2013-11-15 15:25:53 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:25:53 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:25:53 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:25:53 --> URI Class Initialized
DEBUG - 2013-11-15 15:25:53 --> Router Class Initialized
DEBUG - 2013-11-15 15:25:53 --> Output Class Initialized
DEBUG - 2013-11-15 15:25:53 --> Security Class Initialized
DEBUG - 2013-11-15 15:25:53 --> Input Class Initialized
DEBUG - 2013-11-15 15:25:53 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:25:53 --> Language Class Initialized
DEBUG - 2013-11-15 15:25:53 --> Loader Class Initialized
DEBUG - 2013-11-15 15:25:53 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:25:53 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:25:53 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:25:53 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:25:53 --> Session Class Initialized
DEBUG - 2013-11-15 15:25:53 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:25:53 --> Session routines successfully run
DEBUG - 2013-11-15 15:25:53 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:25:53 --> Controller Class Initialized
DEBUG - 2013-11-15 15:25:53 --> Model Class Initialized
DEBUG - 2013-11-15 15:25:53 --> Model Class Initialized
DEBUG - 2013-11-15 15:25:53 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:25:53 --> after session initialization................
INFO  - 2013-11-15 15:25:53 --> last pharmacy id is 26
INFO  - 2013-11-15 15:25:53 --> Ajax retrieval ::::::::::===>SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` < 26
ORDER BY `p`.`id_pharmacy`, `p`.`name` desc
LIMIT 25
DEBUG - 2013-11-15 15:25:53 --> Final output sent to browser
DEBUG - 2013-11-15 15:25:53 --> Total execution time: 0.0500
DEBUG - 2013-11-15 15:25:56 --> Config Class Initialized
DEBUG - 2013-11-15 15:25:56 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:25:56 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:25:56 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:25:56 --> URI Class Initialized
DEBUG - 2013-11-15 15:25:56 --> Router Class Initialized
DEBUG - 2013-11-15 15:25:56 --> Output Class Initialized
DEBUG - 2013-11-15 15:25:56 --> Security Class Initialized
DEBUG - 2013-11-15 15:25:56 --> Input Class Initialized
DEBUG - 2013-11-15 15:25:56 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:25:56 --> Language Class Initialized
DEBUG - 2013-11-15 15:25:56 --> Config Class Initialized
DEBUG - 2013-11-15 15:25:56 --> Loader Class Initialized
DEBUG - 2013-11-15 15:25:56 --> Config Class Initialized
DEBUG - 2013-11-15 15:25:56 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:25:56 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:25:56 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:25:56 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:25:56 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:25:56 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:25:56 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:25:56 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:25:56 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:25:56 --> URI Class Initialized
DEBUG - 2013-11-15 15:25:56 --> URI Class Initialized
DEBUG - 2013-11-15 15:25:56 --> Router Class Initialized
DEBUG - 2013-11-15 15:25:56 --> Router Class Initialized
DEBUG - 2013-11-15 15:25:56 --> Output Class Initialized
DEBUG - 2013-11-15 15:25:56 --> Security Class Initialized
DEBUG - 2013-11-15 15:25:56 --> Output Class Initialized
DEBUG - 2013-11-15 15:25:56 --> Input Class Initialized
DEBUG - 2013-11-15 15:25:56 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:25:56 --> Security Class Initialized
DEBUG - 2013-11-15 15:25:56 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:25:56 --> Language Class Initialized
DEBUG - 2013-11-15 15:25:56 --> Input Class Initialized
DEBUG - 2013-11-15 15:25:56 --> Session Class Initialized
DEBUG - 2013-11-15 15:25:56 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:25:56 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:25:56 --> Language Class Initialized
DEBUG - 2013-11-15 15:25:56 --> Loader Class Initialized
DEBUG - 2013-11-15 15:25:56 --> Session routines successfully run
DEBUG - 2013-11-15 15:25:56 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:25:56 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:25:56 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:25:56 --> Controller Class Initialized
DEBUG - 2013-11-15 15:25:56 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:25:56 --> Loader Class Initialized
DEBUG - 2013-11-15 15:25:56 --> Model Class Initialized
DEBUG - 2013-11-15 15:25:56 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:25:56 --> Model Class Initialized
DEBUG - 2013-11-15 15:25:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2013-11-15 15:25:56 --> Helper loaded: url_helper
INFO  - 2013-11-15 15:25:56 --> after session initialization................
ERROR - 2013-11-15 15:25:56 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 15:25:56 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:25:56 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:25:56 --> Session Class Initialized
DEBUG - 2013-11-15 15:25:56 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:25:56 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:25:56 --> Session routines successfully run
DEBUG - 2013-11-15 15:25:56 --> Session Class Initialized
DEBUG - 2013-11-15 15:25:56 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:25:56 --> Controller Class Initialized
DEBUG - 2013-11-15 15:25:56 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:25:56 --> Model Class Initialized
DEBUG - 2013-11-15 15:25:56 --> Session routines successfully run
DEBUG - 2013-11-15 15:25:56 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:25:56 --> Controller Class Initialized
DEBUG - 2013-11-15 15:25:56 --> Model Class Initialized
DEBUG - 2013-11-15 15:25:56 --> Model Class Initialized
DEBUG - 2013-11-15 15:25:56 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:25:56 --> after session initialization................
ERROR - 2013-11-15 15:25:56 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 15:25:56 --> Model Class Initialized
DEBUG - 2013-11-15 15:25:56 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:25:56 --> after session initialization................
ERROR - 2013-11-15 15:25:56 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 15:31:49 --> Config Class Initialized
DEBUG - 2013-11-15 15:31:49 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:31:49 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:31:49 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:31:49 --> URI Class Initialized
DEBUG - 2013-11-15 15:31:49 --> Router Class Initialized
DEBUG - 2013-11-15 15:31:49 --> Output Class Initialized
DEBUG - 2013-11-15 15:31:49 --> Security Class Initialized
DEBUG - 2013-11-15 15:31:49 --> Input Class Initialized
DEBUG - 2013-11-15 15:31:49 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:31:49 --> Language Class Initialized
DEBUG - 2013-11-15 15:31:49 --> Loader Class Initialized
DEBUG - 2013-11-15 15:31:49 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:31:49 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:31:49 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:31:49 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:31:49 --> Session Class Initialized
DEBUG - 2013-11-15 15:31:49 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:31:49 --> Session routines successfully run
DEBUG - 2013-11-15 15:31:49 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:31:49 --> Controller Class Initialized
DEBUG - 2013-11-15 15:31:49 --> Model Class Initialized
DEBUG - 2013-11-15 15:31:49 --> Model Class Initialized
DEBUG - 2013-11-15 15:31:49 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:31:49 --> after session initialization................
INFO  - 2013-11-15 15:31:49 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 15:31:49 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 15:31:49 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 15:31:49 --> inside retrieving locations 
INFO  - 2013-11-15 15:31:50 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 15:31:50 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 15:31:50 --> Final output sent to browser
DEBUG - 2013-11-15 15:31:50 --> Total execution time: 0.0670
DEBUG - 2013-11-15 15:31:51 --> Config Class Initialized
DEBUG - 2013-11-15 15:31:51 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:31:51 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:31:51 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:31:51 --> URI Class Initialized
DEBUG - 2013-11-15 15:31:51 --> Router Class Initialized
DEBUG - 2013-11-15 15:31:51 --> Output Class Initialized
DEBUG - 2013-11-15 15:31:51 --> Security Class Initialized
DEBUG - 2013-11-15 15:31:51 --> Input Class Initialized
DEBUG - 2013-11-15 15:31:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:31:51 --> Language Class Initialized
DEBUG - 2013-11-15 15:31:51 --> Loader Class Initialized
DEBUG - 2013-11-15 15:31:51 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:31:51 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:31:51 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:31:51 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:31:51 --> Session Class Initialized
DEBUG - 2013-11-15 15:31:51 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:31:51 --> Session routines successfully run
DEBUG - 2013-11-15 15:31:51 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:31:51 --> Controller Class Initialized
DEBUG - 2013-11-15 15:31:51 --> Model Class Initialized
DEBUG - 2013-11-15 15:31:51 --> Model Class Initialized
DEBUG - 2013-11-15 15:31:51 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:31:51 --> after session initialization................
INFO  - 2013-11-15 15:31:51 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 15:31:51 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 15:31:51 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 15:31:51 --> inside retrieving locations 
INFO  - 2013-11-15 15:31:51 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 15:31:51 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 15:31:51 --> Final output sent to browser
DEBUG - 2013-11-15 15:31:51 --> Total execution time: 0.0570
DEBUG - 2013-11-15 15:31:56 --> Config Class Initialized
DEBUG - 2013-11-15 15:31:56 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:31:56 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:31:56 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:31:56 --> URI Class Initialized
DEBUG - 2013-11-15 15:31:56 --> Router Class Initialized
DEBUG - 2013-11-15 15:31:56 --> Output Class Initialized
DEBUG - 2013-11-15 15:31:56 --> Security Class Initialized
DEBUG - 2013-11-15 15:31:56 --> Input Class Initialized
DEBUG - 2013-11-15 15:31:56 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:31:56 --> Language Class Initialized
DEBUG - 2013-11-15 15:31:56 --> Loader Class Initialized
DEBUG - 2013-11-15 15:31:56 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:31:56 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:31:56 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:31:56 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:31:56 --> Session Class Initialized
DEBUG - 2013-11-15 15:31:56 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:31:56 --> Session routines successfully run
DEBUG - 2013-11-15 15:31:56 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:31:56 --> Controller Class Initialized
DEBUG - 2013-11-15 15:31:56 --> Model Class Initialized
DEBUG - 2013-11-15 15:31:56 --> Model Class Initialized
DEBUG - 2013-11-15 15:31:56 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:31:56 --> after session initialization................
INFO  - 2013-11-15 15:31:56 --> last pharmacy id is 26
INFO  - 2013-11-15 15:31:56 --> Ajax retrieval ::::::::::===>SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` < 26
ORDER BY `p`.`id_pharmacy`, `p`.`name` desc
LIMIT 25
DEBUG - 2013-11-15 15:31:56 --> Final output sent to browser
DEBUG - 2013-11-15 15:31:56 --> Total execution time: 0.0540
DEBUG - 2013-11-15 15:32:02 --> Config Class Initialized
DEBUG - 2013-11-15 15:32:02 --> Config Class Initialized
DEBUG - 2013-11-15 15:32:02 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:32:02 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:32:02 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:32:02 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:32:02 --> Config Class Initialized
DEBUG - 2013-11-15 15:32:02 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:32:02 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:32:02 --> URI Class Initialized
DEBUG - 2013-11-15 15:32:02 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:32:02 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:32:02 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:32:02 --> URI Class Initialized
DEBUG - 2013-11-15 15:32:02 --> URI Class Initialized
DEBUG - 2013-11-15 15:32:02 --> Router Class Initialized
DEBUG - 2013-11-15 15:32:02 --> Router Class Initialized
DEBUG - 2013-11-15 15:32:02 --> Output Class Initialized
DEBUG - 2013-11-15 15:32:02 --> Output Class Initialized
DEBUG - 2013-11-15 15:32:02 --> Router Class Initialized
DEBUG - 2013-11-15 15:32:02 --> Security Class Initialized
DEBUG - 2013-11-15 15:32:02 --> Security Class Initialized
DEBUG - 2013-11-15 15:32:02 --> Input Class Initialized
DEBUG - 2013-11-15 15:32:02 --> Output Class Initialized
DEBUG - 2013-11-15 15:32:02 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:32:02 --> Input Class Initialized
DEBUG - 2013-11-15 15:32:02 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:32:02 --> Language Class Initialized
DEBUG - 2013-11-15 15:32:02 --> Security Class Initialized
DEBUG - 2013-11-15 15:32:02 --> Language Class Initialized
DEBUG - 2013-11-15 15:32:02 --> Input Class Initialized
DEBUG - 2013-11-15 15:32:02 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:32:02 --> Loader Class Initialized
DEBUG - 2013-11-15 15:32:02 --> Loader Class Initialized
DEBUG - 2013-11-15 15:32:02 --> Language Class Initialized
DEBUG - 2013-11-15 15:32:02 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:32:02 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:32:02 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:32:02 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:32:02 --> Loader Class Initialized
DEBUG - 2013-11-15 15:32:02 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:32:02 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:32:02 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:32:02 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:32:02 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:32:02 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:32:02 --> Session Class Initialized
DEBUG - 2013-11-15 15:32:02 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:32:02 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:32:02 --> Session routines successfully run
DEBUG - 2013-11-15 15:32:02 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:32:02 --> Session Class Initialized
DEBUG - 2013-11-15 15:32:02 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:32:02 --> Session routines successfully run
DEBUG - 2013-11-15 15:32:02 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:32:02 --> Controller Class Initialized
DEBUG - 2013-11-15 15:32:02 --> Session Class Initialized
DEBUG - 2013-11-15 15:32:02 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:32:02 --> Controller Class Initialized
DEBUG - 2013-11-15 15:32:02 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:32:02 --> Session routines successfully run
DEBUG - 2013-11-15 15:32:02 --> Model Class Initialized
DEBUG - 2013-11-15 15:32:02 --> Model Class Initialized
DEBUG - 2013-11-15 15:32:02 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:32:02 --> Controller Class Initialized
DEBUG - 2013-11-15 15:32:02 --> Model Class Initialized
DEBUG - 2013-11-15 15:32:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2013-11-15 15:32:02 --> Model Class Initialized
INFO  - 2013-11-15 15:32:02 --> after session initialization................
ERROR - 2013-11-15 15:32:02 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 15:32:02 --> Model Class Initialized
DEBUG - 2013-11-15 15:32:02 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:32:02 --> after session initialization................
ERROR - 2013-11-15 15:32:02 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 15:32:02 --> Model Class Initialized
DEBUG - 2013-11-15 15:32:02 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:32:02 --> after session initialization................
ERROR - 2013-11-15 15:32:02 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 15:32:20 --> Config Class Initialized
DEBUG - 2013-11-15 15:32:20 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:32:20 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:32:20 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:32:20 --> URI Class Initialized
DEBUG - 2013-11-15 15:32:20 --> Router Class Initialized
DEBUG - 2013-11-15 15:32:20 --> Output Class Initialized
DEBUG - 2013-11-15 15:32:20 --> Security Class Initialized
DEBUG - 2013-11-15 15:32:20 --> Input Class Initialized
DEBUG - 2013-11-15 15:32:20 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:32:20 --> Language Class Initialized
DEBUG - 2013-11-15 15:32:20 --> Loader Class Initialized
DEBUG - 2013-11-15 15:32:20 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:32:20 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:32:20 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:32:20 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:32:20 --> Session Class Initialized
DEBUG - 2013-11-15 15:32:20 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:32:20 --> Session routines successfully run
DEBUG - 2013-11-15 15:32:20 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:32:20 --> Controller Class Initialized
DEBUG - 2013-11-15 15:32:20 --> Model Class Initialized
DEBUG - 2013-11-15 15:32:20 --> Model Class Initialized
DEBUG - 2013-11-15 15:32:20 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:32:20 --> after session initialization................
INFO  - 2013-11-15 15:32:20 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 15:32:20 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 15:32:20 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 15:32:20 --> inside retrieving locations 
INFO  - 2013-11-15 15:32:20 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 15:32:20 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 15:32:20 --> Final output sent to browser
DEBUG - 2013-11-15 15:32:20 --> Total execution time: 0.0610
DEBUG - 2013-11-15 15:32:32 --> Config Class Initialized
DEBUG - 2013-11-15 15:32:32 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:32:32 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:32:32 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:32:32 --> URI Class Initialized
DEBUG - 2013-11-15 15:32:32 --> Router Class Initialized
DEBUG - 2013-11-15 15:32:32 --> Output Class Initialized
DEBUG - 2013-11-15 15:32:32 --> Security Class Initialized
DEBUG - 2013-11-15 15:32:32 --> Input Class Initialized
DEBUG - 2013-11-15 15:32:32 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:32:32 --> Language Class Initialized
DEBUG - 2013-11-15 15:32:32 --> Loader Class Initialized
DEBUG - 2013-11-15 15:32:32 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:32:32 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:32:32 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:32:32 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:32:32 --> Session Class Initialized
DEBUG - 2013-11-15 15:32:32 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:32:32 --> Session routines successfully run
DEBUG - 2013-11-15 15:32:32 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:32:32 --> Controller Class Initialized
DEBUG - 2013-11-15 15:32:32 --> Model Class Initialized
DEBUG - 2013-11-15 15:32:32 --> Model Class Initialized
DEBUG - 2013-11-15 15:32:32 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:32:32 --> after session initialization................
INFO  - 2013-11-15 15:32:32 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 15:32:32 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 15:32:32 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 15:32:32 --> inside retrieving locations 
INFO  - 2013-11-15 15:32:32 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 15:32:32 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 15:32:32 --> Final output sent to browser
DEBUG - 2013-11-15 15:32:32 --> Total execution time: 0.0570
DEBUG - 2013-11-15 15:33:12 --> Config Class Initialized
DEBUG - 2013-11-15 15:33:12 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:33:12 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:33:12 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:33:12 --> URI Class Initialized
DEBUG - 2013-11-15 15:33:12 --> Router Class Initialized
DEBUG - 2013-11-15 15:33:12 --> Output Class Initialized
DEBUG - 2013-11-15 15:33:12 --> Security Class Initialized
DEBUG - 2013-11-15 15:33:12 --> Input Class Initialized
DEBUG - 2013-11-15 15:33:12 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:33:12 --> Language Class Initialized
DEBUG - 2013-11-15 15:33:12 --> Loader Class Initialized
DEBUG - 2013-11-15 15:33:12 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:33:12 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:33:12 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:33:12 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:33:12 --> Session Class Initialized
DEBUG - 2013-11-15 15:33:12 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:33:12 --> Session routines successfully run
DEBUG - 2013-11-15 15:33:12 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:33:12 --> Controller Class Initialized
DEBUG - 2013-11-15 15:33:12 --> Model Class Initialized
DEBUG - 2013-11-15 15:33:12 --> Model Class Initialized
DEBUG - 2013-11-15 15:33:12 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:33:12 --> after session initialization................
DEBUG - 2013-11-15 15:33:12 --> Config Class Initialized
DEBUG - 2013-11-15 15:33:12 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:33:12 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:33:12 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:33:12 --> URI Class Initialized
DEBUG - 2013-11-15 15:33:12 --> Router Class Initialized
DEBUG - 2013-11-15 15:33:12 --> No URI present. Default controller set.
DEBUG - 2013-11-15 15:33:12 --> Output Class Initialized
DEBUG - 2013-11-15 15:33:12 --> Security Class Initialized
DEBUG - 2013-11-15 15:33:12 --> Input Class Initialized
DEBUG - 2013-11-15 15:33:12 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:33:12 --> Language Class Initialized
DEBUG - 2013-11-15 15:33:12 --> Loader Class Initialized
DEBUG - 2013-11-15 15:33:12 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:33:12 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:33:12 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:33:12 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:33:12 --> Session Class Initialized
DEBUG - 2013-11-15 15:33:12 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:33:12 --> A session cookie was not found.
DEBUG - 2013-11-15 15:33:12 --> Session routines successfully run
DEBUG - 2013-11-15 15:33:12 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:33:12 --> Controller Class Initialized
INFO  - 2013-11-15 15:33:12 --> the form message==>
INFO  - 2013-11-15 15:33:12 --> The session id is ========>a4ec3c3d6a9595e0c811ebe868684a12 and the member id is =======>
INFO  - 2013-11-15 15:33:12 --> after the retrieving session list.................//////////
DEBUG - 2013-11-15 15:33:12 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-11-15 15:33:12 --> Final output sent to browser
DEBUG - 2013-11-15 15:33:12 --> Total execution time: 0.0600
DEBUG - 2013-11-15 15:33:14 --> Config Class Initialized
DEBUG - 2013-11-15 15:33:14 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:33:14 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:33:14 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:33:14 --> URI Class Initialized
DEBUG - 2013-11-15 15:33:14 --> Router Class Initialized
DEBUG - 2013-11-15 15:33:14 --> Output Class Initialized
DEBUG - 2013-11-15 15:33:14 --> Security Class Initialized
DEBUG - 2013-11-15 15:33:14 --> Input Class Initialized
DEBUG - 2013-11-15 15:33:14 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:33:14 --> Language Class Initialized
DEBUG - 2013-11-15 15:33:14 --> Loader Class Initialized
DEBUG - 2013-11-15 15:33:14 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:33:14 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:33:14 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:33:14 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:33:14 --> Session Class Initialized
DEBUG - 2013-11-15 15:33:14 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:33:14 --> Session routines successfully run
DEBUG - 2013-11-15 15:33:14 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:33:14 --> Controller Class Initialized
DEBUG - 2013-11-15 15:33:14 --> Model Class Initialized
DEBUG - 2013-11-15 15:33:14 --> Model Class Initialized
DEBUG - 2013-11-15 15:33:14 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:33:14 --> after session initialization................
INFO  - 2013-11-15 15:33:14 --> after rays has been clicked.................
INFO  - 2013-11-15 15:33:14 --> last article id is 0
INFO  - 2013-11-15 15:33:14 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:33:14 --> 1 the guest only data>>>>>
INFO  - 2013-11-15 15:33:14 --> 1 the guest only data>> AFTER >>>
INFO  - 2013-11-15 15:33:14 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:33:14 --> 0 the guest only data>>>>>
INFO  - 2013-11-15 15:33:14 --> 0 the guest only data>> AFTER >>>#111
INFO  - 2013-11-15 15:33:14 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:33:14 --> 0 the guest only data>>>>>#111
INFO  - 2013-11-15 15:33:14 --> 0 the guest only data>> AFTER >>>#110
INFO  - 2013-11-15 15:33:14 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:33:14 --> 0 the guest only data>>>>>#110
INFO  - 2013-11-15 15:33:14 --> 0 the guest only data>> AFTER >>>#109
INFO  - 2013-11-15 15:33:14 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:33:14 --> 0 the guest only data>>>>>#109
INFO  - 2013-11-15 15:33:14 --> 0 the guest only data>> AFTER >>>#108
INFO  - 2013-11-15 15:33:14 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:33:14 --> 0 the guest only data>>>>>#108
INFO  - 2013-11-15 15:33:14 --> 0 the guest only data>> AFTER >>>#107
INFO  - 2013-11-15 15:33:14 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:33:14 --> 1 the guest only data>>>>>#107
INFO  - 2013-11-15 15:33:14 --> 1 the guest only data>> AFTER >>>#107
INFO  - 2013-11-15 15:33:14 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:33:14 --> 0 the guest only data>>>>>#107
INFO  - 2013-11-15 15:33:14 --> 0 the guest only data>> AFTER >>>#105
INFO  - 2013-11-15 15:33:14 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:33:14 --> 0 the guest only data>>>>>#105
INFO  - 2013-11-15 15:33:14 --> 0 the guest only data>> AFTER >>>#104
INFO  - 2013-11-15 15:33:14 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:33:14 --> 0 the guest only data>>>>>#104
INFO  - 2013-11-15 15:33:14 --> 0 the guest only data>> AFTER >>>#103
INFO  - 2013-11-15 15:33:14 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:33:14 --> 0 the guest only data>>>>>#103
INFO  - 2013-11-15 15:33:14 --> 0 the guest only data>> AFTER >>>#102
INFO  - 2013-11-15 15:33:14 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:33:14 --> 0 the guest only data>>>>>#102
INFO  - 2013-11-15 15:33:14 --> 0 the guest only data>> AFTER >>>#101
INFO  - 2013-11-15 15:33:14 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:33:14 --> 0 the guest only data>>>>>#101
INFO  - 2013-11-15 15:33:14 --> 0 the guest only data>> AFTER >>>#100
INFO  - 2013-11-15 15:33:14 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:33:14 --> 0 the guest only data>>>>>#100
INFO  - 2013-11-15 15:33:14 --> 0 the guest only data>> AFTER >>>#99
INFO  - 2013-11-15 15:33:14 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:33:14 --> 0 the guest only data>>>>>#99
INFO  - 2013-11-15 15:33:14 --> 0 the guest only data>> AFTER >>>#98
INFO  - 2013-11-15 15:33:14 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:33:14 --> 0 the guest only data>>>>>#98
INFO  - 2013-11-15 15:33:14 --> 0 the guest only data>> AFTER >>>#97
INFO  - 2013-11-15 15:33:14 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:33:14 --> 1 the guest only data>>>>>#97
INFO  - 2013-11-15 15:33:14 --> 1 the guest only data>> AFTER >>>#97
INFO  - 2013-11-15 15:33:14 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:33:14 --> 0 the guest only data>>>>>#97
INFO  - 2013-11-15 15:33:14 --> 0 the guest only data>> AFTER >>>#95
INFO  - 2013-11-15 15:33:14 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:33:14 --> 0 the guest only data>>>>>#95
INFO  - 2013-11-15 15:33:14 --> 0 the guest only data>> AFTER >>>#94
INFO  - 2013-11-15 15:33:14 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:33:14 --> 1 the guest only data>>>>>#94
INFO  - 2013-11-15 15:33:14 --> 1 the guest only data>> AFTER >>>#94
DEBUG - 2013-11-15 15:33:14 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-11-15 15:33:14 --> Final output sent to browser
DEBUG - 2013-11-15 15:33:14 --> Total execution time: 0.0740
DEBUG - 2013-11-15 15:33:32 --> Config Class Initialized
DEBUG - 2013-11-15 15:33:32 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:33:32 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:33:32 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:33:32 --> URI Class Initialized
DEBUG - 2013-11-15 15:33:32 --> Router Class Initialized
DEBUG - 2013-11-15 15:33:32 --> Output Class Initialized
DEBUG - 2013-11-15 15:33:32 --> Security Class Initialized
DEBUG - 2013-11-15 15:33:32 --> Input Class Initialized
DEBUG - 2013-11-15 15:33:32 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:33:32 --> Language Class Initialized
DEBUG - 2013-11-15 15:33:32 --> Loader Class Initialized
DEBUG - 2013-11-15 15:33:32 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:33:32 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:33:32 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:33:32 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:33:32 --> Session Class Initialized
DEBUG - 2013-11-15 15:33:32 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:33:32 --> Session routines successfully run
DEBUG - 2013-11-15 15:33:32 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:33:32 --> Controller Class Initialized
DEBUG - 2013-11-15 15:33:32 --> Model Class Initialized
DEBUG - 2013-11-15 15:33:32 --> Model Class Initialized
DEBUG - 2013-11-15 15:33:32 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:33:32 --> after session initialization................
INFO  - 2013-11-15 15:33:32 --> inside rays login auth.............sys_admin/user_authorization/redirecttorays
INFO  - 2013-11-15 15:33:32 --> inside rays login auth.............sys_admin/user_authorization/redirecttorays
DEBUG - 2013-11-15 15:33:32 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-11-15 15:33:32 --> XSS Filtering completed
DEBUG - 2013-11-15 15:33:32 --> XSS Filtering completed
INFO  - 2013-11-15 15:33:32 --> before getting the relation of member............6
INFO  - 2013-11-15 15:33:32 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-11-15 15:33:32 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-15 15:33:32 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-11-15 15:33:32 --> inside retrieving vacancy for member
INFO  - 2013-11-15 15:33:32 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-11-15 15:33:32 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-15 15:33:32 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-11-15 15:33:32 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-11-15 15:33:32 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-15 15:33:32 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-15 15:33:32 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-11-15 15:33:32 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-11-15 15:33:32 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-11-15 15:33:32 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-11-15 15:33:32 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-11-15 15:33:32 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-11-15 15:33:32 --> Final output sent to browser
DEBUG - 2013-11-15 15:33:32 --> Total execution time: 0.0800
DEBUG - 2013-11-15 15:33:32 --> Config Class Initialized
DEBUG - 2013-11-15 15:33:32 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:33:32 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:33:32 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:33:32 --> URI Class Initialized
DEBUG - 2013-11-15 15:33:32 --> Router Class Initialized
DEBUG - 2013-11-15 15:33:32 --> Output Class Initialized
DEBUG - 2013-11-15 15:33:32 --> Security Class Initialized
DEBUG - 2013-11-15 15:33:32 --> Input Class Initialized
DEBUG - 2013-11-15 15:33:32 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:33:32 --> Language Class Initialized
DEBUG - 2013-11-15 15:33:32 --> Loader Class Initialized
DEBUG - 2013-11-15 15:33:32 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:33:32 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:33:32 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:33:32 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:33:32 --> Session Class Initialized
DEBUG - 2013-11-15 15:33:32 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:33:32 --> Session routines successfully run
DEBUG - 2013-11-15 15:33:32 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:33:32 --> Controller Class Initialized
DEBUG - 2013-11-15 15:33:32 --> Model Class Initialized
DEBUG - 2013-11-15 15:33:32 --> Model Class Initialized
DEBUG - 2013-11-15 15:33:32 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:33:32 --> after session initialization................
ERROR - 2013-11-15 15:33:32 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-15 15:33:32 --> Config Class Initialized
DEBUG - 2013-11-15 15:33:32 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:33:32 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:33:32 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:33:32 --> URI Class Initialized
DEBUG - 2013-11-15 15:33:32 --> Router Class Initialized
ERROR - 2013-11-15 15:33:32 --> 404 Page Not Found --> css
DEBUG - 2013-11-15 15:33:34 --> Config Class Initialized
DEBUG - 2013-11-15 15:33:34 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:33:34 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:33:34 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:33:34 --> URI Class Initialized
DEBUG - 2013-11-15 15:33:34 --> Router Class Initialized
DEBUG - 2013-11-15 15:33:34 --> Output Class Initialized
DEBUG - 2013-11-15 15:33:34 --> Security Class Initialized
DEBUG - 2013-11-15 15:33:34 --> Input Class Initialized
DEBUG - 2013-11-15 15:33:34 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:33:34 --> Language Class Initialized
DEBUG - 2013-11-15 15:33:34 --> Loader Class Initialized
DEBUG - 2013-11-15 15:33:34 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:33:34 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:33:34 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:33:35 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:33:35 --> Session Class Initialized
DEBUG - 2013-11-15 15:33:35 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:33:35 --> Session routines successfully run
DEBUG - 2013-11-15 15:33:35 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:33:35 --> Controller Class Initialized
DEBUG - 2013-11-15 15:33:35 --> Model Class Initialized
DEBUG - 2013-11-15 15:33:35 --> Model Class Initialized
DEBUG - 2013-11-15 15:33:35 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:33:35 --> after session initialization................
INFO  - 2013-11-15 15:33:35 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 15:33:35 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 15:33:35 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 15:33:35 --> inside retrieving locations 
INFO  - 2013-11-15 15:33:35 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 15:33:35 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 15:33:35 --> Final output sent to browser
DEBUG - 2013-11-15 15:33:35 --> Total execution time: 0.0540
DEBUG - 2013-11-15 15:35:42 --> Config Class Initialized
DEBUG - 2013-11-15 15:35:42 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:35:42 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:35:42 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:35:42 --> URI Class Initialized
DEBUG - 2013-11-15 15:35:42 --> Router Class Initialized
DEBUG - 2013-11-15 15:35:42 --> Output Class Initialized
DEBUG - 2013-11-15 15:35:42 --> Security Class Initialized
DEBUG - 2013-11-15 15:35:42 --> Input Class Initialized
DEBUG - 2013-11-15 15:35:42 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:35:42 --> Language Class Initialized
DEBUG - 2013-11-15 15:35:42 --> Loader Class Initialized
DEBUG - 2013-11-15 15:35:42 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:35:42 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:35:42 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:35:42 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:35:42 --> Session Class Initialized
DEBUG - 2013-11-15 15:35:42 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:35:42 --> Session routines successfully run
DEBUG - 2013-11-15 15:35:42 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:35:42 --> Controller Class Initialized
DEBUG - 2013-11-15 15:35:42 --> Model Class Initialized
DEBUG - 2013-11-15 15:35:42 --> Model Class Initialized
DEBUG - 2013-11-15 15:35:42 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:35:42 --> after session initialization................
DEBUG - 2013-11-15 15:35:42 --> Config Class Initialized
DEBUG - 2013-11-15 15:35:42 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:35:42 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:35:42 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:35:42 --> URI Class Initialized
DEBUG - 2013-11-15 15:35:42 --> Router Class Initialized
DEBUG - 2013-11-15 15:35:42 --> No URI present. Default controller set.
DEBUG - 2013-11-15 15:35:42 --> Output Class Initialized
DEBUG - 2013-11-15 15:35:42 --> Security Class Initialized
DEBUG - 2013-11-15 15:35:42 --> Input Class Initialized
DEBUG - 2013-11-15 15:35:42 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:35:42 --> Language Class Initialized
DEBUG - 2013-11-15 15:35:42 --> Loader Class Initialized
DEBUG - 2013-11-15 15:35:42 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:35:42 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:35:42 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:35:42 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:35:42 --> Session Class Initialized
DEBUG - 2013-11-15 15:35:42 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:35:42 --> A session cookie was not found.
DEBUG - 2013-11-15 15:35:42 --> Session routines successfully run
DEBUG - 2013-11-15 15:35:42 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:35:42 --> Controller Class Initialized
INFO  - 2013-11-15 15:35:42 --> the form message==>
INFO  - 2013-11-15 15:35:42 --> The session id is ========>ae4d4cf4cbf66f2dd28770dbd5890aa7 and the member id is =======>
INFO  - 2013-11-15 15:35:42 --> after the retrieving session list.................//////////
DEBUG - 2013-11-15 15:35:42 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-11-15 15:35:42 --> Final output sent to browser
DEBUG - 2013-11-15 15:35:42 --> Total execution time: 0.0468
DEBUG - 2013-11-15 15:35:44 --> Config Class Initialized
DEBUG - 2013-11-15 15:35:44 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:35:44 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:35:44 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:35:44 --> URI Class Initialized
DEBUG - 2013-11-15 15:35:44 --> Router Class Initialized
DEBUG - 2013-11-15 15:35:44 --> Output Class Initialized
DEBUG - 2013-11-15 15:35:44 --> Security Class Initialized
DEBUG - 2013-11-15 15:35:44 --> Input Class Initialized
DEBUG - 2013-11-15 15:35:44 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:35:44 --> Language Class Initialized
DEBUG - 2013-11-15 15:35:44 --> Loader Class Initialized
DEBUG - 2013-11-15 15:35:44 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:35:44 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:35:44 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:35:44 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:35:44 --> Session Class Initialized
DEBUG - 2013-11-15 15:35:44 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:35:44 --> Session routines successfully run
DEBUG - 2013-11-15 15:35:44 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:35:44 --> Controller Class Initialized
DEBUG - 2013-11-15 15:35:44 --> Model Class Initialized
DEBUG - 2013-11-15 15:35:44 --> Model Class Initialized
DEBUG - 2013-11-15 15:35:44 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:35:44 --> after session initialization................
INFO  - 2013-11-15 15:35:44 --> after rays has been clicked.................
INFO  - 2013-11-15 15:35:44 --> last article id is 0
INFO  - 2013-11-15 15:35:44 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:35:44 --> 1 the guest only data>>>>>
INFO  - 2013-11-15 15:35:44 --> 1 the guest only data>> AFTER >>>
INFO  - 2013-11-15 15:35:44 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:35:44 --> 0 the guest only data>>>>>
INFO  - 2013-11-15 15:35:44 --> 0 the guest only data>> AFTER >>>#111
INFO  - 2013-11-15 15:35:44 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:35:44 --> 0 the guest only data>>>>>#111
INFO  - 2013-11-15 15:35:44 --> 0 the guest only data>> AFTER >>>#110
INFO  - 2013-11-15 15:35:44 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:35:44 --> 0 the guest only data>>>>>#110
INFO  - 2013-11-15 15:35:44 --> 0 the guest only data>> AFTER >>>#109
INFO  - 2013-11-15 15:35:44 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:35:44 --> 0 the guest only data>>>>>#109
INFO  - 2013-11-15 15:35:44 --> 0 the guest only data>> AFTER >>>#108
INFO  - 2013-11-15 15:35:44 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:35:44 --> 0 the guest only data>>>>>#108
INFO  - 2013-11-15 15:35:44 --> 0 the guest only data>> AFTER >>>#107
INFO  - 2013-11-15 15:35:44 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:35:44 --> 1 the guest only data>>>>>#107
INFO  - 2013-11-15 15:35:44 --> 1 the guest only data>> AFTER >>>#107
INFO  - 2013-11-15 15:35:44 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:35:44 --> 0 the guest only data>>>>>#107
INFO  - 2013-11-15 15:35:44 --> 0 the guest only data>> AFTER >>>#105
INFO  - 2013-11-15 15:35:44 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:35:44 --> 0 the guest only data>>>>>#105
INFO  - 2013-11-15 15:35:44 --> 0 the guest only data>> AFTER >>>#104
INFO  - 2013-11-15 15:35:44 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:35:44 --> 0 the guest only data>>>>>#104
INFO  - 2013-11-15 15:35:44 --> 0 the guest only data>> AFTER >>>#103
INFO  - 2013-11-15 15:35:44 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:35:44 --> 0 the guest only data>>>>>#103
INFO  - 2013-11-15 15:35:44 --> 0 the guest only data>> AFTER >>>#102
INFO  - 2013-11-15 15:35:44 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:35:44 --> 0 the guest only data>>>>>#102
INFO  - 2013-11-15 15:35:44 --> 0 the guest only data>> AFTER >>>#101
INFO  - 2013-11-15 15:35:44 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:35:44 --> 0 the guest only data>>>>>#101
INFO  - 2013-11-15 15:35:44 --> 0 the guest only data>> AFTER >>>#100
INFO  - 2013-11-15 15:35:44 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:35:44 --> 0 the guest only data>>>>>#100
INFO  - 2013-11-15 15:35:44 --> 0 the guest only data>> AFTER >>>#99
INFO  - 2013-11-15 15:35:44 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:35:44 --> 0 the guest only data>>>>>#99
INFO  - 2013-11-15 15:35:44 --> 0 the guest only data>> AFTER >>>#98
INFO  - 2013-11-15 15:35:44 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:35:44 --> 0 the guest only data>>>>>#98
INFO  - 2013-11-15 15:35:44 --> 0 the guest only data>> AFTER >>>#97
INFO  - 2013-11-15 15:35:44 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:35:44 --> 1 the guest only data>>>>>#97
INFO  - 2013-11-15 15:35:44 --> 1 the guest only data>> AFTER >>>#97
INFO  - 2013-11-15 15:35:44 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:35:44 --> 0 the guest only data>>>>>#97
INFO  - 2013-11-15 15:35:44 --> 0 the guest only data>> AFTER >>>#95
INFO  - 2013-11-15 15:35:44 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:35:44 --> 0 the guest only data>>>>>#95
INFO  - 2013-11-15 15:35:44 --> 0 the guest only data>> AFTER >>>#94
INFO  - 2013-11-15 15:35:44 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:35:44 --> 1 the guest only data>>>>>#94
INFO  - 2013-11-15 15:35:44 --> 1 the guest only data>> AFTER >>>#94
DEBUG - 2013-11-15 15:35:44 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-11-15 15:35:44 --> Final output sent to browser
DEBUG - 2013-11-15 15:35:44 --> Total execution time: 0.0624
DEBUG - 2013-11-15 15:36:45 --> Config Class Initialized
DEBUG - 2013-11-15 15:36:45 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:36:45 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:36:45 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:36:45 --> URI Class Initialized
DEBUG - 2013-11-15 15:36:45 --> Router Class Initialized
DEBUG - 2013-11-15 15:36:45 --> Output Class Initialized
DEBUG - 2013-11-15 15:36:45 --> Security Class Initialized
DEBUG - 2013-11-15 15:36:45 --> Input Class Initialized
DEBUG - 2013-11-15 15:36:45 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:36:45 --> Language Class Initialized
DEBUG - 2013-11-15 15:36:45 --> Loader Class Initialized
DEBUG - 2013-11-15 15:36:45 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:36:45 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:36:45 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:36:45 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:36:45 --> Session Class Initialized
DEBUG - 2013-11-15 15:36:45 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:36:45 --> Session routines successfully run
DEBUG - 2013-11-15 15:36:45 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:36:45 --> Controller Class Initialized
DEBUG - 2013-11-15 15:36:45 --> Model Class Initialized
DEBUG - 2013-11-15 15:36:45 --> Model Class Initialized
DEBUG - 2013-11-15 15:36:45 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:36:45 --> after session initialization................
INFO  - 2013-11-15 15:36:45 --> inside rays login auth.............sys_admin/user_authorization/redirecttorays
INFO  - 2013-11-15 15:36:45 --> inside rays login auth.............sys_admin/user_authorization/redirecttorays
DEBUG - 2013-11-15 15:36:45 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-11-15 15:36:45 --> XSS Filtering completed
DEBUG - 2013-11-15 15:36:45 --> XSS Filtering completed
INFO  - 2013-11-15 15:36:45 --> before getting the relation of member............6
INFO  - 2013-11-15 15:36:45 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-11-15 15:36:45 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-15 15:36:45 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-11-15 15:36:45 --> inside retrieving vacancy for member
INFO  - 2013-11-15 15:36:45 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-11-15 15:36:45 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-15 15:36:45 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-11-15 15:36:45 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-11-15 15:36:45 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-15 15:36:45 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-15 15:36:45 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-11-15 15:36:45 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-11-15 15:36:45 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-11-15 15:36:45 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-11-15 15:36:45 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-11-15 15:36:45 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-11-15 15:36:45 --> Final output sent to browser
DEBUG - 2013-11-15 15:36:45 --> Total execution time: 0.0790
DEBUG - 2013-11-15 15:36:45 --> Config Class Initialized
DEBUG - 2013-11-15 15:36:45 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:36:45 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:36:45 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:36:45 --> URI Class Initialized
DEBUG - 2013-11-15 15:36:45 --> Router Class Initialized
DEBUG - 2013-11-15 15:36:45 --> Output Class Initialized
DEBUG - 2013-11-15 15:36:45 --> Security Class Initialized
DEBUG - 2013-11-15 15:36:45 --> Input Class Initialized
DEBUG - 2013-11-15 15:36:45 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:36:45 --> Language Class Initialized
DEBUG - 2013-11-15 15:36:45 --> Loader Class Initialized
DEBUG - 2013-11-15 15:36:45 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:36:45 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:36:45 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:36:45 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:36:45 --> Session Class Initialized
DEBUG - 2013-11-15 15:36:45 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:36:45 --> Session routines successfully run
DEBUG - 2013-11-15 15:36:45 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:36:45 --> Controller Class Initialized
DEBUG - 2013-11-15 15:36:45 --> Model Class Initialized
DEBUG - 2013-11-15 15:36:45 --> Model Class Initialized
DEBUG - 2013-11-15 15:36:45 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:36:45 --> after session initialization................
ERROR - 2013-11-15 15:36:45 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-15 15:36:45 --> Config Class Initialized
DEBUG - 2013-11-15 15:36:45 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:36:45 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:36:45 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:36:45 --> URI Class Initialized
DEBUG - 2013-11-15 15:36:45 --> Router Class Initialized
ERROR - 2013-11-15 15:36:45 --> 404 Page Not Found --> css
DEBUG - 2013-11-15 15:36:46 --> Config Class Initialized
DEBUG - 2013-11-15 15:36:46 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:36:46 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:36:46 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:36:46 --> URI Class Initialized
DEBUG - 2013-11-15 15:36:46 --> Router Class Initialized
DEBUG - 2013-11-15 15:36:46 --> Output Class Initialized
DEBUG - 2013-11-15 15:36:46 --> Security Class Initialized
DEBUG - 2013-11-15 15:36:46 --> Input Class Initialized
DEBUG - 2013-11-15 15:36:46 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:36:46 --> Language Class Initialized
DEBUG - 2013-11-15 15:36:46 --> Loader Class Initialized
DEBUG - 2013-11-15 15:36:46 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:36:46 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:36:46 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:36:46 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:36:46 --> Session Class Initialized
DEBUG - 2013-11-15 15:36:46 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:36:46 --> Session routines successfully run
DEBUG - 2013-11-15 15:36:46 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:36:46 --> Controller Class Initialized
DEBUG - 2013-11-15 15:36:46 --> Model Class Initialized
DEBUG - 2013-11-15 15:36:46 --> Model Class Initialized
DEBUG - 2013-11-15 15:36:46 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:36:46 --> after session initialization................
INFO  - 2013-11-15 15:36:46 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 15:36:46 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 15:36:47 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 15:36:47 --> inside retrieving locations 
INFO  - 2013-11-15 15:36:47 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 15:36:47 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 15:36:47 --> Final output sent to browser
DEBUG - 2013-11-15 15:36:47 --> Total execution time: 0.0490
DEBUG - 2013-11-15 15:36:57 --> Config Class Initialized
DEBUG - 2013-11-15 15:36:57 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:36:57 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:36:57 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:36:57 --> URI Class Initialized
DEBUG - 2013-11-15 15:36:57 --> Router Class Initialized
DEBUG - 2013-11-15 15:36:57 --> Output Class Initialized
DEBUG - 2013-11-15 15:36:57 --> Security Class Initialized
DEBUG - 2013-11-15 15:36:57 --> Input Class Initialized
DEBUG - 2013-11-15 15:36:57 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:36:57 --> Language Class Initialized
DEBUG - 2013-11-15 15:36:57 --> Loader Class Initialized
DEBUG - 2013-11-15 15:36:57 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:36:57 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:36:57 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:36:57 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:36:57 --> Session Class Initialized
DEBUG - 2013-11-15 15:36:57 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:36:57 --> Session routines successfully run
DEBUG - 2013-11-15 15:36:57 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:36:57 --> Controller Class Initialized
DEBUG - 2013-11-15 15:36:57 --> Model Class Initialized
DEBUG - 2013-11-15 15:36:57 --> Model Class Initialized
DEBUG - 2013-11-15 15:36:57 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:36:57 --> after session initialization................
INFO  - 2013-11-15 15:36:57 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 15:36:57 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 15:36:57 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 15:36:57 --> inside retrieving locations 
INFO  - 2013-11-15 15:36:57 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 15:36:57 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 15:36:57 --> Final output sent to browser
DEBUG - 2013-11-15 15:36:57 --> Total execution time: 0.0460
DEBUG - 2013-11-15 15:36:59 --> Config Class Initialized
DEBUG - 2013-11-15 15:36:59 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:36:59 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:36:59 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:36:59 --> URI Class Initialized
DEBUG - 2013-11-15 15:36:59 --> Router Class Initialized
DEBUG - 2013-11-15 15:36:59 --> Output Class Initialized
DEBUG - 2013-11-15 15:36:59 --> Security Class Initialized
DEBUG - 2013-11-15 15:36:59 --> Input Class Initialized
DEBUG - 2013-11-15 15:36:59 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:36:59 --> Language Class Initialized
DEBUG - 2013-11-15 15:36:59 --> Loader Class Initialized
DEBUG - 2013-11-15 15:36:59 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:36:59 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:36:59 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:36:59 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:36:59 --> Session Class Initialized
DEBUG - 2013-11-15 15:36:59 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:36:59 --> Session routines successfully run
DEBUG - 2013-11-15 15:36:59 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:36:59 --> Controller Class Initialized
DEBUG - 2013-11-15 15:36:59 --> Model Class Initialized
DEBUG - 2013-11-15 15:36:59 --> Model Class Initialized
DEBUG - 2013-11-15 15:36:59 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:36:59 --> after session initialization................
DEBUG - 2013-11-15 15:36:59 --> Config Class Initialized
DEBUG - 2013-11-15 15:36:59 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:36:59 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:36:59 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:36:59 --> URI Class Initialized
DEBUG - 2013-11-15 15:36:59 --> Router Class Initialized
DEBUG - 2013-11-15 15:36:59 --> No URI present. Default controller set.
DEBUG - 2013-11-15 15:36:59 --> Output Class Initialized
DEBUG - 2013-11-15 15:36:59 --> Security Class Initialized
DEBUG - 2013-11-15 15:36:59 --> Input Class Initialized
DEBUG - 2013-11-15 15:36:59 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:36:59 --> Language Class Initialized
DEBUG - 2013-11-15 15:36:59 --> Loader Class Initialized
DEBUG - 2013-11-15 15:36:59 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:36:59 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:36:59 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:36:59 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:36:59 --> Session Class Initialized
DEBUG - 2013-11-15 15:36:59 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:36:59 --> A session cookie was not found.
DEBUG - 2013-11-15 15:36:59 --> Session routines successfully run
DEBUG - 2013-11-15 15:36:59 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:36:59 --> Controller Class Initialized
INFO  - 2013-11-15 15:36:59 --> the form message==>
INFO  - 2013-11-15 15:36:59 --> The session id is ========>fd37eba04e145133fed4253d1661151e and the member id is =======>
INFO  - 2013-11-15 15:36:59 --> after the retrieving session list.................//////////
DEBUG - 2013-11-15 15:36:59 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-11-15 15:36:59 --> Final output sent to browser
DEBUG - 2013-11-15 15:36:59 --> Total execution time: 0.0400
DEBUG - 2013-11-15 15:37:00 --> Config Class Initialized
DEBUG - 2013-11-15 15:37:00 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:37:00 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:37:00 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:37:00 --> URI Class Initialized
DEBUG - 2013-11-15 15:37:00 --> Router Class Initialized
DEBUG - 2013-11-15 15:37:00 --> Output Class Initialized
DEBUG - 2013-11-15 15:37:00 --> Security Class Initialized
DEBUG - 2013-11-15 15:37:00 --> Input Class Initialized
DEBUG - 2013-11-15 15:37:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:37:00 --> Language Class Initialized
DEBUG - 2013-11-15 15:37:00 --> Loader Class Initialized
DEBUG - 2013-11-15 15:37:00 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:37:00 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:37:00 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:37:00 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:37:00 --> Session Class Initialized
DEBUG - 2013-11-15 15:37:00 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:37:00 --> Session routines successfully run
DEBUG - 2013-11-15 15:37:00 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:37:00 --> Controller Class Initialized
DEBUG - 2013-11-15 15:37:00 --> Model Class Initialized
DEBUG - 2013-11-15 15:37:00 --> Model Class Initialized
DEBUG - 2013-11-15 15:37:00 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:37:00 --> after session initialization................
INFO  - 2013-11-15 15:37:00 --> after rays has been clicked.................
INFO  - 2013-11-15 15:37:00 --> last article id is 0
INFO  - 2013-11-15 15:37:00 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:37:00 --> 1 the guest only data>>>>>
INFO  - 2013-11-15 15:37:00 --> 1 the guest only data>> AFTER >>>
INFO  - 2013-11-15 15:37:00 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:37:00 --> 0 the guest only data>>>>>
INFO  - 2013-11-15 15:37:00 --> 0 the guest only data>> AFTER >>>#111
INFO  - 2013-11-15 15:37:00 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:37:00 --> 0 the guest only data>>>>>#111
INFO  - 2013-11-15 15:37:00 --> 0 the guest only data>> AFTER >>>#110
INFO  - 2013-11-15 15:37:00 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:37:00 --> 0 the guest only data>>>>>#110
INFO  - 2013-11-15 15:37:00 --> 0 the guest only data>> AFTER >>>#109
INFO  - 2013-11-15 15:37:00 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:37:00 --> 0 the guest only data>>>>>#109
INFO  - 2013-11-15 15:37:00 --> 0 the guest only data>> AFTER >>>#108
INFO  - 2013-11-15 15:37:00 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:37:00 --> 0 the guest only data>>>>>#108
INFO  - 2013-11-15 15:37:00 --> 0 the guest only data>> AFTER >>>#107
INFO  - 2013-11-15 15:37:00 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:37:00 --> 1 the guest only data>>>>>#107
INFO  - 2013-11-15 15:37:00 --> 1 the guest only data>> AFTER >>>#107
INFO  - 2013-11-15 15:37:00 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:37:00 --> 0 the guest only data>>>>>#107
INFO  - 2013-11-15 15:37:00 --> 0 the guest only data>> AFTER >>>#105
INFO  - 2013-11-15 15:37:00 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:37:00 --> 0 the guest only data>>>>>#105
INFO  - 2013-11-15 15:37:00 --> 0 the guest only data>> AFTER >>>#104
INFO  - 2013-11-15 15:37:00 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:37:00 --> 0 the guest only data>>>>>#104
INFO  - 2013-11-15 15:37:00 --> 0 the guest only data>> AFTER >>>#103
INFO  - 2013-11-15 15:37:00 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:37:00 --> 0 the guest only data>>>>>#103
INFO  - 2013-11-15 15:37:00 --> 0 the guest only data>> AFTER >>>#102
INFO  - 2013-11-15 15:37:00 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:37:00 --> 0 the guest only data>>>>>#102
INFO  - 2013-11-15 15:37:00 --> 0 the guest only data>> AFTER >>>#101
INFO  - 2013-11-15 15:37:00 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:37:00 --> 0 the guest only data>>>>>#101
INFO  - 2013-11-15 15:37:00 --> 0 the guest only data>> AFTER >>>#100
INFO  - 2013-11-15 15:37:00 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:37:00 --> 0 the guest only data>>>>>#100
INFO  - 2013-11-15 15:37:00 --> 0 the guest only data>> AFTER >>>#99
INFO  - 2013-11-15 15:37:00 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:37:00 --> 0 the guest only data>>>>>#99
INFO  - 2013-11-15 15:37:00 --> 0 the guest only data>> AFTER >>>#98
INFO  - 2013-11-15 15:37:00 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:37:00 --> 0 the guest only data>>>>>#98
INFO  - 2013-11-15 15:37:00 --> 0 the guest only data>> AFTER >>>#97
INFO  - 2013-11-15 15:37:00 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:37:00 --> 1 the guest only data>>>>>#97
INFO  - 2013-11-15 15:37:00 --> 1 the guest only data>> AFTER >>>#97
INFO  - 2013-11-15 15:37:00 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:37:00 --> 0 the guest only data>>>>>#97
INFO  - 2013-11-15 15:37:00 --> 0 the guest only data>> AFTER >>>#95
INFO  - 2013-11-15 15:37:00 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:37:00 --> 0 the guest only data>>>>>#95
INFO  - 2013-11-15 15:37:00 --> 0 the guest only data>> AFTER >>>#94
INFO  - 2013-11-15 15:37:00 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 15:37:00 --> 1 the guest only data>>>>>#94
INFO  - 2013-11-15 15:37:00 --> 1 the guest only data>> AFTER >>>#94
DEBUG - 2013-11-15 15:37:00 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-11-15 15:37:00 --> Final output sent to browser
DEBUG - 2013-11-15 15:37:00 --> Total execution time: 0.0820
DEBUG - 2013-11-15 15:38:56 --> Config Class Initialized
DEBUG - 2013-11-15 15:38:56 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:38:56 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:38:56 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:38:56 --> URI Class Initialized
DEBUG - 2013-11-15 15:38:56 --> Router Class Initialized
DEBUG - 2013-11-15 15:38:56 --> Output Class Initialized
DEBUG - 2013-11-15 15:38:56 --> Security Class Initialized
DEBUG - 2013-11-15 15:38:56 --> Input Class Initialized
DEBUG - 2013-11-15 15:38:56 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:38:56 --> Language Class Initialized
DEBUG - 2013-11-15 15:38:56 --> Loader Class Initialized
DEBUG - 2013-11-15 15:38:56 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:38:56 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:38:56 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:38:56 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:38:56 --> Session Class Initialized
DEBUG - 2013-11-15 15:38:56 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:38:56 --> Session routines successfully run
DEBUG - 2013-11-15 15:38:56 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:38:56 --> Controller Class Initialized
DEBUG - 2013-11-15 15:38:56 --> Model Class Initialized
DEBUG - 2013-11-15 15:38:56 --> Model Class Initialized
DEBUG - 2013-11-15 15:38:56 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:38:56 --> after session initialization................
INFO  - 2013-11-15 15:38:56 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 15:38:56 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 15:38:56 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 15:38:56 --> inside retrieving locations 
INFO  - 2013-11-15 15:38:56 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 15:38:56 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 15:38:56 --> Final output sent to browser
DEBUG - 2013-11-15 15:38:56 --> Total execution time: 0.0624
DEBUG - 2013-11-15 15:38:57 --> Config Class Initialized
DEBUG - 2013-11-15 15:38:57 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:38:57 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:38:57 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:38:57 --> URI Class Initialized
DEBUG - 2013-11-15 15:38:57 --> Router Class Initialized
DEBUG - 2013-11-15 15:38:57 --> Output Class Initialized
DEBUG - 2013-11-15 15:38:57 --> Security Class Initialized
DEBUG - 2013-11-15 15:38:57 --> Input Class Initialized
DEBUG - 2013-11-15 15:38:57 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:38:57 --> Language Class Initialized
DEBUG - 2013-11-15 15:38:57 --> Loader Class Initialized
DEBUG - 2013-11-15 15:38:57 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:38:57 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:38:57 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:38:57 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:38:57 --> Session Class Initialized
DEBUG - 2013-11-15 15:38:57 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:38:57 --> Session routines successfully run
DEBUG - 2013-11-15 15:38:57 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:38:57 --> Controller Class Initialized
DEBUG - 2013-11-15 15:38:57 --> Model Class Initialized
DEBUG - 2013-11-15 15:38:57 --> Model Class Initialized
DEBUG - 2013-11-15 15:38:57 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:38:57 --> after session initialization................
INFO  - 2013-11-15 15:38:57 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 15:38:57 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 15:38:57 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 15:38:57 --> inside retrieving locations 
INFO  - 2013-11-15 15:38:57 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 15:38:57 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 15:38:57 --> Final output sent to browser
DEBUG - 2013-11-15 15:38:57 --> Total execution time: 0.0468
DEBUG - 2013-11-15 15:42:35 --> Config Class Initialized
DEBUG - 2013-11-15 15:42:35 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:42:35 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:42:35 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:42:35 --> URI Class Initialized
DEBUG - 2013-11-15 15:42:35 --> Router Class Initialized
DEBUG - 2013-11-15 15:42:35 --> Output Class Initialized
DEBUG - 2013-11-15 15:42:35 --> Security Class Initialized
DEBUG - 2013-11-15 15:42:35 --> Input Class Initialized
DEBUG - 2013-11-15 15:42:35 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:42:35 --> Language Class Initialized
DEBUG - 2013-11-15 15:42:35 --> Loader Class Initialized
DEBUG - 2013-11-15 15:42:35 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:42:35 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:42:35 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:42:35 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:42:35 --> Session Class Initialized
DEBUG - 2013-11-15 15:42:35 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:42:35 --> Session routines successfully run
DEBUG - 2013-11-15 15:42:35 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:42:35 --> Controller Class Initialized
DEBUG - 2013-11-15 15:42:35 --> Model Class Initialized
DEBUG - 2013-11-15 15:42:35 --> Model Class Initialized
DEBUG - 2013-11-15 15:42:35 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:42:35 --> after session initialization................
INFO  - 2013-11-15 15:42:35 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 15:42:35 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 15:42:35 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 15:42:35 --> inside retrieving locations 
INFO  - 2013-11-15 15:42:35 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 15:42:35 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 15:42:35 --> Final output sent to browser
DEBUG - 2013-11-15 15:42:35 --> Total execution time: 0.0468
DEBUG - 2013-11-15 15:42:37 --> Config Class Initialized
DEBUG - 2013-11-15 15:42:37 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:42:37 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:42:37 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:42:37 --> URI Class Initialized
DEBUG - 2013-11-15 15:42:37 --> Router Class Initialized
DEBUG - 2013-11-15 15:42:37 --> Output Class Initialized
DEBUG - 2013-11-15 15:42:37 --> Security Class Initialized
DEBUG - 2013-11-15 15:42:37 --> Input Class Initialized
DEBUG - 2013-11-15 15:42:37 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:42:37 --> Language Class Initialized
DEBUG - 2013-11-15 15:42:37 --> Loader Class Initialized
DEBUG - 2013-11-15 15:42:37 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:42:37 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:42:37 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:42:37 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:42:37 --> Session Class Initialized
DEBUG - 2013-11-15 15:42:37 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:42:37 --> Session routines successfully run
DEBUG - 2013-11-15 15:42:37 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:42:37 --> Controller Class Initialized
DEBUG - 2013-11-15 15:42:37 --> Model Class Initialized
DEBUG - 2013-11-15 15:42:37 --> Model Class Initialized
DEBUG - 2013-11-15 15:42:37 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:42:37 --> after session initialization................
INFO  - 2013-11-15 15:42:37 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 15:42:37 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 15:42:37 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 15:42:37 --> inside retrieving locations 
INFO  - 2013-11-15 15:42:37 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 15:42:37 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 15:42:37 --> Final output sent to browser
DEBUG - 2013-11-15 15:42:37 --> Total execution time: 0.0468
DEBUG - 2013-11-15 15:42:38 --> Config Class Initialized
DEBUG - 2013-11-15 15:42:38 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:42:38 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:42:38 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:42:38 --> URI Class Initialized
DEBUG - 2013-11-15 15:42:38 --> Router Class Initialized
DEBUG - 2013-11-15 15:42:38 --> Output Class Initialized
DEBUG - 2013-11-15 15:42:38 --> Security Class Initialized
DEBUG - 2013-11-15 15:42:38 --> Input Class Initialized
DEBUG - 2013-11-15 15:42:38 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:42:38 --> Language Class Initialized
DEBUG - 2013-11-15 15:42:38 --> Loader Class Initialized
DEBUG - 2013-11-15 15:42:38 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:42:38 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:42:38 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:42:38 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:42:38 --> Session Class Initialized
DEBUG - 2013-11-15 15:42:38 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:42:38 --> Session routines successfully run
DEBUG - 2013-11-15 15:42:38 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:42:38 --> Controller Class Initialized
DEBUG - 2013-11-15 15:42:38 --> Model Class Initialized
DEBUG - 2013-11-15 15:42:38 --> Model Class Initialized
DEBUG - 2013-11-15 15:42:38 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:42:38 --> after session initialization................
DEBUG - 2013-11-15 15:42:38 --> Config Class Initialized
DEBUG - 2013-11-15 15:42:38 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:42:38 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:42:38 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:42:38 --> URI Class Initialized
DEBUG - 2013-11-15 15:42:38 --> Router Class Initialized
DEBUG - 2013-11-15 15:42:38 --> No URI present. Default controller set.
DEBUG - 2013-11-15 15:42:38 --> Output Class Initialized
DEBUG - 2013-11-15 15:42:38 --> Security Class Initialized
DEBUG - 2013-11-15 15:42:38 --> Input Class Initialized
DEBUG - 2013-11-15 15:42:38 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:42:38 --> Language Class Initialized
DEBUG - 2013-11-15 15:42:38 --> Loader Class Initialized
DEBUG - 2013-11-15 15:42:38 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:42:38 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:42:38 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:42:38 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:42:38 --> Session Class Initialized
DEBUG - 2013-11-15 15:42:38 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:42:38 --> A session cookie was not found.
DEBUG - 2013-11-15 15:42:38 --> Session routines successfully run
DEBUG - 2013-11-15 15:42:38 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:42:38 --> Controller Class Initialized
INFO  - 2013-11-15 15:42:38 --> the form message==>
INFO  - 2013-11-15 15:42:38 --> The session id is ========>a858b52d03d4d2b0182c169ed2f760a8 and the member id is =======>
INFO  - 2013-11-15 15:42:38 --> after the retrieving session list.................//////////
DEBUG - 2013-11-15 15:42:38 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-11-15 15:42:38 --> Final output sent to browser
DEBUG - 2013-11-15 15:42:38 --> Total execution time: 0.0468
DEBUG - 2013-11-15 15:42:51 --> Config Class Initialized
DEBUG - 2013-11-15 15:42:51 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:42:51 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:42:51 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:42:51 --> URI Class Initialized
DEBUG - 2013-11-15 15:42:51 --> Router Class Initialized
DEBUG - 2013-11-15 15:42:51 --> Output Class Initialized
DEBUG - 2013-11-15 15:42:51 --> Security Class Initialized
DEBUG - 2013-11-15 15:42:51 --> Input Class Initialized
DEBUG - 2013-11-15 15:42:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:42:51 --> Language Class Initialized
DEBUG - 2013-11-15 15:42:51 --> Loader Class Initialized
DEBUG - 2013-11-15 15:42:51 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:42:51 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:42:51 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:42:51 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:42:51 --> Session Class Initialized
DEBUG - 2013-11-15 15:42:51 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:42:51 --> Session routines successfully run
DEBUG - 2013-11-15 15:42:51 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:42:51 --> Controller Class Initialized
DEBUG - 2013-11-15 15:42:51 --> Model Class Initialized
DEBUG - 2013-11-15 15:42:51 --> Model Class Initialized
DEBUG - 2013-11-15 15:42:51 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:42:51 --> after session initialization................
INFO  - 2013-11-15 15:42:51 --> inside rays login auth.............
DEBUG - 2013-11-15 15:42:51 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-11-15 15:42:51 --> XSS Filtering completed
DEBUG - 2013-11-15 15:42:51 --> XSS Filtering completed
INFO  - 2013-11-15 15:42:51 --> before getting the relation of member............6
INFO  - 2013-11-15 15:42:51 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-11-15 15:42:51 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-15 15:42:51 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-11-15 15:42:51 --> inside retrieving vacancy for member
INFO  - 2013-11-15 15:42:51 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-11-15 15:42:51 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-15 15:42:51 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-11-15 15:42:51 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-11-15 15:42:51 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-15 15:42:51 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-15 15:42:51 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-11-15 15:42:51 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-11-15 15:42:51 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-11-15 15:42:51 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-11-15 15:42:51 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-11-15 15:42:51 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-11-15 15:42:51 --> Final output sent to browser
DEBUG - 2013-11-15 15:42:51 --> Total execution time: 0.0780
DEBUG - 2013-11-15 15:42:51 --> Config Class Initialized
DEBUG - 2013-11-15 15:42:51 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:42:51 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:42:51 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:42:51 --> URI Class Initialized
DEBUG - 2013-11-15 15:42:51 --> Router Class Initialized
DEBUG - 2013-11-15 15:42:51 --> Output Class Initialized
DEBUG - 2013-11-15 15:42:51 --> Security Class Initialized
DEBUG - 2013-11-15 15:42:51 --> Input Class Initialized
DEBUG - 2013-11-15 15:42:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:42:51 --> Language Class Initialized
DEBUG - 2013-11-15 15:42:51 --> Loader Class Initialized
DEBUG - 2013-11-15 15:42:51 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:42:51 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:42:51 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:42:51 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:42:51 --> Session Class Initialized
DEBUG - 2013-11-15 15:42:51 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:42:51 --> Session routines successfully run
DEBUG - 2013-11-15 15:42:51 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:42:51 --> Controller Class Initialized
DEBUG - 2013-11-15 15:42:51 --> Model Class Initialized
DEBUG - 2013-11-15 15:42:51 --> Model Class Initialized
DEBUG - 2013-11-15 15:42:51 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:42:51 --> after session initialization................
ERROR - 2013-11-15 15:42:51 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-15 15:42:51 --> Config Class Initialized
DEBUG - 2013-11-15 15:42:51 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:42:51 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:42:51 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:42:51 --> URI Class Initialized
DEBUG - 2013-11-15 15:42:51 --> Router Class Initialized
ERROR - 2013-11-15 15:42:51 --> 404 Page Not Found --> css
DEBUG - 2013-11-15 15:42:53 --> Config Class Initialized
DEBUG - 2013-11-15 15:42:53 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:42:53 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:42:53 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:42:53 --> URI Class Initialized
DEBUG - 2013-11-15 15:42:53 --> Router Class Initialized
DEBUG - 2013-11-15 15:42:53 --> Output Class Initialized
DEBUG - 2013-11-15 15:42:53 --> Security Class Initialized
DEBUG - 2013-11-15 15:42:53 --> Input Class Initialized
DEBUG - 2013-11-15 15:42:53 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:42:53 --> Language Class Initialized
DEBUG - 2013-11-15 15:42:53 --> Loader Class Initialized
DEBUG - 2013-11-15 15:42:53 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:42:53 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:42:53 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:42:53 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:42:53 --> Session Class Initialized
DEBUG - 2013-11-15 15:42:53 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:42:53 --> Session routines successfully run
DEBUG - 2013-11-15 15:42:53 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:42:53 --> Controller Class Initialized
DEBUG - 2013-11-15 15:42:53 --> Model Class Initialized
DEBUG - 2013-11-15 15:42:53 --> Model Class Initialized
DEBUG - 2013-11-15 15:42:53 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:42:53 --> after session initialization................
INFO  - 2013-11-15 15:42:53 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 15:42:53 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 15:42:53 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 15:42:53 --> inside retrieving locations 
INFO  - 2013-11-15 15:42:53 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 15:42:53 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 15:42:53 --> Final output sent to browser
DEBUG - 2013-11-15 15:42:53 --> Total execution time: 0.0468
DEBUG - 2013-11-15 15:44:59 --> Config Class Initialized
DEBUG - 2013-11-15 15:44:59 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:44:59 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:44:59 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:44:59 --> URI Class Initialized
DEBUG - 2013-11-15 15:44:59 --> Router Class Initialized
DEBUG - 2013-11-15 15:44:59 --> Output Class Initialized
DEBUG - 2013-11-15 15:44:59 --> Security Class Initialized
DEBUG - 2013-11-15 15:44:59 --> Input Class Initialized
DEBUG - 2013-11-15 15:44:59 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:44:59 --> Language Class Initialized
DEBUG - 2013-11-15 15:44:59 --> Loader Class Initialized
DEBUG - 2013-11-15 15:44:59 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:44:59 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:44:59 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:44:59 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:44:59 --> Session Class Initialized
DEBUG - 2013-11-15 15:44:59 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:44:59 --> Session routines successfully run
DEBUG - 2013-11-15 15:44:59 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:44:59 --> Controller Class Initialized
DEBUG - 2013-11-15 15:44:59 --> Model Class Initialized
DEBUG - 2013-11-15 15:44:59 --> Model Class Initialized
DEBUG - 2013-11-15 15:44:59 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:44:59 --> after session initialization................
INFO  - 2013-11-15 15:44:59 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 15:44:59 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 15:44:59 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 15:44:59 --> inside retrieving locations 
INFO  - 2013-11-15 15:44:59 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 15:44:59 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 15:44:59 --> Final output sent to browser
DEBUG - 2013-11-15 15:44:59 --> Total execution time: 0.0624
DEBUG - 2013-11-15 15:45:08 --> Config Class Initialized
DEBUG - 2013-11-15 15:45:08 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:45:08 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:45:08 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:45:08 --> URI Class Initialized
DEBUG - 2013-11-15 15:45:08 --> Router Class Initialized
DEBUG - 2013-11-15 15:45:08 --> Output Class Initialized
DEBUG - 2013-11-15 15:45:08 --> Security Class Initialized
DEBUG - 2013-11-15 15:45:08 --> Input Class Initialized
DEBUG - 2013-11-15 15:45:08 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:45:08 --> Language Class Initialized
DEBUG - 2013-11-15 15:45:08 --> Loader Class Initialized
DEBUG - 2013-11-15 15:45:08 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:45:08 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:45:08 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:45:08 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:45:08 --> Session Class Initialized
DEBUG - 2013-11-15 15:45:08 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:45:08 --> Session routines successfully run
DEBUG - 2013-11-15 15:45:08 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:45:08 --> Controller Class Initialized
DEBUG - 2013-11-15 15:45:08 --> Model Class Initialized
DEBUG - 2013-11-15 15:45:08 --> Model Class Initialized
DEBUG - 2013-11-15 15:45:08 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:45:08 --> after session initialization................
INFO  - 2013-11-15 15:45:08 --> inside retrieve most commented forum topic 
INFO  - 2013-11-15 15:45:08 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
INFO  - 2013-11-15 15:45:08 --> inside retrieving first 20 topics 
INFO  - 2013-11-15 15:45:08 --> SELECT `t`.`id_topicforum`, upper(t.name) as name, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
LIMIT 20
INFO  - 2013-11-15 15:45:08 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-15 15:45:08 --> SELECT `ff`.`id_forum` as id, `ff`.`name`, count(f.id_forum) as sub_forum
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` is null 
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`
INFO  - 2013-11-15 15:45:08 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-15 15:45:08 --> inside retrieving comments topic id and drug id is 1
INFO  - 2013-11-15 15:45:08 --> SELECT `tc`.`id_topiccomment`, `tc`.`comment`, `tc`.`timecreated`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-15 15:45:08 --> inside retrieving comments topic id 1
INFO  - 2013-11-15 15:45:08 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
INFO  - 2013-11-15 15:45:08 --> after forums has been clicked.................
INFO  - 2013-11-15 15:45:08 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-11-15 15:45:08 --> File loaded: ../pharmaray-application/views/forum.php
DEBUG - 2013-11-15 15:45:08 --> Final output sent to browser
DEBUG - 2013-11-15 15:45:08 --> Total execution time: 0.1560
DEBUG - 2013-11-15 15:45:08 --> Config Class Initialized
DEBUG - 2013-11-15 15:45:08 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:45:08 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:45:08 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:45:08 --> URI Class Initialized
DEBUG - 2013-11-15 15:45:08 --> Router Class Initialized
DEBUG - 2013-11-15 15:45:08 --> Output Class Initialized
DEBUG - 2013-11-15 15:45:08 --> Security Class Initialized
DEBUG - 2013-11-15 15:45:08 --> Input Class Initialized
DEBUG - 2013-11-15 15:45:08 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:45:08 --> Language Class Initialized
DEBUG - 2013-11-15 15:45:08 --> Loader Class Initialized
DEBUG - 2013-11-15 15:45:08 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:45:08 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:45:08 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:45:08 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:45:08 --> Session Class Initialized
DEBUG - 2013-11-15 15:45:08 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:45:08 --> Session routines successfully run
DEBUG - 2013-11-15 15:45:08 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:45:08 --> Controller Class Initialized
DEBUG - 2013-11-15 15:45:08 --> Model Class Initialized
DEBUG - 2013-11-15 15:45:08 --> Model Class Initialized
DEBUG - 2013-11-15 15:45:08 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:45:08 --> after session initialization................
ERROR - 2013-11-15 15:45:08 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-15 15:45:08 --> Config Class Initialized
DEBUG - 2013-11-15 15:45:08 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:45:08 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:45:08 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:45:08 --> URI Class Initialized
DEBUG - 2013-11-15 15:45:08 --> Router Class Initialized
ERROR - 2013-11-15 15:45:08 --> 404 Page Not Found --> css
DEBUG - 2013-11-15 15:45:10 --> Config Class Initialized
DEBUG - 2013-11-15 15:45:10 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:45:10 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:45:10 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:45:10 --> URI Class Initialized
DEBUG - 2013-11-15 15:45:10 --> Router Class Initialized
DEBUG - 2013-11-15 15:45:10 --> Output Class Initialized
DEBUG - 2013-11-15 15:45:10 --> Security Class Initialized
DEBUG - 2013-11-15 15:45:10 --> Input Class Initialized
DEBUG - 2013-11-15 15:45:10 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:45:10 --> Language Class Initialized
DEBUG - 2013-11-15 15:45:10 --> Loader Class Initialized
DEBUG - 2013-11-15 15:45:10 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:45:10 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:45:10 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:45:10 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:45:10 --> Session Class Initialized
DEBUG - 2013-11-15 15:45:10 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:45:10 --> Session routines successfully run
DEBUG - 2013-11-15 15:45:10 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:45:10 --> Controller Class Initialized
DEBUG - 2013-11-15 15:45:10 --> Model Class Initialized
DEBUG - 2013-11-15 15:45:10 --> Model Class Initialized
DEBUG - 2013-11-15 15:45:10 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:45:10 --> after session initialization................
INFO  - 2013-11-15 15:45:10 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 15:45:10 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 15:45:10 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 15:45:10 --> inside retrieving locations 
INFO  - 2013-11-15 15:45:10 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 15:45:10 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 15:45:10 --> Final output sent to browser
DEBUG - 2013-11-15 15:45:10 --> Total execution time: 0.0468
DEBUG - 2013-11-15 15:45:37 --> Config Class Initialized
DEBUG - 2013-11-15 15:45:37 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:45:37 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:45:37 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:45:37 --> URI Class Initialized
DEBUG - 2013-11-15 15:45:37 --> Router Class Initialized
DEBUG - 2013-11-15 15:45:37 --> Output Class Initialized
DEBUG - 2013-11-15 15:45:37 --> Security Class Initialized
DEBUG - 2013-11-15 15:45:37 --> Input Class Initialized
DEBUG - 2013-11-15 15:45:37 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:45:37 --> Language Class Initialized
DEBUG - 2013-11-15 15:45:37 --> Loader Class Initialized
DEBUG - 2013-11-15 15:45:37 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:45:37 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:45:37 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:45:37 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:45:37 --> Session Class Initialized
DEBUG - 2013-11-15 15:45:37 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:45:37 --> Session routines successfully run
DEBUG - 2013-11-15 15:45:37 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:45:37 --> Controller Class Initialized
DEBUG - 2013-11-15 15:45:37 --> Model Class Initialized
DEBUG - 2013-11-15 15:45:37 --> Model Class Initialized
DEBUG - 2013-11-15 15:45:37 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:45:37 --> after session initialization................
INFO  - 2013-11-15 15:45:37 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 15:45:37 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 15:45:37 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 15:45:37 --> inside retrieving locations 
INFO  - 2013-11-15 15:45:37 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 15:45:37 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 15:45:37 --> Final output sent to browser
DEBUG - 2013-11-15 15:45:37 --> Total execution time: 0.0624
DEBUG - 2013-11-15 15:46:38 --> Config Class Initialized
DEBUG - 2013-11-15 15:46:38 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:46:38 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:46:38 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:46:38 --> URI Class Initialized
DEBUG - 2013-11-15 15:46:38 --> Router Class Initialized
DEBUG - 2013-11-15 15:46:38 --> Output Class Initialized
DEBUG - 2013-11-15 15:46:38 --> Security Class Initialized
DEBUG - 2013-11-15 15:46:38 --> Input Class Initialized
DEBUG - 2013-11-15 15:46:38 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:46:38 --> Language Class Initialized
DEBUG - 2013-11-15 15:46:38 --> Loader Class Initialized
DEBUG - 2013-11-15 15:46:38 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:46:38 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:46:38 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:46:38 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:46:38 --> Session Class Initialized
DEBUG - 2013-11-15 15:46:38 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:46:38 --> Session routines successfully run
DEBUG - 2013-11-15 15:46:38 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:46:38 --> Controller Class Initialized
DEBUG - 2013-11-15 15:46:38 --> Model Class Initialized
DEBUG - 2013-11-15 15:46:38 --> Model Class Initialized
DEBUG - 2013-11-15 15:46:38 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:46:38 --> after session initialization................
INFO  - 2013-11-15 15:46:38 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 15:46:38 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 15:46:38 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 15:46:38 --> inside retrieving locations 
INFO  - 2013-11-15 15:46:38 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 15:46:38 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 15:46:38 --> Final output sent to browser
DEBUG - 2013-11-15 15:46:38 --> Total execution time: 0.0620
DEBUG - 2013-11-15 15:47:23 --> Config Class Initialized
DEBUG - 2013-11-15 15:47:23 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:47:23 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:47:23 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:47:23 --> URI Class Initialized
DEBUG - 2013-11-15 15:47:23 --> Router Class Initialized
DEBUG - 2013-11-15 15:47:23 --> Output Class Initialized
DEBUG - 2013-11-15 15:47:23 --> Security Class Initialized
DEBUG - 2013-11-15 15:47:23 --> Input Class Initialized
DEBUG - 2013-11-15 15:47:23 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:47:23 --> Language Class Initialized
DEBUG - 2013-11-15 15:47:23 --> Loader Class Initialized
DEBUG - 2013-11-15 15:47:23 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:47:23 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:47:23 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:47:23 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:47:23 --> Session Class Initialized
DEBUG - 2013-11-15 15:47:23 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:47:23 --> Session routines successfully run
DEBUG - 2013-11-15 15:47:23 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:47:23 --> Controller Class Initialized
DEBUG - 2013-11-15 15:47:23 --> Model Class Initialized
DEBUG - 2013-11-15 15:47:23 --> Model Class Initialized
DEBUG - 2013-11-15 15:47:23 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:47:23 --> after session initialization................
INFO  - 2013-11-15 15:47:23 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 15:47:23 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 15:47:23 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 15:47:23 --> inside retrieving locations 
INFO  - 2013-11-15 15:47:23 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 15:47:23 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 15:47:23 --> Final output sent to browser
DEBUG - 2013-11-15 15:47:23 --> Total execution time: 0.0468
DEBUG - 2013-11-15 15:47:24 --> Config Class Initialized
DEBUG - 2013-11-15 15:47:24 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:47:24 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:47:24 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:47:24 --> URI Class Initialized
DEBUG - 2013-11-15 15:47:24 --> Router Class Initialized
DEBUG - 2013-11-15 15:47:24 --> Output Class Initialized
DEBUG - 2013-11-15 15:47:24 --> Security Class Initialized
DEBUG - 2013-11-15 15:47:24 --> Input Class Initialized
DEBUG - 2013-11-15 15:47:24 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:47:24 --> Language Class Initialized
DEBUG - 2013-11-15 15:47:24 --> Loader Class Initialized
DEBUG - 2013-11-15 15:47:24 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:47:24 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:47:24 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:47:24 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:47:24 --> Session Class Initialized
DEBUG - 2013-11-15 15:47:24 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:47:24 --> Session routines successfully run
DEBUG - 2013-11-15 15:47:24 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:47:24 --> Controller Class Initialized
DEBUG - 2013-11-15 15:47:24 --> Model Class Initialized
DEBUG - 2013-11-15 15:47:25 --> Model Class Initialized
DEBUG - 2013-11-15 15:47:25 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:47:25 --> after session initialization................
INFO  - 2013-11-15 15:47:25 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 15:47:25 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 15:47:25 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 15:47:25 --> inside retrieving locations 
INFO  - 2013-11-15 15:47:25 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 15:47:25 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 15:47:25 --> Final output sent to browser
DEBUG - 2013-11-15 15:47:25 --> Total execution time: 0.0468
DEBUG - 2013-11-15 15:47:26 --> Config Class Initialized
DEBUG - 2013-11-15 15:47:26 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:47:26 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:47:26 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:47:26 --> URI Class Initialized
DEBUG - 2013-11-15 15:47:26 --> Router Class Initialized
DEBUG - 2013-11-15 15:47:26 --> Output Class Initialized
DEBUG - 2013-11-15 15:47:26 --> Security Class Initialized
DEBUG - 2013-11-15 15:47:26 --> Input Class Initialized
DEBUG - 2013-11-15 15:47:26 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:47:26 --> Language Class Initialized
DEBUG - 2013-11-15 15:47:26 --> Loader Class Initialized
DEBUG - 2013-11-15 15:47:26 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:47:26 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:47:26 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:47:26 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:47:26 --> Session Class Initialized
DEBUG - 2013-11-15 15:47:26 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:47:26 --> Session routines successfully run
DEBUG - 2013-11-15 15:47:26 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:47:26 --> Controller Class Initialized
DEBUG - 2013-11-15 15:47:26 --> Model Class Initialized
DEBUG - 2013-11-15 15:47:26 --> Model Class Initialized
DEBUG - 2013-11-15 15:47:26 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:47:26 --> after session initialization................
INFO  - 2013-11-15 15:47:26 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 15:47:26 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 15:47:26 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 15:47:26 --> inside retrieving locations 
INFO  - 2013-11-15 15:47:26 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 15:47:26 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 15:47:26 --> Final output sent to browser
DEBUG - 2013-11-15 15:47:26 --> Total execution time: 0.0624
DEBUG - 2013-11-15 15:47:28 --> Config Class Initialized
DEBUG - 2013-11-15 15:47:28 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:47:28 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:47:28 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:47:28 --> URI Class Initialized
DEBUG - 2013-11-15 15:47:28 --> Router Class Initialized
DEBUG - 2013-11-15 15:47:28 --> Output Class Initialized
DEBUG - 2013-11-15 15:47:28 --> Security Class Initialized
DEBUG - 2013-11-15 15:47:28 --> Input Class Initialized
DEBUG - 2013-11-15 15:47:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:47:28 --> Language Class Initialized
DEBUG - 2013-11-15 15:47:28 --> Loader Class Initialized
DEBUG - 2013-11-15 15:47:28 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:47:28 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:47:28 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:47:28 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:47:28 --> Session Class Initialized
DEBUG - 2013-11-15 15:47:28 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:47:28 --> Session routines successfully run
DEBUG - 2013-11-15 15:47:28 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:47:28 --> Controller Class Initialized
DEBUG - 2013-11-15 15:47:28 --> Model Class Initialized
DEBUG - 2013-11-15 15:47:28 --> Model Class Initialized
DEBUG - 2013-11-15 15:47:28 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:47:28 --> after session initialization................
INFO  - 2013-11-15 15:47:28 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 15:47:28 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 15:47:28 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 15:47:28 --> inside retrieving locations 
INFO  - 2013-11-15 15:47:28 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 15:47:28 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 15:47:28 --> Final output sent to browser
DEBUG - 2013-11-15 15:47:28 --> Total execution time: 0.0624
DEBUG - 2013-11-15 15:47:38 --> Config Class Initialized
DEBUG - 2013-11-15 15:47:38 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:47:38 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:47:38 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:47:38 --> URI Class Initialized
DEBUG - 2013-11-15 15:47:38 --> Router Class Initialized
DEBUG - 2013-11-15 15:47:38 --> Output Class Initialized
DEBUG - 2013-11-15 15:47:38 --> Security Class Initialized
DEBUG - 2013-11-15 15:47:38 --> Input Class Initialized
DEBUG - 2013-11-15 15:47:38 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:47:38 --> Language Class Initialized
DEBUG - 2013-11-15 15:47:38 --> Loader Class Initialized
DEBUG - 2013-11-15 15:47:38 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:47:38 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:47:38 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:47:38 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:47:38 --> Session Class Initialized
DEBUG - 2013-11-15 15:47:38 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:47:38 --> Session routines successfully run
DEBUG - 2013-11-15 15:47:38 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:47:38 --> Controller Class Initialized
DEBUG - 2013-11-15 15:47:38 --> Model Class Initialized
DEBUG - 2013-11-15 15:47:38 --> Model Class Initialized
DEBUG - 2013-11-15 15:47:38 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:47:38 --> after session initialization................
INFO  - 2013-11-15 15:47:38 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 15:47:38 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 15:47:38 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 15:47:38 --> inside retrieving locations 
INFO  - 2013-11-15 15:47:38 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 15:47:38 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 15:47:38 --> Final output sent to browser
DEBUG - 2013-11-15 15:47:38 --> Total execution time: 0.0624
DEBUG - 2013-11-15 15:47:48 --> Config Class Initialized
DEBUG - 2013-11-15 15:47:48 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:47:48 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:47:48 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:47:48 --> URI Class Initialized
DEBUG - 2013-11-15 15:47:48 --> Router Class Initialized
DEBUG - 2013-11-15 15:47:48 --> Output Class Initialized
DEBUG - 2013-11-15 15:47:48 --> Security Class Initialized
DEBUG - 2013-11-15 15:47:48 --> Input Class Initialized
DEBUG - 2013-11-15 15:47:48 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:47:48 --> Language Class Initialized
DEBUG - 2013-11-15 15:47:48 --> Loader Class Initialized
DEBUG - 2013-11-15 15:47:48 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:47:48 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:47:48 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:47:48 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:47:48 --> Session Class Initialized
DEBUG - 2013-11-15 15:47:48 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:47:48 --> Session routines successfully run
DEBUG - 2013-11-15 15:47:48 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:47:48 --> Controller Class Initialized
DEBUG - 2013-11-15 15:47:48 --> Model Class Initialized
DEBUG - 2013-11-15 15:47:48 --> Model Class Initialized
DEBUG - 2013-11-15 15:47:48 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:47:48 --> after session initialization................
INFO  - 2013-11-15 15:47:48 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 15:47:48 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 15:47:48 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 15:47:48 --> inside retrieving locations 
INFO  - 2013-11-15 15:47:48 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 15:47:48 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 15:47:48 --> Final output sent to browser
DEBUG - 2013-11-15 15:47:48 --> Total execution time: 0.0468
DEBUG - 2013-11-15 15:48:11 --> Config Class Initialized
DEBUG - 2013-11-15 15:48:11 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:48:11 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:48:11 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:48:11 --> URI Class Initialized
DEBUG - 2013-11-15 15:48:11 --> Router Class Initialized
DEBUG - 2013-11-15 15:48:11 --> Output Class Initialized
DEBUG - 2013-11-15 15:48:11 --> Security Class Initialized
DEBUG - 2013-11-15 15:48:11 --> Input Class Initialized
DEBUG - 2013-11-15 15:48:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:48:11 --> Language Class Initialized
DEBUG - 2013-11-15 15:48:11 --> Loader Class Initialized
DEBUG - 2013-11-15 15:48:11 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:48:11 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:48:11 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:48:11 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:48:11 --> Session Class Initialized
DEBUG - 2013-11-15 15:48:11 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:48:11 --> Session routines successfully run
DEBUG - 2013-11-15 15:48:11 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:48:11 --> Controller Class Initialized
DEBUG - 2013-11-15 15:48:11 --> Model Class Initialized
DEBUG - 2013-11-15 15:48:11 --> Model Class Initialized
DEBUG - 2013-11-15 15:48:11 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:48:11 --> after session initialization................
INFO  - 2013-11-15 15:48:11 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 15:48:11 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 15:48:11 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 15:48:11 --> inside retrieving locations 
INFO  - 2013-11-15 15:48:11 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 15:48:11 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 15:48:11 --> Final output sent to browser
DEBUG - 2013-11-15 15:48:11 --> Total execution time: 0.0468
DEBUG - 2013-11-15 15:48:12 --> Config Class Initialized
DEBUG - 2013-11-15 15:48:12 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:48:12 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:48:12 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:48:12 --> URI Class Initialized
DEBUG - 2013-11-15 15:48:12 --> Router Class Initialized
DEBUG - 2013-11-15 15:48:12 --> Output Class Initialized
DEBUG - 2013-11-15 15:48:12 --> Security Class Initialized
DEBUG - 2013-11-15 15:48:12 --> Input Class Initialized
DEBUG - 2013-11-15 15:48:12 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:48:12 --> Language Class Initialized
DEBUG - 2013-11-15 15:48:12 --> Loader Class Initialized
DEBUG - 2013-11-15 15:48:12 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:48:12 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:48:12 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:48:12 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:48:12 --> Session Class Initialized
DEBUG - 2013-11-15 15:48:12 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:48:12 --> Session routines successfully run
DEBUG - 2013-11-15 15:48:12 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:48:12 --> Controller Class Initialized
DEBUG - 2013-11-15 15:48:12 --> Model Class Initialized
DEBUG - 2013-11-15 15:48:12 --> Model Class Initialized
DEBUG - 2013-11-15 15:48:12 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:48:12 --> after session initialization................
INFO  - 2013-11-15 15:48:12 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 15:48:12 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 15:48:12 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 15:48:12 --> inside retrieving locations 
INFO  - 2013-11-15 15:48:12 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 15:48:12 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 15:48:12 --> Final output sent to browser
DEBUG - 2013-11-15 15:48:12 --> Total execution time: 0.0468
DEBUG - 2013-11-15 15:50:29 --> Config Class Initialized
DEBUG - 2013-11-15 15:50:29 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:50:29 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:50:29 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:50:29 --> URI Class Initialized
DEBUG - 2013-11-15 15:50:29 --> Router Class Initialized
DEBUG - 2013-11-15 15:50:29 --> Output Class Initialized
DEBUG - 2013-11-15 15:50:29 --> Security Class Initialized
DEBUG - 2013-11-15 15:50:29 --> Input Class Initialized
DEBUG - 2013-11-15 15:50:29 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:50:29 --> Language Class Initialized
DEBUG - 2013-11-15 15:50:29 --> Loader Class Initialized
DEBUG - 2013-11-15 15:50:29 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:50:29 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:50:29 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:50:29 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:50:29 --> Session Class Initialized
DEBUG - 2013-11-15 15:50:29 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:50:29 --> Session routines successfully run
DEBUG - 2013-11-15 15:50:29 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:50:29 --> Controller Class Initialized
DEBUG - 2013-11-15 15:50:29 --> Model Class Initialized
DEBUG - 2013-11-15 15:50:29 --> Model Class Initialized
DEBUG - 2013-11-15 15:50:29 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:50:29 --> after session initialization................
INFO  - 2013-11-15 15:50:29 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 15:50:29 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 15:50:29 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 15:50:29 --> inside retrieving locations 
INFO  - 2013-11-15 15:50:29 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 15:50:29 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 15:50:29 --> Final output sent to browser
DEBUG - 2013-11-15 15:50:29 --> Total execution time: 0.0468
DEBUG - 2013-11-15 15:50:36 --> Config Class Initialized
DEBUG - 2013-11-15 15:50:36 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:50:36 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:50:36 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:50:36 --> URI Class Initialized
DEBUG - 2013-11-15 15:50:36 --> Router Class Initialized
DEBUG - 2013-11-15 15:50:36 --> Output Class Initialized
DEBUG - 2013-11-15 15:50:36 --> Security Class Initialized
DEBUG - 2013-11-15 15:50:36 --> Input Class Initialized
DEBUG - 2013-11-15 15:50:36 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:50:36 --> Language Class Initialized
DEBUG - 2013-11-15 15:50:36 --> Loader Class Initialized
DEBUG - 2013-11-15 15:50:36 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:50:36 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:50:36 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:50:36 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:50:36 --> Session Class Initialized
DEBUG - 2013-11-15 15:50:36 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:50:36 --> Session routines successfully run
DEBUG - 2013-11-15 15:50:36 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:50:36 --> Controller Class Initialized
DEBUG - 2013-11-15 15:50:36 --> Model Class Initialized
DEBUG - 2013-11-15 15:50:36 --> Model Class Initialized
DEBUG - 2013-11-15 15:50:36 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:50:36 --> after session initialization................
INFO  - 2013-11-15 15:50:36 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 15:50:36 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 15:50:36 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 15:50:36 --> inside retrieving locations 
INFO  - 2013-11-15 15:50:36 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 15:50:36 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 15:50:36 --> Final output sent to browser
DEBUG - 2013-11-15 15:50:36 --> Total execution time: 0.0468
DEBUG - 2013-11-15 15:51:17 --> Config Class Initialized
DEBUG - 2013-11-15 15:51:17 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:51:17 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:51:17 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:51:17 --> URI Class Initialized
DEBUG - 2013-11-15 15:51:17 --> Router Class Initialized
DEBUG - 2013-11-15 15:51:17 --> Output Class Initialized
DEBUG - 2013-11-15 15:51:17 --> Security Class Initialized
DEBUG - 2013-11-15 15:51:17 --> Input Class Initialized
DEBUG - 2013-11-15 15:51:17 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:51:17 --> Language Class Initialized
DEBUG - 2013-11-15 15:51:17 --> Loader Class Initialized
DEBUG - 2013-11-15 15:51:17 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:51:17 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:51:17 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:51:17 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:51:17 --> Session Class Initialized
DEBUG - 2013-11-15 15:51:17 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:51:17 --> Session routines successfully run
DEBUG - 2013-11-15 15:51:17 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:51:17 --> Controller Class Initialized
DEBUG - 2013-11-15 15:51:17 --> Model Class Initialized
DEBUG - 2013-11-15 15:51:17 --> Model Class Initialized
DEBUG - 2013-11-15 15:51:17 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:51:17 --> after session initialization................
INFO  - 2013-11-15 15:51:17 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 15:51:17 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 15:51:17 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 15:51:17 --> inside retrieving locations 
INFO  - 2013-11-15 15:51:17 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 15:51:17 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 15:51:17 --> Final output sent to browser
DEBUG - 2013-11-15 15:51:17 --> Total execution time: 0.0468
DEBUG - 2013-11-15 15:51:34 --> Config Class Initialized
DEBUG - 2013-11-15 15:51:34 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:51:34 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:51:34 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:51:34 --> URI Class Initialized
DEBUG - 2013-11-15 15:51:34 --> Router Class Initialized
DEBUG - 2013-11-15 15:51:34 --> Output Class Initialized
DEBUG - 2013-11-15 15:51:34 --> Security Class Initialized
DEBUG - 2013-11-15 15:51:34 --> Input Class Initialized
DEBUG - 2013-11-15 15:51:34 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:51:34 --> Language Class Initialized
DEBUG - 2013-11-15 15:51:34 --> Loader Class Initialized
DEBUG - 2013-11-15 15:51:34 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:51:34 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:51:34 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:51:34 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:51:34 --> Session Class Initialized
DEBUG - 2013-11-15 15:51:34 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:51:34 --> Session routines successfully run
DEBUG - 2013-11-15 15:51:34 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:51:34 --> Controller Class Initialized
DEBUG - 2013-11-15 15:51:34 --> Model Class Initialized
DEBUG - 2013-11-15 15:51:34 --> Model Class Initialized
DEBUG - 2013-11-15 15:51:34 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:51:34 --> after session initialization................
INFO  - 2013-11-15 15:51:34 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 15:51:34 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 15:51:34 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 15:51:34 --> inside retrieving locations 
INFO  - 2013-11-15 15:51:34 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 15:51:34 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 15:51:34 --> Final output sent to browser
DEBUG - 2013-11-15 15:51:34 --> Total execution time: 0.0624
DEBUG - 2013-11-15 15:51:51 --> Config Class Initialized
DEBUG - 2013-11-15 15:51:51 --> Hooks Class Initialized
DEBUG - 2013-11-15 15:51:51 --> Utf8 Class Initialized
DEBUG - 2013-11-15 15:51:51 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 15:51:51 --> URI Class Initialized
DEBUG - 2013-11-15 15:51:51 --> Router Class Initialized
DEBUG - 2013-11-15 15:51:51 --> Output Class Initialized
DEBUG - 2013-11-15 15:51:51 --> Security Class Initialized
DEBUG - 2013-11-15 15:51:51 --> Input Class Initialized
DEBUG - 2013-11-15 15:51:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 15:51:51 --> Language Class Initialized
DEBUG - 2013-11-15 15:51:51 --> Loader Class Initialized
DEBUG - 2013-11-15 15:51:51 --> Helper loaded: form_helper
DEBUG - 2013-11-15 15:51:51 --> Helper loaded: url_helper
DEBUG - 2013-11-15 15:51:51 --> Helper loaded: html_helper
DEBUG - 2013-11-15 15:51:51 --> Database Driver Class Initialized
DEBUG - 2013-11-15 15:51:51 --> Session Class Initialized
DEBUG - 2013-11-15 15:51:51 --> Helper loaded: string_helper
DEBUG - 2013-11-15 15:51:51 --> Session routines successfully run
DEBUG - 2013-11-15 15:51:51 --> Form Validation Class Initialized
DEBUG - 2013-11-15 15:51:51 --> Controller Class Initialized
DEBUG - 2013-11-15 15:51:51 --> Model Class Initialized
DEBUG - 2013-11-15 15:51:51 --> Model Class Initialized
DEBUG - 2013-11-15 15:51:51 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 15:51:51 --> after session initialization................
INFO  - 2013-11-15 15:51:51 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 15:51:51 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 15:51:51 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 15:51:51 --> inside retrieving locations 
INFO  - 2013-11-15 15:51:51 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 15:51:51 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 15:51:51 --> Final output sent to browser
DEBUG - 2013-11-15 15:51:51 --> Total execution time: 0.0468
DEBUG - 2013-11-15 16:08:04 --> Config Class Initialized
DEBUG - 2013-11-15 16:08:04 --> Hooks Class Initialized
DEBUG - 2013-11-15 16:08:04 --> Utf8 Class Initialized
DEBUG - 2013-11-15 16:08:04 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 16:08:04 --> URI Class Initialized
DEBUG - 2013-11-15 16:08:04 --> Router Class Initialized
DEBUG - 2013-11-15 16:08:04 --> Output Class Initialized
DEBUG - 2013-11-15 16:08:04 --> Security Class Initialized
DEBUG - 2013-11-15 16:08:04 --> Input Class Initialized
DEBUG - 2013-11-15 16:08:04 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 16:08:04 --> Language Class Initialized
DEBUG - 2013-11-15 16:08:04 --> Loader Class Initialized
DEBUG - 2013-11-15 16:08:04 --> Helper loaded: form_helper
DEBUG - 2013-11-15 16:08:04 --> Helper loaded: url_helper
DEBUG - 2013-11-15 16:08:04 --> Helper loaded: html_helper
DEBUG - 2013-11-15 16:08:04 --> Database Driver Class Initialized
DEBUG - 2013-11-15 16:08:04 --> Session Class Initialized
DEBUG - 2013-11-15 16:08:04 --> Helper loaded: string_helper
DEBUG - 2013-11-15 16:08:04 --> Session routines successfully run
DEBUG - 2013-11-15 16:08:04 --> Form Validation Class Initialized
DEBUG - 2013-11-15 16:08:04 --> Controller Class Initialized
DEBUG - 2013-11-15 16:08:04 --> Model Class Initialized
DEBUG - 2013-11-15 16:08:04 --> Model Class Initialized
DEBUG - 2013-11-15 16:08:04 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 16:08:04 --> after session initialization................
INFO  - 2013-11-15 16:08:04 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>3
INFO  - 2013-11-15 16:08:04 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` =  '3'
DEBUG - 2013-11-15 16:08:04 --> Final output sent to browser
DEBUG - 2013-11-15 16:08:04 --> Total execution time: 0.0430
DEBUG - 2013-11-15 16:11:47 --> Config Class Initialized
DEBUG - 2013-11-15 16:11:47 --> Hooks Class Initialized
DEBUG - 2013-11-15 16:11:47 --> Utf8 Class Initialized
DEBUG - 2013-11-15 16:11:47 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 16:11:47 --> URI Class Initialized
DEBUG - 2013-11-15 16:11:47 --> Router Class Initialized
DEBUG - 2013-11-15 16:11:47 --> Output Class Initialized
DEBUG - 2013-11-15 16:11:47 --> Security Class Initialized
DEBUG - 2013-11-15 16:11:47 --> Input Class Initialized
DEBUG - 2013-11-15 16:11:47 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 16:11:47 --> Language Class Initialized
DEBUG - 2013-11-15 16:11:47 --> Loader Class Initialized
DEBUG - 2013-11-15 16:11:47 --> Helper loaded: form_helper
DEBUG - 2013-11-15 16:11:47 --> Helper loaded: url_helper
DEBUG - 2013-11-15 16:11:47 --> Helper loaded: html_helper
DEBUG - 2013-11-15 16:11:47 --> Database Driver Class Initialized
DEBUG - 2013-11-15 16:11:47 --> Session Class Initialized
DEBUG - 2013-11-15 16:11:47 --> Helper loaded: string_helper
DEBUG - 2013-11-15 16:11:47 --> Session routines successfully run
DEBUG - 2013-11-15 16:11:47 --> Form Validation Class Initialized
DEBUG - 2013-11-15 16:11:47 --> Controller Class Initialized
DEBUG - 2013-11-15 16:11:47 --> Model Class Initialized
DEBUG - 2013-11-15 16:11:47 --> Model Class Initialized
DEBUG - 2013-11-15 16:11:47 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 16:11:47 --> after session initialization................
INFO  - 2013-11-15 16:11:47 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 16:11:47 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 16:11:47 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 16:11:47 --> inside retrieving locations 
INFO  - 2013-11-15 16:11:47 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 16:11:47 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 16:11:47 --> Final output sent to browser
DEBUG - 2013-11-15 16:11:47 --> Total execution time: 0.0468
DEBUG - 2013-11-15 16:11:49 --> Config Class Initialized
DEBUG - 2013-11-15 16:11:49 --> Hooks Class Initialized
DEBUG - 2013-11-15 16:11:49 --> Utf8 Class Initialized
DEBUG - 2013-11-15 16:11:49 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 16:11:49 --> URI Class Initialized
DEBUG - 2013-11-15 16:11:49 --> Router Class Initialized
DEBUG - 2013-11-15 16:11:49 --> Output Class Initialized
DEBUG - 2013-11-15 16:11:49 --> Security Class Initialized
DEBUG - 2013-11-15 16:11:49 --> Input Class Initialized
DEBUG - 2013-11-15 16:11:49 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 16:11:49 --> Language Class Initialized
DEBUG - 2013-11-15 16:11:49 --> Loader Class Initialized
DEBUG - 2013-11-15 16:11:49 --> Helper loaded: form_helper
DEBUG - 2013-11-15 16:11:49 --> Helper loaded: url_helper
DEBUG - 2013-11-15 16:11:49 --> Helper loaded: html_helper
DEBUG - 2013-11-15 16:11:49 --> Database Driver Class Initialized
DEBUG - 2013-11-15 16:11:49 --> Session Class Initialized
DEBUG - 2013-11-15 16:11:49 --> Helper loaded: string_helper
DEBUG - 2013-11-15 16:11:49 --> Session routines successfully run
DEBUG - 2013-11-15 16:11:49 --> Form Validation Class Initialized
DEBUG - 2013-11-15 16:11:49 --> Controller Class Initialized
DEBUG - 2013-11-15 16:11:49 --> Model Class Initialized
DEBUG - 2013-11-15 16:11:49 --> Model Class Initialized
DEBUG - 2013-11-15 16:11:49 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 16:11:49 --> after session initialization................
INFO  - 2013-11-15 16:11:49 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 16:11:49 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 16:11:49 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 16:11:49 --> inside retrieving locations 
INFO  - 2013-11-15 16:11:49 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 16:11:49 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 16:11:49 --> Final output sent to browser
DEBUG - 2013-11-15 16:11:49 --> Total execution time: 0.0468
DEBUG - 2013-11-15 16:12:19 --> Config Class Initialized
DEBUG - 2013-11-15 16:12:19 --> Hooks Class Initialized
DEBUG - 2013-11-15 16:12:19 --> Utf8 Class Initialized
DEBUG - 2013-11-15 16:12:19 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 16:12:19 --> URI Class Initialized
DEBUG - 2013-11-15 16:12:19 --> Router Class Initialized
DEBUG - 2013-11-15 16:12:19 --> Output Class Initialized
DEBUG - 2013-11-15 16:12:19 --> Security Class Initialized
DEBUG - 2013-11-15 16:12:19 --> Input Class Initialized
DEBUG - 2013-11-15 16:12:19 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 16:12:19 --> Language Class Initialized
DEBUG - 2013-11-15 16:12:19 --> Loader Class Initialized
DEBUG - 2013-11-15 16:12:19 --> Helper loaded: form_helper
DEBUG - 2013-11-15 16:12:19 --> Helper loaded: url_helper
DEBUG - 2013-11-15 16:12:19 --> Helper loaded: html_helper
DEBUG - 2013-11-15 16:12:19 --> Database Driver Class Initialized
DEBUG - 2013-11-15 16:12:19 --> Session Class Initialized
DEBUG - 2013-11-15 16:12:19 --> Helper loaded: string_helper
DEBUG - 2013-11-15 16:12:19 --> Session routines successfully run
DEBUG - 2013-11-15 16:12:19 --> Form Validation Class Initialized
DEBUG - 2013-11-15 16:12:19 --> Controller Class Initialized
DEBUG - 2013-11-15 16:12:19 --> Model Class Initialized
DEBUG - 2013-11-15 16:12:19 --> Model Class Initialized
DEBUG - 2013-11-15 16:12:19 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 16:12:19 --> after session initialization................
INFO  - 2013-11-15 16:12:19 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 16:12:19 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 16:12:19 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 16:12:19 --> inside retrieving locations 
INFO  - 2013-11-15 16:12:19 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 16:12:19 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 16:12:19 --> Final output sent to browser
DEBUG - 2013-11-15 16:12:19 --> Total execution time: 0.0624
DEBUG - 2013-11-15 16:13:28 --> Config Class Initialized
DEBUG - 2013-11-15 16:13:28 --> Hooks Class Initialized
DEBUG - 2013-11-15 16:13:28 --> Utf8 Class Initialized
DEBUG - 2013-11-15 16:13:28 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 16:13:28 --> URI Class Initialized
DEBUG - 2013-11-15 16:13:28 --> Router Class Initialized
DEBUG - 2013-11-15 16:13:28 --> Output Class Initialized
DEBUG - 2013-11-15 16:13:28 --> Security Class Initialized
DEBUG - 2013-11-15 16:13:28 --> Input Class Initialized
DEBUG - 2013-11-15 16:13:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 16:13:28 --> Language Class Initialized
DEBUG - 2013-11-15 16:13:28 --> Loader Class Initialized
DEBUG - 2013-11-15 16:13:28 --> Helper loaded: form_helper
DEBUG - 2013-11-15 16:13:28 --> Helper loaded: url_helper
DEBUG - 2013-11-15 16:13:28 --> Helper loaded: html_helper
DEBUG - 2013-11-15 16:13:28 --> Database Driver Class Initialized
DEBUG - 2013-11-15 16:13:28 --> Session Class Initialized
DEBUG - 2013-11-15 16:13:28 --> Helper loaded: string_helper
DEBUG - 2013-11-15 16:13:28 --> Session routines successfully run
DEBUG - 2013-11-15 16:13:28 --> Form Validation Class Initialized
DEBUG - 2013-11-15 16:13:28 --> Controller Class Initialized
DEBUG - 2013-11-15 16:13:28 --> Model Class Initialized
DEBUG - 2013-11-15 16:13:28 --> Model Class Initialized
DEBUG - 2013-11-15 16:13:28 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 16:13:28 --> after session initialization................
DEBUG - 2013-11-15 16:13:28 --> Config Class Initialized
DEBUG - 2013-11-15 16:13:28 --> Hooks Class Initialized
DEBUG - 2013-11-15 16:13:28 --> Utf8 Class Initialized
DEBUG - 2013-11-15 16:13:28 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 16:13:28 --> URI Class Initialized
DEBUG - 2013-11-15 16:13:28 --> Router Class Initialized
DEBUG - 2013-11-15 16:13:28 --> No URI present. Default controller set.
DEBUG - 2013-11-15 16:13:28 --> Output Class Initialized
DEBUG - 2013-11-15 16:13:28 --> Security Class Initialized
DEBUG - 2013-11-15 16:13:28 --> Input Class Initialized
DEBUG - 2013-11-15 16:13:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 16:13:28 --> Language Class Initialized
DEBUG - 2013-11-15 16:13:28 --> Loader Class Initialized
DEBUG - 2013-11-15 16:13:28 --> Helper loaded: form_helper
DEBUG - 2013-11-15 16:13:28 --> Helper loaded: url_helper
DEBUG - 2013-11-15 16:13:28 --> Helper loaded: html_helper
DEBUG - 2013-11-15 16:13:28 --> Database Driver Class Initialized
DEBUG - 2013-11-15 16:13:28 --> Session Class Initialized
DEBUG - 2013-11-15 16:13:28 --> Helper loaded: string_helper
DEBUG - 2013-11-15 16:13:28 --> A session cookie was not found.
DEBUG - 2013-11-15 16:13:28 --> Session routines successfully run
DEBUG - 2013-11-15 16:13:28 --> Form Validation Class Initialized
DEBUG - 2013-11-15 16:13:28 --> Controller Class Initialized
INFO  - 2013-11-15 16:13:28 --> the form message==>
INFO  - 2013-11-15 16:13:28 --> The session id is ========>bc5561dbaf27154f3bf88a2ba0afbca2 and the member id is =======>
INFO  - 2013-11-15 16:13:28 --> after the retrieving session list.................//////////
DEBUG - 2013-11-15 16:13:28 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-11-15 16:13:28 --> Final output sent to browser
DEBUG - 2013-11-15 16:13:28 --> Total execution time: 0.0468
DEBUG - 2013-11-15 16:13:29 --> Config Class Initialized
DEBUG - 2013-11-15 16:13:29 --> Hooks Class Initialized
DEBUG - 2013-11-15 16:13:29 --> Utf8 Class Initialized
DEBUG - 2013-11-15 16:13:29 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 16:13:29 --> URI Class Initialized
DEBUG - 2013-11-15 16:13:29 --> Router Class Initialized
DEBUG - 2013-11-15 16:13:29 --> Output Class Initialized
DEBUG - 2013-11-15 16:13:29 --> Security Class Initialized
DEBUG - 2013-11-15 16:13:29 --> Input Class Initialized
DEBUG - 2013-11-15 16:13:29 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 16:13:29 --> Language Class Initialized
DEBUG - 2013-11-15 16:13:29 --> Loader Class Initialized
DEBUG - 2013-11-15 16:13:29 --> Helper loaded: form_helper
DEBUG - 2013-11-15 16:13:29 --> Helper loaded: url_helper
DEBUG - 2013-11-15 16:13:29 --> Helper loaded: html_helper
DEBUG - 2013-11-15 16:13:29 --> Database Driver Class Initialized
DEBUG - 2013-11-15 16:13:29 --> Session Class Initialized
DEBUG - 2013-11-15 16:13:29 --> Helper loaded: string_helper
DEBUG - 2013-11-15 16:13:29 --> Session routines successfully run
DEBUG - 2013-11-15 16:13:29 --> Form Validation Class Initialized
DEBUG - 2013-11-15 16:13:29 --> Controller Class Initialized
DEBUG - 2013-11-15 16:13:29 --> Model Class Initialized
DEBUG - 2013-11-15 16:13:29 --> Model Class Initialized
DEBUG - 2013-11-15 16:13:29 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 16:13:29 --> after session initialization................
INFO  - 2013-11-15 16:13:29 --> after rays has been clicked.................
INFO  - 2013-11-15 16:13:29 --> last article id is 0
INFO  - 2013-11-15 16:13:29 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 16:13:29 --> 1 the guest only data>>>>>
INFO  - 2013-11-15 16:13:29 --> 1 the guest only data>> AFTER >>>
INFO  - 2013-11-15 16:13:29 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 16:13:29 --> 0 the guest only data>>>>>
INFO  - 2013-11-15 16:13:29 --> 0 the guest only data>> AFTER >>>#111
INFO  - 2013-11-15 16:13:29 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 16:13:29 --> 0 the guest only data>>>>>#111
INFO  - 2013-11-15 16:13:29 --> 0 the guest only data>> AFTER >>>#110
INFO  - 2013-11-15 16:13:29 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 16:13:29 --> 0 the guest only data>>>>>#110
INFO  - 2013-11-15 16:13:29 --> 0 the guest only data>> AFTER >>>#109
INFO  - 2013-11-15 16:13:29 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 16:13:29 --> 0 the guest only data>>>>>#109
INFO  - 2013-11-15 16:13:29 --> 0 the guest only data>> AFTER >>>#108
INFO  - 2013-11-15 16:13:29 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 16:13:29 --> 0 the guest only data>>>>>#108
INFO  - 2013-11-15 16:13:29 --> 0 the guest only data>> AFTER >>>#107
INFO  - 2013-11-15 16:13:29 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 16:13:29 --> 1 the guest only data>>>>>#107
INFO  - 2013-11-15 16:13:29 --> 1 the guest only data>> AFTER >>>#107
INFO  - 2013-11-15 16:13:29 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 16:13:29 --> 0 the guest only data>>>>>#107
INFO  - 2013-11-15 16:13:29 --> 0 the guest only data>> AFTER >>>#105
INFO  - 2013-11-15 16:13:29 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 16:13:29 --> 0 the guest only data>>>>>#105
INFO  - 2013-11-15 16:13:29 --> 0 the guest only data>> AFTER >>>#104
INFO  - 2013-11-15 16:13:29 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 16:13:29 --> 0 the guest only data>>>>>#104
INFO  - 2013-11-15 16:13:29 --> 0 the guest only data>> AFTER >>>#103
INFO  - 2013-11-15 16:13:29 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 16:13:29 --> 0 the guest only data>>>>>#103
INFO  - 2013-11-15 16:13:29 --> 0 the guest only data>> AFTER >>>#102
INFO  - 2013-11-15 16:13:29 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 16:13:29 --> 0 the guest only data>>>>>#102
INFO  - 2013-11-15 16:13:29 --> 0 the guest only data>> AFTER >>>#101
INFO  - 2013-11-15 16:13:29 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 16:13:29 --> 0 the guest only data>>>>>#101
INFO  - 2013-11-15 16:13:29 --> 0 the guest only data>> AFTER >>>#100
INFO  - 2013-11-15 16:13:29 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 16:13:29 --> 0 the guest only data>>>>>#100
INFO  - 2013-11-15 16:13:29 --> 0 the guest only data>> AFTER >>>#99
INFO  - 2013-11-15 16:13:29 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 16:13:29 --> 0 the guest only data>>>>>#99
INFO  - 2013-11-15 16:13:29 --> 0 the guest only data>> AFTER >>>#98
INFO  - 2013-11-15 16:13:29 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 16:13:29 --> 0 the guest only data>>>>>#98
INFO  - 2013-11-15 16:13:29 --> 0 the guest only data>> AFTER >>>#97
INFO  - 2013-11-15 16:13:29 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 16:13:29 --> 1 the guest only data>>>>>#97
INFO  - 2013-11-15 16:13:29 --> 1 the guest only data>> AFTER >>>#97
INFO  - 2013-11-15 16:13:29 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 16:13:29 --> 0 the guest only data>>>>>#97
INFO  - 2013-11-15 16:13:29 --> 0 the guest only data>> AFTER >>>#95
INFO  - 2013-11-15 16:13:29 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 16:13:29 --> 0 the guest only data>>>>>#95
INFO  - 2013-11-15 16:13:29 --> 0 the guest only data>> AFTER >>>#94
INFO  - 2013-11-15 16:13:29 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 16:13:29 --> 1 the guest only data>>>>>#94
INFO  - 2013-11-15 16:13:29 --> 1 the guest only data>> AFTER >>>#94
DEBUG - 2013-11-15 16:13:29 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-11-15 16:13:29 --> Final output sent to browser
DEBUG - 2013-11-15 16:13:29 --> Total execution time: 0.0780
DEBUG - 2013-11-15 16:13:30 --> Config Class Initialized
DEBUG - 2013-11-15 16:13:30 --> Hooks Class Initialized
DEBUG - 2013-11-15 16:13:30 --> Utf8 Class Initialized
DEBUG - 2013-11-15 16:13:30 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 16:13:30 --> URI Class Initialized
DEBUG - 2013-11-15 16:13:30 --> Router Class Initialized
DEBUG - 2013-11-15 16:13:30 --> Output Class Initialized
DEBUG - 2013-11-15 16:13:30 --> Security Class Initialized
DEBUG - 2013-11-15 16:13:30 --> Input Class Initialized
DEBUG - 2013-11-15 16:13:30 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 16:13:30 --> Language Class Initialized
DEBUG - 2013-11-15 16:13:30 --> Loader Class Initialized
DEBUG - 2013-11-15 16:13:30 --> Helper loaded: form_helper
DEBUG - 2013-11-15 16:13:30 --> Helper loaded: url_helper
DEBUG - 2013-11-15 16:13:30 --> Helper loaded: html_helper
DEBUG - 2013-11-15 16:13:30 --> Database Driver Class Initialized
DEBUG - 2013-11-15 16:13:30 --> Session Class Initialized
DEBUG - 2013-11-15 16:13:30 --> Helper loaded: string_helper
DEBUG - 2013-11-15 16:13:30 --> Session routines successfully run
DEBUG - 2013-11-15 16:13:30 --> Form Validation Class Initialized
DEBUG - 2013-11-15 16:13:30 --> Controller Class Initialized
DEBUG - 2013-11-15 16:13:30 --> Model Class Initialized
DEBUG - 2013-11-15 16:13:30 --> Model Class Initialized
DEBUG - 2013-11-15 16:13:30 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 16:13:30 --> after session initialization................
INFO  - 2013-11-15 16:13:30 --> last article id is 93
DEBUG - 2013-11-15 16:13:30 --> Final output sent to browser
DEBUG - 2013-11-15 16:13:30 --> Total execution time: 0.0468
DEBUG - 2013-11-15 16:13:31 --> Config Class Initialized
DEBUG - 2013-11-15 16:13:31 --> Hooks Class Initialized
DEBUG - 2013-11-15 16:13:31 --> Utf8 Class Initialized
DEBUG - 2013-11-15 16:13:31 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 16:13:31 --> URI Class Initialized
DEBUG - 2013-11-15 16:13:31 --> Router Class Initialized
DEBUG - 2013-11-15 16:13:31 --> Output Class Initialized
DEBUG - 2013-11-15 16:13:31 --> Security Class Initialized
DEBUG - 2013-11-15 16:13:31 --> Input Class Initialized
DEBUG - 2013-11-15 16:13:31 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 16:13:31 --> Language Class Initialized
DEBUG - 2013-11-15 16:13:31 --> Loader Class Initialized
DEBUG - 2013-11-15 16:13:31 --> Helper loaded: form_helper
DEBUG - 2013-11-15 16:13:31 --> Helper loaded: url_helper
DEBUG - 2013-11-15 16:13:31 --> Helper loaded: html_helper
DEBUG - 2013-11-15 16:13:31 --> Database Driver Class Initialized
DEBUG - 2013-11-15 16:13:31 --> Session Class Initialized
DEBUG - 2013-11-15 16:13:31 --> Helper loaded: string_helper
DEBUG - 2013-11-15 16:13:31 --> Session routines successfully run
DEBUG - 2013-11-15 16:13:31 --> Form Validation Class Initialized
DEBUG - 2013-11-15 16:13:31 --> Controller Class Initialized
DEBUG - 2013-11-15 16:13:31 --> Model Class Initialized
DEBUG - 2013-11-15 16:13:31 --> Model Class Initialized
DEBUG - 2013-11-15 16:13:31 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 16:13:31 --> after session initialization................
INFO  - 2013-11-15 16:13:31 --> last article id is 83
DEBUG - 2013-11-15 16:13:31 --> Final output sent to browser
DEBUG - 2013-11-15 16:13:31 --> Total execution time: 0.0468
DEBUG - 2013-11-15 16:13:31 --> Config Class Initialized
DEBUG - 2013-11-15 16:13:31 --> Hooks Class Initialized
DEBUG - 2013-11-15 16:13:31 --> Utf8 Class Initialized
DEBUG - 2013-11-15 16:13:31 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 16:13:31 --> URI Class Initialized
DEBUG - 2013-11-15 16:13:31 --> Router Class Initialized
DEBUG - 2013-11-15 16:13:31 --> Output Class Initialized
DEBUG - 2013-11-15 16:13:31 --> Security Class Initialized
DEBUG - 2013-11-15 16:13:31 --> Input Class Initialized
DEBUG - 2013-11-15 16:13:31 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 16:13:31 --> Language Class Initialized
DEBUG - 2013-11-15 16:13:31 --> Loader Class Initialized
DEBUG - 2013-11-15 16:13:31 --> Helper loaded: form_helper
DEBUG - 2013-11-15 16:13:31 --> Helper loaded: url_helper
DEBUG - 2013-11-15 16:13:31 --> Helper loaded: html_helper
DEBUG - 2013-11-15 16:13:31 --> Database Driver Class Initialized
DEBUG - 2013-11-15 16:13:31 --> Session Class Initialized
DEBUG - 2013-11-15 16:13:31 --> Helper loaded: string_helper
DEBUG - 2013-11-15 16:13:31 --> Session routines successfully run
DEBUG - 2013-11-15 16:13:31 --> Form Validation Class Initialized
DEBUG - 2013-11-15 16:13:31 --> Controller Class Initialized
DEBUG - 2013-11-15 16:13:31 --> Model Class Initialized
DEBUG - 2013-11-15 16:13:31 --> Model Class Initialized
DEBUG - 2013-11-15 16:13:31 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 16:13:31 --> after session initialization................
INFO  - 2013-11-15 16:13:31 --> last article id is 73
DEBUG - 2013-11-15 16:13:31 --> Final output sent to browser
DEBUG - 2013-11-15 16:13:31 --> Total execution time: 0.0468
DEBUG - 2013-11-15 16:13:32 --> Config Class Initialized
DEBUG - 2013-11-15 16:13:32 --> Hooks Class Initialized
DEBUG - 2013-11-15 16:13:32 --> Utf8 Class Initialized
DEBUG - 2013-11-15 16:13:32 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 16:13:32 --> URI Class Initialized
DEBUG - 2013-11-15 16:13:32 --> Router Class Initialized
DEBUG - 2013-11-15 16:13:32 --> Output Class Initialized
DEBUG - 2013-11-15 16:13:32 --> Security Class Initialized
DEBUG - 2013-11-15 16:13:32 --> Input Class Initialized
DEBUG - 2013-11-15 16:13:32 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 16:13:32 --> Language Class Initialized
DEBUG - 2013-11-15 16:13:32 --> Loader Class Initialized
DEBUG - 2013-11-15 16:13:32 --> Helper loaded: form_helper
DEBUG - 2013-11-15 16:13:32 --> Helper loaded: url_helper
DEBUG - 2013-11-15 16:13:32 --> Helper loaded: html_helper
DEBUG - 2013-11-15 16:13:32 --> Database Driver Class Initialized
DEBUG - 2013-11-15 16:13:32 --> Session Class Initialized
DEBUG - 2013-11-15 16:13:32 --> Helper loaded: string_helper
DEBUG - 2013-11-15 16:13:32 --> Session routines successfully run
DEBUG - 2013-11-15 16:13:32 --> Form Validation Class Initialized
DEBUG - 2013-11-15 16:13:32 --> Controller Class Initialized
DEBUG - 2013-11-15 16:13:32 --> Model Class Initialized
DEBUG - 2013-11-15 16:13:32 --> Model Class Initialized
DEBUG - 2013-11-15 16:13:32 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 16:13:32 --> after session initialization................
INFO  - 2013-11-15 16:13:32 --> last article id is 62
DEBUG - 2013-11-15 16:13:32 --> Final output sent to browser
DEBUG - 2013-11-15 16:13:32 --> Total execution time: 0.0624
DEBUG - 2013-11-15 16:13:32 --> Config Class Initialized
DEBUG - 2013-11-15 16:13:32 --> Hooks Class Initialized
DEBUG - 2013-11-15 16:13:32 --> Utf8 Class Initialized
DEBUG - 2013-11-15 16:13:32 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 16:13:32 --> URI Class Initialized
DEBUG - 2013-11-15 16:13:32 --> Router Class Initialized
DEBUG - 2013-11-15 16:13:32 --> Output Class Initialized
DEBUG - 2013-11-15 16:13:32 --> Security Class Initialized
DEBUG - 2013-11-15 16:13:32 --> Input Class Initialized
DEBUG - 2013-11-15 16:13:32 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 16:13:32 --> Language Class Initialized
DEBUG - 2013-11-15 16:13:32 --> Loader Class Initialized
DEBUG - 2013-11-15 16:13:32 --> Helper loaded: form_helper
DEBUG - 2013-11-15 16:13:32 --> Helper loaded: url_helper
DEBUG - 2013-11-15 16:13:32 --> Helper loaded: html_helper
DEBUG - 2013-11-15 16:13:32 --> Database Driver Class Initialized
DEBUG - 2013-11-15 16:13:32 --> Session Class Initialized
DEBUG - 2013-11-15 16:13:32 --> Helper loaded: string_helper
DEBUG - 2013-11-15 16:13:32 --> Session routines successfully run
DEBUG - 2013-11-15 16:13:32 --> Form Validation Class Initialized
DEBUG - 2013-11-15 16:13:32 --> Controller Class Initialized
DEBUG - 2013-11-15 16:13:32 --> Model Class Initialized
DEBUG - 2013-11-15 16:13:32 --> Model Class Initialized
DEBUG - 2013-11-15 16:13:32 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 16:13:32 --> after session initialization................
INFO  - 2013-11-15 16:13:32 --> last article id is 52
DEBUG - 2013-11-15 16:13:32 --> Final output sent to browser
DEBUG - 2013-11-15 16:13:32 --> Total execution time: 0.0468
DEBUG - 2013-11-15 16:13:36 --> Config Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Hooks Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Utf8 Class Initialized
DEBUG - 2013-11-15 16:13:36 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 16:13:36 --> URI Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Router Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Output Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Security Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Input Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 16:13:36 --> Language Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Loader Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Helper loaded: form_helper
DEBUG - 2013-11-15 16:13:36 --> Helper loaded: url_helper
DEBUG - 2013-11-15 16:13:36 --> Helper loaded: html_helper
DEBUG - 2013-11-15 16:13:36 --> Database Driver Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Session Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Helper loaded: string_helper
DEBUG - 2013-11-15 16:13:36 --> Session routines successfully run
DEBUG - 2013-11-15 16:13:36 --> Form Validation Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Controller Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Model Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Model Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 16:13:36 --> after session initialization................
INFO  - 2013-11-15 16:13:36 --> last article id is 42
DEBUG - 2013-11-15 16:13:36 --> Final output sent to browser
DEBUG - 2013-11-15 16:13:36 --> Total execution time: 0.0468
DEBUG - 2013-11-15 16:13:36 --> Config Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Hooks Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Utf8 Class Initialized
DEBUG - 2013-11-15 16:13:36 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 16:13:36 --> URI Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Router Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Output Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Security Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Input Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 16:13:36 --> Language Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Loader Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Helper loaded: form_helper
DEBUG - 2013-11-15 16:13:36 --> Helper loaded: url_helper
DEBUG - 2013-11-15 16:13:36 --> Helper loaded: html_helper
DEBUG - 2013-11-15 16:13:36 --> Database Driver Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Session Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Helper loaded: string_helper
DEBUG - 2013-11-15 16:13:36 --> Session routines successfully run
DEBUG - 2013-11-15 16:13:36 --> Form Validation Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Controller Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Model Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Model Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 16:13:36 --> after session initialization................
INFO  - 2013-11-15 16:13:36 --> last article id is 32
DEBUG - 2013-11-15 16:13:36 --> Final output sent to browser
DEBUG - 2013-11-15 16:13:36 --> Total execution time: 0.0624
DEBUG - 2013-11-15 16:13:36 --> Config Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Hooks Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Utf8 Class Initialized
DEBUG - 2013-11-15 16:13:36 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 16:13:36 --> URI Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Router Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Output Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Security Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Input Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 16:13:36 --> Language Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Loader Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Helper loaded: form_helper
DEBUG - 2013-11-15 16:13:36 --> Helper loaded: url_helper
DEBUG - 2013-11-15 16:13:36 --> Helper loaded: html_helper
DEBUG - 2013-11-15 16:13:36 --> Database Driver Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Session Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Helper loaded: string_helper
DEBUG - 2013-11-15 16:13:36 --> Session routines successfully run
DEBUG - 2013-11-15 16:13:36 --> Form Validation Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Controller Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Model Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Model Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 16:13:36 --> after session initialization................
INFO  - 2013-11-15 16:13:36 --> last article id is 22
DEBUG - 2013-11-15 16:13:36 --> Final output sent to browser
DEBUG - 2013-11-15 16:13:36 --> Total execution time: 0.0468
DEBUG - 2013-11-15 16:13:36 --> Config Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Hooks Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Utf8 Class Initialized
DEBUG - 2013-11-15 16:13:36 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 16:13:36 --> URI Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Router Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Output Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Security Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Input Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 16:13:36 --> Language Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Loader Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Helper loaded: form_helper
DEBUG - 2013-11-15 16:13:36 --> Helper loaded: url_helper
DEBUG - 2013-11-15 16:13:36 --> Helper loaded: html_helper
DEBUG - 2013-11-15 16:13:36 --> Database Driver Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Session Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Helper loaded: string_helper
DEBUG - 2013-11-15 16:13:36 --> Session routines successfully run
DEBUG - 2013-11-15 16:13:36 --> Form Validation Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Controller Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Model Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Model Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 16:13:36 --> after session initialization................
INFO  - 2013-11-15 16:13:36 --> last article id is 12
DEBUG - 2013-11-15 16:13:36 --> Final output sent to browser
DEBUG - 2013-11-15 16:13:36 --> Total execution time: 0.0468
DEBUG - 2013-11-15 16:13:36 --> Config Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Hooks Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Utf8 Class Initialized
DEBUG - 2013-11-15 16:13:36 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 16:13:36 --> URI Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Router Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Output Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Security Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Input Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 16:13:36 --> Language Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Loader Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Helper loaded: form_helper
DEBUG - 2013-11-15 16:13:36 --> Helper loaded: url_helper
DEBUG - 2013-11-15 16:13:36 --> Helper loaded: html_helper
DEBUG - 2013-11-15 16:13:36 --> Database Driver Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Session Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Helper loaded: string_helper
DEBUG - 2013-11-15 16:13:36 --> Session routines successfully run
DEBUG - 2013-11-15 16:13:36 --> Form Validation Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Controller Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Model Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Model Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 16:13:36 --> after session initialization................
INFO  - 2013-11-15 16:13:36 --> last article id is 2
DEBUG - 2013-11-15 16:13:36 --> Final output sent to browser
DEBUG - 2013-11-15 16:13:36 --> Total execution time: 0.0468
DEBUG - 2013-11-15 16:13:36 --> Config Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Hooks Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Utf8 Class Initialized
DEBUG - 2013-11-15 16:13:36 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 16:13:36 --> URI Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Router Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Output Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Security Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Input Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 16:13:36 --> Language Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Loader Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Helper loaded: form_helper
DEBUG - 2013-11-15 16:13:36 --> Helper loaded: url_helper
DEBUG - 2013-11-15 16:13:36 --> Helper loaded: html_helper
DEBUG - 2013-11-15 16:13:36 --> Database Driver Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Session Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Helper loaded: string_helper
DEBUG - 2013-11-15 16:13:36 --> Session routines successfully run
DEBUG - 2013-11-15 16:13:36 --> Form Validation Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Controller Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Model Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Model Class Initialized
DEBUG - 2013-11-15 16:13:36 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 16:13:36 --> after session initialization................
INFO  - 2013-11-15 16:13:36 --> last article id is 1
DEBUG - 2013-11-15 16:13:36 --> Final output sent to browser
DEBUG - 2013-11-15 16:13:36 --> Total execution time: 0.0936
DEBUG - 2013-11-15 16:13:45 --> Config Class Initialized
DEBUG - 2013-11-15 16:13:45 --> Hooks Class Initialized
DEBUG - 2013-11-15 16:13:45 --> Utf8 Class Initialized
DEBUG - 2013-11-15 16:13:45 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 16:13:45 --> URI Class Initialized
DEBUG - 2013-11-15 16:13:45 --> Router Class Initialized
DEBUG - 2013-11-15 16:13:45 --> Output Class Initialized
DEBUG - 2013-11-15 16:13:45 --> Security Class Initialized
DEBUG - 2013-11-15 16:13:45 --> Input Class Initialized
DEBUG - 2013-11-15 16:13:45 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 16:13:45 --> Language Class Initialized
DEBUG - 2013-11-15 16:13:45 --> Loader Class Initialized
DEBUG - 2013-11-15 16:13:45 --> Helper loaded: form_helper
DEBUG - 2013-11-15 16:13:45 --> Helper loaded: url_helper
DEBUG - 2013-11-15 16:13:45 --> Helper loaded: html_helper
DEBUG - 2013-11-15 16:13:45 --> Database Driver Class Initialized
DEBUG - 2013-11-15 16:13:45 --> Session Class Initialized
DEBUG - 2013-11-15 16:13:45 --> Helper loaded: string_helper
DEBUG - 2013-11-15 16:13:45 --> Session routines successfully run
DEBUG - 2013-11-15 16:13:45 --> Form Validation Class Initialized
DEBUG - 2013-11-15 16:13:45 --> Controller Class Initialized
DEBUG - 2013-11-15 16:13:45 --> Model Class Initialized
DEBUG - 2013-11-15 16:13:45 --> Model Class Initialized
DEBUG - 2013-11-15 16:13:45 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 16:13:45 --> after session initialization................
INFO  - 2013-11-15 16:13:45 --> inside rays login auth.............sys_admin/user_authorization/redirecttorays
INFO  - 2013-11-15 16:13:45 --> inside rays login auth.............sys_admin/user_authorization/redirecttorays
DEBUG - 2013-11-15 16:13:45 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-11-15 16:13:45 --> XSS Filtering completed
DEBUG - 2013-11-15 16:13:45 --> XSS Filtering completed
INFO  - 2013-11-15 16:13:45 --> before getting the relation of member............6
INFO  - 2013-11-15 16:13:45 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-11-15 16:13:45 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-15 16:13:45 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-11-15 16:13:45 --> inside retrieving vacancy for member
INFO  - 2013-11-15 16:13:45 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-11-15 16:13:45 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-15 16:13:45 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-11-15 16:13:45 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-11-15 16:13:45 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-15 16:13:45 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-15 16:13:45 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-11-15 16:13:45 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-11-15 16:13:45 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-11-15 16:13:45 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-11-15 16:13:45 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-11-15 16:13:45 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-11-15 16:13:45 --> Final output sent to browser
DEBUG - 2013-11-15 16:13:45 --> Total execution time: 0.0936
DEBUG - 2013-11-15 16:13:45 --> Config Class Initialized
DEBUG - 2013-11-15 16:13:45 --> Hooks Class Initialized
DEBUG - 2013-11-15 16:13:45 --> Utf8 Class Initialized
DEBUG - 2013-11-15 16:13:45 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 16:13:45 --> URI Class Initialized
DEBUG - 2013-11-15 16:13:45 --> Router Class Initialized
DEBUG - 2013-11-15 16:13:45 --> Output Class Initialized
DEBUG - 2013-11-15 16:13:45 --> Security Class Initialized
DEBUG - 2013-11-15 16:13:45 --> Input Class Initialized
DEBUG - 2013-11-15 16:13:45 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 16:13:45 --> Language Class Initialized
DEBUG - 2013-11-15 16:13:45 --> Loader Class Initialized
DEBUG - 2013-11-15 16:13:45 --> Helper loaded: form_helper
DEBUG - 2013-11-15 16:13:45 --> Helper loaded: url_helper
DEBUG - 2013-11-15 16:13:45 --> Helper loaded: html_helper
DEBUG - 2013-11-15 16:13:45 --> Database Driver Class Initialized
DEBUG - 2013-11-15 16:13:45 --> Session Class Initialized
DEBUG - 2013-11-15 16:13:45 --> Helper loaded: string_helper
DEBUG - 2013-11-15 16:13:45 --> Session routines successfully run
DEBUG - 2013-11-15 16:13:45 --> Form Validation Class Initialized
DEBUG - 2013-11-15 16:13:45 --> Controller Class Initialized
DEBUG - 2013-11-15 16:13:45 --> Model Class Initialized
DEBUG - 2013-11-15 16:13:45 --> Model Class Initialized
DEBUG - 2013-11-15 16:13:45 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 16:13:45 --> after session initialization................
ERROR - 2013-11-15 16:13:45 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-15 16:13:45 --> Config Class Initialized
DEBUG - 2013-11-15 16:13:45 --> Hooks Class Initialized
DEBUG - 2013-11-15 16:13:45 --> Utf8 Class Initialized
DEBUG - 2013-11-15 16:13:45 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 16:13:45 --> URI Class Initialized
DEBUG - 2013-11-15 16:13:45 --> Router Class Initialized
ERROR - 2013-11-15 16:13:45 --> 404 Page Not Found --> css
DEBUG - 2013-11-15 16:13:46 --> Config Class Initialized
DEBUG - 2013-11-15 16:13:46 --> Hooks Class Initialized
DEBUG - 2013-11-15 16:13:46 --> Utf8 Class Initialized
DEBUG - 2013-11-15 16:13:46 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 16:13:46 --> URI Class Initialized
DEBUG - 2013-11-15 16:13:46 --> Router Class Initialized
DEBUG - 2013-11-15 16:13:46 --> Output Class Initialized
DEBUG - 2013-11-15 16:13:46 --> Security Class Initialized
DEBUG - 2013-11-15 16:13:46 --> Input Class Initialized
DEBUG - 2013-11-15 16:13:46 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 16:13:46 --> Language Class Initialized
DEBUG - 2013-11-15 16:13:46 --> Loader Class Initialized
DEBUG - 2013-11-15 16:13:46 --> Helper loaded: form_helper
DEBUG - 2013-11-15 16:13:46 --> Helper loaded: url_helper
DEBUG - 2013-11-15 16:13:46 --> Helper loaded: html_helper
DEBUG - 2013-11-15 16:13:46 --> Database Driver Class Initialized
DEBUG - 2013-11-15 16:13:46 --> Session Class Initialized
DEBUG - 2013-11-15 16:13:46 --> Helper loaded: string_helper
DEBUG - 2013-11-15 16:13:46 --> Session routines successfully run
DEBUG - 2013-11-15 16:13:46 --> Form Validation Class Initialized
DEBUG - 2013-11-15 16:13:46 --> Controller Class Initialized
DEBUG - 2013-11-15 16:13:46 --> Model Class Initialized
DEBUG - 2013-11-15 16:13:46 --> Model Class Initialized
DEBUG - 2013-11-15 16:13:46 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 16:13:46 --> after session initialization................
INFO  - 2013-11-15 16:13:46 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 16:13:46 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 16:13:46 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 16:13:46 --> inside retrieving locations 
INFO  - 2013-11-15 16:13:46 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 16:13:46 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 16:13:46 --> Final output sent to browser
DEBUG - 2013-11-15 16:13:46 --> Total execution time: 0.0468
DEBUG - 2013-11-15 16:14:28 --> Config Class Initialized
DEBUG - 2013-11-15 16:14:28 --> Hooks Class Initialized
DEBUG - 2013-11-15 16:14:28 --> Utf8 Class Initialized
DEBUG - 2013-11-15 16:14:28 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 16:14:28 --> URI Class Initialized
DEBUG - 2013-11-15 16:14:28 --> Router Class Initialized
DEBUG - 2013-11-15 16:14:28 --> Output Class Initialized
DEBUG - 2013-11-15 16:14:28 --> Security Class Initialized
DEBUG - 2013-11-15 16:14:28 --> Input Class Initialized
DEBUG - 2013-11-15 16:14:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 16:14:28 --> Language Class Initialized
DEBUG - 2013-11-15 16:14:28 --> Loader Class Initialized
DEBUG - 2013-11-15 16:14:28 --> Helper loaded: form_helper
DEBUG - 2013-11-15 16:14:28 --> Helper loaded: url_helper
DEBUG - 2013-11-15 16:14:28 --> Helper loaded: html_helper
DEBUG - 2013-11-15 16:14:28 --> Database Driver Class Initialized
DEBUG - 2013-11-15 16:14:28 --> Session Class Initialized
DEBUG - 2013-11-15 16:14:28 --> Helper loaded: string_helper
DEBUG - 2013-11-15 16:14:28 --> Session routines successfully run
DEBUG - 2013-11-15 16:14:28 --> Form Validation Class Initialized
DEBUG - 2013-11-15 16:14:28 --> Controller Class Initialized
DEBUG - 2013-11-15 16:14:28 --> Model Class Initialized
DEBUG - 2013-11-15 16:14:28 --> Model Class Initialized
DEBUG - 2013-11-15 16:14:28 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 16:14:28 --> after session initialization................
INFO  - 2013-11-15 16:14:28 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 16:14:28 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 16:14:28 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 16:14:28 --> inside retrieving locations 
INFO  - 2013-11-15 16:14:28 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 16:14:28 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 16:14:28 --> Final output sent to browser
DEBUG - 2013-11-15 16:14:28 --> Total execution time: 0.0624
DEBUG - 2013-11-15 16:14:30 --> Config Class Initialized
DEBUG - 2013-11-15 16:14:30 --> Hooks Class Initialized
DEBUG - 2013-11-15 16:14:30 --> Utf8 Class Initialized
DEBUG - 2013-11-15 16:14:30 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 16:14:30 --> URI Class Initialized
DEBUG - 2013-11-15 16:14:30 --> Router Class Initialized
DEBUG - 2013-11-15 16:14:30 --> Output Class Initialized
DEBUG - 2013-11-15 16:14:30 --> Security Class Initialized
DEBUG - 2013-11-15 16:14:30 --> Input Class Initialized
DEBUG - 2013-11-15 16:14:30 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 16:14:30 --> Language Class Initialized
DEBUG - 2013-11-15 16:14:30 --> Loader Class Initialized
DEBUG - 2013-11-15 16:14:30 --> Helper loaded: form_helper
DEBUG - 2013-11-15 16:14:30 --> Helper loaded: url_helper
DEBUG - 2013-11-15 16:14:30 --> Helper loaded: html_helper
DEBUG - 2013-11-15 16:14:30 --> Database Driver Class Initialized
DEBUG - 2013-11-15 16:14:30 --> Session Class Initialized
DEBUG - 2013-11-15 16:14:30 --> Helper loaded: string_helper
DEBUG - 2013-11-15 16:14:30 --> Session routines successfully run
DEBUG - 2013-11-15 16:14:30 --> Form Validation Class Initialized
DEBUG - 2013-11-15 16:14:30 --> Controller Class Initialized
DEBUG - 2013-11-15 16:14:30 --> Model Class Initialized
DEBUG - 2013-11-15 16:14:30 --> Model Class Initialized
DEBUG - 2013-11-15 16:14:30 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 16:14:30 --> after session initialization................
INFO  - 2013-11-15 16:14:30 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 16:14:30 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 16:14:30 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 16:14:30 --> inside retrieving locations 
INFO  - 2013-11-15 16:14:30 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 16:14:30 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 16:14:30 --> Final output sent to browser
DEBUG - 2013-11-15 16:14:30 --> Total execution time: 0.0624
DEBUG - 2013-11-15 16:14:31 --> Config Class Initialized
DEBUG - 2013-11-15 16:14:31 --> Hooks Class Initialized
DEBUG - 2013-11-15 16:14:31 --> Utf8 Class Initialized
DEBUG - 2013-11-15 16:14:31 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 16:14:31 --> URI Class Initialized
DEBUG - 2013-11-15 16:14:31 --> Router Class Initialized
DEBUG - 2013-11-15 16:14:31 --> Output Class Initialized
DEBUG - 2013-11-15 16:14:31 --> Security Class Initialized
DEBUG - 2013-11-15 16:14:31 --> Input Class Initialized
DEBUG - 2013-11-15 16:14:31 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 16:14:31 --> Language Class Initialized
DEBUG - 2013-11-15 16:14:31 --> Loader Class Initialized
DEBUG - 2013-11-15 16:14:31 --> Helper loaded: form_helper
DEBUG - 2013-11-15 16:14:31 --> Helper loaded: url_helper
DEBUG - 2013-11-15 16:14:31 --> Helper loaded: html_helper
DEBUG - 2013-11-15 16:14:31 --> Database Driver Class Initialized
DEBUG - 2013-11-15 16:14:31 --> Session Class Initialized
DEBUG - 2013-11-15 16:14:31 --> Helper loaded: string_helper
DEBUG - 2013-11-15 16:14:31 --> Session routines successfully run
DEBUG - 2013-11-15 16:14:31 --> Form Validation Class Initialized
DEBUG - 2013-11-15 16:14:31 --> Controller Class Initialized
DEBUG - 2013-11-15 16:14:31 --> Model Class Initialized
DEBUG - 2013-11-15 16:14:31 --> Model Class Initialized
DEBUG - 2013-11-15 16:14:31 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 16:14:31 --> after session initialization................
INFO  - 2013-11-15 16:14:31 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 16:14:31 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 16:14:31 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 16:14:31 --> inside retrieving locations 
INFO  - 2013-11-15 16:14:31 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 16:14:31 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 16:14:31 --> Final output sent to browser
DEBUG - 2013-11-15 16:14:31 --> Total execution time: 0.0468
DEBUG - 2013-11-15 16:14:44 --> Config Class Initialized
DEBUG - 2013-11-15 16:14:44 --> Hooks Class Initialized
DEBUG - 2013-11-15 16:14:44 --> Utf8 Class Initialized
DEBUG - 2013-11-15 16:14:44 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 16:14:44 --> URI Class Initialized
DEBUG - 2013-11-15 16:14:44 --> Router Class Initialized
DEBUG - 2013-11-15 16:14:44 --> Output Class Initialized
DEBUG - 2013-11-15 16:14:44 --> Security Class Initialized
DEBUG - 2013-11-15 16:14:44 --> Input Class Initialized
DEBUG - 2013-11-15 16:14:44 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 16:14:44 --> Language Class Initialized
DEBUG - 2013-11-15 16:14:44 --> Loader Class Initialized
DEBUG - 2013-11-15 16:14:44 --> Helper loaded: form_helper
DEBUG - 2013-11-15 16:14:44 --> Helper loaded: url_helper
DEBUG - 2013-11-15 16:14:44 --> Helper loaded: html_helper
DEBUG - 2013-11-15 16:14:44 --> Database Driver Class Initialized
DEBUG - 2013-11-15 16:14:44 --> Session Class Initialized
DEBUG - 2013-11-15 16:14:44 --> Helper loaded: string_helper
DEBUG - 2013-11-15 16:14:44 --> Session routines successfully run
DEBUG - 2013-11-15 16:14:44 --> Form Validation Class Initialized
DEBUG - 2013-11-15 16:14:44 --> Controller Class Initialized
DEBUG - 2013-11-15 16:14:44 --> Model Class Initialized
DEBUG - 2013-11-15 16:14:44 --> Model Class Initialized
DEBUG - 2013-11-15 16:14:44 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 16:14:44 --> after session initialization................
INFO  - 2013-11-15 16:14:44 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 16:14:44 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 16:14:44 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 16:14:44 --> inside retrieving locations 
INFO  - 2013-11-15 16:14:44 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 16:14:44 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 16:14:44 --> Final output sent to browser
DEBUG - 2013-11-15 16:14:44 --> Total execution time: 0.0624
DEBUG - 2013-11-15 16:14:46 --> Config Class Initialized
DEBUG - 2013-11-15 16:14:46 --> Hooks Class Initialized
DEBUG - 2013-11-15 16:14:46 --> Utf8 Class Initialized
DEBUG - 2013-11-15 16:14:46 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 16:14:46 --> URI Class Initialized
DEBUG - 2013-11-15 16:14:46 --> Router Class Initialized
DEBUG - 2013-11-15 16:14:46 --> Output Class Initialized
DEBUG - 2013-11-15 16:14:46 --> Security Class Initialized
DEBUG - 2013-11-15 16:14:46 --> Input Class Initialized
DEBUG - 2013-11-15 16:14:46 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 16:14:46 --> Language Class Initialized
DEBUG - 2013-11-15 16:14:46 --> Loader Class Initialized
DEBUG - 2013-11-15 16:14:46 --> Helper loaded: form_helper
DEBUG - 2013-11-15 16:14:46 --> Helper loaded: url_helper
DEBUG - 2013-11-15 16:14:46 --> Helper loaded: html_helper
DEBUG - 2013-11-15 16:14:46 --> Database Driver Class Initialized
DEBUG - 2013-11-15 16:14:46 --> Session Class Initialized
DEBUG - 2013-11-15 16:14:46 --> Helper loaded: string_helper
DEBUG - 2013-11-15 16:14:46 --> Session routines successfully run
DEBUG - 2013-11-15 16:14:46 --> Form Validation Class Initialized
DEBUG - 2013-11-15 16:14:46 --> Controller Class Initialized
DEBUG - 2013-11-15 16:14:46 --> Model Class Initialized
DEBUG - 2013-11-15 16:14:46 --> Model Class Initialized
DEBUG - 2013-11-15 16:14:46 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 16:14:46 --> after session initialization................
INFO  - 2013-11-15 16:14:46 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 16:14:46 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 16:14:46 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 16:14:46 --> inside retrieving locations 
INFO  - 2013-11-15 16:14:46 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 16:14:46 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 16:14:46 --> Final output sent to browser
DEBUG - 2013-11-15 16:14:46 --> Total execution time: 0.0624
DEBUG - 2013-11-15 16:14:47 --> Config Class Initialized
DEBUG - 2013-11-15 16:14:47 --> Hooks Class Initialized
DEBUG - 2013-11-15 16:14:47 --> Utf8 Class Initialized
DEBUG - 2013-11-15 16:14:47 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 16:14:47 --> URI Class Initialized
DEBUG - 2013-11-15 16:14:47 --> Router Class Initialized
DEBUG - 2013-11-15 16:14:47 --> Output Class Initialized
DEBUG - 2013-11-15 16:14:47 --> Security Class Initialized
DEBUG - 2013-11-15 16:14:47 --> Input Class Initialized
DEBUG - 2013-11-15 16:14:47 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 16:14:47 --> Language Class Initialized
DEBUG - 2013-11-15 16:14:47 --> Loader Class Initialized
DEBUG - 2013-11-15 16:14:47 --> Helper loaded: form_helper
DEBUG - 2013-11-15 16:14:47 --> Helper loaded: url_helper
DEBUG - 2013-11-15 16:14:47 --> Helper loaded: html_helper
DEBUG - 2013-11-15 16:14:47 --> Database Driver Class Initialized
DEBUG - 2013-11-15 16:14:47 --> Session Class Initialized
DEBUG - 2013-11-15 16:14:47 --> Helper loaded: string_helper
DEBUG - 2013-11-15 16:14:47 --> Session routines successfully run
DEBUG - 2013-11-15 16:14:47 --> Form Validation Class Initialized
DEBUG - 2013-11-15 16:14:47 --> Controller Class Initialized
DEBUG - 2013-11-15 16:14:47 --> Model Class Initialized
DEBUG - 2013-11-15 16:14:47 --> Model Class Initialized
DEBUG - 2013-11-15 16:14:47 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 16:14:47 --> after session initialization................
INFO  - 2013-11-15 16:14:47 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 16:14:47 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 16:14:47 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 16:14:47 --> inside retrieving locations 
INFO  - 2013-11-15 16:14:47 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 16:14:47 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 16:14:47 --> Final output sent to browser
DEBUG - 2013-11-15 16:14:47 --> Total execution time: 0.0468
DEBUG - 2013-11-15 16:25:46 --> Config Class Initialized
DEBUG - 2013-11-15 16:25:46 --> Hooks Class Initialized
DEBUG - 2013-11-15 16:25:47 --> Utf8 Class Initialized
DEBUG - 2013-11-15 16:25:47 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 16:25:47 --> URI Class Initialized
DEBUG - 2013-11-15 16:25:47 --> Router Class Initialized
DEBUG - 2013-11-15 16:25:47 --> Output Class Initialized
DEBUG - 2013-11-15 16:25:47 --> Security Class Initialized
DEBUG - 2013-11-15 16:25:47 --> Input Class Initialized
DEBUG - 2013-11-15 16:25:47 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 16:25:47 --> Language Class Initialized
DEBUG - 2013-11-15 16:25:47 --> Loader Class Initialized
DEBUG - 2013-11-15 16:25:47 --> Helper loaded: form_helper
DEBUG - 2013-11-15 16:25:47 --> Helper loaded: url_helper
DEBUG - 2013-11-15 16:25:47 --> Helper loaded: html_helper
DEBUG - 2013-11-15 16:25:47 --> Database Driver Class Initialized
DEBUG - 2013-11-15 16:25:47 --> Session Class Initialized
DEBUG - 2013-11-15 16:25:47 --> Helper loaded: string_helper
DEBUG - 2013-11-15 16:25:47 --> Session routines successfully run
DEBUG - 2013-11-15 16:25:47 --> Form Validation Class Initialized
DEBUG - 2013-11-15 16:25:47 --> Controller Class Initialized
DEBUG - 2013-11-15 16:25:47 --> Model Class Initialized
DEBUG - 2013-11-15 16:25:47 --> Model Class Initialized
DEBUG - 2013-11-15 16:25:47 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 16:25:47 --> after session initialization................
INFO  - 2013-11-15 16:25:47 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 16:25:47 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 16:25:47 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 16:25:47 --> inside retrieving locations 
INFO  - 2013-11-15 16:25:47 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 16:25:47 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 16:25:47 --> Final output sent to browser
DEBUG - 2013-11-15 16:25:47 --> Total execution time: 0.0624
DEBUG - 2013-11-15 16:26:16 --> Config Class Initialized
DEBUG - 2013-11-15 16:26:16 --> Hooks Class Initialized
DEBUG - 2013-11-15 16:26:16 --> Utf8 Class Initialized
DEBUG - 2013-11-15 16:26:16 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 16:26:16 --> URI Class Initialized
DEBUG - 2013-11-15 16:26:16 --> Router Class Initialized
DEBUG - 2013-11-15 16:26:16 --> Output Class Initialized
DEBUG - 2013-11-15 16:26:16 --> Security Class Initialized
DEBUG - 2013-11-15 16:26:16 --> Input Class Initialized
DEBUG - 2013-11-15 16:26:16 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 16:26:16 --> Language Class Initialized
DEBUG - 2013-11-15 16:26:16 --> Loader Class Initialized
DEBUG - 2013-11-15 16:26:16 --> Helper loaded: form_helper
DEBUG - 2013-11-15 16:26:16 --> Helper loaded: url_helper
DEBUG - 2013-11-15 16:26:16 --> Helper loaded: html_helper
DEBUG - 2013-11-15 16:26:16 --> Database Driver Class Initialized
DEBUG - 2013-11-15 16:26:16 --> Session Class Initialized
DEBUG - 2013-11-15 16:26:16 --> Helper loaded: string_helper
DEBUG - 2013-11-15 16:26:16 --> Session routines successfully run
DEBUG - 2013-11-15 16:26:16 --> Form Validation Class Initialized
DEBUG - 2013-11-15 16:26:16 --> Controller Class Initialized
DEBUG - 2013-11-15 16:26:16 --> Model Class Initialized
DEBUG - 2013-11-15 16:26:16 --> Model Class Initialized
DEBUG - 2013-11-15 16:26:16 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 16:26:16 --> after session initialization................
INFO  - 2013-11-15 16:26:16 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 16:26:16 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 16:26:16 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 16:26:16 --> inside retrieving locations 
INFO  - 2013-11-15 16:26:16 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 16:26:16 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 16:26:16 --> Final output sent to browser
DEBUG - 2013-11-15 16:26:16 --> Total execution time: 0.0468
DEBUG - 2013-11-15 16:27:11 --> Config Class Initialized
DEBUG - 2013-11-15 16:27:11 --> Hooks Class Initialized
DEBUG - 2013-11-15 16:27:11 --> Utf8 Class Initialized
DEBUG - 2013-11-15 16:27:11 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 16:27:11 --> URI Class Initialized
DEBUG - 2013-11-15 16:27:11 --> Router Class Initialized
DEBUG - 2013-11-15 16:27:11 --> Output Class Initialized
DEBUG - 2013-11-15 16:27:11 --> Security Class Initialized
DEBUG - 2013-11-15 16:27:11 --> Input Class Initialized
DEBUG - 2013-11-15 16:27:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 16:27:11 --> Language Class Initialized
DEBUG - 2013-11-15 16:27:11 --> Loader Class Initialized
DEBUG - 2013-11-15 16:27:11 --> Helper loaded: form_helper
DEBUG - 2013-11-15 16:27:11 --> Helper loaded: url_helper
DEBUG - 2013-11-15 16:27:11 --> Helper loaded: html_helper
DEBUG - 2013-11-15 16:27:11 --> Database Driver Class Initialized
DEBUG - 2013-11-15 16:27:11 --> Session Class Initialized
DEBUG - 2013-11-15 16:27:11 --> Helper loaded: string_helper
DEBUG - 2013-11-15 16:27:11 --> Session routines successfully run
DEBUG - 2013-11-15 16:27:11 --> Form Validation Class Initialized
DEBUG - 2013-11-15 16:27:11 --> Controller Class Initialized
DEBUG - 2013-11-15 16:27:11 --> Model Class Initialized
DEBUG - 2013-11-15 16:27:11 --> Model Class Initialized
DEBUG - 2013-11-15 16:27:11 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 16:27:11 --> after session initialization................
INFO  - 2013-11-15 16:27:11 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 16:27:11 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 16:27:11 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 16:27:11 --> inside retrieving locations 
INFO  - 2013-11-15 16:27:11 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 16:27:11 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 16:27:11 --> Final output sent to browser
DEBUG - 2013-11-15 16:27:11 --> Total execution time: 0.0624
DEBUG - 2013-11-15 16:28:02 --> Config Class Initialized
DEBUG - 2013-11-15 16:28:02 --> Hooks Class Initialized
DEBUG - 2013-11-15 16:28:02 --> Utf8 Class Initialized
DEBUG - 2013-11-15 16:28:02 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 16:28:02 --> URI Class Initialized
DEBUG - 2013-11-15 16:28:02 --> Router Class Initialized
DEBUG - 2013-11-15 16:28:02 --> Output Class Initialized
DEBUG - 2013-11-15 16:28:02 --> Security Class Initialized
DEBUG - 2013-11-15 16:28:02 --> Input Class Initialized
DEBUG - 2013-11-15 16:28:02 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 16:28:02 --> Language Class Initialized
DEBUG - 2013-11-15 16:28:02 --> Loader Class Initialized
DEBUG - 2013-11-15 16:28:02 --> Helper loaded: form_helper
DEBUG - 2013-11-15 16:28:02 --> Helper loaded: url_helper
DEBUG - 2013-11-15 16:28:02 --> Helper loaded: html_helper
DEBUG - 2013-11-15 16:28:02 --> Database Driver Class Initialized
DEBUG - 2013-11-15 16:28:02 --> Session Class Initialized
DEBUG - 2013-11-15 16:28:02 --> Helper loaded: string_helper
DEBUG - 2013-11-15 16:28:02 --> Session routines successfully run
DEBUG - 2013-11-15 16:28:02 --> Form Validation Class Initialized
DEBUG - 2013-11-15 16:28:02 --> Controller Class Initialized
DEBUG - 2013-11-15 16:28:02 --> Model Class Initialized
DEBUG - 2013-11-15 16:28:02 --> Model Class Initialized
DEBUG - 2013-11-15 16:28:02 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 16:28:02 --> after session initialization................
INFO  - 2013-11-15 16:28:02 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 16:28:02 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 16:28:02 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 16:28:02 --> inside retrieving locations 
INFO  - 2013-11-15 16:28:02 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 16:28:02 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 16:28:02 --> Final output sent to browser
DEBUG - 2013-11-15 16:28:02 --> Total execution time: 0.0468
DEBUG - 2013-11-15 16:29:23 --> Config Class Initialized
DEBUG - 2013-11-15 16:29:23 --> Hooks Class Initialized
DEBUG - 2013-11-15 16:29:23 --> Utf8 Class Initialized
DEBUG - 2013-11-15 16:29:23 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 16:29:23 --> URI Class Initialized
DEBUG - 2013-11-15 16:29:23 --> Router Class Initialized
DEBUG - 2013-11-15 16:29:23 --> Output Class Initialized
DEBUG - 2013-11-15 16:29:23 --> Security Class Initialized
DEBUG - 2013-11-15 16:29:23 --> Input Class Initialized
DEBUG - 2013-11-15 16:29:23 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 16:29:23 --> Language Class Initialized
DEBUG - 2013-11-15 16:29:23 --> Loader Class Initialized
DEBUG - 2013-11-15 16:29:23 --> Helper loaded: form_helper
DEBUG - 2013-11-15 16:29:23 --> Helper loaded: url_helper
DEBUG - 2013-11-15 16:29:23 --> Helper loaded: html_helper
DEBUG - 2013-11-15 16:29:23 --> Database Driver Class Initialized
DEBUG - 2013-11-15 16:29:23 --> Session Class Initialized
DEBUG - 2013-11-15 16:29:23 --> Helper loaded: string_helper
DEBUG - 2013-11-15 16:29:23 --> Session routines successfully run
DEBUG - 2013-11-15 16:29:23 --> Form Validation Class Initialized
DEBUG - 2013-11-15 16:29:23 --> Controller Class Initialized
DEBUG - 2013-11-15 16:29:23 --> Model Class Initialized
DEBUG - 2013-11-15 16:29:23 --> Model Class Initialized
DEBUG - 2013-11-15 16:29:23 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 16:29:23 --> after session initialization................
INFO  - 2013-11-15 16:29:23 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 16:29:23 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 16:29:23 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 16:29:23 --> inside retrieving locations 
INFO  - 2013-11-15 16:29:23 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 16:29:23 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 16:29:23 --> Final output sent to browser
DEBUG - 2013-11-15 16:29:23 --> Total execution time: 0.0624
DEBUG - 2013-11-15 16:29:24 --> Config Class Initialized
DEBUG - 2013-11-15 16:29:24 --> Hooks Class Initialized
DEBUG - 2013-11-15 16:29:24 --> Utf8 Class Initialized
DEBUG - 2013-11-15 16:29:24 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 16:29:24 --> URI Class Initialized
DEBUG - 2013-11-15 16:29:24 --> Router Class Initialized
DEBUG - 2013-11-15 16:29:24 --> Output Class Initialized
DEBUG - 2013-11-15 16:29:24 --> Security Class Initialized
DEBUG - 2013-11-15 16:29:24 --> Input Class Initialized
DEBUG - 2013-11-15 16:29:24 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 16:29:24 --> Language Class Initialized
DEBUG - 2013-11-15 16:29:24 --> Loader Class Initialized
DEBUG - 2013-11-15 16:29:24 --> Helper loaded: form_helper
DEBUG - 2013-11-15 16:29:24 --> Helper loaded: url_helper
DEBUG - 2013-11-15 16:29:24 --> Helper loaded: html_helper
DEBUG - 2013-11-15 16:29:24 --> Database Driver Class Initialized
DEBUG - 2013-11-15 16:29:24 --> Session Class Initialized
DEBUG - 2013-11-15 16:29:24 --> Helper loaded: string_helper
DEBUG - 2013-11-15 16:29:24 --> Session routines successfully run
DEBUG - 2013-11-15 16:29:24 --> Form Validation Class Initialized
DEBUG - 2013-11-15 16:29:24 --> Controller Class Initialized
DEBUG - 2013-11-15 16:29:24 --> Model Class Initialized
DEBUG - 2013-11-15 16:29:24 --> Model Class Initialized
DEBUG - 2013-11-15 16:29:24 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 16:29:24 --> after session initialization................
INFO  - 2013-11-15 16:29:24 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 16:29:24 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 16:29:24 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 16:29:24 --> inside retrieving locations 
INFO  - 2013-11-15 16:29:24 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 16:29:24 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 16:29:24 --> Final output sent to browser
DEBUG - 2013-11-15 16:29:24 --> Total execution time: 0.0624
DEBUG - 2013-11-15 16:30:11 --> Config Class Initialized
DEBUG - 2013-11-15 16:30:11 --> Hooks Class Initialized
DEBUG - 2013-11-15 16:30:11 --> Utf8 Class Initialized
DEBUG - 2013-11-15 16:30:11 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 16:30:11 --> URI Class Initialized
DEBUG - 2013-11-15 16:30:11 --> Router Class Initialized
DEBUG - 2013-11-15 16:30:11 --> Output Class Initialized
DEBUG - 2013-11-15 16:30:11 --> Security Class Initialized
DEBUG - 2013-11-15 16:30:11 --> Input Class Initialized
DEBUG - 2013-11-15 16:30:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 16:30:11 --> Language Class Initialized
DEBUG - 2013-11-15 16:30:11 --> Loader Class Initialized
DEBUG - 2013-11-15 16:30:11 --> Helper loaded: form_helper
DEBUG - 2013-11-15 16:30:11 --> Helper loaded: url_helper
DEBUG - 2013-11-15 16:30:11 --> Helper loaded: html_helper
DEBUG - 2013-11-15 16:30:11 --> Database Driver Class Initialized
DEBUG - 2013-11-15 16:30:11 --> Session Class Initialized
DEBUG - 2013-11-15 16:30:11 --> Helper loaded: string_helper
DEBUG - 2013-11-15 16:30:11 --> Session routines successfully run
DEBUG - 2013-11-15 16:30:11 --> Form Validation Class Initialized
DEBUG - 2013-11-15 16:30:11 --> Controller Class Initialized
DEBUG - 2013-11-15 16:30:11 --> Model Class Initialized
DEBUG - 2013-11-15 16:30:11 --> Model Class Initialized
DEBUG - 2013-11-15 16:30:11 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 16:30:11 --> after session initialization................
INFO  - 2013-11-15 16:30:11 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 16:30:11 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 16:30:11 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 16:30:11 --> inside retrieving locations 
INFO  - 2013-11-15 16:30:11 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 16:30:11 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 16:30:11 --> Final output sent to browser
DEBUG - 2013-11-15 16:30:11 --> Total execution time: 0.0624
DEBUG - 2013-11-15 16:30:25 --> Config Class Initialized
DEBUG - 2013-11-15 16:30:25 --> Hooks Class Initialized
DEBUG - 2013-11-15 16:30:25 --> Utf8 Class Initialized
DEBUG - 2013-11-15 16:30:25 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 16:30:25 --> URI Class Initialized
DEBUG - 2013-11-15 16:30:25 --> Router Class Initialized
DEBUG - 2013-11-15 16:30:25 --> Output Class Initialized
DEBUG - 2013-11-15 16:30:25 --> Security Class Initialized
DEBUG - 2013-11-15 16:30:25 --> Input Class Initialized
DEBUG - 2013-11-15 16:30:25 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 16:30:25 --> Language Class Initialized
DEBUG - 2013-11-15 16:30:25 --> Loader Class Initialized
DEBUG - 2013-11-15 16:30:25 --> Helper loaded: form_helper
DEBUG - 2013-11-15 16:30:25 --> Helper loaded: url_helper
DEBUG - 2013-11-15 16:30:25 --> Helper loaded: html_helper
DEBUG - 2013-11-15 16:30:25 --> Database Driver Class Initialized
DEBUG - 2013-11-15 16:30:25 --> Session Class Initialized
DEBUG - 2013-11-15 16:30:25 --> Helper loaded: string_helper
DEBUG - 2013-11-15 16:30:25 --> Session routines successfully run
DEBUG - 2013-11-15 16:30:25 --> Form Validation Class Initialized
DEBUG - 2013-11-15 16:30:25 --> Controller Class Initialized
DEBUG - 2013-11-15 16:30:25 --> Model Class Initialized
DEBUG - 2013-11-15 16:30:25 --> Model Class Initialized
DEBUG - 2013-11-15 16:30:25 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 16:30:25 --> after session initialization................
INFO  - 2013-11-15 16:30:25 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 16:30:25 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 16:30:25 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 16:30:25 --> inside retrieving locations 
INFO  - 2013-11-15 16:30:25 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 16:30:25 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 16:30:25 --> Final output sent to browser
DEBUG - 2013-11-15 16:30:25 --> Total execution time: 0.0624
DEBUG - 2013-11-15 16:30:52 --> Config Class Initialized
DEBUG - 2013-11-15 16:30:52 --> Hooks Class Initialized
DEBUG - 2013-11-15 16:30:52 --> Utf8 Class Initialized
DEBUG - 2013-11-15 16:30:52 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 16:30:52 --> URI Class Initialized
DEBUG - 2013-11-15 16:30:52 --> Router Class Initialized
DEBUG - 2013-11-15 16:30:52 --> Output Class Initialized
DEBUG - 2013-11-15 16:30:52 --> Security Class Initialized
DEBUG - 2013-11-15 16:30:52 --> Input Class Initialized
DEBUG - 2013-11-15 16:30:52 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 16:30:52 --> Language Class Initialized
DEBUG - 2013-11-15 16:30:52 --> Loader Class Initialized
DEBUG - 2013-11-15 16:30:52 --> Helper loaded: form_helper
DEBUG - 2013-11-15 16:30:52 --> Helper loaded: url_helper
DEBUG - 2013-11-15 16:30:52 --> Helper loaded: html_helper
DEBUG - 2013-11-15 16:30:52 --> Database Driver Class Initialized
DEBUG - 2013-11-15 16:30:52 --> Session Class Initialized
DEBUG - 2013-11-15 16:30:52 --> Helper loaded: string_helper
DEBUG - 2013-11-15 16:30:52 --> Session routines successfully run
DEBUG - 2013-11-15 16:30:52 --> Form Validation Class Initialized
DEBUG - 2013-11-15 16:30:52 --> Controller Class Initialized
DEBUG - 2013-11-15 16:30:52 --> Model Class Initialized
DEBUG - 2013-11-15 16:30:52 --> Model Class Initialized
DEBUG - 2013-11-15 16:30:52 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 16:30:52 --> after session initialization................
INFO  - 2013-11-15 16:30:52 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 16:30:52 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 16:30:52 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 16:30:52 --> inside retrieving locations 
INFO  - 2013-11-15 16:30:52 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 16:30:52 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 16:30:52 --> Final output sent to browser
DEBUG - 2013-11-15 16:30:52 --> Total execution time: 0.0468
DEBUG - 2013-11-15 16:31:23 --> Config Class Initialized
DEBUG - 2013-11-15 16:31:23 --> Hooks Class Initialized
DEBUG - 2013-11-15 16:31:23 --> Utf8 Class Initialized
DEBUG - 2013-11-15 16:31:23 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 16:31:23 --> URI Class Initialized
DEBUG - 2013-11-15 16:31:23 --> Router Class Initialized
DEBUG - 2013-11-15 16:31:23 --> Output Class Initialized
DEBUG - 2013-11-15 16:31:23 --> Security Class Initialized
DEBUG - 2013-11-15 16:31:23 --> Input Class Initialized
DEBUG - 2013-11-15 16:31:23 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 16:31:23 --> Language Class Initialized
DEBUG - 2013-11-15 16:31:23 --> Loader Class Initialized
DEBUG - 2013-11-15 16:31:23 --> Helper loaded: form_helper
DEBUG - 2013-11-15 16:31:23 --> Helper loaded: url_helper
DEBUG - 2013-11-15 16:31:23 --> Helper loaded: html_helper
DEBUG - 2013-11-15 16:31:23 --> Database Driver Class Initialized
DEBUG - 2013-11-15 16:31:23 --> Session Class Initialized
DEBUG - 2013-11-15 16:31:23 --> Helper loaded: string_helper
DEBUG - 2013-11-15 16:31:23 --> Session routines successfully run
DEBUG - 2013-11-15 16:31:23 --> Form Validation Class Initialized
DEBUG - 2013-11-15 16:31:23 --> Controller Class Initialized
DEBUG - 2013-11-15 16:31:23 --> Model Class Initialized
DEBUG - 2013-11-15 16:31:23 --> Model Class Initialized
DEBUG - 2013-11-15 16:31:23 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 16:31:23 --> after session initialization................
INFO  - 2013-11-15 16:31:23 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 16:31:23 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 16:31:23 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 16:31:23 --> inside retrieving locations 
INFO  - 2013-11-15 16:31:23 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 16:31:23 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 16:31:23 --> Final output sent to browser
DEBUG - 2013-11-15 16:31:23 --> Total execution time: 0.0468
DEBUG - 2013-11-15 17:45:58 --> Config Class Initialized
DEBUG - 2013-11-15 17:45:58 --> Hooks Class Initialized
DEBUG - 2013-11-15 17:45:58 --> Utf8 Class Initialized
DEBUG - 2013-11-15 17:45:58 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 17:45:58 --> URI Class Initialized
DEBUG - 2013-11-15 17:45:58 --> Router Class Initialized
DEBUG - 2013-11-15 17:45:58 --> Output Class Initialized
DEBUG - 2013-11-15 17:45:58 --> Security Class Initialized
DEBUG - 2013-11-15 17:45:58 --> Input Class Initialized
DEBUG - 2013-11-15 17:45:58 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 17:45:58 --> Language Class Initialized
DEBUG - 2013-11-15 17:45:58 --> Loader Class Initialized
DEBUG - 2013-11-15 17:45:58 --> Helper loaded: form_helper
DEBUG - 2013-11-15 17:45:58 --> Helper loaded: url_helper
DEBUG - 2013-11-15 17:45:58 --> Helper loaded: html_helper
DEBUG - 2013-11-15 17:45:58 --> Database Driver Class Initialized
DEBUG - 2013-11-15 17:45:58 --> Session Class Initialized
DEBUG - 2013-11-15 17:45:58 --> Helper loaded: string_helper
DEBUG - 2013-11-15 17:45:58 --> Session routines successfully run
DEBUG - 2013-11-15 17:45:58 --> Form Validation Class Initialized
DEBUG - 2013-11-15 17:45:58 --> Controller Class Initialized
DEBUG - 2013-11-15 17:45:58 --> Model Class Initialized
DEBUG - 2013-11-15 17:45:58 --> Model Class Initialized
DEBUG - 2013-11-15 17:45:58 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 17:45:58 --> after session initialization................
INFO  - 2013-11-15 17:45:58 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>4
INFO  - 2013-11-15 17:45:58 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` =  '4'
DEBUG - 2013-11-15 17:45:58 --> Final output sent to browser
DEBUG - 2013-11-15 17:45:58 --> Total execution time: 0.0468
DEBUG - 2013-11-15 17:47:48 --> Config Class Initialized
DEBUG - 2013-11-15 17:47:48 --> Hooks Class Initialized
DEBUG - 2013-11-15 17:47:48 --> Utf8 Class Initialized
DEBUG - 2013-11-15 17:47:48 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 17:47:48 --> URI Class Initialized
DEBUG - 2013-11-15 17:47:48 --> Router Class Initialized
DEBUG - 2013-11-15 17:47:48 --> Output Class Initialized
DEBUG - 2013-11-15 17:47:48 --> Security Class Initialized
DEBUG - 2013-11-15 17:47:48 --> Input Class Initialized
DEBUG - 2013-11-15 17:47:48 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 17:47:48 --> Language Class Initialized
DEBUG - 2013-11-15 17:47:48 --> Loader Class Initialized
DEBUG - 2013-11-15 17:47:48 --> Helper loaded: form_helper
DEBUG - 2013-11-15 17:47:48 --> Helper loaded: url_helper
DEBUG - 2013-11-15 17:47:48 --> Helper loaded: html_helper
DEBUG - 2013-11-15 17:47:48 --> Database Driver Class Initialized
DEBUG - 2013-11-15 17:47:48 --> Session Class Initialized
DEBUG - 2013-11-15 17:47:48 --> Helper loaded: string_helper
DEBUG - 2013-11-15 17:47:48 --> Session routines successfully run
DEBUG - 2013-11-15 17:47:48 --> Form Validation Class Initialized
DEBUG - 2013-11-15 17:47:48 --> Controller Class Initialized
DEBUG - 2013-11-15 17:47:48 --> Model Class Initialized
DEBUG - 2013-11-15 17:47:48 --> Model Class Initialized
DEBUG - 2013-11-15 17:47:48 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 17:47:48 --> after session initialization................
INFO  - 2013-11-15 17:47:48 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 17:47:48 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 17:47:48 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 17:47:48 --> inside retrieving locations 
INFO  - 2013-11-15 17:47:48 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 17:47:48 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 17:47:48 --> Final output sent to browser
DEBUG - 2013-11-15 17:47:48 --> Total execution time: 0.0624
DEBUG - 2013-11-15 17:48:29 --> Config Class Initialized
DEBUG - 2013-11-15 17:48:29 --> Hooks Class Initialized
DEBUG - 2013-11-15 17:48:29 --> Utf8 Class Initialized
DEBUG - 2013-11-15 17:48:29 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 17:48:29 --> URI Class Initialized
DEBUG - 2013-11-15 17:48:29 --> Router Class Initialized
DEBUG - 2013-11-15 17:48:29 --> Output Class Initialized
DEBUG - 2013-11-15 17:48:29 --> Security Class Initialized
DEBUG - 2013-11-15 17:48:29 --> Input Class Initialized
DEBUG - 2013-11-15 17:48:29 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 17:48:29 --> Language Class Initialized
DEBUG - 2013-11-15 17:48:29 --> Loader Class Initialized
DEBUG - 2013-11-15 17:48:29 --> Helper loaded: form_helper
DEBUG - 2013-11-15 17:48:29 --> Helper loaded: url_helper
DEBUG - 2013-11-15 17:48:29 --> Helper loaded: html_helper
DEBUG - 2013-11-15 17:48:29 --> Database Driver Class Initialized
DEBUG - 2013-11-15 17:48:29 --> Session Class Initialized
DEBUG - 2013-11-15 17:48:29 --> Helper loaded: string_helper
DEBUG - 2013-11-15 17:48:29 --> Session routines successfully run
DEBUG - 2013-11-15 17:48:29 --> Form Validation Class Initialized
DEBUG - 2013-11-15 17:48:29 --> Controller Class Initialized
DEBUG - 2013-11-15 17:48:29 --> Model Class Initialized
DEBUG - 2013-11-15 17:48:29 --> Model Class Initialized
DEBUG - 2013-11-15 17:48:29 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 17:48:29 --> after session initialization................
INFO  - 2013-11-15 17:48:29 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 17:48:29 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 17:48:29 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 17:48:29 --> inside retrieving locations 
INFO  - 2013-11-15 17:48:29 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 17:48:29 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 17:48:29 --> Final output sent to browser
DEBUG - 2013-11-15 17:48:29 --> Total execution time: 0.0780
DEBUG - 2013-11-15 18:43:51 --> Config Class Initialized
DEBUG - 2013-11-15 18:43:51 --> Hooks Class Initialized
DEBUG - 2013-11-15 18:43:51 --> Utf8 Class Initialized
DEBUG - 2013-11-15 18:43:51 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 18:43:51 --> URI Class Initialized
DEBUG - 2013-11-15 18:43:51 --> Router Class Initialized
DEBUG - 2013-11-15 18:43:51 --> Output Class Initialized
DEBUG - 2013-11-15 18:43:51 --> Security Class Initialized
DEBUG - 2013-11-15 18:43:51 --> Input Class Initialized
DEBUG - 2013-11-15 18:43:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 18:43:51 --> Language Class Initialized
DEBUG - 2013-11-15 18:43:51 --> Loader Class Initialized
DEBUG - 2013-11-15 18:43:51 --> Helper loaded: form_helper
DEBUG - 2013-11-15 18:43:51 --> Helper loaded: url_helper
DEBUG - 2013-11-15 18:43:51 --> Helper loaded: html_helper
DEBUG - 2013-11-15 18:43:51 --> Database Driver Class Initialized
DEBUG - 2013-11-15 18:43:51 --> Session Class Initialized
DEBUG - 2013-11-15 18:43:51 --> Helper loaded: string_helper
DEBUG - 2013-11-15 18:43:51 --> Session routines successfully run
DEBUG - 2013-11-15 18:43:51 --> Form Validation Class Initialized
DEBUG - 2013-11-15 18:43:51 --> Controller Class Initialized
DEBUG - 2013-11-15 18:43:51 --> Model Class Initialized
DEBUG - 2013-11-15 18:43:51 --> Model Class Initialized
DEBUG - 2013-11-15 18:43:51 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 18:43:51 --> after session initialization................
INFO  - 2013-11-15 18:43:51 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 18:43:51 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 18:43:51 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 18:43:51 --> inside retrieving locations 
INFO  - 2013-11-15 18:43:51 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 18:43:51 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 18:43:51 --> Final output sent to browser
DEBUG - 2013-11-15 18:43:51 --> Total execution time: 0.0624
DEBUG - 2013-11-15 18:45:12 --> Config Class Initialized
DEBUG - 2013-11-15 18:45:12 --> Hooks Class Initialized
DEBUG - 2013-11-15 18:45:12 --> Utf8 Class Initialized
DEBUG - 2013-11-15 18:45:12 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 18:45:12 --> URI Class Initialized
DEBUG - 2013-11-15 18:45:12 --> Router Class Initialized
DEBUG - 2013-11-15 18:45:12 --> Output Class Initialized
DEBUG - 2013-11-15 18:45:12 --> Security Class Initialized
DEBUG - 2013-11-15 18:45:12 --> Input Class Initialized
DEBUG - 2013-11-15 18:45:12 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 18:45:12 --> Language Class Initialized
DEBUG - 2013-11-15 18:45:12 --> Loader Class Initialized
DEBUG - 2013-11-15 18:45:12 --> Helper loaded: form_helper
DEBUG - 2013-11-15 18:45:12 --> Helper loaded: url_helper
DEBUG - 2013-11-15 18:45:12 --> Helper loaded: html_helper
DEBUG - 2013-11-15 18:45:12 --> Database Driver Class Initialized
DEBUG - 2013-11-15 18:45:12 --> Session Class Initialized
DEBUG - 2013-11-15 18:45:12 --> Helper loaded: string_helper
DEBUG - 2013-11-15 18:45:12 --> Session routines successfully run
DEBUG - 2013-11-15 18:45:12 --> Form Validation Class Initialized
DEBUG - 2013-11-15 18:45:12 --> Controller Class Initialized
DEBUG - 2013-11-15 18:45:12 --> Model Class Initialized
DEBUG - 2013-11-15 18:45:12 --> Model Class Initialized
DEBUG - 2013-11-15 18:45:12 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 18:45:12 --> after session initialization................
INFO  - 2013-11-15 18:45:12 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 18:45:12 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 18:45:12 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 18:45:12 --> inside retrieving locations 
INFO  - 2013-11-15 18:45:12 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 18:45:12 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 18:45:12 --> Final output sent to browser
DEBUG - 2013-11-15 18:45:12 --> Total execution time: 0.0624
DEBUG - 2013-11-15 19:01:07 --> Config Class Initialized
DEBUG - 2013-11-15 19:01:07 --> Hooks Class Initialized
DEBUG - 2013-11-15 19:01:07 --> Utf8 Class Initialized
DEBUG - 2013-11-15 19:01:07 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 19:01:07 --> URI Class Initialized
DEBUG - 2013-11-15 19:01:07 --> Router Class Initialized
DEBUG - 2013-11-15 19:01:07 --> Output Class Initialized
DEBUG - 2013-11-15 19:01:07 --> Security Class Initialized
DEBUG - 2013-11-15 19:01:07 --> Input Class Initialized
DEBUG - 2013-11-15 19:01:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 19:01:07 --> Language Class Initialized
DEBUG - 2013-11-15 19:01:07 --> Loader Class Initialized
DEBUG - 2013-11-15 19:01:07 --> Helper loaded: form_helper
DEBUG - 2013-11-15 19:01:07 --> Helper loaded: url_helper
DEBUG - 2013-11-15 19:01:07 --> Helper loaded: html_helper
DEBUG - 2013-11-15 19:01:07 --> Database Driver Class Initialized
DEBUG - 2013-11-15 19:01:07 --> Session Class Initialized
DEBUG - 2013-11-15 19:01:07 --> Helper loaded: string_helper
DEBUG - 2013-11-15 19:01:07 --> Session routines successfully run
DEBUG - 2013-11-15 19:01:07 --> Form Validation Class Initialized
DEBUG - 2013-11-15 19:01:07 --> Controller Class Initialized
DEBUG - 2013-11-15 19:01:07 --> Model Class Initialized
DEBUG - 2013-11-15 19:01:07 --> Model Class Initialized
DEBUG - 2013-11-15 19:01:07 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 19:01:07 --> after session initialization................
INFO  - 2013-11-15 19:01:07 --> inside rays login auth.............sys_admin/user_authorization/redirecttorays
INFO  - 2013-11-15 19:01:07 --> inside rays login auth.............sys_admin/user_authorization/redirecttorays
DEBUG - 2013-11-15 19:01:07 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-11-15 19:01:07 --> XSS Filtering completed
DEBUG - 2013-11-15 19:01:07 --> XSS Filtering completed
INFO  - 2013-11-15 19:01:07 --> before getting the relation of member............6
INFO  - 2013-11-15 19:01:07 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-11-15 19:01:07 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-15 19:01:07 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-11-15 19:01:07 --> inside retrieving vacancy for member
INFO  - 2013-11-15 19:01:07 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-11-15 19:01:07 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-15 19:01:07 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-11-15 19:01:07 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-11-15 19:01:07 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-15 19:01:07 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-15 19:01:07 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-11-15 19:01:07 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-11-15 19:01:07 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-11-15 19:01:07 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-11-15 19:01:07 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-11-15 19:01:07 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-11-15 19:01:07 --> Final output sent to browser
DEBUG - 2013-11-15 19:01:07 --> Total execution time: 0.0780
DEBUG - 2013-11-15 19:01:07 --> Config Class Initialized
DEBUG - 2013-11-15 19:01:07 --> Hooks Class Initialized
DEBUG - 2013-11-15 19:01:07 --> Utf8 Class Initialized
DEBUG - 2013-11-15 19:01:07 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 19:01:07 --> URI Class Initialized
DEBUG - 2013-11-15 19:01:07 --> Router Class Initialized
DEBUG - 2013-11-15 19:01:07 --> Output Class Initialized
DEBUG - 2013-11-15 19:01:07 --> Security Class Initialized
DEBUG - 2013-11-15 19:01:07 --> Input Class Initialized
DEBUG - 2013-11-15 19:01:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 19:01:07 --> Language Class Initialized
DEBUG - 2013-11-15 19:01:07 --> Loader Class Initialized
DEBUG - 2013-11-15 19:01:07 --> Helper loaded: form_helper
DEBUG - 2013-11-15 19:01:07 --> Helper loaded: url_helper
DEBUG - 2013-11-15 19:01:07 --> Helper loaded: html_helper
DEBUG - 2013-11-15 19:01:07 --> Database Driver Class Initialized
DEBUG - 2013-11-15 19:01:07 --> Session Class Initialized
DEBUG - 2013-11-15 19:01:07 --> Helper loaded: string_helper
DEBUG - 2013-11-15 19:01:07 --> Session routines successfully run
DEBUG - 2013-11-15 19:01:07 --> Form Validation Class Initialized
DEBUG - 2013-11-15 19:01:07 --> Controller Class Initialized
DEBUG - 2013-11-15 19:01:07 --> Model Class Initialized
DEBUG - 2013-11-15 19:01:07 --> Model Class Initialized
DEBUG - 2013-11-15 19:01:07 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 19:01:07 --> after session initialization................
ERROR - 2013-11-15 19:01:07 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-15 19:01:08 --> Config Class Initialized
DEBUG - 2013-11-15 19:01:08 --> Hooks Class Initialized
DEBUG - 2013-11-15 19:01:08 --> Utf8 Class Initialized
DEBUG - 2013-11-15 19:01:08 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 19:01:08 --> URI Class Initialized
DEBUG - 2013-11-15 19:01:08 --> Router Class Initialized
ERROR - 2013-11-15 19:01:08 --> 404 Page Not Found --> css
DEBUG - 2013-11-15 19:01:10 --> Config Class Initialized
DEBUG - 2013-11-15 19:01:10 --> Hooks Class Initialized
DEBUG - 2013-11-15 19:01:10 --> Utf8 Class Initialized
DEBUG - 2013-11-15 19:01:10 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 19:01:10 --> URI Class Initialized
DEBUG - 2013-11-15 19:01:10 --> Router Class Initialized
DEBUG - 2013-11-15 19:01:10 --> Output Class Initialized
DEBUG - 2013-11-15 19:01:10 --> Security Class Initialized
DEBUG - 2013-11-15 19:01:10 --> Input Class Initialized
DEBUG - 2013-11-15 19:01:10 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 19:01:10 --> Language Class Initialized
DEBUG - 2013-11-15 19:01:10 --> Loader Class Initialized
DEBUG - 2013-11-15 19:01:10 --> Helper loaded: form_helper
DEBUG - 2013-11-15 19:01:10 --> Helper loaded: url_helper
DEBUG - 2013-11-15 19:01:10 --> Helper loaded: html_helper
DEBUG - 2013-11-15 19:01:10 --> Database Driver Class Initialized
DEBUG - 2013-11-15 19:01:10 --> Session Class Initialized
DEBUG - 2013-11-15 19:01:10 --> Helper loaded: string_helper
DEBUG - 2013-11-15 19:01:10 --> Session routines successfully run
DEBUG - 2013-11-15 19:01:10 --> Form Validation Class Initialized
DEBUG - 2013-11-15 19:01:10 --> Controller Class Initialized
DEBUG - 2013-11-15 19:01:10 --> Model Class Initialized
DEBUG - 2013-11-15 19:01:10 --> Model Class Initialized
DEBUG - 2013-11-15 19:01:10 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 19:01:10 --> after session initialization................
INFO  - 2013-11-15 19:01:10 --> last news id is 0
INFO  - 2013-11-15 19:01:10 --> SELECT a.id_article as id, a.title as newsletter_title, a.description as newsletter_description, a.guestonly as guestonly, a.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`article` a)
JOIN `member` m ON `a`.`memberid_member` = `m`.`id_member`
WHERE `a`.`id_article` <> 0
ORDER BY `a`.`id_article` desc
LIMIT 15
INFO  - 2013-11-15 19:01:10 --> after newsleters list has been clicked.................
INFO  - 2013-11-15 19:01:10 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=112&article_type=newsletter_title
INFO  - 2013-11-15 19:01:10 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=111&article_type=newsletter_title
INFO  - 2013-11-15 19:01:10 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=110&article_type=newsletter_title
INFO  - 2013-11-15 19:01:10 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=109&article_type=newsletter_title
INFO  - 2013-11-15 19:01:10 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=108&article_type=newsletter_title
INFO  - 2013-11-15 19:01:10 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=107&article_type=newsletter_title
INFO  - 2013-11-15 19:01:10 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=106&article_type=newsletter_title
INFO  - 2013-11-15 19:01:10 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=105&article_type=newsletter_title
INFO  - 2013-11-15 19:01:10 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=104&article_type=newsletter_title
INFO  - 2013-11-15 19:01:10 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=103&article_type=newsletter_title
INFO  - 2013-11-15 19:01:10 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=102&article_type=newsletter_title
INFO  - 2013-11-15 19:01:10 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=101&article_type=newsletter_title
INFO  - 2013-11-15 19:01:10 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=100&article_type=newsletter_title
INFO  - 2013-11-15 19:01:10 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=99&article_type=newsletter_title
INFO  - 2013-11-15 19:01:10 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=98&article_type=newsletter_title
DEBUG - 2013-11-15 19:01:10 --> File loaded: ../pharmaray-application/views/articles.php
DEBUG - 2013-11-15 19:01:10 --> Final output sent to browser
DEBUG - 2013-11-15 19:01:10 --> Total execution time: 0.0468
DEBUG - 2013-11-15 19:02:30 --> Config Class Initialized
DEBUG - 2013-11-15 19:02:30 --> Hooks Class Initialized
DEBUG - 2013-11-15 19:02:30 --> Utf8 Class Initialized
DEBUG - 2013-11-15 19:02:30 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 19:02:30 --> URI Class Initialized
DEBUG - 2013-11-15 19:02:30 --> Router Class Initialized
DEBUG - 2013-11-15 19:02:30 --> Output Class Initialized
DEBUG - 2013-11-15 19:02:30 --> Security Class Initialized
DEBUG - 2013-11-15 19:02:30 --> Input Class Initialized
DEBUG - 2013-11-15 19:02:30 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 19:02:30 --> Language Class Initialized
DEBUG - 2013-11-15 19:02:30 --> Loader Class Initialized
DEBUG - 2013-11-15 19:02:30 --> Helper loaded: form_helper
DEBUG - 2013-11-15 19:02:30 --> Helper loaded: url_helper
DEBUG - 2013-11-15 19:02:30 --> Helper loaded: html_helper
DEBUG - 2013-11-15 19:02:30 --> Database Driver Class Initialized
DEBUG - 2013-11-15 19:02:30 --> Session Class Initialized
DEBUG - 2013-11-15 19:02:30 --> Helper loaded: string_helper
DEBUG - 2013-11-15 19:02:30 --> Session routines successfully run
DEBUG - 2013-11-15 19:02:30 --> Form Validation Class Initialized
DEBUG - 2013-11-15 19:02:30 --> Controller Class Initialized
DEBUG - 2013-11-15 19:02:30 --> Model Class Initialized
DEBUG - 2013-11-15 19:02:30 --> Model Class Initialized
DEBUG - 2013-11-15 19:02:30 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 19:02:30 --> after session initialization................
INFO  - 2013-11-15 19:02:30 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 19:02:30 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 19:02:30 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 19:02:30 --> inside retrieving locations 
INFO  - 2013-11-15 19:02:30 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 19:02:30 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 19:02:30 --> Final output sent to browser
DEBUG - 2013-11-15 19:02:30 --> Total execution time: 0.0520
DEBUG - 2013-11-15 19:02:32 --> Config Class Initialized
DEBUG - 2013-11-15 19:02:32 --> Hooks Class Initialized
DEBUG - 2013-11-15 19:02:32 --> Utf8 Class Initialized
DEBUG - 2013-11-15 19:02:32 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 19:02:32 --> URI Class Initialized
DEBUG - 2013-11-15 19:02:32 --> Router Class Initialized
DEBUG - 2013-11-15 19:02:32 --> Output Class Initialized
DEBUG - 2013-11-15 19:02:32 --> Security Class Initialized
DEBUG - 2013-11-15 19:02:32 --> Input Class Initialized
DEBUG - 2013-11-15 19:02:32 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 19:02:32 --> Language Class Initialized
DEBUG - 2013-11-15 19:02:32 --> Loader Class Initialized
DEBUG - 2013-11-15 19:02:32 --> Helper loaded: form_helper
DEBUG - 2013-11-15 19:02:32 --> Helper loaded: url_helper
DEBUG - 2013-11-15 19:02:32 --> Helper loaded: html_helper
DEBUG - 2013-11-15 19:02:32 --> Database Driver Class Initialized
DEBUG - 2013-11-15 19:02:32 --> Session Class Initialized
DEBUG - 2013-11-15 19:02:32 --> Helper loaded: string_helper
DEBUG - 2013-11-15 19:02:32 --> Session routines successfully run
DEBUG - 2013-11-15 19:02:32 --> Form Validation Class Initialized
DEBUG - 2013-11-15 19:02:32 --> Controller Class Initialized
DEBUG - 2013-11-15 19:02:32 --> Model Class Initialized
DEBUG - 2013-11-15 19:02:32 --> Model Class Initialized
DEBUG - 2013-11-15 19:02:32 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 19:02:32 --> after session initialization................
INFO  - 2013-11-15 19:02:32 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 19:02:32 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 19:02:32 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 19:02:32 --> inside retrieving locations 
INFO  - 2013-11-15 19:02:32 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 19:02:32 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 19:02:32 --> Final output sent to browser
DEBUG - 2013-11-15 19:02:32 --> Total execution time: 0.0560
DEBUG - 2013-11-15 19:05:23 --> Config Class Initialized
DEBUG - 2013-11-15 19:05:23 --> Hooks Class Initialized
DEBUG - 2013-11-15 19:05:23 --> Utf8 Class Initialized
DEBUG - 2013-11-15 19:05:23 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 19:05:23 --> URI Class Initialized
DEBUG - 2013-11-15 19:05:23 --> Router Class Initialized
DEBUG - 2013-11-15 19:05:23 --> Output Class Initialized
DEBUG - 2013-11-15 19:05:23 --> Security Class Initialized
DEBUG - 2013-11-15 19:05:23 --> Input Class Initialized
DEBUG - 2013-11-15 19:05:23 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 19:05:23 --> Language Class Initialized
DEBUG - 2013-11-15 19:05:23 --> Loader Class Initialized
DEBUG - 2013-11-15 19:05:23 --> Helper loaded: form_helper
DEBUG - 2013-11-15 19:05:23 --> Helper loaded: url_helper
DEBUG - 2013-11-15 19:05:23 --> Helper loaded: html_helper
DEBUG - 2013-11-15 19:05:23 --> Database Driver Class Initialized
DEBUG - 2013-11-15 19:05:23 --> Session Class Initialized
DEBUG - 2013-11-15 19:05:23 --> Helper loaded: string_helper
DEBUG - 2013-11-15 19:05:23 --> Session routines successfully run
DEBUG - 2013-11-15 19:05:23 --> Form Validation Class Initialized
DEBUG - 2013-11-15 19:05:23 --> Controller Class Initialized
DEBUG - 2013-11-15 19:05:23 --> Model Class Initialized
DEBUG - 2013-11-15 19:05:23 --> Model Class Initialized
DEBUG - 2013-11-15 19:05:23 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 19:05:23 --> after session initialization................
INFO  - 2013-11-15 19:05:23 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 19:05:23 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 19:05:23 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 19:05:23 --> inside retrieving locations 
INFO  - 2013-11-15 19:05:23 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 19:05:23 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 19:05:23 --> Final output sent to browser
DEBUG - 2013-11-15 19:05:23 --> Total execution time: 0.0624
DEBUG - 2013-11-15 19:08:20 --> Config Class Initialized
DEBUG - 2013-11-15 19:08:20 --> Hooks Class Initialized
DEBUG - 2013-11-15 19:08:20 --> Utf8 Class Initialized
DEBUG - 2013-11-15 19:08:20 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 19:08:20 --> URI Class Initialized
DEBUG - 2013-11-15 19:08:20 --> Router Class Initialized
DEBUG - 2013-11-15 19:08:20 --> Output Class Initialized
DEBUG - 2013-11-15 19:08:20 --> Security Class Initialized
DEBUG - 2013-11-15 19:08:20 --> Input Class Initialized
DEBUG - 2013-11-15 19:08:20 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 19:08:20 --> Language Class Initialized
DEBUG - 2013-11-15 19:08:20 --> Loader Class Initialized
DEBUG - 2013-11-15 19:08:20 --> Helper loaded: form_helper
DEBUG - 2013-11-15 19:08:20 --> Helper loaded: url_helper
DEBUG - 2013-11-15 19:08:20 --> Helper loaded: html_helper
DEBUG - 2013-11-15 19:08:20 --> Database Driver Class Initialized
DEBUG - 2013-11-15 19:08:20 --> Session Class Initialized
DEBUG - 2013-11-15 19:08:20 --> Helper loaded: string_helper
DEBUG - 2013-11-15 19:08:20 --> Session routines successfully run
DEBUG - 2013-11-15 19:08:20 --> Form Validation Class Initialized
DEBUG - 2013-11-15 19:08:20 --> Controller Class Initialized
DEBUG - 2013-11-15 19:08:20 --> Model Class Initialized
DEBUG - 2013-11-15 19:08:20 --> Model Class Initialized
DEBUG - 2013-11-15 19:08:20 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 19:08:20 --> after session initialization................
INFO  - 2013-11-15 19:08:20 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 19:08:20 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 19:08:20 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 19:08:20 --> inside retrieving locations 
INFO  - 2013-11-15 19:08:20 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 19:08:20 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 19:08:20 --> Final output sent to browser
DEBUG - 2013-11-15 19:08:20 --> Total execution time: 0.0468
DEBUG - 2013-11-15 19:08:22 --> Config Class Initialized
DEBUG - 2013-11-15 19:08:22 --> Hooks Class Initialized
DEBUG - 2013-11-15 19:08:22 --> Utf8 Class Initialized
DEBUG - 2013-11-15 19:08:22 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 19:08:22 --> URI Class Initialized
DEBUG - 2013-11-15 19:08:22 --> Router Class Initialized
DEBUG - 2013-11-15 19:08:22 --> Output Class Initialized
DEBUG - 2013-11-15 19:08:22 --> Security Class Initialized
DEBUG - 2013-11-15 19:08:22 --> Input Class Initialized
DEBUG - 2013-11-15 19:08:22 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 19:08:22 --> Language Class Initialized
DEBUG - 2013-11-15 19:08:22 --> Loader Class Initialized
DEBUG - 2013-11-15 19:08:22 --> Helper loaded: form_helper
DEBUG - 2013-11-15 19:08:22 --> Helper loaded: url_helper
DEBUG - 2013-11-15 19:08:22 --> Helper loaded: html_helper
DEBUG - 2013-11-15 19:08:22 --> Database Driver Class Initialized
DEBUG - 2013-11-15 19:08:22 --> Session Class Initialized
DEBUG - 2013-11-15 19:08:22 --> Helper loaded: string_helper
DEBUG - 2013-11-15 19:08:22 --> Session routines successfully run
DEBUG - 2013-11-15 19:08:22 --> Form Validation Class Initialized
DEBUG - 2013-11-15 19:08:22 --> Controller Class Initialized
DEBUG - 2013-11-15 19:08:22 --> Model Class Initialized
DEBUG - 2013-11-15 19:08:22 --> Model Class Initialized
DEBUG - 2013-11-15 19:08:22 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 19:08:22 --> after session initialization................
INFO  - 2013-11-15 19:08:22 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 19:08:22 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 19:08:22 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 19:08:22 --> inside retrieving locations 
INFO  - 2013-11-15 19:08:22 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 19:08:22 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 19:08:22 --> Final output sent to browser
DEBUG - 2013-11-15 19:08:22 --> Total execution time: 0.0624
DEBUG - 2013-11-15 19:10:29 --> Config Class Initialized
DEBUG - 2013-11-15 19:10:29 --> Hooks Class Initialized
DEBUG - 2013-11-15 19:10:29 --> Utf8 Class Initialized
DEBUG - 2013-11-15 19:10:29 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 19:10:29 --> URI Class Initialized
DEBUG - 2013-11-15 19:10:29 --> Router Class Initialized
DEBUG - 2013-11-15 19:10:29 --> Output Class Initialized
DEBUG - 2013-11-15 19:10:29 --> Security Class Initialized
DEBUG - 2013-11-15 19:10:29 --> Input Class Initialized
DEBUG - 2013-11-15 19:10:29 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 19:10:29 --> Language Class Initialized
DEBUG - 2013-11-15 19:10:29 --> Loader Class Initialized
DEBUG - 2013-11-15 19:10:29 --> Helper loaded: form_helper
DEBUG - 2013-11-15 19:10:29 --> Helper loaded: url_helper
DEBUG - 2013-11-15 19:10:29 --> Helper loaded: html_helper
DEBUG - 2013-11-15 19:10:29 --> Database Driver Class Initialized
DEBUG - 2013-11-15 19:10:29 --> Session Class Initialized
DEBUG - 2013-11-15 19:10:29 --> Helper loaded: string_helper
DEBUG - 2013-11-15 19:10:29 --> Session routines successfully run
DEBUG - 2013-11-15 19:10:29 --> Form Validation Class Initialized
DEBUG - 2013-11-15 19:10:29 --> Controller Class Initialized
DEBUG - 2013-11-15 19:10:29 --> Model Class Initialized
DEBUG - 2013-11-15 19:10:29 --> Model Class Initialized
DEBUG - 2013-11-15 19:10:29 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 19:10:29 --> after session initialization................
INFO  - 2013-11-15 19:10:29 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 19:10:29 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 19:10:29 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 19:10:29 --> inside retrieving locations 
INFO  - 2013-11-15 19:10:29 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 19:10:29 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 19:10:29 --> Final output sent to browser
DEBUG - 2013-11-15 19:10:29 --> Total execution time: 0.0570
DEBUG - 2013-11-15 19:11:35 --> Config Class Initialized
DEBUG - 2013-11-15 19:11:35 --> Hooks Class Initialized
DEBUG - 2013-11-15 19:11:35 --> Utf8 Class Initialized
DEBUG - 2013-11-15 19:11:35 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 19:11:35 --> URI Class Initialized
DEBUG - 2013-11-15 19:11:35 --> Router Class Initialized
DEBUG - 2013-11-15 19:11:35 --> Output Class Initialized
DEBUG - 2013-11-15 19:11:35 --> Security Class Initialized
DEBUG - 2013-11-15 19:11:35 --> Input Class Initialized
DEBUG - 2013-11-15 19:11:35 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 19:11:35 --> Language Class Initialized
DEBUG - 2013-11-15 19:11:35 --> Loader Class Initialized
DEBUG - 2013-11-15 19:11:35 --> Helper loaded: form_helper
DEBUG - 2013-11-15 19:11:35 --> Helper loaded: url_helper
DEBUG - 2013-11-15 19:11:35 --> Helper loaded: html_helper
DEBUG - 2013-11-15 19:11:35 --> Database Driver Class Initialized
DEBUG - 2013-11-15 19:11:35 --> Session Class Initialized
DEBUG - 2013-11-15 19:11:35 --> Helper loaded: string_helper
DEBUG - 2013-11-15 19:11:35 --> Session routines successfully run
DEBUG - 2013-11-15 19:11:35 --> Form Validation Class Initialized
DEBUG - 2013-11-15 19:11:35 --> Controller Class Initialized
DEBUG - 2013-11-15 19:11:35 --> Model Class Initialized
DEBUG - 2013-11-15 19:11:35 --> Model Class Initialized
DEBUG - 2013-11-15 19:11:35 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 19:11:35 --> after session initialization................
INFO  - 2013-11-15 19:11:35 --> last news id is 0
INFO  - 2013-11-15 19:11:35 --> SELECT a.id_article as id, a.title as newsletter_title, a.description as newsletter_description, a.guestonly as guestonly, a.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`article` a)
JOIN `member` m ON `a`.`memberid_member` = `m`.`id_member`
WHERE `a`.`id_article` <> 0
ORDER BY `a`.`id_article` desc
LIMIT 15
INFO  - 2013-11-15 19:11:35 --> after newsleters list has been clicked.................
INFO  - 2013-11-15 19:11:35 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=112&article_type=newsletter_title
INFO  - 2013-11-15 19:11:35 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=111&article_type=newsletter_title
INFO  - 2013-11-15 19:11:35 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=110&article_type=newsletter_title
INFO  - 2013-11-15 19:11:35 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=109&article_type=newsletter_title
INFO  - 2013-11-15 19:11:35 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=108&article_type=newsletter_title
INFO  - 2013-11-15 19:11:35 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=107&article_type=newsletter_title
INFO  - 2013-11-15 19:11:35 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=106&article_type=newsletter_title
INFO  - 2013-11-15 19:11:35 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=105&article_type=newsletter_title
INFO  - 2013-11-15 19:11:35 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=104&article_type=newsletter_title
INFO  - 2013-11-15 19:11:35 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=103&article_type=newsletter_title
INFO  - 2013-11-15 19:11:35 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=102&article_type=newsletter_title
INFO  - 2013-11-15 19:11:35 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=101&article_type=newsletter_title
INFO  - 2013-11-15 19:11:35 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=100&article_type=newsletter_title
INFO  - 2013-11-15 19:11:35 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=99&article_type=newsletter_title
INFO  - 2013-11-15 19:11:35 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=98&article_type=newsletter_title
DEBUG - 2013-11-15 19:11:35 --> File loaded: ../pharmaray-application/views/articles.php
DEBUG - 2013-11-15 19:11:35 --> Final output sent to browser
DEBUG - 2013-11-15 19:11:35 --> Total execution time: 0.0660
DEBUG - 2013-11-15 19:11:45 --> Config Class Initialized
DEBUG - 2013-11-15 19:11:45 --> Hooks Class Initialized
DEBUG - 2013-11-15 19:11:45 --> Utf8 Class Initialized
DEBUG - 2013-11-15 19:11:45 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 19:11:45 --> URI Class Initialized
DEBUG - 2013-11-15 19:11:45 --> Router Class Initialized
DEBUG - 2013-11-15 19:11:45 --> Output Class Initialized
DEBUG - 2013-11-15 19:11:45 --> Security Class Initialized
DEBUG - 2013-11-15 19:11:45 --> Input Class Initialized
DEBUG - 2013-11-15 19:11:45 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 19:11:45 --> Language Class Initialized
DEBUG - 2013-11-15 19:11:45 --> Loader Class Initialized
DEBUG - 2013-11-15 19:11:45 --> Helper loaded: form_helper
DEBUG - 2013-11-15 19:11:45 --> Helper loaded: url_helper
DEBUG - 2013-11-15 19:11:45 --> Helper loaded: html_helper
DEBUG - 2013-11-15 19:11:45 --> Database Driver Class Initialized
DEBUG - 2013-11-15 19:11:45 --> Session Class Initialized
DEBUG - 2013-11-15 19:11:45 --> Helper loaded: string_helper
DEBUG - 2013-11-15 19:11:45 --> Session routines successfully run
DEBUG - 2013-11-15 19:11:45 --> Form Validation Class Initialized
DEBUG - 2013-11-15 19:11:45 --> Controller Class Initialized
DEBUG - 2013-11-15 19:11:45 --> Model Class Initialized
DEBUG - 2013-11-15 19:11:45 --> Model Class Initialized
DEBUG - 2013-11-15 19:11:45 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 19:11:45 --> after session initialization................
INFO  - 2013-11-15 19:11:45 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 19:11:45 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 19:11:45 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 19:11:45 --> inside retrieving locations 
INFO  - 2013-11-15 19:11:45 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 19:11:45 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 19:11:45 --> Final output sent to browser
DEBUG - 2013-11-15 19:11:45 --> Total execution time: 0.0500
DEBUG - 2013-11-15 19:13:21 --> Config Class Initialized
DEBUG - 2013-11-15 19:13:21 --> Hooks Class Initialized
DEBUG - 2013-11-15 19:13:21 --> Utf8 Class Initialized
DEBUG - 2013-11-15 19:13:21 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 19:13:21 --> URI Class Initialized
DEBUG - 2013-11-15 19:13:21 --> Router Class Initialized
DEBUG - 2013-11-15 19:13:21 --> Output Class Initialized
DEBUG - 2013-11-15 19:13:21 --> Security Class Initialized
DEBUG - 2013-11-15 19:13:21 --> Input Class Initialized
DEBUG - 2013-11-15 19:13:21 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 19:13:21 --> Language Class Initialized
DEBUG - 2013-11-15 19:13:21 --> Loader Class Initialized
DEBUG - 2013-11-15 19:13:21 --> Helper loaded: form_helper
DEBUG - 2013-11-15 19:13:21 --> Helper loaded: url_helper
DEBUG - 2013-11-15 19:13:21 --> Helper loaded: html_helper
DEBUG - 2013-11-15 19:13:21 --> Database Driver Class Initialized
DEBUG - 2013-11-15 19:13:21 --> Session Class Initialized
DEBUG - 2013-11-15 19:13:21 --> Helper loaded: string_helper
DEBUG - 2013-11-15 19:13:21 --> Session routines successfully run
DEBUG - 2013-11-15 19:13:21 --> Form Validation Class Initialized
DEBUG - 2013-11-15 19:13:21 --> Controller Class Initialized
DEBUG - 2013-11-15 19:13:21 --> Model Class Initialized
DEBUG - 2013-11-15 19:13:21 --> Model Class Initialized
DEBUG - 2013-11-15 19:13:21 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 19:13:21 --> after session initialization................
INFO  - 2013-11-15 19:13:21 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 19:13:21 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 19:13:21 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 19:13:21 --> inside retrieving locations 
INFO  - 2013-11-15 19:13:21 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 19:13:21 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 19:13:21 --> Final output sent to browser
DEBUG - 2013-11-15 19:13:21 --> Total execution time: 0.0560
DEBUG - 2013-11-15 19:13:23 --> Config Class Initialized
DEBUG - 2013-11-15 19:13:23 --> Hooks Class Initialized
DEBUG - 2013-11-15 19:13:23 --> Utf8 Class Initialized
DEBUG - 2013-11-15 19:13:23 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 19:13:23 --> URI Class Initialized
DEBUG - 2013-11-15 19:13:23 --> Router Class Initialized
DEBUG - 2013-11-15 19:13:23 --> Output Class Initialized
DEBUG - 2013-11-15 19:13:23 --> Security Class Initialized
DEBUG - 2013-11-15 19:13:23 --> Input Class Initialized
DEBUG - 2013-11-15 19:13:23 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 19:13:23 --> Language Class Initialized
DEBUG - 2013-11-15 19:13:23 --> Loader Class Initialized
DEBUG - 2013-11-15 19:13:23 --> Helper loaded: form_helper
DEBUG - 2013-11-15 19:13:23 --> Helper loaded: url_helper
DEBUG - 2013-11-15 19:13:23 --> Helper loaded: html_helper
DEBUG - 2013-11-15 19:13:23 --> Database Driver Class Initialized
DEBUG - 2013-11-15 19:13:23 --> Session Class Initialized
DEBUG - 2013-11-15 19:13:23 --> Helper loaded: string_helper
DEBUG - 2013-11-15 19:13:23 --> Session routines successfully run
DEBUG - 2013-11-15 19:13:23 --> Form Validation Class Initialized
DEBUG - 2013-11-15 19:13:23 --> Controller Class Initialized
DEBUG - 2013-11-15 19:13:23 --> Model Class Initialized
DEBUG - 2013-11-15 19:13:23 --> Model Class Initialized
DEBUG - 2013-11-15 19:13:23 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 19:13:23 --> after session initialization................
INFO  - 2013-11-15 19:13:23 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 19:13:23 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 19:13:23 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 19:13:23 --> inside retrieving locations 
INFO  - 2013-11-15 19:13:23 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 19:13:23 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 19:13:23 --> Final output sent to browser
DEBUG - 2013-11-15 19:13:23 --> Total execution time: 0.0480
DEBUG - 2013-11-15 19:17:32 --> Config Class Initialized
DEBUG - 2013-11-15 19:17:32 --> Hooks Class Initialized
DEBUG - 2013-11-15 19:17:32 --> Utf8 Class Initialized
DEBUG - 2013-11-15 19:17:32 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 19:17:32 --> URI Class Initialized
DEBUG - 2013-11-15 19:17:32 --> Router Class Initialized
DEBUG - 2013-11-15 19:17:32 --> Output Class Initialized
DEBUG - 2013-11-15 19:17:32 --> Security Class Initialized
DEBUG - 2013-11-15 19:17:32 --> Input Class Initialized
DEBUG - 2013-11-15 19:17:32 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 19:17:32 --> Language Class Initialized
DEBUG - 2013-11-15 19:17:32 --> Loader Class Initialized
DEBUG - 2013-11-15 19:17:32 --> Helper loaded: form_helper
DEBUG - 2013-11-15 19:17:32 --> Helper loaded: url_helper
DEBUG - 2013-11-15 19:17:32 --> Helper loaded: html_helper
DEBUG - 2013-11-15 19:17:32 --> Database Driver Class Initialized
DEBUG - 2013-11-15 19:17:32 --> Session Class Initialized
DEBUG - 2013-11-15 19:17:32 --> Helper loaded: string_helper
DEBUG - 2013-11-15 19:17:32 --> Session routines successfully run
DEBUG - 2013-11-15 19:17:32 --> Form Validation Class Initialized
DEBUG - 2013-11-15 19:17:32 --> Controller Class Initialized
DEBUG - 2013-11-15 19:17:32 --> Model Class Initialized
DEBUG - 2013-11-15 19:17:32 --> Model Class Initialized
DEBUG - 2013-11-15 19:17:32 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 19:17:32 --> after session initialization................
INFO  - 2013-11-15 19:17:32 --> last pharmacy id is 26
INFO  - 2013-11-15 19:17:32 --> Ajax retrieval ::::::::::===>SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` < 26
ORDER BY `p`.`id_pharmacy`, `p`.`name` desc
LIMIT 25
DEBUG - 2013-11-15 19:17:32 --> Final output sent to browser
DEBUG - 2013-11-15 19:17:32 --> Total execution time: 0.0468
DEBUG - 2013-11-15 19:17:35 --> Config Class Initialized
DEBUG - 2013-11-15 19:17:35 --> Hooks Class Initialized
DEBUG - 2013-11-15 19:17:35 --> Utf8 Class Initialized
DEBUG - 2013-11-15 19:17:35 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 19:17:35 --> URI Class Initialized
DEBUG - 2013-11-15 19:17:35 --> Router Class Initialized
DEBUG - 2013-11-15 19:17:35 --> Output Class Initialized
DEBUG - 2013-11-15 19:17:35 --> Config Class Initialized
DEBUG - 2013-11-15 19:17:35 --> Hooks Class Initialized
DEBUG - 2013-11-15 19:17:35 --> Security Class Initialized
DEBUG - 2013-11-15 19:17:35 --> Utf8 Class Initialized
DEBUG - 2013-11-15 19:17:35 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 19:17:35 --> Input Class Initialized
DEBUG - 2013-11-15 19:17:35 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 19:17:35 --> URI Class Initialized
DEBUG - 2013-11-15 19:17:35 --> Language Class Initialized
DEBUG - 2013-11-15 19:17:35 --> Router Class Initialized
DEBUG - 2013-11-15 19:17:35 --> Loader Class Initialized
DEBUG - 2013-11-15 19:17:35 --> Output Class Initialized
DEBUG - 2013-11-15 19:17:35 --> Security Class Initialized
DEBUG - 2013-11-15 19:17:35 --> Helper loaded: form_helper
DEBUG - 2013-11-15 19:17:35 --> Input Class Initialized
DEBUG - 2013-11-15 19:17:35 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 19:17:35 --> Language Class Initialized
DEBUG - 2013-11-15 19:17:35 --> Helper loaded: url_helper
DEBUG - 2013-11-15 19:17:35 --> Config Class Initialized
DEBUG - 2013-11-15 19:17:35 --> Hooks Class Initialized
DEBUG - 2013-11-15 19:17:35 --> Helper loaded: html_helper
DEBUG - 2013-11-15 19:17:35 --> Utf8 Class Initialized
DEBUG - 2013-11-15 19:17:35 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 19:17:35 --> URI Class Initialized
DEBUG - 2013-11-15 19:17:35 --> Loader Class Initialized
DEBUG - 2013-11-15 19:17:35 --> Router Class Initialized
DEBUG - 2013-11-15 19:17:35 --> Output Class Initialized
DEBUG - 2013-11-15 19:17:35 --> Helper loaded: form_helper
DEBUG - 2013-11-15 19:17:35 --> Security Class Initialized
DEBUG - 2013-11-15 19:17:35 --> Helper loaded: url_helper
DEBUG - 2013-11-15 19:17:35 --> Database Driver Class Initialized
DEBUG - 2013-11-15 19:17:35 --> Input Class Initialized
DEBUG - 2013-11-15 19:17:35 --> Helper loaded: html_helper
DEBUG - 2013-11-15 19:17:35 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 19:17:35 --> Language Class Initialized
DEBUG - 2013-11-15 19:17:35 --> Session Class Initialized
DEBUG - 2013-11-15 19:17:35 --> Helper loaded: string_helper
DEBUG - 2013-11-15 19:17:35 --> Session routines successfully run
DEBUG - 2013-11-15 19:17:35 --> Loader Class Initialized
DEBUG - 2013-11-15 19:17:35 --> Database Driver Class Initialized
DEBUG - 2013-11-15 19:17:35 --> Helper loaded: form_helper
DEBUG - 2013-11-15 19:17:35 --> Helper loaded: url_helper
DEBUG - 2013-11-15 19:17:35 --> Form Validation Class Initialized
DEBUG - 2013-11-15 19:17:35 --> Helper loaded: html_helper
DEBUG - 2013-11-15 19:17:35 --> Session Class Initialized
DEBUG - 2013-11-15 19:17:35 --> Helper loaded: string_helper
DEBUG - 2013-11-15 19:17:35 --> Session routines successfully run
DEBUG - 2013-11-15 19:17:35 --> Controller Class Initialized
DEBUG - 2013-11-15 19:17:35 --> Model Class Initialized
DEBUG - 2013-11-15 19:17:35 --> Form Validation Class Initialized
DEBUG - 2013-11-15 19:17:35 --> Controller Class Initialized
DEBUG - 2013-11-15 19:17:35 --> Model Class Initialized
DEBUG - 2013-11-15 19:17:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2013-11-15 19:17:35 --> Model Class Initialized
INFO  - 2013-11-15 19:17:35 --> after session initialization................
DEBUG - 2013-11-15 19:17:35 --> Database Driver Class Initialized
ERROR - 2013-11-15 19:17:35 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 19:17:35 --> Model Class Initialized
DEBUG - 2013-11-15 19:17:35 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 19:17:35 --> after session initialization................
ERROR - 2013-11-15 19:17:35 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 19:17:35 --> Session Class Initialized
DEBUG - 2013-11-15 19:17:35 --> Helper loaded: string_helper
DEBUG - 2013-11-15 19:17:35 --> Session routines successfully run
DEBUG - 2013-11-15 19:17:35 --> Form Validation Class Initialized
DEBUG - 2013-11-15 19:17:35 --> Controller Class Initialized
DEBUG - 2013-11-15 19:17:35 --> Model Class Initialized
DEBUG - 2013-11-15 19:17:35 --> Model Class Initialized
DEBUG - 2013-11-15 19:17:35 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 19:17:35 --> after session initialization................
ERROR - 2013-11-15 19:17:35 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 19:23:35 --> Config Class Initialized
DEBUG - 2013-11-15 19:23:35 --> Hooks Class Initialized
DEBUG - 2013-11-15 19:23:35 --> Utf8 Class Initialized
DEBUG - 2013-11-15 19:23:35 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 19:23:35 --> URI Class Initialized
DEBUG - 2013-11-15 19:23:35 --> Router Class Initialized
DEBUG - 2013-11-15 19:23:35 --> Output Class Initialized
DEBUG - 2013-11-15 19:23:35 --> Security Class Initialized
DEBUG - 2013-11-15 19:23:35 --> Input Class Initialized
DEBUG - 2013-11-15 19:23:35 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 19:23:35 --> Language Class Initialized
DEBUG - 2013-11-15 19:23:35 --> Loader Class Initialized
DEBUG - 2013-11-15 19:23:35 --> Helper loaded: form_helper
DEBUG - 2013-11-15 19:23:35 --> Helper loaded: url_helper
DEBUG - 2013-11-15 19:23:35 --> Helper loaded: html_helper
DEBUG - 2013-11-15 19:23:35 --> Database Driver Class Initialized
DEBUG - 2013-11-15 19:23:35 --> Session Class Initialized
DEBUG - 2013-11-15 19:23:35 --> Helper loaded: string_helper
DEBUG - 2013-11-15 19:23:35 --> Session routines successfully run
DEBUG - 2013-11-15 19:23:35 --> Form Validation Class Initialized
DEBUG - 2013-11-15 19:23:35 --> Controller Class Initialized
DEBUG - 2013-11-15 19:23:35 --> Model Class Initialized
DEBUG - 2013-11-15 19:23:35 --> Model Class Initialized
DEBUG - 2013-11-15 19:23:35 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 19:23:35 --> after session initialization................
INFO  - 2013-11-15 19:23:35 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 19:23:35 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 19:23:35 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 19:23:35 --> inside retrieving locations 
INFO  - 2013-11-15 19:23:35 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 19:23:35 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 19:23:35 --> Final output sent to browser
DEBUG - 2013-11-15 19:23:35 --> Total execution time: 0.0468
DEBUG - 2013-11-15 20:00:42 --> Config Class Initialized
DEBUG - 2013-11-15 20:00:42 --> Hooks Class Initialized
DEBUG - 2013-11-15 20:00:42 --> Utf8 Class Initialized
DEBUG - 2013-11-15 20:00:42 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 20:00:42 --> URI Class Initialized
DEBUG - 2013-11-15 20:00:42 --> Router Class Initialized
DEBUG - 2013-11-15 20:00:42 --> Output Class Initialized
DEBUG - 2013-11-15 20:00:42 --> Security Class Initialized
DEBUG - 2013-11-15 20:00:42 --> Input Class Initialized
DEBUG - 2013-11-15 20:00:42 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 20:00:42 --> Language Class Initialized
DEBUG - 2013-11-15 20:00:42 --> Loader Class Initialized
DEBUG - 2013-11-15 20:00:42 --> Helper loaded: form_helper
DEBUG - 2013-11-15 20:00:42 --> Helper loaded: url_helper
DEBUG - 2013-11-15 20:00:42 --> Helper loaded: html_helper
DEBUG - 2013-11-15 20:00:42 --> Database Driver Class Initialized
DEBUG - 2013-11-15 20:00:42 --> Session Class Initialized
DEBUG - 2013-11-15 20:00:42 --> Helper loaded: string_helper
DEBUG - 2013-11-15 20:00:42 --> Session routines successfully run
DEBUG - 2013-11-15 20:00:42 --> Form Validation Class Initialized
DEBUG - 2013-11-15 20:00:42 --> Controller Class Initialized
DEBUG - 2013-11-15 20:00:42 --> Model Class Initialized
DEBUG - 2013-11-15 20:00:42 --> Model Class Initialized
DEBUG - 2013-11-15 20:00:42 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 20:00:42 --> after session initialization................
INFO  - 2013-11-15 20:00:42 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 20:00:42 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 20:00:42 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 20:00:42 --> inside retrieving locations 
INFO  - 2013-11-15 20:00:42 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 20:00:42 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 20:00:42 --> Final output sent to browser
DEBUG - 2013-11-15 20:00:42 --> Total execution time: 0.0624
DEBUG - 2013-11-15 20:04:10 --> Config Class Initialized
DEBUG - 2013-11-15 20:04:10 --> Hooks Class Initialized
DEBUG - 2013-11-15 20:04:10 --> Utf8 Class Initialized
DEBUG - 2013-11-15 20:04:10 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 20:04:10 --> URI Class Initialized
DEBUG - 2013-11-15 20:04:10 --> Router Class Initialized
DEBUG - 2013-11-15 20:04:10 --> Output Class Initialized
DEBUG - 2013-11-15 20:04:10 --> Security Class Initialized
DEBUG - 2013-11-15 20:04:10 --> Input Class Initialized
DEBUG - 2013-11-15 20:04:10 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 20:04:10 --> Language Class Initialized
DEBUG - 2013-11-15 20:04:10 --> Loader Class Initialized
DEBUG - 2013-11-15 20:04:10 --> Helper loaded: form_helper
DEBUG - 2013-11-15 20:04:10 --> Helper loaded: url_helper
DEBUG - 2013-11-15 20:04:10 --> Helper loaded: html_helper
DEBUG - 2013-11-15 20:04:10 --> Database Driver Class Initialized
DEBUG - 2013-11-15 20:04:10 --> Session Class Initialized
DEBUG - 2013-11-15 20:04:10 --> Helper loaded: string_helper
DEBUG - 2013-11-15 20:04:10 --> Session routines successfully run
DEBUG - 2013-11-15 20:04:10 --> Form Validation Class Initialized
DEBUG - 2013-11-15 20:04:10 --> Controller Class Initialized
DEBUG - 2013-11-15 20:04:10 --> Model Class Initialized
DEBUG - 2013-11-15 20:04:10 --> Model Class Initialized
DEBUG - 2013-11-15 20:04:10 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 20:04:10 --> after session initialization................
DEBUG - 2013-11-15 20:04:10 --> Config Class Initialized
DEBUG - 2013-11-15 20:04:10 --> Hooks Class Initialized
DEBUG - 2013-11-15 20:04:10 --> Utf8 Class Initialized
DEBUG - 2013-11-15 20:04:10 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 20:04:10 --> URI Class Initialized
DEBUG - 2013-11-15 20:04:10 --> Router Class Initialized
DEBUG - 2013-11-15 20:04:10 --> No URI present. Default controller set.
DEBUG - 2013-11-15 20:04:10 --> Output Class Initialized
DEBUG - 2013-11-15 20:04:10 --> Security Class Initialized
DEBUG - 2013-11-15 20:04:10 --> Input Class Initialized
DEBUG - 2013-11-15 20:04:10 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 20:04:10 --> Language Class Initialized
DEBUG - 2013-11-15 20:04:10 --> Loader Class Initialized
DEBUG - 2013-11-15 20:04:10 --> Helper loaded: form_helper
DEBUG - 2013-11-15 20:04:10 --> Helper loaded: url_helper
DEBUG - 2013-11-15 20:04:10 --> Helper loaded: html_helper
DEBUG - 2013-11-15 20:04:10 --> Database Driver Class Initialized
DEBUG - 2013-11-15 20:04:10 --> Session Class Initialized
DEBUG - 2013-11-15 20:04:10 --> Helper loaded: string_helper
DEBUG - 2013-11-15 20:04:10 --> A session cookie was not found.
DEBUG - 2013-11-15 20:04:10 --> Session routines successfully run
DEBUG - 2013-11-15 20:04:10 --> Form Validation Class Initialized
DEBUG - 2013-11-15 20:04:10 --> Controller Class Initialized
INFO  - 2013-11-15 20:04:10 --> the form message==>
INFO  - 2013-11-15 20:04:10 --> The session id is ========>dc63c739d6d8e8cf74066979aa60805b and the member id is =======>
INFO  - 2013-11-15 20:04:10 --> after the retrieving session list.................//////////
DEBUG - 2013-11-15 20:04:10 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-11-15 20:04:10 --> Final output sent to browser
DEBUG - 2013-11-15 20:04:10 --> Total execution time: 0.0312
DEBUG - 2013-11-15 20:04:12 --> Config Class Initialized
DEBUG - 2013-11-15 20:04:12 --> Hooks Class Initialized
DEBUG - 2013-11-15 20:04:12 --> Utf8 Class Initialized
DEBUG - 2013-11-15 20:04:12 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 20:04:12 --> URI Class Initialized
DEBUG - 2013-11-15 20:04:12 --> Router Class Initialized
DEBUG - 2013-11-15 20:04:12 --> Output Class Initialized
DEBUG - 2013-11-15 20:04:12 --> Security Class Initialized
DEBUG - 2013-11-15 20:04:12 --> Input Class Initialized
DEBUG - 2013-11-15 20:04:12 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 20:04:12 --> Language Class Initialized
DEBUG - 2013-11-15 20:04:12 --> Loader Class Initialized
DEBUG - 2013-11-15 20:04:12 --> Helper loaded: form_helper
DEBUG - 2013-11-15 20:04:12 --> Helper loaded: url_helper
DEBUG - 2013-11-15 20:04:12 --> Helper loaded: html_helper
DEBUG - 2013-11-15 20:04:12 --> Database Driver Class Initialized
DEBUG - 2013-11-15 20:04:12 --> Session Class Initialized
DEBUG - 2013-11-15 20:04:12 --> Helper loaded: string_helper
DEBUG - 2013-11-15 20:04:12 --> Session routines successfully run
DEBUG - 2013-11-15 20:04:12 --> Form Validation Class Initialized
DEBUG - 2013-11-15 20:04:12 --> Controller Class Initialized
DEBUG - 2013-11-15 20:04:12 --> Model Class Initialized
DEBUG - 2013-11-15 20:04:12 --> Model Class Initialized
DEBUG - 2013-11-15 20:04:12 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 20:04:12 --> after session initialization................
INFO  - 2013-11-15 20:04:12 --> after rays has been clicked.................
INFO  - 2013-11-15 20:04:12 --> last article id is 0
INFO  - 2013-11-15 20:04:12 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 20:04:12 --> 1 the guest only data>>>>>
INFO  - 2013-11-15 20:04:12 --> 1 the guest only data>> AFTER >>>
INFO  - 2013-11-15 20:04:12 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 20:04:12 --> 0 the guest only data>>>>>
INFO  - 2013-11-15 20:04:12 --> 0 the guest only data>> AFTER >>>#111
INFO  - 2013-11-15 20:04:12 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 20:04:12 --> 0 the guest only data>>>>>#111
INFO  - 2013-11-15 20:04:12 --> 0 the guest only data>> AFTER >>>#110
INFO  - 2013-11-15 20:04:12 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 20:04:12 --> 0 the guest only data>>>>>#110
INFO  - 2013-11-15 20:04:12 --> 0 the guest only data>> AFTER >>>#109
INFO  - 2013-11-15 20:04:12 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 20:04:12 --> 0 the guest only data>>>>>#109
INFO  - 2013-11-15 20:04:12 --> 0 the guest only data>> AFTER >>>#108
INFO  - 2013-11-15 20:04:12 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 20:04:12 --> 0 the guest only data>>>>>#108
INFO  - 2013-11-15 20:04:12 --> 0 the guest only data>> AFTER >>>#107
INFO  - 2013-11-15 20:04:12 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 20:04:12 --> 1 the guest only data>>>>>#107
INFO  - 2013-11-15 20:04:12 --> 1 the guest only data>> AFTER >>>#107
INFO  - 2013-11-15 20:04:12 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 20:04:12 --> 0 the guest only data>>>>>#107
INFO  - 2013-11-15 20:04:12 --> 0 the guest only data>> AFTER >>>#105
INFO  - 2013-11-15 20:04:12 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 20:04:12 --> 0 the guest only data>>>>>#105
INFO  - 2013-11-15 20:04:12 --> 0 the guest only data>> AFTER >>>#104
INFO  - 2013-11-15 20:04:12 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 20:04:12 --> 0 the guest only data>>>>>#104
INFO  - 2013-11-15 20:04:12 --> 0 the guest only data>> AFTER >>>#103
INFO  - 2013-11-15 20:04:12 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 20:04:12 --> 0 the guest only data>>>>>#103
INFO  - 2013-11-15 20:04:12 --> 0 the guest only data>> AFTER >>>#102
INFO  - 2013-11-15 20:04:12 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 20:04:12 --> 0 the guest only data>>>>>#102
INFO  - 2013-11-15 20:04:12 --> 0 the guest only data>> AFTER >>>#101
INFO  - 2013-11-15 20:04:12 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 20:04:12 --> 0 the guest only data>>>>>#101
INFO  - 2013-11-15 20:04:12 --> 0 the guest only data>> AFTER >>>#100
INFO  - 2013-11-15 20:04:12 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 20:04:12 --> 0 the guest only data>>>>>#100
INFO  - 2013-11-15 20:04:12 --> 0 the guest only data>> AFTER >>>#99
INFO  - 2013-11-15 20:04:12 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 20:04:12 --> 0 the guest only data>>>>>#99
INFO  - 2013-11-15 20:04:12 --> 0 the guest only data>> AFTER >>>#98
INFO  - 2013-11-15 20:04:12 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 20:04:12 --> 0 the guest only data>>>>>#98
INFO  - 2013-11-15 20:04:12 --> 0 the guest only data>> AFTER >>>#97
INFO  - 2013-11-15 20:04:12 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 20:04:12 --> 1 the guest only data>>>>>#97
INFO  - 2013-11-15 20:04:12 --> 1 the guest only data>> AFTER >>>#97
INFO  - 2013-11-15 20:04:12 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 20:04:12 --> 0 the guest only data>>>>>#97
INFO  - 2013-11-15 20:04:12 --> 0 the guest only data>> AFTER >>>#95
INFO  - 2013-11-15 20:04:12 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 20:04:12 --> 0 the guest only data>>>>>#95
INFO  - 2013-11-15 20:04:12 --> 0 the guest only data>> AFTER >>>#94
INFO  - 2013-11-15 20:04:12 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 20:04:12 --> 1 the guest only data>>>>>#94
INFO  - 2013-11-15 20:04:12 --> 1 the guest only data>> AFTER >>>#94
DEBUG - 2013-11-15 20:04:12 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-11-15 20:04:12 --> Final output sent to browser
DEBUG - 2013-11-15 20:04:12 --> Total execution time: 0.0780
DEBUG - 2013-11-15 20:04:22 --> Config Class Initialized
DEBUG - 2013-11-15 20:04:22 --> Hooks Class Initialized
DEBUG - 2013-11-15 20:04:22 --> Utf8 Class Initialized
DEBUG - 2013-11-15 20:04:22 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 20:04:22 --> URI Class Initialized
DEBUG - 2013-11-15 20:04:22 --> Router Class Initialized
DEBUG - 2013-11-15 20:04:22 --> Output Class Initialized
DEBUG - 2013-11-15 20:04:22 --> Security Class Initialized
DEBUG - 2013-11-15 20:04:22 --> Input Class Initialized
DEBUG - 2013-11-15 20:04:22 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 20:04:22 --> Language Class Initialized
DEBUG - 2013-11-15 20:04:22 --> Loader Class Initialized
DEBUG - 2013-11-15 20:04:22 --> Helper loaded: form_helper
DEBUG - 2013-11-15 20:04:22 --> Helper loaded: url_helper
DEBUG - 2013-11-15 20:04:22 --> Helper loaded: html_helper
DEBUG - 2013-11-15 20:04:22 --> Database Driver Class Initialized
DEBUG - 2013-11-15 20:04:22 --> Session Class Initialized
DEBUG - 2013-11-15 20:04:22 --> Helper loaded: string_helper
DEBUG - 2013-11-15 20:04:22 --> Session routines successfully run
DEBUG - 2013-11-15 20:04:22 --> Form Validation Class Initialized
DEBUG - 2013-11-15 20:04:22 --> Controller Class Initialized
DEBUG - 2013-11-15 20:04:22 --> Model Class Initialized
DEBUG - 2013-11-15 20:04:22 --> Model Class Initialized
DEBUG - 2013-11-15 20:04:22 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 20:04:22 --> after session initialization................
INFO  - 2013-11-15 20:04:22 --> after rays has been clicked.................
INFO  - 2013-11-15 20:04:22 --> last article id is 0
INFO  - 2013-11-15 20:04:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 20:04:22 --> 1 the guest only data>>>>>
INFO  - 2013-11-15 20:04:22 --> 1 the guest only data>> AFTER >>>
INFO  - 2013-11-15 20:04:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 20:04:22 --> 0 the guest only data>>>>>
INFO  - 2013-11-15 20:04:22 --> 0 the guest only data>> AFTER >>>#111
INFO  - 2013-11-15 20:04:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 20:04:22 --> 0 the guest only data>>>>>#111
INFO  - 2013-11-15 20:04:22 --> 0 the guest only data>> AFTER >>>#110
INFO  - 2013-11-15 20:04:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 20:04:22 --> 0 the guest only data>>>>>#110
INFO  - 2013-11-15 20:04:22 --> 0 the guest only data>> AFTER >>>#109
INFO  - 2013-11-15 20:04:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 20:04:22 --> 0 the guest only data>>>>>#109
INFO  - 2013-11-15 20:04:22 --> 0 the guest only data>> AFTER >>>#108
INFO  - 2013-11-15 20:04:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 20:04:22 --> 0 the guest only data>>>>>#108
INFO  - 2013-11-15 20:04:22 --> 0 the guest only data>> AFTER >>>#107
INFO  - 2013-11-15 20:04:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 20:04:22 --> 1 the guest only data>>>>>#107
INFO  - 2013-11-15 20:04:22 --> 1 the guest only data>> AFTER >>>#107
INFO  - 2013-11-15 20:04:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 20:04:22 --> 0 the guest only data>>>>>#107
INFO  - 2013-11-15 20:04:22 --> 0 the guest only data>> AFTER >>>#105
INFO  - 2013-11-15 20:04:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 20:04:22 --> 0 the guest only data>>>>>#105
INFO  - 2013-11-15 20:04:22 --> 0 the guest only data>> AFTER >>>#104
INFO  - 2013-11-15 20:04:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 20:04:22 --> 0 the guest only data>>>>>#104
INFO  - 2013-11-15 20:04:22 --> 0 the guest only data>> AFTER >>>#103
INFO  - 2013-11-15 20:04:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 20:04:22 --> 0 the guest only data>>>>>#103
INFO  - 2013-11-15 20:04:22 --> 0 the guest only data>> AFTER >>>#102
INFO  - 2013-11-15 20:04:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 20:04:22 --> 0 the guest only data>>>>>#102
INFO  - 2013-11-15 20:04:22 --> 0 the guest only data>> AFTER >>>#101
INFO  - 2013-11-15 20:04:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 20:04:22 --> 0 the guest only data>>>>>#101
INFO  - 2013-11-15 20:04:22 --> 0 the guest only data>> AFTER >>>#100
INFO  - 2013-11-15 20:04:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 20:04:22 --> 0 the guest only data>>>>>#100
INFO  - 2013-11-15 20:04:22 --> 0 the guest only data>> AFTER >>>#99
INFO  - 2013-11-15 20:04:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 20:04:22 --> 0 the guest only data>>>>>#99
INFO  - 2013-11-15 20:04:22 --> 0 the guest only data>> AFTER >>>#98
INFO  - 2013-11-15 20:04:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 20:04:22 --> 0 the guest only data>>>>>#98
INFO  - 2013-11-15 20:04:22 --> 0 the guest only data>> AFTER >>>#97
INFO  - 2013-11-15 20:04:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 20:04:22 --> 1 the guest only data>>>>>#97
INFO  - 2013-11-15 20:04:22 --> 1 the guest only data>> AFTER >>>#97
INFO  - 2013-11-15 20:04:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 20:04:22 --> 0 the guest only data>>>>>#97
INFO  - 2013-11-15 20:04:22 --> 0 the guest only data>> AFTER >>>#95
INFO  - 2013-11-15 20:04:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 20:04:22 --> 0 the guest only data>>>>>#95
INFO  - 2013-11-15 20:04:22 --> 0 the guest only data>> AFTER >>>#94
INFO  - 2013-11-15 20:04:22 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2013-11-15 20:04:22 --> 1 the guest only data>>>>>#94
INFO  - 2013-11-15 20:04:22 --> 1 the guest only data>> AFTER >>>#94
DEBUG - 2013-11-15 20:04:22 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-11-15 20:04:22 --> Final output sent to browser
DEBUG - 2013-11-15 20:04:22 --> Total execution time: 0.0720
DEBUG - 2013-11-15 20:10:06 --> Config Class Initialized
DEBUG - 2013-11-15 20:10:06 --> Hooks Class Initialized
DEBUG - 2013-11-15 20:10:06 --> Utf8 Class Initialized
DEBUG - 2013-11-15 20:10:06 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 20:10:06 --> URI Class Initialized
DEBUG - 2013-11-15 20:10:06 --> Router Class Initialized
DEBUG - 2013-11-15 20:10:06 --> Output Class Initialized
DEBUG - 2013-11-15 20:10:06 --> Security Class Initialized
DEBUG - 2013-11-15 20:10:06 --> Input Class Initialized
DEBUG - 2013-11-15 20:10:06 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 20:10:06 --> Language Class Initialized
DEBUG - 2013-11-15 20:10:06 --> Loader Class Initialized
DEBUG - 2013-11-15 20:10:06 --> Helper loaded: form_helper
DEBUG - 2013-11-15 20:10:06 --> Helper loaded: url_helper
DEBUG - 2013-11-15 20:10:06 --> Helper loaded: html_helper
DEBUG - 2013-11-15 20:10:06 --> Database Driver Class Initialized
DEBUG - 2013-11-15 20:10:06 --> Session Class Initialized
DEBUG - 2013-11-15 20:10:06 --> Helper loaded: string_helper
DEBUG - 2013-11-15 20:10:06 --> Session routines successfully run
DEBUG - 2013-11-15 20:10:06 --> Form Validation Class Initialized
DEBUG - 2013-11-15 20:10:06 --> Controller Class Initialized
DEBUG - 2013-11-15 20:10:06 --> Model Class Initialized
DEBUG - 2013-11-15 20:10:06 --> Model Class Initialized
DEBUG - 2013-11-15 20:10:06 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 20:10:06 --> after session initialization................
INFO  - 2013-11-15 20:10:06 --> last article id is 93
DEBUG - 2013-11-15 20:10:06 --> Final output sent to browser
DEBUG - 2013-11-15 20:10:06 --> Total execution time: 0.0624
DEBUG - 2013-11-15 20:10:06 --> Config Class Initialized
DEBUG - 2013-11-15 20:10:06 --> Hooks Class Initialized
DEBUG - 2013-11-15 20:10:06 --> Utf8 Class Initialized
DEBUG - 2013-11-15 20:10:06 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 20:10:06 --> URI Class Initialized
DEBUG - 2013-11-15 20:10:06 --> Router Class Initialized
DEBUG - 2013-11-15 20:10:06 --> Output Class Initialized
DEBUG - 2013-11-15 20:10:06 --> Security Class Initialized
DEBUG - 2013-11-15 20:10:06 --> Input Class Initialized
DEBUG - 2013-11-15 20:10:06 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 20:10:06 --> Language Class Initialized
DEBUG - 2013-11-15 20:10:06 --> Loader Class Initialized
DEBUG - 2013-11-15 20:10:06 --> Helper loaded: form_helper
DEBUG - 2013-11-15 20:10:06 --> Helper loaded: url_helper
DEBUG - 2013-11-15 20:10:06 --> Helper loaded: html_helper
DEBUG - 2013-11-15 20:10:06 --> Database Driver Class Initialized
DEBUG - 2013-11-15 20:10:06 --> Session Class Initialized
DEBUG - 2013-11-15 20:10:06 --> Helper loaded: string_helper
DEBUG - 2013-11-15 20:10:06 --> Session routines successfully run
DEBUG - 2013-11-15 20:10:06 --> Form Validation Class Initialized
DEBUG - 2013-11-15 20:10:06 --> Controller Class Initialized
DEBUG - 2013-11-15 20:10:06 --> Model Class Initialized
DEBUG - 2013-11-15 20:10:06 --> Model Class Initialized
DEBUG - 2013-11-15 20:10:06 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 20:10:06 --> after session initialization................
INFO  - 2013-11-15 20:10:06 --> last article id is 83
DEBUG - 2013-11-15 20:10:06 --> Final output sent to browser
DEBUG - 2013-11-15 20:10:06 --> Total execution time: 0.0624
DEBUG - 2013-11-15 20:10:08 --> Config Class Initialized
DEBUG - 2013-11-15 20:10:08 --> Hooks Class Initialized
DEBUG - 2013-11-15 20:10:08 --> Utf8 Class Initialized
DEBUG - 2013-11-15 20:10:08 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 20:10:08 --> URI Class Initialized
DEBUG - 2013-11-15 20:10:08 --> Router Class Initialized
DEBUG - 2013-11-15 20:10:08 --> Output Class Initialized
DEBUG - 2013-11-15 20:10:08 --> Security Class Initialized
DEBUG - 2013-11-15 20:10:08 --> Input Class Initialized
DEBUG - 2013-11-15 20:10:08 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 20:10:08 --> Language Class Initialized
DEBUG - 2013-11-15 20:10:08 --> Loader Class Initialized
DEBUG - 2013-11-15 20:10:08 --> Helper loaded: form_helper
DEBUG - 2013-11-15 20:10:08 --> Helper loaded: url_helper
DEBUG - 2013-11-15 20:10:08 --> Helper loaded: html_helper
DEBUG - 2013-11-15 20:10:08 --> Database Driver Class Initialized
DEBUG - 2013-11-15 20:10:08 --> Session Class Initialized
DEBUG - 2013-11-15 20:10:08 --> Helper loaded: string_helper
DEBUG - 2013-11-15 20:10:08 --> Session routines successfully run
DEBUG - 2013-11-15 20:10:08 --> Form Validation Class Initialized
DEBUG - 2013-11-15 20:10:08 --> Controller Class Initialized
DEBUG - 2013-11-15 20:10:08 --> Model Class Initialized
DEBUG - 2013-11-15 20:10:08 --> Model Class Initialized
DEBUG - 2013-11-15 20:10:08 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 20:10:08 --> after session initialization................
INFO  - 2013-11-15 20:10:08 --> last article id is 73
DEBUG - 2013-11-15 20:10:08 --> Final output sent to browser
DEBUG - 2013-11-15 20:10:08 --> Total execution time: 0.0624
DEBUG - 2013-11-15 20:10:09 --> Config Class Initialized
DEBUG - 2013-11-15 20:10:09 --> Hooks Class Initialized
DEBUG - 2013-11-15 20:10:09 --> Utf8 Class Initialized
DEBUG - 2013-11-15 20:10:09 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 20:10:09 --> URI Class Initialized
DEBUG - 2013-11-15 20:10:09 --> Router Class Initialized
DEBUG - 2013-11-15 20:10:09 --> Output Class Initialized
DEBUG - 2013-11-15 20:10:09 --> Security Class Initialized
DEBUG - 2013-11-15 20:10:09 --> Input Class Initialized
DEBUG - 2013-11-15 20:10:09 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 20:10:09 --> Language Class Initialized
DEBUG - 2013-11-15 20:10:09 --> Loader Class Initialized
DEBUG - 2013-11-15 20:10:09 --> Helper loaded: form_helper
DEBUG - 2013-11-15 20:10:09 --> Helper loaded: url_helper
DEBUG - 2013-11-15 20:10:09 --> Helper loaded: html_helper
DEBUG - 2013-11-15 20:10:09 --> Database Driver Class Initialized
DEBUG - 2013-11-15 20:10:09 --> Session Class Initialized
DEBUG - 2013-11-15 20:10:09 --> Helper loaded: string_helper
DEBUG - 2013-11-15 20:10:09 --> Session routines successfully run
DEBUG - 2013-11-15 20:10:09 --> Form Validation Class Initialized
DEBUG - 2013-11-15 20:10:09 --> Controller Class Initialized
DEBUG - 2013-11-15 20:10:09 --> Model Class Initialized
DEBUG - 2013-11-15 20:10:09 --> Model Class Initialized
DEBUG - 2013-11-15 20:10:09 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 20:10:09 --> after session initialization................
INFO  - 2013-11-15 20:10:09 --> last article id is 62
DEBUG - 2013-11-15 20:10:09 --> Final output sent to browser
DEBUG - 2013-11-15 20:10:09 --> Total execution time: 0.0624
DEBUG - 2013-11-15 20:10:09 --> Config Class Initialized
DEBUG - 2013-11-15 20:10:09 --> Hooks Class Initialized
DEBUG - 2013-11-15 20:10:09 --> Utf8 Class Initialized
DEBUG - 2013-11-15 20:10:09 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 20:10:09 --> URI Class Initialized
DEBUG - 2013-11-15 20:10:09 --> Router Class Initialized
DEBUG - 2013-11-15 20:10:09 --> Output Class Initialized
DEBUG - 2013-11-15 20:10:09 --> Security Class Initialized
DEBUG - 2013-11-15 20:10:09 --> Input Class Initialized
DEBUG - 2013-11-15 20:10:09 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 20:10:09 --> Language Class Initialized
DEBUG - 2013-11-15 20:10:09 --> Loader Class Initialized
DEBUG - 2013-11-15 20:10:09 --> Helper loaded: form_helper
DEBUG - 2013-11-15 20:10:09 --> Helper loaded: url_helper
DEBUG - 2013-11-15 20:10:09 --> Helper loaded: html_helper
DEBUG - 2013-11-15 20:10:09 --> Database Driver Class Initialized
DEBUG - 2013-11-15 20:10:09 --> Session Class Initialized
DEBUG - 2013-11-15 20:10:09 --> Helper loaded: string_helper
DEBUG - 2013-11-15 20:10:09 --> Session routines successfully run
DEBUG - 2013-11-15 20:10:09 --> Form Validation Class Initialized
DEBUG - 2013-11-15 20:10:09 --> Controller Class Initialized
DEBUG - 2013-11-15 20:10:09 --> Model Class Initialized
DEBUG - 2013-11-15 20:10:09 --> Model Class Initialized
DEBUG - 2013-11-15 20:10:09 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 20:10:09 --> after session initialization................
INFO  - 2013-11-15 20:10:09 --> last article id is 52
DEBUG - 2013-11-15 20:10:09 --> Final output sent to browser
DEBUG - 2013-11-15 20:10:09 --> Total execution time: 0.0936
DEBUG - 2013-11-15 20:34:11 --> Config Class Initialized
DEBUG - 2013-11-15 20:34:11 --> Hooks Class Initialized
DEBUG - 2013-11-15 20:34:11 --> Utf8 Class Initialized
DEBUG - 2013-11-15 20:34:11 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 20:34:11 --> URI Class Initialized
DEBUG - 2013-11-15 20:34:11 --> Router Class Initialized
DEBUG - 2013-11-15 20:34:11 --> Output Class Initialized
DEBUG - 2013-11-15 20:34:11 --> Security Class Initialized
DEBUG - 2013-11-15 20:34:11 --> Input Class Initialized
DEBUG - 2013-11-15 20:34:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 20:34:11 --> Language Class Initialized
DEBUG - 2013-11-15 20:34:11 --> Loader Class Initialized
DEBUG - 2013-11-15 20:34:11 --> Helper loaded: form_helper
DEBUG - 2013-11-15 20:34:11 --> Helper loaded: url_helper
DEBUG - 2013-11-15 20:34:11 --> Helper loaded: html_helper
DEBUG - 2013-11-15 20:34:11 --> Database Driver Class Initialized
DEBUG - 2013-11-15 20:34:11 --> Session Class Initialized
DEBUG - 2013-11-15 20:34:11 --> Helper loaded: string_helper
DEBUG - 2013-11-15 20:34:11 --> Session routines successfully run
DEBUG - 2013-11-15 20:34:11 --> Form Validation Class Initialized
DEBUG - 2013-11-15 20:34:11 --> Controller Class Initialized
DEBUG - 2013-11-15 20:34:11 --> Model Class Initialized
DEBUG - 2013-11-15 20:34:11 --> Model Class Initialized
DEBUG - 2013-11-15 20:34:11 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 20:34:11 --> after session initialization................
INFO  - 2013-11-15 20:34:11 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 20:34:11 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 20:34:11 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 20:34:11 --> inside retrieving locations 
INFO  - 2013-11-15 20:34:11 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 20:34:11 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 20:34:11 --> Final output sent to browser
DEBUG - 2013-11-15 20:34:11 --> Total execution time: 0.0468
DEBUG - 2013-11-15 20:36:04 --> Config Class Initialized
DEBUG - 2013-11-15 20:36:04 --> Hooks Class Initialized
DEBUG - 2013-11-15 20:36:04 --> Utf8 Class Initialized
DEBUG - 2013-11-15 20:36:04 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 20:36:04 --> URI Class Initialized
DEBUG - 2013-11-15 20:36:04 --> Router Class Initialized
DEBUG - 2013-11-15 20:36:04 --> Output Class Initialized
DEBUG - 2013-11-15 20:36:04 --> Security Class Initialized
DEBUG - 2013-11-15 20:36:04 --> Input Class Initialized
DEBUG - 2013-11-15 20:36:04 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 20:36:04 --> Language Class Initialized
DEBUG - 2013-11-15 20:36:04 --> Loader Class Initialized
DEBUG - 2013-11-15 20:36:04 --> Helper loaded: form_helper
DEBUG - 2013-11-15 20:36:04 --> Helper loaded: url_helper
DEBUG - 2013-11-15 20:36:04 --> Helper loaded: html_helper
DEBUG - 2013-11-15 20:36:04 --> Database Driver Class Initialized
DEBUG - 2013-11-15 20:36:04 --> Session Class Initialized
DEBUG - 2013-11-15 20:36:04 --> Helper loaded: string_helper
DEBUG - 2013-11-15 20:36:04 --> Session routines successfully run
DEBUG - 2013-11-15 20:36:04 --> Form Validation Class Initialized
DEBUG - 2013-11-15 20:36:04 --> Controller Class Initialized
DEBUG - 2013-11-15 20:36:04 --> Model Class Initialized
DEBUG - 2013-11-15 20:36:04 --> Model Class Initialized
DEBUG - 2013-11-15 20:36:04 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 20:36:04 --> after session initialization................
INFO  - 2013-11-15 20:36:04 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 20:36:04 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 20:36:04 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 20:36:04 --> inside retrieving locations 
INFO  - 2013-11-15 20:36:04 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 20:36:04 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 20:36:04 --> Final output sent to browser
DEBUG - 2013-11-15 20:36:04 --> Total execution time: 0.0468
DEBUG - 2013-11-15 20:36:50 --> Config Class Initialized
DEBUG - 2013-11-15 20:36:50 --> Hooks Class Initialized
DEBUG - 2013-11-15 20:36:50 --> Utf8 Class Initialized
DEBUG - 2013-11-15 20:36:50 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 20:36:50 --> URI Class Initialized
DEBUG - 2013-11-15 20:36:50 --> Router Class Initialized
DEBUG - 2013-11-15 20:36:50 --> Output Class Initialized
DEBUG - 2013-11-15 20:36:50 --> Security Class Initialized
DEBUG - 2013-11-15 20:36:50 --> Input Class Initialized
DEBUG - 2013-11-15 20:36:50 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 20:36:50 --> Language Class Initialized
DEBUG - 2013-11-15 20:36:50 --> Loader Class Initialized
DEBUG - 2013-11-15 20:36:50 --> Helper loaded: form_helper
DEBUG - 2013-11-15 20:36:50 --> Helper loaded: url_helper
DEBUG - 2013-11-15 20:36:50 --> Helper loaded: html_helper
DEBUG - 2013-11-15 20:36:50 --> Database Driver Class Initialized
DEBUG - 2013-11-15 20:36:50 --> Session Class Initialized
DEBUG - 2013-11-15 20:36:50 --> Helper loaded: string_helper
DEBUG - 2013-11-15 20:36:50 --> Session routines successfully run
DEBUG - 2013-11-15 20:36:50 --> Form Validation Class Initialized
DEBUG - 2013-11-15 20:36:50 --> Controller Class Initialized
DEBUG - 2013-11-15 20:36:50 --> Model Class Initialized
DEBUG - 2013-11-15 20:36:50 --> Model Class Initialized
DEBUG - 2013-11-15 20:36:50 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 20:36:50 --> after session initialization................
INFO  - 2013-11-15 20:36:50 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 20:36:50 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 20:36:50 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 20:36:50 --> inside retrieving locations 
INFO  - 2013-11-15 20:36:50 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 20:36:50 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 20:36:50 --> Final output sent to browser
DEBUG - 2013-11-15 20:36:50 --> Total execution time: 0.0490
DEBUG - 2013-11-15 20:36:54 --> Config Class Initialized
DEBUG - 2013-11-15 20:36:54 --> Hooks Class Initialized
DEBUG - 2013-11-15 20:36:54 --> Utf8 Class Initialized
DEBUG - 2013-11-15 20:36:54 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 20:36:54 --> URI Class Initialized
DEBUG - 2013-11-15 20:36:54 --> Router Class Initialized
DEBUG - 2013-11-15 20:36:54 --> Output Class Initialized
DEBUG - 2013-11-15 20:36:54 --> Security Class Initialized
DEBUG - 2013-11-15 20:36:54 --> Input Class Initialized
DEBUG - 2013-11-15 20:36:54 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 20:36:54 --> Language Class Initialized
DEBUG - 2013-11-15 20:36:54 --> Loader Class Initialized
DEBUG - 2013-11-15 20:36:54 --> Helper loaded: form_helper
DEBUG - 2013-11-15 20:36:54 --> Helper loaded: url_helper
DEBUG - 2013-11-15 20:36:54 --> Helper loaded: html_helper
DEBUG - 2013-11-15 20:36:54 --> Database Driver Class Initialized
DEBUG - 2013-11-15 20:36:54 --> Session Class Initialized
DEBUG - 2013-11-15 20:36:54 --> Helper loaded: string_helper
DEBUG - 2013-11-15 20:36:54 --> Session routines successfully run
DEBUG - 2013-11-15 20:36:54 --> Form Validation Class Initialized
DEBUG - 2013-11-15 20:36:54 --> Controller Class Initialized
DEBUG - 2013-11-15 20:36:54 --> Model Class Initialized
DEBUG - 2013-11-15 20:36:54 --> Model Class Initialized
DEBUG - 2013-11-15 20:36:54 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 20:36:54 --> after session initialization................
INFO  - 2013-11-15 20:36:54 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 20:36:54 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 20:36:54 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 20:36:54 --> inside retrieving locations 
INFO  - 2013-11-15 20:36:54 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 20:36:54 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 20:36:54 --> Final output sent to browser
DEBUG - 2013-11-15 20:36:54 --> Total execution time: 0.0580
DEBUG - 2013-11-15 20:37:44 --> Config Class Initialized
DEBUG - 2013-11-15 20:37:44 --> Hooks Class Initialized
DEBUG - 2013-11-15 20:37:44 --> Utf8 Class Initialized
DEBUG - 2013-11-15 20:37:44 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 20:37:44 --> URI Class Initialized
DEBUG - 2013-11-15 20:37:44 --> Router Class Initialized
DEBUG - 2013-11-15 20:37:44 --> Output Class Initialized
DEBUG - 2013-11-15 20:37:44 --> Security Class Initialized
DEBUG - 2013-11-15 20:37:44 --> Input Class Initialized
DEBUG - 2013-11-15 20:37:44 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 20:37:44 --> Language Class Initialized
DEBUG - 2013-11-15 20:37:44 --> Loader Class Initialized
DEBUG - 2013-11-15 20:37:44 --> Helper loaded: form_helper
DEBUG - 2013-11-15 20:37:44 --> Helper loaded: url_helper
DEBUG - 2013-11-15 20:37:44 --> Helper loaded: html_helper
DEBUG - 2013-11-15 20:37:44 --> Database Driver Class Initialized
DEBUG - 2013-11-15 20:37:44 --> Session Class Initialized
DEBUG - 2013-11-15 20:37:44 --> Helper loaded: string_helper
DEBUG - 2013-11-15 20:37:44 --> Session routines successfully run
DEBUG - 2013-11-15 20:37:44 --> Form Validation Class Initialized
DEBUG - 2013-11-15 20:37:44 --> Controller Class Initialized
DEBUG - 2013-11-15 20:37:44 --> Model Class Initialized
DEBUG - 2013-11-15 20:37:44 --> Model Class Initialized
DEBUG - 2013-11-15 20:37:44 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 20:37:44 --> after session initialization................
INFO  - 2013-11-15 20:37:44 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 20:37:44 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 20:37:44 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 20:37:44 --> inside retrieving locations 
INFO  - 2013-11-15 20:37:44 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 20:37:44 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 20:37:44 --> Final output sent to browser
DEBUG - 2013-11-15 20:37:44 --> Total execution time: 0.0710
DEBUG - 2013-11-15 20:37:46 --> Config Class Initialized
DEBUG - 2013-11-15 20:37:46 --> Hooks Class Initialized
DEBUG - 2013-11-15 20:37:46 --> Utf8 Class Initialized
DEBUG - 2013-11-15 20:37:46 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 20:37:46 --> URI Class Initialized
DEBUG - 2013-11-15 20:37:46 --> Router Class Initialized
DEBUG - 2013-11-15 20:37:46 --> Output Class Initialized
DEBUG - 2013-11-15 20:37:46 --> Security Class Initialized
DEBUG - 2013-11-15 20:37:46 --> Input Class Initialized
DEBUG - 2013-11-15 20:37:46 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 20:37:46 --> Language Class Initialized
DEBUG - 2013-11-15 20:37:46 --> Loader Class Initialized
DEBUG - 2013-11-15 20:37:46 --> Helper loaded: form_helper
DEBUG - 2013-11-15 20:37:46 --> Helper loaded: url_helper
DEBUG - 2013-11-15 20:37:46 --> Helper loaded: html_helper
DEBUG - 2013-11-15 20:37:46 --> Database Driver Class Initialized
DEBUG - 2013-11-15 20:37:46 --> Session Class Initialized
DEBUG - 2013-11-15 20:37:46 --> Helper loaded: string_helper
DEBUG - 2013-11-15 20:37:46 --> Session routines successfully run
DEBUG - 2013-11-15 20:37:46 --> Form Validation Class Initialized
DEBUG - 2013-11-15 20:37:46 --> Controller Class Initialized
DEBUG - 2013-11-15 20:37:46 --> Model Class Initialized
DEBUG - 2013-11-15 20:37:46 --> Model Class Initialized
DEBUG - 2013-11-15 20:37:46 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 20:37:46 --> after session initialization................
INFO  - 2013-11-15 20:37:46 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 20:37:46 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 20:37:46 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 20:37:46 --> inside retrieving locations 
INFO  - 2013-11-15 20:37:46 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 20:37:46 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 20:37:46 --> Final output sent to browser
DEBUG - 2013-11-15 20:37:46 --> Total execution time: 0.0500
DEBUG - 2013-11-15 20:38:01 --> Config Class Initialized
DEBUG - 2013-11-15 20:38:01 --> Hooks Class Initialized
DEBUG - 2013-11-15 20:38:01 --> Utf8 Class Initialized
DEBUG - 2013-11-15 20:38:01 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 20:38:01 --> URI Class Initialized
DEBUG - 2013-11-15 20:38:01 --> Router Class Initialized
DEBUG - 2013-11-15 20:38:01 --> Output Class Initialized
DEBUG - 2013-11-15 20:38:01 --> Security Class Initialized
DEBUG - 2013-11-15 20:38:01 --> Input Class Initialized
DEBUG - 2013-11-15 20:38:01 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 20:38:01 --> Language Class Initialized
DEBUG - 2013-11-15 20:38:01 --> Loader Class Initialized
DEBUG - 2013-11-15 20:38:01 --> Helper loaded: form_helper
DEBUG - 2013-11-15 20:38:01 --> Helper loaded: url_helper
DEBUG - 2013-11-15 20:38:01 --> Helper loaded: html_helper
DEBUG - 2013-11-15 20:38:01 --> Database Driver Class Initialized
DEBUG - 2013-11-15 20:38:01 --> Session Class Initialized
DEBUG - 2013-11-15 20:38:01 --> Helper loaded: string_helper
DEBUG - 2013-11-15 20:38:01 --> Session routines successfully run
DEBUG - 2013-11-15 20:38:01 --> Form Validation Class Initialized
DEBUG - 2013-11-15 20:38:01 --> Controller Class Initialized
DEBUG - 2013-11-15 20:38:01 --> Model Class Initialized
DEBUG - 2013-11-15 20:38:01 --> Model Class Initialized
DEBUG - 2013-11-15 20:38:01 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 20:38:01 --> after session initialization................
INFO  - 2013-11-15 20:38:01 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 20:38:01 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 20:38:01 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 20:38:01 --> inside retrieving locations 
INFO  - 2013-11-15 20:38:01 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 20:38:01 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 20:38:01 --> Final output sent to browser
DEBUG - 2013-11-15 20:38:01 --> Total execution time: 0.0624
DEBUG - 2013-11-15 21:20:44 --> Config Class Initialized
DEBUG - 2013-11-15 21:20:44 --> Hooks Class Initialized
DEBUG - 2013-11-15 21:20:44 --> Utf8 Class Initialized
DEBUG - 2013-11-15 21:20:44 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 21:20:44 --> URI Class Initialized
DEBUG - 2013-11-15 21:20:44 --> Router Class Initialized
DEBUG - 2013-11-15 21:20:44 --> Output Class Initialized
DEBUG - 2013-11-15 21:20:44 --> Security Class Initialized
DEBUG - 2013-11-15 21:20:44 --> Input Class Initialized
DEBUG - 2013-11-15 21:20:44 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 21:20:44 --> Language Class Initialized
DEBUG - 2013-11-15 21:20:44 --> Loader Class Initialized
DEBUG - 2013-11-15 21:20:44 --> Helper loaded: form_helper
DEBUG - 2013-11-15 21:20:44 --> Helper loaded: url_helper
DEBUG - 2013-11-15 21:20:44 --> Helper loaded: html_helper
DEBUG - 2013-11-15 21:20:44 --> Database Driver Class Initialized
DEBUG - 2013-11-15 21:20:44 --> Session Class Initialized
DEBUG - 2013-11-15 21:20:44 --> Helper loaded: string_helper
DEBUG - 2013-11-15 21:20:44 --> Session routines successfully run
DEBUG - 2013-11-15 21:20:44 --> Form Validation Class Initialized
DEBUG - 2013-11-15 21:20:44 --> Controller Class Initialized
DEBUG - 2013-11-15 21:20:44 --> Model Class Initialized
DEBUG - 2013-11-15 21:20:44 --> Model Class Initialized
DEBUG - 2013-11-15 21:20:44 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 21:20:44 --> after session initialization................
INFO  - 2013-11-15 21:20:44 --> last pharmacy id is 26
INFO  - 2013-11-15 21:20:44 --> Ajax retrieval ::::::::::===>SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` < 26
ORDER BY `p`.`id_pharmacy`, `p`.`name` desc
LIMIT 25
DEBUG - 2013-11-15 21:20:44 --> Final output sent to browser
DEBUG - 2013-11-15 21:20:44 --> Total execution time: 0.0624
DEBUG - 2013-11-15 21:20:51 --> Config Class Initialized
DEBUG - 2013-11-15 21:20:51 --> Hooks Class Initialized
DEBUG - 2013-11-15 21:20:51 --> Utf8 Class Initialized
DEBUG - 2013-11-15 21:20:51 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 21:20:51 --> URI Class Initialized
DEBUG - 2013-11-15 21:20:51 --> Router Class Initialized
DEBUG - 2013-11-15 21:20:51 --> Config Class Initialized
DEBUG - 2013-11-15 21:20:51 --> Hooks Class Initialized
DEBUG - 2013-11-15 21:20:51 --> Output Class Initialized
DEBUG - 2013-11-15 21:20:51 --> Utf8 Class Initialized
DEBUG - 2013-11-15 21:20:51 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 21:20:51 --> Security Class Initialized
DEBUG - 2013-11-15 21:20:51 --> URI Class Initialized
DEBUG - 2013-11-15 21:20:51 --> Router Class Initialized
DEBUG - 2013-11-15 21:20:51 --> Input Class Initialized
DEBUG - 2013-11-15 21:20:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 21:20:51 --> Language Class Initialized
DEBUG - 2013-11-15 21:20:51 --> Output Class Initialized
DEBUG - 2013-11-15 21:20:51 --> Security Class Initialized
DEBUG - 2013-11-15 21:20:51 --> Input Class Initialized
DEBUG - 2013-11-15 21:20:51 --> Loader Class Initialized
DEBUG - 2013-11-15 21:20:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 21:20:51 --> Language Class Initialized
DEBUG - 2013-11-15 21:20:51 --> Helper loaded: form_helper
DEBUG - 2013-11-15 21:20:51 --> Helper loaded: url_helper
DEBUG - 2013-11-15 21:20:51 --> Helper loaded: html_helper
DEBUG - 2013-11-15 21:20:51 --> Loader Class Initialized
DEBUG - 2013-11-15 21:20:51 --> Helper loaded: form_helper
DEBUG - 2013-11-15 21:20:51 --> Helper loaded: url_helper
DEBUG - 2013-11-15 21:20:51 --> Helper loaded: html_helper
DEBUG - 2013-11-15 21:20:51 --> Database Driver Class Initialized
DEBUG - 2013-11-15 21:20:51 --> Database Driver Class Initialized
DEBUG - 2013-11-15 21:20:51 --> Session Class Initialized
DEBUG - 2013-11-15 21:20:51 --> Helper loaded: string_helper
DEBUG - 2013-11-15 21:20:51 --> Session routines successfully run
DEBUG - 2013-11-15 21:20:51 --> Session Class Initialized
DEBUG - 2013-11-15 21:20:51 --> Helper loaded: string_helper
DEBUG - 2013-11-15 21:20:51 --> Session routines successfully run
DEBUG - 2013-11-15 21:20:51 --> Form Validation Class Initialized
DEBUG - 2013-11-15 21:20:51 --> Controller Class Initialized
DEBUG - 2013-11-15 21:20:51 --> Model Class Initialized
DEBUG - 2013-11-15 21:20:51 --> Form Validation Class Initialized
DEBUG - 2013-11-15 21:20:51 --> Controller Class Initialized
DEBUG - 2013-11-15 21:20:51 --> Model Class Initialized
DEBUG - 2013-11-15 21:20:51 --> Model Class Initialized
DEBUG - 2013-11-15 21:20:51 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 21:20:51 --> after session initialization................
ERROR - 2013-11-15 21:20:51 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 21:20:51 --> Model Class Initialized
DEBUG - 2013-11-15 21:20:51 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 21:20:51 --> after session initialization................
ERROR - 2013-11-15 21:20:51 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 21:20:51 --> Config Class Initialized
DEBUG - 2013-11-15 21:20:51 --> Hooks Class Initialized
DEBUG - 2013-11-15 21:20:51 --> Utf8 Class Initialized
DEBUG - 2013-11-15 21:20:51 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 21:20:51 --> URI Class Initialized
DEBUG - 2013-11-15 21:20:51 --> Router Class Initialized
DEBUG - 2013-11-15 21:20:51 --> Output Class Initialized
DEBUG - 2013-11-15 21:20:51 --> Security Class Initialized
DEBUG - 2013-11-15 21:20:51 --> Input Class Initialized
DEBUG - 2013-11-15 21:20:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 21:20:51 --> Language Class Initialized
DEBUG - 2013-11-15 21:20:51 --> Loader Class Initialized
DEBUG - 2013-11-15 21:20:51 --> Helper loaded: form_helper
DEBUG - 2013-11-15 21:20:51 --> Helper loaded: url_helper
DEBUG - 2013-11-15 21:20:51 --> Helper loaded: html_helper
DEBUG - 2013-11-15 21:20:51 --> Database Driver Class Initialized
DEBUG - 2013-11-15 21:20:51 --> Session Class Initialized
DEBUG - 2013-11-15 21:20:51 --> Helper loaded: string_helper
DEBUG - 2013-11-15 21:20:51 --> Session routines successfully run
DEBUG - 2013-11-15 21:20:51 --> Form Validation Class Initialized
DEBUG - 2013-11-15 21:20:51 --> Controller Class Initialized
DEBUG - 2013-11-15 21:20:51 --> Model Class Initialized
DEBUG - 2013-11-15 21:20:51 --> Model Class Initialized
DEBUG - 2013-11-15 21:20:51 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 21:20:51 --> after session initialization................
ERROR - 2013-11-15 21:20:51 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 21:23:50 --> Config Class Initialized
DEBUG - 2013-11-15 21:23:50 --> Hooks Class Initialized
DEBUG - 2013-11-15 21:23:50 --> Utf8 Class Initialized
DEBUG - 2013-11-15 21:23:50 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 21:23:50 --> URI Class Initialized
DEBUG - 2013-11-15 21:23:50 --> Router Class Initialized
DEBUG - 2013-11-15 21:23:50 --> Output Class Initialized
DEBUG - 2013-11-15 21:23:50 --> Security Class Initialized
DEBUG - 2013-11-15 21:23:50 --> Input Class Initialized
DEBUG - 2013-11-15 21:23:50 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 21:23:50 --> Language Class Initialized
DEBUG - 2013-11-15 21:23:50 --> Loader Class Initialized
DEBUG - 2013-11-15 21:23:50 --> Helper loaded: form_helper
DEBUG - 2013-11-15 21:23:50 --> Helper loaded: url_helper
DEBUG - 2013-11-15 21:23:50 --> Helper loaded: html_helper
DEBUG - 2013-11-15 21:23:50 --> Database Driver Class Initialized
DEBUG - 2013-11-15 21:23:50 --> Session Class Initialized
DEBUG - 2013-11-15 21:23:50 --> Helper loaded: string_helper
DEBUG - 2013-11-15 21:23:50 --> Session routines successfully run
DEBUG - 2013-11-15 21:23:50 --> Form Validation Class Initialized
DEBUG - 2013-11-15 21:23:50 --> Controller Class Initialized
DEBUG - 2013-11-15 21:23:50 --> Model Class Initialized
DEBUG - 2013-11-15 21:23:50 --> Model Class Initialized
DEBUG - 2013-11-15 21:23:50 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 21:23:50 --> after session initialization................
INFO  - 2013-11-15 21:23:50 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 21:23:50 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 21:23:50 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 21:23:50 --> inside retrieving locations 
INFO  - 2013-11-15 21:23:50 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 21:23:50 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 21:23:50 --> Final output sent to browser
DEBUG - 2013-11-15 21:23:50 --> Total execution time: 0.0468
DEBUG - 2013-11-15 21:23:55 --> Config Class Initialized
DEBUG - 2013-11-15 21:23:55 --> Hooks Class Initialized
DEBUG - 2013-11-15 21:23:55 --> Utf8 Class Initialized
DEBUG - 2013-11-15 21:23:55 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 21:23:55 --> URI Class Initialized
DEBUG - 2013-11-15 21:23:55 --> Router Class Initialized
DEBUG - 2013-11-15 21:23:55 --> Output Class Initialized
DEBUG - 2013-11-15 21:23:55 --> Security Class Initialized
DEBUG - 2013-11-15 21:23:55 --> Input Class Initialized
DEBUG - 2013-11-15 21:23:55 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 21:23:55 --> Language Class Initialized
DEBUG - 2013-11-15 21:23:55 --> Loader Class Initialized
DEBUG - 2013-11-15 21:23:55 --> Helper loaded: form_helper
DEBUG - 2013-11-15 21:23:55 --> Helper loaded: url_helper
DEBUG - 2013-11-15 21:23:55 --> Helper loaded: html_helper
DEBUG - 2013-11-15 21:23:55 --> Database Driver Class Initialized
DEBUG - 2013-11-15 21:23:55 --> Session Class Initialized
DEBUG - 2013-11-15 21:23:55 --> Helper loaded: string_helper
DEBUG - 2013-11-15 21:23:55 --> Session routines successfully run
DEBUG - 2013-11-15 21:23:55 --> Form Validation Class Initialized
DEBUG - 2013-11-15 21:23:55 --> Controller Class Initialized
DEBUG - 2013-11-15 21:23:55 --> Model Class Initialized
DEBUG - 2013-11-15 21:23:55 --> Model Class Initialized
DEBUG - 2013-11-15 21:23:55 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 21:23:55 --> after session initialization................
INFO  - 2013-11-15 21:23:55 --> last pharmacy id is 26
INFO  - 2013-11-15 21:23:55 --> Ajax retrieval ::::::::::===>SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` < 26
ORDER BY `p`.`id_pharmacy`, `p`.`name` desc
LIMIT 25
DEBUG - 2013-11-15 21:23:55 --> Final output sent to browser
DEBUG - 2013-11-15 21:23:55 --> Total execution time: 0.0624
DEBUG - 2013-11-15 21:24:23 --> Config Class Initialized
DEBUG - 2013-11-15 21:24:23 --> Hooks Class Initialized
DEBUG - 2013-11-15 21:24:23 --> Utf8 Class Initialized
DEBUG - 2013-11-15 21:24:23 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 21:24:23 --> URI Class Initialized
DEBUG - 2013-11-15 21:24:23 --> Router Class Initialized
DEBUG - 2013-11-15 21:24:23 --> Output Class Initialized
DEBUG - 2013-11-15 21:24:23 --> Security Class Initialized
DEBUG - 2013-11-15 21:24:23 --> Input Class Initialized
DEBUG - 2013-11-15 21:24:23 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 21:24:23 --> Language Class Initialized
DEBUG - 2013-11-15 21:24:23 --> Loader Class Initialized
DEBUG - 2013-11-15 21:24:23 --> Helper loaded: form_helper
DEBUG - 2013-11-15 21:24:23 --> Helper loaded: url_helper
DEBUG - 2013-11-15 21:24:23 --> Helper loaded: html_helper
DEBUG - 2013-11-15 21:24:23 --> Database Driver Class Initialized
DEBUG - 2013-11-15 21:24:23 --> Session Class Initialized
DEBUG - 2013-11-15 21:24:23 --> Helper loaded: string_helper
DEBUG - 2013-11-15 21:24:23 --> Session routines successfully run
DEBUG - 2013-11-15 21:24:23 --> Form Validation Class Initialized
DEBUG - 2013-11-15 21:24:23 --> Controller Class Initialized
DEBUG - 2013-11-15 21:24:23 --> Model Class Initialized
DEBUG - 2013-11-15 21:24:23 --> Model Class Initialized
DEBUG - 2013-11-15 21:24:23 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 21:24:23 --> after session initialization................
INFO  - 2013-11-15 21:24:23 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 21:24:23 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 21:24:23 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 21:24:23 --> inside retrieving locations 
INFO  - 2013-11-15 21:24:23 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 21:24:23 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 21:24:23 --> Final output sent to browser
DEBUG - 2013-11-15 21:24:23 --> Total execution time: 0.0624
DEBUG - 2013-11-15 21:24:24 --> Config Class Initialized
DEBUG - 2013-11-15 21:24:24 --> Hooks Class Initialized
DEBUG - 2013-11-15 21:24:24 --> Utf8 Class Initialized
DEBUG - 2013-11-15 21:24:24 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 21:24:24 --> URI Class Initialized
DEBUG - 2013-11-15 21:24:24 --> Router Class Initialized
DEBUG - 2013-11-15 21:24:24 --> Output Class Initialized
DEBUG - 2013-11-15 21:24:24 --> Security Class Initialized
DEBUG - 2013-11-15 21:24:24 --> Input Class Initialized
DEBUG - 2013-11-15 21:24:24 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 21:24:24 --> Language Class Initialized
DEBUG - 2013-11-15 21:24:24 --> Loader Class Initialized
DEBUG - 2013-11-15 21:24:24 --> Helper loaded: form_helper
DEBUG - 2013-11-15 21:24:24 --> Helper loaded: url_helper
DEBUG - 2013-11-15 21:24:24 --> Helper loaded: html_helper
DEBUG - 2013-11-15 21:24:24 --> Database Driver Class Initialized
DEBUG - 2013-11-15 21:24:24 --> Session Class Initialized
DEBUG - 2013-11-15 21:24:24 --> Helper loaded: string_helper
DEBUG - 2013-11-15 21:24:24 --> Session routines successfully run
DEBUG - 2013-11-15 21:24:24 --> Form Validation Class Initialized
DEBUG - 2013-11-15 21:24:24 --> Controller Class Initialized
DEBUG - 2013-11-15 21:24:24 --> Model Class Initialized
DEBUG - 2013-11-15 21:24:24 --> Model Class Initialized
DEBUG - 2013-11-15 21:24:24 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 21:24:24 --> after session initialization................
INFO  - 2013-11-15 21:24:24 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 21:24:24 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 21:24:24 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 21:24:24 --> inside retrieving locations 
INFO  - 2013-11-15 21:24:24 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 21:24:24 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 21:24:24 --> Final output sent to browser
DEBUG - 2013-11-15 21:24:24 --> Total execution time: 0.0624
DEBUG - 2013-11-15 21:24:25 --> Config Class Initialized
DEBUG - 2013-11-15 21:24:25 --> Hooks Class Initialized
DEBUG - 2013-11-15 21:24:25 --> Utf8 Class Initialized
DEBUG - 2013-11-15 21:24:25 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 21:24:25 --> URI Class Initialized
DEBUG - 2013-11-15 21:24:25 --> Router Class Initialized
DEBUG - 2013-11-15 21:24:25 --> Output Class Initialized
DEBUG - 2013-11-15 21:24:25 --> Security Class Initialized
DEBUG - 2013-11-15 21:24:25 --> Input Class Initialized
DEBUG - 2013-11-15 21:24:25 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 21:24:25 --> Language Class Initialized
DEBUG - 2013-11-15 21:24:25 --> Loader Class Initialized
DEBUG - 2013-11-15 21:24:25 --> Helper loaded: form_helper
DEBUG - 2013-11-15 21:24:25 --> Helper loaded: url_helper
DEBUG - 2013-11-15 21:24:25 --> Helper loaded: html_helper
DEBUG - 2013-11-15 21:24:25 --> Database Driver Class Initialized
DEBUG - 2013-11-15 21:24:25 --> Session Class Initialized
DEBUG - 2013-11-15 21:24:25 --> Helper loaded: string_helper
DEBUG - 2013-11-15 21:24:25 --> Session routines successfully run
DEBUG - 2013-11-15 21:24:25 --> Form Validation Class Initialized
DEBUG - 2013-11-15 21:24:25 --> Controller Class Initialized
DEBUG - 2013-11-15 21:24:25 --> Model Class Initialized
DEBUG - 2013-11-15 21:24:25 --> Model Class Initialized
DEBUG - 2013-11-15 21:24:25 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 21:24:25 --> after session initialization................
INFO  - 2013-11-15 21:24:25 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 21:24:25 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 21:24:25 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 21:24:25 --> inside retrieving locations 
INFO  - 2013-11-15 21:24:25 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 21:24:25 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 21:24:25 --> Final output sent to browser
DEBUG - 2013-11-15 21:24:25 --> Total execution time: 0.0468
DEBUG - 2013-11-15 21:24:52 --> Config Class Initialized
DEBUG - 2013-11-15 21:24:52 --> Hooks Class Initialized
DEBUG - 2013-11-15 21:24:52 --> Utf8 Class Initialized
DEBUG - 2013-11-15 21:24:52 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 21:24:52 --> URI Class Initialized
DEBUG - 2013-11-15 21:24:52 --> Router Class Initialized
DEBUG - 2013-11-15 21:24:52 --> Output Class Initialized
DEBUG - 2013-11-15 21:24:52 --> Security Class Initialized
DEBUG - 2013-11-15 21:24:52 --> Input Class Initialized
DEBUG - 2013-11-15 21:24:52 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 21:24:52 --> Language Class Initialized
DEBUG - 2013-11-15 21:24:52 --> Loader Class Initialized
DEBUG - 2013-11-15 21:24:52 --> Helper loaded: form_helper
DEBUG - 2013-11-15 21:24:52 --> Helper loaded: url_helper
DEBUG - 2013-11-15 21:24:52 --> Helper loaded: html_helper
DEBUG - 2013-11-15 21:24:52 --> Database Driver Class Initialized
DEBUG - 2013-11-15 21:24:52 --> Session Class Initialized
DEBUG - 2013-11-15 21:24:52 --> Helper loaded: string_helper
DEBUG - 2013-11-15 21:24:52 --> Session routines successfully run
DEBUG - 2013-11-15 21:24:52 --> Form Validation Class Initialized
DEBUG - 2013-11-15 21:24:52 --> Controller Class Initialized
DEBUG - 2013-11-15 21:24:52 --> Model Class Initialized
DEBUG - 2013-11-15 21:24:52 --> Model Class Initialized
DEBUG - 2013-11-15 21:24:52 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 21:24:52 --> after session initialization................
INFO  - 2013-11-15 21:24:52 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 21:24:52 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 21:24:52 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 21:24:52 --> inside retrieving locations 
INFO  - 2013-11-15 21:24:52 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 21:24:52 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 21:24:52 --> Final output sent to browser
DEBUG - 2013-11-15 21:24:52 --> Total execution time: 0.0312
DEBUG - 2013-11-15 21:26:15 --> Config Class Initialized
DEBUG - 2013-11-15 21:26:15 --> Hooks Class Initialized
DEBUG - 2013-11-15 21:26:15 --> Utf8 Class Initialized
DEBUG - 2013-11-15 21:26:15 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 21:26:15 --> URI Class Initialized
DEBUG - 2013-11-15 21:26:15 --> Router Class Initialized
DEBUG - 2013-11-15 21:26:15 --> Output Class Initialized
DEBUG - 2013-11-15 21:26:15 --> Security Class Initialized
DEBUG - 2013-11-15 21:26:15 --> Input Class Initialized
DEBUG - 2013-11-15 21:26:15 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 21:26:15 --> Language Class Initialized
DEBUG - 2013-11-15 21:26:15 --> Loader Class Initialized
DEBUG - 2013-11-15 21:26:15 --> Helper loaded: form_helper
DEBUG - 2013-11-15 21:26:15 --> Helper loaded: url_helper
DEBUG - 2013-11-15 21:26:15 --> Helper loaded: html_helper
DEBUG - 2013-11-15 21:26:15 --> Database Driver Class Initialized
DEBUG - 2013-11-15 21:26:15 --> Session Class Initialized
DEBUG - 2013-11-15 21:26:15 --> Helper loaded: string_helper
DEBUG - 2013-11-15 21:26:15 --> Session routines successfully run
DEBUG - 2013-11-15 21:26:15 --> Form Validation Class Initialized
DEBUG - 2013-11-15 21:26:15 --> Controller Class Initialized
DEBUG - 2013-11-15 21:26:15 --> Model Class Initialized
DEBUG - 2013-11-15 21:26:15 --> Model Class Initialized
DEBUG - 2013-11-15 21:26:15 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 21:26:15 --> after session initialization................
INFO  - 2013-11-15 21:26:15 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 21:26:15 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 21:26:15 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 21:26:15 --> inside retrieving locations 
INFO  - 2013-11-15 21:26:15 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 21:26:15 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 21:26:15 --> Final output sent to browser
DEBUG - 2013-11-15 21:26:15 --> Total execution time: 0.0468
DEBUG - 2013-11-15 21:26:29 --> Config Class Initialized
DEBUG - 2013-11-15 21:26:29 --> Hooks Class Initialized
DEBUG - 2013-11-15 21:26:29 --> Utf8 Class Initialized
DEBUG - 2013-11-15 21:26:29 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 21:26:29 --> URI Class Initialized
DEBUG - 2013-11-15 21:26:29 --> Router Class Initialized
DEBUG - 2013-11-15 21:26:29 --> Output Class Initialized
DEBUG - 2013-11-15 21:26:29 --> Security Class Initialized
DEBUG - 2013-11-15 21:26:29 --> Input Class Initialized
DEBUG - 2013-11-15 21:26:29 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 21:26:29 --> Language Class Initialized
DEBUG - 2013-11-15 21:26:29 --> Loader Class Initialized
DEBUG - 2013-11-15 21:26:29 --> Helper loaded: form_helper
DEBUG - 2013-11-15 21:26:29 --> Helper loaded: url_helper
DEBUG - 2013-11-15 21:26:29 --> Helper loaded: html_helper
DEBUG - 2013-11-15 21:26:29 --> Database Driver Class Initialized
DEBUG - 2013-11-15 21:26:29 --> Session Class Initialized
DEBUG - 2013-11-15 21:26:29 --> Helper loaded: string_helper
DEBUG - 2013-11-15 21:26:29 --> Session routines successfully run
DEBUG - 2013-11-15 21:26:29 --> Form Validation Class Initialized
DEBUG - 2013-11-15 21:26:29 --> Controller Class Initialized
DEBUG - 2013-11-15 21:26:29 --> Model Class Initialized
DEBUG - 2013-11-15 21:26:29 --> Model Class Initialized
DEBUG - 2013-11-15 21:26:29 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 21:26:29 --> after session initialization................
INFO  - 2013-11-15 21:26:29 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 21:26:29 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 21:26:29 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 21:26:29 --> inside retrieving locations 
INFO  - 2013-11-15 21:26:29 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 21:26:29 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 21:26:29 --> Final output sent to browser
DEBUG - 2013-11-15 21:26:29 --> Total execution time: 0.0468
DEBUG - 2013-11-15 21:27:52 --> Config Class Initialized
DEBUG - 2013-11-15 21:27:52 --> Hooks Class Initialized
DEBUG - 2013-11-15 21:27:52 --> Utf8 Class Initialized
DEBUG - 2013-11-15 21:27:52 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 21:27:52 --> URI Class Initialized
DEBUG - 2013-11-15 21:27:52 --> Router Class Initialized
DEBUG - 2013-11-15 21:27:52 --> Output Class Initialized
DEBUG - 2013-11-15 21:27:52 --> Security Class Initialized
DEBUG - 2013-11-15 21:27:52 --> Input Class Initialized
DEBUG - 2013-11-15 21:27:52 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 21:27:52 --> Language Class Initialized
DEBUG - 2013-11-15 21:27:52 --> Loader Class Initialized
DEBUG - 2013-11-15 21:27:52 --> Helper loaded: form_helper
DEBUG - 2013-11-15 21:27:52 --> Helper loaded: url_helper
DEBUG - 2013-11-15 21:27:52 --> Helper loaded: html_helper
DEBUG - 2013-11-15 21:27:52 --> Database Driver Class Initialized
DEBUG - 2013-11-15 21:27:52 --> Session Class Initialized
DEBUG - 2013-11-15 21:27:52 --> Helper loaded: string_helper
DEBUG - 2013-11-15 21:27:52 --> Session routines successfully run
DEBUG - 2013-11-15 21:27:52 --> Form Validation Class Initialized
DEBUG - 2013-11-15 21:27:52 --> Controller Class Initialized
DEBUG - 2013-11-15 21:27:52 --> Model Class Initialized
DEBUG - 2013-11-15 21:27:52 --> Model Class Initialized
DEBUG - 2013-11-15 21:27:52 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 21:27:52 --> after session initialization................
INFO  - 2013-11-15 21:27:52 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 21:27:52 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 21:27:52 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 21:27:52 --> inside retrieving locations 
INFO  - 2013-11-15 21:27:52 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 21:27:52 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 21:27:52 --> Final output sent to browser
DEBUG - 2013-11-15 21:27:52 --> Total execution time: 0.0468
DEBUG - 2013-11-15 21:27:53 --> Config Class Initialized
DEBUG - 2013-11-15 21:27:53 --> Hooks Class Initialized
DEBUG - 2013-11-15 21:27:53 --> Utf8 Class Initialized
DEBUG - 2013-11-15 21:27:53 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 21:27:53 --> URI Class Initialized
DEBUG - 2013-11-15 21:27:53 --> Router Class Initialized
DEBUG - 2013-11-15 21:27:53 --> Output Class Initialized
DEBUG - 2013-11-15 21:27:53 --> Security Class Initialized
DEBUG - 2013-11-15 21:27:53 --> Input Class Initialized
DEBUG - 2013-11-15 21:27:53 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 21:27:53 --> Language Class Initialized
DEBUG - 2013-11-15 21:27:53 --> Loader Class Initialized
DEBUG - 2013-11-15 21:27:53 --> Helper loaded: form_helper
DEBUG - 2013-11-15 21:27:53 --> Helper loaded: url_helper
DEBUG - 2013-11-15 21:27:53 --> Helper loaded: html_helper
DEBUG - 2013-11-15 21:27:53 --> Database Driver Class Initialized
DEBUG - 2013-11-15 21:27:53 --> Session Class Initialized
DEBUG - 2013-11-15 21:27:53 --> Helper loaded: string_helper
DEBUG - 2013-11-15 21:27:53 --> Session routines successfully run
DEBUG - 2013-11-15 21:27:53 --> Form Validation Class Initialized
DEBUG - 2013-11-15 21:27:53 --> Controller Class Initialized
DEBUG - 2013-11-15 21:27:53 --> Model Class Initialized
DEBUG - 2013-11-15 21:27:53 --> Model Class Initialized
DEBUG - 2013-11-15 21:27:53 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 21:27:53 --> after session initialization................
INFO  - 2013-11-15 21:27:53 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 21:27:53 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 21:27:53 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 21:27:53 --> inside retrieving locations 
INFO  - 2013-11-15 21:27:53 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 21:27:53 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 21:27:53 --> Final output sent to browser
DEBUG - 2013-11-15 21:27:53 --> Total execution time: 0.0468
DEBUG - 2013-11-15 21:28:01 --> Config Class Initialized
DEBUG - 2013-11-15 21:28:01 --> Hooks Class Initialized
DEBUG - 2013-11-15 21:28:01 --> Utf8 Class Initialized
DEBUG - 2013-11-15 21:28:01 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 21:28:01 --> URI Class Initialized
DEBUG - 2013-11-15 21:28:01 --> Router Class Initialized
DEBUG - 2013-11-15 21:28:01 --> Output Class Initialized
DEBUG - 2013-11-15 21:28:01 --> Security Class Initialized
DEBUG - 2013-11-15 21:28:01 --> Input Class Initialized
DEBUG - 2013-11-15 21:28:01 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 21:28:01 --> Language Class Initialized
DEBUG - 2013-11-15 21:28:01 --> Loader Class Initialized
DEBUG - 2013-11-15 21:28:01 --> Helper loaded: form_helper
DEBUG - 2013-11-15 21:28:01 --> Helper loaded: url_helper
DEBUG - 2013-11-15 21:28:01 --> Helper loaded: html_helper
DEBUG - 2013-11-15 21:28:01 --> Database Driver Class Initialized
DEBUG - 2013-11-15 21:28:01 --> Session Class Initialized
DEBUG - 2013-11-15 21:28:01 --> Helper loaded: string_helper
DEBUG - 2013-11-15 21:28:01 --> Session routines successfully run
DEBUG - 2013-11-15 21:28:01 --> Form Validation Class Initialized
DEBUG - 2013-11-15 21:28:01 --> Controller Class Initialized
DEBUG - 2013-11-15 21:28:01 --> Model Class Initialized
DEBUG - 2013-11-15 21:28:01 --> Model Class Initialized
DEBUG - 2013-11-15 21:28:01 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 21:28:01 --> after session initialization................
INFO  - 2013-11-15 21:28:01 --> last pharmacy id is 26
INFO  - 2013-11-15 21:28:01 --> Ajax retrieval ::::::::::===>SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` < 26
ORDER BY `p`.`id_pharmacy`, `p`.`name` desc
LIMIT 25
DEBUG - 2013-11-15 21:28:01 --> Final output sent to browser
DEBUG - 2013-11-15 21:28:01 --> Total execution time: 0.0468
DEBUG - 2013-11-15 21:28:04 --> Config Class Initialized
DEBUG - 2013-11-15 21:28:04 --> Hooks Class Initialized
DEBUG - 2013-11-15 21:28:04 --> Utf8 Class Initialized
DEBUG - 2013-11-15 21:28:04 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 21:28:04 --> URI Class Initialized
DEBUG - 2013-11-15 21:28:04 --> Router Class Initialized
DEBUG - 2013-11-15 21:28:04 --> Output Class Initialized
DEBUG - 2013-11-15 21:28:04 --> Security Class Initialized
DEBUG - 2013-11-15 21:28:04 --> Input Class Initialized
DEBUG - 2013-11-15 21:28:04 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 21:28:04 --> Language Class Initialized
DEBUG - 2013-11-15 21:28:04 --> Loader Class Initialized
DEBUG - 2013-11-15 21:28:04 --> Helper loaded: form_helper
DEBUG - 2013-11-15 21:28:04 --> Helper loaded: url_helper
DEBUG - 2013-11-15 21:28:04 --> Helper loaded: html_helper
DEBUG - 2013-11-15 21:28:04 --> Database Driver Class Initialized
DEBUG - 2013-11-15 21:28:04 --> Session Class Initialized
DEBUG - 2013-11-15 21:28:04 --> Helper loaded: string_helper
DEBUG - 2013-11-15 21:28:04 --> Session routines successfully run
DEBUG - 2013-11-15 21:28:04 --> Form Validation Class Initialized
DEBUG - 2013-11-15 21:28:04 --> Controller Class Initialized
DEBUG - 2013-11-15 21:28:04 --> Model Class Initialized
DEBUG - 2013-11-15 21:28:04 --> Model Class Initialized
DEBUG - 2013-11-15 21:28:04 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 21:28:04 --> after session initialization................
INFO  - 2013-11-15 21:28:04 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 21:28:04 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 21:28:04 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 21:28:04 --> inside retrieving locations 
INFO  - 2013-11-15 21:28:04 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 21:28:04 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 21:28:04 --> Final output sent to browser
DEBUG - 2013-11-15 21:28:04 --> Total execution time: 0.0624
DEBUG - 2013-11-15 21:29:12 --> Config Class Initialized
DEBUG - 2013-11-15 21:29:12 --> Hooks Class Initialized
DEBUG - 2013-11-15 21:29:12 --> Utf8 Class Initialized
DEBUG - 2013-11-15 21:29:12 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 21:29:12 --> URI Class Initialized
DEBUG - 2013-11-15 21:29:12 --> Router Class Initialized
DEBUG - 2013-11-15 21:29:12 --> Output Class Initialized
DEBUG - 2013-11-15 21:29:12 --> Security Class Initialized
DEBUG - 2013-11-15 21:29:12 --> Input Class Initialized
DEBUG - 2013-11-15 21:29:12 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 21:29:12 --> Language Class Initialized
DEBUG - 2013-11-15 21:29:12 --> Loader Class Initialized
DEBUG - 2013-11-15 21:29:12 --> Helper loaded: form_helper
DEBUG - 2013-11-15 21:29:12 --> Helper loaded: url_helper
DEBUG - 2013-11-15 21:29:12 --> Helper loaded: html_helper
DEBUG - 2013-11-15 21:29:12 --> Database Driver Class Initialized
DEBUG - 2013-11-15 21:29:12 --> Session Class Initialized
DEBUG - 2013-11-15 21:29:12 --> Helper loaded: string_helper
DEBUG - 2013-11-15 21:29:12 --> Session routines successfully run
DEBUG - 2013-11-15 21:29:12 --> Form Validation Class Initialized
DEBUG - 2013-11-15 21:29:12 --> Controller Class Initialized
DEBUG - 2013-11-15 21:29:12 --> Model Class Initialized
DEBUG - 2013-11-15 21:29:12 --> Model Class Initialized
DEBUG - 2013-11-15 21:29:12 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 21:29:12 --> after session initialization................
INFO  - 2013-11-15 21:29:12 --> last pharmacy id is 26
INFO  - 2013-11-15 21:29:12 --> Ajax retrieval ::::::::::===>SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` < 26
ORDER BY `p`.`id_pharmacy`, `p`.`name` desc
LIMIT 25
DEBUG - 2013-11-15 21:29:12 --> Final output sent to browser
DEBUG - 2013-11-15 21:29:12 --> Total execution time: 0.0540
DEBUG - 2013-11-15 21:29:15 --> Config Class Initialized
DEBUG - 2013-11-15 21:29:15 --> Hooks Class Initialized
DEBUG - 2013-11-15 21:29:15 --> Utf8 Class Initialized
DEBUG - 2013-11-15 21:29:15 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 21:29:15 --> URI Class Initialized
DEBUG - 2013-11-15 21:29:15 --> Router Class Initialized
DEBUG - 2013-11-15 21:29:15 --> Output Class Initialized
DEBUG - 2013-11-15 21:29:15 --> Security Class Initialized
DEBUG - 2013-11-15 21:29:15 --> Input Class Initialized
DEBUG - 2013-11-15 21:29:15 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 21:29:15 --> Language Class Initialized
DEBUG - 2013-11-15 21:29:15 --> Config Class Initialized
DEBUG - 2013-11-15 21:29:15 --> Hooks Class Initialized
DEBUG - 2013-11-15 21:29:15 --> Utf8 Class Initialized
DEBUG - 2013-11-15 21:29:15 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 21:29:15 --> Loader Class Initialized
DEBUG - 2013-11-15 21:29:15 --> URI Class Initialized
DEBUG - 2013-11-15 21:29:15 --> Router Class Initialized
DEBUG - 2013-11-15 21:29:15 --> Config Class Initialized
DEBUG - 2013-11-15 21:29:15 --> Hooks Class Initialized
DEBUG - 2013-11-15 21:29:15 --> Utf8 Class Initialized
DEBUG - 2013-11-15 21:29:15 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 21:29:15 --> Output Class Initialized
DEBUG - 2013-11-15 21:29:15 --> URI Class Initialized
DEBUG - 2013-11-15 21:29:15 --> Security Class Initialized
DEBUG - 2013-11-15 21:29:15 --> Router Class Initialized
DEBUG - 2013-11-15 21:29:15 --> Input Class Initialized
DEBUG - 2013-11-15 21:29:15 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 21:29:15 --> Language Class Initialized
DEBUG - 2013-11-15 21:29:15 --> Output Class Initialized
DEBUG - 2013-11-15 21:29:15 --> Security Class Initialized
DEBUG - 2013-11-15 21:29:15 --> Input Class Initialized
DEBUG - 2013-11-15 21:29:15 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 21:29:15 --> Loader Class Initialized
DEBUG - 2013-11-15 21:29:15 --> Language Class Initialized
DEBUG - 2013-11-15 21:29:15 --> Helper loaded: form_helper
DEBUG - 2013-11-15 21:29:15 --> Helper loaded: url_helper
DEBUG - 2013-11-15 21:29:15 --> Helper loaded: html_helper
DEBUG - 2013-11-15 21:29:15 --> Helper loaded: form_helper
DEBUG - 2013-11-15 21:29:15 --> Helper loaded: url_helper
DEBUG - 2013-11-15 21:29:15 --> Loader Class Initialized
DEBUG - 2013-11-15 21:29:15 --> Helper loaded: form_helper
DEBUG - 2013-11-15 21:29:15 --> Database Driver Class Initialized
DEBUG - 2013-11-15 21:29:15 --> Helper loaded: url_helper
DEBUG - 2013-11-15 21:29:15 --> Helper loaded: html_helper
DEBUG - 2013-11-15 21:29:15 --> Session Class Initialized
DEBUG - 2013-11-15 21:29:15 --> Helper loaded: string_helper
DEBUG - 2013-11-15 21:29:15 --> Session routines successfully run
DEBUG - 2013-11-15 21:29:15 --> Form Validation Class Initialized
DEBUG - 2013-11-15 21:29:15 --> Controller Class Initialized
DEBUG - 2013-11-15 21:29:15 --> Helper loaded: html_helper
DEBUG - 2013-11-15 21:29:15 --> Model Class Initialized
DEBUG - 2013-11-15 21:29:15 --> Database Driver Class Initialized
DEBUG - 2013-11-15 21:29:15 --> Model Class Initialized
DEBUG - 2013-11-15 21:29:15 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 21:29:15 --> after session initialization................
ERROR - 2013-11-15 21:29:15 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 21:29:15 --> Session Class Initialized
DEBUG - 2013-11-15 21:29:15 --> Database Driver Class Initialized
DEBUG - 2013-11-15 21:29:15 --> Helper loaded: string_helper
DEBUG - 2013-11-15 21:29:15 --> Session routines successfully run
DEBUG - 2013-11-15 21:29:15 --> Form Validation Class Initialized
DEBUG - 2013-11-15 21:29:15 --> Controller Class Initialized
DEBUG - 2013-11-15 21:29:15 --> Model Class Initialized
DEBUG - 2013-11-15 21:29:15 --> Model Class Initialized
DEBUG - 2013-11-15 21:29:15 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 21:29:15 --> after session initialization................
ERROR - 2013-11-15 21:29:15 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 21:29:15 --> Session Class Initialized
DEBUG - 2013-11-15 21:29:15 --> Helper loaded: string_helper
DEBUG - 2013-11-15 21:29:15 --> Session routines successfully run
DEBUG - 2013-11-15 21:29:15 --> Form Validation Class Initialized
DEBUG - 2013-11-15 21:29:15 --> Controller Class Initialized
DEBUG - 2013-11-15 21:29:15 --> Model Class Initialized
DEBUG - 2013-11-15 21:29:15 --> Model Class Initialized
DEBUG - 2013-11-15 21:29:15 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 21:29:15 --> after session initialization................
ERROR - 2013-11-15 21:29:15 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 21:30:43 --> Config Class Initialized
DEBUG - 2013-11-15 21:30:43 --> Hooks Class Initialized
DEBUG - 2013-11-15 21:30:43 --> Utf8 Class Initialized
DEBUG - 2013-11-15 21:30:43 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 21:30:43 --> URI Class Initialized
DEBUG - 2013-11-15 21:30:43 --> Router Class Initialized
DEBUG - 2013-11-15 21:30:43 --> Output Class Initialized
DEBUG - 2013-11-15 21:30:43 --> Security Class Initialized
DEBUG - 2013-11-15 21:30:43 --> Input Class Initialized
DEBUG - 2013-11-15 21:30:43 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 21:30:43 --> Language Class Initialized
DEBUG - 2013-11-15 21:30:43 --> Loader Class Initialized
DEBUG - 2013-11-15 21:30:43 --> Helper loaded: form_helper
DEBUG - 2013-11-15 21:30:43 --> Helper loaded: url_helper
DEBUG - 2013-11-15 21:30:43 --> Helper loaded: html_helper
DEBUG - 2013-11-15 21:30:43 --> Database Driver Class Initialized
DEBUG - 2013-11-15 21:30:43 --> Session Class Initialized
DEBUG - 2013-11-15 21:30:43 --> Helper loaded: string_helper
DEBUG - 2013-11-15 21:30:43 --> Session routines successfully run
DEBUG - 2013-11-15 21:30:43 --> Form Validation Class Initialized
DEBUG - 2013-11-15 21:30:43 --> Controller Class Initialized
DEBUG - 2013-11-15 21:30:43 --> Model Class Initialized
DEBUG - 2013-11-15 21:30:43 --> Model Class Initialized
DEBUG - 2013-11-15 21:30:43 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 21:30:43 --> after session initialization................
INFO  - 2013-11-15 21:30:43 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 21:30:43 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 21:30:43 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 21:30:43 --> inside retrieving locations 
INFO  - 2013-11-15 21:30:43 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 21:30:43 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 21:30:43 --> Final output sent to browser
DEBUG - 2013-11-15 21:30:43 --> Total execution time: 0.0624
DEBUG - 2013-11-15 21:30:47 --> Config Class Initialized
DEBUG - 2013-11-15 21:30:47 --> Hooks Class Initialized
DEBUG - 2013-11-15 21:30:47 --> Utf8 Class Initialized
DEBUG - 2013-11-15 21:30:47 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 21:30:47 --> URI Class Initialized
DEBUG - 2013-11-15 21:30:47 --> Router Class Initialized
DEBUG - 2013-11-15 21:30:47 --> Output Class Initialized
DEBUG - 2013-11-15 21:30:47 --> Security Class Initialized
DEBUG - 2013-11-15 21:30:47 --> Input Class Initialized
DEBUG - 2013-11-15 21:30:47 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 21:30:47 --> Language Class Initialized
DEBUG - 2013-11-15 21:30:47 --> Loader Class Initialized
DEBUG - 2013-11-15 21:30:47 --> Helper loaded: form_helper
DEBUG - 2013-11-15 21:30:47 --> Helper loaded: url_helper
DEBUG - 2013-11-15 21:30:47 --> Helper loaded: html_helper
DEBUG - 2013-11-15 21:30:47 --> Database Driver Class Initialized
DEBUG - 2013-11-15 21:30:47 --> Session Class Initialized
DEBUG - 2013-11-15 21:30:47 --> Helper loaded: string_helper
DEBUG - 2013-11-15 21:30:47 --> Session routines successfully run
DEBUG - 2013-11-15 21:30:47 --> Form Validation Class Initialized
DEBUG - 2013-11-15 21:30:47 --> Controller Class Initialized
DEBUG - 2013-11-15 21:30:47 --> Model Class Initialized
DEBUG - 2013-11-15 21:30:47 --> Model Class Initialized
DEBUG - 2013-11-15 21:30:47 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 21:30:47 --> after session initialization................
INFO  - 2013-11-15 21:30:47 --> last pharmacy id is 26
INFO  - 2013-11-15 21:30:47 --> Ajax retrieval ::::::::::===>SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` < 26
ORDER BY `p`.`id_pharmacy`, `p`.`name` desc
LIMIT 25
DEBUG - 2013-11-15 21:30:47 --> Final output sent to browser
DEBUG - 2013-11-15 21:30:47 --> Total execution time: 0.0468
DEBUG - 2013-11-15 21:30:49 --> Config Class Initialized
DEBUG - 2013-11-15 21:30:49 --> Hooks Class Initialized
DEBUG - 2013-11-15 21:30:49 --> Utf8 Class Initialized
DEBUG - 2013-11-15 21:30:49 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 21:30:49 --> URI Class Initialized
DEBUG - 2013-11-15 21:30:49 --> Router Class Initialized
DEBUG - 2013-11-15 21:30:49 --> Output Class Initialized
DEBUG - 2013-11-15 21:30:49 --> Security Class Initialized
DEBUG - 2013-11-15 21:30:49 --> Config Class Initialized
DEBUG - 2013-11-15 21:30:49 --> Hooks Class Initialized
DEBUG - 2013-11-15 21:30:49 --> Input Class Initialized
DEBUG - 2013-11-15 21:30:49 --> Utf8 Class Initialized
DEBUG - 2013-11-15 21:30:49 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 21:30:49 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 21:30:49 --> Language Class Initialized
DEBUG - 2013-11-15 21:30:49 --> Config Class Initialized
DEBUG - 2013-11-15 21:30:49 --> URI Class Initialized
DEBUG - 2013-11-15 21:30:49 --> Hooks Class Initialized
DEBUG - 2013-11-15 21:30:49 --> Utf8 Class Initialized
DEBUG - 2013-11-15 21:30:49 --> Router Class Initialized
DEBUG - 2013-11-15 21:30:49 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 21:30:49 --> URI Class Initialized
DEBUG - 2013-11-15 21:30:49 --> Loader Class Initialized
DEBUG - 2013-11-15 21:30:49 --> Output Class Initialized
DEBUG - 2013-11-15 21:30:49 --> Router Class Initialized
DEBUG - 2013-11-15 21:30:49 --> Security Class Initialized
DEBUG - 2013-11-15 21:30:49 --> Helper loaded: form_helper
DEBUG - 2013-11-15 21:30:49 --> Output Class Initialized
DEBUG - 2013-11-15 21:30:49 --> Input Class Initialized
DEBUG - 2013-11-15 21:30:49 --> Helper loaded: url_helper
DEBUG - 2013-11-15 21:30:49 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 21:30:49 --> Helper loaded: html_helper
DEBUG - 2013-11-15 21:30:49 --> Language Class Initialized
DEBUG - 2013-11-15 21:30:49 --> Security Class Initialized
DEBUG - 2013-11-15 21:30:49 --> Input Class Initialized
DEBUG - 2013-11-15 21:30:49 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 21:30:49 --> Language Class Initialized
DEBUG - 2013-11-15 21:30:49 --> Loader Class Initialized
DEBUG - 2013-11-15 21:30:49 --> Helper loaded: form_helper
DEBUG - 2013-11-15 21:30:49 --> Database Driver Class Initialized
DEBUG - 2013-11-15 21:30:49 --> Loader Class Initialized
DEBUG - 2013-11-15 21:30:49 --> Helper loaded: url_helper
DEBUG - 2013-11-15 21:30:49 --> Session Class Initialized
DEBUG - 2013-11-15 21:30:49 --> Helper loaded: html_helper
DEBUG - 2013-11-15 21:30:49 --> Helper loaded: form_helper
DEBUG - 2013-11-15 21:30:49 --> Helper loaded: string_helper
DEBUG - 2013-11-15 21:30:49 --> Session routines successfully run
DEBUG - 2013-11-15 21:30:49 --> Helper loaded: url_helper
DEBUG - 2013-11-15 21:30:49 --> Helper loaded: html_helper
DEBUG - 2013-11-15 21:30:49 --> Form Validation Class Initialized
DEBUG - 2013-11-15 21:30:49 --> Controller Class Initialized
DEBUG - 2013-11-15 21:30:49 --> Model Class Initialized
DEBUG - 2013-11-15 21:30:49 --> Database Driver Class Initialized
DEBUG - 2013-11-15 21:30:49 --> Model Class Initialized
DEBUG - 2013-11-15 21:30:49 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 21:30:49 --> after session initialization................
ERROR - 2013-11-15 21:30:49 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 21:30:49 --> Session Class Initialized
DEBUG - 2013-11-15 21:30:49 --> Database Driver Class Initialized
DEBUG - 2013-11-15 21:30:49 --> Helper loaded: string_helper
DEBUG - 2013-11-15 21:30:49 --> Session routines successfully run
DEBUG - 2013-11-15 21:30:49 --> Session Class Initialized
DEBUG - 2013-11-15 21:30:49 --> Form Validation Class Initialized
DEBUG - 2013-11-15 21:30:49 --> Helper loaded: string_helper
DEBUG - 2013-11-15 21:30:49 --> Controller Class Initialized
DEBUG - 2013-11-15 21:30:49 --> Session routines successfully run
DEBUG - 2013-11-15 21:30:49 --> Model Class Initialized
DEBUG - 2013-11-15 21:30:49 --> Form Validation Class Initialized
DEBUG - 2013-11-15 21:30:49 --> Controller Class Initialized
DEBUG - 2013-11-15 21:30:49 --> Model Class Initialized
DEBUG - 2013-11-15 21:30:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2013-11-15 21:30:49 --> Model Class Initialized
INFO  - 2013-11-15 21:30:49 --> after session initialization................
ERROR - 2013-11-15 21:30:49 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 21:30:49 --> Model Class Initialized
DEBUG - 2013-11-15 21:30:49 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 21:30:49 --> after session initialization................
ERROR - 2013-11-15 21:30:49 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 21:32:41 --> Config Class Initialized
DEBUG - 2013-11-15 21:32:41 --> Hooks Class Initialized
DEBUG - 2013-11-15 21:32:41 --> Utf8 Class Initialized
DEBUG - 2013-11-15 21:32:41 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 21:32:41 --> URI Class Initialized
DEBUG - 2013-11-15 21:32:41 --> Router Class Initialized
DEBUG - 2013-11-15 21:32:41 --> Output Class Initialized
DEBUG - 2013-11-15 21:32:41 --> Security Class Initialized
DEBUG - 2013-11-15 21:32:41 --> Input Class Initialized
DEBUG - 2013-11-15 21:32:41 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 21:32:41 --> Language Class Initialized
DEBUG - 2013-11-15 21:32:41 --> Loader Class Initialized
DEBUG - 2013-11-15 21:32:41 --> Helper loaded: form_helper
DEBUG - 2013-11-15 21:32:41 --> Helper loaded: url_helper
DEBUG - 2013-11-15 21:32:41 --> Helper loaded: html_helper
DEBUG - 2013-11-15 21:32:41 --> Database Driver Class Initialized
DEBUG - 2013-11-15 21:32:41 --> Session Class Initialized
DEBUG - 2013-11-15 21:32:41 --> Helper loaded: string_helper
DEBUG - 2013-11-15 21:32:41 --> Session routines successfully run
DEBUG - 2013-11-15 21:32:41 --> Form Validation Class Initialized
DEBUG - 2013-11-15 21:32:41 --> Controller Class Initialized
DEBUG - 2013-11-15 21:32:41 --> Model Class Initialized
DEBUG - 2013-11-15 21:32:41 --> Model Class Initialized
DEBUG - 2013-11-15 21:32:41 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 21:32:41 --> after session initialization................
INFO  - 2013-11-15 21:32:41 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 21:32:41 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 21:32:41 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 21:32:41 --> inside retrieving locations 
INFO  - 2013-11-15 21:32:41 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 21:32:41 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 21:32:41 --> Final output sent to browser
DEBUG - 2013-11-15 21:32:41 --> Total execution time: 0.0624
DEBUG - 2013-11-15 21:32:46 --> Config Class Initialized
DEBUG - 2013-11-15 21:32:46 --> Hooks Class Initialized
DEBUG - 2013-11-15 21:32:46 --> Utf8 Class Initialized
DEBUG - 2013-11-15 21:32:46 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 21:32:46 --> URI Class Initialized
DEBUG - 2013-11-15 21:32:46 --> Router Class Initialized
DEBUG - 2013-11-15 21:32:46 --> Output Class Initialized
DEBUG - 2013-11-15 21:32:46 --> Security Class Initialized
DEBUG - 2013-11-15 21:32:46 --> Input Class Initialized
DEBUG - 2013-11-15 21:32:46 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 21:32:46 --> Language Class Initialized
DEBUG - 2013-11-15 21:32:46 --> Loader Class Initialized
DEBUG - 2013-11-15 21:32:46 --> Helper loaded: form_helper
DEBUG - 2013-11-15 21:32:46 --> Helper loaded: url_helper
DEBUG - 2013-11-15 21:32:46 --> Helper loaded: html_helper
DEBUG - 2013-11-15 21:32:46 --> Database Driver Class Initialized
DEBUG - 2013-11-15 21:32:46 --> Session Class Initialized
DEBUG - 2013-11-15 21:32:46 --> Helper loaded: string_helper
DEBUG - 2013-11-15 21:32:46 --> Session routines successfully run
DEBUG - 2013-11-15 21:32:46 --> Form Validation Class Initialized
DEBUG - 2013-11-15 21:32:46 --> Controller Class Initialized
DEBUG - 2013-11-15 21:32:46 --> Model Class Initialized
DEBUG - 2013-11-15 21:32:46 --> Model Class Initialized
DEBUG - 2013-11-15 21:32:46 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 21:32:46 --> after session initialization................
INFO  - 2013-11-15 21:32:46 --> last pharmacy id is 26
INFO  - 2013-11-15 21:32:46 --> Ajax retrieval ::::::::::===>SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` < 26
ORDER BY `p`.`id_pharmacy`, `p`.`name` desc
LIMIT 25
DEBUG - 2013-11-15 21:32:46 --> Final output sent to browser
DEBUG - 2013-11-15 21:32:46 --> Total execution time: 0.0624
DEBUG - 2013-11-15 21:32:49 --> Config Class Initialized
DEBUG - 2013-11-15 21:32:49 --> Hooks Class Initialized
DEBUG - 2013-11-15 21:32:49 --> Utf8 Class Initialized
DEBUG - 2013-11-15 21:32:49 --> Config Class Initialized
DEBUG - 2013-11-15 21:32:49 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 21:32:49 --> Hooks Class Initialized
DEBUG - 2013-11-15 21:32:49 --> URI Class Initialized
DEBUG - 2013-11-15 21:32:49 --> Router Class Initialized
DEBUG - 2013-11-15 21:32:49 --> Config Class Initialized
DEBUG - 2013-11-15 21:32:49 --> Utf8 Class Initialized
DEBUG - 2013-11-15 21:32:49 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 21:32:49 --> Hooks Class Initialized
DEBUG - 2013-11-15 21:32:49 --> URI Class Initialized
DEBUG - 2013-11-15 21:32:49 --> Output Class Initialized
DEBUG - 2013-11-15 21:32:49 --> Utf8 Class Initialized
DEBUG - 2013-11-15 21:32:49 --> Router Class Initialized
DEBUG - 2013-11-15 21:32:49 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 21:32:49 --> Security Class Initialized
DEBUG - 2013-11-15 21:32:49 --> URI Class Initialized
DEBUG - 2013-11-15 21:32:49 --> Input Class Initialized
DEBUG - 2013-11-15 21:32:49 --> Output Class Initialized
DEBUG - 2013-11-15 21:32:49 --> Router Class Initialized
DEBUG - 2013-11-15 21:32:49 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 21:32:49 --> Language Class Initialized
DEBUG - 2013-11-15 21:32:49 --> Security Class Initialized
DEBUG - 2013-11-15 21:32:49 --> Output Class Initialized
DEBUG - 2013-11-15 21:32:49 --> Input Class Initialized
DEBUG - 2013-11-15 21:32:49 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 21:32:49 --> Language Class Initialized
DEBUG - 2013-11-15 21:32:49 --> Loader Class Initialized
DEBUG - 2013-11-15 21:32:49 --> Security Class Initialized
DEBUG - 2013-11-15 21:32:49 --> Helper loaded: form_helper
DEBUG - 2013-11-15 21:32:49 --> Loader Class Initialized
DEBUG - 2013-11-15 21:32:49 --> Helper loaded: url_helper
DEBUG - 2013-11-15 21:32:49 --> Input Class Initialized
DEBUG - 2013-11-15 21:32:49 --> Helper loaded: html_helper
DEBUG - 2013-11-15 21:32:49 --> Helper loaded: form_helper
DEBUG - 2013-11-15 21:32:49 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 21:32:49 --> Helper loaded: url_helper
DEBUG - 2013-11-15 21:32:49 --> Helper loaded: html_helper
DEBUG - 2013-11-15 21:32:49 --> Language Class Initialized
DEBUG - 2013-11-15 21:32:49 --> Database Driver Class Initialized
DEBUG - 2013-11-15 21:32:49 --> Loader Class Initialized
DEBUG - 2013-11-15 21:32:49 --> Database Driver Class Initialized
DEBUG - 2013-11-15 21:32:49 --> Session Class Initialized
DEBUG - 2013-11-15 21:32:49 --> Helper loaded: string_helper
DEBUG - 2013-11-15 21:32:49 --> Session routines successfully run
DEBUG - 2013-11-15 21:32:49 --> Helper loaded: form_helper
DEBUG - 2013-11-15 21:32:49 --> Session Class Initialized
DEBUG - 2013-11-15 21:32:49 --> Form Validation Class Initialized
DEBUG - 2013-11-15 21:32:49 --> Controller Class Initialized
DEBUG - 2013-11-15 21:32:49 --> Helper loaded: string_helper
DEBUG - 2013-11-15 21:32:49 --> Session routines successfully run
DEBUG - 2013-11-15 21:32:49 --> Model Class Initialized
DEBUG - 2013-11-15 21:32:49 --> Helper loaded: url_helper
DEBUG - 2013-11-15 21:32:49 --> Model Class Initialized
DEBUG - 2013-11-15 21:32:49 --> Form Validation Class Initialized
DEBUG - 2013-11-15 21:32:49 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 21:32:49 --> after session initialization................
DEBUG - 2013-11-15 21:32:49 --> Helper loaded: html_helper
DEBUG - 2013-11-15 21:32:49 --> Controller Class Initialized
ERROR - 2013-11-15 21:32:49 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 21:32:49 --> Model Class Initialized
DEBUG - 2013-11-15 21:32:49 --> Model Class Initialized
DEBUG - 2013-11-15 21:32:49 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 21:32:49 --> after session initialization................
ERROR - 2013-11-15 21:32:49 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 21:32:49 --> Database Driver Class Initialized
DEBUG - 2013-11-15 21:32:49 --> Session Class Initialized
DEBUG - 2013-11-15 21:32:49 --> Helper loaded: string_helper
DEBUG - 2013-11-15 21:32:49 --> Session routines successfully run
DEBUG - 2013-11-15 21:32:49 --> Form Validation Class Initialized
DEBUG - 2013-11-15 21:32:49 --> Controller Class Initialized
DEBUG - 2013-11-15 21:32:49 --> Model Class Initialized
DEBUG - 2013-11-15 21:32:49 --> Model Class Initialized
DEBUG - 2013-11-15 21:32:49 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 21:32:49 --> after session initialization................
ERROR - 2013-11-15 21:32:49 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 21:42:24 --> Config Class Initialized
DEBUG - 2013-11-15 21:42:24 --> Hooks Class Initialized
DEBUG - 2013-11-15 21:42:24 --> Utf8 Class Initialized
DEBUG - 2013-11-15 21:42:24 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 21:42:24 --> URI Class Initialized
DEBUG - 2013-11-15 21:42:24 --> Router Class Initialized
DEBUG - 2013-11-15 21:42:24 --> Output Class Initialized
DEBUG - 2013-11-15 21:42:24 --> Security Class Initialized
DEBUG - 2013-11-15 21:42:24 --> Input Class Initialized
DEBUG - 2013-11-15 21:42:24 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 21:42:24 --> Language Class Initialized
DEBUG - 2013-11-15 21:42:24 --> Loader Class Initialized
DEBUG - 2013-11-15 21:42:24 --> Helper loaded: form_helper
DEBUG - 2013-11-15 21:42:24 --> Helper loaded: url_helper
DEBUG - 2013-11-15 21:42:24 --> Helper loaded: html_helper
DEBUG - 2013-11-15 21:42:24 --> Database Driver Class Initialized
DEBUG - 2013-11-15 21:42:24 --> Session Class Initialized
DEBUG - 2013-11-15 21:42:24 --> Helper loaded: string_helper
DEBUG - 2013-11-15 21:42:24 --> Session routines successfully run
DEBUG - 2013-11-15 21:42:24 --> Form Validation Class Initialized
DEBUG - 2013-11-15 21:42:24 --> Controller Class Initialized
DEBUG - 2013-11-15 21:42:24 --> Model Class Initialized
DEBUG - 2013-11-15 21:42:24 --> Model Class Initialized
DEBUG - 2013-11-15 21:42:24 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 21:42:24 --> after session initialization................
INFO  - 2013-11-15 21:42:24 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 21:42:24 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 21:42:24 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 21:42:24 --> inside retrieving locations 
INFO  - 2013-11-15 21:42:24 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 21:42:24 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 21:42:24 --> Final output sent to browser
DEBUG - 2013-11-15 21:42:24 --> Total execution time: 0.0624
DEBUG - 2013-11-15 21:42:43 --> Config Class Initialized
DEBUG - 2013-11-15 21:42:43 --> Hooks Class Initialized
DEBUG - 2013-11-15 21:42:43 --> Utf8 Class Initialized
DEBUG - 2013-11-15 21:42:43 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 21:42:43 --> URI Class Initialized
DEBUG - 2013-11-15 21:42:43 --> Router Class Initialized
DEBUG - 2013-11-15 21:42:43 --> Output Class Initialized
DEBUG - 2013-11-15 21:42:43 --> Security Class Initialized
DEBUG - 2013-11-15 21:42:43 --> Input Class Initialized
DEBUG - 2013-11-15 21:42:43 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 21:42:43 --> Language Class Initialized
DEBUG - 2013-11-15 21:42:43 --> Loader Class Initialized
DEBUG - 2013-11-15 21:42:43 --> Helper loaded: form_helper
DEBUG - 2013-11-15 21:42:43 --> Helper loaded: url_helper
DEBUG - 2013-11-15 21:42:43 --> Helper loaded: html_helper
DEBUG - 2013-11-15 21:42:43 --> Database Driver Class Initialized
DEBUG - 2013-11-15 21:42:43 --> Session Class Initialized
DEBUG - 2013-11-15 21:42:43 --> Helper loaded: string_helper
DEBUG - 2013-11-15 21:42:43 --> Session routines successfully run
DEBUG - 2013-11-15 21:42:43 --> Form Validation Class Initialized
DEBUG - 2013-11-15 21:42:43 --> Controller Class Initialized
DEBUG - 2013-11-15 21:42:43 --> Model Class Initialized
DEBUG - 2013-11-15 21:42:43 --> Model Class Initialized
DEBUG - 2013-11-15 21:42:43 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 21:42:43 --> after session initialization................
INFO  - 2013-11-15 21:42:43 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 21:42:43 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 21:42:43 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 21:42:43 --> inside retrieving locations 
INFO  - 2013-11-15 21:42:43 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 21:42:43 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 21:42:43 --> Final output sent to browser
DEBUG - 2013-11-15 21:42:43 --> Total execution time: 0.0468
DEBUG - 2013-11-15 21:43:00 --> Config Class Initialized
DEBUG - 2013-11-15 21:43:00 --> Hooks Class Initialized
DEBUG - 2013-11-15 21:43:00 --> Utf8 Class Initialized
DEBUG - 2013-11-15 21:43:00 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 21:43:00 --> URI Class Initialized
DEBUG - 2013-11-15 21:43:00 --> Router Class Initialized
DEBUG - 2013-11-15 21:43:00 --> Output Class Initialized
DEBUG - 2013-11-15 21:43:00 --> Security Class Initialized
DEBUG - 2013-11-15 21:43:00 --> Input Class Initialized
DEBUG - 2013-11-15 21:43:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 21:43:00 --> Language Class Initialized
DEBUG - 2013-11-15 21:43:00 --> Loader Class Initialized
DEBUG - 2013-11-15 21:43:00 --> Helper loaded: form_helper
DEBUG - 2013-11-15 21:43:00 --> Helper loaded: url_helper
DEBUG - 2013-11-15 21:43:00 --> Helper loaded: html_helper
DEBUG - 2013-11-15 21:43:00 --> Database Driver Class Initialized
DEBUG - 2013-11-15 21:43:00 --> Session Class Initialized
DEBUG - 2013-11-15 21:43:00 --> Helper loaded: string_helper
DEBUG - 2013-11-15 21:43:00 --> Session routines successfully run
DEBUG - 2013-11-15 21:43:00 --> Form Validation Class Initialized
DEBUG - 2013-11-15 21:43:00 --> Controller Class Initialized
DEBUG - 2013-11-15 21:43:00 --> Model Class Initialized
DEBUG - 2013-11-15 21:43:00 --> Model Class Initialized
DEBUG - 2013-11-15 21:43:00 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 21:43:00 --> after session initialization................
INFO  - 2013-11-15 21:43:00 --> inside rays login auth.............sys_admin/user_authorization/redirecttorays
INFO  - 2013-11-15 21:43:00 --> inside rays login auth.............sys_admin/user_authorization/redirecttorays
DEBUG - 2013-11-15 21:43:00 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-11-15 21:43:00 --> XSS Filtering completed
DEBUG - 2013-11-15 21:43:00 --> XSS Filtering completed
INFO  - 2013-11-15 21:43:00 --> before getting the relation of member............6
INFO  - 2013-11-15 21:43:00 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-11-15 21:43:00 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-15 21:43:00 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-11-15 21:43:00 --> inside retrieving vacancy for member
INFO  - 2013-11-15 21:43:00 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-11-15 21:43:00 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-15 21:43:00 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-11-15 21:43:00 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-11-15 21:43:00 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-15 21:43:00 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-15 21:43:00 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-11-15 21:43:00 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-11-15 21:43:00 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-11-15 21:43:00 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-11-15 21:43:00 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-11-15 21:43:00 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-11-15 21:43:00 --> Final output sent to browser
DEBUG - 2013-11-15 21:43:00 --> Total execution time: 0.0936
DEBUG - 2013-11-15 21:43:00 --> Config Class Initialized
DEBUG - 2013-11-15 21:43:00 --> Hooks Class Initialized
DEBUG - 2013-11-15 21:43:00 --> Utf8 Class Initialized
DEBUG - 2013-11-15 21:43:00 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 21:43:00 --> URI Class Initialized
DEBUG - 2013-11-15 21:43:00 --> Router Class Initialized
DEBUG - 2013-11-15 21:43:00 --> Output Class Initialized
DEBUG - 2013-11-15 21:43:00 --> Security Class Initialized
DEBUG - 2013-11-15 21:43:00 --> Input Class Initialized
DEBUG - 2013-11-15 21:43:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 21:43:00 --> Language Class Initialized
DEBUG - 2013-11-15 21:43:00 --> Loader Class Initialized
DEBUG - 2013-11-15 21:43:00 --> Helper loaded: form_helper
DEBUG - 2013-11-15 21:43:00 --> Helper loaded: url_helper
DEBUG - 2013-11-15 21:43:00 --> Helper loaded: html_helper
DEBUG - 2013-11-15 21:43:00 --> Database Driver Class Initialized
DEBUG - 2013-11-15 21:43:00 --> Session Class Initialized
DEBUG - 2013-11-15 21:43:00 --> Helper loaded: string_helper
DEBUG - 2013-11-15 21:43:00 --> Session routines successfully run
DEBUG - 2013-11-15 21:43:00 --> Form Validation Class Initialized
DEBUG - 2013-11-15 21:43:00 --> Controller Class Initialized
DEBUG - 2013-11-15 21:43:00 --> Model Class Initialized
DEBUG - 2013-11-15 21:43:00 --> Model Class Initialized
DEBUG - 2013-11-15 21:43:00 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 21:43:00 --> after session initialization................
ERROR - 2013-11-15 21:43:00 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-15 21:43:00 --> Config Class Initialized
DEBUG - 2013-11-15 21:43:00 --> Hooks Class Initialized
DEBUG - 2013-11-15 21:43:00 --> Utf8 Class Initialized
DEBUG - 2013-11-15 21:43:00 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 21:43:00 --> URI Class Initialized
DEBUG - 2013-11-15 21:43:00 --> Router Class Initialized
ERROR - 2013-11-15 21:43:00 --> 404 Page Not Found --> css
DEBUG - 2013-11-15 21:43:01 --> Config Class Initialized
DEBUG - 2013-11-15 21:43:01 --> Hooks Class Initialized
DEBUG - 2013-11-15 21:43:01 --> Utf8 Class Initialized
DEBUG - 2013-11-15 21:43:01 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 21:43:01 --> URI Class Initialized
DEBUG - 2013-11-15 21:43:01 --> Router Class Initialized
DEBUG - 2013-11-15 21:43:01 --> Output Class Initialized
DEBUG - 2013-11-15 21:43:01 --> Security Class Initialized
DEBUG - 2013-11-15 21:43:01 --> Input Class Initialized
DEBUG - 2013-11-15 21:43:01 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 21:43:01 --> Language Class Initialized
DEBUG - 2013-11-15 21:43:01 --> Loader Class Initialized
DEBUG - 2013-11-15 21:43:01 --> Helper loaded: form_helper
DEBUG - 2013-11-15 21:43:01 --> Helper loaded: url_helper
DEBUG - 2013-11-15 21:43:01 --> Helper loaded: html_helper
DEBUG - 2013-11-15 21:43:01 --> Database Driver Class Initialized
DEBUG - 2013-11-15 21:43:01 --> Session Class Initialized
DEBUG - 2013-11-15 21:43:01 --> Helper loaded: string_helper
DEBUG - 2013-11-15 21:43:01 --> Session routines successfully run
DEBUG - 2013-11-15 21:43:01 --> Form Validation Class Initialized
DEBUG - 2013-11-15 21:43:01 --> Controller Class Initialized
DEBUG - 2013-11-15 21:43:01 --> Model Class Initialized
DEBUG - 2013-11-15 21:43:01 --> Model Class Initialized
DEBUG - 2013-11-15 21:43:01 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 21:43:01 --> after session initialization................
INFO  - 2013-11-15 21:43:01 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 21:43:01 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 21:43:01 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 21:43:01 --> inside retrieving locations 
INFO  - 2013-11-15 21:43:01 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 21:43:01 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 21:43:01 --> Final output sent to browser
DEBUG - 2013-11-15 21:43:01 --> Total execution time: 0.0624
DEBUG - 2013-11-15 23:15:28 --> Config Class Initialized
DEBUG - 2013-11-15 23:15:28 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:15:28 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:15:28 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:15:28 --> URI Class Initialized
DEBUG - 2013-11-15 23:15:28 --> Router Class Initialized
DEBUG - 2013-11-15 23:15:28 --> Output Class Initialized
DEBUG - 2013-11-15 23:15:28 --> Security Class Initialized
DEBUG - 2013-11-15 23:15:28 --> Input Class Initialized
DEBUG - 2013-11-15 23:15:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:15:28 --> Language Class Initialized
DEBUG - 2013-11-15 23:15:28 --> Loader Class Initialized
DEBUG - 2013-11-15 23:15:28 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:15:28 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:15:28 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:15:28 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:15:28 --> Session Class Initialized
DEBUG - 2013-11-15 23:15:28 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:15:28 --> Session routines successfully run
DEBUG - 2013-11-15 23:15:28 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:15:28 --> Controller Class Initialized
DEBUG - 2013-11-15 23:15:28 --> Model Class Initialized
DEBUG - 2013-11-15 23:15:28 --> Model Class Initialized
DEBUG - 2013-11-15 23:15:28 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:15:28 --> after session initialization................
INFO  - 2013-11-15 23:15:28 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 23:15:28 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 23:15:28 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 23:15:28 --> inside retrieving locations 
INFO  - 2013-11-15 23:15:28 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 23:15:28 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 23:15:28 --> Final output sent to browser
DEBUG - 2013-11-15 23:15:28 --> Total execution time: 0.0624
DEBUG - 2013-11-15 23:15:33 --> Config Class Initialized
DEBUG - 2013-11-15 23:15:33 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:15:33 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:15:33 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:15:33 --> URI Class Initialized
DEBUG - 2013-11-15 23:15:33 --> Router Class Initialized
DEBUG - 2013-11-15 23:15:33 --> Output Class Initialized
DEBUG - 2013-11-15 23:15:33 --> Security Class Initialized
DEBUG - 2013-11-15 23:15:33 --> Input Class Initialized
DEBUG - 2013-11-15 23:15:33 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:15:33 --> Language Class Initialized
DEBUG - 2013-11-15 23:15:33 --> Loader Class Initialized
DEBUG - 2013-11-15 23:15:33 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:15:33 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:15:33 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:15:33 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:15:33 --> Session Class Initialized
DEBUG - 2013-11-15 23:15:33 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:15:33 --> Session routines successfully run
DEBUG - 2013-11-15 23:15:33 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:15:33 --> Controller Class Initialized
DEBUG - 2013-11-15 23:15:33 --> Model Class Initialized
DEBUG - 2013-11-15 23:15:33 --> Model Class Initialized
DEBUG - 2013-11-15 23:15:33 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:15:33 --> after session initialization................
INFO  - 2013-11-15 23:15:33 --> last pharmacy id is 26
INFO  - 2013-11-15 23:15:33 --> Ajax retrieval ::::::::::===>SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` < 26
ORDER BY `p`.`id_pharmacy`, `p`.`name` desc
LIMIT 25
DEBUG - 2013-11-15 23:15:33 --> Final output sent to browser
DEBUG - 2013-11-15 23:15:33 --> Total execution time: 0.0624
DEBUG - 2013-11-15 23:15:37 --> Config Class Initialized
DEBUG - 2013-11-15 23:15:37 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:15:37 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:15:37 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:15:37 --> URI Class Initialized
DEBUG - 2013-11-15 23:15:37 --> Router Class Initialized
DEBUG - 2013-11-15 23:15:37 --> Output Class Initialized
DEBUG - 2013-11-15 23:15:37 --> Security Class Initialized
DEBUG - 2013-11-15 23:15:37 --> Input Class Initialized
DEBUG - 2013-11-15 23:15:37 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:15:37 --> Language Class Initialized
DEBUG - 2013-11-15 23:15:37 --> Loader Class Initialized
DEBUG - 2013-11-15 23:15:37 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:15:37 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:15:37 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:15:37 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:15:37 --> Session Class Initialized
DEBUG - 2013-11-15 23:15:37 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:15:37 --> Session routines successfully run
DEBUG - 2013-11-15 23:15:37 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:15:37 --> Controller Class Initialized
DEBUG - 2013-11-15 23:15:37 --> Model Class Initialized
DEBUG - 2013-11-15 23:15:37 --> Model Class Initialized
DEBUG - 2013-11-15 23:15:37 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:15:37 --> after session initialization................
INFO  - 2013-11-15 23:15:37 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 23:15:37 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 23:15:37 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 23:15:37 --> inside retrieving locations 
INFO  - 2013-11-15 23:15:37 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 23:15:37 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 23:15:37 --> Final output sent to browser
DEBUG - 2013-11-15 23:15:37 --> Total execution time: 0.0624
DEBUG - 2013-11-15 23:15:46 --> Config Class Initialized
DEBUG - 2013-11-15 23:15:46 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:15:46 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:15:46 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:15:46 --> URI Class Initialized
DEBUG - 2013-11-15 23:15:46 --> Router Class Initialized
DEBUG - 2013-11-15 23:15:46 --> Output Class Initialized
DEBUG - 2013-11-15 23:15:46 --> Security Class Initialized
DEBUG - 2013-11-15 23:15:46 --> Input Class Initialized
DEBUG - 2013-11-15 23:15:46 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:15:46 --> Language Class Initialized
DEBUG - 2013-11-15 23:15:46 --> Loader Class Initialized
DEBUG - 2013-11-15 23:15:46 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:15:46 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:15:46 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:15:46 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:15:46 --> Session Class Initialized
DEBUG - 2013-11-15 23:15:46 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:15:46 --> Session routines successfully run
DEBUG - 2013-11-15 23:15:46 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:15:46 --> Controller Class Initialized
DEBUG - 2013-11-15 23:15:46 --> Model Class Initialized
DEBUG - 2013-11-15 23:15:46 --> Model Class Initialized
DEBUG - 2013-11-15 23:15:46 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:15:46 --> after session initialization................
INFO  - 2013-11-15 23:15:46 --> last pharmacy id is 26
INFO  - 2013-11-15 23:15:46 --> Ajax retrieval ::::::::::===>SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` < 26
ORDER BY `p`.`id_pharmacy`, `p`.`name` desc
LIMIT 25
DEBUG - 2013-11-15 23:15:46 --> Final output sent to browser
DEBUG - 2013-11-15 23:15:46 --> Total execution time: 0.0468
DEBUG - 2013-11-15 23:15:48 --> Config Class Initialized
DEBUG - 2013-11-15 23:15:48 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:15:48 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:15:48 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:15:48 --> URI Class Initialized
DEBUG - 2013-11-15 23:15:48 --> Router Class Initialized
DEBUG - 2013-11-15 23:15:48 --> Output Class Initialized
DEBUG - 2013-11-15 23:15:48 --> Security Class Initialized
DEBUG - 2013-11-15 23:15:48 --> Input Class Initialized
DEBUG - 2013-11-15 23:15:48 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:15:48 --> Language Class Initialized
DEBUG - 2013-11-15 23:15:48 --> Loader Class Initialized
DEBUG - 2013-11-15 23:15:48 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:15:48 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:15:48 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:15:48 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:15:48 --> Session Class Initialized
DEBUG - 2013-11-15 23:15:48 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:15:48 --> Session routines successfully run
DEBUG - 2013-11-15 23:15:48 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:15:48 --> Controller Class Initialized
DEBUG - 2013-11-15 23:15:48 --> Model Class Initialized
DEBUG - 2013-11-15 23:15:48 --> Model Class Initialized
DEBUG - 2013-11-15 23:15:48 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:15:48 --> after session initialization................
INFO  - 2013-11-15 23:15:48 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 23:15:48 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 23:15:48 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 23:15:48 --> inside retrieving locations 
INFO  - 2013-11-15 23:15:48 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 23:15:48 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 23:15:48 --> Final output sent to browser
DEBUG - 2013-11-15 23:15:48 --> Total execution time: 0.0624
DEBUG - 2013-11-15 23:16:16 --> Config Class Initialized
DEBUG - 2013-11-15 23:16:16 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:16:16 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:16:16 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:16:16 --> URI Class Initialized
DEBUG - 2013-11-15 23:16:16 --> Router Class Initialized
DEBUG - 2013-11-15 23:16:16 --> Output Class Initialized
DEBUG - 2013-11-15 23:16:16 --> Security Class Initialized
DEBUG - 2013-11-15 23:16:16 --> Input Class Initialized
DEBUG - 2013-11-15 23:16:16 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:16:16 --> Language Class Initialized
DEBUG - 2013-11-15 23:16:16 --> Loader Class Initialized
DEBUG - 2013-11-15 23:16:16 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:16:16 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:16:16 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:16:16 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:16:16 --> Session Class Initialized
DEBUG - 2013-11-15 23:16:16 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:16:16 --> Session routines successfully run
DEBUG - 2013-11-15 23:16:16 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:16:16 --> Controller Class Initialized
DEBUG - 2013-11-15 23:16:16 --> Model Class Initialized
DEBUG - 2013-11-15 23:16:16 --> Model Class Initialized
DEBUG - 2013-11-15 23:16:16 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:16:16 --> after session initialization................
INFO  - 2013-11-15 23:16:16 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>7
INFO  - 2013-11-15 23:16:16 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` =  '7'
DEBUG - 2013-11-15 23:16:16 --> Final output sent to browser
DEBUG - 2013-11-15 23:16:16 --> Total execution time: 0.0468
DEBUG - 2013-11-15 23:16:18 --> Config Class Initialized
DEBUG - 2013-11-15 23:16:18 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:16:18 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:16:18 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:16:18 --> URI Class Initialized
DEBUG - 2013-11-15 23:16:18 --> Router Class Initialized
DEBUG - 2013-11-15 23:16:18 --> Output Class Initialized
DEBUG - 2013-11-15 23:16:18 --> Security Class Initialized
DEBUG - 2013-11-15 23:16:18 --> Input Class Initialized
DEBUG - 2013-11-15 23:16:18 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:16:18 --> Language Class Initialized
DEBUG - 2013-11-15 23:16:18 --> Loader Class Initialized
DEBUG - 2013-11-15 23:16:18 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:16:18 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:16:18 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:16:18 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:16:18 --> Session Class Initialized
DEBUG - 2013-11-15 23:16:18 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:16:18 --> Session routines successfully run
DEBUG - 2013-11-15 23:16:18 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:16:18 --> Controller Class Initialized
DEBUG - 2013-11-15 23:16:18 --> Model Class Initialized
DEBUG - 2013-11-15 23:16:18 --> Model Class Initialized
DEBUG - 2013-11-15 23:16:18 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:16:18 --> after session initialization................
INFO  - 2013-11-15 23:16:18 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 23:16:18 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 23:16:18 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 23:16:18 --> inside retrieving locations 
INFO  - 2013-11-15 23:16:18 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 23:16:18 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 23:16:18 --> Final output sent to browser
DEBUG - 2013-11-15 23:16:18 --> Total execution time: 0.0468
DEBUG - 2013-11-15 23:16:25 --> Config Class Initialized
DEBUG - 2013-11-15 23:16:25 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:16:25 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:16:25 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:16:25 --> URI Class Initialized
DEBUG - 2013-11-15 23:16:25 --> Router Class Initialized
DEBUG - 2013-11-15 23:16:25 --> Output Class Initialized
DEBUG - 2013-11-15 23:16:25 --> Security Class Initialized
DEBUG - 2013-11-15 23:16:25 --> Input Class Initialized
DEBUG - 2013-11-15 23:16:25 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:16:25 --> Language Class Initialized
DEBUG - 2013-11-15 23:16:25 --> Loader Class Initialized
DEBUG - 2013-11-15 23:16:25 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:16:25 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:16:25 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:16:25 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:16:25 --> Session Class Initialized
DEBUG - 2013-11-15 23:16:25 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:16:25 --> Session routines successfully run
DEBUG - 2013-11-15 23:16:25 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:16:25 --> Controller Class Initialized
DEBUG - 2013-11-15 23:16:25 --> Model Class Initialized
DEBUG - 2013-11-15 23:16:25 --> Model Class Initialized
DEBUG - 2013-11-15 23:16:25 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:16:25 --> after session initialization................
INFO  - 2013-11-15 23:16:25 --> last pharmacy id is 26
INFO  - 2013-11-15 23:16:25 --> Ajax retrieval ::::::::::===>SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` < 26
ORDER BY `p`.`id_pharmacy`, `p`.`name` desc
LIMIT 25
DEBUG - 2013-11-15 23:16:25 --> Final output sent to browser
DEBUG - 2013-11-15 23:16:25 --> Total execution time: 0.0468
DEBUG - 2013-11-15 23:16:40 --> Config Class Initialized
DEBUG - 2013-11-15 23:16:40 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:16:40 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:16:40 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:16:40 --> URI Class Initialized
DEBUG - 2013-11-15 23:16:40 --> Router Class Initialized
DEBUG - 2013-11-15 23:16:40 --> Output Class Initialized
DEBUG - 2013-11-15 23:16:40 --> Security Class Initialized
DEBUG - 2013-11-15 23:16:40 --> Input Class Initialized
DEBUG - 2013-11-15 23:16:40 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:16:40 --> Language Class Initialized
DEBUG - 2013-11-15 23:16:40 --> Loader Class Initialized
DEBUG - 2013-11-15 23:16:40 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:16:40 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:16:40 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:16:40 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:16:40 --> Session Class Initialized
DEBUG - 2013-11-15 23:16:40 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:16:40 --> Session routines successfully run
DEBUG - 2013-11-15 23:16:40 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:16:40 --> Controller Class Initialized
DEBUG - 2013-11-15 23:16:40 --> Model Class Initialized
DEBUG - 2013-11-15 23:16:40 --> Model Class Initialized
DEBUG - 2013-11-15 23:16:40 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:16:40 --> after session initialization................
INFO  - 2013-11-15 23:16:40 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 23:16:40 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 23:16:40 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 23:16:40 --> inside retrieving locations 
INFO  - 2013-11-15 23:16:40 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 23:16:40 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 23:16:40 --> Final output sent to browser
DEBUG - 2013-11-15 23:16:40 --> Total execution time: 0.0468
DEBUG - 2013-11-15 23:16:45 --> Config Class Initialized
DEBUG - 2013-11-15 23:16:45 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:16:45 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:16:45 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:16:45 --> URI Class Initialized
DEBUG - 2013-11-15 23:16:45 --> Router Class Initialized
DEBUG - 2013-11-15 23:16:45 --> Output Class Initialized
DEBUG - 2013-11-15 23:16:45 --> Security Class Initialized
DEBUG - 2013-11-15 23:16:45 --> Input Class Initialized
DEBUG - 2013-11-15 23:16:45 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:16:45 --> Language Class Initialized
DEBUG - 2013-11-15 23:16:45 --> Loader Class Initialized
DEBUG - 2013-11-15 23:16:45 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:16:45 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:16:45 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:16:45 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:16:45 --> Session Class Initialized
DEBUG - 2013-11-15 23:16:45 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:16:45 --> Session routines successfully run
DEBUG - 2013-11-15 23:16:45 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:16:45 --> Controller Class Initialized
DEBUG - 2013-11-15 23:16:45 --> Model Class Initialized
DEBUG - 2013-11-15 23:16:45 --> Model Class Initialized
DEBUG - 2013-11-15 23:16:45 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:16:45 --> after session initialization................
INFO  - 2013-11-15 23:16:45 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 23:16:45 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 23:16:45 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 23:16:45 --> inside retrieving locations 
INFO  - 2013-11-15 23:16:45 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 23:16:45 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 23:16:45 --> Final output sent to browser
DEBUG - 2013-11-15 23:16:45 --> Total execution time: 0.0468
DEBUG - 2013-11-15 23:16:51 --> Config Class Initialized
DEBUG - 2013-11-15 23:16:51 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:16:51 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:16:51 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:16:51 --> URI Class Initialized
DEBUG - 2013-11-15 23:16:51 --> Router Class Initialized
DEBUG - 2013-11-15 23:16:51 --> Output Class Initialized
DEBUG - 2013-11-15 23:16:51 --> Security Class Initialized
DEBUG - 2013-11-15 23:16:51 --> Input Class Initialized
DEBUG - 2013-11-15 23:16:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:16:51 --> Language Class Initialized
DEBUG - 2013-11-15 23:16:51 --> Loader Class Initialized
DEBUG - 2013-11-15 23:16:51 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:16:51 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:16:51 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:16:51 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:16:51 --> Session Class Initialized
DEBUG - 2013-11-15 23:16:51 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:16:51 --> Session routines successfully run
DEBUG - 2013-11-15 23:16:52 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:16:52 --> Controller Class Initialized
DEBUG - 2013-11-15 23:16:52 --> Model Class Initialized
DEBUG - 2013-11-15 23:16:52 --> Model Class Initialized
DEBUG - 2013-11-15 23:16:52 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:16:52 --> after session initialization................
INFO  - 2013-11-15 23:16:52 --> last pharmacy id is 26
INFO  - 2013-11-15 23:16:52 --> Ajax retrieval ::::::::::===>SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` < 26
ORDER BY `p`.`id_pharmacy`, `p`.`name` desc
LIMIT 25
DEBUG - 2013-11-15 23:16:52 --> Final output sent to browser
DEBUG - 2013-11-15 23:16:52 --> Total execution time: 0.0468
DEBUG - 2013-11-15 23:18:15 --> Config Class Initialized
DEBUG - 2013-11-15 23:18:15 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:18:15 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:18:15 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:18:15 --> URI Class Initialized
DEBUG - 2013-11-15 23:18:15 --> Router Class Initialized
DEBUG - 2013-11-15 23:18:15 --> Output Class Initialized
DEBUG - 2013-11-15 23:18:15 --> Security Class Initialized
DEBUG - 2013-11-15 23:18:15 --> Input Class Initialized
DEBUG - 2013-11-15 23:18:15 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:18:15 --> Language Class Initialized
DEBUG - 2013-11-15 23:18:15 --> Loader Class Initialized
DEBUG - 2013-11-15 23:18:15 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:18:15 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:18:15 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:18:15 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:18:15 --> Session Class Initialized
DEBUG - 2013-11-15 23:18:15 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:18:15 --> Session routines successfully run
DEBUG - 2013-11-15 23:18:15 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:18:15 --> Controller Class Initialized
DEBUG - 2013-11-15 23:18:15 --> Model Class Initialized
DEBUG - 2013-11-15 23:18:15 --> Model Class Initialized
DEBUG - 2013-11-15 23:18:15 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:18:15 --> after session initialization................
INFO  - 2013-11-15 23:18:15 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 23:18:15 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 23:18:15 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 23:18:15 --> inside retrieving locations 
INFO  - 2013-11-15 23:18:15 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 23:18:15 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 23:18:15 --> Final output sent to browser
DEBUG - 2013-11-15 23:18:15 --> Total execution time: 0.0624
DEBUG - 2013-11-15 23:18:19 --> Config Class Initialized
DEBUG - 2013-11-15 23:18:19 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:18:19 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:18:19 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:18:19 --> URI Class Initialized
DEBUG - 2013-11-15 23:18:19 --> Router Class Initialized
DEBUG - 2013-11-15 23:18:19 --> Output Class Initialized
DEBUG - 2013-11-15 23:18:19 --> Security Class Initialized
DEBUG - 2013-11-15 23:18:19 --> Input Class Initialized
DEBUG - 2013-11-15 23:18:19 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:18:19 --> Language Class Initialized
DEBUG - 2013-11-15 23:18:19 --> Loader Class Initialized
DEBUG - 2013-11-15 23:18:19 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:18:19 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:18:19 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:18:19 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:18:19 --> Session Class Initialized
DEBUG - 2013-11-15 23:18:19 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:18:19 --> Session routines successfully run
DEBUG - 2013-11-15 23:18:19 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:18:19 --> Controller Class Initialized
DEBUG - 2013-11-15 23:18:19 --> Model Class Initialized
DEBUG - 2013-11-15 23:18:19 --> Model Class Initialized
DEBUG - 2013-11-15 23:18:19 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:18:19 --> after session initialization................
INFO  - 2013-11-15 23:18:19 --> last pharmacy id is 26
INFO  - 2013-11-15 23:18:19 --> Ajax retrieval ::::::::::===>SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` < 26
ORDER BY `p`.`id_pharmacy`, `p`.`name` desc
LIMIT 25
DEBUG - 2013-11-15 23:18:19 --> Final output sent to browser
DEBUG - 2013-11-15 23:18:19 --> Total execution time: 0.0468
DEBUG - 2013-11-15 23:18:27 --> Config Class Initialized
DEBUG - 2013-11-15 23:18:27 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:18:27 --> Config Class Initialized
DEBUG - 2013-11-15 23:18:27 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:18:27 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:18:27 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:18:27 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:18:27 --> Config Class Initialized
DEBUG - 2013-11-15 23:18:27 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:18:27 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:18:27 --> URI Class Initialized
DEBUG - 2013-11-15 23:18:27 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:18:27 --> URI Class Initialized
DEBUG - 2013-11-15 23:18:27 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:18:27 --> Router Class Initialized
DEBUG - 2013-11-15 23:18:27 --> Router Class Initialized
DEBUG - 2013-11-15 23:18:27 --> URI Class Initialized
DEBUG - 2013-11-15 23:18:27 --> Router Class Initialized
DEBUG - 2013-11-15 23:18:27 --> Output Class Initialized
DEBUG - 2013-11-15 23:18:27 --> Output Class Initialized
DEBUG - 2013-11-15 23:18:27 --> Security Class Initialized
DEBUG - 2013-11-15 23:18:27 --> Security Class Initialized
DEBUG - 2013-11-15 23:18:27 --> Output Class Initialized
DEBUG - 2013-11-15 23:18:27 --> Input Class Initialized
DEBUG - 2013-11-15 23:18:27 --> Input Class Initialized
DEBUG - 2013-11-15 23:18:27 --> Security Class Initialized
DEBUG - 2013-11-15 23:18:27 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:18:27 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:18:27 --> Language Class Initialized
DEBUG - 2013-11-15 23:18:27 --> Language Class Initialized
DEBUG - 2013-11-15 23:18:27 --> Input Class Initialized
DEBUG - 2013-11-15 23:18:27 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:18:27 --> Language Class Initialized
DEBUG - 2013-11-15 23:18:27 --> Loader Class Initialized
DEBUG - 2013-11-15 23:18:27 --> Loader Class Initialized
DEBUG - 2013-11-15 23:18:27 --> Loader Class Initialized
DEBUG - 2013-11-15 23:18:27 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:18:27 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:18:27 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:18:27 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:18:27 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:18:27 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:18:27 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:18:27 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:18:27 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:18:27 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:18:27 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:18:27 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:18:27 --> Session Class Initialized
DEBUG - 2013-11-15 23:18:27 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:18:27 --> Session Class Initialized
DEBUG - 2013-11-15 23:18:27 --> Session routines successfully run
DEBUG - 2013-11-15 23:18:27 --> Session Class Initialized
DEBUG - 2013-11-15 23:18:27 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:18:27 --> Session routines successfully run
DEBUG - 2013-11-15 23:18:27 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:18:27 --> Session routines successfully run
DEBUG - 2013-11-15 23:18:27 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:18:27 --> Controller Class Initialized
DEBUG - 2013-11-15 23:18:27 --> Model Class Initialized
DEBUG - 2013-11-15 23:18:27 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:18:27 --> Controller Class Initialized
DEBUG - 2013-11-15 23:18:27 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:18:27 --> Controller Class Initialized
DEBUG - 2013-11-15 23:18:27 --> Model Class Initialized
DEBUG - 2013-11-15 23:18:27 --> Model Class Initialized
DEBUG - 2013-11-15 23:18:27 --> Model Class Initialized
DEBUG - 2013-11-15 23:18:27 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:18:27 --> after session initialization................
DEBUG - 2013-11-15 23:18:27 --> Model Class Initialized
ERROR - 2013-11-15 23:18:27 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 23:18:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2013-11-15 23:18:27 --> Model Class Initialized
DEBUG - 2013-11-15 23:18:27 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:18:27 --> after session initialization................
ERROR - 2013-11-15 23:18:27 --> 404 Page Not Found --> user_authorization/undefinedimages
INFO  - 2013-11-15 23:18:27 --> after session initialization................
ERROR - 2013-11-15 23:18:27 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 23:20:49 --> Config Class Initialized
DEBUG - 2013-11-15 23:20:49 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:20:49 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:20:49 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:20:49 --> URI Class Initialized
DEBUG - 2013-11-15 23:20:49 --> Router Class Initialized
DEBUG - 2013-11-15 23:20:49 --> Output Class Initialized
DEBUG - 2013-11-15 23:20:49 --> Security Class Initialized
DEBUG - 2013-11-15 23:20:49 --> Input Class Initialized
DEBUG - 2013-11-15 23:20:49 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:20:49 --> Language Class Initialized
DEBUG - 2013-11-15 23:20:49 --> Loader Class Initialized
DEBUG - 2013-11-15 23:20:49 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:20:49 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:20:49 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:20:49 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:20:49 --> Session Class Initialized
DEBUG - 2013-11-15 23:20:49 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:20:49 --> Session routines successfully run
DEBUG - 2013-11-15 23:20:49 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:20:49 --> Controller Class Initialized
DEBUG - 2013-11-15 23:20:49 --> Model Class Initialized
DEBUG - 2013-11-15 23:20:49 --> Model Class Initialized
DEBUG - 2013-11-15 23:20:49 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:20:49 --> after session initialization................
INFO  - 2013-11-15 23:20:49 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 23:20:49 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 23:20:49 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 23:20:49 --> inside retrieving locations 
INFO  - 2013-11-15 23:20:49 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 23:20:49 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 23:20:49 --> Final output sent to browser
DEBUG - 2013-11-15 23:20:49 --> Total execution time: 0.0780
DEBUG - 2013-11-15 23:20:54 --> Config Class Initialized
DEBUG - 2013-11-15 23:20:54 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:20:54 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:20:54 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:20:54 --> URI Class Initialized
DEBUG - 2013-11-15 23:20:54 --> Router Class Initialized
DEBUG - 2013-11-15 23:20:54 --> Output Class Initialized
DEBUG - 2013-11-15 23:20:54 --> Security Class Initialized
DEBUG - 2013-11-15 23:20:54 --> Input Class Initialized
DEBUG - 2013-11-15 23:20:54 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:20:54 --> Language Class Initialized
DEBUG - 2013-11-15 23:20:54 --> Loader Class Initialized
DEBUG - 2013-11-15 23:20:54 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:20:54 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:20:54 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:20:54 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:20:54 --> Session Class Initialized
DEBUG - 2013-11-15 23:20:54 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:20:54 --> Session routines successfully run
DEBUG - 2013-11-15 23:20:54 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:20:54 --> Controller Class Initialized
DEBUG - 2013-11-15 23:20:54 --> Model Class Initialized
DEBUG - 2013-11-15 23:20:54 --> Model Class Initialized
DEBUG - 2013-11-15 23:20:54 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:20:54 --> after session initialization................
INFO  - 2013-11-15 23:20:54 --> last pharmacy id is 26
INFO  - 2013-11-15 23:20:54 --> Ajax retrieval ::::::::::===>SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` < 26
ORDER BY `p`.`id_pharmacy`, `p`.`name` desc
LIMIT 25
DEBUG - 2013-11-15 23:20:54 --> Final output sent to browser
DEBUG - 2013-11-15 23:20:54 --> Total execution time: 0.0624
DEBUG - 2013-11-15 23:21:14 --> Config Class Initialized
DEBUG - 2013-11-15 23:21:14 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:21:14 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:21:14 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:21:14 --> URI Class Initialized
DEBUG - 2013-11-15 23:21:14 --> Router Class Initialized
DEBUG - 2013-11-15 23:21:14 --> Config Class Initialized
DEBUG - 2013-11-15 23:21:14 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:21:14 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:21:14 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:21:14 --> Output Class Initialized
DEBUG - 2013-11-15 23:21:14 --> URI Class Initialized
DEBUG - 2013-11-15 23:21:14 --> Security Class Initialized
DEBUG - 2013-11-15 23:21:14 --> Router Class Initialized
DEBUG - 2013-11-15 23:21:14 --> Input Class Initialized
DEBUG - 2013-11-15 23:21:14 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:21:14 --> Output Class Initialized
DEBUG - 2013-11-15 23:21:14 --> Language Class Initialized
DEBUG - 2013-11-15 23:21:14 --> Security Class Initialized
DEBUG - 2013-11-15 23:21:14 --> Input Class Initialized
DEBUG - 2013-11-15 23:21:14 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:21:14 --> Loader Class Initialized
DEBUG - 2013-11-15 23:21:14 --> Language Class Initialized
DEBUG - 2013-11-15 23:21:14 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:21:14 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:21:14 --> Loader Class Initialized
DEBUG - 2013-11-15 23:21:14 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:21:14 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:21:14 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:21:14 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:21:14 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:21:14 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:21:14 --> Session Class Initialized
DEBUG - 2013-11-15 23:21:14 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:21:14 --> Session routines successfully run
DEBUG - 2013-11-15 23:21:14 --> Session Class Initialized
DEBUG - 2013-11-15 23:21:14 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:21:14 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:21:14 --> Controller Class Initialized
DEBUG - 2013-11-15 23:21:14 --> Session routines successfully run
DEBUG - 2013-11-15 23:21:14 --> Config Class Initialized
DEBUG - 2013-11-15 23:21:14 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:21:14 --> Model Class Initialized
DEBUG - 2013-11-15 23:21:14 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:21:14 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:21:14 --> URI Class Initialized
DEBUG - 2013-11-15 23:21:14 --> Model Class Initialized
DEBUG - 2013-11-15 23:21:14 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:21:14 --> after session initialization................
DEBUG - 2013-11-15 23:21:14 --> Router Class Initialized
ERROR - 2013-11-15 23:21:14 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 23:21:14 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:21:14 --> Controller Class Initialized
DEBUG - 2013-11-15 23:21:14 --> Output Class Initialized
DEBUG - 2013-11-15 23:21:14 --> Model Class Initialized
DEBUG - 2013-11-15 23:21:14 --> Security Class Initialized
DEBUG - 2013-11-15 23:21:14 --> Model Class Initialized
DEBUG - 2013-11-15 23:21:14 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:21:14 --> after session initialization................
DEBUG - 2013-11-15 23:21:14 --> Input Class Initialized
ERROR - 2013-11-15 23:21:14 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 23:21:14 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:21:14 --> Language Class Initialized
DEBUG - 2013-11-15 23:21:14 --> Loader Class Initialized
DEBUG - 2013-11-15 23:21:14 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:21:14 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:21:14 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:21:14 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:21:14 --> Session Class Initialized
DEBUG - 2013-11-15 23:21:14 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:21:14 --> Session routines successfully run
DEBUG - 2013-11-15 23:21:14 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:21:14 --> Controller Class Initialized
DEBUG - 2013-11-15 23:21:14 --> Model Class Initialized
DEBUG - 2013-11-15 23:21:14 --> Model Class Initialized
DEBUG - 2013-11-15 23:21:14 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:21:14 --> after session initialization................
ERROR - 2013-11-15 23:21:14 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 23:25:09 --> Config Class Initialized
DEBUG - 2013-11-15 23:25:09 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:25:09 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:25:09 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:25:09 --> URI Class Initialized
DEBUG - 2013-11-15 23:25:09 --> Router Class Initialized
DEBUG - 2013-11-15 23:25:09 --> Output Class Initialized
DEBUG - 2013-11-15 23:25:09 --> Security Class Initialized
DEBUG - 2013-11-15 23:25:09 --> Input Class Initialized
DEBUG - 2013-11-15 23:25:09 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:25:09 --> Language Class Initialized
DEBUG - 2013-11-15 23:25:09 --> Loader Class Initialized
DEBUG - 2013-11-15 23:25:09 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:25:09 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:25:09 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:25:09 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:25:09 --> Session Class Initialized
DEBUG - 2013-11-15 23:25:09 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:25:09 --> Session routines successfully run
DEBUG - 2013-11-15 23:25:09 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:25:09 --> Controller Class Initialized
DEBUG - 2013-11-15 23:25:09 --> Model Class Initialized
DEBUG - 2013-11-15 23:25:09 --> Model Class Initialized
DEBUG - 2013-11-15 23:25:09 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:25:09 --> after session initialization................
INFO  - 2013-11-15 23:25:09 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 23:25:09 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 23:25:09 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 23:25:09 --> inside retrieving locations 
INFO  - 2013-11-15 23:25:09 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 23:25:09 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 23:25:09 --> Final output sent to browser
DEBUG - 2013-11-15 23:25:09 --> Total execution time: 0.0600
DEBUG - 2013-11-15 23:25:13 --> Config Class Initialized
DEBUG - 2013-11-15 23:25:13 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:25:13 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:25:13 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:25:13 --> URI Class Initialized
DEBUG - 2013-11-15 23:25:13 --> Router Class Initialized
DEBUG - 2013-11-15 23:25:13 --> Output Class Initialized
DEBUG - 2013-11-15 23:25:13 --> Security Class Initialized
DEBUG - 2013-11-15 23:25:13 --> Input Class Initialized
DEBUG - 2013-11-15 23:25:13 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:25:13 --> Language Class Initialized
DEBUG - 2013-11-15 23:25:13 --> Loader Class Initialized
DEBUG - 2013-11-15 23:25:13 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:25:13 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:25:13 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:25:13 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:25:13 --> Session Class Initialized
DEBUG - 2013-11-15 23:25:13 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:25:13 --> Session routines successfully run
DEBUG - 2013-11-15 23:25:13 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:25:13 --> Controller Class Initialized
DEBUG - 2013-11-15 23:25:13 --> Model Class Initialized
DEBUG - 2013-11-15 23:25:13 --> Model Class Initialized
DEBUG - 2013-11-15 23:25:13 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:25:13 --> after session initialization................
INFO  - 2013-11-15 23:25:13 --> last pharmacy id is 26
INFO  - 2013-11-15 23:25:13 --> Ajax retrieval ::::::::::===>SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` < 26
ORDER BY `p`.`id_pharmacy`, `p`.`name` desc
LIMIT 25
DEBUG - 2013-11-15 23:25:13 --> Final output sent to browser
DEBUG - 2013-11-15 23:25:13 --> Total execution time: 0.0910
DEBUG - 2013-11-15 23:25:18 --> Config Class Initialized
DEBUG - 2013-11-15 23:25:18 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:25:18 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:25:18 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:25:18 --> URI Class Initialized
DEBUG - 2013-11-15 23:25:18 --> Router Class Initialized
DEBUG - 2013-11-15 23:25:18 --> Output Class Initialized
DEBUG - 2013-11-15 23:25:18 --> Security Class Initialized
DEBUG - 2013-11-15 23:25:18 --> Input Class Initialized
DEBUG - 2013-11-15 23:25:18 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:25:18 --> Language Class Initialized
DEBUG - 2013-11-15 23:25:18 --> Loader Class Initialized
DEBUG - 2013-11-15 23:25:18 --> Config Class Initialized
DEBUG - 2013-11-15 23:25:18 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:25:18 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:25:18 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:25:18 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:25:18 --> URI Class Initialized
DEBUG - 2013-11-15 23:25:18 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:25:18 --> Router Class Initialized
DEBUG - 2013-11-15 23:25:18 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:25:18 --> Output Class Initialized
DEBUG - 2013-11-15 23:25:18 --> Security Class Initialized
DEBUG - 2013-11-15 23:25:18 --> Input Class Initialized
DEBUG - 2013-11-15 23:25:18 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:25:18 --> Language Class Initialized
DEBUG - 2013-11-15 23:25:18 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:25:18 --> Session Class Initialized
DEBUG - 2013-11-15 23:25:18 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:25:18 --> Loader Class Initialized
DEBUG - 2013-11-15 23:25:18 --> Session routines successfully run
DEBUG - 2013-11-15 23:25:18 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:25:18 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:25:18 --> Controller Class Initialized
DEBUG - 2013-11-15 23:25:18 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:25:18 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:25:18 --> Model Class Initialized
DEBUG - 2013-11-15 23:25:18 --> Model Class Initialized
DEBUG - 2013-11-15 23:25:18 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:25:18 --> after session initialization................
ERROR - 2013-11-15 23:25:18 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 23:25:18 --> Config Class Initialized
DEBUG - 2013-11-15 23:25:18 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:25:18 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:25:18 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:25:18 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:25:18 --> Session Class Initialized
DEBUG - 2013-11-15 23:25:18 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:25:18 --> Session routines successfully run
DEBUG - 2013-11-15 23:25:18 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:25:18 --> Controller Class Initialized
DEBUG - 2013-11-15 23:25:18 --> Model Class Initialized
DEBUG - 2013-11-15 23:25:18 --> Model Class Initialized
DEBUG - 2013-11-15 23:25:18 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:25:18 --> after session initialization................
ERROR - 2013-11-15 23:25:18 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 23:25:18 --> URI Class Initialized
DEBUG - 2013-11-15 23:25:18 --> Router Class Initialized
DEBUG - 2013-11-15 23:25:18 --> Output Class Initialized
DEBUG - 2013-11-15 23:25:18 --> Security Class Initialized
DEBUG - 2013-11-15 23:25:18 --> Input Class Initialized
DEBUG - 2013-11-15 23:25:18 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:25:18 --> Language Class Initialized
DEBUG - 2013-11-15 23:25:18 --> Loader Class Initialized
DEBUG - 2013-11-15 23:25:18 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:25:18 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:25:18 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:25:18 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:25:18 --> Session Class Initialized
DEBUG - 2013-11-15 23:25:18 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:25:18 --> Session routines successfully run
DEBUG - 2013-11-15 23:25:18 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:25:18 --> Controller Class Initialized
DEBUG - 2013-11-15 23:25:18 --> Model Class Initialized
DEBUG - 2013-11-15 23:25:18 --> Model Class Initialized
DEBUG - 2013-11-15 23:25:18 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:25:18 --> after session initialization................
ERROR - 2013-11-15 23:25:18 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 23:30:52 --> Config Class Initialized
DEBUG - 2013-11-15 23:30:52 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:30:52 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:30:52 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:30:52 --> URI Class Initialized
DEBUG - 2013-11-15 23:30:52 --> Router Class Initialized
DEBUG - 2013-11-15 23:30:52 --> Output Class Initialized
DEBUG - 2013-11-15 23:30:52 --> Security Class Initialized
DEBUG - 2013-11-15 23:30:52 --> Input Class Initialized
DEBUG - 2013-11-15 23:30:52 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:30:52 --> Language Class Initialized
DEBUG - 2013-11-15 23:30:52 --> Loader Class Initialized
DEBUG - 2013-11-15 23:30:52 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:30:52 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:30:52 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:30:52 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:30:52 --> Session Class Initialized
DEBUG - 2013-11-15 23:30:52 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:30:52 --> Session routines successfully run
DEBUG - 2013-11-15 23:30:52 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:30:52 --> Controller Class Initialized
DEBUG - 2013-11-15 23:30:52 --> Model Class Initialized
DEBUG - 2013-11-15 23:30:52 --> Model Class Initialized
DEBUG - 2013-11-15 23:30:52 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:30:52 --> after session initialization................
INFO  - 2013-11-15 23:30:52 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 23:30:52 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 23:30:52 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 23:30:52 --> inside retrieving locations 
INFO  - 2013-11-15 23:30:52 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 23:30:52 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 23:30:52 --> Final output sent to browser
DEBUG - 2013-11-15 23:30:52 --> Total execution time: 0.0600
DEBUG - 2013-11-15 23:30:57 --> Config Class Initialized
DEBUG - 2013-11-15 23:30:57 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:30:57 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:30:57 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:30:57 --> URI Class Initialized
DEBUG - 2013-11-15 23:30:57 --> Router Class Initialized
DEBUG - 2013-11-15 23:30:57 --> Output Class Initialized
DEBUG - 2013-11-15 23:30:57 --> Security Class Initialized
DEBUG - 2013-11-15 23:30:57 --> Input Class Initialized
DEBUG - 2013-11-15 23:30:57 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:30:57 --> Language Class Initialized
DEBUG - 2013-11-15 23:30:57 --> Loader Class Initialized
DEBUG - 2013-11-15 23:30:57 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:30:57 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:30:57 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:30:57 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:30:57 --> Session Class Initialized
DEBUG - 2013-11-15 23:30:57 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:30:57 --> Session routines successfully run
DEBUG - 2013-11-15 23:30:57 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:30:57 --> Controller Class Initialized
DEBUG - 2013-11-15 23:30:57 --> Model Class Initialized
DEBUG - 2013-11-15 23:30:57 --> Model Class Initialized
DEBUG - 2013-11-15 23:30:57 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:30:57 --> after session initialization................
INFO  - 2013-11-15 23:30:57 --> last pharmacy id is 26
INFO  - 2013-11-15 23:30:57 --> Ajax retrieval ::::::::::===>SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` < 26
ORDER BY `p`.`id_pharmacy`, `p`.`name` desc
LIMIT 25
DEBUG - 2013-11-15 23:30:57 --> Final output sent to browser
DEBUG - 2013-11-15 23:30:57 --> Total execution time: 0.0500
DEBUG - 2013-11-15 23:31:00 --> Config Class Initialized
DEBUG - 2013-11-15 23:31:00 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:31:00 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:31:00 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:31:00 --> URI Class Initialized
DEBUG - 2013-11-15 23:31:00 --> Router Class Initialized
DEBUG - 2013-11-15 23:31:00 --> Output Class Initialized
DEBUG - 2013-11-15 23:31:00 --> Security Class Initialized
DEBUG - 2013-11-15 23:31:00 --> Config Class Initialized
DEBUG - 2013-11-15 23:31:00 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:31:00 --> Input Class Initialized
DEBUG - 2013-11-15 23:31:00 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:31:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:31:00 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:31:00 --> Language Class Initialized
DEBUG - 2013-11-15 23:31:00 --> URI Class Initialized
DEBUG - 2013-11-15 23:31:00 --> Router Class Initialized
DEBUG - 2013-11-15 23:31:00 --> Loader Class Initialized
DEBUG - 2013-11-15 23:31:00 --> Output Class Initialized
DEBUG - 2013-11-15 23:31:00 --> Security Class Initialized
DEBUG - 2013-11-15 23:31:00 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:31:00 --> Input Class Initialized
DEBUG - 2013-11-15 23:31:00 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:31:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:31:00 --> Language Class Initialized
DEBUG - 2013-11-15 23:31:00 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:31:00 --> Config Class Initialized
DEBUG - 2013-11-15 23:31:00 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:31:00 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:31:00 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:31:00 --> URI Class Initialized
DEBUG - 2013-11-15 23:31:00 --> Loader Class Initialized
DEBUG - 2013-11-15 23:31:00 --> Router Class Initialized
DEBUG - 2013-11-15 23:31:00 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:31:00 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:31:00 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:31:00 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:31:00 --> Output Class Initialized
DEBUG - 2013-11-15 23:31:00 --> Security Class Initialized
DEBUG - 2013-11-15 23:31:00 --> Input Class Initialized
DEBUG - 2013-11-15 23:31:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:31:00 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:31:00 --> Language Class Initialized
DEBUG - 2013-11-15 23:31:00 --> Session Class Initialized
DEBUG - 2013-11-15 23:31:00 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:31:00 --> Session routines successfully run
DEBUG - 2013-11-15 23:31:00 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:31:00 --> Controller Class Initialized
DEBUG - 2013-11-15 23:31:00 --> Model Class Initialized
DEBUG - 2013-11-15 23:31:00 --> Model Class Initialized
DEBUG - 2013-11-15 23:31:00 --> Session Class Initialized
DEBUG - 2013-11-15 23:31:00 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:31:00 --> after session initialization................
DEBUG - 2013-11-15 23:31:00 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:31:00 --> Session routines successfully run
ERROR - 2013-11-15 23:31:00 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 23:31:00 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:31:00 --> Controller Class Initialized
DEBUG - 2013-11-15 23:31:00 --> Model Class Initialized
DEBUG - 2013-11-15 23:31:00 --> Model Class Initialized
DEBUG - 2013-11-15 23:31:00 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:31:00 --> after session initialization................
ERROR - 2013-11-15 23:31:00 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 23:31:00 --> Loader Class Initialized
DEBUG - 2013-11-15 23:31:00 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:31:00 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:31:00 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:31:00 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:31:00 --> Session Class Initialized
DEBUG - 2013-11-15 23:31:00 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:31:00 --> Session routines successfully run
DEBUG - 2013-11-15 23:31:00 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:31:00 --> Controller Class Initialized
DEBUG - 2013-11-15 23:31:00 --> Model Class Initialized
DEBUG - 2013-11-15 23:31:00 --> Model Class Initialized
DEBUG - 2013-11-15 23:31:00 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:31:00 --> after session initialization................
ERROR - 2013-11-15 23:31:00 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 23:31:14 --> Config Class Initialized
DEBUG - 2013-11-15 23:31:14 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:31:14 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:31:14 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:31:14 --> URI Class Initialized
DEBUG - 2013-11-15 23:31:14 --> Router Class Initialized
DEBUG - 2013-11-15 23:31:14 --> Output Class Initialized
DEBUG - 2013-11-15 23:31:14 --> Security Class Initialized
DEBUG - 2013-11-15 23:31:14 --> Input Class Initialized
DEBUG - 2013-11-15 23:31:14 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:31:14 --> Language Class Initialized
DEBUG - 2013-11-15 23:31:14 --> Loader Class Initialized
DEBUG - 2013-11-15 23:31:14 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:31:14 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:31:14 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:31:14 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:31:14 --> Session Class Initialized
DEBUG - 2013-11-15 23:31:14 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:31:14 --> Session routines successfully run
DEBUG - 2013-11-15 23:31:14 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:31:14 --> Controller Class Initialized
DEBUG - 2013-11-15 23:31:14 --> Model Class Initialized
DEBUG - 2013-11-15 23:31:14 --> Model Class Initialized
DEBUG - 2013-11-15 23:31:14 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:31:14 --> after session initialization................
INFO  - 2013-11-15 23:31:14 --> last pharmacy id is 25
INFO  - 2013-11-15 23:31:14 --> Ajax retrieval ::::::::::===>SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` < 25
ORDER BY `p`.`id_pharmacy`, `p`.`name` desc
LIMIT 25
DEBUG - 2013-11-15 23:31:14 --> Final output sent to browser
DEBUG - 2013-11-15 23:31:14 --> Total execution time: 0.0560
DEBUG - 2013-11-15 23:31:21 --> Config Class Initialized
DEBUG - 2013-11-15 23:31:21 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:31:21 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:31:21 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:31:21 --> URI Class Initialized
DEBUG - 2013-11-15 23:31:21 --> Router Class Initialized
DEBUG - 2013-11-15 23:31:21 --> Output Class Initialized
DEBUG - 2013-11-15 23:31:21 --> Security Class Initialized
DEBUG - 2013-11-15 23:31:21 --> Input Class Initialized
DEBUG - 2013-11-15 23:31:21 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:31:21 --> Language Class Initialized
DEBUG - 2013-11-15 23:31:21 --> Loader Class Initialized
DEBUG - 2013-11-15 23:31:21 --> Config Class Initialized
DEBUG - 2013-11-15 23:31:21 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:31:21 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:31:21 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:31:21 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:31:21 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:31:21 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:31:21 --> URI Class Initialized
DEBUG - 2013-11-15 23:31:21 --> Router Class Initialized
DEBUG - 2013-11-15 23:31:21 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:31:21 --> Output Class Initialized
DEBUG - 2013-11-15 23:31:21 --> Security Class Initialized
DEBUG - 2013-11-15 23:31:21 --> Input Class Initialized
DEBUG - 2013-11-15 23:31:21 --> Session Class Initialized
DEBUG - 2013-11-15 23:31:21 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:31:21 --> Language Class Initialized
DEBUG - 2013-11-15 23:31:21 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:31:21 --> Session routines successfully run
DEBUG - 2013-11-15 23:31:21 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:31:21 --> Config Class Initialized
DEBUG - 2013-11-15 23:31:21 --> Controller Class Initialized
DEBUG - 2013-11-15 23:31:21 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:31:21 --> Model Class Initialized
DEBUG - 2013-11-15 23:31:21 --> Loader Class Initialized
DEBUG - 2013-11-15 23:31:21 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:31:21 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:31:21 --> URI Class Initialized
DEBUG - 2013-11-15 23:31:21 --> Model Class Initialized
DEBUG - 2013-11-15 23:31:21 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:31:21 --> after session initialization................
ERROR - 2013-11-15 23:31:21 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 23:31:21 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:31:21 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:31:21 --> Router Class Initialized
DEBUG - 2013-11-15 23:31:21 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:31:21 --> Output Class Initialized
DEBUG - 2013-11-15 23:31:21 --> Security Class Initialized
DEBUG - 2013-11-15 23:31:21 --> Input Class Initialized
DEBUG - 2013-11-15 23:31:21 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:31:21 --> Language Class Initialized
DEBUG - 2013-11-15 23:31:21 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:31:21 --> Session Class Initialized
DEBUG - 2013-11-15 23:31:21 --> Loader Class Initialized
DEBUG - 2013-11-15 23:31:21 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:31:21 --> Session routines successfully run
DEBUG - 2013-11-15 23:31:21 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:31:21 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:31:21 --> Controller Class Initialized
DEBUG - 2013-11-15 23:31:21 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:31:21 --> Model Class Initialized
DEBUG - 2013-11-15 23:31:21 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:31:21 --> Model Class Initialized
DEBUG - 2013-11-15 23:31:21 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:31:21 --> after session initialization................
ERROR - 2013-11-15 23:31:21 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 23:31:21 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:31:21 --> Session Class Initialized
DEBUG - 2013-11-15 23:31:21 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:31:21 --> Session routines successfully run
DEBUG - 2013-11-15 23:31:21 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:31:21 --> Controller Class Initialized
DEBUG - 2013-11-15 23:31:21 --> Model Class Initialized
DEBUG - 2013-11-15 23:31:21 --> Model Class Initialized
DEBUG - 2013-11-15 23:31:21 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:31:21 --> after session initialization................
ERROR - 2013-11-15 23:31:21 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 23:33:02 --> Config Class Initialized
DEBUG - 2013-11-15 23:33:02 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:33:02 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:33:02 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:33:02 --> URI Class Initialized
DEBUG - 2013-11-15 23:33:02 --> Router Class Initialized
DEBUG - 2013-11-15 23:33:02 --> Output Class Initialized
DEBUG - 2013-11-15 23:33:02 --> Security Class Initialized
DEBUG - 2013-11-15 23:33:02 --> Input Class Initialized
DEBUG - 2013-11-15 23:33:02 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:33:02 --> Language Class Initialized
DEBUG - 2013-11-15 23:33:02 --> Loader Class Initialized
DEBUG - 2013-11-15 23:33:02 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:33:02 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:33:02 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:33:02 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:33:02 --> Session Class Initialized
DEBUG - 2013-11-15 23:33:02 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:33:02 --> Session routines successfully run
DEBUG - 2013-11-15 23:33:02 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:33:02 --> Controller Class Initialized
DEBUG - 2013-11-15 23:33:02 --> Model Class Initialized
DEBUG - 2013-11-15 23:33:02 --> Model Class Initialized
DEBUG - 2013-11-15 23:33:02 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:33:02 --> after session initialization................
INFO  - 2013-11-15 23:33:02 --> inside retrieving pharmacy by location id 2
INFO  - 2013-11-15 23:33:02 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '2'
ORDER BY `p`.`name` asc
LIMIT 25
DEBUG - 2013-11-15 23:33:02 --> Final output sent to browser
DEBUG - 2013-11-15 23:33:02 --> Total execution time: 0.0468
DEBUG - 2013-11-15 23:33:08 --> Config Class Initialized
DEBUG - 2013-11-15 23:33:08 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:33:08 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:33:08 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:33:08 --> URI Class Initialized
DEBUG - 2013-11-15 23:33:08 --> Router Class Initialized
DEBUG - 2013-11-15 23:33:08 --> Output Class Initialized
DEBUG - 2013-11-15 23:33:08 --> Security Class Initialized
DEBUG - 2013-11-15 23:33:08 --> Input Class Initialized
DEBUG - 2013-11-15 23:33:08 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:33:08 --> Language Class Initialized
DEBUG - 2013-11-15 23:33:08 --> Loader Class Initialized
DEBUG - 2013-11-15 23:33:08 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:33:08 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:33:08 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:33:08 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:33:08 --> Session Class Initialized
DEBUG - 2013-11-15 23:33:08 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:33:08 --> Session routines successfully run
DEBUG - 2013-11-15 23:33:08 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:33:08 --> Controller Class Initialized
DEBUG - 2013-11-15 23:33:08 --> Model Class Initialized
DEBUG - 2013-11-15 23:33:08 --> Model Class Initialized
DEBUG - 2013-11-15 23:33:08 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:33:08 --> after session initialization................
INFO  - 2013-11-15 23:33:08 --> last pharmacy id is 29
INFO  - 2013-11-15 23:33:08 --> Ajax retrieval ::::::::::===>SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` < 29
ORDER BY `p`.`id_pharmacy`, `p`.`name` desc
LIMIT 25
DEBUG - 2013-11-15 23:33:08 --> Final output sent to browser
DEBUG - 2013-11-15 23:33:08 --> Total execution time: 0.0624
DEBUG - 2013-11-15 23:33:11 --> Config Class Initialized
DEBUG - 2013-11-15 23:33:12 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:33:12 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:33:12 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:33:12 --> URI Class Initialized
DEBUG - 2013-11-15 23:33:12 --> Router Class Initialized
DEBUG - 2013-11-15 23:33:12 --> Config Class Initialized
DEBUG - 2013-11-15 23:33:12 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:33:12 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:33:12 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:33:12 --> Output Class Initialized
DEBUG - 2013-11-15 23:33:12 --> URI Class Initialized
DEBUG - 2013-11-15 23:33:12 --> Router Class Initialized
DEBUG - 2013-11-15 23:33:12 --> Security Class Initialized
DEBUG - 2013-11-15 23:33:12 --> Output Class Initialized
DEBUG - 2013-11-15 23:33:12 --> Input Class Initialized
DEBUG - 2013-11-15 23:33:12 --> Config Class Initialized
DEBUG - 2013-11-15 23:33:12 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:33:12 --> Security Class Initialized
DEBUG - 2013-11-15 23:33:12 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:33:12 --> Language Class Initialized
DEBUG - 2013-11-15 23:33:12 --> Input Class Initialized
DEBUG - 2013-11-15 23:33:12 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:33:12 --> Language Class Initialized
DEBUG - 2013-11-15 23:33:12 --> Loader Class Initialized
DEBUG - 2013-11-15 23:33:12 --> Loader Class Initialized
DEBUG - 2013-11-15 23:33:12 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:33:12 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:33:12 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:33:12 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:33:12 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:33:12 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:33:12 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:33:12 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:33:12 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:33:12 --> Session Class Initialized
DEBUG - 2013-11-15 23:33:12 --> URI Class Initialized
DEBUG - 2013-11-15 23:33:12 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:33:12 --> Session routines successfully run
DEBUG - 2013-11-15 23:33:12 --> Router Class Initialized
DEBUG - 2013-11-15 23:33:12 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:33:12 --> Output Class Initialized
DEBUG - 2013-11-15 23:33:12 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:33:12 --> Controller Class Initialized
DEBUG - 2013-11-15 23:33:12 --> Model Class Initialized
DEBUG - 2013-11-15 23:33:12 --> Session Class Initialized
DEBUG - 2013-11-15 23:33:12 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:33:12 --> Model Class Initialized
DEBUG - 2013-11-15 23:33:12 --> Session routines successfully run
DEBUG - 2013-11-15 23:33:12 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:33:12 --> after session initialization................
DEBUG - 2013-11-15 23:33:12 --> Security Class Initialized
ERROR - 2013-11-15 23:33:12 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 23:33:12 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:33:12 --> Controller Class Initialized
DEBUG - 2013-11-15 23:33:12 --> Model Class Initialized
DEBUG - 2013-11-15 23:33:12 --> Input Class Initialized
DEBUG - 2013-11-15 23:33:12 --> Model Class Initialized
DEBUG - 2013-11-15 23:33:12 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:33:12 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:33:12 --> after session initialization................
DEBUG - 2013-11-15 23:33:12 --> Language Class Initialized
ERROR - 2013-11-15 23:33:12 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 23:33:12 --> Loader Class Initialized
DEBUG - 2013-11-15 23:33:12 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:33:12 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:33:12 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:33:12 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:33:12 --> Session Class Initialized
DEBUG - 2013-11-15 23:33:12 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:33:12 --> Session routines successfully run
DEBUG - 2013-11-15 23:33:12 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:33:12 --> Controller Class Initialized
DEBUG - 2013-11-15 23:33:12 --> Model Class Initialized
DEBUG - 2013-11-15 23:33:12 --> Model Class Initialized
DEBUG - 2013-11-15 23:33:12 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:33:12 --> after session initialization................
ERROR - 2013-11-15 23:33:12 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 23:35:50 --> Config Class Initialized
DEBUG - 2013-11-15 23:35:50 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:35:50 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:35:50 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:35:50 --> URI Class Initialized
DEBUG - 2013-11-15 23:35:50 --> Router Class Initialized
DEBUG - 2013-11-15 23:35:50 --> Output Class Initialized
DEBUG - 2013-11-15 23:35:50 --> Security Class Initialized
DEBUG - 2013-11-15 23:35:50 --> Input Class Initialized
DEBUG - 2013-11-15 23:35:50 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:35:50 --> Language Class Initialized
DEBUG - 2013-11-15 23:35:50 --> Loader Class Initialized
DEBUG - 2013-11-15 23:35:50 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:35:50 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:35:50 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:35:50 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:35:50 --> Session Class Initialized
DEBUG - 2013-11-15 23:35:50 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:35:50 --> Session routines successfully run
DEBUG - 2013-11-15 23:35:50 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:35:50 --> Controller Class Initialized
DEBUG - 2013-11-15 23:35:50 --> Model Class Initialized
DEBUG - 2013-11-15 23:35:50 --> Model Class Initialized
DEBUG - 2013-11-15 23:35:50 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:35:50 --> after session initialization................
INFO  - 2013-11-15 23:35:50 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-15 23:35:50 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-11-15 23:35:50 --> inside retrieving vacancy for member
INFO  - 2013-11-15 23:35:50 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-11-15 23:35:50 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-15 23:35:50 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-11-15 23:35:50 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-11-15 23:35:50 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-15 23:35:50 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-15 23:35:50 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-11-15 23:35:50 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-11-15 23:35:50 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-11-15 23:35:50 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-11-15 23:35:50 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-11-15 23:35:50 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-11-15 23:35:50 --> Final output sent to browser
DEBUG - 2013-11-15 23:35:50 --> Total execution time: 0.0780
DEBUG - 2013-11-15 23:35:50 --> Config Class Initialized
DEBUG - 2013-11-15 23:35:50 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:35:50 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:35:50 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:35:50 --> URI Class Initialized
DEBUG - 2013-11-15 23:35:50 --> Router Class Initialized
DEBUG - 2013-11-15 23:35:50 --> Output Class Initialized
DEBUG - 2013-11-15 23:35:50 --> Security Class Initialized
DEBUG - 2013-11-15 23:35:50 --> Input Class Initialized
DEBUG - 2013-11-15 23:35:50 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:35:50 --> Language Class Initialized
DEBUG - 2013-11-15 23:35:50 --> Loader Class Initialized
DEBUG - 2013-11-15 23:35:50 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:35:50 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:35:50 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:35:50 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:35:50 --> Session Class Initialized
DEBUG - 2013-11-15 23:35:50 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:35:50 --> Session routines successfully run
DEBUG - 2013-11-15 23:35:50 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:35:50 --> Controller Class Initialized
DEBUG - 2013-11-15 23:35:50 --> Model Class Initialized
DEBUG - 2013-11-15 23:35:50 --> Model Class Initialized
DEBUG - 2013-11-15 23:35:50 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:35:50 --> after session initialization................
ERROR - 2013-11-15 23:35:50 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-15 23:35:50 --> Config Class Initialized
DEBUG - 2013-11-15 23:35:50 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:35:50 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:35:50 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:35:50 --> URI Class Initialized
DEBUG - 2013-11-15 23:35:50 --> Router Class Initialized
ERROR - 2013-11-15 23:35:50 --> 404 Page Not Found --> css
DEBUG - 2013-11-15 23:35:51 --> Config Class Initialized
DEBUG - 2013-11-15 23:35:51 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:35:51 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:35:51 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:35:51 --> URI Class Initialized
DEBUG - 2013-11-15 23:35:51 --> Router Class Initialized
DEBUG - 2013-11-15 23:35:51 --> Output Class Initialized
DEBUG - 2013-11-15 23:35:51 --> Security Class Initialized
DEBUG - 2013-11-15 23:35:51 --> Input Class Initialized
DEBUG - 2013-11-15 23:35:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:35:51 --> Language Class Initialized
DEBUG - 2013-11-15 23:35:51 --> Loader Class Initialized
DEBUG - 2013-11-15 23:35:51 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:35:51 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:35:51 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:35:51 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:35:51 --> Session Class Initialized
DEBUG - 2013-11-15 23:35:51 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:35:51 --> Session routines successfully run
DEBUG - 2013-11-15 23:35:51 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:35:51 --> Controller Class Initialized
DEBUG - 2013-11-15 23:35:51 --> Model Class Initialized
DEBUG - 2013-11-15 23:35:51 --> Model Class Initialized
DEBUG - 2013-11-15 23:35:51 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:35:51 --> after session initialization................
INFO  - 2013-11-15 23:35:51 --> last news id is 0
INFO  - 2013-11-15 23:35:52 --> SELECT a.id_article as id, a.title as newsletter_title, a.description as newsletter_description, a.guestonly as guestonly, a.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`article` a)
JOIN `member` m ON `a`.`memberid_member` = `m`.`id_member`
WHERE `a`.`id_article` <> 0
ORDER BY `a`.`id_article` desc
LIMIT 15
INFO  - 2013-11-15 23:35:52 --> after newsleters list has been clicked.................
INFO  - 2013-11-15 23:35:52 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=112&article_type=newsletter_title
INFO  - 2013-11-15 23:35:52 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=111&article_type=newsletter_title
INFO  - 2013-11-15 23:35:52 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=110&article_type=newsletter_title
INFO  - 2013-11-15 23:35:52 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=109&article_type=newsletter_title
INFO  - 2013-11-15 23:35:52 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=108&article_type=newsletter_title
INFO  - 2013-11-15 23:35:52 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=107&article_type=newsletter_title
INFO  - 2013-11-15 23:35:52 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=106&article_type=newsletter_title
INFO  - 2013-11-15 23:35:52 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=105&article_type=newsletter_title
INFO  - 2013-11-15 23:35:52 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=104&article_type=newsletter_title
INFO  - 2013-11-15 23:35:52 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=103&article_type=newsletter_title
INFO  - 2013-11-15 23:35:52 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=102&article_type=newsletter_title
INFO  - 2013-11-15 23:35:52 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=101&article_type=newsletter_title
INFO  - 2013-11-15 23:35:52 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=100&article_type=newsletter_title
INFO  - 2013-11-15 23:35:52 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=99&article_type=newsletter_title
INFO  - 2013-11-15 23:35:52 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=98&article_type=newsletter_title
DEBUG - 2013-11-15 23:35:52 --> File loaded: ../pharmaray-application/views/articles.php
DEBUG - 2013-11-15 23:35:52 --> Final output sent to browser
DEBUG - 2013-11-15 23:35:52 --> Total execution time: 0.0624
DEBUG - 2013-11-15 23:35:53 --> Config Class Initialized
DEBUG - 2013-11-15 23:35:53 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:35:53 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:35:53 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:35:53 --> URI Class Initialized
DEBUG - 2013-11-15 23:35:53 --> Router Class Initialized
DEBUG - 2013-11-15 23:35:53 --> Output Class Initialized
DEBUG - 2013-11-15 23:35:53 --> Security Class Initialized
DEBUG - 2013-11-15 23:35:53 --> Input Class Initialized
DEBUG - 2013-11-15 23:35:53 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:35:53 --> Language Class Initialized
DEBUG - 2013-11-15 23:35:53 --> Loader Class Initialized
DEBUG - 2013-11-15 23:35:53 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:35:53 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:35:53 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:35:53 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:35:53 --> Session Class Initialized
DEBUG - 2013-11-15 23:35:53 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:35:53 --> Session routines successfully run
DEBUG - 2013-11-15 23:35:53 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:35:53 --> Controller Class Initialized
DEBUG - 2013-11-15 23:35:53 --> Model Class Initialized
DEBUG - 2013-11-15 23:35:53 --> Model Class Initialized
DEBUG - 2013-11-15 23:35:53 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:35:53 --> after session initialization................
INFO  - 2013-11-15 23:35:53 --> inside retrieve most commented forum topic 
INFO  - 2013-11-15 23:35:53 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
INFO  - 2013-11-15 23:35:53 --> inside retrieving first 20 topics 
INFO  - 2013-11-15 23:35:53 --> SELECT `t`.`id_topicforum`, upper(t.name) as name, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
LIMIT 20
INFO  - 2013-11-15 23:35:53 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-15 23:35:53 --> SELECT `ff`.`id_forum` as id, `ff`.`name`, count(f.id_forum) as sub_forum
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` is null 
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`
INFO  - 2013-11-15 23:35:53 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-15 23:35:53 --> inside retrieving comments topic id and drug id is 1
INFO  - 2013-11-15 23:35:53 --> SELECT `tc`.`id_topiccomment`, `tc`.`comment`, `tc`.`timecreated`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-15 23:35:53 --> inside retrieving comments topic id 1
INFO  - 2013-11-15 23:35:53 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
INFO  - 2013-11-15 23:35:53 --> after forums has been clicked.................
INFO  - 2013-11-15 23:35:53 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-11-15 23:35:53 --> File loaded: ../pharmaray-application/views/forum.php
DEBUG - 2013-11-15 23:35:53 --> Final output sent to browser
DEBUG - 2013-11-15 23:35:53 --> Total execution time: 0.0780
DEBUG - 2013-11-15 23:35:53 --> Config Class Initialized
DEBUG - 2013-11-15 23:35:53 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:35:53 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:35:53 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:35:53 --> URI Class Initialized
DEBUG - 2013-11-15 23:35:53 --> Router Class Initialized
DEBUG - 2013-11-15 23:35:53 --> Output Class Initialized
DEBUG - 2013-11-15 23:35:53 --> Security Class Initialized
DEBUG - 2013-11-15 23:35:53 --> Input Class Initialized
DEBUG - 2013-11-15 23:35:53 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:35:53 --> Language Class Initialized
DEBUG - 2013-11-15 23:35:53 --> Loader Class Initialized
DEBUG - 2013-11-15 23:35:53 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:35:53 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:35:53 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:35:53 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:35:53 --> Session Class Initialized
DEBUG - 2013-11-15 23:35:53 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:35:53 --> Session routines successfully run
DEBUG - 2013-11-15 23:35:53 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:35:53 --> Controller Class Initialized
DEBUG - 2013-11-15 23:35:53 --> Model Class Initialized
DEBUG - 2013-11-15 23:35:53 --> Model Class Initialized
DEBUG - 2013-11-15 23:35:53 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:35:53 --> after session initialization................
ERROR - 2013-11-15 23:35:53 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-15 23:35:54 --> Config Class Initialized
DEBUG - 2013-11-15 23:35:54 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:35:54 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:35:54 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:35:54 --> URI Class Initialized
DEBUG - 2013-11-15 23:35:54 --> Router Class Initialized
ERROR - 2013-11-15 23:35:54 --> 404 Page Not Found --> css
DEBUG - 2013-11-15 23:35:55 --> Config Class Initialized
DEBUG - 2013-11-15 23:35:55 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:35:55 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:35:55 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:35:55 --> URI Class Initialized
DEBUG - 2013-11-15 23:35:55 --> Router Class Initialized
DEBUG - 2013-11-15 23:35:55 --> Output Class Initialized
DEBUG - 2013-11-15 23:35:55 --> Security Class Initialized
DEBUG - 2013-11-15 23:35:55 --> Input Class Initialized
DEBUG - 2013-11-15 23:35:55 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:35:55 --> Language Class Initialized
DEBUG - 2013-11-15 23:35:55 --> Loader Class Initialized
DEBUG - 2013-11-15 23:35:55 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:35:55 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:35:55 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:35:55 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:35:55 --> Session Class Initialized
DEBUG - 2013-11-15 23:35:55 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:35:55 --> Session routines successfully run
DEBUG - 2013-11-15 23:35:55 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:35:55 --> Controller Class Initialized
DEBUG - 2013-11-15 23:35:55 --> Model Class Initialized
DEBUG - 2013-11-15 23:35:55 --> Model Class Initialized
DEBUG - 2013-11-15 23:35:55 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:35:55 --> after session initialization................
INFO  - 2013-11-15 23:35:55 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 23:35:55 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 23:35:55 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 23:35:55 --> inside retrieving locations 
INFO  - 2013-11-15 23:35:55 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 23:35:55 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 23:35:55 --> Final output sent to browser
DEBUG - 2013-11-15 23:35:55 --> Total execution time: 0.0624
DEBUG - 2013-11-15 23:49:02 --> Config Class Initialized
DEBUG - 2013-11-15 23:49:02 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:49:02 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:49:02 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:49:02 --> URI Class Initialized
DEBUG - 2013-11-15 23:49:02 --> Router Class Initialized
DEBUG - 2013-11-15 23:49:02 --> Output Class Initialized
DEBUG - 2013-11-15 23:49:02 --> Security Class Initialized
DEBUG - 2013-11-15 23:49:02 --> Input Class Initialized
DEBUG - 2013-11-15 23:49:02 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:49:02 --> Language Class Initialized
DEBUG - 2013-11-15 23:49:02 --> Loader Class Initialized
DEBUG - 2013-11-15 23:49:02 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:49:02 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:49:02 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:49:02 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:49:02 --> Session Class Initialized
DEBUG - 2013-11-15 23:49:02 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:49:02 --> Session routines successfully run
DEBUG - 2013-11-15 23:49:02 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:49:02 --> Controller Class Initialized
DEBUG - 2013-11-15 23:49:02 --> Model Class Initialized
DEBUG - 2013-11-15 23:49:02 --> Model Class Initialized
DEBUG - 2013-11-15 23:49:02 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:49:02 --> after session initialization................
INFO  - 2013-11-15 23:49:02 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>3
INFO  - 2013-11-15 23:49:02 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` =  '3'
DEBUG - 2013-11-15 23:49:02 --> Final output sent to browser
DEBUG - 2013-11-15 23:49:02 --> Total execution time: 0.0468
DEBUG - 2013-11-15 23:53:01 --> Config Class Initialized
DEBUG - 2013-11-15 23:53:01 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:53:01 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:53:01 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:53:01 --> URI Class Initialized
DEBUG - 2013-11-15 23:53:01 --> Router Class Initialized
DEBUG - 2013-11-15 23:53:01 --> Output Class Initialized
DEBUG - 2013-11-15 23:53:01 --> Security Class Initialized
DEBUG - 2013-11-15 23:53:01 --> Input Class Initialized
DEBUG - 2013-11-15 23:53:01 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:53:01 --> Language Class Initialized
DEBUG - 2013-11-15 23:53:01 --> Loader Class Initialized
DEBUG - 2013-11-15 23:53:01 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:53:01 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:53:01 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:53:01 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:53:01 --> Session Class Initialized
DEBUG - 2013-11-15 23:53:01 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:53:01 --> Session routines successfully run
DEBUG - 2013-11-15 23:53:01 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:53:01 --> Controller Class Initialized
DEBUG - 2013-11-15 23:53:01 --> Model Class Initialized
DEBUG - 2013-11-15 23:53:01 --> Model Class Initialized
DEBUG - 2013-11-15 23:53:01 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:53:01 --> after session initialization................
INFO  - 2013-11-15 23:53:01 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 23:53:01 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 23:53:01 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 23:53:01 --> inside retrieving locations 
INFO  - 2013-11-15 23:53:01 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 23:53:01 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 23:53:01 --> Final output sent to browser
DEBUG - 2013-11-15 23:53:01 --> Total execution time: 0.0624
DEBUG - 2013-11-15 23:53:02 --> Config Class Initialized
DEBUG - 2013-11-15 23:53:02 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:53:02 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:53:02 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:53:02 --> URI Class Initialized
DEBUG - 2013-11-15 23:53:02 --> Router Class Initialized
DEBUG - 2013-11-15 23:53:02 --> Output Class Initialized
DEBUG - 2013-11-15 23:53:02 --> Security Class Initialized
DEBUG - 2013-11-15 23:53:02 --> Input Class Initialized
DEBUG - 2013-11-15 23:53:02 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:53:02 --> Language Class Initialized
DEBUG - 2013-11-15 23:53:02 --> Loader Class Initialized
DEBUG - 2013-11-15 23:53:02 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:53:02 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:53:02 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:53:02 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:53:02 --> Session Class Initialized
DEBUG - 2013-11-15 23:53:02 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:53:02 --> Session routines successfully run
DEBUG - 2013-11-15 23:53:02 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:53:02 --> Controller Class Initialized
DEBUG - 2013-11-15 23:53:02 --> Model Class Initialized
DEBUG - 2013-11-15 23:53:02 --> Model Class Initialized
DEBUG - 2013-11-15 23:53:02 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:53:02 --> after session initialization................
INFO  - 2013-11-15 23:53:02 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-15 23:53:02 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-15 23:53:02 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-15 23:53:02 --> inside retrieving locations 
INFO  - 2013-11-15 23:53:02 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-15 23:53:02 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-15 23:53:02 --> Final output sent to browser
DEBUG - 2013-11-15 23:53:02 --> Total execution time: 0.0468
DEBUG - 2013-11-15 23:53:08 --> Config Class Initialized
DEBUG - 2013-11-15 23:53:08 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:53:08 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:53:08 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:53:08 --> URI Class Initialized
DEBUG - 2013-11-15 23:53:08 --> Router Class Initialized
DEBUG - 2013-11-15 23:53:08 --> Output Class Initialized
DEBUG - 2013-11-15 23:53:08 --> Security Class Initialized
DEBUG - 2013-11-15 23:53:08 --> Input Class Initialized
DEBUG - 2013-11-15 23:53:08 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:53:08 --> Language Class Initialized
DEBUG - 2013-11-15 23:53:08 --> Loader Class Initialized
DEBUG - 2013-11-15 23:53:08 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:53:08 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:53:08 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:53:08 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:53:08 --> Session Class Initialized
DEBUG - 2013-11-15 23:53:08 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:53:08 --> Session routines successfully run
DEBUG - 2013-11-15 23:53:08 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:53:08 --> Controller Class Initialized
DEBUG - 2013-11-15 23:53:08 --> Model Class Initialized
DEBUG - 2013-11-15 23:53:08 --> Model Class Initialized
DEBUG - 2013-11-15 23:53:08 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:53:08 --> after session initialization................
INFO  - 2013-11-15 23:53:08 --> last pharmacy id is 26
INFO  - 2013-11-15 23:53:08 --> Ajax retrieval ::::::::::===>SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` > 26
ORDER BY `p`.`id_pharmacy`, `p`.`name` desc
LIMIT 25
DEBUG - 2013-11-15 23:53:08 --> Final output sent to browser
DEBUG - 2013-11-15 23:53:08 --> Total execution time: 0.0468
DEBUG - 2013-11-15 23:53:12 --> Config Class Initialized
DEBUG - 2013-11-15 23:53:12 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:53:12 --> Config Class Initialized
DEBUG - 2013-11-15 23:53:12 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:53:12 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:53:12 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:53:12 --> URI Class Initialized
DEBUG - 2013-11-15 23:53:12 --> Router Class Initialized
DEBUG - 2013-11-15 23:53:12 --> Output Class Initialized
DEBUG - 2013-11-15 23:53:12 --> Security Class Initialized
DEBUG - 2013-11-15 23:53:12 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:53:12 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:53:12 --> Input Class Initialized
DEBUG - 2013-11-15 23:53:12 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:53:12 --> URI Class Initialized
DEBUG - 2013-11-15 23:53:12 --> Router Class Initialized
DEBUG - 2013-11-15 23:53:12 --> Output Class Initialized
DEBUG - 2013-11-15 23:53:12 --> Language Class Initialized
DEBUG - 2013-11-15 23:53:12 --> Security Class Initialized
DEBUG - 2013-11-15 23:53:12 --> Config Class Initialized
DEBUG - 2013-11-15 23:53:12 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:53:12 --> Input Class Initialized
DEBUG - 2013-11-15 23:53:12 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:53:12 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:53:12 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:53:12 --> Loader Class Initialized
DEBUG - 2013-11-15 23:53:12 --> URI Class Initialized
DEBUG - 2013-11-15 23:53:12 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:53:12 --> Router Class Initialized
DEBUG - 2013-11-15 23:53:12 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:53:12 --> Language Class Initialized
DEBUG - 2013-11-15 23:53:12 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:53:12 --> Output Class Initialized
DEBUG - 2013-11-15 23:53:12 --> Security Class Initialized
DEBUG - 2013-11-15 23:53:12 --> Input Class Initialized
DEBUG - 2013-11-15 23:53:12 --> Loader Class Initialized
DEBUG - 2013-11-15 23:53:12 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:53:12 --> Language Class Initialized
DEBUG - 2013-11-15 23:53:12 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:53:12 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:53:12 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:53:12 --> Session Class Initialized
DEBUG - 2013-11-15 23:53:12 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:53:12 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:53:12 --> Session routines successfully run
DEBUG - 2013-11-15 23:53:12 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:53:12 --> Controller Class Initialized
DEBUG - 2013-11-15 23:53:12 --> Model Class Initialized
DEBUG - 2013-11-15 23:53:12 --> Model Class Initialized
DEBUG - 2013-11-15 23:53:12 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:53:12 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:53:12 --> after session initialization................
ERROR - 2013-11-15 23:53:12 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 23:53:12 --> Loader Class Initialized
DEBUG - 2013-11-15 23:53:12 --> Session Class Initialized
DEBUG - 2013-11-15 23:53:12 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:53:12 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:53:12 --> Session routines successfully run
DEBUG - 2013-11-15 23:53:12 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:53:12 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:53:12 --> Controller Class Initialized
DEBUG - 2013-11-15 23:53:12 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:53:12 --> Model Class Initialized
DEBUG - 2013-11-15 23:53:12 --> Model Class Initialized
DEBUG - 2013-11-15 23:53:12 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:53:12 --> after session initialization................
ERROR - 2013-11-15 23:53:12 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 23:53:12 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:53:12 --> Session Class Initialized
DEBUG - 2013-11-15 23:53:12 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:53:12 --> Session routines successfully run
DEBUG - 2013-11-15 23:53:12 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:53:12 --> Controller Class Initialized
DEBUG - 2013-11-15 23:53:12 --> Model Class Initialized
DEBUG - 2013-11-15 23:53:12 --> Model Class Initialized
DEBUG - 2013-11-15 23:53:12 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:53:12 --> after session initialization................
ERROR - 2013-11-15 23:53:12 --> 404 Page Not Found --> user_authorization/undefinedimages
DEBUG - 2013-11-15 23:53:20 --> Config Class Initialized
DEBUG - 2013-11-15 23:53:20 --> Hooks Class Initialized
DEBUG - 2013-11-15 23:53:20 --> Utf8 Class Initialized
DEBUG - 2013-11-15 23:53:20 --> UTF-8 Support Enabled
DEBUG - 2013-11-15 23:53:20 --> URI Class Initialized
DEBUG - 2013-11-15 23:53:20 --> Router Class Initialized
DEBUG - 2013-11-15 23:53:20 --> Output Class Initialized
DEBUG - 2013-11-15 23:53:20 --> Security Class Initialized
DEBUG - 2013-11-15 23:53:20 --> Input Class Initialized
DEBUG - 2013-11-15 23:53:20 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-15 23:53:20 --> Language Class Initialized
DEBUG - 2013-11-15 23:53:20 --> Loader Class Initialized
DEBUG - 2013-11-15 23:53:20 --> Helper loaded: form_helper
DEBUG - 2013-11-15 23:53:20 --> Helper loaded: url_helper
DEBUG - 2013-11-15 23:53:20 --> Helper loaded: html_helper
DEBUG - 2013-11-15 23:53:20 --> Database Driver Class Initialized
DEBUG - 2013-11-15 23:53:20 --> Session Class Initialized
DEBUG - 2013-11-15 23:53:20 --> Helper loaded: string_helper
DEBUG - 2013-11-15 23:53:20 --> Session routines successfully run
DEBUG - 2013-11-15 23:53:20 --> Form Validation Class Initialized
DEBUG - 2013-11-15 23:53:20 --> Controller Class Initialized
DEBUG - 2013-11-15 23:53:20 --> Model Class Initialized
DEBUG - 2013-11-15 23:53:20 --> Model Class Initialized
DEBUG - 2013-11-15 23:53:20 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-15 23:53:20 --> after session initialization................
INFO  - 2013-11-15 23:53:20 --> last pharmacy id is 34
INFO  - 2013-11-15 23:53:20 --> Ajax retrieval ::::::::::===>SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` > 34
ORDER BY `p`.`id_pharmacy`, `p`.`name` desc
LIMIT 25
DEBUG - 2013-11-15 23:53:20 --> Final output sent to browser
DEBUG - 2013-11-15 23:53:20 --> Total execution time: 0.0468
