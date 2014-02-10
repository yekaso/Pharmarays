ALTER TABLE adverseeffects DROP FOREIGN KEY FKadverseeff649841;
ALTER TABLE cautions DROP FOREIGN KEY FKcautions692964;
ALTER TABLE contraindications DROP FOREIGN KEY FKcontraindi864295;
ALTER TABLE dosingtype DROP FOREIGN KEY FKdosingtype456074;
ALTER TABLE drugailment DROP FOREIGN KEY FKdrugailmen819159;
ALTER TABLE drugailment DROP FOREIGN KEY FKdrugailmen672913;
ALTER TABLE drugailment DROP FOREIGN KEY FKdrugailmen947431;
ALTER TABLE drugcomment DROP FOREIGN KEY FKdrugcommen713059;
ALTER TABLE drugcomment DROP FOREIGN KEY FKdrugcommen111423;
ALTER TABLE drugdosing DROP FOREIGN KEY FKdrugdosing681264;
ALTER TABLE drugdosing DROP FOREIGN KEY FKdrugdosing826934;
ALTER TABLE news DROP FOREIGN KEY FKnews128878;
ALTER TABLE newscomment DROP FOREIGN KEY FKnewscommen268634;
ALTER TABLE newscomment DROP FOREIGN KEY FKnewscommen279578;
ALTER TABLE newsletter DROP FOREIGN KEY FKnewsletter926780;
ALTER TABLE newslettercomment DROP FOREIGN KEY FKnewsletter300764;
ALTER TABLE newslettercomment DROP FOREIGN KEY FKnewsletter685166;
ALTER TABLE otherindications DROP FOREIGN KEY FKotherindic987530;
ALTER TABLE pharmacology DROP FOREIGN KEY FKpharmacolo587705;
ALTER TABLE pharmacology DROP FOREIGN KEY FKpharmacolo233045;
ALTER TABLE preglactation DROP FOREIGN KEY FKpreglactat285955;
ALTER TABLE preglactation DROP FOREIGN KEY FKpreglactat381228;
ALTER TABLE rolemapper DROP FOREIGN KEY FKrolemapper930068;
ALTER TABLE rolemapper DROP FOREIGN KEY FKrolemapper612128;
ALTER TABLE member DROP FOREIGN KEY FKmember786756;
DROP TABLE IF EXISTS administrator;
DROP TABLE IF EXISTS member;
DROP TABLE IF EXISTS admin;
DROP TABLE IF EXISTS adverseeffects;
DROP TABLE IF EXISTS drug;
DROP TABLE IF EXISTS ailmentstage;
DROP TABLE IF EXISTS brandname;
DROP TABLE IF EXISTS cautions;
DROP TABLE IF EXISTS contraindications;
DROP TABLE IF EXISTS dosingtype;
DROP TABLE IF EXISTS drugailment;
DROP TABLE IF EXISTS drugcategory;
DROP TABLE IF EXISTS drugclass;
DROP TABLE IF EXISTS drugcomment;
DROP TABLE IF EXISTS drugdosing;
DROP TABLE IF EXISTS logindetails;
DROP TABLE IF EXISTS news;
DROP TABLE IF EXISTS newscomment;
DROP TABLE IF EXISTS newsletter;
DROP TABLE IF EXISTS newslettercomment;
DROP TABLE IF EXISTS otherindications;
DROP TABLE IF EXISTS pharmacologytype;
DROP TABLE IF EXISTS pharmacology;
DROP TABLE IF EXISTS preglactation;
DROP TABLE IF EXISTS pregnancycategory;
DROP TABLE IF EXISTS rolemapper;
DROP TABLE IF EXISTS userrole;
DROP TABLE IF EXISTS membertype;
CREATE TABLE administrator (
  id_admin          int(10) NOT NULL AUTO_INCREMENT, 
  name_admin        varchar(100) NOT NULL, 
  password_admin    varchar(100) NOT NULL, 
  timecreated_admin timestamp NOT NULL, 
  PRIMARY KEY (id_admin));
