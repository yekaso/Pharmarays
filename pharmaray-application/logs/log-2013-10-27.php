<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2013-10-27 05:01:21 --> Config Class Initialized
DEBUG - 2013-10-27 05:01:21 --> Hooks Class Initialized
DEBUG - 2013-10-27 05:01:21 --> Utf8 Class Initialized
DEBUG - 2013-10-27 05:01:21 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 05:01:21 --> URI Class Initialized
DEBUG - 2013-10-27 05:01:21 --> Router Class Initialized
DEBUG - 2013-10-27 05:01:21 --> Output Class Initialized
DEBUG - 2013-10-27 05:01:21 --> Security Class Initialized
DEBUG - 2013-10-27 05:01:21 --> Input Class Initialized
DEBUG - 2013-10-27 05:01:21 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-27 05:01:21 --> Language Class Initialized
DEBUG - 2013-10-27 05:01:21 --> Loader Class Initialized
DEBUG - 2013-10-27 05:01:21 --> Helper loaded: form_helper
DEBUG - 2013-10-27 05:01:21 --> Helper loaded: url_helper
DEBUG - 2013-10-27 05:01:21 --> Helper loaded: html_helper
DEBUG - 2013-10-27 05:01:22 --> Database Driver Class Initialized
DEBUG - 2013-10-27 05:01:24 --> Session Class Initialized
DEBUG - 2013-10-27 05:01:24 --> Helper loaded: string_helper
DEBUG - 2013-10-27 05:01:24 --> A session cookie was not found.
DEBUG - 2013-10-27 05:01:24 --> Session routines successfully run
DEBUG - 2013-10-27 05:01:24 --> Form Validation Class Initialized
DEBUG - 2013-10-27 05:01:24 --> Controller Class Initialized
DEBUG - 2013-10-27 05:01:24 --> Model Class Initialized
DEBUG - 2013-10-27 05:01:24 --> Model Class Initialized
DEBUG - 2013-10-27 05:01:24 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-27 05:01:24 --> after session initialization................
INFO  - 2013-10-27 05:01:24 --> inside retrieve most commented forum topic 
INFO  - 2013-10-27 05:01:25 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count`
INFO  - 2013-10-27 05:01:25 --> inside retrieve most commented forum topic 
INFO  - 2013-10-27 05:01:25 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`
FROM (`forum_topic` t)
WHERE `t`.`id_topicforum` =  '1'
INFO  - 2013-10-27 05:01:25 --> inside retrieving first 20 topics 
INFO  - 2013-10-27 05:01:25 --> SELECT `t`.`id_topicforum`, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count`
LIMIT 20
INFO  - 2013-10-27 05:01:25 --> inside retrieving pharmacy beyond id 
INFO  - 2013-10-27 05:01:25 --> SELECT `ff`.`id_forum` as id, `ff`.`name`, count(f.id_forum) as sub_forum
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` is null 
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`
INFO  - 2013-10-27 05:01:25 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-10-27 05:01:25 --> inside retrieving comments topic id and drug id is 1
INFO  - 2013-10-27 05:01:25 --> SELECT `tc`.`id_topiccomment`, `tc`.`comment`, `tc`.`timecreated`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-10-27 05:01:25 --> inside retrieving comments topic id 1
INFO  - 2013-10-27 05:01:25 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
INFO  - 2013-10-27 05:01:25 --> after forums has been clicked.................
INFO  - 2013-10-27 05:01:25 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-10-27 05:01:25 --> File loaded: ../pharmaray-application/views/forum.php
DEBUG - 2013-10-27 05:01:25 --> Final output sent to browser
DEBUG - 2013-10-27 05:01:25 --> Total execution time: 4.5753
DEBUG - 2013-10-27 05:01:25 --> Config Class Initialized
DEBUG - 2013-10-27 05:01:25 --> Hooks Class Initialized
DEBUG - 2013-10-27 05:01:25 --> Utf8 Class Initialized
DEBUG - 2013-10-27 05:01:25 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 05:01:25 --> URI Class Initialized
DEBUG - 2013-10-27 05:01:25 --> Router Class Initialized
DEBUG - 2013-10-27 05:01:25 --> Output Class Initialized
DEBUG - 2013-10-27 05:01:25 --> Security Class Initialized
DEBUG - 2013-10-27 05:01:25 --> Input Class Initialized
DEBUG - 2013-10-27 05:01:25 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-27 05:01:25 --> Language Class Initialized
DEBUG - 2013-10-27 05:01:25 --> Loader Class Initialized
DEBUG - 2013-10-27 05:01:25 --> Helper loaded: form_helper
DEBUG - 2013-10-27 05:01:25 --> Helper loaded: url_helper
DEBUG - 2013-10-27 05:01:25 --> Helper loaded: html_helper
DEBUG - 2013-10-27 05:01:25 --> Database Driver Class Initialized
DEBUG - 2013-10-27 05:01:26 --> Session Class Initialized
DEBUG - 2013-10-27 05:01:26 --> Helper loaded: string_helper
DEBUG - 2013-10-27 05:01:26 --> Session routines successfully run
DEBUG - 2013-10-27 05:01:26 --> Form Validation Class Initialized
DEBUG - 2013-10-27 05:01:26 --> Controller Class Initialized
DEBUG - 2013-10-27 05:01:26 --> Model Class Initialized
DEBUG - 2013-10-27 05:01:26 --> Model Class Initialized
DEBUG - 2013-10-27 05:01:26 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-27 05:01:26 --> after session initialization................
ERROR - 2013-10-27 05:01:26 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-10-27 05:01:27 --> Config Class Initialized
DEBUG - 2013-10-27 05:01:27 --> Hooks Class Initialized
DEBUG - 2013-10-27 05:01:27 --> Utf8 Class Initialized
DEBUG - 2013-10-27 05:01:27 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 05:01:27 --> URI Class Initialized
DEBUG - 2013-10-27 05:01:27 --> Router Class Initialized
ERROR - 2013-10-27 05:01:27 --> 404 Page Not Found --> css
DEBUG - 2013-10-27 05:07:12 --> Config Class Initialized
DEBUG - 2013-10-27 05:07:12 --> Hooks Class Initialized
DEBUG - 2013-10-27 05:07:12 --> Utf8 Class Initialized
DEBUG - 2013-10-27 05:07:12 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 05:07:12 --> URI Class Initialized
DEBUG - 2013-10-27 05:07:12 --> Router Class Initialized
DEBUG - 2013-10-27 05:07:12 --> Output Class Initialized
DEBUG - 2013-10-27 05:07:12 --> Security Class Initialized
DEBUG - 2013-10-27 05:07:12 --> Input Class Initialized
DEBUG - 2013-10-27 05:07:12 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-27 05:07:12 --> Language Class Initialized
DEBUG - 2013-10-27 05:07:12 --> Loader Class Initialized
DEBUG - 2013-10-27 05:07:12 --> Helper loaded: form_helper
DEBUG - 2013-10-27 05:07:12 --> Helper loaded: url_helper
DEBUG - 2013-10-27 05:07:12 --> Helper loaded: html_helper
DEBUG - 2013-10-27 05:07:12 --> Database Driver Class Initialized
DEBUG - 2013-10-27 05:07:13 --> Session Class Initialized
DEBUG - 2013-10-27 05:07:13 --> Helper loaded: string_helper
DEBUG - 2013-10-27 05:07:13 --> Session routines successfully run
DEBUG - 2013-10-27 05:07:13 --> Form Validation Class Initialized
DEBUG - 2013-10-27 05:07:13 --> Controller Class Initialized
DEBUG - 2013-10-27 05:07:13 --> Model Class Initialized
DEBUG - 2013-10-27 05:07:13 --> Model Class Initialized
DEBUG - 2013-10-27 05:07:13 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-27 05:07:13 --> after session initialization................
INFO  - 2013-10-27 05:07:13 --> The forum id is 1
INFO  - 2013-10-27 05:07:13 --> inside retrieving pharmacy beyond id 
INFO  - 2013-10-27 05:07:13 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 1
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, ft.name as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '1'
ORDER BY `ft`.`name`)
INFO  - 2013-10-27 05:07:13 --> (SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 1
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, ft.name as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '1'
ORDER BY `ft`.`name`)
DEBUG - 2013-10-27 05:07:13 --> Final output sent to browser
DEBUG - 2013-10-27 05:07:13 --> Total execution time: 1.0881
DEBUG - 2013-10-27 05:14:07 --> Config Class Initialized
DEBUG - 2013-10-27 05:14:07 --> Hooks Class Initialized
DEBUG - 2013-10-27 05:14:07 --> Utf8 Class Initialized
DEBUG - 2013-10-27 05:14:07 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 05:14:07 --> URI Class Initialized
DEBUG - 2013-10-27 05:14:07 --> Router Class Initialized
DEBUG - 2013-10-27 05:14:07 --> Output Class Initialized
DEBUG - 2013-10-27 05:14:07 --> Security Class Initialized
DEBUG - 2013-10-27 05:14:07 --> Input Class Initialized
DEBUG - 2013-10-27 05:14:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-27 05:14:07 --> Language Class Initialized
DEBUG - 2013-10-27 05:14:07 --> Loader Class Initialized
DEBUG - 2013-10-27 05:14:07 --> Helper loaded: form_helper
DEBUG - 2013-10-27 05:14:07 --> Helper loaded: url_helper
DEBUG - 2013-10-27 05:14:07 --> Helper loaded: html_helper
DEBUG - 2013-10-27 05:14:07 --> Database Driver Class Initialized
DEBUG - 2013-10-27 05:14:07 --> Session Class Initialized
DEBUG - 2013-10-27 05:14:07 --> Helper loaded: string_helper
DEBUG - 2013-10-27 05:14:07 --> Session routines successfully run
DEBUG - 2013-10-27 05:14:07 --> Form Validation Class Initialized
DEBUG - 2013-10-27 05:14:07 --> Controller Class Initialized
DEBUG - 2013-10-27 05:14:07 --> Model Class Initialized
DEBUG - 2013-10-27 05:14:07 --> Model Class Initialized
DEBUG - 2013-10-27 05:14:07 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-27 05:14:07 --> after session initialization................
INFO  - 2013-10-27 05:14:07 --> inside retrieve most commented forum topic 
INFO  - 2013-10-27 05:14:07 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count`
INFO  - 2013-10-27 05:14:07 --> inside retrieve most commented forum topic 
INFO  - 2013-10-27 05:14:07 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`
FROM (`forum_topic` t)
WHERE `t`.`id_topicforum` =  '1'
INFO  - 2013-10-27 05:14:07 --> inside retrieving first 20 topics 
INFO  - 2013-10-27 05:14:07 --> SELECT `t`.`id_topicforum`, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count`
LIMIT 20
INFO  - 2013-10-27 05:14:07 --> inside retrieving pharmacy beyond id 
INFO  - 2013-10-27 05:14:07 --> SELECT `ff`.`id_forum` as id, `ff`.`name`, count(f.id_forum) as sub_forum
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` is null 
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`
INFO  - 2013-10-27 05:14:07 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-10-27 05:14:07 --> inside retrieving comments topic id and drug id is 1
INFO  - 2013-10-27 05:14:07 --> SELECT `tc`.`id_topiccomment`, `tc`.`comment`, `tc`.`timecreated`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-10-27 05:14:07 --> inside retrieving comments topic id 1
INFO  - 2013-10-27 05:14:07 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
INFO  - 2013-10-27 05:14:07 --> after forums has been clicked.................
INFO  - 2013-10-27 05:14:07 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-10-27 05:14:07 --> File loaded: ../pharmaray-application/views/forum.php
DEBUG - 2013-10-27 05:14:07 --> Final output sent to browser
DEBUG - 2013-10-27 05:14:07 --> Total execution time: 0.1360
DEBUG - 2013-10-27 05:14:07 --> Config Class Initialized
DEBUG - 2013-10-27 05:14:07 --> Hooks Class Initialized
DEBUG - 2013-10-27 05:14:07 --> Utf8 Class Initialized
DEBUG - 2013-10-27 05:14:07 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 05:14:07 --> URI Class Initialized
DEBUG - 2013-10-27 05:14:07 --> Router Class Initialized
DEBUG - 2013-10-27 05:14:07 --> Output Class Initialized
DEBUG - 2013-10-27 05:14:07 --> Security Class Initialized
DEBUG - 2013-10-27 05:14:07 --> Input Class Initialized
DEBUG - 2013-10-27 05:14:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-27 05:14:07 --> Language Class Initialized
DEBUG - 2013-10-27 05:14:07 --> Loader Class Initialized
DEBUG - 2013-10-27 05:14:07 --> Helper loaded: form_helper
DEBUG - 2013-10-27 05:14:07 --> Helper loaded: url_helper
DEBUG - 2013-10-27 05:14:07 --> Helper loaded: html_helper
DEBUG - 2013-10-27 05:14:07 --> Database Driver Class Initialized
DEBUG - 2013-10-27 05:14:07 --> Session Class Initialized
DEBUG - 2013-10-27 05:14:07 --> Helper loaded: string_helper
DEBUG - 2013-10-27 05:14:07 --> Session routines successfully run
DEBUG - 2013-10-27 05:14:07 --> Form Validation Class Initialized
DEBUG - 2013-10-27 05:14:07 --> Controller Class Initialized
DEBUG - 2013-10-27 05:14:07 --> Model Class Initialized
DEBUG - 2013-10-27 05:14:07 --> Model Class Initialized
DEBUG - 2013-10-27 05:14:07 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-27 05:14:07 --> after session initialization................
ERROR - 2013-10-27 05:14:07 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-10-27 05:14:07 --> Config Class Initialized
DEBUG - 2013-10-27 05:14:07 --> Hooks Class Initialized
DEBUG - 2013-10-27 05:14:07 --> Utf8 Class Initialized
DEBUG - 2013-10-27 05:14:07 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 05:14:07 --> URI Class Initialized
DEBUG - 2013-10-27 05:14:07 --> Router Class Initialized
ERROR - 2013-10-27 05:14:07 --> 404 Page Not Found --> css
DEBUG - 2013-10-27 05:14:11 --> Config Class Initialized
DEBUG - 2013-10-27 05:14:11 --> Hooks Class Initialized
DEBUG - 2013-10-27 05:14:11 --> Utf8 Class Initialized
DEBUG - 2013-10-27 05:14:11 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 05:14:11 --> URI Class Initialized
DEBUG - 2013-10-27 05:14:11 --> Router Class Initialized
DEBUG - 2013-10-27 05:14:11 --> Output Class Initialized
DEBUG - 2013-10-27 05:14:11 --> Security Class Initialized
DEBUG - 2013-10-27 05:14:11 --> Input Class Initialized
DEBUG - 2013-10-27 05:14:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-27 05:14:11 --> Language Class Initialized
DEBUG - 2013-10-27 05:14:11 --> Loader Class Initialized
DEBUG - 2013-10-27 05:14:11 --> Helper loaded: form_helper
DEBUG - 2013-10-27 05:14:11 --> Helper loaded: url_helper
DEBUG - 2013-10-27 05:14:11 --> Helper loaded: html_helper
DEBUG - 2013-10-27 05:14:11 --> Database Driver Class Initialized
DEBUG - 2013-10-27 05:14:11 --> Session Class Initialized
DEBUG - 2013-10-27 05:14:11 --> Helper loaded: string_helper
DEBUG - 2013-10-27 05:14:11 --> Session routines successfully run
DEBUG - 2013-10-27 05:14:11 --> Form Validation Class Initialized
DEBUG - 2013-10-27 05:14:11 --> Controller Class Initialized
DEBUG - 2013-10-27 05:14:11 --> Model Class Initialized
DEBUG - 2013-10-27 05:14:11 --> Model Class Initialized
DEBUG - 2013-10-27 05:14:11 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-27 05:14:11 --> after session initialization................
INFO  - 2013-10-27 05:14:11 --> The forum id is 1
INFO  - 2013-10-27 05:14:11 --> inside retrieving pharmacy beyond id 
INFO  - 2013-10-27 05:14:11 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 1
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, ft.name as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '1'
ORDER BY `ft`.`name`)
INFO  - 2013-10-27 05:14:11 --> The encoded json is [{"id":"4","text":"Eye Defects","hasChildren":"true"},{"id":"1","text":"Astigmatism","hasChildren":"false"},{"id":"2","text":"Cataract","hasChildren":"false"}]
DEBUG - 2013-10-27 05:14:11 --> Final output sent to browser
DEBUG - 2013-10-27 05:14:11 --> Total execution time: 0.0630
DEBUG - 2013-10-27 05:20:00 --> Config Class Initialized
DEBUG - 2013-10-27 05:20:00 --> Hooks Class Initialized
DEBUG - 2013-10-27 05:20:00 --> Utf8 Class Initialized
DEBUG - 2013-10-27 05:20:00 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 05:20:00 --> URI Class Initialized
DEBUG - 2013-10-27 05:20:00 --> Router Class Initialized
DEBUG - 2013-10-27 05:20:00 --> Output Class Initialized
DEBUG - 2013-10-27 05:20:00 --> Security Class Initialized
DEBUG - 2013-10-27 05:20:00 --> Input Class Initialized
DEBUG - 2013-10-27 05:20:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-27 05:20:00 --> Language Class Initialized
DEBUG - 2013-10-27 05:20:00 --> Loader Class Initialized
DEBUG - 2013-10-27 05:20:00 --> Helper loaded: form_helper
DEBUG - 2013-10-27 05:20:00 --> Helper loaded: url_helper
DEBUG - 2013-10-27 05:20:00 --> Helper loaded: html_helper
DEBUG - 2013-10-27 05:20:00 --> Database Driver Class Initialized
DEBUG - 2013-10-27 05:20:00 --> Session Class Initialized
DEBUG - 2013-10-27 05:20:00 --> Helper loaded: string_helper
DEBUG - 2013-10-27 05:20:00 --> Session routines successfully run
DEBUG - 2013-10-27 05:20:00 --> Form Validation Class Initialized
DEBUG - 2013-10-27 05:20:00 --> Controller Class Initialized
DEBUG - 2013-10-27 05:20:00 --> Model Class Initialized
DEBUG - 2013-10-27 05:20:00 --> Model Class Initialized
DEBUG - 2013-10-27 05:20:00 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-27 05:20:00 --> after session initialization................
INFO  - 2013-10-27 05:20:00 --> inside retrieve most commented forum topic 
INFO  - 2013-10-27 05:20:00 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count`
INFO  - 2013-10-27 05:20:00 --> inside retrieve most commented forum topic 
INFO  - 2013-10-27 05:20:00 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`
FROM (`forum_topic` t)
WHERE `t`.`id_topicforum` =  '1'
INFO  - 2013-10-27 05:20:00 --> inside retrieving first 20 topics 
INFO  - 2013-10-27 05:20:00 --> SELECT `t`.`id_topicforum`, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count`
LIMIT 20
INFO  - 2013-10-27 05:20:00 --> inside retrieving pharmacy beyond id 
INFO  - 2013-10-27 05:20:00 --> SELECT `ff`.`id_forum` as id, `ff`.`name`, count(f.id_forum) as sub_forum
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` is null 
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`
INFO  - 2013-10-27 05:20:00 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-10-27 05:20:00 --> inside retrieving comments topic id and drug id is 1
INFO  - 2013-10-27 05:20:00 --> SELECT `tc`.`id_topiccomment`, `tc`.`comment`, `tc`.`timecreated`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-10-27 05:20:00 --> inside retrieving comments topic id 1
INFO  - 2013-10-27 05:20:00 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
INFO  - 2013-10-27 05:20:00 --> after forums has been clicked.................
INFO  - 2013-10-27 05:20:00 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-10-27 05:20:00 --> File loaded: ../pharmaray-application/views/forum.php
DEBUG - 2013-10-27 05:20:00 --> Final output sent to browser
DEBUG - 2013-10-27 05:20:00 --> Total execution time: 0.1050
DEBUG - 2013-10-27 05:20:00 --> Config Class Initialized
DEBUG - 2013-10-27 05:20:00 --> Hooks Class Initialized
DEBUG - 2013-10-27 05:20:00 --> Utf8 Class Initialized
DEBUG - 2013-10-27 05:20:00 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 05:20:00 --> URI Class Initialized
DEBUG - 2013-10-27 05:20:00 --> Router Class Initialized
DEBUG - 2013-10-27 05:20:00 --> Output Class Initialized
DEBUG - 2013-10-27 05:20:00 --> Security Class Initialized
DEBUG - 2013-10-27 05:20:00 --> Input Class Initialized
DEBUG - 2013-10-27 05:20:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-27 05:20:00 --> Language Class Initialized
DEBUG - 2013-10-27 05:20:00 --> Loader Class Initialized
DEBUG - 2013-10-27 05:20:00 --> Helper loaded: form_helper
DEBUG - 2013-10-27 05:20:00 --> Helper loaded: url_helper
DEBUG - 2013-10-27 05:20:00 --> Helper loaded: html_helper
DEBUG - 2013-10-27 05:20:00 --> Database Driver Class Initialized
DEBUG - 2013-10-27 05:20:00 --> Session Class Initialized
DEBUG - 2013-10-27 05:20:00 --> Helper loaded: string_helper
DEBUG - 2013-10-27 05:20:00 --> Session routines successfully run
DEBUG - 2013-10-27 05:20:00 --> Form Validation Class Initialized
DEBUG - 2013-10-27 05:20:00 --> Controller Class Initialized
DEBUG - 2013-10-27 05:20:00 --> Model Class Initialized
DEBUG - 2013-10-27 05:20:00 --> Model Class Initialized
DEBUG - 2013-10-27 05:20:00 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-27 05:20:00 --> after session initialization................
ERROR - 2013-10-27 05:20:00 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-10-27 05:20:00 --> Config Class Initialized
DEBUG - 2013-10-27 05:20:00 --> Hooks Class Initialized
DEBUG - 2013-10-27 05:20:00 --> Utf8 Class Initialized
DEBUG - 2013-10-27 05:20:00 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 05:20:00 --> URI Class Initialized
DEBUG - 2013-10-27 05:20:00 --> Router Class Initialized
ERROR - 2013-10-27 05:20:00 --> 404 Page Not Found --> css
DEBUG - 2013-10-27 05:20:05 --> Config Class Initialized
DEBUG - 2013-10-27 05:20:05 --> Hooks Class Initialized
DEBUG - 2013-10-27 05:20:05 --> Utf8 Class Initialized
DEBUG - 2013-10-27 05:20:05 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 05:20:05 --> URI Class Initialized
DEBUG - 2013-10-27 05:20:05 --> Router Class Initialized
DEBUG - 2013-10-27 05:20:05 --> Output Class Initialized
DEBUG - 2013-10-27 05:20:05 --> Security Class Initialized
DEBUG - 2013-10-27 05:20:05 --> Input Class Initialized
DEBUG - 2013-10-27 05:20:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-27 05:20:05 --> Language Class Initialized
DEBUG - 2013-10-27 05:20:05 --> Loader Class Initialized
DEBUG - 2013-10-27 05:20:05 --> Helper loaded: form_helper
DEBUG - 2013-10-27 05:20:05 --> Helper loaded: url_helper
DEBUG - 2013-10-27 05:20:05 --> Helper loaded: html_helper
DEBUG - 2013-10-27 05:20:05 --> Database Driver Class Initialized
DEBUG - 2013-10-27 05:20:05 --> Session Class Initialized
DEBUG - 2013-10-27 05:20:05 --> Helper loaded: string_helper
DEBUG - 2013-10-27 05:20:05 --> Session routines successfully run
DEBUG - 2013-10-27 05:20:05 --> Form Validation Class Initialized
DEBUG - 2013-10-27 05:20:05 --> Controller Class Initialized
DEBUG - 2013-10-27 05:20:05 --> Model Class Initialized
DEBUG - 2013-10-27 05:20:05 --> Model Class Initialized
DEBUG - 2013-10-27 05:20:05 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-27 05:20:05 --> after session initialization................
INFO  - 2013-10-27 05:20:05 --> The forum id is 1
INFO  - 2013-10-27 05:20:05 --> inside retrieving pharmacy beyond id 
INFO  - 2013-10-27 05:20:05 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, true as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 1
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, ft.name as text, false as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '1'
ORDER BY `ft`.`name`)
INFO  - 2013-10-27 05:20:05 --> The encoded json is [{"id":"4","text":"Eye Defects","hasChildren":"1"},{"id":"1","text":"Astigmatism","hasChildren":"0"},{"id":"2","text":"Cataract","hasChildren":"0"}]
DEBUG - 2013-10-27 05:20:05 --> Final output sent to browser
DEBUG - 2013-10-27 05:20:05 --> Total execution time: 0.1330
DEBUG - 2013-10-27 05:47:48 --> Config Class Initialized
DEBUG - 2013-10-27 05:47:48 --> Hooks Class Initialized
DEBUG - 2013-10-27 05:47:48 --> Utf8 Class Initialized
DEBUG - 2013-10-27 05:47:48 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 05:47:48 --> URI Class Initialized
DEBUG - 2013-10-27 05:47:48 --> Router Class Initialized
DEBUG - 2013-10-27 05:47:48 --> Output Class Initialized
DEBUG - 2013-10-27 05:47:48 --> Security Class Initialized
DEBUG - 2013-10-27 05:47:48 --> Input Class Initialized
DEBUG - 2013-10-27 05:47:48 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-27 05:47:48 --> Language Class Initialized
DEBUG - 2013-10-27 05:47:48 --> Loader Class Initialized
DEBUG - 2013-10-27 05:47:48 --> Helper loaded: form_helper
DEBUG - 2013-10-27 05:47:48 --> Helper loaded: url_helper
DEBUG - 2013-10-27 05:47:48 --> Helper loaded: html_helper
DEBUG - 2013-10-27 05:47:48 --> Database Driver Class Initialized
DEBUG - 2013-10-27 05:47:49 --> Session Class Initialized
DEBUG - 2013-10-27 05:47:49 --> Helper loaded: string_helper
DEBUG - 2013-10-27 05:47:49 --> Session routines successfully run
DEBUG - 2013-10-27 05:47:49 --> Form Validation Class Initialized
DEBUG - 2013-10-27 05:47:49 --> Controller Class Initialized
DEBUG - 2013-10-27 05:47:49 --> Model Class Initialized
DEBUG - 2013-10-27 05:47:49 --> Model Class Initialized
DEBUG - 2013-10-27 05:47:49 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-27 05:47:49 --> after session initialization................
INFO  - 2013-10-27 05:47:49 --> inside retrieve most commented forum topic 
INFO  - 2013-10-27 05:47:49 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count`
INFO  - 2013-10-27 05:47:49 --> inside retrieve most commented forum topic 
INFO  - 2013-10-27 05:47:49 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`
FROM (`forum_topic` t)
WHERE `t`.`id_topicforum` =  '1'
INFO  - 2013-10-27 05:47:49 --> inside retrieving first 20 topics 
INFO  - 2013-10-27 05:47:49 --> SELECT `t`.`id_topicforum`, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count`
LIMIT 20
INFO  - 2013-10-27 05:47:49 --> inside retrieving pharmacy beyond id 
INFO  - 2013-10-27 05:47:49 --> SELECT `ff`.`id_forum` as id, `ff`.`name`, count(f.id_forum) as sub_forum
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` is null 
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`
INFO  - 2013-10-27 05:47:49 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-10-27 05:47:49 --> inside retrieving comments topic id and drug id is 1
INFO  - 2013-10-27 05:47:49 --> SELECT `tc`.`id_topiccomment`, `tc`.`comment`, `tc`.`timecreated`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-10-27 05:47:49 --> inside retrieving comments topic id 1
INFO  - 2013-10-27 05:47:49 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
INFO  - 2013-10-27 05:47:49 --> after forums has been clicked.................
INFO  - 2013-10-27 05:47:49 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-10-27 05:47:49 --> File loaded: ../pharmaray-application/views/forum.php
DEBUG - 2013-10-27 05:47:49 --> Final output sent to browser
DEBUG - 2013-10-27 05:47:49 --> Total execution time: 1.1191
DEBUG - 2013-10-27 05:47:49 --> Config Class Initialized
DEBUG - 2013-10-27 05:47:49 --> Hooks Class Initialized
DEBUG - 2013-10-27 05:47:49 --> Utf8 Class Initialized
DEBUG - 2013-10-27 05:47:49 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 05:47:49 --> URI Class Initialized
DEBUG - 2013-10-27 05:47:49 --> Router Class Initialized
DEBUG - 2013-10-27 05:47:49 --> Output Class Initialized
DEBUG - 2013-10-27 05:47:49 --> Security Class Initialized
DEBUG - 2013-10-27 05:47:49 --> Input Class Initialized
DEBUG - 2013-10-27 05:47:49 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-27 05:47:49 --> Language Class Initialized
DEBUG - 2013-10-27 05:47:49 --> Loader Class Initialized
DEBUG - 2013-10-27 05:47:49 --> Helper loaded: form_helper
DEBUG - 2013-10-27 05:47:49 --> Helper loaded: url_helper
DEBUG - 2013-10-27 05:47:49 --> Helper loaded: html_helper
DEBUG - 2013-10-27 05:47:49 --> Database Driver Class Initialized
DEBUG - 2013-10-27 05:47:49 --> Session Class Initialized
DEBUG - 2013-10-27 05:47:49 --> Helper loaded: string_helper
DEBUG - 2013-10-27 05:47:49 --> Session routines successfully run
DEBUG - 2013-10-27 05:47:49 --> Form Validation Class Initialized
DEBUG - 2013-10-27 05:47:49 --> Controller Class Initialized
DEBUG - 2013-10-27 05:47:49 --> Model Class Initialized
DEBUG - 2013-10-27 05:47:49 --> Model Class Initialized
DEBUG - 2013-10-27 05:47:49 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-27 05:47:49 --> after session initialization................
ERROR - 2013-10-27 05:47:49 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-10-27 05:47:49 --> Config Class Initialized
DEBUG - 2013-10-27 05:47:49 --> Hooks Class Initialized
DEBUG - 2013-10-27 05:47:49 --> Utf8 Class Initialized
DEBUG - 2013-10-27 05:47:49 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 05:47:49 --> URI Class Initialized
DEBUG - 2013-10-27 05:47:49 --> Router Class Initialized
ERROR - 2013-10-27 05:47:49 --> 404 Page Not Found --> css
DEBUG - 2013-10-27 05:47:52 --> Config Class Initialized
DEBUG - 2013-10-27 05:47:52 --> Hooks Class Initialized
DEBUG - 2013-10-27 05:47:52 --> Utf8 Class Initialized
DEBUG - 2013-10-27 05:47:52 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 05:47:52 --> URI Class Initialized
DEBUG - 2013-10-27 05:47:52 --> Router Class Initialized
DEBUG - 2013-10-27 05:47:52 --> Output Class Initialized
DEBUG - 2013-10-27 05:47:52 --> Security Class Initialized
DEBUG - 2013-10-27 05:47:52 --> Input Class Initialized
DEBUG - 2013-10-27 05:47:52 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-27 05:47:52 --> Language Class Initialized
DEBUG - 2013-10-27 05:47:52 --> Loader Class Initialized
DEBUG - 2013-10-27 05:47:52 --> Helper loaded: form_helper
DEBUG - 2013-10-27 05:47:52 --> Helper loaded: url_helper
DEBUG - 2013-10-27 05:47:52 --> Helper loaded: html_helper
DEBUG - 2013-10-27 05:47:52 --> Database Driver Class Initialized
DEBUG - 2013-10-27 05:47:52 --> Session Class Initialized
DEBUG - 2013-10-27 05:47:52 --> Helper loaded: string_helper
DEBUG - 2013-10-27 05:47:52 --> Session routines successfully run
DEBUG - 2013-10-27 05:47:52 --> Form Validation Class Initialized
DEBUG - 2013-10-27 05:47:52 --> Controller Class Initialized
DEBUG - 2013-10-27 05:47:52 --> Model Class Initialized
DEBUG - 2013-10-27 05:47:52 --> Model Class Initialized
DEBUG - 2013-10-27 05:47:52 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-27 05:47:52 --> after session initialization................
INFO  - 2013-10-27 05:47:52 --> The forum id is 1
INFO  - 2013-10-27 05:47:52 --> inside retrieving pharmacy beyond id 
INFO  - 2013-10-27 05:47:52 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, true as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 1
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, ft.name as text, false as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '1'
ORDER BY `ft`.`name`)
INFO  - 2013-10-27 05:47:52 --> The encoded json is [{"id":"4","text":"Eye Defects","hasChildren":"1"},{"id":"1","text":"Astigmatism","hasChildren":"0"},{"id":"2","text":"Cataract","hasChildren":"0"}]
DEBUG - 2013-10-27 05:47:52 --> Final output sent to browser
DEBUG - 2013-10-27 05:47:52 --> Total execution time: 0.0660
DEBUG - 2013-10-27 07:20:10 --> Config Class Initialized
DEBUG - 2013-10-27 07:20:10 --> Hooks Class Initialized
DEBUG - 2013-10-27 07:20:10 --> Utf8 Class Initialized
DEBUG - 2013-10-27 07:20:10 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 07:20:10 --> URI Class Initialized
DEBUG - 2013-10-27 07:20:10 --> Router Class Initialized
DEBUG - 2013-10-27 07:20:10 --> Output Class Initialized
DEBUG - 2013-10-27 07:20:10 --> Security Class Initialized
DEBUG - 2013-10-27 07:20:10 --> Input Class Initialized
DEBUG - 2013-10-27 07:20:10 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-27 07:20:10 --> Language Class Initialized
DEBUG - 2013-10-27 07:20:10 --> Loader Class Initialized
DEBUG - 2013-10-27 07:20:10 --> Helper loaded: form_helper
DEBUG - 2013-10-27 07:20:10 --> Helper loaded: url_helper
DEBUG - 2013-10-27 07:20:10 --> Helper loaded: html_helper
DEBUG - 2013-10-27 07:20:10 --> Database Driver Class Initialized
DEBUG - 2013-10-27 07:20:10 --> Session Class Initialized
DEBUG - 2013-10-27 07:20:10 --> Helper loaded: string_helper
DEBUG - 2013-10-27 07:20:10 --> Session routines successfully run
DEBUG - 2013-10-27 07:20:10 --> Form Validation Class Initialized
DEBUG - 2013-10-27 07:20:10 --> Controller Class Initialized
DEBUG - 2013-10-27 07:20:10 --> Model Class Initialized
DEBUG - 2013-10-27 07:20:10 --> Model Class Initialized
DEBUG - 2013-10-27 07:20:10 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-27 07:20:10 --> after session initialization................
INFO  - 2013-10-27 07:20:10 --> inside retrieve most commented forum topic 
INFO  - 2013-10-27 07:20:10 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count`
INFO  - 2013-10-27 07:20:10 --> inside retrieve most commented forum topic 
INFO  - 2013-10-27 07:20:10 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`
FROM (`forum_topic` t)
WHERE `t`.`id_topicforum` =  '1'
INFO  - 2013-10-27 07:20:10 --> inside retrieving first 20 topics 
INFO  - 2013-10-27 07:20:10 --> SELECT `t`.`id_topicforum`, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count`
LIMIT 20
INFO  - 2013-10-27 07:20:10 --> inside retrieving pharmacy beyond id 
INFO  - 2013-10-27 07:20:10 --> SELECT `ff`.`id_forum` as id, `ff`.`name`, count(f.id_forum) as sub_forum
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` is null 
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`
INFO  - 2013-10-27 07:20:10 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-10-27 07:20:10 --> inside retrieving comments topic id and drug id is 1
INFO  - 2013-10-27 07:20:10 --> SELECT `tc`.`id_topiccomment`, `tc`.`comment`, `tc`.`timecreated`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-10-27 07:20:10 --> inside retrieving comments topic id 1
INFO  - 2013-10-27 07:20:10 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
INFO  - 2013-10-27 07:20:10 --> after forums has been clicked.................
INFO  - 2013-10-27 07:20:10 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-10-27 07:20:10 --> File loaded: ../pharmaray-application/views/forum.php
DEBUG - 2013-10-27 07:20:10 --> Final output sent to browser
DEBUG - 2013-10-27 07:20:10 --> Total execution time: 0.0820
DEBUG - 2013-10-27 07:20:11 --> Config Class Initialized
DEBUG - 2013-10-27 07:20:11 --> Hooks Class Initialized
DEBUG - 2013-10-27 07:20:11 --> Utf8 Class Initialized
DEBUG - 2013-10-27 07:20:11 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 07:20:11 --> URI Class Initialized
DEBUG - 2013-10-27 07:20:11 --> Router Class Initialized
DEBUG - 2013-10-27 07:20:11 --> Output Class Initialized
DEBUG - 2013-10-27 07:20:11 --> Security Class Initialized
DEBUG - 2013-10-27 07:20:11 --> Input Class Initialized
DEBUG - 2013-10-27 07:20:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-27 07:20:11 --> Language Class Initialized
DEBUG - 2013-10-27 07:20:11 --> Loader Class Initialized
DEBUG - 2013-10-27 07:20:11 --> Helper loaded: form_helper
DEBUG - 2013-10-27 07:20:11 --> Helper loaded: url_helper
DEBUG - 2013-10-27 07:20:11 --> Helper loaded: html_helper
DEBUG - 2013-10-27 07:20:11 --> Database Driver Class Initialized
DEBUG - 2013-10-27 07:20:11 --> Session Class Initialized
DEBUG - 2013-10-27 07:20:11 --> Helper loaded: string_helper
DEBUG - 2013-10-27 07:20:11 --> Session routines successfully run
DEBUG - 2013-10-27 07:20:11 --> Form Validation Class Initialized
DEBUG - 2013-10-27 07:20:11 --> Controller Class Initialized
DEBUG - 2013-10-27 07:20:11 --> Model Class Initialized
DEBUG - 2013-10-27 07:20:11 --> Model Class Initialized
DEBUG - 2013-10-27 07:20:11 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-27 07:20:11 --> after session initialization................
ERROR - 2013-10-27 07:20:11 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-10-27 07:20:11 --> Config Class Initialized
DEBUG - 2013-10-27 07:20:11 --> Hooks Class Initialized
DEBUG - 2013-10-27 07:20:11 --> Utf8 Class Initialized
DEBUG - 2013-10-27 07:20:11 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 07:20:11 --> URI Class Initialized
DEBUG - 2013-10-27 07:20:11 --> Router Class Initialized
ERROR - 2013-10-27 07:20:11 --> 404 Page Not Found --> css
DEBUG - 2013-10-27 07:20:14 --> Config Class Initialized
DEBUG - 2013-10-27 07:20:14 --> Hooks Class Initialized
DEBUG - 2013-10-27 07:20:14 --> Utf8 Class Initialized
DEBUG - 2013-10-27 07:20:14 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 07:20:14 --> URI Class Initialized
DEBUG - 2013-10-27 07:20:14 --> Router Class Initialized
DEBUG - 2013-10-27 07:20:14 --> Output Class Initialized
DEBUG - 2013-10-27 07:20:14 --> Security Class Initialized
DEBUG - 2013-10-27 07:20:14 --> Input Class Initialized
DEBUG - 2013-10-27 07:20:14 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-27 07:20:14 --> Language Class Initialized
DEBUG - 2013-10-27 07:20:14 --> Loader Class Initialized
DEBUG - 2013-10-27 07:20:14 --> Helper loaded: form_helper
DEBUG - 2013-10-27 07:20:14 --> Helper loaded: url_helper
DEBUG - 2013-10-27 07:20:14 --> Helper loaded: html_helper
DEBUG - 2013-10-27 07:20:14 --> Database Driver Class Initialized
DEBUG - 2013-10-27 07:20:14 --> Session Class Initialized
DEBUG - 2013-10-27 07:20:14 --> Helper loaded: string_helper
DEBUG - 2013-10-27 07:20:14 --> Session routines successfully run
DEBUG - 2013-10-27 07:20:14 --> Form Validation Class Initialized
DEBUG - 2013-10-27 07:20:14 --> Controller Class Initialized
DEBUG - 2013-10-27 07:20:14 --> Model Class Initialized
DEBUG - 2013-10-27 07:20:14 --> Model Class Initialized
DEBUG - 2013-10-27 07:20:14 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-27 07:20:14 --> after session initialization................
INFO  - 2013-10-27 07:20:14 --> The forum id is 1
INFO  - 2013-10-27 07:20:14 --> inside retrieving pharmacy beyond id 
INFO  - 2013-10-27 07:20:14 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, true as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 1
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, ft.name as text, false as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '1'
ORDER BY `ft`.`name`)
INFO  - 2013-10-27 07:20:14 --> The encoded json is [{"id":"4","text":"Eye Defects","hasChildren":"1"},{"id":"1","text":"Astigmatism","hasChildren":"0"},{"id":"2","text":"Cataract","hasChildren":"0"}]
DEBUG - 2013-10-27 07:20:14 --> Final output sent to browser
DEBUG - 2013-10-27 07:20:14 --> Total execution time: 0.0800
DEBUG - 2013-10-27 07:20:54 --> Config Class Initialized
DEBUG - 2013-10-27 07:20:54 --> Hooks Class Initialized
DEBUG - 2013-10-27 07:20:54 --> Utf8 Class Initialized
DEBUG - 2013-10-27 07:20:54 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 07:20:54 --> URI Class Initialized
DEBUG - 2013-10-27 07:20:54 --> Router Class Initialized
DEBUG - 2013-10-27 07:20:54 --> Output Class Initialized
DEBUG - 2013-10-27 07:20:54 --> Security Class Initialized
DEBUG - 2013-10-27 07:20:54 --> Input Class Initialized
DEBUG - 2013-10-27 07:20:54 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-27 07:20:54 --> Language Class Initialized
DEBUG - 2013-10-27 07:20:54 --> Loader Class Initialized
DEBUG - 2013-10-27 07:20:54 --> Helper loaded: form_helper
DEBUG - 2013-10-27 07:20:54 --> Helper loaded: url_helper
DEBUG - 2013-10-27 07:20:54 --> Helper loaded: html_helper
DEBUG - 2013-10-27 07:20:54 --> Database Driver Class Initialized
DEBUG - 2013-10-27 07:20:54 --> Session Class Initialized
DEBUG - 2013-10-27 07:20:54 --> Helper loaded: string_helper
DEBUG - 2013-10-27 07:20:54 --> Session routines successfully run
DEBUG - 2013-10-27 07:20:54 --> Form Validation Class Initialized
DEBUG - 2013-10-27 07:20:54 --> Controller Class Initialized
DEBUG - 2013-10-27 07:20:54 --> Model Class Initialized
DEBUG - 2013-10-27 07:20:54 --> Model Class Initialized
DEBUG - 2013-10-27 07:20:54 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-27 07:20:54 --> after session initialization................
INFO  - 2013-10-27 07:20:54 --> inside retrieve most commented forum topic 
INFO  - 2013-10-27 07:20:54 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count`
INFO  - 2013-10-27 07:20:54 --> inside retrieve most commented forum topic 
INFO  - 2013-10-27 07:20:54 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`
FROM (`forum_topic` t)
WHERE `t`.`id_topicforum` =  '1'
INFO  - 2013-10-27 07:20:54 --> inside retrieving first 20 topics 
INFO  - 2013-10-27 07:20:54 --> SELECT `t`.`id_topicforum`, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count`
LIMIT 20
INFO  - 2013-10-27 07:20:54 --> inside retrieving pharmacy beyond id 
INFO  - 2013-10-27 07:20:54 --> SELECT `ff`.`id_forum` as id, `ff`.`name`, count(f.id_forum) as sub_forum
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` is null 
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`
INFO  - 2013-10-27 07:20:54 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-10-27 07:20:54 --> inside retrieving comments topic id and drug id is 1
INFO  - 2013-10-27 07:20:54 --> SELECT `tc`.`id_topiccomment`, `tc`.`comment`, `tc`.`timecreated`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-10-27 07:20:54 --> inside retrieving comments topic id 1
INFO  - 2013-10-27 07:20:54 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
INFO  - 2013-10-27 07:20:54 --> after forums has been clicked.................
INFO  - 2013-10-27 07:20:54 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-10-27 07:20:54 --> File loaded: ../pharmaray-application/views/forum.php
DEBUG - 2013-10-27 07:20:54 --> Final output sent to browser
DEBUG - 2013-10-27 07:20:54 --> Total execution time: 0.0800
DEBUG - 2013-10-27 07:20:54 --> Config Class Initialized
DEBUG - 2013-10-27 07:20:54 --> Hooks Class Initialized
DEBUG - 2013-10-27 07:20:54 --> Utf8 Class Initialized
DEBUG - 2013-10-27 07:20:54 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 07:20:54 --> URI Class Initialized
DEBUG - 2013-10-27 07:20:54 --> Router Class Initialized
DEBUG - 2013-10-27 07:20:54 --> Output Class Initialized
DEBUG - 2013-10-27 07:20:54 --> Security Class Initialized
DEBUG - 2013-10-27 07:20:54 --> Input Class Initialized
DEBUG - 2013-10-27 07:20:54 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-27 07:20:54 --> Language Class Initialized
DEBUG - 2013-10-27 07:20:54 --> Loader Class Initialized
DEBUG - 2013-10-27 07:20:54 --> Helper loaded: form_helper
DEBUG - 2013-10-27 07:20:54 --> Helper loaded: url_helper
DEBUG - 2013-10-27 07:20:54 --> Helper loaded: html_helper
DEBUG - 2013-10-27 07:20:54 --> Database Driver Class Initialized
DEBUG - 2013-10-27 07:20:54 --> Session Class Initialized
DEBUG - 2013-10-27 07:20:54 --> Helper loaded: string_helper
DEBUG - 2013-10-27 07:20:54 --> Session routines successfully run
DEBUG - 2013-10-27 07:20:54 --> Form Validation Class Initialized
DEBUG - 2013-10-27 07:20:54 --> Controller Class Initialized
DEBUG - 2013-10-27 07:20:54 --> Model Class Initialized
DEBUG - 2013-10-27 07:20:54 --> Model Class Initialized
DEBUG - 2013-10-27 07:20:54 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-27 07:20:54 --> after session initialization................
ERROR - 2013-10-27 07:20:54 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-10-27 07:20:54 --> Config Class Initialized
DEBUG - 2013-10-27 07:20:54 --> Hooks Class Initialized
DEBUG - 2013-10-27 07:20:54 --> Utf8 Class Initialized
DEBUG - 2013-10-27 07:20:54 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 07:20:54 --> URI Class Initialized
DEBUG - 2013-10-27 07:20:54 --> Router Class Initialized
ERROR - 2013-10-27 07:20:54 --> 404 Page Not Found --> css
DEBUG - 2013-10-27 07:20:56 --> Config Class Initialized
DEBUG - 2013-10-27 07:20:56 --> Hooks Class Initialized
DEBUG - 2013-10-27 07:20:56 --> Utf8 Class Initialized
DEBUG - 2013-10-27 07:20:56 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 07:20:56 --> URI Class Initialized
DEBUG - 2013-10-27 07:20:56 --> Router Class Initialized
DEBUG - 2013-10-27 07:20:56 --> Output Class Initialized
DEBUG - 2013-10-27 07:20:56 --> Security Class Initialized
DEBUG - 2013-10-27 07:20:56 --> Input Class Initialized
DEBUG - 2013-10-27 07:20:56 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-27 07:20:56 --> Language Class Initialized
DEBUG - 2013-10-27 07:20:56 --> Loader Class Initialized
DEBUG - 2013-10-27 07:20:56 --> Helper loaded: form_helper
DEBUG - 2013-10-27 07:20:56 --> Helper loaded: url_helper
DEBUG - 2013-10-27 07:20:56 --> Helper loaded: html_helper
DEBUG - 2013-10-27 07:20:56 --> Database Driver Class Initialized
DEBUG - 2013-10-27 07:20:56 --> Session Class Initialized
DEBUG - 2013-10-27 07:20:56 --> Helper loaded: string_helper
DEBUG - 2013-10-27 07:20:56 --> Session routines successfully run
DEBUG - 2013-10-27 07:20:56 --> Form Validation Class Initialized
DEBUG - 2013-10-27 07:20:56 --> Controller Class Initialized
DEBUG - 2013-10-27 07:20:56 --> Model Class Initialized
DEBUG - 2013-10-27 07:20:56 --> Model Class Initialized
DEBUG - 2013-10-27 07:20:56 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-27 07:20:56 --> after session initialization................
INFO  - 2013-10-27 07:20:56 --> inside retrieve most commented forum topic 
INFO  - 2013-10-27 07:20:56 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count`
INFO  - 2013-10-27 07:20:56 --> inside retrieve most commented forum topic 
INFO  - 2013-10-27 07:20:56 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`
FROM (`forum_topic` t)
WHERE `t`.`id_topicforum` =  '1'
INFO  - 2013-10-27 07:20:56 --> inside retrieving first 20 topics 
INFO  - 2013-10-27 07:20:56 --> SELECT `t`.`id_topicforum`, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count`
LIMIT 20
INFO  - 2013-10-27 07:20:56 --> inside retrieving pharmacy beyond id 
INFO  - 2013-10-27 07:20:56 --> SELECT `ff`.`id_forum` as id, `ff`.`name`, count(f.id_forum) as sub_forum
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` is null 
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`
INFO  - 2013-10-27 07:20:56 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-10-27 07:20:56 --> inside retrieving comments topic id and drug id is 1
INFO  - 2013-10-27 07:20:56 --> SELECT `tc`.`id_topiccomment`, `tc`.`comment`, `tc`.`timecreated`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-10-27 07:20:56 --> inside retrieving comments topic id 1
INFO  - 2013-10-27 07:20:56 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
INFO  - 2013-10-27 07:20:56 --> after forums has been clicked.................
INFO  - 2013-10-27 07:20:56 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-10-27 07:20:56 --> File loaded: ../pharmaray-application/views/forum.php
DEBUG - 2013-10-27 07:20:56 --> Final output sent to browser
DEBUG - 2013-10-27 07:20:56 --> Total execution time: 0.0800
DEBUG - 2013-10-27 07:20:56 --> Config Class Initialized
DEBUG - 2013-10-27 07:20:56 --> Hooks Class Initialized
DEBUG - 2013-10-27 07:20:56 --> Utf8 Class Initialized
DEBUG - 2013-10-27 07:20:56 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 07:20:56 --> URI Class Initialized
DEBUG - 2013-10-27 07:20:56 --> Router Class Initialized
DEBUG - 2013-10-27 07:20:56 --> Output Class Initialized
DEBUG - 2013-10-27 07:20:56 --> Security Class Initialized
DEBUG - 2013-10-27 07:20:56 --> Input Class Initialized
DEBUG - 2013-10-27 07:20:56 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-27 07:20:56 --> Language Class Initialized
DEBUG - 2013-10-27 07:20:56 --> Loader Class Initialized
DEBUG - 2013-10-27 07:20:56 --> Helper loaded: form_helper
DEBUG - 2013-10-27 07:20:56 --> Helper loaded: url_helper
DEBUG - 2013-10-27 07:20:56 --> Helper loaded: html_helper
DEBUG - 2013-10-27 07:20:56 --> Database Driver Class Initialized
DEBUG - 2013-10-27 07:20:57 --> Session Class Initialized
DEBUG - 2013-10-27 07:20:57 --> Helper loaded: string_helper
DEBUG - 2013-10-27 07:20:57 --> Session routines successfully run
DEBUG - 2013-10-27 07:20:57 --> Form Validation Class Initialized
DEBUG - 2013-10-27 07:20:57 --> Controller Class Initialized
DEBUG - 2013-10-27 07:20:57 --> Model Class Initialized
DEBUG - 2013-10-27 07:20:57 --> Model Class Initialized
DEBUG - 2013-10-27 07:20:57 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-27 07:20:57 --> after session initialization................
ERROR - 2013-10-27 07:20:57 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-10-27 07:20:57 --> Config Class Initialized
DEBUG - 2013-10-27 07:20:57 --> Hooks Class Initialized
DEBUG - 2013-10-27 07:20:57 --> Utf8 Class Initialized
DEBUG - 2013-10-27 07:20:57 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 07:20:57 --> URI Class Initialized
DEBUG - 2013-10-27 07:20:57 --> Router Class Initialized
ERROR - 2013-10-27 07:20:57 --> 404 Page Not Found --> css
DEBUG - 2013-10-27 07:21:00 --> Config Class Initialized
DEBUG - 2013-10-27 07:21:00 --> Hooks Class Initialized
DEBUG - 2013-10-27 07:21:00 --> Utf8 Class Initialized
DEBUG - 2013-10-27 07:21:00 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 07:21:00 --> URI Class Initialized
DEBUG - 2013-10-27 07:21:00 --> Router Class Initialized
DEBUG - 2013-10-27 07:21:00 --> Output Class Initialized
DEBUG - 2013-10-27 07:21:00 --> Security Class Initialized
DEBUG - 2013-10-27 07:21:00 --> Input Class Initialized
DEBUG - 2013-10-27 07:21:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-27 07:21:00 --> Language Class Initialized
DEBUG - 2013-10-27 07:21:00 --> Loader Class Initialized
DEBUG - 2013-10-27 07:21:00 --> Helper loaded: form_helper
DEBUG - 2013-10-27 07:21:00 --> Helper loaded: url_helper
DEBUG - 2013-10-27 07:21:00 --> Helper loaded: html_helper
DEBUG - 2013-10-27 07:21:00 --> Database Driver Class Initialized
DEBUG - 2013-10-27 07:21:00 --> Session Class Initialized
DEBUG - 2013-10-27 07:21:00 --> Helper loaded: string_helper
DEBUG - 2013-10-27 07:21:00 --> Session routines successfully run
DEBUG - 2013-10-27 07:21:00 --> Form Validation Class Initialized
DEBUG - 2013-10-27 07:21:00 --> Controller Class Initialized
DEBUG - 2013-10-27 07:21:00 --> Model Class Initialized
DEBUG - 2013-10-27 07:21:00 --> Model Class Initialized
DEBUG - 2013-10-27 07:21:00 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-27 07:21:00 --> after session initialization................
INFO  - 2013-10-27 07:21:00 --> The forum id is 1
INFO  - 2013-10-27 07:21:00 --> inside retrieving pharmacy beyond id 
INFO  - 2013-10-27 07:21:00 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, true as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 1
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, ft.name as text, false as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '1'
ORDER BY `ft`.`name`)
ERROR - 2013-10-27 07:21:00 --> Severity: Notice  --> Array to string conversion C:\xampp\htdocs\Pharmarays\pharmaray-application\models\members_model\membermodel.php 638
INFO  - 2013-10-27 07:21:00 --> new result =======================Array
INFO  - 2013-10-27 07:21:00 --> The encoded json is [{"id":"4","text":"Eye Defects","hasChildren":"1"},{"id":"1","text":"Astigmatism","hasChildren":"0"},{"id":"2","text":"Cataract","hasChildren":"0"}]
DEBUG - 2013-10-27 07:21:00 --> Final output sent to browser
DEBUG - 2013-10-27 07:21:00 --> Total execution time: 0.0700
DEBUG - 2013-10-27 07:21:48 --> Config Class Initialized
DEBUG - 2013-10-27 07:21:48 --> Hooks Class Initialized
DEBUG - 2013-10-27 07:21:48 --> Utf8 Class Initialized
DEBUG - 2013-10-27 07:21:48 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 07:21:48 --> URI Class Initialized
DEBUG - 2013-10-27 07:21:48 --> Router Class Initialized
DEBUG - 2013-10-27 07:21:48 --> Output Class Initialized
DEBUG - 2013-10-27 07:21:48 --> Security Class Initialized
DEBUG - 2013-10-27 07:21:48 --> Input Class Initialized
DEBUG - 2013-10-27 07:21:48 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-27 07:21:48 --> Language Class Initialized
DEBUG - 2013-10-27 07:21:48 --> Loader Class Initialized
DEBUG - 2013-10-27 07:21:48 --> Helper loaded: form_helper
DEBUG - 2013-10-27 07:21:48 --> Helper loaded: url_helper
DEBUG - 2013-10-27 07:21:48 --> Helper loaded: html_helper
DEBUG - 2013-10-27 07:21:48 --> Database Driver Class Initialized
DEBUG - 2013-10-27 07:21:48 --> Session Class Initialized
DEBUG - 2013-10-27 07:21:48 --> Helper loaded: string_helper
DEBUG - 2013-10-27 07:21:48 --> Session routines successfully run
DEBUG - 2013-10-27 07:21:48 --> Form Validation Class Initialized
DEBUG - 2013-10-27 07:21:48 --> Controller Class Initialized
DEBUG - 2013-10-27 07:21:48 --> Model Class Initialized
DEBUG - 2013-10-27 07:21:48 --> Model Class Initialized
DEBUG - 2013-10-27 07:21:48 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-27 07:21:48 --> after session initialization................
INFO  - 2013-10-27 07:21:48 --> inside retrieve most commented forum topic 
INFO  - 2013-10-27 07:21:48 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count`
INFO  - 2013-10-27 07:21:48 --> inside retrieve most commented forum topic 
INFO  - 2013-10-27 07:21:48 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`
FROM (`forum_topic` t)
WHERE `t`.`id_topicforum` =  '1'
INFO  - 2013-10-27 07:21:48 --> inside retrieving first 20 topics 
INFO  - 2013-10-27 07:21:48 --> SELECT `t`.`id_topicforum`, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count`
LIMIT 20
INFO  - 2013-10-27 07:21:48 --> inside retrieving pharmacy beyond id 
INFO  - 2013-10-27 07:21:48 --> SELECT `ff`.`id_forum` as id, `ff`.`name`, count(f.id_forum) as sub_forum
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` is null 
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`
INFO  - 2013-10-27 07:21:48 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-10-27 07:21:48 --> inside retrieving comments topic id and drug id is 1
INFO  - 2013-10-27 07:21:48 --> SELECT `tc`.`id_topiccomment`, `tc`.`comment`, `tc`.`timecreated`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-10-27 07:21:48 --> inside retrieving comments topic id 1
INFO  - 2013-10-27 07:21:48 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
INFO  - 2013-10-27 07:21:48 --> after forums has been clicked.................
INFO  - 2013-10-27 07:21:48 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-10-27 07:21:48 --> File loaded: ../pharmaray-application/views/forum.php
DEBUG - 2013-10-27 07:21:48 --> Final output sent to browser
DEBUG - 2013-10-27 07:21:48 --> Total execution time: 0.0900
DEBUG - 2013-10-27 07:21:48 --> Config Class Initialized
DEBUG - 2013-10-27 07:21:48 --> Hooks Class Initialized
DEBUG - 2013-10-27 07:21:48 --> Utf8 Class Initialized
DEBUG - 2013-10-27 07:21:48 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 07:21:48 --> URI Class Initialized
DEBUG - 2013-10-27 07:21:48 --> Router Class Initialized
DEBUG - 2013-10-27 07:21:48 --> Output Class Initialized
DEBUG - 2013-10-27 07:21:48 --> Security Class Initialized
DEBUG - 2013-10-27 07:21:48 --> Input Class Initialized
DEBUG - 2013-10-27 07:21:48 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-27 07:21:48 --> Language Class Initialized
DEBUG - 2013-10-27 07:21:48 --> Loader Class Initialized
DEBUG - 2013-10-27 07:21:48 --> Helper loaded: form_helper
DEBUG - 2013-10-27 07:21:48 --> Helper loaded: url_helper
DEBUG - 2013-10-27 07:21:48 --> Helper loaded: html_helper
DEBUG - 2013-10-27 07:21:48 --> Database Driver Class Initialized
DEBUG - 2013-10-27 07:21:48 --> Session Class Initialized
DEBUG - 2013-10-27 07:21:48 --> Helper loaded: string_helper
DEBUG - 2013-10-27 07:21:48 --> Session routines successfully run
DEBUG - 2013-10-27 07:21:48 --> Form Validation Class Initialized
DEBUG - 2013-10-27 07:21:48 --> Controller Class Initialized
DEBUG - 2013-10-27 07:21:48 --> Model Class Initialized
DEBUG - 2013-10-27 07:21:48 --> Model Class Initialized
DEBUG - 2013-10-27 07:21:48 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-27 07:21:48 --> after session initialization................
ERROR - 2013-10-27 07:21:48 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-10-27 07:21:48 --> Config Class Initialized
DEBUG - 2013-10-27 07:21:48 --> Hooks Class Initialized
DEBUG - 2013-10-27 07:21:48 --> Utf8 Class Initialized
DEBUG - 2013-10-27 07:21:48 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 07:21:48 --> URI Class Initialized
DEBUG - 2013-10-27 07:21:48 --> Router Class Initialized
ERROR - 2013-10-27 07:21:48 --> 404 Page Not Found --> css
DEBUG - 2013-10-27 07:21:52 --> Config Class Initialized
DEBUG - 2013-10-27 07:21:52 --> Hooks Class Initialized
DEBUG - 2013-10-27 07:21:52 --> Utf8 Class Initialized
DEBUG - 2013-10-27 07:21:52 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 07:21:52 --> URI Class Initialized
DEBUG - 2013-10-27 07:21:52 --> Router Class Initialized
DEBUG - 2013-10-27 07:21:52 --> Output Class Initialized
DEBUG - 2013-10-27 07:21:52 --> Security Class Initialized
DEBUG - 2013-10-27 07:21:52 --> Input Class Initialized
DEBUG - 2013-10-27 07:21:52 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-27 07:21:52 --> Language Class Initialized
DEBUG - 2013-10-27 07:21:52 --> Loader Class Initialized
DEBUG - 2013-10-27 07:21:52 --> Helper loaded: form_helper
DEBUG - 2013-10-27 07:21:52 --> Helper loaded: url_helper
DEBUG - 2013-10-27 07:21:52 --> Helper loaded: html_helper
DEBUG - 2013-10-27 07:21:52 --> Database Driver Class Initialized
DEBUG - 2013-10-27 07:21:52 --> Session Class Initialized
DEBUG - 2013-10-27 07:21:52 --> Helper loaded: string_helper
DEBUG - 2013-10-27 07:21:52 --> Session routines successfully run
DEBUG - 2013-10-27 07:21:52 --> Form Validation Class Initialized
DEBUG - 2013-10-27 07:21:52 --> Controller Class Initialized
DEBUG - 2013-10-27 07:21:52 --> Model Class Initialized
DEBUG - 2013-10-27 07:21:52 --> Model Class Initialized
DEBUG - 2013-10-27 07:21:52 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-27 07:21:52 --> after session initialization................
INFO  - 2013-10-27 07:21:52 --> The forum id is 1
INFO  - 2013-10-27 07:21:52 --> inside retrieving pharmacy beyond id 
INFO  - 2013-10-27 07:21:52 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 1
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, ft.name as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '1'
ORDER BY `ft`.`name`)
INFO  - 2013-10-27 07:21:52 --> The encoded json is [{"id":"4","text":"Eye Defects","hasChildren":true},{"id":"1","text":"Astigmatism","hasChildren":false},{"id":"2","text":"Cataract","hasChildren":false}]
DEBUG - 2013-10-27 07:21:52 --> Final output sent to browser
DEBUG - 2013-10-27 07:21:52 --> Total execution time: 0.0660
DEBUG - 2013-10-27 07:22:01 --> Config Class Initialized
DEBUG - 2013-10-27 07:22:01 --> Hooks Class Initialized
DEBUG - 2013-10-27 07:22:01 --> Utf8 Class Initialized
DEBUG - 2013-10-27 07:22:01 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 07:22:01 --> URI Class Initialized
DEBUG - 2013-10-27 07:22:01 --> Router Class Initialized
DEBUG - 2013-10-27 07:22:01 --> Output Class Initialized
DEBUG - 2013-10-27 07:22:01 --> Security Class Initialized
DEBUG - 2013-10-27 07:22:01 --> Input Class Initialized
DEBUG - 2013-10-27 07:22:01 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-27 07:22:01 --> Language Class Initialized
DEBUG - 2013-10-27 07:22:01 --> Loader Class Initialized
DEBUG - 2013-10-27 07:22:01 --> Helper loaded: form_helper
DEBUG - 2013-10-27 07:22:01 --> Helper loaded: url_helper
DEBUG - 2013-10-27 07:22:01 --> Helper loaded: html_helper
DEBUG - 2013-10-27 07:22:01 --> Database Driver Class Initialized
DEBUG - 2013-10-27 07:22:01 --> Session Class Initialized
DEBUG - 2013-10-27 07:22:01 --> Helper loaded: string_helper
DEBUG - 2013-10-27 07:22:01 --> Session routines successfully run
DEBUG - 2013-10-27 07:22:01 --> Form Validation Class Initialized
DEBUG - 2013-10-27 07:22:01 --> Controller Class Initialized
DEBUG - 2013-10-27 07:22:01 --> Model Class Initialized
DEBUG - 2013-10-27 07:22:01 --> Model Class Initialized
DEBUG - 2013-10-27 07:22:01 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-27 07:22:01 --> after session initialization................
INFO  - 2013-10-27 07:22:01 --> The forum id is 4
INFO  - 2013-10-27 07:22:01 --> inside retrieving pharmacy beyond id 
INFO  - 2013-10-27 07:22:01 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 4
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, ft.name as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '4'
ORDER BY `ft`.`name`)
INFO  - 2013-10-27 07:22:01 --> The encoded json is []
DEBUG - 2013-10-27 07:22:01 --> Final output sent to browser
DEBUG - 2013-10-27 07:22:01 --> Total execution time: 0.0590
DEBUG - 2013-10-27 14:00:03 --> Config Class Initialized
DEBUG - 2013-10-27 14:00:03 --> Hooks Class Initialized
DEBUG - 2013-10-27 14:00:03 --> Utf8 Class Initialized
DEBUG - 2013-10-27 14:00:03 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 14:00:03 --> URI Class Initialized
DEBUG - 2013-10-27 14:00:03 --> Router Class Initialized
DEBUG - 2013-10-27 14:00:03 --> Output Class Initialized
DEBUG - 2013-10-27 14:00:03 --> Security Class Initialized
DEBUG - 2013-10-27 14:00:03 --> Input Class Initialized
DEBUG - 2013-10-27 14:00:03 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-27 14:00:03 --> Language Class Initialized
DEBUG - 2013-10-27 14:00:03 --> Loader Class Initialized
DEBUG - 2013-10-27 14:00:03 --> Helper loaded: form_helper
DEBUG - 2013-10-27 14:00:03 --> Helper loaded: url_helper
DEBUG - 2013-10-27 14:00:03 --> Helper loaded: html_helper
DEBUG - 2013-10-27 14:00:03 --> Database Driver Class Initialized
DEBUG - 2013-10-27 14:00:03 --> Session Class Initialized
DEBUG - 2013-10-27 14:00:03 --> Helper loaded: string_helper
DEBUG - 2013-10-27 14:00:03 --> A session cookie was not found.
DEBUG - 2013-10-27 14:00:03 --> Session routines successfully run
DEBUG - 2013-10-27 14:00:03 --> Form Validation Class Initialized
DEBUG - 2013-10-27 14:00:03 --> Controller Class Initialized
DEBUG - 2013-10-27 14:00:03 --> Model Class Initialized
DEBUG - 2013-10-27 14:00:03 --> Model Class Initialized
DEBUG - 2013-10-27 14:00:03 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-27 14:00:03 --> after session initialization................
INFO  - 2013-10-27 14:00:03 --> inside retrieve most commented forum topic 
INFO  - 2013-10-27 14:00:03 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count`
INFO  - 2013-10-27 14:00:03 --> inside retrieve most commented forum topic 
INFO  - 2013-10-27 14:00:03 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`
FROM (`forum_topic` t)
WHERE `t`.`id_topicforum` =  '1'
INFO  - 2013-10-27 14:00:03 --> inside retrieving first 20 topics 
INFO  - 2013-10-27 14:00:03 --> SELECT `t`.`id_topicforum`, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count`
LIMIT 20
INFO  - 2013-10-27 14:00:03 --> inside retrieving pharmacy beyond id 
INFO  - 2013-10-27 14:00:03 --> SELECT `ff`.`id_forum` as id, `ff`.`name`, count(f.id_forum) as sub_forum
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` is null 
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`
INFO  - 2013-10-27 14:00:03 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-10-27 14:00:03 --> inside retrieving comments topic id and drug id is 1
INFO  - 2013-10-27 14:00:03 --> SELECT `tc`.`id_topiccomment`, `tc`.`comment`, `tc`.`timecreated`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-10-27 14:00:03 --> inside retrieving comments topic id 1
INFO  - 2013-10-27 14:00:03 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
INFO  - 2013-10-27 14:00:03 --> after forums has been clicked.................
INFO  - 2013-10-27 14:00:03 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-10-27 14:00:03 --> File loaded: ../pharmaray-application/views/forum.php
DEBUG - 2013-10-27 14:00:03 --> Final output sent to browser
DEBUG - 2013-10-27 14:00:03 --> Total execution time: 0.0750
DEBUG - 2013-10-27 14:00:03 --> Config Class Initialized
DEBUG - 2013-10-27 14:00:03 --> Hooks Class Initialized
DEBUG - 2013-10-27 14:00:03 --> Utf8 Class Initialized
DEBUG - 2013-10-27 14:00:03 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 14:00:03 --> URI Class Initialized
DEBUG - 2013-10-27 14:00:03 --> Router Class Initialized
DEBUG - 2013-10-27 14:00:03 --> Output Class Initialized
DEBUG - 2013-10-27 14:00:03 --> Security Class Initialized
DEBUG - 2013-10-27 14:00:03 --> Input Class Initialized
DEBUG - 2013-10-27 14:00:03 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-27 14:00:03 --> Language Class Initialized
DEBUG - 2013-10-27 14:00:03 --> Loader Class Initialized
DEBUG - 2013-10-27 14:00:03 --> Helper loaded: form_helper
DEBUG - 2013-10-27 14:00:03 --> Helper loaded: url_helper
DEBUG - 2013-10-27 14:00:03 --> Helper loaded: html_helper
DEBUG - 2013-10-27 14:00:03 --> Database Driver Class Initialized
DEBUG - 2013-10-27 14:00:03 --> Session Class Initialized
DEBUG - 2013-10-27 14:00:03 --> Helper loaded: string_helper
DEBUG - 2013-10-27 14:00:03 --> Session routines successfully run
DEBUG - 2013-10-27 14:00:03 --> Form Validation Class Initialized
DEBUG - 2013-10-27 14:00:03 --> Controller Class Initialized
DEBUG - 2013-10-27 14:00:03 --> Model Class Initialized
DEBUG - 2013-10-27 14:00:03 --> Model Class Initialized
DEBUG - 2013-10-27 14:00:03 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-27 14:00:03 --> after session initialization................
ERROR - 2013-10-27 14:00:03 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-10-27 14:00:03 --> Config Class Initialized
DEBUG - 2013-10-27 14:00:03 --> Hooks Class Initialized
DEBUG - 2013-10-27 14:00:03 --> Utf8 Class Initialized
DEBUG - 2013-10-27 14:00:03 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 14:00:03 --> URI Class Initialized
DEBUG - 2013-10-27 14:00:03 --> Router Class Initialized
ERROR - 2013-10-27 14:00:03 --> 404 Page Not Found --> css
DEBUG - 2013-10-27 14:00:09 --> Config Class Initialized
DEBUG - 2013-10-27 14:00:09 --> Hooks Class Initialized
DEBUG - 2013-10-27 14:00:09 --> Utf8 Class Initialized
DEBUG - 2013-10-27 14:00:09 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 14:00:09 --> URI Class Initialized
DEBUG - 2013-10-27 14:00:09 --> Router Class Initialized
DEBUG - 2013-10-27 14:00:09 --> Output Class Initialized
DEBUG - 2013-10-27 14:00:09 --> Security Class Initialized
DEBUG - 2013-10-27 14:00:09 --> Input Class Initialized
DEBUG - 2013-10-27 14:00:09 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-27 14:00:09 --> Language Class Initialized
DEBUG - 2013-10-27 14:00:09 --> Loader Class Initialized
DEBUG - 2013-10-27 14:00:09 --> Helper loaded: form_helper
DEBUG - 2013-10-27 14:00:09 --> Helper loaded: url_helper
DEBUG - 2013-10-27 14:00:09 --> Helper loaded: html_helper
DEBUG - 2013-10-27 14:00:09 --> Database Driver Class Initialized
DEBUG - 2013-10-27 14:00:09 --> Session Class Initialized
DEBUG - 2013-10-27 14:00:09 --> Helper loaded: string_helper
DEBUG - 2013-10-27 14:00:09 --> Session routines successfully run
DEBUG - 2013-10-27 14:00:09 --> Form Validation Class Initialized
DEBUG - 2013-10-27 14:00:09 --> Controller Class Initialized
DEBUG - 2013-10-27 14:00:09 --> Model Class Initialized
DEBUG - 2013-10-27 14:00:09 --> Model Class Initialized
DEBUG - 2013-10-27 14:00:09 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-27 14:00:09 --> after session initialization................
INFO  - 2013-10-27 14:00:09 --> The forum id is 1
INFO  - 2013-10-27 14:00:09 --> inside retrieving pharmacy beyond id 
INFO  - 2013-10-27 14:00:09 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 1
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '1'
ORDER BY `ft`.`name`)
INFO  - 2013-10-27 14:00:09 --> The encoded json is [{"id":"4","text":"Eye Defects","hasChildren":true},{"id":"1","text":"ASTIGMATISM","hasChildren":false},{"id":"2","text":"CATARACT","hasChildren":false}]
DEBUG - 2013-10-27 14:00:09 --> Final output sent to browser
DEBUG - 2013-10-27 14:00:09 --> Total execution time: 0.0610
DEBUG - 2013-10-27 14:00:14 --> Config Class Initialized
DEBUG - 2013-10-27 14:00:14 --> Hooks Class Initialized
DEBUG - 2013-10-27 14:00:14 --> Utf8 Class Initialized
DEBUG - 2013-10-27 14:00:14 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 14:00:14 --> URI Class Initialized
DEBUG - 2013-10-27 14:00:14 --> Router Class Initialized
DEBUG - 2013-10-27 14:00:14 --> Output Class Initialized
DEBUG - 2013-10-27 14:00:14 --> Security Class Initialized
DEBUG - 2013-10-27 14:00:14 --> Input Class Initialized
DEBUG - 2013-10-27 14:00:14 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-27 14:00:14 --> Language Class Initialized
DEBUG - 2013-10-27 14:00:14 --> Loader Class Initialized
DEBUG - 2013-10-27 14:00:14 --> Helper loaded: form_helper
DEBUG - 2013-10-27 14:00:14 --> Helper loaded: url_helper
DEBUG - 2013-10-27 14:00:14 --> Helper loaded: html_helper
DEBUG - 2013-10-27 14:00:14 --> Database Driver Class Initialized
DEBUG - 2013-10-27 14:00:14 --> Session Class Initialized
DEBUG - 2013-10-27 14:00:14 --> Helper loaded: string_helper
DEBUG - 2013-10-27 14:00:14 --> Session routines successfully run
DEBUG - 2013-10-27 14:00:14 --> Form Validation Class Initialized
DEBUG - 2013-10-27 14:00:14 --> Controller Class Initialized
DEBUG - 2013-10-27 14:00:14 --> Model Class Initialized
DEBUG - 2013-10-27 14:00:14 --> Model Class Initialized
DEBUG - 2013-10-27 14:00:14 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-27 14:00:14 --> after session initialization................
INFO  - 2013-10-27 14:00:14 --> The forum id is 4
INFO  - 2013-10-27 14:00:14 --> inside retrieving pharmacy beyond id 
INFO  - 2013-10-27 14:00:14 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 4
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '4'
ORDER BY `ft`.`name`)
INFO  - 2013-10-27 14:00:14 --> The encoded json is []
DEBUG - 2013-10-27 14:00:14 --> Final output sent to browser
DEBUG - 2013-10-27 14:00:14 --> Total execution time: 0.0580
DEBUG - 2013-10-27 14:35:56 --> Config Class Initialized
DEBUG - 2013-10-27 14:35:56 --> Hooks Class Initialized
DEBUG - 2013-10-27 14:35:56 --> Utf8 Class Initialized
DEBUG - 2013-10-27 14:35:56 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 14:35:56 --> URI Class Initialized
DEBUG - 2013-10-27 14:35:56 --> Router Class Initialized
DEBUG - 2013-10-27 14:35:56 --> Output Class Initialized
DEBUG - 2013-10-27 14:35:56 --> Security Class Initialized
DEBUG - 2013-10-27 14:35:56 --> Input Class Initialized
DEBUG - 2013-10-27 14:35:56 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-27 14:35:56 --> Language Class Initialized
DEBUG - 2013-10-27 14:35:56 --> Loader Class Initialized
DEBUG - 2013-10-27 14:35:56 --> Helper loaded: form_helper
DEBUG - 2013-10-27 14:35:56 --> Helper loaded: url_helper
DEBUG - 2013-10-27 14:35:56 --> Helper loaded: html_helper
DEBUG - 2013-10-27 14:35:56 --> Database Driver Class Initialized
DEBUG - 2013-10-27 14:35:56 --> Session Class Initialized
DEBUG - 2013-10-27 14:35:56 --> Helper loaded: string_helper
DEBUG - 2013-10-27 14:35:56 --> Session routines successfully run
DEBUG - 2013-10-27 14:35:56 --> Form Validation Class Initialized
DEBUG - 2013-10-27 14:35:56 --> Controller Class Initialized
DEBUG - 2013-10-27 14:35:56 --> Model Class Initialized
DEBUG - 2013-10-27 14:35:56 --> Model Class Initialized
DEBUG - 2013-10-27 14:35:56 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-27 14:35:56 --> after session initialization................
INFO  - 2013-10-27 14:35:56 --> inside retrieve most commented forum topic 
INFO  - 2013-10-27 14:35:56 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count`
INFO  - 2013-10-27 14:35:56 --> inside retrieve most commented forum topic 
INFO  - 2013-10-27 14:35:56 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`
FROM (`forum_topic` t)
WHERE `t`.`id_topicforum` =  '1'
INFO  - 2013-10-27 14:35:56 --> inside retrieving first 20 topics 
INFO  - 2013-10-27 14:35:56 --> SELECT `t`.`id_topicforum`, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count`
LIMIT 20
INFO  - 2013-10-27 14:35:56 --> inside retrieving pharmacy beyond id 
INFO  - 2013-10-27 14:35:56 --> SELECT `ff`.`id_forum` as id, `ff`.`name`, count(f.id_forum) as sub_forum
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` is null 
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`
INFO  - 2013-10-27 14:35:56 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-10-27 14:35:56 --> inside retrieving comments topic id and drug id is 1
INFO  - 2013-10-27 14:35:56 --> SELECT `tc`.`id_topiccomment`, `tc`.`comment`, `tc`.`timecreated`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-10-27 14:35:56 --> inside retrieving comments topic id 1
INFO  - 2013-10-27 14:35:56 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
INFO  - 2013-10-27 14:35:56 --> after forums has been clicked.................
INFO  - 2013-10-27 14:35:56 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-10-27 14:35:56 --> File loaded: ../pharmaray-application/views/forum.php
DEBUG - 2013-10-27 14:35:56 --> Final output sent to browser
DEBUG - 2013-10-27 14:35:56 --> Total execution time: 0.0710
DEBUG - 2013-10-27 14:35:56 --> Config Class Initialized
DEBUG - 2013-10-27 14:35:56 --> Hooks Class Initialized
DEBUG - 2013-10-27 14:35:56 --> Utf8 Class Initialized
DEBUG - 2013-10-27 14:35:56 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 14:35:56 --> URI Class Initialized
DEBUG - 2013-10-27 14:35:56 --> Router Class Initialized
DEBUG - 2013-10-27 14:35:56 --> Output Class Initialized
DEBUG - 2013-10-27 14:35:56 --> Security Class Initialized
DEBUG - 2013-10-27 14:35:56 --> Input Class Initialized
DEBUG - 2013-10-27 14:35:56 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-27 14:35:56 --> Language Class Initialized
DEBUG - 2013-10-27 14:35:56 --> Loader Class Initialized
DEBUG - 2013-10-27 14:35:56 --> Helper loaded: form_helper
DEBUG - 2013-10-27 14:35:56 --> Helper loaded: url_helper
DEBUG - 2013-10-27 14:35:56 --> Helper loaded: html_helper
DEBUG - 2013-10-27 14:35:56 --> Database Driver Class Initialized
ERROR - 2013-10-27 14:35:56 --> Severity: Notice  --> mysql_pconnect(): send of 5 bytes failed with errno=10053 An established connection was aborted by the software in your host machine.
 C:\xampp\htdocs\Pharmarays\pharmaray-system\database\drivers\mysql\mysql_driver.php 91
