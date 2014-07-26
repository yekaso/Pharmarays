<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2014-07-25 20:13:48 --> Config Class Initialized
DEBUG - 2014-07-25 20:13:48 --> Hooks Class Initialized
DEBUG - 2014-07-25 20:13:48 --> Utf8 Class Initialized
DEBUG - 2014-07-25 20:13:48 --> UTF-8 Support Enabled
DEBUG - 2014-07-25 20:13:48 --> URI Class Initialized
DEBUG - 2014-07-25 20:13:48 --> Router Class Initialized
DEBUG - 2014-07-25 20:13:48 --> Output Class Initialized
DEBUG - 2014-07-25 20:13:48 --> Security Class Initialized
DEBUG - 2014-07-25 20:13:48 --> Input Class Initialized
DEBUG - 2014-07-25 20:13:48 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-25 20:13:48 --> Language Class Initialized
DEBUG - 2014-07-25 20:13:48 --> Loader Class Initialized
DEBUG - 2014-07-25 20:13:48 --> Helper loaded: form_helper
DEBUG - 2014-07-25 20:13:48 --> Helper loaded: url_helper
DEBUG - 2014-07-25 20:13:48 --> Helper loaded: html_helper
DEBUG - 2014-07-25 20:13:48 --> Database Driver Class Initialized
ERROR - 2014-07-25 20:13:48 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-25 20:13:49 --> Session Class Initialized
DEBUG - 2014-07-25 20:13:49 --> Helper loaded: string_helper
DEBUG - 2014-07-25 20:13:49 --> A session cookie was not found.
DEBUG - 2014-07-25 20:13:49 --> Session routines successfully run
DEBUG - 2014-07-25 20:13:49 --> Form Validation Class Initialized
DEBUG - 2014-07-25 20:13:49 --> Controller Class Initialized
DEBUG - 2014-07-25 20:13:49 --> Model Class Initialized
DEBUG - 2014-07-25 20:13:49 --> Model Class Initialized
DEBUG - 2014-07-25 20:13:49 --> Model Class Initialized
DEBUG - 2014-07-25 20:13:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-25 20:13:49 --> Encrypt Class Initialized
INFO  - 2014-07-25 20:13:49 --> after session initialization................
ERROR - 2014-07-25 20:13:49 --> Severity: Notice  --> Undefined variable: pharmacyid /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-application/controllers/mobile/mobile_controller.php 172
INFO  - 2014-07-25 20:13:49 --> Ajax retrieval for articles ::::::::::===>(SELECT d.id_drug, d.drug_name, d.drug_description, group_concat(bn.name) as drug_company, group_concat(dcc.name) as drug_brandnames, dcc.id_drugcategory as category_id, "true" as notChecked
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dcc`.`brandname_id`
WHERE `d`.`id_drug` not in (SELECT DISTINCT `da`.`drugid_drug` as id
FROM (`drugavailability` da)
WHERE `da`.`pharmacyid_pharmacy` = '')
GROUP BY `id_drug`
ORDER BY `d`.`drug_name`, `bn`.`id_brandname`) union (SELECT d.id_drug, d.drug_name, d.drug_description, group_concat(bn.name, ":", bn.id_brandname) as drug_company, group_concat(dcc.name) as drug_brandnames, dcc.id_drugcategory as category_id, "false" as notChecked
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dcc`.`brandname_id`
WHERE `d`.`id_drug` in (SELECT DISTINCT `da`.`drugid_drug` as id
FROM (`drugavailability` da)
WHERE `da`.`pharmacyid_pharmacy` = '')
GROUP BY `id_drug`
ORDER BY `d`.`drug_name`, `bn`.`id_brandname`)
ERROR - 2014-07-25 20:13:49 --> Severity: Notice  --> Undefined variable: member_id /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-application/controllers/mobile/mobile_controller.php 188
DEBUG - 2014-07-25 20:13:49 --> DB Transaction Failure
ERROR - 2014-07-25 20:13:49 --> Query error: Unknown column 'p.email' in 'field list'
DEBUG - 2014-07-25 20:13:49 --> Language file loaded: language/english/db_lang.php
DEBUG - 2014-07-25 20:14:47 --> Config Class Initialized
DEBUG - 2014-07-25 20:14:47 --> Hooks Class Initialized
DEBUG - 2014-07-25 20:14:47 --> Utf8 Class Initialized
DEBUG - 2014-07-25 20:14:47 --> UTF-8 Support Enabled
DEBUG - 2014-07-25 20:14:47 --> URI Class Initialized
DEBUG - 2014-07-25 20:14:47 --> Router Class Initialized
DEBUG - 2014-07-25 20:14:47 --> Output Class Initialized
DEBUG - 2014-07-25 20:14:47 --> Security Class Initialized
DEBUG - 2014-07-25 20:14:47 --> Input Class Initialized
DEBUG - 2014-07-25 20:14:47 --> Global POST and COOKIE data sanitized
DEBUG - 2014-07-25 20:14:47 --> Language Class Initialized
DEBUG - 2014-07-25 20:14:47 --> Loader Class Initialized
DEBUG - 2014-07-25 20:14:47 --> Helper loaded: form_helper
DEBUG - 2014-07-25 20:14:47 --> Helper loaded: url_helper
DEBUG - 2014-07-25 20:14:47 --> Helper loaded: html_helper
DEBUG - 2014-07-25 20:14:47 --> Database Driver Class Initialized
ERROR - 2014-07-25 20:14:47 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
ERROR - 2014-07-25 20:14:47 --> Severity: Notice  --> mysql_pconnect(): send of 5 bytes failed with errno=32 Broken pipe /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-07-25 20:14:47 --> Session Class Initialized
DEBUG - 2014-07-25 20:14:47 --> Helper loaded: string_helper
DEBUG - 2014-07-25 20:14:47 --> Session routines successfully run
DEBUG - 2014-07-25 20:14:47 --> Form Validation Class Initialized
DEBUG - 2014-07-25 20:14:47 --> Controller Class Initialized
DEBUG - 2014-07-25 20:14:47 --> Model Class Initialized
DEBUG - 2014-07-25 20:14:47 --> Model Class Initialized
DEBUG - 2014-07-25 20:14:47 --> Model Class Initialized
DEBUG - 2014-07-25 20:14:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-07-25 20:14:47 --> Encrypt Class Initialized
INFO  - 2014-07-25 20:14:47 --> after session initialization................
ERROR - 2014-07-25 20:14:47 --> Severity: Notice  --> Undefined variable: limit /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-application/controllers/mobile/mobile_controller.php 273
INFO  - 2014-07-25 20:14:47 --> last pharmacy id is 0
INFO  - 2014-07-25 20:14:47 --> Ajax retrieval ::::::::::===>SELECT p.id_pharmacy as id, p.name, p.telephone, p.address, l.name as location
FROM (`pharmacy` p)
JOIN `location` l ON `p`.`locationid_location` = `l`.`id_location`
WHERE `p`.`id_pharmacy` > 0
ORDER BY `p`.`id_pharmacy`, `p`.`name` desc
LIMIT 0
DEBUG - 2014-07-25 20:14:47 --> Final output sent to browser
DEBUG - 2014-07-25 20:14:47 --> Total execution time: 0.0380