CREATE TABLE member (
  id_member               int(10) NOT NULL AUTO_INCREMENT, 
  firstname_member        varchar(100) NOT NULL, 
  surname_member          varchar(100) NOT NULL, 
  gender_member           tinyint NOT NULL, 
  dateOfBirth_member      varchar(100) NOT NULL, 
  password_member         varchar(100) NOT NULL, 
  emailaddress_member     varchar(100) NOT NULL, 
  membertypeid_membertype int(10) NOT NULL, 
  PRIMARY KEY (id_member));
CREATE TABLE admin (
  ID          int(11) NOT NULL AUTO_INCREMENT, 
  name        tinytext, 
  description mediumtext, 
  id_ailment  int(11), 
  PRIMARY KEY (ID));
CREATE TABLE adverseeffects (
  id_adverseeffects int(10) NOT NULL AUTO_INCREMENT, 
  description       mediumtext, 
  drugid_drug       int(10) NOT NULL, 
  PRIMARY KEY (id_adverseeffects));
CREATE TABLE drug (
  id_drug          int(10) NOT NULL AUTO_INCREMENT, 
  drug_name        tinytext, 
  drug_description mediumtext, 
  PRIMARY KEY (id_drug));
CREATE TABLE ailmentstage (
  id_ailmentstage int(10) NOT NULL AUTO_INCREMENT, 
  name            tinytext, 
  description     mediumtext, 
  PRIMARY KEY (id_ailmentstage));
CREATE TABLE brandname (
  id_brandname int(10) NOT NULL AUTO_INCREMENT, 
  name         tinytext, 
  description  tinytext, 
  PRIMARY KEY (id_brandname));
CREATE TABLE cautions (
  id_cautions int(10) NOT NULL AUTO_INCREMENT, 
  description mediumtext, 
  drugid_drug int(10) NOT NULL, 
  PRIMARY KEY (id_cautions));
CREATE TABLE contraindications (
  id_contraindications int(10) NOT NULL AUTO_INCREMENT, 
  description          mediumtext, 
  drugid_drug          int(10) NOT NULL, 
  PRIMARY KEY (id_contraindications));
CREATE TABLE dosingtype (
  id_dosingtype int(10) NOT NULL AUTO_INCREMENT, 
  description   mediumtext, 
  PRIMARY KEY (id_dosingtype));
CREATE TABLE drugailment (
  id_drugailment              int(10) NOT NULL AUTO_INCREMENT, 
  description                 mediumtext, 
  drugid_drug                 int(10) NOT NULL, 
  ailmentstageid_ailmentstage int(10), 
  PRIMARY KEY (id_drugailment));
CREATE TABLE drugcategory (
  id_drugcategory int(10) NOT NULL AUTO_INCREMENT, 
  name            tinytext, 
  description     mediumtext, 
  PRIMARY KEY (id_drugcategory));
CREATE TABLE drugclass (
  id_drugclass int(10) NOT NULL AUTO_INCREMENT, 
  name         tinytext, 
  description  mediumtext, 
  PRIMARY KEY (id_drugclass));
CREATE TABLE drugcomment (
  id_drugcomment  int(10) NOT NULL AUTO_INCREMENT, 
  comment         mediumtext, 
  memberid_member int(10) NOT NULL, 
  drugid_drug     int(10) NOT NULL, 
  PRIMARY KEY (id_drugcomment));
CREATE TABLE drugdosing (
  id_drugdosing           int(10) NOT NULL AUTO_INCREMENT, 
  title                   tinytext, 
  description             mediumtext, 
  drugid_drug             int(10) NOT NULL, 
  dosingtypeid_dosingtype int(10), 
  PRIMARY KEY (id_drugdosing));
CREATE TABLE logindetails (
  id_logindetails int(10) NOT NULL AUTO_INCREMENT, 
  username        tinytext, 
  password        tinytext, 
  status          tinytext, 
  datecreated     datetime, 
  datemodified    datetime, 
  PRIMARY KEY (id_logindetails));
CREATE TABLE news (
  id_news         int(10) NOT NULL AUTO_INCREMENT, 
  title           tinytext, 
  description     mediumtext, 
  memberid_member int(10) NOT NULL, 
  PRIMARY KEY (id_news));
CREATE TABLE newscomment (
  id_newscomment  int(10) NOT NULL AUTO_INCREMENT, 
  comment         mediumtext, 
  memberid_member int(10) NOT NULL, 
  newsid_news     int(10) NOT NULL, 
  PRIMARY KEY (id_newscomment));