DEBUG - 2013-10-27 14:35:57 --> Session Class Initialized
DEBUG - 2013-10-27 14:35:57 --> Helper loaded: string_helper
DEBUG - 2013-10-27 14:35:57 --> Session routines successfully run
DEBUG - 2013-10-27 14:35:57 --> Form Validation Class Initialized
DEBUG - 2013-10-27 14:35:57 --> Controller Class Initialized
DEBUG - 2013-10-27 14:35:57 --> Model Class Initialized
DEBUG - 2013-10-27 14:35:57 --> Model Class Initialized
DEBUG - 2013-10-27 14:35:57 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-27 14:35:57 --> after session initialization................
ERROR - 2013-10-27 14:35:57 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-10-27 14:35:57 --> Config Class Initialized
DEBUG - 2013-10-27 14:35:57 --> Hooks Class Initialized
DEBUG - 2013-10-27 14:35:57 --> Utf8 Class Initialized
DEBUG - 2013-10-27 14:35:57 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 14:35:57 --> URI Class Initialized
DEBUG - 2013-10-27 14:35:57 --> Router Class Initialized
ERROR - 2013-10-27 14:35:57 --> 404 Page Not Found --> css
DEBUG - 2013-10-27 14:36:00 --> Config Class Initialized
DEBUG - 2013-10-27 14:36:00 --> Hooks Class Initialized
DEBUG - 2013-10-27 14:36:00 --> Utf8 Class Initialized
DEBUG - 2013-10-27 14:36:00 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 14:36:00 --> URI Class Initialized
DEBUG - 2013-10-27 14:36:00 --> Router Class Initialized
DEBUG - 2013-10-27 14:36:00 --> Output Class Initialized
DEBUG - 2013-10-27 14:36:00 --> Security Class Initialized
DEBUG - 2013-10-27 14:36:00 --> Input Class Initialized
DEBUG - 2013-10-27 14:36:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-27 14:36:00 --> Language Class Initialized
DEBUG - 2013-10-27 14:36:00 --> Loader Class Initialized
DEBUG - 2013-10-27 14:36:00 --> Helper loaded: form_helper
DEBUG - 2013-10-27 14:36:00 --> Helper loaded: url_helper
DEBUG - 2013-10-27 14:36:00 --> Helper loaded: html_helper
DEBUG - 2013-10-27 14:36:00 --> Database Driver Class Initialized
DEBUG - 2013-10-27 14:36:00 --> Session Class Initialized
DEBUG - 2013-10-27 14:36:00 --> Helper loaded: string_helper
DEBUG - 2013-10-27 14:36:00 --> Session routines successfully run
DEBUG - 2013-10-27 14:36:00 --> Form Validation Class Initialized
DEBUG - 2013-10-27 14:36:00 --> Controller Class Initialized
DEBUG - 2013-10-27 14:36:00 --> Model Class Initialized
DEBUG - 2013-10-27 14:36:00 --> Model Class Initialized
DEBUG - 2013-10-27 14:36:00 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-27 14:36:00 --> after session initialization................
INFO  - 2013-10-27 14:36:00 --> The forum id is 1
INFO  - 2013-10-27 14:36:00 --> inside retrieving pharmacy beyond id 
INFO  - 2013-10-27 14:36:00 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 1
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '1'
ORDER BY `ft`.`name`)
INFO  - 2013-10-27 14:36:00 --> The encoded json is [{"id":"4","text":"Eye Defects","hasChildren":true},{"id":"1","text":"ASTIGMATISM","hasChildren":false},{"id":"2","text":"CATARACT","hasChildren":false}]
DEBUG - 2013-10-27 14:36:00 --> Final output sent to browser
DEBUG - 2013-10-27 14:36:00 --> Total execution time: 0.0770
DEBUG - 2013-10-27 14:36:06 --> Config Class Initialized
DEBUG - 2013-10-27 14:36:06 --> Hooks Class Initialized
DEBUG - 2013-10-27 14:36:06 --> Utf8 Class Initialized
DEBUG - 2013-10-27 14:36:06 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 14:36:06 --> URI Class Initialized
DEBUG - 2013-10-27 14:36:06 --> Router Class Initialized
DEBUG - 2013-10-27 14:36:06 --> Output Class Initialized
DEBUG - 2013-10-27 14:36:06 --> Security Class Initialized
DEBUG - 2013-10-27 14:36:06 --> Input Class Initialized
DEBUG - 2013-10-27 14:36:06 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-27 14:36:06 --> Language Class Initialized
DEBUG - 2013-10-27 14:36:06 --> Loader Class Initialized
DEBUG - 2013-10-27 14:36:06 --> Helper loaded: form_helper
DEBUG - 2013-10-27 14:36:06 --> Helper loaded: url_helper
DEBUG - 2013-10-27 14:36:06 --> Helper loaded: html_helper
DEBUG - 2013-10-27 14:36:06 --> Database Driver Class Initialized
DEBUG - 2013-10-27 14:36:06 --> Session Class Initialized
DEBUG - 2013-10-27 14:36:06 --> Helper loaded: string_helper
DEBUG - 2013-10-27 14:36:06 --> Session routines successfully run
DEBUG - 2013-10-27 14:36:06 --> Form Validation Class Initialized
DEBUG - 2013-10-27 14:36:06 --> Controller Class Initialized
DEBUG - 2013-10-27 14:36:06 --> Model Class Initialized
DEBUG - 2013-10-27 14:36:06 --> Model Class Initialized
DEBUG - 2013-10-27 14:36:06 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-27 14:36:06 --> after session initialization................
INFO  - 2013-10-27 14:36:06 --> The forum id is 4
INFO  - 2013-10-27 14:36:06 --> inside retrieving pharmacy beyond id 
INFO  - 2013-10-27 14:36:07 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 4
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '4'
ORDER BY `ft`.`name`)
INFO  - 2013-10-27 14:36:07 --> The encoded json is [{"id":"6","text":"Long Sight","hasChildren":true}]
DEBUG - 2013-10-27 14:36:07 --> Final output sent to browser
DEBUG - 2013-10-27 14:36:07 --> Total execution time: 0.0610
DEBUG - 2013-10-27 14:36:11 --> Config Class Initialized
DEBUG - 2013-10-27 14:36:11 --> Hooks Class Initialized
DEBUG - 2013-10-27 14:36:11 --> Utf8 Class Initialized
DEBUG - 2013-10-27 14:36:11 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 14:36:11 --> URI Class Initialized
DEBUG - 2013-10-27 14:36:11 --> Router Class Initialized
DEBUG - 2013-10-27 14:36:11 --> Output Class Initialized
DEBUG - 2013-10-27 14:36:11 --> Security Class Initialized
DEBUG - 2013-10-27 14:36:11 --> Input Class Initialized
DEBUG - 2013-10-27 14:36:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-27 14:36:11 --> Language Class Initialized
DEBUG - 2013-10-27 14:36:11 --> Loader Class Initialized
DEBUG - 2013-10-27 14:36:11 --> Helper loaded: form_helper
DEBUG - 2013-10-27 14:36:11 --> Helper loaded: url_helper
DEBUG - 2013-10-27 14:36:11 --> Helper loaded: html_helper
DEBUG - 2013-10-27 14:36:11 --> Database Driver Class Initialized
DEBUG - 2013-10-27 14:36:11 --> Session Class Initialized
DEBUG - 2013-10-27 14:36:11 --> Helper loaded: string_helper
DEBUG - 2013-10-27 14:36:11 --> Session routines successfully run
DEBUG - 2013-10-27 14:36:11 --> Form Validation Class Initialized
DEBUG - 2013-10-27 14:36:11 --> Controller Class Initialized
DEBUG - 2013-10-27 14:36:11 --> Model Class Initialized
DEBUG - 2013-10-27 14:36:11 --> Model Class Initialized
DEBUG - 2013-10-27 14:36:11 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-27 14:36:11 --> after session initialization................
INFO  - 2013-10-27 14:36:11 --> The forum id is 6
INFO  - 2013-10-27 14:36:11 --> inside retrieving pharmacy beyond id 
INFO  - 2013-10-27 14:36:11 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 6
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '6'
ORDER BY `ft`.`name`)
INFO  - 2013-10-27 14:36:11 --> The encoded json is []
DEBUG - 2013-10-27 14:36:11 --> Final output sent to browser
DEBUG - 2013-10-27 14:36:11 --> Total execution time: 0.0560
DEBUG - 2013-10-27 14:39:43 --> Config Class Initialized
DEBUG - 2013-10-27 14:39:43 --> Hooks Class Initialized
DEBUG - 2013-10-27 14:39:43 --> Utf8 Class Initialized
DEBUG - 2013-10-27 14:39:43 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 14:39:43 --> URI Class Initialized
DEBUG - 2013-10-27 14:39:43 --> Router Class Initialized
DEBUG - 2013-10-27 14:39:43 --> Output Class Initialized
DEBUG - 2013-10-27 14:39:43 --> Security Class Initialized
DEBUG - 2013-10-27 14:39:43 --> Input Class Initialized
DEBUG - 2013-10-27 14:39:43 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-27 14:39:43 --> Language Class Initialized
DEBUG - 2013-10-27 14:39:43 --> Loader Class Initialized
DEBUG - 2013-10-27 14:39:43 --> Helper loaded: form_helper
DEBUG - 2013-10-27 14:39:43 --> Helper loaded: url_helper
DEBUG - 2013-10-27 14:39:43 --> Helper loaded: html_helper
DEBUG - 2013-10-27 14:39:43 --> Database Driver Class Initialized
DEBUG - 2013-10-27 14:39:43 --> Session Class Initialized
DEBUG - 2013-10-27 14:39:43 --> Helper loaded: string_helper
DEBUG - 2013-10-27 14:39:43 --> Session routines successfully run
DEBUG - 2013-10-27 14:39:43 --> Form Validation Class Initialized
DEBUG - 2013-10-27 14:39:43 --> Controller Class Initialized
DEBUG - 2013-10-27 14:39:43 --> Model Class Initialized
DEBUG - 2013-10-27 14:39:43 --> Model Class Initialized
DEBUG - 2013-10-27 14:39:43 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-27 14:39:43 --> after session initialization................
INFO  - 2013-10-27 14:39:43 --> inside retrieve most commented forum topic 
INFO  - 2013-10-27 14:39:43 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count`
INFO  - 2013-10-27 14:39:43 --> inside retrieve most commented forum topic 
INFO  - 2013-10-27 14:39:43 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`
FROM (`forum_topic` t)
WHERE `t`.`id_topicforum` =  '1'
INFO  - 2013-10-27 14:39:43 --> inside retrieving first 20 topics 
INFO  - 2013-10-27 14:39:43 --> SELECT `t`.`id_topicforum`, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count`
LIMIT 20
INFO  - 2013-10-27 14:39:43 --> inside retrieving pharmacy beyond id 
INFO  - 2013-10-27 14:39:43 --> SELECT `ff`.`id_forum` as id, `ff`.`name`, count(f.id_forum) as sub_forum
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` is null 
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`
INFO  - 2013-10-27 14:39:43 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-10-27 14:39:43 --> inside retrieving comments topic id and drug id is 1
INFO  - 2013-10-27 14:39:43 --> SELECT `tc`.`id_topiccomment`, `tc`.`comment`, `tc`.`timecreated`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-10-27 14:39:43 --> inside retrieving comments topic id 1
INFO  - 2013-10-27 14:39:43 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
INFO  - 2013-10-27 14:39:43 --> after forums has been clicked.................
INFO  - 2013-10-27 14:39:43 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-10-27 14:39:43 --> File loaded: ../pharmaray-application/views/forum.php
DEBUG - 2013-10-27 14:39:43 --> Final output sent to browser
DEBUG - 2013-10-27 14:39:43 --> Total execution time: 0.0870
DEBUG - 2013-10-27 14:39:43 --> Config Class Initialized
DEBUG - 2013-10-27 14:39:43 --> Hooks Class Initialized
DEBUG - 2013-10-27 14:39:43 --> Utf8 Class Initialized
DEBUG - 2013-10-27 14:39:43 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 14:39:43 --> URI Class Initialized
DEBUG - 2013-10-27 14:39:43 --> Router Class Initialized
DEBUG - 2013-10-27 14:39:43 --> Output Class Initialized
DEBUG - 2013-10-27 14:39:43 --> Security Class Initialized
DEBUG - 2013-10-27 14:39:43 --> Input Class Initialized
DEBUG - 2013-10-27 14:39:43 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-27 14:39:43 --> Language Class Initialized
DEBUG - 2013-10-27 14:39:43 --> Loader Class Initialized
DEBUG - 2013-10-27 14:39:43 --> Helper loaded: form_helper
DEBUG - 2013-10-27 14:39:43 --> Helper loaded: url_helper
DEBUG - 2013-10-27 14:39:43 --> Helper loaded: html_helper
DEBUG - 2013-10-27 14:39:43 --> Database Driver Class Initialized
DEBUG - 2013-10-27 14:39:44 --> Session Class Initialized
DEBUG - 2013-10-27 14:39:44 --> Helper loaded: string_helper
DEBUG - 2013-10-27 14:39:44 --> Session routines successfully run
DEBUG - 2013-10-27 14:39:44 --> Form Validation Class Initialized
DEBUG - 2013-10-27 14:39:44 --> Controller Class Initialized
DEBUG - 2013-10-27 14:39:44 --> Model Class Initialized
DEBUG - 2013-10-27 14:39:44 --> Model Class Initialized
DEBUG - 2013-10-27 14:39:44 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-27 14:39:44 --> after session initialization................
ERROR - 2013-10-27 14:39:44 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-10-27 14:39:44 --> Config Class Initialized
DEBUG - 2013-10-27 14:39:44 --> Hooks Class Initialized
DEBUG - 2013-10-27 14:39:44 --> Utf8 Class Initialized
DEBUG - 2013-10-27 14:39:44 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 14:39:44 --> URI Class Initialized
DEBUG - 2013-10-27 14:39:44 --> Router Class Initialized
ERROR - 2013-10-27 14:39:44 --> 404 Page Not Found --> css
DEBUG - 2013-10-27 14:39:48 --> Config Class Initialized
DEBUG - 2013-10-27 14:39:48 --> Hooks Class Initialized
DEBUG - 2013-10-27 14:39:48 --> Utf8 Class Initialized
DEBUG - 2013-10-27 14:39:48 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 14:39:48 --> URI Class Initialized
DEBUG - 2013-10-27 14:39:48 --> Router Class Initialized
DEBUG - 2013-10-27 14:39:48 --> Output Class Initialized
DEBUG - 2013-10-27 14:39:48 --> Security Class Initialized
DEBUG - 2013-10-27 14:39:48 --> Input Class Initialized
DEBUG - 2013-10-27 14:39:48 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-27 14:39:48 --> Language Class Initialized
DEBUG - 2013-10-27 14:39:48 --> Loader Class Initialized
DEBUG - 2013-10-27 14:39:48 --> Helper loaded: form_helper
DEBUG - 2013-10-27 14:39:48 --> Helper loaded: url_helper
DEBUG - 2013-10-27 14:39:48 --> Helper loaded: html_helper
DEBUG - 2013-10-27 14:39:48 --> Database Driver Class Initialized
DEBUG - 2013-10-27 14:39:48 --> Session Class Initialized
DEBUG - 2013-10-27 14:39:48 --> Helper loaded: string_helper
DEBUG - 2013-10-27 14:39:48 --> Session routines successfully run
DEBUG - 2013-10-27 14:39:48 --> Form Validation Class Initialized
DEBUG - 2013-10-27 14:39:48 --> Controller Class Initialized
DEBUG - 2013-10-27 14:39:48 --> Model Class Initialized
DEBUG - 2013-10-27 14:39:48 --> Model Class Initialized
DEBUG - 2013-10-27 14:39:48 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-27 14:39:48 --> after session initialization................
INFO  - 2013-10-27 14:39:48 --> The forum id is 1
INFO  - 2013-10-27 14:39:48 --> inside retrieving pharmacy beyond id 
INFO  - 2013-10-27 14:39:48 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 1
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '1'
ORDER BY `ft`.`name`)
INFO  - 2013-10-27 14:39:48 --> The encoded json is [{"id":"4","text":"Eye Defects","hasChildren":true},{"id":"1","text":"ASTIGMATISM","hasChildren":false},{"id":"2","text":"CATARACT","hasChildren":false}]
DEBUG - 2013-10-27 14:39:48 --> Final output sent to browser
DEBUG - 2013-10-27 14:39:48 --> Total execution time: 0.0580
DEBUG - 2013-10-27 14:39:51 --> Config Class Initialized
DEBUG - 2013-10-27 14:39:51 --> Hooks Class Initialized
DEBUG - 2013-10-27 14:39:51 --> Utf8 Class Initialized
DEBUG - 2013-10-27 14:39:51 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 14:39:51 --> URI Class Initialized
DEBUG - 2013-10-27 14:39:51 --> Router Class Initialized
DEBUG - 2013-10-27 14:39:51 --> Output Class Initialized
DEBUG - 2013-10-27 14:39:51 --> Security Class Initialized
DEBUG - 2013-10-27 14:39:51 --> Input Class Initialized
DEBUG - 2013-10-27 14:39:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-27 14:39:51 --> Language Class Initialized
DEBUG - 2013-10-27 14:39:51 --> Loader Class Initialized
DEBUG - 2013-10-27 14:39:51 --> Helper loaded: form_helper
DEBUG - 2013-10-27 14:39:51 --> Helper loaded: url_helper
DEBUG - 2013-10-27 14:39:51 --> Helper loaded: html_helper
DEBUG - 2013-10-27 14:39:51 --> Database Driver Class Initialized
DEBUG - 2013-10-27 14:39:51 --> Session Class Initialized
DEBUG - 2013-10-27 14:39:51 --> Helper loaded: string_helper
DEBUG - 2013-10-27 14:39:51 --> Session routines successfully run
DEBUG - 2013-10-27 14:39:51 --> Form Validation Class Initialized
DEBUG - 2013-10-27 14:39:51 --> Controller Class Initialized
DEBUG - 2013-10-27 14:39:51 --> Model Class Initialized
DEBUG - 2013-10-27 14:39:51 --> Model Class Initialized
DEBUG - 2013-10-27 14:39:51 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-27 14:39:51 --> after session initialization................
INFO  - 2013-10-27 14:39:51 --> The forum id is 4
INFO  - 2013-10-27 14:39:51 --> inside retrieving pharmacy beyond id 
INFO  - 2013-10-27 14:39:51 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 4
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '4'
ORDER BY `ft`.`name`)
INFO  - 2013-10-27 14:39:51 --> The encoded json is [{"id":"6","text":"Long Sight","hasChildren":true}]
DEBUG - 2013-10-27 14:39:51 --> Final output sent to browser
DEBUG - 2013-10-27 14:39:51 --> Total execution time: 0.0520
DEBUG - 2013-10-27 14:39:56 --> Config Class Initialized
DEBUG - 2013-10-27 14:39:56 --> Hooks Class Initialized
DEBUG - 2013-10-27 14:39:56 --> Utf8 Class Initialized
DEBUG - 2013-10-27 14:39:56 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 14:39:56 --> URI Class Initialized
DEBUG - 2013-10-27 14:39:56 --> Router Class Initialized
DEBUG - 2013-10-27 14:39:56 --> Output Class Initialized
DEBUG - 2013-10-27 14:39:56 --> Security Class Initialized
DEBUG - 2013-10-27 14:39:56 --> Input Class Initialized
DEBUG - 2013-10-27 14:39:56 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-27 14:39:56 --> Language Class Initialized
DEBUG - 2013-10-27 14:39:56 --> Loader Class Initialized
DEBUG - 2013-10-27 14:39:56 --> Helper loaded: form_helper
DEBUG - 2013-10-27 14:39:56 --> Helper loaded: url_helper
DEBUG - 2013-10-27 14:39:56 --> Helper loaded: html_helper
DEBUG - 2013-10-27 14:39:56 --> Database Driver Class Initialized
DEBUG - 2013-10-27 14:39:56 --> Session Class Initialized
DEBUG - 2013-10-27 14:39:56 --> Helper loaded: string_helper
DEBUG - 2013-10-27 14:39:56 --> Session routines successfully run
DEBUG - 2013-10-27 14:39:56 --> Form Validation Class Initialized
DEBUG - 2013-10-27 14:39:56 --> Controller Class Initialized
DEBUG - 2013-10-27 14:39:56 --> Model Class Initialized
DEBUG - 2013-10-27 14:39:56 --> Model Class Initialized
DEBUG - 2013-10-27 14:39:56 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-27 14:39:56 --> after session initialization................
INFO  - 2013-10-27 14:39:56 --> The forum id is 6
INFO  - 2013-10-27 14:39:56 --> inside retrieving pharmacy beyond id 
INFO  - 2013-10-27 14:39:56 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 6
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '6'
ORDER BY `ft`.`name`)
INFO  - 2013-10-27 14:39:56 --> The encoded json is [{"id":"8","text":"Complicated Long sight","hasChildren":true},{"id":"9","text":"Non complicated long sight","hasChildren":true}]
DEBUG - 2013-10-27 14:39:56 --> Final output sent to browser
DEBUG - 2013-10-27 14:39:56 --> Total execution time: 0.0610
DEBUG - 2013-10-27 14:40:00 --> Config Class Initialized
DEBUG - 2013-10-27 14:40:00 --> Hooks Class Initialized
DEBUG - 2013-10-27 14:40:00 --> Utf8 Class Initialized
DEBUG - 2013-10-27 14:40:00 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 14:40:00 --> URI Class Initialized
DEBUG - 2013-10-27 14:40:00 --> Router Class Initialized
DEBUG - 2013-10-27 14:40:00 --> Output Class Initialized
DEBUG - 2013-10-27 14:40:00 --> Security Class Initialized
DEBUG - 2013-10-27 14:40:00 --> Input Class Initialized
DEBUG - 2013-10-27 14:40:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-27 14:40:00 --> Language Class Initialized
DEBUG - 2013-10-27 14:40:00 --> Loader Class Initialized
DEBUG - 2013-10-27 14:40:00 --> Helper loaded: form_helper
DEBUG - 2013-10-27 14:40:00 --> Helper loaded: url_helper
DEBUG - 2013-10-27 14:40:00 --> Helper loaded: html_helper
DEBUG - 2013-10-27 14:40:00 --> Database Driver Class Initialized
DEBUG - 2013-10-27 14:40:00 --> Session Class Initialized
DEBUG - 2013-10-27 14:40:00 --> Helper loaded: string_helper
DEBUG - 2013-10-27 14:40:00 --> Session routines successfully run
DEBUG - 2013-10-27 14:40:00 --> Form Validation Class Initialized
DEBUG - 2013-10-27 14:40:00 --> Controller Class Initialized
DEBUG - 2013-10-27 14:40:00 --> Model Class Initialized
DEBUG - 2013-10-27 14:40:00 --> Model Class Initialized
DEBUG - 2013-10-27 14:40:00 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-27 14:40:00 --> after session initialization................
INFO  - 2013-10-27 14:40:00 --> The forum id is 9
INFO  - 2013-10-27 14:40:00 --> inside retrieving pharmacy beyond id 
INFO  - 2013-10-27 14:40:00 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 9
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '9'
ORDER BY `ft`.`name`)
INFO  - 2013-10-27 14:40:00 --> The encoded json is [{"id":"10","text":"Ex- coomplicated long sight","hasChildren":true}]
DEBUG - 2013-10-27 14:40:00 --> Final output sent to browser
DEBUG - 2013-10-27 14:40:00 --> Total execution time: 0.0690
DEBUG - 2013-10-27 14:40:06 --> Config Class Initialized
DEBUG - 2013-10-27 14:40:06 --> Hooks Class Initialized
DEBUG - 2013-10-27 14:40:06 --> Utf8 Class Initialized
DEBUG - 2013-10-27 14:40:06 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 14:40:06 --> URI Class Initialized
DEBUG - 2013-10-27 14:40:06 --> Router Class Initialized
DEBUG - 2013-10-27 14:40:06 --> Output Class Initialized
DEBUG - 2013-10-27 14:40:06 --> Security Class Initialized
DEBUG - 2013-10-27 14:40:06 --> Input Class Initialized
DEBUG - 2013-10-27 14:40:06 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-27 14:40:06 --> Language Class Initialized
DEBUG - 2013-10-27 14:40:06 --> Loader Class Initialized
DEBUG - 2013-10-27 14:40:06 --> Helper loaded: form_helper
DEBUG - 2013-10-27 14:40:06 --> Helper loaded: url_helper
DEBUG - 2013-10-27 14:40:06 --> Helper loaded: html_helper
DEBUG - 2013-10-27 14:40:06 --> Database Driver Class Initialized
DEBUG - 2013-10-27 14:40:06 --> Session Class Initialized
DEBUG - 2013-10-27 14:40:06 --> Helper loaded: string_helper
DEBUG - 2013-10-27 14:40:06 --> Session routines successfully run
DEBUG - 2013-10-27 14:40:06 --> Form Validation Class Initialized
DEBUG - 2013-10-27 14:40:06 --> Controller Class Initialized
DEBUG - 2013-10-27 14:40:06 --> Model Class Initialized
DEBUG - 2013-10-27 14:40:06 --> Model Class Initialized
DEBUG - 2013-10-27 14:40:06 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-27 14:40:06 --> after session initialization................
INFO  - 2013-10-27 14:40:06 --> The forum id is 8
INFO  - 2013-10-27 14:40:06 --> inside retrieving pharmacy beyond id 
INFO  - 2013-10-27 14:40:06 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 8
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '8'
ORDER BY `ft`.`name`)
INFO  - 2013-10-27 14:40:06 --> The encoded json is []
DEBUG - 2013-10-27 14:40:06 --> Final output sent to browser
DEBUG - 2013-10-27 14:40:06 --> Total execution time: 0.0580
DEBUG - 2013-10-27 14:40:11 --> Config Class Initialized
DEBUG - 2013-10-27 14:40:11 --> Hooks Class Initialized
DEBUG - 2013-10-27 14:40:11 --> Utf8 Class Initialized
DEBUG - 2013-10-27 14:40:11 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 14:40:11 --> URI Class Initialized
DEBUG - 2013-10-27 14:40:11 --> Router Class Initialized
DEBUG - 2013-10-27 14:40:11 --> Output Class Initialized
DEBUG - 2013-10-27 14:40:11 --> Security Class Initialized
DEBUG - 2013-10-27 14:40:11 --> Input Class Initialized
DEBUG - 2013-10-27 14:40:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-27 14:40:11 --> Language Class Initialized
DEBUG - 2013-10-27 14:40:11 --> Loader Class Initialized
DEBUG - 2013-10-27 14:40:11 --> Helper loaded: form_helper
DEBUG - 2013-10-27 14:40:11 --> Helper loaded: url_helper
DEBUG - 2013-10-27 14:40:11 --> Helper loaded: html_helper
DEBUG - 2013-10-27 14:40:11 --> Database Driver Class Initialized
DEBUG - 2013-10-27 14:40:11 --> Session Class Initialized
DEBUG - 2013-10-27 14:40:11 --> Helper loaded: string_helper
DEBUG - 2013-10-27 14:40:11 --> Session routines successfully run
DEBUG - 2013-10-27 14:40:11 --> Form Validation Class Initialized
DEBUG - 2013-10-27 14:40:11 --> Controller Class Initialized
DEBUG - 2013-10-27 14:40:11 --> Model Class Initialized
DEBUG - 2013-10-27 14:40:11 --> Model Class Initialized
DEBUG - 2013-10-27 14:40:11 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-27 14:40:11 --> after session initialization................
INFO  - 2013-10-27 14:40:11 --> The forum id is 10
INFO  - 2013-10-27 14:40:11 --> inside retrieving pharmacy beyond id 
INFO  - 2013-10-27 14:40:11 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 10
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '10'
ORDER BY `ft`.`name`)
INFO  - 2013-10-27 14:40:11 --> The encoded json is [{"id":"11","text":"Supra-complicated long sight","hasChildren":true}]
DEBUG - 2013-10-27 14:40:11 --> Final output sent to browser
DEBUG - 2013-10-27 14:40:11 --> Total execution time: 0.0600
DEBUG - 2013-10-27 14:40:15 --> Config Class Initialized
DEBUG - 2013-10-27 14:40:15 --> Hooks Class Initialized
DEBUG - 2013-10-27 14:40:15 --> Utf8 Class Initialized
DEBUG - 2013-10-27 14:40:15 --> UTF-8 Support Enabled
DEBUG - 2013-10-27 14:40:15 --> URI Class Initialized
DEBUG - 2013-10-27 14:40:15 --> Router Class Initialized
DEBUG - 2013-10-27 14:40:15 --> Output Class Initialized
DEBUG - 2013-10-27 14:40:15 --> Security Class Initialized
DEBUG - 2013-10-27 14:40:15 --> Input Class Initialized
DEBUG - 2013-10-27 14:40:15 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-27 14:40:15 --> Language Class Initialized
DEBUG - 2013-10-27 14:40:15 --> Loader Class Initialized
DEBUG - 2013-10-27 14:40:15 --> Helper loaded: form_helper
DEBUG - 2013-10-27 14:40:15 --> Helper loaded: url_helper
DEBUG - 2013-10-27 14:40:15 --> Helper loaded: html_helper
DEBUG - 2013-10-27 14:40:15 --> Database Driver Class Initialized
DEBUG - 2013-10-27 14:40:15 --> Session Class Initialized
DEBUG - 2013-10-27 14:40:15 --> Helper loaded: string_helper
DEBUG - 2013-10-27 14:40:15 --> Session routines successfully run
DEBUG - 2013-10-27 14:40:15 --> Form Validation Class Initialized
DEBUG - 2013-10-27 14:40:15 --> Controller Class Initialized
DEBUG - 2013-10-27 14:40:15 --> Model Class Initialized
DEBUG - 2013-10-27 14:40:15 --> Model Class Initialized
DEBUG - 2013-10-27 14:40:15 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-27 14:40:15 --> after session initialization................
INFO  - 2013-10-27 14:40:15 --> The forum id is 11
INFO  - 2013-10-27 14:40:15 --> inside retrieving pharmacy beyond id 
INFO  - 2013-10-27 14:40:15 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 11
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '11'
ORDER BY `ft`.`name`)
INFO  - 2013-10-27 14:40:15 --> The encoded json is []
DEBUG - 2013-10-27 14:40:15 --> Final output sent to browser
DEBUG - 2013-10-27 14:40:15 --> Total execution time: 0.0540
