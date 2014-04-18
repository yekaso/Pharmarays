<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2013-11-14 00:00:32 --> Config Class Initialized
DEBUG - 2013-11-14 00:00:32 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:00:32 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:00:32 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:00:32 --> URI Class Initialized
DEBUG - 2013-11-14 00:00:32 --> Router Class Initialized
DEBUG - 2013-11-14 00:00:32 --> Output Class Initialized
DEBUG - 2013-11-14 00:00:32 --> Security Class Initialized
DEBUG - 2013-11-14 00:00:32 --> Input Class Initialized
DEBUG - 2013-11-14 00:00:32 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:00:32 --> Language Class Initialized
DEBUG - 2013-11-14 00:00:32 --> Loader Class Initialized
DEBUG - 2013-11-14 00:00:32 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:00:32 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:00:32 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:00:32 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:00:32 --> Session Class Initialized
DEBUG - 2013-11-14 00:00:32 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:00:32 --> Session routines successfully run
DEBUG - 2013-11-14 00:00:32 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:00:32 --> Controller Class Initialized
DEBUG - 2013-11-14 00:00:32 --> Model Class Initialized
DEBUG - 2013-11-14 00:00:32 --> Model Class Initialized
DEBUG - 2013-11-14 00:00:32 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:00:32 --> after session initialization................
INFO  - 2013-11-14 00:00:32 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 00:00:32 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 00:00:32 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 00:00:32 --> inside retrieving locations 
INFO  - 2013-11-14 00:00:32 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 00:00:32 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 00:00:32 --> Final output sent to browser
DEBUG - 2013-11-14 00:00:32 --> Total execution time: 0.0600
DEBUG - 2013-11-14 00:00:35 --> Config Class Initialized
DEBUG - 2013-11-14 00:00:35 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:00:35 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:00:35 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:00:35 --> URI Class Initialized
DEBUG - 2013-11-14 00:00:35 --> Router Class Initialized
DEBUG - 2013-11-14 00:00:35 --> Output Class Initialized
DEBUG - 2013-11-14 00:00:35 --> Security Class Initialized
DEBUG - 2013-11-14 00:00:35 --> Input Class Initialized
DEBUG - 2013-11-14 00:00:35 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:00:35 --> Language Class Initialized
DEBUG - 2013-11-14 00:00:35 --> Loader Class Initialized
DEBUG - 2013-11-14 00:00:35 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:00:35 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:00:35 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:00:35 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:00:35 --> Session Class Initialized
DEBUG - 2013-11-14 00:00:35 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:00:35 --> Session routines successfully run
DEBUG - 2013-11-14 00:00:35 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:00:35 --> Controller Class Initialized
DEBUG - 2013-11-14 00:00:35 --> Model Class Initialized
DEBUG - 2013-11-14 00:00:35 --> Model Class Initialized
DEBUG - 2013-11-14 00:00:35 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:00:35 --> after session initialization................
INFO  - 2013-11-14 00:00:35 --> inside retrieving pharmacy by location id 2
INFO  - 2013-11-14 00:00:35 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '2'
LIMIT 25
DEBUG - 2013-11-14 00:00:35 --> Final output sent to browser
DEBUG - 2013-11-14 00:00:35 --> Total execution time: 0.0480
DEBUG - 2013-11-14 00:01:45 --> Config Class Initialized
DEBUG - 2013-11-14 00:01:45 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:01:45 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:01:45 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:01:45 --> URI Class Initialized
DEBUG - 2013-11-14 00:01:45 --> Router Class Initialized
DEBUG - 2013-11-14 00:01:45 --> Output Class Initialized
DEBUG - 2013-11-14 00:01:45 --> Security Class Initialized
DEBUG - 2013-11-14 00:01:45 --> Input Class Initialized
DEBUG - 2013-11-14 00:01:45 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:01:45 --> Language Class Initialized
DEBUG - 2013-11-14 00:01:45 --> Loader Class Initialized
DEBUG - 2013-11-14 00:01:45 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:01:45 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:01:45 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:01:45 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:01:45 --> Session Class Initialized
DEBUG - 2013-11-14 00:01:45 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:01:45 --> Session routines successfully run
DEBUG - 2013-11-14 00:01:45 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:01:45 --> Controller Class Initialized
DEBUG - 2013-11-14 00:01:45 --> Model Class Initialized
DEBUG - 2013-11-14 00:01:45 --> Model Class Initialized
DEBUG - 2013-11-14 00:01:45 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:01:45 --> after session initialization................
INFO  - 2013-11-14 00:01:45 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 00:01:45 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 00:01:45 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 00:01:45 --> inside retrieving locations 
INFO  - 2013-11-14 00:01:45 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 00:01:45 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 00:01:45 --> Final output sent to browser
DEBUG - 2013-11-14 00:01:45 --> Total execution time: 0.0720
DEBUG - 2013-11-14 00:01:48 --> Config Class Initialized
DEBUG - 2013-11-14 00:01:48 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:01:48 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:01:48 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:01:48 --> URI Class Initialized
DEBUG - 2013-11-14 00:01:48 --> Router Class Initialized
DEBUG - 2013-11-14 00:01:48 --> Output Class Initialized
DEBUG - 2013-11-14 00:01:48 --> Security Class Initialized
DEBUG - 2013-11-14 00:01:48 --> Input Class Initialized
DEBUG - 2013-11-14 00:01:48 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:01:48 --> Language Class Initialized
DEBUG - 2013-11-14 00:01:48 --> Loader Class Initialized
DEBUG - 2013-11-14 00:01:48 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:01:48 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:01:48 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:01:48 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:01:48 --> Session Class Initialized
DEBUG - 2013-11-14 00:01:48 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:01:48 --> Session routines successfully run
DEBUG - 2013-11-14 00:01:48 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:01:48 --> Controller Class Initialized
DEBUG - 2013-11-14 00:01:48 --> Model Class Initialized
DEBUG - 2013-11-14 00:01:48 --> Model Class Initialized
DEBUG - 2013-11-14 00:01:48 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:01:48 --> after session initialization................
INFO  - 2013-11-14 00:01:48 --> inside retrieving pharmacy by location id 1
INFO  - 2013-11-14 00:01:48 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '1'
LIMIT 25
DEBUG - 2013-11-14 00:01:48 --> Final output sent to browser
DEBUG - 2013-11-14 00:01:48 --> Total execution time: 0.0590
DEBUG - 2013-11-14 00:01:53 --> Config Class Initialized
DEBUG - 2013-11-14 00:01:53 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:01:53 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:01:53 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:01:53 --> URI Class Initialized
DEBUG - 2013-11-14 00:01:53 --> Router Class Initialized
DEBUG - 2013-11-14 00:01:53 --> Output Class Initialized
DEBUG - 2013-11-14 00:01:53 --> Security Class Initialized
DEBUG - 2013-11-14 00:01:53 --> Input Class Initialized
DEBUG - 2013-11-14 00:01:53 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:01:53 --> Language Class Initialized
DEBUG - 2013-11-14 00:01:53 --> Loader Class Initialized
DEBUG - 2013-11-14 00:01:53 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:01:53 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:01:53 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:01:53 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:01:53 --> Session Class Initialized
DEBUG - 2013-11-14 00:01:53 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:01:53 --> Session routines successfully run
DEBUG - 2013-11-14 00:01:53 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:01:53 --> Controller Class Initialized
DEBUG - 2013-11-14 00:01:53 --> Model Class Initialized
DEBUG - 2013-11-14 00:01:53 --> Model Class Initialized
DEBUG - 2013-11-14 00:01:53 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:01:53 --> after session initialization................
INFO  - 2013-11-14 00:01:53 --> article id is 4
DEBUG - 2013-11-14 00:01:53 --> Final output sent to browser
DEBUG - 2013-11-14 00:01:53 --> Total execution time: 0.0490
DEBUG - 2013-11-14 00:03:02 --> Config Class Initialized
DEBUG - 2013-11-14 00:03:02 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:03:02 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:03:02 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:03:02 --> URI Class Initialized
DEBUG - 2013-11-14 00:03:02 --> Router Class Initialized
DEBUG - 2013-11-14 00:03:02 --> Output Class Initialized
DEBUG - 2013-11-14 00:03:02 --> Security Class Initialized
DEBUG - 2013-11-14 00:03:02 --> Input Class Initialized
DEBUG - 2013-11-14 00:03:02 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:03:02 --> Language Class Initialized
DEBUG - 2013-11-14 00:03:02 --> Loader Class Initialized
DEBUG - 2013-11-14 00:03:02 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:03:02 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:03:02 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:03:02 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:03:02 --> Session Class Initialized
DEBUG - 2013-11-14 00:03:02 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:03:02 --> Session routines successfully run
DEBUG - 2013-11-14 00:03:02 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:03:02 --> Controller Class Initialized
DEBUG - 2013-11-14 00:03:02 --> Model Class Initialized
DEBUG - 2013-11-14 00:03:02 --> Model Class Initialized
DEBUG - 2013-11-14 00:03:02 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:03:02 --> after session initialization................
INFO  - 2013-11-14 00:03:02 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 00:03:02 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 00:03:02 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 00:03:02 --> inside retrieving locations 
INFO  - 2013-11-14 00:03:02 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 00:03:02 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 00:03:02 --> Final output sent to browser
DEBUG - 2013-11-14 00:03:02 --> Total execution time: 0.0550
DEBUG - 2013-11-14 00:03:23 --> Config Class Initialized
DEBUG - 2013-11-14 00:03:23 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:03:23 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:03:23 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:03:23 --> URI Class Initialized
DEBUG - 2013-11-14 00:03:23 --> Router Class Initialized
DEBUG - 2013-11-14 00:03:23 --> Output Class Initialized
DEBUG - 2013-11-14 00:03:23 --> Security Class Initialized
DEBUG - 2013-11-14 00:03:23 --> Input Class Initialized
DEBUG - 2013-11-14 00:03:23 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:03:23 --> Language Class Initialized
DEBUG - 2013-11-14 00:03:23 --> Loader Class Initialized
DEBUG - 2013-11-14 00:03:23 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:03:23 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:03:23 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:03:23 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:03:23 --> Session Class Initialized
DEBUG - 2013-11-14 00:03:23 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:03:23 --> Session routines successfully run
DEBUG - 2013-11-14 00:03:23 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:03:23 --> Controller Class Initialized
DEBUG - 2013-11-14 00:03:23 --> Model Class Initialized
DEBUG - 2013-11-14 00:03:23 --> Model Class Initialized
DEBUG - 2013-11-14 00:03:23 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:03:23 --> after session initialization................
INFO  - 2013-11-14 00:03:23 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 00:03:23 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 00:03:23 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 00:03:23 --> inside retrieving locations 
INFO  - 2013-11-14 00:03:23 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 00:03:23 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 00:03:23 --> Final output sent to browser
DEBUG - 2013-11-14 00:03:23 --> Total execution time: 0.0600
DEBUG - 2013-11-14 00:03:26 --> Config Class Initialized
DEBUG - 2013-11-14 00:03:26 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:03:26 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:03:26 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:03:26 --> URI Class Initialized
DEBUG - 2013-11-14 00:03:26 --> Router Class Initialized
DEBUG - 2013-11-14 00:03:26 --> Output Class Initialized
DEBUG - 2013-11-14 00:03:26 --> Security Class Initialized
DEBUG - 2013-11-14 00:03:26 --> Input Class Initialized
DEBUG - 2013-11-14 00:03:26 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:03:26 --> Language Class Initialized
DEBUG - 2013-11-14 00:03:26 --> Loader Class Initialized
DEBUG - 2013-11-14 00:03:26 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:03:26 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:03:26 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:03:26 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:03:26 --> Session Class Initialized
DEBUG - 2013-11-14 00:03:26 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:03:26 --> Session routines successfully run
DEBUG - 2013-11-14 00:03:26 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:03:26 --> Controller Class Initialized
DEBUG - 2013-11-14 00:03:26 --> Model Class Initialized
DEBUG - 2013-11-14 00:03:26 --> Model Class Initialized
DEBUG - 2013-11-14 00:03:26 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:03:26 --> after session initialization................
INFO  - 2013-11-14 00:03:26 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 00:03:26 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 00:03:26 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 00:03:26 --> inside retrieving locations 
INFO  - 2013-11-14 00:03:26 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 00:03:26 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 00:03:26 --> Final output sent to browser
DEBUG - 2013-11-14 00:03:26 --> Total execution time: 0.0580
DEBUG - 2013-11-14 00:03:53 --> Config Class Initialized
DEBUG - 2013-11-14 00:03:53 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:03:53 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:03:53 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:03:53 --> URI Class Initialized
DEBUG - 2013-11-14 00:03:53 --> Router Class Initialized
DEBUG - 2013-11-14 00:03:53 --> Output Class Initialized
DEBUG - 2013-11-14 00:03:53 --> Security Class Initialized
DEBUG - 2013-11-14 00:03:53 --> Input Class Initialized
DEBUG - 2013-11-14 00:03:53 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:03:53 --> Language Class Initialized
DEBUG - 2013-11-14 00:03:53 --> Loader Class Initialized
DEBUG - 2013-11-14 00:03:53 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:03:53 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:03:53 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:03:53 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:03:53 --> Session Class Initialized
DEBUG - 2013-11-14 00:03:53 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:03:53 --> Session routines successfully run
DEBUG - 2013-11-14 00:03:53 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:03:53 --> Controller Class Initialized
DEBUG - 2013-11-14 00:03:53 --> Model Class Initialized
DEBUG - 2013-11-14 00:03:53 --> Model Class Initialized
DEBUG - 2013-11-14 00:03:53 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:03:53 --> after session initialization................
INFO  - 2013-11-14 00:03:53 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 00:03:53 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 00:03:53 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 00:03:53 --> inside retrieving locations 
INFO  - 2013-11-14 00:03:53 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 00:03:53 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 00:03:53 --> Final output sent to browser
DEBUG - 2013-11-14 00:03:53 --> Total execution time: 0.0650
DEBUG - 2013-11-14 00:03:55 --> Config Class Initialized
DEBUG - 2013-11-14 00:03:55 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:03:55 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:03:55 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:03:55 --> URI Class Initialized
DEBUG - 2013-11-14 00:03:55 --> Router Class Initialized
DEBUG - 2013-11-14 00:03:55 --> Output Class Initialized
DEBUG - 2013-11-14 00:03:55 --> Security Class Initialized
DEBUG - 2013-11-14 00:03:55 --> Input Class Initialized
DEBUG - 2013-11-14 00:03:55 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:03:55 --> Language Class Initialized
DEBUG - 2013-11-14 00:03:55 --> Loader Class Initialized
DEBUG - 2013-11-14 00:03:55 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:03:55 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:03:55 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:03:55 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:03:55 --> Session Class Initialized
DEBUG - 2013-11-14 00:03:55 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:03:55 --> Session routines successfully run
DEBUG - 2013-11-14 00:03:55 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:03:55 --> Controller Class Initialized
DEBUG - 2013-11-14 00:03:55 --> Model Class Initialized
DEBUG - 2013-11-14 00:03:55 --> Model Class Initialized
DEBUG - 2013-11-14 00:03:55 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:03:55 --> after session initialization................
INFO  - 2013-11-14 00:03:55 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 00:03:55 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 00:03:55 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 00:03:55 --> inside retrieving locations 
INFO  - 2013-11-14 00:03:55 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 00:03:55 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 00:03:55 --> Final output sent to browser
DEBUG - 2013-11-14 00:03:55 --> Total execution time: 0.0820
DEBUG - 2013-11-14 00:04:14 --> Config Class Initialized
DEBUG - 2013-11-14 00:04:14 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:04:14 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:04:14 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:04:14 --> URI Class Initialized
DEBUG - 2013-11-14 00:04:14 --> Router Class Initialized
DEBUG - 2013-11-14 00:04:14 --> Output Class Initialized
DEBUG - 2013-11-14 00:04:14 --> Security Class Initialized
DEBUG - 2013-11-14 00:04:14 --> Input Class Initialized
DEBUG - 2013-11-14 00:04:14 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:04:14 --> Language Class Initialized
DEBUG - 2013-11-14 00:04:14 --> Loader Class Initialized
DEBUG - 2013-11-14 00:04:14 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:04:14 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:04:14 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:04:14 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:04:14 --> Session Class Initialized
DEBUG - 2013-11-14 00:04:14 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:04:14 --> Session routines successfully run
DEBUG - 2013-11-14 00:04:14 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:04:14 --> Controller Class Initialized
DEBUG - 2013-11-14 00:04:14 --> Model Class Initialized
DEBUG - 2013-11-14 00:04:14 --> Model Class Initialized
DEBUG - 2013-11-14 00:04:14 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:04:14 --> after session initialization................
INFO  - 2013-11-14 00:04:14 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 00:04:14 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 00:04:14 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 00:04:14 --> inside retrieving locations 
INFO  - 2013-11-14 00:04:14 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 00:04:14 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 00:04:14 --> Final output sent to browser
DEBUG - 2013-11-14 00:04:14 --> Total execution time: 0.0700
DEBUG - 2013-11-14 00:04:16 --> Config Class Initialized
DEBUG - 2013-11-14 00:04:16 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:04:16 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:04:16 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:04:16 --> URI Class Initialized
DEBUG - 2013-11-14 00:04:16 --> Router Class Initialized
DEBUG - 2013-11-14 00:04:16 --> Output Class Initialized
DEBUG - 2013-11-14 00:04:16 --> Security Class Initialized
DEBUG - 2013-11-14 00:04:16 --> Input Class Initialized
DEBUG - 2013-11-14 00:04:16 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:04:16 --> Language Class Initialized
DEBUG - 2013-11-14 00:04:16 --> Loader Class Initialized
DEBUG - 2013-11-14 00:04:16 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:04:16 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:04:16 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:04:16 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:04:16 --> Session Class Initialized
DEBUG - 2013-11-14 00:04:16 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:04:16 --> Session routines successfully run
DEBUG - 2013-11-14 00:04:16 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:04:16 --> Controller Class Initialized
DEBUG - 2013-11-14 00:04:16 --> Model Class Initialized
DEBUG - 2013-11-14 00:04:16 --> Model Class Initialized
DEBUG - 2013-11-14 00:04:16 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:04:16 --> after session initialization................
INFO  - 2013-11-14 00:04:16 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 00:04:16 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 00:04:16 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 00:04:16 --> inside retrieving locations 
INFO  - 2013-11-14 00:04:16 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 00:04:16 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 00:04:16 --> Final output sent to browser
DEBUG - 2013-11-14 00:04:16 --> Total execution time: 0.0550
DEBUG - 2013-11-14 00:04:19 --> Config Class Initialized
DEBUG - 2013-11-14 00:04:19 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:04:19 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:04:19 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:04:19 --> URI Class Initialized
DEBUG - 2013-11-14 00:04:19 --> Router Class Initialized
DEBUG - 2013-11-14 00:04:19 --> Output Class Initialized
DEBUG - 2013-11-14 00:04:19 --> Security Class Initialized
DEBUG - 2013-11-14 00:04:19 --> Input Class Initialized
DEBUG - 2013-11-14 00:04:19 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:04:19 --> Language Class Initialized
DEBUG - 2013-11-14 00:04:19 --> Loader Class Initialized
DEBUG - 2013-11-14 00:04:19 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:04:19 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:04:19 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:04:19 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:04:19 --> Session Class Initialized
DEBUG - 2013-11-14 00:04:19 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:04:19 --> Session routines successfully run
DEBUG - 2013-11-14 00:04:19 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:04:19 --> Controller Class Initialized
DEBUG - 2013-11-14 00:04:19 --> Model Class Initialized
DEBUG - 2013-11-14 00:04:19 --> Model Class Initialized
DEBUG - 2013-11-14 00:04:19 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:04:19 --> after session initialization................
INFO  - 2013-11-14 00:04:19 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>34
INFO  - 2013-11-14 00:04:19 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` =  '34'
DEBUG - 2013-11-14 00:04:19 --> Final output sent to browser
DEBUG - 2013-11-14 00:04:19 --> Total execution time: 0.0520
DEBUG - 2013-11-14 00:06:15 --> Config Class Initialized
DEBUG - 2013-11-14 00:06:15 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:06:15 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:06:15 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:06:15 --> URI Class Initialized
DEBUG - 2013-11-14 00:06:15 --> Router Class Initialized
DEBUG - 2013-11-14 00:06:15 --> Output Class Initialized
DEBUG - 2013-11-14 00:06:15 --> Security Class Initialized
DEBUG - 2013-11-14 00:06:15 --> Input Class Initialized
DEBUG - 2013-11-14 00:06:15 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:06:15 --> Language Class Initialized
DEBUG - 2013-11-14 00:06:15 --> Loader Class Initialized
DEBUG - 2013-11-14 00:06:15 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:06:15 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:06:15 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:06:15 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:06:15 --> Session Class Initialized
DEBUG - 2013-11-14 00:06:15 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:06:15 --> Session routines successfully run
DEBUG - 2013-11-14 00:06:15 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:06:15 --> Controller Class Initialized
DEBUG - 2013-11-14 00:06:15 --> Model Class Initialized
DEBUG - 2013-11-14 00:06:15 --> Model Class Initialized
DEBUG - 2013-11-14 00:06:15 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:06:15 --> after session initialization................
INFO  - 2013-11-14 00:06:15 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 00:06:15 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 00:06:15 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 00:06:15 --> inside retrieving locations 
INFO  - 2013-11-14 00:06:15 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 00:06:15 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 00:06:15 --> Final output sent to browser
DEBUG - 2013-11-14 00:06:15 --> Total execution time: 0.0500
DEBUG - 2013-11-14 00:06:19 --> Config Class Initialized
DEBUG - 2013-11-14 00:06:19 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:06:19 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:06:19 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:06:19 --> URI Class Initialized
DEBUG - 2013-11-14 00:06:19 --> Router Class Initialized
DEBUG - 2013-11-14 00:06:19 --> Output Class Initialized
DEBUG - 2013-11-14 00:06:19 --> Security Class Initialized
DEBUG - 2013-11-14 00:06:19 --> Input Class Initialized
DEBUG - 2013-11-14 00:06:19 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:06:19 --> Language Class Initialized
DEBUG - 2013-11-14 00:06:19 --> Loader Class Initialized
DEBUG - 2013-11-14 00:06:19 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:06:19 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:06:19 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:06:19 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:06:19 --> Session Class Initialized
DEBUG - 2013-11-14 00:06:19 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:06:19 --> Session routines successfully run
DEBUG - 2013-11-14 00:06:19 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:06:19 --> Controller Class Initialized
DEBUG - 2013-11-14 00:06:19 --> Model Class Initialized
DEBUG - 2013-11-14 00:06:19 --> Model Class Initialized
DEBUG - 2013-11-14 00:06:19 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:06:19 --> after session initialization................
INFO  - 2013-11-14 00:06:19 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 00:06:19 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 00:06:19 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 00:06:19 --> inside retrieving locations 
INFO  - 2013-11-14 00:06:19 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 00:06:19 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 00:06:19 --> Final output sent to browser
DEBUG - 2013-11-14 00:06:19 --> Total execution time: 0.0560
DEBUG - 2013-11-14 00:06:21 --> Config Class Initialized
DEBUG - 2013-11-14 00:06:21 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:06:21 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:06:21 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:06:21 --> URI Class Initialized
DEBUG - 2013-11-14 00:06:21 --> Router Class Initialized
DEBUG - 2013-11-14 00:06:21 --> Output Class Initialized
DEBUG - 2013-11-14 00:06:21 --> Security Class Initialized
DEBUG - 2013-11-14 00:06:21 --> Input Class Initialized
DEBUG - 2013-11-14 00:06:21 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:06:21 --> Language Class Initialized
DEBUG - 2013-11-14 00:06:21 --> Loader Class Initialized
DEBUG - 2013-11-14 00:06:21 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:06:21 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:06:21 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:06:21 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:06:21 --> Session Class Initialized
DEBUG - 2013-11-14 00:06:21 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:06:21 --> Session routines successfully run
DEBUG - 2013-11-14 00:06:21 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:06:21 --> Controller Class Initialized
DEBUG - 2013-11-14 00:06:21 --> Model Class Initialized
DEBUG - 2013-11-14 00:06:21 --> Model Class Initialized
DEBUG - 2013-11-14 00:06:21 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:06:21 --> after session initialization................
INFO  - 2013-11-14 00:06:21 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 00:06:21 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 00:06:21 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 00:06:21 --> inside retrieving locations 
INFO  - 2013-11-14 00:06:21 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 00:06:21 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 00:06:21 --> Final output sent to browser
DEBUG - 2013-11-14 00:06:21 --> Total execution time: 0.0680
DEBUG - 2013-11-14 00:06:26 --> Config Class Initialized
DEBUG - 2013-11-14 00:06:26 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:06:26 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:06:26 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:06:26 --> URI Class Initialized
DEBUG - 2013-11-14 00:06:26 --> Router Class Initialized
DEBUG - 2013-11-14 00:06:26 --> Output Class Initialized
DEBUG - 2013-11-14 00:06:26 --> Security Class Initialized
DEBUG - 2013-11-14 00:06:26 --> Input Class Initialized
DEBUG - 2013-11-14 00:06:26 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:06:26 --> Language Class Initialized
DEBUG - 2013-11-14 00:06:26 --> Loader Class Initialized
DEBUG - 2013-11-14 00:06:26 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:06:26 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:06:26 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:06:26 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:06:26 --> Session Class Initialized
DEBUG - 2013-11-14 00:06:26 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:06:26 --> Session routines successfully run
DEBUG - 2013-11-14 00:06:26 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:06:26 --> Controller Class Initialized
DEBUG - 2013-11-14 00:06:26 --> Model Class Initialized
DEBUG - 2013-11-14 00:06:26 --> Model Class Initialized
DEBUG - 2013-11-14 00:06:26 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:06:26 --> after session initialization................
INFO  - 2013-11-14 00:06:26 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>34
INFO  - 2013-11-14 00:06:26 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` =  '34'
DEBUG - 2013-11-14 00:06:26 --> Final output sent to browser
DEBUG - 2013-11-14 00:06:26 --> Total execution time: 0.0500
DEBUG - 2013-11-14 00:06:49 --> Config Class Initialized
DEBUG - 2013-11-14 00:06:49 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:06:49 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:06:49 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:06:49 --> URI Class Initialized
DEBUG - 2013-11-14 00:06:49 --> Router Class Initialized
DEBUG - 2013-11-14 00:06:49 --> Output Class Initialized
DEBUG - 2013-11-14 00:06:49 --> Security Class Initialized
DEBUG - 2013-11-14 00:06:49 --> Input Class Initialized
DEBUG - 2013-11-14 00:06:49 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:06:49 --> Language Class Initialized
DEBUG - 2013-11-14 00:06:49 --> Loader Class Initialized
DEBUG - 2013-11-14 00:06:49 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:06:49 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:06:49 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:06:49 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:06:49 --> Session Class Initialized
DEBUG - 2013-11-14 00:06:49 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:06:49 --> Session routines successfully run
DEBUG - 2013-11-14 00:06:49 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:06:49 --> Controller Class Initialized
DEBUG - 2013-11-14 00:06:49 --> Model Class Initialized
DEBUG - 2013-11-14 00:06:49 --> Model Class Initialized
DEBUG - 2013-11-14 00:06:49 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:06:49 --> after session initialization................
INFO  - 2013-11-14 00:06:49 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 00:06:49 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 00:06:49 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 00:06:49 --> inside retrieving locations 
INFO  - 2013-11-14 00:06:49 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 00:06:49 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 00:06:49 --> Final output sent to browser
DEBUG - 2013-11-14 00:06:49 --> Total execution time: 0.0540
DEBUG - 2013-11-14 00:06:52 --> Config Class Initialized
DEBUG - 2013-11-14 00:06:52 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:06:52 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:06:52 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:06:52 --> URI Class Initialized
DEBUG - 2013-11-14 00:06:52 --> Router Class Initialized
DEBUG - 2013-11-14 00:06:52 --> Output Class Initialized
DEBUG - 2013-11-14 00:06:52 --> Security Class Initialized
DEBUG - 2013-11-14 00:06:52 --> Input Class Initialized
DEBUG - 2013-11-14 00:06:52 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:06:52 --> Language Class Initialized
DEBUG - 2013-11-14 00:06:52 --> Loader Class Initialized
DEBUG - 2013-11-14 00:06:52 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:06:52 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:06:52 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:06:52 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:06:52 --> Session Class Initialized
DEBUG - 2013-11-14 00:06:52 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:06:52 --> Session routines successfully run
DEBUG - 2013-11-14 00:06:52 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:06:52 --> Controller Class Initialized
DEBUG - 2013-11-14 00:06:52 --> Model Class Initialized
DEBUG - 2013-11-14 00:06:52 --> Model Class Initialized
DEBUG - 2013-11-14 00:06:52 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:06:52 --> after session initialization................
INFO  - 2013-11-14 00:06:52 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>34
INFO  - 2013-11-14 00:06:52 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` =  '34'
DEBUG - 2013-11-14 00:06:52 --> Final output sent to browser
DEBUG - 2013-11-14 00:06:52 --> Total execution time: 0.0460
DEBUG - 2013-11-14 00:07:01 --> Config Class Initialized
DEBUG - 2013-11-14 00:07:01 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:07:01 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:07:01 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:07:01 --> URI Class Initialized
DEBUG - 2013-11-14 00:07:01 --> Router Class Initialized
DEBUG - 2013-11-14 00:07:01 --> Output Class Initialized
DEBUG - 2013-11-14 00:07:01 --> Security Class Initialized
DEBUG - 2013-11-14 00:07:01 --> Input Class Initialized
DEBUG - 2013-11-14 00:07:01 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:07:01 --> Language Class Initialized
DEBUG - 2013-11-14 00:07:01 --> Loader Class Initialized
DEBUG - 2013-11-14 00:07:01 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:07:01 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:07:01 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:07:01 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:07:01 --> Session Class Initialized
DEBUG - 2013-11-14 00:07:01 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:07:01 --> Session routines successfully run
DEBUG - 2013-11-14 00:07:01 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:07:01 --> Controller Class Initialized
DEBUG - 2013-11-14 00:07:01 --> Model Class Initialized
DEBUG - 2013-11-14 00:07:01 --> Model Class Initialized
DEBUG - 2013-11-14 00:07:01 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:07:01 --> after session initialization................
INFO  - 2013-11-14 00:07:01 --> inside retrieving pharmacy by location id 2
INFO  - 2013-11-14 00:07:01 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '2'
LIMIT 25
DEBUG - 2013-11-14 00:07:01 --> Final output sent to browser
DEBUG - 2013-11-14 00:07:01 --> Total execution time: 0.0460
DEBUG - 2013-11-14 00:07:51 --> Config Class Initialized
DEBUG - 2013-11-14 00:07:51 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:07:51 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:07:51 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:07:51 --> URI Class Initialized
DEBUG - 2013-11-14 00:07:51 --> Router Class Initialized
DEBUG - 2013-11-14 00:07:51 --> Output Class Initialized
DEBUG - 2013-11-14 00:07:51 --> Security Class Initialized
DEBUG - 2013-11-14 00:07:51 --> Input Class Initialized
DEBUG - 2013-11-14 00:07:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:07:51 --> Language Class Initialized
DEBUG - 2013-11-14 00:07:51 --> Loader Class Initialized
DEBUG - 2013-11-14 00:07:51 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:07:51 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:07:51 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:07:51 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:07:51 --> Session Class Initialized
DEBUG - 2013-11-14 00:07:51 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:07:51 --> Session routines successfully run
DEBUG - 2013-11-14 00:07:51 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:07:51 --> Controller Class Initialized
DEBUG - 2013-11-14 00:07:51 --> Model Class Initialized
DEBUG - 2013-11-14 00:07:51 --> Model Class Initialized
DEBUG - 2013-11-14 00:07:51 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:07:51 --> after session initialization................
INFO  - 2013-11-14 00:07:51 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 00:07:51 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 00:07:51 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 00:07:51 --> inside retrieving locations 
INFO  - 2013-11-14 00:07:51 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 00:07:51 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 00:07:51 --> Final output sent to browser
DEBUG - 2013-11-14 00:07:51 --> Total execution time: 0.0740
DEBUG - 2013-11-14 00:07:52 --> Config Class Initialized
DEBUG - 2013-11-14 00:07:52 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:07:52 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:07:52 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:07:52 --> URI Class Initialized
DEBUG - 2013-11-14 00:07:52 --> Router Class Initialized
DEBUG - 2013-11-14 00:07:52 --> Output Class Initialized
DEBUG - 2013-11-14 00:07:52 --> Security Class Initialized
DEBUG - 2013-11-14 00:07:52 --> Input Class Initialized
DEBUG - 2013-11-14 00:07:52 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:07:52 --> Language Class Initialized
DEBUG - 2013-11-14 00:07:52 --> Loader Class Initialized
DEBUG - 2013-11-14 00:07:52 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:07:52 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:07:52 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:07:52 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:07:52 --> Session Class Initialized
DEBUG - 2013-11-14 00:07:52 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:07:52 --> Session routines successfully run
DEBUG - 2013-11-14 00:07:52 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:07:52 --> Controller Class Initialized
DEBUG - 2013-11-14 00:07:52 --> Model Class Initialized
DEBUG - 2013-11-14 00:07:52 --> Model Class Initialized
DEBUG - 2013-11-14 00:07:52 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:07:52 --> after session initialization................
INFO  - 2013-11-14 00:07:52 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 00:07:52 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 00:07:52 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 00:07:52 --> inside retrieving locations 
INFO  - 2013-11-14 00:07:52 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 00:07:52 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 00:07:52 --> Final output sent to browser
DEBUG - 2013-11-14 00:07:52 --> Total execution time: 0.1010
DEBUG - 2013-11-14 00:07:54 --> Config Class Initialized
DEBUG - 2013-11-14 00:07:54 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:07:54 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:07:54 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:07:54 --> URI Class Initialized
DEBUG - 2013-11-14 00:07:54 --> Router Class Initialized
DEBUG - 2013-11-14 00:07:54 --> Output Class Initialized
DEBUG - 2013-11-14 00:07:54 --> Security Class Initialized
DEBUG - 2013-11-14 00:07:54 --> Input Class Initialized
DEBUG - 2013-11-14 00:07:54 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:07:54 --> Language Class Initialized
DEBUG - 2013-11-14 00:07:54 --> Loader Class Initialized
DEBUG - 2013-11-14 00:07:54 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:07:54 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:07:54 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:07:54 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:07:54 --> Session Class Initialized
DEBUG - 2013-11-14 00:07:54 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:07:54 --> Session routines successfully run
DEBUG - 2013-11-14 00:07:54 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:07:54 --> Controller Class Initialized
DEBUG - 2013-11-14 00:07:54 --> Model Class Initialized
DEBUG - 2013-11-14 00:07:54 --> Model Class Initialized
DEBUG - 2013-11-14 00:07:54 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:07:54 --> after session initialization................
INFO  - 2013-11-14 00:07:54 --> inside retrieving pharmacy by location id 2
INFO  - 2013-11-14 00:07:54 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '2'
LIMIT 25
DEBUG - 2013-11-14 00:07:54 --> Final output sent to browser
DEBUG - 2013-11-14 00:07:54 --> Total execution time: 0.0470
DEBUG - 2013-11-14 00:07:56 --> Config Class Initialized
DEBUG - 2013-11-14 00:07:56 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:07:56 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:07:56 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:07:56 --> URI Class Initialized
DEBUG - 2013-11-14 00:07:56 --> Router Class Initialized
DEBUG - 2013-11-14 00:07:56 --> Output Class Initialized
DEBUG - 2013-11-14 00:07:56 --> Security Class Initialized
DEBUG - 2013-11-14 00:07:56 --> Input Class Initialized
DEBUG - 2013-11-14 00:07:56 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:07:56 --> Language Class Initialized
DEBUG - 2013-11-14 00:07:56 --> Loader Class Initialized
DEBUG - 2013-11-14 00:07:56 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:07:56 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:07:56 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:07:56 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:07:56 --> Session Class Initialized
DEBUG - 2013-11-14 00:07:56 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:07:56 --> Session routines successfully run
DEBUG - 2013-11-14 00:07:56 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:07:56 --> Controller Class Initialized
DEBUG - 2013-11-14 00:07:56 --> Model Class Initialized
DEBUG - 2013-11-14 00:07:56 --> Model Class Initialized
DEBUG - 2013-11-14 00:07:56 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:07:56 --> after session initialization................
INFO  - 2013-11-14 00:07:56 --> inside retrieving pharmacy by location id 1
INFO  - 2013-11-14 00:07:56 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '1'
LIMIT 25
DEBUG - 2013-11-14 00:07:56 --> Final output sent to browser
DEBUG - 2013-11-14 00:07:56 --> Total execution time: 0.0440
DEBUG - 2013-11-14 00:08:01 --> Config Class Initialized
DEBUG - 2013-11-14 00:08:01 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:08:01 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:08:01 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:08:01 --> URI Class Initialized
DEBUG - 2013-11-14 00:08:01 --> Router Class Initialized
DEBUG - 2013-11-14 00:08:01 --> Output Class Initialized
DEBUG - 2013-11-14 00:08:01 --> Security Class Initialized
DEBUG - 2013-11-14 00:08:01 --> Input Class Initialized
DEBUG - 2013-11-14 00:08:01 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:08:01 --> Language Class Initialized
DEBUG - 2013-11-14 00:08:01 --> Loader Class Initialized
DEBUG - 2013-11-14 00:08:01 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:08:01 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:08:01 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:08:01 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:08:01 --> Session Class Initialized
DEBUG - 2013-11-14 00:08:01 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:08:01 --> Session routines successfully run
DEBUG - 2013-11-14 00:08:01 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:08:01 --> Controller Class Initialized
DEBUG - 2013-11-14 00:08:01 --> Model Class Initialized
DEBUG - 2013-11-14 00:08:01 --> Model Class Initialized
DEBUG - 2013-11-14 00:08:01 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:08:01 --> after session initialization................
INFO  - 2013-11-14 00:08:01 --> inside retrieving pharmacy by location id 2
INFO  - 2013-11-14 00:08:01 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '2'
LIMIT 25
DEBUG - 2013-11-14 00:08:01 --> Final output sent to browser
DEBUG - 2013-11-14 00:08:01 --> Total execution time: 0.0440
DEBUG - 2013-11-14 00:08:03 --> Config Class Initialized
DEBUG - 2013-11-14 00:08:03 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:08:03 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:08:03 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:08:03 --> URI Class Initialized
DEBUG - 2013-11-14 00:08:03 --> Router Class Initialized
DEBUG - 2013-11-14 00:08:03 --> Output Class Initialized
DEBUG - 2013-11-14 00:08:03 --> Security Class Initialized
DEBUG - 2013-11-14 00:08:03 --> Input Class Initialized
DEBUG - 2013-11-14 00:08:03 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:08:03 --> Language Class Initialized
DEBUG - 2013-11-14 00:08:03 --> Loader Class Initialized
DEBUG - 2013-11-14 00:08:03 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:08:03 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:08:03 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:08:03 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:08:03 --> Session Class Initialized
DEBUG - 2013-11-14 00:08:03 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:08:03 --> Session routines successfully run
DEBUG - 2013-11-14 00:08:03 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:08:03 --> Controller Class Initialized
DEBUG - 2013-11-14 00:08:03 --> Model Class Initialized
DEBUG - 2013-11-14 00:08:03 --> Model Class Initialized
DEBUG - 2013-11-14 00:08:03 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:08:03 --> after session initialization................
INFO  - 2013-11-14 00:08:03 --> inside retrieving pharmacy by location id 1
INFO  - 2013-11-14 00:08:03 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '1'
LIMIT 25
DEBUG - 2013-11-14 00:08:03 --> Final output sent to browser
DEBUG - 2013-11-14 00:08:03 --> Total execution time: 0.0440
DEBUG - 2013-11-14 00:08:08 --> Config Class Initialized
DEBUG - 2013-11-14 00:08:08 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:08:08 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:08:08 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:08:08 --> URI Class Initialized
DEBUG - 2013-11-14 00:08:08 --> Router Class Initialized
DEBUG - 2013-11-14 00:08:08 --> Output Class Initialized
DEBUG - 2013-11-14 00:08:08 --> Security Class Initialized
DEBUG - 2013-11-14 00:08:08 --> Input Class Initialized
DEBUG - 2013-11-14 00:08:08 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:08:08 --> Language Class Initialized
DEBUG - 2013-11-14 00:08:08 --> Loader Class Initialized
DEBUG - 2013-11-14 00:08:08 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:08:08 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:08:08 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:08:08 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:08:08 --> Session Class Initialized
DEBUG - 2013-11-14 00:08:08 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:08:08 --> Session routines successfully run
DEBUG - 2013-11-14 00:08:08 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:08:08 --> Controller Class Initialized
DEBUG - 2013-11-14 00:08:08 --> Model Class Initialized
DEBUG - 2013-11-14 00:08:08 --> Model Class Initialized
DEBUG - 2013-11-14 00:08:08 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:08:08 --> after session initialization................
INFO  - 2013-11-14 00:08:08 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>33
INFO  - 2013-11-14 00:08:08 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` =  '33'
DEBUG - 2013-11-14 00:08:08 --> Final output sent to browser
DEBUG - 2013-11-14 00:08:08 --> Total execution time: 0.0470
DEBUG - 2013-11-14 00:08:09 --> Config Class Initialized
DEBUG - 2013-11-14 00:08:09 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:08:09 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:08:09 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:08:09 --> URI Class Initialized
DEBUG - 2013-11-14 00:08:09 --> Router Class Initialized
DEBUG - 2013-11-14 00:08:09 --> Output Class Initialized
DEBUG - 2013-11-14 00:08:09 --> Security Class Initialized
DEBUG - 2013-11-14 00:08:09 --> Input Class Initialized
DEBUG - 2013-11-14 00:08:09 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:08:09 --> Language Class Initialized
DEBUG - 2013-11-14 00:08:09 --> Loader Class Initialized
DEBUG - 2013-11-14 00:08:09 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:08:09 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:08:09 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:08:10 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:08:10 --> Session Class Initialized
DEBUG - 2013-11-14 00:08:10 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:08:10 --> Session routines successfully run
DEBUG - 2013-11-14 00:08:10 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:08:10 --> Controller Class Initialized
DEBUG - 2013-11-14 00:08:10 --> Model Class Initialized
DEBUG - 2013-11-14 00:08:10 --> Model Class Initialized
DEBUG - 2013-11-14 00:08:10 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:08:10 --> after session initialization................
INFO  - 2013-11-14 00:08:10 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 00:08:10 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 00:08:10 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 00:08:10 --> inside retrieving locations 
INFO  - 2013-11-14 00:08:10 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 00:08:10 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 00:08:10 --> Final output sent to browser
DEBUG - 2013-11-14 00:08:10 --> Total execution time: 0.0650
DEBUG - 2013-11-14 00:08:11 --> Config Class Initialized
DEBUG - 2013-11-14 00:08:11 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:08:11 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:08:11 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:08:11 --> URI Class Initialized
DEBUG - 2013-11-14 00:08:11 --> Router Class Initialized
DEBUG - 2013-11-14 00:08:11 --> Output Class Initialized
DEBUG - 2013-11-14 00:08:11 --> Security Class Initialized
DEBUG - 2013-11-14 00:08:11 --> Input Class Initialized
DEBUG - 2013-11-14 00:08:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:08:11 --> Language Class Initialized
DEBUG - 2013-11-14 00:08:11 --> Loader Class Initialized
DEBUG - 2013-11-14 00:08:11 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:08:11 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:08:11 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:08:11 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:08:11 --> Session Class Initialized
DEBUG - 2013-11-14 00:08:11 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:08:11 --> Session routines successfully run
DEBUG - 2013-11-14 00:08:11 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:08:11 --> Controller Class Initialized
DEBUG - 2013-11-14 00:08:11 --> Model Class Initialized
DEBUG - 2013-11-14 00:08:11 --> Model Class Initialized
DEBUG - 2013-11-14 00:08:11 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:08:11 --> after session initialization................
INFO  - 2013-11-14 00:08:11 --> inside retrieving pharmacy by location id 2
INFO  - 2013-11-14 00:08:11 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '2'
LIMIT 25
DEBUG - 2013-11-14 00:08:11 --> Final output sent to browser
DEBUG - 2013-11-14 00:08:11 --> Total execution time: 0.0510
DEBUG - 2013-11-14 00:08:14 --> Config Class Initialized
DEBUG - 2013-11-14 00:08:14 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:08:14 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:08:14 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:08:14 --> URI Class Initialized
DEBUG - 2013-11-14 00:08:14 --> Router Class Initialized
DEBUG - 2013-11-14 00:08:14 --> Output Class Initialized
DEBUG - 2013-11-14 00:08:14 --> Security Class Initialized
DEBUG - 2013-11-14 00:08:14 --> Input Class Initialized
DEBUG - 2013-11-14 00:08:14 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:08:14 --> Language Class Initialized
DEBUG - 2013-11-14 00:08:14 --> Loader Class Initialized
DEBUG - 2013-11-14 00:08:14 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:08:14 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:08:14 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:08:14 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:08:14 --> Session Class Initialized
DEBUG - 2013-11-14 00:08:14 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:08:14 --> Session routines successfully run
DEBUG - 2013-11-14 00:08:14 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:08:14 --> Controller Class Initialized
DEBUG - 2013-11-14 00:08:14 --> Model Class Initialized
DEBUG - 2013-11-14 00:08:14 --> Model Class Initialized
DEBUG - 2013-11-14 00:08:14 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:08:14 --> after session initialization................
INFO  - 2013-11-14 00:08:14 --> inside retrieving pharmacy by location id 1
INFO  - 2013-11-14 00:08:14 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '1'
LIMIT 25
DEBUG - 2013-11-14 00:08:14 --> Final output sent to browser
DEBUG - 2013-11-14 00:08:14 --> Total execution time: 0.0460
DEBUG - 2013-11-14 00:09:36 --> Config Class Initialized
DEBUG - 2013-11-14 00:09:36 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:09:36 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:09:36 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:09:36 --> URI Class Initialized
DEBUG - 2013-11-14 00:09:36 --> Router Class Initialized
DEBUG - 2013-11-14 00:09:36 --> Output Class Initialized
DEBUG - 2013-11-14 00:09:36 --> Security Class Initialized
DEBUG - 2013-11-14 00:09:36 --> Input Class Initialized
DEBUG - 2013-11-14 00:09:36 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:09:36 --> Language Class Initialized
DEBUG - 2013-11-14 00:09:36 --> Loader Class Initialized
DEBUG - 2013-11-14 00:09:36 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:09:36 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:09:36 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:09:36 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:09:36 --> Session Class Initialized
DEBUG - 2013-11-14 00:09:36 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:09:36 --> Session routines successfully run
DEBUG - 2013-11-14 00:09:36 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:09:36 --> Controller Class Initialized
DEBUG - 2013-11-14 00:09:36 --> Model Class Initialized
DEBUG - 2013-11-14 00:09:36 --> Model Class Initialized
DEBUG - 2013-11-14 00:09:36 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:09:36 --> after session initialization................
INFO  - 2013-11-14 00:09:36 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 00:09:36 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 00:09:36 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 00:09:36 --> inside retrieving locations 
INFO  - 2013-11-14 00:09:36 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 00:09:36 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 00:09:36 --> Final output sent to browser
DEBUG - 2013-11-14 00:09:36 --> Total execution time: 0.0550
DEBUG - 2013-11-14 00:09:38 --> Config Class Initialized
DEBUG - 2013-11-14 00:09:38 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:09:38 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:09:38 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:09:38 --> URI Class Initialized
DEBUG - 2013-11-14 00:09:38 --> Router Class Initialized
DEBUG - 2013-11-14 00:09:38 --> Output Class Initialized
DEBUG - 2013-11-14 00:09:38 --> Security Class Initialized
DEBUG - 2013-11-14 00:09:38 --> Input Class Initialized
DEBUG - 2013-11-14 00:09:38 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:09:38 --> Language Class Initialized
DEBUG - 2013-11-14 00:09:38 --> Loader Class Initialized
DEBUG - 2013-11-14 00:09:38 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:09:38 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:09:38 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:09:38 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:09:38 --> Session Class Initialized
DEBUG - 2013-11-14 00:09:38 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:09:38 --> Session routines successfully run
DEBUG - 2013-11-14 00:09:38 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:09:38 --> Controller Class Initialized
DEBUG - 2013-11-14 00:09:38 --> Model Class Initialized
DEBUG - 2013-11-14 00:09:38 --> Model Class Initialized
DEBUG - 2013-11-14 00:09:38 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:09:38 --> after session initialization................
INFO  - 2013-11-14 00:09:38 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 00:09:38 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 00:09:38 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 00:09:38 --> inside retrieving locations 
INFO  - 2013-11-14 00:09:38 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 00:09:38 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 00:09:38 --> Final output sent to browser
DEBUG - 2013-11-14 00:09:38 --> Total execution time: 0.0670
DEBUG - 2013-11-14 00:09:39 --> Config Class Initialized
DEBUG - 2013-11-14 00:09:39 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:09:39 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:09:39 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:09:39 --> URI Class Initialized
DEBUG - 2013-11-14 00:09:39 --> Router Class Initialized
DEBUG - 2013-11-14 00:09:39 --> Output Class Initialized
DEBUG - 2013-11-14 00:09:39 --> Security Class Initialized
DEBUG - 2013-11-14 00:09:39 --> Input Class Initialized
DEBUG - 2013-11-14 00:09:39 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:09:39 --> Language Class Initialized
DEBUG - 2013-11-14 00:09:39 --> Loader Class Initialized
DEBUG - 2013-11-14 00:09:39 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:09:39 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:09:39 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:09:39 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:09:39 --> Session Class Initialized
DEBUG - 2013-11-14 00:09:39 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:09:39 --> Session routines successfully run
DEBUG - 2013-11-14 00:09:39 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:09:39 --> Controller Class Initialized
DEBUG - 2013-11-14 00:09:39 --> Model Class Initialized
DEBUG - 2013-11-14 00:09:39 --> Model Class Initialized
DEBUG - 2013-11-14 00:09:39 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:09:39 --> after session initialization................
DEBUG - 2013-11-14 00:09:39 --> Config Class Initialized
DEBUG - 2013-11-14 00:09:39 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:09:39 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:09:39 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:09:39 --> URI Class Initialized
DEBUG - 2013-11-14 00:09:39 --> Router Class Initialized
DEBUG - 2013-11-14 00:09:39 --> No URI present. Default controller set.
DEBUG - 2013-11-14 00:09:39 --> Output Class Initialized
DEBUG - 2013-11-14 00:09:39 --> Security Class Initialized
DEBUG - 2013-11-14 00:09:39 --> Input Class Initialized
DEBUG - 2013-11-14 00:09:39 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:09:39 --> Language Class Initialized
DEBUG - 2013-11-14 00:09:39 --> Loader Class Initialized
DEBUG - 2013-11-14 00:09:39 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:09:39 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:09:39 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:09:39 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:09:39 --> Session Class Initialized
DEBUG - 2013-11-14 00:09:39 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:09:39 --> A session cookie was not found.
DEBUG - 2013-11-14 00:09:39 --> Session routines successfully run
DEBUG - 2013-11-14 00:09:39 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:09:39 --> Controller Class Initialized
INFO  - 2013-11-14 00:09:39 --> the form message==>
INFO  - 2013-11-14 00:09:39 --> The session id is ========>e5bfa2e12bae99266229ab3fab9b3d15 and the member id is =======>
INFO  - 2013-11-14 00:09:39 --> after the retrieving session list.................//////////
DEBUG - 2013-11-14 00:09:39 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-11-14 00:09:39 --> Final output sent to browser
DEBUG - 2013-11-14 00:09:39 --> Total execution time: 0.0560
DEBUG - 2013-11-14 00:09:44 --> Config Class Initialized
DEBUG - 2013-11-14 00:09:44 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:09:44 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:09:44 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:09:44 --> URI Class Initialized
DEBUG - 2013-11-14 00:09:44 --> Router Class Initialized
DEBUG - 2013-11-14 00:09:44 --> Output Class Initialized
DEBUG - 2013-11-14 00:09:44 --> Security Class Initialized
DEBUG - 2013-11-14 00:09:44 --> Input Class Initialized
DEBUG - 2013-11-14 00:09:44 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:09:44 --> Language Class Initialized
DEBUG - 2013-11-14 00:09:44 --> Loader Class Initialized
DEBUG - 2013-11-14 00:09:44 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:09:44 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:09:44 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:09:44 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:09:44 --> Session Class Initialized
DEBUG - 2013-11-14 00:09:44 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:09:44 --> Session routines successfully run
DEBUG - 2013-11-14 00:09:44 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:09:44 --> Controller Class Initialized
DEBUG - 2013-11-14 00:09:44 --> Model Class Initialized
DEBUG - 2013-11-14 00:09:44 --> Model Class Initialized
DEBUG - 2013-11-14 00:09:44 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:09:44 --> after session initialization................
INFO  - 2013-11-14 00:09:44 --> inside rays login auth.............
DEBUG - 2013-11-14 00:09:44 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-11-14 00:09:44 --> XSS Filtering completed
DEBUG - 2013-11-14 00:09:44 --> XSS Filtering completed
INFO  - 2013-11-14 00:09:44 --> before getting the relation of member............6
INFO  - 2013-11-14 00:09:44 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-11-14 00:09:44 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-14 00:09:44 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-11-14 00:09:44 --> inside retrieving vacancy for member
INFO  - 2013-11-14 00:09:44 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-11-14 00:09:44 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-14 00:09:44 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-11-14 00:09:44 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-11-14 00:09:44 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-14 00:09:44 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-14 00:09:44 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-11-14 00:09:44 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-11-14 00:09:44 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-11-14 00:09:44 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-11-14 00:09:44 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-11-14 00:09:44 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-11-14 00:09:44 --> Final output sent to browser
DEBUG - 2013-11-14 00:09:44 --> Total execution time: 0.0780
DEBUG - 2013-11-14 00:09:44 --> Config Class Initialized
DEBUG - 2013-11-14 00:09:44 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:09:44 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:09:44 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:09:44 --> URI Class Initialized
DEBUG - 2013-11-14 00:09:44 --> Router Class Initialized
DEBUG - 2013-11-14 00:09:44 --> Output Class Initialized
DEBUG - 2013-11-14 00:09:44 --> Security Class Initialized
DEBUG - 2013-11-14 00:09:44 --> Input Class Initialized
DEBUG - 2013-11-14 00:09:44 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:09:44 --> Language Class Initialized
DEBUG - 2013-11-14 00:09:44 --> Loader Class Initialized
DEBUG - 2013-11-14 00:09:44 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:09:44 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:09:44 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:09:44 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:09:44 --> Session Class Initialized
DEBUG - 2013-11-14 00:09:44 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:09:44 --> Session routines successfully run
DEBUG - 2013-11-14 00:09:44 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:09:44 --> Controller Class Initialized
DEBUG - 2013-11-14 00:09:44 --> Model Class Initialized
DEBUG - 2013-11-14 00:09:44 --> Model Class Initialized
DEBUG - 2013-11-14 00:09:44 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:09:44 --> after session initialization................
ERROR - 2013-11-14 00:09:44 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-14 00:09:45 --> Config Class Initialized
DEBUG - 2013-11-14 00:09:45 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:09:45 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:09:45 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:09:45 --> URI Class Initialized
DEBUG - 2013-11-14 00:09:45 --> Router Class Initialized
ERROR - 2013-11-14 00:09:45 --> 404 Page Not Found --> css
DEBUG - 2013-11-14 00:09:46 --> Config Class Initialized
DEBUG - 2013-11-14 00:09:46 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:09:46 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:09:46 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:09:46 --> URI Class Initialized
DEBUG - 2013-11-14 00:09:46 --> Router Class Initialized
DEBUG - 2013-11-14 00:09:46 --> Output Class Initialized
DEBUG - 2013-11-14 00:09:46 --> Security Class Initialized
DEBUG - 2013-11-14 00:09:46 --> Input Class Initialized
DEBUG - 2013-11-14 00:09:46 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:09:46 --> Language Class Initialized
DEBUG - 2013-11-14 00:09:46 --> Loader Class Initialized
DEBUG - 2013-11-14 00:09:46 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:09:46 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:09:46 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:09:46 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:09:46 --> Session Class Initialized
DEBUG - 2013-11-14 00:09:46 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:09:46 --> Session routines successfully run
DEBUG - 2013-11-14 00:09:46 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:09:46 --> Controller Class Initialized
DEBUG - 2013-11-14 00:09:46 --> Model Class Initialized
DEBUG - 2013-11-14 00:09:46 --> Model Class Initialized
DEBUG - 2013-11-14 00:09:46 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:09:46 --> after session initialization................
INFO  - 2013-11-14 00:09:46 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 00:09:46 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 00:09:46 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 00:09:46 --> inside retrieving locations 
INFO  - 2013-11-14 00:09:46 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 00:09:46 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 00:09:46 --> Final output sent to browser
DEBUG - 2013-11-14 00:09:46 --> Total execution time: 0.0570
DEBUG - 2013-11-14 00:09:48 --> Config Class Initialized
DEBUG - 2013-11-14 00:09:48 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:09:48 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:09:48 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:09:48 --> URI Class Initialized
DEBUG - 2013-11-14 00:09:48 --> Router Class Initialized
DEBUG - 2013-11-14 00:09:48 --> Output Class Initialized
DEBUG - 2013-11-14 00:09:48 --> Security Class Initialized
DEBUG - 2013-11-14 00:09:48 --> Input Class Initialized
DEBUG - 2013-11-14 00:09:48 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:09:48 --> Language Class Initialized
DEBUG - 2013-11-14 00:09:48 --> Loader Class Initialized
DEBUG - 2013-11-14 00:09:48 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:09:48 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:09:48 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:09:48 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:09:48 --> Session Class Initialized
DEBUG - 2013-11-14 00:09:48 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:09:48 --> Session routines successfully run
DEBUG - 2013-11-14 00:09:48 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:09:48 --> Controller Class Initialized
DEBUG - 2013-11-14 00:09:48 --> Model Class Initialized
DEBUG - 2013-11-14 00:09:48 --> Model Class Initialized
DEBUG - 2013-11-14 00:09:48 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:09:48 --> after session initialization................
INFO  - 2013-11-14 00:09:48 --> inside retrieving pharmacy by location id 2
INFO  - 2013-11-14 00:09:48 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '2'
LIMIT 25
DEBUG - 2013-11-14 00:09:48 --> Final output sent to browser
DEBUG - 2013-11-14 00:09:48 --> Total execution time: 0.0450
DEBUG - 2013-11-14 00:09:51 --> Config Class Initialized
DEBUG - 2013-11-14 00:09:51 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:09:51 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:09:51 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:09:51 --> URI Class Initialized
DEBUG - 2013-11-14 00:09:51 --> Router Class Initialized
DEBUG - 2013-11-14 00:09:51 --> Output Class Initialized
DEBUG - 2013-11-14 00:09:51 --> Security Class Initialized
DEBUG - 2013-11-14 00:09:51 --> Input Class Initialized
DEBUG - 2013-11-14 00:09:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:09:51 --> Language Class Initialized
DEBUG - 2013-11-14 00:09:51 --> Loader Class Initialized
DEBUG - 2013-11-14 00:09:51 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:09:51 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:09:51 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:09:51 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:09:51 --> Session Class Initialized
DEBUG - 2013-11-14 00:09:51 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:09:51 --> Session routines successfully run
DEBUG - 2013-11-14 00:09:51 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:09:51 --> Controller Class Initialized
DEBUG - 2013-11-14 00:09:51 --> Model Class Initialized
DEBUG - 2013-11-14 00:09:51 --> Model Class Initialized
DEBUG - 2013-11-14 00:09:51 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:09:51 --> after session initialization................
INFO  - 2013-11-14 00:09:51 --> inside retrieving pharmacy by location id 1
INFO  - 2013-11-14 00:09:51 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '1'
LIMIT 25
DEBUG - 2013-11-14 00:09:51 --> Final output sent to browser
DEBUG - 2013-11-14 00:09:51 --> Total execution time: 0.0420
DEBUG - 2013-11-14 00:12:12 --> Config Class Initialized
DEBUG - 2013-11-14 00:12:12 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:12:12 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:12:12 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:12:12 --> URI Class Initialized
DEBUG - 2013-11-14 00:12:12 --> Router Class Initialized
DEBUG - 2013-11-14 00:12:12 --> Output Class Initialized
DEBUG - 2013-11-14 00:12:12 --> Security Class Initialized
DEBUG - 2013-11-14 00:12:12 --> Input Class Initialized
DEBUG - 2013-11-14 00:12:12 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:12:12 --> Language Class Initialized
DEBUG - 2013-11-14 00:12:12 --> Loader Class Initialized
DEBUG - 2013-11-14 00:12:12 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:12:12 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:12:12 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:12:12 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:12:12 --> Session Class Initialized
DEBUG - 2013-11-14 00:12:12 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:12:12 --> Session routines successfully run
DEBUG - 2013-11-14 00:12:12 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:12:12 --> Controller Class Initialized
DEBUG - 2013-11-14 00:12:12 --> Model Class Initialized
DEBUG - 2013-11-14 00:12:12 --> Model Class Initialized
DEBUG - 2013-11-14 00:12:12 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:12:12 --> after session initialization................
INFO  - 2013-11-14 00:12:12 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 00:12:12 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 00:12:12 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 00:12:12 --> inside retrieving locations 
INFO  - 2013-11-14 00:12:12 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 00:12:12 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 00:12:12 --> Final output sent to browser
DEBUG - 2013-11-14 00:12:12 --> Total execution time: 0.0620
DEBUG - 2013-11-14 00:12:13 --> Config Class Initialized
DEBUG - 2013-11-14 00:12:13 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:12:13 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:12:13 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:12:13 --> URI Class Initialized
DEBUG - 2013-11-14 00:12:13 --> Router Class Initialized
DEBUG - 2013-11-14 00:12:13 --> Output Class Initialized
DEBUG - 2013-11-14 00:12:13 --> Security Class Initialized
DEBUG - 2013-11-14 00:12:13 --> Input Class Initialized
DEBUG - 2013-11-14 00:12:13 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:12:13 --> Language Class Initialized
DEBUG - 2013-11-14 00:12:13 --> Loader Class Initialized
DEBUG - 2013-11-14 00:12:13 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:12:13 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:12:13 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:12:13 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:12:13 --> Session Class Initialized
DEBUG - 2013-11-14 00:12:13 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:12:13 --> Session routines successfully run
DEBUG - 2013-11-14 00:12:13 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:12:13 --> Controller Class Initialized
DEBUG - 2013-11-14 00:12:13 --> Model Class Initialized
DEBUG - 2013-11-14 00:12:13 --> Model Class Initialized
DEBUG - 2013-11-14 00:12:13 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:12:13 --> after session initialization................
INFO  - 2013-11-14 00:12:13 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 00:12:13 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 00:12:13 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 00:12:13 --> inside retrieving locations 
INFO  - 2013-11-14 00:12:13 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 00:12:13 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 00:12:13 --> Final output sent to browser
DEBUG - 2013-11-14 00:12:13 --> Total execution time: 0.0590
DEBUG - 2013-11-14 00:12:15 --> Config Class Initialized
DEBUG - 2013-11-14 00:12:15 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:12:15 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:12:15 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:12:15 --> URI Class Initialized
DEBUG - 2013-11-14 00:12:15 --> Router Class Initialized
DEBUG - 2013-11-14 00:12:15 --> Output Class Initialized
DEBUG - 2013-11-14 00:12:15 --> Security Class Initialized
DEBUG - 2013-11-14 00:12:15 --> Input Class Initialized
DEBUG - 2013-11-14 00:12:15 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:12:15 --> Language Class Initialized
DEBUG - 2013-11-14 00:12:15 --> Loader Class Initialized
DEBUG - 2013-11-14 00:12:15 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:12:15 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:12:15 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:12:15 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:12:15 --> Session Class Initialized
DEBUG - 2013-11-14 00:12:15 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:12:15 --> Session routines successfully run
DEBUG - 2013-11-14 00:12:15 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:12:15 --> Controller Class Initialized
DEBUG - 2013-11-14 00:12:15 --> Model Class Initialized
DEBUG - 2013-11-14 00:12:15 --> Model Class Initialized
DEBUG - 2013-11-14 00:12:15 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:12:15 --> after session initialization................
INFO  - 2013-11-14 00:12:15 --> inside retrieving pharmacy by location id 2
INFO  - 2013-11-14 00:12:15 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '2'
LIMIT 25
DEBUG - 2013-11-14 00:12:15 --> Final output sent to browser
DEBUG - 2013-11-14 00:12:15 --> Total execution time: 0.0490
DEBUG - 2013-11-14 00:12:31 --> Config Class Initialized
DEBUG - 2013-11-14 00:12:31 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:12:31 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:12:31 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:12:31 --> URI Class Initialized
DEBUG - 2013-11-14 00:12:31 --> Router Class Initialized
DEBUG - 2013-11-14 00:12:31 --> Output Class Initialized
DEBUG - 2013-11-14 00:12:31 --> Security Class Initialized
DEBUG - 2013-11-14 00:12:31 --> Input Class Initialized
DEBUG - 2013-11-14 00:12:31 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:12:31 --> Language Class Initialized
DEBUG - 2013-11-14 00:12:31 --> Loader Class Initialized
DEBUG - 2013-11-14 00:12:31 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:12:31 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:12:31 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:12:31 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:12:31 --> Session Class Initialized
DEBUG - 2013-11-14 00:12:31 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:12:31 --> Session routines successfully run
DEBUG - 2013-11-14 00:12:31 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:12:31 --> Controller Class Initialized
DEBUG - 2013-11-14 00:12:31 --> Model Class Initialized
DEBUG - 2013-11-14 00:12:31 --> Model Class Initialized
DEBUG - 2013-11-14 00:12:31 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:12:31 --> after session initialization................
INFO  - 2013-11-14 00:12:31 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 00:12:31 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 00:12:31 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 00:12:31 --> inside retrieving locations 
INFO  - 2013-11-14 00:12:31 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 00:12:31 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 00:12:31 --> Final output sent to browser
DEBUG - 2013-11-14 00:12:31 --> Total execution time: 0.0510
DEBUG - 2013-11-14 00:12:33 --> Config Class Initialized
DEBUG - 2013-11-14 00:12:33 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:12:33 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:12:33 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:12:33 --> URI Class Initialized
DEBUG - 2013-11-14 00:12:33 --> Router Class Initialized
DEBUG - 2013-11-14 00:12:33 --> Output Class Initialized
DEBUG - 2013-11-14 00:12:33 --> Security Class Initialized
DEBUG - 2013-11-14 00:12:33 --> Input Class Initialized
DEBUG - 2013-11-14 00:12:33 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:12:33 --> Language Class Initialized
DEBUG - 2013-11-14 00:12:33 --> Loader Class Initialized
DEBUG - 2013-11-14 00:12:33 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:12:33 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:12:33 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:12:33 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:12:33 --> Session Class Initialized
DEBUG - 2013-11-14 00:12:33 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:12:33 --> Session routines successfully run
DEBUG - 2013-11-14 00:12:33 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:12:33 --> Controller Class Initialized
DEBUG - 2013-11-14 00:12:33 --> Model Class Initialized
DEBUG - 2013-11-14 00:12:33 --> Model Class Initialized
DEBUG - 2013-11-14 00:12:33 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:12:33 --> after session initialization................
INFO  - 2013-11-14 00:12:33 --> inside retrieving pharmacy by location id 2
INFO  - 2013-11-14 00:12:33 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '2'
LIMIT 25
DEBUG - 2013-11-14 00:12:33 --> Final output sent to browser
DEBUG - 2013-11-14 00:12:33 --> Total execution time: 0.0480
DEBUG - 2013-11-14 00:12:53 --> Config Class Initialized
DEBUG - 2013-11-14 00:12:53 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:12:53 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:12:53 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:12:53 --> URI Class Initialized
DEBUG - 2013-11-14 00:12:53 --> Router Class Initialized
DEBUG - 2013-11-14 00:12:53 --> Output Class Initialized
DEBUG - 2013-11-14 00:12:53 --> Security Class Initialized
DEBUG - 2013-11-14 00:12:53 --> Input Class Initialized
DEBUG - 2013-11-14 00:12:53 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:12:53 --> Language Class Initialized
DEBUG - 2013-11-14 00:12:53 --> Loader Class Initialized
DEBUG - 2013-11-14 00:12:53 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:12:53 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:12:53 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:12:53 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:12:53 --> Session Class Initialized
DEBUG - 2013-11-14 00:12:53 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:12:53 --> Session routines successfully run
DEBUG - 2013-11-14 00:12:53 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:12:53 --> Controller Class Initialized
DEBUG - 2013-11-14 00:12:53 --> Model Class Initialized
DEBUG - 2013-11-14 00:12:53 --> Model Class Initialized
DEBUG - 2013-11-14 00:12:53 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:12:53 --> after session initialization................
INFO  - 2013-11-14 00:12:53 --> inside retrieving pharmacy by location id 1
INFO  - 2013-11-14 00:12:53 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '1'
LIMIT 25
DEBUG - 2013-11-14 00:12:53 --> Final output sent to browser
DEBUG - 2013-11-14 00:12:53 --> Total execution time: 0.0490
DEBUG - 2013-11-14 00:14:16 --> Config Class Initialized
DEBUG - 2013-11-14 00:14:16 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:14:16 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:14:16 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:14:16 --> URI Class Initialized
DEBUG - 2013-11-14 00:14:16 --> Router Class Initialized
DEBUG - 2013-11-14 00:14:16 --> Output Class Initialized
DEBUG - 2013-11-14 00:14:16 --> Security Class Initialized
DEBUG - 2013-11-14 00:14:16 --> Input Class Initialized
DEBUG - 2013-11-14 00:14:16 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:14:16 --> Language Class Initialized
DEBUG - 2013-11-14 00:14:16 --> Loader Class Initialized
DEBUG - 2013-11-14 00:14:16 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:14:16 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:14:16 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:14:16 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:14:16 --> Session Class Initialized
DEBUG - 2013-11-14 00:14:16 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:14:16 --> Session routines successfully run
DEBUG - 2013-11-14 00:14:16 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:14:16 --> Controller Class Initialized
DEBUG - 2013-11-14 00:14:16 --> Model Class Initialized
DEBUG - 2013-11-14 00:14:16 --> Model Class Initialized
DEBUG - 2013-11-14 00:14:16 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:14:16 --> after session initialization................
INFO  - 2013-11-14 00:14:16 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 00:14:16 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 00:14:16 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 00:14:16 --> inside retrieving locations 
INFO  - 2013-11-14 00:14:16 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 00:14:16 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 00:14:16 --> Final output sent to browser
DEBUG - 2013-11-14 00:14:16 --> Total execution time: 0.1400
DEBUG - 2013-11-14 00:14:19 --> Config Class Initialized
DEBUG - 2013-11-14 00:14:19 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:14:19 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:14:19 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:14:19 --> URI Class Initialized
DEBUG - 2013-11-14 00:14:19 --> Router Class Initialized
DEBUG - 2013-11-14 00:14:19 --> Output Class Initialized
DEBUG - 2013-11-14 00:14:19 --> Security Class Initialized
DEBUG - 2013-11-14 00:14:19 --> Input Class Initialized
DEBUG - 2013-11-14 00:14:19 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:14:19 --> Language Class Initialized
DEBUG - 2013-11-14 00:14:19 --> Loader Class Initialized
DEBUG - 2013-11-14 00:14:19 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:14:19 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:14:19 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:14:19 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:14:19 --> Session Class Initialized
DEBUG - 2013-11-14 00:14:19 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:14:19 --> Session routines successfully run
DEBUG - 2013-11-14 00:14:19 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:14:19 --> Controller Class Initialized
DEBUG - 2013-11-14 00:14:19 --> Model Class Initialized
DEBUG - 2013-11-14 00:14:19 --> Model Class Initialized
DEBUG - 2013-11-14 00:14:19 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:14:19 --> after session initialization................
INFO  - 2013-11-14 00:14:19 --> inside retrieving pharmacy by location id 1
INFO  - 2013-11-14 00:14:19 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '1'
LIMIT 25
DEBUG - 2013-11-14 00:14:19 --> Final output sent to browser
DEBUG - 2013-11-14 00:14:19 --> Total execution time: 0.1080
DEBUG - 2013-11-14 00:14:26 --> Config Class Initialized
DEBUG - 2013-11-14 00:14:26 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:14:26 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:14:26 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:14:26 --> URI Class Initialized
DEBUG - 2013-11-14 00:14:26 --> Router Class Initialized
DEBUG - 2013-11-14 00:14:26 --> Output Class Initialized
DEBUG - 2013-11-14 00:14:26 --> Security Class Initialized
DEBUG - 2013-11-14 00:14:26 --> Input Class Initialized
DEBUG - 2013-11-14 00:14:26 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:14:26 --> Language Class Initialized
DEBUG - 2013-11-14 00:14:26 --> Loader Class Initialized
DEBUG - 2013-11-14 00:14:26 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:14:26 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:14:26 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:14:26 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:14:26 --> Session Class Initialized
DEBUG - 2013-11-14 00:14:26 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:14:26 --> Session routines successfully run
DEBUG - 2013-11-14 00:14:26 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:14:26 --> Controller Class Initialized
DEBUG - 2013-11-14 00:14:26 --> Model Class Initialized
DEBUG - 2013-11-14 00:14:26 --> Model Class Initialized
DEBUG - 2013-11-14 00:14:26 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:14:26 --> after session initialization................
INFO  - 2013-11-14 00:14:26 --> inside retrieving pharmacy by location id 2
INFO  - 2013-11-14 00:14:26 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '2'
LIMIT 25
DEBUG - 2013-11-14 00:14:26 --> Final output sent to browser
DEBUG - 2013-11-14 00:14:26 --> Total execution time: 0.0690
DEBUG - 2013-11-14 00:14:35 --> Config Class Initialized
DEBUG - 2013-11-14 00:14:35 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:14:35 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:14:35 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:14:35 --> URI Class Initialized
DEBUG - 2013-11-14 00:14:35 --> Router Class Initialized
DEBUG - 2013-11-14 00:14:35 --> Output Class Initialized
DEBUG - 2013-11-14 00:14:35 --> Security Class Initialized
DEBUG - 2013-11-14 00:14:35 --> Input Class Initialized
DEBUG - 2013-11-14 00:14:35 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:14:35 --> Language Class Initialized
DEBUG - 2013-11-14 00:14:35 --> Loader Class Initialized
DEBUG - 2013-11-14 00:14:35 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:14:35 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:14:35 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:14:35 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:14:35 --> Session Class Initialized
DEBUG - 2013-11-14 00:14:35 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:14:35 --> Session routines successfully run
DEBUG - 2013-11-14 00:14:35 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:14:35 --> Controller Class Initialized
DEBUG - 2013-11-14 00:14:35 --> Model Class Initialized
DEBUG - 2013-11-14 00:14:35 --> Model Class Initialized
DEBUG - 2013-11-14 00:14:35 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:14:35 --> after session initialization................
INFO  - 2013-11-14 00:14:35 --> article id is 14
DEBUG - 2013-11-14 00:14:35 --> Final output sent to browser
DEBUG - 2013-11-14 00:14:35 --> Total execution time: 0.0610
DEBUG - 2013-11-14 00:16:27 --> Config Class Initialized
DEBUG - 2013-11-14 00:16:27 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:16:27 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:16:27 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:16:27 --> URI Class Initialized
DEBUG - 2013-11-14 00:16:27 --> Router Class Initialized
DEBUG - 2013-11-14 00:16:27 --> Output Class Initialized
DEBUG - 2013-11-14 00:16:27 --> Security Class Initialized
DEBUG - 2013-11-14 00:16:27 --> Input Class Initialized
DEBUG - 2013-11-14 00:16:27 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:16:27 --> Language Class Initialized
DEBUG - 2013-11-14 00:16:27 --> Loader Class Initialized
DEBUG - 2013-11-14 00:16:27 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:16:27 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:16:27 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:16:27 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:16:27 --> Session Class Initialized
DEBUG - 2013-11-14 00:16:27 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:16:27 --> Session routines successfully run
DEBUG - 2013-11-14 00:16:27 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:16:27 --> Controller Class Initialized
DEBUG - 2013-11-14 00:16:27 --> Model Class Initialized
DEBUG - 2013-11-14 00:16:27 --> Model Class Initialized
DEBUG - 2013-11-14 00:16:27 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:16:27 --> after session initialization................
INFO  - 2013-11-14 00:16:27 --> inside the auto suggest page.................
INFO  - 2013-11-14 00:16:27 --> after the list array.................
INFO  - 2013-11-14 00:16:27 --> after retrieving the data from db.................
INFO  - 2013-11-14 00:16:27 --> looping.................
INFO  - 2013-11-14 00:16:27 --> looping.................
INFO  - 2013-11-14 00:16:27 --> looping.................
INFO  - 2013-11-14 00:16:27 --> looping.................
INFO  - 2013-11-14 00:16:27 --> looping.................
INFO  - 2013-11-14 00:16:27 --> looping.................
INFO  - 2013-11-14 00:16:27 --> looping.................
INFO  - 2013-11-14 00:16:27 --> looping.................
INFO  - 2013-11-14 00:16:27 --> looping.................
INFO  - 2013-11-14 00:16:27 --> looping.................
INFO  - 2013-11-14 00:16:27 --> looping.................
INFO  - 2013-11-14 00:16:27 --> looping.................
INFO  - 2013-11-14 00:16:27 --> looping.................
INFO  - 2013-11-14 00:16:27 --> looping.................
INFO  - 2013-11-14 00:16:27 --> looping.................
INFO  - 2013-11-14 00:16:27 --> looping.................
INFO  - 2013-11-14 00:16:27 --> looping.................
INFO  - 2013-11-14 00:16:27 --> looping.................
DEBUG - 2013-11-14 00:16:27 --> Final output sent to browser
DEBUG - 2013-11-14 00:16:27 --> Total execution time: 0.1010
DEBUG - 2013-11-14 00:16:28 --> Config Class Initialized
DEBUG - 2013-11-14 00:16:28 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:16:28 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:16:28 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:16:28 --> URI Class Initialized
DEBUG - 2013-11-14 00:16:28 --> Router Class Initialized
DEBUG - 2013-11-14 00:16:28 --> Output Class Initialized
DEBUG - 2013-11-14 00:16:28 --> Security Class Initialized
DEBUG - 2013-11-14 00:16:28 --> Input Class Initialized
DEBUG - 2013-11-14 00:16:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:16:28 --> Language Class Initialized
DEBUG - 2013-11-14 00:16:28 --> Loader Class Initialized
DEBUG - 2013-11-14 00:16:28 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:16:28 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:16:28 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:16:28 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:16:28 --> Session Class Initialized
DEBUG - 2013-11-14 00:16:28 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:16:28 --> Session routines successfully run
DEBUG - 2013-11-14 00:16:28 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:16:28 --> Controller Class Initialized
DEBUG - 2013-11-14 00:16:28 --> Model Class Initialized
DEBUG - 2013-11-14 00:16:28 --> Model Class Initialized
DEBUG - 2013-11-14 00:16:28 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:16:28 --> after session initialization................
INFO  - 2013-11-14 00:16:28 --> inside the auto suggest page.................
INFO  - 2013-11-14 00:16:28 --> after the list array.................
INFO  - 2013-11-14 00:16:28 --> after retrieving the data from db.................
INFO  - 2013-11-14 00:16:28 --> looping.................
INFO  - 2013-11-14 00:16:28 --> looping.................
INFO  - 2013-11-14 00:16:28 --> looping.................
INFO  - 2013-11-14 00:16:28 --> looping.................
DEBUG - 2013-11-14 00:16:28 --> Final output sent to browser
DEBUG - 2013-11-14 00:16:28 --> Total execution time: 0.1000
DEBUG - 2013-11-14 00:16:28 --> Config Class Initialized
DEBUG - 2013-11-14 00:16:28 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:16:28 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:16:28 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:16:28 --> URI Class Initialized
DEBUG - 2013-11-14 00:16:28 --> Router Class Initialized
DEBUG - 2013-11-14 00:16:28 --> Output Class Initialized
DEBUG - 2013-11-14 00:16:28 --> Security Class Initialized
DEBUG - 2013-11-14 00:16:28 --> Input Class Initialized
DEBUG - 2013-11-14 00:16:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:16:28 --> Language Class Initialized
DEBUG - 2013-11-14 00:16:28 --> Loader Class Initialized
DEBUG - 2013-11-14 00:16:28 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:16:28 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:16:28 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:16:28 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:16:28 --> Session Class Initialized
DEBUG - 2013-11-14 00:16:28 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:16:28 --> Session routines successfully run
DEBUG - 2013-11-14 00:16:28 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:16:28 --> Controller Class Initialized
DEBUG - 2013-11-14 00:16:28 --> Model Class Initialized
DEBUG - 2013-11-14 00:16:28 --> Model Class Initialized
DEBUG - 2013-11-14 00:16:28 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:16:28 --> after session initialization................
INFO  - 2013-11-14 00:16:28 --> inside the auto suggest page.................
INFO  - 2013-11-14 00:16:28 --> after the list array.................
INFO  - 2013-11-14 00:16:28 --> after retrieving the data from db.................
INFO  - 2013-11-14 00:16:28 --> looping.................
INFO  - 2013-11-14 00:16:28 --> looping.................
DEBUG - 2013-11-14 00:16:28 --> Final output sent to browser
DEBUG - 2013-11-14 00:16:28 --> Total execution time: 0.0900
DEBUG - 2013-11-14 00:16:31 --> Config Class Initialized
DEBUG - 2013-11-14 00:16:31 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:16:31 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:16:31 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:16:31 --> URI Class Initialized
DEBUG - 2013-11-14 00:16:31 --> Router Class Initialized
DEBUG - 2013-11-14 00:16:31 --> Output Class Initialized
DEBUG - 2013-11-14 00:16:31 --> Security Class Initialized
DEBUG - 2013-11-14 00:16:31 --> Input Class Initialized
DEBUG - 2013-11-14 00:16:31 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:16:31 --> Language Class Initialized
DEBUG - 2013-11-14 00:16:31 --> Loader Class Initialized
DEBUG - 2013-11-14 00:16:31 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:16:31 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:16:31 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:16:31 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:16:31 --> Session Class Initialized
DEBUG - 2013-11-14 00:16:31 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:16:31 --> Session routines successfully run
DEBUG - 2013-11-14 00:16:31 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:16:31 --> Controller Class Initialized
DEBUG - 2013-11-14 00:16:31 --> Model Class Initialized
DEBUG - 2013-11-14 00:16:31 --> Model Class Initialized
DEBUG - 2013-11-14 00:16:31 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:16:31 --> after session initialization................
INFO  - 2013-11-14 00:16:31 --> article id is 5
DEBUG - 2013-11-14 00:16:31 --> Final output sent to browser
DEBUG - 2013-11-14 00:16:31 --> Total execution time: 0.0450
DEBUG - 2013-11-14 00:16:44 --> Config Class Initialized
DEBUG - 2013-11-14 00:16:44 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:16:44 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:16:44 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:16:44 --> URI Class Initialized
DEBUG - 2013-11-14 00:16:44 --> Router Class Initialized
DEBUG - 2013-11-14 00:16:44 --> Output Class Initialized
DEBUG - 2013-11-14 00:16:44 --> Security Class Initialized
DEBUG - 2013-11-14 00:16:44 --> Input Class Initialized
DEBUG - 2013-11-14 00:16:44 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:16:44 --> Language Class Initialized
DEBUG - 2013-11-14 00:16:44 --> Loader Class Initialized
DEBUG - 2013-11-14 00:16:44 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:16:44 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:16:44 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:16:44 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:16:44 --> Session Class Initialized
DEBUG - 2013-11-14 00:16:44 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:16:44 --> Session routines successfully run
DEBUG - 2013-11-14 00:16:44 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:16:44 --> Controller Class Initialized
DEBUG - 2013-11-14 00:16:44 --> Model Class Initialized
DEBUG - 2013-11-14 00:16:44 --> Model Class Initialized
DEBUG - 2013-11-14 00:16:44 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:16:44 --> after session initialization................
INFO  - 2013-11-14 00:16:44 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 00:16:44 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 00:16:44 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 00:16:44 --> inside retrieving locations 
INFO  - 2013-11-14 00:16:44 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 00:16:44 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 00:16:44 --> Final output sent to browser
DEBUG - 2013-11-14 00:16:44 --> Total execution time: 0.1030
DEBUG - 2013-11-14 00:16:46 --> Config Class Initialized
DEBUG - 2013-11-14 00:16:46 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:16:46 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:16:46 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:16:46 --> URI Class Initialized
DEBUG - 2013-11-14 00:16:46 --> Router Class Initialized
DEBUG - 2013-11-14 00:16:46 --> Output Class Initialized
DEBUG - 2013-11-14 00:16:46 --> Security Class Initialized
DEBUG - 2013-11-14 00:16:46 --> Input Class Initialized
DEBUG - 2013-11-14 00:16:46 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:16:46 --> Language Class Initialized
DEBUG - 2013-11-14 00:16:46 --> Loader Class Initialized
DEBUG - 2013-11-14 00:16:46 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:16:46 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:16:46 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:16:46 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:16:46 --> Session Class Initialized
DEBUG - 2013-11-14 00:16:46 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:16:46 --> Session routines successfully run
DEBUG - 2013-11-14 00:16:46 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:16:46 --> Controller Class Initialized
DEBUG - 2013-11-14 00:16:46 --> Model Class Initialized
DEBUG - 2013-11-14 00:16:46 --> Model Class Initialized
DEBUG - 2013-11-14 00:16:46 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:16:46 --> after session initialization................
INFO  - 2013-11-14 00:16:46 --> article id is 3
DEBUG - 2013-11-14 00:16:46 --> Final output sent to browser
DEBUG - 2013-11-14 00:16:46 --> Total execution time: 0.0620
DEBUG - 2013-11-14 00:16:50 --> Config Class Initialized
DEBUG - 2013-11-14 00:16:50 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:16:50 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:16:50 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:16:50 --> URI Class Initialized
DEBUG - 2013-11-14 00:16:50 --> Router Class Initialized
DEBUG - 2013-11-14 00:16:50 --> Output Class Initialized
DEBUG - 2013-11-14 00:16:50 --> Security Class Initialized
DEBUG - 2013-11-14 00:16:50 --> Input Class Initialized
DEBUG - 2013-11-14 00:16:50 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:16:50 --> Language Class Initialized
DEBUG - 2013-11-14 00:16:50 --> Loader Class Initialized
DEBUG - 2013-11-14 00:16:50 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:16:50 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:16:50 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:16:50 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:16:50 --> Session Class Initialized
DEBUG - 2013-11-14 00:16:50 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:16:50 --> Session routines successfully run
DEBUG - 2013-11-14 00:16:50 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:16:50 --> Controller Class Initialized
DEBUG - 2013-11-14 00:16:50 --> Model Class Initialized
DEBUG - 2013-11-14 00:16:50 --> Model Class Initialized
DEBUG - 2013-11-14 00:16:50 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:16:50 --> after session initialization................
INFO  - 2013-11-14 00:16:50 --> article id is 6
DEBUG - 2013-11-14 00:16:50 --> Final output sent to browser
DEBUG - 2013-11-14 00:16:50 --> Total execution time: 0.0480
DEBUG - 2013-11-14 00:16:58 --> Config Class Initialized
DEBUG - 2013-11-14 00:16:58 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:16:58 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:16:58 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:16:58 --> URI Class Initialized
DEBUG - 2013-11-14 00:16:58 --> Router Class Initialized
DEBUG - 2013-11-14 00:16:58 --> Output Class Initialized
DEBUG - 2013-11-14 00:16:58 --> Security Class Initialized
DEBUG - 2013-11-14 00:16:58 --> Input Class Initialized
DEBUG - 2013-11-14 00:16:58 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:16:58 --> Language Class Initialized
DEBUG - 2013-11-14 00:16:58 --> Loader Class Initialized
DEBUG - 2013-11-14 00:16:58 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:16:58 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:16:58 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:16:58 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:16:58 --> Session Class Initialized
DEBUG - 2013-11-14 00:16:58 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:16:58 --> Session routines successfully run
DEBUG - 2013-11-14 00:16:58 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:16:58 --> Controller Class Initialized
DEBUG - 2013-11-14 00:16:58 --> Model Class Initialized
DEBUG - 2013-11-14 00:16:58 --> Model Class Initialized
DEBUG - 2013-11-14 00:16:58 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:16:58 --> after session initialization................
INFO  - 2013-11-14 00:16:58 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 00:16:58 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 00:16:58 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 00:16:58 --> inside retrieving locations 
INFO  - 2013-11-14 00:16:58 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 00:16:58 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 00:16:58 --> Final output sent to browser
DEBUG - 2013-11-14 00:16:58 --> Total execution time: 0.0690
DEBUG - 2013-11-14 00:16:58 --> Config Class Initialized
DEBUG - 2013-11-14 00:16:58 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:16:58 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:16:58 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:16:58 --> URI Class Initialized
DEBUG - 2013-11-14 00:16:58 --> Router Class Initialized
DEBUG - 2013-11-14 00:16:59 --> Output Class Initialized
DEBUG - 2013-11-14 00:16:59 --> Security Class Initialized
DEBUG - 2013-11-14 00:16:59 --> Input Class Initialized
DEBUG - 2013-11-14 00:16:59 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:16:59 --> Language Class Initialized
DEBUG - 2013-11-14 00:16:59 --> Loader Class Initialized
DEBUG - 2013-11-14 00:16:59 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:16:59 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:16:59 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:16:59 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:16:59 --> Session Class Initialized
DEBUG - 2013-11-14 00:16:59 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:16:59 --> Session routines successfully run
DEBUG - 2013-11-14 00:16:59 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:16:59 --> Controller Class Initialized
DEBUG - 2013-11-14 00:16:59 --> Model Class Initialized
DEBUG - 2013-11-14 00:16:59 --> Model Class Initialized
DEBUG - 2013-11-14 00:16:59 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:16:59 --> after session initialization................
INFO  - 2013-11-14 00:16:59 --> inside retrieve most commented forum topic 
INFO  - 2013-11-14 00:16:59 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
INFO  - 2013-11-14 00:16:59 --> inside retrieving first 20 topics 
INFO  - 2013-11-14 00:16:59 --> SELECT `t`.`id_topicforum`, upper(t.name) as name, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
LIMIT 20
INFO  - 2013-11-14 00:16:59 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-14 00:16:59 --> SELECT `ff`.`id_forum` as id, `ff`.`name`, count(f.id_forum) as sub_forum
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` is null 
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`
INFO  - 2013-11-14 00:16:59 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-14 00:16:59 --> inside retrieving comments topic id and drug id is 1
INFO  - 2013-11-14 00:16:59 --> SELECT `tc`.`id_topiccomment`, `tc`.`comment`, `tc`.`timecreated`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-14 00:16:59 --> inside retrieving comments topic id 1
INFO  - 2013-11-14 00:16:59 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
INFO  - 2013-11-14 00:16:59 --> after forums has been clicked.................
INFO  - 2013-11-14 00:16:59 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-11-14 00:16:59 --> File loaded: ../pharmaray-application/views/forum.php
DEBUG - 2013-11-14 00:16:59 --> Final output sent to browser
DEBUG - 2013-11-14 00:16:59 --> Total execution time: 0.0920
DEBUG - 2013-11-14 00:16:59 --> Config Class Initialized
DEBUG - 2013-11-14 00:16:59 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:16:59 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:16:59 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:16:59 --> URI Class Initialized
DEBUG - 2013-11-14 00:16:59 --> Router Class Initialized
DEBUG - 2013-11-14 00:16:59 --> Output Class Initialized
DEBUG - 2013-11-14 00:16:59 --> Security Class Initialized
DEBUG - 2013-11-14 00:16:59 --> Input Class Initialized
DEBUG - 2013-11-14 00:16:59 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:16:59 --> Language Class Initialized
DEBUG - 2013-11-14 00:16:59 --> Loader Class Initialized
DEBUG - 2013-11-14 00:16:59 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:16:59 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:16:59 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:16:59 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:16:59 --> Session Class Initialized
DEBUG - 2013-11-14 00:16:59 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:16:59 --> Session routines successfully run
DEBUG - 2013-11-14 00:16:59 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:16:59 --> Controller Class Initialized
DEBUG - 2013-11-14 00:16:59 --> Model Class Initialized
DEBUG - 2013-11-14 00:16:59 --> Model Class Initialized
DEBUG - 2013-11-14 00:16:59 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:16:59 --> after session initialization................
ERROR - 2013-11-14 00:16:59 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-14 00:16:59 --> Config Class Initialized
DEBUG - 2013-11-14 00:16:59 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:16:59 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:16:59 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:16:59 --> URI Class Initialized
DEBUG - 2013-11-14 00:16:59 --> Router Class Initialized
ERROR - 2013-11-14 00:16:59 --> 404 Page Not Found --> css
DEBUG - 2013-11-14 00:16:59 --> Config Class Initialized
DEBUG - 2013-11-14 00:16:59 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:16:59 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:16:59 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:16:59 --> URI Class Initialized
DEBUG - 2013-11-14 00:16:59 --> Router Class Initialized
DEBUG - 2013-11-14 00:16:59 --> Output Class Initialized
DEBUG - 2013-11-14 00:16:59 --> Security Class Initialized
DEBUG - 2013-11-14 00:16:59 --> Input Class Initialized
DEBUG - 2013-11-14 00:16:59 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:16:59 --> Language Class Initialized
DEBUG - 2013-11-14 00:16:59 --> Loader Class Initialized
DEBUG - 2013-11-14 00:16:59 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:16:59 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:16:59 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:16:59 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:16:59 --> Session Class Initialized
DEBUG - 2013-11-14 00:16:59 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:16:59 --> Session routines successfully run
DEBUG - 2013-11-14 00:16:59 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:16:59 --> Controller Class Initialized
DEBUG - 2013-11-14 00:16:59 --> Model Class Initialized
DEBUG - 2013-11-14 00:16:59 --> Model Class Initialized
DEBUG - 2013-11-14 00:16:59 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:16:59 --> after session initialization................
INFO  - 2013-11-14 00:16:59 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 00:16:59 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 00:16:59 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 00:16:59 --> inside retrieving locations 
INFO  - 2013-11-14 00:16:59 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 00:16:59 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 00:16:59 --> Final output sent to browser
DEBUG - 2013-11-14 00:16:59 --> Total execution time: 0.0720
DEBUG - 2013-11-14 00:17:00 --> Config Class Initialized
DEBUG - 2013-11-14 00:17:00 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:17:00 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:17:00 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:17:00 --> URI Class Initialized
DEBUG - 2013-11-14 00:17:00 --> Router Class Initialized
DEBUG - 2013-11-14 00:17:00 --> Output Class Initialized
DEBUG - 2013-11-14 00:17:00 --> Security Class Initialized
DEBUG - 2013-11-14 00:17:00 --> Input Class Initialized
DEBUG - 2013-11-14 00:17:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:17:00 --> Language Class Initialized
DEBUG - 2013-11-14 00:17:00 --> Loader Class Initialized
DEBUG - 2013-11-14 00:17:00 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:17:00 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:17:00 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:17:00 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:17:00 --> Session Class Initialized
DEBUG - 2013-11-14 00:17:00 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:17:00 --> Session routines successfully run
DEBUG - 2013-11-14 00:17:00 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:17:00 --> Controller Class Initialized
DEBUG - 2013-11-14 00:17:00 --> Model Class Initialized
DEBUG - 2013-11-14 00:17:00 --> Model Class Initialized
DEBUG - 2013-11-14 00:17:00 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:17:00 --> after session initialization................
INFO  - 2013-11-14 00:17:00 --> article id is 3
DEBUG - 2013-11-14 00:17:00 --> Final output sent to browser
DEBUG - 2013-11-14 00:17:00 --> Total execution time: 0.0500
DEBUG - 2013-11-14 00:17:10 --> Config Class Initialized
DEBUG - 2013-11-14 00:17:10 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:17:10 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:17:10 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:17:10 --> URI Class Initialized
DEBUG - 2013-11-14 00:17:10 --> Router Class Initialized
DEBUG - 2013-11-14 00:17:10 --> Output Class Initialized
DEBUG - 2013-11-14 00:17:10 --> Security Class Initialized
DEBUG - 2013-11-14 00:17:10 --> Input Class Initialized
DEBUG - 2013-11-14 00:17:10 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:17:10 --> Language Class Initialized
DEBUG - 2013-11-14 00:17:10 --> Loader Class Initialized
DEBUG - 2013-11-14 00:17:10 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:17:10 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:17:10 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:17:10 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:17:10 --> Session Class Initialized
DEBUG - 2013-11-14 00:17:10 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:17:10 --> Session routines successfully run
DEBUG - 2013-11-14 00:17:10 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:17:10 --> Controller Class Initialized
DEBUG - 2013-11-14 00:17:10 --> Model Class Initialized
DEBUG - 2013-11-14 00:17:10 --> Model Class Initialized
DEBUG - 2013-11-14 00:17:10 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:17:10 --> after session initialization................
INFO  - 2013-11-14 00:17:10 --> article id is 6
DEBUG - 2013-11-14 00:17:10 --> Final output sent to browser
DEBUG - 2013-11-14 00:17:10 --> Total execution time: 0.0500
DEBUG - 2013-11-14 00:20:10 --> Config Class Initialized
DEBUG - 2013-11-14 00:20:10 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:20:10 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:20:10 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:20:10 --> URI Class Initialized
DEBUG - 2013-11-14 00:20:10 --> Router Class Initialized
DEBUG - 2013-11-14 00:20:10 --> Output Class Initialized
DEBUG - 2013-11-14 00:20:10 --> Security Class Initialized
DEBUG - 2013-11-14 00:20:10 --> Input Class Initialized
DEBUG - 2013-11-14 00:20:10 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:20:10 --> Language Class Initialized
DEBUG - 2013-11-14 00:20:10 --> Loader Class Initialized
DEBUG - 2013-11-14 00:20:10 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:20:10 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:20:10 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:20:10 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:20:10 --> Session Class Initialized
DEBUG - 2013-11-14 00:20:10 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:20:10 --> Session routines successfully run
DEBUG - 2013-11-14 00:20:10 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:20:10 --> Controller Class Initialized
DEBUG - 2013-11-14 00:20:10 --> Model Class Initialized
DEBUG - 2013-11-14 00:20:10 --> Model Class Initialized
DEBUG - 2013-11-14 00:20:10 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:20:10 --> after session initialization................
INFO  - 2013-11-14 00:20:10 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 00:20:10 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 00:20:10 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 00:20:10 --> inside retrieving locations 
INFO  - 2013-11-14 00:20:10 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 00:20:10 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 00:20:10 --> Final output sent to browser
DEBUG - 2013-11-14 00:20:10 --> Total execution time: 0.0810
DEBUG - 2013-11-14 00:20:14 --> Config Class Initialized
DEBUG - 2013-11-14 00:20:14 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:20:14 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:20:14 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:20:14 --> URI Class Initialized
DEBUG - 2013-11-14 00:20:14 --> Router Class Initialized
DEBUG - 2013-11-14 00:20:14 --> Output Class Initialized
DEBUG - 2013-11-14 00:20:14 --> Security Class Initialized
DEBUG - 2013-11-14 00:20:14 --> Input Class Initialized
DEBUG - 2013-11-14 00:20:14 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:20:14 --> Language Class Initialized
DEBUG - 2013-11-14 00:20:15 --> Loader Class Initialized
DEBUG - 2013-11-14 00:20:15 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:20:15 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:20:15 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:20:15 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:20:15 --> Session Class Initialized
DEBUG - 2013-11-14 00:20:15 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:20:15 --> Session routines successfully run
DEBUG - 2013-11-14 00:20:15 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:20:15 --> Controller Class Initialized
DEBUG - 2013-11-14 00:20:15 --> Model Class Initialized
DEBUG - 2013-11-14 00:20:15 --> Model Class Initialized
DEBUG - 2013-11-14 00:20:15 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:20:15 --> after session initialization................
INFO  - 2013-11-14 00:20:15 --> article id is 4
DEBUG - 2013-11-14 00:20:15 --> Final output sent to browser
DEBUG - 2013-11-14 00:20:15 --> Total execution time: 0.0480
DEBUG - 2013-11-14 00:20:26 --> Config Class Initialized
DEBUG - 2013-11-14 00:20:26 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:20:26 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:20:26 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:20:26 --> URI Class Initialized
DEBUG - 2013-11-14 00:20:26 --> Router Class Initialized
DEBUG - 2013-11-14 00:20:26 --> Output Class Initialized
DEBUG - 2013-11-14 00:20:26 --> Security Class Initialized
DEBUG - 2013-11-14 00:20:26 --> Input Class Initialized
DEBUG - 2013-11-14 00:20:26 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:20:26 --> Language Class Initialized
DEBUG - 2013-11-14 00:20:26 --> Loader Class Initialized
DEBUG - 2013-11-14 00:20:26 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:20:26 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:20:26 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:20:26 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:20:26 --> Session Class Initialized
DEBUG - 2013-11-14 00:20:26 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:20:26 --> Session routines successfully run
DEBUG - 2013-11-14 00:20:26 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:20:26 --> Controller Class Initialized
DEBUG - 2013-11-14 00:20:26 --> Model Class Initialized
DEBUG - 2013-11-14 00:20:26 --> Model Class Initialized
DEBUG - 2013-11-14 00:20:26 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:20:26 --> after session initialization................
INFO  - 2013-11-14 00:20:26 --> article id is 4
DEBUG - 2013-11-14 00:20:26 --> Final output sent to browser
DEBUG - 2013-11-14 00:20:26 --> Total execution time: 0.0490
DEBUG - 2013-11-14 00:21:19 --> Config Class Initialized
DEBUG - 2013-11-14 00:21:19 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:21:19 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:21:19 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:21:19 --> URI Class Initialized
DEBUG - 2013-11-14 00:21:19 --> Router Class Initialized
DEBUG - 2013-11-14 00:21:19 --> Output Class Initialized
DEBUG - 2013-11-14 00:21:19 --> Security Class Initialized
DEBUG - 2013-11-14 00:21:19 --> Input Class Initialized
DEBUG - 2013-11-14 00:21:19 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:21:19 --> Language Class Initialized
DEBUG - 2013-11-14 00:21:19 --> Loader Class Initialized
DEBUG - 2013-11-14 00:21:19 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:21:19 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:21:19 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:21:19 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:21:20 --> Session Class Initialized
DEBUG - 2013-11-14 00:21:20 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:21:20 --> Session routines successfully run
DEBUG - 2013-11-14 00:21:20 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:21:20 --> Controller Class Initialized
DEBUG - 2013-11-14 00:21:20 --> Model Class Initialized
DEBUG - 2013-11-14 00:21:20 --> Model Class Initialized
DEBUG - 2013-11-14 00:21:20 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:21:20 --> after session initialization................
INFO  - 2013-11-14 00:21:20 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 00:21:20 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 00:21:20 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 00:21:20 --> inside retrieving locations 
INFO  - 2013-11-14 00:21:20 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 00:21:20 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 00:21:20 --> Final output sent to browser
DEBUG - 2013-11-14 00:21:20 --> Total execution time: 0.0570
DEBUG - 2013-11-14 00:21:20 --> Config Class Initialized
DEBUG - 2013-11-14 00:21:20 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:21:20 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:21:20 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:21:20 --> URI Class Initialized
DEBUG - 2013-11-14 00:21:20 --> Router Class Initialized
DEBUG - 2013-11-14 00:21:20 --> Output Class Initialized
DEBUG - 2013-11-14 00:21:20 --> Security Class Initialized
DEBUG - 2013-11-14 00:21:20 --> Input Class Initialized
DEBUG - 2013-11-14 00:21:20 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:21:20 --> Language Class Initialized
DEBUG - 2013-11-14 00:21:20 --> Loader Class Initialized
DEBUG - 2013-11-14 00:21:20 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:21:20 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:21:20 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:21:21 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:21:21 --> Session Class Initialized
DEBUG - 2013-11-14 00:21:21 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:21:21 --> Session routines successfully run
DEBUG - 2013-11-14 00:21:21 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:21:21 --> Controller Class Initialized
DEBUG - 2013-11-14 00:21:21 --> Model Class Initialized
DEBUG - 2013-11-14 00:21:21 --> Model Class Initialized
DEBUG - 2013-11-14 00:21:21 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:21:21 --> after session initialization................
INFO  - 2013-11-14 00:21:21 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 00:21:21 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 00:21:21 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 00:21:21 --> inside retrieving locations 
INFO  - 2013-11-14 00:21:21 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 00:21:21 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 00:21:21 --> Final output sent to browser
DEBUG - 2013-11-14 00:21:21 --> Total execution time: 0.0870
DEBUG - 2013-11-14 00:21:26 --> Config Class Initialized
DEBUG - 2013-11-14 00:21:26 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:21:26 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:21:26 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:21:26 --> URI Class Initialized
DEBUG - 2013-11-14 00:21:26 --> Router Class Initialized
DEBUG - 2013-11-14 00:21:26 --> Output Class Initialized
DEBUG - 2013-11-14 00:21:26 --> Security Class Initialized
DEBUG - 2013-11-14 00:21:26 --> Input Class Initialized
DEBUG - 2013-11-14 00:21:26 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:21:26 --> Language Class Initialized
DEBUG - 2013-11-14 00:21:26 --> Loader Class Initialized
DEBUG - 2013-11-14 00:21:27 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:21:27 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:21:27 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:21:27 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:21:27 --> Session Class Initialized
DEBUG - 2013-11-14 00:21:27 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:21:27 --> Session routines successfully run
DEBUG - 2013-11-14 00:21:27 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:21:27 --> Controller Class Initialized
DEBUG - 2013-11-14 00:21:27 --> Model Class Initialized
DEBUG - 2013-11-14 00:21:27 --> Model Class Initialized
DEBUG - 2013-11-14 00:21:27 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:21:27 --> after session initialization................
INFO  - 2013-11-14 00:21:27 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>3
INFO  - 2013-11-14 00:21:27 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` =  '3'
DEBUG - 2013-11-14 00:21:27 --> Final output sent to browser
DEBUG - 2013-11-14 00:21:27 --> Total execution time: 0.0480
DEBUG - 2013-11-14 00:21:50 --> Config Class Initialized
DEBUG - 2013-11-14 00:21:50 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:21:50 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:21:50 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:21:50 --> URI Class Initialized
DEBUG - 2013-11-14 00:21:50 --> Router Class Initialized
DEBUG - 2013-11-14 00:21:50 --> Output Class Initialized
DEBUG - 2013-11-14 00:21:50 --> Security Class Initialized
DEBUG - 2013-11-14 00:21:50 --> Input Class Initialized
DEBUG - 2013-11-14 00:21:50 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:21:50 --> Language Class Initialized
DEBUG - 2013-11-14 00:21:50 --> Loader Class Initialized
DEBUG - 2013-11-14 00:21:50 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:21:50 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:21:50 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:21:50 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:21:50 --> Session Class Initialized
DEBUG - 2013-11-14 00:21:50 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:21:50 --> Session routines successfully run
DEBUG - 2013-11-14 00:21:50 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:21:50 --> Controller Class Initialized
DEBUG - 2013-11-14 00:21:50 --> Model Class Initialized
DEBUG - 2013-11-14 00:21:50 --> Model Class Initialized
DEBUG - 2013-11-14 00:21:50 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:21:50 --> after session initialization................
INFO  - 2013-11-14 00:21:50 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 00:21:50 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 00:21:50 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 00:21:50 --> inside retrieving locations 
INFO  - 2013-11-14 00:21:50 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 00:21:50 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 00:21:50 --> Final output sent to browser
DEBUG - 2013-11-14 00:21:50 --> Total execution time: 0.0910
DEBUG - 2013-11-14 00:21:54 --> Config Class Initialized
DEBUG - 2013-11-14 00:21:54 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:21:54 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:21:54 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:21:54 --> URI Class Initialized
DEBUG - 2013-11-14 00:21:54 --> Router Class Initialized
DEBUG - 2013-11-14 00:21:54 --> Output Class Initialized
DEBUG - 2013-11-14 00:21:54 --> Security Class Initialized
DEBUG - 2013-11-14 00:21:54 --> Input Class Initialized
DEBUG - 2013-11-14 00:21:54 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:21:54 --> Language Class Initialized
DEBUG - 2013-11-14 00:21:54 --> Loader Class Initialized
DEBUG - 2013-11-14 00:21:54 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:21:54 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:21:54 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:21:54 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:21:54 --> Session Class Initialized
DEBUG - 2013-11-14 00:21:54 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:21:54 --> Session routines successfully run
DEBUG - 2013-11-14 00:21:54 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:21:54 --> Controller Class Initialized
DEBUG - 2013-11-14 00:21:54 --> Model Class Initialized
DEBUG - 2013-11-14 00:21:54 --> Model Class Initialized
DEBUG - 2013-11-14 00:21:54 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:21:54 --> after session initialization................
INFO  - 2013-11-14 00:21:54 --> inside the auto suggest page.................
INFO  - 2013-11-14 00:21:54 --> after the list array.................
INFO  - 2013-11-14 00:21:54 --> after retrieving the data from db.................
INFO  - 2013-11-14 00:21:54 --> looping.................
INFO  - 2013-11-14 00:21:54 --> looping.................
INFO  - 2013-11-14 00:21:54 --> looping.................
INFO  - 2013-11-14 00:21:54 --> looping.................
INFO  - 2013-11-14 00:21:54 --> looping.................
INFO  - 2013-11-14 00:21:54 --> looping.................
INFO  - 2013-11-14 00:21:54 --> looping.................
INFO  - 2013-11-14 00:21:54 --> looping.................
INFO  - 2013-11-14 00:21:54 --> looping.................
INFO  - 2013-11-14 00:21:54 --> looping.................
INFO  - 2013-11-14 00:21:54 --> looping.................
INFO  - 2013-11-14 00:21:54 --> looping.................
INFO  - 2013-11-14 00:21:54 --> looping.................
INFO  - 2013-11-14 00:21:54 --> looping.................
INFO  - 2013-11-14 00:21:54 --> looping.................
INFO  - 2013-11-14 00:21:54 --> looping.................
INFO  - 2013-11-14 00:21:54 --> looping.................
INFO  - 2013-11-14 00:21:54 --> looping.................
DEBUG - 2013-11-14 00:21:54 --> Final output sent to browser
DEBUG - 2013-11-14 00:21:54 --> Total execution time: 0.0840
DEBUG - 2013-11-14 00:21:54 --> Config Class Initialized
DEBUG - 2013-11-14 00:21:54 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:21:54 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:21:54 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:21:54 --> URI Class Initialized
DEBUG - 2013-11-14 00:21:54 --> Router Class Initialized
DEBUG - 2013-11-14 00:21:54 --> Output Class Initialized
DEBUG - 2013-11-14 00:21:54 --> Security Class Initialized
DEBUG - 2013-11-14 00:21:54 --> Input Class Initialized
DEBUG - 2013-11-14 00:21:54 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:21:54 --> Language Class Initialized
DEBUG - 2013-11-14 00:21:54 --> Loader Class Initialized
DEBUG - 2013-11-14 00:21:54 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:21:54 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:21:54 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:21:54 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:21:54 --> Session Class Initialized
DEBUG - 2013-11-14 00:21:54 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:21:54 --> Session routines successfully run
DEBUG - 2013-11-14 00:21:54 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:21:54 --> Controller Class Initialized
DEBUG - 2013-11-14 00:21:54 --> Model Class Initialized
DEBUG - 2013-11-14 00:21:54 --> Model Class Initialized
DEBUG - 2013-11-14 00:21:54 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:21:54 --> after session initialization................
INFO  - 2013-11-14 00:21:54 --> inside the auto suggest page.................
INFO  - 2013-11-14 00:21:54 --> after the list array.................
INFO  - 2013-11-14 00:21:54 --> after retrieving the data from db.................
INFO  - 2013-11-14 00:21:54 --> looping.................
INFO  - 2013-11-14 00:21:54 --> looping.................
INFO  - 2013-11-14 00:21:54 --> looping.................
INFO  - 2013-11-14 00:21:54 --> looping.................
DEBUG - 2013-11-14 00:21:54 --> Final output sent to browser
DEBUG - 2013-11-14 00:21:54 --> Total execution time: 0.0950
DEBUG - 2013-11-14 00:21:57 --> Config Class Initialized
DEBUG - 2013-11-14 00:21:57 --> Hooks Class Initialized
DEBUG - 2013-11-14 00:21:57 --> Utf8 Class Initialized
DEBUG - 2013-11-14 00:21:57 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 00:21:57 --> URI Class Initialized
DEBUG - 2013-11-14 00:21:57 --> Router Class Initialized
DEBUG - 2013-11-14 00:21:57 --> Output Class Initialized
DEBUG - 2013-11-14 00:21:57 --> Security Class Initialized
DEBUG - 2013-11-14 00:21:57 --> Input Class Initialized
DEBUG - 2013-11-14 00:21:57 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 00:21:57 --> Language Class Initialized
DEBUG - 2013-11-14 00:21:57 --> Loader Class Initialized
DEBUG - 2013-11-14 00:21:57 --> Helper loaded: form_helper
DEBUG - 2013-11-14 00:21:57 --> Helper loaded: url_helper
DEBUG - 2013-11-14 00:21:57 --> Helper loaded: html_helper
DEBUG - 2013-11-14 00:21:57 --> Database Driver Class Initialized
DEBUG - 2013-11-14 00:21:57 --> Session Class Initialized
DEBUG - 2013-11-14 00:21:57 --> Helper loaded: string_helper
DEBUG - 2013-11-14 00:21:57 --> Session routines successfully run
DEBUG - 2013-11-14 00:21:57 --> Form Validation Class Initialized
DEBUG - 2013-11-14 00:21:57 --> Controller Class Initialized
DEBUG - 2013-11-14 00:21:57 --> Model Class Initialized
DEBUG - 2013-11-14 00:21:57 --> Model Class Initialized
DEBUG - 2013-11-14 00:21:57 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 00:21:57 --> after session initialization................
INFO  - 2013-11-14 00:21:57 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>5
INFO  - 2013-11-14 00:21:57 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` =  '5'
DEBUG - 2013-11-14 00:21:57 --> Final output sent to browser
DEBUG - 2013-11-14 00:21:57 --> Total execution time: 0.0460
DEBUG - 2013-11-14 06:46:39 --> Config Class Initialized
DEBUG - 2013-11-14 06:46:39 --> Hooks Class Initialized
DEBUG - 2013-11-14 06:46:39 --> Utf8 Class Initialized
DEBUG - 2013-11-14 06:46:39 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 06:46:39 --> URI Class Initialized
DEBUG - 2013-11-14 06:46:39 --> Router Class Initialized
DEBUG - 2013-11-14 06:46:39 --> Output Class Initialized
DEBUG - 2013-11-14 06:46:39 --> Security Class Initialized
DEBUG - 2013-11-14 06:46:39 --> Input Class Initialized
DEBUG - 2013-11-14 06:46:39 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 06:46:39 --> Language Class Initialized
DEBUG - 2013-11-14 06:46:39 --> Loader Class Initialized
DEBUG - 2013-11-14 06:46:39 --> Helper loaded: form_helper
DEBUG - 2013-11-14 06:46:39 --> Helper loaded: url_helper
DEBUG - 2013-11-14 06:46:39 --> Helper loaded: html_helper
DEBUG - 2013-11-14 06:46:39 --> Database Driver Class Initialized
DEBUG - 2013-11-14 06:46:39 --> Session Class Initialized
DEBUG - 2013-11-14 06:46:39 --> Helper loaded: string_helper
DEBUG - 2013-11-14 06:46:39 --> A session cookie was not found.
DEBUG - 2013-11-14 06:46:39 --> Session routines successfully run
DEBUG - 2013-11-14 06:46:39 --> Form Validation Class Initialized
DEBUG - 2013-11-14 06:46:39 --> Controller Class Initialized
DEBUG - 2013-11-14 06:46:39 --> Model Class Initialized
DEBUG - 2013-11-14 06:46:39 --> Model Class Initialized
DEBUG - 2013-11-14 06:46:39 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 06:46:39 --> after session initialization................
INFO  - 2013-11-14 06:46:39 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 06:46:39 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 06:46:39 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 06:46:39 --> inside retrieving locations 
INFO  - 2013-11-14 06:46:39 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 06:46:39 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 06:46:39 --> Final output sent to browser
DEBUG - 2013-11-14 06:46:39 --> Total execution time: 0.0700
DEBUG - 2013-11-14 06:46:41 --> Config Class Initialized
DEBUG - 2013-11-14 06:46:41 --> Hooks Class Initialized
DEBUG - 2013-11-14 06:46:41 --> Utf8 Class Initialized
DEBUG - 2013-11-14 06:46:41 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 06:46:41 --> URI Class Initialized
DEBUG - 2013-11-14 06:46:41 --> Router Class Initialized
DEBUG - 2013-11-14 06:46:41 --> Output Class Initialized
DEBUG - 2013-11-14 06:46:41 --> Security Class Initialized
DEBUG - 2013-11-14 06:46:41 --> Input Class Initialized
DEBUG - 2013-11-14 06:46:41 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 06:46:41 --> Language Class Initialized
DEBUG - 2013-11-14 06:46:42 --> Loader Class Initialized
DEBUG - 2013-11-14 06:46:42 --> Helper loaded: form_helper
DEBUG - 2013-11-14 06:46:42 --> Helper loaded: url_helper
DEBUG - 2013-11-14 06:46:42 --> Helper loaded: html_helper
DEBUG - 2013-11-14 06:46:42 --> Database Driver Class Initialized
DEBUG - 2013-11-14 06:46:42 --> Session Class Initialized
DEBUG - 2013-11-14 06:46:42 --> Helper loaded: string_helper
DEBUG - 2013-11-14 06:46:42 --> Session routines successfully run
DEBUG - 2013-11-14 06:46:42 --> Form Validation Class Initialized
DEBUG - 2013-11-14 06:46:42 --> Controller Class Initialized
DEBUG - 2013-11-14 06:46:42 --> Model Class Initialized
DEBUG - 2013-11-14 06:46:42 --> Model Class Initialized
DEBUG - 2013-11-14 06:46:42 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 06:46:42 --> after session initialization................
INFO  - 2013-11-14 06:46:42 --> inside retrieving pharmacy by location id 2
INFO  - 2013-11-14 06:46:42 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '2'
LIMIT 25
DEBUG - 2013-11-14 06:46:42 --> Final output sent to browser
DEBUG - 2013-11-14 06:46:42 --> Total execution time: 0.0490
DEBUG - 2013-11-14 06:46:45 --> Config Class Initialized
DEBUG - 2013-11-14 06:46:45 --> Hooks Class Initialized
DEBUG - 2013-11-14 06:46:45 --> Utf8 Class Initialized
DEBUG - 2013-11-14 06:46:45 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 06:46:45 --> URI Class Initialized
DEBUG - 2013-11-14 06:46:45 --> Router Class Initialized
DEBUG - 2013-11-14 06:46:45 --> Output Class Initialized
DEBUG - 2013-11-14 06:46:45 --> Security Class Initialized
DEBUG - 2013-11-14 06:46:45 --> Input Class Initialized
DEBUG - 2013-11-14 06:46:45 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 06:46:45 --> Language Class Initialized
DEBUG - 2013-11-14 06:46:45 --> Loader Class Initialized
DEBUG - 2013-11-14 06:46:45 --> Helper loaded: form_helper
DEBUG - 2013-11-14 06:46:45 --> Helper loaded: url_helper
DEBUG - 2013-11-14 06:46:45 --> Helper loaded: html_helper
DEBUG - 2013-11-14 06:46:45 --> Database Driver Class Initialized
DEBUG - 2013-11-14 06:46:45 --> Session Class Initialized
DEBUG - 2013-11-14 06:46:45 --> Helper loaded: string_helper
DEBUG - 2013-11-14 06:46:45 --> Session routines successfully run
DEBUG - 2013-11-14 06:46:45 --> Form Validation Class Initialized
DEBUG - 2013-11-14 06:46:45 --> Controller Class Initialized
DEBUG - 2013-11-14 06:46:45 --> Model Class Initialized
DEBUG - 2013-11-14 06:46:45 --> Model Class Initialized
DEBUG - 2013-11-14 06:46:45 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 06:46:45 --> after session initialization................
INFO  - 2013-11-14 06:46:45 --> inside the auto suggest page.................
INFO  - 2013-11-14 06:46:45 --> after the list array.................
INFO  - 2013-11-14 06:46:45 --> after retrieving the data from db.................
INFO  - 2013-11-14 06:46:45 --> looping.................
INFO  - 2013-11-14 06:46:45 --> looping.................
INFO  - 2013-11-14 06:46:45 --> looping.................
INFO  - 2013-11-14 06:46:45 --> looping.................
INFO  - 2013-11-14 06:46:45 --> looping.................
INFO  - 2013-11-14 06:46:45 --> looping.................
INFO  - 2013-11-14 06:46:45 --> looping.................
INFO  - 2013-11-14 06:46:45 --> looping.................
INFO  - 2013-11-14 06:46:45 --> looping.................
INFO  - 2013-11-14 06:46:45 --> looping.................
INFO  - 2013-11-14 06:46:45 --> looping.................
INFO  - 2013-11-14 06:46:45 --> looping.................
INFO  - 2013-11-14 06:46:45 --> looping.................
INFO  - 2013-11-14 06:46:45 --> looping.................
INFO  - 2013-11-14 06:46:45 --> looping.................
INFO  - 2013-11-14 06:46:45 --> looping.................
INFO  - 2013-11-14 06:46:45 --> looping.................
INFO  - 2013-11-14 06:46:45 --> looping.................
DEBUG - 2013-11-14 06:46:45 --> Final output sent to browser
DEBUG - 2013-11-14 06:46:45 --> Total execution time: 0.0700
DEBUG - 2013-11-14 06:46:46 --> Config Class Initialized
DEBUG - 2013-11-14 06:46:46 --> Hooks Class Initialized
DEBUG - 2013-11-14 06:46:46 --> Utf8 Class Initialized
DEBUG - 2013-11-14 06:46:46 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 06:46:46 --> URI Class Initialized
DEBUG - 2013-11-14 06:46:46 --> Router Class Initialized
DEBUG - 2013-11-14 06:46:46 --> Output Class Initialized
DEBUG - 2013-11-14 06:46:46 --> Security Class Initialized
DEBUG - 2013-11-14 06:46:46 --> Input Class Initialized
DEBUG - 2013-11-14 06:46:46 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 06:46:46 --> Language Class Initialized
DEBUG - 2013-11-14 06:46:46 --> Loader Class Initialized
DEBUG - 2013-11-14 06:46:46 --> Helper loaded: form_helper
DEBUG - 2013-11-14 06:46:46 --> Helper loaded: url_helper
DEBUG - 2013-11-14 06:46:46 --> Helper loaded: html_helper
DEBUG - 2013-11-14 06:46:46 --> Database Driver Class Initialized
DEBUG - 2013-11-14 06:46:46 --> Session Class Initialized
DEBUG - 2013-11-14 06:46:46 --> Helper loaded: string_helper
DEBUG - 2013-11-14 06:46:46 --> Session routines successfully run
DEBUG - 2013-11-14 06:46:46 --> Form Validation Class Initialized
DEBUG - 2013-11-14 06:46:46 --> Controller Class Initialized
DEBUG - 2013-11-14 06:46:46 --> Model Class Initialized
DEBUG - 2013-11-14 06:46:46 --> Model Class Initialized
DEBUG - 2013-11-14 06:46:46 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 06:46:46 --> after session initialization................
INFO  - 2013-11-14 06:46:46 --> inside the auto suggest page.................
INFO  - 2013-11-14 06:46:46 --> after the list array.................
INFO  - 2013-11-14 06:46:46 --> after retrieving the data from db.................
INFO  - 2013-11-14 06:46:46 --> looping.................
INFO  - 2013-11-14 06:46:46 --> looping.................
INFO  - 2013-11-14 06:46:46 --> looping.................
INFO  - 2013-11-14 06:46:46 --> looping.................
DEBUG - 2013-11-14 06:46:46 --> Final output sent to browser
DEBUG - 2013-11-14 06:46:46 --> Total execution time: 0.0690
DEBUG - 2013-11-14 06:46:48 --> Config Class Initialized
DEBUG - 2013-11-14 06:46:48 --> Hooks Class Initialized
DEBUG - 2013-11-14 06:46:48 --> Utf8 Class Initialized
DEBUG - 2013-11-14 06:46:48 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 06:46:48 --> URI Class Initialized
DEBUG - 2013-11-14 06:46:48 --> Router Class Initialized
DEBUG - 2013-11-14 06:46:48 --> Output Class Initialized
DEBUG - 2013-11-14 06:46:48 --> Security Class Initialized
DEBUG - 2013-11-14 06:46:48 --> Input Class Initialized
DEBUG - 2013-11-14 06:46:48 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 06:46:48 --> Language Class Initialized
DEBUG - 2013-11-14 06:46:48 --> Loader Class Initialized
DEBUG - 2013-11-14 06:46:48 --> Helper loaded: form_helper
DEBUG - 2013-11-14 06:46:48 --> Helper loaded: url_helper
DEBUG - 2013-11-14 06:46:48 --> Helper loaded: html_helper
DEBUG - 2013-11-14 06:46:48 --> Database Driver Class Initialized
DEBUG - 2013-11-14 06:46:48 --> Session Class Initialized
DEBUG - 2013-11-14 06:46:48 --> Helper loaded: string_helper
DEBUG - 2013-11-14 06:46:48 --> Session routines successfully run
DEBUG - 2013-11-14 06:46:48 --> Form Validation Class Initialized
DEBUG - 2013-11-14 06:46:48 --> Controller Class Initialized
DEBUG - 2013-11-14 06:46:48 --> Model Class Initialized
DEBUG - 2013-11-14 06:46:48 --> Model Class Initialized
DEBUG - 2013-11-14 06:46:48 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 06:46:48 --> after session initialization................
INFO  - 2013-11-14 06:46:48 --> inside the auto suggest page.................
INFO  - 2013-11-14 06:46:48 --> after the list array.................
INFO  - 2013-11-14 06:46:48 --> after retrieving the data from db.................
INFO  - 2013-11-14 06:46:48 --> looping.................
INFO  - 2013-11-14 06:46:48 --> looping.................
DEBUG - 2013-11-14 06:46:48 --> Final output sent to browser
DEBUG - 2013-11-14 06:46:48 --> Total execution time: 0.0660
DEBUG - 2013-11-14 06:46:49 --> Config Class Initialized
DEBUG - 2013-11-14 06:46:49 --> Hooks Class Initialized
DEBUG - 2013-11-14 06:46:49 --> Utf8 Class Initialized
DEBUG - 2013-11-14 06:46:49 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 06:46:49 --> URI Class Initialized
DEBUG - 2013-11-14 06:46:49 --> Router Class Initialized
DEBUG - 2013-11-14 06:46:49 --> Output Class Initialized
DEBUG - 2013-11-14 06:46:49 --> Security Class Initialized
DEBUG - 2013-11-14 06:46:49 --> Input Class Initialized
DEBUG - 2013-11-14 06:46:49 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 06:46:49 --> Language Class Initialized
DEBUG - 2013-11-14 06:46:49 --> Loader Class Initialized
DEBUG - 2013-11-14 06:46:49 --> Helper loaded: form_helper
DEBUG - 2013-11-14 06:46:49 --> Helper loaded: url_helper
DEBUG - 2013-11-14 06:46:49 --> Helper loaded: html_helper
DEBUG - 2013-11-14 06:46:49 --> Database Driver Class Initialized
DEBUG - 2013-11-14 06:46:49 --> Session Class Initialized
DEBUG - 2013-11-14 06:46:49 --> Helper loaded: string_helper
DEBUG - 2013-11-14 06:46:49 --> Session routines successfully run
DEBUG - 2013-11-14 06:46:49 --> Form Validation Class Initialized
DEBUG - 2013-11-14 06:46:49 --> Controller Class Initialized
DEBUG - 2013-11-14 06:46:49 --> Model Class Initialized
DEBUG - 2013-11-14 06:46:49 --> Model Class Initialized
DEBUG - 2013-11-14 06:46:49 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 06:46:49 --> after session initialization................
INFO  - 2013-11-14 06:46:49 --> inside the auto suggest page.................
INFO  - 2013-11-14 06:46:49 --> after the list array.................
INFO  - 2013-11-14 06:46:49 --> after retrieving the data from db.................
INFO  - 2013-11-14 06:46:49 --> looping.................
INFO  - 2013-11-14 06:46:49 --> looping.................
DEBUG - 2013-11-14 06:46:49 --> Final output sent to browser
DEBUG - 2013-11-14 06:46:49 --> Total execution time: 0.0780
DEBUG - 2013-11-14 06:53:38 --> Config Class Initialized
DEBUG - 2013-11-14 06:53:38 --> Hooks Class Initialized
DEBUG - 2013-11-14 06:53:38 --> Utf8 Class Initialized
DEBUG - 2013-11-14 06:53:38 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 06:53:38 --> URI Class Initialized
DEBUG - 2013-11-14 06:53:38 --> Router Class Initialized
DEBUG - 2013-11-14 06:53:38 --> Output Class Initialized
DEBUG - 2013-11-14 06:53:38 --> Security Class Initialized
DEBUG - 2013-11-14 06:53:38 --> Input Class Initialized
DEBUG - 2013-11-14 06:53:38 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 06:53:38 --> Language Class Initialized
DEBUG - 2013-11-14 06:53:38 --> Loader Class Initialized
DEBUG - 2013-11-14 06:53:38 --> Helper loaded: form_helper
DEBUG - 2013-11-14 06:53:38 --> Helper loaded: url_helper
DEBUG - 2013-11-14 06:53:38 --> Helper loaded: html_helper
DEBUG - 2013-11-14 06:53:38 --> Database Driver Class Initialized
DEBUG - 2013-11-14 06:53:38 --> Session Class Initialized
DEBUG - 2013-11-14 06:53:38 --> Helper loaded: string_helper
DEBUG - 2013-11-14 06:53:38 --> Session routines successfully run
DEBUG - 2013-11-14 06:53:38 --> Form Validation Class Initialized
DEBUG - 2013-11-14 06:53:38 --> Controller Class Initialized
DEBUG - 2013-11-14 06:53:38 --> Model Class Initialized
DEBUG - 2013-11-14 06:53:38 --> Model Class Initialized
DEBUG - 2013-11-14 06:53:38 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 06:53:38 --> after session initialization................
INFO  - 2013-11-14 06:53:38 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 06:53:38 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 06:53:38 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 06:53:38 --> inside retrieving locations 
INFO  - 2013-11-14 06:53:38 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 06:53:38 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 06:53:38 --> Final output sent to browser
DEBUG - 2013-11-14 06:53:38 --> Total execution time: 0.0550
DEBUG - 2013-11-14 06:53:39 --> Config Class Initialized
DEBUG - 2013-11-14 06:53:39 --> Hooks Class Initialized
DEBUG - 2013-11-14 06:53:39 --> Utf8 Class Initialized
DEBUG - 2013-11-14 06:53:39 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 06:53:39 --> URI Class Initialized
DEBUG - 2013-11-14 06:53:39 --> Router Class Initialized
DEBUG - 2013-11-14 06:53:39 --> Output Class Initialized
DEBUG - 2013-11-14 06:53:39 --> Security Class Initialized
DEBUG - 2013-11-14 06:53:39 --> Input Class Initialized
DEBUG - 2013-11-14 06:53:39 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 06:53:39 --> Language Class Initialized
DEBUG - 2013-11-14 06:53:39 --> Loader Class Initialized
DEBUG - 2013-11-14 06:53:39 --> Helper loaded: form_helper
DEBUG - 2013-11-14 06:53:39 --> Helper loaded: url_helper
DEBUG - 2013-11-14 06:53:39 --> Helper loaded: html_helper
DEBUG - 2013-11-14 06:53:39 --> Database Driver Class Initialized
DEBUG - 2013-11-14 06:53:39 --> Session Class Initialized
DEBUG - 2013-11-14 06:53:39 --> Helper loaded: string_helper
DEBUG - 2013-11-14 06:53:39 --> Session routines successfully run
DEBUG - 2013-11-14 06:53:39 --> Form Validation Class Initialized
DEBUG - 2013-11-14 06:53:39 --> Controller Class Initialized
DEBUG - 2013-11-14 06:53:39 --> Model Class Initialized
DEBUG - 2013-11-14 06:53:39 --> Model Class Initialized
DEBUG - 2013-11-14 06:53:39 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 06:53:39 --> after session initialization................
INFO  - 2013-11-14 06:53:39 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 06:53:39 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 06:53:39 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 06:53:39 --> inside retrieving locations 
INFO  - 2013-11-14 06:53:39 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 06:53:39 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 06:53:39 --> Final output sent to browser
DEBUG - 2013-11-14 06:53:39 --> Total execution time: 0.0640
DEBUG - 2013-11-14 06:53:41 --> Config Class Initialized
DEBUG - 2013-11-14 06:53:41 --> Hooks Class Initialized
DEBUG - 2013-11-14 06:53:41 --> Utf8 Class Initialized
DEBUG - 2013-11-14 06:53:41 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 06:53:41 --> URI Class Initialized
DEBUG - 2013-11-14 06:53:41 --> Router Class Initialized
DEBUG - 2013-11-14 06:53:41 --> Output Class Initialized
DEBUG - 2013-11-14 06:53:41 --> Security Class Initialized
DEBUG - 2013-11-14 06:53:41 --> Input Class Initialized
DEBUG - 2013-11-14 06:53:41 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 06:53:41 --> Language Class Initialized
DEBUG - 2013-11-14 06:53:42 --> Loader Class Initialized
DEBUG - 2013-11-14 06:53:42 --> Helper loaded: form_helper
DEBUG - 2013-11-14 06:53:42 --> Helper loaded: url_helper
DEBUG - 2013-11-14 06:53:42 --> Helper loaded: html_helper
DEBUG - 2013-11-14 06:53:42 --> Database Driver Class Initialized
DEBUG - 2013-11-14 06:53:42 --> Session Class Initialized
DEBUG - 2013-11-14 06:53:42 --> Helper loaded: string_helper
DEBUG - 2013-11-14 06:53:42 --> Session routines successfully run
DEBUG - 2013-11-14 06:53:42 --> Form Validation Class Initialized
DEBUG - 2013-11-14 06:53:42 --> Controller Class Initialized
DEBUG - 2013-11-14 06:53:42 --> Model Class Initialized
DEBUG - 2013-11-14 06:53:42 --> Model Class Initialized
DEBUG - 2013-11-14 06:53:42 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 06:53:42 --> after session initialization................
INFO  - 2013-11-14 06:53:42 --> inside the auto suggest page.................
INFO  - 2013-11-14 06:53:42 --> after the list array.................
INFO  - 2013-11-14 06:53:42 --> after retrieving the data from db.................
INFO  - 2013-11-14 06:53:42 --> looping.................
INFO  - 2013-11-14 06:53:42 --> looping.................
INFO  - 2013-11-14 06:53:42 --> looping.................
INFO  - 2013-11-14 06:53:42 --> looping.................
INFO  - 2013-11-14 06:53:42 --> looping.................
INFO  - 2013-11-14 06:53:42 --> looping.................
INFO  - 2013-11-14 06:53:42 --> looping.................
INFO  - 2013-11-14 06:53:42 --> looping.................
DEBUG - 2013-11-14 06:53:42 --> Final output sent to browser
DEBUG - 2013-11-14 06:53:42 --> Total execution time: 0.0610
DEBUG - 2013-11-14 06:53:42 --> Config Class Initialized
DEBUG - 2013-11-14 06:53:42 --> Hooks Class Initialized
DEBUG - 2013-11-14 06:53:42 --> Utf8 Class Initialized
DEBUG - 2013-11-14 06:53:42 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 06:53:42 --> URI Class Initialized
DEBUG - 2013-11-14 06:53:42 --> Router Class Initialized
DEBUG - 2013-11-14 06:53:42 --> Output Class Initialized
DEBUG - 2013-11-14 06:53:42 --> Security Class Initialized
DEBUG - 2013-11-14 06:53:42 --> Input Class Initialized
DEBUG - 2013-11-14 06:53:42 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 06:53:42 --> Language Class Initialized
DEBUG - 2013-11-14 06:53:42 --> Loader Class Initialized
DEBUG - 2013-11-14 06:53:42 --> Helper loaded: form_helper
DEBUG - 2013-11-14 06:53:42 --> Helper loaded: url_helper
DEBUG - 2013-11-14 06:53:42 --> Helper loaded: html_helper
DEBUG - 2013-11-14 06:53:42 --> Database Driver Class Initialized
DEBUG - 2013-11-14 06:53:42 --> Session Class Initialized
DEBUG - 2013-11-14 06:53:42 --> Helper loaded: string_helper
DEBUG - 2013-11-14 06:53:42 --> Session routines successfully run
DEBUG - 2013-11-14 06:53:42 --> Form Validation Class Initialized
DEBUG - 2013-11-14 06:53:42 --> Controller Class Initialized
DEBUG - 2013-11-14 06:53:42 --> Model Class Initialized
DEBUG - 2013-11-14 06:53:42 --> Model Class Initialized
DEBUG - 2013-11-14 06:53:42 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 06:53:42 --> after session initialization................
INFO  - 2013-11-14 06:53:42 --> inside the auto suggest page.................
INFO  - 2013-11-14 06:53:42 --> after the list array.................
INFO  - 2013-11-14 06:53:42 --> after retrieving the data from db.................
INFO  - 2013-11-14 06:53:42 --> looping.................
INFO  - 2013-11-14 06:53:42 --> looping.................
DEBUG - 2013-11-14 06:53:42 --> Final output sent to browser
DEBUG - 2013-11-14 06:53:42 --> Total execution time: 0.0580
DEBUG - 2013-11-14 06:53:42 --> Config Class Initialized
DEBUG - 2013-11-14 06:53:42 --> Hooks Class Initialized
DEBUG - 2013-11-14 06:53:42 --> Utf8 Class Initialized
DEBUG - 2013-11-14 06:53:42 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 06:53:42 --> URI Class Initialized
DEBUG - 2013-11-14 06:53:42 --> Router Class Initialized
DEBUG - 2013-11-14 06:53:42 --> Output Class Initialized
DEBUG - 2013-11-14 06:53:42 --> Security Class Initialized
DEBUG - 2013-11-14 06:53:42 --> Input Class Initialized
DEBUG - 2013-11-14 06:53:42 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 06:53:42 --> Language Class Initialized
DEBUG - 2013-11-14 06:53:42 --> Loader Class Initialized
DEBUG - 2013-11-14 06:53:42 --> Helper loaded: form_helper
DEBUG - 2013-11-14 06:53:42 --> Helper loaded: url_helper
DEBUG - 2013-11-14 06:53:42 --> Helper loaded: html_helper
DEBUG - 2013-11-14 06:53:42 --> Database Driver Class Initialized
DEBUG - 2013-11-14 06:53:42 --> Session Class Initialized
DEBUG - 2013-11-14 06:53:42 --> Helper loaded: string_helper
DEBUG - 2013-11-14 06:53:42 --> Session routines successfully run
DEBUG - 2013-11-14 06:53:42 --> Form Validation Class Initialized
DEBUG - 2013-11-14 06:53:42 --> Controller Class Initialized
DEBUG - 2013-11-14 06:53:42 --> Model Class Initialized
DEBUG - 2013-11-14 06:53:42 --> Model Class Initialized
DEBUG - 2013-11-14 06:53:42 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 06:53:42 --> after session initialization................
INFO  - 2013-11-14 06:53:42 --> inside the auto suggest page.................
INFO  - 2013-11-14 06:53:42 --> after the list array.................
INFO  - 2013-11-14 06:53:42 --> after retrieving the data from db.................
INFO  - 2013-11-14 06:53:42 --> looping.................
INFO  - 2013-11-14 06:53:42 --> looping.................
DEBUG - 2013-11-14 06:53:42 --> Final output sent to browser
DEBUG - 2013-11-14 06:53:42 --> Total execution time: 0.0520
DEBUG - 2013-11-14 06:53:44 --> Config Class Initialized
DEBUG - 2013-11-14 06:53:44 --> Hooks Class Initialized
DEBUG - 2013-11-14 06:53:44 --> Utf8 Class Initialized
DEBUG - 2013-11-14 06:53:44 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 06:53:44 --> URI Class Initialized
DEBUG - 2013-11-14 06:53:44 --> Router Class Initialized
DEBUG - 2013-11-14 06:53:44 --> Output Class Initialized
DEBUG - 2013-11-14 06:53:44 --> Security Class Initialized
DEBUG - 2013-11-14 06:53:44 --> Input Class Initialized
DEBUG - 2013-11-14 06:53:44 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 06:53:44 --> Language Class Initialized
DEBUG - 2013-11-14 06:53:44 --> Loader Class Initialized
DEBUG - 2013-11-14 06:53:44 --> Helper loaded: form_helper
DEBUG - 2013-11-14 06:53:44 --> Helper loaded: url_helper
DEBUG - 2013-11-14 06:53:44 --> Helper loaded: html_helper
DEBUG - 2013-11-14 06:53:44 --> Database Driver Class Initialized
DEBUG - 2013-11-14 06:53:44 --> Session Class Initialized
DEBUG - 2013-11-14 06:53:44 --> Helper loaded: string_helper
DEBUG - 2013-11-14 06:53:44 --> Session routines successfully run
DEBUG - 2013-11-14 06:53:44 --> Form Validation Class Initialized
DEBUG - 2013-11-14 06:53:44 --> Controller Class Initialized
DEBUG - 2013-11-14 06:53:44 --> Model Class Initialized
DEBUG - 2013-11-14 06:53:44 --> Model Class Initialized
DEBUG - 2013-11-14 06:53:44 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 06:53:44 --> after session initialization................
INFO  - 2013-11-14 06:53:44 --> inside retrieving pharmacy by location id 2
INFO  - 2013-11-14 06:53:44 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '2'
LIMIT 25
DEBUG - 2013-11-14 06:53:44 --> Final output sent to browser
DEBUG - 2013-11-14 06:53:44 --> Total execution time: 0.0440
DEBUG - 2013-11-14 06:53:46 --> Config Class Initialized
DEBUG - 2013-11-14 06:53:46 --> Hooks Class Initialized
DEBUG - 2013-11-14 06:53:46 --> Utf8 Class Initialized
DEBUG - 2013-11-14 06:53:46 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 06:53:46 --> URI Class Initialized
DEBUG - 2013-11-14 06:53:46 --> Router Class Initialized
DEBUG - 2013-11-14 06:53:46 --> Output Class Initialized
DEBUG - 2013-11-14 06:53:46 --> Security Class Initialized
DEBUG - 2013-11-14 06:53:46 --> Input Class Initialized
DEBUG - 2013-11-14 06:53:46 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 06:53:46 --> Language Class Initialized
DEBUG - 2013-11-14 06:53:46 --> Loader Class Initialized
DEBUG - 2013-11-14 06:53:46 --> Helper loaded: form_helper
DEBUG - 2013-11-14 06:53:46 --> Helper loaded: url_helper
DEBUG - 2013-11-14 06:53:46 --> Helper loaded: html_helper
DEBUG - 2013-11-14 06:53:46 --> Database Driver Class Initialized
DEBUG - 2013-11-14 06:53:46 --> Session Class Initialized
DEBUG - 2013-11-14 06:53:46 --> Helper loaded: string_helper
DEBUG - 2013-11-14 06:53:46 --> Session routines successfully run
DEBUG - 2013-11-14 06:53:46 --> Form Validation Class Initialized
DEBUG - 2013-11-14 06:53:46 --> Controller Class Initialized
DEBUG - 2013-11-14 06:53:46 --> Model Class Initialized
DEBUG - 2013-11-14 06:53:46 --> Model Class Initialized
DEBUG - 2013-11-14 06:53:46 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 06:53:46 --> after session initialization................
INFO  - 2013-11-14 06:53:46 --> inside the auto suggest page.................
INFO  - 2013-11-14 06:53:46 --> after the list array.................
INFO  - 2013-11-14 06:53:46 --> after retrieving the data from db.................
INFO  - 2013-11-14 06:53:46 --> looping.................
INFO  - 2013-11-14 06:53:46 --> looping.................
DEBUG - 2013-11-14 06:53:46 --> Final output sent to browser
DEBUG - 2013-11-14 06:53:46 --> Total execution time: 0.0600
DEBUG - 2013-11-14 06:53:52 --> Config Class Initialized
DEBUG - 2013-11-14 06:53:52 --> Hooks Class Initialized
DEBUG - 2013-11-14 06:53:52 --> Utf8 Class Initialized
DEBUG - 2013-11-14 06:53:52 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 06:53:52 --> URI Class Initialized
DEBUG - 2013-11-14 06:53:52 --> Router Class Initialized
DEBUG - 2013-11-14 06:53:52 --> Output Class Initialized
DEBUG - 2013-11-14 06:53:52 --> Security Class Initialized
DEBUG - 2013-11-14 06:53:52 --> Input Class Initialized
DEBUG - 2013-11-14 06:53:52 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 06:53:52 --> Language Class Initialized
DEBUG - 2013-11-14 06:53:52 --> Loader Class Initialized
DEBUG - 2013-11-14 06:53:52 --> Helper loaded: form_helper
DEBUG - 2013-11-14 06:53:52 --> Helper loaded: url_helper
DEBUG - 2013-11-14 06:53:52 --> Helper loaded: html_helper
DEBUG - 2013-11-14 06:53:52 --> Database Driver Class Initialized
DEBUG - 2013-11-14 06:53:52 --> Session Class Initialized
DEBUG - 2013-11-14 06:53:52 --> Helper loaded: string_helper
DEBUG - 2013-11-14 06:53:52 --> Session routines successfully run
DEBUG - 2013-11-14 06:53:52 --> Form Validation Class Initialized
DEBUG - 2013-11-14 06:53:52 --> Controller Class Initialized
DEBUG - 2013-11-14 06:53:52 --> Model Class Initialized
DEBUG - 2013-11-14 06:53:52 --> Model Class Initialized
DEBUG - 2013-11-14 06:53:52 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 06:53:52 --> after session initialization................
INFO  - 2013-11-14 06:53:52 --> inside retrieving pharmacy by location id 1
INFO  - 2013-11-14 06:53:52 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '1'
LIMIT 25
DEBUG - 2013-11-14 06:53:52 --> Final output sent to browser
DEBUG - 2013-11-14 06:53:52 --> Total execution time: 0.0470
DEBUG - 2013-11-14 06:53:55 --> Config Class Initialized
DEBUG - 2013-11-14 06:53:55 --> Hooks Class Initialized
DEBUG - 2013-11-14 06:53:55 --> Utf8 Class Initialized
DEBUG - 2013-11-14 06:53:55 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 06:53:55 --> URI Class Initialized
DEBUG - 2013-11-14 06:53:55 --> Router Class Initialized
DEBUG - 2013-11-14 06:53:55 --> Output Class Initialized
DEBUG - 2013-11-14 06:53:55 --> Security Class Initialized
DEBUG - 2013-11-14 06:53:55 --> Input Class Initialized
DEBUG - 2013-11-14 06:53:55 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 06:53:55 --> Language Class Initialized
DEBUG - 2013-11-14 06:53:55 --> Loader Class Initialized
DEBUG - 2013-11-14 06:53:55 --> Helper loaded: form_helper
DEBUG - 2013-11-14 06:53:55 --> Helper loaded: url_helper
DEBUG - 2013-11-14 06:53:55 --> Helper loaded: html_helper
DEBUG - 2013-11-14 06:53:55 --> Database Driver Class Initialized
DEBUG - 2013-11-14 06:53:55 --> Session Class Initialized
DEBUG - 2013-11-14 06:53:55 --> Helper loaded: string_helper
DEBUG - 2013-11-14 06:53:55 --> Session routines successfully run
DEBUG - 2013-11-14 06:53:55 --> Form Validation Class Initialized
DEBUG - 2013-11-14 06:53:55 --> Controller Class Initialized
DEBUG - 2013-11-14 06:53:55 --> Model Class Initialized
DEBUG - 2013-11-14 06:53:55 --> Model Class Initialized
DEBUG - 2013-11-14 06:53:55 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 06:53:55 --> after session initialization................
INFO  - 2013-11-14 06:53:55 --> inside the auto suggest page.................
INFO  - 2013-11-14 06:53:55 --> after the list array.................
INFO  - 2013-11-14 06:53:55 --> after retrieving the data from db.................
INFO  - 2013-11-14 06:53:55 --> looping.................
INFO  - 2013-11-14 06:53:55 --> looping.................
DEBUG - 2013-11-14 06:53:55 --> Final output sent to browser
DEBUG - 2013-11-14 06:53:55 --> Total execution time: 0.0570
DEBUG - 2013-11-14 06:54:41 --> Config Class Initialized
DEBUG - 2013-11-14 06:54:41 --> Hooks Class Initialized
DEBUG - 2013-11-14 06:54:41 --> Utf8 Class Initialized
DEBUG - 2013-11-14 06:54:41 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 06:54:41 --> URI Class Initialized
DEBUG - 2013-11-14 06:54:41 --> Router Class Initialized
DEBUG - 2013-11-14 06:54:41 --> Output Class Initialized
DEBUG - 2013-11-14 06:54:41 --> Security Class Initialized
DEBUG - 2013-11-14 06:54:41 --> Input Class Initialized
DEBUG - 2013-11-14 06:54:41 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 06:54:41 --> Language Class Initialized
DEBUG - 2013-11-14 06:54:41 --> Loader Class Initialized
DEBUG - 2013-11-14 06:54:41 --> Helper loaded: form_helper
DEBUG - 2013-11-14 06:54:41 --> Helper loaded: url_helper
DEBUG - 2013-11-14 06:54:41 --> Helper loaded: html_helper
DEBUG - 2013-11-14 06:54:41 --> Database Driver Class Initialized
DEBUG - 2013-11-14 06:54:41 --> Session Class Initialized
DEBUG - 2013-11-14 06:54:41 --> Helper loaded: string_helper
DEBUG - 2013-11-14 06:54:41 --> Session routines successfully run
DEBUG - 2013-11-14 06:54:41 --> Form Validation Class Initialized
DEBUG - 2013-11-14 06:54:41 --> Controller Class Initialized
DEBUG - 2013-11-14 06:54:41 --> Model Class Initialized
DEBUG - 2013-11-14 06:54:41 --> Model Class Initialized
DEBUG - 2013-11-14 06:54:41 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 06:54:41 --> after session initialization................
INFO  - 2013-11-14 06:54:41 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 06:54:41 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 06:54:41 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 06:54:41 --> inside retrieving locations 
INFO  - 2013-11-14 06:54:41 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 06:54:41 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 06:54:41 --> Final output sent to browser
DEBUG - 2013-11-14 06:54:41 --> Total execution time: 0.0590
DEBUG - 2013-11-14 06:54:45 --> Config Class Initialized
DEBUG - 2013-11-14 06:54:45 --> Hooks Class Initialized
DEBUG - 2013-11-14 06:54:45 --> Utf8 Class Initialized
DEBUG - 2013-11-14 06:54:45 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 06:54:45 --> URI Class Initialized
DEBUG - 2013-11-14 06:54:45 --> Router Class Initialized
DEBUG - 2013-11-14 06:54:45 --> Output Class Initialized
DEBUG - 2013-11-14 06:54:45 --> Security Class Initialized
DEBUG - 2013-11-14 06:54:45 --> Input Class Initialized
DEBUG - 2013-11-14 06:54:45 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 06:54:45 --> Language Class Initialized
DEBUG - 2013-11-14 06:54:45 --> Loader Class Initialized
DEBUG - 2013-11-14 06:54:45 --> Helper loaded: form_helper
DEBUG - 2013-11-14 06:54:45 --> Helper loaded: url_helper
DEBUG - 2013-11-14 06:54:45 --> Helper loaded: html_helper
DEBUG - 2013-11-14 06:54:45 --> Database Driver Class Initialized
DEBUG - 2013-11-14 06:54:45 --> Session Class Initialized
DEBUG - 2013-11-14 06:54:45 --> Helper loaded: string_helper
DEBUG - 2013-11-14 06:54:45 --> Session routines successfully run
DEBUG - 2013-11-14 06:54:45 --> Form Validation Class Initialized
DEBUG - 2013-11-14 06:54:45 --> Controller Class Initialized
DEBUG - 2013-11-14 06:54:45 --> Model Class Initialized
DEBUG - 2013-11-14 06:54:45 --> Model Class Initialized
DEBUG - 2013-11-14 06:54:45 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 06:54:45 --> after session initialization................
INFO  - 2013-11-14 06:54:45 --> inside the auto suggest page.................
INFO  - 2013-11-14 06:54:45 --> after the list array.................
INFO  - 2013-11-14 06:54:45 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%e%' and p.locationid_location = 2
INFO  - 2013-11-14 06:54:45 --> after retrieving the data from db.................
INFO  - 2013-11-14 06:54:45 --> looping.................
INFO  - 2013-11-14 06:54:45 --> looping.................
INFO  - 2013-11-14 06:54:45 --> looping.................
INFO  - 2013-11-14 06:54:45 --> looping.................
INFO  - 2013-11-14 06:54:45 --> looping.................
INFO  - 2013-11-14 06:54:45 --> looping.................
INFO  - 2013-11-14 06:54:45 --> looping.................
INFO  - 2013-11-14 06:54:45 --> looping.................
DEBUG - 2013-11-14 06:54:45 --> Final output sent to browser
DEBUG - 2013-11-14 06:54:45 --> Total execution time: 0.0660
DEBUG - 2013-11-14 06:54:45 --> Config Class Initialized
DEBUG - 2013-11-14 06:54:45 --> Hooks Class Initialized
DEBUG - 2013-11-14 06:54:45 --> Utf8 Class Initialized
DEBUG - 2013-11-14 06:54:45 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 06:54:45 --> URI Class Initialized
DEBUG - 2013-11-14 06:54:45 --> Router Class Initialized
DEBUG - 2013-11-14 06:54:45 --> Output Class Initialized
DEBUG - 2013-11-14 06:54:45 --> Security Class Initialized
DEBUG - 2013-11-14 06:54:45 --> Input Class Initialized
DEBUG - 2013-11-14 06:54:45 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 06:54:45 --> Language Class Initialized
DEBUG - 2013-11-14 06:54:45 --> Loader Class Initialized
DEBUG - 2013-11-14 06:54:45 --> Helper loaded: form_helper
DEBUG - 2013-11-14 06:54:45 --> Helper loaded: url_helper
DEBUG - 2013-11-14 06:54:45 --> Helper loaded: html_helper
DEBUG - 2013-11-14 06:54:45 --> Database Driver Class Initialized
DEBUG - 2013-11-14 06:54:45 --> Session Class Initialized
DEBUG - 2013-11-14 06:54:45 --> Helper loaded: string_helper
DEBUG - 2013-11-14 06:54:45 --> Session routines successfully run
DEBUG - 2013-11-14 06:54:45 --> Form Validation Class Initialized
DEBUG - 2013-11-14 06:54:45 --> Controller Class Initialized
DEBUG - 2013-11-14 06:54:45 --> Model Class Initialized
DEBUG - 2013-11-14 06:54:45 --> Model Class Initialized
DEBUG - 2013-11-14 06:54:45 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 06:54:45 --> after session initialization................
INFO  - 2013-11-14 06:54:45 --> inside the auto suggest page.................
INFO  - 2013-11-14 06:54:45 --> after the list array.................
INFO  - 2013-11-14 06:54:45 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%ed%' and p.locationid_location = 2
INFO  - 2013-11-14 06:54:45 --> after retrieving the data from db.................
INFO  - 2013-11-14 06:54:45 --> looping.................
INFO  - 2013-11-14 06:54:45 --> looping.................
DEBUG - 2013-11-14 06:54:45 --> Final output sent to browser
DEBUG - 2013-11-14 06:54:45 --> Total execution time: 0.0690
DEBUG - 2013-11-14 06:54:45 --> Config Class Initialized
DEBUG - 2013-11-14 06:54:45 --> Hooks Class Initialized
DEBUG - 2013-11-14 06:54:45 --> Utf8 Class Initialized
DEBUG - 2013-11-14 06:54:45 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 06:54:45 --> URI Class Initialized
DEBUG - 2013-11-14 06:54:45 --> Router Class Initialized
DEBUG - 2013-11-14 06:54:45 --> Output Class Initialized
DEBUG - 2013-11-14 06:54:45 --> Security Class Initialized
DEBUG - 2013-11-14 06:54:45 --> Input Class Initialized
DEBUG - 2013-11-14 06:54:45 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 06:54:45 --> Language Class Initialized
DEBUG - 2013-11-14 06:54:45 --> Loader Class Initialized
DEBUG - 2013-11-14 06:54:45 --> Helper loaded: form_helper
DEBUG - 2013-11-14 06:54:45 --> Helper loaded: url_helper
DEBUG - 2013-11-14 06:54:45 --> Helper loaded: html_helper
DEBUG - 2013-11-14 06:54:45 --> Database Driver Class Initialized
DEBUG - 2013-11-14 06:54:45 --> Session Class Initialized
DEBUG - 2013-11-14 06:54:45 --> Helper loaded: string_helper
DEBUG - 2013-11-14 06:54:45 --> Session routines successfully run
DEBUG - 2013-11-14 06:54:45 --> Form Validation Class Initialized
DEBUG - 2013-11-14 06:54:45 --> Controller Class Initialized
DEBUG - 2013-11-14 06:54:45 --> Model Class Initialized
DEBUG - 2013-11-14 06:54:45 --> Model Class Initialized
DEBUG - 2013-11-14 06:54:45 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 06:54:45 --> after session initialization................
INFO  - 2013-11-14 06:54:45 --> inside the auto suggest page.................
INFO  - 2013-11-14 06:54:45 --> after the list array.................
INFO  - 2013-11-14 06:54:45 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%edi%' and p.locationid_location = 2
INFO  - 2013-11-14 06:54:45 --> after retrieving the data from db.................
INFO  - 2013-11-14 06:54:45 --> looping.................
INFO  - 2013-11-14 06:54:45 --> looping.................
DEBUG - 2013-11-14 06:54:45 --> Final output sent to browser
DEBUG - 2013-11-14 06:54:45 --> Total execution time: 0.0500
DEBUG - 2013-11-14 06:56:41 --> Config Class Initialized
DEBUG - 2013-11-14 06:56:41 --> Hooks Class Initialized
DEBUG - 2013-11-14 06:56:41 --> Utf8 Class Initialized
DEBUG - 2013-11-14 06:56:41 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 06:56:41 --> URI Class Initialized
DEBUG - 2013-11-14 06:56:42 --> Router Class Initialized
DEBUG - 2013-11-14 06:56:42 --> Output Class Initialized
DEBUG - 2013-11-14 06:56:42 --> Security Class Initialized
DEBUG - 2013-11-14 06:56:42 --> Input Class Initialized
DEBUG - 2013-11-14 06:56:42 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 06:56:42 --> Language Class Initialized
DEBUG - 2013-11-14 06:56:42 --> Loader Class Initialized
DEBUG - 2013-11-14 06:56:42 --> Helper loaded: form_helper
DEBUG - 2013-11-14 06:56:42 --> Helper loaded: url_helper
DEBUG - 2013-11-14 06:56:42 --> Helper loaded: html_helper
DEBUG - 2013-11-14 06:56:42 --> Database Driver Class Initialized
DEBUG - 2013-11-14 06:56:42 --> Session Class Initialized
DEBUG - 2013-11-14 06:56:42 --> Helper loaded: string_helper
DEBUG - 2013-11-14 06:56:42 --> Session routines successfully run
DEBUG - 2013-11-14 06:56:42 --> Form Validation Class Initialized
DEBUG - 2013-11-14 06:56:42 --> Controller Class Initialized
DEBUG - 2013-11-14 06:56:42 --> Model Class Initialized
DEBUG - 2013-11-14 06:56:42 --> Model Class Initialized
DEBUG - 2013-11-14 06:56:42 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 06:56:42 --> after session initialization................
INFO  - 2013-11-14 06:56:42 --> inside retrieving pharmacy by location id 2
INFO  - 2013-11-14 06:56:42 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '2'
LIMIT 25
DEBUG - 2013-11-14 06:56:42 --> Final output sent to browser
DEBUG - 2013-11-14 06:56:42 --> Total execution time: 0.0490
DEBUG - 2013-11-14 06:56:44 --> Config Class Initialized
DEBUG - 2013-11-14 06:56:44 --> Hooks Class Initialized
DEBUG - 2013-11-14 06:56:44 --> Utf8 Class Initialized
DEBUG - 2013-11-14 06:56:44 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 06:56:44 --> URI Class Initialized
DEBUG - 2013-11-14 06:56:44 --> Router Class Initialized
DEBUG - 2013-11-14 06:56:44 --> Output Class Initialized
DEBUG - 2013-11-14 06:56:44 --> Security Class Initialized
DEBUG - 2013-11-14 06:56:44 --> Input Class Initialized
DEBUG - 2013-11-14 06:56:44 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 06:56:44 --> Language Class Initialized
DEBUG - 2013-11-14 06:56:44 --> Loader Class Initialized
DEBUG - 2013-11-14 06:56:44 --> Helper loaded: form_helper
DEBUG - 2013-11-14 06:56:44 --> Helper loaded: url_helper
DEBUG - 2013-11-14 06:56:44 --> Helper loaded: html_helper
DEBUG - 2013-11-14 06:56:44 --> Database Driver Class Initialized
DEBUG - 2013-11-14 06:56:44 --> Session Class Initialized
DEBUG - 2013-11-14 06:56:44 --> Helper loaded: string_helper
DEBUG - 2013-11-14 06:56:44 --> Session routines successfully run
DEBUG - 2013-11-14 06:56:44 --> Form Validation Class Initialized
DEBUG - 2013-11-14 06:56:44 --> Controller Class Initialized
DEBUG - 2013-11-14 06:56:44 --> Model Class Initialized
DEBUG - 2013-11-14 06:56:44 --> Model Class Initialized
DEBUG - 2013-11-14 06:56:44 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 06:56:44 --> after session initialization................
INFO  - 2013-11-14 06:56:44 --> inside the auto suggest page.................
INFO  - 2013-11-14 06:56:44 --> after the list array.................
INFO  - 2013-11-14 06:56:44 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%care%' and p.locationid_location = 2
INFO  - 2013-11-14 06:56:44 --> after retrieving the data from db.................
INFO  - 2013-11-14 06:56:44 --> looping.................
INFO  - 2013-11-14 06:56:44 --> looping.................
INFO  - 2013-11-14 06:56:44 --> looping.................
INFO  - 2013-11-14 06:56:44 --> looping.................
INFO  - 2013-11-14 06:56:44 --> looping.................
DEBUG - 2013-11-14 06:56:44 --> Final output sent to browser
DEBUG - 2013-11-14 06:56:44 --> Total execution time: 0.0660
DEBUG - 2013-11-14 06:56:44 --> Config Class Initialized
DEBUG - 2013-11-14 06:56:44 --> Hooks Class Initialized
DEBUG - 2013-11-14 06:56:44 --> Utf8 Class Initialized
DEBUG - 2013-11-14 06:56:44 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 06:56:44 --> URI Class Initialized
DEBUG - 2013-11-14 06:56:44 --> Router Class Initialized
DEBUG - 2013-11-14 06:56:44 --> Output Class Initialized
DEBUG - 2013-11-14 06:56:44 --> Security Class Initialized
DEBUG - 2013-11-14 06:56:44 --> Input Class Initialized
DEBUG - 2013-11-14 06:56:44 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 06:56:44 --> Language Class Initialized
DEBUG - 2013-11-14 06:56:44 --> Loader Class Initialized
DEBUG - 2013-11-14 06:56:44 --> Helper loaded: form_helper
DEBUG - 2013-11-14 06:56:44 --> Helper loaded: url_helper
DEBUG - 2013-11-14 06:56:44 --> Helper loaded: html_helper
DEBUG - 2013-11-14 06:56:44 --> Database Driver Class Initialized
DEBUG - 2013-11-14 06:56:44 --> Session Class Initialized
DEBUG - 2013-11-14 06:56:44 --> Helper loaded: string_helper
DEBUG - 2013-11-14 06:56:44 --> Session routines successfully run
DEBUG - 2013-11-14 06:56:44 --> Form Validation Class Initialized
DEBUG - 2013-11-14 06:56:44 --> Controller Class Initialized
DEBUG - 2013-11-14 06:56:44 --> Model Class Initialized
DEBUG - 2013-11-14 06:56:44 --> Model Class Initialized
DEBUG - 2013-11-14 06:56:44 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 06:56:44 --> after session initialization................
INFO  - 2013-11-14 06:56:44 --> inside the auto suggest page.................
INFO  - 2013-11-14 06:56:44 --> after the list array.................
INFO  - 2013-11-14 06:56:44 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%are%' and p.locationid_location = 2
INFO  - 2013-11-14 06:56:44 --> after retrieving the data from db.................
INFO  - 2013-11-14 06:56:44 --> looping.................
INFO  - 2013-11-14 06:56:44 --> looping.................
INFO  - 2013-11-14 06:56:44 --> looping.................
INFO  - 2013-11-14 06:56:44 --> looping.................
INFO  - 2013-11-14 06:56:44 --> looping.................
DEBUG - 2013-11-14 06:56:44 --> Final output sent to browser
DEBUG - 2013-11-14 06:56:44 --> Total execution time: 0.0600
DEBUG - 2013-11-14 06:56:44 --> Config Class Initialized
DEBUG - 2013-11-14 06:56:44 --> Hooks Class Initialized
DEBUG - 2013-11-14 06:56:44 --> Utf8 Class Initialized
DEBUG - 2013-11-14 06:56:44 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 06:56:44 --> URI Class Initialized
DEBUG - 2013-11-14 06:56:44 --> Router Class Initialized
DEBUG - 2013-11-14 06:56:44 --> Output Class Initialized
DEBUG - 2013-11-14 06:56:44 --> Security Class Initialized
DEBUG - 2013-11-14 06:56:44 --> Input Class Initialized
DEBUG - 2013-11-14 06:56:44 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 06:56:44 --> Language Class Initialized
DEBUG - 2013-11-14 06:56:44 --> Loader Class Initialized
DEBUG - 2013-11-14 06:56:44 --> Helper loaded: form_helper
DEBUG - 2013-11-14 06:56:44 --> Helper loaded: url_helper
DEBUG - 2013-11-14 06:56:44 --> Helper loaded: html_helper
DEBUG - 2013-11-14 06:56:44 --> Database Driver Class Initialized
DEBUG - 2013-11-14 06:56:45 --> Session Class Initialized
DEBUG - 2013-11-14 06:56:45 --> Helper loaded: string_helper
DEBUG - 2013-11-14 06:56:45 --> Session routines successfully run
DEBUG - 2013-11-14 06:56:45 --> Form Validation Class Initialized
DEBUG - 2013-11-14 06:56:45 --> Controller Class Initialized
DEBUG - 2013-11-14 06:56:45 --> Model Class Initialized
DEBUG - 2013-11-14 06:56:45 --> Model Class Initialized
DEBUG - 2013-11-14 06:56:45 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 06:56:45 --> after session initialization................
INFO  - 2013-11-14 06:56:45 --> inside the auto suggest page.................
INFO  - 2013-11-14 06:56:45 --> after the list array.................
INFO  - 2013-11-14 06:56:45 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%re%' and p.locationid_location = 2
INFO  - 2013-11-14 06:56:45 --> after retrieving the data from db.................
INFO  - 2013-11-14 06:56:45 --> looping.................
INFO  - 2013-11-14 06:56:45 --> looping.................
INFO  - 2013-11-14 06:56:45 --> looping.................
INFO  - 2013-11-14 06:56:45 --> looping.................
INFO  - 2013-11-14 06:56:45 --> looping.................
DEBUG - 2013-11-14 06:56:45 --> Final output sent to browser
DEBUG - 2013-11-14 06:56:45 --> Total execution time: 0.0630
DEBUG - 2013-11-14 06:56:47 --> Config Class Initialized
DEBUG - 2013-11-14 06:56:47 --> Hooks Class Initialized
DEBUG - 2013-11-14 06:56:47 --> Utf8 Class Initialized
DEBUG - 2013-11-14 06:56:47 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 06:56:47 --> URI Class Initialized
DEBUG - 2013-11-14 06:56:47 --> Router Class Initialized
DEBUG - 2013-11-14 06:56:47 --> Output Class Initialized
DEBUG - 2013-11-14 06:56:47 --> Security Class Initialized
DEBUG - 2013-11-14 06:56:47 --> Input Class Initialized
DEBUG - 2013-11-14 06:56:47 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 06:56:47 --> Language Class Initialized
DEBUG - 2013-11-14 06:56:47 --> Loader Class Initialized
DEBUG - 2013-11-14 06:56:47 --> Helper loaded: form_helper
DEBUG - 2013-11-14 06:56:47 --> Helper loaded: url_helper
DEBUG - 2013-11-14 06:56:47 --> Helper loaded: html_helper
DEBUG - 2013-11-14 06:56:47 --> Database Driver Class Initialized
DEBUG - 2013-11-14 06:56:47 --> Session Class Initialized
DEBUG - 2013-11-14 06:56:47 --> Helper loaded: string_helper
DEBUG - 2013-11-14 06:56:47 --> Session routines successfully run
DEBUG - 2013-11-14 06:56:47 --> Form Validation Class Initialized
DEBUG - 2013-11-14 06:56:47 --> Controller Class Initialized
DEBUG - 2013-11-14 06:56:47 --> Model Class Initialized
DEBUG - 2013-11-14 06:56:47 --> Model Class Initialized
DEBUG - 2013-11-14 06:56:47 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 06:56:47 --> after session initialization................
INFO  - 2013-11-14 06:56:47 --> inside the auto suggest page.................
INFO  - 2013-11-14 06:56:47 --> after the list array.................
INFO  - 2013-11-14 06:56:47 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%e%' and p.locationid_location = 2
INFO  - 2013-11-14 06:56:47 --> after retrieving the data from db.................
INFO  - 2013-11-14 06:56:47 --> looping.................
INFO  - 2013-11-14 06:56:47 --> looping.................
INFO  - 2013-11-14 06:56:47 --> looping.................
INFO  - 2013-11-14 06:56:47 --> looping.................
INFO  - 2013-11-14 06:56:47 --> looping.................
INFO  - 2013-11-14 06:56:47 --> looping.................
INFO  - 2013-11-14 06:56:47 --> looping.................
INFO  - 2013-11-14 06:56:47 --> looping.................
INFO  - 2013-11-14 06:56:47 --> looping.................
DEBUG - 2013-11-14 06:56:47 --> Final output sent to browser
DEBUG - 2013-11-14 06:56:47 --> Total execution time: 0.0560
DEBUG - 2013-11-14 06:56:47 --> Config Class Initialized
DEBUG - 2013-11-14 06:56:47 --> Hooks Class Initialized
DEBUG - 2013-11-14 06:56:47 --> Utf8 Class Initialized
DEBUG - 2013-11-14 06:56:47 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 06:56:47 --> URI Class Initialized
DEBUG - 2013-11-14 06:56:47 --> Router Class Initialized
DEBUG - 2013-11-14 06:56:47 --> Output Class Initialized
DEBUG - 2013-11-14 06:56:47 --> Security Class Initialized
DEBUG - 2013-11-14 06:56:47 --> Input Class Initialized
DEBUG - 2013-11-14 06:56:47 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 06:56:47 --> Language Class Initialized
DEBUG - 2013-11-14 06:56:47 --> Loader Class Initialized
DEBUG - 2013-11-14 06:56:47 --> Helper loaded: form_helper
DEBUG - 2013-11-14 06:56:47 --> Helper loaded: url_helper
DEBUG - 2013-11-14 06:56:47 --> Helper loaded: html_helper
DEBUG - 2013-11-14 06:56:48 --> Database Driver Class Initialized
DEBUG - 2013-11-14 06:56:48 --> Session Class Initialized
DEBUG - 2013-11-14 06:56:48 --> Helper loaded: string_helper
DEBUG - 2013-11-14 06:56:48 --> Session routines successfully run
DEBUG - 2013-11-14 06:56:48 --> Form Validation Class Initialized
DEBUG - 2013-11-14 06:56:48 --> Controller Class Initialized
DEBUG - 2013-11-14 06:56:48 --> Model Class Initialized
DEBUG - 2013-11-14 06:56:48 --> Model Class Initialized
DEBUG - 2013-11-14 06:56:48 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 06:56:48 --> after session initialization................
INFO  - 2013-11-14 06:56:48 --> inside the auto suggest page.................
INFO  - 2013-11-14 06:56:48 --> after the list array.................
INFO  - 2013-11-14 06:56:48 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%ed%' and p.locationid_location = 2
INFO  - 2013-11-14 06:56:48 --> after retrieving the data from db.................
INFO  - 2013-11-14 06:56:48 --> looping.................
INFO  - 2013-11-14 06:56:48 --> looping.................
DEBUG - 2013-11-14 06:56:48 --> Final output sent to browser
DEBUG - 2013-11-14 06:56:48 --> Total execution time: 0.0660
DEBUG - 2013-11-14 06:56:53 --> Config Class Initialized
DEBUG - 2013-11-14 06:56:53 --> Hooks Class Initialized
DEBUG - 2013-11-14 06:56:53 --> Utf8 Class Initialized
DEBUG - 2013-11-14 06:56:53 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 06:56:53 --> URI Class Initialized
DEBUG - 2013-11-14 06:56:53 --> Router Class Initialized
DEBUG - 2013-11-14 06:56:53 --> Output Class Initialized
DEBUG - 2013-11-14 06:56:53 --> Security Class Initialized
DEBUG - 2013-11-14 06:56:53 --> Input Class Initialized
DEBUG - 2013-11-14 06:56:53 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 06:56:53 --> Language Class Initialized
DEBUG - 2013-11-14 06:56:53 --> Loader Class Initialized
DEBUG - 2013-11-14 06:56:53 --> Helper loaded: form_helper
DEBUG - 2013-11-14 06:56:53 --> Helper loaded: url_helper
DEBUG - 2013-11-14 06:56:53 --> Helper loaded: html_helper
DEBUG - 2013-11-14 06:56:53 --> Database Driver Class Initialized
DEBUG - 2013-11-14 06:56:53 --> Session Class Initialized
DEBUG - 2013-11-14 06:56:53 --> Helper loaded: string_helper
DEBUG - 2013-11-14 06:56:53 --> Session routines successfully run
DEBUG - 2013-11-14 06:56:53 --> Form Validation Class Initialized
DEBUG - 2013-11-14 06:56:53 --> Controller Class Initialized
DEBUG - 2013-11-14 06:56:53 --> Model Class Initialized
DEBUG - 2013-11-14 06:56:53 --> Model Class Initialized
DEBUG - 2013-11-14 06:56:53 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 06:56:53 --> after session initialization................
INFO  - 2013-11-14 06:56:53 --> inside the auto suggest page.................
INFO  - 2013-11-14 06:56:53 --> after the list array.................
INFO  - 2013-11-14 06:56:53 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%edi%' and p.locationid_location = 2
INFO  - 2013-11-14 06:56:53 --> after retrieving the data from db.................
INFO  - 2013-11-14 06:56:53 --> looping.................
DEBUG - 2013-11-14 06:56:53 --> Final output sent to browser
DEBUG - 2013-11-14 06:56:53 --> Total execution time: 0.0630
DEBUG - 2013-11-14 06:56:55 --> Config Class Initialized
DEBUG - 2013-11-14 06:56:55 --> Hooks Class Initialized
DEBUG - 2013-11-14 06:56:55 --> Utf8 Class Initialized
DEBUG - 2013-11-14 06:56:55 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 06:56:55 --> URI Class Initialized
DEBUG - 2013-11-14 06:56:55 --> Router Class Initialized
DEBUG - 2013-11-14 06:56:55 --> Output Class Initialized
DEBUG - 2013-11-14 06:56:55 --> Security Class Initialized
DEBUG - 2013-11-14 06:56:55 --> Input Class Initialized
DEBUG - 2013-11-14 06:56:55 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 06:56:55 --> Language Class Initialized
DEBUG - 2013-11-14 06:56:55 --> Loader Class Initialized
DEBUG - 2013-11-14 06:56:55 --> Helper loaded: form_helper
DEBUG - 2013-11-14 06:56:55 --> Helper loaded: url_helper
DEBUG - 2013-11-14 06:56:55 --> Helper loaded: html_helper
DEBUG - 2013-11-14 06:56:55 --> Database Driver Class Initialized
DEBUG - 2013-11-14 06:56:55 --> Session Class Initialized
DEBUG - 2013-11-14 06:56:55 --> Helper loaded: string_helper
DEBUG - 2013-11-14 06:56:55 --> Session routines successfully run
DEBUG - 2013-11-14 06:56:55 --> Form Validation Class Initialized
DEBUG - 2013-11-14 06:56:55 --> Controller Class Initialized
DEBUG - 2013-11-14 06:56:55 --> Model Class Initialized
DEBUG - 2013-11-14 06:56:55 --> Model Class Initialized
DEBUG - 2013-11-14 06:56:55 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 06:56:55 --> after session initialization................
INFO  - 2013-11-14 06:56:55 --> inside the auto suggest page.................
INFO  - 2013-11-14 06:56:55 --> after the list array.................
INFO  - 2013-11-14 06:56:55 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%ed%' and p.locationid_location = 2
INFO  - 2013-11-14 06:56:55 --> after retrieving the data from db.................
INFO  - 2013-11-14 06:56:55 --> looping.................
INFO  - 2013-11-14 06:56:55 --> looping.................
DEBUG - 2013-11-14 06:56:55 --> Final output sent to browser
DEBUG - 2013-11-14 06:56:55 --> Total execution time: 0.0490
DEBUG - 2013-11-14 06:56:55 --> Config Class Initialized
DEBUG - 2013-11-14 06:56:55 --> Hooks Class Initialized
DEBUG - 2013-11-14 06:56:55 --> Utf8 Class Initialized
DEBUG - 2013-11-14 06:56:55 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 06:56:55 --> URI Class Initialized
DEBUG - 2013-11-14 06:56:55 --> Router Class Initialized
DEBUG - 2013-11-14 06:56:55 --> Output Class Initialized
DEBUG - 2013-11-14 06:56:55 --> Security Class Initialized
DEBUG - 2013-11-14 06:56:55 --> Input Class Initialized
DEBUG - 2013-11-14 06:56:55 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 06:56:55 --> Language Class Initialized
DEBUG - 2013-11-14 06:56:55 --> Loader Class Initialized
DEBUG - 2013-11-14 06:56:55 --> Helper loaded: form_helper
DEBUG - 2013-11-14 06:56:55 --> Helper loaded: url_helper
DEBUG - 2013-11-14 06:56:55 --> Helper loaded: html_helper
DEBUG - 2013-11-14 06:56:55 --> Database Driver Class Initialized
DEBUG - 2013-11-14 06:56:55 --> Session Class Initialized
DEBUG - 2013-11-14 06:56:55 --> Helper loaded: string_helper
DEBUG - 2013-11-14 06:56:55 --> Session routines successfully run
DEBUG - 2013-11-14 06:56:55 --> Form Validation Class Initialized
DEBUG - 2013-11-14 06:56:55 --> Controller Class Initialized
DEBUG - 2013-11-14 06:56:55 --> Model Class Initialized
DEBUG - 2013-11-14 06:56:55 --> Model Class Initialized
DEBUG - 2013-11-14 06:56:55 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 06:56:55 --> after session initialization................
INFO  - 2013-11-14 06:56:55 --> inside the auto suggest page.................
INFO  - 2013-11-14 06:56:55 --> after the list array.................
INFO  - 2013-11-14 06:56:55 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%e%' and p.locationid_location = 2
INFO  - 2013-11-14 06:56:55 --> after retrieving the data from db.................
INFO  - 2013-11-14 06:56:55 --> looping.................
INFO  - 2013-11-14 06:56:55 --> looping.................
INFO  - 2013-11-14 06:56:55 --> looping.................
INFO  - 2013-11-14 06:56:55 --> looping.................
INFO  - 2013-11-14 06:56:55 --> looping.................
INFO  - 2013-11-14 06:56:55 --> looping.................
INFO  - 2013-11-14 06:56:55 --> looping.................
INFO  - 2013-11-14 06:56:55 --> looping.................
INFO  - 2013-11-14 06:56:55 --> looping.................
DEBUG - 2013-11-14 06:56:55 --> Final output sent to browser
DEBUG - 2013-11-14 06:56:55 --> Total execution time: 0.0510
DEBUG - 2013-11-14 06:56:56 --> Config Class Initialized
DEBUG - 2013-11-14 06:56:56 --> Hooks Class Initialized
DEBUG - 2013-11-14 06:56:56 --> Utf8 Class Initialized
DEBUG - 2013-11-14 06:56:56 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 06:56:56 --> URI Class Initialized
DEBUG - 2013-11-14 06:56:56 --> Router Class Initialized
DEBUG - 2013-11-14 06:56:56 --> Output Class Initialized
DEBUG - 2013-11-14 06:56:56 --> Security Class Initialized
DEBUG - 2013-11-14 06:56:56 --> Input Class Initialized
DEBUG - 2013-11-14 06:56:56 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 06:56:56 --> Language Class Initialized
DEBUG - 2013-11-14 06:56:56 --> Loader Class Initialized
DEBUG - 2013-11-14 06:56:56 --> Helper loaded: form_helper
DEBUG - 2013-11-14 06:56:56 --> Helper loaded: url_helper
DEBUG - 2013-11-14 06:56:56 --> Helper loaded: html_helper
DEBUG - 2013-11-14 06:56:56 --> Database Driver Class Initialized
DEBUG - 2013-11-14 06:56:56 --> Session Class Initialized
DEBUG - 2013-11-14 06:56:56 --> Helper loaded: string_helper
DEBUG - 2013-11-14 06:56:56 --> Session routines successfully run
DEBUG - 2013-11-14 06:56:56 --> Form Validation Class Initialized
DEBUG - 2013-11-14 06:56:56 --> Controller Class Initialized
DEBUG - 2013-11-14 06:56:56 --> Model Class Initialized
DEBUG - 2013-11-14 06:56:56 --> Model Class Initialized
DEBUG - 2013-11-14 06:56:56 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 06:56:56 --> after session initialization................
INFO  - 2013-11-14 06:56:56 --> inside the auto suggest page.................
INFO  - 2013-11-14 06:56:56 --> after the list array.................
INFO  - 2013-11-14 06:56:56 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%e%' and p.locationid_location = 2
INFO  - 2013-11-14 06:56:56 --> after retrieving the data from db.................
INFO  - 2013-11-14 06:56:56 --> looping.................
INFO  - 2013-11-14 06:56:56 --> looping.................
INFO  - 2013-11-14 06:56:56 --> looping.................
INFO  - 2013-11-14 06:56:56 --> looping.................
INFO  - 2013-11-14 06:56:56 --> looping.................
INFO  - 2013-11-14 06:56:56 --> looping.................
INFO  - 2013-11-14 06:56:56 --> looping.................
INFO  - 2013-11-14 06:56:56 --> looping.................
INFO  - 2013-11-14 06:56:56 --> looping.................
DEBUG - 2013-11-14 06:56:56 --> Final output sent to browser
DEBUG - 2013-11-14 06:56:56 --> Total execution time: 0.0530
DEBUG - 2013-11-14 06:56:57 --> Config Class Initialized
DEBUG - 2013-11-14 06:56:57 --> Hooks Class Initialized
DEBUG - 2013-11-14 06:56:57 --> Utf8 Class Initialized
DEBUG - 2013-11-14 06:56:57 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 06:56:57 --> URI Class Initialized
DEBUG - 2013-11-14 06:56:57 --> Router Class Initialized
DEBUG - 2013-11-14 06:56:57 --> Output Class Initialized
DEBUG - 2013-11-14 06:56:57 --> Security Class Initialized
DEBUG - 2013-11-14 06:56:57 --> Input Class Initialized
DEBUG - 2013-11-14 06:56:57 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 06:56:57 --> Language Class Initialized
DEBUG - 2013-11-14 06:56:57 --> Loader Class Initialized
DEBUG - 2013-11-14 06:56:57 --> Helper loaded: form_helper
DEBUG - 2013-11-14 06:56:57 --> Helper loaded: url_helper
DEBUG - 2013-11-14 06:56:57 --> Helper loaded: html_helper
DEBUG - 2013-11-14 06:56:57 --> Database Driver Class Initialized
DEBUG - 2013-11-14 06:56:57 --> Session Class Initialized
DEBUG - 2013-11-14 06:56:57 --> Helper loaded: string_helper
DEBUG - 2013-11-14 06:56:57 --> Session routines successfully run
DEBUG - 2013-11-14 06:56:57 --> Form Validation Class Initialized
DEBUG - 2013-11-14 06:56:57 --> Controller Class Initialized
DEBUG - 2013-11-14 06:56:57 --> Model Class Initialized
DEBUG - 2013-11-14 06:56:57 --> Model Class Initialized
DEBUG - 2013-11-14 06:56:57 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 06:56:57 --> after session initialization................
INFO  - 2013-11-14 06:56:57 --> inside the auto suggest page.................
INFO  - 2013-11-14 06:56:57 --> after the list array.................
INFO  - 2013-11-14 06:56:57 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%ed%' and p.locationid_location = 2
INFO  - 2013-11-14 06:56:57 --> after retrieving the data from db.................
INFO  - 2013-11-14 06:56:57 --> looping.................
INFO  - 2013-11-14 06:56:57 --> looping.................
DEBUG - 2013-11-14 06:56:57 --> Final output sent to browser
DEBUG - 2013-11-14 06:56:57 --> Total execution time: 0.0440
DEBUG - 2013-11-14 06:56:58 --> Config Class Initialized
DEBUG - 2013-11-14 06:56:58 --> Hooks Class Initialized
DEBUG - 2013-11-14 06:56:58 --> Utf8 Class Initialized
DEBUG - 2013-11-14 06:56:58 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 06:56:58 --> URI Class Initialized
DEBUG - 2013-11-14 06:56:58 --> Router Class Initialized
DEBUG - 2013-11-14 06:56:58 --> Output Class Initialized
DEBUG - 2013-11-14 06:56:58 --> Security Class Initialized
DEBUG - 2013-11-14 06:56:58 --> Input Class Initialized
DEBUG - 2013-11-14 06:56:58 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 06:56:58 --> Language Class Initialized
DEBUG - 2013-11-14 06:56:58 --> Loader Class Initialized
DEBUG - 2013-11-14 06:56:58 --> Helper loaded: form_helper
DEBUG - 2013-11-14 06:56:58 --> Helper loaded: url_helper
DEBUG - 2013-11-14 06:56:58 --> Helper loaded: html_helper
DEBUG - 2013-11-14 06:56:58 --> Database Driver Class Initialized
DEBUG - 2013-11-14 06:56:58 --> Session Class Initialized
DEBUG - 2013-11-14 06:56:58 --> Helper loaded: string_helper
DEBUG - 2013-11-14 06:56:58 --> Session routines successfully run
DEBUG - 2013-11-14 06:56:58 --> Form Validation Class Initialized
DEBUG - 2013-11-14 06:56:58 --> Controller Class Initialized
DEBUG - 2013-11-14 06:56:58 --> Model Class Initialized
DEBUG - 2013-11-14 06:56:58 --> Model Class Initialized
DEBUG - 2013-11-14 06:56:58 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 06:56:58 --> after session initialization................
INFO  - 2013-11-14 06:56:58 --> inside the auto suggest page.................
INFO  - 2013-11-14 06:56:58 --> after the list array.................
INFO  - 2013-11-14 06:56:58 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%edi%' and p.locationid_location = 2
INFO  - 2013-11-14 06:56:58 --> after retrieving the data from db.................
INFO  - 2013-11-14 06:56:58 --> looping.................
DEBUG - 2013-11-14 06:56:58 --> Final output sent to browser
DEBUG - 2013-11-14 06:56:58 --> Total execution time: 0.0740
DEBUG - 2013-11-14 15:58:45 --> Config Class Initialized
DEBUG - 2013-11-14 15:58:45 --> Hooks Class Initialized
DEBUG - 2013-11-14 15:58:45 --> Utf8 Class Initialized
DEBUG - 2013-11-14 15:58:45 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 15:58:45 --> URI Class Initialized
DEBUG - 2013-11-14 15:58:45 --> Router Class Initialized
DEBUG - 2013-11-14 15:58:45 --> No URI present. Default controller set.
DEBUG - 2013-11-14 15:58:45 --> Output Class Initialized
DEBUG - 2013-11-14 15:58:45 --> Security Class Initialized
DEBUG - 2013-11-14 15:58:45 --> Input Class Initialized
DEBUG - 2013-11-14 15:58:45 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 15:58:45 --> Language Class Initialized
DEBUG - 2013-11-14 15:58:45 --> Loader Class Initialized
DEBUG - 2013-11-14 15:58:45 --> Helper loaded: form_helper
DEBUG - 2013-11-14 15:58:45 --> Helper loaded: url_helper
DEBUG - 2013-11-14 15:58:45 --> Helper loaded: html_helper
DEBUG - 2013-11-14 15:58:45 --> Database Driver Class Initialized
DEBUG - 2013-11-14 15:58:46 --> Session Class Initialized
DEBUG - 2013-11-14 15:58:46 --> Helper loaded: string_helper
DEBUG - 2013-11-14 15:58:46 --> A session cookie was not found.
DEBUG - 2013-11-14 15:58:46 --> Session routines successfully run
DEBUG - 2013-11-14 15:58:46 --> Form Validation Class Initialized
DEBUG - 2013-11-14 15:58:46 --> Controller Class Initialized
INFO  - 2013-11-14 15:58:46 --> the form message==>
INFO  - 2013-11-14 15:58:46 --> The session id is ========>32a2c5a9fff208a0cf82481f191ac64c and the member id is =======>
INFO  - 2013-11-14 15:58:46 --> after the retrieving session list.................//////////
DEBUG - 2013-11-14 15:58:46 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-11-14 15:58:46 --> Final output sent to browser
DEBUG - 2013-11-14 15:58:46 --> Total execution time: 1.4181
DEBUG - 2013-11-14 15:58:55 --> Config Class Initialized
DEBUG - 2013-11-14 15:58:55 --> Hooks Class Initialized
DEBUG - 2013-11-14 15:58:55 --> Utf8 Class Initialized
DEBUG - 2013-11-14 15:58:55 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 15:58:55 --> URI Class Initialized
DEBUG - 2013-11-14 15:58:55 --> Router Class Initialized
DEBUG - 2013-11-14 15:58:55 --> Output Class Initialized
DEBUG - 2013-11-14 15:58:55 --> Security Class Initialized
DEBUG - 2013-11-14 15:58:55 --> Input Class Initialized
DEBUG - 2013-11-14 15:58:55 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 15:58:55 --> Language Class Initialized
DEBUG - 2013-11-14 15:58:55 --> Loader Class Initialized
DEBUG - 2013-11-14 15:58:55 --> Helper loaded: form_helper
DEBUG - 2013-11-14 15:58:55 --> Helper loaded: url_helper
DEBUG - 2013-11-14 15:58:55 --> Helper loaded: html_helper
DEBUG - 2013-11-14 15:58:55 --> Database Driver Class Initialized
DEBUG - 2013-11-14 15:58:55 --> Session Class Initialized
DEBUG - 2013-11-14 15:58:55 --> Helper loaded: string_helper
DEBUG - 2013-11-14 15:58:55 --> Session routines successfully run
DEBUG - 2013-11-14 15:58:55 --> Form Validation Class Initialized
DEBUG - 2013-11-14 15:58:55 --> Controller Class Initialized
DEBUG - 2013-11-14 15:58:55 --> Model Class Initialized
DEBUG - 2013-11-14 15:58:55 --> Model Class Initialized
DEBUG - 2013-11-14 15:58:55 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 15:58:55 --> after session initialization................
INFO  - 2013-11-14 15:58:55 --> inside rays login auth.............
DEBUG - 2013-11-14 15:58:55 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-11-14 15:58:55 --> XSS Filtering completed
DEBUG - 2013-11-14 15:58:55 --> XSS Filtering completed
INFO  - 2013-11-14 15:58:55 --> before getting the relation of member............6
INFO  - 2013-11-14 15:58:55 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-11-14 15:58:55 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-14 15:58:55 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-11-14 15:58:55 --> inside retrieving vacancy for member
INFO  - 2013-11-14 15:58:56 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-11-14 15:58:56 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-14 15:58:56 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-11-14 15:58:56 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-11-14 15:58:56 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-14 15:58:56 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-14 15:58:56 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-11-14 15:58:56 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-11-14 15:58:56 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-11-14 15:58:56 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-11-14 15:58:56 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-11-14 15:58:56 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-11-14 15:58:56 --> Final output sent to browser
DEBUG - 2013-11-14 15:58:56 --> Total execution time: 1.7401
DEBUG - 2013-11-14 15:58:57 --> Config Class Initialized
DEBUG - 2013-11-14 15:58:57 --> Hooks Class Initialized
DEBUG - 2013-11-14 15:58:57 --> Utf8 Class Initialized
DEBUG - 2013-11-14 15:58:57 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 15:58:57 --> URI Class Initialized
DEBUG - 2013-11-14 15:58:57 --> Router Class Initialized
DEBUG - 2013-11-14 15:58:57 --> Output Class Initialized
DEBUG - 2013-11-14 15:58:57 --> Security Class Initialized
DEBUG - 2013-11-14 15:58:57 --> Input Class Initialized
DEBUG - 2013-11-14 15:58:57 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 15:58:57 --> Language Class Initialized
DEBUG - 2013-11-14 15:58:57 --> Loader Class Initialized
DEBUG - 2013-11-14 15:58:57 --> Helper loaded: form_helper
DEBUG - 2013-11-14 15:58:57 --> Helper loaded: url_helper
DEBUG - 2013-11-14 15:58:57 --> Helper loaded: html_helper
DEBUG - 2013-11-14 15:58:57 --> Database Driver Class Initialized
DEBUG - 2013-11-14 15:58:58 --> Session Class Initialized
DEBUG - 2013-11-14 15:58:58 --> Helper loaded: string_helper
DEBUG - 2013-11-14 15:58:58 --> Session routines successfully run
DEBUG - 2013-11-14 15:58:58 --> Form Validation Class Initialized
DEBUG - 2013-11-14 15:58:58 --> Controller Class Initialized
DEBUG - 2013-11-14 15:58:58 --> Model Class Initialized
DEBUG - 2013-11-14 15:58:58 --> Model Class Initialized
DEBUG - 2013-11-14 15:58:58 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 15:58:58 --> after session initialization................
ERROR - 2013-11-14 15:58:58 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-14 15:58:58 --> Config Class Initialized
DEBUG - 2013-11-14 15:58:58 --> Hooks Class Initialized
DEBUG - 2013-11-14 15:58:58 --> Utf8 Class Initialized
DEBUG - 2013-11-14 15:58:58 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 15:58:58 --> URI Class Initialized
DEBUG - 2013-11-14 15:58:58 --> Router Class Initialized
ERROR - 2013-11-14 15:58:58 --> 404 Page Not Found --> css
DEBUG - 2013-11-14 15:59:00 --> Config Class Initialized
DEBUG - 2013-11-14 15:59:00 --> Hooks Class Initialized
DEBUG - 2013-11-14 15:59:00 --> Utf8 Class Initialized
DEBUG - 2013-11-14 15:59:00 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 15:59:00 --> URI Class Initialized
DEBUG - 2013-11-14 15:59:00 --> Router Class Initialized
DEBUG - 2013-11-14 15:59:00 --> Output Class Initialized
DEBUG - 2013-11-14 15:59:00 --> Security Class Initialized
DEBUG - 2013-11-14 15:59:00 --> Input Class Initialized
DEBUG - 2013-11-14 15:59:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 15:59:00 --> Language Class Initialized
DEBUG - 2013-11-14 15:59:00 --> Loader Class Initialized
DEBUG - 2013-11-14 15:59:00 --> Helper loaded: form_helper
DEBUG - 2013-11-14 15:59:00 --> Helper loaded: url_helper
DEBUG - 2013-11-14 15:59:00 --> Helper loaded: html_helper
DEBUG - 2013-11-14 15:59:00 --> Database Driver Class Initialized
DEBUG - 2013-11-14 15:59:01 --> Session Class Initialized
DEBUG - 2013-11-14 15:59:01 --> Helper loaded: string_helper
DEBUG - 2013-11-14 15:59:01 --> Session routines successfully run
DEBUG - 2013-11-14 15:59:01 --> Form Validation Class Initialized
DEBUG - 2013-11-14 15:59:01 --> Controller Class Initialized
DEBUG - 2013-11-14 15:59:01 --> Model Class Initialized
DEBUG - 2013-11-14 15:59:01 --> Model Class Initialized
DEBUG - 2013-11-14 15:59:01 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 15:59:01 --> after session initialization................
INFO  - 2013-11-14 15:59:01 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 15:59:01 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 15:59:01 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 15:59:01 --> inside retrieving locations 
INFO  - 2013-11-14 15:59:01 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 15:59:01 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 15:59:01 --> Final output sent to browser
DEBUG - 2013-11-14 15:59:01 --> Total execution time: 1.1671
DEBUG - 2013-11-14 15:59:38 --> Config Class Initialized
DEBUG - 2013-11-14 15:59:38 --> Hooks Class Initialized
DEBUG - 2013-11-14 15:59:38 --> Utf8 Class Initialized
DEBUG - 2013-11-14 15:59:38 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 15:59:38 --> URI Class Initialized
DEBUG - 2013-11-14 15:59:38 --> Router Class Initialized
DEBUG - 2013-11-14 15:59:38 --> Output Class Initialized
DEBUG - 2013-11-14 15:59:38 --> Security Class Initialized
DEBUG - 2013-11-14 15:59:38 --> Input Class Initialized
DEBUG - 2013-11-14 15:59:38 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 15:59:38 --> Language Class Initialized
DEBUG - 2013-11-14 15:59:38 --> Loader Class Initialized
DEBUG - 2013-11-14 15:59:38 --> Helper loaded: form_helper
DEBUG - 2013-11-14 15:59:38 --> Helper loaded: url_helper
DEBUG - 2013-11-14 15:59:38 --> Helper loaded: html_helper
DEBUG - 2013-11-14 15:59:38 --> Database Driver Class Initialized
DEBUG - 2013-11-14 15:59:39 --> Session Class Initialized
DEBUG - 2013-11-14 15:59:39 --> Helper loaded: string_helper
DEBUG - 2013-11-14 15:59:39 --> Session routines successfully run
DEBUG - 2013-11-14 15:59:39 --> Form Validation Class Initialized
DEBUG - 2013-11-14 15:59:39 --> Controller Class Initialized
DEBUG - 2013-11-14 15:59:39 --> Model Class Initialized
DEBUG - 2013-11-14 15:59:39 --> Model Class Initialized
DEBUG - 2013-11-14 15:59:39 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 15:59:39 --> after session initialization................
INFO  - 2013-11-14 15:59:39 --> inside retrieving pharmacy by location id 2
INFO  - 2013-11-14 15:59:39 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '2'
LIMIT 25
DEBUG - 2013-11-14 15:59:39 --> Final output sent to browser
DEBUG - 2013-11-14 15:59:39 --> Total execution time: 1.0691
DEBUG - 2013-11-14 15:59:43 --> Config Class Initialized
DEBUG - 2013-11-14 15:59:43 --> Hooks Class Initialized
DEBUG - 2013-11-14 15:59:43 --> Utf8 Class Initialized
DEBUG - 2013-11-14 15:59:43 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 15:59:43 --> URI Class Initialized
DEBUG - 2013-11-14 15:59:43 --> Router Class Initialized
DEBUG - 2013-11-14 15:59:43 --> Output Class Initialized
DEBUG - 2013-11-14 15:59:43 --> Security Class Initialized
DEBUG - 2013-11-14 15:59:43 --> Input Class Initialized
DEBUG - 2013-11-14 15:59:43 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 15:59:43 --> Language Class Initialized
DEBUG - 2013-11-14 15:59:43 --> Loader Class Initialized
DEBUG - 2013-11-14 15:59:43 --> Helper loaded: form_helper
DEBUG - 2013-11-14 15:59:43 --> Helper loaded: url_helper
DEBUG - 2013-11-14 15:59:43 --> Helper loaded: html_helper
DEBUG - 2013-11-14 15:59:43 --> Database Driver Class Initialized
DEBUG - 2013-11-14 15:59:43 --> Session Class Initialized
DEBUG - 2013-11-14 15:59:43 --> Helper loaded: string_helper
DEBUG - 2013-11-14 15:59:43 --> Session routines successfully run
DEBUG - 2013-11-14 15:59:43 --> Form Validation Class Initialized
DEBUG - 2013-11-14 15:59:43 --> Controller Class Initialized
DEBUG - 2013-11-14 15:59:43 --> Model Class Initialized
DEBUG - 2013-11-14 15:59:43 --> Model Class Initialized
DEBUG - 2013-11-14 15:59:43 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 15:59:43 --> after session initialization................
INFO  - 2013-11-14 15:59:43 --> inside the auto suggest page.................
INFO  - 2013-11-14 15:59:43 --> after the list array.................
INFO  - 2013-11-14 15:59:43 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%s%' and p.locationid_location = 2
INFO  - 2013-11-14 15:59:43 --> after retrieving the data from db.................
INFO  - 2013-11-14 15:59:43 --> looping.................
INFO  - 2013-11-14 15:59:43 --> looping.................
INFO  - 2013-11-14 15:59:43 --> looping.................
INFO  - 2013-11-14 15:59:43 --> looping.................
INFO  - 2013-11-14 15:59:43 --> looping.................
INFO  - 2013-11-14 15:59:43 --> looping.................
INFO  - 2013-11-14 15:59:43 --> looping.................
INFO  - 2013-11-14 15:59:43 --> looping.................
INFO  - 2013-11-14 15:59:43 --> looping.................
DEBUG - 2013-11-14 15:59:43 --> Final output sent to browser
DEBUG - 2013-11-14 15:59:43 --> Total execution time: 0.0600
DEBUG - 2013-11-14 15:59:43 --> Config Class Initialized
DEBUG - 2013-11-14 15:59:43 --> Hooks Class Initialized
DEBUG - 2013-11-14 15:59:43 --> Utf8 Class Initialized
DEBUG - 2013-11-14 15:59:43 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 15:59:43 --> URI Class Initialized
DEBUG - 2013-11-14 15:59:43 --> Router Class Initialized
DEBUG - 2013-11-14 15:59:43 --> Output Class Initialized
DEBUG - 2013-11-14 15:59:43 --> Security Class Initialized
DEBUG - 2013-11-14 15:59:43 --> Input Class Initialized
DEBUG - 2013-11-14 15:59:43 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 15:59:43 --> Language Class Initialized
DEBUG - 2013-11-14 15:59:43 --> Loader Class Initialized
DEBUG - 2013-11-14 15:59:43 --> Helper loaded: form_helper
DEBUG - 2013-11-14 15:59:43 --> Helper loaded: url_helper
DEBUG - 2013-11-14 15:59:43 --> Helper loaded: html_helper
DEBUG - 2013-11-14 15:59:43 --> Database Driver Class Initialized
DEBUG - 2013-11-14 15:59:43 --> Session Class Initialized
DEBUG - 2013-11-14 15:59:43 --> Helper loaded: string_helper
DEBUG - 2013-11-14 15:59:43 --> Session routines successfully run
DEBUG - 2013-11-14 15:59:43 --> Form Validation Class Initialized
DEBUG - 2013-11-14 15:59:43 --> Controller Class Initialized
DEBUG - 2013-11-14 15:59:43 --> Model Class Initialized
DEBUG - 2013-11-14 15:59:43 --> Model Class Initialized
DEBUG - 2013-11-14 15:59:43 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 15:59:43 --> after session initialization................
INFO  - 2013-11-14 15:59:43 --> inside the auto suggest page.................
INFO  - 2013-11-14 15:59:43 --> after the list array.................
INFO  - 2013-11-14 15:59:43 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%sc%' and p.locationid_location = 2
INFO  - 2013-11-14 15:59:43 --> after retrieving the data from db.................
INFO  - 2013-11-14 15:59:43 --> looping.................
DEBUG - 2013-11-14 15:59:43 --> Final output sent to browser
DEBUG - 2013-11-14 15:59:43 --> Total execution time: 0.1190
DEBUG - 2013-11-14 15:59:46 --> Config Class Initialized
DEBUG - 2013-11-14 15:59:46 --> Hooks Class Initialized
DEBUG - 2013-11-14 15:59:46 --> Utf8 Class Initialized
DEBUG - 2013-11-14 15:59:46 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 15:59:46 --> URI Class Initialized
DEBUG - 2013-11-14 15:59:46 --> Router Class Initialized
DEBUG - 2013-11-14 15:59:46 --> Output Class Initialized
DEBUG - 2013-11-14 15:59:46 --> Security Class Initialized
DEBUG - 2013-11-14 15:59:46 --> Input Class Initialized
DEBUG - 2013-11-14 15:59:46 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 15:59:46 --> Language Class Initialized
DEBUG - 2013-11-14 15:59:46 --> Loader Class Initialized
DEBUG - 2013-11-14 15:59:46 --> Helper loaded: form_helper
DEBUG - 2013-11-14 15:59:46 --> Helper loaded: url_helper
DEBUG - 2013-11-14 15:59:46 --> Helper loaded: html_helper
DEBUG - 2013-11-14 15:59:46 --> Database Driver Class Initialized
DEBUG - 2013-11-14 15:59:46 --> Session Class Initialized
DEBUG - 2013-11-14 15:59:46 --> Helper loaded: string_helper
DEBUG - 2013-11-14 15:59:46 --> Session routines successfully run
DEBUG - 2013-11-14 15:59:46 --> Form Validation Class Initialized
DEBUG - 2013-11-14 15:59:46 --> Controller Class Initialized
DEBUG - 2013-11-14 15:59:46 --> Model Class Initialized
DEBUG - 2013-11-14 15:59:46 --> Model Class Initialized
DEBUG - 2013-11-14 15:59:46 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 15:59:46 --> after session initialization................
INFO  - 2013-11-14 15:59:46 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>29
INFO  - 2013-11-14 15:59:46 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` =  '29'
DEBUG - 2013-11-14 15:59:46 --> Final output sent to browser
DEBUG - 2013-11-14 15:59:46 --> Total execution time: 0.0410
DEBUG - 2013-11-14 16:00:08 --> Config Class Initialized
DEBUG - 2013-11-14 16:00:08 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:00:08 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:00:08 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:00:08 --> URI Class Initialized
DEBUG - 2013-11-14 16:00:08 --> Router Class Initialized
DEBUG - 2013-11-14 16:00:08 --> Output Class Initialized
DEBUG - 2013-11-14 16:00:08 --> Security Class Initialized
DEBUG - 2013-11-14 16:00:08 --> Input Class Initialized
DEBUG - 2013-11-14 16:00:08 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:00:08 --> Language Class Initialized
DEBUG - 2013-11-14 16:00:09 --> Loader Class Initialized
DEBUG - 2013-11-14 16:00:09 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:00:09 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:00:09 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:00:09 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:00:09 --> Config Class Initialized
DEBUG - 2013-11-14 16:00:09 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:00:09 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:00:09 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:00:09 --> URI Class Initialized
DEBUG - 2013-11-14 16:00:09 --> Router Class Initialized
DEBUG - 2013-11-14 16:00:09 --> Output Class Initialized
DEBUG - 2013-11-14 16:00:09 --> Security Class Initialized
DEBUG - 2013-11-14 16:00:09 --> Input Class Initialized
DEBUG - 2013-11-14 16:00:09 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:00:09 --> Language Class Initialized
DEBUG - 2013-11-14 16:00:09 --> Loader Class Initialized
DEBUG - 2013-11-14 16:00:09 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:00:09 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:00:09 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:00:09 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:00:09 --> Session Class Initialized
DEBUG - 2013-11-14 16:00:09 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:00:09 --> Session routines successfully run
DEBUG - 2013-11-14 16:00:09 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:00:09 --> Controller Class Initialized
DEBUG - 2013-11-14 16:00:09 --> Model Class Initialized
DEBUG - 2013-11-14 16:00:09 --> Model Class Initialized
DEBUG - 2013-11-14 16:00:09 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:00:09 --> after session initialization................
INFO  - 2013-11-14 16:00:09 --> inside the auto suggest page.................
INFO  - 2013-11-14 16:00:09 --> after the list array.................
INFO  - 2013-11-14 16:00:09 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%sc%' and p.locationid_location = 2
INFO  - 2013-11-14 16:00:09 --> after retrieving the data from db.................
INFO  - 2013-11-14 16:00:09 --> looping.................
DEBUG - 2013-11-14 16:00:09 --> Final output sent to browser
DEBUG - 2013-11-14 16:00:09 --> Total execution time: 0.0560
DEBUG - 2013-11-14 16:00:10 --> Session Class Initialized
DEBUG - 2013-11-14 16:00:10 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:00:10 --> Session routines successfully run
DEBUG - 2013-11-14 16:00:10 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:00:10 --> Controller Class Initialized
DEBUG - 2013-11-14 16:00:10 --> Model Class Initialized
DEBUG - 2013-11-14 16:00:10 --> Model Class Initialized
DEBUG - 2013-11-14 16:00:10 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:00:10 --> after session initialization................
INFO  - 2013-11-14 16:00:10 --> inside the auto suggest page.................
INFO  - 2013-11-14 16:00:10 --> after the list array.................
INFO  - 2013-11-14 16:00:10 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%s%' and p.locationid_location = 2
INFO  - 2013-11-14 16:00:10 --> after retrieving the data from db.................
INFO  - 2013-11-14 16:00:10 --> looping.................
INFO  - 2013-11-14 16:00:10 --> looping.................
INFO  - 2013-11-14 16:00:10 --> looping.................
INFO  - 2013-11-14 16:00:10 --> looping.................
INFO  - 2013-11-14 16:00:10 --> looping.................
INFO  - 2013-11-14 16:00:10 --> looping.................
INFO  - 2013-11-14 16:00:10 --> looping.................
INFO  - 2013-11-14 16:00:10 --> looping.................
INFO  - 2013-11-14 16:00:10 --> looping.................
DEBUG - 2013-11-14 16:00:10 --> Final output sent to browser
DEBUG - 2013-11-14 16:00:10 --> Total execution time: 1.1061
DEBUG - 2013-11-14 16:12:02 --> Config Class Initialized
DEBUG - 2013-11-14 16:12:02 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:12:02 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:12:02 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:12:02 --> URI Class Initialized
DEBUG - 2013-11-14 16:12:02 --> Router Class Initialized
DEBUG - 2013-11-14 16:12:02 --> Output Class Initialized
DEBUG - 2013-11-14 16:12:02 --> Security Class Initialized
DEBUG - 2013-11-14 16:12:02 --> Input Class Initialized
DEBUG - 2013-11-14 16:12:02 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:12:02 --> Language Class Initialized
DEBUG - 2013-11-14 16:12:02 --> Loader Class Initialized
DEBUG - 2013-11-14 16:12:02 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:12:02 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:12:02 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:12:02 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:12:02 --> Session Class Initialized
DEBUG - 2013-11-14 16:12:02 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:12:02 --> Session routines successfully run
DEBUG - 2013-11-14 16:12:02 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:12:02 --> Controller Class Initialized
DEBUG - 2013-11-14 16:12:02 --> Model Class Initialized
DEBUG - 2013-11-14 16:12:02 --> Model Class Initialized
DEBUG - 2013-11-14 16:12:02 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:12:02 --> after session initialization................
INFO  - 2013-11-14 16:12:02 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 16:12:02 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 16:12:02 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 16:12:02 --> inside retrieving locations 
INFO  - 2013-11-14 16:12:02 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 16:12:02 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 16:12:02 --> Final output sent to browser
DEBUG - 2013-11-14 16:12:02 --> Total execution time: 0.0560
DEBUG - 2013-11-14 16:12:05 --> Config Class Initialized
DEBUG - 2013-11-14 16:12:05 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:12:05 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:12:05 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:12:05 --> URI Class Initialized
DEBUG - 2013-11-14 16:12:05 --> Router Class Initialized
DEBUG - 2013-11-14 16:12:05 --> Output Class Initialized
DEBUG - 2013-11-14 16:12:05 --> Security Class Initialized
DEBUG - 2013-11-14 16:12:05 --> Input Class Initialized
DEBUG - 2013-11-14 16:12:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:12:05 --> Language Class Initialized
DEBUG - 2013-11-14 16:12:05 --> Loader Class Initialized
DEBUG - 2013-11-14 16:12:05 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:12:05 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:12:05 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:12:05 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:12:05 --> Session Class Initialized
DEBUG - 2013-11-14 16:12:05 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:12:05 --> Session routines successfully run
DEBUG - 2013-11-14 16:12:05 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:12:05 --> Controller Class Initialized
DEBUG - 2013-11-14 16:12:05 --> Model Class Initialized
DEBUG - 2013-11-14 16:12:05 --> Model Class Initialized
DEBUG - 2013-11-14 16:12:05 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:12:05 --> after session initialization................
INFO  - 2013-11-14 16:12:05 --> inside retrieving pharmacy by location id 1
ERROR - 2013-11-14 16:12:05 --> Severity: Notice  --> Undefined variable: location C:\xampp\htdocs\Pharmarays\pharmaray-application\models\members_model\membermodel.php 489
INFO  - 2013-11-14 16:12:05 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
LIMIT 25
DEBUG - 2013-11-14 16:12:05 --> Final output sent to browser
DEBUG - 2013-11-14 16:12:05 --> Total execution time: 0.0450
DEBUG - 2013-11-14 16:13:26 --> Config Class Initialized
DEBUG - 2013-11-14 16:13:26 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:13:26 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:13:26 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:13:26 --> URI Class Initialized
DEBUG - 2013-11-14 16:13:26 --> Router Class Initialized
DEBUG - 2013-11-14 16:13:26 --> Output Class Initialized
DEBUG - 2013-11-14 16:13:26 --> Security Class Initialized
DEBUG - 2013-11-14 16:13:26 --> Input Class Initialized
DEBUG - 2013-11-14 16:13:26 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:13:26 --> Language Class Initialized
DEBUG - 2013-11-14 16:13:26 --> Loader Class Initialized
DEBUG - 2013-11-14 16:13:26 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:13:26 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:13:26 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:13:27 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:13:27 --> Session Class Initialized
DEBUG - 2013-11-14 16:13:27 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:13:27 --> Session routines successfully run
DEBUG - 2013-11-14 16:13:27 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:13:27 --> Controller Class Initialized
DEBUG - 2013-11-14 16:13:27 --> Model Class Initialized
DEBUG - 2013-11-14 16:13:27 --> Model Class Initialized
DEBUG - 2013-11-14 16:13:27 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:13:27 --> after session initialization................
INFO  - 2013-11-14 16:13:27 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 16:13:27 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 16:13:27 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 16:13:27 --> inside retrieving locations 
INFO  - 2013-11-14 16:13:27 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 16:13:27 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 16:13:27 --> Final output sent to browser
DEBUG - 2013-11-14 16:13:27 --> Total execution time: 0.0530
DEBUG - 2013-11-14 16:13:36 --> Config Class Initialized
DEBUG - 2013-11-14 16:13:36 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:13:36 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:13:36 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:13:36 --> URI Class Initialized
DEBUG - 2013-11-14 16:13:36 --> Router Class Initialized
DEBUG - 2013-11-14 16:13:36 --> Output Class Initialized
DEBUG - 2013-11-14 16:13:36 --> Security Class Initialized
DEBUG - 2013-11-14 16:13:36 --> Input Class Initialized
DEBUG - 2013-11-14 16:13:36 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:13:36 --> Language Class Initialized
DEBUG - 2013-11-14 16:13:36 --> Loader Class Initialized
DEBUG - 2013-11-14 16:13:36 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:13:36 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:13:36 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:13:36 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:13:37 --> Session Class Initialized
DEBUG - 2013-11-14 16:13:37 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:13:37 --> Session routines successfully run
DEBUG - 2013-11-14 16:13:37 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:13:37 --> Controller Class Initialized
DEBUG - 2013-11-14 16:13:37 --> Model Class Initialized
DEBUG - 2013-11-14 16:13:37 --> Model Class Initialized
DEBUG - 2013-11-14 16:13:37 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:13:37 --> after session initialization................
INFO  - 2013-11-14 16:13:37 --> inside retrieving pharmacy by location id 2
ERROR - 2013-11-14 16:13:37 --> Severity: Notice  --> Undefined variable: location C:\xampp\htdocs\Pharmarays\pharmaray-application\models\members_model\membermodel.php 489
INFO  - 2013-11-14 16:13:37 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
LIMIT 25
DEBUG - 2013-11-14 16:13:37 --> Final output sent to browser
DEBUG - 2013-11-14 16:13:37 --> Total execution time: 1.0861
DEBUG - 2013-11-14 16:13:40 --> Config Class Initialized
DEBUG - 2013-11-14 16:13:40 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:13:40 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:13:40 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:13:40 --> URI Class Initialized
DEBUG - 2013-11-14 16:13:40 --> Router Class Initialized
DEBUG - 2013-11-14 16:13:40 --> Output Class Initialized
DEBUG - 2013-11-14 16:13:40 --> Security Class Initialized
DEBUG - 2013-11-14 16:13:40 --> Input Class Initialized
DEBUG - 2013-11-14 16:13:40 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:13:40 --> Language Class Initialized
DEBUG - 2013-11-14 16:13:40 --> Loader Class Initialized
DEBUG - 2013-11-14 16:13:40 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:13:40 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:13:40 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:13:40 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:13:40 --> Session Class Initialized
DEBUG - 2013-11-14 16:13:40 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:13:40 --> Session routines successfully run
DEBUG - 2013-11-14 16:13:40 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:13:40 --> Controller Class Initialized
DEBUG - 2013-11-14 16:13:40 --> Model Class Initialized
DEBUG - 2013-11-14 16:13:40 --> Model Class Initialized
DEBUG - 2013-11-14 16:13:40 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:13:40 --> after session initialization................
INFO  - 2013-11-14 16:13:40 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 16:13:40 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 16:13:40 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 16:13:40 --> inside retrieving locations 
INFO  - 2013-11-14 16:13:40 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 16:13:40 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 16:13:40 --> Final output sent to browser
DEBUG - 2013-11-14 16:13:40 --> Total execution time: 0.0590
DEBUG - 2013-11-14 16:14:02 --> Config Class Initialized
DEBUG - 2013-11-14 16:14:02 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:14:02 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:14:02 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:14:02 --> URI Class Initialized
DEBUG - 2013-11-14 16:14:02 --> Router Class Initialized
DEBUG - 2013-11-14 16:14:02 --> Output Class Initialized
DEBUG - 2013-11-14 16:14:02 --> Security Class Initialized
DEBUG - 2013-11-14 16:14:02 --> Input Class Initialized
DEBUG - 2013-11-14 16:14:02 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:14:02 --> Language Class Initialized
DEBUG - 2013-11-14 16:14:02 --> Loader Class Initialized
DEBUG - 2013-11-14 16:14:02 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:14:02 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:14:02 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:14:02 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:14:02 --> Session Class Initialized
DEBUG - 2013-11-14 16:14:02 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:14:02 --> Session routines successfully run
DEBUG - 2013-11-14 16:14:02 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:14:02 --> Controller Class Initialized
DEBUG - 2013-11-14 16:14:02 --> Model Class Initialized
DEBUG - 2013-11-14 16:14:02 --> Model Class Initialized
DEBUG - 2013-11-14 16:14:02 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:14:02 --> after session initialization................
INFO  - 2013-11-14 16:14:02 --> inside retrieving pharmacy by location id 1
ERROR - 2013-11-14 16:14:02 --> Severity: Notice  --> Undefined variable: location C:\xampp\htdocs\Pharmarays\pharmaray-application\models\members_model\membermodel.php 489
INFO  - 2013-11-14 16:14:02 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
LIMIT 25
DEBUG - 2013-11-14 16:14:02 --> Final output sent to browser
DEBUG - 2013-11-14 16:14:02 --> Total execution time: 0.0410
DEBUG - 2013-11-14 16:16:29 --> Config Class Initialized
DEBUG - 2013-11-14 16:16:29 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:16:29 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:16:29 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:16:29 --> URI Class Initialized
DEBUG - 2013-11-14 16:16:29 --> Router Class Initialized
DEBUG - 2013-11-14 16:16:29 --> Output Class Initialized
DEBUG - 2013-11-14 16:16:29 --> Security Class Initialized
DEBUG - 2013-11-14 16:16:29 --> Input Class Initialized
DEBUG - 2013-11-14 16:16:29 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:16:29 --> Language Class Initialized
DEBUG - 2013-11-14 16:16:29 --> Loader Class Initialized
DEBUG - 2013-11-14 16:16:29 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:16:29 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:16:29 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:16:29 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:16:30 --> Session Class Initialized
DEBUG - 2013-11-14 16:16:30 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:16:30 --> Session routines successfully run
DEBUG - 2013-11-14 16:16:30 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:16:30 --> Controller Class Initialized
DEBUG - 2013-11-14 16:16:30 --> Model Class Initialized
DEBUG - 2013-11-14 16:16:30 --> Model Class Initialized
DEBUG - 2013-11-14 16:16:30 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:16:30 --> after session initialization................
INFO  - 2013-11-14 16:16:30 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 16:16:30 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 16:16:30 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 16:16:30 --> inside retrieving locations 
INFO  - 2013-11-14 16:16:30 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 16:16:30 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 16:16:30 --> Final output sent to browser
DEBUG - 2013-11-14 16:16:30 --> Total execution time: 0.0570
DEBUG - 2013-11-14 16:16:32 --> Config Class Initialized
DEBUG - 2013-11-14 16:16:32 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:16:32 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:16:32 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:16:32 --> URI Class Initialized
DEBUG - 2013-11-14 16:16:32 --> Router Class Initialized
DEBUG - 2013-11-14 16:16:32 --> Output Class Initialized
DEBUG - 2013-11-14 16:16:32 --> Security Class Initialized
DEBUG - 2013-11-14 16:16:32 --> Input Class Initialized
DEBUG - 2013-11-14 16:16:32 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:16:32 --> Language Class Initialized
DEBUG - 2013-11-14 16:16:32 --> Loader Class Initialized
DEBUG - 2013-11-14 16:16:32 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:16:32 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:16:32 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:16:32 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:16:32 --> Session Class Initialized
DEBUG - 2013-11-14 16:16:32 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:16:32 --> Session routines successfully run
DEBUG - 2013-11-14 16:16:32 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:16:32 --> Controller Class Initialized
DEBUG - 2013-11-14 16:16:32 --> Model Class Initialized
DEBUG - 2013-11-14 16:16:32 --> Model Class Initialized
DEBUG - 2013-11-14 16:16:32 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:16:32 --> after session initialization................
INFO  - 2013-11-14 16:16:32 --> inside retrieving pharmacy by location id 2
INFO  - 2013-11-14 16:16:32 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '2'
LIMIT 25
DEBUG - 2013-11-14 16:16:32 --> Final output sent to browser
DEBUG - 2013-11-14 16:16:32 --> Total execution time: 0.0400
DEBUG - 2013-11-14 16:16:36 --> Config Class Initialized
DEBUG - 2013-11-14 16:16:36 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:16:36 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:16:36 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:16:36 --> URI Class Initialized
DEBUG - 2013-11-14 16:16:36 --> Router Class Initialized
DEBUG - 2013-11-14 16:16:36 --> Output Class Initialized
DEBUG - 2013-11-14 16:16:36 --> Security Class Initialized
DEBUG - 2013-11-14 16:16:36 --> Input Class Initialized
DEBUG - 2013-11-14 16:16:36 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:16:36 --> Language Class Initialized
DEBUG - 2013-11-14 16:16:36 --> Loader Class Initialized
DEBUG - 2013-11-14 16:16:36 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:16:36 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:16:36 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:16:36 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:16:36 --> Session Class Initialized
DEBUG - 2013-11-14 16:16:36 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:16:36 --> Session routines successfully run
DEBUG - 2013-11-14 16:16:36 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:16:36 --> Controller Class Initialized
DEBUG - 2013-11-14 16:16:36 --> Model Class Initialized
DEBUG - 2013-11-14 16:16:36 --> Model Class Initialized
DEBUG - 2013-11-14 16:16:36 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:16:36 --> after session initialization................
INFO  - 2013-11-14 16:16:36 --> inside retrieving pharmacy by location id 1
INFO  - 2013-11-14 16:16:36 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '1'
LIMIT 25
DEBUG - 2013-11-14 16:16:36 --> Final output sent to browser
DEBUG - 2013-11-14 16:16:36 --> Total execution time: 0.0510
DEBUG - 2013-11-14 16:16:38 --> Config Class Initialized
DEBUG - 2013-11-14 16:16:38 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:16:38 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:16:38 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:16:38 --> URI Class Initialized
DEBUG - 2013-11-14 16:16:38 --> Router Class Initialized
DEBUG - 2013-11-14 16:16:38 --> Output Class Initialized
DEBUG - 2013-11-14 16:16:38 --> Security Class Initialized
DEBUG - 2013-11-14 16:16:38 --> Input Class Initialized
DEBUG - 2013-11-14 16:16:38 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:16:38 --> Language Class Initialized
DEBUG - 2013-11-14 16:16:38 --> Loader Class Initialized
DEBUG - 2013-11-14 16:16:38 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:16:38 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:16:38 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:16:38 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:16:38 --> Session Class Initialized
DEBUG - 2013-11-14 16:16:38 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:16:38 --> Session routines successfully run
DEBUG - 2013-11-14 16:16:38 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:16:38 --> Controller Class Initialized
DEBUG - 2013-11-14 16:16:38 --> Model Class Initialized
DEBUG - 2013-11-14 16:16:38 --> Model Class Initialized
DEBUG - 2013-11-14 16:16:38 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:16:38 --> after session initialization................
INFO  - 2013-11-14 16:16:38 --> inside retrieving pharmacy by location id 2
INFO  - 2013-11-14 16:16:38 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '2'
LIMIT 25
DEBUG - 2013-11-14 16:16:38 --> Final output sent to browser
DEBUG - 2013-11-14 16:16:38 --> Total execution time: 0.0490
DEBUG - 2013-11-14 16:21:28 --> Config Class Initialized
DEBUG - 2013-11-14 16:21:28 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:21:28 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:21:28 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:21:28 --> URI Class Initialized
DEBUG - 2013-11-14 16:21:28 --> Router Class Initialized
DEBUG - 2013-11-14 16:21:28 --> Output Class Initialized
DEBUG - 2013-11-14 16:21:28 --> Security Class Initialized
DEBUG - 2013-11-14 16:21:28 --> Input Class Initialized
DEBUG - 2013-11-14 16:21:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:21:28 --> Language Class Initialized
DEBUG - 2013-11-14 16:21:28 --> Loader Class Initialized
DEBUG - 2013-11-14 16:21:28 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:21:28 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:21:28 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:21:28 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:21:28 --> Session Class Initialized
DEBUG - 2013-11-14 16:21:28 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:21:28 --> Session routines successfully run
DEBUG - 2013-11-14 16:21:28 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:21:28 --> Controller Class Initialized
DEBUG - 2013-11-14 16:21:28 --> Model Class Initialized
DEBUG - 2013-11-14 16:21:28 --> Model Class Initialized
DEBUG - 2013-11-14 16:21:28 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:21:28 --> after session initialization................
INFO  - 2013-11-14 16:21:28 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 16:21:28 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 16:21:28 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 16:21:28 --> inside retrieving locations 
INFO  - 2013-11-14 16:21:28 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 16:21:28 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 16:21:28 --> Final output sent to browser
DEBUG - 2013-11-14 16:21:28 --> Total execution time: 0.0630
DEBUG - 2013-11-14 16:21:30 --> Config Class Initialized
DEBUG - 2013-11-14 16:21:30 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:21:30 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:21:30 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:21:30 --> URI Class Initialized
DEBUG - 2013-11-14 16:21:30 --> Router Class Initialized
DEBUG - 2013-11-14 16:21:30 --> Output Class Initialized
DEBUG - 2013-11-14 16:21:30 --> Security Class Initialized
DEBUG - 2013-11-14 16:21:30 --> Input Class Initialized
DEBUG - 2013-11-14 16:21:30 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:21:30 --> Language Class Initialized
DEBUG - 2013-11-14 16:21:30 --> Loader Class Initialized
DEBUG - 2013-11-14 16:21:30 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:21:30 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:21:30 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:21:30 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:21:30 --> Session Class Initialized
DEBUG - 2013-11-14 16:21:30 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:21:30 --> Session routines successfully run
DEBUG - 2013-11-14 16:21:30 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:21:30 --> Controller Class Initialized
DEBUG - 2013-11-14 16:21:30 --> Model Class Initialized
DEBUG - 2013-11-14 16:21:30 --> Model Class Initialized
DEBUG - 2013-11-14 16:21:30 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:21:30 --> after session initialization................
INFO  - 2013-11-14 16:21:30 --> inside retrieving pharmacy by location id 2
INFO  - 2013-11-14 16:21:30 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '2'
ORDER BY `p`.`name` asc
LIMIT 25
DEBUG - 2013-11-14 16:21:30 --> Final output sent to browser
DEBUG - 2013-11-14 16:21:30 --> Total execution time: 0.0440
DEBUG - 2013-11-14 16:21:34 --> Config Class Initialized
DEBUG - 2013-11-14 16:21:34 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:21:34 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:21:34 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:21:34 --> URI Class Initialized
DEBUG - 2013-11-14 16:21:34 --> Router Class Initialized
DEBUG - 2013-11-14 16:21:34 --> Output Class Initialized
DEBUG - 2013-11-14 16:21:34 --> Security Class Initialized
DEBUG - 2013-11-14 16:21:34 --> Input Class Initialized
DEBUG - 2013-11-14 16:21:34 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:21:34 --> Language Class Initialized
DEBUG - 2013-11-14 16:21:34 --> Loader Class Initialized
DEBUG - 2013-11-14 16:21:34 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:21:34 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:21:34 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:21:34 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:21:34 --> Session Class Initialized
DEBUG - 2013-11-14 16:21:34 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:21:34 --> Session routines successfully run
DEBUG - 2013-11-14 16:21:34 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:21:34 --> Controller Class Initialized
DEBUG - 2013-11-14 16:21:34 --> Model Class Initialized
DEBUG - 2013-11-14 16:21:34 --> Model Class Initialized
DEBUG - 2013-11-14 16:21:34 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:21:34 --> after session initialization................
INFO  - 2013-11-14 16:21:34 --> inside retrieving pharmacy by location id 1
INFO  - 2013-11-14 16:21:34 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '1'
ORDER BY `p`.`name` asc
LIMIT 25
DEBUG - 2013-11-14 16:21:34 --> Final output sent to browser
DEBUG - 2013-11-14 16:21:34 --> Total execution time: 0.0390
DEBUG - 2013-11-14 16:21:36 --> Config Class Initialized
DEBUG - 2013-11-14 16:21:36 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:21:36 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:21:36 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:21:36 --> URI Class Initialized
DEBUG - 2013-11-14 16:21:36 --> Router Class Initialized
DEBUG - 2013-11-14 16:21:36 --> Output Class Initialized
DEBUG - 2013-11-14 16:21:36 --> Security Class Initialized
DEBUG - 2013-11-14 16:21:36 --> Input Class Initialized
DEBUG - 2013-11-14 16:21:36 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:21:36 --> Language Class Initialized
DEBUG - 2013-11-14 16:21:36 --> Loader Class Initialized
DEBUG - 2013-11-14 16:21:36 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:21:36 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:21:36 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:21:36 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:21:36 --> Session Class Initialized
DEBUG - 2013-11-14 16:21:36 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:21:36 --> Session routines successfully run
DEBUG - 2013-11-14 16:21:36 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:21:36 --> Controller Class Initialized
DEBUG - 2013-11-14 16:21:36 --> Model Class Initialized
DEBUG - 2013-11-14 16:21:36 --> Model Class Initialized
DEBUG - 2013-11-14 16:21:36 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:21:36 --> after session initialization................
INFO  - 2013-11-14 16:21:36 --> inside retrieving pharmacy by location id 2
INFO  - 2013-11-14 16:21:36 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '2'
ORDER BY `p`.`name` asc
LIMIT 25
DEBUG - 2013-11-14 16:21:36 --> Final output sent to browser
DEBUG - 2013-11-14 16:21:36 --> Total execution time: 0.0520
DEBUG - 2013-11-14 16:21:38 --> Config Class Initialized
DEBUG - 2013-11-14 16:21:38 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:21:38 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:21:38 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:21:38 --> URI Class Initialized
DEBUG - 2013-11-14 16:21:38 --> Router Class Initialized
DEBUG - 2013-11-14 16:21:38 --> Output Class Initialized
DEBUG - 2013-11-14 16:21:38 --> Security Class Initialized
DEBUG - 2013-11-14 16:21:38 --> Input Class Initialized
DEBUG - 2013-11-14 16:21:38 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:21:38 --> Language Class Initialized
DEBUG - 2013-11-14 16:21:38 --> Loader Class Initialized
DEBUG - 2013-11-14 16:21:38 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:21:38 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:21:38 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:21:38 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:21:38 --> Session Class Initialized
DEBUG - 2013-11-14 16:21:38 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:21:38 --> Session routines successfully run
DEBUG - 2013-11-14 16:21:38 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:21:38 --> Controller Class Initialized
DEBUG - 2013-11-14 16:21:38 --> Model Class Initialized
DEBUG - 2013-11-14 16:21:38 --> Model Class Initialized
DEBUG - 2013-11-14 16:21:38 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:21:38 --> after session initialization................
INFO  - 2013-11-14 16:21:38 --> inside retrieving pharmacy by location id 1
INFO  - 2013-11-14 16:21:38 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '1'
ORDER BY `p`.`name` asc
LIMIT 25
DEBUG - 2013-11-14 16:21:38 --> Final output sent to browser
DEBUG - 2013-11-14 16:21:38 --> Total execution time: 0.0530
DEBUG - 2013-11-14 16:21:55 --> Config Class Initialized
DEBUG - 2013-11-14 16:21:55 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:21:55 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:21:55 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:21:55 --> URI Class Initialized
DEBUG - 2013-11-14 16:21:55 --> Router Class Initialized
DEBUG - 2013-11-14 16:21:55 --> Output Class Initialized
DEBUG - 2013-11-14 16:21:55 --> Security Class Initialized
DEBUG - 2013-11-14 16:21:55 --> Input Class Initialized
DEBUG - 2013-11-14 16:21:55 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:21:55 --> Language Class Initialized
DEBUG - 2013-11-14 16:21:55 --> Loader Class Initialized
DEBUG - 2013-11-14 16:21:55 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:21:55 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:21:55 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:21:55 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:21:55 --> Session Class Initialized
DEBUG - 2013-11-14 16:21:55 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:21:55 --> Session routines successfully run
DEBUG - 2013-11-14 16:21:55 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:21:55 --> Controller Class Initialized
DEBUG - 2013-11-14 16:21:55 --> Model Class Initialized
DEBUG - 2013-11-14 16:21:55 --> Model Class Initialized
DEBUG - 2013-11-14 16:21:55 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:21:55 --> after session initialization................
INFO  - 2013-11-14 16:21:55 --> inside retrieving pharmacy by location id 2
INFO  - 2013-11-14 16:21:55 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '2'
ORDER BY `p`.`name` asc
LIMIT 25
DEBUG - 2013-11-14 16:21:55 --> Final output sent to browser
DEBUG - 2013-11-14 16:21:55 --> Total execution time: 0.0450
DEBUG - 2013-11-14 16:22:00 --> Config Class Initialized
DEBUG - 2013-11-14 16:22:00 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:22:00 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:22:00 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:22:00 --> URI Class Initialized
DEBUG - 2013-11-14 16:22:00 --> Router Class Initialized
DEBUG - 2013-11-14 16:22:00 --> Output Class Initialized
DEBUG - 2013-11-14 16:22:00 --> Security Class Initialized
DEBUG - 2013-11-14 16:22:00 --> Input Class Initialized
DEBUG - 2013-11-14 16:22:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:22:00 --> Language Class Initialized
DEBUG - 2013-11-14 16:22:00 --> Loader Class Initialized
DEBUG - 2013-11-14 16:22:00 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:22:00 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:22:00 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:22:00 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:22:00 --> Session Class Initialized
DEBUG - 2013-11-14 16:22:00 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:22:00 --> Session routines successfully run
DEBUG - 2013-11-14 16:22:00 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:22:00 --> Controller Class Initialized
DEBUG - 2013-11-14 16:22:00 --> Model Class Initialized
DEBUG - 2013-11-14 16:22:00 --> Model Class Initialized
DEBUG - 2013-11-14 16:22:00 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:22:00 --> after session initialization................
INFO  - 2013-11-14 16:22:00 --> inside retrieving pharmacy by location id 1
INFO  - 2013-11-14 16:22:00 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '1'
ORDER BY `p`.`name` asc
LIMIT 25
DEBUG - 2013-11-14 16:22:00 --> Final output sent to browser
DEBUG - 2013-11-14 16:22:00 --> Total execution time: 0.0450
DEBUG - 2013-11-14 16:25:28 --> Config Class Initialized
DEBUG - 2013-11-14 16:25:28 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:25:28 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:25:28 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:25:28 --> URI Class Initialized
DEBUG - 2013-11-14 16:25:28 --> Router Class Initialized
DEBUG - 2013-11-14 16:25:28 --> Output Class Initialized
DEBUG - 2013-11-14 16:25:28 --> Security Class Initialized
DEBUG - 2013-11-14 16:25:28 --> Input Class Initialized
DEBUG - 2013-11-14 16:25:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:25:28 --> Language Class Initialized
DEBUG - 2013-11-14 16:25:28 --> Loader Class Initialized
DEBUG - 2013-11-14 16:25:28 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:25:28 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:25:28 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:25:28 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:25:28 --> Session Class Initialized
DEBUG - 2013-11-14 16:25:28 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:25:28 --> Session routines successfully run
DEBUG - 2013-11-14 16:25:28 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:25:28 --> Controller Class Initialized
DEBUG - 2013-11-14 16:25:28 --> Model Class Initialized
DEBUG - 2013-11-14 16:25:28 --> Model Class Initialized
DEBUG - 2013-11-14 16:25:28 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:25:28 --> after session initialization................
INFO  - 2013-11-14 16:25:28 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 16:25:28 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 16:25:28 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 16:25:28 --> inside retrieving locations 
INFO  - 2013-11-14 16:25:28 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 16:25:28 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 16:25:28 --> Final output sent to browser
DEBUG - 2013-11-14 16:25:28 --> Total execution time: 0.0630
DEBUG - 2013-11-14 16:25:31 --> Config Class Initialized
DEBUG - 2013-11-14 16:25:31 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:25:31 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:25:31 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:25:31 --> URI Class Initialized
DEBUG - 2013-11-14 16:25:31 --> Router Class Initialized
DEBUG - 2013-11-14 16:25:31 --> Output Class Initialized
DEBUG - 2013-11-14 16:25:31 --> Security Class Initialized
DEBUG - 2013-11-14 16:25:31 --> Input Class Initialized
DEBUG - 2013-11-14 16:25:31 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:25:31 --> Language Class Initialized
DEBUG - 2013-11-14 16:25:31 --> Loader Class Initialized
DEBUG - 2013-11-14 16:25:31 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:25:31 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:25:31 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:25:31 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:25:31 --> Session Class Initialized
DEBUG - 2013-11-14 16:25:31 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:25:31 --> Session routines successfully run
DEBUG - 2013-11-14 16:25:31 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:25:31 --> Controller Class Initialized
DEBUG - 2013-11-14 16:25:31 --> Model Class Initialized
DEBUG - 2013-11-14 16:25:31 --> Model Class Initialized
DEBUG - 2013-11-14 16:25:31 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:25:31 --> after session initialization................
INFO  - 2013-11-14 16:25:31 --> inside retrieving pharmacy by location id 1
INFO  - 2013-11-14 16:25:31 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '1'
ORDER BY `p`.`name` asc
LIMIT 25
DEBUG - 2013-11-14 16:25:31 --> Final output sent to browser
DEBUG - 2013-11-14 16:25:31 --> Total execution time: 0.0440
DEBUG - 2013-11-14 16:25:34 --> Config Class Initialized
DEBUG - 2013-11-14 16:25:34 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:25:34 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:25:34 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:25:34 --> URI Class Initialized
DEBUG - 2013-11-14 16:25:34 --> Router Class Initialized
DEBUG - 2013-11-14 16:25:34 --> Output Class Initialized
DEBUG - 2013-11-14 16:25:34 --> Security Class Initialized
DEBUG - 2013-11-14 16:25:34 --> Input Class Initialized
DEBUG - 2013-11-14 16:25:34 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:25:34 --> Language Class Initialized
DEBUG - 2013-11-14 16:25:34 --> Loader Class Initialized
DEBUG - 2013-11-14 16:25:34 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:25:34 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:25:34 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:25:34 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:25:34 --> Session Class Initialized
DEBUG - 2013-11-14 16:25:34 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:25:34 --> Session routines successfully run
DEBUG - 2013-11-14 16:25:34 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:25:34 --> Controller Class Initialized
DEBUG - 2013-11-14 16:25:34 --> Model Class Initialized
DEBUG - 2013-11-14 16:25:34 --> Model Class Initialized
DEBUG - 2013-11-14 16:25:34 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:25:34 --> after session initialization................
INFO  - 2013-11-14 16:25:34 --> inside retrieving pharmacy by location id 2
INFO  - 2013-11-14 16:25:34 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '2'
ORDER BY `p`.`name` asc
LIMIT 25
DEBUG - 2013-11-14 16:25:34 --> Final output sent to browser
DEBUG - 2013-11-14 16:25:34 --> Total execution time: 0.0400
DEBUG - 2013-11-14 16:25:36 --> Config Class Initialized
DEBUG - 2013-11-14 16:25:36 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:25:36 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:25:36 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:25:36 --> URI Class Initialized
DEBUG - 2013-11-14 16:25:36 --> Router Class Initialized
DEBUG - 2013-11-14 16:25:36 --> Output Class Initialized
DEBUG - 2013-11-14 16:25:36 --> Security Class Initialized
DEBUG - 2013-11-14 16:25:36 --> Input Class Initialized
DEBUG - 2013-11-14 16:25:36 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:25:36 --> Language Class Initialized
DEBUG - 2013-11-14 16:25:36 --> Loader Class Initialized
DEBUG - 2013-11-14 16:25:36 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:25:36 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:25:36 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:25:36 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:25:36 --> Session Class Initialized
DEBUG - 2013-11-14 16:25:36 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:25:36 --> Session routines successfully run
DEBUG - 2013-11-14 16:25:36 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:25:36 --> Controller Class Initialized
DEBUG - 2013-11-14 16:25:36 --> Model Class Initialized
DEBUG - 2013-11-14 16:25:36 --> Model Class Initialized
DEBUG - 2013-11-14 16:25:36 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:25:36 --> after session initialization................
INFO  - 2013-11-14 16:25:36 --> inside retrieving pharmacy by location id 0
INFO  - 2013-11-14 16:25:36 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
ORDER BY `p`.`name` asc
LIMIT 25
DEBUG - 2013-11-14 16:25:36 --> Final output sent to browser
DEBUG - 2013-11-14 16:25:36 --> Total execution time: 0.0500
DEBUG - 2013-11-14 16:25:50 --> Config Class Initialized
DEBUG - 2013-11-14 16:25:50 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:25:50 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:25:50 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:25:50 --> URI Class Initialized
DEBUG - 2013-11-14 16:25:50 --> Router Class Initialized
DEBUG - 2013-11-14 16:25:50 --> Output Class Initialized
DEBUG - 2013-11-14 16:25:50 --> Security Class Initialized
DEBUG - 2013-11-14 16:25:50 --> Input Class Initialized
DEBUG - 2013-11-14 16:25:50 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:25:50 --> Language Class Initialized
DEBUG - 2013-11-14 16:25:50 --> Loader Class Initialized
DEBUG - 2013-11-14 16:25:50 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:25:50 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:25:50 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:25:50 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:25:50 --> Session Class Initialized
DEBUG - 2013-11-14 16:25:50 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:25:50 --> Session routines successfully run
DEBUG - 2013-11-14 16:25:50 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:25:50 --> Controller Class Initialized
DEBUG - 2013-11-14 16:25:50 --> Model Class Initialized
DEBUG - 2013-11-14 16:25:50 --> Model Class Initialized
DEBUG - 2013-11-14 16:25:50 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:25:50 --> after session initialization................
INFO  - 2013-11-14 16:25:50 --> inside retrieving pharmacy by location id 1
INFO  - 2013-11-14 16:25:50 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '1'
ORDER BY `p`.`name` asc
LIMIT 25
DEBUG - 2013-11-14 16:25:50 --> Final output sent to browser
DEBUG - 2013-11-14 16:25:50 --> Total execution time: 0.0420
DEBUG - 2013-11-14 16:25:51 --> Config Class Initialized
DEBUG - 2013-11-14 16:25:51 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:25:51 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:25:51 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:25:51 --> URI Class Initialized
DEBUG - 2013-11-14 16:25:51 --> Router Class Initialized
DEBUG - 2013-11-14 16:25:51 --> Output Class Initialized
DEBUG - 2013-11-14 16:25:51 --> Security Class Initialized
DEBUG - 2013-11-14 16:25:51 --> Input Class Initialized
DEBUG - 2013-11-14 16:25:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:25:51 --> Language Class Initialized
DEBUG - 2013-11-14 16:25:51 --> Loader Class Initialized
DEBUG - 2013-11-14 16:25:51 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:25:51 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:25:51 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:25:51 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:25:51 --> Session Class Initialized
DEBUG - 2013-11-14 16:25:51 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:25:51 --> Session routines successfully run
DEBUG - 2013-11-14 16:25:51 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:25:51 --> Controller Class Initialized
DEBUG - 2013-11-14 16:25:51 --> Model Class Initialized
DEBUG - 2013-11-14 16:25:51 --> Model Class Initialized
DEBUG - 2013-11-14 16:25:51 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:25:51 --> after session initialization................
INFO  - 2013-11-14 16:25:51 --> inside retrieving pharmacy by location id 2
INFO  - 2013-11-14 16:25:51 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '2'
ORDER BY `p`.`name` asc
LIMIT 25
DEBUG - 2013-11-14 16:25:51 --> Final output sent to browser
DEBUG - 2013-11-14 16:25:51 --> Total execution time: 0.0530
DEBUG - 2013-11-14 16:25:54 --> Config Class Initialized
DEBUG - 2013-11-14 16:25:54 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:25:54 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:25:54 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:25:54 --> URI Class Initialized
DEBUG - 2013-11-14 16:25:54 --> Router Class Initialized
DEBUG - 2013-11-14 16:25:54 --> Output Class Initialized
DEBUG - 2013-11-14 16:25:54 --> Security Class Initialized
DEBUG - 2013-11-14 16:25:54 --> Input Class Initialized
DEBUG - 2013-11-14 16:25:54 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:25:54 --> Language Class Initialized
DEBUG - 2013-11-14 16:25:54 --> Loader Class Initialized
DEBUG - 2013-11-14 16:25:54 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:25:54 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:25:54 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:25:54 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:25:54 --> Session Class Initialized
DEBUG - 2013-11-14 16:25:54 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:25:54 --> Session routines successfully run
DEBUG - 2013-11-14 16:25:54 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:25:54 --> Controller Class Initialized
DEBUG - 2013-11-14 16:25:54 --> Model Class Initialized
DEBUG - 2013-11-14 16:25:54 --> Model Class Initialized
DEBUG - 2013-11-14 16:25:54 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:25:54 --> after session initialization................
INFO  - 2013-11-14 16:25:54 --> inside the auto suggest page.................
INFO  - 2013-11-14 16:25:54 --> after the list array.................
INFO  - 2013-11-14 16:25:54 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%a%' 
INFO  - 2013-11-14 16:25:54 --> after retrieving the data from db.................
INFO  - 2013-11-14 16:25:54 --> looping.................
INFO  - 2013-11-14 16:25:54 --> looping.................
INFO  - 2013-11-14 16:25:54 --> looping.................
INFO  - 2013-11-14 16:25:54 --> looping.................
INFO  - 2013-11-14 16:25:54 --> looping.................
INFO  - 2013-11-14 16:25:54 --> looping.................
INFO  - 2013-11-14 16:25:54 --> looping.................
INFO  - 2013-11-14 16:25:54 --> looping.................
INFO  - 2013-11-14 16:25:54 --> looping.................
INFO  - 2013-11-14 16:25:54 --> looping.................
INFO  - 2013-11-14 16:25:54 --> looping.................
INFO  - 2013-11-14 16:25:54 --> looping.................
INFO  - 2013-11-14 16:25:54 --> looping.................
INFO  - 2013-11-14 16:25:54 --> looping.................
INFO  - 2013-11-14 16:25:54 --> looping.................
INFO  - 2013-11-14 16:25:54 --> looping.................
INFO  - 2013-11-14 16:25:54 --> looping.................
INFO  - 2013-11-14 16:25:54 --> looping.................
INFO  - 2013-11-14 16:25:54 --> looping.................
INFO  - 2013-11-14 16:25:54 --> looping.................
INFO  - 2013-11-14 16:25:54 --> looping.................
INFO  - 2013-11-14 16:25:54 --> looping.................
INFO  - 2013-11-14 16:25:54 --> looping.................
INFO  - 2013-11-14 16:25:54 --> looping.................
INFO  - 2013-11-14 16:25:54 --> looping.................
INFO  - 2013-11-14 16:25:54 --> looping.................
INFO  - 2013-11-14 16:25:54 --> looping.................
INFO  - 2013-11-14 16:25:54 --> looping.................
DEBUG - 2013-11-14 16:25:54 --> Final output sent to browser
DEBUG - 2013-11-14 16:25:54 --> Total execution time: 0.0730
DEBUG - 2013-11-14 16:25:56 --> Config Class Initialized
DEBUG - 2013-11-14 16:25:56 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:25:56 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:25:56 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:25:56 --> URI Class Initialized
DEBUG - 2013-11-14 16:25:56 --> Router Class Initialized
DEBUG - 2013-11-14 16:25:56 --> Output Class Initialized
DEBUG - 2013-11-14 16:25:56 --> Security Class Initialized
DEBUG - 2013-11-14 16:25:56 --> Input Class Initialized
DEBUG - 2013-11-14 16:25:56 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:25:56 --> Language Class Initialized
DEBUG - 2013-11-14 16:25:56 --> Loader Class Initialized
DEBUG - 2013-11-14 16:25:56 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:25:56 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:25:56 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:25:56 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:25:56 --> Session Class Initialized
DEBUG - 2013-11-14 16:25:56 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:25:56 --> Session routines successfully run
DEBUG - 2013-11-14 16:25:56 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:25:56 --> Controller Class Initialized
DEBUG - 2013-11-14 16:25:56 --> Model Class Initialized
DEBUG - 2013-11-14 16:25:56 --> Model Class Initialized
DEBUG - 2013-11-14 16:25:56 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:25:56 --> after session initialization................
INFO  - 2013-11-14 16:25:56 --> inside the auto suggest page.................
INFO  - 2013-11-14 16:25:56 --> after the list array.................
INFO  - 2013-11-14 16:25:56 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%ak%' 
INFO  - 2013-11-14 16:25:56 --> after retrieving the data from db.................
INFO  - 2013-11-14 16:25:56 --> looping.................
INFO  - 2013-11-14 16:25:56 --> looping.................
DEBUG - 2013-11-14 16:25:56 --> Final output sent to browser
DEBUG - 2013-11-14 16:25:56 --> Total execution time: 0.0480
DEBUG - 2013-11-14 16:25:57 --> Config Class Initialized
DEBUG - 2013-11-14 16:25:57 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:25:57 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:25:57 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:25:57 --> URI Class Initialized
DEBUG - 2013-11-14 16:25:57 --> Router Class Initialized
DEBUG - 2013-11-14 16:25:57 --> Output Class Initialized
DEBUG - 2013-11-14 16:25:57 --> Security Class Initialized
DEBUG - 2013-11-14 16:25:57 --> Input Class Initialized
DEBUG - 2013-11-14 16:25:57 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:25:57 --> Language Class Initialized
DEBUG - 2013-11-14 16:25:57 --> Loader Class Initialized
DEBUG - 2013-11-14 16:25:57 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:25:57 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:25:57 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:25:57 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:25:57 --> Session Class Initialized
DEBUG - 2013-11-14 16:25:57 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:25:57 --> Session routines successfully run
DEBUG - 2013-11-14 16:25:57 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:25:57 --> Controller Class Initialized
DEBUG - 2013-11-14 16:25:57 --> Model Class Initialized
DEBUG - 2013-11-14 16:25:57 --> Model Class Initialized
DEBUG - 2013-11-14 16:25:57 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:25:57 --> after session initialization................
INFO  - 2013-11-14 16:25:57 --> inside the auto suggest page.................
INFO  - 2013-11-14 16:25:57 --> after the list array.................
INFO  - 2013-11-14 16:25:57 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%aku%' 
INFO  - 2013-11-14 16:25:57 --> after retrieving the data from db.................
INFO  - 2013-11-14 16:25:57 --> looping.................
INFO  - 2013-11-14 16:25:57 --> looping.................
DEBUG - 2013-11-14 16:25:57 --> Final output sent to browser
DEBUG - 2013-11-14 16:25:57 --> Total execution time: 0.0680
DEBUG - 2013-11-14 16:26:00 --> Config Class Initialized
DEBUG - 2013-11-14 16:26:00 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:26:00 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:26:00 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:26:00 --> URI Class Initialized
DEBUG - 2013-11-14 16:26:00 --> Router Class Initialized
DEBUG - 2013-11-14 16:26:00 --> Output Class Initialized
DEBUG - 2013-11-14 16:26:00 --> Security Class Initialized
DEBUG - 2013-11-14 16:26:00 --> Input Class Initialized
DEBUG - 2013-11-14 16:26:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:26:00 --> Language Class Initialized
DEBUG - 2013-11-14 16:26:00 --> Loader Class Initialized
DEBUG - 2013-11-14 16:26:00 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:26:00 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:26:00 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:26:00 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:26:00 --> Session Class Initialized
DEBUG - 2013-11-14 16:26:00 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:26:00 --> Session routines successfully run
DEBUG - 2013-11-14 16:26:00 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:26:00 --> Controller Class Initialized
DEBUG - 2013-11-14 16:26:00 --> Model Class Initialized
DEBUG - 2013-11-14 16:26:00 --> Model Class Initialized
DEBUG - 2013-11-14 16:26:00 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:26:00 --> after session initialization................
INFO  - 2013-11-14 16:26:00 --> inside retrieving pharmacy by location id 1
INFO  - 2013-11-14 16:26:00 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '1'
ORDER BY `p`.`name` asc
LIMIT 25
DEBUG - 2013-11-14 16:26:00 --> Final output sent to browser
DEBUG - 2013-11-14 16:26:00 --> Total execution time: 0.0620
DEBUG - 2013-11-14 16:26:03 --> Config Class Initialized
DEBUG - 2013-11-14 16:26:03 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:26:03 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:26:03 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:26:03 --> URI Class Initialized
DEBUG - 2013-11-14 16:26:03 --> Router Class Initialized
DEBUG - 2013-11-14 16:26:03 --> Output Class Initialized
DEBUG - 2013-11-14 16:26:03 --> Security Class Initialized
DEBUG - 2013-11-14 16:26:03 --> Input Class Initialized
DEBUG - 2013-11-14 16:26:03 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:26:03 --> Language Class Initialized
DEBUG - 2013-11-14 16:26:03 --> Loader Class Initialized
DEBUG - 2013-11-14 16:26:03 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:26:03 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:26:03 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:26:03 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:26:03 --> Session Class Initialized
DEBUG - 2013-11-14 16:26:03 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:26:03 --> Session routines successfully run
DEBUG - 2013-11-14 16:26:03 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:26:03 --> Controller Class Initialized
DEBUG - 2013-11-14 16:26:03 --> Model Class Initialized
DEBUG - 2013-11-14 16:26:03 --> Model Class Initialized
DEBUG - 2013-11-14 16:26:03 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:26:03 --> after session initialization................
INFO  - 2013-11-14 16:26:03 --> inside the auto suggest page.................
INFO  - 2013-11-14 16:26:03 --> after the list array.................
INFO  - 2013-11-14 16:26:03 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%akuk%' 
INFO  - 2013-11-14 16:26:03 --> after retrieving the data from db.................
INFO  - 2013-11-14 16:26:03 --> looping.................
INFO  - 2013-11-14 16:26:03 --> looping.................
DEBUG - 2013-11-14 16:26:03 --> Final output sent to browser
DEBUG - 2013-11-14 16:26:03 --> Total execution time: 0.0470
DEBUG - 2013-11-14 16:26:05 --> Config Class Initialized
DEBUG - 2013-11-14 16:26:05 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:26:05 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:26:05 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:26:05 --> URI Class Initialized
DEBUG - 2013-11-14 16:26:05 --> Router Class Initialized
DEBUG - 2013-11-14 16:26:05 --> Output Class Initialized
DEBUG - 2013-11-14 16:26:05 --> Security Class Initialized
DEBUG - 2013-11-14 16:26:05 --> Input Class Initialized
DEBUG - 2013-11-14 16:26:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:26:05 --> Language Class Initialized
DEBUG - 2013-11-14 16:26:05 --> Loader Class Initialized
DEBUG - 2013-11-14 16:26:05 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:26:05 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:26:05 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:26:05 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:26:05 --> Session Class Initialized
DEBUG - 2013-11-14 16:26:05 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:26:05 --> Session routines successfully run
DEBUG - 2013-11-14 16:26:05 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:26:05 --> Controller Class Initialized
DEBUG - 2013-11-14 16:26:05 --> Model Class Initialized
DEBUG - 2013-11-14 16:26:05 --> Model Class Initialized
DEBUG - 2013-11-14 16:26:05 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:26:05 --> after session initialization................
INFO  - 2013-11-14 16:26:05 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>33
INFO  - 2013-11-14 16:26:05 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` =  '33'
DEBUG - 2013-11-14 16:26:05 --> Final output sent to browser
DEBUG - 2013-11-14 16:26:05 --> Total execution time: 0.0460
DEBUG - 2013-11-14 16:33:01 --> Config Class Initialized
DEBUG - 2013-11-14 16:33:01 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:33:01 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:33:01 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:33:01 --> URI Class Initialized
DEBUG - 2013-11-14 16:33:01 --> Router Class Initialized
DEBUG - 2013-11-14 16:33:01 --> Output Class Initialized
DEBUG - 2013-11-14 16:33:01 --> Security Class Initialized
DEBUG - 2013-11-14 16:33:01 --> Input Class Initialized
DEBUG - 2013-11-14 16:33:01 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:33:01 --> Language Class Initialized
DEBUG - 2013-11-14 16:33:01 --> Loader Class Initialized
DEBUG - 2013-11-14 16:33:01 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:33:01 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:33:01 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:33:01 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:33:01 --> Session Class Initialized
DEBUG - 2013-11-14 16:33:01 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:33:01 --> Session routines successfully run
DEBUG - 2013-11-14 16:33:01 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:33:01 --> Controller Class Initialized
DEBUG - 2013-11-14 16:33:01 --> Model Class Initialized
DEBUG - 2013-11-14 16:33:01 --> Model Class Initialized
DEBUG - 2013-11-14 16:33:01 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:33:01 --> after session initialization................
INFO  - 2013-11-14 16:33:01 --> inside retrieving pharmacy by location id 0
INFO  - 2013-11-14 16:33:01 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
ORDER BY `p`.`name` asc
LIMIT 25
DEBUG - 2013-11-14 16:33:01 --> Final output sent to browser
DEBUG - 2013-11-14 16:33:01 --> Total execution time: 0.0530
DEBUG - 2013-11-14 16:36:36 --> Config Class Initialized
DEBUG - 2013-11-14 16:36:36 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:36:36 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:36:36 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:36:36 --> URI Class Initialized
DEBUG - 2013-11-14 16:36:36 --> Router Class Initialized
DEBUG - 2013-11-14 16:36:36 --> Output Class Initialized
DEBUG - 2013-11-14 16:36:36 --> Security Class Initialized
DEBUG - 2013-11-14 16:36:36 --> Input Class Initialized
DEBUG - 2013-11-14 16:36:36 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:36:36 --> Language Class Initialized
DEBUG - 2013-11-14 16:36:36 --> Loader Class Initialized
DEBUG - 2013-11-14 16:36:36 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:36:36 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:36:36 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:36:36 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:36:36 --> Session Class Initialized
DEBUG - 2013-11-14 16:36:36 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:36:36 --> Session routines successfully run
DEBUG - 2013-11-14 16:36:36 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:36:36 --> Controller Class Initialized
DEBUG - 2013-11-14 16:36:36 --> Model Class Initialized
DEBUG - 2013-11-14 16:36:36 --> Model Class Initialized
DEBUG - 2013-11-14 16:36:36 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:36:36 --> after session initialization................
INFO  - 2013-11-14 16:36:36 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 16:36:36 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 16:36:36 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 16:36:36 --> inside retrieving locations 
INFO  - 2013-11-14 16:36:36 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 16:36:36 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 16:36:36 --> Final output sent to browser
DEBUG - 2013-11-14 16:36:36 --> Total execution time: 0.0620
DEBUG - 2013-11-14 16:36:38 --> Config Class Initialized
DEBUG - 2013-11-14 16:36:38 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:36:38 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:36:38 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:36:38 --> URI Class Initialized
DEBUG - 2013-11-14 16:36:38 --> Router Class Initialized
DEBUG - 2013-11-14 16:36:38 --> Output Class Initialized
DEBUG - 2013-11-14 16:36:38 --> Security Class Initialized
DEBUG - 2013-11-14 16:36:38 --> Input Class Initialized
DEBUG - 2013-11-14 16:36:38 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:36:38 --> Language Class Initialized
DEBUG - 2013-11-14 16:36:38 --> Loader Class Initialized
DEBUG - 2013-11-14 16:36:38 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:36:38 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:36:38 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:36:38 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:36:38 --> Session Class Initialized
DEBUG - 2013-11-14 16:36:38 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:36:38 --> Session routines successfully run
DEBUG - 2013-11-14 16:36:38 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:36:38 --> Controller Class Initialized
DEBUG - 2013-11-14 16:36:38 --> Model Class Initialized
DEBUG - 2013-11-14 16:36:38 --> Model Class Initialized
DEBUG - 2013-11-14 16:36:38 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:36:38 --> after session initialization................
INFO  - 2013-11-14 16:36:38 --> inside retrieving pharmacy by location id 2
INFO  - 2013-11-14 16:36:38 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '2'
ORDER BY `p`.`name` asc
LIMIT 25
DEBUG - 2013-11-14 16:36:38 --> Final output sent to browser
DEBUG - 2013-11-14 16:36:38 --> Total execution time: 0.0520
DEBUG - 2013-11-14 16:36:41 --> Config Class Initialized
DEBUG - 2013-11-14 16:36:41 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:36:41 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:36:41 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:36:41 --> URI Class Initialized
DEBUG - 2013-11-14 16:36:41 --> Router Class Initialized
DEBUG - 2013-11-14 16:36:41 --> Output Class Initialized
DEBUG - 2013-11-14 16:36:41 --> Security Class Initialized
DEBUG - 2013-11-14 16:36:41 --> Input Class Initialized
DEBUG - 2013-11-14 16:36:41 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:36:41 --> Language Class Initialized
DEBUG - 2013-11-14 16:36:41 --> Loader Class Initialized
DEBUG - 2013-11-14 16:36:41 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:36:41 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:36:41 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:36:41 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:36:41 --> Session Class Initialized
DEBUG - 2013-11-14 16:36:41 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:36:41 --> Session routines successfully run
DEBUG - 2013-11-14 16:36:41 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:36:41 --> Controller Class Initialized
DEBUG - 2013-11-14 16:36:41 --> Model Class Initialized
DEBUG - 2013-11-14 16:36:41 --> Model Class Initialized
DEBUG - 2013-11-14 16:36:41 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:36:41 --> after session initialization................
INFO  - 2013-11-14 16:36:41 --> inside the auto suggest page.................
INFO  - 2013-11-14 16:36:41 --> after the list array.................
INFO  - 2013-11-14 16:36:41 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%k%' 
INFO  - 2013-11-14 16:36:41 --> after retrieving the data from db.................
INFO  - 2013-11-14 16:36:41 --> looping.................
INFO  - 2013-11-14 16:36:41 --> looping.................
INFO  - 2013-11-14 16:36:41 --> looping.................
INFO  - 2013-11-14 16:36:41 --> looping.................
INFO  - 2013-11-14 16:36:41 --> looping.................
INFO  - 2013-11-14 16:36:41 --> looping.................
DEBUG - 2013-11-14 16:36:41 --> Final output sent to browser
DEBUG - 2013-11-14 16:36:41 --> Total execution time: 0.0590
DEBUG - 2013-11-14 16:36:41 --> Config Class Initialized
DEBUG - 2013-11-14 16:36:41 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:36:41 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:36:41 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:36:41 --> URI Class Initialized
DEBUG - 2013-11-14 16:36:41 --> Router Class Initialized
DEBUG - 2013-11-14 16:36:41 --> Output Class Initialized
DEBUG - 2013-11-14 16:36:41 --> Security Class Initialized
DEBUG - 2013-11-14 16:36:41 --> Input Class Initialized
DEBUG - 2013-11-14 16:36:41 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:36:41 --> Language Class Initialized
DEBUG - 2013-11-14 16:36:41 --> Loader Class Initialized
DEBUG - 2013-11-14 16:36:41 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:36:41 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:36:41 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:36:41 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:36:41 --> Session Class Initialized
DEBUG - 2013-11-14 16:36:41 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:36:41 --> Session routines successfully run
DEBUG - 2013-11-14 16:36:41 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:36:41 --> Controller Class Initialized
DEBUG - 2013-11-14 16:36:41 --> Model Class Initialized
DEBUG - 2013-11-14 16:36:41 --> Model Class Initialized
DEBUG - 2013-11-14 16:36:41 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:36:41 --> after session initialization................
INFO  - 2013-11-14 16:36:41 --> inside the auto suggest page.................
INFO  - 2013-11-14 16:36:41 --> after the list array.................
INFO  - 2013-11-14 16:36:41 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%ko%' 
INFO  - 2013-11-14 16:36:41 --> after retrieving the data from db.................
INFO  - 2013-11-14 16:36:41 --> looping.................
INFO  - 2013-11-14 16:36:41 --> looping.................
DEBUG - 2013-11-14 16:36:41 --> Final output sent to browser
DEBUG - 2013-11-14 16:36:41 --> Total execution time: 0.0540
DEBUG - 2013-11-14 16:36:42 --> Config Class Initialized
DEBUG - 2013-11-14 16:36:42 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:36:42 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:36:42 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:36:42 --> URI Class Initialized
DEBUG - 2013-11-14 16:36:42 --> Router Class Initialized
DEBUG - 2013-11-14 16:36:42 --> Output Class Initialized
DEBUG - 2013-11-14 16:36:42 --> Security Class Initialized
DEBUG - 2013-11-14 16:36:42 --> Input Class Initialized
DEBUG - 2013-11-14 16:36:42 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:36:42 --> Language Class Initialized
DEBUG - 2013-11-14 16:36:42 --> Loader Class Initialized
DEBUG - 2013-11-14 16:36:42 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:36:42 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:36:42 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:36:42 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:36:42 --> Session Class Initialized
DEBUG - 2013-11-14 16:36:42 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:36:42 --> Session routines successfully run
DEBUG - 2013-11-14 16:36:42 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:36:42 --> Controller Class Initialized
DEBUG - 2013-11-14 16:36:42 --> Model Class Initialized
DEBUG - 2013-11-14 16:36:42 --> Model Class Initialized
DEBUG - 2013-11-14 16:36:42 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:36:42 --> after session initialization................
INFO  - 2013-11-14 16:36:42 --> inside the auto suggest page.................
INFO  - 2013-11-14 16:36:42 --> after the list array.................
INFO  - 2013-11-14 16:36:42 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%koo%' 
INFO  - 2013-11-14 16:36:42 --> after retrieving the data from db.................
INFO  - 2013-11-14 16:36:42 --> looping.................
INFO  - 2013-11-14 16:36:42 --> looping.................
DEBUG - 2013-11-14 16:36:42 --> Final output sent to browser
DEBUG - 2013-11-14 16:36:42 --> Total execution time: 0.0550
DEBUG - 2013-11-14 16:38:29 --> Config Class Initialized
DEBUG - 2013-11-14 16:38:29 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:38:29 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:38:29 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:38:29 --> URI Class Initialized
DEBUG - 2013-11-14 16:38:29 --> Router Class Initialized
DEBUG - 2013-11-14 16:38:29 --> Output Class Initialized
DEBUG - 2013-11-14 16:38:29 --> Security Class Initialized
DEBUG - 2013-11-14 16:38:29 --> Input Class Initialized
DEBUG - 2013-11-14 16:38:29 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:38:29 --> Language Class Initialized
DEBUG - 2013-11-14 16:38:29 --> Loader Class Initialized
DEBUG - 2013-11-14 16:38:29 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:38:29 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:38:29 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:38:29 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:38:29 --> Session Class Initialized
DEBUG - 2013-11-14 16:38:29 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:38:29 --> Session routines successfully run
DEBUG - 2013-11-14 16:38:29 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:38:29 --> Controller Class Initialized
DEBUG - 2013-11-14 16:38:29 --> Model Class Initialized
DEBUG - 2013-11-14 16:38:29 --> Model Class Initialized
DEBUG - 2013-11-14 16:38:29 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:38:29 --> after session initialization................
INFO  - 2013-11-14 16:38:29 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 16:38:29 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 16:38:29 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 16:38:29 --> inside retrieving locations 
INFO  - 2013-11-14 16:38:29 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 16:38:29 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 16:38:29 --> Final output sent to browser
DEBUG - 2013-11-14 16:38:29 --> Total execution time: 0.0430
DEBUG - 2013-11-14 16:38:44 --> Config Class Initialized
DEBUG - 2013-11-14 16:38:44 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:38:44 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:38:44 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:38:44 --> URI Class Initialized
DEBUG - 2013-11-14 16:38:44 --> Router Class Initialized
DEBUG - 2013-11-14 16:38:44 --> Output Class Initialized
DEBUG - 2013-11-14 16:38:44 --> Security Class Initialized
DEBUG - 2013-11-14 16:38:44 --> Input Class Initialized
DEBUG - 2013-11-14 16:38:44 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:38:44 --> Language Class Initialized
DEBUG - 2013-11-14 16:38:44 --> Loader Class Initialized
DEBUG - 2013-11-14 16:38:44 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:38:44 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:38:44 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:38:44 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:38:44 --> Session Class Initialized
DEBUG - 2013-11-14 16:38:44 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:38:44 --> Session routines successfully run
DEBUG - 2013-11-14 16:38:44 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:38:44 --> Controller Class Initialized
DEBUG - 2013-11-14 16:38:44 --> Model Class Initialized
DEBUG - 2013-11-14 16:38:44 --> Model Class Initialized
DEBUG - 2013-11-14 16:38:44 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:38:44 --> after session initialization................
INFO  - 2013-11-14 16:38:44 --> inside the auto suggest page for pharmacy.................0
INFO  - 2013-11-14 16:38:44 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%c%' 
INFO  - 2013-11-14 16:38:44 --> after retrieving the data from db.................
INFO  - 2013-11-14 16:38:44 --> looping.................
INFO  - 2013-11-14 16:38:44 --> looping.................
INFO  - 2013-11-14 16:38:44 --> looping.................
INFO  - 2013-11-14 16:38:44 --> looping.................
INFO  - 2013-11-14 16:38:44 --> looping.................
INFO  - 2013-11-14 16:38:44 --> looping.................
INFO  - 2013-11-14 16:38:44 --> looping.................
INFO  - 2013-11-14 16:38:44 --> looping.................
INFO  - 2013-11-14 16:38:44 --> looping.................
INFO  - 2013-11-14 16:38:44 --> looping.................
INFO  - 2013-11-14 16:38:44 --> looping.................
INFO  - 2013-11-14 16:38:44 --> looping.................
INFO  - 2013-11-14 16:38:44 --> looping.................
INFO  - 2013-11-14 16:38:44 --> looping.................
INFO  - 2013-11-14 16:38:44 --> looping.................
INFO  - 2013-11-14 16:38:44 --> looping.................
DEBUG - 2013-11-14 16:38:44 --> Final output sent to browser
DEBUG - 2013-11-14 16:38:44 --> Total execution time: 0.0630
DEBUG - 2013-11-14 16:38:45 --> Config Class Initialized
DEBUG - 2013-11-14 16:38:45 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:38:45 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:38:45 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:38:45 --> URI Class Initialized
DEBUG - 2013-11-14 16:38:45 --> Router Class Initialized
DEBUG - 2013-11-14 16:38:45 --> Output Class Initialized
DEBUG - 2013-11-14 16:38:45 --> Security Class Initialized
DEBUG - 2013-11-14 16:38:45 --> Input Class Initialized
DEBUG - 2013-11-14 16:38:45 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:38:45 --> Language Class Initialized
DEBUG - 2013-11-14 16:38:45 --> Loader Class Initialized
DEBUG - 2013-11-14 16:38:45 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:38:45 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:38:45 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:38:45 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:38:45 --> Session Class Initialized
DEBUG - 2013-11-14 16:38:45 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:38:45 --> Session routines successfully run
DEBUG - 2013-11-14 16:38:45 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:38:45 --> Controller Class Initialized
DEBUG - 2013-11-14 16:38:45 --> Model Class Initialized
DEBUG - 2013-11-14 16:38:45 --> Model Class Initialized
DEBUG - 2013-11-14 16:38:45 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:38:45 --> after session initialization................
INFO  - 2013-11-14 16:38:45 --> inside the auto suggest page for pharmacy.................0
INFO  - 2013-11-14 16:38:45 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%ca%' 
INFO  - 2013-11-14 16:38:45 --> after retrieving the data from db.................
INFO  - 2013-11-14 16:38:45 --> looping.................
INFO  - 2013-11-14 16:38:45 --> looping.................
INFO  - 2013-11-14 16:38:45 --> looping.................
INFO  - 2013-11-14 16:38:45 --> looping.................
INFO  - 2013-11-14 16:38:45 --> looping.................
INFO  - 2013-11-14 16:38:45 --> looping.................
INFO  - 2013-11-14 16:38:45 --> looping.................
INFO  - 2013-11-14 16:38:45 --> looping.................
INFO  - 2013-11-14 16:38:45 --> looping.................
INFO  - 2013-11-14 16:38:45 --> looping.................
DEBUG - 2013-11-14 16:38:45 --> Final output sent to browser
DEBUG - 2013-11-14 16:38:45 --> Total execution time: 0.0580
DEBUG - 2013-11-14 16:38:47 --> Config Class Initialized
DEBUG - 2013-11-14 16:38:47 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:38:47 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:38:47 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:38:47 --> URI Class Initialized
DEBUG - 2013-11-14 16:38:47 --> Router Class Initialized
DEBUG - 2013-11-14 16:38:47 --> Output Class Initialized
DEBUG - 2013-11-14 16:38:47 --> Security Class Initialized
DEBUG - 2013-11-14 16:38:47 --> Input Class Initialized
DEBUG - 2013-11-14 16:38:47 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:38:47 --> Language Class Initialized
DEBUG - 2013-11-14 16:38:47 --> Loader Class Initialized
DEBUG - 2013-11-14 16:38:47 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:38:47 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:38:47 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:38:47 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:38:47 --> Session Class Initialized
DEBUG - 2013-11-14 16:38:47 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:38:47 --> Session routines successfully run
DEBUG - 2013-11-14 16:38:47 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:38:47 --> Controller Class Initialized
DEBUG - 2013-11-14 16:38:47 --> Model Class Initialized
DEBUG - 2013-11-14 16:38:47 --> Model Class Initialized
DEBUG - 2013-11-14 16:38:47 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:38:47 --> after session initialization................
INFO  - 2013-11-14 16:38:47 --> inside the auto suggest page for pharmacy.................0
INFO  - 2013-11-14 16:38:47 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%car%' 
INFO  - 2013-11-14 16:38:47 --> after retrieving the data from db.................
INFO  - 2013-11-14 16:38:47 --> looping.................
INFO  - 2013-11-14 16:38:47 --> looping.................
INFO  - 2013-11-14 16:38:47 --> looping.................
INFO  - 2013-11-14 16:38:47 --> looping.................
INFO  - 2013-11-14 16:38:47 --> looping.................
INFO  - 2013-11-14 16:38:47 --> looping.................
INFO  - 2013-11-14 16:38:47 --> looping.................
INFO  - 2013-11-14 16:38:47 --> looping.................
INFO  - 2013-11-14 16:38:47 --> looping.................
INFO  - 2013-11-14 16:38:47 --> looping.................
DEBUG - 2013-11-14 16:38:47 --> Final output sent to browser
DEBUG - 2013-11-14 16:38:47 --> Total execution time: 0.0600
DEBUG - 2013-11-14 16:38:47 --> Config Class Initialized
DEBUG - 2013-11-14 16:38:47 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:38:47 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:38:47 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:38:47 --> URI Class Initialized
DEBUG - 2013-11-14 16:38:47 --> Router Class Initialized
DEBUG - 2013-11-14 16:38:47 --> Output Class Initialized
DEBUG - 2013-11-14 16:38:47 --> Security Class Initialized
DEBUG - 2013-11-14 16:38:47 --> Input Class Initialized
DEBUG - 2013-11-14 16:38:47 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:38:47 --> Language Class Initialized
DEBUG - 2013-11-14 16:38:47 --> Loader Class Initialized
DEBUG - 2013-11-14 16:38:47 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:38:47 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:38:47 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:38:47 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:38:47 --> Session Class Initialized
DEBUG - 2013-11-14 16:38:47 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:38:47 --> Session routines successfully run
DEBUG - 2013-11-14 16:38:47 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:38:47 --> Controller Class Initialized
DEBUG - 2013-11-14 16:38:47 --> Model Class Initialized
DEBUG - 2013-11-14 16:38:47 --> Model Class Initialized
DEBUG - 2013-11-14 16:38:47 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:38:47 --> after session initialization................
INFO  - 2013-11-14 16:38:47 --> inside the auto suggest page for pharmacy.................0
INFO  - 2013-11-14 16:38:47 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%care%' 
INFO  - 2013-11-14 16:38:47 --> after retrieving the data from db.................
INFO  - 2013-11-14 16:38:47 --> looping.................
INFO  - 2013-11-14 16:38:47 --> looping.................
INFO  - 2013-11-14 16:38:47 --> looping.................
INFO  - 2013-11-14 16:38:47 --> looping.................
INFO  - 2013-11-14 16:38:47 --> looping.................
INFO  - 2013-11-14 16:38:47 --> looping.................
INFO  - 2013-11-14 16:38:47 --> looping.................
INFO  - 2013-11-14 16:38:47 --> looping.................
INFO  - 2013-11-14 16:38:47 --> looping.................
INFO  - 2013-11-14 16:38:47 --> looping.................
DEBUG - 2013-11-14 16:38:47 --> Final output sent to browser
DEBUG - 2013-11-14 16:38:47 --> Total execution time: 0.0550
DEBUG - 2013-11-14 16:39:14 --> Config Class Initialized
DEBUG - 2013-11-14 16:39:14 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:39:14 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:39:14 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:39:14 --> URI Class Initialized
DEBUG - 2013-11-14 16:39:14 --> Router Class Initialized
DEBUG - 2013-11-14 16:39:14 --> Output Class Initialized
DEBUG - 2013-11-14 16:39:14 --> Security Class Initialized
DEBUG - 2013-11-14 16:39:14 --> Input Class Initialized
DEBUG - 2013-11-14 16:39:14 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:39:14 --> Language Class Initialized
DEBUG - 2013-11-14 16:39:14 --> Loader Class Initialized
DEBUG - 2013-11-14 16:39:14 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:39:14 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:39:14 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:39:14 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:39:14 --> Session Class Initialized
DEBUG - 2013-11-14 16:39:14 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:39:14 --> Session routines successfully run
DEBUG - 2013-11-14 16:39:14 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:39:14 --> Controller Class Initialized
DEBUG - 2013-11-14 16:39:14 --> Model Class Initialized
DEBUG - 2013-11-14 16:39:14 --> Model Class Initialized
DEBUG - 2013-11-14 16:39:14 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:39:14 --> after session initialization................
INFO  - 2013-11-14 16:39:14 --> inside retrieving pharmacy by location id 2
INFO  - 2013-11-14 16:39:14 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '2'
ORDER BY `p`.`name` asc
LIMIT 25
DEBUG - 2013-11-14 16:39:14 --> Final output sent to browser
DEBUG - 2013-11-14 16:39:14 --> Total execution time: 0.0480
DEBUG - 2013-11-14 16:39:17 --> Config Class Initialized
DEBUG - 2013-11-14 16:39:17 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:39:17 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:39:17 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:39:17 --> URI Class Initialized
DEBUG - 2013-11-14 16:39:17 --> Router Class Initialized
DEBUG - 2013-11-14 16:39:17 --> Output Class Initialized
DEBUG - 2013-11-14 16:39:17 --> Security Class Initialized
DEBUG - 2013-11-14 16:39:17 --> Input Class Initialized
DEBUG - 2013-11-14 16:39:17 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:39:17 --> Language Class Initialized
DEBUG - 2013-11-14 16:39:17 --> Loader Class Initialized
DEBUG - 2013-11-14 16:39:17 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:39:17 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:39:17 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:39:17 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:39:17 --> Session Class Initialized
DEBUG - 2013-11-14 16:39:17 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:39:17 --> Session routines successfully run
DEBUG - 2013-11-14 16:39:17 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:39:17 --> Controller Class Initialized
DEBUG - 2013-11-14 16:39:17 --> Model Class Initialized
DEBUG - 2013-11-14 16:39:17 --> Model Class Initialized
DEBUG - 2013-11-14 16:39:17 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:39:17 --> after session initialization................
INFO  - 2013-11-14 16:39:17 --> inside the auto suggest page for pharmacy.................0
INFO  - 2013-11-14 16:39:17 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%scintilla car%' 
INFO  - 2013-11-14 16:39:17 --> after retrieving the data from db.................
INFO  - 2013-11-14 16:39:17 --> looping.................
INFO  - 2013-11-14 16:39:17 --> looping.................
DEBUG - 2013-11-14 16:39:17 --> Final output sent to browser
DEBUG - 2013-11-14 16:39:17 --> Total execution time: 0.0600
DEBUG - 2013-11-14 16:40:07 --> Config Class Initialized
DEBUG - 2013-11-14 16:40:07 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:40:07 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:40:07 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:40:07 --> URI Class Initialized
DEBUG - 2013-11-14 16:40:07 --> Router Class Initialized
DEBUG - 2013-11-14 16:40:07 --> Output Class Initialized
DEBUG - 2013-11-14 16:40:07 --> Security Class Initialized
DEBUG - 2013-11-14 16:40:07 --> Input Class Initialized
DEBUG - 2013-11-14 16:40:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:40:07 --> Language Class Initialized
DEBUG - 2013-11-14 16:40:07 --> Loader Class Initialized
DEBUG - 2013-11-14 16:40:07 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:40:07 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:40:07 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:40:07 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:40:07 --> Session Class Initialized
DEBUG - 2013-11-14 16:40:07 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:40:07 --> Session routines successfully run
DEBUG - 2013-11-14 16:40:07 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:40:07 --> Controller Class Initialized
DEBUG - 2013-11-14 16:40:07 --> Model Class Initialized
DEBUG - 2013-11-14 16:40:07 --> Model Class Initialized
DEBUG - 2013-11-14 16:40:07 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:40:07 --> after session initialization................
INFO  - 2013-11-14 16:40:07 --> inside the auto suggest page for pharmacy.................0
INFO  - 2013-11-14 16:40:07 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%k%' 
INFO  - 2013-11-14 16:40:07 --> after retrieving the data from db.................
INFO  - 2013-11-14 16:40:07 --> looping.................
INFO  - 2013-11-14 16:40:07 --> looping.................
INFO  - 2013-11-14 16:40:07 --> looping.................
INFO  - 2013-11-14 16:40:07 --> looping.................
INFO  - 2013-11-14 16:40:07 --> looping.................
INFO  - 2013-11-14 16:40:07 --> looping.................
DEBUG - 2013-11-14 16:40:07 --> Final output sent to browser
DEBUG - 2013-11-14 16:40:07 --> Total execution time: 0.0580
DEBUG - 2013-11-14 16:41:15 --> Config Class Initialized
DEBUG - 2013-11-14 16:41:15 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:41:15 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:41:15 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:41:15 --> URI Class Initialized
DEBUG - 2013-11-14 16:41:15 --> Router Class Initialized
DEBUG - 2013-11-14 16:41:15 --> Output Class Initialized
DEBUG - 2013-11-14 16:41:15 --> Security Class Initialized
DEBUG - 2013-11-14 16:41:15 --> Input Class Initialized
DEBUG - 2013-11-14 16:41:15 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:41:15 --> Language Class Initialized
DEBUG - 2013-11-14 16:41:15 --> Loader Class Initialized
DEBUG - 2013-11-14 16:41:15 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:41:15 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:41:15 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:41:15 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:41:15 --> Session Class Initialized
DEBUG - 2013-11-14 16:41:15 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:41:15 --> Session routines successfully run
DEBUG - 2013-11-14 16:41:15 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:41:15 --> Controller Class Initialized
DEBUG - 2013-11-14 16:41:15 --> Model Class Initialized
DEBUG - 2013-11-14 16:41:15 --> Model Class Initialized
DEBUG - 2013-11-14 16:41:15 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:41:15 --> after session initialization................
INFO  - 2013-11-14 16:41:15 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 16:41:15 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 16:41:15 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 16:41:15 --> inside retrieving locations 
INFO  - 2013-11-14 16:41:15 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 16:41:15 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 16:41:15 --> Final output sent to browser
DEBUG - 2013-11-14 16:41:15 --> Total execution time: 0.0530
DEBUG - 2013-11-14 16:41:26 --> Config Class Initialized
DEBUG - 2013-11-14 16:41:26 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:41:26 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:41:26 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:41:26 --> URI Class Initialized
DEBUG - 2013-11-14 16:41:26 --> Router Class Initialized
DEBUG - 2013-11-14 16:41:26 --> Output Class Initialized
DEBUG - 2013-11-14 16:41:26 --> Security Class Initialized
DEBUG - 2013-11-14 16:41:26 --> Input Class Initialized
DEBUG - 2013-11-14 16:41:26 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:41:26 --> Language Class Initialized
DEBUG - 2013-11-14 16:41:26 --> Loader Class Initialized
DEBUG - 2013-11-14 16:41:26 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:41:26 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:41:26 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:41:26 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:41:26 --> Session Class Initialized
DEBUG - 2013-11-14 16:41:26 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:41:26 --> Session routines successfully run
DEBUG - 2013-11-14 16:41:26 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:41:26 --> Controller Class Initialized
DEBUG - 2013-11-14 16:41:26 --> Model Class Initialized
DEBUG - 2013-11-14 16:41:26 --> Model Class Initialized
DEBUG - 2013-11-14 16:41:26 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:41:26 --> after session initialization................
INFO  - 2013-11-14 16:41:26 --> inside the auto suggest page for pharmacy.................0
INFO  - 2013-11-14 16:41:26 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%k%' 
INFO  - 2013-11-14 16:41:26 --> after retrieving the data from db.................
INFO  - 2013-11-14 16:41:26 --> looping.................
INFO  - 2013-11-14 16:41:26 --> looping.................
INFO  - 2013-11-14 16:41:26 --> looping.................
INFO  - 2013-11-14 16:41:26 --> looping.................
INFO  - 2013-11-14 16:41:26 --> looping.................
INFO  - 2013-11-14 16:41:26 --> looping.................
DEBUG - 2013-11-14 16:41:26 --> Final output sent to browser
DEBUG - 2013-11-14 16:41:26 --> Total execution time: 0.0600
DEBUG - 2013-11-14 16:41:36 --> Config Class Initialized
DEBUG - 2013-11-14 16:41:36 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:41:36 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:41:36 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:41:36 --> URI Class Initialized
DEBUG - 2013-11-14 16:41:36 --> Router Class Initialized
DEBUG - 2013-11-14 16:41:36 --> Output Class Initialized
DEBUG - 2013-11-14 16:41:36 --> Security Class Initialized
DEBUG - 2013-11-14 16:41:36 --> Input Class Initialized
DEBUG - 2013-11-14 16:41:36 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:41:36 --> Language Class Initialized
DEBUG - 2013-11-14 16:41:36 --> Loader Class Initialized
DEBUG - 2013-11-14 16:41:36 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:41:36 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:41:36 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:41:36 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:41:36 --> Session Class Initialized
DEBUG - 2013-11-14 16:41:36 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:41:36 --> Session routines successfully run
DEBUG - 2013-11-14 16:41:36 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:41:36 --> Controller Class Initialized
DEBUG - 2013-11-14 16:41:36 --> Model Class Initialized
DEBUG - 2013-11-14 16:41:36 --> Model Class Initialized
DEBUG - 2013-11-14 16:41:36 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:41:36 --> after session initialization................
INFO  - 2013-11-14 16:41:36 --> inside retrieving pharmacy by location id 1
INFO  - 2013-11-14 16:41:36 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '1'
ORDER BY `p`.`name` asc
LIMIT 25
DEBUG - 2013-11-14 16:41:36 --> Final output sent to browser
DEBUG - 2013-11-14 16:41:36 --> Total execution time: 0.0580
DEBUG - 2013-11-14 16:41:40 --> Config Class Initialized
DEBUG - 2013-11-14 16:41:40 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:41:40 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:41:40 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:41:40 --> URI Class Initialized
DEBUG - 2013-11-14 16:41:40 --> Router Class Initialized
DEBUG - 2013-11-14 16:41:40 --> Output Class Initialized
DEBUG - 2013-11-14 16:41:40 --> Security Class Initialized
DEBUG - 2013-11-14 16:41:40 --> Input Class Initialized
DEBUG - 2013-11-14 16:41:40 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:41:40 --> Language Class Initialized
DEBUG - 2013-11-14 16:41:40 --> Loader Class Initialized
DEBUG - 2013-11-14 16:41:40 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:41:40 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:41:40 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:41:40 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:41:40 --> Session Class Initialized
DEBUG - 2013-11-14 16:41:40 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:41:40 --> Session routines successfully run
DEBUG - 2013-11-14 16:41:40 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:41:40 --> Controller Class Initialized
DEBUG - 2013-11-14 16:41:40 --> Model Class Initialized
DEBUG - 2013-11-14 16:41:40 --> Model Class Initialized
DEBUG - 2013-11-14 16:41:40 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:41:40 --> after session initialization................
INFO  - 2013-11-14 16:41:40 --> inside the auto suggest page for pharmacy.................0
INFO  - 2013-11-14 16:41:40 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%k%' 
INFO  - 2013-11-14 16:41:40 --> after retrieving the data from db.................
INFO  - 2013-11-14 16:41:40 --> looping.................
INFO  - 2013-11-14 16:41:40 --> looping.................
INFO  - 2013-11-14 16:41:40 --> looping.................
INFO  - 2013-11-14 16:41:40 --> looping.................
INFO  - 2013-11-14 16:41:40 --> looping.................
INFO  - 2013-11-14 16:41:40 --> looping.................
DEBUG - 2013-11-14 16:41:40 --> Final output sent to browser
DEBUG - 2013-11-14 16:41:40 --> Total execution time: 0.0520
DEBUG - 2013-11-14 16:42:02 --> Config Class Initialized
DEBUG - 2013-11-14 16:42:02 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:42:02 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:42:02 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:42:02 --> URI Class Initialized
DEBUG - 2013-11-14 16:42:02 --> Router Class Initialized
DEBUG - 2013-11-14 16:42:02 --> Output Class Initialized
DEBUG - 2013-11-14 16:42:02 --> Security Class Initialized
DEBUG - 2013-11-14 16:42:02 --> Input Class Initialized
DEBUG - 2013-11-14 16:42:02 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:42:02 --> Language Class Initialized
DEBUG - 2013-11-14 16:42:02 --> Loader Class Initialized
DEBUG - 2013-11-14 16:42:02 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:42:02 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:42:02 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:42:02 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:42:02 --> Session Class Initialized
DEBUG - 2013-11-14 16:42:02 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:42:02 --> Session routines successfully run
DEBUG - 2013-11-14 16:42:02 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:42:02 --> Controller Class Initialized
DEBUG - 2013-11-14 16:42:02 --> Model Class Initialized
DEBUG - 2013-11-14 16:42:02 --> Model Class Initialized
DEBUG - 2013-11-14 16:42:02 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:42:02 --> after session initialization................
INFO  - 2013-11-14 16:42:02 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>11
INFO  - 2013-11-14 16:42:02 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` =  '11'
DEBUG - 2013-11-14 16:42:02 --> Final output sent to browser
DEBUG - 2013-11-14 16:42:02 --> Total execution time: 0.0490
DEBUG - 2013-11-14 16:42:41 --> Config Class Initialized
DEBUG - 2013-11-14 16:42:41 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:42:41 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:42:41 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:42:41 --> URI Class Initialized
DEBUG - 2013-11-14 16:42:41 --> Router Class Initialized
DEBUG - 2013-11-14 16:42:41 --> Output Class Initialized
DEBUG - 2013-11-14 16:42:41 --> Security Class Initialized
DEBUG - 2013-11-14 16:42:41 --> Input Class Initialized
DEBUG - 2013-11-14 16:42:41 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:42:41 --> Language Class Initialized
DEBUG - 2013-11-14 16:42:41 --> Loader Class Initialized
DEBUG - 2013-11-14 16:42:41 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:42:41 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:42:41 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:42:41 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:42:41 --> Session Class Initialized
DEBUG - 2013-11-14 16:42:41 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:42:41 --> Session routines successfully run
DEBUG - 2013-11-14 16:42:41 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:42:41 --> Controller Class Initialized
DEBUG - 2013-11-14 16:42:41 --> Model Class Initialized
DEBUG - 2013-11-14 16:42:41 --> Model Class Initialized
DEBUG - 2013-11-14 16:42:41 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:42:41 --> after session initialization................
INFO  - 2013-11-14 16:42:41 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 16:42:41 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 16:42:41 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 16:42:41 --> inside retrieving locations 
INFO  - 2013-11-14 16:42:41 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 16:42:42 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 16:42:42 --> Final output sent to browser
DEBUG - 2013-11-14 16:42:42 --> Total execution time: 0.0460
DEBUG - 2013-11-14 16:42:43 --> Config Class Initialized
DEBUG - 2013-11-14 16:42:43 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:42:43 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:42:43 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:42:43 --> URI Class Initialized
DEBUG - 2013-11-14 16:42:43 --> Router Class Initialized
DEBUG - 2013-11-14 16:42:43 --> Output Class Initialized
DEBUG - 2013-11-14 16:42:43 --> Security Class Initialized
DEBUG - 2013-11-14 16:42:43 --> Input Class Initialized
DEBUG - 2013-11-14 16:42:43 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:42:43 --> Language Class Initialized
DEBUG - 2013-11-14 16:42:43 --> Loader Class Initialized
DEBUG - 2013-11-14 16:42:43 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:42:43 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:42:43 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:42:43 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:42:43 --> Session Class Initialized
DEBUG - 2013-11-14 16:42:43 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:42:43 --> Session routines successfully run
DEBUG - 2013-11-14 16:42:43 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:42:43 --> Controller Class Initialized
DEBUG - 2013-11-14 16:42:43 --> Model Class Initialized
DEBUG - 2013-11-14 16:42:43 --> Model Class Initialized
DEBUG - 2013-11-14 16:42:43 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:42:43 --> after session initialization................
INFO  - 2013-11-14 16:42:43 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>4
INFO  - 2013-11-14 16:42:43 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` =  '4'
DEBUG - 2013-11-14 16:42:43 --> Final output sent to browser
DEBUG - 2013-11-14 16:42:43 --> Total execution time: 0.0480
DEBUG - 2013-11-14 16:43:09 --> Config Class Initialized
DEBUG - 2013-11-14 16:43:09 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:43:09 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:43:09 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:43:09 --> URI Class Initialized
DEBUG - 2013-11-14 16:43:09 --> Router Class Initialized
DEBUG - 2013-11-14 16:43:09 --> Output Class Initialized
DEBUG - 2013-11-14 16:43:09 --> Security Class Initialized
DEBUG - 2013-11-14 16:43:09 --> Input Class Initialized
DEBUG - 2013-11-14 16:43:09 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:43:09 --> Language Class Initialized
DEBUG - 2013-11-14 16:43:09 --> Loader Class Initialized
DEBUG - 2013-11-14 16:43:09 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:43:09 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:43:09 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:43:09 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:43:09 --> Session Class Initialized
DEBUG - 2013-11-14 16:43:09 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:43:09 --> Session routines successfully run
DEBUG - 2013-11-14 16:43:09 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:43:09 --> Controller Class Initialized
DEBUG - 2013-11-14 16:43:09 --> Model Class Initialized
DEBUG - 2013-11-14 16:43:09 --> Model Class Initialized
DEBUG - 2013-11-14 16:43:09 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:43:09 --> after session initialization................
INFO  - 2013-11-14 16:43:09 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 16:43:09 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 16:43:09 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 16:43:09 --> inside retrieving locations 
INFO  - 2013-11-14 16:43:09 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 16:43:09 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 16:43:09 --> Final output sent to browser
DEBUG - 2013-11-14 16:43:09 --> Total execution time: 0.0600
DEBUG - 2013-11-14 16:43:13 --> Config Class Initialized
DEBUG - 2013-11-14 16:43:13 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:43:13 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:43:13 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:43:13 --> URI Class Initialized
DEBUG - 2013-11-14 16:43:13 --> Router Class Initialized
DEBUG - 2013-11-14 16:43:13 --> Output Class Initialized
DEBUG - 2013-11-14 16:43:13 --> Security Class Initialized
DEBUG - 2013-11-14 16:43:13 --> Input Class Initialized
DEBUG - 2013-11-14 16:43:13 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:43:13 --> Language Class Initialized
DEBUG - 2013-11-14 16:43:13 --> Loader Class Initialized
DEBUG - 2013-11-14 16:43:13 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:43:13 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:43:13 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:43:13 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:43:13 --> Session Class Initialized
DEBUG - 2013-11-14 16:43:13 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:43:13 --> Session routines successfully run
DEBUG - 2013-11-14 16:43:13 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:43:13 --> Controller Class Initialized
DEBUG - 2013-11-14 16:43:13 --> Model Class Initialized
DEBUG - 2013-11-14 16:43:13 --> Model Class Initialized
DEBUG - 2013-11-14 16:43:13 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:43:13 --> after session initialization................
INFO  - 2013-11-14 16:43:13 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>4
INFO  - 2013-11-14 16:43:13 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` =  '4'
DEBUG - 2013-11-14 16:43:13 --> Final output sent to browser
DEBUG - 2013-11-14 16:43:13 --> Total execution time: 0.0490
DEBUG - 2013-11-14 16:43:31 --> Config Class Initialized
DEBUG - 2013-11-14 16:43:31 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:43:31 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:43:31 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:43:31 --> URI Class Initialized
DEBUG - 2013-11-14 16:43:31 --> Router Class Initialized
DEBUG - 2013-11-14 16:43:31 --> Output Class Initialized
DEBUG - 2013-11-14 16:43:31 --> Security Class Initialized
DEBUG - 2013-11-14 16:43:31 --> Input Class Initialized
DEBUG - 2013-11-14 16:43:31 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:43:31 --> Language Class Initialized
DEBUG - 2013-11-14 16:43:31 --> Loader Class Initialized
DEBUG - 2013-11-14 16:43:31 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:43:31 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:43:31 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:43:31 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:43:31 --> Session Class Initialized
DEBUG - 2013-11-14 16:43:31 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:43:31 --> Session routines successfully run
DEBUG - 2013-11-14 16:43:31 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:43:31 --> Controller Class Initialized
DEBUG - 2013-11-14 16:43:31 --> Model Class Initialized
DEBUG - 2013-11-14 16:43:31 --> Model Class Initialized
DEBUG - 2013-11-14 16:43:31 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:43:31 --> after session initialization................
INFO  - 2013-11-14 16:43:31 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 16:43:31 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 16:43:31 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 16:43:31 --> inside retrieving locations 
INFO  - 2013-11-14 16:43:31 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 16:43:31 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 16:43:31 --> Final output sent to browser
DEBUG - 2013-11-14 16:43:31 --> Total execution time: 0.0590
DEBUG - 2013-11-14 16:43:33 --> Config Class Initialized
DEBUG - 2013-11-14 16:43:33 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:43:33 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:43:33 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:43:33 --> URI Class Initialized
DEBUG - 2013-11-14 16:43:33 --> Router Class Initialized
DEBUG - 2013-11-14 16:43:33 --> Output Class Initialized
DEBUG - 2013-11-14 16:43:33 --> Security Class Initialized
DEBUG - 2013-11-14 16:43:33 --> Input Class Initialized
DEBUG - 2013-11-14 16:43:33 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:43:33 --> Language Class Initialized
DEBUG - 2013-11-14 16:43:33 --> Loader Class Initialized
DEBUG - 2013-11-14 16:43:33 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:43:33 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:43:33 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:43:33 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:43:33 --> Session Class Initialized
DEBUG - 2013-11-14 16:43:33 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:43:33 --> Session routines successfully run
DEBUG - 2013-11-14 16:43:33 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:43:33 --> Controller Class Initialized
DEBUG - 2013-11-14 16:43:33 --> Model Class Initialized
DEBUG - 2013-11-14 16:43:33 --> Model Class Initialized
DEBUG - 2013-11-14 16:43:33 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:43:33 --> after session initialization................
INFO  - 2013-11-14 16:43:33 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 16:43:33 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 16:43:33 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 16:43:33 --> inside retrieving locations 
INFO  - 2013-11-14 16:43:33 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 16:43:33 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 16:43:33 --> Final output sent to browser
DEBUG - 2013-11-14 16:43:33 --> Total execution time: 0.0550
DEBUG - 2013-11-14 16:43:39 --> Config Class Initialized
DEBUG - 2013-11-14 16:43:39 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:43:39 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:43:39 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:43:39 --> URI Class Initialized
DEBUG - 2013-11-14 16:43:39 --> Router Class Initialized
DEBUG - 2013-11-14 16:43:39 --> Output Class Initialized
DEBUG - 2013-11-14 16:43:39 --> Security Class Initialized
DEBUG - 2013-11-14 16:43:39 --> Input Class Initialized
DEBUG - 2013-11-14 16:43:39 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:43:39 --> Language Class Initialized
DEBUG - 2013-11-14 16:43:39 --> Loader Class Initialized
DEBUG - 2013-11-14 16:43:39 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:43:39 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:43:39 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:43:39 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:43:39 --> Session Class Initialized
DEBUG - 2013-11-14 16:43:39 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:43:39 --> Session routines successfully run
DEBUG - 2013-11-14 16:43:39 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:43:39 --> Controller Class Initialized
DEBUG - 2013-11-14 16:43:39 --> Model Class Initialized
DEBUG - 2013-11-14 16:43:39 --> Model Class Initialized
DEBUG - 2013-11-14 16:43:39 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:43:39 --> after session initialization................
INFO  - 2013-11-14 16:43:39 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>2
INFO  - 2013-11-14 16:43:39 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` =  '2'
DEBUG - 2013-11-14 16:43:39 --> Final output sent to browser
DEBUG - 2013-11-14 16:43:39 --> Total execution time: 0.0410
DEBUG - 2013-11-14 16:43:45 --> Config Class Initialized
DEBUG - 2013-11-14 16:43:45 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:43:45 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:43:45 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:43:45 --> URI Class Initialized
DEBUG - 2013-11-14 16:43:45 --> Router Class Initialized
DEBUG - 2013-11-14 16:43:45 --> Output Class Initialized
DEBUG - 2013-11-14 16:43:45 --> Security Class Initialized
DEBUG - 2013-11-14 16:43:45 --> Input Class Initialized
DEBUG - 2013-11-14 16:43:45 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:43:45 --> Language Class Initialized
DEBUG - 2013-11-14 16:43:45 --> Loader Class Initialized
DEBUG - 2013-11-14 16:43:45 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:43:45 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:43:45 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:43:45 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:43:45 --> Session Class Initialized
DEBUG - 2013-11-14 16:43:45 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:43:45 --> Session routines successfully run
DEBUG - 2013-11-14 16:43:45 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:43:45 --> Controller Class Initialized
DEBUG - 2013-11-14 16:43:45 --> Model Class Initialized
DEBUG - 2013-11-14 16:43:45 --> Model Class Initialized
DEBUG - 2013-11-14 16:43:45 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:43:45 --> after session initialization................
INFO  - 2013-11-14 16:43:45 --> inside retrieving pharmacy by location id 2
INFO  - 2013-11-14 16:43:45 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '2'
ORDER BY `p`.`name` asc
LIMIT 25
DEBUG - 2013-11-14 16:43:45 --> Final output sent to browser
DEBUG - 2013-11-14 16:43:45 --> Total execution time: 0.0410
DEBUG - 2013-11-14 16:43:49 --> Config Class Initialized
DEBUG - 2013-11-14 16:43:49 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:43:49 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:43:49 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:43:49 --> URI Class Initialized
DEBUG - 2013-11-14 16:43:49 --> Router Class Initialized
DEBUG - 2013-11-14 16:43:49 --> Output Class Initialized
DEBUG - 2013-11-14 16:43:49 --> Security Class Initialized
DEBUG - 2013-11-14 16:43:49 --> Input Class Initialized
DEBUG - 2013-11-14 16:43:49 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:43:49 --> Language Class Initialized
DEBUG - 2013-11-14 16:43:49 --> Loader Class Initialized
DEBUG - 2013-11-14 16:43:49 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:43:49 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:43:49 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:43:49 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:43:49 --> Session Class Initialized
DEBUG - 2013-11-14 16:43:49 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:43:49 --> Session routines successfully run
DEBUG - 2013-11-14 16:43:49 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:43:49 --> Controller Class Initialized
DEBUG - 2013-11-14 16:43:49 --> Model Class Initialized
DEBUG - 2013-11-14 16:43:49 --> Model Class Initialized
DEBUG - 2013-11-14 16:43:49 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:43:49 --> after session initialization................
INFO  - 2013-11-14 16:43:49 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>5
INFO  - 2013-11-14 16:43:49 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` =  '5'
DEBUG - 2013-11-14 16:43:49 --> Final output sent to browser
DEBUG - 2013-11-14 16:43:49 --> Total execution time: 0.0460
DEBUG - 2013-11-14 16:44:05 --> Config Class Initialized
DEBUG - 2013-11-14 16:44:05 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:44:05 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:44:05 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:44:05 --> URI Class Initialized
DEBUG - 2013-11-14 16:44:05 --> Router Class Initialized
DEBUG - 2013-11-14 16:44:05 --> Output Class Initialized
DEBUG - 2013-11-14 16:44:05 --> Security Class Initialized
DEBUG - 2013-11-14 16:44:05 --> Input Class Initialized
DEBUG - 2013-11-14 16:44:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:44:05 --> Language Class Initialized
DEBUG - 2013-11-14 16:44:05 --> Loader Class Initialized
DEBUG - 2013-11-14 16:44:05 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:44:05 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:44:05 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:44:05 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:44:05 --> Session Class Initialized
DEBUG - 2013-11-14 16:44:05 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:44:05 --> Session routines successfully run
DEBUG - 2013-11-14 16:44:05 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:44:05 --> Controller Class Initialized
DEBUG - 2013-11-14 16:44:05 --> Model Class Initialized
DEBUG - 2013-11-14 16:44:05 --> Model Class Initialized
DEBUG - 2013-11-14 16:44:05 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:44:05 --> after session initialization................
INFO  - 2013-11-14 16:44:05 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 16:44:05 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 16:44:05 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 16:44:05 --> inside retrieving locations 
INFO  - 2013-11-14 16:44:05 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 16:44:05 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 16:44:05 --> Final output sent to browser
DEBUG - 2013-11-14 16:44:05 --> Total execution time: 0.0510
DEBUG - 2013-11-14 16:44:08 --> Config Class Initialized
DEBUG - 2013-11-14 16:44:08 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:44:08 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:44:08 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:44:08 --> URI Class Initialized
DEBUG - 2013-11-14 16:44:08 --> Router Class Initialized
DEBUG - 2013-11-14 16:44:08 --> Output Class Initialized
DEBUG - 2013-11-14 16:44:08 --> Security Class Initialized
DEBUG - 2013-11-14 16:44:08 --> Input Class Initialized
DEBUG - 2013-11-14 16:44:08 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:44:08 --> Language Class Initialized
DEBUG - 2013-11-14 16:44:08 --> Loader Class Initialized
DEBUG - 2013-11-14 16:44:08 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:44:08 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:44:08 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:44:08 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:44:08 --> Session Class Initialized
DEBUG - 2013-11-14 16:44:08 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:44:08 --> Session routines successfully run
DEBUG - 2013-11-14 16:44:08 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:44:08 --> Controller Class Initialized
DEBUG - 2013-11-14 16:44:08 --> Model Class Initialized
DEBUG - 2013-11-14 16:44:08 --> Model Class Initialized
DEBUG - 2013-11-14 16:44:08 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:44:08 --> after session initialization................
INFO  - 2013-11-14 16:44:08 --> inside retrieving pharmacy by location id 2
INFO  - 2013-11-14 16:44:08 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '2'
ORDER BY `p`.`name` asc
LIMIT 25
DEBUG - 2013-11-14 16:44:08 --> Final output sent to browser
DEBUG - 2013-11-14 16:44:08 --> Total execution time: 0.0430
DEBUG - 2013-11-14 16:44:11 --> Config Class Initialized
DEBUG - 2013-11-14 16:44:11 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:44:11 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:44:11 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:44:11 --> URI Class Initialized
DEBUG - 2013-11-14 16:44:11 --> Router Class Initialized
DEBUG - 2013-11-14 16:44:11 --> Output Class Initialized
DEBUG - 2013-11-14 16:44:11 --> Security Class Initialized
DEBUG - 2013-11-14 16:44:11 --> Input Class Initialized
DEBUG - 2013-11-14 16:44:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:44:11 --> Language Class Initialized
DEBUG - 2013-11-14 16:44:11 --> Loader Class Initialized
DEBUG - 2013-11-14 16:44:11 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:44:11 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:44:11 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:44:11 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:44:11 --> Session Class Initialized
DEBUG - 2013-11-14 16:44:11 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:44:11 --> Session routines successfully run
DEBUG - 2013-11-14 16:44:11 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:44:11 --> Controller Class Initialized
DEBUG - 2013-11-14 16:44:11 --> Model Class Initialized
DEBUG - 2013-11-14 16:44:11 --> Model Class Initialized
DEBUG - 2013-11-14 16:44:11 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:44:11 --> after session initialization................
INFO  - 2013-11-14 16:44:11 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>5
INFO  - 2013-11-14 16:44:11 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` =  '5'
DEBUG - 2013-11-14 16:44:11 --> Final output sent to browser
DEBUG - 2013-11-14 16:44:11 --> Total execution time: 0.0470
DEBUG - 2013-11-14 16:44:49 --> Config Class Initialized
DEBUG - 2013-11-14 16:44:49 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:44:49 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:44:49 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:44:49 --> URI Class Initialized
DEBUG - 2013-11-14 16:44:49 --> Router Class Initialized
DEBUG - 2013-11-14 16:44:49 --> Output Class Initialized
DEBUG - 2013-11-14 16:44:49 --> Security Class Initialized
DEBUG - 2013-11-14 16:44:49 --> Input Class Initialized
DEBUG - 2013-11-14 16:44:49 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:44:49 --> Language Class Initialized
DEBUG - 2013-11-14 16:44:49 --> Loader Class Initialized
DEBUG - 2013-11-14 16:44:49 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:44:49 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:44:49 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:44:49 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:44:49 --> Session Class Initialized
DEBUG - 2013-11-14 16:44:49 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:44:49 --> Session routines successfully run
DEBUG - 2013-11-14 16:44:49 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:44:49 --> Controller Class Initialized
DEBUG - 2013-11-14 16:44:49 --> Model Class Initialized
DEBUG - 2013-11-14 16:44:49 --> Model Class Initialized
DEBUG - 2013-11-14 16:44:49 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:44:49 --> after session initialization................
INFO  - 2013-11-14 16:44:49 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 16:44:49 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 16:44:49 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 16:44:49 --> inside retrieving locations 
INFO  - 2013-11-14 16:44:49 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 16:44:49 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 16:44:49 --> Final output sent to browser
DEBUG - 2013-11-14 16:44:49 --> Total execution time: 0.0660
DEBUG - 2013-11-14 16:44:53 --> Config Class Initialized
DEBUG - 2013-11-14 16:44:53 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:44:53 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:44:53 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:44:53 --> URI Class Initialized
DEBUG - 2013-11-14 16:44:53 --> Router Class Initialized
DEBUG - 2013-11-14 16:44:53 --> Output Class Initialized
DEBUG - 2013-11-14 16:44:53 --> Security Class Initialized
DEBUG - 2013-11-14 16:44:53 --> Input Class Initialized
DEBUG - 2013-11-14 16:44:53 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:44:53 --> Language Class Initialized
DEBUG - 2013-11-14 16:44:53 --> Loader Class Initialized
DEBUG - 2013-11-14 16:44:53 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:44:53 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:44:53 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:44:53 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:44:53 --> Session Class Initialized
DEBUG - 2013-11-14 16:44:53 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:44:53 --> Session routines successfully run
DEBUG - 2013-11-14 16:44:53 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:44:53 --> Controller Class Initialized
DEBUG - 2013-11-14 16:44:53 --> Model Class Initialized
DEBUG - 2013-11-14 16:44:53 --> Model Class Initialized
DEBUG - 2013-11-14 16:44:53 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:44:53 --> after session initialization................
INFO  - 2013-11-14 16:44:53 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>4
INFO  - 2013-11-14 16:44:53 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` =  '4'
DEBUG - 2013-11-14 16:44:53 --> Final output sent to browser
DEBUG - 2013-11-14 16:44:53 --> Total execution time: 0.0410
DEBUG - 2013-11-14 16:45:00 --> Config Class Initialized
DEBUG - 2013-11-14 16:45:00 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:45:00 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:45:00 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:45:00 --> URI Class Initialized
DEBUG - 2013-11-14 16:45:00 --> Router Class Initialized
DEBUG - 2013-11-14 16:45:00 --> Output Class Initialized
DEBUG - 2013-11-14 16:45:00 --> Security Class Initialized
DEBUG - 2013-11-14 16:45:00 --> Input Class Initialized
DEBUG - 2013-11-14 16:45:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:45:00 --> Language Class Initialized
DEBUG - 2013-11-14 16:45:00 --> Loader Class Initialized
DEBUG - 2013-11-14 16:45:00 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:45:00 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:45:00 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:45:00 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:45:00 --> Session Class Initialized
DEBUG - 2013-11-14 16:45:00 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:45:00 --> Session routines successfully run
DEBUG - 2013-11-14 16:45:00 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:45:00 --> Controller Class Initialized
DEBUG - 2013-11-14 16:45:00 --> Model Class Initialized
DEBUG - 2013-11-14 16:45:00 --> Model Class Initialized
DEBUG - 2013-11-14 16:45:00 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:45:00 --> after session initialization................
INFO  - 2013-11-14 16:45:00 --> inside retrieving pharmacy by location id 2
INFO  - 2013-11-14 16:45:00 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '2'
ORDER BY `p`.`name` asc
LIMIT 25
DEBUG - 2013-11-14 16:45:00 --> Final output sent to browser
DEBUG - 2013-11-14 16:45:00 --> Total execution time: 0.0460
DEBUG - 2013-11-14 16:45:04 --> Config Class Initialized
DEBUG - 2013-11-14 16:45:04 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:45:04 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:45:04 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:45:04 --> URI Class Initialized
DEBUG - 2013-11-14 16:45:04 --> Router Class Initialized
DEBUG - 2013-11-14 16:45:04 --> Output Class Initialized
DEBUG - 2013-11-14 16:45:04 --> Security Class Initialized
DEBUG - 2013-11-14 16:45:04 --> Input Class Initialized
DEBUG - 2013-11-14 16:45:04 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:45:04 --> Language Class Initialized
DEBUG - 2013-11-14 16:45:04 --> Loader Class Initialized
DEBUG - 2013-11-14 16:45:04 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:45:04 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:45:04 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:45:04 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:45:04 --> Session Class Initialized
DEBUG - 2013-11-14 16:45:04 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:45:04 --> Session routines successfully run
DEBUG - 2013-11-14 16:45:04 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:45:04 --> Controller Class Initialized
DEBUG - 2013-11-14 16:45:04 --> Model Class Initialized
DEBUG - 2013-11-14 16:45:04 --> Model Class Initialized
DEBUG - 2013-11-14 16:45:04 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:45:04 --> after session initialization................
INFO  - 2013-11-14 16:45:04 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>10
INFO  - 2013-11-14 16:45:04 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` =  '10'
DEBUG - 2013-11-14 16:45:04 --> Final output sent to browser
DEBUG - 2013-11-14 16:45:04 --> Total execution time: 0.0410
DEBUG - 2013-11-14 16:45:47 --> Config Class Initialized
DEBUG - 2013-11-14 16:45:47 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:45:47 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:45:47 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:45:47 --> URI Class Initialized
DEBUG - 2013-11-14 16:45:47 --> Router Class Initialized
DEBUG - 2013-11-14 16:45:47 --> Output Class Initialized
DEBUG - 2013-11-14 16:45:47 --> Security Class Initialized
DEBUG - 2013-11-14 16:45:47 --> Input Class Initialized
DEBUG - 2013-11-14 16:45:47 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:45:47 --> Language Class Initialized
DEBUG - 2013-11-14 16:45:47 --> Loader Class Initialized
DEBUG - 2013-11-14 16:45:47 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:45:47 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:45:47 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:45:47 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:45:47 --> Session Class Initialized
DEBUG - 2013-11-14 16:45:47 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:45:47 --> Session routines successfully run
DEBUG - 2013-11-14 16:45:47 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:45:47 --> Controller Class Initialized
DEBUG - 2013-11-14 16:45:47 --> Model Class Initialized
DEBUG - 2013-11-14 16:45:47 --> Model Class Initialized
DEBUG - 2013-11-14 16:45:47 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:45:47 --> after session initialization................
INFO  - 2013-11-14 16:45:47 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 16:45:47 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 16:45:47 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 16:45:47 --> inside retrieving locations 
INFO  - 2013-11-14 16:45:47 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 16:45:47 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 16:45:47 --> Final output sent to browser
DEBUG - 2013-11-14 16:45:47 --> Total execution time: 0.0550
DEBUG - 2013-11-14 16:45:50 --> Config Class Initialized
DEBUG - 2013-11-14 16:45:50 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:45:50 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:45:50 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:45:50 --> URI Class Initialized
DEBUG - 2013-11-14 16:45:50 --> Router Class Initialized
DEBUG - 2013-11-14 16:45:50 --> Output Class Initialized
DEBUG - 2013-11-14 16:45:50 --> Security Class Initialized
DEBUG - 2013-11-14 16:45:50 --> Input Class Initialized
DEBUG - 2013-11-14 16:45:50 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:45:50 --> Language Class Initialized
DEBUG - 2013-11-14 16:45:50 --> Loader Class Initialized
DEBUG - 2013-11-14 16:45:50 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:45:50 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:45:50 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:45:50 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:45:50 --> Session Class Initialized
DEBUG - 2013-11-14 16:45:50 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:45:50 --> Session routines successfully run
DEBUG - 2013-11-14 16:45:50 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:45:50 --> Controller Class Initialized
DEBUG - 2013-11-14 16:45:50 --> Model Class Initialized
DEBUG - 2013-11-14 16:45:50 --> Model Class Initialized
DEBUG - 2013-11-14 16:45:50 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:45:50 --> after session initialization................
INFO  - 2013-11-14 16:45:50 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>3
INFO  - 2013-11-14 16:45:50 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` =  '3'
DEBUG - 2013-11-14 16:45:50 --> Final output sent to browser
DEBUG - 2013-11-14 16:45:50 --> Total execution time: 0.0400
DEBUG - 2013-11-14 16:45:59 --> Config Class Initialized
DEBUG - 2013-11-14 16:45:59 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:45:59 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:45:59 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:45:59 --> URI Class Initialized
DEBUG - 2013-11-14 16:45:59 --> Router Class Initialized
DEBUG - 2013-11-14 16:45:59 --> Output Class Initialized
DEBUG - 2013-11-14 16:45:59 --> Security Class Initialized
DEBUG - 2013-11-14 16:45:59 --> Input Class Initialized
DEBUG - 2013-11-14 16:45:59 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:45:59 --> Language Class Initialized
DEBUG - 2013-11-14 16:45:59 --> Loader Class Initialized
DEBUG - 2013-11-14 16:45:59 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:45:59 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:45:59 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:45:59 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:45:59 --> Session Class Initialized
DEBUG - 2013-11-14 16:45:59 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:45:59 --> Session routines successfully run
DEBUG - 2013-11-14 16:45:59 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:45:59 --> Controller Class Initialized
DEBUG - 2013-11-14 16:45:59 --> Model Class Initialized
DEBUG - 2013-11-14 16:45:59 --> Model Class Initialized
DEBUG - 2013-11-14 16:45:59 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:45:59 --> after session initialization................
INFO  - 2013-11-14 16:45:59 --> inside retrieving pharmacy by location id 1
INFO  - 2013-11-14 16:45:59 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '1'
ORDER BY `p`.`name` asc
LIMIT 25
DEBUG - 2013-11-14 16:45:59 --> Final output sent to browser
DEBUG - 2013-11-14 16:45:59 --> Total execution time: 0.0470
DEBUG - 2013-11-14 16:47:39 --> Config Class Initialized
DEBUG - 2013-11-14 16:47:39 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:47:39 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:47:39 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:47:39 --> URI Class Initialized
DEBUG - 2013-11-14 16:47:39 --> Router Class Initialized
DEBUG - 2013-11-14 16:47:39 --> Output Class Initialized
DEBUG - 2013-11-14 16:47:39 --> Security Class Initialized
DEBUG - 2013-11-14 16:47:39 --> Input Class Initialized
DEBUG - 2013-11-14 16:47:39 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:47:39 --> Language Class Initialized
DEBUG - 2013-11-14 16:47:39 --> Loader Class Initialized
DEBUG - 2013-11-14 16:47:39 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:47:39 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:47:39 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:47:39 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:47:39 --> Session Class Initialized
DEBUG - 2013-11-14 16:47:39 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:47:39 --> Session routines successfully run
DEBUG - 2013-11-14 16:47:39 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:47:39 --> Controller Class Initialized
DEBUG - 2013-11-14 16:47:39 --> Model Class Initialized
DEBUG - 2013-11-14 16:47:39 --> Model Class Initialized
DEBUG - 2013-11-14 16:47:39 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:47:39 --> after session initialization................
INFO  - 2013-11-14 16:47:39 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 16:47:39 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 16:47:39 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 16:47:39 --> inside retrieving locations 
INFO  - 2013-11-14 16:47:39 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 16:47:39 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 16:47:39 --> Final output sent to browser
DEBUG - 2013-11-14 16:47:39 --> Total execution time: 0.0630
DEBUG - 2013-11-14 16:47:43 --> Config Class Initialized
DEBUG - 2013-11-14 16:47:43 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:47:43 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:47:43 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:47:43 --> URI Class Initialized
DEBUG - 2013-11-14 16:47:43 --> Router Class Initialized
DEBUG - 2013-11-14 16:47:43 --> Output Class Initialized
DEBUG - 2013-11-14 16:47:43 --> Security Class Initialized
DEBUG - 2013-11-14 16:47:43 --> Input Class Initialized
DEBUG - 2013-11-14 16:47:43 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:47:43 --> Language Class Initialized
DEBUG - 2013-11-14 16:47:43 --> Loader Class Initialized
DEBUG - 2013-11-14 16:47:43 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:47:43 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:47:43 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:47:43 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:47:43 --> Session Class Initialized
DEBUG - 2013-11-14 16:47:43 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:47:43 --> Session routines successfully run
DEBUG - 2013-11-14 16:47:43 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:47:43 --> Controller Class Initialized
DEBUG - 2013-11-14 16:47:43 --> Model Class Initialized
DEBUG - 2013-11-14 16:47:43 --> Model Class Initialized
DEBUG - 2013-11-14 16:47:43 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:47:43 --> after session initialization................
INFO  - 2013-11-14 16:47:43 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>4
INFO  - 2013-11-14 16:47:43 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` =  '4'
DEBUG - 2013-11-14 16:47:43 --> Final output sent to browser
DEBUG - 2013-11-14 16:47:43 --> Total execution time: 0.0410
DEBUG - 2013-11-14 16:48:16 --> Config Class Initialized
DEBUG - 2013-11-14 16:48:16 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:48:16 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:48:16 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:48:16 --> URI Class Initialized
DEBUG - 2013-11-14 16:48:16 --> Router Class Initialized
DEBUG - 2013-11-14 16:48:16 --> Output Class Initialized
DEBUG - 2013-11-14 16:48:16 --> Security Class Initialized
DEBUG - 2013-11-14 16:48:16 --> Input Class Initialized
DEBUG - 2013-11-14 16:48:16 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:48:16 --> Language Class Initialized
DEBUG - 2013-11-14 16:48:16 --> Loader Class Initialized
DEBUG - 2013-11-14 16:48:16 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:48:16 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:48:16 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:48:16 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:48:16 --> Session Class Initialized
DEBUG - 2013-11-14 16:48:16 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:48:16 --> Session routines successfully run
DEBUG - 2013-11-14 16:48:16 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:48:16 --> Controller Class Initialized
DEBUG - 2013-11-14 16:48:16 --> Model Class Initialized
DEBUG - 2013-11-14 16:48:16 --> Model Class Initialized
DEBUG - 2013-11-14 16:48:16 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:48:16 --> after session initialization................
INFO  - 2013-11-14 16:48:16 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 16:48:16 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 16:48:16 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 16:48:16 --> inside retrieving locations 
INFO  - 2013-11-14 16:48:16 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 16:48:16 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 16:48:16 --> Final output sent to browser
DEBUG - 2013-11-14 16:48:16 --> Total execution time: 0.0720
DEBUG - 2013-11-14 16:48:20 --> Config Class Initialized
DEBUG - 2013-11-14 16:48:20 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:48:20 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:48:20 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:48:20 --> URI Class Initialized
DEBUG - 2013-11-14 16:48:20 --> Router Class Initialized
DEBUG - 2013-11-14 16:48:20 --> Output Class Initialized
DEBUG - 2013-11-14 16:48:20 --> Security Class Initialized
DEBUG - 2013-11-14 16:48:20 --> Input Class Initialized
DEBUG - 2013-11-14 16:48:20 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:48:20 --> Language Class Initialized
DEBUG - 2013-11-14 16:48:20 --> Loader Class Initialized
DEBUG - 2013-11-14 16:48:20 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:48:20 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:48:20 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:48:20 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:48:20 --> Session Class Initialized
DEBUG - 2013-11-14 16:48:20 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:48:20 --> Session routines successfully run
DEBUG - 2013-11-14 16:48:20 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:48:20 --> Controller Class Initialized
DEBUG - 2013-11-14 16:48:20 --> Model Class Initialized
DEBUG - 2013-11-14 16:48:20 --> Model Class Initialized
DEBUG - 2013-11-14 16:48:20 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:48:20 --> after session initialization................
INFO  - 2013-11-14 16:48:20 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>4
INFO  - 2013-11-14 16:48:20 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` =  '4'
DEBUG - 2013-11-14 16:48:20 --> Final output sent to browser
DEBUG - 2013-11-14 16:48:20 --> Total execution time: 0.0420
DEBUG - 2013-11-14 16:48:28 --> Config Class Initialized
DEBUG - 2013-11-14 16:48:28 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:48:28 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:48:28 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:48:28 --> URI Class Initialized
DEBUG - 2013-11-14 16:48:28 --> Router Class Initialized
DEBUG - 2013-11-14 16:48:28 --> Output Class Initialized
DEBUG - 2013-11-14 16:48:28 --> Security Class Initialized
DEBUG - 2013-11-14 16:48:28 --> Input Class Initialized
DEBUG - 2013-11-14 16:48:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:48:28 --> Language Class Initialized
DEBUG - 2013-11-14 16:48:28 --> Loader Class Initialized
DEBUG - 2013-11-14 16:48:28 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:48:28 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:48:28 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:48:28 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:48:28 --> Session Class Initialized
DEBUG - 2013-11-14 16:48:28 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:48:28 --> Session routines successfully run
DEBUG - 2013-11-14 16:48:28 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:48:28 --> Controller Class Initialized
DEBUG - 2013-11-14 16:48:28 --> Model Class Initialized
DEBUG - 2013-11-14 16:48:28 --> Model Class Initialized
DEBUG - 2013-11-14 16:48:28 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:48:28 --> after session initialization................
INFO  - 2013-11-14 16:48:28 --> inside retrieving pharmacy by location id 0
INFO  - 2013-11-14 16:48:28 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
ORDER BY `p`.`name` asc
LIMIT 25
DEBUG - 2013-11-14 16:48:28 --> Final output sent to browser
DEBUG - 2013-11-14 16:48:28 --> Total execution time: 0.0420
DEBUG - 2013-11-14 16:48:31 --> Config Class Initialized
DEBUG - 2013-11-14 16:48:31 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:48:31 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:48:31 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:48:31 --> URI Class Initialized
DEBUG - 2013-11-14 16:48:31 --> Router Class Initialized
DEBUG - 2013-11-14 16:48:31 --> Output Class Initialized
DEBUG - 2013-11-14 16:48:31 --> Security Class Initialized
DEBUG - 2013-11-14 16:48:31 --> Input Class Initialized
DEBUG - 2013-11-14 16:48:31 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:48:31 --> Language Class Initialized
DEBUG - 2013-11-14 16:48:31 --> Loader Class Initialized
DEBUG - 2013-11-14 16:48:31 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:48:31 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:48:31 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:48:31 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:48:31 --> Session Class Initialized
DEBUG - 2013-11-14 16:48:31 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:48:31 --> Session routines successfully run
DEBUG - 2013-11-14 16:48:31 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:48:31 --> Controller Class Initialized
DEBUG - 2013-11-14 16:48:31 --> Model Class Initialized
DEBUG - 2013-11-14 16:48:31 --> Model Class Initialized
DEBUG - 2013-11-14 16:48:31 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:48:31 --> after session initialization................
INFO  - 2013-11-14 16:48:31 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>28
INFO  - 2013-11-14 16:48:31 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` =  '28'
DEBUG - 2013-11-14 16:48:31 --> Final output sent to browser
DEBUG - 2013-11-14 16:48:31 --> Total execution time: 0.0480
DEBUG - 2013-11-14 16:48:35 --> Config Class Initialized
DEBUG - 2013-11-14 16:48:35 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:48:35 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:48:35 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:48:35 --> URI Class Initialized
DEBUG - 2013-11-14 16:48:35 --> Router Class Initialized
DEBUG - 2013-11-14 16:48:35 --> Output Class Initialized
DEBUG - 2013-11-14 16:48:35 --> Security Class Initialized
DEBUG - 2013-11-14 16:48:35 --> Input Class Initialized
DEBUG - 2013-11-14 16:48:35 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:48:35 --> Language Class Initialized
DEBUG - 2013-11-14 16:48:35 --> Loader Class Initialized
DEBUG - 2013-11-14 16:48:35 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:48:35 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:48:35 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:48:35 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:48:35 --> Session Class Initialized
DEBUG - 2013-11-14 16:48:35 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:48:35 --> Session routines successfully run
DEBUG - 2013-11-14 16:48:35 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:48:35 --> Controller Class Initialized
DEBUG - 2013-11-14 16:48:35 --> Model Class Initialized
DEBUG - 2013-11-14 16:48:35 --> Model Class Initialized
DEBUG - 2013-11-14 16:48:35 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:48:35 --> after session initialization................
INFO  - 2013-11-14 16:48:35 --> inside retrieving pharmacy by location id 2
INFO  - 2013-11-14 16:48:35 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '2'
ORDER BY `p`.`name` asc
LIMIT 25
DEBUG - 2013-11-14 16:48:35 --> Final output sent to browser
DEBUG - 2013-11-14 16:48:35 --> Total execution time: 0.0460
DEBUG - 2013-11-14 16:48:38 --> Config Class Initialized
DEBUG - 2013-11-14 16:48:38 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:48:38 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:48:38 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:48:38 --> URI Class Initialized
DEBUG - 2013-11-14 16:48:38 --> Router Class Initialized
DEBUG - 2013-11-14 16:48:38 --> Output Class Initialized
DEBUG - 2013-11-14 16:48:38 --> Security Class Initialized
DEBUG - 2013-11-14 16:48:38 --> Input Class Initialized
DEBUG - 2013-11-14 16:48:38 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:48:38 --> Language Class Initialized
DEBUG - 2013-11-14 16:48:38 --> Loader Class Initialized
DEBUG - 2013-11-14 16:48:38 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:48:38 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:48:38 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:48:38 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:48:38 --> Session Class Initialized
DEBUG - 2013-11-14 16:48:38 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:48:38 --> Session routines successfully run
DEBUG - 2013-11-14 16:48:38 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:48:38 --> Controller Class Initialized
DEBUG - 2013-11-14 16:48:38 --> Model Class Initialized
DEBUG - 2013-11-14 16:48:38 --> Model Class Initialized
DEBUG - 2013-11-14 16:48:38 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:48:38 --> after session initialization................
INFO  - 2013-11-14 16:48:38 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>23
INFO  - 2013-11-14 16:48:38 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` =  '23'
DEBUG - 2013-11-14 16:48:38 --> Final output sent to browser
DEBUG - 2013-11-14 16:48:38 --> Total execution time: 0.0560
DEBUG - 2013-11-14 16:50:09 --> Config Class Initialized
DEBUG - 2013-11-14 16:50:09 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:50:09 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:50:09 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:50:09 --> URI Class Initialized
DEBUG - 2013-11-14 16:50:09 --> Router Class Initialized
DEBUG - 2013-11-14 16:50:09 --> Output Class Initialized
DEBUG - 2013-11-14 16:50:09 --> Security Class Initialized
DEBUG - 2013-11-14 16:50:09 --> Input Class Initialized
DEBUG - 2013-11-14 16:50:09 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:50:09 --> Language Class Initialized
DEBUG - 2013-11-14 16:50:09 --> Loader Class Initialized
DEBUG - 2013-11-14 16:50:09 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:50:09 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:50:09 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:50:09 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:50:09 --> Session Class Initialized
DEBUG - 2013-11-14 16:50:09 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:50:09 --> Session routines successfully run
DEBUG - 2013-11-14 16:50:09 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:50:09 --> Controller Class Initialized
DEBUG - 2013-11-14 16:50:10 --> Model Class Initialized
DEBUG - 2013-11-14 16:50:10 --> Model Class Initialized
DEBUG - 2013-11-14 16:50:10 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:50:10 --> after session initialization................
INFO  - 2013-11-14 16:50:10 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 16:50:10 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 16:50:10 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 16:50:10 --> inside retrieving locations 
INFO  - 2013-11-14 16:50:10 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 16:50:10 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 16:50:10 --> Final output sent to browser
DEBUG - 2013-11-14 16:50:10 --> Total execution time: 0.0610
DEBUG - 2013-11-14 16:50:13 --> Config Class Initialized
DEBUG - 2013-11-14 16:50:13 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:50:13 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:50:13 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:50:13 --> URI Class Initialized
DEBUG - 2013-11-14 16:50:13 --> Router Class Initialized
DEBUG - 2013-11-14 16:50:13 --> Output Class Initialized
DEBUG - 2013-11-14 16:50:13 --> Security Class Initialized
DEBUG - 2013-11-14 16:50:13 --> Input Class Initialized
DEBUG - 2013-11-14 16:50:13 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:50:13 --> Language Class Initialized
DEBUG - 2013-11-14 16:50:13 --> Loader Class Initialized
DEBUG - 2013-11-14 16:50:13 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:50:13 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:50:13 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:50:13 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:50:13 --> Session Class Initialized
DEBUG - 2013-11-14 16:50:13 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:50:13 --> Session routines successfully run
DEBUG - 2013-11-14 16:50:13 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:50:13 --> Controller Class Initialized
DEBUG - 2013-11-14 16:50:13 --> Model Class Initialized
DEBUG - 2013-11-14 16:50:13 --> Model Class Initialized
DEBUG - 2013-11-14 16:50:13 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:50:13 --> after session initialization................
INFO  - 2013-11-14 16:50:13 --> inside the auto suggest page for pharmacy.................0
INFO  - 2013-11-14 16:50:13 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%k%' 
INFO  - 2013-11-14 16:50:13 --> after retrieving the data from db.................
INFO  - 2013-11-14 16:50:13 --> looping.................
INFO  - 2013-11-14 16:50:13 --> looping.................
INFO  - 2013-11-14 16:50:13 --> looping.................
INFO  - 2013-11-14 16:50:13 --> looping.................
INFO  - 2013-11-14 16:50:13 --> looping.................
INFO  - 2013-11-14 16:50:13 --> looping.................
DEBUG - 2013-11-14 16:50:13 --> Final output sent to browser
DEBUG - 2013-11-14 16:50:13 --> Total execution time: 0.0640
DEBUG - 2013-11-14 16:50:13 --> Config Class Initialized
DEBUG - 2013-11-14 16:50:13 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:50:13 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:50:13 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:50:13 --> URI Class Initialized
DEBUG - 2013-11-14 16:50:13 --> Router Class Initialized
DEBUG - 2013-11-14 16:50:13 --> Output Class Initialized
DEBUG - 2013-11-14 16:50:13 --> Security Class Initialized
DEBUG - 2013-11-14 16:50:13 --> Input Class Initialized
DEBUG - 2013-11-14 16:50:13 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:50:13 --> Language Class Initialized
DEBUG - 2013-11-14 16:50:13 --> Loader Class Initialized
DEBUG - 2013-11-14 16:50:13 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:50:13 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:50:13 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:50:13 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:50:13 --> Session Class Initialized
DEBUG - 2013-11-14 16:50:13 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:50:13 --> Session routines successfully run
DEBUG - 2013-11-14 16:50:13 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:50:13 --> Controller Class Initialized
DEBUG - 2013-11-14 16:50:13 --> Model Class Initialized
DEBUG - 2013-11-14 16:50:13 --> Model Class Initialized
DEBUG - 2013-11-14 16:50:13 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:50:13 --> after session initialization................
INFO  - 2013-11-14 16:50:13 --> inside the auto suggest page for pharmacy.................0
INFO  - 2013-11-14 16:50:13 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%ko%' 
INFO  - 2013-11-14 16:50:13 --> after retrieving the data from db.................
INFO  - 2013-11-14 16:50:13 --> looping.................
INFO  - 2013-11-14 16:50:13 --> looping.................
DEBUG - 2013-11-14 16:50:13 --> Final output sent to browser
DEBUG - 2013-11-14 16:50:13 --> Total execution time: 0.0650
DEBUG - 2013-11-14 16:50:13 --> Config Class Initialized
DEBUG - 2013-11-14 16:50:13 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:50:13 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:50:13 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:50:13 --> URI Class Initialized
DEBUG - 2013-11-14 16:50:13 --> Router Class Initialized
DEBUG - 2013-11-14 16:50:13 --> Output Class Initialized
DEBUG - 2013-11-14 16:50:13 --> Security Class Initialized
DEBUG - 2013-11-14 16:50:13 --> Input Class Initialized
DEBUG - 2013-11-14 16:50:13 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:50:13 --> Language Class Initialized
DEBUG - 2013-11-14 16:50:13 --> Loader Class Initialized
DEBUG - 2013-11-14 16:50:13 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:50:13 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:50:13 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:50:13 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:50:13 --> Session Class Initialized
DEBUG - 2013-11-14 16:50:13 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:50:13 --> Session routines successfully run
DEBUG - 2013-11-14 16:50:13 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:50:13 --> Controller Class Initialized
DEBUG - 2013-11-14 16:50:13 --> Model Class Initialized
DEBUG - 2013-11-14 16:50:13 --> Model Class Initialized
DEBUG - 2013-11-14 16:50:13 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:50:13 --> after session initialization................
INFO  - 2013-11-14 16:50:13 --> inside the auto suggest page for pharmacy.................0
INFO  - 2013-11-14 16:50:13 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%koo%' 
INFO  - 2013-11-14 16:50:13 --> after retrieving the data from db.................
INFO  - 2013-11-14 16:50:13 --> looping.................
INFO  - 2013-11-14 16:50:13 --> looping.................
DEBUG - 2013-11-14 16:50:13 --> Final output sent to browser
DEBUG - 2013-11-14 16:50:13 --> Total execution time: 0.0590
DEBUG - 2013-11-14 16:50:16 --> Config Class Initialized
DEBUG - 2013-11-14 16:50:16 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:50:16 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:50:16 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:50:16 --> URI Class Initialized
DEBUG - 2013-11-14 16:50:16 --> Router Class Initialized
DEBUG - 2013-11-14 16:50:16 --> Output Class Initialized
DEBUG - 2013-11-14 16:50:16 --> Security Class Initialized
DEBUG - 2013-11-14 16:50:16 --> Input Class Initialized
DEBUG - 2013-11-14 16:50:16 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:50:16 --> Language Class Initialized
DEBUG - 2013-11-14 16:50:16 --> Loader Class Initialized
DEBUG - 2013-11-14 16:50:16 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:50:16 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:50:16 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:50:16 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:50:16 --> Session Class Initialized
DEBUG - 2013-11-14 16:50:16 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:50:16 --> Session routines successfully run
DEBUG - 2013-11-14 16:50:16 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:50:16 --> Controller Class Initialized
DEBUG - 2013-11-14 16:50:16 --> Model Class Initialized
DEBUG - 2013-11-14 16:50:16 --> Model Class Initialized
DEBUG - 2013-11-14 16:50:16 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:50:16 --> after session initialization................
INFO  - 2013-11-14 16:50:16 --> inside retrieving pharmacy by location id 2
INFO  - 2013-11-14 16:50:16 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '2'
ORDER BY `p`.`name` asc
LIMIT 25
DEBUG - 2013-11-14 16:50:16 --> Final output sent to browser
DEBUG - 2013-11-14 16:50:16 --> Total execution time: 0.0470
DEBUG - 2013-11-14 16:50:20 --> Config Class Initialized
DEBUG - 2013-11-14 16:50:20 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:50:20 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:50:20 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:50:20 --> URI Class Initialized
DEBUG - 2013-11-14 16:50:20 --> Router Class Initialized
DEBUG - 2013-11-14 16:50:20 --> Output Class Initialized
DEBUG - 2013-11-14 16:50:20 --> Security Class Initialized
DEBUG - 2013-11-14 16:50:20 --> Input Class Initialized
DEBUG - 2013-11-14 16:50:20 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:50:20 --> Language Class Initialized
DEBUG - 2013-11-14 16:50:20 --> Loader Class Initialized
DEBUG - 2013-11-14 16:50:20 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:50:20 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:50:20 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:50:20 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:50:20 --> Session Class Initialized
DEBUG - 2013-11-14 16:50:20 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:50:20 --> Session routines successfully run
DEBUG - 2013-11-14 16:50:20 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:50:20 --> Controller Class Initialized
DEBUG - 2013-11-14 16:50:20 --> Model Class Initialized
DEBUG - 2013-11-14 16:50:20 --> Model Class Initialized
DEBUG - 2013-11-14 16:50:20 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:50:20 --> after session initialization................
INFO  - 2013-11-14 16:50:20 --> inside the auto suggest page for pharmacy.................0
INFO  - 2013-11-14 16:50:20 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%koon pharmac%' 
INFO  - 2013-11-14 16:50:20 --> after retrieving the data from db.................
INFO  - 2013-11-14 16:50:20 --> looping.................
INFO  - 2013-11-14 16:50:20 --> looping.................
DEBUG - 2013-11-14 16:50:20 --> Final output sent to browser
DEBUG - 2013-11-14 16:50:20 --> Total execution time: 0.0540
DEBUG - 2013-11-14 16:50:21 --> Config Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:50:21 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:50:21 --> URI Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Router Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Output Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Security Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Input Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:50:21 --> Language Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Loader Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:50:21 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:50:21 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:50:21 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Session Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:50:21 --> Session routines successfully run
DEBUG - 2013-11-14 16:50:21 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Controller Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Model Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Model Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:50:21 --> after session initialization................
INFO  - 2013-11-14 16:50:21 --> inside the auto suggest page for pharmacy.................0
INFO  - 2013-11-14 16:50:21 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%koon pharma%' 
INFO  - 2013-11-14 16:50:21 --> after retrieving the data from db.................
INFO  - 2013-11-14 16:50:21 --> looping.................
INFO  - 2013-11-14 16:50:21 --> looping.................
DEBUG - 2013-11-14 16:50:21 --> Final output sent to browser
DEBUG - 2013-11-14 16:50:21 --> Total execution time: 0.0440
DEBUG - 2013-11-14 16:50:21 --> Config Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:50:21 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:50:21 --> URI Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Router Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Output Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Security Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Input Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:50:21 --> Language Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Loader Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:50:21 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:50:21 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:50:21 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Session Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:50:21 --> Session routines successfully run
DEBUG - 2013-11-14 16:50:21 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Controller Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Model Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Model Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:50:21 --> after session initialization................
INFO  - 2013-11-14 16:50:21 --> inside the auto suggest page for pharmacy.................0
INFO  - 2013-11-14 16:50:21 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%koon pharm%' 
INFO  - 2013-11-14 16:50:21 --> after retrieving the data from db.................
INFO  - 2013-11-14 16:50:21 --> looping.................
INFO  - 2013-11-14 16:50:21 --> looping.................
DEBUG - 2013-11-14 16:50:21 --> Final output sent to browser
DEBUG - 2013-11-14 16:50:21 --> Total execution time: 0.0430
DEBUG - 2013-11-14 16:50:21 --> Config Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:50:21 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:50:21 --> URI Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Router Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Output Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Security Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Input Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:50:21 --> Language Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Loader Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:50:21 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:50:21 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:50:21 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Session Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:50:21 --> Session routines successfully run
DEBUG - 2013-11-14 16:50:21 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Controller Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Model Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Model Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:50:21 --> after session initialization................
INFO  - 2013-11-14 16:50:21 --> inside the auto suggest page for pharmacy.................0
INFO  - 2013-11-14 16:50:21 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%koon phar%' 
INFO  - 2013-11-14 16:50:21 --> after retrieving the data from db.................
INFO  - 2013-11-14 16:50:21 --> looping.................
INFO  - 2013-11-14 16:50:21 --> looping.................
DEBUG - 2013-11-14 16:50:21 --> Final output sent to browser
DEBUG - 2013-11-14 16:50:21 --> Total execution time: 0.0420
DEBUG - 2013-11-14 16:50:21 --> Config Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:50:21 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:50:21 --> URI Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Router Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Output Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Security Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Input Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:50:21 --> Language Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Loader Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:50:21 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:50:21 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:50:21 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Session Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:50:21 --> Session routines successfully run
DEBUG - 2013-11-14 16:50:21 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Controller Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Model Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Model Class Initialized
DEBUG - 2013-11-14 16:50:21 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:50:21 --> after session initialization................
INFO  - 2013-11-14 16:50:21 --> inside the auto suggest page for pharmacy.................0
INFO  - 2013-11-14 16:50:21 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%koon pha%' 
INFO  - 2013-11-14 16:50:21 --> after retrieving the data from db.................
INFO  - 2013-11-14 16:50:21 --> looping.................
INFO  - 2013-11-14 16:50:21 --> looping.................
DEBUG - 2013-11-14 16:50:21 --> Final output sent to browser
DEBUG - 2013-11-14 16:50:21 --> Total execution time: 0.0590
DEBUG - 2013-11-14 16:51:02 --> Config Class Initialized
DEBUG - 2013-11-14 16:51:02 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:51:02 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:51:02 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:51:02 --> URI Class Initialized
DEBUG - 2013-11-14 16:51:02 --> Router Class Initialized
DEBUG - 2013-11-14 16:51:02 --> Output Class Initialized
DEBUG - 2013-11-14 16:51:02 --> Security Class Initialized
DEBUG - 2013-11-14 16:51:02 --> Input Class Initialized
DEBUG - 2013-11-14 16:51:02 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:51:02 --> Language Class Initialized
DEBUG - 2013-11-14 16:51:02 --> Loader Class Initialized
DEBUG - 2013-11-14 16:51:02 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:51:02 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:51:02 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:51:02 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:51:02 --> Session Class Initialized
DEBUG - 2013-11-14 16:51:02 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:51:02 --> Session routines successfully run
DEBUG - 2013-11-14 16:51:02 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:51:02 --> Controller Class Initialized
DEBUG - 2013-11-14 16:51:02 --> Model Class Initialized
DEBUG - 2013-11-14 16:51:02 --> Model Class Initialized
DEBUG - 2013-11-14 16:51:02 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:51:02 --> after session initialization................
DEBUG - 2013-11-14 16:51:02 --> Config Class Initialized
DEBUG - 2013-11-14 16:51:02 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:51:02 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:51:02 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:51:02 --> URI Class Initialized
DEBUG - 2013-11-14 16:51:02 --> Router Class Initialized
DEBUG - 2013-11-14 16:51:02 --> No URI present. Default controller set.
DEBUG - 2013-11-14 16:51:02 --> Output Class Initialized
DEBUG - 2013-11-14 16:51:02 --> Security Class Initialized
DEBUG - 2013-11-14 16:51:02 --> Input Class Initialized
DEBUG - 2013-11-14 16:51:02 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:51:02 --> Language Class Initialized
DEBUG - 2013-11-14 16:51:02 --> Loader Class Initialized
DEBUG - 2013-11-14 16:51:02 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:51:02 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:51:02 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:51:02 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:51:02 --> Session Class Initialized
DEBUG - 2013-11-14 16:51:02 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:51:02 --> A session cookie was not found.
DEBUG - 2013-11-14 16:51:02 --> Session routines successfully run
DEBUG - 2013-11-14 16:51:02 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:51:02 --> Controller Class Initialized
INFO  - 2013-11-14 16:51:02 --> the form message==>
INFO  - 2013-11-14 16:51:02 --> The session id is ========>a5c6f651ddca1cdea8be61ae6592af0f and the member id is =======>
INFO  - 2013-11-14 16:51:02 --> after the retrieving session list.................//////////
DEBUG - 2013-11-14 16:51:02 --> File loaded: ../pharmaray-application/views/index.php
DEBUG - 2013-11-14 16:51:02 --> Final output sent to browser
DEBUG - 2013-11-14 16:51:02 --> Total execution time: 0.0400
DEBUG - 2013-11-14 16:51:09 --> Config Class Initialized
DEBUG - 2013-11-14 16:51:09 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:51:09 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:51:09 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:51:09 --> URI Class Initialized
DEBUG - 2013-11-14 16:51:09 --> Router Class Initialized
DEBUG - 2013-11-14 16:51:09 --> Output Class Initialized
DEBUG - 2013-11-14 16:51:09 --> Security Class Initialized
DEBUG - 2013-11-14 16:51:09 --> Input Class Initialized
DEBUG - 2013-11-14 16:51:09 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:51:09 --> Language Class Initialized
DEBUG - 2013-11-14 16:51:09 --> Loader Class Initialized
DEBUG - 2013-11-14 16:51:09 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:51:09 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:51:09 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:51:09 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:51:09 --> Session Class Initialized
DEBUG - 2013-11-14 16:51:09 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:51:09 --> Session routines successfully run
DEBUG - 2013-11-14 16:51:09 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:51:09 --> Controller Class Initialized
DEBUG - 2013-11-14 16:51:09 --> Model Class Initialized
DEBUG - 2013-11-14 16:51:09 --> Model Class Initialized
DEBUG - 2013-11-14 16:51:09 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:51:09 --> after session initialization................
INFO  - 2013-11-14 16:51:09 --> inside rays login auth.............
DEBUG - 2013-11-14 16:51:09 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2013-11-14 16:51:09 --> XSS Filtering completed
DEBUG - 2013-11-14 16:51:09 --> XSS Filtering completed
INFO  - 2013-11-14 16:51:09 --> before getting the relation of member............6
INFO  - 2013-11-14 16:51:09 --> registration complete and username set on userpage.................Elvis
INFO  - 2013-11-14 16:51:09 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-14 16:51:09 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-11-14 16:51:09 --> inside retrieving vacancy for member
INFO  - 2013-11-14 16:51:09 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-11-14 16:51:09 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-14 16:51:09 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-11-14 16:51:09 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-11-14 16:51:09 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-14 16:51:09 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-14 16:51:09 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-11-14 16:51:09 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-11-14 16:51:09 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-11-14 16:51:09 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-11-14 16:51:09 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-11-14 16:51:09 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-11-14 16:51:09 --> Final output sent to browser
DEBUG - 2013-11-14 16:51:09 --> Total execution time: 0.0760
DEBUG - 2013-11-14 16:51:09 --> Config Class Initialized
DEBUG - 2013-11-14 16:51:09 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:51:09 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:51:09 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:51:09 --> URI Class Initialized
DEBUG - 2013-11-14 16:51:09 --> Router Class Initialized
DEBUG - 2013-11-14 16:51:09 --> Output Class Initialized
DEBUG - 2013-11-14 16:51:09 --> Security Class Initialized
DEBUG - 2013-11-14 16:51:09 --> Input Class Initialized
DEBUG - 2013-11-14 16:51:09 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:51:09 --> Language Class Initialized
DEBUG - 2013-11-14 16:51:09 --> Loader Class Initialized
DEBUG - 2013-11-14 16:51:09 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:51:09 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:51:09 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:51:09 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:51:09 --> Session Class Initialized
DEBUG - 2013-11-14 16:51:09 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:51:09 --> Session routines successfully run
DEBUG - 2013-11-14 16:51:09 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:51:09 --> Controller Class Initialized
DEBUG - 2013-11-14 16:51:09 --> Model Class Initialized
DEBUG - 2013-11-14 16:51:09 --> Model Class Initialized
DEBUG - 2013-11-14 16:51:09 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:51:09 --> after session initialization................
ERROR - 2013-11-14 16:51:09 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-14 16:51:09 --> Config Class Initialized
DEBUG - 2013-11-14 16:51:09 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:51:09 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:51:09 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:51:09 --> URI Class Initialized
DEBUG - 2013-11-14 16:51:09 --> Router Class Initialized
ERROR - 2013-11-14 16:51:09 --> 404 Page Not Found --> css
DEBUG - 2013-11-14 16:51:11 --> Config Class Initialized
DEBUG - 2013-11-14 16:51:11 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:51:11 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:51:11 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:51:11 --> URI Class Initialized
DEBUG - 2013-11-14 16:51:11 --> Router Class Initialized
DEBUG - 2013-11-14 16:51:11 --> Output Class Initialized
DEBUG - 2013-11-14 16:51:11 --> Security Class Initialized
DEBUG - 2013-11-14 16:51:11 --> Input Class Initialized
DEBUG - 2013-11-14 16:51:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:51:11 --> Language Class Initialized
DEBUG - 2013-11-14 16:51:11 --> Loader Class Initialized
DEBUG - 2013-11-14 16:51:11 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:51:11 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:51:11 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:51:11 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:51:11 --> Session Class Initialized
DEBUG - 2013-11-14 16:51:11 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:51:11 --> Session routines successfully run
DEBUG - 2013-11-14 16:51:11 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:51:11 --> Controller Class Initialized
DEBUG - 2013-11-14 16:51:11 --> Model Class Initialized
DEBUG - 2013-11-14 16:51:11 --> Model Class Initialized
DEBUG - 2013-11-14 16:51:11 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:51:11 --> after session initialization................
INFO  - 2013-11-14 16:51:11 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 16:51:11 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 16:51:11 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 16:51:11 --> inside retrieving locations 
INFO  - 2013-11-14 16:51:11 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 16:51:11 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 16:51:11 --> Final output sent to browser
DEBUG - 2013-11-14 16:51:11 --> Total execution time: 0.0590
DEBUG - 2013-11-14 16:51:15 --> Config Class Initialized
DEBUG - 2013-11-14 16:51:15 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:51:15 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:51:15 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:51:15 --> URI Class Initialized
DEBUG - 2013-11-14 16:51:15 --> Router Class Initialized
DEBUG - 2013-11-14 16:51:15 --> Output Class Initialized
DEBUG - 2013-11-14 16:51:15 --> Security Class Initialized
DEBUG - 2013-11-14 16:51:15 --> Input Class Initialized
DEBUG - 2013-11-14 16:51:15 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:51:15 --> Language Class Initialized
DEBUG - 2013-11-14 16:51:15 --> Loader Class Initialized
DEBUG - 2013-11-14 16:51:15 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:51:15 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:51:15 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:51:15 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:51:15 --> Session Class Initialized
DEBUG - 2013-11-14 16:51:15 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:51:15 --> Session routines successfully run
DEBUG - 2013-11-14 16:51:15 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:51:15 --> Controller Class Initialized
DEBUG - 2013-11-14 16:51:15 --> Model Class Initialized
DEBUG - 2013-11-14 16:51:15 --> Model Class Initialized
DEBUG - 2013-11-14 16:51:15 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:51:15 --> after session initialization................
INFO  - 2013-11-14 16:51:15 --> inside the auto suggest page for pharmacy.................0
INFO  - 2013-11-14 16:51:15 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%m%' 
INFO  - 2013-11-14 16:51:15 --> after retrieving the data from db.................
INFO  - 2013-11-14 16:51:15 --> looping.................
INFO  - 2013-11-14 16:51:15 --> looping.................
INFO  - 2013-11-14 16:51:15 --> looping.................
INFO  - 2013-11-14 16:51:15 --> looping.................
INFO  - 2013-11-14 16:51:15 --> looping.................
INFO  - 2013-11-14 16:51:15 --> looping.................
INFO  - 2013-11-14 16:51:15 --> looping.................
INFO  - 2013-11-14 16:51:15 --> looping.................
INFO  - 2013-11-14 16:51:15 --> looping.................
INFO  - 2013-11-14 16:51:15 --> looping.................
INFO  - 2013-11-14 16:51:15 --> looping.................
INFO  - 2013-11-14 16:51:15 --> looping.................
INFO  - 2013-11-14 16:51:15 --> looping.................
INFO  - 2013-11-14 16:51:15 --> looping.................
INFO  - 2013-11-14 16:51:15 --> looping.................
INFO  - 2013-11-14 16:51:15 --> looping.................
DEBUG - 2013-11-14 16:51:15 --> Final output sent to browser
DEBUG - 2013-11-14 16:51:15 --> Total execution time: 0.0540
DEBUG - 2013-11-14 16:51:17 --> Config Class Initialized
DEBUG - 2013-11-14 16:51:17 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:51:17 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:51:17 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:51:17 --> URI Class Initialized
DEBUG - 2013-11-14 16:51:17 --> Router Class Initialized
DEBUG - 2013-11-14 16:51:17 --> Output Class Initialized
DEBUG - 2013-11-14 16:51:17 --> Security Class Initialized
DEBUG - 2013-11-14 16:51:17 --> Input Class Initialized
DEBUG - 2013-11-14 16:51:17 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:51:17 --> Language Class Initialized
DEBUG - 2013-11-14 16:51:17 --> Loader Class Initialized
DEBUG - 2013-11-14 16:51:17 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:51:17 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:51:17 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:51:17 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:51:17 --> Session Class Initialized
DEBUG - 2013-11-14 16:51:17 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:51:17 --> Session routines successfully run
DEBUG - 2013-11-14 16:51:17 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:51:17 --> Controller Class Initialized
DEBUG - 2013-11-14 16:51:17 --> Model Class Initialized
DEBUG - 2013-11-14 16:51:17 --> Model Class Initialized
DEBUG - 2013-11-14 16:51:17 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:51:17 --> after session initialization................
INFO  - 2013-11-14 16:51:17 --> inside the auto suggest page for pharmacy.................0
INFO  - 2013-11-14 16:51:17 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%med spacee%' 
INFO  - 2013-11-14 16:51:17 --> after retrieving the data from db.................
DEBUG - 2013-11-14 16:51:17 --> Final output sent to browser
DEBUG - 2013-11-14 16:51:17 --> Total execution time: 0.0540
DEBUG - 2013-11-14 16:51:17 --> Config Class Initialized
DEBUG - 2013-11-14 16:51:17 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:51:17 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:51:17 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:51:17 --> URI Class Initialized
DEBUG - 2013-11-14 16:51:17 --> Router Class Initialized
DEBUG - 2013-11-14 16:51:17 --> Output Class Initialized
DEBUG - 2013-11-14 16:51:17 --> Security Class Initialized
DEBUG - 2013-11-14 16:51:17 --> Input Class Initialized
DEBUG - 2013-11-14 16:51:17 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:51:17 --> Language Class Initialized
DEBUG - 2013-11-14 16:51:17 --> Loader Class Initialized
DEBUG - 2013-11-14 16:51:17 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:51:17 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:51:17 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:51:17 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:51:17 --> Session Class Initialized
DEBUG - 2013-11-14 16:51:17 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:51:17 --> Session routines successfully run
DEBUG - 2013-11-14 16:51:17 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:51:17 --> Controller Class Initialized
DEBUG - 2013-11-14 16:51:17 --> Model Class Initialized
DEBUG - 2013-11-14 16:51:17 --> Model Class Initialized
DEBUG - 2013-11-14 16:51:17 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:51:17 --> after session initialization................
INFO  - 2013-11-14 16:51:17 --> inside the auto suggest page for pharmacy.................0
INFO  - 2013-11-14 16:51:17 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%med spaceed%' 
INFO  - 2013-11-14 16:51:17 --> after retrieving the data from db.................
DEBUG - 2013-11-14 16:51:17 --> Final output sent to browser
DEBUG - 2013-11-14 16:51:17 --> Total execution time: 0.0560
DEBUG - 2013-11-14 16:51:19 --> Config Class Initialized
DEBUG - 2013-11-14 16:51:19 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:51:19 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:51:19 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:51:19 --> URI Class Initialized
DEBUG - 2013-11-14 16:51:19 --> Router Class Initialized
DEBUG - 2013-11-14 16:51:19 --> Output Class Initialized
DEBUG - 2013-11-14 16:51:19 --> Security Class Initialized
DEBUG - 2013-11-14 16:51:19 --> Input Class Initialized
DEBUG - 2013-11-14 16:51:19 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:51:19 --> Language Class Initialized
DEBUG - 2013-11-14 16:51:19 --> Loader Class Initialized
DEBUG - 2013-11-14 16:51:19 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:51:19 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:51:19 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:51:19 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:51:19 --> Session Class Initialized
DEBUG - 2013-11-14 16:51:19 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:51:19 --> Session routines successfully run
DEBUG - 2013-11-14 16:51:19 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:51:19 --> Controller Class Initialized
DEBUG - 2013-11-14 16:51:19 --> Model Class Initialized
DEBUG - 2013-11-14 16:51:19 --> Model Class Initialized
DEBUG - 2013-11-14 16:51:19 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:51:19 --> after session initialization................
INFO  - 2013-11-14 16:51:19 --> inside the auto suggest page for pharmacy.................0
INFO  - 2013-11-14 16:51:19 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%me%' 
INFO  - 2013-11-14 16:51:19 --> after retrieving the data from db.................
INFO  - 2013-11-14 16:51:19 --> looping.................
INFO  - 2013-11-14 16:51:19 --> looping.................
INFO  - 2013-11-14 16:51:19 --> looping.................
INFO  - 2013-11-14 16:51:19 --> looping.................
DEBUG - 2013-11-14 16:51:19 --> Final output sent to browser
DEBUG - 2013-11-14 16:51:19 --> Total execution time: 0.0420
DEBUG - 2013-11-14 16:51:25 --> Config Class Initialized
DEBUG - 2013-11-14 16:51:25 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:51:25 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:51:25 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:51:25 --> URI Class Initialized
DEBUG - 2013-11-14 16:51:25 --> Router Class Initialized
DEBUG - 2013-11-14 16:51:25 --> Output Class Initialized
DEBUG - 2013-11-14 16:51:25 --> Security Class Initialized
DEBUG - 2013-11-14 16:51:25 --> Input Class Initialized
DEBUG - 2013-11-14 16:51:25 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:51:25 --> Language Class Initialized
DEBUG - 2013-11-14 16:51:25 --> Loader Class Initialized
DEBUG - 2013-11-14 16:51:25 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:51:25 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:51:25 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:51:25 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:51:25 --> Session Class Initialized
DEBUG - 2013-11-14 16:51:25 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:51:25 --> Session routines successfully run
DEBUG - 2013-11-14 16:51:25 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:51:25 --> Controller Class Initialized
DEBUG - 2013-11-14 16:51:25 --> Model Class Initialized
DEBUG - 2013-11-14 16:51:25 --> Model Class Initialized
DEBUG - 2013-11-14 16:51:25 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:51:25 --> after session initialization................
INFO  - 2013-11-14 16:51:25 --> inside retrieving pharmacy by location id 1
INFO  - 2013-11-14 16:51:25 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '1'
ORDER BY `p`.`name` asc
LIMIT 25
DEBUG - 2013-11-14 16:51:25 --> Final output sent to browser
DEBUG - 2013-11-14 16:51:25 --> Total execution time: 0.0460
DEBUG - 2013-11-14 16:51:31 --> Config Class Initialized
DEBUG - 2013-11-14 16:51:31 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:51:31 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:51:31 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:51:31 --> URI Class Initialized
DEBUG - 2013-11-14 16:51:31 --> Router Class Initialized
DEBUG - 2013-11-14 16:51:31 --> Output Class Initialized
DEBUG - 2013-11-14 16:51:31 --> Security Class Initialized
DEBUG - 2013-11-14 16:51:31 --> Input Class Initialized
DEBUG - 2013-11-14 16:51:31 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:51:31 --> Language Class Initialized
DEBUG - 2013-11-14 16:51:31 --> Loader Class Initialized
DEBUG - 2013-11-14 16:51:31 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:51:31 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:51:31 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:51:31 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:51:31 --> Session Class Initialized
DEBUG - 2013-11-14 16:51:31 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:51:31 --> Session routines successfully run
DEBUG - 2013-11-14 16:51:31 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:51:31 --> Controller Class Initialized
DEBUG - 2013-11-14 16:51:31 --> Model Class Initialized
DEBUG - 2013-11-14 16:51:31 --> Model Class Initialized
DEBUG - 2013-11-14 16:51:31 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:51:31 --> after session initialization................
INFO  - 2013-11-14 16:51:31 --> inside the auto suggest page for pharmacy.................0
INFO  - 2013-11-14 16:51:31 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%m%' 
INFO  - 2013-11-14 16:51:31 --> after retrieving the data from db.................
INFO  - 2013-11-14 16:51:31 --> looping.................
INFO  - 2013-11-14 16:51:31 --> looping.................
INFO  - 2013-11-14 16:51:31 --> looping.................
INFO  - 2013-11-14 16:51:31 --> looping.................
INFO  - 2013-11-14 16:51:31 --> looping.................
INFO  - 2013-11-14 16:51:31 --> looping.................
INFO  - 2013-11-14 16:51:31 --> looping.................
INFO  - 2013-11-14 16:51:31 --> looping.................
INFO  - 2013-11-14 16:51:31 --> looping.................
INFO  - 2013-11-14 16:51:31 --> looping.................
INFO  - 2013-11-14 16:51:31 --> looping.................
INFO  - 2013-11-14 16:51:31 --> looping.................
INFO  - 2013-11-14 16:51:31 --> looping.................
INFO  - 2013-11-14 16:51:31 --> looping.................
INFO  - 2013-11-14 16:51:31 --> looping.................
INFO  - 2013-11-14 16:51:31 --> looping.................
DEBUG - 2013-11-14 16:51:31 --> Final output sent to browser
DEBUG - 2013-11-14 16:51:31 --> Total execution time: 0.0540
DEBUG - 2013-11-14 16:51:33 --> Config Class Initialized
DEBUG - 2013-11-14 16:51:33 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:51:33 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:51:33 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:51:33 --> URI Class Initialized
DEBUG - 2013-11-14 16:51:33 --> Router Class Initialized
DEBUG - 2013-11-14 16:51:33 --> Output Class Initialized
DEBUG - 2013-11-14 16:51:33 --> Security Class Initialized
DEBUG - 2013-11-14 16:51:33 --> Input Class Initialized
DEBUG - 2013-11-14 16:51:33 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:51:33 --> Language Class Initialized
DEBUG - 2013-11-14 16:51:33 --> Loader Class Initialized
DEBUG - 2013-11-14 16:51:33 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:51:33 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:51:33 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:51:33 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:51:33 --> Session Class Initialized
DEBUG - 2013-11-14 16:51:33 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:51:33 --> Session routines successfully run
DEBUG - 2013-11-14 16:51:33 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:51:33 --> Controller Class Initialized
DEBUG - 2013-11-14 16:51:33 --> Model Class Initialized
DEBUG - 2013-11-14 16:51:33 --> Model Class Initialized
DEBUG - 2013-11-14 16:51:33 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:51:33 --> after session initialization................
INFO  - 2013-11-14 16:51:33 --> inside the auto suggest page for pharmacy.................0
INFO  - 2013-11-14 16:51:33 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%me%' 
INFO  - 2013-11-14 16:51:33 --> after retrieving the data from db.................
INFO  - 2013-11-14 16:51:33 --> looping.................
INFO  - 2013-11-14 16:51:33 --> looping.................
INFO  - 2013-11-14 16:51:33 --> looping.................
INFO  - 2013-11-14 16:51:33 --> looping.................
DEBUG - 2013-11-14 16:51:33 --> Final output sent to browser
DEBUG - 2013-11-14 16:51:33 --> Total execution time: 0.0530
DEBUG - 2013-11-14 16:51:33 --> Config Class Initialized
DEBUG - 2013-11-14 16:51:33 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:51:33 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:51:33 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:51:33 --> URI Class Initialized
DEBUG - 2013-11-14 16:51:33 --> Router Class Initialized
DEBUG - 2013-11-14 16:51:33 --> Output Class Initialized
DEBUG - 2013-11-14 16:51:33 --> Security Class Initialized
DEBUG - 2013-11-14 16:51:33 --> Input Class Initialized
DEBUG - 2013-11-14 16:51:33 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:51:33 --> Language Class Initialized
DEBUG - 2013-11-14 16:51:33 --> Loader Class Initialized
DEBUG - 2013-11-14 16:51:33 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:51:33 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:51:33 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:51:33 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:51:33 --> Session Class Initialized
DEBUG - 2013-11-14 16:51:33 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:51:33 --> Session routines successfully run
DEBUG - 2013-11-14 16:51:33 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:51:33 --> Controller Class Initialized
DEBUG - 2013-11-14 16:51:33 --> Model Class Initialized
DEBUG - 2013-11-14 16:51:33 --> Model Class Initialized
DEBUG - 2013-11-14 16:51:33 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:51:33 --> after session initialization................
INFO  - 2013-11-14 16:51:33 --> inside the auto suggest page for pharmacy.................0
INFO  - 2013-11-14 16:51:33 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%med%' 
INFO  - 2013-11-14 16:51:33 --> after retrieving the data from db.................
INFO  - 2013-11-14 16:51:33 --> looping.................
INFO  - 2013-11-14 16:51:33 --> looping.................
DEBUG - 2013-11-14 16:51:33 --> Final output sent to browser
DEBUG - 2013-11-14 16:51:33 --> Total execution time: 0.0470
DEBUG - 2013-11-14 16:52:07 --> Config Class Initialized
DEBUG - 2013-11-14 16:52:07 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:52:07 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:52:07 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:52:07 --> URI Class Initialized
DEBUG - 2013-11-14 16:52:07 --> Router Class Initialized
DEBUG - 2013-11-14 16:52:07 --> Output Class Initialized
DEBUG - 2013-11-14 16:52:07 --> Security Class Initialized
DEBUG - 2013-11-14 16:52:07 --> Input Class Initialized
DEBUG - 2013-11-14 16:52:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:52:07 --> Language Class Initialized
DEBUG - 2013-11-14 16:52:07 --> Loader Class Initialized
DEBUG - 2013-11-14 16:52:07 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:52:07 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:52:07 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:52:07 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:52:07 --> Session Class Initialized
DEBUG - 2013-11-14 16:52:07 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:52:07 --> Session routines successfully run
DEBUG - 2013-11-14 16:52:07 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:52:07 --> Controller Class Initialized
DEBUG - 2013-11-14 16:52:07 --> Model Class Initialized
DEBUG - 2013-11-14 16:52:07 --> Model Class Initialized
DEBUG - 2013-11-14 16:52:07 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:52:07 --> after session initialization................
INFO  - 2013-11-14 16:52:07 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 16:52:07 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 16:52:07 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 16:52:07 --> inside retrieving locations 
INFO  - 2013-11-14 16:52:07 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 16:52:07 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 16:52:07 --> Final output sent to browser
DEBUG - 2013-11-14 16:52:07 --> Total execution time: 0.0560
DEBUG - 2013-11-14 16:52:11 --> Config Class Initialized
DEBUG - 2013-11-14 16:52:11 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:52:11 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:52:11 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:52:11 --> URI Class Initialized
DEBUG - 2013-11-14 16:52:11 --> Router Class Initialized
DEBUG - 2013-11-14 16:52:11 --> Output Class Initialized
DEBUG - 2013-11-14 16:52:11 --> Security Class Initialized
DEBUG - 2013-11-14 16:52:11 --> Input Class Initialized
DEBUG - 2013-11-14 16:52:11 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:52:11 --> Language Class Initialized
DEBUG - 2013-11-14 16:52:11 --> Loader Class Initialized
DEBUG - 2013-11-14 16:52:11 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:52:11 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:52:11 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:52:11 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:52:11 --> Session Class Initialized
DEBUG - 2013-11-14 16:52:11 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:52:11 --> Session routines successfully run
DEBUG - 2013-11-14 16:52:11 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:52:11 --> Controller Class Initialized
DEBUG - 2013-11-14 16:52:11 --> Model Class Initialized
DEBUG - 2013-11-14 16:52:11 --> Model Class Initialized
DEBUG - 2013-11-14 16:52:11 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:52:11 --> after session initialization................
INFO  - 2013-11-14 16:52:11 --> inside the auto suggest page for pharmacy.................0
INFO  - 2013-11-14 16:52:11 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%k%' 
INFO  - 2013-11-14 16:52:11 --> after retrieving the data from db.................
INFO  - 2013-11-14 16:52:11 --> looping.................
INFO  - 2013-11-14 16:52:11 --> looping.................
INFO  - 2013-11-14 16:52:11 --> looping.................
INFO  - 2013-11-14 16:52:11 --> looping.................
INFO  - 2013-11-14 16:52:11 --> looping.................
INFO  - 2013-11-14 16:52:11 --> looping.................
DEBUG - 2013-11-14 16:52:11 --> Final output sent to browser
DEBUG - 2013-11-14 16:52:11 --> Total execution time: 0.0430
DEBUG - 2013-11-14 16:52:17 --> Config Class Initialized
DEBUG - 2013-11-14 16:52:17 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:52:17 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:52:17 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:52:17 --> URI Class Initialized
DEBUG - 2013-11-14 16:52:17 --> Router Class Initialized
DEBUG - 2013-11-14 16:52:17 --> Output Class Initialized
DEBUG - 2013-11-14 16:52:17 --> Security Class Initialized
DEBUG - 2013-11-14 16:52:17 --> Input Class Initialized
DEBUG - 2013-11-14 16:52:17 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:52:17 --> Language Class Initialized
DEBUG - 2013-11-14 16:52:17 --> Loader Class Initialized
DEBUG - 2013-11-14 16:52:17 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:52:17 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:52:17 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:52:17 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:52:17 --> Session Class Initialized
DEBUG - 2013-11-14 16:52:17 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:52:17 --> Session routines successfully run
DEBUG - 2013-11-14 16:52:17 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:52:17 --> Controller Class Initialized
DEBUG - 2013-11-14 16:52:17 --> Model Class Initialized
DEBUG - 2013-11-14 16:52:17 --> Model Class Initialized
DEBUG - 2013-11-14 16:52:17 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:52:17 --> after session initialization................
INFO  - 2013-11-14 16:52:17 --> inside the auto suggest page for pharmacy.................0
INFO  - 2013-11-14 16:52:17 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%k%' 
INFO  - 2013-11-14 16:52:17 --> after retrieving the data from db.................
INFO  - 2013-11-14 16:52:17 --> looping.................
INFO  - 2013-11-14 16:52:17 --> looping.................
INFO  - 2013-11-14 16:52:17 --> looping.................
INFO  - 2013-11-14 16:52:17 --> looping.................
INFO  - 2013-11-14 16:52:17 --> looping.................
INFO  - 2013-11-14 16:52:17 --> looping.................
DEBUG - 2013-11-14 16:52:17 --> Final output sent to browser
DEBUG - 2013-11-14 16:52:17 --> Total execution time: 0.0520
DEBUG - 2013-11-14 16:52:17 --> Config Class Initialized
DEBUG - 2013-11-14 16:52:17 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:52:17 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:52:17 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:52:17 --> URI Class Initialized
DEBUG - 2013-11-14 16:52:17 --> Router Class Initialized
DEBUG - 2013-11-14 16:52:17 --> Output Class Initialized
DEBUG - 2013-11-14 16:52:17 --> Security Class Initialized
DEBUG - 2013-11-14 16:52:17 --> Input Class Initialized
DEBUG - 2013-11-14 16:52:17 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:52:17 --> Language Class Initialized
DEBUG - 2013-11-14 16:52:17 --> Loader Class Initialized
DEBUG - 2013-11-14 16:52:17 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:52:17 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:52:17 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:52:17 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:52:17 --> Session Class Initialized
DEBUG - 2013-11-14 16:52:17 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:52:17 --> Session routines successfully run
DEBUG - 2013-11-14 16:52:17 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:52:17 --> Controller Class Initialized
DEBUG - 2013-11-14 16:52:17 --> Model Class Initialized
DEBUG - 2013-11-14 16:52:17 --> Model Class Initialized
DEBUG - 2013-11-14 16:52:17 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:52:17 --> after session initialization................
INFO  - 2013-11-14 16:52:17 --> inside the auto suggest page for pharmacy.................0
INFO  - 2013-11-14 16:52:17 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%ko%' 
INFO  - 2013-11-14 16:52:17 --> after retrieving the data from db.................
INFO  - 2013-11-14 16:52:17 --> looping.................
INFO  - 2013-11-14 16:52:17 --> looping.................
DEBUG - 2013-11-14 16:52:17 --> Final output sent to browser
DEBUG - 2013-11-14 16:52:17 --> Total execution time: 0.0570
DEBUG - 2013-11-14 16:52:18 --> Config Class Initialized
DEBUG - 2013-11-14 16:52:18 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:52:18 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:52:18 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:52:18 --> URI Class Initialized
DEBUG - 2013-11-14 16:52:18 --> Router Class Initialized
DEBUG - 2013-11-14 16:52:18 --> Output Class Initialized
DEBUG - 2013-11-14 16:52:18 --> Security Class Initialized
DEBUG - 2013-11-14 16:52:18 --> Input Class Initialized
DEBUG - 2013-11-14 16:52:18 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:52:18 --> Language Class Initialized
DEBUG - 2013-11-14 16:52:18 --> Loader Class Initialized
DEBUG - 2013-11-14 16:52:18 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:52:18 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:52:18 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:52:18 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:52:18 --> Session Class Initialized
DEBUG - 2013-11-14 16:52:18 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:52:18 --> Session routines successfully run
DEBUG - 2013-11-14 16:52:18 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:52:18 --> Controller Class Initialized
DEBUG - 2013-11-14 16:52:18 --> Model Class Initialized
DEBUG - 2013-11-14 16:52:18 --> Model Class Initialized
DEBUG - 2013-11-14 16:52:18 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:52:18 --> after session initialization................
INFO  - 2013-11-14 16:52:18 --> inside the auto suggest page for pharmacy.................0
INFO  - 2013-11-14 16:52:18 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%koo%' 
INFO  - 2013-11-14 16:52:18 --> after retrieving the data from db.................
INFO  - 2013-11-14 16:52:18 --> looping.................
INFO  - 2013-11-14 16:52:18 --> looping.................
DEBUG - 2013-11-14 16:52:18 --> Final output sent to browser
DEBUG - 2013-11-14 16:52:18 --> Total execution time: 0.0570
DEBUG - 2013-11-14 16:52:19 --> Config Class Initialized
DEBUG - 2013-11-14 16:52:19 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:52:19 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:52:19 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:52:19 --> URI Class Initialized
DEBUG - 2013-11-14 16:52:19 --> Router Class Initialized
DEBUG - 2013-11-14 16:52:19 --> Output Class Initialized
DEBUG - 2013-11-14 16:52:19 --> Security Class Initialized
DEBUG - 2013-11-14 16:52:19 --> Input Class Initialized
DEBUG - 2013-11-14 16:52:19 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:52:19 --> Language Class Initialized
DEBUG - 2013-11-14 16:52:19 --> Loader Class Initialized
DEBUG - 2013-11-14 16:52:19 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:52:19 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:52:19 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:52:19 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:52:19 --> Session Class Initialized
DEBUG - 2013-11-14 16:52:19 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:52:19 --> Session routines successfully run
DEBUG - 2013-11-14 16:52:19 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:52:19 --> Controller Class Initialized
DEBUG - 2013-11-14 16:52:19 --> Model Class Initialized
DEBUG - 2013-11-14 16:52:19 --> Model Class Initialized
DEBUG - 2013-11-14 16:52:19 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:52:19 --> after session initialization................
INFO  - 2013-11-14 16:52:19 --> inside the auto suggest page for pharmacy.................0
INFO  - 2013-11-14 16:52:19 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%koon%' 
INFO  - 2013-11-14 16:52:19 --> after retrieving the data from db.................
INFO  - 2013-11-14 16:52:19 --> looping.................
INFO  - 2013-11-14 16:52:19 --> looping.................
DEBUG - 2013-11-14 16:52:19 --> Final output sent to browser
DEBUG - 2013-11-14 16:52:19 --> Total execution time: 0.0600
DEBUG - 2013-11-14 16:53:01 --> Config Class Initialized
DEBUG - 2013-11-14 16:53:01 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:53:01 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:53:01 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:53:01 --> URI Class Initialized
DEBUG - 2013-11-14 16:53:01 --> Router Class Initialized
DEBUG - 2013-11-14 16:53:01 --> Output Class Initialized
DEBUG - 2013-11-14 16:53:01 --> Security Class Initialized
DEBUG - 2013-11-14 16:53:01 --> Input Class Initialized
DEBUG - 2013-11-14 16:53:01 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:53:01 --> Language Class Initialized
DEBUG - 2013-11-14 16:53:01 --> Loader Class Initialized
DEBUG - 2013-11-14 16:53:01 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:53:01 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:53:01 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:53:01 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:53:01 --> Session Class Initialized
DEBUG - 2013-11-14 16:53:01 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:53:01 --> Session routines successfully run
DEBUG - 2013-11-14 16:53:01 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:53:01 --> Controller Class Initialized
DEBUG - 2013-11-14 16:53:01 --> Model Class Initialized
DEBUG - 2013-11-14 16:53:01 --> Model Class Initialized
DEBUG - 2013-11-14 16:53:01 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:53:01 --> after session initialization................
INFO  - 2013-11-14 16:53:01 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 16:53:01 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 16:53:01 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 16:53:01 --> inside retrieving locations 
INFO  - 2013-11-14 16:53:01 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 16:53:01 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 16:53:01 --> Final output sent to browser
DEBUG - 2013-11-14 16:53:01 --> Total execution time: 0.0580
DEBUG - 2013-11-14 16:53:04 --> Config Class Initialized
DEBUG - 2013-11-14 16:53:04 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:53:04 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:53:04 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:53:04 --> URI Class Initialized
DEBUG - 2013-11-14 16:53:04 --> Router Class Initialized
DEBUG - 2013-11-14 16:53:04 --> Output Class Initialized
DEBUG - 2013-11-14 16:53:04 --> Security Class Initialized
DEBUG - 2013-11-14 16:53:04 --> Input Class Initialized
DEBUG - 2013-11-14 16:53:04 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:53:04 --> Language Class Initialized
DEBUG - 2013-11-14 16:53:04 --> Loader Class Initialized
DEBUG - 2013-11-14 16:53:04 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:53:04 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:53:04 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:53:04 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:53:04 --> Session Class Initialized
DEBUG - 2013-11-14 16:53:04 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:53:04 --> Session routines successfully run
DEBUG - 2013-11-14 16:53:04 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:53:04 --> Controller Class Initialized
DEBUG - 2013-11-14 16:53:04 --> Model Class Initialized
DEBUG - 2013-11-14 16:53:04 --> Model Class Initialized
DEBUG - 2013-11-14 16:53:04 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:53:04 --> after session initialization................
INFO  - 2013-11-14 16:53:04 --> inside the auto suggest page for pharmacy.................0
INFO  - 2013-11-14 16:53:04 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%k%' 
INFO  - 2013-11-14 16:53:04 --> after retrieving the data from db.................
INFO  - 2013-11-14 16:53:04 --> looping.................
INFO  - 2013-11-14 16:53:04 --> looping.................
INFO  - 2013-11-14 16:53:04 --> looping.................
INFO  - 2013-11-14 16:53:04 --> looping.................
INFO  - 2013-11-14 16:53:04 --> looping.................
INFO  - 2013-11-14 16:53:04 --> looping.................
DEBUG - 2013-11-14 16:53:04 --> Final output sent to browser
DEBUG - 2013-11-14 16:53:04 --> Total execution time: 0.0600
DEBUG - 2013-11-14 16:53:04 --> Config Class Initialized
DEBUG - 2013-11-14 16:53:04 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:53:04 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:53:04 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:53:04 --> URI Class Initialized
DEBUG - 2013-11-14 16:53:04 --> Router Class Initialized
DEBUG - 2013-11-14 16:53:04 --> Output Class Initialized
DEBUG - 2013-11-14 16:53:04 --> Security Class Initialized
DEBUG - 2013-11-14 16:53:04 --> Input Class Initialized
DEBUG - 2013-11-14 16:53:04 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:53:04 --> Language Class Initialized
DEBUG - 2013-11-14 16:53:04 --> Loader Class Initialized
DEBUG - 2013-11-14 16:53:04 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:53:04 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:53:04 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:53:04 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:53:04 --> Session Class Initialized
DEBUG - 2013-11-14 16:53:04 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:53:04 --> Session routines successfully run
DEBUG - 2013-11-14 16:53:04 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:53:04 --> Controller Class Initialized
DEBUG - 2013-11-14 16:53:04 --> Model Class Initialized
DEBUG - 2013-11-14 16:53:04 --> Model Class Initialized
DEBUG - 2013-11-14 16:53:04 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:53:04 --> after session initialization................
INFO  - 2013-11-14 16:53:04 --> inside the auto suggest page for pharmacy.................0
INFO  - 2013-11-14 16:53:04 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%ko%' 
INFO  - 2013-11-14 16:53:04 --> after retrieving the data from db.................
INFO  - 2013-11-14 16:53:04 --> looping.................
INFO  - 2013-11-14 16:53:04 --> looping.................
DEBUG - 2013-11-14 16:53:04 --> Final output sent to browser
DEBUG - 2013-11-14 16:53:04 --> Total execution time: 0.0540
DEBUG - 2013-11-14 16:53:05 --> Config Class Initialized
DEBUG - 2013-11-14 16:53:05 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:53:05 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:53:05 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:53:05 --> URI Class Initialized
DEBUG - 2013-11-14 16:53:05 --> Router Class Initialized
DEBUG - 2013-11-14 16:53:05 --> Output Class Initialized
DEBUG - 2013-11-14 16:53:05 --> Security Class Initialized
DEBUG - 2013-11-14 16:53:05 --> Input Class Initialized
DEBUG - 2013-11-14 16:53:05 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:53:05 --> Language Class Initialized
DEBUG - 2013-11-14 16:53:05 --> Loader Class Initialized
DEBUG - 2013-11-14 16:53:05 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:53:05 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:53:05 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:53:05 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:53:05 --> Session Class Initialized
DEBUG - 2013-11-14 16:53:05 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:53:05 --> Session routines successfully run
DEBUG - 2013-11-14 16:53:05 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:53:05 --> Controller Class Initialized
DEBUG - 2013-11-14 16:53:05 --> Model Class Initialized
DEBUG - 2013-11-14 16:53:05 --> Model Class Initialized
DEBUG - 2013-11-14 16:53:05 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:53:05 --> after session initialization................
INFO  - 2013-11-14 16:53:05 --> inside the auto suggest page for pharmacy.................0
INFO  - 2013-11-14 16:53:05 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%koo%' 
INFO  - 2013-11-14 16:53:05 --> after retrieving the data from db.................
INFO  - 2013-11-14 16:53:05 --> looping.................
INFO  - 2013-11-14 16:53:05 --> looping.................
DEBUG - 2013-11-14 16:53:05 --> Final output sent to browser
DEBUG - 2013-11-14 16:53:05 --> Total execution time: 0.0520
DEBUG - 2013-11-14 16:53:07 --> Config Class Initialized
DEBUG - 2013-11-14 16:53:07 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:53:07 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:53:07 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:53:07 --> URI Class Initialized
DEBUG - 2013-11-14 16:53:07 --> Router Class Initialized
DEBUG - 2013-11-14 16:53:07 --> Output Class Initialized
DEBUG - 2013-11-14 16:53:07 --> Security Class Initialized
DEBUG - 2013-11-14 16:53:07 --> Input Class Initialized
DEBUG - 2013-11-14 16:53:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:53:07 --> Language Class Initialized
DEBUG - 2013-11-14 16:53:07 --> Loader Class Initialized
DEBUG - 2013-11-14 16:53:07 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:53:07 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:53:07 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:53:07 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:53:07 --> Session Class Initialized
DEBUG - 2013-11-14 16:53:07 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:53:07 --> Session routines successfully run
DEBUG - 2013-11-14 16:53:07 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:53:07 --> Controller Class Initialized
DEBUG - 2013-11-14 16:53:07 --> Model Class Initialized
DEBUG - 2013-11-14 16:53:07 --> Model Class Initialized
DEBUG - 2013-11-14 16:53:07 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:53:07 --> after session initialization................
INFO  - 2013-11-14 16:53:07 --> inside retrieving pharmacy by location id 2
INFO  - 2013-11-14 16:53:07 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '2'
ORDER BY `p`.`name` asc
LIMIT 25
DEBUG - 2013-11-14 16:53:07 --> Final output sent to browser
DEBUG - 2013-11-14 16:53:07 --> Total execution time: 0.0450
DEBUG - 2013-11-14 16:53:10 --> Config Class Initialized
DEBUG - 2013-11-14 16:53:10 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:53:10 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:53:10 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:53:10 --> URI Class Initialized
DEBUG - 2013-11-14 16:53:10 --> Router Class Initialized
DEBUG - 2013-11-14 16:53:10 --> Output Class Initialized
DEBUG - 2013-11-14 16:53:10 --> Security Class Initialized
DEBUG - 2013-11-14 16:53:10 --> Input Class Initialized
DEBUG - 2013-11-14 16:53:10 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:53:10 --> Language Class Initialized
DEBUG - 2013-11-14 16:53:10 --> Loader Class Initialized
DEBUG - 2013-11-14 16:53:10 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:53:10 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:53:10 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:53:10 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:53:10 --> Session Class Initialized
DEBUG - 2013-11-14 16:53:10 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:53:10 --> Session routines successfully run
DEBUG - 2013-11-14 16:53:10 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:53:10 --> Controller Class Initialized
DEBUG - 2013-11-14 16:53:10 --> Model Class Initialized
DEBUG - 2013-11-14 16:53:10 --> Model Class Initialized
DEBUG - 2013-11-14 16:53:10 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:53:10 --> after session initialization................
INFO  - 2013-11-14 16:53:10 --> inside the auto suggest page for pharmacy.................2
INFO  - 2013-11-14 16:53:10 --> Ajax retrieval ::::::::::===>SELECT `p`.`id_pharmacy` as id, `p`.`name` as pharm_name
FROM (`pharmacy` p)
WHERE `p`.`name` like '%koon%' and p.locationid_location = 2
INFO  - 2013-11-14 16:53:10 --> after retrieving the data from db.................
INFO  - 2013-11-14 16:53:10 --> looping.................
DEBUG - 2013-11-14 16:53:10 --> Final output sent to browser
DEBUG - 2013-11-14 16:53:10 --> Total execution time: 0.0520
DEBUG - 2013-11-14 16:53:12 --> Config Class Initialized
DEBUG - 2013-11-14 16:53:12 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:53:12 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:53:12 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:53:12 --> URI Class Initialized
DEBUG - 2013-11-14 16:53:12 --> Router Class Initialized
DEBUG - 2013-11-14 16:53:12 --> Output Class Initialized
DEBUG - 2013-11-14 16:53:12 --> Security Class Initialized
DEBUG - 2013-11-14 16:53:12 --> Input Class Initialized
DEBUG - 2013-11-14 16:53:12 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:53:12 --> Language Class Initialized
DEBUG - 2013-11-14 16:53:12 --> Loader Class Initialized
DEBUG - 2013-11-14 16:53:12 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:53:12 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:53:12 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:53:12 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:53:12 --> Session Class Initialized
DEBUG - 2013-11-14 16:53:12 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:53:12 --> Session routines successfully run
DEBUG - 2013-11-14 16:53:12 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:53:12 --> Controller Class Initialized
DEBUG - 2013-11-14 16:53:12 --> Model Class Initialized
DEBUG - 2013-11-14 16:53:12 --> Model Class Initialized
DEBUG - 2013-11-14 16:53:12 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:53:12 --> after session initialization................
INFO  - 2013-11-14 16:53:12 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>21
INFO  - 2013-11-14 16:53:12 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` =  '21'
DEBUG - 2013-11-14 16:53:12 --> Final output sent to browser
DEBUG - 2013-11-14 16:53:12 --> Total execution time: 0.0460
DEBUG - 2013-11-14 16:54:19 --> Config Class Initialized
DEBUG - 2013-11-14 16:54:19 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:54:19 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:54:19 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:54:19 --> URI Class Initialized
DEBUG - 2013-11-14 16:54:19 --> Router Class Initialized
DEBUG - 2013-11-14 16:54:19 --> Output Class Initialized
DEBUG - 2013-11-14 16:54:19 --> Security Class Initialized
DEBUG - 2013-11-14 16:54:19 --> Input Class Initialized
DEBUG - 2013-11-14 16:54:19 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:54:19 --> Language Class Initialized
DEBUG - 2013-11-14 16:54:19 --> Loader Class Initialized
DEBUG - 2013-11-14 16:54:19 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:54:19 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:54:19 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:54:19 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:54:19 --> Session Class Initialized
DEBUG - 2013-11-14 16:54:19 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:54:19 --> Session routines successfully run
DEBUG - 2013-11-14 16:54:19 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:54:19 --> Controller Class Initialized
DEBUG - 2013-11-14 16:54:19 --> Model Class Initialized
DEBUG - 2013-11-14 16:54:19 --> Model Class Initialized
DEBUG - 2013-11-14 16:54:19 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:54:19 --> after session initialization................
INFO  - 2013-11-14 16:54:19 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 16:54:19 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 16:54:19 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 40
INFO  - 2013-11-14 16:54:19 --> inside retrieving locations 
INFO  - 2013-11-14 16:54:19 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 16:54:19 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 16:54:19 --> Final output sent to browser
DEBUG - 2013-11-14 16:54:19 --> Total execution time: 0.0660
DEBUG - 2013-11-14 16:54:25 --> Config Class Initialized
DEBUG - 2013-11-14 16:54:25 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:54:25 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:54:25 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:54:25 --> URI Class Initialized
DEBUG - 2013-11-14 16:54:25 --> Router Class Initialized
DEBUG - 2013-11-14 16:54:25 --> Output Class Initialized
DEBUG - 2013-11-14 16:54:25 --> Security Class Initialized
DEBUG - 2013-11-14 16:54:25 --> Input Class Initialized
DEBUG - 2013-11-14 16:54:25 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:54:25 --> Language Class Initialized
DEBUG - 2013-11-14 16:54:25 --> Loader Class Initialized
DEBUG - 2013-11-14 16:54:25 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:54:25 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:54:25 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:54:25 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:54:25 --> Session Class Initialized
DEBUG - 2013-11-14 16:54:25 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:54:25 --> Session routines successfully run
DEBUG - 2013-11-14 16:54:25 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:54:25 --> Controller Class Initialized
DEBUG - 2013-11-14 16:54:25 --> Model Class Initialized
DEBUG - 2013-11-14 16:54:25 --> Model Class Initialized
DEBUG - 2013-11-14 16:54:25 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:54:25 --> after session initialization................
INFO  - 2013-11-14 16:54:25 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>34
INFO  - 2013-11-14 16:54:25 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` =  '34'
DEBUG - 2013-11-14 16:54:25 --> Final output sent to browser
DEBUG - 2013-11-14 16:54:25 --> Total execution time: 0.0450
DEBUG - 2013-11-14 16:55:53 --> Config Class Initialized
DEBUG - 2013-11-14 16:55:53 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:55:53 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:55:53 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:55:53 --> URI Class Initialized
DEBUG - 2013-11-14 16:55:53 --> Router Class Initialized
DEBUG - 2013-11-14 16:55:53 --> Output Class Initialized
DEBUG - 2013-11-14 16:55:53 --> Security Class Initialized
DEBUG - 2013-11-14 16:55:53 --> Input Class Initialized
DEBUG - 2013-11-14 16:55:53 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:55:53 --> Language Class Initialized
DEBUG - 2013-11-14 16:55:53 --> Loader Class Initialized
DEBUG - 2013-11-14 16:55:53 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:55:53 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:55:53 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:55:53 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:55:53 --> Session Class Initialized
DEBUG - 2013-11-14 16:55:53 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:55:53 --> Session routines successfully run
DEBUG - 2013-11-14 16:55:53 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:55:53 --> Controller Class Initialized
DEBUG - 2013-11-14 16:55:53 --> Model Class Initialized
DEBUG - 2013-11-14 16:55:53 --> Model Class Initialized
DEBUG - 2013-11-14 16:55:53 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:55:53 --> after session initialization................
INFO  - 2013-11-14 16:55:53 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 16:55:53 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 16:55:53 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-14 16:55:53 --> inside retrieving locations 
INFO  - 2013-11-14 16:55:53 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 16:55:53 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 16:55:53 --> Final output sent to browser
DEBUG - 2013-11-14 16:55:53 --> Total execution time: 0.0600
DEBUG - 2013-11-14 16:55:56 --> Config Class Initialized
DEBUG - 2013-11-14 16:55:56 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:55:56 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:55:56 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:55:56 --> URI Class Initialized
DEBUG - 2013-11-14 16:55:56 --> Router Class Initialized
DEBUG - 2013-11-14 16:55:56 --> Output Class Initialized
DEBUG - 2013-11-14 16:55:56 --> Security Class Initialized
DEBUG - 2013-11-14 16:55:56 --> Input Class Initialized
DEBUG - 2013-11-14 16:55:56 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:55:56 --> Language Class Initialized
DEBUG - 2013-11-14 16:55:56 --> Loader Class Initialized
DEBUG - 2013-11-14 16:55:56 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:55:56 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:55:56 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:55:56 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:55:56 --> Session Class Initialized
DEBUG - 2013-11-14 16:55:56 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:55:56 --> Session routines successfully run
DEBUG - 2013-11-14 16:55:56 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:55:56 --> Controller Class Initialized
DEBUG - 2013-11-14 16:55:56 --> Model Class Initialized
DEBUG - 2013-11-14 16:55:56 --> Model Class Initialized
DEBUG - 2013-11-14 16:55:56 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:55:56 --> after session initialization................
INFO  - 2013-11-14 16:55:56 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>26
INFO  - 2013-11-14 16:55:56 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` =  '26'
DEBUG - 2013-11-14 16:55:56 --> Final output sent to browser
DEBUG - 2013-11-14 16:55:56 --> Total execution time: 0.0640
DEBUG - 2013-11-14 16:56:40 --> Config Class Initialized
DEBUG - 2013-11-14 16:56:40 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:56:40 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:56:40 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:56:40 --> URI Class Initialized
DEBUG - 2013-11-14 16:56:40 --> Router Class Initialized
DEBUG - 2013-11-14 16:56:40 --> Output Class Initialized
DEBUG - 2013-11-14 16:56:40 --> Security Class Initialized
DEBUG - 2013-11-14 16:56:40 --> Input Class Initialized
DEBUG - 2013-11-14 16:56:40 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:56:40 --> Language Class Initialized
DEBUG - 2013-11-14 16:56:40 --> Loader Class Initialized
DEBUG - 2013-11-14 16:56:40 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:56:40 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:56:40 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:56:40 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:56:40 --> Session Class Initialized
DEBUG - 2013-11-14 16:56:40 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:56:40 --> Session routines successfully run
DEBUG - 2013-11-14 16:56:40 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:56:40 --> Controller Class Initialized
DEBUG - 2013-11-14 16:56:40 --> Model Class Initialized
DEBUG - 2013-11-14 16:56:40 --> Model Class Initialized
DEBUG - 2013-11-14 16:56:40 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:56:40 --> after session initialization................
INFO  - 2013-11-14 16:56:40 --> last news id is 0
INFO  - 2013-11-14 16:56:40 --> SELECT a.id_article as id, a.title as newsletter_title, a.description as newsletter_description, a.guestonly as guestonly, a.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`article` a)
JOIN `member` m ON `a`.`memberid_member` = `m`.`id_member`
WHERE `a`.`id_article` <> 0
ORDER BY `a`.`id_article` desc
LIMIT 15
INFO  - 2013-11-14 16:56:40 --> after newsleters list has been clicked.................
INFO  - 2013-11-14 16:56:40 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=112&article_type=newsletter_title
INFO  - 2013-11-14 16:56:40 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=111&article_type=newsletter_title
INFO  - 2013-11-14 16:56:40 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=110&article_type=newsletter_title
INFO  - 2013-11-14 16:56:40 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=109&article_type=newsletter_title
INFO  - 2013-11-14 16:56:40 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=108&article_type=newsletter_title
INFO  - 2013-11-14 16:56:40 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=107&article_type=newsletter_title
INFO  - 2013-11-14 16:56:40 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=106&article_type=newsletter_title
INFO  - 2013-11-14 16:56:40 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=105&article_type=newsletter_title
INFO  - 2013-11-14 16:56:40 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=104&article_type=newsletter_title
INFO  - 2013-11-14 16:56:40 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=103&article_type=newsletter_title
INFO  - 2013-11-14 16:56:40 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=102&article_type=newsletter_title
INFO  - 2013-11-14 16:56:40 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=101&article_type=newsletter_title
INFO  - 2013-11-14 16:56:40 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=100&article_type=newsletter_title
INFO  - 2013-11-14 16:56:40 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=99&article_type=newsletter_title
INFO  - 2013-11-14 16:56:40 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=98&article_type=newsletter_title
DEBUG - 2013-11-14 16:56:40 --> File loaded: ../pharmaray-application/views/articles.php
DEBUG - 2013-11-14 16:56:40 --> Final output sent to browser
DEBUG - 2013-11-14 16:56:40 --> Total execution time: 0.2000
DEBUG - 2013-11-14 16:56:43 --> Config Class Initialized
DEBUG - 2013-11-14 16:56:43 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:56:43 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:56:43 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:56:43 --> URI Class Initialized
DEBUG - 2013-11-14 16:56:43 --> Router Class Initialized
DEBUG - 2013-11-14 16:56:43 --> Output Class Initialized
DEBUG - 2013-11-14 16:56:43 --> Security Class Initialized
DEBUG - 2013-11-14 16:56:43 --> Input Class Initialized
DEBUG - 2013-11-14 16:56:43 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:56:43 --> Language Class Initialized
DEBUG - 2013-11-14 16:56:43 --> Loader Class Initialized
DEBUG - 2013-11-14 16:56:43 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:56:43 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:56:43 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:56:43 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:56:43 --> Session Class Initialized
DEBUG - 2013-11-14 16:56:43 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:56:43 --> Session routines successfully run
DEBUG - 2013-11-14 16:56:43 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:56:43 --> Controller Class Initialized
DEBUG - 2013-11-14 16:56:43 --> Model Class Initialized
DEBUG - 2013-11-14 16:56:43 --> Model Class Initialized
DEBUG - 2013-11-14 16:56:43 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:56:43 --> after session initialization................
INFO  - 2013-11-14 16:56:43 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-14 16:56:43 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-11-14 16:56:43 --> inside retrieving vacancy for member
INFO  - 2013-11-14 16:56:43 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-11-14 16:56:43 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-14 16:56:43 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-11-14 16:56:43 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-11-14 16:56:43 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-14 16:56:43 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-14 16:56:43 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-11-14 16:56:43 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-11-14 16:56:43 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-11-14 16:56:43 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-11-14 16:56:43 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-11-14 16:56:43 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-11-14 16:56:43 --> Final output sent to browser
DEBUG - 2013-11-14 16:56:43 --> Total execution time: 0.0700
DEBUG - 2013-11-14 16:56:43 --> Config Class Initialized
DEBUG - 2013-11-14 16:56:43 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:56:43 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:56:43 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:56:43 --> URI Class Initialized
DEBUG - 2013-11-14 16:56:43 --> Router Class Initialized
DEBUG - 2013-11-14 16:56:43 --> Output Class Initialized
DEBUG - 2013-11-14 16:56:43 --> Security Class Initialized
DEBUG - 2013-11-14 16:56:43 --> Input Class Initialized
DEBUG - 2013-11-14 16:56:43 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:56:43 --> Language Class Initialized
DEBUG - 2013-11-14 16:56:43 --> Loader Class Initialized
DEBUG - 2013-11-14 16:56:43 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:56:43 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:56:43 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:56:43 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:56:43 --> Session Class Initialized
DEBUG - 2013-11-14 16:56:43 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:56:43 --> Session routines successfully run
DEBUG - 2013-11-14 16:56:43 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:56:43 --> Controller Class Initialized
DEBUG - 2013-11-14 16:56:43 --> Model Class Initialized
DEBUG - 2013-11-14 16:56:43 --> Model Class Initialized
DEBUG - 2013-11-14 16:56:43 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:56:43 --> after session initialization................
ERROR - 2013-11-14 16:56:43 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-14 16:56:43 --> Config Class Initialized
DEBUG - 2013-11-14 16:56:43 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:56:43 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:56:43 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:56:43 --> URI Class Initialized
DEBUG - 2013-11-14 16:56:43 --> Router Class Initialized
ERROR - 2013-11-14 16:56:43 --> 404 Page Not Found --> css
DEBUG - 2013-11-14 16:56:45 --> Config Class Initialized
DEBUG - 2013-11-14 16:56:45 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:56:45 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:56:45 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:56:45 --> URI Class Initialized
DEBUG - 2013-11-14 16:56:45 --> Router Class Initialized
DEBUG - 2013-11-14 16:56:45 --> Output Class Initialized
DEBUG - 2013-11-14 16:56:45 --> Security Class Initialized
DEBUG - 2013-11-14 16:56:45 --> Input Class Initialized
DEBUG - 2013-11-14 16:56:45 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:56:45 --> Language Class Initialized
DEBUG - 2013-11-14 16:56:45 --> Loader Class Initialized
DEBUG - 2013-11-14 16:56:45 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:56:45 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:56:45 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:56:45 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:56:45 --> Session Class Initialized
DEBUG - 2013-11-14 16:56:45 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:56:45 --> Session routines successfully run
DEBUG - 2013-11-14 16:56:45 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:56:45 --> Controller Class Initialized
DEBUG - 2013-11-14 16:56:45 --> Model Class Initialized
DEBUG - 2013-11-14 16:56:45 --> Model Class Initialized
DEBUG - 2013-11-14 16:56:45 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:56:45 --> after session initialization................
INFO  - 2013-11-14 16:56:45 --> inside retrieve most commented forum topic 
INFO  - 2013-11-14 16:56:45 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
INFO  - 2013-11-14 16:56:45 --> inside retrieving first 20 topics 
INFO  - 2013-11-14 16:56:45 --> SELECT `t`.`id_topicforum`, upper(t.name) as name, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
LIMIT 20
INFO  - 2013-11-14 16:56:45 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-14 16:56:46 --> SELECT `ff`.`id_forum` as id, `ff`.`name`, count(f.id_forum) as sub_forum
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` is null 
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`
INFO  - 2013-11-14 16:56:46 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-14 16:56:46 --> inside retrieving comments topic id and drug id is 1
INFO  - 2013-11-14 16:56:46 --> SELECT `tc`.`id_topiccomment`, `tc`.`comment`, `tc`.`timecreated`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-14 16:56:46 --> inside retrieving comments topic id 1
INFO  - 2013-11-14 16:56:46 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
INFO  - 2013-11-14 16:56:46 --> after forums has been clicked.................
INFO  - 2013-11-14 16:56:46 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-11-14 16:56:46 --> File loaded: ../pharmaray-application/views/forum.php
DEBUG - 2013-11-14 16:56:46 --> Final output sent to browser
DEBUG - 2013-11-14 16:56:46 --> Total execution time: 0.2610
DEBUG - 2013-11-14 16:56:46 --> Config Class Initialized
DEBUG - 2013-11-14 16:56:46 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:56:46 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:56:46 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:56:46 --> URI Class Initialized
DEBUG - 2013-11-14 16:56:46 --> Router Class Initialized
DEBUG - 2013-11-14 16:56:46 --> Output Class Initialized
DEBUG - 2013-11-14 16:56:46 --> Security Class Initialized
DEBUG - 2013-11-14 16:56:46 --> Input Class Initialized
DEBUG - 2013-11-14 16:56:46 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:56:46 --> Language Class Initialized
DEBUG - 2013-11-14 16:56:46 --> Loader Class Initialized
DEBUG - 2013-11-14 16:56:46 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:56:46 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:56:46 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:56:46 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:56:46 --> Session Class Initialized
DEBUG - 2013-11-14 16:56:46 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:56:46 --> Session routines successfully run
DEBUG - 2013-11-14 16:56:46 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:56:46 --> Controller Class Initialized
DEBUG - 2013-11-14 16:56:46 --> Model Class Initialized
DEBUG - 2013-11-14 16:56:46 --> Model Class Initialized
DEBUG - 2013-11-14 16:56:46 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:56:46 --> after session initialization................
ERROR - 2013-11-14 16:56:46 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-14 16:56:46 --> Config Class Initialized
DEBUG - 2013-11-14 16:56:46 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:56:46 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:56:46 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:56:46 --> URI Class Initialized
DEBUG - 2013-11-14 16:56:46 --> Router Class Initialized
DEBUG - 2013-11-14 16:56:46 --> Output Class Initialized
DEBUG - 2013-11-14 16:56:46 --> Security Class Initialized
DEBUG - 2013-11-14 16:56:46 --> Input Class Initialized
DEBUG - 2013-11-14 16:56:46 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:56:46 --> Language Class Initialized
DEBUG - 2013-11-14 16:56:46 --> Loader Class Initialized
DEBUG - 2013-11-14 16:56:46 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:56:46 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:56:46 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:56:46 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:56:46 --> Session Class Initialized
DEBUG - 2013-11-14 16:56:46 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:56:46 --> Session routines successfully run
DEBUG - 2013-11-14 16:56:46 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:56:46 --> Controller Class Initialized
DEBUG - 2013-11-14 16:56:46 --> Model Class Initialized
DEBUG - 2013-11-14 16:56:46 --> Model Class Initialized
DEBUG - 2013-11-14 16:56:46 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:56:46 --> after session initialization................
ERROR - 2013-11-14 16:56:46 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-14 16:56:46 --> Config Class Initialized
DEBUG - 2013-11-14 16:56:46 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:56:46 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:56:46 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:56:46 --> URI Class Initialized
DEBUG - 2013-11-14 16:56:46 --> Router Class Initialized
ERROR - 2013-11-14 16:56:46 --> 404 Page Not Found --> css
DEBUG - 2013-11-14 16:56:49 --> Config Class Initialized
DEBUG - 2013-11-14 16:56:49 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:56:49 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:56:49 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:56:49 --> URI Class Initialized
DEBUG - 2013-11-14 16:56:49 --> Router Class Initialized
DEBUG - 2013-11-14 16:56:49 --> Output Class Initialized
DEBUG - 2013-11-14 16:56:49 --> Security Class Initialized
DEBUG - 2013-11-14 16:56:49 --> Input Class Initialized
DEBUG - 2013-11-14 16:56:49 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:56:49 --> Language Class Initialized
DEBUG - 2013-11-14 16:56:49 --> Loader Class Initialized
DEBUG - 2013-11-14 16:56:49 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:56:49 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:56:49 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:56:49 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:56:49 --> Session Class Initialized
DEBUG - 2013-11-14 16:56:49 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:56:49 --> Session routines successfully run
DEBUG - 2013-11-14 16:56:49 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:56:49 --> Controller Class Initialized
DEBUG - 2013-11-14 16:56:49 --> Model Class Initialized
DEBUG - 2013-11-14 16:56:49 --> Model Class Initialized
DEBUG - 2013-11-14 16:56:49 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:56:49 --> after session initialization................
INFO  - 2013-11-14 16:56:49 --> inside the retrieve ajax topic comment page.................
INFO  - 2013-11-14 16:56:49 --> inside retrieving comments member id and forum topic id is 1
INFO  - 2013-11-14 16:56:49 --> 10==============================10
INFO  - 2013-11-14 16:56:49 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10, 10
INFO  - 2013-11-14 16:56:49 --> [{"id":"3","comment":"this is not just right","timecreated":"2013-10-24 14:21:05","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"2","comment":"This is just not right...I have had this for a very long time that it drives me crazy","timecreated":"2013-10-24 14:14:47","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"1","comment":"check this comment now....","timecreated":"2013-10-24 14:14:12","membername":"Elvis onuorah","membertypeimage":"profilem1"}]
DEBUG - 2013-11-14 16:56:49 --> Final output sent to browser
DEBUG - 2013-11-14 16:56:49 --> Total execution time: 0.0620
DEBUG - 2013-11-14 16:56:50 --> Config Class Initialized
DEBUG - 2013-11-14 16:56:50 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:56:50 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:56:50 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:56:50 --> URI Class Initialized
DEBUG - 2013-11-14 16:56:50 --> Router Class Initialized
DEBUG - 2013-11-14 16:56:50 --> Output Class Initialized
DEBUG - 2013-11-14 16:56:50 --> Security Class Initialized
DEBUG - 2013-11-14 16:56:50 --> Input Class Initialized
DEBUG - 2013-11-14 16:56:50 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:56:50 --> Language Class Initialized
DEBUG - 2013-11-14 16:56:50 --> Loader Class Initialized
DEBUG - 2013-11-14 16:56:50 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:56:50 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:56:50 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:56:50 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:56:50 --> Session Class Initialized
DEBUG - 2013-11-14 16:56:50 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:56:50 --> Session routines successfully run
DEBUG - 2013-11-14 16:56:50 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:56:50 --> Controller Class Initialized
DEBUG - 2013-11-14 16:56:50 --> Model Class Initialized
DEBUG - 2013-11-14 16:56:50 --> Model Class Initialized
DEBUG - 2013-11-14 16:56:50 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:56:50 --> after session initialization................
INFO  - 2013-11-14 16:56:50 --> inside the retrieve ajax topic comment page.................
INFO  - 2013-11-14 16:56:50 --> inside retrieving comments member id and forum topic id is 1
INFO  - 2013-11-14 16:56:50 --> 10==============================13
INFO  - 2013-11-14 16:56:50 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 13, 10
INFO  - 2013-11-14 16:56:50 --> []
DEBUG - 2013-11-14 16:56:50 --> Final output sent to browser
DEBUG - 2013-11-14 16:56:50 --> Total execution time: 0.0610
DEBUG - 2013-11-14 16:56:57 --> Config Class Initialized
DEBUG - 2013-11-14 16:56:57 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:56:57 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:56:57 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:56:57 --> URI Class Initialized
DEBUG - 2013-11-14 16:56:57 --> Router Class Initialized
DEBUG - 2013-11-14 16:56:57 --> Output Class Initialized
DEBUG - 2013-11-14 16:56:57 --> Security Class Initialized
DEBUG - 2013-11-14 16:56:57 --> Input Class Initialized
DEBUG - 2013-11-14 16:56:57 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:56:57 --> Language Class Initialized
DEBUG - 2013-11-14 16:56:57 --> Loader Class Initialized
DEBUG - 2013-11-14 16:56:57 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:56:57 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:56:57 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:56:57 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:56:57 --> Session Class Initialized
DEBUG - 2013-11-14 16:56:57 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:56:57 --> Session routines successfully run
DEBUG - 2013-11-14 16:56:57 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:56:57 --> Controller Class Initialized
DEBUG - 2013-11-14 16:56:57 --> Model Class Initialized
DEBUG - 2013-11-14 16:56:57 --> Model Class Initialized
DEBUG - 2013-11-14 16:56:57 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:56:57 --> after session initialization................
INFO  - 2013-11-14 16:56:57 --> The forum id is 2
INFO  - 2013-11-14 16:56:57 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-14 16:56:57 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 2
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '2'
ORDER BY `ft`.`name`)
INFO  - 2013-11-14 16:56:57 --> The encoded json is [{"id":"5","text":"ASUU Strike","hasChildren":true}]
DEBUG - 2013-11-14 16:56:57 --> Final output sent to browser
DEBUG - 2013-11-14 16:56:57 --> Total execution time: 0.0700
DEBUG - 2013-11-14 16:56:59 --> Config Class Initialized
DEBUG - 2013-11-14 16:56:59 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:56:59 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:56:59 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:56:59 --> URI Class Initialized
DEBUG - 2013-11-14 16:56:59 --> Router Class Initialized
DEBUG - 2013-11-14 16:56:59 --> Output Class Initialized
DEBUG - 2013-11-14 16:56:59 --> Security Class Initialized
DEBUG - 2013-11-14 16:56:59 --> Input Class Initialized
DEBUG - 2013-11-14 16:56:59 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:56:59 --> Language Class Initialized
DEBUG - 2013-11-14 16:56:59 --> Loader Class Initialized
DEBUG - 2013-11-14 16:56:59 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:56:59 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:56:59 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:56:59 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:56:59 --> Session Class Initialized
DEBUG - 2013-11-14 16:56:59 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:56:59 --> Session routines successfully run
DEBUG - 2013-11-14 16:56:59 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:56:59 --> Controller Class Initialized
DEBUG - 2013-11-14 16:56:59 --> Model Class Initialized
DEBUG - 2013-11-14 16:56:59 --> Model Class Initialized
DEBUG - 2013-11-14 16:56:59 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:56:59 --> after session initialization................
INFO  - 2013-11-14 16:56:59 --> The forum id is 1
INFO  - 2013-11-14 16:56:59 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-14 16:56:59 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 1
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '1'
ORDER BY `ft`.`name`)
INFO  - 2013-11-14 16:56:59 --> The encoded json is [{"id":"4","text":"Eye Defects","hasChildren":true},{"id":"1","text":"ASTIGMATISM","hasChildren":false},{"id":"2","text":"CATARACT","hasChildren":false}]
DEBUG - 2013-11-14 16:56:59 --> Final output sent to browser
DEBUG - 2013-11-14 16:56:59 --> Total execution time: 0.0450
DEBUG - 2013-11-14 16:57:00 --> Config Class Initialized
DEBUG - 2013-11-14 16:57:00 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:57:00 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:57:00 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:57:00 --> URI Class Initialized
DEBUG - 2013-11-14 16:57:00 --> Router Class Initialized
DEBUG - 2013-11-14 16:57:00 --> Output Class Initialized
DEBUG - 2013-11-14 16:57:00 --> Security Class Initialized
DEBUG - 2013-11-14 16:57:00 --> Input Class Initialized
DEBUG - 2013-11-14 16:57:00 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:57:00 --> Language Class Initialized
DEBUG - 2013-11-14 16:57:00 --> Loader Class Initialized
DEBUG - 2013-11-14 16:57:00 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:57:00 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:57:00 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:57:00 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:57:00 --> Session Class Initialized
DEBUG - 2013-11-14 16:57:00 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:57:00 --> Session routines successfully run
DEBUG - 2013-11-14 16:57:00 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:57:00 --> Controller Class Initialized
DEBUG - 2013-11-14 16:57:00 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:00 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:00 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:57:00 --> after session initialization................
INFO  - 2013-11-14 16:57:00 --> The forum id is 4
INFO  - 2013-11-14 16:57:00 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-14 16:57:00 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 4
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '4'
ORDER BY `ft`.`name`)
INFO  - 2013-11-14 16:57:00 --> The encoded json is [{"id":"6","text":"Long Sight","hasChildren":true},{"id":"3","text":"CONJUCTIVITIS","hasChildren":false},{"id":"5","text":"BLUE PUPILS","hasChildren":false},{"id":"6","text":"BULDGED EYES","hasChildren":false},{"id":"10","text":"NIGHT BLINDNESS","hasChildren":false}]
DEBUG - 2013-11-14 16:57:00 --> Final output sent to browser
DEBUG - 2013-11-14 16:57:00 --> Total execution time: 0.0560
DEBUG - 2013-11-14 16:57:01 --> Config Class Initialized
DEBUG - 2013-11-14 16:57:01 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:57:01 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:57:01 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:57:01 --> URI Class Initialized
DEBUG - 2013-11-14 16:57:01 --> Router Class Initialized
DEBUG - 2013-11-14 16:57:01 --> Output Class Initialized
DEBUG - 2013-11-14 16:57:01 --> Security Class Initialized
DEBUG - 2013-11-14 16:57:01 --> Input Class Initialized
DEBUG - 2013-11-14 16:57:01 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:57:01 --> Language Class Initialized
DEBUG - 2013-11-14 16:57:01 --> Loader Class Initialized
DEBUG - 2013-11-14 16:57:01 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:57:01 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:57:01 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:57:02 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:57:02 --> Session Class Initialized
DEBUG - 2013-11-14 16:57:02 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:57:02 --> Session routines successfully run
DEBUG - 2013-11-14 16:57:02 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:57:02 --> Controller Class Initialized
DEBUG - 2013-11-14 16:57:02 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:02 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:02 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:57:02 --> after session initialization................
INFO  - 2013-11-14 16:57:02 --> The forum id is 6
INFO  - 2013-11-14 16:57:02 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-14 16:57:02 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 6
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '6'
ORDER BY `ft`.`name`)
INFO  - 2013-11-14 16:57:02 --> The encoded json is [{"id":"8","text":"Complicated Long sight","hasChildren":true},{"id":"9","text":"Non complicated long sight","hasChildren":true}]
DEBUG - 2013-11-14 16:57:02 --> Final output sent to browser
DEBUG - 2013-11-14 16:57:02 --> Total execution time: 0.0490
DEBUG - 2013-11-14 16:57:03 --> Config Class Initialized
DEBUG - 2013-11-14 16:57:03 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:57:03 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:57:03 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:57:03 --> URI Class Initialized
DEBUG - 2013-11-14 16:57:03 --> Router Class Initialized
DEBUG - 2013-11-14 16:57:03 --> Output Class Initialized
DEBUG - 2013-11-14 16:57:03 --> Security Class Initialized
DEBUG - 2013-11-14 16:57:03 --> Input Class Initialized
DEBUG - 2013-11-14 16:57:03 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:57:03 --> Language Class Initialized
DEBUG - 2013-11-14 16:57:03 --> Loader Class Initialized
DEBUG - 2013-11-14 16:57:03 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:57:03 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:57:03 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:57:03 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:57:03 --> Session Class Initialized
DEBUG - 2013-11-14 16:57:03 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:57:03 --> Session routines successfully run
DEBUG - 2013-11-14 16:57:03 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:57:03 --> Controller Class Initialized
DEBUG - 2013-11-14 16:57:03 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:03 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:03 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:57:03 --> after session initialization................
INFO  - 2013-11-14 16:57:03 --> The forum id is 8
INFO  - 2013-11-14 16:57:03 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-14 16:57:03 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 8
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '8'
ORDER BY `ft`.`name`)
INFO  - 2013-11-14 16:57:03 --> The encoded json is [{"id":"9","text":"REGIONAL LONG SIGHT","hasChildren":false}]
DEBUG - 2013-11-14 16:57:03 --> Final output sent to browser
DEBUG - 2013-11-14 16:57:03 --> Total execution time: 0.0580
DEBUG - 2013-11-14 16:57:04 --> Config Class Initialized
DEBUG - 2013-11-14 16:57:04 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:57:04 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:57:04 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:57:04 --> URI Class Initialized
DEBUG - 2013-11-14 16:57:04 --> Router Class Initialized
DEBUG - 2013-11-14 16:57:04 --> Output Class Initialized
DEBUG - 2013-11-14 16:57:04 --> Security Class Initialized
DEBUG - 2013-11-14 16:57:04 --> Input Class Initialized
DEBUG - 2013-11-14 16:57:04 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:57:04 --> Language Class Initialized
DEBUG - 2013-11-14 16:57:04 --> Loader Class Initialized
DEBUG - 2013-11-14 16:57:04 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:57:04 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:57:04 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:57:04 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:57:04 --> Session Class Initialized
DEBUG - 2013-11-14 16:57:04 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:57:04 --> Session routines successfully run
DEBUG - 2013-11-14 16:57:04 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:57:04 --> Controller Class Initialized
DEBUG - 2013-11-14 16:57:04 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:04 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:04 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:57:04 --> after session initialization................
INFO  - 2013-11-14 16:57:04 --> The forum id is 9
INFO  - 2013-11-14 16:57:04 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-14 16:57:04 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 9
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '9'
ORDER BY `ft`.`name`)
INFO  - 2013-11-14 16:57:04 --> The encoded json is [{"id":"10","text":"Ex- coomplicated long sight","hasChildren":true}]
DEBUG - 2013-11-14 16:57:04 --> Final output sent to browser
DEBUG - 2013-11-14 16:57:04 --> Total execution time: 0.0510
DEBUG - 2013-11-14 16:57:04 --> Config Class Initialized
DEBUG - 2013-11-14 16:57:04 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:57:04 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:57:04 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:57:04 --> URI Class Initialized
DEBUG - 2013-11-14 16:57:04 --> Router Class Initialized
DEBUG - 2013-11-14 16:57:04 --> Output Class Initialized
DEBUG - 2013-11-14 16:57:04 --> Security Class Initialized
DEBUG - 2013-11-14 16:57:04 --> Input Class Initialized
DEBUG - 2013-11-14 16:57:04 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:57:04 --> Language Class Initialized
DEBUG - 2013-11-14 16:57:04 --> Loader Class Initialized
DEBUG - 2013-11-14 16:57:04 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:57:04 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:57:04 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:57:04 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:57:04 --> Session Class Initialized
DEBUG - 2013-11-14 16:57:04 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:57:04 --> Session routines successfully run
DEBUG - 2013-11-14 16:57:04 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:57:04 --> Controller Class Initialized
DEBUG - 2013-11-14 16:57:04 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:04 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:04 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:57:04 --> after session initialization................
INFO  - 2013-11-14 16:57:04 --> The forum id is 10
INFO  - 2013-11-14 16:57:04 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-14 16:57:04 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 10
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '10'
ORDER BY `ft`.`name`)
INFO  - 2013-11-14 16:57:04 --> The encoded json is [{"id":"11","text":"Supra-complicated long sight","hasChildren":true}]
DEBUG - 2013-11-14 16:57:04 --> Final output sent to browser
DEBUG - 2013-11-14 16:57:04 --> Total execution time: 0.0640
DEBUG - 2013-11-14 16:57:07 --> Config Class Initialized
DEBUG - 2013-11-14 16:57:07 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:57:07 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:57:07 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:57:07 --> URI Class Initialized
DEBUG - 2013-11-14 16:57:07 --> Router Class Initialized
DEBUG - 2013-11-14 16:57:07 --> Output Class Initialized
DEBUG - 2013-11-14 16:57:07 --> Security Class Initialized
DEBUG - 2013-11-14 16:57:07 --> Input Class Initialized
DEBUG - 2013-11-14 16:57:07 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:57:07 --> Language Class Initialized
DEBUG - 2013-11-14 16:57:07 --> Loader Class Initialized
DEBUG - 2013-11-14 16:57:07 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:57:07 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:57:07 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:57:07 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:57:07 --> Session Class Initialized
DEBUG - 2013-11-14 16:57:07 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:57:07 --> Session routines successfully run
DEBUG - 2013-11-14 16:57:07 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:57:07 --> Controller Class Initialized
DEBUG - 2013-11-14 16:57:07 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:07 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:07 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:57:07 --> after session initialization................
INFO  - 2013-11-14 16:57:07 --> The forum id is 11
INFO  - 2013-11-14 16:57:07 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-14 16:57:07 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 11
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '11'
ORDER BY `ft`.`name`)
INFO  - 2013-11-14 16:57:07 --> The encoded json is [{"id":"8","text":"COLOR BLINDNESS","hasChildren":false}]
DEBUG - 2013-11-14 16:57:07 --> Final output sent to browser
DEBUG - 2013-11-14 16:57:07 --> Total execution time: 0.0560
DEBUG - 2013-11-14 16:57:10 --> Config Class Initialized
DEBUG - 2013-11-14 16:57:10 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:57:10 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:57:10 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:57:10 --> URI Class Initialized
DEBUG - 2013-11-14 16:57:10 --> Router Class Initialized
DEBUG - 2013-11-14 16:57:10 --> Output Class Initialized
DEBUG - 2013-11-14 16:57:10 --> Security Class Initialized
DEBUG - 2013-11-14 16:57:10 --> Input Class Initialized
DEBUG - 2013-11-14 16:57:10 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:57:10 --> Language Class Initialized
DEBUG - 2013-11-14 16:57:10 --> Loader Class Initialized
DEBUG - 2013-11-14 16:57:10 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:57:10 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:57:10 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:57:10 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:57:10 --> Session Class Initialized
DEBUG - 2013-11-14 16:57:10 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:57:10 --> Session routines successfully run
DEBUG - 2013-11-14 16:57:10 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:57:10 --> Controller Class Initialized
DEBUG - 2013-11-14 16:57:10 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:10 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:10 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:57:10 --> after session initialization................
INFO  - 2013-11-14 16:57:10 --> Topics ::::::::::===>SELECT `ft`.`id_topicforum`, `ft`.`name`, `ft`.`description`
FROM (`forum_topic` ft)
WHERE `ft`.`id_topicforum` =  '8'
ORDER BY `ft`.`name`
INFO  - 2013-11-14 16:57:10 --> inside retrieving comments member id and forum topic id is 8
INFO  - 2013-11-14 16:57:10 --> 10==============================0
INFO  - 2013-11-14 16:57:10 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 8
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-14 16:57:10 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 8
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-14 16:57:10 --> inside retrieving comments topic id is 8
INFO  - 2013-11-14 16:57:10 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 8
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
DEBUG - 2013-11-14 16:57:10 --> Final output sent to browser
DEBUG - 2013-11-14 16:57:10 --> Total execution time: 0.1070
DEBUG - 2013-11-14 16:57:13 --> Config Class Initialized
DEBUG - 2013-11-14 16:57:13 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:57:13 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:57:13 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:57:13 --> URI Class Initialized
DEBUG - 2013-11-14 16:57:13 --> Router Class Initialized
DEBUG - 2013-11-14 16:57:13 --> Output Class Initialized
DEBUG - 2013-11-14 16:57:13 --> Security Class Initialized
DEBUG - 2013-11-14 16:57:13 --> Input Class Initialized
DEBUG - 2013-11-14 16:57:13 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:57:13 --> Language Class Initialized
DEBUG - 2013-11-14 16:57:13 --> Loader Class Initialized
DEBUG - 2013-11-14 16:57:13 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:57:13 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:57:13 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:57:13 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:57:13 --> Session Class Initialized
DEBUG - 2013-11-14 16:57:13 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:57:13 --> Session routines successfully run
DEBUG - 2013-11-14 16:57:13 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:57:13 --> Controller Class Initialized
DEBUG - 2013-11-14 16:57:13 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:13 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:13 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:57:13 --> after session initialization................
INFO  - 2013-11-14 16:57:13 --> The forum id is 5
INFO  - 2013-11-14 16:57:13 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-14 16:57:13 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 5
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '5'
ORDER BY `ft`.`name`)
INFO  - 2013-11-14 16:57:13 --> The encoded json is [{"id":"7","text":"Increase In school fees","hasChildren":true},{"id":"12","text":"UNN DEMONSTRATION HALTED","hasChildren":false}]
DEBUG - 2013-11-14 16:57:13 --> Final output sent to browser
DEBUG - 2013-11-14 16:57:13 --> Total execution time: 0.0470
DEBUG - 2013-11-14 16:57:14 --> Config Class Initialized
DEBUG - 2013-11-14 16:57:14 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:57:14 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:57:14 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:57:14 --> URI Class Initialized
DEBUG - 2013-11-14 16:57:14 --> Router Class Initialized
DEBUG - 2013-11-14 16:57:14 --> Output Class Initialized
DEBUG - 2013-11-14 16:57:14 --> Security Class Initialized
DEBUG - 2013-11-14 16:57:14 --> Input Class Initialized
DEBUG - 2013-11-14 16:57:14 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:57:14 --> Language Class Initialized
DEBUG - 2013-11-14 16:57:14 --> Loader Class Initialized
DEBUG - 2013-11-14 16:57:14 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:57:14 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:57:14 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:57:14 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:57:14 --> Session Class Initialized
DEBUG - 2013-11-14 16:57:14 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:57:14 --> Session routines successfully run
DEBUG - 2013-11-14 16:57:14 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:57:14 --> Controller Class Initialized
DEBUG - 2013-11-14 16:57:14 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:14 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:14 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:57:14 --> after session initialization................
INFO  - 2013-11-14 16:57:14 --> Topics ::::::::::===>SELECT `ft`.`id_topicforum`, `ft`.`name`, `ft`.`description`
FROM (`forum_topic` ft)
WHERE `ft`.`id_topicforum` =  '12'
ORDER BY `ft`.`name`
INFO  - 2013-11-14 16:57:14 --> inside retrieving comments member id and forum topic id is 12
INFO  - 2013-11-14 16:57:14 --> 10==============================0
INFO  - 2013-11-14 16:57:14 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 12
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-14 16:57:14 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 12
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-14 16:57:14 --> inside retrieving comments topic id is 12
INFO  - 2013-11-14 16:57:14 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 12
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
DEBUG - 2013-11-14 16:57:14 --> Final output sent to browser
DEBUG - 2013-11-14 16:57:14 --> Total execution time: 0.0660
DEBUG - 2013-11-14 16:57:15 --> Config Class Initialized
DEBUG - 2013-11-14 16:57:15 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:57:15 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:57:15 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:57:15 --> URI Class Initialized
DEBUG - 2013-11-14 16:57:15 --> Router Class Initialized
DEBUG - 2013-11-14 16:57:15 --> Output Class Initialized
DEBUG - 2013-11-14 16:57:15 --> Security Class Initialized
DEBUG - 2013-11-14 16:57:15 --> Input Class Initialized
DEBUG - 2013-11-14 16:57:15 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:57:15 --> Language Class Initialized
DEBUG - 2013-11-14 16:57:15 --> Loader Class Initialized
DEBUG - 2013-11-14 16:57:15 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:57:15 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:57:15 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:57:15 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:57:15 --> Session Class Initialized
DEBUG - 2013-11-14 16:57:15 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:57:15 --> Session routines successfully run
DEBUG - 2013-11-14 16:57:15 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:57:15 --> Controller Class Initialized
DEBUG - 2013-11-14 16:57:15 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:15 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:15 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:57:15 --> after session initialization................
INFO  - 2013-11-14 16:57:15 --> The forum id is 7
INFO  - 2013-11-14 16:57:15 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-14 16:57:15 --> Ajax retrieval for articles ::::::::::===>(SELECT ff.id_forum as id, ff.name as text, "true" as hasChildren
FROM (`forum` f)
JOIN `forum` ff ON `f`.`id_forum` = `ff`.`forumid_forum`
WHERE `ff`.`forumid_forum` = 7
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`) union (SELECT ft.id_topicforum as id, upper(ft.name) as text, "false" as hasChildren
FROM (`forum_topic` ft)
WHERE `ft`.`forumid_forum` =  '7'
ORDER BY `ft`.`name`)
INFO  - 2013-11-14 16:57:15 --> The encoded json is [{"id":"11","text":"BABCOOK FEES","hasChildren":false}]
DEBUG - 2013-11-14 16:57:15 --> Final output sent to browser
DEBUG - 2013-11-14 16:57:15 --> Total execution time: 0.0530
DEBUG - 2013-11-14 16:57:17 --> Config Class Initialized
DEBUG - 2013-11-14 16:57:17 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:57:17 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:57:17 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:57:17 --> URI Class Initialized
DEBUG - 2013-11-14 16:57:17 --> Router Class Initialized
DEBUG - 2013-11-14 16:57:17 --> Output Class Initialized
DEBUG - 2013-11-14 16:57:17 --> Security Class Initialized
DEBUG - 2013-11-14 16:57:17 --> Input Class Initialized
DEBUG - 2013-11-14 16:57:17 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:57:17 --> Language Class Initialized
DEBUG - 2013-11-14 16:57:17 --> Loader Class Initialized
DEBUG - 2013-11-14 16:57:17 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:57:17 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:57:17 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:57:17 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:57:17 --> Session Class Initialized
DEBUG - 2013-11-14 16:57:17 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:57:17 --> Session routines successfully run
DEBUG - 2013-11-14 16:57:17 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:57:17 --> Controller Class Initialized
DEBUG - 2013-11-14 16:57:17 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:17 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:17 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:57:17 --> after session initialization................
INFO  - 2013-11-14 16:57:17 --> Topics ::::::::::===>SELECT `ft`.`id_topicforum`, `ft`.`name`, `ft`.`description`
FROM (`forum_topic` ft)
WHERE `ft`.`id_topicforum` =  '11'
ORDER BY `ft`.`name`
INFO  - 2013-11-14 16:57:17 --> inside retrieving comments member id and forum topic id is 11
INFO  - 2013-11-14 16:57:17 --> 10==============================0
INFO  - 2013-11-14 16:57:17 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 11
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-14 16:57:17 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 11
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-14 16:57:17 --> inside retrieving comments topic id is 11
INFO  - 2013-11-14 16:57:17 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 11
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
DEBUG - 2013-11-14 16:57:17 --> Final output sent to browser
DEBUG - 2013-11-14 16:57:17 --> Total execution time: 0.0630
DEBUG - 2013-11-14 16:57:19 --> Config Class Initialized
DEBUG - 2013-11-14 16:57:19 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:57:19 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:57:19 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:57:19 --> URI Class Initialized
DEBUG - 2013-11-14 16:57:19 --> Router Class Initialized
DEBUG - 2013-11-14 16:57:19 --> Output Class Initialized
DEBUG - 2013-11-14 16:57:19 --> Security Class Initialized
DEBUG - 2013-11-14 16:57:19 --> Input Class Initialized
DEBUG - 2013-11-14 16:57:19 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:57:19 --> Language Class Initialized
DEBUG - 2013-11-14 16:57:19 --> Loader Class Initialized
DEBUG - 2013-11-14 16:57:19 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:57:19 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:57:19 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:57:19 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:57:19 --> Session Class Initialized
DEBUG - 2013-11-14 16:57:19 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:57:19 --> Session routines successfully run
DEBUG - 2013-11-14 16:57:19 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:57:19 --> Controller Class Initialized
DEBUG - 2013-11-14 16:57:19 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:19 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:19 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:57:19 --> after session initialization................
INFO  - 2013-11-14 16:57:19 --> Topics ::::::::::===>SELECT `ft`.`id_topicforum`, `ft`.`name`, `ft`.`description`
FROM (`forum_topic` ft)
WHERE `ft`.`id_topicforum` =  '9'
ORDER BY `ft`.`name`
INFO  - 2013-11-14 16:57:19 --> inside retrieving comments member id and forum topic id is 9
INFO  - 2013-11-14 16:57:19 --> 10==============================0
INFO  - 2013-11-14 16:57:19 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 9
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-14 16:57:19 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 9
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-14 16:57:19 --> inside retrieving comments topic id is 9
INFO  - 2013-11-14 16:57:19 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 9
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
DEBUG - 2013-11-14 16:57:19 --> Final output sent to browser
DEBUG - 2013-11-14 16:57:19 --> Total execution time: 0.0780
DEBUG - 2013-11-14 16:57:21 --> Config Class Initialized
DEBUG - 2013-11-14 16:57:21 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:57:21 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:57:21 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:57:21 --> URI Class Initialized
DEBUG - 2013-11-14 16:57:21 --> Router Class Initialized
DEBUG - 2013-11-14 16:57:21 --> Output Class Initialized
DEBUG - 2013-11-14 16:57:21 --> Security Class Initialized
DEBUG - 2013-11-14 16:57:21 --> Input Class Initialized
DEBUG - 2013-11-14 16:57:21 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:57:21 --> Language Class Initialized
DEBUG - 2013-11-14 16:57:21 --> Loader Class Initialized
DEBUG - 2013-11-14 16:57:21 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:57:21 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:57:21 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:57:21 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:57:21 --> Session Class Initialized
DEBUG - 2013-11-14 16:57:21 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:57:21 --> Session routines successfully run
DEBUG - 2013-11-14 16:57:21 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:57:21 --> Controller Class Initialized
DEBUG - 2013-11-14 16:57:21 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:21 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:21 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:57:21 --> after session initialization................
INFO  - 2013-11-14 16:57:21 --> Topics ::::::::::===>SELECT `ft`.`id_topicforum`, `ft`.`name`, `ft`.`description`
FROM (`forum_topic` ft)
WHERE `ft`.`id_topicforum` =  '10'
ORDER BY `ft`.`name`
INFO  - 2013-11-14 16:57:21 --> inside retrieving comments member id and forum topic id is 10
INFO  - 2013-11-14 16:57:21 --> 10==============================0
INFO  - 2013-11-14 16:57:21 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 10
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-14 16:57:21 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 10
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-14 16:57:21 --> inside retrieving comments topic id is 10
INFO  - 2013-11-14 16:57:21 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 10
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
DEBUG - 2013-11-14 16:57:21 --> Final output sent to browser
DEBUG - 2013-11-14 16:57:21 --> Total execution time: 0.0770
DEBUG - 2013-11-14 16:57:22 --> Config Class Initialized
DEBUG - 2013-11-14 16:57:22 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:57:22 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:57:22 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:57:22 --> URI Class Initialized
DEBUG - 2013-11-14 16:57:22 --> Router Class Initialized
DEBUG - 2013-11-14 16:57:22 --> Output Class Initialized
DEBUG - 2013-11-14 16:57:22 --> Security Class Initialized
DEBUG - 2013-11-14 16:57:22 --> Input Class Initialized
DEBUG - 2013-11-14 16:57:22 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:57:22 --> Language Class Initialized
DEBUG - 2013-11-14 16:57:22 --> Loader Class Initialized
DEBUG - 2013-11-14 16:57:22 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:57:22 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:57:22 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:57:22 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:57:22 --> Session Class Initialized
DEBUG - 2013-11-14 16:57:22 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:57:22 --> Session routines successfully run
DEBUG - 2013-11-14 16:57:22 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:57:22 --> Controller Class Initialized
DEBUG - 2013-11-14 16:57:22 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:22 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:22 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:57:22 --> after session initialization................
INFO  - 2013-11-14 16:57:22 --> Topics ::::::::::===>SELECT `ft`.`id_topicforum`, `ft`.`name`, `ft`.`description`
FROM (`forum_topic` ft)
WHERE `ft`.`id_topicforum` =  '6'
ORDER BY `ft`.`name`
INFO  - 2013-11-14 16:57:22 --> inside retrieving comments member id and forum topic id is 6
INFO  - 2013-11-14 16:57:22 --> 10==============================0
INFO  - 2013-11-14 16:57:22 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 6
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-14 16:57:22 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 6
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-14 16:57:22 --> inside retrieving comments topic id is 6
INFO  - 2013-11-14 16:57:22 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 6
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
DEBUG - 2013-11-14 16:57:22 --> Final output sent to browser
DEBUG - 2013-11-14 16:57:22 --> Total execution time: 0.0620
DEBUG - 2013-11-14 16:57:24 --> Config Class Initialized
DEBUG - 2013-11-14 16:57:24 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:57:24 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:57:24 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:57:24 --> URI Class Initialized
DEBUG - 2013-11-14 16:57:24 --> Router Class Initialized
DEBUG - 2013-11-14 16:57:24 --> Output Class Initialized
DEBUG - 2013-11-14 16:57:24 --> Security Class Initialized
DEBUG - 2013-11-14 16:57:24 --> Input Class Initialized
DEBUG - 2013-11-14 16:57:24 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:57:24 --> Language Class Initialized
DEBUG - 2013-11-14 16:57:24 --> Loader Class Initialized
DEBUG - 2013-11-14 16:57:24 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:57:24 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:57:24 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:57:24 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:57:24 --> Session Class Initialized
DEBUG - 2013-11-14 16:57:24 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:57:24 --> Session routines successfully run
DEBUG - 2013-11-14 16:57:24 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:57:24 --> Controller Class Initialized
DEBUG - 2013-11-14 16:57:24 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:24 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:24 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:57:24 --> after session initialization................
INFO  - 2013-11-14 16:57:24 --> Topics ::::::::::===>SELECT `ft`.`id_topicforum`, `ft`.`name`, `ft`.`description`
FROM (`forum_topic` ft)
WHERE `ft`.`id_topicforum` =  '5'
ORDER BY `ft`.`name`
INFO  - 2013-11-14 16:57:24 --> inside retrieving comments member id and forum topic id is 5
INFO  - 2013-11-14 16:57:24 --> 10==============================0
INFO  - 2013-11-14 16:57:24 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 5
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-14 16:57:24 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 5
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-14 16:57:24 --> inside retrieving comments topic id is 5
INFO  - 2013-11-14 16:57:24 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 5
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
DEBUG - 2013-11-14 16:57:24 --> Final output sent to browser
DEBUG - 2013-11-14 16:57:24 --> Total execution time: 0.0660
DEBUG - 2013-11-14 16:57:25 --> Config Class Initialized
DEBUG - 2013-11-14 16:57:25 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:57:25 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:57:25 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:57:25 --> URI Class Initialized
DEBUG - 2013-11-14 16:57:25 --> Router Class Initialized
DEBUG - 2013-11-14 16:57:25 --> Output Class Initialized
DEBUG - 2013-11-14 16:57:25 --> Security Class Initialized
DEBUG - 2013-11-14 16:57:25 --> Input Class Initialized
DEBUG - 2013-11-14 16:57:25 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:57:25 --> Language Class Initialized
DEBUG - 2013-11-14 16:57:25 --> Loader Class Initialized
DEBUG - 2013-11-14 16:57:25 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:57:25 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:57:25 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:57:25 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:57:25 --> Session Class Initialized
DEBUG - 2013-11-14 16:57:25 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:57:25 --> Session routines successfully run
DEBUG - 2013-11-14 16:57:25 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:57:25 --> Controller Class Initialized
DEBUG - 2013-11-14 16:57:25 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:25 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:25 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:57:25 --> after session initialization................
INFO  - 2013-11-14 16:57:25 --> Topics ::::::::::===>SELECT `ft`.`id_topicforum`, `ft`.`name`, `ft`.`description`
FROM (`forum_topic` ft)
WHERE `ft`.`id_topicforum` =  '3'
ORDER BY `ft`.`name`
INFO  - 2013-11-14 16:57:25 --> inside retrieving comments member id and forum topic id is 3
INFO  - 2013-11-14 16:57:25 --> 10==============================0
INFO  - 2013-11-14 16:57:25 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 3
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-14 16:57:25 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 3
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-14 16:57:25 --> inside retrieving comments topic id is 3
INFO  - 2013-11-14 16:57:25 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 3
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
DEBUG - 2013-11-14 16:57:25 --> Final output sent to browser
DEBUG - 2013-11-14 16:57:25 --> Total execution time: 0.0520
DEBUG - 2013-11-14 16:57:27 --> Config Class Initialized
DEBUG - 2013-11-14 16:57:27 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:57:27 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:57:27 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:57:27 --> URI Class Initialized
DEBUG - 2013-11-14 16:57:27 --> Router Class Initialized
DEBUG - 2013-11-14 16:57:27 --> Output Class Initialized
DEBUG - 2013-11-14 16:57:27 --> Security Class Initialized
DEBUG - 2013-11-14 16:57:27 --> Input Class Initialized
DEBUG - 2013-11-14 16:57:27 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:57:27 --> Language Class Initialized
DEBUG - 2013-11-14 16:57:27 --> Loader Class Initialized
DEBUG - 2013-11-14 16:57:27 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:57:27 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:57:27 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:57:27 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:57:27 --> Session Class Initialized
DEBUG - 2013-11-14 16:57:27 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:57:27 --> Session routines successfully run
DEBUG - 2013-11-14 16:57:27 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:57:27 --> Controller Class Initialized
DEBUG - 2013-11-14 16:57:27 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:27 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:27 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:57:27 --> after session initialization................
INFO  - 2013-11-14 16:57:27 --> Topics ::::::::::===>SELECT `ft`.`id_topicforum`, `ft`.`name`, `ft`.`description`
FROM (`forum_topic` ft)
WHERE `ft`.`id_topicforum` =  '2'
ORDER BY `ft`.`name`
INFO  - 2013-11-14 16:57:27 --> inside retrieving comments member id and forum topic id is 2
INFO  - 2013-11-14 16:57:27 --> 10==============================0
INFO  - 2013-11-14 16:57:27 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-14 16:57:27 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-14 16:57:27 --> inside retrieving comments topic id is 2
INFO  - 2013-11-14 16:57:27 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 2
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
DEBUG - 2013-11-14 16:57:27 --> Final output sent to browser
DEBUG - 2013-11-14 16:57:27 --> Total execution time: 0.0590
DEBUG - 2013-11-14 16:57:28 --> Config Class Initialized
DEBUG - 2013-11-14 16:57:28 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:57:28 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:57:28 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:57:28 --> URI Class Initialized
DEBUG - 2013-11-14 16:57:28 --> Router Class Initialized
DEBUG - 2013-11-14 16:57:28 --> Output Class Initialized
DEBUG - 2013-11-14 16:57:28 --> Security Class Initialized
DEBUG - 2013-11-14 16:57:28 --> Input Class Initialized
DEBUG - 2013-11-14 16:57:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:57:28 --> Language Class Initialized
DEBUG - 2013-11-14 16:57:28 --> Loader Class Initialized
DEBUG - 2013-11-14 16:57:28 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:57:28 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:57:28 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:57:28 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:57:28 --> Session Class Initialized
DEBUG - 2013-11-14 16:57:28 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:57:28 --> Session routines successfully run
DEBUG - 2013-11-14 16:57:28 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:57:28 --> Controller Class Initialized
DEBUG - 2013-11-14 16:57:28 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:28 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:28 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:57:28 --> after session initialization................
INFO  - 2013-11-14 16:57:28 --> Topics ::::::::::===>SELECT `ft`.`id_topicforum`, `ft`.`name`, `ft`.`description`
FROM (`forum_topic` ft)
WHERE `ft`.`id_topicforum` =  '1'
ORDER BY `ft`.`name`
INFO  - 2013-11-14 16:57:28 --> inside retrieving comments member id and forum topic id is 1
INFO  - 2013-11-14 16:57:28 --> 10==============================0
INFO  - 2013-11-14 16:57:28 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-14 16:57:28 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-14 16:57:28 --> inside retrieving comments topic id is 1
INFO  - 2013-11-14 16:57:28 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
DEBUG - 2013-11-14 16:57:28 --> Final output sent to browser
DEBUG - 2013-11-14 16:57:28 --> Total execution time: 0.0640
DEBUG - 2013-11-14 16:57:31 --> Config Class Initialized
DEBUG - 2013-11-14 16:57:31 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:57:31 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:57:31 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:57:31 --> URI Class Initialized
DEBUG - 2013-11-14 16:57:31 --> Router Class Initialized
DEBUG - 2013-11-14 16:57:31 --> Output Class Initialized
DEBUG - 2013-11-14 16:57:31 --> Security Class Initialized
DEBUG - 2013-11-14 16:57:31 --> Input Class Initialized
DEBUG - 2013-11-14 16:57:31 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:57:31 --> Language Class Initialized
DEBUG - 2013-11-14 16:57:31 --> Loader Class Initialized
DEBUG - 2013-11-14 16:57:31 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:57:31 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:57:31 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:57:31 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:57:31 --> Session Class Initialized
DEBUG - 2013-11-14 16:57:31 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:57:31 --> Session routines successfully run
DEBUG - 2013-11-14 16:57:31 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:57:31 --> Controller Class Initialized
DEBUG - 2013-11-14 16:57:31 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:31 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:31 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:57:31 --> after session initialization................
INFO  - 2013-11-14 16:57:31 --> inside the retrieve ajax topic comment page.................
INFO  - 2013-11-14 16:57:31 --> inside retrieving comments member id and forum topic id is 1
INFO  - 2013-11-14 16:57:31 --> 10==============================10
INFO  - 2013-11-14 16:57:31 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10, 10
INFO  - 2013-11-14 16:57:31 --> [{"id":"3","comment":"this is not just right","timecreated":"2013-10-24 14:21:05","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"2","comment":"This is just not right...I have had this for a very long time that it drives me crazy","timecreated":"2013-10-24 14:14:47","membername":"Elvis onuorah","membertypeimage":"profilem1"},{"id":"1","comment":"check this comment now....","timecreated":"2013-10-24 14:14:12","membername":"Elvis onuorah","membertypeimage":"profilem1"}]
DEBUG - 2013-11-14 16:57:31 --> Final output sent to browser
DEBUG - 2013-11-14 16:57:31 --> Total execution time: 0.0570
DEBUG - 2013-11-14 16:57:31 --> Config Class Initialized
DEBUG - 2013-11-14 16:57:31 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:57:31 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:57:31 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:57:31 --> URI Class Initialized
DEBUG - 2013-11-14 16:57:31 --> Router Class Initialized
DEBUG - 2013-11-14 16:57:31 --> Output Class Initialized
DEBUG - 2013-11-14 16:57:31 --> Security Class Initialized
DEBUG - 2013-11-14 16:57:31 --> Input Class Initialized
DEBUG - 2013-11-14 16:57:31 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:57:31 --> Language Class Initialized
DEBUG - 2013-11-14 16:57:31 --> Loader Class Initialized
DEBUG - 2013-11-14 16:57:31 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:57:32 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:57:32 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:57:32 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:57:32 --> Session Class Initialized
DEBUG - 2013-11-14 16:57:32 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:57:32 --> Session routines successfully run
DEBUG - 2013-11-14 16:57:32 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:57:32 --> Controller Class Initialized
DEBUG - 2013-11-14 16:57:32 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:32 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:32 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:57:32 --> after session initialization................
INFO  - 2013-11-14 16:57:32 --> inside the retrieve ajax topic comment page.................
INFO  - 2013-11-14 16:57:32 --> inside retrieving comments member id and forum topic id is 1
INFO  - 2013-11-14 16:57:32 --> 10==============================13
INFO  - 2013-11-14 16:57:32 --> SELECT tc.id_topiccomment as id, tc.comment, tc.timecreated, concat ( m.firstname_member, ' ', m.surname_member ) as membername, mt.default_image_name as membertypeimage
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 13, 10
INFO  - 2013-11-14 16:57:32 --> []
DEBUG - 2013-11-14 16:57:32 --> Final output sent to browser
DEBUG - 2013-11-14 16:57:32 --> Total execution time: 0.0520
DEBUG - 2013-11-14 16:57:38 --> Config Class Initialized
DEBUG - 2013-11-14 16:57:38 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:57:38 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:57:38 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:57:38 --> URI Class Initialized
DEBUG - 2013-11-14 16:57:38 --> Router Class Initialized
DEBUG - 2013-11-14 16:57:38 --> Output Class Initialized
DEBUG - 2013-11-14 16:57:38 --> Security Class Initialized
DEBUG - 2013-11-14 16:57:38 --> Input Class Initialized
DEBUG - 2013-11-14 16:57:38 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:57:38 --> Language Class Initialized
DEBUG - 2013-11-14 16:57:38 --> Loader Class Initialized
DEBUG - 2013-11-14 16:57:38 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:57:38 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:57:38 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:57:39 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:57:39 --> Session Class Initialized
DEBUG - 2013-11-14 16:57:39 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:57:39 --> Session routines successfully run
DEBUG - 2013-11-14 16:57:39 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:57:39 --> Controller Class Initialized
DEBUG - 2013-11-14 16:57:39 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:39 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:39 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:57:39 --> after session initialization................
INFO  - 2013-11-14 16:57:39 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-14 16:57:39 --> SELECT `dc`.`id_drugcomment`, `dc`.`comment`, `dc`.`time_created`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
LIMIT 10
INFO  - 2013-11-14 16:57:39 --> inside retrieving vacancy for member
INFO  - 2013-11-14 16:57:39 --> Vacancies ::::::::::===>SELECT `vg`.`name` as vacancygroup_name, count(v.vacancy_id) as vacancy_count
FROM (`vacancygroup` vg)
JOIN `vacancy` v ON `vg`.`vacancygroup_id` = `v`.`VacancyGroupvacancygroup_id`
GROUP BY `vg`.`vacancygroup_id`
ORDER BY `vg`.`name`
INFO  - 2013-11-14 16:57:39 --> inside retrieving comments member id and drug id is 1
INFO  - 2013-11-14 16:57:39 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(dc.comment) as comment_count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment`
INFO  - 2013-11-14 16:57:39 --> Drugs ::::::::::===>SELECT `d`.`id_drug`, `d`.`drug_name`, `d`.`drug_description`, `dc`.`id_drugclass` as class_id, `dc`.`name` as drug_class, `bn`.`id_brandname` as brandname_id, `bn`.`name` as drug_brandname, `dcc`.`id_drugcategory` as category_id
FROM (`drug` d)
JOIN `drugclass` dc ON `dc`.`id_drugclass` = `d`.`drugclassid_drugclass`
JOIN `brandname` bn ON `bn`.`id_brandname` = `d`.`brandnameid_brandname`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `d`.`drugcategoryid_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `d`.`drug_name`
INFO  - 2013-11-14 16:57:39 --> News by drug_id ::::::::::===>SELECT `n`.`id_news`, `a`.`id_article` as id, `a`.`title` as news_title, `a`.`description` as news_description
FROM (`news` n)
JOIN `newsdrugmerger` ndm ON `ndm`.`newsid_news` = `n`.`id_news`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
JOIN `article` a ON `a`.`newsid_news` = `n`.`id_news`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-14 16:57:39 --> News by drug_id ::::::::::===>SELECT `n`.`id_newsletter` as id, `a`.`title` as newsletter_title, `a`.`description` as newsletter_description
FROM (`newsletter` n)
JOIN `newsletterdrugmerger` ndm ON `ndm`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drugcategory` dc ON `dc`.`id_drugcategory` = `ndm`.`drugcategoryid_drugcategory`
JOIN `article` a ON `a`.`newsletterid_newsletter` = `n`.`id_newsletter`
JOIN `drug` d ON `d`.`drugcategoryid_drugcategory` = `dc`.`id_drugcategory`
WHERE `d`.`id_drug` =  '1'
ORDER BY `a`.`time_created`
INFO  - 2013-11-14 16:57:39 --> SELECT count(dc.id_drugcomment) as count
FROM (`drugcomment` dc)
JOIN `member` m ON `dc`.`memberid_member` = `m`.`id_member` and dc.drugid_drug = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `dc`.`id_drugcomment` desc
INFO  - 2013-11-14 16:57:39 --> inside retrieving pharmacy for drug id is 1
INFO  - 2013-11-14 16:57:39 --> SELECT `p`.`id_pharmacy`, `p`.`name`
FROM (`pharmacy` p)
JOIN `drugavailability` da ON `da`.`pharmacyid_pharmacy` = `p`.`id_pharmacy` and da.drugid_drug = 1
ORDER BY `p`.`id_pharmacy`
LIMIT 10
INFO  - 2013-11-14 16:57:39 --> Related drugs ::::::::::===>SELECT `d`.`drug_name`
FROM (`drug` d)
JOIN `preglactation` p ON `p`.`drugid_drug` = `d`.`id_drug`
JOIN `pregnancycategory` pc ON `p`.`pregnancycategoryid_pregnancycategory` = `pc`.`id_pregnancycategory`
WHERE `d`.`brandnameid_brandname` =  '0'
AND `d`.`drugclassid_drugclass`  =  '0'
INFO  - 2013-11-14 16:57:39 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-11-14 16:57:39 --> File loaded: ../pharmaray-application/views/userpage.php
DEBUG - 2013-11-14 16:57:39 --> Final output sent to browser
DEBUG - 2013-11-14 16:57:39 --> Total execution time: 0.0890
DEBUG - 2013-11-14 16:57:39 --> Config Class Initialized
DEBUG - 2013-11-14 16:57:39 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:57:39 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:57:39 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:57:39 --> URI Class Initialized
DEBUG - 2013-11-14 16:57:39 --> Router Class Initialized
DEBUG - 2013-11-14 16:57:39 --> Output Class Initialized
DEBUG - 2013-11-14 16:57:39 --> Security Class Initialized
DEBUG - 2013-11-14 16:57:39 --> Input Class Initialized
DEBUG - 2013-11-14 16:57:39 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:57:39 --> Language Class Initialized
DEBUG - 2013-11-14 16:57:39 --> Loader Class Initialized
DEBUG - 2013-11-14 16:57:39 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:57:39 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:57:39 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:57:39 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:57:39 --> Session Class Initialized
DEBUG - 2013-11-14 16:57:39 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:57:39 --> Session routines successfully run
DEBUG - 2013-11-14 16:57:39 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:57:39 --> Controller Class Initialized
DEBUG - 2013-11-14 16:57:39 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:39 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:39 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:57:39 --> after session initialization................
ERROR - 2013-11-14 16:57:39 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-14 16:57:39 --> Config Class Initialized
DEBUG - 2013-11-14 16:57:39 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:57:39 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:57:39 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:57:39 --> URI Class Initialized
DEBUG - 2013-11-14 16:57:39 --> Router Class Initialized
ERROR - 2013-11-14 16:57:39 --> 404 Page Not Found --> css
DEBUG - 2013-11-14 16:57:43 --> Config Class Initialized
DEBUG - 2013-11-14 16:57:43 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:57:43 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:57:43 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:57:43 --> URI Class Initialized
DEBUG - 2013-11-14 16:57:43 --> Router Class Initialized
DEBUG - 2013-11-14 16:57:43 --> Output Class Initialized
DEBUG - 2013-11-14 16:57:43 --> Security Class Initialized
DEBUG - 2013-11-14 16:57:43 --> Input Class Initialized
DEBUG - 2013-11-14 16:57:43 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:57:43 --> Language Class Initialized
DEBUG - 2013-11-14 16:57:43 --> Loader Class Initialized
DEBUG - 2013-11-14 16:57:43 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:57:43 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:57:43 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:57:43 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:57:43 --> Session Class Initialized
DEBUG - 2013-11-14 16:57:43 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:57:43 --> Session routines successfully run
DEBUG - 2013-11-14 16:57:43 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:57:43 --> Controller Class Initialized
DEBUG - 2013-11-14 16:57:43 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:43 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:43 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:57:43 --> after session initialization................
INFO  - 2013-11-14 16:57:43 --> last news id is 0
INFO  - 2013-11-14 16:57:43 --> SELECT a.id_article as id, a.title as newsletter_title, a.description as newsletter_description, a.guestonly as guestonly, a.time_created as time_created, concat ( m.firstname_member, ' ', m.surname_member ) as author_name
FROM (`article` a)
JOIN `member` m ON `a`.`memberid_member` = `m`.`id_member`
WHERE `a`.`id_article` <> 0
ORDER BY `a`.`id_article` desc
LIMIT 15
INFO  - 2013-11-14 16:57:43 --> after newsleters list has been clicked.................
INFO  - 2013-11-14 16:57:43 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=112&article_type=newsletter_title
INFO  - 2013-11-14 16:57:43 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=111&article_type=newsletter_title
INFO  - 2013-11-14 16:57:43 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=110&article_type=newsletter_title
INFO  - 2013-11-14 16:57:43 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=109&article_type=newsletter_title
INFO  - 2013-11-14 16:57:43 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=108&article_type=newsletter_title
INFO  - 2013-11-14 16:57:43 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=107&article_type=newsletter_title
INFO  - 2013-11-14 16:57:43 --> 1 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=106&article_type=newsletter_title
INFO  - 2013-11-14 16:57:43 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=105&article_type=newsletter_title
INFO  - 2013-11-14 16:57:43 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=104&article_type=newsletter_title
INFO  - 2013-11-14 16:57:43 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=103&article_type=newsletter_title
INFO  - 2013-11-14 16:57:43 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=102&article_type=newsletter_title
INFO  - 2013-11-14 16:57:43 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=101&article_type=newsletter_title
INFO  - 2013-11-14 16:57:43 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=100&article_type=newsletter_title
INFO  - 2013-11-14 16:57:43 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=99&article_type=newsletter_title
INFO  - 2013-11-14 16:57:43 --> 0 the guest only data>>>>>http://localhost/Pharmarays/pharma-public/sys_admin/user_authorization/newslist?news_id=98&article_type=newsletter_title
DEBUG - 2013-11-14 16:57:43 --> File loaded: ../pharmaray-application/views/articles.php
DEBUG - 2013-11-14 16:57:43 --> Final output sent to browser
DEBUG - 2013-11-14 16:57:43 --> Total execution time: 0.0730
DEBUG - 2013-11-14 16:57:46 --> Config Class Initialized
DEBUG - 2013-11-14 16:57:46 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:57:46 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:57:46 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:57:46 --> URI Class Initialized
DEBUG - 2013-11-14 16:57:46 --> Router Class Initialized
DEBUG - 2013-11-14 16:57:46 --> Output Class Initialized
DEBUG - 2013-11-14 16:57:46 --> Security Class Initialized
DEBUG - 2013-11-14 16:57:46 --> Input Class Initialized
DEBUG - 2013-11-14 16:57:46 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:57:46 --> Language Class Initialized
DEBUG - 2013-11-14 16:57:46 --> Loader Class Initialized
DEBUG - 2013-11-14 16:57:46 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:57:46 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:57:46 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:57:46 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:57:46 --> Session Class Initialized
DEBUG - 2013-11-14 16:57:46 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:57:46 --> Session routines successfully run
DEBUG - 2013-11-14 16:57:46 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:57:46 --> Controller Class Initialized
DEBUG - 2013-11-14 16:57:46 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:46 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:46 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:57:46 --> after session initialization................
INFO  - 2013-11-14 16:57:46 --> inside retrieve most commented forum topic 
INFO  - 2013-11-14 16:57:46 --> forum topic is 1 ::::::::::===>SELECT `t`.`id_topicforum` as id, `t`.`name`, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
INFO  - 2013-11-14 16:57:46 --> inside retrieving first 20 topics 
INFO  - 2013-11-14 16:57:46 --> SELECT `t`.`id_topicforum`, upper(t.name) as name, `t`.`description`, `t`.`timecreated`, count(tc.id_topiccomment) as comment_count
FROM (`topic_comment` tc)
JOIN `forum_topic` t ON `t`.`id_topicforum` = `tc`.`forum_topicid_topicforum`
GROUP BY `t`.`id_topicforum`
ORDER BY `comment_count` desc
LIMIT 20
INFO  - 2013-11-14 16:57:46 --> inside retrieving pharmacy beyond id 
INFO  - 2013-11-14 16:57:46 --> SELECT `ff`.`id_forum` as id, `ff`.`name`, count(f.id_forum) as sub_forum
FROM (`forum` f)
JOIN `forum` ff ON `ff`.`id_forum` = `f`.`forumid_forum`
WHERE `ff`.`forumid_forum` is null 
GROUP BY `ff`.`id_forum`
ORDER BY `ff`.`name`
INFO  - 2013-11-14 16:57:46 --> SELECT count(tc.id_topiccomment) as count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
INFO  - 2013-11-14 16:57:46 --> inside retrieving comments topic id and drug id is 1
INFO  - 2013-11-14 16:57:46 --> SELECT `tc`.`id_topiccomment`, `tc`.`comment`, `tc`.`timecreated`, `m`.`firstname_member`, `m`.`surname_member`, `mt`.`default_image_name`
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment` desc
LIMIT 10
INFO  - 2013-11-14 16:57:46 --> inside retrieving comments topic id 1
INFO  - 2013-11-14 16:57:46 --> SELECT `mt`.`id_membertype` as member_type_id, `mt`.`name` as membertype_name, count(tc.comment) as comment_count
FROM (`topic_comment` tc)
JOIN `member` m ON `tc`.`memberid_member` = `m`.`id_member` and tc.forum_topicid_topicforum = 1
JOIN `membertype` mt ON `m`.`membertypeid_membertype` = `mt`.`id_membertype`
GROUP BY `mt`.`id_membertype`
ORDER BY `tc`.`id_topiccomment`
INFO  - 2013-11-14 16:57:46 --> after forums has been clicked.................
INFO  - 2013-11-14 16:57:46 -->  column name inside view is 0 column Data is Male Doctor
DEBUG - 2013-11-14 16:57:46 --> File loaded: ../pharmaray-application/views/forum.php
DEBUG - 2013-11-14 16:57:46 --> Final output sent to browser
DEBUG - 2013-11-14 16:57:46 --> Total execution time: 0.0660
DEBUG - 2013-11-14 16:57:46 --> Config Class Initialized
DEBUG - 2013-11-14 16:57:46 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:57:46 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:57:46 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:57:46 --> URI Class Initialized
DEBUG - 2013-11-14 16:57:46 --> Router Class Initialized
DEBUG - 2013-11-14 16:57:46 --> Output Class Initialized
DEBUG - 2013-11-14 16:57:46 --> Security Class Initialized
DEBUG - 2013-11-14 16:57:46 --> Input Class Initialized
DEBUG - 2013-11-14 16:57:46 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:57:46 --> Language Class Initialized
DEBUG - 2013-11-14 16:57:46 --> Loader Class Initialized
DEBUG - 2013-11-14 16:57:46 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:57:46 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:57:46 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:57:46 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:57:46 --> Session Class Initialized
DEBUG - 2013-11-14 16:57:46 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:57:46 --> Session routines successfully run
DEBUG - 2013-11-14 16:57:46 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:57:46 --> Controller Class Initialized
DEBUG - 2013-11-14 16:57:46 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:46 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:46 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:57:46 --> after session initialization................
ERROR - 2013-11-14 16:57:46 --> 404 Page Not Found --> user_authorization/js
DEBUG - 2013-11-14 16:57:46 --> Config Class Initialized
DEBUG - 2013-11-14 16:57:46 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:57:46 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:57:46 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:57:46 --> URI Class Initialized
DEBUG - 2013-11-14 16:57:46 --> Router Class Initialized
ERROR - 2013-11-14 16:57:46 --> 404 Page Not Found --> css
DEBUG - 2013-11-14 16:57:56 --> Config Class Initialized
DEBUG - 2013-11-14 16:57:56 --> Hooks Class Initialized
DEBUG - 2013-11-14 16:57:56 --> Utf8 Class Initialized
DEBUG - 2013-11-14 16:57:56 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 16:57:56 --> URI Class Initialized
DEBUG - 2013-11-14 16:57:56 --> Router Class Initialized
DEBUG - 2013-11-14 16:57:56 --> Output Class Initialized
DEBUG - 2013-11-14 16:57:56 --> Security Class Initialized
DEBUG - 2013-11-14 16:57:56 --> Input Class Initialized
DEBUG - 2013-11-14 16:57:56 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 16:57:56 --> Language Class Initialized
DEBUG - 2013-11-14 16:57:56 --> Loader Class Initialized
DEBUG - 2013-11-14 16:57:56 --> Helper loaded: form_helper
DEBUG - 2013-11-14 16:57:56 --> Helper loaded: url_helper
DEBUG - 2013-11-14 16:57:56 --> Helper loaded: html_helper
DEBUG - 2013-11-14 16:57:56 --> Database Driver Class Initialized
DEBUG - 2013-11-14 16:57:56 --> Session Class Initialized
DEBUG - 2013-11-14 16:57:56 --> Helper loaded: string_helper
DEBUG - 2013-11-14 16:57:56 --> Session routines successfully run
DEBUG - 2013-11-14 16:57:56 --> Form Validation Class Initialized
DEBUG - 2013-11-14 16:57:56 --> Controller Class Initialized
DEBUG - 2013-11-14 16:57:56 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:56 --> Model Class Initialized
DEBUG - 2013-11-14 16:57:56 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 16:57:56 --> after session initialization................
INFO  - 2013-11-14 16:57:56 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 16:57:56 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 16:57:56 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-14 16:57:56 --> inside retrieving locations 
INFO  - 2013-11-14 16:57:56 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 16:57:56 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 16:57:56 --> Final output sent to browser
DEBUG - 2013-11-14 16:57:56 --> Total execution time: 0.0560
DEBUG - 2013-11-14 17:12:18 --> Config Class Initialized
DEBUG - 2013-11-14 17:12:18 --> Hooks Class Initialized
DEBUG - 2013-11-14 17:12:18 --> Utf8 Class Initialized
DEBUG - 2013-11-14 17:12:18 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 17:12:18 --> URI Class Initialized
DEBUG - 2013-11-14 17:12:18 --> Router Class Initialized
DEBUG - 2013-11-14 17:12:18 --> Output Class Initialized
DEBUG - 2013-11-14 17:12:18 --> Security Class Initialized
DEBUG - 2013-11-14 17:12:18 --> Input Class Initialized
DEBUG - 2013-11-14 17:12:18 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 17:12:18 --> Language Class Initialized
DEBUG - 2013-11-14 17:12:18 --> Loader Class Initialized
DEBUG - 2013-11-14 17:12:18 --> Helper loaded: form_helper
DEBUG - 2013-11-14 17:12:18 --> Helper loaded: url_helper
DEBUG - 2013-11-14 17:12:18 --> Helper loaded: html_helper
DEBUG - 2013-11-14 17:12:18 --> Database Driver Class Initialized
DEBUG - 2013-11-14 17:12:18 --> Session Class Initialized
DEBUG - 2013-11-14 17:12:18 --> Helper loaded: string_helper
DEBUG - 2013-11-14 17:12:18 --> Session routines successfully run
DEBUG - 2013-11-14 17:12:18 --> Form Validation Class Initialized
DEBUG - 2013-11-14 17:12:18 --> Controller Class Initialized
DEBUG - 2013-11-14 17:12:18 --> Model Class Initialized
DEBUG - 2013-11-14 17:12:18 --> Model Class Initialized
DEBUG - 2013-11-14 17:12:18 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 17:12:18 --> after session initialization................
INFO  - 2013-11-14 17:12:18 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 17:12:18 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 17:12:18 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-14 17:12:18 --> inside retrieving locations 
INFO  - 2013-11-14 17:12:18 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 17:12:18 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 17:12:18 --> Final output sent to browser
DEBUG - 2013-11-14 17:12:18 --> Total execution time: 0.0520
DEBUG - 2013-11-14 17:12:19 --> Config Class Initialized
DEBUG - 2013-11-14 17:12:19 --> Hooks Class Initialized
DEBUG - 2013-11-14 17:12:19 --> Utf8 Class Initialized
DEBUG - 2013-11-14 17:12:19 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 17:12:19 --> URI Class Initialized
DEBUG - 2013-11-14 17:12:19 --> Router Class Initialized
DEBUG - 2013-11-14 17:12:19 --> Output Class Initialized
DEBUG - 2013-11-14 17:12:19 --> Security Class Initialized
DEBUG - 2013-11-14 17:12:19 --> Input Class Initialized
DEBUG - 2013-11-14 17:12:19 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 17:12:19 --> Language Class Initialized
DEBUG - 2013-11-14 17:12:19 --> Loader Class Initialized
DEBUG - 2013-11-14 17:12:19 --> Helper loaded: form_helper
DEBUG - 2013-11-14 17:12:19 --> Helper loaded: url_helper
DEBUG - 2013-11-14 17:12:19 --> Helper loaded: html_helper
DEBUG - 2013-11-14 17:12:19 --> Database Driver Class Initialized
DEBUG - 2013-11-14 17:12:19 --> Session Class Initialized
DEBUG - 2013-11-14 17:12:19 --> Helper loaded: string_helper
DEBUG - 2013-11-14 17:12:19 --> Session routines successfully run
DEBUG - 2013-11-14 17:12:19 --> Form Validation Class Initialized
DEBUG - 2013-11-14 17:12:19 --> Controller Class Initialized
DEBUG - 2013-11-14 17:12:19 --> Model Class Initialized
DEBUG - 2013-11-14 17:12:19 --> Model Class Initialized
DEBUG - 2013-11-14 17:12:19 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 17:12:19 --> after session initialization................
INFO  - 2013-11-14 17:12:19 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 17:12:19 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 17:12:19 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-14 17:12:19 --> inside retrieving locations 
INFO  - 2013-11-14 17:12:19 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 17:12:19 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 17:12:19 --> Final output sent to browser
DEBUG - 2013-11-14 17:12:19 --> Total execution time: 0.0640
DEBUG - 2013-11-14 17:12:46 --> Config Class Initialized
DEBUG - 2013-11-14 17:12:46 --> Hooks Class Initialized
DEBUG - 2013-11-14 17:12:46 --> Utf8 Class Initialized
DEBUG - 2013-11-14 17:12:46 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 17:12:46 --> URI Class Initialized
DEBUG - 2013-11-14 17:12:46 --> Router Class Initialized
DEBUG - 2013-11-14 17:12:46 --> Output Class Initialized
DEBUG - 2013-11-14 17:12:46 --> Security Class Initialized
DEBUG - 2013-11-14 17:12:46 --> Input Class Initialized
DEBUG - 2013-11-14 17:12:46 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 17:12:46 --> Language Class Initialized
DEBUG - 2013-11-14 17:12:46 --> Loader Class Initialized
DEBUG - 2013-11-14 17:12:46 --> Helper loaded: form_helper
DEBUG - 2013-11-14 17:12:46 --> Helper loaded: url_helper
DEBUG - 2013-11-14 17:12:46 --> Helper loaded: html_helper
DEBUG - 2013-11-14 17:12:46 --> Database Driver Class Initialized
DEBUG - 2013-11-14 17:12:46 --> Session Class Initialized
DEBUG - 2013-11-14 17:12:46 --> Helper loaded: string_helper
DEBUG - 2013-11-14 17:12:46 --> Session routines successfully run
DEBUG - 2013-11-14 17:12:46 --> Form Validation Class Initialized
DEBUG - 2013-11-14 17:12:46 --> Controller Class Initialized
DEBUG - 2013-11-14 17:12:46 --> Model Class Initialized
DEBUG - 2013-11-14 17:12:46 --> Model Class Initialized
DEBUG - 2013-11-14 17:12:46 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 17:12:46 --> after session initialization................
INFO  - 2013-11-14 17:12:46 --> inside retrieving pharmacy by location id 1
INFO  - 2013-11-14 17:12:46 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `l`.`id_location` =  '1'
ORDER BY `p`.`name` asc
LIMIT 25
DEBUG - 2013-11-14 17:12:46 --> Final output sent to browser
DEBUG - 2013-11-14 17:12:46 --> Total execution time: 0.0470
DEBUG - 2013-11-14 17:12:48 --> Config Class Initialized
DEBUG - 2013-11-14 17:12:48 --> Hooks Class Initialized
DEBUG - 2013-11-14 17:12:48 --> Utf8 Class Initialized
DEBUG - 2013-11-14 17:12:48 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 17:12:48 --> URI Class Initialized
DEBUG - 2013-11-14 17:12:48 --> Router Class Initialized
DEBUG - 2013-11-14 17:12:48 --> Output Class Initialized
DEBUG - 2013-11-14 17:12:48 --> Security Class Initialized
DEBUG - 2013-11-14 17:12:48 --> Input Class Initialized
DEBUG - 2013-11-14 17:12:48 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 17:12:48 --> Language Class Initialized
DEBUG - 2013-11-14 17:12:48 --> Loader Class Initialized
DEBUG - 2013-11-14 17:12:48 --> Helper loaded: form_helper
DEBUG - 2013-11-14 17:12:48 --> Helper loaded: url_helper
DEBUG - 2013-11-14 17:12:48 --> Helper loaded: html_helper
DEBUG - 2013-11-14 17:12:48 --> Database Driver Class Initialized
DEBUG - 2013-11-14 17:12:48 --> Session Class Initialized
DEBUG - 2013-11-14 17:12:48 --> Helper loaded: string_helper
DEBUG - 2013-11-14 17:12:48 --> Session routines successfully run
DEBUG - 2013-11-14 17:12:48 --> Form Validation Class Initialized
DEBUG - 2013-11-14 17:12:48 --> Controller Class Initialized
DEBUG - 2013-11-14 17:12:48 --> Model Class Initialized
DEBUG - 2013-11-14 17:12:48 --> Model Class Initialized
DEBUG - 2013-11-14 17:12:48 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 17:12:48 --> after session initialization................
INFO  - 2013-11-14 17:12:48 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 17:12:48 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 17:12:48 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-14 17:12:48 --> inside retrieving locations 
INFO  - 2013-11-14 17:12:48 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 17:12:48 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 17:12:48 --> Final output sent to browser
DEBUG - 2013-11-14 17:12:48 --> Total execution time: 0.0500
DEBUG - 2013-11-14 17:12:51 --> Config Class Initialized
DEBUG - 2013-11-14 17:12:51 --> Hooks Class Initialized
DEBUG - 2013-11-14 17:12:51 --> Utf8 Class Initialized
DEBUG - 2013-11-14 17:12:51 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 17:12:51 --> URI Class Initialized
DEBUG - 2013-11-14 17:12:51 --> Router Class Initialized
DEBUG - 2013-11-14 17:12:51 --> Output Class Initialized
DEBUG - 2013-11-14 17:12:51 --> Security Class Initialized
DEBUG - 2013-11-14 17:12:51 --> Input Class Initialized
DEBUG - 2013-11-14 17:12:51 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 17:12:51 --> Language Class Initialized
DEBUG - 2013-11-14 17:12:51 --> Loader Class Initialized
DEBUG - 2013-11-14 17:12:51 --> Helper loaded: form_helper
DEBUG - 2013-11-14 17:12:51 --> Helper loaded: url_helper
DEBUG - 2013-11-14 17:12:51 --> Helper loaded: html_helper
DEBUG - 2013-11-14 17:12:51 --> Database Driver Class Initialized
DEBUG - 2013-11-14 17:12:51 --> Session Class Initialized
DEBUG - 2013-11-14 17:12:51 --> Helper loaded: string_helper
DEBUG - 2013-11-14 17:12:51 --> Session routines successfully run
DEBUG - 2013-11-14 17:12:51 --> Form Validation Class Initialized
DEBUG - 2013-11-14 17:12:51 --> Controller Class Initialized
DEBUG - 2013-11-14 17:12:51 --> Model Class Initialized
DEBUG - 2013-11-14 17:12:51 --> Model Class Initialized
DEBUG - 2013-11-14 17:12:51 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 17:12:51 --> after session initialization................
ERROR - 2013-11-14 17:12:51 --> Severity: Notice  --> Undefined variable: pharmacyid C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 533
INFO  - 2013-11-14 17:12:51 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>
INFO  - 2013-11-14 17:12:51 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` =  ''
DEBUG - 2013-11-14 17:12:51 --> Final output sent to browser
DEBUG - 2013-11-14 17:12:51 --> Total execution time: 0.0560
DEBUG - 2013-11-14 17:13:17 --> Config Class Initialized
DEBUG - 2013-11-14 17:13:17 --> Hooks Class Initialized
DEBUG - 2013-11-14 17:13:17 --> Utf8 Class Initialized
DEBUG - 2013-11-14 17:13:17 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 17:13:17 --> URI Class Initialized
DEBUG - 2013-11-14 17:13:17 --> Router Class Initialized
DEBUG - 2013-11-14 17:13:17 --> Output Class Initialized
DEBUG - 2013-11-14 17:13:17 --> Security Class Initialized
DEBUG - 2013-11-14 17:13:17 --> Input Class Initialized
DEBUG - 2013-11-14 17:13:17 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 17:13:17 --> Language Class Initialized
DEBUG - 2013-11-14 17:13:17 --> Loader Class Initialized
DEBUG - 2013-11-14 17:13:17 --> Helper loaded: form_helper
DEBUG - 2013-11-14 17:13:17 --> Helper loaded: url_helper
DEBUG - 2013-11-14 17:13:17 --> Helper loaded: html_helper
DEBUG - 2013-11-14 17:13:17 --> Database Driver Class Initialized
DEBUG - 2013-11-14 17:13:17 --> Session Class Initialized
DEBUG - 2013-11-14 17:13:17 --> Helper loaded: string_helper
DEBUG - 2013-11-14 17:13:17 --> Session routines successfully run
DEBUG - 2013-11-14 17:13:17 --> Form Validation Class Initialized
DEBUG - 2013-11-14 17:13:17 --> Controller Class Initialized
DEBUG - 2013-11-14 17:13:17 --> Model Class Initialized
DEBUG - 2013-11-14 17:13:17 --> Model Class Initialized
DEBUG - 2013-11-14 17:13:17 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 17:13:17 --> after session initialization................
INFO  - 2013-11-14 17:13:17 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 17:13:17 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 17:13:17 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-14 17:13:17 --> inside retrieving locations 
INFO  - 2013-11-14 17:13:17 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 17:13:17 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 17:13:17 --> Final output sent to browser
DEBUG - 2013-11-14 17:13:17 --> Total execution time: 0.0590
DEBUG - 2013-11-14 17:13:22 --> Config Class Initialized
DEBUG - 2013-11-14 17:13:22 --> Hooks Class Initialized
DEBUG - 2013-11-14 17:13:22 --> Utf8 Class Initialized
DEBUG - 2013-11-14 17:13:22 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 17:13:22 --> URI Class Initialized
DEBUG - 2013-11-14 17:13:22 --> Router Class Initialized
DEBUG - 2013-11-14 17:13:22 --> Output Class Initialized
DEBUG - 2013-11-14 17:13:22 --> Security Class Initialized
DEBUG - 2013-11-14 17:13:22 --> Input Class Initialized
DEBUG - 2013-11-14 17:13:22 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 17:13:22 --> Language Class Initialized
DEBUG - 2013-11-14 17:13:22 --> Loader Class Initialized
DEBUG - 2013-11-14 17:13:22 --> Helper loaded: form_helper
DEBUG - 2013-11-14 17:13:22 --> Helper loaded: url_helper
DEBUG - 2013-11-14 17:13:22 --> Helper loaded: html_helper
DEBUG - 2013-11-14 17:13:22 --> Database Driver Class Initialized
DEBUG - 2013-11-14 17:13:22 --> Session Class Initialized
DEBUG - 2013-11-14 17:13:22 --> Helper loaded: string_helper
DEBUG - 2013-11-14 17:13:22 --> Session routines successfully run
DEBUG - 2013-11-14 17:13:22 --> Form Validation Class Initialized
DEBUG - 2013-11-14 17:13:22 --> Controller Class Initialized
DEBUG - 2013-11-14 17:13:22 --> Model Class Initialized
DEBUG - 2013-11-14 17:13:22 --> Model Class Initialized
DEBUG - 2013-11-14 17:13:22 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 17:13:22 --> after session initialization................
ERROR - 2013-11-14 17:13:22 --> Severity: Notice  --> Undefined variable: pharmacyid C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 533
INFO  - 2013-11-14 17:13:22 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>
INFO  - 2013-11-14 17:13:22 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` =  ''
DEBUG - 2013-11-14 17:13:22 --> Final output sent to browser
DEBUG - 2013-11-14 17:13:22 --> Total execution time: 0.0540
DEBUG - 2013-11-14 17:14:28 --> Config Class Initialized
DEBUG - 2013-11-14 17:14:28 --> Hooks Class Initialized
DEBUG - 2013-11-14 17:14:28 --> Utf8 Class Initialized
DEBUG - 2013-11-14 17:14:28 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 17:14:28 --> URI Class Initialized
DEBUG - 2013-11-14 17:14:28 --> Router Class Initialized
DEBUG - 2013-11-14 17:14:28 --> Output Class Initialized
DEBUG - 2013-11-14 17:14:28 --> Security Class Initialized
DEBUG - 2013-11-14 17:14:28 --> Input Class Initialized
DEBUG - 2013-11-14 17:14:28 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 17:14:28 --> Language Class Initialized
DEBUG - 2013-11-14 17:14:28 --> Loader Class Initialized
DEBUG - 2013-11-14 17:14:28 --> Helper loaded: form_helper
DEBUG - 2013-11-14 17:14:28 --> Helper loaded: url_helper
DEBUG - 2013-11-14 17:14:28 --> Helper loaded: html_helper
DEBUG - 2013-11-14 17:14:29 --> Database Driver Class Initialized
DEBUG - 2013-11-14 17:14:29 --> Session Class Initialized
DEBUG - 2013-11-14 17:14:29 --> Helper loaded: string_helper
DEBUG - 2013-11-14 17:14:29 --> Session routines successfully run
DEBUG - 2013-11-14 17:14:29 --> Form Validation Class Initialized
DEBUG - 2013-11-14 17:14:29 --> Controller Class Initialized
DEBUG - 2013-11-14 17:14:29 --> Model Class Initialized
DEBUG - 2013-11-14 17:14:29 --> Model Class Initialized
DEBUG - 2013-11-14 17:14:29 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 17:14:29 --> after session initialization................
INFO  - 2013-11-14 17:14:29 --> after community pharmacy  has been clicked.................
INFO  - 2013-11-14 17:14:29 --> inside retrieving pharmacy beyond id 0
INFO  - 2013-11-14 17:14:29 --> SELECT `p`.`id_pharmacy` as id, `p`.`name`, `p`.`address`, `p`.`telephone`
FROM (`pharmacy` p)
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`
LIMIT 20
INFO  - 2013-11-14 17:14:29 --> inside retrieving locations 
INFO  - 2013-11-14 17:14:29 --> SELECT `l`.`id_location` as id, `l`.`name` as name
FROM (`location` l)
ORDER BY `l`.`name`
DEBUG - 2013-11-14 17:14:29 --> File loaded: ../pharmaray-application/views/communitypharmacy.php
DEBUG - 2013-11-14 17:14:29 --> Final output sent to browser
DEBUG - 2013-11-14 17:14:29 --> Total execution time: 0.0650
DEBUG - 2013-11-14 17:14:58 --> Config Class Initialized
DEBUG - 2013-11-14 17:14:58 --> Hooks Class Initialized
DEBUG - 2013-11-14 17:14:58 --> Utf8 Class Initialized
DEBUG - 2013-11-14 17:14:58 --> UTF-8 Support Enabled
DEBUG - 2013-11-14 17:14:58 --> URI Class Initialized
DEBUG - 2013-11-14 17:14:58 --> Router Class Initialized
DEBUG - 2013-11-14 17:14:58 --> Output Class Initialized
DEBUG - 2013-11-14 17:14:58 --> Security Class Initialized
DEBUG - 2013-11-14 17:14:58 --> Input Class Initialized
DEBUG - 2013-11-14 17:14:58 --> Global POST and COOKIE data sanitized
DEBUG - 2013-11-14 17:14:58 --> Language Class Initialized
DEBUG - 2013-11-14 17:14:58 --> Loader Class Initialized
DEBUG - 2013-11-14 17:14:58 --> Helper loaded: form_helper
DEBUG - 2013-11-14 17:14:58 --> Helper loaded: url_helper
DEBUG - 2013-11-14 17:14:58 --> Helper loaded: html_helper
DEBUG - 2013-11-14 17:14:58 --> Database Driver Class Initialized
DEBUG - 2013-11-14 17:14:58 --> Session Class Initialized
DEBUG - 2013-11-14 17:14:58 --> Helper loaded: string_helper
DEBUG - 2013-11-14 17:14:58 --> Session routines successfully run
DEBUG - 2013-11-14 17:14:58 --> Form Validation Class Initialized
DEBUG - 2013-11-14 17:14:58 --> Controller Class Initialized
DEBUG - 2013-11-14 17:14:58 --> Model Class Initialized
DEBUG - 2013-11-14 17:14:58 --> Model Class Initialized
DEBUG - 2013-11-14 17:14:58 --> Session class already loaded. Second attempt ignored.
INFO  - 2013-11-14 17:14:58 --> after session initialization................
ERROR - 2013-11-14 17:14:58 --> Severity: Notice  --> Undefined variable: pharmacyid C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\sys_admin\user_authorization.php 533
INFO  - 2013-11-14 17:14:58 --> pharmacy id retrieve is >>>>>>>>>>>>>>>>>>>>
INFO  - 2013-11-14 17:14:58 --> SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` =  ''
DEBUG - 2013-11-14 17:14:58 --> Final output sent to browser
DEBUG - 2013-11-14 17:14:58 --> Total execution time: 0.0570