CREATE TABLE newsletter (
  id_newsletter   int(10) NOT NULL AUTO_INCREMENT, 
  title           tinytext, 
  description     mediumtext, 
  memberid_member int(10) NOT NULL, 
  PRIMARY KEY (id_newsletter));
CREATE TABLE newslettercomment (
  id_newslettercomment    int(10) NOT NULL AUTO_INCREMENT, 
  comment                 longtext, 
  memberid_member         int(10) NOT NULL, 
  newsletterid_newsletter int(10) NOT NULL, 
  PRIMARY KEY (id_newslettercomment));
CREATE TABLE otherindications (
  id_otherindications int(10) NOT NULL AUTO_INCREMENT, 
  description         tinytext, 
  drugid_drug         int(10) NOT NULL, 
  PRIMARY KEY (id_otherindications));
CREATE TABLE pharmacologytype (
  id_pharmacologytype int(10) NOT NULL AUTO_INCREMENT, 
  name                tinytext, 
  description         mediumtext, 
  PRIMARY KEY (id_pharmacologytype));
CREATE TABLE pharmacology (
  id_pharmacology                     int(10) NOT NULL AUTO_INCREMENT, 
  description                         mediumtext, 
  drugid_drug                         int(10) NOT NULL, 
  pharmacologytypeid_pharmacologytype int(10) NOT NULL, 
  PRIMARY KEY (id_pharmacology));
CREATE TABLE preglactation (
  id_preglactation                      int(10) NOT NULL AUTO_INCREMENT, 
  description                           mediumtext, 
  drugid_drug                           int(10) NOT NULL, 
  pregnancycategoryid_pregnancycategory int(10) NOT NULL, 
  PRIMARY KEY (id_preglactation));
CREATE TABLE pregnancycategory (
  id_pregnancycategory int(10) NOT NULL AUTO_INCREMENT, 
  name                 tinytext, 
  description          mediumtext, 
  PRIMARY KEY (id_pregnancycategory));
CREATE TABLE rolemapper (
  id_rolemapper       int(10) NOT NULL AUTO_INCREMENT, 
  memberid_member     int(10) NOT NULL, 
  userroleid_userrole int(10), 
  PRIMARY KEY (id_rolemapper));
CREATE TABLE userrole (
  id_userrole int(10) NOT NULL AUTO_INCREMENT, 
  name        tinytext, 
  description mediumtext, 
  PRIMARY KEY (id_userrole));
CREATE TABLE membertype (
  id_membertype int(10) NOT NULL AUTO_INCREMENT, 
  name          tinytext, 
  description   mediumtext, 
  PRIMARY KEY (id_membertype));
