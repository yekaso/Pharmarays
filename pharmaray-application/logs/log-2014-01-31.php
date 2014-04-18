<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2014-01-31 00:22:45 --> Config Class Initialized
DEBUG - 2014-01-31 00:22:45 --> Hooks Class Initialized
DEBUG - 2014-01-31 00:22:45 --> Utf8 Class Initialized
DEBUG - 2014-01-31 00:22:45 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 00:22:45 --> URI Class Initialized
DEBUG - 2014-01-31 00:22:45 --> Router Class Initialized
DEBUG - 2014-01-31 00:22:45 --> Output Class Initialized
DEBUG - 2014-01-31 00:22:45 --> Security Class Initialized
DEBUG - 2014-01-31 00:22:45 --> Input Class Initialized
DEBUG - 2014-01-31 00:22:45 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-31 00:22:45 --> Language Class Initialized
DEBUG - 2014-01-31 00:22:45 --> Loader Class Initialized
DEBUG - 2014-01-31 00:22:45 --> Helper loaded: form_helper
DEBUG - 2014-01-31 00:22:45 --> Helper loaded: url_helper
DEBUG - 2014-01-31 00:22:45 --> Helper loaded: html_helper
DEBUG - 2014-01-31 00:22:45 --> Database Driver Class Initialized
DEBUG - 2014-01-31 00:22:45 --> Session Class Initialized
DEBUG - 2014-01-31 00:22:45 --> Helper loaded: string_helper
DEBUG - 2014-01-31 00:22:45 --> Session routines successfully run
DEBUG - 2014-01-31 00:22:45 --> Form Validation Class Initialized
DEBUG - 2014-01-31 00:22:45 --> Controller Class Initialized
DEBUG - 2014-01-31 00:22:45 --> Model Class Initialized
DEBUG - 2014-01-31 00:22:45 --> Model Class Initialized
DEBUG - 2014-01-31 00:22:45 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-31 00:22:45 --> after session initialization................
INFO  - 2014-01-31 00:22:45 --> inside the retrieve ajax topic comment page.................
INFO  - 2014-01-31 00:22:45 --> inside retrieving comments member id and forum topic id is 1
INFO  - 2014-01-31 00:22:45 --> 10==============================10
INFO  - 2014-01-31 00:22:45 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10, 10
INFO  - 2014-01-31 00:22:45 --> [{"id":"8","comment":"Ada no dey lack oooh","timecreated":"2013-10-24 14:24:20","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"7","comment":"Ada mma","timecreated":"2013-10-24 14:24:11","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"6","comment":"we are in it together right?","timecreated":"2013-10-24 14:21:29","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"5","comment":"let's make this happen","timecreated":"2013-10-24 14:21:19","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"4","comment":"abi","timecreated":"2013-10-24 14:21:09","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"3","comment":"this is not just right","timecreated":"2013-10-24 14:21:05","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"2","comment":"This is just not right...I have had this for a very long time that it drives me crazy","timecreated":"2013-10-24 14:14:47","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"1","comment":"check this comment now....","timecreated":"2013-10-24 14:14:12","membername":"Elvis onuorah","membertypeimage":"profilem1"}]
DEBUG - 2014-01-31 00:22:45 --> Final output sent to browser
DEBUG - 2014-01-31 00:22:45 --> Total execution time: 0.0468
DEBUG - 2014-01-31 00:22:48 --> Config Class Initialized
DEBUG - 2014-01-31 00:22:48 --> Hooks Class Initialized
DEBUG - 2014-01-31 00:22:48 --> Utf8 Class Initialized
DEBUG - 2014-01-31 00:22:48 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 00:22:48 --> URI Class Initialized
DEBUG - 2014-01-31 00:22:48 --> Router Class Initialized
DEBUG - 2014-01-31 00:22:48 --> Output Class Initialized
DEBUG - 2014-01-31 00:22:48 --> Security Class Initialized
DEBUG - 2014-01-31 00:22:48 --> Input Class Initialized
DEBUG - 2014-01-31 00:22:48 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-31 00:22:48 --> Language Class Initialized
DEBUG - 2014-01-31 00:22:48 --> Loader Class Initialized
DEBUG - 2014-01-31 00:22:48 --> Helper loaded: form_helper
DEBUG - 2014-01-31 00:22:48 --> Helper loaded: url_helper
DEBUG - 2014-01-31 00:22:48 --> Helper loaded: html_helper
DEBUG - 2014-01-31 00:22:48 --> Database Driver Class Initialized
DEBUG - 2014-01-31 00:22:48 --> Session Class Initialized
DEBUG - 2014-01-31 00:22:48 --> Helper loaded: string_helper
DEBUG - 2014-01-31 00:22:48 --> Session routines successfully run
DEBUG - 2014-01-31 00:22:48 --> Form Validation Class Initialized
DEBUG - 2014-01-31 00:22:48 --> Controller Class Initialized
DEBUG - 2014-01-31 00:22:48 --> Model Class Initialized
DEBUG - 2014-01-31 00:22:48 --> Model Class Initialized
DEBUG - 2014-01-31 00:22:48 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-31 00:22:48 --> after session initialization................
INFO  - 2014-01-31 00:22:48 --> inside the retrieve ajax topic comment page.................
INFO  - 2014-01-31 00:22:48 --> inside retrieving comments member id and forum topic id is 1
INFO  - 2014-01-31 00:22:48 --> 10==============================18
INFO  - 2014-01-31 00:22:48 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 18, 10
INFO  - 2014-01-31 00:22:48 --> []
DEBUG - 2014-01-31 00:22:48 --> Final output sent to browser
DEBUG - 2014-01-31 00:22:48 --> Total execution time: 0.0468
DEBUG - 2014-01-31 00:22:52 --> Config Class Initialized
DEBUG - 2014-01-31 00:22:52 --> Hooks Class Initialized
DEBUG - 2014-01-31 00:22:52 --> Utf8 Class Initialized
DEBUG - 2014-01-31 00:22:52 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 00:22:52 --> URI Class Initialized
DEBUG - 2014-01-31 00:22:52 --> Router Class Initialized
DEBUG - 2014-01-31 00:22:52 --> Output Class Initialized
DEBUG - 2014-01-31 00:22:52 --> Security Class Initialized
DEBUG - 2014-01-31 00:22:52 --> Input Class Initialized
DEBUG - 2014-01-31 00:22:52 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-31 00:22:52 --> Language Class Initialized
DEBUG - 2014-01-31 00:22:52 --> Loader Class Initialized
DEBUG - 2014-01-31 00:22:52 --> Helper loaded: form_helper
DEBUG - 2014-01-31 00:22:52 --> Helper loaded: url_helper
DEBUG - 2014-01-31 00:22:52 --> Helper loaded: html_helper
DEBUG - 2014-01-31 00:22:52 --> Database Driver Class Initialized
DEBUG - 2014-01-31 00:22:52 --> Session Class Initialized
DEBUG - 2014-01-31 00:22:52 --> Helper loaded: string_helper
DEBUG - 2014-01-31 00:22:52 --> Session routines successfully run
DEBUG - 2014-01-31 00:22:52 --> Form Validation Class Initialized
DEBUG - 2014-01-31 00:22:52 --> Controller Class Initialized
DEBUG - 2014-01-31 00:22:52 --> Model Class Initialized
DEBUG - 2014-01-31 00:22:52 --> Model Class Initialized
DEBUG - 2014-01-31 00:22:52 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-31 00:22:52 --> after session initialization................
DEBUG - 2014-01-31 00:22:52 --> Config Class Initialized
DEBUG - 2014-01-31 00:22:52 --> Hooks Class Initialized
DEBUG - 2014-01-31 00:22:52 --> Utf8 Class Initialized
DEBUG - 2014-01-31 00:22:52 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 00:22:52 --> URI Class Initialized
DEBUG - 2014-01-31 00:22:52 --> Router Class Initialized
DEBUG - 2014-01-31 00:22:52 --> No URI present. Default controller set.
DEBUG - 2014-01-31 00:22:52 --> Output Class Initialized
DEBUG - 2014-01-31 00:22:52 --> Security Class Initialized
DEBUG - 2014-01-31 00:22:52 --> Input Class Initialized
DEBUG - 2014-01-31 00:22:52 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-31 00:22:52 --> Language Class Initialized
DEBUG - 2014-01-31 00:22:52 --> Loader Class Initialized
DEBUG - 2014-01-31 00:22:52 --> Helper loaded: form_helper
DEBUG - 2014-01-31 00:22:52 --> Helper loaded: url_helper
DEBUG - 2014-01-31 00:22:52 --> Helper loaded: html_helper
DEBUG - 2014-01-31 00:22:52 --> Database Driver Class Initialized
DEBUG - 2014-01-31 00:22:52 --> Session Class Initialized
DEBUG - 2014-01-31 00:22:52 --> Helper loaded: string_helper
DEBUG - 2014-01-31 00:22:52 --> A session cookie was not found.
DEBUG - 2014-01-31 00:22:52 --> Session routines successfully run
DEBUG - 2014-01-31 00:22:52 --> Form Validation Class Initialized
DEBUG - 2014-01-31 00:22:52 --> Controller Class Initialized
DEBUG - 2014-01-31 00:22:52 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2014-01-31 00:22:52 --> Final output sent to browser
DEBUG - 2014-01-31 00:22:52 --> Total execution time: 0.0312
DEBUG - 2014-01-31 00:22:52 --> Config Class Initialized
DEBUG - 2014-01-31 00:22:52 --> Hooks Class Initialized
DEBUG - 2014-01-31 00:22:52 --> Utf8 Class Initialized
DEBUG - 2014-01-31 00:22:52 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 00:22:52 --> URI Class Initialized
DEBUG - 2014-01-31 00:22:52 --> Router Class Initialized
DEBUG - 2014-01-31 00:22:52 --> Output Class Initialized
DEBUG - 2014-01-31 00:22:52 --> Security Class Initialized
DEBUG - 2014-01-31 00:22:52 --> Input Class Initialized
DEBUG - 2014-01-31 00:22:52 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-31 00:22:52 --> Language Class Initialized
DEBUG - 2014-01-31 00:22:52 --> Loader Class Initialized
DEBUG - 2014-01-31 00:22:52 --> Helper loaded: form_helper
DEBUG - 2014-01-31 00:22:52 --> Helper loaded: url_helper
DEBUG - 2014-01-31 00:22:52 --> Helper loaded: html_helper
DEBUG - 2014-01-31 00:22:52 --> Database Driver Class Initialized
DEBUG - 2014-01-31 00:22:52 --> Session Class Initialized
DEBUG - 2014-01-31 00:22:52 --> Helper loaded: string_helper
DEBUG - 2014-01-31 00:22:52 --> Session routines successfully run
DEBUG - 2014-01-31 00:22:52 --> Form Validation Class Initialized
DEBUG - 2014-01-31 00:22:52 --> Controller Class Initialized
DEBUG - 2014-01-31 00:22:52 --> Model Class Initialized
DEBUG - 2014-01-31 00:22:52 --> Model Class Initialized
DEBUG - 2014-01-31 00:22:52 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-31 00:22:52 --> after session initialization................
INFO  - 2014-01-31 00:22:52 --> after rays has been clicked.................
INFO  - 2014-01-31 00:22:52 --> last article id is 0
INFO  - 2014-01-31 00:22:52 --> The session id is ========>487d56839132cfa6bd6e5c223ff97127 and the member id is =======>
INFO  - 2014-01-31 00:22:52 --> The session id is ========>487d56839132cfa6bd6e5c223ff97127 and the member id is =======>
INFO  - 2014-01-31 00:22:52 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:22:52 --> 0 the guest only data>>>>>
INFO  - 2014-01-31 00:22:52 --> 0 the guest only data>> AFTER >>>#22
INFO  - 2014-01-31 00:22:52 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:22:52 --> 0 the guest only data>>>>>#22
INFO  - 2014-01-31 00:22:52 --> 0 the guest only data>> AFTER >>>#21
INFO  - 2014-01-31 00:22:52 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:22:52 --> 1 the guest only data>>>>>#21
INFO  - 2014-01-31 00:22:52 --> 1 the guest only data>> AFTER >>>#21
INFO  - 2014-01-31 00:22:52 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:22:52 --> 0 the guest only data>>>>>#21
INFO  - 2014-01-31 00:22:52 --> 0 the guest only data>> AFTER >>>#19
INFO  - 2014-01-31 00:22:52 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:22:52 --> 0 the guest only data>>>>>#19
INFO  - 2014-01-31 00:22:52 --> 0 the guest only data>> AFTER >>>#18
INFO  - 2014-01-31 00:22:52 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:22:52 --> 0 the guest only data>>>>>#18
INFO  - 2014-01-31 00:22:52 --> 0 the guest only data>> AFTER >>>#17
INFO  - 2014-01-31 00:22:52 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:22:52 --> 0 the guest only data>>>>>#17
INFO  - 2014-01-31 00:22:52 --> 0 the guest only data>> AFTER >>>#16
INFO  - 2014-01-31 00:22:52 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:22:52 --> 1 the guest only data>>>>>#16
INFO  - 2014-01-31 00:22:52 --> 1 the guest only data>> AFTER >>>#16
INFO  - 2014-01-31 00:22:52 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:22:52 --> 0 the guest only data>>>>>#16
INFO  - 2014-01-31 00:22:52 --> 0 the guest only data>> AFTER >>>#14
INFO  - 2014-01-31 00:22:52 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:22:52 --> 1 the guest only data>>>>>#14
INFO  - 2014-01-31 00:22:52 --> 1 the guest only data>> AFTER >>>#14
INFO  - 2014-01-31 00:22:52 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:22:52 --> 0 the guest only data>>>>>#14
INFO  - 2014-01-31 00:22:52 --> 0 the guest only data>> AFTER >>>#12
INFO  - 2014-01-31 00:22:52 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:22:52 --> 1 the guest only data>>>>>#12
INFO  - 2014-01-31 00:22:52 --> 1 the guest only data>> AFTER >>>#12
INFO  - 2014-01-31 00:22:52 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:22:52 --> 0 the guest only data>>>>>#12
INFO  - 2014-01-31 00:22:52 --> 0 the guest only data>> AFTER >>>#10
INFO  - 2014-01-31 00:22:52 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:22:52 --> 0 the guest only data>>>>>#10
INFO  - 2014-01-31 00:22:52 --> 0 the guest only data>> AFTER >>>#9
INFO  - 2014-01-31 00:22:52 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:22:52 --> 1 the guest only data>>>>>#9
INFO  - 2014-01-31 00:22:52 --> 1 the guest only data>> AFTER >>>#9
INFO  - 2014-01-31 00:22:52 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:22:52 --> 0 the guest only data>>>>>#9
INFO  - 2014-01-31 00:22:52 --> 0 the guest only data>> AFTER >>>#7
INFO  - 2014-01-31 00:22:52 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:22:52 --> 1 the guest only data>>>>>#7
INFO  - 2014-01-31 00:22:52 --> 1 the guest only data>> AFTER >>>#7
INFO  - 2014-01-31 00:22:52 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:22:52 --> 0 the guest only data>>>>>#7
INFO  - 2014-01-31 00:22:52 --> 0 the guest only data>> AFTER >>>#5
INFO  - 2014-01-31 00:22:52 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:22:52 --> 0 the guest only data>>>>>#5
INFO  - 2014-01-31 00:22:52 --> 0 the guest only data>> AFTER >>>#4
INFO  - 2014-01-31 00:22:52 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:22:52 --> 1 the guest only data>>>>>#4
INFO  - 2014-01-31 00:22:52 --> 1 the guest only data>> AFTER >>>#4
DEBUG - 2014-01-31 00:22:52 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2014-01-31 00:22:52 --> Final output sent to browser
DEBUG - 2014-01-31 00:22:52 --> Total execution time: 0.0624
DEBUG - 2014-01-31 00:23:40 --> Config Class Initialized
DEBUG - 2014-01-31 00:23:40 --> Hooks Class Initialized
DEBUG - 2014-01-31 00:23:40 --> Utf8 Class Initialized
DEBUG - 2014-01-31 00:23:40 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 00:23:40 --> URI Class Initialized
DEBUG - 2014-01-31 00:23:40 --> Router Class Initialized
DEBUG - 2014-01-31 00:23:40 --> Output Class Initialized
DEBUG - 2014-01-31 00:23:40 --> Security Class Initialized
DEBUG - 2014-01-31 00:23:40 --> Input Class Initialized
DEBUG - 2014-01-31 00:23:40 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-31 00:23:40 --> Language Class Initialized
DEBUG - 2014-01-31 00:23:40 --> Loader Class Initialized
DEBUG - 2014-01-31 00:23:40 --> Helper loaded: form_helper
DEBUG - 2014-01-31 00:23:40 --> Helper loaded: url_helper
DEBUG - 2014-01-31 00:23:40 --> Helper loaded: html_helper
DEBUG - 2014-01-31 00:23:40 --> Database Driver Class Initialized
DEBUG - 2014-01-31 00:23:40 --> Session Class Initialized
DEBUG - 2014-01-31 00:23:40 --> Helper loaded: string_helper
DEBUG - 2014-01-31 00:23:40 --> Session routines successfully run
DEBUG - 2014-01-31 00:23:40 --> Form Validation Class Initialized
DEBUG - 2014-01-31 00:23:40 --> Controller Class Initialized
DEBUG - 2014-01-31 00:23:40 --> Model Class Initialized
DEBUG - 2014-01-31 00:23:40 --> Model Class Initialized
DEBUG - 2014-01-31 00:23:40 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-31 00:23:40 --> after session initialization................
INFO  - 2014-01-31 00:23:40 --> the form message==>
INFO  - 2014-01-31 00:23:40 --> The session id is ========>487d56839132cfa6bd6e5c223ff97127 and the member id is =======>
INFO  - 2014-01-31 00:23:40 --> after the retrieving session list.................//////////
INFO  - 2014-01-31 00:23:40 --> The session id is ========>487d56839132cfa6bd6e5c223ff97127 and the member id is =======>
DEBUG - 2014-01-31 00:23:40 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-01-31 00:23:40 --> Final output sent to browser
DEBUG - 2014-01-31 00:23:40 --> Total execution time: 0.0312
DEBUG - 2014-01-31 00:23:42 --> Config Class Initialized
DEBUG - 2014-01-31 00:23:42 --> Hooks Class Initialized
DEBUG - 2014-01-31 00:23:42 --> Utf8 Class Initialized
DEBUG - 2014-01-31 00:23:42 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 00:23:42 --> URI Class Initialized
DEBUG - 2014-01-31 00:23:42 --> Router Class Initialized
DEBUG - 2014-01-31 00:23:42 --> Output Class Initialized
DEBUG - 2014-01-31 00:23:42 --> Security Class Initialized
DEBUG - 2014-01-31 00:23:42 --> Input Class Initialized
DEBUG - 2014-01-31 00:23:42 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-31 00:23:42 --> Language Class Initialized
DEBUG - 2014-01-31 00:23:42 --> Loader Class Initialized
DEBUG - 2014-01-31 00:23:42 --> Helper loaded: form_helper
DEBUG - 2014-01-31 00:23:42 --> Helper loaded: url_helper
DEBUG - 2014-01-31 00:23:42 --> Helper loaded: html_helper
DEBUG - 2014-01-31 00:23:42 --> Database Driver Class Initialized
DEBUG - 2014-01-31 00:23:42 --> Session Class Initialized
DEBUG - 2014-01-31 00:23:42 --> Helper loaded: string_helper
DEBUG - 2014-01-31 00:23:42 --> Session routines successfully run
DEBUG - 2014-01-31 00:23:42 --> Form Validation Class Initialized
DEBUG - 2014-01-31 00:23:42 --> Controller Class Initialized
DEBUG - 2014-01-31 00:23:42 --> Model Class Initialized
DEBUG - 2014-01-31 00:23:42 --> Model Class Initialized
DEBUG - 2014-01-31 00:23:42 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-31 00:23:42 --> after session initialization................
INFO  - 2014-01-31 00:23:42 --> after rays has been clicked.................
INFO  - 2014-01-31 00:23:42 --> last article id is 0
INFO  - 2014-01-31 00:23:42 --> The session id is ========>487d56839132cfa6bd6e5c223ff97127 and the member id is =======>
INFO  - 2014-01-31 00:23:42 --> The session id is ========>487d56839132cfa6bd6e5c223ff97127 and the member id is =======>
INFO  - 2014-01-31 00:23:42 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:23:42 --> 0 the guest only data>>>>>
INFO  - 2014-01-31 00:23:42 --> 0 the guest only data>> AFTER >>>#22
INFO  - 2014-01-31 00:23:42 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:23:42 --> 0 the guest only data>>>>>#22
INFO  - 2014-01-31 00:23:42 --> 0 the guest only data>> AFTER >>>#21
INFO  - 2014-01-31 00:23:42 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:23:42 --> 1 the guest only data>>>>>#21
INFO  - 2014-01-31 00:23:42 --> 1 the guest only data>> AFTER >>>#21
INFO  - 2014-01-31 00:23:42 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:23:42 --> 0 the guest only data>>>>>#21
INFO  - 2014-01-31 00:23:42 --> 0 the guest only data>> AFTER >>>#19
INFO  - 2014-01-31 00:23:42 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:23:42 --> 0 the guest only data>>>>>#19
INFO  - 2014-01-31 00:23:42 --> 0 the guest only data>> AFTER >>>#18
INFO  - 2014-01-31 00:23:42 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:23:42 --> 0 the guest only data>>>>>#18
INFO  - 2014-01-31 00:23:42 --> 0 the guest only data>> AFTER >>>#17
INFO  - 2014-01-31 00:23:42 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:23:42 --> 0 the guest only data>>>>>#17
INFO  - 2014-01-31 00:23:42 --> 0 the guest only data>> AFTER >>>#16
INFO  - 2014-01-31 00:23:42 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:23:42 --> 1 the guest only data>>>>>#16
INFO  - 2014-01-31 00:23:42 --> 1 the guest only data>> AFTER >>>#16
INFO  - 2014-01-31 00:23:42 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:23:42 --> 0 the guest only data>>>>>#16
INFO  - 2014-01-31 00:23:42 --> 0 the guest only data>> AFTER >>>#14
INFO  - 2014-01-31 00:23:42 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:23:42 --> 1 the guest only data>>>>>#14
INFO  - 2014-01-31 00:23:42 --> 1 the guest only data>> AFTER >>>#14
INFO  - 2014-01-31 00:23:42 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:23:42 --> 0 the guest only data>>>>>#14
INFO  - 2014-01-31 00:23:42 --> 0 the guest only data>> AFTER >>>#12
INFO  - 2014-01-31 00:23:42 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:23:42 --> 1 the guest only data>>>>>#12
INFO  - 2014-01-31 00:23:42 --> 1 the guest only data>> AFTER >>>#12
INFO  - 2014-01-31 00:23:42 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:23:42 --> 0 the guest only data>>>>>#12
INFO  - 2014-01-31 00:23:42 --> 0 the guest only data>> AFTER >>>#10
INFO  - 2014-01-31 00:23:42 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:23:42 --> 0 the guest only data>>>>>#10
INFO  - 2014-01-31 00:23:42 --> 0 the guest only data>> AFTER >>>#9
INFO  - 2014-01-31 00:23:42 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:23:42 --> 1 the guest only data>>>>>#9
INFO  - 2014-01-31 00:23:42 --> 1 the guest only data>> AFTER >>>#9
INFO  - 2014-01-31 00:23:42 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:23:42 --> 0 the guest only data>>>>>#9
INFO  - 2014-01-31 00:23:42 --> 0 the guest only data>> AFTER >>>#7
INFO  - 2014-01-31 00:23:42 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:23:42 --> 1 the guest only data>>>>>#7
INFO  - 2014-01-31 00:23:42 --> 1 the guest only data>> AFTER >>>#7
INFO  - 2014-01-31 00:23:42 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:23:42 --> 0 the guest only data>>>>>#7
INFO  - 2014-01-31 00:23:42 --> 0 the guest only data>> AFTER >>>#5
INFO  - 2014-01-31 00:23:42 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:23:42 --> 0 the guest only data>>>>>#5
INFO  - 2014-01-31 00:23:42 --> 0 the guest only data>> AFTER >>>#4
INFO  - 2014-01-31 00:23:42 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:23:42 --> 1 the guest only data>>>>>#4
INFO  - 2014-01-31 00:23:42 --> 1 the guest only data>> AFTER >>>#4
DEBUG - 2014-01-31 00:23:42 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2014-01-31 00:23:42 --> Final output sent to browser
DEBUG - 2014-01-31 00:23:42 --> Total execution time: 0.0624
DEBUG - 2014-01-31 00:23:44 --> Config Class Initialized
DEBUG - 2014-01-31 00:23:44 --> Hooks Class Initialized
DEBUG - 2014-01-31 00:23:44 --> Utf8 Class Initialized
DEBUG - 2014-01-31 00:23:44 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 00:23:44 --> URI Class Initialized
DEBUG - 2014-01-31 00:23:44 --> Router Class Initialized
DEBUG - 2014-01-31 00:23:44 --> Output Class Initialized
DEBUG - 2014-01-31 00:23:44 --> Security Class Initialized
DEBUG - 2014-01-31 00:23:44 --> Input Class Initialized
DEBUG - 2014-01-31 00:23:44 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-31 00:23:44 --> Language Class Initialized
DEBUG - 2014-01-31 00:23:44 --> Loader Class Initialized
DEBUG - 2014-01-31 00:23:44 --> Helper loaded: form_helper
DEBUG - 2014-01-31 00:23:44 --> Helper loaded: url_helper
DEBUG - 2014-01-31 00:23:44 --> Helper loaded: html_helper
DEBUG - 2014-01-31 00:23:44 --> Database Driver Class Initialized
DEBUG - 2014-01-31 00:23:44 --> Session Class Initialized
DEBUG - 2014-01-31 00:23:44 --> Helper loaded: string_helper
DEBUG - 2014-01-31 00:23:44 --> Session routines successfully run
DEBUG - 2014-01-31 00:23:44 --> Form Validation Class Initialized
DEBUG - 2014-01-31 00:23:44 --> Controller Class Initialized
DEBUG - 2014-01-31 00:23:44 --> Model Class Initialized
DEBUG - 2014-01-31 00:23:44 --> Model Class Initialized
DEBUG - 2014-01-31 00:23:44 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-31 00:23:44 --> after session initialization................
INFO  - 2014-01-31 00:23:44 --> the form message==>
INFO  - 2014-01-31 00:23:44 --> The session id is ========>487d56839132cfa6bd6e5c223ff97127 and the member id is =======>
INFO  - 2014-01-31 00:23:44 --> after the retrieving session list.................//////////
INFO  - 2014-01-31 00:23:44 --> The session id is ========>487d56839132cfa6bd6e5c223ff97127 and the member id is =======>
DEBUG - 2014-01-31 00:23:44 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-01-31 00:23:44 --> Final output sent to browser
DEBUG - 2014-01-31 00:23:44 --> Total execution time: 0.0468
DEBUG - 2014-01-31 00:23:45 --> Config Class Initialized
DEBUG - 2014-01-31 00:23:45 --> Hooks Class Initialized
DEBUG - 2014-01-31 00:23:45 --> Utf8 Class Initialized
DEBUG - 2014-01-31 00:23:45 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 00:23:45 --> URI Class Initialized
DEBUG - 2014-01-31 00:23:45 --> Router Class Initialized
DEBUG - 2014-01-31 00:23:45 --> Output Class Initialized
DEBUG - 2014-01-31 00:23:45 --> Security Class Initialized
DEBUG - 2014-01-31 00:23:45 --> Input Class Initialized
DEBUG - 2014-01-31 00:23:45 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-31 00:23:45 --> Language Class Initialized
DEBUG - 2014-01-31 00:23:45 --> Loader Class Initialized
DEBUG - 2014-01-31 00:23:45 --> Helper loaded: form_helper
DEBUG - 2014-01-31 00:23:45 --> Helper loaded: url_helper
DEBUG - 2014-01-31 00:23:45 --> Helper loaded: html_helper
DEBUG - 2014-01-31 00:23:45 --> Database Driver Class Initialized
DEBUG - 2014-01-31 00:23:45 --> Session Class Initialized
DEBUG - 2014-01-31 00:23:45 --> Helper loaded: string_helper
DEBUG - 2014-01-31 00:23:45 --> Session routines successfully run
DEBUG - 2014-01-31 00:23:45 --> Form Validation Class Initialized
DEBUG - 2014-01-31 00:23:45 --> Controller Class Initialized
DEBUG - 2014-01-31 00:23:45 --> Model Class Initialized
DEBUG - 2014-01-31 00:23:45 --> Model Class Initialized
DEBUG - 2014-01-31 00:23:45 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-31 00:23:45 --> after session initialization................
INFO  - 2014-01-31 00:23:45 --> the form message==>
INFO  - 2014-01-31 00:23:45 --> The session id is ========>487d56839132cfa6bd6e5c223ff97127 and the member id is =======>
INFO  - 2014-01-31 00:23:45 --> after the retrieving session list.................//////////
INFO  - 2014-01-31 00:23:45 --> The session id is ========>487d56839132cfa6bd6e5c223ff97127 and the member id is =======>
DEBUG - 2014-01-31 00:23:45 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-01-31 00:23:45 --> Final output sent to browser
DEBUG - 2014-01-31 00:23:45 --> Total execution time: 0.0624
DEBUG - 2014-01-31 00:23:46 --> Config Class Initialized
DEBUG - 2014-01-31 00:23:46 --> Hooks Class Initialized
DEBUG - 2014-01-31 00:23:46 --> Utf8 Class Initialized
DEBUG - 2014-01-31 00:23:46 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 00:23:46 --> URI Class Initialized
DEBUG - 2014-01-31 00:23:46 --> Router Class Initialized
DEBUG - 2014-01-31 00:23:46 --> Output Class Initialized
DEBUG - 2014-01-31 00:23:46 --> Security Class Initialized
DEBUG - 2014-01-31 00:23:46 --> Input Class Initialized
DEBUG - 2014-01-31 00:23:46 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-31 00:23:46 --> Language Class Initialized
DEBUG - 2014-01-31 00:23:46 --> Loader Class Initialized
DEBUG - 2014-01-31 00:23:46 --> Helper loaded: form_helper
DEBUG - 2014-01-31 00:23:46 --> Helper loaded: url_helper
DEBUG - 2014-01-31 00:23:46 --> Helper loaded: html_helper
DEBUG - 2014-01-31 00:23:46 --> Database Driver Class Initialized
DEBUG - 2014-01-31 00:23:46 --> Session Class Initialized
DEBUG - 2014-01-31 00:23:46 --> Helper loaded: string_helper
DEBUG - 2014-01-31 00:23:46 --> Session routines successfully run
DEBUG - 2014-01-31 00:23:46 --> Form Validation Class Initialized
DEBUG - 2014-01-31 00:23:46 --> Controller Class Initialized
DEBUG - 2014-01-31 00:23:46 --> Model Class Initialized
DEBUG - 2014-01-31 00:23:46 --> Model Class Initialized
DEBUG - 2014-01-31 00:23:46 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-31 00:23:46 --> after session initialization................
INFO  - 2014-01-31 00:23:46 --> the form message==>
INFO  - 2014-01-31 00:23:46 --> The session id is ========>487d56839132cfa6bd6e5c223ff97127 and the member id is =======>
INFO  - 2014-01-31 00:23:46 --> after the retrieving session list.................//////////
INFO  - 2014-01-31 00:23:46 --> The session id is ========>487d56839132cfa6bd6e5c223ff97127 and the member id is =======>
DEBUG - 2014-01-31 00:23:46 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-01-31 00:23:46 --> Final output sent to browser
DEBUG - 2014-01-31 00:23:46 --> Total execution time: 0.0468
DEBUG - 2014-01-31 00:23:47 --> Config Class Initialized
DEBUG - 2014-01-31 00:23:47 --> Hooks Class Initialized
DEBUG - 2014-01-31 00:23:47 --> Utf8 Class Initialized
DEBUG - 2014-01-31 00:23:47 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 00:23:47 --> URI Class Initialized
DEBUG - 2014-01-31 00:23:47 --> Router Class Initialized
DEBUG - 2014-01-31 00:23:47 --> Output Class Initialized
DEBUG - 2014-01-31 00:23:47 --> Security Class Initialized
DEBUG - 2014-01-31 00:23:47 --> Input Class Initialized
DEBUG - 2014-01-31 00:23:47 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-31 00:23:47 --> Language Class Initialized
DEBUG - 2014-01-31 00:23:47 --> Loader Class Initialized
DEBUG - 2014-01-31 00:23:47 --> Helper loaded: form_helper
DEBUG - 2014-01-31 00:23:47 --> Helper loaded: url_helper
DEBUG - 2014-01-31 00:23:47 --> Helper loaded: html_helper
DEBUG - 2014-01-31 00:23:47 --> Database Driver Class Initialized
DEBUG - 2014-01-31 00:23:47 --> Session Class Initialized
DEBUG - 2014-01-31 00:23:47 --> Helper loaded: string_helper
DEBUG - 2014-01-31 00:23:47 --> Session routines successfully run
DEBUG - 2014-01-31 00:23:47 --> Form Validation Class Initialized
DEBUG - 2014-01-31 00:23:47 --> Controller Class Initialized
DEBUG - 2014-01-31 00:23:47 --> Model Class Initialized
DEBUG - 2014-01-31 00:23:47 --> Model Class Initialized
DEBUG - 2014-01-31 00:23:47 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-31 00:23:47 --> after session initialization................
INFO  - 2014-01-31 00:23:47 --> the form message==>
INFO  - 2014-01-31 00:23:47 --> The session id is ========>487d56839132cfa6bd6e5c223ff97127 and the member id is =======>
INFO  - 2014-01-31 00:23:47 --> after the retrieving session list.................//////////
INFO  - 2014-01-31 00:23:47 --> The session id is ========>487d56839132cfa6bd6e5c223ff97127 and the member id is =======>
DEBUG - 2014-01-31 00:23:47 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-01-31 00:23:47 --> Final output sent to browser
DEBUG - 2014-01-31 00:23:47 --> Total execution time: 0.0468
DEBUG - 2014-01-31 00:23:48 --> Config Class Initialized
DEBUG - 2014-01-31 00:23:48 --> Hooks Class Initialized
DEBUG - 2014-01-31 00:23:48 --> Utf8 Class Initialized
DEBUG - 2014-01-31 00:23:48 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 00:23:48 --> URI Class Initialized
DEBUG - 2014-01-31 00:23:48 --> Router Class Initialized
DEBUG - 2014-01-31 00:23:48 --> Output Class Initialized
DEBUG - 2014-01-31 00:23:48 --> Security Class Initialized
DEBUG - 2014-01-31 00:23:48 --> Input Class Initialized
DEBUG - 2014-01-31 00:23:48 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-31 00:23:48 --> Language Class Initialized
DEBUG - 2014-01-31 00:23:48 --> Loader Class Initialized
DEBUG - 2014-01-31 00:23:48 --> Helper loaded: form_helper
DEBUG - 2014-01-31 00:23:48 --> Helper loaded: url_helper
DEBUG - 2014-01-31 00:23:48 --> Helper loaded: html_helper
DEBUG - 2014-01-31 00:23:48 --> Database Driver Class Initialized
DEBUG - 2014-01-31 00:23:48 --> Session Class Initialized
DEBUG - 2014-01-31 00:23:48 --> Helper loaded: string_helper
DEBUG - 2014-01-31 00:23:48 --> Session routines successfully run
DEBUG - 2014-01-31 00:23:48 --> Form Validation Class Initialized
DEBUG - 2014-01-31 00:23:48 --> Controller Class Initialized
DEBUG - 2014-01-31 00:23:48 --> Model Class Initialized
DEBUG - 2014-01-31 00:23:48 --> Model Class Initialized
DEBUG - 2014-01-31 00:23:48 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-31 00:23:48 --> after session initialization................
INFO  - 2014-01-31 00:23:48 --> the form message==>
INFO  - 2014-01-31 00:23:48 --> The session id is ========>487d56839132cfa6bd6e5c223ff97127 and the member id is =======>
INFO  - 2014-01-31 00:23:48 --> after the retrieving session list.................//////////
INFO  - 2014-01-31 00:23:48 --> The session id is ========>487d56839132cfa6bd6e5c223ff97127 and the member id is =======>
DEBUG - 2014-01-31 00:23:48 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-01-31 00:23:48 --> Final output sent to browser
DEBUG - 2014-01-31 00:23:48 --> Total execution time: 0.0468
DEBUG - 2014-01-31 00:23:48 --> Config Class Initialized
DEBUG - 2014-01-31 00:23:48 --> Hooks Class Initialized
DEBUG - 2014-01-31 00:23:48 --> Utf8 Class Initialized
DEBUG - 2014-01-31 00:23:48 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 00:23:48 --> URI Class Initialized
DEBUG - 2014-01-31 00:23:48 --> Router Class Initialized
DEBUG - 2014-01-31 00:23:48 --> Output Class Initialized
DEBUG - 2014-01-31 00:23:48 --> Security Class Initialized
DEBUG - 2014-01-31 00:23:48 --> Input Class Initialized
DEBUG - 2014-01-31 00:23:48 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-31 00:23:48 --> Language Class Initialized
DEBUG - 2014-01-31 00:23:48 --> Loader Class Initialized
DEBUG - 2014-01-31 00:23:48 --> Helper loaded: form_helper
DEBUG - 2014-01-31 00:23:48 --> Helper loaded: url_helper
DEBUG - 2014-01-31 00:23:48 --> Helper loaded: html_helper
DEBUG - 2014-01-31 00:23:48 --> Database Driver Class Initialized
DEBUG - 2014-01-31 00:23:48 --> Session Class Initialized
DEBUG - 2014-01-31 00:23:48 --> Helper loaded: string_helper
DEBUG - 2014-01-31 00:23:48 --> Session routines successfully run
DEBUG - 2014-01-31 00:23:48 --> Form Validation Class Initialized
DEBUG - 2014-01-31 00:23:48 --> Controller Class Initialized
DEBUG - 2014-01-31 00:23:48 --> Model Class Initialized
DEBUG - 2014-01-31 00:23:48 --> Model Class Initialized
DEBUG - 2014-01-31 00:23:48 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-31 00:23:48 --> after session initialization................
INFO  - 2014-01-31 00:23:48 --> the form message==>
INFO  - 2014-01-31 00:23:48 --> The session id is ========>487d56839132cfa6bd6e5c223ff97127 and the member id is =======>
INFO  - 2014-01-31 00:23:48 --> after the retrieving session list.................//////////
INFO  - 2014-01-31 00:23:48 --> The session id is ========>487d56839132cfa6bd6e5c223ff97127 and the member id is =======>
DEBUG - 2014-01-31 00:23:48 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-01-31 00:23:48 --> Final output sent to browser
DEBUG - 2014-01-31 00:23:48 --> Total execution time: 0.0468
DEBUG - 2014-01-31 00:23:48 --> Config Class Initialized
DEBUG - 2014-01-31 00:23:48 --> Hooks Class Initialized
DEBUG - 2014-01-31 00:23:48 --> Utf8 Class Initialized
DEBUG - 2014-01-31 00:23:48 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 00:23:48 --> URI Class Initialized
DEBUG - 2014-01-31 00:23:48 --> Router Class Initialized
DEBUG - 2014-01-31 00:23:48 --> Output Class Initialized
DEBUG - 2014-01-31 00:23:48 --> Security Class Initialized
DEBUG - 2014-01-31 00:23:48 --> Input Class Initialized
DEBUG - 2014-01-31 00:23:48 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-31 00:23:48 --> Language Class Initialized
DEBUG - 2014-01-31 00:23:48 --> Loader Class Initialized
DEBUG - 2014-01-31 00:23:48 --> Helper loaded: form_helper
DEBUG - 2014-01-31 00:23:48 --> Helper loaded: url_helper
DEBUG - 2014-01-31 00:23:48 --> Helper loaded: html_helper
DEBUG - 2014-01-31 00:23:48 --> Database Driver Class Initialized
DEBUG - 2014-01-31 00:23:48 --> Session Class Initialized
DEBUG - 2014-01-31 00:23:48 --> Helper loaded: string_helper
DEBUG - 2014-01-31 00:23:48 --> Session routines successfully run
DEBUG - 2014-01-31 00:23:48 --> Form Validation Class Initialized
DEBUG - 2014-01-31 00:23:48 --> Controller Class Initialized
DEBUG - 2014-01-31 00:23:48 --> Model Class Initialized
DEBUG - 2014-01-31 00:23:48 --> Model Class Initialized
DEBUG - 2014-01-31 00:23:48 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-31 00:23:48 --> after session initialization................
INFO  - 2014-01-31 00:23:48 --> the form message==>
INFO  - 2014-01-31 00:23:48 --> The session id is ========>487d56839132cfa6bd6e5c223ff97127 and the member id is =======>
INFO  - 2014-01-31 00:23:48 --> after the retrieving session list.................//////////
INFO  - 2014-01-31 00:23:48 --> The session id is ========>487d56839132cfa6bd6e5c223ff97127 and the member id is =======>
DEBUG - 2014-01-31 00:23:48 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-01-31 00:23:48 --> Final output sent to browser
DEBUG - 2014-01-31 00:23:48 --> Total execution time: 0.0468
DEBUG - 2014-01-31 00:24:05 --> Config Class Initialized
DEBUG - 2014-01-31 00:24:05 --> Hooks Class Initialized
DEBUG - 2014-01-31 00:24:05 --> Utf8 Class Initialized
DEBUG - 2014-01-31 00:24:05 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 00:24:05 --> URI Class Initialized
DEBUG - 2014-01-31 00:24:05 --> Router Class Initialized
DEBUG - 2014-01-31 00:24:05 --> Output Class Initialized
DEBUG - 2014-01-31 00:24:05 --> Security Class Initialized
DEBUG - 2014-01-31 00:24:05 --> Input Class Initialized
DEBUG - 2014-01-31 00:24:05 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-31 00:24:05 --> Language Class Initialized
DEBUG - 2014-01-31 00:24:05 --> Loader Class Initialized
DEBUG - 2014-01-31 00:24:05 --> Helper loaded: form_helper
DEBUG - 2014-01-31 00:24:05 --> Helper loaded: url_helper
DEBUG - 2014-01-31 00:24:05 --> Helper loaded: html_helper
DEBUG - 2014-01-31 00:24:05 --> Database Driver Class Initialized
DEBUG - 2014-01-31 00:24:05 --> Session Class Initialized
DEBUG - 2014-01-31 00:24:05 --> Helper loaded: string_helper
DEBUG - 2014-01-31 00:24:05 --> Session routines successfully run
DEBUG - 2014-01-31 00:24:05 --> Form Validation Class Initialized
DEBUG - 2014-01-31 00:24:05 --> Controller Class Initialized
DEBUG - 2014-01-31 00:24:05 --> Model Class Initialized
DEBUG - 2014-01-31 00:24:05 --> Model Class Initialized
DEBUG - 2014-01-31 00:24:05 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-31 00:24:05 --> after session initialization................
INFO  - 2014-01-31 00:24:05 --> the form message==>
INFO  - 2014-01-31 00:24:05 --> The session id is ========>487d56839132cfa6bd6e5c223ff97127 and the member id is =======>
INFO  - 2014-01-31 00:24:05 --> after the retrieving session list.................//////////
INFO  - 2014-01-31 00:24:05 --> The session id is ========>487d56839132cfa6bd6e5c223ff97127 and the member id is =======>
DEBUG - 2014-01-31 00:24:05 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-01-31 00:24:05 --> Final output sent to browser
DEBUG - 2014-01-31 00:24:05 --> Total execution time: 0.0468
DEBUG - 2014-01-31 00:24:07 --> Config Class Initialized
DEBUG - 2014-01-31 00:24:07 --> Hooks Class Initialized
DEBUG - 2014-01-31 00:24:07 --> Utf8 Class Initialized
DEBUG - 2014-01-31 00:24:07 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 00:24:07 --> URI Class Initialized
DEBUG - 2014-01-31 00:24:07 --> Router Class Initialized
DEBUG - 2014-01-31 00:24:07 --> Output Class Initialized
DEBUG - 2014-01-31 00:24:07 --> Security Class Initialized
DEBUG - 2014-01-31 00:24:07 --> Input Class Initialized
DEBUG - 2014-01-31 00:24:07 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-31 00:24:07 --> Language Class Initialized
DEBUG - 2014-01-31 00:24:07 --> Loader Class Initialized
DEBUG - 2014-01-31 00:24:07 --> Helper loaded: form_helper
DEBUG - 2014-01-31 00:24:07 --> Helper loaded: url_helper
DEBUG - 2014-01-31 00:24:07 --> Helper loaded: html_helper
DEBUG - 2014-01-31 00:24:07 --> Database Driver Class Initialized
DEBUG - 2014-01-31 00:24:07 --> Session Class Initialized
DEBUG - 2014-01-31 00:24:07 --> Helper loaded: string_helper
DEBUG - 2014-01-31 00:24:07 --> Session routines successfully run
DEBUG - 2014-01-31 00:24:07 --> Form Validation Class Initialized
DEBUG - 2014-01-31 00:24:07 --> Controller Class Initialized
DEBUG - 2014-01-31 00:24:07 --> Model Class Initialized
DEBUG - 2014-01-31 00:24:07 --> Model Class Initialized
DEBUG - 2014-01-31 00:24:07 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-31 00:24:07 --> after session initialization................
INFO  - 2014-01-31 00:24:07 --> after rays has been clicked.................
INFO  - 2014-01-31 00:24:07 --> last article id is 0
INFO  - 2014-01-31 00:24:07 --> The session id is ========>487d56839132cfa6bd6e5c223ff97127 and the member id is =======>
INFO  - 2014-01-31 00:24:07 --> The session id is ========>487d56839132cfa6bd6e5c223ff97127 and the member id is =======>
INFO  - 2014-01-31 00:24:07 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:07 --> 0 the guest only data>>>>>
INFO  - 2014-01-31 00:24:07 --> 0 the guest only data>> AFTER >>>#22
INFO  - 2014-01-31 00:24:07 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:07 --> 0 the guest only data>>>>>#22
INFO  - 2014-01-31 00:24:07 --> 0 the guest only data>> AFTER >>>#21
INFO  - 2014-01-31 00:24:07 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:07 --> 1 the guest only data>>>>>#21
INFO  - 2014-01-31 00:24:07 --> 1 the guest only data>> AFTER >>>#21
INFO  - 2014-01-31 00:24:07 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:07 --> 0 the guest only data>>>>>#21
INFO  - 2014-01-31 00:24:07 --> 0 the guest only data>> AFTER >>>#19
INFO  - 2014-01-31 00:24:07 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:07 --> 0 the guest only data>>>>>#19
INFO  - 2014-01-31 00:24:07 --> 0 the guest only data>> AFTER >>>#18
INFO  - 2014-01-31 00:24:07 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:07 --> 0 the guest only data>>>>>#18
INFO  - 2014-01-31 00:24:07 --> 0 the guest only data>> AFTER >>>#17
INFO  - 2014-01-31 00:24:07 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:07 --> 0 the guest only data>>>>>#17
INFO  - 2014-01-31 00:24:07 --> 0 the guest only data>> AFTER >>>#16
INFO  - 2014-01-31 00:24:07 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:07 --> 1 the guest only data>>>>>#16
INFO  - 2014-01-31 00:24:07 --> 1 the guest only data>> AFTER >>>#16
INFO  - 2014-01-31 00:24:07 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:07 --> 0 the guest only data>>>>>#16
INFO  - 2014-01-31 00:24:07 --> 0 the guest only data>> AFTER >>>#14
INFO  - 2014-01-31 00:24:07 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:07 --> 1 the guest only data>>>>>#14
INFO  - 2014-01-31 00:24:07 --> 1 the guest only data>> AFTER >>>#14
INFO  - 2014-01-31 00:24:07 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:07 --> 0 the guest only data>>>>>#14
INFO  - 2014-01-31 00:24:07 --> 0 the guest only data>> AFTER >>>#12
INFO  - 2014-01-31 00:24:07 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:07 --> 1 the guest only data>>>>>#12
INFO  - 2014-01-31 00:24:07 --> 1 the guest only data>> AFTER >>>#12
INFO  - 2014-01-31 00:24:07 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:07 --> 0 the guest only data>>>>>#12
INFO  - 2014-01-31 00:24:07 --> 0 the guest only data>> AFTER >>>#10
INFO  - 2014-01-31 00:24:07 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:07 --> 0 the guest only data>>>>>#10
INFO  - 2014-01-31 00:24:07 --> 0 the guest only data>> AFTER >>>#9
INFO  - 2014-01-31 00:24:07 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:07 --> 1 the guest only data>>>>>#9
INFO  - 2014-01-31 00:24:07 --> 1 the guest only data>> AFTER >>>#9
INFO  - 2014-01-31 00:24:07 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:07 --> 0 the guest only data>>>>>#9
INFO  - 2014-01-31 00:24:07 --> 0 the guest only data>> AFTER >>>#7
INFO  - 2014-01-31 00:24:07 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:07 --> 1 the guest only data>>>>>#7
INFO  - 2014-01-31 00:24:07 --> 1 the guest only data>> AFTER >>>#7
INFO  - 2014-01-31 00:24:07 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:07 --> 0 the guest only data>>>>>#7
INFO  - 2014-01-31 00:24:07 --> 0 the guest only data>> AFTER >>>#5
INFO  - 2014-01-31 00:24:07 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:07 --> 0 the guest only data>>>>>#5
INFO  - 2014-01-31 00:24:07 --> 0 the guest only data>> AFTER >>>#4
INFO  - 2014-01-31 00:24:07 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:07 --> 1 the guest only data>>>>>#4
INFO  - 2014-01-31 00:24:07 --> 1 the guest only data>> AFTER >>>#4
DEBUG - 2014-01-31 00:24:07 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2014-01-31 00:24:07 --> Final output sent to browser
DEBUG - 2014-01-31 00:24:07 --> Total execution time: 0.0624
DEBUG - 2014-01-31 00:24:08 --> Config Class Initialized
DEBUG - 2014-01-31 00:24:08 --> Hooks Class Initialized
DEBUG - 2014-01-31 00:24:08 --> Utf8 Class Initialized
DEBUG - 2014-01-31 00:24:08 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 00:24:08 --> URI Class Initialized
DEBUG - 2014-01-31 00:24:08 --> Router Class Initialized
DEBUG - 2014-01-31 00:24:08 --> Output Class Initialized
DEBUG - 2014-01-31 00:24:08 --> Security Class Initialized
DEBUG - 2014-01-31 00:24:08 --> Input Class Initialized
DEBUG - 2014-01-31 00:24:08 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-31 00:24:08 --> Language Class Initialized
DEBUG - 2014-01-31 00:24:08 --> Loader Class Initialized
DEBUG - 2014-01-31 00:24:08 --> Helper loaded: form_helper
DEBUG - 2014-01-31 00:24:08 --> Helper loaded: url_helper
DEBUG - 2014-01-31 00:24:08 --> Helper loaded: html_helper
DEBUG - 2014-01-31 00:24:08 --> Database Driver Class Initialized
DEBUG - 2014-01-31 00:24:08 --> Session Class Initialized
DEBUG - 2014-01-31 00:24:08 --> Helper loaded: string_helper
DEBUG - 2014-01-31 00:24:08 --> Session routines successfully run
DEBUG - 2014-01-31 00:24:08 --> Form Validation Class Initialized
DEBUG - 2014-01-31 00:24:08 --> Controller Class Initialized
DEBUG - 2014-01-31 00:24:08 --> Model Class Initialized
DEBUG - 2014-01-31 00:24:08 --> Model Class Initialized
DEBUG - 2014-01-31 00:24:08 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-31 00:24:08 --> after session initialization................
INFO  - 2014-01-31 00:24:08 --> after rays has been clicked.................
INFO  - 2014-01-31 00:24:08 --> last article id is 0
INFO  - 2014-01-31 00:24:08 --> The session id is ========>487d56839132cfa6bd6e5c223ff97127 and the member id is =======>
INFO  - 2014-01-31 00:24:08 --> The session id is ========>487d56839132cfa6bd6e5c223ff97127 and the member id is =======>
INFO  - 2014-01-31 00:24:08 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:08 --> 0 the guest only data>>>>>
INFO  - 2014-01-31 00:24:08 --> 0 the guest only data>> AFTER >>>#22
INFO  - 2014-01-31 00:24:08 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:08 --> 0 the guest only data>>>>>#22
INFO  - 2014-01-31 00:24:08 --> 0 the guest only data>> AFTER >>>#21
INFO  - 2014-01-31 00:24:08 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:08 --> 1 the guest only data>>>>>#21
INFO  - 2014-01-31 00:24:08 --> 1 the guest only data>> AFTER >>>#21
INFO  - 2014-01-31 00:24:08 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:08 --> 0 the guest only data>>>>>#21
INFO  - 2014-01-31 00:24:08 --> 0 the guest only data>> AFTER >>>#19
INFO  - 2014-01-31 00:24:08 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:08 --> 0 the guest only data>>>>>#19
INFO  - 2014-01-31 00:24:08 --> 0 the guest only data>> AFTER >>>#18
INFO  - 2014-01-31 00:24:08 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:08 --> 0 the guest only data>>>>>#18
INFO  - 2014-01-31 00:24:08 --> 0 the guest only data>> AFTER >>>#17
INFO  - 2014-01-31 00:24:08 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:08 --> 0 the guest only data>>>>>#17
INFO  - 2014-01-31 00:24:08 --> 0 the guest only data>> AFTER >>>#16
INFO  - 2014-01-31 00:24:08 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:08 --> 1 the guest only data>>>>>#16
INFO  - 2014-01-31 00:24:08 --> 1 the guest only data>> AFTER >>>#16
INFO  - 2014-01-31 00:24:08 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:08 --> 0 the guest only data>>>>>#16
INFO  - 2014-01-31 00:24:08 --> 0 the guest only data>> AFTER >>>#14
INFO  - 2014-01-31 00:24:08 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:08 --> 1 the guest only data>>>>>#14
INFO  - 2014-01-31 00:24:08 --> 1 the guest only data>> AFTER >>>#14
INFO  - 2014-01-31 00:24:08 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:08 --> 0 the guest only data>>>>>#14
INFO  - 2014-01-31 00:24:08 --> 0 the guest only data>> AFTER >>>#12
INFO  - 2014-01-31 00:24:08 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:08 --> 1 the guest only data>>>>>#12
INFO  - 2014-01-31 00:24:08 --> 1 the guest only data>> AFTER >>>#12
INFO  - 2014-01-31 00:24:08 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:08 --> 0 the guest only data>>>>>#12
INFO  - 2014-01-31 00:24:08 --> 0 the guest only data>> AFTER >>>#10
INFO  - 2014-01-31 00:24:08 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:08 --> 0 the guest only data>>>>>#10
INFO  - 2014-01-31 00:24:08 --> 0 the guest only data>> AFTER >>>#9
INFO  - 2014-01-31 00:24:08 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:08 --> 1 the guest only data>>>>>#9
INFO  - 2014-01-31 00:24:08 --> 1 the guest only data>> AFTER >>>#9
INFO  - 2014-01-31 00:24:08 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:08 --> 0 the guest only data>>>>>#9
INFO  - 2014-01-31 00:24:08 --> 0 the guest only data>> AFTER >>>#7
INFO  - 2014-01-31 00:24:08 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:08 --> 1 the guest only data>>>>>#7
INFO  - 2014-01-31 00:24:08 --> 1 the guest only data>> AFTER >>>#7
INFO  - 2014-01-31 00:24:08 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:08 --> 0 the guest only data>>>>>#7
INFO  - 2014-01-31 00:24:08 --> 0 the guest only data>> AFTER >>>#5
INFO  - 2014-01-31 00:24:08 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:08 --> 0 the guest only data>>>>>#5
INFO  - 2014-01-31 00:24:08 --> 0 the guest only data>> AFTER >>>#4
INFO  - 2014-01-31 00:24:08 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:08 --> 1 the guest only data>>>>>#4
INFO  - 2014-01-31 00:24:08 --> 1 the guest only data>> AFTER >>>#4
DEBUG - 2014-01-31 00:24:08 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2014-01-31 00:24:08 --> Final output sent to browser
DEBUG - 2014-01-31 00:24:08 --> Total execution time: 0.0624
DEBUG - 2014-01-31 00:24:11 --> Config Class Initialized
DEBUG - 2014-01-31 00:24:11 --> Hooks Class Initialized
DEBUG - 2014-01-31 00:24:11 --> Utf8 Class Initialized
DEBUG - 2014-01-31 00:24:11 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 00:24:11 --> URI Class Initialized
DEBUG - 2014-01-31 00:24:11 --> Router Class Initialized
DEBUG - 2014-01-31 00:24:11 --> Output Class Initialized
DEBUG - 2014-01-31 00:24:11 --> Security Class Initialized
DEBUG - 2014-01-31 00:24:11 --> Input Class Initialized
DEBUG - 2014-01-31 00:24:11 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-31 00:24:11 --> Language Class Initialized
DEBUG - 2014-01-31 00:24:11 --> Loader Class Initialized
DEBUG - 2014-01-31 00:24:11 --> Helper loaded: form_helper
DEBUG - 2014-01-31 00:24:11 --> Helper loaded: url_helper
DEBUG - 2014-01-31 00:24:11 --> Helper loaded: html_helper
DEBUG - 2014-01-31 00:24:11 --> Database Driver Class Initialized
DEBUG - 2014-01-31 00:24:11 --> Session Class Initialized
DEBUG - 2014-01-31 00:24:11 --> Helper loaded: string_helper
DEBUG - 2014-01-31 00:24:11 --> Session routines successfully run
DEBUG - 2014-01-31 00:24:11 --> Form Validation Class Initialized
DEBUG - 2014-01-31 00:24:11 --> Controller Class Initialized
DEBUG - 2014-01-31 00:24:11 --> Model Class Initialized
DEBUG - 2014-01-31 00:24:11 --> Model Class Initialized
DEBUG - 2014-01-31 00:24:11 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-31 00:24:11 --> after session initialization................
INFO  - 2014-01-31 00:24:11 --> the form message==>
INFO  - 2014-01-31 00:24:11 --> The session id is ========>487d56839132cfa6bd6e5c223ff97127 and the member id is =======>
INFO  - 2014-01-31 00:24:11 --> after the retrieving session list.................//////////
INFO  - 2014-01-31 00:24:11 --> The session id is ========>487d56839132cfa6bd6e5c223ff97127 and the member id is =======>
DEBUG - 2014-01-31 00:24:11 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-01-31 00:24:11 --> Final output sent to browser
DEBUG - 2014-01-31 00:24:11 --> Total execution time: 0.0468
DEBUG - 2014-01-31 00:24:12 --> Config Class Initialized
DEBUG - 2014-01-31 00:24:12 --> Hooks Class Initialized
DEBUG - 2014-01-31 00:24:12 --> Utf8 Class Initialized
DEBUG - 2014-01-31 00:24:12 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 00:24:12 --> URI Class Initialized
DEBUG - 2014-01-31 00:24:12 --> Router Class Initialized
DEBUG - 2014-01-31 00:24:12 --> Output Class Initialized
DEBUG - 2014-01-31 00:24:12 --> Security Class Initialized
DEBUG - 2014-01-31 00:24:12 --> Input Class Initialized
DEBUG - 2014-01-31 00:24:12 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-31 00:24:12 --> Language Class Initialized
DEBUG - 2014-01-31 00:24:12 --> Loader Class Initialized
DEBUG - 2014-01-31 00:24:12 --> Helper loaded: form_helper
DEBUG - 2014-01-31 00:24:12 --> Helper loaded: url_helper
DEBUG - 2014-01-31 00:24:12 --> Helper loaded: html_helper
DEBUG - 2014-01-31 00:24:12 --> Database Driver Class Initialized
DEBUG - 2014-01-31 00:24:12 --> Session Class Initialized
DEBUG - 2014-01-31 00:24:12 --> Helper loaded: string_helper
DEBUG - 2014-01-31 00:24:12 --> Session routines successfully run
DEBUG - 2014-01-31 00:24:12 --> Form Validation Class Initialized
DEBUG - 2014-01-31 00:24:12 --> Controller Class Initialized
DEBUG - 2014-01-31 00:24:12 --> Model Class Initialized
DEBUG - 2014-01-31 00:24:12 --> Model Class Initialized
DEBUG - 2014-01-31 00:24:12 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-31 00:24:12 --> after session initialization................
INFO  - 2014-01-31 00:24:12 --> after rays has been clicked.................
INFO  - 2014-01-31 00:24:12 --> last article id is 0
INFO  - 2014-01-31 00:24:12 --> The session id is ========>487d56839132cfa6bd6e5c223ff97127 and the member id is =======>
INFO  - 2014-01-31 00:24:12 --> The session id is ========>487d56839132cfa6bd6e5c223ff97127 and the member id is =======>
INFO  - 2014-01-31 00:24:12 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:12 --> 0 the guest only data>>>>>
INFO  - 2014-01-31 00:24:12 --> 0 the guest only data>> AFTER >>>#22
INFO  - 2014-01-31 00:24:12 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:12 --> 0 the guest only data>>>>>#22
INFO  - 2014-01-31 00:24:12 --> 0 the guest only data>> AFTER >>>#21
INFO  - 2014-01-31 00:24:12 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:12 --> 1 the guest only data>>>>>#21
INFO  - 2014-01-31 00:24:12 --> 1 the guest only data>> AFTER >>>#21
INFO  - 2014-01-31 00:24:12 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:12 --> 0 the guest only data>>>>>#21
INFO  - 2014-01-31 00:24:12 --> 0 the guest only data>> AFTER >>>#19
INFO  - 2014-01-31 00:24:12 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:12 --> 0 the guest only data>>>>>#19
INFO  - 2014-01-31 00:24:12 --> 0 the guest only data>> AFTER >>>#18
INFO  - 2014-01-31 00:24:12 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:12 --> 0 the guest only data>>>>>#18
INFO  - 2014-01-31 00:24:12 --> 0 the guest only data>> AFTER >>>#17
INFO  - 2014-01-31 00:24:12 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:12 --> 0 the guest only data>>>>>#17
INFO  - 2014-01-31 00:24:12 --> 0 the guest only data>> AFTER >>>#16
INFO  - 2014-01-31 00:24:12 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:12 --> 1 the guest only data>>>>>#16
INFO  - 2014-01-31 00:24:12 --> 1 the guest only data>> AFTER >>>#16
INFO  - 2014-01-31 00:24:12 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:12 --> 0 the guest only data>>>>>#16
INFO  - 2014-01-31 00:24:12 --> 0 the guest only data>> AFTER >>>#14
INFO  - 2014-01-31 00:24:12 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:12 --> 1 the guest only data>>>>>#14
INFO  - 2014-01-31 00:24:12 --> 1 the guest only data>> AFTER >>>#14
INFO  - 2014-01-31 00:24:12 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:12 --> 0 the guest only data>>>>>#14
INFO  - 2014-01-31 00:24:12 --> 0 the guest only data>> AFTER >>>#12
INFO  - 2014-01-31 00:24:12 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:12 --> 1 the guest only data>>>>>#12
INFO  - 2014-01-31 00:24:12 --> 1 the guest only data>> AFTER >>>#12
INFO  - 2014-01-31 00:24:12 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:12 --> 0 the guest only data>>>>>#12
INFO  - 2014-01-31 00:24:12 --> 0 the guest only data>> AFTER >>>#10
INFO  - 2014-01-31 00:24:12 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:12 --> 0 the guest only data>>>>>#10
INFO  - 2014-01-31 00:24:12 --> 0 the guest only data>> AFTER >>>#9
INFO  - 2014-01-31 00:24:12 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:12 --> 1 the guest only data>>>>>#9
INFO  - 2014-01-31 00:24:12 --> 1 the guest only data>> AFTER >>>#9
INFO  - 2014-01-31 00:24:12 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:12 --> 0 the guest only data>>>>>#9
INFO  - 2014-01-31 00:24:12 --> 0 the guest only data>> AFTER >>>#7
INFO  - 2014-01-31 00:24:12 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:12 --> 1 the guest only data>>>>>#7
INFO  - 2014-01-31 00:24:12 --> 1 the guest only data>> AFTER >>>#7
INFO  - 2014-01-31 00:24:12 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:12 --> 0 the guest only data>>>>>#7
INFO  - 2014-01-31 00:24:12 --> 0 the guest only data>> AFTER >>>#5
INFO  - 2014-01-31 00:24:12 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:12 --> 0 the guest only data>>>>>#5
INFO  - 2014-01-31 00:24:12 --> 0 the guest only data>> AFTER >>>#4
INFO  - 2014-01-31 00:24:12 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:12 --> 1 the guest only data>>>>>#4
INFO  - 2014-01-31 00:24:12 --> 1 the guest only data>> AFTER >>>#4
DEBUG - 2014-01-31 00:24:12 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2014-01-31 00:24:12 --> Final output sent to browser
DEBUG - 2014-01-31 00:24:12 --> Total execution time: 0.0780
DEBUG - 2014-01-31 00:24:13 --> Config Class Initialized
DEBUG - 2014-01-31 00:24:13 --> Hooks Class Initialized
DEBUG - 2014-01-31 00:24:13 --> Utf8 Class Initialized
DEBUG - 2014-01-31 00:24:13 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 00:24:13 --> URI Class Initialized
DEBUG - 2014-01-31 00:24:13 --> Router Class Initialized
DEBUG - 2014-01-31 00:24:13 --> Output Class Initialized
DEBUG - 2014-01-31 00:24:13 --> Security Class Initialized
DEBUG - 2014-01-31 00:24:13 --> Input Class Initialized
DEBUG - 2014-01-31 00:24:13 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-31 00:24:13 --> Language Class Initialized
DEBUG - 2014-01-31 00:24:13 --> Loader Class Initialized
DEBUG - 2014-01-31 00:24:13 --> Helper loaded: form_helper
DEBUG - 2014-01-31 00:24:13 --> Helper loaded: url_helper
DEBUG - 2014-01-31 00:24:13 --> Helper loaded: html_helper
DEBUG - 2014-01-31 00:24:13 --> Database Driver Class Initialized
DEBUG - 2014-01-31 00:24:13 --> Session Class Initialized
DEBUG - 2014-01-31 00:24:13 --> Helper loaded: string_helper
DEBUG - 2014-01-31 00:24:13 --> Session routines successfully run
DEBUG - 2014-01-31 00:24:13 --> Form Validation Class Initialized
DEBUG - 2014-01-31 00:24:13 --> Controller Class Initialized
DEBUG - 2014-01-31 00:24:13 --> Model Class Initialized
DEBUG - 2014-01-31 00:24:13 --> Model Class Initialized
DEBUG - 2014-01-31 00:24:13 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-31 00:24:13 --> after session initialization................
INFO  - 2014-01-31 00:24:13 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  ''
INFO  - 2014-01-31 00:24:13 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-01-31 00:24:13 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2014-01-31 00:24:13 --> inside retrieving vacancy for member
INFO  - 2014-01-31 00:24:13 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2014-01-31 00:24:13 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-01-31 00:24:13 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2014-01-31 00:24:13 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2014-01-31 00:24:13 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2014-01-31 00:24:13 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2014-01-31 00:24:13 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2014-01-31 00:24:13 --> inside retrieving pharmacy for drug id is 1
INFO  - 2014-01-31 00:24:13 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2014-01-31 00:24:13 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2014-01-31 00:24:13 --> The session id is ========>487d56839132cfa6bd6e5c223ff97127 and the member id is =======>
INFO  - 2014-01-31 00:24:13 -->  column name inside view is 0 column Data is Male Doctor
INFO  - 2014-01-31 00:24:13 -->  column name inside view is 1 column Data is Ordinary Member
DEBUG - 2014-01-31 00:24:13 --> File loaded: ../pharmaray-application/views/onlinepharmacy.php
DEBUG - 2014-01-31 00:24:13 --> Final output sent to browser
DEBUG - 2014-01-31 00:24:13 --> Total execution time: 0.0624
DEBUG - 2014-01-31 00:24:13 --> Config Class Initialized
DEBUG - 2014-01-31 00:24:13 --> Hooks Class Initialized
DEBUG - 2014-01-31 00:24:13 --> Utf8 Class Initialized
DEBUG - 2014-01-31 00:24:13 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 00:24:13 --> URI Class Initialized
DEBUG - 2014-01-31 00:24:13 --> Router Class Initialized
ERROR - 2014-01-31 00:24:13 --> 404 Page Not Found --> css
DEBUG - 2014-01-31 00:24:18 --> Config Class Initialized
DEBUG - 2014-01-31 00:24:18 --> Hooks Class Initialized
DEBUG - 2014-01-31 00:24:18 --> Utf8 Class Initialized
DEBUG - 2014-01-31 00:24:18 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 00:24:18 --> URI Class Initialized
DEBUG - 2014-01-31 00:24:18 --> Router Class Initialized
DEBUG - 2014-01-31 00:24:18 --> Output Class Initialized
DEBUG - 2014-01-31 00:24:18 --> Security Class Initialized
DEBUG - 2014-01-31 00:24:18 --> Input Class Initialized
DEBUG - 2014-01-31 00:24:18 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-31 00:24:18 --> Language Class Initialized
DEBUG - 2014-01-31 00:24:18 --> Loader Class Initialized
DEBUG - 2014-01-31 00:24:18 --> Helper loaded: form_helper
DEBUG - 2014-01-31 00:24:18 --> Helper loaded: url_helper
DEBUG - 2014-01-31 00:24:18 --> Helper loaded: html_helper
DEBUG - 2014-01-31 00:24:18 --> Database Driver Class Initialized
DEBUG - 2014-01-31 00:24:18 --> Session Class Initialized
DEBUG - 2014-01-31 00:24:18 --> Helper loaded: string_helper
DEBUG - 2014-01-31 00:24:18 --> Session routines successfully run
DEBUG - 2014-01-31 00:24:18 --> Form Validation Class Initialized
DEBUG - 2014-01-31 00:24:18 --> Controller Class Initialized
DEBUG - 2014-01-31 00:24:18 --> Model Class Initialized
DEBUG - 2014-01-31 00:24:18 --> Model Class Initialized
DEBUG - 2014-01-31 00:24:18 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-31 00:24:18 --> after session initialization................
INFO  - 2014-01-31 00:24:18 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  ''
INFO  - 2014-01-31 00:24:18 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-01-31 00:24:18 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2014-01-31 00:24:18 --> inside retrieving vacancy for member
INFO  - 2014-01-31 00:24:18 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2014-01-31 00:24:18 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-01-31 00:24:18 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2014-01-31 00:24:18 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2014-01-31 00:24:18 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2014-01-31 00:24:18 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2014-01-31 00:24:18 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2014-01-31 00:24:18 --> inside retrieving pharmacy for drug id is 1
INFO  - 2014-01-31 00:24:18 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2014-01-31 00:24:18 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2014-01-31 00:24:18 --> The session id is ========>487d56839132cfa6bd6e5c223ff97127 and the member id is =======>
INFO  - 2014-01-31 00:24:18 -->  column name inside view is 0 column Data is Male Doctor
INFO  - 2014-01-31 00:24:18 -->  column name inside view is 1 column Data is Ordinary Member
DEBUG - 2014-01-31 00:24:18 --> File loaded: ../pharmaray-application/views/onlinepharmacy.php
DEBUG - 2014-01-31 00:24:18 --> Final output sent to browser
DEBUG - 2014-01-31 00:24:18 --> Total execution time: 0.0780
DEBUG - 2014-01-31 00:24:18 --> Config Class Initialized
DEBUG - 2014-01-31 00:24:18 --> Hooks Class Initialized
DEBUG - 2014-01-31 00:24:18 --> Utf8 Class Initialized
DEBUG - 2014-01-31 00:24:18 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 00:24:18 --> URI Class Initialized
DEBUG - 2014-01-31 00:24:18 --> Router Class Initialized
ERROR - 2014-01-31 00:24:18 --> 404 Page Not Found --> css
DEBUG - 2014-01-31 00:24:31 --> Config Class Initialized
DEBUG - 2014-01-31 00:24:31 --> Hooks Class Initialized
DEBUG - 2014-01-31 00:24:31 --> Utf8 Class Initialized
DEBUG - 2014-01-31 00:24:31 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 00:24:31 --> URI Class Initialized
DEBUG - 2014-01-31 00:24:31 --> Router Class Initialized
DEBUG - 2014-01-31 00:24:31 --> Output Class Initialized
DEBUG - 2014-01-31 00:24:31 --> Security Class Initialized
DEBUG - 2014-01-31 00:24:31 --> Input Class Initialized
DEBUG - 2014-01-31 00:24:31 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-31 00:24:31 --> Language Class Initialized
DEBUG - 2014-01-31 00:24:31 --> Loader Class Initialized
DEBUG - 2014-01-31 00:24:31 --> Helper loaded: form_helper
DEBUG - 2014-01-31 00:24:31 --> Helper loaded: url_helper
DEBUG - 2014-01-31 00:24:31 --> Helper loaded: html_helper
DEBUG - 2014-01-31 00:24:31 --> Database Driver Class Initialized
DEBUG - 2014-01-31 00:24:32 --> Session Class Initialized
DEBUG - 2014-01-31 00:24:32 --> Helper loaded: string_helper
DEBUG - 2014-01-31 00:24:32 --> Session routines successfully run
DEBUG - 2014-01-31 00:24:32 --> Form Validation Class Initialized
DEBUG - 2014-01-31 00:24:32 --> Controller Class Initialized
DEBUG - 2014-01-31 00:24:32 --> Model Class Initialized
DEBUG - 2014-01-31 00:24:32 --> Model Class Initialized
DEBUG - 2014-01-31 00:24:32 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-31 00:24:32 --> after session initialization................
DEBUG - 2014-01-31 00:24:32 --> Final output sent to browser
DEBUG - 2014-01-31 00:24:32 --> Total execution time: 1.1232
DEBUG - 2014-01-31 00:24:34 --> Config Class Initialized
DEBUG - 2014-01-31 00:24:34 --> Hooks Class Initialized
DEBUG - 2014-01-31 00:24:34 --> Utf8 Class Initialized
DEBUG - 2014-01-31 00:24:34 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 00:24:34 --> URI Class Initialized
DEBUG - 2014-01-31 00:24:34 --> Router Class Initialized
DEBUG - 2014-01-31 00:24:34 --> Output Class Initialized
DEBUG - 2014-01-31 00:24:34 --> Security Class Initialized
DEBUG - 2014-01-31 00:24:34 --> Input Class Initialized
DEBUG - 2014-01-31 00:24:34 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-31 00:24:34 --> Language Class Initialized
DEBUG - 2014-01-31 00:24:34 --> Loader Class Initialized
DEBUG - 2014-01-31 00:24:34 --> Helper loaded: form_helper
DEBUG - 2014-01-31 00:24:34 --> Helper loaded: url_helper
DEBUG - 2014-01-31 00:24:34 --> Helper loaded: html_helper
DEBUG - 2014-01-31 00:24:34 --> Database Driver Class Initialized
DEBUG - 2014-01-31 00:24:34 --> Session Class Initialized
DEBUG - 2014-01-31 00:24:34 --> Helper loaded: string_helper
DEBUG - 2014-01-31 00:24:34 --> Session routines successfully run
DEBUG - 2014-01-31 00:24:34 --> Form Validation Class Initialized
DEBUG - 2014-01-31 00:24:34 --> Controller Class Initialized
DEBUG - 2014-01-31 00:24:34 --> Model Class Initialized
DEBUG - 2014-01-31 00:24:34 --> Model Class Initialized
DEBUG - 2014-01-31 00:24:34 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-31 00:24:34 --> after session initialization................
INFO  - 2014-01-31 00:24:34 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '488'
ORDER BY `d`.`drug_name`
INFO  - 2014-01-31 00:24:34 --> inside retrieving comments member id and drug id is 488
INFO  - 2014-01-31 00:24:34 --> 10==============================0
INFO  - 2014-01-31 00:24:34 --> SELECT dc.id_drugcomment as id, dc.comment, dc.time_created, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 488
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2014-01-31 00:24:34 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 488
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2014-01-31 00:24:34 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '488'
ORDER BY `a`.`time_created`
INFO  - 2014-01-31 00:24:34 --> inside retrieving pharmacy for drug id is 488
INFO  - 2014-01-31 00:24:34 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 488
ORDER BY `p`.`id_pharmacy`
LIMIT 15
INFO  - 2014-01-31 00:24:34 --> inside retrieving comments member type id and drug id is 488
INFO  - 2014-01-31 00:24:34 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 488
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
DEBUG - 2014-01-31 00:24:34 --> Final output sent to browser
DEBUG - 2014-01-31 00:24:34 --> Total execution time: 0.0780
DEBUG - 2014-01-31 00:24:42 --> Config Class Initialized
DEBUG - 2014-01-31 00:24:42 --> Hooks Class Initialized
DEBUG - 2014-01-31 00:24:42 --> Utf8 Class Initialized
DEBUG - 2014-01-31 00:24:42 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 00:24:42 --> URI Class Initialized
DEBUG - 2014-01-31 00:24:42 --> Router Class Initialized
DEBUG - 2014-01-31 00:24:42 --> Output Class Initialized
DEBUG - 2014-01-31 00:24:42 --> Security Class Initialized
DEBUG - 2014-01-31 00:24:42 --> Input Class Initialized
DEBUG - 2014-01-31 00:24:42 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-31 00:24:42 --> Language Class Initialized
DEBUG - 2014-01-31 00:24:42 --> Loader Class Initialized
DEBUG - 2014-01-31 00:24:42 --> Helper loaded: form_helper
DEBUG - 2014-01-31 00:24:42 --> Helper loaded: url_helper
DEBUG - 2014-01-31 00:24:42 --> Helper loaded: html_helper
DEBUG - 2014-01-31 00:24:42 --> Database Driver Class Initialized
DEBUG - 2014-01-31 00:24:42 --> Session Class Initialized
DEBUG - 2014-01-31 00:24:42 --> Helper loaded: string_helper
DEBUG - 2014-01-31 00:24:42 --> Session routines successfully run
DEBUG - 2014-01-31 00:24:42 --> Form Validation Class Initialized
DEBUG - 2014-01-31 00:24:42 --> Controller Class Initialized
DEBUG - 2014-01-31 00:24:42 --> Model Class Initialized
DEBUG - 2014-01-31 00:24:42 --> Model Class Initialized
DEBUG - 2014-01-31 00:24:42 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-31 00:24:42 --> after session initialization................
INFO  - 2014-01-31 00:24:42 --> the form message==>
INFO  - 2014-01-31 00:24:42 --> The session id is ========>487d56839132cfa6bd6e5c223ff97127 and the member id is =======>
INFO  - 2014-01-31 00:24:42 --> after the retrieving session list.................//////////
INFO  - 2014-01-31 00:24:42 --> The session id is ========>487d56839132cfa6bd6e5c223ff97127 and the member id is =======>
DEBUG - 2014-01-31 00:24:42 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-01-31 00:24:42 --> Final output sent to browser
DEBUG - 2014-01-31 00:24:42 --> Total execution time: 0.0468
DEBUG - 2014-01-31 00:24:44 --> Config Class Initialized
DEBUG - 2014-01-31 00:24:44 --> Hooks Class Initialized
DEBUG - 2014-01-31 00:24:44 --> Utf8 Class Initialized
DEBUG - 2014-01-31 00:24:44 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 00:24:44 --> URI Class Initialized
DEBUG - 2014-01-31 00:24:44 --> Router Class Initialized
DEBUG - 2014-01-31 00:24:44 --> Output Class Initialized
DEBUG - 2014-01-31 00:24:44 --> Security Class Initialized
DEBUG - 2014-01-31 00:24:44 --> Input Class Initialized
DEBUG - 2014-01-31 00:24:44 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-31 00:24:44 --> Language Class Initialized
DEBUG - 2014-01-31 00:24:44 --> Loader Class Initialized
DEBUG - 2014-01-31 00:24:44 --> Helper loaded: form_helper
DEBUG - 2014-01-31 00:24:44 --> Helper loaded: url_helper
DEBUG - 2014-01-31 00:24:44 --> Helper loaded: html_helper
DEBUG - 2014-01-31 00:24:44 --> Database Driver Class Initialized
DEBUG - 2014-01-31 00:24:44 --> Session Class Initialized
DEBUG - 2014-01-31 00:24:44 --> Helper loaded: string_helper
DEBUG - 2014-01-31 00:24:44 --> Session routines successfully run
DEBUG - 2014-01-31 00:24:44 --> Form Validation Class Initialized
DEBUG - 2014-01-31 00:24:44 --> Controller Class Initialized
DEBUG - 2014-01-31 00:24:44 --> Model Class Initialized
DEBUG - 2014-01-31 00:24:44 --> Model Class Initialized
DEBUG - 2014-01-31 00:24:44 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-31 00:24:44 --> after session initialization................
INFO  - 2014-01-31 00:24:44 --> after rays has been clicked.................
INFO  - 2014-01-31 00:24:44 --> last article id is 0
INFO  - 2014-01-31 00:24:44 --> The session id is ========>487d56839132cfa6bd6e5c223ff97127 and the member id is =======>
INFO  - 2014-01-31 00:24:44 --> The session id is ========>487d56839132cfa6bd6e5c223ff97127 and the member id is =======>
INFO  - 2014-01-31 00:24:44 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:44 --> 0 the guest only data>>>>>
INFO  - 2014-01-31 00:24:44 --> 0 the guest only data>> AFTER >>>#22
INFO  - 2014-01-31 00:24:44 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:44 --> 0 the guest only data>>>>>#22
INFO  - 2014-01-31 00:24:44 --> 0 the guest only data>> AFTER >>>#21
INFO  - 2014-01-31 00:24:44 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:44 --> 1 the guest only data>>>>>#21
INFO  - 2014-01-31 00:24:44 --> 1 the guest only data>> AFTER >>>#21
INFO  - 2014-01-31 00:24:44 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:44 --> 0 the guest only data>>>>>#21
INFO  - 2014-01-31 00:24:44 --> 0 the guest only data>> AFTER >>>#19
INFO  - 2014-01-31 00:24:44 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:44 --> 0 the guest only data>>>>>#19
INFO  - 2014-01-31 00:24:44 --> 0 the guest only data>> AFTER >>>#18
INFO  - 2014-01-31 00:24:44 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:44 --> 0 the guest only data>>>>>#18
INFO  - 2014-01-31 00:24:44 --> 0 the guest only data>> AFTER >>>#17
INFO  - 2014-01-31 00:24:44 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:44 --> 0 the guest only data>>>>>#17
INFO  - 2014-01-31 00:24:44 --> 0 the guest only data>> AFTER >>>#16
INFO  - 2014-01-31 00:24:44 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:44 --> 1 the guest only data>>>>>#16
INFO  - 2014-01-31 00:24:44 --> 1 the guest only data>> AFTER >>>#16
INFO  - 2014-01-31 00:24:44 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:44 --> 0 the guest only data>>>>>#16
INFO  - 2014-01-31 00:24:44 --> 0 the guest only data>> AFTER >>>#14
INFO  - 2014-01-31 00:24:44 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:44 --> 1 the guest only data>>>>>#14
INFO  - 2014-01-31 00:24:44 --> 1 the guest only data>> AFTER >>>#14
INFO  - 2014-01-31 00:24:44 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:44 --> 0 the guest only data>>>>>#14
INFO  - 2014-01-31 00:24:44 --> 0 the guest only data>> AFTER >>>#12
INFO  - 2014-01-31 00:24:44 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:44 --> 1 the guest only data>>>>>#12
INFO  - 2014-01-31 00:24:44 --> 1 the guest only data>> AFTER >>>#12
INFO  - 2014-01-31 00:24:44 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:44 --> 0 the guest only data>>>>>#12
INFO  - 2014-01-31 00:24:44 --> 0 the guest only data>> AFTER >>>#10
INFO  - 2014-01-31 00:24:44 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:44 --> 0 the guest only data>>>>>#10
INFO  - 2014-01-31 00:24:44 --> 0 the guest only data>> AFTER >>>#9
INFO  - 2014-01-31 00:24:44 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:44 --> 1 the guest only data>>>>>#9
INFO  - 2014-01-31 00:24:44 --> 1 the guest only data>> AFTER >>>#9
INFO  - 2014-01-31 00:24:44 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:44 --> 0 the guest only data>>>>>#9
INFO  - 2014-01-31 00:24:44 --> 0 the guest only data>> AFTER >>>#7
INFO  - 2014-01-31 00:24:44 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:44 --> 1 the guest only data>>>>>#7
INFO  - 2014-01-31 00:24:44 --> 1 the guest only data>> AFTER >>>#7
INFO  - 2014-01-31 00:24:44 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:44 --> 0 the guest only data>>>>>#7
INFO  - 2014-01-31 00:24:44 --> 0 the guest only data>> AFTER >>>#5
INFO  - 2014-01-31 00:24:44 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:44 --> 0 the guest only data>>>>>#5
INFO  - 2014-01-31 00:24:44 --> 0 the guest only data>> AFTER >>>#4
INFO  - 2014-01-31 00:24:44 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:24:44 --> 1 the guest only data>>>>>#4
INFO  - 2014-01-31 00:24:44 --> 1 the guest only data>> AFTER >>>#4
DEBUG - 2014-01-31 00:24:44 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2014-01-31 00:24:44 --> Final output sent to browser
DEBUG - 2014-01-31 00:24:44 --> Total execution time: 0.0780
DEBUG - 2014-01-31 00:24:46 --> Config Class Initialized
DEBUG - 2014-01-31 00:24:46 --> Hooks Class Initialized
DEBUG - 2014-01-31 00:24:46 --> Utf8 Class Initialized
DEBUG - 2014-01-31 00:24:46 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 00:24:46 --> URI Class Initialized
DEBUG - 2014-01-31 00:24:46 --> Router Class Initialized
DEBUG - 2014-01-31 00:24:46 --> Output Class Initialized
DEBUG - 2014-01-31 00:24:46 --> Security Class Initialized
DEBUG - 2014-01-31 00:24:46 --> Input Class Initialized
DEBUG - 2014-01-31 00:24:46 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-31 00:24:46 --> Language Class Initialized
DEBUG - 2014-01-31 00:24:46 --> Loader Class Initialized
DEBUG - 2014-01-31 00:24:46 --> Helper loaded: form_helper
DEBUG - 2014-01-31 00:24:46 --> Helper loaded: url_helper
DEBUG - 2014-01-31 00:24:46 --> Helper loaded: html_helper
DEBUG - 2014-01-31 00:24:46 --> Database Driver Class Initialized
DEBUG - 2014-01-31 00:24:46 --> Session Class Initialized
DEBUG - 2014-01-31 00:24:46 --> Helper loaded: string_helper
DEBUG - 2014-01-31 00:24:46 --> Session routines successfully run
DEBUG - 2014-01-31 00:24:46 --> Form Validation Class Initialized
DEBUG - 2014-01-31 00:24:46 --> Controller Class Initialized
DEBUG - 2014-01-31 00:24:46 --> Model Class Initialized
DEBUG - 2014-01-31 00:24:46 --> Model Class Initialized
DEBUG - 2014-01-31 00:24:46 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-31 00:24:46 --> after session initialization................
INFO  - 2014-01-31 00:24:46 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  ''
INFO  - 2014-01-31 00:24:46 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-01-31 00:24:46 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2014-01-31 00:24:46 --> inside retrieving vacancy for member
INFO  - 2014-01-31 00:24:46 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2014-01-31 00:24:46 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-01-31 00:24:46 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2014-01-31 00:24:46 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2014-01-31 00:24:46 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2014-01-31 00:24:46 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2014-01-31 00:24:46 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2014-01-31 00:24:46 --> inside retrieving pharmacy for drug id is 1
INFO  - 2014-01-31 00:24:46 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2014-01-31 00:24:46 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2014-01-31 00:24:46 --> The session id is ========>487d56839132cfa6bd6e5c223ff97127 and the member id is =======>
INFO  - 2014-01-31 00:24:46 -->  column name inside view is 0 column Data is Male Doctor
INFO  - 2014-01-31 00:24:46 -->  column name inside view is 1 column Data is Ordinary Member
DEBUG - 2014-01-31 00:24:46 --> File loaded: ../pharmaray-application/views/onlinepharmacy.php
DEBUG - 2014-01-31 00:24:46 --> Final output sent to browser
DEBUG - 2014-01-31 00:24:46 --> Total execution time: 0.0624
DEBUG - 2014-01-31 00:24:46 --> Config Class Initialized
DEBUG - 2014-01-31 00:24:46 --> Hooks Class Initialized
DEBUG - 2014-01-31 00:24:46 --> Utf8 Class Initialized
DEBUG - 2014-01-31 00:24:46 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 00:24:46 --> URI Class Initialized
DEBUG - 2014-01-31 00:24:46 --> Router Class Initialized
ERROR - 2014-01-31 00:24:46 --> 404 Page Not Found --> css
DEBUG - 2014-01-31 00:25:05 --> Config Class Initialized
DEBUG - 2014-01-31 00:25:05 --> Hooks Class Initialized
DEBUG - 2014-01-31 00:25:05 --> Utf8 Class Initialized
DEBUG - 2014-01-31 00:25:05 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 00:25:05 --> URI Class Initialized
DEBUG - 2014-01-31 00:25:05 --> Router Class Initialized
DEBUG - 2014-01-31 00:25:05 --> Output Class Initialized
DEBUG - 2014-01-31 00:25:05 --> Security Class Initialized
DEBUG - 2014-01-31 00:25:05 --> Input Class Initialized
DEBUG - 2014-01-31 00:25:05 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-31 00:25:05 --> Language Class Initialized
DEBUG - 2014-01-31 00:25:05 --> Loader Class Initialized
DEBUG - 2014-01-31 00:25:05 --> Helper loaded: form_helper
DEBUG - 2014-01-31 00:25:05 --> Helper loaded: url_helper
DEBUG - 2014-01-31 00:25:05 --> Helper loaded: html_helper
DEBUG - 2014-01-31 00:25:05 --> Database Driver Class Initialized
DEBUG - 2014-01-31 00:25:05 --> Session Class Initialized
DEBUG - 2014-01-31 00:25:05 --> Helper loaded: string_helper
DEBUG - 2014-01-31 00:25:05 --> Session routines successfully run
DEBUG - 2014-01-31 00:25:05 --> Form Validation Class Initialized
DEBUG - 2014-01-31 00:25:05 --> Controller Class Initialized
DEBUG - 2014-01-31 00:25:05 --> Model Class Initialized
DEBUG - 2014-01-31 00:25:05 --> Model Class Initialized
DEBUG - 2014-01-31 00:25:05 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-31 00:25:05 --> after session initialization................
INFO  - 2014-01-31 00:25:05 --> after community pharmacy  has been clicked.................
INFO  - 2014-01-31 00:25:05 --> inside retrieving pharmacy beyond id 0
INFO  - 2014-01-31 00:25:05 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2014-01-31 00:25:05 --> inside retrieving locations 
INFO  - 2014-01-31 00:25:05 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
INFO  - 2014-01-31 00:25:05 --> The session id is ========>487d56839132cfa6bd6e5c223ff97127 and the member id is =======>
DEBUG - 2014-01-31 00:25:05 --> File loaded: ../pharmaray-application/views/guestcommunitypharmacy.php
DEBUG - 2014-01-31 00:25:05 --> Final output sent to browser
DEBUG - 2014-01-31 00:25:05 --> Total execution time: 0.0468
DEBUG - 2014-01-31 00:25:08 --> Config Class Initialized
DEBUG - 2014-01-31 00:25:08 --> Hooks Class Initialized
DEBUG - 2014-01-31 00:25:08 --> Utf8 Class Initialized
DEBUG - 2014-01-31 00:25:08 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 00:25:08 --> URI Class Initialized
DEBUG - 2014-01-31 00:25:08 --> Router Class Initialized
DEBUG - 2014-01-31 00:25:08 --> Output Class Initialized
DEBUG - 2014-01-31 00:25:08 --> Security Class Initialized
DEBUG - 2014-01-31 00:25:08 --> Input Class Initialized
DEBUG - 2014-01-31 00:25:08 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-31 00:25:08 --> Language Class Initialized
DEBUG - 2014-01-31 00:25:08 --> Loader Class Initialized
DEBUG - 2014-01-31 00:25:08 --> Helper loaded: form_helper
DEBUG - 2014-01-31 00:25:08 --> Helper loaded: url_helper
DEBUG - 2014-01-31 00:25:08 --> Helper loaded: html_helper
DEBUG - 2014-01-31 00:25:08 --> Database Driver Class Initialized
DEBUG - 2014-01-31 00:25:08 --> Session Class Initialized
DEBUG - 2014-01-31 00:25:08 --> Helper loaded: string_helper
DEBUG - 2014-01-31 00:25:08 --> Session routines successfully run
DEBUG - 2014-01-31 00:25:08 --> Form Validation Class Initialized
DEBUG - 2014-01-31 00:25:08 --> Controller Class Initialized
DEBUG - 2014-01-31 00:25:08 --> Model Class Initialized
DEBUG - 2014-01-31 00:25:08 --> Model Class Initialized
DEBUG - 2014-01-31 00:25:08 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-31 00:25:08 --> after session initialization................
INFO  - 2014-01-31 00:25:08 --> after community pharmacy  has been clicked.................
INFO  - 2014-01-31 00:25:08 --> inside retrieving pharmacy beyond id 0
INFO  - 2014-01-31 00:25:08 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2014-01-31 00:25:08 --> inside retrieving locations 
INFO  - 2014-01-31 00:25:08 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
INFO  - 2014-01-31 00:25:08 --> The session id is ========>487d56839132cfa6bd6e5c223ff97127 and the member id is =======>
DEBUG - 2014-01-31 00:25:08 --> File loaded: ../pharmaray-application/views/guestcommunitypharmacy.php
DEBUG - 2014-01-31 00:25:08 --> Final output sent to browser
DEBUG - 2014-01-31 00:25:08 --> Total execution time: 0.0468
DEBUG - 2014-01-31 00:30:25 --> Config Class Initialized
DEBUG - 2014-01-31 00:30:25 --> Hooks Class Initialized
DEBUG - 2014-01-31 00:30:25 --> Utf8 Class Initialized
DEBUG - 2014-01-31 00:30:25 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 00:30:25 --> URI Class Initialized
DEBUG - 2014-01-31 00:30:25 --> Router Class Initialized
DEBUG - 2014-01-31 00:30:25 --> Output Class Initialized
DEBUG - 2014-01-31 00:30:25 --> Security Class Initialized
DEBUG - 2014-01-31 00:30:25 --> Input Class Initialized
DEBUG - 2014-01-31 00:30:25 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-31 00:30:25 --> Language Class Initialized
DEBUG - 2014-01-31 00:30:25 --> Loader Class Initialized
DEBUG - 2014-01-31 00:30:25 --> Helper loaded: form_helper
DEBUG - 2014-01-31 00:30:25 --> Helper loaded: url_helper
DEBUG - 2014-01-31 00:30:25 --> Helper loaded: html_helper
DEBUG - 2014-01-31 00:30:25 --> Database Driver Class Initialized
DEBUG - 2014-01-31 00:30:25 --> Session Class Initialized
DEBUG - 2014-01-31 00:30:25 --> Helper loaded: string_helper
DEBUG - 2014-01-31 00:30:25 --> Session routines successfully run
DEBUG - 2014-01-31 00:30:25 --> Form Validation Class Initialized
DEBUG - 2014-01-31 00:30:25 --> Controller Class Initialized
DEBUG - 2014-01-31 00:30:25 --> Model Class Initialized
DEBUG - 2014-01-31 00:30:25 --> Model Class Initialized
DEBUG - 2014-01-31 00:30:25 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-31 00:30:25 --> after session initialization................
INFO  - 2014-01-31 00:30:25 --> the form message==>
INFO  - 2014-01-31 00:30:25 --> The session id is ========>ded1fa1882c56cadc4d7f24b25868756 and the member id is =======>
INFO  - 2014-01-31 00:30:25 --> after the retrieving session list.................//////////
INFO  - 2014-01-31 00:30:25 --> The session id is ========>ded1fa1882c56cadc4d7f24b25868756 and the member id is =======>
DEBUG - 2014-01-31 00:30:25 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-01-31 00:30:25 --> Final output sent to browser
DEBUG - 2014-01-31 00:30:25 --> Total execution time: 0.0312
DEBUG - 2014-01-31 00:30:33 --> Config Class Initialized
DEBUG - 2014-01-31 00:30:33 --> Hooks Class Initialized
DEBUG - 2014-01-31 00:30:33 --> Utf8 Class Initialized
DEBUG - 2014-01-31 00:30:33 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 00:30:33 --> URI Class Initialized
DEBUG - 2014-01-31 00:30:33 --> Router Class Initialized
DEBUG - 2014-01-31 00:30:33 --> Output Class Initialized
DEBUG - 2014-01-31 00:30:33 --> Security Class Initialized
DEBUG - 2014-01-31 00:30:33 --> Input Class Initialized
DEBUG - 2014-01-31 00:30:33 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-31 00:30:33 --> Language Class Initialized
DEBUG - 2014-01-31 00:30:33 --> Loader Class Initialized
DEBUG - 2014-01-31 00:30:33 --> Helper loaded: form_helper
DEBUG - 2014-01-31 00:30:33 --> Helper loaded: url_helper
DEBUG - 2014-01-31 00:30:33 --> Helper loaded: html_helper
DEBUG - 2014-01-31 00:30:33 --> Database Driver Class Initialized
DEBUG - 2014-01-31 00:30:33 --> Session Class Initialized
DEBUG - 2014-01-31 00:30:33 --> Helper loaded: string_helper
DEBUG - 2014-01-31 00:30:33 --> Session routines successfully run
DEBUG - 2014-01-31 00:30:33 --> Form Validation Class Initialized
DEBUG - 2014-01-31 00:30:33 --> Controller Class Initialized
DEBUG - 2014-01-31 00:30:33 --> Model Class Initialized
DEBUG - 2014-01-31 00:30:33 --> Model Class Initialized
DEBUG - 2014-01-31 00:30:33 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-31 00:30:33 --> after session initialization................
INFO  - 2014-01-31 00:30:33 --> inside rays login auth.............
DEBUG - 2014-01-31 00:30:33 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2014-01-31 00:30:33 --> XSS Filtering completed
INFO  - 2014-01-31 00:30:33 --> inside rays login auth.............sys_admin/user_authorization/redirecttosignin
DEBUG - 2014-01-31 00:30:33 --> Config Class Initialized
DEBUG - 2014-01-31 00:30:33 --> Hooks Class Initialized
DEBUG - 2014-01-31 00:30:33 --> Utf8 Class Initialized
DEBUG - 2014-01-31 00:30:33 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 00:30:33 --> URI Class Initialized
DEBUG - 2014-01-31 00:30:33 --> Router Class Initialized
DEBUG - 2014-01-31 00:30:33 --> Output Class Initialized
DEBUG - 2014-01-31 00:30:33 --> Security Class Initialized
DEBUG - 2014-01-31 00:30:33 --> Input Class Initialized
DEBUG - 2014-01-31 00:30:33 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-31 00:30:33 --> Language Class Initialized
DEBUG - 2014-01-31 00:30:33 --> Loader Class Initialized
DEBUG - 2014-01-31 00:30:33 --> Helper loaded: form_helper
DEBUG - 2014-01-31 00:30:33 --> Helper loaded: url_helper
DEBUG - 2014-01-31 00:30:33 --> Helper loaded: html_helper
DEBUG - 2014-01-31 00:30:33 --> Database Driver Class Initialized
DEBUG - 2014-01-31 00:30:33 --> Session Class Initialized
DEBUG - 2014-01-31 00:30:33 --> Helper loaded: string_helper
DEBUG - 2014-01-31 00:30:33 --> Session routines successfully run
DEBUG - 2014-01-31 00:30:33 --> Form Validation Class Initialized
DEBUG - 2014-01-31 00:30:33 --> Controller Class Initialized
DEBUG - 2014-01-31 00:30:33 --> Model Class Initialized
DEBUG - 2014-01-31 00:30:33 --> Model Class Initialized
DEBUG - 2014-01-31 00:30:33 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-31 00:30:33 --> after session initialization................
INFO  - 2014-01-31 00:30:33 --> the form message==>
INFO  - 2014-01-31 00:30:33 --> The session id is ========>ded1fa1882c56cadc4d7f24b25868756 and the member id is =======>
INFO  - 2014-01-31 00:30:33 --> after the retrieving session list.................//////////
INFO  - 2014-01-31 00:30:33 --> The session id is ========>ded1fa1882c56cadc4d7f24b25868756 and the member id is =======>
DEBUG - 2014-01-31 00:30:34 --> File loaded: ../pharmaray-application/views/signin.php
DEBUG - 2014-01-31 00:30:34 --> Final output sent to browser
DEBUG - 2014-01-31 00:30:34 --> Total execution time: 0.0624
DEBUG - 2014-01-31 00:30:46 --> Config Class Initialized
DEBUG - 2014-01-31 00:30:46 --> Hooks Class Initialized
DEBUG - 2014-01-31 00:30:46 --> Utf8 Class Initialized
DEBUG - 2014-01-31 00:30:46 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 00:30:46 --> URI Class Initialized
DEBUG - 2014-01-31 00:30:46 --> Router Class Initialized
DEBUG - 2014-01-31 00:30:46 --> Output Class Initialized
DEBUG - 2014-01-31 00:30:46 --> Security Class Initialized
DEBUG - 2014-01-31 00:30:46 --> Input Class Initialized
DEBUG - 2014-01-31 00:30:46 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-31 00:30:46 --> Language Class Initialized
DEBUG - 2014-01-31 00:30:46 --> Loader Class Initialized
DEBUG - 2014-01-31 00:30:46 --> Helper loaded: form_helper
DEBUG - 2014-01-31 00:30:46 --> Helper loaded: url_helper
DEBUG - 2014-01-31 00:30:46 --> Helper loaded: html_helper
DEBUG - 2014-01-31 00:30:46 --> Database Driver Class Initialized
DEBUG - 2014-01-31 00:30:46 --> Session Class Initialized
DEBUG - 2014-01-31 00:30:46 --> Helper loaded: string_helper
DEBUG - 2014-01-31 00:30:46 --> Session routines successfully run
DEBUG - 2014-01-31 00:30:46 --> Form Validation Class Initialized
DEBUG - 2014-01-31 00:30:46 --> Controller Class Initialized
DEBUG - 2014-01-31 00:30:46 --> Model Class Initialized
DEBUG - 2014-01-31 00:30:46 --> Model Class Initialized
DEBUG - 2014-01-31 00:30:46 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-31 00:30:46 --> after session initialization................
INFO  - 2014-01-31 00:30:46 --> inside rays login auth.............
DEBUG - 2014-01-31 00:30:46 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2014-01-31 00:30:46 --> XSS Filtering completed
DEBUG - 2014-01-31 00:30:46 --> XSS Filtering completed
INFO  - 2014-01-31 00:30:46 --> before getting the relation of member............18
INFO  - 2014-01-31 00:30:46 --> registration complete and username set on userpage.................onwuzu
INFO  - 2014-01-31 00:30:46 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  '18'
INFO  - 2014-01-31 00:30:46 --> last news id is 0
INFO  - 2014-01-31 00:30:46 --> SELECT a.id_article as id, a.title as newsletter_title, a.description as newsletter_description, a.guestonly as guestonly, a.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`article` a)
JOIN `member` m ON `a`.`memberid_member` = `m`.`id_member`
WHERE `a`.`id_article` <> 0
ORDER BY `a`.`id_article` desc
LIMIT 15
INFO  - 2014-01-31 00:30:46 --> after newsleters list has been clicked.................
INFO  - 2014-01-31 00:30:46 --> The session id is ========>ded1fa1882c56cadc4d7f24b25868756 and the member id is =======>18
INFO  - 2014-01-31 00:30:46 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=22&article_type=newsletter_title
INFO  - 2014-01-31 00:30:46 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=21&article_type=newsletter_title
INFO  - 2014-01-31 00:30:46 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=20&article_type=newsletter_title
INFO  - 2014-01-31 00:30:46 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=19&article_type=newsletter_title
INFO  - 2014-01-31 00:30:46 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=18&article_type=newsletter_title
INFO  - 2014-01-31 00:30:46 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=17&article_type=newsletter_title
INFO  - 2014-01-31 00:30:46 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=16&article_type=newsletter_title
INFO  - 2014-01-31 00:30:46 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=15&article_type=newsletter_title
INFO  - 2014-01-31 00:30:46 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=14&article_type=newsletter_title
INFO  - 2014-01-31 00:30:46 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=13&article_type=newsletter_title
INFO  - 2014-01-31 00:30:46 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=12&article_type=newsletter_title
INFO  - 2014-01-31 00:30:46 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=11&article_type=newsletter_title
INFO  - 2014-01-31 00:30:46 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=10&article_type=newsletter_title
INFO  - 2014-01-31 00:30:46 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=9&article_type=newsletter_title
INFO  - 2014-01-31 00:30:46 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=8&article_type=newsletter_title
DEBUG - 2014-01-31 00:30:46 --> File loaded: ../pharmaray-application/views/articles.php
DEBUG - 2014-01-31 00:30:46 --> Final output sent to browser
DEBUG - 2014-01-31 00:30:46 --> Total execution time: 0.0780
DEBUG - 2014-01-31 00:30:50 --> Config Class Initialized
DEBUG - 2014-01-31 00:30:50 --> Hooks Class Initialized
DEBUG - 2014-01-31 00:30:50 --> Utf8 Class Initialized
DEBUG - 2014-01-31 00:30:50 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 00:30:50 --> URI Class Initialized
DEBUG - 2014-01-31 00:30:50 --> Router Class Initialized
DEBUG - 2014-01-31 00:30:50 --> Output Class Initialized
DEBUG - 2014-01-31 00:30:50 --> Security Class Initialized
DEBUG - 2014-01-31 00:30:50 --> Input Class Initialized
DEBUG - 2014-01-31 00:30:50 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-31 00:30:50 --> Language Class Initialized
DEBUG - 2014-01-31 00:30:50 --> Loader Class Initialized
DEBUG - 2014-01-31 00:30:50 --> Helper loaded: form_helper
DEBUG - 2014-01-31 00:30:50 --> Helper loaded: url_helper
DEBUG - 2014-01-31 00:30:50 --> Helper loaded: html_helper
DEBUG - 2014-01-31 00:30:50 --> Database Driver Class Initialized
DEBUG - 2014-01-31 00:30:50 --> Session Class Initialized
DEBUG - 2014-01-31 00:30:50 --> Helper loaded: string_helper
DEBUG - 2014-01-31 00:30:50 --> Session routines successfully run
DEBUG - 2014-01-31 00:30:50 --> Form Validation Class Initialized
DEBUG - 2014-01-31 00:30:50 --> Controller Class Initialized
DEBUG - 2014-01-31 00:30:50 --> Model Class Initialized
DEBUG - 2014-01-31 00:30:50 --> Model Class Initialized
DEBUG - 2014-01-31 00:30:50 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-31 00:30:50 --> after session initialization................
INFO  - 2014-01-31 00:30:50 --> after community pharmacy  has been clicked.................
INFO  - 2014-01-31 00:30:50 --> inside retrieving pharmacy beyond id 0
INFO  - 2014-01-31 00:30:50 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2014-01-31 00:30:50 --> inside retrieving locations 
INFO  - 2014-01-31 00:30:50 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
INFO  - 2014-01-31 00:30:50 --> The session id is ========>ded1fa1882c56cadc4d7f24b25868756 and the member id is =======>18
DEBUG - 2014-01-31 00:30:50 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2014-01-31 00:30:50 --> Final output sent to browser
DEBUG - 2014-01-31 00:30:50 --> Total execution time: 0.0468
DEBUG - 2014-01-31 00:36:00 --> Config Class Initialized
DEBUG - 2014-01-31 00:36:00 --> Hooks Class Initialized
DEBUG - 2014-01-31 00:36:00 --> Utf8 Class Initialized
DEBUG - 2014-01-31 00:36:00 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 00:36:00 --> URI Class Initialized
DEBUG - 2014-01-31 00:36:00 --> Router Class Initialized
DEBUG - 2014-01-31 00:36:00 --> Output Class Initialized
DEBUG - 2014-01-31 00:36:00 --> Security Class Initialized
DEBUG - 2014-01-31 00:36:00 --> Input Class Initialized
DEBUG - 2014-01-31 00:36:00 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-31 00:36:00 --> Language Class Initialized
DEBUG - 2014-01-31 00:36:00 --> Loader Class Initialized
DEBUG - 2014-01-31 00:36:00 --> Helper loaded: form_helper
DEBUG - 2014-01-31 00:36:00 --> Helper loaded: url_helper
DEBUG - 2014-01-31 00:36:00 --> Helper loaded: html_helper
DEBUG - 2014-01-31 00:36:00 --> Database Driver Class Initialized
DEBUG - 2014-01-31 00:36:00 --> Session Class Initialized
DEBUG - 2014-01-31 00:36:00 --> Helper loaded: string_helper
DEBUG - 2014-01-31 00:36:00 --> Session routines successfully run
DEBUG - 2014-01-31 00:36:00 --> Form Validation Class Initialized
DEBUG - 2014-01-31 00:36:00 --> Controller Class Initialized
DEBUG - 2014-01-31 00:36:00 --> Model Class Initialized
DEBUG - 2014-01-31 00:36:00 --> Model Class Initialized
DEBUG - 2014-01-31 00:36:00 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-31 00:36:00 --> after session initialization................
DEBUG - 2014-01-31 00:36:00 --> Config Class Initialized
DEBUG - 2014-01-31 00:36:00 --> Hooks Class Initialized
DEBUG - 2014-01-31 00:36:00 --> Utf8 Class Initialized
DEBUG - 2014-01-31 00:36:00 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 00:36:00 --> URI Class Initialized
DEBUG - 2014-01-31 00:36:00 --> Router Class Initialized
DEBUG - 2014-01-31 00:36:00 --> No URI present. Default controller set.
DEBUG - 2014-01-31 00:36:00 --> Output Class Initialized
DEBUG - 2014-01-31 00:36:00 --> Security Class Initialized
DEBUG - 2014-01-31 00:36:00 --> Input Class Initialized
DEBUG - 2014-01-31 00:36:00 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-31 00:36:00 --> Language Class Initialized
DEBUG - 2014-01-31 00:36:00 --> Loader Class Initialized
DEBUG - 2014-01-31 00:36:00 --> Helper loaded: form_helper
DEBUG - 2014-01-31 00:36:00 --> Helper loaded: url_helper
DEBUG - 2014-01-31 00:36:00 --> Helper loaded: html_helper
DEBUG - 2014-01-31 00:36:00 --> Database Driver Class Initialized
DEBUG - 2014-01-31 00:36:00 --> Session Class Initialized
DEBUG - 2014-01-31 00:36:00 --> Helper loaded: string_helper
DEBUG - 2014-01-31 00:36:00 --> A session cookie was not found.
DEBUG - 2014-01-31 00:36:00 --> Session routines successfully run
DEBUG - 2014-01-31 00:36:00 --> Form Validation Class Initialized
DEBUG - 2014-01-31 00:36:00 --> Controller Class Initialized
DEBUG - 2014-01-31 00:36:00 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2014-01-31 00:36:00 --> Final output sent to browser
DEBUG - 2014-01-31 00:36:00 --> Total execution time: 0.0468
DEBUG - 2014-01-31 00:36:00 --> Config Class Initialized
DEBUG - 2014-01-31 00:36:00 --> Hooks Class Initialized
DEBUG - 2014-01-31 00:36:00 --> Utf8 Class Initialized
DEBUG - 2014-01-31 00:36:00 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 00:36:00 --> URI Class Initialized
DEBUG - 2014-01-31 00:36:00 --> Router Class Initialized
DEBUG - 2014-01-31 00:36:00 --> Output Class Initialized
DEBUG - 2014-01-31 00:36:00 --> Security Class Initialized
DEBUG - 2014-01-31 00:36:00 --> Input Class Initialized
DEBUG - 2014-01-31 00:36:00 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-31 00:36:00 --> Language Class Initialized
DEBUG - 2014-01-31 00:36:01 --> Loader Class Initialized
DEBUG - 2014-01-31 00:36:01 --> Helper loaded: form_helper
DEBUG - 2014-01-31 00:36:01 --> Helper loaded: url_helper
DEBUG - 2014-01-31 00:36:01 --> Helper loaded: html_helper
DEBUG - 2014-01-31 00:36:01 --> Database Driver Class Initialized
DEBUG - 2014-01-31 00:36:01 --> Session Class Initialized
DEBUG - 2014-01-31 00:36:01 --> Helper loaded: string_helper
DEBUG - 2014-01-31 00:36:01 --> Session routines successfully run
DEBUG - 2014-01-31 00:36:01 --> Form Validation Class Initialized
DEBUG - 2014-01-31 00:36:01 --> Controller Class Initialized
DEBUG - 2014-01-31 00:36:01 --> Model Class Initialized
DEBUG - 2014-01-31 00:36:01 --> Model Class Initialized
DEBUG - 2014-01-31 00:36:01 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-31 00:36:01 --> after session initialization................
INFO  - 2014-01-31 00:36:01 --> after rays has been clicked.................
INFO  - 2014-01-31 00:36:01 --> last article id is 0
INFO  - 2014-01-31 00:36:01 --> The session id is ========>529f212b5f6b7a2f5dfac4049d672fcf and the member id is =======>
INFO  - 2014-01-31 00:36:01 --> The session id is ========>529f212b5f6b7a2f5dfac4049d672fcf and the member id is =======>
INFO  - 2014-01-31 00:36:01 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:36:01 --> 0 the guest only data>>>>>
INFO  - 2014-01-31 00:36:01 --> 0 the guest only data>> AFTER >>>#22
INFO  - 2014-01-31 00:36:01 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:36:01 --> 0 the guest only data>>>>>#22
INFO  - 2014-01-31 00:36:01 --> 0 the guest only data>> AFTER >>>#21
INFO  - 2014-01-31 00:36:01 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:36:01 --> 1 the guest only data>>>>>#21
INFO  - 2014-01-31 00:36:01 --> 1 the guest only data>> AFTER >>>#21
INFO  - 2014-01-31 00:36:01 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:36:01 --> 0 the guest only data>>>>>#21
INFO  - 2014-01-31 00:36:01 --> 0 the guest only data>> AFTER >>>#19
INFO  - 2014-01-31 00:36:01 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:36:01 --> 0 the guest only data>>>>>#19
INFO  - 2014-01-31 00:36:01 --> 0 the guest only data>> AFTER >>>#18
INFO  - 2014-01-31 00:36:01 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:36:01 --> 0 the guest only data>>>>>#18
INFO  - 2014-01-31 00:36:01 --> 0 the guest only data>> AFTER >>>#17
INFO  - 2014-01-31 00:36:01 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:36:01 --> 0 the guest only data>>>>>#17
INFO  - 2014-01-31 00:36:01 --> 0 the guest only data>> AFTER >>>#16
INFO  - 2014-01-31 00:36:01 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:36:01 --> 1 the guest only data>>>>>#16
INFO  - 2014-01-31 00:36:01 --> 1 the guest only data>> AFTER >>>#16
INFO  - 2014-01-31 00:36:01 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:36:01 --> 0 the guest only data>>>>>#16
INFO  - 2014-01-31 00:36:01 --> 0 the guest only data>> AFTER >>>#14
INFO  - 2014-01-31 00:36:01 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:36:01 --> 1 the guest only data>>>>>#14
INFO  - 2014-01-31 00:36:01 --> 1 the guest only data>> AFTER >>>#14
INFO  - 2014-01-31 00:36:01 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:36:01 --> 0 the guest only data>>>>>#14
INFO  - 2014-01-31 00:36:01 --> 0 the guest only data>> AFTER >>>#12
INFO  - 2014-01-31 00:36:01 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:36:01 --> 1 the guest only data>>>>>#12
INFO  - 2014-01-31 00:36:01 --> 1 the guest only data>> AFTER >>>#12
INFO  - 2014-01-31 00:36:01 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:36:01 --> 0 the guest only data>>>>>#12
INFO  - 2014-01-31 00:36:01 --> 0 the guest only data>> AFTER >>>#10
INFO  - 2014-01-31 00:36:01 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:36:01 --> 0 the guest only data>>>>>#10
INFO  - 2014-01-31 00:36:01 --> 0 the guest only data>> AFTER >>>#9
INFO  - 2014-01-31 00:36:01 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:36:01 --> 1 the guest only data>>>>>#9
INFO  - 2014-01-31 00:36:01 --> 1 the guest only data>> AFTER >>>#9
INFO  - 2014-01-31 00:36:01 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:36:01 --> 0 the guest only data>>>>>#9
INFO  - 2014-01-31 00:36:01 --> 0 the guest only data>> AFTER >>>#7
INFO  - 2014-01-31 00:36:01 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:36:01 --> 1 the guest only data>>>>>#7
INFO  - 2014-01-31 00:36:01 --> 1 the guest only data>> AFTER >>>#7
INFO  - 2014-01-31 00:36:01 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:36:01 --> 0 the guest only data>>>>>#7
INFO  - 2014-01-31 00:36:01 --> 0 the guest only data>> AFTER >>>#5
INFO  - 2014-01-31 00:36:01 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:36:01 --> 0 the guest only data>>>>>#5
INFO  - 2014-01-31 00:36:01 --> 0 the guest only data>> AFTER >>>#4
INFO  - 2014-01-31 00:36:01 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:36:01 --> 1 the guest only data>>>>>#4
INFO  - 2014-01-31 00:36:01 --> 1 the guest only data>> AFTER >>>#4
DEBUG - 2014-01-31 00:36:01 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2014-01-31 00:36:01 --> Final output sent to browser
DEBUG - 2014-01-31 00:36:01 --> Total execution time: 0.0780
DEBUG - 2014-01-31 00:36:12 --> Config Class Initialized
DEBUG - 2014-01-31 00:36:12 --> Hooks Class Initialized
DEBUG - 2014-01-31 00:36:12 --> Utf8 Class Initialized
DEBUG - 2014-01-31 00:36:12 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 00:36:12 --> URI Class Initialized
DEBUG - 2014-01-31 00:36:12 --> Router Class Initialized
DEBUG - 2014-01-31 00:36:12 --> Output Class Initialized
DEBUG - 2014-01-31 00:36:12 --> Security Class Initialized
DEBUG - 2014-01-31 00:36:12 --> Input Class Initialized
DEBUG - 2014-01-31 00:36:12 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-31 00:36:12 --> Language Class Initialized
DEBUG - 2014-01-31 00:36:12 --> Loader Class Initialized
DEBUG - 2014-01-31 00:36:12 --> Helper loaded: form_helper
DEBUG - 2014-01-31 00:36:12 --> Helper loaded: url_helper
DEBUG - 2014-01-31 00:36:12 --> Helper loaded: html_helper
DEBUG - 2014-01-31 00:36:12 --> Database Driver Class Initialized
DEBUG - 2014-01-31 00:36:12 --> Session Class Initialized
DEBUG - 2014-01-31 00:36:12 --> Helper loaded: string_helper
DEBUG - 2014-01-31 00:36:12 --> Session routines successfully run
DEBUG - 2014-01-31 00:36:12 --> Form Validation Class Initialized
DEBUG - 2014-01-31 00:36:12 --> Controller Class Initialized
DEBUG - 2014-01-31 00:36:12 --> Model Class Initialized
DEBUG - 2014-01-31 00:36:12 --> Model Class Initialized
DEBUG - 2014-01-31 00:36:12 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-31 00:36:12 --> after session initialization................
INFO  - 2014-01-31 00:36:12 --> inside rays login auth.............sys_admin/user_authorization/redirecttorays
INFO  - 2014-01-31 00:36:12 --> inside rays login auth.............sys_admin/user_authorization/redirecttorays
DEBUG - 2014-01-31 00:36:12 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2014-01-31 00:36:12 --> XSS Filtering completed
DEBUG - 2014-01-31 00:36:12 --> XSS Filtering completed
INFO  - 2014-01-31 00:36:12 --> before getting the relation of member............18
INFO  - 2014-01-31 00:36:12 --> registration complete and username set on userpage.................onwuzu
INFO  - 2014-01-31 00:36:12 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  '18'
INFO  - 2014-01-31 00:36:12 --> last news id is 0
INFO  - 2014-01-31 00:36:12 --> SELECT a.id_article as id, a.title as newsletter_title, a.description as newsletter_description, a.guestonly as guestonly, a.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`article` a)
JOIN `member` m ON `a`.`memberid_member` = `m`.`id_member`
WHERE `a`.`id_article` <> 0
ORDER BY `a`.`id_article` desc
LIMIT 15
INFO  - 2014-01-31 00:36:12 --> after newsleters list has been clicked.................
INFO  - 2014-01-31 00:36:12 --> The session id is ========>529f212b5f6b7a2f5dfac4049d672fcf and the member id is =======>18
INFO  - 2014-01-31 00:36:12 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=22&article_type=newsletter_title
INFO  - 2014-01-31 00:36:12 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=21&article_type=newsletter_title
INFO  - 2014-01-31 00:36:12 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=20&article_type=newsletter_title
INFO  - 2014-01-31 00:36:12 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=19&article_type=newsletter_title
INFO  - 2014-01-31 00:36:12 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=18&article_type=newsletter_title
INFO  - 2014-01-31 00:36:12 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=17&article_type=newsletter_title
INFO  - 2014-01-31 00:36:12 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=16&article_type=newsletter_title
INFO  - 2014-01-31 00:36:12 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=15&article_type=newsletter_title
INFO  - 2014-01-31 00:36:12 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=14&article_type=newsletter_title
INFO  - 2014-01-31 00:36:12 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=13&article_type=newsletter_title
INFO  - 2014-01-31 00:36:12 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=12&article_type=newsletter_title
INFO  - 2014-01-31 00:36:12 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=11&article_type=newsletter_title
INFO  - 2014-01-31 00:36:12 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=10&article_type=newsletter_title
INFO  - 2014-01-31 00:36:12 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=9&article_type=newsletter_title
INFO  - 2014-01-31 00:36:12 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=8&article_type=newsletter_title
DEBUG - 2014-01-31 00:36:12 --> File loaded: ../pharmaray-application/views/articles.php
DEBUG - 2014-01-31 00:36:12 --> Final output sent to browser
DEBUG - 2014-01-31 00:36:12 --> Total execution time: 0.0624
DEBUG - 2014-01-31 00:36:14 --> Config Class Initialized
DEBUG - 2014-01-31 00:36:14 --> Hooks Class Initialized
DEBUG - 2014-01-31 00:36:14 --> Utf8 Class Initialized
DEBUG - 2014-01-31 00:36:14 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 00:36:14 --> URI Class Initialized
DEBUG - 2014-01-31 00:36:14 --> Router Class Initialized
DEBUG - 2014-01-31 00:36:14 --> Output Class Initialized
DEBUG - 2014-01-31 00:36:14 --> Security Class Initialized
DEBUG - 2014-01-31 00:36:14 --> Input Class Initialized
DEBUG - 2014-01-31 00:36:14 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-31 00:36:14 --> Language Class Initialized
DEBUG - 2014-01-31 00:36:14 --> Loader Class Initialized
DEBUG - 2014-01-31 00:36:14 --> Helper loaded: form_helper
DEBUG - 2014-01-31 00:36:14 --> Helper loaded: url_helper
DEBUG - 2014-01-31 00:36:14 --> Helper loaded: html_helper
DEBUG - 2014-01-31 00:36:14 --> Database Driver Class Initialized
DEBUG - 2014-01-31 00:36:14 --> Session Class Initialized
DEBUG - 2014-01-31 00:36:14 --> Helper loaded: string_helper
DEBUG - 2014-01-31 00:36:14 --> Session routines successfully run
DEBUG - 2014-01-31 00:36:14 --> Form Validation Class Initialized
DEBUG - 2014-01-31 00:36:14 --> Controller Class Initialized
DEBUG - 2014-01-31 00:36:14 --> Model Class Initialized
DEBUG - 2014-01-31 00:36:14 --> Model Class Initialized
DEBUG - 2014-01-31 00:36:14 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-31 00:36:14 --> after session initialization................
INFO  - 2014-01-31 00:36:14 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  '18'
INFO  - 2014-01-31 00:36:14 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-01-31 00:36:14 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2014-01-31 00:36:14 --> inside retrieving vacancy for member
INFO  - 2014-01-31 00:36:14 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2014-01-31 00:36:14 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-01-31 00:36:14 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2014-01-31 00:36:14 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2014-01-31 00:36:14 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2014-01-31 00:36:14 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2014-01-31 00:36:14 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2014-01-31 00:36:14 --> inside retrieving pharmacy for drug id is 1
INFO  - 2014-01-31 00:36:14 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2014-01-31 00:36:14 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2014-01-31 00:36:14 --> The session id is ========>529f212b5f6b7a2f5dfac4049d672fcf and the member id is =======>18
INFO  - 2014-01-31 00:36:14 -->  column name inside view is 0 column Data is Male Doctor
INFO  - 2014-01-31 00:36:14 -->  column name inside view is 1 column Data is Ordinary Member
DEBUG - 2014-01-31 00:36:14 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2014-01-31 00:36:14 --> Final output sent to browser
DEBUG - 2014-01-31 00:36:14 --> Total execution time: 0.0780
DEBUG - 2014-01-31 00:36:15 --> Config Class Initialized
DEBUG - 2014-01-31 00:36:15 --> Hooks Class Initialized
DEBUG - 2014-01-31 00:36:15 --> Utf8 Class Initialized
DEBUG - 2014-01-31 00:36:15 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 00:36:15 --> URI Class Initialized
DEBUG - 2014-01-31 00:36:15 --> Router Class Initialized
ERROR - 2014-01-31 00:36:15 --> 404 Page Not Found --> css
DEBUG - 2014-01-31 00:36:15 --> Config Class Initialized
DEBUG - 2014-01-31 00:36:15 --> Hooks Class Initialized
DEBUG - 2014-01-31 00:36:15 --> Utf8 Class Initialized
DEBUG - 2014-01-31 00:36:15 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 00:36:15 --> URI Class Initialized
DEBUG - 2014-01-31 00:36:15 --> Router Class Initialized
DEBUG - 2014-01-31 00:36:15 --> Output Class Initialized
DEBUG - 2014-01-31 00:36:15 --> Security Class Initialized
DEBUG - 2014-01-31 00:36:15 --> Input Class Initialized
DEBUG - 2014-01-31 00:36:15 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-31 00:36:15 --> Language Class Initialized
DEBUG - 2014-01-31 00:36:15 --> Loader Class Initialized
DEBUG - 2014-01-31 00:36:15 --> Helper loaded: form_helper
DEBUG - 2014-01-31 00:36:15 --> Helper loaded: url_helper
DEBUG - 2014-01-31 00:36:15 --> Helper loaded: html_helper
DEBUG - 2014-01-31 00:36:15 --> Database Driver Class Initialized
DEBUG - 2014-01-31 00:36:15 --> Session Class Initialized
DEBUG - 2014-01-31 00:36:15 --> Helper loaded: string_helper
DEBUG - 2014-01-31 00:36:15 --> Session routines successfully run
DEBUG - 2014-01-31 00:36:15 --> Form Validation Class Initialized
DEBUG - 2014-01-31 00:36:15 --> Controller Class Initialized
DEBUG - 2014-01-31 00:36:15 --> Model Class Initialized
DEBUG - 2014-01-31 00:36:15 --> Model Class Initialized
DEBUG - 2014-01-31 00:36:15 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-31 00:36:15 --> after session initialization................
INFO  - 2014-01-31 00:36:15 --> after community pharmacy  has been clicked.................
INFO  - 2014-01-31 00:36:15 --> inside retrieving pharmacy beyond id 0
INFO  - 2014-01-31 00:36:15 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2014-01-31 00:36:15 --> inside retrieving locations 
INFO  - 2014-01-31 00:36:15 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
INFO  - 2014-01-31 00:36:15 --> The session id is ========>529f212b5f6b7a2f5dfac4049d672fcf and the member id is =======>18
DEBUG - 2014-01-31 00:36:15 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2014-01-31 00:36:15 --> Final output sent to browser
DEBUG - 2014-01-31 00:36:15 --> Total execution time: 0.0624
DEBUG - 2014-01-31 00:36:18 --> Config Class Initialized
DEBUG - 2014-01-31 00:36:18 --> Hooks Class Initialized
DEBUG - 2014-01-31 00:36:18 --> Utf8 Class Initialized
DEBUG - 2014-01-31 00:36:18 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 00:36:18 --> URI Class Initialized
DEBUG - 2014-01-31 00:36:18 --> Router Class Initialized
DEBUG - 2014-01-31 00:36:18 --> Output Class Initialized
DEBUG - 2014-01-31 00:36:18 --> Security Class Initialized
DEBUG - 2014-01-31 00:36:18 --> Input Class Initialized
DEBUG - 2014-01-31 00:36:18 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-31 00:36:18 --> Language Class Initialized
DEBUG - 2014-01-31 00:36:18 --> Loader Class Initialized
DEBUG - 2014-01-31 00:36:18 --> Helper loaded: form_helper
DEBUG - 2014-01-31 00:36:18 --> Helper loaded: url_helper
DEBUG - 2014-01-31 00:36:18 --> Helper loaded: html_helper
DEBUG - 2014-01-31 00:36:18 --> Database Driver Class Initialized
DEBUG - 2014-01-31 00:36:18 --> Session Class Initialized
DEBUG - 2014-01-31 00:36:18 --> Helper loaded: string_helper
DEBUG - 2014-01-31 00:36:18 --> Session routines successfully run
DEBUG - 2014-01-31 00:36:18 --> Form Validation Class Initialized
DEBUG - 2014-01-31 00:36:18 --> Controller Class Initialized
DEBUG - 2014-01-31 00:36:18 --> Model Class Initialized
DEBUG - 2014-01-31 00:36:18 --> Model Class Initialized
DEBUG - 2014-01-31 00:36:18 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-31 00:36:18 --> after session initialization................
DEBUG - 2014-01-31 00:36:18 --> Config Class Initialized
DEBUG - 2014-01-31 00:36:18 --> Hooks Class Initialized
DEBUG - 2014-01-31 00:36:18 --> Utf8 Class Initialized
DEBUG - 2014-01-31 00:36:18 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 00:36:18 --> URI Class Initialized
DEBUG - 2014-01-31 00:36:18 --> Router Class Initialized
DEBUG - 2014-01-31 00:36:18 --> No URI present. Default controller set.
DEBUG - 2014-01-31 00:36:18 --> Output Class Initialized
DEBUG - 2014-01-31 00:36:18 --> Security Class Initialized
DEBUG - 2014-01-31 00:36:18 --> Input Class Initialized
DEBUG - 2014-01-31 00:36:18 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-31 00:36:18 --> Language Class Initialized
DEBUG - 2014-01-31 00:36:18 --> Loader Class Initialized
DEBUG - 2014-01-31 00:36:18 --> Helper loaded: form_helper
DEBUG - 2014-01-31 00:36:18 --> Helper loaded: url_helper
DEBUG - 2014-01-31 00:36:18 --> Helper loaded: html_helper
DEBUG - 2014-01-31 00:36:18 --> Database Driver Class Initialized
DEBUG - 2014-01-31 00:36:18 --> Session Class Initialized
DEBUG - 2014-01-31 00:36:18 --> Helper loaded: string_helper
DEBUG - 2014-01-31 00:36:18 --> A session cookie was not found.
DEBUG - 2014-01-31 00:36:18 --> Session routines successfully run
DEBUG - 2014-01-31 00:36:18 --> Form Validation Class Initialized
DEBUG - 2014-01-31 00:36:18 --> Controller Class Initialized
DEBUG - 2014-01-31 00:36:18 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2014-01-31 00:36:18 --> Final output sent to browser
DEBUG - 2014-01-31 00:36:18 --> Total execution time: 0.0312
DEBUG - 2014-01-31 00:36:18 --> Config Class Initialized
DEBUG - 2014-01-31 00:36:18 --> Hooks Class Initialized
DEBUG - 2014-01-31 00:36:18 --> Utf8 Class Initialized
DEBUG - 2014-01-31 00:36:18 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 00:36:18 --> URI Class Initialized
DEBUG - 2014-01-31 00:36:18 --> Router Class Initialized
DEBUG - 2014-01-31 00:36:18 --> Output Class Initialized
DEBUG - 2014-01-31 00:36:18 --> Security Class Initialized
DEBUG - 2014-01-31 00:36:18 --> Input Class Initialized
DEBUG - 2014-01-31 00:36:18 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-31 00:36:18 --> Language Class Initialized
DEBUG - 2014-01-31 00:36:18 --> Loader Class Initialized
DEBUG - 2014-01-31 00:36:18 --> Helper loaded: form_helper
DEBUG - 2014-01-31 00:36:18 --> Helper loaded: url_helper
DEBUG - 2014-01-31 00:36:18 --> Helper loaded: html_helper
DEBUG - 2014-01-31 00:36:18 --> Database Driver Class Initialized
DEBUG - 2014-01-31 00:36:18 --> Session Class Initialized
DEBUG - 2014-01-31 00:36:18 --> Helper loaded: string_helper
DEBUG - 2014-01-31 00:36:18 --> Session routines successfully run
DEBUG - 2014-01-31 00:36:18 --> Form Validation Class Initialized
DEBUG - 2014-01-31 00:36:18 --> Controller Class Initialized
DEBUG - 2014-01-31 00:36:18 --> Model Class Initialized
DEBUG - 2014-01-31 00:36:18 --> Model Class Initialized
DEBUG - 2014-01-31 00:36:18 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-31 00:36:18 --> after session initialization................
INFO  - 2014-01-31 00:36:18 --> after rays has been clicked.................
INFO  - 2014-01-31 00:36:18 --> last article id is 0
INFO  - 2014-01-31 00:36:18 --> The session id is ========>2ae0a26dd1fa8d5ea1e8c8250df2b246 and the member id is =======>
INFO  - 2014-01-31 00:36:18 --> The session id is ========>2ae0a26dd1fa8d5ea1e8c8250df2b246 and the member id is =======>
INFO  - 2014-01-31 00:36:18 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:36:18 --> 0 the guest only data>>>>>
INFO  - 2014-01-31 00:36:18 --> 0 the guest only data>> AFTER >>>#22
INFO  - 2014-01-31 00:36:18 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:36:18 --> 0 the guest only data>>>>>#22
INFO  - 2014-01-31 00:36:18 --> 0 the guest only data>> AFTER >>>#21
INFO  - 2014-01-31 00:36:18 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:36:18 --> 1 the guest only data>>>>>#21
INFO  - 2014-01-31 00:36:18 --> 1 the guest only data>> AFTER >>>#21
INFO  - 2014-01-31 00:36:18 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:36:18 --> 0 the guest only data>>>>>#21
INFO  - 2014-01-31 00:36:18 --> 0 the guest only data>> AFTER >>>#19
INFO  - 2014-01-31 00:36:18 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:36:18 --> 0 the guest only data>>>>>#19
INFO  - 2014-01-31 00:36:18 --> 0 the guest only data>> AFTER >>>#18
INFO  - 2014-01-31 00:36:18 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:36:18 --> 0 the guest only data>>>>>#18
INFO  - 2014-01-31 00:36:18 --> 0 the guest only data>> AFTER >>>#17
INFO  - 2014-01-31 00:36:18 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:36:18 --> 0 the guest only data>>>>>#17
INFO  - 2014-01-31 00:36:18 --> 0 the guest only data>> AFTER >>>#16
INFO  - 2014-01-31 00:36:18 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:36:18 --> 1 the guest only data>>>>>#16
INFO  - 2014-01-31 00:36:18 --> 1 the guest only data>> AFTER >>>#16
INFO  - 2014-01-31 00:36:18 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:36:18 --> 0 the guest only data>>>>>#16
INFO  - 2014-01-31 00:36:18 --> 0 the guest only data>> AFTER >>>#14
INFO  - 2014-01-31 00:36:18 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:36:18 --> 1 the guest only data>>>>>#14
INFO  - 2014-01-31 00:36:18 --> 1 the guest only data>> AFTER >>>#14
INFO  - 2014-01-31 00:36:18 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:36:18 --> 0 the guest only data>>>>>#14
INFO  - 2014-01-31 00:36:18 --> 0 the guest only data>> AFTER >>>#12
INFO  - 2014-01-31 00:36:18 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:36:18 --> 1 the guest only data>>>>>#12
INFO  - 2014-01-31 00:36:18 --> 1 the guest only data>> AFTER >>>#12
INFO  - 2014-01-31 00:36:18 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:36:18 --> 0 the guest only data>>>>>#12
INFO  - 2014-01-31 00:36:18 --> 0 the guest only data>> AFTER >>>#10
INFO  - 2014-01-31 00:36:18 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:36:18 --> 0 the guest only data>>>>>#10
INFO  - 2014-01-31 00:36:18 --> 0 the guest only data>> AFTER >>>#9
INFO  - 2014-01-31 00:36:18 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:36:18 --> 1 the guest only data>>>>>#9
INFO  - 2014-01-31 00:36:18 --> 1 the guest only data>> AFTER >>>#9
INFO  - 2014-01-31 00:36:18 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:36:18 --> 0 the guest only data>>>>>#9
INFO  - 2014-01-31 00:36:18 --> 0 the guest only data>> AFTER >>>#7
INFO  - 2014-01-31 00:36:18 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:36:18 --> 1 the guest only data>>>>>#7
INFO  - 2014-01-31 00:36:18 --> 1 the guest only data>> AFTER >>>#7
INFO  - 2014-01-31 00:36:18 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:36:18 --> 0 the guest only data>>>>>#7
INFO  - 2014-01-31 00:36:18 --> 0 the guest only data>> AFTER >>>#5
INFO  - 2014-01-31 00:36:18 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:36:18 --> 0 the guest only data>>>>>#5
INFO  - 2014-01-31 00:36:18 --> 0 the guest only data>> AFTER >>>#4
INFO  - 2014-01-31 00:36:18 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 00:36:18 --> 1 the guest only data>>>>>#4
INFO  - 2014-01-31 00:36:18 --> 1 the guest only data>> AFTER >>>#4
DEBUG - 2014-01-31 00:36:18 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2014-01-31 00:36:18 --> Final output sent to browser
DEBUG - 2014-01-31 00:36:18 --> Total execution time: 0.0780
DEBUG - 2014-01-31 00:36:20 --> Config Class Initialized
DEBUG - 2014-01-31 00:36:20 --> Hooks Class Initialized
DEBUG - 2014-01-31 00:36:20 --> Utf8 Class Initialized
DEBUG - 2014-01-31 00:36:20 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 00:36:20 --> URI Class Initialized
DEBUG - 2014-01-31 00:36:20 --> Router Class Initialized
DEBUG - 2014-01-31 00:36:20 --> Output Class Initialized
DEBUG - 2014-01-31 00:36:20 --> Security Class Initialized
DEBUG - 2014-01-31 00:36:20 --> Input Class Initialized
DEBUG - 2014-01-31 00:36:20 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-31 00:36:20 --> Language Class Initialized
DEBUG - 2014-01-31 00:36:20 --> Loader Class Initialized
DEBUG - 2014-01-31 00:36:20 --> Helper loaded: form_helper
DEBUG - 2014-01-31 00:36:20 --> Helper loaded: url_helper
DEBUG - 2014-01-31 00:36:20 --> Helper loaded: html_helper
DEBUG - 2014-01-31 00:36:20 --> Database Driver Class Initialized
DEBUG - 2014-01-31 00:36:20 --> Session Class Initialized
DEBUG - 2014-01-31 00:36:20 --> Helper loaded: string_helper
DEBUG - 2014-01-31 00:36:20 --> Session routines successfully run
DEBUG - 2014-01-31 00:36:20 --> Form Validation Class Initialized
DEBUG - 2014-01-31 00:36:20 --> Controller Class Initialized
DEBUG - 2014-01-31 00:36:20 --> Model Class Initialized
DEBUG - 2014-01-31 00:36:20 --> Model Class Initialized
DEBUG - 2014-01-31 00:36:20 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-31 00:36:20 --> after session initialization................
INFO  - 2014-01-31 00:36:20 --> after community pharmacy  has been clicked.................
INFO  - 2014-01-31 00:36:20 --> inside retrieving pharmacy beyond id 0
INFO  - 2014-01-31 00:36:20 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2014-01-31 00:36:20 --> inside retrieving locations 
INFO  - 2014-01-31 00:36:20 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
INFO  - 2014-01-31 00:36:20 --> The session id is ========>2ae0a26dd1fa8d5ea1e8c8250df2b246 and the member id is =======>
DEBUG - 2014-01-31 00:36:20 --> File loaded: ../pharmaray-application/views/guestcommunitypharmacy.php
DEBUG - 2014-01-31 00:36:20 --> Final output sent to browser
DEBUG - 2014-01-31 00:36:20 --> Total execution time: 0.0468
DEBUG - 2014-01-31 00:36:22 --> Config Class Initialized
DEBUG - 2014-01-31 00:36:22 --> Hooks Class Initialized
DEBUG - 2014-01-31 00:36:22 --> Utf8 Class Initialized
DEBUG - 2014-01-31 00:36:22 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 00:36:22 --> URI Class Initialized
DEBUG - 2014-01-31 00:36:22 --> Router Class Initialized
DEBUG - 2014-01-31 00:36:22 --> Output Class Initialized
DEBUG - 2014-01-31 00:36:22 --> Security Class Initialized
DEBUG - 2014-01-31 00:36:22 --> Input Class Initialized
DEBUG - 2014-01-31 00:36:22 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-31 00:36:22 --> Language Class Initialized
DEBUG - 2014-01-31 00:36:22 --> Loader Class Initialized
DEBUG - 2014-01-31 00:36:22 --> Helper loaded: form_helper
DEBUG - 2014-01-31 00:36:22 --> Helper loaded: url_helper
DEBUG - 2014-01-31 00:36:22 --> Helper loaded: html_helper
DEBUG - 2014-01-31 00:36:22 --> Database Driver Class Initialized
DEBUG - 2014-01-31 00:36:22 --> Session Class Initialized
DEBUG - 2014-01-31 00:36:22 --> Helper loaded: string_helper
DEBUG - 2014-01-31 00:36:22 --> Session routines successfully run
DEBUG - 2014-01-31 00:36:22 --> Form Validation Class Initialized
DEBUG - 2014-01-31 00:36:22 --> Controller Class Initialized
DEBUG - 2014-01-31 00:36:22 --> Model Class Initialized
DEBUG - 2014-01-31 00:36:22 --> Model Class Initialized
DEBUG - 2014-01-31 00:36:22 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-31 00:36:22 --> after session initialization................
INFO  - 2014-01-31 00:36:22 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  ''
INFO  - 2014-01-31 00:36:22 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-01-31 00:36:22 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2014-01-31 00:36:22 --> inside retrieving vacancy for member
INFO  - 2014-01-31 00:36:22 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2014-01-31 00:36:22 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-01-31 00:36:22 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2014-01-31 00:36:22 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2014-01-31 00:36:22 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2014-01-31 00:36:22 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2014-01-31 00:36:22 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2014-01-31 00:36:22 --> inside retrieving pharmacy for drug id is 1
INFO  - 2014-01-31 00:36:22 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2014-01-31 00:36:22 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2014-01-31 00:36:22 --> The session id is ========>2ae0a26dd1fa8d5ea1e8c8250df2b246 and the member id is =======>
INFO  - 2014-01-31 00:36:22 -->  column name inside view is 0 column Data is Male Doctor
INFO  - 2014-01-31 00:36:22 -->  column name inside view is 1 column Data is Ordinary Member
DEBUG - 2014-01-31 00:36:22 --> File loaded: ../pharmaray-application/views/onlinepharmacy.php
DEBUG - 2014-01-31 00:36:22 --> Final output sent to browser
DEBUG - 2014-01-31 00:36:22 --> Total execution time: 0.0780
DEBUG - 2014-01-31 00:36:23 --> Config Class Initialized
DEBUG - 2014-01-31 00:36:23 --> Hooks Class Initialized
DEBUG - 2014-01-31 00:36:23 --> Utf8 Class Initialized
DEBUG - 2014-01-31 00:36:23 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 00:36:23 --> URI Class Initialized
DEBUG - 2014-01-31 00:36:23 --> Router Class Initialized
ERROR - 2014-01-31 00:36:23 --> 404 Page Not Found --> css
DEBUG - 2014-01-31 10:40:32 --> Config Class Initialized
DEBUG - 2014-01-31 10:40:32 --> Hooks Class Initialized
DEBUG - 2014-01-31 10:40:32 --> Utf8 Class Initialized
DEBUG - 2014-01-31 10:40:32 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 10:40:32 --> URI Class Initialized
DEBUG - 2014-01-31 10:40:32 --> Router Class Initialized
DEBUG - 2014-01-31 10:40:32 --> No URI present. Default controller set.
DEBUG - 2014-01-31 10:40:32 --> Output Class Initialized
DEBUG - 2014-01-31 10:40:32 --> Security Class Initialized
DEBUG - 2014-01-31 10:40:32 --> Input Class Initialized
DEBUG - 2014-01-31 10:40:32 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-31 10:40:32 --> Language Class Initialized
DEBUG - 2014-01-31 10:40:32 --> Loader Class Initialized
DEBUG - 2014-01-31 10:40:32 --> Helper loaded: form_helper
DEBUG - 2014-01-31 10:40:32 --> Helper loaded: url_helper
DEBUG - 2014-01-31 10:40:32 --> Helper loaded: html_helper
DEBUG - 2014-01-31 10:40:32 --> Database Driver Class Initialized
ERROR - 2014-01-31 10:40:32 --> Severity: Notice  --> mysql_pconnect(): send of 5 bytes failed with errno=10053 An established connection was aborted by the software in your host machine.
 C:\xampp\htdocs\Pharmarays\pharmaray-system\database\drivers\mysql\mysql_driver.php 91
