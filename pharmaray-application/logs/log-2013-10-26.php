<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2013-10-26 11:30:40 --> Config Class Initialized
DEBUG - 2013-10-26 11:30:40 --> Hooks Class Initialized
DEBUG - 2013-10-26 11:30:40 --> Utf8 Class Initialized
DEBUG - 2013-10-26 11:30:40 --> UTF-8 Support Enabled
DEBUG - 2013-10-26 11:30:40 --> URI Class Initialized
DEBUG - 2013-10-26 11:30:40 --> Router Class Initialized
DEBUG - 2013-10-26 11:30:40 --> Output Class Initialized
DEBUG - 2013-10-26 11:30:40 --> Security Class Initialized
DEBUG - 2013-10-26 11:30:40 --> Input Class Initialized
DEBUG - 2013-10-26 11:30:40 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-26 11:30:40 --> Language Class Initialized
DEBUG - 2013-10-26 11:30:40 --> Loader Class Initialized
DEBUG - 2013-10-26 11:30:40 --> Helper loaded: form_helper
DEBUG - 2013-10-26 11:30:40 --> Helper loaded: url_helper
DEBUG - 2013-10-26 11:30:40 --> Helper loaded: html_helper
DEBUG - 2013-10-26 11:30:41 --> Database Driver Class Initialized
DEBUG - 2013-10-26 11:30:41 --> Session Class Initialized
DEBUG - 2013-10-26 11:30:41 --> Helper loaded: string_helper
DEBUG - 2013-10-26 11:30:41 --> Session routines successfully run
DEBUG - 2013-10-26 11:30:41 --> Form Validation Class Initialized
DEBUG - 2013-10-26 11:30:41 --> Controller Class Initialized
DEBUG - 2013-10-26 11:30:41 --> Model Class Initialized
DEBUG - 2013-10-26 11:30:41 --> Model Class Initialized
DEBUG - 2013-10-26 11:30:41 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-26 11:30:41 --> after session initialization................
INFO  - 2013-10-26 11:30:41 --> inside retrieve most commented forum topic 
INFO  - 2013-10-26 11:30:41 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count`
INFO  - 2013-10-26 11:30:41 --> inside retrieve most commented forum topic 
INFO  - 2013-10-26 11:30:41 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`
FROM (`forum_topic` t)
WHERE `t`.`id_topicforum` =  '1'
INFO  - 2013-10-26 11:30:41 --> inside retrieving first 20 topics 
INFO  - 2013-10-26 11:30:41 --> SELECT `t`.`id_topicforum`, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count`
LIMIT 20
INFO  - 2013-10-26 11:30:41 --> inside retrieving pharmacy beyond id 
INFO  - 2013-10-26 11:30:41 --> SELECT `ff`.`id_forum` as id, `ff`.`name`, count(f.id_forum) as sub_forum
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` is null 
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`
INFO  - 2013-10-26 11:30:41 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-10-26 11:30:41 --> inside retrieving comments topic id and drug id is 1
INFO  - 2013-10-26 11:30:41 --> SELECT `tc`.`id_topiccomment`, `tc`.`comment`, `tc`.`timecreated`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-10-26 11:30:41 --> inside retrieving comments topic id 1
INFO  - 2013-10-26 11:30:41 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
INFO  - 2013-10-26 11:30:41 --> after forums has been clicked.................
INFO  - 2013-10-26 11:30:41 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-10-26 11:30:41 --> File loaded: ../pharmaray-application/views/forum.php
DEBUG - 2013-10-26 11:30:41 --> Final output sent to browser
DEBUG - 2013-10-26 11:30:41 --> Total execution time: 0.1100
DEBUG - 2013-10-26 11:30:41 --> Config Class Initialized
DEBUG - 2013-10-26 11:30:41 --> Hooks Class Initialized
DEBUG - 2013-10-26 11:30:41 --> Utf8 Class Initialized
DEBUG - 2013-10-26 11:30:41 --> UTF-8 Support Enabled
DEBUG - 2013-10-26 11:30:41 --> URI Class Initialized
DEBUG - 2013-10-26 11:30:41 --> Router Class Initialized
DEBUG - 2013-10-26 11:30:41 --> Output Class Initialized
DEBUG - 2013-10-26 11:30:41 --> Security Class Initialized
DEBUG - 2013-10-26 11:30:41 --> Input Class Initialized
DEBUG - 2013-10-26 11:30:41 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-26 11:30:41 --> Language Class Initialized
DEBUG - 2013-10-26 11:30:41 --> Loader Class Initialized
DEBUG - 2013-10-26 11:30:41 --> Helper loaded: form_helper
DEBUG - 2013-10-26 11:30:41 --> Helper loaded: url_helper
DEBUG - 2013-10-26 11:30:41 --> Helper loaded: html_helper
DEBUG - 2013-10-26 11:30:41 --> Database Driver Class Initialized
DEBUG - 2013-10-26 11:30:41 --> Session Class Initialized
DEBUG - 2013-10-26 11:30:41 --> Helper loaded: string_helper
DEBUG - 2013-10-26 11:30:41 --> Session routines successfully run
DEBUG - 2013-10-26 11:30:41 --> Form Validation Class Initialized
DEBUG - 2013-10-26 11:30:41 --> Controller Class Initialized
DEBUG - 2013-10-26 11:30:41 --> Model Class Initialized
DEBUG - 2013-10-26 11:30:41 --> Model Class Initialized
DEBUG - 2013-10-26 11:30:41 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-26 11:30:41 --> after session initialization................
ERROR - 2013-10-26 11:30:41 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-10-26 11:30:41 --> Config Class Initialized
DEBUG - 2013-10-26 11:30:41 --> Hooks Class Initialized
DEBUG - 2013-10-26 11:30:41 --> Utf8 Class Initialized
DEBUG - 2013-10-26 11:30:41 --> UTF-8 Support Enabled
DEBUG - 2013-10-26 11:30:41 --> URI Class Initialized
DEBUG - 2013-10-26 11:30:41 --> Router Class Initialized
ERROR - 2013-10-26 11:30:41 --> 404 Page Not Found --> css
DEBUG - 2013-10-26 11:30:42 --> Config Class Initialized
DEBUG - 2013-10-26 11:30:42 --> Hooks Class Initialized
DEBUG - 2013-10-26 11:30:42 --> Utf8 Class Initialized
DEBUG - 2013-10-26 11:30:42 --> UTF-8 Support Enabled
DEBUG - 2013-10-26 11:30:42 --> URI Class Initialized
DEBUG - 2013-10-26 11:30:42 --> Router Class Initialized
DEBUG - 2013-10-26 11:30:42 --> Output Class Initialized
DEBUG - 2013-10-26 11:30:42 --> Security Class Initialized
DEBUG - 2013-10-26 11:30:42 --> Input Class Initialized
DEBUG - 2013-10-26 11:30:42 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-26 11:30:42 --> Language Class Initialized
DEBUG - 2013-10-26 11:30:42 --> Loader Class Initialized
DEBUG - 2013-10-26 11:30:42 --> Helper loaded: form_helper
DEBUG - 2013-10-26 11:30:42 --> Helper loaded: url_helper
DEBUG - 2013-10-26 11:30:42 --> Helper loaded: html_helper
DEBUG - 2013-10-26 11:30:42 --> Database Driver Class Initialized
DEBUG - 2013-10-26 11:30:42 --> Session Class Initialized
DEBUG - 2013-10-26 11:30:42 --> Helper loaded: string_helper
DEBUG - 2013-10-26 11:30:42 --> Session routines successfully run
DEBUG - 2013-10-26 11:30:42 --> Form Validation Class Initialized
DEBUG - 2013-10-26 11:30:42 --> Controller Class Initialized
DEBUG - 2013-10-26 11:30:42 --> Model Class Initialized
DEBUG - 2013-10-26 11:30:42 --> Model Class Initialized
DEBUG - 2013-10-26 11:30:42 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-26 11:30:42 --> after session initialization................
INFO  - 2013-10-26 11:30:42 --> inside retrieve most commented forum topic 
INFO  - 2013-10-26 11:30:42 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count`
INFO  - 2013-10-26 11:30:42 --> inside retrieve most commented forum topic 
INFO  - 2013-10-26 11:30:42 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`
FROM (`forum_topic` t)
WHERE `t`.`id_topicforum` =  '1'
INFO  - 2013-10-26 11:30:42 --> inside retrieving first 20 topics 
INFO  - 2013-10-26 11:30:42 --> SELECT `t`.`id_topicforum`, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count`
LIMIT 20
INFO  - 2013-10-26 11:30:42 --> inside retrieving pharmacy beyond id 
INFO  - 2013-10-26 11:30:42 --> SELECT `ff`.`id_forum` as id, `ff`.`name`, count(f.id_forum) as sub_forum
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` is null 
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`
INFO  - 2013-10-26 11:30:42 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-10-26 11:30:42 --> inside retrieving comments topic id and drug id is 1
INFO  - 2013-10-26 11:30:42 --> SELECT `tc`.`id_topiccomment`, `tc`.`comment`, `tc`.`timecreated`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-10-26 11:30:42 --> inside retrieving comments topic id 1
INFO  - 2013-10-26 11:30:42 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
INFO  - 2013-10-26 11:30:42 --> after forums has been clicked.................
INFO  - 2013-10-26 11:30:42 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-10-26 11:30:42 --> File loaded: ../pharmaray-application/views/forum.php
DEBUG - 2013-10-26 11:30:42 --> Final output sent to browser
DEBUG - 2013-10-26 11:30:42 --> Total execution time: 0.0860
DEBUG - 2013-10-26 11:30:42 --> Config Class Initialized
DEBUG - 2013-10-26 11:30:42 --> Hooks Class Initialized
DEBUG - 2013-10-26 11:30:42 --> Utf8 Class Initialized
DEBUG - 2013-10-26 11:30:42 --> UTF-8 Support Enabled
DEBUG - 2013-10-26 11:30:42 --> URI Class Initialized
DEBUG - 2013-10-26 11:30:42 --> Router Class Initialized
DEBUG - 2013-10-26 11:30:42 --> Output Class Initialized
DEBUG - 2013-10-26 11:30:42 --> Security Class Initialized
DEBUG - 2013-10-26 11:30:42 --> Input Class Initialized
DEBUG - 2013-10-26 11:30:42 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-26 11:30:42 --> Language Class Initialized
DEBUG - 2013-10-26 11:30:42 --> Loader Class Initialized
DEBUG - 2013-10-26 11:30:42 --> Helper loaded: form_helper
DEBUG - 2013-10-26 11:30:42 --> Helper loaded: url_helper
DEBUG - 2013-10-26 11:30:42 --> Helper loaded: html_helper
DEBUG - 2013-10-26 11:30:42 --> Database Driver Class Initialized
DEBUG - 2013-10-26 11:30:42 --> Session Class Initialized
DEBUG - 2013-10-26 11:30:42 --> Helper loaded: string_helper
DEBUG - 2013-10-26 11:30:42 --> Session routines successfully run
DEBUG - 2013-10-26 11:30:42 --> Form Validation Class Initialized
DEBUG - 2013-10-26 11:30:42 --> Controller Class Initialized
DEBUG - 2013-10-26 11:30:42 --> Model Class Initialized
DEBUG - 2013-10-26 11:30:42 --> Model Class Initialized
DEBUG - 2013-10-26 11:30:42 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-26 11:30:42 --> after session initialization................
ERROR - 2013-10-26 11:30:42 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-10-26 11:30:42 --> Config Class Initialized
DEBUG - 2013-10-26 11:30:42 --> Hooks Class Initialized
DEBUG - 2013-10-26 11:30:42 --> Utf8 Class Initialized
DEBUG - 2013-10-26 11:30:42 --> UTF-8 Support Enabled
DEBUG - 2013-10-26 11:30:42 --> URI Class Initialized
DEBUG - 2013-10-26 11:30:42 --> Router Class Initialized
ERROR - 2013-10-26 11:30:42 --> 404 Page Not Found --> css
DEBUG - 2013-10-26 11:30:45 --> Config Class Initialized
DEBUG - 2013-10-26 11:30:45 --> Hooks Class Initialized
DEBUG - 2013-10-26 11:30:45 --> Utf8 Class Initialized
DEBUG - 2013-10-26 11:30:45 --> UTF-8 Support Enabled
DEBUG - 2013-10-26 11:30:45 --> URI Class Initialized
DEBUG - 2013-10-26 11:30:45 --> Router Class Initialized
DEBUG - 2013-10-26 11:30:45 --> Output Class Initialized
DEBUG - 2013-10-26 11:30:45 --> Security Class Initialized
DEBUG - 2013-10-26 11:30:45 --> Input Class Initialized
DEBUG - 2013-10-26 11:30:45 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-26 11:30:45 --> Language Class Initialized
DEBUG - 2013-10-26 11:30:45 --> Loader Class Initialized
DEBUG - 2013-10-26 11:30:45 --> Helper loaded: form_helper
DEBUG - 2013-10-26 11:30:45 --> Helper loaded: url_helper
DEBUG - 2013-10-26 11:30:45 --> Helper loaded: html_helper
DEBUG - 2013-10-26 11:30:45 --> Database Driver Class Initialized
DEBUG - 2013-10-26 11:30:45 --> Session Class Initialized
DEBUG - 2013-10-26 11:30:45 --> Helper loaded: string_helper
DEBUG - 2013-10-26 11:30:45 --> Session routines successfully run
DEBUG - 2013-10-26 11:30:45 --> Form Validation Class Initialized
DEBUG - 2013-10-26 11:30:45 --> Controller Class Initialized
DEBUG - 2013-10-26 11:30:45 --> Model Class Initialized
DEBUG - 2013-10-26 11:30:45 --> Model Class Initialized
DEBUG - 2013-10-26 11:30:45 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-26 11:30:45 --> after session initialization................
INFO  - 2013-10-26 11:30:45 --> The forum id is 1
ERROR - 2013-10-26 11:30:45 --> Severity: Notice  --> Undefined variable: extract C:\xampp\htdocs\Pharmarays\pharmaray-application\models\members_model\membermodel.php 599
DEBUG - 2013-10-26 11:32:56 --> Config Class Initialized
DEBUG - 2013-10-26 11:32:56 --> Hooks Class Initialized
DEBUG - 2013-10-26 11:32:56 --> Utf8 Class Initialized
DEBUG - 2013-10-26 11:32:56 --> UTF-8 Support Enabled
DEBUG - 2013-10-26 11:32:56 --> URI Class Initialized
DEBUG - 2013-10-26 11:32:56 --> Router Class Initialized
DEBUG - 2013-10-26 11:32:56 --> Output Class Initialized
DEBUG - 2013-10-26 11:32:56 --> Security Class Initialized
DEBUG - 2013-10-26 11:32:56 --> Input Class Initialized
DEBUG - 2013-10-26 11:32:56 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-26 11:32:56 --> Language Class Initialized
DEBUG - 2013-10-26 11:32:56 --> Loader Class Initialized
DEBUG - 2013-10-26 11:32:56 --> Helper loaded: form_helper
DEBUG - 2013-10-26 11:32:56 --> Helper loaded: url_helper
DEBUG - 2013-10-26 11:32:56 --> Helper loaded: html_helper
DEBUG - 2013-10-26 11:32:56 --> Database Driver Class Initialized
DEBUG - 2013-10-26 11:32:56 --> Session Class Initialized
DEBUG - 2013-10-26 11:32:56 --> Helper loaded: string_helper
DEBUG - 2013-10-26 11:32:56 --> Session routines successfully run
DEBUG - 2013-10-26 11:32:56 --> Form Validation Class Initialized
DEBUG - 2013-10-26 11:32:56 --> Controller Class Initialized
DEBUG - 2013-10-26 11:32:56 --> Model Class Initialized
DEBUG - 2013-10-26 11:32:56 --> Model Class Initialized
DEBUG - 2013-10-26 11:32:56 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-26 11:32:56 --> after session initialization................
INFO  - 2013-10-26 11:32:56 --> inside retrieve most commented forum topic 
INFO  - 2013-10-26 11:32:56 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count`
INFO  - 2013-10-26 11:32:56 --> inside retrieve most commented forum topic 
INFO  - 2013-10-26 11:32:56 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`
FROM (`forum_topic` t)
WHERE `t`.`id_topicforum` =  '1'
INFO  - 2013-10-26 11:32:56 --> inside retrieving first 20 topics 
INFO  - 2013-10-26 11:32:56 --> SELECT `t`.`id_topicforum`, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count`
LIMIT 20
INFO  - 2013-10-26 11:32:56 --> inside retrieving pharmacy beyond id 
INFO  - 2013-10-26 11:32:56 --> SELECT `ff`.`id_forum` as id, `ff`.`name`, count(f.id_forum) as sub_forum
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` is null 
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`
INFO  - 2013-10-26 11:32:56 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-10-26 11:32:56 --> inside retrieving comments topic id and drug id is 1
INFO  - 2013-10-26 11:32:56 --> SELECT `tc`.`id_topiccomment`, `tc`.`comment`, `tc`.`timecreated`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-10-26 11:32:56 --> inside retrieving comments topic id 1
INFO  - 2013-10-26 11:32:56 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
INFO  - 2013-10-26 11:32:56 --> after forums has been clicked.................
INFO  - 2013-10-26 11:32:56 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-10-26 11:32:56 --> File loaded: ../pharmaray-application/views/forum.php
DEBUG - 2013-10-26 11:32:56 --> Final output sent to browser
DEBUG - 2013-10-26 11:32:56 --> Total execution time: 0.0960
DEBUG - 2013-10-26 11:32:56 --> Config Class Initialized
DEBUG - 2013-10-26 11:32:56 --> Hooks Class Initialized
DEBUG - 2013-10-26 11:32:56 --> Utf8 Class Initialized
DEBUG - 2013-10-26 11:32:56 --> UTF-8 Support Enabled
DEBUG - 2013-10-26 11:32:56 --> URI Class Initialized
DEBUG - 2013-10-26 11:32:56 --> Router Class Initialized
DEBUG - 2013-10-26 11:32:56 --> Output Class Initialized
DEBUG - 2013-10-26 11:32:56 --> Security Class Initialized
DEBUG - 2013-10-26 11:32:56 --> Input Class Initialized
DEBUG - 2013-10-26 11:32:56 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-26 11:32:56 --> Language Class Initialized
DEBUG - 2013-10-26 11:32:56 --> Loader Class Initialized
DEBUG - 2013-10-26 11:32:56 --> Helper loaded: form_helper
DEBUG - 2013-10-26 11:32:56 --> Helper loaded: url_helper
DEBUG - 2013-10-26 11:32:56 --> Helper loaded: html_helper
DEBUG - 2013-10-26 11:32:56 --> Database Driver Class Initialized
DEBUG - 2013-10-26 11:32:56 --> Session Class Initialized
DEBUG - 2013-10-26 11:32:56 --> Helper loaded: string_helper
DEBUG - 2013-10-26 11:32:56 --> Session routines successfully run
DEBUG - 2013-10-26 11:32:56 --> Form Validation Class Initialized
DEBUG - 2013-10-26 11:32:56 --> Controller Class Initialized
DEBUG - 2013-10-26 11:32:56 --> Model Class Initialized
DEBUG - 2013-10-26 11:32:56 --> Model Class Initialized
DEBUG - 2013-10-26 11:32:56 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-26 11:32:56 --> after session initialization................
ERROR - 2013-10-26 11:32:56 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-10-26 11:32:56 --> Config Class Initialized
DEBUG - 2013-10-26 11:32:56 --> Hooks Class Initialized
DEBUG - 2013-10-26 11:32:56 --> Utf8 Class Initialized
DEBUG - 2013-10-26 11:32:56 --> UTF-8 Support Enabled
DEBUG - 2013-10-26 11:32:56 --> URI Class Initialized
DEBUG - 2013-10-26 11:32:56 --> Router Class Initialized
ERROR - 2013-10-26 11:32:56 --> 404 Page Not Found --> css
DEBUG - 2013-10-26 11:33:00 --> Config Class Initialized
DEBUG - 2013-10-26 11:33:00 --> Hooks Class Initialized
DEBUG - 2013-10-26 11:33:00 --> Utf8 Class Initialized
DEBUG - 2013-10-26 11:33:00 --> UTF-8 Support Enabled
DEBUG - 2013-10-26 11:33:00 --> URI Class Initialized
DEBUG - 2013-10-26 11:33:00 --> Router Class Initialized
DEBUG - 2013-10-26 11:33:00 --> Output Class Initialized
DEBUG - 2013-10-26 11:33:00 --> Security Class Initialized
DEBUG - 2013-10-26 11:33:00 --> Input Class Initialized
DEBUG - 2013-10-26 11:33:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-26 11:33:00 --> Language Class Initialized
DEBUG - 2013-10-26 11:33:00 --> Loader Class Initialized
DEBUG - 2013-10-26 11:33:00 --> Helper loaded: form_helper
DEBUG - 2013-10-26 11:33:00 --> Helper loaded: url_helper
DEBUG - 2013-10-26 11:33:00 --> Helper loaded: html_helper
DEBUG - 2013-10-26 11:33:00 --> Database Driver Class Initialized
DEBUG - 2013-10-26 11:33:00 --> Session Class Initialized
DEBUG - 2013-10-26 11:33:00 --> Helper loaded: string_helper
DEBUG - 2013-10-26 11:33:00 --> Session routines successfully run
DEBUG - 2013-10-26 11:33:00 --> Form Validation Class Initialized
DEBUG - 2013-10-26 11:33:00 --> Controller Class Initialized
DEBUG - 2013-10-26 11:33:00 --> Model Class Initialized
DEBUG - 2013-10-26 11:33:00 --> Model Class Initialized
DEBUG - 2013-10-26 11:33:00 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-26 11:33:00 --> after session initialization................
INFO  - 2013-10-26 11:33:00 --> The forum id is 1
INFO  - 2013-10-26 11:33:00 --> inside retrieving pharmacy beyond id 
ERROR - 2013-10-26 11:33:00 --> Severity: Notice  --> Use of undefined constant query1 - assumed 'query1' C:\xampp\htdocs\Pharmarays\pharmaray-application\models\members_model\membermodel.php 619
ERROR - 2013-10-26 11:33:00 --> Severity: Notice  --> Use of undefined constant query2 - assumed 'query2' C:\xampp\htdocs\Pharmarays\pharmaray-application\models\members_model\membermodel.php 619
DEBUG - 2013-10-26 11:33:00 --> DB Transaction Failure
ERROR - 2013-10-26 11:33:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'query1 union query2' at line 1
DEBUG - 2013-10-26 11:33:00 --> Language file loaded: language/english/db_lang.php
DEBUG - 2013-10-26 11:33:32 --> Config Class Initialized
DEBUG - 2013-10-26 11:33:32 --> Hooks Class Initialized
DEBUG - 2013-10-26 11:33:32 --> Utf8 Class Initialized
DEBUG - 2013-10-26 11:33:32 --> UTF-8 Support Enabled
DEBUG - 2013-10-26 11:33:32 --> URI Class Initialized
DEBUG - 2013-10-26 11:33:32 --> Router Class Initialized
DEBUG - 2013-10-26 11:33:32 --> Output Class Initialized
DEBUG - 2013-10-26 11:33:32 --> Security Class Initialized
DEBUG - 2013-10-26 11:33:32 --> Input Class Initialized
DEBUG - 2013-10-26 11:33:32 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-26 11:33:32 --> Language Class Initialized
DEBUG - 2013-10-26 11:33:32 --> Loader Class Initialized
DEBUG - 2013-10-26 11:33:32 --> Helper loaded: form_helper
DEBUG - 2013-10-26 11:33:32 --> Helper loaded: url_helper
DEBUG - 2013-10-26 11:33:32 --> Helper loaded: html_helper
DEBUG - 2013-10-26 11:33:32 --> Database Driver Class Initialized
DEBUG - 2013-10-26 11:33:32 --> Session Class Initialized
DEBUG - 2013-10-26 11:33:32 --> Helper loaded: string_helper
DEBUG - 2013-10-26 11:33:32 --> Session routines successfully run
DEBUG - 2013-10-26 11:33:32 --> Form Validation Class Initialized
DEBUG - 2013-10-26 11:33:32 --> Controller Class Initialized
DEBUG - 2013-10-26 11:33:32 --> Model Class Initialized
DEBUG - 2013-10-26 11:33:32 --> Model Class Initialized
DEBUG - 2013-10-26 11:33:32 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-26 11:33:32 --> after session initialization................
INFO  - 2013-10-26 11:33:32 --> inside retrieve most commented forum topic 
INFO  - 2013-10-26 11:33:32 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count`
INFO  - 2013-10-26 11:33:32 --> inside retrieve most commented forum topic 
INFO  - 2013-10-26 11:33:32 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`
FROM (`forum_topic` t)
WHERE `t`.`id_topicforum` =  '1'
INFO  - 2013-10-26 11:33:32 --> inside retrieving first 20 topics 
INFO  - 2013-10-26 11:33:32 --> SELECT `t`.`id_topicforum`, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count`
LIMIT 20
INFO  - 2013-10-26 11:33:32 --> inside retrieving pharmacy beyond id 
INFO  - 2013-10-26 11:33:32 --> SELECT `ff`.`id_forum` as id, `ff`.`name`, count(f.id_forum) as sub_forum
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` is null 
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`
INFO  - 2013-10-26 11:33:32 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-10-26 11:33:32 --> inside retrieving comments topic id and drug id is 1
INFO  - 2013-10-26 11:33:32 --> SELECT `tc`.`id_topiccomment`, `tc`.`comment`, `tc`.`timecreated`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-10-26 11:33:32 --> inside retrieving comments topic id 1
INFO  - 2013-10-26 11:33:32 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
INFO  - 2013-10-26 11:33:32 --> after forums has been clicked.................
INFO  - 2013-10-26 11:33:32 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-10-26 11:33:32 --> File loaded: ../pharmaray-application/views/forum.php
DEBUG - 2013-10-26 11:33:32 --> Final output sent to browser
DEBUG - 2013-10-26 11:33:32 --> Total execution time: 0.0910
DEBUG - 2013-10-26 11:33:32 --> Config Class Initialized
DEBUG - 2013-10-26 11:33:32 --> Hooks Class Initialized
DEBUG - 2013-10-26 11:33:32 --> Utf8 Class Initialized
DEBUG - 2013-10-26 11:33:32 --> UTF-8 Support Enabled
DEBUG - 2013-10-26 11:33:32 --> URI Class Initialized
DEBUG - 2013-10-26 11:33:32 --> Router Class Initialized
DEBUG - 2013-10-26 11:33:32 --> Output Class Initialized
DEBUG - 2013-10-26 11:33:32 --> Security Class Initialized
DEBUG - 2013-10-26 11:33:32 --> Input Class Initialized
DEBUG - 2013-10-26 11:33:32 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-26 11:33:32 --> Language Class Initialized
DEBUG - 2013-10-26 11:33:32 --> Loader Class Initialized
DEBUG - 2013-10-26 11:33:32 --> Helper loaded: form_helper
DEBUG - 2013-10-26 11:33:32 --> Helper loaded: url_helper
DEBUG - 2013-10-26 11:33:32 --> Helper loaded: html_helper
DEBUG - 2013-10-26 11:33:32 --> Database Driver Class Initialized
DEBUG - 2013-10-26 11:33:32 --> Session Class Initialized
DEBUG - 2013-10-26 11:33:32 --> Helper loaded: string_helper
DEBUG - 2013-10-26 11:33:32 --> Session routines successfully run
DEBUG - 2013-10-26 11:33:32 --> Form Validation Class Initialized
DEBUG - 2013-10-26 11:33:32 --> Controller Class Initialized
DEBUG - 2013-10-26 11:33:32 --> Model Class Initialized
DEBUG - 2013-10-26 11:33:32 --> Model Class Initialized
DEBUG - 2013-10-26 11:33:32 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-26 11:33:32 --> after session initialization................
ERROR - 2013-10-26 11:33:32 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-10-26 11:33:32 --> Config Class Initialized
DEBUG - 2013-10-26 11:33:32 --> Hooks Class Initialized
DEBUG - 2013-10-26 11:33:32 --> Utf8 Class Initialized
DEBUG - 2013-10-26 11:33:32 --> UTF-8 Support Enabled
DEBUG - 2013-10-26 11:33:32 --> URI Class Initialized
DEBUG - 2013-10-26 11:33:32 --> Router Class Initialized
DEBUG - 2013-10-26 11:33:32 --> Output Class Initialized
DEBUG - 2013-10-26 11:33:32 --> Security Class Initialized
DEBUG - 2013-10-26 11:33:32 --> Input Class Initialized
DEBUG - 2013-10-26 11:33:32 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-26 11:33:32 --> Language Class Initialized
DEBUG - 2013-10-26 11:33:32 --> Loader Class Initialized
DEBUG - 2013-10-26 11:33:32 --> Helper loaded: form_helper
DEBUG - 2013-10-26 11:33:32 --> Helper loaded: url_helper
DEBUG - 2013-10-26 11:33:32 --> Helper loaded: html_helper
DEBUG - 2013-10-26 11:33:32 --> Database Driver Class Initialized
DEBUG - 2013-10-26 11:33:32 --> Session Class Initialized
DEBUG - 2013-10-26 11:33:32 --> Helper loaded: string_helper
DEBUG - 2013-10-26 11:33:32 --> Session routines successfully run
DEBUG - 2013-10-26 11:33:32 --> Form Validation Class Initialized
DEBUG - 2013-10-26 11:33:32 --> Controller Class Initialized
DEBUG - 2013-10-26 11:33:32 --> Model Class Initialized
DEBUG - 2013-10-26 11:33:32 --> Model Class Initialized
DEBUG - 2013-10-26 11:33:32 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-26 11:33:32 --> after session initialization................
ERROR - 2013-10-26 11:33:32 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-10-26 11:33:32 --> Config Class Initialized
DEBUG - 2013-10-26 11:33:32 --> Hooks Class Initialized
DEBUG - 2013-10-26 11:33:32 --> Utf8 Class Initialized
DEBUG - 2013-10-26 11:33:32 --> UTF-8 Support Enabled
DEBUG - 2013-10-26 11:33:32 --> URI Class Initialized
DEBUG - 2013-10-26 11:33:32 --> Router Class Initialized
ERROR - 2013-10-26 11:33:32 --> 404 Page Not Found --> css
DEBUG - 2013-10-26 11:33:35 --> Config Class Initialized
DEBUG - 2013-10-26 11:33:35 --> Hooks Class Initialized
DEBUG - 2013-10-26 11:33:35 --> Utf8 Class Initialized
DEBUG - 2013-10-26 11:33:35 --> UTF-8 Support Enabled
DEBUG - 2013-10-26 11:33:35 --> URI Class Initialized
DEBUG - 2013-10-26 11:33:35 --> Router Class Initialized
DEBUG - 2013-10-26 11:33:35 --> Output Class Initialized
DEBUG - 2013-10-26 11:33:35 --> Security Class Initialized
DEBUG - 2013-10-26 11:33:35 --> Input Class Initialized
DEBUG - 2013-10-26 11:33:35 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-26 11:33:35 --> Language Class Initialized
DEBUG - 2013-10-26 11:33:35 --> Loader Class Initialized
DEBUG - 2013-10-26 11:33:35 --> Helper loaded: form_helper
DEBUG - 2013-10-26 11:33:35 --> Helper loaded: url_helper
DEBUG - 2013-10-26 11:33:35 --> Helper loaded: html_helper
DEBUG - 2013-10-26 11:33:35 --> Database Driver Class Initialized
DEBUG - 2013-10-26 11:33:35 --> Session Class Initialized
DEBUG - 2013-10-26 11:33:35 --> Helper loaded: string_helper
DEBUG - 2013-10-26 11:33:35 --> Session routines successfully run
DEBUG - 2013-10-26 11:33:35 --> Form Validation Class Initialized
DEBUG - 2013-10-26 11:33:35 --> Controller Class Initialized
DEBUG - 2013-10-26 11:33:35 --> Model Class Initialized
DEBUG - 2013-10-26 11:33:35 --> Model Class Initialized
DEBUG - 2013-10-26 11:33:35 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-26 11:33:35 --> after session initialization................
INFO  - 2013-10-26 11:33:35 --> The forum id is 1
INFO  - 2013-10-26 11:33:35 --> inside retrieving pharmacy beyond id 
ERROR - 2013-10-26 11:33:35 --> Severity: 4096  --> Object of class CI_DB_mysql_driver could not be converted to string C:\xampp\htdocs\Pharmarays\pharmaray-application\models\members_model\membermodel.php 619
ERROR - 2013-10-26 11:33:35 --> Severity: 4096  --> Object of class CI_DB_mysql_driver could not be converted to string C:\xampp\htdocs\Pharmarays\pharmaray-application\models\members_model\membermodel.php 619
DEBUG - 2013-10-26 11:33:35 --> DB Transaction Failure
ERROR - 2013-10-26 11:33:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'union' at line 1
DEBUG - 2013-10-26 11:33:35 --> Language file loaded: language/english/db_lang.php
DEBUG - 2013-10-26 11:43:07 --> Config Class Initialized
DEBUG - 2013-10-26 11:43:07 --> Hooks Class Initialized
DEBUG - 2013-10-26 11:43:07 --> Utf8 Class Initialized
DEBUG - 2013-10-26 11:43:07 --> UTF-8 Support Enabled
DEBUG - 2013-10-26 11:43:07 --> URI Class Initialized
DEBUG - 2013-10-26 11:43:07 --> Router Class Initialized
DEBUG - 2013-10-26 11:43:07 --> Output Class Initialized
DEBUG - 2013-10-26 11:43:07 --> Security Class Initialized
DEBUG - 2013-10-26 11:43:07 --> Input Class Initialized
DEBUG - 2013-10-26 11:43:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-26 11:43:07 --> Language Class Initialized
DEBUG - 2013-10-26 11:43:07 --> Loader Class Initialized
DEBUG - 2013-10-26 11:43:07 --> Helper loaded: form_helper
DEBUG - 2013-10-26 11:43:07 --> Helper loaded: url_helper
DEBUG - 2013-10-26 11:43:07 --> Helper loaded: html_helper
DEBUG - 2013-10-26 11:43:07 --> Database Driver Class Initialized
DEBUG - 2013-10-26 11:43:07 --> Session Class Initialized
DEBUG - 2013-10-26 11:43:07 --> Helper loaded: string_helper
DEBUG - 2013-10-26 11:43:07 --> Session routines successfully run
DEBUG - 2013-10-26 11:43:07 --> Form Validation Class Initialized
DEBUG - 2013-10-26 11:43:07 --> Controller Class Initialized
DEBUG - 2013-10-26 11:43:07 --> Model Class Initialized
DEBUG - 2013-10-26 11:43:07 --> Model Class Initialized
DEBUG - 2013-10-26 11:43:07 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-26 11:43:07 --> after session initialization................
INFO  - 2013-10-26 11:43:07 --> inside retrieve most commented forum topic 
INFO  - 2013-10-26 11:43:07 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count`
INFO  - 2013-10-26 11:43:07 --> inside retrieve most commented forum topic 
INFO  - 2013-10-26 11:43:07 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`
FROM (`forum_topic` t)
WHERE `t`.`id_topicforum` =  '1'
INFO  - 2013-10-26 11:43:07 --> inside retrieving first 20 topics 
INFO  - 2013-10-26 11:43:07 --> SELECT `t`.`id_topicforum`, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count`
LIMIT 20
INFO  - 2013-10-26 11:43:07 --> inside retrieving pharmacy beyond id 
INFO  - 2013-10-26 11:43:07 --> SELECT `ff`.`id_forum` as id, `ff`.`name`, count(f.id_forum) as sub_forum
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` is null 
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`
INFO  - 2013-10-26 11:43:07 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-10-26 11:43:07 --> inside retrieving comments topic id and drug id is 1
INFO  - 2013-10-26 11:43:07 --> SELECT `tc`.`id_topiccomment`, `tc`.`comment`, `tc`.`timecreated`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-10-26 11:43:07 --> inside retrieving comments topic id 1
INFO  - 2013-10-26 11:43:07 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
INFO  - 2013-10-26 11:43:07 --> after forums has been clicked.................
INFO  - 2013-10-26 11:43:07 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-10-26 11:43:07 --> File loaded: ../pharmaray-application/views/forum.php
DEBUG - 2013-10-26 11:43:07 --> Final output sent to browser
DEBUG - 2013-10-26 11:43:07 --> Total execution time: 0.0870
DEBUG - 2013-10-26 11:43:07 --> Config Class Initialized
DEBUG - 2013-10-26 11:43:07 --> Hooks Class Initialized
DEBUG - 2013-10-26 11:43:07 --> Utf8 Class Initialized
DEBUG - 2013-10-26 11:43:07 --> UTF-8 Support Enabled
DEBUG - 2013-10-26 11:43:07 --> URI Class Initialized
DEBUG - 2013-10-26 11:43:07 --> Router Class Initialized
DEBUG - 2013-10-26 11:43:07 --> Output Class Initialized
DEBUG - 2013-10-26 11:43:07 --> Security Class Initialized
DEBUG - 2013-10-26 11:43:07 --> Input Class Initialized
DEBUG - 2013-10-26 11:43:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-26 11:43:07 --> Language Class Initialized
DEBUG - 2013-10-26 11:43:07 --> Loader Class Initialized
DEBUG - 2013-10-26 11:43:07 --> Helper loaded: form_helper
DEBUG - 2013-10-26 11:43:07 --> Helper loaded: url_helper
DEBUG - 2013-10-26 11:43:07 --> Helper loaded: html_helper
DEBUG - 2013-10-26 11:43:07 --> Database Driver Class Initialized
DEBUG - 2013-10-26 11:43:07 --> Session Class Initialized
DEBUG - 2013-10-26 11:43:07 --> Helper loaded: string_helper
DEBUG - 2013-10-26 11:43:07 --> Session routines successfully run
DEBUG - 2013-10-26 11:43:07 --> Form Validation Class Initialized
DEBUG - 2013-10-26 11:43:07 --> Controller Class Initialized
DEBUG - 2013-10-26 11:43:07 --> Model Class Initialized
DEBUG - 2013-10-26 11:43:07 --> Model Class Initialized
DEBUG - 2013-10-26 11:43:07 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-26 11:43:07 --> after session initialization................
ERROR - 2013-10-26 11:43:07 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-10-26 11:43:07 --> Config Class Initialized
DEBUG - 2013-10-26 11:43:07 --> Hooks Class Initialized
DEBUG - 2013-10-26 11:43:07 --> Utf8 Class Initialized
DEBUG - 2013-10-26 11:43:07 --> UTF-8 Support Enabled
DEBUG - 2013-10-26 11:43:07 --> URI Class Initialized
DEBUG - 2013-10-26 11:43:07 --> Router Class Initialized
ERROR - 2013-10-26 11:43:07 --> 404 Page Not Found --> css
DEBUG - 2013-10-26 11:43:10 --> Config Class Initialized
DEBUG - 2013-10-26 11:43:10 --> Hooks Class Initialized
DEBUG - 2013-10-26 11:43:10 --> Utf8 Class Initialized
DEBUG - 2013-10-26 11:43:10 --> UTF-8 Support Enabled
DEBUG - 2013-10-26 11:43:10 --> URI Class Initialized
DEBUG - 2013-10-26 11:43:10 --> Router Class Initialized
DEBUG - 2013-10-26 11:43:10 --> Output Class Initialized
DEBUG - 2013-10-26 11:43:10 --> Security Class Initialized
DEBUG - 2013-10-26 11:43:10 --> Input Class Initialized
DEBUG - 2013-10-26 11:43:10 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-26 11:43:10 --> Language Class Initialized
DEBUG - 2013-10-26 11:43:10 --> Loader Class Initialized
DEBUG - 2013-10-26 11:43:10 --> Helper loaded: form_helper
DEBUG - 2013-10-26 11:43:10 --> Helper loaded: url_helper
DEBUG - 2013-10-26 11:43:10 --> Helper loaded: html_helper
DEBUG - 2013-10-26 11:43:10 --> Database Driver Class Initialized
DEBUG - 2013-10-26 11:43:10 --> Session Class Initialized
DEBUG - 2013-10-26 11:43:10 --> Helper loaded: string_helper
DEBUG - 2013-10-26 11:43:10 --> Session routines successfully run
DEBUG - 2013-10-26 11:43:10 --> Form Validation Class Initialized
DEBUG - 2013-10-26 11:43:10 --> Controller Class Initialized
DEBUG - 2013-10-26 11:43:10 --> Model Class Initialized
DEBUG - 2013-10-26 11:43:10 --> Model Class Initialized
DEBUG - 2013-10-26 11:43:10 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-26 11:43:10 --> after session initialization................
INFO  - 2013-10-26 11:43:10 --> The forum id is 1
INFO  - 2013-10-26 11:43:10 --> inside retrieving pharmacy beyond id 
DEBUG - 2013-10-26 11:43:10 --> DB Transaction Failure
ERROR - 2013-10-26 11:43:10 --> Query error: Unknown column '"true"' in 'field list'
DEBUG - 2013-10-26 11:43:10 --> Language file loaded: language/english/db_lang.php
DEBUG - 2013-10-26 11:43:22 --> Config Class Initialized
DEBUG - 2013-10-26 11:43:22 --> Hooks Class Initialized
DEBUG - 2013-10-26 11:43:22 --> Utf8 Class Initialized
DEBUG - 2013-10-26 11:43:22 --> UTF-8 Support Enabled
DEBUG - 2013-10-26 11:43:22 --> URI Class Initialized
DEBUG - 2013-10-26 11:43:22 --> Router Class Initialized
DEBUG - 2013-10-26 11:43:22 --> Output Class Initialized
DEBUG - 2013-10-26 11:43:22 --> Security Class Initialized
DEBUG - 2013-10-26 11:43:22 --> Input Class Initialized
DEBUG - 2013-10-26 11:43:22 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-26 11:43:22 --> Language Class Initialized
DEBUG - 2013-10-26 11:43:22 --> Loader Class Initialized
DEBUG - 2013-10-26 11:43:22 --> Helper loaded: form_helper
DEBUG - 2013-10-26 11:43:22 --> Helper loaded: url_helper
DEBUG - 2013-10-26 11:43:22 --> Helper loaded: html_helper
DEBUG - 2013-10-26 11:43:22 --> Database Driver Class Initialized
DEBUG - 2013-10-26 11:43:22 --> Session Class Initialized
DEBUG - 2013-10-26 11:43:22 --> Helper loaded: string_helper
DEBUG - 2013-10-26 11:43:22 --> Session routines successfully run
DEBUG - 2013-10-26 11:43:22 --> Form Validation Class Initialized
DEBUG - 2013-10-26 11:43:22 --> Controller Class Initialized
DEBUG - 2013-10-26 11:43:22 --> Model Class Initialized
DEBUG - 2013-10-26 11:43:22 --> Model Class Initialized
DEBUG - 2013-10-26 11:43:22 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-26 11:43:22 --> after session initialization................
INFO  - 2013-10-26 11:43:22 --> inside retrieve most commented forum topic 
INFO  - 2013-10-26 11:43:22 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count`
INFO  - 2013-10-26 11:43:22 --> inside retrieve most commented forum topic 
INFO  - 2013-10-26 11:43:22 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`
FROM (`forum_topic` t)
WHERE `t`.`id_topicforum` =  '1'
INFO  - 2013-10-26 11:43:22 --> inside retrieving first 20 topics 
INFO  - 2013-10-26 11:43:22 --> SELECT `t`.`id_topicforum`, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count`
LIMIT 20
INFO  - 2013-10-26 11:43:22 --> inside retrieving pharmacy beyond id 
INFO  - 2013-10-26 11:43:22 --> SELECT `ff`.`id_forum` as id, `ff`.`name`, count(f.id_forum) as sub_forum
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` is null 
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`
INFO  - 2013-10-26 11:43:22 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-10-26 11:43:22 --> inside retrieving comments topic id and drug id is 1
INFO  - 2013-10-26 11:43:22 --> SELECT `tc`.`id_topiccomment`, `tc`.`comment`, `tc`.`timecreated`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-10-26 11:43:22 --> inside retrieving comments topic id 1
INFO  - 2013-10-26 11:43:22 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
INFO  - 2013-10-26 11:43:22 --> after forums has been clicked.................
INFO  - 2013-10-26 11:43:22 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-10-26 11:43:22 --> File loaded: ../pharmaray-application/views/forum.php
DEBUG - 2013-10-26 11:43:22 --> Final output sent to browser
DEBUG - 2013-10-26 11:43:22 --> Total execution time: 0.0890
DEBUG - 2013-10-26 11:43:22 --> Config Class Initialized
DEBUG - 2013-10-26 11:43:22 --> Hooks Class Initialized
DEBUG - 2013-10-26 11:43:22 --> Utf8 Class Initialized
DEBUG - 2013-10-26 11:43:22 --> UTF-8 Support Enabled
DEBUG - 2013-10-26 11:43:22 --> URI Class Initialized
DEBUG - 2013-10-26 11:43:22 --> Router Class Initialized
DEBUG - 2013-10-26 11:43:22 --> Output Class Initialized
DEBUG - 2013-10-26 11:43:22 --> Security Class Initialized
DEBUG - 2013-10-26 11:43:22 --> Input Class Initialized
DEBUG - 2013-10-26 11:43:22 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-26 11:43:22 --> Language Class Initialized
DEBUG - 2013-10-26 11:43:22 --> Loader Class Initialized
DEBUG - 2013-10-26 11:43:22 --> Helper loaded: form_helper
DEBUG - 2013-10-26 11:43:22 --> Helper loaded: url_helper
DEBUG - 2013-10-26 11:43:22 --> Helper loaded: html_helper
DEBUG - 2013-10-26 11:43:22 --> Database Driver Class Initialized
DEBUG - 2013-10-26 11:43:22 --> Session Class Initialized
DEBUG - 2013-10-26 11:43:22 --> Helper loaded: string_helper
DEBUG - 2013-10-26 11:43:22 --> Session routines successfully run
DEBUG - 2013-10-26 11:43:22 --> Form Validation Class Initialized
DEBUG - 2013-10-26 11:43:22 --> Controller Class Initialized
DEBUG - 2013-10-26 11:43:22 --> Model Class Initialized
DEBUG - 2013-10-26 11:43:22 --> Model Class Initialized
DEBUG - 2013-10-26 11:43:22 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-26 11:43:22 --> after session initialization................
ERROR - 2013-10-26 11:43:22 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-10-26 11:43:22 --> Config Class Initialized
DEBUG - 2013-10-26 11:43:22 --> Hooks Class Initialized
DEBUG - 2013-10-26 11:43:22 --> Utf8 Class Initialized
DEBUG - 2013-10-26 11:43:22 --> UTF-8 Support Enabled
DEBUG - 2013-10-26 11:43:22 --> URI Class Initialized
DEBUG - 2013-10-26 11:43:22 --> Router Class Initialized
ERROR - 2013-10-26 11:43:22 --> 404 Page Not Found --> css
DEBUG - 2013-10-26 11:43:23 --> Config Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Hooks Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Utf8 Class Initialized
DEBUG - 2013-10-26 11:43:23 --> UTF-8 Support Enabled
DEBUG - 2013-10-26 11:43:23 --> URI Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Router Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Output Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Security Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Input Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-26 11:43:23 --> Language Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Loader Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Helper loaded: form_helper
DEBUG - 2013-10-26 11:43:23 --> Helper loaded: url_helper
DEBUG - 2013-10-26 11:43:23 --> Helper loaded: html_helper
DEBUG - 2013-10-26 11:43:23 --> Database Driver Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Session Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Helper loaded: string_helper
DEBUG - 2013-10-26 11:43:23 --> Session routines successfully run
DEBUG - 2013-10-26 11:43:23 --> Form Validation Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Controller Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Model Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Model Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-26 11:43:23 --> after session initialization................
INFO  - 2013-10-26 11:43:23 --> inside retrieve most commented forum topic 
INFO  - 2013-10-26 11:43:23 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count`
INFO  - 2013-10-26 11:43:23 --> inside retrieve most commented forum topic 
INFO  - 2013-10-26 11:43:23 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`
FROM (`forum_topic` t)
WHERE `t`.`id_topicforum` =  '1'
INFO  - 2013-10-26 11:43:23 --> inside retrieving first 20 topics 
INFO  - 2013-10-26 11:43:23 --> SELECT `t`.`id_topicforum`, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count`
LIMIT 20
INFO  - 2013-10-26 11:43:23 --> inside retrieving pharmacy beyond id 
INFO  - 2013-10-26 11:43:23 --> SELECT `ff`.`id_forum` as id, `ff`.`name`, count(f.id_forum) as sub_forum
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` is null 
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`
INFO  - 2013-10-26 11:43:23 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-10-26 11:43:23 --> inside retrieving comments topic id and drug id is 1
INFO  - 2013-10-26 11:43:23 --> SELECT `tc`.`id_topiccomment`, `tc`.`comment`, `tc`.`timecreated`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-10-26 11:43:23 --> inside retrieving comments topic id 1
INFO  - 2013-10-26 11:43:23 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
INFO  - 2013-10-26 11:43:23 --> after forums has been clicked.................
INFO  - 2013-10-26 11:43:23 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-10-26 11:43:23 --> File loaded: ../pharmaray-application/views/forum.php
DEBUG - 2013-10-26 11:43:23 --> Final output sent to browser
DEBUG - 2013-10-26 11:43:23 --> Total execution time: 0.0800
DEBUG - 2013-10-26 11:43:23 --> Config Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Hooks Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Utf8 Class Initialized
DEBUG - 2013-10-26 11:43:23 --> UTF-8 Support Enabled
DEBUG - 2013-10-26 11:43:23 --> URI Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Router Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Output Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Security Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Input Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-26 11:43:23 --> Language Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Loader Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Helper loaded: form_helper
DEBUG - 2013-10-26 11:43:23 --> Helper loaded: url_helper
DEBUG - 2013-10-26 11:43:23 --> Helper loaded: html_helper
DEBUG - 2013-10-26 11:43:23 --> Database Driver Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Session Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Helper loaded: string_helper
DEBUG - 2013-10-26 11:43:23 --> Session routines successfully run
DEBUG - 2013-10-26 11:43:23 --> Form Validation Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Controller Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Model Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Model Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-26 11:43:23 --> after session initialization................
ERROR - 2013-10-26 11:43:23 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-10-26 11:43:23 --> Config Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Hooks Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Utf8 Class Initialized
DEBUG - 2013-10-26 11:43:23 --> UTF-8 Support Enabled
DEBUG - 2013-10-26 11:43:23 --> URI Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Router Class Initialized
ERROR - 2013-10-26 11:43:23 --> 404 Page Not Found --> css
DEBUG - 2013-10-26 11:43:23 --> Config Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Hooks Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Utf8 Class Initialized
DEBUG - 2013-10-26 11:43:23 --> UTF-8 Support Enabled
DEBUG - 2013-10-26 11:43:23 --> URI Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Router Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Output Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Security Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Input Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-26 11:43:23 --> Language Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Loader Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Helper loaded: form_helper
DEBUG - 2013-10-26 11:43:23 --> Helper loaded: url_helper
DEBUG - 2013-10-26 11:43:23 --> Helper loaded: html_helper
DEBUG - 2013-10-26 11:43:23 --> Database Driver Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Session Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Helper loaded: string_helper
DEBUG - 2013-10-26 11:43:23 --> Session routines successfully run
DEBUG - 2013-10-26 11:43:23 --> Form Validation Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Controller Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Model Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Model Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-26 11:43:23 --> after session initialization................
INFO  - 2013-10-26 11:43:23 --> inside retrieve most commented forum topic 
INFO  - 2013-10-26 11:43:23 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count`
INFO  - 2013-10-26 11:43:23 --> inside retrieve most commented forum topic 
INFO  - 2013-10-26 11:43:23 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`
FROM (`forum_topic` t)
WHERE `t`.`id_topicforum` =  '1'
INFO  - 2013-10-26 11:43:23 --> inside retrieving first 20 topics 
INFO  - 2013-10-26 11:43:23 --> SELECT `t`.`id_topicforum`, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count`
LIMIT 20
INFO  - 2013-10-26 11:43:23 --> inside retrieving pharmacy beyond id 
INFO  - 2013-10-26 11:43:23 --> SELECT `ff`.`id_forum` as id, `ff`.`name`, count(f.id_forum) as sub_forum
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` is null 
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`
INFO  - 2013-10-26 11:43:23 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-10-26 11:43:23 --> inside retrieving comments topic id and drug id is 1
INFO  - 2013-10-26 11:43:23 --> SELECT `tc`.`id_topiccomment`, `tc`.`comment`, `tc`.`timecreated`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-10-26 11:43:23 --> inside retrieving comments topic id 1
INFO  - 2013-10-26 11:43:23 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
INFO  - 2013-10-26 11:43:23 --> after forums has been clicked.................
INFO  - 2013-10-26 11:43:23 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-10-26 11:43:23 --> File loaded: ../pharmaray-application/views/forum.php
DEBUG - 2013-10-26 11:43:23 --> Final output sent to browser
DEBUG - 2013-10-26 11:43:23 --> Total execution time: 0.0860
DEBUG - 2013-10-26 11:43:23 --> Config Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Hooks Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Utf8 Class Initialized
DEBUG - 2013-10-26 11:43:23 --> UTF-8 Support Enabled
DEBUG - 2013-10-26 11:43:23 --> URI Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Router Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Output Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Security Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Input Class Initialized
DEBUG - 2013-10-26 11:43:23 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-26 11:43:23 --> Language Class Initialized
DEBUG - 2013-10-26 11:43:24 --> Loader Class Initialized
DEBUG - 2013-10-26 11:43:24 --> Helper loaded: form_helper
DEBUG - 2013-10-26 11:43:24 --> Helper loaded: url_helper
DEBUG - 2013-10-26 11:43:24 --> Helper loaded: html_helper
DEBUG - 2013-10-26 11:43:24 --> Database Driver Class Initialized
DEBUG - 2013-10-26 11:43:24 --> Session Class Initialized
DEBUG - 2013-10-26 11:43:24 --> Helper loaded: string_helper
DEBUG - 2013-10-26 11:43:24 --> Session routines successfully run
DEBUG - 2013-10-26 11:43:24 --> Form Validation Class Initialized
DEBUG - 2013-10-26 11:43:24 --> Controller Class Initialized
DEBUG - 2013-10-26 11:43:24 --> Model Class Initialized
DEBUG - 2013-10-26 11:43:24 --> Model Class Initialized
DEBUG - 2013-10-26 11:43:24 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-26 11:43:24 --> after session initialization................
ERROR - 2013-10-26 11:43:24 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-10-26 11:43:24 --> Config Class Initialized
DEBUG - 2013-10-26 11:43:24 --> Hooks Class Initialized
DEBUG - 2013-10-26 11:43:24 --> Utf8 Class Initialized
DEBUG - 2013-10-26 11:43:24 --> UTF-8 Support Enabled
DEBUG - 2013-10-26 11:43:24 --> URI Class Initialized
DEBUG - 2013-10-26 11:43:24 --> Router Class Initialized
ERROR - 2013-10-26 11:43:24 --> 404 Page Not Found --> css
DEBUG - 2013-10-26 11:43:26 --> Config Class Initialized
DEBUG - 2013-10-26 11:43:26 --> Hooks Class Initialized
DEBUG - 2013-10-26 11:43:26 --> Utf8 Class Initialized
DEBUG - 2013-10-26 11:43:26 --> UTF-8 Support Enabled
DEBUG - 2013-10-26 11:43:26 --> URI Class Initialized
DEBUG - 2013-10-26 11:43:26 --> Router Class Initialized
DEBUG - 2013-10-26 11:43:26 --> Output Class Initialized
DEBUG - 2013-10-26 11:43:26 --> Security Class Initialized
DEBUG - 2013-10-26 11:43:26 --> Input Class Initialized
DEBUG - 2013-10-26 11:43:26 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-26 11:43:26 --> Language Class Initialized
DEBUG - 2013-10-26 11:43:26 --> Loader Class Initialized
DEBUG - 2013-10-26 11:43:26 --> Helper loaded: form_helper
DEBUG - 2013-10-26 11:43:26 --> Helper loaded: url_helper
DEBUG - 2013-10-26 11:43:26 --> Helper loaded: html_helper
DEBUG - 2013-10-26 11:43:26 --> Database Driver Class Initialized
DEBUG - 2013-10-26 11:43:26 --> Session Class Initialized
DEBUG - 2013-10-26 11:43:26 --> Helper loaded: string_helper
DEBUG - 2013-10-26 11:43:26 --> Session routines successfully run
DEBUG - 2013-10-26 11:43:26 --> Form Validation Class Initialized
DEBUG - 2013-10-26 11:43:26 --> Controller Class Initialized
DEBUG - 2013-10-26 11:43:26 --> Model Class Initialized
DEBUG - 2013-10-26 11:43:26 --> Model Class Initialized
DEBUG - 2013-10-26 11:43:26 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-26 11:43:26 --> after session initialization................
INFO  - 2013-10-26 11:43:26 --> The forum id is 1
INFO  - 2013-10-26 11:43:26 --> inside retrieving pharmacy beyond id 
DEBUG - 2013-10-26 11:43:26 --> DB Transaction Failure
ERROR - 2013-10-26 11:43:26 --> Query error: Unknown column '"true"' in 'field list'
DEBUG - 2013-10-26 11:43:26 --> Language file loaded: language/english/db_lang.php
DEBUG - 2013-10-26 11:44:56 --> Config Class Initialized
DEBUG - 2013-10-26 11:44:56 --> Hooks Class Initialized
DEBUG - 2013-10-26 11:44:56 --> Utf8 Class Initialized
DEBUG - 2013-10-26 11:44:56 --> UTF-8 Support Enabled
DEBUG - 2013-10-26 11:44:56 --> URI Class Initialized
DEBUG - 2013-10-26 11:44:56 --> Router Class Initialized
DEBUG - 2013-10-26 11:44:56 --> Output Class Initialized
DEBUG - 2013-10-26 11:44:56 --> Security Class Initialized
DEBUG - 2013-10-26 11:44:56 --> Input Class Initialized
DEBUG - 2013-10-26 11:44:56 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-26 11:44:56 --> Language Class Initialized
DEBUG - 2013-10-26 11:44:56 --> Loader Class Initialized
DEBUG - 2013-10-26 11:44:56 --> Helper loaded: form_helper
DEBUG - 2013-10-26 11:44:56 --> Helper loaded: url_helper
DEBUG - 2013-10-26 11:44:56 --> Helper loaded: html_helper
DEBUG - 2013-10-26 11:44:56 --> Database Driver Class Initialized
DEBUG - 2013-10-26 11:44:57 --> Session Class Initialized
DEBUG - 2013-10-26 11:44:57 --> Helper loaded: string_helper
DEBUG - 2013-10-26 11:44:57 --> Session routines successfully run
DEBUG - 2013-10-26 11:44:57 --> Form Validation Class Initialized
DEBUG - 2013-10-26 11:44:57 --> Controller Class Initialized
DEBUG - 2013-10-26 11:44:57 --> Model Class Initialized
DEBUG - 2013-10-26 11:44:57 --> Model Class Initialized
DEBUG - 2013-10-26 11:44:57 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-26 11:44:57 --> after session initialization................
INFO  - 2013-10-26 11:44:57 --> inside retrieve most commented forum topic 
INFO  - 2013-10-26 11:44:57 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count`
INFO  - 2013-10-26 11:44:57 --> inside retrieve most commented forum topic 
INFO  - 2013-10-26 11:44:57 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`
FROM (`forum_topic` t)
WHERE `t`.`id_topicforum` =  '1'
INFO  - 2013-10-26 11:44:57 --> inside retrieving first 20 topics 
INFO  - 2013-10-26 11:44:57 --> SELECT `t`.`id_topicforum`, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count`
LIMIT 20
INFO  - 2013-10-26 11:44:57 --> inside retrieving pharmacy beyond id 
INFO  - 2013-10-26 11:44:57 --> SELECT `ff`.`id_forum` as id, `ff`.`name`, count(f.id_forum) as sub_forum
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` is null 
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`
INFO  - 2013-10-26 11:44:57 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-10-26 11:44:57 --> inside retrieving comments topic id and drug id is 1
INFO  - 2013-10-26 11:44:57 --> SELECT `tc`.`id_topiccomment`, `tc`.`comment`, `tc`.`timecreated`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-10-26 11:44:57 --> inside retrieving comments topic id 1
INFO  - 2013-10-26 11:44:57 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
INFO  - 2013-10-26 11:44:57 --> after forums has been clicked.................
INFO  - 2013-10-26 11:44:57 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-10-26 11:44:57 --> File loaded: ../pharmaray-application/views/forum.php
DEBUG - 2013-10-26 11:44:57 --> Final output sent to browser
DEBUG - 2013-10-26 11:44:57 --> Total execution time: 1.0871
DEBUG - 2013-10-26 11:44:57 --> Config Class Initialized
DEBUG - 2013-10-26 11:44:57 --> Hooks Class Initialized
DEBUG - 2013-10-26 11:44:57 --> Utf8 Class Initialized
DEBUG - 2013-10-26 11:44:57 --> UTF-8 Support Enabled
DEBUG - 2013-10-26 11:44:57 --> URI Class Initialized
DEBUG - 2013-10-26 11:44:57 --> Router Class Initialized
DEBUG - 2013-10-26 11:44:57 --> Output Class Initialized
DEBUG - 2013-10-26 11:44:57 --> Security Class Initialized
DEBUG - 2013-10-26 11:44:57 --> Input Class Initialized
DEBUG - 2013-10-26 11:44:57 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-26 11:44:57 --> Language Class Initialized
DEBUG - 2013-10-26 11:44:57 --> Loader Class Initialized
DEBUG - 2013-10-26 11:44:57 --> Helper loaded: form_helper
DEBUG - 2013-10-26 11:44:57 --> Helper loaded: url_helper
DEBUG - 2013-10-26 11:44:57 --> Helper loaded: html_helper
DEBUG - 2013-10-26 11:44:57 --> Database Driver Class Initialized
DEBUG - 2013-10-26 11:44:57 --> Session Class Initialized
DEBUG - 2013-10-26 11:44:57 --> Helper loaded: string_helper
DEBUG - 2013-10-26 11:44:57 --> Session routines successfully run
DEBUG - 2013-10-26 11:44:57 --> Form Validation Class Initialized
DEBUG - 2013-10-26 11:44:57 --> Controller Class Initialized
DEBUG - 2013-10-26 11:44:57 --> Model Class Initialized
DEBUG - 2013-10-26 11:44:57 --> Model Class Initialized
DEBUG - 2013-10-26 11:44:57 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-26 11:44:57 --> after session initialization................
ERROR - 2013-10-26 11:44:57 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-10-26 11:44:57 --> Config Class Initialized
DEBUG - 2013-10-26 11:44:57 --> Hooks Class Initialized
DEBUG - 2013-10-26 11:44:57 --> Utf8 Class Initialized
DEBUG - 2013-10-26 11:44:57 --> UTF-8 Support Enabled
DEBUG - 2013-10-26 11:44:57 --> URI Class Initialized
DEBUG - 2013-10-26 11:44:57 --> Router Class Initialized
ERROR - 2013-10-26 11:44:57 --> 404 Page Not Found --> css
DEBUG - 2013-10-26 11:45:01 --> Config Class Initialized
DEBUG - 2013-10-26 11:45:01 --> Hooks Class Initialized
DEBUG - 2013-10-26 11:45:01 --> Utf8 Class Initialized
DEBUG - 2013-10-26 11:45:01 --> UTF-8 Support Enabled
DEBUG - 2013-10-26 11:45:01 --> URI Class Initialized
DEBUG - 2013-10-26 11:45:01 --> Router Class Initialized
DEBUG - 2013-10-26 11:45:01 --> Output Class Initialized
DEBUG - 2013-10-26 11:45:01 --> Security Class Initialized
DEBUG - 2013-10-26 11:45:01 --> Input Class Initialized
DEBUG - 2013-10-26 11:45:01 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-26 11:45:01 --> Language Class Initialized
DEBUG - 2013-10-26 11:45:01 --> Loader Class Initialized
DEBUG - 2013-10-26 11:45:01 --> Helper loaded: form_helper
DEBUG - 2013-10-26 11:45:01 --> Helper loaded: url_helper
DEBUG - 2013-10-26 11:45:01 --> Helper loaded: html_helper
DEBUG - 2013-10-26 11:45:01 --> Database Driver Class Initialized
DEBUG - 2013-10-26 11:45:01 --> Session Class Initialized
DEBUG - 2013-10-26 11:45:01 --> Helper loaded: string_helper
DEBUG - 2013-10-26 11:45:01 --> Session routines successfully run
DEBUG - 2013-10-26 11:45:01 --> Form Validation Class Initialized
DEBUG - 2013-10-26 11:45:01 --> Controller Class Initialized
DEBUG - 2013-10-26 11:45:01 --> Model Class Initialized
DEBUG - 2013-10-26 11:45:01 --> Model Class Initialized
DEBUG - 2013-10-26 11:45:01 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-26 11:45:01 --> after session initialization................
INFO  - 2013-10-26 11:45:01 --> The forum id is 1
INFO  - 2013-10-26 11:45:01 --> inside retrieving pharmacy beyond id 
INFO  - 2013-10-26 11:45:01 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 1
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, ft.name as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '1'
ORDER BY `ft`.`name`)
INFO  - 2013-10-26 11:45:01 --> (SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 1
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, ft.name as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '1'
ORDER BY `ft`.`name`)
DEBUG - 2013-10-26 11:45:01 --> Final output sent to browser
DEBUG - 2013-10-26 11:45:01 --> Total execution time: 0.0610
DEBUG - 2013-10-26 11:45:17 --> Config Class Initialized
DEBUG - 2013-10-26 11:45:17 --> Hooks Class Initialized
DEBUG - 2013-10-26 11:45:17 --> Utf8 Class Initialized
DEBUG - 2013-10-26 11:45:17 --> UTF-8 Support Enabled
DEBUG - 2013-10-26 11:45:17 --> URI Class Initialized
DEBUG - 2013-10-26 11:45:17 --> Router Class Initialized
DEBUG - 2013-10-26 11:45:17 --> Output Class Initialized
DEBUG - 2013-10-26 11:45:17 --> Security Class Initialized
DEBUG - 2013-10-26 11:45:17 --> Input Class Initialized
DEBUG - 2013-10-26 11:45:17 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-26 11:45:17 --> Language Class Initialized
DEBUG - 2013-10-26 11:45:17 --> Loader Class Initialized
DEBUG - 2013-10-26 11:45:17 --> Helper loaded: form_helper
DEBUG - 2013-10-26 11:45:17 --> Helper loaded: url_helper
DEBUG - 2013-10-26 11:45:17 --> Helper loaded: html_helper
DEBUG - 2013-10-26 11:45:17 --> Database Driver Class Initialized
DEBUG - 2013-10-26 11:45:17 --> Session Class Initialized
DEBUG - 2013-10-26 11:45:17 --> Helper loaded: string_helper
DEBUG - 2013-10-26 11:45:17 --> Session routines successfully run
DEBUG - 2013-10-26 11:45:17 --> Form Validation Class Initialized
DEBUG - 2013-10-26 11:45:17 --> Controller Class Initialized
DEBUG - 2013-10-26 11:45:17 --> Model Class Initialized
DEBUG - 2013-10-26 11:45:17 --> Model Class Initialized
DEBUG - 2013-10-26 11:45:17 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-26 11:45:17 --> after session initialization................
INFO  - 2013-10-26 11:45:17 --> The forum id is 1
INFO  - 2013-10-26 11:45:17 --> inside retrieving pharmacy beyond id 
INFO  - 2013-10-26 11:45:17 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 1
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, ft.name as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '1'
ORDER BY `ft`.`name`)
INFO  - 2013-10-26 11:45:17 --> (SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 1
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, ft.name as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '1'
ORDER BY `ft`.`name`)
DEBUG - 2013-10-26 11:45:17 --> Final output sent to browser
DEBUG - 2013-10-26 11:45:17 --> Total execution time: 0.0590
DEBUG - 2013-10-26 11:46:05 --> Config Class Initialized
DEBUG - 2013-10-26 11:46:05 --> Hooks Class Initialized
DEBUG - 2013-10-26 11:46:05 --> Utf8 Class Initialized
DEBUG - 2013-10-26 11:46:05 --> UTF-8 Support Enabled
DEBUG - 2013-10-26 11:46:05 --> URI Class Initialized
DEBUG - 2013-10-26 11:46:05 --> Router Class Initialized
DEBUG - 2013-10-26 11:46:05 --> Output Class Initialized
DEBUG - 2013-10-26 11:46:05 --> Security Class Initialized
DEBUG - 2013-10-26 11:46:05 --> Input Class Initialized
DEBUG - 2013-10-26 11:46:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-10-26 11:46:05 --> Language Class Initialized
DEBUG - 2013-10-26 11:46:05 --> Loader Class Initialized
DEBUG - 2013-10-26 11:46:05 --> Helper loaded: form_helper
DEBUG - 2013-10-26 11:46:05 --> Helper loaded: url_helper
DEBUG - 2013-10-26 11:46:05 --> Helper loaded: html_helper
DEBUG - 2013-10-26 11:46:05 --> Database Driver Class Initialized
DEBUG - 2013-10-26 11:46:05 --> Session Class Initialized
DEBUG - 2013-10-26 11:46:05 --> Helper loaded: string_helper
DEBUG - 2013-10-26 11:46:05 --> Session routines successfully run
DEBUG - 2013-10-26 11:46:05 --> Form Validation Class Initialized
DEBUG - 2013-10-26 11:46:05 --> Controller Class Initialized
DEBUG - 2013-10-26 11:46:05 --> Model Class Initialized
DEBUG - 2013-10-26 11:46:05 --> Model Class Initialized
DEBUG - 2013-10-26 11:46:05 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-10-26 11:46:05 --> after session initialization................
INFO  - 2013-10-26 11:46:05 --> The forum id is 1
INFO  - 2013-10-26 11:46:05 --> inside retrieving pharmacy beyond id 
INFO  - 2013-10-26 11:46:05 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 1
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, ft.name as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '1'
ORDER BY `ft`.`name`)
INFO  - 2013-10-26 11:46:05 --> (SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 1
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, ft.name as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '1'
ORDER BY `ft`.`name`)
DEBUG - 2013-10-26 11:46:05 --> Final output sent to browser
DEBUG - 2013-10-26 11:46:05 --> Total execution time: 0.0640
