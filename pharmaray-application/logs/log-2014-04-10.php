<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<<<<<<< HEAD
DEBUG - 2014-04-10 11:44:31 --> Config Class Initialized
DEBUG - 2014-04-10 11:44:31 --> Hooks Class Initialized
DEBUG - 2014-04-10 11:44:31 --> Utf8 Class Initialized
DEBUG - 2014-04-10 11:44:31 --> UTF-8 Support Enabled
DEBUG - 2014-04-10 11:44:31 --> URI Class Initialized
DEBUG - 2014-04-10 11:44:31 --> Router Class Initialized
DEBUG - 2014-04-10 11:44:31 --> Output Class Initialized
DEBUG - 2014-04-10 11:44:31 --> Security Class Initialized
DEBUG - 2014-04-10 11:44:31 --> Input Class Initialized
DEBUG - 2014-04-10 11:44:31 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-10 11:44:31 --> Language Class Initialized
DEBUG - 2014-04-10 11:44:31 --> Loader Class Initialized
DEBUG - 2014-04-10 11:44:31 --> Helper loaded: form_helper
DEBUG - 2014-04-10 11:44:31 --> Helper loaded: url_helper
DEBUG - 2014-04-10 11:44:31 --> Helper loaded: html_helper
DEBUG - 2014-04-10 11:44:31 --> Database Driver Class Initialized
DEBUG - 2014-04-10 11:44:32 --> Session Class Initialized
DEBUG - 2014-04-10 11:44:33 --> Helper loaded: string_helper
DEBUG - 2014-04-10 11:44:33 --> A session cookie was not found.
DEBUG - 2014-04-10 11:44:33 --> Session routines successfully run
DEBUG - 2014-04-10 11:44:33 --> Form Validation Class Initialized
DEBUG - 2014-04-10 11:44:33 --> Controller Class Initialized
DEBUG - 2014-04-10 11:44:33 --> Model Class Initialized
DEBUG - 2014-04-10 11:44:33 --> Model Class Initialized
DEBUG - 2014-04-10 11:44:33 --> Model Class Initialized
DEBUG - 2014-04-10 11:44:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-10 11:44:33 --> Encrypt Class Initialized
INFO  - 2014-04-10 11:44:33 --> after session initialization................
ERROR - 2014-04-10 11:44:33 --> Severity: Notice  --> Undefined variable: pharmacyid C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\mobile\mobile_controller.php 172
INFO  - 2014-04-10 11:44:38 --> Ajax retrieval for articles ::::::::::===>(SELECT d.id_drug, d.drug_name, d.drug_description, group_concat(bn.name) as drug_company, group_concat(dcc.name) as drug_brandnames, dcc.id_drugcategory as category_id, "true" as notChecked
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
ERROR - 2014-04-10 11:44:38 --> Severity: Notice  --> Undefined variable: member_id C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\mobile\mobile_controller.php 188
DEBUG - 2014-04-10 11:44:39 --> DB Transaction Failure
ERROR - 2014-04-10 11:44:39 --> Query error: Unknown column 'p.email' in 'field list'
DEBUG - 2014-04-10 11:44:39 --> Language file loaded: language/english/db_lang.php
DEBUG - 2014-04-10 12:02:26 --> Config Class Initialized
DEBUG - 2014-04-10 12:02:26 --> Hooks Class Initialized
DEBUG - 2014-04-10 12:02:26 --> Utf8 Class Initialized
DEBUG - 2014-04-10 12:02:26 --> UTF-8 Support Enabled
DEBUG - 2014-04-10 12:02:26 --> URI Class Initialized
DEBUG - 2014-04-10 12:02:26 --> Router Class Initialized
DEBUG - 2014-04-10 12:02:26 --> Output Class Initialized
DEBUG - 2014-04-10 12:02:26 --> Security Class Initialized
DEBUG - 2014-04-10 12:02:26 --> Input Class Initialized
DEBUG - 2014-04-10 12:02:26 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-10 12:02:26 --> Language Class Initialized
DEBUG - 2014-04-10 12:02:26 --> Loader Class Initialized
DEBUG - 2014-04-10 12:02:26 --> Helper loaded: form_helper
DEBUG - 2014-04-10 12:02:26 --> Helper loaded: url_helper
DEBUG - 2014-04-10 12:02:26 --> Helper loaded: html_helper
DEBUG - 2014-04-10 12:02:26 --> Database Driver Class Initialized
DEBUG - 2014-04-10 12:02:26 --> Session Class Initialized
DEBUG - 2014-04-10 12:02:26 --> Helper loaded: string_helper
DEBUG - 2014-04-10 12:02:26 --> A session cookie was not found.
DEBUG - 2014-04-10 12:02:26 --> Session routines successfully run
DEBUG - 2014-04-10 12:02:26 --> Form Validation Class Initialized
DEBUG - 2014-04-10 12:02:26 --> Controller Class Initialized
DEBUG - 2014-04-10 12:02:26 --> Model Class Initialized
DEBUG - 2014-04-10 12:02:26 --> Model Class Initialized
DEBUG - 2014-04-10 12:02:26 --> Model Class Initialized
DEBUG - 2014-04-10 12:02:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-10 12:02:26 --> Encrypt Class Initialized
INFO  - 2014-04-10 12:02:26 --> after session initialization................
ERROR - 2014-04-10 12:02:26 --> Severity: Notice  --> Undefined variable: pharmacyid C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\mobile\mobile_controller.php 172
INFO  - 2014-04-10 12:02:26 --> Ajax retrieval for articles ::::::::::===>(SELECT d.id_drug, d.drug_name, d.drug_description, group_concat(bn.name) as drug_company, group_concat(dcc.name) as drug_brandnames, dcc.id_drugcategory as category_id, "true" as notChecked
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
ERROR - 2014-04-10 12:02:26 --> Severity: Notice  --> Undefined variable: member_id C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\mobile\mobile_controller.php 188
DEBUG - 2014-04-10 12:02:26 --> DB Transaction Failure
ERROR - 2014-04-10 12:02:26 --> Query error: Unknown column 'p.email' in 'field list'
DEBUG - 2014-04-10 12:02:26 --> Language file loaded: language/english/db_lang.php
DEBUG - 2014-04-10 12:06:28 --> Config Class Initialized
DEBUG - 2014-04-10 12:06:28 --> Hooks Class Initialized
DEBUG - 2014-04-10 12:06:28 --> Utf8 Class Initialized
DEBUG - 2014-04-10 12:06:28 --> UTF-8 Support Enabled
DEBUG - 2014-04-10 12:06:28 --> URI Class Initialized
DEBUG - 2014-04-10 12:06:28 --> Router Class Initialized
DEBUG - 2014-04-10 12:06:28 --> Output Class Initialized
DEBUG - 2014-04-10 12:06:28 --> Security Class Initialized
DEBUG - 2014-04-10 12:06:28 --> Input Class Initialized
DEBUG - 2014-04-10 12:06:28 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-10 12:06:28 --> Language Class Initialized
DEBUG - 2014-04-10 12:06:28 --> Loader Class Initialized
DEBUG - 2014-04-10 12:06:28 --> Helper loaded: form_helper
DEBUG - 2014-04-10 12:06:28 --> Helper loaded: url_helper
DEBUG - 2014-04-10 12:06:28 --> Helper loaded: html_helper
DEBUG - 2014-04-10 12:06:28 --> Database Driver Class Initialized
DEBUG - 2014-04-10 12:06:28 --> Session Class Initialized
DEBUG - 2014-04-10 12:06:28 --> Helper loaded: string_helper
DEBUG - 2014-04-10 12:06:28 --> A session cookie was not found.
DEBUG - 2014-04-10 12:06:28 --> Session routines successfully run
DEBUG - 2014-04-10 12:06:28 --> Form Validation Class Initialized
DEBUG - 2014-04-10 12:06:28 --> Controller Class Initialized
DEBUG - 2014-04-10 12:06:28 --> Model Class Initialized
DEBUG - 2014-04-10 12:06:28 --> Model Class Initialized
DEBUG - 2014-04-10 12:06:28 --> Model Class Initialized
DEBUG - 2014-04-10 12:06:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-10 12:06:28 --> Encrypt Class Initialized
INFO  - 2014-04-10 12:06:28 --> after session initialization................
ERROR - 2014-04-10 12:06:28 --> Severity: Notice  --> Undefined variable: pharmacyid C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\mobile\mobile_controller.php 172
INFO  - 2014-04-10 12:06:28 --> Ajax retrieval for articles ::::::::::===>(SELECT d.id_drug, d.drug_name, d.drug_description, group_concat(bn.name) as drug_company, group_concat(dcc.name) as drug_brandnames, dcc.id_drugcategory as category_id, "true" as notChecked
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
ERROR - 2014-04-10 12:06:28 --> Severity: Notice  --> Undefined variable: member_id C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\mobile\mobile_controller.php 188
DEBUG - 2014-04-10 12:06:28 --> DB Transaction Failure
ERROR - 2014-04-10 12:06:28 --> Query error: Unknown column 'p.email' in 'field list'
DEBUG - 2014-04-10 12:06:28 --> Language file loaded: language/english/db_lang.php
DEBUG - 2014-04-10 12:08:41 --> Config Class Initialized
DEBUG - 2014-04-10 12:08:41 --> Hooks Class Initialized
DEBUG - 2014-04-10 12:08:41 --> Utf8 Class Initialized
DEBUG - 2014-04-10 12:08:41 --> UTF-8 Support Enabled
DEBUG - 2014-04-10 12:08:41 --> URI Class Initialized
DEBUG - 2014-04-10 12:08:41 --> Router Class Initialized
DEBUG - 2014-04-10 12:08:41 --> Output Class Initialized
DEBUG - 2014-04-10 12:08:41 --> Security Class Initialized
DEBUG - 2014-04-10 12:08:41 --> Input Class Initialized
DEBUG - 2014-04-10 12:08:41 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-10 12:08:41 --> Language Class Initialized
DEBUG - 2014-04-10 12:08:41 --> Loader Class Initialized
DEBUG - 2014-04-10 12:08:41 --> Helper loaded: form_helper
DEBUG - 2014-04-10 12:08:41 --> Helper loaded: url_helper
DEBUG - 2014-04-10 12:08:41 --> Helper loaded: html_helper
DEBUG - 2014-04-10 12:08:41 --> Database Driver Class Initialized
DEBUG - 2014-04-10 12:08:41 --> Session Class Initialized
DEBUG - 2014-04-10 12:08:41 --> Helper loaded: string_helper
DEBUG - 2014-04-10 12:08:41 --> A session cookie was not found.
DEBUG - 2014-04-10 12:08:41 --> Session routines successfully run
DEBUG - 2014-04-10 12:08:41 --> Form Validation Class Initialized
DEBUG - 2014-04-10 12:08:41 --> Controller Class Initialized
DEBUG - 2014-04-10 12:08:41 --> Model Class Initialized
DEBUG - 2014-04-10 12:08:41 --> Model Class Initialized
DEBUG - 2014-04-10 12:08:41 --> Model Class Initialized
DEBUG - 2014-04-10 12:08:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-10 12:08:41 --> Encrypt Class Initialized
INFO  - 2014-04-10 12:08:41 --> after session initialization................
ERROR - 2014-04-10 12:08:41 --> Severity: Notice  --> Undefined variable: pharmacyid C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\mobile\mobile_controller.php 172
INFO  - 2014-04-10 12:08:41 --> Ajax retrieval for articles ::::::::::===>(SELECT d.id_drug, d.drug_name, d.drug_description, group_concat(bn.name) as drug_company, group_concat(dcc.name) as drug_brandnames, dcc.id_drugcategory as category_id, "true" as notChecked
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
ERROR - 2014-04-10 12:08:41 --> Severity: Notice  --> Undefined variable: member_id C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\mobile\mobile_controller.php 188
DEBUG - 2014-04-10 12:08:41 --> DB Transaction Failure
ERROR - 2014-04-10 12:08:41 --> Query error: Unknown column 'p.email' in 'field list'
DEBUG - 2014-04-10 12:08:41 --> Language file loaded: language/english/db_lang.php
DEBUG - 2014-04-10 12:14:39 --> Config Class Initialized
DEBUG - 2014-04-10 12:14:39 --> Hooks Class Initialized
DEBUG - 2014-04-10 12:14:39 --> Utf8 Class Initialized
DEBUG - 2014-04-10 12:14:39 --> UTF-8 Support Enabled
DEBUG - 2014-04-10 12:14:39 --> URI Class Initialized
DEBUG - 2014-04-10 12:14:39 --> Router Class Initialized
DEBUG - 2014-04-10 12:14:39 --> Output Class Initialized
DEBUG - 2014-04-10 12:14:39 --> Security Class Initialized
DEBUG - 2014-04-10 12:14:39 --> Input Class Initialized
DEBUG - 2014-04-10 12:14:39 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-10 12:14:39 --> Language Class Initialized
DEBUG - 2014-04-10 12:14:39 --> Loader Class Initialized
DEBUG - 2014-04-10 12:14:39 --> Helper loaded: form_helper
DEBUG - 2014-04-10 12:14:39 --> Helper loaded: url_helper
DEBUG - 2014-04-10 12:14:39 --> Helper loaded: html_helper
DEBUG - 2014-04-10 12:14:39 --> Database Driver Class Initialized
DEBUG - 2014-04-10 12:14:39 --> Session Class Initialized
DEBUG - 2014-04-10 12:14:39 --> Helper loaded: string_helper
DEBUG - 2014-04-10 12:14:39 --> A session cookie was not found.
DEBUG - 2014-04-10 12:14:39 --> Session routines successfully run
DEBUG - 2014-04-10 12:14:39 --> Form Validation Class Initialized
DEBUG - 2014-04-10 12:14:39 --> Controller Class Initialized
DEBUG - 2014-04-10 12:14:39 --> Model Class Initialized
DEBUG - 2014-04-10 12:14:39 --> Model Class Initialized
DEBUG - 2014-04-10 12:14:39 --> Model Class Initialized
DEBUG - 2014-04-10 12:14:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-10 12:14:39 --> Encrypt Class Initialized
INFO  - 2014-04-10 12:14:39 --> after session initialization................
ERROR - 2014-04-10 12:14:39 --> Severity: Notice  --> Undefined variable: pharmacyid C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\mobile\mobile_controller.php 172
INFO  - 2014-04-10 12:14:39 --> Ajax retrieval for articles ::::::::::===>(SELECT d.id_drug, d.drug_name, d.drug_description, group_concat(bn.name) as drug_company, group_concat(dcc.name) as drug_brandnames, dcc.id_drugcategory as category_id, "true" as notChecked
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
ERROR - 2014-04-10 12:14:39 --> Severity: Notice  --> Undefined variable: member_id C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\mobile\mobile_controller.php 188
DEBUG - 2014-04-10 12:14:39 --> DB Transaction Failure
ERROR - 2014-04-10 12:14:39 --> Query error: Unknown column 'p.email' in 'field list'
DEBUG - 2014-04-10 12:14:39 --> Language file loaded: language/english/db_lang.php
DEBUG - 2014-04-10 12:15:57 --> Config Class Initialized
DEBUG - 2014-04-10 12:15:57 --> Hooks Class Initialized
DEBUG - 2014-04-10 12:15:57 --> Utf8 Class Initialized
DEBUG - 2014-04-10 12:15:57 --> UTF-8 Support Enabled
DEBUG - 2014-04-10 12:15:57 --> URI Class Initialized
DEBUG - 2014-04-10 12:15:57 --> Router Class Initialized
DEBUG - 2014-04-10 12:15:57 --> Output Class Initialized
DEBUG - 2014-04-10 12:15:57 --> Security Class Initialized
DEBUG - 2014-04-10 12:15:57 --> Input Class Initialized
DEBUG - 2014-04-10 12:15:57 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-10 12:15:57 --> Language Class Initialized
DEBUG - 2014-04-10 12:15:57 --> Loader Class Initialized
DEBUG - 2014-04-10 12:15:57 --> Helper loaded: form_helper
DEBUG - 2014-04-10 12:15:57 --> Helper loaded: url_helper
DEBUG - 2014-04-10 12:15:57 --> Helper loaded: html_helper
DEBUG - 2014-04-10 12:15:57 --> Database Driver Class Initialized
DEBUG - 2014-04-10 12:15:57 --> Session Class Initialized
DEBUG - 2014-04-10 12:15:57 --> Helper loaded: string_helper
DEBUG - 2014-04-10 12:15:57 --> A session cookie was not found.
DEBUG - 2014-04-10 12:15:57 --> Session routines successfully run
DEBUG - 2014-04-10 12:15:57 --> Form Validation Class Initialized
DEBUG - 2014-04-10 12:15:57 --> Controller Class Initialized
DEBUG - 2014-04-10 12:15:57 --> Model Class Initialized
DEBUG - 2014-04-10 12:15:57 --> Model Class Initialized
DEBUG - 2014-04-10 12:15:57 --> Model Class Initialized
DEBUG - 2014-04-10 12:15:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-10 12:15:57 --> Encrypt Class Initialized
INFO  - 2014-04-10 12:15:57 --> after session initialization................
ERROR - 2014-04-10 12:15:57 --> Severity: Notice  --> Undefined variable: pharmacyid C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\mobile\mobile_controller.php 172
INFO  - 2014-04-10 12:15:57 --> Ajax retrieval for articles ::::::::::===>(SELECT d.id_drug, d.drug_name, d.drug_description, group_concat(bn.name) as drug_company, group_concat(dcc.name) as drug_brandnames, dcc.id_drugcategory as category_id, "true" as notChecked
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
ERROR - 2014-04-10 12:15:57 --> Severity: Notice  --> Undefined variable: member_id C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\mobile\mobile_controller.php 188
DEBUG - 2014-04-10 12:15:57 --> DB Transaction Failure
ERROR - 2014-04-10 12:15:57 --> Query error: Unknown column 'p.email' in 'field list'
DEBUG - 2014-04-10 12:15:57 --> Language file loaded: language/english/db_lang.php
DEBUG - 2014-04-10 12:17:35 --> Config Class Initialized
DEBUG - 2014-04-10 12:17:35 --> Hooks Class Initialized
DEBUG - 2014-04-10 12:17:35 --> Utf8 Class Initialized
DEBUG - 2014-04-10 12:17:35 --> UTF-8 Support Enabled
DEBUG - 2014-04-10 12:17:35 --> URI Class Initialized
DEBUG - 2014-04-10 12:17:35 --> Router Class Initialized
DEBUG - 2014-04-10 12:17:35 --> Output Class Initialized
DEBUG - 2014-04-10 12:17:35 --> Security Class Initialized
DEBUG - 2014-04-10 12:17:35 --> Input Class Initialized
DEBUG - 2014-04-10 12:17:35 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-10 12:17:35 --> Language Class Initialized
DEBUG - 2014-04-10 12:17:35 --> Loader Class Initialized
DEBUG - 2014-04-10 12:17:35 --> Helper loaded: form_helper
DEBUG - 2014-04-10 12:17:35 --> Helper loaded: url_helper
DEBUG - 2014-04-10 12:17:35 --> Helper loaded: html_helper
DEBUG - 2014-04-10 12:17:35 --> Database Driver Class Initialized
DEBUG - 2014-04-10 12:17:35 --> Session Class Initialized
DEBUG - 2014-04-10 12:17:35 --> Helper loaded: string_helper
DEBUG - 2014-04-10 12:17:35 --> A session cookie was not found.
DEBUG - 2014-04-10 12:17:35 --> Session routines successfully run
DEBUG - 2014-04-10 12:17:35 --> Form Validation Class Initialized
DEBUG - 2014-04-10 12:17:35 --> Controller Class Initialized
DEBUG - 2014-04-10 12:17:35 --> Model Class Initialized
DEBUG - 2014-04-10 12:17:35 --> Model Class Initialized
DEBUG - 2014-04-10 12:17:35 --> Model Class Initialized
DEBUG - 2014-04-10 12:17:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-10 12:17:35 --> Encrypt Class Initialized
INFO  - 2014-04-10 12:17:35 --> after session initialization................
ERROR - 2014-04-10 12:17:35 --> Severity: Notice  --> Undefined variable: pharmacyid C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\mobile\mobile_controller.php 172
INFO  - 2014-04-10 12:17:35 --> Ajax retrieval for articles ::::::::::===>(SELECT d.id_drug, d.drug_name, d.drug_description, group_concat(bn.name) as drug_company, group_concat(dcc.name) as drug_brandnames, dcc.id_drugcategory as category_id, "true" as notChecked
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
ERROR - 2014-04-10 12:17:35 --> Severity: Notice  --> Undefined variable: member_id C:\xampp\htdocs\Pharmarays\pharmaray-application\controllers\mobile\mobile_controller.php 188
DEBUG - 2014-04-10 12:17:35 --> DB Transaction Failure
ERROR - 2014-04-10 12:17:35 --> Query error: Unknown column 'p.email' in 'field list'
DEBUG - 2014-04-10 12:17:35 --> Language file loaded: language/english/db_lang.php
DEBUG - 2014-04-10 12:20:01 --> Config Class Initialized
DEBUG - 2014-04-10 12:20:01 --> Hooks Class Initialized
DEBUG - 2014-04-10 12:20:01 --> Utf8 Class Initialized
DEBUG - 2014-04-10 12:20:01 --> UTF-8 Support Enabled
DEBUG - 2014-04-10 12:20:01 --> URI Class Initialized
DEBUG - 2014-04-10 12:20:01 --> Router Class Initialized
DEBUG - 2014-04-10 12:20:01 --> Output Class Initialized
DEBUG - 2014-04-10 12:20:01 --> Security Class Initialized
DEBUG - 2014-04-10 12:20:01 --> Input Class Initialized
DEBUG - 2014-04-10 12:20:01 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-10 12:20:01 --> Language Class Initialized
DEBUG - 2014-04-10 12:20:01 --> Loader Class Initialized
DEBUG - 2014-04-10 12:20:01 --> Helper loaded: form_helper
DEBUG - 2014-04-10 12:20:01 --> Helper loaded: url_helper
DEBUG - 2014-04-10 12:20:01 --> Helper loaded: html_helper
DEBUG - 2014-04-10 12:20:01 --> Database Driver Class Initialized
DEBUG - 2014-04-10 12:20:01 --> Session Class Initialized
DEBUG - 2014-04-10 12:20:01 --> Helper loaded: string_helper
DEBUG - 2014-04-10 12:20:01 --> A session cookie was not found.
DEBUG - 2014-04-10 12:20:01 --> Session routines successfully run
DEBUG - 2014-04-10 12:20:01 --> Form Validation Class Initialized
DEBUG - 2014-04-10 12:20:01 --> Controller Class Initialized
DEBUG - 2014-04-10 12:20:01 --> Model Class Initialized
DEBUG - 2014-04-10 12:20:01 --> Model Class Initialized
DEBUG - 2014-04-10 12:20:01 --> Model Class Initialized
DEBUG - 2014-04-10 12:20:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-10 12:20:01 --> Encrypt Class Initialized
INFO  - 2014-04-10 12:20:01 --> after session initialization................
INFO  - 2014-04-10 12:20:02 --> Ajax retrieval for articles ::::::::::===>(SELECT d.id_drug, d.drug_name, d.drug_description, group_concat(bn.name) as drug_company, group_concat(dcc.name) as drug_brandnames, dcc.id_drugcategory as category_id, "true" as notChecked
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dcc`.`brandname_id`
WHERE `d`.`id_drug` not in (SELECT DISTINCT `da`.`drugid_drug` as id
FROM (`drugavailability` da)
WHERE `da`.`pharmacyid_pharmacy` = '1')
GROUP BY `id_drug`
ORDER BY `d`.`drug_name`, `bn`.`id_brandname`) union (SELECT d.id_drug, d.drug_name, d.drug_description, group_concat(bn.name, ":", bn.id_brandname) as drug_company, group_concat(dcc.name) as drug_brandnames, dcc.id_drugcategory as category_id, "false" as notChecked
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dcc`.`brandname_id`
WHERE `d`.`id_drug` in (SELECT DISTINCT `da`.`drugid_drug` as id
FROM (`drugavailability` da)
WHERE `da`.`pharmacyid_pharmacy` = '1')
GROUP BY `id_drug`
ORDER BY `d`.`drug_name`, `bn`.`id_brandname`)
DEBUG - 2014-04-10 12:20:02 --> DB Transaction Failure
ERROR - 2014-04-10 12:20:02 --> Query error: Unknown column 'p.email' in 'field list'
DEBUG - 2014-04-10 12:20:02 --> Language file loaded: language/english/db_lang.php
DEBUG - 2014-04-10 12:24:13 --> Config Class Initialized
DEBUG - 2014-04-10 12:24:13 --> Hooks Class Initialized
DEBUG - 2014-04-10 12:24:13 --> Utf8 Class Initialized
DEBUG - 2014-04-10 12:24:13 --> UTF-8 Support Enabled
DEBUG - 2014-04-10 12:24:13 --> URI Class Initialized
DEBUG - 2014-04-10 12:24:13 --> Router Class Initialized
DEBUG - 2014-04-10 12:24:13 --> Output Class Initialized
DEBUG - 2014-04-10 12:24:13 --> Security Class Initialized
DEBUG - 2014-04-10 12:24:13 --> Input Class Initialized
DEBUG - 2014-04-10 12:24:13 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-10 12:24:13 --> Language Class Initialized
DEBUG - 2014-04-10 12:24:13 --> Loader Class Initialized
DEBUG - 2014-04-10 12:24:13 --> Helper loaded: form_helper
DEBUG - 2014-04-10 12:24:13 --> Helper loaded: url_helper
DEBUG - 2014-04-10 12:24:13 --> Helper loaded: html_helper
DEBUG - 2014-04-10 12:24:13 --> Database Driver Class Initialized
DEBUG - 2014-04-10 12:24:13 --> Session Class Initialized
DEBUG - 2014-04-10 12:24:13 --> Helper loaded: string_helper
DEBUG - 2014-04-10 12:24:13 --> A session cookie was not found.
DEBUG - 2014-04-10 12:24:13 --> Session routines successfully run
DEBUG - 2014-04-10 12:24:13 --> Form Validation Class Initialized
DEBUG - 2014-04-10 12:24:13 --> Controller Class Initialized
DEBUG - 2014-04-10 12:24:13 --> Model Class Initialized
DEBUG - 2014-04-10 12:24:13 --> Model Class Initialized
DEBUG - 2014-04-10 12:24:13 --> Model Class Initialized
DEBUG - 2014-04-10 12:24:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-10 12:24:13 --> Encrypt Class Initialized
INFO  - 2014-04-10 12:24:13 --> after session initialization................
INFO  - 2014-04-10 12:24:13 --> Ajax retrieval for articles ::::::::::===>(SELECT d.id_drug, d.drug_name, d.drug_description, group_concat(bn.name) as drug_company, group_concat(dcc.name) as drug_brandnames, dcc.id_drugcategory as category_id, "true" as notChecked
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dcc`.`brandname_id`
WHERE `d`.`id_drug` not in (SELECT DISTINCT `da`.`drugid_drug` as id
FROM (`drugavailability` da)
WHERE `da`.`pharmacyid_pharmacy` = '1')
GROUP BY `id_drug`
ORDER BY `d`.`drug_name`, `bn`.`id_brandname`) union (SELECT d.id_drug, d.drug_name, d.drug_description, group_concat(bn.name, ":", bn.id_brandname) as drug_company, group_concat(dcc.name) as drug_brandnames, dcc.id_drugcategory as category_id, "false" as notChecked
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dcc`.`brandname_id`
WHERE `d`.`id_drug` in (SELECT DISTINCT `da`.`drugid_drug` as id
FROM (`drugavailability` da)
WHERE `da`.`pharmacyid_pharmacy` = '1')
GROUP BY `id_drug`
ORDER BY `d`.`drug_name`, `bn`.`id_brandname`)
DEBUG - 2014-04-10 12:24:13 --> DB Transaction Failure
ERROR - 2014-04-10 12:24:13 --> Query error: Unknown column 'p.email' in 'field list'
DEBUG - 2014-04-10 12:24:13 --> Language file loaded: language/english/db_lang.php
DEBUG - 2014-04-10 12:27:21 --> Config Class Initialized
DEBUG - 2014-04-10 12:27:21 --> Hooks Class Initialized
DEBUG - 2014-04-10 12:27:21 --> Utf8 Class Initialized
DEBUG - 2014-04-10 12:27:21 --> UTF-8 Support Enabled
DEBUG - 2014-04-10 12:27:21 --> URI Class Initialized
DEBUG - 2014-04-10 12:27:21 --> Router Class Initialized
DEBUG - 2014-04-10 12:27:21 --> Output Class Initialized
DEBUG - 2014-04-10 12:27:21 --> Security Class Initialized
DEBUG - 2014-04-10 12:27:21 --> Input Class Initialized
DEBUG - 2014-04-10 12:27:21 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-10 12:27:21 --> Language Class Initialized
DEBUG - 2014-04-10 12:27:21 --> Loader Class Initialized
DEBUG - 2014-04-10 12:27:21 --> Helper loaded: form_helper
DEBUG - 2014-04-10 12:27:21 --> Helper loaded: url_helper
DEBUG - 2014-04-10 12:27:21 --> Helper loaded: html_helper
DEBUG - 2014-04-10 12:27:21 --> Database Driver Class Initialized
DEBUG - 2014-04-10 12:27:21 --> Session Class Initialized
DEBUG - 2014-04-10 12:27:21 --> Helper loaded: string_helper
DEBUG - 2014-04-10 12:27:21 --> A session cookie was not found.
DEBUG - 2014-04-10 12:27:21 --> Session routines successfully run
DEBUG - 2014-04-10 12:27:21 --> Form Validation Class Initialized
DEBUG - 2014-04-10 12:27:21 --> Controller Class Initialized
DEBUG - 2014-04-10 12:27:21 --> Model Class Initialized
DEBUG - 2014-04-10 12:27:21 --> Model Class Initialized
DEBUG - 2014-04-10 12:27:21 --> Model Class Initialized
DEBUG - 2014-04-10 12:27:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-10 12:27:21 --> Encrypt Class Initialized
INFO  - 2014-04-10 12:27:21 --> after session initialization................
INFO  - 2014-04-10 12:27:21 --> Ajax retrieval for articles ::::::::::===>(SELECT d.id_drug, d.drug_name, d.drug_description, group_concat(bn.name) as drug_company, group_concat(dcc.name) as drug_brandnames, dcc.id_drugcategory as category_id, "true" as notChecked
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dcc`.`brandname_id`
WHERE `d`.`id_drug` not in (SELECT DISTINCT `da`.`drugid_drug` as id
FROM (`drugavailability` da)
WHERE `da`.`pharmacyid_pharmacy` = '1')
GROUP BY `id_drug`
ORDER BY `d`.`drug_name`, `bn`.`id_brandname`) union (SELECT d.id_drug, d.drug_name, d.drug_description, group_concat(bn.name, ":", bn.id_brandname) as drug_company, group_concat(dcc.name) as drug_brandnames, dcc.id_drugcategory as category_id, "false" as notChecked
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dcc`.`brandname_id`
WHERE `d`.`id_drug` in (SELECT DISTINCT `da`.`drugid_drug` as id
FROM (`drugavailability` da)
WHERE `da`.`pharmacyid_pharmacy` = '1')
GROUP BY `id_drug`
ORDER BY `d`.`drug_name`, `bn`.`id_brandname`)
DEBUG - 2014-04-10 12:27:21 --> DB Transaction Failure
ERROR - 2014-04-10 12:27:21 --> Query error: Unknown column 'p.email' in 'field list'
DEBUG - 2014-04-10 12:27:21 --> Language file loaded: language/english/db_lang.php
DEBUG - 2014-04-10 12:38:20 --> Config Class Initialized
DEBUG - 2014-04-10 12:38:20 --> Hooks Class Initialized
DEBUG - 2014-04-10 12:38:20 --> Utf8 Class Initialized
DEBUG - 2014-04-10 12:38:20 --> UTF-8 Support Enabled
DEBUG - 2014-04-10 12:38:20 --> URI Class Initialized
DEBUG - 2014-04-10 12:38:20 --> Router Class Initialized
DEBUG - 2014-04-10 12:38:20 --> Output Class Initialized
DEBUG - 2014-04-10 12:38:20 --> Security Class Initialized
DEBUG - 2014-04-10 12:38:20 --> Input Class Initialized
DEBUG - 2014-04-10 12:38:20 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-10 12:38:20 --> Language Class Initialized
DEBUG - 2014-04-10 12:38:20 --> Loader Class Initialized
DEBUG - 2014-04-10 12:38:20 --> Helper loaded: form_helper
DEBUG - 2014-04-10 12:38:20 --> Helper loaded: url_helper
DEBUG - 2014-04-10 12:38:20 --> Helper loaded: html_helper
DEBUG - 2014-04-10 12:38:20 --> Database Driver Class Initialized
DEBUG - 2014-04-10 12:38:21 --> Session Class Initialized
DEBUG - 2014-04-10 12:38:21 --> Helper loaded: string_helper
DEBUG - 2014-04-10 12:38:21 --> A session cookie was not found.
DEBUG - 2014-04-10 12:38:21 --> Session routines successfully run
DEBUG - 2014-04-10 12:38:21 --> Form Validation Class Initialized
DEBUG - 2014-04-10 12:38:21 --> Controller Class Initialized
DEBUG - 2014-04-10 12:38:21 --> Model Class Initialized
DEBUG - 2014-04-10 12:38:21 --> Model Class Initialized
DEBUG - 2014-04-10 12:38:21 --> Model Class Initialized
DEBUG - 2014-04-10 12:38:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-10 12:38:21 --> Encrypt Class Initialized
INFO  - 2014-04-10 12:38:21 --> after session initialization................
INFO  - 2014-04-10 12:38:21 --> Ajax retrieval for articles ::::::::::===>(SELECT d.id_drug, d.drug_name, d.drug_description, group_concat(bn.name) as drug_company, group_concat(dcc.name) as drug_brandnames, dcc.id_drugcategory as category_id, "true" as notChecked
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dcc`.`brandname_id`
WHERE `d`.`id_drug` not in (SELECT DISTINCT `da`.`drugid_drug` as id
FROM (`drugavailability` da)
WHERE `da`.`pharmacyid_pharmacy` = '1')
GROUP BY `id_drug`
ORDER BY `d`.`drug_name`, `bn`.`id_brandname`) union (SELECT d.id_drug, d.drug_name, d.drug_description, group_concat(bn.name, ":", bn.id_brandname) as drug_company, group_concat(dcc.name) as drug_brandnames, dcc.id_drugcategory as category_id, "false" as notChecked
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dcc`.`brandname_id`
WHERE `d`.`id_drug` in (SELECT DISTINCT `da`.`drugid_drug` as id
FROM (`drugavailability` da)
WHERE `da`.`pharmacyid_pharmacy` = '1')
GROUP BY `id_drug`
ORDER BY `d`.`drug_name`, `bn`.`id_brandname`)
DEBUG - 2014-04-10 12:38:21 --> DB Transaction Failure
ERROR - 2014-04-10 12:38:21 --> Query error: Unknown column 'p.email' in 'field list'
DEBUG - 2014-04-10 12:38:21 --> Language file loaded: language/english/db_lang.php
DEBUG - 2014-04-10 12:40:41 --> Config Class Initialized
DEBUG - 2014-04-10 12:40:41 --> Hooks Class Initialized
DEBUG - 2014-04-10 12:40:41 --> Utf8 Class Initialized
DEBUG - 2014-04-10 12:40:41 --> UTF-8 Support Enabled
DEBUG - 2014-04-10 12:40:41 --> URI Class Initialized
DEBUG - 2014-04-10 12:40:41 --> Router Class Initialized
DEBUG - 2014-04-10 12:40:41 --> Output Class Initialized
DEBUG - 2014-04-10 12:40:41 --> Security Class Initialized
DEBUG - 2014-04-10 12:40:41 --> Input Class Initialized
DEBUG - 2014-04-10 12:40:41 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-10 12:40:41 --> Language Class Initialized
DEBUG - 2014-04-10 12:40:41 --> Loader Class Initialized
DEBUG - 2014-04-10 12:40:41 --> Helper loaded: form_helper
DEBUG - 2014-04-10 12:40:41 --> Helper loaded: url_helper
DEBUG - 2014-04-10 12:40:41 --> Helper loaded: html_helper
DEBUG - 2014-04-10 12:40:41 --> Database Driver Class Initialized
DEBUG - 2014-04-10 12:40:41 --> Session Class Initialized
DEBUG - 2014-04-10 12:40:41 --> Helper loaded: string_helper
DEBUG - 2014-04-10 12:40:41 --> A session cookie was not found.
DEBUG - 2014-04-10 12:40:41 --> Session routines successfully run
DEBUG - 2014-04-10 12:40:41 --> Form Validation Class Initialized
DEBUG - 2014-04-10 12:40:41 --> Controller Class Initialized
DEBUG - 2014-04-10 12:40:41 --> Model Class Initialized
DEBUG - 2014-04-10 12:40:41 --> Model Class Initialized
DEBUG - 2014-04-10 12:40:41 --> Model Class Initialized
DEBUG - 2014-04-10 12:40:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-10 12:40:41 --> Encrypt Class Initialized
INFO  - 2014-04-10 12:40:41 --> after session initialization................
INFO  - 2014-04-10 12:40:41 --> Ajax retrieval for articles ::::::::::===>(SELECT d.id_drug, d.drug_name, d.drug_description, group_concat(bn.name) as drug_company, group_concat(dcc.name) as drug_brandnames, dcc.id_drugcategory as category_id, "true" as notChecked
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dcc`.`brandname_id`
WHERE `d`.`id_drug` not in (SELECT DISTINCT `da`.`drugid_drug` as id
FROM (`drugavailability` da)
WHERE `da`.`pharmacyid_pharmacy` = '1')
GROUP BY `id_drug`
ORDER BY `d`.`drug_name`, `bn`.`id_brandname`) union (SELECT d.id_drug, d.drug_name, d.drug_description, group_concat(bn.name, ":", bn.id_brandname) as drug_company, group_concat(dcc.name) as drug_brandnames, dcc.id_drugcategory as category_id, "false" as notChecked
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dcc`.`brandname_id`
WHERE `d`.`id_drug` in (SELECT DISTINCT `da`.`drugid_drug` as id
FROM (`drugavailability` da)
WHERE `da`.`pharmacyid_pharmacy` = '1')
GROUP BY `id_drug`
ORDER BY `d`.`drug_name`, `bn`.`id_brandname`)
DEBUG - 2014-04-10 12:40:41 --> DB Transaction Failure
ERROR - 2014-04-10 12:40:41 --> Query error: Unknown column 'p.longitude' in 'field list'
DEBUG - 2014-04-10 12:40:41 --> Language file loaded: language/english/db_lang.php
DEBUG - 2014-04-10 12:41:43 --> Config Class Initialized
DEBUG - 2014-04-10 12:41:43 --> Hooks Class Initialized
DEBUG - 2014-04-10 12:41:44 --> Utf8 Class Initialized
DEBUG - 2014-04-10 12:41:44 --> UTF-8 Support Enabled
DEBUG - 2014-04-10 12:41:44 --> URI Class Initialized
DEBUG - 2014-04-10 12:41:44 --> Router Class Initialized
DEBUG - 2014-04-10 12:41:44 --> Output Class Initialized
DEBUG - 2014-04-10 12:41:44 --> Security Class Initialized
DEBUG - 2014-04-10 12:41:44 --> Input Class Initialized
DEBUG - 2014-04-10 12:41:44 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-10 12:41:44 --> Language Class Initialized
DEBUG - 2014-04-10 12:41:44 --> Loader Class Initialized
DEBUG - 2014-04-10 12:41:44 --> Helper loaded: form_helper
DEBUG - 2014-04-10 12:41:44 --> Helper loaded: url_helper
DEBUG - 2014-04-10 12:41:44 --> Helper loaded: html_helper
DEBUG - 2014-04-10 12:41:44 --> Database Driver Class Initialized
DEBUG - 2014-04-10 12:41:45 --> Session Class Initialized
DEBUG - 2014-04-10 12:41:45 --> Helper loaded: string_helper
DEBUG - 2014-04-10 12:41:45 --> A session cookie was not found.
DEBUG - 2014-04-10 12:41:45 --> Session routines successfully run
DEBUG - 2014-04-10 12:41:45 --> Form Validation Class Initialized
DEBUG - 2014-04-10 12:41:45 --> Controller Class Initialized
DEBUG - 2014-04-10 12:41:45 --> Model Class Initialized
DEBUG - 2014-04-10 12:41:45 --> Model Class Initialized
DEBUG - 2014-04-10 12:41:45 --> Model Class Initialized
DEBUG - 2014-04-10 12:41:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-10 12:41:45 --> Encrypt Class Initialized
INFO  - 2014-04-10 12:41:45 --> after session initialization................
INFO  - 2014-04-10 12:41:45 --> Ajax retrieval for articles ::::::::::===>(SELECT d.id_drug, d.drug_name, d.drug_description, group_concat(bn.name) as drug_company, group_concat(dcc.name) as drug_brandnames, dcc.id_drugcategory as category_id, "true" as notChecked
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dcc`.`brandname_id`
WHERE `d`.`id_drug` not in (SELECT DISTINCT `da`.`drugid_drug` as id
FROM (`drugavailability` da)
WHERE `da`.`pharmacyid_pharmacy` = '1')
GROUP BY `id_drug`
ORDER BY `d`.`drug_name`, `bn`.`id_brandname`) union (SELECT d.id_drug, d.drug_name, d.drug_description, group_concat(bn.name, ":", bn.id_brandname) as drug_company, group_concat(dcc.name) as drug_brandnames, dcc.id_drugcategory as category_id, "false" as notChecked
FROM (`drug` d)
JOIN `drugcategory_drug` dcg ON `dcg`.`drug_id` = `d`.`id_drug`
JOIN `drugcategory` dcc ON `dcc`.`id_drugcategory` = `dcg`.`drugcategory_id`
JOIN `brandname` bn ON `bn`.`id_brandname` = `dcc`.`brandname_id`
WHERE `d`.`id_drug` in (SELECT DISTINCT `da`.`drugid_drug` as id
FROM (`drugavailability` da)
WHERE `da`.`pharmacyid_pharmacy` = '1')
GROUP BY `id_drug`
ORDER BY `d`.`drug_name`, `bn`.`id_brandname`)
INFO  - 2014-04-10 12:41:45 --> RETRIEVE PHARMACY=========== ::::::::::===>SELECT p.name, p.address, p.email, p.telephone, p.longitude, p.latitude, p.id_pharmacy as id, urp.status
FROM (`pharmacy` p)
JOIN `userrole_pharmacy` urp ON `p`.`id_pharmacy` = `urp`.`pharmacy_id`
JOIN `logindetails_userrole` lur ON `lur`.`id_logindetails_userrole` = `urp`.`loginuserrole_id`
JOIN `userrole` ur ON `ur`.`id_userrole` = `lur`.`logindetailsuserrole_userroleid`
JOIN `logindetails` ld ON `ld`.`id_logindetails` = `lur`.`logindetailsuserrole_logindetailsid`
WHERE lower(ur.name) =  'pharmacy owner'
AND `ld`.`memberid_member` =  '6'
ORDER BY `p`.`name`
DEBUG - 2014-04-10 12:41:45 --> Final output sent to browser
DEBUG - 2014-04-10 12:41:45 --> Total execution time: 1.5191
=======
DEBUG - 2014-04-10 10:53:47 --> Config Class Initialized
DEBUG - 2014-04-10 10:53:47 --> Hooks Class Initialized
DEBUG - 2014-04-10 10:53:47 --> Utf8 Class Initialized
DEBUG - 2014-04-10 10:53:47 --> UTF-8 Support Enabled
DEBUG - 2014-04-10 10:53:47 --> URI Class Initialized
DEBUG - 2014-04-10 10:53:47 --> Router Class Initialized
DEBUG - 2014-04-10 10:53:47 --> Output Class Initialized
DEBUG - 2014-04-10 10:53:47 --> Security Class Initialized
DEBUG - 2014-04-10 10:53:47 --> Input Class Initialized
DEBUG - 2014-04-10 10:53:47 --> Global POST and COOKIE data sanitized
DEBUG - 2014-04-10 10:53:47 --> Language Class Initialized
DEBUG - 2014-04-10 10:53:47 --> Loader Class Initialized
DEBUG - 2014-04-10 10:53:47 --> Helper loaded: form_helper
DEBUG - 2014-04-10 10:53:47 --> Helper loaded: url_helper
DEBUG - 2014-04-10 10:53:47 --> Helper loaded: html_helper
DEBUG - 2014-04-10 10:53:47 --> Database Driver Class Initialized
ERROR - 2014-04-10 10:53:47 --> Severity: 8192  --> mysql_pconnect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead /Applications/XAMPP/xamppfiles/htdocs/Pharmarays/pharmaray-system/database/drivers/mysql/mysql_driver.php 91
DEBUG - 2014-04-10 10:53:47 --> Session Class Initialized
DEBUG - 2014-04-10 10:53:47 --> Helper loaded: string_helper
DEBUG - 2014-04-10 10:53:47 --> A session cookie was not found.
DEBUG - 2014-04-10 10:53:47 --> Session routines successfully run
DEBUG - 2014-04-10 10:53:47 --> Form Validation Class Initialized
DEBUG - 2014-04-10 10:53:47 --> Controller Class Initialized
DEBUG - 2014-04-10 10:53:47 --> Model Class Initialized
DEBUG - 2014-04-10 10:53:47 --> Model Class Initialized
DEBUG - 2014-04-10 10:53:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2014-04-10 10:53:47 --> Encrypt Class Initialized
INFO  - 2014-04-10 10:53:47 --> after session initialization................
INFO  - 2014-04-10 10:53:47 --> after rays has been clicked.................
INFO  - 2014-04-10 10:53:47 --> last article id is 0
INFO  - 2014-04-10 10:53:47 --> The session id is ========>dded2d7985f7bd0d68e5485408d629a0 and the member id is =======>
INFO  - 2014-04-10 10:53:47 --> The session id is ========>dded2d7985f7bd0d68e5485408d629a0 and the member id is =======>
INFO  - 2014-04-10 10:53:47 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-10 10:53:47 --> 0 the guest only data>>>>>
INFO  - 2014-04-10 10:53:47 --> 0 the guest only data>> AFTER >>>#31
INFO  - 2014-04-10 10:53:47 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-10 10:53:47 --> 0 the guest only data>>>>>#31
INFO  - 2014-04-10 10:53:47 --> 0 the guest only data>> AFTER >>>#16
INFO  - 2014-04-10 10:53:47 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-10 10:53:47 --> 1 the guest only data>>>>>#16
INFO  - 2014-04-10 10:53:47 --> 1 the guest only data>> AFTER >>>#16
INFO  - 2014-04-10 10:53:47 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-10 10:53:47 --> 0 the guest only data>>>>>#16
INFO  - 2014-04-10 10:53:47 --> 0 the guest only data>> AFTER >>>#14
INFO  - 2014-04-10 10:53:47 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-10 10:53:47 --> 1 the guest only data>>>>>#14
INFO  - 2014-04-10 10:53:47 --> 1 the guest only data>> AFTER >>>#14
INFO  - 2014-04-10 10:53:47 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-10 10:53:47 --> 0 the guest only data>>>>>#14
INFO  - 2014-04-10 10:53:47 --> 0 the guest only data>> AFTER >>>#12
INFO  - 2014-04-10 10:53:47 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-10 10:53:47 --> 1 the guest only data>>>>>#12
INFO  - 2014-04-10 10:53:47 --> 1 the guest only data>> AFTER >>>#12
INFO  - 2014-04-10 10:53:47 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-10 10:53:47 --> 0 the guest only data>>>>>#12
INFO  - 2014-04-10 10:53:47 --> 0 the guest only data>> AFTER >>>#10
INFO  - 2014-04-10 10:53:47 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-10 10:53:47 --> 0 the guest only data>>>>>#10
INFO  - 2014-04-10 10:53:47 --> 0 the guest only data>> AFTER >>>#9
INFO  - 2014-04-10 10:53:47 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-10 10:53:47 --> 1 the guest only data>>>>>#9
INFO  - 2014-04-10 10:53:47 --> 1 the guest only data>> AFTER >>>#9
INFO  - 2014-04-10 10:53:47 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-10 10:53:47 --> 0 the guest only data>>>>>#9
INFO  - 2014-04-10 10:53:47 --> 0 the guest only data>> AFTER >>>#7
INFO  - 2014-04-10 10:53:47 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-10 10:53:47 --> 1 the guest only data>>>>>#7
INFO  - 2014-04-10 10:53:47 --> 1 the guest only data>> AFTER >>>#7
INFO  - 2014-04-10 10:53:47 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-10 10:53:47 --> 0 the guest only data>>>>>#7
INFO  - 2014-04-10 10:53:47 --> 0 the guest only data>> AFTER >>>#5
INFO  - 2014-04-10 10:53:47 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-10 10:53:47 --> 0 the guest only data>>>>>#5
INFO  - 2014-04-10 10:53:47 --> 0 the guest only data>> AFTER >>>#4
INFO  - 2014-04-10 10:53:47 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-10 10:53:47 --> 1 the guest only data>>>>>#4
INFO  - 2014-04-10 10:53:47 --> 1 the guest only data>> AFTER >>>#4
INFO  - 2014-04-10 10:53:47 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-10 10:53:47 --> 1 the guest only data>>>>>#4
INFO  - 2014-04-10 10:53:47 --> 1 the guest only data>> AFTER >>>#4
INFO  - 2014-04-10 10:53:47 --> The key doesnt exist <<<<<<<<<<<<<<>>>>>>>>>>>>>
INFO  - 2014-04-10 10:53:47 --> 1 the guest only data>>>>>#4
INFO  - 2014-04-10 10:53:47 --> 1 the guest only data>> AFTER >>>#4
DEBUG - 2014-04-10 10:53:47 --> File loaded: ../pharmaray-application/views/homepage.php
DEBUG - 2014-04-10 10:53:47 --> Final output sent to browser
DEBUG - 2014-04-10 10:53:47 --> Total execution time: 0.1326
>>>>>>> 044b4e3f02437d6ae93cd6de16b59366135bb266