DEBUG - 2014-01-31 10:40:33 --> Session Class Initialized
DEBUG - 2014-01-31 10:40:33 --> Helper loaded: string_helper
DEBUG - 2014-01-31 10:40:33 --> A session cookie was not found.
DEBUG - 2014-01-31 10:40:33 --> Session routines successfully run
DEBUG - 2014-01-31 10:40:33 --> Form Validation Class Initialized
DEBUG - 2014-01-31 10:40:33 --> Controller Class Initialized
DEBUG - 2014-01-31 10:40:33 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2014-01-31 10:40:33 --> Final output sent to browser
DEBUG - 2014-01-31 10:40:33 --> Total execution time: 1.0391
DEBUG - 2014-01-31 10:40:33 --> Config Class Initialized
DEBUG - 2014-01-31 10:40:33 --> Hooks Class Initialized
DEBUG - 2014-01-31 10:40:33 --> Utf8 Class Initialized
DEBUG - 2014-01-31 10:40:33 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 10:40:33 --> URI Class Initialized
DEBUG - 2014-01-31 10:40:33 --> Router Class Initialized
DEBUG - 2014-01-31 10:40:33 --> Output Class Initialized
DEBUG - 2014-01-31 10:40:33 --> Security Class Initialized
DEBUG - 2014-01-31 10:40:33 --> Input Class Initialized
DEBUG - 2014-01-31 10:40:33 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-31 10:40:33 --> Language Class Initialized
DEBUG - 2014-01-31 10:40:33 --> Loader Class Initialized
DEBUG - 2014-01-31 10:40:33 --> Helper loaded: form_helper
DEBUG - 2014-01-31 10:40:33 --> Helper loaded: url_helper
DEBUG - 2014-01-31 10:40:33 --> Helper loaded: html_helper
DEBUG - 2014-01-31 10:40:33 --> Database Driver Class Initialized
DEBUG - 2014-01-31 10:40:33 --> Session Class Initialized
DEBUG - 2014-01-31 10:40:33 --> Helper loaded: string_helper
DEBUG - 2014-01-31 10:40:33 --> Session routines successfully run
DEBUG - 2014-01-31 10:40:33 --> Form Validation Class Initialized
DEBUG - 2014-01-31 10:40:33 --> Controller Class Initialized
DEBUG - 2014-01-31 10:40:33 --> Model Class Initialized
DEBUG - 2014-01-31 10:40:33 --> Model Class Initialized
DEBUG - 2014-01-31 10:40:33 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-31 10:40:33 --> after session initialization................
INFO  - 2014-01-31 10:40:33 --> after rays has been clicked.................
INFO  - 2014-01-31 10:40:33 --> last article id is 0
INFO  - 2014-01-31 10:40:33 --> The session id is ========>626e44f9c329f0bab0860a7019877f73 and the member id is =======>
INFO  - 2014-01-31 10:40:33 --> The session id is ========>626e44f9c329f0bab0860a7019877f73 and the member id is =======>
INFO  - 2014-01-31 10:40:33 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 10:40:33 --> 0 the guest only data>>>>>
INFO  - 2014-01-31 10:40:33 --> 0 the guest only data>> AFTER >>>#22
INFO  - 2014-01-31 10:40:33 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 10:40:33 --> 0 the guest only data>>>>>#22
INFO  - 2014-01-31 10:40:33 --> 0 the guest only data>> AFTER >>>#21
INFO  - 2014-01-31 10:40:33 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 10:40:33 --> 1 the guest only data>>>>>#21
INFO  - 2014-01-31 10:40:33 --> 1 the guest only data>> AFTER >>>#21
INFO  - 2014-01-31 10:40:33 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 10:40:33 --> 0 the guest only data>>>>>#21
INFO  - 2014-01-31 10:40:33 --> 0 the guest only data>> AFTER >>>#19
INFO  - 2014-01-31 10:40:33 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 10:40:33 --> 0 the guest only data>>>>>#19
INFO  - 2014-01-31 10:40:33 --> 0 the guest only data>> AFTER >>>#18
INFO  - 2014-01-31 10:40:33 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 10:40:33 --> 0 the guest only data>>>>>#18
INFO  - 2014-01-31 10:40:33 --> 0 the guest only data>> AFTER >>>#17
INFO  - 2014-01-31 10:40:33 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 10:40:33 --> 0 the guest only data>>>>>#17
INFO  - 2014-01-31 10:40:33 --> 0 the guest only data>> AFTER >>>#16
INFO  - 2014-01-31 10:40:33 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 10:40:33 --> 1 the guest only data>>>>>#16
INFO  - 2014-01-31 10:40:33 --> 1 the guest only data>> AFTER >>>#16
INFO  - 2014-01-31 10:40:33 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 10:40:33 --> 0 the guest only data>>>>>#16
INFO  - 2014-01-31 10:40:33 --> 0 the guest only data>> AFTER >>>#14
INFO  - 2014-01-31 10:40:33 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 10:40:33 --> 1 the guest only data>>>>>#14
INFO  - 2014-01-31 10:40:33 --> 1 the guest only data>> AFTER >>>#14
INFO  - 2014-01-31 10:40:33 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 10:40:33 --> 0 the guest only data>>>>>#14
INFO  - 2014-01-31 10:40:33 --> 0 the guest only data>> AFTER >>>#12
INFO  - 2014-01-31 10:40:33 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 10:40:33 --> 1 the guest only data>>>>>#12
INFO  - 2014-01-31 10:40:33 --> 1 the guest only data>> AFTER >>>#12
INFO  - 2014-01-31 10:40:33 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 10:40:33 --> 0 the guest only data>>>>>#12
INFO  - 2014-01-31 10:40:33 --> 0 the guest only data>> AFTER >>>#10
INFO  - 2014-01-31 10:40:33 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 10:40:33 --> 0 the guest only data>>>>>#10
INFO  - 2014-01-31 10:40:33 --> 0 the guest only data>> AFTER >>>#9
INFO  - 2014-01-31 10:40:33 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 10:40:33 --> 1 the guest only data>>>>>#9
INFO  - 2014-01-31 10:40:33 --> 1 the guest only data>> AFTER >>>#9
INFO  - 2014-01-31 10:40:33 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 10:40:33 --> 0 the guest only data>>>>>#9
INFO  - 2014-01-31 10:40:33 --> 0 the guest only data>> AFTER >>>#7
INFO  - 2014-01-31 10:40:33 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 10:40:33 --> 1 the guest only data>>>>>#7
INFO  - 2014-01-31 10:40:33 --> 1 the guest only data>> AFTER >>>#7
INFO  - 2014-01-31 10:40:33 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 10:40:33 --> 0 the guest only data>>>>>#7
INFO  - 2014-01-31 10:40:33 --> 0 the guest only data>> AFTER >>>#5
INFO  - 2014-01-31 10:40:33 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 10:40:33 --> 0 the guest only data>>>>>#5
INFO  - 2014-01-31 10:40:33 --> 0 the guest only data>> AFTER >>>#4
INFO  - 2014-01-31 10:40:33 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-01-31 10:40:33 --> 1 the guest only data>>>>>#4
INFO  - 2014-01-31 10:40:33 --> 1 the guest only data>> AFTER >>>#4
DEBUG - 2014-01-31 10:40:33 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2014-01-31 10:40:33 --> Final output sent to browser
DEBUG - 2014-01-31 10:40:33 --> Total execution time: 0.0660
DEBUG - 2014-01-31 10:40:39 --> Config Class Initialized
DEBUG - 2014-01-31 10:40:39 --> Hooks Class Initialized
DEBUG - 2014-01-31 10:40:39 --> Utf8 Class Initialized
DEBUG - 2014-01-31 10:40:39 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 10:40:39 --> URI Class Initialized
DEBUG - 2014-01-31 10:40:39 --> Router Class Initialized
DEBUG - 2014-01-31 10:40:39 --> Output Class Initialized
DEBUG - 2014-01-31 10:40:39 --> Security Class Initialized
DEBUG - 2014-01-31 10:40:39 --> Input Class Initialized
DEBUG - 2014-01-31 10:40:39 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-31 10:40:39 --> Language Class Initialized
DEBUG - 2014-01-31 10:40:39 --> Loader Class Initialized
DEBUG - 2014-01-31 10:40:39 --> Helper loaded: form_helper
DEBUG - 2014-01-31 10:40:39 --> Helper loaded: url_helper
DEBUG - 2014-01-31 10:40:39 --> Helper loaded: html_helper
DEBUG - 2014-01-31 10:40:39 --> Database Driver Class Initialized
DEBUG - 2014-01-31 10:40:39 --> Session Class Initialized
DEBUG - 2014-01-31 10:40:39 --> Helper loaded: string_helper
DEBUG - 2014-01-31 10:40:39 --> Session routines successfully run
DEBUG - 2014-01-31 10:40:39 --> Form Validation Class Initialized
DEBUG - 2014-01-31 10:40:39 --> Controller Class Initialized
DEBUG - 2014-01-31 10:40:39 --> Model Class Initialized
DEBUG - 2014-01-31 10:40:39 --> Model Class Initialized
DEBUG - 2014-01-31 10:40:39 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-31 10:40:39 --> after session initialization................
INFO  - 2014-01-31 10:40:39 --> article id is 15
DEBUG - 2014-01-31 10:40:39 --> Final output sent to browser
DEBUG - 2014-01-31 10:40:39 --> Total execution time: 0.0470
DEBUG - 2014-01-31 10:40:42 --> Config Class Initialized
DEBUG - 2014-01-31 10:40:42 --> Hooks Class Initialized
DEBUG - 2014-01-31 10:40:42 --> Utf8 Class Initialized
DEBUG - 2014-01-31 10:40:42 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 10:40:42 --> URI Class Initialized
DEBUG - 2014-01-31 10:40:42 --> Router Class Initialized
DEBUG - 2014-01-31 10:40:42 --> Output Class Initialized
DEBUG - 2014-01-31 10:40:42 --> Security Class Initialized
DEBUG - 2014-01-31 10:40:42 --> Input Class Initialized
DEBUG - 2014-01-31 10:40:42 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-31 10:40:42 --> Language Class Initialized
DEBUG - 2014-01-31 10:40:42 --> Loader Class Initialized
DEBUG - 2014-01-31 10:40:42 --> Helper loaded: form_helper
DEBUG - 2014-01-31 10:40:42 --> Helper loaded: url_helper
DEBUG - 2014-01-31 10:40:42 --> Helper loaded: html_helper
DEBUG - 2014-01-31 10:40:42 --> Database Driver Class Initialized
DEBUG - 2014-01-31 10:40:42 --> Session Class Initialized
DEBUG - 2014-01-31 10:40:42 --> Helper loaded: string_helper
DEBUG - 2014-01-31 10:40:42 --> Session routines successfully run
DEBUG - 2014-01-31 10:40:42 --> Form Validation Class Initialized
DEBUG - 2014-01-31 10:40:42 --> Controller Class Initialized
DEBUG - 2014-01-31 10:40:42 --> Model Class Initialized
DEBUG - 2014-01-31 10:40:42 --> Model Class Initialized
DEBUG - 2014-01-31 10:40:42 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-31 10:40:42 --> after session initialization................
INFO  - 2014-01-31 10:40:42 --> verify user roles ::::::::::===>SELECT `ur`.*
FROM (`userrole` ur)
JOIN `logindetails_userrole` ldur ON `ldur`.`logindetailsuserrole_userroleid` = `ur`.`id_userrole`
JOIN `logindetails` l ON `l`.`id_logindetails` = `ldur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'admin'
AND `l`.`memberid_member` =  ''
INFO  - 2014-01-31 10:40:42 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-01-31 10:40:42 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2014-01-31 10:40:42 --> inside retrieving vacancy for member
INFO  - 2014-01-31 10:40:42 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2014-01-31 10:40:42 --> inside retrieving comments member id and drug id is 1
INFO  - 2014-01-31 10:40:42 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2014-01-31 10:40:42 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2014-01-31 10:40:42 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2014-01-31 10:40:42 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2014-01-31 10:40:42 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2014-01-31 10:40:42 --> inside retrieving pharmacy for drug id is 1
INFO  - 2014-01-31 10:40:42 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2014-01-31 10:40:42 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2014-01-31 10:40:42 --> The session id is ========>626e44f9c329f0bab0860a7019877f73 and the member id is =======>
INFO  - 2014-01-31 10:40:42 -->  column name inside view is 0 column Data is Male Doctor
INFO  - 2014-01-31 10:40:42 -->  column name inside view is 1 column Data is Ordinary Member
DEBUG - 2014-01-31 10:40:42 --> File loaded: ../pharmaray-application/views/onlinepharmacy.php
DEBUG - 2014-01-31 10:40:42 --> Final output sent to browser
DEBUG - 2014-01-31 10:40:42 --> Total execution time: 0.0730
DEBUG - 2014-01-31 10:40:42 --> Config Class Initialized
DEBUG - 2014-01-31 10:40:42 --> Hooks Class Initialized
DEBUG - 2014-01-31 10:40:42 --> Utf8 Class Initialized
DEBUG - 2014-01-31 10:40:42 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 10:40:42 --> URI Class Initialized
DEBUG - 2014-01-31 10:40:42 --> Router Class Initialized
ERROR - 2014-01-31 10:40:42 --> 404 Page Not Found --> css
DEBUG - 2014-01-31 10:40:45 --> Config Class Initialized
DEBUG - 2014-01-31 10:40:45 --> Hooks Class Initialized
DEBUG - 2014-01-31 10:40:45 --> Utf8 Class Initialized
DEBUG - 2014-01-31 10:40:45 --> UTF-8 Support Enabled
DEBUG - 2014-01-31 10:40:45 --> URI Class Initialized
DEBUG - 2014-01-31 10:40:45 --> Router Class Initialized
DEBUG - 2014-01-31 10:40:45 --> Output Class Initialized
DEBUG - 2014-01-31 10:40:45 --> Security Class Initialized
DEBUG - 2014-01-31 10:40:45 --> Input Class Initialized
DEBUG - 2014-01-31 10:40:45 --> Global POST and COOKIE data sanitized
DEBUG - 2014-01-31 10:40:45 --> Language Class Initialized
DEBUG - 2014-01-31 10:40:45 --> Loader Class Initialized
DEBUG - 2014-01-31 10:40:45 --> Helper loaded: form_helper
DEBUG - 2014-01-31 10:40:45 --> Helper loaded: url_helper
DEBUG - 2014-01-31 10:40:45 --> Helper loaded: html_helper
DEBUG - 2014-01-31 10:40:45 --> Database Driver Class Initialized
DEBUG - 2014-01-31 10:40:45 --> Session Class Initialized
DEBUG - 2014-01-31 10:40:45 --> Helper loaded: string_helper
DEBUG - 2014-01-31 10:40:45 --> Session routines successfully run
DEBUG - 2014-01-31 10:40:45 --> Form Validation Class Initialized
DEBUG - 2014-01-31 10:40:45 --> Controller Class Initialized
DEBUG - 2014-01-31 10:40:45 --> Model Class Initialized
DEBUG - 2014-01-31 10:40:45 --> Model Class Initialized
DEBUG - 2014-01-31 10:40:45 --> Session class already loaded. Second attempt ignored.
INFO  - 2014-01-31 10:40:45 --> after session initialization................
INFO  - 2014-01-31 10:40:45 --> article id is 8
DEBUG - 2014-01-31 10:40:45 --> Final output sent to browser
DEBUG - 2014-01-31 10:40:45 --> Total execution time: 0.0470
