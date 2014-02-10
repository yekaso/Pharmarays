<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2013-09-25 13:10:17 --> Config Class Initialized
DEBUG - 2013-09-25 13:10:17 --> Hooks Class Initialized
DEBUG - 2013-09-25 13:10:17 --> Utf8 Class Initialized
DEBUG - 2013-09-25 13:10:17 --> UTF-8 Support Enabled
DEBUG - 2013-09-25 13:10:17 --> URI Class Initialized
DEBUG - 2013-09-25 13:10:17 --> Router Class Initialized
DEBUG - 2013-09-25 13:10:17 --> No URI present. Default controller set.
DEBUG - 2013-09-25 13:10:17 --> Output Class Initialized
DEBUG - 2013-09-25 13:10:17 --> Security Class Initialized
DEBUG - 2013-09-25 13:10:17 --> Input Class Initialized
DEBUG - 2013-09-25 13:10:25 --> Config Class Initialized
DEBUG - 2013-09-25 13:10:25 --> Hooks Class Initialized
DEBUG - 2013-09-25 13:10:25 --> Utf8 Class Initialized
DEBUG - 2013-09-25 13:10:25 --> UTF-8 Support Enabled
DEBUG - 2013-09-25 13:10:25 --> URI Class Initialized
DEBUG - 2013-09-25 13:10:25 --> Router Class Initialized
DEBUG - 2013-09-25 13:10:25 --> No URI present. Default controller set.
DEBUG - 2013-09-25 13:10:25 --> Output Class Initialized
DEBUG - 2013-09-25 13:10:25 --> Security Class Initialized
DEBUG - 2013-09-25 13:10:25 --> Input Class Initialized
DEBUG - 2013-09-25 13:10:25 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-25 13:10:25 --> Language Class Initialized
DEBUG - 2013-09-25 13:10:25 --> Loader Class Initialized
DEBUG - 2013-09-25 13:10:25 --> Helper loaded: form_helper
DEBUG - 2013-09-25 13:10:25 --> Helper loaded: url_helper
DEBUG - 2013-09-25 13:10:25 --> Helper loaded: html_helper
DEBUG - 2013-09-25 13:10:25 --> Database Driver Class Initialized
DEBUG - 2013-09-25 13:10:27 --> Session Class Initialized
DEBUG - 2013-09-25 13:10:27 --> Helper loaded: string_helper
DEBUG - 2013-09-25 13:10:27 --> A session cookie was not found.
DEBUG - 2013-09-25 13:10:27 --> Session routines successfully run
DEBUG - 2013-09-25 13:10:27 --> Form Validation Class Initialized
DEBUG - 2013-09-25 13:10:27 --> Controller Class Initialized
INFO  - 2013-09-25 13:10:27 --> the form message==>
INFO  - 2013-09-25 13:10:27 --> after the retrieving session list.................//////////
DEBUG - 2013-09-25 13:10:27 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-25 13:10:27 --> Final output sent to browser
DEBUG - 2013-09-25 13:10:27 --> Total execution time: 1.6231
DEBUG - 2013-09-25 13:10:29 --> Config Class Initialized
DEBUG - 2013-09-25 13:10:29 --> Hooks Class Initialized
DEBUG - 2013-09-25 13:10:29 --> Utf8 Class Initialized
DEBUG - 2013-09-25 13:10:29 --> UTF-8 Support Enabled
DEBUG - 2013-09-25 13:10:29 --> URI Class Initialized
DEBUG - 2013-09-25 13:10:29 --> Router Class Initialized
DEBUG - 2013-09-25 13:10:29 --> Output Class Initialized
DEBUG - 2013-09-25 13:10:29 --> Security Class Initialized
DEBUG - 2013-09-25 13:10:29 --> Input Class Initialized
DEBUG - 2013-09-25 13:10:29 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-25 13:10:29 --> Language Class Initialized
DEBUG - 2013-09-25 13:10:29 --> Loader Class Initialized
DEBUG - 2013-09-25 13:10:29 --> Helper loaded: form_helper
DEBUG - 2013-09-25 13:10:29 --> Helper loaded: url_helper
DEBUG - 2013-09-25 13:10:29 --> Helper loaded: html_helper
DEBUG - 2013-09-25 13:10:29 --> Database Driver Class Initialized
DEBUG - 2013-09-25 13:10:29 --> Session Class Initialized
DEBUG - 2013-09-25 13:10:29 --> Helper loaded: string_helper
DEBUG - 2013-09-25 13:10:29 --> Session routines successfully run
DEBUG - 2013-09-25 13:10:29 --> Form Validation Class Initialized
DEBUG - 2013-09-25 13:10:29 --> Controller Class Initialized
DEBUG - 2013-09-25 13:10:29 --> Model Class Initialized
DEBUG - 2013-09-25 13:10:29 --> Model Class Initialized
DEBUG - 2013-09-25 13:10:29 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-25 13:10:29 --> after session initialization................
INFO  - 2013-09-25 13:10:29 --> after rays has been clicked.................
INFO  - 2013-09-25 13:10:29 --> last news id is 0
INFO  - 2013-09-25 13:10:30 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-25 13:10:30 --> last news id is 0
INFO  - 2013-09-25 13:10:30 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-25 13:10:30 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-25 13:10:30 --> Final output sent to browser
DEBUG - 2013-09-25 13:10:30 --> Total execution time: 0.5590
DEBUG - 2013-09-25 13:10:32 --> Config Class Initialized
DEBUG - 2013-09-25 13:10:32 --> Hooks Class Initialized
DEBUG - 2013-09-25 13:10:32 --> Utf8 Class Initialized
DEBUG - 2013-09-25 13:10:32 --> UTF-8 Support Enabled
DEBUG - 2013-09-25 13:10:32 --> URI Class Initialized
DEBUG - 2013-09-25 13:10:32 --> Router Class Initialized
DEBUG - 2013-09-25 13:10:32 --> Output Class Initialized
DEBUG - 2013-09-25 13:10:32 --> Security Class Initialized
DEBUG - 2013-09-25 13:10:32 --> Input Class Initialized
DEBUG - 2013-09-25 13:10:32 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-25 13:10:32 --> Language Class Initialized
DEBUG - 2013-09-25 13:10:32 --> Loader Class Initialized
DEBUG - 2013-09-25 13:10:32 --> Helper loaded: form_helper
DEBUG - 2013-09-25 13:10:32 --> Helper loaded: url_helper
DEBUG - 2013-09-25 13:10:32 --> Helper loaded: html_helper
DEBUG - 2013-09-25 13:10:32 --> Database Driver Class Initialized
DEBUG - 2013-09-25 13:10:33 --> Session Class Initialized
DEBUG - 2013-09-25 13:10:33 --> Helper loaded: string_helper
DEBUG - 2013-09-25 13:10:33 --> Session routines successfully run
DEBUG - 2013-09-25 13:10:33 --> Form Validation Class Initialized
DEBUG - 2013-09-25 13:10:33 --> Controller Class Initialized
DEBUG - 2013-09-25 13:10:33 --> Model Class Initialized
DEBUG - 2013-09-25 13:10:33 --> Model Class Initialized
DEBUG - 2013-09-25 13:10:33 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-25 13:10:33 --> after session initialization................
ERROR - 2013-09-25 13:10:33 --> Severity: Warning  --> Missing argument 1 for user_authorization::index() C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 69
ERROR - 2013-09-25 13:10:33 --> Severity: Notice  --> Undefined variable: message C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 71
DEBUG - 2013-09-25 13:10:33 --> Config Class Initialized
DEBUG - 2013-09-25 13:10:33 --> Hooks Class Initialized
DEBUG - 2013-09-25 13:10:33 --> Utf8 Class Initialized
DEBUG - 2013-09-25 13:10:33 --> UTF-8 Support Enabled
DEBUG - 2013-09-25 13:10:33 --> URI Class Initialized
DEBUG - 2013-09-25 13:10:33 --> Router Class Initialized
DEBUG - 2013-09-25 13:10:33 --> No URI present. Default controller set.
DEBUG - 2013-09-25 13:10:33 --> Output Class Initialized
DEBUG - 2013-09-25 13:10:33 --> Security Class Initialized
DEBUG - 2013-09-25 13:10:33 --> Input Class Initialized
DEBUG - 2013-09-25 13:10:33 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-25 13:10:33 --> Language Class Initialized
DEBUG - 2013-09-25 13:10:33 --> Loader Class Initialized
DEBUG - 2013-09-25 13:10:33 --> Helper loaded: form_helper
DEBUG - 2013-09-25 13:10:33 --> Helper loaded: url_helper
DEBUG - 2013-09-25 13:10:33 --> Helper loaded: html_helper
DEBUG - 2013-09-25 13:10:33 --> Database Driver Class Initialized
DEBUG - 2013-09-25 13:10:33 --> Session Class Initialized
DEBUG - 2013-09-25 13:10:33 --> Helper loaded: string_helper
DEBUG - 2013-09-25 13:10:33 --> Session routines successfully run
DEBUG - 2013-09-25 13:10:33 --> Form Validation Class Initialized
DEBUG - 2013-09-25 13:10:33 --> Controller Class Initialized
INFO  - 2013-09-25 13:10:33 --> the form message==>
INFO  - 2013-09-25 13:10:33 --> after the retrieving session list.................//////////
DEBUG - 2013-09-25 13:10:33 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-25 13:10:33 --> Final output sent to browser
DEBUG - 2013-09-25 13:10:33 --> Total execution time: 0.0420
DEBUG - 2013-09-25 13:11:31 --> Config Class Initialized
DEBUG - 2013-09-25 13:11:31 --> Hooks Class Initialized
DEBUG - 2013-09-25 13:11:31 --> Utf8 Class Initialized
DEBUG - 2013-09-25 13:11:31 --> UTF-8 Support Enabled
DEBUG - 2013-09-25 13:11:31 --> URI Class Initialized
DEBUG - 2013-09-25 13:11:31 --> Router Class Initialized
DEBUG - 2013-09-25 13:11:31 --> No URI present. Default controller set.
DEBUG - 2013-09-25 13:11:31 --> Output Class Initialized
DEBUG - 2013-09-25 13:11:31 --> Security Class Initialized
DEBUG - 2013-09-25 13:11:31 --> Input Class Initialized
DEBUG - 2013-09-25 13:11:38 --> Config Class Initialized
DEBUG - 2013-09-25 13:11:38 --> Hooks Class Initialized
DEBUG - 2013-09-25 13:11:38 --> Utf8 Class Initialized
DEBUG - 2013-09-25 13:11:38 --> UTF-8 Support Enabled
DEBUG - 2013-09-25 13:11:38 --> URI Class Initialized
DEBUG - 2013-09-25 13:11:38 --> Router Class Initialized
DEBUG - 2013-09-25 13:11:38 --> Output Class Initialized
DEBUG - 2013-09-25 13:11:38 --> Security Class Initialized
DEBUG - 2013-09-25 13:11:38 --> Input Class Initialized
DEBUG - 2013-09-25 13:11:38 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-25 13:11:38 --> Language Class Initialized
DEBUG - 2013-09-25 13:11:38 --> Loader Class Initialized
DEBUG - 2013-09-25 13:11:38 --> Helper loaded: form_helper
DEBUG - 2013-09-25 13:11:38 --> Helper loaded: url_helper
DEBUG - 2013-09-25 13:11:38 --> Helper loaded: html_helper
DEBUG - 2013-09-25 13:11:38 --> Database Driver Class Initialized
DEBUG - 2013-09-25 13:11:39 --> Session Class Initialized
DEBUG - 2013-09-25 13:11:39 --> Helper loaded: string_helper
DEBUG - 2013-09-25 13:11:39 --> Session routines successfully run
DEBUG - 2013-09-25 13:11:39 --> Form Validation Class Initialized
DEBUG - 2013-09-25 13:11:39 --> Controller Class Initialized
DEBUG - 2013-09-25 13:11:39 --> Model Class Initialized
DEBUG - 2013-09-25 13:11:39 --> Model Class Initialized
DEBUG - 2013-09-25 13:11:39 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-25 13:11:39 --> after session initialization................
INFO  - 2013-09-25 13:11:39 --> after rays has been clicked.................
INFO  - 2013-09-25 13:11:39 --> last news id is 0
INFO  - 2013-09-25 13:11:39 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-25 13:11:39 --> last news id is 0
INFO  - 2013-09-25 13:11:39 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-25 13:11:39 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-25 13:11:39 --> Final output sent to browser
DEBUG - 2013-09-25 13:11:39 --> Total execution time: 1.0641
DEBUG - 2013-09-25 13:11:46 --> Config Class Initialized
DEBUG - 2013-09-25 13:11:46 --> Hooks Class Initialized
DEBUG - 2013-09-25 13:11:46 --> Utf8 Class Initialized
DEBUG - 2013-09-25 13:11:46 --> UTF-8 Support Enabled
DEBUG - 2013-09-25 13:11:46 --> URI Class Initialized
DEBUG - 2013-09-25 13:11:46 --> Router Class Initialized
DEBUG - 2013-09-25 13:11:46 --> Output Class Initialized
DEBUG - 2013-09-25 13:11:46 --> Security Class Initialized
DEBUG - 2013-09-25 13:11:46 --> Input Class Initialized
DEBUG - 2013-09-25 13:11:46 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-25 13:11:46 --> Language Class Initialized
DEBUG - 2013-09-25 13:11:46 --> Loader Class Initialized
DEBUG - 2013-09-25 13:11:46 --> Helper loaded: form_helper
DEBUG - 2013-09-25 13:11:46 --> Helper loaded: url_helper
DEBUG - 2013-09-25 13:11:46 --> Helper loaded: html_helper
DEBUG - 2013-09-25 13:11:46 --> Database Driver Class Initialized
DEBUG - 2013-09-25 13:11:47 --> Session Class Initialized
DEBUG - 2013-09-25 13:11:47 --> Helper loaded: string_helper
DEBUG - 2013-09-25 13:11:47 --> Session routines successfully run
DEBUG - 2013-09-25 13:11:47 --> Form Validation Class Initialized
DEBUG - 2013-09-25 13:11:47 --> Controller Class Initialized
DEBUG - 2013-09-25 13:11:47 --> Model Class Initialized
DEBUG - 2013-09-25 13:11:47 --> Model Class Initialized
DEBUG - 2013-09-25 13:11:47 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-25 13:11:47 --> after session initialization................
INFO  - 2013-09-25 13:11:47 --> last news id is 1
INFO  - 2013-09-25 13:11:47 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-25 13:11:47 --> last news id is 103
INFO  - 2013-09-25 13:11:47 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 103
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-25 13:11:47 --> Final output sent to browser
DEBUG - 2013-09-25 13:11:47 --> Total execution time: 1.1521
DEBUG - 2013-09-25 13:11:48 --> Config Class Initialized
DEBUG - 2013-09-25 13:11:48 --> Hooks Class Initialized
DEBUG - 2013-09-25 13:11:48 --> Utf8 Class Initialized
DEBUG - 2013-09-25 13:11:48 --> UTF-8 Support Enabled
DEBUG - 2013-09-25 13:11:48 --> URI Class Initialized
DEBUG - 2013-09-25 13:11:48 --> Router Class Initialized
DEBUG - 2013-09-25 13:11:48 --> Output Class Initialized
DEBUG - 2013-09-25 13:11:48 --> Security Class Initialized
DEBUG - 2013-09-25 13:11:48 --> Input Class Initialized
DEBUG - 2013-09-25 13:11:49 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-25 13:11:49 --> Language Class Initialized
DEBUG - 2013-09-25 13:11:49 --> Loader Class Initialized
DEBUG - 2013-09-25 13:11:49 --> Helper loaded: form_helper
DEBUG - 2013-09-25 13:11:49 --> Helper loaded: url_helper
DEBUG - 2013-09-25 13:11:49 --> Helper loaded: html_helper
DEBUG - 2013-09-25 13:11:49 --> Database Driver Class Initialized
DEBUG - 2013-09-25 13:11:49 --> Session Class Initialized
DEBUG - 2013-09-25 13:11:49 --> Helper loaded: string_helper
DEBUG - 2013-09-25 13:11:49 --> Session routines successfully run
DEBUG - 2013-09-25 13:11:49 --> Form Validation Class Initialized
DEBUG - 2013-09-25 13:11:49 --> Controller Class Initialized
DEBUG - 2013-09-25 13:11:49 --> Model Class Initialized
DEBUG - 2013-09-25 13:11:49 --> Model Class Initialized
DEBUG - 2013-09-25 13:11:49 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-25 13:11:49 --> after session initialization................
INFO  - 2013-09-25 13:11:49 --> last news id is 1
INFO  - 2013-09-25 13:11:49 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-25 13:11:49 --> last news id is 93
INFO  - 2013-09-25 13:11:49 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 93
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-25 13:11:49 --> Final output sent to browser
DEBUG - 2013-09-25 13:11:49 --> Total execution time: 0.0790
DEBUG - 2013-09-25 13:11:50 --> Config Class Initialized
DEBUG - 2013-09-25 13:11:50 --> Hooks Class Initialized
DEBUG - 2013-09-25 13:11:50 --> Utf8 Class Initialized
DEBUG - 2013-09-25 13:11:50 --> UTF-8 Support Enabled
DEBUG - 2013-09-25 13:11:50 --> URI Class Initialized
DEBUG - 2013-09-25 13:11:50 --> Router Class Initialized
DEBUG - 2013-09-25 13:11:50 --> Output Class Initialized
DEBUG - 2013-09-25 13:11:50 --> Security Class Initialized
DEBUG - 2013-09-25 13:11:50 --> Input Class Initialized
DEBUG - 2013-09-25 13:11:50 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-25 13:11:50 --> Language Class Initialized
DEBUG - 2013-09-25 13:11:50 --> Loader Class Initialized
DEBUG - 2013-09-25 13:11:50 --> Helper loaded: form_helper
DEBUG - 2013-09-25 13:11:50 --> Helper loaded: url_helper
DEBUG - 2013-09-25 13:11:50 --> Helper loaded: html_helper
DEBUG - 2013-09-25 13:11:50 --> Database Driver Class Initialized
DEBUG - 2013-09-25 13:11:50 --> Session Class Initialized
DEBUG - 2013-09-25 13:11:50 --> Helper loaded: string_helper
DEBUG - 2013-09-25 13:11:50 --> Session routines successfully run
DEBUG - 2013-09-25 13:11:50 --> Form Validation Class Initialized
DEBUG - 2013-09-25 13:11:50 --> Controller Class Initialized
DEBUG - 2013-09-25 13:11:50 --> Model Class Initialized
DEBUG - 2013-09-25 13:11:50 --> Model Class Initialized
DEBUG - 2013-09-25 13:11:50 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-25 13:11:50 --> after session initialization................
INFO  - 2013-09-25 13:11:50 --> last news id is 1
INFO  - 2013-09-25 13:11:50 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-25 13:11:50 --> last news id is 83
INFO  - 2013-09-25 13:11:50 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 83
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-25 13:11:50 --> Final output sent to browser
DEBUG - 2013-09-25 13:11:50 --> Total execution time: 0.0580
DEBUG - 2013-09-25 13:11:59 --> Config Class Initialized
DEBUG - 2013-09-25 13:11:59 --> Hooks Class Initialized
DEBUG - 2013-09-25 13:11:59 --> Utf8 Class Initialized
DEBUG - 2013-09-25 13:11:59 --> UTF-8 Support Enabled
DEBUG - 2013-09-25 13:11:59 --> URI Class Initialized
DEBUG - 2013-09-25 13:11:59 --> Router Class Initialized
DEBUG - 2013-09-25 13:11:59 --> Output Class Initialized
DEBUG - 2013-09-25 13:11:59 --> Security Class Initialized
DEBUG - 2013-09-25 13:11:59 --> Input Class Initialized
DEBUG - 2013-09-25 13:11:59 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-25 13:11:59 --> Language Class Initialized
DEBUG - 2013-09-25 13:11:59 --> Loader Class Initialized
DEBUG - 2013-09-25 13:11:59 --> Helper loaded: form_helper
DEBUG - 2013-09-25 13:11:59 --> Helper loaded: url_helper
DEBUG - 2013-09-25 13:11:59 --> Helper loaded: html_helper
DEBUG - 2013-09-25 13:11:59 --> Database Driver Class Initialized
DEBUG - 2013-09-25 13:12:00 --> Session Class Initialized
DEBUG - 2013-09-25 13:12:00 --> Helper loaded: string_helper
DEBUG - 2013-09-25 13:12:00 --> Session routines successfully run
DEBUG - 2013-09-25 13:12:00 --> Form Validation Class Initialized
DEBUG - 2013-09-25 13:12:00 --> Controller Class Initialized
DEBUG - 2013-09-25 13:12:00 --> Model Class Initialized
DEBUG - 2013-09-25 13:12:00 --> Model Class Initialized
DEBUG - 2013-09-25 13:12:00 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-25 13:12:00 --> after session initialization................
INFO  - 2013-09-25 13:12:00 --> last news id is 1
INFO  - 2013-09-25 13:12:00 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-25 13:12:00 --> last news id is 73
INFO  - 2013-09-25 13:12:00 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 73
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-25 13:12:00 --> Final output sent to browser
DEBUG - 2013-09-25 13:12:00 --> Total execution time: 1.0741
DEBUG - 2013-09-25 13:13:44 --> Config Class Initialized
DEBUG - 2013-09-25 13:13:44 --> Hooks Class Initialized
DEBUG - 2013-09-25 13:13:44 --> Utf8 Class Initialized
DEBUG - 2013-09-25 13:13:44 --> UTF-8 Support Enabled
DEBUG - 2013-09-25 13:13:44 --> URI Class Initialized
DEBUG - 2013-09-25 13:13:45 --> Router Class Initialized
DEBUG - 2013-09-25 13:13:45 --> Output Class Initialized
DEBUG - 2013-09-25 13:13:45 --> Security Class Initialized
DEBUG - 2013-09-25 13:13:45 --> Input Class Initialized
DEBUG - 2013-09-25 13:13:45 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-25 13:13:45 --> Language Class Initialized
DEBUG - 2013-09-25 13:13:45 --> Loader Class Initialized
DEBUG - 2013-09-25 13:13:45 --> Helper loaded: form_helper
DEBUG - 2013-09-25 13:13:45 --> Helper loaded: url_helper
DEBUG - 2013-09-25 13:13:45 --> Helper loaded: html_helper
DEBUG - 2013-09-25 13:13:45 --> Database Driver Class Initialized
DEBUG - 2013-09-25 13:13:46 --> Session Class Initialized
DEBUG - 2013-09-25 13:13:46 --> Helper loaded: string_helper
DEBUG - 2013-09-25 13:13:46 --> Session routines successfully run
DEBUG - 2013-09-25 13:13:46 --> Form Validation Class Initialized
DEBUG - 2013-09-25 13:13:46 --> Controller Class Initialized
DEBUG - 2013-09-25 13:13:46 --> Model Class Initialized
DEBUG - 2013-09-25 13:13:46 --> Model Class Initialized
DEBUG - 2013-09-25 13:13:46 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-25 13:13:46 --> after session initialization................
INFO  - 2013-09-25 13:13:46 --> last news id is 1
INFO  - 2013-09-25 13:13:46 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-25 13:13:46 --> last news id is 62
INFO  - 2013-09-25 13:13:46 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 62
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-25 13:13:46 --> Final output sent to browser
DEBUG - 2013-09-25 13:13:46 --> Total execution time: 1.1331
DEBUG - 2013-09-25 13:13:47 --> Config Class Initialized
DEBUG - 2013-09-25 13:13:47 --> Hooks Class Initialized
DEBUG - 2013-09-25 13:13:47 --> Utf8 Class Initialized
DEBUG - 2013-09-25 13:13:47 --> UTF-8 Support Enabled
DEBUG - 2013-09-25 13:13:47 --> URI Class Initialized
DEBUG - 2013-09-25 13:13:47 --> Router Class Initialized
DEBUG - 2013-09-25 13:13:47 --> Output Class Initialized
DEBUG - 2013-09-25 13:13:47 --> Security Class Initialized
DEBUG - 2013-09-25 13:13:47 --> Input Class Initialized
DEBUG - 2013-09-25 13:13:47 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-25 13:13:47 --> Language Class Initialized
DEBUG - 2013-09-25 13:13:47 --> Loader Class Initialized
DEBUG - 2013-09-25 13:13:47 --> Helper loaded: form_helper
DEBUG - 2013-09-25 13:13:47 --> Helper loaded: url_helper
DEBUG - 2013-09-25 13:13:47 --> Helper loaded: html_helper
DEBUG - 2013-09-25 13:13:47 --> Database Driver Class Initialized
DEBUG - 2013-09-25 13:13:47 --> Session Class Initialized
DEBUG - 2013-09-25 13:13:47 --> Helper loaded: string_helper
DEBUG - 2013-09-25 13:13:47 --> Session routines successfully run
DEBUG - 2013-09-25 13:13:47 --> Form Validation Class Initialized
DEBUG - 2013-09-25 13:13:47 --> Controller Class Initialized
DEBUG - 2013-09-25 13:13:47 --> Model Class Initialized
DEBUG - 2013-09-25 13:13:47 --> Model Class Initialized
DEBUG - 2013-09-25 13:13:47 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-25 13:13:47 --> after session initialization................
INFO  - 2013-09-25 13:13:47 --> last news id is 1
INFO  - 2013-09-25 13:13:47 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-25 13:13:47 --> last news id is 52
INFO  - 2013-09-25 13:13:47 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 52
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-25 13:13:47 --> Final output sent to browser
DEBUG - 2013-09-25 13:13:47 --> Total execution time: 0.0590
DEBUG - 2013-09-25 13:14:46 --> Config Class Initialized
DEBUG - 2013-09-25 13:14:46 --> Hooks Class Initialized
DEBUG - 2013-09-25 13:14:46 --> Utf8 Class Initialized
DEBUG - 2013-09-25 13:14:46 --> UTF-8 Support Enabled
DEBUG - 2013-09-25 13:14:46 --> URI Class Initialized
DEBUG - 2013-09-25 13:14:46 --> Router Class Initialized
DEBUG - 2013-09-25 13:14:46 --> Output Class Initialized
DEBUG - 2013-09-25 13:14:46 --> Security Class Initialized
DEBUG - 2013-09-25 13:14:46 --> Input Class Initialized
DEBUG - 2013-09-25 13:14:46 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-25 13:14:46 --> Language Class Initialized
DEBUG - 2013-09-25 13:14:46 --> Loader Class Initialized
DEBUG - 2013-09-25 13:14:46 --> Helper loaded: form_helper
DEBUG - 2013-09-25 13:14:46 --> Helper loaded: url_helper
DEBUG - 2013-09-25 13:14:46 --> Helper loaded: html_helper
DEBUG - 2013-09-25 13:14:46 --> Database Driver Class Initialized
DEBUG - 2013-09-25 13:14:46 --> Session Class Initialized
DEBUG - 2013-09-25 13:14:46 --> Helper loaded: string_helper
DEBUG - 2013-09-25 13:14:46 --> Session routines successfully run
DEBUG - 2013-09-25 13:14:46 --> Form Validation Class Initialized
DEBUG - 2013-09-25 13:14:46 --> Controller Class Initialized
DEBUG - 2013-09-25 13:14:46 --> Model Class Initialized
DEBUG - 2013-09-25 13:14:46 --> Model Class Initialized
DEBUG - 2013-09-25 13:14:46 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-25 13:14:46 --> after session initialization................
ERROR - 2013-09-25 13:14:46 --> Severity: Warning  --> Missing argument 1 for user_authorization::index() C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 69
ERROR - 2013-09-25 13:14:46 --> Severity: Notice  --> Undefined variable: message C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 71
DEBUG - 2013-09-25 13:14:46 --> Config Class Initialized
DEBUG - 2013-09-25 13:14:46 --> Hooks Class Initialized
DEBUG - 2013-09-25 13:14:46 --> Utf8 Class Initialized
DEBUG - 2013-09-25 13:14:46 --> UTF-8 Support Enabled
DEBUG - 2013-09-25 13:14:46 --> URI Class Initialized
DEBUG - 2013-09-25 13:14:46 --> Router Class Initialized
DEBUG - 2013-09-25 13:14:46 --> No URI present. Default controller set.
DEBUG - 2013-09-25 13:14:46 --> Output Class Initialized
DEBUG - 2013-09-25 13:14:46 --> Security Class Initialized
DEBUG - 2013-09-25 13:14:46 --> Input Class Initialized
DEBUG - 2013-09-25 13:14:46 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-25 13:14:46 --> Language Class Initialized
DEBUG - 2013-09-25 13:14:46 --> Loader Class Initialized
DEBUG - 2013-09-25 13:14:46 --> Helper loaded: form_helper
DEBUG - 2013-09-25 13:14:46 --> Helper loaded: url_helper
DEBUG - 2013-09-25 13:14:46 --> Helper loaded: html_helper
DEBUG - 2013-09-25 13:14:46 --> Database Driver Class Initialized
DEBUG - 2013-09-25 13:14:46 --> Session Class Initialized
DEBUG - 2013-09-25 13:14:46 --> Helper loaded: string_helper
DEBUG - 2013-09-25 13:14:46 --> Session routines successfully run
DEBUG - 2013-09-25 13:14:46 --> Form Validation Class Initialized
DEBUG - 2013-09-25 13:14:46 --> Controller Class Initialized
INFO  - 2013-09-25 13:14:46 --> the form message==>
INFO  - 2013-09-25 13:14:46 --> after the retrieving session list.................//////////
DEBUG - 2013-09-25 13:14:46 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-25 13:14:46 --> Final output sent to browser
DEBUG - 2013-09-25 13:14:46 --> Total execution time: 0.0410
DEBUG - 2013-09-25 16:20:52 --> Config Class Initialized
DEBUG - 2013-09-25 16:20:52 --> Hooks Class Initialized
DEBUG - 2013-09-25 16:20:52 --> Utf8 Class Initialized
DEBUG - 2013-09-25 16:20:52 --> UTF-8 Support Enabled
DEBUG - 2013-09-25 16:20:52 --> URI Class Initialized
DEBUG - 2013-09-25 16:20:52 --> Router Class Initialized
DEBUG - 2013-09-25 16:20:52 --> Output Class Initialized
DEBUG - 2013-09-25 16:20:52 --> Security Class Initialized
DEBUG - 2013-09-25 16:20:52 --> Input Class Initialized
DEBUG - 2013-09-25 16:20:52 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-25 16:20:52 --> Language Class Initialized
DEBUG - 2013-09-25 16:20:52 --> Loader Class Initialized
DEBUG - 2013-09-25 16:20:52 --> Helper loaded: form_helper
DEBUG - 2013-09-25 16:20:52 --> Helper loaded: url_helper
DEBUG - 2013-09-25 16:20:52 --> Helper loaded: html_helper
DEBUG - 2013-09-25 16:20:52 --> Database Driver Class Initialized
DEBUG - 2013-09-25 16:20:52 --> Session Class Initialized
DEBUG - 2013-09-25 16:20:52 --> Helper loaded: string_helper
DEBUG - 2013-09-25 16:20:52 --> A session cookie was not found.
DEBUG - 2013-09-25 16:20:52 --> Session routines successfully run
DEBUG - 2013-09-25 16:20:52 --> Form Validation Class Initialized
DEBUG - 2013-09-25 16:20:52 --> Controller Class Initialized
DEBUG - 2013-09-25 16:20:52 --> Model Class Initialized
DEBUG - 2013-09-25 16:20:52 --> Model Class Initialized
DEBUG - 2013-09-25 16:20:52 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-25 16:20:52 --> after session initialization................
INFO  - 2013-09-25 16:20:52 --> inside rays login auth.............
DEBUG - 2013-09-25 16:20:52 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-09-25 16:20:52 --> XSS Filtering completed
DEBUG - 2013-09-25 16:20:52 --> XSS Filtering completed
INFO  - 2013-09-25 16:20:52 --> before getting the relation of member............6
INFO  - 2013-09-25 16:20:52 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-09-25 16:20:52 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-09-25 16:20:52 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-09-25 16:20:52 --> inside retrieving vacancy for member
INFO  - 2013-09-25 16:20:52 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-09-25 16:20:52 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-09-25 16:20:52 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-09-25 16:20:52 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-25 16:20:52 --> News by drug_id ::::::::::===>SELECT `n`.`id_news` as id, `n`.`title` as news_title, `n`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `n`.`time_created`
INFO  - 2013-09-25 16:20:52 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `n`.`title` as newsletter_title, `n`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `n`.`time_created`
INFO  - 2013-09-25 16:20:52 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-09-25 16:20:52 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-09-25 16:20:52 -->  column name inside view is 0 column Data is Health Job Vacancies 
INFO  - 2013-09-25 16:20:52 -->  column name inside view is 1 column Data is Internship / Nysc centers
INFO  - 2013-09-25 16:20:52 -->  column name inside view is 2 column Data is Pharmacy Schools
INFO  - 2013-09-25 16:20:52 -->  column name inside view is 3 column Data is Pharmacy Vacancies
INFO  - 2013-09-25 16:20:52 -->  column name inside view is Child paracetamol dosages revised column Data is Until now, children aged one to six could be given up to 10ml of paracetamol-based products such as Calpol up to four times a day...
INFO  - 2013-09-25 16:20:52 -->  column name inside view is Paracetamol death: Desiree Phillips died after taking too many, inquest told column Data is A 20-year-old mother from Carmarthenshire died after taking too many paracetamol, an inquest has heard..
DEBUG - 2013-09-25 16:20:52 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-09-25 16:20:52 --> Final output sent to browser
DEBUG - 2013-09-25 16:20:52 --> Total execution time: 0.1250
DEBUG - 2013-09-25 16:20:52 --> Config Class Initialized
DEBUG - 2013-09-25 16:20:52 --> Hooks Class Initialized
DEBUG - 2013-09-25 16:20:52 --> Utf8 Class Initialized
DEBUG - 2013-09-25 16:20:52 --> UTF-8 Support Enabled
DEBUG - 2013-09-25 16:20:52 --> URI Class Initialized
DEBUG - 2013-09-25 16:20:52 --> Router Class Initialized
DEBUG - 2013-09-25 16:20:52 --> Output Class Initialized
DEBUG - 2013-09-25 16:20:52 --> Security Class Initialized
DEBUG - 2013-09-25 16:20:52 --> Input Class Initialized
DEBUG - 2013-09-25 16:20:52 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-25 16:20:52 --> Language Class Initialized
DEBUG - 2013-09-25 16:20:52 --> Loader Class Initialized
DEBUG - 2013-09-25 16:20:52 --> Helper loaded: form_helper
DEBUG - 2013-09-25 16:20:52 --> Helper loaded: url_helper
DEBUG - 2013-09-25 16:20:52 --> Helper loaded: html_helper
DEBUG - 2013-09-25 16:20:53 --> Database Driver Class Initialized
DEBUG - 2013-09-25 16:20:53 --> Session Class Initialized
DEBUG - 2013-09-25 16:20:53 --> Helper loaded: string_helper
DEBUG - 2013-09-25 16:20:53 --> Session routines successfully run
DEBUG - 2013-09-25 16:20:53 --> Form Validation Class Initialized
DEBUG - 2013-09-25 16:20:53 --> Controller Class Initialized
DEBUG - 2013-09-25 16:20:53 --> Model Class Initialized
DEBUG - 2013-09-25 16:20:53 --> Model Class Initialized
DEBUG - 2013-09-25 16:20:53 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-25 16:20:53 --> after session initialization................
ERROR - 2013-09-25 16:20:53 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-09-25 16:20:57 --> Config Class Initialized
DEBUG - 2013-09-25 16:20:57 --> Hooks Class Initialized
DEBUG - 2013-09-25 16:20:57 --> Utf8 Class Initialized
DEBUG - 2013-09-25 16:20:57 --> UTF-8 Support Enabled
DEBUG - 2013-09-25 16:20:57 --> URI Class Initialized
DEBUG - 2013-09-25 16:20:57 --> Router Class Initialized
DEBUG - 2013-09-25 16:20:57 --> Output Class Initialized
DEBUG - 2013-09-25 16:20:57 --> Security Class Initialized
DEBUG - 2013-09-25 16:20:57 --> Input Class Initialized
DEBUG - 2013-09-25 16:20:57 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-25 16:20:57 --> Language Class Initialized
DEBUG - 2013-09-25 16:20:57 --> Loader Class Initialized
DEBUG - 2013-09-25 16:20:57 --> Helper loaded: form_helper
DEBUG - 2013-09-25 16:20:57 --> Helper loaded: url_helper
DEBUG - 2013-09-25 16:20:57 --> Helper loaded: html_helper
DEBUG - 2013-09-25 16:20:57 --> Database Driver Class Initialized
DEBUG - 2013-09-25 16:20:57 --> Session Class Initialized
DEBUG - 2013-09-25 16:20:57 --> Helper loaded: string_helper
DEBUG - 2013-09-25 16:20:57 --> Session routines successfully run
DEBUG - 2013-09-25 16:20:57 --> Form Validation Class Initialized
DEBUG - 2013-09-25 16:20:57 --> Controller Class Initialized
DEBUG - 2013-09-25 16:20:57 --> Model Class Initialized
DEBUG - 2013-09-25 16:20:57 --> Model Class Initialized
DEBUG - 2013-09-25 16:20:57 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-25 16:20:57 --> after session initialization................
INFO  - 2013-09-25 16:20:57 --> inside the auto suggest page.................
INFO  - 2013-09-25 16:20:57 --> after the list array.................
INFO  - 2013-09-25 16:20:57 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%a%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-25 16:20:57 --> after retrieving the data from db.................
INFO  - 2013-09-25 16:20:57 --> looping.................
INFO  - 2013-09-25 16:20:57 --> looping.................
INFO  - 2013-09-25 16:20:57 --> looping.................
INFO  - 2013-09-25 16:20:57 --> looping.................
INFO  - 2013-09-25 16:20:57 --> looping.................
INFO  - 2013-09-25 16:20:57 --> looping.................
INFO  - 2013-09-25 16:20:57 --> looping.................
INFO  - 2013-09-25 16:20:57 --> looping.................
INFO  - 2013-09-25 16:20:57 --> looping.................
INFO  - 2013-09-25 16:20:57 --> looping.................
INFO  - 2013-09-25 16:20:57 --> looping.................
DEBUG - 2013-09-25 16:20:57 --> Final output sent to browser
DEBUG - 2013-09-25 16:20:57 --> Total execution time: 0.0640
DEBUG - 2013-09-25 16:21:01 --> Config Class Initialized
DEBUG - 2013-09-25 16:21:01 --> Hooks Class Initialized
DEBUG - 2013-09-25 16:21:01 --> Utf8 Class Initialized
DEBUG - 2013-09-25 16:21:01 --> UTF-8 Support Enabled
DEBUG - 2013-09-25 16:21:01 --> URI Class Initialized
DEBUG - 2013-09-25 16:21:01 --> Router Class Initialized
DEBUG - 2013-09-25 16:21:01 --> Output Class Initialized
DEBUG - 2013-09-25 16:21:01 --> Security Class Initialized
DEBUG - 2013-09-25 16:21:01 --> Input Class Initialized
DEBUG - 2013-09-25 16:21:01 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-25 16:21:01 --> Language Class Initialized
DEBUG - 2013-09-25 16:21:01 --> Loader Class Initialized
DEBUG - 2013-09-25 16:21:01 --> Helper loaded: form_helper
DEBUG - 2013-09-25 16:21:01 --> Helper loaded: url_helper
DEBUG - 2013-09-25 16:21:01 --> Helper loaded: html_helper
DEBUG - 2013-09-25 16:21:01 --> Database Driver Class Initialized
DEBUG - 2013-09-25 16:21:01 --> Session Class Initialized
DEBUG - 2013-09-25 16:21:01 --> Helper loaded: string_helper
DEBUG - 2013-09-25 16:21:01 --> Session routines successfully run
DEBUG - 2013-09-25 16:21:01 --> Form Validation Class Initialized
DEBUG - 2013-09-25 16:21:01 --> Controller Class Initialized
DEBUG - 2013-09-25 16:21:01 --> Model Class Initialized
DEBUG - 2013-09-25 16:21:01 --> Model Class Initialized
DEBUG - 2013-09-25 16:21:01 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-25 16:21:01 --> after session initialization................
INFO  - 2013-09-25 16:21:01 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '11'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-25 16:21:01 --> inside retrieving comments member id and drug id is 11
INFO  - 2013-09-25 16:21:01 --> 10==============================0
INFO  - 2013-09-25 16:21:01 --> SELECT dc.id_drugcomment as id, dc.comment, dc.time_created, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 11
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-09-25 16:21:01 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 11
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-09-25 16:21:01 --> News by drug_id ::::::::::===>SELECT `n`.`id_news` as id, `n`.`title` as news_title, `n`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '11'
ORDER BY `n`.`time_created`
INFO  - 2013-09-25 16:21:01 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `n`.`title` as newsletter_title, `n`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '11'
ORDER BY `n`.`time_created`
INFO  - 2013-09-25 16:21:01 --> inside retrieving comments member type id and drug id is 11
INFO  - 2013-09-25 16:21:01 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 11
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
DEBUG - 2013-09-25 16:21:01 --> Final output sent to browser
DEBUG - 2013-09-25 16:21:01 --> Total execution time: 0.0690
DEBUG - 2013-09-25 16:23:45 --> Config Class Initialized
DEBUG - 2013-09-25 16:23:45 --> Hooks Class Initialized
DEBUG - 2013-09-25 16:23:45 --> Utf8 Class Initialized
DEBUG - 2013-09-25 16:23:45 --> UTF-8 Support Enabled
DEBUG - 2013-09-25 16:23:45 --> URI Class Initialized
DEBUG - 2013-09-25 16:23:45 --> Router Class Initialized
DEBUG - 2013-09-25 16:23:45 --> Output Class Initialized
DEBUG - 2013-09-25 16:23:45 --> Security Class Initialized
DEBUG - 2013-09-25 16:23:45 --> Input Class Initialized
DEBUG - 2013-09-25 16:23:45 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-25 16:23:45 --> Language Class Initialized
DEBUG - 2013-09-25 16:23:45 --> Loader Class Initialized
DEBUG - 2013-09-25 16:23:45 --> Helper loaded: form_helper
DEBUG - 2013-09-25 16:23:45 --> Helper loaded: url_helper
DEBUG - 2013-09-25 16:23:45 --> Helper loaded: html_helper
DEBUG - 2013-09-25 16:23:45 --> Database Driver Class Initialized
DEBUG - 2013-09-25 16:23:45 --> Session Class Initialized
DEBUG - 2013-09-25 16:23:45 --> Helper loaded: string_helper
DEBUG - 2013-09-25 16:23:45 --> Session routines successfully run
DEBUG - 2013-09-25 16:23:45 --> Form Validation Class Initialized
DEBUG - 2013-09-25 16:23:45 --> Controller Class Initialized
DEBUG - 2013-09-25 16:23:45 --> Model Class Initialized
DEBUG - 2013-09-25 16:23:45 --> Model Class Initialized
DEBUG - 2013-09-25 16:23:45 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-25 16:23:45 --> after session initialization................
INFO  - 2013-09-25 16:23:45 --> inside the auto suggest page.................
INFO  - 2013-09-25 16:23:45 --> after the list array.................
INFO  - 2013-09-25 16:23:45 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%a%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-25 16:23:45 --> after retrieving the data from db.................
INFO  - 2013-09-25 16:23:45 --> looping.................
INFO  - 2013-09-25 16:23:45 --> looping.................
INFO  - 2013-09-25 16:23:45 --> looping.................
INFO  - 2013-09-25 16:23:45 --> looping.................
INFO  - 2013-09-25 16:23:45 --> looping.................
INFO  - 2013-09-25 16:23:45 --> looping.................
INFO  - 2013-09-25 16:23:45 --> looping.................
INFO  - 2013-09-25 16:23:45 --> looping.................
INFO  - 2013-09-25 16:23:45 --> looping.................
INFO  - 2013-09-25 16:23:45 --> looping.................
INFO  - 2013-09-25 16:23:45 --> looping.................
DEBUG - 2013-09-25 16:23:45 --> Final output sent to browser
DEBUG - 2013-09-25 16:23:45 --> Total execution time: 0.0600
DEBUG - 2013-09-25 16:23:45 --> Config Class Initialized
DEBUG - 2013-09-25 16:23:45 --> Hooks Class Initialized
DEBUG - 2013-09-25 16:23:45 --> Utf8 Class Initialized
DEBUG - 2013-09-25 16:23:45 --> UTF-8 Support Enabled
DEBUG - 2013-09-25 16:23:45 --> URI Class Initialized
DEBUG - 2013-09-25 16:23:45 --> Router Class Initialized
DEBUG - 2013-09-25 16:23:45 --> Output Class Initialized
DEBUG - 2013-09-25 16:23:45 --> Security Class Initialized
DEBUG - 2013-09-25 16:23:45 --> Input Class Initialized
DEBUG - 2013-09-25 16:23:45 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-25 16:23:45 --> Language Class Initialized
DEBUG - 2013-09-25 16:23:45 --> Loader Class Initialized
DEBUG - 2013-09-25 16:23:45 --> Helper loaded: form_helper
DEBUG - 2013-09-25 16:23:45 --> Helper loaded: url_helper
DEBUG - 2013-09-25 16:23:45 --> Helper loaded: html_helper
DEBUG - 2013-09-25 16:23:45 --> Database Driver Class Initialized
DEBUG - 2013-09-25 16:23:45 --> Session Class Initialized
DEBUG - 2013-09-25 16:23:45 --> Helper loaded: string_helper
DEBUG - 2013-09-25 16:23:45 --> Session routines successfully run
DEBUG - 2013-09-25 16:23:45 --> Form Validation Class Initialized
DEBUG - 2013-09-25 16:23:45 --> Controller Class Initialized
DEBUG - 2013-09-25 16:23:45 --> Model Class Initialized
DEBUG - 2013-09-25 16:23:45 --> Model Class Initialized
DEBUG - 2013-09-25 16:23:45 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-25 16:23:45 --> after session initialization................
INFO  - 2013-09-25 16:23:45 --> inside the auto suggest page.................
INFO  - 2013-09-25 16:23:45 --> after the list array.................
INFO  - 2013-09-25 16:23:45 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%ad%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-25 16:23:45 --> after retrieving the data from db.................
INFO  - 2013-09-25 16:23:45 --> looping.................
INFO  - 2013-09-25 16:23:45 --> looping.................
DEBUG - 2013-09-25 16:23:45 --> Final output sent to browser
DEBUG - 2013-09-25 16:23:45 --> Total execution time: 0.0590
DEBUG - 2013-09-25 16:23:47 --> Config Class Initialized
DEBUG - 2013-09-25 16:23:47 --> Hooks Class Initialized
DEBUG - 2013-09-25 16:23:47 --> Utf8 Class Initialized
DEBUG - 2013-09-25 16:23:47 --> UTF-8 Support Enabled
DEBUG - 2013-09-25 16:23:47 --> URI Class Initialized
DEBUG - 2013-09-25 16:23:47 --> Router Class Initialized
DEBUG - 2013-09-25 16:23:47 --> Output Class Initialized
DEBUG - 2013-09-25 16:23:47 --> Security Class Initialized
DEBUG - 2013-09-25 16:23:47 --> Input Class Initialized
DEBUG - 2013-09-25 16:23:47 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-25 16:23:47 --> Language Class Initialized
DEBUG - 2013-09-25 16:23:47 --> Loader Class Initialized
DEBUG - 2013-09-25 16:23:47 --> Helper loaded: form_helper
DEBUG - 2013-09-25 16:23:47 --> Helper loaded: url_helper
DEBUG - 2013-09-25 16:23:47 --> Helper loaded: html_helper
DEBUG - 2013-09-25 16:23:47 --> Database Driver Class Initialized
DEBUG - 2013-09-25 16:23:47 --> Session Class Initialized
DEBUG - 2013-09-25 16:23:47 --> Helper loaded: string_helper
DEBUG - 2013-09-25 16:23:47 --> Session routines successfully run
DEBUG - 2013-09-25 16:23:47 --> Form Validation Class Initialized
DEBUG - 2013-09-25 16:23:47 --> Controller Class Initialized
DEBUG - 2013-09-25 16:23:47 --> Model Class Initialized
DEBUG - 2013-09-25 16:23:47 --> Model Class Initialized
DEBUG - 2013-09-25 16:23:47 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-25 16:23:47 --> after session initialization................
INFO  - 2013-09-25 16:23:47 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '2'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-25 16:23:47 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-25 16:23:47 --> 10==============================0
INFO  - 2013-09-25 16:23:47 --> SELECT dc.id_drugcomment as id, dc.comment, dc.time_created, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-09-25 16:23:47 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-09-25 16:23:47 --> News by drug_id ::::::::::===>SELECT `n`.`id_news` as id, `n`.`title` as news_title, `n`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '2'
ORDER BY `n`.`time_created`
INFO  - 2013-09-25 16:23:47 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `n`.`title` as newsletter_title, `n`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '2'
ORDER BY `n`.`time_created`
INFO  - 2013-09-25 16:23:47 --> inside retrieving comments member type id and drug id is 2
INFO  - 2013-09-25 16:23:47 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
DEBUG - 2013-09-25 16:23:47 --> Final output sent to browser
DEBUG - 2013-09-25 16:23:47 --> Total execution time: 0.0700
DEBUG - 2013-09-25 16:24:16 --> Config Class Initialized
DEBUG - 2013-09-25 16:24:16 --> Hooks Class Initialized
DEBUG - 2013-09-25 16:24:16 --> Utf8 Class Initialized
DEBUG - 2013-09-25 16:24:16 --> UTF-8 Support Enabled
DEBUG - 2013-09-25 16:24:16 --> URI Class Initialized
DEBUG - 2013-09-25 16:24:16 --> Router Class Initialized
DEBUG - 2013-09-25 16:24:16 --> Output Class Initialized
DEBUG - 2013-09-25 16:24:16 --> Security Class Initialized
DEBUG - 2013-09-25 16:24:16 --> Input Class Initialized
DEBUG - 2013-09-25 16:24:16 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-25 16:24:16 --> Language Class Initialized
DEBUG - 2013-09-25 16:24:16 --> Loader Class Initialized
DEBUG - 2013-09-25 16:24:16 --> Helper loaded: form_helper
DEBUG - 2013-09-25 16:24:16 --> Helper loaded: url_helper
DEBUG - 2013-09-25 16:24:16 --> Helper loaded: html_helper
DEBUG - 2013-09-25 16:24:16 --> Database Driver Class Initialized
DEBUG - 2013-09-25 16:24:16 --> Session Class Initialized
DEBUG - 2013-09-25 16:24:16 --> Helper loaded: string_helper
DEBUG - 2013-09-25 16:24:16 --> Session routines successfully run
DEBUG - 2013-09-25 16:24:16 --> Form Validation Class Initialized
DEBUG - 2013-09-25 16:24:16 --> Controller Class Initialized
DEBUG - 2013-09-25 16:24:16 --> Model Class Initialized
DEBUG - 2013-09-25 16:24:16 --> Model Class Initialized
DEBUG - 2013-09-25 16:24:16 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-25 16:24:16 --> after session initialization................
INFO  - 2013-09-25 16:24:16 --> inside the auto suggest page.................
INFO  - 2013-09-25 16:24:16 --> after the list array.................
INFO  - 2013-09-25 16:24:16 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%adderal%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-25 16:24:16 --> after retrieving the data from db.................
INFO  - 2013-09-25 16:24:16 --> looping.................
DEBUG - 2013-09-25 16:24:16 --> Final output sent to browser
DEBUG - 2013-09-25 16:24:16 --> Total execution time: 0.0480
DEBUG - 2013-09-25 16:24:17 --> Config Class Initialized
DEBUG - 2013-09-25 16:24:17 --> Hooks Class Initialized
DEBUG - 2013-09-25 16:24:17 --> Utf8 Class Initialized
DEBUG - 2013-09-25 16:24:17 --> UTF-8 Support Enabled
DEBUG - 2013-09-25 16:24:17 --> URI Class Initialized
DEBUG - 2013-09-25 16:24:17 --> Router Class Initialized
DEBUG - 2013-09-25 16:24:17 --> Output Class Initialized
DEBUG - 2013-09-25 16:24:17 --> Security Class Initialized
DEBUG - 2013-09-25 16:24:17 --> Input Class Initialized
DEBUG - 2013-09-25 16:24:17 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-25 16:24:17 --> Language Class Initialized
DEBUG - 2013-09-25 16:24:17 --> Loader Class Initialized
DEBUG - 2013-09-25 16:24:17 --> Helper loaded: form_helper
DEBUG - 2013-09-25 16:24:17 --> Helper loaded: url_helper
DEBUG - 2013-09-25 16:24:17 --> Helper loaded: html_helper
DEBUG - 2013-09-25 16:24:17 --> Database Driver Class Initialized
DEBUG - 2013-09-25 16:24:17 --> Session Class Initialized
DEBUG - 2013-09-25 16:24:17 --> Helper loaded: string_helper
DEBUG - 2013-09-25 16:24:17 --> Session routines successfully run
DEBUG - 2013-09-25 16:24:17 --> Form Validation Class Initialized
DEBUG - 2013-09-25 16:24:17 --> Controller Class Initialized
DEBUG - 2013-09-25 16:24:17 --> Model Class Initialized
DEBUG - 2013-09-25 16:24:17 --> Model Class Initialized
DEBUG - 2013-09-25 16:24:17 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-25 16:24:17 --> after session initialization................
INFO  - 2013-09-25 16:24:17 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '2'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-25 16:24:17 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-25 16:24:17 --> 10==============================0
INFO  - 2013-09-25 16:24:17 --> SELECT dc.id_drugcomment as id, dc.comment, dc.time_created, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-09-25 16:24:17 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-09-25 16:24:17 --> News by drug_id ::::::::::===>SELECT `n`.`id_news` as id, `n`.`title` as news_title, `n`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '2'
ORDER BY `n`.`time_created`
INFO  - 2013-09-25 16:24:17 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `n`.`title` as newsletter_title, `n`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '2'
ORDER BY `n`.`time_created`
INFO  - 2013-09-25 16:24:17 --> inside retrieving comments member type id and drug id is 2
INFO  - 2013-09-25 16:24:17 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
DEBUG - 2013-09-25 16:24:17 --> Final output sent to browser
DEBUG - 2013-09-25 16:24:17 --> Total execution time: 0.0770
DEBUG - 2013-09-25 16:26:51 --> Config Class Initialized
DEBUG - 2013-09-25 16:26:51 --> Hooks Class Initialized
DEBUG - 2013-09-25 16:26:51 --> Utf8 Class Initialized
DEBUG - 2013-09-25 16:26:51 --> UTF-8 Support Enabled
DEBUG - 2013-09-25 16:26:51 --> URI Class Initialized
DEBUG - 2013-09-25 16:26:51 --> Router Class Initialized
DEBUG - 2013-09-25 16:26:51 --> Output Class Initialized
DEBUG - 2013-09-25 16:26:51 --> Security Class Initialized
DEBUG - 2013-09-25 16:26:51 --> Input Class Initialized
DEBUG - 2013-09-25 16:26:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-25 16:26:51 --> Language Class Initialized
DEBUG - 2013-09-25 16:26:51 --> Loader Class Initialized
DEBUG - 2013-09-25 16:26:51 --> Helper loaded: form_helper
DEBUG - 2013-09-25 16:26:51 --> Helper loaded: url_helper
DEBUG - 2013-09-25 16:26:51 --> Helper loaded: html_helper
DEBUG - 2013-09-25 16:26:51 --> Database Driver Class Initialized
DEBUG - 2013-09-25 16:26:51 --> Session Class Initialized
DEBUG - 2013-09-25 16:26:51 --> Helper loaded: string_helper
DEBUG - 2013-09-25 16:26:51 --> Session routines successfully run
DEBUG - 2013-09-25 16:26:51 --> Form Validation Class Initialized
DEBUG - 2013-09-25 16:26:51 --> Controller Class Initialized
DEBUG - 2013-09-25 16:26:51 --> Model Class Initialized
DEBUG - 2013-09-25 16:26:51 --> Model Class Initialized
DEBUG - 2013-09-25 16:26:51 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-25 16:26:51 --> after session initialization................
INFO  - 2013-09-25 16:26:51 --> inside the auto suggest page.................
INFO  - 2013-09-25 16:26:51 --> after the list array.................
INFO  - 2013-09-25 16:26:51 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%adderal%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-25 16:26:51 --> after retrieving the data from db.................
INFO  - 2013-09-25 16:26:51 --> looping.................
DEBUG - 2013-09-25 16:26:51 --> Final output sent to browser
DEBUG - 2013-09-25 16:26:51 --> Total execution time: 0.0680
DEBUG - 2013-09-25 16:26:52 --> Config Class Initialized
DEBUG - 2013-09-25 16:26:52 --> Hooks Class Initialized
DEBUG - 2013-09-25 16:26:52 --> Utf8 Class Initialized
DEBUG - 2013-09-25 16:26:52 --> UTF-8 Support Enabled
DEBUG - 2013-09-25 16:26:52 --> URI Class Initialized
DEBUG - 2013-09-25 16:26:52 --> Router Class Initialized
DEBUG - 2013-09-25 16:26:52 --> Output Class Initialized
DEBUG - 2013-09-25 16:26:52 --> Security Class Initialized
DEBUG - 2013-09-25 16:26:52 --> Input Class Initialized
DEBUG - 2013-09-25 16:26:52 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-25 16:26:52 --> Language Class Initialized
DEBUG - 2013-09-25 16:26:52 --> Loader Class Initialized
DEBUG - 2013-09-25 16:26:52 --> Helper loaded: form_helper
DEBUG - 2013-09-25 16:26:52 --> Helper loaded: url_helper
DEBUG - 2013-09-25 16:26:52 --> Helper loaded: html_helper
DEBUG - 2013-09-25 16:26:52 --> Database Driver Class Initialized
DEBUG - 2013-09-25 16:26:52 --> Session Class Initialized
DEBUG - 2013-09-25 16:26:52 --> Helper loaded: string_helper
DEBUG - 2013-09-25 16:26:52 --> Session routines successfully run
DEBUG - 2013-09-25 16:26:52 --> Form Validation Class Initialized
DEBUG - 2013-09-25 16:26:52 --> Controller Class Initialized
DEBUG - 2013-09-25 16:26:52 --> Model Class Initialized
DEBUG - 2013-09-25 16:26:52 --> Model Class Initialized
DEBUG - 2013-09-25 16:26:52 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-25 16:26:52 --> after session initialization................
INFO  - 2013-09-25 16:26:52 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '2'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-25 16:26:52 --> inside retrieving comments member id and drug id is 2
INFO  - 2013-09-25 16:26:52 --> 10==============================0
INFO  - 2013-09-25 16:26:52 --> SELECT dc.id_drugcomment as id, dc.comment, dc.time_created, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-09-25 16:26:52 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-09-25 16:26:52 --> News by drug_id ::::::::::===>SELECT `n`.`id_news` as id, `n`.`title` as news_title, `n`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '2'
ORDER BY `n`.`time_created`
INFO  - 2013-09-25 16:26:52 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `n`.`title` as newsletter_title, `n`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '2'
ORDER BY `n`.`time_created`
INFO  - 2013-09-25 16:26:52 --> inside retrieving comments member type id and drug id is 2
INFO  - 2013-09-25 16:26:52 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
DEBUG - 2013-09-25 16:26:52 --> Final output sent to browser
DEBUG - 2013-09-25 16:26:52 --> Total execution time: 0.0880
DEBUG - 2013-09-25 16:33:42 --> Config Class Initialized
DEBUG - 2013-09-25 16:33:42 --> Hooks Class Initialized
DEBUG - 2013-09-25 16:33:42 --> Utf8 Class Initialized
DEBUG - 2013-09-25 16:33:42 --> UTF-8 Support Enabled
DEBUG - 2013-09-25 16:33:42 --> URI Class Initialized
DEBUG - 2013-09-25 16:33:42 --> Router Class Initialized
DEBUG - 2013-09-25 16:33:42 --> Output Class Initialized
DEBUG - 2013-09-25 16:33:42 --> Security Class Initialized
DEBUG - 2013-09-25 16:33:42 --> Input Class Initialized
DEBUG - 2013-09-25 16:33:42 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-25 16:33:42 --> Language Class Initialized
DEBUG - 2013-09-25 16:33:42 --> Loader Class Initialized
DEBUG - 2013-09-25 16:33:42 --> Helper loaded: form_helper
DEBUG - 2013-09-25 16:33:42 --> Helper loaded: url_helper
DEBUG - 2013-09-25 16:33:42 --> Helper loaded: html_helper
DEBUG - 2013-09-25 16:33:42 --> Database Driver Class Initialized
DEBUG - 2013-09-25 16:33:42 --> Session Class Initialized
DEBUG - 2013-09-25 16:33:42 --> Helper loaded: string_helper
DEBUG - 2013-09-25 16:33:42 --> Session routines successfully run
DEBUG - 2013-09-25 16:33:42 --> Form Validation Class Initialized
DEBUG - 2013-09-25 16:33:42 --> Controller Class Initialized
DEBUG - 2013-09-25 16:33:42 --> Model Class Initialized
DEBUG - 2013-09-25 16:33:42 --> Model Class Initialized
DEBUG - 2013-09-25 16:33:42 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-25 16:33:42 --> after session initialization................
INFO  - 2013-09-25 16:33:42 --> inside the auto suggest page.................
INFO  - 2013-09-25 16:33:42 --> after the list array.................
INFO  - 2013-09-25 16:33:42 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%a%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-25 16:33:42 --> after retrieving the data from db.................
INFO  - 2013-09-25 16:33:42 --> looping.................
INFO  - 2013-09-25 16:33:42 --> looping.................
INFO  - 2013-09-25 16:33:42 --> looping.................
INFO  - 2013-09-25 16:33:42 --> looping.................
INFO  - 2013-09-25 16:33:42 --> looping.................
INFO  - 2013-09-25 16:33:42 --> looping.................
INFO  - 2013-09-25 16:33:42 --> looping.................
INFO  - 2013-09-25 16:33:42 --> looping.................
INFO  - 2013-09-25 16:33:42 --> looping.................
INFO  - 2013-09-25 16:33:42 --> looping.................
INFO  - 2013-09-25 16:33:42 --> looping.................
INFO  - 2013-09-25 16:33:42 --> looping.................
DEBUG - 2013-09-25 16:33:42 --> Final output sent to browser
DEBUG - 2013-09-25 16:33:42 --> Total execution time: 0.0760
DEBUG - 2013-09-25 16:33:43 --> Config Class Initialized
DEBUG - 2013-09-25 16:33:43 --> Hooks Class Initialized
DEBUG - 2013-09-25 16:33:43 --> Utf8 Class Initialized
DEBUG - 2013-09-25 16:33:43 --> UTF-8 Support Enabled
DEBUG - 2013-09-25 16:33:43 --> URI Class Initialized
DEBUG - 2013-09-25 16:33:43 --> Router Class Initialized
DEBUG - 2013-09-25 16:33:43 --> Output Class Initialized
DEBUG - 2013-09-25 16:33:43 --> Security Class Initialized
DEBUG - 2013-09-25 16:33:43 --> Input Class Initialized
DEBUG - 2013-09-25 16:33:43 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-25 16:33:43 --> Language Class Initialized
DEBUG - 2013-09-25 16:33:43 --> Loader Class Initialized
DEBUG - 2013-09-25 16:33:43 --> Helper loaded: form_helper
DEBUG - 2013-09-25 16:33:43 --> Helper loaded: url_helper
DEBUG - 2013-09-25 16:33:43 --> Helper loaded: html_helper
DEBUG - 2013-09-25 16:33:43 --> Database Driver Class Initialized
DEBUG - 2013-09-25 16:33:43 --> Session Class Initialized
DEBUG - 2013-09-25 16:33:43 --> Helper loaded: string_helper
DEBUG - 2013-09-25 16:33:43 --> Session routines successfully run
DEBUG - 2013-09-25 16:33:43 --> Form Validation Class Initialized
DEBUG - 2013-09-25 16:33:43 --> Controller Class Initialized
DEBUG - 2013-09-25 16:33:43 --> Model Class Initialized
DEBUG - 2013-09-25 16:33:43 --> Model Class Initialized
DEBUG - 2013-09-25 16:33:43 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-25 16:33:43 --> after session initialization................
INFO  - 2013-09-25 16:33:43 --> inside the auto suggest page.................
INFO  - 2013-09-25 16:33:43 --> after the list array.................
INFO  - 2013-09-25 16:33:43 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%ar%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-25 16:33:43 --> after retrieving the data from db.................
INFO  - 2013-09-25 16:33:43 --> looping.................
INFO  - 2013-09-25 16:33:43 --> looping.................
INFO  - 2013-09-25 16:33:43 --> looping.................
INFO  - 2013-09-25 16:33:43 --> looping.................
DEBUG - 2013-09-25 16:33:43 --> Final output sent to browser
DEBUG - 2013-09-25 16:33:43 --> Total execution time: 0.0570
DEBUG - 2013-09-25 16:33:44 --> Config Class Initialized
DEBUG - 2013-09-25 16:33:44 --> Hooks Class Initialized
DEBUG - 2013-09-25 16:33:44 --> Utf8 Class Initialized
DEBUG - 2013-09-25 16:33:44 --> UTF-8 Support Enabled
DEBUG - 2013-09-25 16:33:44 --> URI Class Initialized
DEBUG - 2013-09-25 16:33:44 --> Router Class Initialized
DEBUG - 2013-09-25 16:33:44 --> Output Class Initialized
DEBUG - 2013-09-25 16:33:44 --> Security Class Initialized
DEBUG - 2013-09-25 16:33:44 --> Input Class Initialized
DEBUG - 2013-09-25 16:33:44 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-25 16:33:44 --> Language Class Initialized
DEBUG - 2013-09-25 16:33:44 --> Loader Class Initialized
DEBUG - 2013-09-25 16:33:44 --> Helper loaded: form_helper
DEBUG - 2013-09-25 16:33:44 --> Helper loaded: url_helper
DEBUG - 2013-09-25 16:33:44 --> Helper loaded: html_helper
DEBUG - 2013-09-25 16:33:44 --> Database Driver Class Initialized
DEBUG - 2013-09-25 16:33:44 --> Session Class Initialized
DEBUG - 2013-09-25 16:33:44 --> Helper loaded: string_helper
DEBUG - 2013-09-25 16:33:44 --> Session routines successfully run
DEBUG - 2013-09-25 16:33:44 --> Form Validation Class Initialized
DEBUG - 2013-09-25 16:33:44 --> Controller Class Initialized
DEBUG - 2013-09-25 16:33:44 --> Model Class Initialized
DEBUG - 2013-09-25 16:33:44 --> Model Class Initialized
DEBUG - 2013-09-25 16:33:44 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-25 16:33:44 --> after session initialization................
INFO  - 2013-09-25 16:33:44 --> inside the auto suggest page.................
INFO  - 2013-09-25 16:33:44 --> after the list array.................
INFO  - 2013-09-25 16:33:44 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%ari%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-25 16:33:44 --> after retrieving the data from db.................
INFO  - 2013-09-25 16:33:44 --> looping.................
INFO  - 2013-09-25 16:33:44 --> looping.................
DEBUG - 2013-09-25 16:33:44 --> Final output sent to browser
DEBUG - 2013-09-25 16:33:44 --> Total execution time: 0.0640
DEBUG - 2013-09-25 16:34:14 --> Config Class Initialized
DEBUG - 2013-09-25 16:34:14 --> Hooks Class Initialized
DEBUG - 2013-09-25 16:34:14 --> Utf8 Class Initialized
DEBUG - 2013-09-25 16:34:14 --> UTF-8 Support Enabled
DEBUG - 2013-09-25 16:34:14 --> URI Class Initialized
DEBUG - 2013-09-25 16:34:14 --> Router Class Initialized
DEBUG - 2013-09-25 16:34:14 --> Output Class Initialized
DEBUG - 2013-09-25 16:34:14 --> Security Class Initialized
DEBUG - 2013-09-25 16:34:14 --> Input Class Initialized
DEBUG - 2013-09-25 16:34:14 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-25 16:34:14 --> Language Class Initialized
DEBUG - 2013-09-25 16:34:14 --> Loader Class Initialized
DEBUG - 2013-09-25 16:34:14 --> Helper loaded: form_helper
DEBUG - 2013-09-25 16:34:14 --> Helper loaded: url_helper
DEBUG - 2013-09-25 16:34:14 --> Helper loaded: html_helper
DEBUG - 2013-09-25 16:34:14 --> Database Driver Class Initialized
DEBUG - 2013-09-25 16:34:14 --> Session Class Initialized
DEBUG - 2013-09-25 16:34:14 --> Helper loaded: string_helper
DEBUG - 2013-09-25 16:34:14 --> Session routines successfully run
DEBUG - 2013-09-25 16:34:14 --> Form Validation Class Initialized
DEBUG - 2013-09-25 16:34:14 --> Controller Class Initialized
DEBUG - 2013-09-25 16:34:14 --> Model Class Initialized
DEBUG - 2013-09-25 16:34:14 --> Model Class Initialized
DEBUG - 2013-09-25 16:34:14 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-25 16:34:14 --> after session initialization................
INFO  - 2013-09-25 16:34:14 --> inside the auto suggest page.................
INFO  - 2013-09-25 16:34:14 --> after the list array.................
INFO  - 2013-09-25 16:34:14 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%aricep%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-25 16:34:14 --> after retrieving the data from db.................
INFO  - 2013-09-25 16:34:14 --> looping.................
DEBUG - 2013-09-25 16:34:14 --> Final output sent to browser
DEBUG - 2013-09-25 16:34:14 --> Total execution time: 0.0570
DEBUG - 2013-09-25 16:34:17 --> Config Class Initialized
DEBUG - 2013-09-25 16:34:17 --> Hooks Class Initialized
DEBUG - 2013-09-25 16:34:17 --> Utf8 Class Initialized
DEBUG - 2013-09-25 16:34:17 --> UTF-8 Support Enabled
DEBUG - 2013-09-25 16:34:17 --> URI Class Initialized
DEBUG - 2013-09-25 16:34:17 --> Router Class Initialized
DEBUG - 2013-09-25 16:34:17 --> Output Class Initialized
DEBUG - 2013-09-25 16:34:17 --> Security Class Initialized
DEBUG - 2013-09-25 16:34:17 --> Input Class Initialized
DEBUG - 2013-09-25 16:34:17 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-25 16:34:17 --> Language Class Initialized
DEBUG - 2013-09-25 16:34:17 --> Loader Class Initialized
DEBUG - 2013-09-25 16:34:17 --> Helper loaded: form_helper
DEBUG - 2013-09-25 16:34:17 --> Helper loaded: url_helper
DEBUG - 2013-09-25 16:34:17 --> Helper loaded: html_helper
DEBUG - 2013-09-25 16:34:17 --> Database Driver Class Initialized
DEBUG - 2013-09-25 16:34:17 --> Session Class Initialized
DEBUG - 2013-09-25 16:34:17 --> Helper loaded: string_helper
DEBUG - 2013-09-25 16:34:17 --> Session routines successfully run
DEBUG - 2013-09-25 16:34:17 --> Form Validation Class Initialized
DEBUG - 2013-09-25 16:34:17 --> Controller Class Initialized
DEBUG - 2013-09-25 16:34:17 --> Model Class Initialized
DEBUG - 2013-09-25 16:34:17 --> Model Class Initialized
DEBUG - 2013-09-25 16:34:17 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-25 16:34:17 --> after session initialization................
INFO  - 2013-09-25 16:34:17 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '11'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-25 16:34:17 --> inside retrieving comments member id and drug id is 11
INFO  - 2013-09-25 16:34:17 --> 10==============================0
INFO  - 2013-09-25 16:34:17 --> SELECT dc.id_drugcomment as id, dc.comment, dc.time_created, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 11
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-09-25 16:34:17 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 11
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-09-25 16:34:17 --> News by drug_id ::::::::::===>SELECT `n`.`id_news` as id, `n`.`title` as news_title, `n`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '11'
ORDER BY `n`.`time_created`
INFO  - 2013-09-25 16:34:17 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `n`.`title` as newsletter_title, `n`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '11'
ORDER BY `n`.`time_created`
INFO  - 2013-09-25 16:34:17 --> inside retrieving comments member type id and drug id is 11
INFO  - 2013-09-25 16:34:17 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 11
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
DEBUG - 2013-09-25 16:34:17 --> Final output sent to browser
DEBUG - 2013-09-25 16:34:17 --> Total execution time: 0.0820
DEBUG - 2013-09-25 16:35:40 --> Config Class Initialized
DEBUG - 2013-09-25 16:35:40 --> Hooks Class Initialized
DEBUG - 2013-09-25 16:35:40 --> Utf8 Class Initialized
DEBUG - 2013-09-25 16:35:40 --> UTF-8 Support Enabled
DEBUG - 2013-09-25 16:35:40 --> URI Class Initialized
DEBUG - 2013-09-25 16:35:40 --> Router Class Initialized
DEBUG - 2013-09-25 16:35:40 --> Output Class Initialized
DEBUG - 2013-09-25 16:35:40 --> Security Class Initialized
DEBUG - 2013-09-25 16:35:40 --> Input Class Initialized
DEBUG - 2013-09-25 16:35:40 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-25 16:35:40 --> Language Class Initialized
DEBUG - 2013-09-25 16:35:40 --> Loader Class Initialized
DEBUG - 2013-09-25 16:35:40 --> Helper loaded: form_helper
DEBUG - 2013-09-25 16:35:40 --> Helper loaded: url_helper
DEBUG - 2013-09-25 16:35:40 --> Helper loaded: html_helper
DEBUG - 2013-09-25 16:35:40 --> Database Driver Class Initialized
DEBUG - 2013-09-25 16:35:41 --> Session Class Initialized
DEBUG - 2013-09-25 16:35:41 --> Helper loaded: string_helper
DEBUG - 2013-09-25 16:35:41 --> Session routines successfully run
DEBUG - 2013-09-25 16:35:41 --> Form Validation Class Initialized
DEBUG - 2013-09-25 16:35:41 --> Controller Class Initialized
DEBUG - 2013-09-25 16:35:41 --> Model Class Initialized
DEBUG - 2013-09-25 16:35:41 --> Model Class Initialized
DEBUG - 2013-09-25 16:35:41 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-25 16:35:41 --> after session initialization................
INFO  - 2013-09-25 16:35:41 --> inside the auto suggest page.................
INFO  - 2013-09-25 16:35:41 --> after the list array.................
INFO  - 2013-09-25 16:35:41 --> Ajax retrieval ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`drug_name` like '%aricep%' 
ORDER BY `d`.`drug_name`
INFO  - 2013-09-25 16:35:41 --> after retrieving the data from db.................
INFO  - 2013-09-25 16:35:41 --> looping.................
DEBUG - 2013-09-25 16:35:41 --> Final output sent to browser
DEBUG - 2013-09-25 16:35:41 --> Total execution time: 1.0581
DEBUG - 2013-09-25 16:35:42 --> Config Class Initialized
DEBUG - 2013-09-25 16:35:42 --> Hooks Class Initialized
DEBUG - 2013-09-25 16:35:42 --> Utf8 Class Initialized
DEBUG - 2013-09-25 16:35:42 --> UTF-8 Support Enabled
DEBUG - 2013-09-25 16:35:42 --> URI Class Initialized
DEBUG - 2013-09-25 16:35:42 --> Router Class Initialized
DEBUG - 2013-09-25 16:35:42 --> Output Class Initialized
DEBUG - 2013-09-25 16:35:42 --> Security Class Initialized
DEBUG - 2013-09-25 16:35:42 --> Input Class Initialized
DEBUG - 2013-09-25 16:35:42 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-25 16:35:42 --> Language Class Initialized
DEBUG - 2013-09-25 16:35:42 --> Loader Class Initialized
DEBUG - 2013-09-25 16:35:42 --> Helper loaded: form_helper
DEBUG - 2013-09-25 16:35:42 --> Helper loaded: url_helper
DEBUG - 2013-09-25 16:35:42 --> Helper loaded: html_helper
DEBUG - 2013-09-25 16:35:42 --> Database Driver Class Initialized
DEBUG - 2013-09-25 16:35:42 --> Session Class Initialized
DEBUG - 2013-09-25 16:35:42 --> Helper loaded: string_helper
DEBUG - 2013-09-25 16:35:42 --> Session routines successfully run
DEBUG - 2013-09-25 16:35:42 --> Form Validation Class Initialized
DEBUG - 2013-09-25 16:35:42 --> Controller Class Initialized
DEBUG - 2013-09-25 16:35:42 --> Model Class Initialized
DEBUG - 2013-09-25 16:35:42 --> Model Class Initialized
DEBUG - 2013-09-25 16:35:42 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-25 16:35:42 --> after session initialization................
INFO  - 2013-09-25 16:35:42 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '11'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-25 16:35:42 --> inside retrieving comments member id and drug id is 11
INFO  - 2013-09-25 16:35:42 --> 10==============================0
INFO  - 2013-09-25 16:35:42 --> SELECT dc.id_drugcomment as id, dc.comment, dc.time_created, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 11
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-09-25 16:35:42 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 11
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-09-25 16:35:42 --> News by drug_id ::::::::::===>SELECT `n`.`id_news` as id, `n`.`title` as news_title, `n`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '11'
ORDER BY `n`.`time_created`
INFO  - 2013-09-25 16:35:42 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `n`.`title` as newsletter_title, `n`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '11'
ORDER BY `n`.`time_created`
INFO  - 2013-09-25 16:35:42 --> inside retrieving comments member type id and drug id is 11
INFO  - 2013-09-25 16:35:42 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 11
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
DEBUG - 2013-09-25 16:35:42 --> Final output sent to browser
DEBUG - 2013-09-25 16:35:42 --> Total execution time: 0.0790
DEBUG - 2013-09-25 18:08:41 --> Config Class Initialized
DEBUG - 2013-09-25 18:08:41 --> Hooks Class Initialized
DEBUG - 2013-09-25 18:08:41 --> Utf8 Class Initialized
DEBUG - 2013-09-25 18:08:41 --> UTF-8 Support Enabled
DEBUG - 2013-09-25 18:08:41 --> URI Class Initialized
DEBUG - 2013-09-25 18:08:41 --> Router Class Initialized
DEBUG - 2013-09-25 18:08:41 --> Output Class Initialized
DEBUG - 2013-09-25 18:08:41 --> Security Class Initialized
DEBUG - 2013-09-25 18:08:41 --> Input Class Initialized
DEBUG - 2013-09-25 18:08:41 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-25 18:08:41 --> Language Class Initialized
DEBUG - 2013-09-25 18:08:41 --> Loader Class Initialized
DEBUG - 2013-09-25 18:08:41 --> Helper loaded: form_helper
DEBUG - 2013-09-25 18:08:41 --> Helper loaded: url_helper
DEBUG - 2013-09-25 18:08:41 --> Helper loaded: html_helper
DEBUG - 2013-09-25 18:08:41 --> Database Driver Class Initialized
DEBUG - 2013-09-25 18:08:41 --> Session Class Initialized
DEBUG - 2013-09-25 18:08:41 --> Helper loaded: string_helper
DEBUG - 2013-09-25 18:08:41 --> Session routines successfully run
DEBUG - 2013-09-25 18:08:41 --> Form Validation Class Initialized
DEBUG - 2013-09-25 18:08:41 --> Controller Class Initialized
DEBUG - 2013-09-25 18:08:41 --> Model Class Initialized
DEBUG - 2013-09-25 18:08:41 --> Model Class Initialized
DEBUG - 2013-09-25 18:08:41 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-25 18:08:41 --> after session initialization................
DEBUG - 2013-09-25 18:08:41 --> Config Class Initialized
DEBUG - 2013-09-25 18:08:41 --> Hooks Class Initialized
DEBUG - 2013-09-25 18:08:41 --> Utf8 Class Initialized
DEBUG - 2013-09-25 18:08:41 --> UTF-8 Support Enabled
DEBUG - 2013-09-25 18:08:41 --> URI Class Initialized
DEBUG - 2013-09-25 18:08:41 --> Router Class Initialized
DEBUG - 2013-09-25 18:08:41 --> No URI present. Default controller set.
DEBUG - 2013-09-25 18:08:41 --> Output Class Initialized
DEBUG - 2013-09-25 18:08:41 --> Security Class Initialized
DEBUG - 2013-09-25 18:08:41 --> Input Class Initialized
DEBUG - 2013-09-25 18:08:41 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-25 18:08:41 --> Language Class Initialized
DEBUG - 2013-09-25 18:08:41 --> Loader Class Initialized
DEBUG - 2013-09-25 18:08:41 --> Helper loaded: form_helper
DEBUG - 2013-09-25 18:08:41 --> Helper loaded: url_helper
DEBUG - 2013-09-25 18:08:41 --> Helper loaded: html_helper
DEBUG - 2013-09-25 18:08:41 --> Database Driver Class Initialized
DEBUG - 2013-09-25 18:08:41 --> Session Class Initialized
DEBUG - 2013-09-25 18:08:41 --> Helper loaded: string_helper
DEBUG - 2013-09-25 18:08:41 --> A session cookie was not found.
DEBUG - 2013-09-25 18:08:41 --> Session routines successfully run
DEBUG - 2013-09-25 18:08:41 --> Form Validation Class Initialized
DEBUG - 2013-09-25 18:08:41 --> Controller Class Initialized
INFO  - 2013-09-25 18:08:41 --> the form message==>
INFO  - 2013-09-25 18:08:41 --> after the retrieving session list.................//////////
DEBUG - 2013-09-25 18:08:41 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-25 18:08:41 --> Final output sent to browser
DEBUG - 2013-09-25 18:08:41 --> Total execution time: 0.0460
DEBUG - 2013-09-25 18:08:47 --> Config Class Initialized
DEBUG - 2013-09-25 18:08:47 --> Hooks Class Initialized
DEBUG - 2013-09-25 18:08:47 --> Utf8 Class Initialized
DEBUG - 2013-09-25 18:08:47 --> UTF-8 Support Enabled
DEBUG - 2013-09-25 18:08:47 --> URI Class Initialized
DEBUG - 2013-09-25 18:08:47 --> Router Class Initialized
DEBUG - 2013-09-25 18:08:47 --> Output Class Initialized
DEBUG - 2013-09-25 18:08:47 --> Security Class Initialized
DEBUG - 2013-09-25 18:08:47 --> Input Class Initialized
DEBUG - 2013-09-25 18:08:47 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-25 18:08:47 --> Language Class Initialized
DEBUG - 2013-09-25 18:08:47 --> Loader Class Initialized
DEBUG - 2013-09-25 18:08:47 --> Helper loaded: form_helper
DEBUG - 2013-09-25 18:08:47 --> Helper loaded: url_helper
DEBUG - 2013-09-25 18:08:47 --> Helper loaded: html_helper
DEBUG - 2013-09-25 18:08:47 --> Database Driver Class Initialized
DEBUG - 2013-09-25 18:08:47 --> Session Class Initialized
DEBUG - 2013-09-25 18:08:47 --> Helper loaded: string_helper
DEBUG - 2013-09-25 18:08:47 --> Session routines successfully run
DEBUG - 2013-09-25 18:08:47 --> Form Validation Class Initialized
DEBUG - 2013-09-25 18:08:47 --> Controller Class Initialized
DEBUG - 2013-09-25 18:08:47 --> Model Class Initialized
DEBUG - 2013-09-25 18:08:47 --> Model Class Initialized
DEBUG - 2013-09-25 18:08:47 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-25 18:08:47 --> after session initialization................
INFO  - 2013-09-25 18:08:47 --> inside rays login auth.............
DEBUG - 2013-09-25 18:08:47 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-09-25 18:08:47 --> XSS Filtering completed
DEBUG - 2013-09-25 18:08:47 --> XSS Filtering completed
INFO  - 2013-09-25 18:08:47 --> before getting the relation of member............6
INFO  - 2013-09-25 18:08:47 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-09-25 18:08:47 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-09-25 18:08:47 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-09-25 18:08:47 --> inside retrieving vacancy for member
INFO  - 2013-09-25 18:08:47 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-09-25 18:08:47 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-09-25 18:08:47 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-09-25 18:08:47 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-25 18:08:47 --> News by drug_id ::::::::::===>SELECT `n`.`id_news` as id, `n`.`title` as news_title, `n`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `n`.`time_created`
INFO  - 2013-09-25 18:08:47 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `n`.`title` as newsletter_title, `n`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `n`.`time_created`
INFO  - 2013-09-25 18:08:47 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-09-25 18:08:47 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-09-25 18:08:47 -->  column name inside view is 0 column Data is Health Job Vacancies 
INFO  - 2013-09-25 18:08:47 -->  column name inside view is 1 column Data is Internship / Nysc centers
INFO  - 2013-09-25 18:08:47 -->  column name inside view is 2 column Data is Pharmacy Schools
INFO  - 2013-09-25 18:08:47 -->  column name inside view is 3 column Data is Pharmacy Vacancies
INFO  - 2013-09-25 18:08:47 -->  column name inside view is Child paracetamol dosages revised column Data is Until now, children aged one to six could be given up to 10ml of paracetamol-based products such as Calpol up to four times a day...
INFO  - 2013-09-25 18:08:47 -->  column name inside view is Paracetamol death: Desiree Phillips died after taking too many, inquest told column Data is A 20-year-old mother from Carmarthenshire died after taking too many paracetamol, an inquest has heard..
DEBUG - 2013-09-25 18:08:47 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-09-25 18:08:47 --> Final output sent to browser
DEBUG - 2013-09-25 18:08:47 --> Total execution time: 0.0800
DEBUG - 2013-09-25 18:08:47 --> Config Class Initialized
DEBUG - 2013-09-25 18:08:47 --> Hooks Class Initialized
DEBUG - 2013-09-25 18:08:47 --> Utf8 Class Initialized
DEBUG - 2013-09-25 18:08:47 --> UTF-8 Support Enabled
DEBUG - 2013-09-25 18:08:47 --> URI Class Initialized
DEBUG - 2013-09-25 18:08:47 --> Router Class Initialized
DEBUG - 2013-09-25 18:08:47 --> Output Class Initialized
DEBUG - 2013-09-25 18:08:47 --> Security Class Initialized
DEBUG - 2013-09-25 18:08:47 --> Input Class Initialized
DEBUG - 2013-09-25 18:08:47 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-25 18:08:47 --> Language Class Initialized
DEBUG - 2013-09-25 18:08:47 --> Loader Class Initialized
DEBUG - 2013-09-25 18:08:47 --> Helper loaded: form_helper
DEBUG - 2013-09-25 18:08:47 --> Helper loaded: url_helper
DEBUG - 2013-09-25 18:08:47 --> Helper loaded: html_helper
DEBUG - 2013-09-25 18:08:47 --> Database Driver Class Initialized
DEBUG - 2013-09-25 18:08:47 --> Session Class Initialized
DEBUG - 2013-09-25 18:08:47 --> Helper loaded: string_helper
DEBUG - 2013-09-25 18:08:47 --> Session routines successfully run
DEBUG - 2013-09-25 18:08:47 --> Form Validation Class Initialized
DEBUG - 2013-09-25 18:08:47 --> Controller Class Initialized
DEBUG - 2013-09-25 18:08:47 --> Model Class Initialized
DEBUG - 2013-09-25 18:08:47 --> Model Class Initialized
DEBUG - 2013-09-25 18:08:47 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-25 18:08:47 --> after session initialization................
ERROR - 2013-09-25 18:08:47 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-09-25 18:09:11 --> Config Class Initialized
DEBUG - 2013-09-25 18:09:11 --> Hooks Class Initialized
DEBUG - 2013-09-25 18:09:11 --> Utf8 Class Initialized
DEBUG - 2013-09-25 18:09:11 --> UTF-8 Support Enabled
DEBUG - 2013-09-25 18:09:11 --> URI Class Initialized
DEBUG - 2013-09-25 18:09:11 --> Router Class Initialized
DEBUG - 2013-09-25 18:09:11 --> Output Class Initialized
DEBUG - 2013-09-25 18:09:11 --> Security Class Initialized
DEBUG - 2013-09-25 18:09:11 --> Input Class Initialized
DEBUG - 2013-09-25 18:09:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-25 18:09:11 --> Language Class Initialized
DEBUG - 2013-09-25 18:09:11 --> Loader Class Initialized
DEBUG - 2013-09-25 18:09:11 --> Helper loaded: form_helper
DEBUG - 2013-09-25 18:09:11 --> Helper loaded: url_helper
DEBUG - 2013-09-25 18:09:11 --> Helper loaded: html_helper
DEBUG - 2013-09-25 18:09:11 --> Database Driver Class Initialized
DEBUG - 2013-09-25 18:09:11 --> Session Class Initialized
DEBUG - 2013-09-25 18:09:11 --> Helper loaded: string_helper
DEBUG - 2013-09-25 18:09:11 --> Session routines successfully run
DEBUG - 2013-09-25 18:09:11 --> Form Validation Class Initialized
DEBUG - 2013-09-25 18:09:11 --> Controller Class Initialized
DEBUG - 2013-09-25 18:09:11 --> Model Class Initialized
DEBUG - 2013-09-25 18:09:11 --> Model Class Initialized
DEBUG - 2013-09-25 18:09:11 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-25 18:09:11 --> after session initialization................
INFO  - 2013-09-25 18:09:11 --> inside rays login auth.............
DEBUG - 2013-09-25 18:09:11 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-09-25 18:09:11 --> XSS Filtering completed
DEBUG - 2013-09-25 18:09:11 --> XSS Filtering completed
INFO  - 2013-09-25 18:09:11 --> before getting the relation of member............6
INFO  - 2013-09-25 18:09:11 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-09-25 18:09:11 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-09-25 18:09:11 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-09-25 18:09:11 --> inside retrieving vacancy for member
INFO  - 2013-09-25 18:09:11 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-09-25 18:09:11 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-09-25 18:09:11 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-09-25 18:09:11 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`name` as drug_class, `bn`.`name` as drug_brandname
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-09-25 18:09:11 --> News by drug_id ::::::::::===>SELECT `n`.`id_news` as id, `n`.`title` as news_title, `n`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `n`.`time_created`
INFO  - 2013-09-25 18:09:11 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `n`.`title` as newsletter_title, `n`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `n`.`time_created`
INFO  - 2013-09-25 18:09:11 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-09-25 18:09:11 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-09-25 18:09:11 -->  column name inside view is 0 column Data is Health Job Vacancies 
INFO  - 2013-09-25 18:09:11 -->  column name inside view is 1 column Data is Internship / Nysc centers
INFO  - 2013-09-25 18:09:11 -->  column name inside view is 2 column Data is Pharmacy Schools
INFO  - 2013-09-25 18:09:11 -->  column name inside view is 3 column Data is Pharmacy Vacancies
INFO  - 2013-09-25 18:09:11 -->  column name inside view is Child paracetamol dosages revised column Data is Until now, children aged one to six could be given up to 10ml of paracetamol-based products such as Calpol up to four times a day...
INFO  - 2013-09-25 18:09:11 -->  column name inside view is Paracetamol death: Desiree Phillips died after taking too many, inquest told column Data is A 20-year-old mother from Carmarthenshire died after taking too many paracetamol, an inquest has heard..
DEBUG - 2013-09-25 18:09:11 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-09-25 18:09:11 --> Final output sent to browser
DEBUG - 2013-09-25 18:09:11 --> Total execution time: 0.1020
DEBUG - 2013-09-25 18:09:11 --> Config Class Initialized
DEBUG - 2013-09-25 18:09:11 --> Hooks Class Initialized
DEBUG - 2013-09-25 18:09:11 --> Utf8 Class Initialized
DEBUG - 2013-09-25 18:09:11 --> UTF-8 Support Enabled
DEBUG - 2013-09-25 18:09:11 --> URI Class Initialized
DEBUG - 2013-09-25 18:09:11 --> Router Class Initialized
DEBUG - 2013-09-25 18:09:11 --> Output Class Initialized
DEBUG - 2013-09-25 18:09:11 --> Security Class Initialized
DEBUG - 2013-09-25 18:09:11 --> Input Class Initialized
DEBUG - 2013-09-25 18:09:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-25 18:09:11 --> Language Class Initialized
DEBUG - 2013-09-25 18:09:11 --> Loader Class Initialized
DEBUG - 2013-09-25 18:09:11 --> Helper loaded: form_helper
DEBUG - 2013-09-25 18:09:11 --> Helper loaded: url_helper
DEBUG - 2013-09-25 18:09:11 --> Helper loaded: html_helper
DEBUG - 2013-09-25 18:09:11 --> Database Driver Class Initialized
DEBUG - 2013-09-25 18:09:11 --> Session Class Initialized
DEBUG - 2013-09-25 18:09:11 --> Helper loaded: string_helper
DEBUG - 2013-09-25 18:09:11 --> Session routines successfully run
DEBUG - 2013-09-25 18:09:11 --> Form Validation Class Initialized
DEBUG - 2013-09-25 18:09:11 --> Controller Class Initialized
DEBUG - 2013-09-25 18:09:11 --> Model Class Initialized
DEBUG - 2013-09-25 18:09:11 --> Model Class Initialized
DEBUG - 2013-09-25 18:09:11 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-25 18:09:11 --> after session initialization................
ERROR - 2013-09-25 18:09:11 --> 404 Page Not Found --> user_authorization/js