ALTER TABLE adverseeffects ADD INDEX FKadverseeff649841 (drugid_drug), ADD CONSTRAINT FKadverseeff649841 FOREIGN KEY (drugid_drug) REFERENCES drug (id_drug);
ALTER TABLE cautions ADD INDEX FKcautions692964 (drugid_drug), ADD CONSTRAINT FKcautions692964 FOREIGN KEY (drugid_drug) REFERENCES drug (id_drug);
ALTER TABLE contraindications ADD INDEX FKcontraindi864295 (drugid_drug), ADD CONSTRAINT FKcontraindi864295 FOREIGN KEY (drugid_drug) REFERENCES drug (id_drug);
ALTER TABLE dosingtype ADD INDEX FKdosingtype456074 (), ADD CONSTRAINT FKdosingtype456074 FOREIGN KEY () REFERENCES dosingtype ();
ALTER TABLE drugailment ADD INDEX FKdrugailmen819159 (drugid_drug), ADD CONSTRAINT FKdrugailmen819159 FOREIGN KEY (drugid_drug) REFERENCES drug (id_drug);
ALTER TABLE drugailment ADD INDEX FKdrugailmen672913 (ailmentstageid_ailmentstage), ADD CONSTRAINT FKdrugailmen672913 FOREIGN KEY (ailmentstageid_ailmentstage) REFERENCES ailmentstage (id_ailmentstage);
ALTER TABLE drugailment ADD INDEX FKdrugailmen947431 (), ADD CONSTRAINT FKdrugailmen947431 FOREIGN KEY () REFERENCES drugailment ();
ALTER TABLE drugcomment ADD INDEX FKdrugcommen713059 (memberid_member), ADD CONSTRAINT FKdrugcommen713059 FOREIGN KEY (memberid_member) REFERENCES member (id_member);
ALTER TABLE drugcomment ADD INDEX FKdrugcommen111423 (drugid_drug), ADD CONSTRAINT FKdrugcommen111423 FOREIGN KEY (drugid_drug) REFERENCES drug (id_drug);
ALTER TABLE drugdosing ADD INDEX FKdrugdosing681264 (drugid_drug), ADD CONSTRAINT FKdrugdosing681264 FOREIGN KEY (drugid_drug) REFERENCES drug (id_drug);
ALTER TABLE drugdosing ADD INDEX FKdrugdosing826934 (dosingtypeid_dosingtype), ADD CONSTRAINT FKdrugdosing826934 FOREIGN KEY (dosingtypeid_dosingtype) REFERENCES dosingtype (id_dosingtype);
ALTER TABLE news ADD INDEX FKnews128878 (memberid_member), ADD CONSTRAINT FKnews128878 FOREIGN KEY (memberid_member) REFERENCES member (id_member);
ALTER TABLE newscomment ADD INDEX FKnewscommen268634 (newsid_news), ADD CONSTRAINT FKnewscommen268634 FOREIGN KEY (newsid_news) REFERENCES news (id_news);
ALTER TABLE newscomment ADD INDEX FKnewscommen279578 (memberid_member), ADD CONSTRAINT FKnewscommen279578 FOREIGN KEY (memberid_member) REFERENCES member (id_member);
ALTER TABLE newsletter ADD INDEX FKnewsletter926780 (memberid_member), ADD CONSTRAINT FKnewsletter926780 FOREIGN KEY (memberid_member) REFERENCES member (id_member);
ALTER TABLE newslettercomment ADD INDEX FKnewsletter300764 (newsletterid_newsletter), ADD CONSTRAINT FKnewsletter300764 FOREIGN KEY (newsletterid_newsletter) REFERENCES newsletter (id_newsletter);
ALTER TABLE newslettercomment ADD INDEX FKnewsletter685166 (memberid_member), ADD CONSTRAINT FKnewsletter685166 FOREIGN KEY (memberid_member) REFERENCES member (id_member);
ALTER TABLE otherindications ADD INDEX FKotherindic987530 (drugid_drug), ADD CONSTRAINT FKotherindic987530 FOREIGN KEY (drugid_drug) REFERENCES drug (id_drug);
ALTER TABLE pharmacology ADD INDEX FKpharmacolo587705 (pharmacologytypeid_pharmacologytype), ADD CONSTRAINT FKpharmacolo587705 FOREIGN KEY (pharmacologytypeid_pharmacologytype) REFERENCES pharmacologytype (id_pharmacologytype);
ALTER TABLE pharmacology ADD INDEX FKpharmacolo233045 (drugid_drug), ADD CONSTRAINT FKpharmacolo233045 FOREIGN KEY (drugid_drug) REFERENCES drug (id_drug);
ALTER TABLE preglactation ADD INDEX FKpreglactat285955 (drugid_drug), ADD CONSTRAINT FKpreglactat285955 FOREIGN KEY (drugid_drug) REFERENCES drug (id_drug);
ALTER TABLE preglactation ADD INDEX FKpreglactat381228 (pregnancycategoryid_pregnancycategory), ADD CONSTRAINT FKpreglactat381228 FOREIGN KEY (pregnancycategoryid_pregnancycategory) REFERENCES pregnancycategory (id_pregnancycategory);
ALTER TABLE rolemapper ADD INDEX FKrolemapper930068 (memberid_member), ADD CONSTRAINT FKrolemapper930068 FOREIGN KEY (memberid_member) REFERENCES member (id_member);
ALTER TABLE rolemapper ADD INDEX FKrolemapper612128 (userroleid_userrole), ADD CONSTRAINT FKrolemapper612128 FOREIGN KEY (userroleid_userrole) REFERENCES userrole (id_userrole);
ALTER TABLE member ADD INDEX FKmember786756 (membertypeid_membertype), ADD CONSTRAINT FKmember786756 FOREIGN KEY (membertypeid_membertype) REFERENCES membertype (id_membertype);
