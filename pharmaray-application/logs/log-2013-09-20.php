<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2013-09-20 00:09:50 --> Config Class Initialized
DEBUG - 2013-09-20 00:09:50 --> Hooks Class Initialized
DEBUG - 2013-09-20 00:09:50 --> Utf8 Class Initialized
DEBUG - 2013-09-20 00:09:50 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 00:09:50 --> URI Class Initialized
DEBUG - 2013-09-20 00:09:50 --> Router Class Initialized
DEBUG - 2013-09-20 00:09:50 --> Output Class Initialized
DEBUG - 2013-09-20 00:09:50 --> Security Class Initialized
DEBUG - 2013-09-20 00:09:50 --> Input Class Initialized
DEBUG - 2013-09-20 00:09:50 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 00:09:50 --> Language Class Initialized
DEBUG - 2013-09-20 00:09:50 --> Loader Class Initialized
DEBUG - 2013-09-20 00:09:50 --> Helper loaded: form_helper
DEBUG - 2013-09-20 00:09:50 --> Helper loaded: url_helper
DEBUG - 2013-09-20 00:09:50 --> Helper loaded: html_helper
DEBUG - 2013-09-20 00:09:50 --> Database Driver Class Initialized
DEBUG - 2013-09-20 00:09:50 --> Session Class Initialized
DEBUG - 2013-09-20 00:09:50 --> Helper loaded: string_helper
DEBUG - 2013-09-20 00:09:50 --> Session routines successfully run
DEBUG - 2013-09-20 00:09:50 --> Form Validation Class Initialized
DEBUG - 2013-09-20 00:09:50 --> Controller Class Initialized
DEBUG - 2013-09-20 00:09:50 --> Model Class Initialized
DEBUG - 2013-09-20 00:09:50 --> Model Class Initialized
DEBUG - 2013-09-20 00:09:50 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 00:09:50 --> after session initialization................
DEBUG - 2013-09-20 00:09:50 --> Config Class Initialized
DEBUG - 2013-09-20 00:09:50 --> Hooks Class Initialized
DEBUG - 2013-09-20 00:09:50 --> Utf8 Class Initialized
DEBUG - 2013-09-20 00:09:50 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 00:09:50 --> URI Class Initialized
DEBUG - 2013-09-20 00:09:50 --> Router Class Initialized
DEBUG - 2013-09-20 00:09:50 --> No URI present. Default controller set.
DEBUG - 2013-09-20 00:09:50 --> Output Class Initialized
DEBUG - 2013-09-20 00:09:50 --> Security Class Initialized
DEBUG - 2013-09-20 00:09:50 --> Input Class Initialized
DEBUG - 2013-09-20 00:09:50 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 00:09:50 --> Language Class Initialized
DEBUG - 2013-09-20 00:09:50 --> Loader Class Initialized
DEBUG - 2013-09-20 00:09:50 --> Helper loaded: form_helper
DEBUG - 2013-09-20 00:09:50 --> Helper loaded: url_helper
DEBUG - 2013-09-20 00:09:50 --> Helper loaded: html_helper
DEBUG - 2013-09-20 00:09:50 --> Database Driver Class Initialized
DEBUG - 2013-09-20 00:09:50 --> Session Class Initialized
DEBUG - 2013-09-20 00:09:50 --> Helper loaded: string_helper
DEBUG - 2013-09-20 00:09:50 --> A session cookie was not found.
DEBUG - 2013-09-20 00:09:50 --> Session routines successfully run
DEBUG - 2013-09-20 00:09:50 --> Form Validation Class Initialized
DEBUG - 2013-09-20 00:09:50 --> Controller Class Initialized
INFO  - 2013-09-20 00:09:50 --> the form message==>
INFO  - 2013-09-20 00:09:50 --> after the retrieving session list.................//////////
DEBUG - 2013-09-20 00:09:50 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-20 00:09:50 --> Final output sent to browser
DEBUG - 2013-09-20 00:09:50 --> Total execution time: 0.0590
DEBUG - 2013-09-20 00:09:53 --> Config Class Initialized
DEBUG - 2013-09-20 00:09:53 --> Hooks Class Initialized
DEBUG - 2013-09-20 00:09:53 --> Utf8 Class Initialized
DEBUG - 2013-09-20 00:09:53 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 00:09:53 --> URI Class Initialized
DEBUG - 2013-09-20 00:09:53 --> Router Class Initialized
DEBUG - 2013-09-20 00:09:53 --> Output Class Initialized
DEBUG - 2013-09-20 00:09:53 --> Security Class Initialized
DEBUG - 2013-09-20 00:09:53 --> Input Class Initialized
DEBUG - 2013-09-20 00:09:53 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 00:09:53 --> Language Class Initialized
DEBUG - 2013-09-20 00:09:53 --> Loader Class Initialized
DEBUG - 2013-09-20 00:09:53 --> Helper loaded: form_helper
DEBUG - 2013-09-20 00:09:53 --> Helper loaded: url_helper
DEBUG - 2013-09-20 00:09:53 --> Helper loaded: html_helper
DEBUG - 2013-09-20 00:09:53 --> Database Driver Class Initialized
DEBUG - 2013-09-20 00:09:53 --> Session Class Initialized
DEBUG - 2013-09-20 00:09:53 --> Helper loaded: string_helper
DEBUG - 2013-09-20 00:09:53 --> Session routines successfully run
DEBUG - 2013-09-20 00:09:53 --> Form Validation Class Initialized
DEBUG - 2013-09-20 00:09:53 --> Controller Class Initialized
DEBUG - 2013-09-20 00:09:53 --> Model Class Initialized
DEBUG - 2013-09-20 00:09:53 --> Model Class Initialized
DEBUG - 2013-09-20 00:09:53 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 00:09:53 --> after session initialization................
INFO  - 2013-09-20 00:09:53 --> after rays has been clicked.................
INFO  - 2013-09-20 00:09:53 --> last news id is 0
INFO  - 2013-09-20 00:09:53 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 00:09:53 --> last news id is 0
INFO  - 2013-09-20 00:09:53 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 00:09:53 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 00:09:53 --> Final output sent to browser
DEBUG - 2013-09-20 00:09:53 --> Total execution time: 0.0470
DEBUG - 2013-09-20 00:09:53 --> Config Class Initialized
DEBUG - 2013-09-20 00:09:53 --> Hooks Class Initialized
DEBUG - 2013-09-20 00:09:53 --> Utf8 Class Initialized
DEBUG - 2013-09-20 00:09:53 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 00:09:53 --> URI Class Initialized
DEBUG - 2013-09-20 00:09:53 --> Router Class Initialized
ERROR - 2013-09-20 00:09:53 --> 404 Page Not Found --> css
DEBUG - 2013-09-20 00:10:07 --> Config Class Initialized
DEBUG - 2013-09-20 00:10:07 --> Hooks Class Initialized
DEBUG - 2013-09-20 00:10:07 --> Utf8 Class Initialized
DEBUG - 2013-09-20 00:10:07 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 00:10:07 --> URI Class Initialized
DEBUG - 2013-09-20 00:10:07 --> Router Class Initialized
DEBUG - 2013-09-20 00:10:07 --> Output Class Initialized
DEBUG - 2013-09-20 00:10:07 --> Security Class Initialized
DEBUG - 2013-09-20 00:10:07 --> Input Class Initialized
DEBUG - 2013-09-20 00:10:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 00:10:07 --> Language Class Initialized
DEBUG - 2013-09-20 00:10:07 --> Loader Class Initialized
DEBUG - 2013-09-20 00:10:07 --> Helper loaded: form_helper
DEBUG - 2013-09-20 00:10:07 --> Helper loaded: url_helper
DEBUG - 2013-09-20 00:10:07 --> Helper loaded: html_helper
DEBUG - 2013-09-20 00:10:07 --> Database Driver Class Initialized
DEBUG - 2013-09-20 00:10:07 --> Session Class Initialized
DEBUG - 2013-09-20 00:10:07 --> Helper loaded: string_helper
DEBUG - 2013-09-20 00:10:07 --> Session routines successfully run
DEBUG - 2013-09-20 00:10:07 --> Form Validation Class Initialized
DEBUG - 2013-09-20 00:10:07 --> Controller Class Initialized
DEBUG - 2013-09-20 00:10:07 --> Model Class Initialized
DEBUG - 2013-09-20 00:10:07 --> Model Class Initialized
DEBUG - 2013-09-20 00:10:07 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 00:10:07 --> after session initialization................
INFO  - 2013-09-20 00:10:07 --> last news id is 1
INFO  - 2013-09-20 00:10:07 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 00:10:07 --> last news id is 7
INFO  - 2013-09-20 00:10:07 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 00:10:07 --> Final output sent to browser
DEBUG - 2013-09-20 00:10:07 --> Total execution time: 0.0540
DEBUG - 2013-09-20 00:10:17 --> Config Class Initialized
DEBUG - 2013-09-20 00:10:17 --> Hooks Class Initialized
DEBUG - 2013-09-20 00:10:17 --> Utf8 Class Initialized
DEBUG - 2013-09-20 00:10:17 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 00:10:17 --> URI Class Initialized
DEBUG - 2013-09-20 00:10:17 --> Router Class Initialized
DEBUG - 2013-09-20 00:10:17 --> Output Class Initialized
DEBUG - 2013-09-20 00:10:17 --> Security Class Initialized
DEBUG - 2013-09-20 00:10:17 --> Input Class Initialized
DEBUG - 2013-09-20 00:10:17 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 00:10:17 --> Language Class Initialized
DEBUG - 2013-09-20 00:10:17 --> Loader Class Initialized
DEBUG - 2013-09-20 00:10:17 --> Helper loaded: form_helper
DEBUG - 2013-09-20 00:10:17 --> Helper loaded: url_helper
DEBUG - 2013-09-20 00:10:17 --> Helper loaded: html_helper
DEBUG - 2013-09-20 00:10:17 --> Database Driver Class Initialized
DEBUG - 2013-09-20 00:10:17 --> Session Class Initialized
DEBUG - 2013-09-20 00:10:17 --> Helper loaded: string_helper
DEBUG - 2013-09-20 00:10:17 --> Session routines successfully run
DEBUG - 2013-09-20 00:10:18 --> Form Validation Class Initialized
DEBUG - 2013-09-20 00:10:18 --> Controller Class Initialized
DEBUG - 2013-09-20 00:10:18 --> Model Class Initialized
DEBUG - 2013-09-20 00:10:18 --> Model Class Initialized
DEBUG - 2013-09-20 00:10:18 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 00:10:18 --> after session initialization................
INFO  - 2013-09-20 00:10:18 --> last news id is 1
INFO  - 2013-09-20 00:10:18 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 00:10:18 --> last news id is 1
INFO  - 2013-09-20 00:10:18 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 00:10:18 --> Final output sent to browser
DEBUG - 2013-09-20 00:10:18 --> Total execution time: 0.0580
DEBUG - 2013-09-20 00:10:18 --> Config Class Initialized
DEBUG - 2013-09-20 00:10:18 --> Hooks Class Initialized
DEBUG - 2013-09-20 00:10:18 --> Utf8 Class Initialized
DEBUG - 2013-09-20 00:10:18 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 00:10:18 --> URI Class Initialized
DEBUG - 2013-09-20 00:10:18 --> Router Class Initialized
DEBUG - 2013-09-20 00:10:18 --> Output Class Initialized
DEBUG - 2013-09-20 00:10:18 --> Security Class Initialized
DEBUG - 2013-09-20 00:10:18 --> Input Class Initialized
DEBUG - 2013-09-20 00:10:18 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 00:10:18 --> Language Class Initialized
DEBUG - 2013-09-20 00:10:18 --> Loader Class Initialized
DEBUG - 2013-09-20 00:10:18 --> Helper loaded: form_helper
DEBUG - 2013-09-20 00:10:18 --> Helper loaded: url_helper
DEBUG - 2013-09-20 00:10:18 --> Helper loaded: html_helper
DEBUG - 2013-09-20 00:10:18 --> Database Driver Class Initialized
DEBUG - 2013-09-20 00:10:18 --> Session Class Initialized
DEBUG - 2013-09-20 00:10:18 --> Helper loaded: string_helper
DEBUG - 2013-09-20 00:10:18 --> Session routines successfully run
DEBUG - 2013-09-20 00:10:18 --> Form Validation Class Initialized
DEBUG - 2013-09-20 00:10:18 --> Controller Class Initialized
DEBUG - 2013-09-20 00:10:18 --> Model Class Initialized
DEBUG - 2013-09-20 00:10:18 --> Model Class Initialized
DEBUG - 2013-09-20 00:10:18 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 00:10:18 --> after session initialization................
INFO  - 2013-09-20 00:10:18 --> last news id is 1
INFO  - 2013-09-20 00:10:18 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 00:10:18 --> last news id is 1
INFO  - 2013-09-20 00:10:18 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 00:10:18 --> Final output sent to browser
DEBUG - 2013-09-20 00:10:18 --> Total execution time: 0.0590
DEBUG - 2013-09-20 00:10:25 --> Config Class Initialized
DEBUG - 2013-09-20 00:10:25 --> Hooks Class Initialized
DEBUG - 2013-09-20 00:10:25 --> Utf8 Class Initialized
DEBUG - 2013-09-20 00:10:25 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 00:10:25 --> URI Class Initialized
DEBUG - 2013-09-20 00:10:25 --> Router Class Initialized
DEBUG - 2013-09-20 00:10:25 --> Output Class Initialized
DEBUG - 2013-09-20 00:10:25 --> Security Class Initialized
DEBUG - 2013-09-20 00:10:25 --> Input Class Initialized
DEBUG - 2013-09-20 00:10:25 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 00:10:25 --> Language Class Initialized
DEBUG - 2013-09-20 00:10:25 --> Loader Class Initialized
DEBUG - 2013-09-20 00:10:25 --> Helper loaded: form_helper
DEBUG - 2013-09-20 00:10:25 --> Helper loaded: url_helper
DEBUG - 2013-09-20 00:10:25 --> Helper loaded: html_helper
DEBUG - 2013-09-20 00:10:25 --> Database Driver Class Initialized
DEBUG - 2013-09-20 00:10:25 --> Session Class Initialized
DEBUG - 2013-09-20 00:10:25 --> Helper loaded: string_helper
DEBUG - 2013-09-20 00:10:25 --> Session routines successfully run
DEBUG - 2013-09-20 00:10:25 --> Form Validation Class Initialized
DEBUG - 2013-09-20 00:10:25 --> Controller Class Initialized
DEBUG - 2013-09-20 00:10:25 --> Model Class Initialized
DEBUG - 2013-09-20 00:10:25 --> Model Class Initialized
DEBUG - 2013-09-20 00:10:25 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 00:10:25 --> after session initialization................
INFO  - 2013-09-20 00:10:25 --> last news id is 1
INFO  - 2013-09-20 00:10:25 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 00:10:25 --> last news id is 1
INFO  - 2013-09-20 00:10:25 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 00:10:25 --> Final output sent to browser
DEBUG - 2013-09-20 00:10:25 --> Total execution time: 0.0520
DEBUG - 2013-09-20 00:10:26 --> Config Class Initialized
DEBUG - 2013-09-20 00:10:26 --> Hooks Class Initialized
DEBUG - 2013-09-20 00:10:26 --> Utf8 Class Initialized
DEBUG - 2013-09-20 00:10:26 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 00:10:26 --> URI Class Initialized
DEBUG - 2013-09-20 00:10:26 --> Router Class Initialized
DEBUG - 2013-09-20 00:10:26 --> Output Class Initialized
DEBUG - 2013-09-20 00:10:26 --> Security Class Initialized
DEBUG - 2013-09-20 00:10:26 --> Input Class Initialized
DEBUG - 2013-09-20 00:10:26 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 00:10:26 --> Language Class Initialized
DEBUG - 2013-09-20 00:10:26 --> Loader Class Initialized
DEBUG - 2013-09-20 00:10:26 --> Helper loaded: form_helper
DEBUG - 2013-09-20 00:10:26 --> Helper loaded: url_helper
DEBUG - 2013-09-20 00:10:26 --> Helper loaded: html_helper
DEBUG - 2013-09-20 00:10:26 --> Database Driver Class Initialized
DEBUG - 2013-09-20 00:10:26 --> Session Class Initialized
DEBUG - 2013-09-20 00:10:26 --> Helper loaded: string_helper
DEBUG - 2013-09-20 00:10:26 --> Session routines successfully run
DEBUG - 2013-09-20 00:10:26 --> Form Validation Class Initialized
DEBUG - 2013-09-20 00:10:26 --> Controller Class Initialized
DEBUG - 2013-09-20 00:10:26 --> Model Class Initialized
DEBUG - 2013-09-20 00:10:26 --> Model Class Initialized
DEBUG - 2013-09-20 00:10:26 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 00:10:26 --> after session initialization................
INFO  - 2013-09-20 00:10:26 --> last news id is 1
INFO  - 2013-09-20 00:10:26 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 00:10:26 --> last news id is 1
INFO  - 2013-09-20 00:10:26 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 00:10:26 --> Final output sent to browser
DEBUG - 2013-09-20 00:10:26 --> Total execution time: 0.0610
DEBUG - 2013-09-20 00:14:36 --> Config Class Initialized
DEBUG - 2013-09-20 00:14:36 --> Hooks Class Initialized
DEBUG - 2013-09-20 00:14:36 --> Utf8 Class Initialized
DEBUG - 2013-09-20 00:14:36 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 00:14:36 --> URI Class Initialized
DEBUG - 2013-09-20 00:14:36 --> Router Class Initialized
DEBUG - 2013-09-20 00:14:36 --> Output Class Initialized
DEBUG - 2013-09-20 00:14:36 --> Security Class Initialized
DEBUG - 2013-09-20 00:14:36 --> Input Class Initialized
DEBUG - 2013-09-20 00:14:36 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 00:14:36 --> Language Class Initialized
DEBUG - 2013-09-20 00:14:36 --> Loader Class Initialized
DEBUG - 2013-09-20 00:14:36 --> Helper loaded: form_helper
DEBUG - 2013-09-20 00:14:36 --> Helper loaded: url_helper
DEBUG - 2013-09-20 00:14:36 --> Helper loaded: html_helper
DEBUG - 2013-09-20 00:14:36 --> Database Driver Class Initialized
DEBUG - 2013-09-20 00:14:36 --> Session Class Initialized
DEBUG - 2013-09-20 00:14:36 --> Helper loaded: string_helper
DEBUG - 2013-09-20 00:14:36 --> Session routines successfully run
DEBUG - 2013-09-20 00:14:36 --> Form Validation Class Initialized
DEBUG - 2013-09-20 00:14:36 --> Controller Class Initialized
DEBUG - 2013-09-20 00:14:36 --> Model Class Initialized
DEBUG - 2013-09-20 00:14:36 --> Model Class Initialized
DEBUG - 2013-09-20 00:14:36 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 00:14:36 --> after session initialization................
INFO  - 2013-09-20 00:14:36 --> after rays has been clicked.................
INFO  - 2013-09-20 00:14:36 --> last news id is 0
INFO  - 2013-09-20 00:14:36 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 00:14:36 --> last news id is 0
INFO  - 2013-09-20 00:14:36 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 00:14:36 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 00:14:36 --> Final output sent to browser
DEBUG - 2013-09-20 00:14:36 --> Total execution time: 0.0940
DEBUG - 2013-09-20 00:14:36 --> Config Class Initialized
DEBUG - 2013-09-20 00:14:36 --> Hooks Class Initialized
DEBUG - 2013-09-20 00:14:36 --> Utf8 Class Initialized
DEBUG - 2013-09-20 00:14:36 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 00:14:36 --> URI Class Initialized
DEBUG - 2013-09-20 00:14:36 --> Router Class Initialized
ERROR - 2013-09-20 00:14:36 --> 404 Page Not Found --> css
DEBUG - 2013-09-20 00:14:37 --> Config Class Initialized
DEBUG - 2013-09-20 00:14:37 --> Hooks Class Initialized
DEBUG - 2013-09-20 00:14:37 --> Utf8 Class Initialized
DEBUG - 2013-09-20 00:14:37 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 00:14:37 --> URI Class Initialized
DEBUG - 2013-09-20 00:14:37 --> Router Class Initialized
DEBUG - 2013-09-20 00:14:37 --> Output Class Initialized
DEBUG - 2013-09-20 00:14:37 --> Security Class Initialized
DEBUG - 2013-09-20 00:14:37 --> Input Class Initialized
DEBUG - 2013-09-20 00:14:37 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 00:14:37 --> Language Class Initialized
DEBUG - 2013-09-20 00:14:37 --> Loader Class Initialized
DEBUG - 2013-09-20 00:14:37 --> Helper loaded: form_helper
DEBUG - 2013-09-20 00:14:37 --> Helper loaded: url_helper
DEBUG - 2013-09-20 00:14:37 --> Helper loaded: html_helper
DEBUG - 2013-09-20 00:14:37 --> Database Driver Class Initialized
DEBUG - 2013-09-20 00:14:37 --> Session Class Initialized
DEBUG - 2013-09-20 00:14:37 --> Helper loaded: string_helper
DEBUG - 2013-09-20 00:14:37 --> Session routines successfully run
DEBUG - 2013-09-20 00:14:37 --> Form Validation Class Initialized
DEBUG - 2013-09-20 00:14:37 --> Controller Class Initialized
DEBUG - 2013-09-20 00:14:37 --> Model Class Initialized
DEBUG - 2013-09-20 00:14:37 --> Model Class Initialized
DEBUG - 2013-09-20 00:14:37 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 00:14:37 --> after session initialization................
INFO  - 2013-09-20 00:14:37 --> last news id is 1
INFO  - 2013-09-20 00:14:37 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 00:14:37 --> last news id is 7
INFO  - 2013-09-20 00:14:37 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 00:14:37 --> Final output sent to browser
DEBUG - 2013-09-20 00:14:37 --> Total execution time: 0.0540
DEBUG - 2013-09-20 00:14:38 --> Config Class Initialized
DEBUG - 2013-09-20 00:14:38 --> Hooks Class Initialized
DEBUG - 2013-09-20 00:14:38 --> Utf8 Class Initialized
DEBUG - 2013-09-20 00:14:38 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 00:14:38 --> URI Class Initialized
DEBUG - 2013-09-20 00:14:38 --> Router Class Initialized
DEBUG - 2013-09-20 00:14:38 --> Output Class Initialized
DEBUG - 2013-09-20 00:14:38 --> Security Class Initialized
DEBUG - 2013-09-20 00:14:38 --> Input Class Initialized
DEBUG - 2013-09-20 00:14:38 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 00:14:38 --> Language Class Initialized
DEBUG - 2013-09-20 00:14:38 --> Loader Class Initialized
DEBUG - 2013-09-20 00:14:38 --> Helper loaded: form_helper
DEBUG - 2013-09-20 00:14:38 --> Helper loaded: url_helper
DEBUG - 2013-09-20 00:14:38 --> Helper loaded: html_helper
DEBUG - 2013-09-20 00:14:38 --> Database Driver Class Initialized
DEBUG - 2013-09-20 00:14:38 --> Session Class Initialized
DEBUG - 2013-09-20 00:14:38 --> Helper loaded: string_helper
DEBUG - 2013-09-20 00:14:38 --> Session routines successfully run
DEBUG - 2013-09-20 00:14:38 --> Form Validation Class Initialized
DEBUG - 2013-09-20 00:14:38 --> Controller Class Initialized
DEBUG - 2013-09-20 00:14:38 --> Model Class Initialized
DEBUG - 2013-09-20 00:14:38 --> Model Class Initialized
DEBUG - 2013-09-20 00:14:38 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 00:14:38 --> after session initialization................
INFO  - 2013-09-20 00:14:38 --> last news id is 1
INFO  - 2013-09-20 00:14:38 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 00:14:38 --> last news id is 7
INFO  - 2013-09-20 00:14:38 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 00:14:38 --> Final output sent to browser
DEBUG - 2013-09-20 00:14:38 --> Total execution time: 0.0560
DEBUG - 2013-09-20 00:14:38 --> Config Class Initialized
DEBUG - 2013-09-20 00:14:38 --> Hooks Class Initialized
DEBUG - 2013-09-20 00:14:38 --> Utf8 Class Initialized
DEBUG - 2013-09-20 00:14:38 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 00:14:38 --> URI Class Initialized
DEBUG - 2013-09-20 00:14:38 --> Router Class Initialized
ERROR - 2013-09-20 00:14:38 --> 404 Page Not Found --> user_authorization
DEBUG - 2013-09-20 00:14:41 --> Config Class Initialized
DEBUG - 2013-09-20 00:14:41 --> Hooks Class Initialized
DEBUG - 2013-09-20 00:14:41 --> Utf8 Class Initialized
DEBUG - 2013-09-20 00:14:41 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 00:14:41 --> URI Class Initialized
DEBUG - 2013-09-20 00:14:41 --> Router Class Initialized
DEBUG - 2013-09-20 00:14:41 --> Output Class Initialized
DEBUG - 2013-09-20 00:14:41 --> Security Class Initialized
DEBUG - 2013-09-20 00:14:41 --> Input Class Initialized
DEBUG - 2013-09-20 00:14:41 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 00:14:41 --> Language Class Initialized
DEBUG - 2013-09-20 00:14:41 --> Loader Class Initialized
DEBUG - 2013-09-20 00:14:41 --> Helper loaded: form_helper
DEBUG - 2013-09-20 00:14:41 --> Helper loaded: url_helper
DEBUG - 2013-09-20 00:14:41 --> Helper loaded: html_helper
DEBUG - 2013-09-20 00:14:41 --> Database Driver Class Initialized
DEBUG - 2013-09-20 00:14:41 --> Session Class Initialized
DEBUG - 2013-09-20 00:14:41 --> Helper loaded: string_helper
DEBUG - 2013-09-20 00:14:41 --> Session routines successfully run
DEBUG - 2013-09-20 00:14:41 --> Form Validation Class Initialized
DEBUG - 2013-09-20 00:14:41 --> Controller Class Initialized
DEBUG - 2013-09-20 00:14:41 --> Model Class Initialized
DEBUG - 2013-09-20 00:14:41 --> Model Class Initialized
DEBUG - 2013-09-20 00:14:41 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 00:14:41 --> after session initialization................
ERROR - 2013-09-20 00:14:41 --> Severity: Warning  --> Missing argument 1 for user_authorization::index() C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 69
ERROR - 2013-09-20 00:14:41 --> Severity: Notice  --> Undefined variable: message C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 71
DEBUG - 2013-09-20 00:14:41 --> Config Class Initialized
DEBUG - 2013-09-20 00:14:41 --> Hooks Class Initialized
DEBUG - 2013-09-20 00:14:41 --> Utf8 Class Initialized
DEBUG - 2013-09-20 00:14:41 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 00:14:41 --> URI Class Initialized
DEBUG - 2013-09-20 00:14:41 --> Router Class Initialized
DEBUG - 2013-09-20 00:14:41 --> No URI present. Default controller set.
DEBUG - 2013-09-20 00:14:41 --> Output Class Initialized
DEBUG - 2013-09-20 00:14:41 --> Security Class Initialized
DEBUG - 2013-09-20 00:14:41 --> Input Class Initialized
DEBUG - 2013-09-20 00:14:41 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 00:14:41 --> Language Class Initialized
DEBUG - 2013-09-20 00:14:41 --> Loader Class Initialized
DEBUG - 2013-09-20 00:14:41 --> Helper loaded: form_helper
DEBUG - 2013-09-20 00:14:41 --> Helper loaded: url_helper
DEBUG - 2013-09-20 00:14:41 --> Helper loaded: html_helper
DEBUG - 2013-09-20 00:14:41 --> Database Driver Class Initialized
DEBUG - 2013-09-20 00:14:41 --> Session Class Initialized
DEBUG - 2013-09-20 00:14:41 --> Helper loaded: string_helper
DEBUG - 2013-09-20 00:14:41 --> Session routines successfully run
DEBUG - 2013-09-20 00:14:41 --> Form Validation Class Initialized
DEBUG - 2013-09-20 00:14:41 --> Controller Class Initialized
INFO  - 2013-09-20 00:14:41 --> the form message==>
INFO  - 2013-09-20 00:14:41 --> after the retrieving session list.................//////////
DEBUG - 2013-09-20 00:14:41 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-20 00:14:41 --> Final output sent to browser
DEBUG - 2013-09-20 00:14:41 --> Total execution time: 0.0480
DEBUG - 2013-09-20 00:14:42 --> Config Class Initialized
DEBUG - 2013-09-20 00:14:42 --> Hooks Class Initialized
DEBUG - 2013-09-20 00:14:42 --> Utf8 Class Initialized
DEBUG - 2013-09-20 00:14:42 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 00:14:42 --> URI Class Initialized
DEBUG - 2013-09-20 00:14:42 --> Router Class Initialized
DEBUG - 2013-09-20 00:14:42 --> Output Class Initialized
DEBUG - 2013-09-20 00:14:42 --> Security Class Initialized
DEBUG - 2013-09-20 00:14:42 --> Input Class Initialized
DEBUG - 2013-09-20 00:14:42 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 00:14:42 --> Language Class Initialized
DEBUG - 2013-09-20 00:14:42 --> Loader Class Initialized
DEBUG - 2013-09-20 00:14:42 --> Helper loaded: form_helper
DEBUG - 2013-09-20 00:14:42 --> Helper loaded: url_helper
DEBUG - 2013-09-20 00:14:42 --> Helper loaded: html_helper
DEBUG - 2013-09-20 00:14:42 --> Database Driver Class Initialized
DEBUG - 2013-09-20 00:14:42 --> Session Class Initialized
DEBUG - 2013-09-20 00:14:42 --> Helper loaded: string_helper
DEBUG - 2013-09-20 00:14:42 --> Session routines successfully run
DEBUG - 2013-09-20 00:14:42 --> Form Validation Class Initialized
DEBUG - 2013-09-20 00:14:42 --> Controller Class Initialized
DEBUG - 2013-09-20 00:14:42 --> Model Class Initialized
DEBUG - 2013-09-20 00:14:42 --> Model Class Initialized
DEBUG - 2013-09-20 00:14:42 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 00:14:42 --> after session initialization................
INFO  - 2013-09-20 00:14:42 --> after rays has been clicked.................
INFO  - 2013-09-20 00:14:42 --> last news id is 0
INFO  - 2013-09-20 00:14:42 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 00:14:42 --> last news id is 0
INFO  - 2013-09-20 00:14:42 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 00:14:42 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 00:14:42 --> Final output sent to browser
DEBUG - 2013-09-20 00:14:42 --> Total execution time: 0.0610
DEBUG - 2013-09-20 00:14:42 --> Config Class Initialized
DEBUG - 2013-09-20 00:14:42 --> Hooks Class Initialized
DEBUG - 2013-09-20 00:14:42 --> Utf8 Class Initialized
DEBUG - 2013-09-20 00:14:42 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 00:14:42 --> URI Class Initialized
DEBUG - 2013-09-20 00:14:42 --> Router Class Initialized
ERROR - 2013-09-20 00:14:42 --> 404 Page Not Found --> css
DEBUG - 2013-09-20 00:14:49 --> Config Class Initialized
DEBUG - 2013-09-20 00:14:49 --> Hooks Class Initialized
DEBUG - 2013-09-20 00:14:49 --> Utf8 Class Initialized
DEBUG - 2013-09-20 00:14:49 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 00:14:49 --> URI Class Initialized
DEBUG - 2013-09-20 00:14:49 --> Router Class Initialized
DEBUG - 2013-09-20 00:14:49 --> Output Class Initialized
DEBUG - 2013-09-20 00:14:49 --> Security Class Initialized
DEBUG - 2013-09-20 00:14:49 --> Input Class Initialized
DEBUG - 2013-09-20 00:14:49 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 00:14:49 --> Language Class Initialized
DEBUG - 2013-09-20 00:14:49 --> Loader Class Initialized
DEBUG - 2013-09-20 00:14:49 --> Helper loaded: form_helper
DEBUG - 2013-09-20 00:14:49 --> Helper loaded: url_helper
DEBUG - 2013-09-20 00:14:49 --> Helper loaded: html_helper
DEBUG - 2013-09-20 00:14:49 --> Database Driver Class Initialized
DEBUG - 2013-09-20 00:14:50 --> Session Class Initialized
DEBUG - 2013-09-20 00:14:50 --> Helper loaded: string_helper
DEBUG - 2013-09-20 00:14:50 --> Session routines successfully run
DEBUG - 2013-09-20 00:14:50 --> Form Validation Class Initialized
DEBUG - 2013-09-20 00:14:50 --> Controller Class Initialized
DEBUG - 2013-09-20 00:14:50 --> Model Class Initialized
DEBUG - 2013-09-20 00:14:50 --> Model Class Initialized
DEBUG - 2013-09-20 00:14:50 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 00:14:50 --> after session initialization................
INFO  - 2013-09-20 00:14:50 --> last news id is 1
INFO  - 2013-09-20 00:14:50 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 00:14:50 --> last news id is 7
INFO  - 2013-09-20 00:14:50 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 00:14:50 --> Final output sent to browser
DEBUG - 2013-09-20 00:14:50 --> Total execution time: 1.0641
DEBUG - 2013-09-20 00:14:54 --> Config Class Initialized
DEBUG - 2013-09-20 00:14:54 --> Hooks Class Initialized
DEBUG - 2013-09-20 00:14:54 --> Utf8 Class Initialized
DEBUG - 2013-09-20 00:14:54 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 00:14:54 --> URI Class Initialized
DEBUG - 2013-09-20 00:14:54 --> Router Class Initialized
DEBUG - 2013-09-20 00:14:54 --> Output Class Initialized
DEBUG - 2013-09-20 00:14:54 --> Security Class Initialized
DEBUG - 2013-09-20 00:14:54 --> Input Class Initialized
DEBUG - 2013-09-20 00:14:54 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 00:14:54 --> Language Class Initialized
DEBUG - 2013-09-20 00:14:54 --> Loader Class Initialized
DEBUG - 2013-09-20 00:14:54 --> Helper loaded: form_helper
DEBUG - 2013-09-20 00:14:54 --> Helper loaded: url_helper
DEBUG - 2013-09-20 00:14:54 --> Helper loaded: html_helper
DEBUG - 2013-09-20 00:14:54 --> Database Driver Class Initialized
DEBUG - 2013-09-20 00:14:54 --> Session Class Initialized
DEBUG - 2013-09-20 00:14:54 --> Helper loaded: string_helper
DEBUG - 2013-09-20 00:14:54 --> Session routines successfully run
DEBUG - 2013-09-20 00:14:54 --> Form Validation Class Initialized
DEBUG - 2013-09-20 00:14:54 --> Controller Class Initialized
DEBUG - 2013-09-20 00:14:54 --> Model Class Initialized
DEBUG - 2013-09-20 00:14:54 --> Model Class Initialized
DEBUG - 2013-09-20 00:14:54 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 00:14:54 --> after session initialization................
ERROR - 2013-09-20 00:14:54 --> Severity: Warning  --> Missing argument 1 for user_authorization::index() C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 69
ERROR - 2013-09-20 00:14:54 --> Severity: Notice  --> Undefined variable: message C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 71
DEBUG - 2013-09-20 00:14:54 --> Config Class Initialized
DEBUG - 2013-09-20 00:14:54 --> Hooks Class Initialized
DEBUG - 2013-09-20 00:14:54 --> Utf8 Class Initialized
DEBUG - 2013-09-20 00:14:54 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 00:14:54 --> URI Class Initialized
DEBUG - 2013-09-20 00:14:54 --> Router Class Initialized
DEBUG - 2013-09-20 00:14:54 --> No URI present. Default controller set.
DEBUG - 2013-09-20 00:14:54 --> Output Class Initialized
DEBUG - 2013-09-20 00:14:54 --> Security Class Initialized
DEBUG - 2013-09-20 00:14:54 --> Input Class Initialized
DEBUG - 2013-09-20 00:14:54 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 00:14:54 --> Language Class Initialized
DEBUG - 2013-09-20 00:14:54 --> Loader Class Initialized
DEBUG - 2013-09-20 00:14:54 --> Helper loaded: form_helper
DEBUG - 2013-09-20 00:14:54 --> Helper loaded: url_helper
DEBUG - 2013-09-20 00:14:54 --> Helper loaded: html_helper
DEBUG - 2013-09-20 00:14:54 --> Database Driver Class Initialized
DEBUG - 2013-09-20 00:14:54 --> Session Class Initialized
DEBUG - 2013-09-20 00:14:54 --> Helper loaded: string_helper
DEBUG - 2013-09-20 00:14:54 --> Session routines successfully run
DEBUG - 2013-09-20 00:14:54 --> Form Validation Class Initialized
DEBUG - 2013-09-20 00:14:54 --> Controller Class Initialized
INFO  - 2013-09-20 00:14:54 --> the form message==>
INFO  - 2013-09-20 00:14:54 --> after the retrieving session list.................//////////
DEBUG - 2013-09-20 00:14:54 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-20 00:14:54 --> Final output sent to browser
DEBUG - 2013-09-20 00:14:54 --> Total execution time: 0.0450
DEBUG - 2013-09-20 00:14:54 --> Config Class Initialized
DEBUG - 2013-09-20 00:14:54 --> Hooks Class Initialized
DEBUG - 2013-09-20 00:14:54 --> Utf8 Class Initialized
DEBUG - 2013-09-20 00:14:54 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 00:14:54 --> URI Class Initialized
DEBUG - 2013-09-20 00:14:54 --> Router Class Initialized
DEBUG - 2013-09-20 00:14:54 --> Output Class Initialized
DEBUG - 2013-09-20 00:14:54 --> Security Class Initialized
DEBUG - 2013-09-20 00:14:54 --> Input Class Initialized
DEBUG - 2013-09-20 00:14:54 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 00:14:54 --> Language Class Initialized
DEBUG - 2013-09-20 00:14:54 --> Loader Class Initialized
DEBUG - 2013-09-20 00:14:54 --> Helper loaded: form_helper
DEBUG - 2013-09-20 00:14:54 --> Helper loaded: url_helper
DEBUG - 2013-09-20 00:14:54 --> Helper loaded: html_helper
DEBUG - 2013-09-20 00:14:54 --> Database Driver Class Initialized
DEBUG - 2013-09-20 00:14:54 --> Session Class Initialized
DEBUG - 2013-09-20 00:14:54 --> Helper loaded: string_helper
DEBUG - 2013-09-20 00:14:54 --> Session routines successfully run
DEBUG - 2013-09-20 00:14:54 --> Form Validation Class Initialized
DEBUG - 2013-09-20 00:14:54 --> Controller Class Initialized
DEBUG - 2013-09-20 00:14:54 --> Model Class Initialized
DEBUG - 2013-09-20 00:14:54 --> Model Class Initialized
DEBUG - 2013-09-20 00:14:54 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 00:14:54 --> after session initialization................
INFO  - 2013-09-20 00:14:54 --> after rays has been clicked.................
INFO  - 2013-09-20 00:14:54 --> last news id is 0
INFO  - 2013-09-20 00:14:54 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 00:14:54 --> last news id is 0
INFO  - 2013-09-20 00:14:54 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 00:14:54 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 00:14:54 --> Final output sent to browser
DEBUG - 2013-09-20 00:14:54 --> Total execution time: 0.0590
DEBUG - 2013-09-20 00:14:54 --> Config Class Initialized
DEBUG - 2013-09-20 00:14:54 --> Hooks Class Initialized
DEBUG - 2013-09-20 00:14:54 --> Utf8 Class Initialized
DEBUG - 2013-09-20 00:14:54 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 00:14:54 --> URI Class Initialized
DEBUG - 2013-09-20 00:14:54 --> Router Class Initialized
ERROR - 2013-09-20 00:14:54 --> 404 Page Not Found --> css
DEBUG - 2013-09-20 01:32:43 --> Config Class Initialized
DEBUG - 2013-09-20 01:32:43 --> Hooks Class Initialized
DEBUG - 2013-09-20 01:32:43 --> Utf8 Class Initialized
DEBUG - 2013-09-20 01:32:43 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 01:32:43 --> URI Class Initialized
DEBUG - 2013-09-20 01:32:43 --> Router Class Initialized
DEBUG - 2013-09-20 01:32:43 --> Output Class Initialized
DEBUG - 2013-09-20 01:32:43 --> Security Class Initialized
DEBUG - 2013-09-20 01:32:43 --> Input Class Initialized
DEBUG - 2013-09-20 01:32:43 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 01:32:43 --> Language Class Initialized
DEBUG - 2013-09-20 01:32:43 --> Loader Class Initialized
DEBUG - 2013-09-20 01:32:43 --> Helper loaded: form_helper
DEBUG - 2013-09-20 01:32:43 --> Helper loaded: url_helper
DEBUG - 2013-09-20 01:32:43 --> Helper loaded: html_helper
DEBUG - 2013-09-20 01:32:43 --> Database Driver Class Initialized
DEBUG - 2013-09-20 01:32:43 --> Session Class Initialized
DEBUG - 2013-09-20 01:32:43 --> Helper loaded: string_helper
DEBUG - 2013-09-20 01:32:43 --> Session routines successfully run
DEBUG - 2013-09-20 01:32:43 --> Form Validation Class Initialized
DEBUG - 2013-09-20 01:32:43 --> Controller Class Initialized
DEBUG - 2013-09-20 01:32:43 --> Model Class Initialized
DEBUG - 2013-09-20 01:32:43 --> Model Class Initialized
DEBUG - 2013-09-20 01:32:43 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 01:32:43 --> after session initialization................
INFO  - 2013-09-20 01:32:43 --> last news id is 1
INFO  - 2013-09-20 01:32:43 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 01:32:43 --> last news id is 7
INFO  - 2013-09-20 01:32:43 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 01:32:43 --> Final output sent to browser
DEBUG - 2013-09-20 01:32:43 --> Total execution time: 0.0490
DEBUG - 2013-09-20 01:32:44 --> Config Class Initialized
DEBUG - 2013-09-20 01:32:44 --> Hooks Class Initialized
DEBUG - 2013-09-20 01:32:44 --> Utf8 Class Initialized
DEBUG - 2013-09-20 01:32:44 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 01:32:44 --> URI Class Initialized
DEBUG - 2013-09-20 01:32:44 --> Router Class Initialized
DEBUG - 2013-09-20 01:32:44 --> Output Class Initialized
DEBUG - 2013-09-20 01:32:44 --> Security Class Initialized
DEBUG - 2013-09-20 01:32:44 --> Input Class Initialized
DEBUG - 2013-09-20 01:32:44 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 01:32:44 --> Language Class Initialized
DEBUG - 2013-09-20 01:32:44 --> Loader Class Initialized
DEBUG - 2013-09-20 01:32:44 --> Helper loaded: form_helper
DEBUG - 2013-09-20 01:32:44 --> Helper loaded: url_helper
DEBUG - 2013-09-20 01:32:44 --> Helper loaded: html_helper
DEBUG - 2013-09-20 01:32:44 --> Database Driver Class Initialized
DEBUG - 2013-09-20 01:32:44 --> Session Class Initialized
DEBUG - 2013-09-20 01:32:44 --> Helper loaded: string_helper
DEBUG - 2013-09-20 01:32:44 --> Session routines successfully run
DEBUG - 2013-09-20 01:32:44 --> Form Validation Class Initialized
DEBUG - 2013-09-20 01:32:44 --> Controller Class Initialized
DEBUG - 2013-09-20 01:32:44 --> Model Class Initialized
DEBUG - 2013-09-20 01:32:44 --> Model Class Initialized
DEBUG - 2013-09-20 01:32:44 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 01:32:44 --> after session initialization................
INFO  - 2013-09-20 01:32:44 --> last news id is 1
INFO  - 2013-09-20 01:32:44 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 01:32:44 --> last news id is 7
INFO  - 2013-09-20 01:32:44 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 01:32:44 --> Final output sent to browser
DEBUG - 2013-09-20 01:32:44 --> Total execution time: 0.0490
DEBUG - 2013-09-20 01:32:44 --> Config Class Initialized
DEBUG - 2013-09-20 01:32:44 --> Hooks Class Initialized
DEBUG - 2013-09-20 01:32:44 --> Utf8 Class Initialized
DEBUG - 2013-09-20 01:32:44 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 01:32:44 --> URI Class Initialized
DEBUG - 2013-09-20 01:32:44 --> Router Class Initialized
DEBUG - 2013-09-20 01:32:44 --> Output Class Initialized
DEBUG - 2013-09-20 01:32:44 --> Security Class Initialized
DEBUG - 2013-09-20 01:32:44 --> Input Class Initialized
DEBUG - 2013-09-20 01:32:44 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 01:32:44 --> Language Class Initialized
DEBUG - 2013-09-20 01:32:44 --> Loader Class Initialized
DEBUG - 2013-09-20 01:32:44 --> Helper loaded: form_helper
DEBUG - 2013-09-20 01:32:44 --> Helper loaded: url_helper
DEBUG - 2013-09-20 01:32:44 --> Helper loaded: html_helper
DEBUG - 2013-09-20 01:32:44 --> Database Driver Class Initialized
DEBUG - 2013-09-20 01:32:44 --> Session Class Initialized
DEBUG - 2013-09-20 01:32:44 --> Helper loaded: string_helper
DEBUG - 2013-09-20 01:32:44 --> Session routines successfully run
DEBUG - 2013-09-20 01:32:44 --> Form Validation Class Initialized
DEBUG - 2013-09-20 01:32:44 --> Controller Class Initialized
DEBUG - 2013-09-20 01:32:44 --> Model Class Initialized
DEBUG - 2013-09-20 01:32:44 --> Model Class Initialized
DEBUG - 2013-09-20 01:32:44 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 01:32:44 --> after session initialization................
INFO  - 2013-09-20 01:32:44 --> last news id is 1
INFO  - 2013-09-20 01:32:44 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 01:32:44 --> last news id is 7
INFO  - 2013-09-20 01:32:44 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 01:32:44 --> Final output sent to browser
DEBUG - 2013-09-20 01:32:44 --> Total execution time: 0.0500
DEBUG - 2013-09-20 01:33:27 --> Config Class Initialized
DEBUG - 2013-09-20 01:33:27 --> Hooks Class Initialized
DEBUG - 2013-09-20 01:33:27 --> Utf8 Class Initialized
DEBUG - 2013-09-20 01:33:27 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 01:33:27 --> URI Class Initialized
DEBUG - 2013-09-20 01:33:27 --> Router Class Initialized
DEBUG - 2013-09-20 01:33:27 --> Output Class Initialized
DEBUG - 2013-09-20 01:33:27 --> Security Class Initialized
DEBUG - 2013-09-20 01:33:27 --> Input Class Initialized
DEBUG - 2013-09-20 01:33:27 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 01:33:27 --> Language Class Initialized
DEBUG - 2013-09-20 01:33:27 --> Loader Class Initialized
DEBUG - 2013-09-20 01:33:27 --> Helper loaded: form_helper
DEBUG - 2013-09-20 01:33:27 --> Helper loaded: url_helper
DEBUG - 2013-09-20 01:33:27 --> Helper loaded: html_helper
DEBUG - 2013-09-20 01:33:27 --> Database Driver Class Initialized
DEBUG - 2013-09-20 01:33:27 --> Session Class Initialized
DEBUG - 2013-09-20 01:33:27 --> Helper loaded: string_helper
DEBUG - 2013-09-20 01:33:27 --> Session routines successfully run
DEBUG - 2013-09-20 01:33:27 --> Form Validation Class Initialized
DEBUG - 2013-09-20 01:33:27 --> Controller Class Initialized
DEBUG - 2013-09-20 01:33:27 --> Model Class Initialized
DEBUG - 2013-09-20 01:33:27 --> Model Class Initialized
DEBUG - 2013-09-20 01:33:27 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 01:33:27 --> after session initialization................
ERROR - 2013-09-20 01:33:27 --> Severity: Warning  --> Missing argument 1 for user_authorization::index() C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 69
ERROR - 2013-09-20 01:33:27 --> Severity: Notice  --> Undefined variable: message C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 71
DEBUG - 2013-09-20 01:33:28 --> Config Class Initialized
DEBUG - 2013-09-20 01:33:28 --> Hooks Class Initialized
DEBUG - 2013-09-20 01:33:28 --> Utf8 Class Initialized
DEBUG - 2013-09-20 01:33:28 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 01:33:28 --> URI Class Initialized
DEBUG - 2013-09-20 01:33:28 --> Router Class Initialized
DEBUG - 2013-09-20 01:33:28 --> No URI present. Default controller set.
DEBUG - 2013-09-20 01:33:28 --> Output Class Initialized
DEBUG - 2013-09-20 01:33:28 --> Security Class Initialized
DEBUG - 2013-09-20 01:33:28 --> Input Class Initialized
DEBUG - 2013-09-20 01:33:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 01:33:28 --> Language Class Initialized
DEBUG - 2013-09-20 01:33:28 --> Loader Class Initialized
DEBUG - 2013-09-20 01:33:28 --> Helper loaded: form_helper
DEBUG - 2013-09-20 01:33:28 --> Helper loaded: url_helper
DEBUG - 2013-09-20 01:33:28 --> Helper loaded: html_helper
DEBUG - 2013-09-20 01:33:28 --> Database Driver Class Initialized
DEBUG - 2013-09-20 01:33:28 --> Session Class Initialized
DEBUG - 2013-09-20 01:33:28 --> Helper loaded: string_helper
DEBUG - 2013-09-20 01:33:28 --> Session routines successfully run
DEBUG - 2013-09-20 01:33:28 --> Form Validation Class Initialized
DEBUG - 2013-09-20 01:33:28 --> Controller Class Initialized
INFO  - 2013-09-20 01:33:28 --> the form message==>
INFO  - 2013-09-20 01:33:28 --> after the retrieving session list.................//////////
DEBUG - 2013-09-20 01:33:28 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-20 01:33:28 --> Final output sent to browser
DEBUG - 2013-09-20 01:33:28 --> Total execution time: 0.0390
DEBUG - 2013-09-20 01:33:28 --> Config Class Initialized
DEBUG - 2013-09-20 01:33:28 --> Hooks Class Initialized
DEBUG - 2013-09-20 01:33:28 --> Utf8 Class Initialized
DEBUG - 2013-09-20 01:33:28 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 01:33:28 --> URI Class Initialized
DEBUG - 2013-09-20 01:33:28 --> Router Class Initialized
DEBUG - 2013-09-20 01:33:28 --> Output Class Initialized
DEBUG - 2013-09-20 01:33:28 --> Security Class Initialized
DEBUG - 2013-09-20 01:33:28 --> Input Class Initialized
DEBUG - 2013-09-20 01:33:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 01:33:28 --> Language Class Initialized
DEBUG - 2013-09-20 01:33:28 --> Loader Class Initialized
DEBUG - 2013-09-20 01:33:28 --> Helper loaded: form_helper
DEBUG - 2013-09-20 01:33:28 --> Helper loaded: url_helper
DEBUG - 2013-09-20 01:33:28 --> Helper loaded: html_helper
DEBUG - 2013-09-20 01:33:28 --> Database Driver Class Initialized
DEBUG - 2013-09-20 01:33:28 --> Session Class Initialized
DEBUG - 2013-09-20 01:33:28 --> Helper loaded: string_helper
DEBUG - 2013-09-20 01:33:28 --> Session routines successfully run
DEBUG - 2013-09-20 01:33:28 --> Form Validation Class Initialized
DEBUG - 2013-09-20 01:33:28 --> Controller Class Initialized
DEBUG - 2013-09-20 01:33:28 --> Model Class Initialized
DEBUG - 2013-09-20 01:33:28 --> Model Class Initialized
DEBUG - 2013-09-20 01:33:28 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 01:33:28 --> after session initialization................
INFO  - 2013-09-20 01:33:28 --> after rays has been clicked.................
INFO  - 2013-09-20 01:33:28 --> last news id is 0
INFO  - 2013-09-20 01:33:28 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 01:33:28 --> last news id is 0
INFO  - 2013-09-20 01:33:28 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 01:33:28 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 01:33:28 --> Final output sent to browser
DEBUG - 2013-09-20 01:33:28 --> Total execution time: 0.0480
DEBUG - 2013-09-20 01:33:28 --> Config Class Initialized
DEBUG - 2013-09-20 01:33:28 --> Hooks Class Initialized
DEBUG - 2013-09-20 01:33:28 --> Utf8 Class Initialized
DEBUG - 2013-09-20 01:33:28 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 01:33:28 --> URI Class Initialized
DEBUG - 2013-09-20 01:33:28 --> Router Class Initialized
ERROR - 2013-09-20 01:33:28 --> 404 Page Not Found --> css
DEBUG - 2013-09-20 01:33:34 --> Config Class Initialized
DEBUG - 2013-09-20 01:33:34 --> Hooks Class Initialized
DEBUG - 2013-09-20 01:33:34 --> Utf8 Class Initialized
DEBUG - 2013-09-20 01:33:34 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 01:33:34 --> URI Class Initialized
DEBUG - 2013-09-20 01:33:34 --> Router Class Initialized
DEBUG - 2013-09-20 01:33:34 --> Output Class Initialized
DEBUG - 2013-09-20 01:33:34 --> Security Class Initialized
DEBUG - 2013-09-20 01:33:34 --> Input Class Initialized
DEBUG - 2013-09-20 01:33:34 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 01:33:34 --> Language Class Initialized
DEBUG - 2013-09-20 01:33:34 --> Loader Class Initialized
DEBUG - 2013-09-20 01:33:34 --> Helper loaded: form_helper
DEBUG - 2013-09-20 01:33:34 --> Helper loaded: url_helper
DEBUG - 2013-09-20 01:33:34 --> Helper loaded: html_helper
DEBUG - 2013-09-20 01:33:34 --> Database Driver Class Initialized
DEBUG - 2013-09-20 01:33:34 --> Session Class Initialized
DEBUG - 2013-09-20 01:33:34 --> Helper loaded: string_helper
DEBUG - 2013-09-20 01:33:34 --> Session routines successfully run
DEBUG - 2013-09-20 01:33:34 --> Form Validation Class Initialized
DEBUG - 2013-09-20 01:33:34 --> Controller Class Initialized
DEBUG - 2013-09-20 01:33:34 --> Model Class Initialized
DEBUG - 2013-09-20 01:33:34 --> Model Class Initialized
DEBUG - 2013-09-20 01:33:34 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 01:33:34 --> after session initialization................
INFO  - 2013-09-20 01:33:34 --> last news id is 1
INFO  - 2013-09-20 01:33:34 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 01:33:34 --> last news id is 7
INFO  - 2013-09-20 01:33:34 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 01:33:34 --> Final output sent to browser
DEBUG - 2013-09-20 01:33:34 --> Total execution time: 0.0480
DEBUG - 2013-09-20 01:33:35 --> Config Class Initialized
DEBUG - 2013-09-20 01:33:35 --> Hooks Class Initialized
DEBUG - 2013-09-20 01:33:35 --> Utf8 Class Initialized
DEBUG - 2013-09-20 01:33:35 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 01:33:35 --> URI Class Initialized
DEBUG - 2013-09-20 01:33:35 --> Router Class Initialized
DEBUG - 2013-09-20 01:33:35 --> Output Class Initialized
DEBUG - 2013-09-20 01:33:35 --> Security Class Initialized
DEBUG - 2013-09-20 01:33:35 --> Input Class Initialized
DEBUG - 2013-09-20 01:33:35 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 01:33:35 --> Language Class Initialized
DEBUG - 2013-09-20 01:33:35 --> Loader Class Initialized
DEBUG - 2013-09-20 01:33:35 --> Helper loaded: form_helper
DEBUG - 2013-09-20 01:33:35 --> Helper loaded: url_helper
DEBUG - 2013-09-20 01:33:35 --> Helper loaded: html_helper
DEBUG - 2013-09-20 01:33:35 --> Database Driver Class Initialized
DEBUG - 2013-09-20 01:33:35 --> Session Class Initialized
DEBUG - 2013-09-20 01:33:35 --> Helper loaded: string_helper
DEBUG - 2013-09-20 01:33:35 --> Session routines successfully run
DEBUG - 2013-09-20 01:33:35 --> Form Validation Class Initialized
DEBUG - 2013-09-20 01:33:35 --> Controller Class Initialized
DEBUG - 2013-09-20 01:33:35 --> Model Class Initialized
DEBUG - 2013-09-20 01:33:35 --> Model Class Initialized
DEBUG - 2013-09-20 01:33:35 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 01:33:35 --> after session initialization................
INFO  - 2013-09-20 01:33:35 --> last news id is 1
INFO  - 2013-09-20 01:33:35 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 01:33:35 --> last news id is 7
INFO  - 2013-09-20 01:33:35 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 01:33:35 --> Final output sent to browser
DEBUG - 2013-09-20 01:33:35 --> Total execution time: 0.0500
DEBUG - 2013-09-20 01:33:35 --> Config Class Initialized
DEBUG - 2013-09-20 01:33:35 --> Hooks Class Initialized
DEBUG - 2013-09-20 01:33:35 --> Utf8 Class Initialized
DEBUG - 2013-09-20 01:33:35 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 01:33:35 --> URI Class Initialized
DEBUG - 2013-09-20 01:33:35 --> Router Class Initialized
DEBUG - 2013-09-20 01:33:35 --> Output Class Initialized
DEBUG - 2013-09-20 01:33:35 --> Security Class Initialized
DEBUG - 2013-09-20 01:33:35 --> Input Class Initialized
DEBUG - 2013-09-20 01:33:35 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 01:33:35 --> Language Class Initialized
DEBUG - 2013-09-20 01:33:35 --> Loader Class Initialized
DEBUG - 2013-09-20 01:33:35 --> Helper loaded: form_helper
DEBUG - 2013-09-20 01:33:35 --> Helper loaded: url_helper
DEBUG - 2013-09-20 01:33:35 --> Helper loaded: html_helper
DEBUG - 2013-09-20 01:33:35 --> Database Driver Class Initialized
DEBUG - 2013-09-20 01:33:35 --> Session Class Initialized
DEBUG - 2013-09-20 01:33:35 --> Helper loaded: string_helper
DEBUG - 2013-09-20 01:33:35 --> Session routines successfully run
DEBUG - 2013-09-20 01:33:35 --> Form Validation Class Initialized
DEBUG - 2013-09-20 01:33:35 --> Controller Class Initialized
DEBUG - 2013-09-20 01:33:35 --> Model Class Initialized
DEBUG - 2013-09-20 01:33:35 --> Model Class Initialized
DEBUG - 2013-09-20 01:33:35 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 01:33:35 --> after session initialization................
INFO  - 2013-09-20 01:33:35 --> last news id is 1
INFO  - 2013-09-20 01:33:35 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 01:33:35 --> last news id is 7
INFO  - 2013-09-20 01:33:35 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 01:33:35 --> Final output sent to browser
DEBUG - 2013-09-20 01:33:35 --> Total execution time: 0.0550
DEBUG - 2013-09-20 01:33:43 --> Config Class Initialized
DEBUG - 2013-09-20 01:33:43 --> Hooks Class Initialized
DEBUG - 2013-09-20 01:33:43 --> Utf8 Class Initialized
DEBUG - 2013-09-20 01:33:43 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 01:33:43 --> URI Class Initialized
DEBUG - 2013-09-20 01:33:43 --> Router Class Initialized
DEBUG - 2013-09-20 01:33:43 --> Output Class Initialized
DEBUG - 2013-09-20 01:33:43 --> Security Class Initialized
DEBUG - 2013-09-20 01:33:43 --> Input Class Initialized
DEBUG - 2013-09-20 01:33:43 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 01:33:43 --> Language Class Initialized
DEBUG - 2013-09-20 01:33:43 --> Loader Class Initialized
DEBUG - 2013-09-20 01:33:43 --> Helper loaded: form_helper
DEBUG - 2013-09-20 01:33:43 --> Helper loaded: url_helper
DEBUG - 2013-09-20 01:33:43 --> Helper loaded: html_helper
DEBUG - 2013-09-20 01:33:43 --> Database Driver Class Initialized
DEBUG - 2013-09-20 01:33:43 --> Session Class Initialized
DEBUG - 2013-09-20 01:33:43 --> Helper loaded: string_helper
DEBUG - 2013-09-20 01:33:43 --> Session routines successfully run
DEBUG - 2013-09-20 01:33:43 --> Form Validation Class Initialized
DEBUG - 2013-09-20 01:33:43 --> Controller Class Initialized
DEBUG - 2013-09-20 01:33:43 --> Model Class Initialized
DEBUG - 2013-09-20 01:33:43 --> Model Class Initialized
DEBUG - 2013-09-20 01:33:43 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 01:33:43 --> after session initialization................
INFO  - 2013-09-20 01:33:43 --> last news id is 1
INFO  - 2013-09-20 01:33:43 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 01:33:43 --> last news id is 1
INFO  - 2013-09-20 01:33:43 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 01:33:43 --> Final output sent to browser
DEBUG - 2013-09-20 01:33:43 --> Total execution time: 0.0460
DEBUG - 2013-09-20 01:33:44 --> Config Class Initialized
DEBUG - 2013-09-20 01:33:44 --> Hooks Class Initialized
DEBUG - 2013-09-20 01:33:44 --> Utf8 Class Initialized
DEBUG - 2013-09-20 01:33:44 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 01:33:44 --> URI Class Initialized
DEBUG - 2013-09-20 01:33:44 --> Router Class Initialized
DEBUG - 2013-09-20 01:33:44 --> Output Class Initialized
DEBUG - 2013-09-20 01:33:44 --> Security Class Initialized
DEBUG - 2013-09-20 01:33:44 --> Input Class Initialized
DEBUG - 2013-09-20 01:33:44 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 01:33:44 --> Language Class Initialized
DEBUG - 2013-09-20 01:33:44 --> Loader Class Initialized
DEBUG - 2013-09-20 01:33:44 --> Helper loaded: form_helper
DEBUG - 2013-09-20 01:33:44 --> Helper loaded: url_helper
DEBUG - 2013-09-20 01:33:44 --> Helper loaded: html_helper
DEBUG - 2013-09-20 01:33:44 --> Database Driver Class Initialized
DEBUG - 2013-09-20 01:33:44 --> Session Class Initialized
DEBUG - 2013-09-20 01:33:44 --> Helper loaded: string_helper
DEBUG - 2013-09-20 01:33:44 --> Session routines successfully run
DEBUG - 2013-09-20 01:33:44 --> Form Validation Class Initialized
DEBUG - 2013-09-20 01:33:44 --> Controller Class Initialized
DEBUG - 2013-09-20 01:33:44 --> Model Class Initialized
DEBUG - 2013-09-20 01:33:44 --> Model Class Initialized
DEBUG - 2013-09-20 01:33:44 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 01:33:44 --> after session initialization................
INFO  - 2013-09-20 01:33:44 --> last news id is 1
INFO  - 2013-09-20 01:33:44 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 01:33:44 --> last news id is 1
INFO  - 2013-09-20 01:33:44 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 01:33:44 --> Final output sent to browser
DEBUG - 2013-09-20 01:33:44 --> Total execution time: 0.0460
DEBUG - 2013-09-20 01:33:49 --> Config Class Initialized
DEBUG - 2013-09-20 01:33:49 --> Hooks Class Initialized
DEBUG - 2013-09-20 01:33:49 --> Utf8 Class Initialized
DEBUG - 2013-09-20 01:33:49 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 01:33:49 --> URI Class Initialized
DEBUG - 2013-09-20 01:33:49 --> Router Class Initialized
DEBUG - 2013-09-20 01:33:49 --> Output Class Initialized
DEBUG - 2013-09-20 01:33:49 --> Security Class Initialized
DEBUG - 2013-09-20 01:33:49 --> Input Class Initialized
DEBUG - 2013-09-20 01:33:49 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 01:33:49 --> Language Class Initialized
DEBUG - 2013-09-20 01:33:49 --> Loader Class Initialized
DEBUG - 2013-09-20 01:33:49 --> Helper loaded: form_helper
DEBUG - 2013-09-20 01:33:49 --> Helper loaded: url_helper
DEBUG - 2013-09-20 01:33:49 --> Helper loaded: html_helper
DEBUG - 2013-09-20 01:33:49 --> Database Driver Class Initialized
DEBUG - 2013-09-20 01:33:49 --> Session Class Initialized
DEBUG - 2013-09-20 01:33:49 --> Helper loaded: string_helper
DEBUG - 2013-09-20 01:33:49 --> Session routines successfully run
DEBUG - 2013-09-20 01:33:49 --> Form Validation Class Initialized
DEBUG - 2013-09-20 01:33:49 --> Controller Class Initialized
DEBUG - 2013-09-20 01:33:49 --> Model Class Initialized
DEBUG - 2013-09-20 01:33:49 --> Model Class Initialized
DEBUG - 2013-09-20 01:33:49 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 01:33:49 --> after session initialization................
INFO  - 2013-09-20 01:33:49 --> last news id is 1
INFO  - 2013-09-20 01:33:49 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 01:33:49 --> last news id is 1
INFO  - 2013-09-20 01:33:49 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 01:33:49 --> Final output sent to browser
DEBUG - 2013-09-20 01:33:49 --> Total execution time: 0.0450
DEBUG - 2013-09-20 01:33:50 --> Config Class Initialized
DEBUG - 2013-09-20 01:33:50 --> Hooks Class Initialized
DEBUG - 2013-09-20 01:33:50 --> Utf8 Class Initialized
DEBUG - 2013-09-20 01:33:50 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 01:33:50 --> URI Class Initialized
DEBUG - 2013-09-20 01:33:50 --> Router Class Initialized
DEBUG - 2013-09-20 01:33:50 --> Output Class Initialized
DEBUG - 2013-09-20 01:33:50 --> Security Class Initialized
DEBUG - 2013-09-20 01:33:50 --> Input Class Initialized
DEBUG - 2013-09-20 01:33:50 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 01:33:50 --> Language Class Initialized
DEBUG - 2013-09-20 01:33:50 --> Loader Class Initialized
DEBUG - 2013-09-20 01:33:50 --> Helper loaded: form_helper
DEBUG - 2013-09-20 01:33:50 --> Helper loaded: url_helper
DEBUG - 2013-09-20 01:33:50 --> Helper loaded: html_helper
DEBUG - 2013-09-20 01:33:50 --> Database Driver Class Initialized
DEBUG - 2013-09-20 01:33:50 --> Session Class Initialized
DEBUG - 2013-09-20 01:33:50 --> Helper loaded: string_helper
DEBUG - 2013-09-20 01:33:50 --> Session routines successfully run
DEBUG - 2013-09-20 01:33:50 --> Form Validation Class Initialized
DEBUG - 2013-09-20 01:33:50 --> Controller Class Initialized
DEBUG - 2013-09-20 01:33:50 --> Model Class Initialized
DEBUG - 2013-09-20 01:33:50 --> Model Class Initialized
DEBUG - 2013-09-20 01:33:50 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 01:33:50 --> after session initialization................
INFO  - 2013-09-20 01:33:50 --> last news id is 1
INFO  - 2013-09-20 01:33:50 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 01:33:50 --> last news id is 1
INFO  - 2013-09-20 01:33:50 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 01:33:50 --> Final output sent to browser
DEBUG - 2013-09-20 01:33:50 --> Total execution time: 0.0510
DEBUG - 2013-09-20 01:33:55 --> Config Class Initialized
DEBUG - 2013-09-20 01:33:55 --> Hooks Class Initialized
DEBUG - 2013-09-20 01:33:55 --> Utf8 Class Initialized
DEBUG - 2013-09-20 01:33:55 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 01:33:55 --> URI Class Initialized
DEBUG - 2013-09-20 01:33:55 --> Router Class Initialized
DEBUG - 2013-09-20 01:33:55 --> Output Class Initialized
DEBUG - 2013-09-20 01:33:55 --> Security Class Initialized
DEBUG - 2013-09-20 01:33:55 --> Input Class Initialized
DEBUG - 2013-09-20 01:33:55 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 01:33:55 --> Language Class Initialized
DEBUG - 2013-09-20 01:33:55 --> Loader Class Initialized
DEBUG - 2013-09-20 01:33:55 --> Helper loaded: form_helper
DEBUG - 2013-09-20 01:33:55 --> Helper loaded: url_helper
DEBUG - 2013-09-20 01:33:55 --> Helper loaded: html_helper
DEBUG - 2013-09-20 01:33:55 --> Database Driver Class Initialized
DEBUG - 2013-09-20 01:33:55 --> Session Class Initialized
DEBUG - 2013-09-20 01:33:55 --> Helper loaded: string_helper
DEBUG - 2013-09-20 01:33:55 --> Session routines successfully run
DEBUG - 2013-09-20 01:33:55 --> Form Validation Class Initialized
DEBUG - 2013-09-20 01:33:55 --> Controller Class Initialized
DEBUG - 2013-09-20 01:33:55 --> Model Class Initialized
DEBUG - 2013-09-20 01:33:55 --> Model Class Initialized
DEBUG - 2013-09-20 01:33:55 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 01:33:55 --> after session initialization................
INFO  - 2013-09-20 01:33:55 --> last news id is 1
INFO  - 2013-09-20 01:33:55 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 01:33:55 --> last news id is 1
INFO  - 2013-09-20 01:33:55 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 01:33:55 --> Final output sent to browser
DEBUG - 2013-09-20 01:33:55 --> Total execution time: 0.0470
DEBUG - 2013-09-20 01:34:00 --> Config Class Initialized
DEBUG - 2013-09-20 01:34:00 --> Hooks Class Initialized
DEBUG - 2013-09-20 01:34:00 --> Utf8 Class Initialized
DEBUG - 2013-09-20 01:34:00 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 01:34:00 --> URI Class Initialized
DEBUG - 2013-09-20 01:34:00 --> Router Class Initialized
DEBUG - 2013-09-20 01:34:00 --> Output Class Initialized
DEBUG - 2013-09-20 01:34:00 --> Security Class Initialized
DEBUG - 2013-09-20 01:34:00 --> Input Class Initialized
DEBUG - 2013-09-20 01:34:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 01:34:00 --> Language Class Initialized
DEBUG - 2013-09-20 01:34:00 --> Loader Class Initialized
DEBUG - 2013-09-20 01:34:00 --> Helper loaded: form_helper
DEBUG - 2013-09-20 01:34:00 --> Helper loaded: url_helper
DEBUG - 2013-09-20 01:34:00 --> Helper loaded: html_helper
DEBUG - 2013-09-20 01:34:00 --> Database Driver Class Initialized
DEBUG - 2013-09-20 01:34:00 --> Session Class Initialized
DEBUG - 2013-09-20 01:34:00 --> Helper loaded: string_helper
DEBUG - 2013-09-20 01:34:00 --> Session routines successfully run
DEBUG - 2013-09-20 01:34:00 --> Form Validation Class Initialized
DEBUG - 2013-09-20 01:34:00 --> Controller Class Initialized
DEBUG - 2013-09-20 01:34:00 --> Model Class Initialized
DEBUG - 2013-09-20 01:34:00 --> Model Class Initialized
DEBUG - 2013-09-20 01:34:00 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 01:34:00 --> after session initialization................
ERROR - 2013-09-20 01:34:00 --> Severity: Warning  --> Missing argument 1 for user_authorization::index() C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 69
ERROR - 2013-09-20 01:34:00 --> Severity: Notice  --> Undefined variable: message C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 71
DEBUG - 2013-09-20 01:34:01 --> Config Class Initialized
DEBUG - 2013-09-20 01:34:01 --> Hooks Class Initialized
DEBUG - 2013-09-20 01:34:01 --> Utf8 Class Initialized
DEBUG - 2013-09-20 01:34:01 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 01:34:01 --> URI Class Initialized
DEBUG - 2013-09-20 01:34:01 --> Router Class Initialized
DEBUG - 2013-09-20 01:34:01 --> No URI present. Default controller set.
DEBUG - 2013-09-20 01:34:01 --> Output Class Initialized
DEBUG - 2013-09-20 01:34:01 --> Security Class Initialized
DEBUG - 2013-09-20 01:34:01 --> Input Class Initialized
DEBUG - 2013-09-20 01:34:01 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 01:34:01 --> Language Class Initialized
DEBUG - 2013-09-20 01:34:01 --> Loader Class Initialized
DEBUG - 2013-09-20 01:34:01 --> Helper loaded: form_helper
DEBUG - 2013-09-20 01:34:01 --> Helper loaded: url_helper
DEBUG - 2013-09-20 01:34:01 --> Helper loaded: html_helper
DEBUG - 2013-09-20 01:34:01 --> Database Driver Class Initialized
DEBUG - 2013-09-20 01:34:01 --> Session Class Initialized
DEBUG - 2013-09-20 01:34:01 --> Helper loaded: string_helper
DEBUG - 2013-09-20 01:34:01 --> Session routines successfully run
DEBUG - 2013-09-20 01:34:01 --> Form Validation Class Initialized
DEBUG - 2013-09-20 01:34:01 --> Controller Class Initialized
INFO  - 2013-09-20 01:34:01 --> the form message==>
INFO  - 2013-09-20 01:34:01 --> after the retrieving session list.................//////////
DEBUG - 2013-09-20 01:34:01 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-20 01:34:01 --> Final output sent to browser
DEBUG - 2013-09-20 01:34:01 --> Total execution time: 0.0430
DEBUG - 2013-09-20 01:34:01 --> Config Class Initialized
DEBUG - 2013-09-20 01:34:01 --> Hooks Class Initialized
DEBUG - 2013-09-20 01:34:01 --> Utf8 Class Initialized
DEBUG - 2013-09-20 01:34:01 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 01:34:01 --> URI Class Initialized
DEBUG - 2013-09-20 01:34:01 --> Router Class Initialized
DEBUG - 2013-09-20 01:34:01 --> Output Class Initialized
DEBUG - 2013-09-20 01:34:01 --> Security Class Initialized
DEBUG - 2013-09-20 01:34:01 --> Input Class Initialized
DEBUG - 2013-09-20 01:34:01 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 01:34:01 --> Language Class Initialized
DEBUG - 2013-09-20 01:34:01 --> Loader Class Initialized
DEBUG - 2013-09-20 01:34:01 --> Helper loaded: form_helper
DEBUG - 2013-09-20 01:34:01 --> Helper loaded: url_helper
DEBUG - 2013-09-20 01:34:01 --> Helper loaded: html_helper
DEBUG - 2013-09-20 01:34:01 --> Database Driver Class Initialized
DEBUG - 2013-09-20 01:34:01 --> Session Class Initialized
DEBUG - 2013-09-20 01:34:01 --> Helper loaded: string_helper
DEBUG - 2013-09-20 01:34:01 --> Session routines successfully run
DEBUG - 2013-09-20 01:34:01 --> Form Validation Class Initialized
DEBUG - 2013-09-20 01:34:01 --> Controller Class Initialized
DEBUG - 2013-09-20 01:34:01 --> Model Class Initialized
DEBUG - 2013-09-20 01:34:01 --> Model Class Initialized
DEBUG - 2013-09-20 01:34:01 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 01:34:01 --> after session initialization................
INFO  - 2013-09-20 01:34:01 --> after rays has been clicked.................
INFO  - 2013-09-20 01:34:01 --> last news id is 0
INFO  - 2013-09-20 01:34:01 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 01:34:01 --> last news id is 0
INFO  - 2013-09-20 01:34:01 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 01:34:01 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 01:34:01 --> Final output sent to browser
DEBUG - 2013-09-20 01:34:01 --> Total execution time: 0.0590
DEBUG - 2013-09-20 01:34:01 --> Config Class Initialized
DEBUG - 2013-09-20 01:34:01 --> Hooks Class Initialized
DEBUG - 2013-09-20 01:34:01 --> Utf8 Class Initialized
DEBUG - 2013-09-20 01:34:01 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 01:34:01 --> URI Class Initialized
DEBUG - 2013-09-20 01:34:01 --> Router Class Initialized
ERROR - 2013-09-20 01:34:01 --> 404 Page Not Found --> css
DEBUG - 2013-09-20 01:46:49 --> Config Class Initialized
DEBUG - 2013-09-20 01:46:49 --> Hooks Class Initialized
DEBUG - 2013-09-20 01:46:49 --> Utf8 Class Initialized
DEBUG - 2013-09-20 01:46:49 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 01:46:49 --> URI Class Initialized
DEBUG - 2013-09-20 01:46:49 --> Router Class Initialized
DEBUG - 2013-09-20 01:46:49 --> Output Class Initialized
DEBUG - 2013-09-20 01:46:49 --> Security Class Initialized
DEBUG - 2013-09-20 01:46:49 --> Input Class Initialized
DEBUG - 2013-09-20 01:46:49 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 01:46:49 --> Language Class Initialized
DEBUG - 2013-09-20 01:46:49 --> Loader Class Initialized
DEBUG - 2013-09-20 01:46:49 --> Helper loaded: form_helper
DEBUG - 2013-09-20 01:46:49 --> Helper loaded: url_helper
DEBUG - 2013-09-20 01:46:49 --> Helper loaded: html_helper
DEBUG - 2013-09-20 01:46:49 --> Database Driver Class Initialized
DEBUG - 2013-09-20 01:46:49 --> Session Class Initialized
DEBUG - 2013-09-20 01:46:49 --> Helper loaded: string_helper
DEBUG - 2013-09-20 01:46:49 --> Session routines successfully run
DEBUG - 2013-09-20 01:46:49 --> Form Validation Class Initialized
DEBUG - 2013-09-20 01:46:49 --> Controller Class Initialized
DEBUG - 2013-09-20 01:46:49 --> Model Class Initialized
DEBUG - 2013-09-20 01:46:49 --> Model Class Initialized
DEBUG - 2013-09-20 01:46:49 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 01:46:49 --> after session initialization................
INFO  - 2013-09-20 01:46:49 --> after rays has been clicked.................
INFO  - 2013-09-20 01:46:49 --> last news id is 0
INFO  - 2013-09-20 01:46:49 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 01:46:49 --> last news id is 0
INFO  - 2013-09-20 01:46:49 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 01:46:49 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 01:46:49 --> Final output sent to browser
DEBUG - 2013-09-20 01:46:49 --> Total execution time: 0.0550
DEBUG - 2013-09-20 01:46:50 --> Config Class Initialized
DEBUG - 2013-09-20 01:46:50 --> Hooks Class Initialized
DEBUG - 2013-09-20 01:46:50 --> Utf8 Class Initialized
DEBUG - 2013-09-20 01:46:50 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 01:46:50 --> URI Class Initialized
DEBUG - 2013-09-20 01:46:50 --> Router Class Initialized
ERROR - 2013-09-20 01:46:50 --> 404 Page Not Found --> css
DEBUG - 2013-09-20 01:57:27 --> Config Class Initialized
DEBUG - 2013-09-20 01:57:27 --> Hooks Class Initialized
DEBUG - 2013-09-20 01:57:27 --> Utf8 Class Initialized
DEBUG - 2013-09-20 01:57:27 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 01:57:27 --> URI Class Initialized
DEBUG - 2013-09-20 01:57:27 --> Router Class Initialized
DEBUG - 2013-09-20 01:57:27 --> Output Class Initialized
DEBUG - 2013-09-20 01:57:27 --> Security Class Initialized
DEBUG - 2013-09-20 01:57:27 --> Input Class Initialized
DEBUG - 2013-09-20 01:57:27 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 01:57:27 --> Language Class Initialized
DEBUG - 2013-09-20 01:57:27 --> Loader Class Initialized
DEBUG - 2013-09-20 01:57:27 --> Helper loaded: form_helper
DEBUG - 2013-09-20 01:57:27 --> Helper loaded: url_helper
DEBUG - 2013-09-20 01:57:27 --> Helper loaded: html_helper
DEBUG - 2013-09-20 01:57:27 --> Database Driver Class Initialized
DEBUG - 2013-09-20 01:57:27 --> Session Class Initialized
DEBUG - 2013-09-20 01:57:27 --> Helper loaded: string_helper
DEBUG - 2013-09-20 01:57:27 --> Session routines successfully run
DEBUG - 2013-09-20 01:57:27 --> Form Validation Class Initialized
DEBUG - 2013-09-20 01:57:27 --> Controller Class Initialized
DEBUG - 2013-09-20 01:57:27 --> Model Class Initialized
DEBUG - 2013-09-20 01:57:27 --> Model Class Initialized
DEBUG - 2013-09-20 01:57:27 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 01:57:27 --> after session initialization................
INFO  - 2013-09-20 01:57:27 --> after rays has been clicked.................
INFO  - 2013-09-20 01:57:27 --> last news id is 0
INFO  - 2013-09-20 01:57:27 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 01:57:27 --> last news id is 0
INFO  - 2013-09-20 01:57:27 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 01:57:27 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 01:57:27 --> Final output sent to browser
DEBUG - 2013-09-20 01:57:27 --> Total execution time: 0.0580
DEBUG - 2013-09-20 01:57:27 --> Config Class Initialized
DEBUG - 2013-09-20 01:57:27 --> Hooks Class Initialized
DEBUG - 2013-09-20 01:57:27 --> Utf8 Class Initialized
DEBUG - 2013-09-20 01:57:27 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 01:57:27 --> URI Class Initialized
DEBUG - 2013-09-20 01:57:27 --> Router Class Initialized
ERROR - 2013-09-20 01:57:27 --> 404 Page Not Found --> css
DEBUG - 2013-09-20 01:59:59 --> Config Class Initialized
DEBUG - 2013-09-20 01:59:59 --> Hooks Class Initialized
DEBUG - 2013-09-20 01:59:59 --> Utf8 Class Initialized
DEBUG - 2013-09-20 01:59:59 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 01:59:59 --> URI Class Initialized
DEBUG - 2013-09-20 01:59:59 --> Router Class Initialized
DEBUG - 2013-09-20 01:59:59 --> Output Class Initialized
DEBUG - 2013-09-20 01:59:59 --> Security Class Initialized
DEBUG - 2013-09-20 01:59:59 --> Input Class Initialized
DEBUG - 2013-09-20 01:59:59 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 01:59:59 --> Language Class Initialized
DEBUG - 2013-09-20 01:59:59 --> Loader Class Initialized
DEBUG - 2013-09-20 01:59:59 --> Helper loaded: form_helper
DEBUG - 2013-09-20 01:59:59 --> Helper loaded: url_helper
DEBUG - 2013-09-20 01:59:59 --> Helper loaded: html_helper
DEBUG - 2013-09-20 02:00:00 --> Database Driver Class Initialized
DEBUG - 2013-09-20 02:00:00 --> Session Class Initialized
DEBUG - 2013-09-20 02:00:00 --> Helper loaded: string_helper
DEBUG - 2013-09-20 02:00:00 --> Session routines successfully run
DEBUG - 2013-09-20 02:00:00 --> Form Validation Class Initialized
DEBUG - 2013-09-20 02:00:00 --> Controller Class Initialized
DEBUG - 2013-09-20 02:00:00 --> Model Class Initialized
DEBUG - 2013-09-20 02:00:00 --> Model Class Initialized
DEBUG - 2013-09-20 02:00:00 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 02:00:00 --> after session initialization................
INFO  - 2013-09-20 02:00:00 --> after rays has been clicked.................
INFO  - 2013-09-20 02:00:00 --> last news id is 0
INFO  - 2013-09-20 02:00:00 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 02:00:00 --> last news id is 0
INFO  - 2013-09-20 02:00:00 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 02:00:00 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 02:00:00 --> Final output sent to browser
DEBUG - 2013-09-20 02:00:00 --> Total execution time: 0.0670
DEBUG - 2013-09-20 02:00:00 --> Config Class Initialized
DEBUG - 2013-09-20 02:00:00 --> Hooks Class Initialized
DEBUG - 2013-09-20 02:00:00 --> Utf8 Class Initialized
DEBUG - 2013-09-20 02:00:00 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 02:00:00 --> URI Class Initialized
DEBUG - 2013-09-20 02:00:00 --> Router Class Initialized
ERROR - 2013-09-20 02:00:00 --> 404 Page Not Found --> css
DEBUG - 2013-09-20 02:00:38 --> Config Class Initialized
DEBUG - 2013-09-20 02:00:38 --> Hooks Class Initialized
DEBUG - 2013-09-20 02:00:38 --> Utf8 Class Initialized
DEBUG - 2013-09-20 02:00:38 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 02:00:38 --> URI Class Initialized
DEBUG - 2013-09-20 02:00:38 --> Router Class Initialized
DEBUG - 2013-09-20 02:00:38 --> Output Class Initialized
DEBUG - 2013-09-20 02:00:38 --> Security Class Initialized
DEBUG - 2013-09-20 02:00:38 --> Input Class Initialized
DEBUG - 2013-09-20 02:00:38 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 02:00:38 --> Language Class Initialized
DEBUG - 2013-09-20 02:00:38 --> Loader Class Initialized
DEBUG - 2013-09-20 02:00:38 --> Helper loaded: form_helper
DEBUG - 2013-09-20 02:00:38 --> Helper loaded: url_helper
DEBUG - 2013-09-20 02:00:38 --> Helper loaded: html_helper
DEBUG - 2013-09-20 02:00:38 --> Database Driver Class Initialized
DEBUG - 2013-09-20 02:00:39 --> Session Class Initialized
DEBUG - 2013-09-20 02:00:39 --> Helper loaded: string_helper
DEBUG - 2013-09-20 02:00:39 --> Session routines successfully run
DEBUG - 2013-09-20 02:00:39 --> Form Validation Class Initialized
DEBUG - 2013-09-20 02:00:39 --> Controller Class Initialized
DEBUG - 2013-09-20 02:00:39 --> Model Class Initialized
DEBUG - 2013-09-20 02:00:39 --> Model Class Initialized
DEBUG - 2013-09-20 02:00:39 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 02:00:39 --> after session initialization................
INFO  - 2013-09-20 02:00:39 --> last news id is 1
INFO  - 2013-09-20 02:00:39 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 02:00:39 --> last news id is 7
INFO  - 2013-09-20 02:00:39 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 02:00:39 --> Final output sent to browser
DEBUG - 2013-09-20 02:00:39 --> Total execution time: 1.0531
DEBUG - 2013-09-20 02:07:12 --> Config Class Initialized
DEBUG - 2013-09-20 02:07:12 --> Hooks Class Initialized
DEBUG - 2013-09-20 02:07:12 --> Utf8 Class Initialized
DEBUG - 2013-09-20 02:07:12 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 02:07:12 --> URI Class Initialized
DEBUG - 2013-09-20 02:07:12 --> Router Class Initialized
DEBUG - 2013-09-20 02:07:12 --> Output Class Initialized
DEBUG - 2013-09-20 02:07:12 --> Security Class Initialized
DEBUG - 2013-09-20 02:07:12 --> Input Class Initialized
DEBUG - 2013-09-20 02:07:12 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 02:07:12 --> Language Class Initialized
DEBUG - 2013-09-20 02:07:12 --> Loader Class Initialized
DEBUG - 2013-09-20 02:07:12 --> Helper loaded: form_helper
DEBUG - 2013-09-20 02:07:12 --> Helper loaded: url_helper
DEBUG - 2013-09-20 02:07:12 --> Helper loaded: html_helper
DEBUG - 2013-09-20 02:07:12 --> Database Driver Class Initialized
DEBUG - 2013-09-20 02:07:12 --> Session Class Initialized
DEBUG - 2013-09-20 02:07:12 --> Helper loaded: string_helper
DEBUG - 2013-09-20 02:07:12 --> Session routines successfully run
DEBUG - 2013-09-20 02:07:12 --> Form Validation Class Initialized
DEBUG - 2013-09-20 02:07:12 --> Controller Class Initialized
DEBUG - 2013-09-20 02:07:12 --> Model Class Initialized
DEBUG - 2013-09-20 02:07:12 --> Model Class Initialized
DEBUG - 2013-09-20 02:07:12 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 02:07:12 --> after session initialization................
INFO  - 2013-09-20 02:07:12 --> after rays has been clicked.................
INFO  - 2013-09-20 02:07:12 --> last news id is 0
INFO  - 2013-09-20 02:07:12 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 02:07:12 --> last news id is 0
INFO  - 2013-09-20 02:07:12 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 02:07:12 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 02:07:12 --> Final output sent to browser
DEBUG - 2013-09-20 02:07:12 --> Total execution time: 0.0610
DEBUG - 2013-09-20 02:07:13 --> Config Class Initialized
DEBUG - 2013-09-20 02:07:13 --> Hooks Class Initialized
DEBUG - 2013-09-20 02:07:13 --> Utf8 Class Initialized
DEBUG - 2013-09-20 02:07:13 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 02:07:13 --> URI Class Initialized
DEBUG - 2013-09-20 02:07:13 --> Router Class Initialized
ERROR - 2013-09-20 02:07:13 --> 404 Page Not Found --> css
DEBUG - 2013-09-20 02:07:36 --> Config Class Initialized
DEBUG - 2013-09-20 02:07:36 --> Hooks Class Initialized
DEBUG - 2013-09-20 02:07:36 --> Utf8 Class Initialized
DEBUG - 2013-09-20 02:07:36 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 02:07:36 --> URI Class Initialized
DEBUG - 2013-09-20 02:07:36 --> Router Class Initialized
DEBUG - 2013-09-20 02:07:36 --> Output Class Initialized
DEBUG - 2013-09-20 02:07:36 --> Security Class Initialized
DEBUG - 2013-09-20 02:07:36 --> Input Class Initialized
DEBUG - 2013-09-20 02:07:36 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 02:07:36 --> Language Class Initialized
DEBUG - 2013-09-20 02:07:36 --> Loader Class Initialized
DEBUG - 2013-09-20 02:07:36 --> Helper loaded: form_helper
DEBUG - 2013-09-20 02:07:36 --> Helper loaded: url_helper
DEBUG - 2013-09-20 02:07:36 --> Helper loaded: html_helper
DEBUG - 2013-09-20 02:07:36 --> Database Driver Class Initialized
DEBUG - 2013-09-20 02:07:36 --> Session Class Initialized
DEBUG - 2013-09-20 02:07:36 --> Helper loaded: string_helper
DEBUG - 2013-09-20 02:07:36 --> Session routines successfully run
DEBUG - 2013-09-20 02:07:36 --> Form Validation Class Initialized
DEBUG - 2013-09-20 02:07:36 --> Controller Class Initialized
DEBUG - 2013-09-20 02:07:36 --> Model Class Initialized
DEBUG - 2013-09-20 02:07:36 --> Model Class Initialized
DEBUG - 2013-09-20 02:07:36 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 02:07:36 --> after session initialization................
INFO  - 2013-09-20 02:07:36 --> last news id is 1
INFO  - 2013-09-20 02:07:36 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 02:07:36 --> last news id is 7
INFO  - 2013-09-20 02:07:36 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 02:07:36 --> Final output sent to browser
DEBUG - 2013-09-20 02:07:36 --> Total execution time: 0.0540
DEBUG - 2013-09-20 02:07:43 --> Config Class Initialized
DEBUG - 2013-09-20 02:07:43 --> Hooks Class Initialized
DEBUG - 2013-09-20 02:07:43 --> Utf8 Class Initialized
DEBUG - 2013-09-20 02:07:43 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 02:07:43 --> URI Class Initialized
DEBUG - 2013-09-20 02:07:43 --> Router Class Initialized
DEBUG - 2013-09-20 02:07:43 --> Output Class Initialized
DEBUG - 2013-09-20 02:07:43 --> Security Class Initialized
DEBUG - 2013-09-20 02:07:43 --> Input Class Initialized
DEBUG - 2013-09-20 02:07:43 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 02:07:43 --> Language Class Initialized
DEBUG - 2013-09-20 02:07:43 --> Loader Class Initialized
DEBUG - 2013-09-20 02:07:43 --> Helper loaded: form_helper
DEBUG - 2013-09-20 02:07:43 --> Helper loaded: url_helper
DEBUG - 2013-09-20 02:07:43 --> Helper loaded: html_helper
DEBUG - 2013-09-20 02:07:43 --> Database Driver Class Initialized
DEBUG - 2013-09-20 02:07:43 --> Session Class Initialized
DEBUG - 2013-09-20 02:07:43 --> Helper loaded: string_helper
DEBUG - 2013-09-20 02:07:43 --> Session routines successfully run
DEBUG - 2013-09-20 02:07:43 --> Form Validation Class Initialized
DEBUG - 2013-09-20 02:07:43 --> Controller Class Initialized
DEBUG - 2013-09-20 02:07:43 --> Model Class Initialized
DEBUG - 2013-09-20 02:07:43 --> Model Class Initialized
DEBUG - 2013-09-20 02:07:43 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 02:07:43 --> after session initialization................
INFO  - 2013-09-20 02:07:43 --> last news id is 1
INFO  - 2013-09-20 02:07:43 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 02:07:43 --> last news id is 1
INFO  - 2013-09-20 02:07:43 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 02:07:43 --> Final output sent to browser
DEBUG - 2013-09-20 02:07:43 --> Total execution time: 0.0490
DEBUG - 2013-09-20 02:07:43 --> Config Class Initialized
DEBUG - 2013-09-20 02:07:43 --> Hooks Class Initialized
DEBUG - 2013-09-20 02:07:43 --> Utf8 Class Initialized
DEBUG - 2013-09-20 02:07:43 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 02:07:43 --> URI Class Initialized
DEBUG - 2013-09-20 02:07:43 --> Router Class Initialized
DEBUG - 2013-09-20 02:07:43 --> Output Class Initialized
DEBUG - 2013-09-20 02:07:43 --> Security Class Initialized
DEBUG - 2013-09-20 02:07:43 --> Input Class Initialized
DEBUG - 2013-09-20 02:07:43 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 02:07:43 --> Language Class Initialized
DEBUG - 2013-09-20 02:07:43 --> Loader Class Initialized
DEBUG - 2013-09-20 02:07:43 --> Helper loaded: form_helper
DEBUG - 2013-09-20 02:07:43 --> Helper loaded: url_helper
DEBUG - 2013-09-20 02:07:43 --> Helper loaded: html_helper
DEBUG - 2013-09-20 02:07:43 --> Database Driver Class Initialized
DEBUG - 2013-09-20 02:07:43 --> Session Class Initialized
DEBUG - 2013-09-20 02:07:43 --> Helper loaded: string_helper
DEBUG - 2013-09-20 02:07:43 --> Session routines successfully run
DEBUG - 2013-09-20 02:07:43 --> Form Validation Class Initialized
DEBUG - 2013-09-20 02:07:43 --> Controller Class Initialized
DEBUG - 2013-09-20 02:07:43 --> Model Class Initialized
DEBUG - 2013-09-20 02:07:43 --> Model Class Initialized
DEBUG - 2013-09-20 02:07:43 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 02:07:43 --> after session initialization................
INFO  - 2013-09-20 02:07:43 --> last news id is 1
INFO  - 2013-09-20 02:07:43 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 02:07:43 --> last news id is 1
INFO  - 2013-09-20 02:07:43 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 02:07:43 --> Final output sent to browser
DEBUG - 2013-09-20 02:07:43 --> Total execution time: 0.0470
DEBUG - 2013-09-20 02:07:46 --> Config Class Initialized
DEBUG - 2013-09-20 02:07:46 --> Hooks Class Initialized
DEBUG - 2013-09-20 02:07:46 --> Utf8 Class Initialized
DEBUG - 2013-09-20 02:07:46 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 02:07:46 --> URI Class Initialized
DEBUG - 2013-09-20 02:07:46 --> Router Class Initialized
DEBUG - 2013-09-20 02:07:46 --> Output Class Initialized
DEBUG - 2013-09-20 02:07:46 --> Security Class Initialized
DEBUG - 2013-09-20 02:07:46 --> Input Class Initialized
DEBUG - 2013-09-20 02:07:46 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 02:07:46 --> Language Class Initialized
DEBUG - 2013-09-20 02:07:46 --> Loader Class Initialized
DEBUG - 2013-09-20 02:07:46 --> Helper loaded: form_helper
DEBUG - 2013-09-20 02:07:46 --> Helper loaded: url_helper
DEBUG - 2013-09-20 02:07:46 --> Helper loaded: html_helper
DEBUG - 2013-09-20 02:07:46 --> Database Driver Class Initialized
DEBUG - 2013-09-20 02:07:46 --> Session Class Initialized
DEBUG - 2013-09-20 02:07:46 --> Helper loaded: string_helper
DEBUG - 2013-09-20 02:07:46 --> Session routines successfully run
DEBUG - 2013-09-20 02:07:46 --> Form Validation Class Initialized
DEBUG - 2013-09-20 02:07:46 --> Controller Class Initialized
DEBUG - 2013-09-20 02:07:46 --> Model Class Initialized
DEBUG - 2013-09-20 02:07:46 --> Model Class Initialized
DEBUG - 2013-09-20 02:07:46 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 02:07:46 --> after session initialization................
INFO  - 2013-09-20 02:07:46 --> last news id is 1
INFO  - 2013-09-20 02:07:46 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 02:07:46 --> last news id is 1
INFO  - 2013-09-20 02:07:46 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 02:07:46 --> Final output sent to browser
DEBUG - 2013-09-20 02:07:46 --> Total execution time: 0.0570
DEBUG - 2013-09-20 02:20:23 --> Config Class Initialized
DEBUG - 2013-09-20 02:20:23 --> Hooks Class Initialized
DEBUG - 2013-09-20 02:20:23 --> Utf8 Class Initialized
DEBUG - 2013-09-20 02:20:23 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 02:20:23 --> URI Class Initialized
DEBUG - 2013-09-20 02:20:23 --> Router Class Initialized
DEBUG - 2013-09-20 02:20:23 --> Output Class Initialized
DEBUG - 2013-09-20 02:20:23 --> Security Class Initialized
DEBUG - 2013-09-20 02:20:23 --> Input Class Initialized
DEBUG - 2013-09-20 02:20:23 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 02:20:23 --> Language Class Initialized
DEBUG - 2013-09-20 02:20:23 --> Loader Class Initialized
DEBUG - 2013-09-20 02:20:23 --> Helper loaded: form_helper
DEBUG - 2013-09-20 02:20:23 --> Helper loaded: url_helper
DEBUG - 2013-09-20 02:20:23 --> Helper loaded: html_helper
DEBUG - 2013-09-20 02:20:23 --> Database Driver Class Initialized
DEBUG - 2013-09-20 02:20:23 --> Session Class Initialized
DEBUG - 2013-09-20 02:20:23 --> Helper loaded: string_helper
DEBUG - 2013-09-20 02:20:23 --> Session routines successfully run
DEBUG - 2013-09-20 02:20:23 --> Form Validation Class Initialized
DEBUG - 2013-09-20 02:20:23 --> Controller Class Initialized
DEBUG - 2013-09-20 02:20:23 --> Model Class Initialized
DEBUG - 2013-09-20 02:20:23 --> Model Class Initialized
DEBUG - 2013-09-20 02:20:23 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 02:20:23 --> after session initialization................
ERROR - 2013-09-20 02:20:23 --> Severity: Warning  --> Missing argument 1 for user_authorization::index() C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 69
ERROR - 2013-09-20 02:20:23 --> Severity: Notice  --> Undefined variable: message C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 71
DEBUG - 2013-09-20 02:20:23 --> Config Class Initialized
DEBUG - 2013-09-20 02:20:23 --> Hooks Class Initialized
DEBUG - 2013-09-20 02:20:23 --> Utf8 Class Initialized
DEBUG - 2013-09-20 02:20:23 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 02:20:23 --> URI Class Initialized
DEBUG - 2013-09-20 02:20:23 --> Router Class Initialized
DEBUG - 2013-09-20 02:20:23 --> No URI present. Default controller set.
DEBUG - 2013-09-20 02:20:23 --> Output Class Initialized
DEBUG - 2013-09-20 02:20:23 --> Security Class Initialized
DEBUG - 2013-09-20 02:20:23 --> Input Class Initialized
DEBUG - 2013-09-20 02:20:23 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 02:20:23 --> Language Class Initialized
DEBUG - 2013-09-20 02:20:23 --> Loader Class Initialized
DEBUG - 2013-09-20 02:20:23 --> Helper loaded: form_helper
DEBUG - 2013-09-20 02:20:23 --> Helper loaded: url_helper
DEBUG - 2013-09-20 02:20:23 --> Helper loaded: html_helper
DEBUG - 2013-09-20 02:20:23 --> Database Driver Class Initialized
DEBUG - 2013-09-20 02:20:23 --> Session Class Initialized
DEBUG - 2013-09-20 02:20:23 --> Helper loaded: string_helper
DEBUG - 2013-09-20 02:20:23 --> Session routines successfully run
DEBUG - 2013-09-20 02:20:23 --> Form Validation Class Initialized
DEBUG - 2013-09-20 02:20:23 --> Controller Class Initialized
INFO  - 2013-09-20 02:20:23 --> the form message==>
INFO  - 2013-09-20 02:20:23 --> after the retrieving session list.................//////////
DEBUG - 2013-09-20 02:20:23 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-20 02:20:23 --> Final output sent to browser
DEBUG - 2013-09-20 02:20:23 --> Total execution time: 0.0460
DEBUG - 2013-09-20 02:20:24 --> Config Class Initialized
DEBUG - 2013-09-20 02:20:24 --> Hooks Class Initialized
DEBUG - 2013-09-20 02:20:24 --> Utf8 Class Initialized
DEBUG - 2013-09-20 02:20:24 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 02:20:24 --> URI Class Initialized
DEBUG - 2013-09-20 02:20:24 --> Router Class Initialized
DEBUG - 2013-09-20 02:20:24 --> Output Class Initialized
DEBUG - 2013-09-20 02:20:24 --> Security Class Initialized
DEBUG - 2013-09-20 02:20:24 --> Input Class Initialized
DEBUG - 2013-09-20 02:20:24 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 02:20:24 --> Language Class Initialized
DEBUG - 2013-09-20 02:20:24 --> Loader Class Initialized
DEBUG - 2013-09-20 02:20:24 --> Helper loaded: form_helper
DEBUG - 2013-09-20 02:20:24 --> Helper loaded: url_helper
DEBUG - 2013-09-20 02:20:24 --> Helper loaded: html_helper
DEBUG - 2013-09-20 02:20:24 --> Database Driver Class Initialized
DEBUG - 2013-09-20 02:20:24 --> Session Class Initialized
DEBUG - 2013-09-20 02:20:24 --> Helper loaded: string_helper
DEBUG - 2013-09-20 02:20:24 --> Session routines successfully run
DEBUG - 2013-09-20 02:20:24 --> Form Validation Class Initialized
DEBUG - 2013-09-20 02:20:24 --> Controller Class Initialized
DEBUG - 2013-09-20 02:20:24 --> Model Class Initialized
DEBUG - 2013-09-20 02:20:24 --> Model Class Initialized
DEBUG - 2013-09-20 02:20:24 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 02:20:24 --> after session initialization................
INFO  - 2013-09-20 02:20:24 --> after rays has been clicked.................
INFO  - 2013-09-20 02:20:24 --> last news id is 0
INFO  - 2013-09-20 02:20:24 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 02:20:24 --> last news id is 0
INFO  - 2013-09-20 02:20:24 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 02:20:24 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 02:20:24 --> Final output sent to browser
DEBUG - 2013-09-20 02:20:24 --> Total execution time: 0.0530
DEBUG - 2013-09-20 02:20:24 --> Config Class Initialized
DEBUG - 2013-09-20 02:20:24 --> Hooks Class Initialized
DEBUG - 2013-09-20 02:20:24 --> Utf8 Class Initialized
DEBUG - 2013-09-20 02:20:24 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 02:20:24 --> URI Class Initialized
DEBUG - 2013-09-20 02:20:24 --> Router Class Initialized
ERROR - 2013-09-20 02:20:24 --> 404 Page Not Found --> css
DEBUG - 2013-09-20 02:21:06 --> Config Class Initialized
DEBUG - 2013-09-20 02:21:06 --> Hooks Class Initialized
DEBUG - 2013-09-20 02:21:06 --> Utf8 Class Initialized
DEBUG - 2013-09-20 02:21:06 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 02:21:06 --> URI Class Initialized
DEBUG - 2013-09-20 02:21:06 --> Router Class Initialized
DEBUG - 2013-09-20 02:21:06 --> Output Class Initialized
DEBUG - 2013-09-20 02:21:06 --> Security Class Initialized
DEBUG - 2013-09-20 02:21:06 --> Input Class Initialized
DEBUG - 2013-09-20 02:21:06 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 02:21:06 --> Language Class Initialized
DEBUG - 2013-09-20 02:21:06 --> Loader Class Initialized
DEBUG - 2013-09-20 02:21:06 --> Helper loaded: form_helper
DEBUG - 2013-09-20 02:21:06 --> Helper loaded: url_helper
DEBUG - 2013-09-20 02:21:06 --> Helper loaded: html_helper
DEBUG - 2013-09-20 02:21:06 --> Database Driver Class Initialized
DEBUG - 2013-09-20 02:21:06 --> Session Class Initialized
DEBUG - 2013-09-20 02:21:06 --> Helper loaded: string_helper
DEBUG - 2013-09-20 02:21:06 --> Session routines successfully run
DEBUG - 2013-09-20 02:21:06 --> Form Validation Class Initialized
DEBUG - 2013-09-20 02:21:06 --> Controller Class Initialized
DEBUG - 2013-09-20 02:21:06 --> Model Class Initialized
DEBUG - 2013-09-20 02:21:06 --> Model Class Initialized
DEBUG - 2013-09-20 02:21:06 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 02:21:06 --> after session initialization................
INFO  - 2013-09-20 02:21:06 --> after rays has been clicked.................
INFO  - 2013-09-20 02:21:06 --> last news id is 0
INFO  - 2013-09-20 02:21:06 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 02:21:06 --> last news id is 0
INFO  - 2013-09-20 02:21:06 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 02:21:06 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 02:21:06 --> Final output sent to browser
DEBUG - 2013-09-20 02:21:06 --> Total execution time: 0.0660
DEBUG - 2013-09-20 02:21:06 --> Config Class Initialized
DEBUG - 2013-09-20 02:21:06 --> Hooks Class Initialized
DEBUG - 2013-09-20 02:21:06 --> Utf8 Class Initialized
DEBUG - 2013-09-20 02:21:06 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 02:21:06 --> URI Class Initialized
DEBUG - 2013-09-20 02:21:06 --> Router Class Initialized
ERROR - 2013-09-20 02:21:06 --> 404 Page Not Found --> css
DEBUG - 2013-09-20 02:21:10 --> Config Class Initialized
DEBUG - 2013-09-20 02:21:10 --> Hooks Class Initialized
DEBUG - 2013-09-20 02:21:10 --> Utf8 Class Initialized
DEBUG - 2013-09-20 02:21:10 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 02:21:10 --> URI Class Initialized
DEBUG - 2013-09-20 02:21:10 --> Router Class Initialized
DEBUG - 2013-09-20 02:21:10 --> Output Class Initialized
DEBUG - 2013-09-20 02:21:10 --> Security Class Initialized
DEBUG - 2013-09-20 02:21:10 --> Input Class Initialized
DEBUG - 2013-09-20 02:21:10 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 02:21:10 --> Language Class Initialized
DEBUG - 2013-09-20 02:21:10 --> Loader Class Initialized
DEBUG - 2013-09-20 02:21:10 --> Helper loaded: form_helper
DEBUG - 2013-09-20 02:21:10 --> Helper loaded: url_helper
DEBUG - 2013-09-20 02:21:10 --> Helper loaded: html_helper
DEBUG - 2013-09-20 02:21:11 --> Database Driver Class Initialized
DEBUG - 2013-09-20 02:21:12 --> Session Class Initialized
DEBUG - 2013-09-20 02:21:12 --> Helper loaded: string_helper
DEBUG - 2013-09-20 02:21:12 --> Session routines successfully run
DEBUG - 2013-09-20 02:21:12 --> Form Validation Class Initialized
DEBUG - 2013-09-20 02:21:12 --> Controller Class Initialized
DEBUG - 2013-09-20 02:21:12 --> Model Class Initialized
DEBUG - 2013-09-20 02:21:12 --> Model Class Initialized
DEBUG - 2013-09-20 02:21:12 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 02:21:12 --> after session initialization................
INFO  - 2013-09-20 02:21:12 --> after rays has been clicked.................
INFO  - 2013-09-20 02:21:12 --> last news id is 0
INFO  - 2013-09-20 02:21:12 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 02:21:12 --> last news id is 0
INFO  - 2013-09-20 02:21:12 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 02:21:12 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 02:21:12 --> Final output sent to browser
DEBUG - 2013-09-20 02:21:12 --> Total execution time: 1.0591
DEBUG - 2013-09-20 02:21:12 --> Config Class Initialized
DEBUG - 2013-09-20 02:21:12 --> Hooks Class Initialized
DEBUG - 2013-09-20 02:21:12 --> Utf8 Class Initialized
DEBUG - 2013-09-20 02:21:12 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 02:21:12 --> URI Class Initialized
DEBUG - 2013-09-20 02:21:12 --> Router Class Initialized
ERROR - 2013-09-20 02:21:12 --> 404 Page Not Found --> css
DEBUG - 2013-09-20 02:21:14 --> Config Class Initialized
DEBUG - 2013-09-20 02:21:14 --> Hooks Class Initialized
DEBUG - 2013-09-20 02:21:14 --> Utf8 Class Initialized
DEBUG - 2013-09-20 02:21:14 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 02:21:14 --> URI Class Initialized
DEBUG - 2013-09-20 02:21:14 --> Router Class Initialized
DEBUG - 2013-09-20 02:21:14 --> Output Class Initialized
DEBUG - 2013-09-20 02:21:14 --> Security Class Initialized
DEBUG - 2013-09-20 02:21:14 --> Input Class Initialized
DEBUG - 2013-09-20 02:21:15 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 02:21:15 --> Language Class Initialized
DEBUG - 2013-09-20 02:21:15 --> Loader Class Initialized
DEBUG - 2013-09-20 02:21:15 --> Helper loaded: form_helper
DEBUG - 2013-09-20 02:21:15 --> Helper loaded: url_helper
DEBUG - 2013-09-20 02:21:15 --> Helper loaded: html_helper
DEBUG - 2013-09-20 02:21:15 --> Database Driver Class Initialized
DEBUG - 2013-09-20 02:21:15 --> Session Class Initialized
DEBUG - 2013-09-20 02:21:15 --> Helper loaded: string_helper
DEBUG - 2013-09-20 02:21:15 --> Session routines successfully run
DEBUG - 2013-09-20 02:21:15 --> Form Validation Class Initialized
DEBUG - 2013-09-20 02:21:15 --> Controller Class Initialized
DEBUG - 2013-09-20 02:21:15 --> Model Class Initialized
DEBUG - 2013-09-20 02:21:15 --> Model Class Initialized
DEBUG - 2013-09-20 02:21:15 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 02:21:15 --> after session initialization................
ERROR - 2013-09-20 02:21:15 --> Severity: Warning  --> Missing argument 1 for user_authorization::index() C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 69
ERROR - 2013-09-20 02:21:15 --> Severity: Notice  --> Undefined variable: message C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 71
DEBUG - 2013-09-20 02:21:15 --> Config Class Initialized
DEBUG - 2013-09-20 02:21:15 --> Hooks Class Initialized
DEBUG - 2013-09-20 02:21:15 --> Utf8 Class Initialized
DEBUG - 2013-09-20 02:21:15 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 02:21:15 --> URI Class Initialized
DEBUG - 2013-09-20 02:21:15 --> Router Class Initialized
DEBUG - 2013-09-20 02:21:15 --> No URI present. Default controller set.
DEBUG - 2013-09-20 02:21:15 --> Output Class Initialized
DEBUG - 2013-09-20 02:21:15 --> Security Class Initialized
DEBUG - 2013-09-20 02:21:15 --> Input Class Initialized
DEBUG - 2013-09-20 02:21:15 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 02:21:15 --> Language Class Initialized
DEBUG - 2013-09-20 02:21:15 --> Loader Class Initialized
DEBUG - 2013-09-20 02:21:15 --> Helper loaded: form_helper
DEBUG - 2013-09-20 02:21:15 --> Helper loaded: url_helper
DEBUG - 2013-09-20 02:21:15 --> Helper loaded: html_helper
DEBUG - 2013-09-20 02:21:15 --> Database Driver Class Initialized
DEBUG - 2013-09-20 02:21:15 --> Session Class Initialized
DEBUG - 2013-09-20 02:21:15 --> Helper loaded: string_helper
DEBUG - 2013-09-20 02:21:15 --> Session routines successfully run
DEBUG - 2013-09-20 02:21:15 --> Form Validation Class Initialized
DEBUG - 2013-09-20 02:21:15 --> Controller Class Initialized
INFO  - 2013-09-20 02:21:15 --> the form message==>
INFO  - 2013-09-20 02:21:15 --> after the retrieving session list.................//////////
DEBUG - 2013-09-20 02:21:15 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-20 02:21:15 --> Final output sent to browser
DEBUG - 2013-09-20 02:21:15 --> Total execution time: 0.0420
DEBUG - 2013-09-20 02:21:16 --> Config Class Initialized
DEBUG - 2013-09-20 02:21:16 --> Hooks Class Initialized
DEBUG - 2013-09-20 02:21:16 --> Utf8 Class Initialized
DEBUG - 2013-09-20 02:21:16 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 02:21:16 --> URI Class Initialized
DEBUG - 2013-09-20 02:21:16 --> Router Class Initialized
DEBUG - 2013-09-20 02:21:16 --> Output Class Initialized
DEBUG - 2013-09-20 02:21:16 --> Security Class Initialized
DEBUG - 2013-09-20 02:21:16 --> Input Class Initialized
DEBUG - 2013-09-20 02:21:16 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 02:21:16 --> Language Class Initialized
DEBUG - 2013-09-20 02:21:16 --> Loader Class Initialized
DEBUG - 2013-09-20 02:21:16 --> Helper loaded: form_helper
DEBUG - 2013-09-20 02:21:16 --> Helper loaded: url_helper
DEBUG - 2013-09-20 02:21:16 --> Helper loaded: html_helper
DEBUG - 2013-09-20 02:21:16 --> Database Driver Class Initialized
DEBUG - 2013-09-20 02:21:16 --> Session Class Initialized
DEBUG - 2013-09-20 02:21:16 --> Helper loaded: string_helper
DEBUG - 2013-09-20 02:21:16 --> Session routines successfully run
DEBUG - 2013-09-20 02:21:16 --> Form Validation Class Initialized
DEBUG - 2013-09-20 02:21:16 --> Controller Class Initialized
DEBUG - 2013-09-20 02:21:16 --> Model Class Initialized
DEBUG - 2013-09-20 02:21:16 --> Model Class Initialized
DEBUG - 2013-09-20 02:21:16 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 02:21:16 --> after session initialization................
INFO  - 2013-09-20 02:21:16 --> after rays has been clicked.................
INFO  - 2013-09-20 02:21:16 --> last news id is 0
INFO  - 2013-09-20 02:21:16 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 02:21:16 --> last news id is 0
INFO  - 2013-09-20 02:21:16 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 02:21:16 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 02:21:16 --> Final output sent to browser
DEBUG - 2013-09-20 02:21:16 --> Total execution time: 0.0560
DEBUG - 2013-09-20 02:21:16 --> Config Class Initialized
DEBUG - 2013-09-20 02:21:16 --> Hooks Class Initialized
DEBUG - 2013-09-20 02:21:16 --> Utf8 Class Initialized
DEBUG - 2013-09-20 02:21:16 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 02:21:16 --> URI Class Initialized
DEBUG - 2013-09-20 02:21:16 --> Router Class Initialized
ERROR - 2013-09-20 02:21:16 --> 404 Page Not Found --> css
DEBUG - 2013-09-20 02:21:30 --> Config Class Initialized
DEBUG - 2013-09-20 02:21:30 --> Hooks Class Initialized
DEBUG - 2013-09-20 02:21:30 --> Utf8 Class Initialized
DEBUG - 2013-09-20 02:21:30 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 02:21:30 --> URI Class Initialized
DEBUG - 2013-09-20 02:21:30 --> Router Class Initialized
DEBUG - 2013-09-20 02:21:30 --> Output Class Initialized
DEBUG - 2013-09-20 02:21:30 --> Security Class Initialized
DEBUG - 2013-09-20 02:21:30 --> Input Class Initialized
DEBUG - 2013-09-20 02:21:30 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 02:21:30 --> Language Class Initialized
DEBUG - 2013-09-20 02:21:30 --> Loader Class Initialized
DEBUG - 2013-09-20 02:21:30 --> Helper loaded: form_helper
DEBUG - 2013-09-20 02:21:30 --> Helper loaded: url_helper
DEBUG - 2013-09-20 02:21:30 --> Helper loaded: html_helper
DEBUG - 2013-09-20 02:21:30 --> Database Driver Class Initialized
DEBUG - 2013-09-20 02:21:30 --> Session Class Initialized
DEBUG - 2013-09-20 02:21:30 --> Helper loaded: string_helper
DEBUG - 2013-09-20 02:21:30 --> Session routines successfully run
DEBUG - 2013-09-20 02:21:30 --> Form Validation Class Initialized
DEBUG - 2013-09-20 02:21:30 --> Controller Class Initialized
DEBUG - 2013-09-20 02:21:30 --> Model Class Initialized
DEBUG - 2013-09-20 02:21:30 --> Model Class Initialized
DEBUG - 2013-09-20 02:21:30 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 02:21:30 --> after session initialization................
ERROR - 2013-09-20 02:21:30 --> Severity: Warning  --> Missing argument 1 for user_authorization::index() C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 69
ERROR - 2013-09-20 02:21:30 --> Severity: Notice  --> Undefined variable: message C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 71
DEBUG - 2013-09-20 02:21:30 --> Config Class Initialized
DEBUG - 2013-09-20 02:21:30 --> Hooks Class Initialized
DEBUG - 2013-09-20 02:21:30 --> Utf8 Class Initialized
DEBUG - 2013-09-20 02:21:30 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 02:21:30 --> URI Class Initialized
DEBUG - 2013-09-20 02:21:30 --> Router Class Initialized
DEBUG - 2013-09-20 02:21:30 --> No URI present. Default controller set.
DEBUG - 2013-09-20 02:21:30 --> Output Class Initialized
DEBUG - 2013-09-20 02:21:30 --> Security Class Initialized
DEBUG - 2013-09-20 02:21:30 --> Input Class Initialized
DEBUG - 2013-09-20 02:21:30 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 02:21:30 --> Language Class Initialized
DEBUG - 2013-09-20 02:21:30 --> Loader Class Initialized
DEBUG - 2013-09-20 02:21:30 --> Helper loaded: form_helper
DEBUG - 2013-09-20 02:21:30 --> Helper loaded: url_helper
DEBUG - 2013-09-20 02:21:30 --> Helper loaded: html_helper
DEBUG - 2013-09-20 02:21:30 --> Database Driver Class Initialized
DEBUG - 2013-09-20 02:21:30 --> Session Class Initialized
DEBUG - 2013-09-20 02:21:30 --> Helper loaded: string_helper
DEBUG - 2013-09-20 02:21:30 --> Session routines successfully run
DEBUG - 2013-09-20 02:21:30 --> Form Validation Class Initialized
DEBUG - 2013-09-20 02:21:30 --> Controller Class Initialized
INFO  - 2013-09-20 02:21:30 --> the form message==>
INFO  - 2013-09-20 02:21:30 --> after the retrieving session list.................//////////
DEBUG - 2013-09-20 02:21:30 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-20 02:21:30 --> Final output sent to browser
DEBUG - 2013-09-20 02:21:30 --> Total execution time: 0.0470
DEBUG - 2013-09-20 02:21:31 --> Config Class Initialized
DEBUG - 2013-09-20 02:21:31 --> Hooks Class Initialized
DEBUG - 2013-09-20 02:21:31 --> Utf8 Class Initialized
DEBUG - 2013-09-20 02:21:31 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 02:21:31 --> URI Class Initialized
DEBUG - 2013-09-20 02:21:31 --> Router Class Initialized
DEBUG - 2013-09-20 02:21:31 --> Output Class Initialized
DEBUG - 2013-09-20 02:21:31 --> Security Class Initialized
DEBUG - 2013-09-20 02:21:31 --> Input Class Initialized
DEBUG - 2013-09-20 02:21:31 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 02:21:31 --> Language Class Initialized
DEBUG - 2013-09-20 02:21:31 --> Loader Class Initialized
DEBUG - 2013-09-20 02:21:31 --> Helper loaded: form_helper
DEBUG - 2013-09-20 02:21:31 --> Helper loaded: url_helper
DEBUG - 2013-09-20 02:21:31 --> Helper loaded: html_helper
DEBUG - 2013-09-20 02:21:31 --> Database Driver Class Initialized
DEBUG - 2013-09-20 02:21:31 --> Session Class Initialized
DEBUG - 2013-09-20 02:21:31 --> Helper loaded: string_helper
DEBUG - 2013-09-20 02:21:31 --> Session routines successfully run
DEBUG - 2013-09-20 02:21:31 --> Form Validation Class Initialized
DEBUG - 2013-09-20 02:21:31 --> Controller Class Initialized
DEBUG - 2013-09-20 02:21:31 --> Model Class Initialized
DEBUG - 2013-09-20 02:21:31 --> Model Class Initialized
DEBUG - 2013-09-20 02:21:31 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 02:21:31 --> after session initialization................
INFO  - 2013-09-20 02:21:31 --> after rays has been clicked.................
INFO  - 2013-09-20 02:21:31 --> last news id is 0
INFO  - 2013-09-20 02:21:31 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 02:21:31 --> last news id is 0
INFO  - 2013-09-20 02:21:31 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 02:21:31 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 02:21:31 --> Final output sent to browser
DEBUG - 2013-09-20 02:21:31 --> Total execution time: 0.0550
DEBUG - 2013-09-20 02:21:31 --> Config Class Initialized
DEBUG - 2013-09-20 02:21:31 --> Hooks Class Initialized
DEBUG - 2013-09-20 02:21:31 --> Utf8 Class Initialized
DEBUG - 2013-09-20 02:21:31 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 02:21:31 --> URI Class Initialized
DEBUG - 2013-09-20 02:21:31 --> Router Class Initialized
ERROR - 2013-09-20 02:21:31 --> 404 Page Not Found --> css
DEBUG - 2013-09-20 02:21:34 --> Config Class Initialized
DEBUG - 2013-09-20 02:21:34 --> Hooks Class Initialized
DEBUG - 2013-09-20 02:21:34 --> Utf8 Class Initialized
DEBUG - 2013-09-20 02:21:34 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 02:21:34 --> URI Class Initialized
DEBUG - 2013-09-20 02:21:34 --> Router Class Initialized
DEBUG - 2013-09-20 02:21:34 --> Output Class Initialized
DEBUG - 2013-09-20 02:21:34 --> Security Class Initialized
DEBUG - 2013-09-20 02:21:34 --> Input Class Initialized
DEBUG - 2013-09-20 02:21:34 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 02:21:34 --> Language Class Initialized
DEBUG - 2013-09-20 02:21:34 --> Loader Class Initialized
DEBUG - 2013-09-20 02:21:34 --> Helper loaded: form_helper
DEBUG - 2013-09-20 02:21:34 --> Helper loaded: url_helper
DEBUG - 2013-09-20 02:21:34 --> Helper loaded: html_helper
DEBUG - 2013-09-20 02:21:34 --> Database Driver Class Initialized
DEBUG - 2013-09-20 02:21:34 --> Session Class Initialized
DEBUG - 2013-09-20 02:21:34 --> Helper loaded: string_helper
DEBUG - 2013-09-20 02:21:34 --> Session routines successfully run
DEBUG - 2013-09-20 02:21:34 --> Form Validation Class Initialized
DEBUG - 2013-09-20 02:21:34 --> Controller Class Initialized
DEBUG - 2013-09-20 02:21:34 --> Model Class Initialized
DEBUG - 2013-09-20 02:21:34 --> Model Class Initialized
DEBUG - 2013-09-20 02:21:34 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 02:21:34 --> after session initialization................
INFO  - 2013-09-20 02:21:34 --> last news id is 1
INFO  - 2013-09-20 02:21:34 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 02:21:34 --> last news id is 7
INFO  - 2013-09-20 02:21:34 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 02:21:34 --> Final output sent to browser
DEBUG - 2013-09-20 02:21:34 --> Total execution time: 0.0510
DEBUG - 2013-09-20 02:21:34 --> Config Class Initialized
DEBUG - 2013-09-20 02:21:34 --> Hooks Class Initialized
DEBUG - 2013-09-20 02:21:34 --> Utf8 Class Initialized
DEBUG - 2013-09-20 02:21:34 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 02:21:34 --> URI Class Initialized
DEBUG - 2013-09-20 02:21:34 --> Router Class Initialized
DEBUG - 2013-09-20 02:21:34 --> Output Class Initialized
DEBUG - 2013-09-20 02:21:35 --> Security Class Initialized
DEBUG - 2013-09-20 02:21:35 --> Input Class Initialized
DEBUG - 2013-09-20 02:21:35 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 02:21:35 --> Language Class Initialized
DEBUG - 2013-09-20 02:21:35 --> Loader Class Initialized
DEBUG - 2013-09-20 02:21:35 --> Helper loaded: form_helper
DEBUG - 2013-09-20 02:21:35 --> Helper loaded: url_helper
DEBUG - 2013-09-20 02:21:35 --> Helper loaded: html_helper
DEBUG - 2013-09-20 02:21:35 --> Database Driver Class Initialized
DEBUG - 2013-09-20 02:21:35 --> Session Class Initialized
DEBUG - 2013-09-20 02:21:35 --> Helper loaded: string_helper
DEBUG - 2013-09-20 02:21:35 --> Session routines successfully run
DEBUG - 2013-09-20 02:21:35 --> Form Validation Class Initialized
DEBUG - 2013-09-20 02:21:35 --> Controller Class Initialized
DEBUG - 2013-09-20 02:21:35 --> Model Class Initialized
DEBUG - 2013-09-20 02:21:35 --> Model Class Initialized
DEBUG - 2013-09-20 02:21:35 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 02:21:35 --> after session initialization................
INFO  - 2013-09-20 02:21:35 --> last news id is 1
INFO  - 2013-09-20 02:21:35 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 02:21:35 --> last news id is 7
INFO  - 2013-09-20 02:21:35 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 02:21:35 --> Final output sent to browser
DEBUG - 2013-09-20 02:21:35 --> Total execution time: 0.0500
DEBUG - 2013-09-20 02:21:38 --> Config Class Initialized
DEBUG - 2013-09-20 02:21:38 --> Hooks Class Initialized
DEBUG - 2013-09-20 02:21:38 --> Utf8 Class Initialized
DEBUG - 2013-09-20 02:21:38 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 02:21:38 --> URI Class Initialized
DEBUG - 2013-09-20 02:21:38 --> Router Class Initialized
DEBUG - 2013-09-20 02:21:38 --> Output Class Initialized
DEBUG - 2013-09-20 02:21:38 --> Security Class Initialized
DEBUG - 2013-09-20 02:21:38 --> Input Class Initialized
DEBUG - 2013-09-20 02:21:38 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 02:21:38 --> Language Class Initialized
DEBUG - 2013-09-20 02:21:38 --> Loader Class Initialized
DEBUG - 2013-09-20 02:21:38 --> Helper loaded: form_helper
DEBUG - 2013-09-20 02:21:38 --> Helper loaded: url_helper
DEBUG - 2013-09-20 02:21:38 --> Helper loaded: html_helper
DEBUG - 2013-09-20 02:21:38 --> Database Driver Class Initialized
DEBUG - 2013-09-20 02:21:38 --> Session Class Initialized
DEBUG - 2013-09-20 02:21:38 --> Helper loaded: string_helper
DEBUG - 2013-09-20 02:21:38 --> Session routines successfully run
DEBUG - 2013-09-20 02:21:38 --> Form Validation Class Initialized
DEBUG - 2013-09-20 02:21:38 --> Controller Class Initialized
DEBUG - 2013-09-20 02:21:38 --> Model Class Initialized
DEBUG - 2013-09-20 02:21:38 --> Model Class Initialized
DEBUG - 2013-09-20 02:21:38 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 02:21:38 --> after session initialization................
INFO  - 2013-09-20 02:21:38 --> last news id is 1
INFO  - 2013-09-20 02:21:38 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 02:21:38 --> last news id is 1
INFO  - 2013-09-20 02:21:38 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 02:21:38 --> Final output sent to browser
DEBUG - 2013-09-20 02:21:38 --> Total execution time: 0.0470
DEBUG - 2013-09-20 02:21:41 --> Config Class Initialized
DEBUG - 2013-09-20 02:21:41 --> Hooks Class Initialized
DEBUG - 2013-09-20 02:21:41 --> Utf8 Class Initialized
DEBUG - 2013-09-20 02:21:41 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 02:21:41 --> URI Class Initialized
DEBUG - 2013-09-20 02:21:41 --> Router Class Initialized
DEBUG - 2013-09-20 02:21:41 --> Output Class Initialized
DEBUG - 2013-09-20 02:21:41 --> Security Class Initialized
DEBUG - 2013-09-20 02:21:41 --> Input Class Initialized
DEBUG - 2013-09-20 02:21:41 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 02:21:41 --> Language Class Initialized
DEBUG - 2013-09-20 02:21:41 --> Loader Class Initialized
DEBUG - 2013-09-20 02:21:41 --> Helper loaded: form_helper
DEBUG - 2013-09-20 02:21:41 --> Helper loaded: url_helper
DEBUG - 2013-09-20 02:21:41 --> Helper loaded: html_helper
DEBUG - 2013-09-20 02:21:41 --> Database Driver Class Initialized
DEBUG - 2013-09-20 02:21:41 --> Session Class Initialized
DEBUG - 2013-09-20 02:21:41 --> Helper loaded: string_helper
DEBUG - 2013-09-20 02:21:41 --> Session routines successfully run
DEBUG - 2013-09-20 02:21:41 --> Form Validation Class Initialized
DEBUG - 2013-09-20 02:21:41 --> Controller Class Initialized
DEBUG - 2013-09-20 02:21:41 --> Model Class Initialized
DEBUG - 2013-09-20 02:21:41 --> Model Class Initialized
DEBUG - 2013-09-20 02:21:41 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 02:21:41 --> after session initialization................
INFO  - 2013-09-20 02:21:41 --> last news id is 1
INFO  - 2013-09-20 02:21:41 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 02:21:41 --> last news id is 1
INFO  - 2013-09-20 02:21:41 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 02:21:41 --> Final output sent to browser
DEBUG - 2013-09-20 02:21:41 --> Total execution time: 0.0510
DEBUG - 2013-09-20 02:21:42 --> Config Class Initialized
DEBUG - 2013-09-20 02:21:42 --> Hooks Class Initialized
DEBUG - 2013-09-20 02:21:42 --> Utf8 Class Initialized
DEBUG - 2013-09-20 02:21:42 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 02:21:42 --> URI Class Initialized
DEBUG - 2013-09-20 02:21:42 --> Router Class Initialized
DEBUG - 2013-09-20 02:21:42 --> Output Class Initialized
DEBUG - 2013-09-20 02:21:42 --> Security Class Initialized
DEBUG - 2013-09-20 02:21:42 --> Input Class Initialized
DEBUG - 2013-09-20 02:21:42 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 02:21:42 --> Language Class Initialized
DEBUG - 2013-09-20 02:21:42 --> Loader Class Initialized
DEBUG - 2013-09-20 02:21:42 --> Helper loaded: form_helper
DEBUG - 2013-09-20 02:21:42 --> Helper loaded: url_helper
DEBUG - 2013-09-20 02:21:42 --> Helper loaded: html_helper
DEBUG - 2013-09-20 02:21:42 --> Database Driver Class Initialized
DEBUG - 2013-09-20 02:21:42 --> Session Class Initialized
DEBUG - 2013-09-20 02:21:42 --> Helper loaded: string_helper
DEBUG - 2013-09-20 02:21:42 --> Session routines successfully run
DEBUG - 2013-09-20 02:21:42 --> Form Validation Class Initialized
DEBUG - 2013-09-20 02:21:42 --> Controller Class Initialized
DEBUG - 2013-09-20 02:21:42 --> Model Class Initialized
DEBUG - 2013-09-20 02:21:42 --> Model Class Initialized
DEBUG - 2013-09-20 02:21:42 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 02:21:42 --> after session initialization................
INFO  - 2013-09-20 02:21:42 --> last news id is 1
INFO  - 2013-09-20 02:21:42 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 02:21:42 --> last news id is 1
INFO  - 2013-09-20 02:21:42 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 02:21:42 --> Final output sent to browser
DEBUG - 2013-09-20 02:21:42 --> Total execution time: 0.0450
DEBUG - 2013-09-20 11:45:07 --> Config Class Initialized
DEBUG - 2013-09-20 11:45:07 --> Hooks Class Initialized
DEBUG - 2013-09-20 11:45:07 --> Utf8 Class Initialized
DEBUG - 2013-09-20 11:45:07 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 11:45:07 --> URI Class Initialized
DEBUG - 2013-09-20 11:45:07 --> Router Class Initialized
DEBUG - 2013-09-20 11:45:07 --> No URI present. Default controller set.
DEBUG - 2013-09-20 11:45:07 --> Output Class Initialized
DEBUG - 2013-09-20 11:45:07 --> Security Class Initialized
DEBUG - 2013-09-20 11:45:07 --> Input Class Initialized
DEBUG - 2013-09-20 11:45:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 11:45:07 --> Language Class Initialized
DEBUG - 2013-09-20 11:45:07 --> Loader Class Initialized
DEBUG - 2013-09-20 11:45:07 --> Helper loaded: form_helper
DEBUG - 2013-09-20 11:45:07 --> Helper loaded: url_helper
DEBUG - 2013-09-20 11:45:07 --> Helper loaded: html_helper
DEBUG - 2013-09-20 11:45:07 --> Database Driver Class Initialized
DEBUG - 2013-09-20 11:45:08 --> Session Class Initialized
DEBUG - 2013-09-20 11:45:08 --> Helper loaded: string_helper
DEBUG - 2013-09-20 11:45:08 --> A session cookie was not found.
DEBUG - 2013-09-20 11:45:08 --> Session routines successfully run
DEBUG - 2013-09-20 11:45:08 --> Form Validation Class Initialized
DEBUG - 2013-09-20 11:45:08 --> Controller Class Initialized
INFO  - 2013-09-20 11:45:09 --> the form message==>
INFO  - 2013-09-20 11:45:09 --> after the retrieving session list.................//////////
DEBUG - 2013-09-20 11:45:09 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-20 11:45:09 --> Final output sent to browser
DEBUG - 2013-09-20 11:45:09 --> Total execution time: 1.1531
DEBUG - 2013-09-20 11:45:10 --> Config Class Initialized
DEBUG - 2013-09-20 11:45:10 --> Hooks Class Initialized
DEBUG - 2013-09-20 11:45:10 --> Utf8 Class Initialized
DEBUG - 2013-09-20 11:45:10 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 11:45:10 --> URI Class Initialized
DEBUG - 2013-09-20 11:45:10 --> Router Class Initialized
DEBUG - 2013-09-20 11:45:10 --> Output Class Initialized
DEBUG - 2013-09-20 11:45:10 --> Security Class Initialized
DEBUG - 2013-09-20 11:45:10 --> Input Class Initialized
DEBUG - 2013-09-20 11:45:10 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 11:45:10 --> Language Class Initialized
DEBUG - 2013-09-20 11:45:10 --> Loader Class Initialized
DEBUG - 2013-09-20 11:45:10 --> Helper loaded: form_helper
DEBUG - 2013-09-20 11:45:10 --> Helper loaded: url_helper
DEBUG - 2013-09-20 11:45:11 --> Helper loaded: html_helper
DEBUG - 2013-09-20 11:45:11 --> Database Driver Class Initialized
DEBUG - 2013-09-20 11:45:11 --> Session Class Initialized
DEBUG - 2013-09-20 11:45:11 --> Helper loaded: string_helper
DEBUG - 2013-09-20 11:45:11 --> Session routines successfully run
DEBUG - 2013-09-20 11:45:11 --> Form Validation Class Initialized
DEBUG - 2013-09-20 11:45:11 --> Controller Class Initialized
DEBUG - 2013-09-20 11:45:11 --> Model Class Initialized
DEBUG - 2013-09-20 11:45:11 --> Model Class Initialized
DEBUG - 2013-09-20 11:45:11 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 11:45:11 --> after session initialization................
INFO  - 2013-09-20 11:45:11 --> after rays has been clicked.................
INFO  - 2013-09-20 11:45:11 --> last news id is 0
INFO  - 2013-09-20 11:45:11 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 11:45:11 --> last news id is 0
INFO  - 2013-09-20 11:45:11 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 11:45:11 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 11:45:11 --> Final output sent to browser
DEBUG - 2013-09-20 11:45:11 --> Total execution time: 0.2010
DEBUG - 2013-09-20 11:45:11 --> Config Class Initialized
DEBUG - 2013-09-20 11:45:11 --> Hooks Class Initialized
DEBUG - 2013-09-20 11:45:11 --> Utf8 Class Initialized
DEBUG - 2013-09-20 11:45:11 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 11:45:11 --> URI Class Initialized
DEBUG - 2013-09-20 11:45:11 --> Router Class Initialized
ERROR - 2013-09-20 11:45:11 --> 404 Page Not Found --> css
DEBUG - 2013-09-20 12:15:05 --> Config Class Initialized
DEBUG - 2013-09-20 12:15:05 --> Hooks Class Initialized
DEBUG - 2013-09-20 12:15:05 --> Utf8 Class Initialized
DEBUG - 2013-09-20 12:15:05 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 12:15:05 --> URI Class Initialized
DEBUG - 2013-09-20 12:15:05 --> Router Class Initialized
DEBUG - 2013-09-20 12:15:05 --> Output Class Initialized
DEBUG - 2013-09-20 12:15:05 --> Security Class Initialized
DEBUG - 2013-09-20 12:15:05 --> Input Class Initialized
DEBUG - 2013-09-20 12:15:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 12:15:05 --> Language Class Initialized
DEBUG - 2013-09-20 12:15:05 --> Loader Class Initialized
DEBUG - 2013-09-20 12:15:05 --> Helper loaded: form_helper
DEBUG - 2013-09-20 12:15:05 --> Helper loaded: url_helper
DEBUG - 2013-09-20 12:15:05 --> Helper loaded: html_helper
DEBUG - 2013-09-20 12:15:05 --> Database Driver Class Initialized
DEBUG - 2013-09-20 12:15:06 --> Session Class Initialized
DEBUG - 2013-09-20 12:15:06 --> Helper loaded: string_helper
DEBUG - 2013-09-20 12:15:06 --> Session routines successfully run
DEBUG - 2013-09-20 12:15:06 --> Form Validation Class Initialized
DEBUG - 2013-09-20 12:15:06 --> Controller Class Initialized
DEBUG - 2013-09-20 12:15:06 --> Model Class Initialized
DEBUG - 2013-09-20 12:15:06 --> Model Class Initialized
DEBUG - 2013-09-20 12:15:06 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 12:15:06 --> after session initialization................
INFO  - 2013-09-20 12:15:06 --> last news id is 1
INFO  - 2013-09-20 12:15:06 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 12:15:06 --> last news id is 7
INFO  - 2013-09-20 12:15:06 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 12:15:06 --> Final output sent to browser
DEBUG - 2013-09-20 12:15:06 --> Total execution time: 1.0531
DEBUG - 2013-09-20 12:20:32 --> Config Class Initialized
DEBUG - 2013-09-20 12:20:32 --> Hooks Class Initialized
DEBUG - 2013-09-20 12:20:32 --> Utf8 Class Initialized
DEBUG - 2013-09-20 12:20:32 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 12:20:32 --> URI Class Initialized
DEBUG - 2013-09-20 12:20:32 --> Router Class Initialized
DEBUG - 2013-09-20 12:20:32 --> Output Class Initialized
DEBUG - 2013-09-20 12:20:32 --> Security Class Initialized
DEBUG - 2013-09-20 12:20:32 --> Input Class Initialized
DEBUG - 2013-09-20 12:20:32 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 12:20:32 --> Language Class Initialized
DEBUG - 2013-09-20 12:20:32 --> Loader Class Initialized
DEBUG - 2013-09-20 12:20:32 --> Helper loaded: form_helper
DEBUG - 2013-09-20 12:20:32 --> Helper loaded: url_helper
DEBUG - 2013-09-20 12:20:32 --> Helper loaded: html_helper
DEBUG - 2013-09-20 12:20:32 --> Database Driver Class Initialized
DEBUG - 2013-09-20 12:20:32 --> Session Class Initialized
DEBUG - 2013-09-20 12:20:32 --> Helper loaded: string_helper
DEBUG - 2013-09-20 12:20:32 --> Session routines successfully run
DEBUG - 2013-09-20 12:20:32 --> Form Validation Class Initialized
DEBUG - 2013-09-20 12:20:32 --> Controller Class Initialized
DEBUG - 2013-09-20 12:20:32 --> Model Class Initialized
DEBUG - 2013-09-20 12:20:32 --> Model Class Initialized
DEBUG - 2013-09-20 12:20:32 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 12:20:32 --> after session initialization................
INFO  - 2013-09-20 12:20:32 --> after rays has been clicked.................
INFO  - 2013-09-20 12:20:32 --> last news id is 0
INFO  - 2013-09-20 12:20:32 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 12:20:32 --> last news id is 0
INFO  - 2013-09-20 12:20:32 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 12:20:32 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 12:20:32 --> Final output sent to browser
DEBUG - 2013-09-20 12:20:32 --> Total execution time: 0.0610
DEBUG - 2013-09-20 12:20:33 --> Config Class Initialized
DEBUG - 2013-09-20 12:20:33 --> Hooks Class Initialized
DEBUG - 2013-09-20 12:20:33 --> Utf8 Class Initialized
DEBUG - 2013-09-20 12:20:33 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 12:20:33 --> URI Class Initialized
DEBUG - 2013-09-20 12:20:33 --> Router Class Initialized
ERROR - 2013-09-20 12:20:33 --> 404 Page Not Found --> css
DEBUG - 2013-09-20 12:23:16 --> Config Class Initialized
DEBUG - 2013-09-20 12:23:16 --> Hooks Class Initialized
DEBUG - 2013-09-20 12:23:16 --> Utf8 Class Initialized
DEBUG - 2013-09-20 12:23:16 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 12:23:16 --> URI Class Initialized
DEBUG - 2013-09-20 12:23:16 --> Router Class Initialized
DEBUG - 2013-09-20 12:23:16 --> Output Class Initialized
DEBUG - 2013-09-20 12:23:16 --> Security Class Initialized
DEBUG - 2013-09-20 12:23:16 --> Input Class Initialized
DEBUG - 2013-09-20 12:23:16 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 12:23:16 --> Language Class Initialized
DEBUG - 2013-09-20 12:23:16 --> Loader Class Initialized
DEBUG - 2013-09-20 12:23:16 --> Helper loaded: form_helper
DEBUG - 2013-09-20 12:23:16 --> Helper loaded: url_helper
DEBUG - 2013-09-20 12:23:16 --> Helper loaded: html_helper
DEBUG - 2013-09-20 12:23:16 --> Database Driver Class Initialized
DEBUG - 2013-09-20 12:23:17 --> Session Class Initialized
DEBUG - 2013-09-20 12:23:17 --> Helper loaded: string_helper
DEBUG - 2013-09-20 12:23:17 --> Session routines successfully run
DEBUG - 2013-09-20 12:23:17 --> Form Validation Class Initialized
DEBUG - 2013-09-20 12:23:17 --> Controller Class Initialized
DEBUG - 2013-09-20 12:23:17 --> Model Class Initialized
DEBUG - 2013-09-20 12:23:17 --> Model Class Initialized
DEBUG - 2013-09-20 12:23:17 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 12:23:17 --> after session initialization................
ERROR - 2013-09-20 12:23:17 --> Severity: Warning  --> Missing argument 1 for user_authorization::index() C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 69
ERROR - 2013-09-20 12:23:17 --> Severity: Notice  --> Undefined variable: message C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 71
DEBUG - 2013-09-20 12:23:17 --> Config Class Initialized
DEBUG - 2013-09-20 12:23:17 --> Hooks Class Initialized
DEBUG - 2013-09-20 12:23:17 --> Utf8 Class Initialized
DEBUG - 2013-09-20 12:23:17 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 12:23:17 --> URI Class Initialized
DEBUG - 2013-09-20 12:23:17 --> Router Class Initialized
DEBUG - 2013-09-20 12:23:17 --> No URI present. Default controller set.
DEBUG - 2013-09-20 12:23:17 --> Output Class Initialized
DEBUG - 2013-09-20 12:23:17 --> Security Class Initialized
DEBUG - 2013-09-20 12:23:17 --> Input Class Initialized
DEBUG - 2013-09-20 12:23:17 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 12:23:17 --> Language Class Initialized
DEBUG - 2013-09-20 12:23:17 --> Loader Class Initialized
DEBUG - 2013-09-20 12:23:17 --> Helper loaded: form_helper
DEBUG - 2013-09-20 12:23:17 --> Helper loaded: url_helper
DEBUG - 2013-09-20 12:23:17 --> Helper loaded: html_helper
DEBUG - 2013-09-20 12:23:17 --> Database Driver Class Initialized
DEBUG - 2013-09-20 12:23:17 --> Session Class Initialized
DEBUG - 2013-09-20 12:23:17 --> Helper loaded: string_helper
DEBUG - 2013-09-20 12:23:17 --> Session routines successfully run
DEBUG - 2013-09-20 12:23:17 --> Form Validation Class Initialized
DEBUG - 2013-09-20 12:23:17 --> Controller Class Initialized
INFO  - 2013-09-20 12:23:17 --> the form message==>
INFO  - 2013-09-20 12:23:17 --> after the retrieving session list.................//////////
DEBUG - 2013-09-20 12:23:17 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-20 12:23:17 --> Final output sent to browser
DEBUG - 2013-09-20 12:23:17 --> Total execution time: 0.0480
DEBUG - 2013-09-20 12:23:18 --> Config Class Initialized
DEBUG - 2013-09-20 12:23:18 --> Hooks Class Initialized
DEBUG - 2013-09-20 12:23:18 --> Utf8 Class Initialized
DEBUG - 2013-09-20 12:23:18 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 12:23:18 --> URI Class Initialized
DEBUG - 2013-09-20 12:23:18 --> Router Class Initialized
DEBUG - 2013-09-20 12:23:18 --> Output Class Initialized
DEBUG - 2013-09-20 12:23:18 --> Security Class Initialized
DEBUG - 2013-09-20 12:23:18 --> Input Class Initialized
DEBUG - 2013-09-20 12:23:18 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 12:23:18 --> Language Class Initialized
DEBUG - 2013-09-20 12:23:18 --> Loader Class Initialized
DEBUG - 2013-09-20 12:23:18 --> Helper loaded: form_helper
DEBUG - 2013-09-20 12:23:18 --> Helper loaded: url_helper
DEBUG - 2013-09-20 12:23:18 --> Helper loaded: html_helper
DEBUG - 2013-09-20 12:23:18 --> Database Driver Class Initialized
DEBUG - 2013-09-20 12:23:18 --> Session Class Initialized
DEBUG - 2013-09-20 12:23:18 --> Helper loaded: string_helper
DEBUG - 2013-09-20 12:23:18 --> Session routines successfully run
DEBUG - 2013-09-20 12:23:18 --> Form Validation Class Initialized
DEBUG - 2013-09-20 12:23:18 --> Controller Class Initialized
DEBUG - 2013-09-20 12:23:18 --> Model Class Initialized
DEBUG - 2013-09-20 12:23:18 --> Model Class Initialized
DEBUG - 2013-09-20 12:23:18 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 12:23:18 --> after session initialization................
INFO  - 2013-09-20 12:23:18 --> after rays has been clicked.................
INFO  - 2013-09-20 12:23:18 --> last news id is 0
INFO  - 2013-09-20 12:23:18 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 12:23:18 --> last news id is 0
INFO  - 2013-09-20 12:23:18 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 12:23:18 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 12:23:18 --> Final output sent to browser
DEBUG - 2013-09-20 12:23:18 --> Total execution time: 0.0740
DEBUG - 2013-09-20 12:23:18 --> Config Class Initialized
DEBUG - 2013-09-20 12:23:18 --> Hooks Class Initialized
DEBUG - 2013-09-20 12:23:18 --> Utf8 Class Initialized
DEBUG - 2013-09-20 12:23:18 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 12:23:18 --> URI Class Initialized
DEBUG - 2013-09-20 12:23:18 --> Router Class Initialized
ERROR - 2013-09-20 12:23:18 --> 404 Page Not Found --> css
DEBUG - 2013-09-20 12:24:55 --> Config Class Initialized
DEBUG - 2013-09-20 12:24:55 --> Hooks Class Initialized
DEBUG - 2013-09-20 12:24:55 --> Utf8 Class Initialized
DEBUG - 2013-09-20 12:24:55 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 12:24:55 --> URI Class Initialized
DEBUG - 2013-09-20 12:24:55 --> Router Class Initialized
DEBUG - 2013-09-20 12:24:55 --> Output Class Initialized
DEBUG - 2013-09-20 12:24:55 --> Security Class Initialized
DEBUG - 2013-09-20 12:24:55 --> Input Class Initialized
DEBUG - 2013-09-20 12:24:55 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 12:24:55 --> Language Class Initialized
DEBUG - 2013-09-20 12:24:55 --> Loader Class Initialized
DEBUG - 2013-09-20 12:24:55 --> Helper loaded: form_helper
DEBUG - 2013-09-20 12:24:55 --> Helper loaded: url_helper
DEBUG - 2013-09-20 12:24:55 --> Helper loaded: html_helper
DEBUG - 2013-09-20 12:24:55 --> Database Driver Class Initialized
DEBUG - 2013-09-20 12:24:55 --> Session Class Initialized
DEBUG - 2013-09-20 12:24:55 --> Helper loaded: string_helper
DEBUG - 2013-09-20 12:24:55 --> Session routines successfully run
DEBUG - 2013-09-20 12:24:55 --> Form Validation Class Initialized
DEBUG - 2013-09-20 12:24:55 --> Controller Class Initialized
DEBUG - 2013-09-20 12:24:55 --> Model Class Initialized
DEBUG - 2013-09-20 12:24:55 --> Model Class Initialized
DEBUG - 2013-09-20 12:24:55 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 12:24:55 --> after session initialization................
ERROR - 2013-09-20 12:24:55 --> Severity: Warning  --> Missing argument 1 for user_authorization::index() C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 69
ERROR - 2013-09-20 12:24:55 --> Severity: Notice  --> Undefined variable: message C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 71
DEBUG - 2013-09-20 12:24:55 --> Config Class Initialized
DEBUG - 2013-09-20 12:24:55 --> Hooks Class Initialized
DEBUG - 2013-09-20 12:24:55 --> Utf8 Class Initialized
DEBUG - 2013-09-20 12:24:55 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 12:24:55 --> URI Class Initialized
DEBUG - 2013-09-20 12:24:55 --> Router Class Initialized
DEBUG - 2013-09-20 12:24:55 --> No URI present. Default controller set.
DEBUG - 2013-09-20 12:24:55 --> Output Class Initialized
DEBUG - 2013-09-20 12:24:55 --> Security Class Initialized
DEBUG - 2013-09-20 12:24:55 --> Input Class Initialized
DEBUG - 2013-09-20 12:24:55 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 12:24:55 --> Language Class Initialized
DEBUG - 2013-09-20 12:24:55 --> Loader Class Initialized
DEBUG - 2013-09-20 12:24:55 --> Helper loaded: form_helper
DEBUG - 2013-09-20 12:24:55 --> Helper loaded: url_helper
DEBUG - 2013-09-20 12:24:55 --> Helper loaded: html_helper
DEBUG - 2013-09-20 12:24:55 --> Database Driver Class Initialized
DEBUG - 2013-09-20 12:24:55 --> Session Class Initialized
DEBUG - 2013-09-20 12:24:55 --> Helper loaded: string_helper
DEBUG - 2013-09-20 12:24:55 --> Session routines successfully run
DEBUG - 2013-09-20 12:24:55 --> Form Validation Class Initialized
DEBUG - 2013-09-20 12:24:55 --> Controller Class Initialized
INFO  - 2013-09-20 12:24:55 --> the form message==>
INFO  - 2013-09-20 12:24:55 --> after the retrieving session list.................//////////
DEBUG - 2013-09-20 12:24:55 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-20 12:24:55 --> Final output sent to browser
DEBUG - 2013-09-20 12:24:55 --> Total execution time: 0.0520
DEBUG - 2013-09-20 12:24:56 --> Config Class Initialized
DEBUG - 2013-09-20 12:24:56 --> Hooks Class Initialized
DEBUG - 2013-09-20 12:24:56 --> Utf8 Class Initialized
DEBUG - 2013-09-20 12:24:56 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 12:24:56 --> URI Class Initialized
DEBUG - 2013-09-20 12:24:56 --> Router Class Initialized
DEBUG - 2013-09-20 12:24:56 --> Output Class Initialized
DEBUG - 2013-09-20 12:24:56 --> Security Class Initialized
DEBUG - 2013-09-20 12:24:56 --> Input Class Initialized
DEBUG - 2013-09-20 12:24:56 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 12:24:56 --> Language Class Initialized
DEBUG - 2013-09-20 12:24:56 --> Loader Class Initialized
DEBUG - 2013-09-20 12:24:56 --> Helper loaded: form_helper
DEBUG - 2013-09-20 12:24:56 --> Helper loaded: url_helper
DEBUG - 2013-09-20 12:24:56 --> Helper loaded: html_helper
DEBUG - 2013-09-20 12:24:56 --> Database Driver Class Initialized
DEBUG - 2013-09-20 12:24:56 --> Session Class Initialized
DEBUG - 2013-09-20 12:24:56 --> Helper loaded: string_helper
DEBUG - 2013-09-20 12:24:56 --> Session routines successfully run
DEBUG - 2013-09-20 12:24:56 --> Form Validation Class Initialized
DEBUG - 2013-09-20 12:24:56 --> Controller Class Initialized
DEBUG - 2013-09-20 12:24:56 --> Model Class Initialized
DEBUG - 2013-09-20 12:24:56 --> Model Class Initialized
DEBUG - 2013-09-20 12:24:56 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 12:24:56 --> after session initialization................
INFO  - 2013-09-20 12:24:56 --> after rays has been clicked.................
INFO  - 2013-09-20 12:24:56 --> last news id is 0
INFO  - 2013-09-20 12:24:56 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 12:24:56 --> last news id is 0
INFO  - 2013-09-20 12:24:56 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 12:24:56 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 12:24:56 --> Final output sent to browser
DEBUG - 2013-09-20 12:24:56 --> Total execution time: 0.0570
DEBUG - 2013-09-20 12:24:56 --> Config Class Initialized
DEBUG - 2013-09-20 12:24:56 --> Hooks Class Initialized
DEBUG - 2013-09-20 12:24:56 --> Utf8 Class Initialized
DEBUG - 2013-09-20 12:24:56 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 12:24:56 --> URI Class Initialized
DEBUG - 2013-09-20 12:24:56 --> Router Class Initialized
ERROR - 2013-09-20 12:24:56 --> 404 Page Not Found --> css
DEBUG - 2013-09-20 12:32:48 --> Config Class Initialized
DEBUG - 2013-09-20 12:32:48 --> Hooks Class Initialized
DEBUG - 2013-09-20 12:32:48 --> Utf8 Class Initialized
DEBUG - 2013-09-20 12:32:48 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 12:32:48 --> URI Class Initialized
DEBUG - 2013-09-20 12:32:48 --> Router Class Initialized
DEBUG - 2013-09-20 12:32:48 --> Output Class Initialized
DEBUG - 2013-09-20 12:32:48 --> Security Class Initialized
DEBUG - 2013-09-20 12:32:48 --> Input Class Initialized
DEBUG - 2013-09-20 12:32:48 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 12:32:48 --> Language Class Initialized
DEBUG - 2013-09-20 12:32:48 --> Loader Class Initialized
DEBUG - 2013-09-20 12:32:48 --> Helper loaded: form_helper
DEBUG - 2013-09-20 12:32:48 --> Helper loaded: url_helper
DEBUG - 2013-09-20 12:32:48 --> Helper loaded: html_helper
DEBUG - 2013-09-20 12:32:48 --> Database Driver Class Initialized
DEBUG - 2013-09-20 12:32:48 --> Session Class Initialized
DEBUG - 2013-09-20 12:32:48 --> Helper loaded: string_helper
DEBUG - 2013-09-20 12:32:48 --> Session routines successfully run
DEBUG - 2013-09-20 12:32:48 --> Form Validation Class Initialized
DEBUG - 2013-09-20 12:32:48 --> Controller Class Initialized
DEBUG - 2013-09-20 12:32:48 --> Model Class Initialized
DEBUG - 2013-09-20 12:32:48 --> Model Class Initialized
DEBUG - 2013-09-20 12:32:48 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 12:32:48 --> after session initialization................
ERROR - 2013-09-20 12:32:48 --> Severity: Warning  --> Missing argument 1 for user_authorization::index() C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 69
ERROR - 2013-09-20 12:32:48 --> Severity: Notice  --> Undefined variable: message C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 71
DEBUG - 2013-09-20 12:32:48 --> Config Class Initialized
DEBUG - 2013-09-20 12:32:48 --> Hooks Class Initialized
DEBUG - 2013-09-20 12:32:48 --> Utf8 Class Initialized
DEBUG - 2013-09-20 12:32:48 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 12:32:48 --> URI Class Initialized
DEBUG - 2013-09-20 12:32:48 --> Router Class Initialized
DEBUG - 2013-09-20 12:32:48 --> No URI present. Default controller set.
DEBUG - 2013-09-20 12:32:48 --> Output Class Initialized
DEBUG - 2013-09-20 12:32:48 --> Security Class Initialized
DEBUG - 2013-09-20 12:32:48 --> Input Class Initialized
DEBUG - 2013-09-20 12:32:48 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 12:32:48 --> Language Class Initialized
DEBUG - 2013-09-20 12:32:48 --> Loader Class Initialized
DEBUG - 2013-09-20 12:32:48 --> Helper loaded: form_helper
DEBUG - 2013-09-20 12:32:48 --> Helper loaded: url_helper
DEBUG - 2013-09-20 12:32:48 --> Helper loaded: html_helper
DEBUG - 2013-09-20 12:32:48 --> Database Driver Class Initialized
DEBUG - 2013-09-20 12:32:48 --> Session Class Initialized
DEBUG - 2013-09-20 12:32:48 --> Helper loaded: string_helper
DEBUG - 2013-09-20 12:32:48 --> Session routines successfully run
DEBUG - 2013-09-20 12:32:48 --> Form Validation Class Initialized
DEBUG - 2013-09-20 12:32:48 --> Controller Class Initialized
INFO  - 2013-09-20 12:32:48 --> the form message==>
INFO  - 2013-09-20 12:32:48 --> after the retrieving session list.................//////////
DEBUG - 2013-09-20 12:32:48 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-20 12:32:48 --> Final output sent to browser
DEBUG - 2013-09-20 12:32:48 --> Total execution time: 0.0460
DEBUG - 2013-09-20 12:32:49 --> Config Class Initialized
DEBUG - 2013-09-20 12:32:49 --> Hooks Class Initialized
DEBUG - 2013-09-20 12:32:49 --> Utf8 Class Initialized
DEBUG - 2013-09-20 12:32:49 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 12:32:49 --> URI Class Initialized
DEBUG - 2013-09-20 12:32:49 --> Router Class Initialized
DEBUG - 2013-09-20 12:32:49 --> Output Class Initialized
DEBUG - 2013-09-20 12:32:49 --> Security Class Initialized
DEBUG - 2013-09-20 12:32:49 --> Input Class Initialized
DEBUG - 2013-09-20 12:32:49 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 12:32:49 --> Language Class Initialized
DEBUG - 2013-09-20 12:32:49 --> Loader Class Initialized
DEBUG - 2013-09-20 12:32:49 --> Helper loaded: form_helper
DEBUG - 2013-09-20 12:32:49 --> Helper loaded: url_helper
DEBUG - 2013-09-20 12:32:49 --> Helper loaded: html_helper
DEBUG - 2013-09-20 12:32:49 --> Database Driver Class Initialized
DEBUG - 2013-09-20 12:32:49 --> Session Class Initialized
DEBUG - 2013-09-20 12:32:49 --> Helper loaded: string_helper
DEBUG - 2013-09-20 12:32:49 --> Session routines successfully run
DEBUG - 2013-09-20 12:32:49 --> Form Validation Class Initialized
DEBUG - 2013-09-20 12:32:49 --> Controller Class Initialized
DEBUG - 2013-09-20 12:32:49 --> Model Class Initialized
DEBUG - 2013-09-20 12:32:49 --> Model Class Initialized
DEBUG - 2013-09-20 12:32:49 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 12:32:49 --> after session initialization................
INFO  - 2013-09-20 12:32:49 --> after rays has been clicked.................
INFO  - 2013-09-20 12:32:49 --> last news id is 0
INFO  - 2013-09-20 12:32:49 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 12:32:49 --> last news id is 0
INFO  - 2013-09-20 12:32:49 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 12:32:49 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 12:32:49 --> Final output sent to browser
DEBUG - 2013-09-20 12:32:49 --> Total execution time: 0.0520
DEBUG - 2013-09-20 12:32:50 --> Config Class Initialized
DEBUG - 2013-09-20 12:32:50 --> Hooks Class Initialized
DEBUG - 2013-09-20 12:32:50 --> Utf8 Class Initialized
DEBUG - 2013-09-20 12:32:50 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 12:32:50 --> URI Class Initialized
DEBUG - 2013-09-20 12:32:50 --> Router Class Initialized
ERROR - 2013-09-20 12:32:50 --> 404 Page Not Found --> css
DEBUG - 2013-09-20 12:53:52 --> Config Class Initialized
DEBUG - 2013-09-20 12:53:52 --> Hooks Class Initialized
DEBUG - 2013-09-20 12:53:52 --> Utf8 Class Initialized
DEBUG - 2013-09-20 12:53:52 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 12:53:52 --> URI Class Initialized
DEBUG - 2013-09-20 12:53:52 --> Router Class Initialized
DEBUG - 2013-09-20 12:53:52 --> Output Class Initialized
DEBUG - 2013-09-20 12:53:52 --> Security Class Initialized
DEBUG - 2013-09-20 12:53:52 --> Input Class Initialized
DEBUG - 2013-09-20 12:53:52 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 12:53:52 --> Language Class Initialized
DEBUG - 2013-09-20 12:53:52 --> Loader Class Initialized
DEBUG - 2013-09-20 12:53:52 --> Helper loaded: form_helper
DEBUG - 2013-09-20 12:53:52 --> Helper loaded: url_helper
DEBUG - 2013-09-20 12:53:52 --> Helper loaded: html_helper
DEBUG - 2013-09-20 12:53:52 --> Database Driver Class Initialized
DEBUG - 2013-09-20 12:53:52 --> Session Class Initialized
DEBUG - 2013-09-20 12:53:52 --> Helper loaded: string_helper
DEBUG - 2013-09-20 12:53:52 --> Session routines successfully run
DEBUG - 2013-09-20 12:53:52 --> Form Validation Class Initialized
DEBUG - 2013-09-20 12:53:52 --> Controller Class Initialized
DEBUG - 2013-09-20 12:53:52 --> Model Class Initialized
DEBUG - 2013-09-20 12:53:52 --> Model Class Initialized
DEBUG - 2013-09-20 12:53:52 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 12:53:52 --> after session initialization................
ERROR - 2013-09-20 12:53:52 --> Severity: Warning  --> Missing argument 1 for user_authorization::index() C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 69
ERROR - 2013-09-20 12:53:52 --> Severity: Notice  --> Undefined variable: message C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 71
DEBUG - 2013-09-20 12:53:52 --> Config Class Initialized
DEBUG - 2013-09-20 12:53:52 --> Hooks Class Initialized
DEBUG - 2013-09-20 12:53:52 --> Utf8 Class Initialized
DEBUG - 2013-09-20 12:53:52 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 12:53:52 --> URI Class Initialized
DEBUG - 2013-09-20 12:53:52 --> Router Class Initialized
DEBUG - 2013-09-20 12:53:52 --> No URI present. Default controller set.
DEBUG - 2013-09-20 12:53:52 --> Output Class Initialized
DEBUG - 2013-09-20 12:53:52 --> Security Class Initialized
DEBUG - 2013-09-20 12:53:52 --> Input Class Initialized
DEBUG - 2013-09-20 12:53:52 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 12:53:52 --> Language Class Initialized
DEBUG - 2013-09-20 12:53:52 --> Loader Class Initialized
DEBUG - 2013-09-20 12:53:52 --> Helper loaded: form_helper
DEBUG - 2013-09-20 12:53:52 --> Helper loaded: url_helper
DEBUG - 2013-09-20 12:53:52 --> Helper loaded: html_helper
DEBUG - 2013-09-20 12:53:52 --> Database Driver Class Initialized
DEBUG - 2013-09-20 12:53:52 --> Session Class Initialized
DEBUG - 2013-09-20 12:53:52 --> Helper loaded: string_helper
DEBUG - 2013-09-20 12:53:52 --> Session routines successfully run
DEBUG - 2013-09-20 12:53:52 --> Form Validation Class Initialized
DEBUG - 2013-09-20 12:53:52 --> Controller Class Initialized
INFO  - 2013-09-20 12:53:52 --> the form message==>
INFO  - 2013-09-20 12:53:52 --> after the retrieving session list.................//////////
DEBUG - 2013-09-20 12:53:52 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-20 12:53:52 --> Final output sent to browser
DEBUG - 2013-09-20 12:53:52 --> Total execution time: 0.0440
DEBUG - 2013-09-20 12:53:53 --> Config Class Initialized
DEBUG - 2013-09-20 12:53:53 --> Hooks Class Initialized
DEBUG - 2013-09-20 12:53:53 --> Utf8 Class Initialized
DEBUG - 2013-09-20 12:53:53 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 12:53:53 --> URI Class Initialized
DEBUG - 2013-09-20 12:53:53 --> Router Class Initialized
DEBUG - 2013-09-20 12:53:53 --> Output Class Initialized
DEBUG - 2013-09-20 12:53:53 --> Security Class Initialized
DEBUG - 2013-09-20 12:53:53 --> Input Class Initialized
DEBUG - 2013-09-20 12:53:53 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 12:53:53 --> Language Class Initialized
DEBUG - 2013-09-20 12:53:53 --> Loader Class Initialized
DEBUG - 2013-09-20 12:53:53 --> Helper loaded: form_helper
DEBUG - 2013-09-20 12:53:53 --> Helper loaded: url_helper
DEBUG - 2013-09-20 12:53:53 --> Helper loaded: html_helper
DEBUG - 2013-09-20 12:53:53 --> Database Driver Class Initialized
DEBUG - 2013-09-20 12:53:53 --> Session Class Initialized
DEBUG - 2013-09-20 12:53:53 --> Helper loaded: string_helper
DEBUG - 2013-09-20 12:53:53 --> Session routines successfully run
DEBUG - 2013-09-20 12:53:53 --> Form Validation Class Initialized
DEBUG - 2013-09-20 12:53:53 --> Controller Class Initialized
DEBUG - 2013-09-20 12:53:53 --> Model Class Initialized
DEBUG - 2013-09-20 12:53:53 --> Model Class Initialized
DEBUG - 2013-09-20 12:53:53 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 12:53:53 --> after session initialization................
INFO  - 2013-09-20 12:53:53 --> after rays has been clicked.................
INFO  - 2013-09-20 12:53:53 --> last news id is 0
INFO  - 2013-09-20 12:53:53 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 12:53:53 --> last news id is 0
INFO  - 2013-09-20 12:53:53 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 12:53:53 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 12:53:53 --> Final output sent to browser
DEBUG - 2013-09-20 12:53:53 --> Total execution time: 0.0580
DEBUG - 2013-09-20 12:53:53 --> Config Class Initialized
DEBUG - 2013-09-20 12:53:53 --> Hooks Class Initialized
DEBUG - 2013-09-20 12:53:53 --> Utf8 Class Initialized
DEBUG - 2013-09-20 12:53:53 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 12:53:53 --> URI Class Initialized
DEBUG - 2013-09-20 12:53:53 --> Router Class Initialized
ERROR - 2013-09-20 12:53:53 --> 404 Page Not Found --> css
DEBUG - 2013-09-20 13:18:18 --> Config Class Initialized
DEBUG - 2013-09-20 13:18:18 --> Hooks Class Initialized
DEBUG - 2013-09-20 13:18:18 --> Utf8 Class Initialized
DEBUG - 2013-09-20 13:18:18 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 13:18:18 --> URI Class Initialized
DEBUG - 2013-09-20 13:18:18 --> Router Class Initialized
DEBUG - 2013-09-20 13:18:18 --> Output Class Initialized
DEBUG - 2013-09-20 13:18:18 --> Security Class Initialized
DEBUG - 2013-09-20 13:18:18 --> Input Class Initialized
DEBUG - 2013-09-20 13:18:18 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 13:18:18 --> Language Class Initialized
DEBUG - 2013-09-20 13:18:18 --> Loader Class Initialized
DEBUG - 2013-09-20 13:18:18 --> Helper loaded: form_helper
DEBUG - 2013-09-20 13:18:18 --> Helper loaded: url_helper
DEBUG - 2013-09-20 13:18:18 --> Helper loaded: html_helper
DEBUG - 2013-09-20 13:18:18 --> Database Driver Class Initialized
DEBUG - 2013-09-20 13:18:18 --> Session Class Initialized
DEBUG - 2013-09-20 13:18:18 --> Helper loaded: string_helper
DEBUG - 2013-09-20 13:18:18 --> Session routines successfully run
DEBUG - 2013-09-20 13:18:18 --> Form Validation Class Initialized
DEBUG - 2013-09-20 13:18:18 --> Controller Class Initialized
DEBUG - 2013-09-20 13:18:18 --> Model Class Initialized
DEBUG - 2013-09-20 13:18:18 --> Model Class Initialized
DEBUG - 2013-09-20 13:18:18 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 13:18:18 --> after session initialization................
INFO  - 2013-09-20 13:18:18 --> after rays has been clicked.................
INFO  - 2013-09-20 13:18:18 --> last news id is 0
INFO  - 2013-09-20 13:18:18 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 13:18:18 --> last news id is 0
INFO  - 2013-09-20 13:18:18 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 13:18:18 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 13:18:18 --> Final output sent to browser
DEBUG - 2013-09-20 13:18:18 --> Total execution time: 0.0620
DEBUG - 2013-09-20 13:18:18 --> Config Class Initialized
DEBUG - 2013-09-20 13:18:18 --> Hooks Class Initialized
DEBUG - 2013-09-20 13:18:18 --> Utf8 Class Initialized
DEBUG - 2013-09-20 13:18:18 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 13:18:18 --> URI Class Initialized
DEBUG - 2013-09-20 13:18:18 --> Router Class Initialized
ERROR - 2013-09-20 13:18:18 --> 404 Page Not Found --> css
DEBUG - 2013-09-20 15:53:50 --> Config Class Initialized
DEBUG - 2013-09-20 15:53:50 --> Hooks Class Initialized
DEBUG - 2013-09-20 15:53:50 --> Utf8 Class Initialized
DEBUG - 2013-09-20 15:53:50 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 15:53:50 --> URI Class Initialized
DEBUG - 2013-09-20 15:53:50 --> Router Class Initialized
DEBUG - 2013-09-20 15:53:50 --> Output Class Initialized
DEBUG - 2013-09-20 15:53:50 --> Security Class Initialized
DEBUG - 2013-09-20 15:53:50 --> Input Class Initialized
DEBUG - 2013-09-20 15:53:50 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 15:53:50 --> Language Class Initialized
DEBUG - 2013-09-20 15:53:50 --> Loader Class Initialized
DEBUG - 2013-09-20 15:53:50 --> Helper loaded: form_helper
DEBUG - 2013-09-20 15:53:50 --> Helper loaded: url_helper
DEBUG - 2013-09-20 15:53:50 --> Helper loaded: html_helper
DEBUG - 2013-09-20 15:53:50 --> Database Driver Class Initialized
DEBUG - 2013-09-20 15:53:50 --> Session Class Initialized
DEBUG - 2013-09-20 15:53:50 --> Helper loaded: string_helper
DEBUG - 2013-09-20 15:53:50 --> A session cookie was not found.
DEBUG - 2013-09-20 15:53:50 --> Session routines successfully run
DEBUG - 2013-09-20 15:53:50 --> Form Validation Class Initialized
DEBUG - 2013-09-20 15:53:50 --> Controller Class Initialized
DEBUG - 2013-09-20 15:53:50 --> Model Class Initialized
DEBUG - 2013-09-20 15:53:50 --> Model Class Initialized
DEBUG - 2013-09-20 15:53:50 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 15:53:50 --> after session initialization................
INFO  - 2013-09-20 15:53:50 --> after rays has been clicked.................
INFO  - 2013-09-20 15:53:50 --> last news id is 0
INFO  - 2013-09-20 15:53:50 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 15:53:50 --> last news id is 0
INFO  - 2013-09-20 15:53:50 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 15:53:50 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 15:53:50 --> Final output sent to browser
DEBUG - 2013-09-20 15:53:50 --> Total execution time: 0.0600
DEBUG - 2013-09-20 15:53:50 --> Config Class Initialized
DEBUG - 2013-09-20 15:53:50 --> Hooks Class Initialized
DEBUG - 2013-09-20 15:53:50 --> Utf8 Class Initialized
DEBUG - 2013-09-20 15:53:50 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 15:53:50 --> URI Class Initialized
DEBUG - 2013-09-20 15:53:50 --> Router Class Initialized
ERROR - 2013-09-20 15:53:50 --> 404 Page Not Found --> css
DEBUG - 2013-09-20 15:54:22 --> Config Class Initialized
DEBUG - 2013-09-20 15:54:22 --> Hooks Class Initialized
DEBUG - 2013-09-20 15:54:22 --> Utf8 Class Initialized
DEBUG - 2013-09-20 15:54:22 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 15:54:22 --> URI Class Initialized
DEBUG - 2013-09-20 15:54:22 --> Router Class Initialized
DEBUG - 2013-09-20 15:54:22 --> Output Class Initialized
DEBUG - 2013-09-20 15:54:22 --> Security Class Initialized
DEBUG - 2013-09-20 15:54:22 --> Input Class Initialized
DEBUG - 2013-09-20 15:54:22 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 15:54:22 --> Language Class Initialized
DEBUG - 2013-09-20 15:54:22 --> Loader Class Initialized
DEBUG - 2013-09-20 15:54:22 --> Helper loaded: form_helper
DEBUG - 2013-09-20 15:54:22 --> Helper loaded: url_helper
DEBUG - 2013-09-20 15:54:22 --> Helper loaded: html_helper
DEBUG - 2013-09-20 15:54:22 --> Database Driver Class Initialized
DEBUG - 2013-09-20 15:54:22 --> Session Class Initialized
DEBUG - 2013-09-20 15:54:22 --> Helper loaded: string_helper
DEBUG - 2013-09-20 15:54:22 --> Session routines successfully run
DEBUG - 2013-09-20 15:54:22 --> Form Validation Class Initialized
DEBUG - 2013-09-20 15:54:22 --> Controller Class Initialized
DEBUG - 2013-09-20 15:54:22 --> Model Class Initialized
DEBUG - 2013-09-20 15:54:22 --> Model Class Initialized
DEBUG - 2013-09-20 15:54:22 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 15:54:22 --> after session initialization................
INFO  - 2013-09-20 15:54:22 --> after rays has been clicked.................
INFO  - 2013-09-20 15:54:22 --> last news id is 0
INFO  - 2013-09-20 15:54:22 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 15:54:22 --> last news id is 0
INFO  - 2013-09-20 15:54:22 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 15:54:22 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 15:54:22 --> Final output sent to browser
DEBUG - 2013-09-20 15:54:22 --> Total execution time: 0.0620
DEBUG - 2013-09-20 15:54:22 --> Config Class Initialized
DEBUG - 2013-09-20 15:54:22 --> Hooks Class Initialized
DEBUG - 2013-09-20 15:54:22 --> Utf8 Class Initialized
DEBUG - 2013-09-20 15:54:22 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 15:54:22 --> URI Class Initialized
DEBUG - 2013-09-20 15:54:22 --> Router Class Initialized
ERROR - 2013-09-20 15:54:22 --> 404 Page Not Found --> css
DEBUG - 2013-09-20 15:56:34 --> Config Class Initialized
DEBUG - 2013-09-20 15:56:34 --> Hooks Class Initialized
DEBUG - 2013-09-20 15:56:34 --> Utf8 Class Initialized
DEBUG - 2013-09-20 15:56:34 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 15:56:34 --> URI Class Initialized
DEBUG - 2013-09-20 15:56:34 --> Router Class Initialized
DEBUG - 2013-09-20 15:56:34 --> Output Class Initialized
DEBUG - 2013-09-20 15:56:34 --> Security Class Initialized
DEBUG - 2013-09-20 15:56:34 --> Input Class Initialized
DEBUG - 2013-09-20 15:56:34 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 15:56:34 --> Language Class Initialized
DEBUG - 2013-09-20 15:56:34 --> Loader Class Initialized
DEBUG - 2013-09-20 15:56:34 --> Helper loaded: form_helper
DEBUG - 2013-09-20 15:56:34 --> Helper loaded: url_helper
DEBUG - 2013-09-20 15:56:34 --> Helper loaded: html_helper
DEBUG - 2013-09-20 15:56:34 --> Database Driver Class Initialized
DEBUG - 2013-09-20 15:56:35 --> Session Class Initialized
DEBUG - 2013-09-20 15:56:35 --> Helper loaded: string_helper
DEBUG - 2013-09-20 15:56:35 --> Session routines successfully run
DEBUG - 2013-09-20 15:56:35 --> Form Validation Class Initialized
DEBUG - 2013-09-20 15:56:35 --> Controller Class Initialized
DEBUG - 2013-09-20 15:56:35 --> Model Class Initialized
DEBUG - 2013-09-20 15:56:35 --> Model Class Initialized
DEBUG - 2013-09-20 15:56:35 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 15:56:35 --> after session initialization................
INFO  - 2013-09-20 15:56:35 --> after rays has been clicked.................
INFO  - 2013-09-20 15:56:35 --> last news id is 0
INFO  - 2013-09-20 15:56:35 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 15:56:35 --> last news id is 0
INFO  - 2013-09-20 15:56:35 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 15:56:35 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 15:56:35 --> Final output sent to browser
DEBUG - 2013-09-20 15:56:35 --> Total execution time: 1.0761
DEBUG - 2013-09-20 15:56:36 --> Config Class Initialized
DEBUG - 2013-09-20 15:56:36 --> Hooks Class Initialized
DEBUG - 2013-09-20 15:56:36 --> Utf8 Class Initialized
DEBUG - 2013-09-20 15:56:36 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 15:56:36 --> URI Class Initialized
DEBUG - 2013-09-20 15:56:36 --> Router Class Initialized
ERROR - 2013-09-20 15:56:36 --> 404 Page Not Found --> css
DEBUG - 2013-09-20 15:57:42 --> Config Class Initialized
DEBUG - 2013-09-20 15:57:42 --> Hooks Class Initialized
DEBUG - 2013-09-20 15:57:42 --> Utf8 Class Initialized
DEBUG - 2013-09-20 15:57:42 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 15:57:42 --> URI Class Initialized
DEBUG - 2013-09-20 15:57:42 --> Router Class Initialized
DEBUG - 2013-09-20 15:57:42 --> Output Class Initialized
DEBUG - 2013-09-20 15:57:42 --> Security Class Initialized
DEBUG - 2013-09-20 15:57:42 --> Input Class Initialized
DEBUG - 2013-09-20 15:57:42 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 15:57:42 --> Language Class Initialized
DEBUG - 2013-09-20 15:57:42 --> Loader Class Initialized
DEBUG - 2013-09-20 15:57:42 --> Helper loaded: form_helper
DEBUG - 2013-09-20 15:57:42 --> Helper loaded: url_helper
DEBUG - 2013-09-20 15:57:42 --> Helper loaded: html_helper
DEBUG - 2013-09-20 15:57:42 --> Database Driver Class Initialized
DEBUG - 2013-09-20 15:57:42 --> Session Class Initialized
DEBUG - 2013-09-20 15:57:42 --> Helper loaded: string_helper
DEBUG - 2013-09-20 15:57:42 --> Session routines successfully run
DEBUG - 2013-09-20 15:57:42 --> Form Validation Class Initialized
DEBUG - 2013-09-20 15:57:42 --> Controller Class Initialized
DEBUG - 2013-09-20 15:57:42 --> Model Class Initialized
DEBUG - 2013-09-20 15:57:42 --> Model Class Initialized
DEBUG - 2013-09-20 15:57:42 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 15:57:42 --> after session initialization................
INFO  - 2013-09-20 15:57:42 --> after rays has been clicked.................
INFO  - 2013-09-20 15:57:42 --> last news id is 0
INFO  - 2013-09-20 15:57:42 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 15:57:42 --> last news id is 0
INFO  - 2013-09-20 15:57:42 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 15:57:42 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 15:57:42 --> Final output sent to browser
DEBUG - 2013-09-20 15:57:42 --> Total execution time: 0.0670
DEBUG - 2013-09-20 15:57:42 --> Config Class Initialized
DEBUG - 2013-09-20 15:57:42 --> Hooks Class Initialized
DEBUG - 2013-09-20 15:57:42 --> Utf8 Class Initialized
DEBUG - 2013-09-20 15:57:42 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 15:57:42 --> URI Class Initialized
DEBUG - 2013-09-20 15:57:42 --> Router Class Initialized
ERROR - 2013-09-20 15:57:42 --> 404 Page Not Found --> css
DEBUG - 2013-09-20 15:58:53 --> Config Class Initialized
DEBUG - 2013-09-20 15:58:53 --> Hooks Class Initialized
DEBUG - 2013-09-20 15:58:53 --> Utf8 Class Initialized
DEBUG - 2013-09-20 15:58:53 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 15:58:53 --> URI Class Initialized
DEBUG - 2013-09-20 15:58:53 --> Router Class Initialized
DEBUG - 2013-09-20 15:58:53 --> Output Class Initialized
DEBUG - 2013-09-20 15:58:53 --> Security Class Initialized
DEBUG - 2013-09-20 15:58:53 --> Input Class Initialized
DEBUG - 2013-09-20 15:58:53 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 15:58:53 --> Language Class Initialized
DEBUG - 2013-09-20 15:58:53 --> Loader Class Initialized
DEBUG - 2013-09-20 15:58:53 --> Helper loaded: form_helper
DEBUG - 2013-09-20 15:58:53 --> Helper loaded: url_helper
DEBUG - 2013-09-20 15:58:53 --> Helper loaded: html_helper
DEBUG - 2013-09-20 15:58:53 --> Database Driver Class Initialized
DEBUG - 2013-09-20 15:58:54 --> Session Class Initialized
DEBUG - 2013-09-20 15:58:54 --> Helper loaded: string_helper
DEBUG - 2013-09-20 15:58:54 --> Session routines successfully run
DEBUG - 2013-09-20 15:58:54 --> Form Validation Class Initialized
DEBUG - 2013-09-20 15:58:54 --> Controller Class Initialized
DEBUG - 2013-09-20 15:58:54 --> Model Class Initialized
DEBUG - 2013-09-20 15:58:54 --> Model Class Initialized
DEBUG - 2013-09-20 15:58:54 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 15:58:54 --> after session initialization................
INFO  - 2013-09-20 15:58:54 --> after rays has been clicked.................
INFO  - 2013-09-20 15:58:54 --> last news id is 0
INFO  - 2013-09-20 15:58:54 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 15:58:54 --> last news id is 0
INFO  - 2013-09-20 15:58:54 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 15:58:54 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 15:58:54 --> Final output sent to browser
DEBUG - 2013-09-20 15:58:54 --> Total execution time: 1.0661
DEBUG - 2013-09-20 15:58:54 --> Config Class Initialized
DEBUG - 2013-09-20 15:58:54 --> Hooks Class Initialized
DEBUG - 2013-09-20 15:58:54 --> Utf8 Class Initialized
DEBUG - 2013-09-20 15:58:54 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 15:58:54 --> URI Class Initialized
DEBUG - 2013-09-20 15:58:54 --> Router Class Initialized
ERROR - 2013-09-20 15:58:54 --> 404 Page Not Found --> css
DEBUG - 2013-09-20 16:01:13 --> Config Class Initialized
DEBUG - 2013-09-20 16:01:13 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:01:13 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:01:13 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:01:13 --> URI Class Initialized
DEBUG - 2013-09-20 16:01:13 --> Router Class Initialized
DEBUG - 2013-09-20 16:01:13 --> Output Class Initialized
DEBUG - 2013-09-20 16:01:13 --> Security Class Initialized
DEBUG - 2013-09-20 16:01:13 --> Input Class Initialized
DEBUG - 2013-09-20 16:01:13 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:01:13 --> Language Class Initialized
DEBUG - 2013-09-20 16:01:13 --> Loader Class Initialized
DEBUG - 2013-09-20 16:01:13 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:01:13 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:01:13 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:01:13 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:01:13 --> Session Class Initialized
DEBUG - 2013-09-20 16:01:13 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:01:13 --> Session routines successfully run
DEBUG - 2013-09-20 16:01:13 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:01:13 --> Controller Class Initialized
DEBUG - 2013-09-20 16:01:13 --> Model Class Initialized
DEBUG - 2013-09-20 16:01:13 --> Model Class Initialized
DEBUG - 2013-09-20 16:01:13 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:01:13 --> after session initialization................
INFO  - 2013-09-20 16:01:13 --> after rays has been clicked.................
INFO  - 2013-09-20 16:01:13 --> last news id is 0
INFO  - 2013-09-20 16:01:13 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:01:13 --> last news id is 0
INFO  - 2013-09-20 16:01:13 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:01:14 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:01:14 --> Final output sent to browser
DEBUG - 2013-09-20 16:01:14 --> Total execution time: 0.0630
DEBUG - 2013-09-20 16:01:14 --> Config Class Initialized
DEBUG - 2013-09-20 16:01:14 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:01:14 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:01:14 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:01:14 --> URI Class Initialized
DEBUG - 2013-09-20 16:01:14 --> Router Class Initialized
ERROR - 2013-09-20 16:01:14 --> 404 Page Not Found --> css
DEBUG - 2013-09-20 16:04:37 --> Config Class Initialized
DEBUG - 2013-09-20 16:04:37 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:04:37 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:04:37 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:04:37 --> URI Class Initialized
DEBUG - 2013-09-20 16:04:37 --> Router Class Initialized
DEBUG - 2013-09-20 16:04:37 --> Output Class Initialized
DEBUG - 2013-09-20 16:04:37 --> Security Class Initialized
DEBUG - 2013-09-20 16:04:37 --> Input Class Initialized
DEBUG - 2013-09-20 16:04:37 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:04:37 --> Language Class Initialized
DEBUG - 2013-09-20 16:04:37 --> Loader Class Initialized
DEBUG - 2013-09-20 16:04:37 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:04:37 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:04:37 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:04:37 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:04:38 --> Session Class Initialized
DEBUG - 2013-09-20 16:04:38 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:04:38 --> Session routines successfully run
DEBUG - 2013-09-20 16:04:38 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:04:38 --> Controller Class Initialized
DEBUG - 2013-09-20 16:04:38 --> Model Class Initialized
DEBUG - 2013-09-20 16:04:38 --> Model Class Initialized
DEBUG - 2013-09-20 16:04:38 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:04:38 --> after session initialization................
INFO  - 2013-09-20 16:04:38 --> after rays has been clicked.................
INFO  - 2013-09-20 16:04:38 --> last news id is 0
INFO  - 2013-09-20 16:04:38 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:04:38 --> last news id is 0
INFO  - 2013-09-20 16:04:38 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:04:38 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:04:38 --> Final output sent to browser
DEBUG - 2013-09-20 16:04:38 --> Total execution time: 1.0831
DEBUG - 2013-09-20 16:07:00 --> Config Class Initialized
DEBUG - 2013-09-20 16:07:00 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:07:00 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:07:00 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:07:00 --> URI Class Initialized
DEBUG - 2013-09-20 16:07:00 --> Router Class Initialized
DEBUG - 2013-09-20 16:07:00 --> Output Class Initialized
DEBUG - 2013-09-20 16:07:00 --> Security Class Initialized
DEBUG - 2013-09-20 16:07:00 --> Input Class Initialized
DEBUG - 2013-09-20 16:07:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:07:00 --> Language Class Initialized
DEBUG - 2013-09-20 16:07:00 --> Loader Class Initialized
DEBUG - 2013-09-20 16:07:00 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:07:00 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:07:00 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:07:00 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:07:00 --> Session Class Initialized
DEBUG - 2013-09-20 16:07:00 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:07:00 --> Session routines successfully run
DEBUG - 2013-09-20 16:07:00 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:07:00 --> Controller Class Initialized
DEBUG - 2013-09-20 16:07:00 --> Model Class Initialized
DEBUG - 2013-09-20 16:07:00 --> Model Class Initialized
DEBUG - 2013-09-20 16:07:00 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:07:00 --> after session initialization................
INFO  - 2013-09-20 16:07:00 --> after rays has been clicked.................
INFO  - 2013-09-20 16:07:00 --> last news id is 0
INFO  - 2013-09-20 16:07:00 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:07:00 --> last news id is 0
INFO  - 2013-09-20 16:07:00 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:07:00 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:07:00 --> Final output sent to browser
DEBUG - 2013-09-20 16:07:00 --> Total execution time: 0.0770
DEBUG - 2013-09-20 16:08:00 --> Config Class Initialized
DEBUG - 2013-09-20 16:08:00 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:08:00 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:08:00 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:08:00 --> URI Class Initialized
DEBUG - 2013-09-20 16:08:00 --> Router Class Initialized
DEBUG - 2013-09-20 16:08:00 --> Output Class Initialized
DEBUG - 2013-09-20 16:08:00 --> Security Class Initialized
DEBUG - 2013-09-20 16:08:00 --> Input Class Initialized
DEBUG - 2013-09-20 16:08:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:08:00 --> Language Class Initialized
DEBUG - 2013-09-20 16:08:00 --> Loader Class Initialized
DEBUG - 2013-09-20 16:08:00 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:08:00 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:08:00 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:08:00 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:08:00 --> Session Class Initialized
DEBUG - 2013-09-20 16:08:00 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:08:00 --> Session routines successfully run
DEBUG - 2013-09-20 16:08:01 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:08:01 --> Controller Class Initialized
DEBUG - 2013-09-20 16:08:01 --> Model Class Initialized
DEBUG - 2013-09-20 16:08:01 --> Model Class Initialized
DEBUG - 2013-09-20 16:08:01 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:08:01 --> after session initialization................
INFO  - 2013-09-20 16:08:01 --> after rays has been clicked.................
INFO  - 2013-09-20 16:08:01 --> last news id is 0
INFO  - 2013-09-20 16:08:01 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:08:01 --> last news id is 0
INFO  - 2013-09-20 16:08:01 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:08:01 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:08:01 --> Final output sent to browser
DEBUG - 2013-09-20 16:08:01 --> Total execution time: 0.0650
DEBUG - 2013-09-20 16:08:35 --> Config Class Initialized
DEBUG - 2013-09-20 16:08:35 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:08:35 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:08:35 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:08:35 --> URI Class Initialized
DEBUG - 2013-09-20 16:08:35 --> Router Class Initialized
DEBUG - 2013-09-20 16:08:35 --> Output Class Initialized
DEBUG - 2013-09-20 16:08:35 --> Security Class Initialized
DEBUG - 2013-09-20 16:08:35 --> Input Class Initialized
DEBUG - 2013-09-20 16:08:35 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:08:35 --> Language Class Initialized
DEBUG - 2013-09-20 16:08:35 --> Loader Class Initialized
DEBUG - 2013-09-20 16:08:35 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:08:35 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:08:35 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:08:35 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:08:35 --> Session Class Initialized
DEBUG - 2013-09-20 16:08:35 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:08:35 --> Session routines successfully run
DEBUG - 2013-09-20 16:08:35 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:08:35 --> Controller Class Initialized
DEBUG - 2013-09-20 16:08:35 --> Model Class Initialized
DEBUG - 2013-09-20 16:08:35 --> Model Class Initialized
DEBUG - 2013-09-20 16:08:35 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:08:35 --> after session initialization................
INFO  - 2013-09-20 16:08:35 --> after rays has been clicked.................
INFO  - 2013-09-20 16:08:35 --> last news id is 0
INFO  - 2013-09-20 16:08:35 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:08:35 --> last news id is 0
INFO  - 2013-09-20 16:08:35 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:08:35 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:08:35 --> Final output sent to browser
DEBUG - 2013-09-20 16:08:35 --> Total execution time: 0.0570
DEBUG - 2013-09-20 16:08:48 --> Config Class Initialized
DEBUG - 2013-09-20 16:08:48 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:08:48 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:08:48 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:08:48 --> URI Class Initialized
DEBUG - 2013-09-20 16:08:48 --> Router Class Initialized
DEBUG - 2013-09-20 16:08:48 --> Output Class Initialized
DEBUG - 2013-09-20 16:08:48 --> Security Class Initialized
DEBUG - 2013-09-20 16:08:48 --> Input Class Initialized
DEBUG - 2013-09-20 16:08:48 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:08:48 --> Language Class Initialized
DEBUG - 2013-09-20 16:08:48 --> Loader Class Initialized
DEBUG - 2013-09-20 16:08:48 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:08:48 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:08:48 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:08:48 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:08:48 --> Session Class Initialized
DEBUG - 2013-09-20 16:08:48 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:08:48 --> Session routines successfully run
DEBUG - 2013-09-20 16:08:48 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:08:48 --> Controller Class Initialized
DEBUG - 2013-09-20 16:08:48 --> Model Class Initialized
DEBUG - 2013-09-20 16:08:48 --> Model Class Initialized
DEBUG - 2013-09-20 16:08:48 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:08:48 --> after session initialization................
INFO  - 2013-09-20 16:08:48 --> after rays has been clicked.................
INFO  - 2013-09-20 16:08:48 --> last news id is 0
INFO  - 2013-09-20 16:08:48 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:08:48 --> last news id is 0
INFO  - 2013-09-20 16:08:48 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:08:48 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:08:48 --> Final output sent to browser
DEBUG - 2013-09-20 16:08:48 --> Total execution time: 0.0550
DEBUG - 2013-09-20 16:09:16 --> Config Class Initialized
DEBUG - 2013-09-20 16:09:16 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:09:16 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:09:16 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:09:16 --> URI Class Initialized
DEBUG - 2013-09-20 16:09:16 --> Router Class Initialized
DEBUG - 2013-09-20 16:09:16 --> Output Class Initialized
DEBUG - 2013-09-20 16:09:16 --> Security Class Initialized
DEBUG - 2013-09-20 16:09:16 --> Input Class Initialized
DEBUG - 2013-09-20 16:09:16 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:09:16 --> Language Class Initialized
DEBUG - 2013-09-20 16:09:16 --> Loader Class Initialized
DEBUG - 2013-09-20 16:09:16 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:09:16 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:09:16 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:09:16 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:09:16 --> Session Class Initialized
DEBUG - 2013-09-20 16:09:16 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:09:16 --> Session routines successfully run
DEBUG - 2013-09-20 16:09:16 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:09:16 --> Controller Class Initialized
DEBUG - 2013-09-20 16:09:16 --> Model Class Initialized
DEBUG - 2013-09-20 16:09:16 --> Model Class Initialized
DEBUG - 2013-09-20 16:09:16 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:09:16 --> after session initialization................
INFO  - 2013-09-20 16:09:16 --> after rays has been clicked.................
INFO  - 2013-09-20 16:09:16 --> last news id is 0
INFO  - 2013-09-20 16:09:16 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:09:16 --> last news id is 0
INFO  - 2013-09-20 16:09:16 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:09:16 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:09:16 --> Final output sent to browser
DEBUG - 2013-09-20 16:09:16 --> Total execution time: 0.0530
DEBUG - 2013-09-20 16:09:29 --> Config Class Initialized
DEBUG - 2013-09-20 16:09:29 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:09:29 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:09:29 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:09:29 --> URI Class Initialized
DEBUG - 2013-09-20 16:09:29 --> Router Class Initialized
DEBUG - 2013-09-20 16:09:29 --> Output Class Initialized
DEBUG - 2013-09-20 16:09:29 --> Security Class Initialized
DEBUG - 2013-09-20 16:09:29 --> Input Class Initialized
DEBUG - 2013-09-20 16:09:29 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:09:29 --> Language Class Initialized
DEBUG - 2013-09-20 16:09:29 --> Loader Class Initialized
DEBUG - 2013-09-20 16:09:29 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:09:29 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:09:29 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:09:29 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:09:29 --> Session Class Initialized
DEBUG - 2013-09-20 16:09:29 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:09:29 --> Session routines successfully run
DEBUG - 2013-09-20 16:09:29 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:09:29 --> Controller Class Initialized
DEBUG - 2013-09-20 16:09:29 --> Model Class Initialized
DEBUG - 2013-09-20 16:09:29 --> Model Class Initialized
DEBUG - 2013-09-20 16:09:29 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:09:29 --> after session initialization................
INFO  - 2013-09-20 16:09:29 --> after rays has been clicked.................
INFO  - 2013-09-20 16:09:29 --> last news id is 0
INFO  - 2013-09-20 16:09:29 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:09:29 --> last news id is 0
INFO  - 2013-09-20 16:09:29 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:09:29 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:09:29 --> Final output sent to browser
DEBUG - 2013-09-20 16:09:29 --> Total execution time: 0.0600
DEBUG - 2013-09-20 16:09:40 --> Config Class Initialized
DEBUG - 2013-09-20 16:09:40 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:09:40 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:09:40 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:09:40 --> URI Class Initialized
DEBUG - 2013-09-20 16:09:40 --> Router Class Initialized
DEBUG - 2013-09-20 16:09:40 --> Output Class Initialized
DEBUG - 2013-09-20 16:09:40 --> Security Class Initialized
DEBUG - 2013-09-20 16:09:40 --> Input Class Initialized
DEBUG - 2013-09-20 16:09:40 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:09:40 --> Language Class Initialized
DEBUG - 2013-09-20 16:09:40 --> Loader Class Initialized
DEBUG - 2013-09-20 16:09:40 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:09:40 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:09:40 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:09:40 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:09:40 --> Session Class Initialized
DEBUG - 2013-09-20 16:09:40 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:09:40 --> Session routines successfully run
DEBUG - 2013-09-20 16:09:40 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:09:40 --> Controller Class Initialized
DEBUG - 2013-09-20 16:09:40 --> Model Class Initialized
DEBUG - 2013-09-20 16:09:40 --> Model Class Initialized
DEBUG - 2013-09-20 16:09:40 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:09:40 --> after session initialization................
INFO  - 2013-09-20 16:09:40 --> after rays has been clicked.................
INFO  - 2013-09-20 16:09:40 --> last news id is 0
INFO  - 2013-09-20 16:09:40 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:09:40 --> last news id is 0
INFO  - 2013-09-20 16:09:40 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:09:40 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:09:40 --> Final output sent to browser
DEBUG - 2013-09-20 16:09:40 --> Total execution time: 0.0680
DEBUG - 2013-09-20 16:11:58 --> Config Class Initialized
DEBUG - 2013-09-20 16:11:58 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:11:58 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:11:58 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:11:58 --> URI Class Initialized
DEBUG - 2013-09-20 16:11:58 --> Router Class Initialized
DEBUG - 2013-09-20 16:11:58 --> Output Class Initialized
DEBUG - 2013-09-20 16:11:58 --> Security Class Initialized
DEBUG - 2013-09-20 16:11:58 --> Input Class Initialized
DEBUG - 2013-09-20 16:11:58 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:11:58 --> Language Class Initialized
DEBUG - 2013-09-20 16:11:58 --> Loader Class Initialized
DEBUG - 2013-09-20 16:11:58 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:11:58 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:11:58 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:11:58 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:11:58 --> Session Class Initialized
DEBUG - 2013-09-20 16:11:58 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:11:58 --> Session routines successfully run
DEBUG - 2013-09-20 16:11:58 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:11:58 --> Controller Class Initialized
DEBUG - 2013-09-20 16:11:58 --> Model Class Initialized
DEBUG - 2013-09-20 16:11:58 --> Model Class Initialized
DEBUG - 2013-09-20 16:11:58 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:11:58 --> after session initialization................
INFO  - 2013-09-20 16:11:58 --> after rays has been clicked.................
INFO  - 2013-09-20 16:11:58 --> last news id is 0
INFO  - 2013-09-20 16:11:58 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:11:58 --> last news id is 0
INFO  - 2013-09-20 16:11:58 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:11:58 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:11:58 --> Final output sent to browser
DEBUG - 2013-09-20 16:11:58 --> Total execution time: 0.0550
DEBUG - 2013-09-20 16:12:32 --> Config Class Initialized
DEBUG - 2013-09-20 16:12:32 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:12:32 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:12:32 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:12:32 --> URI Class Initialized
DEBUG - 2013-09-20 16:12:32 --> Router Class Initialized
DEBUG - 2013-09-20 16:12:32 --> Output Class Initialized
DEBUG - 2013-09-20 16:12:32 --> Security Class Initialized
DEBUG - 2013-09-20 16:12:32 --> Input Class Initialized
DEBUG - 2013-09-20 16:12:32 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:12:32 --> Language Class Initialized
DEBUG - 2013-09-20 16:12:32 --> Loader Class Initialized
DEBUG - 2013-09-20 16:12:32 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:12:32 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:12:32 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:12:32 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:12:32 --> Session Class Initialized
DEBUG - 2013-09-20 16:12:32 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:12:32 --> Session routines successfully run
DEBUG - 2013-09-20 16:12:32 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:12:32 --> Controller Class Initialized
DEBUG - 2013-09-20 16:12:32 --> Model Class Initialized
DEBUG - 2013-09-20 16:12:32 --> Model Class Initialized
DEBUG - 2013-09-20 16:12:32 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:12:32 --> after session initialization................
INFO  - 2013-09-20 16:12:32 --> after rays has been clicked.................
INFO  - 2013-09-20 16:12:32 --> last news id is 0
INFO  - 2013-09-20 16:12:32 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:12:32 --> last news id is 0
INFO  - 2013-09-20 16:12:32 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:12:32 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:12:32 --> Final output sent to browser
DEBUG - 2013-09-20 16:12:32 --> Total execution time: 0.0710
DEBUG - 2013-09-20 16:13:17 --> Config Class Initialized
DEBUG - 2013-09-20 16:13:17 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:13:17 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:13:17 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:13:17 --> URI Class Initialized
DEBUG - 2013-09-20 16:13:17 --> Router Class Initialized
DEBUG - 2013-09-20 16:13:17 --> Output Class Initialized
DEBUG - 2013-09-20 16:13:17 --> Security Class Initialized
DEBUG - 2013-09-20 16:13:17 --> Input Class Initialized
DEBUG - 2013-09-20 16:13:17 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:13:17 --> Language Class Initialized
DEBUG - 2013-09-20 16:13:17 --> Loader Class Initialized
DEBUG - 2013-09-20 16:13:17 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:13:17 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:13:17 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:13:17 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:13:17 --> Session Class Initialized
DEBUG - 2013-09-20 16:13:17 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:13:17 --> Session routines successfully run
DEBUG - 2013-09-20 16:13:17 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:13:17 --> Controller Class Initialized
DEBUG - 2013-09-20 16:13:17 --> Model Class Initialized
DEBUG - 2013-09-20 16:13:17 --> Model Class Initialized
DEBUG - 2013-09-20 16:13:17 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:13:17 --> after session initialization................
INFO  - 2013-09-20 16:13:17 --> after rays has been clicked.................
INFO  - 2013-09-20 16:13:17 --> last news id is 0
INFO  - 2013-09-20 16:13:17 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:13:17 --> last news id is 0
INFO  - 2013-09-20 16:13:17 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:13:17 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:13:17 --> Final output sent to browser
DEBUG - 2013-09-20 16:13:17 --> Total execution time: 0.0570
DEBUG - 2013-09-20 16:14:49 --> Config Class Initialized
DEBUG - 2013-09-20 16:14:49 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:14:49 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:14:49 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:14:49 --> URI Class Initialized
DEBUG - 2013-09-20 16:14:49 --> Router Class Initialized
DEBUG - 2013-09-20 16:14:49 --> Output Class Initialized
DEBUG - 2013-09-20 16:14:49 --> Security Class Initialized
DEBUG - 2013-09-20 16:14:49 --> Input Class Initialized
DEBUG - 2013-09-20 16:14:49 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:14:49 --> Language Class Initialized
DEBUG - 2013-09-20 16:14:49 --> Loader Class Initialized
DEBUG - 2013-09-20 16:14:49 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:14:49 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:14:49 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:14:49 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:14:49 --> Session Class Initialized
DEBUG - 2013-09-20 16:14:49 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:14:49 --> Session routines successfully run
DEBUG - 2013-09-20 16:14:49 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:14:49 --> Controller Class Initialized
DEBUG - 2013-09-20 16:14:49 --> Model Class Initialized
DEBUG - 2013-09-20 16:14:49 --> Model Class Initialized
DEBUG - 2013-09-20 16:14:49 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:14:49 --> after session initialization................
INFO  - 2013-09-20 16:14:49 --> after rays has been clicked.................
INFO  - 2013-09-20 16:14:49 --> last news id is 0
INFO  - 2013-09-20 16:14:49 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:14:49 --> last news id is 0
INFO  - 2013-09-20 16:14:49 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:14:49 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:14:49 --> Final output sent to browser
DEBUG - 2013-09-20 16:14:49 --> Total execution time: 0.0680
DEBUG - 2013-09-20 16:14:53 --> Config Class Initialized
DEBUG - 2013-09-20 16:14:53 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:14:53 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:14:53 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:14:53 --> URI Class Initialized
DEBUG - 2013-09-20 16:14:53 --> Router Class Initialized
DEBUG - 2013-09-20 16:14:53 --> Output Class Initialized
DEBUG - 2013-09-20 16:14:53 --> Security Class Initialized
DEBUG - 2013-09-20 16:14:53 --> Input Class Initialized
DEBUG - 2013-09-20 16:14:53 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:14:53 --> Language Class Initialized
DEBUG - 2013-09-20 16:14:53 --> Loader Class Initialized
DEBUG - 2013-09-20 16:14:53 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:14:53 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:14:53 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:14:53 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:14:53 --> Session Class Initialized
DEBUG - 2013-09-20 16:14:53 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:14:53 --> Session routines successfully run
DEBUG - 2013-09-20 16:14:53 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:14:53 --> Controller Class Initialized
DEBUG - 2013-09-20 16:14:53 --> Model Class Initialized
DEBUG - 2013-09-20 16:14:53 --> Model Class Initialized
DEBUG - 2013-09-20 16:14:53 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:14:53 --> after session initialization................
INFO  - 2013-09-20 16:14:53 --> after rays has been clicked.................
INFO  - 2013-09-20 16:14:53 --> last news id is 0
INFO  - 2013-09-20 16:14:53 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:14:53 --> last news id is 0
INFO  - 2013-09-20 16:14:53 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:14:53 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:14:53 --> Final output sent to browser
DEBUG - 2013-09-20 16:14:53 --> Total execution time: 0.0640
DEBUG - 2013-09-20 16:15:25 --> Config Class Initialized
DEBUG - 2013-09-20 16:15:25 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:15:25 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:15:25 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:15:25 --> URI Class Initialized
DEBUG - 2013-09-20 16:15:25 --> Router Class Initialized
DEBUG - 2013-09-20 16:15:25 --> Output Class Initialized
DEBUG - 2013-09-20 16:15:25 --> Security Class Initialized
DEBUG - 2013-09-20 16:15:25 --> Input Class Initialized
DEBUG - 2013-09-20 16:15:25 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:15:25 --> Language Class Initialized
DEBUG - 2013-09-20 16:15:25 --> Loader Class Initialized
DEBUG - 2013-09-20 16:15:25 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:15:25 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:15:25 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:15:25 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:15:25 --> Session Class Initialized
DEBUG - 2013-09-20 16:15:25 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:15:25 --> Session routines successfully run
DEBUG - 2013-09-20 16:15:25 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:15:25 --> Controller Class Initialized
DEBUG - 2013-09-20 16:15:25 --> Model Class Initialized
DEBUG - 2013-09-20 16:15:25 --> Model Class Initialized
DEBUG - 2013-09-20 16:15:25 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:15:25 --> after session initialization................
INFO  - 2013-09-20 16:15:25 --> after rays has been clicked.................
INFO  - 2013-09-20 16:15:25 --> last news id is 0
INFO  - 2013-09-20 16:15:25 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:15:25 --> last news id is 0
INFO  - 2013-09-20 16:15:25 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:15:25 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:15:25 --> Final output sent to browser
DEBUG - 2013-09-20 16:15:25 --> Total execution time: 0.0570
DEBUG - 2013-09-20 16:15:39 --> Config Class Initialized
DEBUG - 2013-09-20 16:15:39 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:15:39 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:15:39 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:15:39 --> URI Class Initialized
DEBUG - 2013-09-20 16:15:39 --> Router Class Initialized
DEBUG - 2013-09-20 16:15:39 --> Output Class Initialized
DEBUG - 2013-09-20 16:15:39 --> Security Class Initialized
DEBUG - 2013-09-20 16:15:39 --> Input Class Initialized
DEBUG - 2013-09-20 16:15:39 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:15:39 --> Language Class Initialized
DEBUG - 2013-09-20 16:15:39 --> Loader Class Initialized
DEBUG - 2013-09-20 16:15:39 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:15:39 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:15:39 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:15:39 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:15:39 --> Session Class Initialized
DEBUG - 2013-09-20 16:15:39 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:15:39 --> Session routines successfully run
DEBUG - 2013-09-20 16:15:39 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:15:39 --> Controller Class Initialized
DEBUG - 2013-09-20 16:15:39 --> Model Class Initialized
DEBUG - 2013-09-20 16:15:39 --> Model Class Initialized
DEBUG - 2013-09-20 16:15:39 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:15:39 --> after session initialization................
INFO  - 2013-09-20 16:15:39 --> after rays has been clicked.................
INFO  - 2013-09-20 16:15:39 --> last news id is 0
INFO  - 2013-09-20 16:15:39 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:15:39 --> last news id is 0
INFO  - 2013-09-20 16:15:39 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:15:39 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:15:39 --> Final output sent to browser
DEBUG - 2013-09-20 16:15:39 --> Total execution time: 0.0660
DEBUG - 2013-09-20 16:16:43 --> Config Class Initialized
DEBUG - 2013-09-20 16:16:43 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:16:43 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:16:43 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:16:43 --> URI Class Initialized
DEBUG - 2013-09-20 16:16:43 --> Router Class Initialized
DEBUG - 2013-09-20 16:16:43 --> Output Class Initialized
DEBUG - 2013-09-20 16:16:43 --> Security Class Initialized
DEBUG - 2013-09-20 16:16:43 --> Input Class Initialized
DEBUG - 2013-09-20 16:16:43 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:16:43 --> Language Class Initialized
DEBUG - 2013-09-20 16:16:43 --> Loader Class Initialized
DEBUG - 2013-09-20 16:16:43 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:16:43 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:16:43 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:16:43 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:16:43 --> Session Class Initialized
DEBUG - 2013-09-20 16:16:43 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:16:43 --> Session routines successfully run
DEBUG - 2013-09-20 16:16:43 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:16:43 --> Controller Class Initialized
DEBUG - 2013-09-20 16:16:43 --> Model Class Initialized
DEBUG - 2013-09-20 16:16:43 --> Model Class Initialized
DEBUG - 2013-09-20 16:16:43 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:16:43 --> after session initialization................
INFO  - 2013-09-20 16:16:43 --> after rays has been clicked.................
INFO  - 2013-09-20 16:16:43 --> last news id is 0
INFO  - 2013-09-20 16:16:43 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:16:43 --> last news id is 0
INFO  - 2013-09-20 16:16:43 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:16:43 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:16:43 --> Final output sent to browser
DEBUG - 2013-09-20 16:16:43 --> Total execution time: 0.0540
DEBUG - 2013-09-20 16:17:57 --> Config Class Initialized
DEBUG - 2013-09-20 16:17:57 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:17:57 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:17:57 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:17:57 --> URI Class Initialized
DEBUG - 2013-09-20 16:17:57 --> Router Class Initialized
DEBUG - 2013-09-20 16:17:57 --> Output Class Initialized
DEBUG - 2013-09-20 16:17:57 --> Security Class Initialized
DEBUG - 2013-09-20 16:17:57 --> Input Class Initialized
DEBUG - 2013-09-20 16:17:57 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:17:57 --> Language Class Initialized
DEBUG - 2013-09-20 16:17:57 --> Loader Class Initialized
DEBUG - 2013-09-20 16:17:57 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:17:57 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:17:57 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:17:57 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:17:57 --> Session Class Initialized
DEBUG - 2013-09-20 16:17:57 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:17:57 --> Session routines successfully run
DEBUG - 2013-09-20 16:17:57 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:17:57 --> Controller Class Initialized
DEBUG - 2013-09-20 16:17:57 --> Model Class Initialized
DEBUG - 2013-09-20 16:17:57 --> Model Class Initialized
DEBUG - 2013-09-20 16:17:57 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:17:57 --> after session initialization................
INFO  - 2013-09-20 16:17:57 --> after rays has been clicked.................
INFO  - 2013-09-20 16:17:57 --> last news id is 0
INFO  - 2013-09-20 16:17:57 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:17:57 --> last news id is 0
INFO  - 2013-09-20 16:17:57 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:17:57 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:17:57 --> Final output sent to browser
DEBUG - 2013-09-20 16:17:57 --> Total execution time: 0.0610
DEBUG - 2013-09-20 16:18:02 --> Config Class Initialized
DEBUG - 2013-09-20 16:18:02 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:18:02 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:18:02 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:18:02 --> URI Class Initialized
DEBUG - 2013-09-20 16:18:02 --> Router Class Initialized
DEBUG - 2013-09-20 16:18:02 --> Output Class Initialized
DEBUG - 2013-09-20 16:18:02 --> Security Class Initialized
DEBUG - 2013-09-20 16:18:02 --> Input Class Initialized
DEBUG - 2013-09-20 16:18:02 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:18:02 --> Language Class Initialized
DEBUG - 2013-09-20 16:18:02 --> Loader Class Initialized
DEBUG - 2013-09-20 16:18:02 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:18:02 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:18:02 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:18:02 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:18:02 --> Session Class Initialized
DEBUG - 2013-09-20 16:18:02 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:18:02 --> Session routines successfully run
DEBUG - 2013-09-20 16:18:02 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:18:02 --> Controller Class Initialized
DEBUG - 2013-09-20 16:18:02 --> Model Class Initialized
DEBUG - 2013-09-20 16:18:02 --> Model Class Initialized
DEBUG - 2013-09-20 16:18:02 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:18:02 --> after session initialization................
INFO  - 2013-09-20 16:18:02 --> after rays has been clicked.................
INFO  - 2013-09-20 16:18:02 --> last news id is 0
INFO  - 2013-09-20 16:18:02 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:18:02 --> last news id is 0
INFO  - 2013-09-20 16:18:02 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:18:02 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:18:02 --> Final output sent to browser
DEBUG - 2013-09-20 16:18:02 --> Total execution time: 0.0540
DEBUG - 2013-09-20 16:18:11 --> Config Class Initialized
DEBUG - 2013-09-20 16:18:11 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:18:11 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:18:11 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:18:11 --> URI Class Initialized
DEBUG - 2013-09-20 16:18:11 --> Router Class Initialized
DEBUG - 2013-09-20 16:18:11 --> Output Class Initialized
DEBUG - 2013-09-20 16:18:11 --> Security Class Initialized
DEBUG - 2013-09-20 16:18:11 --> Input Class Initialized
DEBUG - 2013-09-20 16:18:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:18:11 --> Language Class Initialized
DEBUG - 2013-09-20 16:18:11 --> Loader Class Initialized
DEBUG - 2013-09-20 16:18:11 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:18:11 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:18:11 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:18:11 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:18:11 --> Session Class Initialized
DEBUG - 2013-09-20 16:18:11 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:18:12 --> Session routines successfully run
DEBUG - 2013-09-20 16:18:12 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:18:12 --> Controller Class Initialized
DEBUG - 2013-09-20 16:18:12 --> Model Class Initialized
DEBUG - 2013-09-20 16:18:12 --> Model Class Initialized
DEBUG - 2013-09-20 16:18:12 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:18:12 --> after session initialization................
INFO  - 2013-09-20 16:18:12 --> after rays has been clicked.................
INFO  - 2013-09-20 16:18:12 --> last news id is 0
INFO  - 2013-09-20 16:18:12 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:18:12 --> last news id is 0
INFO  - 2013-09-20 16:18:12 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:18:12 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:18:12 --> Final output sent to browser
DEBUG - 2013-09-20 16:18:12 --> Total execution time: 0.0710
DEBUG - 2013-09-20 16:19:07 --> Config Class Initialized
DEBUG - 2013-09-20 16:19:07 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:19:07 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:19:07 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:19:07 --> URI Class Initialized
DEBUG - 2013-09-20 16:19:07 --> Router Class Initialized
DEBUG - 2013-09-20 16:19:07 --> Output Class Initialized
DEBUG - 2013-09-20 16:19:07 --> Security Class Initialized
DEBUG - 2013-09-20 16:19:07 --> Input Class Initialized
DEBUG - 2013-09-20 16:19:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:19:07 --> Language Class Initialized
DEBUG - 2013-09-20 16:19:07 --> Loader Class Initialized
DEBUG - 2013-09-20 16:19:07 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:19:07 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:19:07 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:19:07 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:19:07 --> Session Class Initialized
DEBUG - 2013-09-20 16:19:07 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:19:07 --> Session routines successfully run
DEBUG - 2013-09-20 16:19:07 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:19:07 --> Controller Class Initialized
DEBUG - 2013-09-20 16:19:07 --> Model Class Initialized
DEBUG - 2013-09-20 16:19:07 --> Model Class Initialized
DEBUG - 2013-09-20 16:19:07 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:19:07 --> after session initialization................
INFO  - 2013-09-20 16:19:07 --> after rays has been clicked.................
INFO  - 2013-09-20 16:19:07 --> last news id is 0
INFO  - 2013-09-20 16:19:07 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:19:07 --> last news id is 0
INFO  - 2013-09-20 16:19:07 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:19:07 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:19:07 --> Final output sent to browser
DEBUG - 2013-09-20 16:19:07 --> Total execution time: 0.0580
DEBUG - 2013-09-20 16:19:36 --> Config Class Initialized
DEBUG - 2013-09-20 16:19:36 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:19:36 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:19:36 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:19:36 --> URI Class Initialized
DEBUG - 2013-09-20 16:19:36 --> Router Class Initialized
DEBUG - 2013-09-20 16:19:36 --> Output Class Initialized
DEBUG - 2013-09-20 16:19:36 --> Security Class Initialized
DEBUG - 2013-09-20 16:19:36 --> Input Class Initialized
DEBUG - 2013-09-20 16:19:36 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:19:36 --> Language Class Initialized
DEBUG - 2013-09-20 16:19:36 --> Loader Class Initialized
DEBUG - 2013-09-20 16:19:36 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:19:36 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:19:36 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:19:36 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:19:36 --> Session Class Initialized
DEBUG - 2013-09-20 16:19:36 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:19:36 --> Session routines successfully run
DEBUG - 2013-09-20 16:19:36 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:19:36 --> Controller Class Initialized
DEBUG - 2013-09-20 16:19:36 --> Model Class Initialized
DEBUG - 2013-09-20 16:19:36 --> Model Class Initialized
DEBUG - 2013-09-20 16:19:36 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:19:36 --> after session initialization................
INFO  - 2013-09-20 16:19:36 --> after rays has been clicked.................
INFO  - 2013-09-20 16:19:36 --> last news id is 0
INFO  - 2013-09-20 16:19:36 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:19:36 --> last news id is 0
INFO  - 2013-09-20 16:19:36 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:19:36 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:19:36 --> Final output sent to browser
DEBUG - 2013-09-20 16:19:36 --> Total execution time: 0.0550
DEBUG - 2013-09-20 16:20:00 --> Config Class Initialized
DEBUG - 2013-09-20 16:20:00 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:20:00 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:20:00 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:20:00 --> URI Class Initialized
DEBUG - 2013-09-20 16:20:00 --> Router Class Initialized
DEBUG - 2013-09-20 16:20:00 --> Output Class Initialized
DEBUG - 2013-09-20 16:20:00 --> Security Class Initialized
DEBUG - 2013-09-20 16:20:00 --> Input Class Initialized
DEBUG - 2013-09-20 16:20:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:20:00 --> Language Class Initialized
DEBUG - 2013-09-20 16:20:00 --> Loader Class Initialized
DEBUG - 2013-09-20 16:20:00 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:20:00 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:20:00 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:20:00 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:20:00 --> Session Class Initialized
DEBUG - 2013-09-20 16:20:00 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:20:00 --> Session routines successfully run
DEBUG - 2013-09-20 16:20:00 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:20:00 --> Controller Class Initialized
DEBUG - 2013-09-20 16:20:00 --> Model Class Initialized
DEBUG - 2013-09-20 16:20:00 --> Model Class Initialized
DEBUG - 2013-09-20 16:20:00 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:20:00 --> after session initialization................
INFO  - 2013-09-20 16:20:00 --> after rays has been clicked.................
INFO  - 2013-09-20 16:20:00 --> last news id is 0
INFO  - 2013-09-20 16:20:00 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:20:00 --> last news id is 0
INFO  - 2013-09-20 16:20:00 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:20:00 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:20:00 --> Final output sent to browser
DEBUG - 2013-09-20 16:20:00 --> Total execution time: 0.0740
DEBUG - 2013-09-20 16:20:11 --> Config Class Initialized
DEBUG - 2013-09-20 16:20:11 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:20:11 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:20:11 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:20:11 --> URI Class Initialized
DEBUG - 2013-09-20 16:20:11 --> Router Class Initialized
DEBUG - 2013-09-20 16:20:11 --> Output Class Initialized
DEBUG - 2013-09-20 16:20:11 --> Security Class Initialized
DEBUG - 2013-09-20 16:20:11 --> Input Class Initialized
DEBUG - 2013-09-20 16:20:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:20:11 --> Language Class Initialized
DEBUG - 2013-09-20 16:20:11 --> Loader Class Initialized
DEBUG - 2013-09-20 16:20:11 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:20:11 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:20:11 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:20:11 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:20:11 --> Session Class Initialized
DEBUG - 2013-09-20 16:20:11 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:20:11 --> Session routines successfully run
DEBUG - 2013-09-20 16:20:11 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:20:11 --> Controller Class Initialized
DEBUG - 2013-09-20 16:20:11 --> Model Class Initialized
DEBUG - 2013-09-20 16:20:11 --> Model Class Initialized
DEBUG - 2013-09-20 16:20:11 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:20:11 --> after session initialization................
INFO  - 2013-09-20 16:20:11 --> after rays has been clicked.................
INFO  - 2013-09-20 16:20:11 --> last news id is 0
INFO  - 2013-09-20 16:20:11 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:20:11 --> last news id is 0
INFO  - 2013-09-20 16:20:11 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:20:11 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:20:11 --> Final output sent to browser
DEBUG - 2013-09-20 16:20:11 --> Total execution time: 0.0540
DEBUG - 2013-09-20 16:22:18 --> Config Class Initialized
DEBUG - 2013-09-20 16:22:18 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:22:18 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:22:18 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:22:18 --> URI Class Initialized
DEBUG - 2013-09-20 16:22:18 --> Router Class Initialized
DEBUG - 2013-09-20 16:22:18 --> Output Class Initialized
DEBUG - 2013-09-20 16:22:18 --> Security Class Initialized
DEBUG - 2013-09-20 16:22:18 --> Input Class Initialized
DEBUG - 2013-09-20 16:22:18 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:22:18 --> Language Class Initialized
DEBUG - 2013-09-20 16:22:18 --> Loader Class Initialized
DEBUG - 2013-09-20 16:22:18 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:22:18 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:22:18 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:22:18 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:22:18 --> Session Class Initialized
DEBUG - 2013-09-20 16:22:18 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:22:18 --> Session routines successfully run
DEBUG - 2013-09-20 16:22:18 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:22:18 --> Controller Class Initialized
DEBUG - 2013-09-20 16:22:18 --> Model Class Initialized
DEBUG - 2013-09-20 16:22:18 --> Model Class Initialized
DEBUG - 2013-09-20 16:22:18 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:22:18 --> after session initialization................
INFO  - 2013-09-20 16:22:18 --> after rays has been clicked.................
INFO  - 2013-09-20 16:22:18 --> last news id is 0
INFO  - 2013-09-20 16:22:18 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:22:18 --> last news id is 0
INFO  - 2013-09-20 16:22:18 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:22:18 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:22:18 --> Final output sent to browser
DEBUG - 2013-09-20 16:22:18 --> Total execution time: 0.0610
DEBUG - 2013-09-20 16:26:29 --> Config Class Initialized
DEBUG - 2013-09-20 16:26:29 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:26:29 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:26:29 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:26:29 --> URI Class Initialized
DEBUG - 2013-09-20 16:26:29 --> Router Class Initialized
DEBUG - 2013-09-20 16:26:29 --> Output Class Initialized
DEBUG - 2013-09-20 16:26:29 --> Security Class Initialized
DEBUG - 2013-09-20 16:26:29 --> Input Class Initialized
DEBUG - 2013-09-20 16:26:29 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:26:29 --> Language Class Initialized
DEBUG - 2013-09-20 16:26:29 --> Loader Class Initialized
DEBUG - 2013-09-20 16:26:29 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:26:29 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:26:29 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:26:29 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:26:29 --> Session Class Initialized
DEBUG - 2013-09-20 16:26:29 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:26:29 --> Session routines successfully run
DEBUG - 2013-09-20 16:26:29 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:26:29 --> Controller Class Initialized
DEBUG - 2013-09-20 16:26:29 --> Model Class Initialized
DEBUG - 2013-09-20 16:26:29 --> Model Class Initialized
DEBUG - 2013-09-20 16:26:29 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:26:29 --> after session initialization................
INFO  - 2013-09-20 16:26:29 --> after rays has been clicked.................
INFO  - 2013-09-20 16:26:29 --> last news id is 0
INFO  - 2013-09-20 16:26:29 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:26:29 --> last news id is 0
INFO  - 2013-09-20 16:26:29 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:26:29 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:26:29 --> Final output sent to browser
DEBUG - 2013-09-20 16:26:29 --> Total execution time: 0.0550
DEBUG - 2013-09-20 16:27:23 --> Config Class Initialized
DEBUG - 2013-09-20 16:27:23 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:27:23 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:27:23 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:27:23 --> URI Class Initialized
DEBUG - 2013-09-20 16:27:23 --> Router Class Initialized
DEBUG - 2013-09-20 16:27:23 --> Output Class Initialized
DEBUG - 2013-09-20 16:27:23 --> Security Class Initialized
DEBUG - 2013-09-20 16:27:23 --> Input Class Initialized
DEBUG - 2013-09-20 16:27:23 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:27:23 --> Language Class Initialized
DEBUG - 2013-09-20 16:27:23 --> Loader Class Initialized
DEBUG - 2013-09-20 16:27:23 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:27:23 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:27:23 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:27:23 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:27:23 --> Session Class Initialized
DEBUG - 2013-09-20 16:27:23 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:27:23 --> Session routines successfully run
DEBUG - 2013-09-20 16:27:23 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:27:23 --> Controller Class Initialized
DEBUG - 2013-09-20 16:27:23 --> Model Class Initialized
DEBUG - 2013-09-20 16:27:23 --> Model Class Initialized
DEBUG - 2013-09-20 16:27:23 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:27:23 --> after session initialization................
INFO  - 2013-09-20 16:27:23 --> after rays has been clicked.................
INFO  - 2013-09-20 16:27:23 --> last news id is 0
INFO  - 2013-09-20 16:27:23 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:27:23 --> last news id is 0
INFO  - 2013-09-20 16:27:23 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:27:23 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:27:23 --> Final output sent to browser
DEBUG - 2013-09-20 16:27:23 --> Total execution time: 0.0660
DEBUG - 2013-09-20 16:27:54 --> Config Class Initialized
DEBUG - 2013-09-20 16:27:54 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:27:54 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:27:54 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:27:54 --> URI Class Initialized
DEBUG - 2013-09-20 16:27:54 --> Router Class Initialized
DEBUG - 2013-09-20 16:27:54 --> Output Class Initialized
DEBUG - 2013-09-20 16:27:54 --> Security Class Initialized
DEBUG - 2013-09-20 16:27:54 --> Input Class Initialized
DEBUG - 2013-09-20 16:27:54 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:27:54 --> Language Class Initialized
DEBUG - 2013-09-20 16:27:54 --> Loader Class Initialized
DEBUG - 2013-09-20 16:27:54 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:27:54 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:27:54 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:27:54 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:27:54 --> Session Class Initialized
DEBUG - 2013-09-20 16:27:54 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:27:54 --> Session routines successfully run
DEBUG - 2013-09-20 16:27:54 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:27:54 --> Controller Class Initialized
DEBUG - 2013-09-20 16:27:54 --> Model Class Initialized
DEBUG - 2013-09-20 16:27:54 --> Model Class Initialized
DEBUG - 2013-09-20 16:27:54 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:27:54 --> after session initialization................
ERROR - 2013-09-20 16:27:54 --> Severity: Warning  --> Missing argument 1 for user_authorization::index() C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 69
ERROR - 2013-09-20 16:27:54 --> Severity: Notice  --> Undefined variable: message C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 71
DEBUG - 2013-09-20 16:27:54 --> Config Class Initialized
DEBUG - 2013-09-20 16:27:54 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:27:54 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:27:54 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:27:54 --> URI Class Initialized
DEBUG - 2013-09-20 16:27:54 --> Router Class Initialized
DEBUG - 2013-09-20 16:27:54 --> No URI present. Default controller set.
DEBUG - 2013-09-20 16:27:54 --> Output Class Initialized
DEBUG - 2013-09-20 16:27:54 --> Security Class Initialized
DEBUG - 2013-09-20 16:27:54 --> Input Class Initialized
DEBUG - 2013-09-20 16:27:54 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:27:54 --> Language Class Initialized
DEBUG - 2013-09-20 16:27:54 --> Loader Class Initialized
DEBUG - 2013-09-20 16:27:54 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:27:54 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:27:54 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:27:54 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:27:54 --> Session Class Initialized
DEBUG - 2013-09-20 16:27:54 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:27:54 --> Session routines successfully run
DEBUG - 2013-09-20 16:27:54 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:27:54 --> Controller Class Initialized
INFO  - 2013-09-20 16:27:54 --> the form message==>
INFO  - 2013-09-20 16:27:54 --> after the retrieving session list.................//////////
DEBUG - 2013-09-20 16:27:54 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-20 16:27:54 --> Final output sent to browser
DEBUG - 2013-09-20 16:27:54 --> Total execution time: 0.0440
DEBUG - 2013-09-20 16:27:55 --> Config Class Initialized
DEBUG - 2013-09-20 16:27:55 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:27:55 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:27:55 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:27:55 --> URI Class Initialized
DEBUG - 2013-09-20 16:27:55 --> Router Class Initialized
DEBUG - 2013-09-20 16:27:55 --> Output Class Initialized
DEBUG - 2013-09-20 16:27:55 --> Security Class Initialized
DEBUG - 2013-09-20 16:27:55 --> Input Class Initialized
DEBUG - 2013-09-20 16:27:55 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:27:55 --> Language Class Initialized
DEBUG - 2013-09-20 16:27:55 --> Loader Class Initialized
DEBUG - 2013-09-20 16:27:55 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:27:55 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:27:55 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:27:55 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:27:55 --> Session Class Initialized
DEBUG - 2013-09-20 16:27:55 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:27:55 --> Session routines successfully run
DEBUG - 2013-09-20 16:27:55 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:27:55 --> Controller Class Initialized
DEBUG - 2013-09-20 16:27:55 --> Model Class Initialized
DEBUG - 2013-09-20 16:27:55 --> Model Class Initialized
DEBUG - 2013-09-20 16:27:55 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:27:55 --> after session initialization................
INFO  - 2013-09-20 16:27:55 --> after rays has been clicked.................
INFO  - 2013-09-20 16:27:55 --> last news id is 0
INFO  - 2013-09-20 16:27:55 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:27:55 --> last news id is 0
INFO  - 2013-09-20 16:27:55 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:27:55 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:27:55 --> Final output sent to browser
DEBUG - 2013-09-20 16:27:55 --> Total execution time: 0.0520
DEBUG - 2013-09-20 16:28:26 --> Config Class Initialized
DEBUG - 2013-09-20 16:28:26 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:28:26 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:28:26 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:28:26 --> URI Class Initialized
DEBUG - 2013-09-20 16:28:26 --> Router Class Initialized
DEBUG - 2013-09-20 16:28:26 --> Output Class Initialized
DEBUG - 2013-09-20 16:28:26 --> Security Class Initialized
DEBUG - 2013-09-20 16:28:26 --> Input Class Initialized
DEBUG - 2013-09-20 16:28:26 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:28:26 --> Language Class Initialized
DEBUG - 2013-09-20 16:28:26 --> Loader Class Initialized
DEBUG - 2013-09-20 16:28:26 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:28:26 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:28:26 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:28:26 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:28:26 --> Session Class Initialized
DEBUG - 2013-09-20 16:28:26 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:28:26 --> Session routines successfully run
DEBUG - 2013-09-20 16:28:26 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:28:26 --> Controller Class Initialized
DEBUG - 2013-09-20 16:28:26 --> Model Class Initialized
DEBUG - 2013-09-20 16:28:26 --> Model Class Initialized
DEBUG - 2013-09-20 16:28:26 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:28:26 --> after session initialization................
ERROR - 2013-09-20 16:28:26 --> Severity: Warning  --> Missing argument 1 for user_authorization::index() C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 69
ERROR - 2013-09-20 16:28:26 --> Severity: Notice  --> Undefined variable: message C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 71
DEBUG - 2013-09-20 16:28:27 --> Config Class Initialized
DEBUG - 2013-09-20 16:28:27 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:28:27 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:28:27 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:28:27 --> URI Class Initialized
DEBUG - 2013-09-20 16:28:27 --> Router Class Initialized
DEBUG - 2013-09-20 16:28:27 --> No URI present. Default controller set.
DEBUG - 2013-09-20 16:28:27 --> Output Class Initialized
DEBUG - 2013-09-20 16:28:27 --> Security Class Initialized
DEBUG - 2013-09-20 16:28:27 --> Input Class Initialized
DEBUG - 2013-09-20 16:28:27 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:28:27 --> Language Class Initialized
DEBUG - 2013-09-20 16:28:27 --> Loader Class Initialized
DEBUG - 2013-09-20 16:28:27 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:28:27 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:28:27 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:28:27 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:28:27 --> Session Class Initialized
DEBUG - 2013-09-20 16:28:27 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:28:27 --> Session routines successfully run
DEBUG - 2013-09-20 16:28:27 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:28:27 --> Controller Class Initialized
INFO  - 2013-09-20 16:28:27 --> the form message==>
INFO  - 2013-09-20 16:28:27 --> after the retrieving session list.................//////////
DEBUG - 2013-09-20 16:28:27 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-20 16:28:27 --> Final output sent to browser
DEBUG - 2013-09-20 16:28:27 --> Total execution time: 0.0460
DEBUG - 2013-09-20 16:28:28 --> Config Class Initialized
DEBUG - 2013-09-20 16:28:28 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:28:28 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:28:28 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:28:28 --> URI Class Initialized
DEBUG - 2013-09-20 16:28:28 --> Router Class Initialized
DEBUG - 2013-09-20 16:28:28 --> Output Class Initialized
DEBUG - 2013-09-20 16:28:28 --> Security Class Initialized
DEBUG - 2013-09-20 16:28:28 --> Input Class Initialized
DEBUG - 2013-09-20 16:28:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:28:28 --> Language Class Initialized
DEBUG - 2013-09-20 16:28:28 --> Loader Class Initialized
DEBUG - 2013-09-20 16:28:28 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:28:28 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:28:28 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:28:28 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:28:28 --> Session Class Initialized
DEBUG - 2013-09-20 16:28:28 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:28:28 --> Session routines successfully run
DEBUG - 2013-09-20 16:28:28 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:28:28 --> Controller Class Initialized
DEBUG - 2013-09-20 16:28:28 --> Model Class Initialized
DEBUG - 2013-09-20 16:28:28 --> Model Class Initialized
DEBUG - 2013-09-20 16:28:28 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:28:28 --> after session initialization................
INFO  - 2013-09-20 16:28:28 --> after rays has been clicked.................
INFO  - 2013-09-20 16:28:28 --> last news id is 0
INFO  - 2013-09-20 16:28:28 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:28:28 --> last news id is 0
INFO  - 2013-09-20 16:28:28 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:28:28 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:28:28 --> Final output sent to browser
DEBUG - 2013-09-20 16:28:28 --> Total execution time: 0.0550
DEBUG - 2013-09-20 16:28:46 --> Config Class Initialized
DEBUG - 2013-09-20 16:28:46 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:28:46 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:28:46 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:28:46 --> URI Class Initialized
DEBUG - 2013-09-20 16:28:46 --> Router Class Initialized
DEBUG - 2013-09-20 16:28:46 --> Output Class Initialized
DEBUG - 2013-09-20 16:28:46 --> Security Class Initialized
DEBUG - 2013-09-20 16:28:46 --> Input Class Initialized
DEBUG - 2013-09-20 16:28:46 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:28:46 --> Language Class Initialized
DEBUG - 2013-09-20 16:28:46 --> Loader Class Initialized
DEBUG - 2013-09-20 16:28:46 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:28:46 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:28:46 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:28:46 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:28:46 --> Session Class Initialized
DEBUG - 2013-09-20 16:28:46 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:28:46 --> Session routines successfully run
DEBUG - 2013-09-20 16:28:46 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:28:46 --> Controller Class Initialized
DEBUG - 2013-09-20 16:28:46 --> Model Class Initialized
DEBUG - 2013-09-20 16:28:46 --> Model Class Initialized
DEBUG - 2013-09-20 16:28:46 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:28:46 --> after session initialization................
ERROR - 2013-09-20 16:28:46 --> Severity: Warning  --> Missing argument 1 for user_authorization::index() C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 69
ERROR - 2013-09-20 16:28:46 --> Severity: Notice  --> Undefined variable: message C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 71
DEBUG - 2013-09-20 16:28:46 --> Config Class Initialized
DEBUG - 2013-09-20 16:28:46 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:28:46 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:28:46 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:28:46 --> URI Class Initialized
DEBUG - 2013-09-20 16:28:46 --> Router Class Initialized
DEBUG - 2013-09-20 16:28:46 --> No URI present. Default controller set.
DEBUG - 2013-09-20 16:28:46 --> Output Class Initialized
DEBUG - 2013-09-20 16:28:46 --> Security Class Initialized
DEBUG - 2013-09-20 16:28:46 --> Input Class Initialized
DEBUG - 2013-09-20 16:28:46 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:28:46 --> Language Class Initialized
DEBUG - 2013-09-20 16:28:46 --> Loader Class Initialized
DEBUG - 2013-09-20 16:28:46 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:28:46 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:28:46 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:28:46 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:28:46 --> Session Class Initialized
DEBUG - 2013-09-20 16:28:46 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:28:46 --> Session routines successfully run
DEBUG - 2013-09-20 16:28:46 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:28:46 --> Controller Class Initialized
INFO  - 2013-09-20 16:28:46 --> the form message==>
INFO  - 2013-09-20 16:28:46 --> after the retrieving session list.................//////////
DEBUG - 2013-09-20 16:28:46 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-20 16:28:46 --> Final output sent to browser
DEBUG - 2013-09-20 16:28:46 --> Total execution time: 0.0450
DEBUG - 2013-09-20 16:28:48 --> Config Class Initialized
DEBUG - 2013-09-20 16:28:48 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:28:48 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:28:48 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:28:48 --> URI Class Initialized
DEBUG - 2013-09-20 16:28:48 --> Router Class Initialized
DEBUG - 2013-09-20 16:28:48 --> Output Class Initialized
DEBUG - 2013-09-20 16:28:48 --> Security Class Initialized
DEBUG - 2013-09-20 16:28:48 --> Input Class Initialized
DEBUG - 2013-09-20 16:28:48 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:28:48 --> Language Class Initialized
DEBUG - 2013-09-20 16:28:48 --> Loader Class Initialized
DEBUG - 2013-09-20 16:28:48 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:28:48 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:28:48 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:28:48 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:28:48 --> Session Class Initialized
DEBUG - 2013-09-20 16:28:48 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:28:48 --> Session routines successfully run
DEBUG - 2013-09-20 16:28:48 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:28:48 --> Controller Class Initialized
DEBUG - 2013-09-20 16:28:48 --> Model Class Initialized
DEBUG - 2013-09-20 16:28:48 --> Model Class Initialized
DEBUG - 2013-09-20 16:28:48 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:28:48 --> after session initialization................
INFO  - 2013-09-20 16:28:48 --> after rays has been clicked.................
INFO  - 2013-09-20 16:28:48 --> last news id is 0
INFO  - 2013-09-20 16:28:48 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:28:48 --> last news id is 0
INFO  - 2013-09-20 16:28:48 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:28:48 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:28:48 --> Final output sent to browser
DEBUG - 2013-09-20 16:28:48 --> Total execution time: 0.0600
DEBUG - 2013-09-20 16:28:52 --> Config Class Initialized
DEBUG - 2013-09-20 16:28:52 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:28:52 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:28:52 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:28:52 --> URI Class Initialized
DEBUG - 2013-09-20 16:28:52 --> Router Class Initialized
DEBUG - 2013-09-20 16:28:52 --> Output Class Initialized
DEBUG - 2013-09-20 16:28:52 --> Security Class Initialized
DEBUG - 2013-09-20 16:28:52 --> Input Class Initialized
DEBUG - 2013-09-20 16:28:52 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:28:52 --> Language Class Initialized
DEBUG - 2013-09-20 16:28:52 --> Loader Class Initialized
DEBUG - 2013-09-20 16:28:52 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:28:52 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:28:52 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:28:52 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:28:52 --> Session Class Initialized
DEBUG - 2013-09-20 16:28:52 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:28:52 --> Session routines successfully run
DEBUG - 2013-09-20 16:28:52 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:28:52 --> Controller Class Initialized
DEBUG - 2013-09-20 16:28:52 --> Model Class Initialized
DEBUG - 2013-09-20 16:28:52 --> Model Class Initialized
DEBUG - 2013-09-20 16:28:52 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:28:52 --> after session initialization................
INFO  - 2013-09-20 16:28:52 --> after rays has been clicked.................
INFO  - 2013-09-20 16:28:52 --> last news id is 0
INFO  - 2013-09-20 16:28:52 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:28:52 --> last news id is 0
INFO  - 2013-09-20 16:28:52 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:28:52 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:28:52 --> Final output sent to browser
DEBUG - 2013-09-20 16:28:52 --> Total execution time: 0.0630
DEBUG - 2013-09-20 16:30:01 --> Config Class Initialized
DEBUG - 2013-09-20 16:30:01 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:30:01 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:30:01 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:30:01 --> URI Class Initialized
DEBUG - 2013-09-20 16:30:01 --> Router Class Initialized
DEBUG - 2013-09-20 16:30:01 --> Output Class Initialized
DEBUG - 2013-09-20 16:30:01 --> Security Class Initialized
DEBUG - 2013-09-20 16:30:01 --> Input Class Initialized
DEBUG - 2013-09-20 16:30:01 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:30:01 --> Language Class Initialized
DEBUG - 2013-09-20 16:30:01 --> Loader Class Initialized
DEBUG - 2013-09-20 16:30:01 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:30:01 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:30:01 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:30:01 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:30:01 --> Session Class Initialized
DEBUG - 2013-09-20 16:30:01 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:30:01 --> Session routines successfully run
DEBUG - 2013-09-20 16:30:01 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:30:01 --> Controller Class Initialized
DEBUG - 2013-09-20 16:30:01 --> Model Class Initialized
DEBUG - 2013-09-20 16:30:01 --> Model Class Initialized
DEBUG - 2013-09-20 16:30:01 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:30:01 --> after session initialization................
INFO  - 2013-09-20 16:30:01 --> after rays has been clicked.................
INFO  - 2013-09-20 16:30:01 --> last news id is 0
INFO  - 2013-09-20 16:30:01 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:30:01 --> last news id is 0
INFO  - 2013-09-20 16:30:01 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:30:01 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:30:01 --> Final output sent to browser
DEBUG - 2013-09-20 16:30:01 --> Total execution time: 0.0690
DEBUG - 2013-09-20 16:30:15 --> Config Class Initialized
DEBUG - 2013-09-20 16:30:15 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:30:15 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:30:15 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:30:15 --> URI Class Initialized
DEBUG - 2013-09-20 16:30:15 --> Router Class Initialized
DEBUG - 2013-09-20 16:30:15 --> Output Class Initialized
DEBUG - 2013-09-20 16:30:15 --> Security Class Initialized
DEBUG - 2013-09-20 16:30:15 --> Input Class Initialized
DEBUG - 2013-09-20 16:30:15 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:30:15 --> Language Class Initialized
DEBUG - 2013-09-20 16:30:15 --> Loader Class Initialized
DEBUG - 2013-09-20 16:30:15 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:30:15 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:30:15 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:30:15 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:30:15 --> Session Class Initialized
DEBUG - 2013-09-20 16:30:15 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:30:15 --> Session routines successfully run
DEBUG - 2013-09-20 16:30:15 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:30:15 --> Controller Class Initialized
DEBUG - 2013-09-20 16:30:15 --> Model Class Initialized
DEBUG - 2013-09-20 16:30:15 --> Model Class Initialized
DEBUG - 2013-09-20 16:30:15 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:30:15 --> after session initialization................
INFO  - 2013-09-20 16:30:15 --> after rays has been clicked.................
INFO  - 2013-09-20 16:30:15 --> last news id is 0
INFO  - 2013-09-20 16:30:15 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:30:15 --> last news id is 0
INFO  - 2013-09-20 16:30:15 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:30:15 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:30:15 --> Final output sent to browser
DEBUG - 2013-09-20 16:30:15 --> Total execution time: 0.0660
DEBUG - 2013-09-20 16:30:21 --> Config Class Initialized
DEBUG - 2013-09-20 16:30:21 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:30:21 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:30:21 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:30:21 --> URI Class Initialized
DEBUG - 2013-09-20 16:30:21 --> Router Class Initialized
DEBUG - 2013-09-20 16:30:21 --> Output Class Initialized
DEBUG - 2013-09-20 16:30:21 --> Security Class Initialized
DEBUG - 2013-09-20 16:30:21 --> Input Class Initialized
DEBUG - 2013-09-20 16:30:21 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:30:21 --> Language Class Initialized
DEBUG - 2013-09-20 16:30:21 --> Loader Class Initialized
DEBUG - 2013-09-20 16:30:21 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:30:21 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:30:21 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:30:21 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:30:21 --> Session Class Initialized
DEBUG - 2013-09-20 16:30:21 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:30:21 --> Session routines successfully run
DEBUG - 2013-09-20 16:30:21 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:30:21 --> Controller Class Initialized
DEBUG - 2013-09-20 16:30:21 --> Model Class Initialized
DEBUG - 2013-09-20 16:30:21 --> Model Class Initialized
DEBUG - 2013-09-20 16:30:21 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:30:21 --> after session initialization................
INFO  - 2013-09-20 16:30:21 --> last news id is 1
INFO  - 2013-09-20 16:30:21 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:30:21 --> last news id is 7
INFO  - 2013-09-20 16:30:21 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:30:21 --> Final output sent to browser
DEBUG - 2013-09-20 16:30:21 --> Total execution time: 0.0580
DEBUG - 2013-09-20 16:30:33 --> Config Class Initialized
DEBUG - 2013-09-20 16:30:33 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:30:33 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:30:33 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:30:33 --> URI Class Initialized
DEBUG - 2013-09-20 16:30:33 --> Router Class Initialized
DEBUG - 2013-09-20 16:30:33 --> Output Class Initialized
DEBUG - 2013-09-20 16:30:33 --> Security Class Initialized
DEBUG - 2013-09-20 16:30:33 --> Input Class Initialized
DEBUG - 2013-09-20 16:30:33 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:30:33 --> Language Class Initialized
DEBUG - 2013-09-20 16:30:33 --> Loader Class Initialized
DEBUG - 2013-09-20 16:30:33 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:30:33 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:30:33 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:30:33 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:30:33 --> Session Class Initialized
DEBUG - 2013-09-20 16:30:33 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:30:33 --> Session routines successfully run
DEBUG - 2013-09-20 16:30:33 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:30:33 --> Controller Class Initialized
DEBUG - 2013-09-20 16:30:33 --> Model Class Initialized
DEBUG - 2013-09-20 16:30:33 --> Model Class Initialized
DEBUG - 2013-09-20 16:30:33 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:30:33 --> after session initialization................
INFO  - 2013-09-20 16:30:33 --> last news id is 1
INFO  - 2013-09-20 16:30:33 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:30:33 --> last news id is 7
INFO  - 2013-09-20 16:30:33 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:30:33 --> Final output sent to browser
DEBUG - 2013-09-20 16:30:33 --> Total execution time: 0.0540
DEBUG - 2013-09-20 16:30:38 --> Config Class Initialized
DEBUG - 2013-09-20 16:30:38 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:30:38 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:30:38 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:30:38 --> URI Class Initialized
DEBUG - 2013-09-20 16:30:38 --> Router Class Initialized
DEBUG - 2013-09-20 16:30:38 --> Output Class Initialized
DEBUG - 2013-09-20 16:30:38 --> Security Class Initialized
DEBUG - 2013-09-20 16:30:38 --> Input Class Initialized
DEBUG - 2013-09-20 16:30:38 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:30:38 --> Language Class Initialized
DEBUG - 2013-09-20 16:30:38 --> Loader Class Initialized
DEBUG - 2013-09-20 16:30:38 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:30:38 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:30:38 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:30:38 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:30:38 --> Session Class Initialized
DEBUG - 2013-09-20 16:30:38 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:30:38 --> Session routines successfully run
DEBUG - 2013-09-20 16:30:38 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:30:38 --> Controller Class Initialized
DEBUG - 2013-09-20 16:30:38 --> Model Class Initialized
DEBUG - 2013-09-20 16:30:38 --> Model Class Initialized
DEBUG - 2013-09-20 16:30:38 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:30:38 --> after session initialization................
INFO  - 2013-09-20 16:30:38 --> last news id is 1
INFO  - 2013-09-20 16:30:38 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:30:38 --> last news id is 7
INFO  - 2013-09-20 16:30:38 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:30:38 --> Final output sent to browser
DEBUG - 2013-09-20 16:30:38 --> Total execution time: 0.0510
DEBUG - 2013-09-20 16:31:48 --> Config Class Initialized
DEBUG - 2013-09-20 16:31:48 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:31:48 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:31:48 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:31:48 --> URI Class Initialized
DEBUG - 2013-09-20 16:31:48 --> Router Class Initialized
DEBUG - 2013-09-20 16:31:48 --> Output Class Initialized
DEBUG - 2013-09-20 16:31:48 --> Security Class Initialized
DEBUG - 2013-09-20 16:31:48 --> Input Class Initialized
DEBUG - 2013-09-20 16:31:48 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:31:48 --> Language Class Initialized
DEBUG - 2013-09-20 16:31:48 --> Loader Class Initialized
DEBUG - 2013-09-20 16:31:48 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:31:48 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:31:48 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:31:48 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:31:48 --> Session Class Initialized
DEBUG - 2013-09-20 16:31:48 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:31:48 --> Session routines successfully run
DEBUG - 2013-09-20 16:31:48 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:31:48 --> Controller Class Initialized
DEBUG - 2013-09-20 16:31:48 --> Model Class Initialized
DEBUG - 2013-09-20 16:31:48 --> Model Class Initialized
DEBUG - 2013-09-20 16:31:48 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:31:48 --> after session initialization................
INFO  - 2013-09-20 16:31:48 --> after rays has been clicked.................
INFO  - 2013-09-20 16:31:48 --> last news id is 0
INFO  - 2013-09-20 16:31:48 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:31:48 --> last news id is 0
INFO  - 2013-09-20 16:31:48 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:31:48 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:31:48 --> Final output sent to browser
DEBUG - 2013-09-20 16:31:48 --> Total execution time: 0.0600
DEBUG - 2013-09-20 16:31:50 --> Config Class Initialized
DEBUG - 2013-09-20 16:31:50 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:31:50 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:31:50 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:31:50 --> URI Class Initialized
DEBUG - 2013-09-20 16:31:50 --> Router Class Initialized
DEBUG - 2013-09-20 16:31:50 --> Output Class Initialized
DEBUG - 2013-09-20 16:31:50 --> Security Class Initialized
DEBUG - 2013-09-20 16:31:50 --> Input Class Initialized
DEBUG - 2013-09-20 16:31:50 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:31:50 --> Language Class Initialized
DEBUG - 2013-09-20 16:31:50 --> Loader Class Initialized
DEBUG - 2013-09-20 16:31:51 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:31:51 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:31:51 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:31:51 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:31:51 --> Session Class Initialized
DEBUG - 2013-09-20 16:31:51 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:31:51 --> Session routines successfully run
DEBUG - 2013-09-20 16:31:51 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:31:51 --> Controller Class Initialized
DEBUG - 2013-09-20 16:31:51 --> Model Class Initialized
DEBUG - 2013-09-20 16:31:51 --> Model Class Initialized
DEBUG - 2013-09-20 16:31:51 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:31:51 --> after session initialization................
INFO  - 2013-09-20 16:31:51 --> last news id is 1
INFO  - 2013-09-20 16:31:51 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:31:51 --> last news id is 7
INFO  - 2013-09-20 16:31:51 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:31:51 --> Final output sent to browser
DEBUG - 2013-09-20 16:31:51 --> Total execution time: 0.0500
DEBUG - 2013-09-20 16:32:01 --> Config Class Initialized
DEBUG - 2013-09-20 16:32:01 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:32:01 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:32:01 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:32:01 --> URI Class Initialized
DEBUG - 2013-09-20 16:32:01 --> Router Class Initialized
DEBUG - 2013-09-20 16:32:01 --> Output Class Initialized
DEBUG - 2013-09-20 16:32:01 --> Security Class Initialized
DEBUG - 2013-09-20 16:32:01 --> Input Class Initialized
DEBUG - 2013-09-20 16:32:01 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:32:01 --> Language Class Initialized
DEBUG - 2013-09-20 16:32:01 --> Loader Class Initialized
DEBUG - 2013-09-20 16:32:01 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:32:01 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:32:01 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:32:01 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:32:01 --> Session Class Initialized
DEBUG - 2013-09-20 16:32:01 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:32:01 --> Session routines successfully run
DEBUG - 2013-09-20 16:32:01 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:32:01 --> Controller Class Initialized
DEBUG - 2013-09-20 16:32:01 --> Model Class Initialized
DEBUG - 2013-09-20 16:32:01 --> Model Class Initialized
DEBUG - 2013-09-20 16:32:01 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:32:01 --> after session initialization................
INFO  - 2013-09-20 16:32:01 --> last news id is 1
INFO  - 2013-09-20 16:32:01 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:32:01 --> last news id is 7
INFO  - 2013-09-20 16:32:01 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:32:01 --> Final output sent to browser
DEBUG - 2013-09-20 16:32:01 --> Total execution time: 0.0630
DEBUG - 2013-09-20 16:35:13 --> Config Class Initialized
DEBUG - 2013-09-20 16:35:13 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:35:13 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:35:13 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:35:13 --> URI Class Initialized
DEBUG - 2013-09-20 16:35:13 --> Router Class Initialized
DEBUG - 2013-09-20 16:35:13 --> Output Class Initialized
DEBUG - 2013-09-20 16:35:13 --> Security Class Initialized
DEBUG - 2013-09-20 16:35:13 --> Input Class Initialized
DEBUG - 2013-09-20 16:35:13 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:35:13 --> Language Class Initialized
DEBUG - 2013-09-20 16:35:13 --> Loader Class Initialized
DEBUG - 2013-09-20 16:35:13 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:35:13 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:35:13 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:35:13 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:35:13 --> Session Class Initialized
DEBUG - 2013-09-20 16:35:13 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:35:13 --> Session routines successfully run
DEBUG - 2013-09-20 16:35:13 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:35:13 --> Controller Class Initialized
DEBUG - 2013-09-20 16:35:13 --> Model Class Initialized
DEBUG - 2013-09-20 16:35:13 --> Model Class Initialized
DEBUG - 2013-09-20 16:35:13 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:35:13 --> after session initialization................
INFO  - 2013-09-20 16:35:13 --> after rays has been clicked.................
INFO  - 2013-09-20 16:35:13 --> last news id is 0
INFO  - 2013-09-20 16:35:13 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:35:13 --> last news id is 0
INFO  - 2013-09-20 16:35:13 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:35:13 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:35:13 --> Final output sent to browser
DEBUG - 2013-09-20 16:35:13 --> Total execution time: 0.0680
DEBUG - 2013-09-20 16:35:15 --> Config Class Initialized
DEBUG - 2013-09-20 16:35:15 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:35:15 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:35:15 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:35:15 --> URI Class Initialized
DEBUG - 2013-09-20 16:35:15 --> Router Class Initialized
DEBUG - 2013-09-20 16:35:15 --> Output Class Initialized
DEBUG - 2013-09-20 16:35:15 --> Security Class Initialized
DEBUG - 2013-09-20 16:35:15 --> Input Class Initialized
DEBUG - 2013-09-20 16:35:15 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:35:15 --> Language Class Initialized
DEBUG - 2013-09-20 16:35:15 --> Loader Class Initialized
DEBUG - 2013-09-20 16:35:15 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:35:15 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:35:15 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:35:15 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:35:15 --> Session Class Initialized
DEBUG - 2013-09-20 16:35:15 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:35:15 --> Session routines successfully run
DEBUG - 2013-09-20 16:35:15 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:35:15 --> Controller Class Initialized
DEBUG - 2013-09-20 16:35:15 --> Model Class Initialized
DEBUG - 2013-09-20 16:35:15 --> Model Class Initialized
DEBUG - 2013-09-20 16:35:15 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:35:15 --> after session initialization................
ERROR - 2013-09-20 16:35:15 --> Severity: Warning  --> Missing argument 1 for user_authorization::index() C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 69
ERROR - 2013-09-20 16:35:15 --> Severity: Notice  --> Undefined variable: message C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 71
DEBUG - 2013-09-20 16:35:15 --> Config Class Initialized
DEBUG - 2013-09-20 16:35:15 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:35:15 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:35:15 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:35:15 --> URI Class Initialized
DEBUG - 2013-09-20 16:35:15 --> Router Class Initialized
DEBUG - 2013-09-20 16:35:15 --> No URI present. Default controller set.
DEBUG - 2013-09-20 16:35:15 --> Output Class Initialized
DEBUG - 2013-09-20 16:35:15 --> Security Class Initialized
DEBUG - 2013-09-20 16:35:15 --> Input Class Initialized
DEBUG - 2013-09-20 16:35:15 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:35:15 --> Language Class Initialized
DEBUG - 2013-09-20 16:35:15 --> Loader Class Initialized
DEBUG - 2013-09-20 16:35:15 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:35:15 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:35:15 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:35:15 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:35:15 --> Session Class Initialized
DEBUG - 2013-09-20 16:35:15 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:35:15 --> Session routines successfully run
DEBUG - 2013-09-20 16:35:15 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:35:15 --> Controller Class Initialized
INFO  - 2013-09-20 16:35:15 --> the form message==>
INFO  - 2013-09-20 16:35:15 --> after the retrieving session list.................//////////
DEBUG - 2013-09-20 16:35:15 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-20 16:35:15 --> Final output sent to browser
DEBUG - 2013-09-20 16:35:15 --> Total execution time: 0.0540
DEBUG - 2013-09-20 16:35:16 --> Config Class Initialized
DEBUG - 2013-09-20 16:35:16 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:35:16 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:35:16 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:35:16 --> URI Class Initialized
DEBUG - 2013-09-20 16:35:16 --> Router Class Initialized
DEBUG - 2013-09-20 16:35:16 --> Output Class Initialized
DEBUG - 2013-09-20 16:35:16 --> Security Class Initialized
DEBUG - 2013-09-20 16:35:16 --> Input Class Initialized
DEBUG - 2013-09-20 16:35:16 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:35:16 --> Language Class Initialized
DEBUG - 2013-09-20 16:35:16 --> Loader Class Initialized
DEBUG - 2013-09-20 16:35:16 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:35:16 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:35:16 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:35:16 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:35:16 --> Session Class Initialized
DEBUG - 2013-09-20 16:35:16 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:35:16 --> Session routines successfully run
DEBUG - 2013-09-20 16:35:16 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:35:16 --> Controller Class Initialized
DEBUG - 2013-09-20 16:35:16 --> Model Class Initialized
DEBUG - 2013-09-20 16:35:16 --> Model Class Initialized
DEBUG - 2013-09-20 16:35:16 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:35:16 --> after session initialization................
INFO  - 2013-09-20 16:35:16 --> after rays has been clicked.................
INFO  - 2013-09-20 16:35:16 --> last news id is 0
INFO  - 2013-09-20 16:35:16 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:35:16 --> last news id is 0
INFO  - 2013-09-20 16:35:16 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:35:16 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:35:16 --> Final output sent to browser
DEBUG - 2013-09-20 16:35:16 --> Total execution time: 0.0540
DEBUG - 2013-09-20 16:35:20 --> Config Class Initialized
DEBUG - 2013-09-20 16:35:20 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:35:20 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:35:20 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:35:20 --> URI Class Initialized
DEBUG - 2013-09-20 16:35:20 --> Router Class Initialized
DEBUG - 2013-09-20 16:35:20 --> Output Class Initialized
DEBUG - 2013-09-20 16:35:20 --> Security Class Initialized
DEBUG - 2013-09-20 16:35:20 --> Input Class Initialized
DEBUG - 2013-09-20 16:35:20 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:35:20 --> Language Class Initialized
DEBUG - 2013-09-20 16:35:20 --> Loader Class Initialized
DEBUG - 2013-09-20 16:35:20 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:35:20 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:35:20 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:35:20 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:35:20 --> Session Class Initialized
DEBUG - 2013-09-20 16:35:20 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:35:20 --> Session routines successfully run
DEBUG - 2013-09-20 16:35:20 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:35:20 --> Controller Class Initialized
DEBUG - 2013-09-20 16:35:20 --> Model Class Initialized
DEBUG - 2013-09-20 16:35:20 --> Model Class Initialized
DEBUG - 2013-09-20 16:35:20 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:35:20 --> after session initialization................
INFO  - 2013-09-20 16:35:20 --> last news id is 1
INFO  - 2013-09-20 16:35:20 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:35:20 --> last news id is 7
INFO  - 2013-09-20 16:35:20 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:35:20 --> Final output sent to browser
DEBUG - 2013-09-20 16:35:20 --> Total execution time: 0.0530
DEBUG - 2013-09-20 16:35:25 --> Config Class Initialized
DEBUG - 2013-09-20 16:35:25 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:35:25 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:35:25 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:35:25 --> URI Class Initialized
DEBUG - 2013-09-20 16:35:25 --> Router Class Initialized
DEBUG - 2013-09-20 16:35:25 --> Output Class Initialized
DEBUG - 2013-09-20 16:35:25 --> Security Class Initialized
DEBUG - 2013-09-20 16:35:25 --> Input Class Initialized
DEBUG - 2013-09-20 16:35:25 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:35:25 --> Language Class Initialized
DEBUG - 2013-09-20 16:35:25 --> Loader Class Initialized
DEBUG - 2013-09-20 16:35:25 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:35:25 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:35:25 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:35:25 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:35:25 --> Session Class Initialized
DEBUG - 2013-09-20 16:35:25 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:35:25 --> Session routines successfully run
DEBUG - 2013-09-20 16:35:25 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:35:25 --> Controller Class Initialized
DEBUG - 2013-09-20 16:35:25 --> Model Class Initialized
DEBUG - 2013-09-20 16:35:25 --> Model Class Initialized
DEBUG - 2013-09-20 16:35:25 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:35:25 --> after session initialization................
ERROR - 2013-09-20 16:35:25 --> Severity: Warning  --> Missing argument 1 for user_authorization::index() C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 69
ERROR - 2013-09-20 16:35:25 --> Severity: Notice  --> Undefined variable: message C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 71
DEBUG - 2013-09-20 16:35:25 --> Config Class Initialized
DEBUG - 2013-09-20 16:35:25 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:35:25 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:35:25 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:35:25 --> URI Class Initialized
DEBUG - 2013-09-20 16:35:25 --> Router Class Initialized
DEBUG - 2013-09-20 16:35:25 --> No URI present. Default controller set.
DEBUG - 2013-09-20 16:35:25 --> Output Class Initialized
DEBUG - 2013-09-20 16:35:25 --> Security Class Initialized
DEBUG - 2013-09-20 16:35:25 --> Input Class Initialized
DEBUG - 2013-09-20 16:35:25 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:35:25 --> Language Class Initialized
DEBUG - 2013-09-20 16:35:25 --> Loader Class Initialized
DEBUG - 2013-09-20 16:35:25 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:35:25 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:35:25 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:35:25 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:35:25 --> Session Class Initialized
DEBUG - 2013-09-20 16:35:25 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:35:25 --> Session routines successfully run
DEBUG - 2013-09-20 16:35:25 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:35:25 --> Controller Class Initialized
INFO  - 2013-09-20 16:35:25 --> the form message==>
INFO  - 2013-09-20 16:35:25 --> after the retrieving session list.................//////////
DEBUG - 2013-09-20 16:35:25 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-20 16:35:25 --> Final output sent to browser
DEBUG - 2013-09-20 16:35:25 --> Total execution time: 0.0670
DEBUG - 2013-09-20 16:35:26 --> Config Class Initialized
DEBUG - 2013-09-20 16:35:26 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:35:26 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:35:26 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:35:26 --> URI Class Initialized
DEBUG - 2013-09-20 16:35:26 --> Router Class Initialized
DEBUG - 2013-09-20 16:35:26 --> Output Class Initialized
DEBUG - 2013-09-20 16:35:26 --> Security Class Initialized
DEBUG - 2013-09-20 16:35:26 --> Input Class Initialized
DEBUG - 2013-09-20 16:35:26 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:35:26 --> Language Class Initialized
DEBUG - 2013-09-20 16:35:26 --> Loader Class Initialized
DEBUG - 2013-09-20 16:35:26 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:35:26 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:35:26 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:35:26 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:35:26 --> Session Class Initialized
DEBUG - 2013-09-20 16:35:26 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:35:26 --> Session routines successfully run
DEBUG - 2013-09-20 16:35:26 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:35:26 --> Controller Class Initialized
DEBUG - 2013-09-20 16:35:26 --> Model Class Initialized
DEBUG - 2013-09-20 16:35:26 --> Model Class Initialized
DEBUG - 2013-09-20 16:35:26 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:35:26 --> after session initialization................
INFO  - 2013-09-20 16:35:26 --> after rays has been clicked.................
INFO  - 2013-09-20 16:35:26 --> last news id is 0
INFO  - 2013-09-20 16:35:26 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:35:26 --> last news id is 0
INFO  - 2013-09-20 16:35:26 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:35:26 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:35:26 --> Final output sent to browser
DEBUG - 2013-09-20 16:35:26 --> Total execution time: 0.0510
DEBUG - 2013-09-20 16:35:32 --> Config Class Initialized
DEBUG - 2013-09-20 16:35:32 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:35:32 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:35:32 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:35:32 --> URI Class Initialized
DEBUG - 2013-09-20 16:35:32 --> Router Class Initialized
DEBUG - 2013-09-20 16:35:32 --> Output Class Initialized
DEBUG - 2013-09-20 16:35:32 --> Security Class Initialized
DEBUG - 2013-09-20 16:35:32 --> Input Class Initialized
DEBUG - 2013-09-20 16:35:32 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:35:32 --> Language Class Initialized
DEBUG - 2013-09-20 16:35:32 --> Loader Class Initialized
DEBUG - 2013-09-20 16:35:32 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:35:32 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:35:32 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:35:32 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:35:32 --> Session Class Initialized
DEBUG - 2013-09-20 16:35:32 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:35:32 --> Session routines successfully run
DEBUG - 2013-09-20 16:35:32 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:35:32 --> Controller Class Initialized
DEBUG - 2013-09-20 16:35:32 --> Model Class Initialized
DEBUG - 2013-09-20 16:35:32 --> Model Class Initialized
DEBUG - 2013-09-20 16:35:32 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:35:32 --> after session initialization................
INFO  - 2013-09-20 16:35:32 --> last news id is 1
INFO  - 2013-09-20 16:35:32 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:35:32 --> last news id is 7
INFO  - 2013-09-20 16:35:32 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:35:32 --> Final output sent to browser
DEBUG - 2013-09-20 16:35:32 --> Total execution time: 0.0530
DEBUG - 2013-09-20 16:36:28 --> Config Class Initialized
DEBUG - 2013-09-20 16:36:28 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:36:28 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:36:28 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:36:28 --> URI Class Initialized
DEBUG - 2013-09-20 16:36:28 --> Router Class Initialized
DEBUG - 2013-09-20 16:36:28 --> Output Class Initialized
DEBUG - 2013-09-20 16:36:28 --> Security Class Initialized
DEBUG - 2013-09-20 16:36:28 --> Input Class Initialized
DEBUG - 2013-09-20 16:36:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:36:28 --> Language Class Initialized
DEBUG - 2013-09-20 16:36:28 --> Loader Class Initialized
DEBUG - 2013-09-20 16:36:28 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:36:28 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:36:28 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:36:28 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:36:28 --> Session Class Initialized
DEBUG - 2013-09-20 16:36:28 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:36:28 --> Session routines successfully run
DEBUG - 2013-09-20 16:36:28 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:36:28 --> Controller Class Initialized
DEBUG - 2013-09-20 16:36:28 --> Model Class Initialized
DEBUG - 2013-09-20 16:36:28 --> Model Class Initialized
DEBUG - 2013-09-20 16:36:28 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:36:28 --> after session initialization................
INFO  - 2013-09-20 16:36:28 --> after rays has been clicked.................
INFO  - 2013-09-20 16:36:28 --> last news id is 0
INFO  - 2013-09-20 16:36:28 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:36:28 --> last news id is 0
INFO  - 2013-09-20 16:36:28 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:36:28 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:36:28 --> Final output sent to browser
DEBUG - 2013-09-20 16:36:28 --> Total execution time: 0.0570
DEBUG - 2013-09-20 16:36:30 --> Config Class Initialized
DEBUG - 2013-09-20 16:36:30 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:36:30 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:36:30 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:36:30 --> URI Class Initialized
DEBUG - 2013-09-20 16:36:30 --> Router Class Initialized
DEBUG - 2013-09-20 16:36:30 --> Output Class Initialized
DEBUG - 2013-09-20 16:36:30 --> Security Class Initialized
DEBUG - 2013-09-20 16:36:30 --> Input Class Initialized
DEBUG - 2013-09-20 16:36:30 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:36:30 --> Language Class Initialized
DEBUG - 2013-09-20 16:36:30 --> Loader Class Initialized
DEBUG - 2013-09-20 16:36:30 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:36:30 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:36:30 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:36:30 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:36:30 --> Session Class Initialized
DEBUG - 2013-09-20 16:36:30 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:36:30 --> Session routines successfully run
DEBUG - 2013-09-20 16:36:30 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:36:30 --> Controller Class Initialized
DEBUG - 2013-09-20 16:36:30 --> Model Class Initialized
DEBUG - 2013-09-20 16:36:30 --> Model Class Initialized
DEBUG - 2013-09-20 16:36:30 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:36:30 --> after session initialization................
INFO  - 2013-09-20 16:36:30 --> last news id is 1
INFO  - 2013-09-20 16:36:30 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:36:30 --> last news id is 7
INFO  - 2013-09-20 16:36:30 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:36:30 --> Final output sent to browser
DEBUG - 2013-09-20 16:36:30 --> Total execution time: 0.0650
DEBUG - 2013-09-20 16:36:32 --> Config Class Initialized
DEBUG - 2013-09-20 16:36:32 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:36:32 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:36:32 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:36:32 --> URI Class Initialized
DEBUG - 2013-09-20 16:36:32 --> Router Class Initialized
DEBUG - 2013-09-20 16:36:32 --> Output Class Initialized
DEBUG - 2013-09-20 16:36:32 --> Security Class Initialized
DEBUG - 2013-09-20 16:36:32 --> Input Class Initialized
DEBUG - 2013-09-20 16:36:32 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:36:32 --> Language Class Initialized
DEBUG - 2013-09-20 16:36:32 --> Loader Class Initialized
DEBUG - 2013-09-20 16:36:32 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:36:32 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:36:32 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:36:32 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:36:32 --> Session Class Initialized
DEBUG - 2013-09-20 16:36:32 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:36:32 --> Session routines successfully run
DEBUG - 2013-09-20 16:36:32 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:36:32 --> Controller Class Initialized
DEBUG - 2013-09-20 16:36:32 --> Model Class Initialized
DEBUG - 2013-09-20 16:36:32 --> Model Class Initialized
DEBUG - 2013-09-20 16:36:32 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:36:32 --> after session initialization................
INFO  - 2013-09-20 16:36:32 --> last news id is 1
INFO  - 2013-09-20 16:36:32 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:36:32 --> last news id is 1
INFO  - 2013-09-20 16:36:32 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:36:32 --> Final output sent to browser
DEBUG - 2013-09-20 16:36:32 --> Total execution time: 0.0510
DEBUG - 2013-09-20 16:36:34 --> Config Class Initialized
DEBUG - 2013-09-20 16:36:34 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:36:34 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:36:34 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:36:34 --> URI Class Initialized
DEBUG - 2013-09-20 16:36:34 --> Router Class Initialized
DEBUG - 2013-09-20 16:36:34 --> Output Class Initialized
DEBUG - 2013-09-20 16:36:34 --> Security Class Initialized
DEBUG - 2013-09-20 16:36:34 --> Input Class Initialized
DEBUG - 2013-09-20 16:36:34 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:36:34 --> Language Class Initialized
DEBUG - 2013-09-20 16:36:34 --> Loader Class Initialized
DEBUG - 2013-09-20 16:36:34 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:36:34 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:36:34 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:36:34 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:36:34 --> Session Class Initialized
DEBUG - 2013-09-20 16:36:34 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:36:34 --> Session routines successfully run
DEBUG - 2013-09-20 16:36:34 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:36:34 --> Controller Class Initialized
DEBUG - 2013-09-20 16:36:34 --> Model Class Initialized
DEBUG - 2013-09-20 16:36:34 --> Model Class Initialized
DEBUG - 2013-09-20 16:36:34 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:36:34 --> after session initialization................
INFO  - 2013-09-20 16:36:34 --> last news id is 1
INFO  - 2013-09-20 16:36:34 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:36:34 --> last news id is 1
INFO  - 2013-09-20 16:36:34 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:36:34 --> Final output sent to browser
DEBUG - 2013-09-20 16:36:34 --> Total execution time: 0.0540
DEBUG - 2013-09-20 16:36:36 --> Config Class Initialized
DEBUG - 2013-09-20 16:36:36 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:36:36 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:36:36 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:36:36 --> URI Class Initialized
DEBUG - 2013-09-20 16:36:36 --> Router Class Initialized
DEBUG - 2013-09-20 16:36:36 --> Output Class Initialized
DEBUG - 2013-09-20 16:36:36 --> Security Class Initialized
DEBUG - 2013-09-20 16:36:36 --> Input Class Initialized
DEBUG - 2013-09-20 16:36:36 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:36:36 --> Language Class Initialized
DEBUG - 2013-09-20 16:36:36 --> Loader Class Initialized
DEBUG - 2013-09-20 16:36:36 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:36:36 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:36:36 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:36:36 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:36:36 --> Session Class Initialized
DEBUG - 2013-09-20 16:36:36 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:36:36 --> Session routines successfully run
DEBUG - 2013-09-20 16:36:36 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:36:36 --> Controller Class Initialized
DEBUG - 2013-09-20 16:36:36 --> Model Class Initialized
DEBUG - 2013-09-20 16:36:36 --> Model Class Initialized
DEBUG - 2013-09-20 16:36:36 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:36:36 --> after session initialization................
ERROR - 2013-09-20 16:36:36 --> Severity: Warning  --> Missing argument 1 for user_authorization::index() C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 69
ERROR - 2013-09-20 16:36:36 --> Severity: Notice  --> Undefined variable: message C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 71
DEBUG - 2013-09-20 16:36:36 --> Config Class Initialized
DEBUG - 2013-09-20 16:36:36 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:36:36 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:36:36 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:36:36 --> URI Class Initialized
DEBUG - 2013-09-20 16:36:36 --> Router Class Initialized
DEBUG - 2013-09-20 16:36:36 --> No URI present. Default controller set.
DEBUG - 2013-09-20 16:36:36 --> Output Class Initialized
DEBUG - 2013-09-20 16:36:36 --> Security Class Initialized
DEBUG - 2013-09-20 16:36:36 --> Input Class Initialized
DEBUG - 2013-09-20 16:36:36 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:36:36 --> Language Class Initialized
DEBUG - 2013-09-20 16:36:36 --> Loader Class Initialized
DEBUG - 2013-09-20 16:36:36 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:36:36 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:36:36 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:36:36 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:36:36 --> Session Class Initialized
DEBUG - 2013-09-20 16:36:36 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:36:36 --> Session routines successfully run
DEBUG - 2013-09-20 16:36:36 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:36:36 --> Controller Class Initialized
INFO  - 2013-09-20 16:36:36 --> the form message==>
INFO  - 2013-09-20 16:36:36 --> after the retrieving session list.................//////////
DEBUG - 2013-09-20 16:36:36 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-20 16:36:36 --> Final output sent to browser
DEBUG - 2013-09-20 16:36:36 --> Total execution time: 0.0520
DEBUG - 2013-09-20 16:36:37 --> Config Class Initialized
DEBUG - 2013-09-20 16:36:37 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:36:37 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:36:37 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:36:37 --> URI Class Initialized
DEBUG - 2013-09-20 16:36:37 --> Router Class Initialized
DEBUG - 2013-09-20 16:36:37 --> Output Class Initialized
DEBUG - 2013-09-20 16:36:37 --> Security Class Initialized
DEBUG - 2013-09-20 16:36:37 --> Input Class Initialized
DEBUG - 2013-09-20 16:36:37 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:36:37 --> Language Class Initialized
DEBUG - 2013-09-20 16:36:37 --> Loader Class Initialized
DEBUG - 2013-09-20 16:36:37 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:36:37 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:36:37 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:36:37 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:36:37 --> Session Class Initialized
DEBUG - 2013-09-20 16:36:37 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:36:37 --> Session routines successfully run
DEBUG - 2013-09-20 16:36:37 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:36:37 --> Controller Class Initialized
DEBUG - 2013-09-20 16:36:37 --> Model Class Initialized
DEBUG - 2013-09-20 16:36:37 --> Model Class Initialized
DEBUG - 2013-09-20 16:36:37 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:36:37 --> after session initialization................
INFO  - 2013-09-20 16:36:37 --> after rays has been clicked.................
INFO  - 2013-09-20 16:36:37 --> last news id is 0
INFO  - 2013-09-20 16:36:37 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:36:37 --> last news id is 0
INFO  - 2013-09-20 16:36:37 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:36:37 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:36:37 --> Final output sent to browser
DEBUG - 2013-09-20 16:36:37 --> Total execution time: 0.0550
DEBUG - 2013-09-20 16:36:41 --> Config Class Initialized
DEBUG - 2013-09-20 16:36:41 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:36:41 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:36:41 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:36:41 --> URI Class Initialized
DEBUG - 2013-09-20 16:36:41 --> Router Class Initialized
DEBUG - 2013-09-20 16:36:41 --> Output Class Initialized
DEBUG - 2013-09-20 16:36:41 --> Security Class Initialized
DEBUG - 2013-09-20 16:36:41 --> Input Class Initialized
DEBUG - 2013-09-20 16:36:41 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:36:41 --> Language Class Initialized
DEBUG - 2013-09-20 16:36:41 --> Loader Class Initialized
DEBUG - 2013-09-20 16:36:41 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:36:41 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:36:41 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:36:41 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:36:41 --> Session Class Initialized
DEBUG - 2013-09-20 16:36:41 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:36:41 --> Session routines successfully run
DEBUG - 2013-09-20 16:36:41 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:36:41 --> Controller Class Initialized
DEBUG - 2013-09-20 16:36:41 --> Model Class Initialized
DEBUG - 2013-09-20 16:36:41 --> Model Class Initialized
DEBUG - 2013-09-20 16:36:41 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:36:41 --> after session initialization................
INFO  - 2013-09-20 16:36:41 --> last news id is 1
INFO  - 2013-09-20 16:36:41 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:36:41 --> last news id is 7
INFO  - 2013-09-20 16:36:41 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:36:41 --> Final output sent to browser
DEBUG - 2013-09-20 16:36:41 --> Total execution time: 0.0580
DEBUG - 2013-09-20 16:36:42 --> Config Class Initialized
DEBUG - 2013-09-20 16:36:42 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:36:42 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:36:42 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:36:42 --> URI Class Initialized
DEBUG - 2013-09-20 16:36:42 --> Router Class Initialized
DEBUG - 2013-09-20 16:36:42 --> Output Class Initialized
DEBUG - 2013-09-20 16:36:42 --> Security Class Initialized
DEBUG - 2013-09-20 16:36:42 --> Input Class Initialized
DEBUG - 2013-09-20 16:36:42 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:36:42 --> Language Class Initialized
DEBUG - 2013-09-20 16:36:42 --> Loader Class Initialized
DEBUG - 2013-09-20 16:36:42 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:36:42 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:36:42 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:36:42 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:36:42 --> Session Class Initialized
DEBUG - 2013-09-20 16:36:42 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:36:42 --> Session routines successfully run
DEBUG - 2013-09-20 16:36:42 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:36:42 --> Controller Class Initialized
DEBUG - 2013-09-20 16:36:42 --> Model Class Initialized
DEBUG - 2013-09-20 16:36:42 --> Model Class Initialized
DEBUG - 2013-09-20 16:36:42 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:36:42 --> after session initialization................
INFO  - 2013-09-20 16:36:42 --> last news id is 1
INFO  - 2013-09-20 16:36:42 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:36:42 --> last news id is 7
INFO  - 2013-09-20 16:36:42 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:36:42 --> Final output sent to browser
DEBUG - 2013-09-20 16:36:42 --> Total execution time: 0.0520
DEBUG - 2013-09-20 16:36:57 --> Config Class Initialized
DEBUG - 2013-09-20 16:36:57 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:36:57 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:36:57 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:36:57 --> URI Class Initialized
DEBUG - 2013-09-20 16:36:57 --> Router Class Initialized
DEBUG - 2013-09-20 16:36:57 --> Output Class Initialized
DEBUG - 2013-09-20 16:36:57 --> Security Class Initialized
DEBUG - 2013-09-20 16:36:57 --> Input Class Initialized
DEBUG - 2013-09-20 16:36:57 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:36:57 --> Language Class Initialized
DEBUG - 2013-09-20 16:36:57 --> Loader Class Initialized
DEBUG - 2013-09-20 16:36:57 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:36:57 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:36:57 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:36:57 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:36:57 --> Session Class Initialized
DEBUG - 2013-09-20 16:36:57 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:36:57 --> Session routines successfully run
DEBUG - 2013-09-20 16:36:57 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:36:57 --> Controller Class Initialized
DEBUG - 2013-09-20 16:36:57 --> Model Class Initialized
DEBUG - 2013-09-20 16:36:57 --> Model Class Initialized
DEBUG - 2013-09-20 16:36:57 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:36:57 --> after session initialization................
INFO  - 2013-09-20 16:36:57 --> last news id is 1
INFO  - 2013-09-20 16:36:57 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:36:57 --> last news id is 1
INFO  - 2013-09-20 16:36:57 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:36:57 --> Final output sent to browser
DEBUG - 2013-09-20 16:36:57 --> Total execution time: 0.0540
DEBUG - 2013-09-20 16:37:02 --> Config Class Initialized
DEBUG - 2013-09-20 16:37:02 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:37:02 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:37:02 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:37:02 --> URI Class Initialized
DEBUG - 2013-09-20 16:37:02 --> Router Class Initialized
DEBUG - 2013-09-20 16:37:02 --> Output Class Initialized
DEBUG - 2013-09-20 16:37:02 --> Security Class Initialized
DEBUG - 2013-09-20 16:37:02 --> Input Class Initialized
DEBUG - 2013-09-20 16:37:02 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:37:02 --> Language Class Initialized
DEBUG - 2013-09-20 16:37:02 --> Loader Class Initialized
DEBUG - 2013-09-20 16:37:02 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:37:02 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:37:02 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:37:02 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:37:02 --> Session Class Initialized
DEBUG - 2013-09-20 16:37:02 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:37:02 --> Session routines successfully run
DEBUG - 2013-09-20 16:37:02 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:37:02 --> Controller Class Initialized
DEBUG - 2013-09-20 16:37:02 --> Model Class Initialized
DEBUG - 2013-09-20 16:37:02 --> Model Class Initialized
DEBUG - 2013-09-20 16:37:02 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:37:02 --> after session initialization................
INFO  - 2013-09-20 16:37:02 --> last news id is 1
INFO  - 2013-09-20 16:37:02 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:37:02 --> last news id is 1
INFO  - 2013-09-20 16:37:02 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:37:02 --> Final output sent to browser
DEBUG - 2013-09-20 16:37:02 --> Total execution time: 0.0520
DEBUG - 2013-09-20 16:39:35 --> Config Class Initialized
DEBUG - 2013-09-20 16:39:35 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:39:35 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:39:35 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:39:35 --> URI Class Initialized
DEBUG - 2013-09-20 16:39:35 --> Router Class Initialized
DEBUG - 2013-09-20 16:39:35 --> Output Class Initialized
DEBUG - 2013-09-20 16:39:35 --> Security Class Initialized
DEBUG - 2013-09-20 16:39:35 --> Input Class Initialized
DEBUG - 2013-09-20 16:39:35 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:39:35 --> Language Class Initialized
DEBUG - 2013-09-20 16:39:35 --> Loader Class Initialized
DEBUG - 2013-09-20 16:39:35 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:39:35 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:39:35 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:39:35 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:39:35 --> Session Class Initialized
DEBUG - 2013-09-20 16:39:35 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:39:35 --> Session routines successfully run
DEBUG - 2013-09-20 16:39:35 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:39:35 --> Controller Class Initialized
DEBUG - 2013-09-20 16:39:35 --> Model Class Initialized
DEBUG - 2013-09-20 16:39:35 --> Model Class Initialized
DEBUG - 2013-09-20 16:39:35 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:39:35 --> after session initialization................
ERROR - 2013-09-20 16:39:35 --> Severity: Warning  --> Missing argument 1 for user_authorization::index() C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 69
ERROR - 2013-09-20 16:39:35 --> Severity: Notice  --> Undefined variable: message C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 71
DEBUG - 2013-09-20 16:39:35 --> Config Class Initialized
DEBUG - 2013-09-20 16:39:35 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:39:35 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:39:35 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:39:35 --> URI Class Initialized
DEBUG - 2013-09-20 16:39:35 --> Router Class Initialized
DEBUG - 2013-09-20 16:39:35 --> No URI present. Default controller set.
DEBUG - 2013-09-20 16:39:35 --> Output Class Initialized
DEBUG - 2013-09-20 16:39:35 --> Security Class Initialized
DEBUG - 2013-09-20 16:39:35 --> Input Class Initialized
DEBUG - 2013-09-20 16:39:35 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:39:35 --> Language Class Initialized
DEBUG - 2013-09-20 16:39:35 --> Loader Class Initialized
DEBUG - 2013-09-20 16:39:35 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:39:35 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:39:35 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:39:35 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:39:35 --> Session Class Initialized
DEBUG - 2013-09-20 16:39:35 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:39:35 --> Session routines successfully run
DEBUG - 2013-09-20 16:39:35 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:39:35 --> Controller Class Initialized
INFO  - 2013-09-20 16:39:35 --> the form message==>
INFO  - 2013-09-20 16:39:35 --> after the retrieving session list.................//////////
DEBUG - 2013-09-20 16:39:35 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-20 16:39:35 --> Final output sent to browser
DEBUG - 2013-09-20 16:39:35 --> Total execution time: 0.0440
DEBUG - 2013-09-20 16:39:36 --> Config Class Initialized
DEBUG - 2013-09-20 16:39:36 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:39:36 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:39:36 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:39:36 --> URI Class Initialized
DEBUG - 2013-09-20 16:39:36 --> Router Class Initialized
DEBUG - 2013-09-20 16:39:36 --> Output Class Initialized
DEBUG - 2013-09-20 16:39:36 --> Security Class Initialized
DEBUG - 2013-09-20 16:39:36 --> Input Class Initialized
DEBUG - 2013-09-20 16:39:36 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:39:36 --> Language Class Initialized
DEBUG - 2013-09-20 16:39:36 --> Loader Class Initialized
DEBUG - 2013-09-20 16:39:36 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:39:36 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:39:36 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:39:36 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:39:36 --> Session Class Initialized
DEBUG - 2013-09-20 16:39:36 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:39:36 --> Session routines successfully run
DEBUG - 2013-09-20 16:39:36 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:39:36 --> Controller Class Initialized
DEBUG - 2013-09-20 16:39:36 --> Model Class Initialized
DEBUG - 2013-09-20 16:39:36 --> Model Class Initialized
DEBUG - 2013-09-20 16:39:36 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:39:36 --> after session initialization................
INFO  - 2013-09-20 16:39:36 --> after rays has been clicked.................
INFO  - 2013-09-20 16:39:36 --> last news id is 0
INFO  - 2013-09-20 16:39:36 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:39:36 --> last news id is 0
INFO  - 2013-09-20 16:39:36 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:39:36 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:39:36 --> Final output sent to browser
DEBUG - 2013-09-20 16:39:36 --> Total execution time: 0.0500
DEBUG - 2013-09-20 16:39:37 --> Config Class Initialized
DEBUG - 2013-09-20 16:39:37 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:39:37 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:39:37 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:39:37 --> URI Class Initialized
DEBUG - 2013-09-20 16:39:37 --> Router Class Initialized
DEBUG - 2013-09-20 16:39:37 --> Output Class Initialized
DEBUG - 2013-09-20 16:39:38 --> Security Class Initialized
DEBUG - 2013-09-20 16:39:38 --> Input Class Initialized
DEBUG - 2013-09-20 16:39:38 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:39:38 --> Language Class Initialized
DEBUG - 2013-09-20 16:39:38 --> Loader Class Initialized
DEBUG - 2013-09-20 16:39:38 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:39:38 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:39:38 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:39:38 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:39:38 --> Session Class Initialized
DEBUG - 2013-09-20 16:39:38 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:39:38 --> Session routines successfully run
DEBUG - 2013-09-20 16:39:38 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:39:38 --> Controller Class Initialized
DEBUG - 2013-09-20 16:39:38 --> Model Class Initialized
DEBUG - 2013-09-20 16:39:38 --> Model Class Initialized
DEBUG - 2013-09-20 16:39:38 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:39:38 --> after session initialization................
INFO  - 2013-09-20 16:39:38 --> last news id is 1
INFO  - 2013-09-20 16:39:38 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:39:38 --> last news id is 7
INFO  - 2013-09-20 16:39:38 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:39:38 --> Final output sent to browser
DEBUG - 2013-09-20 16:39:38 --> Total execution time: 0.0570
DEBUG - 2013-09-20 16:39:40 --> Config Class Initialized
DEBUG - 2013-09-20 16:39:40 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:39:40 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:39:40 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:39:40 --> URI Class Initialized
DEBUG - 2013-09-20 16:39:40 --> Router Class Initialized
DEBUG - 2013-09-20 16:39:40 --> Output Class Initialized
DEBUG - 2013-09-20 16:39:40 --> Security Class Initialized
DEBUG - 2013-09-20 16:39:40 --> Input Class Initialized
DEBUG - 2013-09-20 16:39:40 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:39:40 --> Language Class Initialized
DEBUG - 2013-09-20 16:39:40 --> Loader Class Initialized
DEBUG - 2013-09-20 16:39:40 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:39:40 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:39:40 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:39:40 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:39:40 --> Session Class Initialized
DEBUG - 2013-09-20 16:39:40 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:39:40 --> Session routines successfully run
DEBUG - 2013-09-20 16:39:40 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:39:40 --> Controller Class Initialized
DEBUG - 2013-09-20 16:39:40 --> Model Class Initialized
DEBUG - 2013-09-20 16:39:40 --> Model Class Initialized
DEBUG - 2013-09-20 16:39:40 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:39:40 --> after session initialization................
INFO  - 2013-09-20 16:39:40 --> last news id is 1
INFO  - 2013-09-20 16:39:40 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:39:40 --> last news id is 1
INFO  - 2013-09-20 16:39:40 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:39:40 --> Final output sent to browser
DEBUG - 2013-09-20 16:39:40 --> Total execution time: 0.0650
DEBUG - 2013-09-20 16:39:43 --> Config Class Initialized
DEBUG - 2013-09-20 16:39:43 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:39:43 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:39:43 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:39:43 --> URI Class Initialized
DEBUG - 2013-09-20 16:39:43 --> Router Class Initialized
DEBUG - 2013-09-20 16:39:43 --> Output Class Initialized
DEBUG - 2013-09-20 16:39:43 --> Security Class Initialized
DEBUG - 2013-09-20 16:39:43 --> Input Class Initialized
DEBUG - 2013-09-20 16:39:43 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:39:43 --> Language Class Initialized
DEBUG - 2013-09-20 16:39:43 --> Loader Class Initialized
DEBUG - 2013-09-20 16:39:43 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:39:43 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:39:43 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:39:43 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:39:43 --> Session Class Initialized
DEBUG - 2013-09-20 16:39:43 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:39:43 --> Session routines successfully run
DEBUG - 2013-09-20 16:39:44 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:39:44 --> Controller Class Initialized
DEBUG - 2013-09-20 16:39:44 --> Model Class Initialized
DEBUG - 2013-09-20 16:39:44 --> Model Class Initialized
DEBUG - 2013-09-20 16:39:44 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:39:44 --> after session initialization................
INFO  - 2013-09-20 16:39:44 --> last news id is 1
INFO  - 2013-09-20 16:39:44 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:39:44 --> last news id is 1
INFO  - 2013-09-20 16:39:44 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:39:44 --> Final output sent to browser
DEBUG - 2013-09-20 16:39:44 --> Total execution time: 0.0690
DEBUG - 2013-09-20 16:39:45 --> Config Class Initialized
DEBUG - 2013-09-20 16:39:45 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:39:45 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:39:45 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:39:45 --> URI Class Initialized
DEBUG - 2013-09-20 16:39:45 --> Router Class Initialized
DEBUG - 2013-09-20 16:39:45 --> Output Class Initialized
DEBUG - 2013-09-20 16:39:45 --> Security Class Initialized
DEBUG - 2013-09-20 16:39:45 --> Input Class Initialized
DEBUG - 2013-09-20 16:39:45 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:39:45 --> Language Class Initialized
DEBUG - 2013-09-20 16:39:45 --> Loader Class Initialized
DEBUG - 2013-09-20 16:39:45 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:39:45 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:39:45 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:39:45 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:39:45 --> Session Class Initialized
DEBUG - 2013-09-20 16:39:45 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:39:45 --> Session routines successfully run
DEBUG - 2013-09-20 16:39:45 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:39:45 --> Controller Class Initialized
DEBUG - 2013-09-20 16:39:45 --> Model Class Initialized
DEBUG - 2013-09-20 16:39:45 --> Model Class Initialized
DEBUG - 2013-09-20 16:39:45 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:39:45 --> after session initialization................
INFO  - 2013-09-20 16:39:45 --> last news id is 1
INFO  - 2013-09-20 16:39:45 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:39:45 --> last news id is 1
INFO  - 2013-09-20 16:39:45 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:39:45 --> Final output sent to browser
DEBUG - 2013-09-20 16:39:45 --> Total execution time: 0.0720
DEBUG - 2013-09-20 16:39:56 --> Config Class Initialized
DEBUG - 2013-09-20 16:39:56 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:39:56 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:39:56 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:39:56 --> URI Class Initialized
DEBUG - 2013-09-20 16:39:56 --> Router Class Initialized
DEBUG - 2013-09-20 16:39:56 --> Output Class Initialized
DEBUG - 2013-09-20 16:39:56 --> Security Class Initialized
DEBUG - 2013-09-20 16:39:56 --> Input Class Initialized
DEBUG - 2013-09-20 16:39:56 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:39:56 --> Language Class Initialized
DEBUG - 2013-09-20 16:39:56 --> Config Class Initialized
DEBUG - 2013-09-20 16:39:56 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:39:56 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:39:56 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:39:56 --> URI Class Initialized
DEBUG - 2013-09-20 16:39:56 --> Router Class Initialized
DEBUG - 2013-09-20 16:39:56 --> Output Class Initialized
DEBUG - 2013-09-20 16:39:56 --> Security Class Initialized
DEBUG - 2013-09-20 16:39:56 --> Input Class Initialized
DEBUG - 2013-09-20 16:39:56 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:39:56 --> Language Class Initialized
DEBUG - 2013-09-20 16:39:57 --> Loader Class Initialized
DEBUG - 2013-09-20 16:39:57 --> Loader Class Initialized
DEBUG - 2013-09-20 16:39:57 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:39:57 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:39:57 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:39:57 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:39:57 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:39:57 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:39:57 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:39:57 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:39:57 --> Session Class Initialized
DEBUG - 2013-09-20 16:39:57 --> Session Class Initialized
DEBUG - 2013-09-20 16:39:57 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:39:57 --> Session routines successfully run
DEBUG - 2013-09-20 16:39:57 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:39:57 --> Session routines successfully run
DEBUG - 2013-09-20 16:39:57 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:39:57 --> Controller Class Initialized
DEBUG - 2013-09-20 16:39:57 --> Model Class Initialized
DEBUG - 2013-09-20 16:39:57 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:39:57 --> Controller Class Initialized
DEBUG - 2013-09-20 16:39:57 --> Model Class Initialized
DEBUG - 2013-09-20 16:39:57 --> Model Class Initialized
DEBUG - 2013-09-20 16:39:57 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:39:57 --> after session initialization................
INFO  - 2013-09-20 16:39:57 --> last news id is 1
DEBUG - 2013-09-20 16:39:57 --> Model Class Initialized
DEBUG - 2013-09-20 16:39:57 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:39:57 --> after session initialization................
INFO  - 2013-09-20 16:39:57 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:39:57 --> last news id is 1
INFO  - 2013-09-20 16:39:57 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:39:57 --> Final output sent to browser
DEBUG - 2013-09-20 16:39:57 --> Total execution time: 0.0690
INFO  - 2013-09-20 16:39:57 --> last news id is 1
INFO  - 2013-09-20 16:39:57 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:39:57 --> last news id is 1
INFO  - 2013-09-20 16:39:57 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:39:57 --> Final output sent to browser
DEBUG - 2013-09-20 16:39:57 --> Total execution time: 0.1110
DEBUG - 2013-09-20 16:39:58 --> Config Class Initialized
DEBUG - 2013-09-20 16:39:58 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:39:58 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:39:58 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:39:58 --> URI Class Initialized
DEBUG - 2013-09-20 16:39:58 --> Router Class Initialized
DEBUG - 2013-09-20 16:39:58 --> Output Class Initialized
DEBUG - 2013-09-20 16:39:58 --> Security Class Initialized
DEBUG - 2013-09-20 16:39:58 --> Input Class Initialized
DEBUG - 2013-09-20 16:39:58 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:39:58 --> Language Class Initialized
DEBUG - 2013-09-20 16:39:58 --> Loader Class Initialized
DEBUG - 2013-09-20 16:39:58 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:39:58 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:39:58 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:39:58 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:39:58 --> Session Class Initialized
DEBUG - 2013-09-20 16:39:58 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:39:58 --> Session routines successfully run
DEBUG - 2013-09-20 16:39:58 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:39:58 --> Controller Class Initialized
DEBUG - 2013-09-20 16:39:58 --> Model Class Initialized
DEBUG - 2013-09-20 16:39:58 --> Model Class Initialized
DEBUG - 2013-09-20 16:39:58 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:39:58 --> after session initialization................
INFO  - 2013-09-20 16:39:58 --> last news id is 1
INFO  - 2013-09-20 16:39:58 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:39:58 --> last news id is 1
INFO  - 2013-09-20 16:39:58 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:39:58 --> Final output sent to browser
DEBUG - 2013-09-20 16:39:58 --> Total execution time: 0.0590
DEBUG - 2013-09-20 16:40:29 --> Config Class Initialized
DEBUG - 2013-09-20 16:40:29 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:40:29 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:40:29 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:40:29 --> URI Class Initialized
DEBUG - 2013-09-20 16:40:29 --> Router Class Initialized
DEBUG - 2013-09-20 16:40:29 --> Output Class Initialized
DEBUG - 2013-09-20 16:40:29 --> Security Class Initialized
DEBUG - 2013-09-20 16:40:29 --> Input Class Initialized
DEBUG - 2013-09-20 16:40:29 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:40:29 --> Language Class Initialized
DEBUG - 2013-09-20 16:40:29 --> Loader Class Initialized
DEBUG - 2013-09-20 16:40:29 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:40:29 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:40:29 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:40:29 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:40:29 --> Session Class Initialized
DEBUG - 2013-09-20 16:40:29 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:40:29 --> Session routines successfully run
DEBUG - 2013-09-20 16:40:29 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:40:29 --> Controller Class Initialized
DEBUG - 2013-09-20 16:40:29 --> Model Class Initialized
DEBUG - 2013-09-20 16:40:29 --> Model Class Initialized
DEBUG - 2013-09-20 16:40:29 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:40:29 --> after session initialization................
ERROR - 2013-09-20 16:40:29 --> Severity: Warning  --> Missing argument 1 for user_authorization::index() C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 69
ERROR - 2013-09-20 16:40:29 --> Severity: Notice  --> Undefined variable: message C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 71
DEBUG - 2013-09-20 16:40:29 --> Config Class Initialized
DEBUG - 2013-09-20 16:40:29 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:40:29 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:40:29 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:40:29 --> URI Class Initialized
DEBUG - 2013-09-20 16:40:29 --> Router Class Initialized
DEBUG - 2013-09-20 16:40:29 --> No URI present. Default controller set.
DEBUG - 2013-09-20 16:40:29 --> Output Class Initialized
DEBUG - 2013-09-20 16:40:29 --> Security Class Initialized
DEBUG - 2013-09-20 16:40:29 --> Input Class Initialized
DEBUG - 2013-09-20 16:40:29 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:40:29 --> Language Class Initialized
DEBUG - 2013-09-20 16:40:29 --> Loader Class Initialized
DEBUG - 2013-09-20 16:40:29 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:40:29 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:40:29 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:40:29 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:40:29 --> Session Class Initialized
DEBUG - 2013-09-20 16:40:29 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:40:29 --> Session routines successfully run
DEBUG - 2013-09-20 16:40:29 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:40:29 --> Controller Class Initialized
INFO  - 2013-09-20 16:40:29 --> the form message==>
INFO  - 2013-09-20 16:40:29 --> after the retrieving session list.................//////////
DEBUG - 2013-09-20 16:40:29 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-20 16:40:29 --> Final output sent to browser
DEBUG - 2013-09-20 16:40:29 --> Total execution time: 0.0480
DEBUG - 2013-09-20 16:40:30 --> Config Class Initialized
DEBUG - 2013-09-20 16:40:30 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:40:30 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:40:30 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:40:30 --> URI Class Initialized
DEBUG - 2013-09-20 16:40:30 --> Router Class Initialized
DEBUG - 2013-09-20 16:40:30 --> Output Class Initialized
DEBUG - 2013-09-20 16:40:30 --> Security Class Initialized
DEBUG - 2013-09-20 16:40:30 --> Input Class Initialized
DEBUG - 2013-09-20 16:40:30 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:40:30 --> Language Class Initialized
DEBUG - 2013-09-20 16:40:30 --> Loader Class Initialized
DEBUG - 2013-09-20 16:40:30 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:40:30 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:40:30 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:40:30 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:40:30 --> Session Class Initialized
DEBUG - 2013-09-20 16:40:30 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:40:30 --> Session routines successfully run
DEBUG - 2013-09-20 16:40:30 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:40:30 --> Controller Class Initialized
DEBUG - 2013-09-20 16:40:30 --> Model Class Initialized
DEBUG - 2013-09-20 16:40:30 --> Model Class Initialized
DEBUG - 2013-09-20 16:40:30 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:40:30 --> after session initialization................
INFO  - 2013-09-20 16:40:30 --> after rays has been clicked.................
INFO  - 2013-09-20 16:40:30 --> last news id is 0
INFO  - 2013-09-20 16:40:30 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:40:30 --> last news id is 0
INFO  - 2013-09-20 16:40:30 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:40:30 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:40:30 --> Final output sent to browser
DEBUG - 2013-09-20 16:40:30 --> Total execution time: 0.0580
DEBUG - 2013-09-20 16:40:34 --> Config Class Initialized
DEBUG - 2013-09-20 16:40:34 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:40:34 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:40:34 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:40:34 --> URI Class Initialized
DEBUG - 2013-09-20 16:40:34 --> Router Class Initialized
DEBUG - 2013-09-20 16:40:34 --> Output Class Initialized
DEBUG - 2013-09-20 16:40:34 --> Security Class Initialized
DEBUG - 2013-09-20 16:40:34 --> Input Class Initialized
DEBUG - 2013-09-20 16:40:34 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:40:34 --> Language Class Initialized
DEBUG - 2013-09-20 16:40:34 --> Loader Class Initialized
DEBUG - 2013-09-20 16:40:34 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:40:34 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:40:34 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:40:34 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:40:34 --> Session Class Initialized
DEBUG - 2013-09-20 16:40:34 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:40:34 --> Session routines successfully run
DEBUG - 2013-09-20 16:40:34 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:40:34 --> Controller Class Initialized
DEBUG - 2013-09-20 16:40:34 --> Model Class Initialized
DEBUG - 2013-09-20 16:40:34 --> Model Class Initialized
DEBUG - 2013-09-20 16:40:34 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:40:34 --> after session initialization................
INFO  - 2013-09-20 16:40:34 --> last news id is 1
INFO  - 2013-09-20 16:40:34 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:40:34 --> last news id is 7
INFO  - 2013-09-20 16:40:34 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:40:34 --> Final output sent to browser
DEBUG - 2013-09-20 16:40:34 --> Total execution time: 0.0470
DEBUG - 2013-09-20 16:40:41 --> Config Class Initialized
DEBUG - 2013-09-20 16:40:41 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:40:41 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:40:41 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:40:41 --> URI Class Initialized
DEBUG - 2013-09-20 16:40:41 --> Router Class Initialized
DEBUG - 2013-09-20 16:40:41 --> Output Class Initialized
DEBUG - 2013-09-20 16:40:41 --> Security Class Initialized
DEBUG - 2013-09-20 16:40:41 --> Input Class Initialized
DEBUG - 2013-09-20 16:40:41 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:40:41 --> Language Class Initialized
DEBUG - 2013-09-20 16:40:41 --> Loader Class Initialized
DEBUG - 2013-09-20 16:40:41 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:40:41 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:40:41 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:40:41 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:40:41 --> Session Class Initialized
DEBUG - 2013-09-20 16:40:41 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:40:41 --> Session routines successfully run
DEBUG - 2013-09-20 16:40:41 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:40:41 --> Controller Class Initialized
DEBUG - 2013-09-20 16:40:41 --> Model Class Initialized
DEBUG - 2013-09-20 16:40:41 --> Model Class Initialized
DEBUG - 2013-09-20 16:40:41 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:40:41 --> after session initialization................
INFO  - 2013-09-20 16:40:41 --> last news id is 1
INFO  - 2013-09-20 16:40:41 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:40:41 --> last news id is 1
INFO  - 2013-09-20 16:40:41 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:40:41 --> Final output sent to browser
DEBUG - 2013-09-20 16:40:41 --> Total execution time: 0.0570
DEBUG - 2013-09-20 16:44:25 --> Config Class Initialized
DEBUG - 2013-09-20 16:44:25 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:44:25 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:44:25 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:44:25 --> URI Class Initialized
DEBUG - 2013-09-20 16:44:25 --> Router Class Initialized
DEBUG - 2013-09-20 16:44:25 --> Output Class Initialized
DEBUG - 2013-09-20 16:44:25 --> Security Class Initialized
DEBUG - 2013-09-20 16:44:25 --> Input Class Initialized
DEBUG - 2013-09-20 16:44:25 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:44:25 --> Language Class Initialized
DEBUG - 2013-09-20 16:44:25 --> Loader Class Initialized
DEBUG - 2013-09-20 16:44:25 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:44:25 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:44:25 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:44:25 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:44:25 --> Session Class Initialized
DEBUG - 2013-09-20 16:44:25 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:44:25 --> Session routines successfully run
DEBUG - 2013-09-20 16:44:25 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:44:25 --> Controller Class Initialized
DEBUG - 2013-09-20 16:44:25 --> Model Class Initialized
DEBUG - 2013-09-20 16:44:25 --> Model Class Initialized
DEBUG - 2013-09-20 16:44:25 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:44:25 --> after session initialization................
INFO  - 2013-09-20 16:44:25 --> last news id is 1
INFO  - 2013-09-20 16:44:25 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:44:25 --> last news id is 1
INFO  - 2013-09-20 16:44:25 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:44:25 --> Final output sent to browser
DEBUG - 2013-09-20 16:44:25 --> Total execution time: 0.0680
DEBUG - 2013-09-20 16:44:37 --> Config Class Initialized
DEBUG - 2013-09-20 16:44:37 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:44:37 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:44:37 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:44:37 --> URI Class Initialized
DEBUG - 2013-09-20 16:44:37 --> Router Class Initialized
DEBUG - 2013-09-20 16:44:37 --> Output Class Initialized
DEBUG - 2013-09-20 16:44:37 --> Security Class Initialized
DEBUG - 2013-09-20 16:44:37 --> Input Class Initialized
DEBUG - 2013-09-20 16:44:37 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:44:37 --> Language Class Initialized
DEBUG - 2013-09-20 16:44:37 --> Loader Class Initialized
DEBUG - 2013-09-20 16:44:37 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:44:37 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:44:37 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:44:37 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:44:37 --> Session Class Initialized
DEBUG - 2013-09-20 16:44:37 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:44:37 --> Session routines successfully run
DEBUG - 2013-09-20 16:44:38 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:44:38 --> Controller Class Initialized
DEBUG - 2013-09-20 16:44:38 --> Model Class Initialized
DEBUG - 2013-09-20 16:44:38 --> Model Class Initialized
DEBUG - 2013-09-20 16:44:38 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:44:38 --> after session initialization................
INFO  - 2013-09-20 16:44:38 --> last news id is 1
INFO  - 2013-09-20 16:44:38 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:44:38 --> last news id is 1
INFO  - 2013-09-20 16:44:38 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:44:38 --> Final output sent to browser
DEBUG - 2013-09-20 16:44:38 --> Total execution time: 0.0630
DEBUG - 2013-09-20 16:44:41 --> Config Class Initialized
DEBUG - 2013-09-20 16:44:41 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:44:41 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:44:41 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:44:41 --> URI Class Initialized
DEBUG - 2013-09-20 16:44:41 --> Router Class Initialized
DEBUG - 2013-09-20 16:44:41 --> Output Class Initialized
DEBUG - 2013-09-20 16:44:41 --> Security Class Initialized
DEBUG - 2013-09-20 16:44:41 --> Input Class Initialized
DEBUG - 2013-09-20 16:44:41 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:44:41 --> Language Class Initialized
DEBUG - 2013-09-20 16:44:41 --> Loader Class Initialized
DEBUG - 2013-09-20 16:44:41 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:44:41 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:44:41 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:44:41 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:44:41 --> Session Class Initialized
DEBUG - 2013-09-20 16:44:41 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:44:41 --> Session routines successfully run
DEBUG - 2013-09-20 16:44:41 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:44:41 --> Controller Class Initialized
DEBUG - 2013-09-20 16:44:41 --> Model Class Initialized
DEBUG - 2013-09-20 16:44:41 --> Model Class Initialized
DEBUG - 2013-09-20 16:44:41 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:44:41 --> after session initialization................
ERROR - 2013-09-20 16:44:41 --> Severity: Warning  --> Missing argument 1 for user_authorization::index() C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 69
ERROR - 2013-09-20 16:44:41 --> Severity: Notice  --> Undefined variable: message C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 71
DEBUG - 2013-09-20 16:44:41 --> Config Class Initialized
DEBUG - 2013-09-20 16:44:41 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:44:41 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:44:41 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:44:41 --> URI Class Initialized
DEBUG - 2013-09-20 16:44:41 --> Router Class Initialized
DEBUG - 2013-09-20 16:44:41 --> No URI present. Default controller set.
DEBUG - 2013-09-20 16:44:41 --> Output Class Initialized
DEBUG - 2013-09-20 16:44:41 --> Security Class Initialized
DEBUG - 2013-09-20 16:44:41 --> Input Class Initialized
DEBUG - 2013-09-20 16:44:41 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:44:41 --> Language Class Initialized
DEBUG - 2013-09-20 16:44:41 --> Loader Class Initialized
DEBUG - 2013-09-20 16:44:41 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:44:41 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:44:41 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:44:41 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:44:41 --> Session Class Initialized
DEBUG - 2013-09-20 16:44:41 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:44:41 --> Session routines successfully run
DEBUG - 2013-09-20 16:44:41 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:44:41 --> Controller Class Initialized
INFO  - 2013-09-20 16:44:41 --> the form message==>
INFO  - 2013-09-20 16:44:41 --> after the retrieving session list.................//////////
DEBUG - 2013-09-20 16:44:41 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-20 16:44:41 --> Final output sent to browser
DEBUG - 2013-09-20 16:44:41 --> Total execution time: 0.0460
DEBUG - 2013-09-20 16:44:42 --> Config Class Initialized
DEBUG - 2013-09-20 16:44:42 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:44:42 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:44:42 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:44:42 --> URI Class Initialized
DEBUG - 2013-09-20 16:44:42 --> Router Class Initialized
DEBUG - 2013-09-20 16:44:42 --> Output Class Initialized
DEBUG - 2013-09-20 16:44:42 --> Security Class Initialized
DEBUG - 2013-09-20 16:44:42 --> Input Class Initialized
DEBUG - 2013-09-20 16:44:42 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:44:42 --> Language Class Initialized
DEBUG - 2013-09-20 16:44:42 --> Loader Class Initialized
DEBUG - 2013-09-20 16:44:42 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:44:42 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:44:42 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:44:42 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:44:42 --> Session Class Initialized
DEBUG - 2013-09-20 16:44:42 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:44:42 --> Session routines successfully run
DEBUG - 2013-09-20 16:44:42 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:44:42 --> Controller Class Initialized
DEBUG - 2013-09-20 16:44:42 --> Model Class Initialized
DEBUG - 2013-09-20 16:44:42 --> Model Class Initialized
DEBUG - 2013-09-20 16:44:42 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:44:42 --> after session initialization................
INFO  - 2013-09-20 16:44:42 --> after rays has been clicked.................
INFO  - 2013-09-20 16:44:42 --> last news id is 0
INFO  - 2013-09-20 16:44:42 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:44:42 --> last news id is 0
INFO  - 2013-09-20 16:44:42 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:44:42 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:44:42 --> Final output sent to browser
DEBUG - 2013-09-20 16:44:42 --> Total execution time: 0.0580
DEBUG - 2013-09-20 16:44:44 --> Config Class Initialized
DEBUG - 2013-09-20 16:44:44 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:44:44 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:44:44 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:44:44 --> URI Class Initialized
DEBUG - 2013-09-20 16:44:44 --> Router Class Initialized
DEBUG - 2013-09-20 16:44:44 --> Output Class Initialized
DEBUG - 2013-09-20 16:44:44 --> Security Class Initialized
DEBUG - 2013-09-20 16:44:44 --> Input Class Initialized
DEBUG - 2013-09-20 16:44:44 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:44:44 --> Language Class Initialized
DEBUG - 2013-09-20 16:44:44 --> Loader Class Initialized
DEBUG - 2013-09-20 16:44:44 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:44:44 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:44:44 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:44:44 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:44:44 --> Session Class Initialized
DEBUG - 2013-09-20 16:44:44 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:44:44 --> Session routines successfully run
DEBUG - 2013-09-20 16:44:44 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:44:44 --> Controller Class Initialized
DEBUG - 2013-09-20 16:44:44 --> Model Class Initialized
DEBUG - 2013-09-20 16:44:44 --> Model Class Initialized
DEBUG - 2013-09-20 16:44:44 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:44:44 --> after session initialization................
INFO  - 2013-09-20 16:44:44 --> last news id is 1
INFO  - 2013-09-20 16:44:44 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:44:44 --> last news id is 7
INFO  - 2013-09-20 16:44:44 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:44:44 --> Final output sent to browser
DEBUG - 2013-09-20 16:44:44 --> Total execution time: 0.0540
DEBUG - 2013-09-20 16:48:25 --> Config Class Initialized
DEBUG - 2013-09-20 16:48:25 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:48:25 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:48:25 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:48:25 --> URI Class Initialized
DEBUG - 2013-09-20 16:48:25 --> Router Class Initialized
DEBUG - 2013-09-20 16:48:25 --> Output Class Initialized
DEBUG - 2013-09-20 16:48:25 --> Security Class Initialized
DEBUG - 2013-09-20 16:48:25 --> Input Class Initialized
DEBUG - 2013-09-20 16:48:25 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:48:25 --> Language Class Initialized
DEBUG - 2013-09-20 16:48:25 --> Loader Class Initialized
DEBUG - 2013-09-20 16:48:25 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:48:25 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:48:25 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:48:25 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:48:25 --> Session Class Initialized
DEBUG - 2013-09-20 16:48:25 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:48:25 --> Session routines successfully run
DEBUG - 2013-09-20 16:48:25 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:48:25 --> Controller Class Initialized
DEBUG - 2013-09-20 16:48:25 --> Model Class Initialized
DEBUG - 2013-09-20 16:48:25 --> Model Class Initialized
DEBUG - 2013-09-20 16:48:25 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:48:25 --> after session initialization................
ERROR - 2013-09-20 16:48:25 --> Severity: Warning  --> Missing argument 1 for user_authorization::index() C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 69
ERROR - 2013-09-20 16:48:25 --> Severity: Notice  --> Undefined variable: message C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 71
DEBUG - 2013-09-20 16:48:25 --> Config Class Initialized
DEBUG - 2013-09-20 16:48:25 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:48:25 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:48:25 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:48:25 --> URI Class Initialized
DEBUG - 2013-09-20 16:48:25 --> Router Class Initialized
DEBUG - 2013-09-20 16:48:25 --> No URI present. Default controller set.
DEBUG - 2013-09-20 16:48:25 --> Output Class Initialized
DEBUG - 2013-09-20 16:48:25 --> Security Class Initialized
DEBUG - 2013-09-20 16:48:25 --> Input Class Initialized
DEBUG - 2013-09-20 16:48:25 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:48:25 --> Language Class Initialized
DEBUG - 2013-09-20 16:48:25 --> Loader Class Initialized
DEBUG - 2013-09-20 16:48:25 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:48:25 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:48:25 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:48:25 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:48:25 --> Session Class Initialized
DEBUG - 2013-09-20 16:48:25 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:48:25 --> Session routines successfully run
DEBUG - 2013-09-20 16:48:25 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:48:25 --> Controller Class Initialized
INFO  - 2013-09-20 16:48:25 --> the form message==>
INFO  - 2013-09-20 16:48:25 --> after the retrieving session list.................//////////
DEBUG - 2013-09-20 16:48:25 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-20 16:48:25 --> Final output sent to browser
DEBUG - 2013-09-20 16:48:25 --> Total execution time: 0.0470
DEBUG - 2013-09-20 16:48:27 --> Config Class Initialized
DEBUG - 2013-09-20 16:48:27 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:48:27 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:48:27 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:48:27 --> URI Class Initialized
DEBUG - 2013-09-20 16:48:27 --> Router Class Initialized
DEBUG - 2013-09-20 16:48:27 --> Output Class Initialized
DEBUG - 2013-09-20 16:48:27 --> Security Class Initialized
DEBUG - 2013-09-20 16:48:27 --> Input Class Initialized
DEBUG - 2013-09-20 16:48:27 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:48:27 --> Language Class Initialized
DEBUG - 2013-09-20 16:48:27 --> Loader Class Initialized
DEBUG - 2013-09-20 16:48:27 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:48:27 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:48:27 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:48:27 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:48:27 --> Session Class Initialized
DEBUG - 2013-09-20 16:48:27 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:48:27 --> Session routines successfully run
DEBUG - 2013-09-20 16:48:27 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:48:27 --> Controller Class Initialized
DEBUG - 2013-09-20 16:48:27 --> Model Class Initialized
DEBUG - 2013-09-20 16:48:27 --> Model Class Initialized
DEBUG - 2013-09-20 16:48:27 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:48:27 --> after session initialization................
INFO  - 2013-09-20 16:48:27 --> after rays has been clicked.................
INFO  - 2013-09-20 16:48:27 --> last news id is 0
INFO  - 2013-09-20 16:48:27 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:48:27 --> last news id is 0
INFO  - 2013-09-20 16:48:27 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:48:27 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:48:27 --> Final output sent to browser
DEBUG - 2013-09-20 16:48:27 --> Total execution time: 0.0740
DEBUG - 2013-09-20 16:48:30 --> Config Class Initialized
DEBUG - 2013-09-20 16:48:30 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:48:30 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:48:30 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:48:30 --> URI Class Initialized
DEBUG - 2013-09-20 16:48:30 --> Router Class Initialized
DEBUG - 2013-09-20 16:48:30 --> Output Class Initialized
DEBUG - 2013-09-20 16:48:30 --> Security Class Initialized
DEBUG - 2013-09-20 16:48:30 --> Input Class Initialized
DEBUG - 2013-09-20 16:48:30 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:48:30 --> Language Class Initialized
DEBUG - 2013-09-20 16:48:30 --> Loader Class Initialized
DEBUG - 2013-09-20 16:48:30 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:48:30 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:48:30 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:48:30 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:48:30 --> Session Class Initialized
DEBUG - 2013-09-20 16:48:30 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:48:30 --> Session routines successfully run
DEBUG - 2013-09-20 16:48:30 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:48:30 --> Controller Class Initialized
DEBUG - 2013-09-20 16:48:30 --> Model Class Initialized
DEBUG - 2013-09-20 16:48:30 --> Model Class Initialized
DEBUG - 2013-09-20 16:48:30 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:48:30 --> after session initialization................
INFO  - 2013-09-20 16:48:30 --> after rays has been clicked.................
INFO  - 2013-09-20 16:48:30 --> last news id is 0
INFO  - 2013-09-20 16:48:30 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:48:30 --> last news id is 0
INFO  - 2013-09-20 16:48:30 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:48:30 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:48:30 --> Final output sent to browser
DEBUG - 2013-09-20 16:48:30 --> Total execution time: 0.0630
DEBUG - 2013-09-20 16:48:31 --> Config Class Initialized
DEBUG - 2013-09-20 16:48:31 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:48:31 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:48:31 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:48:31 --> URI Class Initialized
DEBUG - 2013-09-20 16:48:31 --> Router Class Initialized
DEBUG - 2013-09-20 16:48:31 --> Output Class Initialized
DEBUG - 2013-09-20 16:48:31 --> Security Class Initialized
DEBUG - 2013-09-20 16:48:31 --> Input Class Initialized
DEBUG - 2013-09-20 16:48:31 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:48:31 --> Language Class Initialized
DEBUG - 2013-09-20 16:48:31 --> Loader Class Initialized
DEBUG - 2013-09-20 16:48:31 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:48:31 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:48:31 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:48:31 --> Config Class Initialized
DEBUG - 2013-09-20 16:48:31 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:48:31 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:48:31 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:48:31 --> URI Class Initialized
DEBUG - 2013-09-20 16:48:31 --> Router Class Initialized
DEBUG - 2013-09-20 16:48:31 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:48:31 --> Output Class Initialized
DEBUG - 2013-09-20 16:48:31 --> Security Class Initialized
DEBUG - 2013-09-20 16:48:31 --> Session Class Initialized
DEBUG - 2013-09-20 16:48:31 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:48:31 --> Session routines successfully run
DEBUG - 2013-09-20 16:48:31 --> Input Class Initialized
DEBUG - 2013-09-20 16:48:31 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:48:31 --> Language Class Initialized
DEBUG - 2013-09-20 16:48:31 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:48:31 --> Controller Class Initialized
DEBUG - 2013-09-20 16:48:31 --> Model Class Initialized
DEBUG - 2013-09-20 16:48:31 --> Loader Class Initialized
DEBUG - 2013-09-20 16:48:31 --> Model Class Initialized
DEBUG - 2013-09-20 16:48:31 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:48:31 --> after session initialization................
INFO  - 2013-09-20 16:48:31 --> last news id is 1
DEBUG - 2013-09-20 16:48:31 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:48:31 --> Helper loaded: url_helper
INFO  - 2013-09-20 16:48:31 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:48:31 --> last news id is 7
DEBUG - 2013-09-20 16:48:31 --> Helper loaded: html_helper
INFO  - 2013-09-20 16:48:31 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:48:31 --> Final output sent to browser
DEBUG - 2013-09-20 16:48:31 --> Total execution time: 0.0600
DEBUG - 2013-09-20 16:48:31 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:48:31 --> Session Class Initialized
DEBUG - 2013-09-20 16:48:31 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:48:31 --> Session routines successfully run
DEBUG - 2013-09-20 16:48:31 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:48:31 --> Controller Class Initialized
DEBUG - 2013-09-20 16:48:31 --> Model Class Initialized
DEBUG - 2013-09-20 16:48:31 --> Model Class Initialized
DEBUG - 2013-09-20 16:48:31 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:48:31 --> after session initialization................
INFO  - 2013-09-20 16:48:31 --> last news id is 1
INFO  - 2013-09-20 16:48:31 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:48:31 --> last news id is 7
INFO  - 2013-09-20 16:48:31 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:48:31 --> Final output sent to browser
DEBUG - 2013-09-20 16:48:31 --> Total execution time: 0.0590
DEBUG - 2013-09-20 16:48:42 --> Config Class Initialized
DEBUG - 2013-09-20 16:48:42 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:48:42 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:48:42 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:48:42 --> URI Class Initialized
DEBUG - 2013-09-20 16:48:42 --> Router Class Initialized
DEBUG - 2013-09-20 16:48:42 --> Output Class Initialized
DEBUG - 2013-09-20 16:48:42 --> Security Class Initialized
DEBUG - 2013-09-20 16:48:42 --> Input Class Initialized
DEBUG - 2013-09-20 16:48:42 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:48:42 --> Language Class Initialized
DEBUG - 2013-09-20 16:48:42 --> Loader Class Initialized
DEBUG - 2013-09-20 16:48:42 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:48:42 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:48:42 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:48:42 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:48:42 --> Session Class Initialized
DEBUG - 2013-09-20 16:48:42 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:48:42 --> Session routines successfully run
DEBUG - 2013-09-20 16:48:42 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:48:42 --> Controller Class Initialized
DEBUG - 2013-09-20 16:48:42 --> Model Class Initialized
DEBUG - 2013-09-20 16:48:42 --> Model Class Initialized
DEBUG - 2013-09-20 16:48:42 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:48:42 --> after session initialization................
INFO  - 2013-09-20 16:48:42 --> last news id is 1
INFO  - 2013-09-20 16:48:42 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:48:42 --> last news id is 1
INFO  - 2013-09-20 16:48:42 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:48:42 --> Final output sent to browser
DEBUG - 2013-09-20 16:48:42 --> Total execution time: 0.0570
DEBUG - 2013-09-20 16:48:51 --> Config Class Initialized
DEBUG - 2013-09-20 16:48:51 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:48:51 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:48:51 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:48:51 --> URI Class Initialized
DEBUG - 2013-09-20 16:48:51 --> Router Class Initialized
DEBUG - 2013-09-20 16:48:51 --> Output Class Initialized
DEBUG - 2013-09-20 16:48:51 --> Security Class Initialized
DEBUG - 2013-09-20 16:48:51 --> Input Class Initialized
DEBUG - 2013-09-20 16:48:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:48:51 --> Language Class Initialized
DEBUG - 2013-09-20 16:48:51 --> Loader Class Initialized
DEBUG - 2013-09-20 16:48:51 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:48:51 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:48:51 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:48:51 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:48:51 --> Session Class Initialized
DEBUG - 2013-09-20 16:48:51 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:48:51 --> Session routines successfully run
DEBUG - 2013-09-20 16:48:51 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:48:51 --> Controller Class Initialized
DEBUG - 2013-09-20 16:48:51 --> Model Class Initialized
DEBUG - 2013-09-20 16:48:51 --> Model Class Initialized
DEBUG - 2013-09-20 16:48:51 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:48:51 --> after session initialization................
INFO  - 2013-09-20 16:48:51 --> last news id is 1
INFO  - 2013-09-20 16:48:51 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:48:51 --> last news id is 1
INFO  - 2013-09-20 16:48:51 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:48:51 --> Final output sent to browser
DEBUG - 2013-09-20 16:48:51 --> Total execution time: 0.0600
DEBUG - 2013-09-20 16:48:54 --> Config Class Initialized
DEBUG - 2013-09-20 16:48:54 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:48:54 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:48:54 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:48:54 --> URI Class Initialized
DEBUG - 2013-09-20 16:48:54 --> Router Class Initialized
DEBUG - 2013-09-20 16:48:54 --> Output Class Initialized
DEBUG - 2013-09-20 16:48:54 --> Security Class Initialized
DEBUG - 2013-09-20 16:48:54 --> Input Class Initialized
DEBUG - 2013-09-20 16:48:54 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:48:54 --> Language Class Initialized
DEBUG - 2013-09-20 16:48:54 --> Loader Class Initialized
DEBUG - 2013-09-20 16:48:54 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:48:54 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:48:54 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:48:54 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:48:54 --> Session Class Initialized
DEBUG - 2013-09-20 16:48:54 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:48:54 --> Session routines successfully run
DEBUG - 2013-09-20 16:48:54 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:48:54 --> Controller Class Initialized
DEBUG - 2013-09-20 16:48:54 --> Model Class Initialized
DEBUG - 2013-09-20 16:48:54 --> Model Class Initialized
DEBUG - 2013-09-20 16:48:54 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:48:54 --> after session initialization................
INFO  - 2013-09-20 16:48:54 --> last news id is 1
INFO  - 2013-09-20 16:48:54 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:48:54 --> last news id is 1
INFO  - 2013-09-20 16:48:54 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:48:54 --> Final output sent to browser
DEBUG - 2013-09-20 16:48:54 --> Total execution time: 0.0630
DEBUG - 2013-09-20 16:49:01 --> Config Class Initialized
DEBUG - 2013-09-20 16:49:01 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:49:01 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:49:01 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:49:01 --> URI Class Initialized
DEBUG - 2013-09-20 16:49:01 --> Router Class Initialized
DEBUG - 2013-09-20 16:49:01 --> Output Class Initialized
DEBUG - 2013-09-20 16:49:01 --> Security Class Initialized
DEBUG - 2013-09-20 16:49:01 --> Input Class Initialized
DEBUG - 2013-09-20 16:49:01 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:49:01 --> Language Class Initialized
DEBUG - 2013-09-20 16:49:01 --> Loader Class Initialized
DEBUG - 2013-09-20 16:49:01 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:49:01 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:49:01 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:49:01 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:49:01 --> Session Class Initialized
DEBUG - 2013-09-20 16:49:01 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:49:01 --> Session routines successfully run
DEBUG - 2013-09-20 16:49:01 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:49:01 --> Controller Class Initialized
DEBUG - 2013-09-20 16:49:01 --> Model Class Initialized
DEBUG - 2013-09-20 16:49:01 --> Model Class Initialized
DEBUG - 2013-09-20 16:49:01 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:49:01 --> after session initialization................
INFO  - 2013-09-20 16:49:01 --> last news id is 1
INFO  - 2013-09-20 16:49:01 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:49:01 --> last news id is 1
INFO  - 2013-09-20 16:49:01 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:49:01 --> Final output sent to browser
DEBUG - 2013-09-20 16:49:01 --> Total execution time: 0.0650
DEBUG - 2013-09-20 16:49:06 --> Config Class Initialized
DEBUG - 2013-09-20 16:49:06 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:49:06 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:49:06 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:49:06 --> URI Class Initialized
DEBUG - 2013-09-20 16:49:06 --> Router Class Initialized
DEBUG - 2013-09-20 16:49:06 --> Output Class Initialized
DEBUG - 2013-09-20 16:49:06 --> Security Class Initialized
DEBUG - 2013-09-20 16:49:06 --> Input Class Initialized
DEBUG - 2013-09-20 16:49:06 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:49:06 --> Language Class Initialized
DEBUG - 2013-09-20 16:49:06 --> Loader Class Initialized
DEBUG - 2013-09-20 16:49:06 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:49:06 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:49:06 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:49:06 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:49:06 --> Session Class Initialized
DEBUG - 2013-09-20 16:49:06 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:49:06 --> Session routines successfully run
DEBUG - 2013-09-20 16:49:06 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:49:06 --> Controller Class Initialized
DEBUG - 2013-09-20 16:49:06 --> Model Class Initialized
DEBUG - 2013-09-20 16:49:06 --> Model Class Initialized
DEBUG - 2013-09-20 16:49:06 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:49:06 --> after session initialization................
INFO  - 2013-09-20 16:49:06 --> after rays has been clicked.................
INFO  - 2013-09-20 16:49:06 --> last news id is 0
INFO  - 2013-09-20 16:49:06 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:49:06 --> last news id is 0
INFO  - 2013-09-20 16:49:06 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:49:06 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:49:06 --> Final output sent to browser
DEBUG - 2013-09-20 16:49:06 --> Total execution time: 0.0600
DEBUG - 2013-09-20 16:50:35 --> Config Class Initialized
DEBUG - 2013-09-20 16:50:35 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:50:35 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:50:35 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:50:35 --> URI Class Initialized
DEBUG - 2013-09-20 16:50:35 --> Router Class Initialized
DEBUG - 2013-09-20 16:50:35 --> Output Class Initialized
DEBUG - 2013-09-20 16:50:35 --> Security Class Initialized
DEBUG - 2013-09-20 16:50:35 --> Input Class Initialized
DEBUG - 2013-09-20 16:50:35 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:50:35 --> Language Class Initialized
DEBUG - 2013-09-20 16:50:35 --> Loader Class Initialized
DEBUG - 2013-09-20 16:50:35 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:50:35 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:50:35 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:50:35 --> Config Class Initialized
DEBUG - 2013-09-20 16:50:35 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:50:35 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:50:35 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:50:35 --> URI Class Initialized
DEBUG - 2013-09-20 16:50:35 --> Router Class Initialized
DEBUG - 2013-09-20 16:50:35 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:50:35 --> Output Class Initialized
DEBUG - 2013-09-20 16:50:35 --> Session Class Initialized
DEBUG - 2013-09-20 16:50:35 --> Security Class Initialized
DEBUG - 2013-09-20 16:50:35 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:50:35 --> Session routines successfully run
DEBUG - 2013-09-20 16:50:35 --> Input Class Initialized
DEBUG - 2013-09-20 16:50:35 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:50:35 --> Language Class Initialized
DEBUG - 2013-09-20 16:50:35 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:50:35 --> Controller Class Initialized
DEBUG - 2013-09-20 16:50:35 --> Model Class Initialized
DEBUG - 2013-09-20 16:50:35 --> Loader Class Initialized
DEBUG - 2013-09-20 16:50:35 --> Model Class Initialized
DEBUG - 2013-09-20 16:50:35 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:50:35 --> after session initialization................
INFO  - 2013-09-20 16:50:35 --> last news id is 1
DEBUG - 2013-09-20 16:50:35 --> Helper loaded: form_helper
INFO  - 2013-09-20 16:50:35 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:50:35 --> last news id is 7
DEBUG - 2013-09-20 16:50:35 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:50:35 --> Helper loaded: html_helper
INFO  - 2013-09-20 16:50:35 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:50:35 --> Final output sent to browser
DEBUG - 2013-09-20 16:50:35 --> Total execution time: 0.0790
DEBUG - 2013-09-20 16:50:35 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:50:35 --> Session Class Initialized
DEBUG - 2013-09-20 16:50:35 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:50:35 --> Session routines successfully run
DEBUG - 2013-09-20 16:50:35 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:50:35 --> Controller Class Initialized
DEBUG - 2013-09-20 16:50:35 --> Model Class Initialized
DEBUG - 2013-09-20 16:50:35 --> Model Class Initialized
DEBUG - 2013-09-20 16:50:35 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:50:35 --> after session initialization................
INFO  - 2013-09-20 16:50:35 --> last news id is 1
INFO  - 2013-09-20 16:50:35 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:50:35 --> last news id is 7
INFO  - 2013-09-20 16:50:35 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:50:35 --> Final output sent to browser
DEBUG - 2013-09-20 16:50:35 --> Total execution time: 0.0770
DEBUG - 2013-09-20 16:50:45 --> Config Class Initialized
DEBUG - 2013-09-20 16:50:45 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:50:45 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:50:45 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:50:45 --> URI Class Initialized
DEBUG - 2013-09-20 16:50:45 --> Router Class Initialized
DEBUG - 2013-09-20 16:50:45 --> Output Class Initialized
DEBUG - 2013-09-20 16:50:45 --> Security Class Initialized
DEBUG - 2013-09-20 16:50:45 --> Input Class Initialized
DEBUG - 2013-09-20 16:50:45 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:50:45 --> Language Class Initialized
DEBUG - 2013-09-20 16:50:45 --> Loader Class Initialized
DEBUG - 2013-09-20 16:50:45 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:50:45 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:50:45 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:50:45 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:50:45 --> Session Class Initialized
DEBUG - 2013-09-20 16:50:45 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:50:45 --> Session routines successfully run
DEBUG - 2013-09-20 16:50:45 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:50:45 --> Controller Class Initialized
DEBUG - 2013-09-20 16:50:45 --> Model Class Initialized
DEBUG - 2013-09-20 16:50:45 --> Model Class Initialized
DEBUG - 2013-09-20 16:50:45 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:50:45 --> after session initialization................
INFO  - 2013-09-20 16:50:45 --> last news id is 1
INFO  - 2013-09-20 16:50:45 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:50:45 --> last news id is 1
INFO  - 2013-09-20 16:50:45 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:50:45 --> Final output sent to browser
DEBUG - 2013-09-20 16:50:45 --> Total execution time: 0.0530
DEBUG - 2013-09-20 16:50:45 --> Config Class Initialized
DEBUG - 2013-09-20 16:50:45 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:50:45 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:50:45 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:50:45 --> URI Class Initialized
DEBUG - 2013-09-20 16:50:45 --> Router Class Initialized
DEBUG - 2013-09-20 16:50:45 --> Output Class Initialized
DEBUG - 2013-09-20 16:50:45 --> Security Class Initialized
DEBUG - 2013-09-20 16:50:45 --> Input Class Initialized
DEBUG - 2013-09-20 16:50:45 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:50:45 --> Language Class Initialized
DEBUG - 2013-09-20 16:50:45 --> Loader Class Initialized
DEBUG - 2013-09-20 16:50:45 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:50:45 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:50:45 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:50:45 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:50:45 --> Session Class Initialized
DEBUG - 2013-09-20 16:50:45 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:50:45 --> Session routines successfully run
DEBUG - 2013-09-20 16:50:45 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:50:45 --> Controller Class Initialized
DEBUG - 2013-09-20 16:50:45 --> Model Class Initialized
DEBUG - 2013-09-20 16:50:45 --> Model Class Initialized
DEBUG - 2013-09-20 16:50:45 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:50:45 --> after session initialization................
INFO  - 2013-09-20 16:50:45 --> last news id is 1
INFO  - 2013-09-20 16:50:45 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:50:45 --> last news id is 1
INFO  - 2013-09-20 16:50:45 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:50:45 --> Final output sent to browser
DEBUG - 2013-09-20 16:50:45 --> Total execution time: 0.0640
DEBUG - 2013-09-20 16:52:45 --> Config Class Initialized
DEBUG - 2013-09-20 16:52:45 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:52:45 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:52:45 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:52:45 --> URI Class Initialized
DEBUG - 2013-09-20 16:52:45 --> Router Class Initialized
DEBUG - 2013-09-20 16:52:45 --> Output Class Initialized
DEBUG - 2013-09-20 16:52:45 --> Security Class Initialized
DEBUG - 2013-09-20 16:52:45 --> Input Class Initialized
DEBUG - 2013-09-20 16:52:45 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:52:45 --> Language Class Initialized
DEBUG - 2013-09-20 16:52:45 --> Loader Class Initialized
DEBUG - 2013-09-20 16:52:45 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:52:45 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:52:45 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:52:45 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:52:45 --> Session Class Initialized
DEBUG - 2013-09-20 16:52:45 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:52:45 --> Session routines successfully run
DEBUG - 2013-09-20 16:52:45 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:52:45 --> Controller Class Initialized
DEBUG - 2013-09-20 16:52:45 --> Model Class Initialized
DEBUG - 2013-09-20 16:52:45 --> Model Class Initialized
DEBUG - 2013-09-20 16:52:45 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:52:45 --> after session initialization................
INFO  - 2013-09-20 16:52:45 --> last news id is 1
INFO  - 2013-09-20 16:52:45 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:52:45 --> last news id is 1
INFO  - 2013-09-20 16:52:45 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:52:45 --> Final output sent to browser
DEBUG - 2013-09-20 16:52:45 --> Total execution time: 0.0600
DEBUG - 2013-09-20 16:53:01 --> Config Class Initialized
DEBUG - 2013-09-20 16:53:01 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:53:01 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:53:01 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:53:01 --> URI Class Initialized
DEBUG - 2013-09-20 16:53:01 --> Router Class Initialized
DEBUG - 2013-09-20 16:53:01 --> Output Class Initialized
DEBUG - 2013-09-20 16:53:01 --> Security Class Initialized
DEBUG - 2013-09-20 16:53:01 --> Input Class Initialized
DEBUG - 2013-09-20 16:53:01 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:53:01 --> Language Class Initialized
DEBUG - 2013-09-20 16:53:01 --> Loader Class Initialized
DEBUG - 2013-09-20 16:53:01 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:53:01 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:53:01 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:53:01 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:53:01 --> Session Class Initialized
DEBUG - 2013-09-20 16:53:01 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:53:01 --> Session routines successfully run
DEBUG - 2013-09-20 16:53:01 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:53:01 --> Controller Class Initialized
DEBUG - 2013-09-20 16:53:01 --> Model Class Initialized
DEBUG - 2013-09-20 16:53:01 --> Model Class Initialized
DEBUG - 2013-09-20 16:53:01 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:53:01 --> after session initialization................
ERROR - 2013-09-20 16:53:01 --> Severity: Warning  --> Missing argument 1 for user_authorization::index() C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 69
ERROR - 2013-09-20 16:53:01 --> Severity: Notice  --> Undefined variable: message C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 71
DEBUG - 2013-09-20 16:53:01 --> Config Class Initialized
DEBUG - 2013-09-20 16:53:01 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:53:01 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:53:01 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:53:01 --> URI Class Initialized
DEBUG - 2013-09-20 16:53:01 --> Router Class Initialized
DEBUG - 2013-09-20 16:53:01 --> No URI present. Default controller set.
DEBUG - 2013-09-20 16:53:01 --> Output Class Initialized
DEBUG - 2013-09-20 16:53:01 --> Security Class Initialized
DEBUG - 2013-09-20 16:53:01 --> Input Class Initialized
DEBUG - 2013-09-20 16:53:01 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:53:01 --> Language Class Initialized
DEBUG - 2013-09-20 16:53:01 --> Loader Class Initialized
DEBUG - 2013-09-20 16:53:01 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:53:01 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:53:01 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:53:01 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:53:01 --> Session Class Initialized
DEBUG - 2013-09-20 16:53:01 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:53:01 --> Session routines successfully run
DEBUG - 2013-09-20 16:53:01 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:53:01 --> Controller Class Initialized
INFO  - 2013-09-20 16:53:01 --> the form message==>
INFO  - 2013-09-20 16:53:01 --> after the retrieving session list.................//////////
DEBUG - 2013-09-20 16:53:01 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-20 16:53:01 --> Final output sent to browser
DEBUG - 2013-09-20 16:53:01 --> Total execution time: 0.0520
DEBUG - 2013-09-20 16:53:04 --> Config Class Initialized
DEBUG - 2013-09-20 16:53:04 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:53:04 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:53:04 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:53:04 --> URI Class Initialized
DEBUG - 2013-09-20 16:53:04 --> Router Class Initialized
DEBUG - 2013-09-20 16:53:04 --> Output Class Initialized
DEBUG - 2013-09-20 16:53:04 --> Security Class Initialized
DEBUG - 2013-09-20 16:53:04 --> Input Class Initialized
DEBUG - 2013-09-20 16:53:04 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:53:04 --> Language Class Initialized
DEBUG - 2013-09-20 16:53:04 --> Loader Class Initialized
DEBUG - 2013-09-20 16:53:04 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:53:04 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:53:04 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:53:04 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:53:04 --> Session Class Initialized
DEBUG - 2013-09-20 16:53:04 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:53:04 --> Session routines successfully run
DEBUG - 2013-09-20 16:53:04 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:53:04 --> Controller Class Initialized
DEBUG - 2013-09-20 16:53:04 --> Model Class Initialized
DEBUG - 2013-09-20 16:53:04 --> Model Class Initialized
DEBUG - 2013-09-20 16:53:04 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:53:04 --> after session initialization................
INFO  - 2013-09-20 16:53:04 --> after rays has been clicked.................
INFO  - 2013-09-20 16:53:04 --> last news id is 0
INFO  - 2013-09-20 16:53:04 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:53:04 --> last news id is 0
INFO  - 2013-09-20 16:53:04 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:53:04 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:53:04 --> Final output sent to browser
DEBUG - 2013-09-20 16:53:04 --> Total execution time: 0.0730
DEBUG - 2013-09-20 16:53:06 --> Config Class Initialized
DEBUG - 2013-09-20 16:53:06 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:53:06 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:53:06 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:53:06 --> URI Class Initialized
DEBUG - 2013-09-20 16:53:06 --> Router Class Initialized
DEBUG - 2013-09-20 16:53:06 --> Output Class Initialized
DEBUG - 2013-09-20 16:53:06 --> Security Class Initialized
DEBUG - 2013-09-20 16:53:06 --> Input Class Initialized
DEBUG - 2013-09-20 16:53:06 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:53:06 --> Language Class Initialized
DEBUG - 2013-09-20 16:53:06 --> Loader Class Initialized
DEBUG - 2013-09-20 16:53:06 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:53:06 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:53:06 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:53:06 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:53:06 --> Session Class Initialized
DEBUG - 2013-09-20 16:53:06 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:53:06 --> Session routines successfully run
DEBUG - 2013-09-20 16:53:06 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:53:06 --> Controller Class Initialized
DEBUG - 2013-09-20 16:53:06 --> Model Class Initialized
DEBUG - 2013-09-20 16:53:06 --> Model Class Initialized
DEBUG - 2013-09-20 16:53:06 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:53:06 --> after session initialization................
INFO  - 2013-09-20 16:53:06 --> last news id is 1
INFO  - 2013-09-20 16:53:06 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:53:06 --> last news id is 7
INFO  - 2013-09-20 16:53:06 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:53:06 --> Final output sent to browser
DEBUG - 2013-09-20 16:53:06 --> Total execution time: 0.0580
DEBUG - 2013-09-20 16:54:45 --> Config Class Initialized
DEBUG - 2013-09-20 16:54:45 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:54:45 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:54:45 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:54:45 --> URI Class Initialized
DEBUG - 2013-09-20 16:54:45 --> Router Class Initialized
DEBUG - 2013-09-20 16:54:45 --> Output Class Initialized
DEBUG - 2013-09-20 16:54:45 --> Security Class Initialized
DEBUG - 2013-09-20 16:54:45 --> Input Class Initialized
DEBUG - 2013-09-20 16:54:45 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:54:45 --> Language Class Initialized
DEBUG - 2013-09-20 16:54:45 --> Loader Class Initialized
DEBUG - 2013-09-20 16:54:45 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:54:45 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:54:45 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:54:45 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:54:45 --> Session Class Initialized
DEBUG - 2013-09-20 16:54:45 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:54:45 --> Session routines successfully run
DEBUG - 2013-09-20 16:54:45 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:54:45 --> Controller Class Initialized
DEBUG - 2013-09-20 16:54:45 --> Model Class Initialized
DEBUG - 2013-09-20 16:54:45 --> Model Class Initialized
DEBUG - 2013-09-20 16:54:45 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:54:45 --> after session initialization................
INFO  - 2013-09-20 16:54:45 --> after rays has been clicked.................
INFO  - 2013-09-20 16:54:45 --> last news id is 0
INFO  - 2013-09-20 16:54:45 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:54:45 --> last news id is 0
INFO  - 2013-09-20 16:54:45 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:54:45 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:54:45 --> Final output sent to browser
DEBUG - 2013-09-20 16:54:45 --> Total execution time: 0.0640
DEBUG - 2013-09-20 16:54:47 --> Config Class Initialized
DEBUG - 2013-09-20 16:54:47 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:54:47 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:54:47 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:54:47 --> URI Class Initialized
DEBUG - 2013-09-20 16:54:47 --> Router Class Initialized
DEBUG - 2013-09-20 16:54:47 --> Output Class Initialized
DEBUG - 2013-09-20 16:54:47 --> Security Class Initialized
DEBUG - 2013-09-20 16:54:47 --> Input Class Initialized
DEBUG - 2013-09-20 16:54:47 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:54:47 --> Language Class Initialized
DEBUG - 2013-09-20 16:54:47 --> Loader Class Initialized
DEBUG - 2013-09-20 16:54:47 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:54:47 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:54:47 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:54:47 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:54:47 --> Session Class Initialized
DEBUG - 2013-09-20 16:54:47 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:54:47 --> Session routines successfully run
DEBUG - 2013-09-20 16:54:47 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:54:47 --> Controller Class Initialized
DEBUG - 2013-09-20 16:54:47 --> Model Class Initialized
DEBUG - 2013-09-20 16:54:47 --> Model Class Initialized
DEBUG - 2013-09-20 16:54:47 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:54:47 --> after session initialization................
ERROR - 2013-09-20 16:54:47 --> Severity: Warning  --> Missing argument 1 for user_authorization::index() C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 69
ERROR - 2013-09-20 16:54:47 --> Severity: Notice  --> Undefined variable: message C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 71
DEBUG - 2013-09-20 16:54:47 --> Config Class Initialized
DEBUG - 2013-09-20 16:54:47 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:54:47 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:54:47 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:54:47 --> URI Class Initialized
DEBUG - 2013-09-20 16:54:47 --> Router Class Initialized
DEBUG - 2013-09-20 16:54:47 --> No URI present. Default controller set.
DEBUG - 2013-09-20 16:54:47 --> Output Class Initialized
DEBUG - 2013-09-20 16:54:47 --> Security Class Initialized
DEBUG - 2013-09-20 16:54:47 --> Input Class Initialized
DEBUG - 2013-09-20 16:54:47 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:54:47 --> Language Class Initialized
DEBUG - 2013-09-20 16:54:47 --> Loader Class Initialized
DEBUG - 2013-09-20 16:54:47 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:54:47 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:54:47 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:54:47 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:54:47 --> Session Class Initialized
DEBUG - 2013-09-20 16:54:47 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:54:47 --> Session routines successfully run
DEBUG - 2013-09-20 16:54:47 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:54:47 --> Controller Class Initialized
INFO  - 2013-09-20 16:54:47 --> the form message==>
INFO  - 2013-09-20 16:54:47 --> after the retrieving session list.................//////////
DEBUG - 2013-09-20 16:54:47 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-20 16:54:47 --> Final output sent to browser
DEBUG - 2013-09-20 16:54:47 --> Total execution time: 0.0470
DEBUG - 2013-09-20 16:54:48 --> Config Class Initialized
DEBUG - 2013-09-20 16:54:48 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:54:48 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:54:48 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:54:48 --> URI Class Initialized
DEBUG - 2013-09-20 16:54:48 --> Router Class Initialized
DEBUG - 2013-09-20 16:54:48 --> Output Class Initialized
DEBUG - 2013-09-20 16:54:48 --> Security Class Initialized
DEBUG - 2013-09-20 16:54:48 --> Input Class Initialized
DEBUG - 2013-09-20 16:54:48 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:54:48 --> Language Class Initialized
DEBUG - 2013-09-20 16:54:48 --> Loader Class Initialized
DEBUG - 2013-09-20 16:54:48 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:54:48 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:54:48 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:54:48 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:54:48 --> Session Class Initialized
DEBUG - 2013-09-20 16:54:48 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:54:48 --> Session routines successfully run
DEBUG - 2013-09-20 16:54:48 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:54:48 --> Controller Class Initialized
DEBUG - 2013-09-20 16:54:48 --> Model Class Initialized
DEBUG - 2013-09-20 16:54:48 --> Model Class Initialized
DEBUG - 2013-09-20 16:54:48 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:54:48 --> after session initialization................
INFO  - 2013-09-20 16:54:48 --> after rays has been clicked.................
INFO  - 2013-09-20 16:54:48 --> last news id is 0
INFO  - 2013-09-20 16:54:48 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:54:48 --> last news id is 0
INFO  - 2013-09-20 16:54:48 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:54:48 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:54:48 --> Final output sent to browser
DEBUG - 2013-09-20 16:54:48 --> Total execution time: 0.0680
DEBUG - 2013-09-20 16:54:51 --> Config Class Initialized
DEBUG - 2013-09-20 16:54:51 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:54:51 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:54:51 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:54:51 --> URI Class Initialized
DEBUG - 2013-09-20 16:54:51 --> Router Class Initialized
DEBUG - 2013-09-20 16:54:51 --> Output Class Initialized
DEBUG - 2013-09-20 16:54:51 --> Security Class Initialized
DEBUG - 2013-09-20 16:54:51 --> Input Class Initialized
DEBUG - 2013-09-20 16:54:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:54:51 --> Language Class Initialized
DEBUG - 2013-09-20 16:54:51 --> Loader Class Initialized
DEBUG - 2013-09-20 16:54:51 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:54:51 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:54:51 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:54:51 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:54:51 --> Session Class Initialized
DEBUG - 2013-09-20 16:54:51 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:54:51 --> Config Class Initialized
DEBUG - 2013-09-20 16:54:51 --> Session routines successfully run
DEBUG - 2013-09-20 16:54:51 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:54:51 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:54:51 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:54:51 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:54:51 --> Controller Class Initialized
DEBUG - 2013-09-20 16:54:51 --> URI Class Initialized
DEBUG - 2013-09-20 16:54:51 --> Model Class Initialized
DEBUG - 2013-09-20 16:54:51 --> Router Class Initialized
DEBUG - 2013-09-20 16:54:51 --> Model Class Initialized
DEBUG - 2013-09-20 16:54:51 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:54:51 --> after session initialization................
INFO  - 2013-09-20 16:54:51 --> last news id is 1
DEBUG - 2013-09-20 16:54:51 --> Output Class Initialized
DEBUG - 2013-09-20 16:54:51 --> Security Class Initialized
INFO  - 2013-09-20 16:54:51 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:54:51 --> last news id is 7
DEBUG - 2013-09-20 16:54:51 --> Input Class Initialized
INFO  - 2013-09-20 16:54:51 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:54:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:54:51 --> Final output sent to browser
DEBUG - 2013-09-20 16:54:51 --> Total execution time: 0.0620
DEBUG - 2013-09-20 16:54:51 --> Language Class Initialized
DEBUG - 2013-09-20 16:54:51 --> Loader Class Initialized
DEBUG - 2013-09-20 16:54:51 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:54:51 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:54:51 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:54:51 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:54:51 --> Session Class Initialized
DEBUG - 2013-09-20 16:54:51 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:54:51 --> Session routines successfully run
DEBUG - 2013-09-20 16:54:51 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:54:51 --> Controller Class Initialized
DEBUG - 2013-09-20 16:54:51 --> Model Class Initialized
DEBUG - 2013-09-20 16:54:51 --> Model Class Initialized
DEBUG - 2013-09-20 16:54:51 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:54:51 --> after session initialization................
INFO  - 2013-09-20 16:54:51 --> last news id is 1
INFO  - 2013-09-20 16:54:51 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:54:51 --> last news id is 7
INFO  - 2013-09-20 16:54:51 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:54:51 --> Final output sent to browser
DEBUG - 2013-09-20 16:54:51 --> Total execution time: 0.0550
DEBUG - 2013-09-20 16:57:18 --> Config Class Initialized
DEBUG - 2013-09-20 16:57:18 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:57:18 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:57:18 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:57:18 --> URI Class Initialized
DEBUG - 2013-09-20 16:57:18 --> Router Class Initialized
DEBUG - 2013-09-20 16:57:18 --> Output Class Initialized
DEBUG - 2013-09-20 16:57:18 --> Security Class Initialized
DEBUG - 2013-09-20 16:57:18 --> Input Class Initialized
DEBUG - 2013-09-20 16:57:18 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:57:18 --> Language Class Initialized
DEBUG - 2013-09-20 16:57:18 --> Loader Class Initialized
DEBUG - 2013-09-20 16:57:18 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:57:18 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:57:18 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:57:18 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:57:19 --> Session Class Initialized
DEBUG - 2013-09-20 16:57:19 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:57:19 --> Session routines successfully run
DEBUG - 2013-09-20 16:57:19 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:57:19 --> Controller Class Initialized
DEBUG - 2013-09-20 16:57:19 --> Model Class Initialized
DEBUG - 2013-09-20 16:57:19 --> Model Class Initialized
DEBUG - 2013-09-20 16:57:19 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:57:19 --> after session initialization................
INFO  - 2013-09-20 16:57:19 --> last news id is 1
INFO  - 2013-09-20 16:57:19 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:57:19 --> last news id is 7
INFO  - 2013-09-20 16:57:19 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:57:19 --> Final output sent to browser
DEBUG - 2013-09-20 16:57:19 --> Total execution time: 0.0610
DEBUG - 2013-09-20 16:57:20 --> Config Class Initialized
DEBUG - 2013-09-20 16:57:20 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:57:20 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:57:20 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:57:20 --> URI Class Initialized
DEBUG - 2013-09-20 16:57:20 --> Router Class Initialized
DEBUG - 2013-09-20 16:57:20 --> Output Class Initialized
DEBUG - 2013-09-20 16:57:20 --> Security Class Initialized
DEBUG - 2013-09-20 16:57:20 --> Input Class Initialized
DEBUG - 2013-09-20 16:57:20 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:57:20 --> Language Class Initialized
DEBUG - 2013-09-20 16:57:20 --> Loader Class Initialized
DEBUG - 2013-09-20 16:57:20 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:57:20 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:57:20 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:57:20 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:57:20 --> Session Class Initialized
DEBUG - 2013-09-20 16:57:20 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:57:20 --> Session routines successfully run
DEBUG - 2013-09-20 16:57:20 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:57:20 --> Controller Class Initialized
DEBUG - 2013-09-20 16:57:20 --> Model Class Initialized
DEBUG - 2013-09-20 16:57:20 --> Model Class Initialized
DEBUG - 2013-09-20 16:57:20 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:57:20 --> after session initialization................
INFO  - 2013-09-20 16:57:20 --> last news id is 1
INFO  - 2013-09-20 16:57:20 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:57:20 --> last news id is 7
INFO  - 2013-09-20 16:57:20 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:57:20 --> Final output sent to browser
DEBUG - 2013-09-20 16:57:20 --> Total execution time: 0.0580
DEBUG - 2013-09-20 16:57:55 --> Config Class Initialized
DEBUG - 2013-09-20 16:57:55 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:57:55 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:57:55 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:57:55 --> URI Class Initialized
DEBUG - 2013-09-20 16:57:55 --> Router Class Initialized
DEBUG - 2013-09-20 16:57:55 --> Output Class Initialized
DEBUG - 2013-09-20 16:57:55 --> Security Class Initialized
DEBUG - 2013-09-20 16:57:55 --> Input Class Initialized
DEBUG - 2013-09-20 16:57:55 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:57:55 --> Language Class Initialized
DEBUG - 2013-09-20 16:57:55 --> Loader Class Initialized
DEBUG - 2013-09-20 16:57:55 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:57:55 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:57:55 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:57:55 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:57:55 --> Session Class Initialized
DEBUG - 2013-09-20 16:57:55 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:57:55 --> Session routines successfully run
DEBUG - 2013-09-20 16:57:55 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:57:55 --> Controller Class Initialized
DEBUG - 2013-09-20 16:57:55 --> Model Class Initialized
DEBUG - 2013-09-20 16:57:55 --> Model Class Initialized
DEBUG - 2013-09-20 16:57:55 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:57:55 --> after session initialization................
ERROR - 2013-09-20 16:57:55 --> Severity: Warning  --> Missing argument 1 for user_authorization::index() C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 69
ERROR - 2013-09-20 16:57:55 --> Severity: Notice  --> Undefined variable: message C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 71
DEBUG - 2013-09-20 16:57:55 --> Config Class Initialized
DEBUG - 2013-09-20 16:57:55 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:57:55 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:57:55 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:57:55 --> URI Class Initialized
DEBUG - 2013-09-20 16:57:55 --> Router Class Initialized
DEBUG - 2013-09-20 16:57:55 --> No URI present. Default controller set.
DEBUG - 2013-09-20 16:57:55 --> Output Class Initialized
DEBUG - 2013-09-20 16:57:55 --> Security Class Initialized
DEBUG - 2013-09-20 16:57:55 --> Input Class Initialized
DEBUG - 2013-09-20 16:57:55 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:57:55 --> Language Class Initialized
DEBUG - 2013-09-20 16:57:55 --> Loader Class Initialized
DEBUG - 2013-09-20 16:57:55 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:57:55 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:57:55 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:57:55 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:57:55 --> Session Class Initialized
DEBUG - 2013-09-20 16:57:55 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:57:55 --> Session routines successfully run
DEBUG - 2013-09-20 16:57:55 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:57:55 --> Controller Class Initialized
INFO  - 2013-09-20 16:57:55 --> the form message==>
INFO  - 2013-09-20 16:57:55 --> after the retrieving session list.................//////////
DEBUG - 2013-09-20 16:57:55 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-20 16:57:55 --> Final output sent to browser
DEBUG - 2013-09-20 16:57:55 --> Total execution time: 0.0460
DEBUG - 2013-09-20 16:57:56 --> Config Class Initialized
DEBUG - 2013-09-20 16:57:56 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:57:56 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:57:56 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:57:56 --> URI Class Initialized
DEBUG - 2013-09-20 16:57:56 --> Router Class Initialized
DEBUG - 2013-09-20 16:57:57 --> Output Class Initialized
DEBUG - 2013-09-20 16:57:57 --> Security Class Initialized
DEBUG - 2013-09-20 16:57:57 --> Input Class Initialized
DEBUG - 2013-09-20 16:57:57 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:57:57 --> Language Class Initialized
DEBUG - 2013-09-20 16:57:57 --> Loader Class Initialized
DEBUG - 2013-09-20 16:57:57 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:57:57 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:57:57 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:57:57 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:57:57 --> Session Class Initialized
DEBUG - 2013-09-20 16:57:57 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:57:57 --> Session routines successfully run
DEBUG - 2013-09-20 16:57:57 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:57:57 --> Controller Class Initialized
DEBUG - 2013-09-20 16:57:57 --> Model Class Initialized
DEBUG - 2013-09-20 16:57:57 --> Model Class Initialized
DEBUG - 2013-09-20 16:57:57 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:57:57 --> after session initialization................
INFO  - 2013-09-20 16:57:57 --> after rays has been clicked.................
INFO  - 2013-09-20 16:57:57 --> last news id is 0
INFO  - 2013-09-20 16:57:57 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:57:57 --> last news id is 0
INFO  - 2013-09-20 16:57:57 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:57:57 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:57:57 --> Final output sent to browser
DEBUG - 2013-09-20 16:57:57 --> Total execution time: 0.0700
DEBUG - 2013-09-20 16:58:00 --> Config Class Initialized
DEBUG - 2013-09-20 16:58:00 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:58:00 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:58:00 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:58:00 --> URI Class Initialized
DEBUG - 2013-09-20 16:58:00 --> Router Class Initialized
DEBUG - 2013-09-20 16:58:00 --> Output Class Initialized
DEBUG - 2013-09-20 16:58:00 --> Security Class Initialized
DEBUG - 2013-09-20 16:58:00 --> Input Class Initialized
DEBUG - 2013-09-20 16:58:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:58:00 --> Language Class Initialized
DEBUG - 2013-09-20 16:58:00 --> Loader Class Initialized
DEBUG - 2013-09-20 16:58:00 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:58:00 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:58:00 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:58:00 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:58:00 --> Session Class Initialized
DEBUG - 2013-09-20 16:58:00 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:58:00 --> Session routines successfully run
DEBUG - 2013-09-20 16:58:00 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:58:00 --> Controller Class Initialized
DEBUG - 2013-09-20 16:58:00 --> Model Class Initialized
DEBUG - 2013-09-20 16:58:00 --> Model Class Initialized
DEBUG - 2013-09-20 16:58:00 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:58:00 --> after session initialization................
INFO  - 2013-09-20 16:58:00 --> after rays has been clicked.................
INFO  - 2013-09-20 16:58:00 --> last news id is 0
INFO  - 2013-09-20 16:58:00 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:58:00 --> last news id is 0
INFO  - 2013-09-20 16:58:00 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:58:00 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:58:00 --> Final output sent to browser
DEBUG - 2013-09-20 16:58:00 --> Total execution time: 0.0590
DEBUG - 2013-09-20 16:58:02 --> Config Class Initialized
DEBUG - 2013-09-20 16:58:02 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:58:02 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:58:02 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:58:02 --> URI Class Initialized
DEBUG - 2013-09-20 16:58:02 --> Router Class Initialized
DEBUG - 2013-09-20 16:58:02 --> Output Class Initialized
DEBUG - 2013-09-20 16:58:02 --> Security Class Initialized
DEBUG - 2013-09-20 16:58:02 --> Input Class Initialized
DEBUG - 2013-09-20 16:58:02 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:58:02 --> Language Class Initialized
DEBUG - 2013-09-20 16:58:02 --> Loader Class Initialized
DEBUG - 2013-09-20 16:58:02 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:58:02 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:58:02 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:58:02 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:58:02 --> Session Class Initialized
DEBUG - 2013-09-20 16:58:02 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:58:02 --> Session routines successfully run
DEBUG - 2013-09-20 16:58:02 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:58:02 --> Controller Class Initialized
DEBUG - 2013-09-20 16:58:02 --> Model Class Initialized
DEBUG - 2013-09-20 16:58:02 --> Model Class Initialized
DEBUG - 2013-09-20 16:58:02 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:58:02 --> after session initialization................
INFO  - 2013-09-20 16:58:02 --> last news id is 1
INFO  - 2013-09-20 16:58:02 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:58:02 --> last news id is 7
INFO  - 2013-09-20 16:58:02 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:58:02 --> Final output sent to browser
DEBUG - 2013-09-20 16:58:02 --> Total execution time: 0.0520
DEBUG - 2013-09-20 16:58:07 --> Config Class Initialized
DEBUG - 2013-09-20 16:58:07 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:58:07 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:58:07 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:58:07 --> URI Class Initialized
DEBUG - 2013-09-20 16:58:07 --> Router Class Initialized
DEBUG - 2013-09-20 16:58:07 --> Output Class Initialized
DEBUG - 2013-09-20 16:58:07 --> Security Class Initialized
DEBUG - 2013-09-20 16:58:07 --> Input Class Initialized
DEBUG - 2013-09-20 16:58:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:58:07 --> Language Class Initialized
DEBUG - 2013-09-20 16:58:07 --> Loader Class Initialized
DEBUG - 2013-09-20 16:58:07 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:58:07 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:58:07 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:58:07 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:58:07 --> Session Class Initialized
DEBUG - 2013-09-20 16:58:07 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:58:07 --> Session routines successfully run
DEBUG - 2013-09-20 16:58:07 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:58:07 --> Controller Class Initialized
DEBUG - 2013-09-20 16:58:07 --> Model Class Initialized
DEBUG - 2013-09-20 16:58:07 --> Model Class Initialized
DEBUG - 2013-09-20 16:58:07 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:58:07 --> after session initialization................
INFO  - 2013-09-20 16:58:07 --> last news id is 1
INFO  - 2013-09-20 16:58:07 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:58:07 --> last news id is 7
INFO  - 2013-09-20 16:58:07 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:58:07 --> Final output sent to browser
DEBUG - 2013-09-20 16:58:07 --> Total execution time: 0.0600
DEBUG - 2013-09-20 16:58:09 --> Config Class Initialized
DEBUG - 2013-09-20 16:58:09 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:58:09 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:58:09 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:58:09 --> URI Class Initialized
DEBUG - 2013-09-20 16:58:09 --> Router Class Initialized
DEBUG - 2013-09-20 16:58:09 --> Output Class Initialized
DEBUG - 2013-09-20 16:58:09 --> Security Class Initialized
DEBUG - 2013-09-20 16:58:09 --> Input Class Initialized
DEBUG - 2013-09-20 16:58:09 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:58:09 --> Language Class Initialized
DEBUG - 2013-09-20 16:58:09 --> Loader Class Initialized
DEBUG - 2013-09-20 16:58:09 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:58:09 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:58:09 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:58:09 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:58:09 --> Session Class Initialized
DEBUG - 2013-09-20 16:58:09 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:58:09 --> Session routines successfully run
DEBUG - 2013-09-20 16:58:09 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:58:09 --> Controller Class Initialized
DEBUG - 2013-09-20 16:58:09 --> Model Class Initialized
DEBUG - 2013-09-20 16:58:09 --> Model Class Initialized
DEBUG - 2013-09-20 16:58:09 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:58:09 --> after session initialization................
INFO  - 2013-09-20 16:58:09 --> last news id is 1
INFO  - 2013-09-20 16:58:09 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:58:09 --> last news id is 7
INFO  - 2013-09-20 16:58:09 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:58:09 --> Final output sent to browser
DEBUG - 2013-09-20 16:58:09 --> Total execution time: 0.0550
DEBUG - 2013-09-20 16:59:14 --> Config Class Initialized
DEBUG - 2013-09-20 16:59:14 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:59:14 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:59:14 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:59:14 --> URI Class Initialized
DEBUG - 2013-09-20 16:59:14 --> Router Class Initialized
DEBUG - 2013-09-20 16:59:14 --> Output Class Initialized
DEBUG - 2013-09-20 16:59:14 --> Security Class Initialized
DEBUG - 2013-09-20 16:59:14 --> Input Class Initialized
DEBUG - 2013-09-20 16:59:14 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:59:14 --> Language Class Initialized
DEBUG - 2013-09-20 16:59:14 --> Loader Class Initialized
DEBUG - 2013-09-20 16:59:14 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:59:14 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:59:14 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:59:14 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:59:14 --> Session Class Initialized
DEBUG - 2013-09-20 16:59:14 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:59:14 --> Session routines successfully run
DEBUG - 2013-09-20 16:59:14 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:59:14 --> Controller Class Initialized
DEBUG - 2013-09-20 16:59:14 --> Model Class Initialized
DEBUG - 2013-09-20 16:59:14 --> Model Class Initialized
DEBUG - 2013-09-20 16:59:14 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:59:14 --> after session initialization................
ERROR - 2013-09-20 16:59:14 --> Severity: Warning  --> Missing argument 1 for user_authorization::index() C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 69
ERROR - 2013-09-20 16:59:14 --> Severity: Notice  --> Undefined variable: message C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 71
DEBUG - 2013-09-20 16:59:14 --> Config Class Initialized
DEBUG - 2013-09-20 16:59:14 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:59:14 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:59:14 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:59:14 --> URI Class Initialized
DEBUG - 2013-09-20 16:59:14 --> Router Class Initialized
DEBUG - 2013-09-20 16:59:14 --> No URI present. Default controller set.
DEBUG - 2013-09-20 16:59:14 --> Output Class Initialized
DEBUG - 2013-09-20 16:59:14 --> Security Class Initialized
DEBUG - 2013-09-20 16:59:14 --> Input Class Initialized
DEBUG - 2013-09-20 16:59:14 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:59:14 --> Language Class Initialized
DEBUG - 2013-09-20 16:59:14 --> Loader Class Initialized
DEBUG - 2013-09-20 16:59:14 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:59:14 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:59:14 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:59:14 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:59:14 --> Session Class Initialized
DEBUG - 2013-09-20 16:59:14 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:59:14 --> Session routines successfully run
DEBUG - 2013-09-20 16:59:14 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:59:14 --> Controller Class Initialized
INFO  - 2013-09-20 16:59:14 --> the form message==>
INFO  - 2013-09-20 16:59:14 --> after the retrieving session list.................//////////
DEBUG - 2013-09-20 16:59:14 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-20 16:59:14 --> Final output sent to browser
DEBUG - 2013-09-20 16:59:14 --> Total execution time: 0.0660
DEBUG - 2013-09-20 16:59:15 --> Config Class Initialized
DEBUG - 2013-09-20 16:59:15 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:59:15 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:59:15 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:59:15 --> URI Class Initialized
DEBUG - 2013-09-20 16:59:15 --> Router Class Initialized
DEBUG - 2013-09-20 16:59:15 --> Output Class Initialized
DEBUG - 2013-09-20 16:59:15 --> Security Class Initialized
DEBUG - 2013-09-20 16:59:15 --> Input Class Initialized
DEBUG - 2013-09-20 16:59:15 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:59:15 --> Language Class Initialized
DEBUG - 2013-09-20 16:59:15 --> Loader Class Initialized
DEBUG - 2013-09-20 16:59:15 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:59:15 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:59:15 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:59:15 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:59:15 --> Session Class Initialized
DEBUG - 2013-09-20 16:59:15 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:59:15 --> Session routines successfully run
DEBUG - 2013-09-20 16:59:15 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:59:15 --> Controller Class Initialized
DEBUG - 2013-09-20 16:59:15 --> Model Class Initialized
DEBUG - 2013-09-20 16:59:15 --> Model Class Initialized
DEBUG - 2013-09-20 16:59:15 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:59:15 --> after session initialization................
INFO  - 2013-09-20 16:59:15 --> after rays has been clicked.................
INFO  - 2013-09-20 16:59:15 --> last news id is 0
INFO  - 2013-09-20 16:59:15 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:59:15 --> last news id is 0
INFO  - 2013-09-20 16:59:15 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:59:15 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:59:15 --> Final output sent to browser
DEBUG - 2013-09-20 16:59:15 --> Total execution time: 0.0620
DEBUG - 2013-09-20 16:59:19 --> Config Class Initialized
DEBUG - 2013-09-20 16:59:19 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:59:19 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:59:19 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:59:19 --> URI Class Initialized
DEBUG - 2013-09-20 16:59:19 --> Router Class Initialized
DEBUG - 2013-09-20 16:59:19 --> Output Class Initialized
DEBUG - 2013-09-20 16:59:19 --> Security Class Initialized
DEBUG - 2013-09-20 16:59:19 --> Input Class Initialized
DEBUG - 2013-09-20 16:59:19 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:59:19 --> Language Class Initialized
DEBUG - 2013-09-20 16:59:19 --> Loader Class Initialized
DEBUG - 2013-09-20 16:59:19 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:59:19 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:59:19 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:59:19 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:59:19 --> Session Class Initialized
DEBUG - 2013-09-20 16:59:19 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:59:19 --> Session routines successfully run
DEBUG - 2013-09-20 16:59:19 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:59:19 --> Controller Class Initialized
DEBUG - 2013-09-20 16:59:19 --> Model Class Initialized
DEBUG - 2013-09-20 16:59:19 --> Model Class Initialized
DEBUG - 2013-09-20 16:59:19 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:59:19 --> after session initialization................
INFO  - 2013-09-20 16:59:19 --> after rays has been clicked.................
INFO  - 2013-09-20 16:59:19 --> last news id is 0
INFO  - 2013-09-20 16:59:19 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:59:19 --> last news id is 0
INFO  - 2013-09-20 16:59:19 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:59:19 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:59:19 --> Final output sent to browser
DEBUG - 2013-09-20 16:59:19 --> Total execution time: 0.0720
DEBUG - 2013-09-20 16:59:22 --> Config Class Initialized
DEBUG - 2013-09-20 16:59:22 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:59:22 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:59:22 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:59:22 --> URI Class Initialized
DEBUG - 2013-09-20 16:59:22 --> Router Class Initialized
DEBUG - 2013-09-20 16:59:22 --> Output Class Initialized
DEBUG - 2013-09-20 16:59:22 --> Security Class Initialized
DEBUG - 2013-09-20 16:59:22 --> Input Class Initialized
DEBUG - 2013-09-20 16:59:22 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:59:22 --> Language Class Initialized
DEBUG - 2013-09-20 16:59:22 --> Loader Class Initialized
DEBUG - 2013-09-20 16:59:22 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:59:22 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:59:22 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:59:22 --> Config Class Initialized
DEBUG - 2013-09-20 16:59:22 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:59:22 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:59:22 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:59:22 --> URI Class Initialized
DEBUG - 2013-09-20 16:59:22 --> Router Class Initialized
DEBUG - 2013-09-20 16:59:22 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:59:22 --> Output Class Initialized
DEBUG - 2013-09-20 16:59:22 --> Security Class Initialized
DEBUG - 2013-09-20 16:59:22 --> Input Class Initialized
DEBUG - 2013-09-20 16:59:22 --> Session Class Initialized
DEBUG - 2013-09-20 16:59:22 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:59:22 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:59:22 --> Language Class Initialized
DEBUG - 2013-09-20 16:59:22 --> Session routines successfully run
DEBUG - 2013-09-20 16:59:22 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:59:22 --> Controller Class Initialized
DEBUG - 2013-09-20 16:59:22 --> Model Class Initialized
DEBUG - 2013-09-20 16:59:22 --> Loader Class Initialized
DEBUG - 2013-09-20 16:59:22 --> Model Class Initialized
DEBUG - 2013-09-20 16:59:22 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:59:22 --> after session initialization................
INFO  - 2013-09-20 16:59:22 --> last news id is 1
DEBUG - 2013-09-20 16:59:22 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:59:22 --> Helper loaded: url_helper
INFO  - 2013-09-20 16:59:22 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:59:22 --> last news id is 7
DEBUG - 2013-09-20 16:59:22 --> Helper loaded: html_helper
INFO  - 2013-09-20 16:59:22 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:59:22 --> Final output sent to browser
DEBUG - 2013-09-20 16:59:22 --> Total execution time: 0.0710
DEBUG - 2013-09-20 16:59:22 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:59:22 --> Session Class Initialized
DEBUG - 2013-09-20 16:59:22 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:59:22 --> Session routines successfully run
DEBUG - 2013-09-20 16:59:22 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:59:22 --> Controller Class Initialized
DEBUG - 2013-09-20 16:59:22 --> Model Class Initialized
DEBUG - 2013-09-20 16:59:22 --> Model Class Initialized
DEBUG - 2013-09-20 16:59:22 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:59:22 --> after session initialization................
INFO  - 2013-09-20 16:59:22 --> last news id is 1
INFO  - 2013-09-20 16:59:22 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:59:22 --> last news id is 7
INFO  - 2013-09-20 16:59:22 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:59:22 --> Final output sent to browser
DEBUG - 2013-09-20 16:59:22 --> Total execution time: 0.0600
DEBUG - 2013-09-20 16:59:40 --> Config Class Initialized
DEBUG - 2013-09-20 16:59:40 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:59:40 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:59:40 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:59:40 --> URI Class Initialized
DEBUG - 2013-09-20 16:59:40 --> Router Class Initialized
DEBUG - 2013-09-20 16:59:40 --> Output Class Initialized
DEBUG - 2013-09-20 16:59:40 --> Security Class Initialized
DEBUG - 2013-09-20 16:59:40 --> Input Class Initialized
DEBUG - 2013-09-20 16:59:40 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:59:40 --> Language Class Initialized
DEBUG - 2013-09-20 16:59:40 --> Loader Class Initialized
DEBUG - 2013-09-20 16:59:40 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:59:40 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:59:40 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:59:40 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:59:40 --> Session Class Initialized
DEBUG - 2013-09-20 16:59:40 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:59:40 --> Session routines successfully run
DEBUG - 2013-09-20 16:59:40 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:59:40 --> Controller Class Initialized
DEBUG - 2013-09-20 16:59:40 --> Model Class Initialized
DEBUG - 2013-09-20 16:59:40 --> Model Class Initialized
DEBUG - 2013-09-20 16:59:40 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:59:40 --> after session initialization................
INFO  - 2013-09-20 16:59:40 --> after rays has been clicked.................
INFO  - 2013-09-20 16:59:40 --> last news id is 0
INFO  - 2013-09-20 16:59:40 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:59:40 --> last news id is 0
INFO  - 2013-09-20 16:59:40 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:59:40 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 16:59:40 --> Final output sent to browser
DEBUG - 2013-09-20 16:59:40 --> Total execution time: 0.0550
DEBUG - 2013-09-20 16:59:40 --> Config Class Initialized
DEBUG - 2013-09-20 16:59:40 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:59:40 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:59:40 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:59:40 --> URI Class Initialized
DEBUG - 2013-09-20 16:59:40 --> Router Class Initialized
DEBUG - 2013-09-20 16:59:40 --> Output Class Initialized
DEBUG - 2013-09-20 16:59:40 --> Security Class Initialized
DEBUG - 2013-09-20 16:59:40 --> Input Class Initialized
DEBUG - 2013-09-20 16:59:40 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:59:40 --> Language Class Initialized
DEBUG - 2013-09-20 16:59:40 --> Loader Class Initialized
DEBUG - 2013-09-20 16:59:40 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:59:40 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:59:40 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:59:40 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:59:40 --> Session Class Initialized
DEBUG - 2013-09-20 16:59:40 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:59:40 --> Session routines successfully run
DEBUG - 2013-09-20 16:59:40 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:59:40 --> Controller Class Initialized
DEBUG - 2013-09-20 16:59:40 --> Model Class Initialized
DEBUG - 2013-09-20 16:59:40 --> Model Class Initialized
DEBUG - 2013-09-20 16:59:40 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:59:40 --> after session initialization................
INFO  - 2013-09-20 16:59:40 --> last news id is 1
INFO  - 2013-09-20 16:59:40 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:59:40 --> last news id is 7
INFO  - 2013-09-20 16:59:40 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:59:40 --> Final output sent to browser
DEBUG - 2013-09-20 16:59:40 --> Total execution time: 0.0580
DEBUG - 2013-09-20 16:59:42 --> Config Class Initialized
DEBUG - 2013-09-20 16:59:42 --> Hooks Class Initialized
DEBUG - 2013-09-20 16:59:42 --> Utf8 Class Initialized
DEBUG - 2013-09-20 16:59:42 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 16:59:43 --> URI Class Initialized
DEBUG - 2013-09-20 16:59:43 --> Router Class Initialized
DEBUG - 2013-09-20 16:59:43 --> Output Class Initialized
DEBUG - 2013-09-20 16:59:43 --> Security Class Initialized
DEBUG - 2013-09-20 16:59:43 --> Input Class Initialized
DEBUG - 2013-09-20 16:59:43 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 16:59:43 --> Language Class Initialized
DEBUG - 2013-09-20 16:59:43 --> Loader Class Initialized
DEBUG - 2013-09-20 16:59:43 --> Helper loaded: form_helper
DEBUG - 2013-09-20 16:59:43 --> Helper loaded: url_helper
DEBUG - 2013-09-20 16:59:43 --> Helper loaded: html_helper
DEBUG - 2013-09-20 16:59:43 --> Database Driver Class Initialized
DEBUG - 2013-09-20 16:59:43 --> Session Class Initialized
DEBUG - 2013-09-20 16:59:43 --> Helper loaded: string_helper
DEBUG - 2013-09-20 16:59:43 --> Session routines successfully run
DEBUG - 2013-09-20 16:59:43 --> Form Validation Class Initialized
DEBUG - 2013-09-20 16:59:43 --> Controller Class Initialized
DEBUG - 2013-09-20 16:59:43 --> Model Class Initialized
DEBUG - 2013-09-20 16:59:43 --> Model Class Initialized
DEBUG - 2013-09-20 16:59:43 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 16:59:43 --> after session initialization................
INFO  - 2013-09-20 16:59:43 --> last news id is 1
INFO  - 2013-09-20 16:59:43 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 16:59:43 --> last news id is 7
INFO  - 2013-09-20 16:59:43 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 16:59:43 --> Final output sent to browser
DEBUG - 2013-09-20 16:59:43 --> Total execution time: 0.0670
DEBUG - 2013-09-20 17:01:01 --> Config Class Initialized
DEBUG - 2013-09-20 17:01:01 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:01:01 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:01:01 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:01:01 --> URI Class Initialized
DEBUG - 2013-09-20 17:01:01 --> Router Class Initialized
DEBUG - 2013-09-20 17:01:01 --> Output Class Initialized
DEBUG - 2013-09-20 17:01:01 --> Security Class Initialized
DEBUG - 2013-09-20 17:01:01 --> Input Class Initialized
DEBUG - 2013-09-20 17:01:01 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:01:01 --> Language Class Initialized
DEBUG - 2013-09-20 17:01:01 --> Loader Class Initialized
DEBUG - 2013-09-20 17:01:01 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:01:01 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:01:01 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:01:01 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:01:01 --> Session Class Initialized
DEBUG - 2013-09-20 17:01:01 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:01:01 --> Session routines successfully run
DEBUG - 2013-09-20 17:01:01 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:01:01 --> Controller Class Initialized
DEBUG - 2013-09-20 17:01:01 --> Model Class Initialized
DEBUG - 2013-09-20 17:01:01 --> Model Class Initialized
DEBUG - 2013-09-20 17:01:01 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:01:01 --> after session initialization................
INFO  - 2013-09-20 17:01:01 --> after rays has been clicked.................
INFO  - 2013-09-20 17:01:01 --> last news id is 0
INFO  - 2013-09-20 17:01:01 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:01:01 --> last news id is 0
INFO  - 2013-09-20 17:01:01 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:01:01 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 17:01:01 --> Final output sent to browser
DEBUG - 2013-09-20 17:01:01 --> Total execution time: 0.0660
DEBUG - 2013-09-20 17:01:01 --> Config Class Initialized
DEBUG - 2013-09-20 17:01:01 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:01:01 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:01:01 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:01:01 --> URI Class Initialized
DEBUG - 2013-09-20 17:01:01 --> Router Class Initialized
DEBUG - 2013-09-20 17:01:01 --> Output Class Initialized
DEBUG - 2013-09-20 17:01:01 --> Security Class Initialized
DEBUG - 2013-09-20 17:01:01 --> Input Class Initialized
DEBUG - 2013-09-20 17:01:01 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:01:01 --> Language Class Initialized
DEBUG - 2013-09-20 17:01:01 --> Loader Class Initialized
DEBUG - 2013-09-20 17:01:01 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:01:01 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:01:01 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:01:01 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:01:01 --> Session Class Initialized
DEBUG - 2013-09-20 17:01:01 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:01:01 --> Session routines successfully run
DEBUG - 2013-09-20 17:01:01 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:01:01 --> Controller Class Initialized
DEBUG - 2013-09-20 17:01:01 --> Model Class Initialized
DEBUG - 2013-09-20 17:01:01 --> Model Class Initialized
DEBUG - 2013-09-20 17:01:01 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:01:01 --> after session initialization................
INFO  - 2013-09-20 17:01:01 --> last news id is 1
INFO  - 2013-09-20 17:01:01 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:01:01 --> last news id is 7
INFO  - 2013-09-20 17:01:01 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:01:01 --> Final output sent to browser
DEBUG - 2013-09-20 17:01:01 --> Total execution time: 0.0680
DEBUG - 2013-09-20 17:01:04 --> Config Class Initialized
DEBUG - 2013-09-20 17:01:04 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:01:04 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:01:04 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:01:04 --> URI Class Initialized
DEBUG - 2013-09-20 17:01:04 --> Router Class Initialized
DEBUG - 2013-09-20 17:01:04 --> Output Class Initialized
DEBUG - 2013-09-20 17:01:04 --> Security Class Initialized
DEBUG - 2013-09-20 17:01:04 --> Input Class Initialized
DEBUG - 2013-09-20 17:01:04 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:01:04 --> Language Class Initialized
DEBUG - 2013-09-20 17:01:04 --> Loader Class Initialized
DEBUG - 2013-09-20 17:01:04 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:01:04 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:01:04 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:01:04 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:01:04 --> Session Class Initialized
DEBUG - 2013-09-20 17:01:04 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:01:04 --> Session routines successfully run
DEBUG - 2013-09-20 17:01:04 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:01:04 --> Controller Class Initialized
DEBUG - 2013-09-20 17:01:04 --> Model Class Initialized
DEBUG - 2013-09-20 17:01:04 --> Model Class Initialized
DEBUG - 2013-09-20 17:01:04 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:01:04 --> after session initialization................
ERROR - 2013-09-20 17:01:04 --> Severity: Warning  --> Missing argument 1 for user_authorization::index() C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 69
ERROR - 2013-09-20 17:01:04 --> Severity: Notice  --> Undefined variable: message C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 71
DEBUG - 2013-09-20 17:01:04 --> Config Class Initialized
DEBUG - 2013-09-20 17:01:04 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:01:04 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:01:04 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:01:04 --> URI Class Initialized
DEBUG - 2013-09-20 17:01:04 --> Router Class Initialized
DEBUG - 2013-09-20 17:01:04 --> No URI present. Default controller set.
DEBUG - 2013-09-20 17:01:04 --> Output Class Initialized
DEBUG - 2013-09-20 17:01:04 --> Security Class Initialized
DEBUG - 2013-09-20 17:01:04 --> Input Class Initialized
DEBUG - 2013-09-20 17:01:04 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:01:04 --> Language Class Initialized
DEBUG - 2013-09-20 17:01:04 --> Loader Class Initialized
DEBUG - 2013-09-20 17:01:04 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:01:04 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:01:04 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:01:04 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:01:04 --> Session Class Initialized
DEBUG - 2013-09-20 17:01:04 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:01:04 --> Session routines successfully run
DEBUG - 2013-09-20 17:01:04 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:01:04 --> Controller Class Initialized
INFO  - 2013-09-20 17:01:04 --> the form message==>
INFO  - 2013-09-20 17:01:04 --> after the retrieving session list.................//////////
DEBUG - 2013-09-20 17:01:04 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-20 17:01:04 --> Final output sent to browser
DEBUG - 2013-09-20 17:01:04 --> Total execution time: 0.0550
DEBUG - 2013-09-20 17:01:06 --> Config Class Initialized
DEBUG - 2013-09-20 17:01:06 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:01:06 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:01:06 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:01:06 --> URI Class Initialized
DEBUG - 2013-09-20 17:01:06 --> Router Class Initialized
DEBUG - 2013-09-20 17:01:06 --> Output Class Initialized
DEBUG - 2013-09-20 17:01:06 --> Security Class Initialized
DEBUG - 2013-09-20 17:01:06 --> Input Class Initialized
DEBUG - 2013-09-20 17:01:06 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:01:06 --> Language Class Initialized
DEBUG - 2013-09-20 17:01:06 --> Loader Class Initialized
DEBUG - 2013-09-20 17:01:06 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:01:06 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:01:06 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:01:06 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:01:06 --> Session Class Initialized
DEBUG - 2013-09-20 17:01:06 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:01:06 --> Session routines successfully run
DEBUG - 2013-09-20 17:01:06 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:01:06 --> Controller Class Initialized
DEBUG - 2013-09-20 17:01:06 --> Model Class Initialized
DEBUG - 2013-09-20 17:01:06 --> Model Class Initialized
DEBUG - 2013-09-20 17:01:06 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:01:06 --> after session initialization................
INFO  - 2013-09-20 17:01:06 --> after rays has been clicked.................
INFO  - 2013-09-20 17:01:06 --> last news id is 0
INFO  - 2013-09-20 17:01:06 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:01:06 --> last news id is 0
INFO  - 2013-09-20 17:01:06 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:01:06 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 17:01:06 --> Final output sent to browser
DEBUG - 2013-09-20 17:01:06 --> Total execution time: 0.0570
DEBUG - 2013-09-20 17:01:08 --> Config Class Initialized
DEBUG - 2013-09-20 17:01:08 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:01:08 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:01:08 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:01:08 --> URI Class Initialized
DEBUG - 2013-09-20 17:01:08 --> Router Class Initialized
DEBUG - 2013-09-20 17:01:08 --> Output Class Initialized
DEBUG - 2013-09-20 17:01:08 --> Security Class Initialized
DEBUG - 2013-09-20 17:01:08 --> Input Class Initialized
DEBUG - 2013-09-20 17:01:08 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:01:08 --> Language Class Initialized
DEBUG - 2013-09-20 17:01:08 --> Loader Class Initialized
DEBUG - 2013-09-20 17:01:08 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:01:08 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:01:08 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:01:08 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:01:08 --> Session Class Initialized
DEBUG - 2013-09-20 17:01:08 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:01:08 --> Session routines successfully run
DEBUG - 2013-09-20 17:01:08 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:01:08 --> Controller Class Initialized
DEBUG - 2013-09-20 17:01:08 --> Model Class Initialized
DEBUG - 2013-09-20 17:01:08 --> Model Class Initialized
DEBUG - 2013-09-20 17:01:08 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:01:08 --> after session initialization................
INFO  - 2013-09-20 17:01:08 --> last news id is 1
INFO  - 2013-09-20 17:01:08 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:01:08 --> last news id is 7
INFO  - 2013-09-20 17:01:08 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:01:08 --> Final output sent to browser
DEBUG - 2013-09-20 17:01:08 --> Total execution time: 0.0560
DEBUG - 2013-09-20 17:01:31 --> Config Class Initialized
DEBUG - 2013-09-20 17:01:31 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:01:31 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:01:31 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:01:31 --> URI Class Initialized
DEBUG - 2013-09-20 17:01:31 --> Router Class Initialized
DEBUG - 2013-09-20 17:01:31 --> Output Class Initialized
DEBUG - 2013-09-20 17:01:31 --> Security Class Initialized
DEBUG - 2013-09-20 17:01:31 --> Input Class Initialized
DEBUG - 2013-09-20 17:01:31 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:01:31 --> Language Class Initialized
DEBUG - 2013-09-20 17:01:31 --> Loader Class Initialized
DEBUG - 2013-09-20 17:01:31 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:01:31 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:01:31 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:01:31 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:01:31 --> Session Class Initialized
DEBUG - 2013-09-20 17:01:31 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:01:31 --> Session routines successfully run
DEBUG - 2013-09-20 17:01:31 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:01:31 --> Controller Class Initialized
DEBUG - 2013-09-20 17:01:31 --> Model Class Initialized
DEBUG - 2013-09-20 17:01:31 --> Model Class Initialized
DEBUG - 2013-09-20 17:01:31 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:01:31 --> after session initialization................
INFO  - 2013-09-20 17:01:31 --> after rays has been clicked.................
INFO  - 2013-09-20 17:01:31 --> last news id is 0
INFO  - 2013-09-20 17:01:31 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:01:31 --> last news id is 0
INFO  - 2013-09-20 17:01:31 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:01:31 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 17:01:31 --> Final output sent to browser
DEBUG - 2013-09-20 17:01:31 --> Total execution time: 0.0670
DEBUG - 2013-09-20 17:01:31 --> Config Class Initialized
DEBUG - 2013-09-20 17:01:31 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:01:31 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:01:31 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:01:31 --> URI Class Initialized
DEBUG - 2013-09-20 17:01:31 --> Router Class Initialized
DEBUG - 2013-09-20 17:01:31 --> Output Class Initialized
DEBUG - 2013-09-20 17:01:31 --> Security Class Initialized
DEBUG - 2013-09-20 17:01:31 --> Input Class Initialized
DEBUG - 2013-09-20 17:01:31 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:01:31 --> Language Class Initialized
DEBUG - 2013-09-20 17:01:31 --> Loader Class Initialized
DEBUG - 2013-09-20 17:01:31 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:01:31 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:01:31 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:01:31 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:01:31 --> Session Class Initialized
DEBUG - 2013-09-20 17:01:31 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:01:31 --> Session routines successfully run
DEBUG - 2013-09-20 17:01:31 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:01:31 --> Controller Class Initialized
DEBUG - 2013-09-20 17:01:31 --> Model Class Initialized
DEBUG - 2013-09-20 17:01:31 --> Model Class Initialized
DEBUG - 2013-09-20 17:01:31 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:01:31 --> after session initialization................
INFO  - 2013-09-20 17:01:31 --> last news id is 1
INFO  - 2013-09-20 17:01:31 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:01:31 --> last news id is 7
INFO  - 2013-09-20 17:01:31 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:01:31 --> Final output sent to browser
DEBUG - 2013-09-20 17:01:31 --> Total execution time: 0.0590
DEBUG - 2013-09-20 17:01:35 --> Config Class Initialized
DEBUG - 2013-09-20 17:01:35 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:01:35 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:01:35 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:01:35 --> URI Class Initialized
DEBUG - 2013-09-20 17:01:35 --> Router Class Initialized
DEBUG - 2013-09-20 17:01:35 --> Output Class Initialized
DEBUG - 2013-09-20 17:01:35 --> Security Class Initialized
DEBUG - 2013-09-20 17:01:35 --> Input Class Initialized
DEBUG - 2013-09-20 17:01:35 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:01:35 --> Language Class Initialized
DEBUG - 2013-09-20 17:01:35 --> Loader Class Initialized
DEBUG - 2013-09-20 17:01:35 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:01:35 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:01:35 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:01:35 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:01:35 --> Session Class Initialized
DEBUG - 2013-09-20 17:01:35 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:01:35 --> Session routines successfully run
DEBUG - 2013-09-20 17:01:35 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:01:35 --> Controller Class Initialized
DEBUG - 2013-09-20 17:01:35 --> Model Class Initialized
DEBUG - 2013-09-20 17:01:35 --> Model Class Initialized
DEBUG - 2013-09-20 17:01:35 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:01:35 --> after session initialization................
ERROR - 2013-09-20 17:01:35 --> Severity: Warning  --> Missing argument 1 for user_authorization::index() C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 69
ERROR - 2013-09-20 17:01:35 --> Severity: Notice  --> Undefined variable: message C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 71
DEBUG - 2013-09-20 17:01:35 --> Config Class Initialized
DEBUG - 2013-09-20 17:01:35 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:01:35 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:01:35 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:01:35 --> URI Class Initialized
DEBUG - 2013-09-20 17:01:35 --> Router Class Initialized
DEBUG - 2013-09-20 17:01:35 --> No URI present. Default controller set.
DEBUG - 2013-09-20 17:01:35 --> Output Class Initialized
DEBUG - 2013-09-20 17:01:35 --> Security Class Initialized
DEBUG - 2013-09-20 17:01:35 --> Input Class Initialized
DEBUG - 2013-09-20 17:01:35 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:01:35 --> Language Class Initialized
DEBUG - 2013-09-20 17:01:35 --> Loader Class Initialized
DEBUG - 2013-09-20 17:01:35 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:01:35 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:01:35 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:01:35 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:01:35 --> Session Class Initialized
DEBUG - 2013-09-20 17:01:35 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:01:35 --> Session routines successfully run
DEBUG - 2013-09-20 17:01:35 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:01:35 --> Controller Class Initialized
INFO  - 2013-09-20 17:01:35 --> the form message==>
INFO  - 2013-09-20 17:01:35 --> after the retrieving session list.................//////////
DEBUG - 2013-09-20 17:01:35 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-20 17:01:35 --> Final output sent to browser
DEBUG - 2013-09-20 17:01:35 --> Total execution time: 0.0470
DEBUG - 2013-09-20 17:01:36 --> Config Class Initialized
DEBUG - 2013-09-20 17:01:36 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:01:36 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:01:36 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:01:36 --> URI Class Initialized
DEBUG - 2013-09-20 17:01:36 --> Router Class Initialized
DEBUG - 2013-09-20 17:01:36 --> Output Class Initialized
DEBUG - 2013-09-20 17:01:36 --> Security Class Initialized
DEBUG - 2013-09-20 17:01:36 --> Input Class Initialized
DEBUG - 2013-09-20 17:01:36 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:01:36 --> Language Class Initialized
DEBUG - 2013-09-20 17:01:36 --> Loader Class Initialized
DEBUG - 2013-09-20 17:01:36 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:01:36 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:01:36 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:01:36 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:01:36 --> Session Class Initialized
DEBUG - 2013-09-20 17:01:36 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:01:36 --> Session routines successfully run
DEBUG - 2013-09-20 17:01:36 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:01:36 --> Controller Class Initialized
DEBUG - 2013-09-20 17:01:36 --> Model Class Initialized
DEBUG - 2013-09-20 17:01:36 --> Model Class Initialized
DEBUG - 2013-09-20 17:01:36 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:01:36 --> after session initialization................
INFO  - 2013-09-20 17:01:36 --> after rays has been clicked.................
INFO  - 2013-09-20 17:01:36 --> last news id is 0
INFO  - 2013-09-20 17:01:36 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:01:36 --> last news id is 0
INFO  - 2013-09-20 17:01:36 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:01:36 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 17:01:36 --> Final output sent to browser
DEBUG - 2013-09-20 17:01:36 --> Total execution time: 0.0610
DEBUG - 2013-09-20 17:01:38 --> Config Class Initialized
DEBUG - 2013-09-20 17:01:38 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:01:38 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:01:38 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:01:38 --> URI Class Initialized
DEBUG - 2013-09-20 17:01:38 --> Router Class Initialized
DEBUG - 2013-09-20 17:01:38 --> Output Class Initialized
DEBUG - 2013-09-20 17:01:38 --> Security Class Initialized
DEBUG - 2013-09-20 17:01:38 --> Input Class Initialized
DEBUG - 2013-09-20 17:01:38 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:01:38 --> Language Class Initialized
DEBUG - 2013-09-20 17:01:38 --> Loader Class Initialized
DEBUG - 2013-09-20 17:01:38 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:01:38 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:01:38 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:01:38 --> Config Class Initialized
DEBUG - 2013-09-20 17:01:38 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:01:38 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:01:38 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:01:38 --> URI Class Initialized
DEBUG - 2013-09-20 17:01:38 --> Router Class Initialized
DEBUG - 2013-09-20 17:01:38 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:01:38 --> Output Class Initialized
DEBUG - 2013-09-20 17:01:38 --> Session Class Initialized
DEBUG - 2013-09-20 17:01:38 --> Security Class Initialized
DEBUG - 2013-09-20 17:01:38 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:01:38 --> Session routines successfully run
DEBUG - 2013-09-20 17:01:38 --> Input Class Initialized
DEBUG - 2013-09-20 17:01:38 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:01:38 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:01:38 --> Language Class Initialized
DEBUG - 2013-09-20 17:01:38 --> Controller Class Initialized
DEBUG - 2013-09-20 17:01:38 --> Model Class Initialized
DEBUG - 2013-09-20 17:01:38 --> Model Class Initialized
DEBUG - 2013-09-20 17:01:38 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:01:38 --> after session initialization................
INFO  - 2013-09-20 17:01:38 --> last news id is 1
DEBUG - 2013-09-20 17:01:38 --> Loader Class Initialized
INFO  - 2013-09-20 17:01:38 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:01:38 --> last news id is 7
DEBUG - 2013-09-20 17:01:38 --> Helper loaded: form_helper
INFO  - 2013-09-20 17:01:38 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:01:38 --> Final output sent to browser
DEBUG - 2013-09-20 17:01:38 --> Total execution time: 0.0620
DEBUG - 2013-09-20 17:01:38 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:01:38 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:01:38 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:01:38 --> Session Class Initialized
DEBUG - 2013-09-20 17:01:38 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:01:38 --> Session routines successfully run
DEBUG - 2013-09-20 17:01:38 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:01:38 --> Controller Class Initialized
DEBUG - 2013-09-20 17:01:38 --> Model Class Initialized
DEBUG - 2013-09-20 17:01:38 --> Model Class Initialized
DEBUG - 2013-09-20 17:01:38 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:01:38 --> after session initialization................
INFO  - 2013-09-20 17:01:38 --> last news id is 1
INFO  - 2013-09-20 17:01:38 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:01:38 --> last news id is 7
INFO  - 2013-09-20 17:01:38 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:01:38 --> Final output sent to browser
DEBUG - 2013-09-20 17:01:38 --> Total execution time: 0.0630
DEBUG - 2013-09-20 17:01:49 --> Config Class Initialized
DEBUG - 2013-09-20 17:01:49 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:01:49 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:01:49 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:01:49 --> URI Class Initialized
DEBUG - 2013-09-20 17:01:49 --> Router Class Initialized
DEBUG - 2013-09-20 17:01:49 --> Output Class Initialized
DEBUG - 2013-09-20 17:01:49 --> Security Class Initialized
DEBUG - 2013-09-20 17:01:49 --> Input Class Initialized
DEBUG - 2013-09-20 17:01:49 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:01:49 --> Language Class Initialized
DEBUG - 2013-09-20 17:01:49 --> Config Class Initialized
DEBUG - 2013-09-20 17:01:49 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:01:49 --> Loader Class Initialized
DEBUG - 2013-09-20 17:01:49 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:01:49 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:01:49 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:01:49 --> URI Class Initialized
DEBUG - 2013-09-20 17:01:49 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:01:49 --> Router Class Initialized
DEBUG - 2013-09-20 17:01:49 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:01:49 --> Output Class Initialized
DEBUG - 2013-09-20 17:01:49 --> Security Class Initialized
DEBUG - 2013-09-20 17:01:49 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:01:49 --> Input Class Initialized
DEBUG - 2013-09-20 17:01:49 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:01:49 --> Language Class Initialized
DEBUG - 2013-09-20 17:01:49 --> Session Class Initialized
DEBUG - 2013-09-20 17:01:49 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:01:49 --> Session routines successfully run
DEBUG - 2013-09-20 17:01:49 --> Loader Class Initialized
DEBUG - 2013-09-20 17:01:49 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:01:49 --> Controller Class Initialized
DEBUG - 2013-09-20 17:01:49 --> Model Class Initialized
DEBUG - 2013-09-20 17:01:49 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:01:49 --> Model Class Initialized
DEBUG - 2013-09-20 17:01:49 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:01:49 --> after session initialization................
INFO  - 2013-09-20 17:01:49 --> last news id is 1
DEBUG - 2013-09-20 17:01:49 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:01:49 --> Helper loaded: html_helper
INFO  - 2013-09-20 17:01:49 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:01:49 --> last news id is 1
INFO  - 2013-09-20 17:01:49 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:01:49 --> Final output sent to browser
DEBUG - 2013-09-20 17:01:49 --> Total execution time: 0.0680
DEBUG - 2013-09-20 17:01:49 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:01:49 --> Session Class Initialized
DEBUG - 2013-09-20 17:01:49 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:01:49 --> Session routines successfully run
DEBUG - 2013-09-20 17:01:49 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:01:49 --> Controller Class Initialized
DEBUG - 2013-09-20 17:01:49 --> Model Class Initialized
DEBUG - 2013-09-20 17:01:49 --> Model Class Initialized
DEBUG - 2013-09-20 17:01:49 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:01:49 --> after session initialization................
INFO  - 2013-09-20 17:01:49 --> last news id is 1
INFO  - 2013-09-20 17:01:49 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:01:49 --> last news id is 1
INFO  - 2013-09-20 17:01:49 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:01:49 --> Final output sent to browser
DEBUG - 2013-09-20 17:01:49 --> Total execution time: 0.0720
DEBUG - 2013-09-20 17:01:58 --> Config Class Initialized
DEBUG - 2013-09-20 17:01:58 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:01:58 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:01:58 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:01:58 --> URI Class Initialized
DEBUG - 2013-09-20 17:01:58 --> Router Class Initialized
DEBUG - 2013-09-20 17:01:58 --> Output Class Initialized
DEBUG - 2013-09-20 17:01:58 --> Security Class Initialized
DEBUG - 2013-09-20 17:01:58 --> Input Class Initialized
DEBUG - 2013-09-20 17:01:58 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:01:58 --> Language Class Initialized
DEBUG - 2013-09-20 17:01:58 --> Loader Class Initialized
DEBUG - 2013-09-20 17:01:58 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:01:58 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:01:58 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:01:58 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:01:58 --> Session Class Initialized
DEBUG - 2013-09-20 17:01:58 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:01:58 --> Session routines successfully run
DEBUG - 2013-09-20 17:01:58 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:01:58 --> Controller Class Initialized
DEBUG - 2013-09-20 17:01:58 --> Model Class Initialized
DEBUG - 2013-09-20 17:01:58 --> Model Class Initialized
DEBUG - 2013-09-20 17:01:58 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:01:58 --> after session initialization................
INFO  - 2013-09-20 17:01:58 --> last news id is 1
INFO  - 2013-09-20 17:01:58 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:01:58 --> last news id is 1
INFO  - 2013-09-20 17:01:58 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:01:58 --> Final output sent to browser
DEBUG - 2013-09-20 17:01:58 --> Total execution time: 0.0590
DEBUG - 2013-09-20 17:03:11 --> Config Class Initialized
DEBUG - 2013-09-20 17:03:11 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:03:11 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:03:11 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:03:11 --> URI Class Initialized
DEBUG - 2013-09-20 17:03:11 --> Router Class Initialized
DEBUG - 2013-09-20 17:03:11 --> Output Class Initialized
DEBUG - 2013-09-20 17:03:11 --> Security Class Initialized
DEBUG - 2013-09-20 17:03:11 --> Input Class Initialized
DEBUG - 2013-09-20 17:03:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:03:11 --> Language Class Initialized
DEBUG - 2013-09-20 17:03:11 --> Loader Class Initialized
DEBUG - 2013-09-20 17:03:11 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:03:11 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:03:11 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:03:11 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:03:11 --> Session Class Initialized
DEBUG - 2013-09-20 17:03:11 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:03:11 --> Session routines successfully run
DEBUG - 2013-09-20 17:03:11 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:03:11 --> Controller Class Initialized
DEBUG - 2013-09-20 17:03:11 --> Model Class Initialized
DEBUG - 2013-09-20 17:03:11 --> Model Class Initialized
DEBUG - 2013-09-20 17:03:11 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:03:11 --> after session initialization................
ERROR - 2013-09-20 17:03:11 --> Severity: Warning  --> Missing argument 1 for user_authorization::index() C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 69
ERROR - 2013-09-20 17:03:11 --> Severity: Notice  --> Undefined variable: message C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 71
DEBUG - 2013-09-20 17:03:11 --> Config Class Initialized
DEBUG - 2013-09-20 17:03:11 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:03:11 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:03:11 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:03:11 --> URI Class Initialized
DEBUG - 2013-09-20 17:03:11 --> Router Class Initialized
DEBUG - 2013-09-20 17:03:11 --> No URI present. Default controller set.
DEBUG - 2013-09-20 17:03:11 --> Output Class Initialized
DEBUG - 2013-09-20 17:03:11 --> Security Class Initialized
DEBUG - 2013-09-20 17:03:11 --> Input Class Initialized
DEBUG - 2013-09-20 17:03:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:03:11 --> Language Class Initialized
DEBUG - 2013-09-20 17:03:11 --> Loader Class Initialized
DEBUG - 2013-09-20 17:03:11 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:03:11 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:03:11 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:03:11 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:03:11 --> Session Class Initialized
DEBUG - 2013-09-20 17:03:11 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:03:11 --> Session routines successfully run
DEBUG - 2013-09-20 17:03:11 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:03:11 --> Controller Class Initialized
INFO  - 2013-09-20 17:03:11 --> the form message==>
INFO  - 2013-09-20 17:03:11 --> after the retrieving session list.................//////////
DEBUG - 2013-09-20 17:03:11 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-20 17:03:11 --> Final output sent to browser
DEBUG - 2013-09-20 17:03:11 --> Total execution time: 0.0470
DEBUG - 2013-09-20 17:03:12 --> Config Class Initialized
DEBUG - 2013-09-20 17:03:12 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:03:12 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:03:12 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:03:12 --> URI Class Initialized
DEBUG - 2013-09-20 17:03:12 --> Router Class Initialized
DEBUG - 2013-09-20 17:03:12 --> Output Class Initialized
DEBUG - 2013-09-20 17:03:12 --> Security Class Initialized
DEBUG - 2013-09-20 17:03:12 --> Input Class Initialized
DEBUG - 2013-09-20 17:03:12 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:03:12 --> Language Class Initialized
DEBUG - 2013-09-20 17:03:12 --> Loader Class Initialized
DEBUG - 2013-09-20 17:03:12 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:03:12 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:03:12 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:03:12 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:03:12 --> Session Class Initialized
DEBUG - 2013-09-20 17:03:12 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:03:12 --> Session routines successfully run
DEBUG - 2013-09-20 17:03:12 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:03:12 --> Controller Class Initialized
DEBUG - 2013-09-20 17:03:12 --> Model Class Initialized
DEBUG - 2013-09-20 17:03:12 --> Model Class Initialized
DEBUG - 2013-09-20 17:03:12 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:03:12 --> after session initialization................
INFO  - 2013-09-20 17:03:12 --> after rays has been clicked.................
INFO  - 2013-09-20 17:03:12 --> last news id is 0
INFO  - 2013-09-20 17:03:12 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:03:12 --> last news id is 0
INFO  - 2013-09-20 17:03:12 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:03:12 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 17:03:12 --> Final output sent to browser
DEBUG - 2013-09-20 17:03:12 --> Total execution time: 0.0730
DEBUG - 2013-09-20 17:03:15 --> Config Class Initialized
DEBUG - 2013-09-20 17:03:15 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:03:15 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:03:15 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:03:15 --> URI Class Initialized
DEBUG - 2013-09-20 17:03:15 --> Router Class Initialized
DEBUG - 2013-09-20 17:03:15 --> Output Class Initialized
DEBUG - 2013-09-20 17:03:15 --> Security Class Initialized
DEBUG - 2013-09-20 17:03:15 --> Input Class Initialized
DEBUG - 2013-09-20 17:03:15 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:03:15 --> Language Class Initialized
DEBUG - 2013-09-20 17:03:15 --> Loader Class Initialized
DEBUG - 2013-09-20 17:03:15 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:03:15 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:03:15 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:03:15 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:03:15 --> Session Class Initialized
DEBUG - 2013-09-20 17:03:15 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:03:15 --> Session routines successfully run
DEBUG - 2013-09-20 17:03:15 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:03:15 --> Controller Class Initialized
DEBUG - 2013-09-20 17:03:15 --> Model Class Initialized
DEBUG - 2013-09-20 17:03:15 --> Model Class Initialized
DEBUG - 2013-09-20 17:03:15 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:03:15 --> after session initialization................
INFO  - 2013-09-20 17:03:15 --> after rays has been clicked.................
INFO  - 2013-09-20 17:03:15 --> last news id is 0
INFO  - 2013-09-20 17:03:15 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:03:15 --> last news id is 0
INFO  - 2013-09-20 17:03:15 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:03:15 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 17:03:15 --> Final output sent to browser
DEBUG - 2013-09-20 17:03:15 --> Total execution time: 0.0620
DEBUG - 2013-09-20 17:03:18 --> Config Class Initialized
DEBUG - 2013-09-20 17:03:18 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:03:18 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:03:18 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:03:18 --> URI Class Initialized
DEBUG - 2013-09-20 17:03:18 --> Config Class Initialized
DEBUG - 2013-09-20 17:03:18 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:03:18 --> Router Class Initialized
DEBUG - 2013-09-20 17:03:18 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:03:18 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:03:18 --> URI Class Initialized
DEBUG - 2013-09-20 17:03:18 --> Output Class Initialized
DEBUG - 2013-09-20 17:03:18 --> Security Class Initialized
DEBUG - 2013-09-20 17:03:18 --> Router Class Initialized
DEBUG - 2013-09-20 17:03:18 --> Input Class Initialized
DEBUG - 2013-09-20 17:03:18 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:03:18 --> Output Class Initialized
DEBUG - 2013-09-20 17:03:18 --> Security Class Initialized
DEBUG - 2013-09-20 17:03:18 --> Language Class Initialized
DEBUG - 2013-09-20 17:03:18 --> Input Class Initialized
DEBUG - 2013-09-20 17:03:18 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:03:18 --> Language Class Initialized
DEBUG - 2013-09-20 17:03:18 --> Loader Class Initialized
DEBUG - 2013-09-20 17:03:18 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:03:18 --> Loader Class Initialized
DEBUG - 2013-09-20 17:03:18 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:03:18 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:03:18 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:03:18 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:03:18 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:03:18 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:03:18 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:03:18 --> Session Class Initialized
DEBUG - 2013-09-20 17:03:18 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:03:18 --> Session routines successfully run
DEBUG - 2013-09-20 17:03:18 --> Session Class Initialized
DEBUG - 2013-09-20 17:03:18 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:03:18 --> Controller Class Initialized
DEBUG - 2013-09-20 17:03:18 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:03:18 --> Model Class Initialized
DEBUG - 2013-09-20 17:03:18 --> Session routines successfully run
DEBUG - 2013-09-20 17:03:18 --> Model Class Initialized
DEBUG - 2013-09-20 17:03:18 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:03:18 --> after session initialization................
INFO  - 2013-09-20 17:03:18 --> last news id is 1
DEBUG - 2013-09-20 17:03:18 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:03:18 --> Controller Class Initialized
DEBUG - 2013-09-20 17:03:18 --> Model Class Initialized
INFO  - 2013-09-20 17:03:18 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:03:18 --> last news id is 7
DEBUG - 2013-09-20 17:03:18 --> Model Class Initialized
INFO  - 2013-09-20 17:03:18 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:03:18 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:03:18 --> after session initialization................
DEBUG - 2013-09-20 17:03:18 --> Final output sent to browser
DEBUG - 2013-09-20 17:03:18 --> Total execution time: 0.0690
INFO  - 2013-09-20 17:03:18 --> last news id is 1
INFO  - 2013-09-20 17:03:18 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:03:18 --> last news id is 7
INFO  - 2013-09-20 17:03:18 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:03:18 --> Final output sent to browser
DEBUG - 2013-09-20 17:03:18 --> Total execution time: 0.0740
DEBUG - 2013-09-20 17:04:06 --> Config Class Initialized
DEBUG - 2013-09-20 17:04:06 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:04:06 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:04:06 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:04:06 --> URI Class Initialized
DEBUG - 2013-09-20 17:04:06 --> Router Class Initialized
DEBUG - 2013-09-20 17:04:06 --> Config Class Initialized
DEBUG - 2013-09-20 17:04:06 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:04:06 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:04:06 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:04:06 --> Output Class Initialized
DEBUG - 2013-09-20 17:04:06 --> URI Class Initialized
DEBUG - 2013-09-20 17:04:06 --> Security Class Initialized
DEBUG - 2013-09-20 17:04:06 --> Router Class Initialized
DEBUG - 2013-09-20 17:04:06 --> Input Class Initialized
DEBUG - 2013-09-20 17:04:06 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:04:06 --> Output Class Initialized
DEBUG - 2013-09-20 17:04:06 --> Language Class Initialized
DEBUG - 2013-09-20 17:04:06 --> Security Class Initialized
DEBUG - 2013-09-20 17:04:06 --> Input Class Initialized
DEBUG - 2013-09-20 17:04:06 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:04:06 --> Loader Class Initialized
DEBUG - 2013-09-20 17:04:06 --> Language Class Initialized
DEBUG - 2013-09-20 17:04:06 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:04:06 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:04:06 --> Loader Class Initialized
DEBUG - 2013-09-20 17:04:06 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:04:06 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:04:06 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:04:06 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:04:06 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:04:06 --> Session Class Initialized
DEBUG - 2013-09-20 17:04:06 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:04:06 --> Session routines successfully run
DEBUG - 2013-09-20 17:04:06 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:04:06 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:04:06 --> Controller Class Initialized
DEBUG - 2013-09-20 17:04:06 --> Model Class Initialized
DEBUG - 2013-09-20 17:04:06 --> Session Class Initialized
DEBUG - 2013-09-20 17:04:06 --> Model Class Initialized
DEBUG - 2013-09-20 17:04:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2013-09-20 17:04:06 --> Helper loaded: string_helper
INFO  - 2013-09-20 17:04:06 --> after session initialization................
INFO  - 2013-09-20 17:04:06 --> last news id is 1
DEBUG - 2013-09-20 17:04:06 --> Session routines successfully run
INFO  - 2013-09-20 17:04:06 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
DEBUG - 2013-09-20 17:04:06 --> Form Validation Class Initialized
INFO  - 2013-09-20 17:04:06 --> last news id is 1
DEBUG - 2013-09-20 17:04:06 --> Controller Class Initialized
DEBUG - 2013-09-20 17:04:06 --> Model Class Initialized
INFO  - 2013-09-20 17:04:06 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:04:06 --> Model Class Initialized
DEBUG - 2013-09-20 17:04:06 --> Final output sent to browser
DEBUG - 2013-09-20 17:04:06 --> Total execution time: 0.0640
DEBUG - 2013-09-20 17:04:06 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:04:06 --> after session initialization................
INFO  - 2013-09-20 17:04:06 --> last news id is 1
INFO  - 2013-09-20 17:04:06 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:04:06 --> last news id is 1
INFO  - 2013-09-20 17:04:06 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:04:06 --> Final output sent to browser
DEBUG - 2013-09-20 17:04:06 --> Total execution time: 0.0630
DEBUG - 2013-09-20 17:04:30 --> Config Class Initialized
DEBUG - 2013-09-20 17:04:30 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:04:30 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:04:30 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:04:30 --> URI Class Initialized
DEBUG - 2013-09-20 17:04:30 --> Router Class Initialized
DEBUG - 2013-09-20 17:04:30 --> Output Class Initialized
DEBUG - 2013-09-20 17:04:30 --> Security Class Initialized
DEBUG - 2013-09-20 17:04:30 --> Input Class Initialized
DEBUG - 2013-09-20 17:04:30 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:04:30 --> Language Class Initialized
DEBUG - 2013-09-20 17:04:30 --> Loader Class Initialized
DEBUG - 2013-09-20 17:04:30 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:04:30 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:04:30 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:04:30 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:04:30 --> Session Class Initialized
DEBUG - 2013-09-20 17:04:30 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:04:30 --> Session routines successfully run
DEBUG - 2013-09-20 17:04:30 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:04:30 --> Controller Class Initialized
DEBUG - 2013-09-20 17:04:30 --> Model Class Initialized
DEBUG - 2013-09-20 17:04:30 --> Model Class Initialized
DEBUG - 2013-09-20 17:04:30 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:04:30 --> after session initialization................
INFO  - 2013-09-20 17:04:30 --> last news id is 1
INFO  - 2013-09-20 17:04:30 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:04:30 --> last news id is 1
INFO  - 2013-09-20 17:04:30 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:04:30 --> Final output sent to browser
DEBUG - 2013-09-20 17:04:30 --> Total execution time: 0.0550
DEBUG - 2013-09-20 17:04:43 --> Config Class Initialized
DEBUG - 2013-09-20 17:04:43 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:04:43 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:04:43 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:04:43 --> URI Class Initialized
DEBUG - 2013-09-20 17:04:43 --> Router Class Initialized
DEBUG - 2013-09-20 17:04:43 --> Output Class Initialized
DEBUG - 2013-09-20 17:04:43 --> Security Class Initialized
DEBUG - 2013-09-20 17:04:43 --> Input Class Initialized
DEBUG - 2013-09-20 17:04:43 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:04:43 --> Language Class Initialized
DEBUG - 2013-09-20 17:04:43 --> Loader Class Initialized
DEBUG - 2013-09-20 17:04:43 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:04:43 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:04:43 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:04:43 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:04:43 --> Session Class Initialized
DEBUG - 2013-09-20 17:04:43 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:04:43 --> Session routines successfully run
DEBUG - 2013-09-20 17:04:43 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:04:43 --> Controller Class Initialized
DEBUG - 2013-09-20 17:04:43 --> Model Class Initialized
DEBUG - 2013-09-20 17:04:43 --> Model Class Initialized
DEBUG - 2013-09-20 17:04:43 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:04:43 --> after session initialization................
ERROR - 2013-09-20 17:04:43 --> Severity: Warning  --> Missing argument 1 for user_authorization::index() C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 69
ERROR - 2013-09-20 17:04:43 --> Severity: Notice  --> Undefined variable: message C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 71
DEBUG - 2013-09-20 17:04:43 --> Config Class Initialized
DEBUG - 2013-09-20 17:04:43 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:04:43 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:04:43 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:04:43 --> URI Class Initialized
DEBUG - 2013-09-20 17:04:43 --> Router Class Initialized
DEBUG - 2013-09-20 17:04:43 --> No URI present. Default controller set.
DEBUG - 2013-09-20 17:04:43 --> Output Class Initialized
DEBUG - 2013-09-20 17:04:43 --> Security Class Initialized
DEBUG - 2013-09-20 17:04:43 --> Input Class Initialized
DEBUG - 2013-09-20 17:04:43 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:04:43 --> Language Class Initialized
DEBUG - 2013-09-20 17:04:43 --> Loader Class Initialized
DEBUG - 2013-09-20 17:04:43 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:04:43 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:04:43 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:04:43 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:04:43 --> Session Class Initialized
DEBUG - 2013-09-20 17:04:43 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:04:43 --> Session routines successfully run
DEBUG - 2013-09-20 17:04:43 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:04:43 --> Controller Class Initialized
INFO  - 2013-09-20 17:04:43 --> the form message==>
INFO  - 2013-09-20 17:04:43 --> after the retrieving session list.................//////////
DEBUG - 2013-09-20 17:04:43 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-20 17:04:43 --> Final output sent to browser
DEBUG - 2013-09-20 17:04:43 --> Total execution time: 0.0430
DEBUG - 2013-09-20 17:04:44 --> Config Class Initialized
DEBUG - 2013-09-20 17:04:44 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:04:44 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:04:44 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:04:44 --> URI Class Initialized
DEBUG - 2013-09-20 17:04:44 --> Router Class Initialized
DEBUG - 2013-09-20 17:04:44 --> Output Class Initialized
DEBUG - 2013-09-20 17:04:44 --> Security Class Initialized
DEBUG - 2013-09-20 17:04:44 --> Input Class Initialized
DEBUG - 2013-09-20 17:04:44 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:04:44 --> Language Class Initialized
DEBUG - 2013-09-20 17:04:44 --> Loader Class Initialized
DEBUG - 2013-09-20 17:04:44 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:04:44 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:04:44 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:04:44 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:04:44 --> Session Class Initialized
DEBUG - 2013-09-20 17:04:44 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:04:44 --> Session routines successfully run
DEBUG - 2013-09-20 17:04:44 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:04:44 --> Controller Class Initialized
DEBUG - 2013-09-20 17:04:44 --> Model Class Initialized
DEBUG - 2013-09-20 17:04:44 --> Model Class Initialized
DEBUG - 2013-09-20 17:04:44 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:04:44 --> after session initialization................
INFO  - 2013-09-20 17:04:44 --> after rays has been clicked.................
INFO  - 2013-09-20 17:04:44 --> last news id is 0
INFO  - 2013-09-20 17:04:44 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:04:44 --> last news id is 0
INFO  - 2013-09-20 17:04:44 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:04:44 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 17:04:44 --> Final output sent to browser
DEBUG - 2013-09-20 17:04:44 --> Total execution time: 0.0550
DEBUG - 2013-09-20 17:04:46 --> Config Class Initialized
DEBUG - 2013-09-20 17:04:46 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:04:46 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:04:46 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:04:46 --> URI Class Initialized
DEBUG - 2013-09-20 17:04:46 --> Router Class Initialized
DEBUG - 2013-09-20 17:04:46 --> Output Class Initialized
DEBUG - 2013-09-20 17:04:46 --> Security Class Initialized
DEBUG - 2013-09-20 17:04:46 --> Input Class Initialized
DEBUG - 2013-09-20 17:04:46 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:04:46 --> Language Class Initialized
DEBUG - 2013-09-20 17:04:46 --> Loader Class Initialized
DEBUG - 2013-09-20 17:04:46 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:04:46 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:04:46 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:04:46 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:04:46 --> Session Class Initialized
DEBUG - 2013-09-20 17:04:46 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:04:46 --> Session routines successfully run
DEBUG - 2013-09-20 17:04:46 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:04:46 --> Controller Class Initialized
DEBUG - 2013-09-20 17:04:46 --> Model Class Initialized
DEBUG - 2013-09-20 17:04:46 --> Model Class Initialized
DEBUG - 2013-09-20 17:04:46 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:04:46 --> after session initialization................
INFO  - 2013-09-20 17:04:46 --> last news id is 1
INFO  - 2013-09-20 17:04:46 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:04:46 --> last news id is 7
INFO  - 2013-09-20 17:04:46 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:04:46 --> Final output sent to browser
DEBUG - 2013-09-20 17:04:46 --> Total execution time: 0.0550
DEBUG - 2013-09-20 17:10:15 --> Config Class Initialized
DEBUG - 2013-09-20 17:10:15 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:10:15 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:10:15 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:10:15 --> URI Class Initialized
DEBUG - 2013-09-20 17:10:15 --> Router Class Initialized
DEBUG - 2013-09-20 17:10:15 --> Output Class Initialized
DEBUG - 2013-09-20 17:10:15 --> Security Class Initialized
DEBUG - 2013-09-20 17:10:15 --> Input Class Initialized
DEBUG - 2013-09-20 17:10:15 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:10:15 --> Language Class Initialized
DEBUG - 2013-09-20 17:10:15 --> Loader Class Initialized
DEBUG - 2013-09-20 17:10:15 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:10:15 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:10:15 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:10:15 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:10:15 --> Session Class Initialized
DEBUG - 2013-09-20 17:10:15 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:10:15 --> Session routines successfully run
DEBUG - 2013-09-20 17:10:15 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:10:15 --> Controller Class Initialized
DEBUG - 2013-09-20 17:10:15 --> Model Class Initialized
DEBUG - 2013-09-20 17:10:15 --> Model Class Initialized
DEBUG - 2013-09-20 17:10:15 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:10:15 --> after session initialization................
INFO  - 2013-09-20 17:10:15 --> after rays has been clicked.................
INFO  - 2013-09-20 17:10:15 --> last news id is 0
INFO  - 2013-09-20 17:10:15 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:10:15 --> last news id is 0
INFO  - 2013-09-20 17:10:15 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:10:15 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 17:10:15 --> Final output sent to browser
DEBUG - 2013-09-20 17:10:15 --> Total execution time: 0.0630
DEBUG - 2013-09-20 17:10:16 --> Config Class Initialized
DEBUG - 2013-09-20 17:10:16 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:10:16 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:10:16 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:10:16 --> URI Class Initialized
DEBUG - 2013-09-20 17:10:16 --> Router Class Initialized
DEBUG - 2013-09-20 17:10:16 --> Output Class Initialized
DEBUG - 2013-09-20 17:10:16 --> Security Class Initialized
DEBUG - 2013-09-20 17:10:16 --> Input Class Initialized
DEBUG - 2013-09-20 17:10:16 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:10:16 --> Language Class Initialized
DEBUG - 2013-09-20 17:10:16 --> Loader Class Initialized
DEBUG - 2013-09-20 17:10:16 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:10:16 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:10:16 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:10:16 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:10:16 --> Session Class Initialized
DEBUG - 2013-09-20 17:10:16 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:10:16 --> Session routines successfully run
DEBUG - 2013-09-20 17:10:16 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:10:16 --> Controller Class Initialized
DEBUG - 2013-09-20 17:10:16 --> Model Class Initialized
DEBUG - 2013-09-20 17:10:16 --> Model Class Initialized
DEBUG - 2013-09-20 17:10:16 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:10:16 --> after session initialization................
INFO  - 2013-09-20 17:10:16 --> last news id is 1
INFO  - 2013-09-20 17:10:16 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:10:16 --> last news id is 7
INFO  - 2013-09-20 17:10:16 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:10:16 --> Final output sent to browser
DEBUG - 2013-09-20 17:10:16 --> Total execution time: 0.0620
DEBUG - 2013-09-20 17:10:21 --> Config Class Initialized
DEBUG - 2013-09-20 17:10:21 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:10:21 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:10:21 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:10:21 --> URI Class Initialized
DEBUG - 2013-09-20 17:10:21 --> Router Class Initialized
DEBUG - 2013-09-20 17:10:21 --> Output Class Initialized
DEBUG - 2013-09-20 17:10:21 --> Security Class Initialized
DEBUG - 2013-09-20 17:10:21 --> Input Class Initialized
DEBUG - 2013-09-20 17:10:21 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:10:21 --> Language Class Initialized
DEBUG - 2013-09-20 17:10:21 --> Loader Class Initialized
DEBUG - 2013-09-20 17:10:21 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:10:21 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:10:21 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:10:21 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:10:21 --> Session Class Initialized
DEBUG - 2013-09-20 17:10:21 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:10:21 --> Session routines successfully run
DEBUG - 2013-09-20 17:10:21 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:10:21 --> Controller Class Initialized
DEBUG - 2013-09-20 17:10:21 --> Model Class Initialized
DEBUG - 2013-09-20 17:10:21 --> Model Class Initialized
DEBUG - 2013-09-20 17:10:21 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:10:21 --> after session initialization................
ERROR - 2013-09-20 17:10:21 --> Severity: Warning  --> Missing argument 1 for user_authorization::index() C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 69
ERROR - 2013-09-20 17:10:21 --> Severity: Notice  --> Undefined variable: message C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 71
DEBUG - 2013-09-20 17:10:21 --> Config Class Initialized
DEBUG - 2013-09-20 17:10:21 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:10:21 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:10:21 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:10:21 --> URI Class Initialized
DEBUG - 2013-09-20 17:10:21 --> Router Class Initialized
DEBUG - 2013-09-20 17:10:21 --> No URI present. Default controller set.
DEBUG - 2013-09-20 17:10:21 --> Output Class Initialized
DEBUG - 2013-09-20 17:10:21 --> Security Class Initialized
DEBUG - 2013-09-20 17:10:21 --> Input Class Initialized
DEBUG - 2013-09-20 17:10:21 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:10:21 --> Language Class Initialized
DEBUG - 2013-09-20 17:10:21 --> Loader Class Initialized
DEBUG - 2013-09-20 17:10:21 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:10:21 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:10:21 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:10:21 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:10:21 --> Session Class Initialized
DEBUG - 2013-09-20 17:10:21 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:10:21 --> Session routines successfully run
DEBUG - 2013-09-20 17:10:21 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:10:21 --> Controller Class Initialized
INFO  - 2013-09-20 17:10:21 --> the form message==>
INFO  - 2013-09-20 17:10:21 --> after the retrieving session list.................//////////
DEBUG - 2013-09-20 17:10:21 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-20 17:10:21 --> Final output sent to browser
DEBUG - 2013-09-20 17:10:21 --> Total execution time: 0.0470
DEBUG - 2013-09-20 17:10:22 --> Config Class Initialized
DEBUG - 2013-09-20 17:10:22 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:10:22 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:10:22 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:10:22 --> URI Class Initialized
DEBUG - 2013-09-20 17:10:22 --> Router Class Initialized
DEBUG - 2013-09-20 17:10:22 --> Output Class Initialized
DEBUG - 2013-09-20 17:10:22 --> Security Class Initialized
DEBUG - 2013-09-20 17:10:22 --> Input Class Initialized
DEBUG - 2013-09-20 17:10:22 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:10:22 --> Language Class Initialized
DEBUG - 2013-09-20 17:10:22 --> Loader Class Initialized
DEBUG - 2013-09-20 17:10:22 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:10:22 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:10:22 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:10:22 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:10:22 --> Session Class Initialized
DEBUG - 2013-09-20 17:10:22 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:10:22 --> Session routines successfully run
DEBUG - 2013-09-20 17:10:22 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:10:22 --> Controller Class Initialized
DEBUG - 2013-09-20 17:10:22 --> Model Class Initialized
DEBUG - 2013-09-20 17:10:22 --> Model Class Initialized
DEBUG - 2013-09-20 17:10:22 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:10:22 --> after session initialization................
INFO  - 2013-09-20 17:10:22 --> after rays has been clicked.................
INFO  - 2013-09-20 17:10:22 --> last news id is 0
INFO  - 2013-09-20 17:10:22 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:10:22 --> last news id is 0
INFO  - 2013-09-20 17:10:22 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:10:22 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 17:10:22 --> Final output sent to browser
DEBUG - 2013-09-20 17:10:22 --> Total execution time: 0.0610
DEBUG - 2013-09-20 17:10:24 --> Config Class Initialized
DEBUG - 2013-09-20 17:10:24 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:10:24 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:10:24 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:10:24 --> URI Class Initialized
DEBUG - 2013-09-20 17:10:24 --> Router Class Initialized
DEBUG - 2013-09-20 17:10:24 --> Output Class Initialized
DEBUG - 2013-09-20 17:10:24 --> Security Class Initialized
DEBUG - 2013-09-20 17:10:24 --> Input Class Initialized
DEBUG - 2013-09-20 17:10:24 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:10:24 --> Language Class Initialized
DEBUG - 2013-09-20 17:10:24 --> Loader Class Initialized
DEBUG - 2013-09-20 17:10:24 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:10:24 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:10:24 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:10:24 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:10:24 --> Config Class Initialized
DEBUG - 2013-09-20 17:10:24 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:10:24 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:10:24 --> Session Class Initialized
DEBUG - 2013-09-20 17:10:24 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:10:24 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:10:24 --> Session routines successfully run
DEBUG - 2013-09-20 17:10:24 --> URI Class Initialized
DEBUG - 2013-09-20 17:10:24 --> Router Class Initialized
DEBUG - 2013-09-20 17:10:24 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:10:24 --> Output Class Initialized
DEBUG - 2013-09-20 17:10:24 --> Controller Class Initialized
DEBUG - 2013-09-20 17:10:24 --> Security Class Initialized
DEBUG - 2013-09-20 17:10:24 --> Model Class Initialized
DEBUG - 2013-09-20 17:10:24 --> Input Class Initialized
DEBUG - 2013-09-20 17:10:24 --> Model Class Initialized
DEBUG - 2013-09-20 17:10:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2013-09-20 17:10:24 --> Global POST and COOKIE data sanitized
INFO  - 2013-09-20 17:10:24 --> after session initialization................
INFO  - 2013-09-20 17:10:24 --> last news id is 1
DEBUG - 2013-09-20 17:10:24 --> Language Class Initialized
INFO  - 2013-09-20 17:10:24 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:10:24 --> last news id is 7
INFO  - 2013-09-20 17:10:24 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:10:24 --> Final output sent to browser
DEBUG - 2013-09-20 17:10:24 --> Loader Class Initialized
DEBUG - 2013-09-20 17:10:24 --> Total execution time: 0.0630
DEBUG - 2013-09-20 17:10:24 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:10:24 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:10:24 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:10:24 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:10:24 --> Session Class Initialized
DEBUG - 2013-09-20 17:10:24 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:10:24 --> Session routines successfully run
DEBUG - 2013-09-20 17:10:24 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:10:24 --> Controller Class Initialized
DEBUG - 2013-09-20 17:10:24 --> Model Class Initialized
DEBUG - 2013-09-20 17:10:24 --> Model Class Initialized
DEBUG - 2013-09-20 17:10:24 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:10:24 --> after session initialization................
INFO  - 2013-09-20 17:10:24 --> last news id is 1
INFO  - 2013-09-20 17:10:24 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:10:24 --> last news id is 7
INFO  - 2013-09-20 17:10:24 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:10:24 --> Final output sent to browser
DEBUG - 2013-09-20 17:10:24 --> Total execution time: 0.0740
DEBUG - 2013-09-20 17:10:49 --> Config Class Initialized
DEBUG - 2013-09-20 17:10:49 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:10:49 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:10:49 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:10:49 --> URI Class Initialized
DEBUG - 2013-09-20 17:10:49 --> Router Class Initialized
DEBUG - 2013-09-20 17:10:49 --> Output Class Initialized
DEBUG - 2013-09-20 17:10:49 --> Security Class Initialized
DEBUG - 2013-09-20 17:10:49 --> Input Class Initialized
DEBUG - 2013-09-20 17:10:49 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:10:49 --> Language Class Initialized
DEBUG - 2013-09-20 17:10:49 --> Loader Class Initialized
DEBUG - 2013-09-20 17:10:49 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:10:49 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:10:49 --> Config Class Initialized
DEBUG - 2013-09-20 17:10:49 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:10:49 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:10:49 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:10:49 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:10:49 --> URI Class Initialized
DEBUG - 2013-09-20 17:10:49 --> Router Class Initialized
DEBUG - 2013-09-20 17:10:49 --> Output Class Initialized
DEBUG - 2013-09-20 17:10:49 --> Security Class Initialized
DEBUG - 2013-09-20 17:10:49 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:10:49 --> Input Class Initialized
DEBUG - 2013-09-20 17:10:49 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:10:49 --> Language Class Initialized
DEBUG - 2013-09-20 17:10:49 --> Session Class Initialized
DEBUG - 2013-09-20 17:10:49 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:10:49 --> Session routines successfully run
DEBUG - 2013-09-20 17:10:49 --> Loader Class Initialized
DEBUG - 2013-09-20 17:10:49 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:10:49 --> Controller Class Initialized
DEBUG - 2013-09-20 17:10:49 --> Model Class Initialized
DEBUG - 2013-09-20 17:10:49 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:10:49 --> Model Class Initialized
DEBUG - 2013-09-20 17:10:49 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:10:49 --> after session initialization................
INFO  - 2013-09-20 17:10:49 --> last news id is 1
DEBUG - 2013-09-20 17:10:49 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:10:49 --> Helper loaded: html_helper
INFO  - 2013-09-20 17:10:49 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:10:49 --> last news id is 1
INFO  - 2013-09-20 17:10:49 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:10:49 --> Final output sent to browser
DEBUG - 2013-09-20 17:10:49 --> Total execution time: 0.0630
DEBUG - 2013-09-20 17:10:49 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:10:49 --> Session Class Initialized
DEBUG - 2013-09-20 17:10:49 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:10:49 --> Session routines successfully run
DEBUG - 2013-09-20 17:10:49 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:10:49 --> Controller Class Initialized
DEBUG - 2013-09-20 17:10:49 --> Model Class Initialized
DEBUG - 2013-09-20 17:10:49 --> Model Class Initialized
DEBUG - 2013-09-20 17:10:49 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:10:49 --> after session initialization................
INFO  - 2013-09-20 17:10:49 --> last news id is 1
INFO  - 2013-09-20 17:10:49 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:10:49 --> last news id is 1
INFO  - 2013-09-20 17:10:49 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:10:49 --> Final output sent to browser
DEBUG - 2013-09-20 17:10:49 --> Total execution time: 0.0580
DEBUG - 2013-09-20 17:22:01 --> Config Class Initialized
DEBUG - 2013-09-20 17:22:01 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:22:01 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:22:01 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:22:01 --> URI Class Initialized
DEBUG - 2013-09-20 17:22:01 --> Router Class Initialized
DEBUG - 2013-09-20 17:22:01 --> Output Class Initialized
DEBUG - 2013-09-20 17:22:01 --> Security Class Initialized
DEBUG - 2013-09-20 17:22:01 --> Input Class Initialized
DEBUG - 2013-09-20 17:22:01 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:22:01 --> Language Class Initialized
DEBUG - 2013-09-20 17:22:01 --> Loader Class Initialized
DEBUG - 2013-09-20 17:22:01 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:22:01 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:22:01 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:22:01 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:22:01 --> Session Class Initialized
DEBUG - 2013-09-20 17:22:01 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:22:01 --> Session routines successfully run
DEBUG - 2013-09-20 17:22:01 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:22:01 --> Controller Class Initialized
DEBUG - 2013-09-20 17:22:01 --> Model Class Initialized
DEBUG - 2013-09-20 17:22:01 --> Model Class Initialized
DEBUG - 2013-09-20 17:22:01 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:22:01 --> after session initialization................
INFO  - 2013-09-20 17:22:01 --> last news id is 1
INFO  - 2013-09-20 17:22:01 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:22:01 --> last news id is 1
INFO  - 2013-09-20 17:22:01 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:22:01 --> Final output sent to browser
DEBUG - 2013-09-20 17:22:01 --> Total execution time: 0.0660
DEBUG - 2013-09-20 17:22:28 --> Config Class Initialized
DEBUG - 2013-09-20 17:22:28 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:22:28 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:22:28 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:22:28 --> URI Class Initialized
DEBUG - 2013-09-20 17:22:28 --> Router Class Initialized
DEBUG - 2013-09-20 17:22:28 --> Output Class Initialized
DEBUG - 2013-09-20 17:22:28 --> Security Class Initialized
DEBUG - 2013-09-20 17:22:28 --> Input Class Initialized
DEBUG - 2013-09-20 17:22:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:22:28 --> Language Class Initialized
DEBUG - 2013-09-20 17:22:28 --> Loader Class Initialized
DEBUG - 2013-09-20 17:22:28 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:22:28 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:22:28 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:22:28 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:22:28 --> Config Class Initialized
DEBUG - 2013-09-20 17:22:28 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:22:28 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:22:28 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:22:28 --> Session Class Initialized
DEBUG - 2013-09-20 17:22:28 --> URI Class Initialized
DEBUG - 2013-09-20 17:22:28 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:22:28 --> Session routines successfully run
DEBUG - 2013-09-20 17:22:28 --> Router Class Initialized
DEBUG - 2013-09-20 17:22:28 --> Output Class Initialized
DEBUG - 2013-09-20 17:22:28 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:22:28 --> Controller Class Initialized
DEBUG - 2013-09-20 17:22:28 --> Model Class Initialized
DEBUG - 2013-09-20 17:22:28 --> Security Class Initialized
DEBUG - 2013-09-20 17:22:28 --> Model Class Initialized
DEBUG - 2013-09-20 17:22:28 --> Input Class Initialized
DEBUG - 2013-09-20 17:22:28 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:22:28 --> after session initialization................
DEBUG - 2013-09-20 17:22:28 --> Global POST and COOKIE data sanitized
INFO  - 2013-09-20 17:22:28 --> last news id is 1
DEBUG - 2013-09-20 17:22:28 --> Language Class Initialized
INFO  - 2013-09-20 17:22:28 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:22:28 --> last news id is 1
INFO  - 2013-09-20 17:22:28 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:22:28 --> Final output sent to browser
DEBUG - 2013-09-20 17:22:28 --> Loader Class Initialized
DEBUG - 2013-09-20 17:22:28 --> Total execution time: 0.0600
DEBUG - 2013-09-20 17:22:28 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:22:28 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:22:28 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:22:28 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:22:28 --> Session Class Initialized
DEBUG - 2013-09-20 17:22:28 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:22:28 --> Session routines successfully run
DEBUG - 2013-09-20 17:22:28 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:22:28 --> Controller Class Initialized
DEBUG - 2013-09-20 17:22:28 --> Model Class Initialized
DEBUG - 2013-09-20 17:22:28 --> Model Class Initialized
DEBUG - 2013-09-20 17:22:28 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:22:28 --> after session initialization................
INFO  - 2013-09-20 17:22:28 --> last news id is 1
INFO  - 2013-09-20 17:22:28 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:22:28 --> last news id is 1
INFO  - 2013-09-20 17:22:28 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:22:28 --> Final output sent to browser
DEBUG - 2013-09-20 17:22:28 --> Total execution time: 0.0600
DEBUG - 2013-09-20 17:23:18 --> Config Class Initialized
DEBUG - 2013-09-20 17:23:18 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:23:18 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:23:18 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:23:18 --> URI Class Initialized
DEBUG - 2013-09-20 17:23:18 --> Router Class Initialized
DEBUG - 2013-09-20 17:23:18 --> Output Class Initialized
DEBUG - 2013-09-20 17:23:18 --> Security Class Initialized
DEBUG - 2013-09-20 17:23:18 --> Input Class Initialized
DEBUG - 2013-09-20 17:23:18 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:23:18 --> Language Class Initialized
DEBUG - 2013-09-20 17:23:18 --> Loader Class Initialized
DEBUG - 2013-09-20 17:23:18 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:23:18 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:23:18 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:23:18 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:23:18 --> Session Class Initialized
DEBUG - 2013-09-20 17:23:18 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:23:18 --> Session routines successfully run
DEBUG - 2013-09-20 17:23:18 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:23:18 --> Controller Class Initialized
DEBUG - 2013-09-20 17:23:18 --> Model Class Initialized
DEBUG - 2013-09-20 17:23:18 --> Model Class Initialized
DEBUG - 2013-09-20 17:23:18 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:23:18 --> after session initialization................
INFO  - 2013-09-20 17:23:18 --> after rays has been clicked.................
INFO  - 2013-09-20 17:23:18 --> last news id is 0
INFO  - 2013-09-20 17:23:18 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:23:18 --> last news id is 0
INFO  - 2013-09-20 17:23:18 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:23:18 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 17:23:18 --> Final output sent to browser
DEBUG - 2013-09-20 17:23:18 --> Total execution time: 0.0580
DEBUG - 2013-09-20 17:23:46 --> Config Class Initialized
DEBUG - 2013-09-20 17:23:46 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:23:46 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:23:46 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:23:46 --> URI Class Initialized
DEBUG - 2013-09-20 17:23:46 --> Router Class Initialized
DEBUG - 2013-09-20 17:23:46 --> Output Class Initialized
DEBUG - 2013-09-20 17:23:46 --> Security Class Initialized
DEBUG - 2013-09-20 17:23:46 --> Input Class Initialized
DEBUG - 2013-09-20 17:23:46 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:23:46 --> Language Class Initialized
DEBUG - 2013-09-20 17:23:46 --> Loader Class Initialized
DEBUG - 2013-09-20 17:23:46 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:23:46 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:23:46 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:23:46 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:23:46 --> Session Class Initialized
DEBUG - 2013-09-20 17:23:46 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:23:46 --> Session routines successfully run
DEBUG - 2013-09-20 17:23:46 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:23:46 --> Controller Class Initialized
DEBUG - 2013-09-20 17:23:46 --> Model Class Initialized
DEBUG - 2013-09-20 17:23:46 --> Model Class Initialized
DEBUG - 2013-09-20 17:23:46 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:23:46 --> after session initialization................
INFO  - 2013-09-20 17:23:46 --> after rays has been clicked.................
INFO  - 2013-09-20 17:23:46 --> last news id is 0
INFO  - 2013-09-20 17:23:46 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:23:46 --> last news id is 0
INFO  - 2013-09-20 17:23:46 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:23:46 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 17:23:46 --> Final output sent to browser
DEBUG - 2013-09-20 17:23:46 --> Total execution time: 0.0580
DEBUG - 2013-09-20 17:24:17 --> Config Class Initialized
DEBUG - 2013-09-20 17:24:17 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:24:17 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:24:17 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:24:17 --> URI Class Initialized
DEBUG - 2013-09-20 17:24:17 --> Router Class Initialized
DEBUG - 2013-09-20 17:24:17 --> Output Class Initialized
DEBUG - 2013-09-20 17:24:17 --> Security Class Initialized
DEBUG - 2013-09-20 17:24:17 --> Input Class Initialized
DEBUG - 2013-09-20 17:24:17 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:24:17 --> Language Class Initialized
DEBUG - 2013-09-20 17:24:17 --> Loader Class Initialized
DEBUG - 2013-09-20 17:24:17 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:24:17 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:24:17 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:24:18 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:24:18 --> Session Class Initialized
DEBUG - 2013-09-20 17:24:18 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:24:18 --> Session routines successfully run
DEBUG - 2013-09-20 17:24:18 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:24:18 --> Controller Class Initialized
DEBUG - 2013-09-20 17:24:18 --> Model Class Initialized
DEBUG - 2013-09-20 17:24:18 --> Model Class Initialized
DEBUG - 2013-09-20 17:24:18 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:24:18 --> after session initialization................
ERROR - 2013-09-20 17:24:18 --> Severity: Warning  --> Missing argument 1 for user_authorization::index() C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 69
ERROR - 2013-09-20 17:24:18 --> Severity: Notice  --> Undefined variable: message C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 71
DEBUG - 2013-09-20 17:24:18 --> Config Class Initialized
DEBUG - 2013-09-20 17:24:18 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:24:18 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:24:18 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:24:18 --> URI Class Initialized
DEBUG - 2013-09-20 17:24:18 --> Router Class Initialized
DEBUG - 2013-09-20 17:24:18 --> No URI present. Default controller set.
DEBUG - 2013-09-20 17:24:18 --> Output Class Initialized
DEBUG - 2013-09-20 17:24:18 --> Security Class Initialized
DEBUG - 2013-09-20 17:24:18 --> Input Class Initialized
DEBUG - 2013-09-20 17:24:18 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:24:18 --> Language Class Initialized
DEBUG - 2013-09-20 17:24:18 --> Loader Class Initialized
DEBUG - 2013-09-20 17:24:18 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:24:18 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:24:18 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:24:18 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:24:18 --> Session Class Initialized
DEBUG - 2013-09-20 17:24:18 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:24:18 --> Session routines successfully run
DEBUG - 2013-09-20 17:24:18 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:24:18 --> Controller Class Initialized
INFO  - 2013-09-20 17:24:18 --> the form message==>
INFO  - 2013-09-20 17:24:18 --> after the retrieving session list.................//////////
DEBUG - 2013-09-20 17:24:18 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-20 17:24:18 --> Final output sent to browser
DEBUG - 2013-09-20 17:24:18 --> Total execution time: 0.0510
DEBUG - 2013-09-20 17:24:19 --> Config Class Initialized
DEBUG - 2013-09-20 17:24:19 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:24:19 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:24:19 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:24:19 --> URI Class Initialized
DEBUG - 2013-09-20 17:24:19 --> Router Class Initialized
DEBUG - 2013-09-20 17:24:19 --> Output Class Initialized
DEBUG - 2013-09-20 17:24:19 --> Security Class Initialized
DEBUG - 2013-09-20 17:24:19 --> Input Class Initialized
DEBUG - 2013-09-20 17:24:19 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:24:19 --> Language Class Initialized
DEBUG - 2013-09-20 17:24:19 --> Loader Class Initialized
DEBUG - 2013-09-20 17:24:19 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:24:19 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:24:19 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:24:19 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:24:19 --> Session Class Initialized
DEBUG - 2013-09-20 17:24:19 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:24:19 --> Session routines successfully run
DEBUG - 2013-09-20 17:24:19 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:24:19 --> Controller Class Initialized
DEBUG - 2013-09-20 17:24:19 --> Model Class Initialized
DEBUG - 2013-09-20 17:24:19 --> Model Class Initialized
DEBUG - 2013-09-20 17:24:19 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:24:19 --> after session initialization................
INFO  - 2013-09-20 17:24:19 --> after rays has been clicked.................
INFO  - 2013-09-20 17:24:19 --> last news id is 0
INFO  - 2013-09-20 17:24:19 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:24:19 --> last news id is 0
INFO  - 2013-09-20 17:24:19 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:24:19 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 17:24:19 --> Final output sent to browser
DEBUG - 2013-09-20 17:24:19 --> Total execution time: 0.0500
DEBUG - 2013-09-20 17:24:21 --> Config Class Initialized
DEBUG - 2013-09-20 17:24:21 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:24:21 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:24:21 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:24:21 --> URI Class Initialized
DEBUG - 2013-09-20 17:24:21 --> Router Class Initialized
DEBUG - 2013-09-20 17:24:21 --> Output Class Initialized
DEBUG - 2013-09-20 17:24:21 --> Security Class Initialized
DEBUG - 2013-09-20 17:24:21 --> Input Class Initialized
DEBUG - 2013-09-20 17:24:21 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:24:21 --> Language Class Initialized
DEBUG - 2013-09-20 17:24:21 --> Loader Class Initialized
DEBUG - 2013-09-20 17:24:21 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:24:21 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:24:21 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:24:21 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:24:21 --> Session Class Initialized
DEBUG - 2013-09-20 17:24:21 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:24:21 --> Session routines successfully run
DEBUG - 2013-09-20 17:24:21 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:24:21 --> Controller Class Initialized
DEBUG - 2013-09-20 17:24:21 --> Model Class Initialized
DEBUG - 2013-09-20 17:24:21 --> Model Class Initialized
DEBUG - 2013-09-20 17:24:21 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:24:21 --> after session initialization................
INFO  - 2013-09-20 17:24:21 --> after rays has been clicked.................
INFO  - 2013-09-20 17:24:21 --> last news id is 0
INFO  - 2013-09-20 17:24:21 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:24:21 --> last news id is 0
INFO  - 2013-09-20 17:24:21 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:24:21 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 17:24:21 --> Final output sent to browser
DEBUG - 2013-09-20 17:24:21 --> Total execution time: 0.0680
DEBUG - 2013-09-20 17:24:30 --> Config Class Initialized
DEBUG - 2013-09-20 17:24:30 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:24:30 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:24:30 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:24:30 --> URI Class Initialized
DEBUG - 2013-09-20 17:24:30 --> Router Class Initialized
DEBUG - 2013-09-20 17:24:30 --> Output Class Initialized
DEBUG - 2013-09-20 17:24:30 --> Security Class Initialized
DEBUG - 2013-09-20 17:24:30 --> Input Class Initialized
DEBUG - 2013-09-20 17:24:30 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:24:30 --> Language Class Initialized
DEBUG - 2013-09-20 17:24:30 --> Loader Class Initialized
DEBUG - 2013-09-20 17:24:30 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:24:30 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:24:30 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:24:30 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:24:30 --> Session Class Initialized
DEBUG - 2013-09-20 17:24:30 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:24:30 --> Session routines successfully run
DEBUG - 2013-09-20 17:24:30 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:24:30 --> Controller Class Initialized
DEBUG - 2013-09-20 17:24:30 --> Model Class Initialized
DEBUG - 2013-09-20 17:24:30 --> Model Class Initialized
DEBUG - 2013-09-20 17:24:30 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:24:30 --> after session initialization................
INFO  - 2013-09-20 17:24:30 --> last news id is 1
INFO  - 2013-09-20 17:24:30 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:24:30 --> last news id is 7
INFO  - 2013-09-20 17:24:30 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:24:30 --> Final output sent to browser
DEBUG - 2013-09-20 17:24:30 --> Total execution time: 0.0540
DEBUG - 2013-09-20 17:24:38 --> Config Class Initialized
DEBUG - 2013-09-20 17:24:38 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:24:38 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:24:38 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:24:38 --> URI Class Initialized
DEBUG - 2013-09-20 17:24:38 --> Router Class Initialized
DEBUG - 2013-09-20 17:24:38 --> Output Class Initialized
DEBUG - 2013-09-20 17:24:38 --> Security Class Initialized
DEBUG - 2013-09-20 17:24:38 --> Input Class Initialized
DEBUG - 2013-09-20 17:24:38 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:24:38 --> Language Class Initialized
DEBUG - 2013-09-20 17:24:38 --> Loader Class Initialized
DEBUG - 2013-09-20 17:24:38 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:24:38 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:24:38 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:24:38 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:24:38 --> Session Class Initialized
DEBUG - 2013-09-20 17:24:38 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:24:38 --> Session routines successfully run
DEBUG - 2013-09-20 17:24:38 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:24:38 --> Controller Class Initialized
DEBUG - 2013-09-20 17:24:38 --> Model Class Initialized
DEBUG - 2013-09-20 17:24:38 --> Model Class Initialized
DEBUG - 2013-09-20 17:24:38 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:24:38 --> after session initialization................
INFO  - 2013-09-20 17:24:38 --> last news id is 1
INFO  - 2013-09-20 17:24:38 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:24:38 --> last news id is 1
INFO  - 2013-09-20 17:24:38 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:24:38 --> Final output sent to browser
DEBUG - 2013-09-20 17:24:38 --> Total execution time: 0.0800
DEBUG - 2013-09-20 17:27:07 --> Config Class Initialized
DEBUG - 2013-09-20 17:27:07 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:27:07 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:27:07 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:27:07 --> URI Class Initialized
DEBUG - 2013-09-20 17:27:07 --> Router Class Initialized
DEBUG - 2013-09-20 17:27:07 --> Output Class Initialized
DEBUG - 2013-09-20 17:27:07 --> Security Class Initialized
DEBUG - 2013-09-20 17:27:07 --> Input Class Initialized
DEBUG - 2013-09-20 17:27:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:27:07 --> Language Class Initialized
DEBUG - 2013-09-20 17:27:07 --> Loader Class Initialized
DEBUG - 2013-09-20 17:27:07 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:27:07 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:27:07 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:27:07 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:27:07 --> Session Class Initialized
DEBUG - 2013-09-20 17:27:07 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:27:07 --> Session routines successfully run
DEBUG - 2013-09-20 17:27:07 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:27:07 --> Controller Class Initialized
DEBUG - 2013-09-20 17:27:07 --> Model Class Initialized
DEBUG - 2013-09-20 17:27:07 --> Model Class Initialized
DEBUG - 2013-09-20 17:27:07 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:27:07 --> after session initialization................
INFO  - 2013-09-20 17:27:07 --> after rays has been clicked.................
INFO  - 2013-09-20 17:27:07 --> last news id is 0
INFO  - 2013-09-20 17:27:07 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:27:07 --> last news id is 0
INFO  - 2013-09-20 17:27:07 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:27:07 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 17:27:07 --> Final output sent to browser
DEBUG - 2013-09-20 17:27:07 --> Total execution time: 0.0650
DEBUG - 2013-09-20 17:27:08 --> Config Class Initialized
DEBUG - 2013-09-20 17:27:08 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:27:08 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:27:08 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:27:08 --> URI Class Initialized
DEBUG - 2013-09-20 17:27:08 --> Router Class Initialized
DEBUG - 2013-09-20 17:27:08 --> Output Class Initialized
DEBUG - 2013-09-20 17:27:08 --> Security Class Initialized
DEBUG - 2013-09-20 17:27:08 --> Input Class Initialized
DEBUG - 2013-09-20 17:27:08 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:27:08 --> Language Class Initialized
DEBUG - 2013-09-20 17:27:08 --> Loader Class Initialized
DEBUG - 2013-09-20 17:27:08 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:27:08 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:27:08 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:27:08 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:27:08 --> Session Class Initialized
DEBUG - 2013-09-20 17:27:08 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:27:08 --> Session routines successfully run
DEBUG - 2013-09-20 17:27:08 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:27:08 --> Controller Class Initialized
DEBUG - 2013-09-20 17:27:08 --> Model Class Initialized
DEBUG - 2013-09-20 17:27:08 --> Model Class Initialized
DEBUG - 2013-09-20 17:27:08 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:27:08 --> after session initialization................
ERROR - 2013-09-20 17:27:08 --> Severity: Warning  --> Missing argument 1 for user_authorization::index() C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 69
ERROR - 2013-09-20 17:27:08 --> Severity: Notice  --> Undefined variable: message C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 71
DEBUG - 2013-09-20 17:27:08 --> Config Class Initialized
DEBUG - 2013-09-20 17:27:08 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:27:08 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:27:08 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:27:08 --> URI Class Initialized
DEBUG - 2013-09-20 17:27:08 --> Router Class Initialized
DEBUG - 2013-09-20 17:27:08 --> No URI present. Default controller set.
DEBUG - 2013-09-20 17:27:08 --> Output Class Initialized
DEBUG - 2013-09-20 17:27:08 --> Security Class Initialized
DEBUG - 2013-09-20 17:27:08 --> Input Class Initialized
DEBUG - 2013-09-20 17:27:08 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:27:08 --> Language Class Initialized
DEBUG - 2013-09-20 17:27:08 --> Loader Class Initialized
DEBUG - 2013-09-20 17:27:08 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:27:08 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:27:08 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:27:08 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:27:08 --> Session Class Initialized
DEBUG - 2013-09-20 17:27:08 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:27:08 --> Session routines successfully run
DEBUG - 2013-09-20 17:27:08 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:27:08 --> Controller Class Initialized
INFO  - 2013-09-20 17:27:08 --> the form message==>
INFO  - 2013-09-20 17:27:08 --> after the retrieving session list.................//////////
DEBUG - 2013-09-20 17:27:08 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-20 17:27:08 --> Final output sent to browser
DEBUG - 2013-09-20 17:27:08 --> Total execution time: 0.0490
DEBUG - 2013-09-20 17:27:09 --> Config Class Initialized
DEBUG - 2013-09-20 17:27:09 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:27:09 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:27:09 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:27:09 --> URI Class Initialized
DEBUG - 2013-09-20 17:27:09 --> Router Class Initialized
DEBUG - 2013-09-20 17:27:09 --> Output Class Initialized
DEBUG - 2013-09-20 17:27:09 --> Security Class Initialized
DEBUG - 2013-09-20 17:27:09 --> Input Class Initialized
DEBUG - 2013-09-20 17:27:09 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:27:09 --> Language Class Initialized
DEBUG - 2013-09-20 17:27:09 --> Loader Class Initialized
DEBUG - 2013-09-20 17:27:09 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:27:09 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:27:09 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:27:09 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:27:09 --> Session Class Initialized
DEBUG - 2013-09-20 17:27:09 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:27:09 --> Session routines successfully run
DEBUG - 2013-09-20 17:27:09 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:27:09 --> Controller Class Initialized
DEBUG - 2013-09-20 17:27:09 --> Model Class Initialized
DEBUG - 2013-09-20 17:27:09 --> Model Class Initialized
DEBUG - 2013-09-20 17:27:09 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:27:09 --> after session initialization................
INFO  - 2013-09-20 17:27:09 --> after rays has been clicked.................
INFO  - 2013-09-20 17:27:09 --> last news id is 0
INFO  - 2013-09-20 17:27:09 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:27:09 --> last news id is 0
INFO  - 2013-09-20 17:27:09 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:27:09 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 17:27:09 --> Final output sent to browser
DEBUG - 2013-09-20 17:27:09 --> Total execution time: 0.0580
DEBUG - 2013-09-20 17:27:16 --> Config Class Initialized
DEBUG - 2013-09-20 17:27:16 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:27:16 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:27:16 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:27:16 --> URI Class Initialized
DEBUG - 2013-09-20 17:27:16 --> Router Class Initialized
DEBUG - 2013-09-20 17:27:16 --> Output Class Initialized
DEBUG - 2013-09-20 17:27:16 --> Security Class Initialized
DEBUG - 2013-09-20 17:27:16 --> Input Class Initialized
DEBUG - 2013-09-20 17:27:16 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:27:16 --> Language Class Initialized
DEBUG - 2013-09-20 17:27:16 --> Loader Class Initialized
DEBUG - 2013-09-20 17:27:16 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:27:16 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:27:16 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:27:16 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:27:16 --> Session Class Initialized
DEBUG - 2013-09-20 17:27:16 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:27:16 --> Session routines successfully run
DEBUG - 2013-09-20 17:27:16 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:27:16 --> Controller Class Initialized
DEBUG - 2013-09-20 17:27:16 --> Model Class Initialized
DEBUG - 2013-09-20 17:27:16 --> Model Class Initialized
DEBUG - 2013-09-20 17:27:16 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:27:16 --> after session initialization................
INFO  - 2013-09-20 17:27:16 --> last news id is 1
INFO  - 2013-09-20 17:27:16 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:27:16 --> last news id is 7
INFO  - 2013-09-20 17:27:16 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:27:16 --> Final output sent to browser
DEBUG - 2013-09-20 17:27:16 --> Total execution time: 0.0560
DEBUG - 2013-09-20 17:27:18 --> Config Class Initialized
DEBUG - 2013-09-20 17:27:18 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:27:18 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:27:18 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:27:18 --> URI Class Initialized
DEBUG - 2013-09-20 17:27:18 --> Router Class Initialized
DEBUG - 2013-09-20 17:27:18 --> Output Class Initialized
DEBUG - 2013-09-20 17:27:18 --> Security Class Initialized
DEBUG - 2013-09-20 17:27:18 --> Input Class Initialized
DEBUG - 2013-09-20 17:27:18 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:27:18 --> Language Class Initialized
DEBUG - 2013-09-20 17:27:18 --> Loader Class Initialized
DEBUG - 2013-09-20 17:27:18 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:27:18 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:27:18 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:27:18 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:27:18 --> Session Class Initialized
DEBUG - 2013-09-20 17:27:18 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:27:18 --> Session routines successfully run
DEBUG - 2013-09-20 17:27:18 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:27:18 --> Controller Class Initialized
DEBUG - 2013-09-20 17:27:18 --> Model Class Initialized
DEBUG - 2013-09-20 17:27:18 --> Model Class Initialized
DEBUG - 2013-09-20 17:27:18 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:27:18 --> after session initialization................
INFO  - 2013-09-20 17:27:18 --> last news id is 1
INFO  - 2013-09-20 17:27:18 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:27:18 --> last news id is 5
INFO  - 2013-09-20 17:27:18 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 5
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:27:18 --> Final output sent to browser
DEBUG - 2013-09-20 17:27:18 --> Total execution time: 0.0500
DEBUG - 2013-09-20 17:27:23 --> Config Class Initialized
DEBUG - 2013-09-20 17:27:23 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:27:23 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:27:23 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:27:23 --> URI Class Initialized
DEBUG - 2013-09-20 17:27:23 --> Router Class Initialized
DEBUG - 2013-09-20 17:27:23 --> Output Class Initialized
DEBUG - 2013-09-20 17:27:23 --> Security Class Initialized
DEBUG - 2013-09-20 17:27:23 --> Input Class Initialized
DEBUG - 2013-09-20 17:27:23 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:27:23 --> Language Class Initialized
DEBUG - 2013-09-20 17:27:23 --> Loader Class Initialized
DEBUG - 2013-09-20 17:27:23 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:27:23 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:27:23 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:27:23 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:27:23 --> Session Class Initialized
DEBUG - 2013-09-20 17:27:23 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:27:23 --> Session routines successfully run
DEBUG - 2013-09-20 17:27:23 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:27:23 --> Controller Class Initialized
DEBUG - 2013-09-20 17:27:23 --> Model Class Initialized
DEBUG - 2013-09-20 17:27:23 --> Model Class Initialized
DEBUG - 2013-09-20 17:27:23 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:27:23 --> after session initialization................
INFO  - 2013-09-20 17:27:23 --> last news id is 1
INFO  - 2013-09-20 17:27:23 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:27:23 --> last news id is 3
INFO  - 2013-09-20 17:27:23 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 3
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:27:23 --> Final output sent to browser
DEBUG - 2013-09-20 17:27:23 --> Total execution time: 0.0640
DEBUG - 2013-09-20 17:27:26 --> Config Class Initialized
DEBUG - 2013-09-20 17:27:26 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:27:26 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:27:26 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:27:26 --> URI Class Initialized
DEBUG - 2013-09-20 17:27:26 --> Router Class Initialized
DEBUG - 2013-09-20 17:27:26 --> Output Class Initialized
DEBUG - 2013-09-20 17:27:26 --> Security Class Initialized
DEBUG - 2013-09-20 17:27:26 --> Input Class Initialized
DEBUG - 2013-09-20 17:27:26 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:27:26 --> Language Class Initialized
DEBUG - 2013-09-20 17:27:26 --> Loader Class Initialized
DEBUG - 2013-09-20 17:27:26 --> Config Class Initialized
DEBUG - 2013-09-20 17:27:26 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:27:26 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:27:26 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:27:26 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:27:26 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:27:26 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:27:26 --> URI Class Initialized
DEBUG - 2013-09-20 17:27:26 --> Router Class Initialized
DEBUG - 2013-09-20 17:27:26 --> Output Class Initialized
DEBUG - 2013-09-20 17:27:26 --> Security Class Initialized
DEBUG - 2013-09-20 17:27:26 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:27:26 --> Input Class Initialized
DEBUG - 2013-09-20 17:27:26 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:27:26 --> Language Class Initialized
DEBUG - 2013-09-20 17:27:26 --> Session Class Initialized
DEBUG - 2013-09-20 17:27:26 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:27:26 --> Session routines successfully run
DEBUG - 2013-09-20 17:27:26 --> Loader Class Initialized
DEBUG - 2013-09-20 17:27:26 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:27:26 --> Controller Class Initialized
DEBUG - 2013-09-20 17:27:26 --> Model Class Initialized
DEBUG - 2013-09-20 17:27:26 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:27:26 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:27:26 --> Model Class Initialized
DEBUG - 2013-09-20 17:27:26 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:27:26 --> after session initialization................
DEBUG - 2013-09-20 17:27:26 --> Helper loaded: html_helper
INFO  - 2013-09-20 17:27:26 --> last news id is 1
INFO  - 2013-09-20 17:27:26 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:27:26 --> last news id is 1
INFO  - 2013-09-20 17:27:26 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:27:26 --> Final output sent to browser
DEBUG - 2013-09-20 17:27:26 --> Total execution time: 0.0620
DEBUG - 2013-09-20 17:27:26 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:27:26 --> Session Class Initialized
DEBUG - 2013-09-20 17:27:26 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:27:26 --> Session routines successfully run
DEBUG - 2013-09-20 17:27:26 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:27:26 --> Controller Class Initialized
DEBUG - 2013-09-20 17:27:26 --> Model Class Initialized
DEBUG - 2013-09-20 17:27:26 --> Model Class Initialized
DEBUG - 2013-09-20 17:27:26 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:27:26 --> after session initialization................
INFO  - 2013-09-20 17:27:26 --> last news id is 1
INFO  - 2013-09-20 17:27:26 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:27:26 --> last news id is 1
INFO  - 2013-09-20 17:27:26 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:27:26 --> Final output sent to browser
DEBUG - 2013-09-20 17:27:26 --> Total execution time: 0.0620
DEBUG - 2013-09-20 17:27:57 --> Config Class Initialized
DEBUG - 2013-09-20 17:27:57 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:27:57 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:27:57 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:27:57 --> URI Class Initialized
DEBUG - 2013-09-20 17:27:57 --> Router Class Initialized
DEBUG - 2013-09-20 17:27:57 --> Output Class Initialized
DEBUG - 2013-09-20 17:27:57 --> Security Class Initialized
DEBUG - 2013-09-20 17:27:57 --> Input Class Initialized
DEBUG - 2013-09-20 17:27:57 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:27:57 --> Language Class Initialized
DEBUG - 2013-09-20 17:27:57 --> Loader Class Initialized
DEBUG - 2013-09-20 17:27:57 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:27:57 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:27:57 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:27:57 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:27:57 --> Session Class Initialized
DEBUG - 2013-09-20 17:27:57 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:27:57 --> Session routines successfully run
DEBUG - 2013-09-20 17:27:57 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:27:57 --> Controller Class Initialized
DEBUG - 2013-09-20 17:27:57 --> Model Class Initialized
DEBUG - 2013-09-20 17:27:57 --> Model Class Initialized
DEBUG - 2013-09-20 17:27:57 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:27:57 --> after session initialization................
ERROR - 2013-09-20 17:27:57 --> 404 Page Not Found --> user_authorization/legal
DEBUG - 2013-09-20 17:28:41 --> Config Class Initialized
DEBUG - 2013-09-20 17:28:41 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:28:41 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:28:41 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:28:41 --> URI Class Initialized
DEBUG - 2013-09-20 17:28:41 --> Router Class Initialized
ERROR - 2013-09-20 17:28:41 --> 404 Page Not Found --> user_authorization
DEBUG - 2013-09-20 17:28:56 --> Config Class Initialized
DEBUG - 2013-09-20 17:28:56 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:28:56 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:28:56 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:28:56 --> URI Class Initialized
DEBUG - 2013-09-20 17:28:56 --> Router Class Initialized
DEBUG - 2013-09-20 17:28:56 --> Output Class Initialized
DEBUG - 2013-09-20 17:28:56 --> Security Class Initialized
DEBUG - 2013-09-20 17:28:56 --> Input Class Initialized
DEBUG - 2013-09-20 17:28:56 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:28:56 --> Language Class Initialized
DEBUG - 2013-09-20 17:28:56 --> Loader Class Initialized
DEBUG - 2013-09-20 17:28:56 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:28:56 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:28:56 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:28:56 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:28:56 --> Session Class Initialized
DEBUG - 2013-09-20 17:28:56 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:28:56 --> Session routines successfully run
DEBUG - 2013-09-20 17:28:56 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:28:56 --> Controller Class Initialized
DEBUG - 2013-09-20 17:28:56 --> Model Class Initialized
DEBUG - 2013-09-20 17:28:56 --> Model Class Initialized
DEBUG - 2013-09-20 17:28:56 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:28:56 --> after session initialization................
ERROR - 2013-09-20 17:28:56 --> Severity: Warning  --> Missing argument 1 for user_authorization::index() C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 69
ERROR - 2013-09-20 17:28:56 --> Severity: Notice  --> Undefined variable: message C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 71
DEBUG - 2013-09-20 17:28:56 --> Config Class Initialized
DEBUG - 2013-09-20 17:28:56 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:28:56 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:28:56 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:28:56 --> URI Class Initialized
DEBUG - 2013-09-20 17:28:56 --> Router Class Initialized
DEBUG - 2013-09-20 17:28:56 --> No URI present. Default controller set.
DEBUG - 2013-09-20 17:28:56 --> Output Class Initialized
DEBUG - 2013-09-20 17:28:56 --> Security Class Initialized
DEBUG - 2013-09-20 17:28:56 --> Input Class Initialized
DEBUG - 2013-09-20 17:28:56 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:28:56 --> Language Class Initialized
DEBUG - 2013-09-20 17:28:56 --> Loader Class Initialized
DEBUG - 2013-09-20 17:28:56 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:28:56 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:28:56 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:28:56 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:28:56 --> Session Class Initialized
DEBUG - 2013-09-20 17:28:56 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:28:56 --> Session routines successfully run
DEBUG - 2013-09-20 17:28:56 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:28:56 --> Controller Class Initialized
INFO  - 2013-09-20 17:28:56 --> the form message==>
INFO  - 2013-09-20 17:28:56 --> after the retrieving session list.................//////////
DEBUG - 2013-09-20 17:28:56 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-20 17:28:56 --> Final output sent to browser
DEBUG - 2013-09-20 17:28:56 --> Total execution time: 0.0450
DEBUG - 2013-09-20 17:28:57 --> Config Class Initialized
DEBUG - 2013-09-20 17:28:57 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:28:57 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:28:57 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:28:57 --> URI Class Initialized
DEBUG - 2013-09-20 17:28:57 --> Router Class Initialized
DEBUG - 2013-09-20 17:28:57 --> Output Class Initialized
DEBUG - 2013-09-20 17:28:57 --> Security Class Initialized
DEBUG - 2013-09-20 17:28:57 --> Input Class Initialized
DEBUG - 2013-09-20 17:28:57 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:28:57 --> Language Class Initialized
DEBUG - 2013-09-20 17:28:57 --> Loader Class Initialized
DEBUG - 2013-09-20 17:28:58 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:28:58 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:28:58 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:28:58 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:28:58 --> Session Class Initialized
DEBUG - 2013-09-20 17:28:58 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:28:58 --> Session routines successfully run
DEBUG - 2013-09-20 17:28:58 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:28:58 --> Controller Class Initialized
DEBUG - 2013-09-20 17:28:58 --> Model Class Initialized
DEBUG - 2013-09-20 17:28:58 --> Model Class Initialized
DEBUG - 2013-09-20 17:28:58 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:28:58 --> after session initialization................
INFO  - 2013-09-20 17:28:58 --> after rays has been clicked.................
INFO  - 2013-09-20 17:28:58 --> last news id is 0
INFO  - 2013-09-20 17:28:58 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:28:58 --> last news id is 0
INFO  - 2013-09-20 17:28:58 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:28:58 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 17:28:58 --> Final output sent to browser
DEBUG - 2013-09-20 17:28:58 --> Total execution time: 0.0670
DEBUG - 2013-09-20 17:28:59 --> Config Class Initialized
DEBUG - 2013-09-20 17:28:59 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:28:59 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:28:59 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:28:59 --> URI Class Initialized
DEBUG - 2013-09-20 17:28:59 --> Router Class Initialized
DEBUG - 2013-09-20 17:28:59 --> Output Class Initialized
DEBUG - 2013-09-20 17:28:59 --> Security Class Initialized
DEBUG - 2013-09-20 17:28:59 --> Input Class Initialized
DEBUG - 2013-09-20 17:28:59 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:28:59 --> Language Class Initialized
DEBUG - 2013-09-20 17:28:59 --> Loader Class Initialized
DEBUG - 2013-09-20 17:28:59 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:28:59 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:28:59 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:28:59 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:28:59 --> Session Class Initialized
DEBUG - 2013-09-20 17:28:59 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:28:59 --> Session routines successfully run
DEBUG - 2013-09-20 17:28:59 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:28:59 --> Controller Class Initialized
DEBUG - 2013-09-20 17:28:59 --> Model Class Initialized
DEBUG - 2013-09-20 17:28:59 --> Model Class Initialized
DEBUG - 2013-09-20 17:28:59 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:28:59 --> after session initialization................
INFO  - 2013-09-20 17:28:59 --> last news id is 1
INFO  - 2013-09-20 17:28:59 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:28:59 --> last news id is 7
INFO  - 2013-09-20 17:28:59 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:28:59 --> Final output sent to browser
DEBUG - 2013-09-20 17:28:59 --> Total execution time: 0.0570
DEBUG - 2013-09-20 17:29:01 --> Config Class Initialized
DEBUG - 2013-09-20 17:29:01 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:29:01 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:29:01 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:29:01 --> URI Class Initialized
DEBUG - 2013-09-20 17:29:01 --> Router Class Initialized
DEBUG - 2013-09-20 17:29:01 --> Output Class Initialized
DEBUG - 2013-09-20 17:29:01 --> Security Class Initialized
DEBUG - 2013-09-20 17:29:01 --> Input Class Initialized
DEBUG - 2013-09-20 17:29:01 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:29:01 --> Language Class Initialized
DEBUG - 2013-09-20 17:29:01 --> Loader Class Initialized
DEBUG - 2013-09-20 17:29:01 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:29:01 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:29:01 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:29:01 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:29:01 --> Config Class Initialized
DEBUG - 2013-09-20 17:29:01 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:29:01 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:29:01 --> Session Class Initialized
DEBUG - 2013-09-20 17:29:01 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:29:01 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:29:01 --> URI Class Initialized
DEBUG - 2013-09-20 17:29:01 --> Session routines successfully run
DEBUG - 2013-09-20 17:29:01 --> Router Class Initialized
DEBUG - 2013-09-20 17:29:01 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:29:01 --> Controller Class Initialized
DEBUG - 2013-09-20 17:29:01 --> Model Class Initialized
DEBUG - 2013-09-20 17:29:01 --> Output Class Initialized
DEBUG - 2013-09-20 17:29:01 --> Model Class Initialized
DEBUG - 2013-09-20 17:29:01 --> Security Class Initialized
DEBUG - 2013-09-20 17:29:01 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:29:01 --> after session initialization................
INFO  - 2013-09-20 17:29:01 --> last news id is 1
DEBUG - 2013-09-20 17:29:01 --> Input Class Initialized
DEBUG - 2013-09-20 17:29:01 --> Global POST and COOKIE data sanitized
INFO  - 2013-09-20 17:29:01 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
DEBUG - 2013-09-20 17:29:01 --> Language Class Initialized
INFO  - 2013-09-20 17:29:01 --> last news id is 5
INFO  - 2013-09-20 17:29:01 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 5
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:29:01 --> Final output sent to browser
DEBUG - 2013-09-20 17:29:01 --> Total execution time: 0.0610
DEBUG - 2013-09-20 17:29:01 --> Loader Class Initialized
DEBUG - 2013-09-20 17:29:01 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:29:01 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:29:01 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:29:01 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:29:01 --> Session Class Initialized
DEBUG - 2013-09-20 17:29:01 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:29:01 --> Session routines successfully run
DEBUG - 2013-09-20 17:29:01 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:29:01 --> Controller Class Initialized
DEBUG - 2013-09-20 17:29:01 --> Model Class Initialized
DEBUG - 2013-09-20 17:29:01 --> Model Class Initialized
DEBUG - 2013-09-20 17:29:01 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:29:01 --> after session initialization................
INFO  - 2013-09-20 17:29:01 --> last news id is 1
INFO  - 2013-09-20 17:29:01 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:29:01 --> last news id is 5
INFO  - 2013-09-20 17:29:01 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 5
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:29:01 --> Final output sent to browser
DEBUG - 2013-09-20 17:29:01 --> Total execution time: 0.0620
DEBUG - 2013-09-20 17:29:02 --> Config Class Initialized
DEBUG - 2013-09-20 17:29:02 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:29:02 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:29:02 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:29:02 --> URI Class Initialized
DEBUG - 2013-09-20 17:29:02 --> Router Class Initialized
DEBUG - 2013-09-20 17:29:02 --> Output Class Initialized
DEBUG - 2013-09-20 17:29:02 --> Security Class Initialized
DEBUG - 2013-09-20 17:29:02 --> Input Class Initialized
DEBUG - 2013-09-20 17:29:02 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:29:02 --> Language Class Initialized
DEBUG - 2013-09-20 17:29:02 --> Loader Class Initialized
DEBUG - 2013-09-20 17:29:02 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:29:02 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:29:02 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:29:02 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:29:02 --> Session Class Initialized
DEBUG - 2013-09-20 17:29:02 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:29:02 --> Session routines successfully run
DEBUG - 2013-09-20 17:29:02 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:29:02 --> Controller Class Initialized
DEBUG - 2013-09-20 17:29:02 --> Model Class Initialized
DEBUG - 2013-09-20 17:29:02 --> Model Class Initialized
DEBUG - 2013-09-20 17:29:02 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:29:02 --> after session initialization................
INFO  - 2013-09-20 17:29:02 --> last news id is 1
INFO  - 2013-09-20 17:29:02 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:29:02 --> last news id is 3
INFO  - 2013-09-20 17:29:02 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 3
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:29:02 --> Final output sent to browser
DEBUG - 2013-09-20 17:29:02 --> Total execution time: 0.0570
DEBUG - 2013-09-20 17:29:03 --> Config Class Initialized
DEBUG - 2013-09-20 17:29:03 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:29:03 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:29:03 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:29:03 --> URI Class Initialized
DEBUG - 2013-09-20 17:29:03 --> Router Class Initialized
DEBUG - 2013-09-20 17:29:03 --> Output Class Initialized
DEBUG - 2013-09-20 17:29:03 --> Security Class Initialized
DEBUG - 2013-09-20 17:29:03 --> Input Class Initialized
DEBUG - 2013-09-20 17:29:03 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:29:03 --> Language Class Initialized
DEBUG - 2013-09-20 17:29:03 --> Loader Class Initialized
DEBUG - 2013-09-20 17:29:03 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:29:03 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:29:03 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:29:03 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:29:03 --> Session Class Initialized
DEBUG - 2013-09-20 17:29:03 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:29:03 --> Session routines successfully run
DEBUG - 2013-09-20 17:29:03 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:29:03 --> Controller Class Initialized
DEBUG - 2013-09-20 17:29:03 --> Model Class Initialized
DEBUG - 2013-09-20 17:29:03 --> Model Class Initialized
DEBUG - 2013-09-20 17:29:03 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:29:03 --> after session initialization................
INFO  - 2013-09-20 17:29:03 --> last news id is 1
INFO  - 2013-09-20 17:29:03 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:29:03 --> last news id is 1
INFO  - 2013-09-20 17:29:03 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:29:03 --> Final output sent to browser
DEBUG - 2013-09-20 17:29:03 --> Total execution time: 0.0630
DEBUG - 2013-09-20 17:30:00 --> Config Class Initialized
DEBUG - 2013-09-20 17:30:00 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:30:00 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:30:00 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:30:00 --> URI Class Initialized
DEBUG - 2013-09-20 17:30:00 --> Router Class Initialized
DEBUG - 2013-09-20 17:30:00 --> Output Class Initialized
DEBUG - 2013-09-20 17:30:00 --> Security Class Initialized
DEBUG - 2013-09-20 17:30:00 --> Input Class Initialized
DEBUG - 2013-09-20 17:30:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:30:00 --> Language Class Initialized
DEBUG - 2013-09-20 17:30:00 --> Loader Class Initialized
DEBUG - 2013-09-20 17:30:00 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:30:00 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:30:00 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:30:00 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:30:00 --> Session Class Initialized
DEBUG - 2013-09-20 17:30:00 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:30:00 --> Session routines successfully run
DEBUG - 2013-09-20 17:30:00 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:30:00 --> Controller Class Initialized
DEBUG - 2013-09-20 17:30:00 --> Model Class Initialized
DEBUG - 2013-09-20 17:30:00 --> Model Class Initialized
DEBUG - 2013-09-20 17:30:00 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:30:00 --> after session initialization................
ERROR - 2013-09-20 17:30:00 --> Severity: Warning  --> Missing argument 1 for user_authorization::index() C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 69
ERROR - 2013-09-20 17:30:00 --> Severity: Notice  --> Undefined variable: message C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 71
DEBUG - 2013-09-20 17:30:00 --> Config Class Initialized
DEBUG - 2013-09-20 17:30:00 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:30:00 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:30:00 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:30:00 --> URI Class Initialized
DEBUG - 2013-09-20 17:30:00 --> Router Class Initialized
DEBUG - 2013-09-20 17:30:00 --> No URI present. Default controller set.
DEBUG - 2013-09-20 17:30:00 --> Output Class Initialized
DEBUG - 2013-09-20 17:30:00 --> Security Class Initialized
DEBUG - 2013-09-20 17:30:00 --> Input Class Initialized
DEBUG - 2013-09-20 17:30:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:30:00 --> Language Class Initialized
DEBUG - 2013-09-20 17:30:00 --> Loader Class Initialized
DEBUG - 2013-09-20 17:30:00 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:30:00 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:30:00 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:30:00 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:30:00 --> Session Class Initialized
DEBUG - 2013-09-20 17:30:00 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:30:00 --> Session routines successfully run
DEBUG - 2013-09-20 17:30:00 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:30:00 --> Controller Class Initialized
INFO  - 2013-09-20 17:30:00 --> the form message==>
INFO  - 2013-09-20 17:30:00 --> after the retrieving session list.................//////////
DEBUG - 2013-09-20 17:30:00 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-20 17:30:00 --> Final output sent to browser
DEBUG - 2013-09-20 17:30:00 --> Total execution time: 0.0550
DEBUG - 2013-09-20 17:30:00 --> Config Class Initialized
DEBUG - 2013-09-20 17:30:00 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:30:00 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:30:00 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:30:00 --> URI Class Initialized
DEBUG - 2013-09-20 17:30:00 --> Router Class Initialized
DEBUG - 2013-09-20 17:30:00 --> Output Class Initialized
DEBUG - 2013-09-20 17:30:00 --> Security Class Initialized
DEBUG - 2013-09-20 17:30:00 --> Input Class Initialized
DEBUG - 2013-09-20 17:30:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:30:00 --> Language Class Initialized
DEBUG - 2013-09-20 17:30:00 --> Loader Class Initialized
DEBUG - 2013-09-20 17:30:00 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:30:00 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:30:00 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:30:00 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:30:00 --> Session Class Initialized
DEBUG - 2013-09-20 17:30:00 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:30:00 --> Session routines successfully run
DEBUG - 2013-09-20 17:30:00 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:30:00 --> Controller Class Initialized
DEBUG - 2013-09-20 17:30:00 --> Model Class Initialized
DEBUG - 2013-09-20 17:30:00 --> Model Class Initialized
DEBUG - 2013-09-20 17:30:00 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:30:00 --> after session initialization................
INFO  - 2013-09-20 17:30:00 --> after rays has been clicked.................
INFO  - 2013-09-20 17:30:00 --> last news id is 0
INFO  - 2013-09-20 17:30:00 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:30:00 --> last news id is 0
INFO  - 2013-09-20 17:30:01 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:30:01 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 17:30:01 --> Final output sent to browser
DEBUG - 2013-09-20 17:30:01 --> Total execution time: 0.0630
DEBUG - 2013-09-20 17:30:03 --> Config Class Initialized
DEBUG - 2013-09-20 17:30:03 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:30:03 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:30:03 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:30:03 --> URI Class Initialized
DEBUG - 2013-09-20 17:30:03 --> Router Class Initialized
DEBUG - 2013-09-20 17:30:03 --> Output Class Initialized
DEBUG - 2013-09-20 17:30:03 --> Security Class Initialized
DEBUG - 2013-09-20 17:30:03 --> Input Class Initialized
DEBUG - 2013-09-20 17:30:03 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:30:03 --> Language Class Initialized
DEBUG - 2013-09-20 17:30:03 --> Loader Class Initialized
DEBUG - 2013-09-20 17:30:03 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:30:03 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:30:03 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:30:03 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:30:03 --> Session Class Initialized
DEBUG - 2013-09-20 17:30:03 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:30:03 --> Session routines successfully run
DEBUG - 2013-09-20 17:30:03 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:30:03 --> Controller Class Initialized
DEBUG - 2013-09-20 17:30:03 --> Model Class Initialized
DEBUG - 2013-09-20 17:30:03 --> Model Class Initialized
DEBUG - 2013-09-20 17:30:03 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:30:03 --> after session initialization................
INFO  - 2013-09-20 17:30:03 --> last news id is 1
INFO  - 2013-09-20 17:30:03 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:30:03 --> last news id is 7
INFO  - 2013-09-20 17:30:03 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:30:03 --> Final output sent to browser
DEBUG - 2013-09-20 17:30:03 --> Total execution time: 0.0560
DEBUG - 2013-09-20 17:30:03 --> Config Class Initialized
DEBUG - 2013-09-20 17:30:03 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:30:03 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:30:03 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:30:03 --> URI Class Initialized
DEBUG - 2013-09-20 17:30:03 --> Router Class Initialized
DEBUG - 2013-09-20 17:30:03 --> Output Class Initialized
DEBUG - 2013-09-20 17:30:03 --> Security Class Initialized
DEBUG - 2013-09-20 17:30:03 --> Input Class Initialized
DEBUG - 2013-09-20 17:30:03 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:30:03 --> Language Class Initialized
DEBUG - 2013-09-20 17:30:03 --> Loader Class Initialized
DEBUG - 2013-09-20 17:30:03 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:30:03 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:30:03 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:30:03 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:30:03 --> Session Class Initialized
DEBUG - 2013-09-20 17:30:03 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:30:03 --> Session routines successfully run
DEBUG - 2013-09-20 17:30:03 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:30:03 --> Controller Class Initialized
DEBUG - 2013-09-20 17:30:03 --> Model Class Initialized
DEBUG - 2013-09-20 17:30:03 --> Model Class Initialized
DEBUG - 2013-09-20 17:30:03 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:30:03 --> after session initialization................
INFO  - 2013-09-20 17:30:03 --> last news id is 1
INFO  - 2013-09-20 17:30:03 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:30:03 --> last news id is 5
INFO  - 2013-09-20 17:30:03 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 5
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:30:03 --> Final output sent to browser
DEBUG - 2013-09-20 17:30:03 --> Total execution time: 0.0600
DEBUG - 2013-09-20 17:30:04 --> Config Class Initialized
DEBUG - 2013-09-20 17:30:04 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:30:04 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:30:04 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:30:04 --> URI Class Initialized
DEBUG - 2013-09-20 17:30:04 --> Router Class Initialized
DEBUG - 2013-09-20 17:30:04 --> Output Class Initialized
DEBUG - 2013-09-20 17:30:04 --> Security Class Initialized
DEBUG - 2013-09-20 17:30:04 --> Input Class Initialized
DEBUG - 2013-09-20 17:30:04 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:30:04 --> Language Class Initialized
DEBUG - 2013-09-20 17:30:04 --> Loader Class Initialized
DEBUG - 2013-09-20 17:30:04 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:30:04 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:30:04 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:30:04 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:30:04 --> Session Class Initialized
DEBUG - 2013-09-20 17:30:04 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:30:04 --> Session routines successfully run
DEBUG - 2013-09-20 17:30:04 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:30:04 --> Controller Class Initialized
DEBUG - 2013-09-20 17:30:04 --> Model Class Initialized
DEBUG - 2013-09-20 17:30:04 --> Model Class Initialized
DEBUG - 2013-09-20 17:30:04 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:30:04 --> after session initialization................
INFO  - 2013-09-20 17:30:04 --> last news id is 1
INFO  - 2013-09-20 17:30:04 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:30:04 --> last news id is 3
INFO  - 2013-09-20 17:30:04 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 3
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:30:04 --> Final output sent to browser
DEBUG - 2013-09-20 17:30:04 --> Total execution time: 0.0650
DEBUG - 2013-09-20 17:30:05 --> Config Class Initialized
DEBUG - 2013-09-20 17:30:05 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:30:05 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:30:05 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:30:05 --> URI Class Initialized
DEBUG - 2013-09-20 17:30:05 --> Router Class Initialized
DEBUG - 2013-09-20 17:30:05 --> Output Class Initialized
DEBUG - 2013-09-20 17:30:05 --> Security Class Initialized
DEBUG - 2013-09-20 17:30:05 --> Input Class Initialized
DEBUG - 2013-09-20 17:30:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:30:05 --> Language Class Initialized
DEBUG - 2013-09-20 17:30:05 --> Loader Class Initialized
DEBUG - 2013-09-20 17:30:05 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:30:05 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:30:05 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:30:05 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:30:05 --> Session Class Initialized
DEBUG - 2013-09-20 17:30:05 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:30:05 --> Session routines successfully run
DEBUG - 2013-09-20 17:30:05 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:30:05 --> Controller Class Initialized
DEBUG - 2013-09-20 17:30:05 --> Model Class Initialized
DEBUG - 2013-09-20 17:30:05 --> Model Class Initialized
DEBUG - 2013-09-20 17:30:05 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:30:05 --> after session initialization................
INFO  - 2013-09-20 17:30:05 --> last news id is 1
INFO  - 2013-09-20 17:30:05 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:30:05 --> last news id is 1
INFO  - 2013-09-20 17:30:05 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:30:05 --> Final output sent to browser
DEBUG - 2013-09-20 17:30:05 --> Total execution time: 0.0560
DEBUG - 2013-09-20 17:30:14 --> Config Class Initialized
DEBUG - 2013-09-20 17:30:14 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:30:14 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:30:14 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:30:14 --> URI Class Initialized
DEBUG - 2013-09-20 17:30:14 --> Router Class Initialized
DEBUG - 2013-09-20 17:30:14 --> Output Class Initialized
DEBUG - 2013-09-20 17:30:14 --> Security Class Initialized
DEBUG - 2013-09-20 17:30:14 --> Input Class Initialized
DEBUG - 2013-09-20 17:30:14 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:30:14 --> Language Class Initialized
DEBUG - 2013-09-20 17:30:14 --> Loader Class Initialized
DEBUG - 2013-09-20 17:30:14 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:30:14 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:30:14 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:30:14 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:30:14 --> Session Class Initialized
DEBUG - 2013-09-20 17:30:14 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:30:14 --> Session routines successfully run
DEBUG - 2013-09-20 17:30:14 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:30:14 --> Controller Class Initialized
DEBUG - 2013-09-20 17:30:14 --> Model Class Initialized
DEBUG - 2013-09-20 17:30:14 --> Model Class Initialized
DEBUG - 2013-09-20 17:30:14 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:30:14 --> after session initialization................
INFO  - 2013-09-20 17:30:14 --> after rays has been clicked.................
INFO  - 2013-09-20 17:30:14 --> last news id is 0
INFO  - 2013-09-20 17:30:14 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:30:14 --> last news id is 0
INFO  - 2013-09-20 17:30:14 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:30:14 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 17:30:14 --> Final output sent to browser
DEBUG - 2013-09-20 17:30:14 --> Total execution time: 0.0630
DEBUG - 2013-09-20 17:30:21 --> Config Class Initialized
DEBUG - 2013-09-20 17:30:21 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:30:21 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:30:21 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:30:21 --> URI Class Initialized
DEBUG - 2013-09-20 17:30:21 --> Router Class Initialized
DEBUG - 2013-09-20 17:30:21 --> Output Class Initialized
DEBUG - 2013-09-20 17:30:21 --> Security Class Initialized
DEBUG - 2013-09-20 17:30:21 --> Input Class Initialized
DEBUG - 2013-09-20 17:30:21 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:30:21 --> Language Class Initialized
DEBUG - 2013-09-20 17:30:21 --> Loader Class Initialized
DEBUG - 2013-09-20 17:30:21 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:30:21 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:30:21 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:30:21 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:30:21 --> Session Class Initialized
DEBUG - 2013-09-20 17:30:21 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:30:21 --> Session routines successfully run
DEBUG - 2013-09-20 17:30:21 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:30:21 --> Controller Class Initialized
DEBUG - 2013-09-20 17:30:21 --> Model Class Initialized
DEBUG - 2013-09-20 17:30:21 --> Model Class Initialized
DEBUG - 2013-09-20 17:30:21 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:30:21 --> after session initialization................
ERROR - 2013-09-20 17:30:21 --> Severity: Warning  --> Missing argument 1 for user_authorization::index() C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 69
ERROR - 2013-09-20 17:30:21 --> Severity: Notice  --> Undefined variable: message C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 71
DEBUG - 2013-09-20 17:30:21 --> Config Class Initialized
DEBUG - 2013-09-20 17:30:21 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:30:21 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:30:21 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:30:21 --> URI Class Initialized
DEBUG - 2013-09-20 17:30:21 --> Router Class Initialized
DEBUG - 2013-09-20 17:30:21 --> No URI present. Default controller set.
DEBUG - 2013-09-20 17:30:21 --> Output Class Initialized
DEBUG - 2013-09-20 17:30:21 --> Security Class Initialized
DEBUG - 2013-09-20 17:30:21 --> Input Class Initialized
DEBUG - 2013-09-20 17:30:21 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:30:21 --> Language Class Initialized
DEBUG - 2013-09-20 17:30:21 --> Loader Class Initialized
DEBUG - 2013-09-20 17:30:21 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:30:21 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:30:21 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:30:21 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:30:21 --> Session Class Initialized
DEBUG - 2013-09-20 17:30:21 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:30:21 --> Session routines successfully run
DEBUG - 2013-09-20 17:30:21 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:30:21 --> Controller Class Initialized
INFO  - 2013-09-20 17:30:21 --> the form message==>
INFO  - 2013-09-20 17:30:21 --> after the retrieving session list.................//////////
DEBUG - 2013-09-20 17:30:21 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-20 17:30:21 --> Final output sent to browser
DEBUG - 2013-09-20 17:30:21 --> Total execution time: 0.0470
DEBUG - 2013-09-20 17:30:22 --> Config Class Initialized
DEBUG - 2013-09-20 17:30:22 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:30:22 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:30:22 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:30:22 --> URI Class Initialized
DEBUG - 2013-09-20 17:30:22 --> Router Class Initialized
DEBUG - 2013-09-20 17:30:22 --> Output Class Initialized
DEBUG - 2013-09-20 17:30:22 --> Security Class Initialized
DEBUG - 2013-09-20 17:30:22 --> Input Class Initialized
DEBUG - 2013-09-20 17:30:22 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:30:22 --> Language Class Initialized
DEBUG - 2013-09-20 17:30:22 --> Loader Class Initialized
DEBUG - 2013-09-20 17:30:22 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:30:22 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:30:22 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:30:22 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:30:22 --> Session Class Initialized
DEBUG - 2013-09-20 17:30:22 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:30:22 --> Session routines successfully run
DEBUG - 2013-09-20 17:30:22 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:30:22 --> Controller Class Initialized
DEBUG - 2013-09-20 17:30:22 --> Model Class Initialized
DEBUG - 2013-09-20 17:30:22 --> Model Class Initialized
DEBUG - 2013-09-20 17:30:22 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:30:22 --> after session initialization................
INFO  - 2013-09-20 17:30:22 --> after rays has been clicked.................
INFO  - 2013-09-20 17:30:22 --> last news id is 0
INFO  - 2013-09-20 17:30:22 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:30:22 --> last news id is 0
INFO  - 2013-09-20 17:30:22 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:30:22 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 17:30:22 --> Final output sent to browser
DEBUG - 2013-09-20 17:30:22 --> Total execution time: 0.0600
DEBUG - 2013-09-20 17:30:23 --> Config Class Initialized
DEBUG - 2013-09-20 17:30:23 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:30:23 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:30:23 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:30:23 --> URI Class Initialized
DEBUG - 2013-09-20 17:30:23 --> Router Class Initialized
DEBUG - 2013-09-20 17:30:23 --> Output Class Initialized
DEBUG - 2013-09-20 17:30:23 --> Security Class Initialized
DEBUG - 2013-09-20 17:30:23 --> Input Class Initialized
DEBUG - 2013-09-20 17:30:23 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:30:23 --> Language Class Initialized
DEBUG - 2013-09-20 17:30:23 --> Loader Class Initialized
DEBUG - 2013-09-20 17:30:23 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:30:23 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:30:23 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:30:23 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:30:23 --> Session Class Initialized
DEBUG - 2013-09-20 17:30:23 --> Config Class Initialized
DEBUG - 2013-09-20 17:30:23 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:30:23 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:30:23 --> Session routines successfully run
DEBUG - 2013-09-20 17:30:23 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:30:23 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:30:23 --> URI Class Initialized
DEBUG - 2013-09-20 17:30:23 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:30:23 --> Controller Class Initialized
DEBUG - 2013-09-20 17:30:23 --> Router Class Initialized
DEBUG - 2013-09-20 17:30:23 --> Model Class Initialized
DEBUG - 2013-09-20 17:30:23 --> Model Class Initialized
DEBUG - 2013-09-20 17:30:23 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:30:23 --> after session initialization................
INFO  - 2013-09-20 17:30:23 --> last news id is 1
DEBUG - 2013-09-20 17:30:23 --> Output Class Initialized
DEBUG - 2013-09-20 17:30:23 --> Security Class Initialized
INFO  - 2013-09-20 17:30:23 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:30:23 --> last news id is 7
DEBUG - 2013-09-20 17:30:23 --> Input Class Initialized
INFO  - 2013-09-20 17:30:23 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:30:23 --> Final output sent to browser
DEBUG - 2013-09-20 17:30:23 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:30:23 --> Total execution time: 0.0600
DEBUG - 2013-09-20 17:30:23 --> Language Class Initialized
DEBUG - 2013-09-20 17:30:23 --> Loader Class Initialized
DEBUG - 2013-09-20 17:30:23 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:30:23 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:30:23 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:30:23 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:30:23 --> Session Class Initialized
DEBUG - 2013-09-20 17:30:23 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:30:23 --> Session routines successfully run
DEBUG - 2013-09-20 17:30:23 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:30:23 --> Controller Class Initialized
DEBUG - 2013-09-20 17:30:23 --> Model Class Initialized
DEBUG - 2013-09-20 17:30:23 --> Model Class Initialized
DEBUG - 2013-09-20 17:30:23 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:30:23 --> after session initialization................
INFO  - 2013-09-20 17:30:23 --> last news id is 1
INFO  - 2013-09-20 17:30:23 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:30:23 --> last news id is 7
INFO  - 2013-09-20 17:30:23 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:30:23 --> Final output sent to browser
DEBUG - 2013-09-20 17:30:23 --> Total execution time: 0.0630
DEBUG - 2013-09-20 17:30:24 --> Config Class Initialized
DEBUG - 2013-09-20 17:30:24 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:30:24 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:30:24 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:30:24 --> URI Class Initialized
DEBUG - 2013-09-20 17:30:24 --> Router Class Initialized
DEBUG - 2013-09-20 17:30:24 --> Output Class Initialized
DEBUG - 2013-09-20 17:30:24 --> Security Class Initialized
DEBUG - 2013-09-20 17:30:24 --> Input Class Initialized
DEBUG - 2013-09-20 17:30:24 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:30:24 --> Language Class Initialized
DEBUG - 2013-09-20 17:30:24 --> Loader Class Initialized
DEBUG - 2013-09-20 17:30:24 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:30:24 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:30:24 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:30:24 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:30:24 --> Session Class Initialized
DEBUG - 2013-09-20 17:30:24 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:30:24 --> Session routines successfully run
DEBUG - 2013-09-20 17:30:24 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:30:24 --> Controller Class Initialized
DEBUG - 2013-09-20 17:30:24 --> Model Class Initialized
DEBUG - 2013-09-20 17:30:24 --> Model Class Initialized
DEBUG - 2013-09-20 17:30:24 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:30:24 --> after session initialization................
INFO  - 2013-09-20 17:30:24 --> last news id is 1
INFO  - 2013-09-20 17:30:24 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:30:24 --> last news id is 5
INFO  - 2013-09-20 17:30:24 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 5
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:30:24 --> Final output sent to browser
DEBUG - 2013-09-20 17:30:24 --> Total execution time: 0.0620
DEBUG - 2013-09-20 17:30:25 --> Config Class Initialized
DEBUG - 2013-09-20 17:30:25 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:30:25 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:30:25 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:30:25 --> URI Class Initialized
DEBUG - 2013-09-20 17:30:25 --> Router Class Initialized
DEBUG - 2013-09-20 17:30:25 --> Output Class Initialized
DEBUG - 2013-09-20 17:30:25 --> Security Class Initialized
DEBUG - 2013-09-20 17:30:25 --> Input Class Initialized
DEBUG - 2013-09-20 17:30:25 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:30:25 --> Language Class Initialized
DEBUG - 2013-09-20 17:30:25 --> Loader Class Initialized
DEBUG - 2013-09-20 17:30:25 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:30:25 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:30:25 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:30:25 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:30:25 --> Session Class Initialized
DEBUG - 2013-09-20 17:30:25 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:30:25 --> Session routines successfully run
DEBUG - 2013-09-20 17:30:25 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:30:25 --> Controller Class Initialized
DEBUG - 2013-09-20 17:30:25 --> Model Class Initialized
DEBUG - 2013-09-20 17:30:25 --> Model Class Initialized
DEBUG - 2013-09-20 17:30:25 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:30:25 --> after session initialization................
INFO  - 2013-09-20 17:30:25 --> last news id is 1
INFO  - 2013-09-20 17:30:25 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:30:25 --> last news id is 3
INFO  - 2013-09-20 17:30:25 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 3
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:30:25 --> Final output sent to browser
DEBUG - 2013-09-20 17:30:25 --> Total execution time: 0.0570
DEBUG - 2013-09-20 17:30:26 --> Config Class Initialized
DEBUG - 2013-09-20 17:30:26 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:30:26 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:30:26 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:30:26 --> URI Class Initialized
DEBUG - 2013-09-20 17:30:26 --> Router Class Initialized
DEBUG - 2013-09-20 17:30:26 --> Output Class Initialized
DEBUG - 2013-09-20 17:30:26 --> Security Class Initialized
DEBUG - 2013-09-20 17:30:26 --> Input Class Initialized
DEBUG - 2013-09-20 17:30:26 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:30:26 --> Language Class Initialized
DEBUG - 2013-09-20 17:30:26 --> Loader Class Initialized
DEBUG - 2013-09-20 17:30:26 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:30:26 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:30:26 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:30:26 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:30:26 --> Session Class Initialized
DEBUG - 2013-09-20 17:30:26 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:30:26 --> Session routines successfully run
DEBUG - 2013-09-20 17:30:26 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:30:26 --> Controller Class Initialized
DEBUG - 2013-09-20 17:30:26 --> Model Class Initialized
DEBUG - 2013-09-20 17:30:26 --> Model Class Initialized
DEBUG - 2013-09-20 17:30:26 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:30:26 --> after session initialization................
INFO  - 2013-09-20 17:30:26 --> last news id is 1
INFO  - 2013-09-20 17:30:26 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:30:26 --> last news id is 1
INFO  - 2013-09-20 17:30:26 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:30:26 --> Final output sent to browser
DEBUG - 2013-09-20 17:30:26 --> Total execution time: 0.0630
DEBUG - 2013-09-20 17:30:36 --> Config Class Initialized
DEBUG - 2013-09-20 17:30:36 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:30:36 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:30:36 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:30:36 --> URI Class Initialized
DEBUG - 2013-09-20 17:30:36 --> Router Class Initialized
DEBUG - 2013-09-20 17:30:36 --> Output Class Initialized
DEBUG - 2013-09-20 17:30:36 --> Security Class Initialized
DEBUG - 2013-09-20 17:30:36 --> Input Class Initialized
DEBUG - 2013-09-20 17:30:36 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:30:36 --> Language Class Initialized
DEBUG - 2013-09-20 17:30:36 --> Loader Class Initialized
DEBUG - 2013-09-20 17:30:36 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:30:36 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:30:36 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:30:36 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:30:36 --> Session Class Initialized
DEBUG - 2013-09-20 17:30:36 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:30:36 --> Session routines successfully run
DEBUG - 2013-09-20 17:30:36 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:30:36 --> Controller Class Initialized
DEBUG - 2013-09-20 17:30:36 --> Model Class Initialized
DEBUG - 2013-09-20 17:30:36 --> Model Class Initialized
DEBUG - 2013-09-20 17:30:36 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:30:36 --> after session initialization................
ERROR - 2013-09-20 17:30:36 --> Severity: Warning  --> Missing argument 1 for user_authorization::index() C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 69
ERROR - 2013-09-20 17:30:36 --> Severity: Notice  --> Undefined variable: message C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 71
DEBUG - 2013-09-20 17:30:37 --> Config Class Initialized
DEBUG - 2013-09-20 17:30:37 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:30:37 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:30:37 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:30:37 --> URI Class Initialized
DEBUG - 2013-09-20 17:30:37 --> Router Class Initialized
DEBUG - 2013-09-20 17:30:37 --> No URI present. Default controller set.
DEBUG - 2013-09-20 17:30:37 --> Output Class Initialized
DEBUG - 2013-09-20 17:30:37 --> Security Class Initialized
DEBUG - 2013-09-20 17:30:37 --> Input Class Initialized
DEBUG - 2013-09-20 17:30:37 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:30:37 --> Language Class Initialized
DEBUG - 2013-09-20 17:30:37 --> Loader Class Initialized
DEBUG - 2013-09-20 17:30:37 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:30:37 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:30:37 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:30:37 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:30:37 --> Session Class Initialized
DEBUG - 2013-09-20 17:30:37 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:30:37 --> Session routines successfully run
DEBUG - 2013-09-20 17:30:37 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:30:37 --> Controller Class Initialized
INFO  - 2013-09-20 17:30:37 --> the form message==>
INFO  - 2013-09-20 17:30:37 --> after the retrieving session list.................//////////
DEBUG - 2013-09-20 17:30:37 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-20 17:30:37 --> Final output sent to browser
DEBUG - 2013-09-20 17:30:37 --> Total execution time: 0.0450
DEBUG - 2013-09-20 17:30:38 --> Config Class Initialized
DEBUG - 2013-09-20 17:30:38 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:30:38 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:30:38 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:30:38 --> URI Class Initialized
DEBUG - 2013-09-20 17:30:38 --> Router Class Initialized
DEBUG - 2013-09-20 17:30:38 --> Output Class Initialized
DEBUG - 2013-09-20 17:30:38 --> Security Class Initialized
DEBUG - 2013-09-20 17:30:38 --> Input Class Initialized
DEBUG - 2013-09-20 17:30:38 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:30:38 --> Language Class Initialized
DEBUG - 2013-09-20 17:30:38 --> Loader Class Initialized
DEBUG - 2013-09-20 17:30:38 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:30:38 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:30:38 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:30:38 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:30:38 --> Session Class Initialized
DEBUG - 2013-09-20 17:30:38 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:30:38 --> Session routines successfully run
DEBUG - 2013-09-20 17:30:38 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:30:38 --> Controller Class Initialized
DEBUG - 2013-09-20 17:30:38 --> Model Class Initialized
DEBUG - 2013-09-20 17:30:38 --> Model Class Initialized
DEBUG - 2013-09-20 17:30:38 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:30:38 --> after session initialization................
INFO  - 2013-09-20 17:30:38 --> after rays has been clicked.................
INFO  - 2013-09-20 17:30:38 --> last news id is 0
INFO  - 2013-09-20 17:30:38 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:30:38 --> last news id is 0
INFO  - 2013-09-20 17:30:38 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:30:38 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 17:30:38 --> Final output sent to browser
DEBUG - 2013-09-20 17:30:38 --> Total execution time: 0.0630
DEBUG - 2013-09-20 17:30:39 --> Config Class Initialized
DEBUG - 2013-09-20 17:30:39 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:30:39 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:30:39 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:30:39 --> URI Class Initialized
DEBUG - 2013-09-20 17:30:39 --> Router Class Initialized
DEBUG - 2013-09-20 17:30:39 --> Output Class Initialized
DEBUG - 2013-09-20 17:30:39 --> Security Class Initialized
DEBUG - 2013-09-20 17:30:39 --> Input Class Initialized
DEBUG - 2013-09-20 17:30:39 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:30:39 --> Language Class Initialized
DEBUG - 2013-09-20 17:30:39 --> Loader Class Initialized
DEBUG - 2013-09-20 17:30:39 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:30:39 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:30:39 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:30:39 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:30:39 --> Session Class Initialized
DEBUG - 2013-09-20 17:30:39 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:30:39 --> Session routines successfully run
DEBUG - 2013-09-20 17:30:39 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:30:39 --> Controller Class Initialized
DEBUG - 2013-09-20 17:30:39 --> Model Class Initialized
DEBUG - 2013-09-20 17:30:39 --> Model Class Initialized
DEBUG - 2013-09-20 17:30:39 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:30:39 --> after session initialization................
INFO  - 2013-09-20 17:30:39 --> last news id is 1
INFO  - 2013-09-20 17:30:39 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:30:39 --> last news id is 7
INFO  - 2013-09-20 17:30:39 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:30:39 --> Final output sent to browser
DEBUG - 2013-09-20 17:30:39 --> Total execution time: 0.0700
DEBUG - 2013-09-20 17:30:39 --> Config Class Initialized
DEBUG - 2013-09-20 17:30:39 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:30:39 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:30:39 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:30:39 --> URI Class Initialized
DEBUG - 2013-09-20 17:30:39 --> Router Class Initialized
DEBUG - 2013-09-20 17:30:39 --> Output Class Initialized
DEBUG - 2013-09-20 17:30:39 --> Security Class Initialized
DEBUG - 2013-09-20 17:30:39 --> Input Class Initialized
DEBUG - 2013-09-20 17:30:39 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:30:39 --> Language Class Initialized
DEBUG - 2013-09-20 17:30:39 --> Loader Class Initialized
DEBUG - 2013-09-20 17:30:39 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:30:39 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:30:39 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:30:40 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:30:40 --> Session Class Initialized
DEBUG - 2013-09-20 17:30:40 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:30:40 --> Session routines successfully run
DEBUG - 2013-09-20 17:30:40 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:30:40 --> Controller Class Initialized
DEBUG - 2013-09-20 17:30:40 --> Model Class Initialized
DEBUG - 2013-09-20 17:30:40 --> Model Class Initialized
DEBUG - 2013-09-20 17:30:40 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:30:40 --> after session initialization................
INFO  - 2013-09-20 17:30:40 --> last news id is 1
INFO  - 2013-09-20 17:30:40 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:30:40 --> last news id is 5
INFO  - 2013-09-20 17:30:40 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 5
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:30:40 --> Final output sent to browser
DEBUG - 2013-09-20 17:30:40 --> Total execution time: 0.0550
DEBUG - 2013-09-20 17:30:40 --> Config Class Initialized
DEBUG - 2013-09-20 17:30:40 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:30:40 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:30:40 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:30:40 --> URI Class Initialized
DEBUG - 2013-09-20 17:30:40 --> Router Class Initialized
DEBUG - 2013-09-20 17:30:40 --> Output Class Initialized
DEBUG - 2013-09-20 17:30:40 --> Security Class Initialized
DEBUG - 2013-09-20 17:30:40 --> Input Class Initialized
DEBUG - 2013-09-20 17:30:40 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:30:40 --> Language Class Initialized
DEBUG - 2013-09-20 17:30:40 --> Loader Class Initialized
DEBUG - 2013-09-20 17:30:40 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:30:40 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:30:40 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:30:40 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:30:40 --> Session Class Initialized
DEBUG - 2013-09-20 17:30:40 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:30:40 --> Session routines successfully run
DEBUG - 2013-09-20 17:30:40 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:30:40 --> Controller Class Initialized
DEBUG - 2013-09-20 17:30:40 --> Model Class Initialized
DEBUG - 2013-09-20 17:30:40 --> Model Class Initialized
DEBUG - 2013-09-20 17:30:40 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:30:40 --> after session initialization................
INFO  - 2013-09-20 17:30:40 --> last news id is 1
INFO  - 2013-09-20 17:30:40 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:30:40 --> last news id is 3
INFO  - 2013-09-20 17:30:40 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 3
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:30:40 --> Final output sent to browser
DEBUG - 2013-09-20 17:30:40 --> Total execution time: 0.0620
DEBUG - 2013-09-20 17:30:41 --> Config Class Initialized
DEBUG - 2013-09-20 17:30:41 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:30:41 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:30:41 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:30:41 --> URI Class Initialized
DEBUG - 2013-09-20 17:30:41 --> Router Class Initialized
DEBUG - 2013-09-20 17:30:41 --> Output Class Initialized
DEBUG - 2013-09-20 17:30:41 --> Security Class Initialized
DEBUG - 2013-09-20 17:30:41 --> Input Class Initialized
DEBUG - 2013-09-20 17:30:41 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:30:41 --> Language Class Initialized
DEBUG - 2013-09-20 17:30:41 --> Loader Class Initialized
DEBUG - 2013-09-20 17:30:41 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:30:41 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:30:41 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:30:41 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:30:41 --> Session Class Initialized
DEBUG - 2013-09-20 17:30:41 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:30:41 --> Session routines successfully run
DEBUG - 2013-09-20 17:30:41 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:30:41 --> Controller Class Initialized
DEBUG - 2013-09-20 17:30:41 --> Model Class Initialized
DEBUG - 2013-09-20 17:30:41 --> Model Class Initialized
DEBUG - 2013-09-20 17:30:41 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:30:41 --> after session initialization................
INFO  - 2013-09-20 17:30:41 --> last news id is 1
INFO  - 2013-09-20 17:30:41 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:30:41 --> last news id is 1
INFO  - 2013-09-20 17:30:41 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:30:41 --> Final output sent to browser
DEBUG - 2013-09-20 17:30:41 --> Total execution time: 0.0570
DEBUG - 2013-09-20 17:30:44 --> Config Class Initialized
DEBUG - 2013-09-20 17:30:44 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:30:44 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:30:44 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:30:44 --> URI Class Initialized
DEBUG - 2013-09-20 17:30:44 --> Router Class Initialized
DEBUG - 2013-09-20 17:30:44 --> Output Class Initialized
DEBUG - 2013-09-20 17:30:44 --> Security Class Initialized
DEBUG - 2013-09-20 17:30:44 --> Input Class Initialized
DEBUG - 2013-09-20 17:30:44 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:30:44 --> Language Class Initialized
DEBUG - 2013-09-20 17:30:44 --> Loader Class Initialized
DEBUG - 2013-09-20 17:30:44 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:30:44 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:30:44 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:30:44 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:30:44 --> Session Class Initialized
DEBUG - 2013-09-20 17:30:44 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:30:44 --> Session routines successfully run
DEBUG - 2013-09-20 17:30:44 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:30:44 --> Controller Class Initialized
DEBUG - 2013-09-20 17:30:44 --> Model Class Initialized
DEBUG - 2013-09-20 17:30:44 --> Model Class Initialized
DEBUG - 2013-09-20 17:30:44 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:30:44 --> after session initialization................
INFO  - 2013-09-20 17:30:44 --> after rays has been clicked.................
INFO  - 2013-09-20 17:30:44 --> last news id is 0
INFO  - 2013-09-20 17:30:44 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:30:44 --> last news id is 0
INFO  - 2013-09-20 17:30:44 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:30:44 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 17:30:44 --> Final output sent to browser
DEBUG - 2013-09-20 17:30:44 --> Total execution time: 0.0720
DEBUG - 2013-09-20 17:31:34 --> Config Class Initialized
DEBUG - 2013-09-20 17:31:34 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:31:34 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:31:34 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:31:34 --> URI Class Initialized
DEBUG - 2013-09-20 17:31:34 --> Router Class Initialized
DEBUG - 2013-09-20 17:31:34 --> Output Class Initialized
DEBUG - 2013-09-20 17:31:34 --> Security Class Initialized
DEBUG - 2013-09-20 17:31:34 --> Input Class Initialized
DEBUG - 2013-09-20 17:31:34 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:31:34 --> Language Class Initialized
DEBUG - 2013-09-20 17:31:34 --> Loader Class Initialized
DEBUG - 2013-09-20 17:31:34 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:31:34 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:31:34 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:31:34 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:31:34 --> Session Class Initialized
DEBUG - 2013-09-20 17:31:34 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:31:34 --> Session routines successfully run
DEBUG - 2013-09-20 17:31:34 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:31:34 --> Controller Class Initialized
DEBUG - 2013-09-20 17:31:34 --> Model Class Initialized
DEBUG - 2013-09-20 17:31:34 --> Model Class Initialized
DEBUG - 2013-09-20 17:31:34 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:31:34 --> after session initialization................
ERROR - 2013-09-20 17:31:34 --> Severity: Warning  --> Missing argument 1 for user_authorization::index() C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 69
ERROR - 2013-09-20 17:31:34 --> Severity: Notice  --> Undefined variable: message C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 71
DEBUG - 2013-09-20 17:31:34 --> Config Class Initialized
DEBUG - 2013-09-20 17:31:34 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:31:34 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:31:34 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:31:34 --> URI Class Initialized
DEBUG - 2013-09-20 17:31:34 --> Router Class Initialized
DEBUG - 2013-09-20 17:31:34 --> No URI present. Default controller set.
DEBUG - 2013-09-20 17:31:34 --> Output Class Initialized
DEBUG - 2013-09-20 17:31:34 --> Security Class Initialized
DEBUG - 2013-09-20 17:31:34 --> Input Class Initialized
DEBUG - 2013-09-20 17:31:34 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:31:34 --> Language Class Initialized
DEBUG - 2013-09-20 17:31:34 --> Loader Class Initialized
DEBUG - 2013-09-20 17:31:34 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:31:34 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:31:34 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:31:34 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:31:34 --> Session Class Initialized
DEBUG - 2013-09-20 17:31:34 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:31:34 --> Session routines successfully run
DEBUG - 2013-09-20 17:31:34 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:31:34 --> Controller Class Initialized
INFO  - 2013-09-20 17:31:34 --> the form message==>
INFO  - 2013-09-20 17:31:34 --> after the retrieving session list.................//////////
DEBUG - 2013-09-20 17:31:34 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-20 17:31:34 --> Final output sent to browser
DEBUG - 2013-09-20 17:31:34 --> Total execution time: 0.0450
DEBUG - 2013-09-20 17:31:36 --> Config Class Initialized
DEBUG - 2013-09-20 17:31:36 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:31:36 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:31:36 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:31:36 --> URI Class Initialized
DEBUG - 2013-09-20 17:31:36 --> Router Class Initialized
DEBUG - 2013-09-20 17:31:36 --> Output Class Initialized
DEBUG - 2013-09-20 17:31:36 --> Security Class Initialized
DEBUG - 2013-09-20 17:31:36 --> Input Class Initialized
DEBUG - 2013-09-20 17:31:36 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:31:36 --> Language Class Initialized
DEBUG - 2013-09-20 17:31:36 --> Loader Class Initialized
DEBUG - 2013-09-20 17:31:36 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:31:36 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:31:36 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:31:36 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:31:36 --> Session Class Initialized
DEBUG - 2013-09-20 17:31:36 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:31:36 --> Session routines successfully run
DEBUG - 2013-09-20 17:31:36 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:31:36 --> Controller Class Initialized
DEBUG - 2013-09-20 17:31:36 --> Model Class Initialized
DEBUG - 2013-09-20 17:31:36 --> Model Class Initialized
DEBUG - 2013-09-20 17:31:36 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:31:36 --> after session initialization................
INFO  - 2013-09-20 17:31:36 --> after rays has been clicked.................
INFO  - 2013-09-20 17:31:36 --> last news id is 0
INFO  - 2013-09-20 17:31:36 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:31:36 --> last news id is 0
INFO  - 2013-09-20 17:31:36 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:31:36 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 17:31:36 --> Final output sent to browser
DEBUG - 2013-09-20 17:31:36 --> Total execution time: 0.0660
DEBUG - 2013-09-20 17:31:39 --> Config Class Initialized
DEBUG - 2013-09-20 17:31:39 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:31:39 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:31:39 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:31:39 --> URI Class Initialized
DEBUG - 2013-09-20 17:31:39 --> Router Class Initialized
DEBUG - 2013-09-20 17:31:39 --> Output Class Initialized
DEBUG - 2013-09-20 17:31:39 --> Security Class Initialized
DEBUG - 2013-09-20 17:31:39 --> Input Class Initialized
DEBUG - 2013-09-20 17:31:39 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:31:39 --> Language Class Initialized
DEBUG - 2013-09-20 17:31:39 --> Loader Class Initialized
DEBUG - 2013-09-20 17:31:39 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:31:39 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:31:39 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:31:39 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:31:39 --> Session Class Initialized
DEBUG - 2013-09-20 17:31:39 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:31:39 --> Session routines successfully run
DEBUG - 2013-09-20 17:31:39 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:31:39 --> Controller Class Initialized
DEBUG - 2013-09-20 17:31:39 --> Model Class Initialized
DEBUG - 2013-09-20 17:31:39 --> Model Class Initialized
DEBUG - 2013-09-20 17:31:39 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:31:39 --> after session initialization................
INFO  - 2013-09-20 17:31:39 --> after rays has been clicked.................
INFO  - 2013-09-20 17:31:39 --> last news id is 0
INFO  - 2013-09-20 17:31:39 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:31:39 --> last news id is 0
INFO  - 2013-09-20 17:31:39 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:31:39 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 17:31:39 --> Final output sent to browser
DEBUG - 2013-09-20 17:31:39 --> Total execution time: 0.0620
DEBUG - 2013-09-20 17:31:40 --> Config Class Initialized
DEBUG - 2013-09-20 17:31:40 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:31:40 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:31:40 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:31:40 --> URI Class Initialized
DEBUG - 2013-09-20 17:31:40 --> Router Class Initialized
DEBUG - 2013-09-20 17:31:40 --> Output Class Initialized
DEBUG - 2013-09-20 17:31:40 --> Security Class Initialized
DEBUG - 2013-09-20 17:31:40 --> Input Class Initialized
DEBUG - 2013-09-20 17:31:40 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:31:40 --> Language Class Initialized
DEBUG - 2013-09-20 17:31:40 --> Loader Class Initialized
DEBUG - 2013-09-20 17:31:40 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:31:40 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:31:40 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:31:40 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:31:40 --> Session Class Initialized
DEBUG - 2013-09-20 17:31:40 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:31:40 --> Session routines successfully run
DEBUG - 2013-09-20 17:31:40 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:31:40 --> Controller Class Initialized
DEBUG - 2013-09-20 17:31:40 --> Model Class Initialized
DEBUG - 2013-09-20 17:31:40 --> Model Class Initialized
DEBUG - 2013-09-20 17:31:40 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:31:40 --> after session initialization................
INFO  - 2013-09-20 17:31:40 --> last news id is 1
INFO  - 2013-09-20 17:31:40 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:31:40 --> last news id is 7
INFO  - 2013-09-20 17:31:40 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:31:40 --> Final output sent to browser
DEBUG - 2013-09-20 17:31:40 --> Total execution time: 0.0590
DEBUG - 2013-09-20 17:31:41 --> Config Class Initialized
DEBUG - 2013-09-20 17:31:41 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:31:41 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:31:41 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:31:41 --> URI Class Initialized
DEBUG - 2013-09-20 17:31:41 --> Router Class Initialized
DEBUG - 2013-09-20 17:31:41 --> Output Class Initialized
DEBUG - 2013-09-20 17:31:41 --> Security Class Initialized
DEBUG - 2013-09-20 17:31:41 --> Input Class Initialized
DEBUG - 2013-09-20 17:31:41 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:31:41 --> Language Class Initialized
DEBUG - 2013-09-20 17:31:41 --> Loader Class Initialized
DEBUG - 2013-09-20 17:31:41 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:31:41 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:31:41 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:31:41 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:31:41 --> Session Class Initialized
DEBUG - 2013-09-20 17:31:41 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:31:41 --> Session routines successfully run
DEBUG - 2013-09-20 17:31:41 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:31:41 --> Controller Class Initialized
DEBUG - 2013-09-20 17:31:41 --> Model Class Initialized
DEBUG - 2013-09-20 17:31:41 --> Model Class Initialized
DEBUG - 2013-09-20 17:31:41 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:31:41 --> after session initialization................
INFO  - 2013-09-20 17:31:41 --> last news id is 1
INFO  - 2013-09-20 17:31:41 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:31:41 --> last news id is 5
INFO  - 2013-09-20 17:31:41 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 5
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:31:41 --> Final output sent to browser
DEBUG - 2013-09-20 17:31:41 --> Total execution time: 0.0510
DEBUG - 2013-09-20 17:31:42 --> Config Class Initialized
DEBUG - 2013-09-20 17:31:42 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:31:42 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:31:42 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:31:42 --> URI Class Initialized
DEBUG - 2013-09-20 17:31:42 --> Router Class Initialized
DEBUG - 2013-09-20 17:31:42 --> Output Class Initialized
DEBUG - 2013-09-20 17:31:42 --> Security Class Initialized
DEBUG - 2013-09-20 17:31:42 --> Input Class Initialized
DEBUG - 2013-09-20 17:31:42 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:31:42 --> Language Class Initialized
DEBUG - 2013-09-20 17:31:42 --> Loader Class Initialized
DEBUG - 2013-09-20 17:31:42 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:31:42 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:31:42 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:31:42 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:31:42 --> Session Class Initialized
DEBUG - 2013-09-20 17:31:42 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:31:42 --> Session routines successfully run
DEBUG - 2013-09-20 17:31:42 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:31:42 --> Controller Class Initialized
DEBUG - 2013-09-20 17:31:42 --> Model Class Initialized
DEBUG - 2013-09-20 17:31:42 --> Model Class Initialized
DEBUG - 2013-09-20 17:31:42 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:31:42 --> after session initialization................
INFO  - 2013-09-20 17:31:42 --> last news id is 1
INFO  - 2013-09-20 17:31:42 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:31:42 --> last news id is 3
INFO  - 2013-09-20 17:31:42 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 3
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:31:42 --> Final output sent to browser
DEBUG - 2013-09-20 17:31:42 --> Total execution time: 0.0600
DEBUG - 2013-09-20 17:31:43 --> Config Class Initialized
DEBUG - 2013-09-20 17:31:43 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:31:43 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:31:43 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:31:43 --> URI Class Initialized
DEBUG - 2013-09-20 17:31:43 --> Router Class Initialized
DEBUG - 2013-09-20 17:31:43 --> Output Class Initialized
DEBUG - 2013-09-20 17:31:43 --> Security Class Initialized
DEBUG - 2013-09-20 17:31:43 --> Input Class Initialized
DEBUG - 2013-09-20 17:31:43 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:31:43 --> Language Class Initialized
DEBUG - 2013-09-20 17:31:43 --> Loader Class Initialized
DEBUG - 2013-09-20 17:31:43 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:31:43 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:31:43 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:31:43 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:31:43 --> Session Class Initialized
DEBUG - 2013-09-20 17:31:43 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:31:43 --> Session routines successfully run
DEBUG - 2013-09-20 17:31:43 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:31:43 --> Controller Class Initialized
DEBUG - 2013-09-20 17:31:43 --> Model Class Initialized
DEBUG - 2013-09-20 17:31:43 --> Model Class Initialized
DEBUG - 2013-09-20 17:31:43 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:31:43 --> after session initialization................
INFO  - 2013-09-20 17:31:43 --> last news id is 1
INFO  - 2013-09-20 17:31:43 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:31:43 --> last news id is 1
INFO  - 2013-09-20 17:31:43 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:31:43 --> Final output sent to browser
DEBUG - 2013-09-20 17:31:43 --> Total execution time: 0.0540
DEBUG - 2013-09-20 17:31:46 --> Config Class Initialized
DEBUG - 2013-09-20 17:31:46 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:31:46 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:31:46 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:31:46 --> URI Class Initialized
DEBUG - 2013-09-20 17:31:46 --> Router Class Initialized
DEBUG - 2013-09-20 17:31:46 --> Output Class Initialized
DEBUG - 2013-09-20 17:31:46 --> Security Class Initialized
DEBUG - 2013-09-20 17:31:46 --> Input Class Initialized
DEBUG - 2013-09-20 17:31:46 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:31:46 --> Language Class Initialized
DEBUG - 2013-09-20 17:31:46 --> Loader Class Initialized
DEBUG - 2013-09-20 17:31:46 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:31:46 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:31:46 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:31:46 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:31:46 --> Session Class Initialized
DEBUG - 2013-09-20 17:31:46 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:31:46 --> Session routines successfully run
DEBUG - 2013-09-20 17:31:46 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:31:46 --> Controller Class Initialized
DEBUG - 2013-09-20 17:31:46 --> Model Class Initialized
DEBUG - 2013-09-20 17:31:46 --> Model Class Initialized
DEBUG - 2013-09-20 17:31:46 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:31:46 --> after session initialization................
INFO  - 2013-09-20 17:31:46 --> after rays has been clicked.................
INFO  - 2013-09-20 17:31:46 --> last news id is 0
INFO  - 2013-09-20 17:31:46 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:31:46 --> last news id is 0
INFO  - 2013-09-20 17:31:46 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:31:46 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 17:31:46 --> Final output sent to browser
DEBUG - 2013-09-20 17:31:46 --> Total execution time: 0.0740
DEBUG - 2013-09-20 17:31:46 --> Config Class Initialized
DEBUG - 2013-09-20 17:31:46 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:31:46 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:31:46 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:31:46 --> URI Class Initialized
DEBUG - 2013-09-20 17:31:46 --> Router Class Initialized
DEBUG - 2013-09-20 17:31:46 --> Output Class Initialized
DEBUG - 2013-09-20 17:31:46 --> Security Class Initialized
DEBUG - 2013-09-20 17:31:46 --> Input Class Initialized
DEBUG - 2013-09-20 17:31:46 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:31:46 --> Language Class Initialized
DEBUG - 2013-09-20 17:31:46 --> Loader Class Initialized
DEBUG - 2013-09-20 17:31:46 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:31:46 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:31:46 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:31:46 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:31:46 --> Session Class Initialized
DEBUG - 2013-09-20 17:31:46 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:31:46 --> Session routines successfully run
DEBUG - 2013-09-20 17:31:46 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:31:46 --> Controller Class Initialized
DEBUG - 2013-09-20 17:31:46 --> Model Class Initialized
DEBUG - 2013-09-20 17:31:46 --> Model Class Initialized
DEBUG - 2013-09-20 17:31:46 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:31:46 --> after session initialization................
INFO  - 2013-09-20 17:31:46 --> last news id is 1
INFO  - 2013-09-20 17:31:46 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:31:46 --> last news id is 7
INFO  - 2013-09-20 17:31:46 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:31:46 --> Final output sent to browser
DEBUG - 2013-09-20 17:31:46 --> Total execution time: 0.0840
DEBUG - 2013-09-20 17:31:46 --> Config Class Initialized
DEBUG - 2013-09-20 17:31:46 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:31:46 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:31:46 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:31:46 --> URI Class Initialized
DEBUG - 2013-09-20 17:31:46 --> Router Class Initialized
DEBUG - 2013-09-20 17:31:46 --> Output Class Initialized
DEBUG - 2013-09-20 17:31:46 --> Security Class Initialized
DEBUG - 2013-09-20 17:31:46 --> Input Class Initialized
DEBUG - 2013-09-20 17:31:46 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:31:46 --> Language Class Initialized
DEBUG - 2013-09-20 17:31:46 --> Loader Class Initialized
DEBUG - 2013-09-20 17:31:46 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:31:46 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:31:46 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:31:46 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:31:46 --> Session Class Initialized
DEBUG - 2013-09-20 17:31:46 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:31:46 --> Session routines successfully run
DEBUG - 2013-09-20 17:31:46 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:31:46 --> Controller Class Initialized
DEBUG - 2013-09-20 17:31:46 --> Model Class Initialized
DEBUG - 2013-09-20 17:31:46 --> Model Class Initialized
DEBUG - 2013-09-20 17:31:46 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:31:46 --> after session initialization................
INFO  - 2013-09-20 17:31:46 --> last news id is 1
INFO  - 2013-09-20 17:31:46 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:31:46 --> last news id is 5
INFO  - 2013-09-20 17:31:46 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 5
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:31:46 --> Final output sent to browser
DEBUG - 2013-09-20 17:31:46 --> Total execution time: 0.0570
DEBUG - 2013-09-20 17:31:50 --> Config Class Initialized
DEBUG - 2013-09-20 17:31:50 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:31:50 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:31:50 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:31:50 --> URI Class Initialized
DEBUG - 2013-09-20 17:31:50 --> Router Class Initialized
DEBUG - 2013-09-20 17:31:50 --> Output Class Initialized
DEBUG - 2013-09-20 17:31:50 --> Security Class Initialized
DEBUG - 2013-09-20 17:31:50 --> Input Class Initialized
DEBUG - 2013-09-20 17:31:50 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:31:50 --> Language Class Initialized
DEBUG - 2013-09-20 17:31:50 --> Loader Class Initialized
DEBUG - 2013-09-20 17:31:50 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:31:50 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:31:50 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:31:50 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:31:50 --> Session Class Initialized
DEBUG - 2013-09-20 17:31:50 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:31:50 --> Session routines successfully run
DEBUG - 2013-09-20 17:31:50 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:31:50 --> Controller Class Initialized
DEBUG - 2013-09-20 17:31:50 --> Model Class Initialized
DEBUG - 2013-09-20 17:31:50 --> Model Class Initialized
DEBUG - 2013-09-20 17:31:50 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:31:50 --> after session initialization................
INFO  - 2013-09-20 17:31:50 --> last news id is 1
INFO  - 2013-09-20 17:31:50 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:31:50 --> last news id is 3
INFO  - 2013-09-20 17:31:50 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 3
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:31:50 --> Final output sent to browser
DEBUG - 2013-09-20 17:31:50 --> Total execution time: 0.0560
DEBUG - 2013-09-20 17:31:50 --> Config Class Initialized
DEBUG - 2013-09-20 17:31:50 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:31:50 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:31:50 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:31:50 --> URI Class Initialized
DEBUG - 2013-09-20 17:31:50 --> Router Class Initialized
DEBUG - 2013-09-20 17:31:50 --> Output Class Initialized
DEBUG - 2013-09-20 17:31:50 --> Security Class Initialized
DEBUG - 2013-09-20 17:31:50 --> Input Class Initialized
DEBUG - 2013-09-20 17:31:50 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:31:50 --> Language Class Initialized
DEBUG - 2013-09-20 17:31:50 --> Loader Class Initialized
DEBUG - 2013-09-20 17:31:50 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:31:50 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:31:50 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:31:50 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:31:50 --> Session Class Initialized
DEBUG - 2013-09-20 17:31:50 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:31:50 --> Session routines successfully run
DEBUG - 2013-09-20 17:31:50 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:31:50 --> Controller Class Initialized
DEBUG - 2013-09-20 17:31:50 --> Model Class Initialized
DEBUG - 2013-09-20 17:31:50 --> Model Class Initialized
DEBUG - 2013-09-20 17:31:50 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:31:50 --> after session initialization................
INFO  - 2013-09-20 17:31:50 --> last news id is 1
INFO  - 2013-09-20 17:31:50 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:31:50 --> last news id is 1
INFO  - 2013-09-20 17:31:50 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:31:50 --> Final output sent to browser
DEBUG - 2013-09-20 17:31:50 --> Total execution time: 0.0560
DEBUG - 2013-09-20 17:31:56 --> Config Class Initialized
DEBUG - 2013-09-20 17:31:56 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:31:56 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:31:56 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:31:56 --> URI Class Initialized
DEBUG - 2013-09-20 17:31:56 --> Router Class Initialized
DEBUG - 2013-09-20 17:31:56 --> Output Class Initialized
DEBUG - 2013-09-20 17:31:56 --> Security Class Initialized
DEBUG - 2013-09-20 17:31:56 --> Input Class Initialized
DEBUG - 2013-09-20 17:31:56 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:31:56 --> Language Class Initialized
DEBUG - 2013-09-20 17:31:56 --> Loader Class Initialized
DEBUG - 2013-09-20 17:31:56 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:31:56 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:31:56 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:31:56 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:31:56 --> Session Class Initialized
DEBUG - 2013-09-20 17:31:56 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:31:56 --> Session routines successfully run
DEBUG - 2013-09-20 17:31:56 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:31:56 --> Controller Class Initialized
DEBUG - 2013-09-20 17:31:56 --> Model Class Initialized
DEBUG - 2013-09-20 17:31:56 --> Model Class Initialized
DEBUG - 2013-09-20 17:31:56 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:31:56 --> after session initialization................
INFO  - 2013-09-20 17:31:56 --> after rays has been clicked.................
INFO  - 2013-09-20 17:31:56 --> last news id is 0
INFO  - 2013-09-20 17:31:56 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:31:56 --> last news id is 0
INFO  - 2013-09-20 17:31:56 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:31:56 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 17:31:56 --> Final output sent to browser
DEBUG - 2013-09-20 17:31:56 --> Total execution time: 0.0650
DEBUG - 2013-09-20 17:31:58 --> Config Class Initialized
DEBUG - 2013-09-20 17:31:58 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:31:58 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:31:58 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:31:58 --> URI Class Initialized
DEBUG - 2013-09-20 17:31:58 --> Router Class Initialized
DEBUG - 2013-09-20 17:31:58 --> Output Class Initialized
DEBUG - 2013-09-20 17:31:58 --> Security Class Initialized
DEBUG - 2013-09-20 17:31:58 --> Input Class Initialized
DEBUG - 2013-09-20 17:31:58 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:31:58 --> Language Class Initialized
DEBUG - 2013-09-20 17:31:58 --> Loader Class Initialized
DEBUG - 2013-09-20 17:31:58 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:31:58 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:31:58 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:31:58 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:31:58 --> Session Class Initialized
DEBUG - 2013-09-20 17:31:58 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:31:58 --> Session routines successfully run
DEBUG - 2013-09-20 17:31:58 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:31:58 --> Controller Class Initialized
DEBUG - 2013-09-20 17:31:58 --> Model Class Initialized
DEBUG - 2013-09-20 17:31:58 --> Model Class Initialized
DEBUG - 2013-09-20 17:31:58 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:31:58 --> after session initialization................
INFO  - 2013-09-20 17:31:58 --> last news id is 1
INFO  - 2013-09-20 17:31:58 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:31:58 --> last news id is 7
INFO  - 2013-09-20 17:31:58 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:31:58 --> Final output sent to browser
DEBUG - 2013-09-20 17:31:58 --> Total execution time: 0.0580
DEBUG - 2013-09-20 17:31:59 --> Config Class Initialized
DEBUG - 2013-09-20 17:31:59 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:31:59 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:31:59 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:31:59 --> URI Class Initialized
DEBUG - 2013-09-20 17:31:59 --> Router Class Initialized
DEBUG - 2013-09-20 17:31:59 --> Output Class Initialized
DEBUG - 2013-09-20 17:31:59 --> Security Class Initialized
DEBUG - 2013-09-20 17:31:59 --> Input Class Initialized
DEBUG - 2013-09-20 17:31:59 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:31:59 --> Language Class Initialized
DEBUG - 2013-09-20 17:31:59 --> Loader Class Initialized
DEBUG - 2013-09-20 17:31:59 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:31:59 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:31:59 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:31:59 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:31:59 --> Session Class Initialized
DEBUG - 2013-09-20 17:31:59 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:31:59 --> Session routines successfully run
DEBUG - 2013-09-20 17:31:59 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:31:59 --> Controller Class Initialized
DEBUG - 2013-09-20 17:31:59 --> Model Class Initialized
DEBUG - 2013-09-20 17:31:59 --> Model Class Initialized
DEBUG - 2013-09-20 17:31:59 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:31:59 --> after session initialization................
INFO  - 2013-09-20 17:31:59 --> last news id is 1
INFO  - 2013-09-20 17:31:59 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:31:59 --> last news id is 5
INFO  - 2013-09-20 17:31:59 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 5
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:31:59 --> Final output sent to browser
DEBUG - 2013-09-20 17:31:59 --> Total execution time: 0.0490
DEBUG - 2013-09-20 17:32:00 --> Config Class Initialized
DEBUG - 2013-09-20 17:32:00 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:32:00 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:32:00 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:32:00 --> URI Class Initialized
DEBUG - 2013-09-20 17:32:00 --> Router Class Initialized
DEBUG - 2013-09-20 17:32:00 --> Output Class Initialized
DEBUG - 2013-09-20 17:32:00 --> Security Class Initialized
DEBUG - 2013-09-20 17:32:00 --> Input Class Initialized
DEBUG - 2013-09-20 17:32:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:32:00 --> Language Class Initialized
DEBUG - 2013-09-20 17:32:00 --> Loader Class Initialized
DEBUG - 2013-09-20 17:32:00 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:32:00 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:32:00 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:32:00 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:32:00 --> Session Class Initialized
DEBUG - 2013-09-20 17:32:00 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:32:00 --> Session routines successfully run
DEBUG - 2013-09-20 17:32:00 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:32:00 --> Controller Class Initialized
DEBUG - 2013-09-20 17:32:00 --> Model Class Initialized
DEBUG - 2013-09-20 17:32:00 --> Model Class Initialized
DEBUG - 2013-09-20 17:32:00 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:32:00 --> after session initialization................
INFO  - 2013-09-20 17:32:00 --> last news id is 1
INFO  - 2013-09-20 17:32:00 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:32:00 --> last news id is 3
INFO  - 2013-09-20 17:32:00 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 3
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:32:00 --> Final output sent to browser
DEBUG - 2013-09-20 17:32:00 --> Total execution time: 0.0630
DEBUG - 2013-09-20 17:32:00 --> Config Class Initialized
DEBUG - 2013-09-20 17:32:00 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:32:00 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:32:00 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:32:00 --> URI Class Initialized
DEBUG - 2013-09-20 17:32:00 --> Router Class Initialized
DEBUG - 2013-09-20 17:32:00 --> Output Class Initialized
DEBUG - 2013-09-20 17:32:00 --> Security Class Initialized
DEBUG - 2013-09-20 17:32:00 --> Input Class Initialized
DEBUG - 2013-09-20 17:32:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:32:00 --> Language Class Initialized
DEBUG - 2013-09-20 17:32:00 --> Loader Class Initialized
DEBUG - 2013-09-20 17:32:00 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:32:00 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:32:00 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:32:00 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:32:00 --> Session Class Initialized
DEBUG - 2013-09-20 17:32:00 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:32:00 --> Session routines successfully run
DEBUG - 2013-09-20 17:32:00 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:32:00 --> Controller Class Initialized
DEBUG - 2013-09-20 17:32:00 --> Model Class Initialized
DEBUG - 2013-09-20 17:32:00 --> Model Class Initialized
DEBUG - 2013-09-20 17:32:00 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:32:00 --> after session initialization................
INFO  - 2013-09-20 17:32:00 --> last news id is 1
INFO  - 2013-09-20 17:32:00 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:32:00 --> last news id is 1
INFO  - 2013-09-20 17:32:00 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:32:00 --> Final output sent to browser
DEBUG - 2013-09-20 17:32:00 --> Total execution time: 0.0690
DEBUG - 2013-09-20 17:32:01 --> Config Class Initialized
DEBUG - 2013-09-20 17:32:01 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:32:01 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:32:01 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:32:01 --> URI Class Initialized
DEBUG - 2013-09-20 17:32:01 --> Router Class Initialized
DEBUG - 2013-09-20 17:32:01 --> Output Class Initialized
DEBUG - 2013-09-20 17:32:01 --> Security Class Initialized
DEBUG - 2013-09-20 17:32:01 --> Input Class Initialized
DEBUG - 2013-09-20 17:32:01 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:32:01 --> Language Class Initialized
DEBUG - 2013-09-20 17:32:01 --> Loader Class Initialized
DEBUG - 2013-09-20 17:32:01 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:32:01 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:32:01 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:32:01 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:32:01 --> Session Class Initialized
DEBUG - 2013-09-20 17:32:01 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:32:01 --> Session routines successfully run
DEBUG - 2013-09-20 17:32:01 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:32:01 --> Controller Class Initialized
DEBUG - 2013-09-20 17:32:01 --> Model Class Initialized
DEBUG - 2013-09-20 17:32:01 --> Model Class Initialized
DEBUG - 2013-09-20 17:32:01 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:32:01 --> after session initialization................
ERROR - 2013-09-20 17:32:01 --> Severity: Warning  --> Missing argument 1 for user_authorization::index() C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 69
ERROR - 2013-09-20 17:32:01 --> Severity: Notice  --> Undefined variable: message C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 71
DEBUG - 2013-09-20 17:32:01 --> Config Class Initialized
DEBUG - 2013-09-20 17:32:01 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:32:01 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:32:01 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:32:01 --> URI Class Initialized
DEBUG - 2013-09-20 17:32:01 --> Router Class Initialized
DEBUG - 2013-09-20 17:32:01 --> No URI present. Default controller set.
DEBUG - 2013-09-20 17:32:01 --> Output Class Initialized
DEBUG - 2013-09-20 17:32:01 --> Security Class Initialized
DEBUG - 2013-09-20 17:32:01 --> Input Class Initialized
DEBUG - 2013-09-20 17:32:01 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:32:01 --> Language Class Initialized
DEBUG - 2013-09-20 17:32:01 --> Loader Class Initialized
DEBUG - 2013-09-20 17:32:01 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:32:01 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:32:01 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:32:01 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:32:01 --> Session Class Initialized
DEBUG - 2013-09-20 17:32:01 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:32:01 --> Session routines successfully run
DEBUG - 2013-09-20 17:32:01 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:32:01 --> Controller Class Initialized
INFO  - 2013-09-20 17:32:01 --> the form message==>
INFO  - 2013-09-20 17:32:01 --> after the retrieving session list.................//////////
DEBUG - 2013-09-20 17:32:01 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-20 17:32:01 --> Final output sent to browser
DEBUG - 2013-09-20 17:32:01 --> Total execution time: 0.0450
DEBUG - 2013-09-20 17:32:02 --> Config Class Initialized
DEBUG - 2013-09-20 17:32:02 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:32:02 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:32:02 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:32:02 --> URI Class Initialized
DEBUG - 2013-09-20 17:32:02 --> Router Class Initialized
DEBUG - 2013-09-20 17:32:02 --> Output Class Initialized
DEBUG - 2013-09-20 17:32:02 --> Security Class Initialized
DEBUG - 2013-09-20 17:32:02 --> Input Class Initialized
DEBUG - 2013-09-20 17:32:02 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:32:02 --> Language Class Initialized
DEBUG - 2013-09-20 17:32:02 --> Loader Class Initialized
DEBUG - 2013-09-20 17:32:02 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:32:02 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:32:02 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:32:02 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:32:02 --> Session Class Initialized
DEBUG - 2013-09-20 17:32:02 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:32:02 --> Session routines successfully run
DEBUG - 2013-09-20 17:32:02 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:32:02 --> Controller Class Initialized
DEBUG - 2013-09-20 17:32:02 --> Model Class Initialized
DEBUG - 2013-09-20 17:32:03 --> Model Class Initialized
DEBUG - 2013-09-20 17:32:03 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:32:03 --> after session initialization................
INFO  - 2013-09-20 17:32:03 --> after rays has been clicked.................
INFO  - 2013-09-20 17:32:03 --> last news id is 0
INFO  - 2013-09-20 17:32:03 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:32:03 --> last news id is 0
INFO  - 2013-09-20 17:32:03 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:32:03 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 17:32:03 --> Final output sent to browser
DEBUG - 2013-09-20 17:32:03 --> Total execution time: 0.0570
DEBUG - 2013-09-20 17:32:04 --> Config Class Initialized
DEBUG - 2013-09-20 17:32:04 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:32:04 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:32:04 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:32:04 --> URI Class Initialized
DEBUG - 2013-09-20 17:32:04 --> Router Class Initialized
DEBUG - 2013-09-20 17:32:04 --> Output Class Initialized
DEBUG - 2013-09-20 17:32:04 --> Security Class Initialized
DEBUG - 2013-09-20 17:32:04 --> Input Class Initialized
DEBUG - 2013-09-20 17:32:04 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:32:04 --> Language Class Initialized
DEBUG - 2013-09-20 17:32:04 --> Loader Class Initialized
DEBUG - 2013-09-20 17:32:04 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:32:04 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:32:04 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:32:04 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:32:04 --> Session Class Initialized
DEBUG - 2013-09-20 17:32:04 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:32:04 --> Session routines successfully run
DEBUG - 2013-09-20 17:32:04 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:32:04 --> Controller Class Initialized
DEBUG - 2013-09-20 17:32:04 --> Model Class Initialized
DEBUG - 2013-09-20 17:32:04 --> Model Class Initialized
DEBUG - 2013-09-20 17:32:04 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:32:04 --> after session initialization................
INFO  - 2013-09-20 17:32:04 --> last news id is 1
INFO  - 2013-09-20 17:32:04 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:32:04 --> last news id is 7
INFO  - 2013-09-20 17:32:04 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:32:04 --> Final output sent to browser
DEBUG - 2013-09-20 17:32:04 --> Total execution time: 0.0640
DEBUG - 2013-09-20 17:32:05 --> Config Class Initialized
DEBUG - 2013-09-20 17:32:05 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:32:05 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:32:05 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:32:05 --> URI Class Initialized
DEBUG - 2013-09-20 17:32:05 --> Router Class Initialized
DEBUG - 2013-09-20 17:32:05 --> Output Class Initialized
DEBUG - 2013-09-20 17:32:05 --> Security Class Initialized
DEBUG - 2013-09-20 17:32:05 --> Input Class Initialized
DEBUG - 2013-09-20 17:32:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:32:05 --> Language Class Initialized
DEBUG - 2013-09-20 17:32:05 --> Loader Class Initialized
DEBUG - 2013-09-20 17:32:05 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:32:05 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:32:05 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:32:05 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:32:05 --> Session Class Initialized
DEBUG - 2013-09-20 17:32:05 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:32:05 --> Session routines successfully run
DEBUG - 2013-09-20 17:32:05 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:32:05 --> Controller Class Initialized
DEBUG - 2013-09-20 17:32:05 --> Model Class Initialized
DEBUG - 2013-09-20 17:32:05 --> Model Class Initialized
DEBUG - 2013-09-20 17:32:05 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:32:05 --> after session initialization................
INFO  - 2013-09-20 17:32:05 --> last news id is 1
INFO  - 2013-09-20 17:32:05 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:32:05 --> last news id is 5
INFO  - 2013-09-20 17:32:05 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 5
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:32:05 --> Final output sent to browser
DEBUG - 2013-09-20 17:32:05 --> Total execution time: 0.0540
DEBUG - 2013-09-20 17:32:05 --> Config Class Initialized
DEBUG - 2013-09-20 17:32:05 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:32:05 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:32:05 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:32:05 --> URI Class Initialized
DEBUG - 2013-09-20 17:32:05 --> Router Class Initialized
DEBUG - 2013-09-20 17:32:05 --> Output Class Initialized
DEBUG - 2013-09-20 17:32:05 --> Security Class Initialized
DEBUG - 2013-09-20 17:32:05 --> Input Class Initialized
DEBUG - 2013-09-20 17:32:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:32:05 --> Language Class Initialized
DEBUG - 2013-09-20 17:32:05 --> Loader Class Initialized
DEBUG - 2013-09-20 17:32:05 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:32:05 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:32:05 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:32:05 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:32:06 --> Session Class Initialized
DEBUG - 2013-09-20 17:32:06 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:32:06 --> Session routines successfully run
DEBUG - 2013-09-20 17:32:06 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:32:06 --> Controller Class Initialized
DEBUG - 2013-09-20 17:32:06 --> Model Class Initialized
DEBUG - 2013-09-20 17:32:06 --> Model Class Initialized
DEBUG - 2013-09-20 17:32:06 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:32:06 --> after session initialization................
INFO  - 2013-09-20 17:32:06 --> last news id is 1
INFO  - 2013-09-20 17:32:06 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:32:06 --> last news id is 3
INFO  - 2013-09-20 17:32:06 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 3
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:32:06 --> Final output sent to browser
DEBUG - 2013-09-20 17:32:06 --> Total execution time: 0.0670
DEBUG - 2013-09-20 17:32:07 --> Config Class Initialized
DEBUG - 2013-09-20 17:32:07 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:32:07 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:32:07 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:32:07 --> URI Class Initialized
DEBUG - 2013-09-20 17:32:07 --> Router Class Initialized
DEBUG - 2013-09-20 17:32:07 --> Output Class Initialized
DEBUG - 2013-09-20 17:32:07 --> Security Class Initialized
DEBUG - 2013-09-20 17:32:07 --> Input Class Initialized
DEBUG - 2013-09-20 17:32:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:32:07 --> Language Class Initialized
DEBUG - 2013-09-20 17:32:07 --> Loader Class Initialized
DEBUG - 2013-09-20 17:32:07 --> Config Class Initialized
DEBUG - 2013-09-20 17:32:07 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:32:07 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:32:07 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:32:07 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:32:07 --> URI Class Initialized
DEBUG - 2013-09-20 17:32:07 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:32:07 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:32:07 --> Router Class Initialized
DEBUG - 2013-09-20 17:32:07 --> Output Class Initialized
DEBUG - 2013-09-20 17:32:07 --> Security Class Initialized
DEBUG - 2013-09-20 17:32:07 --> Input Class Initialized
DEBUG - 2013-09-20 17:32:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:32:07 --> Language Class Initialized
DEBUG - 2013-09-20 17:32:07 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:32:07 --> Session Class Initialized
DEBUG - 2013-09-20 17:32:07 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:32:07 --> Loader Class Initialized
DEBUG - 2013-09-20 17:32:07 --> Session routines successfully run
DEBUG - 2013-09-20 17:32:07 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:32:07 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:32:07 --> Controller Class Initialized
DEBUG - 2013-09-20 17:32:07 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:32:07 --> Model Class Initialized
DEBUG - 2013-09-20 17:32:07 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:32:07 --> Model Class Initialized
DEBUG - 2013-09-20 17:32:07 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:32:07 --> after session initialization................
INFO  - 2013-09-20 17:32:07 --> last news id is 1
INFO  - 2013-09-20 17:32:07 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:32:07 --> last news id is 1
INFO  - 2013-09-20 17:32:07 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:32:07 --> Final output sent to browser
DEBUG - 2013-09-20 17:32:07 --> Total execution time: 0.0630
DEBUG - 2013-09-20 17:32:07 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:32:07 --> Session Class Initialized
DEBUG - 2013-09-20 17:32:07 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:32:07 --> Session routines successfully run
DEBUG - 2013-09-20 17:32:07 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:32:07 --> Controller Class Initialized
DEBUG - 2013-09-20 17:32:07 --> Model Class Initialized
DEBUG - 2013-09-20 17:32:07 --> Model Class Initialized
DEBUG - 2013-09-20 17:32:07 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:32:07 --> after session initialization................
INFO  - 2013-09-20 17:32:07 --> last news id is 1
INFO  - 2013-09-20 17:32:07 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:32:07 --> last news id is 1
INFO  - 2013-09-20 17:32:07 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:32:07 --> Final output sent to browser
DEBUG - 2013-09-20 17:32:07 --> Total execution time: 0.0620
DEBUG - 2013-09-20 17:33:38 --> Config Class Initialized
DEBUG - 2013-09-20 17:33:38 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:33:38 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:33:38 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:33:38 --> URI Class Initialized
DEBUG - 2013-09-20 17:33:38 --> Router Class Initialized
DEBUG - 2013-09-20 17:33:38 --> Output Class Initialized
DEBUG - 2013-09-20 17:33:38 --> Security Class Initialized
DEBUG - 2013-09-20 17:33:38 --> Input Class Initialized
DEBUG - 2013-09-20 17:33:38 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:33:38 --> Language Class Initialized
DEBUG - 2013-09-20 17:33:38 --> Loader Class Initialized
DEBUG - 2013-09-20 17:33:38 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:33:38 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:33:38 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:33:38 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:33:38 --> Session Class Initialized
DEBUG - 2013-09-20 17:33:38 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:33:38 --> Session routines successfully run
DEBUG - 2013-09-20 17:33:38 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:33:38 --> Controller Class Initialized
DEBUG - 2013-09-20 17:33:38 --> Model Class Initialized
DEBUG - 2013-09-20 17:33:38 --> Model Class Initialized
DEBUG - 2013-09-20 17:33:38 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:33:38 --> after session initialization................
INFO  - 2013-09-20 17:33:38 --> after rays has been clicked.................
INFO  - 2013-09-20 17:33:38 --> last news id is 0
INFO  - 2013-09-20 17:33:38 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:33:38 --> last news id is 0
INFO  - 2013-09-20 17:33:38 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:33:38 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 17:33:38 --> Final output sent to browser
DEBUG - 2013-09-20 17:33:38 --> Total execution time: 0.0620
DEBUG - 2013-09-20 17:33:38 --> Config Class Initialized
DEBUG - 2013-09-20 17:33:38 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:33:38 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:33:38 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:33:38 --> URI Class Initialized
DEBUG - 2013-09-20 17:33:38 --> Router Class Initialized
DEBUG - 2013-09-20 17:33:38 --> Output Class Initialized
DEBUG - 2013-09-20 17:33:38 --> Security Class Initialized
DEBUG - 2013-09-20 17:33:38 --> Input Class Initialized
DEBUG - 2013-09-20 17:33:38 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:33:38 --> Language Class Initialized
DEBUG - 2013-09-20 17:33:38 --> Loader Class Initialized
DEBUG - 2013-09-20 17:33:38 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:33:38 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:33:38 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:33:38 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:33:38 --> Session Class Initialized
DEBUG - 2013-09-20 17:33:38 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:33:38 --> Session routines successfully run
DEBUG - 2013-09-20 17:33:38 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:33:38 --> Controller Class Initialized
DEBUG - 2013-09-20 17:33:38 --> Model Class Initialized
DEBUG - 2013-09-20 17:33:38 --> Model Class Initialized
DEBUG - 2013-09-20 17:33:38 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:33:38 --> after session initialization................
INFO  - 2013-09-20 17:33:38 --> last news id is 1
INFO  - 2013-09-20 17:33:38 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:33:38 --> last news id is 7
INFO  - 2013-09-20 17:33:38 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:33:38 --> Final output sent to browser
DEBUG - 2013-09-20 17:33:38 --> Total execution time: 0.0640
DEBUG - 2013-09-20 17:33:40 --> Config Class Initialized
DEBUG - 2013-09-20 17:33:40 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:33:40 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:33:40 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:33:40 --> URI Class Initialized
DEBUG - 2013-09-20 17:33:40 --> Router Class Initialized
DEBUG - 2013-09-20 17:33:40 --> Output Class Initialized
DEBUG - 2013-09-20 17:33:40 --> Security Class Initialized
DEBUG - 2013-09-20 17:33:40 --> Input Class Initialized
DEBUG - 2013-09-20 17:33:40 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:33:40 --> Language Class Initialized
DEBUG - 2013-09-20 17:33:40 --> Loader Class Initialized
DEBUG - 2013-09-20 17:33:40 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:33:40 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:33:40 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:33:40 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:33:40 --> Session Class Initialized
DEBUG - 2013-09-20 17:33:40 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:33:40 --> Session routines successfully run
DEBUG - 2013-09-20 17:33:40 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:33:40 --> Controller Class Initialized
DEBUG - 2013-09-20 17:33:40 --> Model Class Initialized
DEBUG - 2013-09-20 17:33:40 --> Model Class Initialized
DEBUG - 2013-09-20 17:33:40 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:33:40 --> after session initialization................
INFO  - 2013-09-20 17:33:40 --> last news id is 1
INFO  - 2013-09-20 17:33:40 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:33:40 --> last news id is 5
INFO  - 2013-09-20 17:33:40 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 5
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:33:40 --> Final output sent to browser
DEBUG - 2013-09-20 17:33:40 --> Total execution time: 0.0580
DEBUG - 2013-09-20 17:33:41 --> Config Class Initialized
DEBUG - 2013-09-20 17:33:41 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:33:41 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:33:41 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:33:41 --> URI Class Initialized
DEBUG - 2013-09-20 17:33:41 --> Router Class Initialized
DEBUG - 2013-09-20 17:33:41 --> Output Class Initialized
DEBUG - 2013-09-20 17:33:41 --> Security Class Initialized
DEBUG - 2013-09-20 17:33:41 --> Input Class Initialized
DEBUG - 2013-09-20 17:33:41 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:33:41 --> Language Class Initialized
DEBUG - 2013-09-20 17:33:41 --> Loader Class Initialized
DEBUG - 2013-09-20 17:33:41 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:33:41 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:33:41 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:33:41 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:33:41 --> Session Class Initialized
DEBUG - 2013-09-20 17:33:41 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:33:41 --> Session routines successfully run
DEBUG - 2013-09-20 17:33:41 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:33:41 --> Controller Class Initialized
DEBUG - 2013-09-20 17:33:41 --> Model Class Initialized
DEBUG - 2013-09-20 17:33:41 --> Model Class Initialized
DEBUG - 2013-09-20 17:33:41 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:33:41 --> after session initialization................
INFO  - 2013-09-20 17:33:41 --> last news id is 1
INFO  - 2013-09-20 17:33:41 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:33:41 --> last news id is 3
INFO  - 2013-09-20 17:33:41 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 3
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:33:41 --> Final output sent to browser
DEBUG - 2013-09-20 17:33:41 --> Total execution time: 0.0630
DEBUG - 2013-09-20 17:33:43 --> Config Class Initialized
DEBUG - 2013-09-20 17:33:43 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:33:43 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:33:43 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:33:43 --> URI Class Initialized
DEBUG - 2013-09-20 17:33:43 --> Router Class Initialized
DEBUG - 2013-09-20 17:33:43 --> Output Class Initialized
DEBUG - 2013-09-20 17:33:43 --> Security Class Initialized
DEBUG - 2013-09-20 17:33:43 --> Input Class Initialized
DEBUG - 2013-09-20 17:33:43 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:33:43 --> Language Class Initialized
DEBUG - 2013-09-20 17:33:43 --> Loader Class Initialized
DEBUG - 2013-09-20 17:33:43 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:33:43 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:33:43 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:33:43 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:33:43 --> Session Class Initialized
DEBUG - 2013-09-20 17:33:43 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:33:43 --> Session routines successfully run
DEBUG - 2013-09-20 17:33:43 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:33:43 --> Controller Class Initialized
DEBUG - 2013-09-20 17:33:43 --> Model Class Initialized
DEBUG - 2013-09-20 17:33:43 --> Model Class Initialized
DEBUG - 2013-09-20 17:33:43 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:33:43 --> after session initialization................
INFO  - 2013-09-20 17:33:43 --> last news id is 1
INFO  - 2013-09-20 17:33:43 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:33:43 --> last news id is 1
INFO  - 2013-09-20 17:33:43 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:33:43 --> Final output sent to browser
DEBUG - 2013-09-20 17:33:43 --> Total execution time: 0.0620
DEBUG - 2013-09-20 17:34:16 --> Config Class Initialized
DEBUG - 2013-09-20 17:34:16 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:34:16 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:34:16 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:34:16 --> URI Class Initialized
DEBUG - 2013-09-20 17:34:16 --> Router Class Initialized
DEBUG - 2013-09-20 17:34:16 --> Output Class Initialized
DEBUG - 2013-09-20 17:34:16 --> Security Class Initialized
DEBUG - 2013-09-20 17:34:16 --> Input Class Initialized
DEBUG - 2013-09-20 17:34:16 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:34:16 --> Language Class Initialized
DEBUG - 2013-09-20 17:34:16 --> Loader Class Initialized
DEBUG - 2013-09-20 17:34:16 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:34:16 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:34:16 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:34:16 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:34:16 --> Session Class Initialized
DEBUG - 2013-09-20 17:34:16 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:34:16 --> Session routines successfully run
DEBUG - 2013-09-20 17:34:16 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:34:16 --> Controller Class Initialized
DEBUG - 2013-09-20 17:34:16 --> Model Class Initialized
DEBUG - 2013-09-20 17:34:16 --> Model Class Initialized
DEBUG - 2013-09-20 17:34:16 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:34:16 --> after session initialization................
ERROR - 2013-09-20 17:34:16 --> Severity: Warning  --> Missing argument 1 for user_authorization::index() C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 69
ERROR - 2013-09-20 17:34:16 --> Severity: Notice  --> Undefined variable: message C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 71
DEBUG - 2013-09-20 17:34:16 --> Config Class Initialized
DEBUG - 2013-09-20 17:34:16 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:34:16 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:34:16 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:34:16 --> URI Class Initialized
DEBUG - 2013-09-20 17:34:16 --> Router Class Initialized
DEBUG - 2013-09-20 17:34:16 --> No URI present. Default controller set.
DEBUG - 2013-09-20 17:34:16 --> Output Class Initialized
DEBUG - 2013-09-20 17:34:16 --> Security Class Initialized
DEBUG - 2013-09-20 17:34:16 --> Input Class Initialized
DEBUG - 2013-09-20 17:34:16 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:34:16 --> Language Class Initialized
DEBUG - 2013-09-20 17:34:16 --> Loader Class Initialized
DEBUG - 2013-09-20 17:34:16 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:34:16 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:34:16 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:34:16 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:34:16 --> Session Class Initialized
DEBUG - 2013-09-20 17:34:16 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:34:16 --> Session routines successfully run
DEBUG - 2013-09-20 17:34:16 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:34:16 --> Controller Class Initialized
INFO  - 2013-09-20 17:34:16 --> the form message==>
INFO  - 2013-09-20 17:34:16 --> after the retrieving session list.................//////////
DEBUG - 2013-09-20 17:34:16 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-20 17:34:16 --> Final output sent to browser
DEBUG - 2013-09-20 17:34:16 --> Total execution time: 0.0530
DEBUG - 2013-09-20 17:34:17 --> Config Class Initialized
DEBUG - 2013-09-20 17:34:17 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:34:17 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:34:17 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:34:17 --> URI Class Initialized
DEBUG - 2013-09-20 17:34:17 --> Router Class Initialized
DEBUG - 2013-09-20 17:34:17 --> Output Class Initialized
DEBUG - 2013-09-20 17:34:17 --> Security Class Initialized
DEBUG - 2013-09-20 17:34:17 --> Input Class Initialized
DEBUG - 2013-09-20 17:34:17 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:34:17 --> Language Class Initialized
DEBUG - 2013-09-20 17:34:17 --> Loader Class Initialized
DEBUG - 2013-09-20 17:34:17 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:34:17 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:34:17 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:34:17 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:34:17 --> Session Class Initialized
DEBUG - 2013-09-20 17:34:17 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:34:17 --> Session routines successfully run
DEBUG - 2013-09-20 17:34:17 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:34:17 --> Controller Class Initialized
DEBUG - 2013-09-20 17:34:17 --> Model Class Initialized
DEBUG - 2013-09-20 17:34:17 --> Model Class Initialized
DEBUG - 2013-09-20 17:34:17 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:34:17 --> after session initialization................
INFO  - 2013-09-20 17:34:17 --> after rays has been clicked.................
INFO  - 2013-09-20 17:34:17 --> last news id is 0
INFO  - 2013-09-20 17:34:17 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:34:17 --> last news id is 0
INFO  - 2013-09-20 17:34:17 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:34:17 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 17:34:17 --> Final output sent to browser
DEBUG - 2013-09-20 17:34:17 --> Total execution time: 0.0590
DEBUG - 2013-09-20 17:34:19 --> Config Class Initialized
DEBUG - 2013-09-20 17:34:19 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:34:19 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:34:19 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:34:19 --> URI Class Initialized
DEBUG - 2013-09-20 17:34:19 --> Router Class Initialized
DEBUG - 2013-09-20 17:34:19 --> Output Class Initialized
DEBUG - 2013-09-20 17:34:19 --> Security Class Initialized
DEBUG - 2013-09-20 17:34:19 --> Input Class Initialized
DEBUG - 2013-09-20 17:34:19 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:34:19 --> Language Class Initialized
DEBUG - 2013-09-20 17:34:19 --> Loader Class Initialized
DEBUG - 2013-09-20 17:34:19 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:34:19 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:34:19 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:34:19 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:34:19 --> Session Class Initialized
DEBUG - 2013-09-20 17:34:19 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:34:19 --> Session routines successfully run
DEBUG - 2013-09-20 17:34:19 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:34:19 --> Controller Class Initialized
DEBUG - 2013-09-20 17:34:19 --> Model Class Initialized
DEBUG - 2013-09-20 17:34:19 --> Model Class Initialized
DEBUG - 2013-09-20 17:34:19 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:34:19 --> after session initialization................
INFO  - 2013-09-20 17:34:19 --> last news id is 1
INFO  - 2013-09-20 17:34:19 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:34:19 --> last news id is 7
INFO  - 2013-09-20 17:34:19 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:34:19 --> Final output sent to browser
DEBUG - 2013-09-20 17:34:19 --> Total execution time: 0.0570
DEBUG - 2013-09-20 17:34:20 --> Config Class Initialized
DEBUG - 2013-09-20 17:34:20 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:34:20 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:34:20 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:34:20 --> URI Class Initialized
DEBUG - 2013-09-20 17:34:20 --> Router Class Initialized
DEBUG - 2013-09-20 17:34:20 --> Output Class Initialized
DEBUG - 2013-09-20 17:34:20 --> Security Class Initialized
DEBUG - 2013-09-20 17:34:20 --> Input Class Initialized
DEBUG - 2013-09-20 17:34:20 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:34:20 --> Language Class Initialized
DEBUG - 2013-09-20 17:34:20 --> Loader Class Initialized
DEBUG - 2013-09-20 17:34:20 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:34:20 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:34:20 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:34:20 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:34:20 --> Session Class Initialized
DEBUG - 2013-09-20 17:34:20 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:34:20 --> Session routines successfully run
DEBUG - 2013-09-20 17:34:20 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:34:20 --> Controller Class Initialized
DEBUG - 2013-09-20 17:34:20 --> Model Class Initialized
DEBUG - 2013-09-20 17:34:20 --> Model Class Initialized
DEBUG - 2013-09-20 17:34:20 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:34:20 --> after session initialization................
INFO  - 2013-09-20 17:34:20 --> last news id is 1
INFO  - 2013-09-20 17:34:20 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:34:20 --> last news id is 5
INFO  - 2013-09-20 17:34:20 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 5
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:34:20 --> Final output sent to browser
DEBUG - 2013-09-20 17:34:20 --> Total execution time: 0.0520
DEBUG - 2013-09-20 17:34:20 --> Config Class Initialized
DEBUG - 2013-09-20 17:34:20 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:34:20 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:34:20 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:34:20 --> URI Class Initialized
DEBUG - 2013-09-20 17:34:20 --> Router Class Initialized
DEBUG - 2013-09-20 17:34:20 --> Output Class Initialized
DEBUG - 2013-09-20 17:34:20 --> Security Class Initialized
DEBUG - 2013-09-20 17:34:20 --> Input Class Initialized
DEBUG - 2013-09-20 17:34:20 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:34:20 --> Language Class Initialized
DEBUG - 2013-09-20 17:34:20 --> Loader Class Initialized
DEBUG - 2013-09-20 17:34:20 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:34:20 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:34:20 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:34:20 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:34:20 --> Session Class Initialized
DEBUG - 2013-09-20 17:34:20 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:34:20 --> Session routines successfully run
DEBUG - 2013-09-20 17:34:20 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:34:20 --> Controller Class Initialized
DEBUG - 2013-09-20 17:34:20 --> Model Class Initialized
DEBUG - 2013-09-20 17:34:20 --> Model Class Initialized
DEBUG - 2013-09-20 17:34:20 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:34:20 --> after session initialization................
INFO  - 2013-09-20 17:34:20 --> last news id is 1
INFO  - 2013-09-20 17:34:20 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:34:20 --> last news id is 3
INFO  - 2013-09-20 17:34:20 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 3
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:34:20 --> Final output sent to browser
DEBUG - 2013-09-20 17:34:20 --> Total execution time: 0.0620
DEBUG - 2013-09-20 17:34:22 --> Config Class Initialized
DEBUG - 2013-09-20 17:34:22 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:34:22 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:34:22 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:34:22 --> URI Class Initialized
DEBUG - 2013-09-20 17:34:22 --> Router Class Initialized
DEBUG - 2013-09-20 17:34:22 --> Output Class Initialized
DEBUG - 2013-09-20 17:34:22 --> Security Class Initialized
DEBUG - 2013-09-20 17:34:22 --> Input Class Initialized
DEBUG - 2013-09-20 17:34:22 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:34:22 --> Language Class Initialized
DEBUG - 2013-09-20 17:34:22 --> Loader Class Initialized
DEBUG - 2013-09-20 17:34:22 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:34:22 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:34:22 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:34:22 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:34:22 --> Session Class Initialized
DEBUG - 2013-09-20 17:34:22 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:34:22 --> Session routines successfully run
DEBUG - 2013-09-20 17:34:22 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:34:22 --> Controller Class Initialized
DEBUG - 2013-09-20 17:34:22 --> Model Class Initialized
DEBUG - 2013-09-20 17:34:22 --> Model Class Initialized
DEBUG - 2013-09-20 17:34:22 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:34:22 --> after session initialization................
INFO  - 2013-09-20 17:34:22 --> last news id is 1
INFO  - 2013-09-20 17:34:22 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:34:22 --> last news id is 1
INFO  - 2013-09-20 17:34:22 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:34:22 --> Final output sent to browser
DEBUG - 2013-09-20 17:34:22 --> Total execution time: 0.0550
DEBUG - 2013-09-20 17:34:28 --> Config Class Initialized
DEBUG - 2013-09-20 17:34:28 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:34:28 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:34:28 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:34:28 --> URI Class Initialized
DEBUG - 2013-09-20 17:34:28 --> Router Class Initialized
DEBUG - 2013-09-20 17:34:28 --> Output Class Initialized
DEBUG - 2013-09-20 17:34:28 --> Security Class Initialized
DEBUG - 2013-09-20 17:34:28 --> Input Class Initialized
DEBUG - 2013-09-20 17:34:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:34:28 --> Language Class Initialized
DEBUG - 2013-09-20 17:34:28 --> Loader Class Initialized
DEBUG - 2013-09-20 17:34:28 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:34:28 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:34:28 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:34:28 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:34:28 --> Session Class Initialized
DEBUG - 2013-09-20 17:34:28 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:34:28 --> Session routines successfully run
DEBUG - 2013-09-20 17:34:28 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:34:28 --> Controller Class Initialized
DEBUG - 2013-09-20 17:34:28 --> Model Class Initialized
DEBUG - 2013-09-20 17:34:28 --> Model Class Initialized
DEBUG - 2013-09-20 17:34:28 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:34:28 --> after session initialization................
INFO  - 2013-09-20 17:34:28 --> after rays has been clicked.................
INFO  - 2013-09-20 17:34:28 --> last news id is 0
INFO  - 2013-09-20 17:34:28 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:34:28 --> last news id is 0
INFO  - 2013-09-20 17:34:28 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:34:28 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 17:34:28 --> Final output sent to browser
DEBUG - 2013-09-20 17:34:28 --> Total execution time: 0.0780
DEBUG - 2013-09-20 17:34:28 --> Config Class Initialized
DEBUG - 2013-09-20 17:34:28 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:34:28 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:34:28 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:34:28 --> URI Class Initialized
DEBUG - 2013-09-20 17:34:28 --> Router Class Initialized
DEBUG - 2013-09-20 17:34:28 --> Output Class Initialized
DEBUG - 2013-09-20 17:34:28 --> Security Class Initialized
DEBUG - 2013-09-20 17:34:28 --> Input Class Initialized
DEBUG - 2013-09-20 17:34:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:34:28 --> Language Class Initialized
DEBUG - 2013-09-20 17:34:28 --> Loader Class Initialized
DEBUG - 2013-09-20 17:34:28 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:34:28 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:34:28 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:34:28 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:34:28 --> Session Class Initialized
DEBUG - 2013-09-20 17:34:28 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:34:28 --> Session routines successfully run
DEBUG - 2013-09-20 17:34:28 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:34:28 --> Controller Class Initialized
DEBUG - 2013-09-20 17:34:28 --> Model Class Initialized
DEBUG - 2013-09-20 17:34:28 --> Model Class Initialized
DEBUG - 2013-09-20 17:34:28 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:34:28 --> after session initialization................
INFO  - 2013-09-20 17:34:28 --> last news id is 1
INFO  - 2013-09-20 17:34:28 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:34:28 --> last news id is 7
INFO  - 2013-09-20 17:34:28 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:34:28 --> Final output sent to browser
DEBUG - 2013-09-20 17:34:28 --> Total execution time: 0.0650
DEBUG - 2013-09-20 17:34:28 --> Config Class Initialized
DEBUG - 2013-09-20 17:34:28 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:34:28 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:34:28 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:34:28 --> URI Class Initialized
DEBUG - 2013-09-20 17:34:28 --> Router Class Initialized
DEBUG - 2013-09-20 17:34:28 --> Output Class Initialized
DEBUG - 2013-09-20 17:34:28 --> Security Class Initialized
DEBUG - 2013-09-20 17:34:28 --> Input Class Initialized
DEBUG - 2013-09-20 17:34:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:34:28 --> Language Class Initialized
DEBUG - 2013-09-20 17:34:28 --> Loader Class Initialized
DEBUG - 2013-09-20 17:34:28 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:34:28 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:34:28 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:34:28 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:34:28 --> Session Class Initialized
DEBUG - 2013-09-20 17:34:28 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:34:28 --> Session routines successfully run
DEBUG - 2013-09-20 17:34:28 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:34:28 --> Controller Class Initialized
DEBUG - 2013-09-20 17:34:28 --> Model Class Initialized
DEBUG - 2013-09-20 17:34:28 --> Model Class Initialized
DEBUG - 2013-09-20 17:34:28 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:34:28 --> after session initialization................
INFO  - 2013-09-20 17:34:28 --> last news id is 1
INFO  - 2013-09-20 17:34:28 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:34:28 --> last news id is 5
INFO  - 2013-09-20 17:34:28 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 5
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:34:28 --> Final output sent to browser
DEBUG - 2013-09-20 17:34:28 --> Total execution time: 0.0600
DEBUG - 2013-09-20 17:34:32 --> Config Class Initialized
DEBUG - 2013-09-20 17:34:32 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:34:32 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:34:32 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:34:32 --> URI Class Initialized
DEBUG - 2013-09-20 17:34:32 --> Router Class Initialized
DEBUG - 2013-09-20 17:34:32 --> Output Class Initialized
DEBUG - 2013-09-20 17:34:32 --> Security Class Initialized
DEBUG - 2013-09-20 17:34:32 --> Input Class Initialized
DEBUG - 2013-09-20 17:34:32 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:34:32 --> Language Class Initialized
DEBUG - 2013-09-20 17:34:32 --> Loader Class Initialized
DEBUG - 2013-09-20 17:34:32 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:34:32 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:34:32 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:34:32 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:34:32 --> Session Class Initialized
DEBUG - 2013-09-20 17:34:32 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:34:32 --> Session routines successfully run
DEBUG - 2013-09-20 17:34:32 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:34:32 --> Controller Class Initialized
DEBUG - 2013-09-20 17:34:32 --> Model Class Initialized
DEBUG - 2013-09-20 17:34:32 --> Model Class Initialized
DEBUG - 2013-09-20 17:34:32 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:34:32 --> after session initialization................
INFO  - 2013-09-20 17:34:32 --> last news id is 1
INFO  - 2013-09-20 17:34:32 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:34:32 --> last news id is 3
INFO  - 2013-09-20 17:34:32 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 3
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:34:32 --> Final output sent to browser
DEBUG - 2013-09-20 17:34:32 --> Total execution time: 0.0560
DEBUG - 2013-09-20 17:34:40 --> Config Class Initialized
DEBUG - 2013-09-20 17:34:40 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:34:40 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:34:40 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:34:40 --> URI Class Initialized
DEBUG - 2013-09-20 17:34:40 --> Router Class Initialized
DEBUG - 2013-09-20 17:34:40 --> Output Class Initialized
DEBUG - 2013-09-20 17:34:40 --> Security Class Initialized
DEBUG - 2013-09-20 17:34:40 --> Input Class Initialized
DEBUG - 2013-09-20 17:34:40 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:34:40 --> Language Class Initialized
DEBUG - 2013-09-20 17:34:40 --> Loader Class Initialized
DEBUG - 2013-09-20 17:34:40 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:34:40 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:34:40 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:34:40 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:34:40 --> Session Class Initialized
DEBUG - 2013-09-20 17:34:40 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:34:40 --> Config Class Initialized
DEBUG - 2013-09-20 17:34:40 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:34:40 --> Session routines successfully run
DEBUG - 2013-09-20 17:34:40 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:34:40 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:34:40 --> URI Class Initialized
DEBUG - 2013-09-20 17:34:40 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:34:40 --> Controller Class Initialized
DEBUG - 2013-09-20 17:34:40 --> Router Class Initialized
DEBUG - 2013-09-20 17:34:40 --> Model Class Initialized
DEBUG - 2013-09-20 17:34:40 --> Model Class Initialized
DEBUG - 2013-09-20 17:34:40 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:34:40 --> after session initialization................
DEBUG - 2013-09-20 17:34:40 --> Output Class Initialized
INFO  - 2013-09-20 17:34:40 --> last news id is 1
DEBUG - 2013-09-20 17:34:40 --> Security Class Initialized
INFO  - 2013-09-20 17:34:40 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:34:40 --> last news id is 1
DEBUG - 2013-09-20 17:34:40 --> Input Class Initialized
INFO  - 2013-09-20 17:34:40 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:34:40 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:34:40 --> Final output sent to browser
DEBUG - 2013-09-20 17:34:40 --> Total execution time: 0.0660
DEBUG - 2013-09-20 17:34:40 --> Language Class Initialized
DEBUG - 2013-09-20 17:34:40 --> Loader Class Initialized
DEBUG - 2013-09-20 17:34:40 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:34:40 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:34:40 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:34:40 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:34:40 --> Session Class Initialized
DEBUG - 2013-09-20 17:34:40 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:34:40 --> Session routines successfully run
DEBUG - 2013-09-20 17:34:40 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:34:40 --> Controller Class Initialized
DEBUG - 2013-09-20 17:34:40 --> Model Class Initialized
DEBUG - 2013-09-20 17:34:40 --> Model Class Initialized
DEBUG - 2013-09-20 17:34:40 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:34:40 --> after session initialization................
INFO  - 2013-09-20 17:34:40 --> last news id is 1
INFO  - 2013-09-20 17:34:40 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:34:40 --> last news id is 1
INFO  - 2013-09-20 17:34:40 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:34:40 --> Final output sent to browser
DEBUG - 2013-09-20 17:34:40 --> Total execution time: 0.0650
DEBUG - 2013-09-20 17:34:55 --> Config Class Initialized
DEBUG - 2013-09-20 17:34:55 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:34:55 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:34:55 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:34:55 --> URI Class Initialized
DEBUG - 2013-09-20 17:34:55 --> Router Class Initialized
DEBUG - 2013-09-20 17:34:55 --> Output Class Initialized
DEBUG - 2013-09-20 17:34:55 --> Security Class Initialized
DEBUG - 2013-09-20 17:34:55 --> Input Class Initialized
DEBUG - 2013-09-20 17:34:55 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:34:55 --> Language Class Initialized
DEBUG - 2013-09-20 17:34:55 --> Loader Class Initialized
DEBUG - 2013-09-20 17:34:55 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:34:55 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:34:55 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:34:55 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:34:55 --> Session Class Initialized
DEBUG - 2013-09-20 17:34:55 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:34:55 --> Session routines successfully run
DEBUG - 2013-09-20 17:34:55 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:34:55 --> Controller Class Initialized
DEBUG - 2013-09-20 17:34:55 --> Model Class Initialized
DEBUG - 2013-09-20 17:34:55 --> Model Class Initialized
DEBUG - 2013-09-20 17:34:55 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:34:55 --> after session initialization................
ERROR - 2013-09-20 17:34:55 --> Severity: Warning  --> Missing argument 1 for user_authorization::index() C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 69
ERROR - 2013-09-20 17:34:55 --> Severity: Notice  --> Undefined variable: message C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 71
DEBUG - 2013-09-20 17:34:55 --> Config Class Initialized
DEBUG - 2013-09-20 17:34:55 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:34:55 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:34:55 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:34:56 --> URI Class Initialized
DEBUG - 2013-09-20 17:34:56 --> Router Class Initialized
DEBUG - 2013-09-20 17:34:56 --> No URI present. Default controller set.
DEBUG - 2013-09-20 17:34:56 --> Output Class Initialized
DEBUG - 2013-09-20 17:34:56 --> Security Class Initialized
DEBUG - 2013-09-20 17:34:56 --> Input Class Initialized
DEBUG - 2013-09-20 17:34:56 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:34:56 --> Language Class Initialized
DEBUG - 2013-09-20 17:34:56 --> Loader Class Initialized
DEBUG - 2013-09-20 17:34:56 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:34:56 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:34:56 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:34:56 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:34:56 --> Session Class Initialized
DEBUG - 2013-09-20 17:34:56 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:34:56 --> Session routines successfully run
DEBUG - 2013-09-20 17:34:56 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:34:56 --> Controller Class Initialized
INFO  - 2013-09-20 17:34:56 --> the form message==>
INFO  - 2013-09-20 17:34:56 --> after the retrieving session list.................//////////
DEBUG - 2013-09-20 17:34:56 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-20 17:34:56 --> Final output sent to browser
DEBUG - 2013-09-20 17:34:56 --> Total execution time: 0.0470
DEBUG - 2013-09-20 17:34:57 --> Config Class Initialized
DEBUG - 2013-09-20 17:34:57 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:34:57 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:34:57 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:34:57 --> URI Class Initialized
DEBUG - 2013-09-20 17:34:57 --> Router Class Initialized
DEBUG - 2013-09-20 17:34:57 --> Output Class Initialized
DEBUG - 2013-09-20 17:34:57 --> Security Class Initialized
DEBUG - 2013-09-20 17:34:57 --> Input Class Initialized
DEBUG - 2013-09-20 17:34:57 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:34:57 --> Language Class Initialized
DEBUG - 2013-09-20 17:34:57 --> Loader Class Initialized
DEBUG - 2013-09-20 17:34:57 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:34:57 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:34:57 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:34:57 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:34:57 --> Session Class Initialized
DEBUG - 2013-09-20 17:34:57 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:34:57 --> Session routines successfully run
DEBUG - 2013-09-20 17:34:57 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:34:57 --> Controller Class Initialized
DEBUG - 2013-09-20 17:34:57 --> Model Class Initialized
DEBUG - 2013-09-20 17:34:57 --> Model Class Initialized
DEBUG - 2013-09-20 17:34:57 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:34:57 --> after session initialization................
INFO  - 2013-09-20 17:34:57 --> after rays has been clicked.................
INFO  - 2013-09-20 17:34:57 --> last news id is 0
INFO  - 2013-09-20 17:34:57 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:34:57 --> last news id is 0
INFO  - 2013-09-20 17:34:57 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:34:57 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 17:34:57 --> Final output sent to browser
DEBUG - 2013-09-20 17:34:57 --> Total execution time: 0.0590
DEBUG - 2013-09-20 17:34:58 --> Config Class Initialized
DEBUG - 2013-09-20 17:34:58 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:34:58 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:34:58 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:34:58 --> URI Class Initialized
DEBUG - 2013-09-20 17:34:58 --> Router Class Initialized
DEBUG - 2013-09-20 17:34:58 --> Output Class Initialized
DEBUG - 2013-09-20 17:34:58 --> Security Class Initialized
DEBUG - 2013-09-20 17:34:58 --> Input Class Initialized
DEBUG - 2013-09-20 17:34:58 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:34:58 --> Language Class Initialized
DEBUG - 2013-09-20 17:34:58 --> Loader Class Initialized
DEBUG - 2013-09-20 17:34:58 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:34:58 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:34:58 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:34:58 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:34:58 --> Session Class Initialized
DEBUG - 2013-09-20 17:34:58 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:34:58 --> Session routines successfully run
DEBUG - 2013-09-20 17:34:58 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:34:58 --> Controller Class Initialized
DEBUG - 2013-09-20 17:34:58 --> Model Class Initialized
DEBUG - 2013-09-20 17:34:58 --> Model Class Initialized
DEBUG - 2013-09-20 17:34:58 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:34:58 --> after session initialization................
INFO  - 2013-09-20 17:34:58 --> last news id is 1
INFO  - 2013-09-20 17:34:58 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:34:58 --> last news id is 7
INFO  - 2013-09-20 17:34:59 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:34:59 --> Final output sent to browser
DEBUG - 2013-09-20 17:34:59 --> Total execution time: 0.0490
DEBUG - 2013-09-20 17:35:00 --> Config Class Initialized
DEBUG - 2013-09-20 17:35:00 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:35:00 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:35:00 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:35:00 --> URI Class Initialized
DEBUG - 2013-09-20 17:35:00 --> Router Class Initialized
DEBUG - 2013-09-20 17:35:00 --> Output Class Initialized
DEBUG - 2013-09-20 17:35:00 --> Security Class Initialized
DEBUG - 2013-09-20 17:35:00 --> Input Class Initialized
DEBUG - 2013-09-20 17:35:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:35:00 --> Language Class Initialized
DEBUG - 2013-09-20 17:35:00 --> Loader Class Initialized
DEBUG - 2013-09-20 17:35:00 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:35:00 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:35:00 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:35:00 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:35:00 --> Session Class Initialized
DEBUG - 2013-09-20 17:35:00 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:35:00 --> Session routines successfully run
DEBUG - 2013-09-20 17:35:00 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:35:00 --> Controller Class Initialized
DEBUG - 2013-09-20 17:35:00 --> Model Class Initialized
DEBUG - 2013-09-20 17:35:00 --> Model Class Initialized
DEBUG - 2013-09-20 17:35:00 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:35:00 --> after session initialization................
INFO  - 2013-09-20 17:35:00 --> last news id is 1
INFO  - 2013-09-20 17:35:00 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:35:00 --> last news id is 5
INFO  - 2013-09-20 17:35:00 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 5
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:35:00 --> Final output sent to browser
DEBUG - 2013-09-20 17:35:00 --> Total execution time: 0.0640
DEBUG - 2013-09-20 17:35:01 --> Config Class Initialized
DEBUG - 2013-09-20 17:35:01 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:35:01 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:35:01 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:35:01 --> URI Class Initialized
DEBUG - 2013-09-20 17:35:01 --> Router Class Initialized
DEBUG - 2013-09-20 17:35:01 --> Output Class Initialized
DEBUG - 2013-09-20 17:35:01 --> Security Class Initialized
DEBUG - 2013-09-20 17:35:01 --> Input Class Initialized
DEBUG - 2013-09-20 17:35:01 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:35:01 --> Language Class Initialized
DEBUG - 2013-09-20 17:35:01 --> Loader Class Initialized
DEBUG - 2013-09-20 17:35:01 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:35:01 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:35:01 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:35:01 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:35:01 --> Session Class Initialized
DEBUG - 2013-09-20 17:35:01 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:35:01 --> Session routines successfully run
DEBUG - 2013-09-20 17:35:01 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:35:01 --> Controller Class Initialized
DEBUG - 2013-09-20 17:35:01 --> Model Class Initialized
DEBUG - 2013-09-20 17:35:01 --> Model Class Initialized
DEBUG - 2013-09-20 17:35:01 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:35:01 --> after session initialization................
INFO  - 2013-09-20 17:35:01 --> last news id is 1
INFO  - 2013-09-20 17:35:01 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:35:01 --> last news id is 3
INFO  - 2013-09-20 17:35:01 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 3
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:35:01 --> Final output sent to browser
DEBUG - 2013-09-20 17:35:01 --> Total execution time: 0.0750
DEBUG - 2013-09-20 17:35:02 --> Config Class Initialized
DEBUG - 2013-09-20 17:35:02 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:35:02 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:35:02 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:35:02 --> URI Class Initialized
DEBUG - 2013-09-20 17:35:02 --> Router Class Initialized
DEBUG - 2013-09-20 17:35:02 --> Output Class Initialized
DEBUG - 2013-09-20 17:35:02 --> Security Class Initialized
DEBUG - 2013-09-20 17:35:02 --> Input Class Initialized
DEBUG - 2013-09-20 17:35:02 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:35:02 --> Language Class Initialized
DEBUG - 2013-09-20 17:35:02 --> Loader Class Initialized
DEBUG - 2013-09-20 17:35:02 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:35:02 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:35:02 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:35:02 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:35:02 --> Session Class Initialized
DEBUG - 2013-09-20 17:35:02 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:35:02 --> Session routines successfully run
DEBUG - 2013-09-20 17:35:02 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:35:02 --> Controller Class Initialized
DEBUG - 2013-09-20 17:35:02 --> Model Class Initialized
DEBUG - 2013-09-20 17:35:02 --> Model Class Initialized
DEBUG - 2013-09-20 17:35:02 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:35:02 --> after session initialization................
INFO  - 2013-09-20 17:35:02 --> last news id is 1
INFO  - 2013-09-20 17:35:02 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:35:02 --> last news id is 1
INFO  - 2013-09-20 17:35:02 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:35:02 --> Final output sent to browser
DEBUG - 2013-09-20 17:35:02 --> Total execution time: 0.0540
DEBUG - 2013-09-20 17:35:11 --> Config Class Initialized
DEBUG - 2013-09-20 17:35:11 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:35:11 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:35:11 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:35:11 --> URI Class Initialized
DEBUG - 2013-09-20 17:35:11 --> Router Class Initialized
DEBUG - 2013-09-20 17:35:11 --> Output Class Initialized
DEBUG - 2013-09-20 17:35:11 --> Security Class Initialized
DEBUG - 2013-09-20 17:35:11 --> Input Class Initialized
DEBUG - 2013-09-20 17:35:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:35:11 --> Language Class Initialized
DEBUG - 2013-09-20 17:35:11 --> Loader Class Initialized
DEBUG - 2013-09-20 17:35:11 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:35:11 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:35:11 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:35:11 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:35:11 --> Session Class Initialized
DEBUG - 2013-09-20 17:35:11 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:35:11 --> Session routines successfully run
DEBUG - 2013-09-20 17:35:11 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:35:11 --> Controller Class Initialized
DEBUG - 2013-09-20 17:35:11 --> Model Class Initialized
DEBUG - 2013-09-20 17:35:11 --> Model Class Initialized
DEBUG - 2013-09-20 17:35:11 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:35:11 --> after session initialization................
INFO  - 2013-09-20 17:35:11 --> after rays has been clicked.................
INFO  - 2013-09-20 17:35:11 --> last news id is 0
INFO  - 2013-09-20 17:35:11 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:35:11 --> last news id is 0
INFO  - 2013-09-20 17:35:11 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:35:11 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 17:35:11 --> Final output sent to browser
DEBUG - 2013-09-20 17:35:11 --> Total execution time: 0.0590
DEBUG - 2013-09-20 17:35:13 --> Config Class Initialized
DEBUG - 2013-09-20 17:35:13 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:35:13 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:35:13 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:35:13 --> URI Class Initialized
DEBUG - 2013-09-20 17:35:13 --> Router Class Initialized
DEBUG - 2013-09-20 17:35:13 --> Output Class Initialized
DEBUG - 2013-09-20 17:35:13 --> Security Class Initialized
DEBUG - 2013-09-20 17:35:13 --> Input Class Initialized
DEBUG - 2013-09-20 17:35:13 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:35:13 --> Language Class Initialized
DEBUG - 2013-09-20 17:35:13 --> Loader Class Initialized
DEBUG - 2013-09-20 17:35:13 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:35:13 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:35:13 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:35:13 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:35:13 --> Session Class Initialized
DEBUG - 2013-09-20 17:35:13 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:35:13 --> Session routines successfully run
DEBUG - 2013-09-20 17:35:13 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:35:13 --> Controller Class Initialized
DEBUG - 2013-09-20 17:35:13 --> Model Class Initialized
DEBUG - 2013-09-20 17:35:13 --> Model Class Initialized
DEBUG - 2013-09-20 17:35:13 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:35:13 --> after session initialization................
INFO  - 2013-09-20 17:35:13 --> last news id is 1
INFO  - 2013-09-20 17:35:13 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:35:13 --> last news id is 7
INFO  - 2013-09-20 17:35:13 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:35:13 --> Final output sent to browser
DEBUG - 2013-09-20 17:35:13 --> Total execution time: 0.0630
DEBUG - 2013-09-20 17:35:16 --> Config Class Initialized
DEBUG - 2013-09-20 17:35:16 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:35:16 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:35:16 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:35:16 --> URI Class Initialized
DEBUG - 2013-09-20 17:35:16 --> Router Class Initialized
DEBUG - 2013-09-20 17:35:16 --> Output Class Initialized
DEBUG - 2013-09-20 17:35:16 --> Security Class Initialized
DEBUG - 2013-09-20 17:35:16 --> Input Class Initialized
DEBUG - 2013-09-20 17:35:16 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:35:16 --> Language Class Initialized
DEBUG - 2013-09-20 17:35:16 --> Loader Class Initialized
DEBUG - 2013-09-20 17:35:16 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:35:16 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:35:16 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:35:16 --> Config Class Initialized
DEBUG - 2013-09-20 17:35:16 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:35:16 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:35:16 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:35:16 --> URI Class Initialized
DEBUG - 2013-09-20 17:35:16 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:35:16 --> Router Class Initialized
DEBUG - 2013-09-20 17:35:16 --> Session Class Initialized
DEBUG - 2013-09-20 17:35:16 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:35:16 --> Output Class Initialized
DEBUG - 2013-09-20 17:35:16 --> Session routines successfully run
DEBUG - 2013-09-20 17:35:16 --> Security Class Initialized
DEBUG - 2013-09-20 17:35:16 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:35:16 --> Controller Class Initialized
DEBUG - 2013-09-20 17:35:16 --> Input Class Initialized
DEBUG - 2013-09-20 17:35:16 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:35:16 --> Model Class Initialized
DEBUG - 2013-09-20 17:35:16 --> Language Class Initialized
DEBUG - 2013-09-20 17:35:16 --> Model Class Initialized
DEBUG - 2013-09-20 17:35:16 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:35:16 --> after session initialization................
INFO  - 2013-09-20 17:35:16 --> last news id is 1
DEBUG - 2013-09-20 17:35:16 --> Loader Class Initialized
INFO  - 2013-09-20 17:35:16 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:35:16 --> last news id is 5
DEBUG - 2013-09-20 17:35:16 --> Helper loaded: form_helper
INFO  - 2013-09-20 17:35:16 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 5
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:35:16 --> Final output sent to browser
DEBUG - 2013-09-20 17:35:16 --> Total execution time: 0.0620
DEBUG - 2013-09-20 17:35:16 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:35:16 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:35:16 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:35:16 --> Session Class Initialized
DEBUG - 2013-09-20 17:35:16 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:35:16 --> Session routines successfully run
DEBUG - 2013-09-20 17:35:16 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:35:16 --> Controller Class Initialized
DEBUG - 2013-09-20 17:35:16 --> Model Class Initialized
DEBUG - 2013-09-20 17:35:16 --> Model Class Initialized
DEBUG - 2013-09-20 17:35:16 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:35:16 --> after session initialization................
INFO  - 2013-09-20 17:35:16 --> last news id is 1
INFO  - 2013-09-20 17:35:16 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:35:16 --> last news id is 5
INFO  - 2013-09-20 17:35:16 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 5
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:35:16 --> Final output sent to browser
DEBUG - 2013-09-20 17:35:16 --> Total execution time: 0.0650
DEBUG - 2013-09-20 17:35:17 --> Config Class Initialized
DEBUG - 2013-09-20 17:35:17 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:35:17 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:35:17 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:35:17 --> URI Class Initialized
DEBUG - 2013-09-20 17:35:17 --> Router Class Initialized
DEBUG - 2013-09-20 17:35:17 --> Output Class Initialized
DEBUG - 2013-09-20 17:35:17 --> Security Class Initialized
DEBUG - 2013-09-20 17:35:17 --> Input Class Initialized
DEBUG - 2013-09-20 17:35:17 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:35:17 --> Language Class Initialized
DEBUG - 2013-09-20 17:35:17 --> Loader Class Initialized
DEBUG - 2013-09-20 17:35:17 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:35:17 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:35:17 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:35:17 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:35:17 --> Session Class Initialized
DEBUG - 2013-09-20 17:35:17 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:35:17 --> Session routines successfully run
DEBUG - 2013-09-20 17:35:17 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:35:17 --> Controller Class Initialized
DEBUG - 2013-09-20 17:35:17 --> Model Class Initialized
DEBUG - 2013-09-20 17:35:17 --> Model Class Initialized
DEBUG - 2013-09-20 17:35:17 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:35:17 --> after session initialization................
INFO  - 2013-09-20 17:35:17 --> last news id is 1
INFO  - 2013-09-20 17:35:17 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:35:17 --> last news id is 3
INFO  - 2013-09-20 17:35:17 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 3
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:35:17 --> Final output sent to browser
DEBUG - 2013-09-20 17:35:17 --> Total execution time: 0.0540
DEBUG - 2013-09-20 17:35:24 --> Config Class Initialized
DEBUG - 2013-09-20 17:35:24 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:35:24 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:35:24 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:35:24 --> URI Class Initialized
DEBUG - 2013-09-20 17:35:24 --> Router Class Initialized
DEBUG - 2013-09-20 17:35:24 --> Output Class Initialized
DEBUG - 2013-09-20 17:35:24 --> Security Class Initialized
DEBUG - 2013-09-20 17:35:24 --> Input Class Initialized
DEBUG - 2013-09-20 17:35:24 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:35:24 --> Language Class Initialized
DEBUG - 2013-09-20 17:35:24 --> Loader Class Initialized
DEBUG - 2013-09-20 17:35:24 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:35:24 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:35:24 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:35:24 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:35:24 --> Session Class Initialized
DEBUG - 2013-09-20 17:35:24 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:35:24 --> Session routines successfully run
DEBUG - 2013-09-20 17:35:24 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:35:24 --> Controller Class Initialized
DEBUG - 2013-09-20 17:35:24 --> Model Class Initialized
DEBUG - 2013-09-20 17:35:24 --> Model Class Initialized
DEBUG - 2013-09-20 17:35:24 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:35:24 --> after session initialization................
INFO  - 2013-09-20 17:35:24 --> last news id is 1
INFO  - 2013-09-20 17:35:24 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:35:24 --> last news id is 1
INFO  - 2013-09-20 17:35:24 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:35:24 --> Final output sent to browser
DEBUG - 2013-09-20 17:35:24 --> Total execution time: 0.0740
DEBUG - 2013-09-20 17:38:17 --> Config Class Initialized
DEBUG - 2013-09-20 17:38:17 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:38:17 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:38:17 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:38:17 --> URI Class Initialized
DEBUG - 2013-09-20 17:38:17 --> Router Class Initialized
DEBUG - 2013-09-20 17:38:17 --> Output Class Initialized
DEBUG - 2013-09-20 17:38:17 --> Security Class Initialized
DEBUG - 2013-09-20 17:38:17 --> Input Class Initialized
DEBUG - 2013-09-20 17:38:17 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:38:17 --> Language Class Initialized
DEBUG - 2013-09-20 17:38:17 --> Loader Class Initialized
DEBUG - 2013-09-20 17:38:17 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:38:17 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:38:17 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:38:17 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:38:17 --> Session Class Initialized
DEBUG - 2013-09-20 17:38:17 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:38:17 --> Session routines successfully run
DEBUG - 2013-09-20 17:38:17 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:38:17 --> Controller Class Initialized
DEBUG - 2013-09-20 17:38:17 --> Model Class Initialized
DEBUG - 2013-09-20 17:38:17 --> Model Class Initialized
DEBUG - 2013-09-20 17:38:17 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:38:17 --> after session initialization................
ERROR - 2013-09-20 17:38:17 --> Severity: Warning  --> Missing argument 1 for user_authorization::index() C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 69
ERROR - 2013-09-20 17:38:17 --> Severity: Notice  --> Undefined variable: message C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 71
DEBUG - 2013-09-20 17:38:17 --> Config Class Initialized
DEBUG - 2013-09-20 17:38:17 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:38:17 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:38:17 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:38:17 --> URI Class Initialized
DEBUG - 2013-09-20 17:38:17 --> Router Class Initialized
DEBUG - 2013-09-20 17:38:17 --> No URI present. Default controller set.
DEBUG - 2013-09-20 17:38:17 --> Output Class Initialized
DEBUG - 2013-09-20 17:38:17 --> Security Class Initialized
DEBUG - 2013-09-20 17:38:17 --> Input Class Initialized
DEBUG - 2013-09-20 17:38:17 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:38:17 --> Language Class Initialized
DEBUG - 2013-09-20 17:38:17 --> Loader Class Initialized
DEBUG - 2013-09-20 17:38:17 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:38:17 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:38:17 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:38:17 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:38:17 --> Session Class Initialized
DEBUG - 2013-09-20 17:38:17 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:38:17 --> Session routines successfully run
DEBUG - 2013-09-20 17:38:17 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:38:17 --> Controller Class Initialized
INFO  - 2013-09-20 17:38:17 --> the form message==>
INFO  - 2013-09-20 17:38:17 --> after the retrieving session list.................//////////
DEBUG - 2013-09-20 17:38:17 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-20 17:38:17 --> Final output sent to browser
DEBUG - 2013-09-20 17:38:17 --> Total execution time: 0.0460
DEBUG - 2013-09-20 17:38:18 --> Config Class Initialized
DEBUG - 2013-09-20 17:38:18 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:38:18 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:38:18 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:38:18 --> URI Class Initialized
DEBUG - 2013-09-20 17:38:18 --> Router Class Initialized
DEBUG - 2013-09-20 17:38:18 --> Output Class Initialized
DEBUG - 2013-09-20 17:38:18 --> Security Class Initialized
DEBUG - 2013-09-20 17:38:18 --> Input Class Initialized
DEBUG - 2013-09-20 17:38:18 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:38:18 --> Language Class Initialized
DEBUG - 2013-09-20 17:38:18 --> Loader Class Initialized
DEBUG - 2013-09-20 17:38:18 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:38:18 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:38:18 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:38:18 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:38:18 --> Session Class Initialized
DEBUG - 2013-09-20 17:38:18 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:38:18 --> Session routines successfully run
DEBUG - 2013-09-20 17:38:18 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:38:18 --> Controller Class Initialized
DEBUG - 2013-09-20 17:38:18 --> Model Class Initialized
DEBUG - 2013-09-20 17:38:18 --> Model Class Initialized
DEBUG - 2013-09-20 17:38:18 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:38:18 --> after session initialization................
INFO  - 2013-09-20 17:38:18 --> after rays has been clicked.................
INFO  - 2013-09-20 17:38:18 --> last news id is 0
INFO  - 2013-09-20 17:38:18 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:38:18 --> last news id is 0
INFO  - 2013-09-20 17:38:18 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:38:18 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 17:38:18 --> Final output sent to browser
DEBUG - 2013-09-20 17:38:18 --> Total execution time: 0.0570
DEBUG - 2013-09-20 17:38:22 --> Config Class Initialized
DEBUG - 2013-09-20 17:38:22 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:38:22 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:38:22 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:38:22 --> URI Class Initialized
DEBUG - 2013-09-20 17:38:22 --> Router Class Initialized
DEBUG - 2013-09-20 17:38:22 --> Output Class Initialized
DEBUG - 2013-09-20 17:38:22 --> Security Class Initialized
DEBUG - 2013-09-20 17:38:22 --> Input Class Initialized
DEBUG - 2013-09-20 17:38:22 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:38:22 --> Language Class Initialized
DEBUG - 2013-09-20 17:38:22 --> Loader Class Initialized
DEBUG - 2013-09-20 17:38:22 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:38:22 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:38:22 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:38:22 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:38:22 --> Session Class Initialized
DEBUG - 2013-09-20 17:38:22 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:38:22 --> Session routines successfully run
DEBUG - 2013-09-20 17:38:22 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:38:22 --> Controller Class Initialized
DEBUG - 2013-09-20 17:38:22 --> Model Class Initialized
DEBUG - 2013-09-20 17:38:22 --> Model Class Initialized
DEBUG - 2013-09-20 17:38:22 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:38:22 --> after session initialization................
INFO  - 2013-09-20 17:38:22 --> after rays has been clicked.................
INFO  - 2013-09-20 17:38:22 --> last news id is 0
INFO  - 2013-09-20 17:38:22 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:38:22 --> last news id is 0
INFO  - 2013-09-20 17:38:22 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:38:22 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 17:38:22 --> Final output sent to browser
DEBUG - 2013-09-20 17:38:22 --> Total execution time: 0.0660
DEBUG - 2013-09-20 17:39:11 --> Config Class Initialized
DEBUG - 2013-09-20 17:39:11 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:39:11 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:39:11 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:39:11 --> URI Class Initialized
DEBUG - 2013-09-20 17:39:11 --> Router Class Initialized
DEBUG - 2013-09-20 17:39:11 --> Output Class Initialized
DEBUG - 2013-09-20 17:39:11 --> Security Class Initialized
DEBUG - 2013-09-20 17:39:11 --> Input Class Initialized
DEBUG - 2013-09-20 17:39:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:39:11 --> Language Class Initialized
DEBUG - 2013-09-20 17:39:11 --> Loader Class Initialized
DEBUG - 2013-09-20 17:39:11 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:39:11 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:39:11 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:39:11 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:39:11 --> Session Class Initialized
DEBUG - 2013-09-20 17:39:11 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:39:11 --> Session routines successfully run
DEBUG - 2013-09-20 17:39:11 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:39:11 --> Controller Class Initialized
DEBUG - 2013-09-20 17:39:11 --> Model Class Initialized
DEBUG - 2013-09-20 17:39:11 --> Model Class Initialized
DEBUG - 2013-09-20 17:39:11 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:39:11 --> after session initialization................
INFO  - 2013-09-20 17:39:11 --> last news id is 1
INFO  - 2013-09-20 17:39:11 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:39:11 --> last news id is 7
INFO  - 2013-09-20 17:39:11 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:39:11 --> Final output sent to browser
DEBUG - 2013-09-20 17:39:11 --> Total execution time: 0.0580
DEBUG - 2013-09-20 17:39:23 --> Config Class Initialized
DEBUG - 2013-09-20 17:39:23 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:39:23 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:39:23 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:39:23 --> URI Class Initialized
DEBUG - 2013-09-20 17:39:23 --> Router Class Initialized
DEBUG - 2013-09-20 17:39:23 --> Output Class Initialized
DEBUG - 2013-09-20 17:39:23 --> Security Class Initialized
DEBUG - 2013-09-20 17:39:23 --> Input Class Initialized
DEBUG - 2013-09-20 17:39:23 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:39:23 --> Language Class Initialized
DEBUG - 2013-09-20 17:39:23 --> Loader Class Initialized
DEBUG - 2013-09-20 17:39:23 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:39:23 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:39:23 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:39:23 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:39:23 --> Session Class Initialized
DEBUG - 2013-09-20 17:39:23 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:39:23 --> Session routines successfully run
DEBUG - 2013-09-20 17:39:23 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:39:23 --> Controller Class Initialized
DEBUG - 2013-09-20 17:39:23 --> Model Class Initialized
DEBUG - 2013-09-20 17:39:23 --> Model Class Initialized
DEBUG - 2013-09-20 17:39:23 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:39:23 --> after session initialization................
INFO  - 2013-09-20 17:39:23 --> last news id is 1
INFO  - 2013-09-20 17:39:23 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:39:23 --> last news id is 5
INFO  - 2013-09-20 17:39:23 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 5
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:39:23 --> Final output sent to browser
DEBUG - 2013-09-20 17:39:23 --> Total execution time: 0.0530
DEBUG - 2013-09-20 17:39:27 --> Config Class Initialized
DEBUG - 2013-09-20 17:39:27 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:39:27 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:39:27 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:39:27 --> URI Class Initialized
DEBUG - 2013-09-20 17:39:27 --> Router Class Initialized
DEBUG - 2013-09-20 17:39:27 --> Output Class Initialized
DEBUG - 2013-09-20 17:39:27 --> Security Class Initialized
DEBUG - 2013-09-20 17:39:27 --> Input Class Initialized
DEBUG - 2013-09-20 17:39:27 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:39:27 --> Language Class Initialized
DEBUG - 2013-09-20 17:39:27 --> Loader Class Initialized
DEBUG - 2013-09-20 17:39:27 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:39:27 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:39:27 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:39:27 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:39:27 --> Session Class Initialized
DEBUG - 2013-09-20 17:39:27 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:39:27 --> Session routines successfully run
DEBUG - 2013-09-20 17:39:27 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:39:27 --> Controller Class Initialized
DEBUG - 2013-09-20 17:39:27 --> Model Class Initialized
DEBUG - 2013-09-20 17:39:27 --> Model Class Initialized
DEBUG - 2013-09-20 17:39:27 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:39:27 --> after session initialization................
INFO  - 2013-09-20 17:39:27 --> last news id is 1
INFO  - 2013-09-20 17:39:27 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:39:27 --> last news id is 3
INFO  - 2013-09-20 17:39:27 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 3
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:39:27 --> Final output sent to browser
DEBUG - 2013-09-20 17:39:27 --> Total execution time: 0.0540
DEBUG - 2013-09-20 17:39:32 --> Config Class Initialized
DEBUG - 2013-09-20 17:39:32 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:39:32 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:39:32 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:39:32 --> URI Class Initialized
DEBUG - 2013-09-20 17:39:32 --> Router Class Initialized
DEBUG - 2013-09-20 17:39:32 --> Output Class Initialized
DEBUG - 2013-09-20 17:39:32 --> Security Class Initialized
DEBUG - 2013-09-20 17:39:32 --> Input Class Initialized
DEBUG - 2013-09-20 17:39:32 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:39:32 --> Language Class Initialized
DEBUG - 2013-09-20 17:39:32 --> Loader Class Initialized
DEBUG - 2013-09-20 17:39:32 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:39:32 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:39:32 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:39:32 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:39:32 --> Session Class Initialized
DEBUG - 2013-09-20 17:39:32 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:39:32 --> Session routines successfully run
DEBUG - 2013-09-20 17:39:32 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:39:32 --> Controller Class Initialized
DEBUG - 2013-09-20 17:39:32 --> Model Class Initialized
DEBUG - 2013-09-20 17:39:32 --> Model Class Initialized
DEBUG - 2013-09-20 17:39:32 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:39:32 --> after session initialization................
INFO  - 2013-09-20 17:39:32 --> last news id is 1
INFO  - 2013-09-20 17:39:32 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:39:32 --> last news id is 1
INFO  - 2013-09-20 17:39:32 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:39:32 --> Final output sent to browser
DEBUG - 2013-09-20 17:39:32 --> Total execution time: 0.0600
DEBUG - 2013-09-20 17:40:03 --> Config Class Initialized
DEBUG - 2013-09-20 17:40:03 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:40:03 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:40:03 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:40:03 --> URI Class Initialized
DEBUG - 2013-09-20 17:40:03 --> Router Class Initialized
DEBUG - 2013-09-20 17:40:03 --> Output Class Initialized
DEBUG - 2013-09-20 17:40:03 --> Security Class Initialized
DEBUG - 2013-09-20 17:40:03 --> Input Class Initialized
DEBUG - 2013-09-20 17:40:03 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:40:03 --> Language Class Initialized
DEBUG - 2013-09-20 17:40:03 --> Loader Class Initialized
DEBUG - 2013-09-20 17:40:03 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:40:03 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:40:03 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:40:03 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:40:03 --> Session Class Initialized
DEBUG - 2013-09-20 17:40:03 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:40:03 --> Session routines successfully run
DEBUG - 2013-09-20 17:40:03 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:40:03 --> Controller Class Initialized
DEBUG - 2013-09-20 17:40:03 --> Model Class Initialized
DEBUG - 2013-09-20 17:40:03 --> Model Class Initialized
DEBUG - 2013-09-20 17:40:03 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:40:03 --> after session initialization................
INFO  - 2013-09-20 17:40:03 --> after rays has been clicked.................
INFO  - 2013-09-20 17:40:03 --> last news id is 0
INFO  - 2013-09-20 17:40:03 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:40:03 --> last news id is 0
INFO  - 2013-09-20 17:40:03 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:40:03 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 17:40:03 --> Final output sent to browser
DEBUG - 2013-09-20 17:40:03 --> Total execution time: 0.0590
DEBUG - 2013-09-20 17:40:48 --> Config Class Initialized
DEBUG - 2013-09-20 17:40:48 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:40:48 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:40:48 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:40:48 --> URI Class Initialized
DEBUG - 2013-09-20 17:40:48 --> Router Class Initialized
DEBUG - 2013-09-20 17:40:48 --> Output Class Initialized
DEBUG - 2013-09-20 17:40:48 --> Security Class Initialized
DEBUG - 2013-09-20 17:40:48 --> Input Class Initialized
DEBUG - 2013-09-20 17:40:48 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:40:48 --> Language Class Initialized
DEBUG - 2013-09-20 17:40:48 --> Loader Class Initialized
DEBUG - 2013-09-20 17:40:48 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:40:48 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:40:48 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:40:48 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:40:48 --> Session Class Initialized
DEBUG - 2013-09-20 17:40:48 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:40:48 --> Session routines successfully run
DEBUG - 2013-09-20 17:40:48 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:40:48 --> Controller Class Initialized
DEBUG - 2013-09-20 17:40:48 --> Model Class Initialized
DEBUG - 2013-09-20 17:40:48 --> Model Class Initialized
DEBUG - 2013-09-20 17:40:48 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:40:48 --> after session initialization................
INFO  - 2013-09-20 17:40:48 --> last news id is 1
INFO  - 2013-09-20 17:40:48 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:40:48 --> last news id is 7
INFO  - 2013-09-20 17:40:48 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:40:48 --> Final output sent to browser
DEBUG - 2013-09-20 17:40:48 --> Total execution time: 0.0580
DEBUG - 2013-09-20 17:44:19 --> Config Class Initialized
DEBUG - 2013-09-20 17:44:19 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:44:19 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:44:19 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:44:19 --> URI Class Initialized
DEBUG - 2013-09-20 17:44:19 --> Router Class Initialized
DEBUG - 2013-09-20 17:44:19 --> Output Class Initialized
DEBUG - 2013-09-20 17:44:19 --> Security Class Initialized
DEBUG - 2013-09-20 17:44:19 --> Input Class Initialized
DEBUG - 2013-09-20 17:44:19 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:44:19 --> Language Class Initialized
DEBUG - 2013-09-20 17:44:19 --> Loader Class Initialized
DEBUG - 2013-09-20 17:44:19 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:44:19 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:44:19 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:44:19 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:44:19 --> Session Class Initialized
DEBUG - 2013-09-20 17:44:19 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:44:19 --> Session routines successfully run
DEBUG - 2013-09-20 17:44:19 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:44:19 --> Controller Class Initialized
DEBUG - 2013-09-20 17:44:19 --> Model Class Initialized
DEBUG - 2013-09-20 17:44:19 --> Model Class Initialized
DEBUG - 2013-09-20 17:44:19 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:44:19 --> after session initialization................
INFO  - 2013-09-20 17:44:19 --> last news id is 1
INFO  - 2013-09-20 17:44:19 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:44:19 --> last news id is 5
INFO  - 2013-09-20 17:44:19 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 5
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:44:19 --> Final output sent to browser
DEBUG - 2013-09-20 17:44:19 --> Total execution time: 0.0500
DEBUG - 2013-09-20 17:44:23 --> Config Class Initialized
DEBUG - 2013-09-20 17:44:23 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:44:23 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:44:23 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:44:23 --> URI Class Initialized
DEBUG - 2013-09-20 17:44:23 --> Router Class Initialized
DEBUG - 2013-09-20 17:44:23 --> Output Class Initialized
DEBUG - 2013-09-20 17:44:23 --> Security Class Initialized
DEBUG - 2013-09-20 17:44:23 --> Input Class Initialized
DEBUG - 2013-09-20 17:44:23 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:44:23 --> Language Class Initialized
DEBUG - 2013-09-20 17:44:23 --> Loader Class Initialized
DEBUG - 2013-09-20 17:44:23 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:44:23 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:44:23 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:44:23 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:44:23 --> Session Class Initialized
DEBUG - 2013-09-20 17:44:23 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:44:23 --> Session routines successfully run
DEBUG - 2013-09-20 17:44:23 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:44:23 --> Controller Class Initialized
DEBUG - 2013-09-20 17:44:23 --> Model Class Initialized
DEBUG - 2013-09-20 17:44:23 --> Model Class Initialized
DEBUG - 2013-09-20 17:44:23 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:44:23 --> after session initialization................
INFO  - 2013-09-20 17:44:23 --> last news id is 1
INFO  - 2013-09-20 17:44:23 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:44:23 --> last news id is 3
INFO  - 2013-09-20 17:44:23 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 3
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:44:23 --> Final output sent to browser
DEBUG - 2013-09-20 17:44:23 --> Total execution time: 0.0520
DEBUG - 2013-09-20 17:44:28 --> Config Class Initialized
DEBUG - 2013-09-20 17:44:28 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:44:28 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:44:28 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:44:28 --> URI Class Initialized
DEBUG - 2013-09-20 17:44:28 --> Router Class Initialized
DEBUG - 2013-09-20 17:44:28 --> Output Class Initialized
DEBUG - 2013-09-20 17:44:28 --> Security Class Initialized
DEBUG - 2013-09-20 17:44:28 --> Input Class Initialized
DEBUG - 2013-09-20 17:44:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:44:28 --> Language Class Initialized
DEBUG - 2013-09-20 17:44:28 --> Loader Class Initialized
DEBUG - 2013-09-20 17:44:28 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:44:28 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:44:28 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:44:28 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:44:28 --> Session Class Initialized
DEBUG - 2013-09-20 17:44:28 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:44:28 --> Session routines successfully run
DEBUG - 2013-09-20 17:44:28 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:44:28 --> Controller Class Initialized
DEBUG - 2013-09-20 17:44:28 --> Model Class Initialized
DEBUG - 2013-09-20 17:44:28 --> Model Class Initialized
DEBUG - 2013-09-20 17:44:28 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:44:28 --> after session initialization................
INFO  - 2013-09-20 17:44:28 --> last news id is 1
INFO  - 2013-09-20 17:44:28 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:44:28 --> last news id is 1
INFO  - 2013-09-20 17:44:28 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:44:28 --> Final output sent to browser
DEBUG - 2013-09-20 17:44:28 --> Total execution time: 0.0600
DEBUG - 2013-09-20 17:52:37 --> Config Class Initialized
DEBUG - 2013-09-20 17:52:37 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:52:37 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:52:37 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:52:37 --> URI Class Initialized
DEBUG - 2013-09-20 17:52:37 --> Router Class Initialized
DEBUG - 2013-09-20 17:52:37 --> Output Class Initialized
DEBUG - 2013-09-20 17:52:37 --> Security Class Initialized
DEBUG - 2013-09-20 17:52:37 --> Input Class Initialized
DEBUG - 2013-09-20 17:52:37 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:52:37 --> Language Class Initialized
DEBUG - 2013-09-20 17:52:37 --> Loader Class Initialized
DEBUG - 2013-09-20 17:52:37 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:52:37 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:52:37 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:52:37 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:52:37 --> Session Class Initialized
DEBUG - 2013-09-20 17:52:37 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:52:37 --> Session routines successfully run
DEBUG - 2013-09-20 17:52:37 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:52:37 --> Controller Class Initialized
DEBUG - 2013-09-20 17:52:37 --> Model Class Initialized
DEBUG - 2013-09-20 17:52:37 --> Model Class Initialized
DEBUG - 2013-09-20 17:52:37 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:52:37 --> after session initialization................
ERROR - 2013-09-20 17:52:37 --> Severity: Warning  --> Missing argument 1 for user_authorization::index() C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 69
ERROR - 2013-09-20 17:52:37 --> Severity: Notice  --> Undefined variable: message C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 71
DEBUG - 2013-09-20 17:52:37 --> Config Class Initialized
DEBUG - 2013-09-20 17:52:37 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:52:37 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:52:37 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:52:37 --> URI Class Initialized
DEBUG - 2013-09-20 17:52:37 --> Router Class Initialized
DEBUG - 2013-09-20 17:52:37 --> No URI present. Default controller set.
DEBUG - 2013-09-20 17:52:37 --> Output Class Initialized
DEBUG - 2013-09-20 17:52:37 --> Security Class Initialized
DEBUG - 2013-09-20 17:52:37 --> Input Class Initialized
DEBUG - 2013-09-20 17:52:37 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:52:37 --> Language Class Initialized
DEBUG - 2013-09-20 17:52:37 --> Loader Class Initialized
DEBUG - 2013-09-20 17:52:37 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:52:37 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:52:37 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:52:37 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:52:37 --> Session Class Initialized
DEBUG - 2013-09-20 17:52:37 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:52:37 --> Session routines successfully run
DEBUG - 2013-09-20 17:52:37 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:52:37 --> Controller Class Initialized
INFO  - 2013-09-20 17:52:37 --> the form message==>
INFO  - 2013-09-20 17:52:37 --> after the retrieving session list.................//////////
DEBUG - 2013-09-20 17:52:37 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-20 17:52:37 --> Final output sent to browser
DEBUG - 2013-09-20 17:52:37 --> Total execution time: 0.0500
DEBUG - 2013-09-20 17:52:38 --> Config Class Initialized
DEBUG - 2013-09-20 17:52:38 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:52:38 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:52:38 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:52:38 --> URI Class Initialized
DEBUG - 2013-09-20 17:52:38 --> Router Class Initialized
DEBUG - 2013-09-20 17:52:38 --> Output Class Initialized
DEBUG - 2013-09-20 17:52:38 --> Security Class Initialized
DEBUG - 2013-09-20 17:52:38 --> Input Class Initialized
DEBUG - 2013-09-20 17:52:38 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:52:38 --> Language Class Initialized
DEBUG - 2013-09-20 17:52:38 --> Loader Class Initialized
DEBUG - 2013-09-20 17:52:38 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:52:38 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:52:38 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:52:39 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:52:39 --> Session Class Initialized
DEBUG - 2013-09-20 17:52:39 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:52:39 --> Session routines successfully run
DEBUG - 2013-09-20 17:52:39 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:52:39 --> Controller Class Initialized
DEBUG - 2013-09-20 17:52:39 --> Model Class Initialized
DEBUG - 2013-09-20 17:52:39 --> Model Class Initialized
DEBUG - 2013-09-20 17:52:39 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:52:39 --> after session initialization................
INFO  - 2013-09-20 17:52:39 --> after rays has been clicked.................
INFO  - 2013-09-20 17:52:39 --> last news id is 0
INFO  - 2013-09-20 17:52:39 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:52:39 --> last news id is 0
INFO  - 2013-09-20 17:52:39 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:52:39 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 17:52:39 --> Final output sent to browser
DEBUG - 2013-09-20 17:52:39 --> Total execution time: 0.0570
DEBUG - 2013-09-20 17:52:45 --> Config Class Initialized
DEBUG - 2013-09-20 17:52:45 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:52:45 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:52:45 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:52:45 --> URI Class Initialized
DEBUG - 2013-09-20 17:52:45 --> Router Class Initialized
DEBUG - 2013-09-20 17:52:45 --> Output Class Initialized
DEBUG - 2013-09-20 17:52:45 --> Security Class Initialized
DEBUG - 2013-09-20 17:52:45 --> Input Class Initialized
DEBUG - 2013-09-20 17:52:45 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:52:45 --> Language Class Initialized
DEBUG - 2013-09-20 17:52:45 --> Loader Class Initialized
DEBUG - 2013-09-20 17:52:45 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:52:45 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:52:45 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:52:45 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:52:45 --> Session Class Initialized
DEBUG - 2013-09-20 17:52:45 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:52:45 --> Session routines successfully run
DEBUG - 2013-09-20 17:52:45 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:52:45 --> Controller Class Initialized
DEBUG - 2013-09-20 17:52:45 --> Model Class Initialized
DEBUG - 2013-09-20 17:52:45 --> Model Class Initialized
DEBUG - 2013-09-20 17:52:45 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:52:45 --> after session initialization................
INFO  - 2013-09-20 17:52:45 --> after rays has been clicked.................
INFO  - 2013-09-20 17:52:45 --> last news id is 0
INFO  - 2013-09-20 17:52:45 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:52:45 --> last news id is 0
INFO  - 2013-09-20 17:52:45 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:52:45 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 17:52:45 --> Final output sent to browser
DEBUG - 2013-09-20 17:52:45 --> Total execution time: 0.0580
DEBUG - 2013-09-20 17:57:20 --> Config Class Initialized
DEBUG - 2013-09-20 17:57:20 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:57:20 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:57:20 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:57:20 --> URI Class Initialized
DEBUG - 2013-09-20 17:57:20 --> Router Class Initialized
DEBUG - 2013-09-20 17:57:20 --> Output Class Initialized
DEBUG - 2013-09-20 17:57:20 --> Security Class Initialized
DEBUG - 2013-09-20 17:57:20 --> Input Class Initialized
DEBUG - 2013-09-20 17:57:20 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:57:20 --> Language Class Initialized
DEBUG - 2013-09-20 17:57:20 --> Loader Class Initialized
DEBUG - 2013-09-20 17:57:20 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:57:20 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:57:20 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:57:20 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:57:20 --> Session Class Initialized
DEBUG - 2013-09-20 17:57:20 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:57:20 --> Session routines successfully run
DEBUG - 2013-09-20 17:57:20 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:57:20 --> Controller Class Initialized
DEBUG - 2013-09-20 17:57:20 --> Model Class Initialized
DEBUG - 2013-09-20 17:57:20 --> Model Class Initialized
DEBUG - 2013-09-20 17:57:20 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:57:20 --> after session initialization................
ERROR - 2013-09-20 17:57:20 --> Severity: Warning  --> Missing argument 1 for user_authorization::index() C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 69
ERROR - 2013-09-20 17:57:20 --> Severity: Notice  --> Undefined variable: message C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 71
DEBUG - 2013-09-20 17:57:20 --> Config Class Initialized
DEBUG - 2013-09-20 17:57:20 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:57:20 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:57:20 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:57:20 --> URI Class Initialized
DEBUG - 2013-09-20 17:57:20 --> Router Class Initialized
DEBUG - 2013-09-20 17:57:20 --> No URI present. Default controller set.
DEBUG - 2013-09-20 17:57:20 --> Output Class Initialized
DEBUG - 2013-09-20 17:57:20 --> Security Class Initialized
DEBUG - 2013-09-20 17:57:20 --> Input Class Initialized
DEBUG - 2013-09-20 17:57:20 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:57:20 --> Language Class Initialized
DEBUG - 2013-09-20 17:57:20 --> Loader Class Initialized
DEBUG - 2013-09-20 17:57:20 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:57:20 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:57:20 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:57:20 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:57:20 --> Session Class Initialized
DEBUG - 2013-09-20 17:57:20 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:57:20 --> Session routines successfully run
DEBUG - 2013-09-20 17:57:20 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:57:20 --> Controller Class Initialized
INFO  - 2013-09-20 17:57:20 --> the form message==>
INFO  - 2013-09-20 17:57:20 --> after the retrieving session list.................//////////
DEBUG - 2013-09-20 17:57:20 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-09-20 17:57:20 --> Final output sent to browser
DEBUG - 2013-09-20 17:57:20 --> Total execution time: 0.0450
DEBUG - 2013-09-20 17:57:21 --> Config Class Initialized
DEBUG - 2013-09-20 17:57:21 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:57:21 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:57:21 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:57:21 --> URI Class Initialized
DEBUG - 2013-09-20 17:57:21 --> Router Class Initialized
DEBUG - 2013-09-20 17:57:21 --> Output Class Initialized
DEBUG - 2013-09-20 17:57:21 --> Security Class Initialized
DEBUG - 2013-09-20 17:57:21 --> Input Class Initialized
DEBUG - 2013-09-20 17:57:21 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:57:21 --> Language Class Initialized
DEBUG - 2013-09-20 17:57:21 --> Loader Class Initialized
DEBUG - 2013-09-20 17:57:21 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:57:21 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:57:21 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:57:21 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:57:21 --> Session Class Initialized
DEBUG - 2013-09-20 17:57:21 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:57:21 --> Session routines successfully run
DEBUG - 2013-09-20 17:57:21 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:57:21 --> Controller Class Initialized
DEBUG - 2013-09-20 17:57:21 --> Model Class Initialized
DEBUG - 2013-09-20 17:57:21 --> Model Class Initialized
DEBUG - 2013-09-20 17:57:21 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:57:21 --> after session initialization................
INFO  - 2013-09-20 17:57:21 --> after rays has been clicked.................
INFO  - 2013-09-20 17:57:21 --> last news id is 0
INFO  - 2013-09-20 17:57:21 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` <> 0
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:57:21 --> last news id is 0
INFO  - 2013-09-20 17:57:21 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` <> 0
ORDER BY `n`.`id_newsletter` desc
LIMIT 10
DEBUG - 2013-09-20 17:57:21 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2013-09-20 17:57:21 --> Final output sent to browser
DEBUG - 2013-09-20 17:57:21 --> Total execution time: 0.0600
DEBUG - 2013-09-20 17:57:29 --> Config Class Initialized
DEBUG - 2013-09-20 17:57:29 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:57:29 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:57:29 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:57:29 --> URI Class Initialized
DEBUG - 2013-09-20 17:57:29 --> Router Class Initialized
DEBUG - 2013-09-20 17:57:29 --> Output Class Initialized
DEBUG - 2013-09-20 17:57:29 --> Security Class Initialized
DEBUG - 2013-09-20 17:57:29 --> Input Class Initialized
DEBUG - 2013-09-20 17:57:29 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:57:29 --> Language Class Initialized
DEBUG - 2013-09-20 17:57:29 --> Loader Class Initialized
DEBUG - 2013-09-20 17:57:29 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:57:29 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:57:29 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:57:29 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:57:29 --> Session Class Initialized
DEBUG - 2013-09-20 17:57:29 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:57:29 --> Session routines successfully run
DEBUG - 2013-09-20 17:57:29 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:57:29 --> Controller Class Initialized
DEBUG - 2013-09-20 17:57:29 --> Model Class Initialized
DEBUG - 2013-09-20 17:57:29 --> Model Class Initialized
DEBUG - 2013-09-20 17:57:29 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:57:29 --> after session initialization................
INFO  - 2013-09-20 17:57:29 --> last news id is 1
INFO  - 2013-09-20 17:57:29 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:57:29 --> last news id is 7
INFO  - 2013-09-20 17:57:29 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 7
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:57:29 --> Final output sent to browser
DEBUG - 2013-09-20 17:57:29 --> Total execution time: 0.0520
DEBUG - 2013-09-20 17:57:34 --> Config Class Initialized
DEBUG - 2013-09-20 17:57:34 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:57:34 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:57:34 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:57:34 --> URI Class Initialized
DEBUG - 2013-09-20 17:57:34 --> Router Class Initialized
DEBUG - 2013-09-20 17:57:34 --> Output Class Initialized
DEBUG - 2013-09-20 17:57:34 --> Security Class Initialized
DEBUG - 2013-09-20 17:57:34 --> Input Class Initialized
DEBUG - 2013-09-20 17:57:34 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:57:34 --> Language Class Initialized
DEBUG - 2013-09-20 17:57:34 --> Loader Class Initialized
DEBUG - 2013-09-20 17:57:34 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:57:34 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:57:34 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:57:34 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:57:34 --> Session Class Initialized
DEBUG - 2013-09-20 17:57:34 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:57:34 --> Session routines successfully run
DEBUG - 2013-09-20 17:57:34 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:57:34 --> Controller Class Initialized
DEBUG - 2013-09-20 17:57:34 --> Model Class Initialized
DEBUG - 2013-09-20 17:57:34 --> Model Class Initialized
DEBUG - 2013-09-20 17:57:34 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:57:34 --> after session initialization................
INFO  - 2013-09-20 17:57:34 --> last news id is 1
INFO  - 2013-09-20 17:57:34 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:57:34 --> last news id is 5
INFO  - 2013-09-20 17:57:34 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 5
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:57:34 --> Final output sent to browser
DEBUG - 2013-09-20 17:57:34 --> Total execution time: 0.0520
DEBUG - 2013-09-20 17:57:36 --> Config Class Initialized
DEBUG - 2013-09-20 17:57:36 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:57:36 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:57:36 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:57:36 --> URI Class Initialized
DEBUG - 2013-09-20 17:57:36 --> Router Class Initialized
DEBUG - 2013-09-20 17:57:36 --> Output Class Initialized
DEBUG - 2013-09-20 17:57:36 --> Security Class Initialized
DEBUG - 2013-09-20 17:57:36 --> Input Class Initialized
DEBUG - 2013-09-20 17:57:36 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 17:57:36 --> Language Class Initialized
DEBUG - 2013-09-20 17:57:36 --> Loader Class Initialized
DEBUG - 2013-09-20 17:57:36 --> Helper loaded: form_helper
DEBUG - 2013-09-20 17:57:36 --> Helper loaded: url_helper
DEBUG - 2013-09-20 17:57:36 --> Helper loaded: html_helper
DEBUG - 2013-09-20 17:57:36 --> Database Driver Class Initialized
DEBUG - 2013-09-20 17:57:36 --> Session Class Initialized
DEBUG - 2013-09-20 17:57:36 --> Helper loaded: string_helper
DEBUG - 2013-09-20 17:57:36 --> Session routines successfully run
DEBUG - 2013-09-20 17:57:36 --> Form Validation Class Initialized
DEBUG - 2013-09-20 17:57:36 --> Controller Class Initialized
DEBUG - 2013-09-20 17:57:36 --> Model Class Initialized
DEBUG - 2013-09-20 17:57:36 --> Model Class Initialized
DEBUG - 2013-09-20 17:57:36 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 17:57:36 --> after session initialization................
INFO  - 2013-09-20 17:57:36 --> last news id is 1
INFO  - 2013-09-20 17:57:36 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 17:57:36 --> last news id is 3
INFO  - 2013-09-20 17:57:36 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 3
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 17:57:36 --> Final output sent to browser
DEBUG - 2013-09-20 17:57:36 --> Total execution time: 0.0530
DEBUG - 2013-09-20 17:57:37 --> Config Class Initialized
DEBUG - 2013-09-20 17:57:37 --> Hooks Class Initialized
DEBUG - 2013-09-20 17:57:37 --> Utf8 Class Initialized
DEBUG - 2013-09-20 17:57:37 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 17:57:37 --> URI Class Initialized
DEBUG - 2013-09-20 17:57:37 --> Router Class Initialized
ERROR - 2013-09-20 17:57:37 --> 404 Page Not Found --> user_authorization
DEBUG - 2013-09-20 18:08:17 --> Config Class Initialized
DEBUG - 2013-09-20 18:08:17 --> Hooks Class Initialized
DEBUG - 2013-09-20 18:08:17 --> Utf8 Class Initialized
DEBUG - 2013-09-20 18:08:17 --> UTF-8 Support Enabled
DEBUG - 2013-09-20 18:08:17 --> URI Class Initialized
DEBUG - 2013-09-20 18:08:17 --> Router Class Initialized
DEBUG - 2013-09-20 18:08:17 --> Output Class Initialized
DEBUG - 2013-09-20 18:08:17 --> Security Class Initialized
DEBUG - 2013-09-20 18:08:17 --> Input Class Initialized
DEBUG - 2013-09-20 18:08:17 --> Global POST and COOKIE data sanitized
DEBUG - 2013-09-20 18:08:17 --> Language Class Initialized
DEBUG - 2013-09-20 18:08:17 --> Loader Class Initialized
DEBUG - 2013-09-20 18:08:17 --> Helper loaded: form_helper
DEBUG - 2013-09-20 18:08:17 --> Helper loaded: url_helper
DEBUG - 2013-09-20 18:08:17 --> Helper loaded: html_helper
DEBUG - 2013-09-20 18:08:17 --> Database Driver Class Initialized
DEBUG - 2013-09-20 18:08:17 --> Session Class Initialized
DEBUG - 2013-09-20 18:08:17 --> Helper loaded: string_helper
DEBUG - 2013-09-20 18:08:17 --> Session routines successfully run
DEBUG - 2013-09-20 18:08:17 --> Form Validation Class Initialized
DEBUG - 2013-09-20 18:08:17 --> Controller Class Initialized
DEBUG - 2013-09-20 18:08:17 --> Model Class Initialized
DEBUG - 2013-09-20 18:08:17 --> Model Class Initialized
DEBUG - 2013-09-20 18:08:17 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-09-20 18:08:17 --> after session initialization................
INFO  - 2013-09-20 18:08:17 --> last news id is 1
INFO  - 2013-09-20 18:08:17 --> SELECT n.id_news as id, n.title as news_title, n.description as news_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`news` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_news` < 1
ORDER BY `n`.`id_news` desc
INFO  - 2013-09-20 18:08:17 --> last news id is 1
INFO  - 2013-09-20 18:08:17 --> SELECT n.id_newsletter as id, n.title as newsletter_title, n.description as newsletter_description, n.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`newsletter` n)
JOIN `member` m ON `n`.`memberid_member` = `m`.`id_member`
WHERE `n`.`id_newsletter` < 1
ORDER BY `n`.`id_newsletter` desc
LIMIT 2
DEBUG - 2013-09-20 18:08:17 --> Final output sent to browser
DEBUG - 2013-09-20 18:08:17 --> Total execution time: 0.0630
